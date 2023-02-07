<?php
include('connect.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['userdata'])){
    $obj= json_decode($_POST['userdata'] );
    for($i=0; $i<count($obj); $i++){
        $d = $obj[$i];
        $id = $d->id;
        $status = $d->status;
        if($status == 'Active'){
            $sql="UPDATE `user` SET
            `status`='Deleted' WHERE id='$id'";


        mysqli_query($conn,$sql);
        }
        else if($status == 'Inactive'){
            $sql="UPDATE `user` SET
            `status`='Deleted' WHERE id='$id'";
            


        mysqli_query($conn,$sql);
        }

    }
}

?>