<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>employee </title>
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

  <!-- <link rel="stylesheet" href="spin.css"></link> -->
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body >
 <div class="level">

  <div class="wrapper">
 <!-- 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="http://localhost/star-admin/template/images/favicon.png" alt="tar-admin" height="10" width="10">
  </div> -->
  
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
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
          <a class="navbar-brand brand-logo" href="#">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="#">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <!-- clock css -->
      <style>
       body {
         font-family: "Work Sans", sans-serif;
         }
       .time {
           background: rgb(12, 12, 12);
           color: #fff;
           text-align: center;
           width:180px;
           border-radius:20px;
           
        }
        .hms {
           font-size: 15px;
           font-weight: 100;
        }
       .ampm {
          font-size: 15px;
        }
       .date {
         font-size: 15px;
      }
  </style>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome<span class="text-black fw-bold"> <?php echo $result['fname']; ?><?php echo  $result['lname']; ?> </span></h1>
          </li>
         
          <!--time html code -->
          <li style="margin-left:1000px;">
          <div class="time">
        <span class="hms"></span>
        <span class="ampm"></span>
        <br>
        <span class="date"></span>
      </div>
     <!-- app end -->
<script>
 function updateTime() {
  var dateInfo = new Date();

  /* time */
  var hr,
    _min = (dateInfo.getMinutes() < 10) ? "0" + dateInfo.getMinutes() : dateInfo.getMinutes(),
    sec = (dateInfo.getSeconds() < 10) ? "0" + dateInfo.getSeconds() : dateInfo.getSeconds(),
    ampm = (dateInfo.getHours() >= 12) ? "PM" : "AM";

  // replace 0 with 12 at midnight, subtract 12 from hour if 13–23
  if (dateInfo.getHours() == 0) {
    hr = 12;
  } else if (dateInfo.getHours() > 12) {
    hr = dateInfo.getHours() - 12;
  } else {
    hr = dateInfo.getHours();
  }

  var currentTime = hr + ":" + _min + ":" + sec;

  // print time
  document.getElementsByClassName("hms")[0].innerHTML = currentTime;
  document.getElementsByClassName("ampm")[0].innerHTML = ampm;

  /* date */
  var dow = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    month = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ],
    day = dateInfo.getDate();

  // store date
  var currentDate = dow[dateInfo.getDay()] + ", " + month[dateInfo.getMonth()] + " " + day;

  document.getElementsByClassName("date")[0].innerHTML = currentDate;
};

// print time and date once, then update them every second
updateTime();
setInterval(function() {
  updateTime()
}, 1000);
</script>
          </li>
         <!-- ende time -->
              
        </ul>
       <ul class="navbar-nav ms-auto">
        
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> -->
              <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">

          </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <!-- <img class="img-md rounded-circle"  > -->
                <!-- <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image">                -->
                <img class="img-xs img-fluid rounded-circle w-auto " src="http://localhost/star-admin/template/img/<?php echo $result['image']; ?>">
                <br>
                  <!-- print name and email -->
                <p class="mb-1 mt-3 font-weight-semibold"> <?php echo $result['fname']; ?><?php echo  $result['lname']; ?> </p>
                <p class="fw-light text-muted mb-0"><?php echo $email;?></p>
              </div>
             
              <a href="http://localhost/star-admin/template/employeeprofile.php" name="update" target="_blank" class="dropdown-item">
                <i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
              
              <a class="dropdown-item" href="http://localhost/star-admin/template/uploadprofile.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-briefcase-upload text-primary me-2"></i>upload profile</a>

                <!-- <a class="dropdown-item" href="http://localhost/star-admin/template/changeprofile.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-account-box text-primary me-2"></i>change profile</a>
              -->
                <a class="dropdown-item" href="http://localhost/star-admin/template/changepass.php" target="_blank">
                <i class="dropdown-item-icon mdi mdi-account-key text-primary me-2"></i>change password</a>
                <!-- logout -->
                <form action="http://localhost/star-admin/template/pages/samples/emplogout.php" method="post">
              <button type="submit" name="logout_btn"  class="dropdown-item lgbtn">
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
                  <i class="mdi mdi-calculator"></i> Calculator</a>
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
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                    <!-- brightness css -->
                    <style>
                      /* box create */
                   .brightness-box{
                      width: 400px;
                      height: 60px;
                      background: #f9f9f9;
                      border-radius: 8px;
                      padding: 0 20px;
                      display: flex;
                      align-items: center;
                      justify-content: space-between;
                   }
                    /* align range icon*/
                    .brightness-box i{
                          margin: 0 10px;
                     }
                    /* range design */
                     #range{
                           width: 100%;
                          -webkit-appearance: none;
                           background: #0a85ff;
                           height: 3px;
                           outline: none;
                      }
                   /* range cursor change */
                   #range::-webkit-slider-thumb{
                     -webkit-appearance: none;
                      width: 22px;
                      height: 22px;
                      background: #333;
                      border-radius: 50%;
                      cursor: pointer;
                    }
                    </style>
                    <!-- brightness -->
                    <li style="">
                    <div class="aaaa">
                     <div class="brightness-box">
                           <i class="mdi mdi-weather-sunny"></i>
                           <input type="range" id="range" min="10" max="100" value="100">
                          <i class="mdi mdi-weather-sunny"></i>
                    </div>
                    </div>
                    <script>
                      rangeInput = document.getElementById('range');
                      level = document.getElementsByClassName('level')[0];

                      rangeInput.addEventListener("change",function(){
                      level.style.filter = "brightness(" + rangeInput.value + "%)";
                    });
                    </script>
                   </li>
                  
                
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>

                      <a href="http://localhost/star-admin/template/notes.php" class="btn btn-otline-dark" target="_blank">
                        <i class="mdi mdi-note-text"></i>Notepad</a>   

                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>

                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Bounce Rate</p>
                            <h3 class="rate-percentage">32.53%</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Page Views</p>
                            <h3 class="rate-percentage">7,682</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <!-- <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas> -->
                       <style>
                         /* Variables */
                         :root {
                          	--primary: #EA40A4;
	                          --business: #3a82ee;
	                          --personal: var(--primary);
                          	--light: #EEE;
	                          --grey: #888;
	                          --dark: #313154;
	                          --danger: #ff5b57;

                           	--shadow: 0 1px 3px rgba(0, 0, 0, 0.1);

	                          --business-glow: 0px 0px 4px rgba(58, 130, 238, 0.75);
                          	--personal-glow: 0px 0px 4px rgba(234, 64, 164, 0.75);
                          }
                        /* End of Variables */

                         /* Resets */
/* * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'montserrat', sans-serif;
} */

                         input:not([type="radio"]):not([type="checkbox"]), button {
	                              appearance: none;
                              	border: none;
                               	outline: none;
                              	background: none;
	                              cursor: initial;
                         }
                        /* End of Resets */

/* body {
	background: var(--light);
	color: var(--dark);
} */

                         section {
	                         margin-top: 2rem;
	                         margin-bottom: 2rem;
                         	 padding-left: 1.5rem;
	                         padding-right: 1.5rem;
                       }

                       h3 {
                      	color: var(--dark);
	                      font-size: 1rem;
                       	font-weight: 400;
                      	margin-bottom: 0.5rem;
                     }

                      h4 {
                       	color: var(--grey);
                      	font-size: 0.875rem;
	                      font-weight: 700;
                      	margin-bottom: 0.5rem;
                     }

                     .greeting .title {
                        	display: flex;
                      }

                     .greeting .title input {
                         	margin-left: 0.5rem;
	                        flex: 1 1 0%;
	                        min-width: 0;
                      }

                     .greeting .title, 
                     .greeting .title input {
	                        color: var(--dark);
                         	font-size: 1.5rem;
                        	font-weight: 700;
                      }

                    .create-todo input[type="text"] {
	                         display: block;
                         	 width: 100%;
	                         font-size: 1.125rem;
                        	 padding: 1rem 1.5rem;
	                         color: var(--dark);
	                         background-color: #FFF;
	                         border-radius: 0.5rem;
	                         box-shadow: var(--shadow);
	                         margin-bottom: 1.5rem;
                     }

                    .create-todo .options {
	                          display: grid;
	                          grid-template-columns: repeat(2, 1fr);
	                          grid-gap: 1rem;
	                          margin-bottom: 1.5rem;
                     }

                    .create-todo .options label {
	                          display: flex;
                          	flex-direction: column;
	                          align-items: center;
                          	justify-content: center;
	                          background-color: #FFF;
	                          padding: 1.5rem;
	                          box-shadow: var(--shadow);
                          	border-radius: 0.5rem;
	                          cursor: pointer;
                     }

                    input[type="radio"],
                    input[type="checkbox"] {
                        	display: none;
                     }

                    .bubble { 
                      	display: flex;
                       	align-items: center;
                       	justify-content: center;
                      	width: 20px;
	                      height: 20px;
	                      border-radius: 999px;
	                      border: 2px solid var(--business);
                      	box-shadow: var(--business-glow);
                     }

                    .bubble.personal {
	                        border-color: var(--personal);
                         	box-shadow: var(--personal-glow);
                     }

                    .bubble::after {
	                         content: '';
	                         display: block;
	                         opacity: 0;
	                         width: 0px;
	                         height: 0px;
                         	 background-color: var(--business);
                        	 box-shadow: var(--business-glow);
                         	 border-radius: 999px;
	                         transition: 0.2s ease-in-out;
                       }

                    .bubble.personal::after {
                           	background-color: var(--personal);
	                          box-shadow: var(--personal-glow);
                     }

                    input:checked ~ .bubble::after {
                         	width: 10px;
	                        height: 10px;
	                        opacity: 1;
                     }

                   .create-todo .options label div {
                       	color: var(--dark);
                       	font-size: 1.125rem;
                       	margin-top: 1rem;
                     }

                  .create-todo input[type="submit"] {
	                      display: block;
                       	width: 100%;
	                      font-size: 1.125rem;
	                      padding: 1rem 1.5rem;
                       	color: #FFF;
                      	font-weight: 700;
	                      text-transform: uppercase;
                      	background-color: var(--primary);
	                      box-shadow: var(--personal-glow);
	                      border-radius: 0.5rem;
	                      cursor: pointer;
	                     transition: 0.2s ease-out;
                    }

                  .create-todo input[type="submit"]:hover {
	                      opacity: 0.75;
                    }

                  .todo-list .list {
                       	margin: 1rem 0;
                    }

                  .todo-list .todo-item {
	                       display: flex;
                       	 align-items: center;
	                       background-color: #FFF;
	                       padding: 1rem;
	                       border-radius: 0.5rem;
	                       box-shadow: var(--shadow);
	                       margin-bottom: 1rem;
                   }

                  .todo-item label {
	                        display: block;
	                        margin-right: 1rem;
	                        cursor: pointer;
                   }

                  .todo-item .todo-content {
	                     flex: 1 1 0%;
                   }

                  .todo-item .todo-content input {
	                     color: var(--dark);
	                     font-size: 1.125rem;
                    } 

                  .todo-item .actions {
	                      display: flex;
	                      align-items: center;
                   }

                  .todo-item .actions button {
	                     display: block;
                    	/* padding: 0.5rem; */
                      	border-radius: 0.25rem;
                      	color: #FFF;
	                      cursor: pointer;
	                     transition: 0.2s ease-in-out;
                      height:40px;
                       width:80px;
                   }

                   .todo-item .actions button:hover {
	                       opacity: 0.75;
                     }

                    .todo-item .actions .edit {
                         	margin-right: 0.5rem;
                         	background-color: var(--primary);
                     }

                    .todo-item .actions .delete {
	                         background-color: var(--danger);
                     }

                    .todo-item.done .todo-content input {
                        	text-decoration: line-through;
                         	color: var(--grey);
                      }
                     </style>
                       	<!-- <link rel="stylesheet" href="todo.css" /> -->
                               <!-- App Wrapper -->
	                         <main class="app">
	                      	<!-- Greeting -->
	                        	<section class="greeting">
	                        		<h2 class="title">
			                        	What's up, <input type="hidden" id="name" /><?php echo $result['fname'];?><?php echo $result['lname'];?>
		                        	</h2>
	                         	</section>
	                      	<!-- End of Greeting -->
		
		                        <!-- New Todo -->
		                        <section class="create-todo">
		                       	<!-- <h3>CREATE A TODO</h3> -->
		                          	<form id="new-todo-form">
			                          	<h4>What's on your todo?</h4>
			                	<input type="text" placeholder="e.g. Get some milk" name="content" id="content" />
				
				               <h4>Pick a category</h4>
			                    	<div class="options">
			                		<label>
					                  	<input type="radio" name="category" id="category1" value="business" /> 
					                    	<span class="bubble business"></span>
					                      	<div>Business</div>
					                </label>
				                 	<label>
					                	<input type="radio" name="category" id="category2" value="personal" />
					                   	<span class="bubble personal"></span>
						                  <div>Personal</div>
				                	</label>
				              </div>

				             <input type="submit" value="Add todo" />
		        	</form>
	  	</section>
		<!-- End of New Todo -->

		<!-- Todo List -->
		<section class="todo-list">
			<h3>TODO LIST</h3>
			<div class="list" id="todo-list"></div>
		</section>
		<!-- End of Todo List -->

	</main>
	<!-- End of App Wrapper -->
  <script src="todo.js"> </script>
                                <!-- </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card pb-3 card-rounded">
                              <div class="card-body pb-5 mb-5">
                                <!-- <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4> -->
                                <div class="row">
                                  <div class="col-sm-4">
                                    <!-- <div id="clock" style="margin-left:150px;"></div>
                                  <script src="https://cdnjs.cloudflare.com/ajax/libs/radialIndicator/1.4.0/radialIndicator.js"></script>
                                  <script>

                                  const clock = radialIndicator("#clock", {
                                   radius: 60,
                                   barWidth: 5,
                                   barColor: '#FF0000',
                                   minValue: 0,
                                   maxValue: 60,
                                   fontWeight: 'normal',
                                   roundCorner: true,
                                   format: function (value) {
                                    const date = new Date();
                                     return date.getHours() + ':' + date.getMinutes();
                                   }
                                });

                                 setInterval(() => {
                                        clock.value(new Date().getSeconds() + 1);
                                }, 1000);         
                                </script> -->
                                <style>
                                /* .percentInput{
            padding:20px;
            position: relative;
        } */
        .percentInput input{
            padding: 10px 20px;
            /* border-bottom: 2px solid black; */
            outline:none;
            width:100%;
            height:20px;
            /* color:#fff; */
            /* background:transparent; */
            /* border-bottom:1px  solid black; */
            margin-left:140px;
        }
        .percentInput button{
            padding: 10px 30px;
            border: none;
            outline:none;
            width: 100%;
            font-size:18px;
            cursor:pointer;
            margin-top:10px;
            font-weight:700;
            background-color:blue;
            color:white;
            margin-left:140px;
        }
        .contain{
           bottom:-50%;
            /* position: relative; */
            width: ;
            /* display:flex; */
            justify-content:center;
            align-items:center;
        }
        .contain .carrd{
            position: relative;
            width:180px;
            background: linear-gradient(0deg, #1b1b1b, #222, #1b1b1b );
            display:flex;
            justify-content:center;
            align-items:center;
            height:180px;
            border-radius:4px;
            text-align:center;
            overflow:hidden;
            transition:.5s;
        }
        /* .contain .card:hover{
            transform:translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,.9);
        } */
        .contain .carrd:before{
            content: '';
            position: absolute;
            top:0;
            left:-50%;
            width:100%;
            height:100%;
            background: rgba(255,255,255,.03);
            pointer-events:none;
            z-index:1;
        }
        .percent{
            position: relative;
            width:150px;
            height:150px;
            border-radius:50%;
            box-shadow:inset 0 0 50px #000;
            background:#222;
            z-index:1000;
        }
        svg{
           position: relative;
           width:150px;
           height:150px;
           z-index:1000;
        }
        svg circle{
            width:100%;
            height:100%;
            fill:none;
            stroke:#191919;
            stroke-width:10;
            stroke-linecap:round;
            transform:translate(5px,5px);
        }
        svg circle:nth-child(2){
            stroke-dasharray:440;
            stroke-dashoffset: calc(440 - (440 * 0) / 100
            );
            stroke:#00ff43;
            transition: .3s;
        }
        .percent .number{
            position: absolute;
            top:40%;
            left:0;
            width:100%;
            /* height:100%; */
            display: flex;
            justify-content:center;
            align-items:center;
            border-radius:50%;
        }
        .percent .number h2{
              color:#777;
              font-weight:700;
              font-size:40px;
              transition: .5s;
        }
        /* .carrd:hover .percent .number h2{
            color:#fff;
            font-size:60px;
        } */
        .percent .number span{
            font-size: 24px;
            color:#777;
            transition:.5s;

        }
        /* .card:hover .percent .number span{
            color:#fff;
        } */
          
        /* @media (max-width: 768px;)
        { */
            /* .container {
                display: grid;
                grid-gap:20px;
                grid-template-areas: 
                'carrd'

                'percentInput';
            } */
            .carrd {
                grid-area: carrd;
                margin-left: 120px;
              margin-top: -240% ;
            }
            .percentInput {
                grid-area: percentInput;
                margin-top: 180% ;
                /* margin-bottom:50px; */
            }
        /* } */
    </style>
    <!-- radial indicator -->
    <div class="contain">
        <div class="percentInput">
             <input type="number"  placeholder="enter value" maxlength="4" minlength="1" name="" id="inputValue" style="border-bottom: 1px solid black; outline:none;" required>
             <button id="addBtn" class="samples" onclick="addPercent()">Add</button>
        </div>
        <div class="carrd">
            <div class="box">
                <div class="percent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" id="offset" cy="70" r="70"></circle>
                    </svg>   
                    <div class="number">
                        <h2 id="percentNumber">0</h2><span>%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const input = document.getElementById('inputValue');
        const number = document.getElementById('percentNumber');
        const addBtn = document.getElementById('addBtn');
        const stroke = document.getElementById('offset');

        function addPercent() {
          if(input.value > 100){

          $(document).ready(function(){

               $('.samples').click(function (e){
                e.preventDefault();
                  // if(input.value > 100){
                // alert("the number should not be more than 100");
                swal({
                title: "the number should not be more than 100",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
               swal("please try number under 100", {
               icon: "success",
            });
            location.reload();
            } else {
             swal("Your imaginary file is safe!");
            }
           });
            //  location.reload();

            // }
          });
        });
          }
            else
            {
                number.textContent = input.value;
                stroke.style.strokeDashoffset = 
                "calc(440 - (440 * " + input.value +") / 100)";
                if(input.value == '')
                {
                    number.textContent = '0';
                    stroke.style.strokeDashoffset = 
                    "calc(440 - (440 * 0) / 100)";
 
                }
            }
        }
    </script>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <!-- calendar style -->
                              <style>
                           :root {
                             --dark-body: #4d4c5a;
                             --dark-main: #141529;
                             --dark-second: #79788c;
                             --dark-hover: #323048;
                             --dark-text: #f8fbff;
 
                             --light-body: #f3f8fe;
                             --light-main: #fdfdfd;
                             --light-second: #c3c2c8;
                             --light-hover: #edf0f5;
                             --light-text: #151426;

                             --blue: #0000ff;
                             --white: #fff;

                             --shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

                             --font-family: cursive;
                         }

                      .dark {
                          --bg-body: var(--dark-body);
                          --bg-main: var(--dark-main);
                          --bg-second: var(--dark-second);
                          --color-hover: var(--dark-hover);
                          --color-txt: var(--dark-text);
                        }

                     .light {
                        --bg-body: var(--light-body);
                        --bg-main: var(--light-main);
                        --bg-second: var(--light-second);
                        --color-hover: var(--light-hover);
                        --color-txt: var(--light-text);
                     }

                    /* * {
                       padding: 0;
                       margin: 0;
                       box-sizing: border-box;
                     } */

                   /* html,
                   body {
                    height: 100vh;
                    display: grid;
                    place-items: center;
                    font-family: var(--font-family);
                    background-color: var(--bg-body);
                  } */

                /* .calendar {
                   height: max-content;
                   width: max-content;
                   background-color: var(--bg-main);
                   border-radius: 30px;
                   padding: 20px;
                   position: relative;
                   overflow: hidden;
                } */

               .light .calendar {
                   box-shadow: var(--shadow);
                }

               .calendar-header {
                     display: flex;
                     justify-content: space-between;
                     align-items: center;
                     font-size: 25px;
                     font-weight: 600;
                    color: var(--color-txt);
                     padding: 10px;
                 }

               .calendar-body {
                   padding: 10px;
               }

              .calendar-week-day {
                    height: 50px;
                    display: grid;
                    grid-template-columns: repeat(7, 1fr);
                    font-weight: 600;
               }

              .calendar-week-day div {
                   display: grid;
                   place-items: center;
                   color: var(--bg-second);
              }

            .calendar-days {
                  display: grid;
                  grid-template-columns: repeat(7, 1fr);
                  gap: 2px;
                  color: var(--color-txt);
               }

            .calendar-days div {
                  width: 50px;
                  height: 50px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  padding: 5px;
                  position: relative;
                  cursor: pointer;
                  animation: to-top 1s forwards;
               /* border-radius: 50%; */
           }

          .calendar-days div span {
                 position: absolute;
           }

          .calendar-days div:hover span {
                  transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
            }

            .calendar-days div span:nth-child(1),
            .calendar-days div span:nth-child(3) {
                  width: 2px;
                  height: 0;
                 background-color: var(--color-txt);
            }

            .calendar-days div:hover span:nth-child(1),
            .calendar-days div:hover span:nth-child(3) {
                height: 100%;
            }

           .calendar-days div span:nth-child(1) {
                bottom: 0;
                left: 0;
           }

           .calendar-days div span:nth-child(3) {
               top: 0;
               right: 0;
           }

           .calendar-days div span:nth-child(2),
           .calendar-days div span:nth-child(4) {
               width: 0;
               height: 2px;
               background-color: var(--color-txt);
           }

          .calendar-days div:hover span:nth-child(2),
          .calendar-days div:hover span:nth-child(4) {
               width: 100%;
          }

         .calendar-days div span:nth-child(2) {
              top: 0;
              left: 0;
          }

         .calendar-days div span:nth-child(4) {
              bottom: 0;
              right: 0;
           }

         .calendar-days div:hover span:nth-child(2) {
              transition-delay: 0.2s;
         }

         .calendar-days div:hover span:nth-child(3) {
             transition-delay: 0.4s;
        }

        .calendar-days div:hover span:nth-child(4) {
             transition-delay: 0.6s;
        }

       .calendar-days div.curr-date,
       .calendar-days div.curr-date:hover {
            background-color: var(--blue);
            color: var(--white);
            border-radius: 50%;
        }

       .calendar-days div.curr-date span {
            display: none;
       }

       .month-picker {
            padding: 5px 10px;
            border-radius: 10px;
            cursor: pointer;
       }

       .month-picker:hover {
            background-color: var(--color-hover);
      }

      .year-picker {
          display: flex;
          align-items: center;
      }

      .year-change {
           height: 40px;
           width: 40px;
           border-radius: 50%;
           display: grid;
           place-items: center;
           margin: 0 10px;
           cursor: pointer;
       }

      .year-change:hover {
           background-color: var(--color-hover);
     }

      /* .calendar-footer {
           padding: 10px;
           display: flex;
           justify-content: flex-end;
           align-items: center;
      } */

      .toggle {
          display: flex;
      }

      .toggle span {
          margin-right: 10px;
          color: var(--color-txt);
      }

/* .dark-mode-switch {
    position: relative;
    width: 48px;
    height: 25px;
    border-radius: 14px;
    background-color: var(--bg-second);
    cursor: pointer;
} */

/* .dark-mode-switch-ident {
    width: 21px;
    height: 21px;
    border-radius: 50%;
    background-color: var(--bg-main);
    position: absolute;
    top: 2px;
    left: 2px;
    transition: left 0.2s ease-in-out;
} */

       .dark .dark-mode-switch .dark-mode-switch-ident {
             top: 2px;
             left: calc(2px + 50%);
       }

       .month-list {
             position: absolute;
             width: 100%;
             height: 100%;
             top: 0;
             left: 0;
            background-color: var(--bg-main);
            padding: 20px;
            grid-template-columns: repeat(3, auto);
            gap: 5px;
           display: grid;
          transform: scale(1.5);
          visibility: hidden;
          pointer-events: none;
       }

      .month-list.show {
            transform: scale(1);
            visibility: visible;
            pointer-events: visible;
            transition: all 0.2s ease-in-out;
       }

       .month-list > div {
            display: grid;
            place-items: center;
      }

       .month-list > div > div {
             width: 100%;
            padding: 5px 20px;
            border-radius: 10px;
           text-align: center;
             cursor: pointer;
           color: var(--color-txt);
        }

        .month-list > div > div:hover {
             background-color: var(--color-hover);
        }

         @keyframes to-top {
      0% {
            transform: translateY(100%);
            opacity: 0;
         }
    100% {
           transform: translateY(0);
           opacity: 1;
        } 
      }
              </style>
              <!-- calendar app -->
                                <div class="calendar">
                            <div class="calendar-header">
                             <span class="month-picker" id="month-picker">February</span>
                              <div class="year-picker">
                               <span class="year-change" id="prev-year">
                                <pre><</pre>
                              </span>
                              <span id="year">2021</span>
                                 <span class="year-change" id="next-year">
                              <pre>></pre>
                            </span>
                        </div>
                      </div>
                       <div class="calendar-body">
                          <div class="calendar-week-day">
                             <div>Sun</div>
                             <div>Mon</div>
                             <div>Tue</div>
                              <div>Wed</div>
                             <div>Thu</div>
                            <div>Fri</div>
                           <div>Sat</div>
                       </div>
                      <div class="calendar-days"></div>
                  </div>
                    <div class="calendar-footer">
                     <div class="toggle">
                       <!-- <span>Dark Mode</span> -->
                       <div class="dark-mode-switch">
                    <!-- <div class="dark-mode-switch-ident"></div> -->
                </div>
            </div>
        </div>
        <div class="month-list"></div>
    </div>
    <script src="calendar.js"></script>
    <!-- app end -->
                                  <!-- <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0"> -->
                                      <!-- <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                      </div> -->
                                      <!-- <div>
                                        <p class="text-small mb-2">Total Visitors</p>
                                        <h4 class="mb-0 fw-bold">26.80%</h4>
                                      </div> -->
                                    <!--                        
                                    </div>
                                  </div> -->
                                  
                                  <!-- <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center"> -->
                                      <!-- <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                      </div> -->
                                      <!-- <div>
                                        <p class="text-small mb-2">Visits per day</p>
                                        <h4 class="mb-0 fw-bold">9065</h4>
                                      </div> -->
                                      
                                    <!-- </div>
                                  </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Market Overview</h4>
                                   <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                  </div>
                                  <div>
                                    <div class="dropdown">
                                      <!-- <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button> -->
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <!-- <h6 class="dropdown-header">Settings</h6> -->
                                        <!-- <a class="dropdown-item" href="#">Action</a> -->
                                        <!-- <a class="dropdown-item" href="#">Another action</a> -->
                                        <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <!-- <a class="dropdown-item" href="#">Separated link</a> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="marketingOverview"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded table-darkBGImg">
                              <div class="card-body">
                                <div class="col-sm-8">
                                  <h3 class="text-white upgrade-info mb-0">
                                    Enhance your <span class="fw-bold">Campaign</span> for better outreach
                                  </h3>
                                  <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Pending Requests</h4>
                                   <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                  </div>
                                  <div>
                                    <!-- <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button> -->
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Customer</th>
                                        <th>Company</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <h6>Brandon Washington</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">79%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face2.jpg" alt="">
                                            <div>
                                              <h6>Laura Brooks</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face3.jpg" alt="">
                                            <div>
                                              <h6>Wayne Murphy</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face4.jpg" alt="">
                                            <div>
                                              <h6>Matthew Bailey</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-danger">Pending</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face5.jpg" alt="">
                                            <div>
                                              <h6>Katherine Butler</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-success">Completed</div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Recent Events</h4>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Other Events
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Quarterly Report
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash">Activities</h4>
                                  <p class="mb-0">20 finished, 5 remaining</p>
                                </div>
                                <ul class="bullet-line-list">
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>Just now</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                </ul>
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12 ">
                                    <div class="d-flex justify-content-between align-items-center">
                                  <style>
                             .container{
                                 /* background-color: #fff; */
                                 width: 400px;
                                 height: 250px;
                                 border-radius: 7px;
                                 padding: 20px;
                                 transition: .1s;
                               }

                             .header h1{
                                 font-size: 23px;
                                 font-weight: 500;
                                 margin-bottom: 5px;
                                 align-items: center;
                                 text-align: center;
                                 padding: 5px 0 5px 0 ;
                                 background-color: blue;
                                 color:white;
                               }

                              .header p{
                                   font-size: 16px;
                                   margin-bottom: 10px;
                                   margin: 10px 0 15px 0;
                                }

                              input, button{
                                   width: 100%;
                                   height: 50px;
                                   border-radius: 5px;
                                }

                             button{
                                 border: none;
                                 background-color: #1d68d8;
                                 font-size: 15px;
                                 color: #fff;
                                 cursor: pointer;
                              }

                               input{
                                   border: 2px solid black;
                                   padding-left: 15px;
                                   /* margin-bottom: 15px; */
                                   font-size: 15px;
                                   outline:5px;
                                }

                               .qr-code{
                                    padding: 25px 0;
                                    border: 1px solid #ccc;
                                    margin-top: 10px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    border-radius: 4px;
                                    opacity: 0;
                                    pointer-events: none;
                                    transition: .5s;
                                 }

                                 .container.active{
                                    height: 490px;
                                 }

                                 .container.active .qr-code{
                                      opacity: 1;
                                      pointer-events: auto;
                                   }
                                      </style>
                                    <!-- qrcode app -->
                                    <div class="container">
                                          <div class="header">
                                               <h1>QR Code Generator</h1>
                                              <p>Type a url or text to generate QR Code</p>
                                          </div>
                                           <div class="input-form">
                                              <input type="text" class="qr-input form-control " placeholder="Enter url or text" style="border:1px solid black; margin-bottom:15px;">
                                                <button class="generate-btn">Generate QR Code</button>
                                           </div>
                                           <div class="qr-code">
                                              <img src="./qrcode.png" class="qr-image">
                                           </div>
                                     </div>

                                    <!-- app end -->
                                    <script src="qrcode.js"></script>
                                      <!-- <h4 class="card-title card-title-dash">Todo list</h4>
                                      <div class="add-items d-flex mb-0">
                                        <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                      </div>
                                    </div>
                                    <div class="list-wrapper">
                                      <ul class="todo-list todo-list-rounded">
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                              <i class="mdi mdi-flag ms-2 flag-color"></i>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">23 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="border-bottom-0">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-danger me-3">Expired</div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul> -->
                                  
                                      <!-- <link rel="stylesheet" href="calculator.css"> -->
                                    
                               
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h4 class="card-title card-title-dash">Type By Amount</h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Leave Report</h4>
                                      </div>
                                      <div>
                                        <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <h6 class="dropdown-header">week Wise</h6>
                                            <a class="dropdown-item" href="#">Year Wise</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <canvas id="leaveReport"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Top Performer</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                            <small class="text-muted mb-0">Alaska, USA</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
  </div>

  </div>
<!-- wrapper -->
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
</body>

</html>

