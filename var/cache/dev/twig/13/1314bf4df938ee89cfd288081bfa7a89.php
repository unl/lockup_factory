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

/* wdn/templates_5.2/js/band_imagery.js */
class __TwigTemplate_9ff8ab94dbaccf3afb92a298a7793d61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/band_imagery.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/band_imagery.js"));

        // line 1
        echo "/**
 * This plugin supports the scrolling effects on wdn-band imagery
 *
 * Any feature which requires monitoring the scroll depth of the user should
 * user the wdn-scroll-watch class
 *
 * Flipbook over a set of figure elements when the user scrolls between two points
 * class=\"wdn-scroll-watch\" data-lerp=\"flipbook\" data-lerp-flipbook-start=\".start-el\" data-lerp-flipbook-end=\".end-el\"
 * class=\"wdn-scroll-watch locked\"   Use on a group of figures to lock within the viewport while scrolling a band
 * class=\"wdn-scroll\"   Use on the scrollable content adjecent to the locked imagery
 *
 * For the flipbook you must define two points to interpolate between
 * and create the flipbook effect.
 *
 * Required Attributes:
 * data-lerp-{feature}-start Define a secector to start interpolation at
 * data-lerp-{feature}-end   Define a selector to end interpolation at
 * e.g. data-lerp-flipbook-start=\"#lerp-start\" data-lerp-flipbook-end=\"#lerp-end\"
 * will flip through all figures within the flipbook as the user's viewport
 * scrolls between id=\"lerp-start\" and id=\"lerp-end\"
 *
 */

define([
\t'wdn',
\t'jquery',
\t'css!js-css/band_imagery'
], function(WDN, \$) {
\tvar initd = false;
\t
\tvar imageryUpdate = function() {
\t\tvar depth = Math.floor(\$(window).scrollTop());
\t\t\$('.wdn-scroll-watch').each(function(index, value) {

\t\t\tvar \$this = \$(this);

\t\t\tif (\$this.attr('data-lerp')) {
\t\t\t\tvar features = \$this.attr('data-lerp').split(' ');
\t\t\t\tfor (var i=0; i < features.length; i++) {
\t\t\t\t\tvar feature           = features[i],
\t\t\t\t\t\tlerpstart_el      = \$this.attr('data-lerp-' + feature + '-start'),
\t\t\t\t\t\tlerpend_el        = \$this.attr('data-lerp-' + feature + '-end'),
\t\t\t\t\t\tlerp_start_offset = \$(lerpstart_el).offset(),
\t\t\t\t\t\tlerp_end_offset   = \$(lerpend_el).offset(),
\t\t\t\t\t\tpercent \t\t  = lerp(lerp_start_offset, lerp_end_offset, depth);

\t\t\t\t\tif (feature == 'scale') {
\t\t\t\t\t\tscale(\$this, percent);
\t\t\t\t\t}

\t\t\t\t\tif (feature == 'opacity') {
\t\t\t\t\t\topacity(\$this, percent);
\t\t\t\t\t}

\t\t\t\t\tif (feature == 'flipbook') {
\t\t\t\t\t\tflipbook(\$this, percent);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif (\$this.hasClass('locked')) {
\t\t\t\tlockedAside(\$this, depth);
\t\t\t}

\t\t});
\t};

\t/**
\t * A locked aside allows content to be locked aside scrolling content
\t * Typically a figure is used as a backround which is displayed along side scrolling content.
\t *
\t * @var \$this jQuery'd region to lock position of
\t * @var depth What depth we're currently at
\t */
\tvar lockedAside = function(\$this, depth) {
\t\tvar parent        = \$this.parent(),
\t\t\tparent_offset = parent.offset().top,
\t\t\tparent_height = parent.height(),
\t\t\twindow_height = \$(window).height();

\t\tif (depth < parent_offset) {
\t\t\t// Above locked region
\t\t\t\$this.removeClass('fixed bottom');

\t\t} else if ((depth >= parent_offset)
\t\t\t&& ((depth + window_height) < (parent_height + parent_offset)) ) {
\t\t\t// Currently viewing locked region
\t\t\t\$this.css('top', '0');
\t\t\t\$this.addClass('fixed').removeClass('bottom');
\t\t} else {
\t\t\t// Below locked region
\t\t\t\$this.removeClass('fixed');
\t\t\tif (window_height < \$this.height()) {
\t\t\t\t\$this.addClass('bottom');
\t\t\t\t\$this.css('top', 'auto');
\t\t\t} else {
\t\t\t\tvar pinned_top = parent_height - window_height;
\t\t\t\t\$this.css('top', pinned_top+'px');
\t\t\t}
\t\t}
\t};

\t/**
\t * Transforms the scale of an element
\t *
\t * Elements must have two data attributes:
\t * data-scale-start
\t * data-scale-end
\t *
\t * The start and end scales determine what CSS transform to apply.
\t *
\t * @var \$this   jQuery'd element that holds the element to transform
\t * @var percent A float percentage from 0-1 which will adjust the scale
\t */
\tvar scale = function(\$this, percent) {
\t\tvar lerpstart_scale      = \$this.attr('data-scale-start'),
\t\t\tlerpend_scale        = \$this.attr('data-scale-end'),
\t\t\tscale_diff           = lerpend_scale - lerpstart_scale,
\t\t\tshown_scale          = parseFloat(lerpstart_scale) + percent * scale_diff;
\t\t\$this.css('transform', 'scale('+shown_scale+')');
\t};

\t/**
\t * Transforms the opacity of an element
\t *
\t * Elements must have two data attributes:
\t * data-opacity-start
\t * data-opacity-end
\t *
\t * The start and end values determine what CSS opacity to apply.
\t *
\t * @var \$this   jQuery'd element that holds the element to transform
\t * @var percent A float percentage from 0-1 which will adjust the opacity
\t */
\tvar opacity = function(\$this, percent) {
\t\tvar lerpstart_opaci      = \$this.attr('data-opacity-start'),
\t\t\tlerpend_opaci        = \$this.attr('data-opacity-end'),
\t\t\tscale_diff           = lerpend_opaci - lerpstart_opaci,
\t\t\tshown_opaci          = parseFloat(lerpstart_opaci) + percent * scale_diff;
\t\t\$this.css('opacity', shown_opaci);
\t};

\t/**
\t * A flipbook swaps between a series of figures
\t *
\t * @var \$this   jQuery'd element that holds a series of figures
\t * @var percent A float percentage from 0-1 which will adjust which figure to show
\t */
\tvar flipbook = function(\$this, percent) {
\t\tvar shownfigure = 0,
\t\t\t\$figures    = \$this.children('figure');

\t\tif (percent > 0 && percent < 1) {
\t\t\tshownfigure = Math.ceil(\$figures.length * percent) - 1;
\t\t} else if (percent) {
\t\t\tshownfigure = -1;
\t\t}

\t\tvar \$shownFigure = \$figures.eq(shownfigure);
\t\t\$shownFigure.show().end()
\t\t.not(\$shownFigure).hide();

\t\treturn \$shownFigure;

\t};

\t/**
\t * Get the percentage of position between two points v0, v1,
\t *
\t * @return float between 0 and 1
\t */
\tvar lerp = function(lerp_start_offset, lerp_end_offset, depth) {
\t\tif ((depth > lerp_start_offset.top)
\t\t\t&& (depth < lerp_end_offset.top)) {
\t\t\treturn (depth - lerp_start_offset.top)/(lerp_end_offset.top - lerp_start_offset.top);
\t\t} else if (depth > lerp_end_offset.top) {
\t\t\treturn 1;
\t\t}
\t\treturn 0;
\t};

\tvar Plugin = {
\t\tinitialize : function() {
\t\t\t\$('.wdn-scroll-watch').parent().css('position', 'relative');
\t\t\timageryUpdate();
\t\t\t
\t\t\tif (!initd) {
\t\t\t\t\$(window).on(\"load\", imageryUpdate).scroll(function() {
\t\t\t\t\tsetTimeout(imageryUpdate, 50);
\t\t\t\t});
\t\t\t\tinitd = true;
\t\t\t}
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
        return "wdn/templates_5.2/js/band_imagery.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * This plugin supports the scrolling effects on wdn-band imagery
 *
 * Any feature which requires monitoring the scroll depth of the user should
 * user the wdn-scroll-watch class
 *
 * Flipbook over a set of figure elements when the user scrolls between two points
 * class=\"wdn-scroll-watch\" data-lerp=\"flipbook\" data-lerp-flipbook-start=\".start-el\" data-lerp-flipbook-end=\".end-el\"
 * class=\"wdn-scroll-watch locked\"   Use on a group of figures to lock within the viewport while scrolling a band
 * class=\"wdn-scroll\"   Use on the scrollable content adjecent to the locked imagery
 *
 * For the flipbook you must define two points to interpolate between
 * and create the flipbook effect.
 *
 * Required Attributes:
 * data-lerp-{feature}-start Define a secector to start interpolation at
 * data-lerp-{feature}-end   Define a selector to end interpolation at
 * e.g. data-lerp-flipbook-start=\"#lerp-start\" data-lerp-flipbook-end=\"#lerp-end\"
 * will flip through all figures within the flipbook as the user's viewport
 * scrolls between id=\"lerp-start\" and id=\"lerp-end\"
 *
 */

define([
\t'wdn',
\t'jquery',
\t'css!js-css/band_imagery'
], function(WDN, \$) {
\tvar initd = false;
\t
\tvar imageryUpdate = function() {
\t\tvar depth = Math.floor(\$(window).scrollTop());
\t\t\$('.wdn-scroll-watch').each(function(index, value) {

\t\t\tvar \$this = \$(this);

\t\t\tif (\$this.attr('data-lerp')) {
\t\t\t\tvar features = \$this.attr('data-lerp').split(' ');
\t\t\t\tfor (var i=0; i < features.length; i++) {
\t\t\t\t\tvar feature           = features[i],
\t\t\t\t\t\tlerpstart_el      = \$this.attr('data-lerp-' + feature + '-start'),
\t\t\t\t\t\tlerpend_el        = \$this.attr('data-lerp-' + feature + '-end'),
\t\t\t\t\t\tlerp_start_offset = \$(lerpstart_el).offset(),
\t\t\t\t\t\tlerp_end_offset   = \$(lerpend_el).offset(),
\t\t\t\t\t\tpercent \t\t  = lerp(lerp_start_offset, lerp_end_offset, depth);

\t\t\t\t\tif (feature == 'scale') {
\t\t\t\t\t\tscale(\$this, percent);
\t\t\t\t\t}

\t\t\t\t\tif (feature == 'opacity') {
\t\t\t\t\t\topacity(\$this, percent);
\t\t\t\t\t}

\t\t\t\t\tif (feature == 'flipbook') {
\t\t\t\t\t\tflipbook(\$this, percent);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif (\$this.hasClass('locked')) {
\t\t\t\tlockedAside(\$this, depth);
\t\t\t}

\t\t});
\t};

\t/**
\t * A locked aside allows content to be locked aside scrolling content
\t * Typically a figure is used as a backround which is displayed along side scrolling content.
\t *
\t * @var \$this jQuery'd region to lock position of
\t * @var depth What depth we're currently at
\t */
\tvar lockedAside = function(\$this, depth) {
\t\tvar parent        = \$this.parent(),
\t\t\tparent_offset = parent.offset().top,
\t\t\tparent_height = parent.height(),
\t\t\twindow_height = \$(window).height();

\t\tif (depth < parent_offset) {
\t\t\t// Above locked region
\t\t\t\$this.removeClass('fixed bottom');

\t\t} else if ((depth >= parent_offset)
\t\t\t&& ((depth + window_height) < (parent_height + parent_offset)) ) {
\t\t\t// Currently viewing locked region
\t\t\t\$this.css('top', '0');
\t\t\t\$this.addClass('fixed').removeClass('bottom');
\t\t} else {
\t\t\t// Below locked region
\t\t\t\$this.removeClass('fixed');
\t\t\tif (window_height < \$this.height()) {
\t\t\t\t\$this.addClass('bottom');
\t\t\t\t\$this.css('top', 'auto');
\t\t\t} else {
\t\t\t\tvar pinned_top = parent_height - window_height;
\t\t\t\t\$this.css('top', pinned_top+'px');
\t\t\t}
\t\t}
\t};

\t/**
\t * Transforms the scale of an element
\t *
\t * Elements must have two data attributes:
\t * data-scale-start
\t * data-scale-end
\t *
\t * The start and end scales determine what CSS transform to apply.
\t *
\t * @var \$this   jQuery'd element that holds the element to transform
\t * @var percent A float percentage from 0-1 which will adjust the scale
\t */
\tvar scale = function(\$this, percent) {
\t\tvar lerpstart_scale      = \$this.attr('data-scale-start'),
\t\t\tlerpend_scale        = \$this.attr('data-scale-end'),
\t\t\tscale_diff           = lerpend_scale - lerpstart_scale,
\t\t\tshown_scale          = parseFloat(lerpstart_scale) + percent * scale_diff;
\t\t\$this.css('transform', 'scale('+shown_scale+')');
\t};

\t/**
\t * Transforms the opacity of an element
\t *
\t * Elements must have two data attributes:
\t * data-opacity-start
\t * data-opacity-end
\t *
\t * The start and end values determine what CSS opacity to apply.
\t *
\t * @var \$this   jQuery'd element that holds the element to transform
\t * @var percent A float percentage from 0-1 which will adjust the opacity
\t */
\tvar opacity = function(\$this, percent) {
\t\tvar lerpstart_opaci      = \$this.attr('data-opacity-start'),
\t\t\tlerpend_opaci        = \$this.attr('data-opacity-end'),
\t\t\tscale_diff           = lerpend_opaci - lerpstart_opaci,
\t\t\tshown_opaci          = parseFloat(lerpstart_opaci) + percent * scale_diff;
\t\t\$this.css('opacity', shown_opaci);
\t};

\t/**
\t * A flipbook swaps between a series of figures
\t *
\t * @var \$this   jQuery'd element that holds a series of figures
\t * @var percent A float percentage from 0-1 which will adjust which figure to show
\t */
\tvar flipbook = function(\$this, percent) {
\t\tvar shownfigure = 0,
\t\t\t\$figures    = \$this.children('figure');

\t\tif (percent > 0 && percent < 1) {
\t\t\tshownfigure = Math.ceil(\$figures.length * percent) - 1;
\t\t} else if (percent) {
\t\t\tshownfigure = -1;
\t\t}

\t\tvar \$shownFigure = \$figures.eq(shownfigure);
\t\t\$shownFigure.show().end()
\t\t.not(\$shownFigure).hide();

\t\treturn \$shownFigure;

\t};

\t/**
\t * Get the percentage of position between two points v0, v1,
\t *
\t * @return float between 0 and 1
\t */
\tvar lerp = function(lerp_start_offset, lerp_end_offset, depth) {
\t\tif ((depth > lerp_start_offset.top)
\t\t\t&& (depth < lerp_end_offset.top)) {
\t\t\treturn (depth - lerp_start_offset.top)/(lerp_end_offset.top - lerp_start_offset.top);
\t\t} else if (depth > lerp_end_offset.top) {
\t\t\treturn 1;
\t\t}
\t\treturn 0;
\t};

\tvar Plugin = {
\t\tinitialize : function() {
\t\t\t\$('.wdn-scroll-watch').parent().css('position', 'relative');
\t\t\timageryUpdate();
\t\t\t
\t\t\tif (!initd) {
\t\t\t\t\$(window).on(\"load\", imageryUpdate).scroll(function() {
\t\t\t\t\tsetTimeout(imageryUpdate, 50);
\t\t\t\t});
\t\t\t\tinitd = true;
\t\t\t}
\t\t}
\t};

\treturn Plugin;
});
", "wdn/templates_5.2/js/band_imagery.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/band_imagery.js");
    }
}
