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

/* wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.vticker.js */
class __TwigTemplate_790746934206153354bf128cb9eb07b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.vticker.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.vticker.js"));

        // line 1
        echo "!function(t){\"function\"==typeof define&&define.amd?define([\"jquery\"],t):t(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(t){var e={speed:700,pause:4e3,showItems:1,mousePause:!0,height:0,animate:!0,margin:0,padding:0,startPaused:!1},i={moveUp:function(t,e){i.animate(t,e,\"up\")},moveDown:function(t,e){i.animate(t,e,\"down\")},animate:function(e,i,a){var n=e.itemHeight,s=e.options,r=e.element,o=r.children(\"ul\"),l=\"up\"===a?\"li:first\":\"li:last\";r.trigger(\"vticker.beforeTick\");var u=o.children(l).clone(!0);if(s.height>0&&(n=o.children(\"li:first\").height()),n+=s.margin+2*s.padding,\"down\"===a&&o.css(\"top\",\"-\"+n+\"px\").prepend(u),i&&i.animate){if(e.animating)return;e.animating=!0;var d=\"up\"===a?{top:\"-=\"+n+\"px\"}:{top:0};o.animate(d,s.speed,function(){t(o).children(l).remove(),t(o).css(\"top\",\"0px\"),e.animating=!1,r.trigger(\"vticker.afterTick\")})}else o.children(l).remove(),o.css(\"top\",\"0px\"),r.trigger(\"vticker.afterTick\");\"up\"===a&&u.appendTo(o)},nextUsePause:function(){var e=t(this).data(\"state\");if(e){var n=e.options;if(!(e.isPaused||e.itemCount<2)){a.next.call(this,{animate:n.animate});var s=this;e.intervalId=setTimeout(function(){i.nextUsePause.call(s)},n.pause)}}},startInterval:function(){var e=t(this).data(\"state\"),a=e.options,n=this;e.intervalId=setTimeout(function(){i.nextUsePause.call(n)},a.pause)},stopInterval:function(){var e=t(this).data(\"state\");e&&(e.intervalId&&clearTimeout(e.intervalId),e.intervalId=void 0)},restartInterval:function(){i.stopInterval.call(this),i.startInterval.call(this)}},a={init:function(n){a.stop.call(this);var s=t.extend({},e),n=t.extend(s,n),r=t(this),o={itemCount:r.children(\"ul\").children(\"li\").length,itemHeight:0,itemMargin:0,element:r,animating:!1,options:n,isPaused:!!n.startPaused,pausedByCode:!1};if(t(this).data(\"state\",o),r.css({overflow:\"hidden\",position:\"relative\"}).children(\"ul\").css({position:\"absolute\",margin:0,padding:0}).children(\"li\").css({margin:n.margin,padding:n.padding}),isNaN(n.height)||0===n.height){r.children(\"ul\").children(\"li\").each(function(){var e=t(this);e.height()>o.itemHeight&&(o.itemHeight=e.height())}),r.children(\"ul\").children(\"li\").each(function(){t(this).height(o.itemHeight)});var l=n.margin+2*n.padding;r.height((o.itemHeight+l)*n.showItems+n.margin)}else r.height(n.height);var u=this;n.startPaused||i.startInterval.call(u),n.mousePause&&r.bind(\"mouseenter\",function(){!0!==o.isPaused&&(o.pausedByCode=!0,i.stopInterval.call(u),a.pause.call(u,!0))}).bind(\"mouseleave\",function(){(!0!==o.isPaused||o.pausedByCode)&&(o.pausedByCode=!1,a.pause.call(u,!1),i.startInterval.call(u))})},pause:function(e){var i=t(this).data(\"state\");if(i){if(i.itemCount<2)return!1;i.isPaused=e;var a=i.element;e?(t(this).addClass(\"paused\"),a.trigger(\"vticker.pause\")):(t(this).removeClass(\"paused\"),a.trigger(\"vticker.resume\"))}},next:function(e){var a=t(this).data(\"state\");if(a){if(a.animating||a.itemCount<2)return!1;i.restartInterval.call(this),i.moveUp(a,e)}},prev:function(e){var a=t(this).data(\"state\");if(a){if(a.animating||a.itemCount<2)return!1;i.restartInterval.call(this),i.moveDown(a,e)}},stop:function(){t(this).data(\"state\")&&i.stopInterval.call(this)},remove:function(){var e=t(this).data(\"state\");if(e){i.stopInterval.call(this);var a=e.element;a.unbind(),a.remove()}}};t.fn.vTicker=function(e){return a[e]?a[e].apply(this,Array.prototype.slice.call(arguments,1)):\"object\"!=typeof e&&e?void t.error(\"Method \"+e+\" does not exist on jQuery.vTicker\"):a.init.apply(this,arguments)}});
//# sourceMappingURL=jquery.vticker.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.vticker.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t){\"function\"==typeof define&&define.amd?define([\"jquery\"],t):t(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(t){var e={speed:700,pause:4e3,showItems:1,mousePause:!0,height:0,animate:!0,margin:0,padding:0,startPaused:!1},i={moveUp:function(t,e){i.animate(t,e,\"up\")},moveDown:function(t,e){i.animate(t,e,\"down\")},animate:function(e,i,a){var n=e.itemHeight,s=e.options,r=e.element,o=r.children(\"ul\"),l=\"up\"===a?\"li:first\":\"li:last\";r.trigger(\"vticker.beforeTick\");var u=o.children(l).clone(!0);if(s.height>0&&(n=o.children(\"li:first\").height()),n+=s.margin+2*s.padding,\"down\"===a&&o.css(\"top\",\"-\"+n+\"px\").prepend(u),i&&i.animate){if(e.animating)return;e.animating=!0;var d=\"up\"===a?{top:\"-=\"+n+\"px\"}:{top:0};o.animate(d,s.speed,function(){t(o).children(l).remove(),t(o).css(\"top\",\"0px\"),e.animating=!1,r.trigger(\"vticker.afterTick\")})}else o.children(l).remove(),o.css(\"top\",\"0px\"),r.trigger(\"vticker.afterTick\");\"up\"===a&&u.appendTo(o)},nextUsePause:function(){var e=t(this).data(\"state\");if(e){var n=e.options;if(!(e.isPaused||e.itemCount<2)){a.next.call(this,{animate:n.animate});var s=this;e.intervalId=setTimeout(function(){i.nextUsePause.call(s)},n.pause)}}},startInterval:function(){var e=t(this).data(\"state\"),a=e.options,n=this;e.intervalId=setTimeout(function(){i.nextUsePause.call(n)},a.pause)},stopInterval:function(){var e=t(this).data(\"state\");e&&(e.intervalId&&clearTimeout(e.intervalId),e.intervalId=void 0)},restartInterval:function(){i.stopInterval.call(this),i.startInterval.call(this)}},a={init:function(n){a.stop.call(this);var s=t.extend({},e),n=t.extend(s,n),r=t(this),o={itemCount:r.children(\"ul\").children(\"li\").length,itemHeight:0,itemMargin:0,element:r,animating:!1,options:n,isPaused:!!n.startPaused,pausedByCode:!1};if(t(this).data(\"state\",o),r.css({overflow:\"hidden\",position:\"relative\"}).children(\"ul\").css({position:\"absolute\",margin:0,padding:0}).children(\"li\").css({margin:n.margin,padding:n.padding}),isNaN(n.height)||0===n.height){r.children(\"ul\").children(\"li\").each(function(){var e=t(this);e.height()>o.itemHeight&&(o.itemHeight=e.height())}),r.children(\"ul\").children(\"li\").each(function(){t(this).height(o.itemHeight)});var l=n.margin+2*n.padding;r.height((o.itemHeight+l)*n.showItems+n.margin)}else r.height(n.height);var u=this;n.startPaused||i.startInterval.call(u),n.mousePause&&r.bind(\"mouseenter\",function(){!0!==o.isPaused&&(o.pausedByCode=!0,i.stopInterval.call(u),a.pause.call(u,!0))}).bind(\"mouseleave\",function(){(!0!==o.isPaused||o.pausedByCode)&&(o.pausedByCode=!1,a.pause.call(u,!1),i.startInterval.call(u))})},pause:function(e){var i=t(this).data(\"state\");if(i){if(i.itemCount<2)return!1;i.isPaused=e;var a=i.element;e?(t(this).addClass(\"paused\"),a.trigger(\"vticker.pause\")):(t(this).removeClass(\"paused\"),a.trigger(\"vticker.resume\"))}},next:function(e){var a=t(this).data(\"state\");if(a){if(a.animating||a.itemCount<2)return!1;i.restartInterval.call(this),i.moveUp(a,e)}},prev:function(e){var a=t(this).data(\"state\");if(a){if(a.animating||a.itemCount<2)return!1;i.restartInterval.call(this),i.moveDown(a,e)}},stop:function(){t(this).data(\"state\")&&i.stopInterval.call(this)},remove:function(){var e=t(this).data(\"state\");if(e){i.stopInterval.call(this);var a=e.element;a.unbind(),a.remove()}}};t.fn.vTicker=function(e){return a[e]?a[e].apply(this,Array.prototype.slice.call(arguments,1)):\"object\"!=typeof e&&e?void t.error(\"Method \"+e+\" does not exist on jQuery.vTicker\"):a.init.apply(this,arguments)}});
//# sourceMappingURL=jquery.vticker.js.map", "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.vticker.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.vticker.js");
    }
}
