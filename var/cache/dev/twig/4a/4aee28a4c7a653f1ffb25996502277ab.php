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

/* wdn/templates_5.3/images/deprecated/infographics/dollar.svg */
class __TwigTemplate_8a5fe12ff0397ed73f544754c46d0ba8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/dollar.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/dollar.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M125.3 95.1c0-14.6-11.8-20.1-23.5-23.399-11.9-3.301-23.6-4.501-23.6-10.701 0-5.3 5.7-6.9 10.2-6.9 6.5 0 13.4 2.4 13.1 9.8h21.1c-.1-13.7-9.3-21.6-20.699-24.6v-10.9h-20.501v10.1c-12.5 2.2-24.3 9.5-24.3 23.9 0 14.9 12.1 20.1 23.7 23.4 11.7 3.3 23.3 4.601 23.3 11.8 0 6-6.6 8.301-12.899 8.301-9 0-14.9-3.101-15.3-12.601h-21.201c.1 17.5 11.8 26.101 26.7 28.3v10.4h20.6v-10.9c12.9-2.7 23.3-10.2 23.3-26z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/images/deprecated/infographics/dollar.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M125.3 95.1c0-14.6-11.8-20.1-23.5-23.399-11.9-3.301-23.6-4.501-23.6-10.701 0-5.3 5.7-6.9 10.2-6.9 6.5 0 13.4 2.4 13.1 9.8h21.1c-.1-13.7-9.3-21.6-20.699-24.6v-10.9h-20.501v10.1c-12.5 2.2-24.3 9.5-24.3 23.9 0 14.9 12.1 20.1 23.7 23.4 11.7 3.3 23.3 4.601 23.3 11.8 0 6-6.6 8.301-12.899 8.301-9 0-14.9-3.101-15.3-12.601h-21.201c.1 17.5 11.8 26.101 26.7 28.3v10.4h20.6v-10.9c12.9-2.7 23.3-10.2 23.3-26z\"/></svg>", "wdn/templates_5.3/images/deprecated/infographics/dollar.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/images/deprecated/infographics/dollar.svg");
    }
}
