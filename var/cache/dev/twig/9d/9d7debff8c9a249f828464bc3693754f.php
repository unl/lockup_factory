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

/* wdn/templates_5.3/scss/components/_components.heroes-notch-stripe.scss */
class __TwigTemplate_fc1730fd3835bde9a180f1662050c45f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes-notch-stripe.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes-notch-stripe.scss"));

        // line 1
        echo "////////////////////////////////////////////
// THEME / COMPONENTS / HEROES: NOTCH STRIPE
////////////////////////////////////////////


// Notch Stripe
.unl-hero-notch-stripe .dcf-hero-group-1,
.unl-hero-notch-stripe .dcf-hero-group-2 {
  position: relative;
}


.unl-hero-notch-stripe .dcf-hero-group-1 {
  min-width: 0;
  margin-top: -#{ms(7)}em; // This should equal the height of the breadcrumbs wrapper.
  order: 2;
  width: 100%;
  z-index: 1; // Make hero-group-1 appear in front of hero-group-2.
}


.unl-hero-notch-stripe .dcf-breadcrumbs-wrapper {
  height: #{ms(7)}em; // This should equal the negative margin-top of hero-group-1.
}


.unl-hero-notch-stripe .dcf-breadcrumbs-wrapper,
.unl-hero-notch-stripe .dcf-breadcrumbs {
  display: flex;
  flex-flow: row nowrap;
  min-width: 0;
  position: relative; // For absolutely-positioned pseudo content
}


.unl-hero-notch-stripe .dcf-breadcrumbs-wrapper::after {
  background: linear-gradient(\$bg-color-body 3px, transparent 3px) 0 0 / 2px 100% no-repeat,
              linear-gradient(to top, transparent 2px, \$bg-color-body 2px) 2px 0 / 3px 100% no-repeat,
              linear-gradient(to top, transparent 2px, \$bg-color-body 2px, \$bg-color-body 5px, transparent 5px) 2px 0 / 100% 100% no-repeat;
  content: '';
  flex-grow: 1; // Grow if there aren't enough breadcrumbs to overflow.
  min-width: \$length-vw-2; // Force a minimum width equal to dcf-wrapper padding-right if there are enough breadcrumbs to overflow.
}


.unl-hero-notch-stripe .dcf-breadcrumbs ol {
  align-items: baseline;
  background-image: linear-gradient(\$bg-color-body 3px, transparent 3px, transparent 5px, \$bg-color-body 5px); // Create background including stripe.
  margin-bottom: 0;
  min-width: 0; // Let breadcrumbs shrink if needed.
  @include pt-7;
}


.unl-hero-notch-stripe .dcf-page-title {
  @include bg-cream;
  padding-left: \$length-vw-2; // Add padding to equal the wrapper object's left padding.
  padding-right: \$length-vw-2; // Add padding to equal the wrapper object's right padding.
  @include pt-7;
}


.unl-hero-notch-stripe .dcf-hero-group-2::after {
  // Create gradient scrim
  background-image: linear-gradient(fade-out(\$darkest-gray,1), fade-out(\$darkest-gray,.93) 70%, fade-out(\$darkest-gray,.85));
  bottom: 0;
  content: '';
  height: #{ms(16)}em; // Scrim should be no taller than the minimum height of the 'sm' hero to avoid overlapping the navigation.
  position: absolute;
  width: 100%;
}


@include mq(md, max, width) {

  .unl-hero-notch-stripe .dcf-breadcrumbs::after {
    // Create gradient to overlay breadcrumbs that overflow to the right
    background-image: linear-gradient(to right, fade-out(\$cream,1), fade-out(\$cream,.5) 25%, \$cream);
    content: '';
    height: calc(100% - 5px); // Subtract the combined height of the stripe and transparent space.
    position: absolute;
    right: 0;
    top: 5px; // Position so overlay isn't on top of stripe or transparent space.
    width: \$length-vw-2;
    z-index: 1;
  }

  @media (prefers-color-scheme: dark) {

    .unl-hero-notch-stripe .dcf-breadcrumbs::after {
      background-image: linear-gradient(to right, fade-out(\$darkest-gray,1), fade-out(\$darkest-gray,.5) 25%, \$darkest-gray);
    }

  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.heroes-notch-stripe.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////////////
// THEME / COMPONENTS / HEROES: NOTCH STRIPE
////////////////////////////////////////////


// Notch Stripe
.unl-hero-notch-stripe .dcf-hero-group-1,
.unl-hero-notch-stripe .dcf-hero-group-2 {
  position: relative;
}


.unl-hero-notch-stripe .dcf-hero-group-1 {
  min-width: 0;
  margin-top: -#{ms(7)}em; // This should equal the height of the breadcrumbs wrapper.
  order: 2;
  width: 100%;
  z-index: 1; // Make hero-group-1 appear in front of hero-group-2.
}


.unl-hero-notch-stripe .dcf-breadcrumbs-wrapper {
  height: #{ms(7)}em; // This should equal the negative margin-top of hero-group-1.
}


.unl-hero-notch-stripe .dcf-breadcrumbs-wrapper,
.unl-hero-notch-stripe .dcf-breadcrumbs {
  display: flex;
  flex-flow: row nowrap;
  min-width: 0;
  position: relative; // For absolutely-positioned pseudo content
}


.unl-hero-notch-stripe .dcf-breadcrumbs-wrapper::after {
  background: linear-gradient(\$bg-color-body 3px, transparent 3px) 0 0 / 2px 100% no-repeat,
              linear-gradient(to top, transparent 2px, \$bg-color-body 2px) 2px 0 / 3px 100% no-repeat,
              linear-gradient(to top, transparent 2px, \$bg-color-body 2px, \$bg-color-body 5px, transparent 5px) 2px 0 / 100% 100% no-repeat;
  content: '';
  flex-grow: 1; // Grow if there aren't enough breadcrumbs to overflow.
  min-width: \$length-vw-2; // Force a minimum width equal to dcf-wrapper padding-right if there are enough breadcrumbs to overflow.
}


.unl-hero-notch-stripe .dcf-breadcrumbs ol {
  align-items: baseline;
  background-image: linear-gradient(\$bg-color-body 3px, transparent 3px, transparent 5px, \$bg-color-body 5px); // Create background including stripe.
  margin-bottom: 0;
  min-width: 0; // Let breadcrumbs shrink if needed.
  @include pt-7;
}


.unl-hero-notch-stripe .dcf-page-title {
  @include bg-cream;
  padding-left: \$length-vw-2; // Add padding to equal the wrapper object's left padding.
  padding-right: \$length-vw-2; // Add padding to equal the wrapper object's right padding.
  @include pt-7;
}


.unl-hero-notch-stripe .dcf-hero-group-2::after {
  // Create gradient scrim
  background-image: linear-gradient(fade-out(\$darkest-gray,1), fade-out(\$darkest-gray,.93) 70%, fade-out(\$darkest-gray,.85));
  bottom: 0;
  content: '';
  height: #{ms(16)}em; // Scrim should be no taller than the minimum height of the 'sm' hero to avoid overlapping the navigation.
  position: absolute;
  width: 100%;
}


@include mq(md, max, width) {

  .unl-hero-notch-stripe .dcf-breadcrumbs::after {
    // Create gradient to overlay breadcrumbs that overflow to the right
    background-image: linear-gradient(to right, fade-out(\$cream,1), fade-out(\$cream,.5) 25%, \$cream);
    content: '';
    height: calc(100% - 5px); // Subtract the combined height of the stripe and transparent space.
    position: absolute;
    right: 0;
    top: 5px; // Position so overlay isn't on top of stripe or transparent space.
    width: \$length-vw-2;
    z-index: 1;
  }

  @media (prefers-color-scheme: dark) {

    .unl-hero-notch-stripe .dcf-breadcrumbs::after {
      background-image: linear-gradient(to right, fade-out(\$darkest-gray,1), fade-out(\$darkest-gray,.5) 25%, \$darkest-gray);
    }

  }

}
", "wdn/templates_5.3/scss/components/_components.heroes-notch-stripe.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.heroes-notch-stripe.scss");
    }
}
