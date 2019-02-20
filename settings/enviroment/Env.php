<?php
class Env{
	// name of Application
	public static $APP_NAME='Library';

	// path of the root folder
	public static $PATH='';

	// database setup
	public static $DATABASE_NAME  = 'library';
	public static  $HOST_NAME  = 'localhost';
	public static $USER_NAME  = 'root';
	public static $PASSWORD  = '';
	public static $API_KEYS = array("secret");
	public static $API_IDS= array("admin");
	public static $ADMINS= array("admin",'logout');
}
?>