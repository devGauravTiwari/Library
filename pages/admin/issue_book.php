<?php
if(isset($_POST['s_id'])){
	$id=explode("/",$_POST['s_id'])[0];
	if(is_numeric($_POST['s_id']) or Student::find($id)=="null") return;
	$book=new BookCount();
	$book->get($_POST['id']);
	if($book->book_remaining>0){
		$issue=new Isseued_to();
		$issue->book_id=$_POST['id'];
		$issue->student_id=$id;
		$issue->save();
		$book->book_remaining--;
	    $book->save("update");
	    $loc=App::route("admin");
	    $n=json_decode(Student::find($issue->student_id))->name;
	    echo("<script>alert('book issued to $n');window.location.href='$loc';</script>");
	}else{
		echo("<script>alert('$book->book_remaining' )</script>");
	}
}
?>