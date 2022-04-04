<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* wdn/templates_5.1/js/dcf-lazyLoad.js */
class __TwigTemplate_4c2b05fc2e18bc87f62dde62613e9ebd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/dcf-lazyLoad.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/dcf-lazyLoad.js"));

        // line 1
        echo "'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var DCFLazyLoad = function () {
  function DCFLazyLoad(itemList, observerConfig, classNames) {
    _classCallCheck(this, DCFLazyLoad);

    this.itemList = itemList;
    this.observerConfig = observerConfig;
    this.classNames = classNames;
  }

  _createClass(DCFLazyLoad, [{
    key: 'pxTOvw',
    value: function pxTOvw(value) {
      var zeroIndex = 0;
      var oneHundred = 100;
      var docElement = document.documentElement,
          docBody = document.getElementsByTagName('body')[zeroIndex],
          windowWidth = window.innerWidth || docElement.clientWidth || docBody.clientWidth;

      var result = oneHundred * value / windowWidth;
      return result + 'vw';
    }

    /**
     * Apply the image: preloaded image is loaded but not applied to actual image element
     * @param {string} image: the image element that we are targetting
     */

  }, {
    key: 'applyImage',
    value: function applyImage(image) {
      var src = image.dataset.src;
      var srcset = image.dataset.srcset || null;
      var sizes = null;

      if (!src) {
        return;
      }

      // Process parent picture lazy load if image is child of a picture
      if (image.parentNode.nodeName === 'PICTURE') {
        this.applyPicture(image.parentNode);
        sizes = image.dataset.sizes || this.pxTOvw(image.parentNode.parentElement.clientWidth);
      } else {
        sizes = image.dataset.sizes || this.pxTOvw(image.parentElement.clientWidth);
      }

      // Prevent this from being lazy loaded a second time.
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
      if (this.classNames.length) {
        this.classNames.forEach(function (className) {
          return image.classList.add(className);
        });
      }
    }

    /**
     * @param {string}  src     The src of image.
     * @param {string}  srcset  Defaults to null if not provided.
     * @param {integer} sizes   Defaults to null if not provided.
     *
     * @returns {Promise}
     */

  }, {
    key: 'fetchImage',
    value: function fetchImage(src) {
      var srcset = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var sizes = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;

      return new Promise(function (resolve, reject) {
        var image = new Image();
        if (src) {
          image.src = src;
        }
        if (srcset) {
          image.srcset = srcset;
        }
        if (sizes) {
          image.sizes = sizes;
        }

        image.onload = resolve;
        image.onerror = reject;
      }).catch(function () {
        // do nothing
      });
    }

    /**
     * Preloads the image
     * @param {object} image   An image object.
     *
     * @returns {(object|void)} Returns a promise for fetchImage or void.
     */

  }, {
    key: 'preloadImage',
    value: function preloadImage(image) {
      var src = image.dataset.src;
      var srcset = image.dataset.srcset;
      var sizes = image.dataset.sizes || null;

      var fetchImagePromise = null;
      if (src) {
        try {
          fetchImagePromise = this.fetchImage(src, srcset, sizes);
        } catch (error) {
          // do nothing
        }
      }
      return fetchImagePromise;
    }

    /**
     * Apply the picture
     * @param {string} picture: the picture element that we are targeting
     */

  }, {
    key: 'applyPicture',
    value: function applyPicture(picture) {
      var _this = this;

      // update picture source tags
      var pictureSources = picture.getElementsByTagName('SOURCE');
      Array.from(pictureSources).forEach(function (pictureSource) {
        var srcset = pictureSource.dataset.srcset || null;
        var sizes = pictureSource.dataset.sizes || _this.pxTOvw(picture.parentElement.clientWidth);

        if (!srcset) {
          // skip this pictureSource
          return;
        }

        pictureSource.srcset = srcset;
        pictureSource.removeAttribute('data-srcset');

        if (sizes) {
          pictureSource.sizes = sizes;
          pictureSource.removeAttribute('data-sizes');
        }
      });
    }

    /**
     * Load all of the items immediately
     * @param {NodeListOf<Element>} items     List of node elements.
     * @param {boolean}             preload   Whether to preload or not.
     */

  }, {
    key: 'loadItemsImmediately',
    value: function loadItemsImmediately(items) {
      var _this2 = this;

      var preload = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;

      items.forEach(function (item) {
        switch (item.nodeName) {
          case 'IMG':
            if (preload === true) {
              _this2.preloadImage(item);
            }
            _this2.applyImage(item);
            break;

          default:
            // do nothing skip to next item;
            return;
        }
      });
    }

    /**
     * Disconnect the observer
     */

  }, {
    key: 'disconnect',
    value: function disconnect() {
      if (!this.observer) {
        return;
      }

      this.observer.disconnect();
    }
  }, {
    key: 'initialize',
    value: function initialize() {
      var _this3 = this;

      // onIntersection callback function
      var onIntersection = function onIntersection(entries, observer) {
        var zero = 0;
        var zeroIndex = 0;
        var oneIndex = 1;
        // Disconnect if we've already loaded all of the images
        if (_this3.itemsCount === zero) {
          _this3.observer.disconnect();
        }

        // Loop through the entries
        entries.forEach(function (entry) {
          switch (entry.target.nodeName) {
            case 'IMG':
              if (entry.intersectionRatio > observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {
                _this3.preloadImage(entry.target);
              } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {
                _this3.itemsCount--;
                _this3.applyImage(entry.target);
                _this3.observer.unobserve(entry.target);
              }
              break;

            default:
              // do nothing skip to next item;
              return;
          }
        });
      };

      if (!this.itemList) {
        return;
      }

      this.itemsCount = this.itemList.length;

      if ('loading' in HTMLImageElement.prototype) {
        // Native lazy loading IS supported, so set src-data to src
        this.loadItemsImmediately(this.itemList, false);
      } else {
        // Native lazy loading NOT supported, so handle via javascript
        // If browser doesn't support intersection observer, load the items immediately
        if (!('IntersectionObserver' in window)) {
          this.loadItemsImmediately(this.itemList);
        } else {
          // It is supported, load the items
          this.observer = new IntersectionObserver(onIntersection, this.observerConfig);

          this.itemList.forEach(function (item) {
            if (item.classList.contains('dcf-lazy-loaded')) {
              // skip item
              return;
            }

            _this3.observer.observe(item);
          });
        }
      }
    }
  }]);

  return DCFLazyLoad;
}();
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/dcf-lazyLoad.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var DCFLazyLoad = function () {
  function DCFLazyLoad(itemList, observerConfig, classNames) {
    _classCallCheck(this, DCFLazyLoad);

    this.itemList = itemList;
    this.observerConfig = observerConfig;
    this.classNames = classNames;
  }

  _createClass(DCFLazyLoad, [{
    key: 'pxTOvw',
    value: function pxTOvw(value) {
      var zeroIndex = 0;
      var oneHundred = 100;
      var docElement = document.documentElement,
          docBody = document.getElementsByTagName('body')[zeroIndex],
          windowWidth = window.innerWidth || docElement.clientWidth || docBody.clientWidth;

      var result = oneHundred * value / windowWidth;
      return result + 'vw';
    }

    /**
     * Apply the image: preloaded image is loaded but not applied to actual image element
     * @param {string} image: the image element that we are targetting
     */

  }, {
    key: 'applyImage',
    value: function applyImage(image) {
      var src = image.dataset.src;
      var srcset = image.dataset.srcset || null;
      var sizes = null;

      if (!src) {
        return;
      }

      // Process parent picture lazy load if image is child of a picture
      if (image.parentNode.nodeName === 'PICTURE') {
        this.applyPicture(image.parentNode);
        sizes = image.dataset.sizes || this.pxTOvw(image.parentNode.parentElement.clientWidth);
      } else {
        sizes = image.dataset.sizes || this.pxTOvw(image.parentElement.clientWidth);
      }

      // Prevent this from being lazy loaded a second time.
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
      if (this.classNames.length) {
        this.classNames.forEach(function (className) {
          return image.classList.add(className);
        });
      }
    }

    /**
     * @param {string}  src     The src of image.
     * @param {string}  srcset  Defaults to null if not provided.
     * @param {integer} sizes   Defaults to null if not provided.
     *
     * @returns {Promise}
     */

  }, {
    key: 'fetchImage',
    value: function fetchImage(src) {
      var srcset = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var sizes = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;

      return new Promise(function (resolve, reject) {
        var image = new Image();
        if (src) {
          image.src = src;
        }
        if (srcset) {
          image.srcset = srcset;
        }
        if (sizes) {
          image.sizes = sizes;
        }

        image.onload = resolve;
        image.onerror = reject;
      }).catch(function () {
        // do nothing
      });
    }

    /**
     * Preloads the image
     * @param {object} image   An image object.
     *
     * @returns {(object|void)} Returns a promise for fetchImage or void.
     */

  }, {
    key: 'preloadImage',
    value: function preloadImage(image) {
      var src = image.dataset.src;
      var srcset = image.dataset.srcset;
      var sizes = image.dataset.sizes || null;

      var fetchImagePromise = null;
      if (src) {
        try {
          fetchImagePromise = this.fetchImage(src, srcset, sizes);
        } catch (error) {
          // do nothing
        }
      }
      return fetchImagePromise;
    }

    /**
     * Apply the picture
     * @param {string} picture: the picture element that we are targeting
     */

  }, {
    key: 'applyPicture',
    value: function applyPicture(picture) {
      var _this = this;

      // update picture source tags
      var pictureSources = picture.getElementsByTagName('SOURCE');
      Array.from(pictureSources).forEach(function (pictureSource) {
        var srcset = pictureSource.dataset.srcset || null;
        var sizes = pictureSource.dataset.sizes || _this.pxTOvw(picture.parentElement.clientWidth);

        if (!srcset) {
          // skip this pictureSource
          return;
        }

        pictureSource.srcset = srcset;
        pictureSource.removeAttribute('data-srcset');

        if (sizes) {
          pictureSource.sizes = sizes;
          pictureSource.removeAttribute('data-sizes');
        }
      });
    }

    /**
     * Load all of the items immediately
     * @param {NodeListOf<Element>} items     List of node elements.
     * @param {boolean}             preload   Whether to preload or not.
     */

  }, {
    key: 'loadItemsImmediately',
    value: function loadItemsImmediately(items) {
      var _this2 = this;

      var preload = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;

      items.forEach(function (item) {
        switch (item.nodeName) {
          case 'IMG':
            if (preload === true) {
              _this2.preloadImage(item);
            }
            _this2.applyImage(item);
            break;

          default:
            // do nothing skip to next item;
            return;
        }
      });
    }

    /**
     * Disconnect the observer
     */

  }, {
    key: 'disconnect',
    value: function disconnect() {
      if (!this.observer) {
        return;
      }

      this.observer.disconnect();
    }
  }, {
    key: 'initialize',
    value: function initialize() {
      var _this3 = this;

      // onIntersection callback function
      var onIntersection = function onIntersection(entries, observer) {
        var zero = 0;
        var zeroIndex = 0;
        var oneIndex = 1;
        // Disconnect if we've already loaded all of the images
        if (_this3.itemsCount === zero) {
          _this3.observer.disconnect();
        }

        // Loop through the entries
        entries.forEach(function (entry) {
          switch (entry.target.nodeName) {
            case 'IMG':
              if (entry.intersectionRatio > observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {
                _this3.preloadImage(entry.target);
              } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {
                _this3.itemsCount--;
                _this3.applyImage(entry.target);
                _this3.observer.unobserve(entry.target);
              }
              break;

            default:
              // do nothing skip to next item;
              return;
          }
        });
      };

      if (!this.itemList) {
        return;
      }

      this.itemsCount = this.itemList.length;

      if ('loading' in HTMLImageElement.prototype) {
        // Native lazy loading IS supported, so set src-data to src
        this.loadItemsImmediately(this.itemList, false);
      } else {
        // Native lazy loading NOT supported, so handle via javascript
        // If browser doesn't support intersection observer, load the items immediately
        if (!('IntersectionObserver' in window)) {
          this.loadItemsImmediately(this.itemList);
        } else {
          // It is supported, load the items
          this.observer = new IntersectionObserver(onIntersection, this.observerConfig);

          this.itemList.forEach(function (item) {
            if (item.classList.contains('dcf-lazy-loaded')) {
              // skip item
              return;
            }

            _this3.observer.observe(item);
          });
        }
      }
    }
  }]);

  return DCFLazyLoad;
}();
", "wdn/templates_5.1/js/dcf-lazyLoad.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/dcf-lazyLoad.js");
    }
}