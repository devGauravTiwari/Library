<div class="wrapper">
  <div class="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src=<?php echo(App::route("icon.png","img")); ?> id="icon" alt="User Icon" >
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="email" id="Email" class="fadeIn second" name="Email" placeholder="Email" required="required">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required="required">
      <input type="hidden" name='token'>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<?php
if(isset($_POST['token'])){
  App::login($_POST["Email"],$_POST["password"]);
}
if(isset($_SESSION['Uname'])){
  App::redirect("admin");
}
?>
