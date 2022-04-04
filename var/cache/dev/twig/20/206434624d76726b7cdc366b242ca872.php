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

/* wdn/templates_5.3/scss/generic/_generic.focus.scss */
class __TwigTemplate_cc7d0dd09dd3a34126d117ca7ed2ed6d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/generic/_generic.focus.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/generic/_generic.focus.scss"));

        // line 1
        echo "//////////////////////////
// THEME / GENERIC / FOCUS
//////////////////////////


*:focus {
  outline: 2px solid \$color-focus-outline;
}


// https://css-tricks.com/the-focus-visible-trick/
// Remove :focus styles for mouse users. Preserve browser defaults for keyboard users.
*:focus:not(:focus-visible) {
  outline: 3px solid transparent; // https://sarahmhigley.com/writing/whcm-quick-tips/
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/generic/_generic.focus.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////
// THEME / GENERIC / FOCUS
//////////////////////////


*:focus {
  outline: 2px solid \$color-focus-outline;
}


// https://css-tricks.com/the-focus-visible-trick/
// Remove :focus styles for mouse users. Preserve browser defaults for keyboard users.
*:focus:not(:focus-visible) {
  outline: 3px solid transparent; // https://sarahmhigley.com/writing/whcm-quick-tips/
}
", "wdn/templates_5.3/scss/generic/_generic.focus.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/generic/_generic.focus.scss");
    }
}
