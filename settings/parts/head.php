<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>
</TITLE>
<meta name="viewport" content="width=device-width ,initial-scale=1.0"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<LINK rel="icon" type="image/" href=<?php echo(App::route("icon.png","img")); ?> /><!-- web page icon -->
<LINK rel="stylesheet" href=<?php echo(App::route("style.css","css")); ?> /><!-- web page main style seet -->
<SCRIPT type="text/javascript" src=<?php echo(App::route("main.js","js")); ?> ></SCRIPT><!-- web page main scripting sheet -->
</HEAD>
<BODY>
<HEADER>
	<div class="container">
		<?php
			include_once('header.php');
		?>
	</div>
</HEADER>