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

/* wdn/templates_5.3/includes/global/apply-header-1.html */
class __TwigTemplate_94e65a84d09cdd2403562fbb8713e4fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/apply-header-1.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/apply-header-1.html"));

        // line 1
        echo "<li class=\"dcf-relative dcf-mb-0\">
  <a class=\"dcf-link-cta dcf-pt-4 dcf-pr-5 dcf-pb-4 dcf-pl-5\" href=\"https://www.unl.edu/apply-now/\">Apply</a>
  <button class=\"dcf-btn-toggle-cta dcf-pt-4 dcf-pb-4 dcf-bg-transparent dcf-b-0\" id=\"dcf-apply-toggle\" aria-pressed=\"false\" aria-haspopup=\"true\" aria-controls=\"dcf-apply-options\" hidden>Apply</button>
  <ul class=\"dcf-list-cta dcf-list-bare dcf-absolute dcf-mt-0 dcf-mb-0 dcf-p-6 dcf-bg-overlay-dark\" id=\"dcf-apply-options\" aria-expanded=\"false\" hidden>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/apply-header-1.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"dcf-relative dcf-mb-0\">
  <a class=\"dcf-link-cta dcf-pt-4 dcf-pr-5 dcf-pb-4 dcf-pl-5\" href=\"https://www.unl.edu/apply-now/\">Apply</a>
  <button class=\"dcf-btn-toggle-cta dcf-pt-4 dcf-pb-4 dcf-bg-transparent dcf-b-0\" id=\"dcf-apply-toggle\" aria-pressed=\"false\" aria-haspopup=\"true\" aria-controls=\"dcf-apply-options\" hidden>Apply</button>
  <ul class=\"dcf-list-cta dcf-list-bare dcf-absolute dcf-mt-0 dcf-mb-0 dcf-p-6 dcf-bg-overlay-dark\" id=\"dcf-apply-options\" aria-expanded=\"false\" hidden>
", "wdn/templates_5.3/includes/global/apply-header-1.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/apply-header-1.html");
    }
}
