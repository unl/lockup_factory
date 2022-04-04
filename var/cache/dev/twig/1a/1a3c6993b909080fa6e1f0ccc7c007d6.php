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

/* wdn/templates_4.1/scripts/compressed/load-deferred-css.js.src.js */
class __TwigTemplate_71ae57d228aa0639b1e30bb0fbf15004 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/load-deferred-css.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/load-deferred-css.js.src.js"));

        // line 1
        echo "(function() {
    var WDNRemoveCriticalStyles = function() {
        document.getElementById('wdn-critical-styles').remove();
    };

    var deferredStyles = loadCSS('https://unlcms.unl.edu/wdn/templates_4.1/css/all.css?dep=\$DEP_VERSION\$');
    onloadCSS(deferredStyles, function() {
        WDNRemoveCriticalStyles();
    });

})();
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/load-deferred-css.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(function() {
    var WDNRemoveCriticalStyles = function() {
        document.getElementById('wdn-critical-styles').remove();
    };

    var deferredStyles = loadCSS('https://unlcms.unl.edu/wdn/templates_4.1/css/all.css?dep=\$DEP_VERSION\$');
    onloadCSS(deferredStyles, function() {
        WDNRemoveCriticalStyles();
    });

})();
", "wdn/templates_4.1/scripts/compressed/load-deferred-css.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/load-deferred-css.js.src.js");
    }
}
