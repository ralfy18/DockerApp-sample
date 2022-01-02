<?PHP
	// include('');
	// require_once('');
	require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web App_Activity3</title>
</head>
<body>
	<!-- <h1 id="head">Welcome to Docker, GCCians!</h1> -->
	<?PHP 
		if(isset($_REQUEST['insertUser'])){
			// Capture POST Method from FORM
			$un	=	mysqli_real_escape_string($conn,$_POST['user_name']);
			$ue	=	mysqli_real_escape_string($conn,$_POST['user_email']);
			$ua	=	mysqli_real_escape_string($conn,$_POST['user_address']);
			// Database Insert
			
			 $sql = mysqli_query($conn,"INSERT INTO tbl_user (`user_name`,`user_email`,`user_address`) VALUES ('".$un."','".$ue."','".$ua."')");

			 if(!$sql){
				echo "Not Inserted!";

			}
			// var_dump($sql);
		}
	?>
	<form action="" method="POST">
		<label for="user_name">Username</label>
		<input type="text" id="user_name" name="user_name"> <br></br>
		<label for="user_email">Email</label>
		<input type="text" id="user_email" name="user_email"> <br></br>
		<label for="for_address">Address</label>
		<input type="text" id="user_address" name="user_address"> <br></br>
		<button type="submit" name="insertUser">Submit</button>
	</form>
	

	<hr>
<h3><center>User list</center></h3>
	<table style = "width: 50%"border="1" align="center">
<tr>
  <td><center>Id</center></td>
  <td><center>Name</center></td>
  <td><center>Email</center></td>
  <td><center>Address</center></td>
  <td><center>Action</center></td>
 
</tr>

<?php

$query = mysqli_query($conn, "SELECT * FROM tbl_user")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
	$id = $row['user_id'];
  
	?>
   <tr>
   <td><?php echo $row['user_id']?></td>
    <td><?php echo $row['user_name']?></td>
	<td><?php echo $row['user_email']?></td>
	<td><?php echo $row['user_address']?></td>
    <td>
	<a href ="edit.php?id=<?php echo $id; ?>">Edit</a>    |
		<a href ="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
	</td>
	</tr>
<?php
}

?>

</table>
<!-- <?php
$query = mysqli_query($conn, "DELETE FROM tbl_user WHERE user_id=47")
   or die (mysqli_error($conn));

   ?>
   <FORM>
   <button type="submit" name="query">DELETE USER</button>

   </FORM> -->

	
</body>
</html>