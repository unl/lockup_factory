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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/labelPlugin/labelPlugin.js */
class __TwigTemplate_6d8bcfb83bdcba44944f432f67038892 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/labelPlugin/labelPlugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/labelPlugin/labelPlugin.js"));

        // line 1
        echo "!function(t,e){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=e():\"function\"==typeof define&&define.amd?define(e):t.labelPlugin=e()}(this,function(){\"use strict\";function t(){return function(t){return{onReady:function(){var e=t.input.id;e&&(t.mobileInput?(t.input.removeAttribute(\"id\"),t.mobileInput.id=e):t.altInput&&(t.input.removeAttribute(\"id\"),t.altInput.id=e))}}}}return t});
//# sourceMappingURL=labelPlugin.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/labelPlugin/labelPlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t,e){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=e():\"function\"==typeof define&&define.amd?define(e):t.labelPlugin=e()}(this,function(){\"use strict\";function t(){return function(t){return{onReady:function(){var e=t.input.id;e&&(t.mobileInput?(t.input.removeAttribute(\"id\"),t.mobileInput.id=e):t.altInput&&(t.input.removeAttribute(\"id\"),t.altInput.id=e))}}}}return t});
//# sourceMappingURL=labelPlugin.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/labelPlugin/labelPlugin.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/labelPlugin/labelPlugin.js");
    }
}
