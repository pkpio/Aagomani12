<!-- From not opened here becoz we will do it @ competation page becoz we need 2 add diff no of team nubers for each competation -->
<script>
function createForm(value) {
	switch (value)
{
case 1:
  document.getElementById('1').style.display='inherit';
  document.getElementById('2').style.display='none';
  document.getElementById('3').style.display='none';
  document.getElementById('4').style.display='none';
  document.getElementById('5').style.display='inherit';
  break;
case 2:
  document.getElementById('1').style.display='inherit';
  document.getElementById('2').style.display='inherit';
  document.getElementById('3').style.display='none';
  document.getElementById('4').style.display='none';
  document.getElementById('5').style.display='inherit';
  break;
case 3:
  document.getElementById('1').style.display='inherit';
  document.getElementById('2').style.display='inherit';
  document.getElementById('3').style.display='inherit';
  document.getElementById('4').style.display='none';
  document.getElementById('5').style.display='inherit';
  break;
case 4:
  document.getElementById('1').style.display='inherit';
  document.getElementById('2').style.display='inherit';
  document.getElementById('3').style.display='inherit';
  document.getElementById('4').style.display='inherit';
  document.getElementById('5').style.display='inherit';
  break;
case 11:
  document.getElementById('11').style.display='inherit';
  document.getElementById('12').style.display='none';
  break;
case 12:
  document.getElementById('11').style.display='none';
  document.getElementById('12').style.display='inherit';
  break;
case 21:
  document.getElementById('21').style.display='inherit';
  document.getElementById('22').style.display='none';
  break;
case 22:
  document.getElementById('21').style.display='none';
  document.getElementById('22').style.display='inherit';
  break;
case 31:
  document.getElementById('31').style.display='inherit';
  document.getElementById('32').style.display='none';
  break;
case 32:
  document.getElementById('31').style.display='none';
  document.getElementById('32').style.display='inherit';
  break;
case 41:
  document.getElementById('41').style.display='inherit';
  document.getElementById('42').style.display='none';
  break;
case 42:
  document.getElementById('41').style.display='none';
  document.getElementById('42').style.display='inherit';
  break;
default:
  document.getElementById('1').style.display='none';
  document.getElementById('2').style.display='none';
  document.getElementById('3').style.display='none';
  document.getElementById('4').style.display='none';
  document.getElementById('5').style.display='none';
	
  
}
	
	
}
</script>

<!-- User 1 ----------------->
    
<div id="1" style="display:none">
<h4>User 1</h4>

<p align="left">
<label><input type="radio" name="user_type0" value="0" checked="checked" onchange="createForm(11)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type0" value="1" onchange="createForm(12)" /></label><label>New User</label>
</p>

<!--Existing user-->
	<div id="11" style="display:inherit">
         <input type="text" class="textbox" name="emailid01"  placeholder="Email-Id" align="center" />
    </div>
    
    
<!--New User------>    
    <div id="12" style="display:none">
     <input type="text" class="textbox" name="emailid0"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name0" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password0"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword0"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile0"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city0"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college0"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <select name="year0" style="width:200px; height:30px; padding:6px;" title="Select your College year">
     <option value="Not selected" style="padding:6px;">Select your College year</option>
     <option value="1st year UG" style="padding:6px;">1st Year UnderGradute</option>
     <option value="2nd year UG" style="padding:6px;">2nd Year UnderGradute</option>
     <option value="3rd year UG" style="padding:6px;">3rd Year UnderGradute</option>
     <option value="4th year UG" style="padding:6px;">4th Year UnderGradute</option>
     <option value="5th year UG" style="padding:6px;">5th Year UnderGradute</option>
     <option value="1st year PG" style="padding:6px;">1st Year PostGradute</option>
     <option value="2nd year PG" style="padding:6px;">2nd Year PostGradute</option>
     <option value="Others" style="padding:6px;">Others</option></select><br>

     <textarea name="address0" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks0" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
	</div>
    
    
</div>


<!-- User 2 ----------------->


<div id="2" style="display:none">
<h4>User 2</h4>
<p align="center">
<label><input type="radio" name="user_type1" value="0" checked="checked" onchange="createForm(21)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type1" value="1" onchange="createForm(22)" /></label><label>New User</label>
</p>

<!--Existing user-->
	<div id="21" style="display:inherit">
         <input type="text" class="textbox" name="emailid11"  placeholder="Email-Id" align="center" />
    </div>
    
    
<!--New User------>    
    <div id="22" style="display:none">
     <input type="text" class="textbox" name="emailid1"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name1" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password1"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword1"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile1"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city1"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college1"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <select name="year1" style="width:200px; height:30px; padding:6px;" title="Select your College year">
     <option value="Not selected" style="padding:6px;">Select your College year</option>
     <option value="1st year UG" style="padding:6px;">1st Year UnderGradute</option>
     <option value="2nd year UG" style="padding:6px;">2nd Year UnderGradute</option>
     <option value="3rd year UG" style="padding:6px;">3rd Year UnderGradute</option>
     <option value="4th year UG" style="padding:6px;">4th Year UnderGradute</option>
     <option value="5th year UG" style="padding:6px;">5th Year UnderGradute</option>
     <option value="1st year PG" style="padding:6px;">1st Year PostGradute</option>
     <option value="2nd year PG" style="padding:6px;">2nd Year PostGradute</option>
     <option value="Others" style="padding:6px;">Others</option></select><br>
     

     <textarea name="address1" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks1" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
     </div>

</div>


<!-- User 3 ----------------->


<div id="3" style="display:none">
<h4>User 3</h4>
<p align="center">
<label><input type="radio" name="user_type2" value="0" checked="checked" onchange="createForm(31)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type2" value="1" onchange="createForm(32)" /></label></label><label>New User</label>
</p>

<!--Existing user-->
	<div id="31" style="display:inherit">
         <input type="text" class="textbox" name="emailid21"  placeholder="Email-Id" align="center" />
    </div>
    
    
<!--New User------>    
    <div id="32" style="display:none">
     <input type="text" class="textbox" name="emailid2"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name2" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password2"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword2"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile2"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city2"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college2"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <select name="year2" style="width:200px; height:30px; padding:6px;" title="Select your College year">
     <option value="Not selected" style="padding:6px;">Select your College year</option>
     <option value="1st year UG" style="padding:6px;">1st Year UnderGradute</option>
     <option value="2nd year UG" style="padding:6px;">2nd Year UnderGradute</option>
     <option value="3rd year UG" style="padding:6px;">3rd Year UnderGradute</option>
     <option value="4th year UG" style="padding:6px;">4th Year UnderGradute</option>
     <option value="5th year UG" style="padding:6px;">5th Year UnderGradute</option>
     <option value="1st year PG" style="padding:6px;">1st Year PostGradute</option>
     <option value="2nd year PG" style="padding:6px;">2nd Year PostGradute</option>
     <option value="Others" style="padding:6px;">Others</option></select><br>

     <textarea name="address2" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks2" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
     </div>

</div>



<!-- User 4 ----------------->


<div id="4" style="display:none">
<h4>User 4</h4>
<p align="center">
<label><input type="radio" name="user_type3" value="0" checked="checked" onchange="createForm(41)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type3" value="1" onchange="createForm(42)" /></label><label>New User</label>
</p>

<!--Existing user-->
	<div id="41" style="display:inherit">
         <input type="text" class="textbox" name="emailid31"  placeholder="Email-Id" align="center" />
    </div>
    
    
<!--New User------>    
    <div id="42" style="display:none">
     <input type="text" class="textbox" name="emailid3"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name3" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password3"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword3"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile3"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city3"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college3"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <select name="year3" style="width:200px; height:30px; padding:6px;" title="Select your College year">
     <option value="Not selected" style="padding:6px;">Select your College year</option>
     <option value="1st year UG" style="padding:6px;">1st Year UnderGradute</option>
     <option value="2nd year UG" style="padding:6px;">2nd Year UnderGradute</option>
     <option value="3rd year UG" style="padding:6px;">3rd Year UnderGradute</option>
     <option value="4th year UG" style="padding:6px;">4th Year UnderGradute</option>
     <option value="5th year UG" style="padding:6px;">5th Year UnderGradute</option>
     <option value="1st year PG" style="padding:6px;">1st Year PostGradute</option>
     <option value="2nd year PG" style="padding:6px;">2nd Year PostGradute</option>
     <option value="Others" style="padding:6px;">Others</option></select><br>

     <textarea name="address3" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks3" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
     </div>
    

</div>


<div id="5" style="display:none">
     <input type="submit" value="Register" class="button" />
</div>
     
     
     <!-- Form not closed her becoz we are gng 2 close it in da event page -->


