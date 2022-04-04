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

/* wdn/templates_5.3/js/lazy-load.js */
class __TwigTemplate_501f4077d8156e1ff959d60f72e8079a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/lazy-load.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/lazy-load.js"));

        // line 1
        echo "\"use strict\";

require(['dcf-lazyLoad'], function (lazyLoadModule) {
  var images = document.querySelectorAll('[loading=lazy], .dcf-lazy-load');
  var observerConfig = {
    // extend intersection root margin by 50px to start intersection earlier by 50px
    rootMargin: '0px 0px 50px 0px',
    threshold: [0, 0.5]
  };
  var enterClassNames = [];
  var unlLazyLoad = new lazyLoadModule.DCFLazyLoad(images, observerConfig, enterClassNames);
  unlLazyLoad.initialize();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/lazy-load.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

require(['dcf-lazyLoad'], function (lazyLoadModule) {
  var images = document.querySelectorAll('[loading=lazy], .dcf-lazy-load');
  var observerConfig = {
    // extend intersection root margin by 50px to start intersection earlier by 50px
    rootMargin: '0px 0px 50px 0px',
    threshold: [0, 0.5]
  };
  var enterClassNames = [];
  var unlLazyLoad = new lazyLoadModule.DCFLazyLoad(images, observerConfig, enterClassNames);
  unlLazyLoad.initialize();
});
", "wdn/templates_5.3/js/lazy-load.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/lazy-load.js");
    }
}
