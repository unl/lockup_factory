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

/* wdn/templates_5.0/js/wdn_jquery.js */
class __TwigTemplate_0bf60d6f38f23c90c8e2cd443d7cd26a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/wdn_jquery.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/wdn_jquery.js"));

        // line 1
        echo "'use strict';

define(['jquery', 'wdn'], function (\$, WDN) {
\t\$.noConflict(true);

\tvar jQueryWarning = false;
\tObject.defineProperty(WDN, 'jQuery', {
\t\tconfigurable: false,
\t\tget: function get() {
\t\t\tif (!jQueryWarning) {
\t\t\t\tjQueryWarning = true;

\t\t\t\tif (console && console.warn) {
\t\t\t\t\tconsole.warn('Using jQuery via the WDN.jQuery property is deprecated. You should use require to access jQuery.');
\t\t\t\t}
\t\t\t}

\t\t\treturn \$;
\t\t}
\t});

\treturn \$;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/wdn_jquery.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

define(['jquery', 'wdn'], function (\$, WDN) {
\t\$.noConflict(true);

\tvar jQueryWarning = false;
\tObject.defineProperty(WDN, 'jQuery', {
\t\tconfigurable: false,
\t\tget: function get() {
\t\t\tif (!jQueryWarning) {
\t\t\t\tjQueryWarning = true;

\t\t\t\tif (console && console.warn) {
\t\t\t\t\tconsole.warn('Using jQuery via the WDN.jQuery property is deprecated. You should use require to access jQuery.');
\t\t\t\t}
\t\t\t}

\t\t\treturn \$;
\t\t}
\t});

\treturn \$;
});
", "wdn/templates_5.0/js/wdn_jquery.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/wdn_jquery.js");
    }
}
