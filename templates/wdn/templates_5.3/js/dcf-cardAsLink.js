define(["exports"], function (_exports) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFCardAsLink = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  // Based on https://inclusive-components.design/cards/
  // Using mousedown and mouseup to allow selecting text without trigger click
  var DCFCardAsLink = /*#__PURE__*/function () {
    function DCFCardAsLink(cards) {
      _classCallCheck(this, DCFCardAsLink);

      this.cards = cards;
    }

    _createClass(DCFCardAsLink, [{
      key: "initialize",
      value: function initialize() {
        Array.prototype.forEach.call(this.cards, function (card) {
          var down = 0;
          var up = 0;
          var link = card.querySelector('.dcf-card-link');

          card.onmousedown = function () {
            down = Number(new Date());
          };

          card.onmouseup = function () {
            up = Number(new Date());
            var int200 = 200;

            if (up - down < int200) {
              link.click();
            }
          };

          card.style.cursor = 'pointer';
        });
      }
    }]);

    return DCFCardAsLink;
  }();

  _exports.DCFCardAsLink = DCFCardAsLink;
});
