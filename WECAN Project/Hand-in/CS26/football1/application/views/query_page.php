<!DOCTYPE html>
<html>
<style>
</style>

<head>
	<title>Queries</title>
	<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #show_table{
alignment-adjust: center;
}
table{
align: center;
height:100px;
width:700px;
}
table td{
padding:0px;
text-align: left;
}
caption{
font-size: 24px;
font-weight: bold;
}
thead{
	color:white;

background-color: black;
	}
tbody{
	
	background-color: white;
	}


  
  </style>
</head>



<body>

	<div class="container" style="background-color:white;border-radius:21px;">
		<p></p>
	<i style="font-size:40px;" class="fa fa-database" aria-hidden="true"> Query</i>
<p></p>
	<p><b>Note: Press on one of the querys and an input will appear followed by the output.</b></p>
	<br>



<!--Query: Search by card for access -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
    <input type="submit" value="Search by card for authorisation to access a venue for match" name="form1" class="btn btn-default"/>
</form>

<!--Query: Display all competitor have access to match-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
    <input type="submit" value="Display all the competitors who have access to a given venue for a match" name="form2" class="btn btn-default"/>
</form>



<!--Query: Display all venue accessible by card-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
    <input type="submit" value="Display all the venues accessible by a given competitor" name="form3" class="btn btn-default"/>
</form>


<!--Query: Entries by competitor -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
    <input type="submit" value="Entries made by competitor" name="form4" class="btn btn-default"/>
</form>


<!--Query: All entries made to a venue -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
    <input type="submit" value="Display the log of all entries to a venue" name="form5" class="btn btn-default"/>
</form>

<!--Query: Check card access to match -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
    <input type="submit" value="Check card access to a match" name="form6" class="btn btn-default"/>
</form>
<br>






<!-- POST DATA -->

<?php if(isset($_POST['form1'])){
	echo "<hr>";

	
	echo "<form action='http://localhost:8080/football1/index.php/main/query_page' method='post'>
	<input name='cardID' value='Enter Card ID' onfocus='clearThis(this)'></input>
    <input type='submit' value='Search' name='form_submit' class='btn btn-default'/>
</form> <br>";
	
	}?>
     
<?php if(isset($_POST['form_submit']))
    {
		$crd =$_POST['cardID'];
         		  echo '<br>';
		$query = $this->db->query("SELECT `Card_cardID`, `Match_no`, name, `state`, `date` 
		FROM `authorisation` 
		INNER JOIN venue
		on 	authorisation.Venue_venueID = venue.venueID
		INNER JOIN state
		on authorisation.State_idState = State.idState
		WHERE `Card_cardID` = '$crd';");

		$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		echo "<hr>";
echo "<p>Showing authorisations for $crd</p>";
		echo $this->table->generate($query);
		echo "<br>";
    } 
?>



<?php if(isset($_POST['form2'])){
	echo "<hr>";
	echo "
	<form action='http://localhost:8080/football1/index.php/main/query_page' method='post'>
	<input name='match_No' value='Match No' onfocus='clearThis(this)'></input>
    <input type='submit' value='submit' name='form2_submit' class='btn btn-default'/>
</form>";
	
	}?>
     
     
<?php if(isset($_POST['form2_submit']))
    {
		$crd =$_POST['match_No'];
         		  echo '<br>';
		$query = $this->db->query("SELECT `competitor`.`firstName`, `competitor`.`lastName`,authorisation.Match_no, authorisation.date, venue.name
							FROM `competitor`  
							INNER JOIN `card` ON `card`.`Competitor_competitorID`=`competitor`.`competitorID` 
							INNER JOIN `authorisation` ON `authorisation`.`Card_cardID`=`card`.`cardID`
                            
							INNER JOIN `venue` ON `authorisation`.`Venue_venueID`= `venue`.`venueID`
							WHERE `Match_no` = '$crd'");
		
				$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		echo "<hr>";
echo "<p>Displaying all competitors having access to Match $crd</p>";

		echo $this->table->generate($query);
		echo "<br>";
    } 
?>

<?php if(isset($_POST['form3'])){
	echo "<hr>";
	echo " <br> <form action='http://localhost:8080/football1/index.php/main/query_page' method='post'>
	<input name='cardID' value='Enter Card ID' onfocus='clearThis(this)' ></input>
    <input type='submit' value='submit' name='form3_submit' class='btn btn-default'/>
</form>
<br>";
	
	}?>
     
<?php if(isset($_POST['form3_submit']))
    {
		$crd =$_POST['cardID'];
         		  echo '<br>';
		$query = $this->db->query("SELECT `competitor`.`firstName`, `competitor`.`lastName`,`entry`.`Date`, `entry`.`Match_no`,state.state, venue.name
		 FROM `entry` INNER JOIN `card` ON `card`.`cardID` = `entry`.`Card_cardID` 
		 INNER JOIN `state` on `entry`.`State_idState` = `state`.`idState` 
		 INNER JOIN `venue` on `entry`.`Venue_venueID` = `venue`.`venueID` 
		 INNER JOIN `competitor` ON `card`.`Competitor_competitorID` = `competitor`.`competitorID`;");
		$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		echo "<hr>";
echo "<p>All venues accessible by $crd</p>";

		echo $this->table->generate($query);
		echo "<br>";
    } 
?>

<?php if(isset($_POST['form4'])){
echo "<hr>";
	echo " <br> <form action='http://localhost:8080/football1/index.php/main/query_page' method='post'>
	<input name='cardID' value='Enter Card ID' onfocus='clearThis(this)' ></input>
    <input type='submit' value='submit' name='form4_submit' class='btn btn-default'/>
</form>
<br>";
	
	}?>
<?php if(isset($_POST['form4_submit'])){
	
        echo "<hr>";
        $crd =$_POST['cardID'];
		$query = $this->db->query("SELECT `competitor`.`firstName`, `competitor`.`lastName`,`entry`.`Date`, `entry`.`Match_no`,state.state, venue.name
		FROM `entry` 
		INNER JOIN `card` ON `card`.`cardID` = `entry`.`Card_cardID` 
		INNER JOIN `competitor` ON `card`.`Competitor_competitorID` = `competitor`.`competitorID`
		INNER JOIN `venue` on `entry`.`Venue_venueID` = `venue`.`venueID`
		INNER JOIN `state` on `entry`.`State_idState` = `state`.`idState`
		WHERE cardID='$crd';");

		$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		echo "<hr>";
		echo "<p>Showing all attemps made by $crd</p>";

		echo $this->table->generate($query);
		echo "<br>";
    } 
?>



<?php if(isset($_POST['form5'])){
	
	echo "<hr>";
	echo "
	<form action='http://localhost:8080/football1/index.php/main/query_page' method='post'>
	<input name='venue' value='Venue' onfocus='clearThis(this)'></input>
    <input type='submit' value='Show all' name='form5_submit' class='btn btn-default'/>
    <input type='submit' value='Filter by granted access' name='form5_1_submit' class='btn btn-default'/>
    <input type='submit' value='Filter by denied access' name='form5_2_submit' class='btn btn-default'/>
</form>
<br>";
	
	}?>
     
<?php if(isset($_POST['form5_submit']))
    {
		$venue = $_POST['venue'];
         		  echo '<br>';
		$query = $this->db->query("SELECT `Card_cardID`, `Date`, `Match_no`, state.state, venue.name 
		FROM `entry` 
		INNER JOIN `state` on `entry`.`State_idState` = `state`.`idState`
		INNER JOIN `venue` ON `entry`.`Venue_venueID`= `venue`.`venueID`
		WHERE venue.name = '$venue';");

		$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		
		echo "<hr>";
		echo "<p>Showing all entries to $venue</p>";

		echo $this->table->generate($query);
		echo "<br>";
    } 
?>
<?php if(isset($_POST['form5_1_submit']))
    {
		$venue = $_POST['venue'];
         		  echo '<br>';
		$query = $this->db->query("SELECT `Card_cardID`, `Date`, `Match_no`, `State_idState`, `Venue_venueID`
		FROM `entry` WHERE `Venue_venueID` = '$venue';");

		$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		
		echo "<hr>";
		echo "<p>Showing all entries to $venue, filtered by Granted</p>";

		echo $this->table->generate($query);
		echo "<br>";
    } 
?>
<?php if(isset($_POST['form5_2_submit']))
    {
		$venue = $_POST['venue'];
		$query = $this->db->query("SELECT `Card_cardID`, `Date`, `Match_no`, `State_idState`, `Venue_venueID` 
		FROM `entry` WHERE `Venue_venueID` = '$venue' AND `State_idState` = 'Denied';");

		$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		echo "<hr>";
		echo "<p>Showing all entries to $venue, filtered by Denied</p>";

		echo $this->table->generate($query);
		echo "<br>";
}
?>


<?php if(isset($_POST['form6'])){
echo "<hr>";
	echo " <br> <form action='http://localhost:8080/football1/index.php/main/query_page' method='post'>
	<input name='cardID' value='Enter Card ID' onfocus='clearThis(this)' ></input>
	<input name='Match_no' value='Enter Match no' onfocus='clearThis(this)' ></input>

    <input type='submit' value='submit' name='form6_submit' class='btn btn-default'/>
</form>
<br>";
	
	}?>
<?php if(isset($_POST['form6_submit'])){
	
        echo "<hr>";
        $crd =$_POST['cardID'];
        $mNO = $_POST['Match_no'];
		$query = $this->db->query("SELECT Card_cardID,state,Match_no,name from authorisation 
		INNER JOIN venue
		on 	authorisation.Venue_venueID = venue.venueID
		INNER JOIN state
		on authorisation.State_idState = State.idState
WHERE Match_no = '$mNO' 
AND 
Card_cardID = '$crd'
AND 
State_idState = 3;");

		$template = array(
        'table_open'            => '<table border="0" cellpadding="1" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

		$this->table->set_template($template);
		echo "<hr>";
		$totalrow = $query->num_rows();
		
		if ($totalrow >= 1){
			echo "<p>Showing authorisations to Match $mNO by Card $crd</p>";
			echo $this->table->generate($query);
	}else{
		echo "<p>$crd is not authorised to access Match $mNO</p>";
		
		}
		echo "<br>";
    } 
?>




</div>



</body>
</html>
<script>
    function clearThis(target){
        target.value= "";
    }
    </script>

</script>
