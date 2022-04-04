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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/th.js */
class __TwigTemplate_b44df4554d16d79ce4ae7a358d70d797 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/th.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/th.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.th = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Thai = {
      weekdays: {
        shorthand: [\"อา\", \"จ\", \"อ\", \"พ\", \"พฤ\", \"ศ\", \"ส\"],
        longhand: [\"อาทิตย์\", \"จันทร์\", \"อังคาร\", \"พุธ\", \"พฤหัสบดี\", \"ศุกร์\", \"เสาร์\"]
      },
      months: {
        shorthand: [\"ม.ค.\", \"ก.พ.\", \"มี.ค.\", \"เม.ย.\", \"พ.ค.\", \"มิ.ย.\", \"ก.ค.\", \"ส.ค.\", \"ก.ย.\", \"ต.ค.\", \"พ.ย.\", \"ธ.ค.\"],
        longhand: [\"มกราคม\", \"กุมภาพันธ์\", \"มีนาคม\", \"เมษายน\", \"พฤษภาคม\", \"มิถุนายน\", \"กรกฎาคม\", \"สิงหาคม\", \"กันยายน\", \"ตุลาคม\", \"พฤศจิกายน\", \"ธันวาคม\"]
      },
      firstDayOfWeek: 1,
      rangeSeparator: \" ถึง \",
      scrollTitle: \"เลื่อนเพื่อเพิ่มหรือลด\",
      toggleTitle: \"คลิกเพื่อเปลี่ยน\",
      ordinal: function ordinal() {
        return \"\";
      }
    };
    fp.l10ns.th = Thai;
    var th = fp.l10ns;

    exports.Thai = Thai;
    exports.default = th;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/th.js";
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
    (factory((global.th = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Thai = {
      weekdays: {
        shorthand: [\"อา\", \"จ\", \"อ\", \"พ\", \"พฤ\", \"ศ\", \"ส\"],
        longhand: [\"อาทิตย์\", \"จันทร์\", \"อังคาร\", \"พุธ\", \"พฤหัสบดี\", \"ศุกร์\", \"เสาร์\"]
      },
      months: {
        shorthand: [\"ม.ค.\", \"ก.พ.\", \"มี.ค.\", \"เม.ย.\", \"พ.ค.\", \"มิ.ย.\", \"ก.ค.\", \"ส.ค.\", \"ก.ย.\", \"ต.ค.\", \"พ.ย.\", \"ธ.ค.\"],
        longhand: [\"มกราคม\", \"กุมภาพันธ์\", \"มีนาคม\", \"เมษายน\", \"พฤษภาคม\", \"มิถุนายน\", \"กรกฎาคม\", \"สิงหาคม\", \"กันยายน\", \"ตุลาคม\", \"พฤศจิกายน\", \"ธันวาคม\"]
      },
      firstDayOfWeek: 1,
      rangeSeparator: \" ถึง \",
      scrollTitle: \"เลื่อนเพื่อเพิ่มหรือลด\",
      toggleTitle: \"คลิกเพื่อเปลี่ยน\",
      ordinal: function ordinal() {
        return \"\";
      }
    };
    fp.l10ns.th = Thai;
    var th = fp.l10ns;

    exports.Thai = Thai;
    exports.default = th;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/th.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/th.js");
    }
}
