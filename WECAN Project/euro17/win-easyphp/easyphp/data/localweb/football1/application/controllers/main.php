<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	 
	 function __construct()
	{
		parent::__construct();	 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
		$this->load->library('session');
	}
	
	public function index()
	{	
		
		$this->load->view('login');
	}


	public function blank(){
		
		$this->load->view('blank_view');
		
		}

	
	public function competitor()
	{	
		$this->load->view('header');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('competitor');
		$crud->set_subject('competitor');
		$crud->fields('title', 'firstName', 'lastName','Team_teamID','Role_roleID');
		$crud->required_fields('title', 'firstName', 'lastName', 'Team_teamID','Role_roleID');
		$crud->set_relation('Team_teamID', 'team', 'teamName');
		$crud->set_relation('Role_roleID','role','roleName');
		$crud->display_as('title', 'Title');
		$crud->display_as('firstName', 'First Name');
		$crud->display_as('lastName', 'Last Name');
		$crud->display_as('Team_teamID', 'Team');
		$crud->display_as('Role_roleID', 'Role');


		$output = $crud->render();
		$this->competitor_output($output);
	}
	
	
	// form that does the main job (registration)
	 function getvalue()
	{
	 if ($this->input->post('submit')==true && $this->input->post('title')) {
		 // gets the INPUT from the webpage
		$title = $this->input->post('title');

		$fname = $this->input->post('firstName');
		$lname = $this->input->post('lastName');
		$role = $this->input->post('Role_roleID');
		$team = $this->input->post('Team_teamID');
				// checks if competitor is already registered - PART 5 Advanced Feature
				$duplicate = $this->db->query("SELECT * FROM competitor WHERE firstName='$fname' AND lastName='$lname'");
				if ($duplicate->num_rows() != 1){

			
			
			$teamcheck = $this->db->query("SELECT State_idState from team where teamID = '$team';");
			$teamcheck = $teamcheck->row()->State_idState;
			if($teamcheck == 1){		echo '<script language="javascript">';
			echo 'alert("Competitor cannot be registered, team eliminated!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/competitor/add";';
			echo '</script>';
				
				}
			if ($teamcheck == 0){
				// adds competitor to Competitor database - PART 2
			$this->db->query("INSERT INTO `footballdb`.`competitor` (`competitorID`, `title`, `firstName`, `lastName`, `Role_roleID`, `Team_teamID`) VALUES (NULL,'$title','$fname','$lname','$role','$team')");
			// get the key for the competitor registered
			$primary_key = $this->db->query("SELECT * FROM competitor WHERE firstName='$fname' AND lastName='$lname'");
			$id=$primary_key->row()->competitorID;
			// register a card for the competitor - PART 2
			$this->db->query("INSERT INTO `footballdb`.`card` (`cardID`, `startDate`, `endDate`,`Competitor_competitorID`, `State_idState`, `Team_teamID`) VALUES (NULL, '2017-06-16', '2017-08-06', '$id', '0','$team')");
			//print_r("card registered");
			//print_r("competitor registered");
		
			// add authorisation to competitor->cardID if TEAM has match
			
			$idc = $this->db->query("SELECT `cardID` FROM `Card` WHERE `Competitor_competitorID` = '$id'");
			$idc = $idc->row()->cardID;
			//print_r($idc);
			// IF match exists add authorisation
			$sql = "SELECT group_concat(match.no separator ',') as id FROM `match` WHERE Team_teamID = '$team' or Team_teamID1 = '$team';"; // selects the data from the sql, seperated by ","
			$query = $this->db->query($sql); // gets the data from database
			$array1 = $query->row_array(); // results are populated into an array
			$arr = explode(',',$array1['id']); // "," is withdrawn
			$max = sizeof($arr);

			
			
			
			
			if ($arr[0] && $teamcheck == 0){
				
			foreach($arr as $x) {
				$vens = $this->db->query("SELECT `Venue_venueID` FROM `match` WHERE `Team_teamID` OR `Team_teamID1` = '$x';");
				$dats = $this->db->query("SELECT `date` FROM `match` WHERE no = '$x';");
				$vens =$vens->row()->Venue_venueID;
				$dats = $dats->row()->date;
				$this->db->query("INSERT INTO `footballdb`.`authorisation` (`Card_cardID`, `date`, `Venue_venueID`, `Match_no`, `State_idState`) VALUES ('$idc', '$dats', '$vens', '$x', '3');");
				}
			}
			// ELSE break
			
	
			echo '<script language="javascript">';
			echo 'alert("Competitor has been registered, card created and authorisation given!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/competitor/add/success";';
			echo '</script>';
		}
		}else{
	// ERROR PART
	
		echo '<script language="javascript">';
			echo 'alert("Competitor already registered.");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/competitor/add";';
			echo '</script>';
	
	}
				
			
	 }
	 // checks if form belongs to Team table
	 else if($this->input->post('teamName')){
		 // gets the INPUT from the webpage
		$tname = $this->input->post('teamName');
		$nfa = $this->input->post('NFA');
		$acc = $this->input->post('acronym');
		$nick = $this->input->post('nickname');
		//$team = $this->input->post('team_teamID');
		// registered team to Team table	
		 $this->db->query("INSERT INTO `footballdb`.`team` (`teamID`, `teamName`, `NFA`, `acronym`, `nickname`, `State_idState`) VALUES (NULL, '$tname', '$nfa', '$acc', '$nick', '0')");
			echo '<script language="javascript">';
			echo 'alert("Team has been registered!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/team/add/success";';
			echo '</script>';
	
	
	}
	// check if form belongs to a Match table
	else if ($this->input->post('no')) {
		// gets the INPUT from the webpage
		$tno = $this->input->post('no');
		$dat = $this->input->post('date');
		$stdum = $this->input->post('stadium');
		$tID = $this->input->post('Team_teamID');
		$tID2 = $this->input->post('Team_teamID1');
		$vID = $this->input->post('Venue_venueID');
		$timestamp = $dat;
		$timestamp = date_create_from_format('d/m/Y', $timestamp);
		$dat = date_format($timestamp, 'Y-m-d');
		// resister match to match table
		$this->db->query("INSERT INTO `footballdb`.`match` (`no`, `date`, `stadium`, `Team_teamID`, `Team_teamID1`, `Venue_venueID`) VALUES ('$tno', '$dat', '$stdum', '$tID', '$tID2', '$vID');");
		// add authorisation for full team upon creation
		$this->db->query("SELECT cardID from card where Team_teamID='$tID';");
		$this->db->query("SELECT cardID from card where Team_teamID='$tID2';");
		
		$sql1 = "SELECT group_concat(card.cardID separator ',') as cardID FROM `card` where Team_teamID='$tID';"; // selects the data from the sql, seperated by ","
		$sql2 = "SELECT group_concat(card.cardID separator ',') as cardID FROM `card` where Team_teamID='$tID2';"; // selects the data from the sql, seperated by ","

		$query = $this->db->query($sql1); // gets the data from database
		$query1 = $this->db->query($sql2); // gets the data from database

		$array1 = $query->row_array(); // results are populated into an array
		$array2 = $query1->row_array(); // results are populated into an array

		$arr = explode(',',$array1['cardID']); // "," is withdrawn
		$arr1 = explode(',',$array2['cardID']); // "," is withdrawn
				
		foreach($arr as $x) {
			if($arr[0]){
				$this->db->query("INSERT INTO `footballdb`.`authorisation` (`Card_cardID`, `date`, `Venue_venueID`, `Match_no`, `State_idState`) VALUES ('$x', '$dat', '$vID', '$tno', '3');");
			}
		}
		foreach($arr1 as $x) {
			if($arr1[0]){
				$this->db->query("INSERT INTO `footballdb`.`authorisation` (`Card_cardID`, `date`, `Venue_venueID`, `Match_no`, `State_idState`) VALUES ('$x', '$dat', '$vID', '$tno', '3');");
			}
		}
			
			echo '<script language="javascript">';
			echo 'alert("Match has been scheduled and permission given!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/match/add/success";';
			echo '</script>';
	}
		// check if form belongs to a Venue table
	else if ($this->input->post('name')) {
		// gets the INPUT from the webpage
		$venName = $this->input->post('name');
		// resister match to match table
		$this->db->query("INSERT INTO `footballdb`.`venue` (`venueID`, `name`) VALUES (NULL, '$venName');");
		
		echo '<script language="javascript">';
			echo 'alert("Venue has been registered!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/venue/add/success";';
			echo '</script>';
		
		}
		// check if form belongs to a Authorisation table
	else if ($this->input->post('State_idState')) {
		$crdID = $this->input->post('Card_cardID');
		$mID = $this->input->post('Match_no');
		$vID = $this->input->post('Venue_venueID');
		$sta = $this->input->post('State_idState');
		$dat = $this->input->post('date');
		
		$timestamp = $dat;
		$timestamp = date_create_from_format('d/m/Y', $timestamp);
		$dat = date_format($timestamp, 'Y-m-d');
		
		$this->db->query("INSERT INTO `footballdb`.`authorisation` (`Card_cardID`,`Match_no`, `State_idState`, `date`, `Venue_venueID`) VALUES ('$crdID', '$mID', '$sta', '$dat', '$vID');");
	
		echo '<script language="javascript">';
			echo 'alert("Authorisation has been given!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/authorisation/add/success";';
			echo '</script>';
	
	
		}
		// check if form belongs to a Entry table
	else if ($this->input->post('Stadium')){
		//[Competitor_competitorID] => 3 [cardID] => [startDate] => 30/03/2017 [endDate] => 25/03/2017 [cardState] => 0 [submit] => Save
		
		$crdID = $this->input->post('Card_cardID');
		$mNO = $this->input->post('Match_no');
		$dat = $this->input->post('Date');
		$stadium = $this->input->post('Stadium');
		$venue = $this->input->post('Venue_venueID');
		$access = $this->input->post('State_idstate');
		
		$timestamp = $dat;
		$timestamp = date_create_from_format('d/m/Y', $timestamp);
		$dat = date_format($timestamp, 'Y-m-d');
		
		
		$this->db->query("INSERT INTO `footballdb`.`entry` (`entryID`, `Card_cardID`, `Date`,`Match_no`, `Stadium`, `Venue_venueID`,`State_idstate`) VALUES (NULL, '$crdID', '$dat', '$mNO', '$stadium', '$venue','$access');");
		
		
		echo '<script language="javascript">';
			echo 'alert("Entry has been recorded!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/entry/add/success";';
			echo '</script>';
		
		}
		else if($this->input->post('Competitor_competitorID')){
		$id = $this->input->post('Competitor_competitorID');
		$team = $this->input->post('Team_teamID');
			
		$this->db->query("INSERT INTO `footballdb`.`card` (`cardID`, `startDate`, `endDate`,`Competitor_competitorID`, `State_idState`, `Team_teamID`) VALUES (NULL, '2017-06-16', '2017-08-06', '$id', '0','$team')");

			
			
			echo '<script language="javascript">';
			echo 'alert("Card has been registered!.");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/card/list";';
			echo '</script>';
			
			
			
			}
		
		
		
		
		
		

	}
	
	
	
	

	function competitor_output($output = null)
	{
		$this->load->view('competitor.php', $output);
		
	}

	
	public function team()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('team');
		$crud->set_subject('team');
		$crud->fields('teamName', 'NFA', 'acronym', 'nickname','State_idState');
		$crud->required_fields('teamName', 'NFA', 'acronym', 'nickname');
		$crud->set_relation('State_idState','state','state');
		$crud->display_as('teamName', 'Team Name');
		$crud->display_as('NFA', 'NFA');
		$crud->display_as('acronym', 'Acronym');
		$crud->display_as('nickname', 'Nickname');
		$crud->display_as('State_idState', 'State');

		
		$output = $crud->render();
		$this->team_output($output);
	}
	
	function team_output($output = null)
	{
		$this->load->view('team.php', $output);
	}

	
	public function eliminate_team(){
		
		$team = $this->input->post('team');
		// team eliminated
		$this->db->query("UPDATE `team` SET `State_idState` = '1' WHERE `teamID` = '$team';");
		
		$this->db->query("SELECT cardID from card where Team_teamID='$team';");
		
		$sql1 = "SELECT group_concat(card.cardID separator ',') as cardID FROM `card` where Team_teamID='$team';"; // selects the data from the sql, seperated by ","

		$query = $this->db->query($sql1); // gets the data from database

		$array1 = $query->row_array(); // results are populated into an array

		$arr = explode(',',$array1['cardID']); // "," is withdrawn
				
		foreach($arr as $x) {
			if($arr[0]){
				$this->db->query("UPDATE authorisation SET State_idState = 2 WHERE Card_cardID = '$x';");
			}
		}
		
			echo '<script language="javascript">';
			echo 'alert("Team has been eliminated!");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/team/list";';
			echo '</script>';
		
		
		}
	
		
	public function venue()
	{	
		$this->load->view('header');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('venue');
		$crud->set_subject('venue');
		$crud->fields('name');
		$crud->required_fields('name');
		$crud->display_as('name', 'Venue Name');
		$this->getvalue();
		$output = $crud->render();
		$this->venue_output($output);
	}
		
	function venue_output($output = null)
	{
		$this->load->view('venue.php', $output);
		
	}

	public function faq()
	{	
		$this->load->view('header');
		$this->load->view('faq');

	}
		
	public function match()
	{	
		$this->load->view('header');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('match');
		$crud->set_subject('match');
		
		$crud->fields('no', 'date','stadium', 'Team_teamID', 'Team_teamID1','Venue_venueID');
		$crud->required_fields('no', 'date', 'stadium', 'Team_teamID','Team_teamID1', 'Venue_venueID');
		$crud->set_relation('Team_teamID', 'team', 'teamName');
		$crud->set_relation('Team_teamID1', 'team', 'teamName');

		$crud->set_relation('Venue_venueID', 'venue', 'name');

		//$crud->display_as('matchID', 'Match ID');
		$crud->display_as('no', 'No.');
		$crud->display_as('date', 'Date');
		$crud->display_as('stadium', 'Stadium');
		$crud->display_as('Team_teamID', 'Team');
		$crud->display_as('Team_teamID1', 'Team');
		$crud->display_as('Venue_venueID', 'Venue');
		
		$this->getvalue();
		$output = $crud->render();
		$this->match_output($output);
	}
	
	function match_output($output = null)
	{
		$this->load->view('match_view.php', $output);
		
	}
	
	function change_venue()
	
	{ 	
		// get POST data
		$sMatch = $this->input->post('ids');
		$sVenue = $this->input->post('ids2');
		
		// select the venue name
		$vid = $this->db->query("SELECT * FROM `venue` WHERE `name` = '$sVenue';");
		$vid = $vid->row()->venueID;
		// updates the venue with the one choosen from dropdown list
		$this->db->query("UPDATE `match` SET `Venue_venueID` = '$vid' WHERE `no` = '$sMatch';");
		
		// authorisation update for the competitors
		$this->db->query("UPDATE `authorisation` SET `Venue_venueID` = '$vid' WHERE `Match_no` = '$sMatch';");
		
		}
		
	public function card()
	{	
		$this->load->view('header');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('card');
		$crud->set_subject('card');
		
		$crud->fields('Competitor_competitorID','Team_teamID');
		$crud->required_fields('Competitor_competitorID','Team_teamID');
		$crud->set_relation('Competitor_competitorID', 'competitor','firstName');
		$crud->set_relation('Team_teamID', 'team','teamName');
		$crud->set_relation('State_idState','state','state');
		$crud->display_as('Competitor_competitorID', 'Name');
		$crud->display_as('cardID', 'Card ID');
		$crud->display_as('startDate', 'Start Date');
		$crud->display_as('endDate', 'End Date');
		$crud->display_as('State_idState', 'State');
		$crud->display_as('Team_teamID', 'Team name');
		
				
		$output = $crud->render();
		$this->card_output($output);
	}
	
	
	function card_output($output = null)
	{
		$this->load->view('card.php', $output);
		
	}
	function expire_card()
	
	{ 	$selected = $this->input->post('ids');
		$this->db->query("DELETE FROM `authorisation` WHERE `Card_cardID` = '$selected';");
		$this->db->query("DELETE FROM `card` WHERE `cardID` = '$selected';");
		
		
		
	
		echo '<script language="javascript">';
			echo 'alert("Card has been expired and authorisation withdrawn.");';
			echo 'window.location.href = "http://localhost:8080/football1/index.php/main/card/list";';
			echo '</script>';
		}
	
	function lost()
	{
		$selected = $this->input->post('idss2');
		$nam = $this->db->query("SELECT `Competitor_competitorID` FROM `card` WHERE `cardID` = '$selected';");
		$tem = $this->db->query("SELECT `Team_teamID` FROM `card` WHERE `cardID` = '$selected';");
		$stdat = $this->db->query("SELECT `startDate` FROM `card` WHERE `cardID` = '$selected';");
		$endat = $this->db->query("SELECT `endDate` FROM `card` WHERE `cardID` = '$selected';");
		
		$nam = $nam->row()->Competitor_competitorID;
		$tem = $tem->row()->Team_teamID;
		$stdat = $stdat->row()->startDate;
		$endat = $endat->row()->endDate;
		
		$this->db->query("DELETE FROM `authorisation` WHERE `Card_cardID` = '$selected';");
		$this->db->query("DELETE FROM `card` WHERE `cardID` = '$selected';");
		$this->db->query("INSERT INTO `footballdb`.`card` (`cardID`, `startDate`, `endDate`,`Competitor_competitorID`, `State_idState`, `Team_teamID`) VALUES (NULL, '$stdat', '$endat', '$nam', '0', '$tem');");
			
			$idc = $this->db->query("SELECT `cardID` FROM `Card` WHERE `Competitor_competitorID` = '$nam'");
			$idc = $idc->row()->cardID;
			print_r($idc);
			// IF match exists add authorisation
			$sql = "SELECT group_concat(match.no separator ',') as id FROM `match` WHERE Team_teamID = '$tem' or Team_teamID = '$tem';"; // selects the data from the sql, seperated by ","
			$query = $this->db->query($sql); // gets the data from database
			$array1 = $query->row_array(); // results are populated into an array
			$arr = explode(',',$array1['id']); // "," is withdrawn
			$max = sizeof($arr);
		
			$selected += 1;
			
			print_r($arr);
			if ($max>0){
			foreach($arr as $x) {
				$vens = $this->db->query("SELECT `Venue_venueID` FROM `match` WHERE `Team_teamID` OR `Team_teamID1` = '$x';");
				$dats = $this->db->query("SELECT `date` FROM `match` WHERE no = '$x';");
				$vens =$vens->row()->Venue_venueID;
				$dats = $dats->row()->date;
				$this->db->query("INSERT INTO `footballdb`.`authorisation` (`Card_cardID`, `date`, `Venue_venueID`, `Match_no`, `State_idState`) VALUES ('$idc', '$dats', '$vens', '$x', '0');");
				}
			}else{
				continue;
				}		
		
		
		}
	
	public function entry()
	{	
		$this->load->view('header');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('entry');
		$crud->set_subject('log');
		
		$crud->fields('Match_no', 'Card_cardID','Date','Stadium','State_idState');
		$crud->required_fields('Match_no', 'Card_cardID','Date','State_idState','Stadium');
		$crud->set_relation('Match_no', 'match', 'no');
		$crud->set_relation('Card_cardID', 'card', 'cardID');
		$crud->set_relation('Venue_venueID', 'venue', 'name');
		$crud->set_relation('State_idState', 'state', 'state');
		$crud->display_as('Match_no', 'Match');
		$crud->display_as('Card_cardID', 'Card');
		$crud->display_as('Date', 'Date');
		$crud->display_as('State_idState', 'Access');
		$crud->display_as('Venue_venueID', 'Venue');

		$output = $crud->render();
		$this->log_output($output);
	}
	
		function log_output($output = null)
	{
		$this->load->view('log.php', $output);
		
	}
	
	public function authorisation()
	{	
		$this->load->view('header');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('authorisation');
		$crud->set_subject('authorisation');
		
		$crud->fields('Card_cardID', 'Match_no', 'Venue_venueID', 'date','State_idState');
		$crud->required_fields('Card_cardID', 'Match_no', 'Venue_venueID', 'date');
		$crud->set_relation('Card_cardID', 'card', 'cardID');
		$crud->set_relation('Match_no', 'match', 'no');
		$crud->set_relation('Venue_venueID', 'venue', 'name');
		$crud->set_relation('State_idState','state','state');
		$crud->display_as('Card_cardID', 'Card number');
		$crud->display_as('Match_no', 'Match number');
		$crud->display_as('Competitor_competitorID', 'Name');
		$crud->display_as('Venue_venueID', 'Venue');
		$crud->display_as('State_idState', 'State');
		$crud->display_as('date', 'Date');
		
		$output = $crud->render();
		$this->authorisation_output($output);
	}
	
	function authorisation_output($output = null)
	{
		$this->load->view('authorisation.php', $output);
		
	}
	public function query1()
	{	
	$this->load->library('table');

	$query = $this->db->query("SELECT * FROM my_table");

	echo $this->table->generate($query);
	}
	
	public function query2()
	{	
	$this->load->library('table');

	$query = $this->db->query("SELECT * FROM my_table");

	echo $this->table->generate($query);
	}
	
	public function query3()
	{	
	$this->load->library('table');


	echo $this->table->generate($query);
	}
	
		public function query_page()
	{	
		$this->load->view('header');
		$this->load->view('query_page');
	
	}
	
	
	public function competitor_search()
	{
		
		$selected = $this->input->post('com');

		$this->db->query("SELECT `competitor`.`competitorID`, `competitor`.`firstName`, `competitor`.`lastName` 
							FROM `competitor` 
							INNER JOIN `card` ON `card`.`Competitor_competitorID`=`competitor`.`competitorID` 
							INNER JOIN `authorisation` ON `authorisation`.`Card_cardID`=`card`.`cardID` 
							WHERE `Match_no` = '$selected';");
	}
	
	public function card_search()
	{
		$this->db->query("SELECT `Card_cardID`, `Match_no`, `Venue_venueID`, `state`, `date` FROM `authorisation` WHERE `Card_cardID` = '$crd';");
		}
		
	public function all_venues()
	{
		$this->db->query("SELECT `match`.`Venue_venueID` FROM `match` INNER JOIN `competitor` ON `match`.`Team_teamID` = `competitor`.`Team_teamID` WHERE `competitor` = '$compt';");
		}
		
	public function all_entry()
	{
		$this->db->query("SELECT `competitor`.`firstName`, `competitor`.`lastName`,`entry`.`Date`, `entry`.`Match_no`,`entry`.`Access`, `entry`.`Venue`, `entry`.`Stadium` FROM `entry` INNER JOIN `card` ON `card`.`cardID` = `entry`.`Card_cardID` INNER JOIN `competitor` ON `card`.`Competitor_competitorID` = `competitor`.`competitorID`;");
		}
	
	public function logs ()
	{
		$this->db->query("SELECT `Card_cardID`, `Date`, `Match_no`, `Access`, `Venue`, `Stadium` FROM `entry` WHERE `Venue` = 'wembley';");

		}
	
	public function logs_filteredG ()
	{
		$this->db->query("SELECT `Card_cardID`, `Date`, `Match_no`, `Access`, `Venue`, `Stadium` FROM `entry` WHERE `Venue` = 'wembley' AND `Access` = 'Granted';");

		}
	
	public function logs_filteredD ()
	{
		$this->db->query("SELECT `Card_cardID`, `Date`, `Match_no`, `Access`, `Venue`, `Stadium` FROM `entry` WHERE `Venue` = 'wembley' AND `Access` = 'Denied';");

		}
		
	
	
}?>

