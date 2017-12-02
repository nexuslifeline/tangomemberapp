
<?php

	session_start();

		include('../includes/dbconnection.php');
		$customer_id 	 = $_SESSION["userid"];
		$cus_lname 		 = $_POST['cus_lname'];
		$cus_fname 		 = $_POST['cus_fname'];
		$cus_mname 		 = $_POST['cus_mname'];
		$cus_address 	 = $_POST['cus_address'];
		$cus_email 	  	 = $_POST['cus_email'];
		$cus_mobile_no   = $_POST['cus_mobile_no'];
		$cus_username    = $cus_email;
		$pwd   			 = $_POST['cus_password'];
		$cpwd   		 = $_POST['cus_confirm_password'];
		$cus_password    = sha1($_POST['cus_password']);
		$cus_bdate 		 = $_POST['cus_bdate'];
		$cus_photo 		 = $_POST['cus_photo'];
	$email_exist = email_exist($cus_email,$customer_id);


if(empty($pwd) && empty($cpwd) ){

	$cus_password = $_SESSION['cus_password'];

}

if($cpwd==$pwd){


				if(!empty($cus_fname)  && !empty($cus_lname) && !empty($cus_email)&& 
				!empty($cus_bdate) ){

						if($email_exist->num_rows > 0  ){
									
									$stats =true;
									$msg  ="Email Already Exist ! ";

							}else{

								$sql =
								"UPDATE 
										`customers` 
								SET 
										`cus_lname`='$cus_lname',
										`cus_fname`='$cus_fname',
										`cus_mname`='$cus_mname',
										`cus_photo`='$cus_photo',
										`cus_address`='$cus_address',
										`cus_email`='$cus_email',
										`cus_mobile_no`='$cus_mobile_no',
										`cus_username`='$cus_email',
										`cus_password`='$cus_password',
										`cus_bdate`='$cus_bdate'
							 	WHERE 	`customer_id`=$customer_id ";

								$result = $con->query($sql);
										$_SESSION["username"]  			= $cus_email;
										$_SESSION["cus_fname"] 			= $cus_fname;
										$_SESSION["cus_mname"] 			= $cus_mname;
										$_SESSION["cus_lname"] 			= $cus_lname;
										$_SESSION["cus_photo"]    		= $cus_photo;
										$_SESSION["cus_bdate"]    		= $cus_bdate;
										$_SESSION["cus_mobile_no"]      = $cus_mobile_no;
										$_SESSION["cus_email"]    		= $cus_email;
										$_SESSION["cus_address"]    	= $cus_address;
										
										$stats =true;
										$msg  ="Profile Successfully updated!";


							}


				}else{

										$stats =true;
										$msg  ="Please fill the required fields!";

				}

					


}else{


$stats = false;
$msg   = 'Password Dont Match! ';



}




echo json_encode(array(
        'stats'=>$stats,
        'msg'=>  $msg
    ));










function email_exist($cus_email,$userid){
	include('../includes/dbconnection.php');
	$sql ="SELECT * FROM customers WHERE cus_email ='$cus_email' AND `customer_id` != $userid ";
	$result = $con->query($sql);
return  $result;

}




?>