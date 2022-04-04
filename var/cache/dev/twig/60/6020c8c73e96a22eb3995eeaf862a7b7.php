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

/* wdn/templates_5.3/includes/global/search.html */
class __TwigTemplate_78777507b7c41aa29f1914c96678b190 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/search.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/search.html"));

        // line 1
        echo "<div class=\"dcf-search dcf-header-global-item dcf-flex-grow-1 dcf-d-flex dcf-jc-flex-end dcf-modal-parent dcf-d-none@print\" id=\"dcf-search\" role=\"search\">
  <div class=\"dcf-search-toggle-wrapper dcf-ai-center dcf-w-100%\">
    <a class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-search-toggle dcf-d-flex dcf-ai-center dcf-jc-between dcf-w-100% dcf-p-0 dcf-rounded dcf-txt-2xs dcf-bg-transparent dcf-b-1 dcf-b-solid unl-b-scarlet unl-scarlet\" id=\"dcf-search-toggle-link\" href=\"https://search.unl.edu/\">
      <span class=\"dcf-search-toggle-label dcf-flex-grow-1 dcf-txt-left\">Search</span>
      <span class=\"dcf-d-flex dcf-ai-center dcf-jc-center dcf-w-8 dcf-pt-3 dcf-pb-3 unl-bg-scarlet unl-cream\">
        <svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"></path>
        </svg>
      </span>
    </a>
    <button class=\"dcf-search-toggle-button dcf-btn-toggle-modal dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-search-toggle dcf-d-flex dcf-ai-center dcf-jc-between dcf-w-100% dcf-p-0 dcf-rounded dcf-txt-2xs dcf-bg-transparent dcf-b-1 dcf-b-solid unl-b-scarlet unl-scarlet\" data-toggles-modal=\"dcf-search-results\" type=\"button\" hidden></button>
  </div>
  <div class=\"dcf-modal dcf-fixed dcf-pin-top dcf-pin-left\" id=\"dcf-search-results\" hidden>
    <div class=\"dcf-modal-wrapper dcf-bg-overlay-light dcf-h-max-100vh dcf-overflow-y-auto dcf-d-flex dcf-flex-col dcf-flex-nowrap dcf-h-100% dcf-w-100%\">
      <div class=\"dcf-modal-header dcf-bleed dcf-bg-center dcf-bg-no-repeat dcf-bg-cover unl-bg-scarlet unl-search-bg\">
        <h2 class=\"dcf-sr-only\">Search Form</h2>
        <form class=\"dcf-wrapper dcf-form dcf-search-form dcf-d-flex dcf-ai-center dcf-pt-8 dcf-pb-8\" id=\"dcf-search-form\" role=\"search\" aria-label=\"Site\" action=\"https://search.unl.edu/\" method=\"get\">
          <label class=\"dcf-label dcf-mr-4 dcf-mb-0 unl-cream\" for=\"dcf-search_query\">Search</label>
          <div class=\"dcf-input-group\">
            <input class=\"dcf-input-text dcf-search-input dcf-bg-transparent unl-cream unl-b-cream\" id=\"dcf-search_query\" name=\"q\" type=\"search\" required>
            <button class=\"dcf-btn dcf-btn-inverse-primary\" type=\"submit\">
              <svg class=\"dcf-d-block dcf-h-5 dcf-w-5 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"></path>
              </svg>
              <span class=\"dcf-sr-only\">Submit</span>
            </button>
          </div>
        </form>
        <button class=\"dcf-btn-close-modal dcf-btn dcf-btn-inverse-tertiary dcf-absolute dcf-pin-top dcf-pin-right dcf-z-1 dcf-lh-1\">Close</button>
      </div>
      <div class=\"dcf-modal-content dcf-bleed dcf-h-100% dcf-w-100% dcf-overflow-y-auto\">
        <div class=\"dcf-h-100% dcf-w-100% dcf-overflow-y-auto\">
          <div class=\"dcf-search-results-wrapper dcf-h-100% dcf-w-100%\" id=\"dcf-search-results-wrapper\">
          </div><!-- end Search Results Wrapper -->
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/search.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dcf-search dcf-header-global-item dcf-flex-grow-1 dcf-d-flex dcf-jc-flex-end dcf-modal-parent dcf-d-none@print\" id=\"dcf-search\" role=\"search\">
  <div class=\"dcf-search-toggle-wrapper dcf-ai-center dcf-w-100%\">
    <a class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-search-toggle dcf-d-flex dcf-ai-center dcf-jc-between dcf-w-100% dcf-p-0 dcf-rounded dcf-txt-2xs dcf-bg-transparent dcf-b-1 dcf-b-solid unl-b-scarlet unl-scarlet\" id=\"dcf-search-toggle-link\" href=\"https://search.unl.edu/\">
      <span class=\"dcf-search-toggle-label dcf-flex-grow-1 dcf-txt-left\">Search</span>
      <span class=\"dcf-d-flex dcf-ai-center dcf-jc-center dcf-w-8 dcf-pt-3 dcf-pb-3 unl-bg-scarlet unl-cream\">
        <svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"></path>
        </svg>
      </span>
    </a>
    <button class=\"dcf-search-toggle-button dcf-btn-toggle-modal dcf-nav-toggle-btn dcf-nav-toggle-btn-search dcf-search-toggle dcf-d-flex dcf-ai-center dcf-jc-between dcf-w-100% dcf-p-0 dcf-rounded dcf-txt-2xs dcf-bg-transparent dcf-b-1 dcf-b-solid unl-b-scarlet unl-scarlet\" data-toggles-modal=\"dcf-search-results\" type=\"button\" hidden></button>
  </div>
  <div class=\"dcf-modal dcf-fixed dcf-pin-top dcf-pin-left\" id=\"dcf-search-results\" hidden>
    <div class=\"dcf-modal-wrapper dcf-bg-overlay-light dcf-h-max-100vh dcf-overflow-y-auto dcf-d-flex dcf-flex-col dcf-flex-nowrap dcf-h-100% dcf-w-100%\">
      <div class=\"dcf-modal-header dcf-bleed dcf-bg-center dcf-bg-no-repeat dcf-bg-cover unl-bg-scarlet unl-search-bg\">
        <h2 class=\"dcf-sr-only\">Search Form</h2>
        <form class=\"dcf-wrapper dcf-form dcf-search-form dcf-d-flex dcf-ai-center dcf-pt-8 dcf-pb-8\" id=\"dcf-search-form\" role=\"search\" aria-label=\"Site\" action=\"https://search.unl.edu/\" method=\"get\">
          <label class=\"dcf-label dcf-mr-4 dcf-mb-0 unl-cream\" for=\"dcf-search_query\">Search</label>
          <div class=\"dcf-input-group\">
            <input class=\"dcf-input-text dcf-search-input dcf-bg-transparent unl-cream unl-b-cream\" id=\"dcf-search_query\" name=\"q\" type=\"search\" required>
            <button class=\"dcf-btn dcf-btn-inverse-primary\" type=\"submit\">
              <svg class=\"dcf-d-block dcf-h-5 dcf-w-5 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z\"></path>
              </svg>
              <span class=\"dcf-sr-only\">Submit</span>
            </button>
          </div>
        </form>
        <button class=\"dcf-btn-close-modal dcf-btn dcf-btn-inverse-tertiary dcf-absolute dcf-pin-top dcf-pin-right dcf-z-1 dcf-lh-1\">Close</button>
      </div>
      <div class=\"dcf-modal-content dcf-bleed dcf-h-100% dcf-w-100% dcf-overflow-y-auto\">
        <div class=\"dcf-h-100% dcf-w-100% dcf-overflow-y-auto\">
          <div class=\"dcf-search-results-wrapper dcf-h-100% dcf-w-100%\" id=\"dcf-search-results-wrapper\">
          </div><!-- end Search Results Wrapper -->
        </div>
      </div>
    </div>
  </div>
</div>
", "wdn/templates_5.3/includes/global/search.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/search.html");
    }
}
