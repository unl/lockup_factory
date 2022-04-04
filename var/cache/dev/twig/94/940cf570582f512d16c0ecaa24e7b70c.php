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

/* wdn/templates_5.3/js/compressed/dcf-cardAsLink.js */
class __TwigTemplate_8258ba0a253efdf5e38c8d20f391abd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-cardAsLink.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-cardAsLink.js"));

        // line 1
        echo "define([\"exports\"],function(e){\"use strict\";function n(e,n){if(!(e instanceof n))throw new TypeError(\"Cannot call a class as a function\")}function r(e,n){for(var r=0;r<n.length;r++){var t=n[r];t.enumerable=t.enumerable||!1,t.configurable=!0,\"value\"in t&&(t.writable=!0),Object.defineProperty(e,t.key,t)}}function t(e,n,t){return n&&r(e.prototype,n),t&&r(e,t),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFCardAsLink=void 0;var o=function(){function e(r){n(this,e),this.cards=r}return t(e,[{key:\"initialize\",value:function(){Array.prototype.forEach.call(this.cards,function(e){var n=0,r=0,t=e.querySelector(\".dcf-card-link\");e.onmousedown=function(){n=Number(new Date)},e.onmouseup=function(){r=Number(new Date);r-n<200&&t.click()},e.style.cursor=\"pointer\"})}}]),e}();e.DCFCardAsLink=o});
//# sourceMappingURL=dcf-cardAsLink.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-cardAsLink.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\"],function(e){\"use strict\";function n(e,n){if(!(e instanceof n))throw new TypeError(\"Cannot call a class as a function\")}function r(e,n){for(var r=0;r<n.length;r++){var t=n[r];t.enumerable=t.enumerable||!1,t.configurable=!0,\"value\"in t&&(t.writable=!0),Object.defineProperty(e,t.key,t)}}function t(e,n,t){return n&&r(e.prototype,n),t&&r(e,t),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFCardAsLink=void 0;var o=function(){function e(r){n(this,e),this.cards=r}return t(e,[{key:\"initialize\",value:function(){Array.prototype.forEach.call(this.cards,function(e){var n=0,r=0,t=e.querySelector(\".dcf-card-link\");e.onmousedown=function(){n=Number(new Date)},e.onmouseup=function(){r=Number(new Date);r-n<200&&t.click()},e.style.cursor=\"pointer\"})}}]),e}();e.DCFCardAsLink=o});
//# sourceMappingURL=dcf-cardAsLink.js.map", "wdn/templates_5.3/js/compressed/dcf-cardAsLink.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-cardAsLink.js");
    }
}
