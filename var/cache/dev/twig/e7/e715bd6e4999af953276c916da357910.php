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

/* wdn/templates_5.3/scss/variables/_variables.sizing.scss */
class __TwigTemplate_1cb92f116ccd0702d7f5319018bf5f21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.sizing.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.sizing.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / VARIABLES / SIZING
/////////////////////////////


@import '_variables.modular-scale';


// Font size
\$font-size-min: ms(0);      // 1em
\$font-size-max: ms(2);      // 1.33em


// Linear inetrpolation
\$min-width-lerp: ms(24);    //  31.57em ~  505.12px
\$max-width-lerp: ms(36);    // 177.38em ~ 2838.08px


// Em-based spacing
\$length-em-1: #{ms(-6)}em;  //  .42em
\$length-em-2: #{ms(-4)}em;  //  .56em
\$length-em-3: #{ms(-2)}em;  //  .75em
\$length-em-4: #{ms(0)}em;   // 1em
\$length-em-5: #{ms(2)}em;   // 1.33em
\$length-em-6: #{ms(4)}em;   // 1.78em
\$length-em-7: #{ms(6)}em;   // 2.37em
\$length-em-8: #{ms(8)}em;   // 3.16em
\$length-em-9: #{ms(10)}em;  // 4.21em
\$length-em-10: #{ms(12)}em; // 5.62em
\$length-em-11: #{ms(14)}em; // 7.49em
\$length-em-12: #{ms(16)}em; // 10em


// Viewport-width-based spacing
\$length-vw-1: #{ms(8)}vw;   // 3.16vw
\$length-vw-2: #{ms(12)}vw;  // 5.62vw


// Toggles for navigation, search, login and chat
\$height-mobile-toolbar: #{ms(10)}em;
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.sizing.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / VARIABLES / SIZING
/////////////////////////////


@import '_variables.modular-scale';


// Font size
\$font-size-min: ms(0);      // 1em
\$font-size-max: ms(2);      // 1.33em


// Linear inetrpolation
\$min-width-lerp: ms(24);    //  31.57em ~  505.12px
\$max-width-lerp: ms(36);    // 177.38em ~ 2838.08px


// Em-based spacing
\$length-em-1: #{ms(-6)}em;  //  .42em
\$length-em-2: #{ms(-4)}em;  //  .56em
\$length-em-3: #{ms(-2)}em;  //  .75em
\$length-em-4: #{ms(0)}em;   // 1em
\$length-em-5: #{ms(2)}em;   // 1.33em
\$length-em-6: #{ms(4)}em;   // 1.78em
\$length-em-7: #{ms(6)}em;   // 2.37em
\$length-em-8: #{ms(8)}em;   // 3.16em
\$length-em-9: #{ms(10)}em;  // 4.21em
\$length-em-10: #{ms(12)}em; // 5.62em
\$length-em-11: #{ms(14)}em; // 7.49em
\$length-em-12: #{ms(16)}em; // 10em


// Viewport-width-based spacing
\$length-vw-1: #{ms(8)}vw;   // 3.16vw
\$length-vw-2: #{ms(12)}vw;  // 5.62vw


// Toggles for navigation, search, login and chat
\$height-mobile-toolbar: #{ms(10)}em;
", "wdn/templates_5.3/scss/variables/_variables.sizing.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.sizing.scss");
    }
}
