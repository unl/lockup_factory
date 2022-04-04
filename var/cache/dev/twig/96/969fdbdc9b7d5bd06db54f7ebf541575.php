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

/* wdn/templates_5.2/js/compressed/utility-scripts/clearCriticalCSS.js.map */
class __TwigTemplate_556d7e4c05eb8a2a5737ae7fa1efb262 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/utility-scripts/clearCriticalCSS.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/utility-scripts/clearCriticalCSS.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"removeCriticalCSS\",\"el\",\"document\",\"getElementById\",\"parentNode\",\"removeChild\",\"coreStyles\",\"onloadCSS\"],\"mappings\":\"CAAA,WACE,GAAIA,GAAoB,WACtB,GAAIC,GAAKC,SAASC,eAAe,mBACjCF,GAAGG,WAAWC,YAAYJ,IAGxBK,EAAaJ,SAASC,eAAe,eACzCI,WAAUD,EAAY,WACpBN\",\"file\":\"clearCriticalCSS.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/utility-scripts/clearCriticalCSS.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"removeCriticalCSS\",\"el\",\"document\",\"getElementById\",\"parentNode\",\"removeChild\",\"coreStyles\",\"onloadCSS\"],\"mappings\":\"CAAA,WACE,GAAIA,GAAoB,WACtB,GAAIC,GAAKC,SAASC,eAAe,mBACjCF,GAAGG,WAAWC,YAAYJ,IAGxBK,EAAaJ,SAASC,eAAe,eACzCI,WAAUD,EAAY,WACpBN\",\"file\":\"clearCriticalCSS.js\"}", "wdn/templates_5.2/js/compressed/utility-scripts/clearCriticalCSS.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/utility-scripts/clearCriticalCSS.js.map");
    }
}
