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

/* wdn/templates_5.0/js/js-css/modals.css */
class __TwigTemplate_86c2a1baff7646c3236dff9d24649af6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/modals.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/modals.css"));

        // line 1
        echo ".unl .dcf-modal[aria-hidden=true]{-webkit-transition:opacity .4s ease-out;transition:opacity .4s ease-out}.unl .dcf-modal[aria-hidden=false]{-webkit-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.unl .dcf-modal-wrapper{max-height:75vh;width:calc(100% - 11.24vw)}.unl .dcf-modal-header,.unl .dcf-modal-wrapper{background-color:#fefdfa}.unl .dcf-modal-header:after{background-image:-webkit-gradient(linear,left top,left bottom,from(#fefdfa),to(rgba(254,253,250,0)));background-image:-webkit-linear-gradient(#fefdfa,rgba(254,253,250,0));background-image:linear-gradient(#fefdfa,rgba(254,253,250,0));content:\"\";height:1em;left:0;position:absolute;top:100%;width:100%;z-index:1}.unl .dcf-modal-content>:last-child{margin-bottom:0}
/*# sourceMappingURL=modals.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/modals.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".unl .dcf-modal[aria-hidden=true]{-webkit-transition:opacity .4s ease-out;transition:opacity .4s ease-out}.unl .dcf-modal[aria-hidden=false]{-webkit-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.unl .dcf-modal-wrapper{max-height:75vh;width:calc(100% - 11.24vw)}.unl .dcf-modal-header,.unl .dcf-modal-wrapper{background-color:#fefdfa}.unl .dcf-modal-header:after{background-image:-webkit-gradient(linear,left top,left bottom,from(#fefdfa),to(rgba(254,253,250,0)));background-image:-webkit-linear-gradient(#fefdfa,rgba(254,253,250,0));background-image:linear-gradient(#fefdfa,rgba(254,253,250,0));content:\"\";height:1em;left:0;position:absolute;top:100%;width:100%;z-index:1}.unl .dcf-modal-content>:last-child{margin-bottom:0}
/*# sourceMappingURL=modals.css.map */", "wdn/templates_5.0/js/js-css/modals.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/modals.css");
    }
}
