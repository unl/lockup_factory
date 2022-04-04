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

/* wdn/templates_5.3/examples/notice.html */
class __TwigTemplate_250c09255940187d4b148ec61ba31fc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/notice.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/notice.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Notice Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"dcf-notice\" hidden>
        <h2>This is my Title!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a>.</div>
      </div>
      <div class=\"dcf-notice dcf-notice-success\" hidden id=\"custom-notice-id\">
        <h2>Great Success!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a></div>
      </div>
      <div class=\"dcf-notice dcf-notice-warning\" hidden data-no-close-button>
        <h2>Denial Notice!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a></div>
      </div>
      <div class=\"dcf-notice dcf-notice-danger\" hidden>
        <h2>Important Alert!!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a></div>
      </div>
      <div class=\"dcf-notice\" hidden data-overlay=\"dcf-header\">
        <h2>I'm Floating!</h2>
        <div>This notice overlays the header.</div>
      </div>
      <div class=\"dcf-notice dcf-notice-success\" hidden data-overlay=\"dcf-main\">
        <h2>Success!</h2>
        <div>This notice overlays the maincontent.</div>
      </div>
      <div class=\"dcf-notice dcf-notice-info\">
        <h2>Info</h2>
        <div>
          This is additional information for this notice.
          <h2>Another heading</h2>
        </div>
      </div>
      <script>
        WDN.initializePlugin('notice');
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
        return "wdn/templates_5.3/examples/notice.html";
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
    <title>Notice Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"dcf-notice\" hidden>
        <h2>This is my Title!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a>.</div>
      </div>
      <div class=\"dcf-notice dcf-notice-success\" hidden id=\"custom-notice-id\">
        <h2>Great Success!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a></div>
      </div>
      <div class=\"dcf-notice dcf-notice-warning\" hidden data-no-close-button>
        <h2>Denial Notice!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a></div>
      </div>
      <div class=\"dcf-notice dcf-notice-danger\" hidden>
        <h2>Important Alert!!</h2>
        <div>This is my content. <a href=\"#\">This is some link text</a></div>
      </div>
      <div class=\"dcf-notice\" hidden data-overlay=\"dcf-header\">
        <h2>I'm Floating!</h2>
        <div>This notice overlays the header.</div>
      </div>
      <div class=\"dcf-notice dcf-notice-success\" hidden data-overlay=\"dcf-main\">
        <h2>Success!</h2>
        <div>This notice overlays the maincontent.</div>
      </div>
      <div class=\"dcf-notice dcf-notice-info\">
        <h2>Info</h2>
        <div>
          This is additional information for this notice.
          <h2>Another heading</h2>
        </div>
      </div>
      <script>
        WDN.initializePlugin('notice');
      </script>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/notice.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/notice.html");
    }
}
