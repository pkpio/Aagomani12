<html>
<head>
<style type="text/css">
#tablist{
	background-color:#23586a;
}
#tabs{
	display:none;
}
ul.tabs
{
	width:100%;
list-style-type:none;
margin:0;
padding:0;
padding-top:6px;
padding-bottom:6px;
}
ul.tabs li
{
	width:100%;
	padding:0;
	margin:0;
display:inline;
}
ul.tabs a:link,a:visited
{
	width:100%;
font-weight:bold;
color:#23586a;
background-color:#98bf21;
text-align:center;
margin:0;
padding:6px;
text-decoration:none;
text-transform:uppercase;
}
ul.tabs a:hover,a:active
{
background-color:#FFFFFF;
}

/*#dial:hover{ 
			-webkit-transform: rotate(90deg); 
			-moz-transform: rotate(90deg); 
			-o-transform: rotate(90deg); 
		}
*/
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).ready(function() {
		$pointer = $("#pointer");
		$dial = $("#dial");
		x0 = $dial.offset().left + 241; // width/2
		y0 = $dial.offset().top + 261; // vertical distance		
		$pointer.css({top:y0,left:x0});
	$("area").mouseover(function(){
		var id = this.id;
		if(id=="comp1"){dy=-111,dx=-155};
		if(id=="comp2"){dy=-200,dx=0};
		if(id=="comp3"){dy=-111,dx=155};
		rad = Math.atan2(dy,dx);
		$pointer.css({
			top:y0,left:x0,
			'transition' : 'transform 1s',			
			'-moz-transition' : '-moz-transform 1s',
			'-webkit-transition' : '-webkit-transform 1s',
			'-o-transition' : '-o-transform 1s;',
			'transform-origin': '0% 50%',
			'-moz-transform-origin': '0% 50%',
			'-webkit-transform-origin': '0% 50%',
			'-o-transform-origin': '0% 50%',
            'transform' : 'rotate('+ rad +'rad)',
            '-moz-transform' : 'rotate('+ rad +'rad)',
            '-webkit-transform' : 'rotate('+ rad +'rad)',
			'-o-transform' : 'rotate('+ rad +'rad)'
        });
	});
  $("ul.tabs a").click(function(){
  	$page=this.id;
	$("#tabDisplay").fadeOut(300,function(){
	document.getElementById("tabDisplay").innerHTML = document.getElementById($page+"1").innerHTML;
	});
	$("#tabDisplay").fadeIn(300);
	window.location.href+="/"+$page;
	return false;
  });
});
	</script>
</head>

<body>

<div id="tablist">
<ul class="tabs">
<li><a id="1" href="#home1">Home</a></li>
<li><a id="2" href="#news">News</a></li>
<li><a id="3" href="#contact">Contact</a></li>
<li><a id="4" href="#about">About</a></li>
</ul>
</div>
<div id="tabDisplay">
<img id="pointer" src="images/point.png" />
<img id="dial" src="images/dial.jpg" alt="Competitions" usemap ="#dialmap" />
<map name="dialmap">
  <area id="comp1" shape="rect" coords="35,242,150,90" href="lik.php" />
  <area id="comp2" shape="rect" coords="150,30,330,120" href="#" />
  <area id="comp3" shape="rect" coords="330,60,445,242" href="#" />
</map>
</div>
<div id="tabs">
	<div id="11">
		<p><a href="competitions/electrica.php">
               <table width="100%" cellspacing="0" cellpadding="0" class="table">
              <tr valign="top" >
                <td><img src = "http://www.techfest.org/img/competitions/xtreme_machines.jpg" class="img"></td>
              </tr>
              <tr height="120px" valign="top"  >
                <td><h2>Electrika</h2>
                <h4> &nbsp; The legacy of the electrcial engg. yet to be reached.</h4></td>
              </tr>
            </table>
 
       </a> </p>
	</div>
	<div id="21">
		<p><a href="competitions/tj.php">
               <table width="100%" cellspacing="0" cellpadding="0" class="table">
              <tr valign="top">
                <td><img src = "http://www.techfest.org/img/competitions/robotron.gif" class="img" /></td>
              </tr>
              <tr height="120px;" valign="top" >
                <td><h2>Techno-Journalism</h2>
                <h4> &nbsp; The stage for mumbai entries.</h4></td>
              </tr>
            </table>
 
       </a> </p>
	</div>
	<div id="31">
		<p><a href="competitions/electrica.php">
               <table width="100%" cellspacing="0" cellpadding="0" class="table">
              <tr valign="top" >
                <td><img src = "http://www.techfest.org/img/competitions/xtreme_machines.jpg" class="img"></td>
              </tr>
              <tr height="120px" valign="top"  >
                <td><h2>Electrika</h2>
                <h4> &nbsp; The legacy of the electrcial engg. yet to be reached.</h4></td>
              </tr>
            </table>
 
       </a> </p>
		
	</div>
    <div id="41">

    </div>
<!--<h1>COMPETITIONS</h1>
<p>  &nbsp; &nbsp; &nbsp; &nbsp; During the event we would conduct a trivia quiz on Multimedia and Digital Entertainment for the participants of the workshop.  
The quiz would be conducted in two parts, first round would be the elimination round from which four teams of two would be selected for the final round. Exciting prizes worth <del>&#2352;</del> 9000 to be won during the event!!! </p>
<br />
<table width="100%" cellspacing="18" cellpadding="0">
  <tr valign="top"  >
   <td width="90px" > <a href="competitions/electrica.php">
               <table width="100%" cellspacing="0" cellpadding="0" class="table">
              <tr valign="top" >
                <td><img src = "http://www.techfest.org/img/competitions/xtreme_machines.jpg" class="img"></td>
              </tr>
              <tr height="120px" valign="top"  >
                <td><h2>Electrika</h2>
                <h4> &nbsp; The legacy of the electrcial engg. yet to be reached.</h4></td>
              </tr>
            </table>
 
       </a> 
    
    </td>
    <td width="90px">
    <a href="competitions/tj.php">
               <table width="100%" cellspacing="0" cellpadding="0" class="table">
              <tr valign="top">
                <td><img src = "http://www.techfest.org/img/competitions/robotron.gif" class="img" /></td>
              </tr>
              <tr height="120px;" valign="top" >
                <td><h2>Techno-Journalism</h2>
                <h4> &nbsp; The stage for mumbai entries.</h4></td>
              </tr>
            </table>
 
       </a> 
    
    
    </td>
    <td>&nbsp;</td>
  </tr>
</table>






<br />
<br />
<br />
<br />

</div>
  </p>
  -->