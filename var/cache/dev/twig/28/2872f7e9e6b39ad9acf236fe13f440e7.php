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

/* wdn/templates_5.3/includes/local/affiliate-mobile-idm.html */
class __TwigTemplate_494e7cbb7ba8f6ac4c5c7067218e7088 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-mobile-idm.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-mobile-idm.html"));

        // line 1
        echo "<div class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-idm dcf-idm dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-flex-grow-1 dcf-h-9\">
  <div class=\"dcf-idm-status-logged-out dcf-h-100% dcf-w-100%\">
    <a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-w-100%\" href=\"https://shib.unl.edu/idp/profile/cas/login?service=https%3A%2F%2Fwww.unl.edu%2F\">
      <svg class=\"dcf-txt-sm dcf-h-6 dcf-w-6 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\">
        <path d=\"M12 0C5.4 0 0 5.4 0 12c0 6.2 5 12 12 12 3.2 0 6.3-1.3 8.5-3.6S24 15.1 24 12c0-6.6-5.4-12-12-12zM4.7 20.2c1-.6 2.5-1.1 4-1.6l1.5-.6c.2-.1.3-.3.3-.5V15c0-.2-.1-.4-.3-.5 0 0-1.2-.5-1.2-2.5 0-.3-.2-.5-.5-.5 0 0-.1-.2-.1-.5s.1-.5.1-.5c.3 0 .5-.2.5-.5 0-.1 0-.3-.1-.5-.2-.5-.6-2-.2-2.4.1-.2.5-.2.7-.1.3 0 .5-.1.6-.4.2-.6 1.3-1.1 2.8-1.1s2.6.5 2.8 1.1c.2.9-.2 2.2-.4 2.8-.2.3-.2.5-.2.6 0 .3.2.5.5.5 0 0 .1.2.1.5s-.1.5-.1.5c-.3 0-.5.2-.5.5 0 2.1-1.1 2.5-1.2 2.5-.2.1-.3.3-.3.5v2.5c0 .2.1.4.3.5.5.2 1.1.4 1.6.6 1.5.5 2.9 1.1 3.9 1.6-2 1.8-4.5 2.8-7.3 2.8-2.7 0-5.3-1-7.3-2.8zm15.4-.8c-1-.6-2.6-1.2-4.3-1.8-.4-.2-.8-.3-1.3-.5v-1.8c.5-.3 1.4-1.1 1.5-2.9.4-.2.6-.7.6-1.4 0-.6-.2-1-.5-1.3.2-.8.7-2.1.4-3.3-.3-1.4-2.2-1.9-3.7-1.9-1.3 0-3 .4-3.6 1.5-.5-.1-.9.1-1.2.4-.8.8-.3 2.4-.1 3.3-.3.2-.5.7-.5 1.3 0 .6.2 1.1.6 1.4.1 1.8 1 2.6 1.5 2.9v1.8c-.4.1-.8.3-1.2.4-1.6.6-3.3 1.2-4.4 1.9C2 17.4 1 14.8 1 12 1 5.9 5.9 1 12 1s11 4.9 11 11c0 2.8-1 5.4-2.9 7.4z\"></path>
      </svg>
      <span class=\"dcf-mt-1 dcf-txt-2xs\">Log In</span>
    </a>
  </div>
  <div class=\"dcf-idm-status-logged-in dcf-relative dcf-h-100% dcf-w-100%\" hidden></div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/affiliate-mobile-idm.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dcf-nav-toggle-btn dcf-nav-toggle-btn-idm dcf-idm dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-flex-grow-1 dcf-h-9\">
  <div class=\"dcf-idm-status-logged-out dcf-h-100% dcf-w-100%\">
    <a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-w-100%\" href=\"https://shib.unl.edu/idp/profile/cas/login?service=https%3A%2F%2Fwww.unl.edu%2F\">
      <svg class=\"dcf-txt-sm dcf-h-6 dcf-w-6 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\">
        <path d=\"M12 0C5.4 0 0 5.4 0 12c0 6.2 5 12 12 12 3.2 0 6.3-1.3 8.5-3.6S24 15.1 24 12c0-6.6-5.4-12-12-12zM4.7 20.2c1-.6 2.5-1.1 4-1.6l1.5-.6c.2-.1.3-.3.3-.5V15c0-.2-.1-.4-.3-.5 0 0-1.2-.5-1.2-2.5 0-.3-.2-.5-.5-.5 0 0-.1-.2-.1-.5s.1-.5.1-.5c.3 0 .5-.2.5-.5 0-.1 0-.3-.1-.5-.2-.5-.6-2-.2-2.4.1-.2.5-.2.7-.1.3 0 .5-.1.6-.4.2-.6 1.3-1.1 2.8-1.1s2.6.5 2.8 1.1c.2.9-.2 2.2-.4 2.8-.2.3-.2.5-.2.6 0 .3.2.5.5.5 0 0 .1.2.1.5s-.1.5-.1.5c-.3 0-.5.2-.5.5 0 2.1-1.1 2.5-1.2 2.5-.2.1-.3.3-.3.5v2.5c0 .2.1.4.3.5.5.2 1.1.4 1.6.6 1.5.5 2.9 1.1 3.9 1.6-2 1.8-4.5 2.8-7.3 2.8-2.7 0-5.3-1-7.3-2.8zm15.4-.8c-1-.6-2.6-1.2-4.3-1.8-.4-.2-.8-.3-1.3-.5v-1.8c.5-.3 1.4-1.1 1.5-2.9.4-.2.6-.7.6-1.4 0-.6-.2-1-.5-1.3.2-.8.7-2.1.4-3.3-.3-1.4-2.2-1.9-3.7-1.9-1.3 0-3 .4-3.6 1.5-.5-.1-.9.1-1.2.4-.8.8-.3 2.4-.1 3.3-.3.2-.5.7-.5 1.3 0 .6.2 1.1.6 1.4.1 1.8 1 2.6 1.5 2.9v1.8c-.4.1-.8.3-1.2.4-1.6.6-3.3 1.2-4.4 1.9C2 17.4 1 14.8 1 12 1 5.9 5.9 1 12 1s11 4.9 11 11c0 2.8-1 5.4-2.9 7.4z\"></path>
      </svg>
      <span class=\"dcf-mt-1 dcf-txt-2xs\">Log In</span>
    </a>
  </div>
  <div class=\"dcf-idm-status-logged-in dcf-relative dcf-h-100% dcf-w-100%\" hidden></div>
</div>
", "wdn/templates_5.3/includes/local/affiliate-mobile-idm.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/affiliate-mobile-idm.html");
    }
}
