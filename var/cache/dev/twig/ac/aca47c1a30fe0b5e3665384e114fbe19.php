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

/* wdn/templates_5.3/includes/global/idm.html */
class __TwigTemplate_027ffc85662e3e81523e8a10d61f458a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/idm.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/idm.html"));

        // line 1
        echo "<div class=\"dcf-idm dcf-flex-grow-1 dcf-d-flex dcf-jc-flex-end dcf-h-100% dcf-w-min-0 dcf-d-none@print\" id=\"dcf-idm\">
  <div class=\"dcf-idm-status-logged-out dcf-idm-toggle dcf-ai-center dcf-relative dcf-header-global-item dcf-w-min-0\">
    <a class=\"dcf-idm-login dcf-d-flex dcf-ai-center dcf-jc-center dcf-h-100% dcf-w-100%\" href=\"https://shib.unl.edu/idp/profile/cas/login?service=https%3A%2F%2Fwww.unl.edu%2F\">
      <svg class=\"dcf-idm-img dcf-txt-sm dcf-h-6 dcf-w-6 dcf-circle unl-bg-cream\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\"><path d=\"M47.9 24C47.9 10.8 37.2.1 24 .1S.1 10.8.1 24c0 6.3 2.5 12.3 6.9 16.8 4.5 4.6 10.6 7.1 17 7.1s12.5-2.5 17-7.1c4.5-4.5 6.9-10.5 6.9-16.8zm-45 0C2.9 12.4 12.4 2.9 24 2.9c11.6 0 21.1 9.5 21.1 21.1 0 5.2-1.9 10.1-5.3 14-2.1-1.2-5-2.2-8.2-3.4-.7-.3-1.5-.5-2.2-.8v-3.1c1.1-.7 2.6-2.4 2.9-5.7.8-.6 1.2-1.6 1.2-2.9 0-1.1-.4-2.1-1-2.7.5-1.6 1.3-4.2.7-6.5-.7-3-4.6-4-7.7-4-2.7 0-5.9.8-7.2 2.8-1.2 0-2 .5-2.4 1-1.6 1.7-.8 4.8-.3 6.6-.6.6-1 1.6-1 2.7 0 1.3.5 2.3 1.2 2.9.3 3.4 1.8 5 2.9 5.7v3.1c-.7.2-1.4.5-2 .7-3.1 1.1-6.2 2.2-8.4 3.5-3.5-3.7-5.4-8.7-5.4-13.9zm7.5 16.1c2-1 4.6-2 7.2-2.9 1-.4 2-.7 3-1.1.5-.2.9-.7.9-1.3v-4.9c0-.6-.4-1.1-.9-1.3-.1 0-2-.8-2-4.5 0-.7-.5-1.2-1.1-1.4-.1-.3-.1-.9 0-1.2.6-.1 1.1-.7 1.1-1.4 0-.3-.1-.6-.2-1.2-.9-3.2-.7-4-.4-4.3.1-.1.4-.1 1 0 .7.1 1.5-.3 1.6-1 .3-1 2.5-1.9 5-1.9s4.7.8 5 1.9c.4 1.7-.4 4.1-.7 5.2-.2.6-.3.9-.3 1.3 0 .7.5 1.2 1.1 1.4.1.3.1.9 0 1.2-.6.1-1.1.7-1.1 1.4 0 3.7-1.9 4.5-2 4.5-.6.2-1 .7-1 1.3v4.9c0 .6.4 1.1.9 1.3 1.1.4 2.1.8 3.2 1.2 2.7 1 5.2 1.9 7.1 2.8-3.8 3.3-8.6 5-13.7 5-5.2 0-9.9-1.8-13.7-5z\"/></svg>
      <span class=\"dcf-idm-label dcf-mr-3 dcf-txt-2xs\">Log In</span>
    </a>
  </div>
  <div class=\"dcf-idm-status-logged-in dcf-idm-toggle dcf-ai-center dcf-relative dcf-header-global-item dcf-w-min-0\"></div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/idm.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dcf-idm dcf-flex-grow-1 dcf-d-flex dcf-jc-flex-end dcf-h-100% dcf-w-min-0 dcf-d-none@print\" id=\"dcf-idm\">
  <div class=\"dcf-idm-status-logged-out dcf-idm-toggle dcf-ai-center dcf-relative dcf-header-global-item dcf-w-min-0\">
    <a class=\"dcf-idm-login dcf-d-flex dcf-ai-center dcf-jc-center dcf-h-100% dcf-w-100%\" href=\"https://shib.unl.edu/idp/profile/cas/login?service=https%3A%2F%2Fwww.unl.edu%2F\">
      <svg class=\"dcf-idm-img dcf-txt-sm dcf-h-6 dcf-w-6 dcf-circle unl-bg-cream\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\"><path d=\"M47.9 24C47.9 10.8 37.2.1 24 .1S.1 10.8.1 24c0 6.3 2.5 12.3 6.9 16.8 4.5 4.6 10.6 7.1 17 7.1s12.5-2.5 17-7.1c4.5-4.5 6.9-10.5 6.9-16.8zm-45 0C2.9 12.4 12.4 2.9 24 2.9c11.6 0 21.1 9.5 21.1 21.1 0 5.2-1.9 10.1-5.3 14-2.1-1.2-5-2.2-8.2-3.4-.7-.3-1.5-.5-2.2-.8v-3.1c1.1-.7 2.6-2.4 2.9-5.7.8-.6 1.2-1.6 1.2-2.9 0-1.1-.4-2.1-1-2.7.5-1.6 1.3-4.2.7-6.5-.7-3-4.6-4-7.7-4-2.7 0-5.9.8-7.2 2.8-1.2 0-2 .5-2.4 1-1.6 1.7-.8 4.8-.3 6.6-.6.6-1 1.6-1 2.7 0 1.3.5 2.3 1.2 2.9.3 3.4 1.8 5 2.9 5.7v3.1c-.7.2-1.4.5-2 .7-3.1 1.1-6.2 2.2-8.4 3.5-3.5-3.7-5.4-8.7-5.4-13.9zm7.5 16.1c2-1 4.6-2 7.2-2.9 1-.4 2-.7 3-1.1.5-.2.9-.7.9-1.3v-4.9c0-.6-.4-1.1-.9-1.3-.1 0-2-.8-2-4.5 0-.7-.5-1.2-1.1-1.4-.1-.3-.1-.9 0-1.2.6-.1 1.1-.7 1.1-1.4 0-.3-.1-.6-.2-1.2-.9-3.2-.7-4-.4-4.3.1-.1.4-.1 1 0 .7.1 1.5-.3 1.6-1 .3-1 2.5-1.9 5-1.9s4.7.8 5 1.9c.4 1.7-.4 4.1-.7 5.2-.2.6-.3.9-.3 1.3 0 .7.5 1.2 1.1 1.4.1.3.1.9 0 1.2-.6.1-1.1.7-1.1 1.4 0 3.7-1.9 4.5-2 4.5-.6.2-1 .7-1 1.3v4.9c0 .6.4 1.1.9 1.3 1.1.4 2.1.8 3.2 1.2 2.7 1 5.2 1.9 7.1 2.8-3.8 3.3-8.6 5-13.7 5-5.2 0-9.9-1.8-13.7-5z\"/></svg>
      <span class=\"dcf-idm-label dcf-mr-3 dcf-txt-2xs\">Log In</span>
    </a>
  </div>
  <div class=\"dcf-idm-status-logged-in dcf-idm-toggle dcf-ai-center dcf-relative dcf-header-global-item dcf-w-min-0\"></div>
</div>
", "wdn/templates_5.3/includes/global/idm.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/idm.html");
    }
}