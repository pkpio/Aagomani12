<?php
require_once 'include/functions.php';

//Post values for Admin Which will exist for sure..
//Categorize based on kind of user..
if(!empty($_POST['emailid0'])||!empty($_POST['emailid01'])){
	$reg_event = $_POST['comp_name'];
if($_POST['user_type0'] == '1'){
	$name0 		= 	$_POST['name0'];
	$email0	 	= 	$_POST['emailid0'];
	$password0 	= 	$_POST['password0'];
	$repassword0 =	$_POST['repassword0'];
	$mobile0 	= 	$_POST['mobile0'];
	$city0 		= 	$_POST['city0'];
	$college0 	= 	$_POST['college0'];
	$year0 		= 	$_POST['year0'];
	$address0	= 	$_POST['address0'];
	$remarks0 	= 	$_POST['remarks0'];
}else{
	$email0	 	= 	$_POST['emailid01'];
}
	
//!empty function for different post values..
if($_POST['user_type1'] == '1'){
	$name1 		= 	$_POST['name1'];
	$email1	 	= 	$_POST['emailid1'];
	$password1 	= 	$_POST['password1'];
	$repassword1 =	$_POST['repassword1'];
	$mobile1 	= 	$_POST['mobile1'];
	$city1 		= 	$_POST['city1'];
	$college1 	= 	$_POST['college1'];
	$year1 		= 	$_POST['year1'];
	$address1	= 	$_POST['address1'];
	$remarks1 	= 	$_POST['remarks1'];
}else{
	$email1	 	= 	$_POST['emailid11'];
}
//!empty function for different post values..
if($_POST['user_type2'] == '1'){
	$name2 		= 	$_POST['name2'];
	$email2	 	= 	$_POST['emailid2'];
	$password2 	= 	$_POST['password2'];
	$repassword2 =	$_POST['repassword2'];
	$mobile2 	= 	$_POST['mobile2'];
	$city2 		= 	$_POST['city2'];
	$college2 	= 	$_POST['college2'];
	$year2 		= 	$_POST['year2'];
	$address2	= 	$_POST['address2'];
	$remarks2 	= 	$_POST['remarks2'];
}else{
	$email2	 	= 	$_POST['emailid21'];
}
//!empty function for different post values..
if($_POST['user_type3'] == '1'){
	$name3 		= 	$_POST['name3'];
	$email3	 	= 	$_POST['emailid3'];
	$password3 	= 	$_POST['password3'];
	$repassword3 =	$_POST['repassword3'];
	$mobile3 	= 	$_POST['mobile3'];
	$city3 		= 	$_POST['city3'];
	$college3 	= 	$_POST['college3'];
	$year3 		= 	$_POST['year3'];
	$address3	= 	$_POST['address3'];
	$remarks3 	= 	$_POST['remarks3'];
}else{
	$email3	 	= 	$_POST['emailid31'];
}
		
?>
<?php
//Defining a $error_message for user wise error reporting....
$error_message = "<p align='center'><b style='color:#F00'>Error!! Passwords didn't match.</b><br/></p>" ;
//Registering all new users if any..

	if($_POST['user_type0'] == '1'){
		
		if($password0 == $repassword0){
		$random_code0 = get_rand_id(25); 	
		$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
				VALUES ('$name0', '$password0', '$email0', '$mobile0', '$college0', '$city0', '$year0', NOW(), NOW(), '$address0', '$remarks0', '$random_code0')";
		dbQuery($sql);
		}
		else{
			$error_message += "User1 not registered. <br/>";
		}
	}
	
	
	if($_POST['user_type1'] == '1'){
		if($password1 == $repassword1){
		$random_code1 = get_rand_id(25);	
		$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
				VALUES ('$name1', '$password1', '$email1', '$mobile1', '$college1', '$city1', '$year1', NOW(), NOW(), '$address1', '$remarks1', '$random_code1')";
		dbQuery($sql);
		}
		else{
			$error_message += "User2 not registered. <br/>";
		}
	}
			
				
	if($_POST['user_type2'] == '1'){
		if($password2 == $repassword2){
		$random_code2 = get_rand_id(25);	
		$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
		VALUES ('$name2', '$password2', '$email2', '$mobile2', '$college2', '$city2', '$year2', NOW(), NOW(), '$address2', '$remarks2', '$random_code2')";
		dbQuery($sql);
		}
		else{
			$error_message += "User3 not registered. <br/>";
		}
	}
		
		
	if($_POST['user_type3'] == '1'){
		if($password3 == $repassword3){
		$random_code3 = get_rand_id(25);	
		$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
		VALUES ('$name3', '$password3', '$email3', '$mobile3', '$college3', '$city3', '$year3', NOW(), NOW(), '$address3', '$remarks3', '$random_code3')";
		dbQuery($sql);
		}
		else{
			$error_message += "User4 not registered. <br/>";
		}
	}
		
		
	
//Registering a Team..	
	$sql = "INSERT INTO tbl_registrations (reg_leader_email, reg_member1_email, reg_member2_email, reg_member3_email, reg_event, reg_time)
	VALUES ('$email0', '$email1', '$email2', '$email3', '$reg_event', NOW())";
	dbQuery($sql);  
?>
<?php
	if($error_message != "<p align='center'><b style='color:#F00'>Error!! Passwords didn't match.</b><br/></p>"){
	echo "exceptions" . $error_message . "Other users registered successfully.<br/> <b style='color:#F00'>Please enable Javascript in your browser before you continue !</b>" ;
	}
	header("Refresh: 1; url=http://www.ee.iitb.ac.in/uma/~eesa/aagomani12");
}
else{
	echo " No data received !!" ;
	header("Refresh: 1; url=http://www.ee.iitb.ac.in/uma/~eesa/aagomani12");
}
?>
<p align="center">Registration successfull. You will be redirected in a while...<br/></p>