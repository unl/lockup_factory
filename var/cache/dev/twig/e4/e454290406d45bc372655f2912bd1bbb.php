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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/pl.js */
class __TwigTemplate_d6d1dced4e4d65cfc4b251603869d68b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/pl.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/pl.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.pl = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Polish = {
      weekdays: {
        shorthand: [\"Nd\", \"Pn\", \"Wt\", \"Śr\", \"Cz\", \"Pt\", \"So\"],
        longhand: [\"Niedziela\", \"Poniedziałek\", \"Wtorek\", \"Środa\", \"Czwartek\", \"Piątek\", \"Sobota\"]
      },
      months: {
        shorthand: [\"Sty\", \"Lut\", \"Mar\", \"Kwi\", \"Maj\", \"Cze\", \"Lip\", \"Sie\", \"Wrz\", \"Paź\", \"Lis\", \"Gru\"],
        longhand: [\"Styczeń\", \"Luty\", \"Marzec\", \"Kwiecień\", \"Maj\", \"Czerwiec\", \"Lipiec\", \"Sierpień\", \"Wrzesień\", \"Październik\", \"Listopad\", \"Grudzień\"]
      },
      rangeSeparator: \" do \",
      weekAbbreviation: \"tydz.\",
      scrollTitle: \"Przwiń aby zwiększyć\",
      toggleTitle: \"Kliknij aby przełączyć\",
      firstDayOfWeek: 1,
      ordinal: function ordinal() {
        return \".\";
      }
    };
    fp.l10ns.pl = Polish;
    var pl = fp.l10ns;

    exports.Polish = Polish;
    exports.default = pl;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/pl.js";
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
    (factory((global.pl = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Polish = {
      weekdays: {
        shorthand: [\"Nd\", \"Pn\", \"Wt\", \"Śr\", \"Cz\", \"Pt\", \"So\"],
        longhand: [\"Niedziela\", \"Poniedziałek\", \"Wtorek\", \"Środa\", \"Czwartek\", \"Piątek\", \"Sobota\"]
      },
      months: {
        shorthand: [\"Sty\", \"Lut\", \"Mar\", \"Kwi\", \"Maj\", \"Cze\", \"Lip\", \"Sie\", \"Wrz\", \"Paź\", \"Lis\", \"Gru\"],
        longhand: [\"Styczeń\", \"Luty\", \"Marzec\", \"Kwiecień\", \"Maj\", \"Czerwiec\", \"Lipiec\", \"Sierpień\", \"Wrzesień\", \"Październik\", \"Listopad\", \"Grudzień\"]
      },
      rangeSeparator: \" do \",
      weekAbbreviation: \"tydz.\",
      scrollTitle: \"Przwiń aby zwiększyć\",
      toggleTitle: \"Kliknij aby przełączyć\",
      firstDayOfWeek: 1,
      ordinal: function ordinal() {
        return \".\";
      }
    };
    fp.l10ns.pl = Polish;
    var pl = fp.l10ns;

    exports.Polish = Polish;
    exports.default = pl;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/pl.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/pl.js");
    }
}