function _classCallCheck(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}var _createClass=function(){function e(e,n){for(var t=0;t<n.length;t++){var i=n[t];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(n,t,i){return t&&e(n.prototype,t),i&&e(n,i),n}}(),DCFScrollAnimation=function(){function e(n,t,i){_classCallCheck(this,e),this.itemList=n,this.observerConfig=t,this.animationClassNames=i}return _createClass(e,[{key:"disconnect",value:function(){this.observer&&this.observer.disconnect()}},{key:"initialize",value:function(){var e=this,n=function(n,t){0===e.itemsCount&&e.observer.disconnect(),n.forEach(function(n){n.intersectionRatio>=t.thresholds[0]&&n.intersectionRatio<t.thresholds[1]?e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return n.target.classList.add(e)}):n.intersectionRatio>t.thresholds[1]&&(e.itemsCount--,e.observer.unobserve(n.target))})};this.itemList&&(this.itemsCount=this.itemList.length,"IntersectionObserver"in window&&(this.observer=new IntersectionObserver(n,this.observerConfig),this.itemList.forEach(function(n){e.observer.observe(n)})))}}]),e}();define("dcf-scrollAnimation",function(){}),require(["dcf-scrollAnimation"],function(){var e=document.querySelectorAll(".dcf-animate-on-scroll");new DCFScrollAnimation(e,{rootMargin:"0px",threshold:[.5,1]},["dcf-animated"]).initialize()}),define("scroll-animations",function(){});
//# sourceMappingURL=scroll-animations.js.map