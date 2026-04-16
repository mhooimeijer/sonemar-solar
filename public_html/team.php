<?php
include_once 'PageConstructor.php';
$page = new PageConstructor();
$head = $page->getHead("Sonemar Solar - Homepage");
$header = $page->getHeader();
$footer = $page->getFooter();
?>
<!DOCTYPE html>
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
						<h1 class="text-anime">Our Team</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Our Team</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Team Page Start -->
	<div class="page-team">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Team Item Start -->
					<div class="team-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="team-image">
							<figure class="image-anime">
								<img src="images/martijn_teams_photo.jpg" alt="">
							</figure>
						</div>

						<div class="team-content">
							<h2>Martijn Hooimeijer</h2>
							<p>Chief Executive Officer</p>
							<a href="#" class="btn-team-link">
								<img src="images/icon-link-dark.svg" alt="">
							</a>
						</div>
					</div>
					<!-- Team Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Team Item Start -->
					<div class="team-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="team-image">
							<figure class="image-anime">
								<img src="images/team-2.jpg" alt="">
							</figure>
						</div>

						<div class="team-content">
							<h2>Sol Cunanan</h2>
							<p>Board Member</p>
							<a href="#" class="btn-team-link">
								<img src="images/icon-link-dark.svg" alt="">
							</a>
						</div>
					</div>
					<!-- Team Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Team Item Start -->
					<div class="team-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="team-image">
							<figure class="image-anime">
								<img src="images/team-3.jpg" alt="">
							</figure>
						</div>

						<div class="team-content">
							<h2>Nestee Cunanan</h2>
							<p>Board Member</p>
							<a href="#" class="btn-team-link">
								<img src="images/icon-link-dark.svg" alt="">
							</a>
						</div>
					</div>
					<!-- Team Item End -->
				</div>


			</div>
		</div>
	</div>
	<!-- Team Page End -->
	
	<?=$footer?>
</body>
</html>