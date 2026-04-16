<?php

class PageConstructor {
	public function getHead(string $title = "Sonemar Solar"): string {
		return <<<HEADER
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
	<title>$title</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav css -->
	<link href="css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper css -->
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<!-- Font Awesome icon css-->
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated css -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- Magnific css -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Main custom css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
HEADER;
	}

	public function getFooter(): string {
		$footer_link = str_contains(__FILE__, "index.php")? "":"index.php";

		return <<<FOOTER
	<!-- Footer Ticker Start -->
	<div class="footer-ticker">
		<div class="scrolling-ticker">
            <div class="scrolling-ticker-box">
                <div class="scrolling-content">
                    <span>Generate Your Own Power</span>
					<span>Reap the Returns</span>
					<span>Heal the World</span>
					<span>Efficiency & Power</span>
                </div>

                <div class="scrolling-content">
                    <span>Generate Your Own Power</span>
					<span>Reap the Returns</span>
					<span>Heal the World</span>
					<span>Efficiency & Power</span>
                </div>
            </div>
        </div>
	</div>
	<!-- Footer Ticker End -->

	<!-- Footer Start -->
	<footer class="main-footer">
		<!-- Footer Contact Start -->
		<div class="footer-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<!-- Footer Contact Box Start -->
						<div class="footer-contact-box wow fadeInUp" data-wow-delay="0.25s">
							<div class="contact-icon-box">
								<img src="images/icon-email.svg" alt="">
							</div>

							<div class="footer-contact-info">
								<h3>Support & Email</h3>
								<p>info@sonemar-solar.com</p>
							</div>
						</div>
						<!-- Footer Contact Box End -->
					</div>

					<div class="col-lg-4">
						<!-- Footer Contact Box Start -->
						<div class="footer-contact-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="contact-icon-box">
								<img src="images/icon-phone.svg" alt="">
							</div>

							<div class="footer-contact-info">
								<h3>Customer Support</h3>
								<p>+63 908 773 8794</p>
							</div>
						</div>
						<!-- Footer Contact Box End -->
					</div>

					<div class="col-lg-4">
						<!-- Footer Contact Box Start -->
						<div class="footer-contact-box wow fadeInUp" data-wow-delay="0.75s">
							<div class="contact-icon-box">
								<img src="images/icon-location.svg" alt="">
							</div>

							<div class="footer-contact-info">
								<h3>Our Location</h3>
								<p>Rizal Village, Cupang Muntinlupa City, The Philippines</p>
							</div>
						</div>
						<!-- Footer Contact Box End -->
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Contact End -->

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Mega Footer Start -->
					<div class="mega-footer">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<!-- Footer About Start -->
								<div class="footer-about">
									<figure>
										<img src="images/footer-logo.svg" alt="">
									</figure>
									<p>Sonemar Solar is dedicated to delivering reliable and affordable solar energy solutions across the Philippines. We help homes and businesses reduce costs and transition to clean, renewable power.</p>
								</div>
								<!-- Footer About End -->

								<!-- Footer Social Link Start -->
								<div class="footer-social-links">
									<ul>
										<li><a href="TBD.php"><i class="fa-brands fa-facebook-f"></i></a></li>
										<li><a href="TBD.php"><i class="fab fa-twitter"></i></a></li>
										<li><a href="TBD.php"><i class="fa-brands fa-linkedin-in"></i></a></li>
										<li><a href="TBD.php"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
								<!-- Footer Social Link End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<h2>Quick Links</h2>
									<ul>
										<li><a href="$footer_link#">Home</a></li>
										<li><a href="$footer_link#about">About Us</a></li>
										<li><a href="TBD.php">Services</a></li>
										<li><a href="TBD.php">Blog</a></li>
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="team.php">Our Team</a></li>
									</ul>
								</div>
								<!-- Footer Links End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<h2>Services</h2>
									<ul>
										<li><a href="TBD.php">Consultancy</a></li>
										<li><a href="TBD.php">Solar System</a></li>
										<li><a href="TBD.php">Solar Panel</a></li>
										<li><a href="TBD.php">Style Guide</a></li>
										<li><a href="TBD.php">License</a></li>
									</ul>
								</div>
								<!-- Footer Links End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<h2>Useful Links</h2>
									<ul>
										<li><a href="TBD.php">Privacy Policy</a></li>
										<li><a href="TBD.php">Term & Conditions</a></li>
										<li><a href="TBD.php">Warranty</a></li>
										<li><a href="TBD.php">Support</a></li>
										<li><a href="TBD.php">Damage Policy</a></li>
									</ul>
								</div>
								<!-- Footer Links End -->
							</div>
						</div>
					</div>
					<!-- Mega Footer End -->

					<!-- Copyright Footer Start -->
					<div class="footer-copyright">
						<div class="row">
							<div class="col-md-12">
								<!-- Footer Copyright Content Start -->
								<div class="footer-copyright-text">
									<p>Copyright © 2026 Sonemar. All rights reserved.</p>
								</div>
								<!-- Footer Copyright Content End -->
							</div>
						</div>
					</div>
					<!-- Copyright Footer End -->
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- Jquery Library File -->
	<script src="js/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Validator js file -->
	<script src="js/validator.min.js"></script>
	<!-- SlickNav js file -->
	<script src="js/jquery.slicknav.js"></script>
	<!-- Swiper js file -->
	<script src="js/swiper-bundle.min.js"></script>
	<!-- Counter js file -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Magnific js file -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
	<!-- Parallax js -->
	<script src="js/parallaxie.js"></script>
	<!-- MagicCursor js file -->
	<script src="js/gsap.min.js"></script>
	<script src="js/magiccursor.js"></script>
	<!-- Text Effect js file -->
	<script src="js/splitType.js"></script>
	<script src="js/ScrollTrigger.min.js"></script>
	<!-- YTPlayer js file -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Wow js file -->
	<script src="js/wow.js"></script>
	<!-- Main Custom js file -->
	<script src="js/function.js"></script>
FOOTER;

	}

	public function getHeader() : string
	{
		$footer_link = str_contains(__FILE__, "index.php")? "":"index.php";

		return <<<HEADER
<!-- Preloader Start -->
<div class="preloader">
	<div class="loading-container">
		<div class="loading"></div>
		<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
	</div>
</div>
<!-- Preloader End -->

<!-- Magic Cursor Start -->
<div id="magic-cursor">
	<div id="ball"></div>
</div>
<!-- Magic Cursor End -->

<!-- Topbar Section Start -->
<div class="topbar wow fadeInUp">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Topbar Contact Information Start -->
				<div class="topbar-contact-info">
					<ul>
						<li><a href="TBD.php"><i class="fa-solid fa-envelope"></i> info@sonemar-solar.com</a></li>
						<li><a href="TBD.php"><i class="fa-solid fa-phone"></i> +63 908 773 8794</a></li>
					</ul>
				</div>
				<!-- Topbar Contact Information End -->
			</div>

			<div class="col-md-4">
				<!-- Topbar Social Links Start -->
				<div class="header-social-links">
					<ul>
						<li><a href="TBD.php"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="TBD.php"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="TBD.php"><i class="fa-brands fa-linkedin-in"></i></a></li>
						<li><a href="TBD.php"><i class="fa-brands fa-instagram"></i></a></li>
					</ul>
				</div>
				<!-- Topbar Social Links End -->
			</div>
		</div>
	</div>
</div>
<!-- Topbar Section End -->

<!-- Header Start -->
<header class="main-header">
	<div class="header-sticky">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<!-- Logo Start -->
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.svg" alt="Logo">
				</a>
				<!-- Logo End -->

				<!-- Main Menu start -->
				<div class="collapse navbar-collapse main-menu">
					<ul class="navbar-nav mr-auto" id="menu">
						<li class="nav-item"><a class="nav-link" href="./">Home</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="$footer_link#about">About us</a></li>
						<li class="nav-item"><a class="nav-link" href="$footer_link#services">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
						<!--							<li class="nav-item submenu"><a class="nav-link" href="TBD.php">Pages</a>-->
						<!--								<ul>-->
						<!--									<li class="nav-item"><a class="nav-link" href="service-single.html">Service Details</a></li>-->
						<!--									<li class="nav-item"><a class="nav-link" href="project-single.html">Project Details</a></li>-->
						<!--									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>-->
						<!--									<li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Single</a></li>-->
						<!--									<li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>-->
						<!--									<li class="nav-item"><a class="nav-link" href="team-single.html">Team Details</a></li>-->
						<!--									<li class="nav-item"><a class="nav-link" href="faq.php">FAQs</a></li>-->
						<!--									<li class="nav-item"><a class="nav-link" href="404.php">404</a></li>-->
						<!--								</ul>-->
						<!--							</li>-->
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item highlighted-menu"><a class="nav-link" href="TBD.php">Book Now</a></li>
					</ul>
				</div>
				<!-- Main Menu End -->

				<div class="navbar-toggle"></div>
			</div>
		</nav>

		<div class="responsive-menu"></div>
	</div>
</header>
<!-- Header End -->

HEADER;

	}
}
