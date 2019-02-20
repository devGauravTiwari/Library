<?php
class Book extends Table{
	public $title;
	public $author;
	public $thumbnail;
	private $DB;
	public $id;
	function __construct(){
		$this->DB=mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
	}
	function __destruct(){
		$this->DB->close();
	}
	private function getId(){
		$query="select * from books order by id DESC";
		$result=$this->DB->query($query);
		$row = $result->fetch_assoc();
		$this->id=$row['id'];
	}
	function save($flag="insert"){
		$title=$this->title;
		$author=$this->author;
		$thumbnail=$this->thumbnail;
		if($flag=="insert"){
			 $this->insert_into_table($title,$author,$thumbnail);
			$this->getId();
		}else if($flag=="update"){
			$this->update_table($this->id,$title,$author,$thumbnail);
		}
	}
	private function insert_into_table($title,$author,$thumbnail){
		$query="INSERT INTO `books`(`title`, `author`, `thumbnail`) VALUES ('$title','$author','$thumbnail');";
		return $this->DB->query($query);
	}
	private function update_table($id,$title,$author,$thumbnail){
		$query="UPDATE `books` SET `title`='$title',`author`='$author',`thumbnail`='$thumbnail' WHERE  `id`='$id';";
		return $this->DB->query($query);
	}
	function all($table_name="books"){
		return parent::_all($table_name);
	}
	function find($id,$table_name="books"){
		return parent::_find($id,$table_name);
	}
	function delete($id,$table_name="books"){
		parent::_delete($id,"bookcounts");
		return parent::_delete($id,$table_name);
	}
}
?>