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

/* wdn/templates_5.0/js/plugins/onloadCSS.js */
class __TwigTemplate_55fb21f4f186248b3d45f10e6da319dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/onloadCSS.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/onloadCSS.js"));

        // line 1
        echo "/*! onloadCSS. (onload callback for loadCSS) [c]2017 Filament Group, Inc. MIT License */
/* global navigator */
/* exported onloadCSS */
function onloadCSS( ss, callback ) {
  var called;
  function newcb(){
    if( !called && callback ){
      called = true;
      callback.call( ss );
    }
  }
  if( ss.addEventListener ){
    ss.addEventListener( \"load\", newcb );
  }
  if( ss.attachEvent ){
    ss.attachEvent( \"onload\", newcb );
  }

  // This code is for browsers that don’t support onload
  // No support for onload (it'll bind but never fire):
  //\t* Android 4.3 (Samsung Galaxy S4, Browserstack)
  //\t* Android 4.2 Browser (Samsung Galaxy SIII Mini GT-I8200L)
  //\t* Android 2.3 (Pantech Burst P9070)

  // Weak inference targets Android < 4.4
  if( \"isApplicationInstalled\" in navigator && \"onloadcssdefined\" in ss ) {
    ss.onloadcssdefined( newcb );
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/onloadCSS.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*! onloadCSS. (onload callback for loadCSS) [c]2017 Filament Group, Inc. MIT License */
/* global navigator */
/* exported onloadCSS */
function onloadCSS( ss, callback ) {
  var called;
  function newcb(){
    if( !called && callback ){
      called = true;
      callback.call( ss );
    }
  }
  if( ss.addEventListener ){
    ss.addEventListener( \"load\", newcb );
  }
  if( ss.attachEvent ){
    ss.attachEvent( \"onload\", newcb );
  }

  // This code is for browsers that don’t support onload
  // No support for onload (it'll bind but never fire):
  //\t* Android 4.3 (Samsung Galaxy S4, Browserstack)
  //\t* Android 4.2 Browser (Samsung Galaxy SIII Mini GT-I8200L)
  //\t* Android 2.3 (Pantech Burst P9070)

  // Weak inference targets Android < 4.4
  if( \"isApplicationInstalled\" in navigator && \"onloadcssdefined\" in ss ) {
    ss.onloadcssdefined( newcb );
  }
}
", "wdn/templates_5.0/js/plugins/onloadCSS.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/onloadCSS.js");
    }
}
