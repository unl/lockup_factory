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

/* wdn/templates_5.0/js/js-css/modals.scss */
class __TwigTemplate_617736747202dbbec70badc8174d1b1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/modals.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/modals.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


// !Modal
.unl .dcf-modal[aria-hidden=\"true\"] {
  transition: opacity \$timing-fade-out \$easing-fade-out;
}


.unl .dcf-modal[aria-hidden=\"false\"] {
  transition: opacity \$timing-fade-in \$easing-fade-in;
}


// !Modal Wrapper
.unl .dcf-modal-wrapper {
  @include bg-cream;
  max-height: 75vh;
  width: calc(100% - (2 * #{ms(12)}vw)); // Match width of .dcf-wrapper
}


// !Modal Header
.unl .dcf-modal-header {
  @include bg-cream;
}


.unl .dcf-modal-header::after {
  background-image: linear-gradient(\$cream, fade-out(\$cream, 1));
  content: '';
  @include h-4;
  left: 0;
  position: absolute;
  top: 100%;
  width: 100%;
  z-index: 1;
}


// !Modal Content
.unl .dcf-modal-content > *:last-child {
  margin-bottom: 0;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/modals.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


// !Modal
.unl .dcf-modal[aria-hidden=\"true\"] {
  transition: opacity \$timing-fade-out \$easing-fade-out;
}


.unl .dcf-modal[aria-hidden=\"false\"] {
  transition: opacity \$timing-fade-in \$easing-fade-in;
}


// !Modal Wrapper
.unl .dcf-modal-wrapper {
  @include bg-cream;
  max-height: 75vh;
  width: calc(100% - (2 * #{ms(12)}vw)); // Match width of .dcf-wrapper
}


// !Modal Header
.unl .dcf-modal-header {
  @include bg-cream;
}


.unl .dcf-modal-header::after {
  background-image: linear-gradient(\$cream, fade-out(\$cream, 1));
  content: '';
  @include h-4;
  left: 0;
  position: absolute;
  top: 100%;
  width: 100%;
  z-index: 1;
}


// !Modal Content
.unl .dcf-modal-content > *:last-child {
  margin-bottom: 0;
}
", "wdn/templates_5.0/js/js-css/modals.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/modals.scss");
    }
}
