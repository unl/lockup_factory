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

/* wdn/templates_4.1/scripts/compressed/plugins/hashchange/jquery.hashchange.js */
class __TwigTemplate_85e184c67c1b93d0cc70201a27f522f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/hashchange/jquery.hashchange.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/hashchange/jquery.hashchange.js"));

        // line 1
        echo "!function(t){\"function\"==typeof define&&define.amd?define([\"jquery\"],t):t(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(t){\"\$:nomunge\";function n(t){return t=t||location.href,\"#\"+t.replace(/^[^#]*#?(.*)\$/,\"\$1\")}var e,o=\"hashchange\",i=document,r=t.event.special,c=i.documentMode,u=\"on\"+o in window&&(void 0===c||c>7);t.fn[o]=function(t){return t?this.bind(o,t):this.trigger(o)},t.fn[o].delay=50,r[o]=t.extend(r[o],{setup:function(){if(u)return!1;t(e.start)},teardown:function(){if(u)return!1;t(e.stop)}}),e=function(){function e(){var i=n(),c=l(f);i!==f?(d(f=i,c),t(window).trigger(o)):c!==f&&(location.href=location.href.replace(/#.*/,\"\")+c),r=setTimeout(e,t.fn[o].delay)}var r,c={},f=n(),a=function(t){return t},d=a,l=a;return c.start=function(){r||e()},c.stop=function(){r&&clearTimeout(r),r=void 0},t(\"html\").is(\".ie\")&&!u&&function(){var r,u;c.start=function(){r||(u=t.fn[o].src,u=u&&u+n(),r=t('<iframe tabindex=\"-1\" title=\"empty\"/>').hide().one(\"load\",function(){u||d(n()),e()}).attr(\"src\",u||\"javascript:0\").insertAfter(\"body\")[0].contentWindow,i.onpropertychange=function(){try{\"title\"===event.propertyName&&(r.document.title=i.title)}catch(t){}})},c.stop=a,l=function(){return n(r.location.href)},d=function(n,e){var c=r.document,u=t.fn[o].domain;n!==e&&(c.title=i.title,c.open(),u&&c.write('<script>document.domain=\"'+u+'\"<\\/script>'),c.close(),r.location.hash=n)}}(),c}()});
//# sourceMappingURL=jquery.hashchange.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/hashchange/jquery.hashchange.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t){\"function\"==typeof define&&define.amd?define([\"jquery\"],t):t(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(t){\"\$:nomunge\";function n(t){return t=t||location.href,\"#\"+t.replace(/^[^#]*#?(.*)\$/,\"\$1\")}var e,o=\"hashchange\",i=document,r=t.event.special,c=i.documentMode,u=\"on\"+o in window&&(void 0===c||c>7);t.fn[o]=function(t){return t?this.bind(o,t):this.trigger(o)},t.fn[o].delay=50,r[o]=t.extend(r[o],{setup:function(){if(u)return!1;t(e.start)},teardown:function(){if(u)return!1;t(e.stop)}}),e=function(){function e(){var i=n(),c=l(f);i!==f?(d(f=i,c),t(window).trigger(o)):c!==f&&(location.href=location.href.replace(/#.*/,\"\")+c),r=setTimeout(e,t.fn[o].delay)}var r,c={},f=n(),a=function(t){return t},d=a,l=a;return c.start=function(){r||e()},c.stop=function(){r&&clearTimeout(r),r=void 0},t(\"html\").is(\".ie\")&&!u&&function(){var r,u;c.start=function(){r||(u=t.fn[o].src,u=u&&u+n(),r=t('<iframe tabindex=\"-1\" title=\"empty\"/>').hide().one(\"load\",function(){u||d(n()),e()}).attr(\"src\",u||\"javascript:0\").insertAfter(\"body\")[0].contentWindow,i.onpropertychange=function(){try{\"title\"===event.propertyName&&(r.document.title=i.title)}catch(t){}})},c.stop=a,l=function(){return n(r.location.href)},d=function(n,e){var c=r.document,u=t.fn[o].domain;n!==e&&(c.title=i.title,c.open(),u&&c.write('<script>document.domain=\"'+u+'\"<\\/script>'),c.close(),r.location.hash=n)}}(),c}()});
//# sourceMappingURL=jquery.hashchange.js.map", "wdn/templates_4.1/scripts/compressed/plugins/hashchange/jquery.hashchange.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/hashchange/jquery.hashchange.js");
    }
}
