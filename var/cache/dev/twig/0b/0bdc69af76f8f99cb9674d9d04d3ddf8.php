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

/* wdn/templates_4.1/css/modules/pagination.css */
class __TwigTemplate_b5eb295d7f9d2d47f4b125d477080e79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/css/modules/pagination.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/css/modules/pagination.css"));

        // line 1
        echo ".wdn_pagination:after{content:'';display:table;clear:both}.wdn_pagination li{display:block;float:left;font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;margin:.254em;vertical-align:middle}@media (min-width:48em){.wdn_pagination li{font-size:.802rem}}.wdn_pagination li a{display:block;padding:.422em .602em .317em;border:1px solid #d5d5d2;transition:border ease-out .2s}.wdn_pagination li a:active,.wdn_pagination li a:hover{color:#6a0000;border:1px solid #6a0000}.wdn_pagination li.ellipsis{padding:.422em .602em .317em}.wdn_pagination li.selected{padding:.422em .602em .317em;color:#fff;background-color:#5b5b5a;border:1px solid #5b5b5a}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/css/modules/pagination.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wdn_pagination:after{content:'';display:table;clear:both}.wdn_pagination li{display:block;float:left;font-family:'Gotham SSm A','Gotham SSm B',Verdana,sans-serif;font-weight:400;font-style:normal;font-size:.9353rem;margin:.254em;vertical-align:middle}@media (min-width:48em){.wdn_pagination li{font-size:.802rem}}.wdn_pagination li a{display:block;padding:.422em .602em .317em;border:1px solid #d5d5d2;transition:border ease-out .2s}.wdn_pagination li a:active,.wdn_pagination li a:hover{color:#6a0000;border:1px solid #6a0000}.wdn_pagination li.ellipsis{padding:.422em .602em .317em}.wdn_pagination li.selected{padding:.422em .602em .317em;color:#fff;background-color:#5b5b5a;border:1px solid #5b5b5a}", "wdn/templates_4.1/css/modules/pagination.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/css/modules/pagination.css");
    }
}
