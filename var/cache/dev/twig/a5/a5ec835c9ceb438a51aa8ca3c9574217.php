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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/ko.js */
class __TwigTemplate_7ef1daa000d46afee0e0e0d17b895a9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/ko.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/ko.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.ko = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Korean = {
      weekdays: {
        shorthand: [\"일\", \"월\", \"화\", \"수\", \"목\", \"금\", \"토\"],
        longhand: [\"일요일\", \"월요일\", \"화요일\", \"수요일\", \"목요일\", \"금요일\", \"토요일\"]
      },
      months: {
        shorthand: [\"1월\", \"2월\", \"3월\", \"4월\", \"5월\", \"6월\", \"7월\", \"8월\", \"9월\", \"10월\", \"11월\", \"12월\"],
        longhand: [\"1월\", \"2월\", \"3월\", \"4월\", \"5월\", \"6월\", \"7월\", \"8월\", \"9월\", \"10월\", \"11월\", \"12월\"]
      },
      ordinal: function ordinal() {
        return \"일\";
      }
    };
    fp.l10ns.ko = Korean;
    var ko = fp.l10ns;

    exports.Korean = Korean;
    exports.default = ko;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/ko.js";
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
    (factory((global.ko = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Korean = {
      weekdays: {
        shorthand: [\"일\", \"월\", \"화\", \"수\", \"목\", \"금\", \"토\"],
        longhand: [\"일요일\", \"월요일\", \"화요일\", \"수요일\", \"목요일\", \"금요일\", \"토요일\"]
      },
      months: {
        shorthand: [\"1월\", \"2월\", \"3월\", \"4월\", \"5월\", \"6월\", \"7월\", \"8월\", \"9월\", \"10월\", \"11월\", \"12월\"],
        longhand: [\"1월\", \"2월\", \"3월\", \"4월\", \"5월\", \"6월\", \"7월\", \"8월\", \"9월\", \"10월\", \"11월\", \"12월\"]
      },
      ordinal: function ordinal() {
        return \"일\";
      }
    };
    fp.l10ns.ko = Korean;
    var ko = fp.l10ns;

    exports.Korean = Korean;
    exports.default = ko;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/ko.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/ko.js");
    }
}
