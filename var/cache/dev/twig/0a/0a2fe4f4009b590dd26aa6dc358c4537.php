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

/* wdn/templates_5.3/scss/components/_components.cta.scss */
class __TwigTemplate_9d99d50cdecbb00e0b470cdbbfd8b9a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.cta.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.cta.scss"));

        // line 1
        echo "///////////////////////////
// THEME / COMPONENTS / CTA
///////////////////////////


.unl .dcf-header-global .dcf-list-cta a,
.unl .dcf-header-global .dcf-list-cta a:visited {
  @include cream;
  @include txt-decor-none;
}


.unl .dcf-cta-nav {
  display: grid;
}


@include mq(md, max, width) {

  .unl .dcf-cta-header {
    display: none;
  }

}


@media (min-width: #{ms(24)}em) {

  .unl .dcf-cta-nav {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }

}



@include mq(md, min, width) {

  .unl .dcf-cta-nav {
    display: none;
  }


  .unl .dcf-cta-header {
    display: flex;
    flex-grow: 3;
  }


  // Add arrow above options popover and horizontally center under button text
  .dcf-btn-toggle-cta[aria-pressed=\"true\"]::after {
    border-left: #{ms(-4)}em solid transparent;
    border-right: #{ms(-4)}em solid transparent;
    border-bottom: #{ms(-4)}em solid rgba(36,36,35,.95);
    bottom: -1px;
    content: '';
    display: block;
    @include h-2;
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
    @include w-2;
  }


  .unl .dcf-list-cta {
    box-shadow: 0 1px 2px rgba(0,0,0,.5), 0 1px 10px rgba(0,0,0,.25);
    left: calc(#{ms(0)}em - #{ms(4)}em);
    min-width: #{ms(20)}em;
    top: 100%;
    z-index: 999; // Ensure that the popover has a higher z-index than the local navigation
  }


  .unl .dcf-list-cta a:hover {
    @include txt-decor-hover-on;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.cta.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////
// THEME / COMPONENTS / CTA
///////////////////////////


.unl .dcf-header-global .dcf-list-cta a,
.unl .dcf-header-global .dcf-list-cta a:visited {
  @include cream;
  @include txt-decor-none;
}


.unl .dcf-cta-nav {
  display: grid;
}


@include mq(md, max, width) {

  .unl .dcf-cta-header {
    display: none;
  }

}


@media (min-width: #{ms(24)}em) {

  .unl .dcf-cta-nav {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }

}



@include mq(md, min, width) {

  .unl .dcf-cta-nav {
    display: none;
  }


  .unl .dcf-cta-header {
    display: flex;
    flex-grow: 3;
  }


  // Add arrow above options popover and horizontally center under button text
  .dcf-btn-toggle-cta[aria-pressed=\"true\"]::after {
    border-left: #{ms(-4)}em solid transparent;
    border-right: #{ms(-4)}em solid transparent;
    border-bottom: #{ms(-4)}em solid rgba(36,36,35,.95);
    bottom: -1px;
    content: '';
    display: block;
    @include h-2;
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
    @include w-2;
  }


  .unl .dcf-list-cta {
    box-shadow: 0 1px 2px rgba(0,0,0,.5), 0 1px 10px rgba(0,0,0,.25);
    left: calc(#{ms(0)}em - #{ms(4)}em);
    min-width: #{ms(20)}em;
    top: 100%;
    z-index: 999; // Ensure that the popover has a higher z-index than the local navigation
  }


  .unl .dcf-list-cta a:hover {
    @include txt-decor-hover-on;
  }

}
", "wdn/templates_5.3/scss/components/_components.cta.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.cta.scss");
    }
}
