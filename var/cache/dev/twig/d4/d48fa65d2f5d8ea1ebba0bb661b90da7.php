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

/* wdn/templates_5.0/js/compressed/utility-scripts/polyfillsAreLoaded.js */
class __TwigTemplate_76b4797d1610ab94bc04c24a52491fc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/utility-scripts/polyfillsAreLoaded.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/utility-scripts/polyfillsAreLoaded.js"));

        // line 1
        echo "function polyfillsAreLoaded(){(function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:\"\",e=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:\"\";return new Promise(function(t,d){var c=document.createElement(\"script\");c.onload=function(){t(n)},c.onerror=function(){d(n)},c.async=e,c.src=n,c.id=o,document.body.appendChild(c)})})(\"/wdn/templates_5.0/js/compressed/all.js?dep=\$DEP_VERSION\$\",!0,\"wdn_dependents\").catch(function(n){console.error(\"Failed at \"+n)})}
//# sourceMappingURL=polyfillsAreLoaded.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/utility-scripts/polyfillsAreLoaded.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function polyfillsAreLoaded(){(function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:\"\",e=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:\"\";return new Promise(function(t,d){var c=document.createElement(\"script\");c.onload=function(){t(n)},c.onerror=function(){d(n)},c.async=e,c.src=n,c.id=o,document.body.appendChild(c)})})(\"/wdn/templates_5.0/js/compressed/all.js?dep=\$DEP_VERSION\$\",!0,\"wdn_dependents\").catch(function(n){console.error(\"Failed at \"+n)})}
//# sourceMappingURL=polyfillsAreLoaded.js.map", "wdn/templates_5.0/js/compressed/utility-scripts/polyfillsAreLoaded.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/utility-scripts/polyfillsAreLoaded.js");
    }
}
