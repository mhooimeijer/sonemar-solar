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
						<h1 class="text-anime">Page Not Found!</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Page Not Found!</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Page Not Found Page Start -->
	<div class="page-404">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Page Not Found Box Start -->
					<div class="page-not-found-box">
						<div class="not-found-image wow fadeInUp">
							<img src="images/404-img.svg" alt="">
						</div>

						<h2 class="text-anime">Oops! Sorry, we could not find the Page</h2>
						<a href="index.php" class="btn-default wow fadeInUp" data-wow-delay="0.5s">Back To Home</a>
					</div>
					<!-- Page Not Found Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Not Found Page End -->
	
	<?=$footer?>
</body>
</html>