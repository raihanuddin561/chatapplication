
<?php 
	session_start();
	include 'dbc.php';
	
	$sender= $_SESSION['uname'];
	// $_SESSION['receiver']=$_GET['id'];
				
				
	$receiver= $_SESSION['receiver'];
				//function messages($sender,$receiver){
					$query="SELECT * FROM posts WHERE (sender='$sender' AND receiver='$receiver') OR (sender='$receiver' AND receiver='$sender') ";
				$result=$conn->query($query);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo "From: <b class='email'>". $row["sender"]."</b> ".":: ". $row["msg"]. " -- ". $row["date"]." :: To: <b class='email'>".$row["receiver"]." : : : <a href='deleting.php?delmsg=".$row["mcount"]."'>Delete</a></b><br>";
						echo "<br>";
					}
				}
				else{
					echo "0 results";
				}
				
				
 ?>