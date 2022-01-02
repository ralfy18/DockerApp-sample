<?php
$servername = "db";
$username = "admin";
$password = "admin123";
$database = "db_act";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
	die('error in sql' . mysqli_error($conn));
}
$id = $_GET['id'];

$qry = "DELETE FROM tbl_user WHERE user_id = $id";
if(mysqli_query($conn, $qry)){
	header('location: index.php');
}else{
	echo mysqli_error($conn);
}

?>

