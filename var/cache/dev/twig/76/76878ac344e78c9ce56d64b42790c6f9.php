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

/* wdn/templates_5.3/js/js-css/slideshows.scss */
class __TwigTemplate_0311f709988a2625e6999db683e66c03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/slideshows.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/slideshows.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / COMPONENTS / SLIDESHOWS
//////////////////////////////////


@import '../../scss/pre.tmp.scss';


.unl .dcf-slide-deck {
  clip-path: polygon(
    100% 0,
    100% calc(100% - #{\$size-btn-y} - (#{\$border-width-button} * 2) - #{\$size-clip-path}),
    calc(100% - (#{\$size-btn-x} * 2) - (#{\$border-width-button} * 5) - #{\$size-clip-path}) calc(100% - #{\$size-btn-y} - (#{\$border-width-button} * 2) - #{\$size-clip-path}),
    calc(100% - (#{\$size-btn-x} * 2) - (#{\$border-width-button} * 5) - #{\$size-clip-path}) 100%,
    0 100%,
    0 0
  );
  scrollbar-width: none;  // Hide scrollbar in Firefox
}


.unl .dcf-slide-deck::-webkit-scrollbar {
  display: none;  // Hide scrollbar in Safari and Chrome
}


.unl .dcf-slide-caption[aria-hidden=\"true\"] {
  opacity: 0;
  pointer-events: none;
  transition: opacity \$transition-duration-fade-out \$transition-timing-fn-fade-out;
}


.unl .dcf-slide-caption[aria-hidden=\"false\"] {
  opacity: 1;
  pointer-events: auto;
  transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in;
}


.unl .dcf-btn-slide-caption {
  background-color: \$bg-color-overlay-dark;
  border-color: transparent;
  bottom: #{\$size-clip-path};
  color: \$color-button-inverse-tertiary;
  left: #{\$size-clip-path};
  position: absolute;
  z-index: 1;
}


.unl .dcf-slide-caption {
  background-color: \$bg-color-overlay-dark;
  clip-path: polygon(
      100% 0,
      100% 100%,
      calc((#{\$size-clip-path} * 2) + (#{\$border-width-button} * 2) + #{\$size-btn-x}) 100%,
      calc((#{\$size-clip-path} * 2) + (#{\$border-width-button} * 2) + #{\$size-btn-x}) calc(100% - (#{\$size-clip-path} * 2) - (#{\$border-width-button} * 2) - #{\$size-btn-y}),
      0 calc(100% - (#{\$size-clip-path} * 2) - (#{\$border-width-button} * 2) - #{\$size-btn-y}),
      0 0
  );
  color: \$cream;
  height: 100%;
  left: 0;
  padding: \$padding-top-slide-caption \$padding-right-slide-caption \$padding-bottom-slide-caption \$padding-left-slide-caption;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}


.dcf-btn-slide-caption[aria-expanded=\"false\"] .unl-icon-slide-caption-open {
  opacity: 1;
  transition: opacity 250ms ease-out 125ms;
}


.dcf-btn-slide-caption[aria-expanded=\"true\"] .unl-icon-slide-caption-open {
  opacity: 0;
  transition: opacity 250ms ease-out;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/slideshows.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / COMPONENTS / SLIDESHOWS
//////////////////////////////////


@import '../../scss/pre.tmp.scss';


.unl .dcf-slide-deck {
  clip-path: polygon(
    100% 0,
    100% calc(100% - #{\$size-btn-y} - (#{\$border-width-button} * 2) - #{\$size-clip-path}),
    calc(100% - (#{\$size-btn-x} * 2) - (#{\$border-width-button} * 5) - #{\$size-clip-path}) calc(100% - #{\$size-btn-y} - (#{\$border-width-button} * 2) - #{\$size-clip-path}),
    calc(100% - (#{\$size-btn-x} * 2) - (#{\$border-width-button} * 5) - #{\$size-clip-path}) 100%,
    0 100%,
    0 0
  );
  scrollbar-width: none;  // Hide scrollbar in Firefox
}


.unl .dcf-slide-deck::-webkit-scrollbar {
  display: none;  // Hide scrollbar in Safari and Chrome
}


.unl .dcf-slide-caption[aria-hidden=\"true\"] {
  opacity: 0;
  pointer-events: none;
  transition: opacity \$transition-duration-fade-out \$transition-timing-fn-fade-out;
}


.unl .dcf-slide-caption[aria-hidden=\"false\"] {
  opacity: 1;
  pointer-events: auto;
  transition: opacity \$transition-duration-fade-in \$transition-timing-fn-fade-in;
}


.unl .dcf-btn-slide-caption {
  background-color: \$bg-color-overlay-dark;
  border-color: transparent;
  bottom: #{\$size-clip-path};
  color: \$color-button-inverse-tertiary;
  left: #{\$size-clip-path};
  position: absolute;
  z-index: 1;
}


.unl .dcf-slide-caption {
  background-color: \$bg-color-overlay-dark;
  clip-path: polygon(
      100% 0,
      100% 100%,
      calc((#{\$size-clip-path} * 2) + (#{\$border-width-button} * 2) + #{\$size-btn-x}) 100%,
      calc((#{\$size-clip-path} * 2) + (#{\$border-width-button} * 2) + #{\$size-btn-x}) calc(100% - (#{\$size-clip-path} * 2) - (#{\$border-width-button} * 2) - #{\$size-btn-y}),
      0 calc(100% - (#{\$size-clip-path} * 2) - (#{\$border-width-button} * 2) - #{\$size-btn-y}),
      0 0
  );
  color: \$cream;
  height: 100%;
  left: 0;
  padding: \$padding-top-slide-caption \$padding-right-slide-caption \$padding-bottom-slide-caption \$padding-left-slide-caption;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}


.dcf-btn-slide-caption[aria-expanded=\"false\"] .unl-icon-slide-caption-open {
  opacity: 1;
  transition: opacity 250ms ease-out 125ms;
}


.dcf-btn-slide-caption[aria-expanded=\"true\"] .unl-icon-slide-caption-open {
  opacity: 0;
  transition: opacity 250ms ease-out;
}
", "wdn/templates_5.3/js/js-css/slideshows.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/slideshows.scss");
    }
}
