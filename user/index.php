<?php
require_once 'include/functions.php'; //Actual path is ../include/functions.php but we use different path because we use a popup..
$email = $_SESSION['user_email'];
$sql = "SELECT user_name, user_email, user_email_active, user_phone, user_college, user_city, user_year, user_registered_time, user_address, user_last_login
		FROM tbl_user
		WHERE user_email = '$email'";
$result = mysql_query($sql) or die("error fetching details." . mysql_error());
$userdata = mysql_fetch_assoc($result);
?>
<h2 align="center">User Information</h2>
<table align="center">
<tr>
<th>Name: </th>
<td><?php echo $userdata['user_name'] ; ?></td>
<th>City: </th>
<td><?php echo $userdata['user_city'] ; ?></td></tr>
<tr>
<th>Email Id: </th>
<td><?php echo $userdata['user_email'] ; ?></td>
<th>Address: </th>
<td rowspan="3"><?php echo $userdata['user_address']; ?></td>
</tr>
<tr>
<th>Confirmation: </th>
<td><?php echo $userdata['user_email_active'] ; ?></td>
</tr>
<tr>
<th>Mobile: </th>
<td><?php echo $userdata['user_phone'] ; ?></td></tr>
<tr>
<th>College: </th>
<td><?php echo $userdata['user_college'] ; ?></td>
<th>Year: </th>
<td><?php echo $userdata['user_year'] ; ?></td></tr>
</table>
<br/>
<br/>
<h2 align="center">Competations Registrations</h2>
<table align="center">
<tr><th>Competation-Name</th><th>TeamId</th><th>Team-Leader</th><th>Member1</th><th>Member2</th><th>Registered-Time</th></tr>
<?php

$sql = "SELECT reg_id, reg_event, reg_leader_email, reg_member1_email, reg_member2_email, reg_time
		FROM tbl_registrations
		WHERE reg_leader_email = '$email' || reg_member1_email = '$email' || reg_member2_email = '$email' || reg_member3_email = '$email'";
$result = mysql_query($sql) or die("error fetching details." . mysql_error());
while($eventdata = mysql_fetch_assoc($result)){
	echo "<tr><td>" . $eventdata['reg_event'] . "</td><td>" . $eventdata['reg_id'] . "</td><td>" . $eventdata['reg_leader_email'] . "</td><td>" . $eventdata['reg_member1_email'] . "</td><td>" . $eventdata['reg_member2_email'] . "</td><td>" . $eventdata['reg_time'] . "</td></tr>"  ;
}

?>
</table>