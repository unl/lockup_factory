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

/* wdn/templates_5.3/examples/randomizer.html */
class __TwigTemplate_1518a4fc7eb18317fbaa70453a085799 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/randomizer.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/randomizer.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Randomizer Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"wdn_randomizer wdn-fouc-fix\">
        <div>Content 1. Refresh to randomize</div>
        <div>Content 2, Refresh to randomize</div>
        <div>Content 3, Refresh to randomize</div>
        <div>Content 4, Refresh to randomize</div>
      </div>
      <script>
        WDN.initializePlugin('randomizer');
      </script>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/randomizer.html";
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
    <title>Randomizer Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"wdn_randomizer wdn-fouc-fix\">
        <div>Content 1. Refresh to randomize</div>
        <div>Content 2, Refresh to randomize</div>
        <div>Content 3, Refresh to randomize</div>
        <div>Content 4, Refresh to randomize</div>
      </div>
      <script>
        WDN.initializePlugin('randomizer');
      </script>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/randomizer.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/randomizer.html");
    }
}
