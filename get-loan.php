<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Loan - Rev. Fr. Calistus Osiaga Foundation</title>
    
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
    <section class="loan-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="hero-title">Financial Support Program</h1>
                        <p class="hero-subtitle">Access interest-free loans to support your education, business, or personal development. We believe in empowering individuals through financial assistance.</p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">0%</span>
                                <span class="stat-label">Interest Rate</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Loans Granted</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Success Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Loan Information Section -->
    <section class="loan-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Interest-Free Loans</h3>
                        <p>We provide interest-free loans to help you achieve your goals without the burden of high interest rates.</p>
                        <ul class="benefits-list">
                            <li><i class="fas fa-check"></i> No interest charges</li>
                            <li><i class="fas fa-check"></i> Flexible repayment terms</li>
                            <li><i class="fas fa-check"></i> Quick approval process</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Who Can Apply</h3>
                        <p>Our loan program is designed to support individuals who demonstrate genuine need and commitment to their goals.</p>
                        <ul class="benefits-list">
                            <li><i class="fas fa-check"></i> Students pursuing education</li>
                            <li><i class="fas fa-check"></i> Small business owners</li>
                            <li><i class="fas fa-check"></i> Community development projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Loan Application Form Section -->
    <section class="loan-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="loan-form-wrapper">
                        <div class="form-header">
                            <h2>Loan Application Form</h2>
                            <p>Please fill out the form below with accurate information. We'll review your application and get back to you within 48 hours.</p>
                        </div>
                        
                        <form action="loan_submit.php" method="POST" class="loan-form" id="loanForm">
                            <!-- Personal Information -->
                            <div class="form-section">
                                <h3 class="section-title">Personal Information</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName">First Name *</label>
                                            <input type="text" id="firstName" name="firstName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName">Last Name *</label>
                                            <input type="text" id="lastName" name="lastName" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address *</label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number *</label>
                                            <input type="tel" id="phone" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address *</label>
                                    <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
                                </div>
                            </div>

                            <!-- Loan Details -->
                            <div class="form-section">
                                <h3 class="section-title">Loan Details</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="loanType">Loan Type *</label>
                                            <select id="loanType" name="loanType" class="form-control" required>
                                                <option value="">Select loan type</option>
                                                <option value="education">Education Loan</option>
                                                <option value="business">Business Loan</option>
                                                <option value="personal">Personal Development</option>
                                                <option value="community">Community Project</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="loanAmount">Loan Amount (₦) *</label>
                                            <input type="number" id="loanAmount" name="loanAmount" class="form-control" min="10000" max="1000000" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="purpose">Purpose of Loan *</label>
                                    <textarea id="purpose" name="purpose" class="form-control" rows="4" placeholder="Please describe in detail how you plan to use the loan..." required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="repaymentPlan">Repayment Plan *</label>
                                    <textarea id="repaymentPlan" name="repaymentPlan" class="form-control" rows="3" placeholder="How do you plan to repay the loan?" required></textarea>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="form-section">
                                <h3 class="section-title">Additional Information</h3>
                                <div class="form-group">
                                    <label for="income">Monthly Income (₦)</label>
                                    <input type="number" id="income" name="income" class="form-control" min="0">
                                </div>
                                <div class="form-group">
                                    <label for="employment">Employment Status</label>
                                    <select id="employment" name="employment" class="form-control">
                                        <option value="">Select status</option>
                                        <option value="employed">Employed</option>
                                        <option value="self-employed">Self-Employed</option>
                                        <option value="student">Student</option>
                                        <option value="unemployed">Unemployed</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="references">References (Name, Phone, Relationship)</label>
                                    <textarea id="references" name="references" class="form-control" rows="3" placeholder="Please provide 2-3 references..."></textarea>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="form-section">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" id="terms" name="terms" class="form-check-input" required>
                                        <label for="terms" class="form-check-label">
                                            I agree to the terms and conditions of the loan program
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" id="privacy" name="privacy" class="form-check-input" required>
                                        <label for="privacy" class="form-check-label">
                                            I consent to the processing of my personal information
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-submit">
                                <button type="submit" class="submit-btn">
                                    <span class="btn-text">Submit Application</span>
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

    <!-- Loan Process Section -->
    <section class="loan-process-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>How It Works</h2>
                <p>Our simple and transparent loan application process</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h4>1. Apply</h4>
                        <p>Fill out the application form with your details and loan requirements</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>2. Review</h4>
                        <p>Our team reviews your application within 48 hours</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>3. Approve</h4>
                        <p>If approved, we'll contact you to discuss terms and conditions</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h4>4. Receive</h4>
                        <p>Funds are transferred to your account within 24 hours</p>
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

    <!-- Loan Page Styles -->
    <style>
    /* Hero Section */
    .loan-hero {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%);
        position: relative;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-top: 88px;
    }

    .loan-hero::before {
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

    /* Loan Info Section */
    .loan-info-section {
        background: #f8f9fa;
        padding: 80px 0;
    }

    .info-card {
        background: white;
        padding: 40px 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid #e9ecef;
        margin-bottom: 30px;
    }

    .info-card:hover {
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

    .info-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .info-card p {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .benefits-list {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    .benefits-list li {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
        color: #333;
    }

    .benefits-list li i {
        color: #2193b0;
        font-size: 0.9rem;
    }

    /* Loan Form Section */
    .loan-form-section {
        background: white;
        padding: 80px 0;
    }

    .loan-form-wrapper {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .form-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .form-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .form-header p {
        color: #666;
        font-size: 1.1rem;
    }

    .form-section {
        margin-bottom: 40px;
        padding: 30px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 25px;
        padding-bottom: 10px;
        border-bottom: 2px solid #2193b0;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        display: block;
    }

    .form-control {
        border: 2px solid #e9ecef;
        border-radius: 10px;
        padding: 15px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #2193b0;
        box-shadow: 0 0 0 0.2rem rgba(33, 147, 176, 0.25);
    }

    .form-check-label {
        color: #666;
        font-size: 0.9rem;
    }

    .submit-btn {
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        border: none;
        color: white;
        padding: 15px 30px;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 8px 25px rgba(33, 147, 176, 0.3);
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(33, 147, 176, 0.4);
    }

    /* Loan Process Section */
    .loan-process-section {
        background: #f8f9fa;
        padding: 80px 0;
    }

    .section-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .section-header p {
        color: #666;
        font-size: 1.1rem;
        margin-bottom: 50px;
    }

    .process-card {
        background: white;
        padding: 30px 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
        margin-bottom: 30px;
    }

    .process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .process-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #2193b0, #6dd5ed);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: white;
        font-size: 1.5rem;
    }

    .process-card h4 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .process-card p {
        color: #666;
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

        .loan-form-wrapper {
            padding: 30px 20px;
        }

        .form-header h2 {
            font-size: 2rem;
        }

        .form-section {
            padding: 20px;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        .info-card {
            padding: 30px 20px;
        }

        .form-header h2 {
            font-size: 1.8rem;
        }
    }
    </style>

    <!-- Loan Form JavaScript -->
    <script>
    $(document).ready(function() {
        // Form validation and submission
        $('#loanForm').on('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            var formData = $(this).serialize();
            
            // Show loading state
            $('.submit-btn .btn-text').text('Submitting...');
            $('.submit-btn').prop('disabled', true);
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function() {
                // Show success message
                alert('Thank you for your loan application! We will review it and get back to you within 48 hours.');
                
                // Reset form
                $('#loanForm')[0].reset();
                
                // Reset button
                $('.submit-btn .btn-text').text('Submit Application');
                $('.submit-btn').prop('disabled', false);
            }, 2000);
        });

        // Form field validation
        $('.form-control').on('blur', function() {
            var field = $(this);
            var value = field.val().trim();
            
            if (field.attr('required') && !value) {
                field.addClass('is-invalid');
            } else {
                field.removeClass('is-invalid');
            }
        });

        // Email validation
        $('#email').on('blur', function() {
            var email = $(this).val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                $(this).addClass('is-invalid');
            }
        });

        // Console log for debugging
        console.log('Loan page loaded successfully');
    });
    </script>
</body>
</html>