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

/* wdn/templates_4.1/scripts/compressed/display-font.js.map */
class __TwigTemplate_12135c59724ab42f257c3f60cc86ae30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/display-font.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/display-font.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"require-css/css!js-css/display-font\",\"display-font.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"\$\",\"WDN\",\"require\",\"initd\",\"initialize\",\"\$displayFont\",\"rel\",\"href\",\"append\",\"c\",\"d\",\"document\",\"a\",\"i\",\"s\",\"createElement\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,yCAAA,cACAA,OAAA,gBCDA,SACA,2BACA,SAAAC,EAAAC,EAAAC,GACA,GAAAC,IAAA,CAEA,QACAC,WAAA,WAEA,IAAAD,EAAA,CAGAA,GAAA,CAGA,IAAAE,GAAAL,EAAA,UACAM,IAAA,aACAC,KAAA,8DAGAP,GAAA,QAAAQ,OAAAH,QCnBA,SAAAI,GAAA,GAAAC,GAAAC,SAAAC,EAAA,cAAAC,EAAA,aAAAC,EAAAJ,EAAAK,cAAA,QAAAD,GAAAE,KAAA,WAAAN,EAAAO,qBAAA,QAAA,GAAAL,GAAAE,GAAAA,EAAAD,GAAAC,EAAAD,GAAAK,QAAAT,EAAAK,EAAAF,GAAAF,EAAAS,eAAAV,KACA\",\"file\":\"display-font.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/display-font',[],function(){});\\n\",\"define('display-font',[\\n\\t'jquery',\\n\\t'css!js-css/display-font'\\n], function(\$, WDN, require) {\\n    var initd = false;\\n\\n    return {\\n        initialize: function() {\\n            // protect against multiple initializations\\n            if (initd) {\\n                return;\\n            }\\n            initd = true;\\n\\n            // Load Mercury Display fonts from Cloud.typography\\n            var \$displayFont = \$('<link>', {\\n                'rel' : 'stylesheet',\\n                'href' : 'https://cloud.typography.com/7717652/7503352/css/fonts.css'\\n            });\\n\\n            \$('head').append(\$displayFont);\\n        }\\n    };\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.wdn-display-font{font-family:\\\\'Mercury Display A\\\\',\\\\'Mercury Display B\\\\',Georgia,serif;font-weight:400;font-style:normal;font-feature-settings:\\\\'kern\\\\' 1,\\\\'liga\\\\' 1}');\\n\"]}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/display-font.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"require-css/css!js-css/display-font\",\"display-font.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"\$\",\"WDN\",\"require\",\"initd\",\"initialize\",\"\$displayFont\",\"rel\",\"href\",\"append\",\"c\",\"d\",\"document\",\"a\",\"i\",\"s\",\"createElement\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,yCAAA,cACAA,OAAA,gBCDA,SACA,2BACA,SAAAC,EAAAC,EAAAC,GACA,GAAAC,IAAA,CAEA,QACAC,WAAA,WAEA,IAAAD,EAAA,CAGAA,GAAA,CAGA,IAAAE,GAAAL,EAAA,UACAM,IAAA,aACAC,KAAA,8DAGAP,GAAA,QAAAQ,OAAAH,QCnBA,SAAAI,GAAA,GAAAC,GAAAC,SAAAC,EAAA,cAAAC,EAAA,aAAAC,EAAAJ,EAAAK,cAAA,QAAAD,GAAAE,KAAA,WAAAN,EAAAO,qBAAA,QAAA,GAAAL,GAAAE,GAAAA,EAAAD,GAAAC,EAAAD,GAAAK,QAAAT,EAAAK,EAAAF,GAAAF,EAAAS,eAAAV,KACA\",\"file\":\"display-font.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/display-font',[],function(){});\\n\",\"define('display-font',[\\n\\t'jquery',\\n\\t'css!js-css/display-font'\\n], function(\$, WDN, require) {\\n    var initd = false;\\n\\n    return {\\n        initialize: function() {\\n            // protect against multiple initializations\\n            if (initd) {\\n                return;\\n            }\\n            initd = true;\\n\\n            // Load Mercury Display fonts from Cloud.typography\\n            var \$displayFont = \$('<link>', {\\n                'rel' : 'stylesheet',\\n                'href' : 'https://cloud.typography.com/7717652/7503352/css/fonts.css'\\n            });\\n\\n            \$('head').append(\$displayFont);\\n        }\\n    };\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.wdn-display-font{font-family:\\\\'Mercury Display A\\\\',\\\\'Mercury Display B\\\\',Georgia,serif;font-weight:400;font-style:normal;font-feature-settings:\\\\'kern\\\\' 1,\\\\'liga\\\\' 1}');\\n\"]}", "wdn/templates_4.1/scripts/compressed/display-font.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/display-font.js.map");
    }
}
