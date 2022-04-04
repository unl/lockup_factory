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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/zh.js */
class __TwigTemplate_8d8d6a1507ecbf1651ff6d683019f607 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/zh.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/zh.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.zh = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Mandarin = {
      weekdays: {
        shorthand: [\"周日\", \"周一\", \"周二\", \"周三\", \"周四\", \"周五\", \"周六\"],
        longhand: [\"星期日\", \"星期一\", \"星期二\", \"星期三\", \"星期四\", \"星期五\", \"星期六\"]
      },
      months: {
        shorthand: [\"一月\", \"二月\", \"三月\", \"四月\", \"五月\", \"六月\", \"七月\", \"八月\", \"九月\", \"十月\", \"十一月\", \"十二月\"],
        longhand: [\"一月\", \"二月\", \"三月\", \"四月\", \"五月\", \"六月\", \"七月\", \"八月\", \"九月\", \"十月\", \"十一月\", \"十二月\"]
      },
      rangeSeparator: \" 至 \",
      weekAbbreviation: \"周\",
      scrollTitle: \"滚动切换\",
      toggleTitle: \"点击切换 12/24 小时时制\"
    };
    fp.l10ns.zh = Mandarin;
    var zh = fp.l10ns;

    exports.Mandarin = Mandarin;
    exports.default = zh;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/zh.js";
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
    (factory((global.zh = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Mandarin = {
      weekdays: {
        shorthand: [\"周日\", \"周一\", \"周二\", \"周三\", \"周四\", \"周五\", \"周六\"],
        longhand: [\"星期日\", \"星期一\", \"星期二\", \"星期三\", \"星期四\", \"星期五\", \"星期六\"]
      },
      months: {
        shorthand: [\"一月\", \"二月\", \"三月\", \"四月\", \"五月\", \"六月\", \"七月\", \"八月\", \"九月\", \"十月\", \"十一月\", \"十二月\"],
        longhand: [\"一月\", \"二月\", \"三月\", \"四月\", \"五月\", \"六月\", \"七月\", \"八月\", \"九月\", \"十月\", \"十一月\", \"十二月\"]
      },
      rangeSeparator: \" 至 \",
      weekAbbreviation: \"周\",
      scrollTitle: \"滚动切换\",
      toggleTitle: \"点击切换 12/24 小时时制\"
    };
    fp.l10ns.zh = Mandarin;
    var zh = fp.l10ns;

    exports.Mandarin = Mandarin;
    exports.default = zh;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/zh.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/zh.js");
    }
}
