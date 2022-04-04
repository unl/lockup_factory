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

/* wdn/templates_5.1/js/compressed/mustard/ofi.js.map */
class __TwigTemplate_2c0491c2bba80bdec5e3d2775b8764d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/mustard/ofi.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/mustard/ofi.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"objectFitImages\",\"createPlaceholder\",\"w\",\"h\",\"polyfillCurrentSrc\",\"el\",\"srcset\",\"supportsCurrentSrc\",\"window\",\"picturefill\",\"pf\",\"_\",\"ns\",\"evaled\",\"fillImg\",\"reselect\",\"curSrc\",\"supported\",\"currentSrc\",\"src\",\"getStyle\",\"parsed\",\"style\",\"getComputedStyle\",\"fontFamily\",\"props\",\"propRegex\",\"exec\",\"setPlaceholder\",\"img\",\"width\",\"height\",\"placeholder\",\"nativeGetAttribute\",\"call\",\"nativeSetAttribute\",\"onImageReady\",\"callback\",\"naturalWidth\",\"setTimeout\",\"fixOne\",\"ofi\",\"OFI\",\"skipTest\",\"supportsObjectFit\",\"Image\",\"naturalHeight\",\"keepSrcUsable\",\"err\",\"console\",\"warn\",\"backgroundImage\",\"replace\",\"backgroundPosition\",\"backgroundRepeat\",\"backgroundOrigin\",\"test\",\"backgroundSize\",\"descriptors\",\"get\",\"prop\",\"set\",\"value\",\"Object\",\"defineProperty\",\"ss\",\"fix\",\"imgs\",\"opts\",\"startAutoMode\",\"autoModeEnabled\",\"supportsObjectPosition\",\"supportsOFI\",\"document\",\"getElementsByTagName\",\"querySelectorAll\",\"i\",\"length\",\"body\",\"addEventListener\",\"e\",\"target\",\"tagName\",\"watchMQ\",\"bind\",\"testImg\",\"object-position\",\"getAttribute\",\"setAttribute\",\"getOfiImageMaybe\",\"name\",\"HTMLImageElement\",\"prototype\",\"this\",\"String\"],\"mappings\":\"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\",\"file\":\"ofi.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/mustard/ofi.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"objectFitImages\",\"createPlaceholder\",\"w\",\"h\",\"polyfillCurrentSrc\",\"el\",\"srcset\",\"supportsCurrentSrc\",\"window\",\"picturefill\",\"pf\",\"_\",\"ns\",\"evaled\",\"fillImg\",\"reselect\",\"curSrc\",\"supported\",\"currentSrc\",\"src\",\"getStyle\",\"parsed\",\"style\",\"getComputedStyle\",\"fontFamily\",\"props\",\"propRegex\",\"exec\",\"setPlaceholder\",\"img\",\"width\",\"height\",\"placeholder\",\"nativeGetAttribute\",\"call\",\"nativeSetAttribute\",\"onImageReady\",\"callback\",\"naturalWidth\",\"setTimeout\",\"fixOne\",\"ofi\",\"OFI\",\"skipTest\",\"supportsObjectFit\",\"Image\",\"naturalHeight\",\"keepSrcUsable\",\"err\",\"console\",\"warn\",\"backgroundImage\",\"replace\",\"backgroundPosition\",\"backgroundRepeat\",\"backgroundOrigin\",\"test\",\"backgroundSize\",\"descriptors\",\"get\",\"prop\",\"set\",\"value\",\"Object\",\"defineProperty\",\"ss\",\"fix\",\"imgs\",\"opts\",\"startAutoMode\",\"autoModeEnabled\",\"supportsObjectPosition\",\"supportsOFI\",\"document\",\"getElementsByTagName\",\"querySelectorAll\",\"i\",\"length\",\"body\",\"addEventListener\",\"e\",\"target\",\"tagName\",\"watchMQ\",\"bind\",\"testImg\",\"object-position\",\"getAttribute\",\"setAttribute\",\"getOfiImageMaybe\",\"name\",\"HTMLImageElement\",\"prototype\",\"this\",\"String\"],\"mappings\":\"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\",\"file\":\"ofi.js\"}", "wdn/templates_5.1/js/compressed/mustard/ofi.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/mustard/ofi.js.map");
    }
}
