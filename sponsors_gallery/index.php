<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Micro Image Gallery jQuery Plugin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Micro Image Gallery jQuery Plugin with Preview" />
        <meta name="keywords" content="jquery,image gallery, plugin, thumnails, preview"/>
        <link rel="stylesheet" href="sponsors_gallery/css/style.css" type="text/css" media="screen"/>
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                font-family:Georgia,Times,serif;
               
            }
            a.back{
              
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                top:0px;
                right:0px;
            }
         
        </style>
    </head>
    <body>
    <span  style="margin-left:33px; margin-top:"><img height="45px" width="120px;" src="sponsors_gallery/images/logo.png"></span>
        <div >
     


            <div id="mG1" class="microGallery" style="margin:-7px 0px 16px 4px;" >
                 <img  src="sponsors_gallery/Gallery/cisco_logo.jpg">
              <img  src="sponsors_gallery/Gallery/ibm_logo.jpg">
              <img  src="sponsors_gallery/Gallery/Imagination-Technologies_logo.jpg" >
              <img  src="sponsors_gallery/Gallery/intel_logo.jpg"  >
              <img  src="sponsors_gallery/Gallery/national-instruments-logo.jpg" >
              <img  src="sponsors_gallery/Gallery/NVIDIA_logo.jpg" >
              <img  src="sponsors_gallery/Gallery/tata_logo.jpg">
              <img  src="sponsors_gallery/Gallery/tcs_logo.png" >
              <img  src="sponsors_gallery/Gallery/Texas-Instruments-logo-design.png" >
              <img  src="sponsors_gallery/Gallery/virgin_logo.jpg" >
             
             
            </div>
            
        </div>
        <!-- The JavaScript -->
        <script type="text/javascript" src="sponsors_gallery/jquery.min.js" ></script>
        <script type="text/javascript" src="sponsors_gallery/jquery.microgallery.js"></script>
        <script type="text/javascript">
            $(function() {
				
                $("#mG1").microgallery({
                     menu		:false,
                    size		:'medium',
                    mode		:'single',
                    cycle               :true,
                    autoplay            :true,	/* the autoplay can only exist if circular is true */
                    autoplayTime        :2000
                });
                
            });
        </script>
    </body>
</html>