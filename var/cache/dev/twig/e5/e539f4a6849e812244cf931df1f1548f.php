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

/* wdn/templates_5.3/scss/components/_components.header.scss */
class __TwigTemplate_c470ca0961158ff195c8bbe230003d45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.header.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.header.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / COMPONENTS / HEADER
//////////////////////////////


.unl .dcf-header a.dcf-institution-title:link,
.unl .dcf-header a.dcf-institution-title:visited,
.unl .dcf-header-global button {
  color: \$color-brand-alpha; // Force visited links in the global header and logo to remain scarlet (light mode) and lightest gray (dark mode).
}


.unl .dcf-site-group {
  min-height: #{ms(8)}em; // Vertically center site group (affiliation and title) by providing a minimum height equal to the adjacent Nebraska N logo.
}


.unl .dcf-site-affiliation a {
  display: inline-block;
  padding-bottom: #{ms(-6)}em;
}


.unl .dcf-site-group a,
.unl .dcf-site-group a:visited {
  color: \$color-heading;
}


.unl .dcf-header a.dcf-institution-title:hover,
.unl .dcf-header-global button:hover,
.unl .dcf-site-group a:hover {
  color: \$color-hover;
}


@include mq(md, max, width) {

  .unl .dcf-header .dcf-institution-title {
    display: none;
  }


  .unl .dcf-logo-lockup {
    @include pb-4;
    @include pt-5;
  }

}


@include mq(md, min, width) {

  .unl .dcf-header-global {
    border-bottom: 1px solid \$border-color-gray-light;
    padding-top: #{ms(-12)}em;
  }


  .unl .dcf-nav-global {
    flex-grow: 3;
  }


  .unl .dcf-header-global-item {
    margin-left: \$length-vw-1;
  }


  .unl .dcf-logo-lockup {
    padding-bottom: #{ms(1)}em;
    @include pt-5;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.header.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / COMPONENTS / HEADER
//////////////////////////////


.unl .dcf-header a.dcf-institution-title:link,
.unl .dcf-header a.dcf-institution-title:visited,
.unl .dcf-header-global button {
  color: \$color-brand-alpha; // Force visited links in the global header and logo to remain scarlet (light mode) and lightest gray (dark mode).
}


.unl .dcf-site-group {
  min-height: #{ms(8)}em; // Vertically center site group (affiliation and title) by providing a minimum height equal to the adjacent Nebraska N logo.
}


.unl .dcf-site-affiliation a {
  display: inline-block;
  padding-bottom: #{ms(-6)}em;
}


.unl .dcf-site-group a,
.unl .dcf-site-group a:visited {
  color: \$color-heading;
}


.unl .dcf-header a.dcf-institution-title:hover,
.unl .dcf-header-global button:hover,
.unl .dcf-site-group a:hover {
  color: \$color-hover;
}


@include mq(md, max, width) {

  .unl .dcf-header .dcf-institution-title {
    display: none;
  }


  .unl .dcf-logo-lockup {
    @include pb-4;
    @include pt-5;
  }

}


@include mq(md, min, width) {

  .unl .dcf-header-global {
    border-bottom: 1px solid \$border-color-gray-light;
    padding-top: #{ms(-12)}em;
  }


  .unl .dcf-nav-global {
    flex-grow: 3;
  }


  .unl .dcf-header-global-item {
    margin-left: \$length-vw-1;
  }


  .unl .dcf-logo-lockup {
    padding-bottom: #{ms(1)}em;
    @include pt-5;
  }

}
", "wdn/templates_5.3/scss/components/_components.header.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.header.scss");
    }
}
