<?php
require_once 'include/functions.php';
$email = $_SESSION['user_email'];
$sql = "SELECT user_name, user_email, user_email_active, user_phone, user_college, user_city, user_year, user_registered_time, user_address, user_last_login
		FROM tbl_user
		WHERE user_email = '$email'";
$result = mysql_query($sql) or die("error fetching details." . mysql_error());
$userdata = mysql_fetch_assoc($result);
?>
<table align="center" width="60%">
<tr><th style="font-size:24px" colspan="4">User Information</th></tr>
<tr>
<th align="center">Name: </th>
<td align="center"><?php echo $userdata['user_name'] ; ?></td>
<th align="center">City: </th>
<td align="center"><?php echo $userdata['user_city'] ; ?></td></tr>
<tr>
<th align="center">Email Id: </th>
<td align="center"><?php echo $userdata['user_email'] ; ?></td>
<th align="center">Address: </th>
<td align="center" rowspan="3"><?php echo $userdata['user_address']; ?></td>
</tr>
<tr>
<th align="center">Account Confirmation: </th>
<td align="center"><?php echo $userdata['user_email_active'] ; ?></td>
</tr>
<tr>
<th align="center">Mobile: </th>
<td align="center"><?php echo $userdata['user_phone'] ; ?></td></tr>
<tr>
<th align="center">College: </th>
<td align="center"><?php echo $userdata['user_college'] ; ?></td>
<th align="center">Registered Time: </th>
<td align="center"><?php echo $userdata['user_registered_time'] ; ?></td></tr>
<tr>
<th align="center">Year: </th>
<td align="center"><?php echo $userdata['user_year'] ; ?></td>
<th align="center">Last Activity Time: </th>
<td align="center"><?php echo $userdata['user_last_login'] ; ?></td></tr></table>
<br/>
<br/>
<table align="center" width="60%">
<tr><th style="font-size:24px" colspan="7">Competations Registrations</th></tr>
<tr><th>Competation Name</th><th>Team Id</th><th>Team Leader</th><th>Member 1</th><th>Member 2</th><th>Member 3</th><th>Registered Time</th></tr>
<?php
$sql = "SELECT reg_id, reg_event, reg_leader_email, reg_member1_email, reg_member2_email, reg_member3_email, reg_time
		FROM tbl_registrations
		WHERE reg_leader_email = '$email' || reg_member1_email = '$email' || reg_member2_email = '$email' || reg_member3_email = '$email'";
$result = mysql_query($sql) or die("error fetching details." . mysql_error());
while($eventdata = mysql_fetch_assoc($result)){
	echo "<tr><td>" . $eventdata['reg_id'] . "</td></tr>" . $eventdata['reg_event'] . "</td></tr>" . $eventdata['reg_leader_email'] . "</td></tr>" . $eventdata['reg_member1_email'] . "</td></tr>" . $evendata['reg_member2_email'] . "</td></tr>" . $eventdata['reg_member3_email'] . "</td></tr>"  ;
}
?>
</table>