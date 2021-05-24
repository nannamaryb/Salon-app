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
	<link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-CSS -->
	<link href="{{ asset('/assets/css/font-awesome.css') }}" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Style Sheets -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<!--// web-fonts -->
</head>

<body>

<!-- banner -->
<div class="banner-1 jarallax" id="home">
		<img class="jarallax-img" src="{{ asset('/assets/images/22.jpg') }}" alt="">
		<header>
			<div class="container">
				<div class="header-bottom-agileits">
					<div class="w3-logo">
						<h1><a href="/customer/index">La Belle</a></h1>
					</div>
					<div class="address">
						<p>4th block,</p>
						<p>Panampilly Nagar.</p>
					</div>
					<div class="nav-contact-w3ls">
						<p>View Profile</p>
						<p><a class="btn btn-outline-warning" href="/customer/profile">My Profile</a></p>
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
					        <li><a  href="/customer/index">Home</a></li>
							<li><a class="active" href="/customer/viewservices">Services</a></li>
							<li><a href="/customer/mybookings">My Bookings</a></li>
						    <li><a href="/customer/gallery">Gallery</a></li> 
					      	<li><a href="/customer/about">About</a></li> 
							<li><a href="/customer/contact">Contact</a></li> 
					</ul>
				</div>
				<div>
				<form action="/customer/searchservice" class="form-inline" method="post">
                              {{ csrf_field() }}
                                <input class="form-control mr-sm-2" name="sname" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                </form> 
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
	   @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{  Session::get('fail') }}
            </div>
        @endif

		@if(Session::get('success'))
            <div class="alert alert-success">
            {{  Session::get('success') }}
            </div>
        @endif

		<h3 class="w3l_header">SERVICES</h3> <br>
        <div class="container">
        <div class="row">
        <div class="col">
            <table class="table table-hover">
            <thead>
                <th>SERVICE</th>
                <th>DESCRIPTION</th>
                <th>RATE</th>
				<th>DURATION(H:m)</th>
                <th>IMAGE</th>
                <th></th>
            </thead>
            <tbody>
            @foreach($services as $service)
            <tr>
                <td> {{ $service->sname }} </td>
                <td> {{ $service->sdesc }} </td>
                <td> {{ $service->srate }} </td>
				<td> {{ $service->duration }} </td>
                <td><img  style="border-radius:50%; width:80px;"  src="{{URL::asset('/assets/imgages/'.$service->simage) }}" ></td>
                <td>
                <div class="btn">
                <a href={{"/customer/booking/".$service->id}} class="btn btn-outline-success">Book Now</a>
                </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
 </div>

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type='text/javascript' src="{{ asset('/assets/js/jquery-2.2.3.min.js') }}"></script>
	<!-- start-smoth-scrolling -->


	<script src="{{ asset('/assets/js/jarallax.js') }}"></script>

	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- flexSlider -->
	<script defer src="{{ asset('/assets/js/jquery.flexslider.js') }}"></script>
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
	<script src="{{ asset('/assets/js/owl.carousel.js') }}"></script>
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
	<script type="text/javascript" src="{{ asset('/assets/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/js/easing.js') }}"></script>
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
	<script src="{{ asset('/assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('/assets/js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!--js for bootstrap working-->
	<script src="{{ asset('/assets/js/bootstrap.js') }}"></script>
	<!-- //for bootstrap working -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>