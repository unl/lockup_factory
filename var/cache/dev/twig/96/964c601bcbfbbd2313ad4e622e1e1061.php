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

/* wdn/templates_5.3/js/compressed/bg-videos.js.map */
class __TwigTemplate_df1fd314861b1794c6cf833d9311bd81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/bg-videos.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/bg-videos.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"DCFBgVideoToggleModule\",\"theme\",\"DCFBgVideoToggleTheme\",\"setThemeVariable\",\"DCFBgVideoToggle\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,qBAAsB,SAAUC,GACvC,GAAIC,GAAQ,GAAID,GAAuBE,qBACvCD,GAAME,iBAAiB,sBAAuB,0BAA2B,UAAW,kBAAmB,UAAW,eAAgB,iBAAkB,gBAAiB,aAAc,gBAAiB,gBAAiB,WAAY,WAAY,UAAW,UAAW,UAAW,eAC9QF,EAAME,iBAAiB,yBAA0B,wRACjDF,EAAME,iBAAiB,0BAA2B,+WAC9B,GAAIH,GAAuBI,iBAAiBH,GAClDI\",\"file\":\"bg-videos.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/bg-videos.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"DCFBgVideoToggleModule\",\"theme\",\"DCFBgVideoToggleTheme\",\"setThemeVariable\",\"DCFBgVideoToggle\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,qBAAsB,SAAUC,GACvC,GAAIC,GAAQ,GAAID,GAAuBE,qBACvCD,GAAME,iBAAiB,sBAAuB,0BAA2B,UAAW,kBAAmB,UAAW,eAAgB,iBAAkB,gBAAiB,aAAc,gBAAiB,gBAAiB,WAAY,WAAY,UAAW,UAAW,UAAW,eAC9QF,EAAME,iBAAiB,yBAA0B,wRACjDF,EAAME,iBAAiB,0BAA2B,+WAC9B,GAAIH,GAAuBI,iBAAiBH,GAClDI\",\"file\":\"bg-videos.js\"}", "wdn/templates_5.3/js/compressed/bg-videos.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/bg-videos.js.map");
    }
}
