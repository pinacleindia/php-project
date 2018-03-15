<?php
require_once 'admin/dbconnect.php';?>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
</script>
<script type="text/javascript" >
$(function() {
$(".comment_button").click(function() {

var test = $("#content").val();
var dataString = 'content='+ test;

if(test=='')
{
alert("Please Enter Some Text");
}
else
{
$("#flash").show();
$("#flash").fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle"> <span class="loading">Loading Comment...</span>');

$.ajax({
type: "POST",
url: "demo_insert.php",
data: dataString,
cache: false,
success: function(html){
$("#display").after(html);
document.getElementById('content').value='';
document.getElementById('content').focus();
$("#flash").hide();
}
});
} return false;
});
});
</script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#userForm').submit(function(){
     
        // show that something is loading
        $('#display').html("");
         
        /*
         * 'post_receiver.php' - where you will pass the form data
         * $(this).serialize() - to easily read form data
         * function(data){... - data contains the response from post_receiver.php
         */
        $.ajax({
            type: 'POST',
            url: 'getuser2.php', 
            data: $(this).serialize()
        })
        .done(function(data){
             
            // show the response
            $('#display').html(data);
             
        })
        .fail(function() {
         
            // just in case posting your form failed
            alert( "Posting failed." );
             
        });
 
        // to prevent refreshing the whole page page
        return false;
 
    });
});
</script><!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logivalley | Tracking</title>
        
        <link href="css/master.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="shortcut icon" href="img/logi-logo.ico" type="image/x-icon" />
       
		
        
        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="../../../d36mw5gp02ykm5.cloudfront.net/yc/adrns_y_is6175.js?v=6.11.120#p=wdcxwd1600aabs-00h4a0_wd-wcat3003806338060";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script></head>

<style>
table {
       margin: 20px 10px;
    border: 1px solid #cecece;
    border-radius: 5px;
    box-shadow: 5px 5px 5px 2px #cecece;
}
</style>
	


    <body data-scrolling-animations="true">
		<div class="sp-body">
			
			 <header id="this-is-top">
	            <div class="container-fluid">
	                <div class="topmenu row">
	                    <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
	                        <!-- <a href="#">AIR CARGO</a>
	                        <a href="#">RAIL CARGO</a>
	                        <a href="#">ROAD CARGO</a> -->

	                    </nav>
	                    <nav class="text-right col-sm-3 col-md-3 col-lg-3">
	                    <a href="#" data-toggle="modal" data-target="#login-modal">User Login</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
           <h1>Login to Your Account</h1><br>
          <script>
          function validateForm3() {
				var x = document.forms["myForm3"]["user"].value;
				var y = document.forms["myForm3"]["pass"].value;
				if (x == "") {
					alert("Register Email id must be filled out");
					document.forms["myForm3"]["user"].focus();
					return false;
				}
				if (y == "") {
					alert("Password must be filled out");
					document.forms["myForm3"]["pass"].focus();
					return false;
				}
				return true;
}
          </script><form action="users/action_login.php" method="post" name="myForm3" id="myForm3" onsubmit="return validateForm3()">
          <input type="text" name="user" placeholder="Register Email Id">
          <input type="password" name="pass" placeholder="Password">
        	<input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>
          
          
        </div>
      </div>
      </div>
	                        <a href="https://www.facebook.com/logivalley" target="_blank"><i class="fa fa-facebook"></i></a>
	                        <a href="https://business.google.com/b/115567602717440633337/dashboard/l/17853501432456514538?hl=en" target="blank"><i class="fa fa-google-plus" ></i></a>
	                        <a href="https://twitter.com/logivalley" target="_blank"><i class="fa fa-twitter"></i></a>
	                        <a href="https://www.linkedin.com/in/logivalley-private-limited-9ab355139/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

	                        <!-- <a href="#"><i class="fa fa-pinterest"></i></a> -->
	                        <!-- <a href="#"><i class="fa fa-youtube"></i></a> -->
	                    </nav>
	                </div>
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <a href="index.html" id="logo"></a>
	                    </div>
	                    <div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
	                        <div class="text-right header-padding">
	                            <div class="h-block"><h6 style="color: #a91605;">CALL US</h6><strong style="font-size: 15px;">+91-22-49705002</strong></div>
	                            <div class="h-block"><h6 style="color: #a91605;">EMAIL US</h6><strong style="font-size: 15px;">support@logivalley.com</strong></div>
	                            <!-- <div class="h-block"><span>WORKING HOURS</span>Mon - Sat  8.00 - 19.00</div> -->
	                            <div style="padding-top: 6px; margin-left: 150px;">
	                            <a class="btn btn-success" href="contact.php">GET A FREE QUOTE</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div id="main-menu-bg"></div>  
	                <a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
	                <nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
						
								<li><a href="index.html">Home</a></li>
								<!-- <ul class="dropdown-menu">
									<li><a href="01_home.html">HOME 1</a></li>
									<li><a href="02_home.html">HOME 2</a></li>
								</ul> -->
							
							<li><a href="about.html">About</a></li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="/">Our Services <i class="fa fa-angle-down"></i></a>
								 <ul class="dropdown-menu">
									<li><a href="domestic-distribution.html">Domestic Distribution</a></li>
									<li><a href="air-cargo.html">Air Cargo</a></li>
									<li><a href="warehouse.html">Warehouse</a></li>
									<li><a href="road-cargo.html">Road Cargo</a></li>
									<li><a href="rail-cargo.html">Rail Cargo</a></li>
									<li><a href="packing-and-tracking-technology.html">Packing and Tracking technology</a></li>
									<li><a href="international.html">International</a></li>
									<li><a href="container.html">Container</a></li>
									<li><a href="third-party-logistics.html">Third Party Logistics</a></li>
								</ul> 
							</li>
							 <!-- <li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="09_blog.html">Blog <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="09_blog.html">Blog 1</a></li>
									<li><a href="10_blog.html">Blog 2</a></li>
								</ul>
							</li>  -->
							<li><a href="tracking.html">Tracking</a></li>
							<li><a href="contact.php">CONTACT</a></li>
							 <li></li> 
						</ul>
						<div class="search-form-modal transition">
							<form class="navbar-form header_search_form">
								<i class="fa fa-times search-form_close"></i>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn_search customBgColor">Search</button>
							</form>
                          </div>
	                </nav>
	                <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
	            </div>
	        </header>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Tracking</h1></a>
					<div class="pull-right">
						<a href="index.html"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="about.html">Tracking</a>
					</div>
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row">
                     <h3>Track an Order</h3>
					<div class="col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">
						<p style="text-align: justify;">Enter the order number you would like to track in the form below.</p>
						<!--<div class="form-group">
                        
    <label for="order-number">Order Number:</label>
    <input type="order-number" id="content" placeholder="Order Number..." class="form-control content" style="border: 1px solid black;">
  </div>	

						<button type="button" id="nww_result" class="btn btn-primary comment_button" >Track</button>
                        
                          <div id="flash"></div>
							<div id="display"></div>-->
                            <div class="form-group">
                             <form id='userForm' onsubmit="return validateForm()">
    <label for="order-number">Order Number:</label>
    <input type='text' name='content' placeholder='Order Number...' class="form-control content" style="border: 1px solid black;"/>
  </div>	
<input type='submit' value='Track' class="btn btn-primary comment_button" class="btn btn-primary comment_button"/>
						
             </form><br>         
                          
							<div id="display"></div></div>
					</div>

				</div>
			</div>

			
       

			

			

			<footer>
        		<div class="color-part2"></div>
        		<div class="color-part"></div>
        		<div class="container-fluid">
            		<div class="row block-content">
               			<div class="col-sm-4 wow zoomIn" data-wow-delay="0.3s">
                    		<a href="#" class="logo-footer"></a>
	                        <p style="text-align: justify;">We at “logivalley" try to provide one of the most customized, fastest, dedicated, economical and reliable services such as warehousing, Inventory and Domestic cargo services to our customers. Within a short span of time, logivalley has been recognized as most trusted service provider.</p>
	                        <div class="footer-icons">
	                            <a href="https://www.facebook.com/logivalley" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
	                            <a href="https://business.google.com/b/115567602717440633337/dashboard/l/17853501432456514538?hl=en" target="blank"><i class="fa fa-google-plus-square fa-2x"></i></a>
	                            <a href="https://twitter.com/logivalley" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
	                            <!-- <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a> -->
	                            <a href="https://www.linkedin.com/in/logivalley-private-limited-9ab355139/" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
	                            <!-- <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a> -->
	                            <!-- <a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a> -->
	                        </div>
	                        <a href="contact.php" class="btn btn-lg btn-danger">GET A FREE QUOTE</a>
	                    </div>
	                    <div class="col-sm-2 wow zoomIn" data-wow-delay="0.3s">
                    		<h4>WE OFFERS</h4>
	                        <nav>
                        		<a href="domestic-distribution.html">Domestic Distribution</a>
	                            <a href="air-cargo.html">Air Cargo</a>
	                            <a href="warehouse.html">Warehouse</a>
	                            <a href="road-cargo.html">Road Cargo</a>
	                            <a href="rail-cargo.html">Rail Cargo</a>
	                        </nav>
	                    </div>
	                    <div class="col-sm-2 wow zoomIn" data-wow-delay="0.3s">
                    		<h4>MAIN LINKS</h4>
	                        <nav>
                        		<a href="index.html">Home</a>
	                            <a href="about.html">About Us</a>
	                            <a href="third-party-logistics.html">Third Party Logistics</a>
	                            <a href="contact.php">Contact</a>
	                             <a href="#" data-toggle="modal" data-target="#login-modal">User Login</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Login to Your Account</h1><br>
          <form>
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pass" placeholder="Password">
          <input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>
          
        </div>
      </div>
      </div>
	                            <a class="" href="http://logivalley.com/admin/index.php" target="blank">Admin Login</i></a>
	                        </nav>
	                    </div>
	                    <div class="col-sm-4 wow zoomIn" data-wow-delay="0.3s">
                    		<h4>CONTACT INFO</h4>
	                        <div class="contact-info">
	                        <span><i class="fa fa-location-arrow" style="margin-top:5px;"></i><strong>34,Balaji Tower, Opp.
                            sanpada Rly Stn, sanpada
                            <br/>Navi Mumbai - 400703</span>
	                            <span><i class="fa fa-phone"></i>+91 22-49705002</span>
	                            <span><i class="fa fa-envelope"></i>support@logivalley.com</span>
	                            <span><i class="fa fa-clock-o"></i>Mon - Sat  8.00 - 19.00</span>
	                        </div>
	                    </div>
	                </div>
             <div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
             		<h8 style="color: gray;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="privacy-policy.html" target="blank">Privacy Policy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="terms-of-services.html" target="blank"> Terms of Services</a> </div>|<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
             		<h8 style="color: gray;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="privacy-policy.html" target="blank">Privacy Policy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="terms-of-services.html" target="blank"> Terms of Services</a> </div>
	             </div>
	        </footer>
		</div>
                
        <!--Main-->   
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        
        <script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
        <!--Owl Carousel-->
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
        <!--Theme-->
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
        <script src="js/theme.js"></script>
	</body>

<!-- Mirrored from html.templines.com/sokolcov/transcargo/03_about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 10:18:06 GMT -->
</html>