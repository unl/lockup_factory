define(["exports", "./dcf-utility"], function (_exports, _dcfUtility) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFNoticeTheme = _exports.DCFNotice = void 0;

  function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

  function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

  function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

  function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

  function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

  function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var overlayMatch = 'dcf-notice-overlay';
  var overlayHeader = 'dcf-header';
  var overlayMaincontent = 'dcf-main';
  var typeInfo = 'dcf-notice-info';
  var typeSuccess = 'dcf-notice-success';
  var typeWarning = 'dcf-notice-warning';
  var typeDanger = 'dcf-notice-danger';
  var overlayHeaderElement = document.getElementById(overlayHeader);
  var overlayMaincontentElement = document.getElementById(overlayMaincontent);

  var DCFNoticeTheme = /*#__PURE__*/function () {
    function DCFNoticeTheme() {
      _classCallCheck(this, DCFNoticeTheme);

      // Defaults

      /* eslint-disable */
      this.noticeContainerClassList = ['dcf-d-grid', 'dcf-w-max-xl', 'dcf-ml-auto', 'dcf-mr-auto', 'dcf-mb-6', 'dcf-rounded'];
      this.closeNoticeInfoIconInnerHTML = '<svg class="dcf-h-100% dcf-w-100%" aria-hidden="true" focusable="false" height="24" width="24" viewBox="0 0 24 24"><path fill="#fefdfa" d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm-.5 4.8c.7 0 1.2.6 1.2 1.2s-.6 1.2-1.2 1.2-1.3-.5-1.3-1.2.6-1.2 1.3-1.2zM15 19.2H9c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h2.2v-7.5H10c-.4 0-.8-.3-.8-.8s.4-.5.8-.5h2c.2 0 .4.1.5.2.1.1.2.3.2.5v8.2H15c.4 0 .8.3.8.8s-.4.7-.8.7z"/></svg>';
      this.closeNoticeSuccessIconInnerHTML = '<svg class="dcf-h-100% dcf-w-100%" aria-hidden="true" focusable="false" height="24" width="24" viewBox="0 0 24 24"><path fill="#fefdfa" d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm5.5 9L10 16c-.1.1-.3.2-.5.2s-.4-.1-.5-.2l-2.5-2.5c-.1-.1-.2-.3-.2-.5s.1-.4.2-.5c.3-.3.8-.3 1.1 0l2 2 7-6.5c.1-.1.3-.2.5-.2s.4.1.5.2c.2.3.2.8-.1 1z"/></svg>';
      this.closeNoticeWarningIconInnerHTML = '<svg class="dcf-h-100% dcf-w-100%" aria-hidden="true" focusable="false" height="24" width="24" viewBox="0 0 24 24"><path fill="#fefdfa" d="M22.9 22.3l-11-22c-.2-.3-.7-.3-.9 0l-11 22c-.1.3.1.7.5.7h22c.4 0 .6-.4.4-.7zM10.8 8.1c0-.4.3-.7.8-.7.2 0 .4.1.5.2.1.1.2.3.2.5v7.7c0 .2-.1.4-.2.5-.1.1-.3.2-.5.2-.4 0-.7-.3-.8-.7V8.1zm.7 12.2c-.7 0-1.2-.5-1.2-1.2s.5-1.2 1.2-1.2 1.2.5 1.2 1.2-.5 1.2-1.2 1.2z"/></svg>';
      this.closeNoticeDangerIconInnerHTML = '<svg class="dcf-h-100% dcf-w-100%" aria-hidden="true" focusable="false" height="24" width="24" viewBox="0 0 24 24"><path fill="#fefdfa" d="M23.9 7L17.1.2c-.1-.1-.3-.2-.4-.2H7.2c-.1 0-.2.1-.3.1L.1 7c0 .1-.1.2-.1.3v9.5c0 .1.1.3.1.4l6.7 6.7c.2 0 .3.1.4.1h9.5c.1 0 .3-.1.4-.1l6.8-6.7c.1-.1.1-.2.1-.4V7.3c0-.1-.1-.2-.1-.3zM17 16c.3.3.3.8 0 1.1-.1.1-.3.2-.5.2s-.4-.1-.5-.3l-4-4-4 4c-.3.3-.8.3-1.1 0-.3-.3-.3-.8 0-1.1l4-4L7 8c-.2-.1-.2-.3-.2-.5s0-.4.2-.5c.3-.3.7-.3 1 0l4 4 4-4c.3-.3.8-.3 1.1 0 .1.1.2.3.2.5s-.1.4-.2.5l-4 4 3.9 4z"/></svg>';
      this.closeNoticeBtnClassList = ['dcf-btn', 'dcf-btn-inverse-tertiary', 'dcf-lh-1'];
      this.closeNoticeBtnInnerHTML = '<span class="dcf-sr-only">Close this notice</span><svg class="dcf-fill-current" aria-hidden="true" focusable="false" height="16" width="16" viewBox="0 0 24 24"><path d="M23.707 22.293L13.414 12 23.706 1.707A.999.999 0 1022.292.293L12 10.586 1.706.292A1 1 0 00.292 1.706L10.586 12 .292 22.294a1 1 0 101.414 1.414L12 13.414l10.293 10.292a.999.999 0 101.414-1.413z"/><path fill="none" d="M0 0h24v24H0z"/></svg>';
      /* eslint-enable */
    }

    _createClass(DCFNoticeTheme, [{
      key: "setThemeVariable",
      value: function setThemeVariable(themeVariableName, value) {
        switch (themeVariableName) {
          case 'noticeContainerClassList':
            if (Array.isArray(value)) {
              this.noticeContainerClassList = value;
            }

            break;

          case 'closeNoticeInfoIconInnerHTML':
            if (typeof value === 'string') {
              this.closeNoticeInfoIconInnerHTML = value;
            }

            break;

          case 'closeNoticeSuccessIconInnerHTML':
            if (typeof value === 'string') {
              this.closeNoticeSuccessIconInnerHTML = value;
            }

            break;

          case 'closeNoticeWarningIconInnerHTML':
            if (typeof value === 'string') {
              this.closeNoticeWarningIconInnerHTML = value;
            }

            break;

          case 'closeNoticeDangerIconInnerHTML':
            if (typeof value === 'string') {
              this.closeNoticeDangerIconInnerHTML = value;
            }

            break;

          case 'closeNoticeBtnClassList':
            if (Array.isArray(value)) {
              this.closeNoticeBtnClassList = value;
            }

            break;

          case 'closeNoticeBtnInnerHTML':
            if (typeof value === 'string') {
              this.closeNoticeBtnInnerHTML = value;
            }

            break;

          default:
            // Invalid variable so ignore
            break;
        }
      }
    }]);

    return DCFNoticeTheme;
  }();

  _exports.DCFNoticeTheme = DCFNoticeTheme;

  var DCFNotice = /*#__PURE__*/function () {
    function DCFNotice(theme) {
      _classCallCheck(this, DCFNotice);

      if (theme instanceof DCFNoticeTheme) {
        this.theme = theme;
      } else {
        this.theme = new DCFNoticeTheme();
      }
    }

    _createClass(DCFNotice, [{
      key: "initialize",
      value: function initialize() {
        var _this = this;

        var notices = document.getElementsByClassName('dcf-notice');
        Array.prototype.forEach.call(notices, function (notice) {
          _this.initNotice(notice);
        });
      }
    }, {
      key: "appendNotice",
      value: function appendNotice(parent, heading, message) {
        var type = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : typeInfo;
        var overlay = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : '';
        var notice = false;

        if (parent instanceof Element) {
          notice = this.createNotice(heading, message, type, overlay);
          parent.append(notice);
        }

        return notice;
      }
    }, {
      key: "prependNotice",
      value: function prependNotice(parent, heading, message) {
        var type = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : typeInfo;
        var overlay = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : '';
        var notice = false;

        if (parent instanceof Element) {
          notice = this.createNotice(heading, message, type, overlay);
          parent.prepend(notice);
        }

        return notice;
      }
    }, {
      key: "createNotice",
      value: function createNotice(heading, message) {
        var type = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : typeInfo;
        var overlay = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : '';
        var noticeHeading = document.createElement('h2');
        noticeHeading.innerText = heading;
        var noticeMsg = document.createElement('div');
        noticeMsg.innerHTML = message;
        var notice = document.createElement('div');
        notice.classList.add('dcf-notice');

        if (type === typeInfo || type === typeSuccess || type === typeWarning || type === typeDanger) {
          notice.classList.add(type);
        } else {
          notice.classList.add(typeInfo);
        }

        if (overlay === overlayHeader || overlay === overlayMaincontent) {
          notice.setAttribute('data-overlay', overlay);
        }

        notice.append(noticeHeading);
        notice.append(noticeMsg);
        this.initNotice(notice);
        return notice;
      }
    }, {
      key: "getNoticeIconContent",
      value: function getNoticeIconContent(notice) {
        var iconContent = this.theme.closeNoticeInfoIconInnerHTML;

        if (notice.classList.contains(typeSuccess)) {
          iconContent = this.theme.closeNoticeSuccessIconInnerHTML;
        } else if (notice.classList.contains(typeWarning)) {
          iconContent = this.theme.closeNoticeWarningIconInnerHTML;
        } else if (notice.classList.contains(typeDanger)) {
          iconContent = this.theme.closeNoticeDangerIconInnerHTML;
        }

        return iconContent;
      }
    }, {
      key: "initNotice",
      value: function initNotice(notice) {
        if (!notice.classList.contains('dcf-notice') || notice.classList.contains('dcf-notice-initialized')) {
          return;
        }

        var int0 = 0; // Get or Set notice id info

        var idPrefix = 'dcf-notice-';
        notice.setAttribute('id', _dcfUtility.DCFUtility.checkSetElementId(notice, idPrefix.concat(_dcfUtility.DCFUtility.uuidv4())));
        var headingId = "".concat(notice.getAttribute('id'), "-heading"); // Add other notice attributes

        notice.setAttribute('role', 'alertdialog');
        notice.setAttribute('aria-labelledby', headingId);

        if (!notice.classList.contains(typeInfo) && !notice.classList.contains(typeSuccess) && !notice.classList.contains(typeWarning) && !notice.classList.contains(typeDanger)) {
          notice.classList.add(typeInfo);
        }

        if (this.theme.noticeContainerClassList) {
          var _notice$classList;

          (_notice$classList = notice.classList).add.apply(_notice$classList, _toConsumableArray(this.theme.noticeContainerClassList));
        } // set notice icon


        var noticeIcon = document.createElement('div');
        noticeIcon.classList.add('dcf-notice-icon');
        noticeIcon.innerHTML = this.getNoticeIconContent(notice); // set notice heading

        var headings = notice.getElementsByTagName('h2');
        var heading = headings[int0] || document.createElement('h2');
        heading.classList.add('dcf-notice-heading', 'dcf-txt-h6', 'dcf-mb-0');
        heading.setAttribute('id', headingId); // set notice message

        var messages = notice.getElementsByTagName('div');
        var message = document.createElement('div');

        if (messages[int0]) {
          message = messages[int0].cloneNode(true);
        }

        message.classList.add('dcf-notice-message', 'dcf-txt-sm'); // build notice body

        var noticeBody = document.createElement('div');
        noticeBody.classList.add('dcf-notice-body');
        noticeBody.append(heading);
        noticeBody.append(message); // set notice icon and body

        notice.innerHTML = '';
        notice.append(noticeIcon);
        notice.append(noticeBody);
        var isOverlay = false;
        var overlayClass = "".concat(overlayMatch, "-").concat(overlayHeader);

        if (notice.dataset.overlay === overlayHeader || notice.classList.contains(overlayClass)) {
          isOverlay = true;
          notice.classList.add('dcf-absolute');
          notice.classList.add(overlayMatch);
          notice.classList.remove(overlayClass);
          overlayHeaderElement.append(notice);
        }

        overlayClass = "".concat(overlayMatch, "-").concat(overlayMaincontent);

        if (!isOverlay && (notice.dataset.overlay === overlayMaincontent || notice.classList.contains(overlayClass))) {
          isOverlay = true;
          notice.classList.add('dcf-absolute');
          notice.classList.add(overlayMatch);
          notice.classList.remove(overlayClass);
          overlayMaincontentElement.prepend(notice);
        }
        /* eslint func-style: ["error", "declaration", { "allowArrowFunctions": true }] */


        var handleNoticeClose = function handleNoticeClose() {
          notice.remove();
        }; // Add close button unless data-no-close-button exists


        if (notice.dataset.noCloseButton === undefined) {
          var closeButton = document.createElement('button');

          if (this.theme.closeNoticeBtnClassList) {
            var _closeButton$classLis;

            (_closeButton$classLis = closeButton.classList).add.apply(_closeButton$classLis, _toConsumableArray(this.theme.closeNoticeBtnClassList));
          }

          if (this.theme.closeNoticeBtnInnerHTML) {
            closeButton.innerHTML = this.theme.closeNoticeBtnInnerHTML;
          }

          closeButton.removeEventListener('click', handleNoticeClose);
          closeButton.addEventListener('click', handleNoticeClose);
          var closeNotice = document.createElement('div');
          closeNotice.classList.add('dcf-notice-close');
          closeNotice.append(closeButton);
          notice.append(closeNotice);
        }

        notice.classList.add('dcf-notice-initialized');
        notice.removeAttribute('hidden');
      }
    }]);

    return DCFNotice;
  }();

  _exports.DCFNotice = DCFNotice;
});
