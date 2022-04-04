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

/* wdn/templates_5.3/scss/utilities/_utilities.colors.scss */
class __TwigTemplate_11f93bb209fa77e0ef34a5d64ce3bde3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.colors.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.colors.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / UTILITIES / COLORS
/////////////////////////////


// Scarlet
.unl-scarlet,
a.unl-scarlet,
a.unl-scarlet:link {
  @include scarlet(!important);
}

a.unl-scarlet:visited { @include scarlet-visited(!important); }
a.unl-scarlet:hover { @include scarlet-hover(!important); }
a.unl-scarlet:active { @include scarlet-active(!important); }


// Cream
.unl-cream,
a.unl-cream,
a.unl-cream:link {
  @include cream(!important);
}

a.unl-cream:visited { @include cream-visited(!important); }
a.unl-cream:hover { @include cream-hover(!important); }
a.unl-cream:active { @include cream-active(!important); }


// Gray
.unl-lightest-gray { @include lightest-gray(!important); }
.unl-lighter-gray { @include lighter-gray(!important); }
.unl-light-gray { @include light-gray(!important); }
.unl-gray { @include gray(!important); }
.unl-dark-gray { @include dark-gray(!important); }
.unl-dark-gray\\@dark { @include dark-gray-at-dark(!important); }
.unl-darker-gray { @include darker-gray(!important); }
.unl-darker-gray\\@dark { @include darker-gray-at-dark(!important); }
.unl-darkest-gray { @include darkest-gray(!important); }
.unl-darkest-gray\\@dark { @include darkest-gray-at-dark(!important); }


// Cerulean
.unl-cerulean { @include cerulean(!important); }


// Green
.unl-green { @include green(!important); }
.unl-green\\@dark { @include green-at-dark(!important); }
.unl-light-green { @include light-green(!important); }


// Blue
.unl-blue { @include blue(!important); }
.unl-blue\\@dark { @include blue-at-dark(!important); }
.unl-light-blue { @include light-blue(!important); }


// Purple
.unl-purple { @include purple(!important); }
.unl-purple\\@dark { @include purple-at-dark(!important); }
.unl-light-purple { @include light-purple(!important); }


// Yellow
.unl-yellow { @include yellow(!important); }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/utilities/_utilities.colors.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / UTILITIES / COLORS
/////////////////////////////


// Scarlet
.unl-scarlet,
a.unl-scarlet,
a.unl-scarlet:link {
  @include scarlet(!important);
}

a.unl-scarlet:visited { @include scarlet-visited(!important); }
a.unl-scarlet:hover { @include scarlet-hover(!important); }
a.unl-scarlet:active { @include scarlet-active(!important); }


// Cream
.unl-cream,
a.unl-cream,
a.unl-cream:link {
  @include cream(!important);
}

a.unl-cream:visited { @include cream-visited(!important); }
a.unl-cream:hover { @include cream-hover(!important); }
a.unl-cream:active { @include cream-active(!important); }


// Gray
.unl-lightest-gray { @include lightest-gray(!important); }
.unl-lighter-gray { @include lighter-gray(!important); }
.unl-light-gray { @include light-gray(!important); }
.unl-gray { @include gray(!important); }
.unl-dark-gray { @include dark-gray(!important); }
.unl-dark-gray\\@dark { @include dark-gray-at-dark(!important); }
.unl-darker-gray { @include darker-gray(!important); }
.unl-darker-gray\\@dark { @include darker-gray-at-dark(!important); }
.unl-darkest-gray { @include darkest-gray(!important); }
.unl-darkest-gray\\@dark { @include darkest-gray-at-dark(!important); }


// Cerulean
.unl-cerulean { @include cerulean(!important); }


// Green
.unl-green { @include green(!important); }
.unl-green\\@dark { @include green-at-dark(!important); }
.unl-light-green { @include light-green(!important); }


// Blue
.unl-blue { @include blue(!important); }
.unl-blue\\@dark { @include blue-at-dark(!important); }
.unl-light-blue { @include light-blue(!important); }


// Purple
.unl-purple { @include purple(!important); }
.unl-purple\\@dark { @include purple-at-dark(!important); }
.unl-light-purple { @include light-purple(!important); }


// Yellow
.unl-yellow { @include yellow(!important); }
", "wdn/templates_5.3/scss/utilities/_utilities.colors.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/utilities/_utilities.colors.scss");
    }
}
