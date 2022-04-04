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

/* wdn/templates_5.3/js/dcf-scrollAnimation.js */
class __TwigTemplate_427dfdc57506122ed2168d2b2b2cebdf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dcf-scrollAnimation.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dcf-scrollAnimation.js"));

        // line 1
        echo "define([\"exports\"], function (_exports) {
  \"use strict\";

  Object.defineProperty(_exports, \"__esModule\", {
    value: true
  });
  _exports.DCFScrollAnimation = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }

  var DCFScrollAnimation = /*#__PURE__*/function () {
    function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {
      _classCallCheck(this, DCFScrollAnimation);

      this.itemList = itemList;
      this.observerConfig = observerConfig;
      this.animationClassNames = animationClassNames;
    } // Disconnect the observer


    _createClass(DCFScrollAnimation, [{
      key: \"disconnect\",
      value: function disconnect() {
        if (!this.observer) {
          return;
        }

        this.observer.disconnect();
      }
    }, {
      key: \"initialize\",
      value: function initialize() {
        var _this = this;

        // onIntersection callback function
        var onIntersection = function onIntersection(entries, observer) {
          var zero = 0;
          var zeroIndex = 0;
          var oneIndex = 1; // Disconnect if we've already loaded all of the items

          if (_this.itemsCount === zero) {
            _this.observer.disconnect();
          } // Loop through the entries


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
        /* eslint func-style: [\"error\", \"declaration\", { \"allowArrowFunctions\": true }] */


        var onLoadIntersection = function onLoadIntersection(entries) {
          var zero = 0;
          entries.forEach(function (entry) {
            if (entry.intersectionRatio > zero) {
              // entry is in view port on page load so add animation classes to entry
              if (_this.animationClassNames.length) {
                _this.animationClassNames.forEach(function (className) {
                  return entry.target.classList.add(className);
                });
              }
            }

            _this.loadObserver.unobserve(entry.target);
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
          window.addEventListener('load', function () {
            _this.loadObserver = new IntersectionObserver(onLoadIntersection);

            _this.itemList.forEach(function (item) {
              _this.loadObserver.observe(item);
            });
          });
        }
      }
    }]);

    return DCFScrollAnimation;
  }();

  _exports.DCFScrollAnimation = DCFScrollAnimation;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/dcf-scrollAnimation.js";
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
  _exports.DCFScrollAnimation = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }

  var DCFScrollAnimation = /*#__PURE__*/function () {
    function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {
      _classCallCheck(this, DCFScrollAnimation);

      this.itemList = itemList;
      this.observerConfig = observerConfig;
      this.animationClassNames = animationClassNames;
    } // Disconnect the observer


    _createClass(DCFScrollAnimation, [{
      key: \"disconnect\",
      value: function disconnect() {
        if (!this.observer) {
          return;
        }

        this.observer.disconnect();
      }
    }, {
      key: \"initialize\",
      value: function initialize() {
        var _this = this;

        // onIntersection callback function
        var onIntersection = function onIntersection(entries, observer) {
          var zero = 0;
          var zeroIndex = 0;
          var oneIndex = 1; // Disconnect if we've already loaded all of the items

          if (_this.itemsCount === zero) {
            _this.observer.disconnect();
          } // Loop through the entries


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
        /* eslint func-style: [\"error\", \"declaration\", { \"allowArrowFunctions\": true }] */


        var onLoadIntersection = function onLoadIntersection(entries) {
          var zero = 0;
          entries.forEach(function (entry) {
            if (entry.intersectionRatio > zero) {
              // entry is in view port on page load so add animation classes to entry
              if (_this.animationClassNames.length) {
                _this.animationClassNames.forEach(function (className) {
                  return entry.target.classList.add(className);
                });
              }
            }

            _this.loadObserver.unobserve(entry.target);
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
          window.addEventListener('load', function () {
            _this.loadObserver = new IntersectionObserver(onLoadIntersection);

            _this.itemList.forEach(function (item) {
              _this.loadObserver.observe(item);
            });
          });
        }
      }
    }]);

    return DCFScrollAnimation;
  }();

  _exports.DCFScrollAnimation = DCFScrollAnimation;
});
", "wdn/templates_5.3/js/dcf-scrollAnimation.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/dcf-scrollAnimation.js");
    }
}
