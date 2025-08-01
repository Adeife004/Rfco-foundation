<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Fundraising</title>
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
		<link rel="stylesheet" type="text/css" href="assets/css/consistent-padding.css">
		<link rel="stylesheet" type="text/css" href="assets/css/color-theme.css">
		<style>
			.support-category {
				padding: 20px;
				border: 1px solid #ebebeb;
				border-radius: 5px;
				margin-bottom: 15px;
				transition: all 0.3s ease;
			}
			.support-category:hover {
				box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
			}
		</style>
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
						<h2>Fundraising</h2>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="#">Pages</a>
							</li>
							<li>
								<a class="active">Fundraising</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Page Header End===================================-->

		<!--===============================Fundraising Section Start==============================-->
		<section class="fundraising-section section-padding">
			<div class="container">
				<div class="section-title title-one">
					<h3>Get Involved</h3>
					<p class="opensans">
						Join us in making a difference. You can get involved in our foundation as a trustee, donor, volunteer, staff, member, or partner.
					</p>
				</div>
				<div class="add-gutters">
					<div class="row">
						<div class="col-lg-6">
							<div class="fundraising-content">
								<h4>Our Founding Trustees</h4>
								<ul>
									<li>Rev. Fr. Callistus Osiaga</li>
									<li>Engr. Nsisuk Osmund Ekanem</li>
									<li>Mr. Sunny Uloko</li>
									<li>Hon. George Izobo</li>
									<li>Hon. Robert Ikazoboh</li>
								</ul>
								<h4>Support Categories</h4>
								<div class="support-category">
									<h5>Platinum</h5>
									<p>180k and above annually</p>
								</div>
								<div class="support-category">
									<h5>Diamond</h5>
									<p>120-180k (11-15k monthly)</p>
								</div>
								<div class="support-category">
									<h5>Gold</h5>
									<p>60-120k (7-10k monthly)</p>
								</div>
								<div class="support-category">
									<h5>Ruby</h5>
									<p>12-60k (2-5k monthly)</p>
								</div>
								<div class="support-category">
									<h5>Silver</h5>
									<p>0-12k (1k monthly)</p>
								</div>
								<p>
									We kindly appeal to everyone to pick a category and private chat the project manager to enable him to update the membership census. You can also sponsor children in school, youths and women for skill acquisition, and support for the physically challenged. This will enable us to achieve our three thematic areas.
								</p>
								<p>
									For further inquiries and information, contact the project manager via WhatsApp on 08160226089 or Father on 08160226089.
								</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="fundraising-form">
								<h4>Join Us</h4>
								<form action="fundraising_submit.php" method="POST">
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
										<select name="category" required>
											<option value="" disabled selected>Select Your Category</option>
											<option value="Platinum">Platinum</option>
											<option value="Diamond">Diamond</option>
											<option value="Gold">Gold</option>
											<option value="Ruby">Ruby</option>
											<option value="Silver">Silver</option>
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
			</div>
		</section>
		<!--===============================Fundraising Section End==============================-->
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
