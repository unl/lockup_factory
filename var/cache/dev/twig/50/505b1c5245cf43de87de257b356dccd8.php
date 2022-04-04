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

/* wdn/templates_5.3/scss/variables/_variables.input-groups.scss */
class __TwigTemplate_079e7293e7367cefe3831b71dff0c7ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.input-groups.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.input-groups.scss"));

        // line 1
        echo "///////////////////////////////////
// THEME / VARIABLES / INPUT GROUPS
///////////////////////////////////


@import '_variables.color-palette';
@import '_variables.forms';
@import '_variables.modular-scale';


// Background color
\$bg-color-input-group-addon-light-mode: \$lightest-gray;                       // Input group add-on background-color in light mode
\$bg-color-input-group-addon-dark-mode: \$darker-gray-s1;                       // Input group add-on background-color in dark mode
\$bg-color-input-group-addon: var(--bg-input-group-addon);


// Border color
\$border-color-input-group-addon: var(--b-input);                              // Input group add-on border-color


// Border style
\$border-style-input-group-addon: \$border-style-input;                         // Input group add-on border-style


// Border width
\$border-width-input-group-addon: \$border-width-input;                         // Input group add-on border-width


// Color
\$color-input-group-addon-light-mode: \$dark-gray;                              // Input group add-on color in light mode
\$color-input-group-addon-dark-mode: \$gray-s1;                                 // Input group add-on color in dark mode
\$color-input-group-addon: var(--input-group-addon);


// Font size
\$font-size-input-group-addon: #{ms(-1)}em;                                    // Input group add-on font-size: .84em;


// Padding
\$padding-bottom-input-group-addon: \$padding-bottom-input;                     // Input group add-on padding-bottom
\$padding-left-input-group-addon: \$padding-left-input;                         // Input group add-on padding-left
\$padding-right-input-group-addon: \$padding-right-input;                       // Input group add-on padding-right
\$padding-top-input-group-addon: \$padding-top-input;                           // Input group add-on padding-top
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.input-groups.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////
// THEME / VARIABLES / INPUT GROUPS
///////////////////////////////////


@import '_variables.color-palette';
@import '_variables.forms';
@import '_variables.modular-scale';


// Background color
\$bg-color-input-group-addon-light-mode: \$lightest-gray;                       // Input group add-on background-color in light mode
\$bg-color-input-group-addon-dark-mode: \$darker-gray-s1;                       // Input group add-on background-color in dark mode
\$bg-color-input-group-addon: var(--bg-input-group-addon);


// Border color
\$border-color-input-group-addon: var(--b-input);                              // Input group add-on border-color


// Border style
\$border-style-input-group-addon: \$border-style-input;                         // Input group add-on border-style


// Border width
\$border-width-input-group-addon: \$border-width-input;                         // Input group add-on border-width


// Color
\$color-input-group-addon-light-mode: \$dark-gray;                              // Input group add-on color in light mode
\$color-input-group-addon-dark-mode: \$gray-s1;                                 // Input group add-on color in dark mode
\$color-input-group-addon: var(--input-group-addon);


// Font size
\$font-size-input-group-addon: #{ms(-1)}em;                                    // Input group add-on font-size: .84em;


// Padding
\$padding-bottom-input-group-addon: \$padding-bottom-input;                     // Input group add-on padding-bottom
\$padding-left-input-group-addon: \$padding-left-input;                         // Input group add-on padding-left
\$padding-right-input-group-addon: \$padding-right-input;                       // Input group add-on padding-right
\$padding-top-input-group-addon: \$padding-top-input;                           // Input group add-on padding-top
", "wdn/templates_5.3/scss/variables/_variables.input-groups.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.input-groups.scss");
    }
}
