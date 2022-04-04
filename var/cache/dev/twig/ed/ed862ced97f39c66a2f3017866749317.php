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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/scrollPlugin.js */
class __TwigTemplate_ac5f6e909b23420c5f20615287972505 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/scrollPlugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/scrollPlugin.js"));

        // line 1
        echo "!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=n():\"function\"==typeof define&&define.amd?define(n):e.scrollPlugin=n()}(this,function(){\"use strict\";function e(e){return Math.max(-1,Math.min(1,e.wheelDelta||-e.deltaY))}function n(n){return function(t){t.preventDefault();var r=e(t);n.changeMonth(r)}}function t(){return function(e){var t=n(e);return{onReady:function(){e.timeContainer&&e.timeContainer.addEventListener(\"wheel\",r),e.yearElements.forEach(function(e){return e.addEventListener(\"wheel\",r)}),e.monthElements.forEach(function(e){return e.addEventListener(\"wheel\",t)})},onDestroy:function(){e.timeContainer&&e.timeContainer.removeEventListener(\"wheel\",r),e.yearElements.forEach(function(e){return e.removeEventListener(\"wheel\",r)}),e.monthElements.forEach(function(e){return e.removeEventListener(\"wheel\",t)})}}}}var r=function(n){n.preventDefault();var t=new CustomEvent(\"increment\",{bubbles:!0});t.delta=e(n),n.target.dispatchEvent(t)};return t});
//# sourceMappingURL=scrollPlugin.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/scrollPlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=n():\"function\"==typeof define&&define.amd?define(n):e.scrollPlugin=n()}(this,function(){\"use strict\";function e(e){return Math.max(-1,Math.min(1,e.wheelDelta||-e.deltaY))}function n(n){return function(t){t.preventDefault();var r=e(t);n.changeMonth(r)}}function t(){return function(e){var t=n(e);return{onReady:function(){e.timeContainer&&e.timeContainer.addEventListener(\"wheel\",r),e.yearElements.forEach(function(e){return e.addEventListener(\"wheel\",r)}),e.monthElements.forEach(function(e){return e.addEventListener(\"wheel\",t)})},onDestroy:function(){e.timeContainer&&e.timeContainer.removeEventListener(\"wheel\",r),e.yearElements.forEach(function(e){return e.removeEventListener(\"wheel\",r)}),e.monthElements.forEach(function(e){return e.removeEventListener(\"wheel\",t)})}}}}var r=function(n){n.preventDefault();var t=new CustomEvent(\"increment\",{bubbles:!0});t.delta=e(n),n.target.dispatchEvent(t)};return t});
//# sourceMappingURL=scrollPlugin.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/scrollPlugin.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/scrollPlugin.js");
    }
}
