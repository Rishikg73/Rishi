
<?php
  session_start();
  // include('connect.php');
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}

?>
<?php

if(isset($_POST['inactivests'])){
   echo 'test';

   $id = $_POST['id'];
  //  $status = $_POST['status'];
   
  //  if($id){
  //   echo 'text';
  $sql = "SELECT * FROM user WHERE id = $id";
  if($sql)

    // echo 'text';

  //  if($status == 'Active')
   {
    
    echo 'done';

    $query = "UPDATE `user` SET `status` = 'Inactive' WHERE id = $id";
    mysqli_query($conn,$query);
    
    }
   else
   {
    $query = "UPDATE `user` SET `status` = 'Active' WHERE id = $id";
    mysqli_query($conn,$query);
   }
  }
// }
?>
