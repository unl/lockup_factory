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

/* wdn/templates_4.1/scripts/js-css/monthwidget.css */
class __TwigTemplate_259b9a448fc1f47188292331f5449e28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/monthwidget.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/monthwidget.css"));

        // line 1
        echo ".wp-calendar{border-collapse:collapse;border-width:0 1px;border-style:solid;border-color:#d5d5d2}.wp-calendar a{border:none}.wp-calendar a:hover{text-decoration:underline}.wp-calendar th{padding:1.069em 1px 1em;background-color:#eee}.wp-calendar td,.wp-calendar th{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;line-height:1;text-align:center;border:1px solid #d5d5d2}.wp-calendar td{padding:0}.wp-calendar td a,.wp-calendar td span{display:block;padding:1.069em 1px 1em}.wp-calendar td.selected{background:#fff}.wp-calendar td.next,.wp-calendar td.prev{background-color:#f7f7f7}.wp-calendar td.next a,.wp-calendar td.prev a{font-size:.7015rem;padding:14px 1px}.wp-calendar td a:hover{text-decoration:none;outline:2px solid #d00000}.wp-calendar td.today{background:#d00000;color:#fff}.wp-calendar td.today a{color:inherit}.wp-calendar td.today .eventContainer .eventBox a{color:#d00000}.wp-calendar td>div{position:relative}.wp-calendar td .eventContainer{position:absolute;top:0;right:-227px;width:227px;z-index:1;word-break:normal}.wp-calendar td .eventContainer:before{border-color:transparent #474746;border-width:6px 6px 6px 0;border-style:solid;content:' ';height:0;display:block;position:absolute;left:-6px;top:6px}.wp-calendar td .eventContainer .eventBox{text-align:left;background:#fff;padding-bottom:1em;box-shadow:0 0 3px 0 #848482}.wp-calendar td .eventContainer .eventBox h1{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.7015rem;text-transform:uppercase;padding:.75em 1em;margin:0;color:#fff;background:#474746}.wp-calendar td .eventContainer .eventBox a{display:block;padding:.75em 1em 0 1em;font-size:.7015rem;line-height:1.333}.wp-calendar td .eventContainer .eventBox a:hover{outline:0}.wp-calendar td .eventContainer .eventBox a:last-child{border:none}.wp-calendar td .eventContainer.pos2{right:auto;left:-225px}.wp-calendar td .eventContainer.pos2:before{border-color:transparent transparent transparent #474746;border-width:6px 0 6px 6px;left:auto;right:-6px}.wp-calendar caption{margin:0;padding:1.069em 1em 1em;font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;text-transform:uppercase;text-align:center;color:#fff;background-color:#474746}.wp-calendar caption>:first-child{float:left}.wp-calendar caption>:last-child{float:right}.wp-calendar caption a{color:#fff}.wp-calendar caption a.next,.wp-calendar caption a.prev{font-size:0;display:inline-block;text-decoration:none}.wp-calendar caption a.next:before,.wp-calendar caption a.prev:after{font-size:1.247rem;margin-right:.2em;font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;text-align:center;font-variant:normal;text-transform:none;line-height:1em}.wp-calendar caption a.prev:after{content:'\\e80a'}.wp-calendar caption a.next:before{content:'\\e808'}@media (min-width:48em){.wp-calendar td,.wp-calendar th{font-size:.802rem}.wp-calendar td.next a,.wp-calendar td.prev a{font-size:.602rem}.wp-calendar td .eventContainer .eventBox a,.wp-calendar td .eventContainer .eventBox h1{font-size:.602rem}.wp-calendar caption{font-size:.802rem}.wp-calendar caption a.next:before,.wp-calendar caption a.prev:after{font-size:1rem}}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/js-css/monthwidget.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wp-calendar{border-collapse:collapse;border-width:0 1px;border-style:solid;border-color:#d5d5d2}.wp-calendar a{border:none}.wp-calendar a:hover{text-decoration:underline}.wp-calendar th{padding:1.069em 1px 1em;background-color:#eee}.wp-calendar td,.wp-calendar th{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;line-height:1;text-align:center;border:1px solid #d5d5d2}.wp-calendar td{padding:0}.wp-calendar td a,.wp-calendar td span{display:block;padding:1.069em 1px 1em}.wp-calendar td.selected{background:#fff}.wp-calendar td.next,.wp-calendar td.prev{background-color:#f7f7f7}.wp-calendar td.next a,.wp-calendar td.prev a{font-size:.7015rem;padding:14px 1px}.wp-calendar td a:hover{text-decoration:none;outline:2px solid #d00000}.wp-calendar td.today{background:#d00000;color:#fff}.wp-calendar td.today a{color:inherit}.wp-calendar td.today .eventContainer .eventBox a{color:#d00000}.wp-calendar td>div{position:relative}.wp-calendar td .eventContainer{position:absolute;top:0;right:-227px;width:227px;z-index:1;word-break:normal}.wp-calendar td .eventContainer:before{border-color:transparent #474746;border-width:6px 6px 6px 0;border-style:solid;content:' ';height:0;display:block;position:absolute;left:-6px;top:6px}.wp-calendar td .eventContainer .eventBox{text-align:left;background:#fff;padding-bottom:1em;box-shadow:0 0 3px 0 #848482}.wp-calendar td .eventContainer .eventBox h1{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.7015rem;text-transform:uppercase;padding:.75em 1em;margin:0;color:#fff;background:#474746}.wp-calendar td .eventContainer .eventBox a{display:block;padding:.75em 1em 0 1em;font-size:.7015rem;line-height:1.333}.wp-calendar td .eventContainer .eventBox a:hover{outline:0}.wp-calendar td .eventContainer .eventBox a:last-child{border:none}.wp-calendar td .eventContainer.pos2{right:auto;left:-225px}.wp-calendar td .eventContainer.pos2:before{border-color:transparent transparent transparent #474746;border-width:6px 0 6px 6px;left:auto;right:-6px}.wp-calendar caption{margin:0;padding:1.069em 1em 1em;font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;text-transform:uppercase;text-align:center;color:#fff;background-color:#474746}.wp-calendar caption>:first-child{float:left}.wp-calendar caption>:last-child{float:right}.wp-calendar caption a{color:#fff}.wp-calendar caption a.next,.wp-calendar caption a.prev{font-size:0;display:inline-block;text-decoration:none}.wp-calendar caption a.next:before,.wp-calendar caption a.prev:after{font-size:1.247rem;margin-right:.2em;font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;text-align:center;font-variant:normal;text-transform:none;line-height:1em}.wp-calendar caption a.prev:after{content:'\\e80a'}.wp-calendar caption a.next:before{content:'\\e808'}@media (min-width:48em){.wp-calendar td,.wp-calendar th{font-size:.802rem}.wp-calendar td.next a,.wp-calendar td.prev a{font-size:.602rem}.wp-calendar td .eventContainer .eventBox a,.wp-calendar td .eventContainer .eventBox h1{font-size:.602rem}.wp-calendar caption{font-size:.802rem}.wp-calendar caption a.next:before,.wp-calendar caption a.prev:after{font-size:1rem}}", "wdn/templates_4.1/scripts/js-css/monthwidget.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/js-css/monthwidget.css");
    }
}
