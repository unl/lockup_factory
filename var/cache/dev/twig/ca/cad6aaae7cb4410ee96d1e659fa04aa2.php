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

/* wdn/templates_4.1/scripts/compressed/randomizer.js.src.js */
class __TwigTemplate_861e124bc530ad08f99c477525063ab4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/randomizer.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/randomizer.js.src.js"));

        // line 1
        echo "define(['jquery', 'wdn'], function(\$, WDN) {
\tvar rndSel = '.wdn_randomizer';
\treturn {
\t\tinitialize : function() {
\t\t\t\$(function() {
\t\t\t\t\$(rndSel).each(function() {
\t\t\t\t\tvar scope = \$(this).children(),
\t\t\t\t\tn = scope.length;

\t\t\t\t\tscope.hide().eq(Math.floor(Math.random() * n)).show();
\t\t\t\t}).removeClass('wdn-fouc-fix');
\t\t\t});
\t\t}
\t};
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/randomizer.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(['jquery', 'wdn'], function(\$, WDN) {
\tvar rndSel = '.wdn_randomizer';
\treturn {
\t\tinitialize : function() {
\t\t\t\$(function() {
\t\t\t\t\$(rndSel).each(function() {
\t\t\t\t\tvar scope = \$(this).children(),
\t\t\t\t\tn = scope.length;

\t\t\t\t\tscope.hide().eq(Math.floor(Math.random() * n)).show();
\t\t\t\t}).removeClass('wdn-fouc-fix');
\t\t\t});
\t\t}
\t};
});
", "wdn/templates_4.1/scripts/compressed/randomizer.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/randomizer.js.src.js");
    }
}
