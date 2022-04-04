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

/* wdn/templates_5.2/js/compressed/font-serif.js.map */
class __TwigTemplate_2c01a9e9b56f39d35caa146a5e01faca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/font-serif.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/font-serif.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"require-css/css!js-css/font-serif\",\"font-serif.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"WDN\",\"require\",\"initd\",\"initialize\",\"fontSerif\",\"document\",\"createElement\",\"rel\",\"href\",\"head\",\"appendChild\",\"c\",\"d\",\"a\",\"i\",\"s\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,uCAAA,cACAA,OAAA,cCDA,yBACA,SAAAC,EAAAC,GACA,GAAAC,IAAA,CAEA,QACAC,WAAA,WAEA,IAAAD,EAAA,CAGAA,GAAA,CAGA,MAAAE,GAAAC,SAAAC,cAAA,OACAF,GAAAG,IAAA,aACAH,EAAAI,KAAA,6DACAH,SAAAI,KAAAC,YAAAN,QChBA,SAAAO,GAAA,GAAAC,GAAAP,SAAAQ,EAAA,cAAAC,EAAA,aAAAC,EAAAH,EAAAN,cAAA,QAAAS,GAAAC,KAAA,WAAAJ,EAAAK,qBAAA,QAAA,GAAAJ,GAAAE,GAAAA,EAAAD,GAAAC,EAAAD,GAAAI,QAAAP,EAAAI,EAAAF,GAAAD,EAAAO,eAAAR,KACA\",\"file\":\"font-serif.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/font-serif',[],function(){});\\n\",\"define('font-serif',[\\n\\t'css!js-css/font-serif'\\n], function(WDN, require) {\\n    var initd = false;\\n\\n    return {\\n      initialize: function() {\\n        // protect against multiple initializations\\n        if (initd) {\\n          return;\\n        }\\n        initd = true;\\n\\n        // Load Mercury ScreenSmart fonts from Cloud.typography\\n        const fontSerif = document.createElement('link');\\n        fontSerif.rel = 'stylesheet';\\n        fontSerif.href = 'https://cloud.typography.com/7717652/7706412/css/fonts.css';\\n        document.head.appendChild(fontSerif);\\n      }\\n    };\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.unl-font-serif{font-family:Mercury SSm A,Mercury SSm B,Georgia,serif!important}');\\n\"]}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/font-serif.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"require-css/css!js-css/font-serif\",\"font-serif.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"WDN\",\"require\",\"initd\",\"initialize\",\"fontSerif\",\"document\",\"createElement\",\"rel\",\"href\",\"head\",\"appendChild\",\"c\",\"d\",\"a\",\"i\",\"s\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,uCAAA,cACAA,OAAA,cCDA,yBACA,SAAAC,EAAAC,GACA,GAAAC,IAAA,CAEA,QACAC,WAAA,WAEA,IAAAD,EAAA,CAGAA,GAAA,CAGA,MAAAE,GAAAC,SAAAC,cAAA,OACAF,GAAAG,IAAA,aACAH,EAAAI,KAAA,6DACAH,SAAAI,KAAAC,YAAAN,QChBA,SAAAO,GAAA,GAAAC,GAAAP,SAAAQ,EAAA,cAAAC,EAAA,aAAAC,EAAAH,EAAAN,cAAA,QAAAS,GAAAC,KAAA,WAAAJ,EAAAK,qBAAA,QAAA,GAAAJ,GAAAE,GAAAA,EAAAD,GAAAC,EAAAD,GAAAI,QAAAP,EAAAI,EAAAF,GAAAD,EAAAO,eAAAR,KACA\",\"file\":\"font-serif.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/font-serif',[],function(){});\\n\",\"define('font-serif',[\\n\\t'css!js-css/font-serif'\\n], function(WDN, require) {\\n    var initd = false;\\n\\n    return {\\n      initialize: function() {\\n        // protect against multiple initializations\\n        if (initd) {\\n          return;\\n        }\\n        initd = true;\\n\\n        // Load Mercury ScreenSmart fonts from Cloud.typography\\n        const fontSerif = document.createElement('link');\\n        fontSerif.rel = 'stylesheet';\\n        fontSerif.href = 'https://cloud.typography.com/7717652/7706412/css/fonts.css';\\n        document.head.appendChild(fontSerif);\\n      }\\n    };\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.unl-font-serif{font-family:Mercury SSm A,Mercury SSm B,Georgia,serif!important}');\\n\"]}", "wdn/templates_5.2/js/compressed/font-serif.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/font-serif.js.map");
    }
}
