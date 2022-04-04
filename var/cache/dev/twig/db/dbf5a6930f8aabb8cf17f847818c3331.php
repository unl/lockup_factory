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

/* wdn/templates_5.0/js/compressed/mustard/ofi.js */
class __TwigTemplate_3c114c4d6b0fe46a1a7cd179b5427be5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/mustard/ofi.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/mustard/ofi.js"));

        // line 1
        echo "var objectFitImages=function(){\"use strict\";function t(t,e){return\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='\"+t+\"' height='\"+e+\"'%3E%3C/svg%3E\"}function e(t){if(t.srcset&&!m&&window.picturefill){var e=window.picturefill._;t[e.ns]&&t[e.ns].evaled||e.fillImg(t,{reselect:!0}),t[e.ns].curSrc||(t[e.ns].supported=!1,e.fillImg(t,{reselect:!0})),t.currentSrc=t[e.ns].curSrc||t.src}}function i(t){for(var e,i=getComputedStyle(t).fontFamily,r={};null!==(e=l.exec(i));)r[e[1]]=e[2];return r}function r(e,i,r){var n=t(i||1,r||0);p.call(e,\"src\")!==n&&b.call(e,\"src\",n)}function n(t,e){t.naturalWidth?e(t):setTimeout(n,100,t,e)}function c(t){var c=i(t),o=t[a];if(c[\"object-fit\"]=c[\"object-fit\"]||\"fill\",!o.img){if(\"fill\"===c[\"object-fit\"])return;if(!o.skipTest&&g&&!c[\"object-position\"])return}if(!o.img){o.img=new Image(t.width,t.height),o.img.srcset=p.call(t,\"data-ofi-srcset\")||t.srcset,o.img.src=p.call(t,\"data-ofi-src\")||t.src,b.call(t,\"data-ofi-src\",t.src),t.srcset&&b.call(t,\"data-ofi-srcset\",t.srcset),r(t,t.naturalWidth||t.width,t.naturalHeight||t.height),t.srcset&&(t.srcset=\"\");try{s(t)}catch(t){window.console&&console.warn(\"https://bit.ly/ofi-old-browser\")}}e(o.img),t.style.backgroundImage='url(\"'+(o.img.currentSrc||o.img.src).replace(/\"/g,'\\\\\"')+'\")',t.style.backgroundPosition=c[\"object-position\"]||\"center\",t.style.backgroundRepeat=\"no-repeat\",t.style.backgroundOrigin=\"content-box\",/scale-down/.test(c[\"object-fit\"])?n(o.img,function(){o.img.naturalWidth>t.width||o.img.naturalHeight>t.height?t.style.backgroundSize=\"contain\":t.style.backgroundSize=\"auto\"}):t.style.backgroundSize=c[\"object-fit\"].replace(\"none\",\"auto\").replace(\"fill\",\"100% 100%\"),n(o.img,function(e){r(t,e.naturalWidth,e.naturalHeight)})}function s(t){var e={get:function(e){return t[a].img[e||\"src\"]},set:function(e,i){return t[a].img[i||\"src\"]=e,b.call(t,\"data-ofi-\"+i,e),c(t),e}};Object.defineProperty(t,\"src\",e),Object.defineProperty(t,\"currentSrc\",{get:function(){return e.get(\"currentSrc\")}}),Object.defineProperty(t,\"srcset\",{get:function(){return e.get(\"srcset\")},set:function(t){return e.set(t,\"srcset\")}})}function o(t,e){var i=!h&&!t;if(e=e||{},t=t||\"img\",f&&!e.skipTest||!d)return!1;\"img\"===t?t=document.getElementsByTagName(\"img\"):\"string\"==typeof t?t=document.querySelectorAll(t):\"length\"in t||(t=[t]);for(var r=0;r<t.length;r++)t[r][a]=t[r][a]||{skipTest:e.skipTest},c(t[r]);i&&(document.body.addEventListener(\"load\",function(t){\"IMG\"===t.target.tagName&&o(t.target,{skipTest:e.skipTest})},!0),h=!0,t=\"img\"),e.watchMQ&&window.addEventListener(\"resize\",o.bind(null,t,{skipTest:e.skipTest}))}var a=\"bfred-it:object-fit-images\",l=/(object-fit|object-position)\\s*:\\s*([-.\\w\\s%]+)/g,u=\"undefined\"==typeof Image?{style:{\"object-position\":1}}:new Image,g=\"object-fit\"in u.style,f=\"object-position\"in u.style,d=\"background-size\"in u.style,m=\"string\"==typeof u.currentSrc,p=u.getAttribute,b=u.setAttribute,h=!1;return o.supportsObjectFit=g,o.supportsObjectPosition=f,function(){function t(t,e){return t[a]&&t[a].img&&(\"src\"===e||\"srcset\"===e)?t[a].img:t}f||(HTMLImageElement.prototype.getAttribute=function(e){return p.call(t(this,e),e)},HTMLImageElement.prototype.setAttribute=function(e,i){return b.call(t(this,e),e,String(i))})}(),o}();
//# sourceMappingURL=ofi.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/mustard/ofi.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("var objectFitImages=function(){\"use strict\";function t(t,e){return\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='\"+t+\"' height='\"+e+\"'%3E%3C/svg%3E\"}function e(t){if(t.srcset&&!m&&window.picturefill){var e=window.picturefill._;t[e.ns]&&t[e.ns].evaled||e.fillImg(t,{reselect:!0}),t[e.ns].curSrc||(t[e.ns].supported=!1,e.fillImg(t,{reselect:!0})),t.currentSrc=t[e.ns].curSrc||t.src}}function i(t){for(var e,i=getComputedStyle(t).fontFamily,r={};null!==(e=l.exec(i));)r[e[1]]=e[2];return r}function r(e,i,r){var n=t(i||1,r||0);p.call(e,\"src\")!==n&&b.call(e,\"src\",n)}function n(t,e){t.naturalWidth?e(t):setTimeout(n,100,t,e)}function c(t){var c=i(t),o=t[a];if(c[\"object-fit\"]=c[\"object-fit\"]||\"fill\",!o.img){if(\"fill\"===c[\"object-fit\"])return;if(!o.skipTest&&g&&!c[\"object-position\"])return}if(!o.img){o.img=new Image(t.width,t.height),o.img.srcset=p.call(t,\"data-ofi-srcset\")||t.srcset,o.img.src=p.call(t,\"data-ofi-src\")||t.src,b.call(t,\"data-ofi-src\",t.src),t.srcset&&b.call(t,\"data-ofi-srcset\",t.srcset),r(t,t.naturalWidth||t.width,t.naturalHeight||t.height),t.srcset&&(t.srcset=\"\");try{s(t)}catch(t){window.console&&console.warn(\"https://bit.ly/ofi-old-browser\")}}e(o.img),t.style.backgroundImage='url(\"'+(o.img.currentSrc||o.img.src).replace(/\"/g,'\\\\\"')+'\")',t.style.backgroundPosition=c[\"object-position\"]||\"center\",t.style.backgroundRepeat=\"no-repeat\",t.style.backgroundOrigin=\"content-box\",/scale-down/.test(c[\"object-fit\"])?n(o.img,function(){o.img.naturalWidth>t.width||o.img.naturalHeight>t.height?t.style.backgroundSize=\"contain\":t.style.backgroundSize=\"auto\"}):t.style.backgroundSize=c[\"object-fit\"].replace(\"none\",\"auto\").replace(\"fill\",\"100% 100%\"),n(o.img,function(e){r(t,e.naturalWidth,e.naturalHeight)})}function s(t){var e={get:function(e){return t[a].img[e||\"src\"]},set:function(e,i){return t[a].img[i||\"src\"]=e,b.call(t,\"data-ofi-\"+i,e),c(t),e}};Object.defineProperty(t,\"src\",e),Object.defineProperty(t,\"currentSrc\",{get:function(){return e.get(\"currentSrc\")}}),Object.defineProperty(t,\"srcset\",{get:function(){return e.get(\"srcset\")},set:function(t){return e.set(t,\"srcset\")}})}function o(t,e){var i=!h&&!t;if(e=e||{},t=t||\"img\",f&&!e.skipTest||!d)return!1;\"img\"===t?t=document.getElementsByTagName(\"img\"):\"string\"==typeof t?t=document.querySelectorAll(t):\"length\"in t||(t=[t]);for(var r=0;r<t.length;r++)t[r][a]=t[r][a]||{skipTest:e.skipTest},c(t[r]);i&&(document.body.addEventListener(\"load\",function(t){\"IMG\"===t.target.tagName&&o(t.target,{skipTest:e.skipTest})},!0),h=!0,t=\"img\"),e.watchMQ&&window.addEventListener(\"resize\",o.bind(null,t,{skipTest:e.skipTest}))}var a=\"bfred-it:object-fit-images\",l=/(object-fit|object-position)\\s*:\\s*([-.\\w\\s%]+)/g,u=\"undefined\"==typeof Image?{style:{\"object-position\":1}}:new Image,g=\"object-fit\"in u.style,f=\"object-position\"in u.style,d=\"background-size\"in u.style,m=\"string\"==typeof u.currentSrc,p=u.getAttribute,b=u.setAttribute,h=!1;return o.supportsObjectFit=g,o.supportsObjectPosition=f,function(){function t(t,e){return t[a]&&t[a].img&&(\"src\"===e||\"srcset\"===e)?t[a].img:t}f||(HTMLImageElement.prototype.getAttribute=function(e){return p.call(t(this,e),e)},HTMLImageElement.prototype.setAttribute=function(e,i){return b.call(t(this,e),e,String(i))})}(),o}();
//# sourceMappingURL=ofi.js.map", "wdn/templates_5.0/js/compressed/mustard/ofi.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/mustard/ofi.js");
    }
}
