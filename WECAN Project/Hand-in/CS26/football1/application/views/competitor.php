<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body >

<title>Manage competitor</title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>



<div class="container" style="background-color:white;border-radius:21px;">
	<p></p>
<i style="font-size:40px;" class="fa fa-user-plus" aria-hidden="true"> Register Competitor</i>


<p></p>
<form action="http://localhost:8080/football1/index.php/main/competitor/add/list">
    <input type="submit" value="Show list" class="btn btn-default"/>
</form>
<p></p>
    <p><b>Note: Registering a competitor will automatically create a card and authorisation to venues given.</b></p>
		<?php echo $output; ?>
		<br>
    </div>
</body>
</html>
