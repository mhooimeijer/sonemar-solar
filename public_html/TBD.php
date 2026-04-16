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
						<h1 class="text-anime">This Page is Under Construction!</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">This Page is Under Construction!</li>
							</ol>
						</nav>

                    </div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- This Page is Under Construction Page Start -->
	<div class="page-404">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <h3 >We are just starting up this company! We will provide more information soon.</h3>

                    <!-- This Page is Under Construction Box Start -->
					<div class="page-not-found-box">
						<div class="not-found-image wow fadeInUp">
							<img src="images/404-img.svg" alt="">
						</div>

						<h2 class="text-anime">This Page is Under Construction</h2>
						<a href="#" class="btn-default wow fadeInUp" data-wow-delay="0.5s">Back To Home</a>
					</div>
					<!-- This Page is Under Construction Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- This Page is Under Construction Page End -->
	<?=$footer?>
</body>
</html>