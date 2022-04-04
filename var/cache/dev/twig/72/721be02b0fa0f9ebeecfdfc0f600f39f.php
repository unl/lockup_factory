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

/* wdn/templates_5.0/js/notice.js */
class __TwigTemplate_0a8ef82fc01df5f5303d72b88cd9b236 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/notice.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/notice.js"));

        // line 1
        echo "define([
\t'jquery',
\t'css!js-css/notices.css'
], function(\$) {
\tvar selectorNamespace = '.wdn_notice';
\tvar animationSpeed = 'slow';
\tvar defaultDuration = 1000;
\tvar durationMultiplier = 1000; // seconds to milliseconds
\tvar initd = false;

\tvar closeNotice = function(\$el) {
\t\t\$el.fadeOut(animationSpeed, function() {
\t\t\t\$el.remove();
\t\t});
\t};

\tvar Plugin = {
\t\tinitialize : function() {
\t\t\t// prevent double initialiation
\t\t\tif (!initd) {
\t\t\t\t// globally listen for notice close button clicks
\t\t\t\t\$(document).on('click', selectorNamespace + ' .close', function() {
\t\t\t\t\tcloseNotice(\$(this).closest(selectorNamespace));
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\tinitd = true;
\t\t\t}

\t\t\t\$(Plugin.launch);
\t\t},

\t\tlaunch : function() {
\t\t\t// check each existing notice for special interactive features
\t\t\t\$(selectorNamespace).each(function() {
\t\t\t\tvar \$el = \$(this);
\t\t\t\tvar durationMatch = 'duration';
\t\t\t\tvar isOverlay = false;
\t\t\t\tvar overlayMatch = 'overlay';
\t\t\t\tvar overlayHeader = 'header';
\t\t\t\tvar overlayMaincontent = 'maincontent';
\t\t\t\tvar overlayClass;
\t\t\t\tvar duration;

\t\t\t\t// check for overlay changers
\t\t\t\toverlayClass = overlayMatch + '-' + overlayHeader;
\t\t\t\tif (\$el.data(overlayMatch) === overlayHeader || \$el.is('.' + overlayClass)) {
\t\t\t\t\tisOverlay = true;
\t\t\t\t\t\$el.addClass(overlayMatch).removeClass(overlayClass);
\t\t\t\t\t\$('#' + overlayHeader).append(\$el);
\t\t\t\t}

\t\t\t\toverlayClass = overlayMatch + '-' + overlayMaincontent;
\t\t\t\tif (!isOverlay && (\$el.data(overlayMatch) === overlayMaincontent || \$el.is('.' + overlayClass))) {
\t\t\t\t\tisOverlay = true;
\t\t\t\t\t\$el.addClass(overlayMatch).removeClass(overlayClass);
\t\t\t\t\t\$('#' + overlayMaincontent).prepend(\$el);
\t\t\t\t}

\t\t\t\t// check for auto-closing duration
\t\t\t\tif (\$el.data(durationMatch) || \$el.is('[class*=' + durationMatch + '-]')) {
\t\t\t\t\tduration = \$el.data(durationMatch) * durationMultiplier;

\t\t\t\t\tif (isNaN(duration) || duration < 1) {
\t\t\t\t\t\t\$.each(\$el[0].classList || \$el[0].className.split(/\\s+/), function(i, className) {
\t\t\t\t\t\t\tvar classMatch = className.match(new RegExp('^' + durationMatch + '-(.+)\$'))
\t\t\t\t\t\t\tif (classMatch) {
\t\t\t\t\t\t\t\tduration = classMatch[1] * durationMultiplier;
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tif (isNaN(duration) || duration < 1) {
\t\t\t\t\t\tduration = defaultDuration;
\t\t\t\t\t}

\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tcloseNotice(\$el);
\t\t\t\t\t}, duration);
\t\t\t\t}
\t\t\t});
\t\t}
\t};

\treturn Plugin;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/notice.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([
\t'jquery',
\t'css!js-css/notices.css'
], function(\$) {
\tvar selectorNamespace = '.wdn_notice';
\tvar animationSpeed = 'slow';
\tvar defaultDuration = 1000;
\tvar durationMultiplier = 1000; // seconds to milliseconds
\tvar initd = false;

\tvar closeNotice = function(\$el) {
\t\t\$el.fadeOut(animationSpeed, function() {
\t\t\t\$el.remove();
\t\t});
\t};

\tvar Plugin = {
\t\tinitialize : function() {
\t\t\t// prevent double initialiation
\t\t\tif (!initd) {
\t\t\t\t// globally listen for notice close button clicks
\t\t\t\t\$(document).on('click', selectorNamespace + ' .close', function() {
\t\t\t\t\tcloseNotice(\$(this).closest(selectorNamespace));
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\tinitd = true;
\t\t\t}

\t\t\t\$(Plugin.launch);
\t\t},

\t\tlaunch : function() {
\t\t\t// check each existing notice for special interactive features
\t\t\t\$(selectorNamespace).each(function() {
\t\t\t\tvar \$el = \$(this);
\t\t\t\tvar durationMatch = 'duration';
\t\t\t\tvar isOverlay = false;
\t\t\t\tvar overlayMatch = 'overlay';
\t\t\t\tvar overlayHeader = 'header';
\t\t\t\tvar overlayMaincontent = 'maincontent';
\t\t\t\tvar overlayClass;
\t\t\t\tvar duration;

\t\t\t\t// check for overlay changers
\t\t\t\toverlayClass = overlayMatch + '-' + overlayHeader;
\t\t\t\tif (\$el.data(overlayMatch) === overlayHeader || \$el.is('.' + overlayClass)) {
\t\t\t\t\tisOverlay = true;
\t\t\t\t\t\$el.addClass(overlayMatch).removeClass(overlayClass);
\t\t\t\t\t\$('#' + overlayHeader).append(\$el);
\t\t\t\t}

\t\t\t\toverlayClass = overlayMatch + '-' + overlayMaincontent;
\t\t\t\tif (!isOverlay && (\$el.data(overlayMatch) === overlayMaincontent || \$el.is('.' + overlayClass))) {
\t\t\t\t\tisOverlay = true;
\t\t\t\t\t\$el.addClass(overlayMatch).removeClass(overlayClass);
\t\t\t\t\t\$('#' + overlayMaincontent).prepend(\$el);
\t\t\t\t}

\t\t\t\t// check for auto-closing duration
\t\t\t\tif (\$el.data(durationMatch) || \$el.is('[class*=' + durationMatch + '-]')) {
\t\t\t\t\tduration = \$el.data(durationMatch) * durationMultiplier;

\t\t\t\t\tif (isNaN(duration) || duration < 1) {
\t\t\t\t\t\t\$.each(\$el[0].classList || \$el[0].className.split(/\\s+/), function(i, className) {
\t\t\t\t\t\t\tvar classMatch = className.match(new RegExp('^' + durationMatch + '-(.+)\$'))
\t\t\t\t\t\t\tif (classMatch) {
\t\t\t\t\t\t\t\tduration = classMatch[1] * durationMultiplier;
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tif (isNaN(duration) || duration < 1) {
\t\t\t\t\t\tduration = defaultDuration;
\t\t\t\t\t}

\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tcloseNotice(\$el);
\t\t\t\t\t}, duration);
\t\t\t\t}
\t\t\t});
\t\t}
\t};

\treturn Plugin;
});
", "wdn/templates_5.0/js/notice.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/notice.js");
    }
}
