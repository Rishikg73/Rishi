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

</head>
<body>
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
          <a class="navbar-brand brand-logo" href="index.html">
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
            <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
              <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">
                <p class="mb-1 mt-3 font-weight-semibold"> <?php echo $result['fname']; ?><?php echo  $result['lname']; ?> </p>
                <p class="fw-light text-muted mb-0"><?php echo $email;?></p>
              </div>
              <a href="http://localhost/star-admin/template/employeeprofile.php" name="update" target="_blank" class="dropdown-item">
                <i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
              <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a> -->
              <!-- <a href="http://localhost/formproj/star-admin/empedit.php" target="blank" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a> -->
              <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a> -->
              <!-- logout button -->
              <form action="http://localhost/star-admin/template/pages/samples/emplogout.php" method="post">
              <button type="submit" name="logout_btn" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</button>
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
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
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
                <li class="nav-item"> <a class="nav-link" href="http://localhost/star-admin/template/emptables.php" target="_blank">Employees</a></li>
              </ul>
            </div>
          </li>
<!--           
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/star-admin/template/pages/samples/emplogin.php"> Login </a></li>
              </ul>
            </div>
          </li>
          -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link"  href="http://localhost/star-admin/template/emptables.php" role="tab" >All</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active ps-0"  href="http://localhost/star-admin/template/empcards.php" role="tab" >employee cards</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  href="http://localhost/star-admin/template/tableemp.php" role="tab" >employee tables</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="http://localhost/star-admin/template/empdetails.php" role="tab" >More details</a>
                    </li>
                  </ul>
                  <!-- search employee -->
                      <!-- <form method="post" class="">
                          <input type="search" name="search" id="search" placeholder="Type here to search...">
                          <input type="submit" name="search_filter" value="Search" class="btn btn-primary mt-2 text-white" >
                        </form> -->
                  <div>
                    <div class="btn-wrapper">
                      <button class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> share</button>
                      
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic" >
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
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
                              margin-left: 1160px;
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
                       
     <!-- partial:partials/_footer.html -->
     
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
    
       
     

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
                   
</body>

</html>
