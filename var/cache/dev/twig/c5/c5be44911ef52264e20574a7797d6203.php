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

/* wdn/templates_5.3/examples/pagination.html */
class __TwigTemplate_b850ceffbabff2788e06029e452d595a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/pagination.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/pagination.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Pagination Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <nav class=\"dcf-pagination\">
        <ol class=\"dcf-list-bare dcf-list-inline\">
          <li><a class=\"dcf-pagination-first\" href=\"#\">First</a></li>
          <li><a class=\"dcf-pagination-prev\" href=\"#\">Prev</a></li>
          <li><a href=\"#\">1</a></li>
          <li><a href=\"#\">2</a></li>
          <li><span class=\"dcf-pagination-selected\">3</span></li>
          <li><span class=\"dcf-pagination-ellipsis\">…</span></li>
          <li><a href=\"#\">17</a></li>
          <li><a href=\"#\">18</a></li>
          <li><a href=\"#\">19</a></li>
          <li><a class=\"dcf-pagination-next\" href=\"#\">Next</a></li>
          <li><a class=\"dcf-pagination-last\" href=\"#\">Last</a></li>
        </ol>
      </nav>
      <script>
          WDN.initializePlugin('pagination');
      </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/pagination.html";
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
    <title>Pagination Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <nav class=\"dcf-pagination\">
        <ol class=\"dcf-list-bare dcf-list-inline\">
          <li><a class=\"dcf-pagination-first\" href=\"#\">First</a></li>
          <li><a class=\"dcf-pagination-prev\" href=\"#\">Prev</a></li>
          <li><a href=\"#\">1</a></li>
          <li><a href=\"#\">2</a></li>
          <li><span class=\"dcf-pagination-selected\">3</span></li>
          <li><span class=\"dcf-pagination-ellipsis\">…</span></li>
          <li><a href=\"#\">17</a></li>
          <li><a href=\"#\">18</a></li>
          <li><a href=\"#\">19</a></li>
          <li><a class=\"dcf-pagination-next\" href=\"#\">Next</a></li>
          <li><a class=\"dcf-pagination-last\" href=\"#\">Last</a></li>
        </ol>
      </nav>
      <script>
          WDN.initializePlugin('pagination');
      </script>
  </body>
</html>
", "wdn/templates_5.3/examples/pagination.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/pagination.html");
    }
}
