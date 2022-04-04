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

/* wdn/templates_5.3/js/dcf-table.js */
class __TwigTemplate_98b70ebede21a92f590b4bd640df8074 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dcf-table.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dcf-table.js"));

        // line 1
        echo "define([\"exports\", \"./dcf-utility\"], function (_exports, _dcfUtility) {
  \"use strict\";

  Object.defineProperty(_exports, \"__esModule\", {
    value: true
  });
  _exports.DCFTable = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }

  var DCFTable = /*#__PURE__*/function () {
    function DCFTable(tables) {
      _classCallCheck(this, DCFTable);

      this.tables = tables;
    }

    _createClass(DCFTable, [{
      key: \"initialize\",
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
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/dcf-table.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\", \"./dcf-utility\"], function (_exports, _dcfUtility) {
  \"use strict\";

  Object.defineProperty(_exports, \"__esModule\", {
    value: true
  });
  _exports.DCFTable = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }

  var DCFTable = /*#__PURE__*/function () {
    function DCFTable(tables) {
      _classCallCheck(this, DCFTable);

      this.tables = tables;
    }

    _createClass(DCFTable, [{
      key: \"initialize\",
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
", "wdn/templates_5.3/js/dcf-table.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/dcf-table.js");
    }
}
