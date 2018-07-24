<?php
session_start();
include 'dbc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<div class="header">
		<h1> Conversations</h1>
	</div>
	<div id="main">
		<h1> <?php  echo $_SESSION['uname']; ?>-- is online</h1>
		<div class="output">
			<?php
				$sender= $_SESSION['uname'];
				
				// $receiver=$_SESSION['receiver'];
				$receiver=$_GET['gmail'];
				echo $receiver;
				/*$query="SELECT * FROM posts WHERE (sender='$sender' AND receiver='$receiver') OR (sender='$receiver' AND receiver='$sender') ";
				$result=$conn->query($query);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo "From: <b class='email'>". $row["sender"]."</b> ".":: ". $row["msg"]. " -- ". $row["date"]." :: To: <b class='email'>".$row["receiver"]."</b><br>";
						echo "<br>";
					}
				}
				else{
					echo "0 results";
				}*/
			?>
		</div>

		<form action="send.php" method="post">
			
			<textarea name="textmsg" class="text_control" placeholder="write message here"></textarea><br><br>
			<input type="submit" value="Send">

		</form>
		<br>
		<br>
		<form action="logout.php">

			<input style="background-color: #6459ed;width: 100%;color: white;" type="submit" value="Logout">

		</form>
	</div>
</body>
</html>