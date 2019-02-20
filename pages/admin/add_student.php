<div class="col-md-12">
   <div class="row">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" >
         <fieldset>
           <!-- Text input-->
            <div class="form-group">
               <label class="col-md-12 control-label" for="book_name">NAME</label>  
               <div class="col-md-12">
                  <input id="name" name="name" placeholder="NAME" class="form-control input-md" required="" type="text">
                  <input type="hidden" name="token" value="token">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-12 control-label" for="author_name">COURSE</label>  
               <div class="col-md-12">
                  <input id="course" name="course" placeholder="COURSE" class="form-control input-md" required="" type="text">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-12 control-label" for="totalbooks">DOB</label>  
               <div class="col-md-12">
                  <input id="dob" name="dob" placeholder="DOB" class="form-control input-md" required="" type="date">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-12 control-label" for="totalbooks">FATHERS NAME</label>  
               <div class="col-md-12">
                  <input id="father_name" name="father_name" placeholder="FATHERS NAME" class="form-control input-md" required="" type="text">
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
	$student=new Student();
	$student->name=$_POST['name'];
	$student->course=$_POST['course'];
	$student->Dob=$_POST['dob'];
	$student->FatherName=$_POST['father_name'];
	$student->save();
}
?>