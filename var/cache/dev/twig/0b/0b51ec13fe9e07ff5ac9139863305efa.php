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

/* wdn/templates_5.3/js/compressed/plugins/body-scroll-lock.js.map */
class __TwigTemplate_4ef10d07fa7820fde71f4f9f0009c31a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/body-scroll-lock.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/body-scroll-lock.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"define\",\"amd\",\"exports\",\"mod\",\"bodyScrollLock\",\"this\",\"_toConsumableArray\",\"arr\",\"Array\",\"isArray\",\"i\",\"arr2\",\"length\",\"from\",\"Object\",\"defineProperty\",\"value\",\"hasPassiveEvents\",\"window\",\"passiveTestOptions\",\"passive\",\"addEventListener\",\"removeEventListener\",\"isIosDevice\",\"navigator\",\"platform\",\"test\",\"maxTouchPoints\",\"locks\",\"documentListenerAdded\",\"initialClientY\",\"previousBodyOverflowSetting\",\"previousBodyPosition\",\"previousBodyPaddingRight\",\"allowTouchMove\",\"el\",\"some\",\"lock\",\"options\",\"preventDefault\",\"rawEvent\",\"e\",\"event\",\"target\",\"touches\",\"setOverflowHidden\",\"undefined\",\"_reserveScrollBarGap\",\"reserveScrollBarGap\",\"scrollBarGap\",\"innerWidth\",\"document\",\"documentElement\",\"clientWidth\",\"computedBodyPaddingRight\",\"parseInt\",\"getComputedStyle\",\"body\",\"getPropertyValue\",\"style\",\"paddingRight\",\"overflow\",\"restoreOverflowSetting\",\"setPositionFixed\",\"requestAnimationFrame\",\"position\",\"top\",\"left\",\"_window\",\"scrollY\",\"scrollX\",\"innerHeight\",\"setTimeout\",\"bottomBarHeight\",\"restorePositionSetting\",\"y\",\"x\",\"scrollTo\",\"isTargetElementTotallyScrolled\",\"targetElement\",\"scrollHeight\",\"scrollTop\",\"clientHeight\",\"handleScroll\",\"clientY\",\"targetTouches\",\"stopPropagation\",\"disableBodyScroll\",\"console\",\"error\",\"concat\",\"ontouchstart\",\"ontouchmove\",\"clearAllBodyScrollLocks\",\"forEach\",\"enableBodyScroll\",\"filter\"],\"mappings\":\"CAAA,SAAWA,EAAQC,GACjB,GAAsB,kBAAXC,SAAyBA,OAAOC,IACzCD,QAAQ,WAAYD,OACf,IAAuB,mBAAZG,SAChBH,EAAQG,aACH,CACL,GAAIC,IACFD,WAEFH,GAAQI,EAAID,SACZJ,EAAOM,eAAiBD,EAAID,UAE7BG,KAAM,SAAUH,GACjB,YAMA,SAASI,GAAmBC,GAC1B,GAAIC,MAAMC,QAAQF,GAAM,CACtB,IAAK,GAAIG,GAAI,EAAGC,EAAOH,MAAMD,EAAIK,QAASF,EAAIH,EAAIK,OAAQF,IACxDC,EAAKD,GAAKH,EAAIG,EAGhB,OAAOC,GAEP,MAAOH,OAAMK,KAAKN,GAZtBO,OAAOC,eAAeb,EAAS,cAC7Bc,OAAO,GAoBT,IAAIC,IAAmB,CACvB,IAAsB,mBAAXC,QAAwB,CACjC,GAAIC,IACFC,cACEH,GAAmB,GAIvBC,QAAOG,iBAAiB,cAAe,KAAMF,GAC7CD,OAAOI,oBAAoB,cAAe,KAAMH,GAGlD,GAAII,GAAgC,mBAAXL,SAA0BA,OAAOM,WAAaN,OAAOM,UAAUC,WAAa,iBAAiBC,KAAKR,OAAOM,UAAUC,WAA2C,aAA9BP,OAAOM,UAAUC,UAA2BP,OAAOM,UAAUG,eAAiB,GAGnOC,KACAC,GAAwB,EACxBC,GAAkB,EAClBC,MAA8B,GAC9BC,MAAuB,GACvBC,MAA2B,GAG3BC,EAAiB,SAAwBC,GAC3C,MAAOP,GAAMQ,KAAK,SAAUC,GAC1B,SAAIA,EAAKC,QAAQJ,iBAAkBG,EAAKC,QAAQJ,eAAeC,OAQ/DI,EAAiB,SAAwBC,GAC3C,GAAIC,GAAID,GAAYtB,OAAOwB,KAM3B,SAAIR,EAAeO,EAAEE,UAKjBF,EAAEG,QAAQhC,OAAS,IAEnB6B,EAAEF,gBAAgBE,EAAEF,kBAEjB,KAGLM,EAAoB,SAA2BP,GAEjD,OAAiCQ,KAA7Bb,EAAwC,CAC1C,GAAIc,KAAyBT,IAA2C,IAAhCA,EAAQU,oBAC5CC,EAAe/B,OAAOgC,WAAaC,SAASC,gBAAgBC,WAEhE,IAAIN,GAAwBE,EAAe,EAAG,CAC5C,GAAIK,GAA2BC,SAASrC,OAAOsC,iBAAiBL,SAASM,MAAMC,iBAAiB,iBAAkB,GAClHzB,GAA2BkB,SAASM,KAAKE,MAAMC,aAC/CT,SAASM,KAAKE,MAAMC,aAAeN,EAA2BL,EAAe,UAK7CH,KAAhCf,IACFA,EAA8BoB,SAASM,KAAKE,MAAME,SAClDV,SAASM,KAAKE,MAAME,SAAW,WAI/BC,EAAyB,eACMhB,KAA7Bb,IACFkB,SAASM,KAAKE,MAAMC,aAAe3B,EAInCA,MAA2Ba,QAGOA,KAAhCf,IACFoB,SAASM,KAAKE,MAAME,SAAW9B,EAI/BA,MAA8Be,KAI9BiB,EAAmB,WACrB,MAAO7C,QAAO8C,sBAAsB,WAElC,OAA6BlB,KAAzBd,EAAoC,CACtCA,GACEiC,SAAUd,SAASM,KAAKE,MAAMM,SAC9BC,IAAKf,SAASM,KAAKE,MAAMO,IACzBC,KAAMhB,SAASM,KAAKE,MAAMQ,KAI5B,IAAIC,GAAUlD,OACZmD,EAAUD,EAAQC,QAClBC,EAAUF,EAAQE,QAClBC,EAAcH,EAAQG,WAExBpB,UAASM,KAAKE,MAAMM,SAAW,QAC/Bd,SAASM,KAAKE,MAAMO,KAAOG,EAC3BlB,SAASM,KAAKE,MAAMQ,MAAQG,EAE5BE,WAAW,WACT,MAAOtD,QAAO8C,sBAAsB,WAElC,GAAIS,GAAkBF,EAAcrD,OAAOqD,WACvCE,IAAmBJ,GAAWE,IAEhCpB,SAASM,KAAKE,MAAMO,MAAQG,EAAUI,OAGzC,SAKLC,EAAyB,WAC3B,OAA6B5B,KAAzBd,EAAoC,CAEtC,GAAI2C,IAAKpB,SAASJ,SAASM,KAAKE,MAAMO,IAAK,IACvCU,GAAKrB,SAASJ,SAASM,KAAKE,MAAMQ,KAAM,GAG5ChB,UAASM,KAAKE,MAAMM,SAAWjC,EAAqBiC,SACpDd,SAASM,KAAKE,MAAMO,IAAMlC,EAAqBkC,IAC/Cf,SAASM,KAAKE,MAAMQ,KAAOnC,EAAqBmC,KAGhDjD,OAAO2D,SAASD,EAAGD,GAEnB3C,MAAuBc,KAKvBgC,EAAiC,SAAwCC,GAC3E,QAAOA,GAAgBA,EAAcC,aAAeD,EAAcE,WAAaF,EAAcG,cAG3FC,EAAe,SAAsBzC,EAAOqC,GAC9C,GAAIK,GAAU1C,EAAM2C,cAAc,GAAGD,QAAUtD,CAE/C,QAAII,EAAeQ,EAAMC,UAIrBoC,GAA6C,IAA5BA,EAAcE,WAAmBG,EAAU,EAEvD7C,EAAeG,GAGpBoC,EAA+BC,IAAkBK,EAAU,EAEtD7C,EAAeG,IAGxBA,EAAM4C,mBACC,IAGepF,GAAQqF,kBAAoB,SAA2BR,EAAezC,GAE5F,IAAKyC,EAGH,WADAS,SAAQC,MAAM,iHAKhB,KAAI7D,EAAMQ,KAAK,SAAUC,GACvB,MAAOA,GAAK0C,gBAAkBA,IADhC,CAMA,GAAI1C,IACF0C,cAAeA,EACfzC,QAASA,MAGXV,MAAW8D,OAAOpF,EAAmBsB,IAASS,IAE1Cd,EACFwC,IAEAlB,EAAkBP,GAGhBf,IACFwD,EAAcY,aAAe,SAAUjD,GACF,IAA/BA,EAAM2C,cAAczE,SAEtBkB,EAAiBY,EAAM2C,cAAc,GAAGD,UAG5CL,EAAca,YAAc,SAAUlD,GACD,IAA/BA,EAAM2C,cAAczE,QAEtBuE,EAAazC,EAAOqC,IAInBlD,IACHsB,SAAS9B,iBAAiB,YAAakB,EAAgBtB,GAAqBG,SAAS,OAAU0B,IAC/FjB,GAAwB,MAKA3B,EAAQ2F,wBAA0B,WAC1DtE,IAEFK,EAAMkE,QAAQ,SAAUzD,GACtBA,EAAK0C,cAAcY,aAAe,KAClCtD,EAAK0C,cAAca,YAAc,OAG/B/D,IACFsB,SAAS7B,oBAAoB,YAAaiB,EAAgBtB,GAAqBG,SAAS,OAAU0B,IAClGjB,GAAwB,GAI1BC,GAAkB,GAGhBP,EACFmD,IAEAZ,IAGFlC,MAGqB1B,EAAQ6F,iBAAmB,SAA0BhB,GAC1E,IAAKA,EAGH,WADAS,SAAQC,MAAM,+GAIhB7D,GAAQA,EAAMoE,OAAO,SAAU3D,GAC7B,MAAOA,GAAK0C,gBAAkBA,IAG5BxD,IACFwD,EAAcY,aAAe,KAC7BZ,EAAca,YAAc,KAExB/D,GAA0C,IAAjBD,EAAMhB,SACjCuC,SAAS7B,oBAAoB,YAAaiB,EAAgBtB,GAAqBG,SAAS,OAAU0B,IAClGjB,GAAwB,IAIxBN,EACFmD,IAEAZ\",\"file\":\"body-scroll-lock.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/body-scroll-lock.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"define\",\"amd\",\"exports\",\"mod\",\"bodyScrollLock\",\"this\",\"_toConsumableArray\",\"arr\",\"Array\",\"isArray\",\"i\",\"arr2\",\"length\",\"from\",\"Object\",\"defineProperty\",\"value\",\"hasPassiveEvents\",\"window\",\"passiveTestOptions\",\"passive\",\"addEventListener\",\"removeEventListener\",\"isIosDevice\",\"navigator\",\"platform\",\"test\",\"maxTouchPoints\",\"locks\",\"documentListenerAdded\",\"initialClientY\",\"previousBodyOverflowSetting\",\"previousBodyPosition\",\"previousBodyPaddingRight\",\"allowTouchMove\",\"el\",\"some\",\"lock\",\"options\",\"preventDefault\",\"rawEvent\",\"e\",\"event\",\"target\",\"touches\",\"setOverflowHidden\",\"undefined\",\"_reserveScrollBarGap\",\"reserveScrollBarGap\",\"scrollBarGap\",\"innerWidth\",\"document\",\"documentElement\",\"clientWidth\",\"computedBodyPaddingRight\",\"parseInt\",\"getComputedStyle\",\"body\",\"getPropertyValue\",\"style\",\"paddingRight\",\"overflow\",\"restoreOverflowSetting\",\"setPositionFixed\",\"requestAnimationFrame\",\"position\",\"top\",\"left\",\"_window\",\"scrollY\",\"scrollX\",\"innerHeight\",\"setTimeout\",\"bottomBarHeight\",\"restorePositionSetting\",\"y\",\"x\",\"scrollTo\",\"isTargetElementTotallyScrolled\",\"targetElement\",\"scrollHeight\",\"scrollTop\",\"clientHeight\",\"handleScroll\",\"clientY\",\"targetTouches\",\"stopPropagation\",\"disableBodyScroll\",\"console\",\"error\",\"concat\",\"ontouchstart\",\"ontouchmove\",\"clearAllBodyScrollLocks\",\"forEach\",\"enableBodyScroll\",\"filter\"],\"mappings\":\"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\",\"file\":\"body-scroll-lock.js\"}", "wdn/templates_5.3/js/compressed/plugins/body-scroll-lock.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/body-scroll-lock.js.map");
    }
}
