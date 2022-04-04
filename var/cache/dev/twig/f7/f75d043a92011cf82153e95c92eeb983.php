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

/* wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js.map */
class __TwigTemplate_be8b08b749d752848401e8988b2c9784 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_toConsumableArray\",\"arr\",\"_arrayWithoutHoles\",\"_iterableToArray\",\"_unsupportedIterableToArray\",\"_nonIterableSpread\",\"TypeError\",\"o\",\"minLen\",\"_arrayLikeToArray\",\"n\",\"Object\",\"prototype\",\"toString\",\"call\",\"slice\",\"constructor\",\"name\",\"Array\",\"from\",\"test\",\"iter\",\"Symbol\",\"iterator\",\"isArray\",\"len\",\"length\",\"i\",\"arr2\",\"_classCallCheck\",\"instance\",\"Constructor\",\"_defineProperties\",\"target\",\"props\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"value\",\"DCFBgVideoToggleTheme\",\"DCFBgVideoToggle\",\"this\",\"toggleBtnClassList\",\"togglePlayBtnInnerHTML\",\"togglePauseBtnInnerHTML\",\"themeVariableName\",\"theme\",\"bgVideos\",\"_this\",\"toggleEvent\",\"Event\",\"bgVideoContainers\",\"document\",\"getElementsByClassName\",\"forEach\",\"container\",\"toggleBtn\",\"createElement\",\"_toggleBtn\$classList\",\"classList\",\"add\",\"apply\",\"isPlaying\",\"setAttribute\",\"innerHTML\",\"addEventListener\",\"pauseAll\",\"window\",\"localStorage\",\"setItem\",\"pausedStatus\",\"playAll\",\"playStatus\",\"dispatchEvent\",\"append\",\"videos\",\"getElementsByTagName\",\"video\",\"isBgVideo\",\"push\",\"getItem\",\"play\",\"pause\",\"hasAttribute\"],\"mappings\":\"AAAAA,QAAQ,WAAY,SAAUC,GAC5B,YAOA,SAASC,GAAmBC,GAAO,MAAOC,GAAmBD,IAAQE,EAAiBF,IAAQG,EAA4BH,IAAQI,IAElI,QAASA,KAAuB,KAAM,IAAIC,WAAU,wIAEpD,QAASF,GAA4BG,EAAGC,GAAU,GAAKD,EAAL,CAAgB,GAAiB,gBAANA,GAAgB,MAAOE,GAAkBF,EAAGC,EAAS,IAAIE,GAAIC,OAAOC,UAAUC,SAASC,KAAKP,GAAGQ,MAAM,GAAI,EAAiE,OAAnD,WAANL,GAAkBH,EAAES,cAAaN,EAAIH,EAAES,YAAYC,MAAgB,QAANP,GAAqB,QAANA,EAAoBQ,MAAMC,KAAKZ,GAAc,cAANG,GAAqB,2CAA2CU,KAAKV,GAAWD,EAAkBF,EAAGC,OAAzG,IAE7S,QAASL,GAAiBkB,GAAQ,GAAsB,mBAAXC,SAAmD,MAAzBD,EAAKC,OAAOC,WAA2C,MAAtBF,EAAK,cAAuB,MAAOH,OAAMC,KAAKE,GAEtJ,QAASnB,GAAmBD,GAAO,GAAIiB,MAAMM,QAAQvB,GAAM,MAAOQ,GAAkBR,GAEpF,QAASQ,GAAkBR,EAAKwB,IAAkB,MAAPA,GAAeA,EAAMxB,EAAIyB,UAAQD,EAAMxB,EAAIyB,OAAQ,KAAK,GAAIC,GAAI,EAAGC,EAAO,GAAIV,OAAMO,GAAME,EAAIF,EAAKE,IAAOC,EAAKD,GAAK1B,EAAI0B,EAAM,OAAOC,GAEhL,QAASC,GAAgBC,EAAUC,GAAe,KAAMD,YAAoBC,IAAgB,KAAM,IAAIzB,WAAU,qCAEhH,QAAS0B,GAAkBC,EAAQC,GAAS,IAAK,GAAIP,GAAI,EAAGA,EAAIO,EAAMR,OAAQC,IAAK,CAAE,GAAIQ,GAAaD,EAAMP,EAAIQ,GAAWC,WAAaD,EAAWC,aAAc,EAAOD,EAAWE,cAAe,EAAU,SAAWF,KAAYA,EAAWG,UAAW,GAAM3B,OAAO4B,eAAeN,EAAQE,EAAWK,IAAKL,IAE7S,QAASM,GAAaV,EAAaW,EAAYC,GAAyN,MAAtMD,IAAYV,EAAkBD,EAAYnB,UAAW8B,GAAiBC,GAAaX,EAAkBD,EAAaY,GAAchC,OAAO4B,eAAeR,EAAa,aAAeO,UAAU,IAAiBP,EArB/QpB,OAAO4B,eAAexC,EAAU,cAC9B6C,OAAO,IAET7C,EAAS8C,sBAAwB9C,EAAS+C,qBAAmB,EAoB7D,IAAID,GAAqC,WACvC,QAASA,KACPhB,EAAgBkB,KAAMF,GAKtBE,KAAKC,oBAAsB,0BAA2B,UAAW,kBAAmB,UAAW,eAAgB,iBAAkB,gBAAiB,aAAc,gBAAiB,gBAAiB,WAAY,WAAY,UAAW,UAAW,UAAW,cAC3PD,KAAKE,uBAAyB,uRAC9BF,KAAKG,wBAA0B,8WAoCjC,MAhCAT,GAAaI,IACXL,IAAK,mBACLI,MAAO,SAA0BO,EAAmBP,GAClD,OAAQO,GACN,IAAK,qBACCjC,MAAMM,QAAQoB,KAChBG,KAAKC,mBAAqBJ,EAG5B,MAEF,KAAK,yBACkB,gBAAVA,KACTG,KAAKE,uBAAyBL,EAGhC,MAEF,KAAK,0BACkB,gBAAVA,KACTG,KAAKG,wBAA0BN,QAYlCC,IAGT9C,GAAS8C,sBAAwBA,CAEjC,IAAIC,GAAgC,WAClC,QAASA,GAAiBM,GACxBvB,EAAgBkB,KAAMD,GAEtBC,KAAKM,YAGHN,KAAKK,MADHA,YAAiBP,GACNO,EAEA,GAAIP,GA4GrB,MAxGAJ,GAAaK,IACXN,IAAK,aACLI,MAAO,WACL,GAAIU,GAAQP,KAERQ,EAAc,GAAIC,OAAM,oBAExBC,EAAoBC,SAASC,uBAAuB,eACxDzC,OAAMN,UAAUgD,QAAQ9C,KAAK2C,EAAmB,SAAUI,GACxD,GAAIC,GAAYJ,SAASK,cAAc,SAEvC,IAAIT,EAAMF,MAAMJ,mBAAoB,CAClC,GAAIgB,IAEHA,EAAuBF,EAAUG,WAAWC,IAAIC,MAAMH,EAAsBhE,EAAmBsD,EAAMF,MAAMJ,qBAI9Gc,EAAUG,UAAUC,IAAI,2BAEpBZ,EAAMc,aACRN,EAAUO,aAAa,aAAc,0BACrCP,EAAUQ,UAAYhB,EAAMF,MAAMF,0BAElCY,EAAUO,aAAa,aAAc,yBACrCP,EAAUQ,UAAYhB,EAAMF,MAAMH,wBAGpCa,EAAUS,iBAAiB,QAAS,WAC9BjB,EAAMc,aACRd,EAAMkB,WAENC,OAAOC,aAAaC,QAAQ,yBAA0BrB,EAAMsB,kBAE5DtB,EAAMuB,UAENJ,OAAOC,aAAaC,QAAQ,yBAA0BrB,EAAMwB,eAG9DL,OAAOM,cAAcxB,KAEvBM,EAAUmB,OAAOlB,GACjBW,OAAOF,iBAAiB,mBAAoB,WACtCjB,EAAMc,aAERN,EAAUO,aAAa,aAAc,0BACrCP,EAAUQ,UAAYhB,EAAMF,MAAMF,0BAGlCY,EAAUO,aAAa,aAAc,yBACrCP,EAAUQ,UAAYhB,EAAMF,MAAMH,2BAIxC,IAAIgC,GAASvB,SAASwB,qBAAqB,QAC3ChE,OAAMN,UAAUgD,QAAQ9C,KAAKmE,EAAQ,SAAUE,GACzC7B,EAAM8B,UAAUD,IAClB7B,EAAMD,SAASgC,KAAKF,KAIpBpC,KAAKqB,aACPrB,KAAK8B,UACLJ,OAAOC,aAAaC,QAAQ,yBAA0B5B,KAAK+B,eAE3D/B,KAAKyB,cAIThC,IAAK,aACLI,MAAO,WACL,MAAO,UAGTJ,IAAK,eACLI,MAAO,WACL,MAAO,YAGTJ,IAAK,YACLI,MAAO,WACL,MAAO6B,QAAOC,aAAaY,QAAQ,4BAA8BvC,KAAK6B,kBAGxEpC,IAAK,UACLI,MAAO,WACL1B,MAAMN,UAAUgD,QAAQ9C,KAAKiC,KAAKM,SAAU,SAAU8B,GACpDA,EAAMI,YAIV/C,IAAK,WACLI,MAAO,WACL1B,MAAMN,UAAUgD,QAAQ9C,KAAKiC,KAAKM,SAAU,SAAU8B,GACpDA,EAAMK,aAIVhD,IAAK,YACLI,MAAO,SAAmBuC,GACxB,MAAOA,GAAMM,aAAa,aAAeN,EAAMM,aAAa,aAIzD3C,IAGT/C,GAAS+C,iBAAmBA\",\"file\":\"dcf-bgVideoToggle.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_toConsumableArray\",\"arr\",\"_arrayWithoutHoles\",\"_iterableToArray\",\"_unsupportedIterableToArray\",\"_nonIterableSpread\",\"TypeError\",\"o\",\"minLen\",\"_arrayLikeToArray\",\"n\",\"Object\",\"prototype\",\"toString\",\"call\",\"slice\",\"constructor\",\"name\",\"Array\",\"from\",\"test\",\"iter\",\"Symbol\",\"iterator\",\"isArray\",\"len\",\"length\",\"i\",\"arr2\",\"_classCallCheck\",\"instance\",\"Constructor\",\"_defineProperties\",\"target\",\"props\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"value\",\"DCFBgVideoToggleTheme\",\"DCFBgVideoToggle\",\"this\",\"toggleBtnClassList\",\"togglePlayBtnInnerHTML\",\"togglePauseBtnInnerHTML\",\"themeVariableName\",\"theme\",\"bgVideos\",\"_this\",\"toggleEvent\",\"Event\",\"bgVideoContainers\",\"document\",\"getElementsByClassName\",\"forEach\",\"container\",\"toggleBtn\",\"createElement\",\"_toggleBtn\$classList\",\"classList\",\"add\",\"apply\",\"isPlaying\",\"setAttribute\",\"innerHTML\",\"addEventListener\",\"pauseAll\",\"window\",\"localStorage\",\"setItem\",\"pausedStatus\",\"playAll\",\"playStatus\",\"dispatchEvent\",\"append\",\"videos\",\"getElementsByTagName\",\"video\",\"isBgVideo\",\"push\",\"getItem\",\"play\",\"pause\",\"hasAttribute\"],\"mappings\":\"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\",\"file\":\"dcf-bgVideoToggle.js\"}", "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js.map");
    }
}
