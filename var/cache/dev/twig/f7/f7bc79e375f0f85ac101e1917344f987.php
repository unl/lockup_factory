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

/* wdn/templates_5.0/js/js-css/events.scss */
class __TwigTemplate_42610c33d23556692f07dad4ca75c5aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/events.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/events.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


.unl-event-teaser {
  display: flex;
  flex-direction: column;
}


.unl-event-datetime {
  @include mb-3;
}


.wdn-calendar .unl-event-teaser:not(:last-child) {
  @include mb-4;
}


@supports (display:grid) {

  .unl-event-teaser {
    display: grid;
    @include col-gap-4;
    grid-template: 'd t' auto 'd l' 1fr / \$length-em-8 1fr;
    @include mb-0;
  }


  .unl-event-title {
    grid-area: t;
  }


  .unl-event-datetime {
    grid-area: d;
    @include mb-0;
  }


  .unl-event-location {
    grid-area: l;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/events.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


.unl-event-teaser {
  display: flex;
  flex-direction: column;
}


.unl-event-datetime {
  @include mb-3;
}


.wdn-calendar .unl-event-teaser:not(:last-child) {
  @include mb-4;
}


@supports (display:grid) {

  .unl-event-teaser {
    display: grid;
    @include col-gap-4;
    grid-template: 'd t' auto 'd l' 1fr / \$length-em-8 1fr;
    @include mb-0;
  }


  .unl-event-title {
    grid-area: t;
  }


  .unl-event-datetime {
    grid-area: d;
    @include mb-0;
  }


  .unl-event-location {
    grid-area: l;
  }

}
", "wdn/templates_5.0/js/js-css/events.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/events.scss");
    }
}
