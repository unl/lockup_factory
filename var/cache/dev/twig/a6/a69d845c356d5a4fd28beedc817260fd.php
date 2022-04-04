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

/* wdn/templates_5.3/examples/buttons.html */
class __TwigTemplate_e5d01a1999e960143eb8aefa2a2db59e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/buttons.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/buttons.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Buttons Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <h2 class=\"dcf-mt-6\">Links As Buttons</h2>
      <a href=\"#\" class=\"dcf-btn dcf-btn-primary\">Primary Button</a>
      <a href=\"#\" class=\"dcf-btn dcf-btn-secondary\">Secondary Button</a>
      <a href=\"#\" class=\"dcf-btn dcf-btn-tertiary\">Tertiary Button</a>

      <h2 class=\"dcf-mt-6\">Buttons As Buttons</h2>
      <button class=\"dcf-btn dcf-btn-primary\" type=\"button\">Primary Button</button>
      <button class=\"dcf-btn dcf-btn-secondary\" type=\"button\">Secondary Button</button>
      <button class=\"dcf-btn dcf-btn-tertiary\" type=\"button\">Tertiary Button</button>

      <h2 class=\"dcf-mt-6\">Disabled Buttons</h2>
      <button class=\"dcf-btn dcf-btn-primary\" type=\"button\" disabled>Disabled Primary Button</button>
      <button class=\"dcf-btn dcf-btn-secondary\" type=\"button\" disabled>Disabled Secondary Button</button>
      <button class=\"dcf-btn dcf-btn-tertiary\" type=\"button\" disabled>Disabled Tertiary Button</button>

      <div class=\"dcf-bleed dcf-wrapper dcf-mt-6 dcf-pt-6 dcf-pb-6 unl-bg-darker-gray\">
        <h2 class=\"unl-cream\">Inverse Buttons</h2>
        <button class=\"dcf-btn dcf-btn-inverse-primary\" type=\"button\">Primary Button</button>
        <button class=\"dcf-btn dcf-btn-inverse-secondary\" type=\"button\">Secondary Button</button>
        <button class=\"dcf-btn dcf-btn-inverse-tertiary\" type=\"button\">Tertiary Button</button>
      </div>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/buttons.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Buttons Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <h2 class=\"dcf-mt-6\">Links As Buttons</h2>
      <a href=\"#\" class=\"dcf-btn dcf-btn-primary\">Primary Button</a>
      <a href=\"#\" class=\"dcf-btn dcf-btn-secondary\">Secondary Button</a>
      <a href=\"#\" class=\"dcf-btn dcf-btn-tertiary\">Tertiary Button</a>

      <h2 class=\"dcf-mt-6\">Buttons As Buttons</h2>
      <button class=\"dcf-btn dcf-btn-primary\" type=\"button\">Primary Button</button>
      <button class=\"dcf-btn dcf-btn-secondary\" type=\"button\">Secondary Button</button>
      <button class=\"dcf-btn dcf-btn-tertiary\" type=\"button\">Tertiary Button</button>

      <h2 class=\"dcf-mt-6\">Disabled Buttons</h2>
      <button class=\"dcf-btn dcf-btn-primary\" type=\"button\" disabled>Disabled Primary Button</button>
      <button class=\"dcf-btn dcf-btn-secondary\" type=\"button\" disabled>Disabled Secondary Button</button>
      <button class=\"dcf-btn dcf-btn-tertiary\" type=\"button\" disabled>Disabled Tertiary Button</button>

      <div class=\"dcf-bleed dcf-wrapper dcf-mt-6 dcf-pt-6 dcf-pb-6 unl-bg-darker-gray\">
        <h2 class=\"unl-cream\">Inverse Buttons</h2>
        <button class=\"dcf-btn dcf-btn-inverse-primary\" type=\"button\">Primary Button</button>
        <button class=\"dcf-btn dcf-btn-inverse-secondary\" type=\"button\">Secondary Button</button>
        <button class=\"dcf-btn dcf-btn-inverse-tertiary\" type=\"button\">Tertiary Button</button>
      </div>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/buttons.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/buttons.html");
    }
}
