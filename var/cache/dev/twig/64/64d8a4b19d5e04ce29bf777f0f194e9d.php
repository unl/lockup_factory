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

/* wdn/templates_5.3/scss/components/_components.app.scss */
class __TwigTemplate_65fe6f70297bb17e5198c6b6febf88db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.app.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.app.scss"));

        // line 1
        echo "///////////////////////////
// THEME / COMPONENTS / APP
///////////////////////////


.unl .dcf-app-form {
  max-width: #{ms(26)}em; // Restrict width of search form in wide viewports
}


.unl.app .dcf-app-controls button {
  background-color: transparent;
  border: 0;
}


@include mq(md, max, width) {

  .unl.app .dcf-app-controls ul:not(:last-child) {
    flex-direction: column;
  }

}


@include mq(md, min, width) {

  .unl.app .dcf-app-controls {
    display: flex;
    justify-content: space-between;
  }

  .unl.app .dcf-app-controls ul:not(:last-child) {
    border-left: 1px solid \$border-color-app-control;
    display: flex;
  }

  .unl.app .dcf-app-controls li {
    border-right: 1px solid \$border-color-app-control;
  }

}

// TODO: add button focus/hover states
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.app.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////
// THEME / COMPONENTS / APP
///////////////////////////


.unl .dcf-app-form {
  max-width: #{ms(26)}em; // Restrict width of search form in wide viewports
}


.unl.app .dcf-app-controls button {
  background-color: transparent;
  border: 0;
}


@include mq(md, max, width) {

  .unl.app .dcf-app-controls ul:not(:last-child) {
    flex-direction: column;
  }

}


@include mq(md, min, width) {

  .unl.app .dcf-app-controls {
    display: flex;
    justify-content: space-between;
  }

  .unl.app .dcf-app-controls ul:not(:last-child) {
    border-left: 1px solid \$border-color-app-control;
    display: flex;
  }

  .unl.app .dcf-app-controls li {
    border-right: 1px solid \$border-color-app-control;
  }

}

// TODO: add button focus/hover states
", "wdn/templates_5.3/scss/components/_components.app.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.app.scss");
    }
}
