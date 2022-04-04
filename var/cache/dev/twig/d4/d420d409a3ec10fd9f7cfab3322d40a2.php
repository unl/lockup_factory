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

/* wdn/templates_5.3/js/plugins/gsap/PixiPlugin.min.js */
class __TwigTemplate_c2ba0c985bd94600a5e6ae019908b351 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/gsap/PixiPlugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/gsap/PixiPlugin.min.js"));

        // line 1
        echo "/*!
 * PixiPlugin 3.7.1
 * https://greensock.com
 * 
 * @license Copyright 2021, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
 */

!function(t,r){\"object\"==typeof exports&&\"undefined\"!=typeof module?r(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],r):r((t=t||self).window=t.window||{})}(this,function(r){\"use strict\";function k(){return\"undefined\"!=typeof window}function l(){return o||k()&&(o=window.gsap)&&o.registerPlugin&&o}function m(t){return\"function\"==typeof t}function s(t,r){var i,o,e=[],n=0,s=0;for(i=0;i<4;i++){for(o=0;o<5;o++)s=4===o?t[n+4]:0,e[n+o]=t[n]*r[o]+t[n+1]*r[o+5]+t[n+2]*r[o+10]+t[n+3]*r[o+15]+s;n+=5}return e}function t(t,r){var i=1-r,o=i*p,e=i*g,n=i*b;return s([o+r,e,n,0,0,o,e+r,n,0,0,o,e,n+r,0,0,0,0,0,1,0],t)}function u(t,r,i){var o=c(r),e=o[0]/255,n=o[1]/255,l=o[2]/255,a=1-i;return s([a+i*e*p,i*e*g,i*e*b,0,0,i*n*p,a+i*n*g,i*n*b,0,0,i*l*p,i*l*g,a+i*l*b,0,0,0,0,0,1,0],t)}function v(t,r){r*=Math.PI/180;var i=Math.cos(r),o=Math.sin(r);return s([p+i*(1-p)+o*-p,g+i*-g+o*-g,b+i*-b+o*(1-b),0,0,p+i*-p+.143*o,g+i*(1-g)+.14*o,b+i*-b+-.283*o,0,0,p+i*-p+o*-(1-p),g+i*-g+o*g,b+i*(1-b)+o*b,0,0,0,0,0,1,0,0,0,0,0,1],t)}function w(t,r){return s([r,0,0,0,.5*(1-r),0,r,0,0,.5*(1-r),0,0,r,0,.5*(1-r),0,0,0,1,0],t)}function x(t,r){var i,o=h.filters[r],e=t.filters||[],n=e.length;for(o||function _warn(t){console.warn(t)}(r+\" not found. PixiPlugin.registerPIXI(PIXI)\");-1<--n;)if(e[n]instanceof o)return e[n];return i=new o,\"BlurFilter\"===r&&(i.blur=0),e.push(i),t.filters=e,i}function y(t,r,i,o){r.add(i,t,i[t],o[t]),r._props.push(t)}function z(t,r){var i=new h.filters.ColorMatrixFilter;return i.matrix=r,i.brightness(t,!0),i.matrix}function C(r,i,o){var e,n,s,l=x(r,\"ColorMatrixFilter\"),a=r._gsColorMatrixFilter=r._gsColorMatrixFilter||function _copy(t){var r,i={};for(r in t)i[r]=t[r];return i}(_),c=i.combineCMF&&!(\"colorMatrixFilter\"in i&&!i.colorMatrixFilter);s=l.matrix,i.resolution&&(l.resolution=i.resolution),i.matrix&&i.matrix.length===s.length?(n=i.matrix,1!==a.contrast&&y(\"contrast\",o,a,_),a.hue&&y(\"hue\",o,a,_),1!==a.brightness&&y(\"brightness\",o,a,_),a.colorizeAmount&&(y(\"colorize\",o,a,_),y(\"colorizeAmount\",o,a,_)),1!==a.saturation&&y(\"saturation\",o,a,_)):(n=f.slice(),null!=i.contrast?(n=w(n,+i.contrast),y(\"contrast\",o,a,i)):1!==a.contrast&&(c?n=w(n,a.contrast):y(\"contrast\",o,a,_)),null!=i.hue?(n=v(n,+i.hue),y(\"hue\",o,a,i)):a.hue&&(c?n=v(n,a.hue):y(\"hue\",o,a,_)),null!=i.brightness?(n=z(+i.brightness,n),y(\"brightness\",o,a,i)):1!==a.brightness&&(c?n=z(a.brightness,n):y(\"brightness\",o,a,_)),null!=i.colorize?(i.colorizeAmount=\"colorizeAmount\"in i?+i.colorizeAmount:1,n=u(n,i.colorize,i.colorizeAmount),y(\"colorize\",o,a,i),y(\"colorizeAmount\",o,a,i)):a.colorizeAmount&&(c?n=u(n,a.colorize,a.colorizeAmount):(y(\"colorize\",o,a,_),y(\"colorizeAmount\",o,a,_))),null!=i.saturation?(n=t(n,+i.saturation),y(\"saturation\",o,a,i)):1!==a.saturation&&(c?n=t(n,a.saturation):y(\"saturation\",o,a,_))),e=n.length;for(;-1<--e;)n[e]!==s[e]&&o.add(s,e,s[e],n[e],\"colorMatrixFilter\");o._props.push(\"colorMatrixFilter\")}function D(t,r){var i=r.t,o=r.p,e=r.color;(0,r.set)(i,o,e[0]<<16|e[1]<<8|e[2])}function E(t,r){var i=r.g;i&&(i.dirty++,i.clearDirty++)}function F(t,r){r.t.visible=!!r.t.alpha}function G(t,r,i,o){var e=t[r],n=c(m(e)?t[r.indexOf(\"set\")||!m(t[\"get\"+r.substr(3)])?r:\"get\"+r.substr(3)]():e),s=c(i);o._pt=new d(o._pt,t,r,0,0,D,{t:t,p:r,color:n,set:a(t,r)}),o.add(n,0,n[0],s[0]),o.add(n,1,n[1],s[1]),o.add(n,2,n[2],s[2])}function M(t){return\"string\"==typeof t}function N(t){return M(t)&&\"=\"===t.charAt(1)?t.substr(0,2)+parseFloat(t.substr(2))*j:t*j}function O(t,r){return r.set(r.t,r.p,1===t?r.e:Math.round(1e5*(r.s+r.c*t))/1e5,r)}function P(t,r,i,o,e,n){var s,l,a=360*(n?j:1),u=M(e),c=u&&\"=\"===e.charAt(1)?+(e.charAt(0)+\"1\"):0,f=parseFloat(c?e.substr(2):e)*(n?j:1),h=c?f*c:f-o,p=o+h;return u&&(\"short\"===(s=e.split(\"_\")[1])&&(h%=a)!==h%(a/2)&&(h+=h<0?a:-a),\"cw\"===s&&h<0?h=(h+1e10*a)%a-~~(h/a)*a:\"ccw\"===s&&0<h&&(h=(h-1e10*a)%a-~~(h/a)*a)),t._pt=l=new d(t._pt,r,i,o,h,O),l.e=p,l}function Q(){k()&&(i=window,o=l(),h=h||i.PIXI,c=function _splitColor(t){return o.utils.splitColor(\"0x\"===(t+\"\").substr(0,2)?\"#\"+t.substr(2):t)})}var o,i,c,h,d,a,e,n,f=[1,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,1,0],p=.212671,g=.71516,b=.072169,_={contrast:1,saturation:1,colorizeAmount:0,colorize:\"rgb(255,255,255)\",hue:0,brightness:1},A={tint:1,lineColor:1,fillColor:1},I=\"position,scale,skew,pivot,anchor,tilePosition,tileScale\".split(\",\"),X={x:\"position\",y:\"position\",tileX:\"tilePosition\",tileY:\"tilePosition\"},S={colorMatrixFilter:1,saturation:1,contrast:1,hue:1,colorize:1,colorizeAmount:1,brightness:1,combineCMF:1},j=Math.PI/180;for(e=0;e<I.length;e++)n=I[e],X[n+\"X\"]=n,X[n+\"Y\"]=n;var Y={version:\"3.7.1\",name:\"pixi\",register:function register(t,r,i){o=t,d=i,a=r.getSetter,Q()},registerPIXI:function registerPIXI(t){h=t},init:function init(t,r){if(h||Q(),!t instanceof h.DisplayObject)return!1;var i,o,e,n,s,l,a,u,c,f=\"4\"===h.VERSION.charAt(0);for(l in r){if(i=X[l],e=r[l],i)o=~l.charAt(l.length-1).toLowerCase().indexOf(\"x\")?\"x\":\"y\",this.add(t[i],o,t[i][o],\"skew\"===i?N(e):e);else if(\"scale\"===l||\"anchor\"===l||\"pivot\"===l||\"tileScale\"===l)this.add(t[l],\"x\",t[l].x,e),this.add(t[l],\"y\",t[l].y,e);else if(\"rotation\"===l||\"angle\"===l)P(this,t,l,t[l],e,\"rotation\"===l);else if(S[l])n||(C(t,r.colorMatrixFilter||r,this),n=!0);else if(\"blur\"===l||\"blurX\"===l||\"blurY\"===l||\"blurPadding\"===l){if(s=x(t,\"BlurFilter\"),this.add(s,l,s[l],e),0!==r.blurPadding)for(a=r.blurPadding||2*Math.max(s[l],e),u=t.filters.length;-1<--u;)t.filters[u].padding=Math.max(t.filters[u].padding,a)}else if(A[l])if((\"lineColor\"===l||\"fillColor\"===l)&&t instanceof h.Graphics)for(c=(t.geometry||t).graphicsData,this._pt=new d(this._pt,t,l,0,0,E,{g:t.geometry||t}),u=c.length;-1<--u;)G(f?c[u]:c[u][l.substr(0,4)+\"Style\"],f?l:\"color\",e,this);else G(t,l,e,this);else\"autoAlpha\"===l?(this._pt=new d(this._pt,t,\"visible\",0,0,F),this.add(t,\"alpha\",t.alpha,e),this._props.push(\"alpha\",\"visible\")):\"resolution\"!==l&&this.add(t,l,\"get\",e);this._props.push(l)}}};l()&&o.registerPlugin(Y),r.PixiPlugin=Y,r.default=Y;if (typeof(window)===\"undefined\"||window!==r){Object.defineProperty(r,\"__esModule\",{value:!0})} else {delete r.default}});

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/plugins/gsap/PixiPlugin.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 * PixiPlugin 3.7.1
 * https://greensock.com
 * 
 * @license Copyright 2021, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
 */

!function(t,r){\"object\"==typeof exports&&\"undefined\"!=typeof module?r(exports):\"function\"==typeof define&&define.amd?define([\"exports\"],r):r((t=t||self).window=t.window||{})}(this,function(r){\"use strict\";function k(){return\"undefined\"!=typeof window}function l(){return o||k()&&(o=window.gsap)&&o.registerPlugin&&o}function m(t){return\"function\"==typeof t}function s(t,r){var i,o,e=[],n=0,s=0;for(i=0;i<4;i++){for(o=0;o<5;o++)s=4===o?t[n+4]:0,e[n+o]=t[n]*r[o]+t[n+1]*r[o+5]+t[n+2]*r[o+10]+t[n+3]*r[o+15]+s;n+=5}return e}function t(t,r){var i=1-r,o=i*p,e=i*g,n=i*b;return s([o+r,e,n,0,0,o,e+r,n,0,0,o,e,n+r,0,0,0,0,0,1,0],t)}function u(t,r,i){var o=c(r),e=o[0]/255,n=o[1]/255,l=o[2]/255,a=1-i;return s([a+i*e*p,i*e*g,i*e*b,0,0,i*n*p,a+i*n*g,i*n*b,0,0,i*l*p,i*l*g,a+i*l*b,0,0,0,0,0,1,0],t)}function v(t,r){r*=Math.PI/180;var i=Math.cos(r),o=Math.sin(r);return s([p+i*(1-p)+o*-p,g+i*-g+o*-g,b+i*-b+o*(1-b),0,0,p+i*-p+.143*o,g+i*(1-g)+.14*o,b+i*-b+-.283*o,0,0,p+i*-p+o*-(1-p),g+i*-g+o*g,b+i*(1-b)+o*b,0,0,0,0,0,1,0,0,0,0,0,1],t)}function w(t,r){return s([r,0,0,0,.5*(1-r),0,r,0,0,.5*(1-r),0,0,r,0,.5*(1-r),0,0,0,1,0],t)}function x(t,r){var i,o=h.filters[r],e=t.filters||[],n=e.length;for(o||function _warn(t){console.warn(t)}(r+\" not found. PixiPlugin.registerPIXI(PIXI)\");-1<--n;)if(e[n]instanceof o)return e[n];return i=new o,\"BlurFilter\"===r&&(i.blur=0),e.push(i),t.filters=e,i}function y(t,r,i,o){r.add(i,t,i[t],o[t]),r._props.push(t)}function z(t,r){var i=new h.filters.ColorMatrixFilter;return i.matrix=r,i.brightness(t,!0),i.matrix}function C(r,i,o){var e,n,s,l=x(r,\"ColorMatrixFilter\"),a=r._gsColorMatrixFilter=r._gsColorMatrixFilter||function _copy(t){var r,i={};for(r in t)i[r]=t[r];return i}(_),c=i.combineCMF&&!(\"colorMatrixFilter\"in i&&!i.colorMatrixFilter);s=l.matrix,i.resolution&&(l.resolution=i.resolution),i.matrix&&i.matrix.length===s.length?(n=i.matrix,1!==a.contrast&&y(\"contrast\",o,a,_),a.hue&&y(\"hue\",o,a,_),1!==a.brightness&&y(\"brightness\",o,a,_),a.colorizeAmount&&(y(\"colorize\",o,a,_),y(\"colorizeAmount\",o,a,_)),1!==a.saturation&&y(\"saturation\",o,a,_)):(n=f.slice(),null!=i.contrast?(n=w(n,+i.contrast),y(\"contrast\",o,a,i)):1!==a.contrast&&(c?n=w(n,a.contrast):y(\"contrast\",o,a,_)),null!=i.hue?(n=v(n,+i.hue),y(\"hue\",o,a,i)):a.hue&&(c?n=v(n,a.hue):y(\"hue\",o,a,_)),null!=i.brightness?(n=z(+i.brightness,n),y(\"brightness\",o,a,i)):1!==a.brightness&&(c?n=z(a.brightness,n):y(\"brightness\",o,a,_)),null!=i.colorize?(i.colorizeAmount=\"colorizeAmount\"in i?+i.colorizeAmount:1,n=u(n,i.colorize,i.colorizeAmount),y(\"colorize\",o,a,i),y(\"colorizeAmount\",o,a,i)):a.colorizeAmount&&(c?n=u(n,a.colorize,a.colorizeAmount):(y(\"colorize\",o,a,_),y(\"colorizeAmount\",o,a,_))),null!=i.saturation?(n=t(n,+i.saturation),y(\"saturation\",o,a,i)):1!==a.saturation&&(c?n=t(n,a.saturation):y(\"saturation\",o,a,_))),e=n.length;for(;-1<--e;)n[e]!==s[e]&&o.add(s,e,s[e],n[e],\"colorMatrixFilter\");o._props.push(\"colorMatrixFilter\")}function D(t,r){var i=r.t,o=r.p,e=r.color;(0,r.set)(i,o,e[0]<<16|e[1]<<8|e[2])}function E(t,r){var i=r.g;i&&(i.dirty++,i.clearDirty++)}function F(t,r){r.t.visible=!!r.t.alpha}function G(t,r,i,o){var e=t[r],n=c(m(e)?t[r.indexOf(\"set\")||!m(t[\"get\"+r.substr(3)])?r:\"get\"+r.substr(3)]():e),s=c(i);o._pt=new d(o._pt,t,r,0,0,D,{t:t,p:r,color:n,set:a(t,r)}),o.add(n,0,n[0],s[0]),o.add(n,1,n[1],s[1]),o.add(n,2,n[2],s[2])}function M(t){return\"string\"==typeof t}function N(t){return M(t)&&\"=\"===t.charAt(1)?t.substr(0,2)+parseFloat(t.substr(2))*j:t*j}function O(t,r){return r.set(r.t,r.p,1===t?r.e:Math.round(1e5*(r.s+r.c*t))/1e5,r)}function P(t,r,i,o,e,n){var s,l,a=360*(n?j:1),u=M(e),c=u&&\"=\"===e.charAt(1)?+(e.charAt(0)+\"1\"):0,f=parseFloat(c?e.substr(2):e)*(n?j:1),h=c?f*c:f-o,p=o+h;return u&&(\"short\"===(s=e.split(\"_\")[1])&&(h%=a)!==h%(a/2)&&(h+=h<0?a:-a),\"cw\"===s&&h<0?h=(h+1e10*a)%a-~~(h/a)*a:\"ccw\"===s&&0<h&&(h=(h-1e10*a)%a-~~(h/a)*a)),t._pt=l=new d(t._pt,r,i,o,h,O),l.e=p,l}function Q(){k()&&(i=window,o=l(),h=h||i.PIXI,c=function _splitColor(t){return o.utils.splitColor(\"0x\"===(t+\"\").substr(0,2)?\"#\"+t.substr(2):t)})}var o,i,c,h,d,a,e,n,f=[1,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,1,0],p=.212671,g=.71516,b=.072169,_={contrast:1,saturation:1,colorizeAmount:0,colorize:\"rgb(255,255,255)\",hue:0,brightness:1},A={tint:1,lineColor:1,fillColor:1},I=\"position,scale,skew,pivot,anchor,tilePosition,tileScale\".split(\",\"),X={x:\"position\",y:\"position\",tileX:\"tilePosition\",tileY:\"tilePosition\"},S={colorMatrixFilter:1,saturation:1,contrast:1,hue:1,colorize:1,colorizeAmount:1,brightness:1,combineCMF:1},j=Math.PI/180;for(e=0;e<I.length;e++)n=I[e],X[n+\"X\"]=n,X[n+\"Y\"]=n;var Y={version:\"3.7.1\",name:\"pixi\",register:function register(t,r,i){o=t,d=i,a=r.getSetter,Q()},registerPIXI:function registerPIXI(t){h=t},init:function init(t,r){if(h||Q(),!t instanceof h.DisplayObject)return!1;var i,o,e,n,s,l,a,u,c,f=\"4\"===h.VERSION.charAt(0);for(l in r){if(i=X[l],e=r[l],i)o=~l.charAt(l.length-1).toLowerCase().indexOf(\"x\")?\"x\":\"y\",this.add(t[i],o,t[i][o],\"skew\"===i?N(e):e);else if(\"scale\"===l||\"anchor\"===l||\"pivot\"===l||\"tileScale\"===l)this.add(t[l],\"x\",t[l].x,e),this.add(t[l],\"y\",t[l].y,e);else if(\"rotation\"===l||\"angle\"===l)P(this,t,l,t[l],e,\"rotation\"===l);else if(S[l])n||(C(t,r.colorMatrixFilter||r,this),n=!0);else if(\"blur\"===l||\"blurX\"===l||\"blurY\"===l||\"blurPadding\"===l){if(s=x(t,\"BlurFilter\"),this.add(s,l,s[l],e),0!==r.blurPadding)for(a=r.blurPadding||2*Math.max(s[l],e),u=t.filters.length;-1<--u;)t.filters[u].padding=Math.max(t.filters[u].padding,a)}else if(A[l])if((\"lineColor\"===l||\"fillColor\"===l)&&t instanceof h.Graphics)for(c=(t.geometry||t).graphicsData,this._pt=new d(this._pt,t,l,0,0,E,{g:t.geometry||t}),u=c.length;-1<--u;)G(f?c[u]:c[u][l.substr(0,4)+\"Style\"],f?l:\"color\",e,this);else G(t,l,e,this);else\"autoAlpha\"===l?(this._pt=new d(this._pt,t,\"visible\",0,0,F),this.add(t,\"alpha\",t.alpha,e),this._props.push(\"alpha\",\"visible\")):\"resolution\"!==l&&this.add(t,l,\"get\",e);this._props.push(l)}}};l()&&o.registerPlugin(Y),r.PixiPlugin=Y,r.default=Y;if (typeof(window)===\"undefined\"||window!==r){Object.defineProperty(r,\"__esModule\",{value:!0})} else {delete r.default}});

", "wdn/templates_5.3/js/plugins/gsap/PixiPlugin.min.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/plugins/gsap/PixiPlugin.min.js");
    }
}