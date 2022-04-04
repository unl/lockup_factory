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

/* wdn/templates_5.3/scss/variables/_variables.figures.scss */
class __TwigTemplate_7d2d2915c23783b373edc0755a8695ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.figures.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.figures.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / VARIABLES / FIGURES
//////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';


// Color
\$color-figcaption-light-mode: \$color-light-text-light-mode;   // Color of figcaption in light mode
\$color-figcaption-dark-mode: \$color-light-text-dark-mode;     // Color of figcaption in dark mode
\$color-figcaption: var(--figcaption);


// Font size
\$font-size-figcaption: #{ms(-2)}em;                           // Font-size of figcaption: .75em
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.figures.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / VARIABLES / FIGURES
//////////////////////////////


@import '_variables.color-palette';
@import '_variables.modular-scale';


// Color
\$color-figcaption-light-mode: \$color-light-text-light-mode;   // Color of figcaption in light mode
\$color-figcaption-dark-mode: \$color-light-text-dark-mode;     // Color of figcaption in dark mode
\$color-figcaption: var(--figcaption);


// Font size
\$font-size-figcaption: #{ms(-2)}em;                           // Font-size of figcaption: .75em
", "wdn/templates_5.3/scss/variables/_variables.figures.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.figures.scss");
    }
}
