<?php
require_once '../../include/functions.php';
if(!empty($_GET['EndOfQuiz'])&&$_GET['EndOfQuiz']==1){
//	echo $_SESSION['quiz_answers'];
	$answers = $_SESSION['quiz_answers'];
	//Updating marks no matter if its in/ out of time submission. This is to have the users quiz data in every case. Late submissions will be considered while marking.
	$sql = "UPDATE tbl_user 
			       SET user_quiz_end = '1', user_quiz_answers = '$answers' 
				   WHERE user_email = '{$_SESSION['user_email']}'";
	dbQuery($sql);
	
	//Timing difference Accounting.
	$sql = "SELECT TIMESTAMPDIFF(MINUTE,user_quiz_start,NOW()) AS TimeDiff
					FROM tbl_user
					WHERE user_email = '{$_SESSION['user_email']}'";
	$result = mysql_query($sql) or die("error fetching details." . mysql_error());
	$quizdata = mysql_fetch_assoc($result);
//	echo $quizdata['TimeDiff'];
	if($quizdata['TimeDiff']>226){
	echo "We are sorry to inform this. You have run out of time by ".($quizdata['TimeDiff']-15)." minutes. As per the rules we are ignoring this submission. You may re-take the quiz by going back.<br/> P.S.: If you think that its a techincal problem please contact the Web Manager : Praveen Kumar at +91-882882-9765 ASAP. Thank You.";
	
//Logging the late submission into marks...Late submission details stored in marks as trash value 9999
	$sql = "UPDATE tbl_user 
			       SET user_quiz_marks = 'Late Submission. Not applicable.' 
				   WHERE user_email = '{$_SESSION['user_email']}'";
	dbQuery($sql);
	}
	else{
	echo "Submission successful!<br/> You think you can do better? Then what are you waiting for? Re-take the quiz by going back.<br/> Thanks for your interest. Marks will be announced soon. <br/> <br/> If you have faced any technical problems during the quiz please contact the Web Manager, Praveen Kumar @ +91-882882-9765";
	
//Get marks some how...
	require_once 'GetMarks.php';
	$marks = $marksScored;
	
	$sql = "UPDATE tbl_user 
			       SET user_quiz_marks = '$marks' 
				   WHERE user_email = '{$_SESSION['user_email']}'";
	dbQuery($sql);
	}
	if (isset($_SESSION['quiz_sequence'])) {
		unset($_SESSION['quiz_sequence']);
		unset($_SESSION['quiz_answers']);		
		session_unregister('quiz_sequence');	
		session_unregister('quiz_answers');
		session_destroy();
	}
	
}
else{
	if(isset($_GET['answer'])&&!empty($_GET['QNo'])){
		$answer = $_GET['answer'];
		$QNo	= $_GET['QNo'];
		
//For Set A Queastions....		
		if($QNo<2000){
//			echo "SetA";
			$QNo = $QNo-1000;
//			echo $QNo;
			$answers_old 	= $_SESSION['quiz_answers'];
			$explodeString 	= "SetAQ".$QNo."=";
			$answers_old_temp = $answers_old.$explodeString;
			$answers_new_temp 	= explode($explodeString, $answers_old_temp);	
//			echo $answers_new_temp[0]."SetAQ".$QNo."=".$answer.$answers_new_temp[1]."<br>";
//			echo $answers_new_temp[1];
			$answers_bug_correct = explode(";", $answers_new_temp[1], 2);
//			print_r($answers_bug_correct);
			$answers_new	= $answers_new_temp[0]."SetAQ".$QNo."=".$answer.";".$answers_bug_correct[1];
			$_SESSION['quiz_answers']	=	$answers_new;
			
			$newPageUrl = "GetQueastion.php?q=".($QNo+1);
			header( "Refresh: 0; url=$newPageUrl" );
		}
//For Set B Queastions....
		if($QNo<3000&&$QNo>2000){
//			echo "SetB";
			$QNo = $QNo-2015;
//			echo $QNo;
			$answers_old 	= $_SESSION['quiz_answers'];
			$explodeString 	= "SetBQ".$QNo."=";
			$answers_old_temp = $answers_old.$explodeString;
			$answers_new_temp 	= explode($explodeString, $answers_old_temp);	
//			echo $answers_new_temp[0]."SetBQ".$QNo."=".$answer.$answers_new_temp[1]."<br>";
//			echo $answers_new_temp[1];
			$answers_bug_correct = explode(";", $answers_new_temp[1], 2);
//			print_r($answers_bug_correct);
			$answers_new	= $answers_new_temp[0]."SetBQ".$QNo."=".$answer.";".$answers_bug_correct[1];
			$_SESSION['quiz_answers']	=	$answers_new;
			
			$newPageUrl = "GetQueastion.php?q=".($QNo+16);
			header( "Refresh: 0; url=$newPageUrl" );
		}
		
//For Set C Queastions....
		if($QNo<4000&&$QNo>3000){
//			echo "SetC";
			$QNo = $QNo-3030;
//			echo $QNo;
			$answers_old 	= $_SESSION['quiz_answers'];
			$explodeString 	= "SetCQ".$QNo."=";
			$answers_old_temp = $answers_old.$explodeString;
			$answers_new_temp 	= explode($explodeString, $answers_old_temp);	
//			echo $answers_new_temp[0]."SetCQ".$QNo."=".$answer.$answers_new_temp[1]."<br>";
//			echo $answers_new_temp[1];
			$answers_bug_correct = explode(";", $answers_new_temp[1], 2);
//			print_r($answers_bug_correct);
			$answers_new	= $answers_new_temp[0]."SetCQ".$QNo."=".$answer.";".$answers_bug_correct[1];
			$_SESSION['quiz_answers']	=	$answers_new;
			
			//Here extra condition to check end of questions..
			if($QNo<15){}
			else{$QNo = 999-31;}
			$newPageUrl = "GetQueastion.php?q=".($QNo+31);
			header( "Refresh: 0; url=$newPageUrl" );
		}
//	echo $_SESSION['quiz_answers'];
 echo "Loading Next Queastion....Please wait....";
	}
}
?>