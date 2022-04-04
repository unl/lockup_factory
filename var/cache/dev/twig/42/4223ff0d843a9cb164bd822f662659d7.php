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

/* wdn/templates_4.1/scripts/js-css/events.css */
class __TwigTemplate_3ec9dcdaed9a88c5cec1d6e68c7213f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/events.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/events.css"));

        // line 1
        echo ".wdn-calendar .upcoming-header{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;text-transform:uppercase;letter-spacing:.02em;margin-bottom:1em;padding-bottom:.339em;border-bottom:1px solid #d5d5d2}.wdn-calendar .upcoming-header:before{font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;content:'\\e810';color:#c1c0be;padding-right:.254em}.wdn-calendar .event{display:flex;flex-flow:row nowrap;width:100%;margin-bottom:.75em}.wdn-calendar .event .date{flex:0 1 auto;display:flex;flex-flow:column wrap;justify-content:center;width:4.499em;text-align:center;margin-right:.75em;border-right:1px solid #d5d5d2}.wdn-calendar .event .date .day,.wdn-calendar .event .date .month,.wdn-calendar .event .date .time{display:block;line-height:1}.wdn-calendar .event .date .month,.wdn-calendar .event .date .time{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.7015rem;text-transform:uppercase}.wdn-calendar .event .date .month{padding-bottom:.178em}.wdn-calendar .event .date .day{font-family:'Tungsten A','Tungsten B','Arial Narrow',Arial,sans-serif;font-weight:600;font-style:normal;font-size:1.777rem;padding-bottom:.134em}.wdn-calendar .event .info{flex:1 0 80%;display:flex;flex-flow:column wrap;justify-content:center}.wdn-calendar .event .info .location,.wdn-calendar .event .info .title{display:block}.wdn-calendar .event .info .title{line-height:1.333;padding-bottom:.254em}.wdn-calendar .event .info .location{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.7015rem}.wdn-calendar .see-all{display:block;font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.75rem;margin:1em 0}.wdn-calendar .feeds a{position:relative;display:inline-block;margin-right:.75em;padding-left:1em;border:none;font-family:'Tungsten A','Tungsten B','Arial Narrow',Arial,sans-serif;font-weight:400;font-style:normal;text-transform:uppercase;font-size:1.247rem;letter-spacing:.02em}.wdn-calendar .feeds a:before{position:absolute;top:3px;left:-.1em;font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;font-size:.9353rem;color:#c1c0be}.wdn-calendar .feeds a.ics:before{content:'\\e812'}.wdn-calendar .feeds a.rss:before{content:'\\e811'}.wdn-calendar thead{display:none}.wdn-calendar .vevent .description{display:none}.wdn-calendar .upcoming tr{background:0 0}.wdn-calendar .upcoming tr td{text-align:left;border:none}.wdn-calendar .upcoming tr td.date{font-family:'Tungsten A','Tungsten B','Arial Narrow',Arial,sans-serif;font-weight:400;font-style:normal;text-align:center;text-transform:uppercase;vertical-align:top;line-height:1;width:4em}.wdn-calendar .upcoming tr td .month{text-transform:uppercase;display:block;padding-right:5px}.wdn-calendar .upcoming tr td .day{font-size:1.4em;line-height:1.1;display:block;padding-right:5px;color:#444}.wdn-calendar .upcoming tr td .month,.wdn-calendar .upcoming tr td .time,.wdn-calendar .upcoming tr td .year{color:rgba(69,62,43,.75)}.wdn-calendar .upcoming tr td .time,.wdn-calendar .upcoming tr td .year{display:block;font-size:.8em;padding-right:5px}.wdn-calendar .upcoming tr td .location,.wdn-calendar .upcoming tr td .summary{border-left:#777 solid 2px;border-bottom:none;padding-left:5px;display:block;font-size:.9em;line-height:130%}.wdn-calendar .upcoming tr td .location{font-size:75%;display:block;color:#38764c;text-transform:uppercase}.wdn-calendar .upcoming tr td .mapurl{display:block;color:#38764c;border-bottom:none}.wdn-calendar .vcalendar tr td{padding:7px 0}@media (min-width:48em){.wdn-calendar .upcoming-header{font-size:.802rem}.wdn-calendar .event .date .month,.wdn-calendar .event .date .time{font-size:.602rem}.wdn-calendar .event .info .location{font-size:.602rem}.wdn-calendar .feeds a{font-size:1.333rem}.wdn-calendar .feeds a:before{font-size:.802rem}}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/js-css/events.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wdn-calendar .upcoming-header{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;text-transform:uppercase;letter-spacing:.02em;margin-bottom:1em;padding-bottom:.339em;border-bottom:1px solid #d5d5d2}.wdn-calendar .upcoming-header:before{font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;content:'\\e810';color:#c1c0be;padding-right:.254em}.wdn-calendar .event{display:flex;flex-flow:row nowrap;width:100%;margin-bottom:.75em}.wdn-calendar .event .date{flex:0 1 auto;display:flex;flex-flow:column wrap;justify-content:center;width:4.499em;text-align:center;margin-right:.75em;border-right:1px solid #d5d5d2}.wdn-calendar .event .date .day,.wdn-calendar .event .date .month,.wdn-calendar .event .date .time{display:block;line-height:1}.wdn-calendar .event .date .month,.wdn-calendar .event .date .time{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.7015rem;text-transform:uppercase}.wdn-calendar .event .date .month{padding-bottom:.178em}.wdn-calendar .event .date .day{font-family:'Tungsten A','Tungsten B','Arial Narrow',Arial,sans-serif;font-weight:600;font-style:normal;font-size:1.777rem;padding-bottom:.134em}.wdn-calendar .event .info{flex:1 0 80%;display:flex;flex-flow:column wrap;justify-content:center}.wdn-calendar .event .info .location,.wdn-calendar .event .info .title{display:block}.wdn-calendar .event .info .title{line-height:1.333;padding-bottom:.254em}.wdn-calendar .event .info .location{font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.7015rem}.wdn-calendar .see-all{display:block;font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.75rem;margin:1em 0}.wdn-calendar .feeds a{position:relative;display:inline-block;margin-right:.75em;padding-left:1em;border:none;font-family:'Tungsten A','Tungsten B','Arial Narrow',Arial,sans-serif;font-weight:400;font-style:normal;text-transform:uppercase;font-size:1.247rem;letter-spacing:.02em}.wdn-calendar .feeds a:before{position:absolute;top:3px;left:-.1em;font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;font-size:.9353rem;color:#c1c0be}.wdn-calendar .feeds a.ics:before{content:'\\e812'}.wdn-calendar .feeds a.rss:before{content:'\\e811'}.wdn-calendar thead{display:none}.wdn-calendar .vevent .description{display:none}.wdn-calendar .upcoming tr{background:0 0}.wdn-calendar .upcoming tr td{text-align:left;border:none}.wdn-calendar .upcoming tr td.date{font-family:'Tungsten A','Tungsten B','Arial Narrow',Arial,sans-serif;font-weight:400;font-style:normal;text-align:center;text-transform:uppercase;vertical-align:top;line-height:1;width:4em}.wdn-calendar .upcoming tr td .month{text-transform:uppercase;display:block;padding-right:5px}.wdn-calendar .upcoming tr td .day{font-size:1.4em;line-height:1.1;display:block;padding-right:5px;color:#444}.wdn-calendar .upcoming tr td .month,.wdn-calendar .upcoming tr td .time,.wdn-calendar .upcoming tr td .year{color:rgba(69,62,43,.75)}.wdn-calendar .upcoming tr td .time,.wdn-calendar .upcoming tr td .year{display:block;font-size:.8em;padding-right:5px}.wdn-calendar .upcoming tr td .location,.wdn-calendar .upcoming tr td .summary{border-left:#777 solid 2px;border-bottom:none;padding-left:5px;display:block;font-size:.9em;line-height:130%}.wdn-calendar .upcoming tr td .location{font-size:75%;display:block;color:#38764c;text-transform:uppercase}.wdn-calendar .upcoming tr td .mapurl{display:block;color:#38764c;border-bottom:none}.wdn-calendar .vcalendar tr td{padding:7px 0}@media (min-width:48em){.wdn-calendar .upcoming-header{font-size:.802rem}.wdn-calendar .event .date .month,.wdn-calendar .event .date .time{font-size:.602rem}.wdn-calendar .event .info .location{font-size:.602rem}.wdn-calendar .feeds a{font-size:1.333rem}.wdn-calendar .feeds a:before{font-size:.802rem}}", "wdn/templates_4.1/scripts/js-css/events.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/js-css/events.css");
    }
}