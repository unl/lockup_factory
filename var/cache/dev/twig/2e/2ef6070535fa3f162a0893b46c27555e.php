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

/* wdn/templates_5.3/scss/variables/_variables.details-summary.scss */
class __TwigTemplate_ac1adaa5dea6f465fe234a9ea976967c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.details-summary.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.details-summary.scss"));

        // line 1
        echo "////////////////////////////////////////
// THEME / VARIABLES / DETAILS & SUMMARY
////////////////////////////////////////


@import '_variables.modular-scale';
@import '_variables.sizing';


// Border color
\$border-color-details: var(--b);                    // Border color of details


// Color
\$color-summary: var(--heading);                     // Color of summary


// Font size
\$font-size-summary: #{ms(1)}em;                     // Summary font-size: 1.13em


// Font weight
\$font-weight-summary-bold: true;                    // Summary font-weight bold? True/false


// Margin
\$margin-bottom-details-open-summary: #{ms(-4)}rem;  // Margin-bottom of details


// Padding
\$padding-bottom-details: \$length-em-3;              // Padding-bottom of details
\$padding-top-details: \$length-em-3;                 // Padding-top of details
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.details-summary.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////////
// THEME / VARIABLES / DETAILS & SUMMARY
////////////////////////////////////////


@import '_variables.modular-scale';
@import '_variables.sizing';


// Border color
\$border-color-details: var(--b);                    // Border color of details


// Color
\$color-summary: var(--heading);                     // Color of summary


// Font size
\$font-size-summary: #{ms(1)}em;                     // Summary font-size: 1.13em


// Font weight
\$font-weight-summary-bold: true;                    // Summary font-weight bold? True/false


// Margin
\$margin-bottom-details-open-summary: #{ms(-4)}rem;  // Margin-bottom of details


// Padding
\$padding-bottom-details: \$length-em-3;              // Padding-bottom of details
\$padding-top-details: \$length-em-3;                 // Padding-top of details
", "wdn/templates_5.3/scss/variables/_variables.details-summary.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.details-summary.scss");
    }
}
