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

/* wdn/templates_5.2/js/scroll-animations.js */
class __TwigTemplate_f47af79ad2691585b58b07d04b5a031e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/scroll-animations.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/scroll-animations.js"));

        // line 1
        echo "'use strict';

require(['dcf-scrollAnimation'], function () {
  var itemList = document.querySelectorAll('.dcf-animate-on-scroll');
  var observerConfig = {
    rootMargin: '0px',
    threshold: [0.5, 1]
  };
  var animationClassNames = ['dcf-animated'];
  var unlScrollAnimation = new DCFScrollAnimation(itemList, observerConfig, animationClassNames);
  unlScrollAnimation.initialize();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/scroll-animations.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

require(['dcf-scrollAnimation'], function () {
  var itemList = document.querySelectorAll('.dcf-animate-on-scroll');
  var observerConfig = {
    rootMargin: '0px',
    threshold: [0.5, 1]
  };
  var animationClassNames = ['dcf-animated'];
  var unlScrollAnimation = new DCFScrollAnimation(itemList, observerConfig, animationClassNames);
  unlScrollAnimation.initialize();
});
", "wdn/templates_5.2/js/scroll-animations.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/scroll-animations.js");
    }
}
