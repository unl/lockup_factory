define(["exports","./dcf-utility"],function(t,e){"use strict";function i(t){return l(t)||a(t)||n(t)||s()}function s(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}function n(t,e){if(t){if("string"==typeof t)return r(t,e);var i=Object.prototype.toString.call(t).slice(8,-1);return"Object"===i&&t.constructor&&(i=t.constructor.name),"Map"===i||"Set"===i?Array.from(t):"Arguments"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i)?r(t,e):void 0}}function a(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}function l(t){if(Array.isArray(t))return r(t)}function r(t,e){(null==e||e>t.length)&&(e=t.length);for(var i=0,s=new Array(e);i<e;i++)s[i]=t[i];return s}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function d(t,e){for(var i=0;i<e.length;i++){var s=e[i];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}function c(t,e,i){return e&&d(t.prototype,e),i&&d(t,i),Object.defineProperty(t,"prototype",{writable:!1}),t}Object.defineProperty(t,"__esModule",{value:!0}),t.DCFSlideshowTheme=t.DCFSlideshow=void 0;var h=function(){function t(i,s,n){var a=this;o(this,t),this.slideshow=i,this.slideshowIndex=s,this.source=n,this.theme=this.source.theme,this.scrollInterval=null,this.scrollRate=3e3,this.slideshow.dataset.rate&&(this.scrollRate=this.slideshow.dataset.rate),this.paused=!0,this.userPaused=!0,this.paused=!0,this.slideDeck=this.slideshow.querySelector("ul"),this.uuid=e.DCFUtility.uuidv4(),this.slideTransition=this.slideshow.dataset.transition,this.slideTransition=null,this.slideshowName="Slideshow ".concat(this.slideshowIndex),this.slideAriaLabel=this.slideshow.getAttribute("aria-label"),this.slideAriaLabel&&(this.slideshowName=this.slideAriaLabel),this.slideshow.setAttribute("id",this.uuid.concat("-slideshow")),this.slideDeck.setAttribute("tabindex","0"),this.slideDeck.classList.add("dcf-slide-deck");var l=function(){a.paused||a.pause()};this.slideDeck.addEventListener("mouseover",l.bind(this.slideDeck),!1);var r=function(){a.paused&&!a.userPaused&&a.play()};this.slideDeck.addEventListener("mouseout",r.bind(this.slideDeck),!1),this.slideDeck.addEventListener("keydown",function(t){var i=t.target;if(e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("arrowDown"))||e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("keyC"))){var s=i.querySelector(".dcf-visible");if(s){var n=s.querySelector("figure button");n&&(n.focus(),e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("keyC"))&&n.click(),t.preventDefault())}}else e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("arrowLeft"))?(t.preventDefault(),a.showSlide("previous")):e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("arrowRight"))&&(t.preventDefault(),a.showSlide("next"))},!1)}return c(t,[{key:"pause",value:function(){this.paused=!0,clearInterval(this.scrollInterval)}},{key:"play",value:function(){this.paused=!1,this.scrollInterval=setInterval(this.scroll.bind(this),this.scrollRate)}},{key:"firstSlide",value:function(){return this.slides[e.DCFUtility.magicNumbers("int0")]}},{key:"lastSlide",value:function(){var t=this.slides.length>e.DCFUtility.magicNumbers("int1")?this.slides.length-e.DCFUtility.magicNumbers("int1"):e.DCFUtility.magicNumbers("int0");return this.slides[t]}},{key:"scroll",value:function(){var t=this.slideshow.querySelectorAll(".dcf-visible");if(t[e.DCFUtility.magicNumbers("int0")].nextElementSibling)this.showSlide("next");else{if(this.slideTransition){var i=t[e.DCFUtility.magicNumbers("int0")];this.toggleSlideTransition(i,this.firstSlide())}this.scrollIt(this.firstSlide())}}},{key:"shuffleSlides",value:function(){for(var t=this.slides.length,i="",s=e.DCFUtility.magicNumbers("int0");e.DCFUtility.magicNumbers("int0")!==t;)s=Math.floor(Math.random()*t),t-=e.DCFUtility.magicNumbers("int1"),i=this.slides[t].innerHTML,this.slides[t].innerHTML=this.slides[s].innerHTML,this.slides[s].innerHTML=i}},{key:"initTransitionPanel",value:function(){this.slideTransition&&(this.panel=document.createElement("div"),this.panel.classList.add("dcf-slideshow-transition-panel","dcf-invisible","dcf-absolute","dcf-vh-100%","dcf-vw-100%","dcf-overflow-hidden"),this.panel.setAttribute("aria-hidden","true"),this.panel.setAttribute("style","top: 0; left:0"),this.theme.slideToggleTransition(this.panel),this.slideshow.appendChild(this.panel))}},{key:"initControls",value:function(){var t=this,s=document.createElement("ul");if(this.ctrlPrevious=document.createElement("li"),this.ctrlNext=document.createElement("li"),this.ctrlPreviousButton=document.createElement("button"),this.ctrlNextButton=document.createElement("button"),this.allowPlay=this.slideshow.hasAttribute("data-play")&&("true"===this.slideshow.dataset.play.toLowerCase()||"auto"===this.slideshow.dataset.play.toLowerCase()),this.allowPlay){if(this.ctrlPlayToggle=document.createElement("li"),this.ctrlPlayToggleButton=document.createElement("button"),this.ctrlPlayToggleButton.classList.add("dcf-btn","dcf-btn-primary","dcf-btn-slide","dcf-btn-slide-prev"),this.theme.slidePlayToggleBtnClassList){var n;(n=this.ctrlPlayToggleButton.classList).add.apply(n,i(this.theme.slidePlayToggleBtnClassList))}if(this.theme.slideBtnClassList){var a;(a=this.ctrlPlayToggleButton.classList).add.apply(a,i(this.theme.slideBtnClassList))}this.theme.slidePlayBtnInnerHTML&&(this.ctrlPlayToggleButton.innerHTML=this.theme.slidePlayBtnInnerHTML),this.ctrlPlayToggleButton.setAttribute("aria-label","".concat(this.slideshowName," play toggle")),this.ctrlPlayToggle.setAttribute("id",this.uuid.concat("-play-toggle")),this.ctrlPlayToggle.classList.add("dcf-li-slide-play-toggle"),this.ctrlPlayToggle.appendChild(this.ctrlPlayToggleButton),this.ctrlPlayToggleButton.addEventListener("click",function(){t.paused?(t.play(),t.userPaused=!1):(t.pause(),t.userPaused=!0),t.ctrlPlayToggleButton.innerHTML=t.paused?t.theme.slidePlayBtnInnerHTML:t.theme.slidePauseBtnInnerHTML},!1),this.ctrlPlayToggleButton.addEventListener("keydown",function(i){e.DCFUtility.isKeyEvent(i,e.DCFUtility.keyEvents("arrowUp"))&&(i.preventDefault(),t.slideDeck.focus())},!1)}if(s.classList.add("dcf-slideshow-controls","dcf-list-bare","dcf-btn-group","dcf-absolute","dcf-pin-right","dcf-pin-bottom","dcf-z-1"),s.setAttribute("aria-label","".concat(this.slideshowName," controls")),s.setAttribute("role","list"),this.ctrlPreviousButton.classList.add("dcf-btn","dcf-btn-primary","dcf-btn-slide","dcf-btn-slide-prev"),this.theme.slidePrevBtnClassList){var l;(l=this.ctrlPreviousButton.classList).add.apply(l,i(this.theme.slidePrevBtnClassList))}if(this.theme.slideBtnClassList){var r;(r=this.ctrlPreviousButton.classList).add.apply(r,i(this.theme.slideBtnClassList))}if(this.theme.slidePrevBtnInnerHTML&&(this.ctrlPreviousButton.innerHTML=this.theme.slidePrevBtnInnerHTML),this.ctrlPreviousButton.setAttribute("aria-label","".concat(this.slideshowName," previous")),this.ctrlNextButton.classList.add("dcf-btn","dcf-btn-primary","dcf-btn-slide","dcf-btn-slide-next"),this.theme.slideNextBtnClassList){var o;(o=this.ctrlNextButton.classList).add.apply(o,i(this.theme.slideNextBtnClassList))}if(this.theme.slideBtnClassList){var d;(d=this.ctrlNextButton.classList).add.apply(d,i(this.theme.slideBtnClassList))}this.theme.slideNextBtnInnerHTML&&(this.ctrlNextButton.innerHTML=this.theme.slideNextBtnInnerHTML),this.ctrlNextButton.setAttribute("aria-label","".concat(this.slideshowName," next")),this.ctrlPrevious.setAttribute("id",this.uuid.concat("-previous")),this.ctrlPrevious.classList.add("dcf-li-slide-prev"),this.ctrlNext.setAttribute("id",this.uuid.concat("-next")),this.ctrlNext.classList.add("dcf-li-slide-next"),this.slideshow.classList.add("dcf-relative"),this.ctrlPrevious.appendChild(this.ctrlPreviousButton),this.ctrlNext.appendChild(this.ctrlNextButton),s.appendChild(this.ctrlPrevious),this.allowPlay&&s.appendChild(this.ctrlPlayToggle),s.appendChild(this.ctrlNext),this.slideshow.appendChild(s),this.allowPlay&&"auto"===this.slideshow.dataset.play.toLowerCase()&&this.ctrlPlayToggleButton.click(),this.ctrlPrevious.addEventListener("click",function(){t.showSlide("previous")},!1),this.ctrlPrevious.addEventListener("keydown",function(i){e.DCFUtility.isKeyEvent(i,e.DCFUtility.keyEvents("arrowUp"))&&(i.preventDefault(),t.slideDeck.focus())},!1),this.ctrlNext.addEventListener("click",function(){t.showSlide("next")},!1),this.ctrlNext.addEventListener("keydown",function(i){e.DCFUtility.isKeyEvent(i,e.DCFUtility.keyEvents("arrowUp"))&&(i.preventDefault(),t.slideDeck.focus())},!1)}},{key:"initSlides",value:function(){var t=this;Array.prototype.forEach.call(this.slides,function(e,s){e.setAttribute("id",t.uuid.concat("-slide-",s)),e.classList.add("dcf-slide","dcf-relative"),t.theme.slideToggleTransition&&t.theme.slideToggleTransition(e);var n=e.querySelector("figure");if(n){var a=n.querySelector("figcaption");if(void 0!==a){var l=document.createElement("button");if(t.theme.figureCaptionBtnInnerHTML&&(l.innerHTML=t.theme.figureCaptionBtnInnerHTML),l.classList.add("dcf-btn","dcf-btn-slide","dcf-btn-slide-caption"),t.theme.slideBtnClassList){var r;(r=l.classList).add.apply(r,i(t.theme.slideBtnClassList))}l.setAttribute("id",t.uuid.concat("-button-",s)),l.setAttribute("tabindex","-1"),l.setAttribute("aria-controls",t.uuid.concat("-caption-",s)),l.setAttribute("aria-label","".concat(t.slideshowName," Show caption")),l.setAttribute("aria-expanded","false"),n.classList.add("dcf-slide-figure"),n.appendChild(l),t.captionBtnEvents(l),t.theme.figureCaptionToggleTransition&&t.theme.figureCaptionToggleTransition(l),a.classList.add("dcf-opacity-0","dcf-pointer-events-none","dcf-invisible","dcf-slide-caption","dcf-figcaption"),a.setAttribute("id",t.uuid.concat("-caption-",s)),a.setAttribute("aria-labelledby",t.uuid.concat("-button-",s)),a.setAttribute("aria-hidden","true")}}})}},{key:"slideObserverInit",value:function(){var t=this,i=function(i){Array.prototype.forEach.call(i,function(i){if(!i.intersectionRatio>e.DCFUtility.magicNumbers("int0"))return void i.target.classList.remove("dcf-visible");var s=i.target.querySelector("img");s&&t.lazyLoadImage(s),i.target.classList.add("dcf-visible")})},s={root:this.slideshow,rootMargin:"-10px"};if("IntersectionObserver"in window){var n=new IntersectionObserver(i,s);Array.prototype.forEach.call(this.slides,function(t){n.observe(t)})}else Array.prototype.forEach.call(this.slides,function(e){var i=e.querySelector("img");i&&t.lazyLoadImage(i),e.classList.add("dcf-visible")})}},{key:"captionTransition",value:function(t){t.removeEventListener("transitionend",this.captionTransition,!0),t.classList.contains("dcf-invisible")||t.classList.add("dcf-invisible")}},{key:"captionClasses",value:function(t,e){e.classList.contains("dcf-invisible")?(e.classList.remove("dcf-invisible"),t.setAttribute("aria-expanded","true"),t.setAttribute("aria-label","Hide caption"),e.setAttribute("aria-hidden","false"),e.classList.remove("dcf-invisible","dcf-opacity-0","dcf-pointer-events-none"),e.classList.add("dcf-opacity-1","dcf-pointer-events-auto"),e.dispatchEvent(this.source.closeCaptionEvent)):(e.addEventListener("transitionend",this.captionTransition(e),!0),t.setAttribute("aria-expanded","false"),t.setAttribute("aria-label","Show caption"),e.setAttribute("aria-hidden","true"),e.classList.remove("dcf-opacity-1","dcf-pointer-events-auto"),e.classList.add("dcf-opacity-0","dcf-pointer-events-none","dcf-invisible"),e.dispatchEvent(this.source.openCaptionEvent))}},{key:"captionBtnEvents",value:function(t){var i=this,s=t.previousElementSibling;t.addEventListener("click",function(t){i.captionClasses(t.currentTarget,s),t.preventDefault()},!1),t.addEventListener("keydown",function(t){e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("space"))?(t.preventDefault(),i.captionClasses(t.currentTarget,s)):e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("arrowUp"))||e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("tab"))?(t.preventDefault(),s.classList.contains("dcf-invisible")||i.captionClasses(t.currentTarget,s),i.slideDeck.focus()):e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("arrowDown"))?t.preventDefault():(e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("arrowLeft"))||e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents("arrowRight")))&&i.slideDeck.focus()},!1)}},{key:"pxTOvw",value:function(t){var e=document.documentElement,i=document.getElementsByTagName("body")[0];return"".concat(100*t/(window.innerWidth||e.clientWidth||i.clientWidth),"vw")}},{key:"lazyLoadImage",value:function(t){var e=t.dataset.src,i=t.dataset.srcset||null,s=null;e&&("PICTURE"===t.parentNode.nodeName?(this.applyPicture(t.parentNode),s=t.dataset.sizes||this.pxTOvw(t.parentNode.parentElement.clientWidth)):s=t.dataset.sizes||this.pxTOvw(t.parentElement.clientWidth),t.classList.add("dcf-lazy-loaded"),t.classList.remove("dcf-lazy-load"),e&&(t.src=e,t.removeAttribute("data-src")),i&&(t.srcset=i,t.removeAttribute("data-srcset")),s&&(t.sizes=s,t.removeAttribute("data-sizes")))}},{key:"transitionPromise",value:function(t,e){var i=this;return new Promise(function(s){i.panel.innerHTML=t.innerHTML,i.panel.classList.remove("dcf-invisible"),i.scrollIt(e),i.panel.dispatchEvent(i.source.hideSlideEvent),e.dispatchEvent(i.source.showSlideEvent),setTimeout(function(){s()},i.source.theme.slideToggleTransitionDuration)}).then(function(){i.panel.innerHTML="",i.panel.classList.add("dcf-invisible")})}},{key:"toggleSlideTransition",value:function(t,e){this.transitionPromise(t,e)}},{key:"scrollIt",value:function(t){var e=Array.prototype.indexOf.call(this.slides,t)*(this.slideDeck.scrollWidth/this.slides.length);this.slideDeck.scrollLeft=e}},{key:"showSlide",value:function(t){var i=this.slideshow.querySelectorAll(".dcf-visible"),s="previous"===t?e.DCFUtility.magicNumbers("int0"):e.DCFUtility.magicNumbers("int1");if(i.length>e.DCFUtility.magicNumbers("int1"))this.scrollIt(i[s]);else{var n=s===e.DCFUtility.magicNumbers("int0")?i[e.DCFUtility.magicNumbers("int0")].previousElementSibling:i[e.DCFUtility.magicNumbers("int0")].nextElementSibling;if(n)if(this.slideTransition){var a=i[e.DCFUtility.magicNumbers("int0")];this.toggleSlideTransition(a,n)}else this.scrollIt(n)}}}]),t}(),u=function(){function t(){var e=this;o(this,t),this.slideBtnClassList=["dcf-d-flex","dcf-ai-center","dcf-pt-4","dcf-pb-4","dcf-white"],this.slidePrevBtnClassList=["dcf-d-flex","dcf-ai-center","dcf-pt-4","dcf-pb-4","dcf-inverse"],this.slidePrevBtnInnerHTML='<svg class="dcf-h-4 dcf-w-4 dcf-fill-current" width="24"\nheight="24" viewBox="0 0 24 24" focusable="false" aria-hidden="true">\n    <path d="M23.509\n    9.856c-.38-.55-.928-.852-1.542-.852H9.74l4.311-4.151c.995-.994.961-2.646-.074-3.682-1.001-1-2.722-1.033-3.68-.077L.148\n    11.144a.5.5 0 00-.003.707l9.978 10.079a2.445 2.445 0 001.737.705c.707 0 1.407-.294 1.92-.806a2.737 2.737 0 00.807-1.923\n    2.431 2.431 0\n    00-.708-1.733l-4.156-4.16h12.276c.618 0 1.161-.302 1.53-.851.304-.451.471-1.041.471-1.658 0-.596-.179-1.196-.491-1.648z"></path>\n</svg>',this.slideNextBtnClassList=["dcf-d-flex","dcf-ai-center","dcf-pt-4","dcf-pb-4","dcf-inverse"],this.slideNextBtnInnerHTML='<svg class="dcf-h-4 dcf-w-4 dcf-fill-current" width="24"\nheight="24" viewBox="0 0 24 24" focusable="false" aria-hidden="true">\n    <path d="M23.852 11.144L13.703 1.096c-.96-.96-2.678-.924-3.68.075-1.036 1.035-1.07 2.687-.069 3.69l4.321\n    4.143H2.03c-1.27 0-2.03 1.272-2.03 2.5 0 .617.168 1.207.472 1.659.369.549.913.851 1.53.851h12.276l-4.156 4.16a2.425\n    2.425 0 00-.708 1.734c0 .708.293 1.409.807 1.922a2.738 2.738 0 001.919.806c.664 0 1.28-.251\n    1.739-.708l9.977-10.076a.502.502 0 00-.004-.708z"></path>\n</svg>',this.slidePlayToggleBtnClassList=["dcf-d-flex","dcf-ai-center","dcf-pt-4","dcf-pb-4","dcf-inverse"],this.slidePlayBtnInnerHTML='<svg class="dcf-h-4 dcf-w-4 dcf-fill-current" width="24"\nheight="24" viewBox="0 0 24 24" focusable="false" aria-hidden="true">\n    <path d="M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498\n      0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z"></path>\n</svg>',this.slidePauseBtnInnerHTML='<svg class="dcf-h-4 dcf-w-4 dcf-fill-current" width="24" height="24"\nviewBox="0 0 24 24" focusable="false" aria-hidden="true">\n    <path d="M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5\n    0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z"></path>\n</svg>',this.figureCaptionBtnInnerHTML='<svg class="dcf-h-4 dcf-w-4 dcf-fill-current"\n      width="24" height="24" viewBox="0 0 24 24" focusable="false" aria-hidden="true">\n    <path class="theme-icon-slide-caption-open"\n      d="M1,3h19c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,1,0,1.4,0,2C0,2.6,0.4,3,1,3z"/>\n      \'<path class="theme-icon-slide-caption-open"\n      d="M1,8h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,6,0,6.4,0,7C0,7.6,0.4,8,1,8z"/>\n    <path class="theme-icon-slide-caption-close-1"\n      d="M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z"/>\n    <path class="theme-icon-slide-caption-close-2"\n      d="M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z"/>\n    <path class="theme-icon-slide-caption-open"\n      d="M1,18h18c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,17.6,0.4,18,1,18z"/>\n    <path class="theme-icon-slide-caption-open"\n      \'d="M1,23h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,22.6,0.4,23,1,23z"/>\n</svg>',this.figureCaptionToggleTransition=function(t){var e=[{transform:"rotate(45deg)",transformOrigin:"50% 50%"},{transform:"rotate(0deg)",transformOrigin:"50% 50%"}],i=[{transform:"rotate(-45deg)",transformOrigin:"50% 50%"},{transform:"rotate(0deg)",transformOrigin:"50% 50%"}],s=[{transform:"rotate(0deg)",transformOrigin:"50% 50%"},{transform:"rotate(45deg)",transformOrigin:"50% 50%"}],n=[{transform:"rotate(0deg)",transformOrigin:"50% 50%"},{transform:"rotate(-45deg)",transformOrigin:"50% 50%"}],a={duration:250,fill:"forwards"},l=t.previousElementSibling,r=t.querySelector(".theme-icon-slide-caption-close-1"),o=t.querySelector(".theme-icon-slide-caption-close-2");l.addEventListener("openCaption",function(){r.animate(e,a),o.animate(i,a)},!1),l.addEventListener("closeCaption",function(){r.animate(s,a),o.animate(n,a)},!1)},this.slideToggleTransitionDuration=1e3,this.slideToggleTransition=function(t){var i=[{opacity:0},{opacity:1}],s=[{opacity:1},{opacity:0}],n={duration:e.slideToggleTransitionDuration,fill:"forwards"};t.addEventListener("showSlide",function(){t.animate(i,n)},!1),t.addEventListener("hideSlide",function(){t.animate(s,n)},!1)}}return c(t,[{key:"setThemeVariable",value:function(t,e){switch(t){case"slideBtnClassList":Array.isArray(e)&&(this.slideBtnClassList=e);break;case"slidePrevBtnClassList":Array.isArray(e)&&(this.slidePrevBtnClassList=e);break;case"slidePrevBtnInnerHTML":"string"==typeof e&&(this.slidePrevBtnInnerHTML=e);break;case"slideNextBtnClassList":Array.isArray(e)&&(this.slideNextBtnClassList=e);break;case"slideNextvBtnInnerHTML":"string"==typeof e&&(this.slideNextBtnInnerHTML=e);break;case"slidePlayToggleBtnClassList":Array.isArray(e)&&(this.slidePlayToggleBtnClassList=e);break;case"slidePlayBtnInnerHTML":"string"==typeof e&&(this.slidePlayBtnInnerHTML=e);break;case"slidePauseBtnInnerHTML":"string"==typeof e&&(this.slidePauseBtnInnerHTML=e);break;case"figureCaptionBtnInnerHTML":"string"==typeof e&&(this.figureCaptionBtnInnerHTML=e);break;case"figureCaptionToggleTransition":"function"==typeof e&&(this.figureCaptionToggleTransition=e);break;case"slideToggleTransitionDuration":"number"==typeof e&&(this.slideToggleTransitionDuration=e);break;case"slideToggleTransition":"function"==typeof e&&(this.slideToggleTransition=e)}}}]),t}();t.DCFSlideshowTheme=u;var f=function(){function t(e,i){o(this,t),this.slideshows=e,this.theme=i instanceof u?i:new u,this.openCaptionEvent=new Event(t.events("openCaption")),this.closeCaptionEvent=new Event(t.events("closeCaption")),this.showSlideEvent=new Event(t.events("showSlide")),this.hideSlideEvent=new Event(t.events("hideSlide"))}return c(t,[{key:"initialize",value:function(){var t=this;Array.prototype.forEach.call(this.slideshows,function(e,i){var s=new h(e,i,t);s instanceof h&&(s.initTransitionPanel(),s.initControls(),s.slides=s.slideDeck.querySelectorAll("li"),s.slideshow.hasAttribute("data-shuffle")&&"true"===s.slideshow.dataset.shuffle.toLowerCase()&&s.shuffleSlides(),s.slideObserverInit(),s.initSlides())})}}],[{key:"events",value:function(t){var e={openCaption:"openCaption",closeCaption:"closeCaption",showSlide:"showSlide",hideSlide:"hideSlide"};return Object.freeze(e),t in e?e[t]:void 0}}]),t}();t.DCFSlideshow=f});
//# sourceMappingURL=dcf-slideshow.js.map