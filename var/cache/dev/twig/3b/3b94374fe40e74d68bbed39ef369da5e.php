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

/* wdn/templates_5.3/js/js-css/tabs.css.map */
class __TwigTemplate_b66a3aedffdcc18345664b38b60707d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/tabs.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/tabs.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"../../js-src/js-css/tabs.scss\",\"../../scss/variables/_variables.tabs.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\"],\"names\":[],\"mappings\":\"AAQA,cACE,kBAAqC,CAIvC,6BAME,oCCYoB,CDZpB,0CCYoB,CDRtB,iCACE,eAAgB,CEyBd,2CFlBF,mCACE,qBAAsB,CACtB,yCCZkC,CDalC,0CCbkC,CDclC,wCCdkC,CDelC,eAAgB,CAIlB,kDACE,iBAAkB,CAIpB,yDACE,qCAA8C,CAC9C,2CC1BkC,CD2BlC,kCAA2C,CAC3C,UAAW,CACX,MAAO,CACP,iBAAkB,CAClB,OAAQ,CACR,kCAA2B,CAA3B,0BAA2B,CAC5B\",\"file\":\"tabs.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/tabs.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"../../js-src/js-css/tabs.scss\",\"../../scss/variables/_variables.tabs.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\"],\"names\":[],\"mappings\":\"AAQA,cACE,kBAAqC,CAIvC,6BAME,oCCYoB,CDZpB,0CCYoB,CDRtB,iCACE,eAAgB,CEyBd,2CFlBF,mCACE,qBAAsB,CACtB,yCCZkC,CDalC,0CCbkC,CDclC,wCCdkC,CDelC,eAAgB,CAIlB,kDACE,iBAAkB,CAIpB,yDACE,qCAA8C,CAC9C,2CC1BkC,CD2BlC,kCAA2C,CAC3C,UAAW,CACX,MAAO,CACP,iBAAkB,CAClB,OAAQ,CACR,kCAA2B,CAA3B,0BAA2B,CAC5B\",\"file\":\"tabs.css\"}", "wdn/templates_5.3/js/js-css/tabs.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/tabs.css.map");
    }
}
