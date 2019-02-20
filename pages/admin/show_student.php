<?php
$students=json_decode(Student::all());
?>
<div class="row">
<?php foreach ($students as $student) { 
	$issued=json_decode(Isseued_to::find_student($student->id));
?>
	<div class="col-md-4">
	<div class="product-image">
		<div class="description">
			<p class="text-center"><b>Name  </b><i><?php echo$student->name; ?></i></p>
			<p class="text-center"><b>Course  </b><i><?php echo $student->course; ?></i></p>
			<p class="text-center"><b>Dob  </b><i><?php echo $student->Dob; ?></i></p>
			<p class="text-center"><b>Fathersname  </b><i><?php echo $student->FatherName; ?></i></p>
			<p class="text-center"><b>Issued Books  </b>
				<?php 
				foreach ($issued as $issue) {
					echo(", ".$issue->book_id." "); 	
				}
				?>
			</p>	
		</div>
	</div>
</div>
<?php 
}
?>
</div>