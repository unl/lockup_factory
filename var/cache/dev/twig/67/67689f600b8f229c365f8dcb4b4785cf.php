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

/* wdn/templates_5.3/scss/variables/_variables.paragraphs.scss */
class __TwigTemplate_d3ce1aa998896bf922b4feb139fc8479 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.paragraphs.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.paragraphs.scss"));

        // line 1
        echo "/////////////////////////////////
// THEME / VARIABLES / PARAGRAPHS
/////////////////////////////////


@import '_variables.modular-scale';


// Font size
\$font-size-drop-cap: #{ms(11)}em;       // Drop cap font-size: 4.74em


// Line height
// Adjust line-height for Chrome & Safari after first adjusting margin-top for Firefox
\$line-height-drop-cap: #{ms(-3)};       // Drop cap line-height: .63


// Margin
\$margin-bottom-paragraph: #{ms(0)}rem;  // Paragraph margin-bottom: 1rem
\$margin-top-paragraph: 0;               // Paragraph margin-top: 0
// Adjust margin-top for Firefox, then adjust line-height
\$margin-top-drop-cap: #{ms(-1)}rem;     // Drop cap margin-top: .84rem


// Padding
\$padding-left-drop-cap: #{ms(-20)}rem;  // Padding-left for drop cap: .06rem
\$padding-right-drop-cap: #{ms(-4)}rem;  // Padding-right for drop cap: .56rem
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.paragraphs.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////
// THEME / VARIABLES / PARAGRAPHS
/////////////////////////////////


@import '_variables.modular-scale';


// Font size
\$font-size-drop-cap: #{ms(11)}em;       // Drop cap font-size: 4.74em


// Line height
// Adjust line-height for Chrome & Safari after first adjusting margin-top for Firefox
\$line-height-drop-cap: #{ms(-3)};       // Drop cap line-height: .63


// Margin
\$margin-bottom-paragraph: #{ms(0)}rem;  // Paragraph margin-bottom: 1rem
\$margin-top-paragraph: 0;               // Paragraph margin-top: 0
// Adjust margin-top for Firefox, then adjust line-height
\$margin-top-drop-cap: #{ms(-1)}rem;     // Drop cap margin-top: .84rem


// Padding
\$padding-left-drop-cap: #{ms(-20)}rem;  // Padding-left for drop cap: .06rem
\$padding-right-drop-cap: #{ms(-4)}rem;  // Padding-right for drop cap: .56rem
", "wdn/templates_5.3/scss/variables/_variables.paragraphs.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.paragraphs.scss");
    }
}
