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

/* wdn/templates_5.3/scss/variables/_variables.headings.scss */
class __TwigTemplate_19e51bb86d8c5ad1ee5387883fd00f3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.headings.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.headings.scss"));

        // line 1
        echo "///////////////////////////////
// THEME / VARIABLES / HEADINGS
///////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';


// Color -- strive for WCAG AAA (minimum contrast ratio of 7.0) for heading text
\$color-heading-light-mode: \$darkest-gray;     // Heading color in light mode
\$color-heading-dark-mode: \$cream;             // Heading color in dark mode
\$color-heading: var(--heading);


// Font size
\$font-size-subhead: #{ms(-2)}rem;             // Subhead font-size: .75rem


// Line height
\$line-height-heading: #{ms(1)};               // Heading line-height


// Margin
\$margin-bottom-heading: #{ms(0)}rem;          // Heading margin-bottom: 1rem
\$margin-top-heading: 0;                       // Heading margin-top: 0
\$margin-top-heading-after-els: \$length-em-5;  // Heading margin-top after elements: 1.33em

\$margin-bottom-subhead: \$length-em-4;         // Subhead margin-bottom: 1em


// Text transform
\$text-transform-subhead: true;                // Uppercase subhead? True/false
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.headings.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////
// THEME / VARIABLES / HEADINGS
///////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';


// Color -- strive for WCAG AAA (minimum contrast ratio of 7.0) for heading text
\$color-heading-light-mode: \$darkest-gray;     // Heading color in light mode
\$color-heading-dark-mode: \$cream;             // Heading color in dark mode
\$color-heading: var(--heading);


// Font size
\$font-size-subhead: #{ms(-2)}rem;             // Subhead font-size: .75rem


// Line height
\$line-height-heading: #{ms(1)};               // Heading line-height


// Margin
\$margin-bottom-heading: #{ms(0)}rem;          // Heading margin-bottom: 1rem
\$margin-top-heading: 0;                       // Heading margin-top: 0
\$margin-top-heading-after-els: \$length-em-5;  // Heading margin-top after elements: 1.33em

\$margin-bottom-subhead: \$length-em-4;         // Subhead margin-bottom: 1em


// Text transform
\$text-transform-subhead: true;                // Uppercase subhead? True/false
", "wdn/templates_5.3/scss/variables/_variables.headings.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.headings.scss");
    }
}
