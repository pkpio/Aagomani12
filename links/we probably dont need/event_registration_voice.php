<!-- From not opened here becoz we will do it @ competation page becoz we need 2 add diff no of team nubers for each competation -->
<script>
function createFormP(value) {
	switch (value)
{
case 1:
  document.getElementById('1p').style.display='inherit';
  document.getElementById('2p').style.display='none';
  document.getElementById('3p').style.display='none';
  document.getElementById('4p').style.display='none';
  document.getElementById('5p').style.display='inherit';
  break;
case 2:
  document.getElementById('1p').style.display='inherit';
  document.getElementById('2p').style.display='inherit';
  document.getElementById('3p').style.display='none';
  document.getElementById('4p').style.display='none';
  document.getElementById('5p').style.display='inherit';
  break;
case 3:
  document.getElementById('1p').style.display='inherit';
  document.getElementById('2p').style.display='inherit';
  document.getElementById('3p').style.display='inherit';
  document.getElementById('4p').style.display='none';
  document.getElementById('5p').style.display='inherit';
  break;
case 4:
  document.getElementById('1p').style.display='inherit';
  document.getElementById('2p').style.display='inherit';
  document.getElementById('3p').style.display='inherit';
  document.getElementById('4p').style.display='inherit';
  document.getElementById('5p').style.display='inherit';
  break;
case 11:
  document.getElementById('11p').style.display='inherit';
  document.getElementById('12p').style.display='none';
  break;
case 12:
  document.getElementById('11p').style.display='none';
  document.getElementById('12p').style.display='inherit';
  break;
case 21:
  document.getElementById('21p').style.display='inherit';
  document.getElementById('22p').style.display='none';
  break;
case 22:
  document.getElementById('21p').style.display='none';
  document.getElementById('22p').style.display='inherit';
  break;
case 31:
  document.getElementById('31p').style.display='inherit';
  document.getElementById('32p').style.display='none';
  break;
case 32:
  document.getElementById('31p').style.display='none';
  document.getElementById('32p').style.display='inherit';
  break;
case 41:
  document.getElementById('41p').style.display='inherit';
  document.getElementById('42p').style.display='none';
  break;
case 42:
  document.getElementById('41p').style.display='none';
  document.getElementById('42p').style.display='inherit';
  break;
default:
  document.getElementById('1p').style.display='none';
  document.getElementById('2p').style.display='none';
  document.getElementById('3p').style.display='none';
  document.getElementById('4p').style.display='none';
  document.getElementById('5p').style.display='none';
	
  
}
	
	
}
</script>

<!-- User 1 ----------------->
    
<div id="1p" style="display:none">
<h4>User 1</h4>

<p align="left">
<label><input type="radio" name="user_type0" value="0" checked="checked" onchange="createFormP(11)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type0" value="1" onchange="createFormP(12)" /></label><label>New User</label>
</p>

<div align="center">
<!--Existing user-->
	<div id="11p" style="display:inherit">
         <input type="text" class="textbox" name="emailid01"  placeholder="Email-Id" align="center" />
    </div></div>
    
    
<!--New User------>    
    <div id="12p" style="display:none">
     <input type="text" class="textbox" name="emailid0"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name0" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password0"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword0"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile0"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city0"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college0"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="year0"  placeholder="year" /><br>

     <textarea name="address0" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks0" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
	</div>
    
    
</div>


<!-- User 2 ----------------->


<div id="2p" style="display:none">
<h4>User 2</h4>
<p align="center">
<label><input type="radio" name="user_type1" value="0" checked="checked" onchange="createFormP(21)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type1" value="1" onchange="createFormP(22)" /></label><label>New User</label>
</p>

<!--Existing user-->
	<div id="21p" style="display:inherit">
         <input type="text" class="textbox" name="emailid11"  placeholder="Email-Id" align="center" />
    </div>
    
    
<!--New User------>    
    <div id="22p" style="display:none">
     <input type="text" class="textbox" name="emailid1"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name1" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password1"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword1"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile1"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city1"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college1"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="year1"  placeholder="year" /><br>

     <textarea name="address1" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks1" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
     </div>

</div>


<!-- User 3 ----------------->


<div id="3p" style="display:none">
<h4>User 3</h4>
<p align="center">
<label><input type="radio" name="user_type2" value="0" checked="checked" onchange="createFormP(31)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type2" value="1" onchange="createFormP(32)" /></label></label><label>New User</label>
</p>

<!--Existing user-->
	<div id="31p" style="display:inherit">
         <input type="text" class="textbox" name="emailid21"  placeholder="Email-Id" align="center" />
    </div>
    
    
<!--New User------>    
    <div id="32p" style="display:none">
     <input type="text" class="textbox" name="emailid2"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name2" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password2"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword2"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile2"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city2"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college2"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="year2"  placeholder="year" /><br>

     <textarea name="address2" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks2" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
     </div>

</div>



<!-- User 4 ----------------->


<div id="4p" style="display:none">
<h4>User 4</h4>
<p align="center">
<label><input type="radio" name="user_type3" value="0" checked="checked" onchange="createFormP(41)" /></label><label>Existing User</label>
<label><input type="radio" name="user_type3" value="1" onchange="createFormP(42)" /></label><label>New User</label>
</p>

<!--Existing user-->
	<div id="41p" style="display:inherit">
         <input type="text" class="textbox" name="emailid31"  placeholder="Email-Id" align="center" />
    </div>
    
    
<!--New User------>    
    <div id="42p" style="display:none">
     <input type="text" class="textbox" name="emailid3"  placeholder="Email-Id" align="center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="text" class="textbox"  name="name3" placeholder="Name" /><br>

     <input type="password" class="textbox" name="password3"  placeholder="Password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <input type="password" class="textbox" name="repassword3"  placeholder="Re-enter Password" /><br>
	 
	 <input type="text" class="textbox" name="mobile3"  placeholder="Mobile No."  maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="city3"  placeholder="City" /><br>
     
     <input type="text" class="textbox" name="college3"  placeholder="College" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input type="text" class="textbox" name="year3"  placeholder="year" /><br>

     <textarea name="address3" cols="40" rows="3"  placeholder="Address" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>

     <textarea name="remarks3" cols="40" rows="3"  placeholder="Remarks" style="border:1px solid #999;	font-size:15px; padding:4px 0px 1px 5px;font-family: 'Droid Sans', Arial, sans-serif;"></textarea><br><br>
     </div>
    

</div>


<div id="5p" style="display:none">
     <input type="submit" value="Register" class="button" />
</div>
     
     <!-- Form not closed her becoz we are gng 2 close it in da event page -->


