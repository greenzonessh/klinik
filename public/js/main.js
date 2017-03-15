(function($) {
	
	'use strict';
	
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	
	$(document).ready(function(e) {
		
		// global
		var Modernizr = window.Modernizr;
		
		// support for CSS Transitions & transforms
		var support = Modernizr.csstransitions && Modernizr.csstransforms;
		var support3d = Modernizr.csstransforms3d;
		// transition end event name and transform name
		// transition end event name
		var transEndEventNames = {
								'WebkitTransition' : 'webkitTransitionEnd',
								'MozTransition' : 'transitionend',
								'OTransition' : 'oTransitionEnd',
								'msTransition' : 'MSTransitionEnd',
								'transition' : 'transitionend'
							},
		transformNames = {
						'WebkitTransform' : '-webkit-transform',
						'MozTransform' : '-moz-transform',
						'OTransform' : '-o-transform',
						'msTransform' : '-ms-transform',
						'transform' : 'transform'
					};
					
		if( support ) {
			this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.PMMain';
			this.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];
			//console.log('this.transformName = ' + this.transformName);
		}

		runParallax();
		
		
	/* ==========================================================================
	   Initialize animations
	   ========================================================================== */
		animateMilestones();
		animateProgressBars();
		//animatePieCharts();
		//setDimensionsPieCharts();
		
		
	/* ==========================================================================
	   Initialize WOW plugin for element animations
	   ========================================================================== */
		if( $(window).width() > 991 ){
			new WOW().init();
		}
		
		
	/* ==========================================================================
	   animateMilestones
	   ========================================================================== */
	
		function animateMilestones() {
	
			$(".milestone:in-viewport").each(function() {
				
				var $t = $(this);
				var	n = $t.find(".milestone-value").attr("data-stop");
				var	r = parseInt($t.find(".milestone-value").attr("data-speed"));
					
				if (!$t.hasClass("already-animated")) {
					$t.addClass("already-animated");
					$({
						countNum: $t.find(".milestone-value").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function() {
							$t.find(".milestone-value").text(Math.floor(this.countNum));
						},
						complete: function() {
							$t.find(".milestone-value").text(this.countNum);
						}
					});
				}
				
			});
	
		}
		
	/* ==========================================================================
	   animateProgressBars
	   ========================================================================== */
	
		function animateProgressBars() {
				
			$(".pm-progress-bar .pm-progress-bar-outer:in-viewport").each(function() {
				
				var $t = $(this),
				progressID = $t.attr('id'),
				numID = progressID.substr(progressID.lastIndexOf("-") + 1),
				targetDesc = '#pm-progress-bar-desc-' + numID,
				$target = $(targetDesc).find('span'),
				$diamond = $(targetDesc).find('.pm-progress-bar-diamond'),
				dataWidth = $t.attr("data-width");
								
				
				if (!$t.hasClass("already-animated")) {
					
					$t.addClass("already-animated");
					$t.animate({
						width: dataWidth + "%"
					}, 2000);
					$target.animate({
						"left" : dataWidth + "%",
						"opacity" : 1
					}, 2000);
					$diamond.animate({
						"left" : dataWidth + "%",
						"opacity" : 1
					}, 2000);
					
				}
				
			});
	
		}
		
	/* ==========================================================================
	   Appointment Form button
	   ========================================================================== */
		if( $('#pm-appointment-form-btn').length > 0 ){
						
			var $formBtn = $('#pm-appointment-form-btn'),
			formActive = false;
			
			$formBtn.click(function(e) {
				
				e.preventDefault();
				
				if(!formActive){
					
					formActive = true;
					
					methods.displayAppointmentForm();
					
				} else {
				
					formActive = false;
					
					methods.hideAppointmentForm();
					
				}
								
				$('#pm-close-appointment-form').click(function(e) {
					e.preventDefault();
					methods.hideAppointmentForm();
				});
			
			});
			
		}
		
	/* ==========================================================================
	   Store item thumbs
	   ========================================================================== */
	   if( $(".pm-woocomm-item-thumbs").length > 0 ){
			
			$(".pm-woocomm-item-thumbs").children().each(function(index, element) {
				
				 var $this = $(element),
				 span = $this.find('span'),
				 icon = $this.find('i');
				 
				 $this.hover(function(e) {
					 
					 span.css({
						'height' : 150 
					 });
					 
					 icon.css({
						'opacity' : 1 
					 });
					 
				 }, function(e) {
					 
					 span.css({
						'height' : 0 
					 });
					 
					 icon.css({
						'opacity' : 0 
					 });
					 
				 });
				
			});
			
	   }
		
		
	/* ==========================================================================
	   Store post item
	   ========================================================================== */
	   if( $(".pm-store-post-info-container").length > 0 ){
		   
			$(".pm-store-post-info-container").each(function(index, element) {
				
				
				
				 var $this = $(element),
				 expandBtn = $this.find('.pm-store-post-expander'),
				 overlay = $this.find('.pm-store-post-info-overlay'),
				 tags = $this.find('.pm-store-post-tags'),
				 closeBtn = $this.find('.pm-close-btn'),
				 isActive = false;
				 
				 expandBtn.click(function(e) {
					 
					 e.preventDefault();
					 
					 overlay.css({
						'top' : 0
					 });
					 
					 tags.css({
						'bottom' : -100
					 });
					 
					 
				 });	
				 
				 closeBtn.click(function(e) {
					 
					 e.preventDefault();
					 
					 overlay.css({
						'top' : 310
					 });
					 
					 tags.css({
						'bottom' : 0
					 });
					 
					 
				 });			 
				
			});
			   
	   }
		
	/* ==========================================================================
	   Staff post item
	   ========================================================================== */
	   if( $(".pm-staff-profile-container").length > 0 ){
			
			$(".pm-staff-profile-container").each(function(index, element) {
				
				 var $this = $(element),
				 expandBtn = $this.find('.pm-staff-profile-expander'),
				 quoteBox = $this.find('.pm-staff-profile-quote'),
				 socialIcons = $this.find('.pm-staff-profile-icons'),
				 isActive = false;
				 
				 expandBtn.click(function(e) {
					 
					 e.preventDefault();
					 
					 if(!isActive){
						 
						 isActive = true
						 
						 expandBtn.removeClass('fa fa-plus').addClass('fa fa-close');
						 
						 quoteBox.css({
							'top' : 0
						 });
						 
						 socialIcons.css({
							'opacity' : 0,
							'right' : -70
						 });
						 
						 
					 } else {
						
						isActive = false;
						
						expandBtn.removeClass('fa fa-close').addClass('fa fa-plus');
						
						quoteBox.css({
							'top' : 290
						});
						 
						socialIcons.css({
							'opacity' : 1,
							'right' : 15
						});
						 
					 }
					 
					 
				 });				 
				
			});
			   
	   }
	   
	/* ==========================================================================
	   Gallery post item
	   ========================================================================== */
	   if( $(".pm-gallery-post-item-container").length > 0 ){
			
			$(".pm-gallery-post-item-container").each(function(index, element) {
				
				 var $this = $(element),
				 expandBtn = $this.find('.pm-gallery-item-expander'),
				 excerpt = $this.find('.pm-gallery-item-excerpt'),
				 isActive = false;
				 
				 expandBtn.click(function(e) {
					 
					 e.preventDefault();
					 
					 if(!isActive){
						 
						 isActive = true
						 
						 expandBtn.removeClass('fa fa-plus').addClass('fa fa-close');
						 
						 excerpt.css({
							'top' : 0
						 });
						 						 
						 
					 } else {
						
						isActive = false;
						
						expandBtn.removeClass('fa fa-close').addClass('fa fa-plus');
						
						excerpt.css({
							'top' : 400
						});
						 						 
					 }
					 
					 
				 });				 
				
			});
			   
	   }				
		
	/* ==========================================================================
	   Testimonials carousel (homepage)
	   ========================================================================== */
	   if( $("#pm-testimonials-carousel").length > 0 ){
			  
			$("#pm-testimonials-carousel").PMTestimonials({
				speed : 500,
				slideShow : true,
				slideShowSpeed : 7000,
				controlNav : false,
				arrows : true	
			});
			   
	   }
		
	/* ==========================================================================
	   Brand carousel (homepage)
	   ========================================================================== */
	   if( $("#pm-brands-carousel").length > 0 ){
		   
		    var owl = $("#pm-brands-carousel");
			var isPlaying = false;
		   
		    owl.owlCarousel({
				
				items : 4, //10 items above 1000px browser width
				itemsDesktop : [5000,4],
				itemsDesktopSmall : [991,2],
				itemsTablet: [767,2],
				itemsTabletSmall: [720,1],
				itemsMobile : [320,1],
				
				//Pagination
				pagination : false,
				paginationNumbers: false,
				
		   });
		   
		    // Custom Navigation Events
			$(".pm-owl-next").click(function(){
				owl.trigger('owl.next');
			})
			$(".pm-owl-prev").click(function(){
				owl.trigger('owl.prev');
			})
			
				
			$("#pm-owl-play").click(function(){
				
				if(!isPlaying){
					isPlaying = true;
					$(this).removeClass('fa fa-play').addClass('fa fa-stop');
					owl.trigger('owl.play',3000); //owl.play event accept autoPlay speed as second parameter
				} else {
					isPlaying = false;
					$(this).removeClass('fa fa-stop').addClass('fa fa-play');
					owl.trigger('owl.stop');
				}
				
				
			});
			
			
				
		   
	   }
		
	/* ==========================================================================
	   Flexslider (homepage)
	   ========================================================================== */
	   if( $("#pm-flexslider-home").length > 0 ){
		   
		   $("#pm-flexslider-home").flexslider({
				animation:"slide", 
				controlNav: false, 
				directionNav: true, 
				animationLoop: true, 
				slideshow: false, 
				arrows: true, 
				touch: false, 
				prevText : "", 
				nextText : "",
				start : function() {
					$('.flex-direction-nav').find('li').eq(0).append('<div class="flex-prev-shadow" />');
					$('.flex-direction-nav').find('li').eq(1).append('<div class="flex-next-shadow" />');
				},
			});
		   
	   }
		
	/* ==========================================================================
	   PrettyPhoto activation
	   ========================================================================== */
	  if( $("a[data-rel^='prettyPhoto']").length > 0 ){
		  							
			$("a[data-rel^='prettyPhoto']").prettyPhoto({
				animation_speed: 'normal', /* fast/slow/normal */
				slideshow: 5000, /* false OR interval time in ms */
				autoplay_slideshow: false, /* true/false */
				opacity: 0.80, /* Value between 0 and 1 */
				show_title: true, /* true/false */
				//allow_resize: true, /* Resize the photos bigger than viewport. true/false */
				//default_width: 640,
				//default_height: 480,
				counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
				theme: 'dark_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
				horizontal_padding: 20, /* The padding on each side of the picture */
				hideflash: true, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
				wmode: 'opaque', /* Set the flash wmode attribute */
				autoplay: true, /* Automatically start videos: True/False */
				modal: false, /* If set to true, only the close button will close the window */
				deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
				overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
				keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
				changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
				
			});
			
		}	
	   
	/* ==========================================================================
	   MeanMenu (mobile menu)
	   ========================================================================== */
	    $('#pm-main-navigation').meanmenu({
			/*meanMenuContainer: '#pm-mobile-menu-container',*/
			meanScreenWidth : 	"980",
			meanRevealPositionDistance: "0",
			meanShowChildren: true,
			meanExpandableChildren: true,
			meanExpand: "+",
			meanMenuCloseSize: "18px"
		});
		
	/* ==========================================================================
	   Testimonials widget
	   ========================================================================== */
	   if( $('.pm-testimonials-widget-quotes').length > 0 ){
		   
		    $('.pm-testimonials-widget-quotes').PMTestimonials({
				speed : 450,
				slideShow : true,
				slideShowSpeed : 6000,
				controlNav : false,
				arrows : true
			});
		   
	   }
		
	/* ==========================================================================
	   Homepage slider
	   ========================================================================== */
		if($('#pm-slider').length > 0){
						
			$('#pm-slider').PMSlider({
				speed : 700,
				easing : 'ease',
				loop : true,
				controlNav : true, //false = no bullets / true = bullets
				controlNavThumbs : true,
				animation : 'slide',
				fullScreen : false,
				slideshow : true,
				slideshowSpeed : 7000,
				pauseOnHover : true,
				arrows : true,
				fixedHeight : true,
				fixedHeightValue : 755,
				touch : true,
				progressBar : false
			});
			
		}
		
	/* ==========================================================================
	   Detect page scrolls on buttons
	   ========================================================================== */
		if( $('.pm-page-scroll').length > 0 ){
			
			$('.pm-page-scroll').click(function(e){
								
				e.preventDefault();
				var $this = $(e.target);
				var sectionID = $this.attr('href');
				
				
				$('html, body').animate({
					scrollTop: $(sectionID).offset().top - 80
				}, 1000);
				
			});
			
		}
		
	
		
	/* ==========================================================================
	   Datepicker
	   ========================================================================== */
	   if($("#datepicker").length > 0){
		   $("#datepicker").datepicker();
	   }
	   
	/* ==========================================================================
	   Gallery Isotope activation
	   ========================================================================== */
	   if($("#gallery-posts").length > 0){
		  
		  $('#gallery-posts').imagesLoaded( function(){
			$('#gallery-posts').isotope({
			  itemSelector : '.isotope-item',
			});
			$('.isotope-item').css({
			  opacity : 1,
			});
		  });
		  
	   }
	   
		
	/* ==========================================================================
	   Isotope menu expander (mobile only)
	   ========================================================================== */
	   if($('.pm-isotope-filter-system-expand').length > 0){
		   
		   var totalHeight = 0;
		   
		   $('.pm-isotope-filter-system-expand').click(function(e) {
			   
			   var $this = $(this),
			   $parentUL = $this.parent('ul');
			   			   
			   //get the height of the total li elements
			   $parentUL.children('li').each(function(index, element) {
					totalHeight += $(this).height() + 5;
			   });
			   			   
			   if( !$parentUL.hasClass('expanded') ){
				   
				    //expand the menu
					$parentUL.addClass('expanded');
				   				  
				    $parentUL.css({
					  "height" : totalHeight	  
				    });
					
					$this.find('i').removeClass('fa-angle-down').addClass('fa-close');
				   
			   } else {
				
					//close the menu
					$parentUL.removeClass('expanded');
				   				  
				    $parentUL.css({
					  "height" : 94
				    });
					
					$this.find('i').removeClass('fa-close').addClass('fa-angle-down');
									   
			   }
			   
			   //reset totalheight
			   totalHeight = 0;
			   
		   });
		   
		   
		   $('.pm-isotope-filter-system').children().each(function(i,e) {
						
				if(i > 0){
					
					//add click functionality
					$(e).find('a').click(function(e) {
						
						e.preventDefault();
																	
						
											
						
						if( $(window).width() < 991 ){
							//Capture parent li index for list reordering
							var listItem = $(this).closest('li');
							var listItemIndex = $(this).closest('li').index();
							console.log( "Index: " +  listItemIndex );
							
							//$('.pm-isotope-filter-system').insertAfter(listItem, $('.pm-isotope-filter-system').find("li").index(0));
							
							$('.pm-isotope-filter-system').find("li").eq(0).after(listItem);
						}
											
					});
					
				}
							
				
			});
		   
		   
	   }//end of if
		
		
	/* ==========================================================================
	   Language Selector drop down
	   ========================================================================== */
		if($('.pm-dropdown.pm-language-selector-menu').length > 0){
			$('.pm-dropdown.pm-language-selector-menu').on('mouseover', methods.dropDownMenu).on('mouseleave', methods.dropDownMenu);
		}
		
	/* ==========================================================================
	   Filter system drop down
	   ========================================================================== */
		if($('.pm-dropdown.pm-filter-system').length > 0){
			$('.pm-dropdown.pm-filter-system').on('mouseover', methods.dropDownMenu).on('mouseleave', methods.dropDownMenu);
		}
		
	/* ==========================================================================
	   Categories system drop down
	   ========================================================================== */
		if($('.pm-dropdown.pm-categories-menu').length > 0){
			$('.pm-dropdown.pm-categories-menu').on('mouseover', methods.dropDownMenu).on('mouseleave', methods.dropDownMenu);
		}
		

		
	/* ==========================================================================
	   Main menu interaction
	   ========================================================================== */
		if( $('.pm-nav').length > 0 ){
						
			//superfish activation
			$('.pm-nav').superfish({
				delay: 0,
				animation: {opacity:'show',height:'show'},
				speed: 300,
				dropShadows: false,
			});
			
			$('.sf-sub-indicator').html('<i class="fa fa-angle-down"></i>');
			
			$('.sf-menu ul .sf-sub-indicator').html('<i class="fa fa-angle-right"></i>');
						
		};	
		
	/* ==========================================================================
	   Checkout expandable forms
	   ========================================================================== */
		if ($('#pm-returning-customer-form-trigger').length > 0){
			
			var $returningFormExpanded = false;
			
			$('#pm-returning-customer-form-trigger').on('click', function(e) {
				
				e.preventDefault();
				
				if( !$returningFormExpanded ) {
					$returningFormExpanded = true;
					$('#pm-returning-customer-form').fadeIn(700);
					
				} else {
					$returningFormExpanded = false;
					$('#pm-returning-customer-form').fadeOut(300);
				}
				
			});
			
		}
		
		if ($('#pm-promotional-code-form-trigger').length > 0){
			
			var $promotionFormExpanded = false;
			
			$('#pm-promotional-code-form-trigger').on('click', function(e) {
				
				e.preventDefault();
				
				if( !$promotionFormExpanded ) {
					$promotionFormExpanded = true;
					$('#pm-promotional-code-form').fadeIn(700);
					
				} else {
					$promotionFormExpanded = false;
					$('#pm-promotional-code-form').fadeOut(300);
				}
				
			});
			
		}

				
	/* ==========================================================================
	   isTouchDevice - return true if it is a touch device
	   ========================================================================== */
	
		function isTouchDevice() {
			return !!('ontouchstart' in window) || ( !! ('onmsgesturechange' in window) && !! window.navigator.maxTouchPoints);
		}
				
		
		//dont load parallax on mobile devices
		function runParallax() {
			
			//enforce check to make sure we are not on a mobile device
			if( !isMobile.any()){
							
				//stellar parallax
				$.stellar({
				  horizontalOffset: 0,
				  verticalOffset: 0,
				  horizontalScrolling: false,
				});
				
				$('.pm-parallax-panel').stellar();
				
								
			}
			
		}//end of function
		
	/* ==========================================================================
	   Checkout form - Account password activation
	   ========================================================================== */
	   
	   if( $('#pm-create-account-checkbox').length > 0){
			  			
			$('#pm-create-account-checkbox').change(function(e) {
				
				if( $('#pm-create-account-checkbox').is(':checked') ){
					
					$('#pm-checkout-password-field').fadeIn(500);
					
				} else {
					$('#pm-checkout-password-field').fadeOut(500);	
				}
				
			});
			   
	   }
	   
	   
	 /* ==========================================================================
	   Accordion and Tabs
	   ========================================================================== */
	   
	    $('#accordion').collapse({
		  toggle: false
		})
	    $('#accordion2').collapse({
		  toggle: false
		})
	   
		if($('.panel-title').length > 0){
			
			var $prevItem = null;
			var $currItem = null;
			
			$('.pm-accordion-link').click(function(e) {
				
				var $this = $(this);
				
				if($prevItem == null){
					$prevItem = $this;
					$currItem = $this;
				} else {
					$prevItem = $currItem;
					$currItem = $this;
				}				
				
				
				if( $currItem.attr('href') != $prevItem.attr('href') ) {
										
					//toggle previous item
					if( $prevItem.parent().find('i').hasClass('fa fa-minus') ){
						$prevItem.parent().find('i').removeClass('fa fa-minus').addClass('fa fa-plus');
					}
					
					$currItem.parent().find('i').removeClass('fa fa-plus').addClass('fa fa-minus');
					
				} else if($currItem.attr('href') == $prevItem.attr('href')) {
										
					//else toggle same item
					if( $currItem.parent().find('i').hasClass('fa fa-minus') ){
						$currItem.parent().find('i').removeClass('fa fa-minus').addClass('fa fa-plus');
					} else {
						$currItem.parent().find('i').removeClass('fa fa-plus').addClass('fa fa-minus');
					}
						
				} else {
					
					//console.log('toggle current item');
					$currItem.parent().find('i').removeClass('fa fa-plus').addClass('fa fa-minus');
					
				}
				
				
			});

			
		}
		
	/* ==========================================================================
	   Back to top button
	   ========================================================================== */
		$('#back-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});

		
	/* ==========================================================================
	   When the window is scrolled, do
	   ========================================================================== */
		$(window).scroll(function () {
			
			animateMilestones();
			animateProgressBars();
			
			//toggle back to top btn
			if ($(this).scrollTop() > 50) {
				if( support ) {
					$('#back-top').css({ bottom : 10 });
				} else {
					$('#back-top').animate({ bottom : 10 });
				}
			} else {
				if( support ) {
					$('#back-top').css({ bottom : -70 });
				} else {
					$('#back-top').animate({ bottom : -70 });
				}
			}
			
			//toggle fixed nav
			if( $(window).width() > 991 ){
				
				if ($(this).scrollTop() > 190) {
					
					$('.pm-nav-container').addClass('fixed');
									
				} else {
					
					$('.pm-nav-container').removeClass('fixed');
										
				}
			
			}
						
		});
		
	/* ==========================================================================
	   Detect page scrolls on buttons
	   ========================================================================== */
		if( $('.pm-page-scroll').length > 0 ){
			
			$('.pm-page-scroll').click(function(e){
								
				e.preventDefault();
				var $this = $(e.target);
				var sectionID = $this.attr('href');
				
				
				$('html, body').animate({
					scrollTop: $(sectionID).offset().top - 80
				}, 1000);
				
			});
			
		}

	
	/* ==========================================================================
	   Back to top button
	   ========================================================================== */
		$('#pm-back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
	/* ==========================================================================
	   Accordion menu
	   ========================================================================== */
		if($('#accordionMenu').length > 0){
			$('#accordionMenu').collapse({
				toggle: false,
				parent: false,
			});
		}
		
		
	/* ==========================================================================
	   Tab menu
	   ========================================================================== */
		if($('.pm-nav-tabs').length > 0){
			//actiavte first tab of tab menu
			$('.pm-nav-tabs a:first').tab('show');
			$('.pm-nav-tabs li:first-child').addClass('active');
		}

	/* ==========================================================================
	   Parallax check
	   ========================================================================== */
		var $window = $(window);
		var $windowsize = 0;
		
		function checkWidth() {
			$windowsize = $window.width();
			if ($windowsize < 980) {
				//if the window is less than 980px, destroy parallax...
				$.stellar('destroy');
			} else {
				runParallax();	
			}
		}
		
		// Execute on load
		checkWidth();
		// Bind event listener
		$(window).resize(checkWidth);

		
	/* ==========================================================================
	   Window resize call
	   ========================================================================== */
		$(window).resize(function(e) {
			methods.windowResize();
		});

		
	/* ==========================================================================
	   Tooltips
	   ========================================================================== */
		if( $('.pm_tip').length > 0 ){
			$('.pm_tip').PMToolTip();
		}
		if( $('.pm_tip_static_bottom').length > 0 ){
			$('.pm_tip_static_bottom').PMToolTip({
				floatType : 'staticBottom'
			});
		}
		if( $('.pm_tip_static_top').length > 0 ){
			$('.pm_tip_static_top').PMToolTip({
				floatType : 'staticTop'
			});
		}
		
	/* ==========================================================================
	   TinyNav
	   ========================================================================== */
		$(".pm-footer-navigation").tinyNav();
		
			
	}); //end of document ready

	
	/* ==========================================================================
	   Options
	   ========================================================================== */
		var options = {
			dropDownSpeed : 100,
			slideUpSpeed : 200,
			slideDownTabSpeed: 50,
			changeTabSpeed: 200,
		}
	
	/* ==========================================================================
	   Methods
	   ========================================================================== */
		var methods = {
			
			displayAppointmentForm : function(e) {
							
				var formContainer = $("#pm-appointment-form");
				
				var container = formContainer.find('.container');
				
				formContainer.css({
					'height' : container.height() + 50,
					'padding' : '20px 0',
					'borderTop' : '1px solid #34ceda',
					'borderBottom' : '1px solid #34ceda' 
				});
				
			},
			
			hideAppointmentForm : function(e) {
				
				var formContainer = $("#pm-appointment-form");
				
				formContainer.css({
					'height' : 0,
					'padding' : '0',
					'borderTop' : '0px solid #34ceda' ,
					'borderBottom' : '0px solid #34ceda' 
				});
				
			},

			
			dropDownMenu : function(e){  
					
				var body = $(this).find('> :last-child');
				var head = $(this).find('> :first-child');
				
				if (e.type == 'mouseover'){
					body.fadeIn(options.dropDownSpeed);
				} else {
					body.fadeOut(options.dropDownSpeed);
				}
				
			},
			
					
			windowResize : function() {
				//resize calls
			},
			
		};
		
	
	
})(jQuery);

