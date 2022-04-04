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

/* wdn/templates_5.2/js/compressed/hover_intent.js */
class __TwigTemplate_0621da478ea733f3f6dfc6449be955e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/hover_intent.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/hover_intent.js"));

        // line 1
        echo "function _possibleConstructorReturn(e,t){if(!e)throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\");return!t||\"object\"!=typeof t&&\"function\"!=typeof t?e:t}function _inherits(e,t){if(\"function\"!=typeof t&&null!==t)throw new TypeError(\"Super expression must either be null or a function, not \"+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}();require([\"plugins/hoverIntent/hoverintent\"],function(){function e(){this.previousElementSibling.setAttribute(\"aria-expanded\",!0)}function t(){this.previousElementSibling.removeAttribute(\"aria-expanded\")}var n=function e(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};_classCallCheck(this,e),this.el=t,this.options=n};new(function(e){function t(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:\"\",o=arguments[3],r=arguments[4];_classCallCheck(this,t);var a=_possibleConstructorReturn(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e,n));return a.isMobile=!0,a.handleMediaChanges=function(e){e.matches?(a.isMobile=!1,a.addListener()):(a.isMobile=!0,a.removeListener())},a.handleIn=o,a.handleOut=r,a.mq=i,a}return _inherits(t,e),_createClass(t,[{key:\"addListener\",value:function(){this.hoverListener=hoverintent(this.el,this.handleIn,this.handleOut).options(this.options)}},{key:\"removeListener\",value:function(){this.hoverListener&&this.hoverListener.remove()}},{key:\"onWidthChange\",value:function(){window.matchMedia(this.mq).addListener(this.handleMediaChanges)}},{key:\"initialize\",value:function(){var e=window.matchMedia(this.mq);this.handleMediaChanges(e),this.onWidthChange()}}]),t}(n))(document.querySelector(\".dcf-nav-local\"),void 0,\"screen and (min-width: 56.123125em)\",e,t).initialize()});
//# sourceMappingURL=hover_intent.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/hover_intent.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _possibleConstructorReturn(e,t){if(!e)throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\");return!t||\"object\"!=typeof t&&\"function\"!=typeof t?e:t}function _inherits(e,t){if(\"function\"!=typeof t&&null!==t)throw new TypeError(\"Super expression must either be null or a function, not \"+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}();require([\"plugins/hoverIntent/hoverintent\"],function(){function e(){this.previousElementSibling.setAttribute(\"aria-expanded\",!0)}function t(){this.previousElementSibling.removeAttribute(\"aria-expanded\")}var n=function e(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};_classCallCheck(this,e),this.el=t,this.options=n};new(function(e){function t(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:\"\",o=arguments[3],r=arguments[4];_classCallCheck(this,t);var a=_possibleConstructorReturn(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e,n));return a.isMobile=!0,a.handleMediaChanges=function(e){e.matches?(a.isMobile=!1,a.addListener()):(a.isMobile=!0,a.removeListener())},a.handleIn=o,a.handleOut=r,a.mq=i,a}return _inherits(t,e),_createClass(t,[{key:\"addListener\",value:function(){this.hoverListener=hoverintent(this.el,this.handleIn,this.handleOut).options(this.options)}},{key:\"removeListener\",value:function(){this.hoverListener&&this.hoverListener.remove()}},{key:\"onWidthChange\",value:function(){window.matchMedia(this.mq).addListener(this.handleMediaChanges)}},{key:\"initialize\",value:function(){var e=window.matchMedia(this.mq);this.handleMediaChanges(e),this.onWidthChange()}}]),t}(n))(document.querySelector(\".dcf-nav-local\"),void 0,\"screen and (min-width: 56.123125em)\",e,t).initialize()});
//# sourceMappingURL=hover_intent.js.map", "wdn/templates_5.2/js/compressed/hover_intent.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/hover_intent.js");
    }
}
