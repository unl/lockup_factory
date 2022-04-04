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

/* wdn/templates_5.1/js/utility-scripts/critical-foft-preload-fallback-optional.js */
class __TwigTemplate_d5603db9d8030061ae220fe06587d065 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/utility-scripts/critical-foft-preload-fallback-optional.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/utility-scripts/critical-foft-preload-fallback-optional.js"));

        // line 1
        echo "(function() {
\t/* Font Face Observer v2.0.13 - © Bram Stein. License: BSD-3-Clause */
\t(function(){'use strict';var f,g=[];function l(a){g.push(a);1==g.length&&f()}function m(){for(;g.length;)g[0](),g.shift()}f=function(){setTimeout(m)};function n(a){this.a=p;this.b=void 0;this.f=[];var b=this;try{a(function(a){q(b,a)},function(a){r(b,a)})}catch(c){r(b,c)}}var p=2;function t(a){return new n(function(b,c){c(a)})}function u(a){return new n(function(b){b(a)})}function q(a,b){if(a.a==p){if(b==a)throw new TypeError;var c=!1;try{var d=b&&b.then;if(null!=b&&\"object\"==typeof b&&\"function\"==typeof d){d.call(b,function(b){c||q(a,b);c=!0},function(b){c||r(a,b);c=!0});return}}catch(e){c||r(a,e);return}a.a=0;a.b=b;v(a)}}
\tfunction r(a,b){if(a.a==p){if(b==a)throw new TypeError;a.a=1;a.b=b;v(a)}}function v(a){l(function(){if(a.a!=p)for(;a.f.length;){var b=a.f.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0==a.a?\"function\"==typeof c?e(c.call(void 0,a.b)):e(a.b):1==a.a&&(\"function\"==typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(h){b(h)}}})}n.prototype.g=function(a){return this.c(void 0,a)};n.prototype.c=function(a,b){var c=this;return new n(function(d,e){c.f.push([a,b,d,e]);v(c)})};
\tfunction w(a){return new n(function(b,c){function d(c){return function(d){h[c]=d;e+=1;e==a.length&&b(h)}}var e=0,h=[];0==a.length&&b(h);for(var k=0;k<a.length;k+=1)u(a[k]).c(d(k),c)})}function x(a){return new n(function(b,c){for(var d=0;d<a.length;d+=1)u(a[d]).c(b,c)})};window.Promise||(window.Promise=n,window.Promise.resolve=u,window.Promise.reject=t,window.Promise.race=x,window.Promise.all=w,window.Promise.prototype.then=n.prototype.c,window.Promise.prototype[\"catch\"]=n.prototype.g);}());

\t(function(){function l(a,b){document.addEventListener?a.addEventListener(\"scroll\",b,!1):a.attachEvent(\"scroll\",b)}function m(a){document.body?a():document.addEventListener?document.addEventListener(\"DOMContentLoaded\",function c(){document.removeEventListener(\"DOMContentLoaded\",c);a()}):document.attachEvent(\"onreadystatechange\",function k(){if(\"interactive\"==document.readyState||\"complete\"==document.readyState)document.detachEvent(\"onreadystatechange\",k),a()})};function r(a){this.a=document.createElement(\"div\");this.a.setAttribute(\"aria-hidden\",\"true\");this.a.appendChild(document.createTextNode(a));this.b=document.createElement(\"span\");this.c=document.createElement(\"span\");this.h=document.createElement(\"span\");this.f=document.createElement(\"span\");this.g=-1;this.b.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";this.c.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";
\tthis.f.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";this.h.style.cssText=\"display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;\";this.b.appendChild(this.h);this.c.appendChild(this.f);this.a.appendChild(this.b);this.a.appendChild(this.c)}
\tfunction t(a,b){a.a.style.cssText=\"max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:\"+b+\";\"}function y(a){var b=a.a.offsetWidth,c=b+100;a.f.style.width=c+\"px\";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.g!==b?(a.g=b,!0):!1}function z(a,b){function c(){var a=k;y(a)&&a.a.parentNode&&b(a.g)}var k=a;l(a.b,c);l(a.c,c);y(a)};function A(a,b){var c=b||{};this.family=a;this.style=c.style||\"normal\";this.weight=c.weight||\"normal\";this.stretch=c.stretch||\"normal\"}var B=null,C=null,E=null,F=null;function G(){if(null===C)if(J()&&/Apple/.test(window.navigator.vendor)){var a=/AppleWebKit\\/([0-9]+)(?:\\.([0-9]+))(?:\\.([0-9]+))/.exec(window.navigator.userAgent);C=!!a&&603>parseInt(a[1],10)}else C=!1;return C}function J(){null===F&&(F=!!document.fonts);return F}
\tfunction K(){if(null===E){var a=document.createElement(\"div\");try{a.style.font=\"condensed 100px sans-serif\"}catch(b){}E=\"\"!==a.style.font}return E}function L(a,b){return[a.style,a.weight,K()?a.stretch:\"\",\"100px\",b].join(\" \")}
\tA.prototype.load=function(a,b){var c=this,k=a||\"BESbswy\",q=0,D=b||3E3,H=(new Date).getTime();return new Promise(function(a,b){if(J()&&!G()){var M=new Promise(function(a,b){function e(){(new Date).getTime()-H>=D?b():document.fonts.load(L(c,'\"'+c.family+'\"'),k).then(function(c){1<=c.length?a():setTimeout(e,25)},function(){b()})}e()}),N=new Promise(function(a,c){q=setTimeout(c,D)});Promise.race([N,M]).then(function(){clearTimeout(q);a(c)},function(){b(c)})}else m(function(){function u(){var b;if(b=-1!=
\tf&&-1!=g||-1!=f&&-1!=h||-1!=g&&-1!=h)(b=f!=g&&f!=h&&g!=h)||(null===B&&(b=/AppleWebKit\\/([0-9]+)(?:\\.([0-9]+))/.exec(window.navigator.userAgent),B=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))),b=B&&(f==v&&g==v&&h==v||f==w&&g==w&&h==w||f==x&&g==x&&h==x)),b=!b;b&&(d.parentNode&&d.parentNode.removeChild(d),clearTimeout(q),a(c))}function I(){if((new Date).getTime()-H>=D)d.parentNode&&d.parentNode.removeChild(d),b(c);else{var a=document.hidden;if(!0===a||void 0===a)f=e.a.offsetWidth,
\tg=n.a.offsetWidth,h=p.a.offsetWidth,u();q=setTimeout(I,50)}}var e=new r(k),n=new r(k),p=new r(k),f=-1,g=-1,h=-1,v=-1,w=-1,x=-1,d=document.createElement(\"div\");d.dir=\"ltr\";t(e,L(c,\"sans-serif\"));t(n,L(c,\"serif\"));t(p,L(c,\"monospace\"));d.appendChild(e.a);d.appendChild(n.a);d.appendChild(p.a);document.body.appendChild(d);v=e.a.offsetWidth;w=n.a.offsetWidth;x=p.a.offsetWidth;I();z(e,function(a){f=a;u()});t(e,L(c,'\"'+c.family+'\",sans-serif'));z(n,function(a){g=a;u()});t(n,L(c,'\"'+c.family+'\",serif'));
\tz(p,function(a){h=a;u()});t(p,L(c,'\"'+c.family+'\",monospace'))})})};\"object\"===typeof module?module.exports=A:(window.FontFaceObserver=A,window.FontFaceObserver.prototype.load=A.prototype.load);}());

\t// App Code, don’t bother with the subset font here.
\tvar fontA = new FontFaceObserver(\"LiberatorHeavyItalic\");
\tvar fontB = new FontFaceObserver(\"LiberatorOutlineHeavyItalic\");

\tPromise.all([fontA.load(), fontB.load()]).then(function() {
\t\t// Don’t add the class here, we’re emulating font-display: optional (load for next view)
\t\t// document.documentElement.className += \" fonts-loaded-2\";

\t\t// Optimization for Repeat Views
\t\tsessionStorage.fontsLoadedCriticalFoftPreloadFallback = true;
\t});
})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/utility-scripts/critical-foft-preload-fallback-optional.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(function() {
\t/* Font Face Observer v2.0.13 - © Bram Stein. License: BSD-3-Clause */
\t(function(){'use strict';var f,g=[];function l(a){g.push(a);1==g.length&&f()}function m(){for(;g.length;)g[0](),g.shift()}f=function(){setTimeout(m)};function n(a){this.a=p;this.b=void 0;this.f=[];var b=this;try{a(function(a){q(b,a)},function(a){r(b,a)})}catch(c){r(b,c)}}var p=2;function t(a){return new n(function(b,c){c(a)})}function u(a){return new n(function(b){b(a)})}function q(a,b){if(a.a==p){if(b==a)throw new TypeError;var c=!1;try{var d=b&&b.then;if(null!=b&&\"object\"==typeof b&&\"function\"==typeof d){d.call(b,function(b){c||q(a,b);c=!0},function(b){c||r(a,b);c=!0});return}}catch(e){c||r(a,e);return}a.a=0;a.b=b;v(a)}}
\tfunction r(a,b){if(a.a==p){if(b==a)throw new TypeError;a.a=1;a.b=b;v(a)}}function v(a){l(function(){if(a.a!=p)for(;a.f.length;){var b=a.f.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0==a.a?\"function\"==typeof c?e(c.call(void 0,a.b)):e(a.b):1==a.a&&(\"function\"==typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(h){b(h)}}})}n.prototype.g=function(a){return this.c(void 0,a)};n.prototype.c=function(a,b){var c=this;return new n(function(d,e){c.f.push([a,b,d,e]);v(c)})};
\tfunction w(a){return new n(function(b,c){function d(c){return function(d){h[c]=d;e+=1;e==a.length&&b(h)}}var e=0,h=[];0==a.length&&b(h);for(var k=0;k<a.length;k+=1)u(a[k]).c(d(k),c)})}function x(a){return new n(function(b,c){for(var d=0;d<a.length;d+=1)u(a[d]).c(b,c)})};window.Promise||(window.Promise=n,window.Promise.resolve=u,window.Promise.reject=t,window.Promise.race=x,window.Promise.all=w,window.Promise.prototype.then=n.prototype.c,window.Promise.prototype[\"catch\"]=n.prototype.g);}());

\t(function(){function l(a,b){document.addEventListener?a.addEventListener(\"scroll\",b,!1):a.attachEvent(\"scroll\",b)}function m(a){document.body?a():document.addEventListener?document.addEventListener(\"DOMContentLoaded\",function c(){document.removeEventListener(\"DOMContentLoaded\",c);a()}):document.attachEvent(\"onreadystatechange\",function k(){if(\"interactive\"==document.readyState||\"complete\"==document.readyState)document.detachEvent(\"onreadystatechange\",k),a()})};function r(a){this.a=document.createElement(\"div\");this.a.setAttribute(\"aria-hidden\",\"true\");this.a.appendChild(document.createTextNode(a));this.b=document.createElement(\"span\");this.c=document.createElement(\"span\");this.h=document.createElement(\"span\");this.f=document.createElement(\"span\");this.g=-1;this.b.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";this.c.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";
\tthis.f.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";this.h.style.cssText=\"display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;\";this.b.appendChild(this.h);this.c.appendChild(this.f);this.a.appendChild(this.b);this.a.appendChild(this.c)}
\tfunction t(a,b){a.a.style.cssText=\"max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:\"+b+\";\"}function y(a){var b=a.a.offsetWidth,c=b+100;a.f.style.width=c+\"px\";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.g!==b?(a.g=b,!0):!1}function z(a,b){function c(){var a=k;y(a)&&a.a.parentNode&&b(a.g)}var k=a;l(a.b,c);l(a.c,c);y(a)};function A(a,b){var c=b||{};this.family=a;this.style=c.style||\"normal\";this.weight=c.weight||\"normal\";this.stretch=c.stretch||\"normal\"}var B=null,C=null,E=null,F=null;function G(){if(null===C)if(J()&&/Apple/.test(window.navigator.vendor)){var a=/AppleWebKit\\/([0-9]+)(?:\\.([0-9]+))(?:\\.([0-9]+))/.exec(window.navigator.userAgent);C=!!a&&603>parseInt(a[1],10)}else C=!1;return C}function J(){null===F&&(F=!!document.fonts);return F}
\tfunction K(){if(null===E){var a=document.createElement(\"div\");try{a.style.font=\"condensed 100px sans-serif\"}catch(b){}E=\"\"!==a.style.font}return E}function L(a,b){return[a.style,a.weight,K()?a.stretch:\"\",\"100px\",b].join(\" \")}
\tA.prototype.load=function(a,b){var c=this,k=a||\"BESbswy\",q=0,D=b||3E3,H=(new Date).getTime();return new Promise(function(a,b){if(J()&&!G()){var M=new Promise(function(a,b){function e(){(new Date).getTime()-H>=D?b():document.fonts.load(L(c,'\"'+c.family+'\"'),k).then(function(c){1<=c.length?a():setTimeout(e,25)},function(){b()})}e()}),N=new Promise(function(a,c){q=setTimeout(c,D)});Promise.race([N,M]).then(function(){clearTimeout(q);a(c)},function(){b(c)})}else m(function(){function u(){var b;if(b=-1!=
\tf&&-1!=g||-1!=f&&-1!=h||-1!=g&&-1!=h)(b=f!=g&&f!=h&&g!=h)||(null===B&&(b=/AppleWebKit\\/([0-9]+)(?:\\.([0-9]+))/.exec(window.navigator.userAgent),B=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))),b=B&&(f==v&&g==v&&h==v||f==w&&g==w&&h==w||f==x&&g==x&&h==x)),b=!b;b&&(d.parentNode&&d.parentNode.removeChild(d),clearTimeout(q),a(c))}function I(){if((new Date).getTime()-H>=D)d.parentNode&&d.parentNode.removeChild(d),b(c);else{var a=document.hidden;if(!0===a||void 0===a)f=e.a.offsetWidth,
\tg=n.a.offsetWidth,h=p.a.offsetWidth,u();q=setTimeout(I,50)}}var e=new r(k),n=new r(k),p=new r(k),f=-1,g=-1,h=-1,v=-1,w=-1,x=-1,d=document.createElement(\"div\");d.dir=\"ltr\";t(e,L(c,\"sans-serif\"));t(n,L(c,\"serif\"));t(p,L(c,\"monospace\"));d.appendChild(e.a);d.appendChild(n.a);d.appendChild(p.a);document.body.appendChild(d);v=e.a.offsetWidth;w=n.a.offsetWidth;x=p.a.offsetWidth;I();z(e,function(a){f=a;u()});t(e,L(c,'\"'+c.family+'\",sans-serif'));z(n,function(a){g=a;u()});t(n,L(c,'\"'+c.family+'\",serif'));
\tz(p,function(a){h=a;u()});t(p,L(c,'\"'+c.family+'\",monospace'))})})};\"object\"===typeof module?module.exports=A:(window.FontFaceObserver=A,window.FontFaceObserver.prototype.load=A.prototype.load);}());

\t// App Code, don’t bother with the subset font here.
\tvar fontA = new FontFaceObserver(\"LiberatorHeavyItalic\");
\tvar fontB = new FontFaceObserver(\"LiberatorOutlineHeavyItalic\");

\tPromise.all([fontA.load(), fontB.load()]).then(function() {
\t\t// Don’t add the class here, we’re emulating font-display: optional (load for next view)
\t\t// document.documentElement.className += \" fonts-loaded-2\";

\t\t// Optimization for Repeat Views
\t\tsessionStorage.fontsLoadedCriticalFoftPreloadFallback = true;
\t});
})();", "wdn/templates_5.1/js/utility-scripts/critical-foft-preload-fallback-optional.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/utility-scripts/critical-foft-preload-fallback-optional.js");
    }
}
