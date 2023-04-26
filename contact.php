<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wood Stock - Contact</title>
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
	<div id="tooplate_header">
    	<h1 align="center">J'DONUTS</h1>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="contact.php" class="selected">Contact</a></li>
            </ul>
        </div> <!-- end of tooplate_menu -->
    </div> <!-- END of header -->
    <div id="tooplate_main">
<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$mesg=$_POST['t4'];
if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
}

?>
	
    	<h2>Contact Information</h2>
            <div id="contact_form" class="col_2">
                <h3>Send a message</h3>
                <form method="post" name="contact" action="#">
                    <div class="col_4">
                        <label for="phone">Name:</label>
                        <input type="text" id="t1" name="t1" class="required input_field" />
                    </div>
                    <div class="col_4 no_margin_right">
                        <label for="email">Email:</label>
                        <input type="email" id="t2" name="t2" class="validate-email required input_field" />
                    </div>
                    <div class="clear h10"></div>
                     <div class="col_4 no_margin_right">
                        <label for="phone">Phone:</label>
                        <input type="text" id="t3" name="t3" class="required input_field" />
                    </div>
                    <div class="clear"></div>
                    <label for="text">Message:</label> <textarea id="t4" name="t4" rows="0" cols="0" class="required"></textarea>
                     <input type="submit" name="sub"  id="sub" value="Send" class="submit_button" />
                </form>
				<h2><?php echo $er;?></h2>
            </div> 
            <div class="col_2 no_margin_right">
                <div class="col_4">
                    <h3>Location </h3>
                    J'Donuts Helden<br />
                    NO(23) Ground Floor, Heldan Road,<br />
                    Kamayaut Township<br /><br />
                    
                    Tel: 09260185647<br />
                    
                    
                    
                </div>
                
			</div>
            <div class="clear"></div>
            
    </div> <!-- END of tooplate_main -->
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