<?php
require_once 'include/functions.php';
//Debugging...
echo $_POST['name0'];

//Post values for Admin Which will exist for sure..
//Categorize based on kind of user..
if(!empty($_POST['name0'])){
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
	$email0	 	= 	$_POST['emailid0'];
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
	$email1	 	= 	$_POST['emailid1'];
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
	$email2	 	= 	$_POST['emailid2'];
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
	$email3	 	= 	$_POST['emailid3'];
}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aagomani 2k12 - Registration</title>
</head>

<body>
<?php
//This code is to ensure that passwords are the same. There by we will ensure that the user has enabled JavaScript in his browser...
//Similarly for all other passwords..
if($password0 != $repassword0 || $password1 != $repassword1 || $password2 != $repassword2 || $password3 != $repassword3){
?>
<p align="center"><b style="color:#F00">Passwords didn't match.</b> Please enable Javascript in your browser before you continue !</p>
<?php
}
else{	
//Registering all new users if any..
	if($_POST['user_type0'] == '1'){
	$random_code0 = get_rand_id(25); 	
	$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
	VALUES ('$name0', '$password0', '$email0', '$mobile0', '$college0', '$city0', '$year0', NOW(), '$address0', '$remarks0', '$random_code0')";
	dbQuery($sql);
	}
	if($_POST['user_type1'] == '1'){
	$random_code1 = get_rand_id(25);	
	$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
	VALUES ('$name1', '$password1', '$email1', '$mobile1', '$college1', '$city1', '$year1', NOW(), NOW(), '$address1', '$remarks1', '$random_code1')";
	dbQuery($sql);
	}
	if($_POST['user_type2'] == '1'){
	$random_code2 = get_rand_id(25);	
	$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
	VALUES ('$name2', '$password2', '$email2', '$mobile2', '$college2', '$city2', '$year2', NOW(), NOW(), '$address2', '$remarks2', '$random_code2')";
	dbQuery($sql);
	}
	if($_POST['user_type3'] == '1'){
	$random_code3 = get_rand_id(25);	
	$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
	VALUES ('$name3', '$password3', '$email3', '$mobile3', '$college3', '$city3', '$year3', NOW(), NOW(), '$address3', '$remarks3', '$random_code3')";
	dbQuery($sql);
	}
//Registering a Team..	
	$sql = "INSERT INTO tbl_registrations (reg_leader_email, reg_member1_email, reg_member2_email, reg_member3_email, reg_event, reg_time)
	VALUES ('$email0', '$email1', '$email2', '$email3', '$reg_event', NOW())";
	dbQuery($sql);  
?>
<p align="center">Registration successfull. You will be redirected in a while...</p>
<?php
}
}
else{
//	header("Refresh: 1; url=http://www.google.com");
}
?>
</body>
</html>