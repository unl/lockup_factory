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

/* wdn/templates_5.3/css/affiliate.css */
class __TwigTemplate_56a911c7f912e65708ad786a89da2e94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/css/affiliate.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/css/affiliate.css"));

        // line 1
        echo "#wdnnotice-covid-19-message{display:none!important}.unl.affiliate .dcf-nav-local>ul>li>a{border-color:rgba(0,0,0,.1)}.unl.affiliate .dcf-nav-toggle-btn-menu~.dcf-nav-local ul ul:after{background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.1)),to(rgba(160,0,0,0)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,.1),rgba(160,0,0,0));background-image:linear-gradient(180deg,rgba(0,0,0,.1),rgba(160,0,0,0))}.unl.affiliate #dcf-nav-toggle-group,.unl.affiliate .dcf-header-global{border-top-color:var(--bg-brand-alpha)}.unl.affiliate .dcf-search-toggle{border-color:var(--bg-brand-alpha)}.unl.affiliate .dcf-nav-toggle-btn-idm a,.unl.affiliate a.dcf-nav-toggle-btn-search:visited{color:var(--brand-alpha)!important}.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):active,.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):hover{background-color:var(--bg-btn-inverse-primary-hover);border-color:var(--b-btn-inverse-primary-hover)}@media only screen and (max-width:56.12em){.unl.affiliate .dcf-nav-menu-child:before{background-image:-webkit-gradient(linear,left top,left bottom,from(var(--bg-brand-alpha)),to(rgba(51,51,51,0)));background-image:-webkit-linear-gradient(var(--bg-brand-alpha),rgba(51,51,51,0));background-image:linear-gradient(var(--bg-brand-alpha),rgba(51,51,51,0))}.unl.affiliate .dcf-nav-menu-child:after{background-image:-webkit-gradient(linear,left top,left bottom,from(51,51,51,0),to(var(--bg-brand-alpha)));background-image:-webkit-linear-gradient(rgba(51,51,51,0),var(--bg-brand-alpha));background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(51,51,51,0)),to(var(--bg-brand-alpha)));background-image:linear-gradient(rgba(51,51,51,0),var(--bg-brand-alpha))}}
/*# sourceMappingURL=affiliate.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/css/affiliate.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#wdnnotice-covid-19-message{display:none!important}.unl.affiliate .dcf-nav-local>ul>li>a{border-color:rgba(0,0,0,.1)}.unl.affiliate .dcf-nav-toggle-btn-menu~.dcf-nav-local ul ul:after{background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.1)),to(rgba(160,0,0,0)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,.1),rgba(160,0,0,0));background-image:linear-gradient(180deg,rgba(0,0,0,.1),rgba(160,0,0,0))}.unl.affiliate #dcf-nav-toggle-group,.unl.affiliate .dcf-header-global{border-top-color:var(--bg-brand-alpha)}.unl.affiliate .dcf-search-toggle{border-color:var(--bg-brand-alpha)}.unl.affiliate .dcf-nav-toggle-btn-idm a,.unl.affiliate a.dcf-nav-toggle-btn-search:visited{color:var(--brand-alpha)!important}.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):active,.unl.affiliate .dcf-btn-inverse-primary:not(:disabled):hover{background-color:var(--bg-btn-inverse-primary-hover);border-color:var(--b-btn-inverse-primary-hover)}@media only screen and (max-width:56.12em){.unl.affiliate .dcf-nav-menu-child:before{background-image:-webkit-gradient(linear,left top,left bottom,from(var(--bg-brand-alpha)),to(rgba(51,51,51,0)));background-image:-webkit-linear-gradient(var(--bg-brand-alpha),rgba(51,51,51,0));background-image:linear-gradient(var(--bg-brand-alpha),rgba(51,51,51,0))}.unl.affiliate .dcf-nav-menu-child:after{background-image:-webkit-gradient(linear,left top,left bottom,from(51,51,51,0),to(var(--bg-brand-alpha)));background-image:-webkit-linear-gradient(rgba(51,51,51,0),var(--bg-brand-alpha));background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(51,51,51,0)),to(var(--bg-brand-alpha)));background-image:linear-gradient(rgba(51,51,51,0),var(--bg-brand-alpha))}}
/*# sourceMappingURL=affiliate.css.map */", "wdn/templates_5.3/css/affiliate.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/css/affiliate.css");
    }
}
