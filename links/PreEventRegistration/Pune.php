<h1>REGISTER</h1> 
<h2 align="left">Pre-Event Registration, Pune</h2>

   					<form style="margin:30px 0px 0px 24px;" method="post" action="event_reg_submit.php">
              		<input type="hidden" value="Pune Workshop" name="comp_name" />
    
    				<label for="participants">Number of Participants including team leader :</label>
					<select id="participants" onChange="createForm(this.selectedIndex)" style="width:95px; height:30px; padding:6px;">
					<option selected="selected" style="padding:6px;">Choose</option>
    				<option style="padding:6px;">1</option>
   					<option style="padding:6px;">2</option>
					</select><br/><br/>
             		<?php require_once '../event_registration.php' ; ?>
                    </form>