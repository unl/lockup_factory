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

/* wdn/templates_5.0/js/plugins/flatpickr/plugins/monthSelect/monthSelect.js */
class __TwigTemplate_2ff66a4f29446331f1b6d141f763c726 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/monthSelect/monthSelect.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/monthSelect/monthSelect.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global.monthSelect = factory());
}(this, (function () { 'use strict';

    function monthSelectPlugin() {
      return function (fp) {
        var days;

        function onDayHover(event) {
          if (!event.target || !event.target.classList.contains(\"flatpickr-day\")) return;
          var dayIndex = Array.prototype.indexOf.call(days, event.target);
          fp.monthStartDay = new Date(days[dayIndex].dateObj.getFullYear(), days[dayIndex].dateObj.getMonth(), 1, 0, 0, 0, 0).getTime();
          fp.monthEndDay = new Date(days[dayIndex].dateObj.getFullYear(), days[dayIndex].dateObj.getMonth() + 1, 0, 0, 0, 0, 0).getTime();

          for (var i = days.length; i--;) {
            var date = days[i].dateObj.getTime();
            if (date > fp.monthEndDay || date < fp.monthStartDay) days[i].classList.remove(\"inRange\");else days[i].classList.add(\"inRange\");
            if (date != fp.monthEndDay) days[i].classList.remove(\"endRange\");else days[i].classList.add(\"endRange\");
            if (date != fp.monthStartDay) days[i].classList.remove(\"startRange\");else days[i].classList.add(\"startRange\");
          }
        }

        function highlightMonth() {
          for (var i = days.length; i--;) {
            var date = days[i].dateObj.getTime();
            if (date >= fp.monthStartDay && date <= fp.monthEndDay) days[i].classList.add(\"month\", \"selected\");
            if (date != fp.monthEndDay) days[i].classList.remove(\"endRange\");else days[i].classList.add(\"endRange\");
            if (date != fp.monthStartDay) days[i].classList.remove(\"startRange\");else days[i].classList.add(\"startRange\");
          }
        }

        function clearHover() {
          for (var i = days.length; i--;) {
            days[i].classList.remove(\"inRange\");
          }
        }

        return {
          onChange: highlightMonth,
          onMonthChange: highlightMonth,
          onClose: clearHover,
          onParseConfig: function onParseConfig() {
            fp.config.mode = \"single\";
            fp.config.enableTime = false;
          },
          onReady: [function () {
            days = fp.days.childNodes;
          }, function () {
            return fp.days.addEventListener(\"mouseover\", onDayHover);
          }, highlightMonth]
        };
      };
    }

    return monthSelectPlugin;

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/plugins/monthSelect/monthSelect.js";
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
    (global.monthSelect = factory());
}(this, (function () { 'use strict';

    function monthSelectPlugin() {
      return function (fp) {
        var days;

        function onDayHover(event) {
          if (!event.target || !event.target.classList.contains(\"flatpickr-day\")) return;
          var dayIndex = Array.prototype.indexOf.call(days, event.target);
          fp.monthStartDay = new Date(days[dayIndex].dateObj.getFullYear(), days[dayIndex].dateObj.getMonth(), 1, 0, 0, 0, 0).getTime();
          fp.monthEndDay = new Date(days[dayIndex].dateObj.getFullYear(), days[dayIndex].dateObj.getMonth() + 1, 0, 0, 0, 0, 0).getTime();

          for (var i = days.length; i--;) {
            var date = days[i].dateObj.getTime();
            if (date > fp.monthEndDay || date < fp.monthStartDay) days[i].classList.remove(\"inRange\");else days[i].classList.add(\"inRange\");
            if (date != fp.monthEndDay) days[i].classList.remove(\"endRange\");else days[i].classList.add(\"endRange\");
            if (date != fp.monthStartDay) days[i].classList.remove(\"startRange\");else days[i].classList.add(\"startRange\");
          }
        }

        function highlightMonth() {
          for (var i = days.length; i--;) {
            var date = days[i].dateObj.getTime();
            if (date >= fp.monthStartDay && date <= fp.monthEndDay) days[i].classList.add(\"month\", \"selected\");
            if (date != fp.monthEndDay) days[i].classList.remove(\"endRange\");else days[i].classList.add(\"endRange\");
            if (date != fp.monthStartDay) days[i].classList.remove(\"startRange\");else days[i].classList.add(\"startRange\");
          }
        }

        function clearHover() {
          for (var i = days.length; i--;) {
            days[i].classList.remove(\"inRange\");
          }
        }

        return {
          onChange: highlightMonth,
          onMonthChange: highlightMonth,
          onClose: clearHover,
          onParseConfig: function onParseConfig() {
            fp.config.mode = \"single\";
            fp.config.enableTime = false;
          },
          onReady: [function () {
            days = fp.days.childNodes;
          }, function () {
            return fp.days.addEventListener(\"mouseover\", onDayHover);
          }, highlightMonth]
        };
      };
    }

    return monthSelectPlugin;

})));
", "wdn/templates_5.0/js/plugins/flatpickr/plugins/monthSelect/monthSelect.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/plugins/monthSelect/monthSelect.js");
    }
}
