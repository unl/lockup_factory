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

/* wdn/templates_5.3/js/compressed/pagination.js.map */
class __TwigTemplate_e6fe66b00e35fd424345cd4637c753f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/pagination.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/pagination.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"DCFPaginationModule\",\"paginationNavs\",\"document\",\"querySelectorAll\",\"DCFPagination\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,kBAAmB,SAAUC,GACpC,GAAIC,GAAiBC,SAASC,iBAAiB,kBAC9B,IAAIH,GAAoBI,cAAcH,GAC5CI\",\"file\":\"pagination.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/pagination.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"DCFPaginationModule\",\"paginationNavs\",\"document\",\"querySelectorAll\",\"DCFPagination\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,kBAAmB,SAAUC,GACpC,GAAIC,GAAiBC,SAASC,iBAAiB,kBAC9B,IAAIH,GAAoBI,cAAcH,GAC5CI\",\"file\":\"pagination.js\"}", "wdn/templates_5.3/js/compressed/pagination.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/pagination.js.map");
    }
}
