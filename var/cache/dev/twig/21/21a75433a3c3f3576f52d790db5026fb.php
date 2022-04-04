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

/* wdn/templates_5.3/js/compressed/plugins/headroom.js */
class __TwigTemplate_c14578af9176ca02fa8fff5c102c3be9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/headroom.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/headroom.js"));

        // line 1
        echo "!function(t,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=n():\"function\"==typeof define&&define.amd?define(n):(t=t||self).Headroom=n()}(this,function(){\"use strict\";function t(){return\"undefined\"!=typeof window}function n(t){return function(t){return t&&t.document&&function(t){return 9===t.nodeType}(t.document)}(t)?function(t){var n=t.document,o=n.body,s=n.documentElement;return{scrollHeight:function(){return Math.max(o.scrollHeight,s.scrollHeight,o.offsetHeight,s.offsetHeight,o.clientHeight,s.clientHeight)},height:function(){return t.innerHeight||s.clientHeight||o.clientHeight},scrollY:function(){return void 0!==t.pageYOffset?t.pageYOffset:(s||o.parentNode||o).scrollTop}}}(t):function(t){return{scrollHeight:function(){return Math.max(t.scrollHeight,t.offsetHeight,t.clientHeight)},height:function(){return Math.max(t.offsetHeight,t.clientHeight)},scrollY:function(){return t.scrollTop}}}(t)}function o(t,o,s){function e(){var t=Math.round(a.scrollY()),n=a.height(),e=a.scrollHeight();u.scrollY=t,u.lastScrollY=h,u.direction=h<t?\"down\":\"up\",u.distance=Math.abs(t-h),u.isOutOfBounds=t<0||e<t+n,u.top=t<=o.offset[u.direction],u.bottom=e<=t+n,u.toleranceExceeded=u.distance>o.tolerance[u.direction],s(u),h=t,c=!1}function i(){c||(c=!0,r=requestAnimationFrame(e))}var r,l=function(){var t=!1;try{var n={get passive(){t=!0}};window.addEventListener(\"test\",n,n),window.removeEventListener(\"test\",n,n)}catch(n){t=!1}return t}(),c=!1,a=n(t),h=a.scrollY(),u={},d=!!l&&{passive:!0,capture:!1};return t.addEventListener(\"scroll\",i,d),e(),{destroy:function(){cancelAnimationFrame(r),t.removeEventListener(\"scroll\",i,d)}}}function s(t){return t===Object(t)?t:{down:t,up:t}}function e(t,n){n=n||{},Object.assign(this,e.options,n),this.classes=Object.assign({},e.options.classes,n.classes),this.elem=t,this.tolerance=s(this.tolerance),this.offset=s(this.offset),this.initialised=!1,this.frozen=!1}return e.prototype={constructor:e,init:function(){return e.cutsTheMustard&&!this.initialised&&(this.addClass(\"initial\"),this.initialised=!0,setTimeout(function(t){t.scrollTracker=o(t.scroller,{offset:t.offset,tolerance:t.tolerance},t.update.bind(t))},100,this)),this},destroy:function(){this.initialised=!1,Object.keys(this.classes).forEach(this.removeClass,this),this.scrollTracker.destroy()},unpin:function(){!this.hasClass(\"pinned\")&&this.hasClass(\"unpinned\")||(this.addClass(\"unpinned\"),this.removeClass(\"pinned\"),this.onUnpin&&this.onUnpin.call(this))},pin:function(){this.hasClass(\"unpinned\")&&(this.addClass(\"pinned\"),this.removeClass(\"unpinned\"),this.onPin&&this.onPin.call(this))},freeze:function(){this.frozen=!0,this.addClass(\"frozen\")},unfreeze:function(){this.frozen=!1,this.removeClass(\"frozen\")},top:function(){this.hasClass(\"top\")||(this.addClass(\"top\"),this.removeClass(\"notTop\"),this.onTop&&this.onTop.call(this))},notTop:function(){this.hasClass(\"notTop\")||(this.addClass(\"notTop\"),this.removeClass(\"top\"),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){this.hasClass(\"bottom\")||(this.addClass(\"bottom\"),this.removeClass(\"notBottom\"),this.onBottom&&this.onBottom.call(this))},notBottom:function(){this.hasClass(\"notBottom\")||(this.addClass(\"notBottom\"),this.removeClass(\"bottom\"),this.onNotBottom&&this.onNotBottom.call(this))},shouldUnpin:function(t){return\"down\"===t.direction&&!t.top&&t.toleranceExceeded},shouldPin:function(t){return\"up\"===t.direction&&t.toleranceExceeded||t.top},addClass:function(t){this.elem.classList.add.apply(this.elem.classList,this.classes[t].split(\" \"))},removeClass:function(t){this.elem.classList.remove.apply(this.elem.classList,this.classes[t].split(\" \"))},hasClass:function(t){return this.classes[t].split(\" \").every(function(t){return this.classList.contains(t)},this.elem)},update:function(t){t.isOutOfBounds||!0!==this.frozen&&(t.top?this.top():this.notTop(),t.bottom?this.bottom():this.notBottom(),this.shouldUnpin(t)?this.unpin():this.shouldPin(t)&&this.pin())}},e.options={tolerance:{up:0,down:0},offset:0,scroller:t()?window:null,classes:{frozen:\"headroom--frozen\",pinned:\"headroom--pinned\",unpinned:\"headroom--unpinned\",top:\"headroom--top\",notTop:\"headroom--not-top\",bottom:\"headroom--bottom\",notBottom:\"headroom--not-bottom\",initial:\"headroom\"}},e.cutsTheMustard=!!(t()&&function(){}.bind&&\"classList\"in document.documentElement&&Object.assign&&Object.keys&&requestAnimationFrame),e});
//# sourceMappingURL=headroom.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/headroom.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=n():\"function\"==typeof define&&define.amd?define(n):(t=t||self).Headroom=n()}(this,function(){\"use strict\";function t(){return\"undefined\"!=typeof window}function n(t){return function(t){return t&&t.document&&function(t){return 9===t.nodeType}(t.document)}(t)?function(t){var n=t.document,o=n.body,s=n.documentElement;return{scrollHeight:function(){return Math.max(o.scrollHeight,s.scrollHeight,o.offsetHeight,s.offsetHeight,o.clientHeight,s.clientHeight)},height:function(){return t.innerHeight||s.clientHeight||o.clientHeight},scrollY:function(){return void 0!==t.pageYOffset?t.pageYOffset:(s||o.parentNode||o).scrollTop}}}(t):function(t){return{scrollHeight:function(){return Math.max(t.scrollHeight,t.offsetHeight,t.clientHeight)},height:function(){return Math.max(t.offsetHeight,t.clientHeight)},scrollY:function(){return t.scrollTop}}}(t)}function o(t,o,s){function e(){var t=Math.round(a.scrollY()),n=a.height(),e=a.scrollHeight();u.scrollY=t,u.lastScrollY=h,u.direction=h<t?\"down\":\"up\",u.distance=Math.abs(t-h),u.isOutOfBounds=t<0||e<t+n,u.top=t<=o.offset[u.direction],u.bottom=e<=t+n,u.toleranceExceeded=u.distance>o.tolerance[u.direction],s(u),h=t,c=!1}function i(){c||(c=!0,r=requestAnimationFrame(e))}var r,l=function(){var t=!1;try{var n={get passive(){t=!0}};window.addEventListener(\"test\",n,n),window.removeEventListener(\"test\",n,n)}catch(n){t=!1}return t}(),c=!1,a=n(t),h=a.scrollY(),u={},d=!!l&&{passive:!0,capture:!1};return t.addEventListener(\"scroll\",i,d),e(),{destroy:function(){cancelAnimationFrame(r),t.removeEventListener(\"scroll\",i,d)}}}function s(t){return t===Object(t)?t:{down:t,up:t}}function e(t,n){n=n||{},Object.assign(this,e.options,n),this.classes=Object.assign({},e.options.classes,n.classes),this.elem=t,this.tolerance=s(this.tolerance),this.offset=s(this.offset),this.initialised=!1,this.frozen=!1}return e.prototype={constructor:e,init:function(){return e.cutsTheMustard&&!this.initialised&&(this.addClass(\"initial\"),this.initialised=!0,setTimeout(function(t){t.scrollTracker=o(t.scroller,{offset:t.offset,tolerance:t.tolerance},t.update.bind(t))},100,this)),this},destroy:function(){this.initialised=!1,Object.keys(this.classes).forEach(this.removeClass,this),this.scrollTracker.destroy()},unpin:function(){!this.hasClass(\"pinned\")&&this.hasClass(\"unpinned\")||(this.addClass(\"unpinned\"),this.removeClass(\"pinned\"),this.onUnpin&&this.onUnpin.call(this))},pin:function(){this.hasClass(\"unpinned\")&&(this.addClass(\"pinned\"),this.removeClass(\"unpinned\"),this.onPin&&this.onPin.call(this))},freeze:function(){this.frozen=!0,this.addClass(\"frozen\")},unfreeze:function(){this.frozen=!1,this.removeClass(\"frozen\")},top:function(){this.hasClass(\"top\")||(this.addClass(\"top\"),this.removeClass(\"notTop\"),this.onTop&&this.onTop.call(this))},notTop:function(){this.hasClass(\"notTop\")||(this.addClass(\"notTop\"),this.removeClass(\"top\"),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){this.hasClass(\"bottom\")||(this.addClass(\"bottom\"),this.removeClass(\"notBottom\"),this.onBottom&&this.onBottom.call(this))},notBottom:function(){this.hasClass(\"notBottom\")||(this.addClass(\"notBottom\"),this.removeClass(\"bottom\"),this.onNotBottom&&this.onNotBottom.call(this))},shouldUnpin:function(t){return\"down\"===t.direction&&!t.top&&t.toleranceExceeded},shouldPin:function(t){return\"up\"===t.direction&&t.toleranceExceeded||t.top},addClass:function(t){this.elem.classList.add.apply(this.elem.classList,this.classes[t].split(\" \"))},removeClass:function(t){this.elem.classList.remove.apply(this.elem.classList,this.classes[t].split(\" \"))},hasClass:function(t){return this.classes[t].split(\" \").every(function(t){return this.classList.contains(t)},this.elem)},update:function(t){t.isOutOfBounds||!0!==this.frozen&&(t.top?this.top():this.notTop(),t.bottom?this.bottom():this.notBottom(),this.shouldUnpin(t)?this.unpin():this.shouldPin(t)&&this.pin())}},e.options={tolerance:{up:0,down:0},offset:0,scroller:t()?window:null,classes:{frozen:\"headroom--frozen\",pinned:\"headroom--pinned\",unpinned:\"headroom--unpinned\",top:\"headroom--top\",notTop:\"headroom--not-top\",bottom:\"headroom--bottom\",notBottom:\"headroom--not-bottom\",initial:\"headroom\"}},e.cutsTheMustard=!!(t()&&function(){}.bind&&\"classList\"in document.documentElement&&Object.assign&&Object.keys&&requestAnimationFrame),e});
//# sourceMappingURL=headroom.js.map", "wdn/templates_5.3/js/compressed/plugins/headroom.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/headroom.js");
    }
}
