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

/* wdn/templates_5.3/scss/components/_components.heroes-legacy.scss */
class __TwigTemplate_a3e13a6ecab633b49ea853b1d4373a8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes-legacy.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes-legacy.scss"));

        // line 1
        echo "//////////////////////////////////////
// THEME / COMPONENTS / HEROES: LEGACY
//////////////////////////////////////


// Legacy hero
.unl-hero-legacy .dcf-breadcrumbs-wrapper {
  display: none;
}


.unl-hero-legacy .dcf-hero-group-1 {
  padding: \$length-em-6 \$length-vw-2;
}


.unl-hero-legacy .dcf-page-title {
  @include mb-3;
}


@include mq(sm, max, width) {

  .unl-hero-legacy {
    flex-direction: column-reverse;
  }

}


@include mq(sm, min, width) {

  .unl-hero-legacy {
    align-items: center;
    height: #{ms(28)}vh;
    max-height: #{ms(24)}em;
    position: relative;
  }


  .unl-hero-legacy .dcf-hero-group-1 {
    position: relative;
    z-index: 1;
  }


  .unl-hero-legacy .dcf-hero-group-2 {
    display: flex;
    height: #{ms(28)}vh;
    left: 0;
    max-height: #{ms(24)}em;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 100%;
  }


  .unl-hero-legacy .dcf-hero-group-2 img,
  .unl-hero-legacy .dcf-hero-group-2 video {
    opacity: .5;
  }

}


@include mq(md, min, width) {

  .unl .unl-hero-legacy .dcf-page-title h1 {
    font-size: #{ms(7)}em;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.heroes-legacy.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////////
// THEME / COMPONENTS / HEROES: LEGACY
//////////////////////////////////////


// Legacy hero
.unl-hero-legacy .dcf-breadcrumbs-wrapper {
  display: none;
}


.unl-hero-legacy .dcf-hero-group-1 {
  padding: \$length-em-6 \$length-vw-2;
}


.unl-hero-legacy .dcf-page-title {
  @include mb-3;
}


@include mq(sm, max, width) {

  .unl-hero-legacy {
    flex-direction: column-reverse;
  }

}


@include mq(sm, min, width) {

  .unl-hero-legacy {
    align-items: center;
    height: #{ms(28)}vh;
    max-height: #{ms(24)}em;
    position: relative;
  }


  .unl-hero-legacy .dcf-hero-group-1 {
    position: relative;
    z-index: 1;
  }


  .unl-hero-legacy .dcf-hero-group-2 {
    display: flex;
    height: #{ms(28)}vh;
    left: 0;
    max-height: #{ms(24)}em;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 100%;
  }


  .unl-hero-legacy .dcf-hero-group-2 img,
  .unl-hero-legacy .dcf-hero-group-2 video {
    opacity: .5;
  }

}


@include mq(md, min, width) {

  .unl .unl-hero-legacy .dcf-page-title h1 {
    font-size: #{ms(7)}em;
  }

}
", "wdn/templates_5.3/scss/components/_components.heroes-legacy.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.heroes-legacy.scss");
    }
}
