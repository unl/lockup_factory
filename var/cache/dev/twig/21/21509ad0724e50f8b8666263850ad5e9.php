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

/* wdn/templates_5.3/scss/affiliate.scss */
class __TwigTemplate_0abdca3ff879b601c4f4c6462a21b38d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/affiliate.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/affiliate.scss"));

        // line 1
        echo "// Hide UNL elements
#wdnnotice-covid-19-message {
\tdisplay: none !important;
}

// Make border between links on main nav a neutral color
.unl.affiliate .dcf-nav-local > ul > li > a {
\tborder-color: rgba(0,0,0,.1);
}

.unl.affiliate .dcf-nav-toggle-btn-menu ~ .dcf-nav-local ul ul::after {
\tbackground-image: linear-gradient(180deg, rgba(0,0,0,.1), rgba(160,0,0,0));
}

// Make border at top of site on desktop and at top of nav bar on mobile the primary brand color
.unl.affiliate .dcf-header-global,
.unl.affiliate #dcf-nav-toggle-group {
\tborder-top-color: var(--bg-brand-alpha);
}

.unl.affiliate .dcf-search-toggle {
\tborder-color: var(--bg-brand-alpha);
}

// Make mobile nav toggle button links same color as other links on mobile
.unl.affiliate a.dcf-nav-toggle-btn-search:visited,
.unl.affiliate .dcf-nav-toggle-btn-idm a {
  color: var(--brand-alpha) !important;
}

// Make background of inverse primary buttons fade on hover
.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):active,
.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):hover {
  background-color: var(--bg-btn-inverse-primary-hover);
  border-color: var(--b-btn-inverse-primary-hover);
}

// Make gradient on mobile nav match main brand color
@media only screen and (max-width: 56.12em) {

\t.unl.affiliate .dcf-nav-menu-child::before {
\t\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(var(--bg-brand-alpha)), to(rgba(51,51,51,0)));
\t\tbackground-image: -webkit-linear-gradient(var(--bg-brand-alpha), rgba(51,51,51,0));
\t\tbackground-image: linear-gradient(var(--bg-brand-alpha), rgba(51,51,51,0));
\t}

\t.unl.affiliate .dcf-nav-menu-child::after {
\t\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(51,51,51,0), to(var(--bg-brand-alpha)));
\t\tbackground-image: -webkit-linear-gradient(rgba(51,51,51,0), var(--bg-brand-alpha));
\t\tbackground-image: linear-gradient(rgba(51,51,51,0), var(--bg-brand-alpha));
\t}

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/affiliate.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Hide UNL elements
#wdnnotice-covid-19-message {
\tdisplay: none !important;
}

// Make border between links on main nav a neutral color
.unl.affiliate .dcf-nav-local > ul > li > a {
\tborder-color: rgba(0,0,0,.1);
}

.unl.affiliate .dcf-nav-toggle-btn-menu ~ .dcf-nav-local ul ul::after {
\tbackground-image: linear-gradient(180deg, rgba(0,0,0,.1), rgba(160,0,0,0));
}

// Make border at top of site on desktop and at top of nav bar on mobile the primary brand color
.unl.affiliate .dcf-header-global,
.unl.affiliate #dcf-nav-toggle-group {
\tborder-top-color: var(--bg-brand-alpha);
}

.unl.affiliate .dcf-search-toggle {
\tborder-color: var(--bg-brand-alpha);
}

// Make mobile nav toggle button links same color as other links on mobile
.unl.affiliate a.dcf-nav-toggle-btn-search:visited,
.unl.affiliate .dcf-nav-toggle-btn-idm a {
  color: var(--brand-alpha) !important;
}

// Make background of inverse primary buttons fade on hover
.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):active,
.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):hover {
  background-color: var(--bg-btn-inverse-primary-hover);
  border-color: var(--b-btn-inverse-primary-hover);
}

// Make gradient on mobile nav match main brand color
@media only screen and (max-width: 56.12em) {

\t.unl.affiliate .dcf-nav-menu-child::before {
\t\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(var(--bg-brand-alpha)), to(rgba(51,51,51,0)));
\t\tbackground-image: -webkit-linear-gradient(var(--bg-brand-alpha), rgba(51,51,51,0));
\t\tbackground-image: linear-gradient(var(--bg-brand-alpha), rgba(51,51,51,0));
\t}

\t.unl.affiliate .dcf-nav-menu-child::after {
\t\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(51,51,51,0), to(var(--bg-brand-alpha)));
\t\tbackground-image: -webkit-linear-gradient(rgba(51,51,51,0), var(--bg-brand-alpha));
\t\tbackground-image: linear-gradient(rgba(51,51,51,0), var(--bg-brand-alpha));
\t}

}
", "wdn/templates_5.3/scss/affiliate.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/affiliate.scss");
    }
}
