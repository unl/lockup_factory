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

/* wdn/templates_5.2/js/js-css/notices.css.map */
class __TwigTemplate_194676cf0dff719065e355e62defc139 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/notices.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/notices.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"../../js-src/js-css/notices.scss\",\"../../scss/variables/_variables.color-palette.scss\",\"../../scss/variables/_variables.sizing.scss\",\"../../scss/variables/_variables.borders.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.padding.scss\",\"../../scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.height-width.scss\"],\"names\":[],\"mappings\":\"AAGA,YACE,yBCwBuB,ADvBvB,6FAA+F,AAC/F,4BAA4B,AAC5B,4BAA4B,AAC5B,uBEgBW,AFfX,kBGQa,AHPb,iDAAmD,AAAnD,yCAAmD,AII3B,cHPA,AIiDD,kBHlCZ,AIZW,WJYX,CFRZ,AAED,mBACE,yBCUwB,ADTxB,+FAAkG,CACnG,AAED,mBACE,yBCwCoB,ADvCpB,6FAAgG,CACjG,AAED,kBACE,yBCkCqB,ADjCrB,wFAA2F,CAC5F,AAED,kCIjB0B,aHPA,CD2BzB,AAED,qBMkCyB,oBJ5CZ,AIaY,oBJhBZ,CFgBZ,AAED,uBACE,cAAc,AACd,QAAS,CACV,AAED,oDOgFyB,qBAA8B,AC9D9B,iBAAqB,ARd5C,wBAAyB,CAC1B,AAED,mBACE,WAAY,CACb,AAED,gDAEE,0HAA8H,AAC9H,cAAc,ASjDQ,WPWX,AFwCX,kBAAkB,AAClB,qBAAqB,AACrB,oBAAoB,AS1BE,UPhBX,AF4CX,SAAU,CACX,AAED,oBACE,YErCW,AFsCX,iBAAiB,AACjB,kBAAkB,AAClB,kBAAW,AACX,kBAAkB,AAClB,aE1CW,AF2CX,gBAAgB,AAChB,WAAK,AACL,WAAY,CACb\",\"file\":\"notices.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/js-css/notices.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"../../js-src/js-css/notices.scss\",\"../../scss/variables/_variables.color-palette.scss\",\"../../scss/variables/_variables.sizing.scss\",\"../../scss/variables/_variables.borders.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.padding.scss\",\"../../scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.height-width.scss\"],\"names\":[],\"mappings\":\"AAGA,YACE,yBCwBuB,ADvBvB,6FAA+F,AAC/F,4BAA4B,AAC5B,4BAA4B,AAC5B,uBEgBW,AFfX,kBGQa,AHPb,iDAAmD,AAAnD,yCAAmD,AII3B,cHPA,AIiDD,kBHlCZ,AIZW,WJYX,CFRZ,AAED,mBACE,yBCUwB,ADTxB,+FAAkG,CACnG,AAED,mBACE,yBCwCoB,ADvCpB,6FAAgG,CACjG,AAED,kBACE,yBCkCqB,ADjCrB,wFAA2F,CAC5F,AAED,kCIjB0B,aHPA,CD2BzB,AAED,qBMkCyB,oBJ5CZ,AIaY,oBJhBZ,CFgBZ,AAED,uBACE,cAAc,AACd,QAAS,CACV,AAED,oDOgFyB,qBAA8B,AC9D9B,iBAAqB,ARd5C,wBAAyB,CAC1B,AAED,mBACE,WAAY,CACb,AAED,gDAEE,0HAA8H,AAC9H,cAAc,ASjDQ,WPWX,AFwCX,kBAAkB,AAClB,qBAAqB,AACrB,oBAAoB,AS1BE,UPhBX,AF4CX,SAAU,CACX,AAED,oBACE,YErCW,AFsCX,iBAAiB,AACjB,kBAAkB,AAClB,kBAAW,AACX,kBAAkB,AAClB,aE1CW,AF2CX,gBAAgB,AAChB,WAAK,AACL,WAAY,CACb\",\"file\":\"notices.css\"}", "wdn/templates_5.2/js/js-css/notices.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/js-css/notices.css.map");
    }
}
