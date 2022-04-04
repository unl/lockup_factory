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

/* wdn/templates_5.2/js/js-css/monthwidget.scss */
class __TwigTemplate_151b56f31b32ba3edef92cc1a8ba150b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/monthwidget.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/monthwidget.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


.wp-calendar a {
  text-decoration: none;
}

.wp-calendar th,
.wp-calendar td {
  @include lh-1;
  text-align: center;
  vertical-align: middle;
  width: calc(100% / 7);
}

.wp-calendar th {
  @include bg-lightest;
  @include txt-sm;
  padding: \$length-em-4 0;
}

.wp-calendar td {
  @include bg-white;
  padding: 0;
}

.wp-calendar td > div {
  position: relative;
}

.wp-calendar td > div > a:focus,
.wp-calendar td > div > a:hover {
  box-shadow: 0 0 \$length-em-3 fade-out(\$border-color-light-mode,.25);
}

.wp-calendar td span,
.wp-calendar td a {
  display: block;
  padding: \$length-em-4 0;
}

.wp-calendar td.prev a,
.wp-calendar td.next a {
  @include txt-xs;
  padding: #{ms(3)}em 0;
}

.wp-calendar td.today > div > a {
  outline: 2px solid \$scarlet;
}

.wp-calendar .monthvalue a:focus,
.wp-calendar .monthvalue a:hover,
.wp-calendar .yearvalue a:focus,
.wp-calendar .yearvalue a:hover,
.wp-calendar td .eventContainer a:focus,
.wp-calendar td .eventContainer a:hover {
  text-decoration: underline;
}

.wp-calendar caption {
  @include bg-darker;
  @include txt-xs;
  @include ls-2;
  margin: 0;
  padding: 0;
  text-align: center;
  text-transform: uppercase;
}

.wp-calendar .monthvalue,
.wp-calendar .yearvalue {
  display: inline-block;
  @include pb-4;
  @include pt-4;
}

.wp-calendar caption .prev {
  float: left;
}

.wp-calendar caption .next {
  float: right;
}

.wp-calendar caption a {
  color: \$cream;
}

.wp-calendar caption .prev a,
.wp-calendar caption .next a {
  display: inline-block;
  padding: \$length-em-4 \$length-em-5;
}

.wp-calendar caption .prev a::after,
.wp-calendar caption .next a::before {
  display: inline-block;
  font-family: 'wdn-icon';
  @include txt-xs;
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  line-height: 1;
}

.wp-calendar caption .prev a::after {
  content: '\\e80a';
}

.wp-calendar caption .next a::before {
  content: '\\e808';
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/js-css/monthwidget.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


.wp-calendar a {
  text-decoration: none;
}

.wp-calendar th,
.wp-calendar td {
  @include lh-1;
  text-align: center;
  vertical-align: middle;
  width: calc(100% / 7);
}

.wp-calendar th {
  @include bg-lightest;
  @include txt-sm;
  padding: \$length-em-4 0;
}

.wp-calendar td {
  @include bg-white;
  padding: 0;
}

.wp-calendar td > div {
  position: relative;
}

.wp-calendar td > div > a:focus,
.wp-calendar td > div > a:hover {
  box-shadow: 0 0 \$length-em-3 fade-out(\$border-color-light-mode,.25);
}

.wp-calendar td span,
.wp-calendar td a {
  display: block;
  padding: \$length-em-4 0;
}

.wp-calendar td.prev a,
.wp-calendar td.next a {
  @include txt-xs;
  padding: #{ms(3)}em 0;
}

.wp-calendar td.today > div > a {
  outline: 2px solid \$scarlet;
}

.wp-calendar .monthvalue a:focus,
.wp-calendar .monthvalue a:hover,
.wp-calendar .yearvalue a:focus,
.wp-calendar .yearvalue a:hover,
.wp-calendar td .eventContainer a:focus,
.wp-calendar td .eventContainer a:hover {
  text-decoration: underline;
}

.wp-calendar caption {
  @include bg-darker;
  @include txt-xs;
  @include ls-2;
  margin: 0;
  padding: 0;
  text-align: center;
  text-transform: uppercase;
}

.wp-calendar .monthvalue,
.wp-calendar .yearvalue {
  display: inline-block;
  @include pb-4;
  @include pt-4;
}

.wp-calendar caption .prev {
  float: left;
}

.wp-calendar caption .next {
  float: right;
}

.wp-calendar caption a {
  color: \$cream;
}

.wp-calendar caption .prev a,
.wp-calendar caption .next a {
  display: inline-block;
  padding: \$length-em-4 \$length-em-5;
}

.wp-calendar caption .prev a::after,
.wp-calendar caption .next a::before {
  display: inline-block;
  font-family: 'wdn-icon';
  @include txt-xs;
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  line-height: 1;
}

.wp-calendar caption .prev a::after {
  content: '\\e80a';
}

.wp-calendar caption .next a::before {
  content: '\\e808';
}
", "wdn/templates_5.2/js/js-css/monthwidget.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/js-css/monthwidget.scss");
    }
}
