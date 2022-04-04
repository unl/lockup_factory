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

/* wdn/templates_5.3/scss/elements/_elements.headings.scss */
class __TwigTemplate_b8534f0b444e65aeb581d02d354d3c84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/elements/_elements.headings.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/elements/_elements.headings.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / ELEMENTS / HEADINGS
//////////////////////////////


.unl h1,
.unl h2,
.unl h3,
.unl h4,
.unl h5,
.unl h6 {
  font-weight: 700;
  @include ls-h;
}


.unl h1 a,
.unl h2 a,
.unl h3 a,
.unl h4 a,
.unl h5 a,
.unl h6 a {
  text-decoration: none;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/elements/_elements.headings.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / ELEMENTS / HEADINGS
//////////////////////////////


.unl h1,
.unl h2,
.unl h3,
.unl h4,
.unl h5,
.unl h6 {
  font-weight: 700;
  @include ls-h;
}


.unl h1 a,
.unl h2 a,
.unl h3 a,
.unl h4 a,
.unl h5 a,
.unl h6 a {
  text-decoration: none;
}
", "wdn/templates_5.3/scss/elements/_elements.headings.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/elements/_elements.headings.scss");
    }
}
