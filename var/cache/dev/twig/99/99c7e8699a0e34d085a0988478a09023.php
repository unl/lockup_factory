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

/* wdn/templates_5.3/scss/components/_components.forms.scss */
class __TwigTemplate_2c8137d992ba41b7d9586b8d957ca1f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.forms.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.forms.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / COMPONENTS / FORMS
/////////////////////////////


// Labels
.unl .dcf-form label {
  margin-bottom: \$margin-bottom-form-label;
}


// Required
.unl .dcf-required {
  background-color: \$bg-color-required;
  border: 1px solid \$border-color-required;
  border-radius: \$pill;
  display: inline-block;
  @include lh-1;
  margin-left: \$margin-left-required;
  padding: \$padding-top-required \$padding-right-required \$padding-bottom-required \$padding-left-required;
  text-align: center;
  vertical-align: top;
  white-space: nowrap;
}


// Inputs
.unl .dcf-input-text, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]),
.unl .dcf-form textarea {
  transition: border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-input-text:disabled, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]):disabled,
.unl .dcf-form textarea:disabled {
  background-color: \$bg-color-input-disabled;
}


.unl .dcf-input-text:hover, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]):hover,
.unl .dcf-form textarea:hover {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-input-text:focus, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]):focus,
.unl .dcf-form textarea:focus {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


// Input: Control
.unl .dcf-input-control { // TODO: deprecate?
  @include mr-1;
}


// Input: File
.unl .dcf-form input[type=\"file\"] {
  @include rounded;
}

.unl .dcf-form input[type=\"file\"]::-webkit-file-upload-button {
  @include txt-sm;
  @include bold;
  padding: \$padding-top-button \$padding-right-button \$padding-bottom-button \$padding-left-button;
  @include mr-4;
}


// Form Controls Inline Label
.unl .dcf-form-controls-inline label {
  margin-bottom: 0;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.forms.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / COMPONENTS / FORMS
/////////////////////////////


// Labels
.unl .dcf-form label {
  margin-bottom: \$margin-bottom-form-label;
}


// Required
.unl .dcf-required {
  background-color: \$bg-color-required;
  border: 1px solid \$border-color-required;
  border-radius: \$pill;
  display: inline-block;
  @include lh-1;
  margin-left: \$margin-left-required;
  padding: \$padding-top-required \$padding-right-required \$padding-bottom-required \$padding-left-required;
  text-align: center;
  vertical-align: top;
  white-space: nowrap;
}


// Inputs
.unl .dcf-input-text, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]),
.unl .dcf-form textarea {
  transition: border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-input-text:disabled, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]):disabled,
.unl .dcf-form textarea:disabled {
  background-color: \$bg-color-input-disabled;
}


.unl .dcf-input-text:hover, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]):hover,
.unl .dcf-form textarea:hover {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-input-text:focus, // TODO: deprecate?
.unl .dcf-form input:not([type=\"submit\"]):focus,
.unl .dcf-form textarea:focus {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


// Input: Control
.unl .dcf-input-control { // TODO: deprecate?
  @include mr-1;
}


// Input: File
.unl .dcf-form input[type=\"file\"] {
  @include rounded;
}

.unl .dcf-form input[type=\"file\"]::-webkit-file-upload-button {
  @include txt-sm;
  @include bold;
  padding: \$padding-top-button \$padding-right-button \$padding-bottom-button \$padding-left-button;
  @include mr-4;
}


// Form Controls Inline Label
.unl .dcf-form-controls-inline label {
  margin-bottom: 0;
}
", "wdn/templates_5.3/scss/components/_components.forms.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.forms.scss");
    }
}
