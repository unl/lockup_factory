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

/* wdn/templates_5.1/js/main.js */
class __TwigTemplate_4987696fe572a0bedeb9bbb90434792b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/main.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/main.js"));

        // line 1
        echo "'use strict';

// WDN must be loaded synchronously for BC and config support
requirejs.config({
\tbaseUrl: WDN.getTemplateFilePath('js', true),
\tmap: {
\t\t\"*\": {
\t\t\tcss: 'require-css/css'
\t\t}
\t}
});

requirejs([
// these map to used callback parameters
'wdn', 'require',
// these are bundles for framework loading and plugin initialization
'main-wdn-plugins'], function (WDN, require) {
\tvar unlchat_url = 'https://ucommchat.unl.edu/assets/js';
\t//#UNLCHAT_URL
\tWDN.loadJQuery(function () {
\t\trequire([unlchat_url + '?for=client&version=' + WDN.getHTMLVersion()], function () {});
\t});

\t// Process deferred inline scripts
\twindow.dispatchEvent(new Event('inlineJSReady'));
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/main.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

// WDN must be loaded synchronously for BC and config support
requirejs.config({
\tbaseUrl: WDN.getTemplateFilePath('js', true),
\tmap: {
\t\t\"*\": {
\t\t\tcss: 'require-css/css'
\t\t}
\t}
});

requirejs([
// these map to used callback parameters
'wdn', 'require',
// these are bundles for framework loading and plugin initialization
'main-wdn-plugins'], function (WDN, require) {
\tvar unlchat_url = 'https://ucommchat.unl.edu/assets/js';
\t//#UNLCHAT_URL
\tWDN.loadJQuery(function () {
\t\trequire([unlchat_url + '?for=client&version=' + WDN.getHTMLVersion()], function () {});
\t});

\t// Process deferred inline scripts
\twindow.dispatchEvent(new Event('inlineJSReady'));
});
", "wdn/templates_5.1/js/main.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/main.js");
    }
}
