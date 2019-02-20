<?php
class BookCount extends Table{
	public $id;
	public $book_total;
	public $book_remaining;
	private $DB;
	function __construct(){
		$this->DB=mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
	}
	function save($flag="insert"){
		$book_total=$this->book_total;
		$book_remaining=$this->book_remaining;
		if($flag=="insert"){
			return $this->insert_into_table($book_total,$book_remaining);
		}else if($flag=="update"){
			return $this->update_table($this->id,$book_total,$book_remaining);
		}
	}
	private function getId(){
		$query="select * from bookcounts order by id DESC";
		$result=$this->DB->query($query);
		$row = $result->fetch_assoc();
		$this->id=$row['id'];
	}
	private function insert_into_table($book_total,$book_remaining){
		$query="INSERT INTO bookcounts (`book_total`, `book_remaining`) VALUES ($book_total,$book_remaining);";
		return $this->DB->query($query);
	}
	private function update_table($id,$book_total,$book_remaining){
		$query="UPDATE `bookcounts` SET`book_total`=$book_total,`book_remaining`=$book_remaining WHERE `id`=$id;";
		return $this->DB->query($query);
	}
	function all($table_name="bookcounts"){
		return parent::_all($table_name);
	}
	function find($id,$table_name="bookcounts"){
		return parent::_find($id,$table_name);
	}
	function delete($id,$table_name="bookcounts"){
		return parent::_delete($id,$table_name);
	}
	function get($id){
		$book=json_decode(BookCount::find($id));
		$this->book_total=$book->book_total;
		$this->book_remaining=$book->book_remaining;
		$this->id=$book->id;
	}
}
?>