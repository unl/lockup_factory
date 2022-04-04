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

/* wdn/templates_4.1/scripts/compressed/smallcaps.js */
class __TwigTemplate_5850505073f9c43f1ac5eb4fd625ae32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/smallcaps.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/smallcaps.js"));

        // line 1
        echo "define(\"require-css/css!js-css/smallcaps\",[],function(){}),define(\"smallcaps\",[\"jquery\",\"css!js-css/smallcaps\"],function(e,s,t){var a=!1;return{initialize:function(){if(!a){a=!0;var s=e(\"<link>\",{rel:\"stylesheet\",href:\"https://cloud.typography.com/7717652/679648/css/fonts.css\"});e(\"head\").append(s)}}}}),function(e){var s=document,t=\"appendChild\",a=\"styleSheet\",l=s.createElement(\"style\");l.type=\"text/css\",s.getElementsByTagName(\"head\")[0][t](l),l[a]?l[a].cssText=e:l[t](s.createTextNode(e))}(\".wdn-smallcaps{font-family:'Mercury SSm Small Caps A','Mercury SSm Small Caps B',Georgia,serif;font-weight:400;font-style:normal}\");
//# sourceMappingURL=smallcaps.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/smallcaps.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(\"require-css/css!js-css/smallcaps\",[],function(){}),define(\"smallcaps\",[\"jquery\",\"css!js-css/smallcaps\"],function(e,s,t){var a=!1;return{initialize:function(){if(!a){a=!0;var s=e(\"<link>\",{rel:\"stylesheet\",href:\"https://cloud.typography.com/7717652/679648/css/fonts.css\"});e(\"head\").append(s)}}}}),function(e){var s=document,t=\"appendChild\",a=\"styleSheet\",l=s.createElement(\"style\");l.type=\"text/css\",s.getElementsByTagName(\"head\")[0][t](l),l[a]?l[a].cssText=e:l[t](s.createTextNode(e))}(\".wdn-smallcaps{font-family:'Mercury SSm Small Caps A','Mercury SSm Small Caps B',Georgia,serif;font-weight:400;font-style:normal}\");
//# sourceMappingURL=smallcaps.js.map", "wdn/templates_4.1/scripts/compressed/smallcaps.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/smallcaps.js");
    }
}
