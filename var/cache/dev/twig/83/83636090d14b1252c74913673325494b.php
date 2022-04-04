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

/* wdn/templates_5.0/js/plugins/flatpickr/plugins/scrollPlugin.js */
class __TwigTemplate_1b035ba20f114430136b740d067eaa7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/scrollPlugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/scrollPlugin.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global.scrollPlugin = factory());
}(this, (function () { 'use strict';

    function delta(e) {
      return Math.max(-1, Math.min(1, e.wheelDelta || -e.deltaY));
    }

    var scroll = function scroll(e) {
      e.preventDefault();
      var ev = new CustomEvent(\"increment\", {
        bubbles: true
      });
      ev.delta = delta(e);
      e.target.dispatchEvent(ev);
    };

    function scrollMonth(fp) {
      return function (e) {
        e.preventDefault();
        var mDelta = delta(e);
        fp.changeMonth(mDelta);
      };
    }

    function scrollPlugin() {
      return function (fp) {
        var monthScroller = scrollMonth(fp);
        return {
          onReady: function onReady() {
            if (fp.timeContainer) {
              fp.timeContainer.addEventListener(\"wheel\", scroll);
            }

            fp.yearElements.forEach(function (yearElem) {
              return yearElem.addEventListener(\"wheel\", scroll);
            });
            fp.monthElements.forEach(function (monthElem) {
              return monthElem.addEventListener(\"wheel\", monthScroller);
            });
          },
          onDestroy: function onDestroy() {
            if (fp.timeContainer) {
              fp.timeContainer.removeEventListener(\"wheel\", scroll);
            }

            fp.yearElements.forEach(function (yearElem) {
              return yearElem.removeEventListener(\"wheel\", scroll);
            });
            fp.monthElements.forEach(function (monthElem) {
              return monthElem.removeEventListener(\"wheel\", monthScroller);
            });
          }
        };
      };
    }

    return scrollPlugin;

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/plugins/scrollPlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global.scrollPlugin = factory());
}(this, (function () { 'use strict';

    function delta(e) {
      return Math.max(-1, Math.min(1, e.wheelDelta || -e.deltaY));
    }

    var scroll = function scroll(e) {
      e.preventDefault();
      var ev = new CustomEvent(\"increment\", {
        bubbles: true
      });
      ev.delta = delta(e);
      e.target.dispatchEvent(ev);
    };

    function scrollMonth(fp) {
      return function (e) {
        e.preventDefault();
        var mDelta = delta(e);
        fp.changeMonth(mDelta);
      };
    }

    function scrollPlugin() {
      return function (fp) {
        var monthScroller = scrollMonth(fp);
        return {
          onReady: function onReady() {
            if (fp.timeContainer) {
              fp.timeContainer.addEventListener(\"wheel\", scroll);
            }

            fp.yearElements.forEach(function (yearElem) {
              return yearElem.addEventListener(\"wheel\", scroll);
            });
            fp.monthElements.forEach(function (monthElem) {
              return monthElem.addEventListener(\"wheel\", monthScroller);
            });
          },
          onDestroy: function onDestroy() {
            if (fp.timeContainer) {
              fp.timeContainer.removeEventListener(\"wheel\", scroll);
            }

            fp.yearElements.forEach(function (yearElem) {
              return yearElem.removeEventListener(\"wheel\", scroll);
            });
            fp.monthElements.forEach(function (monthElem) {
              return monthElem.removeEventListener(\"wheel\", monthScroller);
            });
          }
        };
      };
    }

    return scrollPlugin;

})));
", "wdn/templates_5.0/js/plugins/flatpickr/plugins/scrollPlugin.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/plugins/scrollPlugin.js");
    }
}
