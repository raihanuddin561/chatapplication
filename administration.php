<?php 
	session_start();
	if(!isset($_SESSION['uname'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
</head>
<body>
	<div class="adminbody">
		<h3>Hello admin, you can make change from here</h3>
		<br>
		<br>
		<div class="formControl">

			<form action="doctorRegistrationFrom.php">
				<input type="submit" name="adddoctor" value="Register Doctor">
			</form>

			<br>
			<br>
		</div>
		
	</div>
	<form action="logout.php">

			<input style="background-color: #6459ed;width: 100%;color: white;" type="submit" name="logout" value="Logout">

		</form>
</body>
</html>