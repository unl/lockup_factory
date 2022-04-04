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

/* wdn/templates_5.3/includes/local/app-search.html */
class __TwigTemplate_21cbaa262c74a5ab483cae6068d30451 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/app-search.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/app-search.html"));

        // line 1
        echo "  <img
    class=\"dcf-d-block dcf-h-100% dcf-obj-fit-cover\"
    sizes=\"100vw\"
    srcset=\"/wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-sm.png 673w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-md.png 898w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-lg.png 1197w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-xl.png 1596w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-2xl.png 2128w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-3xl.png 2838w\"
    src=\"data:image/gif;base64,R0lGODlhAQABAAAAADs=\"
    alt=\"A student reaches to pull a book off a shelf in the library.\">
</div>
<div class=\"dcf-wrapper dcf-relative dcf-d-flex dcf-ai-center dcf-jc-center\">
  <form class=\"dcf-app-form dcf-input-group-form dcf-flex-grow-1 dcf-w-100% dcf-pt-6 dcf-pb-6\" id=\"unl-webapp-search-form\" action=\"https://search.unl.edu/\" method=\"get\">
    <label class=\"dcf-label dcf-mr-4 dcf-inverse\" for=\"unl-app-search-query\">Search Web Application</label>
    <div class=\"dcf-input-group\">
      <input class=\"dcf-input-text dcf-bg-transparent dcf-inverse\" id=\"unl-app-search-query\" name=\"q\" type=\"search\" required>
      <button class=\"dcf-btn dcf-btn-inverse-primary unl-scarlet\" type=\"submit\">
        <svg class=\"dcf-h-5 dcf-w-5 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"/>
        </svg>
        <span class=\"dcf-sr-only\">Submit</span>
      </button>
    </div>
  </form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/app-search.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <img
    class=\"dcf-d-block dcf-h-100% dcf-obj-fit-cover\"
    sizes=\"100vw\"
    srcset=\"/wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-sm.png 673w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-md.png 898w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-lg.png 1197w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-xl.png 1596w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-2xl.png 2128w,
            /wdn/templates_5.3/images/dev/unl-app-search-bg-mediahub-3xl.png 2838w\"
    src=\"data:image/gif;base64,R0lGODlhAQABAAAAADs=\"
    alt=\"A student reaches to pull a book off a shelf in the library.\">
</div>
<div class=\"dcf-wrapper dcf-relative dcf-d-flex dcf-ai-center dcf-jc-center\">
  <form class=\"dcf-app-form dcf-input-group-form dcf-flex-grow-1 dcf-w-100% dcf-pt-6 dcf-pb-6\" id=\"unl-webapp-search-form\" action=\"https://search.unl.edu/\" method=\"get\">
    <label class=\"dcf-label dcf-mr-4 dcf-inverse\" for=\"unl-app-search-query\">Search Web Application</label>
    <div class=\"dcf-input-group\">
      <input class=\"dcf-input-text dcf-bg-transparent dcf-inverse\" id=\"unl-app-search-query\" name=\"q\" type=\"search\" required>
      <button class=\"dcf-btn dcf-btn-inverse-primary unl-scarlet\" type=\"submit\">
        <svg class=\"dcf-h-5 dcf-w-5 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"/>
        </svg>
        <span class=\"dcf-sr-only\">Submit</span>
      </button>
    </div>
  </form>
", "wdn/templates_5.3/includes/local/app-search.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/app-search.html");
    }
}
