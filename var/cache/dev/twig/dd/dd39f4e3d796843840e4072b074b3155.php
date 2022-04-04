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

/* wdn/templates_5.2/js/js-css/tabs.scss */
class __TwigTemplate_673af08cf00c62ba8005fdd5990e60bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/tabs.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/tabs.scss"));

        // line 1
        echo "////////////////////////////
// THEME / COMPONENTS / TABS
////////////////////////////


@import '../../scss/pre.tmp.scss';


.unl .dcf-tab {
  margin-bottom: -#{\$border-width-tab};
}


.unl .dcf-tab[aria-selected] {
  border-bottom-color: var(--bg-tab-selected);
  border-left-color: var(--b-tab);
  border-right-color: var(--b-tab);
  border-top-color: var(--b-tab);
  border-style: \$border-style-tab;
  border-width: \$border-width-tab;
}


.unl .dcf-tabs-panel > *:last-child {
  margin-bottom: 0;
}


// Responsive tabs
@include mq(md, max, width) {

  .unl .dcf-tabs-responsive .dcf-tab {
    border-bottom-width: 0;
    border-left: \$border-width-tab \$border-style-tab var(--b-tab);
    border-right: \$border-width-tab \$border-style-tab var(--b-tab);
    border-top: \$border-width-tab \$border-style-tab var(--b-tab);
    margin-bottom: 0;
  }


  .unl .dcf-tabs-responsive .dcf-tab[aria-selected] {
    position: relative;
  }


  .unl .dcf-tabs-responsive .dcf-tab[aria-selected]::before {
    border-bottom: #{ms(-5)}em solid transparent;
    border-left: #{ms(-5)}em solid var(--b-tab);
    border-top: #{ms(-5)}em solid transparent;
    content: '';
    left: 0;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/js-css/tabs.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////
// THEME / COMPONENTS / TABS
////////////////////////////


@import '../../scss/pre.tmp.scss';


.unl .dcf-tab {
  margin-bottom: -#{\$border-width-tab};
}


.unl .dcf-tab[aria-selected] {
  border-bottom-color: var(--bg-tab-selected);
  border-left-color: var(--b-tab);
  border-right-color: var(--b-tab);
  border-top-color: var(--b-tab);
  border-style: \$border-style-tab;
  border-width: \$border-width-tab;
}


.unl .dcf-tabs-panel > *:last-child {
  margin-bottom: 0;
}


// Responsive tabs
@include mq(md, max, width) {

  .unl .dcf-tabs-responsive .dcf-tab {
    border-bottom-width: 0;
    border-left: \$border-width-tab \$border-style-tab var(--b-tab);
    border-right: \$border-width-tab \$border-style-tab var(--b-tab);
    border-top: \$border-width-tab \$border-style-tab var(--b-tab);
    margin-bottom: 0;
  }


  .unl .dcf-tabs-responsive .dcf-tab[aria-selected] {
    position: relative;
  }


  .unl .dcf-tabs-responsive .dcf-tab[aria-selected]::before {
    border-bottom: #{ms(-5)}em solid transparent;
    border-left: #{ms(-5)}em solid var(--b-tab);
    border-top: #{ms(-5)}em solid transparent;
    content: '';
    left: 0;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }

}
", "wdn/templates_5.2/js/js-css/tabs.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/js-css/tabs.scss");
    }
}
