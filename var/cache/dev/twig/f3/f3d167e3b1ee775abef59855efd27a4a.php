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

/* wdn/templates_5.3/includes/global/nav-toggle-btn.html */
class __TwigTemplate_cda6a41a0efa8644306e4e42a1d680bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/nav-toggle-btn.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/nav-toggle-btn.html"));

        // line 1
        echo "<button class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-menu dcf-flex-shrink-0 dcf-ai-center dcf-w-9 dcf-p-0 dcf-b-0 dcf-bg-transparent dcf-txt-xs unl-cream\" id=\"dcf-menu-toggle\" hidden>
  <svg class=\"dcf-h-5 dcf-w-5 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" width=\"16\" height=\"16\" viewBox=\"0 0 48 48\">
    <g>
      <path d=\"M45.5 22.5h-43c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5zM45.5 7.5h-43C1.7 7.5 1 8.2 1 9s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5zM45.5 37.5h-43c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5z\"/>
    </g>
    <g class=\"dcf-d-none\">
      <path d=\"M38.1 7.7L7.7 38.1c-.6.6-.6 1.5 0 2.1.6.6 1.5.6 2.1 0L40.3 9.9c.6-.6.6-1.5 0-2.1-.6-.6-1.6-.6-2.2-.1z\"/>
      <path d=\"M7.7 7.7c-.6.6-.6 1.5 0 2.1l30.4 30.4c.6.6 1.5.6 2.1 0 .6-.6.6-1.5 0-2.1L9.9 7.7c-.6-.5-1.6-.5-2.2 0z\"/>
    </g>
  </svg>
</button>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/nav-toggle-btn.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-menu dcf-flex-shrink-0 dcf-ai-center dcf-w-9 dcf-p-0 dcf-b-0 dcf-bg-transparent dcf-txt-xs unl-cream\" id=\"dcf-menu-toggle\" hidden>
  <svg class=\"dcf-h-5 dcf-w-5 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" width=\"16\" height=\"16\" viewBox=\"0 0 48 48\">
    <g>
      <path d=\"M45.5 22.5h-43c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5zM45.5 7.5h-43C1.7 7.5 1 8.2 1 9s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5zM45.5 37.5h-43c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5z\"/>
    </g>
    <g class=\"dcf-d-none\">
      <path d=\"M38.1 7.7L7.7 38.1c-.6.6-.6 1.5 0 2.1.6.6 1.5.6 2.1 0L40.3 9.9c.6-.6.6-1.5 0-2.1-.6-.6-1.6-.6-2.2-.1z\"/>
      <path d=\"M7.7 7.7c-.6.6-.6 1.5 0 2.1l30.4 30.4c.6.6 1.5.6 2.1 0 .6-.6.6-1.5 0-2.1L9.9 7.7c-.6-.5-1.6-.5-2.2 0z\"/>
    </g>
  </svg>
</button>
", "wdn/templates_5.3/includes/global/nav-toggle-btn.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/nav-toggle-btn.html");
    }
}
