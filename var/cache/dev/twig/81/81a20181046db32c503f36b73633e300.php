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

/* wdn/templates_5.2/js/compressed/scroll-animations.js */
class __TwigTemplate_99a120c851ce81f4473af4264f10b5ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/scroll-animations.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/scroll-animations.js"));

        // line 1
        echo "function _classCallCheck(e,n){if(!(e instanceof n))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,n){for(var t=0;t<n.length;t++){var i=n[t];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(n,t,i){return t&&e(n.prototype,t),i&&e(n,i),n}}(),DCFScrollAnimation=function(){function e(n,t,i){_classCallCheck(this,e),this.itemList=n,this.observerConfig=t,this.animationClassNames=i}return _createClass(e,[{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,n=function(n,t){0===e.itemsCount&&e.observer.disconnect(),n.forEach(function(n){n.intersectionRatio>=t.thresholds[0]&&n.intersectionRatio<t.thresholds[1]?e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return n.target.classList.add(e)}):n.intersectionRatio>t.thresholds[1]&&(e.itemsCount--,e.observer.unobserve(n.target))})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window&&(this.observer=new IntersectionObserver(n,this.observerConfig),this.itemList.forEach(function(n){e.observer.observe(n)})))}}]),e}();define(\"dcf-scrollAnimation\",function(){}),require([\"dcf-scrollAnimation\"],function(){var e=document.querySelectorAll(\".dcf-animate-on-scroll\");new DCFScrollAnimation(e,{rootMargin:\"0px\",threshold:[.5,1]},[\"dcf-animated\"]).initialize()}),define(\"scroll-animations\",function(){});
//# sourceMappingURL=scroll-animations.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/scroll-animations.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(e,n){if(!(e instanceof n))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,n){for(var t=0;t<n.length;t++){var i=n[t];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(n,t,i){return t&&e(n.prototype,t),i&&e(n,i),n}}(),DCFScrollAnimation=function(){function e(n,t,i){_classCallCheck(this,e),this.itemList=n,this.observerConfig=t,this.animationClassNames=i}return _createClass(e,[{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,n=function(n,t){0===e.itemsCount&&e.observer.disconnect(),n.forEach(function(n){n.intersectionRatio>=t.thresholds[0]&&n.intersectionRatio<t.thresholds[1]?e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return n.target.classList.add(e)}):n.intersectionRatio>t.thresholds[1]&&(e.itemsCount--,e.observer.unobserve(n.target))})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window&&(this.observer=new IntersectionObserver(n,this.observerConfig),this.itemList.forEach(function(n){e.observer.observe(n)})))}}]),e}();define(\"dcf-scrollAnimation\",function(){}),require([\"dcf-scrollAnimation\"],function(){var e=document.querySelectorAll(\".dcf-animate-on-scroll\");new DCFScrollAnimation(e,{rootMargin:\"0px\",threshold:[.5,1]},[\"dcf-animated\"]).initialize()}),define(\"scroll-animations\",function(){});
//# sourceMappingURL=scroll-animations.js.map", "wdn/templates_5.2/js/compressed/scroll-animations.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/scroll-animations.js");
    }
}
