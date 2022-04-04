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

/* wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js */
class __TwigTemplate_42ae7f24f3b7adca27a9f3d394260c81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js"));

        // line 1
        echo "define([\"exports\",\"./dcf-utility\"],function(e,t){\"use strict\";function i(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function n(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,\"value\"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function o(e,t,i){return t&&n(e.prototype,t),i&&n(e,i),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFNavMenuToggle=void 0;var a=function(){function e(n,o){var a=this;i(this,e),this.disableBodyScroll=o.disableBodyScroll,this.enableBodyScroll=o.enableBodyScroll,this.skipNav=document.getElementById(\"dcf-skip-nav\"),this.institutionTitle=document.getElementById(\"dcf-institution-title\"),this.logo=document.getElementById(\"dcf-logo-lockup\"),this.nav=document.getElementById(\"dcf-navigation\"),this.main=document.querySelector(\"main\"),this.footer=document.getElementById(\"dcf-footer\");var s=document.querySelectorAll(\".hrjs\");Array.prototype.forEach.call(s,function(e){try{new n(e,{tolerance:{up:5,down:5}}).init()}catch(e){}}),this.toggleButtons=document.querySelectorAll(\".dcf-nav-toggle-btn-menu\"),this.toggleIconOpen=document.getElementById(\"dcf-nav-toggle-icon-open-menu\"),this.toggleIconClose=document.getElementById(\"dcf-nav-toggle-icon-close-menu\"),this.toggleLabel=document.querySelector(\".dcf-nav-toggle-label-menu\"),this.mobileNav=document.getElementById(\"dcf-navigation\"),this.modalParent=document.querySelector(\".dcf-nav-menu\"),this.mobileNavMenu=document.getElementById(\"dcf-nav-menu-child\"),this.mobileNavMenu||(this.mobileNavMenu=document.createElement(\"nav\"),this.mobileNavMenu.setAttribute(\"id\",\"dcf-nav-menu-child\")),this.tabFocusEls=this.mobileNavMenu.querySelectorAll(\"[href]\"),this.firstTabFocusEl=this.tabFocusEls[t.DCFUtility.magicNumbers(\"int0\")],this.lastTabFocusEl=this.tabFocusEls[this.tabFocusEls.length-t.DCFUtility.magicNumbers(\"int1\")],this.closeSearchEvent=new CustomEvent(\"closeSearch\"),this.closeIDMOptionsEvent=new CustomEvent(\"closeDropDownWidget\",{detail:{type:\"idm-logged-in\"}}),this.activeToggleButton=null,this.isNavigationOpen=function(){return a.modalParent.classList.contains(\"dcf-modal-open\")},this.closeOpenNavigation=function(){!0===a.isNavigationOpen()&&a.closeNavModal()},this.onKeyDown=function(e){e.keyCode===t.DCFUtility.magicNumbers(\"escCode\")&&a.closeNavModal();(\"Tab\"===e.key||9===e.keyCode)&&(\"Tab\"!==e.key&&9!==e.keyCode||(e.shiftKey?document.activeElement===a.firstTabFocusEl&&(e.preventDefault(),a.lastTabFocusEl.focus()):document.activeElement===a.lastTabFocusEl&&(e.preventDefault(),a.firstTabFocusEl.focus())))},document.addEventListener(\"closeNavigation\",this.closeOpenNavigation,!1),window.addEventListener(\"resize\",this.closeOpenNavigation,!1),Array.prototype.forEach.call(this.toggleButtons,function(e){e.addEventListener(\"click\",function(e){return a.activeToggleButton=e.currentTarget,!0===a.isNavigationOpen()?a.closeNavModal():a.openNavModal(),!1},!1)});var l=document.querySelectorAll(\".dcf-nav-menu-child>ul>li\"),c=Array.from(l),r=c.find(function(e){return e.querySelector(\"ul\")}),d=document.getElementById(\"dcf-menu-toggle\");r&&d&&(d.removeAttribute(\"hidden\"),d.setAttribute(\"aria-expanded\",\"false\"),d.setAttribute(\"aria-label\",\"open menu\"))}return o(e,[{key:\"openNavModal\",value:function(){document.dispatchEvent(this.closeSearchEvent),document.dispatchEvent(this.closeIDMOptionsEvent),window.matchMedia(\"(max-width: 56.12em)\").matches&&(this.skipNav.setAttribute(\"aria-hidden\",\"true\"),this.institutionTitle.setAttribute(\"aria-hidden\",\"true\"),this.logo.setAttribute(\"aria-hidden\",\"true\"),this.nav.setAttribute(\"aria-hidden\",\"false\"),this.main.setAttribute(\"aria-hidden\",\"true\"),this.footer.setAttribute(\"aria-hidden\",\"true\"),this.disableBodyScroll(this.mobileNavMenu)),Array.prototype.forEach.call(this.toggleButtons,function(e){e.setAttribute(\"aria-expanded\",\"true\"),e.setAttribute(\"aria-label\",\"close menu\")}),this.modalParent.classList.add(\"dcf-modal-open\"),this.toggleIconOpen.classList.add(\"dcf-d-none\"),this.toggleIconClose.classList.remove(\"dcf-d-none\"),this.toggleLabel.textContent=\"Close\",this.firstTabFocusEl.focus(),document.addEventListener(\"keydown\",this.onKeyDown)}},{key:\"closeNavModal\",value:function(){window.matchMedia(\"(max-width: 56.12em)\").matches&&(this.skipNav.setAttribute(\"aria-hidden\",\"false\"),this.institutionTitle.setAttribute(\"aria-hidden\",\"false\"),this.logo.setAttribute(\"aria-hidden\",\"false\"),this.nav.setAttribute(\"aria-hidden\",\"true\"),this.main.setAttribute(\"aria-hidden\",\"false\"),this.footer.setAttribute(\"aria-hidden\",\"false\"),this.enableBodyScroll(this.mobileNavMenu)),Array.prototype.forEach.call(this.toggleButtons,function(e){e.setAttribute(\"aria-expanded\",\"false\"),e.setAttribute(\"aria-label\",\"open menu\")}),this.modalParent.classList.remove(\"dcf-modal-open\"),this.toggleIconOpen.classList.remove(\"dcf-d-none\"),this.toggleIconClose.classList.add(\"dcf-d-none\"),this.toggleLabel.textContent=\"Menu\",this.activeToggleButton.focus(),document.removeEventListener(\"keydown\",this.onKeyDown)}}]),e}();e.DCFNavMenuToggle=a});
//# sourceMappingURL=dcf-navMenuToggle.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\",\"./dcf-utility\"],function(e,t){\"use strict\";function i(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function n(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,\"value\"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function o(e,t,i){return t&&n(e.prototype,t),i&&n(e,i),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFNavMenuToggle=void 0;var a=function(){function e(n,o){var a=this;i(this,e),this.disableBodyScroll=o.disableBodyScroll,this.enableBodyScroll=o.enableBodyScroll,this.skipNav=document.getElementById(\"dcf-skip-nav\"),this.institutionTitle=document.getElementById(\"dcf-institution-title\"),this.logo=document.getElementById(\"dcf-logo-lockup\"),this.nav=document.getElementById(\"dcf-navigation\"),this.main=document.querySelector(\"main\"),this.footer=document.getElementById(\"dcf-footer\");var s=document.querySelectorAll(\".hrjs\");Array.prototype.forEach.call(s,function(e){try{new n(e,{tolerance:{up:5,down:5}}).init()}catch(e){}}),this.toggleButtons=document.querySelectorAll(\".dcf-nav-toggle-btn-menu\"),this.toggleIconOpen=document.getElementById(\"dcf-nav-toggle-icon-open-menu\"),this.toggleIconClose=document.getElementById(\"dcf-nav-toggle-icon-close-menu\"),this.toggleLabel=document.querySelector(\".dcf-nav-toggle-label-menu\"),this.mobileNav=document.getElementById(\"dcf-navigation\"),this.modalParent=document.querySelector(\".dcf-nav-menu\"),this.mobileNavMenu=document.getElementById(\"dcf-nav-menu-child\"),this.mobileNavMenu||(this.mobileNavMenu=document.createElement(\"nav\"),this.mobileNavMenu.setAttribute(\"id\",\"dcf-nav-menu-child\")),this.tabFocusEls=this.mobileNavMenu.querySelectorAll(\"[href]\"),this.firstTabFocusEl=this.tabFocusEls[t.DCFUtility.magicNumbers(\"int0\")],this.lastTabFocusEl=this.tabFocusEls[this.tabFocusEls.length-t.DCFUtility.magicNumbers(\"int1\")],this.closeSearchEvent=new CustomEvent(\"closeSearch\"),this.closeIDMOptionsEvent=new CustomEvent(\"closeDropDownWidget\",{detail:{type:\"idm-logged-in\"}}),this.activeToggleButton=null,this.isNavigationOpen=function(){return a.modalParent.classList.contains(\"dcf-modal-open\")},this.closeOpenNavigation=function(){!0===a.isNavigationOpen()&&a.closeNavModal()},this.onKeyDown=function(e){e.keyCode===t.DCFUtility.magicNumbers(\"escCode\")&&a.closeNavModal();(\"Tab\"===e.key||9===e.keyCode)&&(\"Tab\"!==e.key&&9!==e.keyCode||(e.shiftKey?document.activeElement===a.firstTabFocusEl&&(e.preventDefault(),a.lastTabFocusEl.focus()):document.activeElement===a.lastTabFocusEl&&(e.preventDefault(),a.firstTabFocusEl.focus())))},document.addEventListener(\"closeNavigation\",this.closeOpenNavigation,!1),window.addEventListener(\"resize\",this.closeOpenNavigation,!1),Array.prototype.forEach.call(this.toggleButtons,function(e){e.addEventListener(\"click\",function(e){return a.activeToggleButton=e.currentTarget,!0===a.isNavigationOpen()?a.closeNavModal():a.openNavModal(),!1},!1)});var l=document.querySelectorAll(\".dcf-nav-menu-child>ul>li\"),c=Array.from(l),r=c.find(function(e){return e.querySelector(\"ul\")}),d=document.getElementById(\"dcf-menu-toggle\");r&&d&&(d.removeAttribute(\"hidden\"),d.setAttribute(\"aria-expanded\",\"false\"),d.setAttribute(\"aria-label\",\"open menu\"))}return o(e,[{key:\"openNavModal\",value:function(){document.dispatchEvent(this.closeSearchEvent),document.dispatchEvent(this.closeIDMOptionsEvent),window.matchMedia(\"(max-width: 56.12em)\").matches&&(this.skipNav.setAttribute(\"aria-hidden\",\"true\"),this.institutionTitle.setAttribute(\"aria-hidden\",\"true\"),this.logo.setAttribute(\"aria-hidden\",\"true\"),this.nav.setAttribute(\"aria-hidden\",\"false\"),this.main.setAttribute(\"aria-hidden\",\"true\"),this.footer.setAttribute(\"aria-hidden\",\"true\"),this.disableBodyScroll(this.mobileNavMenu)),Array.prototype.forEach.call(this.toggleButtons,function(e){e.setAttribute(\"aria-expanded\",\"true\"),e.setAttribute(\"aria-label\",\"close menu\")}),this.modalParent.classList.add(\"dcf-modal-open\"),this.toggleIconOpen.classList.add(\"dcf-d-none\"),this.toggleIconClose.classList.remove(\"dcf-d-none\"),this.toggleLabel.textContent=\"Close\",this.firstTabFocusEl.focus(),document.addEventListener(\"keydown\",this.onKeyDown)}},{key:\"closeNavModal\",value:function(){window.matchMedia(\"(max-width: 56.12em)\").matches&&(this.skipNav.setAttribute(\"aria-hidden\",\"false\"),this.institutionTitle.setAttribute(\"aria-hidden\",\"false\"),this.logo.setAttribute(\"aria-hidden\",\"false\"),this.nav.setAttribute(\"aria-hidden\",\"true\"),this.main.setAttribute(\"aria-hidden\",\"false\"),this.footer.setAttribute(\"aria-hidden\",\"false\"),this.enableBodyScroll(this.mobileNavMenu)),Array.prototype.forEach.call(this.toggleButtons,function(e){e.setAttribute(\"aria-expanded\",\"false\"),e.setAttribute(\"aria-label\",\"open menu\")}),this.modalParent.classList.remove(\"dcf-modal-open\"),this.toggleIconOpen.classList.remove(\"dcf-d-none\"),this.toggleIconClose.classList.add(\"dcf-d-none\"),this.toggleLabel.textContent=\"Menu\",this.activeToggleButton.focus(),document.removeEventListener(\"keydown\",this.onKeyDown)}}]),e}();e.DCFNavMenuToggle=a});
//# sourceMappingURL=dcf-navMenuToggle.js.map", "wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-navMenuToggle.js");
    }
}
