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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/mn.js */
class __TwigTemplate_b9b7242a0c39d6804e8e092ff81cd5f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/mn.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/mn.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.mn = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Mongolian = {
      firstDayOfWeek: 1,
      weekdays: {
        shorthand: [\"Да\", \"Мя\", \"Лх\", \"Пү\", \"Ба\", \"Бя\", \"Ня\"],
        longhand: [\"Даваа\", \"Мягмар\", \"Лхагва\", \"Пүрэв\", \"Баасан\", \"Бямба\", \"Ням\"]
      },
      months: {
        shorthand: [\"1-р сар\", \"2-р сар\", \"3-р сар\", \"4-р сар\", \"5-р сар\", \"6-р сар\", \"7-р сар\", \"8-р сар\", \"9-р сар\", \"10-р сар\", \"11-р сар\", \"12-р сар\"],
        longhand: [\"Нэгдүгээр сар\", \"Хоёрдугаар сар\", \"Гуравдугаар сар\", \"Дөрөвдүгээр сар\", \"Тавдугаар сар\", \"Зургаадугаар сар\", \"Долдугаар сар\", \"Наймдугаар сар\", \"Есдүгээр сар\", \"Аравдугаар сар\", \"Арваннэгдүгээр сар\", \"Арванхоёрдугаар сар\"]
      },
      rangeSeparator: \"-с \"
    };
    fp.l10ns.mn = Mongolian;
    var mn = fp.l10ns;

    exports.Mongolian = Mongolian;
    exports.default = mn;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/mn.js";
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
    (factory((global.mn = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Mongolian = {
      firstDayOfWeek: 1,
      weekdays: {
        shorthand: [\"Да\", \"Мя\", \"Лх\", \"Пү\", \"Ба\", \"Бя\", \"Ня\"],
        longhand: [\"Даваа\", \"Мягмар\", \"Лхагва\", \"Пүрэв\", \"Баасан\", \"Бямба\", \"Ням\"]
      },
      months: {
        shorthand: [\"1-р сар\", \"2-р сар\", \"3-р сар\", \"4-р сар\", \"5-р сар\", \"6-р сар\", \"7-р сар\", \"8-р сар\", \"9-р сар\", \"10-р сар\", \"11-р сар\", \"12-р сар\"],
        longhand: [\"Нэгдүгээр сар\", \"Хоёрдугаар сар\", \"Гуравдугаар сар\", \"Дөрөвдүгээр сар\", \"Тавдугаар сар\", \"Зургаадугаар сар\", \"Долдугаар сар\", \"Наймдугаар сар\", \"Есдүгээр сар\", \"Аравдугаар сар\", \"Арваннэгдүгээр сар\", \"Арванхоёрдугаар сар\"]
      },
      rangeSeparator: \"-с \"
    };
    fp.l10ns.mn = Mongolian;
    var mn = fp.l10ns;

    exports.Mongolian = Mongolian;
    exports.default = mn;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/mn.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/mn.js");
    }
}
