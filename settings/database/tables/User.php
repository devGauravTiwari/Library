<?php
class User extends Table{
	public $id;
	public $email;
	public $name;
	public $password;
	private $DB;
	function __construct(){
		$this->DB=mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
	}
	private function getId(){
		$query="select * from users order by id DESC";
		$result=$this->DB->query($query);
		$row = $result->fetch_assoc();
		$this->id=$row['id'];
	}
	function save($flag="insert"){
		$email=$this->email;
		$name=$this->name;
		$password=$this->password;
		if($flag=="insert"){
			 $this->insert_into_table($email,$name,$password);
			$this->getId();
		}else if($flag=="update"){
			$this->update_table($this->id,$email,$name,$password);
		}
	}
	private function insert_into_table($email,$name,$password){
		$query="INSERT INTO `users`(`email`, `name`, `password`) VALUES ('$email','$name','$password');";
		return $this->DB->query($query);
	}
	private function update_table($id,$title,$author,$thumbnail){
		$query="UPDATE `users` SET `email`='$email',`name`='$name',`password`='$password' WHERE  `id`='$id';";
		return $this->DB->query($query);
	}
	function all($table_name="users"){
		return parent::_all($table_name);
	}
	function find($id,$table_name="users"){
		return parent::_find($id,$table_name);
	}
	function delete($id,$table_name="users"){
		return parent::_delete($id,$table_name);
	}
}
?>