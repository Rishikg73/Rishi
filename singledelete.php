<html lang="en">
<head>
  <?php
  session_start();
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
if(isset($_POST['singledelete'])){

   $id = $_POST['id'];
  //  $status = $_POST['status'];

   $deletequery = "DELETE * FROM user WHERE id = $id";
   
   if($deletequery)
   {
     $updatequery1 = "UPDATE user SET status = 'Deleted' WHERE  id = $id";
     $run=mysqli_query($conn,$updatequery1);
      if($run)
      { 
        $_SESSION['delete']= "Deleted successfully";
        header("location:http://localhost/star-admin/template/emptables.php");
        // echo 200;
      }
   }
   else
   {
     $updatequery1 = "UPDATE user SET status = 'Active' WHERE  id = $id";
     mysqli_query($conn,$updatequery1);
    //  echo 500;
   }
  }
?>
</body>
</html>