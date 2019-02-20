<?php
class Student extends Table{
	public $Dob;
	public $course;
	public $name;
	private$DB;
	public $id;
	public $FatherName ;
	function __construct(){
		$this->DB=mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
	}
	private function getId(){
		$query="select * from Students order by id DESC";
		$result=$this->DB->query($query);
		$row = $result->fetch_assoc();
		$this->id=$row['id'];
	}
	function save($flag="insert"){
		$FatherName=$this->FatherName;
		$Dob=$this->Dob;
		$name=$this->name;
		$course=$this->course;
		if($flag=="insert"){
			$this->insert_into_table($Dob,$course,$name,$FatherName);
		}else if($flag=="update"){
			$this->update_table($this->id,$Dob,$course,$name,$FatherName);
		}
	}
	private function insert_into_table($Dob,$course,$name,$FatherName){
		$query="INSERT INTO Students (`FatherName`, `Dob`, `name`,`course`) VALUES ('$FatherName','$Dob','$name','$course');";
		return $this->DB->query($query);
	}
	private function update_table($id,$Dob,$course,$name,$FatherName){
		$query="UPDATE Students  SET `FatherName`='$FatherName',`Dob`='$Dob',`name`='$name' ,`course`='$course' WHERE  `id`='$id';";
		return $this->DB->query($query);
	}
	function all($table_name="Students"){
		return parent::_all($table_name);
	}
	function find($id,$table_name="Students"){
		return parent::_find($id,$table_name);
	}
	function delete($id,$table_name="Students"){
		return parent::_delete($id,$table_name);
	}
}
?>