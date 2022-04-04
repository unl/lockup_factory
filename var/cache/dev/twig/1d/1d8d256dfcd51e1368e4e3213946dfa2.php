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

/* wdn/templates_5.3/scss/mixins/_mixins.fonts.scss */
class __TwigTemplate_a7cdb34efecdac1ebd0910e4fd73b643 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.fonts.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.fonts.scss"));

        // line 1
        echo "/////////////////////////
// THEME / MIXINS / FONTS
/////////////////////////


// Serif
@mixin font-serif-ltd-caps(\$imp:null) {
  font-family: 'Mercury SSm Ltd Caps A', 'Mercury SSm Ltd Caps B', Georgia, serif \$imp;
}


@mixin font-serif-ltd-italic(\$imp:null) {
  font-family: 'Mercury SSm Ltd Italic A', 'Mercury SSm Ltd Italic B', Georgia, serif \$imp;
}


// Sans Serif
@mixin font-sans(\$imp:null) {
  font-family: 'Gotham SSm A', 'Gotham SSm B', Verdana, sans-serif \$imp;
}


// Monospace
@mixin font-mono(\$imp:null) {
  font-family: 'SFMono-Regular', 'Consolas', 'Liberation Mono', 'Menlo', monospace \$imp;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/mixins/_mixins.fonts.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////
// THEME / MIXINS / FONTS
/////////////////////////


// Serif
@mixin font-serif-ltd-caps(\$imp:null) {
  font-family: 'Mercury SSm Ltd Caps A', 'Mercury SSm Ltd Caps B', Georgia, serif \$imp;
}


@mixin font-serif-ltd-italic(\$imp:null) {
  font-family: 'Mercury SSm Ltd Italic A', 'Mercury SSm Ltd Italic B', Georgia, serif \$imp;
}


// Sans Serif
@mixin font-sans(\$imp:null) {
  font-family: 'Gotham SSm A', 'Gotham SSm B', Verdana, sans-serif \$imp;
}


// Monospace
@mixin font-mono(\$imp:null) {
  font-family: 'SFMono-Regular', 'Consolas', 'Liberation Mono', 'Menlo', monospace \$imp;
}
", "wdn/templates_5.3/scss/mixins/_mixins.fonts.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/mixins/_mixins.fonts.scss");
    }
}
