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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/vn.js */
class __TwigTemplate_b2da9976e534c30bf5bc64efbb4f4d3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/vn.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/vn.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.vn = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Vietnamese = {
      weekdays: {
        shorthand: [\"CN\", \"T2\", \"T3\", \"T4\", \"T5\", \"T6\", \"T7\"],
        longhand: [\"Chủ nhật\", \"Thứ hai\", \"Thứ ba\", \"Thứ tư\", \"Thứ năm\", \"Thứ sáu\", \"Thứ bảy\"]
      },
      months: {
        shorthand: [\"Th1\", \"Th2\", \"Th3\", \"Th4\", \"Th5\", \"Th6\", \"Th7\", \"Th8\", \"Th9\", \"Th10\", \"Th11\", \"Th12\"],
        longhand: [\"Tháng một\", \"Tháng hai\", \"Tháng ba\", \"Tháng tư\", \"Tháng năm\", \"Tháng sáu\", \"Tháng bảy\", \"Tháng tám\", \"Tháng chín\", \"Tháng mười\", \"Tháng 11\", \"Tháng 12\"]
      },
      firstDayOfWeek: 1
    };
    fp.l10ns.vn = Vietnamese;
    var vn = fp.l10ns;

    exports.Vietnamese = Vietnamese;
    exports.default = vn;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/vn.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.vn = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Vietnamese = {
      weekdays: {
        shorthand: [\"CN\", \"T2\", \"T3\", \"T4\", \"T5\", \"T6\", \"T7\"],
        longhand: [\"Chủ nhật\", \"Thứ hai\", \"Thứ ba\", \"Thứ tư\", \"Thứ năm\", \"Thứ sáu\", \"Thứ bảy\"]
      },
      months: {
        shorthand: [\"Th1\", \"Th2\", \"Th3\", \"Th4\", \"Th5\", \"Th6\", \"Th7\", \"Th8\", \"Th9\", \"Th10\", \"Th11\", \"Th12\"],
        longhand: [\"Tháng một\", \"Tháng hai\", \"Tháng ba\", \"Tháng tư\", \"Tháng năm\", \"Tháng sáu\", \"Tháng bảy\", \"Tháng tám\", \"Tháng chín\", \"Tháng mười\", \"Tháng 11\", \"Tháng 12\"]
      },
      firstDayOfWeek: 1
    };
    fp.l10ns.vn = Vietnamese;
    var vn = fp.l10ns;

    exports.Vietnamese = Vietnamese;
    exports.default = vn;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/vn.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/vn.js");
    }
}
