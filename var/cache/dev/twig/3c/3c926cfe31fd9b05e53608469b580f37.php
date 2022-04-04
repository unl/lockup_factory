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

/* wdn/templates_5.0/js/js-css/notices.css.map */
class __TwigTemplate_70116f48bc24cbeb44334a411396308b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/notices.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/notices.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"../../js-src/js-css/notices.scss\",\"../../scss/variables/_variables.colors.scss\",\"../../../../node_modules/dcf/assets/dist/scss/variables/_variables.sizing.scss\",\"../../scss/variables/_variables.borders.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.padding.scss\",\"../../scss/mixins/_mixins.fonts.scss\",\"../../scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.height-width.scss\"],\"names\":[],\"mappings\":\"AAGA,YACE,yBC+CkB,AD9ClB,6FAA+F,AAC/F,4BAA4B,AAC5B,4BAA4B,AAC5B,uBEsBW,AFrBX,kBGHa,AHIb,iDAAmD,AAAnD,yCAAmD,AIO3B,cHRA,AI+CD,kBH5BZ,AIlBW,WJkBX,CFdZ,AAED,mBACE,yBCmCqB,ADlCrB,+FAAkG,CACnG,AAED,mBACE,yBCgCoB,AD/BpB,6FAAgG,CACjG,AAED,kBACE,yBC0BqB,ADzBrB,wFAA2F,CAC5F,AAED,kCId0B,aHRA,CDyBzB,AAED,qBMkCyB,oBJtCZ,AIOY,oBJVZ,CFUZ,AAED,uBACE,cAAc,AACd,QAAS,CACV,AAED,oDOjCE,yDAAgE,ACiHzC,qBAA8B,ACzC9B,iBAAqB,ATlC5C,wBAAyB,CAC1B,AAED,mBACE,WAAY,CACb,AAED,gDAEE,0HAA8H,AAC9H,cAAc,AUlDQ,WRiBX,AFmCX,kBAAkB,AAClB,qBAAqB,AACrB,oBAAoB,AU3BE,URVX,AFuCX,SAAU,CACX,AAED,oBACE,YEjCW,AFkCX,iBAAiB,AACjB,kBAAkB,AAClB,kBAAW,AACX,kBAAkB,AAClB,aEtCW,AFuCX,gBAAgB,AAChB,WAAK,AACL,WAAY,CACb\",\"file\":\"notices.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/notices.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"../../js-src/js-css/notices.scss\",\"../../scss/variables/_variables.colors.scss\",\"../../../../node_modules/dcf/assets/dist/scss/variables/_variables.sizing.scss\",\"../../scss/variables/_variables.borders.scss\",\"../../scss/mixins/_mixins.colors.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.margins.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.padding.scss\",\"../../scss/mixins/_mixins.fonts.scss\",\"../../scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.typography.scss\",\"../../../../node_modules/dcf/assets/dist/scss/mixins/_mixins.height-width.scss\"],\"names\":[],\"mappings\":\"AAGA,YACE,yBC+CkB,AD9ClB,6FAA+F,AAC/F,4BAA4B,AAC5B,4BAA4B,AAC5B,uBEsBW,AFrBX,kBGHa,AHIb,iDAAmD,AAAnD,yCAAmD,AIO3B,cHRA,AI+CD,kBH5BZ,AIlBW,WJkBX,CFdZ,AAED,mBACE,yBCmCqB,ADlCrB,+FAAkG,CACnG,AAED,mBACE,yBCgCoB,AD/BpB,6FAAgG,CACjG,AAED,kBACE,yBC0BqB,ADzBrB,wFAA2F,CAC5F,AAED,kCId0B,aHRA,CDyBzB,AAED,qBMkCyB,oBJtCZ,AIOY,oBJVZ,CFUZ,AAED,uBACE,cAAc,AACd,QAAS,CACV,AAED,oDOjCE,yDAAgE,ACiHzC,qBAA8B,ACzC9B,iBAAqB,ATlC5C,wBAAyB,CAC1B,AAED,mBACE,WAAY,CACb,AAED,gDAEE,0HAA8H,AAC9H,cAAc,AUlDQ,WRiBX,AFmCX,kBAAkB,AAClB,qBAAqB,AACrB,oBAAoB,AU3BE,URVX,AFuCX,SAAU,CACX,AAED,oBACE,YEjCW,AFkCX,iBAAiB,AACjB,kBAAkB,AAClB,kBAAW,AACX,kBAAkB,AAClB,aEtCW,AFuCX,gBAAgB,AAChB,WAAK,AACL,WAAY,CACb\",\"file\":\"notices.css\"}", "wdn/templates_5.0/js/js-css/notices.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/notices.css.map");
    }
}
