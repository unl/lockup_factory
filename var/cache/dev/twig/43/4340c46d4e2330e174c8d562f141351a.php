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

/* wdn/templates_5.3/scss/mixins/_mixins.colors.scss */
class __TwigTemplate_a5474d211f8959fc799e69aa05ed5416 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.colors.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.colors.scss"));

        // line 1
        echo "//////////////////////////
// THEME / MIXINS / COLORS
//////////////////////////


// Scarlet
@mixin scarlet(\$imp:null) { color: \$color-brand-alpha \$imp; }
// TODO: determine state styles
@mixin scarlet-visited(\$imp:null) { color: \$scarlet \$imp; }
@mixin scarlet-hover(\$imp:null) { color: \$scarlet \$imp; }
@mixin scarlet-active(\$imp:null) { color: \$scarlet \$imp; }


// Cream
@mixin cream(\$imp:null) { color: \$cream \$imp; }
// TODO: determine state styles
@mixin cream-visited(\$imp:null) { color: \$cream \$imp; }
@mixin cream-hover(\$imp:null) { color: \$cream \$imp; }
@mixin cream-active(\$imp:null) { color: \$cream \$imp; }


// Gray
@mixin lightest-gray(\$imp:null) { color: \$lightest-gray \$imp; }
@mixin lighter-gray(\$imp:null) { color: \$lighter-gray \$imp; }
@mixin light-gray(\$imp:null) { color: \$light-gray \$imp; }
@mixin gray(\$imp:null) { color: \$gray \$imp; }
@mixin dark-gray(\$imp:null) { color: \$color-gray-dark \$imp; }
@mixin dark-gray-at-dark(\$imp:null) { color: \$dark-gray \$imp; }
@mixin darker-gray(\$imp:null) { color: \$color-gray-darker \$imp; }
@mixin darker-gray-at-dark(\$imp:null) { color: \$darker-gray \$imp; }
@mixin darkest-gray(\$imp:null) { color: \$color-gray-darkest \$imp; }
@mixin darkest-gray-at-dark(\$imp:null) { color: \$darkest-gray \$imp; }


// Cerulean
@mixin cerulean(\$imp:null) { color: \$cerulean \$imp; }


// Green
@mixin green(\$imp:null) { color: \$color-brand-zeta \$imp; }
@mixin green-at-dark(\$imp:null) { color: \$green \$imp; }
@mixin light-green(\$imp:null) { color: \$light-green \$imp; }


// Blue
@mixin blue(\$imp:null) { color: \$color-brand-eta \$imp; }
@mixin blue-at-dark(\$imp:null) { color: \$blue \$imp; }
@mixin light-blue(\$imp:null) { color: \$light-blue \$imp; }


// Purple
@mixin purple(\$imp:null) { color: \$color-brand-theta \$imp; }
@mixin purple-at-dark(\$imp:null) { color: \$purple \$imp; }
@mixin light-purple(\$imp:null) { color: \$light-purple \$imp; }


// Yellow
@mixin yellow(\$imp:null) { color: \$yellow \$imp; }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/mixins/_mixins.colors.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////
// THEME / MIXINS / COLORS
//////////////////////////


// Scarlet
@mixin scarlet(\$imp:null) { color: \$color-brand-alpha \$imp; }
// TODO: determine state styles
@mixin scarlet-visited(\$imp:null) { color: \$scarlet \$imp; }
@mixin scarlet-hover(\$imp:null) { color: \$scarlet \$imp; }
@mixin scarlet-active(\$imp:null) { color: \$scarlet \$imp; }


// Cream
@mixin cream(\$imp:null) { color: \$cream \$imp; }
// TODO: determine state styles
@mixin cream-visited(\$imp:null) { color: \$cream \$imp; }
@mixin cream-hover(\$imp:null) { color: \$cream \$imp; }
@mixin cream-active(\$imp:null) { color: \$cream \$imp; }


// Gray
@mixin lightest-gray(\$imp:null) { color: \$lightest-gray \$imp; }
@mixin lighter-gray(\$imp:null) { color: \$lighter-gray \$imp; }
@mixin light-gray(\$imp:null) { color: \$light-gray \$imp; }
@mixin gray(\$imp:null) { color: \$gray \$imp; }
@mixin dark-gray(\$imp:null) { color: \$color-gray-dark \$imp; }
@mixin dark-gray-at-dark(\$imp:null) { color: \$dark-gray \$imp; }
@mixin darker-gray(\$imp:null) { color: \$color-gray-darker \$imp; }
@mixin darker-gray-at-dark(\$imp:null) { color: \$darker-gray \$imp; }
@mixin darkest-gray(\$imp:null) { color: \$color-gray-darkest \$imp; }
@mixin darkest-gray-at-dark(\$imp:null) { color: \$darkest-gray \$imp; }


// Cerulean
@mixin cerulean(\$imp:null) { color: \$cerulean \$imp; }


// Green
@mixin green(\$imp:null) { color: \$color-brand-zeta \$imp; }
@mixin green-at-dark(\$imp:null) { color: \$green \$imp; }
@mixin light-green(\$imp:null) { color: \$light-green \$imp; }


// Blue
@mixin blue(\$imp:null) { color: \$color-brand-eta \$imp; }
@mixin blue-at-dark(\$imp:null) { color: \$blue \$imp; }
@mixin light-blue(\$imp:null) { color: \$light-blue \$imp; }


// Purple
@mixin purple(\$imp:null) { color: \$color-brand-theta \$imp; }
@mixin purple-at-dark(\$imp:null) { color: \$purple \$imp; }
@mixin light-purple(\$imp:null) { color: \$light-purple \$imp; }


// Yellow
@mixin yellow(\$imp:null) { color: \$yellow \$imp; }
", "wdn/templates_5.3/scss/mixins/_mixins.colors.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/mixins/_mixins.colors.scss");
    }
}
