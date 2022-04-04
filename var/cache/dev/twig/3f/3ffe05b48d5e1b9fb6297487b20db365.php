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

/* wdn/templates_5.3/scss/variables/_variables.colors-text.scss */
class __TwigTemplate_0a218dd177d891a630c8763bbc89290e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.colors-text.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.colors-text.scss"));

        // line 1
        echo "////////////////////////////////////
// THEME / VARIABLES / COLORS (TEXT)
////////////////////////////////////


@import '_variables.color-palette';


// Colors
\$color-brand-alpha-light-mode: \$scarlet;                // Alpha brand text color (scarlet) in light mode
\$color-brand-alpha-dark-mode: \$lightest-gray;           // Alpha brand text color (scarlet) in dark mode
\$color-brand-alpha: var(--brand-alpha);

\$color-brand-zeta-light-mode: \$green;                   // Zeta brand text color (green) in light mode
\$color-brand-zeta-dark-mode: \$light-green;              // Zeta brand text color (green) in dark mode
\$color-brand-zeta: var(--brand-zeta);

\$color-brand-eta-light-mode: \$blue;                     // Eta brand text color (blue) in light mode
\$color-brand-eta-dark-mode: \$light-blue;                // Eta brand text color (blue) in dark mode
\$color-brand-eta: var(--brand-eta);

\$color-brand-theta-light-mode: \$purple;                 // Theta brand text color (purple) in light mode
\$color-brand-theta-dark-mode: \$light-purple;            // Theta brand text color (purple) in dark mode
\$color-brand-theta: var(--brand-theta);

\$color-gray-dark-light-mode: \$dark-gray;                // Dark text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-dark-dark-mode: \$light-gray;                // Dark text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-dark: var(--dark-gray);

\$color-gray-darker-light-mode: \$darker-gray;            // Darker text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darker-dark-mode: \$lighter-gray;            // Darker text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darker: var(--darker-gray);

\$color-gray-darkest-light-mode: \$darkest-gray;          // Darkest text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darkest-dark-mode: \$lightest-gray;          // Darkest text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darkest: var(--darkest-gray);

\$color-light-text-light-mode: \$dark-gray;               // Light text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-light-text-dark-mode: \$gray-s1;                  // Light text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-light-text: var(--dark-gray);

\$color-inverse-light-mode: \$bg-color-body-light-mode;   // Inverse text color in light mode
\$color-inverse-dark-mode: \$bg-color-body-dark-mode;     // Inverse text color in dark mode
\$color-inverse: var(--inverse);
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.colors-text.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////
// THEME / VARIABLES / COLORS (TEXT)
////////////////////////////////////


@import '_variables.color-palette';


// Colors
\$color-brand-alpha-light-mode: \$scarlet;                // Alpha brand text color (scarlet) in light mode
\$color-brand-alpha-dark-mode: \$lightest-gray;           // Alpha brand text color (scarlet) in dark mode
\$color-brand-alpha: var(--brand-alpha);

\$color-brand-zeta-light-mode: \$green;                   // Zeta brand text color (green) in light mode
\$color-brand-zeta-dark-mode: \$light-green;              // Zeta brand text color (green) in dark mode
\$color-brand-zeta: var(--brand-zeta);

\$color-brand-eta-light-mode: \$blue;                     // Eta brand text color (blue) in light mode
\$color-brand-eta-dark-mode: \$light-blue;                // Eta brand text color (blue) in dark mode
\$color-brand-eta: var(--brand-eta);

\$color-brand-theta-light-mode: \$purple;                 // Theta brand text color (purple) in light mode
\$color-brand-theta-dark-mode: \$light-purple;            // Theta brand text color (purple) in dark mode
\$color-brand-theta: var(--brand-theta);

\$color-gray-dark-light-mode: \$dark-gray;                // Dark text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-dark-dark-mode: \$light-gray;                // Dark text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-dark: var(--dark-gray);

\$color-gray-darker-light-mode: \$darker-gray;            // Darker text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darker-dark-mode: \$lighter-gray;            // Darker text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darker: var(--darker-gray);

\$color-gray-darkest-light-mode: \$darkest-gray;          // Darkest text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darkest-dark-mode: \$lightest-gray;          // Darkest text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-gray-darkest: var(--darkest-gray);

\$color-light-text-light-mode: \$dark-gray;               // Light text color in light mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-light-text-dark-mode: \$gray-s1;                  // Light text color in dark mode -- must meet WCAG AA (minimum contrast ratio of 4.5)
\$color-light-text: var(--dark-gray);

\$color-inverse-light-mode: \$bg-color-body-light-mode;   // Inverse text color in light mode
\$color-inverse-dark-mode: \$bg-color-body-dark-mode;     // Inverse text color in dark mode
\$color-inverse: var(--inverse);
", "wdn/templates_5.3/scss/variables/_variables.colors-text.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.colors-text.scss");
    }
}
