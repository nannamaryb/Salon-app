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
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-CSS -->
	<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Style Sheets -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<!--// web-fonts -->
</head>

<body>
	<!-- banner -->
	<div class="banner-1 jarallax" id="home">
		<img class="jarallax-img" src="{{ asset('assets/images/22.jpg') }}" alt="">
		<header>
			<div class="container">
				<div class="header-bottom-agileits">
					<div class="w3-logo">
						<h1><a href="/admin/index">La Belle</a></h1>
					</div>
					<div class="address">
						<p>4th block,</p>
					    <p>Panampilly Nagar.</p>
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
					<li><a  href="/admin/index">Home</a></li>

					<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Services</a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="/admin/addservices">Add Services</a></li>
									<li><a href="/admin/viewservices">View Services</a></li>
								</ul>
					</li> 

					<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">View</a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="/admin/viewbookings">Bookings</a></li>
									<li><a href="/admin/viewcustomers">Customers</a></li>	
								</ul>		
					</li> 
					<li><a href="/admin/gallery">Gallery</a></li> 
					<li><a href="/admin/about">About</a></li> 
					<li><a href="/admin/contact">Contact</a></li>
				
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

	   @if(Session::get('success'))
            <div class="alert alert-success">
            {{  Session::get('success') }}
            </div>
        @endif

		<h3 class="w3l_header">ADD SERVICES</h3> <br>

      <form action="/admin/servicesread" method="post" enctype="multipart/form-data">
	  {{ csrf_field() }}

		<div class="form-group">
    		<label for="servicename">Service Name</label>
    		<input type="text" class="form-control" name="sname" id="servicename" placeholder="Service Name" required>
  		</div>
		  
        <div class="form-group">
          <label for="servicedesc">Description</label>
          <textarea class="form-control" name="sdesc" id="servicedesc" placeholder="Description"  rows="3" required></textarea>
        </div>

		<div class="form-group">
			<label for="servicerate">Rate</label>
			<input type="number" class="form-control" name="srate" id="servicerate"  placeholder="Rate" required>
		</div>
		 
		<div class="form-group">
			<label for="file">Image</label>
			<input type="file" class="form-control" name="simage" id = "serviceimage" >
			<!--<img  alt="service image" style="max-width:130px;margin-top:20px;" /> -->
		</div>


		<div class="form-group">
			<label for="duration">Duration</label>
			<input type="time" min="<?php echo(new DateTime('00:00'))->format('H:i:s');?>" max="09:00" class="form-control" name="duration" id="duration"  placeholder="Duration" required>
		</div>
		
  		<button type="submit" class="btn btn-outline-success">SUBMIT</button>
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
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>4th block, <label> Panampilly Nagar.</label></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">labelle@gmail.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span> +91 9876543210</li>
					</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h3>Services <span>Provided</span></h3>
					<ul class="con_inner_text midimg">
						<li><a href="#"><img src="{{ asset('assets/images/p2.jpg') }}" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{ asset('assets/images/p3.jpg') }}" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{ asset('assets/images/p4.jpg') }}" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{ asset('assets/images/p5.jpg') }}" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{ asset('assets/images/p6.jpg') }}" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{ asset('assets/images/p7.jpg') }}" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{ asset('assets/images/p8.jpg') }}" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{ asset('assets/images/p9.jpg') }}" alt="" class="img-responsive" /></a></li>
					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	
	</div>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type='text/javascript' src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script>
	<!-- start-smoth-scrolling -->


	<script src="{{ asset('assets/js/jarallax.js') }}"></script>

	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- flexSlider -->
	<script defer src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->

	<!-- Owl-Carousel-JavaScript -->
	<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 2,
				lazyLoad: true,
				autoPlay: false,
				pagination: true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->
	<script type="text/javascript" src="{{ asset('assets/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/easing.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- stats -->
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!--js for bootstrap working-->
	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
	<!-- //for bootstrap working -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>