<?php
require 'database.php';
require '../model/user.php';
function login($username,$password){
	global $db;
	$sql = "SELECT * from users WHERE username='$username' AND passwordd='$password'";
	$users = $db->query($sql)->fetch_all();

	if (count($users)>0) {
		$user = new User();
		$user->fullname = $users[0][1];
		return $user;
	}
	return null;
}
?>