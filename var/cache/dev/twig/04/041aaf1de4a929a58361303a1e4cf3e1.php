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

/* wdn/templates_5.3/scss/components/_components.datepickers.scss */
class __TwigTemplate_ec0459ecbb98065493a4302eaf4cdb5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.datepickers.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.datepickers.scss"));

        // line 1
        echo "///////////////////////////////////
// THEME / COMPONENTS / DATEPICKERS
///////////////////////////////////


.unl .dcf-datepicker-dialog[aria-hidden=\"true\"] {
  transition: opacity \$transition-duration-fade-out \$transition-timing-fn-fade-out;
}


.unl .dcf-datepicker-dialog[aria-hidden=\"false\"] {
  transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in;
}


.unl .dcf-datepicker-dialog-header {
  border-bottom: 1px solid \$border-color-gray-light;
}


.unl .dcf-datepicker-dialog-calendar td[aria-selected] {
  background-color: \$bg-color-inverse;
  color: \$color-inverse;
}


.unl .dcf-datepicker-dialog-calendar td:not(.disabled):not([tabindex=\"0\"]):not([aria-selected]) {
  transition: background-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, color \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-datepicker-dialog-calendar td:not(.disabled):not([tabindex=\"0\"]):not([aria-selected]):hover {
  transition: background-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-datepicker-dialog-calendar td[tabindex=\"0\"]:not(.disabled),
.unl .dcf-datepicker-dialog-calendar td:not(.disabled):focus {
  outline: 3px solid transparent; // https://sarahmhigley.com/writing/whcm-quick-tips/
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-datepicker-dialog-calendar td[tabindex=\"0\"]:not(.disabled),
.unl .dcf-datepicker-dialog-calendar td:not(.disabled):focus,
.unl .dcf-datepicker-dialog-calendar td:not(.disabled):active {
  box-shadow: 0 0 0 3px \$bg-color-dialog, 0 0 0 5px currentColor;
}


.unl .dcf-datepicker-dialog-calendar td[aria-selected][tabindex=\"0\"] {
  box-shadow: 0 0 0 3px \$bg-color-dialog, 0 0 0 5px \$bg-color-inverse; // Match aria-selected selected background-color
}


.unl .dcf-datepicker-dialog-footer {
  border-top: 1px solid \$border-color-gray-light;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.datepickers.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////
// THEME / COMPONENTS / DATEPICKERS
///////////////////////////////////


.unl .dcf-datepicker-dialog[aria-hidden=\"true\"] {
  transition: opacity \$transition-duration-fade-out \$transition-timing-fn-fade-out;
}


.unl .dcf-datepicker-dialog[aria-hidden=\"false\"] {
  transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in;
}


.unl .dcf-datepicker-dialog-header {
  border-bottom: 1px solid \$border-color-gray-light;
}


.unl .dcf-datepicker-dialog-calendar td[aria-selected] {
  background-color: \$bg-color-inverse;
  color: \$color-inverse;
}


.unl .dcf-datepicker-dialog-calendar td:not(.disabled):not([tabindex=\"0\"]):not([aria-selected]) {
  transition: background-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, color \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-datepicker-dialog-calendar td:not(.disabled):not([tabindex=\"0\"]):not([aria-selected]):hover {
  transition: background-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-datepicker-dialog-calendar td[tabindex=\"0\"]:not(.disabled),
.unl .dcf-datepicker-dialog-calendar td:not(.disabled):focus {
  outline: 3px solid transparent; // https://sarahmhigley.com/writing/whcm-quick-tips/
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-datepicker-dialog-calendar td[tabindex=\"0\"]:not(.disabled),
.unl .dcf-datepicker-dialog-calendar td:not(.disabled):focus,
.unl .dcf-datepicker-dialog-calendar td:not(.disabled):active {
  box-shadow: 0 0 0 3px \$bg-color-dialog, 0 0 0 5px currentColor;
}


.unl .dcf-datepicker-dialog-calendar td[aria-selected][tabindex=\"0\"] {
  box-shadow: 0 0 0 3px \$bg-color-dialog, 0 0 0 5px \$bg-color-inverse; // Match aria-selected selected background-color
}


.unl .dcf-datepicker-dialog-footer {
  border-top: 1px solid \$border-color-gray-light;
}
", "wdn/templates_5.3/scss/components/_components.datepickers.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.datepickers.scss");
    }
}
