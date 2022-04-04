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

/* wdn/templates_5.3/js/notice.js */
class __TwigTemplate_7b323882143d47289a7176ea83233d08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/notice.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/notice.js"));

        // line 1
        echo "require(['dcf-notice'], function(DCFNoticeModule) {
\tconst noticeTheme = new DCFNoticeModule.DCFNoticeTheme();
\tnoticeTheme.setThemeVariable('noticeContainerClassList', [ 'dcf-d-grid', 'dcf-w-max-xl', 'dcf-ml-auto', 'dcf-mr-auto', 'dcf-mb-6', 'dcf-rounded' ]);
\tnoticeTheme.setThemeVariable('closeNoticeInfoIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm-.5 4.8c.7 0 1.2.6 1.2 1.2s-.6 1.2-1.2 1.2-1.3-.5-1.3-1.2.6-1.2 1.3-1.2zM15 19.2H9c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h2.2v-7.5H10c-.4 0-.8-.3-.8-.8s.4-.5.8-.5h2c.2 0 .4.1.5.2.1.1.2.3.2.5v8.2H15c.4 0 .8.3.8.8s-.4.7-.8.7z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeSuccessIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm5.5 9L10 16c-.1.1-.3.2-.5.2s-.4-.1-.5-.2l-2.5-2.5c-.1-.1-.2-.3-.2-.5s.1-.4.2-.5c.3-.3.8-.3 1.1 0l2 2 7-6.5c.1-.1.3-.2.5-.2s.4.1.5.2c.2.3.2.8-.1 1z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeWarningIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M22.9 22.3l-11-22c-.2-.3-.7-.3-.9 0l-11 22c-.1.3.1.7.5.7h22c.4 0 .6-.4.4-.7zM10.8 8.1c0-.4.3-.7.8-.7.2 0 .4.1.5.2.1.1.2.3.2.5v7.7c0 .2-.1.4-.2.5-.1.1-.3.2-.5.2-.4 0-.7-.3-.8-.7V8.1zm.7 12.2c-.7 0-1.2-.5-1.2-1.2s.5-1.2 1.2-1.2 1.2.5 1.2 1.2-.5 1.2-1.2 1.2z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeDangerIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M23.9 7L17.1.2c-.1-.1-.3-.2-.4-.2H7.2c-.1 0-.2.1-.3.1L.1 7c0 .1-.1.2-.1.3v9.5c0 .1.1.3.1.4l6.7 6.7c.2 0 .3.1.4.1h9.5c.1 0 .3-.1.4-.1l6.8-6.7c.1-.1.1-.2.1-.4V7.3c0-.1-.1-.2-.1-.3zM17 16c.3.3.3.8 0 1.1-.1.1-.3.2-.5.2s-.4-.1-.5-.3l-4-4-4 4c-.3.3-.8.3-1.1 0-.3-.3-.3-.8 0-1.1l4-4L7 8c-.2-.1-.2-.3-.2-.5s0-.4.2-.5c.3-.3.7-.3 1 0l4 4 4-4c.3-.3.8-.3 1.1 0 .1.1.2.3.2.5s-.1.4-.2.5l-4 4 3.9 4z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeBtnClassList', [ 'dcf-btn', 'dcf-btn-inverse-tertiary', 'dcf-lh-1' ]);
\tnoticeTheme.setThemeVariable('closeNoticeBtnInnerHTML', '<span class=\"dcf-sr-only\">Close this notice</span><svg class=\"dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\"><path d=\"M23.707 22.293L13.414 12 23.706 1.707A.999.999 0 1022.292.293L12 10.586 1.706.292A1 1 0 00.292 1.706L10.586 12 .292 22.294a1 1 0 101.414 1.414L12 13.414l10.293 10.292a.999.999 0 101.414-1.413z\"/><path fill=\"none\" d=\"M0 0h24v24H0z\"/></svg>');
\tvar notice = new DCFNoticeModule.DCFNotice(noticeTheme);
\tnotice.initialize();
});

define([
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
        return "wdn/templates_5.3/js/notice.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("require(['dcf-notice'], function(DCFNoticeModule) {
\tconst noticeTheme = new DCFNoticeModule.DCFNoticeTheme();
\tnoticeTheme.setThemeVariable('noticeContainerClassList', [ 'dcf-d-grid', 'dcf-w-max-xl', 'dcf-ml-auto', 'dcf-mr-auto', 'dcf-mb-6', 'dcf-rounded' ]);
\tnoticeTheme.setThemeVariable('closeNoticeInfoIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm-.5 4.8c.7 0 1.2.6 1.2 1.2s-.6 1.2-1.2 1.2-1.3-.5-1.3-1.2.6-1.2 1.3-1.2zM15 19.2H9c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h2.2v-7.5H10c-.4 0-.8-.3-.8-.8s.4-.5.8-.5h2c.2 0 .4.1.5.2.1.1.2.3.2.5v8.2H15c.4 0 .8.3.8.8s-.4.7-.8.7z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeSuccessIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm5.5 9L10 16c-.1.1-.3.2-.5.2s-.4-.1-.5-.2l-2.5-2.5c-.1-.1-.2-.3-.2-.5s.1-.4.2-.5c.3-.3.8-.3 1.1 0l2 2 7-6.5c.1-.1.3-.2.5-.2s.4.1.5.2c.2.3.2.8-.1 1z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeWarningIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M22.9 22.3l-11-22c-.2-.3-.7-.3-.9 0l-11 22c-.1.3.1.7.5.7h22c.4 0 .6-.4.4-.7zM10.8 8.1c0-.4.3-.7.8-.7.2 0 .4.1.5.2.1.1.2.3.2.5v7.7c0 .2-.1.4-.2.5-.1.1-.3.2-.5.2-.4 0-.7-.3-.8-.7V8.1zm.7 12.2c-.7 0-1.2-.5-1.2-1.2s.5-1.2 1.2-1.2 1.2.5 1.2 1.2-.5 1.2-1.2 1.2z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeDangerIconInnerHTML', '<svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\" width=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#fefdfa\" d=\"M23.9 7L17.1.2c-.1-.1-.3-.2-.4-.2H7.2c-.1 0-.2.1-.3.1L.1 7c0 .1-.1.2-.1.3v9.5c0 .1.1.3.1.4l6.7 6.7c.2 0 .3.1.4.1h9.5c.1 0 .3-.1.4-.1l6.8-6.7c.1-.1.1-.2.1-.4V7.3c0-.1-.1-.2-.1-.3zM17 16c.3.3.3.8 0 1.1-.1.1-.3.2-.5.2s-.4-.1-.5-.3l-4-4-4 4c-.3.3-.8.3-1.1 0-.3-.3-.3-.8 0-1.1l4-4L7 8c-.2-.1-.2-.3-.2-.5s0-.4.2-.5c.3-.3.7-.3 1 0l4 4 4-4c.3-.3.8-.3 1.1 0 .1.1.2.3.2.5s-.1.4-.2.5l-4 4 3.9 4z\"/></svg>');
\tnoticeTheme.setThemeVariable('closeNoticeBtnClassList', [ 'dcf-btn', 'dcf-btn-inverse-tertiary', 'dcf-lh-1' ]);
\tnoticeTheme.setThemeVariable('closeNoticeBtnInnerHTML', '<span class=\"dcf-sr-only\">Close this notice</span><svg class=\"dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\"><path d=\"M23.707 22.293L13.414 12 23.706 1.707A.999.999 0 1022.292.293L12 10.586 1.706.292A1 1 0 00.292 1.706L10.586 12 .292 22.294a1 1 0 101.414 1.414L12 13.414l10.293 10.292a.999.999 0 101.414-1.413z\"/><path fill=\"none\" d=\"M0 0h24v24H0z\"/></svg>');
\tvar notice = new DCFNoticeModule.DCFNotice(noticeTheme);
\tnotice.initialize();
});

define([
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
", "wdn/templates_5.3/js/notice.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/notice.js");
    }
}
