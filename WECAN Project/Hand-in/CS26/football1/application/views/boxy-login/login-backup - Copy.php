<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 { font-family: Calibri; }
		h2 { font-family: Calibri; padding-top: 0px;}
	</style>
</head>
<body>


<div style="width: 500px; margin: 200px auto 0 auto; color:white; text-align:center; width:200px;height:250px;padding:10px;border:10px inset white; text-align:center;">
	
	
    <h1>UEFA</h1>
<h2>Women's Euro 2017</h2>

<FORM METHOD="POST" action="index.php/login/makeLogin">
	
<p class="p-centre">Brought to you by the Netherlands</p>
		<b><input type="text" name="pass" value="USERNAME" onfocus="if (this.value=='USERNAME') this.value='';"/></b><br>
        <b><input type="text" name="user" value="PASSWORD" onfocus="if (this.value=='PASSWORD') this.value='';"/></b><br>
        <span class="pull-right"><?php if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>"; ?></span>


<input type="submit" value="Submit"/>
</FORM>

</div>

</body>
</html>
