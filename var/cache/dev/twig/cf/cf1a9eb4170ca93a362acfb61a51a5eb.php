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

/* wdn/templates_5.2/js/utility-scripts/polyfillsAreLoaded.js */
class __TwigTemplate_e99e5eb6b1ffc9a8dc3ebf62c30454db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/utility-scripts/polyfillsAreLoaded.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/utility-scripts/polyfillsAreLoaded.js"));

        // line 1
        echo "\"use strict\";

// callback function for polyfill.io in ES6+ syntax
function polyfillsAreLoaded() {
  function loadJs() {
    var url = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : \"\";
    var async = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
    var id = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : \"\";

    return new Promise(function (resolve, reject) {
      var el = document.createElement(\"script\");
      el.onload = function () {
        resolve(url);
      };
      el.onerror = function () {
        reject(url);
      };
      el.async = async;
      el.src = url;
      el.id = id;
      document.body.appendChild(el);
    });
  }

  loadJs(\"/wdn/templates_5.2/js/compressed/all.js?dep=\$DEP_VERSION\$\", true, \"wdn_dependents\").catch(function (err) {
    console.error(\"Failed at \" + err);
  });
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/utility-scripts/polyfillsAreLoaded.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

// callback function for polyfill.io in ES6+ syntax
function polyfillsAreLoaded() {
  function loadJs() {
    var url = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : \"\";
    var async = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
    var id = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : \"\";

    return new Promise(function (resolve, reject) {
      var el = document.createElement(\"script\");
      el.onload = function () {
        resolve(url);
      };
      el.onerror = function () {
        reject(url);
      };
      el.async = async;
      el.src = url;
      el.id = id;
      document.body.appendChild(el);
    });
  }

  loadJs(\"/wdn/templates_5.2/js/compressed/all.js?dep=\$DEP_VERSION\$\", true, \"wdn_dependents\").catch(function (err) {
    console.error(\"Failed at \" + err);
  });
}
", "wdn/templates_5.2/js/utility-scripts/polyfillsAreLoaded.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/utility-scripts/polyfillsAreLoaded.js");
    }
}
