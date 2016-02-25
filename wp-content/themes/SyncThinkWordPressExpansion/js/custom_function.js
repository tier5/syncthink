var activeNavText;
var navRollover;

;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);
	var winO = $win.scrollTop();
	var winH = $win.height();
	var winW = $win.width();
	var isForced = false;
	var $sections;
	var $nav;
	var headerH;
	var $sectionFocus;
	var scrollTO;

	/* 	
		Validate all forms with "form-validate" classname
		@param $container {jQuery Obj} - The holder of the form
		If the holder of the form is a popup or another AJAX content
		we can simply call the function on AJAX success like this: validateForms($('.popup'));
	*/
	function validateForms($container) {
		$container.find('.form-validate').each(function() {
			var $form = $(this);
			var validator = new Validator(this, {
				classHolder : '.form-controls',
				validClass  : 'valid',
				errorClass  : 'error',
				onSubmit: function(event) {
					if ( $form.parent().find('.error').length ) {
						event.preventDefault();
					} else {
						$form.closest('form').find('.form-actions .btn').toggleClass('thank-you')
					}
				}
			});
		});
	};


	$doc.ready(function() {
		validateForms($doc);

		// Fullscreen Image
		$('.fullscreen-image').each(function () {
			var imageSrc = $(this).attr('src');

			$(this)
				.closest('.fullscreen-image-container')
				.css(
					'background-image', 'url(' + imageSrc + ')'
				);
		});

		// FullPage Sliding
		function navTextHelper () {
			console.log('navtext');
			var currentText 	= $('.nav li.active a').text();
			var currentColor	= $('.nav li.active a').attr('data-color');
			$('.nav .text').text(currentText);
			$('.nav .text').css('color', currentColor);
		}

		$sections = $('.section');
		$nav = $('.nav');
		$sectionFocus = $('.section-intro').offset().top;

		$win.on('scroll load', function () {
			$sectionFocus = $('.section-intro').offset().top;
			winO = $win.scrollTop();

			setActiveSection();
			navTextHelper();
		})
		.on('resize', function(){
			winH = $win.height();
			winW = $win.width();
		})
		.on('mousewheel DOMMouseScroll', function(e){
			if (isForced){
				e.preventDefault();
			}
		});

		var sectionLength = $('.section').length;
		function setActiveSection() {
			$sections.each(function(){
				var $section = $(this);
				var sectionOff = $section.offset().top;
				var $currentSec;

				if (winO + winH >= $doc.height() && winW > 1023 ){
					$currentSec = $sections.eq(sectionLength - 1);
					sectionOff = $currentSec.offset().top;
				} else if (sectionOff >= winO + 1) {
					var $prev = $section.prev('.section');
					$currentSec = $prev.length ? $prev : $section ;
				}

				if ($currentSec != undefined && winW > 1023) {
					var shouldScroll = sectionOff - winO <= 100 && !isForced;
					clearTimeout(scrollTO);	

					$nav.find('li').removeClass('active')
						.find('a[href="#'+$currentSec[0].id+'"]').parent().addClass('active');

					if (shouldScroll){
						scrollTO = setTimeout(function(){
							isForced = true;
							$('html, body').animate({scrollTop: sectionOff}, 300, function(){
								isForced = false;
							})
						},500)
					}

					return false;
				}

				navTextHelper();
			}); 
		}

		$('.nav .nav-item').each( function(){
			$(this).on('mouseover', function(){
				console.log('rolling over nav');
				activeNavText = $('.nav .text').text();
				$('.nav .text').text($(this).find($('a')).text());
			});
			$(this).on('click', function(){
				activeNavText = $(this).find($('a')).text();
			});
		} );

		$('.nav').on('mouseout', function(){
			console.log('rolling off nav');
			$('.nav .text').text(activeNavText);
		});

		$('.nav ul li a').on('click',function(event) {
			event.preventDefault();

			var element 		= $(this).attr('href');
			var offsetTop 		= $(element).offset().top;
			var winScrollTop 	= $win.scrollTop();
			var time 			= Math.abs(offsetTop - winScrollTop);

			$('html, body').animate({scrollTop: (offsetTop)}, time);


			$(this)
				.parent()
				.addClass('active')
				.siblings()
				.removeClass('active');
		});

		$win.on('scroll', function() {
			$('.nav').addClass('scroll');
			
			clearTimeout($.data(this, 'scrollTimer'));
			$.data(this, 'scrollTimer', setTimeout(function() {
				$('.nav').removeClass('scroll');
			}, 1000));
		});

		// Start Video
		$('.btn-start-video').on('click', function(event) {
			event.preventDefault();
			var $this = $(this);
			var element = $this.attr('href');

			$(element)
				.addClass('animation-elements');

			setTimeout(function () {
				$this	
					.closest(element)
					.find('.vjs-big-play-button').trigger('click');

				$this
					.closest(element)
					.find('.vjs-poster')
					.fadeOut();
			}, 2000);


		});
	
		// Expand Mobile Menu
		$(".btn-menu").on('click', function(event) {
			event.preventDefault();
			$(this).toggleClass('active');

			$(this).next().toggleClass('open');
		});

		$('.slider-default .slider-nav .thumb').on('click', function(event) {
			event.preventDefault();
			$sliderDefault.trigger('stop.owl.autoplay');
		});


		// Slider Default
		var $sliderDefault =  $('.slider-default .owl-carousel');

		$sliderDefault.owlCarousel({
			items: 				1,
			loop: 				true,
			dots: 				true,
			autoplayHoverPause: true,
			autoplayTimeout: 	10000,
			dotsContainer: 		'.slider-default .slider-nav .thumbs',
			responsive: {
				0: {
					autoplay: false
				},
				1024: {
					autoplay: true
				}
			}
		});
		

		// Slider Testimonials
		$('.slider-testimonials .owl-carousel').owlCarousel({
			items: 				1,
			autoplay: 			false,
			autoplayHoverPause: true,
			loop: 				true
		});

		// Slider Review
		var slideShow;
		function sliderReview () {
			var lengthSlider 	= $('.slider-review .slide').length;

			slideShow = setInterval(function () {
				if($('.slider-review .slide').hasClass('active')) {
					var $nextElement = $('.slider-review .slide.active').next();

					if($nextElement.index() === -1) {
						$nextElement = $('.slider-review .slide:first-child');
						$('.slider-review .slide').removeClass('active');
						$nextElement.addClass('active');
					} else {
						$('.slider-review .slide').removeClass('active');
						$nextElement.addClass('active');
					}


				}
			}, 5000);
		}

		sliderReview();

		$('.slider-review .slide')
			.on('mouseover', function () {
				clearInterval(slideShow);
			}).on('mouseleave', function () {
				sliderReview();
			})
			.on('click', function(event) {
				event.preventDefault();

				$(this)
					.addClass('active')
					.siblings()
					.removeClass('active');
			});

		// Custom Select
		$('.select-holder .select').dropdown({
			label: 'use'
		}); 

		// Videos
		$win.on('load', function () {
			createVideo();
		});
	});


	// Create Video
	function createVideo () {
		if($('.video-js').length) {
			$('.video-js').each(function () {
				initVideo(this);
			});
		}
	}

	function initVideo ($video) {
		var videoElement 	= document.getElementById($video.id);

		var myPlayer 		= videojs(videoElement, {
			"controls": 	true,
			"preload": 		"auto",
			"techOrder": 	["vimeo"],
			"loop": 		false,
			"src": 			videoElement.getAttribute('data-src')
		}, function() {
			var $player = $(this.c);
			var $section = $player.closest('.section');
			var winSc = $win.scrollTop();
			var winHe = $win.height();
			var video = this;

			$win
			/*.on('scroll', function() {
				var sectionOff = $section.offset().top;

				winSc = $win.scrollTop();
				winHe = $win.height();
				
				if ( !( winSc >= sectionOff && sectionOff + $section.height() > winSc ) ) {
					video.pause();
					video.currentTime(0);
					$section.removeClass('animation-elements');
					$section
						.find('.vjs-poster')
						.fadeIn();
				}
			})*/
			.on('resize', function() {
				winSc = $win.scrollTop();
				winHe = $win.height();
			});

			video.on('timeupdate', function() {
				if ( !isNaN(Math.ceil(video.K.duration - video.K.currentTime)) && $section.hasClass('animation-elements')) {
					$section.find('.timer .seconds').text(Math.ceil(video.K.duration - video.K.currentTime));
				}
			});

			video.on('ended', function() {
				var that = video;

				setTimeout(function() {
					that.currentTime(0);
					that.pause();
					$section.find('.timer .seconds').text(Math.ceil(that.K.duration));
					$section.removeClass('animation-elements');
				}, 500);
			});

			$section.on('click', function(event) {
				var $target 	= $(event.target);
				var duration 	= video.K.duration;

				if ( !$target.parents('.section-description').length && !$target.hasClass('section-description') && $section.hasClass('animation-elements') && !$target.parents('.vjs-big-play-button').length && !$target.hasClass('vjs-big-play-button') && !$target.is('a') ) {

					video.pause();
					video.currentTime(0);

					if (duration != undefined) {
						$section.find('.timer .seconds').text(Math.ceil(video.K.duration));
					} else {
						$section.find('.timer .seconds').text(60);
					};
					
					$section.removeClass('animation-elements');
				}
			});
		});
	}

})(jQuery, window, document);
