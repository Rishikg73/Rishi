<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>forget </title>
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
          <?php if(isset($_SESSION['invalid'])) 
          {
            ?>
            <div class="alert alert-warning alert-dismissible fade show fs-5" >
                  <strong>Warning!</strong><?php  echo $_SESSION['invalid']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            unset($_SESSION['invalid']);
          }
          
          ?>
        
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
               
              <h2 class="text-uppercase text-center mb-5" >Forget Password</h2>

              <form action="forgetdata.php" method="post" id="forget_form">

              <div class="form-group">
                  <label class="form-label fs-5" for="email">Your Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="abc@gmail.com"/>
                  <p id="p1" class="text-danger"></p>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-primary btn-lg" id="submit" style ="width:100%;">Forget</button>
                </div>  
                
                <div class="text-center mt-4 fw-light fs-5 text-muted ">
                   Back to <a href="emplogin.php" class="w-bold text-body" target="" style="text-decoration:none;">login</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <script>
        function forget()
        {
           var email= document.getElementById("email").value;

           document.getElementById('p1').innerHTML=" ";
          //document.getElementById('p2').innerHTML=" ";

          if(email=='')
          {
           document.getElementById("p1").innerHTML="Please enter your email";
           return false;
          }
          else{
             return true;
          }
        }  
</script> -->
</script>   
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

  <script>
    $(document).ready (function () {  
  $('form[id="forget_form"]').validate({  
    rules: {  
      email: {  
        required: true,  
        email: true,  
      },  
    },  
    messages: {  
      email: 'Enter a valid email',
    },  
    submitHandler: function(form) {  
      form.submit();  
    }  
  });  
 });  
</script>
</body>
</html>