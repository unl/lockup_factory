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

/* wdn/templates_5.0/js/mediaelement_wdn.js */
class __TwigTemplate_b5d72b49383d22bb8a2a293b3569737f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/mediaelement_wdn.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/mediaelement_wdn.js"));

        // line 1
        echo "define([
\t'wdn',
\t'jquery',
\t'plugins/mediaelement/mediaelement-and-player',
\t'plugins/mediaelement/mep-feature-googleanalytics',
\t'css!plugins/mediaelement/css/mediaelementplayer.min',
    'css!plugins/mediaelement/css/wdn-overrides.min'
], function(WDN, \$, mejs) {
\t// fix plugin path detection in built env
\tmejs.MediaElementDefaults.pluginPath = WDN.getTemplateFilePath('scripts/plugins/mediaelement/', true);

\tvar defaultOptions = {
\t\tvideoWidth: '100%',
\t\tvideoHeight: '100%',
\t\taudioWidth: '100%',
\t\ttoggleCaptionsButtonWhenOnlyOne: true,
\t\tfeatures : [
\t\t\t'playpause',
\t\t\t'current',
\t\t\t'progress',
\t\t\t'duration',
\t\t\t'tracks',
\t\t\t'volume',
\t\t\t'fullscreen',
\t\t\t'googleanalytics'
\t\t]
\t};

\treturn {
\t\tinitialize: function(callback) {
\t\t\tvar options = \$.extend({}, defaultOptions, WDN.getPluginParam('mediaelement_wdn', 'options') || {});

\t\t\t\$(function() {
\t\t\t\t\$('video.wdn_player, audio.wdn_player').each(function() {
\t\t\t\t\t\$(this).mediaelementplayer(options);
\t\t\t\t});

\t\t\t\tif (callback) {
\t\t\t\t\tcallback(options);
\t\t\t\t}
\t\t\t});
\t\t}
\t};
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/mediaelement_wdn.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([
\t'wdn',
\t'jquery',
\t'plugins/mediaelement/mediaelement-and-player',
\t'plugins/mediaelement/mep-feature-googleanalytics',
\t'css!plugins/mediaelement/css/mediaelementplayer.min',
    'css!plugins/mediaelement/css/wdn-overrides.min'
], function(WDN, \$, mejs) {
\t// fix plugin path detection in built env
\tmejs.MediaElementDefaults.pluginPath = WDN.getTemplateFilePath('scripts/plugins/mediaelement/', true);

\tvar defaultOptions = {
\t\tvideoWidth: '100%',
\t\tvideoHeight: '100%',
\t\taudioWidth: '100%',
\t\ttoggleCaptionsButtonWhenOnlyOne: true,
\t\tfeatures : [
\t\t\t'playpause',
\t\t\t'current',
\t\t\t'progress',
\t\t\t'duration',
\t\t\t'tracks',
\t\t\t'volume',
\t\t\t'fullscreen',
\t\t\t'googleanalytics'
\t\t]
\t};

\treturn {
\t\tinitialize: function(callback) {
\t\t\tvar options = \$.extend({}, defaultOptions, WDN.getPluginParam('mediaelement_wdn', 'options') || {});

\t\t\t\$(function() {
\t\t\t\t\$('video.wdn_player, audio.wdn_player').each(function() {
\t\t\t\t\t\$(this).mediaelementplayer(options);
\t\t\t\t});

\t\t\t\tif (callback) {
\t\t\t\t\tcallback(options);
\t\t\t\t}
\t\t\t});
\t\t}
\t};
});
", "wdn/templates_5.0/js/mediaelement_wdn.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/mediaelement_wdn.js");
    }
}