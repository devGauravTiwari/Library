<?php
class Isseued_to extends Table{
	public $id;
	public $student_id;
	public $book_id;
	private $DB;
	function __construct(){
		$this->DB=mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
	}
	function save($flag="insert"){
		$student_id=$this->student_id;
		$book_id=$this->book_id;
		if($flag=="insert"){
			return $this->insert_into_table($student_id,$book_id);
		}else if($flag=="update"){
			return $this->update_table($id,$student_id,$book_id);
		}
	}
	private function getId(){
		$query="select * from issuedtos order by id DESC";
		$result=$this->DB->query($query);
		$row = $result->fetch_assoc();
		$this->id=$row['id'];
	}
	private function insert_into_table($student_id,$book_id){
		$query="INSERT INTO issuedtos (`student_id`, `book_id`) VALUES ('$student_id','$book_id');";
		return $this->DB->query($query);
	}
	private function update_table($id,$student_id,$book_id){
		$query="UPDATE issuedtos  SET `student_id`='$student_id',`book_id`='$book_id' WHERE  `id`='$id';";
		return $this->DB->query($query);
	}
	function all($table_name="issuedtos"){
		return parent::_all($table_name);
	}
	function find($id,$table_name="issuedtos"){
		return parent::_find($id,$table_name);
	}
	function delete($id,$table_name="issuedtos"){
		return parent::_delete($id,$table_name);
	}
	function find_student($s_id){
		$DB=mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
		$r=$DB->query("SELECT `id`, `book_id` FROM `issuedtos` WHERE `student_id`=$s_id");
		$result=array();
		for($i=0;$row=$r->fetch_assoc();$i++){
			$result[$i]=$row;
		}
		return json_encode($result);
	}
	function find_book($b_id){

	}
}
?>