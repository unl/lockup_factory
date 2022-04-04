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

/* wdn/templates_5.3/js/js-css/notices.css.map */
class __TwigTemplate_866b8cad9e80196457bffe8b9e490842 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/notices.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/notices.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"../../js-src/js-css/notices.scss\",\"../../scss/variables/_variables.color-palette.scss\",\"../../scss/variables/_variables.sizing.scss\",\"../../scss/variables/_variables.borders.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.padding.scss\",\"../../scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.height-width.scss\"],\"names\":[],\"mappings\":\"AAGA,YACE,wBC2BiB,CD1BjB,4FAA+F,CAC/F,2BAA4B,CAC5B,2BAA4B,CAC5B,sBEgBW,CFfX,iBGmBa,CHlBb,gDAAmD,CAAnD,wCAAmD,CII3B,aHPN,CIuDK,iBHxCZ,CIZW,WJYX,CFNb,mBACE,wBCakB,CDZlB,+FAAkG,CAGpG,mBACE,wBCRuE,CDSvE,6FAAgG,CAGlG,kBACE,wBC8Ce,CD7Cf,wFAA2F,CAG7F,kCIjB0B,aHPN,CD6BpB,qBM0CyB,mBJpDZ,CIiBY,oBJpBZ,CFkBb,uBACE,aAAc,CACd,QAAS,CAGX,oDOgFyB,oBAA8B,CC9D9B,gBAAqB,CRd5C,wBAAyB,CAG3B,mBACE,WAAY,CAGd,gDAEE,yHAA8H,CAC9H,aAAc,CSjDQ,UPWX,CFwCX,iBAAkB,CAClB,oBAAqB,CACrB,mBAAoB,CSxBE,SPlBX,CF4CX,SAAU,CAGZ,oBACE,WEnCW,CFoCX,gBAAiB,CACjB,iBAAkB,CAClB,iBAAW,CACX,iBAAkB,CAClB,YExCW,CFyCX,eAAgB,CAChB,UAAK,CACL,WAAY\",\"file\":\"notices.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/notices.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"../../js-src/js-css/notices.scss\",\"../../scss/variables/_variables.color-palette.scss\",\"../../scss/variables/_variables.sizing.scss\",\"../../scss/variables/_variables.borders.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.padding.scss\",\"../../scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.height-width.scss\"],\"names\":[],\"mappings\":\"AAGA,YACE,wBC2BiB,CD1BjB,4FAA+F,CAC/F,2BAA4B,CAC5B,2BAA4B,CAC5B,sBEgBW,CFfX,iBGmBa,CHlBb,gDAAmD,CAAnD,wCAAmD,CII3B,aHPN,CIuDK,iBHxCZ,CIZW,WJYX,CFNb,mBACE,wBCakB,CDZlB,+FAAkG,CAGpG,mBACE,wBCRuE,CDSvE,6FAAgG,CAGlG,kBACE,wBC8Ce,CD7Cf,wFAA2F,CAG7F,kCIjB0B,aHPN,CD6BpB,qBM0CyB,mBJpDZ,CIiBY,oBJpBZ,CFkBb,uBACE,aAAc,CACd,QAAS,CAGX,oDOgFyB,oBAA8B,CC9D9B,gBAAqB,CRd5C,wBAAyB,CAG3B,mBACE,WAAY,CAGd,gDAEE,yHAA8H,CAC9H,aAAc,CSjDQ,UPWX,CFwCX,iBAAkB,CAClB,oBAAqB,CACrB,mBAAoB,CSxBE,SPlBX,CF4CX,SAAU,CAGZ,oBACE,WEnCW,CFoCX,gBAAiB,CACjB,iBAAkB,CAClB,iBAAW,CACX,iBAAkB,CAClB,YExCW,CFyCX,eAAgB,CAChB,UAAK,CACL,WAAY\",\"file\":\"notices.css\"}", "wdn/templates_5.3/js/js-css/notices.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/notices.css.map");
    }
}
