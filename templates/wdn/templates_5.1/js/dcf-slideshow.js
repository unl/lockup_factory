'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var DCFSlideshow = function () {
  function DCFSlideshow(slideshows, uls, openCaption, closeCaption) {
    _classCallCheck(this, DCFSlideshow);

    this.slideshows = slideshows;
    this.uls = uls;
    this.openCaptionEvent = openCaption;
    this.closeCaptionEvent = closeCaption;
  }

  // Caption visibility transition


  _createClass(DCFSlideshow, [{
    key: 'captionTransition',
    value: function captionTransition(event) {
      // Remove event listener and toggle visibility after caption has closed
      event.removeEventListener('transitionend', this.captionTransition, true);
      // Check if caption is already visible
      if (!event.classList.contains('dcf-invisible')) {
        // Add class to hide caption
        event.classList.add('dcf-invisible');
      }
    }

    // Add classes to the caption & button

  }, {
    key: 'captionClasses',
    value: function captionClasses(button, caption) {
      // Check if caption is already visible
      if (!caption.classList.contains('dcf-invisible')) {
        // Hide content
        caption.addEventListener('transitionend', this.captionTransition(caption), true);
        // Update ARIA attributes
        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('aria-label', 'Show caption');
        caption.setAttribute('aria-hidden', 'true');
        caption.classList.remove('dcf-opacity-1', 'dcf-pointer-events-auto');
        caption.classList.add('dcf-opacity-0', 'dcf-pointer-events-none', 'dcf-invisible');

        caption.dispatchEvent(this.openCaptionEvent);
      } else {
        // Remove class to show content
        caption.classList.remove('dcf-invisible');
        // Update ARIA attributes
        button.setAttribute('aria-expanded', 'true');
        button.setAttribute('aria-label', 'Hide caption');
        caption.setAttribute('aria-hidden', 'false');
        caption.classList.remove('dcf-invisible', 'dcf-opacity-0', 'dcf-pointer-events-none');
        caption.classList.add('dcf-opacity-1', 'dcf-pointer-events-auto');
        caption.dispatchEvent(this.closeCaptionEvent);
      }
    }

    // Functions for intersection observer.

  }, {
    key: 'scrollIt',
    value: function scrollIt(slideToShow, slides, slidedeck) {
      var scrollPos = Array.prototype.indexOf.call(slides, slideToShow) * (slidedeck.scrollWidth / slides.length);
      slidedeck.scrollLeft = scrollPos;
    }
  }, {
    key: 'showSlide',
    value: function showSlide(dir, slideshow, slides, slidedeck) {
      var visible = slideshow.querySelectorAll('.dcf-slideshow .visible');
      var index = dir === 'previous' ? DCFUtility.magicNumbers('int0') : DCFUtility.magicNumbers('int1');

      if (visible.length > DCFUtility.magicNumbers('int1')) {
        this.scrollIt(visible[index], slides, slidedeck);
      } else {
        var newSlide = index === DCFUtility.magicNumbers('int0') ? visible[DCFUtility.magicNumbers('int0')].previousElementSibling : visible[DCFUtility.magicNumbers('int0')].nextElementSibling;
        if (newSlide) {
          this.scrollIt(newSlide, slides, slidedeck);
        }
      }
    }
  }, {
    key: 'callback',
    value: function callback(slides) {
      Array.prototype.forEach.call(slides, function (entry) {
        entry.target.classList.remove('visible');
        var slide = entry.target.querySelector('div');
        slide.setAttribute('tabindex', '-1');
        if (!entry.intersectionRatio > DCFUtility.magicNumbers('int0')) {
          return;
        }
        var img = entry.target.querySelector('img');
        if (img.dataset.src) {
          img.setAttribute('src', img.dataset.src);
          img.removeAttribute('data-src');
        }
        entry.target.classList.add('visible');
        slide.removeAttribute('tabindex', '-1');
      });
    }
  }, {
    key: 'initialize',
    value: function initialize() {
      var _this = this;

      Array.prototype.forEach.call(this.slideshows, function (slideshow, slideshowIndex) {
        var slidedeck = _this.uls[slideshowIndex];
        var slides = slideshow.querySelectorAll('.dcf-slideshow li');
        var figures = slideshow.querySelectorAll('.dcf-slideshow figure');
        var captions = slideshow.querySelectorAll('.dcf-slideshow figcaption');
        var uuid = DCFUtility.uuidv4();
        var slideshowName = 'Slideshow ' + slideshowIndex;
        var slideAriaLabel = slideshow.getAttribute('aria-label');
        if (slideAriaLabel) {
          slideshowName = slideAriaLabel;
        }

        // Set a unique ID for each slideshow
        slideshow.setAttribute('id', uuid.concat('-slideshow'));

        // Add classes to slideshow unordered lists
        slidedeck.classList.add('dcf-slide-deck');

        // Create slideshow controls (previous/next slide buttons)
        var ctrls = document.createElement('ul');
        var ctrlPrevious = document.createElement('li');
        var ctrlNext = document.createElement('li');
        var ctrlPreviousButton = document.createElement('button');
        var ctrlNextButton = document.createElement('button');

        // Add classes to slideshow controls group (Keep in DCF)
        ctrls.classList.add('dcf-slideshow-controls', 'dcf-list-bare', 'dcf-btn-group', 'dcf-absolute', 'dcf-pin-right', 'dcf-pin-bottom', 'dcf-z-1');

        // Add role and aria-label to controls group
        ctrls.setAttribute('aria-label', slideshowName + ' controls');
        ctrls.setAttribute('role', 'list');

        ctrlPreviousButton.classList.add('dcf-btn', 'dcf-btn-primary', 'dcf-button-slide', 'dcf-btn-slide-prev');
        ctrlPreviousButton.setAttribute('aria-label', slideshowName + ' previous');

        ctrlNextButton.classList.add('dcf-btn', 'dcf-btn-primary', 'dcf-btn-slide', 'dcf-btn-slide-next');
        ctrlNextButton.setAttribute('aria-label', slideshowName + ' next');

        ctrlPrevious.setAttribute('id', uuid.concat('-previous'));
        ctrlPrevious.classList.add('dcf-li-slide-prev');
        ctrlNext.setAttribute('id', uuid.concat('-next'));
        ctrlNext.classList.add('dcf-li-slide-next');
        // Add relative class for absolute positioning of slideshow controls
        slideshow.classList.add('dcf-relative');
        // Append controls (previous/next slide) to slideshow
        ctrlPrevious.appendChild(ctrlPreviousButton);
        ctrlNext.appendChild(ctrlNextButton);
        ctrls.appendChild(ctrlPrevious);
        ctrls.appendChild(ctrlNext);
        slideshow.appendChild(ctrls);

        // Slides
        Array.prototype.forEach.call(slides, function (slide, slideIndex) {
          // Set unique ID for each slide
          slide.setAttribute('id', uuid.concat('-slide-', slideIndex));
          // Add classes to each slide
          slide.classList.add('dcf-slide', 'dcf-relative');
          slide.querySelector('div').setAttribute('tabindex', '-1');
        });

        Array.prototype.forEach.call(figures, function (figure, figureIndex) {
          var caption = captions[figureIndex];

          if (!(typeof caption == 'undefined')) {
            // Create button to show/hide caption
            var captionBtn = document.createElement('button');
            // Add classes to each caption toggle button
            captionBtn.classList.add('dcf-btn', 'dcf-btn-slide', 'dcf-btn-slide-caption');
            // Create a unique ID for each caption toggle button
            captionBtn.setAttribute('id', uuid.concat('-button-', figureIndex));
            // Add ARIA attributes to each caption toggle button
            captionBtn.setAttribute('aria-controls', uuid.concat('-caption-', figureIndex));
            captionBtn.setAttribute('aria-label', slideshowName + ' Show caption');
            captionBtn.setAttribute('aria-expanded', 'false');
            // Add class to each figure
            figure.classList.add('dcf-slide-figure');
            // Append caption toggle button to each figure
            figure.appendChild(captionBtn);
            // Style each caption
            // Might be something here!!!!!
            caption.classList.add('dcf-opacity-0', 'dcf-pointer-events-none', 'dcf-invisible', 'dcf-slide-caption', 'dcf-figcaption');
            // Create a unique ID for each caption
            caption.setAttribute('id', uuid.concat('-caption-', figureIndex));
            // Add ARIA attributes to each caption
            caption.setAttribute('aria-labelledby', uuid.concat('-button-', figureIndex));
            caption.setAttribute('aria-hidden', 'true');
          }
        });

        // WIP for Content slider:  https://codepen.io/heydon/pen/xPWOLp?editors=0010

        var observerSettings = {
          root: slideshow,
          rootMargin: '-10px'
        };
        if ('IntersectionObserver' in window) {
          var observer = new IntersectionObserver(_this.callback, observerSettings);
          Array.prototype.forEach.call(slides, function (elem) {
            observer.observe(elem);
          });
          ctrlPrevious.addEventListener('click', function () {
            _this.showSlide('previous', slideshow, slides, slidedeck);
          });

          ctrlNext.addEventListener('click', function () {
            _this.showSlide('next', slideshow, slides, slidedeck);
          });
        } else {
          Array.prototype.forEach.call(slides, function (slide) {
            var img = slide.querySelector('img');
            img.setAttribute('src', img.getAttribute('data-src'));
          });
        }
      });

      // Caption toggle buttons
      var buttons = document.querySelectorAll('.dcf-btn-slide-caption');
      [].forEach.call(buttons, function (button) {
        var caption = button.previousElementSibling;
        // Handle Click
        button.addEventListener('click', function (onClick) {
          _this.captionClasses(onClick.currentTarget, caption);
          return false;
        }, false);

        // Show caption when the 'space' key is pressed
        button.addEventListener('keydown', function (onSpace) {
          // Handle 'space' key
          if (onSpace.which === DCFUtility.magicNumbers('spaceKeyCode')) {
            onSpace.preventDefault();
            _this.captionClasses(onSpace.currentTarget, caption);
          }
        }, false);
      });
    }
  }]);

  return DCFSlideshow;
}();
