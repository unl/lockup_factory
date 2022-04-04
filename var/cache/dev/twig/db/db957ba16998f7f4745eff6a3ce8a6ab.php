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

/* wdn/templates_5.3/scss/elements/_elements.details-summary.scss */
class __TwigTemplate_c2e8050a1cda4146efb03bc95dc27462 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/elements/_elements.details-summary.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/elements/_elements.details-summary.scss"));

        // line 1
        echo "///////////////////////////////////////
// THEME / ELEMENTS / DETAILS & SUMMARY
///////////////////////////////////////


.unl details {
  border-top: 1px solid \$border-color-details;
}


.unl details:last-of-type {
  border-bottom: 1px solid \$border-color-details;
}


.unl summary {
  color: \$color-summary;
  @include ls-h;
  @include lh-3;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/elements/_elements.details-summary.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////////
// THEME / ELEMENTS / DETAILS & SUMMARY
///////////////////////////////////////


.unl details {
  border-top: 1px solid \$border-color-details;
}


.unl details:last-of-type {
  border-bottom: 1px solid \$border-color-details;
}


.unl summary {
  color: \$color-summary;
  @include ls-h;
  @include lh-3;
}
", "wdn/templates_5.3/scss/elements/_elements.details-summary.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/elements/_elements.details-summary.scss");
    }
}
