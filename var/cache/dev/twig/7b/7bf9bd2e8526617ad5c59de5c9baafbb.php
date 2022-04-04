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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/de.js */
class __TwigTemplate_407ef2b0199a17833976c7749704314f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/de.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/de.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.de = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var German = {
      weekdays: {
        shorthand: [\"So\", \"Mo\", \"Di\", \"Mi\", \"Do\", \"Fr\", \"Sa\"],
        longhand: [\"Sonntag\", \"Montag\", \"Dienstag\", \"Mittwoch\", \"Donnerstag\", \"Freitag\", \"Samstag\"]
      },
      months: {
        shorthand: [\"Jan\", \"Feb\", \"Mär\", \"Apr\", \"Mai\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Okt\", \"Nov\", \"Dez\"],
        longhand: [\"Januar\", \"Februar\", \"März\", \"April\", \"Mai\", \"Juni\", \"Juli\", \"August\", \"September\", \"Oktober\", \"November\", \"Dezember\"]
      },
      firstDayOfWeek: 1,
      weekAbbreviation: \"KW\",
      rangeSeparator: \" bis \",
      scrollTitle: \"Zum Ändern scrollen\",
      toggleTitle: \"Zum Umschalten klicken\"
    };
    fp.l10ns.de = German;
    var de = fp.l10ns;

    exports.German = German;
    exports.default = de;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/de.js";
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
    (factory((global.de = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var German = {
      weekdays: {
        shorthand: [\"So\", \"Mo\", \"Di\", \"Mi\", \"Do\", \"Fr\", \"Sa\"],
        longhand: [\"Sonntag\", \"Montag\", \"Dienstag\", \"Mittwoch\", \"Donnerstag\", \"Freitag\", \"Samstag\"]
      },
      months: {
        shorthand: [\"Jan\", \"Feb\", \"Mär\", \"Apr\", \"Mai\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Okt\", \"Nov\", \"Dez\"],
        longhand: [\"Januar\", \"Februar\", \"März\", \"April\", \"Mai\", \"Juni\", \"Juli\", \"August\", \"September\", \"Oktober\", \"November\", \"Dezember\"]
      },
      firstDayOfWeek: 1,
      weekAbbreviation: \"KW\",
      rangeSeparator: \" bis \",
      scrollTitle: \"Zum Ändern scrollen\",
      toggleTitle: \"Zum Umschalten klicken\"
    };
    fp.l10ns.de = German;
    var de = fp.l10ns;

    exports.German = German;
    exports.default = de;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/de.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/de.js");
    }
}
