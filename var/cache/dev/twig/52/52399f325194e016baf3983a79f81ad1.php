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

/* wdn/templates_5.3/scss/variables/_variables.marks.scss */
class __TwigTemplate_f3d3d3b6d597b62e1d0778f0c00346f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.marks.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.marks.scss"));

        // line 1
        echo "////////////////////////////
// THEME / VARIABLES / MARKS
////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-mark-light-mode: \$highlight;    // Background-color of <mark> (highlighted) text in light mode
\$bg-color-mark-dark-mode: \$highlight;     // Background-color of <mark> (highlighted) text in dark mode
\$bg-color-mark: var(--bg-mark);


// Padding
\$padding-bottom-mark: #{ms(-12)}em;       // Padding-bottom of <mark> (highlighted) text: .18em
\$padding-left-mark: \$length-em-1;         // Padding-left of <mark> (highlighted) text: .42em
\$padding-right-mark: \$length-em-1;        // Padding-right of <mark> (highlighted) text: .42em
\$padding-top-mark: #{ms(-12)}em;          // Padding-top of <mark> (highlighted) text: .18em
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.marks.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////
// THEME / VARIABLES / MARKS
////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-mark-light-mode: \$highlight;    // Background-color of <mark> (highlighted) text in light mode
\$bg-color-mark-dark-mode: \$highlight;     // Background-color of <mark> (highlighted) text in dark mode
\$bg-color-mark: var(--bg-mark);


// Padding
\$padding-bottom-mark: #{ms(-12)}em;       // Padding-bottom of <mark> (highlighted) text: .18em
\$padding-left-mark: \$length-em-1;         // Padding-left of <mark> (highlighted) text: .42em
\$padding-right-mark: \$length-em-1;        // Padding-right of <mark> (highlighted) text: .42em
\$padding-top-mark: #{ms(-12)}em;          // Padding-top of <mark> (highlighted) text: .18em
", "wdn/templates_5.3/scss/variables/_variables.marks.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.marks.scss");
    }
}
