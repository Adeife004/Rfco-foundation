/**
 * Professional Navbar JavaScript - Osiaga Foundation
 * Ensures consistent navbar functionality across all pages
 */

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Get navbar elements
    const navbar = document.querySelector('.glass-navbar');
    const navToggle = document.getElementById('navToggle');
    const mainNav = document.getElementById('mainNav');
    const dropdownItems = document.querySelectorAll('.glass-navbar ul li');

    // Initialize navbar functionality
    initNavbar();

    function initNavbar() {
        // Hamburger menu toggle
        if (navToggle && mainNav) {
            navToggle.addEventListener('click', toggleMobileMenu);
        }

        // Dropdown functionality for mobile
        initDropdowns();

        // Close menu on link click (mobile)
        initLinkClickHandlers();

        // Close menu on resize
        window.addEventListener('resize', handleResize);

        // Close menu when clicking outside
        document.addEventListener('click', handleOutsideClick);

        // Scroll effect
        window.addEventListener('scroll', handleScroll);

        // Keyboard navigation
        document.addEventListener('keydown', handleKeyboardNavigation);

        // Touch gestures for mobile
        if ('ontouchstart' in window) {
            initTouchGestures();
        }

        // Active page highlighting
        highlightActivePage();

        // Performance optimization
        optimizePerformance();
    }

    function toggleMobileMenu() {
        // Toggle hamburger animation
        navToggle.classList.toggle('active');
        
        // Toggle menu
        mainNav.classList.toggle('open');
        
        // Prevent body scroll when menu is open
        if (mainNav.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }

        // Add loading state briefly
        navbar.classList.add('loading');
        setTimeout(() => {
            navbar.classList.remove('loading');
        }, 300);
    }

    function initDropdowns() {
        dropdownItems.forEach(function(li) {
            const dropdown = li.querySelector('.dropdown');
            
            if (dropdown) {
                // Desktop hover
                li.addEventListener('mouseenter', function() {
                    if (window.innerWidth > 991) {
                        closeAllDropdowns();
                        dropdown.style.display = 'block';
                    }
                });

                li.addEventListener('mouseleave', function() {
                    if (window.innerWidth > 991) {
                        dropdown.style.display = 'none';
                    }
                });

                // Mobile click
                li.addEventListener('click', function(e) {
                    if (window.innerWidth <= 991 && dropdown) {
                        e.stopPropagation();
                        dropdown.classList.toggle('open');
                        
                        // Close other dropdowns
                        dropdownItems.forEach(otherLi => {
                            if (otherLi !== li) {
                                const otherDropdown = otherLi.querySelector('.dropdown');
                                if (otherDropdown) {
                                    otherDropdown.classList.remove('open');
                                }
                            }
                        });
                    }
                });
            }
        });
    }

    function closeAllDropdowns() {
        dropdownItems.forEach(li => {
            const dropdown = li.querySelector('.dropdown');
            if (dropdown) {
                dropdown.style.display = 'none';
                dropdown.classList.remove('open');
            }
        });
    }

    function initLinkClickHandlers() {
        const navLinks = document.querySelectorAll('.glass-navbar ul li a, .glass-navbar .mobile-donate a');
        
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 991) {
                    mainNav.classList.remove('open');
                    navToggle.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });
    }

    function handleResize() {
        if (window.innerWidth > 991) {
            mainNav.classList.remove('open');
            navToggle.classList.remove('active');
            document.body.style.overflow = '';
            closeAllDropdowns();
        }
    }

    function handleOutsideClick(e) {
        if (window.innerWidth <= 991 && 
            navToggle && 
            mainNav &&
            !navToggle.contains(e.target) && 
            !mainNav.contains(e.target)) {
            mainNav.classList.remove('open');
            navToggle.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    function handleScroll() {
        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
    }

    function handleKeyboardNavigation(e) {
        // Escape key closes mobile menu
        if (e.key === 'Escape') {
            if (mainNav && mainNav.classList.contains('open')) {
                toggleMobileMenu();
            }
        }

        // Tab navigation for accessibility
        if (e.key === 'Tab') {
            const activeElement = document.activeElement;
            const navItems = document.querySelectorAll('.glass-navbar ul li a, .glass-navbar .donate-link');
            
            if (navItems.length > 0) {
                const currentIndex = Array.from(navItems).indexOf(activeElement);
                
                if (currentIndex !== -1) {
                    // Add focus styles
                    navItems.forEach(item => item.classList.remove('keyboard-focus'));
                    activeElement.classList.add('keyboard-focus');
                }
            }
        }
    }

    function initTouchGestures() {
        let touchStartX = 0;
        let touchEndX = 0;
        
        // Swipe to close mobile menu
        if (mainNav) {
            mainNav.addEventListener('touchstart', function(e) {
                touchStartX = e.touches[0].clientX;
            });
            
            mainNav.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].clientX;
                handleSwipe();
            });
        }
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0 && mainNav.classList.contains('open')) {
                    // Swipe left - close menu
                    toggleMobileMenu();
                }
            }
        }
    }

    function highlightActivePage() {
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        const navItems = document.querySelectorAll('.glass-navbar ul li');
        
        navItems.forEach(li => {
            const link = li.querySelector('a');
            if (link) {
                const href = link.getAttribute('href');
                if (href === currentPage) {
                    li.classList.add('active');
                } else {
                    li.classList.remove('active');
                }
            }
        });
    }

    function optimizePerformance() {
        // Debounce scroll events
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            scrollTimeout = setTimeout(handleScroll, 10);
        });

        // Intersection Observer for animations
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, { threshold: 0.1 });

            // Observe navbar elements
            const navElements = document.querySelectorAll('.glass-navbar ul li');
            navElements.forEach(el => observer.observe(el));
        }
    }

    // Analytics tracking
    function trackNavbarInteraction(action, label) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'navbar_interaction', {
                'event_category': 'navigation',
                'event_label': action + '_' + label
            });
        }
    }

    // Track menu interactions
    if (navToggle) {
        navToggle.addEventListener('click', function() {
            trackNavbarInteraction('menu_toggle', 'mobile');
        });
    }

    // Track dropdown interactions
    dropdownItems.forEach(li => {
        const dropdown = li.querySelector('.dropdown');
        if (dropdown) {
            li.addEventListener('mouseenter', function() {
                if (window.innerWidth > 991) {
                    trackNavbarInteraction('dropdown_open', li.textContent.trim());
                }
            });
        }
    });

    // Console log for debugging
    	// Professional Navbar JavaScript loaded successfully
	// Features: Mobile menu, Dropdowns, Touch gestures, Keyboard navigation, Analytics
});

// Additional utility functions
function debounce(func, wait, immediate) {
    let timeout;
    return function() {
        const context = this, args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Export functions for global access
window.NavbarUtils = {
    closeAllDropdowns: function() {
        const dropdowns = document.querySelectorAll('.glass-navbar ul li .dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.style.display = 'none';
            dropdown.classList.remove('open');
        });
    },
    
    toggleMobileMenu: function() {
        const navToggle = document.getElementById('navToggle');
        const mainNav = document.getElementById('mainNav');
        if (navToggle && mainNav) {
            navToggle.click();
        }
    },
    
    highlightPage: function(pageName) {
        const navItems = document.querySelectorAll('.glass-navbar ul li');
        navItems.forEach(li => {
            const link = li.querySelector('a');
            if (link && link.getAttribute('href') === pageName) {
                li.classList.add('active');
            } else {
                li.classList.remove('active');
            }
        });
    }
}; 