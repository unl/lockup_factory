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

/* wdn/templates_5.1/css/legacy.css */
class __TwigTemplate_b1b1485b1d8b5cf9e9186faa4842aeb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/css/legacy.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/css/legacy.css"));

        // line 1
        echo "[hidden]{display:none}.dcf-grid,.dcf-grid-fifths\\@lg,.dcf-grid-fifths\\@md,.dcf-grid-fifths\\@xl,.dcf-grid-fourths,.dcf-grid-fourths\\@lg,.dcf-grid-fourths\\@md,.dcf-grid-fourths\\@sm,.dcf-grid-fourths\\@xl,.dcf-grid-full,.dcf-grid-full\\@lg,.dcf-grid-full\\@md,.dcf-grid-full\\@sm,.dcf-grid-full\\@xl,.dcf-grid-halves,.dcf-grid-halves\\@lg,.dcf-grid-halves\\@md,.dcf-grid-halves\\@sm,.dcf-grid-halves\\@xl,.dcf-grid-sixths\\@lg,.dcf-grid-sixths\\@md,.dcf-grid-sixths\\@xl,.dcf-grid-thirds,.dcf-grid-thirds\\@lg,.dcf-grid-thirds\\@md,.dcf-grid-thirds\\@sm,.dcf-grid-thirds\\@xl{display:-webkit-box;display:flex;flex-wrap:wrap}.dcf-grid-full>*{flex-basis:100%}.dcf-grid-halves>*{flex-basis:50%}.dcf-grid-thirds>*{flex-basis:33%}.dcf-grid-fourths>*{flex-basis:25%}.dcf-col-100\\%{flex-basis:100%}.dcf-col-50\\%-end,.dcf-col-50\\%-start{flex-basis:50%}.dcf-col-33\\%-end,.dcf-col-33\\%-start{flex-basis:33%}.dcf-col-67\\%-end,.dcf-col-67\\%-start{flex-basis:67%}.dcf-col-25\\%-end,.dcf-col-25\\%-start{flex-basis:25%}.dcf-col-75\\%-end,.dcf-col-75\\%-start{flex-basis:75%}@media only screen and (min-width:42.09em){.dcf-grid-full\\@sm>*{flex-basis:100%}.dcf-grid-halves\\@sm>*{flex-basis:50%}.dcf-grid-thirds\\@sm>*{flex-basis:33%}.dcf-grid-fourths\\@sm>*{flex-basis:25%}.dcf-col-100\\%\\@sm{flex-basis:100%}.dcf-col-50\\%-end\\@sm,.dcf-col-50\\%-start\\@sm{flex-basis:50%}.dcf-col-33\\%-end\\@sm,.dcf-col-33\\%-start\\@sm{flex-basis:33%}.dcf-col-67\\%-end\\@sm,.dcf-col-67\\%-start\\@sm{flex-basis:67%}.dcf-col-25\\%-end\\@sm,.dcf-col-25\\%-start\\@sm{flex-basis:25%}.dcf-col-75\\%-end\\@sm,.dcf-col-75\\%-start\\@sm{flex-basis:75%}}@media only screen and (min-width:56.12em){.dcf-grid-full\\@md>*{flex-basis:100%}.dcf-grid-halves\\@md>*{flex-basis:50%}.dcf-grid-thirds\\@md>*{flex-basis:33%}.dcf-grid-fourths\\@md>*{flex-basis:25%}.dcf-grid-fifths\\@md>*{flex-basis:20%}.dcf-grid-sixths\\@md>*{flex-basis:16.66%}.dcf-col-100\\%\\@md{flex-basis:100%}.dcf-col-50\\%-end\\@md,.dcf-col-50\\%-start\\@md{flex-basis:50%}.dcf-col-33\\%-end\\@md,.dcf-col-33\\%-start\\@md{flex-basis:33%}.dcf-col-67\\%-end\\@md,.dcf-col-67\\%-start\\@md{flex-basis:67%}.dcf-col-25\\%-end\\@md,.dcf-col-25\\%-start\\@md{flex-basis:25%}.dcf-col-75\\%-end\\@md,.dcf-col-75\\%-start\\@md{flex-basis:75%}}@media only screen and (min-width:74.83em){.dcf-grid-full\\@lg>*{flex-basis:100%}.dcf-grid-halves\\@lg>*{flex-basis:50%}.dcf-grid-thirds\\@lg>*{flex-basis:33%}.dcf-grid-fourths\\@lg>*{flex-basis:25%}.dcf-grid-fifths\\@lg>*{flex-basis:20%}.dcf-grid-sixths\\@lg>*{flex-basis:16.66%}.dcf-col-100\\%\\@lg{flex-basis:100%}.dcf-col-50\\%-end\\@lg,.dcf-col-50\\%-start\\@lg{flex-basis:50%}.dcf-col-33\\%-end\\@lg,.dcf-col-33\\%-start\\@lg{flex-basis:33%}.dcf-col-67\\%-end\\@lg,.dcf-col-67\\%-start\\@lg{flex-basis:67%}.dcf-col-25\\%-end\\@lg,.dcf-col-25\\%-start\\@lg{flex-basis:25%}.dcf-col-75\\%-end\\@lg,.dcf-col-75\\%-start\\@lg{flex-basis:75%}}@media only screen and (min-width:99.77em){.dcf-grid-full\\@xl>*{flex-basis:100%}.dcf-grid-halves\\@xl>*{flex-basis:50%}.dcf-grid-thirds\\@xl>*{flex-basis:33%}.dcf-grid-fourths\\@xl>*{flex-basis:25%}.dcf-grid-fifths\\@xl>*{flex-basis:20%}.dcf-grid-sixths\\@xl>*{flex-basis:16.66%}.dcf-col-100\\%\\@xl{flex-basis:100%}.dcf-col-50\\%-end\\@xl,.dcf-col-50\\%-start\\@xl{flex-basis:50%}.dcf-col-33\\%-end\\@xl,.dcf-col-33\\%-start\\@xl{flex-basis:33%}.dcf-col-67\\%-end\\@xl,.dcf-col-67\\%-start\\@xl{flex-basis:67%}.dcf-col-25\\%-end\\@xl,.dcf-col-25\\%-start\\@xl{flex-basis:25%}.dcf-col-75\\%-end\\@xl,.dcf-col-75\\%-start\\@xl{flex-basis:75%}}main{display:block}.unl .dcf-nav-local>ul{display:-webkit-box;display:flex}.unl .dcf-nav-local>ul>li{flex-basis:50%}@media only screen and (max-width:56.12em){.unl .dcf-nav-local>ul{-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-flow:row wrap}}@media only screen and (min-width:42.09em){.unl .dcf-nav-local>ul>li{flex-basis:33.33333%}}@media only screen and (min-width:56.12em){.unl .dcf-nav-local>ul>li{flex-basis:16.66667%}}
/*# sourceMappingURL=legacy.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/css/legacy.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("[hidden]{display:none}.dcf-grid,.dcf-grid-fifths\\@lg,.dcf-grid-fifths\\@md,.dcf-grid-fifths\\@xl,.dcf-grid-fourths,.dcf-grid-fourths\\@lg,.dcf-grid-fourths\\@md,.dcf-grid-fourths\\@sm,.dcf-grid-fourths\\@xl,.dcf-grid-full,.dcf-grid-full\\@lg,.dcf-grid-full\\@md,.dcf-grid-full\\@sm,.dcf-grid-full\\@xl,.dcf-grid-halves,.dcf-grid-halves\\@lg,.dcf-grid-halves\\@md,.dcf-grid-halves\\@sm,.dcf-grid-halves\\@xl,.dcf-grid-sixths\\@lg,.dcf-grid-sixths\\@md,.dcf-grid-sixths\\@xl,.dcf-grid-thirds,.dcf-grid-thirds\\@lg,.dcf-grid-thirds\\@md,.dcf-grid-thirds\\@sm,.dcf-grid-thirds\\@xl{display:-webkit-box;display:flex;flex-wrap:wrap}.dcf-grid-full>*{flex-basis:100%}.dcf-grid-halves>*{flex-basis:50%}.dcf-grid-thirds>*{flex-basis:33%}.dcf-grid-fourths>*{flex-basis:25%}.dcf-col-100\\%{flex-basis:100%}.dcf-col-50\\%-end,.dcf-col-50\\%-start{flex-basis:50%}.dcf-col-33\\%-end,.dcf-col-33\\%-start{flex-basis:33%}.dcf-col-67\\%-end,.dcf-col-67\\%-start{flex-basis:67%}.dcf-col-25\\%-end,.dcf-col-25\\%-start{flex-basis:25%}.dcf-col-75\\%-end,.dcf-col-75\\%-start{flex-basis:75%}@media only screen and (min-width:42.09em){.dcf-grid-full\\@sm>*{flex-basis:100%}.dcf-grid-halves\\@sm>*{flex-basis:50%}.dcf-grid-thirds\\@sm>*{flex-basis:33%}.dcf-grid-fourths\\@sm>*{flex-basis:25%}.dcf-col-100\\%\\@sm{flex-basis:100%}.dcf-col-50\\%-end\\@sm,.dcf-col-50\\%-start\\@sm{flex-basis:50%}.dcf-col-33\\%-end\\@sm,.dcf-col-33\\%-start\\@sm{flex-basis:33%}.dcf-col-67\\%-end\\@sm,.dcf-col-67\\%-start\\@sm{flex-basis:67%}.dcf-col-25\\%-end\\@sm,.dcf-col-25\\%-start\\@sm{flex-basis:25%}.dcf-col-75\\%-end\\@sm,.dcf-col-75\\%-start\\@sm{flex-basis:75%}}@media only screen and (min-width:56.12em){.dcf-grid-full\\@md>*{flex-basis:100%}.dcf-grid-halves\\@md>*{flex-basis:50%}.dcf-grid-thirds\\@md>*{flex-basis:33%}.dcf-grid-fourths\\@md>*{flex-basis:25%}.dcf-grid-fifths\\@md>*{flex-basis:20%}.dcf-grid-sixths\\@md>*{flex-basis:16.66%}.dcf-col-100\\%\\@md{flex-basis:100%}.dcf-col-50\\%-end\\@md,.dcf-col-50\\%-start\\@md{flex-basis:50%}.dcf-col-33\\%-end\\@md,.dcf-col-33\\%-start\\@md{flex-basis:33%}.dcf-col-67\\%-end\\@md,.dcf-col-67\\%-start\\@md{flex-basis:67%}.dcf-col-25\\%-end\\@md,.dcf-col-25\\%-start\\@md{flex-basis:25%}.dcf-col-75\\%-end\\@md,.dcf-col-75\\%-start\\@md{flex-basis:75%}}@media only screen and (min-width:74.83em){.dcf-grid-full\\@lg>*{flex-basis:100%}.dcf-grid-halves\\@lg>*{flex-basis:50%}.dcf-grid-thirds\\@lg>*{flex-basis:33%}.dcf-grid-fourths\\@lg>*{flex-basis:25%}.dcf-grid-fifths\\@lg>*{flex-basis:20%}.dcf-grid-sixths\\@lg>*{flex-basis:16.66%}.dcf-col-100\\%\\@lg{flex-basis:100%}.dcf-col-50\\%-end\\@lg,.dcf-col-50\\%-start\\@lg{flex-basis:50%}.dcf-col-33\\%-end\\@lg,.dcf-col-33\\%-start\\@lg{flex-basis:33%}.dcf-col-67\\%-end\\@lg,.dcf-col-67\\%-start\\@lg{flex-basis:67%}.dcf-col-25\\%-end\\@lg,.dcf-col-25\\%-start\\@lg{flex-basis:25%}.dcf-col-75\\%-end\\@lg,.dcf-col-75\\%-start\\@lg{flex-basis:75%}}@media only screen and (min-width:99.77em){.dcf-grid-full\\@xl>*{flex-basis:100%}.dcf-grid-halves\\@xl>*{flex-basis:50%}.dcf-grid-thirds\\@xl>*{flex-basis:33%}.dcf-grid-fourths\\@xl>*{flex-basis:25%}.dcf-grid-fifths\\@xl>*{flex-basis:20%}.dcf-grid-sixths\\@xl>*{flex-basis:16.66%}.dcf-col-100\\%\\@xl{flex-basis:100%}.dcf-col-50\\%-end\\@xl,.dcf-col-50\\%-start\\@xl{flex-basis:50%}.dcf-col-33\\%-end\\@xl,.dcf-col-33\\%-start\\@xl{flex-basis:33%}.dcf-col-67\\%-end\\@xl,.dcf-col-67\\%-start\\@xl{flex-basis:67%}.dcf-col-25\\%-end\\@xl,.dcf-col-25\\%-start\\@xl{flex-basis:25%}.dcf-col-75\\%-end\\@xl,.dcf-col-75\\%-start\\@xl{flex-basis:75%}}main{display:block}.unl .dcf-nav-local>ul{display:-webkit-box;display:flex}.unl .dcf-nav-local>ul>li{flex-basis:50%}@media only screen and (max-width:56.12em){.unl .dcf-nav-local>ul{-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-flow:row wrap}}@media only screen and (min-width:42.09em){.unl .dcf-nav-local>ul>li{flex-basis:33.33333%}}@media only screen and (min-width:56.12em){.unl .dcf-nav-local>ul>li{flex-basis:16.66667%}}
/*# sourceMappingURL=legacy.css.map */", "wdn/templates_5.1/css/legacy.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/css/legacy.css");
    }
}