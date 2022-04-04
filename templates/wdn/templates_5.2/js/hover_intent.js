'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

require(['plugins/hoverIntent/hoverintent'], function () {

	/**
  * Base class to set up any kind of Intent
  * */
	var Intent = function Intent(el) {
		var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

		_classCallCheck(this, Intent);

		this.el = el;
		this.options = options;
	};

	/**
 * HoverIntent subclass that uses the hoverintent library
  * @param el - the element to attach hoverintent to
  * @param options - [optional] options for configuring hoverintent
  * @param mq - [optional] media query conditions for handling isMobile vs otherwise
  * @param handleIn - callback function to handle hover in behavior for the selected element
  * @param handleOut - callback function to handle hover out behavior for the selected element
  * @package (hoverintent)[https://github.com/tristen/hoverintent]
 * */


	var HoverIntent = function (_Intent) {
		_inherits(HoverIntent, _Intent);

		function HoverIntent(el) {
			var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
			var mq = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
			var handleIn = arguments[3];
			var handleOut = arguments[4];

			_classCallCheck(this, HoverIntent);

			var _this = _possibleConstructorReturn(this, (HoverIntent.__proto__ || Object.getPrototypeOf(HoverIntent)).call(this, el, options));

			_this.isMobile = true;

			_this.handleMediaChanges = function (mql) {
				if (mql.matches) {
					_this.isMobile = false;
					_this.addListener();
				} else {
					_this.isMobile = true;
					_this.removeListener();
				}
			};

			_this.handleIn = handleIn;
			_this.handleOut = handleOut;
			_this.mq = mq;
			// bind context of this to the HoverIntent
			// instance since it can be overwritten by the matchMedia event listener. Another alternative is to write
			// handleMediaChanges using arrow functions to prevent rebounding of this
			// this.handleMediaChanges = this.handleMediaChanges.bind(this);
			return _this;
		}

		_createClass(HoverIntent, [{
			key: 'addListener',
			value: function addListener() {
				this.hoverListener = hoverintent(this.el, this.handleIn, this.handleOut).options(this.options);
			}
		}, {
			key: 'removeListener',
			value: function removeListener() {
				if (this.hoverListener) this.hoverListener.remove();
			}
		}, {
			key: 'onWidthChange',
			value: function onWidthChange() {
				var mediaQueryList = window.matchMedia(this.mq);
				mediaQueryList.addListener(this.handleMediaChanges);
			}
		}, {
			key: 'initialize',
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
