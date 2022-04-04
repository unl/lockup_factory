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

/* wdn/templates_4.1/scripts/compressed/plugins/hoverIntent/jquery.hoverIntent.js */
class __TwigTemplate_bd8f68e552af0928771cebf6a2355681 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/hoverIntent/jquery.hoverIntent.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/hoverIntent/jquery.hoverIntent.js"));

        // line 1
        echo "!function(e){\"function\"==typeof define&&define.amd?define([\"jquery\"],e):e(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(e){e.fn.hoverIntent=function(t,n,o){var r={interval:100,sensitivity:6,timeout:0};r=\"object\"==typeof t?e.extend(r,t):e.isFunction(n)?e.extend(r,{over:t,out:n,selector:o}):e.extend(r,{over:t,out:t,selector:n});var u,i,v,s,f=function(e){u=e.pageX,i=e.pageY},h=function(t,n){if(n.hoverIntent_t=clearTimeout(n.hoverIntent_t),Math.sqrt((v-u)*(v-u)+(s-i)*(s-i))<r.sensitivity)return e(n).off(\"mousemove.hoverIntent\",f),n.hoverIntent_s=!0,r.over.apply(n,[t]);v=u,s=i,n.hoverIntent_t=setTimeout(function(){h(t,n)},r.interval)},c=function(e,t){return t.hoverIntent_t=clearTimeout(t.hoverIntent_t),t.hoverIntent_s=!1,r.out.apply(t,[e])},m=function(t){var n=e.extend({},t),o=this;o.hoverIntent_t&&(o.hoverIntent_t=clearTimeout(o.hoverIntent_t)),\"mouseenter\"===t.type?(v=n.pageX,s=n.pageY,e(o).on(\"mousemove.hoverIntent\",f),o.hoverIntent_s||(o.hoverIntent_t=setTimeout(function(){h(n,o)},r.interval))):(e(o).off(\"mousemove.hoverIntent\",f),o.hoverIntent_s&&(o.hoverIntent_t=setTimeout(function(){c(n,o)},r.timeout)))};return this.on({\"mouseenter.hoverIntent\":m,\"mouseleave.hoverIntent\":m},r.selector)}});
//# sourceMappingURL=jquery.hoverIntent.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/hoverIntent/jquery.hoverIntent.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e){\"function\"==typeof define&&define.amd?define([\"jquery\"],e):e(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(e){e.fn.hoverIntent=function(t,n,o){var r={interval:100,sensitivity:6,timeout:0};r=\"object\"==typeof t?e.extend(r,t):e.isFunction(n)?e.extend(r,{over:t,out:n,selector:o}):e.extend(r,{over:t,out:t,selector:n});var u,i,v,s,f=function(e){u=e.pageX,i=e.pageY},h=function(t,n){if(n.hoverIntent_t=clearTimeout(n.hoverIntent_t),Math.sqrt((v-u)*(v-u)+(s-i)*(s-i))<r.sensitivity)return e(n).off(\"mousemove.hoverIntent\",f),n.hoverIntent_s=!0,r.over.apply(n,[t]);v=u,s=i,n.hoverIntent_t=setTimeout(function(){h(t,n)},r.interval)},c=function(e,t){return t.hoverIntent_t=clearTimeout(t.hoverIntent_t),t.hoverIntent_s=!1,r.out.apply(t,[e])},m=function(t){var n=e.extend({},t),o=this;o.hoverIntent_t&&(o.hoverIntent_t=clearTimeout(o.hoverIntent_t)),\"mouseenter\"===t.type?(v=n.pageX,s=n.pageY,e(o).on(\"mousemove.hoverIntent\",f),o.hoverIntent_s||(o.hoverIntent_t=setTimeout(function(){h(n,o)},r.interval))):(e(o).off(\"mousemove.hoverIntent\",f),o.hoverIntent_s&&(o.hoverIntent_t=setTimeout(function(){c(n,o)},r.timeout)))};return this.on({\"mouseenter.hoverIntent\":m,\"mouseleave.hoverIntent\":m},r.selector)}});
//# sourceMappingURL=jquery.hoverIntent.js.map", "wdn/templates_4.1/scripts/compressed/plugins/hoverIntent/jquery.hoverIntent.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/hoverIntent/jquery.hoverIntent.js");
    }
}
