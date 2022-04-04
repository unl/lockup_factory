define(["exports", "./dcf-utility"], function (_exports, _dcfUtility) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFTable = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var DCFTable = /*#__PURE__*/function () {
    function DCFTable(tables) {
      _classCallCheck(this, DCFTable);

      this.tables = tables;
    }

    _createClass(DCFTable, [{
      key: "initialize",
      value: function initialize() {
        Array.prototype.forEach.call(this.tables, function (table) {
          // handle scrollable tables
          var tableParent = table.parentNode;

          if (tableParent && tableParent.classList.contains('dcf-overflow-x-auto')) {
            // add tabIndex to parent if missing
            if (!tableParent.hasAttribute('tabIndex')) {
              tableParent.setAttribute('tabIndex', _dcfUtility.DCFUtility.magicNumbers('int0'));
            }
          }
        });
      }
    }]);

    return DCFTable;
  }();

  _exports.DCFTable = DCFTable;
});
