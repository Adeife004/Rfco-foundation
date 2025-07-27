<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Event Details</title>
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
		<!--===================================Header Section==============================-->
		<?php include 'includes/header.php'; ?>
		<!--=================================Header Section End=============================-->

		<!--=================================Page Header Start===================================-->
		<section class="page-header">
			<div class="overlay"></div>
			<div class="page-header-content-area">
				<div class="container">
					<div class="page-title">
						<h2>Event Details</h2>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="#">Event</a>
							</li>
							<li>
								<a class="active">Event Details</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Page Header End===================================-->

		<!--=================================Event Two Column Section Start===============================-->
		<div class="two-column-event section-padding">
			<div class="container">
				<div class="section-wrapper row">
					<div class="col-lg-6 col-12">
						<div class="event-item">
							<div class="event-thumb">
								<h3>2025</h3>
							</div>
							<div class="event-content">
								<h5><a href="#">Skill Acquisition Program for Widows</a></h5>
								<p><i class="fas fa-map-marker-alt mr-2"></i>Nigeria</p>
								<p class="opensans">
									Join us in empowering widows through skill acquisition programs. This event aims to provide them with the necessary skills to start their own businesses and become self-sufficient.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="event-item">
							<div class="event-thumb">
								<h3>2025</h3>
							</div>
							<div class="event-content">
								<h5><a href="#">Scholarship Award Ceremony</a></h5>
								<p><i class="fas fa-map-marker-alt mr-2"></i>Nigeria</p>
								<p class="opensans">
									Celebrate with us as we award scholarships to deserving indigent children. Your support helps provide access to quality education and a brighter future for these children.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="event-item">
							<div class="event-thumb">
								<h3>2025</h3>
							</div>
							<div class="event-content">
								<h5><a href="#">Support for Physically Challenged Individuals</a></h5>
								<p><i class="fas fa-map-marker-alt mr-2"></i>Nigeria</p>
								<p class="opensans">
									We are committed to supporting physically challenged individuals by providing assistive technologies and rehabilitation services. Join us in making a difference in their lives.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="event-item">
							<div class="event-thumb">
								<h3>2025</h3>
							</div>
							<div class="event-content">
								<h5><a href="#">Community Development and Outreach</a></h5>
								<p><i class="fas fa-map-marker-alt mr-2"></i>Nigeria</p>
								<p class="opensans">
									Our community development and outreach programs aim to uplift and empower vulnerable communities. Participate in our initiatives to bring positive change and development.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="event-item">
							<div class="event-thumb">
								<h3>2025</h3>
							</div>
							<div class="event-content">
								<h5><a href="#">Health and Wellness Camp</a></h5>
								<p><i class="fas fa-map-marker-alt mr-2"></i>Nigeria</p>
								<p class="opensans">
									Join our health and wellness camp to provide medical check-ups, health education, and wellness activities to underserved communities. Your participation can save lives.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="event-item">
							<div class="event-thumb">
								<h3>2025</h3>
							</div>
							<div class="event-content">
								<h5><a href="#">Christmas Charity Drive</a></h5>
								<p><i class="fas fa-map-marker-alt mr-2"></i>Nigeria</p>
								<p class="opensans">
									Spread the joy of Christmas by participating in our charity drive. We will be distributing food, clothing, and gifts to families in need. Let's make this festive season special for everyone.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==========================Event Two Column Section End===================-->
		<!--=================================Newslater Section Start=============================-->
		<section class="newslater-section">
			<div class="container">
				<div class="section-wrapper add-gutters d-flex flex-wrap align-items-center justify-content-between">
					<div class="news-item">
						<h4>
							Subscribe to Our Newsletter
						</h4>
					</div>
					
					<div class="news-item">
						<form action="subscribe.php" method="POST" class="d-flex">
							<input type="email" name="email" placeholder="Enter your e-mail. . . . . . . . . . ." required class="form-control">
							<div class="news-button">
								<button type="submit" class="custom-btn">Subscribe <i class="fa fa-paper-plane"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Newslater Section End=============================-->
		<!--=================================Footer Section Start=============================-->
		<?php include 'includes/footer.php'; ?>
		<!--=================================Footer Section End=============================-->

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
