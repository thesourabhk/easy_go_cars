<?php
	//Start Session
	session_start();
	//Unset variables of session
	session_unset();
	//Destroy Session
	session_destroy();
	//Redirecting to login page
	header('Location: index.php');
	exit();
?>