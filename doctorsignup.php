<?php
	include "dbc.php";
	$name=$_POST["name"];
	$mail=$_POST["mail"];
	$pass=$_POST["pass"];
	$type=$_POST["type"];

	$query="insert into accountinfo(mail,name,password,type) values('$mail','$name','$pass','$type')";
	$result=$conn->query($query);
	header("Location:administration.php");

?>