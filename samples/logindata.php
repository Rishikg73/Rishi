<html lang="en">
<head>
  <?php
  session_start();
  ?>
</head>
<body>

<?php
  include('connect.php');
 session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors',1);
  error_reporting(E_ALL);

  $email = $_POST['email'];
  $password = $_POST['password'];
  //$status = $_POST['status'];

  $select = mysqli_query($conn, "SELECT * FROM user WHERE email = '". $email . "'and password = '". $password . "' ");

  if(mysqli_num_rows($select )== 1)
  {
   $_SESSION['email'] = $email;

   $cs = mysqli_fetch_array($select);
   $status = $cs['status'];
   //inactive status
   if($status == 'Inactive')
   {    
      $_SESSION['Inactive'] = "Your Account is Inactive";
      header("location:emplogin.php");  
   }
   else if($status == 'Deleted')
   { 
       $_SESSION['Deleted'] = "Your Account is Deleted by Admin";
       header("location: emplogin.php");
   }
   else 
   {
    
    header("location: http://localhost/star-admin/template/employees.php");

   }
 
   
  }
  else
  {
    $_SESSION['Invalid'] = "invalid email password";
    header("location:emplogin.php");
  }
?>

</body>
</html>
