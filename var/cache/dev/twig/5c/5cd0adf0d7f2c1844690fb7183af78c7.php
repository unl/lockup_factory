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

/* wdn/templates_5.3/scss/objects/_objects.grid.scss */
class __TwigTemplate_1c0612b4a139fd820e41d86b20cd9626 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/objects/_objects.grid.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/objects/_objects.grid.scss"));

        // line 1
        echo "/////////////////////////
// THEME / OBJECTS / GRID
/////////////////////////


@supports (display:grid) {


  .unl-grid-cols {
    grid-template-columns: #{ms(12)}vw #{ms(8)}rem 1rem 1fr 1fr #{ms(12)}vw;
    // 5.62vw 3.16rem 1rem 1fr 1fr 5.62vw
  }


  @include mq(sm) {

    .unl-grid-cols {
      grid-template-columns: #{ms(12)}vw #{ms(8)}rem 1rem 1fr 1fr #{ms(8)}vw #{ms(8)}rem 1rem 1fr 1fr #{ms(12)}vw;
      // 5.62vw 3.16rem 1rem 1fr 1fr 3.16vw 3.16rem 1rem 1fr 1fr 5.62vw
    }

  }

  @include mq(lg) {

    .unl-grid-cols {
      grid-template-columns: #{ms(12)}vw #{ms(8)}rem 1rem 2fr 1fr #{ms(8)}rem 1rem #{ms(8)}vw #{ms(8)}rem 1rem 1fr 2fr #{ms(8)}rem 1rem #{ms(12)}vw;
      // 5.62vw 3.16rem 1rem 2fr 1fr 3.16rem 1rem 3.16vw 3.16rem 1rem 1fr 2fr 3.16rem 1rem 5.62vw
    }

  }


  .unl-offset-grid {
    display: grid;
    grid-column-gap: \$length-em-4;
    grid-template-columns: \$length-em-8 1fr;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/objects/_objects.grid.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////
// THEME / OBJECTS / GRID
/////////////////////////


@supports (display:grid) {


  .unl-grid-cols {
    grid-template-columns: #{ms(12)}vw #{ms(8)}rem 1rem 1fr 1fr #{ms(12)}vw;
    // 5.62vw 3.16rem 1rem 1fr 1fr 5.62vw
  }


  @include mq(sm) {

    .unl-grid-cols {
      grid-template-columns: #{ms(12)}vw #{ms(8)}rem 1rem 1fr 1fr #{ms(8)}vw #{ms(8)}rem 1rem 1fr 1fr #{ms(12)}vw;
      // 5.62vw 3.16rem 1rem 1fr 1fr 3.16vw 3.16rem 1rem 1fr 1fr 5.62vw
    }

  }

  @include mq(lg) {

    .unl-grid-cols {
      grid-template-columns: #{ms(12)}vw #{ms(8)}rem 1rem 2fr 1fr #{ms(8)}rem 1rem #{ms(8)}vw #{ms(8)}rem 1rem 1fr 2fr #{ms(8)}rem 1rem #{ms(12)}vw;
      // 5.62vw 3.16rem 1rem 2fr 1fr 3.16rem 1rem 3.16vw 3.16rem 1rem 1fr 2fr 3.16rem 1rem 5.62vw
    }

  }


  .unl-offset-grid {
    display: grid;
    grid-column-gap: \$length-em-4;
    grid-template-columns: \$length-em-8 1fr;
  }

}
", "wdn/templates_5.3/scss/objects/_objects.grid.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/objects/_objects.grid.scss");
    }
}
