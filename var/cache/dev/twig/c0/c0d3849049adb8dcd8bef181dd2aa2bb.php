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

/* wdn/templates_5.3/scss/components/_components.regions.scss */
class __TwigTemplate_c805fd32365f485e4679b24279f687a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.regions.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.regions.scss"));

        // line 1
        echo "///////////////////////////////
// THEME / COMPONENTS / REGIONS
///////////////////////////////


.dcf-hide-institution #dcf-institution-title,
.dcf-hide-idm #dcf-idm,
.dcf-hide-search #dcf-search,
.dcf-hide-nav #dcf-mobile-toggle-menu,
.dcf-hide-nav #dcf-navigation,
.dcf-hide-breadcrumbs #dcf-breadcrumbs,
.dcf-hide-footer-contact #dcf-footer-group-1,
.dcf-hide-footer-related #dcf-footer-group-2,
.dcf-hide-footer-logos .unl-footer-logo,
.dcf-hide-qa .unl-wdn-qa,
.dcf-hide-copyright .unl-footer-unl,
.terminal #dcf-mobile-toggle-menu,
.terminal #dcf-navigation,
.terminal #dcf-breadcrumbs,
.terminal #dcf-footer-group-1,
.terminal #dcf-footer-group-2 {
  display: none;
}


.dcf-hide-page-title #dcf-page-title {
  @include sr-only; // Keep the text readable by screen readers and search engines since it contains the h1
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.regions.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////
// THEME / COMPONENTS / REGIONS
///////////////////////////////


.dcf-hide-institution #dcf-institution-title,
.dcf-hide-idm #dcf-idm,
.dcf-hide-search #dcf-search,
.dcf-hide-nav #dcf-mobile-toggle-menu,
.dcf-hide-nav #dcf-navigation,
.dcf-hide-breadcrumbs #dcf-breadcrumbs,
.dcf-hide-footer-contact #dcf-footer-group-1,
.dcf-hide-footer-related #dcf-footer-group-2,
.dcf-hide-footer-logos .unl-footer-logo,
.dcf-hide-qa .unl-wdn-qa,
.dcf-hide-copyright .unl-footer-unl,
.terminal #dcf-mobile-toggle-menu,
.terminal #dcf-navigation,
.terminal #dcf-breadcrumbs,
.terminal #dcf-footer-group-1,
.terminal #dcf-footer-group-2 {
  display: none;
}


.dcf-hide-page-title #dcf-page-title {
  @include sr-only; // Keep the text readable by screen readers and search engines since it contains the h1
}
", "wdn/templates_5.3/scss/components/_components.regions.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.regions.scss");
    }
}
