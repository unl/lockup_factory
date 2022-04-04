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

/* wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js */
class __TwigTemplate_023cf18a0a18e3db7b9a6ce09555b127 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js"));

        // line 1
        echo "define([\"exports\"],function(e){\"use strict\";function t(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function n(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function i(e,t,i){return t&&n(e.prototype,t),i&&n(e,i),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFScrollAnimation=void 0;var o=function(){function e(n,i,o){t(this,e),this.itemList=n,this.observerConfig=i,this.animationClassNames=o}return i(e,[{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,n){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){t.intersectionRatio>=n.thresholds[0]&&t.intersectionRatio<n.thresholds[1]?e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return t.target.classList.add(e)}):t.intersectionRatio>n.thresholds[1]&&(e.itemsCount--,e.observer.unobserve(t.target))})},n=function(t){t.forEach(function(t){t.intersectionRatio>0&&e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return t.target.classList.add(e)}),e.loadObserver.unobserve(t.target)})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window&&(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){e.observer.observe(t)}),window.addEventListener(\"load\",function(){e.loadObserver=new IntersectionObserver(n),e.itemList.forEach(function(t){e.loadObserver.observe(t)})})))}}]),e}();e.DCFScrollAnimation=o});
//# sourceMappingURL=dcf-scrollAnimation.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"exports\"],function(e){\"use strict\";function t(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function n(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function i(e,t,i){return t&&n(e.prototype,t),i&&n(e,i),Object.defineProperty(e,\"prototype\",{writable:!1}),e}Object.defineProperty(e,\"__esModule\",{value:!0}),e.DCFScrollAnimation=void 0;var o=function(){function e(n,i,o){t(this,e),this.itemList=n,this.observerConfig=i,this.animationClassNames=o}return i(e,[{key:\"disconnect\",value:function(){this.observer&&this.observer.disconnect()}},{key:\"initialize\",value:function(){var e=this,t=function(t,n){0===e.itemsCount&&e.observer.disconnect(),t.forEach(function(t){t.intersectionRatio>=n.thresholds[0]&&t.intersectionRatio<n.thresholds[1]?e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return t.target.classList.add(e)}):t.intersectionRatio>n.thresholds[1]&&(e.itemsCount--,e.observer.unobserve(t.target))})},n=function(t){t.forEach(function(t){t.intersectionRatio>0&&e.animationClassNames.length&&e.animationClassNames.forEach(function(e){return t.target.classList.add(e)}),e.loadObserver.unobserve(t.target)})};this.itemList&&(this.itemsCount=this.itemList.length,\"IntersectionObserver\"in window&&(this.observer=new IntersectionObserver(t,this.observerConfig),this.itemList.forEach(function(t){e.observer.observe(t)}),window.addEventListener(\"load\",function(){e.loadObserver=new IntersectionObserver(n),e.itemList.forEach(function(t){e.loadObserver.observe(t)})})))}}]),e}();e.DCFScrollAnimation=o});
//# sourceMappingURL=dcf-scrollAnimation.js.map", "wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/dcf-scrollAnimation.js");
    }
}
