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

/* wdn/templates_5.3/js/js-css/img/cross-bubble.svg */
class __TwigTemplate_359c1b8753c704112ea97225f95e6e1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/img/cross-bubble.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/img/cross-bubble.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\"><path fill=\"#fff\" d=\"M48 24c0-1.8-1-3.4-2.4-4.3 1-1.4 1.3-3.2.6-4.9-.7-1.6-2.2-2.8-3.9-3 .4-1.7 0-3.5-1.3-4.8-1.2-1.2-3.1-1.7-4.8-1.3-.2-1.7-1.4-3.2-3-3.9-1.6-.7-3.5-.4-4.9.6C27.4 1 25.8 0 24 0c-1.8 0-3.4 1-4.3 2.4-1.4-1-3.3-1.3-4.9-.6-1.7.7-2.8 2.2-3 3.9-1.7-.4-3.5.1-4.8 1.3-1.3 1.3-1.7 3.1-1.3 4.8-1.7.2-3.2 1.4-3.9 3-.7 1.7-.4 3.5.6 4.9C1 20.6 0 22.2 0 24s1 3.4 2.4 4.3c-1 1.4-1.3 3.2-.6 4.9.7 1.6 2.2 2.8 3.9 3-.4 1.7 0 3.5 1.3 4.8 1.2 1.2 3.1 1.7 4.8 1.3.2 1.7 1.4 3.2 3 3.9 1.6.7 3.5.4 4.9-.6.9 1.4 2.5 2.4 4.3 2.4 1.8 0 3.4-1 4.3-2.4 1.4 1 3.3 1.3 4.9.6 1.7-.7 2.8-2.2 3-3.9 1.7.4 3.5-.1 4.8-1.3 1.3-1.3 1.7-3.1 1.3-4.8 1.7-.2 3.2-1.4 3.9-3 .7-1.7.4-3.5-.6-4.9C47 27.4 48 25.8 48 24zm-14.3 8.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3L24 25.4l-8.3 8.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l8.3-8.3-8.3-8.3c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l8.3 8.3 8.3-8.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L25.4 24l8.3 8.3z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/img/cross-bubble.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\"><path fill=\"#fff\" d=\"M48 24c0-1.8-1-3.4-2.4-4.3 1-1.4 1.3-3.2.6-4.9-.7-1.6-2.2-2.8-3.9-3 .4-1.7 0-3.5-1.3-4.8-1.2-1.2-3.1-1.7-4.8-1.3-.2-1.7-1.4-3.2-3-3.9-1.6-.7-3.5-.4-4.9.6C27.4 1 25.8 0 24 0c-1.8 0-3.4 1-4.3 2.4-1.4-1-3.3-1.3-4.9-.6-1.7.7-2.8 2.2-3 3.9-1.7-.4-3.5.1-4.8 1.3-1.3 1.3-1.7 3.1-1.3 4.8-1.7.2-3.2 1.4-3.9 3-.7 1.7-.4 3.5.6 4.9C1 20.6 0 22.2 0 24s1 3.4 2.4 4.3c-1 1.4-1.3 3.2-.6 4.9.7 1.6 2.2 2.8 3.9 3-.4 1.7 0 3.5 1.3 4.8 1.2 1.2 3.1 1.7 4.8 1.3.2 1.7 1.4 3.2 3 3.9 1.6.7 3.5.4 4.9-.6.9 1.4 2.5 2.4 4.3 2.4 1.8 0 3.4-1 4.3-2.4 1.4 1 3.3 1.3 4.9.6 1.7-.7 2.8-2.2 3-3.9 1.7.4 3.5-.1 4.8-1.3 1.3-1.3 1.7-3.1 1.3-4.8 1.7-.2 3.2-1.4 3.9-3 .7-1.7.4-3.5-.6-4.9C47 27.4 48 25.8 48 24zm-14.3 8.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3L24 25.4l-8.3 8.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l8.3-8.3-8.3-8.3c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l8.3 8.3 8.3-8.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L25.4 24l8.3 8.3z\"/></svg>", "wdn/templates_5.3/js/js-css/img/cross-bubble.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/img/cross-bubble.svg");
    }
}
