<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />

</head>
<body>
    
</body>
</html>
<?php
 //db connect
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
 

     <!-- employee management -->
     <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card mt-4">
                      <div class="card-header bg-white ">
                        <h3 class="card-title">Edit employee</h3> 
                        <div class="card-body">
                            <?php
                              if(isset($_POST['update']))
                              {
                                $email = $_POST['email'];
                                $users = "SELECT * FROM user WHERE email =$email";
                                $users_run = mysqli_query($conn ,$users);

                                if(mysqli_num_rows($users_run)>0)
                                {
                                    foreach($users_run as $user)
                                    {
                                      ?>

                                     
                            <form action="updateemployee.php" method="POST"> 
                                <input type="hidden" name="id" value=<?=$user['id'];?>>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="">First Name</label>
                                        <input type="text" name="fname" value=<?=$user['fname'];?> class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="">Last Name</label>
                                        <input type="text" name="lname" value=<?=$user['lname'];?> class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="">Age</label>
                                        <input type="text" name="age" value=<?=$user['age'];?> class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value=<?=$user['email'];?> class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="">Status</label>
                                        <input type="text" name="status" value=<?=$user['status'];?> class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3" >
                                        <button type="submit" name="update_user" class="btn btn-primary mt-4">update user</button>
                                    </div>
                                </div>
                            </form>
                            <?php  
                                    }
                                }
                                else
                                {
                                    ?>
                                      <h3>No records</h3>
                                    <?php
                                }
                              }
                            ?>
                        </div>
                     </div>
                 </div>
            </div>
         </div>
      </div>
</section>
