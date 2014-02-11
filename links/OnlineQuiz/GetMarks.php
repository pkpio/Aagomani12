<?php
require_once 'OrderToRandom.php';
$answers = $_SESSION['quiz_answers'];

$pattern = "/[=|\;]/"; 
$a = preg_split($pattern, $answers);
//print_r($a);
//echo $a[0];
$j=0;
for($i=1;$i<90;$i++){
	$GivenAnswer[$j] = $a[$i];
//	echo $j."is".$GivenAnswer[$j]."<br/>";
	$i++;$j++;	
}

//To get Actual answers..
$sequence = $_SESSION['quiz_sequence'];
$array 	  = explode(",", $sequence);

//Checking Correctnes of each answer...
$marksScored = '0';
	for($i=0;$i<15;$i++){
		if($GivenAnswer[$i] == $OrderAnsSetA[$array[$i]-1]){
		$marksScored++;
		}
	}
	for($i=0;$i<15;$i++){
		if($GivenAnswer[$i+15] == $OrderAnsSetB[$array[$i]-1]){
		$marksScored++;
		}
	}
	for($i=0;$i<15;$i++){
		if($GivenAnswer[$i+30] == $OrderAnsSetC[$array[$i]-1]){
		$marksScored++;
		}
	}
//	echo $marksScored;
for($i=0;$i<15;$i++){
	
}

?>