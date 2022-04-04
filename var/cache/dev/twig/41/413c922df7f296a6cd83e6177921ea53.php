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

/* wdn/templates_5.0/js/compressed/utility-scripts/testForWebP.js */
class __TwigTemplate_eb618670f3478a6fbd9c0def8b1cd313 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/utility-scripts/testForWebP.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/utility-scripts/testForWebP.js"));

        // line 1
        echo "!function(e){\"use strict\";function s(){return!!window.sessionStorage&&!!window.sessionStorage.getItem(\"webpSupport\")}function t(s){var t=e.documentElement;s?(t.classList?t.classList.add(\"webp\"):t.className+=\" webp\",window.sessionStorage.setItem(\"webpSupport\",!0)):t.classList?t.classList.add(\"no-webp\"):t.className+=\" no-webp\"}!function(e){if(s())return void t(!0);var n=new Image;n.onload=n.onerror=function(){e(2===n.height)},n.src=\"data:image/webp;base64,UklGRi4AAABXRUJQVlA4TCEAAAAvAUAAEB8wAiMwAgSSNtse/cXjxyCCmrYNWPwmHRH9jwMA\"}(t)}(document);
//# sourceMappingURL=testForWebP.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/utility-scripts/testForWebP.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(e){\"use strict\";function s(){return!!window.sessionStorage&&!!window.sessionStorage.getItem(\"webpSupport\")}function t(s){var t=e.documentElement;s?(t.classList?t.classList.add(\"webp\"):t.className+=\" webp\",window.sessionStorage.setItem(\"webpSupport\",!0)):t.classList?t.classList.add(\"no-webp\"):t.className+=\" no-webp\"}!function(e){if(s())return void t(!0);var n=new Image;n.onload=n.onerror=function(){e(2===n.height)},n.src=\"data:image/webp;base64,UklGRi4AAABXRUJQVlA4TCEAAAAvAUAAEB8wAiMwAgSSNtse/cXjxyCCmrYNWPwmHRH9jwMA\"}(t)}(document);
//# sourceMappingURL=testForWebP.js.map", "wdn/templates_5.0/js/compressed/utility-scripts/testForWebP.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/utility-scripts/testForWebP.js");
    }
}
