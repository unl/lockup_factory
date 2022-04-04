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

/* wdn/templates_5.3/images/deprecated/infographics/globe.svg */
class __TwigTemplate_aeba684459b7deaac7d9408d12193b50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/globe.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/globe.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M90 40.7c-25.2 0-45.7 20.5-45.7 45.6 0 25.2 20.5 45.7 45.7 45.7s45.7-20.5 45.7-45.7c0-25.1-20.5-45.6-45.7-45.6zm-40.7 48h14.2c.2 6 1 11.7 2.4 16.8h-11.9c-2.7-5-4.4-10.7-4.7-16.8zm43.1-26.4v-16.5c6.1 1.3 11.5 7.6 15.1 16.6h-15.1v-.1zm16.8 4.8c1.5 5.1 2.399 10.8 2.6 16.8h-19.4v-16.8h16.8zm-21.6-21.3v16.5h-15.1c3.6-8.9 9-15.2 15.1-16.5zm0 21.3v16.8h-19.3c.2-6 1.1-11.7 2.6-16.8h16.7zm-24.1 16.8h-14.2c.4-6 2-11.801 4.7-16.8h11.8c-1.4 5.2-2.2 10.8-2.3 16.8zm4.8 4.8h19.3v16.8h-16.7c-1.5-5-2.4-10.7-2.6-16.8zm19.3 21.7v16.6c-6.1-1.3-11.5-7.6-15.1-16.6h15.1zm4.8 16.5v-16.6h15.1c-3.6 9-9 15.3-15.1 16.6zm0-21.3v-16.9h19.3c-.2 6-1.101 11.7-2.601 16.8h-16.699v.1zm24.2-16.9h14.2c-.3 6-2 11.8-4.7 16.8h-11.8c1.3-5.1 2.1-10.7 2.3-16.8zm0-4.8c-.199-6-1-11.7-2.399-16.8h11.799c2.7 5.1 4.4 10.8 4.7 16.8h-14.1zm6.4-21.6h-10.3c-2-5.6-4.601-10.3-7.8-14 7.3 2.9 13.5 7.8 18.1 14zm-48-13.9c-3.1 3.6-5.8 8.4-7.8 14h-10.2c4.6-6.3 10.8-11.2 18-14zm-18 62h10.3c2 5.6 4.6 10.3 7.8 14-7.3-2.9-13.5-7.8-18.1-14zm48 13.9c3.1-3.6 5.8-8.399 7.7-14h10.3c-4.6 6.3-10.8 11.2-18 14z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/images/deprecated/infographics/globe.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M90 40.7c-25.2 0-45.7 20.5-45.7 45.6 0 25.2 20.5 45.7 45.7 45.7s45.7-20.5 45.7-45.7c0-25.1-20.5-45.6-45.7-45.6zm-40.7 48h14.2c.2 6 1 11.7 2.4 16.8h-11.9c-2.7-5-4.4-10.7-4.7-16.8zm43.1-26.4v-16.5c6.1 1.3 11.5 7.6 15.1 16.6h-15.1v-.1zm16.8 4.8c1.5 5.1 2.399 10.8 2.6 16.8h-19.4v-16.8h16.8zm-21.6-21.3v16.5h-15.1c3.6-8.9 9-15.2 15.1-16.5zm0 21.3v16.8h-19.3c.2-6 1.1-11.7 2.6-16.8h16.7zm-24.1 16.8h-14.2c.4-6 2-11.801 4.7-16.8h11.8c-1.4 5.2-2.2 10.8-2.3 16.8zm4.8 4.8h19.3v16.8h-16.7c-1.5-5-2.4-10.7-2.6-16.8zm19.3 21.7v16.6c-6.1-1.3-11.5-7.6-15.1-16.6h15.1zm4.8 16.5v-16.6h15.1c-3.6 9-9 15.3-15.1 16.6zm0-21.3v-16.9h19.3c-.2 6-1.101 11.7-2.601 16.8h-16.699v.1zm24.2-16.9h14.2c-.3 6-2 11.8-4.7 16.8h-11.8c1.3-5.1 2.1-10.7 2.3-16.8zm0-4.8c-.199-6-1-11.7-2.399-16.8h11.799c2.7 5.1 4.4 10.8 4.7 16.8h-14.1zm6.4-21.6h-10.3c-2-5.6-4.601-10.3-7.8-14 7.3 2.9 13.5 7.8 18.1 14zm-48-13.9c-3.1 3.6-5.8 8.4-7.8 14h-10.2c4.6-6.3 10.8-11.2 18-14zm-18 62h10.3c2 5.6 4.6 10.3 7.8 14-7.3-2.9-13.5-7.8-18.1-14zm48 13.9c3.1-3.6 5.8-8.399 7.7-14h10.3c-4.6 6.3-10.8 11.2-18 14z\"/></svg>", "wdn/templates_5.3/images/deprecated/infographics/globe.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/images/deprecated/infographics/globe.svg");
    }
}
