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

/* wdn/templates_4.1/scripts/compressed/display-font.js */
class __TwigTemplate_9ba016ee2e2f7202c6b7aa55c3e87468 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/display-font.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/display-font.js"));

        // line 1
        echo "define(\"require-css/css!js-css/display-font\",[],function(){}),define(\"display-font\",[\"jquery\",\"css!js-css/display-font\"],function(e,t,s){var n=!1;return{initialize:function(){if(!n){n=!0;var t=e(\"<link>\",{rel:\"stylesheet\",href:\"https://cloud.typography.com/7717652/7503352/css/fonts.css\"});e(\"head\").append(t)}}}}),function(e){var t=document,s=\"appendChild\",n=\"styleSheet\",i=t.createElement(\"style\");i.type=\"text/css\",t.getElementsByTagName(\"head\")[0][s](i),i[n]?i[n].cssText=e:i[s](t.createTextNode(e))}(\".wdn-display-font{font-family:'Mercury Display A','Mercury Display B',Georgia,serif;font-weight:400;font-style:normal;font-feature-settings:'kern' 1,'liga' 1}\");
//# sourceMappingURL=display-font.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/display-font.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(\"require-css/css!js-css/display-font\",[],function(){}),define(\"display-font\",[\"jquery\",\"css!js-css/display-font\"],function(e,t,s){var n=!1;return{initialize:function(){if(!n){n=!0;var t=e(\"<link>\",{rel:\"stylesheet\",href:\"https://cloud.typography.com/7717652/7503352/css/fonts.css\"});e(\"head\").append(t)}}}}),function(e){var t=document,s=\"appendChild\",n=\"styleSheet\",i=t.createElement(\"style\");i.type=\"text/css\",t.getElementsByTagName(\"head\")[0][s](i),i[n]?i[n].cssText=e:i[s](t.createTextNode(e))}(\".wdn-display-font{font-family:'Mercury Display A','Mercury Display B',Georgia,serif;font-weight:400;font-style:normal;font-feature-settings:'kern' 1,'liga' 1}\");
//# sourceMappingURL=display-font.js.map", "wdn/templates_4.1/scripts/compressed/display-font.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/display-font.js");
    }
}
