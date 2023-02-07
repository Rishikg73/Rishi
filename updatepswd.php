<?php
session_start();
include('connect.php');
// if(isset($_POST['form'])){

$id = $_POST['id'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
 
//    if(empty($password)){
//       $err['password']='password is required';
//    }
//    if(empty($cpassword)){
//       $err['cpassword']='confirm password is required';
//    }
//    if($password != $cpassword){
//       $err['err']='password not match';
//    }
//    if(!$conn){
//       echo mysqli_connect_error();
//    }
//    if(!$err){

   $select = mysqli_query($conn, "SELECT * FROM user  WHERE id =  '".$id."' ");
   if(mysqli_num_rows($select)) 
   {
      
         $sql = "UPDATE user SET password = '".$password."' WHERE id='$id'";
         mysqli_query($conn,$sql);
        //  echo "<script> window.location='emplogin.php' </script>";
         
         $_SESSION['updpswd'] = "password update successfully";
         header('location: http://localhost/star-admin/template/changepass.php');
   }
//   }
// }
?>