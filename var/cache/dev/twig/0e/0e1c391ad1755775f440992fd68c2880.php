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

/* wdn/templates_5.3/scss/variables/_variables.lists.scss */
class __TwigTemplate_b4ed36cc71221a3b3d2c6a56a8a55c74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.lists.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.lists.scss"));

        // line 1
        echo "////////////////////////////
// THEME / VARIABLES / LISTS
////////////////////////////


@import '_variables.sizing';


// Font weight
\$font-weight-dt-bold: true;                 // Bold <dt>? True/false


// Margin
\$margin-bottom-dl-ol-ul: \$length-em-4;      // Margin-bottom for description, ordered and unordered lists: 1em
\$margin-top-dl-ol-ul: 0;                    // Margin-top for description, ordered and unordered lists: 0
\$margin-top-nested-dl-ol-ul: \$length-em-3;  // Margin-top for nested description, ordered and unordered lists: .75em
\$margin-top-li-dt-dd: 0;                    // Margin-top for list items <li>, terms <dt> and descriptions <dd>: 0
\$margin-bottom-li: \$length-em-2;            // Margin-bottom for <li>: .56em
\$margin-left-dd: 0;                         // Margin-left for <dd>: 0
\$margin-bottom-dt-dd: \$length-em-1;         // Margin-bottom for <dt> and <dd>: .42em
\$margin-top-dd-plus-dt: \$length-em-4;       // Margin-top for <dd> + <dt>: 1em
\$margin-right-li-inline: \$length-em-2;      // Margin-right for inline list items: .56em


// Padding
\$padding-left-ol-ul: \$length-em-6;          // Padding-left for ordered and unordered lists: 1.78em
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.lists.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////
// THEME / VARIABLES / LISTS
////////////////////////////


@import '_variables.sizing';


// Font weight
\$font-weight-dt-bold: true;                 // Bold <dt>? True/false


// Margin
\$margin-bottom-dl-ol-ul: \$length-em-4;      // Margin-bottom for description, ordered and unordered lists: 1em
\$margin-top-dl-ol-ul: 0;                    // Margin-top for description, ordered and unordered lists: 0
\$margin-top-nested-dl-ol-ul: \$length-em-3;  // Margin-top for nested description, ordered and unordered lists: .75em
\$margin-top-li-dt-dd: 0;                    // Margin-top for list items <li>, terms <dt> and descriptions <dd>: 0
\$margin-bottom-li: \$length-em-2;            // Margin-bottom for <li>: .56em
\$margin-left-dd: 0;                         // Margin-left for <dd>: 0
\$margin-bottom-dt-dd: \$length-em-1;         // Margin-bottom for <dt> and <dd>: .42em
\$margin-top-dd-plus-dt: \$length-em-4;       // Margin-top for <dd> + <dt>: 1em
\$margin-right-li-inline: \$length-em-2;      // Margin-right for inline list items: .56em


// Padding
\$padding-left-ol-ul: \$length-em-6;          // Padding-left for ordered and unordered lists: 1.78em
", "wdn/templates_5.3/scss/variables/_variables.lists.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.lists.scss");
    }
}
