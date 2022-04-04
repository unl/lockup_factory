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

/* wdn/templates_5.1/css/legacy.css.map */
class __TwigTemplate_0c4854f66ec8d8129f7424e3f57cfcf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/css/legacy.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/css/legacy.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"legacy.css\",\"../../../node_modules/dcf/scss/legacy/_legacy.attributes.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.grids.scss\",\"../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.main.scss\",\"../scss/legacy/_legacy.nav-local.scss\"],\"names\":[],\"mappings\":\"AAAA,SCME,YAAa,CACd,ACDD,uhBA2BE,oBAAa,AAAb,aAAa,AACb,cAAe,CAChB,AAED,iBACE,eAAgB,CACjB,AAED,mBACE,cAAe,CAChB,AAED,mBACE,cAAe,CAChB,AAED,oBACE,cAAe,CAChB,AAED,eACE,eAAgB,CACjB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AC9CG,2CDmDF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,AC7GC,2CDoHF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,iBAAkB,CACnB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,ACtLC,2CD6LF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,iBAAkB,CACnB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,AC/PC,2CDsQF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,iBAAkB,CACnB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,AEpXH,KACE,aAAc,CACf,ACDD,uBACE,oBAAa,AAAb,YAAa,CACd,AAGD,0BACE,cAAe,CAChB,AFoCG,2CE/BF,uBACE,8BAAmB,AAAnB,6BAAmB,AAAnB,kBAAmB,CACpB,CAAA,AF6BC,2CEtBF,0BACE,oBAA0B,CAC3B,CAAA,AFoBC,2CEbF,0BACE,oBAA0B,CAC3B,CAAA\",\"file\":\"legacy.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/css/legacy.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"legacy.css\",\"../../../node_modules/dcf/scss/legacy/_legacy.attributes.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.grids.scss\",\"../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.main.scss\",\"../scss/legacy/_legacy.nav-local.scss\"],\"names\":[],\"mappings\":\"AAAA,SCME,YAAa,CACd,ACDD,uhBA2BE,oBAAa,AAAb,aAAa,AACb,cAAe,CAChB,AAED,iBACE,eAAgB,CACjB,AAED,mBACE,cAAe,CAChB,AAED,mBACE,cAAe,CAChB,AAED,oBACE,cAAe,CAChB,AAED,eACE,eAAgB,CACjB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AAMD,sCACE,cAAe,CAChB,AC9CG,2CDmDF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,AC7GC,2CDoHF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,iBAAkB,CACnB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,ACtLC,2CD6LF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,iBAAkB,CACnB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,AC/PC,2CDsQF,qBACE,eAAgB,CACjB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,wBACE,cAAe,CAChB,AAED,uBACE,cAAe,CAChB,AAED,uBACE,iBAAkB,CACnB,AAED,mBACE,eAAgB,CACjB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,AAMD,8CACE,cAAe,CAChB,CAAA,AEpXH,KACE,aAAc,CACf,ACDD,uBACE,oBAAa,AAAb,YAAa,CACd,AAGD,0BACE,cAAe,CAChB,AFoCG,2CE/BF,uBACE,8BAAmB,AAAnB,6BAAmB,AAAnB,kBAAmB,CACpB,CAAA,AF6BC,2CEtBF,0BACE,oBAA0B,CAC3B,CAAA,AFoBC,2CEbF,0BACE,oBAA0B,CAC3B,CAAA\",\"file\":\"legacy.css\"}", "wdn/templates_5.1/css/legacy.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/css/legacy.css.map");
    }
}
