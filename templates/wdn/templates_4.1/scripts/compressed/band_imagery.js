define("require-css/css!js-css/band_imagery",[],function(){}),define("band_imagery",["wdn","jquery","css!js-css/band_imagery"],function(t,e){var a=!1,o=function(){var t=Math.floor(e(window).scrollTop());e(".wdn-scroll-watch").each(function(a,o){var l=e(this);if(l.attr("data-lerp"))for(var c=l.attr("data-lerp").split(" "),f=0;f<c.length;f++){var p=c[f],h=l.attr("data-lerp-"+p+"-start"),u=l.attr("data-lerp-"+p+"-end"),w=e(h).offset(),m=e(u).offset(),v=d(w,m,t);"scale"==p&&n(l,v),"opacity"==p&&r(l,v),"flipbook"==p&&i(l,v)}l.hasClass("locked")&&s(l,t)})},s=function(t,a){var o=t.parent(),s=o.offset().top,n=o.height(),r=e(window).height();if(a<s)t.removeClass("fixed bottom");else if(a>=s&&a+r<n+s)t.css("top","0"),t.addClass("fixed").removeClass("bottom");else if(t.removeClass("fixed"),r<t.height())t.addClass("bottom"),t.css("top","auto");else{var i=n-r;t.css("top",i+"px")}},n=function(t,e){var a=t.attr("data-scale-start"),o=t.attr("data-scale-end"),s=o-a,n=parseFloat(a)+e*s;t.css("transform","scale("+n+")")},r=function(t,e){var a=t.attr("data-opacity-start"),o=t.attr("data-opacity-end"),s=o-a,n=parseFloat(a)+e*s;t.css("opacity",n)},i=function(t,e){var a=0,o=t.children("figure");e>0&&e<1?a=Math.ceil(o.length*e)-1:e&&(a=-1);var s=o.eq(a);return s.show().end().not(s).hide(),s},d=function(t,e,a){return a>t.top&&a<e.top?(a-t.top)/(e.top-t.top):a>e.top?1:0};return{initialize:function(){e(".wdn-scroll-watch").parent().css("position","relative"),o(),a||(e(window).load(o).scroll(function(){setTimeout(o,50)}),a=!0)}}}),function(t){var e=document,a="appendChild",o="styleSheet",s=e.createElement("style");s.type="text/css",e.getElementsByTagName("head")[0][a](s),s[o]?s[o].cssText=t:s[a](e.createTextNode(t))}(".wdn-band .wdn-scroll-watch.locked{position:absolute;z-index:0;left:0;top:0;bottom:auto}.wdn-band .wdn-scroll-watch.locked.fixed{position:fixed}.wdn-band .wdn-scroll-watch.locked.bottom{top:auto;bottom:0}.wdn-band .wdn-scroll{z-index:0;position:relative}");
//# sourceMappingURL=band_imagery.js.map