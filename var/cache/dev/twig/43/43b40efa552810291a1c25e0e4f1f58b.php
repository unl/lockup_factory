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

/* wdn/templates_5.3/examples/carousel.html */
class __TwigTemplate_246ffd6850164f326340d6214cbb910c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/carousel.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/carousel.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Carousel Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <script>
        WDN.initializePlugin('carousel');
      </script>
      <div id=\"wdn_Carousel\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <figure>
              <img src=\"samplecontent/carouselCheerleaders.jpg\" alt=\"Photo of cheerleaders\" />
              <figcaption>The Husker Spirit Squad showed their tough side as they posed for photos by spectators Sunday afternoon. 2010 Big Red Road Show at Omaha Qwest Center on February 8, 2010. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Craig Chandler / University Communication</small></figcaption>
            </figure>
          </li>
          <li>
            <figure>
              <img src=\"samplecontent/carouselGraduation.jpg\" alt=\"Graduation photo\" />
              <figcaption>Nina Lorincz of Omaha made her mortar board into a special message for her parents Saturday. December 2009 Undergraduate Commencement in Bob Devaney Sports Center. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Craig Chandler / University Communication</small></figcaption>
            </figure>
          </li>
          <li>
            <figure>
              <img src=\"samplecontent/carouselSnow.jpg\" alt=\"December snowstorm\" />
              <figcaption>A December snowstorm caused the University to close at noon on December 8, 2009. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Greg Nathan / University Communication</small></figcaption>
            </figure>
          </li>
          <li>
            <figure>
              <img src=\"samplecontent/carouselFootball.jpg\" alt=\"Husker Football\" />
              <figcaption>Ndamukong Suh and Larry Asante sandwich Kansas State quarterback Grant Gregory. University of Nebraska&ndash;Lincoln vs. Kansas State Wildcats football. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Craig Chandler / University Communication</small></figcaption>
            </figure>
          </li>
        </ul>
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
        return "wdn/templates_5.3/examples/carousel.html";
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
    <title>Carousel Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <script>
        WDN.initializePlugin('carousel');
      </script>
      <div id=\"wdn_Carousel\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <figure>
              <img src=\"samplecontent/carouselCheerleaders.jpg\" alt=\"Photo of cheerleaders\" />
              <figcaption>The Husker Spirit Squad showed their tough side as they posed for photos by spectators Sunday afternoon. 2010 Big Red Road Show at Omaha Qwest Center on February 8, 2010. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Craig Chandler / University Communication</small></figcaption>
            </figure>
          </li>
          <li>
            <figure>
              <img src=\"samplecontent/carouselGraduation.jpg\" alt=\"Graduation photo\" />
              <figcaption>Nina Lorincz of Omaha made her mortar board into a special message for her parents Saturday. December 2009 Undergraduate Commencement in Bob Devaney Sports Center. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Craig Chandler / University Communication</small></figcaption>
            </figure>
          </li>
          <li>
            <figure>
              <img src=\"samplecontent/carouselSnow.jpg\" alt=\"December snowstorm\" />
              <figcaption>A December snowstorm caused the University to close at noon on December 8, 2009. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Greg Nathan / University Communication</small></figcaption>
            </figure>
          </li>
          <li>
            <figure>
              <img src=\"samplecontent/carouselFootball.jpg\" alt=\"Husker Football\" />
              <figcaption>Ndamukong Suh and Larry Asante sandwich Kansas State quarterback Grant Gregory. University of Nebraska&ndash;Lincoln vs. Kansas State Wildcats football. <small class=\"dcf-d-block dcf-txt-xs dcf-pt-1\">Photo by Craig Chandler / University Communication</small></figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/carousel.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/carousel.html");
    }
}
