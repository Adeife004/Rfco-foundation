<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Learn about Rev. Fr. Callistus Osiaga Foundation's mission to transform lives through education, skill acquisition, and community development. Discover our achievements, trustees, and how to get involved.">
		<meta name="keywords" content="Rev. Fr. Callistus Osiaga Foundation, charity, non-profit, education, skill acquisition, community development, donations, fundraising, volunteer, indigent children, widows, physically challenged">
		<meta name="author" content="Rev. Fr. Callistus Osiaga Foundation">
		<meta name="robots" content="index, follow">
		<meta property="og:title" content="About Us - Rev. Fr. Callistus Osiaga Foundation">
		<meta property="og:description" content="Transforming lives and empowering vulnerable communities through education and skill acquisition.">
		<meta property="og:type" content="website">
		<title>About Us - Rev. Fr. Callistus Osiaga Foundation</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="shortcut icon" href="assets/img/logo/logo_f.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/lightcase.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/consistent-padding.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/color-theme.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/remove-green.css?v=<?php echo time(); ?>">
		
		<style>
			/* Professional About Us Page Styling */
			
			/* Enhanced typography and spacing */
			body {
				font-family: 'Poppins', sans-serif;
				line-height: 1.6;
				color: #333;
			}
			
			/* Professional page header */
			.page-header {
				background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
				position: relative;
				overflow: hidden;
				padding: 120px 0 80px 0;
			}
			
			.page-header::before {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
				opacity: 0.3;
			}
			
			.page-header-content-area {
				position: relative;
				z-index: 2;
			}
			
			.page-subtitle {
				font-size: 1.1rem;
				font-weight: 400;
				color: #e3f2fd;
				text-transform: uppercase;
				letter-spacing: 2px;
				margin-bottom: 15px;
				opacity: 0.9;
			}
			
			.page-title h2 {
				font-size: 4rem;
				font-weight: 700;
				color: #ffffff;
				text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
				margin-bottom: 20px;
				line-height: 1.2;
			}
			
			.page-title .lead {
				font-size: 1.4rem;
				color: #e3f2fd;
				font-weight: 300;
				margin-bottom: 30px;
				line-height: 1.6;
				max-width: 600px;
				margin-left: auto;
				margin-right: auto;
			}
			
			.header-divider {
				width: 80px;
				height: 4px;
				background: linear-gradient(135deg, #ffffff, #e3f2fd);
				margin: 0 auto;
				border-radius: 2px;
				position: relative;
			}
			
			.header-divider::before,
			.header-divider::after {
				content: '';
				position: absolute;
				top: 50%;
				width: 8px;
				height: 8px;
				background: #ffffff;
				border-radius: 50%;
				transform: translateY(-50%);
			}
			
			.header-divider::before {
				left: -20px;
			}
			
			.header-divider::after {
				right: -20px;
			}
			
			/* Enhanced section styling */
			.section-padding {
				padding: 80px 0;
			}
			
			.bg-light {
				background-color: #f8f9fa;
			}
			
			/* Section Headers */
			.section-header {
				margin-bottom: 60px;
			}
			
			.section-subtitle {
				font-size: 1rem;
				font-weight: 600;
				color: #2193b0;
				text-transform: uppercase;
				letter-spacing: 2px;
				margin-bottom: 15px;
			}
			
			.section-title {
				font-size: 2.8rem;
				font-weight: 700;
				color: #333;
				margin-bottom: 20px;
				line-height: 1.2;
			}
			
			.section-description {
				font-size: 1.1rem;
				color: #666;
				max-width: 600px;
				margin: 0 auto;
				line-height: 1.6;
			}
			
			/* About Foundation Section */
			.about-foundation-section {
				background: #ffffff;
			}
			
			.about-image {
				position: relative;
			}
			
			.image-wrapper {
				position: relative;
				border-radius: 15px;
				overflow: hidden;
				box-shadow: 0 20px 40px rgba(0,0,0,0.1);
			}
			
			.experience-badge {
				position: absolute;
				bottom: 20px;
				right: 20px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				color: white;
				padding: 15px 20px;
				border-radius: 10px;
				text-align: center;
				box-shadow: 0 10px 20px rgba(33, 147, 176, 0.3);
			}
			
			.experience-badge .years {
				display: block;
				font-size: 1.8rem;
				font-weight: 700;
			}
			
			.experience-badge .text {
				font-size: 0.9rem;
				opacity: 0.9;
			}
			
			.about-content {
				padding-left: 40px;
			}
			
			.lead-text {
				font-size: 1.3rem;
				color: #2193b0;
				font-weight: 500;
				margin-bottom: 25px;
				line-height: 1.6;
			}
			
			.about-features {
				display: flex;
				gap: 20px;
				margin: 30px 0;
				flex-wrap: wrap;
			}
			
			.feature-item {
				display: flex;
				align-items: center;
				gap: 10px;
				background: #34495e;
				padding: 12px 20px;
				border-radius: 25px;
				border-left: 4px solid #2193b0;
			}
			
			.feature-item i {
				color: #2193b0;
				font-size: 1.2rem;
			}
			
			.feature-item span {
				font-weight: 600;
				color: #ffffff;
			}
			
			.about-actions {
				display: flex;
				gap: 15px;
				margin-top: 30px;
				flex-wrap: wrap;
			}
			
			.btn-primary, .btn-secondary {
				padding: 12px 25px;
				border-radius: 30px;
				text-decoration: none;
				font-weight: 600;
				display: inline-flex;
				align-items: center;
				gap: 8px;
				transition: all 0.3s ease;
				border: 2px solid transparent;
			}
			
			.btn-primary {
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				color: white;
			}
			
			.btn-primary:hover {
				transform: translateY(-2px);
				box-shadow: 0 10px 20px rgba(33, 147, 176, 0.3);
			}
			
			.btn-secondary {
				background: linear-gradient(135deg, #2c3e50, #34495e);
				color: #ffffff;
				border-color: #2c3e50;
			}
			
			.btn-secondary:hover {
				background: linear-gradient(135deg, #34495e, #2c3e50);
				color: white;
				transform: translateY(-2px);
				box-shadow: 0 10px 20px rgba(44, 62, 80, 0.3);
			}
			
			/* Mission Vision Section */
			.mission-card {
				background: linear-gradient(135deg, #2c3e50, #34495e);
				padding: 40px 30px;
				border-radius: 15px;
				text-align: center;
				box-shadow: 0 10px 30px rgba(0,0,0,0.2);
				transition: all 0.3s ease;
				height: 100%;
				border: 1px solid #2c3e50;
			}
			
			.mission-card:hover {
				transform: translateY(-10px);
				box-shadow: 0 20px 40px rgba(0,0,0,0.15);
			}
			
			.card-icon {
				width: 80px;
				height: 80px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				border-radius: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 0 auto 25px;
				color: white;
				font-size: 2rem;
			}
			
			.mission-card h3 {
				font-size: 1.5rem;
				font-weight: 700;
				color: #ffffff;
				margin-bottom: 15px;
			}
			
			.mission-card p {
				color: #ecf0f1;
				line-height: 1.6;
				margin: 0;
			}
			
			/* Services Section */
			.service-card {
				background: linear-gradient(135deg, #2c3e50, #34495e);
				padding: 40px 30px;
				border-radius: 15px;
				text-align: center;
				box-shadow: 0 10px 30px rgba(0,0,0,0.2);
				transition: all 0.3s ease;
				height: 100%;
				border: 1px solid #2c3e50;
				position: relative;
				overflow: hidden;
			}
			
			.service-card::before {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				height: 4px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
			}
			
			.service-card:hover {
				transform: translateY(-10px);
				box-shadow: 0 20px 40px rgba(0,0,0,0.15);
			}
			
			.service-icon {
				width: 70px;
				height: 70px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				border-radius: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 0 auto 25px;
				color: white;
				font-size: 1.8rem;
			}
			
			.service-card h3 {
				font-size: 1.4rem;
				font-weight: 700;
				color: #ffffff;
				margin-bottom: 15px;
			}
			
			.service-card p {
				color: #ecf0f1;
				line-height: 1.6;
				margin-bottom: 25px;
			}
			
			.service-link {
				color: #2193b0;
				text-decoration: none;
				font-weight: 600;
				display: inline-flex;
				align-items: center;
				gap: 8px;
				transition: all 0.3s ease;
			}
			
			.service-link:hover {
				color: #6dd5ed;
				transform: translateX(5px);
			}
			
			/* Membership Cards */
			.membership-grid {
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
				gap: 20px;
				margin-top: 30px;
			}
			
			.membership-card {
				background: linear-gradient(135deg, #2c3e50, #34495e);
				border-radius: 15px;
				overflow: hidden;
				box-shadow: 0 10px 30px rgba(0,0,0,0.2);
				transition: all 0.3s ease;
				border: 1px solid #2c3e50;
			}
			
			.membership-card:hover {
				transform: translateY(-5px);
				box-shadow: 0 15px 35px rgba(0,0,0,0.15);
			}
			
			.membership-card.platinum .card-header {
				background: linear-gradient(135deg, #e5e4e2, #b8860b);
			}
			
			.membership-card.diamond .card-header {
				background: linear-gradient(135deg, #b9f2ff, #00bfff);
			}
			
			.membership-card.gold .card-header {
				background: linear-gradient(135deg, #ffd700, #ffa500);
			}
			
			.membership-card.ruby .card-header {
				background: linear-gradient(135deg, #e0115f, #dc143c);
			}
			
			.membership-card.silver .card-header {
				background: linear-gradient(135deg, #c0c0c0, #a9a9a9);
			}
			
			.card-header {
				padding: 20px;
				text-align: center;
				color: white;
			}
			
			.card-header i {
				font-size: 2rem;
				margin-bottom: 10px;
				display: block;
			}
			
			.card-header h4 {
				margin: 0;
				font-size: 1.3rem;
				font-weight: 700;
			}
			
			.card-body {
				padding: 25px;
			}
			
			.membership-description {
				margin-bottom: 25px;
				text-align: center;
			}
			
			.membership-description h5 {
				font-size: 1.2rem;
				font-weight: 700;
				color: #ffffff;
				margin-bottom: 10px;
				text-transform: uppercase;
				letter-spacing: 1px;
			}
			
			.membership-description p {
				color: #ecf0f1;
				font-size: 0.9rem;
				line-height: 1.5;
				margin: 0;
			}
			
			.benefits ul {
				list-style: none;
				padding: 0;
				margin: 0;
			}
			
			.benefits li {
				padding: 8px 0;
				border-bottom: 1px solid #34495e;
				color: #ecf0f1;
				font-size: 0.9rem;
				display: flex;
				align-items: center;
				gap: 10px;
			}
			
			.benefits li i {
				color: #2193b0;
				font-size: 0.8rem;
				flex-shrink: 0;
			}
			
			.benefits li:last-child {
				border-bottom: none;
			}
			
			/* Contact Sidebar */
			.contact-sidebar {
				position: sticky;
				top: 20px;
			}
			
			.contact-card {
				background: linear-gradient(135deg, #2c3e50, #34495e);
				padding: 30px;
				border-radius: 15px;
				box-shadow: 0 10px 30px rgba(0,0,0,0.2);
				border: 1px solid #2c3e50;
			}
			
			.contact-card h4 {
				color: #ffffff;
				font-size: 1.3rem;
				font-weight: 700;
				margin-bottom: 25px;
				text-align: center;
			}
			
			.contact-item {
				display: flex;
				align-items: center;
				gap: 15px;
				margin-bottom: 20px;
				padding: 20px;
				background: #34495e;
				border-radius: 10px;
			}
			
			.contact-item i {
				color: #2193b0;
				font-size: 1.2rem;
				width: 20px;
				margin-left: 5px;
			}
			
			.contact-item strong {
				color: #ffffff;
				font-size: 0.9rem;
			}
			
			.contact-item p {
				margin: 0;
				color: #ecf0f1;
				font-weight: 600;
			}
			
			.contact-person {
				text-align: center;
				margin: 25px 0;
				padding: 20px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				color: white;
				border-radius: 10px;
			}
			
			.contact-person strong {
				display: block;
				font-size: 1.1rem;
				margin-bottom: 5px;
			}
			
			.contact-person p {
				margin: 0;
				opacity: 0.9;
			}
			
			.contact-note {
				text-align: center;
				margin-top: 20px;
				padding: 15px;
				background: #34495e;
				border-radius: 8px;
			}
			
			.contact-note p {
				margin: 0;
				color: #ecf0f1;
				font-style: italic;
			}
			
			/* Trustees Section */
			.trustee-card {
				background: linear-gradient(135deg, #2c3e50, #34495e);
				border-radius: 15px;
				overflow: hidden;
				box-shadow: 0 10px 30px rgba(0,0,0,0.2);
				transition: all 0.3s ease;
				border: 1px solid #2c3e50;
				height: 100%;
			}
			
			.trustee-card:hover {
				transform: translateY(-10px);
				box-shadow: 0 20px 40px rgba(0,0,0,0.15);
			}
			
			.trustee-image {
				position: relative;
				overflow: hidden;
				height: 250px;
			}
			
			.trustee-image img {
				width: 100%;
				height: 100%;
				object-fit: cover;
				transition: transform 0.3s ease;
			}
			
			.trustee-card:hover .trustee-image img {
				transform: scale(1.1);
			}
			
			.trustee-overlay {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background: rgba(33, 147, 176, 0.8);
				display: flex;
				align-items: center;
				justify-content: center;
				opacity: 0;
				transition: all 0.3s ease;
			}
			
			.trustee-card:hover .trustee-overlay {
				opacity: 1;
			}
			
			.social-links {
				display: flex;
				gap: 15px;
			}
			
			.social-link {
				width: 40px;
				height: 40px;
				background: linear-gradient(135deg, #2c3e50, #34495e);
				border-radius: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				color: #2193b0;
				text-decoration: none;
				transition: all 0.3s ease;
				transform: scale(0);
			}
			
			.trustee-card:hover .social-link {
				transform: scale(1);
			}
			
			.social-link:hover {
				background: #2193b0;
				color: white;
				transform: scale(1.1);
			}
			
			.trustee-info {
				padding: 25px;
				text-align: center;
			}
			
			.trustee-info h4 {
				font-size: 1.3rem;
				font-weight: 700;
				color: #ffffff;
				margin-bottom: 8px;
			}
			
			.position {
				color: #2193b0;
				font-weight: 600;
				font-size: 0.9rem;
				text-transform: uppercase;
				letter-spacing: 1px;
				margin-bottom: 15px;
				display: block;
			}
			
			.trustee-info p {
				color: #ecf0f1;
				line-height: 1.6;
				margin: 0;
				font-size: 0.95rem;
			}
			
			.section-title p {
				font-size: 1.1rem;
				color: #666;
				max-width: 600px;
				margin: 0 auto;
			}
			
			/* Professional card styling */
			.post-item {
				height: 100%;
				display: flex;
				flex-direction: column;
				background: linear-gradient(135deg, #2c3e50, #34495e);
				border-radius: 15px;
				overflow: hidden;
				box-shadow: 0 10px 30px rgba(0,0,0,0.3);
				transition: all 0.4s ease;
				border: 1px solid #2c3e50;
			}
			
			.post-item:hover {
				transform: translateY(-10px);
				box-shadow: 0 20px 40px rgba(0,0,0,0.15);
			}
			
			.post-item .post-thumb {
				flex: 0 0 auto;
				position: relative;
				overflow: hidden;
			}
			
			.post-item .post-thumb img {
				width: 100%;
				height: 300px;
				object-fit: cover;
				transition: transform 0.4s ease;
			}
			
			.post-item:hover .post-thumb img {
				transform: scale(1.05);
			}
			
			.post-item .post-content {
				flex: 1;
				display: flex;
				flex-direction: column;
				justify-content: center;
				padding: 25px 20px;
				text-align: center;
			}
			
			.post-item .post-content h5 {
				font-size: 1.2rem;
				font-weight: 600;
				margin-bottom: 10px;
			}
			
			.post-item .post-content h5 a {
				color: #333;
				text-decoration: none;
				transition: color 0.3s ease;
			}
			
			.post-item .post-content h5 a:hover {
				color: #2193b0;
			}
			
			.post-item .post-content p {
				color: #666;
				font-size: 0.95rem;
				margin: 0;
			}
			
			/* Enhanced trustee styling */
			.trustee-overlay {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background: rgba(33, 147, 176, 0.8);
				display: flex;
				align-items: center;
				justify-content: center;
				opacity: 0;
				transition: all 0.3s ease;
			}
			
			.post-item:hover .trustee-overlay {
				opacity: 1;
			}
			
			.trustee-social {
				display: flex;
				gap: 15px;
			}
			
			.social-link {
				width: 40px;
				height: 40px;
				background: #ffffff;
				border-radius: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				color: #2193b0;
				text-decoration: none;
				transition: all 0.3s ease;
				transform: scale(0);
			}
			
			.post-item:hover .social-link {
				transform: scale(1);
			}
			
			.social-link:hover {
				background: #2193b0;
				color: #ffffff;
				transform: scale(1.1);
			}
			
			.trustee-role {
				color: #2193b0;
				font-weight: 600;
				font-size: 0.9rem;
				margin: 5px 0 10px 0;
				text-transform: uppercase;
				letter-spacing: 0.5px;
			}
			
			.trustee-bio {
				margin-top: 10px;
			}
			
			.trustee-bio p {
				font-size: 0.85rem;
				line-height: 1.5;
				color: #777;
				font-style: italic;
			}
			
			/* Enhanced bottom item cards */
			.team-about-bottom .bottom-item {
				height: 100%;
				display: flex;
				flex-direction: column;
				padding: 40px 30px;
				background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
				border-radius: 15px;
				box-shadow: 0 10px 30px rgba(0,0,0,0.1);
				transition: all 0.4s ease;
				border: 1px solid #e9ecef;
				position: relative;
				overflow: hidden;
			}
			
			.team-about-bottom .bottom-item::before {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				height: 4px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
			}
			
			.team-about-bottom .bottom-item:hover {
				transform: translateY(-10px);
				box-shadow: 0 20px 40px rgba(0,0,0,0.15);
			}
			
			.team-about-bottom .bottom-item h2 {
				flex: 0 0 auto;
				margin-bottom: 20px;
				font-size: 1.8rem;
				font-weight: 700;
				color: #333;
			}
			
			.team-about-bottom .bottom-item p {
				flex: 1;
				margin-bottom: 25px;
				color: #666;
				line-height: 1.7;
			}
			
			.team-about-bottom .bottom-item .custom-btn {
				flex: 0 0 auto;
				align-self: flex-start;
				padding: 12px 25px;
				border-radius: 25px;
				font-weight: 600;
				text-transform: uppercase;
				letter-spacing: 0.5px;
				transition: all 0.3s ease;
			}
			
			/* Professional content sections */
			.post-content h3 {
				font-size: 2.2rem;
				font-weight: 700;
				margin-bottom: 1.5rem;
				color: #333;
			}
			
			.post-content p {
				font-size: 1.1rem;
				line-height: 1.8;
				color: #555;
				margin-bottom: 1.5rem;
			}
			
			/* Enhanced get involved section */
			.get-involved-section {
				background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
				position: relative;
			}
			
			.get-involved-section::before {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(33,147,176,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
			}
			
			.get-involved-section .container {
				position: relative;
				z-index: 2;
			}
			
			/* Professional list styling */
			.post-content ul {
				list-style: none;
				padding: 0;
				margin: 2rem 0;
			}
			
			.post-content ul li {
				padding: 12px 0;
				border-bottom: 1px solid #e9ecef;
				display: flex;
				align-items: center;
				font-size: 1.05rem;
			}
			
			.post-content ul li:last-child {
				border-bottom: none;
			}
			
			.post-content ul li i {
				margin-right: 15px;
				font-size: 1.2rem;
				width: 25px;
				text-align: center;
			}
			
			/* Enhanced category list styling */
			.category-list {
				margin: 2rem 0;
			}
			
			.category-item {
				display: flex;
				align-items: center;
				padding: 15px 20px;
				margin-bottom: 15px;
				background: #ffffff;
				border-radius: 10px;
				box-shadow: 0 2px 10px rgba(0,0,0,0.05);
				transition: all 0.3s ease;
				border-left: 4px solid #2193b0;
			}
			
			.category-item:hover {
				transform: translateX(5px);
				box-shadow: 0 5px 15px rgba(0,0,0,0.1);
			}
			
			.category-item i {
				font-size: 1.8rem;
				color: #2193b0;
				margin-right: 20px;
				width: 40px;
				text-align: center;
			}
			
			.category-content h5 {
				font-size: 1.1rem;
				font-weight: 600;
				margin: 0 0 5px 0;
				color: #333;
			}
			
			.category-content p {
				font-size: 0.95rem;
				margin: 0;
				color: #666;
			}
			
			.contact-info {
				background: #f8f9fa;
				padding: 25px;
				border-radius: 10px;
				border-left: 4px solid #2193b0;
			}
			
			.contact-list {
				list-style: none;
				padding: 0;
				margin: 15px 0;
			}
			
			.contact-list li {
				padding: 8px 0;
				display: flex;
				align-items: center;
				border: none;
			}
			
			.contact-list li i {
				color: #2193b0;
				margin-right: 10px;
				width: 20px;
			}
			
			/* Enhanced donor say section */
			.donor-say-section {
				background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
				color: #ffffff;
			}
			
			.donor-say-section h3 {
				color: #ffffff;
				font-size: 2rem;
				font-weight: 700;
				margin-bottom: 1rem;
			}
			
			.donor-say-section .para {
				color: #e3f2fd;
				font-size: 1.1rem;
				line-height: 1.7;
			}
			
			/* Professional button styling */
			.custom-btn {
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				border: none;
				color: #ffffff;
				padding: 15px 30px;
				border-radius: 30px;
				font-weight: 600;
				text-transform: uppercase;
				letter-spacing: 0.5px;
				transition: all 0.3s ease;
				position: relative;
				overflow: hidden;
				text-decoration: none;
				display: inline-block;
			}
			
			.custom-btn::before {
				content: '';
				position: absolute;
				top: 0;
				left: -100%;
				width: 100%;
				height: 100%;
				background: linear-gradient(135deg, #6dd5ed, #2193b0);
				transition: left 0.3s ease;
			}
			
			.custom-btn:hover::before {
				left: 0;
			}
			
			.custom-btn span {
				position: relative;
				z-index: 2;
			}
			
			.custom-btn i {
				position: relative;
				z-index: 2;
				margin-left: 8px;
			}
			
			/* Call to Action Section Styling */
			.cta-section {
				position: relative;
				overflow: hidden;
			}
			
			.cta-section::before {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
				opacity: 0.3;
			}
			
			.cta-content {
				position: relative;
				z-index: 2;
			}
			
			.cta-buttons {
				position: relative;
				z-index: 2;
			}
			
			.btn-white {
				background: #ffffff;
				color: #2193b0;
				border: 2px solid #ffffff;
			}
			
			.btn-white:hover {
				background: transparent;
				color: #ffffff;
			}
			
			.btn-outline-white {
				background: transparent;
				color: #ffffff;
				border: 2px solid #ffffff;
			}
			
			.btn-outline-white:hover {
				background: #ffffff;
				color: #2193b0;
			}
			
			/* Achievement Statistics Styling */
			.achievement-stats {
				margin-top: 2rem;
			}
			
			.stat-item {
				padding: 20px;
				background: rgba(255, 255, 255, 0.1);
				border-radius: 10px;
				margin-bottom: 20px;
				transition: all 0.3s ease;
			}
			
			.stat-item:hover {
				background: rgba(255, 255, 255, 0.2);
				transform: translateY(-5px);
			}
			
			.stat-item h3 {
				font-size: 2.5rem;
				font-weight: 700;
				color: #ffffff;
				margin-bottom: 10px;
			}
			
			.stat-item p {
				color: #e3f2fd;
				font-size: 1rem;
				margin: 0;
			}
			
			/* Responsive improvements */
			@media (max-width: 768px) {
				.page-header {
					padding: 80px 0 60px 0;
				}
				
				.page-subtitle {
					font-size: 1rem;
					letter-spacing: 1px;
				}
				
				.page-title h2 {
					font-size: 2.8rem;
				}
				
				.page-title .lead {
					font-size: 1.2rem;
					max-width: 100%;
				}
				
				.section-title h3 {
					font-size: 2rem;
				}
				
				.post-item .post-thumb img {
					height: 250px;
				}
				
				.team-about-bottom .bottom-item {
					padding: 30px 20px;
				}
				
				.stat-item h3 {
					font-size: 2rem;
				}
			}
			
			@media (max-width: 480px) {
				.page-header {
					padding: 60px 0 40px 0;
				}
				
				.page-title h2 {
					font-size: 2.2rem;
				}
				
				.page-title .lead {
					font-size: 1.1rem;
				}
			}
			
			/* Remove all green colors from About Us page */
			.main-menu li:hover a,
			.main-menu li.active a,
			.main-menu li:hover a:before,
			.main-menu li.active a:before,
			.main-menu li:hover a:after,
			.main-menu li.active a:after,
			.main-menu li .submenu li:hover a,
			.main-menu li .submenu li.active a,
			.header-button a,
			.banner-green,
			.banner-content-container .banner-content h3,
			.banner-content-container .banner-content h1,
			.banner-content-container .banner-content h2,
			.banner-content-container .banner-content ul li i,
			.custom-btn,
			.custom-btn.btn-two,
			.section-title h3,
			.section-title p,
			.team-about-section .section-wrapper .post-content h3,
			.team-about-bottom .bottom-item h2,
			.team-about-bottom .custom-btn,
			.page-header-content-area ul li a.active,
			.page-header-content-area ul li a:hover,
			.page-header-content-area ul li a:after,
			.page-header-content-area ul li:last-child a:after,
			.archive-section h3,
			.doner-say-section h3,
			.archive-section ul li h3,
			.doner-say-section ul li h3,
			.doner-say-section ul li a,
			.donor-say-slider .donor-say .donor-say-content h5 a,
			.donor-say-slider .donor-say p i,
			.archive-pagination span,
			.grid-item-inner:hover .grid-icon a,
			.event-date,
			.event-item .event-content h5 a,
			.event-item .event-content p i,
			.donate-now-section .donate-now h3,
			.donate-content .section-title h3,
			.donate-form .group-btn .donate-btn,
			.donate-now-section .donate-now .donation-status label input:checked~.checkmark,
			.blog-section .section-wrapper .post-item h5 a,
			.blog-section .section-wrapper .post-item .post-content p i,
			.blog-section .section-wrapper .post-item .post-content .entry-content .custom-btn,
			.blog-date,
			.newslater-section,
			.news-item .news-button .custom-btn,
			footer .footer-left .footer-content p i,
			footer .footer-left ul li a,
			.what-slide-content h2,
			.section-wrapper .do-content ul li i,
			.video-links .post-content a,
			.our-volunteers .post-item h5 a,
			.our-volunteers .post-item .profile-icons .profile-icon:hover,
			.our-volunteers .post-item:hover p,
			.our-volunteers .post-item:hover .profile-icons,
			.single-volunteer .post-content h3,
			.single-volunteer .post-content h6,
			.single-volunteer .post-content .single-social-icon a,
			.single-volunteer .post-content ul li .addr-name,
			.want-to-be-volunteer-section .contain-content h6,
			.want-to-be-volunteer-section .contain-content h3,
			.accordion-item .accordion-question .panel-title a,
			.accordion-item .accordion-question .panel-title::before,
			.contact-with-us p i,
			.cart-icon .cart-item ul li .cart-content span.price,
			.cart-icon .cart-item ul li span.remove,
			.cart-icon .cart-item ul li ul li a,
			.skill,
			.cause-thumb .circle strong,
			.blog-quick-pagination .blog-pagination,
			.blog-quick-pagination .blog-nav a,
			.right-side-bar .post-content h5 a,
			.right-side-bar .post-content h6,
			.right-side-bar .post-item .post-content .entry-meta p i,
			.right-side-bar .post-item .post-content .entry-content .custom-btn,
			.widget-category ul li a,
			.widget-post li .post-content a,

			.widget.widget-tag .widget-body a,
			.section-title .swiper-banner-prev,
			.section-title .swiper-banner-next,
			.archive-slider .swiper-slide img,
			.doner-say-section .thumb-list li,
			.swiper-slide.swiper-slide-next .group-btn .custom-btn,
			.urgent-top-content h6,
			.urgent-top-content h3,
			.urgent-bottom-item .event-item .event-content h5 a,
			.urgent-bottom-item .event-item h3,
			.event-item .event-content h5 a,
			.event-item .event-content p i,
			.three-column-event .three-column-wrapper .cause-content ul li i,
			.three-column-event .three-column-wrapper .event-inner a,
			.event-list-section .section-wrapper .list-event-item .list-content h5 a,
			.event-list-section .section-wrapper .list-event-item .list-content p i,
			.event-list-section .section-wrapper .list-event-item .list-date,
			.count-down-section .count-down-item h3,
			.count-down-section .count-down-item h2,
			.countdown li .count-number,
			.progress-count .back span,
			.progress-item .target h5,
			.recent-cause-slider .cause-content .cause-header a,
			.recent-cause-slider .cause-content h4,
			.recent-cause-slider .cause-content ul li span,
			.recent-cause-slider .cause-content ul li p,
			.cause-item .cause-content h4,
			.cause-item .cause-content ul li span,
			.cause-item .cause-content ul li p,
			.recent-top h6,
			.recent-top .cause-left p,
			.what-to-do-slider .slide-item .what-slide-thumb img,
			.cause-content:hover,
			.donate-form .form select,
			.message-form .form-group input:focus,
			.message-form .form-group textarea:focus,
			.mobile-menu-area .m-menu li a .fa-plus,
			.mobile-menu-area .m-menu li a .fa-angle-down,
			.main-menu li a .fa-plus,
			.main-menu li a .fa-angle-down,
			.group-btn .custom-btn:hover,
			.count-down-section .countdown li .count-number,
			.custom-btn,
			.custom-btn:before,
			.custom-btn:after,
			.recent-cause-slider .cause-item,
			.recent-cause-slider .cause-item:hover,
			.cause-item .cause-content h4,
			.cause-item .cause-content h4:hover,
			.recent-cause-slider,
			.recent-cause-slider .cause-item,
			html body .volunteer-form .form-group select,
			html body .donate-form .form-group select,
			.main-menu li.active a,
			.main-menu li.active a:before,
			.main-menu li.active a:after,
			.blog-section .section-wrapper .post-item:hover,
			.blog-section .section-wrapper .post-item:hover .post-thumb img,
			.blog-section .section-wrapper .post-item:hover .post-content h5 a,
			.blog-section .section-wrapper .post-item,
			.blog-section .section-wrapper .post-item .post-content h5 a,
			.what-to-do-slider .slide-item .what-slide-thumb img,
			.cause-item:hover,
			.cause-item:hover .cause-thumb img,
			.cause-item:hover .cause-header a {
				color: #2193b0 !important;
				background-color: #2193b0 !important;
				border-color: #2193b0 !important;
			}
			
			/* Hover states for blue colors */
			.main-menu li:hover a:hover,
			.main-menu li.active a:hover,
			.main-menu li .submenu li:hover a:hover,
			.main-menu li .submenu li.active a:hover,
			.header-button a:hover,
			.custom-btn:hover,
			.custom-btn.btn-two:hover,
			.team-about-bottom .custom-btn:hover,
			.team-about-bottom .bottom-item.active h2,
			.team-about-bottom .bottom-item.active .custom-btn,
			.page-header-content-area ul li a:hover,
			footer .footer-left ul li a:hover,
			.blog-section .section-wrapper .post-item h5 a:hover,
			.blog-section .section-wrapper .post-item .post-content .entry-content .custom-btn:hover,
			.news-item .news-button .custom-btn:hover,
			.video-links .post-content a:hover,
			.our-volunteers .post-item h5 a:hover,
			.our-volunteers .post-item:hover p:hover,
			.our-volunteers .post-item:hover .profile-icons:hover,
			.single-volunteer .post-content .single-social-icon a:hover,
			.cart-icon .cart-item ul li span.remove:hover,
			.cart-icon .cart-item ul li ul li a:hover,
			.blog-quick-pagination .blog-nav a:hover,
			.right-side-bar .post-content h5 a:hover,
			.right-side-bar .post-item .post-content .entry-content .custom-btn:hover,
			.widget-category ul li a:hover,
			.widget-post li .post-content a:hover,
			.widget.widget-tag .widget-body a:hover,
			.section-title .swiper-banner-prev:hover,
			.section-title .swiper-banner-next:hover,
			.event-item .event-content h5 a:hover,
			.event-list-section .section-wrapper .list-event-item.active .list-content h5 a,
			.event-list-section .section-wrapper .list-event-item .list-content h5 a:hover,
			.recent-cause-slider .cause-content .cause-header a:hover,
			.cause-item:hover .cause-header a,
			.group-btn .custom-btn:hover,
			.custom-btn:hover,
			.custom-btn:hover:before,
			.custom-btn:hover:after,
			.cause-item .cause-content h4:hover,
			.blog-section .section-wrapper .post-item:hover .post-content h5 a:hover,
			.cause-item:hover .cause-header a:hover {
				color: #6dd5ed !important;
				background-color: #6dd5ed !important;
				border-color: #6dd5ed !important;
			}
			
			/* Background colors for specific elements */
			.event-date,
			.blog-date,
			.event-list-section .section-wrapper .list-event-item .list-date,
			.urgent-bottom-item .event-item h3,
			.newslater-section {
				background-color: #2193b0 !important;
			}
			
			/* Text colors for elements with colored backgrounds */
			.event-date h3,
			.event-date p,
			.blog-date h3,
			.blog-date p,
			.event-list-section .section-wrapper .list-event-item .list-date h3,
			.event-list-section .section-wrapper .list-event-item .list-date p,
			.urgent-bottom-item .event-item h3,
			.custom-btn,
			.custom-btn.btn-two,
			.team-about-bottom .custom-btn,
			.team-about-bottom .bottom-item.active .custom-btn,
			.donate-form .group-btn .donate-btn,
			.blog-section .section-wrapper .post-item .post-content .entry-content .custom-btn,
			.news-item .news-button .custom-btn,
			.right-side-bar .post-item .post-content .entry-content .custom-btn,
			.swiper-slide.swiper-slide-next .group-btn .custom-btn,
			.blog-quick-pagination .blog-pagination.active,
			.blog-quick-pagination .blog-pagination:hover,
			.section-title .swiper-banner-prev:hover,
			.section-title .swiper-banner-next:hover,
			.widget.widget-tag .widget-body a:hover {
				color: #ffffff !important;
			}
			
			/* Ensure the row containers use flexbox for equal height */
			.add-gutters .row {
				display: flex;
				flex-wrap: wrap;
			}
			
			.add-gutters .row > [class*="col-"] {
				display: flex;
				flex-direction: column;
			}
			
			.team-about-bottom.row {
				display: flex;
				flex-wrap: wrap;
			}
			
			.team-about-bottom.row > [class*="col-"] {
				display: flex;
				flex-direction: column;
			}

			/* Professional Testimonials Section Styling */
			.testimonials-section {
				padding: 20px 0;
			}

			.testimonials-section .section-header {
				text-align: center;
				margin-bottom: 40px;
			}

			.testimonials-section .section-header h3 {
				font-size: 2.2rem;
				font-weight: 700;
				color: #333;
				margin-bottom: 10px;
			}

			.testimonials-section .section-subtitle {
				font-size: 1.1rem;
				color: #666;
				line-height: 1.6;
			}

			.testimonials-container {
				position: relative;
				margin-bottom: 30px;
			}

			.testimonial-card {
				background: linear-gradient(135deg, #2c3e50, #34495e);
				border-radius: 20px;
				padding: 40px 30px;
				box-shadow: 0 15px 35px rgba(0,0,0,0.1);
				transition: all 0.4s ease;
				display: none;
				border: 1px solid rgba(255, 255, 255, 0.1);
				position: relative;
				overflow: hidden;
			}

			.testimonial-card::before {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
				border-radius: 20px;
				z-index: 1;
			}

			.testimonial-card.active {
				display: block;
				animation: fadeInUp 0.6s ease-out;
			}

			@keyframes fadeInUp {
				from {
					opacity: 0;
					transform: translateY(30px);
				}
				to {
					opacity: 1;
					transform: translateY(0);
				}
			}

			.testimonial-content {
				position: relative;
				z-index: 2;
				margin-bottom: 30px;
			}

			.quote-icon {
				width: 60px;
				height: 60px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				border-radius: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				margin-bottom: 25px;
				color: white;
				font-size: 1.5rem;
				box-shadow: 0 8px 20px rgba(33, 147, 176, 0.3);
			}

			.testimonial-text {
				font-size: 1.1rem;
				line-height: 1.8;
				color: #ecf0f1;
				font-style: italic;
				margin: 0;
				position: relative;
			}

			.testimonial-text::before {
				content: '"';
				font-size: 3rem;
				color: rgba(33, 147, 176, 0.3);
				position: absolute;
				top: -10px;
				left: -15px;
				font-family: serif;
				line-height: 1;
			}

			.testimonial-author {
				display: flex;
				align-items: center;
				gap: 20px;
				position: relative;
				z-index: 2;
			}

			.author-avatar {
				width: 70px;
				height: 70px;
				border-radius: 50%;
				overflow: hidden;
				border: 3px solid rgba(255, 255, 255, 0.2);
				flex-shrink: 0;
			}

			.author-avatar img {
				width: 100%;
				height: 100%;
				object-fit: cover;
			}

			.author-info {
				flex: 1;
			}

			.author-info h5 {
				font-size: 1.2rem;
				font-weight: 700;
				color: #ffffff;
				margin: 0 0 5px 0;
			}

			.author-title {
				font-size: 0.9rem;
				color: #6dd5ed;
				text-transform: uppercase;
				letter-spacing: 1px;
				font-weight: 600;
				display: block;
				margin-bottom: 8px;
			}

			.rating {
				display: flex;
				gap: 3px;
			}

			.rating i {
				color: #2193b0;
				font-size: 0.9rem;
			}

			/* Navigation */
			.testimonial-navigation {
				display: flex;
				align-items: center;
				justify-content: center;
				gap: 20px;
				margin-top: 30px;
			}

			.nav-btn {
				width: 45px;
				height: 45px;
				background: linear-gradient(135deg, #2193b0, #6dd5ed);
				border: none;
				border-radius: 50%;
				color: white;
				font-size: 1rem;
				cursor: pointer;
				transition: all 0.3s ease;
				display: flex;
				align-items: center;
				justify-content: center;
				box-shadow: 0 5px 15px rgba(33, 147, 176, 0.3);
			}

			.nav-btn:hover {
				transform: translateY(-2px);
				box-shadow: 0 8px 20px rgba(33, 147, 176, 0.4);
			}

			.nav-dots {
				display: flex;
				gap: 8px;
			}

			.dot {
				width: 12px;
				height: 12px;
				border-radius: 50%;
				background: rgba(33, 147, 176, 0.3);
				cursor: pointer;
				transition: all 0.3s ease;
			}

			.dot.active {
				background: #2193b0;
				transform: scale(1.2);
			}

			/* Responsive Design */
			@media (max-width: 768px) {
				.testimonials-section .section-header h3 {
					font-size: 1.8rem;
				}

				.testimonial-card {
					padding: 30px 20px;
				}

				.testimonial-text {
					font-size: 1rem;
				}

				.testimonial-author {
					flex-direction: column;
					text-align: center;
					gap: 15px;
				}

				.author-avatar {
					width: 60px;
					height: 60px;
				}
			}
		</style>
	</head>
	<body>
	    		<!-- Loader - Commented out -->
		<!-- <div id="loader"></div> -->
		<!--===================================Header Section==============================-->
		<!--=================================Header Section End=============================-->

		<!--=================================Page Header Start===================================-->
		<section class="page-header">
			<div class="overlay"></div>
			<div class="page-header-content-area">
				<div class="container">
					<div class="page-title text-center">
						<div class="page-subtitle">Welcome to</div>
						<h2>About Our Foundation</h2>
						<p class="lead">Transforming Lives, Empowering Communities</p>
						<div class="header-divider"></div>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Page Header End===================================-->

		<!--===============================About Foundation Section Start==============================-->
		<section class="about-foundation-section section-padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-image wow fadeInLeft" data-wow-duration="1s">
							<div class="image-wrapper">
								<img src="assets/img/banner/add21.jpeg" alt="Rev. Fr. Callistus Osiaga Foundation" class="img-fluid rounded shadow-lg">
								<div class="experience-badge">
									<span class="years">15+</span>
									<span class="text">Years of Service</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content wow fadeInRight" data-wow-duration="1s">
							<div class="section-subtitle">About Our Foundation</div>
							<h2 class="section-title">Empowering Communities Through Compassion & Education</h2>
							<p class="lead-text">
								Rev. Fr. Callistus Osiaga Foundation is a beacon of hope dedicated to transforming lives and empowering vulnerable communities across Nigeria.
							</p>
							<p>
								Since our establishment, we have been committed to providing comprehensive support to indigent children, poor widows, and physically challenged individuals. Our foundation operates on the fundamental principle that every individual, regardless of their circumstances, deserves the opportunity to reach their full potential.
							</p>
							<p>
								Through our integrated approach combining education, skill acquisition, and community development, we create sustainable pathways for individuals to build better futures for themselves and their families.
							</p>
							<div class="about-features">
								<div class="feature-item">
									<i class="fa fa-graduation-cap"></i>
									<span>Quality Education</span>
								</div>
								<div class="feature-item">
									<i class="fa fa-hands-helping"></i>
									<span>Skill Development</span>
								</div>
								<div class="feature-item">
									<i class="fa fa-heart"></i>
									<span>Community Support</span>
								</div>
							</div>
							<div class="about-actions">
								<a href="contact.php" class="btn-primary">
									<span>Learn More</span>
									<i class="fa fa-arrow-right"></i>
								</a>
								<a href="donate.php" class="btn-secondary">
									<span>Support Us</span>
									<i class="fa fa-heart"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--===============================About Foundation Section End==============================-->

		<!--===============================Mission Vision Section Start==============================-->
		<section class="mission-vision-section section-padding bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="mission-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
							<div class="card-icon">
								<i class="fa fa-eye"></i>
							</div>
							<h3>Our Vision</h3>
							<p>A world where indigent children, physically challenged persons, and poor widows can live out their dreams and aspirations with dignity and hope.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mission-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
							<div class="card-icon">
								<i class="fa fa-bullseye"></i>
							</div>
							<h3>Our Mission</h3>
							<p>To establish world-class education centers and sustainable skill acquisition programs that empower vulnerable communities and create lasting positive change.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mission-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
							<div class="card-icon">
								<i class="fa fa-star"></i>
							</div>
							<h3>Our Values</h3>
							<p>Compassion, Integrity, Excellence, Community, Empowerment, and Sustainable Development guide everything we do.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--===============================Mission Vision Section End==============================-->

		<!--===============================Services Section Start==============================-->
		<section class="services-section section-padding">
			<div class="container">
				<div class="section-header text-center">
					<div class="section-subtitle">Our Services</div>
					<h2 class="section-title">How We Make a Difference</h2>
					<p class="section-description">We provide comprehensive support through various programs designed to uplift and empower those in need.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="service-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
							<div class="service-icon">
								<i class="fa fa-graduation-cap"></i>
							</div>
							<h3>Education Support</h3>
							<p>Providing quality education and scholarships to indigent children, ensuring they have access to learning opportunities that can transform their future.</p>
							<a href="donate.php" class="service-link">
								<span>Learn More</span>
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
							<div class="service-icon">
								<i class="fa fa-hands-helping"></i>
							</div>
							<h3>Widow Empowerment</h3>
							<p>Empowering widows through skill acquisition programs, financial support, and community integration to help them become self-sufficient.</p>
							<a href="donate.php" class="service-link">
								<span>Learn More</span>
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
							<div class="service-icon">
								<i class="fa fa-wheelchair"></i>
							</div>
							<h3>Disability Support</h3>
							<p>Supporting physically challenged individuals with assistive devices, rehabilitation services, and vocational training for independent living.</p>
							<a href="donate.php" class="service-link">
								<span>Learn More</span>
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--===============================Services Section End==============================-->

		<!--=================================Get Involved Section Start=============================-->
		<section class="get-involved-section section-padding bg-light">
			<div class="container">
				<div class="section-header text-center">
					<div class="section-subtitle">Get Involved</div>
					<h2 class="section-title">Join Our Mission</h2>
					<p class="section-description">Become part of our community of changemakers and help us create lasting impact in vulnerable communities.</p>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="membership-section">
							<h3 class="mb-4">Membership Categories</h3>
							<div class="membership-grid">
								<div class="membership-card platinum">
									<div class="card-header">
										<i class="fa fa-gem"></i>
										<h4>Platinum</h4>
									</div>
									<div class="card-body">
										<div class="membership-description">
											<h5>Elite Partnership</h5>
											<p>Join our highest tier of supporters with exclusive access to foundation leadership and direct impact on our most critical initiatives.</p>
										</div>
										<div class="benefits">
											<ul>
												<li><i class="fa fa-check-circle"></i> VIP Foundation Events</li>
												<li><i class="fa fa-check-circle"></i> Direct Impact Reports</li>
												<li><i class="fa fa-check-circle"></i> Recognition in Publications</li>
												<li><i class="fa fa-check-circle"></i> Personal Foundation Updates</li>
												<li><i class="fa fa-check-circle"></i> Leadership Meeting Access</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="membership-card diamond">
									<div class="card-header">
										<i class="fa fa-diamond"></i>
										<h4>Diamond</h4>
									</div>
									<div class="card-body">
										<div class="membership-description">
											<h5>Premium Support</h5>
											<p>Make a significant impact with priority access to foundation activities and detailed insights into our programs.</p>
										</div>
										<div class="benefits">
											<ul>
												<li><i class="fa fa-check-circle"></i> Priority Event Access</li>
												<li><i class="fa fa-check-circle"></i> Quarterly Updates</li>
												<li><i class="fa fa-check-circle"></i> Foundation Recognition</li>
												<li><i class="fa fa-check-circle"></i> Program Impact Reports</li>
												<li><i class="fa fa-check-circle"></i> Special Event Invitations</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="membership-card gold">
									<div class="card-header">
										<i class="fa fa-star"></i>
										<h4>Gold</h4>
									</div>
									<div class="card-body">
										<div class="membership-description">
											<h5>Active Supporter</h5>
											<p>Be part of our core community with regular updates and opportunities to engage with our foundation's work.</p>
										</div>
										<div class="benefits">
											<ul>
												<li><i class="fa fa-check-circle"></i> Event Invitations</li>
												<li><i class="fa fa-check-circle"></i> Bi-annual Reports</li>
												<li><i class="fa fa-check-circle"></i> Community Recognition</li>
												<li><i class="fa fa-check-circle"></i> Newsletter Access</li>
												<li><i class="fa fa-check-circle"></i> Volunteer Opportunities</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="membership-card ruby">
									<div class="card-header">
										<i class="fa fa-heart"></i>
										<h4>Ruby</h4>
									</div>
									<div class="card-body">
										<div class="membership-description">
											<h5>Community Member</h5>
											<p>Support our mission with regular contributions and stay connected to our foundation's activities and impact.</p>
										</div>
										<div class="benefits">
											<ul>
												<li><i class="fa fa-check-circle"></i> Newsletter Access</li>
												<li><i class="fa fa-check-circle"></i> Annual Reports</li>
												<li><i class="fa fa-check-circle"></i> Foundation Updates</li>
												<li><i class="fa fa-check-circle"></i> Community Events</li>
												<li><i class="fa fa-check-circle"></i> Impact Stories</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="membership-card silver">
									<div class="card-header">
										<i class="fa fa-circle"></i>
										<h4>Silver</h4>
									</div>
									<div class="card-body">
										<div class="membership-description">
											<h5>Foundation Friend</h5>
											<p>Start your journey with us and receive regular updates about our work and the communities we serve.</p>
										</div>
										<div class="benefits">
											<ul>
												<li><i class="fa fa-check-circle"></i> Foundation Updates</li>
												<li><i class="fa fa-check-circle"></i> Community News</li>
												<li><i class="fa fa-check-circle"></i> Impact Stories</li>
												<li><i class="fa fa-check-circle"></i> Newsletter Access</li>
												<li><i class="fa fa-check-circle"></i> Welcome Package</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-sidebar">
							<div class="contact-card">
								<h4>Contact Information</h4>
								<div class="contact-item">
									<i class="fa fa-phone"></i>
									<div>
										<strong>Project Manager</strong>
										<p>08160226089</p>
									</div>
								</div>
								<div class="contact-item">
									<i class="fa fa-phone"></i>
									<div>
										<strong>Father</strong>
										<p>08160226089</p>
									</div>
								</div>
								<div class="contact-person">
									<strong>Galapopo Stanley</strong>
									<p>Project Manager</p>
								</div>
								<div class="contact-note">
									<p><em>Thank you for your anticipated generosity and support.</em></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Get Involved Section End=============================-->

		<!--=================================Donor Say Section Start=============================-->
		<section class="donor-say-section section-padding-2 bg-color">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="archive">
							<h3>Our Achievements</h3>
							<p class="para">
								We have made significant strides in improving the lives of those we serve. Here are some of our key achievements.
							</p>
                            <h3>Our Vision</h3>
							<p class="para">
                                A world where indigent children, physically challenged persons and poor widows can live out their dreams and aspirations.
							</p>
                            <h3>Our Mission</h3>
							<p class="para">
                                To establish a world class education center dedicated to the education of indigent students
                                To establish a self sustaining multi skill acquisition center for empowerment of physically challenged persons and poor widows

							</p>
							<div class="achievement-stats mt-4">
								<div class="row">
									<div class="col-md-4">
										<div class="stat-item text-center">
											<h3><span class="counter">300</span>+</h3>
											<p>Indigent Children Educated</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="stat-item text-center">
											<h3><span class="counter">700</span>+</h3>
											<p>Widows Empowered</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="stat-item text-center">
											<h3><span class="counter">200</span>+</h3>
											<p>Physically Challenged Supported</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="testimonials-section">
							<div class="section-header">
								<h3>What Our Donors Say</h3>
								<p class="section-subtitle">
									Our donors are an integral part of our success. Here are some of their testimonials.
								</p>
							</div>
							
							<div class="testimonials-container">
								<div class="testimonial-card active">
									<div class="testimonial-content">
										<div class="quote-icon">
											<i class="fas fa-quote-left"></i>
										</div>
										<p class="testimonial-text">
											"Supporting the Rev. Fr. Callistus Osiaga Foundation has been a rewarding experience. Their dedication to empowering vulnerable communities is truly inspiring. I've seen firsthand how they transform lives through education and skill acquisition."
										</p>
									</div>
									<div class="testimonial-author">
										<div class="author-avatar">
											<img src="assets/img/logo/04.png" alt="Dr. Sarah Johnson">
										</div>
										<div class="author-info">
											<h5>Dr. Sarah Johnson</h5>
											<span class="author-title">Medical Specialist</span>
											<div class="rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="testimonial-card">
									<div class="testimonial-content">
										<div class="quote-icon">
											<i class="fas fa-quote-left"></i>
										</div>
										<p class="testimonial-text">
											"The impact this foundation has on the lives of indigent children and widows is remarkable. I am proud to be a donor and have witnessed the positive changes they bring to our community."
										</p>
									</div>
									<div class="testimonial-author">
										<div class="author-avatar">
											<img src="assets/img/logo/04.png" alt="Mr. David Williams">
										</div>
										<div class="author-info">
											<h5>Mr. David Williams</h5>
											<span class="author-title">Businessman</span>
											<div class="rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="testimonial-card">
									<div class="testimonial-content">
										<div class="quote-icon">
											<i class="fas fa-quote-left"></i>
										</div>
										<p class="testimonial-text">
											"I've been supporting this foundation for years and the results are incredible. The way they empower widows and provide education to children is exactly what our community needs."
										</p>
									</div>
									<div class="testimonial-author">
										<div class="author-avatar">
											<img src="assets/img/logo/04.png" alt="Mrs. Grace Okechukwu">
										</div>
										<div class="author-info">
											<h5>Mrs. Grace Okechukwu</h5>
											<span class="author-title">Community Leader</span>
											<div class="rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="testimonial-navigation">
								<button class="nav-btn prev-btn" onclick="changeTestimonial(-1)">
									<i class="fas fa-chevron-left"></i>
								</button>
								<div class="nav-dots">
									<span class="dot active" onclick="currentTestimonial(1)"></span>
									<span class="dot" onclick="currentTestimonial(2)"></span>
									<span class="dot" onclick="currentTestimonial(3)"></span>
								</div>
								<button class="nav-btn next-btn" onclick="changeTestimonial(1)">
									<i class="fas fa-chevron-right"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Donor Say Section End=============================-->

		<!--===============================Trustees Section Start==============================-->
		<section class="trustees-section section-padding bg-light">
			<div class="container">
				<div class="section-header text-center">
					<div class="section-subtitle">Our Leadership</div>
					<h2 class="section-title">Board of Trustees</h2>
					<p class="section-description">Meet the dedicated leaders who guide our foundation's mission and ensure we create lasting positive impact.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="trustee-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
							<div class="trustee-image">
								<img src="assets/img/banner/president.jpg" alt="Rev Fr Callistus Osiaga">
								<div class="trustee-overlay">
									<div class="social-links">
										<a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
										<a href="#" class="social-link"><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>
							<div class="trustee-info">
								<h4>Rev Fr Callistus Osiaga</h4>
								<span class="position">Founder & Chairman</span>
								<p>Visionary leader dedicated to transforming lives through education and community development. His leadership has guided our foundation's growth and impact.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="trustee-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
							<div class="trustee-image">
								<img src="assets/img/banner/Engr Nsisuk Ekanem.jpg" alt="Engr Nsisuk Osmund Ekanem">
								<div class="trustee-overlay">
									<div class="social-links">
										<a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
										<a href="#" class="social-link"><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>
							<div class="trustee-info">
								<h4>Engr Nsisuk Osmund Ekanem</h4>
								<span class="position">Trustee</span>
								<p>Experienced engineer committed to infrastructure development and community empowerment. Brings technical expertise to our development projects.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="trustee-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
							<div class="trustee-image">
								<img src="assets/img/banner/dum.jpg" alt="Mr Sunny Uloko">
								<div class="trustee-overlay">
									<div class="social-links">
										<a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
										<a href="#" class="social-link"><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>
							<div class="trustee-info">
								<h4>Mr Sunny Uloko</h4>
								<span class="position">Trustee</span>
								<p>Dedicated professional focused on sustainable development and community outreach. Ensures our programs create lasting positive change.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="trustee-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
							<div class="trustee-image">
								<img src="assets/img/banner/dum.jpg" alt="Hon George Izobo">
								<div class="trustee-overlay">
									<div class="social-links">
										<a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
										<a href="#" class="social-link"><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>
							<div class="trustee-info">
								<h4>Hon George Izobo</h4>
								<span class="position">Trustee</span>
								<p>Honorable leader with extensive experience in public service and community development. Provides strategic guidance for our initiatives.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="trustee-card wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
							<div class="trustee-image">
								<img src="assets/img/banner/WhatsApp Image 2025-01-18 at 17.59.02_e79ab5f3.jpg" alt="Hon Robert Ikazoboh">
								<div class="trustee-overlay">
									<div class="social-links">
										<a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
										<a href="#" class="social-link"><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>
							<div class="trustee-info">
								<h4>Hon Robert Ikazoboh</h4>
								<span class="position">Trustee</span>
								<p>Distinguished leader committed to educational excellence and community transformation. Drives our educational initiatives forward.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--===============================Trustees Section End==============================-->

		<!--=================================Call to Action Section Start=============================-->
		<section class="cta-section section-padding" style="background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8">
						<div class="cta-content">
							<h3 class="text-white mb-3">Ready to Make a Difference?</h3>
							<p class="text-white mb-4">Join us in our mission to transform lives and empower communities. Every contribution, no matter how small, makes a significant impact.</p>
						</div>
					</div>
					<div class="col-lg-4 text-center">
						<div class="cta-buttons">
							<a href="donate.php" class="custom-btn btn-white me-3">
								<span>Donate Now</span>
								<i class="fa fa-heart"></i>
							</a>
							<a href="volunteer.php" class="custom-btn btn-outline-white">
								<span>Volunteer</span>
								<i class="fa fa-users"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=================================Call to Action Section End=============================-->

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

		<script src="assets/js/jquery.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/bootstrap.min.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/countdown.min.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/isotope.pkgd.min.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/isotope-masonry.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/lightcase.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/swiper.min.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/waypoint.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/jquery.counterup.min.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/progress.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/wow.min.js?v=<?php echo time(); ?>"></script>
		<script src="assets/js/function.js?v=<?php echo time(); ?>"></script>
		<script>
		
			// Loader script - Commented out
			/*
			$(window).on('load', function() {
				setTimeout(function() {
					$('#loader').fadeOut('slow');
				}, 3000); // Delay of 3 seconds
			});
			*/
			
			// Counter animation for achievement stats
			$(document).ready(function() {
				$('.counter').each(function() {
					$(this).prop('Counter', 0).animate({
						Counter: $(this).text()
					}, {
						duration: 2000,
						easing: 'swing',
						step: function(now) {
							$(this).text(Math.ceil(now));
						}
					});
				});
			});
			
			// Smooth scrolling for anchor links
			$(document).on('click', 'a[href^="#"]', function(event) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: $($.attr(this, 'href')).offset().top - 100
				}, 500);
			});

			// Testimonials slider functionality
			let currentTestimonialIndex = 0;
			const testimonials = document.querySelectorAll('.testimonial-card');
			const dots = document.querySelectorAll('.dot');

			function showTestimonial(index) {
				// Hide all testimonials
				testimonials.forEach(card => card.classList.remove('active'));
				dots.forEach(dot => dot.classList.remove('active'));

				// Show current testimonial
				testimonials[index].classList.add('active');
				dots[index].classList.add('active');
			}

			function changeTestimonial(direction) {
				currentTestimonialIndex += direction;
				
				if (currentTestimonialIndex >= testimonials.length) {
					currentTestimonialIndex = 0;
				} else if (currentTestimonialIndex < 0) {
					currentTestimonialIndex = testimonials.length - 1;
				}
				
				showTestimonial(currentTestimonialIndex);
			}

			function currentTestimonial(index) {
				currentTestimonialIndex = index - 1;
				showTestimonial(currentTestimonialIndex);
			}

			// Auto-rotate testimonials every 5 seconds
			setInterval(() => {
				changeTestimonial(1);
			}, 5000);

			// Initialize first testimonial
			showTestimonial(0);
		</script>
	</body>
</html>
