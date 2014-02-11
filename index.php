<?php include_once 'include/functions.php' ;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>-->
<script type="text/javascript" src="js/buttons.js"></script>
<script type="text/javascript" src="js/page-change-animation.js"></script>
<script type="text/javascript" src="js/popup-jquery.js"></script>
<script type="text/javascript" src="js/popup.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28975508-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="header">
  <table width="100%" cellspacing="0" cellpadding="0">
    <tr>
      <td  valign="top" width="65%" align="left"></td>
      <td valign="top" align="right"><div id="sidebar">
        <?php
if(empty($_SESSION['user_email'])){
?>
        <ul id="men">
        <li><a id="registration" href="#?w=550" rel="popup1" class="poplight">Register</a></li>
        
        <!--POPUP START-->
        
        <div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup1" class="popup_block">
          <div align="center">
            <?php require_once 'links/register.php' ; ?>
          </div>
        </div>
        
        <!--END POPUP-->
        
        <li><a href="#?w=500" rel="popup2" class="poplight">&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;</a></li>
        
        <!--POPUP START-->
        
        <div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup2" class="popup_block">
          <div align="center">
            <?php require_once 'links/login.php' ; ?>
          </div>
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
            <div align="center" id="profile">
              <?php include_once 'user/index.php' ; ?>
            </div>
          </div>
          <!--END POPUP-->
          
          <li><a href="http://www.ee.iitb.ac.in/uma/~eesa/aagomani12/user/logout">&nbsp;Log out&nbsp;</a></li>
          
          <!--POPUP START-->
          <div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup2" class="popup_block">
            <div align="center">Sample
              <?php require_once 'links/login.php' ; ?>
            </div>
          </div>
          <!--END POPUP-->
          
          <?php
}
?>
          <li><a href="#?w=600" rel="popup3" class="poplight">Archives</a></li>
          
          <!--POPUP START-->
          <div style="display: none; width: 500px; margin-top: -160px; margin-left: -290px;" id="popup3" class="popup_block">
            <div align="center">Sample
              <?php require_once 'links/archives.php' ; ?>
            </div>
          </div>
          <!--END POPUP-->
        </ul>
        </div></td>
    </tr>
  </table>
</div>
<div id="body">
<div id="nav">
<?php require_once('leftnav.php') ?>
</div>
<div id="contentWrapper"><img id="loadingImage" src="img/ajaxLoader.gif" style=" position:absolute; margin-left:400px; margin-top:200px; visibility:hidden; z-index:999;" />
  <div id="content">
    <script>
$(document).ready(function() {
	$url = document.location.href.split("#!/");
	$url = $url[1];
	if(document.location.href.indexOf("#!/")<0) $url="home";
	$('#content').load('links/'+$url+'.php');});  </script>
  </div>
</div>
<div id="share1">
<div style="background:#FFF">
 <h1 align="center" id="update-heading" style="background-color:#23586a;font-family: 'Prociono', serif;letter-spacing: 1px;font-size:18px;padding:8px;color:#FFF;">Updates</h1>
 <?php require_once 'links/updates.php' ; ?></div>
<br/>
<?php require_once 'sponsors_gallery/index.php' ; ?>
<br/>
<?php require_once('share.php') ?>
</div>
</div>
<div id="footer">
  <?php require_once('links/footer.php') ?>
</div>

</body>
</html>