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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/my.js */
class __TwigTemplate_f045ae6fe05d8be304385bc5198f0321 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/my.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/my.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.my = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Burmese = {
      weekdays: {
        shorthand: [\"နွေ\", \"လာ\", \"ဂါ\", \"ဟူး\", \"ကြာ\", \"သော\", \"နေ\"],
        longhand: [\"တနင်္ဂနွေ\", \"တနင်္လာ\", \"အင်္ဂါ\", \"ဗုဒ္ဓဟူး\", \"ကြာသပတေး\", \"သောကြာ\", \"စနေ\"]
      },
      months: {
        shorthand: [\"ဇန်\", \"ဖေ\", \"မတ်\", \"ပြီ\", \"မေ\", \"ဇွန်\", \"လိုင်\", \"သြ\", \"စက်\", \"အောက်\", \"နို\", \"ဒီ\"],
        longhand: [\"ဇန်နဝါရီ\", \"ဖေဖော်ဝါရီ\", \"မတ်\", \"ဧပြီ\", \"မေ\", \"ဇွန်\", \"ဇူလိုင်\", \"သြဂုတ်\", \"စက်တင်ဘာ\", \"အောက်တိုဘာ\", \"နိုဝင်ဘာ\", \"ဒီဇင်ဘာ\"]
      },
      firstDayOfWeek: 1,
      ordinal: function ordinal() {
        return \"\";
      }
    };
    fp.l10ns.my = Burmese;
    var my = fp.l10ns;

    exports.Burmese = Burmese;
    exports.default = my;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/my.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.my = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Burmese = {
      weekdays: {
        shorthand: [\"နွေ\", \"လာ\", \"ဂါ\", \"ဟူး\", \"ကြာ\", \"သော\", \"နေ\"],
        longhand: [\"တနင်္ဂနွေ\", \"တနင်္လာ\", \"အင်္ဂါ\", \"ဗုဒ္ဓဟူး\", \"ကြာသပတေး\", \"သောကြာ\", \"စနေ\"]
      },
      months: {
        shorthand: [\"ဇန်\", \"ဖေ\", \"မတ်\", \"ပြီ\", \"မေ\", \"ဇွန်\", \"လိုင်\", \"သြ\", \"စက်\", \"အောက်\", \"နို\", \"ဒီ\"],
        longhand: [\"ဇန်နဝါရီ\", \"ဖေဖော်ဝါရီ\", \"မတ်\", \"ဧပြီ\", \"မေ\", \"ဇွန်\", \"ဇူလိုင်\", \"သြဂုတ်\", \"စက်တင်ဘာ\", \"အောက်တိုဘာ\", \"နိုဝင်ဘာ\", \"ဒီဇင်ဘာ\"]
      },
      firstDayOfWeek: 1,
      ordinal: function ordinal() {
        return \"\";
      }
    };
    fp.l10ns.my = Burmese;
    var my = fp.l10ns;

    exports.Burmese = Burmese;
    exports.default = my;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/my.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/my.js");
    }
}
