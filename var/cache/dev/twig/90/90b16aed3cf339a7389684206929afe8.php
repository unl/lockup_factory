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

/* wdn/templates_5.2/js/compressed/plugins/body-scroll-lock.js.map */
class __TwigTemplate_6feb420c8fd864d943ac9eb0247bcbd1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/plugins/body-scroll-lock.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/plugins/body-scroll-lock.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"define\",\"amd\",\"exports\",\"mod\",\"bodyScrollLock\",\"this\",\"_toConsumableArray\",\"arr\",\"Array\",\"isArray\",\"i\",\"arr2\",\"length\",\"from\",\"Object\",\"defineProperty\",\"value\",\"hasPassiveEvents\",\"window\",\"passiveTestOptions\",\"passive\",\"addEventListener\",\"removeEventListener\",\"isIosDevice\",\"navigator\",\"platform\",\"test\",\"maxTouchPoints\",\"locks\",\"documentListenerAdded\",\"initialClientY\",\"previousBodyOverflowSetting\",\"previousBodyPaddingRight\",\"allowTouchMove\",\"el\",\"some\",\"lock\",\"options\",\"preventDefault\",\"rawEvent\",\"e\",\"event\",\"target\",\"touches\",\"setOverflowHidden\",\"undefined\",\"_reserveScrollBarGap\",\"reserveScrollBarGap\",\"scrollBarGap\",\"innerWidth\",\"document\",\"documentElement\",\"clientWidth\",\"body\",\"style\",\"paddingRight\",\"overflow\",\"restoreOverflowSetting\",\"isTargetElementTotallyScrolled\",\"targetElement\",\"scrollHeight\",\"scrollTop\",\"clientHeight\",\"handleScroll\",\"clientY\",\"targetTouches\",\"stopPropagation\",\"disableBodyScroll\",\"console\",\"error\",\"concat\",\"ontouchstart\",\"ontouchmove\",\"clearAllBodyScrollLocks\",\"forEach\",\"enableBodyScroll\",\"filter\"],\"mappings\":\"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\",\"file\":\"body-scroll-lock.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/plugins/body-scroll-lock.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"define\",\"amd\",\"exports\",\"mod\",\"bodyScrollLock\",\"this\",\"_toConsumableArray\",\"arr\",\"Array\",\"isArray\",\"i\",\"arr2\",\"length\",\"from\",\"Object\",\"defineProperty\",\"value\",\"hasPassiveEvents\",\"window\",\"passiveTestOptions\",\"passive\",\"addEventListener\",\"removeEventListener\",\"isIosDevice\",\"navigator\",\"platform\",\"test\",\"maxTouchPoints\",\"locks\",\"documentListenerAdded\",\"initialClientY\",\"previousBodyOverflowSetting\",\"previousBodyPaddingRight\",\"allowTouchMove\",\"el\",\"some\",\"lock\",\"options\",\"preventDefault\",\"rawEvent\",\"e\",\"event\",\"target\",\"touches\",\"setOverflowHidden\",\"undefined\",\"_reserveScrollBarGap\",\"reserveScrollBarGap\",\"scrollBarGap\",\"innerWidth\",\"document\",\"documentElement\",\"clientWidth\",\"body\",\"style\",\"paddingRight\",\"overflow\",\"restoreOverflowSetting\",\"isTargetElementTotallyScrolled\",\"targetElement\",\"scrollHeight\",\"scrollTop\",\"clientHeight\",\"handleScroll\",\"clientY\",\"targetTouches\",\"stopPropagation\",\"disableBodyScroll\",\"console\",\"error\",\"concat\",\"ontouchstart\",\"ontouchmove\",\"clearAllBodyScrollLocks\",\"forEach\",\"enableBodyScroll\",\"filter\"],\"mappings\":\"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\",\"file\":\"body-scroll-lock.js\"}", "wdn/templates_5.2/js/compressed/plugins/body-scroll-lock.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/plugins/body-scroll-lock.js.map");
    }
}
