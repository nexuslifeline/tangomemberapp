<?php
session_start();
if(!$_SESSION['login']){
   header("location:index.php");
   die;
}?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from www.bdinfosys.com/demo/materialx/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Oct 2016 03:05:09 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Member Apps</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/animate.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/sweetalert/sweet-alert.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- Choose your default colors -->
  <link rel="stylesheet" href="assets/css/colors/color1.css">
  <!-- <link rel="stylesheet" href="assets/css/colors/color2.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color3.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color4.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color5.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color6.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color7.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color8.css"> -->

  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
  <![endif]-->
</head>


<body>


  <!-- start option panel -->
  <div id="switch">
      <div class="content-switcher">
          <p class="brand-text">Color Options:</p>
          <ul class="header">
              <li><a href="#" onclick="setActiveStyleSheet('color1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
          </ul>
   
          <div id="hide">
              <i class="fa fa-times"></i>
          </div>
      </div>
  </div>
  <div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
      <i class="fa fa-cog"></i>
  </div>
  <!-- end option panel -->

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">
                    <li class="search-form-li">
                      <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                      <div class="search-form-wrap hide">
                        <form action="#" class="">
                          <input type="search" class="search">
                          <button type="submit"><i class="mdi-action-search"></i>
                          </button>
                        </form>
                      </div>
                    </li>
                   
                  </ul>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="<?php echo $_SESSION['cus_photo'] ; ?>" alt="">
                        </div>
                          <?php
                echo $_SESSION['cus_fname'] . " " . $_SESSION['cus_mname']. " " . $_SESSION['cus_lname']; ?> </h5>
                        <h5>Member</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>Profile</a>
                    </li>

        <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-users fa-fw"></i>Products</a>
                    </li>
                  
                    <li><a href="#team" data-section="#team" class="menu-smooth-scroll" onclick="hidea()"><i class="fa fa-users fa-fw"></i>Transaction</a>
                    </li>
      
               



                    <li><a class="menu-smooth-scroll" onclick="logout()"><i class="fa fa-paper-plane fa-fw"></i>Log Out</a>
                    </li>
          <script>
          function logout()
          {
            window.location.href='logout.php';
          }
          </script>
                  </ul>
                  
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                    <h1 class="home-title">Tango <span>Theatre</span></h1>
                    <h2 class="home-subtitle">Get the best cinema experience at Tango Theatres in Micronesia Mall and Agana </h2>
                    <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Contact Us<i class="mdi-content-send left"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">


              <div class="col-sm-12 col-md-12">


                  <?php
                        include('includes/dbconnection.php');

                      $sql= mysqli_query($con,"SELECT customer_id FROM birthday_rewards WHERE customer_id=".$_SESSION["userid"]." AND bday_year=".date('Y')."  AND bday_day=".date('d')." AND bday_month=".date('m'));
                      $is_celebrant= mysqli_fetch_array($sql);

                      if(count($is_celebrant)>0){ //make sure that this member is having a birthday today

                          $sql = mysqli_query($con,"SELECT * FROM reward_preference");
                          $row= mysqli_fetch_array($sql);

                          if(count($row)>0){ //get greeting message
                              echo '<h3 class="about-subtitle" style="color: red;text-transform: none;">Greetings!</h3>';
                              echo '<h5 style="text-transform: none;color:#00BCD4;font-size: 29pt;">'.$row['greetings'].'</h5><br /><br /><br /><br />';
                          }


                      }








                  ?>



              </div>



            <div class="col-sm-12 col-md-4">
              <div class="person-about">
               <div class="person-info">
                <h3 class="about-subtitle">Points Information</h3>
      


        <?php
        include('includes/dbconnection.php');
        $q1 = mysqli_query($con,"SELECT * FROM customers WHERE customer_id='". $_SESSION["userid"] ."'");
        while($row= mysqli_fetch_array($q1))
        {
            $current_pts = $row['current_pts'];
            $total_earn_pts = $row['total_earn_pts'];
        }




        $sql= mysqli_query($con,"SELECT SUM(reward_points) as total_bday_points FROM birthday_rewards WHERE customer_id=".$_SESSION["userid"]." AND is_active=1 AND is_approved=1");
        $bday_rewards= mysqli_fetch_array($sql);

        echo "<h5><span>Remaining Points:</span> ".number_format($current_pts,0)."</h5>";

        echo "<h5><span>Total Points:</span> ".number_format($total_earn_pts,0)."</h5>";

        if(count($bday_rewards)>0){ //if true, there is reward point found on this member, show details
            echo "<h5><span>Birthday Rewards:</span> ".number_format($bday_rewards['total_bday_points'],0)."</h5>";
        }

          ?> 

                
              </div>
        <form method="post" action="card.php">
        <input type="hidden" value=' <?php  echo $_SESSION["userid"]; ?> ' name="hiddenvalues">
          <button class="btn waves-effect waves-light col s12" type="submit" name="action" >My Card
      </button>
      </form>
              </div>
            </div>
            <!-- about me description -->

            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" 
                      src="<?php echo $_SESSION["cus_photo"];?>" alt="">
              </div>
            </div>
            <!-- about me image -->

            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Personal Information</h3>
                <li>
                  <a href="profile.php" class="btn btn-info"><i class="fa fa-pencil"></i> Edit Profile</a>
                  </li>
      
                <h5><span>Name :</span> <?php
        
        echo $_SESSION['cus_fname'] . " " . $_SESSION['cus_mname']. " " . $_SESSION['cus_lname'];
        ?> </h5>
                <h5><span>Birthday :</span><?php
    
        echo $_SESSION['cus_bdate'];
        ?> </h5>
                <h5><span>Phone :</span> <?php
        echo $_SESSION['cus_mobile_no'];
        ?></h5>
                <h5><span>Email :</span><?php
        
        echo $_SESSION['cus_email'];
        ?></h5>
                <h5><span>Address :</span><?php
        echo $_SESSION['cus_address'];
        ?></h5>
              </div>

              <div class="about-social">
                <ul>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                   </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>





    <!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="title">Products</h2>
                
        <?php
        include('includes/dbconnection.php');
        $q1 = mysqli_query($con,"SELECT * FROM categories");
        echo"<ul class='inline-menu clearfix portfolio-category' id='portfolio-msnry-sort'>";
        while($row= mysqli_fetch_array($q1))
        {
          $catname = $row['cat_name'];
          echo " <li class='active'><a href='member.php?type=".strtolower($catname)."#portfolio' onClick='sam()'>". $catname ."</a>
          
                  </li>";
        }
        echo"</ul>";
        ?>        
              </div>
            </div>
          </div>
      
        </div>
        <!-- .container end -->
    
      </div>
    <center>
    <div class="table-responsive">
    <table class="table table-bordered table-hover" style="color:black;">
    
    <theader>
    <th>Item Name</th>
    <th>Required Points Redeem</th>
    <th>Acquired Points Reward</th>
    </theader>
    
    <tbody>
    <?php
    include('includes/dbconnection.php');
    $sample = $_GET['type'];
    $q0 = mysqli_query($con,"SELECT * FROM categories WHERE cat_name='". $sample ."'");
    while($row1 = mysqli_fetch_array($q0))
    {
      $cid = $row1['category_id'];
    }
    echo $cid;
    $q1 = mysqli_query($con,"SELECT * FROM items where category_id='". $cid ."'");
    while($row= mysqli_fetch_array($q1))
    {
      echo"
      <tr>
      <td>". $row['item_name'] ."</td>
      <td>". $row['required_points_redeem'] ."</td>
      <td>". $row['acquired_points_reward'] ."</td>
      </tr>
    
      ";
    }
    ?>
    </tbody>
    </table>
    </div>
    </center>
    <!-- #portfoldsio Section end -->
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
    <!-- Team Section end -->
   <section id="team" class="scroll-section root-sec white portfolio-wrap">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="title">Transactions</h2>
        <ul class='inline-menu clearfix portfolio-category' id='portfolio-msnry-sort'>
                 <li class='active'><a href='member.php#team' onClick="hidea()"><font color="white">Acquire Item Histroy</font></a></li>
                 <li class=''><a href='member.php#team' onClick="hider()"><font color="white">Redeem Item History</font></a></li>
         </ul>   
              </div>
            </div>
          </div>
      
        </div>
    

      </div>
    <center>
    <div class="table-responsive" id="act" >
   <table class="table table-bordered table-hover" style="color:black;">
    
    <theader>
    <th>Date</th>
    <th>Transaction # </th>
    <th>Item Name</th>
    <th>Acquired Points</th>
  
    </theader>
    
    <tbody>
    <?php
    include('includes/dbconnection.php');
    
    $q0 = mysqli_query($con,"SELECT *,a_info.date_created as ac_date FROM `acquire_points_info` as a_info INNER JOIN acquire_points_items as a_pts ON a_info.`acquire_point_id` = a_pts.txn_acquired_id INNER JOIN items as i ON a_pts.item_id = i.item_id  WHERE customer_id='". $_SESSION["userid"] ."'");
    while($row= mysqli_fetch_array($q0))
    {
      echo"
      <tr>
      <td>". $row['ac_date'] ."</td>
      <td>". $row['acq_txn_no'] ."</td>
      <td>". $row['item_name'] ."</td>
      <td>". $row['total_points_acquired'] ."</td>
      </tr>
    
      ";
    }
    ?>
    </tbody>
    </table>
    </div>
    </center>
    
    
    
     <center>
    <div class="table-responsive" id="rede" style="display: none;">
   <table class="table table-bordered table-hover" style="color:black;">
    
    <theader>
    <th>Date</th>
    <th>Transaction # </th>
    <th>Item Name</th>
    <th>Redeem Points</th>
  
    </theader>
    
    <tbody>
    <?php
    include('includes/dbconnection.php');
    
    $q0 = mysqli_query($con,"SELECT *,r_info.date_created as rd_date FROM `redeem_info` as r_info INNER JOIN redeem_items as r_pts ON r_info.`redeem_id` = r_pts.txn_redeem_id INNER JOIN items as i ON r_pts.item_id = i.item_id WHERE customer_id='". $_SESSION["userid"] ."'");
    while($row= mysqli_fetch_array($q0))
    {
      echo"
      <tr>
      <td>". $row['rd_date'] ."</td>
      <td>". $row['red_txn_no'] ."</td>
      <td>". $row['item_name'] ."</td>
      <td>". $row['required_points_redeem'] ."</td>
      </tr>
    
      ";
    }
    ?>
    </tbody>
    </table>
    </div>
    </center>
    <!-- #portfoldsio Section end -->
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
    <!-- #team Section end -->

    <!-- Funfacts Section end -->
    <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
 

      </div>  <!-- .container end -->
    </div>
    </section>
    <!-- #funfacts Section end -->

   


    <!-- Contact Section end    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contact</h2>
                   
                  </div>
                </div> 
                <div class="clearfix contact-form">

      
                  <div class="col-sm-7">
                    <div class="map-wrapper">
                      <div id="map"></div>
                    </div>
                  </div> 

              
                  <div class="col-sm-5">
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                      <form action="#" id="contactForm" novalidate>
                        <div class="input-field">
                          <input id="contact_name" type="text" name="contactName" class="validate input-box">
                          <label for="contact_name" class="input-label">Name</label>
                        </div>
                        <div class="input-field">
                          <input id="email" type="email" name="contactEmail" class="validate input-box">
                          <label for="email" class="input-label">Email</label>
                        </div>
                        <div class="input-field">
                          <input id="subject" type="text" name="contactSubject" class="validate input-box">
                          <label for="subject" class="input-label">Subject</label>
                        </div>
                        <div class="input-field textarea-input">
                          <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                          <label for="textarea1" class="input-label">Message</label>
                        </div>
                        <div class="input-field submit-wrap clearfix">
                          <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                          <div class="right form-loader-area">
                            <svg class="circular size-20" height="20" width="20">
                              <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                            </svg>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end --><!--
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>MaterialX &copy; All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


 <script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/detectmobilebrowser.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="assets/js/gmaps.js"></script>
  <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/libs/materialize/js/materialize.min.js"></script>
  <script src="assets/libs/jwplayer/jwplayer.js"></script>
  <script src="assets/libs/sweetalert/sweet-alert.min.js"></script>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/main.js"></script>
          <!-- .container end -->
    <script>
    

    function hidea()
    {
      
      document.getElementById('act').style.display = "inline";
      document.getElementById('rede').style.display = "none";
      
    }
    
    function hider()
    {
      document.getElementById('act').style.display = "none";
      document.getElementById('rede').style.display = "inline";
      
    }
    hidea();
    
    </script>
</body>


</html>