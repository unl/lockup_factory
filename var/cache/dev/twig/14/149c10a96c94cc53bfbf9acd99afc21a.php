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

/* wdn/templates_5.3/scss/variables/_variables.code.scss */
class __TwigTemplate_0fb0d23532cb018145d6fd962cc9baeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.code.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.code.scss"));

        // line 1
        echo "///////////////////////////
// THEME / VARIABLES / CODE
///////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-code-light-mode: fade-out(\$black, .95);               // <code> background-color in light mode
\$bg-color-code-dark-mode: fade-out(\$white, .9);                 // <code> background-color in dark mode
\$bg-color-code: var(--bg-code);

\$bg-color-kbd: \$black;                                          // <kbd> background-color

\$bg-color-pre: var(--bg-code);                                  // .dcf-pre background-color


// Border radius
\$border-radius-code: true;                                      // Roundrect border-radius for <code>, <kbd> and <pre>? True/false


// Color
\$color-code-light-mode: lighten(\$color-body-light-mode, 10%);   // <code> color in light mode
\$color-code-dark-mode: lighten(\$color-body-dark-mode, 10%);     // <code> color in dark mode
\$color-code: var(--code);

\$color-kbd: \$kbd;                                               // <kbd> color


// Font size
\$font-size-code: #{ms(-1)}em;                                   // <code> font-size: .84em
\$font-size-kbd: #{ms(-1)}em;                                    // <kbd> font-size: .84em


// Padding
\$padding-code: #{ms(-14)}rem #{ms(-10)}rem;                     // <code> padding: .13rem .24rem
\$padding-kbd: #{ms(-14)}rem #{ms(-10)}rem;                      // <kbd> padding: .13rem .24rem
\$padding-pre: \$length-em-4;                                     // <pre> padding: 1em


// Tab size
\$tab-size-pre: 2;                                               // <pre> tab size
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.code.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////
// THEME / VARIABLES / CODE
///////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';
@import '_variables.sizing';


// Background color
\$bg-color-code-light-mode: fade-out(\$black, .95);               // <code> background-color in light mode
\$bg-color-code-dark-mode: fade-out(\$white, .9);                 // <code> background-color in dark mode
\$bg-color-code: var(--bg-code);

\$bg-color-kbd: \$black;                                          // <kbd> background-color

\$bg-color-pre: var(--bg-code);                                  // .dcf-pre background-color


// Border radius
\$border-radius-code: true;                                      // Roundrect border-radius for <code>, <kbd> and <pre>? True/false


// Color
\$color-code-light-mode: lighten(\$color-body-light-mode, 10%);   // <code> color in light mode
\$color-code-dark-mode: lighten(\$color-body-dark-mode, 10%);     // <code> color in dark mode
\$color-code: var(--code);

\$color-kbd: \$kbd;                                               // <kbd> color


// Font size
\$font-size-code: #{ms(-1)}em;                                   // <code> font-size: .84em
\$font-size-kbd: #{ms(-1)}em;                                    // <kbd> font-size: .84em


// Padding
\$padding-code: #{ms(-14)}rem #{ms(-10)}rem;                     // <code> padding: .13rem .24rem
\$padding-kbd: #{ms(-14)}rem #{ms(-10)}rem;                      // <kbd> padding: .13rem .24rem
\$padding-pre: \$length-em-4;                                     // <pre> padding: 1em


// Tab size
\$tab-size-pre: 2;                                               // <pre> tab size
", "wdn/templates_5.3/scss/variables/_variables.code.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.code.scss");
    }
}
