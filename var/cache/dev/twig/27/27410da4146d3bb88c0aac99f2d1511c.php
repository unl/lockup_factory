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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/km.js */
class __TwigTemplate_81e8b81f4b47d86ba43ee68d83887a01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/km.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/km.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.km = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Khmer = {
      weekdays: {
        shorthand: [\"អាទិត្យ\", \"ចន្ទ\", \"អង្គារ\", \"ពុធ\", \"ព្រហស.\", \"សុក្រ\", \"សៅរ៍\"],
        longhand: [\"អាទិត្យ\", \"ចន្ទ\", \"អង្គារ\", \"ពុធ\", \"ព្រហស្បតិ៍\", \"សុក្រ\", \"សៅរ៍\"]
      },
      months: {
        shorthand: [\"មករា\", \"កុម្ភះ\", \"មីនា\", \"មេសា\", \"ឧសភា\", \"មិថុនា\", \"កក្កដា\", \"សីហា\", \"កញ្ញា\", \"តុលា\", \"វិច្ឆិកា\", \"ធ្នូ\"],
        longhand: [\"មករា\", \"កុម្ភះ\", \"មីនា\", \"មេសា\", \"ឧសភា\", \"មិថុនា\", \"កក្កដា\", \"សីហា\", \"កញ្ញា\", \"តុលា\", \"វិច្ឆិកា\", \"ធ្នូ\"]
      },
      ordinal: function ordinal() {
        return \"\";
      },
      firstDayOfWeek: 1,
      rangeSeparator: \" ដល់ \",
      weekAbbreviation: \"សប្តាហ៍\",
      scrollTitle: \"រំកិលដើម្បីបង្កើន\",
      toggleTitle: \"ចុចដើម្បីផ្លាស់ប្ដូរ\",
      yearAriaLabel: \"ឆ្នាំ\"
    };
    fp.l10ns.km = Khmer;
    var km = fp.l10ns;

    exports.Khmer = Khmer;
    exports.default = km;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/km.js";
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
    (factory((global.km = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Khmer = {
      weekdays: {
        shorthand: [\"អាទិត្យ\", \"ចន្ទ\", \"អង្គារ\", \"ពុធ\", \"ព្រហស.\", \"សុក្រ\", \"សៅរ៍\"],
        longhand: [\"អាទិត្យ\", \"ចន្ទ\", \"អង្គារ\", \"ពុធ\", \"ព្រហស្បតិ៍\", \"សុក្រ\", \"សៅរ៍\"]
      },
      months: {
        shorthand: [\"មករា\", \"កុម្ភះ\", \"មីនា\", \"មេសា\", \"ឧសភា\", \"មិថុនា\", \"កក្កដា\", \"សីហា\", \"កញ្ញា\", \"តុលា\", \"វិច្ឆិកា\", \"ធ្នូ\"],
        longhand: [\"មករា\", \"កុម្ភះ\", \"មីនា\", \"មេសា\", \"ឧសភា\", \"មិថុនា\", \"កក្កដា\", \"សីហា\", \"កញ្ញា\", \"តុលា\", \"វិច្ឆិកា\", \"ធ្នូ\"]
      },
      ordinal: function ordinal() {
        return \"\";
      },
      firstDayOfWeek: 1,
      rangeSeparator: \" ដល់ \",
      weekAbbreviation: \"សប្តាហ៍\",
      scrollTitle: \"រំកិលដើម្បីបង្កើន\",
      toggleTitle: \"ចុចដើម្បីផ្លាស់ប្ដូរ\",
      yearAriaLabel: \"ឆ្នាំ\"
    };
    fp.l10ns.km = Khmer;
    var km = fp.l10ns;

    exports.Khmer = Khmer;
    exports.default = km;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/km.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/km.js");
    }
}
