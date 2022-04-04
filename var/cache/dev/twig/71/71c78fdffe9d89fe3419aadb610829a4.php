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

/* wdn/templates_5.3/scss/mixins/_mixins.background-colors.scss */
class __TwigTemplate_a6b78d5757f1053122dc3003284e710c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.background-colors.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.background-colors.scss"));

        // line 1
        echo "/////////////////////////////////////
// THEME / MIXINS / BACKGROUND COLORS
/////////////////////////////////////


// Scarlet
@mixin bg-scarlet(\$imp:null) { background-color: \$bg-color-brand-alpha \$imp; }


// Cream
@mixin bg-cream(\$imp:null) { background-color: \$bg-color-body \$imp; }
@mixin bg-cream-at-dark(\$imp:null) { background-color: \$cream \$imp; }


// Gray
@mixin bg-lightest(\$imp:null) { background-color: \$bg-color-gray-lightest \$imp; }
@mixin bg-lightest-at-dark(\$imp:null) { background-color: \$lightest-gray \$imp; }
@mixin bg-lighter(\$imp:null) { background-color: \$bg-color-gray-lighter \$imp; }
@mixin bg-lighter-at-dark(\$imp:null) { background-color: \$lighter-gray \$imp; }
@mixin bg-light(\$imp:null) { background-color: \$bg-color-gray-light \$imp; }
@mixin bg-light-at-dark(\$imp:null) { background-color: \$light-gray \$imp; }
@mixin bg-dark(\$imp:null) { background-color: \$dark-gray \$imp; }
@mixin bg-darker(\$imp:null) { background-color: \$darker-gray \$imp; }
@mixin bg-darkest(\$imp:null) { background-color: \$darkest-gray \$imp; }


// Cerulean
@mixin bg-cerulean(\$imp:null) { background-color: \$cerulean \$imp; }


// Green
@mixin bg-green(\$imp:null) { background-color: \$green \$imp; }
@mixin bg-light-green(\$imp:null) { background-color: \$bg-color-brand-light-zeta \$imp; }
@mixin bg-light-green-at-dark(\$imp:null) { background-color: \$light-green \$imp; }


// Blue
@mixin bg-blue(\$imp:null) { background-color: \$blue \$imp; }
@mixin bg-light-blue(\$imp:null) { background-color: \$bg-color-brand-light-eta \$imp; }
@mixin bg-light-blue-at-dark(\$imp:null) { background-color: \$light-blue \$imp; }


// Purple
@mixin bg-purple(\$imp:null) { background-color: \$purple \$imp; }
@mixin bg-light-purple(\$imp:null) { background-color: \$bg-color-brand-light-theta \$imp; }
@mixin bg-light-purple-at-dark(\$imp:null) { background-color: \$light-purple \$imp; }


// Yellow
@mixin bg-yellow(\$imp:null) { background-color: \$yellow \$imp; }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/mixins/_mixins.background-colors.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////////
// THEME / MIXINS / BACKGROUND COLORS
/////////////////////////////////////


// Scarlet
@mixin bg-scarlet(\$imp:null) { background-color: \$bg-color-brand-alpha \$imp; }


// Cream
@mixin bg-cream(\$imp:null) { background-color: \$bg-color-body \$imp; }
@mixin bg-cream-at-dark(\$imp:null) { background-color: \$cream \$imp; }


// Gray
@mixin bg-lightest(\$imp:null) { background-color: \$bg-color-gray-lightest \$imp; }
@mixin bg-lightest-at-dark(\$imp:null) { background-color: \$lightest-gray \$imp; }
@mixin bg-lighter(\$imp:null) { background-color: \$bg-color-gray-lighter \$imp; }
@mixin bg-lighter-at-dark(\$imp:null) { background-color: \$lighter-gray \$imp; }
@mixin bg-light(\$imp:null) { background-color: \$bg-color-gray-light \$imp; }
@mixin bg-light-at-dark(\$imp:null) { background-color: \$light-gray \$imp; }
@mixin bg-dark(\$imp:null) { background-color: \$dark-gray \$imp; }
@mixin bg-darker(\$imp:null) { background-color: \$darker-gray \$imp; }
@mixin bg-darkest(\$imp:null) { background-color: \$darkest-gray \$imp; }


// Cerulean
@mixin bg-cerulean(\$imp:null) { background-color: \$cerulean \$imp; }


// Green
@mixin bg-green(\$imp:null) { background-color: \$green \$imp; }
@mixin bg-light-green(\$imp:null) { background-color: \$bg-color-brand-light-zeta \$imp; }
@mixin bg-light-green-at-dark(\$imp:null) { background-color: \$light-green \$imp; }


// Blue
@mixin bg-blue(\$imp:null) { background-color: \$blue \$imp; }
@mixin bg-light-blue(\$imp:null) { background-color: \$bg-color-brand-light-eta \$imp; }
@mixin bg-light-blue-at-dark(\$imp:null) { background-color: \$light-blue \$imp; }


// Purple
@mixin bg-purple(\$imp:null) { background-color: \$purple \$imp; }
@mixin bg-light-purple(\$imp:null) { background-color: \$bg-color-brand-light-theta \$imp; }
@mixin bg-light-purple-at-dark(\$imp:null) { background-color: \$light-purple \$imp; }


// Yellow
@mixin bg-yellow(\$imp:null) { background-color: \$yellow \$imp; }
", "wdn/templates_5.3/scss/mixins/_mixins.background-colors.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/mixins/_mixins.background-colors.scss");
    }
}
