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

/* wdn/templates_5.3/css/legacy.css.map */
class __TwigTemplate_cb53a33d2ce2bf15982f1e1a0b008f96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/css/legacy.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/css/legacy.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"legacy.css\",\"../../../node_modules/dcf/scss/legacy/_legacy.attributes.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.grids.scss\",\"../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.main.scss\",\"../scss/legacy/_legacy.nav-local.scss\"],\"names\":[],\"mappings\":\"AAAA,SCME,YAAa,CCAf,uhBA2BE,mBAAa,CAAb,YAAa,CACb,cAAe,CAGjB,iBACE,eAAgB,CAGlB,mBACE,cAAe,CAGjB,mBACE,cAAe,CAGjB,oBACE,cAAe,CAGjB,eACE,eAAgB,CAOlB,sCACE,cAAe,CAOjB,sCACE,cAAe,CAOjB,sCACE,cAAe,CAOjB,sCACE,cAAe,CAOjB,sCACE,cAAe,CC7Cb,2CDmDF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CC7GC,2CDoHF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,uBACE,iBAAkB,CAGpB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CCtLC,2CD6LF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,uBACE,iBAAkB,CAGpB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CC/PC,2CDsQF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,uBACE,iBAAkB,CAGpB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CEpXH,KACE,aAAc,CCAhB,uBACE,mBAAa,CAAb,YAAa,CAIf,0BACE,cAAe,CFqCb,2CE/BF,uBACE,6BAAmB,CAAnB,4BAAmB,CAAnB,kBAAmB,CACpB,CF6BC,2CEtBF,0BACE,oBAA0B,CAC3B,CFoBC,2CEbF,0BACE,oBAA0B,CAC3B\",\"file\":\"legacy.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/css/legacy.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"legacy.css\",\"../../../node_modules/dcf/scss/legacy/_legacy.attributes.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.grids.scss\",\"../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\",\"../../../node_modules/dcf/scss/legacy/_legacy.main.scss\",\"../scss/legacy/_legacy.nav-local.scss\"],\"names\":[],\"mappings\":\"AAAA,SCME,YAAa,CCAf,uhBA2BE,mBAAa,CAAb,YAAa,CACb,cAAe,CAGjB,iBACE,eAAgB,CAGlB,mBACE,cAAe,CAGjB,mBACE,cAAe,CAGjB,oBACE,cAAe,CAGjB,eACE,eAAgB,CAOlB,sCACE,cAAe,CAOjB,sCACE,cAAe,CAOjB,sCACE,cAAe,CAOjB,sCACE,cAAe,CAOjB,sCACE,cAAe,CC7Cb,2CDmDF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CC7GC,2CDoHF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,uBACE,iBAAkB,CAGpB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CCtLC,2CD6LF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,uBACE,iBAAkB,CAGpB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CC/PC,2CDsQF,qBACE,eAAgB,CAGlB,uBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,wBACE,cAAe,CAGjB,uBACE,cAAe,CAGjB,uBACE,iBAAkB,CAGpB,mBACE,eAAgB,CAOlB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAOjB,8CACE,cAAe,CAChB,CEpXH,KACE,aAAc,CCAhB,uBACE,mBAAa,CAAb,YAAa,CAIf,0BACE,cAAe,CFqCb,2CE/BF,uBACE,6BAAmB,CAAnB,4BAAmB,CAAnB,kBAAmB,CACpB,CF6BC,2CEtBF,0BACE,oBAA0B,CAC3B,CFoBC,2CEbF,0BACE,oBAA0B,CAC3B\",\"file\":\"legacy.css\"}", "wdn/templates_5.3/css/legacy.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/css/legacy.css.map");
    }
}
