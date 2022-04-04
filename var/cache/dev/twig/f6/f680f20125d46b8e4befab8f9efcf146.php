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

/* wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js.map */
class __TwigTemplate_9ba15018838b9ca6994b5ac59a4bf34b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_dcfUtility\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFNavMenuToggle\",\"Headroom\",\"bodyScrollLock\",\"_this\",\"this\",\"disableBodyScroll\",\"enableBodyScroll\",\"skipNav\",\"document\",\"getElementById\",\"institutionTitle\",\"logo\",\"nav\",\"main\",\"querySelector\",\"footer\",\"mobileActions\",\"querySelectorAll\",\"Array\",\"forEach\",\"call\",\"action\",\"tolerance\",\"up\",\"down\",\"init\",\"err\",\"toggleButtons\",\"toggleIconOpen\",\"toggleIconClose\",\"toggleLabel\",\"mobileNav\",\"modalParent\",\"mobileNavMenu\",\"createElement\",\"setAttribute\",\"tabFocusEls\",\"firstTabFocusEl\",\"DCFUtility\",\"magicNumbers\",\"lastTabFocusEl\",\"closeSearchEvent\",\"CustomEvent\",\"closeIDMOptionsEvent\",\"detail\",\"type\",\"activeToggleButton\",\"isNavigationOpen\",\"classList\",\"contains\",\"closeOpenNavigation\",\"closeNavModal\",\"onKeyDown\",\"event\",\"keyCode\",\"shiftKey\",\"activeElement\",\"preventDefault\",\"focus\",\"addEventListener\",\"window\",\"button\",\"clickEvent\",\"currentTarget\",\"openNavModal\",\"primaryNavLi\",\"allPrimaryNavLi\",\"from\",\"hasChild\",\"find\",\"el\",\"desktopBtn\",\"removeAttribute\",\"dispatchEvent\",\"matchMedia\",\"matches\",\"add\",\"remove\",\"textContent\",\"removeEventListener\"],\"mappings\":\"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\",\"file\":\"dcf-navMenuToggle.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_dcfUtility\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFNavMenuToggle\",\"Headroom\",\"bodyScrollLock\",\"_this\",\"this\",\"disableBodyScroll\",\"enableBodyScroll\",\"skipNav\",\"document\",\"getElementById\",\"institutionTitle\",\"logo\",\"nav\",\"main\",\"querySelector\",\"footer\",\"mobileActions\",\"querySelectorAll\",\"Array\",\"forEach\",\"call\",\"action\",\"tolerance\",\"up\",\"down\",\"init\",\"err\",\"toggleButtons\",\"toggleIconOpen\",\"toggleIconClose\",\"toggleLabel\",\"mobileNav\",\"modalParent\",\"mobileNavMenu\",\"createElement\",\"setAttribute\",\"tabFocusEls\",\"firstTabFocusEl\",\"DCFUtility\",\"magicNumbers\",\"lastTabFocusEl\",\"closeSearchEvent\",\"CustomEvent\",\"closeIDMOptionsEvent\",\"detail\",\"type\",\"activeToggleButton\",\"isNavigationOpen\",\"classList\",\"contains\",\"closeOpenNavigation\",\"closeNavModal\",\"onKeyDown\",\"event\",\"keyCode\",\"shiftKey\",\"activeElement\",\"preventDefault\",\"focus\",\"addEventListener\",\"window\",\"button\",\"clickEvent\",\"currentTarget\",\"openNavModal\",\"primaryNavLi\",\"allPrimaryNavLi\",\"from\",\"hasChild\",\"find\",\"el\",\"desktopBtn\",\"removeAttribute\",\"dispatchEvent\",\"matchMedia\",\"matches\",\"add\",\"remove\",\"textContent\",\"removeEventListener\"],\"mappings\":\"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\",\"file\":\"dcf-navMenuToggle.js\"}", "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js.map");
    }
}
