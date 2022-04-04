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

/* wdn/templates_5.0/js/js-css/events-band.css */
class __TwigTemplate_1477532bdda9c8e678f5fc858dffd893 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/events-band.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/events-band.css"));

        // line 1
        echo ".unl-event-teaser-list{display:-webkit-box;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-flow:row wrap;padding-left:4.21em}@media only screen and (min-width:42.09em){.unl-event-teaser-list .unl-event-teaser{flex-basis:50%}}@media only screen and (min-width:74.83em){.unl-event-teaser-list .unl-event-teaser{flex-basis:33%}}@media only screen and (min-width:99.78em){.unl-event-teaser-list .unl-event-teaser{flex-basis:25%}}@supports ((display:-ms-grid) or (display:grid)){.unl-event-teaser-list{display:-ms-grid;display:grid;-ms-grid-column:2;-ms-grid-column-span:1;grid-column:2/3;grid-template-columns:repeat(auto-fill,minmax(13.32em,1fr));padding-left:0}@media only screen and (min-width:74.83em){.unl-event-teaser-list{-ms-grid-columns:(1fr)[3];grid-template-columns:repeat(3,1fr)}}}
/*# sourceMappingURL=events-band.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/events-band.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".unl-event-teaser-list{display:-webkit-box;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-flow:row wrap;padding-left:4.21em}@media only screen and (min-width:42.09em){.unl-event-teaser-list .unl-event-teaser{flex-basis:50%}}@media only screen and (min-width:74.83em){.unl-event-teaser-list .unl-event-teaser{flex-basis:33%}}@media only screen and (min-width:99.78em){.unl-event-teaser-list .unl-event-teaser{flex-basis:25%}}@supports ((display:-ms-grid) or (display:grid)){.unl-event-teaser-list{display:-ms-grid;display:grid;-ms-grid-column:2;-ms-grid-column-span:1;grid-column:2/3;grid-template-columns:repeat(auto-fill,minmax(13.32em,1fr));padding-left:0}@media only screen and (min-width:74.83em){.unl-event-teaser-list{-ms-grid-columns:(1fr)[3];grid-template-columns:repeat(3,1fr)}}}
/*# sourceMappingURL=events-band.css.map */", "wdn/templates_5.0/js/js-css/events-band.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/events-band.css");
    }
}
