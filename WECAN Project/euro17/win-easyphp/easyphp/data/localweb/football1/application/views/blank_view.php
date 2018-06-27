<!DOCTYPE html>

<html lang="en" class="no-js">
	<style>
	html {
  height: 100%;
  font-family: 'Lato', Arial, sans-serif;
}
*,
*:after,
*::before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
  padding:0;
  background-color: black;
  font-size: 14px;
}
.container-fluid > header {
	font-family: 'Lato', Arial, sans-serif;
}

.container-fluid > header {
	margin: 0 auto;
	padding: 2em;
	text-align: center;
	color: white;
}

.container-fluid > header h1 {
	font-family: 'Oswald', sans-serif;
	color:white;
	font-size: 2em;
	line-height: 1.3;
	margin: 0;
	font-weight: 400;
}

.container-fluid > header span {
    color: white;
    display: block;
    font-size: 60%;
    font-weight: 300;
    padding: 1em 0 0.6em 0.1em;
}
.container-fluid .text {
    text-align:center;
	padding:1em 0;
	font-size:1.5em;
}
nav a {
	position: relative;
	display: inline-block;
	margin: 15px 25px;
	outline: none;
	color: white;
	text-decoration: none;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 400;
	text-shadow: 0 0 1px rgba(255,255,255,0.3);
	font-size: 1.35em;
}

nav a:hover,
nav a:focus {
	outline: none;
}

/* Effect 1: Brackets */

.cc-rockmenu {
	color:fff;
	text-align:center;
}

.cc-rockmenu .rolling {
  display: inline-block;
  cursor:pointer;
  width: 77px;
  height: 77px;
  text-align:left;
  overflow: hidden;
  border-radius: 26px;
  background: white;
  transition: all 0.3s ease-out;
  white-space: nowrap;
}
.cc-rockmenu .rolling:hover {
  width: 312px;
}
.cc-rockmenu .rolling .rolling_icon {
  float:left;
  z-index: 9;
  display: inline-block;
  width: 77px;
  background: white;
  height: 77px;
  border-radius: 26px;
  box-sizing: border-box;
  margin: 0 10px 0 0;
}
.cc-rockmenu .rolling .rolling_icon:hover .rolling {
  width: 312px;
}



.cc-rockmenu .rolling i.fa {
    font-size: 45px;
    padding: 15px;
}
.cc-rockmenu .rolling span {
    display: block;
    font-weight: bold;
    padding: 4px 0;
}
.cc-rockmenu .rolling li {
    display:block;
    list-style: outside none none;
}
.cc-rockmenu .rolling li a {
    color: #6a5502;
    padding-right: 5px;
    text-decoration: none;
}
.cc-rockmenu .rolling li a:hover{
	color:blue;	
}

.cc-rockmenu .rolling li a:before{
   content:"\00bb";
}

.cc-rockmenu .rolling p {
	margin:0;
}

.cc-rockmenu .rolling input[type="text"] {
	width: 175px;
    background: #bbae79 none repeat scroll 0 0;
    border: medium none;
    height: 35px;
    margin: 9px 0;
    padding: 10px;
	color:#fff;
}
.cc-rockmenu .rolling input[type="submit"] {
    background: #6a5502 none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    padding: 9px;
}

/* Rolling Animated Menu*/
.rollingAnimated ul {
  padding:0;
  display: inline-block;
  text-align: center;
  height: 70px;
  overflow: hidden;
  margin: 0;
}

.rollingAnimated ul li {
  float: left;
  list-style: none;
  margin: 0 25px 0 0;
}

.rollingAnimated a {
    color: #fff;
    display: inline-block;
    font-family: "Lato",Arial,sans-serif;
    font-size: 1.2em;
    font-weight: bold;
    letter-spacing: 0;
    line-height: 65px;
    margin-top: 0;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.3s cubic-bezier(0.1, 0.1, 0.5, 1.4) 0s;
}

.rollingAnimated a:hover {
  margin-top: -65px;
}

.rollingAnimated a:after {
  content: attr(data-text);
  display: block;
  color: #11decd;
}
	</style>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
		<meta name="description" content="In this tutorial we are going to make use of the incredibly awesome Rocking and Rolling Rounded Menu with CSS3. We are able to create a menu with little icons in an effort to rotate when hovering." />
		<meta name="keywords" content="rolling menu, rocking, rolling, menu, css transition, style css3, menu item" />
		<meta name="author" content="Codeconvey" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>WECAN-HOME</title>
		
	</head>
	<body>
    <div class="container-fluid">
            	<div class="colum_full column">
                    <div class="text">
                    	 <header>
                            <h1 style="color:white;">WECAN Database Managment</h1>
                        </header>
                    </div>
            	</div>
            </div>
        </div>
        
   
<section>
            <div class="container">
            	<div class="colum_full column">
                    <div class="cc-rockmenu">
                      <div class="rolling">
                        <a><figure class="rolling_icon"><i class="fa fa-user-plus"></i></figure></a>
                        <span>Registration</span>
                        <li><a href='<?php echo site_url('main/competitor/add')?>'>Register competitor</a></li>
                        <li><a href='<?php echo site_url('main/team/add')?>'>Register team</a></li>
                      
                      </div>
                      <div class="rolling">
                        <figure class="rolling_icon"><i class="fa fa-futbol-o"></i></figure>
                        <span>Match</span>
                        <li><a href='<?php echo site_url('main/match')?>'>Manage matches</a></li>
                      </div>
                      
                      <div class="rolling">
                        <figure class="rolling_icon"><i class="fa fa-history"></i></figure>
                        <span>Entry</span>
                        <li><a href='<?php echo site_url('main/entry')?>'>Manage entries</a></li>
                      </div>
                        <div class="rolling">
                        <figure class="rolling_icon" "><i class="fa fa-question-circle"></i></figure>
                        <span>Help</span>
                        <li><a href='<?php echo site_url('main/faq')?>'>FAQ</a></li>
                      </div>
                      
                      <div class="rolling">
						  <figure class="rolling_icon"><i class="fa fa-database"></i></figure>
						  <span>Database</span>
						  <li><a href='<?php echo site_url('main/query_page')?>'>Query</a></li>
                      </div>
                      <?php session_start();
 /* PERMISSION */
 // if the current session has permision of 1, buttons are shown.
  if($_SESSION["permission"] == 1){ 
      echo "
                      <div class='rolling'>
                        <figure class='rolling_icon'><i class='fa fa-id-card-o' aria-hidden='true'></i></figure>
                        <span>Card</span>
                        <li><a href='http://localhost:8080/football1/index.php/main/card'>Manage cards</a></li>
                      </div>
                       <div class='rolling'>
                        <figure class='rolling_icon'><i class='fa fa-lock'></i></figure>
                        <span>Authorisation</span>
                        <li><a href='http://localhost:8080/football1/index.php/main/authorisation'>Manage authorisations</a></li>
                      </div>
                       <div class='rolling'>
                        <figure class='rolling_icon'><i class='fa fa-building'></i></figure>
                        <span>Venue</span>
                        <li><a href='http://localhost:8080/football1/index.php/main/venue'>Manage venues</a></li>
                      </div>";}
  ?>
                      <div class="rolling">
                        <figure class="rolling_icon" style="color:red;""><i class="fa fa-sign-out"></i></figure>
                        <span>Logout</span>
                        <li><a href='<?php echo site_url('')?>'>SIGN OUT</a></li>
                      </div>
                    </div>
            	</div>
            </div>
        </section>
     
        <div class="container-fluid">
            	<div class="colum_full column">
                    <div class="text">
                    	<p style="color:white;">Welcome <strong><?php 
   //gets the username from the session and displays
   if (isset($_SESSION['username'])){
	   $loginID = $_SESSION['username'];
      echo $loginID = ucfirst($loginID);
  }
?></strong></p>
                    </div>
            	</div>
            </div>
        </div>

