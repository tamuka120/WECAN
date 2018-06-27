<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
	   h1 { font-family: Verdana; color:white;font-size:25px;}
		h2 { font-family: Calibri; padding-top: 0px;}			
		
	</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Manage team</title>
	</head>
	
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
<i style="font-size:40px;" class="fa fa-user-plus" aria-hidden="true">Register Team</i>
<p></p>
    <form action="http://localhost:8080/football1/index.php/main/team/list">
    <input type="submit" value="Show list" class="btn btn-default"/>
</form>
<p></p>
	<button
   onclick="document.getElementById('id01').style.display='block'" class="w3-buttons btn btn-default">Eliminate Teams</button>
<br>
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-5 w3-animate-zoom modal-m">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Eliminate Teams</h2>
      </header>
      
      <div class="w3-container">
		  <div class="form-group">
<?php echo form_open ("main/eliminate_team", 'method="post"' ) ?>

<?php
$sql = "SELECT group_concat(team.teamID separator ',') as id FROM `team`"; // selects the data from the sql, seperated by ","
$query = $this->db->query($sql); // gets the data from database
$array1 = $query->row_array(); // results are populated into an array
$arr = explode(',',$array1['id']); // "," is withdrawn

/* TO figure out the size of the table */
$query1 = $this->db->get('team'); 
$num = $query1->num_rows();

    echo "<select name='team' class='form-control' id='dropd_list' style=' position:relative; height:27px; width:100px; top:5px;background: #F1F1F1;
 color: #000000; font-size:12px;'>";
		$i = 0;
		while ($i < $num){
		   echo "<option>".$arr[$i]."</option>";
		  $i++;            
		}
    echo "</select>";
 
?>
		  
</div>
</div>
		      <br>
		
      <footer class="w3-container">
        <p><b>Note:</b></p>
         <input type="submit" onclick="alert('Are you sure you want to proceed?')" style=" background: #F1F1F1; 					      	  
 		  color: #000000;"value="Submit" class="btn btn-default"></input>
      </footer>
      <?php echo form_close(); ?>
      <br>
    </div>
  </div>
  

<br>
    <?php echo $output; ?>
  <br>

</div>

</body>
</html>

