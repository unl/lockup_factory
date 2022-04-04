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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/cat.js */
class __TwigTemplate_b659d0fdfa4ace150bfbe91b4732d4fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/cat.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/cat.js"));

        // line 1
        echo "!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?n(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],n):n(e.cat={})}(this,function(e){\"use strict\";var n=\"undefined\"!=typeof window&&void 0!==window.flatpickr?window.flatpickr:{l10ns:{}},r={weekdays:{shorthand:[\"Dg\",\"Dl\",\"Dt\",\"Dc\",\"Dj\",\"Dv\",\"Ds\"],longhand:[\"Diumenge\",\"Dilluns\",\"Dimarts\",\"Dimecres\",\"Dijous\",\"Divendres\",\"Dissabte\"]},months:{shorthand:[\"Gen\",\"Febr\",\"Març\",\"Abr\",\"Maig\",\"Juny\",\"Jul\",\"Ag\",\"Set\",\"Oct\",\"Nov\",\"Des\"],longhand:[\"Gener\",\"Febrer\",\"Març\",\"Abril\",\"Maig\",\"Juny\",\"Juliol\",\"Agost\",\"Setembre\",\"Octubre\",\"Novembre\",\"Desembre\"]},ordinal:function(e){var n=e%100;if(n>3&&n<21)return\"è\";switch(n%10){case 1:return\"r\";case 2:return\"n\";case 3:return\"r\";case 4:return\"t\";default:return\"è\"}},firstDayOfWeek:1};n.l10ns.cat=r;var t=n.l10ns;e.Catalan=r,e.default=t,Object.defineProperty(e,\"__esModule\",{value:!0})});
//# sourceMappingURL=cat.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/cat.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?n(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],n):n(e.cat={})}(this,function(e){\"use strict\";var n=\"undefined\"!=typeof window&&void 0!==window.flatpickr?window.flatpickr:{l10ns:{}},r={weekdays:{shorthand:[\"Dg\",\"Dl\",\"Dt\",\"Dc\",\"Dj\",\"Dv\",\"Ds\"],longhand:[\"Diumenge\",\"Dilluns\",\"Dimarts\",\"Dimecres\",\"Dijous\",\"Divendres\",\"Dissabte\"]},months:{shorthand:[\"Gen\",\"Febr\",\"Març\",\"Abr\",\"Maig\",\"Juny\",\"Jul\",\"Ag\",\"Set\",\"Oct\",\"Nov\",\"Des\"],longhand:[\"Gener\",\"Febrer\",\"Març\",\"Abril\",\"Maig\",\"Juny\",\"Juliol\",\"Agost\",\"Setembre\",\"Octubre\",\"Novembre\",\"Desembre\"]},ordinal:function(e){var n=e%100;if(n>3&&n<21)return\"è\";switch(n%10){case 1:return\"r\";case 2:return\"n\";case 3:return\"r\";case 4:return\"t\";default:return\"è\"}},firstDayOfWeek:1};n.l10ns.cat=r;var t=n.l10ns;e.Catalan=r,e.default=t,Object.defineProperty(e,\"__esModule\",{value:!0})});
//# sourceMappingURL=cat.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/cat.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/cat.js");
    }
}
