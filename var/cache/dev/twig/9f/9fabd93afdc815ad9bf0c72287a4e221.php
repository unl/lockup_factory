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

/* wdn/templates_4.1/scripts/compressed/qa.js */
class __TwigTemplate_d15c36dac3f6381de8a8d037123329fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/qa.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/qa.js"));

        // line 1
        echo "define([\"jquery\"],function(a){var n=function(n){if(n){var e=parseFloat(n.gpa),t=a('a[href=\"https://webaudit.unl.edu/qa-test/\"]');100===e?t.after('<span class=\"wdn-qa-star wdn-qa-gold wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">100% (gold star)</span>'):e>=90&&t.after('<span class=\"wdn-qa-star wdn-qa-silver wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">90% (silver star)</span>')}},e=function(){var n=a(\"base\");return n.length?n.attr(\"href\"):window.location};setTimeout(function(){a.ajax({url:\"https://webaudit.unl.edu/registry/closest/?format=json&query=\"+encodeURIComponent(e()),timeout:1e3,success:n})},1e3)});
//# sourceMappingURL=qa.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/qa.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"jquery\"],function(a){var n=function(n){if(n){var e=parseFloat(n.gpa),t=a('a[href=\"https://webaudit.unl.edu/qa-test/\"]');100===e?t.after('<span class=\"wdn-qa-star wdn-qa-gold wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">100% (gold star)</span>'):e>=90&&t.after('<span class=\"wdn-qa-star wdn-qa-silver wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">90% (silver star)</span>')}},e=function(){var n=a(\"base\");return n.length?n.attr(\"href\"):window.location};setTimeout(function(){a.ajax({url:\"https://webaudit.unl.edu/registry/closest/?format=json&query=\"+encodeURIComponent(e()),timeout:1e3,success:n})},1e3)});
//# sourceMappingURL=qa.js.map", "wdn/templates_4.1/scripts/compressed/qa.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/qa.js");
    }
}
