<?php
session_start();
 //db connect
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
    // else{
    //   echo "connected";
    // }

// echo 'hi';
if(isset($_POST['save'])){
  
  // echo 'err';

$email = $_SESSION['email'];
$img = $_POST ['image'];

$allow_extension = array('gif' , 'png' , 'jpg' , 'jpeg');
$filename = $_POST['image'];
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($file_extension, $allow_extension))
{
  // echo 'test';
  $_SESSION['error'] = "You are allowed with only jpg,jpeg,png and gif";
    header("location:http://localhost/star-admin/template/changeprofile.php");
}
else
{
  // echo 'done';
 $sql="UPDATE `user` SET `image` = '$img'  WHERE email='$email'";
 $query_run = mysqli_query($conn,$sql);

   if($query_run)
   {
    // move_uploaded_file($_FILES['image']['tmp_name'], "http://localhost/star-admin/template/img/" .$_FILES['image']['name']);
    $_SESSION['change'] = "image Updated Successfully";
    header("location:http://localhost/star-admin/template/changeprofile.php");
   }
   else
   {
     
    $_SESSION['imgerr'] = "image Not update";
    header("location:http://localhost/star-admin/template/changeprofile.php");
    
   }
 }
}
   
?>