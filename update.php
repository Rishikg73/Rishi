<?php
session_start();
 include('connect.php');

 if(isset($_POST['update_user']))
 {
    $id= $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $query = "UPDATE user SET fname = '$fname' ,lname = '$lname' , age = '$age' , gender = '$gender'  WHERE id = '$id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
     $_SESSION['message']="Update successfully";
     header("location:http://localhost/star-admin/template/emptables.php"); 
    }
     
 }
 

?>