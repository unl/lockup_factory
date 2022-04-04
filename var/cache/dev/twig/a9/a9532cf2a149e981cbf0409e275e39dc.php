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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/cs.js */
class __TwigTemplate_5b086d4cc02e40ae25ef0cf4a604f419 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/cs.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/cs.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.cs = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Czech = {
      weekdays: {
        shorthand: [\"Ne\", \"Po\", \"Út\", \"St\", \"Čt\", \"Pá\", \"So\"],
        longhand: [\"Neděle\", \"Pondělí\", \"Úterý\", \"Středa\", \"Čtvrtek\", \"Pátek\", \"Sobota\"]
      },
      months: {
        shorthand: [\"Led\", \"Ún\", \"Bře\", \"Dub\", \"Kvě\", \"Čer\", \"Čvc\", \"Srp\", \"Zář\", \"Říj\", \"Lis\", \"Pro\"],
        longhand: [\"Leden\", \"Únor\", \"Březen\", \"Duben\", \"Květen\", \"Červen\", \"Červenec\", \"Srpen\", \"Září\", \"Říjen\", \"Listopad\", \"Prosinec\"]
      },
      firstDayOfWeek: 1,
      ordinal: function ordinal() {
        return \".\";
      },
      rangeSeparator: \" do \",
      weekAbbreviation: \"Týd.\",
      scrollTitle: \"Rolujte pro změnu\",
      toggleTitle: \"Přepnout dopoledne/odpoledne\",
      amPM: [\"dop.\", \"odp.\"],
      yearAriaLabel: \"Rok\"
    };
    fp.l10ns.cs = Czech;
    var cs = fp.l10ns;

    exports.Czech = Czech;
    exports.default = cs;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/cs.js";
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
    (factory((global.cs = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Czech = {
      weekdays: {
        shorthand: [\"Ne\", \"Po\", \"Út\", \"St\", \"Čt\", \"Pá\", \"So\"],
        longhand: [\"Neděle\", \"Pondělí\", \"Úterý\", \"Středa\", \"Čtvrtek\", \"Pátek\", \"Sobota\"]
      },
      months: {
        shorthand: [\"Led\", \"Ún\", \"Bře\", \"Dub\", \"Kvě\", \"Čer\", \"Čvc\", \"Srp\", \"Zář\", \"Říj\", \"Lis\", \"Pro\"],
        longhand: [\"Leden\", \"Únor\", \"Březen\", \"Duben\", \"Květen\", \"Červen\", \"Červenec\", \"Srpen\", \"Září\", \"Říjen\", \"Listopad\", \"Prosinec\"]
      },
      firstDayOfWeek: 1,
      ordinal: function ordinal() {
        return \".\";
      },
      rangeSeparator: \" do \",
      weekAbbreviation: \"Týd.\",
      scrollTitle: \"Rolujte pro změnu\",
      toggleTitle: \"Přepnout dopoledne/odpoledne\",
      amPM: [\"dop.\", \"odp.\"],
      yearAriaLabel: \"Rok\"
    };
    fp.l10ns.cs = Czech;
    var cs = fp.l10ns;

    exports.Czech = Czech;
    exports.default = cs;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/cs.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/cs.js");
    }
}
