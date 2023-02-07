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
   
   if($status == 'Inactive')
   {
     $updatequery1 = "UPDATE user SET status = 'Active' WHERE  id = $id";
     mysqli_query($conn,$updatequery1);
   }
   else
   {
     $updatequery1 = "UPDATE user SET status = 'Inactive' WHERE  id = $id";
     mysqli_query($conn,$updatequery1);
   }
?>
</body>
</html>