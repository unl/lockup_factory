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

/* wdn/templates_5.3/js/compressed/dcf-tabs.js */
class __TwigTemplate_4db9e3021b70cc35a3f482eec0928a53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-tabs.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-tabs.js"));

        // line 1
        echo "define([\"exports\",\"./dcf-utility\"],function(t,e){\"use strict\";function i(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}function a(t,e){for(var i=0;i<e.length;i++){var a=e[i];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}function r(t,e,i){return e&&a(t.prototype,e),i&&a(t,i),Object.defineProperty(t,\"prototype\",{writable:!1}),t}Object.defineProperty(t,\"__esModule\",{value:!0}),t.DCFTabs=void 0;var n=[],s=function(){var t=[];Array.prototype.forEach.call(n,function(e){var i=window.location.hash;i?e.displayTabByHash(i):Array.prototype.forEach.call(e.tabGroups,function(e){var i=e.getAttribute(\"id\");if(!t.includes(i)){t.push(i);e.querySelector(\".dcf-tabs > ol, .dcf-tabs > ul\").dispatchEvent(new Event(\"resetTabGroup\"))}})})};window.addEventListener(\"hashchange\",s);var o=function(){function t(e){var a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};i(this,t),this.tabGroups=e,this.tabHashLookup={},this.useHashChange=!0,!1===a.useHashChange&&(this.useHashChange=!1),n.push(this)}return r(t,[{key:\"switchTab\",value:function(t,e){var i=arguments.length>2&&void 0!==arguments[2]&&arguments[2],a=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(t){t.removeAttribute(\"aria-selected\"),t.setAttribute(\"tabindex\",\"-1\");var r=t.getAttribute(\"data-panel-id\");if(r){var n=document.getElementById(r);n&&(n.hidden=!0)}this.focusTab(e)}var s=e.getAttribute(\"data-panel-id\");if(s){var o=document.getElementById(s);o?(o.hidden=!1,a&&o.scrollIntoView()):console.error(\"DCF Tabs: The tab panel with id \".concat(s,\" is not associated with a tab.\"))}else{var l=e.getAttribute(\"id\");console.error(\"DCF Tabs: The tab with id \".concat(l,\" is missing panel href to map to panel.\"))}i&&this.setPageHash(e.getAttribute(\"href\"))}},{key:\"focusTab\",value:function(t){t.focus(),t.setAttribute(\"tabindex\",\"0\"),t.setAttribute(\"aria-selected\",\"true\")}},{key:\"getCurrentTabByTab\",value:function(t){var e=t.parentNode.parentNode,i=null;return\"OL\"!==e.tagName&&\"UL\"!==e.tagName||(i=e.querySelector(\"[aria-selected]\")),i}},{key:\"isHash\",value:function(t){return t&&\"#\"===t.substr(e.DCFUtility.magicNumbers(\"int0\"),e.DCFUtility.magicNumbers(\"int1\"))}},{key:\"setPageHash\",value:function(t){var e=this.isHash(t)?t:\"\";e&&history.pushState?history.pushState(null,null,window.location.origin+window.location.pathname+e):location.hash=e}},{key:\"displayTabByHash\",value:function(t){if(this.useHashChange&&this.isHash(t)&&t&&this.tabHashLookup[t]){var e=this.tabHashLookup[t],i=this.getCurrentTabByTab(e);i!==e?this.switchTab(i,e,!1,!0):this.focusTab(e)}}},{key:\"initialize\",value:function(){var t=this;Array.prototype.forEach.call(this.tabGroups,function(i){var a=i.querySelector(\".dcf-tabs > ol, .dcf-tabs > ul\"),r=a.querySelectorAll(\"a\"),n=i.querySelectorAll(\".dcf-tabs > div, .dcf-tabs > section\"),s=e.DCFUtility.uuidv4();i.setAttribute(\"id\",e.DCFUtility.checkSetElementId(i,s.concat(\"-tab-group\"))),Array.prototype.forEach.call(r,function(i,n){i.classList.add(\"dcf-tab\",\"dcf-d-block\");var o=n+e.DCFUtility.magicNumbers(\"int1\");i.setAttribute(\"id\",e.DCFUtility.checkSetElementId(i,s.concat(\"-tab-\",o))),i.setAttribute(\"role\",\"tab\"),n===e.DCFUtility.magicNumbers(\"int0\")?(i.setAttribute(\"tabindex\",\"0\"),i.setAttribute(\"aria-selected\",\"true\")):(i.setAttribute(\"tabindex\",\"-1\"),i.removeAttribute(\"aria-selected\")),i.parentNode.classList.add(\"dcf-tabs-list-item\",\"dcf-mb-0\"),i.parentNode.setAttribute(\"role\",\"presentation\");var l=i.getAttribute(\"href\");t.isHash(l)&&(i.setAttribute(\"data-panel-id\",l.substring(e.DCFUtility.magicNumbers(\"int1\"))),t.tabHashLookup[l]=i),i.addEventListener(\"click\",function(e){e.preventDefault();var i=a.querySelector(\"[aria-selected]\");e.currentTarget!==i&&t.switchTab(i,e.currentTarget,t.useHashChange)}),i.addEventListener(\"keydown\",function(a){var n=Array.prototype.indexOf.call(r,a.currentTarget),s=0;if(e.DCFUtility.isKeyEvent(a,e.DCFUtility.keyEvents(\"arrowLeft\"))?s=n>e.DCFUtility.magicNumbers(\"int0\")?n-e.DCFUtility.magicNumbers(\"int1\"):r.length-e.DCFUtility.magicNumbers(\"int1\"):e.DCFUtility.isKeyEvent(a,e.DCFUtility.keyEvents(\"arrowRight\"))?n<r.length-e.DCFUtility.magicNumbers(\"int1\")&&(s=n+e.DCFUtility.magicNumbers(\"int1\")):s=e.DCFUtility.isKeyEvent(a,e.DCFUtility.keyEvents(\"arrowDown\"))?\"down\":null,null!==s)if(a.preventDefault(),\"down\"===s){var o=i.getAttribute(\"data-panel-id\");if(o){var l=document.getElementById(o);l&&l.focus()}}else r[s]&&t.switchTab(a.currentTarget,r[s],!1)},!1)}),Array.prototype.forEach.call(n,function(i){i.setAttribute(\"role\",\"tabpanel\"),i.setAttribute(\"tabindex\",\"-1\"),i.classList.add(\"dcf-tabs-panel\"),i.hidden=!0;var a=i.getAttribute(\"id\");if(a){var r=t.tabHashLookup[\"#\".concat(a)];r&&(i.setAttribute(\"aria-labelledby\",r.getAttribute(\"id\")),i.addEventListener(\"keydown\",function(t){e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents(\"arrowUp\"))&&(r.focus(),t.stopPropagation())}))}}),a.classList.add(\"dcf-tabs-list\",\"dcf-list-bare\",\"dcf-mb-0\"),a.setAttribute(\"role\",\"tablist\"),t.switchTab(null,r[e.DCFUtility.magicNumbers(\"int0\")],!1),t.useHashChange&&a.addEventListener(\"resetTabGroup\",function(){var i=r[e.DCFUtility.magicNumbers(\"int0\")],a=t.getCurrentTabByTab(i);a!==i&&t.switchTab(a,i,!1)})}),this.useHashChange&&window.location.hash&&this.displayTabByHash(window.location.hash)}}]),t}();t.DCFTabs=o});
//# sourceMappingURL=dcf-tabs.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-tabs.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\",\"./dcf-utility\"],function(t,e){\"use strict\";function i(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}function a(t,e){for(var i=0;i<e.length;i++){var a=e[i];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}function r(t,e,i){return e&&a(t.prototype,e),i&&a(t,i),Object.defineProperty(t,\"prototype\",{writable:!1}),t}Object.defineProperty(t,\"__esModule\",{value:!0}),t.DCFTabs=void 0;var n=[],s=function(){var t=[];Array.prototype.forEach.call(n,function(e){var i=window.location.hash;i?e.displayTabByHash(i):Array.prototype.forEach.call(e.tabGroups,function(e){var i=e.getAttribute(\"id\");if(!t.includes(i)){t.push(i);e.querySelector(\".dcf-tabs > ol, .dcf-tabs > ul\").dispatchEvent(new Event(\"resetTabGroup\"))}})})};window.addEventListener(\"hashchange\",s);var o=function(){function t(e){var a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};i(this,t),this.tabGroups=e,this.tabHashLookup={},this.useHashChange=!0,!1===a.useHashChange&&(this.useHashChange=!1),n.push(this)}return r(t,[{key:\"switchTab\",value:function(t,e){var i=arguments.length>2&&void 0!==arguments[2]&&arguments[2],a=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(t){t.removeAttribute(\"aria-selected\"),t.setAttribute(\"tabindex\",\"-1\");var r=t.getAttribute(\"data-panel-id\");if(r){var n=document.getElementById(r);n&&(n.hidden=!0)}this.focusTab(e)}var s=e.getAttribute(\"data-panel-id\");if(s){var o=document.getElementById(s);o?(o.hidden=!1,a&&o.scrollIntoView()):console.error(\"DCF Tabs: The tab panel with id \".concat(s,\" is not associated with a tab.\"))}else{var l=e.getAttribute(\"id\");console.error(\"DCF Tabs: The tab with id \".concat(l,\" is missing panel href to map to panel.\"))}i&&this.setPageHash(e.getAttribute(\"href\"))}},{key:\"focusTab\",value:function(t){t.focus(),t.setAttribute(\"tabindex\",\"0\"),t.setAttribute(\"aria-selected\",\"true\")}},{key:\"getCurrentTabByTab\",value:function(t){var e=t.parentNode.parentNode,i=null;return\"OL\"!==e.tagName&&\"UL\"!==e.tagName||(i=e.querySelector(\"[aria-selected]\")),i}},{key:\"isHash\",value:function(t){return t&&\"#\"===t.substr(e.DCFUtility.magicNumbers(\"int0\"),e.DCFUtility.magicNumbers(\"int1\"))}},{key:\"setPageHash\",value:function(t){var e=this.isHash(t)?t:\"\";e&&history.pushState?history.pushState(null,null,window.location.origin+window.location.pathname+e):location.hash=e}},{key:\"displayTabByHash\",value:function(t){if(this.useHashChange&&this.isHash(t)&&t&&this.tabHashLookup[t]){var e=this.tabHashLookup[t],i=this.getCurrentTabByTab(e);i!==e?this.switchTab(i,e,!1,!0):this.focusTab(e)}}},{key:\"initialize\",value:function(){var t=this;Array.prototype.forEach.call(this.tabGroups,function(i){var a=i.querySelector(\".dcf-tabs > ol, .dcf-tabs > ul\"),r=a.querySelectorAll(\"a\"),n=i.querySelectorAll(\".dcf-tabs > div, .dcf-tabs > section\"),s=e.DCFUtility.uuidv4();i.setAttribute(\"id\",e.DCFUtility.checkSetElementId(i,s.concat(\"-tab-group\"))),Array.prototype.forEach.call(r,function(i,n){i.classList.add(\"dcf-tab\",\"dcf-d-block\");var o=n+e.DCFUtility.magicNumbers(\"int1\");i.setAttribute(\"id\",e.DCFUtility.checkSetElementId(i,s.concat(\"-tab-\",o))),i.setAttribute(\"role\",\"tab\"),n===e.DCFUtility.magicNumbers(\"int0\")?(i.setAttribute(\"tabindex\",\"0\"),i.setAttribute(\"aria-selected\",\"true\")):(i.setAttribute(\"tabindex\",\"-1\"),i.removeAttribute(\"aria-selected\")),i.parentNode.classList.add(\"dcf-tabs-list-item\",\"dcf-mb-0\"),i.parentNode.setAttribute(\"role\",\"presentation\");var l=i.getAttribute(\"href\");t.isHash(l)&&(i.setAttribute(\"data-panel-id\",l.substring(e.DCFUtility.magicNumbers(\"int1\"))),t.tabHashLookup[l]=i),i.addEventListener(\"click\",function(e){e.preventDefault();var i=a.querySelector(\"[aria-selected]\");e.currentTarget!==i&&t.switchTab(i,e.currentTarget,t.useHashChange)}),i.addEventListener(\"keydown\",function(a){var n=Array.prototype.indexOf.call(r,a.currentTarget),s=0;if(e.DCFUtility.isKeyEvent(a,e.DCFUtility.keyEvents(\"arrowLeft\"))?s=n>e.DCFUtility.magicNumbers(\"int0\")?n-e.DCFUtility.magicNumbers(\"int1\"):r.length-e.DCFUtility.magicNumbers(\"int1\"):e.DCFUtility.isKeyEvent(a,e.DCFUtility.keyEvents(\"arrowRight\"))?n<r.length-e.DCFUtility.magicNumbers(\"int1\")&&(s=n+e.DCFUtility.magicNumbers(\"int1\")):s=e.DCFUtility.isKeyEvent(a,e.DCFUtility.keyEvents(\"arrowDown\"))?\"down\":null,null!==s)if(a.preventDefault(),\"down\"===s){var o=i.getAttribute(\"data-panel-id\");if(o){var l=document.getElementById(o);l&&l.focus()}}else r[s]&&t.switchTab(a.currentTarget,r[s],!1)},!1)}),Array.prototype.forEach.call(n,function(i){i.setAttribute(\"role\",\"tabpanel\"),i.setAttribute(\"tabindex\",\"-1\"),i.classList.add(\"dcf-tabs-panel\"),i.hidden=!0;var a=i.getAttribute(\"id\");if(a){var r=t.tabHashLookup[\"#\".concat(a)];r&&(i.setAttribute(\"aria-labelledby\",r.getAttribute(\"id\")),i.addEventListener(\"keydown\",function(t){e.DCFUtility.isKeyEvent(t,e.DCFUtility.keyEvents(\"arrowUp\"))&&(r.focus(),t.stopPropagation())}))}}),a.classList.add(\"dcf-tabs-list\",\"dcf-list-bare\",\"dcf-mb-0\"),a.setAttribute(\"role\",\"tablist\"),t.switchTab(null,r[e.DCFUtility.magicNumbers(\"int0\")],!1),t.useHashChange&&a.addEventListener(\"resetTabGroup\",function(){var i=r[e.DCFUtility.magicNumbers(\"int0\")],a=t.getCurrentTabByTab(i);a!==i&&t.switchTab(a,i,!1)})}),this.useHashChange&&window.location.hash&&this.displayTabByHash(window.location.hash)}}]),t}();t.DCFTabs=o});
//# sourceMappingURL=dcf-tabs.js.map", "wdn/templates_5.3/js/compressed/dcf-tabs.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-tabs.js");
    }
}
