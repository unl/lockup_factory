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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/fr.js */
class __TwigTemplate_e93ebf78605fae08a1fa50d4adf3cd54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/fr.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/fr.js"));

        // line 1
        echo "!function(e,r){\"object\"==typeof exports&&\"undefined\"!=typeof module?r(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],r):r(e.fr={})}(this,function(e){\"use strict\";var r=\"undefined\"!=typeof window&&void 0!==window.flatpickr?window.flatpickr:{l10ns:{}},n={firstDayOfWeek:1,weekdays:{shorthand:[\"dim\",\"lun\",\"mar\",\"mer\",\"jeu\",\"ven\",\"sam\"],longhand:[\"dimanche\",\"lundi\",\"mardi\",\"mercredi\",\"jeudi\",\"vendredi\",\"samedi\"]},months:{shorthand:[\"janv\",\"févr\",\"mars\",\"avr\",\"mai\",\"juin\",\"juil\",\"août\",\"sept\",\"oct\",\"nov\",\"déc\"],longhand:[\"janvier\",\"février\",\"mars\",\"avril\",\"mai\",\"juin\",\"juillet\",\"août\",\"septembre\",\"octobre\",\"novembre\",\"décembre\"]},ordinal:function(e){return e>1?\"\":\"er\"},rangeSeparator:\" au \",weekAbbreviation:\"Sem\",scrollTitle:\"Défiler pour augmenter la valeur\",toggleTitle:\"Cliquer pour basculer\"};r.l10ns.fr=n;var i=r.l10ns;e.French=n,e.default=i,Object.defineProperty(e,\"__esModule\",{value:!0})});
//# sourceMappingURL=fr.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/fr.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,r){\"object\"==typeof exports&&\"undefined\"!=typeof module?r(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],r):r(e.fr={})}(this,function(e){\"use strict\";var r=\"undefined\"!=typeof window&&void 0!==window.flatpickr?window.flatpickr:{l10ns:{}},n={firstDayOfWeek:1,weekdays:{shorthand:[\"dim\",\"lun\",\"mar\",\"mer\",\"jeu\",\"ven\",\"sam\"],longhand:[\"dimanche\",\"lundi\",\"mardi\",\"mercredi\",\"jeudi\",\"vendredi\",\"samedi\"]},months:{shorthand:[\"janv\",\"févr\",\"mars\",\"avr\",\"mai\",\"juin\",\"juil\",\"août\",\"sept\",\"oct\",\"nov\",\"déc\"],longhand:[\"janvier\",\"février\",\"mars\",\"avril\",\"mai\",\"juin\",\"juillet\",\"août\",\"septembre\",\"octobre\",\"novembre\",\"décembre\"]},ordinal:function(e){return e>1?\"\":\"er\"},rangeSeparator:\" au \",weekAbbreviation:\"Sem\",scrollTitle:\"Défiler pour augmenter la valeur\",toggleTitle:\"Cliquer pour basculer\"};r.l10ns.fr=n;var i=r.l10ns;e.French=n,e.default=i,Object.defineProperty(e,\"__esModule\",{value:!0})});
//# sourceMappingURL=fr.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/fr.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/fr.js");
    }
}
