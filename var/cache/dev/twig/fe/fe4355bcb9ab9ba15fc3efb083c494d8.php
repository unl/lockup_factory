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

/* wdn/templates_5.1/js/compressed/dcf-lazyLoad.js.map */
class __TwigTemplate_841d946727a1d3c7735dde110189e2ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"DCFLazyLoad\",\"itemList\",\"observerConfig\",\"classNames\",\"this\",\"value\",\"docElement\",\"document\",\"documentElement\",\"docBody\",\"getElementsByTagName\",\"window\",\"innerWidth\",\"clientWidth\",\"image\",\"src\",\"dataset\",\"srcset\",\"sizes\",\"parentNode\",\"nodeName\",\"applyPicture\",\"pxTOvw\",\"parentElement\",\"classList\",\"add\",\"remove\",\"removeAttribute\",\"forEach\",\"className\",\"arguments\",\"undefined\",\"Promise\",\"resolve\",\"reject\",\"Image\",\"onload\",\"onerror\",\"catch\",\"fetchImagePromise\",\"fetchImage\",\"error\",\"picture\",\"_this\",\"pictureSources\",\"Array\",\"from\",\"pictureSource\",\"items\",\"_this2\",\"preload\",\"item\",\"preloadImage\",\"applyImage\",\"observer\",\"disconnect\",\"_this3\",\"onIntersection\",\"entries\",\"itemsCount\",\"entry\",\"intersectionRatio\",\"thresholds\",\"unobserve\",\"HTMLImageElement\",\"loadItemsImmediately\",\"IntersectionObserver\",\"contains\",\"observe\"],\"mappings\":\"AAIA,QAASA,iBAAgBC,EAAUC,GAAe,KAAMD,YAAoBC,IAAgB,KAAM,IAAIC,WAAU,qCAFhH,GAAIC,cAAe,WAAc,QAASC,GAAiBC,EAAQC,GAAS,IAAK,GAAIC,GAAI,EAAGA,EAAID,EAAME,OAAQD,IAAK,CAAE,GAAIE,GAAaH,EAAMC,EAAIE,GAAWC,WAAaD,EAAWC,aAAc,EAAOD,EAAWE,cAAe,EAAU,SAAWF,KAAYA,EAAWG,UAAW,GAAMC,OAAOC,eAAeT,EAAQI,EAAWM,IAAKN,IAAiB,MAAO,UAAUR,EAAae,EAAYC,GAAiJ,MAA9HD,IAAYZ,EAAiBH,EAAYiB,UAAWF,GAAiBC,GAAab,EAAiBH,EAAagB,GAAqBhB,MAI5hBkB,YAAc,WAChB,QAASA,GAAYC,EAAUC,EAAgBC,GAC7CvB,gBAAgBwB,KAAMJ,GAEtBI,KAAKH,SAAWA,EAChBG,KAAKF,eAAiBA,EACtBE,KAAKD,WAAaA,EAoQpB,MAjQAnB,cAAagB,IACXJ,IAAK,SACLS,MAAO,SAAgBA,GACrB,GAEIC,GAAaC,SAASC,gBACtBC,EAAUF,SAASG,qBAAqB,QAH5B,EAOhB,OANiB,KAKSL,GAFRM,OAAOC,YAAcN,EAAWO,aAAeJ,EAAQI,aAGzD,QASlBjB,IAAK,aACLS,MAAO,SAAoBS,GACzB,GAAIC,GAAMD,EAAME,QAAQD,IACpBE,EAASH,EAAME,QAAQC,QAAU,KACjCC,EAAQ,IAEPH,KAK6B,YAA9BD,EAAMK,WAAWC,UACnBhB,KAAKiB,aAAaP,EAAMK,YACxBD,EAAQJ,EAAME,QAAQE,OAASd,KAAKkB,OAAOR,EAAMK,WAAWI,cAAcV,cAE1EK,EAAQJ,EAAME,QAAQE,OAASd,KAAKkB,OAAOR,EAAMS,cAAcV,aAIjEC,EAAMU,UAAUC,IAAI,mBACpBX,EAAMU,UAAUE,OAAO,iBAEnBX,IACFD,EAAMC,IAAMA,EACZD,EAAMa,gBAAgB,aAEpBV,IACFH,EAAMG,OAASA,EACfH,EAAMa,gBAAgB,gBAEpBT,IACFJ,EAAMI,MAAQA,EACdJ,EAAMa,gBAAgB,eAEpBvB,KAAKD,WAAWd,QAClBe,KAAKD,WAAWyB,QAAQ,SAAUC,GAChC,MAAOf,GAAMU,UAAUC,IAAII,SAcjCjC,IAAK,aACLS,MAAO,SAAoBU,GACzB,GAAIE,GAASa,UAAUzC,OAAS,OAAsB0C,KAAjBD,UAAU,GAAmBA,UAAU,GAAK,KAC7EZ,EAAQY,UAAUzC,OAAS,OAAsB0C,KAAjBD,UAAU,GAAmBA,UAAU,GAAK,IAEhF,OAAO,IAAIE,SAAQ,SAAUC,EAASC,GACpC,GAAIpB,GAAQ,GAAIqB,MACZpB,KACFD,EAAMC,IAAMA,GAEVE,IACFH,EAAMG,OAASA,GAEbC,IACFJ,EAAMI,MAAQA,GAGhBJ,EAAMsB,OAASH,EACfnB,EAAMuB,QAAUH,IACfI,MAAM,iBAaX1C,IAAK,eACLS,MAAO,SAAsBS,GAC3B,GAAIC,GAAMD,EAAME,QAAQD,IACpBE,EAASH,EAAME,QAAQC,OACvBC,EAAQJ,EAAME,QAAQE,OAAS,KAE/BqB,EAAoB,IACxB,IAAIxB,EACF,IACEwB,EAAoBnC,KAAKoC,WAAWzB,EAAKE,EAAQC,GACjD,MAAOuB,IAIX,MAAOF,MAST3C,IAAK,eACLS,MAAO,SAAsBqC,GAC3B,GAAIC,GAAQvC,KAGRwC,EAAiBF,EAAQhC,qBAAqB,SAClDmC,OAAMC,KAAKF,GAAgBhB,QAAQ,SAAUmB,GAC3C,GAAI9B,GAAS8B,EAAc/B,QAAQC,QAAU,KACzCC,EAAQ6B,EAAc/B,QAAQE,OAASyB,EAAMrB,OAAOoB,EAAQnB,cAAcV,YAEzEI,KAKL8B,EAAc9B,OAASA,EACvB8B,EAAcpB,gBAAgB,eAE1BT,IACF6B,EAAc7B,MAAQA,EACtB6B,EAAcpB,gBAAgB,qBAYpC/B,IAAK,uBACLS,MAAO,SAA8B2C,GACnC,GAAIC,GAAS7C,KAET8C,IAAUpB,UAAUzC,OAAS,OAAsB0C,KAAjBD,UAAU,KAAmBA,UAAU,EAE7EkB,GAAMpB,QAAQ,SAAUuB,GACtB,OAAQA,EAAK/B,UACX,IAAK,OACa,IAAZ8B,GACFD,EAAOG,aAAaD,GAEtBF,EAAOI,WAAWF,EAClB,MAEF,SAEE,aAURvD,IAAK,aACLS,MAAO,WACAD,KAAKkD,UAIVlD,KAAKkD,SAASC,gBAGhB3D,IAAK,aACLS,MAAO,WACL,GAAImD,GAASpD,KAGTqD,EAAiB,SAAwBC,EAASJ,GACzC,IAIPE,EAAOG,YACTH,EAAOF,SAASC,aAIlBG,EAAQ9B,QAAQ,SAAUgC,GACxB,OAAQA,EAAM1E,OAAOkC,UACnB,IAAK,MACCwC,EAAMC,kBAAoBP,EAASQ,WAX7B,IAWsDF,EAAMC,kBAAoBP,EAASQ,WAV1F,GAWPN,EAAOJ,aAAaQ,EAAM1E,QACjB0E,EAAMC,kBAAoBP,EAASQ,WAZrC,KAaPN,EAAOG,aACPH,EAAOH,WAAWO,EAAM1E,QACxBsE,EAAOF,SAASS,UAAUH,EAAM1E,QAElC,MAEF,SAEE,UAKHkB,MAAKH,WAIVG,KAAKuD,WAAavD,KAAKH,SAASZ,OAE5B,WAAa2E,kBAAiBjE,UAEhCK,KAAK6D,qBAAqB7D,KAAKH,UAAU,GAInC,wBAA0BU,SAI9BP,KAAKkD,SAAW,GAAIY,sBAAqBT,EAAgBrD,KAAKF,gBAE9DE,KAAKH,SAAS2B,QAAQ,SAAUuB,GAC1BA,EAAK3B,UAAU2C,SAAS,oBAK5BX,EAAOF,SAASc,QAAQjB,MAX1B/C,KAAK6D,qBAAqB7D,KAAKH,eAkBhCD\",\"file\":\"dcf-lazyLoad.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"DCFLazyLoad\",\"itemList\",\"observerConfig\",\"classNames\",\"this\",\"value\",\"docElement\",\"document\",\"documentElement\",\"docBody\",\"getElementsByTagName\",\"window\",\"innerWidth\",\"clientWidth\",\"image\",\"src\",\"dataset\",\"srcset\",\"sizes\",\"parentNode\",\"nodeName\",\"applyPicture\",\"pxTOvw\",\"parentElement\",\"classList\",\"add\",\"remove\",\"removeAttribute\",\"forEach\",\"className\",\"arguments\",\"undefined\",\"Promise\",\"resolve\",\"reject\",\"Image\",\"onload\",\"onerror\",\"catch\",\"fetchImagePromise\",\"fetchImage\",\"error\",\"picture\",\"_this\",\"pictureSources\",\"Array\",\"from\",\"pictureSource\",\"items\",\"_this2\",\"preload\",\"item\",\"preloadImage\",\"applyImage\",\"observer\",\"disconnect\",\"_this3\",\"onIntersection\",\"entries\",\"itemsCount\",\"entry\",\"intersectionRatio\",\"thresholds\",\"unobserve\",\"HTMLImageElement\",\"loadItemsImmediately\",\"IntersectionObserver\",\"contains\",\"observe\"],\"mappings\":\"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\",\"file\":\"dcf-lazyLoad.js\"}", "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/dcf-lazyLoad.js.map");
    }
}
