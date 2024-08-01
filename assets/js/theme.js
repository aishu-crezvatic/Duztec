(function($) {
    'use strict';

	$('a.smooth-menu').on('click', function(event) {
		var $anchor = $(this);
		var headerH = '85';
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});

// Cache selectors
	var lastId,
		topMenu = $("#top-menu"),
		topMenuHeight = topMenu.outerHeight()+15,
		// All list items
		menuItems = topMenu.find("a"),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		var item = $($(this).attr("href"));
		if (item.length) { return item; }
	});
	
	
	// Cache selectors
	var lastId,
		topMenu = $("#top-menu"),
		topMenuHeight = topMenu.outerHeight()+15,
		// All list items
		menuItems = topMenu.find("a"),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		var item = $($(this).attr("href"));
		if (item.length) { return item; }
	});

	// Bind click handler to menu items
	// so we can get a fancy scroll animation
	menuItems.click(function(e){
		var href = $(this).attr("href"),
		offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
		$('html, body').stop().animate({ 
		scrollTop: offsetTop
		}, 300);
		e.preventDefault();
	});

	// Bind to scroll
	$(window).scroll(function(){
		// Get container scroll position
		var fromTop = $(this).scrollTop()+topMenuHeight;

		// Get id of current scroll item
		var cur = scrollItems.map(function(){
		if ($(this).offset().top < fromTop)
		return this;
	});
	// Get the id of the current element
	cur = cur[cur.length-1];
		var id = cur && cur.length ? cur[0].id : "";

		if (lastId !== id) {
		lastId = id;
		// Set/remove active class
		menuItems
			.parent().removeClass("active")
			.end().filter("[href='#"+id+"']").parent().addClass("active");
		}                   
	});

	$(document).ready(function(){
	  $(".menu_hide").click(function(){
		$(".menu_open").slideToggle("slow");
	  });
	});
	$(document).ready(function(){
	  $(".menu_hide2").click(function(){
		$(".menu_open2").slideToggle("slow");
	  });
	});

	$(document).ready(function(){
	  $(".menu_hide3").click(function(){
		$(".menu_open3").slideToggle("slow");
	  });
	});

	$(document).ready(function(){
	  $(".menu_hide4").click(function(){
		$(".menu_open4").slideToggle("slow");
	  });
	});

	$(document).ready(function(){
	  $(".menu_hide5").click(function(){
		$(".menu_open5").slideToggle("slow");
	  });
	});

    $('.menu-toggle').click( function(){
        $('.header-menu2').toggleClass('active');
        $('.icon').toggleClass('close');
    });

	$('.expand').click( function(){
        $(this).toggleClass('active');
    });

    // sticky
	var wind = $(window);
	var sticky = $('#sticky-header');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 100) {
			sticky.removeClass('sticky');
		} else {
			sticky.addClass('sticky');
		}
	});

// Preloader
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function(){
        loader.style.display="none"
})

	/*-------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    // Venobox
    $(document).ready(function(){
        $('.venobox').venobox(); 
    });
    // Service-lisi
    $('.service_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        dotsEach:true,
        nav: false,
        navText: ["<i class='fas fa-angle-left''></i>", "<i class='fas fa-angle-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
			768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })
    // Counterup
    $('.work-counterup h1').counterUp({
        delay: 10,
        time: 1000
    });    
    $('.count h2').counterUp({
        delay: 10,
        time: 1000
    });
    $('.about-count h3').counterUp({
        delay: 10,
        time: 1000
    });

    // slider
    $('.slider_list').owlCarousel({
        loop: true,
        autoplay: true,
        animateIn: 'animate__fadeIn',
        animateOut: 'fadeOut',
        dots: true,
        navText: ["<i class='fas fa-long-arrow-alt-left''></i>", "<i class='fas fa-long-arrow-alt-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1 
            },
			768: {
                items: 1
            },
            992: {
                items: 1
            },
            1000: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    })
        // slider
        $('.slider_list_2').owlCarousel({
            loop: true,
            autoplay: true,
            animateOut: 'fadeOut',
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-long-arrow-alt-left''></i>", "<i class='fas fa-long-arrow-alt-right''></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1 
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        })       
        $('.slider_list_3').owlCarousel({
            loop: true,
            autoplay: true,
            animateOut: 'fadeOut',
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-long-arrow-alt-left''></i>", "<i class='fas fa-long-arrow-alt-right''></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1 
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        })
    // testi list
    $('.testi_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: true,
        navText: ["<i class='fas fa-long-arrow-alt-left''></i>", "<i class='fas fa-long-arrow-alt-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1 
            },
			768: {
                items: 1
            },
            992: {
                items: 1
            },
            1000: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    })
    $('.testi_list_2').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1 
            },
			768: {
                items: 1
            },
            992: {
                items: 2
            },
            1000: {
                items: 2
            },
            1920: {
                items: 2
            }
        }
    })    
    $('.testi_list_3').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: true,
        navText: ["<i class='fas fa-long-arrow-alt-left''></i>", "<i class='fas fa-long-arrow-alt-right''></i>"],
        center: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1 
            },
			768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })
    // Blog list
    $('.blog_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: true,
        navText: ["<i class='fas fa-long-arrow-alt-left''></i>", "<i class='fas fa-long-arrow-alt-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
			768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })
    // Brand List
    $('.brand_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1000: {
                items: 5
            },
            1920: {
                items: 7
            }
        }
    })
    $('.brand_list_2').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            320:{
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 4
            },
            1920: {
                items: 4
            }
        }
    })
    // Team List
    $('.team_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })
    // progress-bar Line
    if($('.progress-line').length) {
        $('.progress-line').appear(function(){
            var el = $(this);
            var percent = el.data('width');
            $(el).css('width', percent+'%');
        }, {accY: 0});
       }
    //Progress-Bar Counter Up
    $('.counter').counterUp({
        delay: 10,
        time: 1500
    });
    // case-study
    $('.case_list').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        center:true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })

    //Header Search
    if($('.search-box-outer').length) {
    $('.search-box-outer').on('click', function() {
        $('body').addClass('search-active');
    });
    $('.close-search').on('click', function() {
        $('body').removeClass('search-active');
    });}

    // animate
    new WOW().init();
	
// Portfolio
    $('.image_load').imagesLoaded(function() {

        if ($.fn.isotope) {
    
        var $portfolio = $('.image_load');
    
        $portfolio.isotope({
    
        itemSelector: '.grid-item',
    
        filter: '*',
    
        resizesContainer: true,
    
        layoutMode: 'masonry',
    
        transitionDuration: '0.8s'
    
    });
        $('.menu-filtering li').on('click', function() {
    
        $('.menu-filtering li').removeClass('current_menu_item');
    
        $(this).addClass('current_menu_item');
    
        var selector = $(this).attr('data-filter');
    
        $portfolio.isotope({
    
        filter: selector,
    
        });
    
        });
    
        };
    
        });
    

        // Skill-Bar
        $(document).ready(function ($) {
            function animateElements() {
                $('.progressbar').each(function () {
                    var elementPos = $(this).offset().top;
                    var topOfWindow = $(window).scrollTop();
                    var percent = $(this).find('.circle').attr('data-percent');
                    var animate = $(this).data('animate');
                    if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                        $(this).data('animate', true);
                        $(this).find('.circle').circleProgress({
                            // startAngle: -Math.PI / 2,
                            value: percent / 100,
                            size : 150,
                            thickness: 15,
                            fill: {
                                color: '#d00a2b'
                            }
                        }).on('circle-animation-progress', function (event, progress, stepValue) {
                            $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
                        }).stop();
                    }
                });
            }
        
            animateElements();
            $(window).scroll(animateElements);
        });
    // End-Skliss-Bar


// particles Js
particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;

})(jQuery);




















