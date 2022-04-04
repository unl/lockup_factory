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

/* wdn/templates_5.3/scss/variables/_variables.buttons.scss */
class __TwigTemplate_9b117e23edea3c980a5c9d43177fd409 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.buttons.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.buttons.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / VARIABLES / BUTTONS
//////////////////////////////


@import '_variables.anchors';
@import '_variables.borders';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color (inverse listed first for use with non-inverse in dark mode)
\$bg-color-button-inverse-primary: \$lighter-gray;                                    // Background-color for inverse primary button

\$bg-color-button-inverse-primary-hover: \$white;                                     // Background-color for inverse secondary and tertiary buttons on hover

\$bg-color-button-inverse-secondary: transparent;                                    // Background-color for inverse secondary button

\$bg-color-button-inverse-tertiary: transparent;                                     // Background-color for inverse tertiary button

\$bg-color-button-inverse-secondary-tertiary-hover: fade-out(\$white, .93);           // Background-color for inverse secondary and tertiary buttons on hover

\$bg-color-button-primary-light-mode: \$color-link-light-mode;                        // Background-color for primary button in light mode
\$bg-color-button-primary-dark-mode: \$bg-color-button-inverse-primary;               // Background-color for primary button in dark mode
\$bg-color-button-primary: var(--bg-btn-primary);

\$bg-color-button-primary-hover-light-mode: \$color-hover-light-mode;                 // Background-color for primary button on hover in light mode
\$bg-color-button-primary-hover-dark-mode: \$bg-color-button-inverse-primary-hover;   // Background-color for primary button on hover in dark mode
\$bg-color-button-primary-hover: var(--bg-btn-primary-hover);

\$bg-color-button-secondary-light-mode: \$white;                                      // Background-color for secondary button in light mode
\$bg-color-button-secondary-dark-mode: \$bg-color-button-inverse-secondary;           // Background-color for secondary button in dark mode
\$bg-color-button-secondary: var(--bg-btn-secondary);

\$bg-color-button-tertiary: transparent;                                             // Background-color for tertiary button

\$bg-color-button-secondary-tertiary-hover-light-mode: fade-out(\$color-hover-light-mode, .93);             // Background-color for secondary and tertiary buttons on hover in light mode
\$bg-color-button-secondary-tertiary-hover-dark-mode: \$bg-color-button-inverse-secondary-tertiary-hover;   // Background-color for secondary and tertiary buttons on hover in dark mode
\$bg-color-button-secondary-tertiary-hover: var(--bg-btn-secondary-tertiary-hover);


// Border radius
\$border-radius-button-roundrect: true;    // Button border-radius roundrect? True/false


// Border color (inverse listed first for use with non-inverse in dark mode)
\$border-color-button-inverse-primary: \$bg-color-button-inverse-primary;                   // Border-color for inverse primary button

\$border-color-button-inverse-primary-hover: \$bg-color-button-inverse-primary-hover;       // Border-color for inverse primary button on hover

\$border-color-button-primary-light-mode: \$bg-color-button-primary-light-mode;             // Border-color for primary button in light mode
\$border-color-button-primary-dark-mode: \$border-color-button-inverse-primary;             // Border-color for primary button in dark mode
\$border-color-button-primary: var(--b-btn-primary);

\$border-color-button-primary-hover-light-mode: \$bg-color-button-primary-hover-light-mode; // Border-color for primary button in light mode
\$border-color-button-primary-hover-dark-mode: \$bg-color-button-inverse-primary-hover;     // Border-color for primary button in dark mode
\$border-color-button-primary-hover: var(--b-btn-primary-hover);

\$border-color-button-secondary: currentColor;                                             // Border-color for secondary button in light mode

\$border-color-button-tertiary: transparent;                                               // Border-color for tertiary button in light mode

\$border-color-button-inverse-secondary: \$border-color-button-secondary;                   // Border-color for inverse secondary button

\$border-color-button-inverse-tertiary: \$border-color-button-tertiary;                     // Border-color for inverse tertiary button


// Border style
\$border-style-button: solid;              // Button border-style


// Border width
\$border-width-button: 2px;                // Button border-width


// Color (inverse listed first for use with non-inverse in dark mode)
\$color-button-inverse-primary: \$color-link-light-mode;                                              // Color (text) for inverse primary button

\$color-button-inverse-secondary: \$bg-color-button-inverse-primary;                                  // Color (text) for inverse secondary button

\$color-button-inverse-tertiary: \$bg-color-button-inverse-primary;                                   // Color (text) for inverse tertiary button

\$color-button-inverse-secondary-tertiary-hover: \$bg-color-button-inverse-primary-hover;             // Color (text) for inverse secondary and tertiary buttons on hover

\$color-button-primary-light-mode: \$white;                                                           // Color (text) for primary button in light mode
\$color-button-primary-dark-mode: \$color-button-inverse-primary;                                     // Color (text) for primary button in dark mode
\$color-button-primary: var(--btn-primary);

\$color-button-secondary-light-mode: \$color-link-light-mode;\t                                        // Color (text) for secondary button in light mode
\$color-button-secondary-dark-mode: \$color-button-inverse-secondary;                                 // Color (text) for secondary button in dark mode
\$color-button-secondary: var(--btn-secondary);

\$color-button-tertiary-light-mode: \$color-link-light-mode;                                          // Color (text) for tertiary button in light mode
\$color-button-tertiary-dark-mode: \$color-button-inverse-tertiary;                                   // Color (text) for tertiary button in dark mode
\$color-button-tertiary: var(--btn-tertiary);

\$color-button-secondary-tertiary-hover-light-mode: \$color-hover-light-mode;                         // Color (text) for secondary and tertiary buttons on hover
\$color-button-secondary-tertiary-hover-dark-mode: \$color-button-inverse-secondary-tertiary-hover;   // Color (text) for secondary and tertiary buttons on hover
\$color-button-secondary-tertiary-hover: var(--btn-secondary-tertiary-hover);


// Font size
\$font-size-button: #{ms(-1)}em;           // Button font-size: .84em


// Font weight
\$font-weight-button-bold: true;           // Bold button text? True/false


// Line height
\$line-height-button: #{ms(3)};            // Button line-height


// Padding
\$padding-bottom-button: \$length-em-3;     // Padding-bottom of button: .75em
\$padding-left-button: \$length-em-4;       // Padding-left of button: 1em
\$padding-right-button: \$length-em-4;      // Padding-right of button: 1em
\$padding-top-button: \$length-em-3;        // Padding-top of button: .75em


// Text transform
\$text-transform-button-uppercase: false;  // Uppercase button text? True/false
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.buttons.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / VARIABLES / BUTTONS
//////////////////////////////


@import '_variables.anchors';
@import '_variables.borders';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color (inverse listed first for use with non-inverse in dark mode)
\$bg-color-button-inverse-primary: \$lighter-gray;                                    // Background-color for inverse primary button

\$bg-color-button-inverse-primary-hover: \$white;                                     // Background-color for inverse secondary and tertiary buttons on hover

\$bg-color-button-inverse-secondary: transparent;                                    // Background-color for inverse secondary button

\$bg-color-button-inverse-tertiary: transparent;                                     // Background-color for inverse tertiary button

\$bg-color-button-inverse-secondary-tertiary-hover: fade-out(\$white, .93);           // Background-color for inverse secondary and tertiary buttons on hover

\$bg-color-button-primary-light-mode: \$color-link-light-mode;                        // Background-color for primary button in light mode
\$bg-color-button-primary-dark-mode: \$bg-color-button-inverse-primary;               // Background-color for primary button in dark mode
\$bg-color-button-primary: var(--bg-btn-primary);

\$bg-color-button-primary-hover-light-mode: \$color-hover-light-mode;                 // Background-color for primary button on hover in light mode
\$bg-color-button-primary-hover-dark-mode: \$bg-color-button-inverse-primary-hover;   // Background-color for primary button on hover in dark mode
\$bg-color-button-primary-hover: var(--bg-btn-primary-hover);

\$bg-color-button-secondary-light-mode: \$white;                                      // Background-color for secondary button in light mode
\$bg-color-button-secondary-dark-mode: \$bg-color-button-inverse-secondary;           // Background-color for secondary button in dark mode
\$bg-color-button-secondary: var(--bg-btn-secondary);

\$bg-color-button-tertiary: transparent;                                             // Background-color for tertiary button

\$bg-color-button-secondary-tertiary-hover-light-mode: fade-out(\$color-hover-light-mode, .93);             // Background-color for secondary and tertiary buttons on hover in light mode
\$bg-color-button-secondary-tertiary-hover-dark-mode: \$bg-color-button-inverse-secondary-tertiary-hover;   // Background-color for secondary and tertiary buttons on hover in dark mode
\$bg-color-button-secondary-tertiary-hover: var(--bg-btn-secondary-tertiary-hover);


// Border radius
\$border-radius-button-roundrect: true;    // Button border-radius roundrect? True/false


// Border color (inverse listed first for use with non-inverse in dark mode)
\$border-color-button-inverse-primary: \$bg-color-button-inverse-primary;                   // Border-color for inverse primary button

\$border-color-button-inverse-primary-hover: \$bg-color-button-inverse-primary-hover;       // Border-color for inverse primary button on hover

\$border-color-button-primary-light-mode: \$bg-color-button-primary-light-mode;             // Border-color for primary button in light mode
\$border-color-button-primary-dark-mode: \$border-color-button-inverse-primary;             // Border-color for primary button in dark mode
\$border-color-button-primary: var(--b-btn-primary);

\$border-color-button-primary-hover-light-mode: \$bg-color-button-primary-hover-light-mode; // Border-color for primary button in light mode
\$border-color-button-primary-hover-dark-mode: \$bg-color-button-inverse-primary-hover;     // Border-color for primary button in dark mode
\$border-color-button-primary-hover: var(--b-btn-primary-hover);

\$border-color-button-secondary: currentColor;                                             // Border-color for secondary button in light mode

\$border-color-button-tertiary: transparent;                                               // Border-color for tertiary button in light mode

\$border-color-button-inverse-secondary: \$border-color-button-secondary;                   // Border-color for inverse secondary button

\$border-color-button-inverse-tertiary: \$border-color-button-tertiary;                     // Border-color for inverse tertiary button


// Border style
\$border-style-button: solid;              // Button border-style


// Border width
\$border-width-button: 2px;                // Button border-width


// Color (inverse listed first for use with non-inverse in dark mode)
\$color-button-inverse-primary: \$color-link-light-mode;                                              // Color (text) for inverse primary button

\$color-button-inverse-secondary: \$bg-color-button-inverse-primary;                                  // Color (text) for inverse secondary button

\$color-button-inverse-tertiary: \$bg-color-button-inverse-primary;                                   // Color (text) for inverse tertiary button

\$color-button-inverse-secondary-tertiary-hover: \$bg-color-button-inverse-primary-hover;             // Color (text) for inverse secondary and tertiary buttons on hover

\$color-button-primary-light-mode: \$white;                                                           // Color (text) for primary button in light mode
\$color-button-primary-dark-mode: \$color-button-inverse-primary;                                     // Color (text) for primary button in dark mode
\$color-button-primary: var(--btn-primary);

\$color-button-secondary-light-mode: \$color-link-light-mode;\t                                        // Color (text) for secondary button in light mode
\$color-button-secondary-dark-mode: \$color-button-inverse-secondary;                                 // Color (text) for secondary button in dark mode
\$color-button-secondary: var(--btn-secondary);

\$color-button-tertiary-light-mode: \$color-link-light-mode;                                          // Color (text) for tertiary button in light mode
\$color-button-tertiary-dark-mode: \$color-button-inverse-tertiary;                                   // Color (text) for tertiary button in dark mode
\$color-button-tertiary: var(--btn-tertiary);

\$color-button-secondary-tertiary-hover-light-mode: \$color-hover-light-mode;                         // Color (text) for secondary and tertiary buttons on hover
\$color-button-secondary-tertiary-hover-dark-mode: \$color-button-inverse-secondary-tertiary-hover;   // Color (text) for secondary and tertiary buttons on hover
\$color-button-secondary-tertiary-hover: var(--btn-secondary-tertiary-hover);


// Font size
\$font-size-button: #{ms(-1)}em;           // Button font-size: .84em


// Font weight
\$font-weight-button-bold: true;           // Bold button text? True/false


// Line height
\$line-height-button: #{ms(3)};            // Button line-height


// Padding
\$padding-bottom-button: \$length-em-3;     // Padding-bottom of button: .75em
\$padding-left-button: \$length-em-4;       // Padding-left of button: 1em
\$padding-right-button: \$length-em-4;      // Padding-right of button: 1em
\$padding-top-button: \$length-em-3;        // Padding-top of button: .75em


// Text transform
\$text-transform-button-uppercase: false;  // Uppercase button text? True/false
", "wdn/templates_5.3/scss/variables/_variables.buttons.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.buttons.scss");
    }
}
