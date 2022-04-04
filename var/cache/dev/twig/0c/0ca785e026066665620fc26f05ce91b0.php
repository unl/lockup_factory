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

/* wdn/templates_5.3/js/compressed/plugins/gsap/EasePack.min.js */
class __TwigTemplate_f595bd76d0e7266a97e99786abaaceaf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/EasePack.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/EasePack.min.js"));

        // line 1
        echo "!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?n(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],n):n((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function n(){return s||\"undefined\"!=typeof window&&(s=window.gsap)&&s.registerPlugin&&s}function t(e,n){return!!(void 0===e?n:e&&!~(e+\"\").indexOf(\"false\"))}function o(e){if(s=e||n()){u=s.registerEase;var t,o=s.parseEase();for(t in o)o[t].config||void o[t];for(t in u(\"slow\",c),u(\"expoScale\",p),u(\"rough\",d),l)\"version\"!==t&&s.core.globals(t,l[t])}}function r(e,n,o){var r=(e=Math.min(1,e||.7))<1?n||0===n?n:.7:0,i=(1-e)/2,a=i+e,f=t(o);return function(e){var n=e+(.5-e)*r;return e<i?f?1-(e=1-e/i)*e:n-(e=1-e/i)*e*e*e*n:a<e?f?1===e?0:1-(e=(e-a)/i)*e:n+(e-n)*(e=(e-a)/i)*e*e*e:f?1:n}}function i(e,n,t){var o=Math.log(n/e),r=n-e;return t=t&&s.parseEase(t),function(n){return(e*Math.exp(o*(t?t(n):n))-e)/r}}function a(e,n,t){this.t=e,this.v=n,t&&(((this.next=t).prev=this).c=t.v-n,this.gap=t.t-e)}function f(e){\"object\"!=typeof e&&(e={points:+e||20});for(var n,o,r,i,f,u,c,p=e.taper||\"none\",d=[],l=0,v=0|(+e.points||20),g=v,w=t(e.randomize,!0),x=t(e.clamp),h=s?s.parseEase(e.template):0,E=.4*(+e.strength||1);-1<--g;)n=w?Math.random():1/v*g,o=h?h(n):n,r=\"none\"===p?E:\"out\"===p?(i=1-n)*i*E:\"in\"===p?n*n*E:n<.5?(i=2*n)*i*.5*E:(i=2*(1-n))*i*.5*E,w?o+=Math.random()*r-.5*r:g%2?o+=.5*r:o-=.5*r,x&&(1<o?o=1:o<0&&(o=0)),d[l++]={x:n,y:o};for(d.sort(function(e,n){return e.x-n.x}),u=new a(1,1,null),g=v;g--;)f=d[g],u=new a(f.x,f.y,u);return c=new a(0,0,u.t?u:u.next),function(e){var n=c;if(e>n.t){for(;n.next&&e>=n.t;)n=n.next;n=n.prev}else for(;n.prev&&e<=n.t;)n=n.prev;return(c=n).v+(e-n.t)/n.gap*n.c}}var s,u,c=r(.7);(c.ease=c).config=r;var p=i(1,2);p.config=i;var d=f();(d.ease=d).config=f;var l={SlowMo:c,RoughEase:d,ExpoScaleEase:p};for(var v in l)l[v].register=o,l[v].version=\"3.7.1\";n()&&s.registerPlugin(c),e.EasePack=l,e.ExpoScaleEase=p,e.RoughEase=d,e.SlowMo=c,e.default=l,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=EasePack.min.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/gsap/EasePack.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?n(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],n):n((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function n(){return s||\"undefined\"!=typeof window&&(s=window.gsap)&&s.registerPlugin&&s}function t(e,n){return!!(void 0===e?n:e&&!~(e+\"\").indexOf(\"false\"))}function o(e){if(s=e||n()){u=s.registerEase;var t,o=s.parseEase();for(t in o)o[t].config||void o[t];for(t in u(\"slow\",c),u(\"expoScale\",p),u(\"rough\",d),l)\"version\"!==t&&s.core.globals(t,l[t])}}function r(e,n,o){var r=(e=Math.min(1,e||.7))<1?n||0===n?n:.7:0,i=(1-e)/2,a=i+e,f=t(o);return function(e){var n=e+(.5-e)*r;return e<i?f?1-(e=1-e/i)*e:n-(e=1-e/i)*e*e*e*n:a<e?f?1===e?0:1-(e=(e-a)/i)*e:n+(e-n)*(e=(e-a)/i)*e*e*e:f?1:n}}function i(e,n,t){var o=Math.log(n/e),r=n-e;return t=t&&s.parseEase(t),function(n){return(e*Math.exp(o*(t?t(n):n))-e)/r}}function a(e,n,t){this.t=e,this.v=n,t&&(((this.next=t).prev=this).c=t.v-n,this.gap=t.t-e)}function f(e){\"object\"!=typeof e&&(e={points:+e||20});for(var n,o,r,i,f,u,c,p=e.taper||\"none\",d=[],l=0,v=0|(+e.points||20),g=v,w=t(e.randomize,!0),x=t(e.clamp),h=s?s.parseEase(e.template):0,E=.4*(+e.strength||1);-1<--g;)n=w?Math.random():1/v*g,o=h?h(n):n,r=\"none\"===p?E:\"out\"===p?(i=1-n)*i*E:\"in\"===p?n*n*E:n<.5?(i=2*n)*i*.5*E:(i=2*(1-n))*i*.5*E,w?o+=Math.random()*r-.5*r:g%2?o+=.5*r:o-=.5*r,x&&(1<o?o=1:o<0&&(o=0)),d[l++]={x:n,y:o};for(d.sort(function(e,n){return e.x-n.x}),u=new a(1,1,null),g=v;g--;)f=d[g],u=new a(f.x,f.y,u);return c=new a(0,0,u.t?u:u.next),function(e){var n=c;if(e>n.t){for(;n.next&&e>=n.t;)n=n.next;n=n.prev}else for(;n.prev&&e<=n.t;)n=n.prev;return(c=n).v+(e-n.t)/n.gap*n.c}}var s,u,c=r(.7);(c.ease=c).config=r;var p=i(1,2);p.config=i;var d=f();(d.ease=d).config=f;var l={SlowMo:c,RoughEase:d,ExpoScaleEase:p};for(var v in l)l[v].register=o,l[v].version=\"3.7.1\";n()&&s.registerPlugin(c),e.EasePack=l,e.ExpoScaleEase=p,e.RoughEase=d,e.SlowMo=c,e.default=l,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=EasePack.min.js.map", "wdn/templates_5.3/js/compressed/plugins/gsap/EasePack.min.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/gsap/EasePack.min.js");
    }
}
