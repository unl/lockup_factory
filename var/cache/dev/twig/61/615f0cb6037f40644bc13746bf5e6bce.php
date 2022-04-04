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

/* wdn/templates_5.3/js-src/events-band.js */
class __TwigTemplate_6f0e57472fd29a489a30ff6c1a9a96bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/events-band.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/events-band.js"));

        // line 1
        echo "define([
  'events',
  'jquery'
], function(events, \$) {
  console.warn('Warning: The WDN events-band plugin is deprecated. Use WDN events plugin with band layout instead.');

  return {
    initialize : function(config) {
      // force these items so behaves as legacy events-band
      if (!config.container) {
        config.container = '#events-band';
      }
      config.layout = 'band';

      \$(function() {
        events.setup(config);
      });
    },

    setup : events.setup
  };
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js-src/events-band.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([
  'events',
  'jquery'
], function(events, \$) {
  console.warn('Warning: The WDN events-band plugin is deprecated. Use WDN events plugin with band layout instead.');

  return {
    initialize : function(config) {
      // force these items so behaves as legacy events-band
      if (!config.container) {
        config.container = '#events-band';
      }
      config.layout = 'band';

      \$(function() {
        events.setup(config);
      });
    },

    setup : events.setup
  };
});
", "wdn/templates_5.3/js-src/events-band.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/events-band.js");
    }
}
