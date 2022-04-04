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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/gr.js */
class __TwigTemplate_da3603e9cb7ab7fd19b12e4633bafabb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/gr.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/gr.js"));

        // line 1
        echo "!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?n(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],n):n(e.gr={})}(this,function(e){\"use strict\";var n=\"undefined\"!=typeof window&&void 0!==window.flatpickr?window.flatpickr:{l10ns:{}},t={weekdays:{shorthand:[\"Κυ\",\"Δε\",\"Τρ\",\"Τε\",\"Πέ\",\"Πα\",\"Σά\"],longhand:[\"Κυριακή\",\"Δευτέρα\",\"Τρίτη\",\"Τετάρτη\",\"Πέμπτη\",\"Παρασκευή\",\"Σάββατο\"]},months:{shorthand:[\"Ιαν\",\"Φεβ\",\"Μάρ\",\"Απρ\",\"Μάι\",\"Ιού\",\"Ιού\",\"Αύγ\",\"Σεπ\",\"Οκτ\",\"Νοέ\",\"Δεκ\"],longhand:[\"Ιανουάριος\",\"Φεβρουάριος\",\"Μάρτιος\",\"Απρίλιος\",\"Μάιος\",\"Ιούνιος\",\"Ιούλιος\",\"Αύγουστος\",\"Σεπτέμβριος\",\"Οκτώβριος\",\"Νοέμβριος\",\"Δεκέμβριος\"]},firstDayOfWeek:1,ordinal:function(){return\"\"},weekAbbreviation:\"Εβδ\",rangeSeparator:\" έως \",scrollTitle:\"Μετακυλήστε για προσαύξηση\",toggleTitle:\"Κάντε κλικ για αλλαγή\",amPM:[\"ΠΜ\",\"ΜΜ\"]};n.l10ns.gr=t;var o=n.l10ns;e.Greek=t,e.default=o,Object.defineProperty(e,\"__esModule\",{value:!0})});
//# sourceMappingURL=gr.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/gr.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?n(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],n):n(e.gr={})}(this,function(e){\"use strict\";var n=\"undefined\"!=typeof window&&void 0!==window.flatpickr?window.flatpickr:{l10ns:{}},t={weekdays:{shorthand:[\"Κυ\",\"Δε\",\"Τρ\",\"Τε\",\"Πέ\",\"Πα\",\"Σά\"],longhand:[\"Κυριακή\",\"Δευτέρα\",\"Τρίτη\",\"Τετάρτη\",\"Πέμπτη\",\"Παρασκευή\",\"Σάββατο\"]},months:{shorthand:[\"Ιαν\",\"Φεβ\",\"Μάρ\",\"Απρ\",\"Μάι\",\"Ιού\",\"Ιού\",\"Αύγ\",\"Σεπ\",\"Οκτ\",\"Νοέ\",\"Δεκ\"],longhand:[\"Ιανουάριος\",\"Φεβρουάριος\",\"Μάρτιος\",\"Απρίλιος\",\"Μάιος\",\"Ιούνιος\",\"Ιούλιος\",\"Αύγουστος\",\"Σεπτέμβριος\",\"Οκτώβριος\",\"Νοέμβριος\",\"Δεκέμβριος\"]},firstDayOfWeek:1,ordinal:function(){return\"\"},weekAbbreviation:\"Εβδ\",rangeSeparator:\" έως \",scrollTitle:\"Μετακυλήστε για προσαύξηση\",toggleTitle:\"Κάντε κλικ για αλλαγή\",amPM:[\"ΠΜ\",\"ΜΜ\"]};n.l10ns.gr=t;var o=n.l10ns;e.Greek=t,e.default=o,Object.defineProperty(e,\"__esModule\",{value:!0})});
//# sourceMappingURL=gr.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/gr.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/gr.js");
    }
}
