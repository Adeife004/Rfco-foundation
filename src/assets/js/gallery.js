/**
 * Professional Gallery JavaScript - Osiaga Foundation
 * Enhanced gallery functionality with smooth animations and interactions
 */

$(document).ready(function() {
    'use strict';

    // Initialize Isotope
    var $grid = $('#gallery-masonry').isotope({
        itemSelector: '.gallery-item',
        layoutMode: 'fitRows',
        transitionDuration: '0.4s',
        stagger: 30,
        initLayout: false
    });

    // Initialize layout after images are loaded
    $grid.imagesLoaded().progress(function() {
        $grid.isotope('layout');
    });

    // Filter functionality with smooth transitions
    $('.filter-btn').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        
        // Update active button with animation
        $('.filter-btn').removeClass('active').addClass('fade-out');
        $(this).removeClass('fade-out').addClass('active');
        
        // Add loading state to grid
        $grid.addClass('loading');
        
        // Filter items with delay for smooth transition
        setTimeout(function() {
            if (filterValue === 'all') {
                $grid.isotope({ filter: '*' });
            } else {
                $grid.isotope({ filter: '[data-category="' + filterValue + '"]' });
            }
            
            // Remove loading state
            setTimeout(function() {
                $grid.removeClass('loading');
            }, 400);
        }, 200);
    });

    // Initialize Lightcase for image lightbox
    $('.gallery-lightbox').lightcase({
        swipe: true,
        showTitle: true,
        showCaption: true,
        showSequenceInfo: true,
        showSequenceInfoOnLightbox: true,
        showThumbnails: true,
        showThumbnailsOnLightbox: true,
        thumbnailPath: function($el, attr) {
            return attr.href;
        },
        onOpen: function() {
            $('body').addClass('lightbox-open');
        },
        onClose: function() {
            $('body').removeClass('lightbox-open');
        }
    });

    // Enhanced load more functionality
    var itemsToLoad = 4;
    var currentItems = $('.gallery-item').length;
    
    $('#load-more').on('click', function() {
        var $btn = $(this);
        var $btnText = $btn.find('.btn-text');
        var $btnIcon = $btn.find('.btn-icon');
        var originalText = $btnText.text();
        
        // Show loading state
        $btn.addClass('loading');
        $btnText.text('Loading...');
        $btnIcon.html('<i class="fa fa-spinner fa-spin"></i>');
        
        // Simulate loading more images (replace with actual AJAX call)
        setTimeout(function() {
            // Sample additional gallery items
            var additionalItems = [
                {
                    category: 'education',
                    image: 'assets/img/gallery/09.jpg',
                    title: 'Additional Education',
                    description: 'More educational initiatives and programs'
                },
                {
                    category: 'healthcare',
                    image: 'assets/img/gallery/10.jpg',
                    title: 'Health Awareness',
                    description: 'Community health awareness campaigns'
                },
                {
                    category: 'community',
                    image: 'assets/img/gallery/11.jpg',
                    title: 'Community Outreach',
                    description: 'Local community development projects'
                },
                {
                    category: 'events',
                    image: 'assets/img/gallery/12.jpg',
                    title: 'Special Events',
                    description: 'Memorable foundation events and celebrations'
                }
            ];
            
            // Create new gallery items
            var newItemsHTML = '';
            additionalItems.forEach(function(item) {
                newItemsHTML += `
                    <div class="gallery-item" data-category="${item.category}">
                        <div class="gallery-item-inner">
                            <img src="${item.image}" alt="${item.title}" class="gallery-image">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>${item.title}</h4>
                                    <p>${item.description}</p>
                                    <div class="gallery-actions">
                                        <a href="${item.image}" class="gallery-lightbox" data-rel="lightcase">
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
            });
            
            // Add new items to grid with animation
            var $newItems = $(newItemsHTML);
            $grid.append($newItems).isotope('appended', $newItems);
            
            // Reinitialize lightbox for new items
            $newItems.find('.gallery-lightbox').lightcase({
                swipe: true,
                showTitle: true,
                showCaption: true
            });
            
            // Add animation to new items
            $newItems.addClass('fade-in');
            
            // Reset button
            $btn.removeClass('loading');
            $btnText.text(originalText);
            $btnIcon.html('<i class="fa fa-plus"></i>');
            
            // Update current items count
            currentItems += itemsToLoad;
            
            // Hide load more button if no more items (optional)
            if (currentItems >= 20) {
                $btn.fadeOut();
            }
            
        }, 1500);
    });

    // Smooth scroll animation for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000, 'easeInOutQuart');
        }
    });

    // Intersection Observer for scroll animations
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe gallery items
        document.querySelectorAll('.gallery-item').forEach(function(item) {
            observer.observe(item);
        });
    }

    // Parallax effect for hero section
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        var parallax = $('.gallery-hero');
        var speed = 0.5;
        
        if (parallax.length) {
            var yPos = -(scrolled * speed);
            parallax.css('transform', 'translateY(' + yPos + 'px)');
        }
    });

    // Enhanced hover effects
    $('.gallery-item').on('mouseenter', function() {
        $(this).addClass('hover-lift');
    }).on('mouseleave', function() {
        $(this).removeClass('hover-lift');
    });

    // Keyboard navigation for lightbox
    $(document).on('keydown', function(e) {
        if ($('body').hasClass('lightbox-open')) {
            switch(e.keyCode) {
                case 37: // Left arrow
                    $('.lightcase-prev').click();
                    break;
                case 39: // Right arrow
                    $('.lightcase-next').click();
                    break;
                case 27: // Escape
                    $('.lightcase-close').click();
                    break;
            }
        }
    });

    // Touch gestures for mobile
    if ('ontouchstart' in window) {
        var touchStartX = 0;
        var touchEndX = 0;
        
        $('.gallery-item').on('touchstart', function(e) {
            touchStartX = e.originalEvent.touches[0].clientX;
        });
        
        $('.gallery-item').on('touchend', function(e) {
            touchEndX = e.originalEvent.changedTouches[0].clientX;
            handleSwipe();
        });
        
        function handleSwipe() {
            var swipeThreshold = 50;
            var diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - next image
                    $(this).find('.gallery-lightbox').click();
                } else {
                    // Swipe right - previous image
                    $(this).find('.gallery-lightbox').click();
                }
            }
        }
    }

    // Performance optimization: Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(function(img) {
            imageObserver.observe(img);
        });
    }

    // Analytics tracking for gallery interactions
    function trackGalleryInteraction(action, category) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'gallery_interaction', {
                'event_category': 'gallery',
                'event_label': action + '_' + category
            });
        }
    }

    // Track filter usage
    $('.filter-btn').on('click', function() {
        var category = $(this).attr('data-filter');
        trackGalleryInteraction('filter', category);
    });

    // Track image views
    $('.gallery-lightbox').on('click', function() {
        var category = $(this).closest('.gallery-item').attr('data-category');
        trackGalleryInteraction('view', category);
    });

    // Console log for debugging
    	// Professional Gallery JavaScript loaded successfully
	// Features: Isotope filtering, Lightcase lightbox, Smooth animations, Touch support
});

// Additional utility functions
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Optimize scroll events
$(window).on('scroll', debounce(function() {
    // Scroll-based animations and effects
}, 10));

// Preload critical images
function preloadImages(images) {
    images.forEach(function(src) {
        var img = new Image();
        img.src = src;
    });
}

// Preload gallery images
preloadImages([
    'assets/img/gallery/01.jpg',
    'assets/img/gallery/02.jpg',
    'assets/img/gallery/03.jpg',
    'assets/img/gallery/04.jpg'
]); 
