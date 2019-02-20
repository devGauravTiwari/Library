<div class="container">
<?php
$books=json_decode(Book::all());
$total_books=count($books);
?>
<div class="row">
<?php
for($i=0;$i<$total_books;$i++){
?>
<div class="col-md-4">
	<div class="product-image">
        <a href="#">
			<img src=<?php echo(App::route($books[$i]->thumbnail,"doc"));?> >
		</a>
		<div class="description">
			<p class="text-center">Title :: <?php echo $books[$i]->title; ?></p>
			<p class="text-center">Author :: <?php echo $books[$i]->author; ?></p>
		</div>
	</div>
</div>
<?php
}
?>
</div>
</div>