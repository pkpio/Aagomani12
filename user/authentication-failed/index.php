<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aagomani 2012</title>
<link rel="stylesheet" type="text/css" href="e-style.css" />
<link rel="stylesheet" type="text/css" href="popup.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='favicon.ico' rel='shortcut icon' type='jpg'/>
<script type="text/javascript" src="js/e-script.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.color.js"></script>
<script type="text/javascript" src="js/jquery.text-effects.js"></script>
<script type="text/javascript" src="js/jquery.watermark-3.1.3.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
<script type="text/javascript" src="js/buttons.js"></script>
<script type="text/javascript" src="js/page-change-animation.js"></script>
<script type="text/javascript" src="js/popup-jquery.js"></script>
<script type="text/javascript" src="js/popup.js"></script>
</head>

<body>
<div id="header"><table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td  valign="top" width="65%" align="left"><img src="A1.gif" height="180px" style="padding:0px 0px 0px 0px"/> </td>
    <td valign="top" align="right"><div id="sidebar">

<?php
include_once '../../include/functions.php' ;
if(empty($_SESSION['user_email'])){
?>
<ul id="men">
<li><a id="registration" href="#?w=550" rel="popup1" class="poplight">Register</a></li>


<!--POPUP START-->
<div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup1" class="popup_block">
    <div align="center"><?php require_once '../../links/register.php' ; ?></div>   
</div>
<!--END POPUP-->

<li><a href="#?w=500" rel="popup2" class="poplight">&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;</a></li>

<!--POPUP START-->
<div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup2" class="popup_block">
    <div align="center"><?php require_once '../../links/login.php' ; ?></div>   
</div>
<!--END POPUP-->

<?php
}
else{
?>

<ul id="men">
<li><a id="registration" href="#?w=650" rel="popup1" class="poplight">&nbsp;&nbsp;&nbsp;Profile</a></li>


<!--POPUP START-->
<div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup1" class="popup_block">
    <div align="center" id="profile"><?php include_once '../../user/index.php' ; ?></div>   
</div>
<!--END POPUP-->

<li><a href="http://localhost/aagomani_v3/user/logout/">&nbsp;Log out&nbsp;</a></li>

<!--POPUP START-->
<div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup2" class="popup_block">
    <div align="center">Sample <?php require_once '../../links/login.php' ; ?></div>   
</div>
<!--END POPUP-->

<?php
}
?>
<li><a href="#?w=600" rel="popup3" class="poplight">Archives</a></li>

<!--POPUP START-->
<div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup3" class="popup_block">
    <div align="center">Sample <?php require_once '../../links/archives.php' ; ?></div>   
</div>
<!--END POPUP-->
</ul></div> 
	</td>
  	</tr>
</table>

  
</div>
<div id="body">
	<div id="nav"> <?php require_once('../../leftnav.php') ?> </div>
    <div id="content">
    <p style="color:#F00"> Authentication failed ! Invalid username password combination! Please try again.</p>   
    </div>
   <div id="share"> <?php //require_once('share.php') ?> </div>
</div>
<div id="footer">Footer</div>

</body>
</html>