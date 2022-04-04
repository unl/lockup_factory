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

/* wdn/templates_5.3/js/compressed/plugins/gsap/EaselPlugin.min.js */
class __TwigTemplate_4d381b60f9f34fbfb9f073fad944794c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/EaselPlugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/EaselPlugin.min.js"));

        // line 1
        echo "!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function t(){return\"undefined\"!=typeof window}function r(){return f||t()&&(f=window.gsap)&&f.registerPlugin&&f}function i(){return p||d&&d.createjs||d||{}}function n(e){return console.warn(e)}function l(e){var t=e.getBounds&&e.getBounds();t||(t=e.nominalBounds||{x:0,y:0,width:100,height:100},e.setBounds&&e.setBounds(t.x,t.y,t.width,t.height)),e.cache&&e.cache(t.x,t.y,t.width,t.height),n(\"EaselPlugin: for filters to display in EaselJS, you must call the object's cache() method first. GSAP attempted to use the target's getBounds() for the cache but that may not be completely accurate. \"+e)}function o(e,t,r){(h=h||i().ColorFilter)||n(\"EaselPlugin error: The EaselJS ColorFilter JavaScript file wasn't loaded.\");for(var o,s,u,a,c,d,p=e.filters||[],g=p.length;g--;)if(p[g]instanceof h){s=p[g];break}if(s||(s=new h,p.push(s),e.filters=p),u=s.clone(),null!=t.tint)o=f.utils.splitColor(t.tint),a=null!=t.tintAmount?+t.tintAmount:1,u.redOffset=o[0]*a,u.greenOffset=o[1]*a,u.blueOffset=o[2]*a,u.redMultiplier=u.greenMultiplier=u.blueMultiplier=1-a;else for(c in t)\"exposure\"!==c&&\"brightness\"!==c&&(u[c]=+t[c]);for(null!=t.exposure?(u.redOffset=u.greenOffset=u.blueOffset=255*(t.exposure-1),u.redMultiplier=u.greenMultiplier=u.blueMultiplier=1):null!=t.brightness&&(a=t.brightness-1,u.redOffset=u.greenOffset=u.blueOffset=0<a?255*a:0,u.redMultiplier=u.greenMultiplier=u.blueMultiplier=1-Math.abs(a)),g=8;g--;)s[c=b[g]]!==u[c]&&(d=r.add(s,c,s[c],u[c]))&&(d.op=\"easel_colorFilter\");r._props.push(\"easel_colorFilter\"),e.cacheID||l(e)}function s(e,t){if(!(e instanceof Array&&t instanceof Array))return t;var r,i,n=[],l=0,o=0;for(r=0;r<4;r++){for(i=0;i<5;i++)o=4===i?e[l+4]:0,n[l+i]=e[l]*t[i]+e[l+1]*t[i+5]+e[l+2]*t[i+10]+e[l+3]*t[i+15]+o;l+=5}return n}function u(e,t,r){(g=g||i().ColorMatrixFilter)||n(\"EaselPlugin: The EaselJS ColorMatrixFilter JavaScript file wasn't loaded.\");for(var o,u,a,c,d=e.filters||[],p=d.length;-1<--p;)if(d[p]instanceof g){a=d[p];break}for(a||(a=new g(M.slice()),d.push(a),e.filters=d),u=a.matrix,o=M.slice(),null!=t.colorize&&(o=function(e,t,r){isNaN(r)&&(r=1);var i=f.utils.splitColor(t),n=i[0]/255,l=i[1]/255,o=i[2]/255,u=1-r;return s([u+r*n*m,r*n*w,r*n*x,0,0,r*l*m,u+r*l*w,r*l*x,0,0,r*o*m,r*o*w,u+r*o*x,0,0,0,0,0,1,0],e)}(o,t.colorize,Number(t.colorizeAmount))),null!=t.contrast&&(o=function(e,t){return isNaN(t)?e:s([t+=.01,0,0,0,128*(1-t),0,t,0,0,128*(1-t),0,0,t,0,128*(1-t),0,0,0,1,0],e)}(o,Number(t.contrast))),null!=t.hue&&(o=function(e,t){if(isNaN(t))return e;t*=Math.PI/180;var r=Math.cos(t),i=Math.sin(t);return s([m+r*(1-m)+i*-m,w+r*-w+i*-w,x+r*-x+i*(1-x),0,0,m+r*-m+.143*i,w+r*(1-w)+.14*i,x+r*-x+-.283*i,0,0,m+r*-m+i*-(1-m),w+r*-w+i*w,x+r*(1-x)+i*x,0,0,0,0,0,1,0,0,0,0,0,1],e)}(o,Number(t.hue))),null!=t.saturation&&(o=function(e,t){if(isNaN(t))return e;var r=1-t,i=r*m,n=r*w,l=r*x;return s([i+t,n,l,0,0,i,n+t,l,0,0,i,n,l+t,0,0,0,0,0,1,0],e)}(o,Number(t.saturation))),p=o.length;-1<--p;)o[p]!==u[p]&&(c=r.add(u,p,u[p],o[p]))&&(c.op=\"easel_colorMatrixFilter\");r._props.push(\"easel_colorMatrixFilter\"),e.cacheID||l(),r._matrix=u}function a(e){f=e||r(),t()&&(d=window),f&&(c=1)}var f,c,d,p,h,g,b=\"redMultiplier,greenMultiplier,blueMultiplier,alphaMultiplier,redOffset,greenOffset,blueOffset,alphaOffset\".split(\",\"),M=[1,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,1,0],m=.212671,w=.71516,x=.072169,y={version:\"3.7.1\",name:\"easel\",init:function(e,t,r,i,l){var s,d,p,h,g,b,M;for(s in c||(a(),f||n(\"Please gsap.registerPlugin(EaselPlugin)\")),this.target=e,t)if(g=t[s],\"colorFilter\"===s||\"tint\"===s||\"tintAmount\"===s||\"exposure\"===s||\"brightness\"===s)p||(o(e,t.colorFilter||t,this),p=!0);else if(\"saturation\"===s||\"contrast\"===s||\"hue\"===s||\"colorize\"===s||\"colorizeAmount\"===s)h||(u(e,t.colorMatrixFilter||t,this),h=!0);else if(\"frame\"===s){if(\"string\"==typeof g&&\"=\"!==g.charAt(1)&&(b=e.labels))for(M=0;M<b.length;M++)b[M].label===g&&(g=b[M].position);(d=this.add(e,\"gotoAndStop\",e.currentFrame,g,i,l,Math.round))&&(d.op=s)}else null!=e[s]&&this.add(e,s,\"get\",g)},render:function(e,t){for(var r=t._pt;r;)r.r(e,r.d),r=r._next;t.target.cacheID&&t.target.updateCache()},register:a,registerCreateJS:function(e){p=e}};r()&&f.registerPlugin(y),e.EaselPlugin=y,e.default=y,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=EaselPlugin.min.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/gsap/EaselPlugin.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],t):t((e=e||self).window=e.window||{})}(this,function(e){\"use strict\";function t(){return\"undefined\"!=typeof window}function r(){return f||t()&&(f=window.gsap)&&f.registerPlugin&&f}function i(){return p||d&&d.createjs||d||{}}function n(e){return console.warn(e)}function l(e){var t=e.getBounds&&e.getBounds();t||(t=e.nominalBounds||{x:0,y:0,width:100,height:100},e.setBounds&&e.setBounds(t.x,t.y,t.width,t.height)),e.cache&&e.cache(t.x,t.y,t.width,t.height),n(\"EaselPlugin: for filters to display in EaselJS, you must call the object's cache() method first. GSAP attempted to use the target's getBounds() for the cache but that may not be completely accurate. \"+e)}function o(e,t,r){(h=h||i().ColorFilter)||n(\"EaselPlugin error: The EaselJS ColorFilter JavaScript file wasn't loaded.\");for(var o,s,u,a,c,d,p=e.filters||[],g=p.length;g--;)if(p[g]instanceof h){s=p[g];break}if(s||(s=new h,p.push(s),e.filters=p),u=s.clone(),null!=t.tint)o=f.utils.splitColor(t.tint),a=null!=t.tintAmount?+t.tintAmount:1,u.redOffset=o[0]*a,u.greenOffset=o[1]*a,u.blueOffset=o[2]*a,u.redMultiplier=u.greenMultiplier=u.blueMultiplier=1-a;else for(c in t)\"exposure\"!==c&&\"brightness\"!==c&&(u[c]=+t[c]);for(null!=t.exposure?(u.redOffset=u.greenOffset=u.blueOffset=255*(t.exposure-1),u.redMultiplier=u.greenMultiplier=u.blueMultiplier=1):null!=t.brightness&&(a=t.brightness-1,u.redOffset=u.greenOffset=u.blueOffset=0<a?255*a:0,u.redMultiplier=u.greenMultiplier=u.blueMultiplier=1-Math.abs(a)),g=8;g--;)s[c=b[g]]!==u[c]&&(d=r.add(s,c,s[c],u[c]))&&(d.op=\"easel_colorFilter\");r._props.push(\"easel_colorFilter\"),e.cacheID||l(e)}function s(e,t){if(!(e instanceof Array&&t instanceof Array))return t;var r,i,n=[],l=0,o=0;for(r=0;r<4;r++){for(i=0;i<5;i++)o=4===i?e[l+4]:0,n[l+i]=e[l]*t[i]+e[l+1]*t[i+5]+e[l+2]*t[i+10]+e[l+3]*t[i+15]+o;l+=5}return n}function u(e,t,r){(g=g||i().ColorMatrixFilter)||n(\"EaselPlugin: The EaselJS ColorMatrixFilter JavaScript file wasn't loaded.\");for(var o,u,a,c,d=e.filters||[],p=d.length;-1<--p;)if(d[p]instanceof g){a=d[p];break}for(a||(a=new g(M.slice()),d.push(a),e.filters=d),u=a.matrix,o=M.slice(),null!=t.colorize&&(o=function(e,t,r){isNaN(r)&&(r=1);var i=f.utils.splitColor(t),n=i[0]/255,l=i[1]/255,o=i[2]/255,u=1-r;return s([u+r*n*m,r*n*w,r*n*x,0,0,r*l*m,u+r*l*w,r*l*x,0,0,r*o*m,r*o*w,u+r*o*x,0,0,0,0,0,1,0],e)}(o,t.colorize,Number(t.colorizeAmount))),null!=t.contrast&&(o=function(e,t){return isNaN(t)?e:s([t+=.01,0,0,0,128*(1-t),0,t,0,0,128*(1-t),0,0,t,0,128*(1-t),0,0,0,1,0],e)}(o,Number(t.contrast))),null!=t.hue&&(o=function(e,t){if(isNaN(t))return e;t*=Math.PI/180;var r=Math.cos(t),i=Math.sin(t);return s([m+r*(1-m)+i*-m,w+r*-w+i*-w,x+r*-x+i*(1-x),0,0,m+r*-m+.143*i,w+r*(1-w)+.14*i,x+r*-x+-.283*i,0,0,m+r*-m+i*-(1-m),w+r*-w+i*w,x+r*(1-x)+i*x,0,0,0,0,0,1,0,0,0,0,0,1],e)}(o,Number(t.hue))),null!=t.saturation&&(o=function(e,t){if(isNaN(t))return e;var r=1-t,i=r*m,n=r*w,l=r*x;return s([i+t,n,l,0,0,i,n+t,l,0,0,i,n,l+t,0,0,0,0,0,1,0],e)}(o,Number(t.saturation))),p=o.length;-1<--p;)o[p]!==u[p]&&(c=r.add(u,p,u[p],o[p]))&&(c.op=\"easel_colorMatrixFilter\");r._props.push(\"easel_colorMatrixFilter\"),e.cacheID||l(),r._matrix=u}function a(e){f=e||r(),t()&&(d=window),f&&(c=1)}var f,c,d,p,h,g,b=\"redMultiplier,greenMultiplier,blueMultiplier,alphaMultiplier,redOffset,greenOffset,blueOffset,alphaOffset\".split(\",\"),M=[1,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,1,0],m=.212671,w=.71516,x=.072169,y={version:\"3.7.1\",name:\"easel\",init:function(e,t,r,i,l){var s,d,p,h,g,b,M;for(s in c||(a(),f||n(\"Please gsap.registerPlugin(EaselPlugin)\")),this.target=e,t)if(g=t[s],\"colorFilter\"===s||\"tint\"===s||\"tintAmount\"===s||\"exposure\"===s||\"brightness\"===s)p||(o(e,t.colorFilter||t,this),p=!0);else if(\"saturation\"===s||\"contrast\"===s||\"hue\"===s||\"colorize\"===s||\"colorizeAmount\"===s)h||(u(e,t.colorMatrixFilter||t,this),h=!0);else if(\"frame\"===s){if(\"string\"==typeof g&&\"=\"!==g.charAt(1)&&(b=e.labels))for(M=0;M<b.length;M++)b[M].label===g&&(g=b[M].position);(d=this.add(e,\"gotoAndStop\",e.currentFrame,g,i,l,Math.round))&&(d.op=s)}else null!=e[s]&&this.add(e,s,\"get\",g)},render:function(e,t){for(var r=t._pt;r;)r.r(e,r.d),r=r._next;t.target.cacheID&&t.target.updateCache()},register:a,registerCreateJS:function(e){p=e}};r()&&f.registerPlugin(y),e.EaselPlugin=y,e.default=y,\"undefined\"==typeof window||window!==e?Object.defineProperty(e,\"__esModule\",{value:!0}):delete e.default});
//# sourceMappingURL=EaselPlugin.min.js.map", "wdn/templates_5.3/js/compressed/plugins/gsap/EaselPlugin.min.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/gsap/EaselPlugin.min.js");
    }
}
