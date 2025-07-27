<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Us</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="shortcut icon" href="assets/img/logo/logo_f.png" type="image/x-icon">
		
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/lightcase.css">
		<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/normalige.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<style>
			/* Loader styles - Commented out */
			/*
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
			*/
		</style>
	</head>
	<body>
	    		<!-- Loader - Commented out -->
		<!-- <div id="loader"></div> -->
		<!-- Header Section -->
		<?php include 'includes/header.php'; ?>
		<!-- Page Header Start -->
		<section class="page-header">
			<div class="overlay"></div>
			<div class="page-header-content-area">
				<div class="container">
					<div class="page-title">
						<h2>Contact Us</h2>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a class="active">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- Page Header End -->

		<!-- Contact Section Start -->
		<section class="contact-section section-padding">
			<div class="container">
				<div class="section-title title-one">
					<h3>Get In Touch</h3>
					<p class="opensans">
						We would love to hear from you. Please fill out the form below to get in touch with us.
					</p>
				</div>
				<div class="add-gutters">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact-form">
								<form action="contact_submit.php" method="POST">
									<div class="form-group">
										<input type="text" name="name" placeholder="Your Name" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" placeholder="Your Email" required>
									</div>
									<div class="form-group">
										<input type="text" name="subject" placeholder="Subject" required>
									</div>
									<div class="form-group w-100">
										<textarea name="message" placeholder="Your Message" required></textarea>
									</div>
									<div class="group-btn">
										<button type="submit" class="custom-btn active">Send Message<i class="fa fa-angle-double-right"></i></button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-info">
								<h4>Contact Information</h4>
								<p>
									For further inquiries and information, contact the project manager via WhatsApp on <a href="tel:+2348160226089"><i class="fab fa-whatsapp"></i> 08160226089</a> or Father on <a href="tel:+2348160226089"><i class="fa fa-phone"></i> 08160226089</a>.
								</p>
								<ul>
									<li>
										<i class="fa fa-map-marker"></i>
										<span>Nigeria</span>
									</li>
									<li>
										<i class="fa fa-envelope"></i>
										<a href="mailto:info@rfcofoundation">info@rfcofoundation.org</a>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										<a href="tel:+2348160226089">08160226089</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Section End -->

		<!-- Footer Section Start -->
		<?php include 'includes/footer.php'; ?>
		<!-- Footer Section End -->

		<script src="assets/js/jquery.js"></script>
		
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
		
			// Loader script - Commented out
			/*
			$(window).on('load', function() {
				setTimeout(function() {
					$('#loader').fadeOut('slow');
				}, 3000); // Delay of 3 seconds
			});
			*/
		</script>
	</body>
</html>
