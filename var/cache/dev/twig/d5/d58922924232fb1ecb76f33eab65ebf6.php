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

/* wdn/templates_5.3/scss/utilities/_utilities.border-color.scss */
class __TwigTemplate_e6c68d436ad74f17996d6d900b13c23c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.border-color.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.border-color.scss"));

        // line 1
        echo "///////////////////////////////////
// THEME / UTILITIES / BORDER-COLOR
///////////////////////////////////


// Scarlet
.unl-b-scarlet { @include b-scarlet(!important); }    // All Sides
.unl-bt-scarlet { @include bt-scarlet(!important); }  // Top
.unl-br-scarlet { @include br-scarlet(!important); }  // Right
.unl-bb-scarlet { @include bb-scarlet(!important); }  // Bottom
.unl-bl-scarlet { @include bl-scarlet(!important); }  // Left


// Cream
.unl-b-cream { @include b-cream(!important); }    // All Sides
.unl-bt-cream { @include bt-cream(!important); }  // Top
.unl-br-cream { @include br-cream(!important); }  // Right
.unl-bb-cream { @include bb-cream(!important); }  // Bottom
.unl-bl-cream { @include bl-cream(!important); }  // Left


// Gray
.unl-b-gray { @include b-gray(!important); }    // All Sides
.unl-bt-gray { @include bt-gray(!important); }  // Top
.unl-br-gray { @include br-gray(!important); }  // Right
.unl-bb-gray { @include bb-gray(!important); }  // Bottom
.unl-bl-gray { @include bl-gray(!important); }  // Left


// Lightest Gray
.unl-b-lightest-gray { @include b-lightest-gray(!important); }    // All Sides
.unl-bt-lightest-gray { @include bt-lightest-gray(!important); }  // Top
.unl-br-lightest-gray { @include br-lightest-gray(!important); }  // Right
.unl-bb-lightest-gray { @include bb-lightest-gray(!important); }  // Bottom
.unl-bl-lightest-gray { @include bl-lightest-gray(!important); }  // Left


// Lighter Gray
.unl-b-lighter-gray { @include b-lighter-gray(!important); }    // All Sides
.unl-bt-lighter-gray { @include bt-lighter-gray(!important); }  // Top
.unl-br-lighter-gray { @include br-lighter-gray(!important); }  // Right
.unl-bb-lighter-gray { @include bb-lighter-gray(!important); }  // Bottom
.unl-bl-lighter-gray { @include bl-lighter-gray(!important); }  // Left


// Light Gray
.unl-b-light-gray { @include b-light-gray(!important); }    // All Sides
.unl-bt-light-gray { @include bt-light-gray(!important); }  // Top
.unl-br-light-gray { @include br-light-gray(!important); }  // Right
.unl-bb-light-gray { @include bb-light-gray(!important); }  // Bottom
.unl-bl-light-gray { @include bl-light-gray(!important); }  // Left


// Dark Gray
.unl-b-dark-gray { @include b-dark-gray(!important); }    // All Sides
.unl-bt-dark-gray { @include bt-dark-gray(!important); }  // Top
.unl-br-dark-gray { @include br-dark-gray(!important); }  // Right
.unl-bb-dark-gray { @include bb-dark-gray(!important); }  // Bottom
.unl-bl-dark-gray { @include bl-dark-gray(!important); }  // Left


// Darker Gray
.unl-b-darker-gray { @include b-darker-gray(!important); }    // All Sides
.unl-bt-darker-gray { @include bt-darker-gray(!important); }  // Top
.unl-br-darker-gray { @include br-darker-gray(!important); }  // Right
.unl-bb-darker-gray { @include bb-darker-gray(!important); }  // Bottom
.unl-bl-darker-gray { @include bl-darker-gray(!important); }  // Left


// Darkest Gray
.unl-b-darkest-gray { @include b-darkest-gray(!important); }    // All Sides
.unl-bt-darkest-gray { @include bt-darkest-gray(!important); }  // Top
.unl-br-darkest-gray { @include br-darkest-gray(!important); }  // Right
.unl-bb-darkest-gray { @include bb-darkest-gray(!important); }  // Bottom
.unl-bl-darkest-gray { @include bl-darkest-gray(!important); }  // Left
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/utilities/_utilities.border-color.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////
// THEME / UTILITIES / BORDER-COLOR
///////////////////////////////////


// Scarlet
.unl-b-scarlet { @include b-scarlet(!important); }    // All Sides
.unl-bt-scarlet { @include bt-scarlet(!important); }  // Top
.unl-br-scarlet { @include br-scarlet(!important); }  // Right
.unl-bb-scarlet { @include bb-scarlet(!important); }  // Bottom
.unl-bl-scarlet { @include bl-scarlet(!important); }  // Left


// Cream
.unl-b-cream { @include b-cream(!important); }    // All Sides
.unl-bt-cream { @include bt-cream(!important); }  // Top
.unl-br-cream { @include br-cream(!important); }  // Right
.unl-bb-cream { @include bb-cream(!important); }  // Bottom
.unl-bl-cream { @include bl-cream(!important); }  // Left


// Gray
.unl-b-gray { @include b-gray(!important); }    // All Sides
.unl-bt-gray { @include bt-gray(!important); }  // Top
.unl-br-gray { @include br-gray(!important); }  // Right
.unl-bb-gray { @include bb-gray(!important); }  // Bottom
.unl-bl-gray { @include bl-gray(!important); }  // Left


// Lightest Gray
.unl-b-lightest-gray { @include b-lightest-gray(!important); }    // All Sides
.unl-bt-lightest-gray { @include bt-lightest-gray(!important); }  // Top
.unl-br-lightest-gray { @include br-lightest-gray(!important); }  // Right
.unl-bb-lightest-gray { @include bb-lightest-gray(!important); }  // Bottom
.unl-bl-lightest-gray { @include bl-lightest-gray(!important); }  // Left


// Lighter Gray
.unl-b-lighter-gray { @include b-lighter-gray(!important); }    // All Sides
.unl-bt-lighter-gray { @include bt-lighter-gray(!important); }  // Top
.unl-br-lighter-gray { @include br-lighter-gray(!important); }  // Right
.unl-bb-lighter-gray { @include bb-lighter-gray(!important); }  // Bottom
.unl-bl-lighter-gray { @include bl-lighter-gray(!important); }  // Left


// Light Gray
.unl-b-light-gray { @include b-light-gray(!important); }    // All Sides
.unl-bt-light-gray { @include bt-light-gray(!important); }  // Top
.unl-br-light-gray { @include br-light-gray(!important); }  // Right
.unl-bb-light-gray { @include bb-light-gray(!important); }  // Bottom
.unl-bl-light-gray { @include bl-light-gray(!important); }  // Left


// Dark Gray
.unl-b-dark-gray { @include b-dark-gray(!important); }    // All Sides
.unl-bt-dark-gray { @include bt-dark-gray(!important); }  // Top
.unl-br-dark-gray { @include br-dark-gray(!important); }  // Right
.unl-bb-dark-gray { @include bb-dark-gray(!important); }  // Bottom
.unl-bl-dark-gray { @include bl-dark-gray(!important); }  // Left


// Darker Gray
.unl-b-darker-gray { @include b-darker-gray(!important); }    // All Sides
.unl-bt-darker-gray { @include bt-darker-gray(!important); }  // Top
.unl-br-darker-gray { @include br-darker-gray(!important); }  // Right
.unl-bb-darker-gray { @include bb-darker-gray(!important); }  // Bottom
.unl-bl-darker-gray { @include bl-darker-gray(!important); }  // Left


// Darkest Gray
.unl-b-darkest-gray { @include b-darkest-gray(!important); }    // All Sides
.unl-bt-darkest-gray { @include bt-darkest-gray(!important); }  // Top
.unl-br-darkest-gray { @include br-darkest-gray(!important); }  // Right
.unl-bb-darkest-gray { @include bb-darkest-gray(!important); }  // Bottom
.unl-bl-darkest-gray { @include bl-darkest-gray(!important); }  // Left
", "wdn/templates_5.3/scss/utilities/_utilities.border-color.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/utilities/_utilities.border-color.scss");
    }
}
