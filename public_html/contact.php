<?php
include_once 'PageConstructor.php';
$page = new PageConstructor();
$head = $page->getHead("Sonemar Solar - Homepage");
$header = $page->getHeader();
$footer = $page->getFooter();
?><!DOCTYPE html>
<html lang="zxx">
<?=$head?>
<body class="tt-magic-cursor">

    <?=$header?>

	<!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime">Contact us</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contact us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Contact Information Section Start -->
	<div class="contact-information">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Contact Details</h3>
						<h2 class="text-anime">Happy to Answer All Your Questions</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="contact-image">
							<figure class="image-anime">
								<img src="images/location-img.jpg" alt="">
							</figure>
						</div>

						<div class="contact-info-content">
							<h3>Our Address:</h3>
							<p>Rizal Village, Cupang Muntinlupa City, The Philippines</p>
						</div>

						<div class="contact-icon">
							<img src="images/icon-location.svg" alt="">
						</div>
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="contact-image">
							<figure class="image-anime">
								<img src="images/email-img.jpg" alt="">
							</figure>
						</div>

						<div class="contact-info-content">
							<h3>Emails:</h3>
							<p>info@sonemar-solar.com</p>
						</div>

						<div class="contact-icon">
							<img src="images/icon-mail.svg" alt="">
						</div>
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="contact-image">
							<figure class="image-anime">
								<img src="images/phone-img.jpg" alt="">
							</figure>
						</div>

						<div class="contact-info-content">
							<h3>Phones:</h3>
							<p>(+63) 908 773 8794</p>
						</div>

						<div class="contact-icon">
							<img src="images/icon-phone.svg" alt="">
						</div>
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="1.0s">
						<div class="contact-image">
							<figure class="image-anime">
								<img src="images/follow-img.jpg" alt="">
							</figure>
						</div>

						<div class="contact-info-content">
							<h3>Follow Us (TBD):</h3>
							<ul>
								<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							</ul>
						</div>

						<div class="contact-icon">
							<img src="images/icon-follow.svg" alt="">
						</div>
					</div>
					<!-- Contact Info Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Information Section End -->

	<!-- Google Map & Contact Form Section Start -->
	<div class="google-map-form">
		<div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.993133822893!2d121.04150039999999!3d14.4275592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1f08c9c3d7d%3A0x7edd7e517c8b5c40!2sAlabang%20Residences!5e0!3m2!1snl!2sph!4v1776339107455!5m2!1snl!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6">
					<div class="contact-form-box">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">Contact Now</h3>
							<h2 class="text-anime">Get In Touch With Us</h2>
						</div>
						<!-- Section Title End -->

						<!-- Contact Form start -->
						<div class="contact-form wow fadeInUp" data-wow-delay="0.75s">
							<form id="contactForm" action="#" method="POST" data-toggle="validator">
								<div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="name" class="form-control" id="name" placeholder="Name" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="email" name ="email" class="form-control" id="email" placeholder="Email" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-4">
										<textarea name="msg" class="form-control" id="msg" rows="4" placeholder="Write a Message" required></textarea>
										<div class="help-block with-errors"></div>
									</div>

									<div class="col-md-12 text-center">
										<button type="submit" class="btn-default">Submit Now</button>
										<div id="msgSubmit" class="h3 text-left hidden"></div>
									</div>
								</div>
							</form>
						</div>
						<!-- Contact Form end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Google Map & Contact Form Section End -->
    <?=$footer?>
</body>
</html>