

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wood Stock - News</title>
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
                <li><a href="register.php" class="selected">Register</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div> <!-- end of tooplate_menu -->
    </div> <!-- END of header -->
    <div id="tooplate_main">
    	<div id="tooplate_content" class="left">
          <div id="comment_form">
            <h3>Register form</h3>
            <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>
            <form  method="post">
                <label>Name </label>
                <input type="text" name="t1" id="t1" class="input_field" />
                <label>Email</label>
                <input type="email" name="t2" id="t2" class="input_field" />
				 <label>Password</label>
                <input type="password" name="t3" id="t3" class="input_field" />
				 <label>Phone </label>
                <input type="text" name="t4" id="t4" class="input_field" />
				 <label>City </label>
                <input type="text" name="t5" id="t5" class="input_field" />
				 <label>Twonship </label>
                <input type="text" name="t6" id="t6" class="input_field" />
                <input type="submit" name="sub" id="sub" value="Register" class="submit_button" />
				 <input type="submit" name="Cancel" value="Cancel" class="submit_button" />
				<label><?php echo "<font color='red'>$error</font>";?></label>
            </form>
            
        
        </div>  
            
            
            
            
            
            
        </div> <!-- END of content -->
                
		
            
           
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
                <li><a href="Product.php">Product</a></li>
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