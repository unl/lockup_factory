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

/* wdn/templates_5.1/js/js-css/img/information.svg */
class __TwigTemplate_e4b18cb9275902c89e457d5869920ccd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/img/information.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/img/information.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\"><path fill=\"#fff\" d=\"M23 0C10.3 0 0 10.3 0 23s10.3 23 23 23 23-10.3 23-23S35.7 0 23 0zm-1 10c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm7 28H17c-.6 0-1-.4-1-1s.4-1 1-1h5V20h-3c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1v17h5c.6 0 1 .4 1 1s-.4 1-1 1z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/js-css/img/information.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\"><path fill=\"#fff\" d=\"M23 0C10.3 0 0 10.3 0 23s10.3 23 23 23 23-10.3 23-23S35.7 0 23 0zm-1 10c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm7 28H17c-.6 0-1-.4-1-1s.4-1 1-1h5V20h-3c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1v17h5c.6 0 1 .4 1 1s-.4 1-1 1z\"/></svg>", "wdn/templates_5.1/js/js-css/img/information.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/js-css/img/information.svg");
    }
}
