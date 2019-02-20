<?php
class Seed{
	function save(){
		$user=new User();
		$user->email="admin@admin.com";
		$user->name="Gaurav";
		$user->password="secret";
		$user->save();

		$book=new Book();
		$book->title="Think and Grow Rich";
		$book->author="Napoleon Hill";
		$book->thumbnail="book_imagelib1.png";
		$book->save();

		$book=new Book();
		$book->title="My Story";
		$book->author="kamla das";
		$book->thumbnail="book_imagelib2.png";
		$book->save();

		$book3=new Book();
		$book3->title="Aganpankh";
		$book3->author="A.P.J. Abdul Kalam";
		$book3->thumbnail="book_imagelib3.jpeg";
		$book3->save();

		$bookcount=new BookCount();
		$bookcount->book_total =6 ;
		$bookcount->book_remaining =6 ;
		$bookcount->save();

		$bookcount=new BookCount();
		$bookcount->book_total =6;
		$bookcount->book_remaining =6;
		$bookcount->save();

		$bookcount=new BookCount();
		$bookcount->book_total =6 ;
		$bookcount->book_remaining =6;
		$bookcount->save();

		$student=new Student();
		$student->name ="Gaurav" ;
		$student->course ="B.Sc" ;
		$student->Dob = "22-05-1950";
		$student->FatherName = "PS Tiwari";
		$student->save();

		$student=new Student();
		$student->name ="Meenakshi" ;
		$student->course ="B.Com" ;
		$student->Dob = "29-08-1990";
		$student->FatherName = "NP tiwari";
		$student->save();
}
}