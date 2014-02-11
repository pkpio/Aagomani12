<html>
<head>
<style type="text/css">
div#pune{
	padding:15px;
	width:280px;
	border-style:solid;
	border-width:1px;
	position:relative;
	left:-202px;
	top:40px;
	color:#000;
	font-size:16px; 
	letter-spacing: 1px;
	word-spacing: 2px;
	line-height:21px;
}
div#mumbai{
	padding:15px;
	width:280px;
	border-style:solid;
	border-width:1px;
	position:relative;
	left:213px;
	top:-55px;
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
  });
});
	</script>
</head>

<body>

<div id="tabDisplay">
<h1 align="left">Pre-Event Workshop Registration<span class="blu"> (free entry)</span></h1>
<p>  &nbsp; &nbsp; &nbsp; &nbsp; <span class="blu"><b>Aagomani 2012</b></span> presents you with an opportunity to give a free rein to your mesmeric charm. This pre-fest workshop acquaints you with the power of designing algorithms that recognize your voice commands, and equips you to participate in the <span class="blu"><b>Voice control car</b></span> competition at Aagomani 2012.</p><br/>

<h2 align="left">Prerequisite: </h2>
<p>* No prerequisites.</p>
<p>* Knowledge of Matlab, Concept of Fourier Transformation are plus</p><br/><br/>

<h2 align="left">Registration :</h2>

<div align="center">

<a class="tabDiv" href="#!/PreEventRegistration/Pune">
	<div id="pune">
    Workshop in Pune on 4th Feb<br/>
	Venue: Seminar Hall<br/>
	Register Now
    </div>
</a>
<a class="tabDiv" href="#!/PreEventRegistration/Mumbai">
	<div id="mumbai">
    Workshop in Mumbai on 12th Feb<br/>
	Venue: VJTI<br/>
	Register Now
    </div>
</a>
</div>
</div>
 </body>
