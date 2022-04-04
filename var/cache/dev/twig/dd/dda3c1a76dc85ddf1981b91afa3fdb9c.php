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

/* wdn/templates_4.1/scripts/compressed/loadCSS.js */
class __TwigTemplate_b14ec1e88c847c84d0ff6cef66196041 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/loadCSS.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/loadCSS.js"));

        // line 1
        echo "!function(e){\"use strict\";var n=function(n,t,o){function i(e){if(a.body)return e();setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener(\"load\",r),l.media=o||\"all\"}var d,a=e.document,l=a.createElement(\"link\");if(t)d=t;else{var f=(a.body||a.getElementsByTagName(\"head\")[0]).childNodes;d=f[f.length-1]}var s=a.styleSheets;l.rel=\"stylesheet\",l.href=n,l.media=\"only x\",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=s.length;t--;)if(s[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener(\"load\",r),l.onloadcssdefined=u,u(r),l};\"undefined\"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}(\"undefined\"!=typeof global?global:this);
//# sourceMappingURL=loadCSS.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/loadCSS.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e){\"use strict\";var n=function(n,t,o){function i(e){if(a.body)return e();setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener(\"load\",r),l.media=o||\"all\"}var d,a=e.document,l=a.createElement(\"link\");if(t)d=t;else{var f=(a.body||a.getElementsByTagName(\"head\")[0]).childNodes;d=f[f.length-1]}var s=a.styleSheets;l.rel=\"stylesheet\",l.href=n,l.media=\"only x\",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=s.length;t--;)if(s[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener(\"load\",r),l.onloadcssdefined=u,u(r),l};\"undefined\"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}(\"undefined\"!=typeof global?global:this);
//# sourceMappingURL=loadCSS.js.map", "wdn/templates_4.1/scripts/compressed/loadCSS.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/loadCSS.js");
    }
}
