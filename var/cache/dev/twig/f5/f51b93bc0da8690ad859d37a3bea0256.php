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

/* wdn/templates_5.3/scss/variables/_variables.transitions.scss */
class __TwigTemplate_da15aebb27d0fe4f06f21682efc1e34a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.transitions.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.transitions.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / VARIABLES / TRANSITIONS
//////////////////////////////////


// Duration
\$transition-duration-fade-in: 200ms;
\$transition-duration-fade-out: 400ms;
\$transition-duration-hover-on: 200ms;
\$transition-duration-hover-off: 400ms;


// Timing Function (Easing)
\$transition-timing-fn-fade-in: cubic-bezier(.25, .46, .45, .94);
\$transition-timing-fn-fade-out: cubic-bezier(.25, .46, .45, .94);
\$transition-timing-fn-hover-on: ease-out;
\$transition-timing-fn-hover-off: ease-out;
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.transitions.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / VARIABLES / TRANSITIONS
//////////////////////////////////


// Duration
\$transition-duration-fade-in: 200ms;
\$transition-duration-fade-out: 400ms;
\$transition-duration-hover-on: 200ms;
\$transition-duration-hover-off: 400ms;


// Timing Function (Easing)
\$transition-timing-fn-fade-in: cubic-bezier(.25, .46, .45, .94);
\$transition-timing-fn-fade-out: cubic-bezier(.25, .46, .45, .94);
\$transition-timing-fn-hover-on: ease-out;
\$transition-timing-fn-hover-off: ease-out;
", "wdn/templates_5.3/scss/variables/_variables.transitions.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.transitions.scss");
    }
}
