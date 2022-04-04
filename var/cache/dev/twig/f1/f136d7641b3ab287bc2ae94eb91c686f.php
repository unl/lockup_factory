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

/* wdn/templates_5.3/scss/components/_components.headings.scss */
class __TwigTemplate_a7a03ef9a73e771411f99847dccc0345 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.headings.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.headings.scss"));

        // line 1
        echo "////////////////////////////////
// THEME / COMPONENTS / HEADINGS
////////////////////////////////


.unl .dcf-subhead {
  font-weight: 400;
  @include ls-2;
  @include lh-3;
}


.unl-heading-ornament::after {
  background-color: currentColor;
  content: '';
  display: block;
  height: 2px;
  margin-left: .03em;
  margin-top: 1rem;
  @include w-6;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.headings.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////
// THEME / COMPONENTS / HEADINGS
////////////////////////////////


.unl .dcf-subhead {
  font-weight: 400;
  @include ls-2;
  @include lh-3;
}


.unl-heading-ornament::after {
  background-color: currentColor;
  content: '';
  display: block;
  height: 2px;
  margin-left: .03em;
  margin-top: 1rem;
  @include w-6;
}
", "wdn/templates_5.3/scss/components/_components.headings.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.headings.scss");
    }
}