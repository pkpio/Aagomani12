<?php
//require_once 'include/functions.php';

if(empty($_POST['email'])){
?>
<table width="60%" border="0" cellpadding="10">
<form name="login" action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post"> 
  <tr>
    <td>Email Id:</td>
    <td><input name="email" type="text" size="40" maxlength="50"></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="password" type="password" size="40" maxlength="20" /></td>
  </tr>
  <tr>
  <td align="center" colspan="2"><input type="submit" value="login" /></td>
  </tr></form>
</table>
<?php
}
else{
	$result = doLogin();
	echo $result;
}
?>