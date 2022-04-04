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

/* wdn/templates_5.2/js/compressed/font-serif.js */
class __TwigTemplate_526be64d6c42d0cc2e3204d97dd6eb6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/font-serif.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/font-serif.js"));

        // line 1
        echo "define(\"require-css/css!js-css/font-serif\",[],function(){}),define(\"font-serif\",[\"css!js-css/font-serif\"],function(e,t){var s=!1;return{initialize:function(){if(!s){s=!0;const e=document.createElement(\"link\");e.rel=\"stylesheet\",e.href=\"https://cloud.typography.com/7717652/7706412/css/fonts.css\",document.head.appendChild(e)}}}}),function(e){var t=document,s=\"appendChild\",n=\"styleSheet\",c=t.createElement(\"style\");c.type=\"text/css\",t.getElementsByTagName(\"head\")[0][s](c),c[n]?c[n].cssText=e:c[s](t.createTextNode(e))}(\".unl-font-serif{font-family:Mercury SSm A,Mercury SSm B,Georgia,serif!important}\");
//# sourceMappingURL=font-serif.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/font-serif.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(\"require-css/css!js-css/font-serif\",[],function(){}),define(\"font-serif\",[\"css!js-css/font-serif\"],function(e,t){var s=!1;return{initialize:function(){if(!s){s=!0;const e=document.createElement(\"link\");e.rel=\"stylesheet\",e.href=\"https://cloud.typography.com/7717652/7706412/css/fonts.css\",document.head.appendChild(e)}}}}),function(e){var t=document,s=\"appendChild\",n=\"styleSheet\",c=t.createElement(\"style\");c.type=\"text/css\",t.getElementsByTagName(\"head\")[0][s](c),c[n]?c[n].cssText=e:c[s](t.createTextNode(e))}(\".unl-font-serif{font-family:Mercury SSm A,Mercury SSm B,Georgia,serif!important}\");
//# sourceMappingURL=font-serif.js.map", "wdn/templates_5.2/js/compressed/font-serif.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/font-serif.js");
    }
}
