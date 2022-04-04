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

/* wdn/templates_5.3/js/compressed/plugins/gsap/ScrollToPlugin.min.js */
class __TwigTemplate_e025d4a65c6d4af306851ba1eb67cfdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/ScrollToPlugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/ScrollToPlugin.min.js"));

        // line 1
        echo "!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function t(){return\"undefined\"!=typeof window}function o(){return u||t()&&(u=window.gsap)&&u.registerPlugin&&u}function n(e){return\"string\"==typeof e}function l(e){return\"function\"==typeof e}function r(e,t){var o=\"x\"===t?\"Width\":\"Height\",n=\"scroll\"+o,l=\"client\"+o;return e===a||e===y||e===d?Math.max(y[n],d[n])-(a[\"inner\"+o]||y[l]||d[l]):e[n]-e[\"offset\"+o]}function i(e,t){var o=\"scroll\"+(\"x\"===t?\"Left\":\"Top\");return e===a&&(null!=e.pageXOffset?o=\"page\"+t.toUpperCase()+\"Offset\":e=null!=y[o]?y:d),function(){return e[o]}}function s(e,t){if(!(e=x(e)[0])||!e.getBoundingClientRect)return console.warn(\"scrollTo target doesn't exist. Using 0\")||{x:0,y:0};var o=e.getBoundingClientRect(),n=!t||t===a||t===d,l=n?{top:y.clientTop-(a.pageYOffset||y.scrollTop||d.scrollTop||0),left:y.clientLeft-(a.pageXOffset||y.scrollLeft||d.scrollLeft||0)}:t.getBoundingClientRect(),r={x:o.left-l.left,y:o.top-l.top};return!n&&t&&(r.x+=i(t,\"x\")(),r.y+=i(t,\"y\")()),r}function p(e,t,o,l,i){return isNaN(e)||\"object\"==typeof e?n(e)&&\"=\"===e.charAt(1)?parseFloat(e.substr(2))*(\"-\"===e.charAt(0)?-1:1)+l-i:\"max\"===e?r(t,o)-i:Math.min(r(t,o),s(e,t)[o]-i):parseFloat(e)-i}function f(){u=o(),t()&&u&&document.body&&(a=window,d=document.body,y=document.documentElement,x=u.utils.toArray,u.config({autoKillThreshold:7}),g=u.config(),c=1)}var u,c,a,y,d,x,g,T={version:\"3.7.1\",name:\"scrollTo\",rawVars:1,register:function(e){u=e,f()},init:function(e,t,o,r,s){c||f();var y=this,d=u.getProperty(e,\"scrollSnapType\");y.isWin=e===a,y.target=e,y.tween=o,t=function(e,t,o,r){if(l(e)&&(e=e(t,o,r)),\"object\"!=typeof e)return n(e)&&\"max\"!==e&&\"=\"!==e.charAt(1)?{x:e,y:e}:{y:e};if(e.nodeType)return{y:e,x:e};var i,s={};for(i in e)s[i]=\"onAutoKill\"!==i&&l(e[i])?e[i](t,o,r):e[i];return s}(t,r,e,s),y.vars=t,y.autoKill=!!t.autoKill,y.getX=i(e,\"x\"),y.getY=i(e,\"y\"),y.x=y.xPrev=y.getX(),y.y=y.yPrev=y.getY(),d&&\"none\"!==d&&(y.snap=1,y.snapInline=e.style.scrollSnapType,e.style.scrollSnapType=\"none\"),null!=t.x?(y.add(y,\"x\",y.x,p(t.x,e,\"x\",y.x,t.offsetX||0),r,s),y._props.push(\"scrollTo_x\")):y.skipX=1,null!=t.y?(y.add(y,\"y\",y.y,p(t.y,e,\"y\",y.y,t.offsetY||0),r,s),y._props.push(\"scrollTo_y\")):y.skipY=1},render:function(e,t){for(var o,n,l,i,s,p=t._pt,f=t.target,u=t.tween,c=t.autoKill,y=t.xPrev,d=t.yPrev,x=t.isWin,T=t.snap,v=t.snapInline;p;)p.r(e,p.d),p=p._next;o=x||!t.skipX?t.getX():y,l=(n=x||!t.skipY?t.getY():d)-d,i=o-y,s=g.autoKillThreshold,t.x<0&&(t.x=0),t.y<0&&(t.y=0),c&&(!t.skipX&&(s<i||i<-s)&&o<r(f,\"x\")&&(t.skipX=1),!t.skipY&&(s<l||l<-s)&&n<r(f,\"y\")&&(t.skipY=1),t.skipX&&t.skipY&&(u.kill(),t.vars.onAutoKill&&t.vars.onAutoKill.apply(u,t.vars.onAutoKillParams||[]))),x?a.scrollTo(t.skipX?o:t.x,t.skipY?n:t.y):(t.skipY||(f.scrollTop=t.y),t.skipX||(f.scrollLeft=t.x)),!T||1!==e&&0!==e||(n=f.scrollTop,o=f.scrollLeft,v?f.style.scrollSnapType=v:f.style.removeProperty(\"scroll-snap-type\"),f.scrollTop=n+1,f.scrollLeft=o+1,f.scrollTop=n,f.scrollLeft=o),t.xPrev=t.x,t.yPrev=t.y},kill:function(e){var t=\"scrollTo\"===e;!t&&\"scrollTo_x\"!==e||(this.skipX=1),!t&&\"scrollTo_y\"!==e||(this.skipY=1)}};T.max=r,T.getOffset=s,T.buildGetter=i,o()&&u.registerPlugin(T),e.ScrollToPlugin=T,e.default=T,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=ScrollToPlugin.min.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/gsap/ScrollToPlugin.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function t(){return\"undefined\"!=typeof window}function o(){return u||t()&&(u=window.gsap)&&u.registerPlugin&&u}function n(e){return\"string\"==typeof e}function l(e){return\"function\"==typeof e}function r(e,t){var o=\"x\"===t?\"Width\":\"Height\",n=\"scroll\"+o,l=\"client\"+o;return e===a||e===y||e===d?Math.max(y[n],d[n])-(a[\"inner\"+o]||y[l]||d[l]):e[n]-e[\"offset\"+o]}function i(e,t){var o=\"scroll\"+(\"x\"===t?\"Left\":\"Top\");return e===a&&(null!=e.pageXOffset?o=\"page\"+t.toUpperCase()+\"Offset\":e=null!=y[o]?y:d),function(){return e[o]}}function s(e,t){if(!(e=x(e)[0])||!e.getBoundingClientRect)return console.warn(\"scrollTo target doesn't exist. Using 0\")||{x:0,y:0};var o=e.getBoundingClientRect(),n=!t||t===a||t===d,l=n?{top:y.clientTop-(a.pageYOffset||y.scrollTop||d.scrollTop||0),left:y.clientLeft-(a.pageXOffset||y.scrollLeft||d.scrollLeft||0)}:t.getBoundingClientRect(),r={x:o.left-l.left,y:o.top-l.top};return!n&&t&&(r.x+=i(t,\"x\")(),r.y+=i(t,\"y\")()),r}function p(e,t,o,l,i){return isNaN(e)||\"object\"==typeof e?n(e)&&\"=\"===e.charAt(1)?parseFloat(e.substr(2))*(\"-\"===e.charAt(0)?-1:1)+l-i:\"max\"===e?r(t,o)-i:Math.min(r(t,o),s(e,t)[o]-i):parseFloat(e)-i}function f(){u=o(),t()&&u&&document.body&&(a=window,d=document.body,y=document.documentElement,x=u.utils.toArray,u.config({autoKillThreshold:7}),g=u.config(),c=1)}var u,c,a,y,d,x,g,T={version:\"3.7.1\",name:\"scrollTo\",rawVars:1,register:function(e){u=e,f()},init:function(e,t,o,r,s){c||f();var y=this,d=u.getProperty(e,\"scrollSnapType\");y.isWin=e===a,y.target=e,y.tween=o,t=function(e,t,o,r){if(l(e)&&(e=e(t,o,r)),\"object\"!=typeof e)return n(e)&&\"max\"!==e&&\"=\"!==e.charAt(1)?{x:e,y:e}:{y:e};if(e.nodeType)return{y:e,x:e};var i,s={};for(i in e)s[i]=\"onAutoKill\"!==i&&l(e[i])?e[i](t,o,r):e[i];return s}(t,r,e,s),y.vars=t,y.autoKill=!!t.autoKill,y.getX=i(e,\"x\"),y.getY=i(e,\"y\"),y.x=y.xPrev=y.getX(),y.y=y.yPrev=y.getY(),d&&\"none\"!==d&&(y.snap=1,y.snapInline=e.style.scrollSnapType,e.style.scrollSnapType=\"none\"),null!=t.x?(y.add(y,\"x\",y.x,p(t.x,e,\"x\",y.x,t.offsetX||0),r,s),y._props.push(\"scrollTo_x\")):y.skipX=1,null!=t.y?(y.add(y,\"y\",y.y,p(t.y,e,\"y\",y.y,t.offsetY||0),r,s),y._props.push(\"scrollTo_y\")):y.skipY=1},render:function(e,t){for(var o,n,l,i,s,p=t._pt,f=t.target,u=t.tween,c=t.autoKill,y=t.xPrev,d=t.yPrev,x=t.isWin,T=t.snap,v=t.snapInline;p;)p.r(e,p.d),p=p._next;o=x||!t.skipX?t.getX():y,l=(n=x||!t.skipY?t.getY():d)-d,i=o-y,s=g.autoKillThreshold,t.x<0&&(t.x=0),t.y<0&&(t.y=0),c&&(!t.skipX&&(s<i||i<-s)&&o<r(f,\"x\")&&(t.skipX=1),!t.skipY&&(s<l||l<-s)&&n<r(f,\"y\")&&(t.skipY=1),t.skipX&&t.skipY&&(u.kill(),t.vars.onAutoKill&&t.vars.onAutoKill.apply(u,t.vars.onAutoKillParams||[]))),x?a.scrollTo(t.skipX?o:t.x,t.skipY?n:t.y):(t.skipY||(f.scrollTop=t.y),t.skipX||(f.scrollLeft=t.x)),!T||1!==e&&0!==e||(n=f.scrollTop,o=f.scrollLeft,v?f.style.scrollSnapType=v:f.style.removeProperty(\"scroll-snap-type\"),f.scrollTop=n+1,f.scrollLeft=o+1,f.scrollTop=n,f.scrollLeft=o),t.xPrev=t.x,t.yPrev=t.y},kill:function(e){var t=\"scrollTo\"===e;!t&&\"scrollTo_x\"!==e||(this.skipX=1),!t&&\"scrollTo_y\"!==e||(this.skipY=1)}};T.max=r,T.getOffset=s,T.buildGetter=i,o()&&u.registerPlugin(T),e.ScrollToPlugin=T,e.default=T,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=ScrollToPlugin.min.js.map", "wdn/templates_5.3/js/compressed/plugins/gsap/ScrollToPlugin.min.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/gsap/ScrollToPlugin.min.js");
    }
}
