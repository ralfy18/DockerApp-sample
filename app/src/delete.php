<!DOCTYPE html>
<html>
	<html>
		<head>
		<meta http-equiv="refresh" content="0;url=index.php">
		</head>

	

<?php
require ('config.php');
// $servername = "db";
// $username = "admin";
// $password = "admin123";
// $database = "db_act";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
	die('error in conn' . mysqli_error($conn));
}
//$id = $_GET['id'];

$qry = "DELETE FROM tbl_user WHERE user_id";
if(mysqli_query($conn, $qry)){
	//header('location: index.php');
}

?>
</html>