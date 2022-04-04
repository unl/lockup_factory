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

/* wdn/templates_5.3/scss/variables/_variables.badges.scss */
class __TwigTemplate_05ce35acddb2e31cf8fa41607e2a3f75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.badges.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.badges.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / VARIABLES / BADGES
/////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-badge-light-mode: \$dark-gray;   // Background-color of badge in light mode
\$bg-color-badge-dark-mode: \$light-gray;   // Background-color of badge in dark mode
\$bg-color-badge: var(--bg-badge);


// Color
\$color-badge-light-mode: \$cream;          // Color of badge text in light mode
\$color-badge-dark-mode: \$darkest-gray;    // Color of badge text in dark mode
\$color-badge: var(--badge);


// Font size
\$font-size-badge: #{ms(-4)}rem;           // Font-size of badge: .56rem


// Padding
\$padding-bottom-badge: \$length-em-1;      // Padding-bottom of badge: .42em
\$padding-left-badge: \$length-em-2;        // Padding-left of badge: .56em
\$padding-right-badge: \$length-em-2;       // Padding-right of badge: .56em
\$padding-top-badge: \$length-em-1;         // Padding-top of badge: .42em

\$padding-left-badge-pill: \$length-em-3;   // Increase horizontal padding to account for increased border-radius: .75em
\$padding-right-badge-pill: \$length-em-3;  // Increase horizontal padding to account for increased border-radius: .75em


// Vertical alignment
\$vertical-align-badge: text-top;          // Vertical-align of badge
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.badges.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / VARIABLES / BADGES
/////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-badge-light-mode: \$dark-gray;   // Background-color of badge in light mode
\$bg-color-badge-dark-mode: \$light-gray;   // Background-color of badge in dark mode
\$bg-color-badge: var(--bg-badge);


// Color
\$color-badge-light-mode: \$cream;          // Color of badge text in light mode
\$color-badge-dark-mode: \$darkest-gray;    // Color of badge text in dark mode
\$color-badge: var(--badge);


// Font size
\$font-size-badge: #{ms(-4)}rem;           // Font-size of badge: .56rem


// Padding
\$padding-bottom-badge: \$length-em-1;      // Padding-bottom of badge: .42em
\$padding-left-badge: \$length-em-2;        // Padding-left of badge: .56em
\$padding-right-badge: \$length-em-2;       // Padding-right of badge: .56em
\$padding-top-badge: \$length-em-1;         // Padding-top of badge: .42em

\$padding-left-badge-pill: \$length-em-3;   // Increase horizontal padding to account for increased border-radius: .75em
\$padding-right-badge-pill: \$length-em-3;  // Increase horizontal padding to account for increased border-radius: .75em


// Vertical alignment
\$vertical-align-badge: text-top;          // Vertical-align of badge
", "wdn/templates_5.3/scss/variables/_variables.badges.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.badges.scss");
    }
}
