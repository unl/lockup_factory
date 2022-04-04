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

/* wdn/templates_5.3/scss/variables/_variables.blockquotes.scss */
class __TwigTemplate_065801187bef504d88cc8e67bc28d1c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.blockquotes.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.blockquotes.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / VARIABLES / BLOCKQUOTES
//////////////////////////////////


@import '_variables.modular-scale';
@import '_variables.sizing';


// Font size
\$font-size-blockquote-open-quote: #{ms(16)}em;  // Open quote font-size: 9.97em
\$font-size-blockquote-p: #{ms(2)}em;            // Blockquote paragraph font-size: 1.33em


// Margin
\$margin-bottom-blockquote: \$length-em-7;        // Blockquote margin-bottom: 2.37em
\$margin-left-blockquote: 0;                     // Blockquote margin-left: 0
\$margin-right-blockquote: 0;                    // Blockquote margin-right: 0
\$margin-top-blockquote: \$length-em-4;           // Blockquote margin-top: 1em

\$margin-top-attribution: \$length-em-4;          // Attribution margin-top: 1em


// Padding
\$padding-top-blockquote-p: #{ms(9)}em;          // Blockquote paragraph padding-top: 3.56em
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.blockquotes.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / VARIABLES / BLOCKQUOTES
//////////////////////////////////


@import '_variables.modular-scale';
@import '_variables.sizing';


// Font size
\$font-size-blockquote-open-quote: #{ms(16)}em;  // Open quote font-size: 9.97em
\$font-size-blockquote-p: #{ms(2)}em;            // Blockquote paragraph font-size: 1.33em


// Margin
\$margin-bottom-blockquote: \$length-em-7;        // Blockquote margin-bottom: 2.37em
\$margin-left-blockquote: 0;                     // Blockquote margin-left: 0
\$margin-right-blockquote: 0;                    // Blockquote margin-right: 0
\$margin-top-blockquote: \$length-em-4;           // Blockquote margin-top: 1em

\$margin-top-attribution: \$length-em-4;          // Attribution margin-top: 1em


// Padding
\$padding-top-blockquote-p: #{ms(9)}em;          // Blockquote paragraph padding-top: 3.56em
", "wdn/templates_5.3/scss/variables/_variables.blockquotes.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.blockquotes.scss");
    }
}
