<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Adminpanel</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Employees</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text "><i
                        class=""></i>Dashboard</a>
                <a href="employee.php" class="list-group-item list-group-item-action bg-transparent second-text active "><i
                       class="fas fa-user-circle me-2"></i>employee</a>
                <a href="emplogin.php" class="list-group-item list-group-item-action bg-transparent second-text"><i
                       class="fas fa-user-circle me-2"></i>login</a>       
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Projects</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a> -->
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Employee Management</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
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

                   $sql = "SELECT * FROM user";
                   $query = mysqli_query($conn,$sql);
                   $result = mysqli_fetch_array($query);
                  
                 ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                         <!-- <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                                <i class="fas fa-user me-2"></i><?php echo $result['email'];?>
                              </a>
                 
                            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul> -->
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <!-- Users count -->
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

                                    $query = "SELECT id FROM user ORDER BY id";
                                    $query_run = mysqli_query($conn,$query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h3> '.$row.'</h3>';
                                    ?>
                                <!-- <h3 class="fs-2">1</h3> -->
                                <p class="fs-5">employees</p>
                            </div>
                            <i class="fas fa-solid fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                        <a href="" class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center" style="text-decoration:none" target="_blank">More info</a>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
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
                                     $query = "SELECT * FROM user WHERE status='Active'";
                                     $query_run = mysqli_query($conn,$query);
                  
                                     $row = mysqli_num_rows($query_run);
                                     echo '<h3> '.$row.'</h3>';
                                   ?>  
                                <!-- <h3 class="fs-2 ">2</h3> -->
                                <p class="fs-5">Active employee</p>
                            </div>
                            <i
                                class="fas fa-solid fa-user-plus fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                        <a href="activeemployee.php" class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center" style="text-decoration:none" target="_blank">More info</a>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
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
                                     $query = "SELECT * FROM user WHERE status='Inactive'";
                                     $query_run = mysqli_query($conn,$query);
                  
                                     $row = mysqli_num_rows($query_run);
                                     echo '<h3> '.$row.'</h3>';
                                     
                                   ?>  
                                <!-- <h3 class="fs-2">3</h3> -->
                                <p class="fs-5">Inactive employee</p>
                            </div>
                            <i class="fas fa-regular fa-user-minus fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                        <a href="inactiveemployee.php" class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center" style="text-decoration:none" target="_blank">More info</a>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
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
                                     $query = "SELECT * FROM user WHERE status='Deleted'";
                                     $query_run = mysqli_query($conn,$query);
                  
                                     $row = mysqli_num_rows($query_run);
                                     echo '<h3> '.$row.'</h3>';
                                   ?>  
                                <!-- <h3 class="fs-2">4</h3> -->
                                <p class="fs-5">Delete employee</p>
                            </div>
                            <i class="fas fa-light fa-user-slash fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                        <a href="deleteemployee.php" class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center" style="text-decoration:none" target="_blank">More info</a>
                    </div>
                </div>
                <style>
                           
                            p{
                               font-size:20px;
                           } 
                           
                           #inactive{
                             font-size:16px;
                             padding: 4px 10px 4px 10px;
                           }
                           #search{
                              margin-left:30%;
                              outline:0;
                              /* margin-bottom:15%; */
                            }
                           #text{
                              margin-left:80%;
                              
                           }
                           #addemployee{
                              margin-right:50%;
                            
                           }
                           .ml-5{
                              margin-left:15px;
                           }
                       </style>
                   <!-- res saved message -->
                      <?php if(isset($_GET['res'])) {?>
                       <p class="center">
                            <?php echo $_GET['res']; ?>
                       </p>
        
                        <?php
                      }?>
                       <!-- employee card details -->
                      <div class="card"> 
                         <div class="card-header bg-white ">
                          <h3 class="card-title">employee list</h3> 
                          <!-- add employee button -->
                          <p><a href="addemployee.php" target="_blank" class="btn btn-primary">Add Employee</a></p> 
                           <!-- change status button -->
                          <button type="submit" onclick="return changestatus()" name="statusbtn" id="text" class="btn btn-primary">Change Status</button>
                          <!-- delete status button -->
                          <button type="submit" onclick="return multipledelete()" name="statusbtn" id="text1" class="btn btn-danger ml-4">Delete</button>
                             <form method="post">
                                 <input type="search" name="search" id="search" placeholder="Type here to search..." class="mb-3">
                                  <input type="submit" name="search_filter" value="Search" class="btn btn-primary pt-1 pb-1 mb-1" >
                             </form>
                          <!-- <button type="submit" onclick="return changests()" name="statusbtn" id="text" class="btn btn-primary">Change Status</button>
                          <button type="submit" onclick="return deletests()" name="statusbtn" id="text1" class="btn btn-danger ml-4">Delete</button> -->
                        </div>
                           <!-- search users -->
                    <?php
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

                   if(isset($_POST['search_filter']))
                     { 
                        $search = $_POST['search'];
                        $sql= "SELECT * FROM user WHERE CONCAT(id,fname,lname,age,email,status) LIKE '%$search%'";
                        $query = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($query)>0)
                        {
            
                         ?>
                            <!-- search see data -->
                            <table id="example2" class="table table-bordered table-hover">  
                               <thead>
                                <tr>
                                  <th></th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>age</th>
                                  <th>email</th>
                                  <th>status</th>
                                  <th>action</th>   
                                </tr>   
                             </thead>
                          <tbody>
                            <!-- insert data -->      
                          <?php
                           while($row =mysqli_fetch_array($query)){
                           ?>
                          <tr> 
         
                            <td><input type="checkbox" name="mycheck" id="mycheck"
                                data-status = "<?php echo $row['status']; ?>" data-id ="<?php echo $row['id']; ?>" value ="<?php echo $row['id'];?>"></td>

                          <td><?php echo $row['fname'];?></td>
                          <td><?php echo $row['lname'];?></td>
                          <td><?php echo $row['age'];?></td>
                          <td><?php echo $row['email'];?></td>
                            <!-- change message -->
                          <td>
                          <?php if($row['status']=='Active')
                            {
                             echo '<p style=color:green;>Active</p>';
                            }
                            else if($row['status']=='Inactive')
                            {
                             echo '<p style=color:red;>Inactive</p>';
                            }
                           else
                           {
                             echo '<p  style=color:blue;>Deleted</p>';
                           }
                          ?> 
                          </td>
                           <!-- status buttons -->
                   <td>
                      <?php if($row['status']=='Inactive')
                     {  
                     ?>
                    <button type="submit" class="btn btn-success ml-5" onclick="return activestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="active" id="active">Active</button>
                     <?php
                      }
                      else  if($row['status']!='Deleted')
                      {
                      ?>
                      <button type="submit"  class="btn btn-danger ml-5" onclick="return inactivestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="inactive" id="inactive">Inactive</button>
                     <?php
                        }
                        ?>   
                      <?php if($row['status']!= 'Deleted')
                        {
                        ?>
                       <a href="http://localhost/employee/viewemployee.php?id=<?=$row['id'];?>" class="btn btn-secondary ml-5" target="_blank">View</a>
                       <?php
                        }
                       ?>    
                      <?php if($row['status']!= 'Deleted')
                       {
                       ?>
                      <a href="http://localhost/employee/editemployee.php?id=<?=$row['id'];?>" class="btn btn-secondary ml-5" target="_blank">Edit</a>
                       <?php
                        }
                        ?>  
                      <?php if($row['status']!='Deleted'){
                       ?>
                      <button type="submit"  class="btn btn-info ml-5"  onclick="return deletestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>',this)" name="delete" id="delete">Delete</button> 
                       <?php
                         } 
                       ?>                                
                    </td>
                  </tr>
              <?php
               }?>  
         </tbody>
     </table>
     <?php 
             
    }
      else{
            echo "No records";
          }
       }
      else{
      ?>
      
       <!-- user data -->
       <form action="" method="post">
       <table id="example2" class="table table-bordered table-hover" >
         <thead>        
         <tr>
           <!-- <th>id</th> -->
           <th></th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>age</th>
           <th>email</th>
           <th>status</th>
           <th>action</th>   
         </tr>   
         </thead>
         <tbody>
           <!-- insert data -->
           <?php
              $result=mysqli_query($conn,"select * from user");
            ?>
          <?php
           while($row =mysqli_fetch_assoc($result)){
          ?>
          <tr> 
           <!-- checkbox -->
            <td><input type="checkbox" name="mycheck" id="mycheck"
            data-status = "<?php echo $row['status']; ?>" data-id ="<?php echo $row['id']; ?>" value ="<?php echo $row['id'];?>"></td>
           
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['lname'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['email'];?></td>
          
            <!-- change message -->
            <td>
                
               <?php if($row['status']=='Active')
                {
                  echo '<p style=color:green;>Active</p>';
                }
                else if($row['status']=='Inactive')
                {
                  echo '<p style=color:red;>Inactive</p>';
                }
                else 
                {
                  echo '<p  style=color:blue;>Deleted</p>';
                }
              ?> 
              
            </td>
            <!-- change buttons -->
            <td>
               <?php if($row['status']=='Inactive')
                {  
                 ?>
                 <button type="submit" class="btn btn-success ml-5" onclick="return activestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="active" id="active">Active</button>
                 <?php
                }
                
                else  if($row['status']!='Deleted')
                {
                  ?>
                 <button type="submit"  class="btn btn-danger ml-5" onclick="return inactivestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="inactive" id="inactive">Inactive</button>
                 <?php
                 }
                 
              ?>
                <?php if($row['status']!= 'Deleted')
               {
                ?>
                <a href="http://localhost/employee/viewemployee.php?id=<?=$row['id'];?>" class="btn btn-primary ml-5" target="_blank">View</a>
                <?php
               }
               ?>     
               <?php if($row['status']!= 'Deleted')
               {
                ?>
                <a href="http://localhost/employee/editemployee.php?id=<?=$row['id'];?>" class="btn btn-secondary ml-5" target="_blank">Edit</a>
                <?php
               }
               ?>    
              <?php if($row['status']!='Deleted')
              {
                 ?>
                 <button type="submit"  class="btn btn-info ml-5"  onclick="return deletestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="delete" id="delete">Delete</button> 
                 <?php
              } 
                 ?>                                
            </td>
            
          </tr>
          <?php
         }?>  
         </tbody>
       </table>
       </form>
        <?php } ?>
         <!-- active status -->
         <script>
           function activestatus(id,status)
           {
             var active = document.getElementById("active").value;
                          
             var formData = new FormData();

              formData.append("id",id);
              formData.append("status",status);

              if (confirm('Are you sure you want active status')) {
    
                      var request = new XMLHttpRequest();
                      request.open("POST", "active.php");
                      request.send(formData);
                     window.location.reload();
                 }
              }   
         </script>     
          <!-- inactive status -->
          <script>
           function inactivestatus(id,status)
           {
             var inactive = document.getElementById("inactive").value;
            
             var formData = new FormData();

             formData.append("id",id);
             formData.append("status",status);

             if (confirm('Are you sure you want inactive status')) {
    
                 var request = new XMLHttpRequest();
                  request.open("POST", "inactive.php");
                  request.send(formData);
                 window.location.reload();
              }
           }   
         </script>

         <!-- delete status -->
         <script>
            function deletestatus(id,status)
           {
            var delt = document.getElementById("delete").value;
                                                
             //var base_url = window.location.origin;
           
             var formData = new FormData();

             formData.append("id",id);
             formData.append("status",status);

             if (confirm('Are you sure you want to delete status?')) {
    
                     var request = new XMLHttpRequest();
                     request.open("POST", "delete.php");
                     request.send(formData);
                     //  alert('Do you want to change status');
                      window.location.reload();
                  }

           }
         </script>
         
         <!-- Multiple users change status -->
          <script>
          function changestatus() {  

              var selectedCBs = document.querySelectorAll('input#mycheck[type="checkbox"]:checked');

              var arr = [];
               for(var i = 0; i< selectedCBs.length; i++){

               //  alert(selectedCBs[i].getAttribute('data-id'));
                  checkbox= selectedCBs[i];
                 status = checkbox.getAttribute('data-status');
                 //   console.log(status);
                 id = checkbox.getAttribute('data-id');
     
                  var obj = {};
                   obj.id = id;
                   obj.status = status;
                 // var objs = [obj.id , obj.status];
                  arr.push(obj);
      
             }
             var formData = new FormData();

             // HTML file input, chosen by user
              formData.append("userdata", JSON.stringify(arr));

              if (confirm('Are you sure you want to change status?')) {
    
               var request = new XMLHttpRequest();
               request.open("POST", "changestatus.php");
               request.send(formData);
                window.location.reload();
            }
       }
     </script>

     <!-- Multiple users delete status  -->
     <script>
          function multipledelete() {  

              var selectedCBs = document.querySelectorAll('input#mycheck[type="checkbox"]:checked');

              var arr = [];
               for(var i = 0; i< selectedCBs.length; i++){

               //  alert(selectedCBs[i].getAttribute('data-id'));
                  checkbox= selectedCBs[i];
                 status = checkbox.getAttribute('data-status');
                 //   console.log(status);
                 id = checkbox.getAttribute('data-id');
     
                  var obj = {};
                   obj.id = id;
                   obj.status = status;
                 // var objs = [obj.id , obj.status];
                  arr.push(obj);
      
             }
             var formData = new FormData();

             // HTML file input, chosen by user
              formData.append("userdata", JSON.stringify(arr));

              if (confirm('Are you sure you want to delete status?')) {
    
               var request = new XMLHttpRequest();
               request.open("POST", "multipledelete.php");
               request.send(formData);
               //  alert('Do you want to change status');
                window.location.reload();
            }
       }
     </script>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>