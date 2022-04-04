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

/* wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mep-feature-googleanalytics.js.map */
class __TwigTemplate_399226e7bc2a7b8f66d8941982567bb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mep-feature-googleanalytics.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mep-feature-googleanalytics.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"mejs\",\"\$\",\"wdn_ga\",\"extend\",\"MepDefaults\",\"googleAnalyticsTitle\",\"googleAnalyticsCategory\",\"googleAnalyticsEventPlay\",\"googleAnalyticsEventPause\",\"googleAnalyticsEventEnded\",\"googleAnalyticsEventTime\",\"MediaElementPlayer\",\"prototype\",\"buildgoogleanalytics\",\"player\",\"controls\",\"layers\",\"media\",\"addEventListener\",\"callTrackEvent\",\"options\",\"title\",\"currentSrc\"],\"mappings\":\"AAAAA,QAAQ,+CAAgD,SAAU,aAAc,SAASC,EAAMC,EAAGC,GACjGD,EAAEE,OAAOH,EAAKI,aACbC,qBAAsB,GACtBC,wBAAyB,QACzBC,yBAA0B,OAC1BC,0BAA2B,QAC3BC,0BAA2B,QAC3BC,yBAA0B,SAG3BT,EAAEE,OAAOQ,mBAAmBC,WAC3BC,qBAAsB,SAASC,EAAQC,EAAUC,EAAQC,GAExDA,EAAMC,iBAAiB,OAAQ,WAC9BhB,EAAOiB,eACNL,EAAOM,QAAQd,wBACfQ,EAAOM,QAAQb,yBACfO,EAAOM,QAAQf,sBAAwBY,EAAMI,OAASP,EAAOQ,cAE5D,GAEHL,EAAMC,iBAAiB,QAAS,WAC/BhB,EAAOiB,eACLL,EAAOM,QAAQd,wBACfQ,EAAOM,QAAQZ,0BACfM,EAAOM,QAAQf,sBAAwBY,EAAMI,OAASP,EAAOQ,cAE5D,GAEJL,EAAMC,iBAAiB,QAAS,WAC/BhB,EAAOiB,eACLL,EAAOM,QAAQd,wBACfQ,EAAOM,QAAQX,0BACfK,EAAOM,QAAQf,sBAAwBY,EAAMI,OAASP,EAAOQ,cAE5D\",\"file\":\"mep-feature-googleanalytics.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mep-feature-googleanalytics.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"mejs\",\"\$\",\"wdn_ga\",\"extend\",\"MepDefaults\",\"googleAnalyticsTitle\",\"googleAnalyticsCategory\",\"googleAnalyticsEventPlay\",\"googleAnalyticsEventPause\",\"googleAnalyticsEventEnded\",\"googleAnalyticsEventTime\",\"MediaElementPlayer\",\"prototype\",\"buildgoogleanalytics\",\"player\",\"controls\",\"layers\",\"media\",\"addEventListener\",\"callTrackEvent\",\"options\",\"title\",\"currentSrc\"],\"mappings\":\"AAAAA,QAAQ,+CAAgD,SAAU,aAAc,SAASC,EAAMC,EAAGC,GACjGD,EAAEE,OAAOH,EAAKI,aACbC,qBAAsB,GACtBC,wBAAyB,QACzBC,yBAA0B,OAC1BC,0BAA2B,QAC3BC,0BAA2B,QAC3BC,yBAA0B,SAG3BT,EAAEE,OAAOQ,mBAAmBC,WAC3BC,qBAAsB,SAASC,EAAQC,EAAUC,EAAQC,GAExDA,EAAMC,iBAAiB,OAAQ,WAC9BhB,EAAOiB,eACNL,EAAOM,QAAQd,wBACfQ,EAAOM,QAAQb,yBACfO,EAAOM,QAAQf,sBAAwBY,EAAMI,OAASP,EAAOQ,cAE5D,GAEHL,EAAMC,iBAAiB,QAAS,WAC/BhB,EAAOiB,eACLL,EAAOM,QAAQd,wBACfQ,EAAOM,QAAQZ,0BACfM,EAAOM,QAAQf,sBAAwBY,EAAMI,OAASP,EAAOQ,cAE5D,GAEJL,EAAMC,iBAAiB,QAAS,WAC/BhB,EAAOiB,eACLL,EAAOM,QAAQd,wBACfQ,EAAOM,QAAQX,0BACfK,EAAOM,QAAQf,sBAAwBY,EAAMI,OAASP,EAAOQ,cAE5D\",\"file\":\"mep-feature-googleanalytics.js\"}", "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mep-feature-googleanalytics.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mep-feature-googleanalytics.js.map");
    }
}
