// File#: _1_parallax-image
// Usage: codyhouse.co/license
(function() {
    var ParallaxImg = function(element, rotationLevel) {
      this.element = element;
      this.figure = this.element.getElementsByClassName('js-parallax__wrapper')[0];
      this.imgs = this.element.getElementsByClassName('js-parallax__item');
      this.maxRotation = rotationLevel || 2; // rotate level
      this.scale = 1;
      this.animating = false;
      initParallax(this);
      initParallaxEvents(this);
    };
  
    function initParallax(element) {
      element.count = 0;
      window.requestAnimationFrame(checkImageLoaded.bind(element));
      // check if this is an image -> otherwise no need to check if loaded
      for(var i = 0; i < element.imgs.length; i++) {(function(i){
        var loaded = false;
        if(element.imgs[i].tagName.toLowerCase() != 'img') {
          element.count = element.count + 1;
          return;
        }
        element.imgs[i].addEventListener('load', function(){
          if(loaded) return;
          element.count = element.count + 1;
        });
        if(element.imgs[i].complete && !loaded) {
          loaded = true;
          element.count = element.count + 1;
        }
      })(i);}
  
      // set translateZ
      for(var i = 0; i < element.imgs.length; i++) {
        if(element.imgs[i].getAttribute('data-parallax-distance')) {
          element.imgs[i].style.transform = 'translateZ('+parseInt(element.imgs[i].getAttribute('data-parallax-distance')) + 'px'+')';
        }
      }
    };
  
    function checkImageLoaded() {
      if(this.count >= this.imgs.length) {
        initScale(this);
        if(this.loaded) {
          window.cancelAnimationFrame(this.loaded);
          this.loaded = false;
        }
      } else {
        this.loaded = window.requestAnimationFrame(checkImageLoaded.bind(this));
      }
    };
  
    function initScale(element) {
      var maxImgResize = getMaxScale(element);
      element.scale = maxImgResize/(Math.sin(Math.PI / 2 - element.maxRotation*Math.PI/180));
      element.figure.style.transform = 'scale('+element.scale+')';  
      element.element.classList.add('parallax--loaded');
    };
  
    function getMaxScale(element) {
      var minWidth = 0;
      var maxWidth = 0;
      for(var i = 0; i < element.imgs.length; i++) {
        var width = element.imgs[i].getBoundingClientRect().width;
        if(width < minWidth || i == 0 ) minWidth = width;
        if(width > maxWidth || i == 0 ) maxWidth = width;
      }
      var scale = Math.ceil(10*maxWidth/minWidth)/10;
      if(scale < 1.1) scale = 1.1;
      return scale;
    }
  
    function initParallaxEvents(element) {
      element.element.addEventListener('mousemove', function(event){
        if(element.animating) return;
        element.animating = true;
        window.requestAnimationFrame(moveImage.bind(element, event));
      });
    };
  
    function moveImage(event, timestamp) {
      var wrapperPosition = this.element.getBoundingClientRect();
      var rotateY = 2*(this.maxRotation/wrapperPosition.width)*(wrapperPosition.left - event.clientX + wrapperPosition.width/2);
      var rotateX = 2*(this.maxRotation/wrapperPosition.height)*(event.clientY - wrapperPosition.top - wrapperPosition.height/2);
  
      if(rotateY > this.maxRotation) rotateY = this.maxRotation;
          if(rotateY < -1*this.maxRotation) rotateY = -this.maxRotation;
          if(rotateX > this.maxRotation) rotateX = this.maxRotation;
      if(rotateX < -1*this.maxRotation) rotateX = -this.maxRotation;
      this.figure.style.transform = 'scale('+this.scale+') rotateX('+rotateX+'deg) rotateY('+rotateY+'deg)';
      this.animating = false;
    };
  
    window.ParallaxImg = ParallaxImg;
  
    //initialize the ParallaxImg objects
      var parallaxImgs = document.getElementsByClassName('js-parallax');
      if( parallaxImgs.length > 0) {
          for( var i = 0; i < parallaxImgs.length; i++) {
              (function(i){
          var rotationLevel = parallaxImgs[i].getAttribute('data-perspective');
          new ParallaxImg(parallaxImgs[i], rotationLevel);
        })(i);
          }
      };
}());


  //Sticky hero
if(!Util) function Util () {};

Util.hasClass = function(el, className) {
  return el.classList.contains(className);
};

Util.addClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.add(classList[0]);
  if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
};

Util.removeClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.remove(classList[0]);
  if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
};

Util.toggleClass = function(el, className, bool) {
  if(bool) Util.addClass(el, className);
  else Util.removeClass(el, className);
};

// File#: _1_sticky-hero
// Usage: codyhouse.co/license
(function() {
	var StickyBackground = function(element) {
		this.element = element;
		this.scrollingElement = this.element.getElementsByClassName('sticky-hero__content')[0];
		this.nextElement = this.element.nextElementSibling;
		this.scrollingTreshold = 0;
		this.nextTreshold = 0;
		initStickyEffect(this);
	};

	function initStickyEffect(element) {
		var observer = new IntersectionObserver(stickyCallback.bind(element), { threshold: [0, 0.1, 1] });
		observer.observe(element.scrollingElement);
		if(element.nextElement) observer.observe(element.nextElement);
	};

	function stickyCallback(entries, observer) {
		var threshold = entries[0].intersectionRatio.toFixed(1);
		(entries[0].target ==  this.scrollingElement)
			? this.scrollingTreshold = threshold
			: this.nextTreshold = threshold;

		Util.toggleClass(this.element, 'sticky-hero--media-is-fixed', (this.nextTreshold > 0 || this.scrollingTreshold > 0));
	};


	var stickyBackground = document.getElementsByClassName('js-sticky-hero'),
		intersectionObserverSupported = ('IntersectionObserver' in window && 'IntersectionObserverEntry' in window && 'intersectionRatio' in window.IntersectionObserverEntry.prototype);
	if(stickyBackground.length > 0 && intersectionObserverSupported) { // if IntersectionObserver is not supported, animations won't be triggeres
		for(var i = 0; i < stickyBackground.length; i++) {
			(function(i){ // if animations are enabled -> init the StickyBackground object
        if( Util.hasClass(stickyBackground[i], 'sticky-hero--overlay-layer') || Util.hasClass(stickyBackground[i], 'sticky-hero--scale')) new StickyBackground(stickyBackground[i]);
      })(i);
		}
	}
}());

//navbar apparition
if(!Util) function Util () {};

Util.addClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.add(classList[0]);
  if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
};

Util.removeClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.remove(classList[0]);
  if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
};

Util.toggleClass = function(el, className, bool) {
  if(bool) Util.addClass(el, className);
  else Util.removeClass(el, className);
};

// File#: _1_sticky-banner
// Usage: codyhouse.co/license
(function() {
  var StickyBanner = function(element) {
    this.element = element;
    this.offsetIn = 0;
    this.offsetOut = 0;
    this.targetIn = this.element.getAttribute('data-target-in') ? document.querySelector(this.element.getAttribute('data-target-in')) : false;
    this.targetOut = this.element.getAttribute('data-target-out') ? document.querySelector(this.element.getAttribute('data-target-out')) : false;
    this.reset = 0;
    // check if the window is the scrollable element
    this.dataElement = this.element.getAttribute('data-scrollable-element') || this.element.getAttribute('data-element');
    this.scrollElement = this.dataElement ? document.querySelector(this.dataElement) : window;
    if(!this.scrollElement) this.scrollElement = window;
    this.scrollingId = false;
    getBannerOffsets(this);
    initBanner(this);
  };

  function getBannerOffsets(element) { // get offset in and offset out values
    // update offsetIn
    element.offsetIn = 0;
    var windowTop = getScrollTop(element);

    if(element.targetIn) {
      var boundingClientRect = element.targetIn.getBoundingClientRect();
      element.offsetIn = boundingClientRect.top + windowTop + boundingClientRect.height;
    }
    var dataOffsetIn = element.element.getAttribute('data-offset-in');
    if(dataOffsetIn) {
      element.offsetIn = element.offsetIn + parseInt(dataOffsetIn);
    }
    // update offsetOut
    element.offsetOut = 0;
    if(element.targetOut) {
      var boundingClientRect = element.targetOut.getBoundingClientRect();
      element.offsetOut = boundingClientRect.top + windowTop - window.innerHeight;
    }
    var dataOffsetOut = element.element.getAttribute('data-offset-out');
    if(dataOffsetOut) {
      element.offsetOut = element.offsetOut + parseInt(dataOffsetOut);
    }
  };

  function initBanner(element) {
    resetBannerVisibility(element);

    element.element.addEventListener('resize-banner', function(){
      getBannerOffsets(element);
      resetBannerVisibility(element);
    });

    element.element.addEventListener('scroll-banner', function(){
      if(element.reset < 10) {
        getBannerOffsets(element);
        element.reset = element.reset + 1;
      }
      resetBannerVisibility(element);
    });

    if(element.dataElement && element.scrollElement) {
      // the scrollable element is different from the window - detect the scrolling
      element.scrollElement.addEventListener('scroll', function(event){
        if(element.scrollingId) return;
        element.scrollingId = true;
        window.requestAnimationFrame(function(){
          element.element.dispatchEvent(new CustomEvent('scroll-banner'));
          element.scrollingId = false;
        })
      });
    }
  };

  function resetBannerVisibility(element) {
    var scrollTop = getScrollTop(element),
      topTarget = false,
      bottomTarget = false;
    if(element.offsetIn <= scrollTop) {
      topTarget = true;
    }
    if(element.offsetOut == 0 || scrollTop < element.offsetOut) {
      bottomTarget = true;
    }

    Util.toggleClass(element.element, 'sticky-banner--visible', bottomTarget && topTarget);
  };

  function getScrollTop(element) {
    // the scrollable element could be different from the window element
    var windowTop = element.scrollElement.scrollTop || document.documentElement.scrollTop;
    if(!element.dataElement) windowTop = window.scrollY || document.documentElement.scrollTop;
    return windowTop;
  };

  //initialize the Sticky Banner objects
	var stckyBanner = document.getElementsByClassName('js-sticky-banner');
	if( stckyBanner.length > 0 ) {
		for( var i = 0; i < stckyBanner.length; i++) {
			(function(i){new StickyBanner(stckyBanner[i]);})(i);
    }
    
    // init scroll/resize
    var resizingId = false,
      scrollingId = false,
      resizeEvent = new CustomEvent('resize-banner'),
      scrollEvent = new CustomEvent('scroll-banner');
    
    window.addEventListener('resize', function(event){
      clearTimeout(resizingId);
      resizingId = setTimeout(function(){
        doneResizing(resizeEvent);
      }, 300);
    });

    window.addEventListener('scroll', function(event){
      if(scrollingId) return;
      scrollingId = true;
      window.requestAnimationFrame 
        ? window.requestAnimationFrame(function(){
          doneResizing(scrollEvent);
          scrollingId = false;
        })
        : setTimeout(function(){
          doneResizing(scrollEvent);
          scrollingId = false;
        }, 200);

      resizingId = setTimeout(function(){
        doneResizing(resizeEvent);
      }, 300);
    });

    function doneResizing(event) {
      for( var i = 0; i < stckyBanner.length; i++) {
        (function(i){stckyBanner[i].dispatchEvent(event)})(i);
      };
    };
	}
}());

if(!Util) function Util () {};

Util.osHasReducedMotion = function() {
  if(!window.matchMedia) return false;
  var matchMediaObj = window.matchMedia('(prefers-reduced-motion: reduce)');
  if(matchMediaObj) return matchMediaObj.matches;
  return false; 
};

// File#: _1_stacking-cards
// Usage: codyhouse.co/license
(function() {
  var StackCards = function(element) {
    this.element = element;
    this.items = this.element.getElementsByClassName('js-stack-cards__item');
    this.scrollingFn = false;
    this.scrolling = false;
    initStackCardsEffect(this); 
    initStackCardsResize(this); 
  };

  function initStackCardsEffect(element) { // use Intersection Observer to trigger animation
    setStackCards(element); // store cards CSS properties
		var observer = new IntersectionObserver(stackCardsCallback.bind(element), { threshold: [0, 1] });
		observer.observe(element.element);
  };

  function initStackCardsResize(element) { // detect resize to reset gallery
    element.element.addEventListener('resize-stack-cards', function(){
      setStackCards(element);
      animateStackCards.bind(element);
    });
  };
  
  function stackCardsCallback(entries) { // Intersection Observer callback
    if(entries[0].isIntersecting) {
      if(this.scrollingFn) return; // listener for scroll event already added
      stackCardsInitEvent(this);
    } else {
      if(!this.scrollingFn) return; // listener for scroll event already removed
      window.removeEventListener('scroll', this.scrollingFn);
      this.scrollingFn = false;
    }
  };
  
  function stackCardsInitEvent(element) {
    element.scrollingFn = stackCardsScrolling.bind(element);
    window.addEventListener('scroll', element.scrollingFn);
  };

  function stackCardsScrolling() {
    if(this.scrolling) return;
    this.scrolling = true;
    window.requestAnimationFrame(animateStackCards.bind(this));
  };

  function setStackCards(element) {
    // store wrapper properties
    element.marginY = getComputedStyle(element.element).getPropertyValue('--stack-cards-gap');
    getIntegerFromProperty(element); // convert element.marginY to integer (px value)
    element.elementHeight = element.element.offsetHeight;

    // store card properties
    var cardStyle = getComputedStyle(element.items[0]);
    element.cardTop = Math.floor(parseFloat(cardStyle.getPropertyValue('top')));
    element.cardHeight = Math.floor(parseFloat(cardStyle.getPropertyValue('height')));

    // store window property
    element.windowHeight = window.innerHeight;

    // reset margin + translate values
    if(isNaN(element.marginY)) {
      element.element.style.paddingBottom = '0px';
    } else {
      element.element.style.paddingBottom = (element.marginY*(element.items.length - 1))+'px';
    }

    for(var i = 0; i < element.items.length; i++) {
      if(isNaN(element.marginY)) {
        element.items[i].style.transform = 'none;';
      } else {
        element.items[i].style.transform = 'translateY('+element.marginY*i+'px)';
      }
    }
  };

  function getIntegerFromProperty(element) {
    var node = document.createElement('div');
    node.setAttribute('style', 'opacity:0; visbility: hidden;position: absolute; height:'+element.marginY);
    element.element.appendChild(node);
    element.marginY = parseInt(getComputedStyle(node).getPropertyValue('height'));
    element.element.removeChild(node);
  };

  function animateStackCards() {
    if(isNaN(this.marginY)) { // --stack-cards-gap not defined - do not trigger the effect
      this.scrolling = false;
      return; 
    }

    var top = this.element.getBoundingClientRect().top;

    if( this.cardTop - top + this.element.windowHeight - this.elementHeight - this.cardHeight + this.marginY + this.marginY*this.items.length > 0) { 
      this.scrolling = false;
      return;
    }

    for(var i = 0; i < this.items.length; i++) { // use only scale
      var scrolling = this.cardTop - top - i*(this.cardHeight+this.marginY);
      if(scrolling > 0) {  
        var scaling = i == this.items.length - 1 ? 1 : (this.cardHeight - scrolling*0.05)/this.cardHeight;
        this.items[i].style.transform = 'translateY('+this.marginY*i+'px) scale('+scaling+')';
      } else {
        this.items[i].style.transform = 'translateY('+this.marginY*i+'px)';
      }
    }

    this.scrolling = false;
  };

  // initialize StackCards object
  var stackCards = document.getElementsByClassName('js-stack-cards'),
    intersectionObserverSupported = ('IntersectionObserver' in window && 'IntersectionObserverEntry' in window && 'intersectionRatio' in window.IntersectionObserverEntry.prototype),
    reducedMotion = Util.osHasReducedMotion();
    
	if(stackCards.length > 0 && intersectionObserverSupported && !reducedMotion) { 
    var stackCardsArray = [];
		for(var i = 0; i < stackCards.length; i++) {
			(function(i){
        stackCardsArray.push(new StackCards(stackCards[i]));
      })(i);
    }
    
    var resizingId = false,
      customEvent = new CustomEvent('resize-stack-cards');
    
    window.addEventListener('resize', function() {
      clearTimeout(resizingId);
      resizingId = setTimeout(doneResizing, 500);
    });

    function doneResizing() {
      for( var i = 0; i < stackCardsArray.length; i++) {
        (function(i){stackCardsArray[i].element.dispatchEvent(customEvent)})(i);
      };
    };
	}
}());














// --------------------------------------------



if(!Util) function Util () {};

Util.hasClass = function(el, className) {
  return el.classList.contains(className);
};

Util.addClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.add(classList[0]);
  if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
};

Util.removeClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.remove(classList[0]);
  if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
};

Util.setAttributes = function(el, attrs) {
  for(var key in attrs) {
    el.setAttribute(key, attrs[key]);
  }
};

Util.moveFocus = function (element) {
  if( !element ) element = document.getElementsByTagName('body')[0];
  element.focus();
  if (document.activeElement !== element) {
    element.setAttribute('tabindex','-1');
    element.focus();
  }
};


Util.getIndexInArray = function(array, el) {
  return Array.prototype.indexOf.call(array, el);
};


Util.cssSupports = function(property, value) {
  return CSS.supports(property, value);
};

Util.extend = function() {
  var extended = {};
  var deep = false;
  var i = 0;
  var length = arguments.length;

  if ( Object.prototype.toString.call( arguments[0] ) === '[object Boolean]' ) {
    deep = arguments[0];
    i++;
  }

  var merge = function (obj) {
    for ( var prop in obj ) {
      if ( Object.prototype.hasOwnProperty.call( obj, prop ) ) {
        if ( deep && Object.prototype.toString.call(obj[prop]) === '[object Object]' ) {
          extended[prop] = extend( true, extended[prop], obj[prop] );
        } else {
          extended[prop] = obj[prop];
        }
      }
    }
  };

  for ( ; i < length; i++ ) {
    var obj = arguments[i];
    merge(obj);
  }

  return extended;
};

// File#: _2_slideshow
// Usage: codyhouse.co/license
(function() {
	var Slideshow = function(opts) {
		this.options = Util.extend(Slideshow.defaults , opts);
		this.element = this.options.element;
		this.items = this.element.getElementsByClassName('js-slideshow__item');
		this.controls = this.element.getElementsByClassName('js-slideshow__control'); 
		this.selectedSlide = 0;
		this.autoplayId = false;
		this.autoplayPaused = false;
		this.navigation = false;
		this.navCurrentLabel = false;
		this.ariaLive = false;
		this.moveFocus = false;
		this.animating = false;
		this.supportAnimation = Util.cssSupports('transition');
		this.animationOff = (!Util.hasClass(this.element, 'slideshow--transition-fade') && !Util.hasClass(this.element, 'slideshow--transition-slide') && !Util.hasClass(this.element, 'slideshow--transition-prx'));
		this.animationType = Util.hasClass(this.element, 'slideshow--transition-prx') ? 'prx' : 'slide';
		this.animatingClass = 'slideshow--is-animating';
		initSlideshow(this);
		initSlideshowEvents(this);
		initAnimationEndEvents(this);
	};

	Slideshow.prototype.showNext = function() {
		showNewItem(this, this.selectedSlide + 1, 'next');
	};

	Slideshow.prototype.showPrev = function() {
		showNewItem(this, this.selectedSlide - 1, 'prev');
	};

	Slideshow.prototype.showItem = function(index) {
		showNewItem(this, index, false);
	};

	Slideshow.prototype.startAutoplay = function() {
		var self = this;
		if(this.options.autoplay && !this.autoplayId && !this.autoplayPaused) {
			self.autoplayId = setInterval(function(){
				self.showNext();
			}, self.options.autoplayInterval);
		}
	};

	Slideshow.prototype.pauseAutoplay = function() {
		var self = this;
		if(this.options.autoplay) {
			clearInterval(self.autoplayId);
			self.autoplayId = false;
		}
	};

	function initSlideshow(slideshow) { // basic slideshow settings
		// if no slide has been selected -> select the first one
		if(slideshow.element.getElementsByClassName('slideshow__item--selected').length < 1) Util.addClass(slideshow.items[0], 'slideshow__item--selected');
		slideshow.selectedSlide = Util.getIndexInArray(slideshow.items, slideshow.element.getElementsByClassName('slideshow__item--selected')[0]);
		// create an element that will be used to announce the new visible slide to SR
		var srLiveArea = document.createElement('div');
		Util.setAttributes(srLiveArea, {'class': 'sr-only js-slideshow__aria-live', 'aria-live': 'polite', 'aria-atomic': 'true'});
		slideshow.element.appendChild(srLiveArea);
		slideshow.ariaLive = srLiveArea;
	};

	function initSlideshowEvents(slideshow) {
		// if slideshow navigation is on -> create navigation HTML and add event listeners
		if(slideshow.options.navigation) {
			// check if navigation has already been included
			if(slideshow.element.getElementsByClassName('js-slideshow__navigation').length == 0) {
				var navigation = document.createElement('ol'),
					navChildren = '';

				var navClasses = slideshow.options.navigationClass+' js-slideshow__navigation';
				if(slideshow.items.length <= 1) {
					navClasses = navClasses + ' hidden';
				}
				
				navigation.setAttribute('class', navClasses);
				for(var i = 0; i < slideshow.items.length; i++) {
					var className = (i == slideshow.selectedSlide) ? 'class="'+slideshow.options.navigationItemClass+' '+slideshow.options.navigationItemClass+'--selected js-slideshow__nav-item"' :  'class="'+slideshow.options.navigationItemClass+' js-slideshow__nav-item"',
						navCurrentLabel = (i == slideshow.selectedSlide) ? '<span class="sr-only js-slideshow__nav-current-label">Current Item</span>' : '';
					navChildren = navChildren + '<li '+className+'><button class="reset"><span class="sr-only">'+ (i+1) + '</span>'+navCurrentLabel+'</button></li>';
				}
				navigation.innerHTML = navChildren;
				slideshow.element.appendChild(navigation);
			}
			
			slideshow.navCurrentLabel = slideshow.element.getElementsByClassName('js-slideshow__nav-current-label')[0]; 
			slideshow.navigation = slideshow.element.getElementsByClassName('js-slideshow__nav-item');

			var dotsNavigation = slideshow.element.getElementsByClassName('js-slideshow__navigation')[0];

			dotsNavigation.addEventListener('click', function(event){
				navigateSlide(slideshow, event, true);
			});
			dotsNavigation.addEventListener('keyup', function(event){
				navigateSlide(slideshow, event, (event.key.toLowerCase() == 'enter'));
			});
		}
		// slideshow arrow controls
		if(slideshow.controls.length > 0) {
			// hide controls if one item available
			if(slideshow.items.length <= 1) {
				Util.addClass(slideshow.controls[0], 'hidden');
				Util.addClass(slideshow.controls[1], 'hidden');
			}
			slideshow.controls[0].addEventListener('click', function(event){
				event.preventDefault();
				slideshow.showPrev();
				updateAriaLive(slideshow);
			});
			slideshow.controls[1].addEventListener('click', function(event){
				event.preventDefault();
				slideshow.showNext();
				updateAriaLive(slideshow);
			});
		}
		// swipe events
		if(slideshow.options.swipe) {
			//init swipe
			new SwipeContent(slideshow.element);
			slideshow.element.addEventListener('swipeLeft', function(event){
				slideshow.showNext();
			});
			slideshow.element.addEventListener('swipeRight', function(event){
				slideshow.showPrev();
			});
		}
		// autoplay
		if(slideshow.options.autoplay) {
			slideshow.startAutoplay();
			// pause autoplay if user is interacting with the slideshow
			if(!slideshow.options.autoplayOnHover) {
				slideshow.element.addEventListener('mouseenter', function(event){
					slideshow.pauseAutoplay();
					slideshow.autoplayPaused = true;
				});
				slideshow.element.addEventListener('mouseleave', function(event){
					slideshow.autoplayPaused = false;
					slideshow.startAutoplay();
				});
			}
			if(!slideshow.options.autoplayOnFocus) {
				slideshow.element.addEventListener('focusin', function(event){
					slideshow.pauseAutoplay();
					slideshow.autoplayPaused = true;
				});
				slideshow.element.addEventListener('focusout', function(event){
					slideshow.autoplayPaused = false;
					slideshow.startAutoplay();
				});
			}
		}
		// detect if external buttons control the slideshow
		var slideshowId = slideshow.element.getAttribute('id');
		if(slideshowId) {
			var externalControls = document.querySelectorAll('[data-controls="'+slideshowId+'"]');
			for(var i = 0; i < externalControls.length; i++) {
				(function(i){externalControlSlide(slideshow, externalControls[i]);})(i);
			}
		}
		// custom event to trigger selection of a new slide element
		slideshow.element.addEventListener('selectNewItem', function(event){
			// check if slide is already selected
			if(event.detail) {
				if(event.detail - 1 == slideshow.selectedSlide) return;
				showNewItem(slideshow, event.detail - 1, false);
			}
		});

		// keyboard navigation
		slideshow.element.addEventListener('keydown', function(event){
			if(event.keyCode && event.keyCode == 39 || event.key && event.key.toLowerCase() == 'arrowright') {
				slideshow.showNext();
			} else if(event.keyCode && event.keyCode == 37 || event.key && event.key.toLowerCase() == 'arrowleft') {
				slideshow.showPrev();
			}
		});
	};

	function navigateSlide(slideshow, event, keyNav) { 
		// user has interacted with the slideshow navigation -> update visible slide
		var target = ( Util.hasClass(event.target, 'js-slideshow__nav-item') ) ? event.target : event.target.closest('.js-slideshow__nav-item');
		if(keyNav && target && !Util.hasClass(target, 'slideshow__nav-item--selected')) {
			slideshow.showItem(Util.getIndexInArray(slideshow.navigation, target));
			slideshow.moveFocus = true;
			updateAriaLive(slideshow);
		}
	};

	function initAnimationEndEvents(slideshow) {
		// remove animation classes at the end of a slide transition
		for( var i = 0; i < slideshow.items.length; i++) {
			(function(i){
				slideshow.items[i].addEventListener('animationend', function(){resetAnimationEnd(slideshow, slideshow.items[i]);});
				slideshow.items[i].addEventListener('transitionend', function(){resetAnimationEnd(slideshow, slideshow.items[i]);});
			})(i);
		}
	};

	function resetAnimationEnd(slideshow, item) {
		setTimeout(function(){ // add a delay between the end of animation and slideshow reset - improve animation performance
			if(Util.hasClass(item,'slideshow__item--selected')) {
				if(slideshow.moveFocus) Util.moveFocus(item);
				emitSlideshowEvent(slideshow, 'newItemVisible', slideshow.selectedSlide);
				slideshow.moveFocus = false;
			}
			Util.removeClass(item, 'slideshow__item--'+slideshow.animationType+'-out-left slideshow__item--'+slideshow.animationType+'-out-right slideshow__item--'+slideshow.animationType+'-in-left slideshow__item--'+slideshow.animationType+'-in-right');
			item.removeAttribute('aria-hidden');
			slideshow.animating = false;
			Util.removeClass(slideshow.element, slideshow.animatingClass); 
		}, 100);
	};

	function showNewItem(slideshow, index, bool) {
		if(slideshow.items.length <= 1) return;
		if(slideshow.animating && slideshow.supportAnimation) return;
		slideshow.animating = true;
		Util.addClass(slideshow.element, slideshow.animatingClass); 
		if(index < 0) index = slideshow.items.length - 1;
		else if(index >= slideshow.items.length) index = 0;
		// skip slideshow item if it is hidden
		if(bool && Util.hasClass(slideshow.items[index], 'hidden')) {
			slideshow.animating = false;
			index = bool == 'next' ? index + 1 : index - 1;
			showNewItem(slideshow, index, bool);
			return;
		}
		// index of new slide is equal to index of slide selected item
		if(index == slideshow.selectedSlide) {
			slideshow.animating = false;
			return;
		}
		var exitItemClass = getExitItemClass(slideshow, bool, slideshow.selectedSlide, index);
		var enterItemClass = getEnterItemClass(slideshow, bool, slideshow.selectedSlide, index);
		// transition between slides
		if(!slideshow.animationOff) Util.addClass(slideshow.items[slideshow.selectedSlide], exitItemClass);
		Util.removeClass(slideshow.items[slideshow.selectedSlide], 'slideshow__item--selected');
		slideshow.items[slideshow.selectedSlide].setAttribute('aria-hidden', 'true'); //hide to sr element that is exiting the viewport
		if(slideshow.animationOff) {
			Util.addClass(slideshow.items[index], 'slideshow__item--selected');
		} else {
			Util.addClass(slideshow.items[index], enterItemClass+' slideshow__item--selected');
		}
		// reset slider navigation appearance
		resetSlideshowNav(slideshow, index, slideshow.selectedSlide);
		slideshow.selectedSlide = index;
		// reset autoplay
		slideshow.pauseAutoplay();
		slideshow.startAutoplay();
		// reset controls/navigation color themes
		resetSlideshowTheme(slideshow, index);
		// emit event
		emitSlideshowEvent(slideshow, 'newItemSelected', slideshow.selectedSlide);
		if(slideshow.animationOff) {
			slideshow.animating = false;
			Util.removeClass(slideshow.element, slideshow.animatingClass);
		}
	};

	function getExitItemClass(slideshow, bool, oldIndex, newIndex) {
		var className = '';
		if(bool) {
			className = (bool == 'next') ? 'slideshow__item--'+slideshow.animationType+'-out-right' : 'slideshow__item--'+slideshow.animationType+'-out-left'; 
		} else {
			className = (newIndex < oldIndex) ? 'slideshow__item--'+slideshow.animationType+'-out-left' : 'slideshow__item--'+slideshow.animationType+'-out-right';
		}
		return className;
	};

	function getEnterItemClass(slideshow, bool, oldIndex, newIndex) {
		var className = '';
		if(bool) {
			className = (bool == 'next') ? 'slideshow__item--'+slideshow.animationType+'-in-right' : 'slideshow__item--'+slideshow.animationType+'-in-left'; 
		} else {
			className = (newIndex < oldIndex) ? 'slideshow__item--'+slideshow.animationType+'-in-left' : 'slideshow__item--'+slideshow.animationType+'-in-right';
		}
		return className;
	};

	function resetSlideshowNav(slideshow, newIndex, oldIndex) {
		if(slideshow.navigation) {
			Util.removeClass(slideshow.navigation[oldIndex], 'slideshow__nav-item--selected');
			Util.addClass(slideshow.navigation[newIndex], 'slideshow__nav-item--selected');
			slideshow.navCurrentLabel.parentElement.removeChild(slideshow.navCurrentLabel);
			slideshow.navigation[newIndex].getElementsByTagName('button')[0].appendChild(slideshow.navCurrentLabel);
		}
	};

	function resetSlideshowTheme(slideshow, newIndex) {
		var dataTheme = slideshow.items[newIndex].getAttribute('data-theme');
		if(dataTheme) {
			if(slideshow.navigation) slideshow.navigation[0].parentElement.setAttribute('data-theme', dataTheme);
			if(slideshow.controls[0]) slideshow.controls[0].parentElement.setAttribute('data-theme', dataTheme);
		} else {
			if(slideshow.navigation) slideshow.navigation[0].parentElement.removeAttribute('data-theme');
			if(slideshow.controls[0]) slideshow.controls[0].parentElement.removeAttribute('data-theme');
		}
	};

	function emitSlideshowEvent(slideshow, eventName, detail) {
		var event = new CustomEvent(eventName, {detail: detail});
		slideshow.element.dispatchEvent(event);
	};

	function updateAriaLive(slideshow) {
		slideshow.ariaLive.innerHTML = 'Item '+(slideshow.selectedSlide + 1)+' of '+slideshow.items.length;
	};

	function externalControlSlide(slideshow, button) { // control slideshow using external element
		button.addEventListener('click', function(event){
			var index = button.getAttribute('data-index');
			if(!index || index == slideshow.selectedSlide + 1) return;
			event.preventDefault();
			showNewItem(slideshow, index - 1, false);
		});
	};

	Slideshow.defaults = {
    element : '',
    navigation : true,
    autoplay : false,
		autoplayOnHover: false,
		autoplayOnFocus: false,
    autoplayInterval: 5000,
		navigationItemClass: 'slideshow__nav-item',
    navigationClass: 'slideshow__navigation',
    swipe: false
  };

	window.Slideshow = Slideshow;
	
	//initialize the Slideshow objects
	var slideshows = document.getElementsByClassName('js-slideshow');
	if( slideshows.length > 0 ) {
		for( var i = 0; i < slideshows.length; i++) {
			(function(i){
				var navigation = (slideshows[i].getAttribute('data-navigation') && slideshows[i].getAttribute('data-navigation') == 'off') ? false : true,
					autoplay = (slideshows[i].getAttribute('data-autoplay') && slideshows[i].getAttribute('data-autoplay') == 'on') ? true : false,
					autoplayOnHover = (slideshows[i].getAttribute('data-autoplay-hover') && slideshows[i].getAttribute('data-autoplay-hover') == 'on') ? true : false,
					autoplayOnFocus = (slideshows[i].getAttribute('data-autoplay-focus') && slideshows[i].getAttribute('data-autoplay-focus') == 'on') ? true : false,
					autoplayInterval = (slideshows[i].getAttribute('data-autoplay-interval')) ? slideshows[i].getAttribute('data-autoplay-interval') : 5000,
					swipe = (slideshows[i].getAttribute('data-swipe') && slideshows[i].getAttribute('data-swipe') == 'on') ? true : false,
					navigationItemClass = slideshows[i].getAttribute('data-navigation-item-class') ? slideshows[i].getAttribute('data-navigation-item-class') : 'slideshow__nav-item',
          navigationClass = slideshows[i].getAttribute('data-navigation-class') ? slideshows[i].getAttribute('data-navigation-class') : 'slideshow__navigation';
				new Slideshow({element: slideshows[i], navigation: navigation, autoplay : autoplay, autoplayOnHover: autoplayOnHover, autoplayOnFocus: autoplayOnFocus, autoplayInterval : autoplayInterval, swipe : swipe, navigationItemClass: navigationItemClass, navigationClass: navigationClass});
			})(i);
		}
	}
}());