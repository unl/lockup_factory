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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/weekSelect/weekSelect.js */
class __TwigTemplate_3e36db0bd387d716b1d5d88d52b18a92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/weekSelect/weekSelect.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/weekSelect/weekSelect.js"));

        // line 1
        echo "!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=t():\"function\"==typeof define&&define.amd?define(t):e.weekSelect=t()}(this,function(){\"use strict\";function e(){return function(e){function t(t){var n=t.target;if(n.classList.contains(\"flatpickr-day\"))for(var a=e.days.childNodes,o=n.\$i,i=o/7,d=a[7*Math.floor(i)].dateObj,r=a[7*Math.ceil(i+.01)-1].dateObj,s=a.length;s--;){var c=a[s],l=c.dateObj;l>r||l<d?c.classList.remove(\"inRange\"):c.classList.add(\"inRange\")}}function n(){var t=e.latestSelectedDateObj;void 0!==t&&t.getMonth()===e.currentMonth&&t.getFullYear()===e.currentYear&&(e.weekStartDay=e.days.childNodes[7*Math.floor(e.selectedDateElem.\$i/7)].dateObj,e.weekEndDay=e.days.childNodes[7*Math.ceil(e.selectedDateElem.\$i/7+.01)-1].dateObj);for(var n=e.days.childNodes,a=n.length;a--;){var o=n[a].dateObj;o>=e.weekStartDay&&o<=e.weekEndDay&&n[a].classList.add(\"week\",\"selected\")}}function a(){for(var t=e.days.childNodes,n=t.length;n--;)t[n].classList.remove(\"inRange\")}function o(){void 0!==e.daysContainer&&e.daysContainer.addEventListener(\"mouseover\",t)}function i(){void 0!==e.daysContainer&&e.daysContainer.removeEventListener(\"mouseover\",t)}return{onValueUpdate:n,onMonthChange:n,onYearChange:n,onClose:a,onParseConfig:function(){e.config.mode=\"single\",e.config.enableTime=!1,e.config.dateFormat=e.config.dateFormat?e.config.dateFormat:\"\\\\W\\\\e\\\\e\\\\k #W, Y\",e.config.altFormat=e.config.altFormat?e.config.altFormat:\"\\\\W\\\\e\\\\e\\\\k #W, Y\"},onReady:[o,n],onDestroy:i}}}return e});
//# sourceMappingURL=weekSelect.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/weekSelect/weekSelect.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=t():\"function\"==typeof define&&define.amd?define(t):e.weekSelect=t()}(this,function(){\"use strict\";function e(){return function(e){function t(t){var n=t.target;if(n.classList.contains(\"flatpickr-day\"))for(var a=e.days.childNodes,o=n.\$i,i=o/7,d=a[7*Math.floor(i)].dateObj,r=a[7*Math.ceil(i+.01)-1].dateObj,s=a.length;s--;){var c=a[s],l=c.dateObj;l>r||l<d?c.classList.remove(\"inRange\"):c.classList.add(\"inRange\")}}function n(){var t=e.latestSelectedDateObj;void 0!==t&&t.getMonth()===e.currentMonth&&t.getFullYear()===e.currentYear&&(e.weekStartDay=e.days.childNodes[7*Math.floor(e.selectedDateElem.\$i/7)].dateObj,e.weekEndDay=e.days.childNodes[7*Math.ceil(e.selectedDateElem.\$i/7+.01)-1].dateObj);for(var n=e.days.childNodes,a=n.length;a--;){var o=n[a].dateObj;o>=e.weekStartDay&&o<=e.weekEndDay&&n[a].classList.add(\"week\",\"selected\")}}function a(){for(var t=e.days.childNodes,n=t.length;n--;)t[n].classList.remove(\"inRange\")}function o(){void 0!==e.daysContainer&&e.daysContainer.addEventListener(\"mouseover\",t)}function i(){void 0!==e.daysContainer&&e.daysContainer.removeEventListener(\"mouseover\",t)}return{onValueUpdate:n,onMonthChange:n,onYearChange:n,onClose:a,onParseConfig:function(){e.config.mode=\"single\",e.config.enableTime=!1,e.config.dateFormat=e.config.dateFormat?e.config.dateFormat:\"\\\\W\\\\e\\\\e\\\\k #W, Y\",e.config.altFormat=e.config.altFormat?e.config.altFormat:\"\\\\W\\\\e\\\\e\\\\k #W, Y\"},onReady:[o,n],onDestroy:i}}}return e});
//# sourceMappingURL=weekSelect.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/weekSelect/weekSelect.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/weekSelect/weekSelect.js");
    }
}
