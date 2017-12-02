<?php
session_start();
if(!$_SESSION['login']){
   header("location:index.php");
   die;
}?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Card | Tango Theater</title>
  <link rel="icon" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon/apple-touch-icon-152x152.png">
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="assets/images/favicon/mstile-144x144.png">
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
      <form class="login-form" action="member.php" id="my_form">
        <div class="row">
          <div class="input-field col s12 center">
			<?php

echo"
<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=". $_SESSION["card_code"]."&choe=UTF-8' title='QR Code' width='100%' height='100%' class='circle' />";
?>
            <p class="center login-form-text">Tango Theater Card</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12"> 
  <center>Name: <font color='#207faa' ><b>
<?php echo  $_SESSION['cus_fname'] ." " . $_SESSION['cus_mname'] . "  " . $_SESSION['cus_lname']; ?></b></font>
           
          </div>
        </div>        <div class="row margin">
          <div class="input-field col s12">
           			
            <center>Registration Date: <font color='#207faa' >
            <b><?php echo $_SESSION["date_created"] ; ?></b></font>

           
          </div>
        </div>
     
        <div class="row">
          <div class="input-field col s12">
          			  <center>
		    <a href="member.php"> <button class="btn waves-effect waves-light col s12" type="submit" name="action" >Back</button></a>
        
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