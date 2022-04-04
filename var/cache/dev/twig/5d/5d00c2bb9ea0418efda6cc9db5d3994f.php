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

/* wdn/templates_4.1/scripts/compressed/tabs.js */
class __TwigTemplate_21ce6ce36ef6c2cf8a52c9f5df7bbf96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/tabs.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/tabs.js"));

        // line 1
        echo "define([\"jquery\",\"wdn\",\"require\"],function(n,t,e){var s,i=!0,a=/^[a-z][\\w:\\-\\.]*\$/i,l=function(n){return\"#\"+n.replace(/(:|\\.)/g,\"\\\\\$1\")},r=function(n){var t=n.href.split(\"#\");if(!t[1])return!1;var e=window.location.href.split(\"#\")[0],s=document.getElementsByTagName(\"base\")[0];return(e===t[0]||!s||s.href===t[0])&&t[1]},h=function(){return window.location.hash.replace(\"#\",\"\")},o=function(t){var e,s=t.closest(\"ul.wdn_tabs\"),i=t.closest(\"li\").siblings(\".selected\"),a=t.siblings(),l=t.parents(\"li\");n(\"li.selected\",s).removeClass(\"selected\"),n(\"ul\",s).hide(),l.addClass(\"selected\"),(a.length||l.length>1)&&(a.length||(a=t.closest(\"ul\")),a.show()),e=t.closest(\"li\").siblings(\".selected\"),t.trigger(\"tabchanged\",[i,e,s])},c={initialize:function(){n(function(){!1===t.getPluginParam(\"tabs\",\"useHashChange\")&&(i=!1);var u=!1,d=n(\"ul.wdn_tabs\").not(\".disableSwitching\");if(d.on(\"click\",\"a\",function(){var t=n(this),e=r(this);return!e||(o(t),i?(u=!0,h()!=e&&(window.location.hash=e)):c.displayFromHash(e),!1)}),d.length){var f=function(n){return a.test(n)},g=function(t){return f(t)&&n(\".wdn_tabs_content \"+l(t)).length},w=function(t){var e=n();t&&(e=n(l(t)).closest(\".wdn_tabs_content\").prev(\"ul.wdn_tabs\"));var i=d.not(e);s||(s=[],i.each(function(){var t=\"li.selected\";n(t,this).length||(t=\"> li\"),s.push(n(t+\":first a:first\",this)[0])}),s=n(s)),s.each(function(){var t=n(this),e=r(this);e&&f(e)&&(o(t),c.displayFromHash(e))})};if(i){var v=function(){var t=!0;n(window).off(\".wdn_tabs\").on(\"hashchange.wdn_tabs\",function(){var n=h();return!(!n||f(n))||(g(n)?(c.displayFromHash(n,t||!u),t&&(w(n),t=!1),u&&(u=!1),!1):t||\"\"===n?(w(),t=!1,!0):void 0)}),n(window).hashchange()};n.fn.hashchange?v():e([\"plugins/hashchange/jquery.hashchange\"],v)}else{var b=h();g(b)?c.displayFromHash(b,!0):b=\"\",w(b)}}})},displayFromHash:function(t,e){var s=n(l(t));if(s.closest(\".wdn_tabs_content\").children().hide(),s.show().parentsUntil(\".wdn_tabs_content\").show(),s.find(\"ul.slides\").css({height:\"auto\"}),e){var i=n('ul.wdn_tabs li a[href\$=\"'+l(t)+'\"]');i.length&&(o(i.first()),i.get(0).scrollIntoView())}}};return c});
//# sourceMappingURL=tabs.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/tabs.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"jquery\",\"wdn\",\"require\"],function(n,t,e){var s,i=!0,a=/^[a-z][\\w:\\-\\.]*\$/i,l=function(n){return\"#\"+n.replace(/(:|\\.)/g,\"\\\\\$1\")},r=function(n){var t=n.href.split(\"#\");if(!t[1])return!1;var e=window.location.href.split(\"#\")[0],s=document.getElementsByTagName(\"base\")[0];return(e===t[0]||!s||s.href===t[0])&&t[1]},h=function(){return window.location.hash.replace(\"#\",\"\")},o=function(t){var e,s=t.closest(\"ul.wdn_tabs\"),i=t.closest(\"li\").siblings(\".selected\"),a=t.siblings(),l=t.parents(\"li\");n(\"li.selected\",s).removeClass(\"selected\"),n(\"ul\",s).hide(),l.addClass(\"selected\"),(a.length||l.length>1)&&(a.length||(a=t.closest(\"ul\")),a.show()),e=t.closest(\"li\").siblings(\".selected\"),t.trigger(\"tabchanged\",[i,e,s])},c={initialize:function(){n(function(){!1===t.getPluginParam(\"tabs\",\"useHashChange\")&&(i=!1);var u=!1,d=n(\"ul.wdn_tabs\").not(\".disableSwitching\");if(d.on(\"click\",\"a\",function(){var t=n(this),e=r(this);return!e||(o(t),i?(u=!0,h()!=e&&(window.location.hash=e)):c.displayFromHash(e),!1)}),d.length){var f=function(n){return a.test(n)},g=function(t){return f(t)&&n(\".wdn_tabs_content \"+l(t)).length},w=function(t){var e=n();t&&(e=n(l(t)).closest(\".wdn_tabs_content\").prev(\"ul.wdn_tabs\"));var i=d.not(e);s||(s=[],i.each(function(){var t=\"li.selected\";n(t,this).length||(t=\"> li\"),s.push(n(t+\":first a:first\",this)[0])}),s=n(s)),s.each(function(){var t=n(this),e=r(this);e&&f(e)&&(o(t),c.displayFromHash(e))})};if(i){var v=function(){var t=!0;n(window).off(\".wdn_tabs\").on(\"hashchange.wdn_tabs\",function(){var n=h();return!(!n||f(n))||(g(n)?(c.displayFromHash(n,t||!u),t&&(w(n),t=!1),u&&(u=!1),!1):t||\"\"===n?(w(),t=!1,!0):void 0)}),n(window).hashchange()};n.fn.hashchange?v():e([\"plugins/hashchange/jquery.hashchange\"],v)}else{var b=h();g(b)?c.displayFromHash(b,!0):b=\"\",w(b)}}})},displayFromHash:function(t,e){var s=n(l(t));if(s.closest(\".wdn_tabs_content\").children().hide(),s.show().parentsUntil(\".wdn_tabs_content\").show(),s.find(\"ul.slides\").css({height:\"auto\"}),e){var i=n('ul.wdn_tabs li a[href\$=\"'+l(t)+'\"]');i.length&&(o(i.first()),i.get(0).scrollIntoView())}}};return c});
//# sourceMappingURL=tabs.js.map", "wdn/templates_4.1/scripts/compressed/tabs.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/tabs.js");
    }
}
