<?php
$server = "localhost";
$user = "root";
$password ="";
$dbName = "mvc";
$db = new mysqli($server, $user, $password, $dbName);




	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require "header.php";?>
	<form method="" method="post">
		<label>Username</label>
		<input type="text" name="usern">
		<label>Password</label>
		<input type="text" name="passw">
		<button name="login">Login</button>
	</form>
	<footer>
		Copyright 2020
	</footer>
</body>
</html>