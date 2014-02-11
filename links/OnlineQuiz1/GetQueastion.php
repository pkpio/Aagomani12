<?php
include_once '../../include/functions.php';
//if(0){echo "please login first" ;}
if(empty($_SESSION['user_email'])){ echo "please login first" ; }
else{
	require_once 'OrderToRandom.php';
	
//Generating link for each Question..
	echo "Jump to any question from here.<br/>" ;
// 1st set of queastions...
	for($i=1;$i<16;$i++){
		echo "<a href='GetQueastion.php?q=".$i."'>".$i." </a>";		
	}
//2nd set of queastions....	
	for($i=16;$i<31;$i++){
		echo "<a href='GetQueastion.php?q=".$i."'>".$i." </a>";		
	}
//3rd set of queastions....	
	for($i=31;$i<46;$i++){
		echo "<a href='GetQueastion.php?q=".$i."'>".$i." </a>";		
	}
//End of quiz....
	echo "<a href='GetQueastion.php?q=999'>End Quiz</a>";
	
	echo "<hr/>";
?>

<form action="quiz_submit.php" method="get">
<?php
	if(empty($_GET['q'])){
		echo $RandQstnSetA[0];
		echo "<br/><input type='hidden' name='QNo' value='1001' />";
		echo "<a href='GetQueastion.php?q=2'>Skip</a>";
	}
	else{
		//Set A queastion get...
		for($i=1;$i<16;$i++){
		$j = $i+1000;
		if(!empty($_GET['q']) && $_GET['q'] == $i){
		echo "Question Number ".$i."<br/>";
		echo $RandQstnSetA[$i-1] ;
		echo "<br/><input type='hidden' name='QNo' value='$j' />";
		echo "<a href='GetQueastion.php?q=".($i+1)."'>Skip</a>";		
		break;
		}
		}
		
		//Set B queastion get...
		for($i=16;$i<31;$i++){
		$j = $i+2000;
		if(!empty($_GET['q']) && $_GET['q'] == $i){
		echo "Question Number ".$i."<br/>";
		echo $RandQstnSetB[$i-16] ;
		echo "<br/><input type='hidden' name='QNo' value='$j' />";
		echo "<a href='GetQueastion.php?q=".($i+1)."'>Skip</a>";
		break;
		}
		}
		
		//Set C queastion get...
		for($i=31;$i<46;$i++){
		$j = $i+3000;
		if(!empty($_GET['q']) && $_GET['q'] == $i){
		echo "Question Number ".$i."<br/>";
		echo $RandQstnSetC[$i-31] ;
		echo "<br/><input type='hidden' name='QNo' value='$j' />";
		if($i<45){
			echo "<a href='GetQueastion.php?q=".($i+1)."'>Skip</a>";
		}
		else{
			echo "<a href='GetQueastion.php?q=999'>Skip</a>";
		}
		break;
		}
		}
		
		//End of Quiz...
		if(!empty($_GET['q']) && $_GET['q'] == 999)
		echo "Click on submit to end the quiz.<br/> <input type='hidden' name='EndOfQuiz' value='1' />";
	}
}
?>
<style>
li{
	list-style:none;
}
</style>
<input type="submit" value="Submit Answer" />
</form>