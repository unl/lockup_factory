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

/* wdn/templates_5.3/js/compressed/modals.js.map */
class __TwigTemplate_1b697db92baac7ac8aa97e9281580558 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/modals.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/modals.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"modalModule\",\"bodyScrollLock\",\"handleModalVideos\",\"modal\",\"videos\",\"getElementsByTagName\",\"length\",\"document\",\"addEventListener\",\"id\",\"e\",\"Array\",\"prototype\",\"forEach\",\"call\",\"video\",\"hasAttribute\",\"play\",\"pause\",\"load\",\"playBtns\",\"getElementsByClassName\",\"playBtn\",\"style\",\"display\",\"iframes\",\"iframe\",\"source\",\"getAttribute\",\"allowAttr\",\"includes\",\"url\",\"URL\",\"searchParams\",\"has\",\"delete\",\"src\",\"toString\",\"currentSource\",\"contentWindow\",\"postMessage\",\"_url\",\"set\",\"newSource\",\"_url2\",\"modals\",\"querySelectorAll\",\"DCFModal\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,YAAa,4BAA6B,SAAUC,EAAaC,GASxE,QAASC,GAAkBC,GAEzB,GAAIC,GAASD,EAAME,qBAAqB,QAEpCD,IAAUA,EAAOE,OAAS,IAC5BC,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAEhEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GACzCA,EAAMC,aAAa,kBACrBD,EAAME,WAGT,GACHV,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GAEjEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GAC7CA,EAAMG,QACNH,EAAMI,QAGR,IAAIC,GAAWjB,EAAMkB,uBAAuB,oBAExCD,IAAYA,EAASd,OAAS,GAChCK,MAAMC,UAAUC,QAAQC,KAAKM,EAAU,SAAUE,GACjB,SAA1BA,EAAQC,MAAMC,UAChBF,EAAQC,MAAMC,QAAU,aAI7B,GAIL,IAAIC,GAAUtB,EAAME,qBAAqB,SAErCoB,IAAWA,EAAQnB,OAAS,GAC9BK,MAAMC,UAAUC,QAAQC,KAAKW,EAAS,SAAUC,GAC9C,GAAIC,GAASD,EAAOE,aAAa,OAC7BC,EAAYH,EAAOE,aAAa,QAEpC,IAAIC,GAAaA,EAAUC,SAAS,YAAa,CAC/C,IAAKH,EAAOG,SAAS,oBAEnB,IACE,GAAIC,GAAM,GAAIC,KAAIN,EAAOE,aAAa,OAElCG,GAAIE,aAAaC,IAAI,cACvBH,EAAIE,aAAaE,OAAO,YACxBT,EAAOU,IAAML,EAAIM,YAEnB,MAAO3B,IAIXH,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAChE,GAAI4B,GAAgBZ,EAAOE,aAAa,MAExC,IAAIU,EAAcR,SAAS,oBACzBJ,EAAOa,cAAcC,YAAY,gBAAiB,gCAElD,KACE,GAAIC,GAAO,GAAIT,KAAIM,EAEnBG,GAAKR,aAAaS,IAAI,WAAY,IAElC,IAAIC,GAAYF,EAAKJ,UAEjBC,IAAiBK,IACnBjB,EAAOU,IAAMO,GAEf,MAAOjC,GACPgB,EAAOU,IAAMT,KAGhB,GACHpB,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GACjE,GAAI4B,GAAgBZ,EAAOE,aAAa,MAExC,IAAIU,EAAcR,SAAS,oBACzBJ,EAAOa,cAAcC,YAAY,iBAAkB,gCAEnD,KACE,GAAII,GAAQ,GAAIZ,KAAIM,EAEhBM,GAAMX,aAAaC,IAAI,cACzBU,EAAMX,aAAaE,OAAO,YAE1BG,EAAgBM,EAAMP,YAGxBX,EAAOU,IAAME,EACb,MAAO5B,GACPgB,EAAOU,IAAMT,KAGhB,OAGHpB,UAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GAC7DiB,EAAOG,SAAS,oBAClBJ,EAAOa,cAAcC,YAAY,iBAAkB,4BAEnDd,EAAOU,IAAMT,IAEd,KAhHX,GAAIkB,GAAStC,SAASuC,iBAAiB,aACxB,IAAI9C,GAAY+C,SAASF,EAAQ5C,GACvC+C,aAETH,EAAOhC,QAAQ,SAAUV,GACvBD,EAAkBC\",\"file\":\"modals.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/modals.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"require\",\"modalModule\",\"bodyScrollLock\",\"handleModalVideos\",\"modal\",\"videos\",\"getElementsByTagName\",\"length\",\"document\",\"addEventListener\",\"id\",\"e\",\"Array\",\"prototype\",\"forEach\",\"call\",\"video\",\"hasAttribute\",\"play\",\"pause\",\"load\",\"playBtns\",\"getElementsByClassName\",\"playBtn\",\"style\",\"display\",\"iframes\",\"iframe\",\"source\",\"getAttribute\",\"allowAttr\",\"includes\",\"url\",\"URL\",\"searchParams\",\"has\",\"delete\",\"src\",\"toString\",\"currentSource\",\"contentWindow\",\"postMessage\",\"_url\",\"set\",\"newSource\",\"_url2\",\"modals\",\"querySelectorAll\",\"DCFModal\",\"initialize\"],\"mappings\":\"AAEAA,SAAS,YAAa,4BAA6B,SAAUC,EAAaC,GASxE,QAASC,GAAkBC,GAEzB,GAAIC,GAASD,EAAME,qBAAqB,QAEpCD,IAAUA,EAAOE,OAAS,IAC5BC,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAEhEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GACzCA,EAAMC,aAAa,kBACrBD,EAAME,WAGT,GACHV,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GAEjEC,MAAMC,UAAUC,QAAQC,KAAKV,EAAQ,SAAUW,GAC7CA,EAAMG,QACNH,EAAMI,QAGR,IAAIC,GAAWjB,EAAMkB,uBAAuB,oBAExCD,IAAYA,EAASd,OAAS,GAChCK,MAAMC,UAAUC,QAAQC,KAAKM,EAAU,SAAUE,GACjB,SAA1BA,EAAQC,MAAMC,UAChBF,EAAQC,MAAMC,QAAU,aAI7B,GAIL,IAAIC,GAAUtB,EAAME,qBAAqB,SAErCoB,IAAWA,EAAQnB,OAAS,GAC9BK,MAAMC,UAAUC,QAAQC,KAAKW,EAAS,SAAUC,GAC9C,GAAIC,GAASD,EAAOE,aAAa,OAC7BC,EAAYH,EAAOE,aAAa,QAEpC,IAAIC,GAAaA,EAAUC,SAAS,YAAa,CAC/C,IAAKH,EAAOG,SAAS,oBAEnB,IACE,GAAIC,GAAM,GAAIC,KAAIN,EAAOE,aAAa,OAElCG,GAAIE,aAAaC,IAAI,cACvBH,EAAIE,aAAaE,OAAO,YACxBT,EAAOU,IAAML,EAAIM,YAEnB,MAAO3B,IAIXH,SAASC,iBAAiB,kBAAoBL,EAAMM,GAAI,SAAUC,GAChE,GAAI4B,GAAgBZ,EAAOE,aAAa,MAExC,IAAIU,EAAcR,SAAS,oBACzBJ,EAAOa,cAAcC,YAAY,gBAAiB,gCAElD,KACE,GAAIC,GAAO,GAAIT,KAAIM,EAEnBG,GAAKR,aAAaS,IAAI,WAAY,IAElC,IAAIC,GAAYF,EAAKJ,UAEjBC,IAAiBK,IACnBjB,EAAOU,IAAMO,GAEf,MAAOjC,GACPgB,EAAOU,IAAMT,KAGhB,GACHpB,SAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GACjE,GAAI4B,GAAgBZ,EAAOE,aAAa,MAExC,IAAIU,EAAcR,SAAS,oBACzBJ,EAAOa,cAAcC,YAAY,iBAAkB,gCAEnD,KACE,GAAII,GAAQ,GAAIZ,KAAIM,EAEhBM,GAAMX,aAAaC,IAAI,cACzBU,EAAMX,aAAaE,OAAO,YAE1BG,EAAgBM,EAAMP,YAGxBX,EAAOU,IAAME,EACb,MAAO5B,GACPgB,EAAOU,IAAMT,KAGhB,OAGHpB,UAASC,iBAAiB,mBAAqBL,EAAMM,GAAI,SAAUC,GAC7DiB,EAAOG,SAAS,oBAClBJ,EAAOa,cAAcC,YAAY,iBAAkB,4BAEnDd,EAAOU,IAAMT,IAEd,KAhHX,GAAIkB,GAAStC,SAASuC,iBAAiB,aACxB,IAAI9C,GAAY+C,SAASF,EAAQ5C,GACvC+C,aAETH,EAAOhC,QAAQ,SAAUV,GACvBD,EAAkBC\",\"file\":\"modals.js\"}", "wdn/templates_5.3/js/compressed/modals.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/modals.js.map");
    }
}
