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

/* wdn/templates_5.3/examples/hero.html */
class __TwigTemplate_bcbde2fd58dc823b6bc857b3e8d21995 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/hero.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/hero.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Hero Content Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"wdn-band wdn-hero\">
        <div class=\"wdn-hero-text-container\">
          <div class=\"wdn-hero-text\">
            <h2 class=\"wdn-hero-heading\"><span class=\"wdn-hero-initial-line\">New Hero for Framework</span> <span class=\"wdn-hero-impact-line\">New WDN Hero</span></h2>
            <a href=\"http://news.unl.edu/newsrooms/unltoday/\" class=\"wdn-button wdn-button-outline\">Learn More</a>
            <a href=\"http://admissions.unl.edu/why-unl.aspx\" class=\"wdn-button wdn-button-outline\">Explore Admissions</a>
          </div>
        </div>
        <div class=\"wdn-hero-video\">
          <video autoplay=\"\" loop=\"\" poster=\"samplecontent/2015-first-fb-game-wooooo.jpg\">
            <source src=\"samplecontent/2015-first-fb-game-fingers-crossed.mp4\">
          </video>
        </div>
        <div class=\"wdn-hero-picture\">
          <img src=\"samplecontent/2015-first-fb-game-wooooo.jpg\" alt=\"Students cheer at the football game\">
        </div>
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
        return "wdn/templates_5.3/examples/hero.html";
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
    <title>Hero Content Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"wdn-band wdn-hero\">
        <div class=\"wdn-hero-text-container\">
          <div class=\"wdn-hero-text\">
            <h2 class=\"wdn-hero-heading\"><span class=\"wdn-hero-initial-line\">New Hero for Framework</span> <span class=\"wdn-hero-impact-line\">New WDN Hero</span></h2>
            <a href=\"http://news.unl.edu/newsrooms/unltoday/\" class=\"wdn-button wdn-button-outline\">Learn More</a>
            <a href=\"http://admissions.unl.edu/why-unl.aspx\" class=\"wdn-button wdn-button-outline\">Explore Admissions</a>
          </div>
        </div>
        <div class=\"wdn-hero-video\">
          <video autoplay=\"\" loop=\"\" poster=\"samplecontent/2015-first-fb-game-wooooo.jpg\">
            <source src=\"samplecontent/2015-first-fb-game-fingers-crossed.mp4\">
          </video>
        </div>
        <div class=\"wdn-hero-picture\">
          <img src=\"samplecontent/2015-first-fb-game-wooooo.jpg\" alt=\"Students cheer at the football game\">
        </div>
      </div>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/hero.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/hero.html");
    }
}
