<!-- Glassmorphism Responsive Navbar -->
<style>
    .glass-navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        background: rgba(18, 18, 18, 0.95);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 15px 10px;
    }

    .glass-navbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.3rem 1.5rem;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
    }

    .glass-navbar .logo img {
        height: 58px;
        width: 58px;
        border-radius: 8px;
    }

    .glass-navbar nav {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
    }

    .glass-navbar ul {
        list-style: none;
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
        gap: 0.2rem;
    }

    .glass-navbar ul li {
        position: relative;
    }

    .glass-navbar ul li a {
        display: inline-block;
        padding: 0.4rem 0.8rem;
        color: #ffffff !important;
        font-weight: 500;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-size: 0.92rem;
    }
    .glass-navbar ul li a span {
        font-size: 0.8em;
        color: #ffffff !important;
    }
    .glass-navbar ul li a:hover, .glass-navbar ul li.active > a {
        color: #fff !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(33, 147, 176, 0.3);
    }

    .glass-navbar ul li .dropdown {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        min-width: 180px;
        background: rgba(25, 25, 25, 0.95);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .glass-navbar ul li:hover > .dropdown, .glass-navbar ul li:focus-within > .dropdown {
        display: block;
    }

    .glass-navbar ul li .dropdown li a {
        padding: 0.7rem 1.2rem;
        color: #ffffff !important;
        background: none;
        border-radius: 0;
        transition: all 0.3s ease;
    }
    
    .glass-navbar ul li .dropdown li a:hover {
        background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
        color: #fff !important;
    }
    
    .glass-navbar .donate {
        margin-left: auto;
        display: flex;
        align-items: center;
    }

    .glass-navbar .donate-link {
        background: transparent !important;
        color: #fff !important;
        padding: 0.4rem 1.1rem;
        border-radius: 8px;
        font-weight: 600;
        border: 1.5px solid #2193b0;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(33, 147, 176, 0.18);
        font-size: 0.92rem;
        white-space: nowrap;
        margin-left: 1.5rem;
        text-decoration: none !important;
    }

    .glass-navbar .donate-link:hover {
        background: transparent !important;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(33, 147, 176, 0.3);
        text-decoration: none !important;
    }

    .glass-navbar .hamburger {
        display: none;
        flex-direction: column;
        cursor: pointer;
        margin-left: 1.5rem;
        width: 30px;
        height: 30px;
        position: relative;
        z-index: 1001;
    }

    .glass-navbar .hamburger span {
        height: 3px;
        width: 28px;
        background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
        margin: 4px 0;
        border-radius: 2px;
        transition: all 0.3s ease;
        transform-origin: center;
    }

    /* Hamburger to X animation */
    .glass-navbar .hamburger.active span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    .glass-navbar .hamburger.active span:nth-child(2) {
        opacity: 0;
        transform: scale(0);
    }

    .glass-navbar .hamburger.active span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    .mobile-donate {
        display: none;
    }
    
    /* Responsive styles */
    @media (max-width: 991px) {
        .glass-navbar .container {
            flex-direction: row;
            padding: 0.3rem 0.5rem;
        }
        
        /* Show hamburger on mobile */
        .glass-navbar .hamburger {
            display: flex !important;
            visibility: visible !important;
            opacity: 1 !important;
        }
        
        /* Hide donate button on mobile (it will be inside the menu) */
        .glass-navbar .donate {
            display: none;
        }
        
        .glass-navbar nav {
            position: fixed;
            left: 0;
            top: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(18, 18, 18, 0.98);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transform: translateY(-100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 999;
            margin-left: 0;
            flex-direction: column;
            align-items: flex-start;
            overflow-y: auto;
            padding-top: 80px;
        }
        
        .glass-navbar nav.open {
            transform: translateY(0);
        }
        
        .glass-navbar ul {
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            padding: 1rem 0;
        }
        
        .glass-navbar ul li {
            width: 100%;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }
        
        .glass-navbar nav.open ul li {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Stagger animation for menu items */
        .glass-navbar nav.open ul li:nth-child(1) { transition-delay: 0.1s; }
        .glass-navbar nav.open ul li:nth-child(2) { transition-delay: 0.15s; }
        .glass-navbar nav.open ul li:nth-child(3) { transition-delay: 0.2s; }
        .glass-navbar nav.open ul li:nth-child(4) { transition-delay: 0.25s; }
        .glass-navbar nav.open ul li:nth-child(5) { transition-delay: 0.3s; }
        .glass-navbar nav.open ul li:nth-child(6) { transition-delay: 0.35s; }
        .glass-navbar nav.open ul li:nth-child(7) { transition-delay: 0.4s; }
        
        .glass-navbar ul li a {
            display: inline-block;
            width: auto;
            min-width: 60px;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-navbar ul li .dropdown {
            position: static;
            min-width: 100%;
            box-shadow: none;
            border-radius: 0;
            background: rgba(255, 255, 255, 0.05);
            margin-top: 0.5rem;
        }
        
        .glass-navbar ul li .dropdown li a {
            padding: 0.8rem 3rem;
            font-size: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        /* Mobile donate button */
        .glass-navbar .mobile-donate {
            width: 100%;
            padding: 1rem 2rem;
            margin-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            justify-content: center;
            align-items: center;
            display: none;
        }
        @media (max-width: 991px) {
        .glass-navbar .mobile-donate {
            display: flex;
        }
        }
        
        .glass-navbar .mobile-donate .donate-link {
            width: 90%;
            max-width: 300px;
            text-align: center;
            padding: 1rem;
            font-size: 1.1rem;
            background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
            color: #fff !important;
            border-radius: 8px;
            border: 1.5px solid #2193b0;
            box-shadow: 0 4px 15px rgba(33, 147, 176, 0.3);
            transition: all 0.3s ease;
            display: block;
        }
        
        .glass-navbar .mobile-donate .donate-link:hover {
            background: linear-gradient(135deg, #6dd5ed 0%, #2193b0 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(33, 147, 176, 0.5);
        }

        .glass-navbar .hamburger {
            display: flex;
        }
    }

    /* Override conflicting styles from style.css */
    .glass-navbar ul li a {
        color: #ffffff !important;
        text-decoration: none !important;
    }
    
    .glass-navbar ul li a:hover,
    .glass-navbar ul li.active > a {
        color: #ffffff !important;
        text-decoration: none !important;
    }
    
    .glass-navbar ul li a:before,
    .glass-navbar ul li a:after {
        display: none !important;
    }
    
    /* Override any conflicting main-menu styles */
    .glass-navbar .main-menu li a,
    .glass-navbar .main-menu li a:hover,
    .glass-navbar .main-menu li.active a {
        color: #ffffff !important;
        text-decoration: none !important;
        background: none !important;
        box-shadow: none !important;
    }
    
    .glass-navbar .main-menu li a:before,
    .glass-navbar .main-menu li a:after {
        display: none !important;
    }

    .glass-navbar ul li a {
        display: inline-block;
        padding: 0.4rem 0.8rem;
        color: #ffffff !important;
        font-weight: 500;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-size: 0.92rem;
    }
</style>

<!-- Navbar -->
<div class="glass-navbar">

<!-- container -->
    <div class="container">
        <!-- logo -->
        <a href="index.php" class="logo"><img src="assets/img/logo/logo_f.png" alt="Logo"></a>
        <!-- hamburger -->
        <div class="hamburger" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- main nav -->
        <nav id="mainNav">
            <!-- main nav items -->         
            <ul>
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                <li<?php if($current_page == 'index.php') echo ' class="active"'; ?>><a href="index.php">Home</a></li>
                <li<?php if($current_page == 'about-us.php') echo ' class="active"'; ?>><a href="about-us.php">About Us</a></li>
                <li<?php if($current_page == 'contact.php') echo ' class="active"'; ?>><a href="contact.php">Contact</a></li>
                <!-- pages -->
                <li tabindex="0"<?php if(in_array($current_page, ['gallery.php','blog-left-side-bar.php','get-loan.php','volunteer.php','publication.php','faq.php','pages/testimonials.php'])) echo ' class="active"'; ?>>
                    <a href="#">Pages <span>&#9662;</span></a>
                    <ul class="dropdown">
                        <li<?php if($current_page == 'gallery.php') echo ' class="active"'; ?>><a href="gallery.php">Gallery</a></li>
                        <li<?php if($current_page == 'blog-left-side-bar.php') echo ' class="active"'; ?>><a href="blog-left-side-bar.php">Blog</a></li>
                        <li<?php if($current_page == 'get-loan.php') echo ' class="active"'; ?>><a href="get-loan.php">Get Loan</a></li>
                        <li<?php if($current_page == 'volunteer.php') echo ' class="active"'; ?>><a href="volunteer.php">Volunteer</a></li>
                        <li<?php if($current_page == 'publication.php') echo ' class="active"'; ?>><a href="publication.php">Publications</a></li>
                        <li<?php if($current_page == 'pages/testimonials.php') echo ' class="active"'; ?>><a href="pages/testimonials.php">Testimonials</a></li>
                        <li<?php if($current_page == 'faq.php') echo ' class="active"'; ?>><a href="faq.php">FAQ</a></li>
                    </ul>
                </li>

                <!-- event -->
                <li tabindex="0"<?php if(in_array($current_page, ['event-list.php','event-two-column.php'])) echo ' class="active"'; ?>>
                    <a href="#">Event <span>&#9662;</span></a>
                    <ul class="dropdown">
                        <li<?php if($current_page == 'event-list.php') echo ' class="active"'; ?>><a href="event-list.php">Event List</a></li>
                        <li<?php if($current_page == 'event-two-column.php') echo ' class="active"'; ?>><a href="event-two-column.php">Event Details</a></li>
                    </ul>
                </li>
            </ul>
            
            <!-- Mobile donate button -->
            <div class="mobile-donate">
                <a href="donate.php" class="donate-link">DONATE NOW</a>
            </div>
        </nav>

        <!-- donate -->
        <div class="donate">
            <a href="donate.php" class="donate-link">DONATE NOW</a>
        </div>
    </div>
</div>

<!-- scripts -->
<script>
    // Hamburger menu toggle with animation
    const navToggle = document.getElementById('navToggle');
    const mainNav = document.getElementById('mainNav');
    
    navToggle.addEventListener('click', function() {
        // Toggle hamburger animation
        this.classList.toggle('active');
        // Toggle menu
        mainNav.classList.toggle('open');
        
        // Prevent body scroll when menu is open
        if (mainNav.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });
    
    // Dropdowns for mobile
    document.querySelectorAll('.glass-navbar ul li').forEach(function(li) {
        li.addEventListener('click', function(e) {
            if(window.innerWidth <= 991 && this.querySelector('.dropdown')) {
                e.stopPropagation();
                this.querySelector('.dropdown').classList.toggle('open');
            }
        });
    });
    
    // Close nav on link click (mobile)
    document.querySelectorAll('.glass-navbar ul li a, .glass-navbar .mobile-donate a').forEach(function(link) {
        link.addEventListener('click', function() {
            if(window.innerWidth <= 991) {
                mainNav.classList.remove('open');
                navToggle.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
    
    // Close nav on resize
    window.addEventListener('resize', function() {
        if(window.innerWidth > 991) {
            mainNav.classList.remove('open');
            navToggle.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
    
    // Close nav when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 991 && 
            !navToggle.contains(e.target) && 
            !mainNav.contains(e.target)) {
            mainNav.classList.remove('open');
            navToggle.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
</script> 