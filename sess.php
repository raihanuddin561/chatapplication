<?php
	session_start();
	if(isset($_SESSION['uname'])){
		echo $_SESSION['uname'];
	}
?>