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

/* wdn/templates_5.3/scss/variables/_variables.anchors.scss */
class __TwigTemplate_25ce0ed11639bd007853cae39449a56a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.anchors.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.anchors.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / VARIABLES / ANCHORS
//////////////////////////////


@import '_variables.color-palette';
@import '_variables.body';


// Color
\$color-link-light-mode: \$scarlet;                                 // Link color in light mode
\$color-link-dark-mode: \$light-cerulean;                           // Link color in dark mode
\$color-link: var(--link);

\$color-visited-light-mode: darken(\$color-link-light-mode, 10%);   // Visited color in light mode
\$color-visited-dark-mode: \$lighter-cerulean;                      // Visited color in dark mode
\$color-visited: var(--visited);

\$color-hover-light-mode: darken(\$color-link-light-mode, 10%);     // Hover color in light mode
\$color-hover-dark-mode: \$lighter-cerulean;                        // Hover color in dark mode
\$color-hover: var(--hover);

\$color-active-light-mode: darken(\$color-link-light-mode, 10%);    // Active color in light mode
\$color-active-dark-mode: \$lighter-cerulean;                       // Active color in dark mode
\$color-active: var(--active);

\$color-inverse-link-light-mode: \$bg-color-body-light-mode;        // Inverse link color in light mode
\$color-inverse-link-dark-mode: \$bg-color-body-dark-mode;          // Inverse link color in dark mode
\$color-inverse-link: var(--inverse-link);

\$color-inverse-visited-light-mode: \$bg-color-body-light-mode;     // Inverse visited color in light mode
\$color-inverse-visited-dark-mode: \$bg-color-body-dark-mode;       // Inverse visited color in dark mode
\$color-inverse-visited: var(--inverse-visited);

\$color-inverse-hover-light-mode: \$bg-color-body-light-mode;       // Inverse hover color in light mode
\$color-inverse-hover-dark-mode: \$bg-color-body-dark-mode;         // Inverse hover color in dark mode
\$color-inverse-hover: var(--inverse-hover);

\$color-inverse-active-light-mode: \$bg-color-body-light-mode;      // Inverse active color in light mode
\$color-inverse-active-dark-mode: \$bg-color-body-dark-mode;        // Inverse active color in dark mode
\$color-inverse-active: var(--inverse-active);
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.anchors.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / VARIABLES / ANCHORS
//////////////////////////////


@import '_variables.color-palette';
@import '_variables.body';


// Color
\$color-link-light-mode: \$scarlet;                                 // Link color in light mode
\$color-link-dark-mode: \$light-cerulean;                           // Link color in dark mode
\$color-link: var(--link);

\$color-visited-light-mode: darken(\$color-link-light-mode, 10%);   // Visited color in light mode
\$color-visited-dark-mode: \$lighter-cerulean;                      // Visited color in dark mode
\$color-visited: var(--visited);

\$color-hover-light-mode: darken(\$color-link-light-mode, 10%);     // Hover color in light mode
\$color-hover-dark-mode: \$lighter-cerulean;                        // Hover color in dark mode
\$color-hover: var(--hover);

\$color-active-light-mode: darken(\$color-link-light-mode, 10%);    // Active color in light mode
\$color-active-dark-mode: \$lighter-cerulean;                       // Active color in dark mode
\$color-active: var(--active);

\$color-inverse-link-light-mode: \$bg-color-body-light-mode;        // Inverse link color in light mode
\$color-inverse-link-dark-mode: \$bg-color-body-dark-mode;          // Inverse link color in dark mode
\$color-inverse-link: var(--inverse-link);

\$color-inverse-visited-light-mode: \$bg-color-body-light-mode;     // Inverse visited color in light mode
\$color-inverse-visited-dark-mode: \$bg-color-body-dark-mode;       // Inverse visited color in dark mode
\$color-inverse-visited: var(--inverse-visited);

\$color-inverse-hover-light-mode: \$bg-color-body-light-mode;       // Inverse hover color in light mode
\$color-inverse-hover-dark-mode: \$bg-color-body-dark-mode;         // Inverse hover color in dark mode
\$color-inverse-hover: var(--inverse-hover);

\$color-inverse-active-light-mode: \$bg-color-body-light-mode;      // Inverse active color in light mode
\$color-inverse-active-dark-mode: \$bg-color-body-dark-mode;        // Inverse active color in dark mode
\$color-inverse-active: var(--inverse-active);
", "wdn/templates_5.3/scss/variables/_variables.anchors.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.anchors.scss");
    }
}
