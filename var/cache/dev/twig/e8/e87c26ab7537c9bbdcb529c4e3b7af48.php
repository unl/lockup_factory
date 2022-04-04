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

/* wdn/templates_5.1/js/compressed/band_imagery.js */
class __TwigTemplate_b7306d813f60559b1be9805ba6210a2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/band_imagery.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/band_imagery.js"));

        // line 1
        echo "define(\"require-css/css!js-css/band_imagery\",[],function(){}),define(\"band_imagery\",[\"wdn\",\"jquery\",\"css!js-css/band_imagery\"],function(t,e){var a=!1,o=function(){var t=Math.floor(e(window).scrollTop());e(\".wdn-scroll-watch\").each(function(a,o){var l=e(this);if(l.attr(\"data-lerp\"))for(var c=l.attr(\"data-lerp\").split(\" \"),f=0;f<c.length;f++){var p=c[f],u=l.attr(\"data-lerp-\"+p+\"-start\"),h=l.attr(\"data-lerp-\"+p+\"-end\"),w=e(u).offset(),m=e(h).offset(),v=d(w,m,t);\"scale\"==p&&n(l,v),\"opacity\"==p&&r(l,v),\"flipbook\"==p&&i(l,v)}l.hasClass(\"locked\")&&s(l,t)})},s=function(t,a){var o=t.parent(),s=o.offset().top,n=o.height(),r=e(window).height();if(a<s)t.removeClass(\"fixed bottom\");else if(a>=s&&a+r<n+s)t.css(\"top\",\"0\"),t.addClass(\"fixed\").removeClass(\"bottom\");else if(t.removeClass(\"fixed\"),r<t.height())t.addClass(\"bottom\"),t.css(\"top\",\"auto\");else{var i=n-r;t.css(\"top\",i+\"px\")}},n=function(t,e){var a=t.attr(\"data-scale-start\"),o=t.attr(\"data-scale-end\"),s=o-a,n=parseFloat(a)+e*s;t.css(\"transform\",\"scale(\"+n+\")\")},r=function(t,e){var a=t.attr(\"data-opacity-start\"),o=t.attr(\"data-opacity-end\"),s=o-a,n=parseFloat(a)+e*s;t.css(\"opacity\",n)},i=function(t,e){var a=0,o=t.children(\"figure\");e>0&&e<1?a=Math.ceil(o.length*e)-1:e&&(a=-1);var s=o.eq(a);return s.show().end().not(s).hide(),s},d=function(t,e,a){return a>t.top&&a<e.top?(a-t.top)/(e.top-t.top):a>e.top?1:0};return{initialize:function(){e(\".wdn-scroll-watch\").parent().css(\"position\",\"relative\"),o(),a||(e(window).on(\"load\",o).scroll(function(){setTimeout(o,50)}),a=!0)}}}),function(t){var e=document,a=\"appendChild\",o=\"styleSheet\",s=e.createElement(\"style\");s.type=\"text/css\",e.getElementsByTagName(\"head\")[0][a](s),s[o]?s[o].cssText=t:s[a](e.createTextNode(t))}(\".wdn-band .wdn-scroll-watch.locked{bottom:auto;left:0;position:absolute;top:0;z-index:0}.wdn-band .wdn-scroll-watch.locked.fixed{position:fixed;bottom:0;top:auto}.wdn-band .wdn-scroll{position:relative;z-index:0}\\n\");
//# sourceMappingURL=band_imagery.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/band_imagery.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(\"require-css/css!js-css/band_imagery\",[],function(){}),define(\"band_imagery\",[\"wdn\",\"jquery\",\"css!js-css/band_imagery\"],function(t,e){var a=!1,o=function(){var t=Math.floor(e(window).scrollTop());e(\".wdn-scroll-watch\").each(function(a,o){var l=e(this);if(l.attr(\"data-lerp\"))for(var c=l.attr(\"data-lerp\").split(\" \"),f=0;f<c.length;f++){var p=c[f],u=l.attr(\"data-lerp-\"+p+\"-start\"),h=l.attr(\"data-lerp-\"+p+\"-end\"),w=e(u).offset(),m=e(h).offset(),v=d(w,m,t);\"scale\"==p&&n(l,v),\"opacity\"==p&&r(l,v),\"flipbook\"==p&&i(l,v)}l.hasClass(\"locked\")&&s(l,t)})},s=function(t,a){var o=t.parent(),s=o.offset().top,n=o.height(),r=e(window).height();if(a<s)t.removeClass(\"fixed bottom\");else if(a>=s&&a+r<n+s)t.css(\"top\",\"0\"),t.addClass(\"fixed\").removeClass(\"bottom\");else if(t.removeClass(\"fixed\"),r<t.height())t.addClass(\"bottom\"),t.css(\"top\",\"auto\");else{var i=n-r;t.css(\"top\",i+\"px\")}},n=function(t,e){var a=t.attr(\"data-scale-start\"),o=t.attr(\"data-scale-end\"),s=o-a,n=parseFloat(a)+e*s;t.css(\"transform\",\"scale(\"+n+\")\")},r=function(t,e){var a=t.attr(\"data-opacity-start\"),o=t.attr(\"data-opacity-end\"),s=o-a,n=parseFloat(a)+e*s;t.css(\"opacity\",n)},i=function(t,e){var a=0,o=t.children(\"figure\");e>0&&e<1?a=Math.ceil(o.length*e)-1:e&&(a=-1);var s=o.eq(a);return s.show().end().not(s).hide(),s},d=function(t,e,a){return a>t.top&&a<e.top?(a-t.top)/(e.top-t.top):a>e.top?1:0};return{initialize:function(){e(\".wdn-scroll-watch\").parent().css(\"position\",\"relative\"),o(),a||(e(window).on(\"load\",o).scroll(function(){setTimeout(o,50)}),a=!0)}}}),function(t){var e=document,a=\"appendChild\",o=\"styleSheet\",s=e.createElement(\"style\");s.type=\"text/css\",e.getElementsByTagName(\"head\")[0][a](s),s[o]?s[o].cssText=t:s[a](e.createTextNode(t))}(\".wdn-band .wdn-scroll-watch.locked{bottom:auto;left:0;position:absolute;top:0;z-index:0}.wdn-band .wdn-scroll-watch.locked.fixed{position:fixed;bottom:0;top:auto}.wdn-band .wdn-scroll{position:relative;z-index:0}\\n\");
//# sourceMappingURL=band_imagery.js.map", "wdn/templates_5.1/js/compressed/band_imagery.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/band_imagery.js");
    }
}
