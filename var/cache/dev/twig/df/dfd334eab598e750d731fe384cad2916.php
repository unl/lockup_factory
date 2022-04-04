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

/* wdn/templates_5.3/js/plugins/gsap/CSSRulePlugin.min.js */
class __TwigTemplate_58464e4e896115dbd29201bd56958086 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/gsap/CSSRulePlugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/gsap/CSSRulePlugin.min.js"));

        // line 1
        echo "/*!
 * CSSRulePlugin 3.7.1
 * https://greensock.com
 * 
 * @license Copyright 2021, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
 */

!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function h(){return\"undefined\"!=typeof window}function i(){return t||h()&&(t=window.gsap)&&t.registerPlugin&&t}function j(){return n||(s(),o||console.warn(\"Please gsap.registerPlugin(CSSPlugin, CSSRulePlugin)\")),n}var t,n,c,o,s=function _initCore(e){t=e||i(),h()&&(c=document),t&&(o=t.plugins.css)&&(n=1)},r={version:\"3.7.1\",name:\"cssRule\",init:function init(e,t,n,i,s){if(!j()||void 0===e.cssText)return!1;var r=e._gsProxy=e._gsProxy||c.createElement(\"div\");this.ss=e,this.style=r.style,r.style.cssText=e.cssText,o.prototype.init.call(this,r,t,n,i,s)},render:function render(e,t){for(var n,i=t._pt,s=t.style,r=t.ss;i;)i.r(e,i.d),i=i._next;for(n=s.length;-1<--n;)r[s[n]]=s[s[n]]},getRule:function getRule(e){j();var t,n,i,s,r=c.all?\"rules\":\"cssRules\",o=c.styleSheets,l=o.length,u=\":\"===e.charAt(0);for(e=(u?\"\":\",\")+e.split(\"::\").join(\":\").toLowerCase()+\",\",u&&(s=[]);l--;){try{if(!(n=o[l][r]))continue;t=n.length}catch(e){console.warn(e);continue}for(;-1<--t;)if((i=n[t]).selectorText&&-1!==(\",\"+i.selectorText.split(\"::\").join(\":\").toLowerCase()+\",\").indexOf(e)){if(!u)return i.style;s.push(i.style)}}return s},register:s};i()&&t.registerPlugin(r),e.CSSRulePlugin=r,e.default=r;if (typeof(window)===\"undefined\"||window!==e){Object.defineProperty(e,\"__esModule\",{value:!0})} else {delete e.default}});

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/plugins/gsap/CSSRulePlugin.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 * CSSRulePlugin 3.7.1
 * https://greensock.com
 * 
 * @license Copyright 2021, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
 */

!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function h(){return\"undefined\"!=typeof window}function i(){return t||h()&&(t=window.gsap)&&t.registerPlugin&&t}function j(){return n||(s(),o||console.warn(\"Please gsap.registerPlugin(CSSPlugin, CSSRulePlugin)\")),n}var t,n,c,o,s=function _initCore(e){t=e||i(),h()&&(c=document),t&&(o=t.plugins.css)&&(n=1)},r={version:\"3.7.1\",name:\"cssRule\",init:function init(e,t,n,i,s){if(!j()||void 0===e.cssText)return!1;var r=e._gsProxy=e._gsProxy||c.createElement(\"div\");this.ss=e,this.style=r.style,r.style.cssText=e.cssText,o.prototype.init.call(this,r,t,n,i,s)},render:function render(e,t){for(var n,i=t._pt,s=t.style,r=t.ss;i;)i.r(e,i.d),i=i._next;for(n=s.length;-1<--n;)r[s[n]]=s[s[n]]},getRule:function getRule(e){j();var t,n,i,s,r=c.all?\"rules\":\"cssRules\",o=c.styleSheets,l=o.length,u=\":\"===e.charAt(0);for(e=(u?\"\":\",\")+e.split(\"::\").join(\":\").toLowerCase()+\",\",u&&(s=[]);l--;){try{if(!(n=o[l][r]))continue;t=n.length}catch(e){console.warn(e);continue}for(;-1<--t;)if((i=n[t]).selectorText&&-1!==(\",\"+i.selectorText.split(\"::\").join(\":\").toLowerCase()+\",\").indexOf(e)){if(!u)return i.style;s.push(i.style)}}return s},register:s};i()&&t.registerPlugin(r),e.CSSRulePlugin=r,e.default=r;if (typeof(window)===\"undefined\"||window!==e){Object.defineProperty(e,\"__esModule\",{value:!0})} else {delete e.default}});

", "wdn/templates_5.3/js/plugins/gsap/CSSRulePlugin.min.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/plugins/gsap/CSSRulePlugin.min.js");
    }
}
