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

/* wdn/templates_5.3/examples/promo_image.html */
class __TwigTemplate_14b26d47a5c7c63562db5ec64f8b7cdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/promo_image.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/promo_image.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Promo Image Example (text over image)</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"wdn-band wdn-promo-band\">
        <img class=\"wdn-stretch\" src=\"samplecontent/stadium.jpg\" alt=\"Memorial Stadium\" />
        <div class=\"wdn-promo-container\">
          <div class=\"wdn-promo-content\">
            <span class=\"wdn-promo-text\">This is a promo image with text</span>
            <a class=\"wdn-button wdn-button-brand\">Call to Action</a>
          </div>
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
        return "wdn/templates_5.3/examples/promo_image.html";
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
    <title>Promo Image Example (text over image)</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"wdn-band wdn-promo-band\">
        <img class=\"wdn-stretch\" src=\"samplecontent/stadium.jpg\" alt=\"Memorial Stadium\" />
        <div class=\"wdn-promo-container\">
          <div class=\"wdn-promo-content\">
            <span class=\"wdn-promo-text\">This is a promo image with text</span>
            <a class=\"wdn-button wdn-button-brand\">Call to Action</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/promo_image.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/promo_image.html");
    }
}
