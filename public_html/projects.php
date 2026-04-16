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
						<h1 class="text-anime">Our Projects</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Projects</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Our Projects Page Start -->
	<div class="our-projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Project Item Start -->
					<div class="project-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="project-image">
							<figure>
								<img src="images/project-1.jpg" alt="">
							</figure>
						</div>

						<div class="project-content">
							<h2><a href="#">Placeholder for Future Project</a></h2>
							<p>Solar Power</p>
						</div>

						<div class="project-link">
							<a href="#"><img src="images/icon-link.svg" alt=""></a>
						</div>
					</div>
					<!-- Project Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Project Item Start -->
					<div class="project-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="project-image">
							<figure>
								<img src="images/project-2.jpg" alt="">
							</figure>
						</div>

						<div class="project-content">
							<h2><a href="#">Placeholder for Future Project</a></h2>
							<p>Solar Power</p>
						</div>

						<div class="project-link">
							<a href="#"><img src="images/icon-link.svg" alt=""></a>
						</div>
					</div>
					<!-- Project Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Project Item Start -->
					<div class="project-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="project-image">
							<figure>
								<img src="images/project-3.jpg" alt="">
							</figure>
						</div>

						<div class="project-content">
							<h2><a href="#">Placeholder for Future Project</a></h2>
							<p>GSolar Power</p>
						</div>

						<div class="project-link">
							<a href="#"><img src="images/icon-link.svg" alt=""></a>
						</div>
					</div>
					<!-- Project Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Project Item Start -->
					<div class="project-item wow fadeInUp" data-wow-delay="1.0s">
						<div class="project-image">
							<figure>
								<img src="images/project-4.jpg" alt="">
							</figure>
						</div>

						<div class="project-content">
							<h2><a href="#">Placeholder for Future Project</a></h2>
							<p>Solar Power</p>
						</div>

						<div class="project-link">
							<a href="#"><img src="images/icon-link.svg" alt=""></a>
						</div>
					</div>
					<!-- Project Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Project Item Start -->
					<div class="project-item wow fadeInUp" data-wow-delay="1.25s">
						<div class="project-image">
							<figure>
								<img src="images/project-5.jpg" alt="">
							</figure>
						</div>

						<div class="project-content">
							<h2><a href="#">Placeholder for Future Project</a></h2>
							<p>Solar Power</p>
						</div>

						<div class="project-link">
							<a href="#"><img src="images/icon-link.svg" alt=""></a>
						</div>
					</div>
					<!-- Project Item End -->
				</div>


			<div class="row">
				<div class="col-md-12">
					<!-- Post Pagination Start -->
					<div class="post-pagination wow fadeInUp" data-wow-delay="1.5s">
						<ul class="pagination">
							<li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
						</ul>
					</div>
					<!-- Post Pagination End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Projects Page End -->
	
    <?=$footer?>
</body>
</html>