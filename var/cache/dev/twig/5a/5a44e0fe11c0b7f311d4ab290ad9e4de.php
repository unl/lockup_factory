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

/* wdn/templates_5.3/scss/components/_components.forms-selects.scss */
class __TwigTemplate_3309f243ead36aa863e6072762d8a590 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.forms-selects.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.forms-selects.scss"));

        // line 1
        echo "///////////////////////////////////////
// THEME / COMPONENTS / FORMS - SELECTS
///////////////////////////////////////


.unl .dcf-input-select, // TODO: deprecate?
.unl .dcf-form select {
  transition: border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-input-select:hover, // TODO: deprecate?
.unl .dcf-form select:hover {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-input-select:focus, // TODO: deprecate?
.unl .dcf-form select:focus {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.forms-selects.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////////
// THEME / COMPONENTS / FORMS - SELECTS
///////////////////////////////////////


.unl .dcf-input-select, // TODO: deprecate?
.unl .dcf-form select {
  transition: border-color \$transition-duration-hover-off \$transition-timing-fn-hover-off, box-shadow \$transition-duration-hover-off \$transition-timing-fn-hover-off;
}


.unl .dcf-input-select:hover, // TODO: deprecate?
.unl .dcf-form select:hover {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}


.unl .dcf-input-select:focus, // TODO: deprecate?
.unl .dcf-form select:focus {
  box-shadow: 0 0 0 3px \$bg-color-body, 0 0 0 5px \$border-color-input-focus;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}
", "wdn/templates_5.3/scss/components/_components.forms-selects.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.forms-selects.scss");
    }
}
