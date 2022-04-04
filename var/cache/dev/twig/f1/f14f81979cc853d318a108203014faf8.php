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

/* wdn/templates_5.0/js/compressed/dcf-uuidGen.js */
class __TwigTemplate_16a294fdbb708e1e8b3429078ee8298b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dcf-uuidGen.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dcf-uuidGen.js"));

        // line 1
        echo "var _typeof=\"function\"==typeof Symbol&&\"symbol\"==typeof Symbol.iterator?function(o){return typeof o}:function(o){return o&&\"function\"==typeof Symbol&&o.constructor===Symbol&&o!==Symbol.prototype?\"symbol\":typeof o};!function(o,t){\"function\"==typeof define&&define.amd?define([],t):\"object\"===(\"undefined\"==typeof exports?\"undefined\":_typeof(exports))?module.exports=t():o.dcfHelperUuidv4=t()}(void 0,function(){function o(){return\"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx\".replace(/[xy]/g,function(o){var t=16*Math.random()|0;return(\"x\"===o?t:3&t|8).toString(16)})}return o});
//# sourceMappingURL=dcf-uuidGen.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/dcf-uuidGen.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("var _typeof=\"function\"==typeof Symbol&&\"symbol\"==typeof Symbol.iterator?function(o){return typeof o}:function(o){return o&&\"function\"==typeof Symbol&&o.constructor===Symbol&&o!==Symbol.prototype?\"symbol\":typeof o};!function(o,t){\"function\"==typeof define&&define.amd?define([],t):\"object\"===(\"undefined\"==typeof exports?\"undefined\":_typeof(exports))?module.exports=t():o.dcfHelperUuidv4=t()}(void 0,function(){function o(){return\"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx\".replace(/[xy]/g,function(o){var t=16*Math.random()|0;return(\"x\"===o?t:3&t|8).toString(16)})}return o});
//# sourceMappingURL=dcf-uuidGen.js.map", "wdn/templates_5.0/js/compressed/dcf-uuidGen.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/dcf-uuidGen.js");
    }
}
