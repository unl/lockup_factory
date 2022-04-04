'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var DCFUtility = function () {
  function DCFUtility() {
    _classCallCheck(this, DCFUtility);
  }

  _createClass(DCFUtility, null, [{
    key: 'magicNumbers',
    value: function magicNumbers(magicNumber) {
      var magicNumbers = {
        // integer values
        int0: 0,
        int1: 1,
        int2: 2,
        int16: 16,

        // hex values
        hex0x3: 0x3,
        hex0x8: 0x8,

        // Keycodes
        escCode: 27,
        spaceKeyCode: 32,
        arrowLeftCode: 37,
        arrowUpCode: 38,
        arrowRightCode: 39,
        arrowDownCode: 40
      };
      Object.freeze(magicNumbers);

      return magicNumber in magicNumbers ? magicNumbers[magicNumber] : undefined;
    }
  }, {
    key: 'uuidv4',
    value: function uuidv4() {
      var NUMERIC_0 = DCFUtility.magicNumbers('int0');
      var NUMERIC_16 = DCFUtility.magicNumbers('int16');
      var HEX0x3 = DCFUtility.magicNumbers('hex0x3');
      var HEX0x8 = DCFUtility.magicNumbers('hex0x8');

      return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (uuid) {
        var rand = Math.random() * NUMERIC_16 | NUMERIC_0,
            uuidv4 = uuid === 'x' ? rand : rand & HEX0x3 | HEX0x8;
        return uuidv4.toString(NUMERIC_16);
      });
    }
  }, {
    key: 'testWebp',
    value: function testWebp(callback) {
      var supportsSessionCheck = window.sessionStorage ? window.sessionStorage.getItem('webpSupport') : null;
      if (supportsSessionCheck !== null) {
        callback(supportsSessionCheck === 'true');
        return;
      }

      var webP = new Image();
      webP.onload = webP.onerror = function () {
        var supports = webP.height === DCFUtility.magicNumbers('int2');
        if (window.sessionStorage) {
          window.sessionStorage.setItem('webpSupport', supports);
        }
        callback(supports);
      };
      webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
    }
  }, {
    key: 'flagSupportsWebP',
    value: function flagSupportsWebP() {
      var element = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document.documentElement;

      DCFUtility.testWebp(function (supported) {
        if (supported) {
          if (element.classList.contains('dcf-no-webp')) {
            element.classList.remove('dcf-no-webp');
          }
          element.classList.add('dcf-webp');
        }
      });
    }
  }, {
    key: 'flagSupportsJavaScript',
    value: function flagSupportsJavaScript() {
      var element = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document.documentElement;

      if (element.classList.contains('dcf-no-js')) {
        element.classList.remove('dcf-no-js');
      }
      element.classList.add('dcf-js');
    }
  }]);

  return DCFUtility;
}();
