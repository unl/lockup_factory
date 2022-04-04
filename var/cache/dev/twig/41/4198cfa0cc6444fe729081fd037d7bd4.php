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

/* wdn/templates_5.3/includes/global/favicon/icon.svg */
class __TwigTemplate_69418215e72bd3c76f8939f8018ac3ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/favicon/icon.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/favicon/icon.svg"));

        // line 1
        echo "<svg baseProfile=\"tiny\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 152 152\"><g><path fill=\"#d00\" d=\"M148 0h-58v48h9v23l-39.8-69-1.2-2h-58v48h9v56h-9v48h62v-48h-9v-23.1l40 69.1 1.2 2h57.8v-48h-9v-56h9v-48h-4zm2 4v42h-9v60h9v44h-54.7l-.6-1-34.3-59.3-9.4-16.3v32.6h9v44h-58v-44h9v-60h-9v-44h55l.6 1 43.4 75.5v-32.5h-9v-44h58v2zM95.9 149l-45.9-79.3v37.3h9v42h-56v-42h9v-62h-9v-42h53.3l45.7 79.3v-37.3h-9v-42h56v42h-9v62h9v42z\"/><path fill=\"#fff\" d=\"M148 2h-56v44h9v32.5l-43.5-75.5-.6-1h-54.900000000000006v44h9v60h-9v44h58v-44h-9v-32.6l43.8 75.6.6 1h54.6v-44h-9v-60h9v-44h-2zm0 42h-9v64h9v40h-51.5l-47.5-82v42h9v40h-54v-40h9v-64h-9v-40h51.8l47.2 82v-42h-9v-40h54v40z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/favicon/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg baseProfile=\"tiny\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 152 152\"><g><path fill=\"#d00\" d=\"M148 0h-58v48h9v23l-39.8-69-1.2-2h-58v48h9v56h-9v48h62v-48h-9v-23.1l40 69.1 1.2 2h57.8v-48h-9v-56h9v-48h-4zm2 4v42h-9v60h9v44h-54.7l-.6-1-34.3-59.3-9.4-16.3v32.6h9v44h-58v-44h9v-60h-9v-44h55l.6 1 43.4 75.5v-32.5h-9v-44h58v2zM95.9 149l-45.9-79.3v37.3h9v42h-56v-42h9v-62h-9v-42h53.3l45.7 79.3v-37.3h-9v-42h56v42h-9v62h9v42z\"/><path fill=\"#fff\" d=\"M148 2h-56v44h9v32.5l-43.5-75.5-.6-1h-54.900000000000006v44h9v60h-9v44h58v-44h-9v-32.6l43.8 75.6.6 1h54.6v-44h-9v-60h9v-44h-2zm0 42h-9v64h9v40h-51.5l-47.5-82v42h9v40h-54v-40h9v-64h-9v-40h51.8l47.2 82v-42h-9v-40h54v40z\"/></g></svg>", "wdn/templates_5.3/includes/global/favicon/icon.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/favicon/icon.svg");
    }
}
