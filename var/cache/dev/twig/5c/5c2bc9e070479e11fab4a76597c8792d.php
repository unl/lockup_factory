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

/* wdn/templates_5.2/js/compressed/plugins/headroom.js */
class __TwigTemplate_94acb54850b32062a17bfec87b2171d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/plugins/headroom.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/plugins/headroom.js"));

        // line 1
        echo "!function(t,o){\"use strict\";\"function\"==typeof define&&define.amd?define([],o):\"object\"==typeof exports?module.exports=o():t.Headroom=o()}(this,function(){\"use strict\";function t(t){this.callback=t,this.ticking=!1}function o(t){return t&&\"undefined\"!=typeof window&&(t===window||t.nodeType)}function i(t){if(arguments.length<=0)throw new Error(\"Missing arguments in extend function\");var n,e,s=t||{};for(e=1;e<arguments.length;e++){var r=arguments[e]||{};for(n in r)\"object\"!=typeof s[n]||o(s[n])?s[n]=s[n]||r[n]:s[n]=i(s[n],r[n])}return s}function n(t){return t===Object(t)?t:{down:t,up:t}}function e(t,o){o=i(o,e.options),this.lastKnownScrollY=0,this.elem=t,this.tolerance=n(o.tolerance),this.classes=o.classes,this.offset=o.offset,this.scroller=o.scroller,this.initialised=!1,this.onPin=o.onPin,this.onUnpin=o.onUnpin,this.onTop=o.onTop,this.onNotTop=o.onNotTop,this.onBottom=o.onBottom,this.onNotBottom=o.onNotBottom}var s={bind:!!function(){}.bind,classList:\"classList\"in document.documentElement,rAF:!!(window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame)};return window.requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame,t.prototype={constructor:t,update:function(){this.callback&&this.callback(),this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}},e.prototype={constructor:e,init:function(){if(e.cutsTheMustard)return this.debouncer=new t(this.update.bind(this)),this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this},destroy:function(){var t=this.classes;this.initialised=!1;for(var o in t)t.hasOwnProperty(o)&&this.elem.classList.remove(t[o]);this.scroller.removeEventListener(\"scroll\",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener(\"scroll\",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var t=this.elem.classList,o=this.classes;!t.contains(o.pinned)&&t.contains(o.unpinned)||(t.add(o.unpinned),t.remove(o.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var t=this.elem.classList,o=this.classes;t.contains(o.unpinned)&&(t.remove(o.unpinned),t.add(o.pinned),this.onPin&&this.onPin.call(this))},top:function(){var t=this.elem.classList,o=this.classes;t.contains(o.top)||(t.add(o.top),t.remove(o.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var t=this.elem.classList,o=this.classes;t.contains(o.notTop)||(t.add(o.notTop),t.remove(o.top),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){var t=this.elem.classList,o=this.classes;t.contains(o.bottom)||(t.add(o.bottom),t.remove(o.notBottom),this.onBottom&&this.onBottom.call(this))},notBottom:function(){var t=this.elem.classList,o=this.classes;t.contains(o.notBottom)||(t.add(o.notBottom),t.remove(o.bottom),this.onNotBottom&&this.onNotBottom.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(document.documentElement||document.body.parentNode||document.body).scrollTop},getViewportHeight:function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},getElementPhysicalHeight:function(t){return Math.max(t.offsetHeight,t.clientHeight)},getScrollerPhysicalHeight:function(){return this.scroller===window||this.scroller===document.body?this.getViewportHeight():this.getElementPhysicalHeight(this.scroller)},getDocumentHeight:function(){var t=document.body,o=document.documentElement;return Math.max(t.scrollHeight,o.scrollHeight,t.offsetHeight,o.offsetHeight,t.clientHeight,o.clientHeight)},getElementHeight:function(t){return Math.max(t.scrollHeight,t.offsetHeight,t.clientHeight)},getScrollerHeight:function(){return this.scroller===window||this.scroller===document.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(t){var o=t<0,i=t+this.getScrollerPhysicalHeight()>this.getScrollerHeight();return o||i},toleranceExceeded:function(t,o){return Math.abs(t-this.lastKnownScrollY)>=this.tolerance[o]},shouldUnpin:function(t,o){var i=t>this.lastKnownScrollY,n=t>=this.offset;return i&&n&&o},shouldPin:function(t,o){var i=t<this.lastKnownScrollY,n=t<=this.offset;return i&&o||n},update:function(){var t=this.getScrollY(),o=t>this.lastKnownScrollY?\"down\":\"up\",i=this.toleranceExceeded(t,o);this.isOutOfBounds(t)||(t<=this.offset?this.top():this.notTop(),t+this.getViewportHeight()>=this.getScrollerHeight()?this.bottom():this.notBottom(),this.shouldUnpin(t,i)?this.unpin():this.shouldPin(t,i)&&this.pin(),this.lastKnownScrollY=t)}},e.options={tolerance:{up:0,down:0},offset:0,scroller:window,classes:{pinned:\"headroom--pinned\",unpinned:\"headroom--unpinned\",top:\"headroom--top\",notTop:\"headroom--not-top\",bottom:\"headroom--bottom\",notBottom:\"headroom--not-bottom\",initial:\"headroom\"}},e.cutsTheMustard=void 0!==s&&s.rAF&&s.bind&&s.classList,e});
//# sourceMappingURL=headroom.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/plugins/headroom.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t,o){\"use strict\";\"function\"==typeof define&&define.amd?define([],o):\"object\"==typeof exports?module.exports=o():t.Headroom=o()}(this,function(){\"use strict\";function t(t){this.callback=t,this.ticking=!1}function o(t){return t&&\"undefined\"!=typeof window&&(t===window||t.nodeType)}function i(t){if(arguments.length<=0)throw new Error(\"Missing arguments in extend function\");var n,e,s=t||{};for(e=1;e<arguments.length;e++){var r=arguments[e]||{};for(n in r)\"object\"!=typeof s[n]||o(s[n])?s[n]=s[n]||r[n]:s[n]=i(s[n],r[n])}return s}function n(t){return t===Object(t)?t:{down:t,up:t}}function e(t,o){o=i(o,e.options),this.lastKnownScrollY=0,this.elem=t,this.tolerance=n(o.tolerance),this.classes=o.classes,this.offset=o.offset,this.scroller=o.scroller,this.initialised=!1,this.onPin=o.onPin,this.onUnpin=o.onUnpin,this.onTop=o.onTop,this.onNotTop=o.onNotTop,this.onBottom=o.onBottom,this.onNotBottom=o.onNotBottom}var s={bind:!!function(){}.bind,classList:\"classList\"in document.documentElement,rAF:!!(window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame)};return window.requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame,t.prototype={constructor:t,update:function(){this.callback&&this.callback(),this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}},e.prototype={constructor:e,init:function(){if(e.cutsTheMustard)return this.debouncer=new t(this.update.bind(this)),this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this},destroy:function(){var t=this.classes;this.initialised=!1;for(var o in t)t.hasOwnProperty(o)&&this.elem.classList.remove(t[o]);this.scroller.removeEventListener(\"scroll\",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener(\"scroll\",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var t=this.elem.classList,o=this.classes;!t.contains(o.pinned)&&t.contains(o.unpinned)||(t.add(o.unpinned),t.remove(o.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var t=this.elem.classList,o=this.classes;t.contains(o.unpinned)&&(t.remove(o.unpinned),t.add(o.pinned),this.onPin&&this.onPin.call(this))},top:function(){var t=this.elem.classList,o=this.classes;t.contains(o.top)||(t.add(o.top),t.remove(o.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var t=this.elem.classList,o=this.classes;t.contains(o.notTop)||(t.add(o.notTop),t.remove(o.top),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){var t=this.elem.classList,o=this.classes;t.contains(o.bottom)||(t.add(o.bottom),t.remove(o.notBottom),this.onBottom&&this.onBottom.call(this))},notBottom:function(){var t=this.elem.classList,o=this.classes;t.contains(o.notBottom)||(t.add(o.notBottom),t.remove(o.bottom),this.onNotBottom&&this.onNotBottom.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(document.documentElement||document.body.parentNode||document.body).scrollTop},getViewportHeight:function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},getElementPhysicalHeight:function(t){return Math.max(t.offsetHeight,t.clientHeight)},getScrollerPhysicalHeight:function(){return this.scroller===window||this.scroller===document.body?this.getViewportHeight():this.getElementPhysicalHeight(this.scroller)},getDocumentHeight:function(){var t=document.body,o=document.documentElement;return Math.max(t.scrollHeight,o.scrollHeight,t.offsetHeight,o.offsetHeight,t.clientHeight,o.clientHeight)},getElementHeight:function(t){return Math.max(t.scrollHeight,t.offsetHeight,t.clientHeight)},getScrollerHeight:function(){return this.scroller===window||this.scroller===document.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(t){var o=t<0,i=t+this.getScrollerPhysicalHeight()>this.getScrollerHeight();return o||i},toleranceExceeded:function(t,o){return Math.abs(t-this.lastKnownScrollY)>=this.tolerance[o]},shouldUnpin:function(t,o){var i=t>this.lastKnownScrollY,n=t>=this.offset;return i&&n&&o},shouldPin:function(t,o){var i=t<this.lastKnownScrollY,n=t<=this.offset;return i&&o||n},update:function(){var t=this.getScrollY(),o=t>this.lastKnownScrollY?\"down\":\"up\",i=this.toleranceExceeded(t,o);this.isOutOfBounds(t)||(t<=this.offset?this.top():this.notTop(),t+this.getViewportHeight()>=this.getScrollerHeight()?this.bottom():this.notBottom(),this.shouldUnpin(t,i)?this.unpin():this.shouldPin(t,i)&&this.pin(),this.lastKnownScrollY=t)}},e.options={tolerance:{up:0,down:0},offset:0,scroller:window,classes:{pinned:\"headroom--pinned\",unpinned:\"headroom--unpinned\",top:\"headroom--top\",notTop:\"headroom--not-top\",bottom:\"headroom--bottom\",notBottom:\"headroom--not-bottom\",initial:\"headroom\"}},e.cutsTheMustard=void 0!==s&&s.rAF&&s.bind&&s.classList,e});
//# sourceMappingURL=headroom.js.map", "wdn/templates_5.2/js/compressed/plugins/headroom.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/plugins/headroom.js");
    }
}
