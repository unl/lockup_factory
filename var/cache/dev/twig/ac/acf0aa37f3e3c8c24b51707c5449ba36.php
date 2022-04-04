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

/* wdn/templates_5.3/includes/local/affiliate-mobile-search.html */
class __TwigTemplate_1d6f3149ac69f9da2e78b9128ee60afc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-mobile-search.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-mobile-search.html"));

        // line 1
        echo "<a class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-flex-grow-1 dcf-h-9 dcf-p-0 dcf-b-0 dcf-bg-transparent unl-scarlet\" id=\"dcf-mobile-search-link\" href=\"#\">
  <svg class=\"dcf-txt-sm dcf-h-6 dcf-w-6 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\">
    <g class=\"dcf-nav-toggle-icon-open\">
      <path d=\"M22.5 21.8L15 14.3c1.2-1.4 2-3.3 2-5.3 0-4.4-3.6-8-8-8S1 4.6 1 9s3.6 8 8 8c2 0 3.9-.8 5.3-2l7.5 7.5c.2.2.5.2.7 0 .2-.2.2-.5 0-.7zM9 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7z\"></path>
    </g>
    <g class=\"dcf-nav-toggle-icon-close dcf-d-none\">
      <path d=\"M20.5 4.2L4.2 20.5c-.2.2-.5.2-.7 0-.2-.2-.2-.5 0-.7L19.8 3.5c.2-.2.5-.2.7 0 .2.2.2.5 0 .7z\"></path>
      <path d=\"M3.5 4.2l16.3 16.3c.2.2.5.2.7 0s.2-.5 0-.7L4.2 3.5c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7z\"></path>
    </g>
  </svg>
  <span class=\"dcf-nav-toggle-label dcf-mt-1 dcf-txt-2xs\">Search</span>
</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/affiliate-mobile-search.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-flex-grow-1 dcf-h-9 dcf-p-0 dcf-b-0 dcf-bg-transparent unl-scarlet\" id=\"dcf-mobile-search-link\" href=\"#\">
  <svg class=\"dcf-txt-sm dcf-h-6 dcf-w-6 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\">
    <g class=\"dcf-nav-toggle-icon-open\">
      <path d=\"M22.5 21.8L15 14.3c1.2-1.4 2-3.3 2-5.3 0-4.4-3.6-8-8-8S1 4.6 1 9s3.6 8 8 8c2 0 3.9-.8 5.3-2l7.5 7.5c.2.2.5.2.7 0 .2-.2.2-.5 0-.7zM9 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7z\"></path>
    </g>
    <g class=\"dcf-nav-toggle-icon-close dcf-d-none\">
      <path d=\"M20.5 4.2L4.2 20.5c-.2.2-.5.2-.7 0-.2-.2-.2-.5 0-.7L19.8 3.5c.2-.2.5-.2.7 0 .2.2.2.5 0 .7z\"></path>
      <path d=\"M3.5 4.2l16.3 16.3c.2.2.5.2.7 0s.2-.5 0-.7L4.2 3.5c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7z\"></path>
    </g>
  </svg>
  <span class=\"dcf-nav-toggle-label dcf-mt-1 dcf-txt-2xs\">Search</span>
</a>
", "wdn/templates_5.3/includes/local/affiliate-mobile-search.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/affiliate-mobile-search.html");
    }
}
