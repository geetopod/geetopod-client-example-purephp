<?php
global $g_online, $g_sso_in_use;
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>unapp Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/unapp/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/unapp/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/unapp/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/unapp/css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/unapp/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/unapp/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/unapp/css/style.css">

	<!-- Modernizr JS -->
	<script src="/unapp/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="/unapp/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="/">Unapp</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="/">Home</a></li>
								<li class="has-dropdown">
									<a href="/s/work.html">Works</a>
									<ul class="dropdown">
										<li><a href="/s/work-grid.html">Works grid with text</a></li>
										<li><a href="/s/work-grid-without-text.html">Works grid w/o text</a></li>
									</ul>
								</li>
								<li class="active"><a href="/s/services.html">Services</a></li>
								<li><a href="/s/blog.html">Blog</a></li>
								<li><a href="/s/about.html">About</a></li>
								<li><a href="/s/shop.html">Shop</a></li>
								<li><a href="/s/contact.html">Contact</a></li>

                            <?php
                                if ($g_online) {
                            ?>
                            <li><a href="/u/profile">Profile</a></li>

                                <?php
                                    if ($g_sso_in_use) {
                                ?>
                            <li><a href="/logout">Logout</a></li>
                                <?php
                                    } else {
                                ?>
                            <li><a href="/logallout">Logout</a></li>
                                <?php
                                    }
                                ?>

                            <?php
                                } else {
                            ?>
                            <li><a href="/register">Register</a></li>
                            <li><a href="/login">Login</a></li>
                            <?php
                                }
                            ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="home" class="video-hero" style="height: 500px; background-image: url(/unapp/images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Services</h2>
								<p class="breadcrumbs"><span><a href="/">Home</a></span> <span>Services</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-browser"></i>
							</span>
							<div class="desc">
								<h3>Create your own template</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-download"></i>
							</span>
							<div class="desc">
								<h3>Automatic Backup Data</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-layers"></i>
							</span>
							<div class="desc">
								<h3>Page Builder</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-video"></i>
							</span>
							<div class="desc">
								<h3>Watch tutorial</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-gears"></i>
							</span>
							<div class="desc">
								<h3>Help &amp; Support</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-adjustments"></i>
							</span>
							<div class="desc">
								<h3>Lots of features</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About unapp</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Home</a></li>
								<li><a href="#"><i class="icon-check"></i> Gallery</a></li>
								<li><a href="#"><i class="icon-check"></i> About</a></li>
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
								<li><a href="#"><i class="icon-check"></i> Privacy</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Blog</h4>
						<div class="f-blog">
							<a href="/s/blog.html" class="blog-img" style="background-image: url(/unapp/images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="/s/blog.html">Photoshoot Technique</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="/s/blog.html" class="blog-img" style="background-image: url(/unapp/images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="/s/blog.html">Camera Lens Shoot</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(/s/images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="/s/blog.html">Imahe the biggest photography studio</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br> 
								Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/unapp/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/unapp/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/unapp/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/unapp/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/unapp/js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="/unapp/js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="/unapp/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/unapp/js/jquery.magnific-popup.min.js"></script>
	<script src="/unapp/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="/unapp/js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="/unapp/js/main.js"></script>

	</body>
</html>

