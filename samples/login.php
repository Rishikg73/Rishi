<!doctype html>
<html>
<?php
session_start();
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>login</title>
<!-- plugins:css -->
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core@4.7.4/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core@4.7.4/dist/ionic/ionic.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core@4.7.4/css/ionic.bundle.css"/>

<link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
<!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/darkly/bootstrap.min.css"> -->
<!-- <style>
  .button {
  position: relative;
  padding: 8px 16px;
  background: #009579;
  border: none;
  outline: none;
  border-radius: 2px;
  cursor: pointer;
}
.button__text {
  font: bold 20px "Quicksand", san-serif;
  color: #ffffff;
  transition: all 0.2s;
}

.button--loading .button__text {
  visibility: hidden;
  opacity: 0;
}
.button--loading::after {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  border: 4px solid transparent;
  border-top-color: #ffffff;
  border-radius: 50%;
  animation: button-loading-spinner 1s ease infinite;
}

@keyframes button-loading-spinner {
  from {
    transform: rotate(0turn);
  }

  to {
    transform: rotate(1turn);
  }
} 
</style> -->
<style>
    :root {
      --ion-safe-area-top: 20px;
      --ion-safe-area-bottom: 22px;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <!--  saved message -->
            <?php if(isset($_SESSION['success'])) 
          {
            ?>
            <div class="alert alert-success alert-dismissible fade show fs-5">
                  <strong>Success!</strong><?php  echo $_SESSION['success']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['success']);
          }
          
          ?>
        
          <!-- change password success message-->
          <?php if(isset($_SESSION['reset'])) 
          {
            ?>
            <div class="alert alert-success alert-dismissible fade show fs-5">
                  <strong>Success!</strong><?php  echo $_SESSION['reset']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['reset']);
          }
          
          ?>
            <!--inactive message  -->
            <?php if(isset($_SESSION['Inactive'])) 
          {
            ?>
            <div class="alert alert-warning alert-dismissible fade show fs-5" >
                  <strong>Warning!</strong><?php  echo $_SESSION['Inactive']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['Inactive']);
          }
          
          ?>
            <!--delete message  -->
            <?php if(isset($_SESSION['Deleted'])) 
          {
            ?>
            <div class="alert alert-danger alert-dismissible fade show fs-5" >
                  <strong>Danger!</strong><?php  echo $_SESSION['Deleted']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['Deleted']);
          }
          
          ?>
            <!--logout  message  -->
            <?php if(isset($_SESSION['message'])) 
          {
            ?>
            <div class="alert alert-success alert-dismissible fade show fs-5">
                  <strong>Success!</strong><?php  echo $_SESSION['message']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['message']);
          }
          
          ?>
           <!--invalid  message  -->
           <?php if(isset($_SESSION['Invalid'])) 
          {
            ?>
            <div class="alert alert-danger alert-dismissible fade show fs-5" >
                  <strong>Danger!</strong><?php  echo $_SESSION['Invalid']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['Invalid']);
          }
          
          ?>  
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">    
               <h2 class="text-uppercase text-center mb-5 text-black" >Login</h2> 
               <form action="logindata.php" method="post" onsubmit="return login()" id="login_form">

                <div class="form-group">
                  <label class="form-label fs-5 text-black" for="email">Your Email <i class="text-danger">*</i></label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="enter your email" style="border:1px solid black;">
                   <p id="p1" class="text-danger"></p>               
                 </div>

                <div class="form-group">
                <label class="form-label fs-5 text-black" for="email">Password <i class="text-danger">*</i></label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="enter your password" style="border:1px solid black;">
                  <p id="p2" class="text-danger"></p>                
                </div>

                <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label ml-1 text-black">
                        <input type="checkbox" class="form-check-input text-black" id="checkbox" onclick="setcookie()" style="opacity:5">Remember me
                      </label>
                    </div>
                   
                <!-- <button class="btn btn-success btn-block button-loader btn-lg mb-1" name="login_btn" data-loading-text="<i class='fa fa-spinner fa-spin'></i> My button with loader" type="submit">
                <i class="fal fa-sign-in"></i>
                   Login
                </button> -->
                <!-- <button type="submit" name="send" value="login" class="button btn btn-lg w-100">
                <span class="button__text">login</span>
               </button> -->

               <!-- <ion-content fullscreen class="ion-padding"> -->
      <ion-button expand="block" onclick="handleButtonClick()">Show Loading</ion-button>
    <!-- </ion-content> -->

    <ion-loading-controller></ion-loading-controller>
              <a href="empforget.php"
                class="fw-bold mb-2 fs-5 text-black" target="_blank" style="text-decoration: none;">Forget Password?</a>

                <div class="text-center mt-4 fw-light fs-5 text-muted ">
                  Don't have an account? <a href="empregister.php" class="w-bold  text-black" target="_blank" style="text-decoration:none;">Register</a>
                </div>
            </form>
          </div>
<?php
    // include('connect.php');
    // if(isset($_POST['login_btn']))
    //   {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $query = "SELECT * FROM user WHERE email = '$email'";
    //     $data = mysqli_query($conn,$query);
    //     $total = mysqli_num_rows($data);
    //     if($total == 1)
    //     {
    //       $_SESSION['email']=$email;
    //       header("location: http://localhost/star-admin/template/employees.php");
    //     }
        
    //   }
  ?>
  <script>
    const controller = document.querySelector('ion-loading-controller');

    function handleButtonClick() {
      console.log('hi');
      controller.create({
        message: 'Please wait...',
        duration: 3000
        // window.location:"http://localhost/star-admin/template/employees.php";
      }).then(loading => loading.present());
    }
  </script>
  <script>

//Login page
        function login(){
       
       //create email & password variable
        var email= document.getElementById("email").value.trim();
        var password= document.getElementById("password").value.trim();

       //check email required
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
           //remove error message 
           document.getElementById('p1').innerHTML=" ";
           document.getElementById('p2').innerHTML=" ";
         //   document.getElementById('p3').innerHTML=" ";

          //check email 
          if(email=='')
          {
           document.getElementById("p1").innerHTML="Please enter your email";
           return false;
          }
         //check valid email
          else if (!filter.test(email))
          {
             document.getElementById("p1").innerHTML="Please Check valid email id";
            return false;
          }
        //check password
        else if(password=='')
       {
           document.getElementById("p2").innerHTML="Please enter Password";
           return false;
       }
      else{
            
                  return true;                      
          }  
}
//Remember page
function setcookie()
{
              var email = document.getElementById("email").value;
              var password = document.getElementById("password").value;

                document.cookie = "myemail="+email+";path= http://localhost/star-admin/template/pages/samples/";
                document.cookie = "mypswd="+password+";path= http://localhost/star-admin/template/pages/samples/";

}
   //cookie store
      function getcookiedata()
      {
          console.log(document.cookie);

          var e = getcookie('myemail');
          var p = getcookie('mypswd');

          document.getElementById('email').value = e;
          document.getElementById('password').value = p;
      }
          function getcookie(cname)
          {
               var name = cname + "=";
               var decodedcookie = decodeURIComponent(document.cookie);
               var ca = decodedcookie.split(';');
                  for(var i=0;i<ca.length;i++){
                     var c = ca[i];
                       while(c.charAt(0) == ' '){
                         c = c.substring(1);
                     }
                      if(c.substring(name)== 0){
                        return c.substring(name.length, c.length);
                     }
               }
               return "";
          } 
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- <script src="button-inline-loader.js"></script> -->
<!-- 
<script>
  $('.btn').on('click', function(){
  $('.button-loader').button('loading');
  setTimeout(function()
  { 
    $('.button-loader').button('reset'); 
  }, 2000);

  // window.location:"http://localhost/star-admin/template/employees.php";
});
</script> -->
<!-- <script>
  const btn = document.querySelector(".button");

btn.classList.add("button--loading");
setTimeout( 
function(){  
btn.classList.remove("button--loading");

}, 5000);
</script> -->
</body>
</html>
