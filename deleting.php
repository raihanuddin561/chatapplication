<?php 
	include('dbc.php');
	$msgid=$_GET['delmsg'];
	$sql="DELETE FROM posts where mcount='$msgid'";
	if($conn->query($sql)){
		header("Location:home.php");
	}else{
		echo "Message can't delete";
	}
?>