<?php
if(!isset($_GET['api_key']) or !isset($_GET['api_id'])){
		echo("Not allowed to acess");
		return -1;
	}
else{
	if(!My::contains($_GET['api_key'],Env::$API_KEYS) or !My::contains($_GET['api_id'],Env::$API_IDS)){
		echo("Not allowed to acess");
		return -1;
	}
}
if(isset($_GET['table']) and isset($_GET['id'])){
	$table=$_GET['table'];
	$id=$_GET['id'];
	if($id==0){
		switch ($table) {
			case 'book':
				echo(Book::all());
				break;
			case 'student':
				echo(Student::all());
				break;
			case 'user':
				echo(User::all());
				break;
			case 'isseued_to':
				echo(Isseued_to::all());
				break;
			case 'bookcount':
				echo(BookCount::all());
				break;
		}
	}else{
		switch ($table) {
			case 'book':
				echo(Book::find($id));
				break;
			case 'student':
				echo(Student::find($id));
				break;
			case 'user':
				echo(User::find($id));
				break;
			case 'isseued_to':
				echo(Isseued_to::find($id));
				break;
			case 'bookcount':
				echo(BookCount::find($id));
				break;
		}
	}
}
?>