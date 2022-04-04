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

/* wdn/templates_5.3/includes/local/affiliate-search.html */
class __TwigTemplate_60b23d9cd40c0401e9e3aeb624bae53f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-search.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-search.html"));

        // line 1
        echo "<div class=\"dcf-search dcf-header-global-item dcf-flex-grow-1 dcf-d-flex dcf-jc-flex-end dcf-modal-parent dcf-d-none@print\" id=\"dcf-search\" aria-label=\"Search\" role=\"search\">
  <div class=\"dcf-search-toggle-wrapper dcf-ai-center dcf-w-100%\">
    <a class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-search-toggle dcf-d-flex dcf-ai-center dcf-jc-between dcf-w-100% dcf-p-0 dcf-rounded dcf-txt-2xs dcf-bg-transparent dcf-b-1 dcf-b-solid unl-scarlet\" id=\"dcf-search-toggle-link\" href=\"#\">
      <span class=\"dcf-search-toggle-label dcf-flex-grow-1 dcf-txt-left\">Search</span>
      <span class=\"dcf-d-flex dcf-ai-center dcf-jc-center dcf-w-8 dcf-pt-3 dcf-pb-3 unl-bg-scarlet unl-cream\">
        <svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"></path>
        </svg>
      </span>
    </a>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/affiliate-search.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dcf-search dcf-header-global-item dcf-flex-grow-1 dcf-d-flex dcf-jc-flex-end dcf-modal-parent dcf-d-none@print\" id=\"dcf-search\" aria-label=\"Search\" role=\"search\">
  <div class=\"dcf-search-toggle-wrapper dcf-ai-center dcf-w-100%\">
    <a class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-search-toggle dcf-d-flex dcf-ai-center dcf-jc-between dcf-w-100% dcf-p-0 dcf-rounded dcf-txt-2xs dcf-bg-transparent dcf-b-1 dcf-b-solid unl-scarlet\" id=\"dcf-search-toggle-link\" href=\"#\">
      <span class=\"dcf-search-toggle-label dcf-flex-grow-1 dcf-txt-left\">Search</span>
      <span class=\"dcf-d-flex dcf-ai-center dcf-jc-center dcf-w-8 dcf-pt-3 dcf-pb-3 unl-bg-scarlet unl-cream\">
        <svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"></path>
        </svg>
      </span>
    </a>
  </div>
</div>
", "wdn/templates_5.3/includes/local/affiliate-search.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/affiliate-search.html");
    }
}
