<!DOCTYPE html>
<html>
<head>
	<title>AKAD - Creative Digital Agency HTML Template</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="application/views/assets/img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

	<!-- STYLES -->
	<link rel="stylesheet" href="application/views/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="application/views/assets/css/ionicons.min.css">
	<link rel="stylesheet" href="application/views/assets/css/flexslider.css">
	<link rel="stylesheet" href="application/views/assets/css/animsition.min.css">
	<link rel="stylesheet" href="application/views/assets/css/animate.css">
	<link rel="stylesheet" href="application/views/assets/css/style.css">
</head>
<body class="animsition">
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container">
			<div class="logo">
				<a href="/main"><img src="application/views/assets/img/logo.png" alt="logo"></a>
			</div>

			<div class="menu">
				<!-- desktop navbar -->
				<nav class="desktop-nav">
					<ul class="first-level">
						<li><a href="/main" class="animsition-link">Home</a></li>
						<li><a href="/about" class="animsition-link">about us</a></li>
						<li><a href="/services" class="animsition-link">services</a></li>
						<li><a href="/portfolio">portfolio</a></li>
						<li><a href="/blog">blog</a></li>
						<li><a href="/contact" class="animsition-link">contact us</a></li>
					</ul>
				</nav>
				<!-- mobile navbar -->
				<nav class="mobile-nav"></nav>
				<div class="menu-icon">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
		</div>
	</header>
	
	<!--BODY(content) section of page-->
	
	<?php include 'application/views/'.$content_view; ?>

	
	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						Contact Us
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form action="#" method="post">
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER -->
	<footer class="main-footer wow fadeInUp">
		<div class="container">
			<div class="col-md-8 col-sm-12">
				<div class="row">
					<nav class="footer-nav">
						<ul>
						<li><a href="/main" class="animsition-link">Home</a></li>
						<li><a href="/about" class="animsition-link">about us</a></li>
						<li><a href="/services" class="animsition-link">services</a></li>
						<li><a href="/portfolio">portfolio</a></li>
						<li><a href="/blog">blog</a></li>
						<li><a href="/contact" class="animsition-link">contact us</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-md-4 col-sm-12" style="text-align:right">
				<div class="row">
					<div class="uppercase gray-text">
						created by akhouad &copy;2016. all rights reserved.
					</div>
					<ul class="social-icons" style="margin-top:30px;float:right">
						<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="application/views/assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="application/views/assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="application/views/assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="application/views/assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="application/views/assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="application/views/assets/js/wow.min.js"></script>
	<script type="text/javascript" src="application/views/assets/js/main.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			new WOW().init();

			// initialise flexslider
			$('.site-hero').flexslider({
				animation: "fade",
				directionNav: false,
				controlNav: false, 
				keyboardNav: true,
				slideToStart: 0,
				animationLoop: true,
				pauseOnHover: false,
				slideshowSpeed: 4000, 
			});


			// initialize isotope
			var $container = $('.portfolio_container');
			$container.isotope({
				filter: '*',
			});
		 
			$('.portfolio_filter a').click(function(){
				$('.portfolio_filter .active').removeClass('active');
				$(this).addClass('active');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
			}); 
		});
	</script>
</body>
</html>