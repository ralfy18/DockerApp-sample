<?php
$servername = "db";
$username = "admin";
$password = "admin123";
$database = "db_act";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
        die('error in sql' . mysqli_error($conn));

}else{
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE user_id = $id")
        or die (mysqli_error($conn));
     
     while ($row = mysqli_fetch_array($query)) {
             $username = $row['user_name'];
             $useremail = $row['user_email'];
             $useraddress = $row['user_address'];
            
      }
    }


?>
<!DOCTYPE html>
<html>
<head>
        <title>Edit User</title>
 </head>
<body>
        
        <form action="" method="POST">
                        <label >Name</label>
                        <input type="text"  name="name" value = "<?php echo $username; ?>"> <br></br>
                        <label for="user_email">Email</label>
                        <input type="text" name="email" value = "<?php echo $useremail; ?>"> <br></br>
                        <label for="for_address">Address</label>
                        <input type="text" name="address" value = "<?php echo $useraddress; ?>"> <br></br>
                        <button type="submit" name="update">Update</button>
                </form>

        
<?php
if (isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $qry = "UPDATE tbl_user SET user_name='$name', user_email='$email', 
        user_address = '$address' WHERE user_id = $id";
        if(mysqli_query($conn, $qry)){
                header('location: index.php');
        }else{
                echo mysqli_error($conn);
        }
 }

?>

</body>
</html>
