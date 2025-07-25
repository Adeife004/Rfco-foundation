<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Publications</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="shortcut icon" href="assets/img/logo/logo_f.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/lightcase.css">
		<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/normalige.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
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
						<h2>Publications</h2>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="#">Pages</a>
							</li>
							<li>
								<a class="active">Publications</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Page Header End===================================-->

		<!--=================================Publication Section Start=============================-->
		<section class="publication-section section-padding">
			<div class="container">
				<div class="section-title title-one">
					<h3>Our Publications</h3>
					<p class="opensans">
						Explore our latest publications, including reports, research papers, and other documents.
					</p>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="publication-item">
							<div class="publication-thumb">
								<img src="assets/img/banner/33.jpg" alt="publication">
							</div>
							<div class="publication-content">
								<h5><a href="assets/files/sample.pdf" target="_blank">Annual Report 2024</a></h5>
								<p>Download our comprehensive annual report for the year 2024.</p>
								<a href="assets/files/sample.pdf" target="_blank" class="custom-btn">Download PDF<i class="fa fa-file-pdf"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="publication-item">
							<div class="publication-thumb">
								<img src="assets/img/banner/5.jpg" alt="publication">
							</div>
							<div class="publication-content">
								<h5><a href="assets/files/sample.docx" target="_blank">Research Paper on Education</a></h5>
								<p>Read our latest research paper on the impact of education in vulnerable communities.</p>
								<a href="assets/files/sample.docx" target="_blank" class="custom-btn">Download DOCX<i class="fa fa-file-word"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="publication-item">
							<div class="publication-thumb">
								<img src="assets/img/banner/16.jpg" alt="publication">
							</div>
							<div class="publication-content">
								<h5><a href="assets/files/sample.xlsx" target="_blank">Financial Report Q1 2025</a></h5>
								<p>Access our financial report for the first quarter of 2025.</p>
								<a href="assets/files/sample.xlsx" target="_blank" class="custom-btn">Download XLSX<i class="fa fa-file-excel"></i></a>
							</div>
						</div>
					</div>
					<!-- Add more publication items as needed -->
				</div>
			</div>
		</section>
		<!--=================================Publication Section End=============================-->
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
