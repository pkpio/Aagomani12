<meta http-equiv="refresh" content="4; url=http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/">
<?php
require_once '../include/functions.php';
//Redirect back to Registration page if he tried to land on this page without any details..
if(empty($_POST['name'])){
	header("Refresh: 0; url=http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/");
}
else{
$name 		= 	$_POST['name'];
$email	 	= 	$_POST['emailid'];
$password 	= 	$_POST['password'];
$password1  =	$_POST['repassword'];
$foneno 	= 	$_POST['mobile'];
$city 		= 	$_POST['city'];
$college 	= 	$_POST['college'];
$year 		= 	$_POST['year'];
$address	= 	$_POST['address'];
$remarks 	= 	$_POST['remarks'];
?>

<?php
if($password != $password1){
?>
<p align='center'><b style='color:#F00'>Passwords didn't match.</b> We are re-directing you now. Please re-enter your details and submit again.</p>
<?php
}
else{
//Checking if the email Id is already taken..
	if (dbUserexist($email) == '0') { //Change this to a code with number of rows..
	//Conformed that emailId wasn't taken ..
	//Generating random code..
	$random_code = get_rand_id(25); //We can change the length of the random code genrated by changing this number later. Not switching to Javascript
								//generation of code becoz its not reliable..

	//Inserting the values into Database..	
	$sql = "INSERT INTO tbl_user (user_name, user_password, user_email, user_phone, user_college, user_city, user_year, user_registered_time, user_last_login, user_address, user_remarks, random_code)
	VALUES ('$name', '$password', '$email', '$foneno', '$college', '$city', '$year', NOW(), NOW(), '$address', '$remarks', '$random_code')";
	dbQuery($sql);
?>
<p align="center">Registration successfull. You will be redirected in a while...</p>
<?php
	}
	else{
?>
<p align="center" style="color:#F00">EmailId already Registered! <a href="#">Forgot password?</a></p><!-- keep a small popup window over here for procedure of regaining control over account--> 
<?php
	}
}
}
?>