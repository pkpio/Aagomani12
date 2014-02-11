<?php
require_once 'include/functions.php';
$email = $_SESSION['user_email'] ;

//Generating a random sequence for the user...
$count = 0;
for ($i = 0;$i < 25; $i++){
	$array[$i] = 0;
}
$sequence = '';
while ( $count < 25 ){	
	$flag = 0;
	$rand = rand (1, 25);
	for ( $j = 0; $j <= $count ; $j++){
		if ( $rand != $array[$j] )
			continue;
		else{
			$flag = 1;
			break;
			}
		}
	if ( $flag != 1 ){
			$array[$count] = $rand;
//			echo $count."-".$rand."<br>";
			$sequence = $sequence . $rand.',';
			$count += 1;
		}
}
echo "Starting Quiz..";
//echo $sequence;
//Saving the sequence in a session for further use...
$answers = '';
for($i=1;$i<16;$i++){
	$answers = $answers."SetAQ".$i."=;";
}
for($i=1;$i<16;$i++){
	$answers = $answers."SetBQ".$i."=;";
}
for($i=1;$i<16;$i++){
	$answers = $answers."SetCQ".$i."=;";
}
//echo $answers;

$_SESSION['quiz_sequence'] = $sequence;
$_SESSION['quiz_answers']  = $answers;

// log the time when the Quiz Session has started..
$sql = "UPDATE tbl_user 
        SET user_quiz_start = NOW(), user_quiz_sequence = '$sequence' 
		WHERE user_email = '{$email}'";
		dbQuery($sql);
//Redirect him now...
		$redirectionTime = 0;
		$newPageUrl = "http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/#!/OnlineQuiz/InterCollegeQuiz";
		header( "Refresh: $redirectionTime; url=$newPageUrl" );
?>