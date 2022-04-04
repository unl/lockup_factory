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

/* wdn/templates_5.3/js/js-css/img/alert-2.svg */
class __TwigTemplate_65d776c116676e34c6e0a6df330b9556 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/img/alert-2.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/img/alert-2.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\"><path fill=\"#fff\" d=\"M47.8 46.3L24.9.6c-.4-.7-1.5-.7-1.9 0L.1 46.5c-.2.3-.1.7 0 1 .2.3.6.5.9.5h45.9c.6 0 1-.5 1-1 .1-.3 0-.5-.1-.7zM22.9 17c0-.6.5-1 1-1s1 .5 1 1v16c0 .6-.5 1-1 1s-1-.5-1-1V17zM24 41.9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2c0 1.2-.9 2-2 2z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/img/alert-2.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\"><path fill=\"#fff\" d=\"M47.8 46.3L24.9.6c-.4-.7-1.5-.7-1.9 0L.1 46.5c-.2.3-.1.7 0 1 .2.3.6.5.9.5h45.9c.6 0 1-.5 1-1 .1-.3 0-.5-.1-.7zM22.9 17c0-.6.5-1 1-1s1 .5 1 1v16c0 .6-.5 1-1 1s-1-.5-1-1V17zM24 41.9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2c0 1.2-.9 2-2 2z\"/></svg>", "wdn/templates_5.3/js/js-css/img/alert-2.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/img/alert-2.svg");
    }
}
