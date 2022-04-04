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

/* wdn/templates_5.1/js/hover_intent.js */
class __TwigTemplate_992f5cba0710f7531ab7dbaa7310b652 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/hover_intent.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/hover_intent.js"));

        // line 1
        echo "'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

require(['plugins/hoverIntent/hoverintent'], function () {

\t/**
  * Base class to set up any kind of Intent
  * */
\tvar Intent = function Intent(el) {
\t\tvar options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

\t\t_classCallCheck(this, Intent);

\t\tthis.el = el;
\t\tthis.options = options;
\t};

\t/**
 * HoverIntent subclass that uses the hoverintent library
  * @param el - the element to attach hoverintent to
  * @param options - [optional] options for configuring hoverintent
  * @param mq - [optional] media query conditions for handling isMobile vs otherwise
  * @param handleIn - callback function to handle hover in behavior for the selected element
  * @param handleOut - callback function to handle hover out behavior for the selected element
  * @package (hoverintent)[https://github.com/tristen/hoverintent]
 * */


\tvar HoverIntent = function (_Intent) {
\t\t_inherits(HoverIntent, _Intent);

\t\tfunction HoverIntent(el) {
\t\t\tvar options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
\t\t\tvar mq = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
\t\t\tvar handleIn = arguments[3];
\t\t\tvar handleOut = arguments[4];

\t\t\t_classCallCheck(this, HoverIntent);

\t\t\tvar _this = _possibleConstructorReturn(this, (HoverIntent.__proto__ || Object.getPrototypeOf(HoverIntent)).call(this, el, options));

\t\t\t_this.isMobile = true;

\t\t\t_this.handleMediaChanges = function (mql) {
\t\t\t\tif (mql.matches) {
\t\t\t\t\t_this.isMobile = false;
\t\t\t\t\t_this.addListener();
\t\t\t\t} else {
\t\t\t\t\t_this.isMobile = true;
\t\t\t\t\t_this.removeListener();
\t\t\t\t}
\t\t\t};

\t\t\t_this.handleIn = handleIn;
\t\t\t_this.handleOut = handleOut;
\t\t\t_this.mq = mq;
\t\t\t// bind context of this to the HoverIntent
\t\t\t// instance since it can be overwritten by the matchMedia event listener. Another alternative is to write
\t\t\t// handleMediaChanges using arrow functions to prevent rebounding of this
\t\t\t// this.handleMediaChanges = this.handleMediaChanges.bind(this);
\t\t\treturn _this;
\t\t}

\t\t_createClass(HoverIntent, [{
\t\t\tkey: 'addListener',
\t\t\tvalue: function addListener() {
\t\t\t\tthis.hoverListener = hoverintent(this.el, this.handleIn, this.handleOut).options(this.options);
\t\t\t}
\t\t}, {
\t\t\tkey: 'removeListener',
\t\t\tvalue: function removeListener() {
\t\t\t\tif (this.hoverListener) this.hoverListener.remove();
\t\t\t}
\t\t}, {
\t\t\tkey: 'onWidthChange',
\t\t\tvalue: function onWidthChange() {
\t\t\t\tvar mediaQueryList = window.matchMedia(this.mq);
\t\t\t\tmediaQueryList.addListener(this.handleMediaChanges);
\t\t\t}
\t\t}, {
\t\t\tkey: 'initialize',
\t\t\tvalue: function initialize() {
\t\t\t\tvar mediaQueryList = window.matchMedia(this.mq);
\t\t\t\tthis.handleMediaChanges(mediaQueryList);
\t\t\t\tthis.onWidthChange();
\t\t\t}
\t\t}]);

\t\treturn HoverIntent;
\t}(Intent);

\t/**
  * Setting up localNav hover intent
  * */


\tvar localNav = document.querySelector('.dcf-nav-local');

\tfunction navHandleIn() {
\t\tthis.previousElementSibling.setAttribute('aria-expanded', true);
\t}

\tfunction navHandleOut() {
\t\tthis.previousElementSibling.removeAttribute('aria-expanded');
\t}

\tvar navMQ = 'screen and (min-width: 56.123125em)';
\tvar navIntent = new HoverIntent(localNav, undefined, navMQ, navHandleIn, navHandleOut);

\tnavIntent.initialize();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/hover_intent.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

require(['plugins/hoverIntent/hoverintent'], function () {

\t/**
  * Base class to set up any kind of Intent
  * */
\tvar Intent = function Intent(el) {
\t\tvar options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

\t\t_classCallCheck(this, Intent);

\t\tthis.el = el;
\t\tthis.options = options;
\t};

\t/**
 * HoverIntent subclass that uses the hoverintent library
  * @param el - the element to attach hoverintent to
  * @param options - [optional] options for configuring hoverintent
  * @param mq - [optional] media query conditions for handling isMobile vs otherwise
  * @param handleIn - callback function to handle hover in behavior for the selected element
  * @param handleOut - callback function to handle hover out behavior for the selected element
  * @package (hoverintent)[https://github.com/tristen/hoverintent]
 * */


\tvar HoverIntent = function (_Intent) {
\t\t_inherits(HoverIntent, _Intent);

\t\tfunction HoverIntent(el) {
\t\t\tvar options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
\t\t\tvar mq = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
\t\t\tvar handleIn = arguments[3];
\t\t\tvar handleOut = arguments[4];

\t\t\t_classCallCheck(this, HoverIntent);

\t\t\tvar _this = _possibleConstructorReturn(this, (HoverIntent.__proto__ || Object.getPrototypeOf(HoverIntent)).call(this, el, options));

\t\t\t_this.isMobile = true;

\t\t\t_this.handleMediaChanges = function (mql) {
\t\t\t\tif (mql.matches) {
\t\t\t\t\t_this.isMobile = false;
\t\t\t\t\t_this.addListener();
\t\t\t\t} else {
\t\t\t\t\t_this.isMobile = true;
\t\t\t\t\t_this.removeListener();
\t\t\t\t}
\t\t\t};

\t\t\t_this.handleIn = handleIn;
\t\t\t_this.handleOut = handleOut;
\t\t\t_this.mq = mq;
\t\t\t// bind context of this to the HoverIntent
\t\t\t// instance since it can be overwritten by the matchMedia event listener. Another alternative is to write
\t\t\t// handleMediaChanges using arrow functions to prevent rebounding of this
\t\t\t// this.handleMediaChanges = this.handleMediaChanges.bind(this);
\t\t\treturn _this;
\t\t}

\t\t_createClass(HoverIntent, [{
\t\t\tkey: 'addListener',
\t\t\tvalue: function addListener() {
\t\t\t\tthis.hoverListener = hoverintent(this.el, this.handleIn, this.handleOut).options(this.options);
\t\t\t}
\t\t}, {
\t\t\tkey: 'removeListener',
\t\t\tvalue: function removeListener() {
\t\t\t\tif (this.hoverListener) this.hoverListener.remove();
\t\t\t}
\t\t}, {
\t\t\tkey: 'onWidthChange',
\t\t\tvalue: function onWidthChange() {
\t\t\t\tvar mediaQueryList = window.matchMedia(this.mq);
\t\t\t\tmediaQueryList.addListener(this.handleMediaChanges);
\t\t\t}
\t\t}, {
\t\t\tkey: 'initialize',
\t\t\tvalue: function initialize() {
\t\t\t\tvar mediaQueryList = window.matchMedia(this.mq);
\t\t\t\tthis.handleMediaChanges(mediaQueryList);
\t\t\t\tthis.onWidthChange();
\t\t\t}
\t\t}]);

\t\treturn HoverIntent;
\t}(Intent);

\t/**
  * Setting up localNav hover intent
  * */


\tvar localNav = document.querySelector('.dcf-nav-local');

\tfunction navHandleIn() {
\t\tthis.previousElementSibling.setAttribute('aria-expanded', true);
\t}

\tfunction navHandleOut() {
\t\tthis.previousElementSibling.removeAttribute('aria-expanded');
\t}

\tvar navMQ = 'screen and (min-width: 56.123125em)';
\tvar navIntent = new HoverIntent(localNav, undefined, navMQ, navHandleIn, navHandleOut);

\tnavIntent.initialize();
});
", "wdn/templates_5.1/js/hover_intent.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/hover_intent.js");
    }
}
