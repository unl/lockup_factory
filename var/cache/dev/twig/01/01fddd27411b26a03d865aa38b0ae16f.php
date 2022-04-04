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

/* wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js.map */
class __TwigTemplate_6f7d71142899ea1be564072a56295363 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"define\",\"amd\",\"exports\",\"mod\",\"bodyScrollLock\",\"this\",\"_toConsumableArray\",\"arr\",\"Array\",\"isArray\",\"i\",\"arr2\",\"length\",\"from\",\"Object\",\"defineProperty\",\"value\",\"hasPassiveEvents\",\"window\",\"passiveTestOptions\",\"passive\",\"addEventListener\",\"removeEventListener\",\"isIosDevice\",\"navigator\",\"platform\",\"test\",\"firstTargetElement\",\"allTargetElements\",\"documentListenerAdded\",\"initialClientY\",\"previousBodyOverflowSetting\",\"previousBodyPaddingRight\",\"preventDefault\",\"rawEvent\",\"e\",\"event\",\"touches\",\"setOverflowHidden\",\"options\",\"setTimeout\",\"undefined\",\"_reserveScrollBarGap\",\"reserveScrollBarGap\",\"scrollBarGap\",\"innerWidth\",\"document\",\"documentElement\",\"clientWidth\",\"body\",\"style\",\"paddingRight\",\"overflow\",\"restoreOverflowSetting\",\"isTargetElementTotallyScrolled\",\"targetElement\",\"scrollHeight\",\"scrollTop\",\"clientHeight\",\"handleScroll\",\"clientY\",\"targetTouches\",\"stopPropagation\",\"disableBodyScroll\",\"includes\",\"concat\",\"ontouchstart\",\"ontouchmove\",\"clearAllBodyScrollLocks\",\"forEach\",\"enableBodyScroll\",\"filter\",\"element\"],\"mappings\":\"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\",\"file\":\"body-scroll-lock.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"define\",\"amd\",\"exports\",\"mod\",\"bodyScrollLock\",\"this\",\"_toConsumableArray\",\"arr\",\"Array\",\"isArray\",\"i\",\"arr2\",\"length\",\"from\",\"Object\",\"defineProperty\",\"value\",\"hasPassiveEvents\",\"window\",\"passiveTestOptions\",\"passive\",\"addEventListener\",\"removeEventListener\",\"isIosDevice\",\"navigator\",\"platform\",\"test\",\"firstTargetElement\",\"allTargetElements\",\"documentListenerAdded\",\"initialClientY\",\"previousBodyOverflowSetting\",\"previousBodyPaddingRight\",\"preventDefault\",\"rawEvent\",\"e\",\"event\",\"touches\",\"setOverflowHidden\",\"options\",\"setTimeout\",\"undefined\",\"_reserveScrollBarGap\",\"reserveScrollBarGap\",\"scrollBarGap\",\"innerWidth\",\"document\",\"documentElement\",\"clientWidth\",\"body\",\"style\",\"paddingRight\",\"overflow\",\"restoreOverflowSetting\",\"isTargetElementTotallyScrolled\",\"targetElement\",\"scrollHeight\",\"scrollTop\",\"clientHeight\",\"handleScroll\",\"clientY\",\"targetTouches\",\"stopPropagation\",\"disableBodyScroll\",\"includes\",\"concat\",\"ontouchstart\",\"ontouchmove\",\"clearAllBodyScrollLocks\",\"forEach\",\"enableBodyScroll\",\"filter\",\"element\"],\"mappings\":\"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\",\"file\":\"body-scroll-lock.js\"}", "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js.map");
    }
}
