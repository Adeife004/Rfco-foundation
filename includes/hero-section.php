<!-- Professional Hero Section with Background Images -->
<style>
    .hero-section {
        position: relative;
        height: 120vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        background-color: #f5f5f5; 
        padding-top: 90px;
        margin-top: 0;
    }

    .hero-swiper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .hero-swiper .swiper-slide {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .hero-background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-swiper .swiper-slide::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: #ffffff;
        max-width: 600px;
        padding: 0 20px;
        background: transparent;
        margin-right: auto;
        opacity: 0;
        transform: translateX(-50px);
        animation: slideInFromLeft 1s ease-out 2s forwards;
    }

    @keyframes slideInFromLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .hero-content h3 {
        font-size: 1.8rem;
        font-weight: 500;
        line-height: 1.4;
        margin-bottom: 1rem;
        color: #2193b0 !important;
        text-shadow: none;
        padding-top: 150px;
        white-space: nowrap;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1rem;
        color: #ffffff !important;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-content p {
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        color: #ffffff !important;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .hero-content ul {
        list-style: none;
        margin: 0 0 2rem 0;
        padding: 0;
    }

    .hero-content ul li {
        color: #ffffff !important;
        margin-bottom: 0.8rem;
        font-size: 1rem;
        display: flex;
        align-items: center;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .hero-content ul li i {
        color: #2193b0;
        margin-right: 0.8rem;
        font-size: 1.1rem;
    }

    .hero-button-group {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .hero-btn {
        background: transparent;
        color: #fff !important;
        padding: 0.4rem 1.1rem;
        border-radius: 8px;
        font-weight: 600;
        border: 1.5px solid #2193b0;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(33, 147, 176, 0.18);
        font-size: 0.92rem;
        white-space: nowrap;
        text-decoration: none !important;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .hero-btn:hover {
        background: #000;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(33, 147, 176, 0.3);
        text-decoration: none !important;
        border-color: #6dd5ed;
    }

    .hero-btn.active {
        color: #fff;
        border-color: #6dd5ed;
    }

    /* Swiper Navigation */
    .hero-swiper .swiper-pagination {
        bottom: 30px;
        z-index: 1000;
    }

    .hero-swiper .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.5) !important;
        opacity: 1 !important;
        width: 15px !important;
        height: 15px !important;
        border: 2px solid rgba(255, 255, 255, 0.8) !important;
        transition: all 0.3s ease !important;
    }

    .hero-swiper .swiper-pagination-bullet-active {
        background: #2193b0 !important;
        border-color: #2193b0 !important;
    }

    /* Swiper Navigation Arrows */
    .hero-swiper .swiper-button-next,
    .hero-swiper .swiper-button-prev {
        color: #2193b0 !important;
        background: rgba(255, 255, 255, 0.9) !important;
        width: 60px !important;
        height: 60px !important;
        border-radius: 50% !important;
        transition: all 0.3s ease !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        z-index: 9999 !important;
        border: 2px solid #2193b0 !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3) !important;
        position: absolute !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        cursor: pointer !important;
    }

    .hero-swiper .swiper-button-next {
        right: 20px !important;
    }

    .hero-swiper .swiper-button-prev {
        left: 20px !important;
    }



    .hero-swiper .swiper-button-next::after,
    .hero-swiper .swiper-button-prev::after {
        display: none !important;
    }

    .hero-swiper .swiper-button-next i,
    .hero-swiper .swiper-button-prev i {
        font-size: 24px !important;
        font-weight: bold !important;
        color: inherit !important;
    }

    /* Override any Swiper default styles that might hide arrows */
    .swiper-button-next,
    .swiper-button-prev {
        display: flex !important;
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Force arrows to be visible in hero section */
    .hero-section .swiper-button-next,
    .hero-section .swiper-button-prev {
        display: flex !important;
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
    }

    .swiper-button-disabled {
        opacity: 0.35 !important;
        cursor: auto !important;
        pointer-events: none !important;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .hero-section {
            height: 110vh;
        }
        
        .hero-content {
            margin-right: 0;
            text-align: center;
        }
        
        .hero-content h1 {
            font-size: 2.5rem;
        }
        
        .hero-content h3 {
            font-size: 1.5rem;
            white-space: normal;
        }
        
        .hero-content p {
            font-size: 1rem;
        }
        
        .hero-button-group {
            flex-direction: column;
            gap: 0.8rem;
        }
        
        .hero-btn {
            width: 100%;
            justify-content: center;
        }

        /* Make arrows smaller on mobile to prevent overlapping */
        .hero-swiper .swiper-button-next,
        .hero-swiper .swiper-button-prev {
            width: 40px !important;
            height: 40px !important;
        }

        .hero-swiper .swiper-button-next i,
        .hero-swiper .swiper-button-prev i {
            font-size: 16px !important;
        }
    }

    /* Extra Small Mobile Screens */
    @media (max-width: 320px) {
        .hero-section {
            height: 160vh;
        }
        
        .hero-content h1 {
            font-size: 2rem;
        }
        
        .hero-content h3 {
            font-size: 1.2rem;
            white-space: normal;
        }
        
        .hero-content p {
            font-size: 0.9rem;
        }

        /* Even smaller arrows for very small screens */
        .hero-swiper .swiper-button-next,
        .hero-swiper .swiper-button-prev {
            width: 35px !important;
            height: 35px !important;
        }

        .hero-swiper .swiper-button-next i,
        .hero-swiper .swiper-button-prev i {
            font-size: 14px !important;
        }
    }
</style>

<div class="hero-section">
    <!-- Swiper -->
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/img/banner/add20.jpeg" alt="Hero Background 1" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Igniting Hope,</h3>
                        <h1>Inspiring Change</h1>
                        <p>
                            Your kindness can transform lives. Help us educate children, empower widows, and uplift the physically challenged. Together, we can create a brighter future for all.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Support Our Mission</li>
                            <li><i class="fa fa-angle-double-right"></i>Become a Changemaker</li>
                            <li><i class="fa fa-angle-double-right"></i>Empowering indigent children</li>
                            <li><i class="fa fa-angle-double-right"></i>Uplifting widows</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Donate Now<i class="fa fa-angle-double-right"></i></a>
                            <a href="contact.php" class="hero-btn">Join Us Now<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <img src="assets/img/banner/add21.jpeg" alt="Hero Background 2" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Empowering Education,</h3>
                        <h1>Building Futures</h1>
                        <p>
                            Education is the key to breaking the cycle of poverty. Join us in providing quality education to underprivileged children and giving them the tools they need to succeed.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Quality Education</li>
                            <li><i class="fa fa-angle-double-right"></i>School Supplies</li>
                            <li><i class="fa fa-angle-double-right"></i>Scholarship Programs</li>
                            <li><i class="fa fa-angle-double-right"></i>Mentorship Support</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Support Education<i class="fa fa-angle-double-right"></i></a>
                            <a href="volunteer.php" class="hero-btn">Volunteer<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <img src="assets/img/banner/add34.jpg" alt="Hero Background 3" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Supporting Widows,</h3>
                        <h1>Restoring Dignity</h1>
                        <p>
                            We provide comprehensive support to widows, helping them rebuild their lives with dignity and hope. Your support can make a lasting difference in their journey.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Skills Training</li>
                            <li><i class="fa fa-angle-double-right"></i>Microfinance Support</li>
                            <li><i class="fa fa-angle-double-right"></i>Healthcare Access</li>
                            <li><i class="fa fa-angle-double-right"></i>Community Support</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Help Widows<i class="fa fa-angle-double-right"></i></a>
                            <a href="fundraising.php" class="hero-btn">Fundraise<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <img src="assets/img/banner/add43.jpg" alt="Hero Background 4" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Inclusive Support,</h3>
                        <h1>Empowering All</h1>
                        <p>
                            We believe in creating an inclusive society where everyone has equal opportunities. Join us in supporting the physically challenged and creating a more accessible world.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Accessibility Programs</li>
                            <li><i class="fa fa-angle-double-right"></i>Skills Development</li>
                            <li><i class="fa fa-angle-double-right"></i>Advocacy Support</li>
                            <li><i class="fa fa-angle-double-right"></i>Community Integration</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Support Inclusion<i class="fa fa-angle-double-right"></i></a>
                            <a href="about-us.php" class="hero-btn">Learn More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <img src="assets/img/banner/add42.jpg" alt="Hero Background 5" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Community Impact,</h3>
                        <h1>Real Change</h1>
                        <p>
                            See the real impact of your generosity. Every donation, every volunteer hour, and every act of kindness creates positive change in our community.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Transparent Impact</li>
                            <li><i class="fa fa-angle-double-right"></i>Success Stories</li>
                            <li><i class="fa fa-angle-double-right"></i>Community Programs</li>
                            <li><i class="fa fa-angle-double-right"></i>Sustainable Solutions</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Make Impact<i class="fa fa-angle-double-right"></i></a>
                            <a href="gallery-grid.php" class="hero-btn">View Gallery<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/img/banner/add38.jpg" alt="Hero Background 6" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Healthcare Access,</h3>
                        <h1>Better Lives</h1>
                        <p>
                            Access to healthcare is a fundamental right. We work to ensure that vulnerable communities receive the medical care they need to live healthy, productive lives.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Medical Outreach</li>
                            <li><i class="fa fa-angle-double-right"></i>Health Education</li>
                            <li><i class="fa fa-angle-double-right"></i>Preventive Care</li>
                            <li><i class="fa fa-angle-double-right"></i>Emergency Support</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Support Healthcare<i class="fa fa-angle-double-right"></i></a>
                            <a href="contact.php" class="hero-btn">Get Involved<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/img/banner/add36.jpg" alt="Hero Background 7" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Skills Development,</h3>
                        <h1>Empowering Growth</h1>
                        <p>
                            We provide vocational training and skill development programs that enable individuals to become self-sufficient and contribute meaningfully to their communities.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Vocational Training</li>
                            <li><i class="fa fa-angle-double-right"></i>Business Skills</li>
                            <li><i class="fa fa-angle-double-right"></i>Technology Training</li>
                            <li><i class="fa fa-angle-double-right"></i>Entrepreneurship</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Support Training<i class="fa fa-angle-double-right"></i></a>
                            <a href="volunteer.php" class="hero-btn">Teach Skills<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/img/banner/add35.jpg" alt="Hero Background 8" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Youth Empowerment,</h3>
                        <h1>Future Leaders</h1>
                        <p>
                            Investing in youth is investing in the future. We mentor and support young people to become confident, capable leaders who will drive positive change in society.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Leadership Training</li>
                            <li><i class="fa fa-angle-double-right"></i>Mentorship Programs</li>
                            <li><i class="fa fa-angle-double-right"></i>Career Guidance</li>
                            <li><i class="fa fa-angle-double-right"></i>Life Skills</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Empower Youth<i class="fa fa-angle-double-right"></i></a>
                            <a href="volunteer.php" class="hero-btn">Become a Mentor<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/img/banner/add33.jpg" alt="Hero Background 9" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Emergency Relief,</h3>
                        <h1>Rapid Response</h1>
                        <p>
                            When disaster strikes, we respond quickly to provide immediate relief and support to affected communities. Your donations help us be there when people need us most.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Disaster Response</li>
                            <li><i class="fa fa-angle-double-right"></i>Emergency Aid</li>
                            <li><i class="fa fa-angle-double-right"></i>Food & Shelter</li>
                            <li><i class="fa fa-angle-double-right"></i>Recovery Support</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Emergency Donate<i class="fa fa-angle-double-right"></i></a>
                            <a href="contact.php" class="hero-btn">Volunteer Now<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/img/banner/add32.jpg" alt="Hero Background 10" class="hero-background-image">
                <div class="container">
                    <div class="hero-content">
                        <h3>Sustainable Development,</h3>
                        <h1>Long-term Impact</h1>
                        <p>
                            We focus on sustainable solutions that create lasting positive change. Our programs are designed to build resilient communities that can thrive independently.
                        </p>
                        <ul>
                            <li><i class="fa fa-angle-double-right"></i>Community Projects</li>
                            <li><i class="fa fa-angle-double-right"></i>Infrastructure Development</li>
                            <li><i class="fa fa-angle-double-right"></i>Environmental Programs</li>
                            <li><i class="fa fa-angle-double-right"></i>Economic Empowerment</li>
                        </ul>
                        <div class="hero-button-group">
                            <a href="donate.php" class="hero-btn active">Build Communities<i class="fa fa-angle-double-right"></i></a>
                            <a href="about-us.php" class="hero-btn">Our Projects<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Navigation Arrows -->
        <div class="swiper-button-next"><i class="fa fa-arrow-right"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-arrow-left"></i></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if Swiper is loaded
    if (typeof Swiper !== 'undefined') {
        console.log('Swiper is loaded');
        
        // Initialize Swiper
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
            on: {
                init: function() {
                    console.log('Swiper initialized');
                    // Force arrows to be visible
                    const arrows = document.querySelectorAll('.hero-swiper .swiper-button-next, .hero-swiper .swiper-button-prev');
                    arrows.forEach(arrow => {
                        arrow.style.display = 'flex';
                        arrow.style.opacity = '1';
                        arrow.style.visibility = 'visible';
                    });
                }
            }
        });
    } else {
        console.error('Swiper is not loaded');
    }
});
</script> 