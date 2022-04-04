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

/* wdn/templates_5.1/js/compressed/dcf-modal.js */
class __TwigTemplate_781eb3ce1397a130b5c79789477343d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-modal.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-modal.js"));

        // line 1
        echo "function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function t(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}return function(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}}(),DCFModal=function(){function t(e,n){_classCallCheck(this,t),this.modals=e,this.currentModal=null,this.currentBtn=null,this.body=document.querySelector(\"body\"),this.nonModals=[];var i=document.getElementById(\"dcf-skip-nav\"),a=document.getElementById(\"dcf-header\"),o=document.getElementById(\"dcf-main\"),d=document.getElementById(\"dcf-footer\");i&&this.nonModals.push(i),a&&this.nonModals.push(a),o&&this.nonModals.push(o),d&&this.nonModals.push(d),this.disableBodyScroll=null,this.enableBodyScroll=null,n&&n.disableBodyScroll&&n.enableBodyScroll&&(this.disableBodyScroll=n.disableBodyScroll,this.enableBodyScroll=n.enableBodyScroll)}return _createClass(t,[{key:\"appendToBody\",value:function(t){this.body.appendChild(t)}},{key:\"toggleModal\",value:function(t,e){\"false\"===document.getElementById(t).getAttribute(\"aria-hidden\")?this.closeModal(t):this.openModal(t,e)}},{key:\"setNavToggleBtnState\",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:\"open\",n=t.getElementsByTagName(\"svg\"),i=t.getElementsByClassName(\"dcf-nav-toggle-label\");if(n.length){var a=n[DCFUtility.magicNumbers(\"int0\")].getElementsByTagName(\"g\");Array.from(a).forEach(function(t){t.classList.contains(\"dcf-nav-toggle-icon-open\")?\"open\"===e.toLowerCase()?t.classList.remove(\"dcf-d-none\"):t.classList.add(\"dcf-d-none\"):t.classList.contains(\"dcf-nav-toggle-icon-close\")&&(\"open\"===e.toLowerCase()?t.classList.add(\"dcf-d-none\"):t.classList.remove(\"dcf-d-none\"))})}i.length&&(\"open\"===e.toLowerCase()?i[DCFUtility.magicNumbers(\"int0\")].textContent=t.getAttribute(\"data-nav-toggle-label-open\")?t.getAttribute(\"data-nav-toggle-label-open\"):\"Open\":i[DCFUtility.magicNumbers(\"int0\")].textContent=t.getAttribute(\"data-nav-toggle-label-closed\")?t.getAttribute(\"data-nav-toggle-label-closed\"):\"Close\")}},{key:\"openModal\",value:function(t,e){var n=this,i=document.getElementById(\"dcf-nav-toggle-group\"),a=i&&i.parentElement?i.parentElement:null;this.modals.forEach(function(e){e.getAttribute(\"id\")!==t&&n.closeModal(e.getAttribute(\"id\"))});var o=document.getElementById(t),d=\"false\"===o.getAttribute(\"aria-hidden\"),l=!1;if(e){this.currentBtn=e;var s=document.getElementById(e);l=s&&\"true\"===s.getAttribute(\"data-with-nav-toggle-group\"),l&&this.setNavToggleBtnState(s,\"closed\")}if(this.currentModal=t,!d){this.nonModals.forEach(function(t){if(l&&i&&t===a){t.setAttribute(\"aria-hidden\",\"false\");a.childNodes.forEach(function(t){t.nodeType===Node.ELEMENT_NODE&&(t===i?t.setAttribute(\"aria-hidden\",\"false\"):t.setAttribute(\"aria-hidden\",\"true\"))})}else t.setAttribute(\"aria-hidden\",\"true\")}),this.disableBodyScroll&&this.disableBodyScroll(o),this.body.classList.add(\"dcf-modal-is-open\"),o.setAttribute(\"aria-hidden\",\"false\"),o.classList.remove(\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\"),o.classList.add(\"dcf-opacity-100\",\"dcf-pointer-events-auto\"),l&&o.classList.add(\"dcf-z-modal-behind-nav-toggle-group\");var c=o.querySelectorAll('button:not([hidden]):not([disabled]), [href]:not([hidden]), input:not([hidden]):not([type=\"hidden\"]):not([disabled]), select:not([hidden]):not([disabled]), textarea:not([hidden]):not([disabled]), [tabindex=\"0\"]:not([hidden]):not([disabled]), summary:not([hidden]), [contenteditable]:not([hidden]), audio[controls]:not([hidden]), video[controls]:not([hidden])'),r=c[DCFUtility.magicNumbers(\"int0\")],u=c[c.length-DCFUtility.magicNumbers(\"int1\")];o.focus(),o.addEventListener(\"keydown\",function(t){(\"Tab\"===t.key||9===t.keyCode)&&(\"Tab\"!==t.key&&9!==t.keyCode||(t.shiftKey?document.activeElement===r&&(t.preventDefault(),u.focus()):document.activeElement===u&&(t.preventDefault(),r.focus())))});var f=\"ModalOpenEvent_\"+t;document.dispatchEvent(new CustomEvent(f))}}},{key:\"closeModal\",value:function(t){function e(){a.removeEventListener(\"transitionend\",e),a.classList.contains(\"dcf-invisible\")||a.classList.add(\"dcf-invisible\")}var n=document.getElementById(\"dcf-nav-toggle-group\"),i=n&&n.parentElement?n.parentElement:null,a=document.getElementById(t),o=\"true\"===a.getAttribute(\"aria-hidden\");if(this.currentModal=null,!o){if(this.body.classList.remove(\"dcf-modal-is-open\"),this.currentBtn){var d=document.getElementById(this.currentBtn);d&&\"true\"===d.getAttribute(\"data-with-nav-toggle-group\")&&this.setNavToggleBtnState(d,\"open\")}this.nonModals.forEach(function(t){if(n&&t===i){i.childNodes.forEach(function(t){t.nodeType===Node.ELEMENT_NODE&&t.setAttribute(\"aria-hidden\",\"false\")})}t.setAttribute(\"aria-hidden\",\"false\")}),a.setAttribute(\"aria-hidden\",\"true\"),a.classList.remove(\"dcf-opacity-100\",\"dcf-pointer-events-auto\",\"dcf-z-modal-behind-nav-toggle-group\"),a.classList.add(\"dcf-opacity-0\",\"dcf-pointer-events-none\"),a.addEventListener(\"transitionend\",e),this.currentBtn&&document.getElementById(this.currentBtn).focus(),this.enableBodyScroll&&this.enableBodyScroll(a);var l=\"ModalCloseEvent_\"+t;document.dispatchEvent(new CustomEvent(l))}}},{key:\"btnToggleListen\",value:function(t,e,n){var i=this;t.addEventListener(\"click\",function(){i.toggleModal(e,n)},!1)}},{key:\"btnCloseListen\",value:function(t,e){var n=this;t.addEventListener(\"click\",function(){n.closeModal(e.getAttribute(\"id\"))},!1)}},{key:\"overlayListen\",value:function(t,e){var n=this;t.addEventListener(\"click\",function(i){e.contains(i.target)||n.closeModal(t.getAttribute(\"id\"))})}},{key:\"escListen\",value:function(){var t=this;document.addEventListener(\"keydown\",function(e){e.which===DCFUtility.magicNumbers(\"escCode\")&&t.currentModal&&(e.preventDefault(),t.closeModal(t.currentModal))})}},{key:\"initialize\",value:function(){var t=this;if(this.modals){var e=document.querySelectorAll(\".dcf-btn-toggle-modal\"),n=document.querySelectorAll(\".dcf-btn-close-modal\"),i=document.querySelectorAll(\".dcf-modal-wrapper\"),a=document.querySelectorAll(\".dcf-modal-content\"),o=document.querySelectorAll(\".dcf-modal-header\");e.forEach(function(e){var n=e.getAttribute(\"data-toggles-modal\"),i=DCFUtility.uuidv4();e.setAttribute(\"id\",i),e.removeAttribute(\"disabled\"),t.btnToggleListen(e,n,i)});for(var d=0;d<this.modals.length;d++){var l=this.modals[d],s=i[d],c=a[d],r=o[d],u=n[d],f=l.id,h=f+\"-heading\";r.querySelectorAll(\"h1, h2, h3, h4, h5, h6\")[DCFUtility.magicNumbers(\"int0\")].id=h,this.appendToBody(l),l.removeAttribute(\"hidden\"),l.setAttribute(\"aria-labelledby\",h),l.setAttribute(\"aria-hidden\",\"true\"),l.setAttribute(\"role\",\"dialog\"),l.setAttribute(\"tabindex\",\"-1\"),l.classList.length===DCFUtility.magicNumbers(\"int1\")&&l.classList.contains(\"dcf-modal\")&&l.classList.add(\"dcf-bg-overlay-dark\"),l.classList.add(\"dcf-fixed\",\"dcf-pin-top\",\"dcf-pin-left\",\"dcf-h-100%\",\"dcf-w-100%\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\"),s.setAttribute(\"role\",\"document\"),s.classList.length===DCFUtility.magicNumbers(\"int1\")&&s.classList.contains(\"dcf-modal-wrapper\")&&s.classList.add(\"dcf-relative\",\"dcf-h-auto\",\"dcf-overflow-y-auto\"),r.classList.length===DCFUtility.magicNumbers(\"int1\")&&r.classList.contains(\"dcf-modal-header\")&&r.classList.add(\"dcf-wrapper\",\"dcf-pt-8\",\"dcf-sticky\",\"dcf-pin-top\"),u.classList.length===DCFUtility.magicNumbers(\"int1\")&&u.classList.contains(\"dcf-btn-close-modal\")&&u.classList.add(\"dcf-btn\",\"dcf-btn-tertiary\",\"dcf-absolute\",\"dcf-pin-top\",\"dcf-pin-right\",\"dcf-z-1\"),c.classList.length===DCFUtility.magicNumbers(\"int1\")&&c.classList.contains(\"dcf-modal-content\")&&c.classList.add(\"dcf-wrapper\",\"dcf-pb-8\"),u.setAttribute(\"type\",\"button\"),u.setAttribute(\"aria-label\",\"Close\"),this.escListen(),this.overlayListen(l,s),this.btnCloseListen(u,l)}}}}]),t}();
//# sourceMappingURL=dcf-modal.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/dcf-modal.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function t(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}return function(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}}(),DCFModal=function(){function t(e,n){_classCallCheck(this,t),this.modals=e,this.currentModal=null,this.currentBtn=null,this.body=document.querySelector(\"body\"),this.nonModals=[];var i=document.getElementById(\"dcf-skip-nav\"),a=document.getElementById(\"dcf-header\"),o=document.getElementById(\"dcf-main\"),d=document.getElementById(\"dcf-footer\");i&&this.nonModals.push(i),a&&this.nonModals.push(a),o&&this.nonModals.push(o),d&&this.nonModals.push(d),this.disableBodyScroll=null,this.enableBodyScroll=null,n&&n.disableBodyScroll&&n.enableBodyScroll&&(this.disableBodyScroll=n.disableBodyScroll,this.enableBodyScroll=n.enableBodyScroll)}return _createClass(t,[{key:\"appendToBody\",value:function(t){this.body.appendChild(t)}},{key:\"toggleModal\",value:function(t,e){\"false\"===document.getElementById(t).getAttribute(\"aria-hidden\")?this.closeModal(t):this.openModal(t,e)}},{key:\"setNavToggleBtnState\",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:\"open\",n=t.getElementsByTagName(\"svg\"),i=t.getElementsByClassName(\"dcf-nav-toggle-label\");if(n.length){var a=n[DCFUtility.magicNumbers(\"int0\")].getElementsByTagName(\"g\");Array.from(a).forEach(function(t){t.classList.contains(\"dcf-nav-toggle-icon-open\")?\"open\"===e.toLowerCase()?t.classList.remove(\"dcf-d-none\"):t.classList.add(\"dcf-d-none\"):t.classList.contains(\"dcf-nav-toggle-icon-close\")&&(\"open\"===e.toLowerCase()?t.classList.add(\"dcf-d-none\"):t.classList.remove(\"dcf-d-none\"))})}i.length&&(\"open\"===e.toLowerCase()?i[DCFUtility.magicNumbers(\"int0\")].textContent=t.getAttribute(\"data-nav-toggle-label-open\")?t.getAttribute(\"data-nav-toggle-label-open\"):\"Open\":i[DCFUtility.magicNumbers(\"int0\")].textContent=t.getAttribute(\"data-nav-toggle-label-closed\")?t.getAttribute(\"data-nav-toggle-label-closed\"):\"Close\")}},{key:\"openModal\",value:function(t,e){var n=this,i=document.getElementById(\"dcf-nav-toggle-group\"),a=i&&i.parentElement?i.parentElement:null;this.modals.forEach(function(e){e.getAttribute(\"id\")!==t&&n.closeModal(e.getAttribute(\"id\"))});var o=document.getElementById(t),d=\"false\"===o.getAttribute(\"aria-hidden\"),l=!1;if(e){this.currentBtn=e;var s=document.getElementById(e);l=s&&\"true\"===s.getAttribute(\"data-with-nav-toggle-group\"),l&&this.setNavToggleBtnState(s,\"closed\")}if(this.currentModal=t,!d){this.nonModals.forEach(function(t){if(l&&i&&t===a){t.setAttribute(\"aria-hidden\",\"false\");a.childNodes.forEach(function(t){t.nodeType===Node.ELEMENT_NODE&&(t===i?t.setAttribute(\"aria-hidden\",\"false\"):t.setAttribute(\"aria-hidden\",\"true\"))})}else t.setAttribute(\"aria-hidden\",\"true\")}),this.disableBodyScroll&&this.disableBodyScroll(o),this.body.classList.add(\"dcf-modal-is-open\"),o.setAttribute(\"aria-hidden\",\"false\"),o.classList.remove(\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\"),o.classList.add(\"dcf-opacity-100\",\"dcf-pointer-events-auto\"),l&&o.classList.add(\"dcf-z-modal-behind-nav-toggle-group\");var c=o.querySelectorAll('button:not([hidden]):not([disabled]), [href]:not([hidden]), input:not([hidden]):not([type=\"hidden\"]):not([disabled]), select:not([hidden]):not([disabled]), textarea:not([hidden]):not([disabled]), [tabindex=\"0\"]:not([hidden]):not([disabled]), summary:not([hidden]), [contenteditable]:not([hidden]), audio[controls]:not([hidden]), video[controls]:not([hidden])'),r=c[DCFUtility.magicNumbers(\"int0\")],u=c[c.length-DCFUtility.magicNumbers(\"int1\")];o.focus(),o.addEventListener(\"keydown\",function(t){(\"Tab\"===t.key||9===t.keyCode)&&(\"Tab\"!==t.key&&9!==t.keyCode||(t.shiftKey?document.activeElement===r&&(t.preventDefault(),u.focus()):document.activeElement===u&&(t.preventDefault(),r.focus())))});var f=\"ModalOpenEvent_\"+t;document.dispatchEvent(new CustomEvent(f))}}},{key:\"closeModal\",value:function(t){function e(){a.removeEventListener(\"transitionend\",e),a.classList.contains(\"dcf-invisible\")||a.classList.add(\"dcf-invisible\")}var n=document.getElementById(\"dcf-nav-toggle-group\"),i=n&&n.parentElement?n.parentElement:null,a=document.getElementById(t),o=\"true\"===a.getAttribute(\"aria-hidden\");if(this.currentModal=null,!o){if(this.body.classList.remove(\"dcf-modal-is-open\"),this.currentBtn){var d=document.getElementById(this.currentBtn);d&&\"true\"===d.getAttribute(\"data-with-nav-toggle-group\")&&this.setNavToggleBtnState(d,\"open\")}this.nonModals.forEach(function(t){if(n&&t===i){i.childNodes.forEach(function(t){t.nodeType===Node.ELEMENT_NODE&&t.setAttribute(\"aria-hidden\",\"false\")})}t.setAttribute(\"aria-hidden\",\"false\")}),a.setAttribute(\"aria-hidden\",\"true\"),a.classList.remove(\"dcf-opacity-100\",\"dcf-pointer-events-auto\",\"dcf-z-modal-behind-nav-toggle-group\"),a.classList.add(\"dcf-opacity-0\",\"dcf-pointer-events-none\"),a.addEventListener(\"transitionend\",e),this.currentBtn&&document.getElementById(this.currentBtn).focus(),this.enableBodyScroll&&this.enableBodyScroll(a);var l=\"ModalCloseEvent_\"+t;document.dispatchEvent(new CustomEvent(l))}}},{key:\"btnToggleListen\",value:function(t,e,n){var i=this;t.addEventListener(\"click\",function(){i.toggleModal(e,n)},!1)}},{key:\"btnCloseListen\",value:function(t,e){var n=this;t.addEventListener(\"click\",function(){n.closeModal(e.getAttribute(\"id\"))},!1)}},{key:\"overlayListen\",value:function(t,e){var n=this;t.addEventListener(\"click\",function(i){e.contains(i.target)||n.closeModal(t.getAttribute(\"id\"))})}},{key:\"escListen\",value:function(){var t=this;document.addEventListener(\"keydown\",function(e){e.which===DCFUtility.magicNumbers(\"escCode\")&&t.currentModal&&(e.preventDefault(),t.closeModal(t.currentModal))})}},{key:\"initialize\",value:function(){var t=this;if(this.modals){var e=document.querySelectorAll(\".dcf-btn-toggle-modal\"),n=document.querySelectorAll(\".dcf-btn-close-modal\"),i=document.querySelectorAll(\".dcf-modal-wrapper\"),a=document.querySelectorAll(\".dcf-modal-content\"),o=document.querySelectorAll(\".dcf-modal-header\");e.forEach(function(e){var n=e.getAttribute(\"data-toggles-modal\"),i=DCFUtility.uuidv4();e.setAttribute(\"id\",i),e.removeAttribute(\"disabled\"),t.btnToggleListen(e,n,i)});for(var d=0;d<this.modals.length;d++){var l=this.modals[d],s=i[d],c=a[d],r=o[d],u=n[d],f=l.id,h=f+\"-heading\";r.querySelectorAll(\"h1, h2, h3, h4, h5, h6\")[DCFUtility.magicNumbers(\"int0\")].id=h,this.appendToBody(l),l.removeAttribute(\"hidden\"),l.setAttribute(\"aria-labelledby\",h),l.setAttribute(\"aria-hidden\",\"true\"),l.setAttribute(\"role\",\"dialog\"),l.setAttribute(\"tabindex\",\"-1\"),l.classList.length===DCFUtility.magicNumbers(\"int1\")&&l.classList.contains(\"dcf-modal\")&&l.classList.add(\"dcf-bg-overlay-dark\"),l.classList.add(\"dcf-fixed\",\"dcf-pin-top\",\"dcf-pin-left\",\"dcf-h-100%\",\"dcf-w-100%\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\"),s.setAttribute(\"role\",\"document\"),s.classList.length===DCFUtility.magicNumbers(\"int1\")&&s.classList.contains(\"dcf-modal-wrapper\")&&s.classList.add(\"dcf-relative\",\"dcf-h-auto\",\"dcf-overflow-y-auto\"),r.classList.length===DCFUtility.magicNumbers(\"int1\")&&r.classList.contains(\"dcf-modal-header\")&&r.classList.add(\"dcf-wrapper\",\"dcf-pt-8\",\"dcf-sticky\",\"dcf-pin-top\"),u.classList.length===DCFUtility.magicNumbers(\"int1\")&&u.classList.contains(\"dcf-btn-close-modal\")&&u.classList.add(\"dcf-btn\",\"dcf-btn-tertiary\",\"dcf-absolute\",\"dcf-pin-top\",\"dcf-pin-right\",\"dcf-z-1\"),c.classList.length===DCFUtility.magicNumbers(\"int1\")&&c.classList.contains(\"dcf-modal-content\")&&c.classList.add(\"dcf-wrapper\",\"dcf-pb-8\"),u.setAttribute(\"type\",\"button\"),u.setAttribute(\"aria-label\",\"Close\"),this.escListen(),this.overlayListen(l,s),this.btnCloseListen(u,l)}}}}]),t}();
//# sourceMappingURL=dcf-modal.js.map", "wdn/templates_5.1/js/compressed/dcf-modal.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/dcf-modal.js");
    }
}
