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

/* wdn/templates_5.3/scss/variables/_variables.cards.scss */
class __TwigTemplate_b4f3894023386b355f17d61e68b10b0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.cards.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.cards.scss"));

        // line 1
        echo "////////////////////////////
// THEME / VARIABLES / CARDS
////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-card-light-mode: \$cream;          // Card background-color in light mode
\$bg-color-card-dark-mode: \$darker-gray-s1;  // Card background-color in dark mode
\$bg-color-card: var(--bg-card);


// Font size
\$font-size-card: #{ms(-1)}em;               // Card font-size: .84em


// Padding
\$padding-bottom-card-block: \$length-em-7;   // Padding-bottom of card block: 2.37em
\$padding-left-card-block: \$length-em-6;     // Padding-left of card block: 1.77em
\$padding-right-card-block: \$length-em-6;    // Padding-right of card block: 1.77em
\$padding-top-card-block: \$length-em-7;      // Padding-bottom of card block: 2.37em
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.cards.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////
// THEME / VARIABLES / CARDS
////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-card-light-mode: \$cream;          // Card background-color in light mode
\$bg-color-card-dark-mode: \$darker-gray-s1;  // Card background-color in dark mode
\$bg-color-card: var(--bg-card);


// Font size
\$font-size-card: #{ms(-1)}em;               // Card font-size: .84em


// Padding
\$padding-bottom-card-block: \$length-em-7;   // Padding-bottom of card block: 2.37em
\$padding-left-card-block: \$length-em-6;     // Padding-left of card block: 1.77em
\$padding-right-card-block: \$length-em-6;    // Padding-right of card block: 1.77em
\$padding-top-card-block: \$length-em-7;      // Padding-bottom of card block: 2.37em
", "wdn/templates_5.3/scss/variables/_variables.cards.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.cards.scss");
    }
}
