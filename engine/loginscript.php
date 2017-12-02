
<?php

include('../includes/dbconnection.php');
$username = $_POST['username'];
$password = sha1($_POST['password']);
$sql = "
SELECT 
	* FROM customers 
INNER JOIN cards 
ON customers.card_id = cards.card_id
WHERE 
cus_username ='$username'  AND  cus_password='$password' AND customers.is_deleted = 0
";

$result = $con->query($sql);

$row = $result->fetch_assoc();
if( $result->num_rows > 0 ){
	session_start();
			
			$_SESSION["userid"]    			= $row['customer_id'];
			$_SESSION["username"]  			= $row['cus_username'];
			$_SESSION["cus_fname"] 			= $row['cus_fname'];
			$_SESSION["cus_mname"] 			= $row['cus_mname'];
			$_SESSION["cus_lname"] 			= $row['cus_lname'];
			$_SESSION["cus_password"] 		= $row['cus_password'];
			$_SESSION["cus_photo"]    		= $row['cus_photo'];
			$_SESSION["cus_bdate"]    		= $row['cus_bdate'];
			$_SESSION["cus_mobile_no"]      = $row['cus_mobile_no'];
			$_SESSION["cus_email"]    		= $row['cus_email'];
			$_SESSION["cus_address"]    	= $row['cus_address'];
			$_SESSION["card_code"]    		= $row['card_code'];
			$_SESSION["date_created"]    	= $row['date_created'];
			$_SESSION['login'] 	   			= true;
			

echo "<script>window.location.href='../member.php'</script>";
}else{


echo "<script>window.location.href='../invalid.php'</script>";
}











?>





