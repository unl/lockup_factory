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

/* wdn/templates_5.3/scss/variables/_variables.forms-selects.scss */
class __TwigTemplate_422748c625e72f330800843c5eac129b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.forms-selects.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.forms-selects.scss"));

        // line 1
        echo "//////////////////////////////////////
// THEME / VARIABLES / FORMS - SELECTS
//////////////////////////////////////


@import '_variables.body';
@import '_variables.color-palette';
@import '_variables.forms';
@import '_variables.sizing';


// Background color
\$bg-color-select-1-light-mode: \$bg-color-input-light-mode;  // <select> top linear-gradient background-color in light mode
\$bg-color-select-1-dark-mode: \$bg-color-input-dark-mode;    // <select> top linear-gradient background-color in dark mode
\$bg-color-select-1: var(--bg-select-1);

\$bg-color-select-2-light-mode: \$bg-color-input-light-mode;  // <select> bottom linear-gradient background-color in light mode
\$bg-color-select-2-dark-mode: \$bg-color-input-dark-mode;    // <select> bottom linear-gradient background-color in dark mode
\$bg-color-select-2: var(--bg-select-2);


// Background position
\$bg-position-arrow: \$length-em-4;                           // Position of arrow from right edge of <select>


// Background size
\$bg-size-arrow-select: \$length-em-2;                        // Size of <select> arrow


// Color
\$color-select: var(--body);

\$color-select-arrow-light-mode: \$color-body-light-mode;     // <select> arrow color in light mode
\$color-select-arrow-dark-mode: \$color-body-dark-mode;       // <select> arrow color in dark mode


// Padding
\$padding-right-select: \$length-em-7;                        // <select> padding-right is larger to allow for arrow
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.forms-selects.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////////
// THEME / VARIABLES / FORMS - SELECTS
//////////////////////////////////////


@import '_variables.body';
@import '_variables.color-palette';
@import '_variables.forms';
@import '_variables.sizing';


// Background color
\$bg-color-select-1-light-mode: \$bg-color-input-light-mode;  // <select> top linear-gradient background-color in light mode
\$bg-color-select-1-dark-mode: \$bg-color-input-dark-mode;    // <select> top linear-gradient background-color in dark mode
\$bg-color-select-1: var(--bg-select-1);

\$bg-color-select-2-light-mode: \$bg-color-input-light-mode;  // <select> bottom linear-gradient background-color in light mode
\$bg-color-select-2-dark-mode: \$bg-color-input-dark-mode;    // <select> bottom linear-gradient background-color in dark mode
\$bg-color-select-2: var(--bg-select-2);


// Background position
\$bg-position-arrow: \$length-em-4;                           // Position of arrow from right edge of <select>


// Background size
\$bg-size-arrow-select: \$length-em-2;                        // Size of <select> arrow


// Color
\$color-select: var(--body);

\$color-select-arrow-light-mode: \$color-body-light-mode;     // <select> arrow color in light mode
\$color-select-arrow-dark-mode: \$color-body-dark-mode;       // <select> arrow color in dark mode


// Padding
\$padding-right-select: \$length-em-7;                        // <select> padding-right is larger to allow for arrow
", "wdn/templates_5.3/scss/variables/_variables.forms-selects.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.forms-selects.scss");
    }
}
