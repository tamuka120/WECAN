<!DOCTYPE html>
<html>
	<style>

	</style>
<head>
	<title>Home</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
</head>


	
 <div class= "container">
	 <body>
		
   
<div style="background:rgba(189, 193, 193,0.7) !important" class ="jumbotron">
	<h4 style="color:#740a0a;text-align:left"><b>WECAN Database Solutions</b></h4>
	<div id="clockbox" style="color:white;text-align:right" ></div>
	<hr   style="width:100%;
  height:2px;
  border:none;
  background-color:white"
  >
	
	

<h3>How to register?</h3>
<p style="font-size:12px;">A team must be created first before register any competitor. The competitor can then be assigned to a team. </p>
<br><br><br><br><br><br><br><br><br>
<div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button">Report bug</button>
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-5 w3-animate-zoom">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h3>Report a bug</h3>
        
       
      </header>
      <div class="w3-container">
         <form action="" method="post"  >
  Name:<br>
  <input style="height:20%;width:20%" type="text" name="firstname" value="" class="form-control" required>
  <br>
  Subject:<br>
  <input style="height:20%;width:20%" type="text" name="subject" value="" class="form-control">
  <br>
  Description:<br>
  <input style="height:200px;width:100%;" type="text" name="description" value="" class="form-control" required>
    
      </div>
      <footer class="w3-container w3-black">
        <p>When your ready Press Submit</p>
         <input type="submit" value="Submit" class="btn btn-default">
      </footer>
    </div>
  </div>
</div>


  <br><br>
  


</form>
</div>




</body>
<footer style="background-color:white; text-align:center">Copyright © WECAN | Contact: Developers | University of Herthfordshire<br></footer>
<script type="text/javascript" src="http://localhost:8080/football1/assets/engine2/wowslider.js"></script>
<script type="text/javascript" src="http://localhost:8080/football1/assets/engine2/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;

var nhour=d.getHours(),nmin=d.getMinutes();
if(nmin<=9) nmin="0"+nmin

document.getElementById('clockbox').innerHTML=""+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
</html>
