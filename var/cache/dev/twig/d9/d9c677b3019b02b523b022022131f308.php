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

/* wdn/templates_4.1/scripts/js-css/notices.css */
class __TwigTemplate_460973b0cc4147ed4574bd62c48a6f1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/notices.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/notices.css"));

        // line 1
        echo ".wdn_notice{margin-bottom:1em;border-radius:3px;padding:1em 1em .75em;box-shadow:0 1px 1px 0 rgba(0,0,0,.5);background-color:#137cbd;transition:background ease-out .2s}.wdn_notice:hover{background-color:#1276b4}.wdn_notice:hover .message:before{color:#0c4e77}.wdn_notice .message:before{color:#0e5e8f}.wdn_notice .close{color:#fff}.wdn_notice .close a,.wdn_notice .close a:hover{color:#fff}.wdn_notice .message{position:relative;padding:0 0 0 4.1538em;color:#fff}@media (min-width:48em){.wdn_notice .message{padding:0 0 0 4.209em}}.wdn_notice .message *{margin:0;color:inherit}.wdn_notice .message .title,.wdn_notice .message h4{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;line-height:1.333;text-transform:uppercase;letter-spacing:.02em;font-size:inherit}.wdn_notice .message:before{position:absolute;top:.1em;left:0;width:41px;height:41px;font-size:2.369rem;line-height:normal;text-align:center;font-family:wdn-icon;content:'\\e807'}@media (min-width:48em){.wdn_notice .message:before{width:54px}}.wdn_notice.affirm{background-color:#00892c;transition:background ease-out .2s}.wdn_notice.affirm:hover{background-color:#007f29}.wdn_notice.affirm:hover .message:before{color:#003d13}.wdn_notice.affirm .message:before{color:#00561c}.wdn_notice.affirm .message:before{content:'\\e80b'}.wdn_notice.negate{background-color:#d00000;transition:background ease-out .2s}.wdn_notice.negate:hover{background-color:#c60000}.wdn_notice.negate:hover .message:before{color:#840000}.wdn_notice.negate .message:before{color:#9d0000}.wdn_notice.negate .message:before{content:'\\e805'}.wdn_notice.alert{background-color:#d4440b;transition:background ease-out .2s}.wdn_notice.alert:hover{background-color:#ca410a}.wdn_notice.alert:hover .message:before{color:#8b2d07}.wdn_notice.alert .message:before{color:#a43408}.wdn_notice.alert .message:before{content:'\\e806'}.wdn_notice .close,.wdn_notice .maximize,.wdn_notice .minimize{float:right}.wdn_notice .close:before,.wdn_notice .maximize:before,.wdn_notice .minimize:before{position:absolute;line-height:normal;font-family:wdn-icon}.wdn_notice .close a,.wdn_notice .close a:hover,.wdn_notice .maximize a,.wdn_notice .maximize a:hover,.wdn_notice .minimize a,.wdn_notice .minimize a:hover{width:16px;height:16px;text-indent:-2000em;display:block;text-decoration:none;position:relative;z-index:1}.wdn_notice .close:before{content:'\\e805'}.wdn_notice .close a,.wdn_notice .close a:hover{border:none}.wdn_notice .minimize:before{content:'\\e80d'}.wdn_notice .maximize:before{content:'\\e80c'}.wdn_notice.overlay{position:absolute;left:5%;right:5%;top:51px;margin-left:auto;margin-right:auto;max-width:50rem;z-index:202;text-align:left}@media (min-width:60em){.wdn_notice.overlay{left:0;right:0}}#maincontent>.wdn_notice.overlay{margin-left:auto;margin-right:auto;max-width:50rem}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/js-css/notices.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wdn_notice{margin-bottom:1em;border-radius:3px;padding:1em 1em .75em;box-shadow:0 1px 1px 0 rgba(0,0,0,.5);background-color:#137cbd;transition:background ease-out .2s}.wdn_notice:hover{background-color:#1276b4}.wdn_notice:hover .message:before{color:#0c4e77}.wdn_notice .message:before{color:#0e5e8f}.wdn_notice .close{color:#fff}.wdn_notice .close a,.wdn_notice .close a:hover{color:#fff}.wdn_notice .message{position:relative;padding:0 0 0 4.1538em;color:#fff}@media (min-width:48em){.wdn_notice .message{padding:0 0 0 4.209em}}.wdn_notice .message *{margin:0;color:inherit}.wdn_notice .message .title,.wdn_notice .message h4{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;line-height:1.333;text-transform:uppercase;letter-spacing:.02em;font-size:inherit}.wdn_notice .message:before{position:absolute;top:.1em;left:0;width:41px;height:41px;font-size:2.369rem;line-height:normal;text-align:center;font-family:wdn-icon;content:'\\e807'}@media (min-width:48em){.wdn_notice .message:before{width:54px}}.wdn_notice.affirm{background-color:#00892c;transition:background ease-out .2s}.wdn_notice.affirm:hover{background-color:#007f29}.wdn_notice.affirm:hover .message:before{color:#003d13}.wdn_notice.affirm .message:before{color:#00561c}.wdn_notice.affirm .message:before{content:'\\e80b'}.wdn_notice.negate{background-color:#d00000;transition:background ease-out .2s}.wdn_notice.negate:hover{background-color:#c60000}.wdn_notice.negate:hover .message:before{color:#840000}.wdn_notice.negate .message:before{color:#9d0000}.wdn_notice.negate .message:before{content:'\\e805'}.wdn_notice.alert{background-color:#d4440b;transition:background ease-out .2s}.wdn_notice.alert:hover{background-color:#ca410a}.wdn_notice.alert:hover .message:before{color:#8b2d07}.wdn_notice.alert .message:before{color:#a43408}.wdn_notice.alert .message:before{content:'\\e806'}.wdn_notice .close,.wdn_notice .maximize,.wdn_notice .minimize{float:right}.wdn_notice .close:before,.wdn_notice .maximize:before,.wdn_notice .minimize:before{position:absolute;line-height:normal;font-family:wdn-icon}.wdn_notice .close a,.wdn_notice .close a:hover,.wdn_notice .maximize a,.wdn_notice .maximize a:hover,.wdn_notice .minimize a,.wdn_notice .minimize a:hover{width:16px;height:16px;text-indent:-2000em;display:block;text-decoration:none;position:relative;z-index:1}.wdn_notice .close:before{content:'\\e805'}.wdn_notice .close a,.wdn_notice .close a:hover{border:none}.wdn_notice .minimize:before{content:'\\e80d'}.wdn_notice .maximize:before{content:'\\e80c'}.wdn_notice.overlay{position:absolute;left:5%;right:5%;top:51px;margin-left:auto;margin-right:auto;max-width:50rem;z-index:202;text-align:left}@media (min-width:60em){.wdn_notice.overlay{left:0;right:0}}#maincontent>.wdn_notice.overlay{margin-left:auto;margin-right:auto;max-width:50rem}", "wdn/templates_4.1/scripts/js-css/notices.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/js-css/notices.css");
    }
}
