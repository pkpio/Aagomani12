<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<label for="participants">Number of Participants including team leader :</label>
<select id="participants" onchange="createForm(this.selectedIndex)">
	<option selected="selected">Choose</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
</select>
<br />
<br />
<form name="eventRegistration" onsubmit="return validateForms()" action="event_reg_submit.php" method="post">
<div id="user1"></div>
<div id="user2"></div>
<div id="user3"></div>
<div id="user4"></div>
<div id="submit"></div>
</form>

<div id="formLayout">
<input type="radio" name="user_type" id="user1" value="1" checked="checked" onchange="changeForm(this.parentNode.id,1)" /><label>New User</label>
<input type="radio" name="user_type" id="user0" value="0" onchange="changeForm(this.parentNode.id,0)" /><label>Already Registered User</label>
<form name="form" id="form"></form>
</div>

<form id="form_1">
<table>
	<tr><td><label>Name :</label>
   	</td><td><input type="text" name="name" placeholder="Name" class="text"/></td></tr>
    <tr><td><label>E-mail Id :</label>
    </td><td><input type="text" name="emailid" placeholder="E-mail Id" class="text"/></td></tr>
    <tr><td><label>Password :</label>
    </td><td><input type="password" name="password" placeholder="Password" class="text"/></td></tr>
    <tr><td><label>Re-enter Password :</label>
    </td><td><input type="password" name="repassword" placeholder="Re-enter Password" class="text"/></td></tr>
    <tr><td><label>Phone :</label>
    </td><td><input type="text" name="mobile" placeholder="Phone" class="text"/></td></tr>
   	<tr><td><label>City :</label>
	</td><td><input type="text" name="city" /></td></tr>
    <tr><td><label>College :</label>
    </td><td><input type="text" name="college" /></td></tr>
    <tr><td><label>Year :</label>
    </td><td><input type="text" name="year" /></td></tr>
    <tr><td><label>Address :</label>
    </td><td><textarea name="address" placeholder="Address" cols="45" rows="3" class="textarea"></textarea></td></tr>
    <tr><td><label>Remarks about Aagomani :</label>
    </td><td><textarea name="remarks" placeholder="Remarks about Aagomani" cols="45" rows="3" class="textarea"></textarea></td></tr>
</table>
</form>

<form id="form_0">
<table>
   <tr><td><label>E-mail Id :</label>
   </td><td><input type="text" name="emailid" placeholder="E-mail Id" class="text" /></td></tr>
</table>
</form>
</body>
</html>