<?php
if(0){echo "please login first" ;}
//if(empty($_SESSION['user_email'])){ echo "please login first" ; }
else{
	require_once 'OrderToRandom.php';
	
//Generating link for each Queastion..
	echo "Jump to any queastion from here.<br/>" ;
	for($i=1;$i<21;$i++){
		echo "<a href='GetQueastion.php?q=".$i."'>".$i." </a>";		
	}
	echo "<hr/>";

	for($i=0;$i<50;$i++){
	if(!empty($_GET['q']) && $_GET['q'] == $i){
		echo $RandQstn[$i] ;
		break;
	}
	}
}
?>