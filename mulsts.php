<?php 
session_start();
 include('connect.php');
?>
<?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    if (isset($_POST['mulchange'])){
        $obj= json_decode($_POST['mulchange'] );
        for($i=0; $i<count($obj); $i++){
            $d = $obj[$i];
            $id = $d->id;
            $status = $d->status;
            
            $query = "SELECT * FROM user WHERE id=$id";
            if($query){
                echo 'test';

            // if($status == 'Active'){
                $sql="UPDATE `user` SET
                `status`='Inactive' WHERE id='$id'";

                  mysqli_query($conn,$sql);
            }
            // else if($status == 'Inactive'){
                // $query = "SELECT * FROM user WHERE id=$id";
                 else {
                    echo 'done';

                $sql="UPDATE `user` SET
                `status`='Active' WHERE id='$id'";
                
                 mysqli_query($conn,$sql);
            }
  
        }
    }
?>