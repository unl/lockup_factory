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

/* wdn/templates_5.0/js/compressed/notice.js */
class __TwigTemplate_ed1b1e0d163fa060b6baedc71d48ae89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/notice.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/notice.js"));

        // line 1
        echo "define(\"require-css/css!js-css/notices\",[],function(){}),define(\"notice\",[\"jquery\",\"css!js-css/notices.css\"],function(e){var n=!1,t=function(e){e.fadeOut(\"slow\",function(){e.remove()})},a={initialize:function(){n||(e(document).on(\"click\",\".wdn_notice .close\",function(){return t(e(this).closest(\".wdn_notice\")),!1}),n=!0),e(a.launch)},launch:function(){e(\".wdn_notice\").each(function(){var n,a,s=e(this),o=!1;n=\"overlay-header\",(\"header\"===s.data(\"overlay\")||s.is(\".\"+n))&&(o=!0,s.addClass(\"overlay\").removeClass(n),e(\"#header\").append(s)),n=\"overlay-maincontent\",o||\"maincontent\"!==s.data(\"overlay\")&&!s.is(\".\"+n)||(o=!0,s.addClass(\"overlay\").removeClass(n),e(\"#maincontent\").prepend(s)),(s.data(\"duration\")||s.is(\"[class*=duration-]\"))&&(a=1e3*s.data(\"duration\"),(isNaN(a)||a<1)&&e.each(s[0].classList||s[0].className.split(/\\s+/),function(e,n){var t=n.match(new RegExp(\"^duration-(.+)\$\"));if(t)return a=1e3*t[1],!1}),(isNaN(a)||a<1)&&(a=1e3),setTimeout(function(){t(s)},a))})}};return a}),function(e){var n=document,t=\"appendChild\",a=\"styleSheet\",s=n.createElement(\"style\");s.type=\"text/css\",n.getElementsByTagName(\"head\")[0][t](s),s[a]?s[a].cssText=e:s[t](n.createTextNode(e))}(\".wdn_notice{background-color:#10669d;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/information.svg);background-position:1em 50%;background-repeat:no-repeat;background-size:1.78em;border-radius:2px;-webkit-box-shadow:0 1px 1px 0 rgba(36,36,35,.5);box-shadow:0 1px 1px 0 rgba(36,36,35,.5);margin-bottom:1em;padding:1em}.wdn_notice.affirm{background-color:#008325;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/check-circle-2.svg)}.wdn_notice.negate{background-color:#b60000;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/cross-bubble.svg)}.wdn_notice.alert{background-color:#e72c0c;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/alert-2.svg)}.wdn_notice,.wdn_notice a,.wdn_notice a:hover{color:#fefdfa}.wdn_notice .message{padding-left:3.16em;padding-right:1.33em}.wdn_notice .message *{color:inherit;margin:0}.wdn_notice .message .title,.wdn_notice .message h4{font-family:Gotham SSm A,Gotham SSm B,Verdana,sans-serif;letter-spacing:.01em;line-height:1.33;text-transform:uppercase}.wdn_notice .close{float:right}.wdn_notice .close a,.wdn_notice .close a:hover{background:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/delete-1.svg) 50% 50%/contain no-repeat;display:block;height:1em;position:relative;text-decoration:none;text-indent:-9999em;width:1em;z-index:1}.wdn_notice.overlay{left:5.62vw;margin-left:auto;margin-right:auto;max-width:56.12em;position:absolute;right:5.62vw;text-align:left;top:3.16em;z-index:999}\");
//# sourceMappingURL=notice.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/notice.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(\"require-css/css!js-css/notices\",[],function(){}),define(\"notice\",[\"jquery\",\"css!js-css/notices.css\"],function(e){var n=!1,t=function(e){e.fadeOut(\"slow\",function(){e.remove()})},a={initialize:function(){n||(e(document).on(\"click\",\".wdn_notice .close\",function(){return t(e(this).closest(\".wdn_notice\")),!1}),n=!0),e(a.launch)},launch:function(){e(\".wdn_notice\").each(function(){var n,a,s=e(this),o=!1;n=\"overlay-header\",(\"header\"===s.data(\"overlay\")||s.is(\".\"+n))&&(o=!0,s.addClass(\"overlay\").removeClass(n),e(\"#header\").append(s)),n=\"overlay-maincontent\",o||\"maincontent\"!==s.data(\"overlay\")&&!s.is(\".\"+n)||(o=!0,s.addClass(\"overlay\").removeClass(n),e(\"#maincontent\").prepend(s)),(s.data(\"duration\")||s.is(\"[class*=duration-]\"))&&(a=1e3*s.data(\"duration\"),(isNaN(a)||a<1)&&e.each(s[0].classList||s[0].className.split(/\\s+/),function(e,n){var t=n.match(new RegExp(\"^duration-(.+)\$\"));if(t)return a=1e3*t[1],!1}),(isNaN(a)||a<1)&&(a=1e3),setTimeout(function(){t(s)},a))})}};return a}),function(e){var n=document,t=\"appendChild\",a=\"styleSheet\",s=n.createElement(\"style\");s.type=\"text/css\",n.getElementsByTagName(\"head\")[0][t](s),s[a]?s[a].cssText=e:s[t](n.createTextNode(e))}(\".wdn_notice{background-color:#10669d;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/information.svg);background-position:1em 50%;background-repeat:no-repeat;background-size:1.78em;border-radius:2px;-webkit-box-shadow:0 1px 1px 0 rgba(36,36,35,.5);box-shadow:0 1px 1px 0 rgba(36,36,35,.5);margin-bottom:1em;padding:1em}.wdn_notice.affirm{background-color:#008325;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/check-circle-2.svg)}.wdn_notice.negate{background-color:#b60000;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/cross-bubble.svg)}.wdn_notice.alert{background-color:#e72c0c;background-image:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/alert-2.svg)}.wdn_notice,.wdn_notice a,.wdn_notice a:hover{color:#fefdfa}.wdn_notice .message{padding-left:3.16em;padding-right:1.33em}.wdn_notice .message *{color:inherit;margin:0}.wdn_notice .message .title,.wdn_notice .message h4{font-family:Gotham SSm A,Gotham SSm B,Verdana,sans-serif;letter-spacing:.01em;line-height:1.33;text-transform:uppercase}.wdn_notice .close{float:right}.wdn_notice .close a,.wdn_notice .close a:hover{background:url(https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/delete-1.svg) 50% 50%/contain no-repeat;display:block;height:1em;position:relative;text-decoration:none;text-indent:-9999em;width:1em;z-index:1}.wdn_notice.overlay{left:5.62vw;margin-left:auto;margin-right:auto;max-width:56.12em;position:absolute;right:5.62vw;text-align:left;top:3.16em;z-index:999}\");
//# sourceMappingURL=notice.js.map", "wdn/templates_5.0/js/compressed/notice.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/notice.js");
    }
}
