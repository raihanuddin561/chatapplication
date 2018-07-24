<?php
	session_start();
	if(isset($_GET['logout'])){
		session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['receiver']);
	session_unset();
	session_destroy();
	header("Location:Doctors.php");
	}
	
?>