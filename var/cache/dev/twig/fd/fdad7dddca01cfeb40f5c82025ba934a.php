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

/* wdn/templates_5.0/js/plugins/flatpickr/plugins/weekSelect/weekSelect.js */
class __TwigTemplate_0f96b80fe9f3589861bd16bddd8ac916 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/weekSelect/weekSelect.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/weekSelect/weekSelect.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global.weekSelect = factory());
}(this, (function () { 'use strict';

    function weekSelectPlugin() {
      return function (fp) {
        function onDayHover(event) {
          var day = event.target;
          if (!day.classList.contains(\"flatpickr-day\")) return;
          var days = fp.days.childNodes;
          var dayIndex = day.\$i;
          var dayIndSeven = dayIndex / 7;
          var weekStartDay = days[7 * Math.floor(dayIndSeven)].dateObj;
          var weekEndDay = days[7 * Math.ceil(dayIndSeven + 0.01) - 1].dateObj;

          for (var i = days.length; i--;) {
            var _day = days[i];
            var date = _day.dateObj;
            if (date > weekEndDay || date < weekStartDay) _day.classList.remove(\"inRange\");else _day.classList.add(\"inRange\");
          }
        }

        function highlightWeek() {
          var selDate = fp.latestSelectedDateObj;

          if (selDate !== undefined && selDate.getMonth() === fp.currentMonth && selDate.getFullYear() === fp.currentYear) {
            fp.weekStartDay = fp.days.childNodes[7 * Math.floor(fp.selectedDateElem.\$i / 7)].dateObj;
            fp.weekEndDay = fp.days.childNodes[7 * Math.ceil(fp.selectedDateElem.\$i / 7 + 0.01) - 1].dateObj;
          }

          var days = fp.days.childNodes;

          for (var i = days.length; i--;) {
            var date = days[i].dateObj;
            if (date >= fp.weekStartDay && date <= fp.weekEndDay) days[i].classList.add(\"week\", \"selected\");
          }
        }

        function clearHover() {
          var days = fp.days.childNodes;

          for (var i = days.length; i--;) {
            days[i].classList.remove(\"inRange\");
          }
        }

        function onReady() {
          if (fp.daysContainer !== undefined) fp.daysContainer.addEventListener(\"mouseover\", onDayHover);
        }

        function onDestroy() {
          if (fp.daysContainer !== undefined) fp.daysContainer.removeEventListener(\"mouseover\", onDayHover);
        }

        return {
          onValueUpdate: highlightWeek,
          onMonthChange: highlightWeek,
          onYearChange: highlightWeek,
          onClose: clearHover,
          onParseConfig: function onParseConfig() {
            fp.config.mode = \"single\";
            fp.config.enableTime = false;
            fp.config.dateFormat = fp.config.dateFormat ? fp.config.dateFormat : \"\\\\W\\\\e\\\\e\\\\k #W, Y\";
            fp.config.altFormat = fp.config.altFormat ? fp.config.altFormat : \"\\\\W\\\\e\\\\e\\\\k #W, Y\";
          },
          onReady: [onReady, highlightWeek],
          onDestroy: onDestroy
        };
      };
    }

    return weekSelectPlugin;

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/plugins/weekSelect/weekSelect.js";
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
    (global.weekSelect = factory());
}(this, (function () { 'use strict';

    function weekSelectPlugin() {
      return function (fp) {
        function onDayHover(event) {
          var day = event.target;
          if (!day.classList.contains(\"flatpickr-day\")) return;
          var days = fp.days.childNodes;
          var dayIndex = day.\$i;
          var dayIndSeven = dayIndex / 7;
          var weekStartDay = days[7 * Math.floor(dayIndSeven)].dateObj;
          var weekEndDay = days[7 * Math.ceil(dayIndSeven + 0.01) - 1].dateObj;

          for (var i = days.length; i--;) {
            var _day = days[i];
            var date = _day.dateObj;
            if (date > weekEndDay || date < weekStartDay) _day.classList.remove(\"inRange\");else _day.classList.add(\"inRange\");
          }
        }

        function highlightWeek() {
          var selDate = fp.latestSelectedDateObj;

          if (selDate !== undefined && selDate.getMonth() === fp.currentMonth && selDate.getFullYear() === fp.currentYear) {
            fp.weekStartDay = fp.days.childNodes[7 * Math.floor(fp.selectedDateElem.\$i / 7)].dateObj;
            fp.weekEndDay = fp.days.childNodes[7 * Math.ceil(fp.selectedDateElem.\$i / 7 + 0.01) - 1].dateObj;
          }

          var days = fp.days.childNodes;

          for (var i = days.length; i--;) {
            var date = days[i].dateObj;
            if (date >= fp.weekStartDay && date <= fp.weekEndDay) days[i].classList.add(\"week\", \"selected\");
          }
        }

        function clearHover() {
          var days = fp.days.childNodes;

          for (var i = days.length; i--;) {
            days[i].classList.remove(\"inRange\");
          }
        }

        function onReady() {
          if (fp.daysContainer !== undefined) fp.daysContainer.addEventListener(\"mouseover\", onDayHover);
        }

        function onDestroy() {
          if (fp.daysContainer !== undefined) fp.daysContainer.removeEventListener(\"mouseover\", onDayHover);
        }

        return {
          onValueUpdate: highlightWeek,
          onMonthChange: highlightWeek,
          onYearChange: highlightWeek,
          onClose: clearHover,
          onParseConfig: function onParseConfig() {
            fp.config.mode = \"single\";
            fp.config.enableTime = false;
            fp.config.dateFormat = fp.config.dateFormat ? fp.config.dateFormat : \"\\\\W\\\\e\\\\e\\\\k #W, Y\";
            fp.config.altFormat = fp.config.altFormat ? fp.config.altFormat : \"\\\\W\\\\e\\\\e\\\\k #W, Y\";
          },
          onReady: [onReady, highlightWeek],
          onDestroy: onDestroy
        };
      };
    }

    return weekSelectPlugin;

})));
", "wdn/templates_5.0/js/plugins/flatpickr/plugins/weekSelect/weekSelect.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/plugins/weekSelect/weekSelect.js");
    }
}
