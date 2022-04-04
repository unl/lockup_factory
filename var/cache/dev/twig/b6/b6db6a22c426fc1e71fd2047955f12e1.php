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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/monthSelect/monthSelect.js */
class __TwigTemplate_7487af3d1619066f08d2758dcc3c4209 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/monthSelect/monthSelect.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/monthSelect/monthSelect.js"));

        // line 1
        echo "!function(t,e){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=e():\"function\"==typeof define&&define.amd?define(e):t.monthSelect=e()}(this,function(){\"use strict\";function t(){return function(t){function e(e){if(e.target&&e.target.classList.contains(\"flatpickr-day\")){var n=Array.prototype.indexOf.call(o,e.target);t.monthStartDay=new Date(o[n].dateObj.getFullYear(),o[n].dateObj.getMonth(),1,0,0,0,0).getTime(),t.monthEndDay=new Date(o[n].dateObj.getFullYear(),o[n].dateObj.getMonth()+1,0,0,0,0,0).getTime();for(var a=o.length;a--;){var s=o[a].dateObj.getTime();s>t.monthEndDay||s<t.monthStartDay?o[a].classList.remove(\"inRange\"):o[a].classList.add(\"inRange\"),s!=t.monthEndDay?o[a].classList.remove(\"endRange\"):o[a].classList.add(\"endRange\"),s!=t.monthStartDay?o[a].classList.remove(\"startRange\"):o[a].classList.add(\"startRange\")}}}function n(){for(var e=o.length;e--;){var n=o[e].dateObj.getTime();n>=t.monthStartDay&&n<=t.monthEndDay&&o[e].classList.add(\"month\",\"selected\"),n!=t.monthEndDay?o[e].classList.remove(\"endRange\"):o[e].classList.add(\"endRange\"),n!=t.monthStartDay?o[e].classList.remove(\"startRange\"):o[e].classList.add(\"startRange\")}}function a(){for(var t=o.length;t--;)o[t].classList.remove(\"inRange\")}var o;return{onChange:n,onMonthChange:n,onClose:a,onParseConfig:function(){t.config.mode=\"single\",t.config.enableTime=!1},onReady:[function(){o=t.days.childNodes},function(){return t.days.addEventListener(\"mouseover\",e)},n]}}}return t});
//# sourceMappingURL=monthSelect.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/monthSelect/monthSelect.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(t,e){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=e():\"function\"==typeof define&&define.amd?define(e):t.monthSelect=e()}(this,function(){\"use strict\";function t(){return function(t){function e(e){if(e.target&&e.target.classList.contains(\"flatpickr-day\")){var n=Array.prototype.indexOf.call(o,e.target);t.monthStartDay=new Date(o[n].dateObj.getFullYear(),o[n].dateObj.getMonth(),1,0,0,0,0).getTime(),t.monthEndDay=new Date(o[n].dateObj.getFullYear(),o[n].dateObj.getMonth()+1,0,0,0,0,0).getTime();for(var a=o.length;a--;){var s=o[a].dateObj.getTime();s>t.monthEndDay||s<t.monthStartDay?o[a].classList.remove(\"inRange\"):o[a].classList.add(\"inRange\"),s!=t.monthEndDay?o[a].classList.remove(\"endRange\"):o[a].classList.add(\"endRange\"),s!=t.monthStartDay?o[a].classList.remove(\"startRange\"):o[a].classList.add(\"startRange\")}}}function n(){for(var e=o.length;e--;){var n=o[e].dateObj.getTime();n>=t.monthStartDay&&n<=t.monthEndDay&&o[e].classList.add(\"month\",\"selected\"),n!=t.monthEndDay?o[e].classList.remove(\"endRange\"):o[e].classList.add(\"endRange\"),n!=t.monthStartDay?o[e].classList.remove(\"startRange\"):o[e].classList.add(\"startRange\")}}function a(){for(var t=o.length;t--;)o[t].classList.remove(\"inRange\")}var o;return{onChange:n,onMonthChange:n,onClose:a,onParseConfig:function(){t.config.mode=\"single\",t.config.enableTime=!1},onReady:[function(){o=t.days.childNodes},function(){return t.days.addEventListener(\"mouseover\",e)},n]}}}return t});
//# sourceMappingURL=monthSelect.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/monthSelect/monthSelect.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/monthSelect/monthSelect.js");
    }
}
