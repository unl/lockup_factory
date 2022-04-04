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

/* wdn/templates_5.0/js/compressed/dcf-lazyLoad.js */
class __TwigTemplate_e00c3b63ba3cc506b642d434ebb2321f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js"));

        // line 1
        echo "function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var s=t[n];s.enumerable=s.enumerable||!1,s.configurable=!0,\"value\"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}return function(t,n,s){return n&&e(t.prototype,n),s&&e(t,s),t}}(),_typeof=\"function\"==typeof Symbol&&\"symbol\"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&\"function\"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?\"symbol\":typeof e};!function(e,t){\"function\"==typeof define&&define.amd?define([],t):\"object\"===(\"undefined\"==typeof exports?\"undefined\":_typeof(exports))?module.exports=t():e.dcfLazyLoad=t()}(void 0,function(){return function(){function e(t,n,s){var i=this;_classCallCheck(this,e),this.onIntersection=function(e,t){0===i.itemsCount&&i.observer.disconnect();for(var n=0;n<e.length;n++){var s=e[n];switch(s.target.nodeName){case\"IMG\":s.intersectionRatio>t.thresholds[0]&&s.intersectionRatio<t.thresholds[1]?i.preloadImage(s.target):s.intersectionRatio>t.thresholds[1]&&(i.itemsCount--,i.applyImage(s.target),i.observer.unobserve(s.target));break;default:continue}}},this.itemList=t,this.observerConfig=n,this.classNames=s}return _createClass(e,[{key:\"pxTOvw\",value:function(e){var t=window,n=document,s=n.documentElement,i=n.getElementsByTagName(\"body\")[0];return 100*e/(t.innerWidth||s.clientWidth||i.clientWidth)+\"vw\"}},{key:\"applyImage\",value:function(e){var t=e.dataset.src,n=e.dataset.srcset||null,s=e.dataset.sizes||this.pxTOvw(e.parentElement.clientWidth);t&&(\"PICTURE\"==e.parentNode.nodeName&&this.applyPicture(e.parentNode),e.classList.add(\"dcf-lazy-loaded\"),t&&(e.src=t),t&&e.removeAttribute(\"data-src\"),n&&(e.srcset=n),n&&e.removeAttribute(\"data-srcset\"),s&&(e.sizes=s),s&&e.removeAttribute(\"data-sizes\"),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}))}},{key:\"fetchImage\",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return new Promise(function(s,i){var a=new Image;e&&(a.src=e),t&&(a.srcset=t),n&&(a.sizes=n),a.onload=s,a.onerror=i})}},{key:\"preloadImage\",value:function(e){var t=e.dataset.src,n=e.dataset.srcset,s=e.dataset.sizes||null;if(t)return this.fetchImage(t,n,s).catch(function(e){return\"Image failed to fetch \"+e.mes})}},{key:\"applyPicture\",value:function(e){for(var t=e.getElementsByTagName(\"SOURCE\"),n=0;n<t.length;n++){var s=t[n].dataset.srcset||null,i=t[n].dataset.sizes||this.pxTOvw(e.parentElement.clientWidth);s&&(s&&(t[n].srcset=s),s&&t[n].removeAttribute(\"data-srcset\"),i&&(t[n].sizes=i),i&&t[n].removeAttribute(\"data-sizes\"))}}},{key:\"loadItemsImmediately\",value:function(e){for(var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],n=0;n<e.length;n++)switch(e[n].nodeName){case\"IMG\":!0===t&&this.preloadImage(e[n]),this.applyImage(e[n]);break;default:continue}}},{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){if(this.itemList)if(this.itemsCount=this.itemList.length,\"loading\"in HTMLImageElement.prototype)this.loadItemsImmediately(this.itemList,!1);else if(\"IntersectionObserver\"in window){this.observer=new IntersectionObserver(this.onIntersection,this.observerConfig);for(var e=0;e<this.itemList.length;e++){var t=this.itemList[e];t.classList.contains(\"dcf-lazy-loaded\")||this.observer.observe(t)}}else this.loadItemsImmediately(this.itemList)}}]),e}()});
//# sourceMappingURL=dcf-lazyLoad.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var s=t[n];s.enumerable=s.enumerable||!1,s.configurable=!0,\"value\"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}return function(t,n,s){return n&&e(t.prototype,n),s&&e(t,s),t}}(),_typeof=\"function\"==typeof Symbol&&\"symbol\"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&\"function\"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?\"symbol\":typeof e};!function(e,t){\"function\"==typeof define&&define.amd?define([],t):\"object\"===(\"undefined\"==typeof exports?\"undefined\":_typeof(exports))?module.exports=t():e.dcfLazyLoad=t()}(void 0,function(){return function(){function e(t,n,s){var i=this;_classCallCheck(this,e),this.onIntersection=function(e,t){0===i.itemsCount&&i.observer.disconnect();for(var n=0;n<e.length;n++){var s=e[n];switch(s.target.nodeName){case\"IMG\":s.intersectionRatio>t.thresholds[0]&&s.intersectionRatio<t.thresholds[1]?i.preloadImage(s.target):s.intersectionRatio>t.thresholds[1]&&(i.itemsCount--,i.applyImage(s.target),i.observer.unobserve(s.target));break;default:continue}}},this.itemList=t,this.observerConfig=n,this.classNames=s}return _createClass(e,[{key:\"pxTOvw\",value:function(e){var t=window,n=document,s=n.documentElement,i=n.getElementsByTagName(\"body\")[0];return 100*e/(t.innerWidth||s.clientWidth||i.clientWidth)+\"vw\"}},{key:\"applyImage\",value:function(e){var t=e.dataset.src,n=e.dataset.srcset||null,s=e.dataset.sizes||this.pxTOvw(e.parentElement.clientWidth);t&&(\"PICTURE\"==e.parentNode.nodeName&&this.applyPicture(e.parentNode),e.classList.add(\"dcf-lazy-loaded\"),t&&(e.src=t),t&&e.removeAttribute(\"data-src\"),n&&(e.srcset=n),n&&e.removeAttribute(\"data-srcset\"),s&&(e.sizes=s),s&&e.removeAttribute(\"data-sizes\"),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}))}},{key:\"fetchImage\",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return new Promise(function(s,i){var a=new Image;e&&(a.src=e),t&&(a.srcset=t),n&&(a.sizes=n),a.onload=s,a.onerror=i})}},{key:\"preloadImage\",value:function(e){var t=e.dataset.src,n=e.dataset.srcset,s=e.dataset.sizes||null;if(t)return this.fetchImage(t,n,s).catch(function(e){return\"Image failed to fetch \"+e.mes})}},{key:\"applyPicture\",value:function(e){for(var t=e.getElementsByTagName(\"SOURCE\"),n=0;n<t.length;n++){var s=t[n].dataset.srcset||null,i=t[n].dataset.sizes||this.pxTOvw(e.parentElement.clientWidth);s&&(s&&(t[n].srcset=s),s&&t[n].removeAttribute(\"data-srcset\"),i&&(t[n].sizes=i),i&&t[n].removeAttribute(\"data-sizes\"))}}},{key:\"loadItemsImmediately\",value:function(e){for(var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],n=0;n<e.length;n++)switch(e[n].nodeName){case\"IMG\":!0===t&&this.preloadImage(e[n]),this.applyImage(e[n]);break;default:continue}}},{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){if(this.itemList)if(this.itemsCount=this.itemList.length,\"loading\"in HTMLImageElement.prototype)this.loadItemsImmediately(this.itemList,!1);else if(\"IntersectionObserver\"in window){this.observer=new IntersectionObserver(this.onIntersection,this.observerConfig);for(var e=0;e<this.itemList.length;e++){var t=this.itemList[e];t.classList.contains(\"dcf-lazy-loaded\")||this.observer.observe(t)}}else this.loadItemsImmediately(this.itemList)}}]),e}()});
//# sourceMappingURL=dcf-lazyLoad.js.map", "wdn/templates_5.0/js/compressed/dcf-lazyLoad.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/dcf-lazyLoad.js");
    }
}
