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

/* wdn/templates_5.3/js/compressed/plugins/colorbox/jquery.colorbox.js */
class __TwigTemplate_a7f12e515ee2cd6d6fce18f86521f8c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/colorbox/jquery.colorbox.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/colorbox/jquery.colorbox.js"));

        // line 1
        echo "!function(t){\"function\"==typeof define&&define.amd?define([\"jquery\"],t):t(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(t){function e(e,i,n){var o=document.createElement(e);return i&&(o.id=X+i),n&&(o.style.cssText=n),t(o)}function i(){return window.innerHeight?window.innerHeight:t(window).height()}function n(e,i){i!==Object(i)&&(i={}),this.cache={},this.el=e,this.value=function(e){var n;return void 0===this.cache[e]&&(n=t(this.el).attr(\"data-cbox-\"+e),void 0!==n?this.cache[e]=n:void 0!==i[e]?this.cache[e]=i[e]:void 0!==J[e]&&(this.cache[e]=J[e])),this.cache[e]},this.get=function(e){var i=this.value(e);return t.isFunction(i)?i.call(this.el,this):i}}function o(t){var e=H.length,i=(N+t)%e;return i<0?e+i:i}function r(t,e){return Math.round((/%/.test(t)?(\"x\"===e?k.width():i())/100:1)*parseInt(t,10))}function h(t,e){return t.get(\"photo\")||t.get(\"photoRegex\").test(e)}function a(t,e){return t.get(\"retinaUrl\")&&window.devicePixelRatio>1?e.replace(t.get(\"photoRegex\"),t.get(\"retinaSuffix\")):e}function s(t){\"contains\"in w[0]&&!w[0].contains(t.target)&&t.target!==m[0]&&(t.stopPropagation(),w.focus())}function d(t){d.str!==t&&(w.add(m).removeClass(d.str).addClass(t),d.str=t)}function l(e){N=0,e&&!1!==e&&\"nofollow\"!==e?(H=t(\".\"+Y).filter(function(){return new n(this,t.data(this,V)).get(\"rel\")===e}),-1===(N=H.index(K.el))&&(H=H.add(K.el),N=H.length-1)):H=t(K.el)}function c(e){t(document).trigger(e),rt.triggerHandler(e)}function u(i){var o;if(!U){if(o=t(i).data(V),K=new n(i,o),l(K.get(\"rel\")),!z){z=A=!0,d(K.get(\"className\")),w.css({visibility:\"hidden\",display:\"block\",opacity:\"\"}),W=e(ht,\"LoadedContent\",\"width:0; height:0; overflow:hidden; visibility:hidden\"),y.css({width:\"\",height:\"\"}).append(W),B=x.height()+C.height()+y.outerHeight(!0)-y.height(),O=b.width()+T.width()+y.outerWidth(!0)-y.width(),_=W.outerHeight(!0),D=W.outerWidth(!0);var h=r(K.get(\"initialWidth\"),\"x\"),a=r(K.get(\"initialHeight\"),\"y\"),u=K.get(\"maxWidth\"),g=K.get(\"maxHeight\");K.w=Math.max((!1!==u?Math.min(h,r(u,\"x\")):h)-D-O,0),K.h=Math.max((!1!==g?Math.min(a,r(g,\"y\")):a)-_-B,0),W.css({width:\"\",height:K.h}),G.position(),c(Z),K.get(\"onOpen\"),j.add(M).hide(),w.focus(),K.get(\"trapFocus\")&&document.addEventListener&&(document.addEventListener(\"focus\",s,!0),rt.one(nt,function(){document.removeEventListener(\"focus\",s,!0)})),K.get(\"returnFocus\")&&rt.one(nt,function(){t(K.el).focus()})}var f=parseFloat(K.get(\"opacity\"));m.css({opacity:f===f?f:\"\",cursor:K.get(\"overlayClose\")?\"pointer\":\"\",visibility:\"visible\"}).show(),K.get(\"closeButton\")?R.html(K.get(\"close\")).appendTo(y):R.appendTo(\"<div/>\"),p()}}function g(){w||(Q=!1,k=t(window),w=e(ht).attr({id:V,class:!1===t.support.opacity?X+\"IE\":\"\",role:\"dialog\",tabindex:\"-1\"}).hide(),m=e(ht,\"Overlay\").hide(),I=t([e(ht,\"LoadingOverlay\")[0],e(ht,\"LoadingGraphic\")[0]]),v=e(ht,\"Wrapper\"),y=e(ht,\"Content\").append(M=e(ht,\"Title\"),L=e(ht,\"Current\"),P=t('<button type=\"button\"/>').attr({id:X+\"Previous\",title:\"Previous\"}),F=t('<button type=\"button\"/>').attr({id:X+\"Next\",title:\"Next\"}),S=e(\"button\",\"Slideshow\").attr({title:\"Slideshow\"}),I),R=t('<button type=\"button\"/>').attr({id:X+\"Close\"}),v.append(e(ht).append(e(ht,\"TopLeft\"),x=e(ht,\"TopCenter\"),e(ht,\"TopRight\")),e(ht,!1,\"clear:left\").append(b=e(ht,\"MiddleLeft\"),y,T=e(ht,\"MiddleRight\")),e(ht,!1,\"clear:left\").append(e(ht,\"BottomLeft\"),C=e(ht,\"BottomCenter\"),e(ht,\"BottomRight\"))).find(\"div div\").css({float:\"left\"}),E=e(ht,!1,\"position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;\"),j=F.add(P).add(L).add(S)),document.body&&!w.parent().length&&t(document.body).append(m,w.append(v,E))}function f(){function e(t){t.which>1||t.shiftKey||t.altKey||t.metaKey||t.ctrlKey||(t.preventDefault(),u(this))}return!!w&&(Q||(Q=!0,F.click(function(){G.next()}),P.click(function(){G.prev()}),R.click(function(){G.close()}),m.click(function(){K.get(\"overlayClose\")&&G.close()}),t(document).bind(\"keydown.\"+X,function(t){var e=t.keyCode;z&&K.get(\"escKey\")&&27===e&&(t.preventDefault(),G.close()),z&&K.get(\"arrowKey\")&&H[1]&&!t.altKey&&(37===e?(t.preventDefault(),P.click()):39===e&&(t.preventDefault(),F.click()))}),t.isFunction(t.fn.on)?t(document).on(\"click.\"+X,\".\"+Y,e):t(\".\"+Y).live(\"click.\"+X,e)),!0)}function p(){var i,n,o,s=G.prep,d=++at;if(A=!0,q=!1,c(ot),c(tt),K.get(\"onLoad\"),K.h=K.get(\"height\")?r(K.get(\"height\"),\"y\")-_-B:K.get(\"innerHeight\")&&r(K.get(\"innerHeight\"),\"y\"),K.w=K.get(\"width\")?r(K.get(\"width\"),\"x\")-D-O:K.get(\"innerWidth\")&&r(K.get(\"innerWidth\"),\"x\"),K.mw=K.w,K.mh=K.h,K.get(\"maxWidth\")&&(K.mw=r(K.get(\"maxWidth\"),\"x\")-D-O,K.mw=K.w&&K.w<K.mw?K.w:K.mw),K.get(\"maxHeight\")&&(K.mh=r(K.get(\"maxHeight\"),\"y\")-_-B,K.mh=K.h&&K.h<K.mh?K.h:K.mh),i=K.get(\"href\"),\$=setTimeout(function(){I.show()},100),K.get(\"inline\")){var l=t(i);o=t(\"<div>\").hide().insertBefore(l),rt.one(ot,function(){o.replaceWith(l)}),s(l)}else K.get(\"iframe\")?s(\" \"):K.get(\"html\")?s(K.get(\"html\")):h(K,i)?(i=a(K,i),q=K.get(\"createImg\"),t(q).addClass(X+\"Photo\").bind(\"error.\"+X,function(){s(e(ht,\"Error\").html(K.get(\"imgError\")))}).one(\"load\",function(){d===at&&setTimeout(function(){var e;K.get(\"retinaImage\")&&window.devicePixelRatio>1&&(q.height=q.height/window.devicePixelRatio,q.width=q.width/window.devicePixelRatio),K.get(\"scalePhotos\")&&(n=function(){q.height-=q.height*e,q.width-=q.width*e},K.mw&&q.width>K.mw&&(e=(q.width-K.mw)/q.width,n()),K.mh&&q.height>K.mh&&(e=(q.height-K.mh)/q.height,n())),K.h&&(q.style.marginTop=Math.max(K.mh-q.height,0)/2+\"px\"),H[1]&&(K.get(\"loop\")||H[N+1])&&(q.style.cursor=\"pointer\",t(q).bind(\"click.\"+X,function(){G.next()})),q.style.width=q.width+\"px\",q.style.height=q.height+\"px\",s(q)},1)}),q.src=i):i&&E.load(i,K.get(\"data\"),function(i,n){d===at&&s(\"error\"===n?e(ht,\"Error\").html(K.get(\"xhrError\")):t(this).contents())})}var m,w,v,y,x,b,T,C,H,k,W,E,I,M,L,S,F,P,R,j,K,B,O,_,D,N,q,z,A,U,\$,G,Q,J={html:!1,photo:!1,iframe:!1,inline:!1,transition:\"elastic\",speed:300,fadeOut:300,width:!1,initialWidth:\"600\",innerWidth:!1,maxWidth:!1,height:!1,initialHeight:\"450\",innerHeight:!1,maxHeight:!1,scalePhotos:!0,scrolling:!0,opacity:.9,preloading:!0,className:!1,overlayClose:!0,escKey:!0,arrowKey:!0,top:!1,bottom:!1,left:!1,right:!1,fixed:!1,data:void 0,closeButton:!0,fastIframe:!0,open:!1,reposition:!0,loop:!0,slideshow:!1,slideshowAuto:!0,slideshowSpeed:2500,slideshowStart:\"start slideshow\",slideshowStop:\"stop slideshow\",photoRegex:/\\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\\?).*)?\$/i,retinaImage:!1,retinaUrl:!1,retinaSuffix:\"@2x.\$1\",current:\"image {current} of {total}\",previous:\"previous\",next:\"next\",close:\"close\",xhrError:\"This content failed to load.\",imgError:\"This image failed to load.\",returnFocus:!0,trapFocus:!0,onOpen:!1,onLoad:!1,onComplete:!1,onCleanup:!1,onClosed:!1,rel:function(){return this.rel},href:function(){return t(this).attr(\"href\")},title:function(){return this.title},createImg:function(){var e=new Image,i=t(this).data(\"cbox-img-attrs\");return\"object\"==typeof i&&t.each(i,function(t,i){e[t]=i}),e},createIframe:function(){var e=document.createElement(\"iframe\"),i=t(this).data(\"cbox-iframe-attrs\");return\"object\"==typeof i&&t.each(i,function(t,i){e[t]=i}),\"frameBorder\"in e&&(e.frameBorder=0),\"allowTransparency\"in e&&(e.allowTransparency=\"true\"),e.name=(new Date).getTime(),e.allowFullscreen=!0,e}},V=\"colorbox\",X=\"cbox\",Y=X+\"Element\",Z=X+\"_open\",tt=X+\"_load\",et=X+\"_complete\",it=X+\"_cleanup\",nt=X+\"_closed\",ot=X+\"_purge\",rt=t(\"<a/>\"),ht=\"div\",at=0,st={},dt=function(){function t(){clearTimeout(h)}function e(){(K.get(\"loop\")||H[N+1])&&(t(),h=setTimeout(G.next,K.get(\"slideshowSpeed\")))}function i(){S.html(K.get(\"slideshowStop\")).unbind(s).one(s,n),rt.bind(et,e).bind(tt,t),w.removeClass(a+\"off\").addClass(a+\"on\")}function n(){t(),rt.unbind(et,e).unbind(tt,t),S.html(K.get(\"slideshowStart\")).unbind(s).one(s,function(){G.next(),i()}),w.removeClass(a+\"on\").addClass(a+\"off\")}function o(){r=!1,S.hide(),t(),rt.unbind(et,e).unbind(tt,t),w.removeClass(a+\"off \"+a+\"on\")}var r,h,a=X+\"Slideshow_\",s=\"click.\"+X;return function(){r?K.get(\"slideshow\")||(rt.unbind(it,o),o()):K.get(\"slideshow\")&&H[1]&&(r=!0,rt.one(it,o),K.get(\"slideshowAuto\")?i():n(),S.show())}}();t[V]||(t(g),G=t.fn[V]=t[V]=function(e,i){var o,r=this;return e=e||{},t.isFunction(r)&&(r=t(\"<a/>\"),e.open=!0),r[0]?(g(),f()&&(i&&(e.onComplete=i),r.each(function(){var i=t.data(this,V)||{};t.data(this,V,t.extend(i,e))}).addClass(Y),o=new n(r[0],e),o.get(\"open\")&&u(r[0])),r):r},G.position=function(e,n){function o(){x[0].style.width=C[0].style.width=y[0].style.width=parseInt(w[0].style.width,10)-O+\"px\",y[0].style.height=b[0].style.height=T[0].style.height=parseInt(w[0].style.height,10)-B+\"px\"}var h,a,s,d=0,l=0,c=w.offset();if(k.unbind(\"resize.\"+X),w.css({top:-9e4,left:-9e4}),a=k.scrollTop(),s=k.scrollLeft(),K.get(\"fixed\")?(c.top-=a,c.left-=s,w.css({position:\"fixed\"})):(d=a,l=s,w.css({position:\"absolute\"})),!1!==K.get(\"right\")?l+=Math.max(k.width()-K.w-D-O-r(K.get(\"right\"),\"x\"),0):!1!==K.get(\"left\")?l+=r(K.get(\"left\"),\"x\"):l+=Math.round(Math.max(k.width()-K.w-D-O,0)/2),!1!==K.get(\"bottom\")?d+=Math.max(i()-K.h-_-B-r(K.get(\"bottom\"),\"y\"),0):!1!==K.get(\"top\")?d+=r(K.get(\"top\"),\"y\"):d+=Math.round(Math.max(i()-K.h-_-B,0)/2),w.css({top:c.top,left:c.left,visibility:\"visible\"}),v[0].style.width=v[0].style.height=\"9999px\",h={width:K.w+D+O,height:K.h+_+B,top:d,left:l},e){var u=0;t.each(h,function(t){if(h[t]!==st[t])return void(u=e)}),e=u}st=h,e||w.css(h),w.dequeue().animate(h,{duration:e||0,complete:function(){o(),A=!1,v[0].style.width=K.w+D+O+\"px\",v[0].style.height=K.h+_+B+\"px\",K.get(\"reposition\")&&setTimeout(function(){k.bind(\"resize.\"+X,G.position)},1),t.isFunction(n)&&n()},step:o})},G.resize=function(t){var e;z&&(t=t||{},t.width&&(K.w=r(t.width,\"x\")-D-O),t.innerWidth&&(K.w=r(t.innerWidth,\"x\")),W.css({width:K.w}),t.height&&(K.h=r(t.height,\"y\")-_-B),t.innerHeight&&(K.h=r(t.innerHeight,\"y\")),t.innerHeight||t.height||(e=W.scrollTop(),W.css({height:\"auto\"}),K.h=W.height()),W.css({height:K.h}),e&&W.scrollTop(e),G.position(\"none\"===K.get(\"transition\")?0:K.get(\"speed\")))},G.prep=function(i){if(z){var r,s=\"none\"===K.get(\"transition\")?0:K.get(\"speed\");W.remove(),W=e(ht,\"LoadedContent\").append(i),W.hide().appendTo(E.show()).css({width:function(){return K.w=K.w||W.width(),K.w=K.mw&&K.mw<K.w?K.mw:K.w,K.w}(),overflow:K.get(\"scrolling\")?\"auto\":\"hidden\"}).css({height:function(){return K.h=K.h||W.height(),K.h=K.mh&&K.mh<K.h?K.mh:K.h,K.h}()}).prependTo(y),E.hide(),t(q).css({float:\"none\"}),d(K.get(\"className\")),r=function(){function e(){!1===t.support.opacity&&w[0].style.removeAttribute(\"filter\")}var i,r,d=H.length;z&&(r=function(){clearTimeout(\$),I.hide(),c(et),K.get(\"onComplete\")},M.html(K.get(\"title\")).show(),W.show(),d>1?(\"string\"==typeof K.get(\"current\")&&L.html(K.get(\"current\").replace(\"{current}\",N+1).replace(\"{total}\",d)).show(),F[K.get(\"loop\")||N<d-1?\"show\":\"hide\"]().html(K.get(\"next\")),P[K.get(\"loop\")||N?\"show\":\"hide\"]().html(K.get(\"previous\")),dt(),K.get(\"preloading\")&&t.each([o(-1),o(1)],function(){var e,i=H[this],o=new n(i,t.data(i,V)),r=o.get(\"href\");r&&h(o,r)&&(r=a(o,r),e=document.createElement(\"img\"),e.src=r)})):j.hide(),K.get(\"iframe\")?(i=K.get(\"createIframe\"),K.get(\"scrolling\")||(i.scrolling=\"no\"),t(i).attr({src:K.get(\"href\"),class:X+\"Iframe\"}).one(\"load\",r).appendTo(W),rt.one(ot,function(){i.src=\"//about:blank\"}),K.get(\"fastIframe\")&&t(i).trigger(\"load\")):r(),\"fade\"===K.get(\"transition\")?w.fadeTo(s,1,e):e())},\"fade\"===K.get(\"transition\")?w.fadeTo(s,0,function(){G.position(0,r)}):G.position(s,r)}},G.next=function(){!A&&H[1]&&(K.get(\"loop\")||H[N+1])&&(N=o(1),u(H[N]))},G.prev=function(){!A&&H[1]&&(K.get(\"loop\")||N)&&(N=o(-1),u(H[N]))},G.close=function(){z&&!U&&(U=!0,z=!1,c(it),K.get(\"onCleanup\"),k.unbind(\".\"+X),m.fadeTo(K.get(\"fadeOut\")||0,0),w.stop().fadeTo(K.get(\"fadeOut\")||0,0,function(){w.hide(),m.hide(),c(ot),W.remove(),setTimeout(function(){U=!1,c(nt),K.get(\"onClosed\")},1)}))},G.remove=function(){w&&(w.stop(),t[V].close(),w.stop(!1,!0).remove(),m.remove(),U=!1,w=null,t(\".\"+Y).removeData(V).removeClass(Y),t(document).unbind(\"click.\"+X).unbind(\"keydown.\"+X))},G.element=function(){return t(K.el)},G.settings=J)});
//# sourceMappingURL=jquery.colorbox.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/colorbox/jquery.colorbox.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t){\"function\"==typeof define&&define.amd?define([\"jquery\"],t):t(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(t){function e(e,i,n){var o=document.createElement(e);return i&&(o.id=X+i),n&&(o.style.cssText=n),t(o)}function i(){return window.innerHeight?window.innerHeight:t(window).height()}function n(e,i){i!==Object(i)&&(i={}),this.cache={},this.el=e,this.value=function(e){var n;return void 0===this.cache[e]&&(n=t(this.el).attr(\"data-cbox-\"+e),void 0!==n?this.cache[e]=n:void 0!==i[e]?this.cache[e]=i[e]:void 0!==J[e]&&(this.cache[e]=J[e])),this.cache[e]},this.get=function(e){var i=this.value(e);return t.isFunction(i)?i.call(this.el,this):i}}function o(t){var e=H.length,i=(N+t)%e;return i<0?e+i:i}function r(t,e){return Math.round((/%/.test(t)?(\"x\"===e?k.width():i())/100:1)*parseInt(t,10))}function h(t,e){return t.get(\"photo\")||t.get(\"photoRegex\").test(e)}function a(t,e){return t.get(\"retinaUrl\")&&window.devicePixelRatio>1?e.replace(t.get(\"photoRegex\"),t.get(\"retinaSuffix\")):e}function s(t){\"contains\"in w[0]&&!w[0].contains(t.target)&&t.target!==m[0]&&(t.stopPropagation(),w.focus())}function d(t){d.str!==t&&(w.add(m).removeClass(d.str).addClass(t),d.str=t)}function l(e){N=0,e&&!1!==e&&\"nofollow\"!==e?(H=t(\".\"+Y).filter(function(){return new n(this,t.data(this,V)).get(\"rel\")===e}),-1===(N=H.index(K.el))&&(H=H.add(K.el),N=H.length-1)):H=t(K.el)}function c(e){t(document).trigger(e),rt.triggerHandler(e)}function u(i){var o;if(!U){if(o=t(i).data(V),K=new n(i,o),l(K.get(\"rel\")),!z){z=A=!0,d(K.get(\"className\")),w.css({visibility:\"hidden\",display:\"block\",opacity:\"\"}),W=e(ht,\"LoadedContent\",\"width:0; height:0; overflow:hidden; visibility:hidden\"),y.css({width:\"\",height:\"\"}).append(W),B=x.height()+C.height()+y.outerHeight(!0)-y.height(),O=b.width()+T.width()+y.outerWidth(!0)-y.width(),_=W.outerHeight(!0),D=W.outerWidth(!0);var h=r(K.get(\"initialWidth\"),\"x\"),a=r(K.get(\"initialHeight\"),\"y\"),u=K.get(\"maxWidth\"),g=K.get(\"maxHeight\");K.w=Math.max((!1!==u?Math.min(h,r(u,\"x\")):h)-D-O,0),K.h=Math.max((!1!==g?Math.min(a,r(g,\"y\")):a)-_-B,0),W.css({width:\"\",height:K.h}),G.position(),c(Z),K.get(\"onOpen\"),j.add(M).hide(),w.focus(),K.get(\"trapFocus\")&&document.addEventListener&&(document.addEventListener(\"focus\",s,!0),rt.one(nt,function(){document.removeEventListener(\"focus\",s,!0)})),K.get(\"returnFocus\")&&rt.one(nt,function(){t(K.el).focus()})}var f=parseFloat(K.get(\"opacity\"));m.css({opacity:f===f?f:\"\",cursor:K.get(\"overlayClose\")?\"pointer\":\"\",visibility:\"visible\"}).show(),K.get(\"closeButton\")?R.html(K.get(\"close\")).appendTo(y):R.appendTo(\"<div/>\"),p()}}function g(){w||(Q=!1,k=t(window),w=e(ht).attr({id:V,class:!1===t.support.opacity?X+\"IE\":\"\",role:\"dialog\",tabindex:\"-1\"}).hide(),m=e(ht,\"Overlay\").hide(),I=t([e(ht,\"LoadingOverlay\")[0],e(ht,\"LoadingGraphic\")[0]]),v=e(ht,\"Wrapper\"),y=e(ht,\"Content\").append(M=e(ht,\"Title\"),L=e(ht,\"Current\"),P=t('<button type=\"button\"/>').attr({id:X+\"Previous\",title:\"Previous\"}),F=t('<button type=\"button\"/>').attr({id:X+\"Next\",title:\"Next\"}),S=e(\"button\",\"Slideshow\").attr({title:\"Slideshow\"}),I),R=t('<button type=\"button\"/>').attr({id:X+\"Close\"}),v.append(e(ht).append(e(ht,\"TopLeft\"),x=e(ht,\"TopCenter\"),e(ht,\"TopRight\")),e(ht,!1,\"clear:left\").append(b=e(ht,\"MiddleLeft\"),y,T=e(ht,\"MiddleRight\")),e(ht,!1,\"clear:left\").append(e(ht,\"BottomLeft\"),C=e(ht,\"BottomCenter\"),e(ht,\"BottomRight\"))).find(\"div div\").css({float:\"left\"}),E=e(ht,!1,\"position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;\"),j=F.add(P).add(L).add(S)),document.body&&!w.parent().length&&t(document.body).append(m,w.append(v,E))}function f(){function e(t){t.which>1||t.shiftKey||t.altKey||t.metaKey||t.ctrlKey||(t.preventDefault(),u(this))}return!!w&&(Q||(Q=!0,F.click(function(){G.next()}),P.click(function(){G.prev()}),R.click(function(){G.close()}),m.click(function(){K.get(\"overlayClose\")&&G.close()}),t(document).bind(\"keydown.\"+X,function(t){var e=t.keyCode;z&&K.get(\"escKey\")&&27===e&&(t.preventDefault(),G.close()),z&&K.get(\"arrowKey\")&&H[1]&&!t.altKey&&(37===e?(t.preventDefault(),P.click()):39===e&&(t.preventDefault(),F.click()))}),t.isFunction(t.fn.on)?t(document).on(\"click.\"+X,\".\"+Y,e):t(\".\"+Y).live(\"click.\"+X,e)),!0)}function p(){var i,n,o,s=G.prep,d=++at;if(A=!0,q=!1,c(ot),c(tt),K.get(\"onLoad\"),K.h=K.get(\"height\")?r(K.get(\"height\"),\"y\")-_-B:K.get(\"innerHeight\")&&r(K.get(\"innerHeight\"),\"y\"),K.w=K.get(\"width\")?r(K.get(\"width\"),\"x\")-D-O:K.get(\"innerWidth\")&&r(K.get(\"innerWidth\"),\"x\"),K.mw=K.w,K.mh=K.h,K.get(\"maxWidth\")&&(K.mw=r(K.get(\"maxWidth\"),\"x\")-D-O,K.mw=K.w&&K.w<K.mw?K.w:K.mw),K.get(\"maxHeight\")&&(K.mh=r(K.get(\"maxHeight\"),\"y\")-_-B,K.mh=K.h&&K.h<K.mh?K.h:K.mh),i=K.get(\"href\"),\$=setTimeout(function(){I.show()},100),K.get(\"inline\")){var l=t(i);o=t(\"<div>\").hide().insertBefore(l),rt.one(ot,function(){o.replaceWith(l)}),s(l)}else K.get(\"iframe\")?s(\" \"):K.get(\"html\")?s(K.get(\"html\")):h(K,i)?(i=a(K,i),q=K.get(\"createImg\"),t(q).addClass(X+\"Photo\").bind(\"error.\"+X,function(){s(e(ht,\"Error\").html(K.get(\"imgError\")))}).one(\"load\",function(){d===at&&setTimeout(function(){var e;K.get(\"retinaImage\")&&window.devicePixelRatio>1&&(q.height=q.height/window.devicePixelRatio,q.width=q.width/window.devicePixelRatio),K.get(\"scalePhotos\")&&(n=function(){q.height-=q.height*e,q.width-=q.width*e},K.mw&&q.width>K.mw&&(e=(q.width-K.mw)/q.width,n()),K.mh&&q.height>K.mh&&(e=(q.height-K.mh)/q.height,n())),K.h&&(q.style.marginTop=Math.max(K.mh-q.height,0)/2+\"px\"),H[1]&&(K.get(\"loop\")||H[N+1])&&(q.style.cursor=\"pointer\",t(q).bind(\"click.\"+X,function(){G.next()})),q.style.width=q.width+\"px\",q.style.height=q.height+\"px\",s(q)},1)}),q.src=i):i&&E.load(i,K.get(\"data\"),function(i,n){d===at&&s(\"error\"===n?e(ht,\"Error\").html(K.get(\"xhrError\")):t(this).contents())})}var m,w,v,y,x,b,T,C,H,k,W,E,I,M,L,S,F,P,R,j,K,B,O,_,D,N,q,z,A,U,\$,G,Q,J={html:!1,photo:!1,iframe:!1,inline:!1,transition:\"elastic\",speed:300,fadeOut:300,width:!1,initialWidth:\"600\",innerWidth:!1,maxWidth:!1,height:!1,initialHeight:\"450\",innerHeight:!1,maxHeight:!1,scalePhotos:!0,scrolling:!0,opacity:.9,preloading:!0,className:!1,overlayClose:!0,escKey:!0,arrowKey:!0,top:!1,bottom:!1,left:!1,right:!1,fixed:!1,data:void 0,closeButton:!0,fastIframe:!0,open:!1,reposition:!0,loop:!0,slideshow:!1,slideshowAuto:!0,slideshowSpeed:2500,slideshowStart:\"start slideshow\",slideshowStop:\"stop slideshow\",photoRegex:/\\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\\?).*)?\$/i,retinaImage:!1,retinaUrl:!1,retinaSuffix:\"@2x.\$1\",current:\"image {current} of {total}\",previous:\"previous\",next:\"next\",close:\"close\",xhrError:\"This content failed to load.\",imgError:\"This image failed to load.\",returnFocus:!0,trapFocus:!0,onOpen:!1,onLoad:!1,onComplete:!1,onCleanup:!1,onClosed:!1,rel:function(){return this.rel},href:function(){return t(this).attr(\"href\")},title:function(){return this.title},createImg:function(){var e=new Image,i=t(this).data(\"cbox-img-attrs\");return\"object\"==typeof i&&t.each(i,function(t,i){e[t]=i}),e},createIframe:function(){var e=document.createElement(\"iframe\"),i=t(this).data(\"cbox-iframe-attrs\");return\"object\"==typeof i&&t.each(i,function(t,i){e[t]=i}),\"frameBorder\"in e&&(e.frameBorder=0),\"allowTransparency\"in e&&(e.allowTransparency=\"true\"),e.name=(new Date).getTime(),e.allowFullscreen=!0,e}},V=\"colorbox\",X=\"cbox\",Y=X+\"Element\",Z=X+\"_open\",tt=X+\"_load\",et=X+\"_complete\",it=X+\"_cleanup\",nt=X+\"_closed\",ot=X+\"_purge\",rt=t(\"<a/>\"),ht=\"div\",at=0,st={},dt=function(){function t(){clearTimeout(h)}function e(){(K.get(\"loop\")||H[N+1])&&(t(),h=setTimeout(G.next,K.get(\"slideshowSpeed\")))}function i(){S.html(K.get(\"slideshowStop\")).unbind(s).one(s,n),rt.bind(et,e).bind(tt,t),w.removeClass(a+\"off\").addClass(a+\"on\")}function n(){t(),rt.unbind(et,e).unbind(tt,t),S.html(K.get(\"slideshowStart\")).unbind(s).one(s,function(){G.next(),i()}),w.removeClass(a+\"on\").addClass(a+\"off\")}function o(){r=!1,S.hide(),t(),rt.unbind(et,e).unbind(tt,t),w.removeClass(a+\"off \"+a+\"on\")}var r,h,a=X+\"Slideshow_\",s=\"click.\"+X;return function(){r?K.get(\"slideshow\")||(rt.unbind(it,o),o()):K.get(\"slideshow\")&&H[1]&&(r=!0,rt.one(it,o),K.get(\"slideshowAuto\")?i():n(),S.show())}}();t[V]||(t(g),G=t.fn[V]=t[V]=function(e,i){var o,r=this;return e=e||{},t.isFunction(r)&&(r=t(\"<a/>\"),e.open=!0),r[0]?(g(),f()&&(i&&(e.onComplete=i),r.each(function(){var i=t.data(this,V)||{};t.data(this,V,t.extend(i,e))}).addClass(Y),o=new n(r[0],e),o.get(\"open\")&&u(r[0])),r):r},G.position=function(e,n){function o(){x[0].style.width=C[0].style.width=y[0].style.width=parseInt(w[0].style.width,10)-O+\"px\",y[0].style.height=b[0].style.height=T[0].style.height=parseInt(w[0].style.height,10)-B+\"px\"}var h,a,s,d=0,l=0,c=w.offset();if(k.unbind(\"resize.\"+X),w.css({top:-9e4,left:-9e4}),a=k.scrollTop(),s=k.scrollLeft(),K.get(\"fixed\")?(c.top-=a,c.left-=s,w.css({position:\"fixed\"})):(d=a,l=s,w.css({position:\"absolute\"})),!1!==K.get(\"right\")?l+=Math.max(k.width()-K.w-D-O-r(K.get(\"right\"),\"x\"),0):!1!==K.get(\"left\")?l+=r(K.get(\"left\"),\"x\"):l+=Math.round(Math.max(k.width()-K.w-D-O,0)/2),!1!==K.get(\"bottom\")?d+=Math.max(i()-K.h-_-B-r(K.get(\"bottom\"),\"y\"),0):!1!==K.get(\"top\")?d+=r(K.get(\"top\"),\"y\"):d+=Math.round(Math.max(i()-K.h-_-B,0)/2),w.css({top:c.top,left:c.left,visibility:\"visible\"}),v[0].style.width=v[0].style.height=\"9999px\",h={width:K.w+D+O,height:K.h+_+B,top:d,left:l},e){var u=0;t.each(h,function(t){if(h[t]!==st[t])return void(u=e)}),e=u}st=h,e||w.css(h),w.dequeue().animate(h,{duration:e||0,complete:function(){o(),A=!1,v[0].style.width=K.w+D+O+\"px\",v[0].style.height=K.h+_+B+\"px\",K.get(\"reposition\")&&setTimeout(function(){k.bind(\"resize.\"+X,G.position)},1),t.isFunction(n)&&n()},step:o})},G.resize=function(t){var e;z&&(t=t||{},t.width&&(K.w=r(t.width,\"x\")-D-O),t.innerWidth&&(K.w=r(t.innerWidth,\"x\")),W.css({width:K.w}),t.height&&(K.h=r(t.height,\"y\")-_-B),t.innerHeight&&(K.h=r(t.innerHeight,\"y\")),t.innerHeight||t.height||(e=W.scrollTop(),W.css({height:\"auto\"}),K.h=W.height()),W.css({height:K.h}),e&&W.scrollTop(e),G.position(\"none\"===K.get(\"transition\")?0:K.get(\"speed\")))},G.prep=function(i){if(z){var r,s=\"none\"===K.get(\"transition\")?0:K.get(\"speed\");W.remove(),W=e(ht,\"LoadedContent\").append(i),W.hide().appendTo(E.show()).css({width:function(){return K.w=K.w||W.width(),K.w=K.mw&&K.mw<K.w?K.mw:K.w,K.w}(),overflow:K.get(\"scrolling\")?\"auto\":\"hidden\"}).css({height:function(){return K.h=K.h||W.height(),K.h=K.mh&&K.mh<K.h?K.mh:K.h,K.h}()}).prependTo(y),E.hide(),t(q).css({float:\"none\"}),d(K.get(\"className\")),r=function(){function e(){!1===t.support.opacity&&w[0].style.removeAttribute(\"filter\")}var i,r,d=H.length;z&&(r=function(){clearTimeout(\$),I.hide(),c(et),K.get(\"onComplete\")},M.html(K.get(\"title\")).show(),W.show(),d>1?(\"string\"==typeof K.get(\"current\")&&L.html(K.get(\"current\").replace(\"{current}\",N+1).replace(\"{total}\",d)).show(),F[K.get(\"loop\")||N<d-1?\"show\":\"hide\"]().html(K.get(\"next\")),P[K.get(\"loop\")||N?\"show\":\"hide\"]().html(K.get(\"previous\")),dt(),K.get(\"preloading\")&&t.each([o(-1),o(1)],function(){var e,i=H[this],o=new n(i,t.data(i,V)),r=o.get(\"href\");r&&h(o,r)&&(r=a(o,r),e=document.createElement(\"img\"),e.src=r)})):j.hide(),K.get(\"iframe\")?(i=K.get(\"createIframe\"),K.get(\"scrolling\")||(i.scrolling=\"no\"),t(i).attr({src:K.get(\"href\"),class:X+\"Iframe\"}).one(\"load\",r).appendTo(W),rt.one(ot,function(){i.src=\"//about:blank\"}),K.get(\"fastIframe\")&&t(i).trigger(\"load\")):r(),\"fade\"===K.get(\"transition\")?w.fadeTo(s,1,e):e())},\"fade\"===K.get(\"transition\")?w.fadeTo(s,0,function(){G.position(0,r)}):G.position(s,r)}},G.next=function(){!A&&H[1]&&(K.get(\"loop\")||H[N+1])&&(N=o(1),u(H[N]))},G.prev=function(){!A&&H[1]&&(K.get(\"loop\")||N)&&(N=o(-1),u(H[N]))},G.close=function(){z&&!U&&(U=!0,z=!1,c(it),K.get(\"onCleanup\"),k.unbind(\".\"+X),m.fadeTo(K.get(\"fadeOut\")||0,0),w.stop().fadeTo(K.get(\"fadeOut\")||0,0,function(){w.hide(),m.hide(),c(ot),W.remove(),setTimeout(function(){U=!1,c(nt),K.get(\"onClosed\")},1)}))},G.remove=function(){w&&(w.stop(),t[V].close(),w.stop(!1,!0).remove(),m.remove(),U=!1,w=null,t(\".\"+Y).removeData(V).removeClass(Y),t(document).unbind(\"click.\"+X).unbind(\"keydown.\"+X))},G.element=function(){return t(K.el)},G.settings=J)});
//# sourceMappingURL=jquery.colorbox.js.map", "wdn/templates_5.3/js/compressed/plugins/colorbox/jquery.colorbox.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/colorbox/jquery.colorbox.js");
    }
}