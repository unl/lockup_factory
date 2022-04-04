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

/* wdn/templates_4.1/scripts/js-css/band_imagery.css */
class __TwigTemplate_dc4a3481667b66ecb58a1878eca72873 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/band_imagery.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/band_imagery.css"));

        // line 1
        echo ".wdn-band .wdn-scroll-watch.locked{position:absolute;z-index:0;left:0;top:0;bottom:auto}.wdn-band .wdn-scroll-watch.locked.fixed{position:fixed}.wdn-band .wdn-scroll-watch.locked.bottom{top:auto;bottom:0}.wdn-band .wdn-scroll{z-index:0;position:relative}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/js-css/band_imagery.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wdn-band .wdn-scroll-watch.locked{position:absolute;z-index:0;left:0;top:0;bottom:auto}.wdn-band .wdn-scroll-watch.locked.fixed{position:fixed}.wdn-band .wdn-scroll-watch.locked.bottom{top:auto;bottom:0}.wdn-band .wdn-scroll{z-index:0;position:relative}", "wdn/templates_4.1/scripts/js-css/band_imagery.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/js-css/band_imagery.css");
    }
}
