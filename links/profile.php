<?php
require_once '../include/functions.php';
$email = 'praveendath92@praveenkumarpendyala.in' ; //$_SESSION['user_email'];
$sql = "SELECT user_name, user_email, user_email_active, user_phone, user_college, user_city, user_year, user_registered_time, user_address, user_last_login
		FROM tbl_user
		WHERE user_email = '$email'";
$result = mysql_query($sql) or die("error fetching details." . mysql_error());
$userdata = mysql_fetch_assoc($result);
?>
<h1>PROFILE</h1>
<div align="center">
<table align="center" width="80%">
<tr><th style="font-size:24px" colspan="4"><h1>User Information</h1></th></tr>
<tr>
<th align="left"><span class="blu">Name : </span></th>
<td align="left"><?php echo $userdata['user_name'] ; ?></td>
<th align="left"><span class="blu">City : </span></th>
<td align="left"><?php echo $userdata['user_city'] ; ?></td></tr>
<tr>
<th align="left"><span class="blu">Email Id : </span></th>
<td align="left"><?php echo $userdata['user_email'] ; ?></td>
<th align="left"><span class="blu">Address : </span></th>
<td align="left" rowspan="3"><?php echo $userdata['user_address']; ?></td>
</tr>
<tr>
<th align="left"><span class="blu">Account Confirmation : </span></th>
<td align="left"><?php echo $userdata['user_email_active'] ; ?></td>
</tr>
<tr>
<th align="left"><span class="blu">Mobile : </span></th>
<td align="left"><?php echo $userdata['user_phone'] ; ?></td></tr>
<tr>
<th align="left"><span class="blu">College : </span></th>
<td align="left"><?php echo $userdata['user_college'] ; ?></td>
<th align="left"><span class="blu">Registered Time : </span></th>
<td align="left"><?php echo $userdata['user_registered_time'] ; ?></td></tr>
<tr>
<th align="left"><span class="blu">Year : </span></th>
<td align="left"><?php echo $userdata['user_year'] ; ?></td>
<th align="left"><span class="blu">Last Activity Time : </span></th>
<td align="left"><?php echo $userdata['user_last_login'] ; ?></td></tr></table></div>
<br/>
<br/>
<div align="center"><table align="center" width="80%">
<tr><th style="font-size:24px" colspan="7"><h1>Competations Registrations</h1></th></tr>
<tr><th><span class="blu">Competation Name</span></th><th><span class="blu">Team Id</span></th><th><span class="blu">Team Leader</span></th><th><span class="blu">Member 1</span></th><th><span class="blu">Member 2</span></th><th><span class="blu">Member 3</span></th><th><span class="blu">Registered Time</span></th></tr>
<?php
$sql = "SELECT reg_id, reg_event, reg_leader_email, reg_member1_email, reg_member2_email, reg_member3_email, reg_time
		FROM tbl_registrations
		WHERE reg_leader_email = '$email' || reg_member1_email = '$email' || reg_member2_email = '$email' || reg_member3_email = '$email'";
$result = mysql_query($sql) or die("error fetching details." . mysql_error());
while($eventdata = mysql_fetch_assoc($result)){
	echo "<tr><td>" . $eventdata['reg_id'] . "</td></tr>" . $eventdata['reg_event'] . "</td></tr>" . $eventdata['reg_leader_email'] . "</td></tr>" . $eventdata['reg_member1_email'] . "</td></tr>" . $evendata['reg_member2_email'] . "</td></tr>" . $eventdata['reg_member3_email'] . "</td></tr>"  ;
}
?>
</table></div>