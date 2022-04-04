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

/* wdn/templates_5.2/js/dcf-scrollAnimation.js */
class __TwigTemplate_b967b9b0b53acc4cfbd701d86cefc2f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/dcf-scrollAnimation.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/dcf-scrollAnimation.js"));

        // line 1
        echo "'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var DCFScrollAnimation = function () {
  function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {
    _classCallCheck(this, DCFScrollAnimation);

    this.itemList = itemList;
    this.observerConfig = observerConfig;
    this.animationClassNames = animationClassNames;
  }
  // Disconnect the observer


  _createClass(DCFScrollAnimation, [{
    key: 'disconnect',
    value: function disconnect() {
      if (!this.observer) {
        return;
      }
      this.observer.disconnect();
    }
  }, {
    key: 'initialize',
    value: function initialize() {
      var _this = this;

      // onIntersection callback function
      var onIntersection = function onIntersection(entries, observer) {
        var zero = 0;
        var zeroIndex = 0;
        var oneIndex = 1;
        // Disconnect if we've already loaded all of the items
        if (_this.itemsCount === zero) {
          _this.observer.disconnect();
        }
        // Loop through the entries
        entries.forEach(function (entry) {
          if (entry.intersectionRatio >= observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {
            // Add animation classes to entry
            if (_this.animationClassNames.length) {
              _this.animationClassNames.forEach(function (className) {
                return entry.target.classList.add(className);
              });
            }
          } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {
            _this.itemsCount--;
            _this.observer.unobserve(entry.target);
          }
        });
      };
      if (!this.itemList) {
        return;
      }
      this.itemsCount = this.itemList.length;
      if ('IntersectionObserver' in window) {
        this.observer = new IntersectionObserver(onIntersection, this.observerConfig);
        this.itemList.forEach(function (item) {
          _this.observer.observe(item);
        });
      }
    }
  }]);

  return DCFScrollAnimation;
}();
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/dcf-scrollAnimation.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var DCFScrollAnimation = function () {
  function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {
    _classCallCheck(this, DCFScrollAnimation);

    this.itemList = itemList;
    this.observerConfig = observerConfig;
    this.animationClassNames = animationClassNames;
  }
  // Disconnect the observer


  _createClass(DCFScrollAnimation, [{
    key: 'disconnect',
    value: function disconnect() {
      if (!this.observer) {
        return;
      }
      this.observer.disconnect();
    }
  }, {
    key: 'initialize',
    value: function initialize() {
      var _this = this;

      // onIntersection callback function
      var onIntersection = function onIntersection(entries, observer) {
        var zero = 0;
        var zeroIndex = 0;
        var oneIndex = 1;
        // Disconnect if we've already loaded all of the items
        if (_this.itemsCount === zero) {
          _this.observer.disconnect();
        }
        // Loop through the entries
        entries.forEach(function (entry) {
          if (entry.intersectionRatio >= observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {
            // Add animation classes to entry
            if (_this.animationClassNames.length) {
              _this.animationClassNames.forEach(function (className) {
                return entry.target.classList.add(className);
              });
            }
          } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {
            _this.itemsCount--;
            _this.observer.unobserve(entry.target);
          }
        });
      };
      if (!this.itemList) {
        return;
      }
      this.itemsCount = this.itemList.length;
      if ('IntersectionObserver' in window) {
        this.observer = new IntersectionObserver(onIntersection, this.observerConfig);
        this.itemList.forEach(function (item) {
          _this.observer.observe(item);
        });
      }
    }
  }]);

  return DCFScrollAnimation;
}();
", "wdn/templates_5.2/js/dcf-scrollAnimation.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/dcf-scrollAnimation.js");
    }
}
