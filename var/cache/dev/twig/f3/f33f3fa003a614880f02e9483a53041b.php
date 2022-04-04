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

/* wdn/templates_5.3/scss/deprecated/deprecated.promo-image.scss */
class __TwigTemplate_13f6482c2ff9c844bf327a11a3581cc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.promo-image.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.promo-image.scss"));

        // line 1
        echo "///////////////////////////////////
// THEME / DEPRECATED / PROMO IMAGE
///////////////////////////////////


.wdn-promo-band {
\tbackground: \$darker-gray;
\tposition: relative;
}

.wdn-promo-band img,
.wdn-promo-band video {
  display: block;
}

.wdn-promo-container {
\tbackground-image: linear-gradient(rgba(0,0,0,0) 40%, rgba(0,0,0,.5) 75%, rgba(0,0,0,.3) 100%);
\tbottom: 0;
\tposition: absolute;
\ttop: 0;
\twidth: 100%;
}

.wdn-promo-content {
  bottom: 5%;
  color: #fff;
  position: absolute;
  text-align: center;
  text-shadow: 0 0 10px rgba(0,0,0,.5);
  text-transform: uppercase;
  width: 100%;
}

.wdn-promo-content a {
  text-shadow: none;
}

.wdn-promo-text {
  display: block;
  @include txt-h2;
  font-weight: bold;
  line-height: 1;
  padding-left: 5.6%;
  padding-right: 5.6%;
}

.wdn-promo-text + a {
  margin-top: 1em;
}

.wdn-promo-container.wdn-inverse {
\tbackground-image: linear-gradient(rgba(255,255,255,0) 40%, rgba(255,255,255,.5) 75%, rgba(255,255,255,.3) 100%);
}

.wdn-promo-container.wdn-inverse .wdn-text-over-image {
\tcolor: \$color-body-light-mode;
\ttext-shadow: 0 0 10px rgba(255,255,255,.5);
}


@media only screen and (min-width:30em) {

\t.wdn-promo-content {
    bottom: 7%;
  }

  .wdn-promo-text {
    @include txt-xl;
  }

}


@media only screen and (min-width:48em) {

\t.wdn-promo-content {
    bottom: 10%;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.promo-image.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////
// THEME / DEPRECATED / PROMO IMAGE
///////////////////////////////////


.wdn-promo-band {
\tbackground: \$darker-gray;
\tposition: relative;
}

.wdn-promo-band img,
.wdn-promo-band video {
  display: block;
}

.wdn-promo-container {
\tbackground-image: linear-gradient(rgba(0,0,0,0) 40%, rgba(0,0,0,.5) 75%, rgba(0,0,0,.3) 100%);
\tbottom: 0;
\tposition: absolute;
\ttop: 0;
\twidth: 100%;
}

.wdn-promo-content {
  bottom: 5%;
  color: #fff;
  position: absolute;
  text-align: center;
  text-shadow: 0 0 10px rgba(0,0,0,.5);
  text-transform: uppercase;
  width: 100%;
}

.wdn-promo-content a {
  text-shadow: none;
}

.wdn-promo-text {
  display: block;
  @include txt-h2;
  font-weight: bold;
  line-height: 1;
  padding-left: 5.6%;
  padding-right: 5.6%;
}

.wdn-promo-text + a {
  margin-top: 1em;
}

.wdn-promo-container.wdn-inverse {
\tbackground-image: linear-gradient(rgba(255,255,255,0) 40%, rgba(255,255,255,.5) 75%, rgba(255,255,255,.3) 100%);
}

.wdn-promo-container.wdn-inverse .wdn-text-over-image {
\tcolor: \$color-body-light-mode;
\ttext-shadow: 0 0 10px rgba(255,255,255,.5);
}


@media only screen and (min-width:30em) {

\t.wdn-promo-content {
    bottom: 7%;
  }

  .wdn-promo-text {
    @include txt-xl;
  }

}


@media only screen and (min-width:48em) {

\t.wdn-promo-content {
    bottom: 10%;
  }

}
", "wdn/templates_5.3/scss/deprecated/deprecated.promo-image.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.promo-image.scss");
    }
}
