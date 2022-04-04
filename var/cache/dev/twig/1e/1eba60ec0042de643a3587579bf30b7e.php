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

/* wdn/templates_4.1/scripts/compressed/anchors.js.src.js */
class __TwigTemplate_54cc255c01aaad83960ed201cbfd199a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/anchors.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/anchors.js.src.js"));

        // line 1
        echo "define(['jquery', 'wdn'], function(\$, WDN) {
\tvar initd = false,
\t\tcreateSheet = function(media) {
\t\t\tvar style = document.createElement('style');
\t\t\tstyle.appendChild(document.createTextNode(''));

\t\t\tif (media) {
\t\t\t\tstyle.setAttribute('media', media);
\t\t\t}

\t\t\tdocument.head.appendChild(style);

\t\t\treturn style.sheet;
\t\t},
\t\taddRule = function(sheet, selector, rules, index) {
\t\t\tif (sheet.insertRule) {
\t\t\t\tsheet.insertRule(selector + '{' + rules + '}', index);
\t\t\t} else {
\t\t\t\tsheet.addRule(selector, rules, index);
\t\t\t}
\t\t},
\t\tremoveRule = function(sheet, index) {
\t\t\tif (! (sheet.cssRules || sheet.rules).length) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif (sheet.deleteRule) {
\t\t\t\tsheet.deleteRule(index || 0);
\t\t\t} else {
\t\t\t\tsheet.removeRule(index);
\t\t\t}
\t\t},

\t\tmobileSheet,
\t\tdesktopSheet,

\t\teventScope = 'fixed.wdnAnchors',

\t\tanchorSel = '.wdn-offset-anchor',
\t\tdefaultRule = 'border:0; position:relative;',
\t\tfullNavMq = 'only screen and (min-width: 43.75em)';

\treturn {
\t\tinitialize: function() {
\t\t\tif (initd) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$(function() {
\t\t\t\t\$('#navigation').on(eventScope, function(e, offset) {
\t\t\t\t\tvar sheet, rule = defaultRule;
\t\t\t\t\tif (!matchMedia(fullNavMq).matches) {
\t\t\t\t\t\tif (mobileSheet) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tsheet = mobileSheet = createSheet();
\t\t\t\t\t} else {
\t\t\t\t\t\tsheet = desktopSheet || createSheet(fullNavMq);
\t\t\t\t\t\tdesktopSheet = sheet;
\t\t\t\t\t}

\t\t\t\t\tremoveRule(sheet);
\t\t\t\t\toffset = offset * -1;
\t\t\t\t\ttry {
\t\t\t\t\t\trule += 'top:' + offset + 'px;';
\t\t\t\t\t\taddRule(sheet, anchorSel, rule);
\t\t\t\t\t} catch(e) {
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\tinitd = true;
\t\t}
\t};
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/anchors.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(['jquery', 'wdn'], function(\$, WDN) {
\tvar initd = false,
\t\tcreateSheet = function(media) {
\t\t\tvar style = document.createElement('style');
\t\t\tstyle.appendChild(document.createTextNode(''));

\t\t\tif (media) {
\t\t\t\tstyle.setAttribute('media', media);
\t\t\t}

\t\t\tdocument.head.appendChild(style);

\t\t\treturn style.sheet;
\t\t},
\t\taddRule = function(sheet, selector, rules, index) {
\t\t\tif (sheet.insertRule) {
\t\t\t\tsheet.insertRule(selector + '{' + rules + '}', index);
\t\t\t} else {
\t\t\t\tsheet.addRule(selector, rules, index);
\t\t\t}
\t\t},
\t\tremoveRule = function(sheet, index) {
\t\t\tif (! (sheet.cssRules || sheet.rules).length) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif (sheet.deleteRule) {
\t\t\t\tsheet.deleteRule(index || 0);
\t\t\t} else {
\t\t\t\tsheet.removeRule(index);
\t\t\t}
\t\t},

\t\tmobileSheet,
\t\tdesktopSheet,

\t\teventScope = 'fixed.wdnAnchors',

\t\tanchorSel = '.wdn-offset-anchor',
\t\tdefaultRule = 'border:0; position:relative;',
\t\tfullNavMq = 'only screen and (min-width: 43.75em)';

\treturn {
\t\tinitialize: function() {
\t\t\tif (initd) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$(function() {
\t\t\t\t\$('#navigation').on(eventScope, function(e, offset) {
\t\t\t\t\tvar sheet, rule = defaultRule;
\t\t\t\t\tif (!matchMedia(fullNavMq).matches) {
\t\t\t\t\t\tif (mobileSheet) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tsheet = mobileSheet = createSheet();
\t\t\t\t\t} else {
\t\t\t\t\t\tsheet = desktopSheet || createSheet(fullNavMq);
\t\t\t\t\t\tdesktopSheet = sheet;
\t\t\t\t\t}

\t\t\t\t\tremoveRule(sheet);
\t\t\t\t\toffset = offset * -1;
\t\t\t\t\ttry {
\t\t\t\t\t\trule += 'top:' + offset + 'px;';
\t\t\t\t\t\taddRule(sheet, anchorSel, rule);
\t\t\t\t\t} catch(e) {
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\tinitd = true;
\t\t}
\t};
});
", "wdn/templates_4.1/scripts/compressed/anchors.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/anchors.js.src.js");
    }
}
