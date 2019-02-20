<?php
class Database{
	function setup(){
		Database::create_users_table_if_not_exists();
		Database::create_books_table_if_not_exists();
		Database::create_students_table_if_not_exists();
		Database::create_bookcounts_table_if_not_exists();
		Database::create_issuedtos_table_if_not_exists();
	}
	function fresh(){
		Database::drop_issuedtos_if_exists();
		Database::drop_bookcounts_if_exists();
		Database::drop_books_if_exists();
		Database::drop_users_if_exists();
		Database::drop_students_if_exists();
		Database::setup();
		Seed::save();
	}
	function myQuery($query){
		$DB = mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
		$DB->query($query);
	}
	function create_users_table_if_not_exists(){
		$query="CREATE TABLE IF NOT EXISTS users(id int AUTO_INCREMENT PRIMARY KEY,email varchar(30),name varchar(30),password VARCHAR(20))";
		Database::myQuery($query);
	}
	function create_students_table_if_not_exists(){
		$query="CREATE TABLE IF NOT EXISTS students(id int AUTO_INCREMENT PRIMARY KEY,name varchar(30),course VARCHAR(30),Dob VARCHAR(30),FatherName VARCHAR(30));";
		Database::myQuery($query);
	}
	function create_books_table_if_not_exists(){
		$query="CREATE TABLE IF NOT EXISTS books(id int AUTO_INCREMENT PRIMARY KEY,title varchar(30),author varchar(30),thumbnail VARCHAR(30))";
		Database::myQuery($query);
	}
	function create_bookcounts_table_if_not_exists(){
		$query="CREATE TABLE IF NOT EXISTS bookcounts(id int AUTO_INCREMENT PRIMARY KEY,book_total int,book_remaining int,FOREIGN KEY(id) REFERENCES books(id));";
		Database::myQuery($query);
	}
	function create_issuedtos_table_if_not_exists(){
		$query="CREATE TABLE IF NOT EXISTS issuedtos(id int AUTO_INCREMENT PRIMARY KEY,book_id int,student_id int,FOREIGN KEY(book_id) REFERENCES books(id),FOREIGN KEY(student_id) REFERENCES students(id));";
		Database::myQuery($query);
	}
	function drop_books_if_exists(){
		$query="DROP TABLE IF EXISTS books";
		Database::myQuery($query);
	}
	function drop_users_if_exists(){
		$query="DROP TABLE IF EXISTS users";
		Database::myQuery($query);
	}
	function drop_students_if_exists(){
		$query="DROP TABLE IF EXISTS students";
		Database::myQuery($query);
	}
	function drop_bookcounts_if_exists(){
		$query="DROP TABLE IF EXISTS bookcounts";
		Database::myQuery($query);
	}
	function drop_issuedtos_if_exists(){
		$query="DROP TABLE IF EXISTS issuedtos";
		Database::myQuery($query);
	}
}
?>