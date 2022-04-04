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

/* wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-1.html */
class __TwigTemplate_dd38cdec60e4215217e0324858fbe4e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-1.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-1.html"));

        // line 1
        echo "<div id=\"dcf-nav-toggle-group\" class=\"dcf-nav-toggle-group dcf-pin-bottom dcf-fixed dcf-w-100% dcf-bt-solid dcf-bt-2 unl-bg-cream hrjs dcf-d-none@print\">
  <button class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-menu dcf-d-flex dcf-flex-col dcf-ai-center dcf-flex-grow-1 dcf-jc-center dcf-h-9 dcf-p-0 dcf-b-0 dcf-bg-transparent unl-scarlet\" id=\"dcf-mobile-toggle-menu\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"Open menu\">
    <svg class=\"dcf-txt-sm dcf-h-6 dcf-w-6 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\">
      <g id=\"dcf-nav-toggle-icon-open-menu\" class=\"\">
        <path d=\"M23.5 12.5H.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h23c.3 0 .5.2.5.5s-.2.5-.5.5zM23.5 4.5H.5C.2 4.5 0 4.3 0 4s.2-.5.5-.5h23c.3 0 .5.2.5.5s-.2.5-.5.5zM23.5 20.5H.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h23c.3 0 .5.2.5.5s-.2.5-.5.5z\"></path>
      </g>
      <g id=\"dcf-nav-toggle-icon-close-menu\" class=\"dcf-d-none\">
        <path d=\"M20.5 4.2L4.2 20.5c-.2.2-.5.2-.7 0-.2-.2-.2-.5 0-.7L19.8 3.5c.2-.2.5-.2.7 0 .2.2.2.5 0 .7z\"></path>
        <path d=\"M3.5 4.2l16.3 16.3c.2.2.5.2.7 0s.2-.5 0-.7L4.2 3.5c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7z\"></path>
      </g>
    </svg>
    <span class=\"dcf-nav-toggle-label-menu dcf-mt-1 dcf-txt-2xs\">Menu</span>
  </button>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-1.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"dcf-nav-toggle-group\" class=\"dcf-nav-toggle-group dcf-pin-bottom dcf-fixed dcf-w-100% dcf-bt-solid dcf-bt-2 unl-bg-cream hrjs dcf-d-none@print\">
  <button class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-menu dcf-d-flex dcf-flex-col dcf-ai-center dcf-flex-grow-1 dcf-jc-center dcf-h-9 dcf-p-0 dcf-b-0 dcf-bg-transparent unl-scarlet\" id=\"dcf-mobile-toggle-menu\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"Open menu\">
    <svg class=\"dcf-txt-sm dcf-h-6 dcf-w-6 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\">
      <g id=\"dcf-nav-toggle-icon-open-menu\" class=\"\">
        <path d=\"M23.5 12.5H.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h23c.3 0 .5.2.5.5s-.2.5-.5.5zM23.5 4.5H.5C.2 4.5 0 4.3 0 4s.2-.5.5-.5h23c.3 0 .5.2.5.5s-.2.5-.5.5zM23.5 20.5H.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h23c.3 0 .5.2.5.5s-.2.5-.5.5z\"></path>
      </g>
      <g id=\"dcf-nav-toggle-icon-close-menu\" class=\"dcf-d-none\">
        <path d=\"M20.5 4.2L4.2 20.5c-.2.2-.5.2-.7 0-.2-.2-.2-.5 0-.7L19.8 3.5c.2-.2.5-.2.7 0 .2.2.2.5 0 .7z\"></path>
        <path d=\"M3.5 4.2l16.3 16.3c.2.2.5.2.7 0s.2-.5 0-.7L4.2 3.5c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7z\"></path>
      </g>
    </svg>
    <span class=\"dcf-nav-toggle-label-menu dcf-mt-1 dcf-txt-2xs\">Menu</span>
  </button>
", "wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-1.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/affiliate-nav-toggle-group-1.html");
    }
}
