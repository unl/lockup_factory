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

/* wdn/templates_5.0/js/compressed/mustard/ofi.js.map */
class __TwigTemplate_e3a02b55dbfa7c1f7febcd92aa178282 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/mustard/ofi.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/mustard/ofi.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"objectFitImages\",\"createPlaceholder\",\"w\",\"h\",\"polyfillCurrentSrc\",\"el\",\"srcset\",\"supportsCurrentSrc\",\"window\",\"picturefill\",\"pf\",\"_\",\"ns\",\"evaled\",\"fillImg\",\"reselect\",\"curSrc\",\"supported\",\"currentSrc\",\"src\",\"getStyle\",\"parsed\",\"style\",\"getComputedStyle\",\"fontFamily\",\"props\",\"propRegex\",\"exec\",\"setPlaceholder\",\"img\",\"width\",\"height\",\"placeholder\",\"nativeGetAttribute\",\"call\",\"nativeSetAttribute\",\"onImageReady\",\"callback\",\"naturalWidth\",\"setTimeout\",\"fixOne\",\"ofi\",\"OFI\",\"skipTest\",\"supportsObjectFit\",\"Image\",\"naturalHeight\",\"keepSrcUsable\",\"err\",\"console\",\"warn\",\"backgroundImage\",\"replace\",\"backgroundPosition\",\"backgroundRepeat\",\"backgroundOrigin\",\"test\",\"backgroundSize\",\"descriptors\",\"get\",\"prop\",\"set\",\"value\",\"Object\",\"defineProperty\",\"ss\",\"fix\",\"imgs\",\"opts\",\"startAutoMode\",\"autoModeEnabled\",\"supportsObjectPosition\",\"supportsOFI\",\"document\",\"getElementsByTagName\",\"querySelectorAll\",\"i\",\"length\",\"body\",\"addEventListener\",\"e\",\"target\",\"tagName\",\"watchMQ\",\"bind\",\"testImg\",\"object-position\",\"getAttribute\",\"setAttribute\",\"getOfiImageMaybe\",\"name\",\"HTMLImageElement\",\"prototype\",\"this\",\"String\"],\"mappings\":\"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\",\"file\":\"ofi.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/mustard/ofi.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"objectFitImages\",\"createPlaceholder\",\"w\",\"h\",\"polyfillCurrentSrc\",\"el\",\"srcset\",\"supportsCurrentSrc\",\"window\",\"picturefill\",\"pf\",\"_\",\"ns\",\"evaled\",\"fillImg\",\"reselect\",\"curSrc\",\"supported\",\"currentSrc\",\"src\",\"getStyle\",\"parsed\",\"style\",\"getComputedStyle\",\"fontFamily\",\"props\",\"propRegex\",\"exec\",\"setPlaceholder\",\"img\",\"width\",\"height\",\"placeholder\",\"nativeGetAttribute\",\"call\",\"nativeSetAttribute\",\"onImageReady\",\"callback\",\"naturalWidth\",\"setTimeout\",\"fixOne\",\"ofi\",\"OFI\",\"skipTest\",\"supportsObjectFit\",\"Image\",\"naturalHeight\",\"keepSrcUsable\",\"err\",\"console\",\"warn\",\"backgroundImage\",\"replace\",\"backgroundPosition\",\"backgroundRepeat\",\"backgroundOrigin\",\"test\",\"backgroundSize\",\"descriptors\",\"get\",\"prop\",\"set\",\"value\",\"Object\",\"defineProperty\",\"ss\",\"fix\",\"imgs\",\"opts\",\"startAutoMode\",\"autoModeEnabled\",\"supportsObjectPosition\",\"supportsOFI\",\"document\",\"getElementsByTagName\",\"querySelectorAll\",\"i\",\"length\",\"body\",\"addEventListener\",\"e\",\"target\",\"tagName\",\"watchMQ\",\"bind\",\"testImg\",\"object-position\",\"getAttribute\",\"setAttribute\",\"getOfiImageMaybe\",\"name\",\"HTMLImageElement\",\"prototype\",\"this\",\"String\"],\"mappings\":\"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\",\"file\":\"ofi.js\"}", "wdn/templates_5.0/js/compressed/mustard/ofi.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/mustard/ofi.js.map");
    }
}
