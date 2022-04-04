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

/* wdn/templates_5.3/includes/global/favicon/manifest.webmanifest */
class __TwigTemplate_a6929f1de2a388f862c94cdfa9b7f959 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/favicon/manifest.webmanifest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/favicon/manifest.webmanifest"));

        // line 1
        echo "{
\t\"icons\": [
\t\t{
\t\t\t\"src\": \"/wdn/templates_5.3/includes/favicon/192.png?v=m223gpjb0w\",
\t\t\t\"type\": \"image/png\",
\t\t\t\"sizes\": \"192x192\"
\t\t},
\t\t{
\t\t\t\"src\": \"/wdn/templates_5.3/includes/favicon/512.png?v=m223gpjb0w\",
\t\t\t\"type\": \"image/png\",
\t\t\t\"sizes\": \"512x512\"
\t\t}
\t]
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/favicon/manifest.webmanifest";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
\t\"icons\": [
\t\t{
\t\t\t\"src\": \"/wdn/templates_5.3/includes/favicon/192.png?v=m223gpjb0w\",
\t\t\t\"type\": \"image/png\",
\t\t\t\"sizes\": \"192x192\"
\t\t},
\t\t{
\t\t\t\"src\": \"/wdn/templates_5.3/includes/favicon/512.png?v=m223gpjb0w\",
\t\t\t\"type\": \"image/png\",
\t\t\t\"sizes\": \"512x512\"
\t\t}
\t]
}
", "wdn/templates_5.3/includes/global/favicon/manifest.webmanifest", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/favicon/manifest.webmanifest");
    }
}
