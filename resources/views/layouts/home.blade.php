<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('title')
    <link href="{{ asset('catalogue/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('catalogue/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('catalogue/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('catalogue/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('catalogue/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('catalogue/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('catalogue/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('catalogue/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('catalogue/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('catalogue/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('catalogue/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('catalogue/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <style media="screen">

    </style>




</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +6012-3456 789</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> project@azwan.my</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ url('/') }}"><img src="{{ asset('catalogue/images/home/logo.png') }}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i>Login</a></li>
                    <li><a href="{{ url('/register') }}"><i class="fa fa-book"></i>Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
                {{-- <li><a href="{{ url('/register') }}"><i class="fa fa-book"></i> Register</a></li>
								<li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a></li> --}}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{ url('/') }}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i>
                </a><ul role="menu" class="sub-menu">
                    <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="{{ url('/login') }}">Login</a></li>
                    </ul>
                </li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

@yield('content')

	<footer><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
  <script src="{{ asset('catalogue/js/jquery.js') }}"></script>
  <script src="{{ asset('catalogue/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('catalogue/js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('catalogue/js/price-range.js') }}"></script>
  <script src="{{ asset('catalogue/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('catalogue/js/main.js') }}"></script>
</body>
</html>
