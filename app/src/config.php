<?php
$servername = "db";
$username = "admin";
$password = "admin123";
$database = "db_act";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>

