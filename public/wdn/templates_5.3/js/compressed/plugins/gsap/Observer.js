function _typeof(e){"@babel/helpers - typeof";return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}!function(e,t){"object"===("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?t(exports):"function"==typeof define&&define.amd?define(["exports"],t):(e=e||self,t(e.window=e.window||{}))}(void 0,function(e){"use strict";function t(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function n(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),e}var r,o,i,s,l,a,c,u,f,d,p,g,h,v=function(){return r||"undefined"!=typeof window&&(r=window.gsap)&&r.registerPlugin&&r},y=1,m=[];e._scrollers=[],e._proxies=[];var _=Date.now,x=function(e,t){return t},b=function(){var t=d.core,n=t.bridge||{},r=t._scrollers,o=t._proxies;r.push.apply(r,e._scrollers),o.push.apply(o,e._proxies),e._scrollers=r,e._proxies=o,x=function(e,t){return n[e](t)}},w=function(t,n){return~e._proxies.indexOf(t)&&e._proxies[e._proxies.indexOf(t)+1][n]},M=function(e){return!!~p.indexOf(e)},P=function(e,t,n,r,o){return e.addEventListener(t,n,{passive:!r,capture:!!o})},X=function(e,t,n,r){return e.removeEventListener(t,n,!!r)},Y=function(){return g&&g.isPressed||e._scrollers.cache++},D=function(t,n){var r=function r(o){if(o||0===o){y&&(s.history.scrollRestoration="manual");var i=g&&g.isPressed;o=r.v=Math.round(o)||(g&&g.iOS?1:0),t(o),r.cacheID=e._scrollers.cache,i&&x("ss",o)}else(n||e._scrollers.cache!==r.cacheID||x("ref"))&&(r.cacheID=e._scrollers.cache,r.v=t());return r.v+r.offset};return r.offset=0,t&&r},T={s:"scrollLeft",p:"left",p2:"Left",os:"right",os2:"Right",d:"width",d2:"Width",a:"x",sc:D(function(e){return arguments.length?s.scrollTo(e,O.sc()):s.pageXOffset||l.scrollLeft||a.scrollLeft||c.scrollLeft||0})},O={s:"scrollTop",p:"top",p2:"Top",os:"bottom",os2:"Bottom",d:"height",d2:"Height",a:"y",op:T,sc:D(function(e){return arguments.length?s.scrollTo(T.sc(),e):s.pageYOffset||l.scrollTop||a.scrollTop||c.scrollTop||0})},E=function(e){return r.utils.toArray(e)[0]||("string"==typeof e&&!1!==r.config().nullTargetWarn?console.warn("Element not found:",e):null)},k=function(t,n){var r=n.s,o=n.sc,i=e._scrollers.indexOf(t),s=o===O.sc?1:2;return!~i&&(i=e._scrollers.push(t)-1),e._scrollers[i+s]||(e._scrollers[i+s]=D(w(t,r),!0)||(M(t)?o:D(function(e){return arguments.length?t[r]=e:t[r]})))},S=function(e,t,n){var r=e,o=e,i=_(),s=i,l=t||50,a=Math.max(500,3*l),c=function(e,t){var a=_();t||a-i>l?(o=r,r=e,s=i,i=a):n?r+=e:r=o+(e-o)/(a-s)*(i-s)};return{update:c,reset:function(){o=r=n?0:r,s=i=0},getVelocity:function(e){var t=s,l=o,u=_();return(e||0===e)&&e!==r&&c(e),i===s||u-s>a?0:(r+(n?l:-l))/((n?u:i)-t)*1e3}}},C=function(e,t){return t&&!e._gsapAllow&&e.preventDefault(),e.changedTouches?e.changedTouches[0]:e},L=function(e){var t=Math.max.apply(Math,e),n=Math.min.apply(Math,e);return Math.abs(t)>=Math.abs(n)?t:n},A=function(){(d=r.core.globals().ScrollTrigger)&&d.core&&b()},G=function(e){return r=e||v(),r&&"undefined"!=typeof document&&document.body&&(s=window,l=document,a=l.documentElement,c=l.body,p=[s,l,a,c],i=r.utils.clamp,f="onpointerenter"in c?"pointer":"mouse",u=H.isTouch=s.matchMedia&&s.matchMedia("(hover: none), (pointer: coarse)").matches?1:"ontouchstart"in s||navigator.maxTouchPoints>0||navigator.msMaxTouchPoints>0?2:0,h=H.eventTypes=("ontouchstart"in a?"touchstart,touchmove,touchcancel,touchend":"onpointerdown"in a?"pointerdown,pointermove,pointercancel,pointerup":"mousedown,mousemove,mouseup,mouseup").split(","),setTimeout(function(){return y=0},500),A(),o=1),o};T.op=O,e._scrollers.cache=0;var H=function(){function e(e){this.init(e)}return e.prototype.init=function(e){o||G(r)||console.warn("Please gsap.registerPlugin(Observer)"),d||A();var t=e.tolerance,n=e.dragMinimum,i=e.type,p=e.target,v=e.lineHeight,y=e.debounce,x=e.preventDefault,b=e.onStop,w=e.onStopDelay,D=e.ignore,H=e.wheelSpeed,V=e.event,F=e.onDragStart,I=e.onDragEnd,R=e.onDrag,j=e.onPress,W=e.onRelease,q=e.onRight,z=e.onLeft,B=e.onUp,N=e.onDown,U=e.onChangeX,J=e.onChangeY,K=e.onChange,Q=e.onToggleX,Z=e.onToggleY,$=e.onHover,ee=e.onHoverEnd,te=e.onMove,ne=e.ignoreCheck,re=e.isNormalizer,oe=e.onGestureStart,ie=e.onGestureEnd,se=e.onWheel,le=e.onEnable,ae=e.onDisable,ce=e.onClick,ue=e.scrollSpeed,fe=e.capture,de=e.allowClicks,pe=e.lockAxis,ge=e.onLockAxis;this.target=p=E(p)||a,this.vars=e,D&&(D=r.utils.toArray(D)),t=t||1e-9,n=n||0,H=H||1,ue=ue||1,i=i||"wheel,touch,pointer",y=!1!==y,v||(v=parseFloat(s.getComputedStyle(c).lineHeight)||22);var he,ve,ye,me,_e,xe,be,we=this,Me=0,Pe=0,Xe=k(p,T),Ye=k(p,O),De=Xe(),Te=Ye(),Oe=~i.indexOf("touch")&&!~i.indexOf("pointer")&&"pointerdown"===h[0],Ee=M(p),ke=p.ownerDocument||l,Se=[0,0,0],Ce=[0,0,0],Le=0,Ae=function(){return Le=_()},Ge=function(e,t){return(we.event=e)&&D&&~D.indexOf(e.target)||t&&Oe&&"touch"!==e.pointerType||ne&&ne(e,t)},He=function(){we._vx.reset(),we._vy.reset(),ve.pause(),b&&b(we)},Ve=function(){var e=we.deltaX=L(Se),n=we.deltaY=L(Ce),r=Math.abs(e)>=t,o=Math.abs(n)>=t;K&&(r||o)&&K(we,e,n,Se,Ce),r&&(q&&we.deltaX>0&&q(we),z&&we.deltaX<0&&z(we),U&&U(we),Q&&we.deltaX<0!=Me<0&&Q(we),Me=we.deltaX,Se[0]=Se[1]=Se[2]=0),o&&(N&&we.deltaY>0&&N(we),B&&we.deltaY<0&&B(we),J&&J(we),Z&&we.deltaY<0!=Pe<0&&Z(we),Pe=we.deltaY,Ce[0]=Ce[1]=Ce[2]=0),(me||ye)&&(te&&te(we),ye&&(R(we),ye=!1),me=!1),xe&&!(xe=!1)&&ge&&ge(we),_e&&(se(we),_e=!1),he=0},Fe=function(e,t,n){Se[n]+=e,Ce[n]+=t,we._vx.update(e),we._vy.update(t),y?he||(he=requestAnimationFrame(Ve)):Ve()},Ie=function(e,t){pe&&!be&&(we.axis=be=Math.abs(e)>Math.abs(t)?"x":"y",xe=!0),"y"!==be&&(Se[2]+=e,we._vx.update(e,!0)),"x"!==be&&(Ce[2]+=t,we._vy.update(t,!0)),y?he||(he=requestAnimationFrame(Ve)):Ve()},Re=function(e){if(!Ge(e,1)){e=C(e,x);var t=e.clientX,r=e.clientY,o=t-we.x,i=r-we.y,s=we.isDragging;we.x=t,we.y=r,(s||Math.abs(we.startX-t)>=n||Math.abs(we.startY-r)>=n)&&(R&&(ye=!0),s||(we.isDragging=!0),Ie(o,i),s||F&&F(we))}},je=we.onPress=function(e){Ge(e,1)||(we.axis=be=null,ve.pause(),we.isPressed=!0,e=C(e),Me=Pe=0,we.startX=we.x=e.clientX,we.startY=we.y=e.clientY,we._vx.reset(),we._vy.reset(),P(re?p:ke,h[1],Re,x,!0),we.deltaX=we.deltaY=0,j&&j(we))},We=function(e){if(!Ge(e,1)){X(re?p:ke,h[1],Re,!0);var t=we.isDragging&&(Math.abs(we.x-we.startX)>3||Math.abs(we.y-we.startY)>3),n=C(e);t||(we._vx.reset(),we._vy.reset(),x&&de&&r.delayedCall(.08,function(){if(_()-Le>300&&!e.defaultPrevented)if(e.target.click)e.target.click();else if(ke.createEvent){var t=ke.createEvent("MouseEvents");t.initMouseEvent("click",!0,!0,s,1,n.screenX,n.screenY,n.clientX,n.clientY,!1,!1,!1,!1,0,null),e.target.dispatchEvent(t)}})),we.isDragging=we.isGesturing=we.isPressed=!1,b&&!re&&ve.restart(!0),I&&t&&I(we),W&&W(we,t)}},qe=function(e){return e.touches&&e.touches.length>1&&(we.isGesturing=!0)&&oe(e,we.isDragging)},ze=function(){return(we.isGesturing=!1)||ie(we)},Be=function(e){if(!Ge(e)){var t=Xe(),n=Ye();Fe((t-De)*ue,(n-Te)*ue,1),De=t,Te=n,b&&ve.restart(!0)}},Ne=function(e){if(!Ge(e)){e=C(e,x),se&&(_e=!0);var t=(1===e.deltaMode?v:2===e.deltaMode?s.innerHeight:1)*H;Fe(e.deltaX*t,e.deltaY*t,0),b&&!re&&ve.restart(!0)}},Ue=function(e){if(!Ge(e)){var t=e.clientX,n=e.clientY,r=t-we.x,o=n-we.y;we.x=t,we.y=n,me=!0,(r||o)&&Ie(r,o)}},Je=function(e){we.event=e,$(we)},Ke=function(e){we.event=e,ee(we)},Qe=function(e){return Ge(e)||C(e,x)&&ce(we)};ve=we._dc=r.delayedCall(w||.25,He).pause(),we.deltaX=we.deltaY=0,we._vx=S(0,50,!0),we._vy=S(0,50,!0),we.scrollX=Xe,we.scrollY=Ye,we.isDragging=we.isGesturing=we.isPressed=!1,we.enable=function(e){return we.isEnabled||(P(Ee?ke:p,"scroll",Y),i.indexOf("scroll")>=0&&P(Ee?ke:p,"scroll",Be,x,fe),i.indexOf("wheel")>=0&&P(p,"wheel",Ne,x,fe),(i.indexOf("touch")>=0&&u||i.indexOf("pointer")>=0)&&(P(p,h[0],je,x,fe),P(ke,h[2],We),P(ke,h[3],We),de&&P(p,"click",Ae,!1,!0),ce&&P(p,"click",Qe),oe&&P(ke,"gesturestart",qe),ie&&P(ke,"gestureend",ze),$&&P(p,f+"enter",Je),ee&&P(p,f+"leave",Ke),te&&P(p,f+"move",Ue)),we.isEnabled=!0,e&&e.type&&je(e),le&&le(we)),we},we.disable=function(){we.isEnabled&&(m.filter(function(e){return e!==we&&M(e.target)}).length||X(Ee?ke:p,"scroll",Y),we.isPressed&&(we._vx.reset(),we._vy.reset(),X(re?p:ke,h[1],Re,!0)),X(Ee?ke:p,"scroll",Be,fe),X(p,"wheel",Ne,fe),X(p,h[0],je,fe),X(ke,h[2],We),X(ke,h[3],We),X(p,"click",Ae,!0),X(p,"click",Qe),X(ke,"gesturestart",qe),X(ke,"gestureend",ze),X(p,f+"enter",Je),X(p,f+"leave",Ke),X(p,f+"move",Ue),we.isEnabled=we.isPressed=we.isDragging=!1,ae&&ae(we))},we.kill=function(){we.disable();var e=m.indexOf(we);e>=0&&m.splice(e,1),g===we&&(g=0)},m.push(we),re&&M(p)&&(g=we),we.enable(V)},n(e,[{key:"velocityX",get:function(){return this._vx.getVelocity()}},{key:"velocityY",get:function(){return this._vy.getVelocity()}}]),e}();H.version="3.11.1",H.create=function(e){return new H(e)},H.register=G,H.getAll=function(){return m.slice()},H.getById=function(e){return m.filter(function(t){return t.vars.id===e})[0]},v()&&r.registerPlugin(H),e.Observer=H,e._getProxyProp=w,e._getScrollFunc=k,e._getTarget=E,e._getVelocityProp=S,e._horizontal=T,e._isViewport=M,e._vertical=O,e.default=H,"undefined"==typeof window||window!==e?Object.defineProperty(e,"__esModule",{value:!0}):delete window.default});
//# sourceMappingURL=Observer.js.map