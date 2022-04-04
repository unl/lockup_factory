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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/cy.js */
class __TwigTemplate_ae0af9d15736e5f16aa50d6deca466ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/cy.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/cy.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.cy = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Welsh = {
      weekdays: {
        shorthand: [\"Sul\", \"Llun\", \"Maw\", \"Mer\", \"Iau\", \"Gwe\", \"Sad\"],
        longhand: [\"Dydd Sul\", \"Dydd Llun\", \"Dydd Mawrth\", \"Dydd Mercher\", \"Dydd Iau\", \"Dydd Gwener\", \"Dydd Sadwrn\"]
      },
      months: {
        shorthand: [\"Ion\", \"Chwef\", \"Maw\", \"Ebr\", \"Mai\", \"Meh\", \"Gorff\", \"Awst\", \"Medi\", \"Hyd\", \"Tach\", \"Rhag\"],
        longhand: [\"Ionawr\", \"Chwefror\", \"Mawrth\", \"Ebrill\", \"Mai\", \"Mehefin\", \"Gorffennaf\", \"Awst\", \"Medi\", \"Hydref\", \"Tachwedd\", \"Rhagfyr\"]
      },
      firstDayOfWeek: 1,
      ordinal: function ordinal(nth) {
        if (nth === 1) return \"af\";
        if (nth === 2) return \"ail\";
        if (nth === 3 || nth === 4) return \"ydd\";
        if (nth === 5 || nth === 6) return \"ed\";
        if (nth >= 7 && nth <= 10 || nth == 12 || nth == 15 || nth == 18 || nth == 20) return \"fed\";
        if (nth == 11 || nth == 13 || nth == 14 || nth == 16 || nth == 17 || nth == 19) return \"eg\";
        if (nth >= 21 && nth <= 39) return \"ain\";
        return \"\";
      }
    };
    fp.l10ns.cy = Welsh;
    var cy = fp.l10ns;

    exports.Welsh = Welsh;
    exports.default = cy;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/cy.js";
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
    (factory((global.cy = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Welsh = {
      weekdays: {
        shorthand: [\"Sul\", \"Llun\", \"Maw\", \"Mer\", \"Iau\", \"Gwe\", \"Sad\"],
        longhand: [\"Dydd Sul\", \"Dydd Llun\", \"Dydd Mawrth\", \"Dydd Mercher\", \"Dydd Iau\", \"Dydd Gwener\", \"Dydd Sadwrn\"]
      },
      months: {
        shorthand: [\"Ion\", \"Chwef\", \"Maw\", \"Ebr\", \"Mai\", \"Meh\", \"Gorff\", \"Awst\", \"Medi\", \"Hyd\", \"Tach\", \"Rhag\"],
        longhand: [\"Ionawr\", \"Chwefror\", \"Mawrth\", \"Ebrill\", \"Mai\", \"Mehefin\", \"Gorffennaf\", \"Awst\", \"Medi\", \"Hydref\", \"Tachwedd\", \"Rhagfyr\"]
      },
      firstDayOfWeek: 1,
      ordinal: function ordinal(nth) {
        if (nth === 1) return \"af\";
        if (nth === 2) return \"ail\";
        if (nth === 3 || nth === 4) return \"ydd\";
        if (nth === 5 || nth === 6) return \"ed\";
        if (nth >= 7 && nth <= 10 || nth == 12 || nth == 15 || nth == 18 || nth == 20) return \"fed\";
        if (nth == 11 || nth == 13 || nth == 14 || nth == 16 || nth == 17 || nth == 19) return \"eg\";
        if (nth >= 21 && nth <= 39) return \"ain\";
        return \"\";
      }
    };
    fp.l10ns.cy = Welsh;
    var cy = fp.l10ns;

    exports.Welsh = Welsh;
    exports.default = cy;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/cy.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/cy.js");
    }
}
