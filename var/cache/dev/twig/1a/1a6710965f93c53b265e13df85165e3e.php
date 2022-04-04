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

/* wdn/templates_5.1/js/compressed/dcf-lazyLoad.js */
class __TwigTemplate_89f4fb0d7703292ac4aa0c11fb547385 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js"));

        // line 1
        echo "function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var s=0;s<t.length;s++){var a=t[s];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(t,s,a){return s&&e(t.prototype,s),a&&e(t,a),t}}(),DCFLazyLoad=function(){function e(t,s,a){_classCallCheck(this,e),this.itemList=t,this.observerConfig=s,this.classNames=a}return _createClass(e,[{key:\"pxTOvw\",value:function(e){var t=document.documentElement,s=document.getElementsByTagName(\"body\")[0];return 100*e/(window.innerWidth||t.clientWidth||s.clientWidth)+\"vw\"}},{key:\"applyImage\",value:function(e){var t=e.dataset.src,s=e.dataset.srcset||null,a=null;t&&(\"PICTURE\"===e.parentNode.nodeName?(this.applyPicture(e.parentNode),a=e.dataset.sizes||this.pxTOvw(e.parentNode.parentElement.clientWidth)):a=e.dataset.sizes||this.pxTOvw(e.parentElement.clientWidth),e.classList.add(\"dcf-lazy-loaded\"),e.classList.remove(\"dcf-lazy-load\"),t&&(e.src=t,e.removeAttribute(\"data-src\")),s&&(e.srcset=s,e.removeAttribute(\"data-srcset\")),a&&(e.sizes=a,e.removeAttribute(\"data-sizes\")),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}))}},{key:\"fetchImage\",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,s=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return new Promise(function(a,n){var i=new Image;e&&(i.src=e),t&&(i.srcset=t),s&&(i.sizes=s),i.onload=a,i.onerror=n}).catch(function(){})}},{key:\"preloadImage\",value:function(e){var t=e.dataset.src,s=e.dataset.srcset,a=e.dataset.sizes||null,n=null;if(t)try{n=this.fetchImage(t,s,a)}catch(e){}return n}},{key:\"applyPicture\",value:function(e){var t=this,s=e.getElementsByTagName(\"SOURCE\");Array.from(s).forEach(function(s){var a=s.dataset.srcset||null,n=s.dataset.sizes||t.pxTOvw(e.parentElement.clientWidth);a&&(s.srcset=a,s.removeAttribute(\"data-srcset\"),n&&(s.sizes=n,s.removeAttribute(\"data-sizes\")))})}},{key:\"loadItemsImmediately\",value:function(e){var t=this,s=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];e.forEach(function(e){switch(e.nodeName){case\"IMG\":!0===s&&t.preloadImage(e),t.applyImage(e);break;default:return}})}},{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,s){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){switch(t.target.nodeName){case\"IMG\":t.intersectionRatio>s.thresholds[0]&&t.intersectionRatio<s.thresholds[1]?e.preloadImage(t.target):t.intersectionRatio>s.thresholds[1]&&(e.itemsCount--,e.applyImage(t.target),e.observer.unobserve(t.target));break;default:return}})};this.itemList&&(this.itemsCount=this.itemList.length,\"loading\"in HTMLImageElement.prototype?this.loadItemsImmediately(this.itemList,!1):\"IntersectionObserver\"in window?(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){t.classList.contains(\"dcf-lazy-loaded\")||e.observer.observe(t)})):this.loadItemsImmediately(this.itemList))}}]),e}();
//# sourceMappingURL=dcf-lazyLoad.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var s=0;s<t.length;s++){var a=t[s];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(t,s,a){return s&&e(t.prototype,s),a&&e(t,a),t}}(),DCFLazyLoad=function(){function e(t,s,a){_classCallCheck(this,e),this.itemList=t,this.observerConfig=s,this.classNames=a}return _createClass(e,[{key:\"pxTOvw\",value:function(e){var t=document.documentElement,s=document.getElementsByTagName(\"body\")[0];return 100*e/(window.innerWidth||t.clientWidth||s.clientWidth)+\"vw\"}},{key:\"applyImage\",value:function(e){var t=e.dataset.src,s=e.dataset.srcset||null,a=null;t&&(\"PICTURE\"===e.parentNode.nodeName?(this.applyPicture(e.parentNode),a=e.dataset.sizes||this.pxTOvw(e.parentNode.parentElement.clientWidth)):a=e.dataset.sizes||this.pxTOvw(e.parentElement.clientWidth),e.classList.add(\"dcf-lazy-loaded\"),e.classList.remove(\"dcf-lazy-load\"),t&&(e.src=t,e.removeAttribute(\"data-src\")),s&&(e.srcset=s,e.removeAttribute(\"data-srcset\")),a&&(e.sizes=a,e.removeAttribute(\"data-sizes\")),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}))}},{key:\"fetchImage\",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,s=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return new Promise(function(a,n){var i=new Image;e&&(i.src=e),t&&(i.srcset=t),s&&(i.sizes=s),i.onload=a,i.onerror=n}).catch(function(){})}},{key:\"preloadImage\",value:function(e){var t=e.dataset.src,s=e.dataset.srcset,a=e.dataset.sizes||null,n=null;if(t)try{n=this.fetchImage(t,s,a)}catch(e){}return n}},{key:\"applyPicture\",value:function(e){var t=this,s=e.getElementsByTagName(\"SOURCE\");Array.from(s).forEach(function(s){var a=s.dataset.srcset||null,n=s.dataset.sizes||t.pxTOvw(e.parentElement.clientWidth);a&&(s.srcset=a,s.removeAttribute(\"data-srcset\"),n&&(s.sizes=n,s.removeAttribute(\"data-sizes\")))})}},{key:\"loadItemsImmediately\",value:function(e){var t=this,s=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];e.forEach(function(e){switch(e.nodeName){case\"IMG\":!0===s&&t.preloadImage(e),t.applyImage(e);break;default:return}})}},{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,s){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){switch(t.target.nodeName){case\"IMG\":t.intersectionRatio>s.thresholds[0]&&t.intersectionRatio<s.thresholds[1]?e.preloadImage(t.target):t.intersectionRatio>s.thresholds[1]&&(e.itemsCount--,e.applyImage(t.target),e.observer.unobserve(t.target));break;default:return}})};this.itemList&&(this.itemsCount=this.itemList.length,\"loading\"in HTMLImageElement.prototype?this.loadItemsImmediately(this.itemList,!1):\"IntersectionObserver\"in window?(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){t.classList.contains(\"dcf-lazy-loaded\")||e.observer.observe(t)})):this.loadItemsImmediately(this.itemList))}}]),e}();
//# sourceMappingURL=dcf-lazyLoad.js.map", "wdn/templates_5.1/js/compressed/dcf-lazyLoad.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/dcf-lazyLoad.js");
    }
}
