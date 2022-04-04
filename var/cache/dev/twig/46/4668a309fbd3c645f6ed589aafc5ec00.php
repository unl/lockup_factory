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

/* wdn/templates_5.3/js/compressed/hover_intent.js */
class __TwigTemplate_1d0b217482a8318e9374a7ee5499d94d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/hover_intent.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/hover_intent.js"));

        // line 1
        echo "function _typeof(e){\"@babel/helpers - typeof\";return(_typeof=\"function\"==typeof Symbol&&\"symbol\"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&\"function\"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?\"symbol\":typeof e})(e)}function _inherits(e,t){if(\"function\"!=typeof t&&null!==t)throw new TypeError(\"Super expression must either be null or a function\");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,\"prototype\",{writable:!1}),t&&_setPrototypeOf(e,t)}function _setPrototypeOf(e,t){return(_setPrototypeOf=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function _createSuper(e){var t=_isNativeReflectConstruct();return function(){var n,r=_getPrototypeOf(e);if(t){var i=_getPrototypeOf(this).constructor;n=Reflect.construct(r,arguments,i)}else n=r.apply(this,arguments);return _possibleConstructorReturn(this,n)}}function _possibleConstructorReturn(e,t){if(t&&(\"object\"===_typeof(t)||\"function\"==typeof t))return t;if(void 0!==t)throw new TypeError(\"Derived constructors may only return object or undefined\");return _assertThisInitialized(e)}function _assertThisInitialized(e){if(void 0===e)throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\");return e}function _isNativeReflectConstruct(){if(\"undefined\"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if(\"function\"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],function(){})),!0}catch(e){return!1}}function _getPrototypeOf(e){return(_getPrototypeOf=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function _defineProperty(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function _defineProperties(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function _createClass(e,t,n){return t&&_defineProperties(e.prototype,t),n&&_defineProperties(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}require([\"plugins/hoverIntent/hoverintent\"],function(){function e(){this.previousElementSibling.setAttribute(\"aria-expanded\",!0)}function t(){this.previousElementSibling.removeAttribute(\"aria-expanded\")}var n=_createClass(function e(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};_classCallCheck(this,e),this.el=t,this.options=n});new(function(e){function t(e){var r,i=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:\"\",s=arguments.length>3?arguments[3]:void 0,a=arguments.length>4?arguments[4]:void 0;return _classCallCheck(this,t),r=n.call(this,e,i),_defineProperty(_assertThisInitialized(r),\"hoverListener\",void 0),_defineProperty(_assertThisInitialized(r),\"isMobile\",!0),_defineProperty(_assertThisInitialized(r),\"handleMediaChanges\",function(e){e.matches?(r.isMobile=!1,r.addListener()):(r.isMobile=!0,r.removeListener())}),r.handleIn=s,r.handleOut=a,r.mq=o,r}_inherits(t,e);var n=_createSuper(t);return _createClass(t,[{key:\"addListener\",value:function(){this.hoverListener=hoverintent(this.el,this.handleIn,this.handleOut).options(this.options)}},{key:\"removeListener\",value:function(){this.hoverListener&&this.hoverListener.remove()}},{key:\"onWidthChange\",value:function(){window.matchMedia(this.mq).addListener(this.handleMediaChanges)}},{key:\"initialize\",value:function(){var e=window.matchMedia(this.mq);this.handleMediaChanges(e),this.onWidthChange()}}]),t}(n))(document.querySelector(\".dcf-nav-local\"),void 0,\"screen and (min-width: 56.123125em)\",e,t).initialize()});
//# sourceMappingURL=hover_intent.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/hover_intent.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _typeof(e){\"@babel/helpers - typeof\";return(_typeof=\"function\"==typeof Symbol&&\"symbol\"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&\"function\"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?\"symbol\":typeof e})(e)}function _inherits(e,t){if(\"function\"!=typeof t&&null!==t)throw new TypeError(\"Super expression must either be null or a function\");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,\"prototype\",{writable:!1}),t&&_setPrototypeOf(e,t)}function _setPrototypeOf(e,t){return(_setPrototypeOf=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function _createSuper(e){var t=_isNativeReflectConstruct();return function(){var n,r=_getPrototypeOf(e);if(t){var i=_getPrototypeOf(this).constructor;n=Reflect.construct(r,arguments,i)}else n=r.apply(this,arguments);return _possibleConstructorReturn(this,n)}}function _possibleConstructorReturn(e,t){if(t&&(\"object\"===_typeof(t)||\"function\"==typeof t))return t;if(void 0!==t)throw new TypeError(\"Derived constructors may only return object or undefined\");return _assertThisInitialized(e)}function _assertThisInitialized(e){if(void 0===e)throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\");return e}function _isNativeReflectConstruct(){if(\"undefined\"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if(\"function\"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],function(){})),!0}catch(e){return!1}}function _getPrototypeOf(e){return(_getPrototypeOf=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function _defineProperty(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function _defineProperties(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function _createClass(e,t,n){return t&&_defineProperties(e.prototype,t),n&&_defineProperties(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}require([\"plugins/hoverIntent/hoverintent\"],function(){function e(){this.previousElementSibling.setAttribute(\"aria-expanded\",!0)}function t(){this.previousElementSibling.removeAttribute(\"aria-expanded\")}var n=_createClass(function e(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};_classCallCheck(this,e),this.el=t,this.options=n});new(function(e){function t(e){var r,i=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:\"\",s=arguments.length>3?arguments[3]:void 0,a=arguments.length>4?arguments[4]:void 0;return _classCallCheck(this,t),r=n.call(this,e,i),_defineProperty(_assertThisInitialized(r),\"hoverListener\",void 0),_defineProperty(_assertThisInitialized(r),\"isMobile\",!0),_defineProperty(_assertThisInitialized(r),\"handleMediaChanges\",function(e){e.matches?(r.isMobile=!1,r.addListener()):(r.isMobile=!0,r.removeListener())}),r.handleIn=s,r.handleOut=a,r.mq=o,r}_inherits(t,e);var n=_createSuper(t);return _createClass(t,[{key:\"addListener\",value:function(){this.hoverListener=hoverintent(this.el,this.handleIn,this.handleOut).options(this.options)}},{key:\"removeListener\",value:function(){this.hoverListener&&this.hoverListener.remove()}},{key:\"onWidthChange\",value:function(){window.matchMedia(this.mq).addListener(this.handleMediaChanges)}},{key:\"initialize\",value:function(){var e=window.matchMedia(this.mq);this.handleMediaChanges(e),this.onWidthChange()}}]),t}(n))(document.querySelector(\".dcf-nav-local\"),void 0,\"screen and (min-width: 56.123125em)\",e,t).initialize()});
//# sourceMappingURL=hover_intent.js.map", "wdn/templates_5.3/js/compressed/hover_intent.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/hover_intent.js");
    }
}
