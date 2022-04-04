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

/* wdn/templates_5.3/js-src/main.babel.js */
class __TwigTemplate_cfc467b95be4f363906e4f2b7efe2c3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/main.babel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/main.babel.js"));

        // line 1
        echo "// WDN must be loaded synchronously for BC and config support
requirejs.config({
  baseUrl: WDN.getTemplateFilePath('js', true),
  urlArgs : 'dep=' + WDN.getDepVersion(),
  map: {
    \"*\": {
      css: 'require-css/css'
    }
  }
});

requirejs([
  // these map to used callback parameters
  'wdn',
  'require',
  // these are bundles for framework loading and plugin initialization
  'main-wdn-plugins'
], function(WDN, require) {
    var unlchat_url = 'https://ucommchat.unl.edu/assets/js';
    //#UNLCHAT_URL
    WDN.loadJQuery(function() {
        // load chat with cache bust once a day
        var todayParts = new Date().toLocaleDateString().split('/');
        require([unlchat_url + '?for=client&version=' + WDN.getHTMLVersion() + '&cb=' + todayParts[2] + todayParts[0] + todayParts[1]], function(){});
    });

    // Set the URL to test in webaudit
    var qaTestLink = document.getElementById('qa-test');
    if (qaTestLink) {
      var pathname = document.location.pathname;
      // webaudit expects pages to end with a slash, so add one if missing
      if (!pathname.match(/\\..*\$/) && !pathname.match(/\\/\$/)) {
        pathname += '/';
      }
      qaTestLink.search = '?url=' + encodeURI(document.location.origin + pathname);
    }

    // Process deferred inline scripts
    window.dispatchEvent(new Event('inlineJSReady'));
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js-src/main.babel.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// WDN must be loaded synchronously for BC and config support
requirejs.config({
  baseUrl: WDN.getTemplateFilePath('js', true),
  urlArgs : 'dep=' + WDN.getDepVersion(),
  map: {
    \"*\": {
      css: 'require-css/css'
    }
  }
});

requirejs([
  // these map to used callback parameters
  'wdn',
  'require',
  // these are bundles for framework loading and plugin initialization
  'main-wdn-plugins'
], function(WDN, require) {
    var unlchat_url = 'https://ucommchat.unl.edu/assets/js';
    //#UNLCHAT_URL
    WDN.loadJQuery(function() {
        // load chat with cache bust once a day
        var todayParts = new Date().toLocaleDateString().split('/');
        require([unlchat_url + '?for=client&version=' + WDN.getHTMLVersion() + '&cb=' + todayParts[2] + todayParts[0] + todayParts[1]], function(){});
    });

    // Set the URL to test in webaudit
    var qaTestLink = document.getElementById('qa-test');
    if (qaTestLink) {
      var pathname = document.location.pathname;
      // webaudit expects pages to end with a slash, so add one if missing
      if (!pathname.match(/\\..*\$/) && !pathname.match(/\\/\$/)) {
        pathname += '/';
      }
      qaTestLink.search = '?url=' + encodeURI(document.location.origin + pathname);
    }

    // Process deferred inline scripts
    window.dispatchEvent(new Event('inlineJSReady'));
});
", "wdn/templates_5.3/js-src/main.babel.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/main.babel.js");
    }
}
