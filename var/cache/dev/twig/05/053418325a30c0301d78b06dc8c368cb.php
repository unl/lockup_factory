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

/* wdn/templates_5.3/scss/components/_components.nav-local.scss */
class __TwigTemplate_09c29021c771d9944e20dfa14e6c44d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.nav-local.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.nav-local.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / COMPONENTS / NAV: LOCAL
//////////////////////////////////


.unl .dcf-nav-local {
  z-index: 998;
}


.unl .dcf-nav-local a:hover {
  text-decoration: underline;
}


.unl .dcf-nav-local > ul:first-child {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(#{ms(15)}em, 1fr));
}


.unl .dcf-nav-local ul ul {
  margin-top: 0;
}


.unl .dcf-nav-local ul ul > li > a {
  @include pb-2;
  @include pt-2;
}


@include mq(md, max, width) {

  .unl .dcf-nav-local > ul {
    grid-gap: \$length-em-6 \$length-vw-1;
  }

}


@include mq(sm, min, width) {

  .unl .dcf-nav-local > ul:first-child {
    grid-template-columns: repeat(3, 1fr);
  }

}


@include mq(md, min, width) {

  .unl .dcf-nav-local > ul:first-child {
    grid-template-columns: repeat(6, 1fr);
    overflow: hidden;
    width: 100%;
  }


  .unl .dcf-nav-toggle-btn-menu[aria-expanded=\"true\"] ~ .dcf-nav-local > ul {
    overflow: visible;
  }


  .unl .dcf-nav-local > ul > li {
    position: relative;
  }


  .unl .dcf-nav-local li:not(:last-child) {
    margin-right: 0; // TODO: remove after updated in DCF core
  }


  .unl .dcf-nav-local > ul > li > a {
    border-left: 1px solid #a00000;
    height: 100%;
  }


  .unl .dcf-nav-local ul ul {
    @include pb-7;
    width: 100%;
  }


  // Background for open mega menu
  .unl .dcf-nav-local ul ul::before {
    @include bg-scarlet;
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 200vw;
    transform: translateX(-50%);
    z-index: -1;
  }


  .unl .dcf-nav-toggle-btn-menu ~ .dcf-nav-local ul ul  {
    pointer-events: none;
    position: absolute;
    top: 100%;
    visibility: hidden;
  }


  .unl .dcf-nav-toggle-btn-menu[aria-expanded=\"true\"] ~ .dcf-nav-local ul ul  {
    pointer-events: auto;
    visibility: visible;
  }


  // navigation transition to be added later
  .unl .dcf-nav-toggle-btn-menu ~ .dcf-nav-local ul ul:after {
    background-image: linear-gradient(to bottom, #a00000, fade-out(#a00000,1));
    content: '';
    left: 0;
    height: 100%;
    position: absolute;
    top: 0;
    transform: scaleY(0);
    transform-origin: 0 0;
    width: 1px;
    transition: transform 300ms ease-out;
  }


  .unl .dcf-nav-toggle-btn-menu[aria-expanded=\"true\"] ~ .dcf-nav-local ul ul:after {
    transform: scaleY(1);
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.nav-local.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / COMPONENTS / NAV: LOCAL
//////////////////////////////////


.unl .dcf-nav-local {
  z-index: 998;
}


.unl .dcf-nav-local a:hover {
  text-decoration: underline;
}


.unl .dcf-nav-local > ul:first-child {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(#{ms(15)}em, 1fr));
}


.unl .dcf-nav-local ul ul {
  margin-top: 0;
}


.unl .dcf-nav-local ul ul > li > a {
  @include pb-2;
  @include pt-2;
}


@include mq(md, max, width) {

  .unl .dcf-nav-local > ul {
    grid-gap: \$length-em-6 \$length-vw-1;
  }

}


@include mq(sm, min, width) {

  .unl .dcf-nav-local > ul:first-child {
    grid-template-columns: repeat(3, 1fr);
  }

}


@include mq(md, min, width) {

  .unl .dcf-nav-local > ul:first-child {
    grid-template-columns: repeat(6, 1fr);
    overflow: hidden;
    width: 100%;
  }


  .unl .dcf-nav-toggle-btn-menu[aria-expanded=\"true\"] ~ .dcf-nav-local > ul {
    overflow: visible;
  }


  .unl .dcf-nav-local > ul > li {
    position: relative;
  }


  .unl .dcf-nav-local li:not(:last-child) {
    margin-right: 0; // TODO: remove after updated in DCF core
  }


  .unl .dcf-nav-local > ul > li > a {
    border-left: 1px solid #a00000;
    height: 100%;
  }


  .unl .dcf-nav-local ul ul {
    @include pb-7;
    width: 100%;
  }


  // Background for open mega menu
  .unl .dcf-nav-local ul ul::before {
    @include bg-scarlet;
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 200vw;
    transform: translateX(-50%);
    z-index: -1;
  }


  .unl .dcf-nav-toggle-btn-menu ~ .dcf-nav-local ul ul  {
    pointer-events: none;
    position: absolute;
    top: 100%;
    visibility: hidden;
  }


  .unl .dcf-nav-toggle-btn-menu[aria-expanded=\"true\"] ~ .dcf-nav-local ul ul  {
    pointer-events: auto;
    visibility: visible;
  }


  // navigation transition to be added later
  .unl .dcf-nav-toggle-btn-menu ~ .dcf-nav-local ul ul:after {
    background-image: linear-gradient(to bottom, #a00000, fade-out(#a00000,1));
    content: '';
    left: 0;
    height: 100%;
    position: absolute;
    top: 0;
    transform: scaleY(0);
    transform-origin: 0 0;
    width: 1px;
    transition: transform 300ms ease-out;
  }


  .unl .dcf-nav-toggle-btn-menu[aria-expanded=\"true\"] ~ .dcf-nav-local ul ul:after {
    transform: scaleY(1);
  }

}
", "wdn/templates_5.3/scss/components/_components.nav-local.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.nav-local.scss");
    }
}
