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

/* wdn/templates_5.0/js/js-css/unlalert.scss */
class __TwigTemplate_bfa46e4b4b4b7c7328a13a2f1edefcdc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/unlalert.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/unlalert.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


#unlalert {
  // Avoid flash of unstyled content, JS initially positions this off screen
  background-color: \$color-warning;
  margin-bottom: -3px; // Position on top of 3px scarlet border at top of header
  position: relative !important;
  top: auto !important;
}


#unlalert a {
  @include cream;
}


#unlalert.show {
  @include pb-6;
  @include pt-6;
}


#unlalert_toggle {
  margin-left: -1.333333333em;
}


#unlalert_toggle:focus,
#unlalert_toggle:hover {
  box-shadow: 0 1px 0.4218750003em rgba(254,253,250,.4);
}


#unlalert.show #unlalert_toggle {
  margin-left: 0;
  position: absolute;
  right: 1em;
  top: .75em;
  z-index: 1;
}


#unlalert_content {
  display: none;
}


#unlalert.show #unlalert_content {
  display: block;
}


.unlalert-heading {
  color: fade-out(\$cream,.2);
}


.unlalert-info {
  @include mb-6;
}


.unlalert-datetime {
  @include mb-5;
}


@supports (display: grid) {

  #unlalert.show #unlalert_content {
    display: grid;
  }


  .unlalert-info,
  .unlalert-datetime {
    margin-bottom: 0;
  }


  @include mq(sm, max, width) {

    .unlalert-meta {
      grid-template-columns: 1fr 2fr;
    }

  }

  @include mq(sm, min, width) {

    #unlalert.show #unlalert_content {
      grid-template-columns: 2fr 1fr;
    }


    .unlalert-meta {
      grid-template-rows: auto 1fr;
    }

  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/unlalert.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


#unlalert {
  // Avoid flash of unstyled content, JS initially positions this off screen
  background-color: \$color-warning;
  margin-bottom: -3px; // Position on top of 3px scarlet border at top of header
  position: relative !important;
  top: auto !important;
}


#unlalert a {
  @include cream;
}


#unlalert.show {
  @include pb-6;
  @include pt-6;
}


#unlalert_toggle {
  margin-left: -1.333333333em;
}


#unlalert_toggle:focus,
#unlalert_toggle:hover {
  box-shadow: 0 1px 0.4218750003em rgba(254,253,250,.4);
}


#unlalert.show #unlalert_toggle {
  margin-left: 0;
  position: absolute;
  right: 1em;
  top: .75em;
  z-index: 1;
}


#unlalert_content {
  display: none;
}


#unlalert.show #unlalert_content {
  display: block;
}


.unlalert-heading {
  color: fade-out(\$cream,.2);
}


.unlalert-info {
  @include mb-6;
}


.unlalert-datetime {
  @include mb-5;
}


@supports (display: grid) {

  #unlalert.show #unlalert_content {
    display: grid;
  }


  .unlalert-info,
  .unlalert-datetime {
    margin-bottom: 0;
  }


  @include mq(sm, max, width) {

    .unlalert-meta {
      grid-template-columns: 1fr 2fr;
    }

  }

  @include mq(sm, min, width) {

    #unlalert.show #unlalert_content {
      grid-template-columns: 2fr 1fr;
    }


    .unlalert-meta {
      grid-template-rows: auto 1fr;
    }

  }

}
", "wdn/templates_5.0/js/js-css/unlalert.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/unlalert.scss");
    }
}
