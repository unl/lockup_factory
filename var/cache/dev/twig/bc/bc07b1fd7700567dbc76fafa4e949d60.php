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

/* wdn/templates_5.2/js/compressed/notice.js.map */
class __TwigTemplate_71db3b6762d8f7ec0546163aed230fcf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/notice.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/notice.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"require-css/css!js-css/notices\",\"notice.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"\$\",\"initd\",\"closeNotice\",\"\$el\",\"fadeOut\",\"remove\",\"Plugin\",\"initialize\",\"document\",\"on\",\"selectorNamespace\",\"this\",\"closest\",\"launch\",\"each\",\"overlayClass\",\"duration\",\"isOverlay\",\"overlayMatch\",\"data\",\"is\",\"addClass\",\"removeClass\",\"append\",\"prepend\",\"isNaN\",\"classList\",\"className\",\"split\",\"i\",\"classMatch\",\"match\",\"RegExp\",\"setTimeout\",\"c\",\"d\",\"a\",\"s\",\"createElement\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,oCAAA,cACAA,OAAA,UCDA,SACA,0BACA,SAAAC,GACA,GAIAC,IAAA,EAEAC,EAAA,SAAAC,GACAA,EAAAC,QANA,OAMA,WACAD,EAAAE,YAIAC,GACAC,WAAA,WAEAN,IAEAD,EAAAQ,UAAAC,GAAA,QAAAC,qBAAA,WAEA,MADAR,GAAAF,EAAAW,MAAAC,QAlBA,iBAmBA,IAGAX,GAAA,GAGAD,EAAAM,EAAAO,SAGAA,OAAA,WAEAb,EA9BA,eA8BAc,KAAA,WACA,GAMAC,GACAC,EAPAb,EAAAH,EAAAW,MAEAM,GAAA,CAQAF,GAAAG,kBANA,WAOAf,EAAAgB,KARA,YAQAhB,EAAAiB,GAAA,IAAAL,MACAE,GAAA,EACAd,EAAAkB,SAVA,WAUAC,YAAAP,GACAf,EAAA,WAAAuB,OAAApB,IAGAY,EAAAG,sBACAD,GAbA,gBAaAd,EAAAgB,KAfA,aAeAhB,EAAAiB,GAAA,IAAAL,KACAE,GAAA,EACAd,EAAAkB,SAjBA,WAiBAC,YAAAP,GACAf,EAAA,gBAAAwB,QAAArB,KAIAA,EAAAgB,KAxBA,aAwBAhB,EAAAiB,GAAA,yBACAJ,EAtDA,IAsDAb,EAAAgB,KAzBA,aA2BAM,MAAAT,IAAAA,EAAA,IACAhB,EAAAc,KAAAX,EAAA,GAAAuB,WAAAvB,EAAA,GAAAwB,UAAAC,MAAA,OAAA,SAAAC,EAAAF,GACA,GAAAG,GAAAH,EAAAI,MAAA,GAAAC,QAAA,mBACA,IAAAF,EAEA,MADAd,GA5DA,IA4DAc,EAAA,IACA,KAKAL,MAAAT,IAAAA,EAAA,KACAA,EApEA,KAuEAiB,WAAA,WACA/B,EAAAC,IACAa,OAMA,OAAAV,KCpFA,SAAA4B,GAAA,GAAAC,GAAA3B,SAAA4B,EAAA,cAAAP,EAAA,aAAAQ,EAAAF,EAAAG,cAAA,QAAAD,GAAAE,KAAA,WAAAJ,EAAAK,qBAAA,QAAA,GAAAJ,GAAAC,GAAAA,EAAAR,GAAAQ,EAAAR,GAAAY,QAAAP,EAAAG,EAAAD,GAAAD,EAAAO,eAAAR,KACA\",\"file\":\"notice.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/notices',[],function(){});\\n\",\"define('notice',[\\n\\t'jquery',\\n\\t'css!js-css/notices.css'\\n], function(\$) {\\n\\tvar selectorNamespace = '.wdn_notice';\\n\\tvar animationSpeed = 'slow';\\n\\tvar defaultDuration = 1000;\\n\\tvar durationMultiplier = 1000; // seconds to milliseconds\\n\\tvar initd = false;\\n\\n\\tvar closeNotice = function(\$el) {\\n\\t\\t\$el.fadeOut(animationSpeed, function() {\\n\\t\\t\\t\$el.remove();\\n\\t\\t});\\n\\t};\\n\\n\\tvar Plugin = {\\n\\t\\tinitialize : function() {\\n\\t\\t\\t// prevent double initialiation\\n\\t\\t\\tif (!initd) {\\n\\t\\t\\t\\t// globally listen for notice close button clicks\\n\\t\\t\\t\\t\$(document).on('click', selectorNamespace + ' .close', function() {\\n\\t\\t\\t\\t\\tcloseNotice(\$(this).closest(selectorNamespace));\\n\\t\\t\\t\\t\\treturn false;\\n\\t\\t\\t\\t});\\n\\n\\t\\t\\t\\tinitd = true;\\n\\t\\t\\t}\\n\\n\\t\\t\\t\$(Plugin.launch);\\n\\t\\t},\\n\\n\\t\\tlaunch : function() {\\n\\t\\t\\t// check each existing notice for special interactive features\\n\\t\\t\\t\$(selectorNamespace).each(function() {\\n\\t\\t\\t\\tvar \$el = \$(this);\\n\\t\\t\\t\\tvar durationMatch = 'duration';\\n\\t\\t\\t\\tvar isOverlay = false;\\n\\t\\t\\t\\tvar overlayMatch = 'overlay';\\n\\t\\t\\t\\tvar overlayHeader = 'header';\\n\\t\\t\\t\\tvar overlayMaincontent = 'maincontent';\\n\\t\\t\\t\\tvar overlayClass;\\n\\t\\t\\t\\tvar duration;\\n\\n\\t\\t\\t\\t// check for overlay changers\\n\\t\\t\\t\\toverlayClass = overlayMatch + '-' + overlayHeader;\\n\\t\\t\\t\\tif (\$el.data(overlayMatch) === overlayHeader || \$el.is('.' + overlayClass)) {\\n\\t\\t\\t\\t\\tisOverlay = true;\\n\\t\\t\\t\\t\\t\$el.addClass(overlayMatch).removeClass(overlayClass);\\n\\t\\t\\t\\t\\t\$('#' + overlayHeader).append(\$el);\\n\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\toverlayClass = overlayMatch + '-' + overlayMaincontent;\\n\\t\\t\\t\\tif (!isOverlay && (\$el.data(overlayMatch) === overlayMaincontent || \$el.is('.' + overlayClass))) {\\n\\t\\t\\t\\t\\tisOverlay = true;\\n\\t\\t\\t\\t\\t\$el.addClass(overlayMatch).removeClass(overlayClass);\\n\\t\\t\\t\\t\\t\$('#' + overlayMaincontent).prepend(\$el);\\n\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\t// check for auto-closing duration\\n\\t\\t\\t\\tif (\$el.data(durationMatch) || \$el.is('[class*=' + durationMatch + '-]')) {\\n\\t\\t\\t\\t\\tduration = \$el.data(durationMatch) * durationMultiplier;\\n\\n\\t\\t\\t\\t\\tif (isNaN(duration) || duration < 1) {\\n\\t\\t\\t\\t\\t\\t\$.each(\$el[0].classList || \$el[0].className.split(/\\\\s+/), function(i, className) {\\n\\t\\t\\t\\t\\t\\t\\tvar classMatch = className.match(new RegExp('^' + durationMatch + '-(.+)\$'))\\n\\t\\t\\t\\t\\t\\t\\tif (classMatch) {\\n\\t\\t\\t\\t\\t\\t\\t\\tduration = classMatch[1] * durationMultiplier;\\n\\t\\t\\t\\t\\t\\t\\t\\treturn false;\\n\\t\\t\\t\\t\\t\\t\\t}\\n\\t\\t\\t\\t\\t\\t});\\n\\t\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\t\\tif (isNaN(duration) || duration < 1) {\\n\\t\\t\\t\\t\\t\\tduration = defaultDuration;\\n\\t\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\t\\tsetTimeout(function() {\\n\\t\\t\\t\\t\\t\\tcloseNotice(\$el);\\n\\t\\t\\t\\t\\t}, duration);\\n\\t\\t\\t\\t}\\n\\t\\t\\t});\\n\\t\\t}\\n\\t};\\n\\n\\treturn Plugin;\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.wdn_notice{background-color:#007197;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/information.svg);background-position:1em 50%;background-repeat:no-repeat;background-size:1.78em;border-radius:3px;-webkit-box-shadow:0 1px 1px 0 rgba(36,36,35,.5);box-shadow:0 1px 1px 0 rgba(36,36,35,.5);margin-bottom:1em;padding:1em}.wdn_notice.affirm{background-color:#00784e;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/check-circle-2.svg)}.wdn_notice.negate{background-color:#b60000;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/cross-bubble.svg)}.wdn_notice.alert{background-color:#e72c0c;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/alert-2.svg)}.wdn_notice,.wdn_notice a,.wdn_notice a:hover{color:#fefdfa}.wdn_notice .message{padding-left:3.16em;padding-right:1.33em}.wdn_notice .message *{color:inherit;margin:0}.wdn_notice .message .title,.wdn_notice .message h4{letter-spacing:.01em;line-height:1.33;text-transform:uppercase}.wdn_notice .close{float:right}.wdn_notice .close a,.wdn_notice .close a:hover{background:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/delete-1.svg) 50% 50%/contain no-repeat;display:block;height:1em;position:relative;text-decoration:none;text-indent:-9999em;width:1em;z-index:1}.wdn_notice.overlay{left:5.62vw;margin-left:auto;margin-right:auto;max-width:56.12em;position:absolute;right:5.62vw;text-align:left;top:3.16em;z-index:999}');\\n\"]}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/notice.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"require-css/css!js-css/notices\",\"notice.js\",\"../../../../../../../onLayerEnd0.js\"],\"names\":[\"define\",\"\$\",\"initd\",\"closeNotice\",\"\$el\",\"fadeOut\",\"remove\",\"Plugin\",\"initialize\",\"document\",\"on\",\"selectorNamespace\",\"this\",\"closest\",\"launch\",\"each\",\"overlayClass\",\"duration\",\"isOverlay\",\"overlayMatch\",\"data\",\"is\",\"addClass\",\"removeClass\",\"append\",\"prepend\",\"isNaN\",\"classList\",\"className\",\"split\",\"i\",\"classMatch\",\"match\",\"RegExp\",\"setTimeout\",\"c\",\"d\",\"a\",\"s\",\"createElement\",\"type\",\"getElementsByTagName\",\"cssText\",\"createTextNode\"],\"mappings\":\"AACAA,OAAA,oCAAA,cACAA,OAAA,UCDA,SACA,0BACA,SAAAC,GACA,GAIAC,IAAA,EAEAC,EAAA,SAAAC,GACAA,EAAAC,QANA,OAMA,WACAD,EAAAE,YAIAC,GACAC,WAAA,WAEAN,IAEAD,EAAAQ,UAAAC,GAAA,QAAAC,qBAAA,WAEA,MADAR,GAAAF,EAAAW,MAAAC,QAlBA,iBAmBA,IAGAX,GAAA,GAGAD,EAAAM,EAAAO,SAGAA,OAAA,WAEAb,EA9BA,eA8BAc,KAAA,WACA,GAMAC,GACAC,EAPAb,EAAAH,EAAAW,MAEAM,GAAA,CAQAF,GAAAG,kBANA,WAOAf,EAAAgB,KARA,YAQAhB,EAAAiB,GAAA,IAAAL,MACAE,GAAA,EACAd,EAAAkB,SAVA,WAUAC,YAAAP,GACAf,EAAA,WAAAuB,OAAApB,IAGAY,EAAAG,sBACAD,GAbA,gBAaAd,EAAAgB,KAfA,aAeAhB,EAAAiB,GAAA,IAAAL,KACAE,GAAA,EACAd,EAAAkB,SAjBA,WAiBAC,YAAAP,GACAf,EAAA,gBAAAwB,QAAArB,KAIAA,EAAAgB,KAxBA,aAwBAhB,EAAAiB,GAAA,yBACAJ,EAtDA,IAsDAb,EAAAgB,KAzBA,aA2BAM,MAAAT,IAAAA,EAAA,IACAhB,EAAAc,KAAAX,EAAA,GAAAuB,WAAAvB,EAAA,GAAAwB,UAAAC,MAAA,OAAA,SAAAC,EAAAF,GACA,GAAAG,GAAAH,EAAAI,MAAA,GAAAC,QAAA,mBACA,IAAAF,EAEA,MADAd,GA5DA,IA4DAc,EAAA,IACA,KAKAL,MAAAT,IAAAA,EAAA,KACAA,EApEA,KAuEAiB,WAAA,WACA/B,EAAAC,IACAa,OAMA,OAAAV,KCpFA,SAAA4B,GAAA,GAAAC,GAAA3B,SAAA4B,EAAA,cAAAP,EAAA,aAAAQ,EAAAF,EAAAG,cAAA,QAAAD,GAAAE,KAAA,WAAAJ,EAAAK,qBAAA,QAAA,GAAAJ,GAAAC,GAAAA,EAAAR,GAAAQ,EAAAR,GAAAY,QAAAP,EAAAG,EAAAD,GAAAD,EAAAO,eAAAR,KACA\",\"file\":\"notice.js\",\"sourcesContent\":[\"\\ndefine('require-css/css!js-css/notices',[],function(){});\\n\",\"define('notice',[\\n\\t'jquery',\\n\\t'css!js-css/notices.css'\\n], function(\$) {\\n\\tvar selectorNamespace = '.wdn_notice';\\n\\tvar animationSpeed = 'slow';\\n\\tvar defaultDuration = 1000;\\n\\tvar durationMultiplier = 1000; // seconds to milliseconds\\n\\tvar initd = false;\\n\\n\\tvar closeNotice = function(\$el) {\\n\\t\\t\$el.fadeOut(animationSpeed, function() {\\n\\t\\t\\t\$el.remove();\\n\\t\\t});\\n\\t};\\n\\n\\tvar Plugin = {\\n\\t\\tinitialize : function() {\\n\\t\\t\\t// prevent double initialiation\\n\\t\\t\\tif (!initd) {\\n\\t\\t\\t\\t// globally listen for notice close button clicks\\n\\t\\t\\t\\t\$(document).on('click', selectorNamespace + ' .close', function() {\\n\\t\\t\\t\\t\\tcloseNotice(\$(this).closest(selectorNamespace));\\n\\t\\t\\t\\t\\treturn false;\\n\\t\\t\\t\\t});\\n\\n\\t\\t\\t\\tinitd = true;\\n\\t\\t\\t}\\n\\n\\t\\t\\t\$(Plugin.launch);\\n\\t\\t},\\n\\n\\t\\tlaunch : function() {\\n\\t\\t\\t// check each existing notice for special interactive features\\n\\t\\t\\t\$(selectorNamespace).each(function() {\\n\\t\\t\\t\\tvar \$el = \$(this);\\n\\t\\t\\t\\tvar durationMatch = 'duration';\\n\\t\\t\\t\\tvar isOverlay = false;\\n\\t\\t\\t\\tvar overlayMatch = 'overlay';\\n\\t\\t\\t\\tvar overlayHeader = 'header';\\n\\t\\t\\t\\tvar overlayMaincontent = 'maincontent';\\n\\t\\t\\t\\tvar overlayClass;\\n\\t\\t\\t\\tvar duration;\\n\\n\\t\\t\\t\\t// check for overlay changers\\n\\t\\t\\t\\toverlayClass = overlayMatch + '-' + overlayHeader;\\n\\t\\t\\t\\tif (\$el.data(overlayMatch) === overlayHeader || \$el.is('.' + overlayClass)) {\\n\\t\\t\\t\\t\\tisOverlay = true;\\n\\t\\t\\t\\t\\t\$el.addClass(overlayMatch).removeClass(overlayClass);\\n\\t\\t\\t\\t\\t\$('#' + overlayHeader).append(\$el);\\n\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\toverlayClass = overlayMatch + '-' + overlayMaincontent;\\n\\t\\t\\t\\tif (!isOverlay && (\$el.data(overlayMatch) === overlayMaincontent || \$el.is('.' + overlayClass))) {\\n\\t\\t\\t\\t\\tisOverlay = true;\\n\\t\\t\\t\\t\\t\$el.addClass(overlayMatch).removeClass(overlayClass);\\n\\t\\t\\t\\t\\t\$('#' + overlayMaincontent).prepend(\$el);\\n\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\t// check for auto-closing duration\\n\\t\\t\\t\\tif (\$el.data(durationMatch) || \$el.is('[class*=' + durationMatch + '-]')) {\\n\\t\\t\\t\\t\\tduration = \$el.data(durationMatch) * durationMultiplier;\\n\\n\\t\\t\\t\\t\\tif (isNaN(duration) || duration < 1) {\\n\\t\\t\\t\\t\\t\\t\$.each(\$el[0].classList || \$el[0].className.split(/\\\\s+/), function(i, className) {\\n\\t\\t\\t\\t\\t\\t\\tvar classMatch = className.match(new RegExp('^' + durationMatch + '-(.+)\$'))\\n\\t\\t\\t\\t\\t\\t\\tif (classMatch) {\\n\\t\\t\\t\\t\\t\\t\\t\\tduration = classMatch[1] * durationMultiplier;\\n\\t\\t\\t\\t\\t\\t\\t\\treturn false;\\n\\t\\t\\t\\t\\t\\t\\t}\\n\\t\\t\\t\\t\\t\\t});\\n\\t\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\t\\tif (isNaN(duration) || duration < 1) {\\n\\t\\t\\t\\t\\t\\tduration = defaultDuration;\\n\\t\\t\\t\\t\\t}\\n\\n\\t\\t\\t\\t\\tsetTimeout(function() {\\n\\t\\t\\t\\t\\t\\tcloseNotice(\$el);\\n\\t\\t\\t\\t\\t}, duration);\\n\\t\\t\\t\\t}\\n\\t\\t\\t});\\n\\t\\t}\\n\\t};\\n\\n\\treturn Plugin;\\n});\\n\\n\",\"\\n(function(c){var d=document,a='appendChild',i='styleSheet',s=d.createElement('style');s.type='text/css';d.getElementsByTagName('head')[0][a](s);s[i]?s[i].cssText=c:s[a](d.createTextNode(c));})\\n('.wdn_notice{background-color:#007197;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/information.svg);background-position:1em 50%;background-repeat:no-repeat;background-size:1.78em;border-radius:3px;-webkit-box-shadow:0 1px 1px 0 rgba(36,36,35,.5);box-shadow:0 1px 1px 0 rgba(36,36,35,.5);margin-bottom:1em;padding:1em}.wdn_notice.affirm{background-color:#00784e;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/check-circle-2.svg)}.wdn_notice.negate{background-color:#b60000;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/cross-bubble.svg)}.wdn_notice.alert{background-color:#e72c0c;background-image:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/alert-2.svg)}.wdn_notice,.wdn_notice a,.wdn_notice a:hover{color:#fefdfa}.wdn_notice .message{padding-left:3.16em;padding-right:1.33em}.wdn_notice .message *{color:inherit;margin:0}.wdn_notice .message .title,.wdn_notice .message h4{letter-spacing:.01em;line-height:1.33;text-transform:uppercase}.wdn_notice .close{float:right}.wdn_notice .close a,.wdn_notice .close a:hover{background:url(https://unlcms.unl.edu/wdn/templates_5.2/js/js-css/img/delete-1.svg) 50% 50%/contain no-repeat;display:block;height:1em;position:relative;text-decoration:none;text-indent:-9999em;width:1em;z-index:1}.wdn_notice.overlay{left:5.62vw;margin-left:auto;margin-right:auto;max-width:56.12em;position:absolute;right:5.62vw;text-align:left;top:3.16em;z-index:999}');\\n\"]}", "wdn/templates_5.2/js/compressed/notice.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/notice.js.map");
    }
}