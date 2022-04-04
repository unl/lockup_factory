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

/* wdn/templates_5.3/js/compressed/dcf-lazyLoad.js.map */
class __TwigTemplate_4aa020afd89f6e7aca62392ab0dff2ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFLazyLoad\",\"itemList\",\"observerConfig\",\"classNames\",\"this\",\"docElement\",\"document\",\"documentElement\",\"docBody\",\"getElementsByTagName\",\"concat\",\"window\",\"innerWidth\",\"clientWidth\",\"image\",\"src\",\"dataset\",\"srcset\",\"sizes\",\"parentNode\",\"nodeName\",\"applyPicture\",\"pxTOvw\",\"parentElement\",\"classList\",\"add\",\"remove\",\"removeAttribute\",\"forEach\",\"className\",\"arguments\",\"undefined\",\"Promise\",\"resolve\",\"reject\",\"Image\",\"onload\",\"onerror\",\"catch\",\"fetchImagePromise\",\"fetchImage\",\"error\",\"picture\",\"_this\",\"pictureSources\",\"Array\",\"from\",\"pictureSource\",\"video\",\"videoSources\",\"poster\",\"videoSource\",\"load\",\"items\",\"_this2\",\"preload\",\"item\",\"preloadImage\",\"applyImage\",\"applyVideo\",\"observer\",\"disconnect\",\"_this3\",\"onIntersection\",\"entries\",\"itemsCount\",\"entry\",\"intersectionRatio\",\"thresholds\",\"unobserve\",\"IntersectionObserver\",\"contains\",\"HTMLImageElement\",\"observe\",\"loadItemsImmediately\"],\"mappings\":\"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\",\"file\":\"dcf-lazyLoad.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"_exports\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFLazyLoad\",\"itemList\",\"observerConfig\",\"classNames\",\"this\",\"docElement\",\"document\",\"documentElement\",\"docBody\",\"getElementsByTagName\",\"concat\",\"window\",\"innerWidth\",\"clientWidth\",\"image\",\"src\",\"dataset\",\"srcset\",\"sizes\",\"parentNode\",\"nodeName\",\"applyPicture\",\"pxTOvw\",\"parentElement\",\"classList\",\"add\",\"remove\",\"removeAttribute\",\"forEach\",\"className\",\"arguments\",\"undefined\",\"Promise\",\"resolve\",\"reject\",\"Image\",\"onload\",\"onerror\",\"catch\",\"fetchImagePromise\",\"fetchImage\",\"error\",\"picture\",\"_this\",\"pictureSources\",\"Array\",\"from\",\"pictureSource\",\"video\",\"videoSources\",\"poster\",\"videoSource\",\"load\",\"items\",\"_this2\",\"preload\",\"item\",\"preloadImage\",\"applyImage\",\"applyVideo\",\"observer\",\"disconnect\",\"_this3\",\"onIntersection\",\"entries\",\"itemsCount\",\"entry\",\"intersectionRatio\",\"thresholds\",\"unobserve\",\"IntersectionObserver\",\"contains\",\"HTMLImageElement\",\"observe\",\"loadItemsImmediately\"],\"mappings\":\"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\",\"file\":\"dcf-lazyLoad.js\"}", "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-lazyLoad.js.map");
    }
}
