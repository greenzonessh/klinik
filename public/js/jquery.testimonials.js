/**
 * jquery.hoverPanel.js v1.0.0
 * http://www.pulsarmedia.ca
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Pulsar Media
 * http://www.pulsarmedia.ca
 */
;( function( $, window, undefined ) {

	'use strict';

	// global
	var Modernizr = window.Modernizr;
				
	var slideshowTimer = null;
	var slideShowPaused = false;

	$.PMTestimonials = function( options, element ) {
		this.$el = $( element );
		this._init( options );
	};

	// the options
	$.PMTestimonials.defaults = {
		// default panel type
		speed : 500,
		slideShow : false,
		slideShowSpeed : 1000,
		controlNav : false,
		arrows : true
	};

	$.PMTestimonials.prototype = {
		
		_init : function( options ) {
						
			var parent = this;
												
			// options
			this.options = $.extend( true, {}, $.PMTestimonials.defaults, options );
			
			this._config();
			
			this._initEvents();
									
		},
		
		_config : function() {
			
			// support for CSS Transitions & transforms
			this.support = Modernizr.csstransitions && Modernizr.csstransforms;
			this.support3d = Modernizr.csstransforms3d;
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

			if( this.support ) {
				this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.PMTestimonials';
				this.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];
				//console.log('this.transformName = ' + this.transformName);
			}
			
			this.$items = this.$el.find('ul').children('li');
			
			this.$items.eq(0).addClass('active');
			
			// total number of items
			this.itemsCount = this.$items.length;
			
			// current and old item´s index
			this.current = 0;
			this.old = 0;
			
			//check if the list is currently animating
			this.isAnimating = false;
			
			//check for bullets
			if(this.options.controlNav){
				
				// add bullets if there is more than 1 item
				if( this.itemsCount > 1 ) {
				
					var dots = '';
					var len = this.itemsCount;
					
					for( var i = 0; i < len; ++i ) {
						// current dot will have the class pm-currentDot
						var dot = i === this.current ? '<li><span class="pm-testimonial-active"></span></li>' : '<li><span></span></li>';
						dots += dot;
					}
					var navDots = $('#pm-testimonials-carousel-bullets').append(dots);
					
					this.$navDots = $('#pm-testimonials-carousel-bullets').children('li');
					
					//highlight the first bullet
					this.$navDots.eq(0).addClass( 'pm-testimonial-active' );
												
				}//end of add bullets
				
			}
			
			//check for arrows
			if(this.options.arrows && this.itemsCount > 1){
								
				//add arrows
				this.$el.prepend('<div class="pm-testimonials-arrows"><a href="#" class="fa fa-chevron-left" id="pm-testimonial-prev"></a><a href="#" class="fa fa-chevron-right" id="pm-testimonial-next"></a></div>');				
				
			} 
			
			//check for slideshow
			if(this.options.slideShow && this.itemsCount > 1){
						
				//run slideshow
				this._runSlideShow('start');
				
			}
			
			
			//initialize resize
			//this._resize();
			
			//resize container on window resize
			//$(window).resize(this._resize);
			
			
		},
		
		_initEvents : function() {
			
			var parent = this; 
			
			if( this.itemsCount > 1 ) {
								
				//activate bullets if enabled
				if(this.options.controlNav === true){
					this.$navDots.on( 'click', function() { 
						parent._jump( $(this).index() );
						if(parent.options.slideShow){
							parent._runSlideShow('pause');
						}
					});
				} 
				
				//active arrows
				if(this.options.arrows){
					parent._activateArrows();	
				}
				
			}
			
		},
		
		_activateArrows : function() {
			
			var parent = this;
			var old = this.old;
			var current = this.current;
			
			$('#pm-testimonial-next').click(function(e) {
                
				e.preventDefault();
				
				if(parent.options.slideShow){
					parent._runSlideShow('pause');
				}
				
				
				current++;
						
				if(current > parent.itemsCount - 1) {
					//set to first slide
					current = 0;
				}
				
				parent._jump(current);
				
				//console.log('current = ' + current + ' and old = ' + old);
				
				
            });
			
			$('#pm-testimonial-prev').click(function(e) {
                
				e.preventDefault();
				
				if(parent.options.slideShow){
					parent._runSlideShow('pause');
				}
				
				current--;
						
						
				if(current < 0) {
					//jump to last slide
					current = parent.itemsCount - 1;
				}
				
				parent._jump(current);
				
				//console.log('parent.current = ' + parent.current + ' and old = ' + old);
				
            });
			
			
		},
		
		_resize : function() {
			
			var parent = this;			
			
		},
		
		_runSlideShow : function(status) {
			
			var parent = this;
			
			switch(status) {
			
				case 'start' :
				
					//clear any previous instance of slideshowTimer first
					clearTimeout(slideshowTimer);
					slideShowPaused = false;
					
					slideshowTimer = setTimeout(function(){
						
						if(!parent.isAnimating){
							return parent._jump(parent.current + 1);
						}
						
					}, this.options.slideShowSpeed);
				
				break;
				
				case 'pause' :
					//clear slideshow
					clearTimeout(slideshowTimer);
					slideShowPaused = true;
				
				break;
				
			}
			
			
		},
		
		/*_toggleNavControls : function() {
				
			if( this.current >= this.itemsCount ){
				this.$navDots.eq( this.old ).removeClass( 'pm-testimonial-active' ).end().eq( 0 ).addClass( 'pm-testimonial-active' );
			} else {
				this.$navDots.eq( this.old ).removeClass( 'pm-testimonial-active' ).end().eq( this.current ).addClass( 'pm-testimonial-active' );
			}
				
		},*/
		
		_jump : function( position ) {
			
			//console.log('position = ' + position);
			
			var parent = this;
												
			// do nothing if clicking on the current dot, or if the list is currently moving
			if( position === this.current || this.isAnimating ) {
				return false;
			}
			
			this.isAnimating = true;
			
			if(this.options.slideShow){
				
				if(position > this.itemsCount - 1) {
					position = 0;
				}
				
			}
									
			this.old = this.current;
			this.current = position;
			
			this._fade();
						
			//this._toggleNavControls();
			
		},
		
		_fade : function() {
			
			var parent = this;
			
			//fade code
			var items = this.$items;
			var current = this.current;
			var old = this.old;
			var speed = this.options.speed;
						
			//fade out current testimonial
			items.eq(old).fadeOut(speed, fadeComplete);
			/*items.eq(old).find('.pm-testimonial-img').stop().animate({
				'marginTop' : 30	
			},750, 'swing');*/
			
			if(this.options.arrows) {
				
				$('#pm-testimonial-prev').animate({
					'marginLeft' : 20,
					'opacity' : 0	
				});
				
				$('#pm-testimonial-next').animate({
					'marginRight' : 20,
					'opacity' : 0	
				});
				
			}

			
			//fade in next testimonial
			function fadeComplete() {
				
				items.eq(old).removeClass('active');
				
				items.eq(current).fadeIn(speed, transitionendfn);
				items.eq(current).addClass('active');
				items.eq(current).find('.pm-testimonial-img').stop().animate({
					'marginTop' : 0	
				},750, 'swing');
				
				if(parent.options.arrows) {
					
				
					$('#pm-testimonial-prev').animate({
						'marginLeft' : 0,
						'opacity' : 1	
					});
					
					$('#pm-testimonial-next').animate({
						'marginRight' : 0,
						'opacity' : 1	
					});
					
				}

				
			}
			
			var transitionendfn = $.proxy( function() {
				this.isAnimating = false;	
				
				if(parent.options.slideShow){
					parent._runSlideShow('start');
				}		
						
			}, this );
			
		},
		
		destroy : function() {

			//add destroy code here
			
		}
	};

	var logError = function( message ) {
		if ( window.console ) {
			window.console.error( message );
		}
	};

	$.fn.PMTestimonials = function( options ) {
		
		if ( typeof options === 'string' ) {
			
			var args = Array.prototype.slice.call( arguments, 1 );
			this.each(function() {
				var instance = $.data( this, 'PMTestimonials' );
				if ( !instance ) {
					logError( "cannot call methods on PMTestimonials prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				}
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {
					logError( "no such method '" + options + "' for PMTestimonials instance" );
					return;
				}
				instance[ options ].apply( instance, args );
			});
			
		} else {
			
			this.each(function() {	
				var instance = $.data( this, 'PMTestimonials' );
				if ( instance ) {
					instance._init();
				}
				else {
					instance = $.data( this, 'PMTestimonials', new $.PMTestimonials( options, this ) );
				}
			});
		}
		
		return this;
		
	};

} )( jQuery, window );