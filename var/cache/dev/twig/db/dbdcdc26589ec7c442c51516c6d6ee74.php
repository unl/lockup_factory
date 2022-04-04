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

/* wdn/templates_5.3/scss/variables/_variables.body.scss */
class __TwigTemplate_5c319fb223f7a058ba4a304f51036740 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.body.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.body.scss"));

        // line 1
        echo "///////////////////////////
// THEME / VARIABLES / BODY
///////////////////////////


@import '_variables.color-palette';


// Background color
\$bg-color-body-light-mode: \$cream;                      // Body background-color in light mode -- usually white, off-white, or very light gray
\$bg-color-body-dark-mode: \$darkest-gray;                // Body background-color in dark mode -- usually black or very dark gray
\$bg-color-body: var(--bg-body);


// Color
\$color-body-light-mode: \$darker-gray;                   // Body text color in light mode -- strive for WCAG AAA (minimum contrast ratio of 7.0) for body text
\$color-body-dark-mode: \$gray;                           // Body text color in dark mode -- strive for WCAG AAA (minimum contrast ratio of 7.0) for body text
\$color-body: var(--body);
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.body.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////
// THEME / VARIABLES / BODY
///////////////////////////


@import '_variables.color-palette';


// Background color
\$bg-color-body-light-mode: \$cream;                      // Body background-color in light mode -- usually white, off-white, or very light gray
\$bg-color-body-dark-mode: \$darkest-gray;                // Body background-color in dark mode -- usually black or very dark gray
\$bg-color-body: var(--bg-body);


// Color
\$color-body-light-mode: \$darker-gray;                   // Body text color in light mode -- strive for WCAG AAA (minimum contrast ratio of 7.0) for body text
\$color-body-dark-mode: \$gray;                           // Body text color in dark mode -- strive for WCAG AAA (minimum contrast ratio of 7.0) for body text
\$color-body: var(--body);
", "wdn/templates_5.3/scss/variables/_variables.body.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.body.scss");
    }
}
