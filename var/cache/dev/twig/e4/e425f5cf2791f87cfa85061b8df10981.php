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

/* wdn/templates_5.3/js/navigation.js */
class __TwigTemplate_423856e8e0be3922a48318c8126a77d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/navigation.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/navigation.js"));

        // line 1
        echo "\"use strict\";

define(['dcf-navMenuToggle', 'plugins/headroom', 'plugins/body-scroll-lock'], function (navMenuToggleModule, headroom, bodyScrollLock) {
  var initialized = false;
  var Plugin = {
    initialize: function initialize() {
      if (initialized) {
        return;
      }

      var navMenuToggle = new navMenuToggleModule.DCFNavMenuToggle(headroom, bodyScrollLock);
    }
  };
  return Plugin;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/navigation.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

define(['dcf-navMenuToggle', 'plugins/headroom', 'plugins/body-scroll-lock'], function (navMenuToggleModule, headroom, bodyScrollLock) {
  var initialized = false;
  var Plugin = {
    initialize: function initialize() {
      if (initialized) {
        return;
      }

      var navMenuToggle = new navMenuToggleModule.DCFNavMenuToggle(headroom, bodyScrollLock);
    }
  };
  return Plugin;
});
", "wdn/templates_5.3/js/navigation.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/navigation.js");
    }
}
