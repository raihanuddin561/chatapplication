<?php 
	session_start();
	if(!isset($_SESSION['uname'])){
	header("Location:index.php");
}
unset($_SESSION['receiver']);
	include 'dbc.php';
?>
<!doctype html>
<html>
<head>
	<title>Doctors List</title>
</head>
<body>
	<div class="wlcm">
		Welcome <h1 style="color:green"><?php echo $_SESSION['uname']; ?></h1>
	</div>
	<div class="chatlist">
		<h3>Doctor's List</h3>
		<?php 
			$query = "SELECT * FROM accountinfo WHERE type='doctor'";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					//echo "<a  href='home.php?gmail=".$row["mail"]."'>".$row["mail"]."</a><br>";
					echo '<a href="home.php?id='.$row['mail'].'">'.$row['name'].'</a><br>';
					echo "<br>";
					
				}
			}else{
				echo "0 result";
			}
			?>
	</div>
</body>
</html>