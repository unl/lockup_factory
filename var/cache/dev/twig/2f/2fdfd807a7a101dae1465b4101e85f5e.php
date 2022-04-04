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

/* wdn/templates_5.3/scss/variables/_variables.breakpoints.scss */
class __TwigTemplate_6bf08d3abfee68340043b5a4380466b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.breakpoints.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.breakpoints.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / VARIABLES / BREAKPOINTS
//////////////////////////////////


// Ems
\$mq-ems: true;
\$mq-em-base: 16px !default;


// Breakpoints
\$mq-breakpoints: (
  'sm': 673.44px,   // 42.09em
  'md': 897.92px,   // 56.12em
  'lg': 1197.28px,  // 74.83em
  'xl': 1596.32px,  // 99.77em
) !default;

\$mq-media: \"only screen\" !default;
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.breakpoints.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / VARIABLES / BREAKPOINTS
//////////////////////////////////


// Ems
\$mq-ems: true;
\$mq-em-base: 16px !default;


// Breakpoints
\$mq-breakpoints: (
  'sm': 673.44px,   // 42.09em
  'md': 897.92px,   // 56.12em
  'lg': 1197.28px,  // 74.83em
  'xl': 1596.32px,  // 99.77em
) !default;

\$mq-media: \"only screen\" !default;
", "wdn/templates_5.3/scss/variables/_variables.breakpoints.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.breakpoints.scss");
    }
}
