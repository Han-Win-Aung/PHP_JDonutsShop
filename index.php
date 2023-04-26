<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wood Stock HTML Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2053 Leather Shop
http://www.tooplate.com/view/2053-leather-shop
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<h1 align="center">J'DONUTS</h1>
		
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div> <!-- end of tooplate_menu -->
    </div> <!-- END of header -->
    <div id="tooplate_slider">
    	<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/slider/img-1.jpg" alt="" title="#caption1" />
                <img src="images/slider/img-2.jpg" alt="" title="#caption2" />
                 <img src="images/slider/img-3.jpg" alt="" title="#caption1" />
                <img src="images/slider/img-4.jpg" alt="" title="#caption3" />                
            </div>
            <!--div id="caption1" class="nivo-html-caption">
                Nulla egestas turpis ac lectus dapibus adipiscing. Nulla laoreet nisi vitae libero pellentesque aliquam.
            </div>
            <div id="caption2" class="nivo-html-caption">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas turpis adipiscing.
            </div>
            <div id="caption3" class="nivo-html-caption">
                Egestas turpis ac lectus dapibus adipiscing. Nulla laoreet nisi vitae libero aliquam.
            </div-->
        </div>
        <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
			effect: 'fade',
			controlNav: true, // 1,2,3... navigation
            directionNav: false,
			animSpeed: 800, // Slide transition speed
	        pauseTime: 4000, // How long each slide will show
			});
        });
        </script>	
    </div> <END of slider>
    
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_4">
      
            <ul class="nobullet bottom_list">
            	<li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        
       
        <div class="clear"></div>
        <div id="tooplate_copyright">
			Copyright © 2048 Your Company Name 
		</div>
    </div> <!-- END of tooplate_footer -->
</div> <!-- END of tooplate_footer_wrapper -->

<script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var $elem = $('#content');
		
		$('#nav_up').fadeIn('slow');
		
		$(window).bind('scrollstart', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
		});
		$(window).bind('scrollstop', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
		});
		
		$('#nav_up').click(
			function (e) {
				$('html, body').animate({scrollTop: '0px'}, 800);
			}
		);
	});
</script>

</body>
</html>