<!-- Professional Footer -->
<style>
/* Ensure consistent footer display across all pages */
.footer-section {
    background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%) !important;
    color: #ffffff !important;
    position: relative !important;
    overflow: hidden !important;
    margin-top: 0 !important;
    padding-top: 0 !important;
    z-index: 10 !important;
}

.footer-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
}
</style>
<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="footer-content-wrapper">
                <!-- About Section -->
                <div class="footer-main-content">
                    <div class="footer-logo mb-4">
                        <a href="index.php">
                            <img src="assets/img/logo/logo_f.png" alt="OSIAGA Foundation" height="70" width="70">
                        </a>
                    </div>
                    <h5 class="footer-title">Rev. Fr. Callistus Osiaga Foundation</h5>
                    <p class="footer-description">
                        Dedicated to transforming lives and empowering vulnerable communities. Our initiatives provide hope, dignity, and opportunities for indigent children, poor widows, and physically challenged individuals through sustainable development programs.
                    </p>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Nigeria, Africa</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+234 816 022 6089</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>helps@rfcofoundation.org</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=61572308974739" class="social-link" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Footer Links Section -->
                <div class="footer-links-container">
                    <!-- Quick Links -->
                    <div class="footer-links-section">
                        <h5 class="footer-title">Quick Links</h5>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>

                            <li><a href="gallery.php">Gallery</a></li>
                                                         <li><a href="pages/testimonials.php">Testimonials</a></li>
                            <li><a href="blog-left-side-bar.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Our Programs -->
                    <div class="footer-links-section">
                        <h5 class="footer-title">Our Programs</h5>
                        <ul class="footer-links">
                            <li><a href="about-us.php">Education Support</a></li>
                            <li><a href="about-us.php">Widow Empowerment</a></li>
                            <li><a href="about-us.php">Skill Acquisition</a></li>
                            <li><a href="about-us.php">Healthcare Support</a></li>
                            <li><a href="get-loan.php">Micro Credit Scheme</a></li>
                            <li><a href="volunteer.php">Volunteer Program</a></li>
                        </ul>
                    </div>

                    <!-- Get Involved -->
                    <div class="footer-links-section">
                        <h5 class="footer-title">Get Involved</h5>
                        <ul class="footer-links">
                            <li><a href="donate.php">Make a Donation</a></li>
                            <li><a href="volunteer.php">Become a Volunteer</a></li>
                            <li><a href="fundraising.php">Start Fundraising</a></li>
                            <li><a href="get-loan.php">Apply for Loan</a></li>
                            <li><a href="contact.php">Partner With Us</a></li>
                            <li><a href="about-us.php">Learn More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright-text">
                    &copy; 2025 Rev. Fr. Callistus Osiaga Foundation. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
.footer-section {
    background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%);
    color: #ffffff;
    position: relative;
    overflow: hidden;
    margin-top: 0;
    padding-top: 0;
}

.footer-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
}

.footer-top {
    padding: 5rem 0 3rem 0;
    position: relative;
    z-index: 2;
}

.footer-content-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 4rem;
    width: 100%;
    padding: 3rem 0;
}

.footer-main-content {
    flex: 1;
    max-width: 45%;
    padding: 2rem 2rem 2rem 0;
}

.footer-links-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 3rem;
    flex: 1;
    max-width: 55%;
    padding: 2rem 0 2rem 2rem;
}

.footer-links-section {
    flex: 1;
    min-width: 0;
    padding: 1rem;
    white-space: nowrap;
}

.footer-logo {
    padding: 1rem 0;
}

.footer-logo img {
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}

.footer-logo img:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
}

.footer-title {
    color: #ffffff;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 2rem;
    position: relative;
    padding-bottom: 1rem;
    letter-spacing: 0.5px;
}

.footer-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(135deg, #121212 0%, #2193b0 50%, #6dd5ed 100%);
    border-radius: 2px;
}

.footer-description {
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.8;
    margin-bottom: 2.5rem;
    font-size: 1rem;
    font-weight: 400;
    padding: 1rem 1rem 1rem 0;
}

.footer-contact {
    margin-bottom: 2.5rem;
    padding: 1rem 0;
}

.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
    padding: 0.8rem 0;
}

.contact-item i {
    color: #2193b0;
    margin-right: 1rem;
    width: 24px;
    text-align: center;
    font-size: 1.1rem;
}

.contact-item span {
    font-size: 0.95rem;
}

.social-links {
    display: flex;
    gap: 1.2rem;
    padding: 1rem 0;
    margin-top: 1rem;
}

.social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.4s ease;
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 1.1rem;
    padding: 0.8rem;
}

.social-link:hover {
    background: linear-gradient(135deg, #121212 0%, #2193b0 50%, #6dd5ed 100%);
    color: #ffffff;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 25px rgba(33, 147, 176, 0.4);
    text-decoration: none;
}

.footer-links {
    list-style: none;
    padding: 1rem 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 1.2rem;
    padding: 0.5rem 0;
    white-space: nowrap;
}

.footer-links a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
    font-weight: 500;
    font-size: 0.95rem;
    padding: 0.8rem 0;
    white-space: nowrap;
}

.footer-links a:hover {
    color: #2193b0;
    transform: translateX(8px);
    text-decoration: none;
}

.footer-links a::before {
    content: '→';
    position: absolute;
    left: -20px;
    opacity: 0;
    transition: all 0.3s ease;
    color: #2193b0;
    font-weight: bold;
}

.footer-links a:hover::before {
    opacity: 1;
    left: -25px;
}

.footer-bottom {
    background: linear-gradient(135deg, rgba(18, 18, 18, 0.9) 0%, rgba(26, 26, 26, 0.9) 50%, rgba(33, 147, 176, 0.8) 100%);
    padding: 2rem 0;
    position: relative;
    z-index: 2;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-bottom-content {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.copyright-text {
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
    font-size: 0.95rem;
    font-weight: 500;
}

@media (max-width: 768px) {
    .footer-top {
        padding: 3.5rem 0 2rem 0;
    }
    
    .footer-title {
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
    }
    
    .footer-description {
        font-size: 0.95rem;
        line-height: 1.7;
    }
    
    .contact-item {
        margin-bottom: 0.8rem;
    }
    
    .contact-item i {
        font-size: 1rem;
        margin-right: 0.8rem;
    }
    
    .social-links {
        gap: 1rem;
    }
    
    .social-link {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .footer-bottom {
        padding: 1.5rem 0;
    }
    
    .footer-bottom-content {
        flex-direction: column;
    }
    
    .footer-links a {
        font-size: 0.9rem;
        white-space: normal;
    }
    
    .footer-content-wrapper {
        flex-direction: column;
        gap: 2.5rem;
        padding: 2rem 0;
    }
    
    .footer-main-content {
        max-width: 100%;
        padding: 1.5rem 0;
    }
    
    .footer-links-container {
        flex-direction: column;
        gap: 2rem;
        max-width: 100%;
        padding: 1.5rem 0;
    }
    
    .footer-links-section {
        flex: none;
        padding: 1rem;
        white-space: normal;
    }
}

@media (max-width: 576px) {
    .footer-top {
        padding: 3rem 0 1.5rem 0;
    }
    
    .footer-title {
        font-size: 1.2rem;
        margin-bottom: 1.2rem;
    }
    
    .footer-description {
        font-size: 0.9rem;
    }
    
    .social-links {
        justify-content: center;
    }
}
</style>
