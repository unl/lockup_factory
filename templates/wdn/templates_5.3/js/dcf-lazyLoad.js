define(["exports"], function (_exports) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFLazyLoad = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var DCFLazyLoad = /*#__PURE__*/function () {
    function DCFLazyLoad(itemList, observerConfig, classNames) {
      _classCallCheck(this, DCFLazyLoad);

      this.itemList = itemList;
      this.observerConfig = observerConfig;
      this.classNames = classNames;
    }

    _createClass(DCFLazyLoad, [{
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
      /**
       * Apply the image: preloaded image is loaded but not applied to actual image element
       * @param {string} image: the image element that we are targetting
       */

    }, {
      key: "applyImage",
      value: function applyImage(image) {
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
      key: "fetchImage",
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
        }).catch(function () {// do nothing
        });
      }
      /**
       * Preloads the image
       * @param {object} image   An image object.
       *
       * @returns {(object|void)} Returns a promise for fetchImage or void.
       */

    }, {
      key: "preloadImage",
      value: function preloadImage(image) {
        var src = image.dataset.src;
        var srcset = image.dataset.srcset;
        var sizes = image.dataset.sizes || null;
        var fetchImagePromise = null;

        if (src) {
          try {
            fetchImagePromise = this.fetchImage(src, srcset, sizes);
          } catch (error) {// do nothing
          }
        }

        return fetchImagePromise;
      }
      /**
       * Apply the picture
       * @param {string} picture: the picture element that we are targeting
       */

    }, {
      key: "applyPicture",
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
    }, {
      key: "applyVideo",
      value: function applyVideo(video) {
        var videoSources = video.getElementsByTagName('SOURCE');
        var poster = video.dataset.poster || null;
        Array.from(videoSources).forEach(function (videoSource) {
          var src = videoSource.dataset.src || null;

          if (!src) {
            // skip this videoSource
            return;
          }

          videoSource.src = src;
          videoSource.removeAttribute('data-src');
        });

        if (poster) {
          video.poster = poster;
          video.removeAttribute('data-poster');
        } // Prevent this from being lazy loaded a second time.


        video.classList.add('dcf-lazy-loaded');
        video.classList.remove('dcf-lazy-load');

        if (this.classNames.length) {
          this.classNames.forEach(function (className) {
            return video.classList.add(className);
          });
        }

        video.load();
      }
      /**
       * Load all of the items immediately
       * @param {NodeListOf<Element>} items     List of node elements.
       * @param {boolean}             preload   Whether to preload or not.
       */

    }, {
      key: "loadItemsImmediately",
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

            case 'VIDEO':
              _this2.applyVideo(item);

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
      key: "disconnect",
      value: function disconnect() {
        if (!this.observer) {
          return;
        }

        this.observer.disconnect();
      }
    }, {
      key: "initialize",
      value: function initialize() {
        var _this3 = this;

        // onIntersection callback function
        var onIntersection = function onIntersection(entries, observer) {
          var zero = 0;
          var zeroIndex = 0;
          var oneIndex = 1; // Disconnect if we've already loaded all of the images

          if (_this3.itemsCount === zero) {
            _this3.observer.disconnect();
          } // Loop through the entries


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

              case 'VIDEO':
                if (entry.intersectionRatio > observer.thresholds[oneIndex]) {
                  _this3.itemsCount--;

                  _this3.applyVideo(entry.target);

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

        if (!('IntersectionObserver' in window)) {
          this.loadItemsImmediately(this.itemList, 'loading' in HTMLImageElement.prototype);
        } else {
          // It is supported, load the items
          this.observer = new IntersectionObserver(onIntersection, this.observerConfig);
          this.itemList.forEach(function (item) {
            if (item.classList.contains('dcf-lazy-loaded')) {
              // skip item
              return;
            } // Native image lazy loading IS supported, so set src-data to src


            if ('loading' in HTMLImageElement.prototype && item.nodeName === 'IMG') {
              _this3.itemsCount--;

              _this3.applyImage(item);

              return;
            }

            _this3.observer.observe(item);
          });
        }
      }
    }]);

    return DCFLazyLoad;
  }();

  _exports.DCFLazyLoad = DCFLazyLoad;
});
