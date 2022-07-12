define(["exports", "./dcf-utility"], function (_exports, _dcfUtility) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFSlideshowTheme = _exports.DCFSlideshow = void 0;

  function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

  function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

  function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

  function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

  function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

  function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var SlideshowObj = /*#__PURE__*/function () {
    function SlideshowObj(slideshow, slideshowIndex, source) {
      var _this = this;

      _classCallCheck(this, SlideshowObj);

      this.slideshow = slideshow;
      this.slideshowIndex = slideshowIndex;
      this.source = source;
      this.theme = this.source.theme;
      this.scrollInterval = null;
      this.scrollRate = 3000;

      if (this.slideshow.dataset.rate) {
        this.scrollRate = this.slideshow.dataset.rate;
      }

      this.paused = true;
      this.userPaused = true;
      this.paused = true;
      this.slideDeck = this.slideshow.querySelector('ul');
      this.uuid = _dcfUtility.DCFUtility.uuidv4();
      this.slideTransition = this.slideshow.dataset.transition;
      this.slideTransition = null; // disable transitions for now

      this.slideshowName = "Slideshow ".concat(this.slideshowIndex);
      this.slideAriaLabel = this.slideshow.getAttribute('aria-label');

      if (this.slideAriaLabel) {
        this.slideshowName = this.slideAriaLabel;
      } // Set a unique ID for each slideshow


      this.slideshow.setAttribute('id', this.uuid.concat('-slideshow')); // Set slideshow tabindex

      this.slideDeck.setAttribute('tabindex', '0'); // Add classes to slideshow unordered lists

      this.slideDeck.classList.add('dcf-slide-deck'); // Listeners

      var eventPause = function eventPause() {
        if (!_this.paused) {
          _this.pause();
        }
      };

      this.slideDeck.addEventListener('mouseover', eventPause.bind(this.slideDeck), false);

      var eventPlay = function eventPlay() {
        if (_this.paused && !_this.userPaused) {
          _this.play();
        }
      };

      this.slideDeck.addEventListener('mouseout', eventPlay.bind(this.slideDeck), false);
      this.slideDeck.addEventListener('keydown', function (keydownEvent) {
        var slideDeck = keydownEvent.target;

        if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowDown')) || _dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('keyC'))) {
          var visibleSlide = slideDeck.querySelector('.dcf-visible');

          if (visibleSlide) {
            var captionBtn = visibleSlide.querySelector('figure button');

            if (captionBtn) {
              captionBtn.focus();

              if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('keyC'))) {
                captionBtn.click();
              }

              keydownEvent.preventDefault();
            }
          }
        } else if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowLeft'))) {
          keydownEvent.preventDefault();

          _this.showSlide('previous');
        } else if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowRight'))) {
          keydownEvent.preventDefault();

          _this.showSlide('next');
        }
      }, false);
    }

    _createClass(SlideshowObj, [{
      key: "pause",
      value: function pause() {
        this.paused = true;
        clearInterval(this.scrollInterval);
      }
    }, {
      key: "play",
      value: function play() {
        this.paused = false;
        this.scrollInterval = setInterval(this.scroll.bind(this), this.scrollRate);
      }
    }, {
      key: "firstSlide",
      value: function firstSlide() {
        return this.slides[_dcfUtility.DCFUtility.magicNumbers('int0')];
      }
    }, {
      key: "lastSlide",
      value: function lastSlide() {
        var index = this.slides.length > _dcfUtility.DCFUtility.magicNumbers('int1') ? this.slides.length - _dcfUtility.DCFUtility.magicNumbers('int1') : _dcfUtility.DCFUtility.magicNumbers('int0');
        return this.slides[index];
      }
    }, {
      key: "scroll",
      value: function scroll() {
        var visible = this.slideshow.querySelectorAll('.dcf-visible');

        if (visible[_dcfUtility.DCFUtility.magicNumbers('int0')].nextElementSibling) {
          this.showSlide('next');
        } else {
          // At end of slides, so show first
          if (this.slideTransition) {
            var currentSlide = visible[_dcfUtility.DCFUtility.magicNumbers('int0')];

            this.toggleSlideTransition(currentSlide, this.firstSlide());
          }

          this.scrollIt(this.firstSlide());
        }
      }
    }, {
      key: "shuffleSlides",
      value: function shuffleSlides() {
        var currentIndex = this.slides.length;
        var slideContent = '';

        var randomIndex = _dcfUtility.DCFUtility.magicNumbers('int0');

        while (_dcfUtility.DCFUtility.magicNumbers('int0') !== currentIndex) {
          randomIndex = Math.floor(Math.random() * currentIndex);
          currentIndex = currentIndex - _dcfUtility.DCFUtility.magicNumbers('int1');
          slideContent = this.slides[currentIndex].innerHTML;
          this.slides[currentIndex].innerHTML = this.slides[randomIndex].innerHTML;
          this.slides[randomIndex].innerHTML = slideContent;
        }
      }
    }, {
      key: "initTransitionPanel",
      value: function initTransitionPanel() {
        if (!this.slideTransition) {
          return;
        }

        this.panel = document.createElement('div'); // Add classes to panel

        this.panel.classList.add('dcf-slideshow-transition-panel', 'dcf-invisible', 'dcf-absolute', 'dcf-vh-100%', 'dcf-vw-100%', 'dcf-overflow-hidden'); // Add role and aria-label to controls group

        this.panel.setAttribute('aria-hidden', 'true');
        this.panel.setAttribute('style', 'top: 0; left:0');
        this.theme.slideToggleTransition(this.panel);
        this.slideshow.appendChild(this.panel);
      }
    }, {
      key: "initControls",
      value: function initControls() {
        var _this2 = this;

        // Create slideshow controls (previous/next slide buttons)
        var ctrls = document.createElement('ul');
        this.ctrlPrevious = document.createElement('li');
        this.ctrlNext = document.createElement('li');
        this.ctrlPreviousButton = document.createElement('button');
        this.ctrlNextButton = document.createElement('button');
        this.allowPlay = this.slideshow.hasAttribute('data-play') && (this.slideshow.dataset.play.toLowerCase() === 'true' || this.slideshow.dataset.play.toLowerCase() === 'auto');

        if (this.allowPlay) {
          this.ctrlPlayToggle = document.createElement('li');
          this.ctrlPlayToggleButton = document.createElement('button');
          this.ctrlPlayToggleButton.classList.add('dcf-btn', 'dcf-btn-primary', 'dcf-btn-slide', 'dcf-btn-slide-prev');

          if (this.theme.slidePlayToggleBtnClassList) {
            var _this$ctrlPlayToggleB;

            (_this$ctrlPlayToggleB = this.ctrlPlayToggleButton.classList).add.apply(_this$ctrlPlayToggleB, _toConsumableArray(this.theme.slidePlayToggleBtnClassList));
          }

          if (this.theme.slideBtnClassList) {
            var _this$ctrlPlayToggleB2;

            (_this$ctrlPlayToggleB2 = this.ctrlPlayToggleButton.classList).add.apply(_this$ctrlPlayToggleB2, _toConsumableArray(this.theme.slideBtnClassList));
          }

          if (this.theme.slidePlayBtnInnerHTML) {
            this.ctrlPlayToggleButton.innerHTML = this.theme.slidePlayBtnInnerHTML;
          }

          this.ctrlPlayToggleButton.setAttribute('aria-label', "".concat(this.slideshowName, " play toggle"));
          this.ctrlPlayToggle.setAttribute('id', this.uuid.concat('-play-toggle'));
          this.ctrlPlayToggle.classList.add('dcf-li-slide-play-toggle');
          this.ctrlPlayToggle.appendChild(this.ctrlPlayToggleButton);
          this.ctrlPlayToggleButton.addEventListener('click', function () {
            if (!_this2.paused) {
              _this2.pause();

              _this2.userPaused = true;
            } else {
              _this2.play();

              _this2.userPaused = false;
            }

            _this2.ctrlPlayToggleButton.innerHTML = _this2.paused ? _this2.theme.slidePlayBtnInnerHTML : _this2.theme.slidePauseBtnInnerHTML;
          }, false);
          this.ctrlPlayToggleButton.addEventListener('keydown', function (keydownEvent) {
            if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowUp'))) {
              keydownEvent.preventDefault();

              _this2.slideDeck.focus();
            }
          }, false);
        } // Add classes to slideshow controls group (Keep in DCF)


        ctrls.classList.add('dcf-slideshow-controls', 'dcf-list-bare', 'dcf-btn-group', 'dcf-absolute', 'dcf-pin-right', 'dcf-pin-bottom', 'dcf-z-1'); // Add role and aria-label to controls group

        ctrls.setAttribute('aria-label', "".concat(this.slideshowName, " controls"));
        ctrls.setAttribute('role', 'list');
        this.ctrlPreviousButton.classList.add('dcf-btn', 'dcf-btn-primary', 'dcf-btn-slide', 'dcf-btn-slide-prev');

        if (this.theme.slidePrevBtnClassList) {
          var _this$ctrlPreviousBut;

          (_this$ctrlPreviousBut = this.ctrlPreviousButton.classList).add.apply(_this$ctrlPreviousBut, _toConsumableArray(this.theme.slidePrevBtnClassList));
        }

        if (this.theme.slideBtnClassList) {
          var _this$ctrlPreviousBut2;

          (_this$ctrlPreviousBut2 = this.ctrlPreviousButton.classList).add.apply(_this$ctrlPreviousBut2, _toConsumableArray(this.theme.slideBtnClassList));
        }

        if (this.theme.slidePrevBtnInnerHTML) {
          this.ctrlPreviousButton.innerHTML = this.theme.slidePrevBtnInnerHTML;
        }

        this.ctrlPreviousButton.setAttribute('aria-label', "".concat(this.slideshowName, " previous"));
        this.ctrlNextButton.classList.add('dcf-btn', 'dcf-btn-primary', 'dcf-btn-slide', 'dcf-btn-slide-next');

        if (this.theme.slideNextBtnClassList) {
          var _this$ctrlNextButton$;

          (_this$ctrlNextButton$ = this.ctrlNextButton.classList).add.apply(_this$ctrlNextButton$, _toConsumableArray(this.theme.slideNextBtnClassList));
        }

        if (this.theme.slideBtnClassList) {
          var _this$ctrlNextButton$2;

          (_this$ctrlNextButton$2 = this.ctrlNextButton.classList).add.apply(_this$ctrlNextButton$2, _toConsumableArray(this.theme.slideBtnClassList));
        }

        if (this.theme.slideNextBtnInnerHTML) {
          this.ctrlNextButton.innerHTML = this.theme.slideNextBtnInnerHTML;
        }

        this.ctrlNextButton.setAttribute('aria-label', "".concat(this.slideshowName, " next"));
        this.ctrlPrevious.setAttribute('id', this.uuid.concat('-previous'));
        this.ctrlPrevious.classList.add('dcf-li-slide-prev');
        this.ctrlNext.setAttribute('id', this.uuid.concat('-next'));
        this.ctrlNext.classList.add('dcf-li-slide-next'); // Add relative class for absolute positioning of slideshow controls

        this.slideshow.classList.add('dcf-relative'); // Append controls (previous/next slide) to slideshow

        this.ctrlPrevious.appendChild(this.ctrlPreviousButton);
        this.ctrlNext.appendChild(this.ctrlNextButton);
        ctrls.appendChild(this.ctrlPrevious);

        if (this.allowPlay) {
          ctrls.appendChild(this.ctrlPlayToggle);
        }

        ctrls.appendChild(this.ctrlNext);
        this.slideshow.appendChild(ctrls);

        if (this.allowPlay && this.slideshow.dataset.play.toLowerCase() === 'auto') {
          this.ctrlPlayToggleButton.click();
        }

        this.ctrlPrevious.addEventListener('click', function () {
          _this2.showSlide('previous');
        }, false);
        this.ctrlPrevious.addEventListener('keydown', function (keydownEvent) {
          if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowUp'))) {
            keydownEvent.preventDefault();

            _this2.slideDeck.focus();
          }
        }, false);
        this.ctrlNext.addEventListener('click', function () {
          _this2.showSlide('next');
        }, false);
        this.ctrlNext.addEventListener('keydown', function (keydownEvent) {
          if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowUp'))) {
            keydownEvent.preventDefault();

            _this2.slideDeck.focus();
          }
        }, false);
      }
    }, {
      key: "initSlides",
      value: function initSlides() {
        var _this3 = this;

        Array.prototype.forEach.call(this.slides, function (slide, slideIndex) {
          slide.setAttribute('id', _this3.uuid.concat('-slide-', slideIndex));
          slide.classList.add('dcf-slide', 'dcf-relative'); // Add Theme Events to slide

          if (_this3.theme.slideToggleTransition) {
            _this3.theme.slideToggleTransition(slide);
          }

          var figure = slide.querySelector('figure');

          if (figure) {
            var caption = figure.querySelector('figcaption');

            if (!(typeof caption == 'undefined')) {
              // Create button to show/hide caption
              var captionBtn = document.createElement('button');

              if (_this3.theme.figureCaptionBtnInnerHTML) {
                captionBtn.innerHTML = _this3.theme.figureCaptionBtnInnerHTML;
              } // Add classes to each caption toggle button


              captionBtn.classList.add('dcf-btn', 'dcf-btn-slide', 'dcf-btn-slide-caption');

              if (_this3.theme.slideBtnClassList) {
                var _captionBtn$classList;

                (_captionBtn$classList = captionBtn.classList).add.apply(_captionBtn$classList, _toConsumableArray(_this3.theme.slideBtnClassList));
              } // Create a unique ID for each caption toggle button


              captionBtn.setAttribute('id', _this3.uuid.concat('-button-', slideIndex));
              captionBtn.setAttribute('tabindex', '-1'); // Add ARIA attributes to each caption toggle button

              captionBtn.setAttribute('aria-controls', _this3.uuid.concat('-caption-', slideIndex));
              captionBtn.setAttribute('aria-label', "".concat(_this3.slideshowName, " Show caption"));
              captionBtn.setAttribute('aria-expanded', 'false'); // Add class to each figure

              figure.classList.add('dcf-slide-figure'); // Append caption toggle button to each figure

              figure.appendChild(captionBtn); // Add Events to caption toggle button

              _this3.captionBtnEvents(captionBtn); // Add Theme Events to caption toggle button


              if (_this3.theme.figureCaptionToggleTransition) {
                _this3.theme.figureCaptionToggleTransition(captionBtn);
              } // Style each caption
              // Might be something here!!!!!


              caption.classList.add('dcf-opacity-0', 'dcf-pointer-events-none', 'dcf-invisible', 'dcf-slide-caption', 'dcf-figcaption'); // Create a unique ID for each caption

              caption.setAttribute('id', _this3.uuid.concat('-caption-', slideIndex)); // Add ARIA attributes to each caption

              caption.setAttribute('aria-labelledby', _this3.uuid.concat('-button-', slideIndex));
              caption.setAttribute('aria-hidden', 'true');
            }
          }
        });
      }
    }, {
      key: "slideObserverInit",
      value: function slideObserverInit() {
        var _this4 = this;

        // onIntersection callback function

        /* eslint func-style: ["error", "declaration", { "allowArrowFunctions": true }] */
        var onIntersection = function onIntersection(entries) {
          Array.prototype.forEach.call(entries, function (entry) {
            if (!entry.intersectionRatio > _dcfUtility.DCFUtility.magicNumbers('int0')) {
              entry.target.classList.remove('dcf-visible');
              return;
            }

            var img = entry.target.querySelector('img');

            if (img) {
              _this4.lazyLoadImage(img);
            }

            entry.target.classList.add('dcf-visible');
          });
        }; // set observer for slides


        var observerSettings = {
          root: this.slideshow,
          rootMargin: '-10px'
        };

        if ('IntersectionObserver' in window) {
          var observer = new IntersectionObserver(onIntersection, observerSettings);
          Array.prototype.forEach.call(this.slides, function (elem) {
            observer.observe(elem);
          });
        } else {
          Array.prototype.forEach.call(this.slides, function (slide) {
            var img = slide.querySelector('img');

            if (img) {
              _this4.lazyLoadImage(img);
            }

            slide.classList.add('dcf-visible');
          });
        }
      } // Caption visibility transition

    }, {
      key: "captionTransition",
      value: function captionTransition(event) {
        // Remove event listener and toggle visibility after caption has closed
        event.removeEventListener('transitionend', this.captionTransition, true); // Check if caption is already visible

        if (!event.classList.contains('dcf-invisible')) {
          // Add class to hide caption
          event.classList.add('dcf-invisible');
        }
      } // Add classes to the caption & button

    }, {
      key: "captionClasses",
      value: function captionClasses(button, caption) {
        // Check if caption is already visible
        if (!caption.classList.contains('dcf-invisible')) {
          // Hide content
          caption.addEventListener('transitionend', this.captionTransition(caption), true); // Update ARIA attributes

          button.setAttribute('aria-expanded', 'false');
          button.setAttribute('aria-label', 'Show caption');
          caption.setAttribute('aria-hidden', 'true');
          caption.classList.remove('dcf-opacity-1', 'dcf-pointer-events-auto');
          caption.classList.add('dcf-opacity-0', 'dcf-pointer-events-none', 'dcf-invisible');
          caption.dispatchEvent(this.source.openCaptionEvent);
        } else {
          // Remove class to show content
          caption.classList.remove('dcf-invisible'); // Update ARIA attributes

          button.setAttribute('aria-expanded', 'true');
          button.setAttribute('aria-label', 'Hide caption');
          caption.setAttribute('aria-hidden', 'false');
          caption.classList.remove('dcf-invisible', 'dcf-opacity-0', 'dcf-pointer-events-none');
          caption.classList.add('dcf-opacity-1', 'dcf-pointer-events-auto');
          caption.dispatchEvent(this.source.closeCaptionEvent);
        }
      }
    }, {
      key: "captionBtnEvents",
      value: function captionBtnEvents(button) {
        var _this5 = this;

        var caption = button.previousElementSibling; // Handle Click

        button.addEventListener('click', function (onClick) {
          _this5.captionClasses(onClick.currentTarget, caption);

          onClick.preventDefault();
        }, false); // Show caption when the 'space' key is pressed

        button.addEventListener('keydown', function (keydownEvent) {
          if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('space'))) {
            keydownEvent.preventDefault();

            _this5.captionClasses(keydownEvent.currentTarget, caption);
          } else if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowUp')) || _dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('tab'))) {
            keydownEvent.preventDefault();

            if (!caption.classList.contains('dcf-invisible')) {
              _this5.captionClasses(keydownEvent.currentTarget, caption);
            }

            _this5.slideDeck.focus();
          } else if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowDown'))) {
            keydownEvent.preventDefault();
          } else if (_dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowLeft')) || _dcfUtility.DCFUtility.isKeyEvent(keydownEvent, _dcfUtility.DCFUtility.keyEvents('arrowRight'))) {
            _this5.slideDeck.focus();
          }
        }, false);
      }
    }, {
      key: "pxTOvw",
      value: function pxTOvw(value) {
        var zeroIndex = 0;
        var oneHundred = 100;
        var docElement = document.documentElement,
            docBody = document.getElementsByTagName('body')[zeroIndex],
            windowWidth = window.innerWidth || docElement.clientWidth || docBody.clientWidth;
        var result = oneHundred * value / windowWidth;
        return "".concat(result, "vw");
      }
    }, {
      key: "lazyLoadImage",
      value: function lazyLoadImage(image) {
        var src = image.dataset.src;
        var srcset = image.dataset.srcset || null;
        var sizes = null;

        if (!src) {
          return;
        } // Process parent picture lazy load if image is child of a picture


        if (image.parentNode.nodeName === 'PICTURE') {
          this.applyPicture(image.parentNode);
          sizes = image.dataset.sizes || this.pxTOvw(image.parentNode.parentElement.clientWidth);
        } else {
          sizes = image.dataset.sizes || this.pxTOvw(image.parentElement.clientWidth);
        } // Prevent this from being lazy loaded a second time.


        image.classList.add('dcf-lazy-loaded');
        image.classList.remove('dcf-lazy-load');

        if (src) {
          image.src = src;
          image.removeAttribute('data-src');
        }

        if (srcset) {
          image.srcset = srcset;
          image.removeAttribute('data-srcset');
        }

        if (sizes) {
          image.sizes = sizes;
          image.removeAttribute('data-sizes');
        }
      }
    }, {
      key: "transitionPromise",
      value: function transitionPromise(hideSlide, showSlide) {
        var _this6 = this;

        return new Promise(function (resolve) {
          _this6.panel.innerHTML = hideSlide.innerHTML;

          _this6.panel.classList.remove('dcf-invisible');

          _this6.scrollIt(showSlide);

          _this6.panel.dispatchEvent(_this6.source.hideSlideEvent);

          showSlide.dispatchEvent(_this6.source.showSlideEvent);
          setTimeout(function () {
            resolve();
          }, _this6.source.theme.slideToggleTransitionDuration);
        }).then(function () {
          _this6.panel.innerHTML = '';

          _this6.panel.classList.add('dcf-invisible');
        });
      }
    }, {
      key: "toggleSlideTransition",
      value: function toggleSlideTransition(hideSlide, showSlide) {
        this.transitionPromise(hideSlide, showSlide);
      }
    }, {
      key: "scrollIt",
      value: function scrollIt(slideToShow) {
        var scrollPos = Array.prototype.indexOf.call(this.slides, slideToShow) * (this.slideDeck.scrollWidth / this.slides.length);
        this.slideDeck.scrollLeft = scrollPos;
      }
    }, {
      key: "showSlide",
      value: function showSlide(dir) {
        var visible = this.slideshow.querySelectorAll('.dcf-visible');
        var index = dir === 'previous' ? _dcfUtility.DCFUtility.magicNumbers('int0') : _dcfUtility.DCFUtility.magicNumbers('int1');

        if (visible.length > _dcfUtility.DCFUtility.magicNumbers('int1')) {
          this.scrollIt(visible[index]);
        } else {
          var newSlide = index === _dcfUtility.DCFUtility.magicNumbers('int0') ? visible[_dcfUtility.DCFUtility.magicNumbers('int0')].previousElementSibling : visible[_dcfUtility.DCFUtility.magicNumbers('int0')].nextElementSibling;

          if (newSlide) {
            if (this.slideTransition) {
              var currentSlide = visible[_dcfUtility.DCFUtility.magicNumbers('int0')];

              this.toggleSlideTransition(currentSlide, newSlide);
            } else {
              this.scrollIt(newSlide);
            }
          }
        }
      }
    }]);

    return SlideshowObj;
  }();

  var DCFSlideshowTheme = /*#__PURE__*/function () {
    function DCFSlideshowTheme() {
      var _this7 = this;

      _classCallCheck(this, DCFSlideshowTheme);

      // Defaults
      this.slideBtnClassList = ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-white'];
      this.slidePrevBtnClassList = ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse'];
      this.slidePrevBtnInnerHTML = "<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\"\nheight=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">\n    <path d=\"M23.509\n    9.856c-.38-.55-.928-.852-1.542-.852H9.74l4.311-4.151c.995-.994.961-2.646-.074-3.682-1.001-1-2.722-1.033-3.68-.077L.148\n    11.144a.5.5 0 00-.003.707l9.978 10.079a2.445 2.445 0 001.737.705c.707 0 1.407-.294 1.92-.806a2.737 2.737 0 00.807-1.923\n    2.431 2.431 0\n    00-.708-1.733l-4.156-4.16h12.276c.618 0 1.161-.302 1.53-.851.304-.451.471-1.041.471-1.658 0-.596-.179-1.196-.491-1.648z\"></path>\n</svg>";
      this.slideNextBtnClassList = ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse'];
      this.slideNextBtnInnerHTML = "<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\"\nheight=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">\n    <path d=\"M23.852 11.144L13.703 1.096c-.96-.96-2.678-.924-3.68.075-1.036 1.035-1.07 2.687-.069 3.69l4.321\n    4.143H2.03c-1.27 0-2.03 1.272-2.03 2.5 0 .617.168 1.207.472 1.659.369.549.913.851 1.53.851h12.276l-4.156 4.16a2.425\n    2.425 0 00-.708 1.734c0 .708.293 1.409.807 1.922a2.738 2.738 0 001.919.806c.664 0 1.28-.251\n    1.739-.708l9.977-10.076a.502.502 0 00-.004-.708z\"></path>\n</svg>";
      this.slidePlayToggleBtnClassList = ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse'];
      this.slidePlayBtnInnerHTML = "<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\"\nheight=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">\n    <path d=\"M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498\n      0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z\"></path>\n</svg>";
      this.slidePauseBtnInnerHTML = "<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\"\nviewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">\n    <path d=\"M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5\n    0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z\"></path>\n</svg>";
      this.figureCaptionBtnInnerHTML = "<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\"\n      width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">\n    <path class=\"theme-icon-slide-caption-open\"\n      d=\"M1,3h19c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,1,0,1.4,0,2C0,2.6,0.4,3,1,3z\"/>\n      '<path class=\"theme-icon-slide-caption-open\"\n      d=\"M1,8h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,6,0,6.4,0,7C0,7.6,0.4,8,1,8z\"/>\n    <path class=\"theme-icon-slide-caption-close-1\"\n      d=\"M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z\"/>\n    <path class=\"theme-icon-slide-caption-close-2\"\n      d=\"M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z\"/>\n    <path class=\"theme-icon-slide-caption-open\"\n      d=\"M1,18h18c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,17.6,0.4,18,1,18z\"/>\n    <path class=\"theme-icon-slide-caption-open\"\n      'd=\"M1,23h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,22.6,0.4,23,1,23z\"/>\n</svg>";

      this.figureCaptionToggleTransition = function (button) {
        var keyframesClose1 = [{
          transform: 'rotate(45deg)',
          transformOrigin: '50% 50%'
        }, {
          transform: 'rotate(0deg)',
          transformOrigin: '50% 50%'
        }];
        var keyframesClose2 = [{
          transform: 'rotate(-45deg)',
          transformOrigin: '50% 50%'
        }, {
          transform: 'rotate(0deg)',
          transformOrigin: '50% 50%'
        }];
        var keyframesOpen1 = [{
          transform: 'rotate(0deg)',
          transformOrigin: '50% 50%'
        }, {
          transform: 'rotate(45deg)',
          transformOrigin: '50% 50%'
        }];
        var keyframesOpen2 = [{
          transform: 'rotate(0deg)',
          transformOrigin: '50% 50%'
        }, {
          transform: 'rotate(-45deg)',
          transformOrigin: '50% 50%'
        }];
        var options = {
          duration: 250,
          fill: 'forwards'
        };
        var caption = button.previousElementSibling;
        var close1 = button.querySelector('.theme-icon-slide-caption-close-1');
        var close2 = button.querySelector('.theme-icon-slide-caption-close-2');
        caption.addEventListener('openCaption', function () {
          close1.animate(keyframesClose1, options);
          close2.animate(keyframesClose2, options);
        }, false);
        caption.addEventListener('closeCaption', function () {
          close1.animate(keyframesOpen1, options);
          close2.animate(keyframesOpen2, options);
        }, false);
      };

      this.slideToggleTransitionDuration = 1000;

      this.slideToggleTransition = function (slide) {
        var keyframesShowSlide = [{
          opacity: 0
        }, {
          opacity: 1
        }];
        var keyframesHideSlide = [{
          opacity: 1
        }, {
          opacity: 0
        }];
        var options = {
          duration: _this7.slideToggleTransitionDuration,
          fill: 'forwards'
        };
        slide.addEventListener('showSlide', function () {
          slide.animate(keyframesShowSlide, options);
        }, false);
        slide.addEventListener('hideSlide', function () {
          slide.animate(keyframesHideSlide, options);
        }, false);
      };
    }

    _createClass(DCFSlideshowTheme, [{
      key: "setThemeVariable",
      value: function setThemeVariable(themeVariableName, value) {
        switch (themeVariableName) {
          case 'slideBtnClassList':
            if (Array.isArray(value)) {
              this.slideBtnClassList = value;
            }

            break;

          case 'slidePrevBtnClassList':
            if (Array.isArray(value)) {
              this.slidePrevBtnClassList = value;
            }

            break;

          case 'slidePrevBtnInnerHTML':
            if (typeof value === 'string') {
              this.slidePrevBtnInnerHTML = value;
            }

            break;

          case 'slideNextBtnClassList':
            if (Array.isArray(value)) {
              this.slideNextBtnClassList = value;
            }

            break;

          case 'slideNextvBtnInnerHTML':
            if (typeof value === 'string') {
              this.slideNextBtnInnerHTML = value;
            }

            break;

          case 'slidePlayToggleBtnClassList':
            if (Array.isArray(value)) {
              this.slidePlayToggleBtnClassList = value;
            }

            break;

          case 'slidePlayBtnInnerHTML':
            if (typeof value === 'string') {
              this.slidePlayBtnInnerHTML = value;
            }

            break;

          case 'slidePauseBtnInnerHTML':
            if (typeof value === 'string') {
              this.slidePauseBtnInnerHTML = value;
            }

            break;

          case 'figureCaptionBtnInnerHTML':
            if (typeof value === 'string') {
              this.figureCaptionBtnInnerHTML = value;
            }

            break;

          case 'figureCaptionToggleTransition':
            if (typeof value === 'function') {
              this.figureCaptionToggleTransition = value;
            }

            break;

          case 'slideToggleTransitionDuration':
            if (typeof value === 'number') {
              this.slideToggleTransitionDuration = value;
            }

            break;

          case 'slideToggleTransition':
            if (typeof value === 'function') {
              this.slideToggleTransition = value;
            }

            break;

          default:
            // Invalid variable so ignore
            break;
        }
      }
    }]);

    return DCFSlideshowTheme;
  }();

  _exports.DCFSlideshowTheme = DCFSlideshowTheme;

  var DCFSlideshow = /*#__PURE__*/function () {
    function DCFSlideshow(slideshows, theme) {
      _classCallCheck(this, DCFSlideshow);

      this.slideshows = slideshows;

      if (theme instanceof DCFSlideshowTheme) {
        this.theme = theme;
      } else {
        this.theme = new DCFSlideshowTheme();
      }

      this.openCaptionEvent = new Event(DCFSlideshow.events('openCaption'));
      this.closeCaptionEvent = new Event(DCFSlideshow.events('closeCaption'));
      this.showSlideEvent = new Event(DCFSlideshow.events('showSlide'));
      this.hideSlideEvent = new Event(DCFSlideshow.events('hideSlide'));
    }

    _createClass(DCFSlideshow, [{
      key: "initialize",
      value: function initialize() {
        var _this8 = this;

        Array.prototype.forEach.call(this.slideshows, function (slideshow, slideshowIndex) {
          var slideShow = new SlideshowObj(slideshow, slideshowIndex, _this8);

          if (slideShow instanceof SlideshowObj) {
            slideShow.initTransitionPanel();
            slideShow.initControls();
            slideShow.slides = slideShow.slideDeck.querySelectorAll('li');

            if (slideShow.slideshow.hasAttribute('data-shuffle') && slideShow.slideshow.dataset.shuffle.toLowerCase() === 'true') {
              slideShow.shuffleSlides();
            }

            slideShow.slideObserverInit();
            slideShow.initSlides();
          }
        });
      }
    }], [{
      key: "events",
      value: function events(name) {
        var events = {
          openCaption: 'openCaption',
          closeCaption: 'closeCaption',
          showSlide: 'showSlide',
          hideSlide: 'hideSlide'
        };
        Object.freeze(events);
        return name in events ? events[name] : undefined;
      }
    }]);

    return DCFSlideshow;
  }();

  _exports.DCFSlideshow = DCFSlideshow;
});
