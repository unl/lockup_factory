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

/* wdn/templates_5.0/js/compressed/qa.js */
class __TwigTemplate_6c80a6af4d02e178d853b179e9173f64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/qa.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/qa.js"));

        // line 1
        echo "define([\"jquery\"],function(a){var s=function(s){if(s){var t=parseFloat(s.gpa),e=a('a[href=\"https://webaudit.unl.edu/qa-test/\"]');100===t?e.after('<span aria-hidden=\"true\">&nbsp;&starf;</span><span class=\"dcf-sr-only\">100% (gold star)</span>'):t>=90&&e.after('<span aria-hidden=\"true\">&nbsp;&star;</span><span class=\"dcf-sr-only\">90% (silver star)</span>')}},t=function(){var s=a(\"base\");return s.length?s.attr(\"href\"):window.location};setTimeout(function(){a.ajax({url:\"https://webaudit.unl.edu/registry/closest/?format=json&query=\"+encodeURIComponent(t()),timeout:1e3,success:s})},1e3)});
//# sourceMappingURL=qa.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/qa.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"jquery\"],function(a){var s=function(s){if(s){var t=parseFloat(s.gpa),e=a('a[href=\"https://webaudit.unl.edu/qa-test/\"]');100===t?e.after('<span aria-hidden=\"true\">&nbsp;&starf;</span><span class=\"dcf-sr-only\">100% (gold star)</span>'):t>=90&&e.after('<span aria-hidden=\"true\">&nbsp;&star;</span><span class=\"dcf-sr-only\">90% (silver star)</span>')}},t=function(){var s=a(\"base\");return s.length?s.attr(\"href\"):window.location};setTimeout(function(){a.ajax({url:\"https://webaudit.unl.edu/registry/closest/?format=json&query=\"+encodeURIComponent(t()),timeout:1e3,success:s})},1e3)});
//# sourceMappingURL=qa.js.map", "wdn/templates_5.0/js/compressed/qa.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/qa.js");
    }
}
