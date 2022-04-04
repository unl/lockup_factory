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

/* wdn/templates_5.3/js-src/hover_intent.babel.js */
class __TwigTemplate_37cb04854050c144707d8e430d3869a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/hover_intent.babel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/hover_intent.babel.js"));

        // line 1
        echo "require (['plugins/hoverIntent/hoverintent'], () => {

/**
 * Base class to set up any kind of Intent
 * */
\tclass Intent {
\t\tconstructor(el, options = {} ) {
\t\t\tthis.el = el;
\t\t\tthis.options = options;
\t\t}
\t}

\t/**
\t* HoverIntent subclass that uses the hoverintent library
\t * @param el - the element to attach hoverintent to
\t * @param options - [optional] options for configuring hoverintent
\t * @param mq - [optional] media query conditions for handling isMobile vs otherwise
\t * @param handleIn - callback function to handle hover in behavior for the selected element
\t * @param handleOut - callback function to handle hover out behavior for the selected element
\t * @package (hoverintent)[https://github.com/tristen/hoverintent]
\t* */
\tclass HoverIntent extends Intent {
\t\tconstructor(el, options = {}, mq = '', handleIn, handleOut) {
\t\t\tsuper(el, options);
\t\t\tthis.handleIn = handleIn;
\t\t\tthis.handleOut = handleOut;
\t\t\tthis.mq = mq;
\t\t\t// bind context of this to the HoverIntent
\t\t\t// instance since it can be overwritten by the matchMedia event listener. Another alternative is to write
\t\t\t// handleMediaChanges using arrow functions to prevent rebounding of this
\t\t\t// this.handleMediaChanges = this.handleMediaChanges.bind(this);
\t\t}

\t\thoverListener;
\t\tisMobile = true;

\t\taddListener() {
\t\t\tthis.hoverListener = hoverintent(this.el, this.handleIn, this.handleOut ).options(this.options);
\t\t};

\t\tremoveListener() {
\t\t\tif(this.hoverListener) this.hoverListener.remove();
\t\t};

\t\thandleMediaChanges = (mql) => {
\t\t\tif (mql.matches) {
\t\t\t\tthis.isMobile = false;
\t\t\t\tthis.addListener();
\t\t\t} else {
\t\t\t\tthis.isMobile = true;
\t\t\t\tthis.removeListener();
\t\t\t}
\t\t};

\t\tonWidthChange() {
\t\t\tconst mediaQueryList = window.matchMedia(this.mq);
\t\t\tmediaQueryList.addListener(this.handleMediaChanges);
\t\t}

\t\tinitialize() {
\t\t\tconst mediaQueryList = window.matchMedia(this.mq);
\t\t\tthis.handleMediaChanges(mediaQueryList);
\t\t\tthis.onWidthChange();
\t\t}
\t}

\t/**
\t * Setting up localNav hover intent
\t * */
\tconst localNav = document.querySelector('.dcf-nav-local');

\tfunction navHandleIn() {
\t\tthis.previousElementSibling.setAttribute('aria-expanded', true);
\t}

\tfunction navHandleOut() {
\t\tthis.previousElementSibling.removeAttribute('aria-expanded');
\t}

\tconst navMQ = 'screen and (min-width: 56.123125em)';
\tconst navIntent = new HoverIntent(localNav, undefined, navMQ,navHandleIn,navHandleOut);

\tnavIntent.initialize();
});

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js-src/hover_intent.babel.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("require (['plugins/hoverIntent/hoverintent'], () => {

/**
 * Base class to set up any kind of Intent
 * */
\tclass Intent {
\t\tconstructor(el, options = {} ) {
\t\t\tthis.el = el;
\t\t\tthis.options = options;
\t\t}
\t}

\t/**
\t* HoverIntent subclass that uses the hoverintent library
\t * @param el - the element to attach hoverintent to
\t * @param options - [optional] options for configuring hoverintent
\t * @param mq - [optional] media query conditions for handling isMobile vs otherwise
\t * @param handleIn - callback function to handle hover in behavior for the selected element
\t * @param handleOut - callback function to handle hover out behavior for the selected element
\t * @package (hoverintent)[https://github.com/tristen/hoverintent]
\t* */
\tclass HoverIntent extends Intent {
\t\tconstructor(el, options = {}, mq = '', handleIn, handleOut) {
\t\t\tsuper(el, options);
\t\t\tthis.handleIn = handleIn;
\t\t\tthis.handleOut = handleOut;
\t\t\tthis.mq = mq;
\t\t\t// bind context of this to the HoverIntent
\t\t\t// instance since it can be overwritten by the matchMedia event listener. Another alternative is to write
\t\t\t// handleMediaChanges using arrow functions to prevent rebounding of this
\t\t\t// this.handleMediaChanges = this.handleMediaChanges.bind(this);
\t\t}

\t\thoverListener;
\t\tisMobile = true;

\t\taddListener() {
\t\t\tthis.hoverListener = hoverintent(this.el, this.handleIn, this.handleOut ).options(this.options);
\t\t};

\t\tremoveListener() {
\t\t\tif(this.hoverListener) this.hoverListener.remove();
\t\t};

\t\thandleMediaChanges = (mql) => {
\t\t\tif (mql.matches) {
\t\t\t\tthis.isMobile = false;
\t\t\t\tthis.addListener();
\t\t\t} else {
\t\t\t\tthis.isMobile = true;
\t\t\t\tthis.removeListener();
\t\t\t}
\t\t};

\t\tonWidthChange() {
\t\t\tconst mediaQueryList = window.matchMedia(this.mq);
\t\t\tmediaQueryList.addListener(this.handleMediaChanges);
\t\t}

\t\tinitialize() {
\t\t\tconst mediaQueryList = window.matchMedia(this.mq);
\t\t\tthis.handleMediaChanges(mediaQueryList);
\t\t\tthis.onWidthChange();
\t\t}
\t}

\t/**
\t * Setting up localNav hover intent
\t * */
\tconst localNav = document.querySelector('.dcf-nav-local');

\tfunction navHandleIn() {
\t\tthis.previousElementSibling.setAttribute('aria-expanded', true);
\t}

\tfunction navHandleOut() {
\t\tthis.previousElementSibling.removeAttribute('aria-expanded');
\t}

\tconst navMQ = 'screen and (min-width: 56.123125em)';
\tconst navIntent = new HoverIntent(localNav, undefined, navMQ,navHandleIn,navHandleOut);

\tnavIntent.initialize();
});

", "wdn/templates_5.3/js-src/hover_intent.babel.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/hover_intent.babel.js");
    }
}
