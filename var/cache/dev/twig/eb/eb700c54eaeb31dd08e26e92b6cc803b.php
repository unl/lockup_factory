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

/* wdn/templates_5.3/scss/utilities/_utilities.background-colors.scss */
class __TwigTemplate_e7b895a87b6a60455829bfe829115e88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.background-colors.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.background-colors.scss"));

        // line 1
        echo "////////////////////////////////////////
// THEME / UTILITIES / BACKGROUND COLORS
////////////////////////////////////////


// Scarlet
.unl-bg-scarlet { @include bg-scarlet(!important); }


// Cream
.unl-bg-cream { @include bg-cream(!important); }
.unl-bg-cream\\@dark { @include bg-cream-at-dark(!important); }


// Gray
.unl-bg-lightest-gray { @include bg-lightest(!important); }
.unl-bg-lightest-gray\\@dark { @include bg-lightest-at-dark(!important); }
.unl-bg-lighter-gray { @include bg-lighter(!important); }
.unl-bg-lighter-gray\\@dark { @include bg-lighter-at-dark(!important); }
.unl-bg-light-gray { @include bg-light(!important); }
.unl-bg-light-gray\\@dark { @include bg-light-at-dark(!important); }
.unl-bg-dark-gray { @include bg-dark(!important); }
.unl-bg-darker-gray { @include bg-darker(!important); }
.unl-bg-darkest-gray { @include bg-darkest(!important); }


// Cerulean
.unl-bg-cerulean { @include bg-cerulean(!important); }


// Green
.unl-bg-green { @include bg-green(!important); }
.unl-bg-light-green { @include bg-light-green(!important); }
.unl-bg-light-green\\@dark { @include bg-light-green-at-dark(!important); }


// Blue
.unl-bg-blue { @include bg-blue(!important); }
.unl-bg-light-blue { @include bg-light-blue(!important); }
.unl-bg-light-blue\\@dark { @include bg-light-blue-at-dark(!important); }


// Purple
.unl-bg-purple { @include bg-purple(!important); }
.unl-bg-light-purple { @include bg-light-purple(!important); }
.unl-bg-light-purple\\@dark { @include bg-light-purple-at-dark(!important); }


// Yellow
.unl-bg-yellow { @include bg-yellow(!important); }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/utilities/_utilities.background-colors.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////////
// THEME / UTILITIES / BACKGROUND COLORS
////////////////////////////////////////


// Scarlet
.unl-bg-scarlet { @include bg-scarlet(!important); }


// Cream
.unl-bg-cream { @include bg-cream(!important); }
.unl-bg-cream\\@dark { @include bg-cream-at-dark(!important); }


// Gray
.unl-bg-lightest-gray { @include bg-lightest(!important); }
.unl-bg-lightest-gray\\@dark { @include bg-lightest-at-dark(!important); }
.unl-bg-lighter-gray { @include bg-lighter(!important); }
.unl-bg-lighter-gray\\@dark { @include bg-lighter-at-dark(!important); }
.unl-bg-light-gray { @include bg-light(!important); }
.unl-bg-light-gray\\@dark { @include bg-light-at-dark(!important); }
.unl-bg-dark-gray { @include bg-dark(!important); }
.unl-bg-darker-gray { @include bg-darker(!important); }
.unl-bg-darkest-gray { @include bg-darkest(!important); }


// Cerulean
.unl-bg-cerulean { @include bg-cerulean(!important); }


// Green
.unl-bg-green { @include bg-green(!important); }
.unl-bg-light-green { @include bg-light-green(!important); }
.unl-bg-light-green\\@dark { @include bg-light-green-at-dark(!important); }


// Blue
.unl-bg-blue { @include bg-blue(!important); }
.unl-bg-light-blue { @include bg-light-blue(!important); }
.unl-bg-light-blue\\@dark { @include bg-light-blue-at-dark(!important); }


// Purple
.unl-bg-purple { @include bg-purple(!important); }
.unl-bg-light-purple { @include bg-light-purple(!important); }
.unl-bg-light-purple\\@dark { @include bg-light-purple-at-dark(!important); }


// Yellow
.unl-bg-yellow { @include bg-yellow(!important); }
", "wdn/templates_5.3/scss/utilities/_utilities.background-colors.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/utilities/_utilities.background-colors.scss");
    }
}
