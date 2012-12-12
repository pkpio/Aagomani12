<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form name="registration" id="reg_form" onsubmit="return validateForm('reg_form')" action="submit.php" method="post">
<table>
	<tr><td>Name :</td><td><input type="text" name="name" placeholder="Name" class="text"/></td></tr>
    <tr><td>E-mail Id :</td><td><input type="text" name="emailid" placeholder="E-mail Id" class="text"/></td></tr>
    <tr><td>Password :</td><td><input type="password" name="password" placeholder="Password" class="text"/></td></tr>
    <tr><td>Re-enter Password :</td><td><input type="password" name="repassword" placeholder="Re-enter Password" class="text"/></td></tr>
    <tr><td>Phone :</td><td><input type="text" name="mobile" placeholder="Phone" class="text"/></td></tr>
    <tr><td>City :</td><td><input type="text" name="city" /></td></tr>
    <tr><td>College :</td><td><input type="text" name="college" /></td></tr>
    <tr><td>Year :</td><td><input type="text" name="year" /></td></tr>
    <tr><td>Address :</td><td><textarea name="address" placeholder="Address" cols="45" rows="3" class="textarea"></textarea></td></tr>
    <tr><td>Remarks about Aagomani :</td><td><textarea name="remarks" placeholder="Remarks about Aagomani" cols="45" rows="3" class="textarea"></textarea></td></tr>
    <tr><td><input type="submit" value="Register" /></td></tr>
</table>
</form>
</body>
</html>