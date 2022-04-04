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

/* wdn/templates_5.0/js/compressed/mustard-initializer.js */
class __TwigTemplate_9035106ac3fa46bf5172bf46e0298ea9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/mustard-initializer.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/mustard-initializer.js"));

        // line 1
        echo "!function(){var t=document.createElement(\"script\");t.async=!1,t.src=\"https://polyfill.io/v3/polyfill.min.js?flags=gated&features=default%2CArray.prototype.map%2CArray.prototype.find%2CArray.prototype.filter%2CElement.prototype.matches\",document.body.appendChild(t)}(),require([\"require\"],function(){\"objectFit\"in document.body.style||require([\"mustard/ofi\"],function(){objectFitImages()}),require([\"utility-scripts/testForWebP\"],function(){})});
//# sourceMappingURL=mustard-initializer.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/mustard-initializer.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(){var t=document.createElement(\"script\");t.async=!1,t.src=\"https://polyfill.io/v3/polyfill.min.js?flags=gated&features=default%2CArray.prototype.map%2CArray.prototype.find%2CArray.prototype.filter%2CElement.prototype.matches\",document.body.appendChild(t)}(),require([\"require\"],function(){\"objectFit\"in document.body.style||require([\"mustard/ofi\"],function(){objectFitImages()}),require([\"utility-scripts/testForWebP\"],function(){})});
//# sourceMappingURL=mustard-initializer.js.map", "wdn/templates_5.0/js/compressed/mustard-initializer.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/mustard-initializer.js");
    }
}
