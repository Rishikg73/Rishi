<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>login</title>
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
               
              <h2 class="text-uppercase text-center mb-5" >Login</h2>

              <form action="logindata.php" method="post" onsubmit="return login()" id="login_form">

                <div class="form-group">
                <label class="form-label fs-5" for="email">Your Email <i class="text-danger">*</i></label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="abc@gmail.com" />
                  <p id="p1" class="text-danger"></p>               
                 </div>

                <div class="form-group">
                <label class="form-label fs-5" for="email">Password <i class="text-danger">*</i></label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="*****"/>
                  <p id="p2" class="text-danger"></p>                
                </div>

                <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" onclick="setcookie()">
                        Remember me
                      </label>
                    </div>
               
                <div class="mt-3">
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-lg mb-5 " name="login_btn" style ="width:100%;">Login</button>
                </div>   
                                
              <a href="empforget.php"
                class="fw-bold text-body fs-5" target="_blank" style="text-decoration: none;">Forget Password?</a>

                <div class="text-center mt-4 fw-light fs-5 text-muted ">
                  Don't have an account? <a href="empregister.php" class="w-bold text-body" target="_blank" style="text-decoration:none;">Register</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- template pages show details -->
  <?php
    include('connect.php');
    if(isset($_POST['login_btn']))
      {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email = '$email'";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        if($total == 1)
        {
          $_SESSION['email']=$email;
          header("location: http://localhost/star-admin/template/employees.php");
        }
        
      }
  ?>
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
</script>
<script>
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
</body>

</html>
