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

/* wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js */
class __TwigTemplate_f13e8372467d0156ba04977a010ab9e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js"));

        // line 1
        echo "!function(e,o){if(\"function\"==typeof define&&define.amd)define([\"exports\"],o);else if(\"undefined\"!=typeof exports)o(exports);else{var t={exports:{}};o(t.exports),e.bodyScrollLock=t.exports}}(this,function(e){\"use strict\";function o(e){if(Array.isArray(e)){for(var o=0,t=Array(e.length);o<e.length;o++)t[o]=e[o];return t}return Array.from(e)}Object.defineProperty(e,\"__esModule\",{value:!0});var t=!1;if(\"undefined\"!=typeof window){var n={get passive(){t=!0}};window.addEventListener(\"testPassive\",null,n),window.removeEventListener(\"testPassive\",null,n)}var i=\"undefined\"!=typeof window&&window.navigator&&window.navigator.platform&&/iPad|iPhone|iPod|(iPad Simulator)|(iPhone Simulator)|(iPod Simulator)/.test(window.navigator.platform),r=null,d=[],u=!1,l=-1,c=void 0,a=void 0,s=function(e){var o=e||window.event;return o.touches.length>1||(o.preventDefault&&o.preventDefault(),!1)},v=function(e){setTimeout(function(){if(void 0===a){var o=!!e&&!0===e.reserveScrollBarGap,t=window.innerWidth-document.documentElement.clientWidth;o&&t>0&&(a=document.body.style.paddingRight,document.body.style.paddingRight=t+\"px\")}void 0===c&&(c=document.body.style.overflow,document.body.style.overflow=\"hidden\")})},f=function(){setTimeout(function(){void 0!==a&&(document.body.style.paddingRight=a,a=void 0),void 0!==c&&(document.body.style.overflow=c,c=void 0)})},h=function(e){return!!e&&e.scrollHeight-e.scrollTop<=e.clientHeight},m=function(e,o){var t=e.targetTouches[0].clientY-l;return o&&0===o.scrollTop&&t>0?s(e):h(o)&&t<0?s(e):(e.stopPropagation(),!0)};e.disableBodyScroll=function(e,n){i?e&&!d.includes(e)&&(d=[].concat(o(d),[e]),e.ontouchstart=function(e){1===e.targetTouches.length&&(l=e.targetTouches[0].clientY)},e.ontouchmove=function(o){1===o.targetTouches.length&&m(o,e)},u||(document.addEventListener(\"touchmove\",s,t?{passive:!1}:void 0),u=!0)):(v(n),r||(r=e))},e.clearAllBodyScrollLocks=function(){i?(d.forEach(function(e){e.ontouchstart=null,e.ontouchmove=null}),u&&(document.removeEventListener(\"touchmove\",s,t?{passive:!1}:void 0),u=!1),d=[],l=-1):(f(),r=null)},e.enableBodyScroll=function(e){i?(e.ontouchstart=null,e.ontouchmove=null,d=d.filter(function(o){return o!==e}),u&&0===d.length&&(document.removeEventListener(\"touchmove\",s,t?{passive:!1}:void 0),u=!1)):r===e&&(f(),r=null)}});
//# sourceMappingURL=body-scroll-lock.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,o){if(\"function\"==typeof define&&define.amd)define([\"exports\"],o);else if(\"undefined\"!=typeof exports)o(exports);else{var t={exports:{}};o(t.exports),e.bodyScrollLock=t.exports}}(this,function(e){\"use strict\";function o(e){if(Array.isArray(e)){for(var o=0,t=Array(e.length);o<e.length;o++)t[o]=e[o];return t}return Array.from(e)}Object.defineProperty(e,\"__esModule\",{value:!0});var t=!1;if(\"undefined\"!=typeof window){var n={get passive(){t=!0}};window.addEventListener(\"testPassive\",null,n),window.removeEventListener(\"testPassive\",null,n)}var i=\"undefined\"!=typeof window&&window.navigator&&window.navigator.platform&&/iPad|iPhone|iPod|(iPad Simulator)|(iPhone Simulator)|(iPod Simulator)/.test(window.navigator.platform),r=null,d=[],u=!1,l=-1,c=void 0,a=void 0,s=function(e){var o=e||window.event;return o.touches.length>1||(o.preventDefault&&o.preventDefault(),!1)},v=function(e){setTimeout(function(){if(void 0===a){var o=!!e&&!0===e.reserveScrollBarGap,t=window.innerWidth-document.documentElement.clientWidth;o&&t>0&&(a=document.body.style.paddingRight,document.body.style.paddingRight=t+\"px\")}void 0===c&&(c=document.body.style.overflow,document.body.style.overflow=\"hidden\")})},f=function(){setTimeout(function(){void 0!==a&&(document.body.style.paddingRight=a,a=void 0),void 0!==c&&(document.body.style.overflow=c,c=void 0)})},h=function(e){return!!e&&e.scrollHeight-e.scrollTop<=e.clientHeight},m=function(e,o){var t=e.targetTouches[0].clientY-l;return o&&0===o.scrollTop&&t>0?s(e):h(o)&&t<0?s(e):(e.stopPropagation(),!0)};e.disableBodyScroll=function(e,n){i?e&&!d.includes(e)&&(d=[].concat(o(d),[e]),e.ontouchstart=function(e){1===e.targetTouches.length&&(l=e.targetTouches[0].clientY)},e.ontouchmove=function(o){1===o.targetTouches.length&&m(o,e)},u||(document.addEventListener(\"touchmove\",s,t?{passive:!1}:void 0),u=!0)):(v(n),r||(r=e))},e.clearAllBodyScrollLocks=function(){i?(d.forEach(function(e){e.ontouchstart=null,e.ontouchmove=null}),u&&(document.removeEventListener(\"touchmove\",s,t?{passive:!1}:void 0),u=!1),d=[],l=-1):(f(),r=null)},e.enableBodyScroll=function(e){i?(e.ontouchstart=null,e.ontouchmove=null,d=d.filter(function(o){return o!==e}),u&&0===d.length&&(document.removeEventListener(\"touchmove\",s,t?{passive:!1}:void 0),u=!1)):r===e&&(f(),r=null)}});
//# sourceMappingURL=body-scroll-lock.js.map", "wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/plugins/body-scroll-lock.js");
    }
}
