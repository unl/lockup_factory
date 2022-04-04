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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/rangePlugin.js */
class __TwigTemplate_394e94ac177bceec96550e17686b8ed5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/rangePlugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/rangePlugin.js"));

        // line 1
        echo "!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=t():\"function\"==typeof define&&define.amd?define(t):e.rangePlugin=t()}(this,function(){\"use strict\";function e(e){return void 0===e&&(e={}),function(t){var n,o,i,u=\"\",a=function(){if(e.input?n=e.input instanceof Element?e.input:window.document.querySelector(e.input):(n=t._input.cloneNode(),n.removeAttribute(\"id\"),n._flatpickr=void 0),n.value){var i=t.parseDate(n.value);i&&t.selectedDates.push(i)}n.setAttribute(\"data-fp-omit\",\"\"),t._bind(n,[\"focus\",\"click\"],function(){t.selectedDates[1]&&(t.latestSelectedDateObj=t.selectedDates[1],t._setHoursFromDate(t.selectedDates[1]),t.jumpToDate(t.selectedDates[1])),o=!0,t.isOpen=!1,t.open(void 0,n)}),t._bind(t._input,[\"focus\",\"click\"],function(e){e.preventDefault(),t.isOpen=!1,t.open()}),t.config.allowInput&&t._bind(n,\"keydown\",function(e){\"Enter\"===e.key&&(t.setDate([t.selectedDates[0],n.value],!0,u),n.click())}),e.input||t._input.parentNode&&t._input.parentNode.insertBefore(n,t._input.nextSibling)},c={onParseConfig:function(){t.config.mode=\"range\",u=t.config.altInput?t.config.altFormat:t.config.dateFormat},onReady:function(){a(),t.config.ignoredFocusElements.push(n),t.config.allowInput?(t._input.removeAttribute(\"readonly\"),n.removeAttribute(\"readonly\")):n.setAttribute(\"readonly\",\"readonly\"),t._bind(t._input,\"focus\",function(){t.latestSelectedDateObj=t.selectedDates[0],t._setHoursFromDate(t.selectedDates[0]),o=!1,t.jumpToDate(t.selectedDates[0])}),t.config.allowInput&&t._bind(t._input,\"keydown\",function(e){\"Enter\"===e.key&&t.setDate([t._input.value,t.selectedDates[1]],!0,u)}),t.setDate(t.selectedDates,!1),c.onValueUpdate(t.selectedDates)},onPreCalendarPosition:function(){o&&(t._positionElement=n,setTimeout(function(){t._positionElement=t._input},0))},onChange:function(){t.selectedDates.length||setTimeout(function(){t.selectedDates.length||(n.value=\"\",i=[])},10),o&&setTimeout(function(){n.focus()},0)},onDestroy:function(){e.input||n.parentNode&&n.parentNode.removeChild(n)},onValueUpdate:function(e){if(n){if(i=!i||e.length>=i.length?e.concat():i,i.length>e.length){var a=e[0],c=o?[i[0],a]:[a,i[1]];t.setDate(c,!1),i=c.concat()}var s=t.selectedDates.map(function(e){return t.formatDate(e,u)}),l=s[0];t._input.value=void 0===l?\"\":l;var d=s[1];n.value=void 0===d?\"\":d}}};return c}}return e});
//# sourceMappingURL=rangePlugin.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/rangePlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=t():\"function\"==typeof define&&define.amd?define(t):e.rangePlugin=t()}(this,function(){\"use strict\";function e(e){return void 0===e&&(e={}),function(t){var n,o,i,u=\"\",a=function(){if(e.input?n=e.input instanceof Element?e.input:window.document.querySelector(e.input):(n=t._input.cloneNode(),n.removeAttribute(\"id\"),n._flatpickr=void 0),n.value){var i=t.parseDate(n.value);i&&t.selectedDates.push(i)}n.setAttribute(\"data-fp-omit\",\"\"),t._bind(n,[\"focus\",\"click\"],function(){t.selectedDates[1]&&(t.latestSelectedDateObj=t.selectedDates[1],t._setHoursFromDate(t.selectedDates[1]),t.jumpToDate(t.selectedDates[1])),o=!0,t.isOpen=!1,t.open(void 0,n)}),t._bind(t._input,[\"focus\",\"click\"],function(e){e.preventDefault(),t.isOpen=!1,t.open()}),t.config.allowInput&&t._bind(n,\"keydown\",function(e){\"Enter\"===e.key&&(t.setDate([t.selectedDates[0],n.value],!0,u),n.click())}),e.input||t._input.parentNode&&t._input.parentNode.insertBefore(n,t._input.nextSibling)},c={onParseConfig:function(){t.config.mode=\"range\",u=t.config.altInput?t.config.altFormat:t.config.dateFormat},onReady:function(){a(),t.config.ignoredFocusElements.push(n),t.config.allowInput?(t._input.removeAttribute(\"readonly\"),n.removeAttribute(\"readonly\")):n.setAttribute(\"readonly\",\"readonly\"),t._bind(t._input,\"focus\",function(){t.latestSelectedDateObj=t.selectedDates[0],t._setHoursFromDate(t.selectedDates[0]),o=!1,t.jumpToDate(t.selectedDates[0])}),t.config.allowInput&&t._bind(t._input,\"keydown\",function(e){\"Enter\"===e.key&&t.setDate([t._input.value,t.selectedDates[1]],!0,u)}),t.setDate(t.selectedDates,!1),c.onValueUpdate(t.selectedDates)},onPreCalendarPosition:function(){o&&(t._positionElement=n,setTimeout(function(){t._positionElement=t._input},0))},onChange:function(){t.selectedDates.length||setTimeout(function(){t.selectedDates.length||(n.value=\"\",i=[])},10),o&&setTimeout(function(){n.focus()},0)},onDestroy:function(){e.input||n.parentNode&&n.parentNode.removeChild(n)},onValueUpdate:function(e){if(n){if(i=!i||e.length>=i.length?e.concat():i,i.length>e.length){var a=e[0],c=o?[i[0],a]:[a,i[1]];t.setDate(c,!1),i=c.concat()}var s=t.selectedDates.map(function(e){return t.formatDate(e,u)}),l=s[0];t._input.value=void 0===l?\"\":l;var d=s[1];n.value=void 0===d?\"\":d}}};return c}}return e});
//# sourceMappingURL=rangePlugin.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/rangePlugin.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/rangePlugin.js");
    }
}
