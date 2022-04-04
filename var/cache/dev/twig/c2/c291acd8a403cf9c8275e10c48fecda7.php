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

/* wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js */
class __TwigTemplate_541d15185247089f40e2aae522ca9e92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js"));

        // line 1
        echo "!function(e){\"function\"==typeof define&&define.amd?define([\"jquery\"],e):e(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(e){function t(t){var a={},l=/^jQuery\\d+\$/;return e.each(t.attributes,function(e,t){t.specified&&!l.test(t.name)&&(a[t.name]=t.value)}),a}function a(t,a){var l=this,o=e(l);if(l.value===o.attr(\"placeholder\")&&o.hasClass(p.customClass))if(l.value=\"\",o.removeClass(p.customClass),o.data(\"placeholder-password\")){if(o=o.hide().nextAll('input[type=\"password\"]:first').show().attr(\"id\",o.removeAttr(\"id\").data(\"placeholder-id\")),!0===t)return o[0].value=a,a;o.focus()}else l==r()&&l.select()}function l(l){var r,o=this,s=e(o),d=o.id;if(l&&\"blur\"===l.type){if(s.hasClass(p.customClass))return;if(\"password\"===o.type&&(r=s.prevAll('input[type=\"text\"]:first'),r.length>0&&r.is(\":visible\")))return}if(\"\"===o.value){if(\"password\"===o.type){if(!s.data(\"placeholder-textinput\")){try{r=s.clone().prop({type:\"text\"})}catch(a){r=e(\"<input>\").attr(e.extend(t(this),{type:\"text\"}))}r.removeAttr(\"name\").data({\"placeholder-enabled\":!0,\"placeholder-password\":s,\"placeholder-id\":d}).bind(\"focus.placeholder\",a),s.data({\"placeholder-textinput\":r,\"placeholder-id\":d}).before(r)}o.value=\"\",s=s.removeAttr(\"id\").hide().prevAll('input[type=\"text\"]:first').attr(\"id\",s.data(\"placeholder-id\")).show()}else{var n=s.data(\"placeholder-password\");n&&(n[0].value=\"\",s.attr(\"id\",s.data(\"placeholder-id\")).show().nextAll('input[type=\"password\"]:last').hide().removeAttr(\"id\"))}s.addClass(p.customClass),s[0].value=s.attr(\"placeholder\")}else s.removeClass(p.customClass)}function r(){try{return document.activeElement}catch(e){}}var o,s,d=\"[object OperaMini]\"===Object.prototype.toString.call(window.operamini),n=\"placeholder\"in document.createElement(\"input\")&&!d,i=\"placeholder\"in document.createElement(\"textarea\")&&!d,u=e.valHooks,c=e.propHooks,p={};n&&i?(s=e.fn.placeholder=function(){return this},s.input=!0,s.textarea=!0):(s=e.fn.placeholder=function(t){var r={customClass:\"placeholder\"};return p=e.extend({},r,t),this.filter((n?\"textarea\":\":input\")+\"[placeholder]\").not(\".\"+p.customClass).bind({\"focus.placeholder\":a,\"blur.placeholder\":l}).data(\"placeholder-enabled\",!0).trigger(\"blur.placeholder\")},s.input=n,s.textarea=i,o={get:function(t){var a=e(t),l=a.data(\"placeholder-password\");return l?l[0].value:a.data(\"placeholder-enabled\")&&a.hasClass(p.customClass)?\"\":t.value},set:function(t,o){var s,d,n=e(t);return\"\"!==o&&(s=n.data(\"placeholder-textinput\"),d=n.data(\"placeholder-password\"),s?(a.call(s[0],!0,o)||(t.value=o),s[0].value=o):d&&(a.call(t,!0,o)||(d[0].value=o),t.value=o)),n.data(\"placeholder-enabled\")?(\"\"===o?(t.value=o,t!=r()&&l.call(t)):(n.hasClass(p.customClass)&&a.call(t),t.value=o),n):(t.value=o,n)}},n||(u.input=o,c.value=o),i||(u.textarea=o,c.value=o),e(function(){e(document).delegate(\"form\",\"submit.placeholder\",function(){var t=e(\".\"+p.customClass,this).each(function(){a.call(this,!0,\"\")});setTimeout(function(){t.each(l)},10)})}),e(window).bind(\"beforeunload.placeholder\",function(){e(\".\"+p.customClass).each(function(){this.value=\"\"})}))});
//# sourceMappingURL=jquery.placeholder.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e){\"function\"==typeof define&&define.amd?define([\"jquery\"],e):e(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(e){function t(t){var a={},l=/^jQuery\\d+\$/;return e.each(t.attributes,function(e,t){t.specified&&!l.test(t.name)&&(a[t.name]=t.value)}),a}function a(t,a){var l=this,o=e(l);if(l.value===o.attr(\"placeholder\")&&o.hasClass(p.customClass))if(l.value=\"\",o.removeClass(p.customClass),o.data(\"placeholder-password\")){if(o=o.hide().nextAll('input[type=\"password\"]:first').show().attr(\"id\",o.removeAttr(\"id\").data(\"placeholder-id\")),!0===t)return o[0].value=a,a;o.focus()}else l==r()&&l.select()}function l(l){var r,o=this,s=e(o),d=o.id;if(l&&\"blur\"===l.type){if(s.hasClass(p.customClass))return;if(\"password\"===o.type&&(r=s.prevAll('input[type=\"text\"]:first'),r.length>0&&r.is(\":visible\")))return}if(\"\"===o.value){if(\"password\"===o.type){if(!s.data(\"placeholder-textinput\")){try{r=s.clone().prop({type:\"text\"})}catch(a){r=e(\"<input>\").attr(e.extend(t(this),{type:\"text\"}))}r.removeAttr(\"name\").data({\"placeholder-enabled\":!0,\"placeholder-password\":s,\"placeholder-id\":d}).bind(\"focus.placeholder\",a),s.data({\"placeholder-textinput\":r,\"placeholder-id\":d}).before(r)}o.value=\"\",s=s.removeAttr(\"id\").hide().prevAll('input[type=\"text\"]:first').attr(\"id\",s.data(\"placeholder-id\")).show()}else{var n=s.data(\"placeholder-password\");n&&(n[0].value=\"\",s.attr(\"id\",s.data(\"placeholder-id\")).show().nextAll('input[type=\"password\"]:last').hide().removeAttr(\"id\"))}s.addClass(p.customClass),s[0].value=s.attr(\"placeholder\")}else s.removeClass(p.customClass)}function r(){try{return document.activeElement}catch(e){}}var o,s,d=\"[object OperaMini]\"===Object.prototype.toString.call(window.operamini),n=\"placeholder\"in document.createElement(\"input\")&&!d,i=\"placeholder\"in document.createElement(\"textarea\")&&!d,u=e.valHooks,c=e.propHooks,p={};n&&i?(s=e.fn.placeholder=function(){return this},s.input=!0,s.textarea=!0):(s=e.fn.placeholder=function(t){var r={customClass:\"placeholder\"};return p=e.extend({},r,t),this.filter((n?\"textarea\":\":input\")+\"[placeholder]\").not(\".\"+p.customClass).bind({\"focus.placeholder\":a,\"blur.placeholder\":l}).data(\"placeholder-enabled\",!0).trigger(\"blur.placeholder\")},s.input=n,s.textarea=i,o={get:function(t){var a=e(t),l=a.data(\"placeholder-password\");return l?l[0].value:a.data(\"placeholder-enabled\")&&a.hasClass(p.customClass)?\"\":t.value},set:function(t,o){var s,d,n=e(t);return\"\"!==o&&(s=n.data(\"placeholder-textinput\"),d=n.data(\"placeholder-password\"),s?(a.call(s[0],!0,o)||(t.value=o),s[0].value=o):d&&(a.call(t,!0,o)||(d[0].value=o),t.value=o)),n.data(\"placeholder-enabled\")?(\"\"===o?(t.value=o,t!=r()&&l.call(t)):(n.hasClass(p.customClass)&&a.call(t),t.value=o),n):(t.value=o,n)}},n||(u.input=o,c.value=o),i||(u.textarea=o,c.value=o),e(function(){e(document).delegate(\"form\",\"submit.placeholder\",function(){var t=e(\".\"+p.customClass,this).each(function(){a.call(this,!0,\"\")});setTimeout(function(){t.each(l)},10)})}),e(window).bind(\"beforeunload.placeholder\",function(){e(\".\"+p.customClass).each(function(){this.value=\"\"})}))});
//# sourceMappingURL=jquery.placeholder.js.map", "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js");
    }
}
