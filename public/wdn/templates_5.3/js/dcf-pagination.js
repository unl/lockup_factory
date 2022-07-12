define(["exports"], function (_exports) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFPagination = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var DCFPagination = /*#__PURE__*/function () {
    function DCFPagination(PaginationNavs) {
      _classCallCheck(this, DCFPagination);

      this.PaginationNavs = PaginationNavs;
    }

    _createClass(DCFPagination, [{
      key: "initialize",
      value: function initialize() {
        var int1 = 1;
        var int0 = 0;
        Array.prototype.forEach.call(this.PaginationNavs, function (nav) {
          nav.setAttribute('role', 'navigation');
          nav.setAttribute('aria-label', 'Pagination Navigation');
          var lists = nav.getElementsByTagName('ol');

          if (lists.length !== int1) {
            // invalid format so bail
            return;
          }

          var list = lists[int0];
          list.classList.remove('dcf-list-inline');
          list.classList.add('dcf-list-bare', 'dcf-d-flex', 'dcf-flex-wrap', 'dcf-ai-center', 'dcf-col-gap-2', 'dcf-row-gap-2');
          var listAnchors = list.getElementsByTagName('a');
          Array.prototype.forEach.call(listAnchors, function (anchor) {
            anchor.classList.add('dcf-btn', 'dcf-btn-secondary', 'dcf-txt-xs');

            if (anchor.classList.contains('dcf-pagination-first')) {
              anchor.setAttribute('aria-label', 'First page.');
            } else if (anchor.classList.contains('dcf-pagination-prev')) {
              anchor.setAttribute('aria-label', 'Previous page.');
            } else if (anchor.classList.contains('dcf-pagination-next')) {
              anchor.setAttribute('aria-label', 'Next page.');
            } else if (anchor.classList.contains('dcf-pagination-last')) {
              anchor.setAttribute('aria-label', 'Last page.');
            }
          });
          var listSpans = list.getElementsByTagName('span');
          Array.prototype.forEach.call(listSpans, function (span) {
            if (span.classList.contains('dcf-pagination-selected')) {
              span.classList.add('dcf-txt-xs', 'dcf-bold');
              span.setAttribute('aria-current', true);
              span.setAttribute('aria-label', 'Current page.');
            } else if (span.classList.contains('dcf-pagination-ellipsis')) {
              span.classList.add('dcf-txt-xs');
              span.setAttribute('aria-hidden', true);
            }
          });
        });
      }
    }]);

    return DCFPagination;
  }();

  _exports.DCFPagination = DCFPagination;
});
