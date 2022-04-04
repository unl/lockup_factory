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

/* wdn/templates_4.1/scripts/compressed/anchors.js */
class __TwigTemplate_440bd7b434b329f7d018128dce551c1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/anchors.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/anchors.js"));

        // line 1
        echo "define([\"jquery\",\"wdn\"],function(e,n){var t,i,r=!1,d=function(e){var n=document.createElement(\"style\");return n.appendChild(document.createTextNode(\"\")),e&&n.setAttribute(\"media\",e),document.head.appendChild(n),n.sheet},u=function(e,n,t,i){e.insertRule?e.insertRule(n+\"{\"+t+\"}\",i):e.addRule(n,t,i)},o=function(e,n){(e.cssRules||e.rules).length&&(e.deleteRule?e.deleteRule(n||0):e.removeRule(n))},a=\"only screen and (min-width: 43.75em)\";return{initialize:function(){r||(e(function(){e(\"#navigation\").on(\"fixed.wdnAnchors\",function(e,n){var r,c=\"border:0; position:relative;\";if(matchMedia(a).matches)r=i||d(a),i=r;else{if(t)return;r=t=d()}o(r),n*=-1;try{c+=\"top:\"+n+\"px;\",u(r,\".wdn-offset-anchor\",c)}catch(e){}})}),r=!0)}}});
//# sourceMappingURL=anchors.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/anchors.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"jquery\",\"wdn\"],function(e,n){var t,i,r=!1,d=function(e){var n=document.createElement(\"style\");return n.appendChild(document.createTextNode(\"\")),e&&n.setAttribute(\"media\",e),document.head.appendChild(n),n.sheet},u=function(e,n,t,i){e.insertRule?e.insertRule(n+\"{\"+t+\"}\",i):e.addRule(n,t,i)},o=function(e,n){(e.cssRules||e.rules).length&&(e.deleteRule?e.deleteRule(n||0):e.removeRule(n))},a=\"only screen and (min-width: 43.75em)\";return{initialize:function(){r||(e(function(){e(\"#navigation\").on(\"fixed.wdnAnchors\",function(e,n){var r,c=\"border:0; position:relative;\";if(matchMedia(a).matches)r=i||d(a),i=r;else{if(t)return;r=t=d()}o(r),n*=-1;try{c+=\"top:\"+n+\"px;\",u(r,\".wdn-offset-anchor\",c)}catch(e){}})}),r=!0)}}});
//# sourceMappingURL=anchors.js.map", "wdn/templates_4.1/scripts/compressed/anchors.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/anchors.js");
    }
}