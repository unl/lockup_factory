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

/* wdn/templates_5.0/js/plugins/flatpickr/l10n/si.js */
class __TwigTemplate_26d266e8bc1bdca54f20c9628660206f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/si.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/l10n/si.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
    typeof define === 'function' && define.amd ? define(['exports'], factory) :
    (factory((global.si = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Sinhala = {
      weekdays: {
        shorthand: [\"ඉ\", \"ස\", \"අ\", \"බ\", \"බ්‍ර\", \"සි\", \"සෙ\"],
        longhand: [\"ඉරිදා\", \"සඳුදා\", \"අඟහරුවාදා\", \"බදාදා\", \"බ්‍රහස්පතින්දා\", \"සිකුරාදා\", \"සෙනසුරාදා\"]
      },
      months: {
        shorthand: [\"ජන\", \"පෙබ\", \"මාර්\", \"අප්‍රේ\", \"මැයි\", \"ජුනි\", \"ජූලි\", \"අගෝ\", \"සැප්\", \"ඔක්\", \"නොවැ\", \"දෙසැ\"],
        longhand: [\"ජනවාරි\", \"පෙබරවාරි\", \"මාර්තු\", \"අප්‍රේල්\", \"මැයි\", \"ජුනි\", \"ජූලි\", \"අගෝස්තු\", \"සැප්තැම්බර්\", \"ඔක්තෝබර්\", \"නොවැම්බර්\", \"දෙසැම්බර්\"]
      }
    };
    fp.l10ns.si = Sinhala;
    var si = fp.l10ns;

    exports.Sinhala = Sinhala;
    exports.default = si;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/l10n/si.js";
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
    (factory((global.si = {})));
}(this, (function (exports) { 'use strict';

    var fp = typeof window !== \"undefined\" && window.flatpickr !== undefined ? window.flatpickr : {
      l10ns: {}
    };
    var Sinhala = {
      weekdays: {
        shorthand: [\"ඉ\", \"ස\", \"අ\", \"බ\", \"බ්‍ර\", \"සි\", \"සෙ\"],
        longhand: [\"ඉරිදා\", \"සඳුදා\", \"අඟහරුවාදා\", \"බදාදා\", \"බ්‍රහස්පතින්දා\", \"සිකුරාදා\", \"සෙනසුරාදා\"]
      },
      months: {
        shorthand: [\"ජන\", \"පෙබ\", \"මාර්\", \"අප්‍රේ\", \"මැයි\", \"ජුනි\", \"ජූලි\", \"අගෝ\", \"සැප්\", \"ඔක්\", \"නොවැ\", \"දෙසැ\"],
        longhand: [\"ජනවාරි\", \"පෙබරවාරි\", \"මාර්තු\", \"අප්‍රේල්\", \"මැයි\", \"ජුනි\", \"ජූලි\", \"අගෝස්තු\", \"සැප්තැම්බර්\", \"ඔක්තෝබර්\", \"නොවැම්බර්\", \"දෙසැම්බර්\"]
      }
    };
    fp.l10ns.si = Sinhala;
    var si = fp.l10ns;

    exports.Sinhala = Sinhala;
    exports.default = si;

    Object.defineProperty(exports, '__esModule', { value: true });

})));
", "wdn/templates_5.0/js/plugins/flatpickr/l10n/si.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/l10n/si.js");
    }
}
