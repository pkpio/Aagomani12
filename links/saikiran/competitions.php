<html>
<head>
<style type="text/css">
#pointer{
	position:absolute;
	z-index:1000;
	visibility:hidden;
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).ready(function() {
		$pointer = $("#pointer");
		$dial = $("#dial");
		x0 = $dial.offset().left + 196; // width/2
		y0 = $dial.offset().top + 232; // vertical distance		
		$pointer.css({top:y0,left:x0,"visibility":"visible"});
	$("area").mouseover(function(){
		var id = this.id;
		if(id=="park-your-car"){dy=111-256,dx=121-239;document.getElementById("dial").src="images/self-parking-bot.png";};
		if(id=="voice-control-car"){dy=112-256,dx=367-239;document.getElementById("dial").src="images/voice-control-car.png";};
		rad = Math.atan2(dy,dx);
		$pointer.css({
			top:y0,left:x0,
			'transition' : 'transform 1s',			
			'-moz-transition' : '-moz-transform 1s',
			'-webkit-transition' : '-webkit-transform 1s',
			'-o-transition' : '-o-transform 1s;',
			'transform-origin': '44px 24px',
			'-moz-transform-origin': '44px 24px',
			'-webkit-transform-origin': '44px 24px',
			'-o-transform-origin': '44px 24px',
            'transform' : 'rotate('+ rad +'rad)',
            '-moz-transform' : 'rotate('+ rad +'rad)',
            '-webkit-transform' : 'rotate('+ rad +'rad)',
			'-o-transform' : 'rotate('+ rad +'rad)'
        });
	});
	$("area").mouseout(function(){
		document.getElementById("dial").src="images/competations.png";
	});
  $("area").click(function(){
  	$url=this.href.split("#!/");
	$url = $url[1];
	$('#content').load('links/'+$url+'.php');
  });
});
	</script>
</head>

<body>

<div id="tabDisplay">
<p><span class="blu"><b>Self parking bot : </b></span>Parking cars manually is so last decade. Mechanomaniacs all - welcome to efficiency ! Performance parking is no longer a dream as your bot's grey molecules whiz it right into the parking space.</p>
<div align="center">
<img id="pointer" src="images/point.png" />
<img id="dial" src="images/competations.png" alt="Competitions" usemap ="#dialmap" />
<map name="dialmap">
  <area id="park-your-car" shape="rect" coords="112,122,207,217" href="#!/competitions/SelfParkingBot" />
  <area id="voice-control-car" shape="rect" coords="267,122,367,217" href="#!/competitions/VoiceControlCar" />
</map></div>
<br/>
<p><span class="blu"><b>Voice-control car : </b></span>Unleash the mesmeric charm in your voice, and watch, as your car does a dog-on-a-leash.
Whistle for it to come, shoo it away, tempt it with promises of car biscuits.
Whoever said your car is inanimate !</p>
</div>
 </body>
