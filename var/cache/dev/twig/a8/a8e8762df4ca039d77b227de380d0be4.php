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

/* wdn/templates_5.3/scss/variables/_variables.abbreviations.scss */
class __TwigTemplate_b4a4f9dad6557fea2bfa0de98d72c737 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.abbreviations.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.abbreviations.scss"));

        // line 1
        echo "////////////////////////////////////
// THEME / VARIABLES / ABBREVIATIONS
////////////////////////////////////


@import '_variables.modular-scale';


// Border color
\$border-bottom-color-abbr-title: currentColor;  // Border-bottom-color of abbreviation border (underline)


// Border style
\$border-bottom-style-abbr-title: dotted;        // Border-bottom-style of abbreviation border (underline)


// Border width
\$border-bottom-width-abbr-title: 0;             // Border-bottom-width of abbreviation border (underline)


// Font size
\$font-size-abbr: .9em;                          // Abbreviation font-size


// Letter spacing
\$letter-spacing-abbr: .05em;                    // Abbreviation letter-spacing


// Opacity
\$opacity-abbr-title: .5;                        // Opacity of abbreviation's border-bottom (underline)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.abbreviations.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////
// THEME / VARIABLES / ABBREVIATIONS
////////////////////////////////////


@import '_variables.modular-scale';


// Border color
\$border-bottom-color-abbr-title: currentColor;  // Border-bottom-color of abbreviation border (underline)


// Border style
\$border-bottom-style-abbr-title: dotted;        // Border-bottom-style of abbreviation border (underline)


// Border width
\$border-bottom-width-abbr-title: 0;             // Border-bottom-width of abbreviation border (underline)


// Font size
\$font-size-abbr: .9em;                          // Abbreviation font-size


// Letter spacing
\$letter-spacing-abbr: .05em;                    // Abbreviation letter-spacing


// Opacity
\$opacity-abbr-title: .5;                        // Opacity of abbreviation's border-bottom (underline)
", "wdn/templates_5.3/scss/variables/_variables.abbreviations.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.abbreviations.scss");
    }
}
