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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/sl.js */
class __TwigTemplate_f725dce0fad64a1a934dbd76db86a5b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/sl.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/sl.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.sl = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Slovenian = {
      weekdays: {
        shorthand: [\"Ned\", \"Pon\", \"Tor\", \"Sre\", \"Čet\", \"Pet\", \"Sob\"],
        longhand: [\"Nedelja\", \"Ponedeljek\", \"Torek\", \"Sreda\", \"Četrtek\", \"Petek\", \"Sobota\"]
      },
      months: {
        shorthand: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"Maj\", \"Jun\", \"Jul\", \"Avg\", \"Sep\", \"Okt\", \"Nov\", \"Dec\"],
        longhand: [\"Januar\", \"Februar\", \"Marec\", \"April\", \"Maj\", \"Junij\", \"Julij\", \"Avgust\", \"September\", \"Oktober\", \"November\", \"December\"]
      },
      firstDayOfWeek: 1,
      rangeSeparator: \" do \",
      ordinal: function ordinal() {
        return \".\";
      }
    };
    fp.l10ns.sl = Slovenian;
    var sl = fp.l10ns;

    exports.Slovenian = Slovenian;
    exports.default = sl;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/sl.js";
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
    (factory((global.sl = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Slovenian = {
      weekdays: {
        shorthand: [\"Ned\", \"Pon\", \"Tor\", \"Sre\", \"Čet\", \"Pet\", \"Sob\"],
        longhand: [\"Nedelja\", \"Ponedeljek\", \"Torek\", \"Sreda\", \"Četrtek\", \"Petek\", \"Sobota\"]
      },
      months: {
        shorthand: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"Maj\", \"Jun\", \"Jul\", \"Avg\", \"Sep\", \"Okt\", \"Nov\", \"Dec\"],
        longhand: [\"Januar\", \"Februar\", \"Marec\", \"April\", \"Maj\", \"Junij\", \"Julij\", \"Avgust\", \"September\", \"Oktober\", \"November\", \"December\"]
      },
      firstDayOfWeek: 1,
      rangeSeparator: \" do \",
      ordinal: function ordinal() {
        return \".\";
      }
    };
    fp.l10ns.sl = Slovenian;
    var sl = fp.l10ns;

    exports.Slovenian = Slovenian;
    exports.default = sl;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/sl.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/sl.js");
    }
}
