
	<?php
	session_start();
	include 'dbc.php';
	if(isset($_POST['sendmsg'])){
		$msg=$_POST["textmsg"];
	$sender=$_SESSION["uname"];
	$receiver=$_SESSION["receiver"];
	$sql = "INSERT INTO posts(sender,receiver,msg) VALUES('$sender','$receiver','$msg')";
	$result = $conn->query($sql);
	if($result){
		echo "inserted";
	}else{
		echo "not";
	}
	//header("Location: home.php");
	}else{
		echo "some thing wrong";
	}
	
?>

