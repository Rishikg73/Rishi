<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Button Inline Loader Example</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/darkly/bootstrap.min.css">
<style>
  .container { margin: 150px auto; max-width: 350px; }
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


  </style>
</head>

<body>
    
  <div class="container">
  <form action="logindata.php" method="post"  id="login_form">
  <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" required>
    <small id="passwordHelp" class="form-text text-muted">At Least 8 characters</small>
  </div>
    <!-- <button class="btn btn-danger btn-block button-loader btn-lg" data-loading-text="<i class='fa fa-spinner fa-spin'></i> My button with loader" type="submit">
    <i class="fal fa-sign-in"></i>
    Sign In
</button> -->
<button type="submit" name="send" value="login" class="button">
      <span class="button__text">login</span>
    </button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- <script src="button-inline-loader.js"></script> -->
<!-- <script>
  $('.btn').on('click', function(){
  $('.button-loader').button('loading');
  setTimeout(function(){ $('.button-loader').button('reset'); }, 5000);
   document.window.location.href:"http://localhost/star-admin/template/employees.php";
})
</script> -->
<script>
    const btn = document.querySelector(".button");

btn.classList.add("button--loading");
setTimeout( 
function(){  
btn.classList.remove("button--loading");

}, 6000);
</script>
</body>
</html>