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

/* wdn/templates_5.3/scss/variables/_variables.forms-checkboxes-radios.scss */
class __TwigTemplate_4f2ff1533c999f6c0ed0cd30d685a398 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.forms-checkboxes-radios.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.forms-checkboxes-radios.scss"));

        // line 1
        echo "//////////////////////////////////////////////////
// THEME / VARIABLES / FORMS - CHECKBOXES & RADIOS
//////////////////////////////////////////////////


@import '_variables.body';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-radio-dot: var(--body);                                 // Radio \"dot\" color (created using background-color)


// Border color
\$border-color-checkmark: var(--body);                             // Checkmark color (created using borders)

\$border-color-input-checked: var(--body);                         // Border-color of input when checked


// Border width
\$border-width-checkmark: #{ms(-12)}em;                            // Border-width of border used to create checkmark


// Height & width
\$height-width-checkbox-radio: \$length-em-6;                       // Height & width for checkboxes and radios


// Margin
\$margin-bottom-checkbox-radio: \$length-em-2;                      // Margin-bottom for checkboxes and radios


// Padding
\$padding-left-checkbox-radio: \$length-em-7;                       // Padding-left for checkboxes and radios


// Transform
\$scale-radio-start: #{ms(-8)};                                    // Checked radio scale value start: .32em
\$scale-radio-end: #{ms(-4)};                                      // Checked radio scale value end: .56em


// Transition
\$transition-check-duration: .05s;                                 // Duration of scale transition when checkbox is checked
\$transition-check-timing: ease-out;                               // Timing function of scale transition when checkbox is checked
\$transition-radio-duration: .05s;                                 // Duration of scale transition when radio is checked
\$transition-radio-timing: ease-out;                               // Timing function of scale transition when radio is checked
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.forms-checkboxes-radios.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////////////////////
// THEME / VARIABLES / FORMS - CHECKBOXES & RADIOS
//////////////////////////////////////////////////


@import '_variables.body';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-radio-dot: var(--body);                                 // Radio \"dot\" color (created using background-color)


// Border color
\$border-color-checkmark: var(--body);                             // Checkmark color (created using borders)

\$border-color-input-checked: var(--body);                         // Border-color of input when checked


// Border width
\$border-width-checkmark: #{ms(-12)}em;                            // Border-width of border used to create checkmark


// Height & width
\$height-width-checkbox-radio: \$length-em-6;                       // Height & width for checkboxes and radios


// Margin
\$margin-bottom-checkbox-radio: \$length-em-2;                      // Margin-bottom for checkboxes and radios


// Padding
\$padding-left-checkbox-radio: \$length-em-7;                       // Padding-left for checkboxes and radios


// Transform
\$scale-radio-start: #{ms(-8)};                                    // Checked radio scale value start: .32em
\$scale-radio-end: #{ms(-4)};                                      // Checked radio scale value end: .56em


// Transition
\$transition-check-duration: .05s;                                 // Duration of scale transition when checkbox is checked
\$transition-check-timing: ease-out;                               // Timing function of scale transition when checkbox is checked
\$transition-radio-duration: .05s;                                 // Duration of scale transition when radio is checked
\$transition-radio-timing: ease-out;                               // Timing function of scale transition when radio is checked
", "wdn/templates_5.3/scss/variables/_variables.forms-checkboxes-radios.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.forms-checkboxes-radios.scss");
    }
}
