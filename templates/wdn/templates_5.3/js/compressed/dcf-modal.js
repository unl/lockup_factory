define(["exports","./dcf-utility"],function(t,e){"use strict";function n(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function i(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function o(t,e,n){return e&&i(t.prototype,e),n&&i(t,n),Object.defineProperty(t,"prototype",{writable:!1}),t}Object.defineProperty(t,"__esModule",{value:!0}),t.DCFModal=void 0;var a=function(){function t(e,i){n(this,t),this.modals=e,this.currentModal=null,this.currentBtn=null,this.body=document.querySelector("body"),this.nonModals=[];var o=document.getElementById("dcf-skip-nav"),a=document.getElementById("dcf-header"),d=document.getElementById("dcf-main"),l=document.getElementById("dcf-footer");o&&this.nonModals.push(o),a&&this.nonModals.push(a),d&&this.nonModals.push(d),l&&this.nonModals.push(l),this.disableBodyScroll=null,this.enableBodyScroll=null,i&&i.disableBodyScroll&&i.enableBodyScroll&&(this.disableBodyScroll=i.disableBodyScroll,this.enableBodyScroll=i.enableBodyScroll)}return o(t,[{key:"appendToBody",value:function(t){this.body.appendChild(t)}},{key:"toggleModal",value:function(t,e){"false"===document.getElementById(t).getAttribute("aria-hidden")?this.closeModal(t):this.openModal(t,e)}},{key:"setNavToggleBtnState",value:function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"open",i=t.getElementsByTagName("svg"),o=t.getElementsByClassName("dcf-nav-toggle-label");if(i.length){var a=i[e.DCFUtility.magicNumbers("int0")].getElementsByTagName("g");Array.from(a).forEach(function(t){t.classList.contains("dcf-nav-toggle-icon-open")?"open"===n.toLowerCase()?t.classList.remove("dcf-d-none"):t.classList.add("dcf-d-none"):t.classList.contains("dcf-nav-toggle-icon-close")&&("open"===n.toLowerCase()?t.classList.add("dcf-d-none"):t.classList.remove("dcf-d-none"))})}o.length&&("open"===n.toLowerCase()?o[e.DCFUtility.magicNumbers("int0")].textContent=t.getAttribute("data-nav-toggle-label-open")?t.getAttribute("data-nav-toggle-label-open"):"Open":o[e.DCFUtility.magicNumbers("int0")].textContent=t.getAttribute("data-nav-toggle-label-closed")?t.getAttribute("data-nav-toggle-label-closed"):"Close")}},{key:"openModal",value:function(t,n){var i=this,o=document.getElementById("dcf-nav-toggle-group"),a=o&&o.parentElement?o.parentElement:null;this.modals.forEach(function(e){e.getAttribute("id")!==t&&i.closeModal(e.getAttribute("id"))});var d=document.getElementById(t),l="false"===d.getAttribute("aria-hidden"),s=!1;if(n){this.currentBtn=n;var c=document.getElementById(n);s=c&&"true"===c.getAttribute("data-with-nav-toggle-group"),s&&this.setNavToggleBtnState(c,"closed")}if(this.currentModal=t,!l){var r="ModalPreOpenEvent_".concat(t);document.dispatchEvent(new CustomEvent(r)),this.nonModals.forEach(function(t){if(s&&o&&t===a){t.setAttribute("aria-hidden","false");a.childNodes.forEach(function(t){t.nodeType===Node.ELEMENT_NODE&&(t===o?t.setAttribute("aria-hidden","false"):t.setAttribute("aria-hidden","true"))})}else t.setAttribute("aria-hidden","true")}),this.disableBodyScroll&&this.disableBodyScroll(d,{allowTouchMove:function(t){for(var e=t;e&&e!==document.body;){if(e.classList.contains("dcf-modal-content")){var n={WebkitOverflowScrolling:"none",overflow:"hidden"};return Object.assign(document.body.style,n),!0}e.parentElement&&(e=e.parentElement)}return!1}}),this.body.classList.add("dcf-modal-is-open"),d.setAttribute("aria-hidden","false"),d.classList.remove("dcf-opacity-0","dcf-pointer-events-none","dcf-invisible"),d.classList.add("dcf-opacity-100","dcf-pointer-events-auto"),s&&d.classList.add("dcf-z-modal-behind-nav-toggle-group"),d.focus();var u=d.querySelectorAll('button:not([hidden]):not([disabled]), [href]:not([hidden]), input:not([hidden]):not([type="hidden"]):not([disabled]), select:not([hidden]):not([disabled]), textarea:not([hidden]):not([disabled]), [tabindex="0"]:not([hidden]):not([disabled]), summary:not([hidden]), [contenteditable]:not([hidden]), audio[controls]:not([hidden]), video[controls]:not([hidden])'),f=function(t){var n=u[e.DCFUtility.magicNumbers("int0")],i=u[u.length-e.DCFUtility.magicNumbers("int1")];("Tab"===t.key||9===t.keyCode)&&("Tab"!==t.key&&9!==t.keyCode||(t.shiftKey?document.activeElement===d?(t.preventDefault(),n.focus()):document.activeElement===n&&(t.preventDefault(),i.focus()):document.activeElement===i&&(t.preventDefault(),n.focus())))};d.addEventListener("keydown",f),document.addEventListener("ModalCloseEvent_".concat(t),function(){d.removeEventListener("keydown",f)});var h="ModalOpenEvent_".concat(t);document.dispatchEvent(new CustomEvent(h))}}},{key:"closeModal",value:function(t){function e(){o.removeEventListener("transitionend",e),o.classList.contains("dcf-invisible")||o.classList.add("dcf-invisible")}var n=document.getElementById("dcf-nav-toggle-group"),i=n&&n.parentElement?n.parentElement:null,o=document.getElementById(t),a=o.dataset.confirmClose,d="true"===o.getAttribute("aria-hidden");if(this.currentModal=null,!d){var l="ModalPreCloseEvent_".concat(t);if(document.dispatchEvent(new CustomEvent(l)),!a||window.confirm(a)){if(this.body.classList.remove("dcf-modal-is-open"),this.currentBtn){var s=document.getElementById(this.currentBtn);s&&"true"===s.getAttribute("data-with-nav-toggle-group")&&this.setNavToggleBtnState(s,"open")}this.nonModals.forEach(function(t){if(n&&t===i){i.childNodes.forEach(function(t){t.nodeType===Node.ELEMENT_NODE&&t.setAttribute("aria-hidden","false")})}t.setAttribute("aria-hidden","false")}),o.setAttribute("aria-hidden","true"),o.classList.remove("dcf-opacity-100","dcf-pointer-events-auto","dcf-z-modal-behind-nav-toggle-group"),o.classList.add("dcf-opacity-0","dcf-pointer-events-none"),o.addEventListener("transitionend",e),this.currentBtn&&document.getElementById(this.currentBtn).focus(),this.enableBodyScroll&&this.enableBodyScroll(o);var c="ModalCloseEvent_".concat(t);document.dispatchEvent(new CustomEvent(c))}}}},{key:"btnToggleListen",value:function(t,e,n){var i=this;t.addEventListener("click",function(){i.toggleModal(e,n)},!1)}},{key:"btnCloseListen",value:function(t,e){var n=this;t.addEventListener("click",function(){n.closeModal(e.getAttribute("id"))},!1)}},{key:"overlayListen",value:function(t,e){var n=this;t.addEventListener("click",function(i){e.contains(i.target)||n.closeModal(t.getAttribute("id"))})}},{key:"escListen",value:function(){var t=this;document.addEventListener("keydown",function(n){e.DCFUtility.isKeyEvent(n,e.DCFUtility.keyEvents("escape"))&&t.currentModal&&(n.preventDefault(),t.closeModal(t.currentModal))})}},{key:"initialize",value:function(){var t=this;if(this.modals){var n=document.querySelectorAll(".dcf-btn-toggle-modal"),i=document.querySelectorAll(".dcf-btn-close-modal"),o=document.querySelectorAll(".dcf-modal-wrapper"),a=document.querySelectorAll(".dcf-modal-content"),d=document.querySelectorAll(".dcf-modal-header");n.forEach(function(n){var i=n.getAttribute("data-toggles-modal"),o=e.DCFUtility.uuidv4();n.setAttribute("id",o),n.removeAttribute("disabled"),t.btnToggleListen(n,i,o)});for(var l=0;l<this.modals.length;l++){var s=this.modals[l],c=o[l],r=a[l],u=d[l],f=i[l],h=s.id,m="".concat(h,"-heading"),v=void 0!==s.dataset.deliberateCloseOnly&&"false"!==s.dataset.deliberateCloseOnly.toLowerCase();u.querySelectorAll("h1, h2, h3, h4, h5, h6")[e.DCFUtility.magicNumbers("int0")].id=m,this.appendToBody(s),s.removeAttribute("hidden"),s.setAttribute("aria-labelledby",m),s.setAttribute("aria-hidden","true"),s.setAttribute("role","dialog"),s.setAttribute("tabindex","-1"),s.classList.length===e.DCFUtility.magicNumbers("int1")&&s.classList.contains("dcf-modal")&&s.classList.add("dcf-bg-overlay-dark"),s.classList.add("dcf-fixed","dcf-pin-top","dcf-pin-left","dcf-h-100%","dcf-w-100%","dcf-d-flex","dcf-ai-center","dcf-jc-center","dcf-opacity-0","dcf-pointer-events-none","dcf-invisible"),c.setAttribute("role","document"),c.classList.length===e.DCFUtility.magicNumbers("int1")&&c.classList.contains("dcf-modal-wrapper")&&c.classList.add("dcf-relative","dcf-h-auto","dcf-overflow-y-auto"),u.classList.length===e.DCFUtility.magicNumbers("int1")&&u.classList.contains("dcf-modal-header")&&u.classList.add("dcf-wrapper","dcf-pt-8","dcf-sticky","dcf-pin-top"),f.classList.length===e.DCFUtility.magicNumbers("int1")&&f.classList.contains("dcf-btn-close-modal")&&f.classList.add("dcf-btn","dcf-btn-tertiary","dcf-absolute","dcf-pin-top","dcf-pin-right","dcf-z-1"),r.classList.length===e.DCFUtility.magicNumbers("int1")&&r.classList.contains("dcf-modal-content")&&r.classList.add("dcf-wrapper","dcf-pb-8"),f.setAttribute("type","button"),f.setAttribute("aria-label","Close"),this.escListen(),v||this.overlayListen(s,c),this.btnCloseListen(f,s)}}}}]),t}();t.DCFModal=a});
//# sourceMappingURL=dcf-modal.js.map