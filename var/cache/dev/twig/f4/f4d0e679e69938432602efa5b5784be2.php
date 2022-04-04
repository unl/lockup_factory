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

/* wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js.map */
class __TwigTemplate_b526beb8035012be976d087ada88a74e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"value\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"window\",\"IntersectionObserver\",\"item\",\"observe\"],\"mappings\":\"AAIA,QAASA,iBAAgBC,EAAUC,GAAe,KAAMD,YAAoBC,IAAgB,KAAM,IAAIC,WAAU,qCAFhH,GAAIC,cAAe,WAAc,QAASC,GAAiBC,EAAQC,GAAS,IAAK,GAAIC,GAAI,EAAGA,EAAID,EAAME,OAAQD,IAAK,CAAE,GAAIE,GAAaH,EAAMC,EAAIE,GAAWC,WAAaD,EAAWC,aAAc,EAAOD,EAAWE,cAAe,EAAU,SAAWF,KAAYA,EAAWG,UAAW,GAAMC,OAAOC,eAAeT,EAAQI,EAAWM,IAAKN,IAAiB,MAAO,UAAUR,EAAae,EAAYC,GAAiJ,MAA9HD,IAAYZ,EAAiBH,EAAYiB,UAAWF,GAAiBC,GAAab,EAAiBH,EAAagB,GAAqBhB,MAI5hBkB,mBAAqB,WACvB,QAASA,GAAmBC,EAAUC,EAAgBC,GACpDvB,gBAAgBwB,KAAMJ,GAEtBI,KAAKH,SAAWA,EAChBG,KAAKF,eAAiBA,EACtBE,KAAKD,oBAAsBA,EAuD7B,MAlDAnB,cAAagB,IACXJ,IAAK,aACLS,MAAO,WACAD,KAAKE,UAGVF,KAAKE,SAASC,gBAGhBX,IAAK,aACLS,MAAO,WACL,GAAIG,GAAQJ,KAGRK,EAAiB,SAAwBC,EAASJ,GACzC,IAIPE,EAAMG,YACRH,EAAMF,SAASC,aAGjBG,EAAQE,QAAQ,SAAUC,GACpBA,EAAMC,mBAAqBR,EAASS,WAR1B,IAQmDF,EAAMC,kBAAoBR,EAASS,WAPvF,GASPP,EAAML,oBAAoBd,QAC5BmB,EAAML,oBAAoBS,QAAQ,SAAUI,GAC1C,MAAOH,GAAM3B,OAAO+B,UAAUC,IAAIF,KAG7BH,EAAMC,kBAAoBR,EAASS,WAdjC,KAeXP,EAAMG,aACNH,EAAMF,SAASa,UAAUN,EAAM3B,WAIhCkB,MAAKH,WAGVG,KAAKO,WAAaP,KAAKH,SAASZ,OAC5B,wBAA0B+B,UAC5BhB,KAAKE,SAAW,GAAIe,sBAAqBZ,EAAgBL,KAAKF,gBAC9DE,KAAKH,SAASW,QAAQ,SAAUU,GAC9Bd,EAAMF,SAASiB,QAAQD,WAMxBtB\",\"file\":\"dcf-scrollAnimation.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"value\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"window\",\"IntersectionObserver\",\"item\",\"observe\"],\"mappings\":\"AAIA,QAASA,iBAAgBC,EAAUC,GAAe,KAAMD,YAAoBC,IAAgB,KAAM,IAAIC,WAAU,qCAFhH,GAAIC,cAAe,WAAc,QAASC,GAAiBC,EAAQC,GAAS,IAAK,GAAIC,GAAI,EAAGA,EAAID,EAAME,OAAQD,IAAK,CAAE,GAAIE,GAAaH,EAAMC,EAAIE,GAAWC,WAAaD,EAAWC,aAAc,EAAOD,EAAWE,cAAe,EAAU,SAAWF,KAAYA,EAAWG,UAAW,GAAMC,OAAOC,eAAeT,EAAQI,EAAWM,IAAKN,IAAiB,MAAO,UAAUR,EAAae,EAAYC,GAAiJ,MAA9HD,IAAYZ,EAAiBH,EAAYiB,UAAWF,GAAiBC,GAAab,EAAiBH,EAAagB,GAAqBhB,MAI5hBkB,mBAAqB,WACvB,QAASA,GAAmBC,EAAUC,EAAgBC,GACpDvB,gBAAgBwB,KAAMJ,GAEtBI,KAAKH,SAAWA,EAChBG,KAAKF,eAAiBA,EACtBE,KAAKD,oBAAsBA,EAuD7B,MAlDAnB,cAAagB,IACXJ,IAAK,aACLS,MAAO,WACAD,KAAKE,UAGVF,KAAKE,SAASC,gBAGhBX,IAAK,aACLS,MAAO,WACL,GAAIG,GAAQJ,KAGRK,EAAiB,SAAwBC,EAASJ,GACzC,IAIPE,EAAMG,YACRH,EAAMF,SAASC,aAGjBG,EAAQE,QAAQ,SAAUC,GACpBA,EAAMC,mBAAqBR,EAASS,WAR1B,IAQmDF,EAAMC,kBAAoBR,EAASS,WAPvF,GASPP,EAAML,oBAAoBd,QAC5BmB,EAAML,oBAAoBS,QAAQ,SAAUI,GAC1C,MAAOH,GAAM3B,OAAO+B,UAAUC,IAAIF,KAG7BH,EAAMC,kBAAoBR,EAASS,WAdjC,KAeXP,EAAMG,aACNH,EAAMF,SAASa,UAAUN,EAAM3B,WAIhCkB,MAAKH,WAGVG,KAAKO,WAAaP,KAAKH,SAASZ,OAC5B,wBAA0B+B,UAC5BhB,KAAKE,SAAW,GAAIe,sBAAqBZ,EAAgBL,KAAKF,gBAC9DE,KAAKH,SAASW,QAAQ,SAAUU,GAC9Bd,EAAMF,SAASiB,QAAQD,WAMxBtB\",\"file\":\"dcf-scrollAnimation.js\"}", "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js.map");
    }
}
