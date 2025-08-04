<?php
// Include database connection
include '../includes/db.php';

// Fetch testimonials from database (if you have a testimonials table)
// For now, we'll use sample data
$testimonials = [
    [
        'name' => 'Sarah Johnson',
        'role' => 'Volunteer',
        'content' => 'Working with Osiaga Foundation has been an incredible experience. The impact we\'ve made in our community is truly remarkable. I\'ve seen firsthand how our programs have changed lives.',
        'rating' => 5,
        'category' => 'volunteer'
    ],
    [
        'name' => 'Michael Chen',
        'role' => 'Donor',
        'content' => 'I\'ve been supporting Osiaga Foundation for over 3 years now. Their transparency and dedication to making a difference is what keeps me coming back. Every donation truly makes an impact.',
        'rating' => 5,
        'category' => 'donor'
    ],
    [
        'name' => 'Emily Rodriguez',
        'role' => 'Beneficiary',
        'content' => 'The educational support I received from Osiaga Foundation changed my life. They didn\'t just provide resources, they gave me hope and the tools to build a better future for myself and my family.',
        'rating' => 5,
        'category' => 'beneficiary'
    ],
    [
        'name' => 'David Thompson',
        'role' => 'Community Partner',
        'content' => 'As a community partner, I\'ve seen Osiaga Foundation\'s commitment to sustainable development. Their programs are well-designed and have lasting positive effects on our community.',
        'rating' => 5,
        'category' => 'partner'
    ],
    [
        'name' => 'Lisa Wang',
        'role' => 'Volunteer',
        'content' => 'The volunteer experience at Osiaga Foundation is incredibly rewarding. The team is supportive, the work is meaningful, and the impact is real. I\'m proud to be part of this organization.',
        'rating' => 5,
        'category' => 'volunteer'
    ],
    [
        'name' => 'Robert Martinez',
        'role' => 'Donor',
        'content' => 'I appreciate how Osiaga Foundation keeps donors informed about how their contributions are used. The regular updates and impact reports show real accountability and transparency.',
        'rating' => 5,
        'category' => 'donor'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - Osiaga Foundation</title>
    <meta name="description" content="Read inspiring testimonials from volunteers, donors, beneficiaries, and community partners of Osiaga Foundation. See the real impact of our work.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/lightcase.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/color-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar-styles.css">
    		<link rel="stylesheet" type="text/css" href="../assets/css/testimonials-styles.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/remove-green.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/navbar-styles.css">
</head>
<body>
    	<!-- Header -->
	<?php include '../includes/navbar.php'; ?>
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-content">
                        <h1>Testimonials</h1>
                        <p>Hear from our community about the impact of Osiaga Foundation</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Hero -->
    <section class="testimonials-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-hero-content">
                        <h2>Voices of Impact</h2>
                        <p>Discover the real stories behind our mission. From volunteers and donors to beneficiaries and community partners, these testimonials showcase the transformative power of collective action.</p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Happy Volunteers</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">1000+</span>
                                <span class="stat-label">Lives Impacted</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Community Partners</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Filters -->
    <section class="testimonials-filters">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-buttons">
                        <button class="filter-btn active" data-filter="all">
                            <i class="fas fa-star"></i>
                            All Testimonials
                        </button>
                        <button class="filter-btn" data-filter="volunteer">
                            <i class="fas fa-hands-helping"></i>
                            Volunteers
                        </button>
                        <button class="filter-btn" data-filter="donor">
                            <i class="fas fa-heart"></i>
                            Donors
                        </button>
                        <button class="filter-btn" data-filter="beneficiary">
                            <i class="fas fa-user-graduate"></i>
                            Beneficiaries
                        </button>
                        <button class="filter-btn" data-filter="partner">
                            <i class="fas fa-handshake"></i>
                            Partners
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="testimonials-section">
        <div class="container">
            <div class="row" id="testimonials-grid">
                <?php foreach ($testimonials as $testimonial): ?>
                <div class="col-lg-4 col-md-6 testimonial-item" data-category="<?php echo $testimonial['category']; ?>">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-info">
                                <h4><?php echo $testimonial['name']; ?></h4>
                                <p class="role"><?php echo $testimonial['role']; ?></p>
                                <div class="rating">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="fas fa-star <?php echo $i <= $testimonial['rating'] ? 'filled' : ''; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"<?php echo $testimonial['content']; ?>"</p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="category-badge">
                                <i class="fas fa-tag"></i>
                                <?php echo ucfirst($testimonial['category']); ?>
                            </div>
                            <div class="testimonial-actions">
                                <button class="share-btn" onclick="shareTestimonial('<?php echo $testimonial['name']; ?>', '<?php echo $testimonial['content']; ?>')">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="testimonials-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content">
                        <h3>Share Your Story</h3>
                        <p>Have you been impacted by Osiaga Foundation? We'd love to hear your story and share it with our community.</p>
                        <div class="cta-buttons">
                            <a href="../contact.php" class="btn btn-primary">Share Your Testimonial</a>
                            <a href="../volunteer.php" class="btn btn-outline">Become a Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/swiper.min.js"></script>
    <script src="../assets/js/lightcase.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/function.js"></script>
    <script src="../assets/js/navbar.js"></script>
    	<script src="../assets/js/testimonials.js"></script>
	<script src="../assets/js/navbar.js"></script>

    	<script>
		// Initialize WOW.js
		new WOW().init();
	</script>

	<!-- Professional Testimonials Styling -->
	<style>
	/* Remove all white backgrounds and create professional dark theme */
	body {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
		color: #ffffff;
	}

	/* Page Header Styling */
	.page-header {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%);
		position: relative;
		height: 50vh;
		display: flex;
		align-items: center;
		justify-content: center;
		overflow: hidden;
		margin-top: 88px;
	}

	.page-header::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: url('../assets/img/banner/add32.jpg') center/cover;
		opacity: 0.3;
		z-index: 1;
	}

	.page-header-content {
		position: relative;
		z-index: 3;
		text-align: center;
		color: #ffffff;
	}

	.page-header h1 {
		font-size: 3.5rem;
		font-weight: 700;
		margin-bottom: 1rem;
		text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		background: linear-gradient(135deg, #ffffff 0%, #6dd5ed 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		background-clip: text;
	}

	.page-header p {
		font-size: 1.2rem;
		opacity: 0.9;
		max-width: 600px;
		margin: 0 auto;
	}

	/* Testimonials Section */
	.testimonials-section {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
		padding: 80px 0;
		min-height: 100vh;
	}

	.testimonial-header {
		text-align: center;
		margin-bottom: 60px;
	}

	.testimonial-header h2 {
		font-size: 2.8rem;
		font-weight: 700;
		color: #ffffff;
		margin-bottom: 20px;
	}

	.testimonial-header p {
		font-size: 1.1rem;
		color: #ecf0f1;
		max-width: 600px;
		margin: 0 auto;
		line-height: 1.6;
	}

	/* Testimonial Cards */
	.testimonial-card {
		background: linear-gradient(135deg, #2c3e50, #34495e);
		border-radius: 15px;
		padding: 40px 30px;
		margin-bottom: 30px;
		box-shadow: 0 10px 30px rgba(0,0,0,0.3);
		transition: all 0.3s ease;
		border: 1px solid #2c3e50;
		position: relative;
		overflow: hidden;
	}

	.testimonial-card::before {
		content: '"';
		position: absolute;
		top: 20px;
		left: 30px;
		font-size: 4rem;
		color: rgba(33, 147, 176, 0.3);
		font-family: serif;
		line-height: 1;
	}

	.testimonial-card:hover {
		transform: translateY(-10px);
		box-shadow: 0 20px 40px rgba(0,0,0,0.4);
	}

	.testimonial-content {
		position: relative;
		z-index: 2;
	}

	.testimonial-text {
		font-size: 1.1rem;
		line-height: 1.8;
		color: #ecf0f1;
		margin-bottom: 25px;
		font-style: italic;
	}

	.testimonial-author {
		display: flex;
		align-items: center;
		gap: 15px;
	}

	.author-avatar {
		width: 60px;
		height: 60px;
		background: linear-gradient(135deg, #2193b0, #6dd5ed);
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		color: white;
		font-size: 1.5rem;
		font-weight: 700;
	}

	.author-info h4 {
		font-size: 1.2rem;
		font-weight: 700;
		color: #ffffff;
		margin-bottom: 5px;
	}

	.author-info p {
		color: #6dd5ed;
		font-size: 0.9rem;
		margin: 0;
		text-transform: uppercase;
		letter-spacing: 1px;
	}

	/* Testimonial Stats */
	.testimonial-stats {
		background: linear-gradient(135deg, #2c3e50, #34495e);
		padding: 60px 0;
		margin-top: 80px;
	}

	.stat-item {
		text-align: center;
		margin-bottom: 30px;
	}

	.stat-number {
		display: block;
		font-size: 3rem;
		font-weight: 700;
		color: #6dd5ed;
		margin-bottom: 10px;
		text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
	}

	.stat-label {
		font-size: 1.1rem;
		color: #ecf0f1;
		text-transform: uppercase;
		letter-spacing: 1px;
	}

	/* Call to Action Section */
	.cta-section {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
		padding: 80px 0;
		text-align: center;
	}

	.cta-content h2 {
		font-size: 2.5rem;
		font-weight: 700;
		color: #ffffff;
		margin-bottom: 20px;
	}

	.cta-content p {
		font-size: 1.1rem;
		color: #ecf0f1;
		margin-bottom: 30px;
		max-width: 600px;
		margin-left: auto;
		margin-right: auto;
	}

	.cta-buttons {
		display: flex;
		justify-content: center;
		gap: 20px;
		flex-wrap: wrap;
	}

	.cta-btn {
		padding: 15px 30px;
		border-radius: 50px;
		text-decoration: none;
		font-weight: 600;
		transition: all 0.3s ease;
		display: inline-flex;
		align-items: center;
		gap: 10px;
	}

	.cta-btn-primary {
		background: linear-gradient(135deg, #2193b0, #6dd5ed);
		color: white;
		box-shadow: 0 8px 25px rgba(33, 147, 176, 0.3);
	}

	.cta-btn-primary:hover {
		transform: translateY(-3px);
		box-shadow: 0 12px 35px rgba(33, 147, 176, 0.4);
		color: white;
	}

	.cta-btn-secondary {
		background: transparent;
		color: #2193b0;
		border: 2px solid #2193b0;
	}

	.cta-btn-secondary:hover {
		background: #2193b0;
		color: white;
		transform: translateY(-3px);
	}

	/* Override any remaining white backgrounds */
	.container,
	.row,
	.col-lg-4,
	.col-md-6,
	.col-12 {
		background: transparent !important;
	}

	/* Comprehensive white background removal */
	body {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%) !important;
		color: #ffffff !important;
	}

	/* Remove all white backgrounds from Bootstrap and other elements */
	.bg-white,
	.bg-light,
	.bg-light-gray,
	.white-bg,
	.light-bg {
		background: transparent !important;
	}

	/* Override any card backgrounds */
	.card,
	.testimonial-card,
	.page-header,
	.testimonials-hero,
	.testimonials-filters,
	.testimonials-section {
		background: transparent !important;
	}

	/* Ensure all sections have dark backgrounds */
	.page-header {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%) !important;
	}

	.testimonials-hero {
		background: linear-gradient(135deg, #2c3e50, #34495e) !important;
	}

	.testimonials-filters {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%) !important;
	}

	.testimonials-section {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%) !important;
	}

	/* Override any remaining white text */
	.text-dark,
	.text-black {
		color: #ffffff !important;
	}

	/* Ensure breadcrumb is visible on dark background */
	.breadcrumb {
		background: transparent !important;
	}

	.breadcrumb-item,
	.breadcrumb-item a {
		color: #6dd5ed !important;
	}

	.breadcrumb-item.active {
		color: #ffffff !important;
	}

	/* Override any form elements that might have white backgrounds */
	input,
	select,
	textarea,
	.form-control {
		background: rgba(255, 255, 255, 0.1) !important;
		border: 1px solid rgba(255, 255, 255, 0.2) !important;
		color: #ffffff !important;
	}

	input::placeholder,
	textarea::placeholder {
		color: rgba(255, 255, 255, 0.7) !important;
	}

	/* Additional comprehensive styling to ensure no white backgrounds */
	* {
		box-sizing: border-box;
	}

	/* Override any Bootstrap white backgrounds */
	.bg-white,
	.bg-light,
	.bg-light-gray,
	.bg-light-gray-100,
	.bg-light-gray-200,
	.bg-light-gray-300,
	.bg-light-gray-400,
	.bg-light-gray-500 {
		background: transparent !important;
	}

	/* Ensure all text is visible on dark background */
	h1, h2, h3, h4, h5, h6 {
		color: #ffffff !important;
	}

	p, span, div {
		color: #ecf0f1 !important;
	}

	/* Override any remaining white elements */
	.white,
	.light,
	.light-gray {
		background: transparent !important;
		color: #ffffff !important;
	}

	/* Ensure all sections have proper dark styling */
	section {
		background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%) !important;
	}

	/* Override any remaining Bootstrap classes */
	.container-fluid,
	.container {
		background: transparent !important;
	}

	/* Ensure testimonials grid has dark background */
	#testimonials-grid {
		background: transparent !important;
	}

	/* Override any filter buttons that might have white backgrounds */
	.filter-btn {
		background: linear-gradient(135deg, #2193b0, #6dd5ed) !important;
		color: #ffffff !important;
		border: none !important;
	}

	.filter-btn.active {
		background: linear-gradient(135deg, #2c3e50, #34495e) !important;
		color: #6dd5ed !important;
	}

	/* Navbar styling for testimonials page */
	.navbar {
		background: rgba(18, 18, 18, 0.95) !important;
		backdrop-filter: blur(10px);
		border-bottom: 1px solid rgba(255, 255, 255, 0.1);
	}

	.navbar-brand,
	.navbar-nav .nav-link {
		color: #ffffff !important;
	}

	.navbar-nav .nav-link:hover {
		color: #6dd5ed !important;
	}

	/* Responsive Design */
	@media (max-width: 768px) {
		.page-header h1 {
			font-size: 2.5rem;
		}

		.testimonial-header h2 {
			font-size: 2rem;
		}

		.cta-content h2 {
			font-size: 2rem;
		}

		.cta-buttons {
			flex-direction: column;
			align-items: center;
		}

		.stat-number {
			font-size: 2.5rem;
		}
	}

	@media (max-width: 576px) {
		.page-header h1 {
			font-size: 2rem;
		}

		.page-header p {
			font-size: 1rem;
		}

		.testimonial-card {
			padding: 30px 20px;
		}

		.testimonial-text {
			font-size: 1rem;
		}
	}

	/* Animation Classes */
	.fade-in {
		animation: fadeIn 0.6s ease-in;
	}

	@keyframes fadeIn {
		from {
			opacity: 0;
			transform: translateY(20px);
		}
		to {
			opacity: 1;
			transform: translateY(0);
		}
	}

	.slide-up {
		animation: slideUp 0.6s ease-out;
	}

	@keyframes slideUp {
		from {
			opacity: 0;
			transform: translateY(30px);
		}
		to {
			opacity: 1;
			transform: translateY(0);
		}
	}
	</style>
</body>
</html> 