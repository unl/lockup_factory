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

/* wdn/templates_5.3/scss/variables/_variables.slideshows.scss */
class __TwigTemplate_0a16dbd7dd7a17a249d9b5113c68df2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.slideshows.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.slideshows.scss"));

        // line 1
        echo "/////////////////////////////////
// THEME / VARIABLES / SLIDESHOWS
/////////////////////////////////


@import '_variables.modular-scale';
@import '_variables.sizing';


// Padding
\$padding-bottom-slide-caption: \$length-em-4;    // Padding-bottom of slide caption: 1em
\$padding-left-slide-caption: #{ms(1)}em;        // Padding-left of slide caption: 1.13em
\$padding-right-slide-caption: #{ms(1)}em;       // Padding-right of slide caption: 1.13em
\$padding-top-slide-caption: \$length-em-4;       // Padding-top of slide caption: 1em


// Size
\$size-btn-x: 2.5rem;                            // Size of button along x-axis
\$size-btn-y: 2.5rem;                            // Size of button along y-axis
\$size-clip-path: 3px;                           // Size of clip-path around buttons
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.slideshows.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////
// THEME / VARIABLES / SLIDESHOWS
/////////////////////////////////


@import '_variables.modular-scale';
@import '_variables.sizing';


// Padding
\$padding-bottom-slide-caption: \$length-em-4;    // Padding-bottom of slide caption: 1em
\$padding-left-slide-caption: #{ms(1)}em;        // Padding-left of slide caption: 1.13em
\$padding-right-slide-caption: #{ms(1)}em;       // Padding-right of slide caption: 1.13em
\$padding-top-slide-caption: \$length-em-4;       // Padding-top of slide caption: 1em


// Size
\$size-btn-x: 2.5rem;                            // Size of button along x-axis
\$size-btn-y: 2.5rem;                            // Size of button along y-axis
\$size-clip-path: 3px;                           // Size of clip-path around buttons
", "wdn/templates_5.3/scss/variables/_variables.slideshows.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.slideshows.scss");
    }
}
