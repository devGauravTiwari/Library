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
        <a href='<?php echo(App::route("admin/book/".$books[$i]->id)); ?>' >
			<img src=<?php echo(App::route($books[$i]->thumbnail,"doc"));?> >
		</a>
		<div class="description">
			<p class="text-center"><b>Title  </b><i><?php echo $books[$i]->title; ?></i></p>
			<p class="text-center"><b>Author  </b><i><?php echo $books[$i]->author; ?></i></p>
			<p class="text-center"><b>Availtable copys  </b><i><?php echo json_decode(BookCount::find($books[$i]->id))->book_remaining; ?></i></p>
		</div>
	</div>
</div>
<?php
}
?>
</div>