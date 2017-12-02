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
  <title>Profile | Tango Theater</title>


<!--
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<script src="assets/bootstrap/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
-->

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

</script>
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">





<div data-widget-group="group1">
<div class="row">
<div class="col-md-12">


<div id="div_user_fields">
<div class="panel panel-default">


<div class="panel-body">

    <h4 style="font-family: tahoma;"><span style="margin-left: 1%"><strong><i class="fa fa-users"></i> User Information</strong></span></h4>
    <hr /><br />

    <form id="frm_customers" role="form" class="form-horizontal row-border">

        


        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">* Firstname :</label>
            <div class="col-md-7">
                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-users"></i>
                                                                </span>
                    <input type="text" name="cus_fname" class="form-control" value="<?php echo $_SESSION["cus_fname"] ; ?>" placeholder="Firstname" data-error-msg="Firstname is required!" required>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label"> Middlename :</label>
            <div class="col-md-7">
                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-users"></i>
                                                                </span>
                    <input type="text" name="cus_mname" class="form-control" value="<?php echo $_SESSION["cus_mname"];  ?>" placeholder="Middlename">
                </div>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">* Lastname :</label>
            <div class="col-md-7">
                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-users"></i>
                                                                </span>
                    <input type="text" name="cus_lname" class="form-control" value="<?php echo $_SESSION["cus_lname"]; ?>" placeholder="Lastname" data-error-msg="Lastname is required!" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">Birthdate :</label>

            <div class="col-md-7">
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="txt_bdate" name="cus_bdate" value="<?php echo $_SESSION["cus_bdate"] ?>" type="text" class="form-control" value="<?php echo date("m/d/Y"); ?>">
                </div>

            </div>

        </div>


        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">Address :</label>
            <div class="col-md-7">
                <textarea name="cus_address" class="form-control"><?php echo $_SESSION["cus_address"];  ?></textarea>
            </div>
        </div>

      
    

        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">Mobile No :</label>
            <div class="col-md-7">
                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-send"></i>
                                                                </span>
                    <input type="text" name="cus_mobile_no" class="form-control" value="<?php echo $_SESSION["cus_mobile_no"] ?>" placeholder="Mobile No">
                </div>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">Email Address :</label>
            <div class="col-md-7">
                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope-o"></i>
                                                                </span>
                    <input type="text" name="cus_email" class="form-control" value="<?php echo $_SESSION["cus_email"];   ?>" placeholder="Email Address">
                </div>
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">* Password :</label>
            <div class="col-md-7">
                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </span>
                    <input type="password" name="cus_password" class="form-control" placeholder="Password">
                </div>

                <span class="help-block m-b-none"><b><i class="fa fa-lock"></i> Update Password</b> (Please leave it blank if you do not want to update your password)</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">* Confirm Password :</label>
            <div class="col-md-7">
                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </span>
                    <input type="password" name="cus_confirm_password" class="form-control" placeholder="Confirm Password">
                </div>

                <span class="help-block m-b-none">Please make sure password match.</span>
            </div>
        </div>


         <!-- Modal Trigger -->
  <a style="visibility: hidden;" id="btn_modal" class="modal-trigger waves-effect waves-light btn" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" style="height: 250px;width: 300px;" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h6 >Notification</h6>
      <p id="modal-body-message"> </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
    </div>
  </div>




        <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label">Photo :</label>
            <div class="col-md-5">
                <div class="input-group">
                    <div class="" style="border:1px solid black;height: 230px;width: 210px;vertical-align: middle;">

                        <div id="div_img_user" style="position:relative;">
                            <img name="img_user" src="<?php echo $_SESSION["cus_photo"]; ?>" style="object-fit: fill; !important; height: 100%;width: 100%;" />
                            <input type="file" name="file_upload[]" class="hidden" style="visibility: hidden">
                        </div>

                        <div id="div_img_loader" style="display: none;">
                            <img name="img_loader" src="assets/img/loader/ajax-loader-sm.gif" style="display: block;margin:40% auto auto auto; " />
                        </div>
                    </div>

                    <button type="button" id="btn_browse" class="btn btn-primary "  style="margin-top: 2%;text-transform: capitalize;font-family: Tahoma, Georgia, Serif;">Browse Photo</button>
                    <button type="button" id="btn_remove_photo"  class="btn btn-primary" style="margin-top: 2%;text-transform: capitalize;font-family: Tahoma, Georgia, Serif;">Remove</button>
                </div>
            </div>
        </div>




    </form>


    <br /><br />








</div>
<div class="panel-footer">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-3">
            <button id="btn_save" class="btn-primary btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"><i class="fa fa-check-circle"></i> <span class=""></span>  Update Profile</button>
            <a id="btn_cancel" href="member.php" class="btn-danger btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"><i class="fa fa-check-circle"></i> <span class=""></span>  Cancel</a>
            </div>
    </div>


</div>
</div>
</div>






















    </div>
  </div>



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

<script>



  $('input[name="file_upload[]"]').change(function(event){
            var _files=event.target.files;

            //$('#div_img_user').hide();
            //$('#div_img_loader').show();


            var data=new FormData();
            $.each(_files,function(key,value){
                data.append(key,value);
            });


            $.ajax({
                url : 'upload.php',
                type : "POST",
                data : data,
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                    //console.log(response);
                    //alert(response.path);
                    //$('#div_img_loader').hide();
                   // $('#div_img_user').show();
                    $('img[name="img_user"]').attr('src',response.path);

                }
            });

        });





 $('#btn_save').click(function(){

            var serialData=$("#frm_customers").serializeArray(); //make data array from from element fields


        serialData.push({name : "cus_photo" ,value : $('img[name="img_user"]').attr('src')});
            console.log(serialData);

         $.ajax({
                dataType:"json",
                type: "POST",
                url:'engine/profileupdate.php', //call controller class/function to execute
                data:serialData,
                success:function(resultset) {
                    var objData=JSON.stringify(resultset); //convert json object to json array string
                    var data=JSON.parse(objData); //decode json array
                    $.each(data, function(v) {
                    });

                    //$("#msg-modal").modal('show');

                   //  $('.modal1').click();
                    //alert(data.msg);
                    $("#modal-body-message").html(data.msg);

                    $("#btn_modal").click();

                        },error: function(xhr, status, error) {
                          // check status && error

                            console.log(xhr);
                    }
                });



         }); //end of btn-yes





        $('#btn_browse').click(function(event){
            event.preventDefault();
            $('input[name="file_upload[]"]').click();
        });


        $('#btn_remove_photo').click(function(event){
            event.preventDefault();
            $('img[name="img_user"]').attr('src','images/member/anonymous-icon.png');
        });






</script>

</html>