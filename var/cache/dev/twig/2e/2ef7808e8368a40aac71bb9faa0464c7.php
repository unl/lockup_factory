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

/* wdn/templates_5.3/includes/global/favicon/manifest.json */
class __TwigTemplate_cebd4b047ceeaa5d6ee129ed7d41570e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/favicon/manifest.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/favicon/manifest.json"));

        // line 1
        echo "{
\t\"name\": \"unl.edu\",
\t\"icons\": [
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-36x36.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"36x36\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 0.75
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-48x48.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"48x48\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 1
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-72x72.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"72x72\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 1.5
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-96x96.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"96x96\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 2
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-144x144.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"144x144\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 3
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-192x192.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"192x192\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 4
\t\t}
\t]
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/favicon/manifest.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
\t\"name\": \"unl.edu\",
\t\"icons\": [
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-36x36.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"36x36\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 0.75
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-48x48.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"48x48\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 1
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-72x72.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"72x72\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 1.5
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-96x96.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"96x96\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 2
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-144x144.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"144x144\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 3
\t\t},
\t\t{
\t\t\t\"src\": \"\\/wdn\\/templates_4.1\\/includes\\/icons\\/android-chrome-192x192.png?v=m223gpjb0w\",
\t\t\t\"sizes\": \"192x192\",
\t\t\t\"type\": \"image\\/png\",
\t\t\t\"density\": 4
\t\t}
\t]
}
", "wdn/templates_5.3/includes/global/favicon/manifest.json", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/favicon/manifest.json");
    }
}
