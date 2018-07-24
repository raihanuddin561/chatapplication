
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	include "dbc.php";
			
			$emptyName="";
			
			$emptyMail="";
			
			$emptyPassword="";

			$n="";
			$m="";
			$p="";
			if(isset($_POST["submit"])){
				if(empty($_POST["name"])){
					$emptyName="name field is empty.";
				}else{
					$name=$_POST["name"];
					$n="y";
				}
				if(empty($_POST["mail"])){
					$emptyMail="Mail field is empty.";
				}
				else{
					$email=$_POST["mail"];
					$m="y";
				}
				if(empty($_POST["pass"])){
					$emptyPassword="password is empty";
				}
				else{
					$password=$_POST["pass"];
					$p="y";
				}

				if($n=="y" && $m=="y" && $p=="y"){
					
					
					$type="general";

					$query="insert into accountinfo(mail,name,password,type) values('$email','$name','$password','$type')";
					$result=$conn->query($query);
					header("Location:index.php");
					
				}				
			
		}
	

?>
	<div class="header">
		<h1> Doctor's World </h1>
	</div>

	<div id="main">

        <div id="info"> 
           
            <form action="index2.php" method="post">
				<h1>Don't have any account? Sign up from here</h1><br><br>
				<label>Name: </label>
				<input type="text" name="name" required="name required"><span><?php echo $emptyName ?></span><br><br>
				<label>Email: </label>
				<input type="Email" name="mail" required="Email required"><span><?php echo $emptyMail ?></span><br><br>
				<label>Password: </label>
				<input type="password" name="pass" required="Password required"><span><?php echo $emptyPassword ?></span><br><br>
				<br><br>
				<button style="background-color: #6495ed; color: white;" type="submit" name="submit"><b>SignUp</b></button>
			</form>
        </div>
    </div>

</body>
</html>