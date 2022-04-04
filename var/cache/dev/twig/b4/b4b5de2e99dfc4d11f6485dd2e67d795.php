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

/* wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js */
class __TwigTemplate_a5dccf7f267f9e98eb9cbed8f35ab2ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js"));

        // line 1
        echo "!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function t(){return\"undefined\"!=typeof window}function n(){return s||t()&&(s=window.gsap)&&s.registerPlugin&&s}function i(){return o||(u(),l||console.warn(\"Please gsap.registerPlugin(CSSPlugin, CSSRulePlugin)\")),o}var s,o,r,l,u=function(e){s=e||n(),t()&&(r=document),s&&(l=s.plugins.css)&&(o=1)},f={version:\"3.7.1\",name:\"cssRule\",init:function(e,t,n,s,o){if(!i()||void 0===e.cssText)return!1;var u=e._gsProxy=e._gsProxy||r.createElement(\"div\");this.ss=e,this.style=u.style,u.style.cssText=e.cssText,l.prototype.init.call(this,u,t,n,s,o)},render:function(e,t){for(var n,i=t._pt,s=t.style,o=t.ss;i;)i.r(e,i.d),i=i._next;for(n=s.length;-1<--n;)o[s[n]]=s[s[n]]},getRule:function(e){i();var t,n,s,o,l=r.all?\"rules\":\"cssRules\",u=r.styleSheets,f=u.length,c=\":\"===e.charAt(0);for(e=(c?\"\":\",\")+e.split(\"::\").join(\":\").toLowerCase()+\",\",c&&(o=[]);f--;){try{if(!(n=u[f][l]))continue;t=n.length}catch(e){console.warn(e);continue}for(;-1<--t;)if((s=n[t]).selectorText&&-1!==(\",\"+s.selectorText.split(\"::\").join(\":\").toLowerCase()+\",\").indexOf(e)){if(!c)return s.style;o.push(s.style)}}return o},register:u};n()&&s.registerPlugin(f),e.CSSRulePlugin=f,e.default=f,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=CSSRulePlugin.min.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function t(){return\"undefined\"!=typeof window}function n(){return s||t()&&(s=window.gsap)&&s.registerPlugin&&s}function i(){return o||(u(),l||console.warn(\"Please gsap.registerPlugin(CSSPlugin, CSSRulePlugin)\")),o}var s,o,r,l,u=function(e){s=e||n(),t()&&(r=document),s&&(l=s.plugins.css)&&(o=1)},f={version:\"3.7.1\",name:\"cssRule\",init:function(e,t,n,s,o){if(!i()||void 0===e.cssText)return!1;var u=e._gsProxy=e._gsProxy||r.createElement(\"div\");this.ss=e,this.style=u.style,u.style.cssText=e.cssText,l.prototype.init.call(this,u,t,n,s,o)},render:function(e,t){for(var n,i=t._pt,s=t.style,o=t.ss;i;)i.r(e,i.d),i=i._next;for(n=s.length;-1<--n;)o[s[n]]=s[s[n]]},getRule:function(e){i();var t,n,s,o,l=r.all?\"rules\":\"cssRules\",u=r.styleSheets,f=u.length,c=\":\"===e.charAt(0);for(e=(c?\"\":\",\")+e.split(\"::\").join(\":\").toLowerCase()+\",\",c&&(o=[]);f--;){try{if(!(n=u[f][l]))continue;t=n.length}catch(e){console.warn(e);continue}for(;-1<--t;)if((s=n[t]).selectorText&&-1!==(\",\"+s.selectorText.split(\"::\").join(\":\").toLowerCase()+\",\").indexOf(e)){if(!c)return s.style;o.push(s.style)}}return o},register:u};n()&&s.registerPlugin(f),e.CSSRulePlugin=f,e.default=f,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=CSSRulePlugin.min.js.map", "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js");
    }
}
