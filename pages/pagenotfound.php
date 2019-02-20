<div class="containe-fluid">
	<div class="row">
		<div class="col-md-6">
			<div style="padding:50% 0">
				<h1 class="text-center">404</h1>
			</div>
		</div>
		<div class="col-md-6" style=background-image:url('<?php echo(App::route("notfound.jpg","img")); ?>');>
			<div style="padding:50% 0">
				<h1 class="text-center">Not Found</h1>
			</div>
		</div>	
	</div>
</div>
<?php
print_r($_GET);
?>