"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

require(['plugins/hoverIntent/hoverintent'], function () {
  /**
   * Base class to set up any kind of Intent
   * */
  var Intent = /*#__PURE__*/_createClass(function Intent(el) {
    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

    _classCallCheck(this, Intent);

    this.el = el;
    this.options = options;
  });
  /**
  * HoverIntent subclass that uses the hoverintent library
   * @param el - the element to attach hoverintent to
   * @param options - [optional] options for configuring hoverintent
   * @param mq - [optional] media query conditions for handling isMobile vs otherwise
   * @param handleIn - callback function to handle hover in behavior for the selected element
   * @param handleOut - callback function to handle hover out behavior for the selected element
   * @package (hoverintent)[https://github.com/tristen/hoverintent]
  * */


  var HoverIntent = /*#__PURE__*/function (_Intent) {
    _inherits(HoverIntent, _Intent);

    var _super = _createSuper(HoverIntent);

    function HoverIntent(el) {
      var _this;

      var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
      var mq = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
      var handleIn = arguments.length > 3 ? arguments[3] : undefined;
      var handleOut = arguments.length > 4 ? arguments[4] : undefined;

      _classCallCheck(this, HoverIntent);

      _this = _super.call(this, el, options);

      _defineProperty(_assertThisInitialized(_this), "hoverListener", void 0);

      _defineProperty(_assertThisInitialized(_this), "isMobile", true);

      _defineProperty(_assertThisInitialized(_this), "handleMediaChanges", function (mql) {
        if (mql.matches) {
          _this.isMobile = false;

          _this.addListener();
        } else {
          _this.isMobile = true;

          _this.removeListener();
        }
      });

      _this.handleIn = handleIn;
      _this.handleOut = handleOut;
      _this.mq = mq; // bind context of this to the HoverIntent
      // instance since it can be overwritten by the matchMedia event listener. Another alternative is to write
      // handleMediaChanges using arrow functions to prevent rebounding of this
      // this.handleMediaChanges = this.handleMediaChanges.bind(this);

      return _this;
    }

    _createClass(HoverIntent, [{
      key: "addListener",
      value: function addListener() {
        this.hoverListener = hoverintent(this.el, this.handleIn, this.handleOut).options(this.options);
      }
    }, {
      key: "removeListener",
      value: function removeListener() {
        if (this.hoverListener) this.hoverListener.remove();
      }
    }, {
      key: "onWidthChange",
      value: function onWidthChange() {
        var mediaQueryList = window.matchMedia(this.mq);
        mediaQueryList.addListener(this.handleMediaChanges);
      }
    }, {
      key: "initialize",
      value: function initialize() {
        var mediaQueryList = window.matchMedia(this.mq);
        this.handleMediaChanges(mediaQueryList);
        this.onWidthChange();
      }
    }]);

    return HoverIntent;
  }(Intent);
  /**
   * Setting up localNav hover intent
   * */


  var localNav = document.querySelector('.dcf-nav-local');

  function navHandleIn() {
    this.previousElementSibling.setAttribute('aria-expanded', true);
  }

  function navHandleOut() {
    this.previousElementSibling.removeAttribute('aria-expanded');
  }

  var navMQ = 'screen and (min-width: 56.123125em)';
  var navIntent = new HoverIntent(localNav, undefined, navMQ, navHandleIn, navHandleOut);
  navIntent.initialize();
});
