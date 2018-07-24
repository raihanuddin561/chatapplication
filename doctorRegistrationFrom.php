<?php 
	session_start();
	if(!isset($_SESSION['uname'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<h1> Doctor's World </h1>
	</div>

	<div id="main">

        <div id="info"> 
           
            <form action="doctorsignup.php" method="post">
				<h1>Doctor Registration by Admin</h1><br><br>
				<label>Name: </label>
				<input type="text" name="name"><br><br>
				<label>Email: </label>
				<input type="Email" name="mail"><br><br>
				<label>Password: </label>
				<input type="password" name="pass"><br><br>
				<label>Member type:</label>
				<select name="type">
					<option>doctor</option>
					<option>admin</option>
				</select>
				<br><br>
				<button style="background-color: #6495ed; color: white;" type="submit"><b>SignUp</b></button>
			</form>

			<form action="logout.php">
				
				<input type="submit" name="logout" value="Logout">
			</form>
        </div>
    </div>
</body>
</html>