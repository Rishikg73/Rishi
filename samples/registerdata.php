<html>
<head>
<?php
session_start();
?>
</head>
<body>
<?php

include('connect.php');

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $status = $_POST['status'];
//check details in database 
  $select = mysqli_query($conn, "SELECT * FROM user  WHERE  email = '" . $email . "'  ");
  if(mysqli_num_rows($select)){
//email already exist message
   echo "<script> window.location='empregister.php';
   </script>";
   $_SESSION['message']="Email Already exist";
    header("location: empregister.php");
  }
  else{

        //insert database
        $stmt = $conn->prepare("insert into user(fname,lname,age,gender,email,password,status) values('" . $fname . "','" . $lname . "', '" . $age . "','" . $gender . "', '" . $email . "', '" . $password . "','Active')");
        $stmt->bind_param("sssssss",$fname,$lname,$age,$gender,$email,$password,$status);
        $execval = $stmt->execute();
        echo $execval;
        $stmt->close();
        $conn->close();
         //successfully registered message
         echo "<script> window.location='emplogin.php';
         </script>";
         $_SESSION['success']="Saved successfully";
        header("location: emplogin.php");
      }
          
?>
</body>
</html>