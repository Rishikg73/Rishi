<html>
<head>
<?php
session_start();
?>
</head>
<body>
<?php

include('connect.php');

  $f_name = $_POST['fname'];
  $l_name = $_POST['lname'];
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
   header("location: http://localhost/star-admin/template/pages/samples/addemployee.php");
  }
  else{

        //$sql = "INSERT INTO login (name,email,password) VALUES ('" . $name . "', '" . $email . "', '" . $password . "')";
        //insert database
        $stmt = $conn->prepare("insert into user(fname,lname,age,gender,email,password,status) values('" . $f_name . "','" . $l_name . "', '" . $age . "','" . $gender . "', '" . $email . "', '" . $password . "','Active')");
        $stmt->bind_param("sssssss",$f_name,$l_name,$age,$gender,$email,$password,$status);
        $execval = $stmt->execute();
        echo $execval;
        //echo "Registration successfully...";
        $stmt->close();
        $conn->close();
       // if(mysqli_query($conn,$sql)){
         //successfully registered message
         echo "<script> window.location='http://localhost/star-admin/template/employees.php';
         </script>";
         $_SESSION['success']=" was Data inserted";
          header("location: http://localhost/star-admin/template/emptables.php");
           }
          
?>
</body>
</html>