<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aagomani 2012</title>
<link rel="stylesheet" type="text/css" href="e-style.css" />
<link rel="stylesheet" type="text/css" href="popup.css" />
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
    <td  valign="top" width="50%"><img src="img/logo.png" width="325" height="150"  style="padding:27px 0px 0px 100px"/> </td>
    <td valign="bottom" align="right"><div id="sidebar">
<ul id="men">
<div id="menu"><li><a id="registration" href="#registration" name="Registration">Register</a></li></div>
<li><a href="#?w=500" rel="popup1" class="poplight">Login</a></li>

<!--POPUP START-->
<div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup1" class="popup_block">
    <h2 align="center">Login</h2>
    <div align="center">Sample //<?php //require_once 'login.php' ; ?></div>   
</div>
<!--END POPUP-->

<div id="menu"><li><a id="archives" href="#archives" name="Archives">Archives</a></li></div>
</ul></div> 
	</td>
  	</tr>
</table>

  
</div>
<div id="body">
	<div id="nav"> <?php require_once('leftnav.php') ?> </div>
    <div id="content">
    <?php require_once('links/home.php') ?>   
    </div>
   <div id="share"> <?php //require_once('share.php') ?> </div>
</div>
<div id="footer">Footer</div>

</body>
</html>