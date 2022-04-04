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

/* wdn/templates_5.2/js/compressed/modals.js.map */
class __TwigTemplate_c6c0e2df20ba6d2813e7db78181c3d4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/modals.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/modals.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"Utility\",\"Modal\",\"bodyScrollLock\",\"handleModalVideos\",\"modal\",\"videos\",\"getElementsByTagName\",\"length\",\"document\",\"addEventListener\",\"id\",\"e\",\"Array\",\"prototype\",\"forEach\",\"call\",\"video\",\"hasAttribute\",\"play\",\"pause\",\"load\",\"playBtns\",\"getElementsByClassName\",\"playBtn\",\"style\",\"display\",\"iframes\",\"iframe\",\"allowAttr\",\"getAttribute\",\"includes\",\"contentWindow\",\"postMessage\",\"modals\",\"querySelectorAll\",\"DCFModal\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,cAAe,YAAa,4BAA6B,SAAUC,EAASC,EAAOC,GAU1F,QAASC,GAAkBC,GAEzB,GAAIC,GAASD,EAAME,qBAAqB,QACpCD,IAAUA,EAAOE,OAAS,IAC5BC,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAEhEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GACzCA,EAAMC,aAAa,kBACrBD,EAAME,WAGT,GAEHV,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GAEjEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GAC7CA,EAAMG,QACNH,EAAMI,QAIR,IAAIC,GAAWjB,EAAMkB,uBAAuB,oBACxCD,IAAYA,EAASd,OAAS,GAChCK,MAAMC,UAAUC,QAAQC,KAAKM,EAAU,SAAUE,GACjB,SAA1BA,EAAQC,MAAMC,UAChBF,EAAQC,MAAMC,QAAU,aAI7B,GAIL,IAAIC,GAAUtB,EAAME,qBAAqB,SACrCoB,IAAWA,EAAQnB,OAAS,GAC9BK,MAAMC,UAAUC,QAAQC,KAAKW,EAAS,SAAUC,GAC9C,GAAIC,GAAYD,EAAOE,aAAa,QAChCD,IAAaA,EAAUE,SAAS,aAClCtB,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAChEgB,EAAOI,cAAcC,YAAY,gBAAiB,8BACjD,GAEHxB,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GACjEgB,EAAOI,cAAcC,YAAY,iBAAkB,8BAClD,IAEHxB,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GACjEgB,EAAOI,cAAcC,YAAY,iBAAkB,8BAClD,KAzDX,GAAIC,GAASzB,SAAS0B,iBAAiB,aACxB,IAAIC,UAASF,EAAQ/B,GAC3BkC,aAGTH,EAAOnB,QAAQ,SAAUV,GACvBD,EAAkBC\",\"file\":\"modals.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/modals.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"Utility\",\"Modal\",\"bodyScrollLock\",\"handleModalVideos\",\"modal\",\"videos\",\"getElementsByTagName\",\"length\",\"document\",\"addEventListener\",\"id\",\"e\",\"Array\",\"prototype\",\"forEach\",\"call\",\"video\",\"hasAttribute\",\"play\",\"pause\",\"load\",\"playBtns\",\"getElementsByClassName\",\"playBtn\",\"style\",\"display\",\"iframes\",\"iframe\",\"allowAttr\",\"getAttribute\",\"includes\",\"contentWindow\",\"postMessage\",\"modals\",\"querySelectorAll\",\"DCFModal\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,cAAe,YAAa,4BAA6B,SAAUC,EAASC,EAAOC,GAU1F,QAASC,GAAkBC,GAEzB,GAAIC,GAASD,EAAME,qBAAqB,QACpCD,IAAUA,EAAOE,OAAS,IAC5BC,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAEhEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GACzCA,EAAMC,aAAa,kBACrBD,EAAME,WAGT,GAEHV,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GAEjEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GAC7CA,EAAMG,QACNH,EAAMI,QAIR,IAAIC,GAAWjB,EAAMkB,uBAAuB,oBACxCD,IAAYA,EAASd,OAAS,GAChCK,MAAMC,UAAUC,QAAQC,KAAKM,EAAU,SAAUE,GACjB,SAA1BA,EAAQC,MAAMC,UAChBF,EAAQC,MAAMC,QAAU,aAI7B,GAIL,IAAIC,GAAUtB,EAAME,qBAAqB,SACrCoB,IAAWA,EAAQnB,OAAS,GAC9BK,MAAMC,UAAUC,QAAQC,KAAKW,EAAS,SAAUC,GAC9C,GAAIC,GAAYD,EAAOE,aAAa,QAChCD,IAAaA,EAAUE,SAAS,aAClCtB,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAChEgB,EAAOI,cAAcC,YAAY,gBAAiB,8BACjD,GAEHxB,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GACjEgB,EAAOI,cAAcC,YAAY,iBAAkB,8BAClD,IAEHxB,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GACjEgB,EAAOI,cAAcC,YAAY,iBAAkB,8BAClD,KAzDX,GAAIC,GAASzB,SAAS0B,iBAAiB,aACxB,IAAIC,UAASF,EAAQ/B,GAC3BkC,aAGTH,EAAOnB,QAAQ,SAAUV,GACvBD,EAAkBC\",\"file\":\"modals.js\"}", "wdn/templates_5.2/js/compressed/modals.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/modals.js.map");
    }
}
