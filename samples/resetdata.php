<html lang="en">
<head>
 <?php
session_start();
 ?>     
</head>
<body>
<?php
   include('connect.php');
   $email =$_POST['email'];
   $password = $_POST['password'];
 
   $select = mysqli_query($conn, "SELECT * FROM user  WHERE email =  '".$email."' ");
   if(mysqli_num_rows($select)) 
   {
         $sql = "UPDATE user SET password = '".$password."' WHERE email='$email'";
         mysqli_query($conn,$sql);
         echo "<script> window.location='emplogin.php' </script>";
         
         $_SESSION['reset']= "password changed successfully";
         header('location:emplogin.php');
   }
   else 
   {
      echo "<script> window.location='empreset.php' </script>";
      $_SESSION['Invalid']= "please check your email";
      header('location:empreset.php');
   }
   
?>

</body>
</html>
