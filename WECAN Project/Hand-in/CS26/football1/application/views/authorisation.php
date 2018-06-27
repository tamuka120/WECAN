<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 { font-family: Verdana; color:white;font-size:25px;}
		h2 { font-family: Calibri; padding-top: 0px;}			
		
	
	</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<title>Authorisations</title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<body>

<div class="container" style="background-color:white;border-radius:21px;">
<p></p>
	<i style="font-size:40px;" class="fa fa-lock" aria-hidden="true"> Authorisation</i>
	<p><b>Note: Authorisations should be given "Granted" or "Denied"</b></p>




		<?php echo $output; ?>
		<br>
    </div>
</div>
</body>
</html>
