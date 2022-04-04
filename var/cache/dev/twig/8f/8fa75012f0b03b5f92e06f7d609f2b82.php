<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* wdn/templates_5.3/js/dcf-pagination.js */
class __TwigTemplate_35efb03de8e1b65f8b6eb43fe2297a95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dcf-pagination.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dcf-pagination.js"));

        // line 1
        echo "define([\"exports\"], function (_exports) {
  \"use strict\";

  Object.defineProperty(_exports, \"__esModule\", {
    value: true
  });
  _exports.DCFPagination = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }

  var DCFPagination = /*#__PURE__*/function () {
    function DCFPagination(PaginationNavs) {
      _classCallCheck(this, DCFPagination);

      this.PaginationNavs = PaginationNavs;
    }

    _createClass(DCFPagination, [{
      key: \"initialize\",
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
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/dcf-pagination.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\"], function (_exports) {
  \"use strict\";

  Object.defineProperty(_exports, \"__esModule\", {
    value: true
  });
  _exports.DCFPagination = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }

  var DCFPagination = /*#__PURE__*/function () {
    function DCFPagination(PaginationNavs) {
      _classCallCheck(this, DCFPagination);

      this.PaginationNavs = PaginationNavs;
    }

    _createClass(DCFPagination, [{
      key: \"initialize\",
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
", "wdn/templates_5.3/js/dcf-pagination.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/dcf-pagination.js");
    }
}
