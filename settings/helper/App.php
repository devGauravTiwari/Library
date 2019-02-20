<?php
class App{
	function login($uid,$password){
			$DB = mysqli_connect(Env::$HOST_NAME,Env::$USER_NAME,Env::$PASSWORD,Env::$DATABASE_NAME);
			$query="select * from users where email='$uid' and password='$password'";
			$res=$DB->query($query);
			if($res->num_rows>0){
				session_destroy();
				session_start();
				$_SESSION['Uname']=$uid;
				echo($_SESSION['Uname']);
				return true;
			}
			return false;
		}
	function is_loged_in(){
		if(isset($_SESSION['Uname'])){
			return true;
		}
		return false;
	}
	function redirect($url, $permanent = false) {
		if($permanent) {
			header('HTTP/1.1 301 Moved Permanently');
		}
		header('Location: '. App::route($url));
		exit();
	}
	function route($url,$item="page"){
		if($item=="page"){
			return Env::$PATH."/".$url;
		}else if($item=="image" or $item=="img"){
			return Env::$PATH."/images/".$url;
		}else if($item=="stylesheet" or $item=="css"){
			return Env::$PATH."/css/".$url;
		}else if($item=="javascript" or $item=="js"){
			return Env::$PATH."/js/".$url;
		}else if($item=="doc"){
			return Env::$PATH."/doc/".$url;
		}
	}
	function currentURI(){
		return $_SERVER['REQUEST_URI'];
	}
}
class My{
	function contains($str,$array){
		$l=count($array);
		for($i=0;$i<$l;$i++){
			if($array[$i]===$str){
				return true;
			}
		}
		return false;
	}
}
?>