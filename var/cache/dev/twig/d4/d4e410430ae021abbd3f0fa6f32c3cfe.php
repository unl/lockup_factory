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

/* wdn/templates_5.0/js/js-css/unlalert.css.map */
class __TwigTemplate_23be844c747a96a34dde881b2e97ea05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/unlalert.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/unlalert.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"../../js-src/js-css/unlalert.scss\",\"../../scss/variables/_variables.colors.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.padding.scss\",\"../../../../node_modules/dcf/assets/dist/scss/variables/_variables.sizing.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.media-queries.scss\"],\"names\":[],\"mappings\":\"AAGA,UAEE,yBCgDqB,AD/CrB,mBAAmB,AACnB,4BAA6B,AAC7B,kBAAoB,CACrB,AAGD,YEK0B,aDRA,CDKzB,AAGD,eGqCyB,sBCxBZ,ADJY,kBCIZ,CJVZ,AAGD,iBACE,0BAA2B,CAC5B,AAGD,8CAEE,oDAAqD,AAArD,2CAAqD,CACtD,AAGD,gCACE,cAAc,AACd,kBAAkB,AAClB,UAAU,AACV,UAAU,AACV,SAAU,CACX,AAGD,kBACE,YAAa,CACd,AAGD,iCACE,aAAc,CACf,AAGD,kBACE,0BAA0B,CAC3B,AAGD,eKAyB,oBD5BZ,CJ8BZ,AAGD,mBKNyB,oBD5BZ,CJoCZ,AAGwB,iDAEvB,iCACE,iBAAa,AAAb,YAAa,CACd,AAGD,kCAEE,eAAgB,CACjB,AM3BC,2CNgCA,eACE,yBAA8B,AAA9B,6BAA8B,CAC/B,CAAA,AMlCD,2CNwCA,iCACE,yBAA8B,AAA9B,6BAA8B,CAC/B,AAGD,eACE,uBAA4B,AAA5B,2BAA4B,CAC7B,CAAA,CAAA\",\"file\":\"unlalert.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/unlalert.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"../../js-src/js-css/unlalert.scss\",\"../../scss/variables/_variables.colors.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.padding.scss\",\"../../../../node_modules/dcf/assets/dist/scss/variables/_variables.sizing.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.media-queries.scss\"],\"names\":[],\"mappings\":\"AAGA,UAEE,yBCgDqB,AD/CrB,mBAAmB,AACnB,4BAA6B,AAC7B,kBAAoB,CACrB,AAGD,YEK0B,aDRA,CDKzB,AAGD,eGqCyB,sBCxBZ,ADJY,kBCIZ,CJVZ,AAGD,iBACE,0BAA2B,CAC5B,AAGD,8CAEE,oDAAqD,AAArD,2CAAqD,CACtD,AAGD,gCACE,cAAc,AACd,kBAAkB,AAClB,UAAU,AACV,UAAU,AACV,SAAU,CACX,AAGD,kBACE,YAAa,CACd,AAGD,iCACE,aAAc,CACf,AAGD,kBACE,0BAA0B,CAC3B,AAGD,eKAyB,oBD5BZ,CJ8BZ,AAGD,mBKNyB,oBD5BZ,CJoCZ,AAGwB,iDAEvB,iCACE,iBAAa,AAAb,YAAa,CACd,AAGD,kCAEE,eAAgB,CACjB,AM3BC,2CNgCA,eACE,yBAA8B,AAA9B,6BAA8B,CAC/B,CAAA,AMlCD,2CNwCA,iCACE,yBAA8B,AAA9B,6BAA8B,CAC/B,AAGD,eACE,uBAA4B,AAA5B,2BAA4B,CAC7B,CAAA,CAAA\",\"file\":\"unlalert.css\"}", "wdn/templates_5.0/js/js-css/unlalert.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/unlalert.css.map");
    }
}
