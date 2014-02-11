<html>
<head>
<style type="text/css">
/*#tablist{
	background-color:#23586a;
}*/
#tabs{
	display:none;
}
ul.tabs
{
	width:100%;
list-style-type:none;
margin:0;
padding:0;
padding-top:6px;
padding-bottom:6px;
}
ul.tabs li
{
	width:100%;
	padding:0;
	margin:0;
display:inline;
}
ul.tabs a:link,a:visited
{
width:100%;
font-weight:bold;
color:#23586a;
background-color:#98bf21;
text-align:center;
margin:0;
padding:6px;
text-decoration:none;
text-transform:uppercase;
}
ul.tabs a:hover,a:active
{
background-color:#FFFFFF;
}

#image1{
	width:100px;
	height:100px;
	z-index:0px;
	position:relative;
	top:-180px;
	right:510px;
}
#image2{
	width:100px;
	height:100px;
	z-index:0px;
	position:relative;
	top:-180px;
	right:180px;
}
#pointer{
	z-index:1000;
}

/* Tabs CSS*/


        #ie-test { position: relative; width: 100%; }
        #boxLinks { list-style: none; overflow: hidden; }
        #boxLinks li {  display: inline; }
        #boxLinks li a { padding: 5px 10px; color: #23586a; text-decoration: none; border: 1px solid #ccc; float: left; display: block; margin-left: -1px; position: relative; left: 1px; }
        #boxLinks li a:hover { color: #fff; background: #23586a; }
        #box {
			 height: 550px; border: 1px solid #ccc; overflow: hidden; padding: 0px 30px 0px 30px; position: relative; top: -1px;
			 
	font-size:16px; 
	letter-spacing: 1px;
	word-spacing: 2px;
	line-height:28px;
	font-family: 'Droid Sans', Arial, sans-serif;
	
			  }
        .box { display: none; height: 550px; overflow: auto; display: block; position: relative; overflow-x: hidden;
	font-family: 'Droid Sans', Arial, sans-serif; }
		.box p{	
	font-size:14px; 
	letter-spacing: 1px;
	word-spacing: 2px;
	line-height:28px;
	text-align:justify;
	
	}
	.box h4 {
	letter-spacing: 1px;
	font-size:16px;
	line-height:28px;
	color:#23586a;
	text-align:center;
	font-weight:800;
	}
        #box1:target, #box2:target, #box3:target { display: block; }
	img#floatright {
		width:250px;
		height:250px;
float: right;
margin: 10px 10px 10px 40px;
border: 2px solid #333;
border-image: initial;
}
img#dial{
	width:480px;
	height:359px;
}

    </style>
    
    <!--[if IE]>
    <style type="text/css">
        .box { display: block; }
        #box { overflow: hidden;position: relative; }
        b { position: absolute; top: 0px; right: 0px; width:1px; height: 251px; overflow: hidden; text-indent: -9999px; }
    </style>
    <![endif]-->









<script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).ready(function() {
		$pointer = $("#pointer");
		$dial = $("#dial");
		x0 = $dial.offset().left + 241; // width/2
		y0 = $dial.offset().top + 261; // vertical distance		
		$pointer.css({top:y0,left:x0});
	$("area").mouseover(function(){
		var id = this.id;
		if(id=="image-processing"){dy=111-256,dx=121-239;document.getElementById("dial").src="images/image-processing.png";};
		if(id=="controls"){dy=112-256,dx=367-239;document.getElementById("dial").src="images/controls.png";};
		rad = Math.atan2(dy,dx);
		$pointer.css({
			top:y0,left:x0,
			'transition' : 'transform 1s',			
			'-moz-transition' : '-moz-transform 1s',
			'-webkit-transition' : '-webkit-transform 1s',
			'-o-transition' : '-o-transform 1s;',
			'transform-origin': '0% 50%',
			'-moz-transform-origin': '0% 50%',
			'-webkit-transform-origin': '0% 50%',
			'-o-transform-origin': '0% 50%',
            'transform' : 'rotate('+ rad +'rad)',
            '-moz-transform' : 'rotate('+ rad +'rad)',
            '-webkit-transform' : 'rotate('+ rad +'rad)',
			'-o-transform' : 'rotate('+ rad +'rad)'
        });
	});
	$("area").mouseout(function(){
		document.getElementById("dial").src="images/workshops.png";
	});
  $("area").click(function(){
  	$page=this.id;
	$("#tabDisplay").fadeOut(300,function(){
		document.getElementById("tabDisplay").innerHTML = document.getElementById($page+"1").innerHTML;
	});
	$("#tabDisplay").fadeIn(300);
	return false;
  });
  $("div.elec a").click(function(){
  	$page=this.id;
	$("#tabDisplay").fadeOut(300,function(){
	document.getElementById("tabDisplay").innerHTML = document.getElementById($page+"1").innerHTML;
	});
	$("#tabDisplay").fadeIn(300);
	window.location.href+="/"+$page;
	return false;
  });
});
	</script>
</head>

<body>

<div id="tabDisplay">
<p><span class="blu"><b>Image processing workshop : </b></span>"How I wonder what you are, Up above the world so high".
No more wonders. Spice your MIG up with the latest image processing technologies, and the target's yours to conquer !
Goodbye, inaccuracy.</p>
<div align="center">
<img id="pointer" src="images/point.png" />
<img id="dial" src="images/workshops.png" alt="Competitions" usemap ="#dialmap" />
<map name="dialmap">
  <area id="image-processing" shape="rect" coords="112,122,207,217" href="#" />
  <area id="controls" shape="rect" coords="267,122,367,217" href="#" />
</map>
</div>
<br/>
<p><span class="blu"><b>Controls workshop : </b></span>Anti-lock Braking System (ABS):
Yeah. We just are NOT kidding. Succumb to the magic of feedabck control systems and design the backbone of tomorrow's vehicles.
The braking system of the future is here at Aagomani for you to simulate.
Lose yourself in the marvels of engineering !</p>
</div>



<div id="tabs">
	
    <!-- park-your-car Tabs list ------------->
	 <div id="image-processing1">
     	<h1>Image Processing</h1>
    	<ul id="boxLinks" class="group">
		<li><b><a href="#box1">Introduction</a></b></li>
        <li><b><a href="#box2">Content Outline</a></b></li>
        <li><b><a href="#box3">Rules</a></b></li>
        <li><b><a href="#box4">Registration</a></b></li>
        <li><b><a href="#box5">Payment</a></b></li>
    	</ul>
        
         <div id="box">
              
              <div id="box1" class="box"><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <img src="images/park-your-car.jpg" id="floatright" />
              <p>"Don't just defeat your enemies, destroy them."<br/>

Ever wondered how Indian Air Force shoots its target so precisely from hundreds of meters?<br/>

Deliver yourself to the 'inner joy' of consummate sharpshooting. Empowered by the omnipotence of image processing, watch your adrenaline levels shoot up as enemy buildings crumble into rubble.<br/>

Here at Aagomani, we bring you an opportunity to make your hands dirty locking onto targets. Just let go !</p>
              </div>
              
              
              <div id="box2" class="box"><br/>
              <h2 align="left">Content Outline :</h2>
<p align="left"><b>*</b> Conceptualising an image and video</p>
<p align="left"><b>*</b> Images in different formats (RGB and grey scale)</p>
<p align="left"><b>*</b> Converting the images from one format to another</p>
<p align="left"><b>*</b> Identifying the potent targets</p>
<p align="left"><b>*</b> Eliminating the misinterpreted targets</p>
<p align="left"><b>*</b> Locking the targets</p>
<p align="left"><b>*</b> Tracking the targets</p><br/>
              
              </div>

              <div id="box3" class="box"><br/>
              <h2 align="left">RULES :</h2>

<p align="left"><b>*</b> Each team can consist of a maximum of 2 persons.</p>
<p align="left"><b>*</b> Each team must bring their own laptop.</p>
<p align="left"><b>*</b> Only the knowledge of C/C++ is required as this a basic level workshop.</p><br/>
              </div>
              
              
              <div id="box4" class="box"><br/>
              		
                    <h1>REGISTER</h1>
              		<p align="center">Registration opens from 26th January,2012.</p>
    				 <!-- Open this on 26th Jan----------- 

   					<form style="margin:30px 0px 0px 24px;" method="post" action="event_reg_submit.php">
              		<input type="hidden" value="park-car" name="comp_name" />
    
    				<label for="participants">Number of Participants including team leader :</label>
					<select id="participants" onChange="createForm(this.selectedIndex)">
					<option selected="selected">Choose</option>
    				<option>1</option>
   					<option>2</option>
    				<option>3</option>
					</select><br/><br/>
             		<?php require_once 'event_registration.php' ; ?>
                    </form>
                    -->
              </div>
              
              
              <div id="box5" class="box"><br/>
              <h2 align="left">PAYMENT :</h2>

<p align="left"><b>*</b> Payment details will be available soon.</p><br/>
              </div>
              
              
           </div>
        
     	 </div>
         
  
         
         
    <!-- voice-control-car Tabs list ------------->
         
       <div id="controls1">
     	<h1>Controls</h1>
    	<ul id="boxLinks" class="group">       
		<li><b><a href="#box1">Introduction</a></b></li>
        <li><b><a href="#box2">Task and Setup</a></b></li>
        <li><b><a href="#box3">Game procedure</a></b></li>
        <li><b><a href="#box4">Rules</a></b></li>
        <li><b><a href="#box5">Registration</a></b></li>
    	</ul>
        
         <div id="box">
              
              <div id="box1" class="box"><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <img src="images/voice_control_car.jpg" id="floatright" />
              <p>In a world of increasing sophistication, and security, new technologies are forever in demand. Your voice and the frequencies within are as unique as the whorls in your fingerprints. That said, we can't just keep our mouths shut. Speaking is second nature to humans, and is therefore a very intuitive method of data input and human computer interface. A quick one too.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ever dreamed of being in a batmobile ? That might seem far removed from reality, but we at Aagomani bring you one step closer to your dream car. One that responds to your voice. Your voice alone. Flatter yourself, make the meanest speech recognition device ever, and ride away to glory !</p>
              </div>
              
              
              <div id="box2" class="box"><br/>
              <h2 align="left">TASK :</h2>
<p>Build a hardware device which recognizes 4 navigational voice commands namely go, stop, left and right and convey the same using simple 4 wire interface.</p>
			  <h2 align="left">SETUP :</h2>
<p align="left"><b>*</b> The voice commands are taken as input by an external device built by participants. This &nbsp;&nbsp;device is supposed to recognize four voice commands by doing some sort of speech &nbsp;&nbsp;processing and make corresponding signal logically high.</p>
<p align="left"><b>*</b> An interfacing circuit provided by us read these four signals corresponding to go, stop, &nbsp;&nbsp;left and right continuously and send it to a computer via USB interface.</p>
<p align="left"><b>*</b> A software, again provided by us, reads in data sent by usb interface and maneuver the &nbsp;&nbsp;car accordingly.</p>
              </div>

              
              <div id="box3" class="box"><br/>
              <h2 align="left">GAME PROCEDURE :</h2>
<p align="left"><b>*</b> Before start of game, each team will be given a practice slot of 10 min. Teams can also &nbsp;&nbsp;buy the interfacing device and software at subsidized price.</p>
<p align="left"><b>*</b> Competition will be conducted in two rounds, elimination and final round.</p>
<p align="left"><b>*</b> Each team will be given two runs in the elimination round best of which will be &nbsp;&nbsp;considered for qualifying into final round. Any restart will be considered as a new run.</p>
<p align="left"><b>*</b> Final round will be one single run. The winners will be decided by the minimum time &nbsp;&nbsp;taken to complete the race in the final round.</p>
              
              </div>
              
              
              <div id="box4" class="box"><br/>
              <h2 align="left">DEVICE SPECIFICATIONS :</h2>
<p align="left"><b>*</b> The device built by participants should have mic as the only input interface and a 4 wire &nbsp;&nbsp;port in addition to common ground as the only output interface.</p>
<p align="left"><b>*</b> It may powered by outside source. Note only 210V AC supply can be provided by organisation team.</p>
<p align="left"><b>*</b> The four output signals are considered logical high only in between 3 and 5 Volts.</p>
<p align="left"><b>*</b> The teams are allowed to use ready-made micro-controller boards without any penalty.</p>

			 <h2 align="left">RULES :</h2>
<p align="left"><b>*</b> A team may have a maximum of 3 members.</p>
<p align="left"><b>*</b> Any team which is not ready in given timeslot will be disqualified.</p>
              
              </div>
              
              
              <div id="box5" class="box"><br/>
              
    				 <h1>REGISTER</h1> 

   					<form style="margin:30px 0px 0px 24px;" method="post" action="event_reg_submit.php">
              		<input type="hidden" value="voice-car" name="comp_name" />
    
    				<label for="participants">Number of Participants including team leader :</label>
					<select id="participants" onChange="createFormP(this.selectedIndex)">
					<option selected="selected">Choose</option>
    				<option>1</option>
   					<option>2</option>
    				<option>3</option>
					</select><br/><br/>
             		<?php require_once 'event_registration_voice.php' ; ?>
                    </form>
              </div>
              
              
              
              
           </div>
        
     	 </div>
      
      
</div>
 

 
 
 </body>
