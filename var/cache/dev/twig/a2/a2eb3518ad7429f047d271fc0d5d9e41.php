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

/* wdn/templates_5.3/js/compressed/plugins/hoverIntent/hoverintent.js */
class __TwigTemplate_625a15dcb55f2a8d24c4c979c50fab0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/hoverIntent/hoverintent.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/hoverIntent/hoverintent.js"));

        // line 1
        echo "!function(e){\"use strict\";var t=function(e,t,n){function i(e,t){return d&&(d=clearTimeout(d)),f=0,n.call(e,t)}function o(e){m=e.clientX,v=e.clientY}function u(e,n){if(d&&(d=clearTimeout(d)),Math.abs(c-m)+Math.abs(a-v)<E.sensitivity)return f=1,t.call(e,n);c=m,a=v,d=setTimeout(function(){u(e,n)},E.interval)}function r(t){return d&&(d=clearTimeout(d)),e.removeEventListener(\"mousemove\",o,!1),1!==f&&(c=t.clientX,a=t.clientY,e.addEventListener(\"mousemove\",o,!1),d=setTimeout(function(){u(e,t)},E.interval)),this}function s(t){return d&&(d=clearTimeout(d)),e.removeEventListener(\"mousemove\",o,!1),1===f&&(d=setTimeout(function(){i(e,t)},E.timeout)),this}var m,v,c,a,l={},f=0,d=0,E={sensitivity:7,interval:100,timeout:0};return l.options=function(e){return E=Object.assign({},E,e),l},l.remove=function(){e&&(e.removeEventListener(\"mouseover\",r,!1),e.removeEventListener(\"mouseout\",s,!1))},e&&(e.addEventListener(\"mouseover\",r,!1),e.addEventListener(\"mouseout\",s,!1)),l};e.hoverintent=t,\"undefined\"!=typeof module&&module.exports&&(module.exports=t)}(this);
//# sourceMappingURL=hoverintent.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/hoverIntent/hoverintent.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e){\"use strict\";var t=function(e,t,n){function i(e,t){return d&&(d=clearTimeout(d)),f=0,n.call(e,t)}function o(e){m=e.clientX,v=e.clientY}function u(e,n){if(d&&(d=clearTimeout(d)),Math.abs(c-m)+Math.abs(a-v)<E.sensitivity)return f=1,t.call(e,n);c=m,a=v,d=setTimeout(function(){u(e,n)},E.interval)}function r(t){return d&&(d=clearTimeout(d)),e.removeEventListener(\"mousemove\",o,!1),1!==f&&(c=t.clientX,a=t.clientY,e.addEventListener(\"mousemove\",o,!1),d=setTimeout(function(){u(e,t)},E.interval)),this}function s(t){return d&&(d=clearTimeout(d)),e.removeEventListener(\"mousemove\",o,!1),1===f&&(d=setTimeout(function(){i(e,t)},E.timeout)),this}var m,v,c,a,l={},f=0,d=0,E={sensitivity:7,interval:100,timeout:0};return l.options=function(e){return E=Object.assign({},E,e),l},l.remove=function(){e&&(e.removeEventListener(\"mouseover\",r,!1),e.removeEventListener(\"mouseout\",s,!1))},e&&(e.addEventListener(\"mouseover\",r,!1),e.addEventListener(\"mouseout\",s,!1)),l};e.hoverintent=t,\"undefined\"!=typeof module&&module.exports&&(module.exports=t)}(this);
//# sourceMappingURL=hoverintent.js.map", "wdn/templates_5.3/js/compressed/plugins/hoverIntent/hoverintent.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/hoverIntent/hoverintent.js");
    }
}
