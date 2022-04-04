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

/* wdn/templates_5.3/scss/components/_components.buttons.scss */
class __TwigTemplate_76c4e0225de5a1da065a18dc0585aa9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.buttons.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.buttons.scss"));

        // line 1
        echo "///////////////////////////////
// THEME / COMPONENTS / BUTTONS
///////////////////////////////


.unl .dcf-btn {
  @include txt-sm;
  text-decoration: none;
  transition: background-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off, color \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-btn:hover {
  transition: background-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-btn:focus {
  outline: 3px solid transparent; // https://sarahmhigley.com/writing/whcm-quick-tips/
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


// Visited

.unl a.dcf-btn-primary:visited {
  color: \$color-button-primary;
}


.unl a.dcf-btn-secondary:visited {
  color: \$color-button-secondary;
}


.unl a.dcf-btn-tertiary:visited {
  color: \$color-button-tertiary;
}


.unl a.dcf-btn-inverse-primary:visited {
  color: \$color-button-inverse-primary;
}


.unl a.dcf-btn-inverse-secondary:visited {
  color: \$color-button-inverse-secondary;
}


.unl a.dcf-btn-inverse-tertiary:visited {
  color: \$color-button-inverse-tertiary;
}


// Hover (and Active)

.unl .dcf-btn-primary:not(:disabled):hover,
.unl .dcf-btn-primary:not(:disabled):active {
  background-color: \$bg-color-button-primary-hover;
  border-color: \$border-color-button-primary-hover;
}

.unl .dcf-btn-secondary:not(:disabled):hover,
.unl .dcf-btn-secondary:not(:disabled):active,
.unl .dcf-btn-tertiary:not(:disabled):hover,
.unl .dcf-btn-tertiary:not(:disabled):active {
  background-color: \$bg-color-button-secondary-tertiary-hover;
  color: \$color-button-secondary-tertiary-hover;
}


.unl .dcf-btn-inverse-primary:not(:disabled):hover,
.unl .dcf-btn-inverse-primary:not(:disabled):active {
  background-color: \$bg-color-button-inverse-primary-hover;
  border-color: \$border-color-button-inverse-primary-hover;
}


.unl .dcf-btn-inverse-secondary:not(:disabled):hover,
.unl .dcf-btn-inverse-secondary:not(:disabled):active,
.unl .dcf-btn-inverse-tertiary:not(:disabled):hover,
.unl .dcf-btn-inverse-tertiary:not(:disabled):active {
  background-color: \$bg-color-button-inverse-secondary-tertiary-hover;
  color: \$color-button-inverse-secondary-tertiary-hover;
}


// Focus
.unl .dcf-btn:focus {
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-btn-primary:focus,
.unl .dcf-btn-secondary:focus,
.unl .dcf-btn-tertiary:focus {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
}


.unl .dcf-btn-inverse-primary:focus {
  box-shadow: 0 0 0 3px \$border-color-input-focus, 0 0 0 5px \$bg-color-button-inverse-primary;
}


.unl .dcf-btn-inverse-secondary:focus,
.unl .dcf-btn-inverse-tertiary:focus {
  box-shadow: 0 0 0 3px \$border-color-input-focus, 0 0 0 5px currentColor;
}


// Active
.unl .dcf-btn-primary:active {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-button-primary-hover;
}


.unl .dcf-btn-secondary:active,
.unl .dcf-btn-tertiary:active {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px currentColor;
}


.unl .dcf-btn-inverse-primary:active {
  box-shadow: 0 0 0 3px \$color-hover-light-mode, 0 0 0 5px \$bg-color-button-inverse-primary;
}


.unl .dcf-btn-inverse-secondary:active,
.unl .dcf-btn-inverse-tertiary:active {
  box-shadow: 0 0 0 3px \$color-hover-light-mode, 0 0 0 5px currentColor;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.buttons.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////
// THEME / COMPONENTS / BUTTONS
///////////////////////////////


.unl .dcf-btn {
  @include txt-sm;
  text-decoration: none;
  transition: background-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off, color \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-btn:hover {
  transition: background-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on, color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-btn:focus {
  outline: 3px solid transparent; // https://sarahmhigley.com/writing/whcm-quick-tips/
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


// Visited

.unl a.dcf-btn-primary:visited {
  color: \$color-button-primary;
}


.unl a.dcf-btn-secondary:visited {
  color: \$color-button-secondary;
}


.unl a.dcf-btn-tertiary:visited {
  color: \$color-button-tertiary;
}


.unl a.dcf-btn-inverse-primary:visited {
  color: \$color-button-inverse-primary;
}


.unl a.dcf-btn-inverse-secondary:visited {
  color: \$color-button-inverse-secondary;
}


.unl a.dcf-btn-inverse-tertiary:visited {
  color: \$color-button-inverse-tertiary;
}


// Hover (and Active)

.unl .dcf-btn-primary:not(:disabled):hover,
.unl .dcf-btn-primary:not(:disabled):active {
  background-color: \$bg-color-button-primary-hover;
  border-color: \$border-color-button-primary-hover;
}

.unl .dcf-btn-secondary:not(:disabled):hover,
.unl .dcf-btn-secondary:not(:disabled):active,
.unl .dcf-btn-tertiary:not(:disabled):hover,
.unl .dcf-btn-tertiary:not(:disabled):active {
  background-color: \$bg-color-button-secondary-tertiary-hover;
  color: \$color-button-secondary-tertiary-hover;
}


.unl .dcf-btn-inverse-primary:not(:disabled):hover,
.unl .dcf-btn-inverse-primary:not(:disabled):active {
  background-color: \$bg-color-button-inverse-primary-hover;
  border-color: \$border-color-button-inverse-primary-hover;
}


.unl .dcf-btn-inverse-secondary:not(:disabled):hover,
.unl .dcf-btn-inverse-secondary:not(:disabled):active,
.unl .dcf-btn-inverse-tertiary:not(:disabled):hover,
.unl .dcf-btn-inverse-tertiary:not(:disabled):active {
  background-color: \$bg-color-button-inverse-secondary-tertiary-hover;
  color: \$color-button-inverse-secondary-tertiary-hover;
}


// Focus
.unl .dcf-btn:focus {
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-btn-primary:focus,
.unl .dcf-btn-secondary:focus,
.unl .dcf-btn-tertiary:focus {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
}


.unl .dcf-btn-inverse-primary:focus {
  box-shadow: 0 0 0 3px \$border-color-input-focus, 0 0 0 5px \$bg-color-button-inverse-primary;
}


.unl .dcf-btn-inverse-secondary:focus,
.unl .dcf-btn-inverse-tertiary:focus {
  box-shadow: 0 0 0 3px \$border-color-input-focus, 0 0 0 5px currentColor;
}


// Active
.unl .dcf-btn-primary:active {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-button-primary-hover;
}


.unl .dcf-btn-secondary:active,
.unl .dcf-btn-tertiary:active {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px currentColor;
}


.unl .dcf-btn-inverse-primary:active {
  box-shadow: 0 0 0 3px \$color-hover-light-mode, 0 0 0 5px \$bg-color-button-inverse-primary;
}


.unl .dcf-btn-inverse-secondary:active,
.unl .dcf-btn-inverse-tertiary:active {
  box-shadow: 0 0 0 3px \$color-hover-light-mode, 0 0 0 5px currentColor;
}
", "wdn/templates_5.3/scss/components/_components.buttons.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.buttons.scss");
    }
}
