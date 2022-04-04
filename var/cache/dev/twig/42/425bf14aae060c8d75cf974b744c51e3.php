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

/* wdn/templates_5.3/js/compressed/dcf-table.js */
class __TwigTemplate_d592a20a786965360252bf34119ea237 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-table.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-table.js"));

        // line 1
        echo "define([\"exports\",\"./dcf-utility\"],function(t,e){\"use strict\";function n(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}function i(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function r(t,e,n){return e&&i(t.prototype,e),n&&i(t,n),Object.defineProperty(t,\"prototype\",{writable:!1}),t}Object.defineProperty(t,\"__esModule\",{value:!0}),t.DCFTable=void 0;var a=function(){function t(e){n(this,t),this.tables=e}return r(t,[{key:\"initialize\",value:function(){Array.prototype.forEach.call(this.tables,function(t){var n=t.parentNode;n&&n.classList.contains(\"dcf-overflow-x-auto\")&&(n.hasAttribute(\"tabIndex\")||n.setAttribute(\"tabIndex\",e.DCFUtility.magicNumbers(\"int0\")))})}}]),t}();t.DCFTable=a});
//# sourceMappingURL=dcf-table.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-table.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\",\"./dcf-utility\"],function(t,e){\"use strict\";function n(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}function i(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function r(t,e,n){return e&&i(t.prototype,e),n&&i(t,n),Object.defineProperty(t,\"prototype\",{writable:!1}),t}Object.defineProperty(t,\"__esModule\",{value:!0}),t.DCFTable=void 0;var a=function(){function t(e){n(this,t),this.tables=e}return r(t,[{key:\"initialize\",value:function(){Array.prototype.forEach.call(this.tables,function(t){var n=t.parentNode;n&&n.classList.contains(\"dcf-overflow-x-auto\")&&(n.hasAttribute(\"tabIndex\")||n.setAttribute(\"tabIndex\",e.DCFUtility.magicNumbers(\"int0\")))})}}]),t}();t.DCFTable=a});
//# sourceMappingURL=dcf-table.js.map", "wdn/templates_5.3/js/compressed/dcf-table.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-table.js");
    }
}
