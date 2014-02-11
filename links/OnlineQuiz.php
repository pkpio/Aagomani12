<?php
require_once '../include/functions.php';
?>
<link rel="stylesheet" type="text/css" href="links/event-style.css" />
<script type="text/javascript" src="links/event-page.js"></script>
<script>
$(document).ready(function() {
	  document.getElementById("loadingImage").style.visibility="hidden";});
	  </script>
<style>
img#arena {
width:740px;
height:370px;
margin: 10px 40px 10px 18px;
border: 2px solid #333;
border-image: initial;
}
</style>


     	<h1>Inter College Quiz Results</h1>
<!-- park-your-car Tabs list -----------
	 <div id="park-your-car1">
     	<h1>Inter College Quiz</h1>
    	<ul id="boxLinks" class="tabs">
		<li><b><a id="tab1" href="#">Introduction</a></b></li>
        <li><b><a id="tab2" href="#">Prerequisites</a></b></li>
        <li><b><a id="tab3" href="#">Format</a></b></li>
        <li><b><a id="tab4" href="#">Take the Quiz</a></b></li>
    	</ul>
 -->       
<div id="tabDisplay">
<?php
if(empty($_SESSION['user_email']))
echo "<p>Please login to see your score</p>";
else{
	$email = $_SESSION['user_email'];
	$sql = "SELECT user_quiz_marks
		       FROM tbl_user 
			   WHERE user_email = '$email'";
	$result = mysql_query($sql) or die("error fetching details." . mysql_error());
	$Quizdata = mysql_fetch_assoc($result);
	echo "<p>Your Quiz score : ".$Quizdata['user_quiz_marks']."</p>";
}
?><br/>
<div>
<p>The following is the list of students who cleared the Inter College Quiz prelims.</p><br/>
<p><span class="blu"><b>Team 1 (IITB)</b></span></p>
<p>1) Jinit</p>
<p>2) Deepali</p><br/>

<p><span class="blu"><b>Team 2 (IITB)</b></span></p>
<p>1) Ankit Agrawal</p>
<p>2) Vipul Choudhary</p><br/>

<p><span class="blu"><b>Team 3 ( KL Univ)</b></span></p>
<p>1) Sudhir</p>
<p>2) Uday Reddy</p><br/>

<p><span class="blu"><b>Team 4 (BVBCET)</b></span></p>
<p>1) Ashwini Nuchchi</p>
<p>2) Bhuvana Maganti</p><br/>

<p><span class="blu"><b>Team 5</b></span></p>
<p>1) anirudh (100070083) - hyrd univ</p>
<p>2) K.VASANT HARSHA - VIDYA VIKAS INSTITUTE</p><br/>
</div>
</div>
<!-- Home tab content goes here <br/>
              <h2 align="left">INTRODUCTION :</h2>
              <p>'Just the right spark' is what will get you through.</p>

<p>Sense electric pulses arc through your nerves: the Aagomani 2012 online quiz promises to shock you with sheer electricity.</p>

<p>If you pride yourself on being an electrical engineer, you are at the correct place. Go right ahead and enter an arena where thousands of the best electrical engineering students fight it out to secure the coveted title: victor at the Aagomani online quiz.</p>

<p>Exploit this opportunity to realise your true 'electric quotient' !</p>
</div>

         <div id="box">
              
              <div id="tab11" class="tab"><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <p>'Just the right spark' is what will get you through.</p>

<p>Sense electric pulses arc through your nerves: the Aagomani 2012 online quiz promises to shock you with sheer electricity.</p>

<p>If you pride yourself on being an electrical engineer, you are at the correct place. Go right ahead and enter an arena where thousands of the best electrical engineering students fight it out to secure the coveted title: victor at the Aagomani online quiz.</p>

<p>Exploit this opportunity to realise your true 'electric quotient' !</p>
              </div>
              
              
              <div id="tab21" class="tab"><br/>
              <h2 align="left">Prerequisites :</h2>
              <p>Gray cells (the more, the merrier)</p>
              
              </div>

              <div id="tab31" class="tab"><br/>
              <h2 align="left">Elims :</h2>

<p align="left"><b>*</b> Online round that lasts 15 minutes.</p>
<p align="left"><b>*</b> Quiz open to all students in teams of 1 or 2 participants.</p>
<p align="left"><b>*</b> No restriction on number of entries from a college/academic institution</p>
<p align="left"><b>*</b> Only the best entry from each college shall be considered.</p>
<p align="left"><b>*</b> The top entries from six different institutes shall make it to the final stage round</p><br/>


              <h2 align="left">Timings :</h2>
<p align="left"><b>*</b> Open from 9:00 pm to 10:00 pm, on 29th February, 2012</p>

			<h2 align="left">Finals :</h2>
<p align="left"><b>*</b> An interactive intercollegiate quiz between the 6 finalists selected at the end of the          elims.</p>
<p align="left"><b>*</b> Lots of prizes in store for winners, finalists and audience.</p><br/>
<p align="left"><b>**</b>The adjudicator's decision is final in all respects.</p>

              </div>
              
              <div id="tab41" class="tab"><br/>
              <h1 align="left">Online Quiz</h1>
<h2 align="left">Instructions</h2>
<ul>
<li><p>Please go through the instructions carefully. Your quiz session starts only after you click on the <span class="blu"><b>Start Quiz</b></span> button below</p></li>
<li><p>You will be having 45 queastions and the answers should be completed in 15 minutes.</p></li>
<li><p>You can browse to any question any time during the duration of Quiz.</p></li>
<li><p>When ever you change an answer remember to click on 'Submit Answer' else your answer won't be updated !</p></li>
<li><p>We strongly recommend NOT to reload your browser as that would lead you to a wrong timer value.</p></li>
<li><p>Your Quiz duration would remain 15 minutes from when you begin. We are NOT responsible for the wrong timer value (If you happen to read the page).</p></li>
<li><p>You may re-take the quiz if you wish till 22:00.</p></li>

<form style="margin:30px 0px 0px 339px;" method="post" action="quizsessionstart.php">
<input type="submit" name="reg" value="Start Quiz" class="button">
</form>

              </div>
              
           </div>
        
     	 </div>
-->