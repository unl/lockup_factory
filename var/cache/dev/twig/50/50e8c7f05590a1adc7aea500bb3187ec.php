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

/* wdn/templates_5.3/includes/global/skip-nav.html */
class __TwigTemplate_00fd24cbf13b51ba987920af36d0d015 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/skip-nav.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/skip-nav.html"));

        // line 1
        echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-WKHNC39\"
                  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\" title=\"noscript tracking pixel\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class=\"dcf-absolute dcf-pin-top dcf-pin-left dcf-mt-1 dcf-ml-1 dcf-z-1\" id=\"dcf-skip-nav\">
  <a class=\"dcf-show-on-focus dcf-btn dcf-btn-primary\" href=\"#dcf-main\">Skip to main content</a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/skip-nav.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-WKHNC39\"
                  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\" title=\"noscript tracking pixel\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class=\"dcf-absolute dcf-pin-top dcf-pin-left dcf-mt-1 dcf-ml-1 dcf-z-1\" id=\"dcf-skip-nav\">
  <a class=\"dcf-show-on-focus dcf-btn dcf-btn-primary\" href=\"#dcf-main\">Skip to main content</a>
</div>
", "wdn/templates_5.3/includes/global/skip-nav.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/skip-nav.html");
    }
}
