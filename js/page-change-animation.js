$(document).ready(function() {
  $("#menu a").click(function(){
  	$page=this.id;$name=this.name;
	$('#content').html('<img id="pulse" src="images/pulse.jpg"/>');
	$("#pulse").animate({left:0},200).animate({left:-830},0,function(){
  	$('#content').load('links/'+$page+'.php');
	});
	window.location.href="#!/"+$page;
	document.title = $name;
	return false;
  });
	
	$(function() {

    var $sidebar   = $("#share"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 20;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
	});
	if(!document.getElementById("dial")){document.getElementById("pointer").style="display:none;"}
});