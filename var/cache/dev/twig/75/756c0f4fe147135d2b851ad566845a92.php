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

/* wdn/templates_5.3/scss/deprecated/deprecated.hero.scss */
class __TwigTemplate_a4122e282652b8317e076e505dc8c546 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.hero.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.hero.scss"));

        // line 1
        echo "////////////////////////////
// THEME / DEPRECATED / HERO
////////////////////////////


.wdn-hero {
  background-color: \$darker-gray;
  display: flex;
  flex-flow: column wrap;
}

.wdn-hero .wdn-button {
  @include mt-6;
}

.wdn-hero .wdn-button:not(:last-child) {
  @include mr-3;
}

.wdn-hero-text-container {
  align-items: center;
  display: flex;
  justify-content: flex-start;
  order: 2;
  padding: 4vh 5.6%;
  width: 100%;
}

.wdn-hero-text-container.locate-center {
  justify-content: center;
  text-align: center;
}

.wdn-hero-heading {
  color: \$cream;
  @include txt-h2;
  margin: 0;
  text-transform: uppercase;
}

.wdn-hero-initial-line,
.wdn-hero-impact-line {
  text-shadow: 1px 1px 16px fade-out(#000,.5);
}

.wdn-hero-initial-line {
  display: block;
  @include pb-2;
  font-size: #{ms(-8)}em;
  letter-spacing: .1em;
  @include lh-2;
  @include regular;
}

.wdn-hero-impact-line {
  display: inline-block;
  @include lh-1;
}

.wdn-hero-impact-line + .wdn-hero-initial-line {
  @include mt-3;
}

.wdn-hero-video,
.wdn-hero-picture {
  flex-shrink: 0;
  order: 1;
  width: 100%;
}

.wdn-hero-video {
  display: none;
  left: 0;
}

.wdn-hero-picture img,
.wdn-hero-video video {
  display: block;
  width: 100%;
}


// Media Queries

@media only screen and (min-width:48em) {

  .wdn-hero {
    height: #{ms(22)}em;
    justify-content: center;
    overflow: hidden;
    position: relative;

    @supports (object-fit: cover) {
      height: 56vh;
      max-height: #{ms(24)}em;
      min-height: #{ms(22)}em;
    }

  }

  .wdn-hero video,
  .wdn-hero img {
    @include obj-fit-cover;
  }

  .wdn-hero-text-container {
    height: 100%;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
  }

  .wdn-hero-text-container.locate-right {
  \tjustify-content: flex-end;
  }

  .wdn-hero-heading {
    @include txt-xl;
  }

  .wdn-hero-initial-line {
    font-size: #{ms(-10)}em;
  }

  .wdn-hero-video,
  .wdn-hero-picture {
    opacity: .5;
    overflow: hidden;

    @supports (object-fit: cover) {
      height: inherit;
      min-height: #{ms(22)}em;
    }

  }

  .wdn-hero-video {
    display: block;
  }

  .wdn-hero-video ~ .wdn-hero-picture {
    display: none;
  }

}


@media only screen and (min-width:80em) and (min-height: #{ms(26)}em) {

  .wdn-hero {
    height: #{ms(24)}em;

    @supports (object-fit: cover) {
      height: 60vh;
      max-height: #{ms(26)}em;
    }

  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.hero.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////
// THEME / DEPRECATED / HERO
////////////////////////////


.wdn-hero {
  background-color: \$darker-gray;
  display: flex;
  flex-flow: column wrap;
}

.wdn-hero .wdn-button {
  @include mt-6;
}

.wdn-hero .wdn-button:not(:last-child) {
  @include mr-3;
}

.wdn-hero-text-container {
  align-items: center;
  display: flex;
  justify-content: flex-start;
  order: 2;
  padding: 4vh 5.6%;
  width: 100%;
}

.wdn-hero-text-container.locate-center {
  justify-content: center;
  text-align: center;
}

.wdn-hero-heading {
  color: \$cream;
  @include txt-h2;
  margin: 0;
  text-transform: uppercase;
}

.wdn-hero-initial-line,
.wdn-hero-impact-line {
  text-shadow: 1px 1px 16px fade-out(#000,.5);
}

.wdn-hero-initial-line {
  display: block;
  @include pb-2;
  font-size: #{ms(-8)}em;
  letter-spacing: .1em;
  @include lh-2;
  @include regular;
}

.wdn-hero-impact-line {
  display: inline-block;
  @include lh-1;
}

.wdn-hero-impact-line + .wdn-hero-initial-line {
  @include mt-3;
}

.wdn-hero-video,
.wdn-hero-picture {
  flex-shrink: 0;
  order: 1;
  width: 100%;
}

.wdn-hero-video {
  display: none;
  left: 0;
}

.wdn-hero-picture img,
.wdn-hero-video video {
  display: block;
  width: 100%;
}


// Media Queries

@media only screen and (min-width:48em) {

  .wdn-hero {
    height: #{ms(22)}em;
    justify-content: center;
    overflow: hidden;
    position: relative;

    @supports (object-fit: cover) {
      height: 56vh;
      max-height: #{ms(24)}em;
      min-height: #{ms(22)}em;
    }

  }

  .wdn-hero video,
  .wdn-hero img {
    @include obj-fit-cover;
  }

  .wdn-hero-text-container {
    height: 100%;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
  }

  .wdn-hero-text-container.locate-right {
  \tjustify-content: flex-end;
  }

  .wdn-hero-heading {
    @include txt-xl;
  }

  .wdn-hero-initial-line {
    font-size: #{ms(-10)}em;
  }

  .wdn-hero-video,
  .wdn-hero-picture {
    opacity: .5;
    overflow: hidden;

    @supports (object-fit: cover) {
      height: inherit;
      min-height: #{ms(22)}em;
    }

  }

  .wdn-hero-video {
    display: block;
  }

  .wdn-hero-video ~ .wdn-hero-picture {
    display: none;
  }

}


@media only screen and (min-width:80em) and (min-height: #{ms(26)}em) {

  .wdn-hero {
    height: #{ms(24)}em;

    @supports (object-fit: cover) {
      height: 60vh;
      max-height: #{ms(26)}em;
    }

  }

}
", "wdn/templates_5.3/scss/deprecated/deprecated.hero.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.hero.scss");
    }
}
