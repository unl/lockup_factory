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

/* wdn/templates_5.3/js/compressed/dcf-pagination.js */
class __TwigTemplate_86173e6f16c16c83b7da7a148c4b086d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-pagination.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-pagination.js"));

        // line 1
        echo "define([\"exports\"],function(t){\"use strict\";function a(t,a){if(!(t instanceof a))throw new TypeError(\"Cannot call a class as a function\")}function e(t,a){for(var e=0;e<a.length;e++){var i=a[e];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function i(t,a,i){return a&&e(t.prototype,a),i&&e(t,i),Object.defineProperty(t,\"prototype\",{writable:!1}),t}Object.defineProperty(t,\"__esModule\",{value:!0}),t.DCFPagination=void 0;var n=function(){function t(e){a(this,t),this.PaginationNavs=e}return i(t,[{key:\"initialize\",value:function(){Array.prototype.forEach.call(this.PaginationNavs,function(t){t.setAttribute(\"role\",\"navigation\"),t.setAttribute(\"aria-label\",\"Pagination Navigation\");var a=t.getElementsByTagName(\"ol\");if(1===a.length){var e=a[0];e.classList.remove(\"dcf-list-inline\"),e.classList.add(\"dcf-list-bare\",\"dcf-d-flex\",\"dcf-flex-wrap\",\"dcf-ai-center\",\"dcf-col-gap-2\",\"dcf-row-gap-2\");var i=e.getElementsByTagName(\"a\");Array.prototype.forEach.call(i,function(t){t.classList.add(\"dcf-btn\",\"dcf-btn-secondary\",\"dcf-txt-xs\"),t.classList.contains(\"dcf-pagination-first\")?t.setAttribute(\"aria-label\",\"First page.\"):t.classList.contains(\"dcf-pagination-prev\")?t.setAttribute(\"aria-label\",\"Previous page.\"):t.classList.contains(\"dcf-pagination-next\")?t.setAttribute(\"aria-label\",\"Next page.\"):t.classList.contains(\"dcf-pagination-last\")&&t.setAttribute(\"aria-label\",\"Last page.\")});var n=e.getElementsByTagName(\"span\");Array.prototype.forEach.call(n,function(t){t.classList.contains(\"dcf-pagination-selected\")?(t.classList.add(\"dcf-txt-xs\",\"dcf-bold\"),t.setAttribute(\"aria-current\",!0),t.setAttribute(\"aria-label\",\"Current page.\")):t.classList.contains(\"dcf-pagination-ellipsis\")&&(t.classList.add(\"dcf-txt-xs\"),t.setAttribute(\"aria-hidden\",!0))})}})}}]),t}();t.DCFPagination=n});
//# sourceMappingURL=dcf-pagination.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-pagination.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\"],function(t){\"use strict\";function a(t,a){if(!(t instanceof a))throw new TypeError(\"Cannot call a class as a function\")}function e(t,a){for(var e=0;e<a.length;e++){var i=a[e];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function i(t,a,i){return a&&e(t.prototype,a),i&&e(t,i),Object.defineProperty(t,\"prototype\",{writable:!1}),t}Object.defineProperty(t,\"__esModule\",{value:!0}),t.DCFPagination=void 0;var n=function(){function t(e){a(this,t),this.PaginationNavs=e}return i(t,[{key:\"initialize\",value:function(){Array.prototype.forEach.call(this.PaginationNavs,function(t){t.setAttribute(\"role\",\"navigation\"),t.setAttribute(\"aria-label\",\"Pagination Navigation\");var a=t.getElementsByTagName(\"ol\");if(1===a.length){var e=a[0];e.classList.remove(\"dcf-list-inline\"),e.classList.add(\"dcf-list-bare\",\"dcf-d-flex\",\"dcf-flex-wrap\",\"dcf-ai-center\",\"dcf-col-gap-2\",\"dcf-row-gap-2\");var i=e.getElementsByTagName(\"a\");Array.prototype.forEach.call(i,function(t){t.classList.add(\"dcf-btn\",\"dcf-btn-secondary\",\"dcf-txt-xs\"),t.classList.contains(\"dcf-pagination-first\")?t.setAttribute(\"aria-label\",\"First page.\"):t.classList.contains(\"dcf-pagination-prev\")?t.setAttribute(\"aria-label\",\"Previous page.\"):t.classList.contains(\"dcf-pagination-next\")?t.setAttribute(\"aria-label\",\"Next page.\"):t.classList.contains(\"dcf-pagination-last\")&&t.setAttribute(\"aria-label\",\"Last page.\")});var n=e.getElementsByTagName(\"span\");Array.prototype.forEach.call(n,function(t){t.classList.contains(\"dcf-pagination-selected\")?(t.classList.add(\"dcf-txt-xs\",\"dcf-bold\"),t.setAttribute(\"aria-current\",!0),t.setAttribute(\"aria-label\",\"Current page.\")):t.classList.contains(\"dcf-pagination-ellipsis\")&&(t.classList.add(\"dcf-txt-xs\"),t.setAttribute(\"aria-hidden\",!0))})}})}}]),t}();t.DCFPagination=n});
//# sourceMappingURL=dcf-pagination.js.map", "wdn/templates_5.3/js/compressed/dcf-pagination.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-pagination.js");
    }
}
