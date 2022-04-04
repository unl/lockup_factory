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

/* wdn/templates_5.3/scss/components/_components.heroes.scss */
class __TwigTemplate_734ea13f2fb84ada174e5f4c21490166 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.heroes.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / COMPONENTS / HEROES
//////////////////////////////


// Hero Sizes
.unl .dcf-hero-sm {
  height: #{ms(22)}vh;
  max-height: #{ms(18)}em;
  min-height: #{ms(16)}em;
}


.unl .dcf-hero-md {
  height: #{ms(26)}vh;
  max-height: #{ms(22)}em;
  min-height: #{ms(20)}em;
}


.unl .dcf-hero-lg {
  height: #{ms(28)}vh;
  max-height: #{ms(24)}em;
  min-height: #{ms(22)}em;
}


// Page Title
.unl .dcf-page-title h1 {
  margin-top: 0;
}


.unl .dcf-page-title h1,
.unl .dcf-page-title h1 + .dcf-subhead {
  margin-bottom: 0; // Margin-bottom creates an unwanted vertical gap that shows the hero background-color.
}


.unl .dcf-page-title h1 + .dcf-subhead {
  margin-top: 1rem;
}


// Photo Credit
.unl .dcf-hero-photo-credit {
  margin: 0;
  right: \$length-em-1;
  text-shadow: 1px 1px \$length-em-4 fade-out(\$darkest-gray, .5);
  top: \$length-em-6;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.heroes.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / COMPONENTS / HEROES
//////////////////////////////


// Hero Sizes
.unl .dcf-hero-sm {
  height: #{ms(22)}vh;
  max-height: #{ms(18)}em;
  min-height: #{ms(16)}em;
}


.unl .dcf-hero-md {
  height: #{ms(26)}vh;
  max-height: #{ms(22)}em;
  min-height: #{ms(20)}em;
}


.unl .dcf-hero-lg {
  height: #{ms(28)}vh;
  max-height: #{ms(24)}em;
  min-height: #{ms(22)}em;
}


// Page Title
.unl .dcf-page-title h1 {
  margin-top: 0;
}


.unl .dcf-page-title h1,
.unl .dcf-page-title h1 + .dcf-subhead {
  margin-bottom: 0; // Margin-bottom creates an unwanted vertical gap that shows the hero background-color.
}


.unl .dcf-page-title h1 + .dcf-subhead {
  margin-top: 1rem;
}


// Photo Credit
.unl .dcf-hero-photo-credit {
  margin: 0;
  right: \$length-em-1;
  text-shadow: 1px 1px \$length-em-4 fade-out(\$darkest-gray, .5);
  top: \$length-em-6;
}
", "wdn/templates_5.3/scss/components/_components.heroes.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.heroes.scss");
    }
}
