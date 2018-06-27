<!DOCTYPE html>
<html>
	
<head>
	<meta charset="utf-8" />
	<style>
	

body {
	
	background-image: url(http://cdn.wonderfulengineering.com/wp-content/uploads/2016/01/black-wallpaper-7.jpg)
	}
	
ul.topnav {
  list-style-type: none;
  margin:1;
  padding:0;
  overflow: hidden; 	
}

ul.topnav li {float:left; }

ul.topnav li a {
  display: inline-block;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-family:verdana;
  font-size: 13px;
}
ul.topnav li p {
	
  display: inline-block;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 10px;
}

ul.topnav li a:hover {background-color: white;color:black;}
ul.topnav li a.logout:hover {background-color: red;}

ul.topnav li.icon {display: none;}


li a.logout {
    background-color: white;
}
li a.active {
    background-color: #0066cc;
}

li a.inactive{
	
	}


	
	</style>
</head>
   
<body onload="show_url()">
   
	
	<nav class="container">
		
   <ul class="topnav" id="myTopnav" >
	   
   <li><a id='home' href='<?php echo site_url('main/blank')?>'>Home</a></li>

   <li><a id='registerCom'  href='<?php echo site_url('main/competitor/add')?>'>Register competitor</a></li>
   <li><a id='registerTeam'  href='<?php  echo site_url('main/team/add')?>'>Register team</a></li>
   <li><a id='match'  href='<?php echo site_url('main/match')?>'>Match</a></li>
   <li><a id='log'  href='<?php echo site_url('main/entry')?>'>Log</a></li>
	
	
   
   
   <li style="float: right!Important;" ><a style="color:black;"class="logout" href='<?php echo site_url('')?>'><b>	Logout</b>	</a></li>
   <li style="float: right!Important;" > <p>Welcome <?php session_start();
   //gets the username from the session and displays
   if (isset($_SESSION['username'])){
	   $loginID = $_SESSION['username'];
      echo $loginID = ucfirst($loginID);
  }
?></p>

</li>
 <?php
 /* PERMISSION */
 // if the current session has permision of 1, buttons are shown.
  if($_SESSION["permission"] == 1){ 
      echo "<li><a id='venues' href='http://localhost:8080/football1/index.php/main/venue'>Venues</a></li>";
      echo    "<li><a id='authorisation' href='http://localhost:8080/football1/index.php/main/authorisation'>Authorisations</a></li>";
	echo	"<li><a id='card' href='http://localhost:8080/football1/index.php/main/card'>Cards</a></li>";}
  ?>
  
   <li><a id='query'  href='<?php echo site_url('main/query_page')?>'>Query</a></li>
  <li><a id='faq'  href='<?php echo site_url('main/faq')?>'>FAQ</a></li>
  </ul>
   
   
   </nav>
	


</body>
</html>
<script>
	

	
	function show_url(){
		
		var url = document.URL;
		switch(url){
			case "http://localhost:8080/football1/index.php/main/team/add":
				document.getElementById('registerTeam').style.backgroundColor = "white";
				document.getElementById('registerTeam').style.color = "black";
				break;
			case "http://localhost:8080/football1/index.php/main/match":
				
				document.getElementById('match').style.backgroundColor = "white";
				document.getElementById('match').style.color = "black";
				break;
				
			case "http://localhost:8080/football1/index.php/main/blank":
				document.getElementById('home').style.backgroundColor = "white";
				document.getElementById('home').style.color = "black";
				break;
			
			case "http://localhost:8080/football1/index.php/main/entry":
				document.getElementById('log').style.backgroundColor = "white";
				document.getElementById('log').style.color = "black";
				break;
			
			case "http://localhost:8080/football1/index.php/main/competitor/add":
				document.getElementById('registerCom').style.backgroundColor = "white";
				document.getElementById('registerCom').style.color = "black";
				break;			
			
			case "http://localhost:8080/football1/index.php/main/query_page":
				document.getElementById('query').style.backgroundColor = "white";
				document.getElementById('query').style.color = "black";
				break;
				
			case "http://localhost:8080/football1/index.php/main/faq":
				document.getElementById('faq').style.backgroundColor = "white";
				document.getElementById('faq').style.color = "black";
				break;
			
			case "http://localhost:8080/football1/index.php/main/venue":
				document.getElementById('venues').style.backgroundColor = "white";
				document.getElementById('venues').style.color = "black";
				break;
				
			case "http://localhost:8080/football1/index.php/main/authorisation":
				document.getElementById('authorisation').style.backgroundColor = "white";
				document.getElementById('authorisation').style.color = "black";
				break;
				
			case "http://localhost:8080/football1/index.php/main/card":
				document.getElementById('card').style.backgroundColor = "white";
				document.getElementById('card').style.color = "black";
				break;	
			}
		
		}

</script>


   
  




