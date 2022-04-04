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

/* wdn/templates_5.3/scss/variables/_variables.datepickers.scss */
class __TwigTemplate_4fd1b19c187a9bff8628f84a57241391 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.datepickers.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.datepickers.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / VARIABLES / DATEPICKERS
//////////////////////////////////


@import '_variables.color-palette';
@import '_variables.sizing';


// Background color
\$bg-color-datepicker-dialog: var(--bg-dialog);                                          // Background color datepicker dialog
\$bg-color-datepicker-dialog-calendar-td-hover: var(--bg-btn-secondary-tertiary-hover);  // Background color datepicker dialog calendar date on hover


// Border radius
\$border-radius-datepicker-dialog-roundrect: true;         // Datepicker dialog border-radius roundrect? True/false
\$border-radius-datepicker-date-roundrect: true;           // Datepicker date border-radius roundrect? True/false


// Box shadow
\$box-shadow-datepicker-dialog: 1px 1px 5px rgba(0,0,0,.1), 1px 1px 30px rgba(0,0,0,.1); // Datepicker dialog box-shadow


// Color
\$color-datepicker-dialog-calendar-td: var(--btn-tertiary);                        // Color datepicker dialog calendar date
\$color-datepicker-dialog-calendar-td-hover: var(--btn-secondary-tertiary-hover);  // Color datepicker dialog calendar date on hover


// Font size
\$font-size-datepicker-dialog-month-year: #{ms(-1)}em;     // Datepicker dialog month/year font-size: .84em
\$font-size-datepicker-dialog-calendar: #{ms(-2)}em;       // Datepicker dialog calendar font-size: .75em
\$font-size-datepicker-dialog-btn-footer: #{ms(-2)}rem;    // Datepicker dialog footer button font-size: .75rem
\$font-size-datepicker-dialog-message: #{ms(-3)}em;        // Datepicker dialog message font-size: .63em


// Height
\$height-datepicker-dialog-calendar-th-td: #{ms(6)}rem;    // Datepicker dialog calendar cell (th/td) height: 2.37rem


// Margin
\$margin-top-datepicker-dialog: #{ms(-12)}em;              // Margin-top datepicker dialog: .18em
\$margin-top-datepicker-dialog-footer: #{ms(-10)}em;       // Margin-top datepicker dialog footer: .24em


// Padding
\$padding-bottom-datepicker-dialog: \$length-em-3;          // Padding-bottom datepicker dialog header: .75em
\$padding-left-datepicker-dialog: \$length-em-4;            // Padding-left datepicker dialog header: 1em
\$padding-right-datepicker-dialog: \$length-em-4;           // Padding-right datepicker dialog header: 1em
\$padding-top-datepicker-dialog: \$length-em-2;             // Padding-top datepicker dialog header: .56em

\$padding-bottom-datepicker-dialog-header: #{ms(-10)}em;   // Padding-bottom datepicker dialog header: .24em

\$padding-top-datepicker-dialog-footer: \$length-em-2;      // Padding-top datepicker dialog footer: .56em


// Width
\$width-datepicker-dialog: #{ms(21)}rem;                   // Datepicker dialog width: 19.98rem (~320px)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.datepickers.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / VARIABLES / DATEPICKERS
//////////////////////////////////


@import '_variables.color-palette';
@import '_variables.sizing';


// Background color
\$bg-color-datepicker-dialog: var(--bg-dialog);                                          // Background color datepicker dialog
\$bg-color-datepicker-dialog-calendar-td-hover: var(--bg-btn-secondary-tertiary-hover);  // Background color datepicker dialog calendar date on hover


// Border radius
\$border-radius-datepicker-dialog-roundrect: true;         // Datepicker dialog border-radius roundrect? True/false
\$border-radius-datepicker-date-roundrect: true;           // Datepicker date border-radius roundrect? True/false


// Box shadow
\$box-shadow-datepicker-dialog: 1px 1px 5px rgba(0,0,0,.1), 1px 1px 30px rgba(0,0,0,.1); // Datepicker dialog box-shadow


// Color
\$color-datepicker-dialog-calendar-td: var(--btn-tertiary);                        // Color datepicker dialog calendar date
\$color-datepicker-dialog-calendar-td-hover: var(--btn-secondary-tertiary-hover);  // Color datepicker dialog calendar date on hover


// Font size
\$font-size-datepicker-dialog-month-year: #{ms(-1)}em;     // Datepicker dialog month/year font-size: .84em
\$font-size-datepicker-dialog-calendar: #{ms(-2)}em;       // Datepicker dialog calendar font-size: .75em
\$font-size-datepicker-dialog-btn-footer: #{ms(-2)}rem;    // Datepicker dialog footer button font-size: .75rem
\$font-size-datepicker-dialog-message: #{ms(-3)}em;        // Datepicker dialog message font-size: .63em


// Height
\$height-datepicker-dialog-calendar-th-td: #{ms(6)}rem;    // Datepicker dialog calendar cell (th/td) height: 2.37rem


// Margin
\$margin-top-datepicker-dialog: #{ms(-12)}em;              // Margin-top datepicker dialog: .18em
\$margin-top-datepicker-dialog-footer: #{ms(-10)}em;       // Margin-top datepicker dialog footer: .24em


// Padding
\$padding-bottom-datepicker-dialog: \$length-em-3;          // Padding-bottom datepicker dialog header: .75em
\$padding-left-datepicker-dialog: \$length-em-4;            // Padding-left datepicker dialog header: 1em
\$padding-right-datepicker-dialog: \$length-em-4;           // Padding-right datepicker dialog header: 1em
\$padding-top-datepicker-dialog: \$length-em-2;             // Padding-top datepicker dialog header: .56em

\$padding-bottom-datepicker-dialog-header: #{ms(-10)}em;   // Padding-bottom datepicker dialog header: .24em

\$padding-top-datepicker-dialog-footer: \$length-em-2;      // Padding-top datepicker dialog footer: .56em


// Width
\$width-datepicker-dialog: #{ms(21)}rem;                   // Datepicker dialog width: 19.98rem (~320px)
", "wdn/templates_5.3/scss/variables/_variables.datepickers.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.datepickers.scss");
    }
}
