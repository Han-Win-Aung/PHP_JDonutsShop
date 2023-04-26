<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wood Stock - Gallery</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2066 Wood Stock
http://www.tooplate.com/view/2066-wood-stock
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

</head>
<body>

<div id="tooplate_wrapper">
	<h1 align="center">J'DONUTS</h1>
	<div id="tooplate_header">
    	<a href="home.php" class="sitetitle">Wood Stock</a>
        <div id="tooplate_menu">
            <ul>
                <li><a href="home.php" class="selected">Home</a></li>
                <li><a href="insert.php" >Insert</a></li>
                <li><a href="view-product.php">Product</a></li>
                <li><a href="view-order.php">Order</a></li>
				<li><a href="view-feedback.php">Feedback</a></li>
				<li><a href="logout.php">Log Out</a></li>
            </ul>
        </div> <!-- end of tooplate_menu -->
    </div> <!-- END of header -->
    <div id="tooplate_main">
    	
       
       <h2><span>Hello ...Welcome  Admin</span></h2>
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_4">
        	
            <ul class="nobullet bottom_list">
            	<li><a href="home.php">Home</a></li>
                <li><a href="insert.php">Insert</a></li>
                <li><a href="view-product.php">Product</a></li>
                <li><a href="view-order.php.">Order</a></li>
				 <li><a href="view-feedback.php">Feedback</a></li>
				  <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
        
        
        
         
        
        <div class="clear"></div>
        <div id="tooplate_copyright">
			Copyright © 2048 Your Company Name 
		</div>
    </div> <!-- END of tooplate_footer -->
</div> <!-- END of tooplate_footer_wrapper -->
<?php }  ?>
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