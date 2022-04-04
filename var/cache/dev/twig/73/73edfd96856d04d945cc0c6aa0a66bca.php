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

/* wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js */
class __TwigTemplate_d7e69704da2b6326b6c4eec51ba239b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js"));

        // line 1
        echo "define([\"exports\"],function(e){\"use strict\";function t(e){return r(e)||i(e)||a(e)||n()}function n(){throw new TypeError(\"Invalid attempt to spread non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\")}function a(e,t){if(e){if(\"string\"==typeof e)return o(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return\"Object\"===n&&e.constructor&&(n=e.constructor.name),\"Map\"===n||\"Set\"===n?Array.from(e):\"Arguments\"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array\$/.test(n)?o(e,t):void 0}}function i(e){if(\"undefined\"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e[\"@@iterator\"])return Array.from(e)}function r(e){if(Array.isArray(e))return o(e)}function o(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,a=new Array(t);n<t;n++)a[n]=e[n];return a}function l(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function s(e,t){for(var n=0;n<t.length;n++){var a=t[n];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}function c(e,t,n){return t&&s(e.prototype,t),n&&s(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFBgVideoToggleTheme=e.DCFBgVideoToggle=void 0;var u=function(){function e(){l(this,e),this.toggleBtnClassList=[\"dcf-btn-bg-video-toggle\",\"dcf-btn\",\"dcf-btn-primary\",\"dcf-z-1\",\"dcf-absolute\",\"dcf-pin-bottom\",\"dcf-pin-right\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-mb-3\",\"dcf-mr-3\",\"dcf-h-7\",\"dcf-w-7\",\"dcf-p-0\",\"dcf-circle\"],this.togglePlayBtnInnerHTML='<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498 0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z\"></path></svg>',this.togglePauseBtnInnerHTML='<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5 0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z\"></path></svg>'}return c(e,[{key:\"setThemeVariable\",value:function(e,t){switch(e){case\"toggleBtnClassList\":Array.isArray(t)&&(this.toggleBtnClassList=t);break;case\"togglePlayBtnInnerHTML\":\"string\"==typeof t&&(this.togglePlayBtnInnerHTML=t);break;case\"togglePauseBtnInnerHTML\":\"string\"==typeof t&&(this.togglePauseBtnInnerHTML=t)}}}]),e}();e.DCFBgVideoToggleTheme=u;var g=function(){function e(t){l(this,e),this.bgVideos=[],this.theme=t instanceof u?t:new u}return c(e,[{key:\"initialize\",value:function(){var e=this,n=new Event(\"dcfBgVideoToggle\"),a=document.getElementsByClassName(\"dcf-bg-video\");Array.prototype.forEach.call(a,function(a){var i=document.createElement(\"button\");if(e.theme.toggleBtnClassList){var r;(r=i.classList).add.apply(r,t(e.theme.toggleBtnClassList))}i.classList.add(\"dcf-btn-bg-video-toggle\"),e.isPlaying()?(i.setAttribute(\"aria-label\",\"pause background video\"),i.innerHTML=e.theme.togglePauseBtnInnerHTML):(i.setAttribute(\"aria-label\",\"play background video\"),i.innerHTML=e.theme.togglePlayBtnInnerHTML),i.addEventListener(\"click\",function(){e.isPlaying()?(e.pauseAll(),window.localStorage.setItem(\"dcfBgVideoToggleStatus\",e.pausedStatus())):(e.playAll(),window.localStorage.setItem(\"dcfBgVideoToggleStatus\",e.playStatus())),window.dispatchEvent(n)}),a.append(i),window.addEventListener(\"dcfBgVideoToggle\",function(){e.isPlaying()?(i.setAttribute(\"aria-label\",\"pause background video\"),i.innerHTML=e.theme.togglePauseBtnInnerHTML):(i.setAttribute(\"aria-label\",\"play background video\"),i.innerHTML=e.theme.togglePlayBtnInnerHTML)})});var i=document.getElementsByTagName(\"video\");Array.prototype.forEach.call(i,function(t){e.isBgVideo(t)&&e.bgVideos.push(t)}),this.isPlaying()?(this.playAll(),window.localStorage.setItem(\"dcfBgVideoToggleStatus\",this.playStatus())):this.pauseAll()}},{key:\"playStatus\",value:function(){return\"play\"}},{key:\"pausedStatus\",value:function(){return\"paused\"}},{key:\"isPlaying\",value:function(){return window.localStorage.getItem(\"dcfBgVideoToggleStatus\")!==this.pausedStatus()}},{key:\"playAll\",value:function(){Array.prototype.forEach.call(this.bgVideos,function(e){e.play()})}},{key:\"pauseAll\",value:function(){Array.prototype.forEach.call(this.bgVideos,function(e){e.pause()})}},{key:\"isBgVideo\",value:function(e){return e.hasAttribute(\"autoplay\")&&e.hasAttribute(\"muted\")}}]),e}();e.DCFBgVideoToggle=g});
//# sourceMappingURL=dcf-bgVideoToggle.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\"],function(e){\"use strict\";function t(e){return r(e)||i(e)||a(e)||n()}function n(){throw new TypeError(\"Invalid attempt to spread non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\")}function a(e,t){if(e){if(\"string\"==typeof e)return o(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return\"Object\"===n&&e.constructor&&(n=e.constructor.name),\"Map\"===n||\"Set\"===n?Array.from(e):\"Arguments\"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array\$/.test(n)?o(e,t):void 0}}function i(e){if(\"undefined\"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e[\"@@iterator\"])return Array.from(e)}function r(e){if(Array.isArray(e))return o(e)}function o(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,a=new Array(t);n<t;n++)a[n]=e[n];return a}function l(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function s(e,t){for(var n=0;n<t.length;n++){var a=t[n];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}function c(e,t,n){return t&&s(e.prototype,t),n&&s(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFBgVideoToggleTheme=e.DCFBgVideoToggle=void 0;var u=function(){function e(){l(this,e),this.toggleBtnClassList=[\"dcf-btn-bg-video-toggle\",\"dcf-btn\",\"dcf-btn-primary\",\"dcf-z-1\",\"dcf-absolute\",\"dcf-pin-bottom\",\"dcf-pin-right\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-mb-3\",\"dcf-mr-3\",\"dcf-h-7\",\"dcf-w-7\",\"dcf-p-0\",\"dcf-circle\"],this.togglePlayBtnInnerHTML='<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498 0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z\"></path></svg>',this.togglePauseBtnInnerHTML='<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5 0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z\"></path></svg>'}return c(e,[{key:\"setThemeVariable\",value:function(e,t){switch(e){case\"toggleBtnClassList\":Array.isArray(t)&&(this.toggleBtnClassList=t);break;case\"togglePlayBtnInnerHTML\":\"string\"==typeof t&&(this.togglePlayBtnInnerHTML=t);break;case\"togglePauseBtnInnerHTML\":\"string\"==typeof t&&(this.togglePauseBtnInnerHTML=t)}}}]),e}();e.DCFBgVideoToggleTheme=u;var g=function(){function e(t){l(this,e),this.bgVideos=[],this.theme=t instanceof u?t:new u}return c(e,[{key:\"initialize\",value:function(){var e=this,n=new Event(\"dcfBgVideoToggle\"),a=document.getElementsByClassName(\"dcf-bg-video\");Array.prototype.forEach.call(a,function(a){var i=document.createElement(\"button\");if(e.theme.toggleBtnClassList){var r;(r=i.classList).add.apply(r,t(e.theme.toggleBtnClassList))}i.classList.add(\"dcf-btn-bg-video-toggle\"),e.isPlaying()?(i.setAttribute(\"aria-label\",\"pause background video\"),i.innerHTML=e.theme.togglePauseBtnInnerHTML):(i.setAttribute(\"aria-label\",\"play background video\"),i.innerHTML=e.theme.togglePlayBtnInnerHTML),i.addEventListener(\"click\",function(){e.isPlaying()?(e.pauseAll(),window.localStorage.setItem(\"dcfBgVideoToggleStatus\",e.pausedStatus())):(e.playAll(),window.localStorage.setItem(\"dcfBgVideoToggleStatus\",e.playStatus())),window.dispatchEvent(n)}),a.append(i),window.addEventListener(\"dcfBgVideoToggle\",function(){e.isPlaying()?(i.setAttribute(\"aria-label\",\"pause background video\"),i.innerHTML=e.theme.togglePauseBtnInnerHTML):(i.setAttribute(\"aria-label\",\"play background video\"),i.innerHTML=e.theme.togglePlayBtnInnerHTML)})});var i=document.getElementsByTagName(\"video\");Array.prototype.forEach.call(i,function(t){e.isBgVideo(t)&&e.bgVideos.push(t)}),this.isPlaying()?(this.playAll(),window.localStorage.setItem(\"dcfBgVideoToggleStatus\",this.playStatus())):this.pauseAll()}},{key:\"playStatus\",value:function(){return\"play\"}},{key:\"pausedStatus\",value:function(){return\"paused\"}},{key:\"isPlaying\",value:function(){return window.localStorage.getItem(\"dcfBgVideoToggleStatus\")!==this.pausedStatus()}},{key:\"playAll\",value:function(){Array.prototype.forEach.call(this.bgVideos,function(e){e.play()})}},{key:\"pauseAll\",value:function(){Array.prototype.forEach.call(this.bgVideos,function(e){e.pause()})}},{key:\"isBgVideo\",value:function(e){return e.hasAttribute(\"autoplay\")&&e.hasAttribute(\"muted\")}}]),e}();e.DCFBgVideoToggle=g});
//# sourceMappingURL=dcf-bgVideoToggle.js.map", "wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-bgVideoToggle.js");
    }
}
