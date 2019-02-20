<?php
$id=$_GET['book'];
$students=json_decode(Student::all());
if($id!='' and $book=json_decode(Book::find($id))){
?>
<img src='<?php echo(App::route($book->thumbnail,"doc"));?>' >
<form method='post' id="deleteitem">
	<input type="hidden" name="id" value="<?php echo($id);?>">
	<input type="hidden" name="delete">
</form>
<form method='post' id="updateitem">
	<input type="hidden" name="id" value="<?php echo($id);?>">
	<input type="hidden" name="update">
</form>
<form method='post' id="issueitem" action="<?php echo(App::route('admin/issuebook')); ?>">
	<input type="hidden" name="id" value="<?php echo($id);?>">
	<select id="s_id" name="s_id" style="display: block">
	<?php foreach ($students as $student) {
		echo("<option>$student->id / $student->name</option>");
	}?>
	</select>
	<input type="submit" value="Issue" >
</form>
<script type="text/javascript">$('#issueitem').hide();</script>
<button onclick="$('#deleteitem').submit();">Delete Book</button>
<button onclick="$('#updateitem').submit();">Update Details</button>
<button onclick="$('#issueitem').toggle();">Issue Book</button>
<?php
}
if(isset($_POST['id'])){
	if(isset($_POST['delete'])){
		Book::delete($_POST['id']);
		App::redirect('admin');
	}else if(isset($_POST['update'])){

	}
}
?>