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

/* wdn/templates_5.3/scss/components/_components.nav-toggle.scss */
class __TwigTemplate_156da8a231b93be1d4336373820d0324 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.nav-toggle.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.nav-toggle.scss"));

        // line 1
        echo "///////////////////////////////////
// THEME / COMPONENTS / NAV: TOGGLE
///////////////////////////////////


.unl .dcf-nav-toggle-btn {
  appearance: none;
}


@media (prefers-color-scheme: dark) {

  .dcf-idm-status-logged-out a,
  .dcf-idm-status-logged-out a:visited {
    color: \$cream;
  }

}


@include mq(md, max, width) {

  .unl .dcf-nav-toggle-group {
    display: flex;
    z-index: \$z-nav-toggle-group;

    // Browsers which partially support CSS Environment variables (iOS 11.0-11.2)
    @supports (padding-bottom: constant(safe-area-inset-bottom)) {
      --safe-area-inset-bottom: constant(safe-area-inset-bottom);
      padding-bottom: var(--safe-area-inset-bottom);
    }

    // Browsers which fully support CSS Environment variables (iOS 11.2+)
    @supports (padding-bottom: env(safe-area-inset-bottom)) {
      --safe-area-inset-bottom: env(safe-area-inset-bottom);
      padding-bottom: var(--safe-area-inset-bottom);
    }

  }


  .unl .dcf-nav-toggle-btn {
    flex-basis: 25%;
  }


  .unl .dcf-nav-menu .dcf-nav-toggle-btn-menu {
    display: none;
  }


  .headroom {
  \twill-change: transform;
  \ttransition: transform 250ms ease-out !important;
  }


//   .headroom--fixed {
//   \tposition: -webkit-fixed;
//   \tposition: fixed;
//   \tz-index: 10;
//   \tright: 0;
//   \tleft: 0;
//   \tbottom: 0vh;
//   }


  .headroom--pinned {
  \ttransform: translateY(0%);
  }


  .headroom--unpinned {
  \ttransform: translateY(100%);
  }

}


@include mq(md, min, width) {

  .unl .dcf-nav-toggle-group {
    display: none;
  }


  .unl .dcf-nav-menu .dcf-nav-toggle-btn-menu {
    display: flex;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.nav-toggle.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////
// THEME / COMPONENTS / NAV: TOGGLE
///////////////////////////////////


.unl .dcf-nav-toggle-btn {
  appearance: none;
}


@media (prefers-color-scheme: dark) {

  .dcf-idm-status-logged-out a,
  .dcf-idm-status-logged-out a:visited {
    color: \$cream;
  }

}


@include mq(md, max, width) {

  .unl .dcf-nav-toggle-group {
    display: flex;
    z-index: \$z-nav-toggle-group;

    // Browsers which partially support CSS Environment variables (iOS 11.0-11.2)
    @supports (padding-bottom: constant(safe-area-inset-bottom)) {
      --safe-area-inset-bottom: constant(safe-area-inset-bottom);
      padding-bottom: var(--safe-area-inset-bottom);
    }

    // Browsers which fully support CSS Environment variables (iOS 11.2+)
    @supports (padding-bottom: env(safe-area-inset-bottom)) {
      --safe-area-inset-bottom: env(safe-area-inset-bottom);
      padding-bottom: var(--safe-area-inset-bottom);
    }

  }


  .unl .dcf-nav-toggle-btn {
    flex-basis: 25%;
  }


  .unl .dcf-nav-menu .dcf-nav-toggle-btn-menu {
    display: none;
  }


  .headroom {
  \twill-change: transform;
  \ttransition: transform 250ms ease-out !important;
  }


//   .headroom--fixed {
//   \tposition: -webkit-fixed;
//   \tposition: fixed;
//   \tz-index: 10;
//   \tright: 0;
//   \tleft: 0;
//   \tbottom: 0vh;
//   }


  .headroom--pinned {
  \ttransform: translateY(0%);
  }


  .headroom--unpinned {
  \ttransform: translateY(100%);
  }

}


@include mq(md, min, width) {

  .unl .dcf-nav-toggle-group {
    display: none;
  }


  .unl .dcf-nav-menu .dcf-nav-toggle-btn-menu {
    display: flex;
  }

}
", "wdn/templates_5.3/scss/components/_components.nav-toggle.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.nav-toggle.scss");
    }
}
