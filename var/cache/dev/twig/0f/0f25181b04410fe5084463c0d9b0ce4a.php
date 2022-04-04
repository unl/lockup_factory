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

/* wdn/templates_5.3/js/compressed/dcf-lazyLoad.js */
class __TwigTemplate_bc2d0db9ba5e618be51d24323066955d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js"));

        // line 1
        echo "define([\"exports\"],function(e){\"use strict\";function t(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function a(e,t){for(var a=0;a<t.length;a++){var s=t[a];s.enumerable=s.enumerable||!1,s.configurable=!0,\"value\"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}function s(e,t,s){return t&&a(e.prototype,t),s&&a(e,s),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFLazyLoad=void 0;var r=function(){function e(a,s,r){t(this,e),this.itemList=a,this.observerConfig=s,this.classNames=r}return s(e,[{key:\"pxTOvw\",value:function(e){var t=document.documentElement,a=document.getElementsByTagName(\"body\")[0];return\"\".concat(100*e/(window.innerWidth||t.clientWidth||a.clientWidth),\"vw\")}},{key:\"applyImage\",value:function(e){var t=e.dataset.src,a=e.dataset.srcset||null,s=null;t&&(\"PICTURE\"===e.parentNode.nodeName?(this.applyPicture(e.parentNode),s=e.dataset.sizes||this.pxTOvw(e.parentNode.parentElement.clientWidth)):s=e.dataset.sizes||this.pxTOvw(e.parentElement.clientWidth),e.classList.add(\"dcf-lazy-loaded\"),e.classList.remove(\"dcf-lazy-load\"),t&&(e.src=t,e.removeAttribute(\"data-src\")),a&&(e.srcset=a,e.removeAttribute(\"data-srcset\")),s&&(e.sizes=s,e.removeAttribute(\"data-sizes\")),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}))}},{key:\"fetchImage\",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return new Promise(function(s,r){var n=new Image;e&&(n.src=e),t&&(n.srcset=t),a&&(n.sizes=a),n.onload=s,n.onerror=r}).catch(function(){})}},{key:\"preloadImage\",value:function(e){var t=e.dataset.src,a=e.dataset.srcset,s=e.dataset.sizes||null,r=null;if(t)try{r=this.fetchImage(t,a,s)}catch(e){}return r}},{key:\"applyPicture\",value:function(e){var t=this,a=e.getElementsByTagName(\"SOURCE\");Array.from(a).forEach(function(a){var s=a.dataset.srcset||null,r=a.dataset.sizes||t.pxTOvw(e.parentElement.clientWidth);s&&(a.srcset=s,a.removeAttribute(\"data-srcset\"),r&&(a.sizes=r,a.removeAttribute(\"data-sizes\")))})}},{key:\"applyVideo\",value:function(e){var t=e.getElementsByTagName(\"SOURCE\"),a=e.dataset.poster||null;Array.from(t).forEach(function(e){var t=e.dataset.src||null;t&&(e.src=t,e.removeAttribute(\"data-src\"))}),a&&(e.poster=a,e.removeAttribute(\"data-poster\")),e.classList.add(\"dcf-lazy-loaded\"),e.classList.remove(\"dcf-lazy-load\"),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}),e.load()}},{key:\"loadItemsImmediately\",value:function(e){var t=this,a=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];e.forEach(function(e){switch(e.nodeName){case\"IMG\":!0===a&&t.preloadImage(e),t.applyImage(e);break;case\"VIDEO\":t.applyVideo(e);break;default:return}})}},{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,a){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){switch(t.target.nodeName){case\"IMG\":t.intersectionRatio>a.thresholds[0]&&t.intersectionRatio<a.thresholds[1]?e.preloadImage(t.target):t.intersectionRatio>a.thresholds[1]&&(e.itemsCount--,e.applyImage(t.target),e.observer.unobserve(t.target));break;case\"VIDEO\":t.intersectionRatio>a.thresholds[1]&&(e.itemsCount--,e.applyVideo(t.target),e.observer.unobserve(t.target));break;default:return}})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window?(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){if(!t.classList.contains(\"dcf-lazy-loaded\"))return\"loading\"in HTMLImageElement.prototype&&\"IMG\"===t.nodeName?(e.itemsCount--,void e.applyImage(t)):void e.observer.observe(t)})):this.loadItemsImmediately(this.itemList,\"loading\"in HTMLImageElement.prototype))}}]),e}();e.DCFLazyLoad=r});
//# sourceMappingURL=dcf-lazyLoad.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\"],function(e){\"use strict\";function t(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function a(e,t){for(var a=0;a<t.length;a++){var s=t[a];s.enumerable=s.enumerable||!1,s.configurable=!0,\"value\"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}function s(e,t,s){return t&&a(e.prototype,t),s&&a(e,s),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFLazyLoad=void 0;var r=function(){function e(a,s,r){t(this,e),this.itemList=a,this.observerConfig=s,this.classNames=r}return s(e,[{key:\"pxTOvw\",value:function(e){var t=document.documentElement,a=document.getElementsByTagName(\"body\")[0];return\"\".concat(100*e/(window.innerWidth||t.clientWidth||a.clientWidth),\"vw\")}},{key:\"applyImage\",value:function(e){var t=e.dataset.src,a=e.dataset.srcset||null,s=null;t&&(\"PICTURE\"===e.parentNode.nodeName?(this.applyPicture(e.parentNode),s=e.dataset.sizes||this.pxTOvw(e.parentNode.parentElement.clientWidth)):s=e.dataset.sizes||this.pxTOvw(e.parentElement.clientWidth),e.classList.add(\"dcf-lazy-loaded\"),e.classList.remove(\"dcf-lazy-load\"),t&&(e.src=t,e.removeAttribute(\"data-src\")),a&&(e.srcset=a,e.removeAttribute(\"data-srcset\")),s&&(e.sizes=s,e.removeAttribute(\"data-sizes\")),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}))}},{key:\"fetchImage\",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return new Promise(function(s,r){var n=new Image;e&&(n.src=e),t&&(n.srcset=t),a&&(n.sizes=a),n.onload=s,n.onerror=r}).catch(function(){})}},{key:\"preloadImage\",value:function(e){var t=e.dataset.src,a=e.dataset.srcset,s=e.dataset.sizes||null,r=null;if(t)try{r=this.fetchImage(t,a,s)}catch(e){}return r}},{key:\"applyPicture\",value:function(e){var t=this,a=e.getElementsByTagName(\"SOURCE\");Array.from(a).forEach(function(a){var s=a.dataset.srcset||null,r=a.dataset.sizes||t.pxTOvw(e.parentElement.clientWidth);s&&(a.srcset=s,a.removeAttribute(\"data-srcset\"),r&&(a.sizes=r,a.removeAttribute(\"data-sizes\")))})}},{key:\"applyVideo\",value:function(e){var t=e.getElementsByTagName(\"SOURCE\"),a=e.dataset.poster||null;Array.from(t).forEach(function(e){var t=e.dataset.src||null;t&&(e.src=t,e.removeAttribute(\"data-src\"))}),a&&(e.poster=a,e.removeAttribute(\"data-poster\")),e.classList.add(\"dcf-lazy-loaded\"),e.classList.remove(\"dcf-lazy-load\"),this.classNames.length&&this.classNames.forEach(function(t){return e.classList.add(t)}),e.load()}},{key:\"loadItemsImmediately\",value:function(e){var t=this,a=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];e.forEach(function(e){switch(e.nodeName){case\"IMG\":!0===a&&t.preloadImage(e),t.applyImage(e);break;case\"VIDEO\":t.applyVideo(e);break;default:return}})}},{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,a){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){switch(t.target.nodeName){case\"IMG\":t.intersectionRatio>a.thresholds[0]&&t.intersectionRatio<a.thresholds[1]?e.preloadImage(t.target):t.intersectionRatio>a.thresholds[1]&&(e.itemsCount--,e.applyImage(t.target),e.observer.unobserve(t.target));break;case\"VIDEO\":t.intersectionRatio>a.thresholds[1]&&(e.itemsCount--,e.applyVideo(t.target),e.observer.unobserve(t.target));break;default:return}})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window?(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){if(!t.classList.contains(\"dcf-lazy-loaded\"))return\"loading\"in HTMLImageElement.prototype&&\"IMG\"===t.nodeName?(e.itemsCount--,void e.applyImage(t)):void e.observer.observe(t)})):this.loadItemsImmediately(this.itemList,\"loading\"in HTMLImageElement.prototype))}}]),e}();e.DCFLazyLoad=r});
//# sourceMappingURL=dcf-lazyLoad.js.map", "wdn/templates_5.3/js/compressed/dcf-lazyLoad.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-lazyLoad.js");
    }
}