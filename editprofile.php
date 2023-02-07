<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>employee profile</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'> -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300,400'>
<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
            <!-- <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> -->
            <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
              <!-- <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> -->
              <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">

              <p class="mb-1 mt-3 font-weight-semibold"> <?php echo $result['fname']; ?><?php echo  $result['lname']; ?> </p>
                <p class="fw-light text-muted mb-0"><?php echo $email;?></p>
              </div>
              
              <a href="http://localhost/star-admin/template/employeeprofile.php" name="update" target="_blank" class="dropdown-item">
                <i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
              
                <a class="dropdown-item" href="http://localhost/star-admin/template/uploadprofile.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-briefcase-upload text-primary me-2"></i>upload profile</a>
            <!--               
                <a class="dropdown-item" href="http://localhost/star-admin/template/changeprofile.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-account-box text-primary me-2"></i>change profile</a> -->
              
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
          <div class="color-tiles mx-0 px-4">
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
            <div class="add-items d-flex px-3 mb-0">
            
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
              
              </ul>
            </div>
        
          </div>
          <!-- To do section tab ends -->
         
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
          <li class="nav-item active">
            <a class="nav-link" href="">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Employee profile</span>
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
      <style> 
.text-from{
  float:right;
  margin-right: 530px;
  margin-top: -20px;
  
}
.to{
  /* background: red; */
  float:right;
  margin-right: -20.4%;
   /* margin-top: 20px; */
}

.class-input{
    width:85%;
    background-color: white;
    
}
.emp-pro{
  
    margin-top: -250px;
    margin-right: -690px;
    float: right;
    /* width: 30%; */
    /* border: darkred;
    border-radius: 2px; */
    padding-left: 1px;
    padding-right: 1px;
    padding-top: 1px;
    padding-bottom: 1px;
    /* border-style: groove; */
    
}
.emp-img{
  /* margin-left: 30px; */
 
    width:150px;
    height:180px;
}
.form-control {
    background: white;
}

#myTooltip{
margin-left: 7px;
margin-top: -58px;
}

.col-md-6 {
-ms-flex: 0 0 45%;
flex: 0 0 45%;
width: 55%;
}
.col-sm-2 {
-ms-flex: 0 0 16.666667%;
flex: 0 0 16.666667%;
max-width: 50%;
font-size:20px;

}

p{
font-size:20px;
}

</style>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <!-- update message -->
            <?php if(isset($_SESSION['message'])) 
                       {
                         ?>
                       <div class="alert alert-success alert-dismissible fade show fs-5">
                            <?php  echo $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                   <?
                     unset($_SESSION['message']);
                  }
                   ?>
                   <!-- error image upload -->
                   <?php if(isset($_SESSION['error'])) 
                       {
                         ?>
                       <div class="alert alert-danger alert-dismissible fade show fs-5">
                       <i class="fa-light fa-circle-exclamation"></i>
                       <?php  echo $_SESSION['error']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                   <?
                     unset($_SESSION['error']);
                  }
                   ?>

                   <!-- update password -->
            <?php if(isset($_SESSION['change'])) 
                       {
                         ?>
                       <div class="alert alert-success alert-dismissible fade show fs-5">
                              <?php  echo $_SESSION['change']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                   <?
                     unset($_SESSION['change']);
                  }
                   ?>
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                  <a href="http://localhost/star-admin/template/employeeprofile.php"style="text-decoration:none"><button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">View profile</button>
                  </a>
                </li>
                 <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Edit profile</button>
                 </li>
                 <li class="nav-item" role="presentation">
                 <a href="http://localhost/star-admin/template/changeprofile.php" style="text-decoration:none"><button class="nav-link" id="img-tab" data-bs-toggle="tab" data-bs-target="#img" type="button" role="tab" aria-controls="img" aria-selected="false">Change profile</button>
                  </a>
                </li>
                 <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="img-tab" data-bs-toggle="tab" data-bs-target="#img" type="button" role="tab" aria-controls="img" aria-selected="false">Change profile</button>
                 </li> -->
               </ul>

                  <div>
                    <div class="btn-wrapper">
                    <div class="btn-group">
                   <button type="button" class="btn btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="icon-share "></i> share</button>
                 </button>
                 
                 <div class="dropdown-menu">
                       <!-- copy link button -->
                       <a class="dropdown-item" href="https://www.addtoany.com/add_to/copy_link?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femployeeprofile.php&amp;linkname=" target="_blank">
                        <i class="fa-regular fa-copy"></i> Copy Link</a>

                      <!-- save pages -->
                       <!-- <a class="dropdown-item" href="" save>
                        <i class="fa-regular fa-file-export"></i> Save pages us</a> -->

                        <div class="dropdown-divider">share link into </div>
                        <!-- share email -->
                         <a class="dropdown-item" href="https://www.addtoany.com/add_to/email?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femployeeprofile.php&amp;linkname="><i class="fa-solid fa-envelope"></i> Email</a>
                          <!-- share whatsapp -->
                         <a class="dropdown-item" href="https://www.addtoany.com/add_to/whatsapp?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femployeeprofile.php&amp;linkname=" target="_blank" >
                            <i class="fa-brands fa-whatsapp green"></i> Whatsapp</a> 
                            <!-- share facebook -->
                            <a href="https://www.addtoany.com/add_to/facebook?linkurl=http%3A%2F%2Flocalhost%2Fstar-admin%2Ftemplate%2Femployeeprofile.php&amp;linkname=" target="_blank" style="text-decoration:none; margin-left:15px;" > 
                                  <i class="fa-brands fa-facebook"></i> Facebook</a>

                        </div>
                   </div>
                      <a href="" class="btn btn-otline-dark" onclick="window.print()"><i class="icon-printer"></i> Print</a>
                      
                      <a href="http://localhost/star-admin/template/employeeprofile.php?path=employeeprofile.pdf" download class="btn btn-primary text-white me-0">
                        <i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>

              <!-- view page -->
        <!-- <div class="tab-content" id="myTabContent"> -->
  <!-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> -->
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
          $row = mysqli_fetch_assoc($data);
    ?>

<!-- <div class="content-wrapper container-fluid" >

<div class="col-12">
                  <div class="card card-primary" style="border-radius:20px;">
                    <div class="card-body bg-white" style="border-radius:25px;">
                    <h3 class="card-title bg-primary p-3 text-white">Employee Info</h3>
                    
                
                    
                <div class="card-body" id="html-template">
                  <div class="row">

                      <div class="col-md-6">
                         <div class="form-group">
                         <label for="exampleInputBorder" class="col-sm-2 col-form-label fs-5">First Name</label>
                         <div class="col-sm-10">
                         <p style="background-color: white; border-bottom:1px solid grey;" class="pb-2" id="exampleInputBorder"> <?php echo $row['fname']; ?></p>
                         </div>
                         </div>


                         <div class="form-group">
                          <label for="exampleInputBorderWidth2" id="name" class="col-sm-2 col-form-label fs-5">Age</label>
                          <div class="col-sm-10">
                          <p style="background-color: white; border-bottom:1px solid grey;"  class="pb-2" id="exampleInputBorderWidth2"><?php echo $row['age']; ?></p>
                         </div>
                         </div>
                        
                         <div class="emp-pro">
                          <img class="img"  src="http://localhost/star-admin/template/img/<?php echo $row['image']; ?>">
                         </div>

                         <div class="form-group">
                         <label for="exampleInputRounded0" class="col-sm-2 col-form-label fs-5">Email ID</label>
                         <div class="col-sm-10">
                         <p style="background-color: white; border-bottom:1px solid grey;"  class="pb-2"  id="exampleInputRounded0"><?php echo $row['email']; ?></p>
                         </div>
                         </div>
                      </div>


                      <div class="col-md-6">
                         <div class="form-group">
                         <label for="exampleInputRounded0" class="col-sm-2 col-form-label fs-5">Last Name</label>
                         <div class="col-sm-10">
                         <p style="background-color: white; border-bottom:1px solid grey; width:250px;"  class="pb-2" id="exampleInputRounded0"><?php echo $row['lname']; ?></p>
                         </div>  
                         </div>

                         <div class="col-md-6" style="max-width:none;">
                         <div class="form-group">
                         <label for="exampleInputRounded0" class="col-sm-2 col-form-label fs-5" style="width:1500px;">Gender</label>
                         <div class="col-sm-10">
                         <p style="background-color: white; border-bottom:1px solid grey; width:250px;"  class="pb-2" id="exampleInputRounded0"><?php echo $row['gender']; ?></p>
                         </div>  
                         </div>

                         <div class="form-group ">
                         <label for="exampleInputRounded0" class="col-sm-2 col-form-label fs-5">Status</label>
                         <div class="col-sm-10">
                         <p style="background-color: white; border-bottom:1px solid grey;  width:250px;"  class="pb-2"  id="exampleInputRounded0"><?php echo $row['status']; ?></p>
                         </div>
                         </div>
                    </div>

                </div>

              </div> -->
            <!-- </div>
          </div>
</div>
   </div>
   </div>
   </div> -->
   <!-- view page closed -->

   <!-- edit page -->
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
          $user = mysqli_fetch_assoc($data);
    ?>
    <style>
      .error{
           color:red;
  }
    </style>
<!-- <div class="tab-pane fade" id="profile"  role="tabpanel" aria-labelledby="profile-tab"> -->
  <div class="content-wrapper container-fluid" >
          <!-- <div class="row"> -->
            <div class="col-lg " >
              <div class="card col-lg" style="border-radius:25px;" >
                <div class="card-body"> 
                <h4 class="card-header bg-white p-2 ">Edit profile</h4>
    
                   <form action="updatecode.php" method="post" id="edit_form">
 
                        <input type="hidden" name="id" value=<?=$user['id'];?>>
                          <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                <label for="" class="col-sm-4 col-form-label fs-5">First Name</label>
                                   <div class="col-sm-10">
                                     <input type="text" style="background-color: white;" name="fname" class="pb-2 fs-5 form-control" value=<?= $user['fname']; ?>>
                                   </div>
                               </div>
 
 
                                   <div class="form-group">
                                      <label for="" id="name" class="col-sm-2 col-form-label fs-5">Age</label>
                                        <div class="col-sm-10">
                                           <input type="text" style="background-color: white; " name="age" class="pb-2 fs-5 form-control"  value=<?= $user['age']; ?>>
                                         </div>
                                    </div>
            
            
                                    <div class="form-group">
                                      <label for="" class="col-sm-2 col-form-label fs-5">Email ID</label>
                                        <div class="col-sm-10">
                                           <input type="text" style="background-color: white;" name="email" class="pb-3 fs-5 form-control"  value=<?= $user['email']; ?>>
                                         </div>
                                      </div>
                            </div>
 
 
                                 <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="" class="col-sm-2 col-form-label fs-5">Last Name</label>
                                         <div class="col-sm-10">
                                           <input type="text" style="background-color: white; width:500px;" name="lname" class="pb-2 fs-5 form-control"  value=<?= $user['lname']; ?>>
                                          </div>  
                                      </div>
 
                                      <div class="col-md-8" style="max-width:none;">
                                       <div class="form-group">
                                         <label for="" class="col-sm-2 col-form-label fs-5" style="width:1500px;">Gender</label>
                                          <div class="col-sm-10"> 
                                             <input type="text" style="background-color: white;  width:500px;" name="gender" class="pb-2 fs-5 form-control"  value=<?= $user['gender']; ?>>
                                           </div>  
                                        </div>
 
                                        <div class="form-group ">
                                           <label for="" class="col-sm-2 col-form-label fs-5">Status</label>
                                            <div class="col-sm-10">
                                              <input type="text" style="background-color: white;  width:500px;" name="status" class="pb-2 fs-5 form-control" value=<?= $user['status']; ?>>
                                             </div>
                                     </div>
                                </div>
                                    <div class="mt-5" style="margin-left:-600px; ">
                                      <button type="submit" name="update_user" class="btn btn-primary  btn-lg text-white" style="width:100px;">update</button>
                                   </div>
                             </form>                 
                              </div>
                         </div>   
                    </div>   
              </div>
</div>
  <!-- edit page closed -->
  <style>
  .abc{
    margin-left:500px;
    padding : 50px 0 0 10px;
  }
  #image-error{
    margin-left:500px;
  }
</style>

 <!-- change profile  -->
<div class="tab-pane fade" id="img" role="tabpanel" aria-labelledby="img-tab">

<!-- <div class="content-wrapper container-fluid" >
              <div class="card w-100 h-100" style="border-radius:25px; width: 80rem; " >
                <div class="card-body "> 
                  <h5 class="card-title bg-primary fs-4 p-3 text-white">Change profile</h5> 
                  
                    <form action="updateprofile.php" method="post" id="upload_image">
                    <img  class="img-xs img-fluid rounded-circle w-auto h-100 mt-5 abc" src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">
                    <h4 class="mt-2" style="margin-left:570px;"><?php echo $result['fname'];?><?php echo $result['lname'];?></h4>
               
                     <input type="hidden" name="email" id="email" value="<?php echo $email;?>">   
                     <input type="file" name="image" class="form-control w-50 mt-4" style="margin-left:500px;"><br><br>
                    
                     <input type="submit" name="submit"  value="Update" style="margin-left:550px;" class="btn btn-primary btn-lg text-white updatebtn">

                    </form>
              </div>
          </div>
       </div> -->
  </div>
<!-- tabination closed -->
 
  <!-- plugins:js -->
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
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>
    $(document).ready (function () {  
  
  $('form[id="edit_form"]').validate({  
    rules: {  
      fname: 'required',  
     
      lname: 'required', 
    
      age:{
        required: true,
        number:true,
      },
      gender:'required',
      email: {  
        required: true,  
        email: true,  
      },  
      status:'required',
      
    },  
    messages: {  

      fname: 'please enter first name',  
      lname: 'please enter last name',  
      age:'please enter your age',
      gender: 'please enter male or female',
      email: 'please enter a valid email',  
      status: 'please field status',
    },  
    submitHandler: function(form) {  
      form.submit();  
    } 
   
  });  
 });  
</script>

<script>
    $(document).ready (function () {  
  
  $('form[id="upload_image"]').validate({  
    rules: {  
      image: 'required',      
    },  
    messages: {  

      image: 'please select image',  
    },  
    submitHandler: function(form) {  
      form.submit();  
    } 
   
  });  
 });  
</script>

</body>

</html>

