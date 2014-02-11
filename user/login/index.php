<?php
require_once '../../include/functions.php' ;
if(!empty($_POST['email']) && !empty($_POST['password'])){
//	$email 		= 	$_POST['email'];
//	$password 	= 	$_POST['password'];
	

	$result = doLogin();
	if($result == "false"){
		echo "<p style=\"color:#F00\"> Authentication failed ! Invalid username password combination! Please try again.</p> " ;
		//Redirect him now...
			$redirectionTime = 1;
			$newPageUrl = "http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/";
			header( "Refresh: $redirectionTime; url=$newPageUrl" );
	}
}
else{
	header('Location:  http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/');
}
?>