<?php
include_once 'PageConstructor.php';
$page = new PageConstructor();
$head = $page->getHead("Sonemar Solar - Homepage");
$header = $page->getHeader();
$footer = $page->getFooter();
?>
<!DOCTYPE html>
<html lang="en">
<?= $head ?>

<body class="tt-magic-cursor">

<?= $header ?>

<!-- Hero Section Start -->
<div class="hero hero-video">
    <!-- Video Start -->
    <div class="hero-bg-video">
        <!-- Selfhosted Video Start -->
        <!--		 <video autoplay muted loop id="myVideo"><source src="images/hero.mp4" type="video/mp4"></video>-->
        <!-- Selfhosted Video End -->

        <!-- Youtube Video Start -->
        <div id="herovideo" class="player"
             data-property="{videoURL:'TzfnlPxCZv0',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div>
        <!-- Youtube Video End -->
    </div>
    <!-- Video End -->

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <!-- Hero Left Content Start -->
                <div class="hero-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Welcome to Sonemar Solar</h3>
                        <h1 class="text-anime">Powering the Philippines With <span>Sustainable Solar</span></h1>
                    </div>
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                        <p>Sonemar Solar provides reliable, cost-efficient solar solutions for homes and businesses
                            across the Philippines. Take control of your energy costs and switch to a smarter, more
                            sustainable power source.</p>
                    </div>

                    <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                        <a href="TBD.php" class="btn-default">Our Services</a>
                        <a href="TBD.php" class="btn-default btn-border">Contact Now</a>
                    </div>
                    <div>
                        <a href="#" class="btn-default mt-4" style="background-color: yellow">Panels On Sale Now - Call for Information <br>Or send an email: martijn.hooimeijer@sonemar-solar.com</a>

                    </div>
                </div>
                <!-- Hero Left Content End -->
            </div>
            <div class="col-lg-5">
                <div class="hero-content">
                    <div class="section-title">
<!--                        <a href="#" class="btn-default">Panels On Sale Now - Call for Information <br>Or send an email: martijn.hooimeijer@sonemar-solar.com</a>-->
                        <div>

                            <h1 class="text-anime h1">&#8369; 5499<h4>ex VAT (min 20 panels)</h4></h1>
                            <p class="btn-default m-2" style="color: white!; background-color: yellow">Special discounts are available for resellers and buyers in bulk.</p>
                        </div>
                    </div>
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                        <a href="docs/2026-%20Ginza%20Bifacial-590-610W.pdf" >
                        <img class="img-fluid wow fadeInUp shadow" style="background: white; opacity: 100%"
                             data-wow-delay="0.5s" src="images/610_Watt_Solar_Panels.png" alt="">
                        </a>
                        <!--                <img  style="background: white; opacity: 100%"  src="images/610_Watt_Solar_Panels.png" alt="">-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- About Section Start -->
<div id="about" class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About us Image Start -->
                <div class="about-image">
                    <div class="about-img-1">
                        <figure class="reveal image-anime">
                            <img src="images/about-sonemar-solar.jpg" alt="">
                        </figure>
                    </div>

                    <div class="about-img-2">
                        <figure class="reveal image-anime">
                            <img src="images/rooftop-solar.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <!-- About us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">About Us</h3>
                    <h2 class="text-anime">About Sonemar Solar</h2>
                </div>
                <!-- Section Title End -->

                <!-- About us Content Start -->
                <div class="about-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Sonemar Solar is a Philippine-based renewable energy company committed to making solar power
                        accessible, affordable, and reliable.</p>
                    <p>We design and install customized solar systems for residential, commercial, and industrial
                        clients—helping reduce electricity costs while promoting a cleaner, more sustainable future.</p>
                    <p>Our team combines technical expertise with local market knowledge to deliver solutions that work
                        in real-world conditions across the Philippines.</p>
                    <ul>
                        <li>Custom Solar System Design for Small and Large Projects</li>
                        <li>Solar System Materials Supplier</li>
                        <li>Flexible Financing Options</li>
                        <li>Project Management</li>
                        <li>Outright Purchase or PPA (Purchase Power Agreements)</li>
                    </ul>

                    <a href="TBD.php" class="btn-default">More About</a>
                </div>
                <!-- About us Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
<!-- Latest News Section Start -->
<div id="news" class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Recent Articles</h3>
                    <h2 class="text-anime">Our Latest News</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <img src="images/solar_storage_exhibition_4-COLLAGE.jpg" alt="">
                        </figure>
                    </div>

                    <div class="post-item-body">
                        <h2><a href="blog_solar_storage_exhibition_2026.php">Attending Solar & Storage Exhibition, Manila</a></h2>
                        <div class="post-meta">
                            <ul>
                                <li><a href="blog_solar_storage_exhibition_2026.php"><i class="fa-regular fa-calendar-days"></i> 18-19 May 2026</a></li>
                                <li><a href="blog_solar_storage_exhibition_2026.php"><i class="fa-solid fa-tag"></i> Exhibition</a></li>
                            </ul>
                        </div>

                        <div class="btn-readmore">
                            <a href="blog_solar_storage_exhibition_2026.php" class="btn-default">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <img src="images/Meeting_DASH-COLLAGE_sm.jpg" alt="">
                        </figure>
                    </div>

                    <div class="post-item-body">
                        <h2><a href="blog_supplier_connections.php">Building Supplier Connections</a></h2>
                        <div class="post-meta">
                            <ul>
                                <li><a href="blog_supplier_connections.php"><i class="fa-regular fa-calendar-days"></i> 09 Feb 2026</a></li>
                                <li><a href="blog_supplier_connections.php"><i class="fa-solid fa-tag"></i> Suppliers</a></li>
                            </ul>
                        </div>

                        <div class="btn-readmore">
                            <a href="blog_supplier_connections.php" class="btn-default">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <img src="images/electric_charging_station.webp" alt="">
                        </figure>
                    </div>

                    <div class="post-item-body">
                        <h2><a href="TBD.php">Establishing Powerful Alliances and Stakeholder Ecosystems</a></h2>
                        <div class="post-meta">
                            <ul>
                                <li><a href="TBD.php"><i class="fa-regular fa-calendar-days"></i> 09 Feb 2026</a></li>
                                <li><a href="TBD.php"><i class="fa-solid fa-tag"></i> Solar Panel</a></li>
                            </ul>
                        </div>

                        <div class="btn-readmore">
                            <a href="TBD.php" class="btn-default">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Latest News Section End -->

<!-- Our Services Section Start -->
<div id="services" class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Our Services</h3>
                    <h2 class="text-anime">Our Solar Solutions</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Services Slider Start -->
                <div class="services-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Service Slide Start -->
                            <div class="swiper-slide">
                                <div class="service-item"
                                     style="background-image: url(images/Solar-Panel-Materials.jpg); background-size: cover; background-position: center; min-height: 500px;">
                                    <div class="service-image">
                                        <figure>
                                            <!--												<img src="images/service-1.jpg" alt="">-->
                                        </figure>

                                        <div class="service-icon">
                                            <img src="images/icon-service-1.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="service-content">
                                        <h3>Solar Materials</h3>
                                        <p>Ensure your solar system operates at peak performance with our professional
                                            maintenance and inspection services.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Slide End -->

                            <!-- Service Slide Start -->
                            <div class="swiper-slide">
                                <div class="service-item"
                                     style="background-image: url(images/project-management.avif); background-size: cover; background-position: center; min-height: 500px;">
                                    <div class="service-image">
                                        <figure>
                                            <!--												<img src="images/project-management.avif" style=" object-fit: cover;" alt="">-->
                                        </figure>

                                        <div class="service-icon">
                                            <img src="images/icon-service-2.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="service-content">
                                        <h3>Project Management</h3>
                                        <p>From Home Solar to Large Scale projects - contact us for solutions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Slide End -->

                            <!-- Service Slide Start -->
                            <div class="swiper-slide">
                                <div class="service-item"
                                     style="background-image: url(images/financing.jpg); background-size: cover; background-position: center; min-height: 500px;">
                                    <div class="service-image">
                                        <figure>
                                            <!--												<img src="images/financing.jpg" alt="">-->
                                        </figure>

                                        <div class="service-icon">
                                            <img src="images/icon-service-3.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="service-content">
                                        <h3>Flexible Financing Solutions</h3>
                                        <p>Outright Purchase (attractive terms) or PPA (Purchase Power Agreements).</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Slide End -->

                            <!-- Service Slide Start -->
                            <!--<div class="swiper-slide">
                                <div class="service-item" style="background-image: url(images/financing.jpg); background-size: cover; background-position: center; min-height: 500px;">
                                    <div class="service-image">
                                        <figure>
                                            <img src="images/financing.jpg" alt="">
                                        </figure>

                                        <div class="service-icon">
                                            <img src="images/icon-service-2.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="service-content">
                                        <h3>Project Management</h3>
                                        <p>Pulling together project financing, suppliers and installers.</p>
                                    </div>
                                </div>
                            </div>-->
                            <!-- Service Slide End -->
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Services Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Services Section End -->

<!-- Our Process Section Start -->
<div id="process" class="our-process">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Our Latest Process</h3>
                    <h2 class="text-anime">Our Work Process</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!-- Step Item Start -->
                <div class="step-item step-1 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="step-header">
                        <div class="step-icon">
                            <figure>
                                <img src="images/icon-step-1.svg" alt="">
                            </figure>
                            <span class="step-no">01</span>
                        </div>
                    </div>

                    <div class="step-content">
                        <h3>Project Planing</h3>
                        <p>We evaluate your energy usage, location, and goals to design the best solar solution for your
                            needs. We evaluate financing options.</p>
                    </div>
                </div>
                <!-- Step Item End -->
            </div>

            <div class="col-md-4">
                <!-- Step Item Start -->
                <div class="step-item step-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="step-header">
                        <div class="step-icon">
                            <figure>
                                <img src="images/icon-step-2.svg" alt="">
                            </figure>
                            <span class="step-no">02</span>
                        </div>
                    </div>

                    <div class="step-content">
                        <h3>Research & Analysis</h3>
                        <p>Our team conducts a detailed technical assessment to ensure maximum efficiency and return on
                            investment and builds the financing solution.</p>
                    </div>
                </div>
                <!-- Step Item End -->
            </div>

            <div class="col-md-4">
                <!-- Step Item Start -->
                <div class="step-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="step-header">
                        <div class="step-icon">
                            <figure>
                                <img src="images/icon-step-3.svg" alt="">
                            </figure>
                            <span class="step-no">03</span>
                        </div>
                    </div>

                    <div class="step-content">
                        <h3>Solar Installation</h3>
                        <p>We install your system safely and efficiently, ensuring long-term performance and
                            reliability.</p>
                    </div>
                </div>
                <!-- Step Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Process Section End -->

<!-- Intro Video Section Start -->
<div id="intro" class="intro-video">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Intro Video Box Start -->
                <div class="intro-video-box">
                    <div class="video-image">
                        <img src="images/video-bg.jpg" alt="">
                    </div>

                    <div class="video-play-button">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <img src="images/play.svg" alt="">
                        </a>
                    </div>
                </div>
                <!-- Intro Video Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Intro Video Section End -->

<!-- Our Sklii Section Start -->
<div id="skills" class="our-skills">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Energy Progress</h3>
                    <h2 class="text-anime">Best Solution For Your Solar Energy</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We use high-quality components and proven
                        technologies to deliver efficient, long-lasting solar systems that maximize your energy
                        production and savings.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <div class="skills-box">
                    <!-- Skill Item Start -->
                    <div class="skillbar" data-percent="95%">
                        <div class="skill-data">
                            <div class="title">Solar Materials</div>
                            <div class="count">95%</div>
                        </div>
                        <div class="skill-progress">
                            <div class="count-bar"></div>
                        </div>
                    </div>
                    <!-- Skill Item End -->

                    <!-- Skill Item Start -->
                    <div class="skillbar" data-percent="80%">
                        <div class="skill-data">
                            <div class="title">Financing</div>
                            <div class="count">80%</div>
                        </div>
                        <div class="skill-progress">
                            <div class="count-bar"></div>
                        </div>
                    </div>
                    <!-- Skill Item End -->

                    <!-- Skill Item Start -->
                    <div class="skillbar" data-percent="70%">
                        <div class="skill-data">
                            <div class="title">Installation</div>
                            <div class="count">70%</div>
                        </div>
                        <div class="skill-progress">
                            <div class="count-bar"></div>
                        </div>
                    </div>
                    <!-- Skill Item End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Sklii Section End -->

<!-- Infobar Section Start -->
<div id="infobar" class="infobar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-box">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <!-- CTA Image Start -->
                            <div class="cta-image">
                                <figure class="image-anime">
                                    <img src="images/support_call.jpg" alt="">
                                </figure>
                            </div>
                            <!-- CTA Image End -->
                        </div>

                        <div class="col-lg-8">
                            <!-- CTA Content Start -->
                            <div class="cta-content">
                                <div class="phone-icon">
                                    <figure>
                                        <img src="images/icon-cta-phone.svg" alt="">
                                    </figure>
                                </div>
                                <h3 class="text-anime">Have Questions? <br><span>Call Us</span> +63 908 7738 794</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">Have Questions? Let’s Talk Solar.

                                    Thinking about switching to solar? Our team is ready to guide you every step of the
                                    way—from consultation to installation.</p>
                            </div>
                            <!-- CTA Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Infobar Section End -->

<!-- Why Choose us Section Start -->
<div is="whyus" class="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Why Choose Us</h3>
                    <h2 class="text-anime">Why Choose Sonemar Solar</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="why-choose-image">
                        <img src="images/whyus-1.jpg" alt="">
                    </div>

                    <div class="why-choose-content">
                        <div class="why-choose-icon">
                            <img src="images/icon-whyus-1.svg" alt="">
                        </div>

                        <h3>Efficiency & Power</h3>
                        <p>We design systems that maximize energy output and deliver real savings from day one.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="why-choose-image">
                        <img src="images/whyus-2.jpg" alt="">
                    </div>

                    <div class="why-choose-content">
                        <div class="why-choose-icon">
                            <img src="images/icon-whyus-2.svg" alt="">
                        </div>

                        <h3>Trust & Warranty</h3>
                        <p>We use reliable equipment backed by strong warranties for long-term peace of mind.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="why-choose-image">
                        <img src="images/whyus-3.jpg" alt="">
                    </div>

                    <div class="why-choose-content">
                        <div class="why-choose-icon">
                            <img src="images/icon-whyus-3.svg" alt="">
                        </div>

                        <h3>High Quality Work</h3>
                        <p>Our installations follow strict quality standards to ensure safety and durability.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="1.0s">
                    <div class="why-choose-image">
                        <img src="images/whyus-4.jpg" alt="">
                    </div>

                    <div class="why-choose-content">
                        <div class="why-choose-icon">
                            <img src="images/icon-whyus-4.svg" alt="">
                        </div>

                        <h3>Top Quality Project Management</h3>
                        <p>With a combined 50 years of managing projects in the Energy sector, we have a proven track
                            record of delivering successful projects.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose us Section End -->

<!-- Counter Section Start -->
<div class="stat-counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <div class="counter-icon">
                        <img src="images/icon-project.svg" alt="">
                    </div>

                    <div class="counter-content">
                        <h3><span class="counter">8</span>+</h3>
                        <p>Project In Progress</p>
                    </div>
                </div>
                <!-- Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <div class="counter-icon">
                        <img src="images/icon-happy-clients.svg" alt="">
                    </div>

                    <div class="counter-content">
                        <h3><span class="counter">5</span>+</h3>
                        <p>Potential Customers</p>
                    </div>
                </div>
                <!-- Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <div class="counter-icon">
                        <img src="images/icon-award.svg" alt="">
                    </div>

                    <div class="counter-content">
                        <h3><span class="counter">100</span>%</h3>
                        <p>Commitment to Sustainability</p>
                    </div>
                </div>
                <!-- Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <div class="counter-icon">
                        <img src="images/icon-ratting.svg" alt="">
                    </div>

                    <div class="counter-content">
                        <h3><span class="counter">7</span>+</h3>
                        <p>Business Partners</p>
                    </div>
                </div>
                <!-- Counter Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End -->

<!-- Solar Calculator Section Start -->
<div id="calculator" class="solar-calculator">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Solar Calculator Form Start -->
                <div class="calculator-box wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3>Solar Calculator</h3>
                                <h2>Your Solar Savings Calculator <br>(DEMO Not yet Working)</h2>
                            </div>
                            <!-- Section Title End -->
                        </div>

                        <div class="col-lg-7">
                            <!-- Solar Form Start -->
                            <div class="solar-form">
                                <form id="solarForm" action="#" method="POST" data-toggle="validator">
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-3">
                                            <select name="category" class="form-control" id="category" required>
                                                <option value="">Category</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-3">
                                            <input type="text" name="name" class="form-control" id="name"
                                                   placeholder="Full Name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>


                                        <div class="form-group col-md-6 mb-3">
                                            <input type="email" name="email" class="form-control" id="email"
                                                   placeholder="Email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-3">
                                            <input type="text" name="phone" class="form-control" id="phone"
                                                   placeholder="Phone" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-3">
                                            <input type="text" name="bill" class="form-control" id="bill"
                                                   placeholder="our Average Monthly Bill?" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-3">
                                            <input type="text" name="capacity" class="form-control" id="capacity"
                                                   placeholder="Required Solar Plant Capacity (in kW)" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn-default">Calculate</button>
                                            <div id="msgSubmit" class="h3 text-left hidden"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Solar Form End -->
                        </div>
                    </div>
                </div>
                <!-- Solar Calculator Form End -->
            </div>
        </div>
    </div>
</div>
<!-- Solar Calculator Section End -->

<?= $footer ?>

</body>
</html>
