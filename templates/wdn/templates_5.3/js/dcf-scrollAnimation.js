define(["exports"], function (_exports) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFScrollAnimation = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var DCFScrollAnimation = /*#__PURE__*/function () {
    function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {
      _classCallCheck(this, DCFScrollAnimation);

      this.itemList = itemList;
      this.observerConfig = observerConfig;
      this.animationClassNames = animationClassNames;
    } // Disconnect the observer


    _createClass(DCFScrollAnimation, [{
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
        var _this = this;

        // onIntersection callback function
        var onIntersection = function onIntersection(entries, observer) {
          var zero = 0;
          var zeroIndex = 0;
          var oneIndex = 1; // Disconnect if we've already loaded all of the items

          if (_this.itemsCount === zero) {
            _this.observer.disconnect();
          } // Loop through the entries


          entries.forEach(function (entry) {
            if (entry.intersectionRatio >= observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {
              // Add animation classes to entry
              if (_this.animationClassNames.length) {
                _this.animationClassNames.forEach(function (className) {
                  return entry.target.classList.add(className);
                });
              }
            } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {
              _this.itemsCount--;

              _this.observer.unobserve(entry.target);
            }
          });
        };
        /* eslint func-style: ["error", "declaration", { "allowArrowFunctions": true }] */


        var onLoadIntersection = function onLoadIntersection(entries) {
          var zero = 0;
          entries.forEach(function (entry) {
            if (entry.intersectionRatio > zero) {
              // entry is in view port on page load so add animation classes to entry
              if (_this.animationClassNames.length) {
                _this.animationClassNames.forEach(function (className) {
                  return entry.target.classList.add(className);
                });
              }
            }

            _this.loadObserver.unobserve(entry.target);
          });
        };

        if (!this.itemList) {
          return;
        }

        this.itemsCount = this.itemList.length;

        if ('IntersectionObserver' in window) {
          this.observer = new IntersectionObserver(onIntersection, this.observerConfig);
          this.itemList.forEach(function (item) {
            _this.observer.observe(item);
          });
          window.addEventListener('load', function () {
            _this.loadObserver = new IntersectionObserver(onLoadIntersection);

            _this.itemList.forEach(function (item) {
              _this.loadObserver.observe(item);
            });
          });
        }
      }
    }]);

    return DCFScrollAnimation;
  }();

  _exports.DCFScrollAnimation = DCFScrollAnimation;
});
