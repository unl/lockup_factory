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

/* wdn/templates_5.3/scss/components/_components.search.scss */
class __TwigTemplate_7f35aa5ae56ac6c0a9332aabad5d8908 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.search.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.search.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / COMPONENTS / SEARCH
//////////////////////////////


.unl .dcf-search-input:focus {
  box-shadow: 0 0 0 3px \$scarlet, 0 0 0 5px \$border-color-input-focus !important;
}


.dcf-no-js .unl-search-bg,
.dcf-no-webp .unl-search-bg {
  background-image: url('../images/unl-search-bg-640.png');

  @media (min-width: 640px) { background-image: url('../images/unl-search-bg-960.png'); }
  @media (min-width: 960px) { background-image: url('../images/unl-search-bg-1280.png'); }
  @media (min-width: 1280px) { background-image: url('../images/unl-search-bg-1920.png'); }
  @media (min-width: 1920px) { background-image: url('../images/unl-search-bg-2560.png'); }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min-resolution: 192dpi),
  only screen and (min-resolution: 2dppx) {
    background-image: url('../images/unl-search-bg-1280.png');

    @media (min-width: 640px) { background-image: url('../images/unl-search-bg-1920.png'); }
    @media (min-width: 960px) { background-image: url('../images/unl-search-bg-2560.png'); }
  }

}


.dcf-webp .unl-search-bg {
  background-image: url('../images/unl-search-bg-640.webp');

  @media (min-width: 640px) { background-image: url('../images/unl-search-bg-960.webp'); }
  @media (min-width: 960px) { background-image: url('../images/unl-search-bg-1280.webp'); }
  @media (min-width: 1280px) { background-image: url('../images/unl-search-bg-1920.webp'); }
  @media (min-width: 1920px) { background-image: url('../images/unl-search-bg-2560.webp'); }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min-resolution: 192dpi),
  only screen and (min-resolution: 2dppx) {
    background-image: url('../images/unl-search-bg-1280.webp');

    @media (min-width: 640px) { background-image: url('../images/unl-search-bg-1920.webp'); }
    @media (min-width: 960px) { background-image: url('../images/unl-search-bg-2560.webp'); }
  }

}


@include mq(md, max, width) {

  .unl .dcf-search-toggle-wrapper {
    display: none;
  }

}

@include mq(md, min, width) {

  .unl .dcf-search {
    max-width: #{ms(18)}em; // TODO: remove when global nav is added back to header
  }

  .unl .dcf-search-toggle-wrapper {
    display: flex;
  }

  .unl .dcf-search-toggle-label {
    padding: #{ms(-6)}em #{ms(8)}em #{ms(-6)}em #{ms(-2)}em;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.search.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / COMPONENTS / SEARCH
//////////////////////////////


.unl .dcf-search-input:focus {
  box-shadow: 0 0 0 3px \$scarlet, 0 0 0 5px \$border-color-input-focus !important;
}


.dcf-no-js .unl-search-bg,
.dcf-no-webp .unl-search-bg {
  background-image: url('../images/unl-search-bg-640.png');

  @media (min-width: 640px) { background-image: url('../images/unl-search-bg-960.png'); }
  @media (min-width: 960px) { background-image: url('../images/unl-search-bg-1280.png'); }
  @media (min-width: 1280px) { background-image: url('../images/unl-search-bg-1920.png'); }
  @media (min-width: 1920px) { background-image: url('../images/unl-search-bg-2560.png'); }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min-resolution: 192dpi),
  only screen and (min-resolution: 2dppx) {
    background-image: url('../images/unl-search-bg-1280.png');

    @media (min-width: 640px) { background-image: url('../images/unl-search-bg-1920.png'); }
    @media (min-width: 960px) { background-image: url('../images/unl-search-bg-2560.png'); }
  }

}


.dcf-webp .unl-search-bg {
  background-image: url('../images/unl-search-bg-640.webp');

  @media (min-width: 640px) { background-image: url('../images/unl-search-bg-960.webp'); }
  @media (min-width: 960px) { background-image: url('../images/unl-search-bg-1280.webp'); }
  @media (min-width: 1280px) { background-image: url('../images/unl-search-bg-1920.webp'); }
  @media (min-width: 1920px) { background-image: url('../images/unl-search-bg-2560.webp'); }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min-resolution: 192dpi),
  only screen and (min-resolution: 2dppx) {
    background-image: url('../images/unl-search-bg-1280.webp');

    @media (min-width: 640px) { background-image: url('../images/unl-search-bg-1920.webp'); }
    @media (min-width: 960px) { background-image: url('../images/unl-search-bg-2560.webp'); }
  }

}


@include mq(md, max, width) {

  .unl .dcf-search-toggle-wrapper {
    display: none;
  }

}

@include mq(md, min, width) {

  .unl .dcf-search {
    max-width: #{ms(18)}em; // TODO: remove when global nav is added back to header
  }

  .unl .dcf-search-toggle-wrapper {
    display: flex;
  }

  .unl .dcf-search-toggle-label {
    padding: #{ms(-6)}em #{ms(8)}em #{ms(-6)}em #{ms(-2)}em;
  }

}
", "wdn/templates_5.3/scss/components/_components.search.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.search.scss");
    }
}
