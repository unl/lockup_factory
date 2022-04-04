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

/* wdn/templates_5.3/includes/global/js-body-local.html */
class __TwigTemplate_87fde2ee5a5685ced1f35d58758b4f9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/js-body-local.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/js-body-local.html"));

        // line 1
        echo "<script src=\"/wdn/templates_5.3/js/compressed/all.js?dep=\$DEP_VERSION\$\" id=\"wdn_dependents\"></script>
<script>
  if (!('grid' in document.body.style)) {
    const fallback = '<link rel=stylesheet href=/wdn/templates_5.3/css/legacy.css?dep=\$DEP_VERSION\$>';
    document.head.insertAdjacentHTML('beforeend', fallback);
  }
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/js-body-local.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"/wdn/templates_5.3/js/compressed/all.js?dep=\$DEP_VERSION\$\" id=\"wdn_dependents\"></script>
<script>
  if (!('grid' in document.body.style)) {
    const fallback = '<link rel=stylesheet href=/wdn/templates_5.3/css/legacy.css?dep=\$DEP_VERSION\$>';
    document.head.insertAdjacentHTML('beforeend', fallback);
  }
</script>
", "wdn/templates_5.3/includes/global/js-body-local.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/js-body-local.html");
    }
}