<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>emptables</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <!-- logo -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="http://localhost/star-admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page  -->
  <!-- inject:css alignment  -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject url image-->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Data tables -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
<!--pagination-->
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
   <!-- bootbox alert -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
   <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
</head>

</head>
<body id="etable">
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <!-- <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p> -->
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
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
          $email = $_SESSION['email'];

          $query = "SELECT * FROM user WHERE email = '$email'";
          $data = mysqli_query($conn,$query);
          $result = mysqli_fetch_assoc($data);
    ?>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome<span class="text-black fw-bold"> <?php echo $result['fname']; ?><?php echo  $result['lname']; ?> </span></h1>
          </li>
        </ul>
       <ul class="navbar-nav ms-auto">

          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <!-- <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> -->
            <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">

                     </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
              <!-- <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> -->
              <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">
              <br>

            <p class="mb-1 mt-3 font-weight-semibold"> <?php echo $result['fname']; ?><?php echo  $result['lname']; ?> </p>
             <p class="fw-light text-muted mb-0"><?php echo $email;?></p>
              </div>
              <a href="http://localhost/star-admin/template/employeeprofile.php" name="update" target="_blank" class="dropdown-item">
                <i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>

                <a class="dropdown-item" href="http://localhost/star-admin/template/uploadprofile.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-briefcase-upload text-primary me-2"></i>upload profile</a>
              
                <!-- <a class="dropdown-item" href="http://localhost/star-admin/template/changeprofile.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-account-box text-primary me-2"></i>change profile</a> -->
              
                <a class="dropdown-item" href="http://localhost/star-admin/template/changepass.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-account-key text-primary me-2"></i>change password</a>
             
              <!-- logout button -->
              <form action="http://localhost/star-admin/template/pages/samples/emplogout.php" method="post">
              <button type="submit" name="logout_btn"  class="dropdown-item">
                <i class="dropdown-item-icon mdi mdi-power text-primary me-2" ></i>Logout</button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles  mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
          
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">

              </ul>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
           
            <ul class="chat-list">
             
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="employees.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/star-admin/template/tablemp.php" target="_blank">Employees</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#App" aria-expanded="false" aria-controls="App">
              <i class="menu-icon mdi mdi-apps"></i>
              <span class="menu-title">Apps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="App">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/star-admin/template/calc.php" target="_blank">
                  <i class="mdi mdi-calculator"></i> calculator</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/star-admin/template/dics.php" target="_blank">
                  <i class="mdi mdi-dictionary"></i> Dictionary</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
               <!-- deleted successfully message -->
               <?php if(isset($_SESSION['delete'])) 
                       {
                         ?>
                       <div class="alert alert-success alert-dismissible fade show fs-5">
                              <strong>Success!</strong><?php  echo $_SESSION['delete']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                   <?
                     unset($_SESSION['delete']);
                  }
                   ?>

              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0"  href="http://localhost/star-admin/template/emptables.php" role="tab" >All</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  href="http://localhost/star-admin/template/empcards.php" role="tab" >employee cards</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link "  href="http://localhost/star-admin/template/tableemp.php" role="tab" >employee tables</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="http://localhost/star-admin/template/empdetails.php" role="tab" >More details</a>
                    </li>
                  </ul>
                  <style>
                    .green{
                      color:green;
                    }
                  </style>
                  <!-- modal popup -->
                  <!-- <div class="modal fade" id="delpop" tabindex="-1" role="dialog" aria-labelledby="delpop" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delpop">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="singledelete.php" method="post">
      <div class="modal-body">
        <input type="text" name="id" id="id" >
        Are you sure you want delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" name="delemp" class="btn btn-danger text-white">Yes</button>
      </div>
      </form>
    </div>
  </div>
</div> -->

                  <!-- search employee -->
                      <!-- <form method="post" class="">
                          <input type="search" name="search" id="search" placeholder="Type here to search...">
                          <input type="submit" name="search_filter" value="Search" class="btn btn-primary mt-2 text-white" >
                        </form> -->
                  <div>
                    <div class="btn-wrapper">
                    <div class="btn-group">
                   <button type="button" class="btn btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="icon-share "></i> share</button>
                 </button>
                 <div class="dropdown-menu">
                       <!-- copy link button -->
                       <a class="dropdown-item" href="https://www.addtoany.com/add_to/copy_link?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femptables.php&amp;linkname=" target="_blank">
                        <i class="fa-regular fa-copy"></i> Copy Link</a>

                     
                        <div class="dropdown-divider">share link into </div>
                        <!-- share email -->
                         <a class="dropdown-item" href="https://www.addtoany.com/add_to/email?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femptables.php&amp;linkname="><i class="fa-solid fa-envelope"></i> Email</a>
                          <!-- share whatsapp -->
                         <a class="dropdown-item" href="https://www.addtoany.com/add_to/whatsapp?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femptables.php&amp;linkname=" target="_blank" >
                            <i class="fa-brands fa-whatsapp green"></i> Whatsapp</a> 
                            <!-- share facebook -->
                            <a href="https://www.addtoany.com/add_to/facebook?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femptables.php&amp;linkname=" target="_blank" style="text-decoration:none; margin-left:15px;" > 
                                  <i class="fa-brands fa-facebook"></i> Facebook</a>

                        </div>
                       </div>

                       <a href="http://localhost/star-admin/template/notes.php" class="btn btn-otline-dark" target="_blank">
                        <i class="fa fa-file-text"></i>Notepad</a>   

                      <a href="" class="btn btn-otline-dark" onclick="window.print()"><i class="icon-printer"></i> Print</a>
                      <a href="http://localhost/star-admin/template/emptables.php?path=emptables.pdf" download class="btn btn-primary text-white me-0">
                        <i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
              
                <div class="tab-content tab-content-basic" >
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                    
                      <div class="col-sm-12">
                        
                                   <!-- single active status message -->
               <?php if(isset($_SESSION['show'])) 
                {
               ?>
               <div class="alert alert-success alert-dismissible fade show fs-5">
                  <strong>Success!</strong> <?php echo $_SESSION['show']; ?>
                  <button type="button" class="btn-close" data-dismiss="alert"></button>
              </div>
               
              <?
              unset($_SESSION['show']);
            } 
            ?>

          <!-- single inactive status message -->
          <?php if(isset($_SESSION['showin'])) 
          {
            ?>
            <div class="alert alert-warning alert-dismissible fade show  fs-5">
                  <strong>Warning!</strong><?php  echo $_SESSION['showin']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['showin']);
          }
          
          ?>
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                       <!-- employee count -->
                          <div class="card col-2 " >
                          <div class="card-body pb-4 emp">
                          <i class="mdi mdi-account-multiple fs-1 text-black" style="margin-left:10px;"></i> 
                            <p class="card-title fs-5">Total Employees </p>
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
                             <a href="http://localhost/star-admin/template/pages/samples/showemployees.php" style="text-decoration:none;" class="li1" target="_blank">More Info</a>
                          </div>
                          </div>
                            <!-- active employee count -->
                            <div class="card col-2 act">
                          <div class="card-body pb-4">  
                          <i class="mdi mdi-account-plus fs-1 text-black" style="margin-left:10px;"></i>                           
                            <p class="card-title fs-5">Active Employee</p>
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
                            <a href="http://localhost/star-admin/template/pages/samples/showactiveemp.php" style="text-decoration:none;" class="li2" target="_blank">More Info</a>
                          </div>
                          </div>
                      <!-- inactive employee count -->
                      <div class="card col-2 inact">
                          <div class="card-body pb-4">     
                          <i class="mdi mdi-account-minus fs-1 text-black" style="margin-left:10px;"></i>                         
                             <p class="card-title fs-5">Inactive Employee</p>
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
                         <a href="http://localhost/star-admin/template/pages/samples/showinactiveemp.php" style="text-decoration:none;" class="li2" target="_blank">More Info</a> 
                          </div>
                          </div>
                          <!-- delete employee count -->
                          <!-- <div class="d-none d-md-block"> -->
                          <div class="card col-2 dlt">
                          <div class="card-body pb-4">  
                          <i class="mdi mdi-account-remove fs-1 text-black" style="margin-left:10px;"></i> 
                            <p class="card-title fs-5">Delete Employee</p>
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
                                   <a href="http://localhost/star-admin/template/pages/samples/showdeleteemp.php" style="text-decoration:none;" class="li2" target="_blank">More Info</a>
                                   </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <style>
                          body{
                            font-family: Verdana, Arial, sans-serif;
                          }   
                          p{
                               font-size:20px;
                           } 
                           
                           #inactive{
                             font-size:16px;
                             padding: 4px 10px 4px 10px;
                           }
                         
                          #text {
                              margin-left: 1140px;
                           }
                          
                           #adduser{
                              margin-left:1%;          
                           }
                           .emp{
                               background-color: lightblue;
                               border-radius:15px;
                               width:130%;
                               
                           }
                           .act{
                               background-color: #70cac1;
                               border-radius:15px;
                               width:23%;
                               left:50px;
                           }
                           .inact{
                               background-color: #FFD580;
                               border-radius:15px;
                               width:23%;
                               left:20px;
                           }
                           .dlt{
                               background-color: #b298e1;
                               border-radius:15px;
                               width:22%;
                               right:10px;
                           }
                         .li1{
                             margin-left:100px;
                             color:black;
                         }
                         .li2{
                             margin-left:120px;
                             color:black;
                         }
                       </style>
                       
                   
                  <!-- add employee -->
                  <a href="http://localhost/star-admin/template/pages/samples/employeeadd.php" target="_blank">
                        <button type="submit" name="adduser" id="adduser" class="btn btn-primary text-white mdi mdi-account-plus"> Addemployee</button></a> 

                       <!-- change status -->             
                       <button type="submit" onclick="return changestatus()" name="statusbtn" id="text" class="btn btn-primary me-3 text-white check">Change Status</button>

                       <!-- delete status -->
                       <button type="submit" onclick="return multipledelete()" name="statusbtn1" id="txt1" class="btn btn-danger me-3 text-white">Delete</button>


                <!-- update successfully message -->
                       <?php if(isset($_SESSION['message'])) 
                       {
                         ?>
                       <div class="alert alert-success alert-dismissible fade show  fs-5">
                              <strong>Success!</strong><?php  echo $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                   <?
                     unset($_SESSION['message']);
                  }
                   ?>
                      

                    <!-- data insert message -->
             <?php if(isset($_SESSION['success'])) 
          {
            ?>
            <div class="alert alert-success alert-dismissible fade show fs-5">
                  <strong>success!</strong><?php echo $result['fname']; ?><?php echo $result['lname']; ?> <?php  echo $_SESSION['success']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['success']);
          }
          
          ?>
           <div class="col-lg grid-margin stretch-card">
              <div class="card">
                <div class="card-body" >
                   
        <!-- employee data -->
        <form action="" method="post">

        <!-- <table class="table " id="example" > -->
        <table id="table" class="table table-striped table-bordered" style="width:100%"> 
        <thead>        
         <tr>
           <th></th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Age</th>
           <th>Gender</th>
           <th>Email</th>
           <!-- <th>Image</th> -->
           <th>Status</th>
           <th>Action</th>   
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

            <!-- <input type="hidden" class="id" value=<?php echo $row['id'];?>> -->

            <td class="fs-5" class="name"><?php echo $row['fname'];?></td>
            <td class="fs-5"><?php echo $row['lname'];?></td>
            <td class="fs-5"><?php echo $row['age'];?></td>
            <td class="fs-5"><?php echo $row['gender'];?></td>
            <td class="fs-5"><?php echo $row['email'];?></td>
            <!-- <td class="fs-5"><?php echo $row['image'];?></td> -->

          
            <!-- change message -->
            <td >
                
               <?php if($row['status']=='Active')
                {
                  echo '<p style=color:green; class="mdi mdi-check fs-4 text-center"></p>';
                }
                else if($row['status']=='Inactive')
                {
                  echo '<p style=color:red; class="mdi mdi-close fs-4 text-center"></p>';
                }
                else 
                {
                  echo '<p  style=color:blue; class="mdi mdi-close-box fs-4 text-center"></p>';
                }
              ?> 
              
            </td>
            <!-- change buttons -->
            <td >
               <?php if($row['status']=='Inactive')
                {  
                 ?>
                 <!-- <button type="submit" class="btn btn-success btn-rounded btn-icon ml-5" onclick="return activestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="active" id="active">
                 <i class="fs-5">Active</i></button> -->
                 <button type="submit"  class="btn btn-success btn-rounded pt-2 pb-2 fs-5 btn-icon activebtn" id="activests" name="activests" value=<?=$row['id'];?>> 
                  Active</button>
                  <!-- <button type="submit" onclick="active(<?php echo $id ?>)" id="active" class="btn btn-success btn-rounded pt-2 pb-2 fs-5 btn-icon">Active</button> -->
                 <?php
                }
                
                else if($row['status']!= 'Deleted')
                {
                  ?>
                 <!-- <button type="submit"  class="btn btn-danger btn-rounded btn-icon ml-5 " onclick="return inactivestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="inactive" id="inactive">
                 <i class="fs-5">Inactive</i></button> -->
                 <button type="submit"  class="btn btn-danger btn-rounded pt-2 pb-2 fs-5 btn-icon inactivebtn" id="inactivests" name="inactivests" value=<?=$row['id'];?>> 
                  Inactive</button>
                  <!-- <button type="submit" onclick="inactive(<?php echo $id ?>)" id="inactive" class="btn btn-danger btn-rounded pt-2 pb-2 fs-5 btn-icon">Inactive</button> -->
                 <?php
                 }
                 
              ?>
              <!-- view button -->
                <?php if($row['status']!= 'Deleted')
               {
                ?>
                <a href="http://localhost/star-admin/template/viewemployee.php?id=<?=$row['id'];?>" class="btn btn-info btn-rounded btn-icon" target="_blank">
                <i class="fs-5">View</i></a>
                <?php
               }
               ?>  
                  <!--edit button  -->
               <?php if($row['status']!= 'Deleted')
               {
                ?>
                <a href="http://localhost/star-admin/template/editemployee.php?id=<?=$row['id'];?>" class="btn btn-warning btn-rounded btn-icon" target="_blank">
                <i class="fs-5">Edit</i></a>
                <?php
               }
               ?>  
                 <!--delete button -->
              <?php if($row['status']!='Deleted')
              {
                 ?>
                 <!-- <button type="submit"  class="btn btn-danger btn-rounded btn-icon confirm"  onclick="return singledelete('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="delete" id="delete">
                 <i class="fs-5">Delete</i></button>  -->

                 <!-- <a href="" class="btn btn-danger btn-rounded btn-icon confirm " data-toggle="modal" data-target="#exampleModal" name="delete" id="delete"> 
                  <i class="fs-5" >Delete</i></a> -->
                  <button type="submit"  class="btn btn-danger btn-rounded pt-2 pb-2 fs-5 btn-icon confirmbtn" id="singledelete" name="singledelete" value=<?=$row['id']?>> 
                  Delete </button>
                 <?php
              } 
                 ?>       
               <?php if($row['status']!= 'Deleted')
               {
                ?>
            <a href="http://localhost/star-admin/template/qrcode.php?id=<?=$row['id'];?>" class="btn btn-primary btn-rounded btn-icon text-white" target="_blank">
            <i class="fs-5">qrcode</i></a>
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
            </div>
         </div>
      </div>
  </div>               
   <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <!-- <script src="js/jquery.confirmModal.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  
  <!--active status  -->
         <script>
               $(document).ready(function(){
                 $('.activebtn').click(function (e){
          
                  e.preventDefault();
                   var id = $(this).val();
                   var status = $(this).val();


                   swal({
                       title: "Are you sure you want active?",
                       icon: "warning",
                       buttons: true,
                       dangerMode: true,
                     })
                   .then((willDelete) => {
                     if (willDelete) {
                          $.ajax({
                              method: "POST",
                              url: "sactive.php",
                              data: {
                              activests :'activests',
                              id:id,
                              status:status,
                           },
                    success: function (response) {
                      if(response){
                           swal("success!", "succesfully active!", "success");
                          //  $('#etable').load(location.href + "#etable");
                          location.reload();
                        }
                        else{
                          swal("warning!", "something error!", "warning");
                          // window.location(reload);
                         // print_r(response);
                       }
                     }
           
                  });
                } 
            });
        });
      })
    </script>
          <!-- inactive status -->
          <!-- <script>
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
              }
              // window.location.reload();
           }   
         </script> -->

         <script>
               $(document).ready(function(){
                 $('.inactivebtn').click(function (e){
          
                  e.preventDefault();

                   var id = $(this).val();
                  //  var status = $(this).val();

                   swal({
                       title: "Are you sure you want inactive?",
                       icon: "warning",
                       buttons: true,
                       dangerMode: true,
                     })
                   .then((willDelete) => {
                     if (willDelete) {
                          $.ajax({
                              method: "POST",
                              url: "sinactive.php",
                              data: {
                              inactivests :'inactivests',
                              id:id,
                              // status:status,
                           },
                    success: function (response) {
                      if(response){
                           swal("success!", "succesfully inactive!", "success");
                          //  $('#etable').load(location.href + "#etable");
                          location.reload();
                        }
                        else{
                          swal("warning!", "something error!", "warning");
                          // window.location(reload);
                         // print_r(response);
                       }
                     }
           
                  });
                } 
            });
        });
      })
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

             

              // if (confirm('Are you sure you want to change status?')) {
               
               var request = new XMLHttpRequest();
               request.open("POST", "changestatus.php");
               request.send(formData);
                window.location.reload();
            }
    // }
     </script>

          <!-- singledelete status -->
         <script>
               $(document).ready(function(){
                 $('.confirmbtn').click(function (e){
          
                  e.preventDefault();
                   var id = $(this).val();

                   swal({
                       title: "Are you sure?",
                       text: "Once deleted, you will not be able to recover",
                       icon: "warning",
                       buttons: true,
                       dangerMode: true,
                     })
                   .then((willDelete) => {
                     if (willDelete) {
                          $.ajax({
                              method: "POST",
                              url: "singledelete.php",
                              data: {
                              singledelete :'singledelete',
                              id:id,
                           },
                    success: function (response) {
                      if(response){
                           swal("success!", "succesfully deleted!", "success");
                           $('#etable').load(location.href + "#etable");
                          // window.location(reload);
                        }
                        else{
                          swal("warning!", "something error!", "warning");
                          // window.location(reload);
                         // print_r(response);
                       }
                     }
           
                  });
                } 
            });
        });
      })
    </script>

         <!-- multiple delete -->
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

              // if (confirm('Are you sure you want to delete status?')) {
    
               var request = new XMLHttpRequest();
               request.open("POST", "multipledelete.php");
               request.send(formData);
               //  alert('Do you want to change status');
                window.location.reload();
            }
      //  }
     </script>
  
  <!-- plugins:js  sidebar table -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <!-- side bar hover -->
  <script src="js/template.js"></script> 

  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

      <!-- data tables -->
      <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>
    
<!-- datatables buttons plugin -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
   <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
   <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- paginaton work -->

   <script>
$(document).ready(function() {
   $('#table').dataTable({
      dom: 'Bfrtip',
         lengthMenu: [
            [ 5,10, 25, 50, 100, -1 ],
            [ '5 rows','10 rows', '25 rows', '50 rows', '100 rows', 'Show all' ]
         ],
         buttons: [
            'pageLength',
            'copy',
            {
               extend: 'csv',
               title: 'Summary'
            },
            {
               extend: 'excel',
               title: 'Summary'
            },
            {
               extend: 'pdf',
               title: 'emptables'
            },
            'print'
         ]
   });
});
</script>
     <!-- <script>
       $(document).ready(function () {
          $('#table').DataTable({
            lengthMenu: [
            [5,10, 25, 50,100, -1],
            [5,10, 25, 50,100, 'All'],
        ],
              
          });
    });
   </script> -->

  
  
</body>

</html>
