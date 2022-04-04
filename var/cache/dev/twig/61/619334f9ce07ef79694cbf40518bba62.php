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

/* wdn/templates_5.3/examples/infographics.html */
class __TwigTemplate_755fb7643c371962bf13efecf5f95780 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/infographics.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/infographics.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Image Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <section class=\"dcf-grid-halves dcf-grid-thirds@sm dcf-grid-fourths@md dcf-col-gap-vw dcf-row-gap-4\">
        <div class=\"wdn-infographic wdn-infographic-rate\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">82%</span>
          <span class=\"stat-helper\">students employed within 1 year of graduation</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-globe\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">33,953</span>
          <span class=\"stat-helper\">alumni global network</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-internships\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">4,063</span>
          <span class=\"stat-helper\">available internships and counting</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-people\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">34</span>
          <span class=\"stat-helper\">average class size</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-world\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">World-wide</span>
          <span class=\"stat-helper\">attention</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-star\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">Star</span>
          <span class=\"stat-helper\">expected graduation rate</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-ratio\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">7:1</span>
          <span class=\"stat-helper\">student/faculty ratio</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-countries\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">122</span>
          <span class=\"stat-helper\">countries represented by our alums</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-international\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">International</span>
          <span class=\"stat-helper\">students</span>
        </div>
      </section>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/infographics.html";
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
    <title>Image Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <section class=\"dcf-grid-halves dcf-grid-thirds@sm dcf-grid-fourths@md dcf-col-gap-vw dcf-row-gap-4\">
        <div class=\"wdn-infographic wdn-infographic-rate\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">82%</span>
          <span class=\"stat-helper\">students employed within 1 year of graduation</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-globe\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">33,953</span>
          <span class=\"stat-helper\">alumni global network</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-internships\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">4,063</span>
          <span class=\"stat-helper\">available internships and counting</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-people\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">34</span>
          <span class=\"stat-helper\">average class size</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-world\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">World-wide</span>
          <span class=\"stat-helper\">attention</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-star\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">Star</span>
          <span class=\"stat-helper\">expected graduation rate</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-ratio\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">7:1</span>
          <span class=\"stat-helper\">student/faculty ratio</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-countries\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">122</span>
          <span class=\"stat-helper\">countries represented by our alums</span>
        </div>
        <div class=\"wdn-infographic wdn-infographic-international\">
          <div class=\"wdn-info-icon\"></div>
          <span class=\"stat\">International</span>
          <span class=\"stat-helper\">students</span>
        </div>
      </section>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/infographics.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/infographics.html");
    }
}
