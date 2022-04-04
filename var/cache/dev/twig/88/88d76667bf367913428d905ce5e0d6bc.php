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

/* wdn/templates_5.3/scss/mixins/_mixins.border-color.scss */
class __TwigTemplate_65a8ba69b405099263d016a7e4ec9cae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.border-color.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.border-color.scss"));

        // line 1
        echo "////////////////////////////////
// THEME / MIXINS / BORDER-COLOR
////////////////////////////////


// Scarlet
@mixin b-scarlet(\$imp:null) { border-color: \$scarlet \$imp; }          // All Sides
@mixin bt-scarlet(\$imp:null) { border-top-color: \$scarlet \$imp; }     // Top
@mixin br-scarlet(\$imp:null) { border-right-color: \$scarlet \$imp; }   // Right
@mixin bb-scarlet(\$imp:null) { border-bottom-color: \$scarlet \$imp; }  // Bottom
@mixin bl-scarlet(\$imp:null) { border-left-color: \$scarlet \$imp; }    // Left


// Cream
@mixin b-cream(\$imp:null) { border-color: \$cream \$imp; }          // All Sides
@mixin bt-cream(\$imp:null) { border-top-color: \$cream \$imp; }     // Top
@mixin br-cream(\$imp:null) { border-right-color: \$cream \$imp; }   // Right
@mixin bb-cream(\$imp:null) { border-bottom-color: \$cream \$imp; }  // Bottom
@mixin bl-cream(\$imp:null) { border-left-color: \$cream \$imp; }    // Left


// Gray
@mixin b-gray(\$imp:null) { border-color: \$gray \$imp; }          // All Sides
@mixin bt-gray(\$imp:null) { border-top-color: \$gray \$imp; }     // Top
@mixin br-gray(\$imp:null) { border-right-color: \$gray \$imp; }   // Right
@mixin bb-gray(\$imp:null) { border-bottom-color: \$gray \$imp; }  // Bottom
@mixin bl-gray(\$imp:null) { border-left-color: \$gray \$imp; }    // Left


// Lightest Gray
@mixin b-lightest-gray(\$imp:null) { border-color: var(--b-lightest-gray) \$imp; }          // All Sides
@mixin bt-lightest-gray(\$imp:null) { border-top-color: var(--b-lightest-gray) \$imp; }     // Top
@mixin br-lightest-gray(\$imp:null) { border-right-color: var(--b-lightest-gray) \$imp; }   // Right
@mixin bb-lightest-gray(\$imp:null) { border-bottom-color: var(--b-lightest-gray) \$imp; }  // Bottom
@mixin bl-lightest-gray(\$imp:null) { border-left-color: var(--b-lightest-gray) \$imp; }    // Left


// Lighter Gray
@mixin b-lighter-gray(\$imp:null) { border-color: var(--b-lighter-gray) \$imp; }          // All Sides
@mixin bt-lighter-gray(\$imp:null) { border-top-color: var(--b-lighter-gray) \$imp; }     // Top
@mixin br-lighter-gray(\$imp:null) { border-right-color: var(--b-lighter-gray) \$imp; }   // Right
@mixin bb-lighter-gray(\$imp:null) { border-bottom-color: var(--b-lighter-gray) \$imp; }  // Bottom
@mixin bl-lighter-gray(\$imp:null) { border-left-color: var(--b-lighter-gray) \$imp; }    // Left


// Light Gray
@mixin b-light-gray(\$imp:null) { border-color: var(--b-light-gray) \$imp; }          // All Sides
@mixin bt-light-gray(\$imp:null) { border-top-color: var(--b-light-gray) \$imp; }     // Top
@mixin br-light-gray(\$imp:null) { border-right-color: var(--b-light-gray) \$imp; }   // Right
@mixin bb-light-gray(\$imp:null) { border-bottom-color: var(--b-light-gray) \$imp; }  // Bottom
@mixin bl-light-gray(\$imp:null) { border-left-color: var(--b-light-gray) \$imp; }    // Left


// Dark Gray
@mixin b-dark-gray(\$imp:null) { border-color: \$dark-gray \$imp; }          // All Sides
@mixin bt-dark-gray(\$imp:null) { border-top-color: \$dark-gray \$imp; }     // Top
@mixin br-dark-gray(\$imp:null) { border-right-color: \$dark-gray \$imp; }   // Right
@mixin bb-dark-gray(\$imp:null) { border-bottom-color: \$dark-gray \$imp; }  // Bottom
@mixin bl-dark-gray(\$imp:null) { border-left-color: \$dark-gray \$imp; }    // Left


// Darker Gray
@mixin b-darker-gray(\$imp:null) { border-color: \$darker-gray \$imp; }          // All Sides
@mixin bt-darker-gray(\$imp:null) { border-top-color: \$darker-gray \$imp; }     // Top
@mixin br-darker-gray(\$imp:null) { border-right-color: \$darker-gray \$imp; }   // Right
@mixin bb-darker-gray(\$imp:null) { border-bottom-color: \$darker-gray \$imp; }  // Bottom
@mixin bl-darker-gray(\$imp:null) { border-left-color: \$darker-gray \$imp; }    // Left


// Darkest Gray
@mixin b-darkest-gray(\$imp:null) { border-color: \$darkest-gray \$imp; }          // All Sides
@mixin bt-darkest-gray(\$imp:null) { border-top-color: \$darkest-gray \$imp; }     // Top
@mixin br-darkest-gray(\$imp:null) { border-right-color: \$darkest-gray \$imp; }   // Right
@mixin bb-darkest-gray(\$imp:null) { border-bottom-color: \$darkest-gray \$imp; }  // Bottom
@mixin bl-darkest-gray(\$imp:null) { border-left-color: \$darkest-gray \$imp; }    // Left
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/mixins/_mixins.border-color.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////
// THEME / MIXINS / BORDER-COLOR
////////////////////////////////


// Scarlet
@mixin b-scarlet(\$imp:null) { border-color: \$scarlet \$imp; }          // All Sides
@mixin bt-scarlet(\$imp:null) { border-top-color: \$scarlet \$imp; }     // Top
@mixin br-scarlet(\$imp:null) { border-right-color: \$scarlet \$imp; }   // Right
@mixin bb-scarlet(\$imp:null) { border-bottom-color: \$scarlet \$imp; }  // Bottom
@mixin bl-scarlet(\$imp:null) { border-left-color: \$scarlet \$imp; }    // Left


// Cream
@mixin b-cream(\$imp:null) { border-color: \$cream \$imp; }          // All Sides
@mixin bt-cream(\$imp:null) { border-top-color: \$cream \$imp; }     // Top
@mixin br-cream(\$imp:null) { border-right-color: \$cream \$imp; }   // Right
@mixin bb-cream(\$imp:null) { border-bottom-color: \$cream \$imp; }  // Bottom
@mixin bl-cream(\$imp:null) { border-left-color: \$cream \$imp; }    // Left


// Gray
@mixin b-gray(\$imp:null) { border-color: \$gray \$imp; }          // All Sides
@mixin bt-gray(\$imp:null) { border-top-color: \$gray \$imp; }     // Top
@mixin br-gray(\$imp:null) { border-right-color: \$gray \$imp; }   // Right
@mixin bb-gray(\$imp:null) { border-bottom-color: \$gray \$imp; }  // Bottom
@mixin bl-gray(\$imp:null) { border-left-color: \$gray \$imp; }    // Left


// Lightest Gray
@mixin b-lightest-gray(\$imp:null) { border-color: var(--b-lightest-gray) \$imp; }          // All Sides
@mixin bt-lightest-gray(\$imp:null) { border-top-color: var(--b-lightest-gray) \$imp; }     // Top
@mixin br-lightest-gray(\$imp:null) { border-right-color: var(--b-lightest-gray) \$imp; }   // Right
@mixin bb-lightest-gray(\$imp:null) { border-bottom-color: var(--b-lightest-gray) \$imp; }  // Bottom
@mixin bl-lightest-gray(\$imp:null) { border-left-color: var(--b-lightest-gray) \$imp; }    // Left


// Lighter Gray
@mixin b-lighter-gray(\$imp:null) { border-color: var(--b-lighter-gray) \$imp; }          // All Sides
@mixin bt-lighter-gray(\$imp:null) { border-top-color: var(--b-lighter-gray) \$imp; }     // Top
@mixin br-lighter-gray(\$imp:null) { border-right-color: var(--b-lighter-gray) \$imp; }   // Right
@mixin bb-lighter-gray(\$imp:null) { border-bottom-color: var(--b-lighter-gray) \$imp; }  // Bottom
@mixin bl-lighter-gray(\$imp:null) { border-left-color: var(--b-lighter-gray) \$imp; }    // Left


// Light Gray
@mixin b-light-gray(\$imp:null) { border-color: var(--b-light-gray) \$imp; }          // All Sides
@mixin bt-light-gray(\$imp:null) { border-top-color: var(--b-light-gray) \$imp; }     // Top
@mixin br-light-gray(\$imp:null) { border-right-color: var(--b-light-gray) \$imp; }   // Right
@mixin bb-light-gray(\$imp:null) { border-bottom-color: var(--b-light-gray) \$imp; }  // Bottom
@mixin bl-light-gray(\$imp:null) { border-left-color: var(--b-light-gray) \$imp; }    // Left


// Dark Gray
@mixin b-dark-gray(\$imp:null) { border-color: \$dark-gray \$imp; }          // All Sides
@mixin bt-dark-gray(\$imp:null) { border-top-color: \$dark-gray \$imp; }     // Top
@mixin br-dark-gray(\$imp:null) { border-right-color: \$dark-gray \$imp; }   // Right
@mixin bb-dark-gray(\$imp:null) { border-bottom-color: \$dark-gray \$imp; }  // Bottom
@mixin bl-dark-gray(\$imp:null) { border-left-color: \$dark-gray \$imp; }    // Left


// Darker Gray
@mixin b-darker-gray(\$imp:null) { border-color: \$darker-gray \$imp; }          // All Sides
@mixin bt-darker-gray(\$imp:null) { border-top-color: \$darker-gray \$imp; }     // Top
@mixin br-darker-gray(\$imp:null) { border-right-color: \$darker-gray \$imp; }   // Right
@mixin bb-darker-gray(\$imp:null) { border-bottom-color: \$darker-gray \$imp; }  // Bottom
@mixin bl-darker-gray(\$imp:null) { border-left-color: \$darker-gray \$imp; }    // Left


// Darkest Gray
@mixin b-darkest-gray(\$imp:null) { border-color: \$darkest-gray \$imp; }          // All Sides
@mixin bt-darkest-gray(\$imp:null) { border-top-color: \$darkest-gray \$imp; }     // Top
@mixin br-darkest-gray(\$imp:null) { border-right-color: \$darkest-gray \$imp; }   // Right
@mixin bb-darkest-gray(\$imp:null) { border-bottom-color: \$darkest-gray \$imp; }  // Bottom
@mixin bl-darkest-gray(\$imp:null) { border-left-color: \$darkest-gray \$imp; }    // Left
", "wdn/templates_5.3/scss/mixins/_mixins.border-color.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/mixins/_mixins.border-color.scss");
    }
}
