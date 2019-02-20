<?php
abstract class Table{
	protected function _all($_tableName){
		$_con = mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
		$result=$_con->query("select * from $_tableName");
		$array=array();
		for($i=0;$row=$result->fetch_assoc();$i++){
			$array[$i]=$row;
		}
		$_con->close();
		return json_encode($array);
	}
	protected function _find($id,$_tableName){
		$_con = mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
		$result=$_con->query("select * from  $_tableName where id='$id';");
		return json_encode($result->fetch_assoc());
	}
	protected function _delete($id,$_tableName){
		$_con = mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
		return $_con->query("DELETE FROM $_tableName WHERE id='$id';");
	}
}
?>