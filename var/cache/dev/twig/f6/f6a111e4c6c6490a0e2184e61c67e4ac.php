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

/* wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js.map */
class __TwigTemplate_2a1677c14b019d509af3fec9a5c9de36 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"onLoadIntersection\",\"loadObserver\",\"window\",\"IntersectionObserver\",\"item\",\"observe\",\"addEventListener\"],\"mappings\":\"AAAAA,QAAQ,WAAY,SAAUC,GAC5B,YAOA,SAASC,GAAgBC,EAAUC,GAAe,KAAMD,YAAoBC,IAAgB,KAAM,IAAIC,WAAU,qCAEhH,QAASC,GAAkBC,EAAQC,GAAS,IAAK,GAAIC,GAAI,EAAGA,EAAID,EAAME,OAAQD,IAAK,CAAE,GAAIE,GAAaH,EAAMC,EAAIE,GAAWC,WAAaD,EAAWC,aAAc,EAAOD,EAAWE,cAAe,EAAU,SAAWF,KAAYA,EAAWG,UAAW,GAAMC,OAAOC,eAAeT,EAAQI,EAAWM,IAAKN,IAE7S,QAASO,GAAad,EAAae,EAAYC,GAAyN,MAAtMD,IAAYb,EAAkBF,EAAYiB,UAAWF,GAAiBC,GAAad,EAAkBF,EAAagB,GAAcL,OAAOC,eAAeZ,EAAa,aAAeU,UAAU,IAAiBV,EAT/QW,OAAOC,eAAef,EAAU,cAC9BqB,OAAO,IAETrB,EAASsB,uBAAqB,EAQ9B,IAAIA,GAAkC,WACpC,QAASA,GAAmBC,EAAUC,EAAgBC,GACpDxB,EAAgByB,KAAMJ,GAEtBI,KAAKH,SAAWA,EAChBG,KAAKF,eAAiBA,EACtBE,KAAKD,oBAAsBA,EAqF7B,MAjFAR,GAAaK,IACXN,IAAK,aACLK,MAAO,WACAK,KAAKC,UAIVD,KAAKC,SAASC,gBAGhBZ,IAAK,aACLK,MAAO,WACL,GAAIQ,GAAQH,KAGRI,EAAiB,SAAwBC,EAASJ,GACzC,IAIPE,EAAMG,YACRH,EAAMF,SAASC,aAIjBG,EAAQE,QAAQ,SAAUC,GACpBA,EAAMC,mBAAqBR,EAASS,WAT1B,IASmDF,EAAMC,kBAAoBR,EAASS,WARvF,GAUPP,EAAMJ,oBAAoBhB,QAC5BoB,EAAMJ,oBAAoBQ,QAAQ,SAAUI,GAC1C,MAAOH,GAAM5B,OAAOgC,UAAUC,IAAIF,KAG7BH,EAAMC,kBAAoBR,EAASS,WAfjC,KAgBXP,EAAMG,aAENH,EAAMF,SAASa,UAAUN,EAAM5B,YAOjCmC,EAAqB,SAA4BV,GAEnDA,EAAQE,QAAQ,SAAUC,GACpBA,EAAMC,kBAFD,GAIHN,EAAMJ,oBAAoBhB,QAC5BoB,EAAMJ,oBAAoBQ,QAAQ,SAAUI,GAC1C,MAAOH,GAAM5B,OAAOgC,UAAUC,IAAIF,KAKxCR,EAAMa,aAAaF,UAAUN,EAAM5B,UAIlCoB,MAAKH,WAIVG,KAAKM,WAAaN,KAAKH,SAASd,OAE5B,wBAA0BkC,UAC5BjB,KAAKC,SAAW,GAAIiB,sBAAqBd,EAAgBJ,KAAKF,gBAC9DE,KAAKH,SAASU,QAAQ,SAAUY,GAC9BhB,EAAMF,SAASmB,QAAQD,KAEzBF,OAAOI,iBAAiB,OAAQ,WAC9BlB,EAAMa,aAAe,GAAIE,sBAAqBH,GAE9CZ,EAAMN,SAASU,QAAQ,SAAUY,GAC/BhB,EAAMa,aAAaI,QAAQD,aAO9BvB,IAGTtB,GAASsB,mBAAqBA\",\"file\":\"dcf-scrollAnimation.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"onLoadIntersection\",\"loadObserver\",\"window\",\"IntersectionObserver\",\"item\",\"observe\",\"addEventListener\"],\"mappings\":\"AAAAA,QAAQ,WAAY,SAAUC,GAC5B,YAOA,SAASC,GAAgBC,EAAUC,GAAe,KAAMD,YAAoBC,IAAgB,KAAM,IAAIC,WAAU,qCAEhH,QAASC,GAAkBC,EAAQC,GAAS,IAAK,GAAIC,GAAI,EAAGA,EAAID,EAAME,OAAQD,IAAK,CAAE,GAAIE,GAAaH,EAAMC,EAAIE,GAAWC,WAAaD,EAAWC,aAAc,EAAOD,EAAWE,cAAe,EAAU,SAAWF,KAAYA,EAAWG,UAAW,GAAMC,OAAOC,eAAeT,EAAQI,EAAWM,IAAKN,IAE7S,QAASO,GAAad,EAAae,EAAYC,GAAyN,MAAtMD,IAAYb,EAAkBF,EAAYiB,UAAWF,GAAiBC,GAAad,EAAkBF,EAAagB,GAAcL,OAAOC,eAAeZ,EAAa,aAAeU,UAAU,IAAiBV,EAT/QW,OAAOC,eAAef,EAAU,cAC9BqB,OAAO,IAETrB,EAASsB,uBAAqB,EAQ9B,IAAIA,GAAkC,WACpC,QAASA,GAAmBC,EAAUC,EAAgBC,GACpDxB,EAAgByB,KAAMJ,GAEtBI,KAAKH,SAAWA,EAChBG,KAAKF,eAAiBA,EACtBE,KAAKD,oBAAsBA,EAqF7B,MAjFAR,GAAaK,IACXN,IAAK,aACLK,MAAO,WACAK,KAAKC,UAIVD,KAAKC,SAASC,gBAGhBZ,IAAK,aACLK,MAAO,WACL,GAAIQ,GAAQH,KAGRI,EAAiB,SAAwBC,EAASJ,GACzC,IAIPE,EAAMG,YACRH,EAAMF,SAASC,aAIjBG,EAAQE,QAAQ,SAAUC,GACpBA,EAAMC,mBAAqBR,EAASS,WAT1B,IASmDF,EAAMC,kBAAoBR,EAASS,WARvF,GAUPP,EAAMJ,oBAAoBhB,QAC5BoB,EAAMJ,oBAAoBQ,QAAQ,SAAUI,GAC1C,MAAOH,GAAM5B,OAAOgC,UAAUC,IAAIF,KAG7BH,EAAMC,kBAAoBR,EAASS,WAfjC,KAgBXP,EAAMG,aAENH,EAAMF,SAASa,UAAUN,EAAM5B,YAOjCmC,EAAqB,SAA4BV,GAEnDA,EAAQE,QAAQ,SAAUC,GACpBA,EAAMC,kBAFD,GAIHN,EAAMJ,oBAAoBhB,QAC5BoB,EAAMJ,oBAAoBQ,QAAQ,SAAUI,GAC1C,MAAOH,GAAM5B,OAAOgC,UAAUC,IAAIF,KAKxCR,EAAMa,aAAaF,UAAUN,EAAM5B,UAIlCoB,MAAKH,WAIVG,KAAKM,WAAaN,KAAKH,SAASd,OAE5B,wBAA0BkC,UAC5BjB,KAAKC,SAAW,GAAIiB,sBAAqBd,EAAgBJ,KAAKF,gBAC9DE,KAAKH,SAASU,QAAQ,SAAUY,GAC9BhB,EAAMF,SAASmB,QAAQD,KAEzBF,OAAOI,iBAAiB,OAAQ,WAC9BlB,EAAMa,aAAe,GAAIE,sBAAqBH,GAE9CZ,EAAMN,SAASU,QAAQ,SAAUY,GAC/BhB,EAAMa,aAAaI,QAAQD,aAO9BvB,IAGTtB,GAASsB,mBAAqBA\",\"file\":\"dcf-scrollAnimation.js\"}", "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js.map");
    }
}
