<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Beauty Salon</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Beauty Salon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style Sheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-CSS -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Style Sheets -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<!--// web-fonts -->
</head>

<body>
	<!-- banner -->
	<div class="banner-1 jarallax" id="home">
		<img class="jarallax-img" src="assets/images/22.jpg" alt="">
        <header>
			<div class="container">
				<div class="header-bottom-agileits">
					<div class="w3-logo">
						<h1><a href="/">Beauty Salon</a></h1>
					</div>
					<div class="address">
						<p>4th block,Panampilly Nagar.</p>
						<p class="para-y"><a href="/about">Get more info</a></p>
					</div>
					<div class="nav-contact-w3ls">
						<p>No Account?</p>
						<p class="para-y"><a href="/register">Sign Up</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</header>
		<!-- navigation -->
	<div class="nav-bg">
		<div class="container">
			<nav class="navbar navbar-expand-lg ">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					    aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					<li><a  href="/">Home</a></li>
						<li><a  href="/services">Services</a></li>
						<li><a href="/gallery">Gallery</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/login">Sign In</a></li>
					</ul>

				</div>
				<!-- /.navbar-collapse -->

			</nav>
		</div>
	</div>
	<!-- //navigation -->
	</div>
 <br>
<div class="container">
     <div class="row">
       <div class="col">
		<h3 class="w3l_header">LOGIN</h3> <br>

        <form action="/loginread" method="post">

          {{ csrf_field() }}

		<div class="form-group">
    		<label for="email-id">User name</label>
    		<input type="text" class="form-control" name="uname" id="email-id" placeholder="Your Email-id">
  		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="pswd" placeholder="Your Password">
		 </div>
  		<button type="submit" class="btn btn-outline-success">LOGIN</button>
  	  </form>

       </div>
	 </div>
    </div>
		<br>

		<!-- footer -->
		<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
		<div class="col-md-4 w3layouts_footer_grid">
					<h2>Contact <span>Information</span></h2>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, <label> New York City.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h2>Subscribe <span>Newsletter</span></h2>
					<p>By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h3>Recent <span>Works</span></h3>
					 <ul class="con_inner_text midimg">
						<li><a href="#"><img src="assets/images/p2.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="assets/images/p3.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="assets/images/p4.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="assets/images/p5.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="assets/images/p6.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="assets/images/p7.jpg" alt="" class="img-responsive" /></a></li>
						 <li><a href="#"><img src="assets/images/p8.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="assets/images/p9.jpg" alt="" class="img-responsive" /></a></li>
				     </ul>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<p class="copyright">© 2017 Beauty Salon. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
	<!-- //footer -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
	</html>
	