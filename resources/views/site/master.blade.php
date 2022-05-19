<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
@stack('css-style')
<link rel="stylesheet" type="text/css" href="{{ asset('template/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset("template/plugins/font-awesome-4.7.0/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset("template/plugins/OwlCarousel2-2.2.1/owl.carousel.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("template/plugins/OwlCarousel2-2.2.1/animate.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("template/styles/main_styles.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("template/styles/responsive.css") }}">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->
        @include("site.top-header")

		<!-- Main Navigation -->

        @include("site.menu")

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

    @yield("content")

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="{{ asset("template/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("template/styles/bootstrap4/popper.js") }}"></script>
<script src="{{ asset("template/styles/bootstrap4/bootstrap.min.js") }}"></script>
<script src="{{ asset("template/plugins/Isotope/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("template/plugins/OwlCarousel2-2.2.1/owl.carousel.js") }}"></script>
<script src="{{ asset("template/plugins/easing/easing.js") }}"></script>
<script src="{{ asset("template/js/custom.js") }}"></script>
@stack('script-style')
</body>

</html>
