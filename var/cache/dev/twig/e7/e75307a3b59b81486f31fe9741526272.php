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

/* wdn/templates_5.3/js-src/js-css/events.scss */
class __TwigTemplate_78e9f30cdb79176da1aedb6a9b8e2eee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/js-css/events.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/js-css/events.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


.unl-event-time,
.unl-event-location {
  margin-top: #{ms(-12)}em;
  overflow-wrap: break-word;
}


.wdn-calendar .unl-event-teaser-li:not(:last-child) {
  @include mb-4;
}



.unl-event-teaser {
  display: flex;
  flex-direction: column;
}


.unl-event-date {
  @include mb-3;
}


@supports (display:grid) {

  .unl-event-teaser {
    display: grid;
    @include col-gap-4;
    grid-template: 'a b' auto 'a c' 1fr / \$length-em-8 1fr;
    @include mb-0;
  }


  .unl-event-title {
    grid-area: b;
  }


  .unl-event-date {
    grid-area: a;
    @include mb-0;
  }


  .unl-event-details {
    grid-area: c;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js-src/js-css/events.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


.unl-event-time,
.unl-event-location {
  margin-top: #{ms(-12)}em;
  overflow-wrap: break-word;
}


.wdn-calendar .unl-event-teaser-li:not(:last-child) {
  @include mb-4;
}



.unl-event-teaser {
  display: flex;
  flex-direction: column;
}


.unl-event-date {
  @include mb-3;
}


@supports (display:grid) {

  .unl-event-teaser {
    display: grid;
    @include col-gap-4;
    grid-template: 'a b' auto 'a c' 1fr / \$length-em-8 1fr;
    @include mb-0;
  }


  .unl-event-title {
    grid-area: b;
  }


  .unl-event-date {
    grid-area: a;
    @include mb-0;
  }


  .unl-event-details {
    grid-area: c;
  }

}
", "wdn/templates_5.3/js-src/js-css/events.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/js-css/events.scss");
    }
}
