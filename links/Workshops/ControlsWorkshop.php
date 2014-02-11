
<link rel="stylesheet" type="text/css" href="links/event-style.css" />
<script type="text/javascript" src="links/event-page.js"></script>
<script>
$(document).ready(function() {
	  document.getElementById("loadingImage").style.visibility="hidden";});
	  </script>
<style>
img#float {
width:740px;
height:440px;
margin: 10px 40px 10px 18px;
border: 2px solid #333;
border-image: initial;
}
</style>
      
<!-- Voice control Tabs list ------------->

 <div id="voice-control-car1">
     	<h1>Anti-lock Braking System Workshop</h1>
    	<ul id="boxLinks" class="tabs">       
		<li><b><a id="tab1" href="#">Introduction</a></b></li>
        <li><b><a id="tab2" href="#">Content Outline</a></b></li>
        <li><b><a id="tab3" href="#">Rules</a></b></li>
        <li><b><a id="tab4" href="#">Registration</a></b></li>
        <li><b><a id="tab5" href="#">Payment</a></b></li>
    	</ul>
        
        <div id="tabDisplay">
<!-- Home tab content goes here --><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <p>An Australian study by the Monash University Accident Research Centre found that
"X"<br/>Reduced the risk of multiple vehicle crashes by 18 percent,
<br/>Reduced the risk of run-off-road crashes by 35 percent.<br/>

              <img src="images/ControlsWorkshop.png" id="float" alt="Image unavailable" />

If you're wondering what X is, don't overthink, its just the simple ABS that we see on everyday automobiles. The advent of ABS has brought about a new maxim, "Speed thrills, but doesn't kill".<br/>&nbsp;&nbsp;&nbsp;&nbsp;

Aagomani brings you this very special workshop on Anti-Lock braking systems where every team will get opportunity to design its own ABS and assess its performance.</p>
              </div>
  </div>
        
         <div id="box">
              
              <div id="tab11" class="tab"><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <p>An Australian study by the Monash University Accident Research Centre found that
"X"<br/>Reduced the risk of multiple vehicle crashes by 18 percent,
<br/>Reduced the risk of run-off-road crashes by 35 percent.<br/>

              <img src="images/ControlsWorkshop.png" id="float" alt="Image unavailable" />

If you're wondering what X is, don't overthink, its just the simple ABS that we see on everyday automobiles. The advent of ABS has brought about a new maxim, "Speed thrills, but doesn't kill".<br/>&nbsp;&nbsp;&nbsp;&nbsp;

Aagomani brings you this very special workshop on Anti-Lock braking systems where every team will get opportunity to design its own ABS and assess its performance.</p>
              </div>
              
              
              <div id="tab21" class="tab"><br/>
              <h2 align="left">CONTENT OUTLINE: </h2>
<p>* Integrator and lag functions in Laplace domains<br/>
* Basic braking models<br/>
* Braking simulation in Sci Lab<br/>
* The concept of slip and mu-slip curve<br/>
* Working of ABS<br/>
* ABS implementation<br/>
* Optimize braking distance</p>
              </div>

              
              <div id="tab31" class="tab"><br/>
              <h2 align="left">RULES :</h2>
<p>* <span class="blu">Prequisite : </span>The basic knowledge of Laplace transformations.<br/>
* Each team can consist of a maximum of 2 persons.<br/>
* Teams coming from outside IIT Bombay need not bring their own laptops. Teams from IIT Bombay should bring one laptop per team.</p>
              
              </div>
              
              
              <div id="tab41" class="tab"><br/>
              <h2 align="left">REGISTER :</h2>

   					<form style="margin:30px 0px 0px 24px;" method="post" action="event_reg_submit.php">
              		<input type="hidden" value="Controls Workshop" name="comp_name" />
    
    				<label for="participants">Number of Participants including team leader :</label>
					<select id="participants" onChange="createForm(this.selectedIndex)" style="width:95px; height:30px; padding:6px;">
					<option selected="selected" style="padding:6px;">Choose</option>
    				<option style="padding:6px;">1</option>
   					<option style="padding:6px;">2</option>
					</select><br/><br/>
             		<?php require_once '../event_registration.php' ; ?>
                    </form>
              
              </div>
              
              
              <div id="tab51" class="tab"><br/>
              <h2 align="left">PAYMENT :</h2>
              
<p align="left"><b>*</b> Fee for the workshop is 100 per head.</p><br/>
<p align="left"><b>*</b> You can pay the fee on the spot.</p><br/>
              </div>
              
              
              
              
           </div>
        
     	 </div>