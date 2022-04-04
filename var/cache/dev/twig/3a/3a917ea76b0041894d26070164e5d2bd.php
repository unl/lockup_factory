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

/* wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js */
class __TwigTemplate_7aefe98f699f1e65c2860a68e5cc9e97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js"));

        // line 1
        echo "function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),DCFScrollAnimation=function(){function e(t,n,i){_classCallCheck(this,e),this.itemList=t,this.observerConfig=n,this.animationClassNames=i}return _createClass(e,[{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,n){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){t.intersectionRatio>=n.thresholds[0]&&t.intersectionRatio<n.thresholds[1]?e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return t.target.classList.add(e)}):t.intersectionRatio>n.thresholds[1]&&(e.itemsCount--,e.observer.unobserve(t.target))})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window&&(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){e.observer.observe(t)})))}}]),e}();
//# sourceMappingURL=dcf-scrollAnimation.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),DCFScrollAnimation=function(){function e(t,n,i){_classCallCheck(this,e),this.itemList=t,this.observerConfig=n,this.animationClassNames=i}return _createClass(e,[{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,n){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){t.intersectionRatio>=n.thresholds[0]&&t.intersectionRatio<n.thresholds[1]?e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return t.target.classList.add(e)}):t.intersectionRatio>n.thresholds[1]&&(e.itemsCount--,e.observer.unobserve(t.target))})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window&&(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){e.observer.observe(t)})))}}]),e}();
//# sourceMappingURL=dcf-scrollAnimation.js.map", "wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/dcf-scrollAnimation.js");
    }
}
