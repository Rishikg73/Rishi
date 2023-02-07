<html lang="en">
<head>
<?php
  session_start();
  // include('connect.php');
?>
</head>
<body>
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
  // if(isset($_POST['stsactive'])){

   $id = $_POST['id'];
   $status = $_POST['status'];
   
   if($status == 'Inactive')
   {
     $updatequery1 = "UPDATE user SET status = 'Active' WHERE  id = $id";
     $run = mysqli_query($conn,$updatequery1);
     
     if($run){
     $_SESSION['show']= "Active successfully";
     header("location:http://localhost/star-admin/template/emptables.php");
     }
    }
   else
   {
     $updatequery1 = "UPDATE user SET status = 'Inactive' WHERE  id = $id";
      mysqli_query($conn,$updatequery1);
    //  $_SESSION['mss']="employee inactive successfully";
    //  header("location:http://localhost/star-admin/template/emptables.php");
   }
  // }
  
?>

</body>
</html>