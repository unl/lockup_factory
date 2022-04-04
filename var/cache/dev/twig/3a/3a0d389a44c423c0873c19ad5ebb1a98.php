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

/* wdn/templates_4.1/scripts/compressed/plugins/activebar/activebar2.js */
class __TwigTemplate_e7abdf9d5e10024937673f84cb032f95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/activebar/activebar2.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/activebar/activebar2.js"));

        // line 1
        echo "!function(n){\"function\"==typeof define&&define.amd?define([\"jquery\"],n):n(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(n){function t(t){var i=n(\"<div></div>\").attr(\"id\",\"activebar-container\");return i.css({display:\"none\",position:\"fixed\",zIndex:\"9999\",top:\"0px\",left:\"0px\",cursor:\"pointer\"}),n(window).bind(\"resize\",function(){i.width(n(this).width())}),n(window).trigger(\"resize\"),n(\"html\").hasClass(\"ie6\")&&(i.css(\"position\",\"absolute\"),n(window).scroll(function(){i.stop(!0,!0),3==n.fn.activebar.state?i.css(\"top\",n(window).scrollTop()+\"px\"):i.css(\"top\",n(window).scrollTop()-i.height()+\"px\")})),i.append(n(\"<div></div>\").attr(\"class\",\"icon\").css({float:\"left\",width:\"16px\",height:\"16px\",margin:\"6px 4px 4px 4px\"})),i.append(n(\"<div></div>\").attr(\"class\",\"close\").css({float:\"right\",margin:\"6px 4px 4px 4px\",width:\"16px\",height:\"16px\"}).click(function(t){n.fn.activebar.hide(),t.stopPropagation()})),i.append(n(\"<div></div>\").attr(\"class\",\"content\").css({margin:\"8px 28px 4px 28px\"})),n(\"body\").prepend(i),i}function i(t,i){t.css({background:i.background,borderBottom:\"1px solid \"+i.border}),t.unbind(\"mouseenter mouseleave\"),t.hover(function(){n(this).css(\"backgroundColor\",i.highlight)},function(){n(this).css(\"backgroundColor\",i.background)}),n(\".icon\",t).css(\"background\",\"transparent url( '\"+i.icon+\"' ) top left no-repeat\"),n(\".close\",t).css(\"background\",\"transparent url( '\"+i.button+\"' ) top left no-repeat\"),n(\".content\",t).css({color:i.fontColor,fontFamily:i.font,fontSize:i.fontSize,lineHeight:\"normal\"})}n.fn.activebar=function(a){var a=n.fn.extend({},n.fn.activebar.defaults,a);null==n.fn.activebar.container&&(n.fn.activebar.container=t(a)),i(n.fn.activebar.container,a),n.fn.activebar.hide(),n(\".content\",n.fn.activebar.container).empty(),n(this).each(function(){n(\".content\",n.fn.activebar.container).append(this)}),n.fn.activebar.container.unbind(\"click\"),null!=a.url&&n.fn.activebar.container.click(function(){window.location.href=a.url}),n.fn.activebar.container.css(\"top\",\"-\"+n.fn.activebar.container.height()+\"px\"),n.fn.activebar.show()},n.fn.activebar.defaults={background:\"InfoBackground\",border:\"#c8c8c8\",highlight:\"Highlight\",font:\"Bitstream Vera Sans,verdana,sans-serif\",fontColor:\"InfoText\",fontSize:\"12px\",icon:\"images/activebar-information.png\",button:\"images/activebar-closebtn.png\",url:null},n.fn.activebar.state=0,n.fn.activebar.container=null,n.fn.activebar.show=function(){if(!(n.fn.activebar.state>1)){n.fn.activebar.state=2,n.fn.activebar.container.css(\"display\",\"block\");var t=n.fn.activebar.container.height();n.fn.activebar.container.animate({top:\"+=\"+t+\"px\"},20*t,\"linear\",function(){n.fn.activebar.state=3})}},n.fn.activebar.hide=function(){if(!(n.fn.activebar.state<2)){n.fn.activebar.state=1;var t=n.fn.activebar.container.height();n.fn.activebar.container.animate({top:\"-=\"+t+\"px\"},20*t,\"linear\",function(){n.fn.activebar.container.css(\"display\",\"none\"),n.fn.activebar.visible=!1})}}});
//# sourceMappingURL=activebar2.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/activebar/activebar2.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(n){\"function\"==typeof define&&define.amd?define([\"jquery\"],n):n(\"object\"==typeof module&&module.exports?require(\"jquery\"):jQuery)}(function(n){function t(t){var i=n(\"<div></div>\").attr(\"id\",\"activebar-container\");return i.css({display:\"none\",position:\"fixed\",zIndex:\"9999\",top:\"0px\",left:\"0px\",cursor:\"pointer\"}),n(window).bind(\"resize\",function(){i.width(n(this).width())}),n(window).trigger(\"resize\"),n(\"html\").hasClass(\"ie6\")&&(i.css(\"position\",\"absolute\"),n(window).scroll(function(){i.stop(!0,!0),3==n.fn.activebar.state?i.css(\"top\",n(window).scrollTop()+\"px\"):i.css(\"top\",n(window).scrollTop()-i.height()+\"px\")})),i.append(n(\"<div></div>\").attr(\"class\",\"icon\").css({float:\"left\",width:\"16px\",height:\"16px\",margin:\"6px 4px 4px 4px\"})),i.append(n(\"<div></div>\").attr(\"class\",\"close\").css({float:\"right\",margin:\"6px 4px 4px 4px\",width:\"16px\",height:\"16px\"}).click(function(t){n.fn.activebar.hide(),t.stopPropagation()})),i.append(n(\"<div></div>\").attr(\"class\",\"content\").css({margin:\"8px 28px 4px 28px\"})),n(\"body\").prepend(i),i}function i(t,i){t.css({background:i.background,borderBottom:\"1px solid \"+i.border}),t.unbind(\"mouseenter mouseleave\"),t.hover(function(){n(this).css(\"backgroundColor\",i.highlight)},function(){n(this).css(\"backgroundColor\",i.background)}),n(\".icon\",t).css(\"background\",\"transparent url( '\"+i.icon+\"' ) top left no-repeat\"),n(\".close\",t).css(\"background\",\"transparent url( '\"+i.button+\"' ) top left no-repeat\"),n(\".content\",t).css({color:i.fontColor,fontFamily:i.font,fontSize:i.fontSize,lineHeight:\"normal\"})}n.fn.activebar=function(a){var a=n.fn.extend({},n.fn.activebar.defaults,a);null==n.fn.activebar.container&&(n.fn.activebar.container=t(a)),i(n.fn.activebar.container,a),n.fn.activebar.hide(),n(\".content\",n.fn.activebar.container).empty(),n(this).each(function(){n(\".content\",n.fn.activebar.container).append(this)}),n.fn.activebar.container.unbind(\"click\"),null!=a.url&&n.fn.activebar.container.click(function(){window.location.href=a.url}),n.fn.activebar.container.css(\"top\",\"-\"+n.fn.activebar.container.height()+\"px\"),n.fn.activebar.show()},n.fn.activebar.defaults={background:\"InfoBackground\",border:\"#c8c8c8\",highlight:\"Highlight\",font:\"Bitstream Vera Sans,verdana,sans-serif\",fontColor:\"InfoText\",fontSize:\"12px\",icon:\"images/activebar-information.png\",button:\"images/activebar-closebtn.png\",url:null},n.fn.activebar.state=0,n.fn.activebar.container=null,n.fn.activebar.show=function(){if(!(n.fn.activebar.state>1)){n.fn.activebar.state=2,n.fn.activebar.container.css(\"display\",\"block\");var t=n.fn.activebar.container.height();n.fn.activebar.container.animate({top:\"+=\"+t+\"px\"},20*t,\"linear\",function(){n.fn.activebar.state=3})}},n.fn.activebar.hide=function(){if(!(n.fn.activebar.state<2)){n.fn.activebar.state=1;var t=n.fn.activebar.container.height();n.fn.activebar.container.animate({top:\"-=\"+t+\"px\"},20*t,\"linear\",function(){n.fn.activebar.container.css(\"display\",\"none\"),n.fn.activebar.visible=!1})}}});
//# sourceMappingURL=activebar2.js.map", "wdn/templates_4.1/scripts/compressed/plugins/activebar/activebar2.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/activebar/activebar2.js");
    }
}
