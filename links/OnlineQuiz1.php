<?php
require_once '../include/database.php';
if (!isset($_SESSION['user_email'])){echo "please login first" ;}
else{
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aagomani12-Online Quiz</title>
<!--Timer Script-->
<script type="text/javascript">
var m=01,s=40;
function countdn(){
	if(s==59){
	s=58;
	}
	if(s==0&&m!=0){
	m-=1;
	s=59;
	}
	if(s>0 &&s!=59){
	s-=1;
	}
	if(s<=9){
	s="0"+s;
	}
	document.getElementById("timer").innerHTML=m+":"+s;
	if(!(s==0&&m==0)){
	setTimeout("countdn()",1000);
	}
	if(s<30&&m==1){
	document.getElementById("timer").style.color="red"
	}
	if(s==0&&m==0){
	
	}
}
countdn()
</script>
<style>
#time{
	color:#000;
	position:relative;
	left:649px;
	top:-24px;
}
</style>
</head>

<body onLoad="countdn()">
<script></script>
<span class="blu"><b>Aagomani12 - Online Quiz</b></span><div id="time">Time Left : <span id="timer"></span></div>

<iframe src="links/quiz/GetQueastion.php" style="width:100%; height:500px;" />
</body>
</html>
<?php
}
?>