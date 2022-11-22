define(["exports"], function (_exports) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFAutoplayVideoToggleTheme = _exports.DCFAutoplayVideoToggle = void 0;

  function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

  function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

  function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

  function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

  function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

  function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var DCFAutoplayVideoToggleTheme = /*#__PURE__*/function () {
    function DCFAutoplayVideoToggleTheme() {
      _classCallCheck(this, DCFAutoplayVideoToggleTheme);

      // Defaults

      /* eslint-disable */
      this.toggleBtnClassList = ['dcf-btn-autoplay-video-toggle', 'dcf-btn', 'dcf-btn-primary', 'dcf-z-1', 'dcf-absolute', 'dcf-bottom-0', 'dcf-right-0', 'dcf-d-flex', 'dcf-ai-center', 'dcf-jc-center', 'dcf-mb-3', 'dcf-mr-3', 'dcf-h-7', 'dcf-w-7', 'dcf-p-0', 'dcf-circle'];
      this.togglePlayBtnInnerHTML = '<svg class="dcf-h-4 dcf-w-4 dcf-fill-current" width="24" height="24" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><path d="M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498 0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z"></path></svg>';
      this.togglePauseBtnInnerHTML = '<svg class="dcf-h-4 dcf-w-4 dcf-fill-current" width="24" height="24" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><path d="M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5 0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z"></path></svg>';
      /* eslint-enable */
    }

    _createClass(DCFAutoplayVideoToggleTheme, [{
      key: "setThemeVariable",
      value: function setThemeVariable(themeVariableName, value) {
        switch (themeVariableName) {
          case 'toggleBtnClassList':
            if (Array.isArray(value)) {
              this.toggleBtnClassList = value;
            }

            break;

          case 'togglePlayBtnInnerHTML':
            if (typeof value === 'string') {
              this.togglePlayBtnInnerHTML = value;
            }

            break;

          case 'togglePauseBtnInnerHTML':
            if (typeof value === 'string') {
              this.togglePauseBtnInnerHTML = value;
            }

            break;

          default:
            // Invalid variable so ignore
            break;
        }
      }
    }]);

    return DCFAutoplayVideoToggleTheme;
  }();

  _exports.DCFAutoplayVideoToggleTheme = DCFAutoplayVideoToggleTheme;

  var DCFAutoplayVideoToggle = /*#__PURE__*/function () {
    function DCFAutoplayVideoToggle(theme) {
      _classCallCheck(this, DCFAutoplayVideoToggle);

      this.autoplayVideos = [];

      if (theme instanceof DCFAutoplayVideoToggleTheme) {
        this.theme = theme;
      } else {
        this.theme = new DCFAutoplayVideoToggleTheme();
      }
    }

    _createClass(DCFAutoplayVideoToggle, [{
      key: "initialize",
      value: function initialize() {
        var _this = this;

        var toggleEvent = new Event('dcfAutoplayVideoToggle'); // Add play/pause button to containers

        var autoplayVideoContainers = document.getElementsByClassName('dcf-autoplay-video');
        Array.prototype.forEach.call(autoplayVideoContainers, function (container) {
          var toggleBtn = document.createElement('button'); // Add theme classes to button

          if (_this.theme.toggleBtnClassList) {
            var _toggleBtn$classList;

            (_toggleBtn$classList = toggleBtn.classList).add.apply(_toggleBtn$classList, _toConsumableArray(_this.theme.toggleBtnClassList));
          } // make sure button always has this class


          toggleBtn.classList.add('dcf-btn-autoplay-video-toggle');

          if (_this.isPlaying()) {
            toggleBtn.setAttribute('aria-label', 'pause autoplay video');
            toggleBtn.innerHTML = _this.theme.togglePauseBtnInnerHTML;
          } else {
            toggleBtn.setAttribute('aria-label', 'play autoplay video');
            toggleBtn.innerHTML = _this.theme.togglePlayBtnInnerHTML;
          }

          toggleBtn.addEventListener('click', function () {
            if (_this.isPlaying()) {
              _this.pauseAll();

              window.localStorage.setItem('dcfAutoplayVideoToggleStatus', _this.pausedStatus());
            } else {
              _this.playAll();

              window.localStorage.setItem('dcfAutoplayVideoToggleStatus', _this.playStatus());
            }

            window.dispatchEvent(toggleEvent);
          });
          container.append(toggleBtn);
          window.addEventListener('dcfAutoplayVideoToggle', function () {
            if (_this.isPlaying()) {
              // show pause button
              toggleBtn.setAttribute('aria-label', 'pause autoplay video');
              toggleBtn.innerHTML = _this.theme.togglePauseBtnInnerHTML;
            } else {
              // show play button
              toggleBtn.setAttribute('aria-label', 'play autoplay video');
              toggleBtn.innerHTML = _this.theme.togglePlayBtnInnerHTML;
            }
          });
        });
        var videos = document.getElementsByTagName('video');
        Array.prototype.forEach.call(videos, function (video) {
          if (_this.isAutoplayVideo(video)) {
            _this.autoplayVideos.push(video);
          }
        });

        if (this.isPlaying()) {
          this.playAll();
          window.localStorage.setItem('dcfAutoplayVideoToggleStatus', this.playStatus());
        } else {
          this.pauseAll();
        }
      }
    }, {
      key: "playStatus",
      value: function playStatus() {
        return 'play';
      }
    }, {
      key: "pausedStatus",
      value: function pausedStatus() {
        return 'paused';
      }
    }, {
      key: "isPlaying",
      value: function isPlaying() {
        return window.localStorage.getItem('dcfAutoplayVideoToggleStatus') !== this.pausedStatus();
      }
    }, {
      key: "playAll",
      value: function playAll() {
        Array.prototype.forEach.call(this.autoplayVideos, function (video) {
          video.play();
        });
      }
    }, {
      key: "pauseAll",
      value: function pauseAll() {
        Array.prototype.forEach.call(this.autoplayVideos, function (video) {
          video.pause();
        });
      }
    }, {
      key: "isAutoplayVideo",
      value: function isAutoplayVideo(video) {
        return video.hasAttribute('autoplay') && video.hasAttribute('muted') && video.hasAttribute('playsinline');
      }
    }]);

    return DCFAutoplayVideoToggle;
  }();

  _exports.DCFAutoplayVideoToggle = DCFAutoplayVideoToggle;
});
