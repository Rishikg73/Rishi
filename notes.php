<!DOCTYPE html>
<!-- Code By Webdevtrick ( https://webdevtrick.com ) -->
<html lang="en" >
<head>
    <?php
    session_start();
    ?>
  <meta charset="UTF-8">
  <title>notes</title>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <!-- <link rel="stylesheet" href="notepad.css"> -->
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
              
                <a class="dropdown-item" href="http://localhost/star-admin/template/changeprofile.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-account-box text-primary me-2"></i>change profile</a>
              
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
              <i class="mdi mdi-note-text menu-icon"></i>
              <span class="menu-title">Note pad</span>
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
        /* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background: #88ABFF;
}
::selection{
  color: #fff;
  background: #618cf8;
}
.wrapper{
  margin: 50px;
  display: grid;
  gap: 25px;
  grid-template-columns: repeat(auto-fill, 265px);
}
.wrapper li{
  height: 250px;
  list-style: none;
  border-radius: 5px;
  padding: 15px 20px 20px;
  background: #fff;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
}
.add-box, .icon, .bottom-content, 
.popup, header, .settings .menu li{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.add-box{
  cursor: pointer;
  flex-direction: column;
  justify-content: center;
}
.add-box .icon{
  height: 78px;
  width: 78px;
  color: #88ABFF;
  font-size: 40px;
  border-radius: 50%;
  justify-content: center;
  border: 2px dashed #88ABFF;
}
.add-box p{
  color: #88ABFF;
  font-weight: 500;
  margin-top: 20px;
}
.note{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.note .details{
  max-height: 165px;
  overflow-y: auto;
}
.note .details::-webkit-scrollbar,
.popup textarea::-webkit-scrollbar{
  width: 0;
}
.note .details:hover::-webkit-scrollbar,
.popup textarea:hover::-webkit-scrollbar{
  width: 5px;
}
.note .details:hover::-webkit-scrollbar-track,
.popup textarea:hover::-webkit-scrollbar-track{
  background: #f1f1f1;
  border-radius: 25px;
}
.note .details:hover::-webkit-scrollbar-thumb,
.popup textarea:hover::-webkit-scrollbar-thumb{
  background: #e6e6e6;
  border-radius: 25px;
}
.note p{
  font-size: 22px;
  font-weight: 500;
}
.note span{
  display: block;
  color: black;
  font-size: 16px;
  margin-top: 5px;
}
.note .bottom-content{
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
.bottom-content span{
  color: #000000;
  font-size: 14px;
}
.bottom-content .settings{
  position: relative;
}
.bottom-content .settings i{
  color: black;
  cursor: pointer;
  font-size: 15px;
}
.settings .menu{
  z-index: 1;
  bottom: 0;
  right: -5px;
  padding: 5px 0;
  background: #fff;
  position: absolute;
  border-radius: 4px;
  transform: scale(0);
  transform-origin: bottom right;
  box-shadow: 0 0 6px rgba(0,0,0,0.15);
  transition: transform 0.2s ease;
}
.settings.show .menu{
  transform: scale(1);
}
.settings .menu li{
  height: 25px;
  font-size: 16px;
  margin-bottom: 2px;
  padding: 17px 15px;
  cursor: pointer;
  box-shadow: none;
  border-radius: 0;
  justify-content: flex-start;
}
.menu li:last-child{
  margin-bottom: 0;
}
.menu li:hover{
  background: #f5f5f5;
}
.menu li i{
  padding-right: 8px;
}

.popup-box{
  position: fixed;
  top: 0;
  left: 0;
  z-index: 2;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.4);
}
.popup-box .popup{
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 3;
  width: 100%;
  max-width: 400px;
  justify-content: center;
  transform: translate(-50%, -50%) scale(0.95);
}
.popup-box, .popup{
  opacity: 0;
  pointer-events: none;
  transition: all 0.25s ease;
}
.popup-box.show, .popup-box.show .popup{
  opacity: 1;
  pointer-events: auto;
}
.popup-box.show .popup{
  transform: translate(-50%, -50%) scale(1);
}
.popup .content{
  border-radius: 5px;
  background: #fff;
  width: calc(100% - 15px);
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
}
.content header{
  padding: 15px 25px;
  border-bottom: 1px solid #ccc;
}
.content header p{
  font-size: 20px;
  font-weight: 500;
}
.content header i{
  color: #8b8989;
  cursor: pointer;
  font-size: 23px;
}
.content form{
  margin: 15px 25px 35px;
}
.content form .row{
  margin-bottom: 20px;
}
form .row label{
  font-size: 18px;
  display: block;
  margin-bottom: 6px;
}
form :where(input, textarea){
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 17px;
    padding: 0 15px;
    border-radius: 4px;
    border: 1px solid black;
}
form :where(input, textarea):focus{
  box-shadow: 0 2px 4px rgba(0,0,0,0);
}
form .row textarea{
  height: 150px;
  resize: none;
  padding: 8px 15px;
}
form button{
  width: 100%;
  height: 50px;
  color: #fff;
  outline: none;
  border: none;
  cursor: pointer;
  font-size: 17px;
  border-radius: 4px;
  background: #6A93F8;
}

@media (max-width: 660px){
  .wrapper{
    margin: 15px;
    gap: 15px;
    grid-template-columns: repeat(auto-fill, 100%);
  }
  .popup-box .popup{
    max-width: calc(100% - 15px);
  }
  .bottom-content .settings i{
    font-size: 17px;
  }
}
    </style>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
               
    <div class="popup-box">
      <div class="popup">
        <div class="content">
          <header>
            <p></p>
            <i class="uil uil-times" ></i>
          </header>
          <form action="#">
            <div class="row title">
              <label>Title</label>
              <input type="text" spellcheck="false">
            </div>
            <div class="row description">
              <label>Description</label>
              <textarea spellcheck="false"></textarea>
            </div>
            <button></button>
          </form>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <li class="add-box">
        <div class="icon"><i class="uil uil-plus"></i></div>
        <p>Add new note</p>
      </li>
    </div>

    <script src="notepad.js"></script>
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

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> -->

</body>
</html>