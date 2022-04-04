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

/* wdn/templates_5.1/js/plugins/hoverIntent/hoverintent.js */
class __TwigTemplate_85660de6e72bbe66984f3e3ae909b21c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/plugins/hoverIntent/hoverintent.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/plugins/hoverIntent/hoverintent.js"));

        // line 1
        echo ";(function(global) {
\t'use strict';

\tvar hoverintent = function(el, onOver, onOut) {
\t\tvar x, y, pX, pY;
\t\tvar h = {},
\t\t\t\tstate = 0,
\t\t\t\ttimer = 0;

\t\tvar options = {
\t\t\tsensitivity: 7,
\t\t\tinterval: 100,
\t\t\ttimeout: 0
\t\t};

\t\tfunction delay(el, e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tstate = 0;
\t\t\treturn onOut.call(el, e);
\t\t}

\t\tfunction tracker(e) {
\t\t\tx = e.clientX;
\t\t\ty = e.clientY;
\t\t}

\t\tfunction compare(el, e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tif ((Math.abs(pX - x) + Math.abs(pY - y)) < options.sensitivity) {
\t\t\t\tstate = 1;
\t\t\t\treturn onOver.call(el, e);
\t\t\t} else {
\t\t\t\tpX = x;
\t\t\t\tpY = y;
\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tcompare(el, e);
\t\t\t\t}, options.interval);
\t\t\t}
\t\t}

\t\t// Public methods
\t\th.options = function(opt) {
\t\t\toptions = Object.assign({}, options, opt);
\t\t\treturn h;
\t\t};

\t\tfunction dispatchOver(e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tel.removeEventListener('mousemove', tracker, false);

\t\t\tif (state !== 1) {
\t\t\t\tpX = e.clientX;
\t\t\t\tpY = e.clientY;

\t\t\t\tel.addEventListener('mousemove', tracker, false);

\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tcompare(el, e);
\t\t\t\t}, options.interval);
\t\t\t}

\t\t\treturn this;
\t\t}

\t\tfunction dispatchOut(e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tel.removeEventListener('mousemove', tracker, false);

\t\t\tif (state === 1) {
\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tdelay(el, e);
\t\t\t\t}, options.timeout);
\t\t\t}

\t\t\treturn this;
\t\t}

\t\th.remove = function() {
\t\t\tif (!el) return;
\t\t\tel.removeEventListener('mouseover', dispatchOver, false);
\t\t\tel.removeEventListener('mouseout', dispatchOut, false);
\t\t};

\t\tif (el) {
\t\t\tel.addEventListener('mouseover', dispatchOver, false);
\t\t\tel.addEventListener('mouseout', dispatchOut, false);
\t\t}

\t\treturn h;
\t};

\tglobal.hoverintent = hoverintent;
\tif (typeof module !== 'undefined' && module.exports) module.exports = hoverintent;
})(this);
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/plugins/hoverIntent/hoverintent.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(";(function(global) {
\t'use strict';

\tvar hoverintent = function(el, onOver, onOut) {
\t\tvar x, y, pX, pY;
\t\tvar h = {},
\t\t\t\tstate = 0,
\t\t\t\ttimer = 0;

\t\tvar options = {
\t\t\tsensitivity: 7,
\t\t\tinterval: 100,
\t\t\ttimeout: 0
\t\t};

\t\tfunction delay(el, e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tstate = 0;
\t\t\treturn onOut.call(el, e);
\t\t}

\t\tfunction tracker(e) {
\t\t\tx = e.clientX;
\t\t\ty = e.clientY;
\t\t}

\t\tfunction compare(el, e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tif ((Math.abs(pX - x) + Math.abs(pY - y)) < options.sensitivity) {
\t\t\t\tstate = 1;
\t\t\t\treturn onOver.call(el, e);
\t\t\t} else {
\t\t\t\tpX = x;
\t\t\t\tpY = y;
\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tcompare(el, e);
\t\t\t\t}, options.interval);
\t\t\t}
\t\t}

\t\t// Public methods
\t\th.options = function(opt) {
\t\t\toptions = Object.assign({}, options, opt);
\t\t\treturn h;
\t\t};

\t\tfunction dispatchOver(e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tel.removeEventListener('mousemove', tracker, false);

\t\t\tif (state !== 1) {
\t\t\t\tpX = e.clientX;
\t\t\t\tpY = e.clientY;

\t\t\t\tel.addEventListener('mousemove', tracker, false);

\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tcompare(el, e);
\t\t\t\t}, options.interval);
\t\t\t}

\t\t\treturn this;
\t\t}

\t\tfunction dispatchOut(e) {
\t\t\tif (timer) timer = clearTimeout(timer);
\t\t\tel.removeEventListener('mousemove', tracker, false);

\t\t\tif (state === 1) {
\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tdelay(el, e);
\t\t\t\t}, options.timeout);
\t\t\t}

\t\t\treturn this;
\t\t}

\t\th.remove = function() {
\t\t\tif (!el) return;
\t\t\tel.removeEventListener('mouseover', dispatchOver, false);
\t\t\tel.removeEventListener('mouseout', dispatchOut, false);
\t\t};

\t\tif (el) {
\t\t\tel.addEventListener('mouseover', dispatchOver, false);
\t\t\tel.addEventListener('mouseout', dispatchOut, false);
\t\t}

\t\treturn h;
\t};

\tglobal.hoverintent = hoverintent;
\tif (typeof module !== 'undefined' && module.exports) module.exports = hoverintent;
})(this);
", "wdn/templates_5.1/js/plugins/hoverIntent/hoverintent.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/plugins/hoverIntent/hoverintent.js");
    }
}
