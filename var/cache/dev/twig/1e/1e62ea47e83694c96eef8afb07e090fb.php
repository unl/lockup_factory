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

/* wdn/templates_5.3/scss/utilities/_utilities.background-images.scss */
class __TwigTemplate_0a7f2034cd9cced024b6873d3c1f4654 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.background-images.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.background-images.scss"));

        // line 1
        echo "////////////////////////////////////////
// THEME / UTILITIES / BACKGROUND IMAGES
////////////////////////////////////////


// Dots
[class*='unl-bg-dots-'] { @include bg-dots(!important); }
.unl-bg-dots-gray { @include bg-dots-gray(!important); }
.unl-bg-dots-scarlet { @include bg-dots-scarlet(!important); }


// Grit
.unl-bg-grit { @include bg-grit(!important); }


// Diagonal Stripes: Scarlet
.unl-bg-stripes-scarlet { @include bg-stripes-scarlet(!important); }


// Diagonal Stripes: Dark
.unl-bg-stripes-dark { @include bg-stripes-dark(!important); }


// Diagonal Stripes: Light
.unl-bg-stripes-light { @include bg-stripes-light(!important); }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/utilities/_utilities.background-images.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////////
// THEME / UTILITIES / BACKGROUND IMAGES
////////////////////////////////////////


// Dots
[class*='unl-bg-dots-'] { @include bg-dots(!important); }
.unl-bg-dots-gray { @include bg-dots-gray(!important); }
.unl-bg-dots-scarlet { @include bg-dots-scarlet(!important); }


// Grit
.unl-bg-grit { @include bg-grit(!important); }


// Diagonal Stripes: Scarlet
.unl-bg-stripes-scarlet { @include bg-stripes-scarlet(!important); }


// Diagonal Stripes: Dark
.unl-bg-stripes-dark { @include bg-stripes-dark(!important); }


// Diagonal Stripes: Light
.unl-bg-stripes-light { @include bg-stripes-light(!important); }
", "wdn/templates_5.3/scss/utilities/_utilities.background-images.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/utilities/_utilities.background-images.scss");
    }
}
