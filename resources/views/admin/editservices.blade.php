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
							<li><a class="active" href="/admin/contact">Contact</a></li>
			

                        <form action="/admin/searchservice" class="form-inline" method="post">
                              {{ csrf_field() }}
                                <input class="form-control mr-sm-2" name="sname" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- //navigation -->
</div>
<br>
<h3 class="w3l_header">EDIT</h3> <br> 
<div class="container">
     <div class="row">
       <div class="col">
     <form action="/admin/servicesedit/{{ $services->id }}" method="post" enctype="multipart/form-data" >

        {{ csrf_field() }}

        <div class="form-group">
    		<label for="servicename">Service Name</label>
    		<input value="{{ $services->sname }}" type="text" class="form-control" name="sname" id="servicename" placeholder="Service Name" required>
  		</div>
		  
        <div class="form-group">
          <label for="servicedesc">Description</label>
          <textarea value="{{ $services->sdesc }}" class="form-control" name="sdesc" id="servicedesc" placeholder="Description"  rows="3" required></textarea>
        </div>

		<div class="form-group">
			<label for="servicerate">Rate</label>
			<input value="{{ $services->srate }}" type="number" class="form-control" name="srate" id="servicerate"  placeholder="Rate" required>
		</div>

		<div class="form-group">
			<label for="serviceimage">Image</label>
			<input value="{{ $services->simage }}" type="file" class="form-control" name="simage" id = "serviceimage" >
		</div>

		<!--<div class="form-group">
			<label for="stdate">Start Date</label>
			<input value="{{ $services->start_date }}" type="date" class="form-control" name="start_date" id="stdate" required>
		</div>

		<div class="form-group">
			<label for="enddate">End Date</label>
			<input value="{{ $services->end_date }}" type="date" class="form-control" name="end_date" id="enddate" required>
		</div> -->

		<div class="form-group">
			<label for="sttime">Start Time</label>
			<input value="{{ $services->start_time }}" type="time" class="form-control" name="start_time" id="sttime"  required>
		</div>

		<div class="form-group">
			<label for="endtime">End Time</label>
			<input value="{{ $services->end_time }}" type="time" class="form-control" name="end_time" id="endtime"  required>
		</div>

		<div class="form-group">
			<label for="dur">Duration(H:m)</label>
			<input value="{{ $services->duration }}" type="time" class="form-control" name="duration" id="dur"  required>
		</div>

  		<button type="submit" class="btn btn-outline-success">SUBMIT</button>
     </form>
     </div>
    </div>



    </div><a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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