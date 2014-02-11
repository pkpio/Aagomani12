<style>
.tab{
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
	font-size:14px;
	width:100%;
	padding:0;
	margin:0;
display:inline;
}
ul.tabs a:link,a:visited
{
	width:100%;
font-weight:bold;
color:#FFFFFF;
background-color:#999999;
text-align:center;
margin:0;
padding:6px;
text-decoration:none;
text-transform:uppercase;
}
ul.tabs a:hover,a:active
{
background-color:#23586a;
}
img#floatright {
		width:250px;
		height:250px;
float: right;
margin: 10px 10px 10px 40px;
border: 2px solid #333;
border-image: initial;
}
</style>
<script>
$(document).ready(function() {
  $("ul.tabs a").click(function(){
  	$page=this.id;
	$("#tabDisplay").fadeOut(300,function(){
	document.getElementById("tabDisplay").innerHTML = document.getElementById($page+"1").innerHTML;
	});
	$("#tabDisplay").fadeIn(300);
	return false;
  });
});
</script>


<!-- park-your-car Tabs list ------------->
	 <div id="park-your-car1">
     	<h1>Park your Car</h1>
    	<ul id="boxLinks" class="tabs">
		<li><b><a id="tab1" href="#">Introduction</a></b></li>
        <li><b><a id="tab2" href="#">Task and Arena</a></b></li>
        <li><b><a id="tab3" href="#">Specifications</a></b></li>
        <li><b><a id="tab4" href="#">Rules</a></b></li>
        <li><b><a id="tab5" href="#">Scoring</a></b></li>
        <li><b><a id="tab6" href="#">Registration</a></b></li>
    	</ul>
        
<div id="tabDisplay">
<!-- Home tab content goes here --><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <img src="images/park-your-car.jpg" id="floatright" />
              <p>Fast forward to a world. One that's 50 years ahead of today's times. One where humans, tired of all materiast pursuits, get back to admiring the nature, and hone their
personal skills. Activities as rudimentary and basic such as driving would have to be delegated to robots. In such a scenario, cars would drive themselves, as in
the case of google car, and park it too. Bring yourself a step closer to this far fetched fantasy by making your own robot, that can park into a predefined space
autonomously (no manual use control).

The automatic parking aims to enhance the comfort and safety of driving in constrained environments where much attention and experience is required to steer the car. 
The parking maneuver is achieved by means of coordinated control of the steering angle and speed which takes into account the actual situation in the
environment to ensure collision-free motion within the available space

Let your Imagination run wild, your thoughts encompass logic, but stay rooted in the principles on electrical engineering to make the most reliable and fastest 
parking robot.</p>
              </div>
</div>

         <div id="box">
              
              <div id="tab11" class="tab"><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <img src="images/park-your-car.jpg" id="floatright" />
              <p>Fast forward to a world. One that's 50 years ahead of today's times. One where humans, tired of all materiast pursuits, get back to admiring the nature, and hone their
personal skills. Activities as rudimentary and basic such as driving would have to be delegated to robots. In such a scenario, cars would drive themselves, as in
the case of google car, and park it too. Bring yourself a step closer to this far fetched fantasy by making your own robot, that can park into a predefined space
autonomously (no manual use control).

The automatic parking aims to enhance the comfort and safety of driving in constrained environments where much attention and experience is required to steer the car. 
The parking maneuver is achieved by means of coordinated control of the steering angle and speed which takes into account the actual situation in the
environment to ensure collision-free motion within the available space

Let your Imagination run wild, your thoughts encompass logic, but stay rooted in the principles on electrical engineering to make the most reliable and fastest 
parking robot.</p>
              </div>
              
              
              <div id="tab21" class="tab"><br/>
              <h2 align="left">TASK :</h2>
<p>Build an autonomous bot capable of parking itself in the garages.</p><br/>

<h2 align="left">ARENA :</h2>
<p align="left"><b>*</b> The arena consists of four parking garages.</p>
<p align="left"><b>*</b> Each Garage will be 40 cms deep with a yellow check-line of width 1cm at 10cm from the &nbsp;&nbsp;rear wall </p>
<p align="left"><b>*</b> Three Garages will be 20 cms wide. One garage will be less than 15 cms wide.</p>
<p align="left"><b>*</b> The order of the four garages is variable.</p>
<p align="left"><b>*</b> A 50cm wide road(black in colour) is present parallel to wall. The road has 3cm wide &nbsp;&nbsp;white strip at centre.</p>
<p align="left"><b>*</b> A T shaped white coloured junction is marked on road in front of all garages.</p>
<p align="left"><b>*</b> A green start line and red finish line is marked at begining and end of the road &nbsp;&nbsp;respectively.</p>
              
              </div>

              <div id="tab31" class="tab"><br/>
              <h2 align="left">BOT SPECIFICATIONS :</h2>

<p align="left"><b>*</b> The bot must fit in a rectangular box of size 20cms x 25 cms.</p>
<p align="left"><b>*</b> The bot must be autonomous (should not recieve any inputs from outside).</p>
<p align="left"><b>*</b> The teams are allowed to use any ready-made micro-controller boards/ready made &nbsp;&nbsp;sensor kits.</p><br/>


              <h2 align="left">TEAM SPECIFICATIONS :</h2>
<p align="left"><b>*</b> The team must(can*) have a maximum of 3 members.</p>

              </div>

              <div id="tab41" class="tab"><br/>
              <h2 align="left">RULES :</h2>
              
<p align="left"><b>*</b> The bot must park in the garages which are 20cm wide and must not park in the garage &nbsp;&nbsp;which is less than 15cm wide.</p>
<p align="left"><b>*</b> A parking is considered successful if it crosses or touches the check-line in the garage.</p>
<p align="left"><b>*</b> The bot shouldn't touch wall at any point of time.</p>
<p align="left"><b>*</b> The bot should never go off the road during the run.</p>
<p align="left"><b>*</b> The teams will be given 2 independent runs.</p>
<p align="left"><b>*</b> Touching the wall or going off the road will lead to disqualification of that run. </p>
<p align="left"><b>*</b> Maximum of 180 seconds will be given for each run.</p>
<p align="left"><b>*</b> The time recorded by the organiser will be final. Time measured by any contestant by &nbsp;&nbsp;another means is not acceptable for scoring.</p>
              </div>
              
              
              <div id="tab51" class="tab"><br/>
              <h2 align="left">SCORING :</h2>
<p align="left"><b>*</b> Every successful 

parking gains 50 points.</p>
<p align="left"><b>*</b> Entering into garage with less than 15 cms width will incur a penalty of 100 points.
The &nbsp;&nbsp;teams score will be equal to : (180 - T) + 50X - P<br/>
T = Time taken by the bot to complete the task<br/>
X = Number of successful parking<br/>
P = Penalties
              </div>
              

              <div id="tab61" class="tab"><br/>
              
    				 <h1>REGISTER</h1> 

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
              </div>
              
           </div>
        
     	 </div>