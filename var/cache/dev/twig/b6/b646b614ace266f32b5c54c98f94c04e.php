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

/* wdn/templates_5.3/js/compressed/dropdown-widget.js */
class __TwigTemplate_848315c0eb15fb55a20cabc14d6911ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dropdown-widget.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dropdown-widget.js"));

        // line 1
        echo "define([],function(){\"use strict\";function t(t,e){this.container=t,this.type=e||null,this.button=this.container.querySelector('button[aria-expanded=\"false\"]');var n=this.button.getAttribute(\"aria-controls\");this.controls=n?document.getElementById(n):this.button.nextElementSibling,this.focusTarget=this.controls.querySelector(\"h2, a, button\"),this.focusTarget.setAttribute(\"tabindex\",\"0\"),document.addEventListener(\"closeDropDownWidget\",function(t){this.type==t.detail.type&&this.isExpanded()&&this.close()}.bind(this)),this.button.addEventListener(\"click\",function(t){this.toggle()}.bind(this)),document.addEventListener(\"keydown\",function(t){27===t.keyCode&&this.close()}.bind(this))}return t.prototype.open=function(){this.button.setAttribute(\"aria-expanded\",\"true\"),this.controls.hidden=!1,this.focusTarget.focus();var t=new CustomEvent(\"openDropDownWidget\",{detail:{type:this.type}});document.dispatchEvent(t)},t.prototype.close=function(){this.button.setAttribute(\"aria-expanded\",\"false\"),this.controls.hidden=!0,document.activeElement&&this.controls.contains(document.activeElement)&&this.button.focus()},t.prototype.toggle=function(){this.isExpanded()?this.close():this.open()},t.prototype.isExpanded=function(){return\"true\"===this.button.getAttribute(\"aria-expanded\")},t});
//# sourceMappingURL=dropdown-widget.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dropdown-widget.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([],function(){\"use strict\";function t(t,e){this.container=t,this.type=e||null,this.button=this.container.querySelector('button[aria-expanded=\"false\"]');var n=this.button.getAttribute(\"aria-controls\");this.controls=n?document.getElementById(n):this.button.nextElementSibling,this.focusTarget=this.controls.querySelector(\"h2, a, button\"),this.focusTarget.setAttribute(\"tabindex\",\"0\"),document.addEventListener(\"closeDropDownWidget\",function(t){this.type==t.detail.type&&this.isExpanded()&&this.close()}.bind(this)),this.button.addEventListener(\"click\",function(t){this.toggle()}.bind(this)),document.addEventListener(\"keydown\",function(t){27===t.keyCode&&this.close()}.bind(this))}return t.prototype.open=function(){this.button.setAttribute(\"aria-expanded\",\"true\"),this.controls.hidden=!1,this.focusTarget.focus();var t=new CustomEvent(\"openDropDownWidget\",{detail:{type:this.type}});document.dispatchEvent(t)},t.prototype.close=function(){this.button.setAttribute(\"aria-expanded\",\"false\"),this.controls.hidden=!0,document.activeElement&&this.controls.contains(document.activeElement)&&this.button.focus()},t.prototype.toggle=function(){this.isExpanded()?this.close():this.open()},t.prototype.isExpanded=function(){return\"true\"===this.button.getAttribute(\"aria-expanded\")},t});
//# sourceMappingURL=dropdown-widget.js.map", "wdn/templates_5.3/js/compressed/dropdown-widget.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dropdown-widget.js");
    }
}
