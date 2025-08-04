<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Rev. Fr. Calistus Osiaga Foundation</title>
    
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
		<link rel="stylesheet" type="text/css" href="assets/css/remove-green.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/gallery-styles.css">
</head>
<body>
    <!-- Header Section -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="gallery-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="hero-title">Our Impact Gallery</h1>
                        <p class="hero-subtitle">Visual stories of transformation, community support, and the power of collective action</p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Images</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Events</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">1000+</span>
                                <span class="stat-label">Lives Touched</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <!-- Gallery Filters -->
            <div class="gallery-filters">
                <div class="filter-container">
                    <button class="filter-btn active" data-filter="all">
                        <i class="fa fa-th"></i>
                        <span>All Projects</span>
                    </button>
                    <button class="filter-btn" data-filter="education">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Education</span>
                    </button>
                    <button class="filter-btn" data-filter="healthcare">
                        <i class="fa fa-heartbeat"></i>
                        <span>Healthcare</span>
                    </button>
                    <button class="filter-btn" data-filter="community">
                        <i class="fa fa-users"></i>
                        <span>Community</span>
                    </button>
                    <button class="filter-btn" data-filter="events">
                        <i class="fa fa-calendar"></i>
                        <span>Events</span>
                    </button>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-container">
                <div class="gallery-grid" id="gallery-masonry">
                    <!-- Education Category -->
                    <div class="gallery-item" data-category="education">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/01.jpg" alt="Education Support" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Education Support</h4>
                                    <p>Providing school supplies and educational resources</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/01.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Healthcare Category -->
                    <div class="gallery-item" data-category="healthcare">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/02.jpg" alt="Healthcare Support" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Healthcare Support</h4>
                                    <p>Medical outreach and health awareness programs</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/02.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Community Category -->
                    <div class="gallery-item" data-category="community">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/03.jpg" alt="Community Development" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Community Development</h4>
                                    <p>Building stronger communities through local initiatives</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/03.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Category -->
                    <div class="gallery-item" data-category="events">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/04.jpg" alt="Foundation Events" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Foundation Events</h4>
                                    <p>Annual gatherings and special celebrations</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/04.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Education Category -->
                    <div class="gallery-item" data-category="education">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/05.jpg" alt="Student Empowerment" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Student Empowerment</h4>
                                    <p>Empowering students through mentorship programs</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/05.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Healthcare Category -->
                    <div class="gallery-item" data-category="healthcare">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/06.jpg" alt="Medical Outreach" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Medical Outreach</h4>
                                    <p>Bringing healthcare services to remote communities</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/06.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Community Category -->
                    <div class="gallery-item" data-category="community">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/07.jpg" alt="Local Initiatives" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Local Initiatives</h4>
                                    <p>Supporting local businesses and community projects</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/07.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Category -->
                    <div class="gallery-item" data-category="events">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/08.jpg" alt="Fundraising Events" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Fundraising Events</h4>
                                    <p>Successful fundraising campaigns and donor appreciation</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/08.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Section -->
            <div class="load-more-section">
                <button class="load-more-btn" id="load-more">
                    <span class="btn-text">Load More Images</span>
                    <span class="btn-icon">
                        <i class="fa fa-plus"></i>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newslater-section">
        <div class="container">
            <div class="section-wrapper add-gutters d-flex flex-wrap align-items-center justify-content-between">
                <div class="news-item">
                    <h4>Subscribe to Our Newsletter</h4>
                </div>
                
                <div class="news-item">
                    <form action="subscribe_submit.php" method="POST" class="d-flex">
                        <input type="email" name="email" placeholder="Enter your e-mail. . . . . . . . . . ." required class="form-control">
                        <div class="news-button">
                            <button type="submit" class="custom-btn">Subscribe <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/function.js"></script>
    <script src="assets/js/gallery.js"></script>

    <!-- Gallery Styles -->
    <style>
    /* Gallery Hero Section */
    .gallery-hero {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%);
        position: relative;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-top: 88px;
    }

    .gallery-hero::before {
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

    /* Gallery Section */
    .gallery-section {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        padding: 80px 0;
        min-height: 100vh;
    }

    /* Gallery Filters */
    .gallery-filters {
        margin-bottom: 3rem;
    }

    .filter-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .filter-btn {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        color: #ffffff;
        padding: 12px 24px;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        backdrop-filter: blur(10px);
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
        border-color: #6dd5ed;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(33, 147, 176, 0.3);
    }

    .filter-btn i {
        font-size: 0.9rem;
    }

    /* Gallery Grid */
    .gallery-container {
        margin-bottom: 3rem;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
        margin: 0 auto;
        max-width: 1200px;
        justify-content: center;
        align-items: center;
    }

    .gallery-item {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
        background: #1a1a1a;
    }

    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    }

    .gallery-item-inner {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
    }

    .gallery-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        object-position: center;
        transition: transform 0.3s ease;
        display: block;
        margin: 0 auto;
    }

    .gallery-item:hover .gallery-image {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(64, 64, 64, 0.9) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-content {
        text-align: center;
        color: #ffffff;
        padding: 2rem;
    }

    .gallery-content h4 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .gallery-content p {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-bottom: 1.5rem;
    }

    .gallery-actions {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .gallery-actions a {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .gallery-actions a:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: #ffffff;
        transform: scale(1.1);
    }

    /* Load More Section */
    .load-more-section {
        text-align: center;
        margin-top: 3rem;
    }

    .load-more-btn {
        background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
        border: none;
        color: #ffffff;
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

    .load-more-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(33, 147, 176, 0.4);
    }

    .btn-icon {
        transition: transform 0.3s ease;
    }

    /* Additional Centering Styles */
    .gallery-section {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .gallery-item {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gallery-item-inner {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .load-more-btn:hover .btn-icon {
        transform: rotate(45deg);
    }

    /* Newsletter Section */
    .newslater-section {
        background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        padding: 60px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .newslater-section h4 {
        color: #ffffff;
        font-weight: 600;
        margin-bottom: 0;
    }

    .newslater-section input {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #ffffff;
        border-radius: 25px;
        padding: 12px 20px;
    }

    .newslater-section input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .newslater-section .custom-btn {
        background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
        border: none;
        border-radius: 25px;
        padding: 12px 25px;
        color: #ffffff;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .newslater-section .custom-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(33, 147, 176, 0.3);
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

        .filter-container {
            flex-direction: column;
            align-items: center;
        }

        .filter-btn {
            width: 200px;
            justify-content: center;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
        }

        .gallery-image {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
        }

        .gallery-content {
            padding: 1rem;
        }

        .gallery-content h4 {
            font-size: 1.1rem;
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

    <!-- Gallery JavaScript -->
    <script>
    $(document).ready(function() {
        // Initialize Isotope
        var $grid = $('#gallery-masonry').isotope({
            itemSelector: '.gallery-item',
            layoutMode: 'fitRows',
            transitionDuration: '0.4s'
        });

        // Filter functionality
        $('.filter-btn').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            
            // Update active button
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            // Filter items
            if (filterValue === 'all') {
                $grid.isotope({ filter: '*' });
            } else {
                $grid.isotope({ filter: '[data-category="' + filterValue + '"]' });
            }
        });

        // Initialize Lightcase for image lightbox
        $('.gallery-lightbox').lightcase({
            swipe: true,
            showTitle: true,
            showCaption: true
        });

        // Load more functionality
        $('#load-more').on('click', function() {
            var $btn = $(this);
            var $btnText = $btn.find('.btn-text');
            var originalText = $btnText.text();
            
            // Show loading state
            $btnText.text('Loading...');
            $btn.prop('disabled', true);
            
            // Simulate loading more images (replace with actual AJAX call)
            setTimeout(function() {
                // Add more gallery items here
                var newItems = `
                    <div class="gallery-item" data-category="education">
                        <div class="gallery-item-inner">
                            <img src="assets/img/gallery/09.jpg" alt="Additional Education" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Additional Education</h4>
                                    <p>More educational initiatives</p>
                                    <div class="gallery-actions">
                                        <a href="assets/img/gallery/09.jpg" class="gallery-lightbox" data-rel="lightcase">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="gallery-link">
                                            <i class="fa fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                // Add new items to grid
                var $newItems = $(newItems);
                $grid.append($newItems).isotope('appended', $newItems);
                
                // Reinitialize lightbox for new items
                $newItems.find('.gallery-lightbox').lightcase({
                    swipe: true,
                    showTitle: true,
                    showCaption: true
                });
                
                // Reset button
                $btnText.text(originalText);
                $btn.prop('disabled', false);
                
                // Add animation to new items
                $newItems.addClass('fade-in');
            }, 1000);
        });

        // Add animation on scroll
        $(window).on('scroll', function() {
            $('.gallery-item').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('slide-up');
                }
            });
        });

        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });

        // Console log for debugging
        console.log('Gallery page loaded successfully');
    });
    </script>
</body>
</html> 