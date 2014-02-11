<html>
<head>
<style type="text/css">
img.left{
	width:250px;
	height:240px;
	float:left;
	padding-right:20px;
}
div#ConnectedCars{
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
div#RadarSystems{
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
div#NanoElectronicsSimulation{
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
<h1 align="left">Lectures</h1>
<p>  &nbsp; &nbsp; &nbsp; &nbsp; <span class="blu"><b>Aagomani 2012 </b></span>presents you Lectures, Eminent personalities, exotic topics and enlightening insights - A segment dedicated to spreading excellence.</p>

<div align="center">

<a class="tabDiv" href="#!/lectures/ConnectedCars" style="text-decoration:none;">
	<div id="ConnectedCars">
    <img src="images/ConnectedCars.jpg" class="left" />
    <p><span class="blu"><b>Connected Cars:</b></span><br/>Futurism is no longer a fad.
	Voila, a whole new world where cars ping each other to drive you home safely !
	Secure your seatbelt, rest back and experience speed - within and without.</p>
    </div>
</a><br/><br/>

<a class="tabDiv" href="#!/lectures/RadarSystems" style="text-decoration:none;">
	<div id="RadarSystems">
    <img src="images/RadarSystems.jpg" class="left" />
    <p><span class="blu"><b>Radar Systems:</b></span><br/>Defying ignorance has become a habit to us humans. We are not meant to walk blind. Neither is our brainchild - the aeroplane. Put humans with 20-20 vision in them all you want, but you're still headed for a fiery death. With visibility close to zero, and enemy aircrafts buzzing around you, you want a friend. RADAR.</p>
    </div>
</a><br/><br/>

<a class="tabDiv" href="#!/lectures/NanoElectronicsSimulation" style="text-decoration:none;">
	<div id="NanoElectronicsSimulation">
    <img src="images/NanoElectronicsSimulation.png" class="left" />
    <p><span class="blu"><b>A Decade of Nanoelectronics:</b></span><br/>All of us have nostalgic memories of solving huge resistor nets and calculating the equivalent resistance between two points for our 12th class examinations. We all
dreamt of just connecting a multimeter and experimentally procuring the resistance. But what do you do when the points between you have to get the resistance are just a few nanometers apart ?</p>
    </div>
</a><br/><br/>
</div>
</div>
 </body>
