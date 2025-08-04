/**
 * Professional Testimonials JavaScript - Osiaga Foundation
 * Enhanced testimonials functionality with filtering and interactions
 */

$(document).ready(function() {
    'use strict';

    // Initialize testimonials functionality
    initTestimonials();

    function initTestimonials() {
        // Initialize filtering
        initFiltering();
        
        // Initialize animations
        initAnimations();
        
        // Initialize sharing functionality
        initSharing();
        
        // Initialize statistics counter
        initStatsCounter();
        
        // Initialize lazy loading
        initLazyLoading();
        
        // Initialize accessibility features
        initAccessibility();
        
        // Performance optimization
        optimizePerformance();
    }

    function initFiltering() {
        const $filterBtns = $('.filter-btn');
        const $testimonialItems = $('.testimonial-item');
        
        $filterBtns.on('click', function() {
            const filterValue = $(this).data('filter');
            
            // Update active button
            $filterBtns.removeClass('active');
            $(this).addClass('active');
            
            // Filter testimonials with animation
            filterTestimonials(filterValue);
            
            // Track analytics
            trackFilterUsage(filterValue);
        });
        
        function filterTestimonials(filter) {
            $testimonialItems.each(function() {
                const $item = $(this);
                const category = $item.data('category');
                
                if (filter === 'all' || category === filter) {
                    $item.removeClass('filtered').addClass('show');
                } else {
                    $item.removeClass('show').addClass('filtered');
                }
            });
            
            // Re-layout after filtering
            setTimeout(function() {
                $('.testimonial-item.show').each(function(index) {
                    $(this).css('animation-delay', (index * 0.1) + 's');
                });
            }, 300);
        }
    }

    function initAnimations() {
        // Intersection Observer for scroll animations
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        
                        // Trigger specific animations based on element type
                        if (entry.target.classList.contains('stat-item')) {
                            animateCounter(entry.target);
                        }
                    }
                });
            }, { threshold: 0.1 });
            
            // Observe elements
            $('.stat-item, .testimonial-card').each(function() {
                observer.observe(this);
            });
        }
        
        // Hover animations
        $('.testimonial-card').on('mouseenter', function() {
            $(this).addClass('hovered');
        }).on('mouseleave', function() {
            $(this).removeClass('hovered');
        });
    }

    function initSharing() {
        // Share button functionality
        $('.share-btn').on('click', function() {
            const $card = $(this).closest('.testimonial-card');
            const name = $card.find('h4').text();
            const content = $card.find('.testimonial-content p').text();
            
            shareTestimonial(name, content);
        });
    }

    function initStatsCounter() {
        // Animate statistics numbers
        function animateCounter(element) {
            const $number = $(element).find('.stat-number');
            const target = parseInt($number.text().replace(/\D/g, ''));
            const suffix = $number.text().replace(/\d/g, '');
            
            $({ count: 0 }).animate({ count: target }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $number.text(Math.floor(this.count) + suffix);
                },
                complete: function() {
                    $number.text(target + suffix);
                }
            });
        }
    }

    function initLazyLoading() {
        // Lazy load testimonial images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src || img.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            $('.testimonial-image img[data-src]').each(function() {
                imageObserver.observe(this);
            });
        }
    }

    function initAccessibility() {
        // Keyboard navigation for filter buttons
        $('.filter-btn').on('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                $(this).click();
            }
        });
        
        // Focus management
        $('.testimonial-card').on('focus', function() {
            $(this).addClass('focused');
        }).on('blur', function() {
            $(this).removeClass('focused');
        });
        
        // Screen reader announcements
        function announceToScreenReader(message) {
            const announcement = $('<div>')
                .attr('aria-live', 'polite')
                .attr('aria-atomic', 'true')
                .addClass('sr-only')
                .text(message);
            
            $('body').append(announcement);
            
            setTimeout(function() {
                announcement.remove();
            }, 1000);
        }
        
        // Announce filter changes
        $('.filter-btn').on('click', function() {
            const filterText = $(this).text().trim();
            announceToScreenReader(`Showing ${filterText}`);
        });
    }

    function optimizePerformance() {
        // Debounce scroll events
        let scrollTimeout;
        $(window).on('scroll', function() {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            scrollTimeout = setTimeout(function() {
                // Handle scroll-based animations
            }, 10);
        });
        
        // Throttle resize events
        let resizeTimeout;
        $(window).on('resize', function() {
            if (resizeTimeout) {
                clearTimeout(resizeTimeout);
            }
            resizeTimeout = setTimeout(function() {
                // Handle responsive adjustments
                adjustLayout();
            }, 250);
        });
    }

    function adjustLayout() {
        // Adjust layout based on screen size
        const windowWidth = $(window).width();
        
        if (windowWidth <= 768) {
            $('.hero-stats').addClass('mobile-layout');
        } else {
            $('.hero-stats').removeClass('mobile-layout');
        }
    }

    // Share testimonial function (global scope)
    window.shareTestimonial = function(name, content) {
        const text = `"${content}" - ${name} via Osiaga Foundation`;
        const url = window.location.href;
        
        if (navigator.share) {
            // Use native sharing if available
            navigator.share({
                title: 'Testimonial from Osiaga Foundation',
                text: text,
                url: url
            }).catch(console.error);
        } else {
            // Fallback to clipboard copy
            const shareText = `${text}\n\nRead more testimonials: ${url}`;
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(shareText).then(function() {
                    showNotification('Testimonial copied to clipboard!');
                }).catch(function() {
                    fallbackCopyTextToClipboard(shareText);
                });
            } else {
                fallbackCopyTextToClipboard(shareText);
            }
        }
    };

    function fallbackCopyTextToClipboard(text) {
        const textArea = document.createElement('textarea');
        textArea.value = text;
        textArea.style.position = 'fixed';
        textArea.style.left = '-999999px';
        textArea.style.top = '-999999px';
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        
        try {
            document.execCommand('copy');
            showNotification('Testimonial copied to clipboard!');
        } catch (err) {
            console.error('Fallback: Oops, unable to copy', err);
            showNotification('Unable to copy testimonial');
        }
        
        document.body.removeChild(textArea);
    }

    function showNotification(message) {
        const notification = $('<div>')
            .addClass('notification')
            .text(message)
            .css({
                position: 'fixed',
                top: '20px',
                right: '20px',
                background: 'linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%)',
                color: '#ffffff',
                padding: '12px 24px',
                borderRadius: '25px',
                boxShadow: '0 4px 15px rgba(33, 147, 176, 0.3)',
                zIndex: 10000,
                transform: 'translateX(100%)',
                transition: 'transform 0.3s ease'
            });
        
        $('body').append(notification);
        
        // Animate in
        setTimeout(function() {
            notification.css('transform', 'translateX(0)');
        }, 100);
        
        // Animate out and remove
        setTimeout(function() {
            notification.css('transform', 'translateX(100%)');
            setTimeout(function() {
                notification.remove();
            }, 300);
        }, 3000);
    }

    function trackFilterUsage(filter) {
        // Analytics tracking
        if (typeof gtag !== 'undefined') {
            gtag('event', 'testimonial_filter', {
                'event_category': 'testimonials',
                'event_label': filter
            });
        }
        
        // Console logging for debugging
        	// Filter applied: ${filter}
    }

    // Utility functions
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
    window.TestimonialsUtils = {
        filterByCategory: function(category) {
            $(`.filter-btn[data-filter="${category}"]`).click();
        },
        
        shareAll: function() {
            const testimonials = [];
            $('.testimonial-item').each(function() {
                const name = $(this).find('h4').text();
                const content = $(this).find('.testimonial-content p').text();
                testimonials.push({ name, content });
            });
            
            const shareText = testimonials.map(t => 
                `"${t.content}" - ${t.name}`
            ).join('\n\n');
            
            shareTestimonial('Multiple Testimonials', shareText);
        },
        
        resetFilters: function() {
            $('.filter-btn[data-filter="all"]').click();
        }
    };

    // Console log for debugging
    	// Professional Testimonials JavaScript loaded successfully
	// Features: Filtering, Animations, Sharing, Accessibility, Analytics
});

// Additional CSS for dynamic elements
const additionalStyles = `
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
    
    .testimonial-card.focused {
        outline: 2px solid #2193b0;
        outline-offset: 2px;
    }
    
    .testimonial-card.hovered {
        transform: translateY(-15px) scale(1.02);
    }
    
    .hero-stats.mobile-layout {
        flex-direction: column;
        align-items: center;
    }
    
    .notification {
        font-weight: 500;
        font-size: 0.9rem;
    }
`;

// Inject additional styles
const styleSheet = document.createElement('style');
styleSheet.textContent = additionalStyles;
document.head.appendChild(styleSheet); 