<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<style>
		h1 { font-family: Verdana; color:white;font-size:25px;}
		h2 { font-family: Calibri; padding-top: 0px;}			
		
	
	</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

			<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<title>Manage match</title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>




<div class="container" style="background-color:white;border-radius:21px;">

		<p></p>
	<i style="font-size:40px;" class="fa fa-futbol-o" aria-hidden="true"> Match</i>
	<p></p>
	
<p><b>Note: Adding a match will automatically generate authorisations for all team members to the venue.</b></p>
<p></p>
 <form action="http://localhost:8080/football1/index.php/main/match/list">
    <input type="submit" value="Show list" class="btn btn-default"/>
</form>
<div class="w3-containers ">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-buttons btn btn-default">Change Venue</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-5 w3-animate-zoom modal-sm">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Change Venue</h2>
        
      
		
      </header>
      <?php echo form_open ("main/change_venue", 'method="post"' ) ?>
      
      <div class="w3-container">
		  
        <p>Which match?</p> 
      
<?php
$sql = "SELECT group_concat(match.no separator ',') as id FROM `match`"; // selects the data from the sql, seperated by ","
$query = $this->db->query($sql); // gets the data from database
$array1 = $query->row_array(); // results are populated into an array
$arr = explode(',',$array1['id']); // "," is withdrawn

/* TO figure out the size of the table */
$query1 = $this->db->get('match'); 
$num = $query1->num_rows();

    echo "<select name='ids' class='form-control' id='dropd_list' style=' position:relative; height:27px; width:100px; top:5px;background: #F1F1F1;
 color: #000000; font-size:12px;'>";
		$i = 0;
		while ($i < $num){
		   echo "<option>".$arr[$i]."</option>";
		  $i++;            
		}
    echo "</select>";



?> 
		
		</div>
		 <div class="w3-container">
			 <br>
		
		<p>Change your venue here!</p> 
      
<?php
$sql = "SELECT group_concat(venue.name separator ',') as id FROM `venue`"; // selects the data from the sql, seperated by ","
$query = $this->db->query($sql); // gets the data from database
$array1 = $query->row_array(); // results are populated into an array
$arr = explode(',',$array1['id']); // "," is withdrawn

/* TO figure out the size of the table */
$query1 = $this->db->get('venue'); 
$num = $query1->num_rows();

    echo "<select name='ids2' class='form-control' id='dropd_list' style=' position:relative; height:27px; width:100px; top:5px;background: #F1F1F1;
 color: #000000; font-size:12px;'>";
		$i = 0;
		while ($i < $num){
		   echo "<option>".$arr[$i]."</option>";
		  $i++;            
		}
    echo "</select>";



?> 
		     
		
		</div>
		      <br><br>
		
      <footer class="w3-container">
        <p><b>Note: Changing a venue will automatically update previous authorisations to a card</b></p>
         <input type="submit" style=" background: #F1F1F1; 					      	  
 		  color: #000000;"value="Change now" onclick="alert('Are you sure you want to proceed?')" class="btn btn-default"></input>
		
      </footer>
      <?php echo form_close(); ?>
      <br>
    </div>
  </div>
</div>
	<?php echo $output; ?>
	<br>
    </div>

</html>
