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

/* wdn/templates_5.1/js/plugins/cssrelpreload.js */
class __TwigTemplate_8e8e5fdae828fd1013151914921af181 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/plugins/cssrelpreload.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/plugins/cssrelpreload.js"));

        // line 1
        echo "/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
/* This file is meant as a standalone workflow for
- testing support for link[rel=preload]
- enabling async CSS loading in browsers that do not support rel=preload
- applying rel preload css once loaded, whether supported or not.
*/
(function( w ){
  \"use strict\";
  // rel=preload support test
  if( !w.loadCSS ){
    w.loadCSS = function(){};
  }
  // define on the loadCSS obj
  var rp = loadCSS.relpreload = {};
  // rel=preload feature support test
  // runs once and returns a function for compat purposes
  rp.support = (function(){
    var ret;
    try {
      ret = w.document.createElement( \"link\" ).relList.supports( \"preload\" );
    } catch (e) {
      ret = false;
    }
    return function(){
      return ret;
    };
  })();

  // if preload isn't supported, get an asynchronous load by using a non-matching media attribute
  // then change that media back to its intended value on load
  rp.bindMediaToggle = function( link ){
    // remember existing media attr for ultimate state, or default to 'all'
    var finalMedia = link.media || \"all\";

    function enableStylesheet(){
      link.media = finalMedia;
    }

    // bind load handlers to enable media
    if( link.addEventListener ){
      link.addEventListener( \"load\", enableStylesheet );
    } else if( link.attachEvent ){
      link.attachEvent( \"onload\", enableStylesheet );
    }

    // Set rel and non-applicable media type to start an async request
    // note: timeout allows this to happen async to let rendering continue in IE
    setTimeout(function(){
      link.rel = \"stylesheet\";
      link.media = \"only x\";
    });
    // also enable media after 3 seconds,
    // which will catch very old browsers (android 2.x, old firefox) that don't support onload on link
    setTimeout( enableStylesheet, 3000 );
  };

  // loop through link elements in DOM
  rp.poly = function(){
    // double check this to prevent external calls from running
    if( rp.support() ){
      return;
    }
    var links = w.document.getElementsByTagName( \"link\" );
    for( var i = 0; i < links.length; i++ ){
      var link = links[ i ];
      // qualify links to those with rel=preload and as=style attrs
      if( link.rel === \"preload\" && link.getAttribute( \"as\" ) === \"style\" && !link.getAttribute( \"data-loadcss\" ) ){
        // prevent rerunning on link
        link.setAttribute( \"data-loadcss\", true );
        // bind listeners to toggle media back
        rp.bindMediaToggle( link );
      }
    }
  };

  // if unsupported, run the polyfill
  if( !rp.support() ){
    // run once at least
    rp.poly();

    // rerun poly on an interval until onload
    var run = w.setInterval( rp.poly, 500 );
    if( w.addEventListener ){
      w.addEventListener( \"load\", function(){
        rp.poly();
        w.clearInterval( run );
      } );
    } else if( w.attachEvent ){
      w.attachEvent( \"onload\", function(){
        rp.poly();
        w.clearInterval( run );
      } );
    }
  }


  // commonjs
  if( typeof exports !== \"undefined\" ){
    exports.loadCSS = loadCSS;
  }
  else {
    w.loadCSS = loadCSS;
  }
}( typeof global !== \"undefined\" ? global : this ) );
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/plugins/cssrelpreload.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
/* This file is meant as a standalone workflow for
- testing support for link[rel=preload]
- enabling async CSS loading in browsers that do not support rel=preload
- applying rel preload css once loaded, whether supported or not.
*/
(function( w ){
  \"use strict\";
  // rel=preload support test
  if( !w.loadCSS ){
    w.loadCSS = function(){};
  }
  // define on the loadCSS obj
  var rp = loadCSS.relpreload = {};
  // rel=preload feature support test
  // runs once and returns a function for compat purposes
  rp.support = (function(){
    var ret;
    try {
      ret = w.document.createElement( \"link\" ).relList.supports( \"preload\" );
    } catch (e) {
      ret = false;
    }
    return function(){
      return ret;
    };
  })();

  // if preload isn't supported, get an asynchronous load by using a non-matching media attribute
  // then change that media back to its intended value on load
  rp.bindMediaToggle = function( link ){
    // remember existing media attr for ultimate state, or default to 'all'
    var finalMedia = link.media || \"all\";

    function enableStylesheet(){
      link.media = finalMedia;
    }

    // bind load handlers to enable media
    if( link.addEventListener ){
      link.addEventListener( \"load\", enableStylesheet );
    } else if( link.attachEvent ){
      link.attachEvent( \"onload\", enableStylesheet );
    }

    // Set rel and non-applicable media type to start an async request
    // note: timeout allows this to happen async to let rendering continue in IE
    setTimeout(function(){
      link.rel = \"stylesheet\";
      link.media = \"only x\";
    });
    // also enable media after 3 seconds,
    // which will catch very old browsers (android 2.x, old firefox) that don't support onload on link
    setTimeout( enableStylesheet, 3000 );
  };

  // loop through link elements in DOM
  rp.poly = function(){
    // double check this to prevent external calls from running
    if( rp.support() ){
      return;
    }
    var links = w.document.getElementsByTagName( \"link\" );
    for( var i = 0; i < links.length; i++ ){
      var link = links[ i ];
      // qualify links to those with rel=preload and as=style attrs
      if( link.rel === \"preload\" && link.getAttribute( \"as\" ) === \"style\" && !link.getAttribute( \"data-loadcss\" ) ){
        // prevent rerunning on link
        link.setAttribute( \"data-loadcss\", true );
        // bind listeners to toggle media back
        rp.bindMediaToggle( link );
      }
    }
  };

  // if unsupported, run the polyfill
  if( !rp.support() ){
    // run once at least
    rp.poly();

    // rerun poly on an interval until onload
    var run = w.setInterval( rp.poly, 500 );
    if( w.addEventListener ){
      w.addEventListener( \"load\", function(){
        rp.poly();
        w.clearInterval( run );
      } );
    } else if( w.attachEvent ){
      w.attachEvent( \"onload\", function(){
        rp.poly();
        w.clearInterval( run );
      } );
    }
  }


  // commonjs
  if( typeof exports !== \"undefined\" ){
    exports.loadCSS = loadCSS;
  }
  else {
    w.loadCSS = loadCSS;
  }
}( typeof global !== \"undefined\" ? global : this ) );
", "wdn/templates_5.1/js/plugins/cssrelpreload.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/plugins/cssrelpreload.js");
    }
}
