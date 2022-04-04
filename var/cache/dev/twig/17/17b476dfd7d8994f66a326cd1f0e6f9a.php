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

/* wdn/templates_5.3/scss/deprecated/deprecated.bands.scss */
class __TwigTemplate_506cb6c2106343b4ab9a6d463c428c2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.bands.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.bands.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / DEPRECATED / BANDS
/////////////////////////////


.wdn-band {
  left: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  position: relative;
  right: 50%;
  width: 100vw;
}

// Fix for nested bands
.wdn-band .wdn-band,
.wdn-band .dcf-bleed,
.dcf-bleed .wdn-band {
  left: 0;
  margin-left: 0;
  margin-right: 0;
  right: 0;
  width: auto;
}

.wdn-light-neutral-band {
  @include bg-lightest;
}

.wdn-light-triad-band,
.wdn-light-complement-band {
  @include bg-lighter;
}

.wdn-inner-wrapper {
  padding: \$length-em-9 \$length-vw-2;
}

.wdn-inner-padding-sm {
  @include pb-8;
  @include pt-8;
}

.wdn-inner-padding-lg {
  @include pb-10;
  @include pt-10;
}

.wdn-inner-padding-no-top {
  padding-top: 0;
}

.wdn-inner-padding-no-bottom {
  padding-bottom: 0;
}

.wdn-inner-padding-none {
  padding-bottom: 0;
  padding-top: 0;
}

.wdn-stretch {
  max-width: 100%;
  width: 100%;
}

.wdn-center {
  text-align: center;
}


@media only screen and (min-width:60em) {

  .wdn-text-band .wdn-inner-wrapper {
    margin: 0 auto;
    max-width: 37.5rem;
    padding-left: 0;
    padding-right: 0;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.bands.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / DEPRECATED / BANDS
/////////////////////////////


.wdn-band {
  left: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  position: relative;
  right: 50%;
  width: 100vw;
}

// Fix for nested bands
.wdn-band .wdn-band,
.wdn-band .dcf-bleed,
.dcf-bleed .wdn-band {
  left: 0;
  margin-left: 0;
  margin-right: 0;
  right: 0;
  width: auto;
}

.wdn-light-neutral-band {
  @include bg-lightest;
}

.wdn-light-triad-band,
.wdn-light-complement-band {
  @include bg-lighter;
}

.wdn-inner-wrapper {
  padding: \$length-em-9 \$length-vw-2;
}

.wdn-inner-padding-sm {
  @include pb-8;
  @include pt-8;
}

.wdn-inner-padding-lg {
  @include pb-10;
  @include pt-10;
}

.wdn-inner-padding-no-top {
  padding-top: 0;
}

.wdn-inner-padding-no-bottom {
  padding-bottom: 0;
}

.wdn-inner-padding-none {
  padding-bottom: 0;
  padding-top: 0;
}

.wdn-stretch {
  max-width: 100%;
  width: 100%;
}

.wdn-center {
  text-align: center;
}


@media only screen and (min-width:60em) {

  .wdn-text-band .wdn-inner-wrapper {
    margin: 0 auto;
    max-width: 37.5rem;
    padding-left: 0;
    padding-right: 0;
  }

}
", "wdn/templates_5.3/scss/deprecated/deprecated.bands.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.bands.scss");
    }
}
