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

/* wdn/templates_5.3/scss/components/_components.forms-checkboxes-radios.scss */
class __TwigTemplate_f6e527b7670ed3eb536a332033279ded extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.forms-checkboxes-radios.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.forms-checkboxes-radios.scss"));

        // line 1
        echo "///////////////////////////////////////////////////
// THEME / COMPONENTS / FORMS - CHECKBOXES & RADIOS
///////////////////////////////////////////////////


// Custom styled checkboxes https://scottaohara.github.io/a11y_styled_form_controls/src/checkbox/
// and radio buttons https://scottaohara.github.io/a11y_styled_form_controls/src/radio-button/


// Checkbox and radio label
.unl .dcf-input-checkbox label,
.unl .dcf-input-radio label {
  margin-bottom: 0;
}


// Style checkbox and radio input
.unl .dcf-input-checkbox label::before,
.unl .dcf-input-radio label::before {
  transition: border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


// Hover
.unl .dcf-input-checkbox label:hover::before,
.unl .dcf-input-radio label:hover::before,
.unl .dcf-input-checkbox input[type=\"checkbox\"]:hover + label::before {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


// Focus
.unl .dcf-input-checkbox input[type=\"checkbox\"]:focus + label::before,
.unl .dcf-input-radio input[type=\"radio\"]:focus + label::before {
  border-color: \$border-color-input-focus;
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-input-checkbox input[type=\"checkbox\"]:focus + label::after {
  border-left-color: \$border-color-input-focus;
  border-bottom-color: \$border-color-input-focus;
  border-right-color: \$border-color-input-focus;
}


.unl .dcf-input-radio input[type=\"radio\"]:focus + label::after {
  background-color: \$border-color-input-focus; // Match focused input border-color
}


// Disabled
.unl .dcf-input-checkbox input[type=\"checkbox\"]:disabled + label::before,
.unl .dcf-input-radio input[type=\"radio\"]:disabled + label::before {
  background-color: \$bg-color-input-disabled;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.forms-checkboxes-radios.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////////////////////
// THEME / COMPONENTS / FORMS - CHECKBOXES & RADIOS
///////////////////////////////////////////////////


// Custom styled checkboxes https://scottaohara.github.io/a11y_styled_form_controls/src/checkbox/
// and radio buttons https://scottaohara.github.io/a11y_styled_form_controls/src/radio-button/


// Checkbox and radio label
.unl .dcf-input-checkbox label,
.unl .dcf-input-radio label {
  margin-bottom: 0;
}


// Style checkbox and radio input
.unl .dcf-input-checkbox label::before,
.unl .dcf-input-radio label::before {
  transition: border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


// Hover
.unl .dcf-input-checkbox label:hover::before,
.unl .dcf-input-radio label:hover::before,
.unl .dcf-input-checkbox input[type=\"checkbox\"]:hover + label::before {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


// Focus
.unl .dcf-input-checkbox input[type=\"checkbox\"]:focus + label::before,
.unl .dcf-input-radio input[type=\"radio\"]:focus + label::before {
  border-color: \$border-color-input-focus;
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-input-checkbox input[type=\"checkbox\"]:focus + label::after {
  border-left-color: \$border-color-input-focus;
  border-bottom-color: \$border-color-input-focus;
  border-right-color: \$border-color-input-focus;
}


.unl .dcf-input-radio input[type=\"radio\"]:focus + label::after {
  background-color: \$border-color-input-focus; // Match focused input border-color
}


// Disabled
.unl .dcf-input-checkbox input[type=\"checkbox\"]:disabled + label::before,
.unl .dcf-input-radio input[type=\"radio\"]:disabled + label::before {
  background-color: \$bg-color-input-disabled;
}
", "wdn/templates_5.3/scss/components/_components.forms-checkboxes-radios.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.forms-checkboxes-radios.scss");
    }
}
