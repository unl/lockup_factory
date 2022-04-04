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

/* wdn/templates_5.2/js/compressed/dcf-tabs.js */
class __TwigTemplate_11e9878f8579d47a37c4abcd35fc54da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-tabs.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-tabs.js"));

        // line 1
        echo "function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function t(t,e){for(var i=0;i<e.length;i++){var a=e[i];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}return function(e,i,a){return i&&t(e.prototype,i),a&&t(e,a),e}}(),DCFTabs=function(){function t(e){_classCallCheck(this,t),this.tabGroups=e,this.tabHashLookup={}}return _createClass(t,[{key:\"switchTab\",value:function(t,e,i,a){e.focus(),e.removeAttribute(\"tabindex\"),e.setAttribute(\"aria-selected\",\"true\"),e.setAttribute(\"tabindex\",\"0\"),t.removeAttribute(\"aria-selected\"),t.setAttribute(\"tabindex\",\"-1\");var r=Array.prototype.indexOf.call(i,e);a[Array.prototype.indexOf.call(i,t)].hidden=!0,a[r].hidden=!1,a[r].scrollIntoView(),this.setPageHash(e.getAttribute(\"href\"))}},{key:\"isHash\",value:function(t){return t&&\"#\"===t.substr(DCFUtility.magicNumbers(\"int0\"),DCFUtility.magicNumbers(\"int1\"))}},{key:\"setPageHash\",value:function(t){var e=this.isHash(t)?t:\" \";history.pushState?history.pushState(null,null,window.location.origin+window.location.pathname+e):location.hash=e}},{key:\"displayTabByHash\",value:function(){var t=window.location.hash;t&&this.tabHashLookup[t]&&this.tabHashLookup[t].click()}},{key:\"initialize\",value:function(){var t=this;Array.prototype.forEach.call(this.tabGroups,function(e){var i=e.querySelector(\".dcf-tabs > ol, .dcf-tabs > ul\"),a=i.querySelectorAll(\"a\"),r=e.querySelectorAll(\".dcf-tabs > div, .dcf-tabs > section\"),n=DCFUtility.uuidv4();e.setAttribute(\"id\",n.concat(\"-tab-group\")),Array.prototype.forEach.call(a,function(e,s){e.classList.add(\"dcf-tab\",\"dcf-d-block\");var c=s+DCFUtility.magicNumbers(\"int1\");e.setAttribute(\"id\",n.concat(\"-tab-\",c)),e.setAttribute(\"role\",\"tab\"),e.setAttribute(\"tabindex\",\"-1\"),e.parentNode.classList.add(\"dcf-tabs-list-item\",\"dcf-mb-0\"),e.parentNode.setAttribute(\"role\",\"presentation\"),t.isHash(e.getAttribute(\"href\"))&&(t.tabHashLookup[e.getAttribute(\"href\")]=e),e.addEventListener(\"click\",function(e){e.preventDefault();var n=i.querySelector(\"[aria-selected]\");e.currentTarget!==n&&t.switchTab(n,e.currentTarget,a,r)}),e.addEventListener(\"keydown\",function(e){var i=Array.prototype.indexOf.call(a,e.currentTarget),n=0;e.which===DCFUtility.magicNumbers(\"arrowLeftCode\")?n=i>DCFUtility.magicNumbers(\"int0\")?i-DCFUtility.magicNumbers(\"int1\"):a.length-DCFUtility.magicNumbers(\"int1\"):e.which===DCFUtility.magicNumbers(\"arrowRightCode\")?i<a.length-DCFUtility.magicNumbers(\"int1\")&&(n=i+DCFUtility.magicNumbers(\"int1\")):n=e.which===DCFUtility.magicNumbers(\"arrowDownCode\")?\"down\":null,null!==n&&(e.preventDefault(),\"down\"===n?r[s].focus():a[n]&&t.switchTab(e.currentTarget,a[n],a,r))})}),Array.prototype.forEach.call(r,function(t,e){t.setAttribute(\"role\",\"tabpanel\"),t.setAttribute(\"tabindex\",\"-1\"),t.classList.add(\"dcf-tabs-panel\"),t.setAttribute(\"aria-labelledby\",a[e].id),t.hidden=!0,t.addEventListener(\"keydown\",function(t){t.which===DCFUtility.magicNumbers(\"arrowUpCode\")&&a[e].focus()})}),i.classList.add(\"dcf-tabs-list\",\"dcf-list-bare\",\"dcf-mb-0\"),i.setAttribute(\"role\",\"tablist\"),a[DCFUtility.magicNumbers(\"int0\")].removeAttribute(\"tabindex\"),a[DCFUtility.magicNumbers(\"int0\")].setAttribute(\"aria-selected\",\"true\"),r[DCFUtility.magicNumbers(\"int0\")].hidden=!1}),window.addEventListener(\"hashchange\",function(){t.displayTabByHash()}),this.displayTabByHash()}}]),t}();
//# sourceMappingURL=dcf-tabs.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/dcf-tabs.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function t(t,e){for(var i=0;i<e.length;i++){var a=e[i];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}return function(e,i,a){return i&&t(e.prototype,i),a&&t(e,a),e}}(),DCFTabs=function(){function t(e){_classCallCheck(this,t),this.tabGroups=e,this.tabHashLookup={}}return _createClass(t,[{key:\"switchTab\",value:function(t,e,i,a){e.focus(),e.removeAttribute(\"tabindex\"),e.setAttribute(\"aria-selected\",\"true\"),e.setAttribute(\"tabindex\",\"0\"),t.removeAttribute(\"aria-selected\"),t.setAttribute(\"tabindex\",\"-1\");var r=Array.prototype.indexOf.call(i,e);a[Array.prototype.indexOf.call(i,t)].hidden=!0,a[r].hidden=!1,a[r].scrollIntoView(),this.setPageHash(e.getAttribute(\"href\"))}},{key:\"isHash\",value:function(t){return t&&\"#\"===t.substr(DCFUtility.magicNumbers(\"int0\"),DCFUtility.magicNumbers(\"int1\"))}},{key:\"setPageHash\",value:function(t){var e=this.isHash(t)?t:\" \";history.pushState?history.pushState(null,null,window.location.origin+window.location.pathname+e):location.hash=e}},{key:\"displayTabByHash\",value:function(){var t=window.location.hash;t&&this.tabHashLookup[t]&&this.tabHashLookup[t].click()}},{key:\"initialize\",value:function(){var t=this;Array.prototype.forEach.call(this.tabGroups,function(e){var i=e.querySelector(\".dcf-tabs > ol, .dcf-tabs > ul\"),a=i.querySelectorAll(\"a\"),r=e.querySelectorAll(\".dcf-tabs > div, .dcf-tabs > section\"),n=DCFUtility.uuidv4();e.setAttribute(\"id\",n.concat(\"-tab-group\")),Array.prototype.forEach.call(a,function(e,s){e.classList.add(\"dcf-tab\",\"dcf-d-block\");var c=s+DCFUtility.magicNumbers(\"int1\");e.setAttribute(\"id\",n.concat(\"-tab-\",c)),e.setAttribute(\"role\",\"tab\"),e.setAttribute(\"tabindex\",\"-1\"),e.parentNode.classList.add(\"dcf-tabs-list-item\",\"dcf-mb-0\"),e.parentNode.setAttribute(\"role\",\"presentation\"),t.isHash(e.getAttribute(\"href\"))&&(t.tabHashLookup[e.getAttribute(\"href\")]=e),e.addEventListener(\"click\",function(e){e.preventDefault();var n=i.querySelector(\"[aria-selected]\");e.currentTarget!==n&&t.switchTab(n,e.currentTarget,a,r)}),e.addEventListener(\"keydown\",function(e){var i=Array.prototype.indexOf.call(a,e.currentTarget),n=0;e.which===DCFUtility.magicNumbers(\"arrowLeftCode\")?n=i>DCFUtility.magicNumbers(\"int0\")?i-DCFUtility.magicNumbers(\"int1\"):a.length-DCFUtility.magicNumbers(\"int1\"):e.which===DCFUtility.magicNumbers(\"arrowRightCode\")?i<a.length-DCFUtility.magicNumbers(\"int1\")&&(n=i+DCFUtility.magicNumbers(\"int1\")):n=e.which===DCFUtility.magicNumbers(\"arrowDownCode\")?\"down\":null,null!==n&&(e.preventDefault(),\"down\"===n?r[s].focus():a[n]&&t.switchTab(e.currentTarget,a[n],a,r))})}),Array.prototype.forEach.call(r,function(t,e){t.setAttribute(\"role\",\"tabpanel\"),t.setAttribute(\"tabindex\",\"-1\"),t.classList.add(\"dcf-tabs-panel\"),t.setAttribute(\"aria-labelledby\",a[e].id),t.hidden=!0,t.addEventListener(\"keydown\",function(t){t.which===DCFUtility.magicNumbers(\"arrowUpCode\")&&a[e].focus()})}),i.classList.add(\"dcf-tabs-list\",\"dcf-list-bare\",\"dcf-mb-0\"),i.setAttribute(\"role\",\"tablist\"),a[DCFUtility.magicNumbers(\"int0\")].removeAttribute(\"tabindex\"),a[DCFUtility.magicNumbers(\"int0\")].setAttribute(\"aria-selected\",\"true\"),r[DCFUtility.magicNumbers(\"int0\")].hidden=!1}),window.addEventListener(\"hashchange\",function(){t.displayTabByHash()}),this.displayTabByHash()}}]),t}();
//# sourceMappingURL=dcf-tabs.js.map", "wdn/templates_5.2/js/compressed/dcf-tabs.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/dcf-tabs.js");
    }
}
