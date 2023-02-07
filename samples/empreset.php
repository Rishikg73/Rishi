<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>reset </title>
  <!-- plugins:css -->
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
  <style>
    .error{
      color:red;
    }
  </style>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
          <div class="card-body">
            <p class="login-box-msg alert alert-danger alert-dismissible fade show">You are only one step away from your new pssword,reset your password</p>
          <!-- </div> -->
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
          <!-- reset message -->
           <?php if(isset($_SESSION['reset'])) 
          {
            ?>
            <div class="alert alert-danger alert-dismissible fade show fs-5" >
                  <strong>Danger!</strong><?php  echo $_SESSION['reset']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['reset']);
          } 
          ?>  
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <?php
     include('connect.php');

     ini_set('display_errors', 1);
     ini_set('display_startup_errors',1);
     error_reporting(E_ALL);

     if(isset($_SESSION['email']))
     {
      $email = $_SESSION['email'];
     }
   ?> 
              <h2 class="text-uppercase text-center mb-5">Reset password</h2>

              <form action="resetdata.php" method="post" name="reset_form" id="reset_form">
                
                <div class="form-outline mb-3">
                  <label class="form-label fs-5" for="email">Your Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="enter your email" value=<?=  $email;?>>
                  <p id="error_email" class="text-danger"></p>
                </div>
        

                <div class="form-outline mb-3">
                  <label class="form-label fs-5" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="*****"/>
                  <p id="error_password" class="text-danger"></p>
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label fs-5" for="cpassword">Repeat your password</label>
                  <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg" placeholder="*****"/>
                  <p id="error_cpassword" class="text-danger"></p>
                </div>

                <div class="d-flex  mb-3">
                  <button type="submit"
                    class="btn btn-primary  btn-lg  " style ="width:100%;" id="submit">Reset</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

 <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

  <!-- plugins:js -->
  <!-- <script src="../../vendors/js/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <!-- <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script> -->
  <!-- endinject -->

  <script>
    $(document).ready (function () {  
  $('form[id="reset_form"]').validate({  
    rules: {  
      email: {  
        required: true,  
        email: true,  
      },  
      password: {  
        required: true,  
        minlength: 5,  
      },
      cpassword: {  
        required: true,  
        minlength: 5,  
        equalTo: "#password" 
      }  
    },  
    messages: {  
      email: 'Enter a valid email',

      password: {  
        minlength: 'Password must be at least 5 characters long'  
      }, 
      cpassword: {  
        minlength: 'Password must be at least 5 characters long'  
      } 
    },  
    submitHandler: function(form) {  
      form.submit();  
    }  
  });  
 });  
</script>
</body>
</html>