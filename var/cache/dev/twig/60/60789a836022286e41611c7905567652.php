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

/* wdn/templates_5.3/examples/layouts.html */
class __TwigTemplate_4c72cced2f80ce8cc622aad5569a1fec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/layouts.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/layouts.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Layout Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
<!--
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-full\">
          wdn-col-full
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-half\">
          wdn-col-one-half
        </div>
        <div class=\"wdn-col-one-half\">
          wdn-col-one-half
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-third\">
          wdn-col-one-third
        </div>
        <div class=\"wdn-col-two-thirds\">
          wdn-col-two-thirds
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-fourth\">
          wdn-col-one-fourth
        </div>
        <div class=\"wdn-col-three-fourths\">
          wdn-col-three-fourths
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-fifth\">
          wdn-col-one-fifth
        </div>
        <div class=\"wdn-col-four-fifths\">
          wdn-col-four-fifths
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-sixth\">
          wdn-col-one-sixth
        </div>
        <div class=\"wdn-col-five-sixths\">
          wdn-col-five-sixths
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-three-sevenths\">
          wdn-col-three-sevenths
        </div>
        <div class=\"wdn-col-four-sevenths\">
          wdn-col-four-sevenths
        </div>
      </div>
      <p><a href=\"http://wdn.unl.edu/resources/grid/\">View full documentation</a></p>
-->
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/layouts.html";
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
    <title>Layout Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
<!--
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-full\">
          wdn-col-full
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-half\">
          wdn-col-one-half
        </div>
        <div class=\"wdn-col-one-half\">
          wdn-col-one-half
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-third\">
          wdn-col-one-third
        </div>
        <div class=\"wdn-col-two-thirds\">
          wdn-col-two-thirds
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-fourth\">
          wdn-col-one-fourth
        </div>
        <div class=\"wdn-col-three-fourths\">
          wdn-col-three-fourths
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-fifth\">
          wdn-col-one-fifth
        </div>
        <div class=\"wdn-col-four-fifths\">
          wdn-col-four-fifths
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-one-sixth\">
          wdn-col-one-sixth
        </div>
        <div class=\"wdn-col-five-sixths\">
          wdn-col-five-sixths
        </div>
      </div>
      <div class=\"wdn-grid-set\">
        <div class=\"wdn-col-three-sevenths\">
          wdn-col-three-sevenths
        </div>
        <div class=\"wdn-col-four-sevenths\">
          wdn-col-four-sevenths
        </div>
      </div>
      <p><a href=\"http://wdn.unl.edu/resources/grid/\">View full documentation</a></p>
-->
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/layouts.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/layouts.html");
    }
}
