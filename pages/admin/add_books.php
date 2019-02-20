<div class="col-md-12">
   <div class="row">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" >
         <fieldset>
           <!-- Text input-->
            <div class="form-group">
               <label class="col-md-12 control-label" for="book_name">BOOK TITLE</label>  
               <div class="col-md-12">
                  <input id="product_name" name="book_name" placeholder="BOOK NAME" class="form-control input-md" required="" type="text">
                  <input type="hidden" name="token" value="token">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-12 control-label" for="author_name">AUTHOR</label>  
               <div class="col-md-12">
                  <input id="product_name" name="author_name" placeholder="AUTHOR" class="form-control input-md" required="" type="text">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-12 control-label" for="totalbooks">TOTALBOOKS</label>  
               <div class="col-md-12">
                  <input id="totalbookse" name="book_total" placeholder="TOTALBOOKS" class="form-control input-md" required="" type="text">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-12 control-label" for="filebutton">THUMBNAIL</label>
               <div class="col-md-12">
                  <div class="product-image">
                     <a href="#">
                     <img class="pic-1" id="thumbnail" src=<?php echo(App::route("user.png","img")); ?> alt="user">
                     </a>
                     <input id="filebutton" name="image" class="input-file" type="file" required="required" onchange="PreviewImage();">
                     <script type="text/javascript">
                        function PreviewImage() {
                            var oFReader = new FileReader();
                            oFReader.readAsDataURL(document.getElementById("filebutton").files[0]);
                            oFReader.onload = function (oFREvent) {
                                $("#thumbnail").attr('src',oFREvent.target.result);
                            };
                        };
                        
                     </script>
                  </div>
               </div> 
            </div>
            <div class="form-group">
                  <div class="col-md-12">
                     <input class="btn btn-primary" type="submit" value="SAVE">
                  </div>
               </div>
         </fieldset>
      </form>
   </div>
</div>
<?php
if(isset($_POST['token'])){
	$book=new Book();
	$book->title=$_POST['book_name'];
	$book->author=$_POST['author_name'];
	$book->save();
  $book->thumbnail="book_imagelib".$book->id.".".explode('/',$_FILES['image']['type'])[1];
  $book->save("update");
  $des='/Library/images';
  move_uploaded_file($_FILES['image']['tmp_name'],"doc/".$book->thumbnail);
  $bookcount=new BookCount();
  $bookcount->id=$book->id;
  $bookcount->book_total=$_POST['book_total'];
  $bookcount->book_remaining=$_POST['book_total'];
  $bookcount->save();
}
?>