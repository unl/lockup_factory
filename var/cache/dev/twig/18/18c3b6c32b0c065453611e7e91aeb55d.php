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

/* wdn/templates_5.1/js/main-wdn-plugins.js */
class __TwigTemplate_406535bbd547cc22b35da8bbd3a1f49c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/main-wdn-plugins.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/main-wdn-plugins.js"));

        // line 1
        echo "\"use strict\";

define(['analytics', // This also loads the IdM plugin
'navigation', 'search', 'unlalert', 'lazy-load', 'legacy', 'modals', 'hover_intent', 'cta-nav', 'form_validation', 'qa'], function () {
  for (var i = 0, pluginCount = arguments.length; i < pluginCount; i++) {
    var pluginObj = arguments[i];
    if (pluginObj && \"initialize\" in pluginObj) {
      pluginObj.initialize();
    }
  }
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/main-wdn-plugins.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

define(['analytics', // This also loads the IdM plugin
'navigation', 'search', 'unlalert', 'lazy-load', 'legacy', 'modals', 'hover_intent', 'cta-nav', 'form_validation', 'qa'], function () {
  for (var i = 0, pluginCount = arguments.length; i < pluginCount; i++) {
    var pluginObj = arguments[i];
    if (pluginObj && \"initialize\" in pluginObj) {
      pluginObj.initialize();
    }
  }
});
", "wdn/templates_5.1/js/main-wdn-plugins.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/main-wdn-plugins.js");
    }
}