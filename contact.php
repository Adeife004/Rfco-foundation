<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rev. Fr. Calistus Osiaga Foundation</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo/logo_f.png" type="image/x-icon">
    
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
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
</head>
<body>
    <!-- Header Section -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="hero-title">Get In Touch</h1>
                        <p class="hero-subtitle">Ready to make a difference? We're here to help you get involved, ask questions, or learn more about our mission to transform lives and empower communities.</p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Support</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">2hrs</span>
                                <span class="stat-label">Response Time</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">100%</span>
                                <span class="stat-label">Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Cards Section -->
    <section class="contact-cards-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="card-content">
                            <h3>Our Location</h3>
                            <p>Nigeria, Africa</p>
                            <span class="card-subtitle">Main Office</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="card-content">
                            <h3>Phone Number</h3>
                            <p><a href="tel:+2348160226089">+234 816 022 6089</a></p>
                            <span class="card-subtitle">Call us anytime</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="card-content">
                            <h3>Email Address</h3>
                            <p><a href="mailto:helps@rfcofoundation.org">helps@rfcofoundation.org</a></p>
                            <span class="card-subtitle">Send us a message</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-12">
                    <div class="contact-form-wrapper">
                        <div class="form-header">
                            <h2>Send Us a Message</h2>
                            <p>Fill out the form below and we'll get back to you as soon as possible. We typically respond within 2 hours during business hours.</p>
                        </div>
                        <form action="contact_submit.php" method="POST" class="contact-form" id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name *</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                                        <div class="form-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                        <div class="form-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number">
                                        <div class="form-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject *</label>
                                        <select id="subject" name="subject" class="form-control" required>
                                            <option value="">Select a subject</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                            <option value="Donation">Donation</option>
                                            <option value="Volunteer">Volunteer</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Support">Support Request</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="form-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" class="form-control" rows="6" placeholder="Tell us how we can help you..." required></textarea>
                                <div class="form-feedback"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" id="newsletter" name="newsletter" class="form-check-input">
                                    <label for="newsletter" class="form-check-label">
                                        Subscribe to our newsletter for updates and news
                                    </label>
                                </div>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="submit-btn">
                                    <span class="btn-text">Send Message</span>
                                    <span class="btn-icon">
                                        <i class="fas fa-paper-plane"></i>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-info-wrapper">
                        <div class="info-header">
                            <h2>Contact Information</h2>
                            <p>Get in touch with us through any of these channels.</p>
                        </div>
                        
                        <div class="info-items">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="info-content">
                                    <h4>WhatsApp</h4>
                                    <p><a href="https://wa.me/2348160226089" target="_blank">+234 816 022 6089</a></p>
                                    <span>Quick response guaranteed</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Phone</h4>
                                    <p><a href="tel:+2348160226089">+234 816 022 6089</a></p>
                                    <span>Available 24/7</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Email</h4>
                                    <p><a href="mailto:helps@rfcofoundation.org">helps@rfcofoundation.org</a></p>
                                    <span>We'll respond within 2 hours</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Business Hours</h4>
                                    <p>Monday - Friday</p>
                                    <span>8:00 AM - 6:00 PM WAT</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-person">
                            <div class="person-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="person-info">
                                <h4>Galapopo Stanley</h4>
                                <p>Project Manager</p>
                                <span>Direct Contact</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-info">
                        <h2>Visit Our Office</h2>
                        <p>We welcome visitors to our main office in Nigeria. Please contact us in advance to schedule a meeting.</p>
                        <div class="location-details">
                            <div class="detail-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h5>Main Office</h5>
                                    <p>Nigeria, Africa</p>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <h5>Office Hours</h5>
                                    <p>Monday - Friday: 8:00 AM - 6:00 PM WAT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-placeholder">
                        <div class="map-content">
                            <i class="fas fa-map-marked-alt"></i>
                            <h3>Interactive Map</h3>
                            <p>Map integration coming soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Frequently Asked Questions</h2>
                <p>Find quick answers to common questions about contacting us</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-item">
                        <h4>How quickly will you respond to my message?</h4>
                        <p>We typically respond to all inquiries within 2 hours during business hours. For urgent matters, please call us directly.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-item">
                        <h4>Can I schedule a meeting with your team?</h4>
                        <p>Absolutely! We welcome meetings with potential partners, donors, and volunteers. Please contact us to schedule a convenient time.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-item">
                        <h4>What information should I include in my message?</h4>
                        <p>Please include your name, contact information, and a brief description of how you'd like to get involved or what you need help with.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-item">
                        <h4>Do you offer virtual meetings?</h4>
                        <p>Yes, we offer video calls and virtual meetings for those who cannot visit our office in person.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/function.js"></script>

    <!-- Contact Page Styles -->
    <style>
    /* Comprehensive dark theme for contact page */
    body {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        color: #ffffff;
    }

    /* Override any remaining white backgrounds */
    .bg-white,
    .bg-light,
    .bg-light-gray,
    .white-bg,
    .light-bg {
        background: transparent !important;
    }

    /* Ensure all sections have dark backgrounds */
    section {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%) !important;
    }

    /* Override Bootstrap containers */
    .container,
    .container-fluid {
        background: transparent !important;
    }
    /* Hero Section */
    .contact-hero {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%);
        position: relative;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-top: 88px;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('assets/img/banner/add32.jpg') center/cover;
        opacity: 0.3;
        z-index: 1;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 2;
    }

    .hero-content {
        position: relative;
        z-index: 3;
        text-align: center;
        color: #ffffff;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        background: linear-gradient(135deg, #ffffff 0%, #6dd5ed 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        opacity: 0.9;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-stats {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin-top: 2rem;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        display: block;
        font-size: 2.5rem;
        font-weight: 700;
        color: #6dd5ed;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .stat-label {
        font-size: 0.9rem;
        opacity: 0.8;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Contact Cards Section */
    .contact-cards-section {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        padding: 80px 0;
    }

    .contact-card {
        background: linear-gradient(135deg, #2c3e50, #34495e);
        padding: 40px 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid #2c3e50;
        margin-bottom: 30px;
    }

    .contact-card:hover {
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

    .card-content h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 10px;
    }

    .card-content p {
        color: #ecf0f1;
        margin-bottom: 10px;
    }

    .card-content p a {
        color: #6dd5ed;
        text-decoration: none;
        font-weight: 600;
    }

    .card-content p a:hover {
        color: #ffffff;
    }

    .card-subtitle {
        color: #bdc3c7;
        font-size: 0.9rem;
        font-style: italic;
    }

    /* Contact Form Section */
    .contact-form-section {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        padding: 80px 0;
    }

    /* Contact Info Section */
    .contact-info-section {
        background: linear-gradient(135deg, #1a1a1a 0%, #2c3e50 100%);
        padding: 80px 0;
    }

    .contact-form-wrapper {
        background: linear-gradient(135deg, #2c3e50, #34495e);
        padding: 50px 40px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .contact-form-wrapper::before {
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

    .contact-form-wrapper form {
        position: relative;
        z-index: 2;
    }

    .form-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }

    .form-header::before {
        content: '';
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        border-radius: 2px;
    }

    .form-header h2 {
        font-size: 2.8rem;
        font-weight: 700;
        background: linear-gradient(135deg, #ffffff 0%, #6dd5ed 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .form-header p {
        color: #ecf0f1;
        font-size: 1.2rem;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
    }

    .form-group {
        margin-bottom: 30px;
        position: relative;
    }

    .form-group label {
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 12px;
        display: block;
        font-size: 1.1rem;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        position: relative;
    }

    .form-group label::after {
        content: ' *';
        color: #e74c3c;
        font-weight: 700;
    }

    .form-group label:not([for*="required"])::after {
        content: '';
    }

    .form-control {
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        padding: 18px 20px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
        color: #ffffff;
        backdrop-filter: blur(10px);
        position: relative;
    }

    .form-control:focus {
        border-color: #2193b0;
        box-shadow: 0 0 0 0.3rem rgba(33, 147, 176, 0.25);
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0.1) 100%);
        transform: translateY(-2px);
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.6);
        font-style: italic;
    }

    .form-control:hover {
        border-color: rgba(255, 255, 255, 0.3);
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.12) 0%, rgba(255, 255, 255, 0.07) 100%);
    }

    /* Fix dropdown white background */
    select.form-control,
    select {
        background: rgba(255, 255, 255, 0.1) !important;
        color: #ffffff !important;
        border: 2px solid rgba(255, 255, 255, 0.2) !important;
    }

    select.form-control option,
    select option {
        background: #2c3e50 !important;
        color: #ffffff !important;
        padding: 10px;
    }

    select.form-control:focus,
    select:focus {
        background: rgba(255, 255, 255, 0.15) !important;
        border-color: #2193b0 !important;
    }

    .form-check {
        margin: 25px 0;
        padding: 20px;
        background: linear-gradient(135deg, rgba(33, 147, 176, 0.1) 0%, rgba(109, 213, 237, 0.05) 100%);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .form-check:hover {
        background: linear-gradient(135deg, rgba(33, 147, 176, 0.15) 0%, rgba(109, 213, 237, 0.1) 100%);
        transform: translateY(-2px);
    }

    .form-check-input {
        width: 20px;
        height: 20px;
        margin-right: 12px;
        accent-color: #2193b0;
        cursor: pointer;
    }

    .form-check-label {
        color: #ecf0f1;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        line-height: 1.5;
    }

    .form-submit {
        text-align: center;
        margin-top: 40px;
    }

    .submit-btn {
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        border: none;
        color: white;
        padding: 18px 40px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 10px 30px rgba(33, 147, 176, 0.4);
        position: relative;
        overflow: hidden;
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .submit-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(33, 147, 176, 0.5);
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    .btn-text {
        position: relative;
        z-index: 2;
    }

    .btn-icon {
        position: relative;
        z-index: 2;
        font-size: 1.2rem;
    }

    /* Contact Info Section - Professional Restyle */
    .contact-info-wrapper {
        background: linear-gradient(135deg, #1a1a1a 0%, #2c3e50 50%, #34495e 100%);
        padding: 50px 40px;
        border-radius: 20px;
        color: white;
        height: 100%;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .contact-info-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(33, 147, 176, 0.1) 0%, rgba(109, 213, 237, 0.05) 100%);
        border-radius: 20px;
        z-index: 1;
    }

    .info-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 2;
    }

    .info-header h2 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #ffffff 0%, #6dd5ed 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .info-header p {
        opacity: 0.9;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 25px;
        margin-bottom: 35px;
        padding: 25px;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
        backdrop-filter: blur(10px);
    }

    .info-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        background: linear-gradient(135deg, rgba(33, 147, 176, 0.2) 0%, rgba(109, 213, 237, 0.1) 100%);
    }

    .info-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        flex-shrink: 0;
        box-shadow: 0 8px 20px rgba(33, 147, 176, 0.3);
        transition: all 0.3s ease;
    }

    .info-item:hover .info-icon {
        transform: scale(1.1);
        box-shadow: 0 12px 25px rgba(33, 147, 176, 0.4);
    }

    .info-content {
        flex: 1;
    }

    .info-content h4 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 8px;
        color: #ffffff;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }

    .info-content p {
        margin-bottom: 8px;
        font-size: 1rem;
        line-height: 1.4;
    }

    .info-content p a {
        color: #6dd5ed;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
    }

    .info-content p a::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        transition: width 0.3s ease;
    }

    .info-content p a:hover {
        color: #ffffff;
    }

    .info-content p a:hover::after {
        width: 100%;
    }

    .info-content span {
        font-size: 0.85rem;
        opacity: 0.8;
        font-style: italic;
        color: #bdc3c7;
    }

    .contact-person {
        text-align: center;
        margin-top: 50px;
        padding: 35px;
        background: linear-gradient(135deg, rgba(33, 147, 176, 0.15) 0%, rgba(109, 213, 237, 0.1) 100%);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
        z-index: 2;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .contact-person:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        background: linear-gradient(135deg, rgba(33, 147, 176, 0.25) 0%, rgba(109, 213, 237, 0.15) 100%);
    }

    .person-avatar {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 2.2rem;
        color: white;
        box-shadow: 0 10px 25px rgba(33, 147, 176, 0.4);
        transition: all 0.3s ease;
    }

    .contact-person:hover .person-avatar {
        transform: scale(1.1);
        box-shadow: 0 15px 35px rgba(33, 147, 176, 0.5);
    }

    .person-info h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 8px;
        color: #ffffff;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }

    .person-info p {
        margin-bottom: 8px;
        opacity: 0.9;
        font-size: 1.1rem;
        color: #6dd5ed;
        font-weight: 600;
    }

    .person-info span {
        font-size: 0.85rem;
        opacity: 0.8;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #bdc3c7;
        font-weight: 500;
    }

    /* Map Section */
    .map-section {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        padding: 80px 0;
    }

    .map-info h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .map-info p {
        color: #ecf0f1;
        font-size: 1.1rem;
        margin-bottom: 30px;
    }

    .location-details {
        margin-top: 30px;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .detail-item i {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .detail-item h5 {
        font-size: 1.1rem;
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 5px;
    }

    .detail-item p {
        color: #ecf0f1;
        margin: 0;
    }

    .map-placeholder {
        background: linear-gradient(135deg, #2c3e50, #34495e);
        border-radius: 15px;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .map-content i {
        font-size: 4rem;
        margin-bottom: 20px;
        opacity: 0.7;
    }

    .map-content h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .map-content p {
        opacity: 0.8;
    }

    /* FAQ Section */
    .faq-section {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        padding: 80px 0;
    }

    .section-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 15px;
    }

    .section-header p {
        color: #ecf0f1;
        font-size: 1.1rem;
        margin-bottom: 50px;
    }

    .faq-item {
        background: linear-gradient(135deg, #2c3e50, #34495e);
        padding: 30px;
        border-radius: 15px;
        margin-bottom: 30px;
        border-left: 4px solid #2193b0;
    }

    .faq-item h4 {
        font-size: 1.2rem;
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 15px;
    }

    .faq-item p {
        color: #ecf0f1;
        line-height: 1.6;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-stats {
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-form-wrapper,
        .contact-info-wrapper {
            padding: 30px 20px;
        }

        .form-header h2 {
            font-size: 2rem;
        }

        .info-item {
            flex-direction: column;
            text-align: center;
        }

        .detail-item {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        .contact-card {
            padding: 30px 20px;
        }

        .form-header h2 {
            font-size: 1.8rem;
        }
    }
    </style>

    <!-- Contact Form JavaScript -->
    <script>
    $(document).ready(function() {
        // Form validation and submission
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            var formData = $(this).serialize();
            
            // Show loading state
            $('.submit-btn .btn-text').text('Sending...');
            $('.submit-btn').prop('disabled', true);
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function() {
                // Show success message
                alert('Thank you for your message! We will get back to you within 2 hours.');
                
                // Reset form
                $('#contactForm')[0].reset();
                
                // Reset button
                $('.submit-btn .btn-text').text('Send Message');
                $('.submit-btn').prop('disabled', false);
            }, 2000);
        });

        // Form field validation
        $('.form-control').on('blur', function() {
            var field = $(this);
            var value = field.val().trim();
            
            if (field.attr('required') && !value) {
                field.addClass('is-invalid');
                field.siblings('.form-feedback').text('This field is required.');
            } else {
                field.removeClass('is-invalid');
                field.siblings('.form-feedback').text('');
            }
        });

        // Email validation
        $('#email').on('blur', function() {
            var email = $(this).val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                $(this).addClass('is-invalid');
                $(this).siblings('.form-feedback').text('Please enter a valid email address.');
            }
        });

        // Console log for debugging
        console.log('Contact page loaded successfully');
    });
    </script>
</body>
</html>
