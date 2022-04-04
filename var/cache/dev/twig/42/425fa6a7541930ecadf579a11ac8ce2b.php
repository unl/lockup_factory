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

/* wdn/templates_5.0/js/compressed/dcf-lazyLoad.js.map */
class __TwigTemplate_bf7da3dc4133962babdb2925e1fa24e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"_typeof\",\"Symbol\",\"iterator\",\"obj\",\"constructor\",\"root\",\"factory\",\"define\",\"amd\",\"exports\",\"module\",\"dcfLazyLoad\",\"undefined\",\"LazyLoad\",\"itemList\",\"observerConfig\",\"classNames\",\"_this\",\"this\",\"onIntersection\",\"entries\",\"observer\",\"itemsCount\",\"disconnect\",\"entry\",\"nodeName\",\"intersectionRatio\",\"thresholds\",\"preloadImage\",\"applyImage\",\"unobserve\",\"value\",\"w\",\"window\",\"d\",\"document\",\"e\",\"documentElement\",\"g\",\"getElementsByTagName\",\"innerWidth\",\"clientWidth\",\"image\",\"src\",\"dataset\",\"srcset\",\"sizes\",\"pxTOvw\",\"parentElement\",\"parentNode\",\"applyPicture\",\"classList\",\"add\",\"removeAttribute\",\"forEach\",\"className\",\"arguments\",\"Promise\",\"resolve\",\"reject\",\"Image\",\"onload\",\"onerror\",\"fetchImage\",\"catch\",\"err\",\"mes\",\"picture\",\"pictureSources\",\"items\",\"preload\",\"HTMLImageElement\",\"loadItemsImmediately\",\"IntersectionObserver\",\"item\",\"contains\",\"observe\"],\"mappings\":\"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\",\"file\":\"dcf-lazyLoad.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"_typeof\",\"Symbol\",\"iterator\",\"obj\",\"constructor\",\"root\",\"factory\",\"define\",\"amd\",\"exports\",\"module\",\"dcfLazyLoad\",\"undefined\",\"LazyLoad\",\"itemList\",\"observerConfig\",\"classNames\",\"_this\",\"this\",\"onIntersection\",\"entries\",\"observer\",\"itemsCount\",\"disconnect\",\"entry\",\"nodeName\",\"intersectionRatio\",\"thresholds\",\"preloadImage\",\"applyImage\",\"unobserve\",\"value\",\"w\",\"window\",\"d\",\"document\",\"e\",\"documentElement\",\"g\",\"getElementsByTagName\",\"innerWidth\",\"clientWidth\",\"image\",\"src\",\"dataset\",\"srcset\",\"sizes\",\"pxTOvw\",\"parentElement\",\"parentNode\",\"applyPicture\",\"classList\",\"add\",\"removeAttribute\",\"forEach\",\"className\",\"arguments\",\"Promise\",\"resolve\",\"reject\",\"Image\",\"onload\",\"onerror\",\"fetchImage\",\"catch\",\"err\",\"mes\",\"picture\",\"pictureSources\",\"items\",\"preload\",\"HTMLImageElement\",\"loadItemsImmediately\",\"IntersectionObserver\",\"item\",\"contains\",\"observe\"],\"mappings\":\"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\",\"file\":\"dcf-lazyLoad.js\"}", "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/dcf-lazyLoad.js.map");
    }
}