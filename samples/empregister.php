
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>register</title>
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
  <link rel="shortcut icon" href="../../images/favicon.png" >
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
          <div class="col-lg-6 mx-auto">
             <!-- res save message -->
          <?php if(isset($_SESSION['message'])) 
          {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" id="msg">
            <i class="bi-exclamation-triangle-fill"></i>
                  <?php  echo $_SESSION['message']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
             </div>
            <?
            //echo $_SESSION['message'];
            unset($_SESSION['message']);
          }
          
          ?>
         <div class="container-fluid-col-4">        
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg ">
              <div class="card auth-form-light text-left py-2 px-2 px-sm-5">
                <div class="card-body">
                  <h4 class="card-title text-uppercase text-center ">Create an account</h4>
                 
                  <form id="register_form" name="register_form" method="post" action="registerdata.php" >
                  <div class="row">
                      <div class="col-md-6">
                      <label class="col-sm-4 col-form-label fs-5">First Name <i class="text-danger">*</i></label>
                        <div class="form-group row">
                          <div class="col-sm-12">
                          <input type="text" class="form-control" id="fname" name="fname" placeholder="enter your first name ex:john">                         
                         </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                      <label class="col-sm-4 col-form-label fs-5">Last Name <i class="text-danger">*</i></label>
                        <div class="form-group row">
                          <div class="col-sm-12">
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="enter your last name ex:michael">                          
                        </div>
                        </div>
                      </div>
                    </div>

                   <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="col-sm-3 col-form-label fs-5">Age <i class="text-danger">*</i></label>
                        <div class="form-group row">
                          <div class="col-sm-12">
                          <input type="number" class="form-control" id="age" name="age" placeholder="enter your age ex:21">                          
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                    <label class="col-sm-3 col-form-label fs-5">Gender <i class="text-danger">*</i></label>
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <!-- <p>
                             <span>Male</span> <input type="checkbox" class="male" value="male" name="gender" id="gender">
                             <span> Female</span> <input type="checkbox"  class="female" value="female" name="gender" id="gender">
                            </p> -->
                            <select name="gender" id="gender" class="w-100 pb-1">
                                <option value="" class="pb-1">Select</option>
                                <option value="Male" class="pb-1" name="gender" id="gender">Male</option>
                                <option value="Female" class="pb-1" name="gender" id="gender">Female</option>
                            </select>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <label class="form-label fs-5" >Email <i class="text-danger">*</i></label>
                  <div class="form-outline">
                  <input type="email" class="form-control" id="email" name="email" placeholder="abc@gmail.com">                  
                </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
                <label class="form-label fs-5">password <i class="text-danger">*</i></label>
                  <div class="form-outline">
                      <input type="password" class="form-control" id="password" name="password" placeholder="*****"><br>
                      <input type="checkbox" id="showPass"> Show Password                  
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <label class="form-label fs-5">Confirm Password <i class="text-danger">*</i></label>
                  <div class="form-outline">
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="*****"><br>
                      <input type="checkbox" id="showPs"> Show Password               
                     </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
                <label for="" class=" mb-2 fs-5">Captcha(optional)</label>

                <input type="text" class="form-control mb-2" id="captcha" name="captcha" placeholder="enter your captcha">    

                  <div class="form-outline">
                  <div class="card-header mb-1 col-5 bg-primary text-white"> 
                   <?php
                    $change_time = md5(microtime());
                   ?>
                  <span><?php echo  $get_value = substr($change_time,0,6); ?></span>
                     <?php
                      ?>
                   </div>       
                  </div>

                </div>
              </div>

              <div class="form-group">
                      <button type="submit" class="btn btn-primary mt-3"  id="submit" style ="width:100%;" >Register</button>
                   </div>

                   <div class="text-center mt-4 fw-light fs-5 text-muted ">
                   Have already an account? <a href="emplogin.php" class="w-bold text-body" target="_blank" style="text-decoration:none;">login</a>
                </div>
                  </form>
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
  <!-- inject:js
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script> -->
  <!-- endinject -->  

<script>
    $(document).ready (function () {  
  
  $('form[id="register_form"]').validate({  
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

      fname: 'please enter first name',  
      lname: 'please enter last name',  
      age:'please enter your age',
      gender: 'please choose gender',
      email: 'please enter a valid email',  
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

<!-- hide show password -->
<script>
  $(document).ready(function(){
  
  $('#showPass').on('click', function(){
     var passInput=$("#password");
     if(passInput.attr('type')==='password')
       {
         passInput.attr('type','text');
     }else{
        passInput.attr('type','password');
     }
 })
})
</script>
<script>
  $(document).ready(function(){
  
  $('#showPs').on('click', function(){
     var passInput=$("#cpassword");
     if(passInput.attr('type')==='password')
       {
         passInput.attr('type','text');
     }else{
        passInput.attr('type','password');
     }
 })
})
</script>

</body>
</html>