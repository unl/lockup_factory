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

/* wdn/templates_5.3/scss/components/_components.cards.scss */
class __TwigTemplate_20b4c226fc6de27d6da58c31706d9820 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.cards.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.cards.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / COMPONENTS / CARDS
/////////////////////////////


// Card-as-link
.dcf-js .unl .dcf-card-as-link a:focus {
  text-decoration: underline;
}


.dcf-js .unl .dcf-card-as-link:focus-within {
  // Add browser's native focus styles when card is focused
  outline: 5px auto Highlight;
  outline: 5px auto -webkit-focus-ring-color;
}


.dcf-js .unl .dcf-card-as-link:focus-within a.dcf-card-link:focus {
  // Remove focus ring from primary link when card is focused
  outline: 3px solid transparent;
  text-decoration: none;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.cards.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / COMPONENTS / CARDS
/////////////////////////////


// Card-as-link
.dcf-js .unl .dcf-card-as-link a:focus {
  text-decoration: underline;
}


.dcf-js .unl .dcf-card-as-link:focus-within {
  // Add browser's native focus styles when card is focused
  outline: 5px auto Highlight;
  outline: 5px auto -webkit-focus-ring-color;
}


.dcf-js .unl .dcf-card-as-link:focus-within a.dcf-card-link:focus {
  // Remove focus ring from primary link when card is focused
  outline: 3px solid transparent;
  text-decoration: none;
}
", "wdn/templates_5.3/scss/components/_components.cards.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.cards.scss");
    }
}
