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

/* wdn/templates_4.1/scripts/compressed/images.js */
class __TwigTemplate_0669661d3194f3ddb3bf551b6d3c7e6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/images.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/images.js"));

        // line 1
        echo "define([\"jquery\"],function(t){\"use strict\";function e(e,i){t.ajax(e,{type:\"HEAD\",success:function(){i.setAttribute(\"src\",e)}})}function i(i){t(\".\"+a).each(function(){var t,n;(t=f.exec(this.getAttribute(\"src\")))&&(n=t[1].replace(s,\"\")+\"_\"+i+\".\"+t[2],e(n,this))})}function n(){var t;for(t=o.length-1;t>=0;t--)if(matchMedia(\"(min-width: \"+o[t]+\"px)\").matches)return o[t];return o[0]}var c,r,u=!1,a=\"wdn_image_swap\",o=[320,480,600,768,960,1040],f=/(.*)\\.(jpe?g|png|gif)\$/i,s=new RegExp(\"_(\"+o.join(\"|\")+\")\$\");return{initialize:function(){c=n(),c>o[0]&&t(function(){i(c)}),u||(u=!0,t(window).resize(function(){r&&clearTimeout(r),r=setTimeout(function(){var t=n();t>c&&(c=t,i(t))},500)}))}}});
//# sourceMappingURL=images.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/images.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"jquery\"],function(t){\"use strict\";function e(e,i){t.ajax(e,{type:\"HEAD\",success:function(){i.setAttribute(\"src\",e)}})}function i(i){t(\".\"+a).each(function(){var t,n;(t=f.exec(this.getAttribute(\"src\")))&&(n=t[1].replace(s,\"\")+\"_\"+i+\".\"+t[2],e(n,this))})}function n(){var t;for(t=o.length-1;t>=0;t--)if(matchMedia(\"(min-width: \"+o[t]+\"px)\").matches)return o[t];return o[0]}var c,r,u=!1,a=\"wdn_image_swap\",o=[320,480,600,768,960,1040],f=/(.*)\\.(jpe?g|png|gif)\$/i,s=new RegExp(\"_(\"+o.join(\"|\")+\")\$\");return{initialize:function(){c=n(),c>o[0]&&t(function(){i(c)}),u||(u=!0,t(window).resize(function(){r&&clearTimeout(r),r=setTimeout(function(){var t=n();t>c&&(c=t,i(t))},500)}))}}});
//# sourceMappingURL=images.js.map", "wdn/templates_4.1/scripts/compressed/images.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/images.js");
    }
}
