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

/* wdn/templates_5.3/examples/events.html */
class __TwigTemplate_91f912b8a5760e6b9d5716b2b66b08b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/events.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/events.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Events Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <script>
        WDN.setPluginParam('events', 'href', 'https://events.unl.edu/');
        WDN.setPluginParam('events', 'title', 'UNL');
      </script>
      <h2 class=\"sec_main\"><abbr title=\"University of Nebraska&ndash;Lincoln\">UNL</abbr> Calendar</h2>
      <div id=\"monthwidget\">
        <script>
          WDN.initializePlugin('monthwidget');
        </script>
      </div>
      <hr />
      <div id=\"wdn_calendarDisplay\"></div>
      <script>WDN.initializePlugin('events', {limit:5});</script>
      <hr />
      <div id=\"events-band\"></div>
      <script>WDN.initializePlugin('events-band',{limit:6, rooms: true});</script>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/events.html";
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
    <title>Events Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <script>
        WDN.setPluginParam('events', 'href', 'https://events.unl.edu/');
        WDN.setPluginParam('events', 'title', 'UNL');
      </script>
      <h2 class=\"sec_main\"><abbr title=\"University of Nebraska&ndash;Lincoln\">UNL</abbr> Calendar</h2>
      <div id=\"monthwidget\">
        <script>
          WDN.initializePlugin('monthwidget');
        </script>
      </div>
      <hr />
      <div id=\"wdn_calendarDisplay\"></div>
      <script>WDN.initializePlugin('events', {limit:5});</script>
      <hr />
      <div id=\"events-band\"></div>
      <script>WDN.initializePlugin('events-band',{limit:6, rooms: true});</script>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/events.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/events.html");
    }
}
