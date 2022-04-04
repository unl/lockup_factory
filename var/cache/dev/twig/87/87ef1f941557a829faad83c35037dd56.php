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

/* wdn/templates_4.1/scripts/compressed/cssrelpreload.js */
class __TwigTemplate_7cf6b1699be3bbdef6e02793d423291e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/cssrelpreload.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/cssrelpreload.js"));

        // line 1
        echo "!function(t){if(t.loadCSS){var e=loadCSS.relpreload={};if(e.support=function(){try{return t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){return!1}},e.poly=function(){for(var e=t.document.getElementsByTagName(\"link\"),r=0;r<e.length;r++){var n=e[r];\"preload\"===n.rel&&\"style\"===n.getAttribute(\"as\")&&(t.loadCSS(n.href,n,n.getAttribute(\"media\")),n.rel=null)}},!e.support()){e.poly();var r=t.setInterval(e.poly,300);t.addEventListener&&t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(r)}),t.attachEvent&&t.attachEvent(\"onload\",function(){t.clearInterval(r)})}}}(this);
//# sourceMappingURL=cssrelpreload.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/cssrelpreload.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t){if(t.loadCSS){var e=loadCSS.relpreload={};if(e.support=function(){try{return t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){return!1}},e.poly=function(){for(var e=t.document.getElementsByTagName(\"link\"),r=0;r<e.length;r++){var n=e[r];\"preload\"===n.rel&&\"style\"===n.getAttribute(\"as\")&&(t.loadCSS(n.href,n,n.getAttribute(\"media\")),n.rel=null)}},!e.support()){e.poly();var r=t.setInterval(e.poly,300);t.addEventListener&&t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(r)}),t.attachEvent&&t.attachEvent(\"onload\",function(){t.clearInterval(r)})}}}(this);
//# sourceMappingURL=cssrelpreload.js.map", "wdn/templates_4.1/scripts/compressed/cssrelpreload.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/cssrelpreload.js");
    }
}
