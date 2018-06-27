<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<style>	
	
			  			
		
	
	</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<title>Manage card</title>



<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


	

<div class="container" style="background-color:white;border-radius:21px;">
<p></p>
	<i style="font-size:40px;" class="fa fa-id-card" aria-hidden="true"> Card</i>
	<p></p>
<p><b>Note: A competitor must be registered first before creating a card</b></p>


  <button onclick="document.getElementById('id01').style.display='block'" class="w3-buttons btn btn-default">Expire card</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-5 w3-animate-zoom modal-m">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Expire a card</h2>
        
      
      </header>
      
      <div class="w3-container">
		  <div class="form-group">
<?php echo form_open ("main/expire_card", 'method="post"' ) ?>



<?php
$sql = "SELECT group_concat(card.cardID separator ',') as id FROM `card`"; // selects the data from the sql, seperated by ","
$query = $this->db->query($sql); // gets the data from database
$array1 = $query->row_array(); // results are populated into an array
$arr = explode(',',$array1['id']); // "," is withdrawn

/* TO figure out the size of the table */
$query1 = $this->db->get('card'); 
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
        
		     
		
		</div>
		      <br>
		
      <footer class="w3-container">
        <p><b>Note: Expiring a card will automatically delete the card ID from the system and all authorisations withdrawn</b></p>
         <input type="submit" onclick="alert('Are you sure you want to proceed?')" style=" background: #F1F1F1; 					      	  
 		  color: #000000;"value="Expire now" class="btn btn-default"></input>
		
      </footer>
      <?php echo form_close(); ?>
      <br>
    </div>
  </div>


<div class="w3-containers">
  <button onclick="document.getElementById('id02').style.display='block'" class="w3-buttons btn btn-default">Card Replacement</button>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-5 w3-animate-zoom modal-m">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Replacement of lost/stolen/damaged card</h2>
        
      
      </header>
      
      <div class="w3-container">
		  <div class="form-group">
<?php echo form_open ("main/lost", 'method="post"' ) ?>



<?php
$sql = "SELECT group_concat(card.cardID separator ',') as id FROM `card`"; // selects the data from the sql, seperated by ","
$query = $this->db->query($sql); // gets the data from database
$array1 = $query->row_array(); // results are populated into an array
$arr = explode(',',$array1['id']); // "," is withdrawn

/* TO figure out the size of the table */
$query1 = $this->db->get('card'); 
$num = $query1->num_rows();

    echo "<select name='idss2' class='form-control' id='dropd_list' style=' position:relative; height:27px; width:100px; top:5px;background: #F1F1F1;
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
        <p><b>Note: Expiring a card will automatically delete the card ID from the system and all authorisations withdrawn</b></p>
         <input type="submit" onclick="alert('Are you sure you want to proceed?')" style=" background: #F1F1F1; 					      	  
 		  color: #000000;"value="Create new card" class="btn btn-default"></input>
		
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
<script>



</script>

