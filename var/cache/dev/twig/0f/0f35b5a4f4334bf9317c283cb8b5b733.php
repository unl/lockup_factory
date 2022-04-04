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

/* wdn/templates_5.3/scss/variables/_variables.forms.scss */
class __TwigTemplate_77a005cb634d0d1ad12efa42c61773f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.forms.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.forms.scss"));

        // line 1
        echo "////////////////////////////
// THEME / VARIABLES / FORMS
////////////////////////////


@import '_variables.badges';
@import '_variables.body';
@import '_variables.borders';
@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-input-light-mode: \$white;                             // Field background color in light mode
\$bg-color-input-dark-mode: \$darkest-gray-s1;                    // Field background color in dark mode
\$bg-color-input: var(--bg-input, \$default-bg-input);

\$bg-color-input-disabled-light-mode: \$lighter-gray;             // Disabled input background color in light mode
\$bg-color-input-disabled-dark-mode: \$darker-gray;               // Disabled input background color in dark mode
\$bg-color-input-disabled: var(--bg-input-disabled);

\$bg-color-required-light-mode: transparent;                     // Required background color in light mode
\$bg-color-required-dark-mode: rgba(157,0,0,.25);                // Required background color in dark mode
\$bg-color-required: var(--bg-required);


// Border color
\$border-color-fieldset-light-mode: \$light-gray;                 // Fieldset border-color in light mode
\$border-color-fieldset-dark-mode: \$darker-gray;                 // Fieldset border-color in dark mode
\$border-color-fieldset: var(--b-fieldset);

\$border-color-input-light-mode: \$gray;                          // Input field border-color in light mode
\$border-color-input-dark-mode: \$dark-gray;                      // Input field border-color in dark mode
\$border-color-input: var(--b-input, \$default-b-input);

\$border-color-input-hover-light-mode: \$dark-gray;               // Input field border-color when hovered in light mode
\$border-color-input-hover-dark-mode: \$gray;                     // Input field border-color when hovered in dark mode
\$border-color-input-hover: var(--b-input-hover);

\$border-color-input-focus-light-mode: \$blue;                    // Input field border-color when focused in light mode
\$border-color-input-focus-dark-mode: \$cerulean;                 // Input field border-color when focused in dark mode
\$border-color-input-focus: var(--b-input-focus);

\$border-color-required-light-mode: transparent;                 // Required border-color in light mode
\$border-color-required-dark-mode: \$scarlet-shade;               // Required border-color in dark mode
\$border-color-required: var(--b-required);


// Border radius
\$border-radius-input-roundrect: true;                           // Input field border-radius roundrect? True/false
\$border-radius-fieldset-roundrect: true;                        // Fieldset border-radius roundrect? True/false


// Border style
\$border-style-input: solid;                                     // Input field border-style


// Border width
\$border-width-input: 1px;                                       // Input field border-width


// Color
\$color-form-help-light-mode: \$color-light-text-light-mode;      // Form help text color in light mode
\$color-form-help-dark-mode: \$color-light-text-dark-mode;        // Form help text color in dark mode
\$color-form-help: var(--form-help);

\$color-required-label-light-mode: \$scarlet;                     // Required label text color in light mode
\$color-required-label-dark-mode: \$cream;                        // Required label text color in dark mode
\$color-required-label: var(--required);


// Font size
\$font-size-label: #{ms(-1)}em;                                  // Label font-size: .84em
\$font-size-legend: #{ms(-1)}em;                                 // Legend font-size: .84em
\$font-size-form-help: #{ms(-2)}em;                              // Form help font-size: .75em
\$font-size-required: \$font-size-badge;                          // Required label font-size: .56rem


// Font style
\$font-style-required-italic: false;                             // Italic font-style for required label? True/false


// Font weight
\$font-weight-legend-bold: true;                                 // Bold legend? True/false


// Line height
\$line-height-form-help: #{ms(2)};                               // Form help line-height


// Margin
\$margin-bottom-fieldset: \$length-em-4;                          // Fieldset margin-bottom: 1em
\$margin-left-required: \$length-em-1;                            // Margin-left of required label: .42em
\$margin-bottom-form-group: \$length-em-4;                        // Form group margin-bottom: 1em
\$margin-bottom-form-label: #{ms(-10)}em;                        // Form label margin-bottom: .42em
\$margin-top-form-help: \$length-em-1;                            // Form help margin-top: .42em
\$margin-right-form-controls-inline-label: \$length-em-4;         // Form controls inline label margin-right: 1em


// Opacity
\$opacity-disabled: .75;                                         // Opacity for disabled elements


// Padding
\$padding-bottom-fieldset: \$length-em-4;                         // Padding-bottom of fieldset: 1em
\$padding-left-fieldset: \$length-vw-1;                           // Padding-left of fieldset: 3.16vw
\$padding-right-fieldset: \$length-vw-1;                          // Padding-right of fieldset: 3.16vw
\$padding-top-fieldset: \$length-em-4;                            // Padding-top of fieldset: 1em

\$padding-bottom-required: \$padding-bottom-badge;                // Padding-bottom of required label: .42em
\$padding-left-required: \$padding-left-badge-pill;               // Padding-left of required label: .75em
\$padding-right-required: \$padding-right-badge-pill;             // Padding-right of required label: .75em
\$padding-top-required: \$padding-top-badge;                      // Padding-top of required label: .42em

\$padding-bottom-input: \$length-em-2;                            // Padding-bottom of input field: .56em
\$padding-left-input: \$length-em-3;                              // Padding-left of input field: .75em
\$padding-right-input: \$length-em-3;                             // Padding-right of input field: .75em
\$padding-top-input: \$length-em-2;                               // Padding-top of input field: .56em

\$padding-legend: \$length-em-2;                                  // Padding around legend
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.forms.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////
// THEME / VARIABLES / FORMS
////////////////////////////


@import '_variables.badges';
@import '_variables.body';
@import '_variables.borders';
@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-input-light-mode: \$white;                             // Field background color in light mode
\$bg-color-input-dark-mode: \$darkest-gray-s1;                    // Field background color in dark mode
\$bg-color-input: var(--bg-input, \$default-bg-input);

\$bg-color-input-disabled-light-mode: \$lighter-gray;             // Disabled input background color in light mode
\$bg-color-input-disabled-dark-mode: \$darker-gray;               // Disabled input background color in dark mode
\$bg-color-input-disabled: var(--bg-input-disabled);

\$bg-color-required-light-mode: transparent;                     // Required background color in light mode
\$bg-color-required-dark-mode: rgba(157,0,0,.25);                // Required background color in dark mode
\$bg-color-required: var(--bg-required);


// Border color
\$border-color-fieldset-light-mode: \$light-gray;                 // Fieldset border-color in light mode
\$border-color-fieldset-dark-mode: \$darker-gray;                 // Fieldset border-color in dark mode
\$border-color-fieldset: var(--b-fieldset);

\$border-color-input-light-mode: \$gray;                          // Input field border-color in light mode
\$border-color-input-dark-mode: \$dark-gray;                      // Input field border-color in dark mode
\$border-color-input: var(--b-input, \$default-b-input);

\$border-color-input-hover-light-mode: \$dark-gray;               // Input field border-color when hovered in light mode
\$border-color-input-hover-dark-mode: \$gray;                     // Input field border-color when hovered in dark mode
\$border-color-input-hover: var(--b-input-hover);

\$border-color-input-focus-light-mode: \$blue;                    // Input field border-color when focused in light mode
\$border-color-input-focus-dark-mode: \$cerulean;                 // Input field border-color when focused in dark mode
\$border-color-input-focus: var(--b-input-focus);

\$border-color-required-light-mode: transparent;                 // Required border-color in light mode
\$border-color-required-dark-mode: \$scarlet-shade;               // Required border-color in dark mode
\$border-color-required: var(--b-required);


// Border radius
\$border-radius-input-roundrect: true;                           // Input field border-radius roundrect? True/false
\$border-radius-fieldset-roundrect: true;                        // Fieldset border-radius roundrect? True/false


// Border style
\$border-style-input: solid;                                     // Input field border-style


// Border width
\$border-width-input: 1px;                                       // Input field border-width


// Color
\$color-form-help-light-mode: \$color-light-text-light-mode;      // Form help text color in light mode
\$color-form-help-dark-mode: \$color-light-text-dark-mode;        // Form help text color in dark mode
\$color-form-help: var(--form-help);

\$color-required-label-light-mode: \$scarlet;                     // Required label text color in light mode
\$color-required-label-dark-mode: \$cream;                        // Required label text color in dark mode
\$color-required-label: var(--required);


// Font size
\$font-size-label: #{ms(-1)}em;                                  // Label font-size: .84em
\$font-size-legend: #{ms(-1)}em;                                 // Legend font-size: .84em
\$font-size-form-help: #{ms(-2)}em;                              // Form help font-size: .75em
\$font-size-required: \$font-size-badge;                          // Required label font-size: .56rem


// Font style
\$font-style-required-italic: false;                             // Italic font-style for required label? True/false


// Font weight
\$font-weight-legend-bold: true;                                 // Bold legend? True/false


// Line height
\$line-height-form-help: #{ms(2)};                               // Form help line-height


// Margin
\$margin-bottom-fieldset: \$length-em-4;                          // Fieldset margin-bottom: 1em
\$margin-left-required: \$length-em-1;                            // Margin-left of required label: .42em
\$margin-bottom-form-group: \$length-em-4;                        // Form group margin-bottom: 1em
\$margin-bottom-form-label: #{ms(-10)}em;                        // Form label margin-bottom: .42em
\$margin-top-form-help: \$length-em-1;                            // Form help margin-top: .42em
\$margin-right-form-controls-inline-label: \$length-em-4;         // Form controls inline label margin-right: 1em


// Opacity
\$opacity-disabled: .75;                                         // Opacity for disabled elements


// Padding
\$padding-bottom-fieldset: \$length-em-4;                         // Padding-bottom of fieldset: 1em
\$padding-left-fieldset: \$length-vw-1;                           // Padding-left of fieldset: 3.16vw
\$padding-right-fieldset: \$length-vw-1;                          // Padding-right of fieldset: 3.16vw
\$padding-top-fieldset: \$length-em-4;                            // Padding-top of fieldset: 1em

\$padding-bottom-required: \$padding-bottom-badge;                // Padding-bottom of required label: .42em
\$padding-left-required: \$padding-left-badge-pill;               // Padding-left of required label: .75em
\$padding-right-required: \$padding-right-badge-pill;             // Padding-right of required label: .75em
\$padding-top-required: \$padding-top-badge;                      // Padding-top of required label: .42em

\$padding-bottom-input: \$length-em-2;                            // Padding-bottom of input field: .56em
\$padding-left-input: \$length-em-3;                              // Padding-left of input field: .75em
\$padding-right-input: \$length-em-3;                             // Padding-right of input field: .75em
\$padding-top-input: \$length-em-2;                               // Padding-top of input field: .56em

\$padding-legend: \$length-em-2;                                  // Padding around legend
", "wdn/templates_5.3/scss/variables/_variables.forms.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.forms.scss");
    }
}
