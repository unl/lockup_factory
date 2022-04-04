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

/* wdn/templates_5.1/js/compressed/dcf-utility.js */
class __TwigTemplate_db5a33326d74a5a13d2e815df8a60e8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-utility.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/dcf-utility.js"));

        // line 1
        echo "function _classCallCheck(e,n){if(!(e instanceof n))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,n){for(var t=0;t<n.length;t++){var o=n[t];o.enumerable=o.enumerable||!1,o.configurable=!0,\"value\"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(n,t,o){return t&&e(n.prototype,t),o&&e(n,o),n}}(),DCFUtility=function(){function e(){_classCallCheck(this,e)}return _createClass(e,null,[{key:\"magicNumbers\",value:function(e){var n={int0:0,int1:1,int2:2,int16:16,hex0x3:3,hex0x8:8,escCode:27,spaceKeyCode:32,arrowLeftCode:37,arrowUpCode:38,arrowRightCode:39,arrowDownCode:40};return Object.freeze(n),e in n?n[e]:void 0}},{key:\"uuidv4\",value:function(){var n=e.magicNumbers(\"int0\"),t=e.magicNumbers(\"int16\"),o=e.magicNumbers(\"hex0x3\"),a=e.magicNumbers(\"hex0x8\");return\"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx\".replace(/[xy]/g,function(e){var r=Math.random()*t|n;return(\"x\"===e?r:r&o|a).toString(t)})}},{key:\"testWebp\",value:function(n){var t=window.sessionStorage?window.sessionStorage.getItem(\"webpSupport\"):null;if(null!==t)return void n(\"true\"===t);var o=new Image;o.onload=o.onerror=function(){var t=o.height===e.magicNumbers(\"int2\");window.sessionStorage&&window.sessionStorage.setItem(\"webpSupport\",t),n(t)},o.src=\"data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA\"}},{key:\"flagSupportsWebP\",value:function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.documentElement;e.testWebp(function(e){e&&(n.classList.contains(\"dcf-no-webp\")&&n.classList.remove(\"dcf-no-webp\"),n.classList.add(\"dcf-webp\"))})}},{key:\"flagSupportsJavaScript\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.documentElement;e.classList.contains(\"dcf-no-js\")&&e.classList.remove(\"dcf-no-js\"),e.classList.add(\"dcf-js\")}}]),e}();
//# sourceMappingURL=dcf-utility.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/dcf-utility.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(e,n){if(!(e instanceof n))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function e(e,n){for(var t=0;t<n.length;t++){var o=n[t];o.enumerable=o.enumerable||!1,o.configurable=!0,\"value\"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(n,t,o){return t&&e(n.prototype,t),o&&e(n,o),n}}(),DCFUtility=function(){function e(){_classCallCheck(this,e)}return _createClass(e,null,[{key:\"magicNumbers\",value:function(e){var n={int0:0,int1:1,int2:2,int16:16,hex0x3:3,hex0x8:8,escCode:27,spaceKeyCode:32,arrowLeftCode:37,arrowUpCode:38,arrowRightCode:39,arrowDownCode:40};return Object.freeze(n),e in n?n[e]:void 0}},{key:\"uuidv4\",value:function(){var n=e.magicNumbers(\"int0\"),t=e.magicNumbers(\"int16\"),o=e.magicNumbers(\"hex0x3\"),a=e.magicNumbers(\"hex0x8\");return\"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx\".replace(/[xy]/g,function(e){var r=Math.random()*t|n;return(\"x\"===e?r:r&o|a).toString(t)})}},{key:\"testWebp\",value:function(n){var t=window.sessionStorage?window.sessionStorage.getItem(\"webpSupport\"):null;if(null!==t)return void n(\"true\"===t);var o=new Image;o.onload=o.onerror=function(){var t=o.height===e.magicNumbers(\"int2\");window.sessionStorage&&window.sessionStorage.setItem(\"webpSupport\",t),n(t)},o.src=\"data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA\"}},{key:\"flagSupportsWebP\",value:function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.documentElement;e.testWebp(function(e){e&&(n.classList.contains(\"dcf-no-webp\")&&n.classList.remove(\"dcf-no-webp\"),n.classList.add(\"dcf-webp\"))})}},{key:\"flagSupportsJavaScript\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.documentElement;e.classList.contains(\"dcf-no-js\")&&e.classList.remove(\"dcf-no-js\"),e.classList.add(\"dcf-js\")}}]),e}();
//# sourceMappingURL=dcf-utility.js.map", "wdn/templates_5.1/js/compressed/dcf-utility.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/dcf-utility.js");
    }
}
