<?php
	require_once("includes/connection.php");
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "" || $password == "") {
		header("location:error.php");
	}
	else{
		if(checkLogin($username, $password)){
			header("location:calling.php");
		}
		else{
			header("location:error.php");
		}
	}
?>