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

/* wdn/templates_5.3/scss/variables/_variables.tables.scss */
class __TwigTemplate_830e1106da942b75076e6c2aeb1d7b91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.tables.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.tables.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / VARIABLES / TABLES
/////////////////////////////


@import '_variables.color-palette';
@import '_variables.borders';
@import '_variables.headings';
@import '_variables.modular-scale';


// Background color
\$bg-color-table-stripe-light-mode: fade-out(\$darkest-gray,.97);   // Background-color of table stripes in light mode
\$bg-color-table-stripe-dark-mode: fade-out(\$cream,.97);           // Background-color of table stripes in dark mode
\$bg-color-table-stripe: var(--bg-table-stripe);


// Border color
\$border-color-table: \$border-color-gray-light;              // .dcf-table border-color


// Border style
\$border-style-table: solid;\t                                // .dcf-table border-style


// Border width
\$border-width-table: 1px;                                   // .dcf-table border-width


// Color
\$color-caption: \$color-heading;                             // .dcf-table <caption> color


// Font size
\$font-size-caption: #{ms(1)}em;                             // .dcf-table <caption> font-size: 1.13em
\$font-size-thead: #{ms(-1)}em;                              // .dcf-table <thead> font-size: .84em
\$font-size-tbody: #{ms(-1)}em;                              // .dcf-table <tbody> font-size: .84em
\$font-size-tfoot: #{ms(-1)}em;                              // .dcf-table <tfoot> font-size: .84em


// Font weight
\$font-weight-caption-bold: true;                            // Bold font-weight for caption? True/false


// Grid
\$grid-col-1-table-responsive: 1fr;                          // First grid column in responsive table
\$grid-col-2-table-responsive: 2fr;                          // Second grid column in responsive table
\$grid-col-gap-table-responsive: \$length-vw-1;               // Grid column-gap in responsive table


// Padding
\$padding-bottom-caption: #{ms(-4)}rem;                                  // Padding-bottom for table captions

\$padding-right-table-cell: \$length-em-6;                                // Padding-right for <th> and <td> cells

\$padding-left-table-bordered-striped-cell: \$length-em-4;                // Padding-left for bordered and/or striped table cells
\$padding-right-table-bordered-striped-cell: \$length-em-4;               // Padding-right for bordered and/or striped table cells

\$padding-bottom-thead-cell: \$length-em-3;                               // Padding-bottom for <thead> cells
\$padding-bottom-tbody-cell: \$length-em-3;                               // Padding-bottom for <tbody> cells
\$padding-top-tbody-tfoot-cell: \$length-em-3;                            // Padding-top for <tbody> and <tfoot> cells

\$padding-top-table-bordered-thead-cell: \$length-em-5;                   // Padding-top for bordered table <thead> cells

\$padding-bottom-table-scroll: \$length-em-4;                             // Padding-bottom for scrollable tables (to account for scroll bar)

\$padding-bottom-table-responsive-tbody-tr: \$padding-bottom-tbody-cell;  // Padding-bottom for responsive table <tbody> rows


// Width
\$width-table-responsive-data-label: 40%;                    // Width of data-label (responsive table heading)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.tables.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / VARIABLES / TABLES
/////////////////////////////


@import '_variables.color-palette';
@import '_variables.borders';
@import '_variables.headings';
@import '_variables.modular-scale';


// Background color
\$bg-color-table-stripe-light-mode: fade-out(\$darkest-gray,.97);   // Background-color of table stripes in light mode
\$bg-color-table-stripe-dark-mode: fade-out(\$cream,.97);           // Background-color of table stripes in dark mode
\$bg-color-table-stripe: var(--bg-table-stripe);


// Border color
\$border-color-table: \$border-color-gray-light;              // .dcf-table border-color


// Border style
\$border-style-table: solid;\t                                // .dcf-table border-style


// Border width
\$border-width-table: 1px;                                   // .dcf-table border-width


// Color
\$color-caption: \$color-heading;                             // .dcf-table <caption> color


// Font size
\$font-size-caption: #{ms(1)}em;                             // .dcf-table <caption> font-size: 1.13em
\$font-size-thead: #{ms(-1)}em;                              // .dcf-table <thead> font-size: .84em
\$font-size-tbody: #{ms(-1)}em;                              // .dcf-table <tbody> font-size: .84em
\$font-size-tfoot: #{ms(-1)}em;                              // .dcf-table <tfoot> font-size: .84em


// Font weight
\$font-weight-caption-bold: true;                            // Bold font-weight for caption? True/false


// Grid
\$grid-col-1-table-responsive: 1fr;                          // First grid column in responsive table
\$grid-col-2-table-responsive: 2fr;                          // Second grid column in responsive table
\$grid-col-gap-table-responsive: \$length-vw-1;               // Grid column-gap in responsive table


// Padding
\$padding-bottom-caption: #{ms(-4)}rem;                                  // Padding-bottom for table captions

\$padding-right-table-cell: \$length-em-6;                                // Padding-right for <th> and <td> cells

\$padding-left-table-bordered-striped-cell: \$length-em-4;                // Padding-left for bordered and/or striped table cells
\$padding-right-table-bordered-striped-cell: \$length-em-4;               // Padding-right for bordered and/or striped table cells

\$padding-bottom-thead-cell: \$length-em-3;                               // Padding-bottom for <thead> cells
\$padding-bottom-tbody-cell: \$length-em-3;                               // Padding-bottom for <tbody> cells
\$padding-top-tbody-tfoot-cell: \$length-em-3;                            // Padding-top for <tbody> and <tfoot> cells

\$padding-top-table-bordered-thead-cell: \$length-em-5;                   // Padding-top for bordered table <thead> cells

\$padding-bottom-table-scroll: \$length-em-4;                             // Padding-bottom for scrollable tables (to account for scroll bar)

\$padding-bottom-table-responsive-tbody-tr: \$padding-bottom-tbody-cell;  // Padding-bottom for responsive table <tbody> rows


// Width
\$width-table-responsive-data-label: 40%;                    // Width of data-label (responsive table heading)
", "wdn/templates_5.3/scss/variables/_variables.tables.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.tables.scss");
    }
}
