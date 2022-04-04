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

/* wdn/templates_5.3/includes/global/affiliate-head-2.html */
class __TwigTemplate_cc404d9500bcab37ce47bd09b4d898e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/affiliate-head-2.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/affiliate-head-2.html"));

        // line 1
        echo "<link rel=\"preload\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\" as=\"style\">
<link id=\"unl-css-critical\" rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\">
<link id=\"unl-css-main\" rel=\"preload\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet';\">
<noscript>
  <link rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\">
</noscript>
<link rel=\"preload\" href=\"https://ucommchat.unl.edu/assets/css?for=client&v=5\" as=\"style\">
<link rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/print.css?dep=\$DEP_VERSION\$\" media=\"print\">
<script>
  !function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.media=a}var a=t.media||\"all\";t.addEventListener?t.addEventListener(\"load\",e):t.attachEvent&&t.attachEvent(\"onload\",e),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
  function onloadCSS(n,a){function t(){!d&&a&&(d=!0,a.call(n))}var d;n.addEventListener&&n.addEventListener(\"load\",t),n.attachEvent&&n.attachEvent(\"onload\",t),\"isApplicationInstalled\"in navigator&&\"onloadcssdefined\"in n&&n.onloadcssdefined(t)}
  !function(){var e=function(){var e=document.getElementById(\"unl-css-critical\");e.parentNode.removeChild(e)},n=document.getElementById(\"unl-css-main\");onloadCSS(n,function(){e()})}();
</script>
<link rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/affiliate.css?dep=\$DEP_VERSION\$\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/affiliate-head-2.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"preload\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\" as=\"style\">
<link id=\"unl-css-critical\" rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\">
<link id=\"unl-css-main\" rel=\"preload\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet';\">
<noscript>
  <link rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\">
</noscript>
<link rel=\"preload\" href=\"https://ucommchat.unl.edu/assets/css?for=client&v=5\" as=\"style\">
<link rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/print.css?dep=\$DEP_VERSION\$\" media=\"print\">
<script>
  !function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.media=a}var a=t.media||\"all\";t.addEventListener?t.addEventListener(\"load\",e):t.attachEvent&&t.attachEvent(\"onload\",e),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
  function onloadCSS(n,a){function t(){!d&&a&&(d=!0,a.call(n))}var d;n.addEventListener&&n.addEventListener(\"load\",t),n.attachEvent&&n.attachEvent(\"onload\",t),\"isApplicationInstalled\"in navigator&&\"onloadcssdefined\"in n&&n.onloadcssdefined(t)}
  !function(){var e=function(){var e=document.getElementById(\"unl-css-critical\");e.parentNode.removeChild(e)},n=document.getElementById(\"unl-css-main\");onloadCSS(n,function(){e()})}();
</script>
<link rel=\"stylesheet\" href=\"https://unlcms.unl.edu/wdn/templates_5.3/css/affiliate.css?dep=\$DEP_VERSION\$\">
", "wdn/templates_5.3/includes/global/affiliate-head-2.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/affiliate-head-2.html");
    }
}
