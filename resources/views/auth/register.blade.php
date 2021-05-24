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
						<h1><a href="/">La Belle</a></h1>
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
							<li><a  href="/">Home</a></li>
							<li><a href="/viewservices">Services</a></li>
                            <li><a href="/about">About</a></li>
							<li><a href="/gallery">Gallery</a></li>
							<li><a href="/contact">Contact</a></li>
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

		<h3 class="w3l_header">REGISTER</h3> <br>

      <form action="{{ route('auth.save') }}" method="post">
	    
        @if(Session::get('success'))
            <div class="alert alert-success">
            {{  Session::get('success') }}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{  Session::get('fail') }}
            </div>
        @endif
      
      @csrf

		<div class="form-group">
    		<label for="customername">Name</label>
    		<input type="text" class="form-control" name="cname" id="customername" placeholder="Your Name" value="{{ old('cname') }}" >
  		
          <span class="text-danger">@error('cname'){{ $message }} @enderror </span>
          </div>
		<div class="form-group">
    		<label for="customermob">Mobile No</label>
    		<input type="number" class="form-control" name="cmob" id="customermob" placeholder="Mobile Number" value="{{ old('cmob') }}" >
            <span class="text-danger">@error('cmob'){{ $message }} @enderror </span>
          </div>
  		<div class="form-group">
    		<label for="customermail">Email address</label>
    		<input type="email" class="form-control"  aria-describedby="emailHelp" name="cemail" id="customermail" placeholder="Your Email-Id" value="{{ old('cemail') }}" >
            <span class="text-danger">@error('cemail'){{ $message }} @enderror </span>
          </div>

		<div class="form-group">
			<label for="customerPassword">Password</label>
			<input type="password" class="form-control" name="cpass" id="customerPassword"  placeholder="Your Password" >
            <span class="text-danger">@error('cpass'){{ $message }} @enderror </span>
         </div>
	
		<div class="form-group">
			<label for="customerconpass">Confirm Password</label>
			<input type="password" class="form-control" id="customerconpass" name="conpass" placeholder="Confirm Password" >
            <span class="tex-danger">@error('conpass'){{ $message }} @enderror </span>
        </div>
  		<button type="submit" class="btn btn-outline-success">SUBMIT</button><a href="{{ route('auth.login') }}"> Aldready have an account, sign in </a>
        </form>
       </div>
	 </div>
      </div>
	
		<br>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>