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

/* wdn/templates_5.3/scss/deprecated/deprecated.tabs.scss */
class __TwigTemplate_cfc7e03071c95239d8f079d5b04469fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.tabs.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.tabs.scss"));

        // line 1
        echo "////////////////////////////
// THEME / DEPRECATED / TABS
////////////////////////////


.wdn_tabs {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin-bottom: 0;
  padding-left: 0;
}

.wdn_tabs > li {
//   background-color: mix(\$cream, \$gray, 98%);
  background-color: adjust-color(\$cream, \$saturation: -1);
  border-radius: \$roundrect;
  @include mr-3;

//   @media (prefers-color-scheme: dark) {
//     background-color: adjust-color(\$bg-color-body-dark-mode, \$saturation: -1);
//   }
}

.wdn_tabs > li.selected {
  background-color: var(--bg-tab-selected);
  border-radius: \$roundrect \$roundrect 0 0;
  box-shadow: 0 1px 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 0;
  position: relative;
}

.wdn_tabs > li.selected::after {
  background-color: var(--bg-tab-selected);
  bottom: -3px;
  content: '';
  height: 3px;
  position: absolute;
  width: 100%;
  z-index: 1;
}

.wdn_tabs > li a {
  border: 0;
  display: block;
  padding: #{ms(-2)}em #{ms(0)}em;
}

.wdn_tabs > li.selected a {
  @include pb-2;
}

// old sub-tabs may still exist in markup
.wdn_tabs > li ul {
  padding: 0 0 0 .4rem;
}

.wdn_tabs_content {
  background-color: var(--bg-tabs-panel);
  box-shadow: 0 1px 1px 1px rgba(0, 0, 0, 0.1);
  padding: #{ms(6)}em #{ms(4)}em;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.tabs.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////
// THEME / DEPRECATED / TABS
////////////////////////////


.wdn_tabs {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin-bottom: 0;
  padding-left: 0;
}

.wdn_tabs > li {
//   background-color: mix(\$cream, \$gray, 98%);
  background-color: adjust-color(\$cream, \$saturation: -1);
  border-radius: \$roundrect;
  @include mr-3;

//   @media (prefers-color-scheme: dark) {
//     background-color: adjust-color(\$bg-color-body-dark-mode, \$saturation: -1);
//   }
}

.wdn_tabs > li.selected {
  background-color: var(--bg-tab-selected);
  border-radius: \$roundrect \$roundrect 0 0;
  box-shadow: 0 1px 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 0;
  position: relative;
}

.wdn_tabs > li.selected::after {
  background-color: var(--bg-tab-selected);
  bottom: -3px;
  content: '';
  height: 3px;
  position: absolute;
  width: 100%;
  z-index: 1;
}

.wdn_tabs > li a {
  border: 0;
  display: block;
  padding: #{ms(-2)}em #{ms(0)}em;
}

.wdn_tabs > li.selected a {
  @include pb-2;
}

// old sub-tabs may still exist in markup
.wdn_tabs > li ul {
  padding: 0 0 0 .4rem;
}

.wdn_tabs_content {
  background-color: var(--bg-tabs-panel);
  box-shadow: 0 1px 1px 1px rgba(0, 0, 0, 0.1);
  padding: #{ms(6)}em #{ms(4)}em;
}
", "wdn/templates_5.3/scss/deprecated/deprecated.tabs.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.tabs.scss");
    }
}
