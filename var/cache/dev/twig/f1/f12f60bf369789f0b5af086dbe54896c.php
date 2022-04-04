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

/* wdn/templates_5.3/includes/global/head-2-local.html */
class __TwigTemplate_31a64e547cb6524ba3ba1ed36c38f544 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/head-2-local.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/head-2-local.html"));

        // line 1
        echo "<link rel=\"preload\" href=\"/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\" as=\"style\">
<link id=\"unl-css-critical\" rel=\"stylesheet\" href=\"/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\">
<link id=\"unl-css-main\" rel=\"preload\" href=\"/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet';\">
<link rel=\"preload\" href=\"/wdn/templates_5.3/fonts/liberator/liberator-heavyitalic.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"https://cloud.typography.com/7717652/7106412/css/fonts.css\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\">
<noscript>
  <link rel=\"stylesheet\" href=\"/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\">
  <link rel=\"stylesheet\" href=\"https://cloud.typography.com/7717652/7106412/css/fonts.css\">
</noscript>
<style>@charset \"UTF-8\";@font-face{font-family:'liberatorheavy_italic';src:url('/wdn/templates_5.3/fonts/liberator/liberator-heavyitalic.woff2') format('woff2'), url('/wdn/templates_5.3/fonts/liberator/liberator-heavyitalic.woff') format('woff');font-display:swap}.unl h1.unl-font-display,.unl h2.unl-font-display,.unl h3.unl-font-display,.unl h4.unl-font-display,.unl h5.unl-font-display,.unl h6.unl-font-display,.unl-font-display{font-family:'Arial Narrow', sans-serif;font-style:italic;letter-spacing:0;margin-left:0;text-transform:uppercase}.unl-fonts-loaded .unl h1.unl-font-display,.unl-fonts-loaded .unl h2.unl-font-display,.unl-fonts-loaded .unl h3.unl-font-display,.unl-fonts-loaded .unl h4.unl-font-display,.unl-fonts-loaded .unl h5.unl-font-display,.unl-fonts-loaded .unl h6.unl-font-display,.unl-fonts-loaded .unl-font-display{font-family:'liberatorheavy_italic', 'Arial Narrow', sans-serif;font-style:normal;font-weight:600;text-transform:none}</style>
<link rel=\"preload\" href=\"https://ucommchat.unl.edu/assets/css?for=client&v=5\" as=\"style\">
<link rel=\"stylesheet\" href=\"/wdn/templates_5.3/css/print.css?dep=\$DEP_VERSION\$\" media=\"print\">
<script>
  !function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.media=a}var a=t.media||\"all\";t.addEventListener?t.addEventListener(\"load\",e):t.attachEvent&&t.attachEvent(\"onload\",e),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
  function onloadCSS(n,a){function t(){!d&&a&&(d=!0,a.call(n))}var d;n.addEventListener&&n.addEventListener(\"load\",t),n.attachEvent&&n.attachEvent(\"onload\",t),\"isApplicationInstalled\"in navigator&&\"onloadcssdefined\"in n&&n.onloadcssdefined(t)}
  !function(){var e=function(){var e=document.getElementById(\"unl-css-critical\");e.parentNode.removeChild(e)},n=document.getElementById(\"unl-css-main\");onloadCSS(n,function(){e()})}();
</script>
<script>(function(){'use strict';if(sessionStorage.fontsLoadedCriticalFoftPreloadFallback){document.documentElement.className+=' unl-fonts-loaded';return}else if('fonts'in document){document.fonts.load('600 1em liberatorheavy_italic').then(function(){document.documentElement.className+=' unl-fonts-loaded';sessionStorage.fontsLoadedCriticalFoftPreloadFallback=true})}else{var ref=document.getElementsByTagName('script')[0];var script=document.createElement('script');script.src='/wdn/templates_5.3/js/compressed/utility-scripts/critical-foft-preload-fallback-optional.js';script.async=true;ref.parentNode.insertBefore(script,ref)}})();</script>
<link rel=\"icon\" href=\"/wdn/templates_5.3/includes/global/favicon/favicon.ico\" sizes=\"any\">
<link rel=\"icon\" href=\"/wdn/templates_5.3/includes/global/favicon/icon.svg\" type=\"image/svg+xml\">
<link rel=\"apple-touch-icon\" href=\"/wdn/templates_5.3/includes/global/favicon/apple-touch-icon.png\">
<link rel=\"manifest\" href=\"/wdn/templates_5.3/includes/global/favicon/manifest.webmanifest\">
<meta name=\"theme-color\" content=\"#d00000\">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKHNC39');</script>
<!-- End Google Tag Manager -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/head-2-local.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"preload\" href=\"/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\" as=\"style\">
<link id=\"unl-css-critical\" rel=\"stylesheet\" href=\"/wdn/templates_5.3/css/critical.css?dep=\$DEP_VERSION\$\">
<link id=\"unl-css-main\" rel=\"preload\" href=\"/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet';\">
<link rel=\"preload\" href=\"/wdn/templates_5.3/fonts/liberator/liberator-heavyitalic.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"https://cloud.typography.com/7717652/7106412/css/fonts.css\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\">
<noscript>
  <link rel=\"stylesheet\" href=\"/wdn/templates_5.3/css/main.css?dep=\$DEP_VERSION\$\">
  <link rel=\"stylesheet\" href=\"https://cloud.typography.com/7717652/7106412/css/fonts.css\">
</noscript>
<style>@charset \"UTF-8\";@font-face{font-family:'liberatorheavy_italic';src:url('/wdn/templates_5.3/fonts/liberator/liberator-heavyitalic.woff2') format('woff2'), url('/wdn/templates_5.3/fonts/liberator/liberator-heavyitalic.woff') format('woff');font-display:swap}.unl h1.unl-font-display,.unl h2.unl-font-display,.unl h3.unl-font-display,.unl h4.unl-font-display,.unl h5.unl-font-display,.unl h6.unl-font-display,.unl-font-display{font-family:'Arial Narrow', sans-serif;font-style:italic;letter-spacing:0;margin-left:0;text-transform:uppercase}.unl-fonts-loaded .unl h1.unl-font-display,.unl-fonts-loaded .unl h2.unl-font-display,.unl-fonts-loaded .unl h3.unl-font-display,.unl-fonts-loaded .unl h4.unl-font-display,.unl-fonts-loaded .unl h5.unl-font-display,.unl-fonts-loaded .unl h6.unl-font-display,.unl-fonts-loaded .unl-font-display{font-family:'liberatorheavy_italic', 'Arial Narrow', sans-serif;font-style:normal;font-weight:600;text-transform:none}</style>
<link rel=\"preload\" href=\"https://ucommchat.unl.edu/assets/css?for=client&v=5\" as=\"style\">
<link rel=\"stylesheet\" href=\"/wdn/templates_5.3/css/print.css?dep=\$DEP_VERSION\$\" media=\"print\">
<script>
  !function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.media=a}var a=t.media||\"all\";t.addEventListener?t.addEventListener(\"load\",e):t.attachEvent&&t.attachEvent(\"onload\",e),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
  function onloadCSS(n,a){function t(){!d&&a&&(d=!0,a.call(n))}var d;n.addEventListener&&n.addEventListener(\"load\",t),n.attachEvent&&n.attachEvent(\"onload\",t),\"isApplicationInstalled\"in navigator&&\"onloadcssdefined\"in n&&n.onloadcssdefined(t)}
  !function(){var e=function(){var e=document.getElementById(\"unl-css-critical\");e.parentNode.removeChild(e)},n=document.getElementById(\"unl-css-main\");onloadCSS(n,function(){e()})}();
</script>
<script>(function(){'use strict';if(sessionStorage.fontsLoadedCriticalFoftPreloadFallback){document.documentElement.className+=' unl-fonts-loaded';return}else if('fonts'in document){document.fonts.load('600 1em liberatorheavy_italic').then(function(){document.documentElement.className+=' unl-fonts-loaded';sessionStorage.fontsLoadedCriticalFoftPreloadFallback=true})}else{var ref=document.getElementsByTagName('script')[0];var script=document.createElement('script');script.src='/wdn/templates_5.3/js/compressed/utility-scripts/critical-foft-preload-fallback-optional.js';script.async=true;ref.parentNode.insertBefore(script,ref)}})();</script>
<link rel=\"icon\" href=\"/wdn/templates_5.3/includes/global/favicon/favicon.ico\" sizes=\"any\">
<link rel=\"icon\" href=\"/wdn/templates_5.3/includes/global/favicon/icon.svg\" type=\"image/svg+xml\">
<link rel=\"apple-touch-icon\" href=\"/wdn/templates_5.3/includes/global/favicon/apple-touch-icon.png\">
<link rel=\"manifest\" href=\"/wdn/templates_5.3/includes/global/favicon/manifest.webmanifest\">
<meta name=\"theme-color\" content=\"#d00000\">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKHNC39');</script>
<!-- End Google Tag Manager -->
", "wdn/templates_5.3/includes/global/head-2-local.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/head-2-local.html");
    }
}
