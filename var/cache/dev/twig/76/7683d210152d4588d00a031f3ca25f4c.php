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

/* wdn/templates_5.3/scss/components/_components.heroes-default.scss */
class __TwigTemplate_cbd6174f9a125ded0b7617b2b365d4e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes-default.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes-default.scss"));

        // line 1
        echo "///////////////////////////////////////
// THEME / COMPONENTS / HEROES: DEFAULT
///////////////////////////////////////


.unl .dcf-hero-default {
  @include bg-lighter;
  @include mb-8;
  @include pt-5;
  @include pb-4;
}


.unl .dcf-hero-default .dcf-page-title {
  padding-left: \$length-vw-2; // Add padding to equal the wrapper object's left padding
  padding-right: \$length-vw-2; // Add padding to equal the wrapper object's right padding
  @include pt-6;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.heroes-default.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////////
// THEME / COMPONENTS / HEROES: DEFAULT
///////////////////////////////////////


.unl .dcf-hero-default {
  @include bg-lighter;
  @include mb-8;
  @include pt-5;
  @include pb-4;
}


.unl .dcf-hero-default .dcf-page-title {
  padding-left: \$length-vw-2; // Add padding to equal the wrapper object's left padding
  padding-right: \$length-vw-2; // Add padding to equal the wrapper object's right padding
  @include pt-6;
}
", "wdn/templates_5.3/scss/components/_components.heroes-default.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.heroes-default.scss");
    }
}
