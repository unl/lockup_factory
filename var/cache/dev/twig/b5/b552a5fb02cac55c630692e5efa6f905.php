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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.js */
class __TwigTemplate_bb94008e72567433555f8ac738fb6990 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.js"));

        // line 1
        echo "!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=n():\"function\"==typeof define&&define.amd?define(n):e.confirmDatePlugin=n()}(this,function(){\"use strict\";function e(e){var i,t=Object.assign({},n,e);return function(e){return e.config.noCalendar||e.isMobile?{}:Object.assign({onKeyDown:function(n,t,o,c){e.config.enableTime&&\"Tab\"===c.key&&c.target===e.amPM?(c.preventDefault(),i.focus()):\"Enter\"===c.key&&c.target===i&&e.close()},onReady:function(){i=e._createElement(\"div\",\"flatpickr-confirm \"+(t.showAlways?\"visible\":\"\")+\" \"+t.theme+\"Theme\",t.confirmText),i.tabIndex=-1,i.innerHTML+=t.confirmIcon,i.addEventListener(\"click\",e.close),e.calendarContainer.appendChild(i)}},t.showAlways?{}:{onChange:function(n,t){var o=e.config.enableTime||\"multiple\"===e.config.mode;if(t&&!e.config.inline&&o)return i.classList.add(\"visible\");i.classList.remove(\"visible\")}})}}var n={confirmIcon:\"<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='17' height='17' viewBox='0 0 17 17'> <g> </g> <path d='M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z' fill='#000000' /> </svg>\",confirmText:\"OK \",showAlways:!1,theme:\"light\"};return e});
//# sourceMappingURL=confirmDate.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e,n){\"object\"==typeof exports&&\"undefined\"!=typeof module?module.exports=n():\"function\"==typeof define&&define.amd?define(n):e.confirmDatePlugin=n()}(this,function(){\"use strict\";function e(e){var i,t=Object.assign({},n,e);return function(e){return e.config.noCalendar||e.isMobile?{}:Object.assign({onKeyDown:function(n,t,o,c){e.config.enableTime&&\"Tab\"===c.key&&c.target===e.amPM?(c.preventDefault(),i.focus()):\"Enter\"===c.key&&c.target===i&&e.close()},onReady:function(){i=e._createElement(\"div\",\"flatpickr-confirm \"+(t.showAlways?\"visible\":\"\")+\" \"+t.theme+\"Theme\",t.confirmText),i.tabIndex=-1,i.innerHTML+=t.confirmIcon,i.addEventListener(\"click\",e.close),e.calendarContainer.appendChild(i)}},t.showAlways?{}:{onChange:function(n,t){var o=e.config.enableTime||\"multiple\"===e.config.mode;if(t&&!e.config.inline&&o)return i.classList.add(\"visible\");i.classList.remove(\"visible\")}})}}var n={confirmIcon:\"<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='17' height='17' viewBox='0 0 17 17'> <g> </g> <path d='M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z' fill='#000000' /> </svg>\",confirmText:\"OK \",showAlways:!1,theme:\"light\"};return e});
//# sourceMappingURL=confirmDate.js.map", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.js");
    }
}
