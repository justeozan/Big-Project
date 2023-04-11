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