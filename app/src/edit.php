<!DOCTYPE html>


<html>
     <head>
        <title>Update</title>
        </head>
<?php

require ('config.php');

//$servername = "db";
//$username = "admin";
 //$password = "admin123";
// $database = "db_act";

//  Create connection
 $conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
        die('error in sql' . mysqli_error($conn));

}else{
       // $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE user_id")
        or die (mysqli_error($conn));
     
     while ($row = mysqli_fetch_array($query)) {
             $username = $row['user_name'];
             $useremail = $row['user_email'];
             $useraddress = $row['user_address'];
            
      }
    }


?>

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

        $qry = "update tbl_user set user_name='$name', user_email='$email', 
        user_address = '$address' where user_id = $id";
        if(mysqli_query($conn, $qry)){
                header("Location: index.php");
                
               
        
        }
 }
?>

</html>