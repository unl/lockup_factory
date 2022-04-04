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

/* wdn/templates_5.3/scss/variables/_variables.borders.scss */
class __TwigTemplate_080803a0b21e20209a1d597770b2fc77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.borders.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.borders.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / VARIABLES / BORDERS
//////////////////////////////


@import '_variables.color-palette';
@import '_variables.sizing';


// Border color
\$border-color-gray-light-light-mode: \$light-gray;       // Light gray border-color in light mode
\$border-color-gray-light-dark-mode: \$darker-gray;       // Light gray border-color in dark mode
\$border-color-gray-light: var(--b-light-gray);

\$border-color-gray-lighter-light-mode: \$lighter-gray;   // Lighter gray border-color in light mode
\$border-color-gray-lighter-dark-mode: \$darker-gray;     // Lighter gray border-color in dark mode
\$border-color-gray-lighter: var(--b-lighter-gray);

\$border-color-gray-lightest-light-mode: \$lightest-gray; // Lightest gray border-color in light mode
\$border-color-gray-lightest-dark-mode: \$darker-gray;    // Lightest gray border-color in dark mode
\$border-color-gray-lightest: var(--b-lightest-gray);

\$border-color: var(--b-light-gray);                     // Legacy variable


// Border radius
\$circle: 50%;
\$pill: \$length-em-4; // 1em
\$roundrect: 3px;
\$sharp: 0;
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.borders.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / VARIABLES / BORDERS
//////////////////////////////


@import '_variables.color-palette';
@import '_variables.sizing';


// Border color
\$border-color-gray-light-light-mode: \$light-gray;       // Light gray border-color in light mode
\$border-color-gray-light-dark-mode: \$darker-gray;       // Light gray border-color in dark mode
\$border-color-gray-light: var(--b-light-gray);

\$border-color-gray-lighter-light-mode: \$lighter-gray;   // Lighter gray border-color in light mode
\$border-color-gray-lighter-dark-mode: \$darker-gray;     // Lighter gray border-color in dark mode
\$border-color-gray-lighter: var(--b-lighter-gray);

\$border-color-gray-lightest-light-mode: \$lightest-gray; // Lightest gray border-color in light mode
\$border-color-gray-lightest-dark-mode: \$darker-gray;    // Lightest gray border-color in dark mode
\$border-color-gray-lightest: var(--b-lightest-gray);

\$border-color: var(--b-light-gray);                     // Legacy variable


// Border radius
\$circle: 50%;
\$pill: \$length-em-4; // 1em
\$roundrect: 3px;
\$sharp: 0;
", "wdn/templates_5.3/scss/variables/_variables.borders.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.borders.scss");
    }
}
