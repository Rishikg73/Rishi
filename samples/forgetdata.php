<html>
<head>
<?php
session_start();
?>
</head>
<body>
<?php
   include('connect.php');
   $_SESSION['email'] = $_POST['email'];

   ini_set('display_errors', 1);
   ini_set('display_startup_errors',1);
   error_reporting(E_ALL);

   $select = mysqli_query($conn, "SELECT * FROM user  WHERE email = '" .$_SESSION['email']. "' ");
   if(mysqli_num_rows($select))
   {
      echo " window.location='empreset.php' </script>";      
         $_SESSION['reset']= "Now you can reset your password";
         header('location:empreset.php');
   }
   else
   {
      echo "<script>alert('invalid email');   window.location='empforget.php' </script>";
      $_SESSION['invalid']= "Invalid email";
      header('location:empforget.php');
   }
   
?>
</body>
</html>
