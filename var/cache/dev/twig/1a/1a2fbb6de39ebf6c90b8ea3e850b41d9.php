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

/* wdn/templates_5.1/js/js-css/events.css */
class __TwigTemplate_b631ac38198943f4ac330b9e09e311f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/events.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/events.css"));

        // line 1
        echo ".unl-event-teaser{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.unl-event-datetime{margin-bottom:.75em}.wdn-calendar .unl-event-teaser:not(:last-child){margin-bottom:1em}@supports (display:grid){.unl-event-teaser{display:grid;grid-column-gap:1em;grid-template:\"d t\" auto \"d l\" 1fr/3.16em 1fr;margin-bottom:0}.unl-event-title{grid-area:t}.unl-event-datetime{grid-area:d;margin-bottom:0}.unl-event-location{grid-area:l}}
/*# sourceMappingURL=events.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/js-css/events.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".unl-event-teaser{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.unl-event-datetime{margin-bottom:.75em}.wdn-calendar .unl-event-teaser:not(:last-child){margin-bottom:1em}@supports (display:grid){.unl-event-teaser{display:grid;grid-column-gap:1em;grid-template:\"d t\" auto \"d l\" 1fr/3.16em 1fr;margin-bottom:0}.unl-event-title{grid-area:t}.unl-event-datetime{grid-area:d;margin-bottom:0}.unl-event-location{grid-area:l}}
/*# sourceMappingURL=events.css.map */", "wdn/templates_5.1/js/js-css/events.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/js-css/events.css");
    }
}