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

/* wdn/templates_5.3/js/js-css/events-band.scss */
class __TwigTemplate_54cf6dd1431f0ca4a961358cc23883d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/events-band.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/events-band.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


.unl-event-teaser-list {
  display: flex;
  flex-flow: row wrap;
  @include pl-9;
}


@include mq(sm, min, width) {

  .unl-event-teaser-list .unl-event-teaser-li {
    flex-basis: 50%;
  }

}


@include mq(lg, min, width) {

  .unl-event-teaser-list .unl-event-teaser-li {
    flex-basis: 33%;
  }

}


@include mq(xl, min, width) {

  .unl-event-teaser-list .unl-event-teaser-li {
    flex-basis: 25%;
  }

}


@supports (display:grid) {

  .unl-event-teaser-list {
    display: grid;
    grid-column: 2/3;
    grid-template-columns: repeat(auto-fill, minmax(#{ms(18)}em, 1fr) ) ;
    @include pl-0;
  }


  @include mq(lg, min, width) {

    .unl-event-teaser-list {
      grid-template-columns: repeat(3, 1fr);
    }

  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/events-band.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


.unl-event-teaser-list {
  display: flex;
  flex-flow: row wrap;
  @include pl-9;
}


@include mq(sm, min, width) {

  .unl-event-teaser-list .unl-event-teaser-li {
    flex-basis: 50%;
  }

}


@include mq(lg, min, width) {

  .unl-event-teaser-list .unl-event-teaser-li {
    flex-basis: 33%;
  }

}


@include mq(xl, min, width) {

  .unl-event-teaser-list .unl-event-teaser-li {
    flex-basis: 25%;
  }

}


@supports (display:grid) {

  .unl-event-teaser-list {
    display: grid;
    grid-column: 2/3;
    grid-template-columns: repeat(auto-fill, minmax(#{ms(18)}em, 1fr) ) ;
    @include pl-0;
  }


  @include mq(lg, min, width) {

    .unl-event-teaser-list {
      grid-template-columns: repeat(3, 1fr);
    }

  }

}
", "wdn/templates_5.3/js/js-css/events-band.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/events-band.scss");
    }
}
