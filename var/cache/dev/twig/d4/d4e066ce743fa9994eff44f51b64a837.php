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

/* wdn/templates_5.3/scss/variables/_variables.notices.scss */
class __TwigTemplate_9f1b2034b721c9623abaaaa31e37c2dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.notices.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.notices.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / VARIABLES / NOTICES
//////////////////////////////


@import '_variables.body';


// Background color
\$bg-color-notice-info: \$info;           // Info notice background-color
\$bg-color-notice-success: \$success;     // Success notice background-color
\$bg-color-notice-warning: \$warning;     // Warning notice background-color
\$bg-color-notice-danger: \$danger;       // Danger notice background-color


// Color
\$color-notice-info: \$light-blue;        // Info notice color
\$color-notice-success: \$light-green;    // Success notice color
\$color-notice-warning: \$cream;          // Warning notice color
\$color-notice-danger: \$scarlet-tint;    // Danger notice color


// Position
\$left-notices-overlay: \$length-vw-2;    // Left position of overlay notice
\$right-notices-overlay: \$length-vw-2;   // Right position of overlay notice
\$top-notices-overlay: \$length-em-8;     // Top position of overlay notice
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.notices.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / VARIABLES / NOTICES
//////////////////////////////


@import '_variables.body';


// Background color
\$bg-color-notice-info: \$info;           // Info notice background-color
\$bg-color-notice-success: \$success;     // Success notice background-color
\$bg-color-notice-warning: \$warning;     // Warning notice background-color
\$bg-color-notice-danger: \$danger;       // Danger notice background-color


// Color
\$color-notice-info: \$light-blue;        // Info notice color
\$color-notice-success: \$light-green;    // Success notice color
\$color-notice-warning: \$cream;          // Warning notice color
\$color-notice-danger: \$scarlet-tint;    // Danger notice color


// Position
\$left-notices-overlay: \$length-vw-2;    // Left position of overlay notice
\$right-notices-overlay: \$length-vw-2;   // Right position of overlay notice
\$top-notices-overlay: \$length-em-8;     // Top position of overlay notice
", "wdn/templates_5.3/scss/variables/_variables.notices.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.notices.scss");
    }
}
