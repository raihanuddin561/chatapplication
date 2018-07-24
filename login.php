<?php 
	session_start();
	include 'dbc.php';

	$mail=$_POST["mail"];
	$pass=$_POST["pass"];

	$query="SELECT * FROM accountinfo WHERE mail='$mail' AND password='$pass'";
	$result=$conn->query($query);

	if($row=$result->fetch_assoc()){
		$_SESSION['uname']=$_POST["mail"];
		$type=$row["type"];
		if($type=="doctor"){
			header("Location:msgrequest.php");
		}
		else if($type=="admin"){
			header("Location:administration.php");
		}else{
			header("Location:chatlist.php");
		}

	}
	else{
		header("Location:error.php");
	}

?>