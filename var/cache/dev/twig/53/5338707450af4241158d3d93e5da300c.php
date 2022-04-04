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

/* wdn/templates_5.3/scss/variables/_variables.backgrounds.scss */
class __TwigTemplate_6110cbf82af020312dd12e16244faf23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.backgrounds.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.backgrounds.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / VARIABLES / BACKGROUNDS
//////////////////////////////////


@import '_variables.color-palette';


// Background color
\$bg-color-brand-alpha-light-mode: \$scarlet;                       // Alpha brand background-color (scarlet) in light mode
\$bg-color-brand-alpha-dark-mode: \$scarlet;                        // Alpha brand background-color (scarlet) in dark mode
\$bg-color-brand-alpha: var(--bg-brand-alpha);

\$bg-color-brand-zeta: \$green;                                     // Zeta brand background-color (green)

\$bg-color-brand-eta: \$blue;                                       // Eta brand background-color (blue)

\$bg-color-brand-theta: \$purple;                                   // Theta brand background-color (purple)

\$bg-color-brand-light-zeta-light-mode: \$light-green;              // Light zeta brand background-color (light green) in light mode
\$bg-color-brand-light-zeta-dark-mode: \$green;                     // Light zeta brand background-color (light green) in dark mode
\$bg-color-brand-light-zeta: var(--bg-brand-light-zeta);

\$bg-color-brand-light-eta-light-mode: \$light-blue;                // Light eta brand background-color (light blue) in light mode
\$bg-color-brand-light-eta-dark-mode: \$blue;                       // Light eta brand background-color (light blue) in dark mode
\$bg-color-brand-light-eta: var(--bg-brand-light-eta);

\$bg-color-brand-light-theta-light-mode: \$light-purple;            // Light theta brand background-color (light purple) in light mode
\$bg-color-brand-light-theta-dark-mode: \$purple;                   // Light theta brand background-color (light purple) in dark mode
\$bg-color-brand-light-theta: var(--bg-brand-light-theta);

\$bg-color-white-light-mode: \$white;                               // White background-color in light mode
\$bg-color-white-dark-mode: \$darker-gray-s1;                       // White background-color in dark mode
\$bg-color-white: var(--bg-white);

\$bg-color-gray-light-light-mode: \$light-gray;                     // Light gray background-color in light mode
\$bg-color-gray-light-dark-mode: \$darker-gray-s2;                  // Light gray background-color in dark mode
\$bg-color-gray-light: var(--bg-light-gray);

\$bg-color-gray-lighter-light-mode: \$lighter-gray;                 // Lighter gray background-color in light mode
\$bg-color-gray-lighter-dark-mode: \$darker-gray-s3;                // Lighter gray background-color in dark mode
\$bg-color-gray-lighter: var(--bg-lighter-gray);

\$bg-color-gray-lightest-light-mode: \$lightest-gray;               // Lightest gray background-color in light mode
\$bg-color-gray-lightest-dark-mode: \$darker-gray-s4;               // Lightest gray background-color in dark mode
\$bg-color-gray-lightest: var(--bg-lightest-gray);

\$bg-color-inverse-light-mode: \$color-body-light-mode;             // Inverse background-color in light mode
\$bg-color-inverse-dark-mode: \$color-body-dark-mode;               // Inverse background-color in dark mode
\$bg-color-inverse: var(--bg-inverse);

\$bg-color-overlay-dark-light-mode: fade-out(\$darkest-gray,.06);   // Dark overlay background-color for modals in light mode
\$bg-color-overlay-dark-dark-mode: fade-out(\$black,.06);           // Dark overlay background-color for modals in dark mode
\$bg-color-overlay-dark: var(--bg-overlay-dark);

\$bg-color-overlay-light-light-mode: fade-out(\$cream,.06);         // Light overlay background-color for modals in light mode
\$bg-color-overlay-light-dark-mode: fade-out(\$black,.06);          // Light overlay background-color for modals in dark mode
\$bg-color-overlay-light: var(--bg-overlay-light);

\$bg-color-dialog-light-mode: \$white;                              // Dialog background-color in light mode
\$bg-color-dialog-dark-mode: \$darker-gray-s1;                      // Dialog background-color in dark mode
\$bg-color-dialog: var(--bg-dialog);
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.backgrounds.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / VARIABLES / BACKGROUNDS
//////////////////////////////////


@import '_variables.color-palette';


// Background color
\$bg-color-brand-alpha-light-mode: \$scarlet;                       // Alpha brand background-color (scarlet) in light mode
\$bg-color-brand-alpha-dark-mode: \$scarlet;                        // Alpha brand background-color (scarlet) in dark mode
\$bg-color-brand-alpha: var(--bg-brand-alpha);

\$bg-color-brand-zeta: \$green;                                     // Zeta brand background-color (green)

\$bg-color-brand-eta: \$blue;                                       // Eta brand background-color (blue)

\$bg-color-brand-theta: \$purple;                                   // Theta brand background-color (purple)

\$bg-color-brand-light-zeta-light-mode: \$light-green;              // Light zeta brand background-color (light green) in light mode
\$bg-color-brand-light-zeta-dark-mode: \$green;                     // Light zeta brand background-color (light green) in dark mode
\$bg-color-brand-light-zeta: var(--bg-brand-light-zeta);

\$bg-color-brand-light-eta-light-mode: \$light-blue;                // Light eta brand background-color (light blue) in light mode
\$bg-color-brand-light-eta-dark-mode: \$blue;                       // Light eta brand background-color (light blue) in dark mode
\$bg-color-brand-light-eta: var(--bg-brand-light-eta);

\$bg-color-brand-light-theta-light-mode: \$light-purple;            // Light theta brand background-color (light purple) in light mode
\$bg-color-brand-light-theta-dark-mode: \$purple;                   // Light theta brand background-color (light purple) in dark mode
\$bg-color-brand-light-theta: var(--bg-brand-light-theta);

\$bg-color-white-light-mode: \$white;                               // White background-color in light mode
\$bg-color-white-dark-mode: \$darker-gray-s1;                       // White background-color in dark mode
\$bg-color-white: var(--bg-white);

\$bg-color-gray-light-light-mode: \$light-gray;                     // Light gray background-color in light mode
\$bg-color-gray-light-dark-mode: \$darker-gray-s2;                  // Light gray background-color in dark mode
\$bg-color-gray-light: var(--bg-light-gray);

\$bg-color-gray-lighter-light-mode: \$lighter-gray;                 // Lighter gray background-color in light mode
\$bg-color-gray-lighter-dark-mode: \$darker-gray-s3;                // Lighter gray background-color in dark mode
\$bg-color-gray-lighter: var(--bg-lighter-gray);

\$bg-color-gray-lightest-light-mode: \$lightest-gray;               // Lightest gray background-color in light mode
\$bg-color-gray-lightest-dark-mode: \$darker-gray-s4;               // Lightest gray background-color in dark mode
\$bg-color-gray-lightest: var(--bg-lightest-gray);

\$bg-color-inverse-light-mode: \$color-body-light-mode;             // Inverse background-color in light mode
\$bg-color-inverse-dark-mode: \$color-body-dark-mode;               // Inverse background-color in dark mode
\$bg-color-inverse: var(--bg-inverse);

\$bg-color-overlay-dark-light-mode: fade-out(\$darkest-gray,.06);   // Dark overlay background-color for modals in light mode
\$bg-color-overlay-dark-dark-mode: fade-out(\$black,.06);           // Dark overlay background-color for modals in dark mode
\$bg-color-overlay-dark: var(--bg-overlay-dark);

\$bg-color-overlay-light-light-mode: fade-out(\$cream,.06);         // Light overlay background-color for modals in light mode
\$bg-color-overlay-light-dark-mode: fade-out(\$black,.06);          // Light overlay background-color for modals in dark mode
\$bg-color-overlay-light: var(--bg-overlay-light);

\$bg-color-dialog-light-mode: \$white;                              // Dialog background-color in light mode
\$bg-color-dialog-dark-mode: \$darker-gray-s1;                      // Dialog background-color in dark mode
\$bg-color-dialog: var(--bg-dialog);
", "wdn/templates_5.3/scss/variables/_variables.backgrounds.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.backgrounds.scss");
    }
}
