<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='favicon.ico' rel='shortcut icon' type='jpg'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="eestyle.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Sans">
 <link href='http://fonts.googleapis.com/css?family=Marvel:700' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Volkhov:700' rel='stylesheet' type='text/css'>
 
<link href='http://fonts.googleapis.com/css?family=Prociono' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.color.js"></script>
<script type="text/javascript">


$(document).ready(function() {	

	//Background color, mouseover and mouseout
	var colorOver = '#23586a';
	var colorOut = '#a5a5a5';

	//Padding, mouseover
	var padLeft = '20px';
	var padRight = '20px';
	
	//Default Padding
	var defpadLeft = $('#men li a').css('paddingLeft');
	var defpadRight = $('#men li a').css('paddingRight');
		
	//Animate the LI on mouse over, mouse out
	$('#men li').click(function () {	
		//Make LI clickable
		window.location = $(this).find('a').attr('href');
		
	}).mouseover(function (){
		
		//mouse over LI and look for A element for transition
		$(this).find('a')
		.animate( { paddingLeft: padLeft, paddingRight: padRight}, { queue:false, duration:100 } )
		.animate( { backgroundColor: colorOver }, { queue:false, duration:200 });

	}).mouseout(function () {
	
		//mouse oout LI and look for A element and discard the mouse over transition
		$(this).find('a')
		.animate( { paddingLeft: defpadLeft, paddingRight: defpadRight}, { queue:false, duration:100 } )
		.animate( { backgroundColor: colorOut }, { queue:false, duration:200 });
	});	
	
	//Scroll the menu on mouse move above the #sidebar layer


	
});
	
</script>
</head>

<body>
<div id="header"><table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td  valign="top" width="50%"><img src="img/logo.png" width="325" height="150"  style="padding:27px 0px 0px 100px"/> </td>
    <td valign="bottom" align="right"><!--<div id="sidebar"><ul id="men">
<li><a href="#">Register</a></li>
<li><a href="#">Comment</a></li>
<li><a href="#">Archives</a></li>
</ul></div> -->
   </td>
  </tr>
</table>

  
</div>
<table width="100%" cellspacing="0" cellpadding="0">
  <tr  valign="top" >
    <td width="200px"><br />
<br />

 <div id="menu">
 <li><a href="index.php?a=home"><h5>HOME</h5><div>HOME</div></a></li>
 <li><a href="index.php?a=competitions"><h5>COMPETITIONS</h5><div>COMPETITIONS</div>	</a></li>
    <li><a href="index.php?a=lectures"><h5>LECTURES</h5><div>LECTURES</div>	</a></li>

  <li><a href="index.php?a=workshops"><h5>WORKSHOPS</h5><div>WORKSHOPS</div>	</a></li>
  
  <li><a href="index.php?a=sponsors"><h5>SPONSORS</h5><div>SPONSORS</div>	</a></li>
   <li><a href="index.php?a=contact"><h5>CONTACT</h5><div>CONTACT</div>	</a></li>

 
 
 
 </div>
    
    </td>
    <td width="40"></td>
    <td>  <div id="content"> <?php
		  $admin_dir = 'links';
			 	 if(!empty($_GET['a'])){
						 $page = scandir($admin_dir,0);
						 $a= $_GET ['a'];
						 unset($page[0],$page[1]);
						 if (in_array($a.'.php',$page))	 include($admin_dir.'/'.$a.'.php');			 
                         else echo'<br /><p >Sorry, page not found :(<br><br><br><br><br><br><br><br><br><br><br></p>';			
				     }
				 else
					include ($admin_dir.'/home.php');	
		   ?></div>
           </td>
           <td width="190px"> 
 </td>
  </tr>
</table>


<br />

<div id="footer"> </div>
</body>
</html>
