
<?php
session_start();
if(!isset($_SESSION['uname'])){
	header("Location:index.php");
}
include 'dbc.php';
//include 'fetchmessage.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div class="header">
		<h1> Conversations</h1>
	</div>
	<div id="main">
		<h1> <?php  echo $_SESSION['uname']; ?>-- is online</h1>
		<?php
				$sender= $_SESSION['uname'];
				if(!isset($_SESSION['receiver'])){
				 $_SESSION['receiver']=$_GET['id'];
				}
				$receiver= $_SESSION['receiver'];
			?>
		<div class="output" id="msgbody">
			<?php 

				/*$sender= $_SESSION['uname'];
				if(!isset($_SESSION['receiver'])){
				 $_SESSION['receiver']=$_GET['id'];
				}
				
				$receiver= $_SESSION['receiver'];
				$query="SELECT * FROM posts WHERE (sender='$sender' AND receiver='$receiver') OR (sender='$receiver' AND receiver='$sender') ";
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
		<script type="text/javascript">
			
			function showmsg(){
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","fetchmessage.php",false);
				xmlhttp.send(null);
				document.getElementById("msgbody").innerHTML=xmlhttp.responseText;
			}
			showmsg();
			setInterval(function(){
				showmsg();
			},1000);

		</script>
		<div class="sendingpart">
		<form action="send.php" method="post">
			<textarea name="textmsg" class="text_control" placeholder="write message here"></textarea><br><br>
			<input type="submit" name="sendmsg" value="Send">
			<!--<button style="background-color: #6495ed; color: white;" type="submit" name="send"><b>Send</b></button>-->
		</form>
		<br>
		<a href="chatlist.php"><button>Homepage</button></a>
		<br>
		<br>
	     </div>
		<form action="logout.php">

			<input style="background-color: #6459ed;width: 100%;color: white;" type="submit" name="logout" value="Logout">

		</form>
	</div>
</body>
</html>