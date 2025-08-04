<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Volunteer</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="shortcut icon" href="assets/img/logo/logo_f.png" type="image/x-icon">
		
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/lightcase.css">
		<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="assets/css/consistent-padding.css">
		<link rel="stylesheet" type="text/css" href="assets/css/color-theme.css">
		    <link rel="stylesheet" type="text/css" href="assets/css/remove-green.css">
    <style>
    /* Comprehensive white background removal for volunteer page */
    body {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%) !important;
        color: #ffffff !important;
    }
    
    .bg-white, .bg-light, .bg-light-gray, .white-bg, .light-bg {
        background: transparent !important;
    }
    
    .card, .volunteer-card, .info-card {
        background: linear-gradient(135deg, #2c3e50, #34495e) !important;
        border: 1px solid #2c3e50 !important;
    }
    
    h1, h2, h3, h4, h5, h6 { color: #ffffff !important; }
    p, span, div { color: #ecf0f1 !important; }
    
    input, select, textarea, .form-control {
        background: rgba(255, 255, 255, 0.1) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        color: #ffffff !important;
    }
    </style>
</head>
	<body>
		<!--===================================Header Section==============================-->
		<?php include 'includes/header.php'; ?>
		<!--=================================Header Section End=============================-->

		<!--=================================Page Header Start===================================-->
		<section class="page-header">
			<div class="overlay"></div>
			<div class="page-header-content-area">
				<div class="container">
					<div class="page-title">
						<h2>Volunteer</h2>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="#">Pages</a>
							</li>
							<li>
								<a class="active">Volunteer</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Page Header End===================================-->

		<!--===============================Our Volunteer Section Start==============================-->
		<section class="our-volunteers main-volunteer">
			<div class="container">
				<div class="section-title title-one">
					<h3>Become A Volunteer</h3>
					<p class="opensans">
						Join our team and help us make a positive impact in the lives of those we serve.
					</p>
				</div>
				<div class="add-gutters">
					<div class="row">
						<div class="col-lg-6">
							<div class="volunteer-form-thumb">
								<img src="assets/img/banner/18.jpg" alt="volunteer">
							</div>
						</div>
						<div class="col-lg-6">
							<form action="volunteer_submit.php" method="POST" class="volunteer-form">
								<div class="form-group">
									<input type="text" name="first_name" placeholder="First Name" required>
								</div>
								<div class="form-group">
									<input type="text" name="last_name" placeholder="Last Name" required>
								</div>
								<div class="form-group">
									<input type="email" name="email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<input type="text" name="phone" placeholder="Phone" required>
								</div>
								<div class="form-group">
									<select name="interest" required>
										<option value="" disabled selected>Select Your Interest</option>
										<option value="Education">Education</option>
										<option value="Empowering Widows">Empowering Widows</option>
										<option value="Supporting Physically Challenged">Supporting Physically Challenged</option>
										<option value="Community Development">Community Development</option>
									</select>
								</div>
								<div class="form-group w-100">
									<textarea name="message" placeholder="Enter Your Message" required></textarea>
								</div>
								<div class="group-btn">
									<button type="submit" class="custom-btn active">JOIN US NOW<i class="fa fa-angle-double-right"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--===============================Our Volunteer Section End==============================-->
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
	</body>
</html>
