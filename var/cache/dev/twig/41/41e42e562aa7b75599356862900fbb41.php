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

/* wdn/templates_5.0/js/compressed/plugins/cssrelpreload.js */
class __TwigTemplate_de8e75dc4349e7b923e8b2331d5c8169 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/cssrelpreload.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/cssrelpreload.js"));

        // line 1
        echo "!function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.media=a}var a=t.media||\"all\";t.addEventListener?t.addEventListener(\"load\",e):t.attachEvent&&t.attachEvent(\"onload\",e),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
//# sourceMappingURL=cssrelpreload.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/cssrelpreload.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.media=a}var a=t.media||\"all\";t.addEventListener?t.addEventListener(\"load\",e):t.attachEvent&&t.attachEvent(\"onload\",e),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
//# sourceMappingURL=cssrelpreload.js.map", "wdn/templates_5.0/js/compressed/plugins/cssrelpreload.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/cssrelpreload.js");
    }
}
