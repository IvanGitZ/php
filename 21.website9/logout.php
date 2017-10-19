<?php  
	session_start();
	unset($_SEESSION['username']);
	unset($_SEESSION['success']);

	header("location: login.php")
?>