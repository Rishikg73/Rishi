<?php
 session_start();
 include('connect.php');
?>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if (isset($_POST['muldlete'])){
    $obj= json_decode($_POST['muldlete'] );
    echo 'test';
    for($i=0; $i<count($obj); $i++){
        $d = $obj[$i];
        $id = $d->id;
        $status = $d->status;
         
        $query = "DELETE * FROM user WHERE id=$id";
        if($query){
            echo 'done';
        // if($status == 'Active'){
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