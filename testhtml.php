<?php 
	session_start();
	include 'dbc.php';
	?>
<!doctype html>
<html>
<head>
	<title>Doctors List</title>
</head>
<body>
	<div class="chatlist">
		<h3>Doctor's List</h3>
		<?php 
			$query = "SELECT mail FROM accountinfo WHERE type='doctor'";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					//echo "<a  href='home.php' name='gmail' value='".$row["mail"] ."'>".$row["mail"]."</a>"."<br>";
					echo "<a  href='testmsg.php?gmail='".$row["mail"]."'>".$row["mail"]."</a>"."<br>";
					echo "<br>";
					//$_SESSION['receiver']=$row["mail"];
				}
			}else{
				echo "0 result";
			}
			?>
	</div>
</body>
</html>