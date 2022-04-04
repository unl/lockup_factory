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

/* wdn/templates_5.0/js/plugins/flatpickr/plugins/confirmDate/confirmDate.js */
class __TwigTemplate_2076173eed7b986c7139598df90581ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/confirmDate/confirmDate.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/confirmDate/confirmDate.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global.confirmDatePlugin = factory());
}(this, (function () { 'use strict';

    var defaultConfig = {
      confirmIcon: \"<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='17' height='17' viewBox='0 0 17 17'> <g> </g> <path d='M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z' fill='#000000' /> </svg>\",
      confirmText: \"OK \",
      showAlways: false,
      theme: \"light\"
    };

    function confirmDatePlugin(pluginConfig) {
      var config = Object.assign({}, defaultConfig, pluginConfig);
      var confirmContainer;
      return function (fp) {
        if (fp.config.noCalendar || fp.isMobile) return {};
        return Object.assign({
          onKeyDown: function onKeyDown(_, __, ___, e) {
            if (fp.config.enableTime && e.key === \"Tab\" && e.target === fp.amPM) {
              e.preventDefault();
              confirmContainer.focus();
            } else if (e.key === \"Enter\" && e.target === confirmContainer) fp.close();
          },
          onReady: function onReady() {
            confirmContainer = fp._createElement(\"div\", \"flatpickr-confirm \" + (config.showAlways ? \"visible\" : \"\") + \" \" + config.theme + \"Theme\", config.confirmText);
            confirmContainer.tabIndex = -1;
            confirmContainer.innerHTML += config.confirmIcon;
            confirmContainer.addEventListener(\"click\", fp.close);
            fp.calendarContainer.appendChild(confirmContainer);
          }
        }, !config.showAlways ? {
          onChange: function onChange(_, dateStr) {
            var showCondition = fp.config.enableTime || fp.config.mode === \"multiple\";
            if (dateStr && !fp.config.inline && showCondition) return confirmContainer.classList.add(\"visible\");
            confirmContainer.classList.remove(\"visible\");
          }
        } : {});
      };
    }

    return confirmDatePlugin;

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/plugins/confirmDate/confirmDate.js";
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
    (global.confirmDatePlugin = factory());
}(this, (function () { 'use strict';

    var defaultConfig = {
      confirmIcon: \"<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='17' height='17' viewBox='0 0 17 17'> <g> </g> <path d='M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z' fill='#000000' /> </svg>\",
      confirmText: \"OK \",
      showAlways: false,
      theme: \"light\"
    };

    function confirmDatePlugin(pluginConfig) {
      var config = Object.assign({}, defaultConfig, pluginConfig);
      var confirmContainer;
      return function (fp) {
        if (fp.config.noCalendar || fp.isMobile) return {};
        return Object.assign({
          onKeyDown: function onKeyDown(_, __, ___, e) {
            if (fp.config.enableTime && e.key === \"Tab\" && e.target === fp.amPM) {
              e.preventDefault();
              confirmContainer.focus();
            } else if (e.key === \"Enter\" && e.target === confirmContainer) fp.close();
          },
          onReady: function onReady() {
            confirmContainer = fp._createElement(\"div\", \"flatpickr-confirm \" + (config.showAlways ? \"visible\" : \"\") + \" \" + config.theme + \"Theme\", config.confirmText);
            confirmContainer.tabIndex = -1;
            confirmContainer.innerHTML += config.confirmIcon;
            confirmContainer.addEventListener(\"click\", fp.close);
            fp.calendarContainer.appendChild(confirmContainer);
          }
        }, !config.showAlways ? {
          onChange: function onChange(_, dateStr) {
            var showCondition = fp.config.enableTime || fp.config.mode === \"multiple\";
            if (dateStr && !fp.config.inline && showCondition) return confirmContainer.classList.add(\"visible\");
            confirmContainer.classList.remove(\"visible\");
          }
        } : {});
      };
    }

    return confirmDatePlugin;

})));
", "wdn/templates_5.0/js/plugins/flatpickr/plugins/confirmDate/confirmDate.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/plugins/confirmDate/confirmDate.js");
    }
}
