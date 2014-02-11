
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
     	<h1>E-Prayog</h1>
    	<ul id="boxLinks" class="tabs">       
		<li><b><a id="tab1" href="#">Introduction</a></b></li>
        <li><b><a id="tab2" href="#">CPLD</a></b></li>
<!--        <li><b><a id="tab3" href="#">Rules</a></b></li> -->
        <li><b><a id="tab4" href="#">Registration</a></b></li>
        <li><b><a id="tab5" href="#">Payment</a></b></li>
    	</ul>
        
        <div id="tabDisplay">
<!-- Home tab content goes here --><br/>
              <h2 align="left">INTRODUCTION :</h2>              
              <p>In recent years, there has been tremendous progress in the field of electronics, which has made very sophisticated components and ICs available to the student. As a result, it has become possible to develop complex electronic circuits in a reasonable time. Further, component costs have also reduced significantly, which means that students can now realistically hope to build a system with enhanced functionality as a course project. </p>
              <img src="images/E-Prayog.png" id="float" alt="Image unavailable" />

<p>&nbsp;&nbsp;&nbsp;&nbsp;Taking a note of the above developments, this workshop aims to give a basic knowledge to program FPGAs, CPLDs, etc. Using this boards we can do simulation based experiments using open source or public domain software, remote-triggered experiments on general as well as advanced electronics circuits. These are low-cost development boards developed at IIT Bombay. The objective is not to replace the traditional labs but to complement them by letting you understand the theory and experiments at their own pace </p>
              </div>
  </div>
        
         <div id="box">
              
              <div id="tab11" class="tab"><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <p>In recent years, there has been tremendous progress in the field of electronics, which has made very sophisticated components and ICs available to the student. As a result, it has become possible to develop complex electronic circuits in a reasonable time. Further, component costs have also reduced significantly, which means that students can now realistically hope to build a system with enhanced functionality as a course project. </p>
              <img src="images/E-Prayog.png" id="float" alt="Image unavailable" />

<p>&nbsp;&nbsp;&nbsp;&nbsp;Taking a note of the above developments, this workshop aims to give a basic knowledge to program FPGAs, CPLDs, etc. Using this boards we can do simulation based experiments using open source or public domain software, remote-triggered experiments on general as well as advanced electronics circuits. These are low-cost development boards developed at IIT Bombay. The objective is not to replace the traditional labs but to complement them by letting you understand the theory and experiments at their own pace </p>
              </div>
              
              
              <div id="tab21" class="tab"><br/>
              <h2 align="left">CPLD : </h2>
              <p>The development of programmable logic devices has dramatically changed the methodology of prototyping of digital hardware. In traditional designs using large number of ICs, we spend most of the time in bread boarding. This puts limitation on the complexity of the design. However the modern Programmable Logic Devices (PLDs) have made the implementation of medium capacity logic circuit quicker, flexible and cost effective. In recent years the PLDs have enormously increased in capacity and complexity.<br/>
              
              &nbsp;&nbsp;&nbsp;&nbsp;The Wadhwani Electronics Lab research team,IIT Bombay provides a low cost solution to teach concepts of digital design using a CPLD.<br/>
              
              &nbsp;&nbsp;&nbsp;&nbsp;The main objectives of the proposed CPLD  are:<br/>
             * To help the students to better understand the concepts of logic design.<br/>
             * To give the students hands on experience with the process of reconfigurable logic design, implementation and verification of logic systems using modern designing tools for digital logic design using an affordable CPLD board designed at IIT Bombay.<br/>
             * To make the student confident to use state of art technology
              </p>
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
              		<input type="hidden" value="E-Prayog" name="comp_name" />
    
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