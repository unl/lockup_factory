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

/* wdn/templates_5.2/js/plugins/mediaelement/mep-feature-googleanalytics.js */
class __TwigTemplate_dc66833f406efb6611ce506db3f95214 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/plugins/mediaelement/mep-feature-googleanalytics.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/plugins/mediaelement/mep-feature-googleanalytics.js"));

        // line 1
        echo "define(['plugins/mediaelement/mediaelement-and-player', 'jquery', 'analytics'], function(mejs, \$, wdn_ga) {
\t\$.extend(mejs.MepDefaults, {
\t\tgoogleAnalyticsTitle: '',
\t\tgoogleAnalyticsCategory: 'Media',
\t\tgoogleAnalyticsEventPlay: 'Play',
\t\tgoogleAnalyticsEventPause: 'Pause',
\t\tgoogleAnalyticsEventEnded: 'Ended',
\t\tgoogleAnalyticsEventTime: 'Time'
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildgoogleanalytics: function(player, controls, layers, media) {

\t\t\tmedia.addEventListener('play', function() {
\t\t\t\twdn_ga.callTrackEvent(
\t\t\t\t\tplayer.options.googleAnalyticsCategory,
\t\t\t\t\tplayer.options.googleAnalyticsEventPlay,
\t\t\t\t\tplayer.options.googleAnalyticsTitle || media.title || player.currentSrc
\t            );
\t\t\t}, false);

\t\t\tmedia.addEventListener('pause', function() {
\t\t\t\twdn_ga.callTrackEvent(
\t\t\t\t\t\tplayer.options.googleAnalyticsCategory,
\t\t\t\t\t\tplayer.options.googleAnalyticsEventPause,
\t\t\t\t\t\tplayer.options.googleAnalyticsTitle || media.title || player.currentSrc
\t\t\t\t    );
\t\t\t\t}, false);

\t\t\tmedia.addEventListener('ended', function() {
\t\t\t\twdn_ga.callTrackEvent(
\t\t\t\t\t\tplayer.options.googleAnalyticsCategory,
\t\t\t\t\t\tplayer.options.googleAnalyticsEventEnded,
\t\t\t\t\t\tplayer.options.googleAnalyticsTitle || media.title || player.currentSrc
\t\t\t\t    );
\t\t\t\t}, false);
\t\t}
\t});
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/plugins/mediaelement/mep-feature-googleanalytics.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(['plugins/mediaelement/mediaelement-and-player', 'jquery', 'analytics'], function(mejs, \$, wdn_ga) {
\t\$.extend(mejs.MepDefaults, {
\t\tgoogleAnalyticsTitle: '',
\t\tgoogleAnalyticsCategory: 'Media',
\t\tgoogleAnalyticsEventPlay: 'Play',
\t\tgoogleAnalyticsEventPause: 'Pause',
\t\tgoogleAnalyticsEventEnded: 'Ended',
\t\tgoogleAnalyticsEventTime: 'Time'
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildgoogleanalytics: function(player, controls, layers, media) {

\t\t\tmedia.addEventListener('play', function() {
\t\t\t\twdn_ga.callTrackEvent(
\t\t\t\t\tplayer.options.googleAnalyticsCategory,
\t\t\t\t\tplayer.options.googleAnalyticsEventPlay,
\t\t\t\t\tplayer.options.googleAnalyticsTitle || media.title || player.currentSrc
\t            );
\t\t\t}, false);

\t\t\tmedia.addEventListener('pause', function() {
\t\t\t\twdn_ga.callTrackEvent(
\t\t\t\t\t\tplayer.options.googleAnalyticsCategory,
\t\t\t\t\t\tplayer.options.googleAnalyticsEventPause,
\t\t\t\t\t\tplayer.options.googleAnalyticsTitle || media.title || player.currentSrc
\t\t\t\t    );
\t\t\t\t}, false);

\t\t\tmedia.addEventListener('ended', function() {
\t\t\t\twdn_ga.callTrackEvent(
\t\t\t\t\t\tplayer.options.googleAnalyticsCategory,
\t\t\t\t\t\tplayer.options.googleAnalyticsEventEnded,
\t\t\t\t\t\tplayer.options.googleAnalyticsTitle || media.title || player.currentSrc
\t\t\t\t    );
\t\t\t\t}, false);
\t\t}
\t});
});
", "wdn/templates_5.2/js/plugins/mediaelement/mep-feature-googleanalytics.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/plugins/mediaelement/mep-feature-googleanalytics.js");
    }
}
