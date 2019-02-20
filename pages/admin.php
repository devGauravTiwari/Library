<div class="row">
<?php
include_once('admin/partials/nav-right.php');
echo("<div class='col-md-10'>");
if(isset($_GET['addbook'])){
	include_once('admin/add_books.php');
}else if(isset($_GET['freshdb'])){
	include_once('admin/freshdb.php');
}else if(isset($_GET['book'])){
	include_once('admin/book.php');
}else if(isset($_GET['addstudent'])){
	include_once('admin/add_student.php');
}else if(isset($_GET['showstudent'])){
	include_once('admin/show_student.php');
}else if(isset($_GET['issuebook'])){
	include_once('admin/issue_book.php');
}
else{
	include_once('admin/show_books.php');
}
echo("</div>");
?>
</div>