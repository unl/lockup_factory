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

/* wdn/templates_5.3/scss/components/_components.nav-menu.scss */
class __TwigTemplate_7e0444f4b80308cf64be00bf9f3d893d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.nav-menu.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.nav-menu.scss"));

        // line 1
        echo "/////////////////////////////////
// THEME / COMPONENTS / NAV: MENU
/////////////////////////////////


.unl .dcf-nav-menu li { // TODO: remove after updated in DCF core
  margin-bottom: 0;
}


.unl .dcf-nav-menu-child a,
.unl .dcf-nav-menu-child button {
  display: block;
  @include lh-3;
  padding: #{ms(0)}em #{ms(0)}rem;
}


// TODO: determine focus state styles
.unl .dcf-nav-menu-child a:link,
.unl .dcf-nav-menu-child a:visited,
.unl .dcf-nav-menu-child a:hover,
.unl .dcf-nav-menu-child a:active,
.unl .dcf-nav-menu-child button {
  @include cream;
}


.unl .dcf-nav-menu-child > ul > li > a,
.unl .dcf-nav-menu-child button {
  font-weight: 700;
}


@include mq(md, max, width) {

  .unl .dcf-nav-menu {
    @include bg-overlay-light;
    bottom: #{\$height-mobile-toolbar};
    height: 100vh;
    opacity: 0;
    pointer-events: none;
    position: fixed;
    transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in, visibility 0ms .4s;
    visibility: hidden;
    width: 100%;
    z-index: 998; // Ensure that the z-index is below the modal and nav-toggle-group z-indices
  }


  // Open when parent model is open
  .unl .dcf-nav-menu.dcf-modal-open {
  \topacity: 1;
  \tpointer-events: auto;
    transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in;
  \tvisibility: visible;
  }


  .unl .dcf-nav-menu-child {
    @include bg-scarlet;
    bottom: \$height-mobile-toolbar;
    height: 43vh;
    @include overflow-y-auto;
    padding-left: \$length-vw-2;
    padding-right: \$length-vw-2;
    position: fixed;
  }


  .unl .dcf-nav-menu-child > *:first-child {
    @include mt-6;
  }


  .unl .dcf-nav-menu-child > *:last-child {
    @include mb-7;
  }


  .unl .dcf-nav-menu-child::before,
  .unl .dcf-nav-menu-child::after {
    content: '';
    height: #{ms(6)}em;
    left: 0;
    position: fixed;
    width: 100%;
    z-index: 999;
  }


  .unl .dcf-nav-menu-child::before {
    background-image: linear-gradient(\$scarlet, fade-out(\$scarlet, 1));
    bottom: calc(#{\$height-mobile-toolbar} + 43vh);
    transform: translateY(99%);
  }


  .unl .dcf-nav-menu-child::after {
    background-image: linear-gradient(fade-out(\$scarlet, 1), \$scarlet);
    bottom: \$height-mobile-toolbar;
  }


  .unl .dcf-nav-menu a,
  .unl .dcf-nav-menu button {
    margin-left: -#{ms(0)}rem;
  }


  .unl .dcf-nav-menu ul ul {
    @include txt-xs;
  }

}


@include mq(md, min, width) {

  .unl .dcf-nav-menu {
    @include bg-scarlet;
    display: flex;
    flex-wrap: nowrap;
    padding-left: \$length-vw-2;
    padding-right: \$length-vw-2;
  }


  .unl .dcf-nav-menu ul ul {
    @include txt-sm;
  }


  .unl .dcf-nav-menu a,
  .unl .dcf-nav-menu button {
    @include txt-xs;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.nav-menu.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////
// THEME / COMPONENTS / NAV: MENU
/////////////////////////////////


.unl .dcf-nav-menu li { // TODO: remove after updated in DCF core
  margin-bottom: 0;
}


.unl .dcf-nav-menu-child a,
.unl .dcf-nav-menu-child button {
  display: block;
  @include lh-3;
  padding: #{ms(0)}em #{ms(0)}rem;
}


// TODO: determine focus state styles
.unl .dcf-nav-menu-child a:link,
.unl .dcf-nav-menu-child a:visited,
.unl .dcf-nav-menu-child a:hover,
.unl .dcf-nav-menu-child a:active,
.unl .dcf-nav-menu-child button {
  @include cream;
}


.unl .dcf-nav-menu-child > ul > li > a,
.unl .dcf-nav-menu-child button {
  font-weight: 700;
}


@include mq(md, max, width) {

  .unl .dcf-nav-menu {
    @include bg-overlay-light;
    bottom: #{\$height-mobile-toolbar};
    height: 100vh;
    opacity: 0;
    pointer-events: none;
    position: fixed;
    transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in, visibility 0ms .4s;
    visibility: hidden;
    width: 100%;
    z-index: 998; // Ensure that the z-index is below the modal and nav-toggle-group z-indices
  }


  // Open when parent model is open
  .unl .dcf-nav-menu.dcf-modal-open {
  \topacity: 1;
  \tpointer-events: auto;
    transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in;
  \tvisibility: visible;
  }


  .unl .dcf-nav-menu-child {
    @include bg-scarlet;
    bottom: \$height-mobile-toolbar;
    height: 43vh;
    @include overflow-y-auto;
    padding-left: \$length-vw-2;
    padding-right: \$length-vw-2;
    position: fixed;
  }


  .unl .dcf-nav-menu-child > *:first-child {
    @include mt-6;
  }


  .unl .dcf-nav-menu-child > *:last-child {
    @include mb-7;
  }


  .unl .dcf-nav-menu-child::before,
  .unl .dcf-nav-menu-child::after {
    content: '';
    height: #{ms(6)}em;
    left: 0;
    position: fixed;
    width: 100%;
    z-index: 999;
  }


  .unl .dcf-nav-menu-child::before {
    background-image: linear-gradient(\$scarlet, fade-out(\$scarlet, 1));
    bottom: calc(#{\$height-mobile-toolbar} + 43vh);
    transform: translateY(99%);
  }


  .unl .dcf-nav-menu-child::after {
    background-image: linear-gradient(fade-out(\$scarlet, 1), \$scarlet);
    bottom: \$height-mobile-toolbar;
  }


  .unl .dcf-nav-menu a,
  .unl .dcf-nav-menu button {
    margin-left: -#{ms(0)}rem;
  }


  .unl .dcf-nav-menu ul ul {
    @include txt-xs;
  }

}


@include mq(md, min, width) {

  .unl .dcf-nav-menu {
    @include bg-scarlet;
    display: flex;
    flex-wrap: nowrap;
    padding-left: \$length-vw-2;
    padding-right: \$length-vw-2;
  }


  .unl .dcf-nav-menu ul ul {
    @include txt-sm;
  }


  .unl .dcf-nav-menu a,
  .unl .dcf-nav-menu button {
    @include txt-xs;
  }

}
", "wdn/templates_5.3/scss/components/_components.nav-menu.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.nav-menu.scss");
    }
}
