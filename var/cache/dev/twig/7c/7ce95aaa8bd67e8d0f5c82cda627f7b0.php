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

/* wdn/templates_4.1/scripts/compressed/smallcaps.js.map */
class __TwigTemplate_8f041e1e590d784ba185b86506366a0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/smallcaps.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/smallcaps.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"require-css/css!js-css/smallcaps\",\"smallcaps.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"\$\",\"WDN\",\"require\",\"initd\",\"initialize\",\"\$smallCaps\",\"rel\",\"href\",\"append\",\"c\",\"d\",\"document\",\"a\",\"i\",\"s\",\"createElement\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,sCAAA,cACAA,OAAA,aCDA,SACA,wBACA,SAAAC,EAAAC,EAAAC,GACA,GAAAC,IAAA,CAEA,QACAC,WAAA,WAEA,IAAAD,EAAA,CAGAA,GAAA,CAGA,IAAAE,GAAAL,EAAA,UACAM,IAAA,aACAC,KAAA,6DAGAP,GAAA,QAAAQ,OAAAH,QCnBA,SAAAI,GAAA,GAAAC,GAAAC,SAAAC,EAAA,cAAAC,EAAA,aAAAC,EAAAJ,EAAAK,cAAA,QAAAD,GAAAE,KAAA,WAAAN,EAAAO,qBAAA,QAAA,GAAAL,GAAAE,GAAAA,EAAAD,GAAAC,EAAAD,GAAAK,QAAAT,EAAAK,EAAAF,GAAAF,EAAAS,eAAAV,KACA\",\"file\":\"smallcaps.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/smallcaps',[],function(){});\\n\",\"define('smallcaps',[\\n\\t'jquery',\\n\\t'css!js-css/smallcaps'\\n], function(\$, WDN, require) {\\n    var initd = false;\\n\\n    return {\\n        initialize: function() {\\n            // protect against multiple initializations\\n            if (initd) {\\n                return;\\n            }\\n            initd = true;\\n\\n            // Load Mercury ScreenSmart Small Caps fonts from Cloud.typography\\n            var \$smallCaps = \$('<link>', {\\n                'rel' : 'stylesheet',\\n                'href' : 'https://cloud.typography.com/7717652/679648/css/fonts.css'\\n            });\\n\\n            \$('head').append(\$smallCaps);\\n        }\\n    };\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.wdn-smallcaps{font-family:\\\\'Mercury SSm Small Caps A\\\\',\\\\'Mercury SSm Small Caps B\\\\',Georgia,serif;font-weight:400;font-style:normal}');\\n\"]}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/smallcaps.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"require-css/css!js-css/smallcaps\",\"smallcaps.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"\$\",\"WDN\",\"require\",\"initd\",\"initialize\",\"\$smallCaps\",\"rel\",\"href\",\"append\",\"c\",\"d\",\"document\",\"a\",\"i\",\"s\",\"createElement\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,sCAAA,cACAA,OAAA,aCDA,SACA,wBACA,SAAAC,EAAAC,EAAAC,GACA,GAAAC,IAAA,CAEA,QACAC,WAAA,WAEA,IAAAD,EAAA,CAGAA,GAAA,CAGA,IAAAE,GAAAL,EAAA,UACAM,IAAA,aACAC,KAAA,6DAGAP,GAAA,QAAAQ,OAAAH,QCnBA,SAAAI,GAAA,GAAAC,GAAAC,SAAAC,EAAA,cAAAC,EAAA,aAAAC,EAAAJ,EAAAK,cAAA,QAAAD,GAAAE,KAAA,WAAAN,EAAAO,qBAAA,QAAA,GAAAL,GAAAE,GAAAA,EAAAD,GAAAC,EAAAD,GAAAK,QAAAT,EAAAK,EAAAF,GAAAF,EAAAS,eAAAV,KACA\",\"file\":\"smallcaps.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/smallcaps',[],function(){});\\n\",\"define('smallcaps',[\\n\\t'jquery',\\n\\t'css!js-css/smallcaps'\\n], function(\$, WDN, require) {\\n    var initd = false;\\n\\n    return {\\n        initialize: function() {\\n            // protect against multiple initializations\\n            if (initd) {\\n                return;\\n            }\\n            initd = true;\\n\\n            // Load Mercury ScreenSmart Small Caps fonts from Cloud.typography\\n            var \$smallCaps = \$('<link>', {\\n                'rel' : 'stylesheet',\\n                'href' : 'https://cloud.typography.com/7717652/679648/css/fonts.css'\\n            });\\n\\n            \$('head').append(\$smallCaps);\\n        }\\n    };\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.wdn-smallcaps{font-family:\\\\'Mercury SSm Small Caps A\\\\',\\\\'Mercury SSm Small Caps B\\\\',Georgia,serif;font-weight:400;font-style:normal}');\\n\"]}", "wdn/templates_4.1/scripts/compressed/smallcaps.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/smallcaps.js.map");
    }
}
