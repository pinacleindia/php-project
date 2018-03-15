<?php
if(isset($_POST['submit']))
{
 $user_name = $_POST['user-name'];
 $user_email = $_POST['user-email'];
 $user_lastname = $_POST['user-lastname'];
 $user_phone = $_POST['user-phone'];
 $user_subject = $_POST['user-subject'];
 $user_message = $_POST['user-message'];
 // }
 $to = "support@logivalley.com";
 $headers = "Form: $name<$email>";
 $message = "Full Name: $user_name \n\nEmail Address: $user_email\n\nLast Name: $user_lastname\n\nUser Phone: $user_phone\n\nSubject: $user_subject\n\nMessage: $user_message";
 if(mail($to, $subject, $message, $headers) )
 {
    echo "Email sent";
 }
 else
 {
    echo "Error please try agin later";
 }
}    
?>
<!DOCTYPE html>
<html>
	
<!-- Mirrored from html.templines.com/sokolcov/transcargo/12_contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 10:19:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Logivalley | Contact</title>

		<link href="css/master.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login.css">
		<link rel="shortcut icon" href="img/logi-logo.ico" type="image/x-icon" />

		<!-- SWITCHER -->
		<!-- <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all" /> -->

		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="../../../d36mw5gp02ykm5.cloudfront.net/yc/adrns_y_is6175.js?v=6.11.120#p=wdcxwd1600aabs-00h4a0_wd-wcat3003806338060";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script></head>
	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Start Switcher -->
			<div class="switcher-wrapper">	
				<div class="demo_changer">
					<!-- <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div> -->
					<!-- <div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Color</h4>
										<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#a91605;"> </a>
										<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#228dcb;"> </a>
										<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#00bff3;"> </a>							
										<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#ff9600;"> </a>
										<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
										<a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<!-- End Switcher -->
			<header id="this-is-top">
	            <div class="container-fluid">
	                <div class="topmenu row">
	                    <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
	                        <!-- <a href="#">AIR CARGO</a>
	                        <a href="#">RAIL CARGO</a>
	                        <a href="#">ROAD CARGO</a> -->

	                    </nav>
	                    <nav class="text-right col-sm-3 col-md-3 col-lg-3">
	                    <a class="btn_header_search" href="/">Login</i></a>
	                        <a href="/"><i class="fa fa-facebook"></i></a>
	                        <a href="https://plus.google.com/u/0/collections/" target="blank"><i class="fa fa-google-plus"></i></a>
	                        <a href="/"><i class="fa fa-twitter"></i></a>
	                        <a href="/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

	                        <!-- <a href="#"><i class="fa fa-pinterest"></i></a> -->
	                        <!-- <a href="#"><i class="fa fa-youtube"></i></a> -->
	                    </nav>
	                </div>
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <a href="01_home.html" id="logo"></a>
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
							<li><a href="tracking.php">Tracking</a></li>
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

			<!-- <div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>road transportation</h1></a>
					<div class="pull-right">
						<a href="index.html"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;&nbsp;&nbsp; 
					</div>
				</div>
			</div> -->

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.9415268976836!2d73.00532701490101!3d19.066308337093556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fc5a0d89b38f586!2sBalaji+Towers!5e0!3m2!1sen!2sin!4v1490432257795" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>Head Office</h4>
						<p>Everyday is a new day for us and we work really hard to
							satisfy our customers everywhere.</p>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div>34,Balaji Tower, Opp. sanpada Rly Stn,<br/> sec-30A, Vashi, Navi Mumbai - 400703</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+91 22-49705002</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>support@logivalley.com</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Mon - Sat 9.30 - 18.30</div>
							</div>
						</div>
						<br><br><hr><br>
						<h4>Branch Office</h4>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div>Shop no. G 11, Jay Jalaram Complex, <br/>Pimlash, Bhiwandi- 421311</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+91 22-49705002</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>bhiwandi@logivalley.com</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Mon - Sat 9.30 - 18.30</div>
							</div>

						</div><br/>
						
							<!-- <button   data-toggle="modal" data-target=".bs-example-modal-lg"><img src="map1.png" alt=""></button>
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal fade bs-example-modal-lg" role="document"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close" align='center'><span aria-hidden="true">×</span></button> </div>  <div class="modal-body"> <div class="container"><img src="map-large.png" alt="" class="img-responsive"></div> </div>  </div>
	</div> -->

<button   data-toggle="modal" data-target=".bs-example-modal-lg"><img src="map1.png" alt="" class="img-responsive" width="100%"></button>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
  <div class="modal-content"> <img src="map-large.png" alt="" class="img-responsive" width="100%">   </div>
  </div>
</div>
<br/>

					</div>

					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>SEND us a message and get a quotation</h4>
						<!-- <p>Integer congue elit noin semper laoreet sed lectus orcil posuer nisal tempor se felis acm Pelentesque inyd urna. Integer vitae felis magna po estibulm Nam rutrumc diam. Aliquam malesuada maurs.</p> -->
						<div id="success"></div>

						<form  class="reply-form form-inline" method="post" action="">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-name"  placeholder="Full Name" required="required">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="user-email"  placeholder="Email Address" required="required">
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-lastname"  placeholder="Last Name">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="user-phone"  placeholder="Phone No.">
									</div>
								</div>
							</div>
							<div class="default-inp form-elem">
								<input type="text" name="user-subject"  placeholder="Subject">
							</div>
							<div class="form-elem default-inp">
								<textarea  name="user-message" placeholder="Message"></textarea>
							</div>

							<img src="caption2.png" alt="">
							<input type="text" name="caption">	
							<div class="form-elem">
								<button type="submit" name="submit" class="btn btn-success btn-default">Send Message</button>
							</div>
						</form>
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
	                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
	                            <a href="https://plus.google.com/u/0/collections/" target="blank"><i class="fa fa-google-plus-square fa-2x"></i></a>
	                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
	                            <!-- <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a> -->
	                            <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
	                            <!-- <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a> -->
	                            <!-- <a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a> -->
	                        </div>
	                        <a href="contact.php" class="btn btn-lg btn-danger">GET A FREE QUOTE</a>
	                    </div>
	                    <div class="col-sm-2 wow zoomIn" data-wow-delay="0.3s">
                    		<h4>WE OFFERS</h4>
	                        <nav>
                        		<a href="domestic-distribution.html">Domestic Distribution</a>
                        		<a href="third-party-logistics.html">Third Party Logistics</a>
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
	                            <a href="contact.php">Contact</a>
	                            <a class="btn_header_search" href="/">User Login</i></a>
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
             		<h8 style="color: gray;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="privacy-policy.html" target="blank">Privacy Policy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="terms-of-services.html" target="blank"> Terms of Services</a> </div>| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="privacy-policy.html">Privacy Policy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="terms-of-services.html"> Terms of Services</a> </div>
	             </div>
	        </footer>
		</div>

		<!--Main-->   
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<!--Contact form--> 
<!-- 		<script src="assets/contact/jqBootstrapValidation.js"></script> 
		<script src="assets/contact/contact_me.js"></script> -->
		<!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/theme.js"></script>
	</body>

<!-- Mirrored from html.templines.com/sokolcov/transcargo/12_contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 10:19:41 GMT -->
</html>