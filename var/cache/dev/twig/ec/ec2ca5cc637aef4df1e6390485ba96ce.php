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

/* wdn/templates_5.3/scss/variables/_variables.tabs.scss */
class __TwigTemplate_8c59265f1c08d4983d311ada9b44e584 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.tabs.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.tabs.scss"));

        // line 1
        echo "///////////////////////////
// THEME / VARIABLES / TABS
///////////////////////////


@import '_variables.color-palette';
@import '_variables.borders';
@import '_variables.modular-scale';


// Background color
\$bg-color-tab-selected-light-mode: \$white;          // Background-color of selected tab in light mode
\$bg-color-tab-selected-dark-mode: \$darker-gray-s1;  // Background-color of selected tab in dark mode
\$bg-color-tab-selected: var(--bg-tab-selected);

\$bg-color-tabs-panel-light-mode: \$white;            // Background-color of tabs panel in light mode
\$bg-color-tabs-panel-dark-mode: \$darker-gray-s1;    // Background-color of tabs panel in dark mode
\$bg-color-tabs-panel: var(--bg-tabs-panel);


// Border color
\$border-color-tab: var(--b-light-gray);             // Border-color for tab
\$border-color-tabs-panel: var(--b-light-gray);      // Border-color for tabs panel


// Border style
\$border-style-tab: solid;                           // Border-style for tab
\$border-style-tabs-panel: solid;                    // Border-style for tabs panel


// Border width
\$border-width-tab: 1px;                             // Border-width for tab
\$border-width-tabs-panel: 1px;                      // Border-width for tabs panel


// Color
\$color-tab-selected: var(--body);                   // Selected tab color


// Font size
\$font-size-tab: #{ms(-1)}em;                        // Tab font-size: .84em


// Font weight
\$font-weight-tab-bold: true;                        // Bold font-weight for tab? True/false


// Padding
\$padding-bottom-tab: \$length-em-4;                  // Padding-bottom for tabs
\$padding-left-tab: \$length-em-5;                    // Padding-left for tabs
\$padding-right-tab: \$length-em-5;                   // Padding-right for tabs
\$padding-top-tab: \$length-em-4;                     // Padding-top for tabs

\$padding-bottom-tabs-panel: \$length-em-7;           // Padding-bottom for tabs panel
\$padding-left-tabs-panel: \$length-em-6;             // Padding-left for tabs
\$padding-right-tabs-panel: \$length-em-6;            // Padding-right for tabs
\$padding-top-tabs-panel: \$length-em-7;              // Padding-top for tabs
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.tabs.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////
// THEME / VARIABLES / TABS
///////////////////////////


@import '_variables.color-palette';
@import '_variables.borders';
@import '_variables.modular-scale';


// Background color
\$bg-color-tab-selected-light-mode: \$white;          // Background-color of selected tab in light mode
\$bg-color-tab-selected-dark-mode: \$darker-gray-s1;  // Background-color of selected tab in dark mode
\$bg-color-tab-selected: var(--bg-tab-selected);

\$bg-color-tabs-panel-light-mode: \$white;            // Background-color of tabs panel in light mode
\$bg-color-tabs-panel-dark-mode: \$darker-gray-s1;    // Background-color of tabs panel in dark mode
\$bg-color-tabs-panel: var(--bg-tabs-panel);


// Border color
\$border-color-tab: var(--b-light-gray);             // Border-color for tab
\$border-color-tabs-panel: var(--b-light-gray);      // Border-color for tabs panel


// Border style
\$border-style-tab: solid;                           // Border-style for tab
\$border-style-tabs-panel: solid;                    // Border-style for tabs panel


// Border width
\$border-width-tab: 1px;                             // Border-width for tab
\$border-width-tabs-panel: 1px;                      // Border-width for tabs panel


// Color
\$color-tab-selected: var(--body);                   // Selected tab color


// Font size
\$font-size-tab: #{ms(-1)}em;                        // Tab font-size: .84em


// Font weight
\$font-weight-tab-bold: true;                        // Bold font-weight for tab? True/false


// Padding
\$padding-bottom-tab: \$length-em-4;                  // Padding-bottom for tabs
\$padding-left-tab: \$length-em-5;                    // Padding-left for tabs
\$padding-right-tab: \$length-em-5;                   // Padding-right for tabs
\$padding-top-tab: \$length-em-4;                     // Padding-top for tabs

\$padding-bottom-tabs-panel: \$length-em-7;           // Padding-bottom for tabs panel
\$padding-left-tabs-panel: \$length-em-6;             // Padding-left for tabs
\$padding-right-tabs-panel: \$length-em-6;            // Padding-right for tabs
\$padding-top-tabs-panel: \$length-em-7;              // Padding-top for tabs
", "wdn/templates_5.3/scss/variables/_variables.tabs.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.tabs.scss");
    }
}
