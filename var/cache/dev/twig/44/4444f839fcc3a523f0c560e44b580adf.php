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

/* wdn/templates_5.3/images/deprecated/infographics/people.svg */
class __TwigTemplate_a3cacaa11448c00609f822595a0200e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/people.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/people.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M51.6 113.3v18.7h-16.1v-20.3c7.5-6 19.4-11.3 19.4-11.3v-3.9c0-.8-.2-2.6-.7-3.4-.4-.8-1.9-.899-2.7-3.3-1.6-5.5.7-5.6.9-5.6.1-2.601.3-5.8 1.5-7.3 1.4-1.9 5-3.301 7.3-3.301h.6c2.3 0 5.9 1.4 7.3 3.301 1.2 1.5 1.4 4.699 1.5 7.3.2 0 2.4.1.9 5.6-.6 2-2.5 2.5-2.9 3.3-.4.801-.7 2.601-.7 3.4v3.9h.1c-4.8 2.6-10.2 5.899-14.6 9.5l-1.6 1.3v2.1h-.2zm92.9-1.6c-3.3-2.8-8.3-5.601-12.4-7.8-4-2.101-7.199-3.5-7.199-3.5v-3.9c0-.8.3-2.6.699-3.4.4-.8 2.301-1.3 2.9-3.3 1.6-5.399-.6-5.6-.9-5.6-.1-2.601-.3-5.8-1.5-7.3-1.399-1.9-5-3.301-7.3-3.301h-.6c-2.3 0-5.9 1.4-7.3 3.301-1.2 1.5-1.4 4.699-1.5 7.3-.2 0-2.5.1-.9 5.6.7 2.4 2.2 2.5 2.7 3.3.399.801.7 2.601.7 3.4v3.8c6.5 3.5 11.6 6.7 15.1 9.601l1.6 1.3v20.799h15.9v-20.3zm-36.6-8.6l-.801-.399c-4.899-2.5-8.699-4.2-8.699-4.2v-5.1c0-1 .3-3.4.899-4.5.601-1 3.101-1.7 3.8-4.4 2.101-7.1-.899-7.3-1.199-7.3-.2-3.4-.4-7.6-1.9-9.7-1.9-2.5-6.6-4.4-9.6-4.4h-.8c-3 0-7.7 1.9-9.6 4.4-1.5 2-1.8 6.2-1.9 9.7-.3 0-3.3.2-1.2 7.3.9 3.2 3 3.3 3.5 4.4.6 1.1.9 3.5.9 4.5v5.1s-3.7 1.7-8.7 4.3c-5.2 2.7-11.7 6.5-16.7 10.601v18.698999999999998h68.2v-18.701c-4.2-3.7-10.8-7.5-16.2-10.3z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/images/deprecated/infographics/people.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M51.6 113.3v18.7h-16.1v-20.3c7.5-6 19.4-11.3 19.4-11.3v-3.9c0-.8-.2-2.6-.7-3.4-.4-.8-1.9-.899-2.7-3.3-1.6-5.5.7-5.6.9-5.6.1-2.601.3-5.8 1.5-7.3 1.4-1.9 5-3.301 7.3-3.301h.6c2.3 0 5.9 1.4 7.3 3.301 1.2 1.5 1.4 4.699 1.5 7.3.2 0 2.4.1.9 5.6-.6 2-2.5 2.5-2.9 3.3-.4.801-.7 2.601-.7 3.4v3.9h.1c-4.8 2.6-10.2 5.899-14.6 9.5l-1.6 1.3v2.1h-.2zm92.9-1.6c-3.3-2.8-8.3-5.601-12.4-7.8-4-2.101-7.199-3.5-7.199-3.5v-3.9c0-.8.3-2.6.699-3.4.4-.8 2.301-1.3 2.9-3.3 1.6-5.399-.6-5.6-.9-5.6-.1-2.601-.3-5.8-1.5-7.3-1.399-1.9-5-3.301-7.3-3.301h-.6c-2.3 0-5.9 1.4-7.3 3.301-1.2 1.5-1.4 4.699-1.5 7.3-.2 0-2.5.1-.9 5.6.7 2.4 2.2 2.5 2.7 3.3.399.801.7 2.601.7 3.4v3.8c6.5 3.5 11.6 6.7 15.1 9.601l1.6 1.3v20.799h15.9v-20.3zm-36.6-8.6l-.801-.399c-4.899-2.5-8.699-4.2-8.699-4.2v-5.1c0-1 .3-3.4.899-4.5.601-1 3.101-1.7 3.8-4.4 2.101-7.1-.899-7.3-1.199-7.3-.2-3.4-.4-7.6-1.9-9.7-1.9-2.5-6.6-4.4-9.6-4.4h-.8c-3 0-7.7 1.9-9.6 4.4-1.5 2-1.8 6.2-1.9 9.7-.3 0-3.3.2-1.2 7.3.9 3.2 3 3.3 3.5 4.4.6 1.1.9 3.5.9 4.5v5.1s-3.7 1.7-8.7 4.3c-5.2 2.7-11.7 6.5-16.7 10.601v18.698999999999998h68.2v-18.701c-4.2-3.7-10.8-7.5-16.2-10.3z\"/></svg>", "wdn/templates_5.3/images/deprecated/infographics/people.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/images/deprecated/infographics/people.svg");
    }
}
