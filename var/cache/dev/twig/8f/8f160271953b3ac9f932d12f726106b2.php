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

/* wdn/templates_5.3/js/mustard-initializer.js */
class __TwigTemplate_bcbd33bc10572a1994fdb65cf1d869b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/mustard-initializer.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/mustard-initializer.js"));

        // line 1
        echo "\"use strict\";

// Load Polyfill.io
(function () {
  var el = document.createElement('script');
  el.async = false;
  el.src = 'https://polyfill.io/v3/polyfill.min.js?flags=gated&features=Element.prototype.classList%2CCustomEvent%2CNodeList.prototype.forEach%2CArray.prototype.map%2CArray.prototype.find%2Cdefault%2CArray.prototype.filter%2CElement.prototype.matches';
  document.body.appendChild(el);
})();

require(['require'], function () {
  // Test for object-fit browser support, load polyfill if needed
  if (!('objectFit' in document.body.style)) {
    require(['mustard/ofi'], function () {
      objectFitImages();
    });
  }

  require(['dcf-utility'], function (utilityModule) {
    // Trigger dcf-webp class processing
    utilityModule.DCFUtility.flagSupportsWebP(); // Trigger dcf-no-js check

    utilityModule.DCFUtility.flagSupportsJavaScript();
  });
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/mustard-initializer.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

// Load Polyfill.io
(function () {
  var el = document.createElement('script');
  el.async = false;
  el.src = 'https://polyfill.io/v3/polyfill.min.js?flags=gated&features=Element.prototype.classList%2CCustomEvent%2CNodeList.prototype.forEach%2CArray.prototype.map%2CArray.prototype.find%2Cdefault%2CArray.prototype.filter%2CElement.prototype.matches';
  document.body.appendChild(el);
})();

require(['require'], function () {
  // Test for object-fit browser support, load polyfill if needed
  if (!('objectFit' in document.body.style)) {
    require(['mustard/ofi'], function () {
      objectFitImages();
    });
  }

  require(['dcf-utility'], function (utilityModule) {
    // Trigger dcf-webp class processing
    utilityModule.DCFUtility.flagSupportsWebP(); // Trigger dcf-no-js check

    utilityModule.DCFUtility.flagSupportsJavaScript();
  });
});
", "wdn/templates_5.3/js/mustard-initializer.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/mustard-initializer.js");
    }
}
