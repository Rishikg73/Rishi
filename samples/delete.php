<html lang="en">
<head>
  
</head>
<body>
<?php
  include('connect.php');
?>
<?php
   $id = $_POST['id'];
   $status = $_POST['status'];

   $deletequery = "DELETE * FROM user WHERE id = $id";
   
   if($deletequery)
   {
     $updatequery1 = "UPDATE user SET status = 'Deleted' WHERE  id = $id";
     mysqli_query($conn,$updatequery1);
   }
   else
   {
     $updatequery1 = "UPDATE user SET status = 'Active' WHERE  id = $id";
     mysqli_query($conn,$updatequery1);
   }
?>
</body>
</html>