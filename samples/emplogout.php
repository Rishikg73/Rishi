<?php
  session_start();
  
  if(isset($_POST['logout_btn']))
  {
    unset($_SESSION['name']);

    $_SESSION['message']="Logout successfully";
    header("location: http://localhost/star-admin/template/pages/samples/emplogin.php");
    exit(0);
  }
?>