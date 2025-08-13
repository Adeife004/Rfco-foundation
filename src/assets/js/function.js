$(document).ready(function(){
    "use strict";
    
    // lightcase 
    $('a[data-rel^=lightcase]').lightcase();

    // sticky menu
    $( function(e){
        var fixed_top = $(".header-bottom");
            $(window).on('scroll', function () {
            if ($(this).scrollTop() > 180) {
                fixed_top.addClass("menu-fixed animated fadeInDown");
                fixed_top.removeClass("slideInUp");
                $('body').addClass("body-padding");
            } else {
                fixed_top.removeClass("menu-fixed fadeInDown");
                fixed_top.addClass("slideInUp"); 
                $('body').removeClass("body-padding");
            }
        });
    });


    // header dropdown icon
    $(document).ready(function(){
    	$(".main-menu>li>ul ul").parent("li").children("a").addClass("dd-icon-right");
    	// mobile menu responsive
    	$(document).on('click','.header-bar',function(){
    	 	$(".mobile-menu-area").toggleClass("m-menu-zero");
    		$(".header-bar").toggleClass("m-menu-bar");
    	});

    	$(".m-menu-close-icon").click(function(){
    		$(".mobile-menu-area").toggleClass("m-menu-zero");
    		$(".header-bar").removeClass("m-menu-bar");
    	});

        // Remove any existing plus/minus icons
        $('.mobile-menu-area .m-menu li a .fa-plus, .mobile-menu-area .m-menu li a .fa-minus').remove();
        // Add dropdown icon only to items with submenu
        $('.mobile-menu-area .m-menu > li').each(function() {
            if($(this).find('ul').length > 0) {
                var link = $(this).children('a');
                // Remove any existing dropdown icon to avoid duplicates
                link.find('.fa-angle-down').remove();
                link.append(" <i class='fa fa-angle-down'></i>");
            }
        });

	    //mobile drodown menu display
        $('.mobile-menu-area .m-menu li a').on('click', function(e) {
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp(1000,"swing");
            } else {
                element.addClass('open');
                element.children('ul').slideDown(1000,"swing");
                element.siblings('li').children('ul').slideUp(1000,"swing");
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp(1000,"swing");
            }
        }); 

        //$('.mobile-menu-area .m-menu li a').on('click', function(e) {
        $('.header-bottom .search-cart li.search-button a').on('click', function(){
            $('input').toggleClass('search-view');
        });

    	// drop down menu width overflow problem fix
    	$('ul').parent().hover(function() {
    	    var menu = $(this).find("ul");
    	    var menupos = $(menu).offset();

    	    if (menupos.left + menu.width() > $(window).width()) {
    	        var newpos = -$(menu).width();
    	        menu.css({ left: newpos });    
    	    }
    	});
    });

    // scroll up start here
    $(document).ready(function(){
        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 400) {
                $('.scrollToTop').css({'bottom':'47px', 'opacity':'1','transition':'all .5s ease'});
            } else {
                $('.scrollToTop').css({'bottom':'-47px', 'opacity':'0','transition':'all .5s ease'})
            }
        });

        //Click event to scroll to top

        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},500);
            return false;
        });
    });

    //banner slider for home page one
    var swiper = new Swiper('.banner-section', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 1400,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.banner-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-banner-next',
            prevEl: '.swiper-banner-prev',
        },
        loop: true,
    });


    //The Recent Slider
    var swiper = new Swiper('.recent-cause-slider', {
        spaceBetween: 0,
        slidesPerView:3,
        loop: true,
        pagination: {
            el: '.banner-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-banner-next',
            prevEl: '.swiper-banner-prev',
        },
        breakpoints: {
            991: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 1,
            }
        }
    });

    //counter up counters
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });

    //donor say slider
    var swiper = new Swiper('.donor-say-slider', {
        loop: true,
        slidesPerView:1,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        }
    });

    // external js: isotope.pkgd.js, imagesloaded.pkgd.js

    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item, .gallery-thum',
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-sizer'
        }
    });

    // The Donate Button
    $(document).on('click','.donate-btn',function(){
        $(".donate-btn").removeClass("active");
        $(this).on(".donate-btn").addClass("active");
    }); 


    //progress bar
    //Circle Progressber
    var skillLevel1 = jQuery('#circles .first').data('percent');
    // var skillLevel4 = jQuery('#circles .fourth').data('percent');

    $('.first.circle').circleProgress({
        value:  '0.' + skillLevel1,
        fill: {gradient: ['#2cc391']}
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(skillLevel1 * progress) + '<i>%</i>');
    });
    $('.second.circle').circleProgress({
        value:  '0.' + skillLevel1,
        fill: {gradient: ['#2cc391']}
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(skillLevel2 * progress) + '<i>%</i>');
    });
    $('.third.circle').circleProgress({
        value:  '0.' + skillLevel1,
        fill: {gradient: ['#2cc391']}
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(skillLevel3 * progress) + '<i>%</i>');
    });

    //Progress Bar Line
    jQuery(document).ready(function() {
        jQuery('.skillbar').each(function() {
            jQuery(this).find('.skillbar-bar').animate({ width: jQuery(this).attr('data-percent') }, 3000);
        });
    });

    //Count Down JAva Script
    $('#countdown').countdown({
        date: '12/22/2022 17:00:00',
        offset: +2,
        day: 'Day',
        days: 'Days'
    });

    //Archive Slider
    var swiper = new Swiper('.archive-slider', {
        loop: true,
        slidesPerView:1,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.archive-pagination',
            clickable: true,
        }
    });

    // accordion start here
    $('.accordion-item .active1').slideDown();
    $('.accordion-question').click(function (e){
        if($(this).next('.accordion-answer').css('display') != 'block'){
            $('.active1').slideUp(500).removeClass('active1');
            $('.accordion-question').removeClass('in');
            $(this).next('.accordion-answer').addClass('active1').slideDown(500);
            $(this).addClass('in');
        }else{
            $('.active1').slideUp(500).removeClass('active1');
            $(this).removeClass('in');
        }
    });
   
    //Wow animation     
    new WOW().init({
        mobile: true,
    });

    //Search Bar Mobile
    $('span.search').on('click', function(){
        $('.popup-search').addClass('show');
        $('.header-bar').addClass('show');
    });
    $('.popup-search form i').on('click', function(){
        $('.popup-search').removeClass('show');
        $('.header-bar').removeClass('show');
    });

    // ajax contact form
    $(function() {
        var form = $('#contact-form');
        var formMessages = $('.form-message');
        $(form).submit(function(e) {
            e.preventDefault();
            var formData = $(form).serialize();
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                $(formMessages).text(response);
                $('#contact-form input, #contact-form textarea').val('');
            })
            .fail(function(data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
        });
    });
});

