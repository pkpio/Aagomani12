<html>
<head>
<style type="text/css">
img.left{
	width:250px;
	height:240px;
	float:left;
	padding-right:20px;
}
div#ImageProcessing{
	padding:15px;
	width:630px;
	height:250px;
	border-style:solid;
	border-width:1px;
	position:relative;
	top:40px;
	color:#000;
	font-size:16px; 
	letter-spacing: 1px;
	word-spacing: 2px;
	line-height:21px;
}
div#ControlsWorkshop{
	padding:15px;
	width:630px;
	height:250px;
	border-style:solid;
	border-width:1px;
	position:relative;
	top:40px;
	color:#000;
	font-size:16px; 
	letter-spacing: 1px;
	word-spacing: 2px;
	line-height:21px;
}
div#E-Prayog{
	padding:15px;
	width:630px;
	height:250px;
	border-style:solid;
	border-width:1px;
	position:relative;
	top:40px;
	color:#000;
	font-size:16px; 
	letter-spacing: 1px;
	word-spacing: 2px;
	line-height:21px;
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).ready(function() {
	  document.getElementById("loadingImage").style.visibility="hidden";
  $("a.tabDiv").click(function(){
  	$url=this.href.split("#!/");
	$url = $url[1];
	$('#content').load('links/'+$url+'.php');
	  document.getElementById("loadingImage").style.visibility="visible";
  });
});
	</script>
</head>

<body>

<div id="tabDisplay">
<h1 align="left">Workshops</h1>
<!--
<p>  &nbsp; &nbsp; &nbsp; &nbsp; <span class="blu"><b>Aagomani 2012 </b></span>presents you Lectures, Eminent personalities, exotic topics and enlightening insights - A segment dedicated to spreading excellence.</p>-->

<div align="center">

<a class="tabDiv" href="#!/Workshops/ImageProcessing" style="text-decoration:none;">
	<div id="ImageProcessing">
    <img src="images/ImageProcessing.jpg" class="left" />
    <p><span class="blu"><b>Image Processing:</b></span><br/>"How I wonder what you are, Up above the world so high".
No more wonders. Spice your MIG up with the latest image processing technologies, and the target's yours to conquer !
Goodbye, inaccuracy.</p>
    </div>
</a><br/><br/>

<a class="tabDiv" href="#!/Workshops/ControlsWorkshop" style="text-decoration:none;">
	<div id="ControlsWorkshop">
    <img src="images/ControlsWorkshop.png" class="left" />
    <p><span class="blu"><b>Controls Workshop:</b></span><br/>Anti-lock Braking System (ABS):
Yeah. We just are NOT kidding. Succumb to the magic of feedabck control systems and design the backbone of tomorrow's vehicles.
The braking system of the future is here at Aagomani for you to simulate.
Lose yourself in the marvels of engineering !</p>
    </div>
</a><br/><br/>

<a class="tabDiv" href="#!/Workshops/E-Prayog" style="text-decoration:none;">
	<div id="E-Prayog">
    <img src="images/E-Prayog.png" class="left" />
    <p><span class="blu"><b>E-Prayog:</b></span><br/>
    In recent years, there has been tremendous progress in the field of electronics, which has made very sophisticated components and ICs available to the student. As a result, it has become possible to develop complex electronic circuits in a reasonable time.</p>
    </div>
</a><br/><br/>
</div>
</div>
 </body>
