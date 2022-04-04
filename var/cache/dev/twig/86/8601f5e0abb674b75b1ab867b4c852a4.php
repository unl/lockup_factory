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

/* wdn/templates_5.3/scss/elements/_elements.progress.scss */
class __TwigTemplate_807b9555b3fbedfb405cba88cffde878 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/elements/_elements.progress.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/elements/_elements.progress.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / ELEMENTS / PROGRESS
//////////////////////////////


// Styles for a determinate progress bar (one with a known value)
.unl progress[value] {
  appearance: none; // Reset default appearance.
  border: none; // Get rid of default border in Firefox.
  max-width: 100%;
  width: 100%;
}


// Progress bar (background/container) and value -- WebKit only
.unl progress[value]::-webkit-progress-bar,
.unl progress[value]::-webkit-progress-value {
  border-radius: \$pill;
}


// Progress bar (background/container) -- WebKit only
.unl progress[value]::-webkit-progress-bar {
  background-color: var(--bg-light-gray);
}


// Progress value -- WebKit
.unl progress[value]::-webkit-progress-value {
  background-color: \$blue;
}


// Progress value -- Firefox
.unl progress[value]::-moz-progress-bar {
  background-color: \$blue;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/elements/_elements.progress.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / ELEMENTS / PROGRESS
//////////////////////////////


// Styles for a determinate progress bar (one with a known value)
.unl progress[value] {
  appearance: none; // Reset default appearance.
  border: none; // Get rid of default border in Firefox.
  max-width: 100%;
  width: 100%;
}


// Progress bar (background/container) and value -- WebKit only
.unl progress[value]::-webkit-progress-bar,
.unl progress[value]::-webkit-progress-value {
  border-radius: \$pill;
}


// Progress bar (background/container) -- WebKit only
.unl progress[value]::-webkit-progress-bar {
  background-color: var(--bg-light-gray);
}


// Progress value -- WebKit
.unl progress[value]::-webkit-progress-value {
  background-color: \$blue;
}


// Progress value -- Firefox
.unl progress[value]::-moz-progress-bar {
  background-color: \$blue;
}
", "wdn/templates_5.3/scss/elements/_elements.progress.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/elements/_elements.progress.scss");
    }
}
