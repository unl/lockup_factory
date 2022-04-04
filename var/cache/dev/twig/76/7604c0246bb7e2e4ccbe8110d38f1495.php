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

/* wdn/templates_5.3/images/bg-dots-gray.svg */
class __TwigTemplate_de2fa52aa95dbb621371762b0ddea684 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/bg-dots-gray.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/bg-dots-gray.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 12 12\"><style>.a{fill:#c7c8ca;}@media (prefers-color-scheme: dark){.a{fill:#6b6b68;}}</style><g class=\"a\"><circle cx=\"1.5\" cy=\"1.5\" r=\"1.5\"/><circle cx=\"7.5\" cy=\"7.5\" r=\"1.5\"/></g><path d=\"M0 0h12v12H0V0z\" fill=\"none\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/images/bg-dots-gray.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 12 12\"><style>.a{fill:#c7c8ca;}@media (prefers-color-scheme: dark){.a{fill:#6b6b68;}}</style><g class=\"a\"><circle cx=\"1.5\" cy=\"1.5\" r=\"1.5\"/><circle cx=\"7.5\" cy=\"7.5\" r=\"1.5\"/></g><path d=\"M0 0h12v12H0V0z\" fill=\"none\"/></svg>", "wdn/templates_5.3/images/bg-dots-gray.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/images/bg-dots-gray.svg");
    }
}
