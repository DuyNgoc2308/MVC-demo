<?php
require "../model/userdatabase.php";
session_start();
if (isset($_POST["login"])) {
	$un = $_POST["usern"];
	$pw = $_POST["passw"];

	$user = login($un,$pw);
	if ($user == null) {
		$_SESSION["isLogin"] = false;

	}else{
		$_SESSION["isLogin"] = true;
		$_SESSION["fullname"] = $user->fullname;
	}
	header("location: ../view/home.php");

}
?>