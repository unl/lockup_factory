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

/* wdn/templates_5.3/js/compressed/plugins/mediaelement/mep-feature-googleanalytics.js */
class __TwigTemplate_670a6cb8e44b87d0370bbd3020fe6b61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/mediaelement/mep-feature-googleanalytics.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/mediaelement/mep-feature-googleanalytics.js"));

        // line 1
        echo "define([\"plugins/mediaelement/mediaelement-and-player\",\"jquery\",\"analytics\"],function(e,t,n){t.extend(e.MepDefaults,{googleAnalyticsTitle:\"\",googleAnalyticsCategory:\"Media\",googleAnalyticsEventPlay:\"Play\",googleAnalyticsEventPause:\"Pause\",googleAnalyticsEventEnded:\"Ended\",googleAnalyticsEventTime:\"Time\"}),t.extend(MediaElementPlayer.prototype,{buildgoogleanalytics:function(e,t,o,l){l.addEventListener(\"play\",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventPlay,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1),l.addEventListener(\"pause\",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventPause,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1),l.addEventListener(\"ended\",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventEnded,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1)}})});
//# sourceMappingURL=mep-feature-googleanalytics.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/mediaelement/mep-feature-googleanalytics.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"plugins/mediaelement/mediaelement-and-player\",\"jquery\",\"analytics\"],function(e,t,n){t.extend(e.MepDefaults,{googleAnalyticsTitle:\"\",googleAnalyticsCategory:\"Media\",googleAnalyticsEventPlay:\"Play\",googleAnalyticsEventPause:\"Pause\",googleAnalyticsEventEnded:\"Ended\",googleAnalyticsEventTime:\"Time\"}),t.extend(MediaElementPlayer.prototype,{buildgoogleanalytics:function(e,t,o,l){l.addEventListener(\"play\",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventPlay,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1),l.addEventListener(\"pause\",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventPause,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1),l.addEventListener(\"ended\",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventEnded,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1)}})});
//# sourceMappingURL=mep-feature-googleanalytics.js.map", "wdn/templates_5.3/js/compressed/plugins/mediaelement/mep-feature-googleanalytics.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/mediaelement/mep-feature-googleanalytics.js");
    }
}
