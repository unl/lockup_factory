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

/* wdn/templates_5.0/js/carousel.js */
class __TwigTemplate_6c04a6fd5ae40836e729c95bc26f20d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/carousel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/carousel.js"));

        // line 1
        echo "/*
 *
 * Function to create a carousel. See http://www1.unl.edu/wdn/wiki/Carousel for more details
 *
 */
define([
\t'wdn',
\t'jquery',
\t'plugins/flexslider/jquery.flexslider',
\t'css!plugins/flexslider/css/flexslider'
], function(WDN, \$) {

\tvar defaultSel = '#wdn_Carousel',
\tflexCls = 'flexslider',
\tpluginPath = 'plugins/flexslider/',
\tinitd = false;
\t
\treturn {
\t\tinitialize : function(callback) {
\t\t\t\$(function() {
\t\t\t\tvar userConfig = WDN.getPluginParam('carousel', 'defaults') || {};
\t\t\t\tvar defaultConfig = {
                    directionNav: false
\t\t\t\t};

\t\t\t\tvar localConfig = \$.extend({}, defaultConfig, userConfig);
\t\t\t\t
\t\t\t\t\$(defaultSel).addClass(flexCls);
\t\t\t\t\$('.' + flexCls).flexslider(localConfig);
\t\t\t\tinitd = true;
\t\t\t\t
\t\t\t\tif (callback) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t});
\t\t}
\t};
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/carousel.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*
 *
 * Function to create a carousel. See http://www1.unl.edu/wdn/wiki/Carousel for more details
 *
 */
define([
\t'wdn',
\t'jquery',
\t'plugins/flexslider/jquery.flexslider',
\t'css!plugins/flexslider/css/flexslider'
], function(WDN, \$) {

\tvar defaultSel = '#wdn_Carousel',
\tflexCls = 'flexslider',
\tpluginPath = 'plugins/flexslider/',
\tinitd = false;
\t
\treturn {
\t\tinitialize : function(callback) {
\t\t\t\$(function() {
\t\t\t\tvar userConfig = WDN.getPluginParam('carousel', 'defaults') || {};
\t\t\t\tvar defaultConfig = {
                    directionNav: false
\t\t\t\t};

\t\t\t\tvar localConfig = \$.extend({}, defaultConfig, userConfig);
\t\t\t\t
\t\t\t\t\$(defaultSel).addClass(flexCls);
\t\t\t\t\$('.' + flexCls).flexslider(localConfig);
\t\t\t\tinitd = true;
\t\t\t\t
\t\t\t\tif (callback) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t});
\t\t}
\t};
});
", "wdn/templates_5.0/js/carousel.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/carousel.js");
    }
}
