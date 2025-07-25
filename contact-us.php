<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Us</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="shortcut icon" href="assets/css/01.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/lightcase.css">
		<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/normalige.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<style>
			/* Loader styles */
			#loader {
				position: fixed;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				z-index: 9999;
				background: url('assets/img/logo/loader.gif') 50% 50% no-repeat rgb(249,249,249);
				background-size: 150px 150px;
			}
		</style>
	</head>
	<body>
	    <!-- Loader -->
		<div id="loader"></div>
		<!--===================================Header Section==============================-->
		<?php include 'includes/header.php'; ?>
		<!--=================================Header Section End=============================-->

		<!--=================================Page Header Start===================================-->
		<section class="page-header">
			<div class="overlay"></div>
			<div class="page-header-content-area">
				<div class="container">
					<div class="page-title">
						<h2>Contact us</h2>
						<ul>
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a class="active">Contact us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Page Header End===================================-->

		<!--=================================Contact Page Start======================================-->
		<section class="contact-with-us">
			<div class="container">
				<div class="section-wrapper add-gutters">
					<div class="row">
						<div class="col-md-6">
							<div id="gmap" class="maps">
                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Nigeria&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com/">Sprunki Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
								
							</div>
							<p><i class="fas fa-home"></i>Nigeria, Africa</p>
							<p><i class="fas fa-phone"></i>08160226089</p>
							<p><a href="#"><i class="fas fa-envelope"></i>helps@rfcofoundation.org</a></p>
						</div>
						<div class="col-md-6">
							<h3>Send Message</h3>
							<form class="message-form" action="contact.php" id="contact-form" method="POST">
								<div class="form-group">
									<input type="text" placeholder="Your Name" name="name" id="name" required>
								</div>
								<div class="form-group">
									<input type="text" placeholder="Your Email" name="email" id="email" required>
								</div>
								<div class="form-group">
									<input type="text" placeholder="Phone" name="phone" id="phone" required>
								</div>
								<div class="form-group">
									<input type="text" placeholder="Subject" name="subject" id="subject" required>
								</div>
								<div class="form-group w-100">
									<textarea placeholder="Your Message" name="message" id="message" required></textarea>
								</div>
								<button type="submit" class="custom-btn active">SUBMIT NOW <i class="fa fa-angle-double-right"></i></button>
							</form>
							<p class="form-message"></p> 
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Contact Page End======================================-->

		<!--=================================Newslater Section Start=============================-->
		<section class="newslater-section">
			<div class="container">
				<div class="section-wrapper add-gutters d-flex flex-wrap align-items-center justify-content-between">
					<div class="news-item">
						<h4>
							Subscribe Our Newsletter
						</h4>
					</div>
					<div class="news-item">
						<input type="text" placeholder="Enter your e-mail. . . . . . . . . . .">
						<div class="news-button">
							<button type="submit" class="custom-btn w-100">Subscribe <i class="fa fa-paper-plane"></i></button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Newslater Section End=============================-->

		<!--=================================Footer Section Start=============================-->
		<?php include 'includes/footer.php'; ?>
		<!--=================================Footer Section End=============================-->

		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/countdown.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/isotope-masonry.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/waypoint.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/progress.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/function.js"></script>
		<script>
		
			// Loader script
			$(window).on('load', function() {
				setTimeout(function() {
					$('#loader').fadeOut('slow');
				}, 3000); // Delay of 3 seconds
			});
		</script>
	</body>
</html>
