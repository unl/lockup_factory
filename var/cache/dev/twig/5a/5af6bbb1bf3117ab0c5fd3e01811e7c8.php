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

/* wdn/templates_4.1/scripts/compressed/plugins/colorbox/jquery.colorbox.js.src.js */
class __TwigTemplate_cc55bb54c68d12ceb71f5c19b5acba8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/colorbox/jquery.colorbox.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/colorbox/jquery.colorbox.js.src.js"));

        // line 1
        echo "/*!
\tColorbox 1.6.3
\tlicense: MIT
\thttp://www.jacklmoore.com/colorbox
*/
(function(factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function (\$) {
\tvar
\t// Default settings object.
\t// See http://jacklmoore.com/colorbox for details.
\tdefaults = {
\t\t// data sources
\t\thtml: false,
\t\tphoto: false,
\t\tiframe: false,
\t\tinline: false,

\t\t// behavior and appearance
\t\ttransition: \"elastic\",
\t\tspeed: 300,
\t\tfadeOut: 300,
\t\twidth: false,
\t\tinitialWidth: \"600\",
\t\tinnerWidth: false,
\t\tmaxWidth: false,
\t\theight: false,
\t\tinitialHeight: \"450\",
\t\tinnerHeight: false,
\t\tmaxHeight: false,
\t\tscalePhotos: true,
\t\tscrolling: true,
\t\topacity: 0.9,
\t\tpreloading: true,
\t\tclassName: false,
\t\toverlayClose: true,
\t\tescKey: true,
\t\tarrowKey: true,
\t\ttop: false,
\t\tbottom: false,
\t\tleft: false,
\t\tright: false,
\t\tfixed: false,
\t\tdata: undefined,
\t\tcloseButton: true,
\t\tfastIframe: true,
\t\topen: false,
\t\treposition: true,
\t\tloop: true,
\t\tslideshow: false,
\t\tslideshowAuto: true,
\t\tslideshowSpeed: 2500,
\t\tslideshowStart: \"start slideshow\",
\t\tslideshowStop: \"stop slideshow\",
\t\tphotoRegex: /\\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\\?).*)?\$/i,

\t\t// alternate image paths for high-res displays
\t\tretinaImage: false,
\t\tretinaUrl: false,
\t\tretinaSuffix: '@2x.\$1',

\t\t// internationalization
\t\tcurrent: \"image {current} of {total}\",
\t\tprevious: \"previous\",
\t\tnext: \"next\",
\t\tclose: \"close\",
\t\txhrError: \"This content failed to load.\",
\t\timgError: \"This image failed to load.\",

\t\t// accessbility
\t\treturnFocus: true,
\t\ttrapFocus: true,

\t\t// callbacks
\t\tonOpen: false,
\t\tonLoad: false,
\t\tonComplete: false,
\t\tonCleanup: false,
\t\tonClosed: false,

\t\trel: function() {
\t\t\treturn this.rel;
\t\t},
\t\thref: function() {
\t\t\t// using this.href would give the absolute url, when the href may have been inteded as a selector (e.g. '#container')
\t\t\treturn \$(this).attr('href');
\t\t},
\t\ttitle: function() {
\t\t\treturn this.title;
\t\t},
\t\tcreateImg: function() {
\t\t\tvar img = new Image();
\t\t\tvar attrs = \$(this).data('cbox-img-attrs');

\t\t\tif (typeof attrs === 'object') {
\t\t\t\t\$.each(attrs, function(key, val){
\t\t\t\t\timg[key] = val;
\t\t\t\t});
\t\t\t}

\t\t\treturn img;
\t\t},
\t\tcreateIframe: function() {
\t\t\tvar iframe = document.createElement('iframe');
\t\t\tvar attrs = \$(this).data('cbox-iframe-attrs');

\t\t\tif (typeof attrs === 'object') {
\t\t\t\t\$.each(attrs, function(key, val){
\t\t\t\t\tiframe[key] = val;
\t\t\t\t});
\t\t\t}

\t\t\tif ('frameBorder' in iframe) {
\t\t\t\tiframe.frameBorder = 0;
\t\t\t}
\t\t\tif ('allowTransparency' in iframe) {
\t\t\t\tiframe.allowTransparency = \"true\";
\t\t\t}
\t\t\tiframe.name = (new Date()).getTime(); // give the iframe a unique name to prevent caching
\t\t\tiframe.allowFullscreen = true;

\t\t\treturn iframe;
\t\t}
\t},

\t// Abstracting the HTML and event identifiers for easy rebranding
\tcolorbox = 'colorbox',
\tprefix = 'cbox',
\tboxElement = prefix + 'Element',

\t// Events
\tevent_open = prefix + '_open',
\tevent_load = prefix + '_load',
\tevent_complete = prefix + '_complete',
\tevent_cleanup = prefix + '_cleanup',
\tevent_closed = prefix + '_closed',
\tevent_purge = prefix + '_purge',

\t// Cached jQuery Object Variables
\t\$overlay,
\t\$box,
\t\$wrap,
\t\$content,
\t\$topBorder,
\t\$leftBorder,
\t\$rightBorder,
\t\$bottomBorder,
\t\$related,
\t\$window,
\t\$loaded,
\t\$loadingBay,
\t\$loadingOverlay,
\t\$title,
\t\$current,
\t\$slideshow,
\t\$next,
\t\$prev,
\t\$close,
\t\$groupControls,
\t\$events = \$('<a/>'), // \$({}) would be prefered, but there is an issue with jQuery 1.4.2

\t// Variables for cached values or use across multiple functions
\tsettings,
\tinterfaceHeight,
\tinterfaceWidth,
\tloadedHeight,
\tloadedWidth,
\tindex,
\tphoto,
\topen,
\tactive,
\tclosing,
\tloadingTimer,
\tpublicMethod,
\tdiv = \"div\",
\trequests = 0,
\tpreviousCSS = {},
\tinit;

\t// ****************
\t// HELPER FUNCTIONS
\t// ****************

\t// Convenience function for creating new jQuery objects
\tfunction \$tag(tag, id, css) {
\t\tvar element = document.createElement(tag);

\t\tif (id) {
\t\t\telement.id = prefix + id;
\t\t}

\t\tif (css) {
\t\t\telement.style.cssText = css;
\t\t}

\t\treturn \$(element);
\t}

\t// Get the window height using innerHeight when available to avoid an issue with iOS
\t// http://bugs.jquery.com/ticket/6724
\tfunction winheight() {
\t\treturn window.innerHeight ? window.innerHeight : \$(window).height();
\t}

\tfunction Settings(element, options) {
\t\tif (options !== Object(options)) {
\t\t\toptions = {};
\t\t}

\t\tthis.cache = {};
\t\tthis.el = element;

\t\tthis.value = function(key) {
\t\t\tvar dataAttr;

\t\t\tif (this.cache[key] === undefined) {
\t\t\t\tdataAttr = \$(this.el).attr('data-cbox-'+key);

\t\t\t\tif (dataAttr !== undefined) {
\t\t\t\t\tthis.cache[key] = dataAttr;
\t\t\t\t} else if (options[key] !== undefined) {
\t\t\t\t\tthis.cache[key] = options[key];
\t\t\t\t} else if (defaults[key] !== undefined) {
\t\t\t\t\tthis.cache[key] = defaults[key];
\t\t\t\t}
\t\t\t}

\t\t\treturn this.cache[key];
\t\t};

\t\tthis.get = function(key) {
\t\t\tvar value = this.value(key);
\t\t\treturn \$.isFunction(value) ? value.call(this.el, this) : value;
\t\t};
\t}

\t// Determine the next and previous members in a group.
\tfunction getIndex(increment) {
\t\tvar
\t\tmax = \$related.length,
\t\tnewIndex = (index + increment) % max;

\t\treturn (newIndex < 0) ? max + newIndex : newIndex;
\t}

\t// Convert '%' and 'px' values to integers
\tfunction setSize(size, dimension) {
\t\treturn Math.round((/%/.test(size) ? ((dimension === 'x' ? \$window.width() : winheight()) / 100) : 1) * parseInt(size, 10));
\t}

\t// Checks an href to see if it is a photo.
\t// There is a force photo option (photo: true) for hrefs that cannot be matched by the regex.
\tfunction isImage(settings, url) {
\t\treturn settings.get('photo') || settings.get('photoRegex').test(url);
\t}

\tfunction retinaUrl(settings, url) {
\t\treturn settings.get('retinaUrl') && window.devicePixelRatio > 1 ? url.replace(settings.get('photoRegex'), settings.get('retinaSuffix')) : url;
\t}

\tfunction trapFocus(e) {
\t\tif ('contains' in \$box[0] && !\$box[0].contains(e.target) && e.target !== \$overlay[0]) {
\t\t\te.stopPropagation();
\t\t\t\$box.focus();
\t\t}
\t}

\tfunction setClass(str) {
\t\tif (setClass.str !== str) {
\t\t\t\$box.add(\$overlay).removeClass(setClass.str).addClass(str);
\t\t\tsetClass.str = str;
\t\t}
\t}

\tfunction getRelated(rel) {
\t\tindex = 0;

\t\tif (rel && rel !== false && rel !== 'nofollow') {
\t\t\t\$related = \$('.' + boxElement).filter(function () {
\t\t\t\tvar options = \$.data(this, colorbox);
\t\t\t\tvar settings = new Settings(this, options);
\t\t\t\treturn (settings.get('rel') === rel);
\t\t\t});
\t\t\tindex = \$related.index(settings.el);

\t\t\t// Check direct calls to Colorbox.
\t\t\tif (index === -1) {
\t\t\t\t\$related = \$related.add(settings.el);
\t\t\t\tindex = \$related.length - 1;
\t\t\t}
\t\t} else {
\t\t\t\$related = \$(settings.el);
\t\t}
\t}

\tfunction trigger(event) {
\t\t// for external use
\t\t\$(document).trigger(event);
\t\t// for internal use
\t\t\$events.triggerHandler(event);
\t}

\tvar slideshow = (function(){
\t\tvar active,
\t\t\tclassName = prefix + \"Slideshow_\",
\t\t\tclick = \"click.\" + prefix,
\t\t\ttimeOut;

\t\tfunction clear () {
\t\t\tclearTimeout(timeOut);
\t\t}

\t\tfunction set() {
\t\t\tif (settings.get('loop') || \$related[index + 1]) {
\t\t\t\tclear();
\t\t\t\ttimeOut = setTimeout(publicMethod.next, settings.get('slideshowSpeed'));
\t\t\t}
\t\t}

\t\tfunction start() {
\t\t\t\$slideshow
\t\t\t\t.html(settings.get('slideshowStop'))
\t\t\t\t.unbind(click)
\t\t\t\t.one(click, stop);

\t\t\t\$events
\t\t\t\t.bind(event_complete, set)
\t\t\t\t.bind(event_load, clear);

\t\t\t\$box.removeClass(className + \"off\").addClass(className + \"on\");
\t\t}

\t\tfunction stop() {
\t\t\tclear();

\t\t\t\$events
\t\t\t\t.unbind(event_complete, set)
\t\t\t\t.unbind(event_load, clear);

\t\t\t\$slideshow
\t\t\t\t.html(settings.get('slideshowStart'))
\t\t\t\t.unbind(click)
\t\t\t\t.one(click, function () {
\t\t\t\t\tpublicMethod.next();
\t\t\t\t\tstart();
\t\t\t\t});

\t\t\t\$box.removeClass(className + \"on\").addClass(className + \"off\");
\t\t}

\t\tfunction reset() {
\t\t\tactive = false;
\t\t\t\$slideshow.hide();
\t\t\tclear();
\t\t\t\$events
\t\t\t\t.unbind(event_complete, set)
\t\t\t\t.unbind(event_load, clear);
\t\t\t\$box.removeClass(className + \"off \" + className + \"on\");
\t\t}

\t\treturn function(){
\t\t\tif (active) {
\t\t\t\tif (!settings.get('slideshow')) {
\t\t\t\t\t\$events.unbind(event_cleanup, reset);
\t\t\t\t\treset();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif (settings.get('slideshow') && \$related[1]) {
\t\t\t\t\tactive = true;
\t\t\t\t\t\$events.one(event_cleanup, reset);
\t\t\t\t\tif (settings.get('slideshowAuto')) {
\t\t\t\t\t\tstart();
\t\t\t\t\t} else {
\t\t\t\t\t\tstop();
\t\t\t\t\t}
\t\t\t\t\t\$slideshow.show();
\t\t\t\t}
\t\t\t}
\t\t};

\t}());


\tfunction launch(element) {
\t\tvar options;

\t\tif (!closing) {

\t\t\toptions = \$(element).data(colorbox);

\t\t\tsettings = new Settings(element, options);

\t\t\tgetRelated(settings.get('rel'));

\t\t\tif (!open) {
\t\t\t\topen = active = true; // Prevents the page-change action from queuing up if the visitor holds down the left or right keys.

\t\t\t\tsetClass(settings.get('className'));

\t\t\t\t// Show colorbox so the sizes can be calculated in older versions of jQuery
\t\t\t\t\$box.css({visibility:'hidden', display:'block', opacity:''});

\t\t\t\t\$loaded = \$tag(div, 'LoadedContent', 'width:0; height:0; overflow:hidden; visibility:hidden');
\t\t\t\t\$content.css({width:'', height:''}).append(\$loaded);

\t\t\t\t// Cache values needed for size calculations
\t\t\t\tinterfaceHeight = \$topBorder.height() + \$bottomBorder.height() + \$content.outerHeight(true) - \$content.height();
\t\t\t\tinterfaceWidth = \$leftBorder.width() + \$rightBorder.width() + \$content.outerWidth(true) - \$content.width();
\t\t\t\tloadedHeight = \$loaded.outerHeight(true);
\t\t\t\tloadedWidth = \$loaded.outerWidth(true);

\t\t\t\t// Opens inital empty Colorbox prior to content being loaded.
\t\t\t\tvar initialWidth = setSize(settings.get('initialWidth'), 'x');
\t\t\t\tvar initialHeight = setSize(settings.get('initialHeight'), 'y');
\t\t\t\tvar maxWidth = settings.get('maxWidth');
\t\t\t\tvar maxHeight = settings.get('maxHeight');

\t\t\t\tsettings.w = Math.max((maxWidth !== false ? Math.min(initialWidth, setSize(maxWidth, 'x')) : initialWidth) - loadedWidth - interfaceWidth, 0);
\t\t\t\tsettings.h = Math.max((maxHeight !== false ? Math.min(initialHeight, setSize(maxHeight, 'y')) : initialHeight) - loadedHeight - interfaceHeight, 0);

\t\t\t\t\$loaded.css({width:'', height:settings.h});
\t\t\t\tpublicMethod.position();

\t\t\t\ttrigger(event_open);
\t\t\t\tsettings.get('onOpen');

\t\t\t\t\$groupControls.add(\$title).hide();

\t\t\t\t\$box.focus();

\t\t\t\tif (settings.get('trapFocus')) {
\t\t\t\t\t// Confine focus to the modal
\t\t\t\t\t// Uses event capturing that is not supported in IE8-
\t\t\t\t\tif (document.addEventListener) {

\t\t\t\t\t\tdocument.addEventListener('focus', trapFocus, true);

\t\t\t\t\t\t\$events.one(event_closed, function () {
\t\t\t\t\t\t\tdocument.removeEventListener('focus', trapFocus, true);
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Return focus on closing
\t\t\t\tif (settings.get('returnFocus')) {
\t\t\t\t\t\$events.one(event_closed, function () {
\t\t\t\t\t\t\$(settings.el).focus();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}

\t\t\tvar opacity = parseFloat(settings.get('opacity'));
\t\t\t\$overlay.css({
\t\t\t\topacity: opacity === opacity ? opacity : '',
\t\t\t\tcursor: settings.get('overlayClose') ? 'pointer' : '',
\t\t\t\tvisibility: 'visible'
\t\t\t}).show();

\t\t\tif (settings.get('closeButton')) {
\t\t\t\t\$close.html(settings.get('close')).appendTo(\$content);
\t\t\t} else {
\t\t\t\t\$close.appendTo('<div/>'); // replace with .detach() when dropping jQuery < 1.4
\t\t\t}

\t\t\tload();
\t\t}
\t}

\t// Colorbox's markup needs to be added to the DOM prior to being called
\t// so that the browser will go ahead and load the CSS background images.
\tfunction appendHTML() {
\t\tif (!\$box) {
\t\t\tinit = false;
\t\t\t\$window = \$(window);
\t\t\t\$box = \$tag(div).attr({
\t\t\t\tid: colorbox,
\t\t\t\t'class': \$.support.opacity === false ? prefix + 'IE' : '', // class for optional IE8 & lower targeted CSS.
\t\t\t\trole: 'dialog',
\t\t\t\ttabindex: '-1'
\t\t\t}).hide();
\t\t\t\$overlay = \$tag(div, \"Overlay\").hide();
\t\t\t\$loadingOverlay = \$([\$tag(div, \"LoadingOverlay\")[0],\$tag(div, \"LoadingGraphic\")[0]]);
\t\t\t\$wrap = \$tag(div, \"Wrapper\");
\t\t\t\$content = \$tag(div, \"Content\").append(
\t\t\t\t\$title = \$tag(div, \"Title\"),
\t\t\t\t\$current = \$tag(div, \"Current\"),
\t\t\t\t\$prev = \$('<button type=\"button\"/>').attr({id:prefix+'Previous', title:'Previous'}),
\t\t\t\t\$next = \$('<button type=\"button\"/>').attr({id:prefix+'Next', title:'Next'}),
\t\t\t\t\$slideshow = \$tag('button', \"Slideshow\").attr({title:'Slideshow'}),
\t\t\t\t\$loadingOverlay
\t\t\t);

\t\t\t\$close = \$('<button type=\"button\"/>').attr({id:prefix+'Close'});

\t\t\t\$wrap.append( // The 3x3 Grid that makes up Colorbox
\t\t\t\t\$tag(div).append(
\t\t\t\t\t\$tag(div, \"TopLeft\"),
\t\t\t\t\t\$topBorder = \$tag(div, \"TopCenter\"),
\t\t\t\t\t\$tag(div, \"TopRight\")
\t\t\t\t),
\t\t\t\t\$tag(div, false, 'clear:left').append(
\t\t\t\t\t\$leftBorder = \$tag(div, \"MiddleLeft\"),
\t\t\t\t\t\$content,
\t\t\t\t\t\$rightBorder = \$tag(div, \"MiddleRight\")
\t\t\t\t),
\t\t\t\t\$tag(div, false, 'clear:left').append(
\t\t\t\t\t\$tag(div, \"BottomLeft\"),
\t\t\t\t\t\$bottomBorder = \$tag(div, \"BottomCenter\"),
\t\t\t\t\t\$tag(div, \"BottomRight\")
\t\t\t\t)
\t\t\t).find('div div').css({'float': 'left'});

\t\t\t\$loadingBay = \$tag(div, false, 'position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;');

\t\t\t\$groupControls = \$next.add(\$prev).add(\$current).add(\$slideshow);
\t\t}
\t\tif (document.body && !\$box.parent().length) {
\t\t\t\$(document.body).append(\$overlay, \$box.append(\$wrap, \$loadingBay));
\t\t}
\t}

\t// Add Colorbox's event bindings
\tfunction addBindings() {
\t\tfunction clickHandler(e) {
\t\t\t// ignore non-left-mouse-clicks and clicks modified with ctrl / command, shift, or alt.
\t\t\t// See: http://jacklmoore.com/notes/click-events/
\t\t\tif (!(e.which > 1 || e.shiftKey || e.altKey || e.metaKey || e.ctrlKey)) {
\t\t\t\te.preventDefault();
\t\t\t\tlaunch(this);
\t\t\t}
\t\t}

\t\tif (\$box) {
\t\t\tif (!init) {
\t\t\t\tinit = true;

\t\t\t\t// Anonymous functions here keep the public method from being cached, thereby allowing them to be redefined on the fly.
\t\t\t\t\$next.click(function () {
\t\t\t\t\tpublicMethod.next();
\t\t\t\t});
\t\t\t\t\$prev.click(function () {
\t\t\t\t\tpublicMethod.prev();
\t\t\t\t});
\t\t\t\t\$close.click(function () {
\t\t\t\t\tpublicMethod.close();
\t\t\t\t});
\t\t\t\t\$overlay.click(function () {
\t\t\t\t\tif (settings.get('overlayClose')) {
\t\t\t\t\t\tpublicMethod.close();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// Key Bindings
\t\t\t\t\$(document).bind('keydown.' + prefix, function (e) {
\t\t\t\t\tvar key = e.keyCode;
\t\t\t\t\tif (open && settings.get('escKey') && key === 27) {
\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\tpublicMethod.close();
\t\t\t\t\t}
\t\t\t\t\tif (open && settings.get('arrowKey') && \$related[1] && !e.altKey) {
\t\t\t\t\t\tif (key === 37) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\$prev.click();
\t\t\t\t\t\t} else if (key === 39) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\$next.click();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif (\$.isFunction(\$.fn.on)) {
\t\t\t\t\t// For jQuery 1.7+
\t\t\t\t\t\$(document).on('click.'+prefix, '.'+boxElement, clickHandler);
\t\t\t\t} else {
\t\t\t\t\t// For jQuery 1.3.x -> 1.6.x
\t\t\t\t\t// This code is never reached in jQuery 1.9, so do not contact me about 'live' being removed.
\t\t\t\t\t// This is not here for jQuery 1.9, it's here for legacy users.
\t\t\t\t\t\$('.'+boxElement).live('click.'+prefix, clickHandler);
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\t// Don't do anything if Colorbox already exists.
\tif (\$[colorbox]) {
\t\treturn;
\t}

\t// Append the HTML when the DOM loads
\t\$(appendHTML);


\t// ****************
\t// PUBLIC FUNCTIONS
\t// Usage format: \$.colorbox.close();
\t// Usage from within an iframe: parent.jQuery.colorbox.close();
\t// ****************

\tpublicMethod = \$.fn[colorbox] = \$[colorbox] = function (options, callback) {
\t\tvar settings;
\t\tvar \$obj = this;

\t\toptions = options || {};

\t\tif (\$.isFunction(\$obj)) { // assume a call to \$.colorbox
\t\t\t\$obj = \$('<a/>');
\t\t\toptions.open = true;
\t\t}

\t\tif (!\$obj[0]) { // colorbox being applied to empty collection
\t\t\treturn \$obj;
\t\t}

\t\tappendHTML();

\t\tif (addBindings()) {

\t\t\tif (callback) {
\t\t\t\toptions.onComplete = callback;
\t\t\t}

\t\t\t\$obj.each(function () {
\t\t\t\tvar old = \$.data(this, colorbox) || {};
\t\t\t\t\$.data(this, colorbox, \$.extend(old, options));
\t\t\t}).addClass(boxElement);

\t\t\tsettings = new Settings(\$obj[0], options);

\t\t\tif (settings.get('open')) {
\t\t\t\tlaunch(\$obj[0]);
\t\t\t}
\t\t}

\t\treturn \$obj;
\t};

\tpublicMethod.position = function (speed, loadedCallback) {
\t\tvar
\t\tcss,
\t\ttop = 0,
\t\tleft = 0,
\t\toffset = \$box.offset(),
\t\tscrollTop,
\t\tscrollLeft;

\t\t\$window.unbind('resize.' + prefix);

\t\t// remove the modal so that it doesn't influence the document width/height
\t\t\$box.css({top: -9e4, left: -9e4});

\t\tscrollTop = \$window.scrollTop();
\t\tscrollLeft = \$window.scrollLeft();

\t\tif (settings.get('fixed')) {
\t\t\toffset.top -= scrollTop;
\t\t\toffset.left -= scrollLeft;
\t\t\t\$box.css({position: 'fixed'});
\t\t} else {
\t\t\ttop = scrollTop;
\t\t\tleft = scrollLeft;
\t\t\t\$box.css({position: 'absolute'});
\t\t}

\t\t// keeps the top and left positions within the browser's viewport.
\t\tif (settings.get('right') !== false) {
\t\t\tleft += Math.max(\$window.width() - settings.w - loadedWidth - interfaceWidth - setSize(settings.get('right'), 'x'), 0);
\t\t} else if (settings.get('left') !== false) {
\t\t\tleft += setSize(settings.get('left'), 'x');
\t\t} else {
\t\t\tleft += Math.round(Math.max(\$window.width() - settings.w - loadedWidth - interfaceWidth, 0) / 2);
\t\t}

\t\tif (settings.get('bottom') !== false) {
\t\t\ttop += Math.max(winheight() - settings.h - loadedHeight - interfaceHeight - setSize(settings.get('bottom'), 'y'), 0);
\t\t} else if (settings.get('top') !== false) {
\t\t\ttop += setSize(settings.get('top'), 'y');
\t\t} else {
\t\t\ttop += Math.round(Math.max(winheight() - settings.h - loadedHeight - interfaceHeight, 0) / 2);
\t\t}

\t\t\$box.css({top: offset.top, left: offset.left, visibility:'visible'});

\t\t// this gives the wrapper plenty of breathing room so it's floated contents can move around smoothly,
\t\t// but it has to be shrank down around the size of div#colorbox when it's done.  If not,
\t\t// it can invoke an obscure IE bug when using iframes.
\t\t\$wrap[0].style.width = \$wrap[0].style.height = \"9999px\";

\t\tfunction modalDimensions() {
\t\t\t\$topBorder[0].style.width = \$bottomBorder[0].style.width = \$content[0].style.width = (parseInt(\$box[0].style.width,10) - interfaceWidth)+'px';
\t\t\t\$content[0].style.height = \$leftBorder[0].style.height = \$rightBorder[0].style.height = (parseInt(\$box[0].style.height,10) - interfaceHeight)+'px';
\t\t}

\t\tcss = {width: settings.w + loadedWidth + interfaceWidth, height: settings.h + loadedHeight + interfaceHeight, top: top, left: left};

\t\t// setting the speed to 0 if the content hasn't changed size or position
\t\tif (speed) {
\t\t\tvar tempSpeed = 0;
\t\t\t\$.each(css, function(i){
\t\t\t\tif (css[i] !== previousCSS[i]) {
\t\t\t\t\ttempSpeed = speed;
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t});
\t\t\tspeed = tempSpeed;
\t\t}

\t\tpreviousCSS = css;

\t\tif (!speed) {
\t\t\t\$box.css(css);
\t\t}

\t\t\$box.dequeue().animate(css, {
\t\t\tduration: speed || 0,
\t\t\tcomplete: function () {
\t\t\t\tmodalDimensions();

\t\t\t\tactive = false;

\t\t\t\t// shrink the wrapper down to exactly the size of colorbox to avoid a bug in IE's iframe implementation.
\t\t\t\t\$wrap[0].style.width = (settings.w + loadedWidth + interfaceWidth) + \"px\";
\t\t\t\t\$wrap[0].style.height = (settings.h + loadedHeight + interfaceHeight) + \"px\";

\t\t\t\tif (settings.get('reposition')) {
\t\t\t\t\tsetTimeout(function () {  // small delay before binding onresize due to an IE8 bug.
\t\t\t\t\t\t\$window.bind('resize.' + prefix, publicMethod.position);
\t\t\t\t\t}, 1);
\t\t\t\t}

\t\t\t\tif (\$.isFunction(loadedCallback)) {
\t\t\t\t\tloadedCallback();
\t\t\t\t}
\t\t\t},
\t\t\tstep: modalDimensions
\t\t});
\t};

\tpublicMethod.resize = function (options) {
\t\tvar scrolltop;

\t\tif (open) {
\t\t\toptions = options || {};

\t\t\tif (options.width) {
\t\t\t\tsettings.w = setSize(options.width, 'x') - loadedWidth - interfaceWidth;
\t\t\t}

\t\t\tif (options.innerWidth) {
\t\t\t\tsettings.w = setSize(options.innerWidth, 'x');
\t\t\t}

\t\t\t\$loaded.css({width: settings.w});

\t\t\tif (options.height) {
\t\t\t\tsettings.h = setSize(options.height, 'y') - loadedHeight - interfaceHeight;
\t\t\t}

\t\t\tif (options.innerHeight) {
\t\t\t\tsettings.h = setSize(options.innerHeight, 'y');
\t\t\t}

\t\t\tif (!options.innerHeight && !options.height) {
\t\t\t\tscrolltop = \$loaded.scrollTop();
\t\t\t\t\$loaded.css({height: \"auto\"});
\t\t\t\tsettings.h = \$loaded.height();
\t\t\t}

\t\t\t\$loaded.css({height: settings.h});

\t\t\tif(scrolltop) {
\t\t\t\t\$loaded.scrollTop(scrolltop);
\t\t\t}

\t\t\tpublicMethod.position(settings.get('transition') === \"none\" ? 0 : settings.get('speed'));
\t\t}
\t};

\tpublicMethod.prep = function (object) {
\t\tif (!open) {
\t\t\treturn;
\t\t}

\t\tvar callback, speed = settings.get('transition') === \"none\" ? 0 : settings.get('speed');

\t\t\$loaded.remove();

\t\t\$loaded = \$tag(div, 'LoadedContent').append(object);

\t\tfunction getWidth() {
\t\t\tsettings.w = settings.w || \$loaded.width();
\t\t\tsettings.w = settings.mw && settings.mw < settings.w ? settings.mw : settings.w;
\t\t\treturn settings.w;
\t\t}
\t\tfunction getHeight() {
\t\t\tsettings.h = settings.h || \$loaded.height();
\t\t\tsettings.h = settings.mh && settings.mh < settings.h ? settings.mh : settings.h;
\t\t\treturn settings.h;
\t\t}

\t\t\$loaded.hide()
\t\t.appendTo(\$loadingBay.show())// content has to be appended to the DOM for accurate size calculations.
\t\t.css({width: getWidth(), overflow: settings.get('scrolling') ? 'auto' : 'hidden'})
\t\t.css({height: getHeight()})// sets the height independently from the width in case the new width influences the value of height.
\t\t.prependTo(\$content);

\t\t\$loadingBay.hide();

\t\t// floating the IMG removes the bottom line-height and fixed a problem where IE miscalculates the width of the parent element as 100% of the document width.

\t\t\$(photo).css({'float': 'none'});

\t\tsetClass(settings.get('className'));

\t\tcallback = function () {
\t\t\tvar total = \$related.length,
\t\t\t\tiframe,
\t\t\t\tcomplete;

\t\t\tif (!open) {
\t\t\t\treturn;
\t\t\t}

\t\t\tfunction removeFilter() { // Needed for IE8 in versions of jQuery prior to 1.7.2
\t\t\t\tif (\$.support.opacity === false) {
\t\t\t\t\t\$box[0].style.removeAttribute('filter');
\t\t\t\t}
\t\t\t}

\t\t\tcomplete = function () {
\t\t\t\tclearTimeout(loadingTimer);
\t\t\t\t\$loadingOverlay.hide();
\t\t\t\ttrigger(event_complete);
\t\t\t\tsettings.get('onComplete');
\t\t\t};


\t\t\t\$title.html(settings.get('title')).show();
\t\t\t\$loaded.show();

\t\t\tif (total > 1) { // handle grouping
\t\t\t\tif (typeof settings.get('current') === \"string\") {
\t\t\t\t\t\$current.html(settings.get('current').replace('{current}', index + 1).replace('{total}', total)).show();
\t\t\t\t}

\t\t\t\t\$next[(settings.get('loop') || index < total - 1) ? \"show\" : \"hide\"]().html(settings.get('next'));
\t\t\t\t\$prev[(settings.get('loop') || index) ? \"show\" : \"hide\"]().html(settings.get('previous'));

\t\t\t\tslideshow();

\t\t\t\t// Preloads images within a rel group
\t\t\t\tif (settings.get('preloading')) {
\t\t\t\t\t\$.each([getIndex(-1), getIndex(1)], function(){
\t\t\t\t\t\tvar img,
\t\t\t\t\t\t\ti = \$related[this],
\t\t\t\t\t\t\tsettings = new Settings(i, \$.data(i, colorbox)),
\t\t\t\t\t\t\tsrc = settings.get('href');

\t\t\t\t\t\tif (src && isImage(settings, src)) {
\t\t\t\t\t\t\tsrc = retinaUrl(settings, src);
\t\t\t\t\t\t\timg = document.createElement('img');
\t\t\t\t\t\t\timg.src = src;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$groupControls.hide();
\t\t\t}

\t\t\tif (settings.get('iframe')) {

\t\t\t\tiframe = settings.get('createIframe');

\t\t\t\tif (!settings.get('scrolling')) {
\t\t\t\t\tiframe.scrolling = \"no\";
\t\t\t\t}

\t\t\t\t\$(iframe)
\t\t\t\t\t.attr({
\t\t\t\t\t\tsrc: settings.get('href'),
\t\t\t\t\t\t'class': prefix + 'Iframe'
\t\t\t\t\t})
\t\t\t\t\t.one('load', complete)
\t\t\t\t\t.appendTo(\$loaded);

\t\t\t\t\$events.one(event_purge, function () {
\t\t\t\t\tiframe.src = \"//about:blank\";
\t\t\t\t});

\t\t\t\tif (settings.get('fastIframe')) {
\t\t\t\t\t\$(iframe).trigger('load');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcomplete();
\t\t\t}

\t\t\tif (settings.get('transition') === 'fade') {
\t\t\t\t\$box.fadeTo(speed, 1, removeFilter);
\t\t\t} else {
\t\t\t\tremoveFilter();
\t\t\t}
\t\t};

\t\tif (settings.get('transition') === 'fade') {
\t\t\t\$box.fadeTo(speed, 0, function () {
\t\t\t\tpublicMethod.position(0, callback);
\t\t\t});
\t\t} else {
\t\t\tpublicMethod.position(speed, callback);
\t\t}
\t};

\tfunction load () {
\t\tvar href, setResize, prep = publicMethod.prep, \$inline, request = ++requests;

\t\tactive = true;

\t\tphoto = false;

\t\ttrigger(event_purge);
\t\ttrigger(event_load);
\t\tsettings.get('onLoad');

\t\tsettings.h = settings.get('height') ?
\t\t\t\tsetSize(settings.get('height'), 'y') - loadedHeight - interfaceHeight :
\t\t\t\tsettings.get('innerHeight') && setSize(settings.get('innerHeight'), 'y');

\t\tsettings.w = settings.get('width') ?
\t\t\t\tsetSize(settings.get('width'), 'x') - loadedWidth - interfaceWidth :
\t\t\t\tsettings.get('innerWidth') && setSize(settings.get('innerWidth'), 'x');

\t\t// Sets the minimum dimensions for use in image scaling
\t\tsettings.mw = settings.w;
\t\tsettings.mh = settings.h;

\t\t// Re-evaluate the minimum width and height based on maxWidth and maxHeight values.
\t\t// If the width or height exceed the maxWidth or maxHeight, use the maximum values instead.
\t\tif (settings.get('maxWidth')) {
\t\t\tsettings.mw = setSize(settings.get('maxWidth'), 'x') - loadedWidth - interfaceWidth;
\t\t\tsettings.mw = settings.w && settings.w < settings.mw ? settings.w : settings.mw;
\t\t}
\t\tif (settings.get('maxHeight')) {
\t\t\tsettings.mh = setSize(settings.get('maxHeight'), 'y') - loadedHeight - interfaceHeight;
\t\t\tsettings.mh = settings.h && settings.h < settings.mh ? settings.h : settings.mh;
\t\t}

\t\thref = settings.get('href');

\t\tloadingTimer = setTimeout(function () {
\t\t\t\$loadingOverlay.show();
\t\t}, 100);

\t\tif (settings.get('inline')) {
\t\t\tvar \$target = \$(href);
\t\t\t// Inserts an empty placeholder where inline content is being pulled from.
\t\t\t// An event is bound to put inline content back when Colorbox closes or loads new content.
\t\t\t\$inline = \$('<div>').hide().insertBefore(\$target);

\t\t\t\$events.one(event_purge, function () {
\t\t\t\t\$inline.replaceWith(\$target);
\t\t\t});

\t\t\tprep(\$target);
\t\t} else if (settings.get('iframe')) {
\t\t\t// IFrame element won't be added to the DOM until it is ready to be displayed,
\t\t\t// to avoid problems with DOM-ready JS that might be trying to run in that iframe.
\t\t\tprep(\" \");
\t\t} else if (settings.get('html')) {
\t\t\tprep(settings.get('html'));
\t\t} else if (isImage(settings, href)) {

\t\t\thref = retinaUrl(settings, href);

\t\t\tphoto = settings.get('createImg');

\t\t\t\$(photo)
\t\t\t.addClass(prefix + 'Photo')
\t\t\t.bind('error.'+prefix,function () {
\t\t\t\tprep(\$tag(div, 'Error').html(settings.get('imgError')));
\t\t\t})
\t\t\t.one('load', function () {
\t\t\t\tif (request !== requests) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// A small pause because some browsers will occassionaly report a
\t\t\t\t// img.width and img.height of zero immediately after the img.onload fires
\t\t\t\tsetTimeout(function(){
\t\t\t\t\tvar percent;

\t\t\t\t\tif (settings.get('retinaImage') && window.devicePixelRatio > 1) {
\t\t\t\t\t\tphoto.height = photo.height / window.devicePixelRatio;
\t\t\t\t\t\tphoto.width = photo.width / window.devicePixelRatio;
\t\t\t\t\t}

\t\t\t\t\tif (settings.get('scalePhotos')) {
\t\t\t\t\t\tsetResize = function () {
\t\t\t\t\t\t\tphoto.height -= photo.height * percent;
\t\t\t\t\t\t\tphoto.width -= photo.width * percent;
\t\t\t\t\t\t};
\t\t\t\t\t\tif (settings.mw && photo.width > settings.mw) {
\t\t\t\t\t\t\tpercent = (photo.width - settings.mw) / photo.width;
\t\t\t\t\t\t\tsetResize();
\t\t\t\t\t\t}
\t\t\t\t\t\tif (settings.mh && photo.height > settings.mh) {
\t\t\t\t\t\t\tpercent = (photo.height - settings.mh) / photo.height;
\t\t\t\t\t\t\tsetResize();
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (settings.h) {
\t\t\t\t\t\tphoto.style.marginTop = Math.max(settings.mh - photo.height, 0) / 2 + 'px';
\t\t\t\t\t}

\t\t\t\t\tif (\$related[1] && (settings.get('loop') || \$related[index + 1])) {
\t\t\t\t\t\tphoto.style.cursor = 'pointer';

\t\t\t\t\t\t\$(photo).bind('click.'+prefix, function () {
\t\t\t\t\t\t\tpublicMethod.next();
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tphoto.style.width = photo.width + 'px';
\t\t\t\t\tphoto.style.height = photo.height + 'px';
\t\t\t\t\tprep(photo);
\t\t\t\t}, 1);
\t\t\t});

\t\t\tphoto.src = href;

\t\t} else if (href) {
\t\t\t\$loadingBay.load(href, settings.get('data'), function (data, status) {
\t\t\t\tif (request === requests) {
\t\t\t\t\tprep(status === 'error' ? \$tag(div, 'Error').html(settings.get('xhrError')) : \$(this).contents());
\t\t\t\t}
\t\t\t});
\t\t}
\t}

\t// Navigates to the next page/image in a set.
\tpublicMethod.next = function () {
\t\tif (!active && \$related[1] && (settings.get('loop') || \$related[index + 1])) {
\t\t\tindex = getIndex(1);
\t\t\tlaunch(\$related[index]);
\t\t}
\t};

\tpublicMethod.prev = function () {
\t\tif (!active && \$related[1] && (settings.get('loop') || index)) {
\t\t\tindex = getIndex(-1);
\t\t\tlaunch(\$related[index]);
\t\t}
\t};

\t// Note: to use this within an iframe use the following format: parent.jQuery.colorbox.close();
\tpublicMethod.close = function () {
\t\tif (open && !closing) {

\t\t\tclosing = true;
\t\t\topen = false;
\t\t\ttrigger(event_cleanup);
\t\t\tsettings.get('onCleanup');
\t\t\t\$window.unbind('.' + prefix);
\t\t\t\$overlay.fadeTo(settings.get('fadeOut') || 0, 0);

\t\t\t\$box.stop().fadeTo(settings.get('fadeOut') || 0, 0, function () {
\t\t\t\t\$box.hide();
\t\t\t\t\$overlay.hide();
\t\t\t\ttrigger(event_purge);
\t\t\t\t\$loaded.remove();

\t\t\t\tsetTimeout(function () {
\t\t\t\t\tclosing = false;
\t\t\t\t\ttrigger(event_closed);
\t\t\t\t\tsettings.get('onClosed');
\t\t\t\t}, 1);
\t\t\t});
\t\t}
\t};

\t// Removes changes Colorbox made to the document, but does not remove the plugin.
\tpublicMethod.remove = function () {
\t\tif (!\$box) { return; }

\t\t\$box.stop();
\t\t\$[colorbox].close();
\t\t\$box.stop(false, true).remove();
\t\t\$overlay.remove();
\t\tclosing = false;
\t\t\$box = null;
\t\t\$('.' + boxElement)
\t\t\t.removeData(colorbox)
\t\t\t.removeClass(boxElement);

\t\t\$(document).unbind('click.'+prefix).unbind('keydown.'+prefix);
\t};

\t// A method for fetching the current element Colorbox is referencing.
\t// returns a jQuery object.
\tpublicMethod.element = function () {
\t\treturn \$(settings.el);
\t};

\tpublicMethod.settings = defaults;

}));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/colorbox/jquery.colorbox.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
\tColorbox 1.6.3
\tlicense: MIT
\thttp://www.jacklmoore.com/colorbox
*/
(function(factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function (\$) {
\tvar
\t// Default settings object.
\t// See http://jacklmoore.com/colorbox for details.
\tdefaults = {
\t\t// data sources
\t\thtml: false,
\t\tphoto: false,
\t\tiframe: false,
\t\tinline: false,

\t\t// behavior and appearance
\t\ttransition: \"elastic\",
\t\tspeed: 300,
\t\tfadeOut: 300,
\t\twidth: false,
\t\tinitialWidth: \"600\",
\t\tinnerWidth: false,
\t\tmaxWidth: false,
\t\theight: false,
\t\tinitialHeight: \"450\",
\t\tinnerHeight: false,
\t\tmaxHeight: false,
\t\tscalePhotos: true,
\t\tscrolling: true,
\t\topacity: 0.9,
\t\tpreloading: true,
\t\tclassName: false,
\t\toverlayClose: true,
\t\tescKey: true,
\t\tarrowKey: true,
\t\ttop: false,
\t\tbottom: false,
\t\tleft: false,
\t\tright: false,
\t\tfixed: false,
\t\tdata: undefined,
\t\tcloseButton: true,
\t\tfastIframe: true,
\t\topen: false,
\t\treposition: true,
\t\tloop: true,
\t\tslideshow: false,
\t\tslideshowAuto: true,
\t\tslideshowSpeed: 2500,
\t\tslideshowStart: \"start slideshow\",
\t\tslideshowStop: \"stop slideshow\",
\t\tphotoRegex: /\\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\\?).*)?\$/i,

\t\t// alternate image paths for high-res displays
\t\tretinaImage: false,
\t\tretinaUrl: false,
\t\tretinaSuffix: '@2x.\$1',

\t\t// internationalization
\t\tcurrent: \"image {current} of {total}\",
\t\tprevious: \"previous\",
\t\tnext: \"next\",
\t\tclose: \"close\",
\t\txhrError: \"This content failed to load.\",
\t\timgError: \"This image failed to load.\",

\t\t// accessbility
\t\treturnFocus: true,
\t\ttrapFocus: true,

\t\t// callbacks
\t\tonOpen: false,
\t\tonLoad: false,
\t\tonComplete: false,
\t\tonCleanup: false,
\t\tonClosed: false,

\t\trel: function() {
\t\t\treturn this.rel;
\t\t},
\t\thref: function() {
\t\t\t// using this.href would give the absolute url, when the href may have been inteded as a selector (e.g. '#container')
\t\t\treturn \$(this).attr('href');
\t\t},
\t\ttitle: function() {
\t\t\treturn this.title;
\t\t},
\t\tcreateImg: function() {
\t\t\tvar img = new Image();
\t\t\tvar attrs = \$(this).data('cbox-img-attrs');

\t\t\tif (typeof attrs === 'object') {
\t\t\t\t\$.each(attrs, function(key, val){
\t\t\t\t\timg[key] = val;
\t\t\t\t});
\t\t\t}

\t\t\treturn img;
\t\t},
\t\tcreateIframe: function() {
\t\t\tvar iframe = document.createElement('iframe');
\t\t\tvar attrs = \$(this).data('cbox-iframe-attrs');

\t\t\tif (typeof attrs === 'object') {
\t\t\t\t\$.each(attrs, function(key, val){
\t\t\t\t\tiframe[key] = val;
\t\t\t\t});
\t\t\t}

\t\t\tif ('frameBorder' in iframe) {
\t\t\t\tiframe.frameBorder = 0;
\t\t\t}
\t\t\tif ('allowTransparency' in iframe) {
\t\t\t\tiframe.allowTransparency = \"true\";
\t\t\t}
\t\t\tiframe.name = (new Date()).getTime(); // give the iframe a unique name to prevent caching
\t\t\tiframe.allowFullscreen = true;

\t\t\treturn iframe;
\t\t}
\t},

\t// Abstracting the HTML and event identifiers for easy rebranding
\tcolorbox = 'colorbox',
\tprefix = 'cbox',
\tboxElement = prefix + 'Element',

\t// Events
\tevent_open = prefix + '_open',
\tevent_load = prefix + '_load',
\tevent_complete = prefix + '_complete',
\tevent_cleanup = prefix + '_cleanup',
\tevent_closed = prefix + '_closed',
\tevent_purge = prefix + '_purge',

\t// Cached jQuery Object Variables
\t\$overlay,
\t\$box,
\t\$wrap,
\t\$content,
\t\$topBorder,
\t\$leftBorder,
\t\$rightBorder,
\t\$bottomBorder,
\t\$related,
\t\$window,
\t\$loaded,
\t\$loadingBay,
\t\$loadingOverlay,
\t\$title,
\t\$current,
\t\$slideshow,
\t\$next,
\t\$prev,
\t\$close,
\t\$groupControls,
\t\$events = \$('<a/>'), // \$({}) would be prefered, but there is an issue with jQuery 1.4.2

\t// Variables for cached values or use across multiple functions
\tsettings,
\tinterfaceHeight,
\tinterfaceWidth,
\tloadedHeight,
\tloadedWidth,
\tindex,
\tphoto,
\topen,
\tactive,
\tclosing,
\tloadingTimer,
\tpublicMethod,
\tdiv = \"div\",
\trequests = 0,
\tpreviousCSS = {},
\tinit;

\t// ****************
\t// HELPER FUNCTIONS
\t// ****************

\t// Convenience function for creating new jQuery objects
\tfunction \$tag(tag, id, css) {
\t\tvar element = document.createElement(tag);

\t\tif (id) {
\t\t\telement.id = prefix + id;
\t\t}

\t\tif (css) {
\t\t\telement.style.cssText = css;
\t\t}

\t\treturn \$(element);
\t}

\t// Get the window height using innerHeight when available to avoid an issue with iOS
\t// http://bugs.jquery.com/ticket/6724
\tfunction winheight() {
\t\treturn window.innerHeight ? window.innerHeight : \$(window).height();
\t}

\tfunction Settings(element, options) {
\t\tif (options !== Object(options)) {
\t\t\toptions = {};
\t\t}

\t\tthis.cache = {};
\t\tthis.el = element;

\t\tthis.value = function(key) {
\t\t\tvar dataAttr;

\t\t\tif (this.cache[key] === undefined) {
\t\t\t\tdataAttr = \$(this.el).attr('data-cbox-'+key);

\t\t\t\tif (dataAttr !== undefined) {
\t\t\t\t\tthis.cache[key] = dataAttr;
\t\t\t\t} else if (options[key] !== undefined) {
\t\t\t\t\tthis.cache[key] = options[key];
\t\t\t\t} else if (defaults[key] !== undefined) {
\t\t\t\t\tthis.cache[key] = defaults[key];
\t\t\t\t}
\t\t\t}

\t\t\treturn this.cache[key];
\t\t};

\t\tthis.get = function(key) {
\t\t\tvar value = this.value(key);
\t\t\treturn \$.isFunction(value) ? value.call(this.el, this) : value;
\t\t};
\t}

\t// Determine the next and previous members in a group.
\tfunction getIndex(increment) {
\t\tvar
\t\tmax = \$related.length,
\t\tnewIndex = (index + increment) % max;

\t\treturn (newIndex < 0) ? max + newIndex : newIndex;
\t}

\t// Convert '%' and 'px' values to integers
\tfunction setSize(size, dimension) {
\t\treturn Math.round((/%/.test(size) ? ((dimension === 'x' ? \$window.width() : winheight()) / 100) : 1) * parseInt(size, 10));
\t}

\t// Checks an href to see if it is a photo.
\t// There is a force photo option (photo: true) for hrefs that cannot be matched by the regex.
\tfunction isImage(settings, url) {
\t\treturn settings.get('photo') || settings.get('photoRegex').test(url);
\t}

\tfunction retinaUrl(settings, url) {
\t\treturn settings.get('retinaUrl') && window.devicePixelRatio > 1 ? url.replace(settings.get('photoRegex'), settings.get('retinaSuffix')) : url;
\t}

\tfunction trapFocus(e) {
\t\tif ('contains' in \$box[0] && !\$box[0].contains(e.target) && e.target !== \$overlay[0]) {
\t\t\te.stopPropagation();
\t\t\t\$box.focus();
\t\t}
\t}

\tfunction setClass(str) {
\t\tif (setClass.str !== str) {
\t\t\t\$box.add(\$overlay).removeClass(setClass.str).addClass(str);
\t\t\tsetClass.str = str;
\t\t}
\t}

\tfunction getRelated(rel) {
\t\tindex = 0;

\t\tif (rel && rel !== false && rel !== 'nofollow') {
\t\t\t\$related = \$('.' + boxElement).filter(function () {
\t\t\t\tvar options = \$.data(this, colorbox);
\t\t\t\tvar settings = new Settings(this, options);
\t\t\t\treturn (settings.get('rel') === rel);
\t\t\t});
\t\t\tindex = \$related.index(settings.el);

\t\t\t// Check direct calls to Colorbox.
\t\t\tif (index === -1) {
\t\t\t\t\$related = \$related.add(settings.el);
\t\t\t\tindex = \$related.length - 1;
\t\t\t}
\t\t} else {
\t\t\t\$related = \$(settings.el);
\t\t}
\t}

\tfunction trigger(event) {
\t\t// for external use
\t\t\$(document).trigger(event);
\t\t// for internal use
\t\t\$events.triggerHandler(event);
\t}

\tvar slideshow = (function(){
\t\tvar active,
\t\t\tclassName = prefix + \"Slideshow_\",
\t\t\tclick = \"click.\" + prefix,
\t\t\ttimeOut;

\t\tfunction clear () {
\t\t\tclearTimeout(timeOut);
\t\t}

\t\tfunction set() {
\t\t\tif (settings.get('loop') || \$related[index + 1]) {
\t\t\t\tclear();
\t\t\t\ttimeOut = setTimeout(publicMethod.next, settings.get('slideshowSpeed'));
\t\t\t}
\t\t}

\t\tfunction start() {
\t\t\t\$slideshow
\t\t\t\t.html(settings.get('slideshowStop'))
\t\t\t\t.unbind(click)
\t\t\t\t.one(click, stop);

\t\t\t\$events
\t\t\t\t.bind(event_complete, set)
\t\t\t\t.bind(event_load, clear);

\t\t\t\$box.removeClass(className + \"off\").addClass(className + \"on\");
\t\t}

\t\tfunction stop() {
\t\t\tclear();

\t\t\t\$events
\t\t\t\t.unbind(event_complete, set)
\t\t\t\t.unbind(event_load, clear);

\t\t\t\$slideshow
\t\t\t\t.html(settings.get('slideshowStart'))
\t\t\t\t.unbind(click)
\t\t\t\t.one(click, function () {
\t\t\t\t\tpublicMethod.next();
\t\t\t\t\tstart();
\t\t\t\t});

\t\t\t\$box.removeClass(className + \"on\").addClass(className + \"off\");
\t\t}

\t\tfunction reset() {
\t\t\tactive = false;
\t\t\t\$slideshow.hide();
\t\t\tclear();
\t\t\t\$events
\t\t\t\t.unbind(event_complete, set)
\t\t\t\t.unbind(event_load, clear);
\t\t\t\$box.removeClass(className + \"off \" + className + \"on\");
\t\t}

\t\treturn function(){
\t\t\tif (active) {
\t\t\t\tif (!settings.get('slideshow')) {
\t\t\t\t\t\$events.unbind(event_cleanup, reset);
\t\t\t\t\treset();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif (settings.get('slideshow') && \$related[1]) {
\t\t\t\t\tactive = true;
\t\t\t\t\t\$events.one(event_cleanup, reset);
\t\t\t\t\tif (settings.get('slideshowAuto')) {
\t\t\t\t\t\tstart();
\t\t\t\t\t} else {
\t\t\t\t\t\tstop();
\t\t\t\t\t}
\t\t\t\t\t\$slideshow.show();
\t\t\t\t}
\t\t\t}
\t\t};

\t}());


\tfunction launch(element) {
\t\tvar options;

\t\tif (!closing) {

\t\t\toptions = \$(element).data(colorbox);

\t\t\tsettings = new Settings(element, options);

\t\t\tgetRelated(settings.get('rel'));

\t\t\tif (!open) {
\t\t\t\topen = active = true; // Prevents the page-change action from queuing up if the visitor holds down the left or right keys.

\t\t\t\tsetClass(settings.get('className'));

\t\t\t\t// Show colorbox so the sizes can be calculated in older versions of jQuery
\t\t\t\t\$box.css({visibility:'hidden', display:'block', opacity:''});

\t\t\t\t\$loaded = \$tag(div, 'LoadedContent', 'width:0; height:0; overflow:hidden; visibility:hidden');
\t\t\t\t\$content.css({width:'', height:''}).append(\$loaded);

\t\t\t\t// Cache values needed for size calculations
\t\t\t\tinterfaceHeight = \$topBorder.height() + \$bottomBorder.height() + \$content.outerHeight(true) - \$content.height();
\t\t\t\tinterfaceWidth = \$leftBorder.width() + \$rightBorder.width() + \$content.outerWidth(true) - \$content.width();
\t\t\t\tloadedHeight = \$loaded.outerHeight(true);
\t\t\t\tloadedWidth = \$loaded.outerWidth(true);

\t\t\t\t// Opens inital empty Colorbox prior to content being loaded.
\t\t\t\tvar initialWidth = setSize(settings.get('initialWidth'), 'x');
\t\t\t\tvar initialHeight = setSize(settings.get('initialHeight'), 'y');
\t\t\t\tvar maxWidth = settings.get('maxWidth');
\t\t\t\tvar maxHeight = settings.get('maxHeight');

\t\t\t\tsettings.w = Math.max((maxWidth !== false ? Math.min(initialWidth, setSize(maxWidth, 'x')) : initialWidth) - loadedWidth - interfaceWidth, 0);
\t\t\t\tsettings.h = Math.max((maxHeight !== false ? Math.min(initialHeight, setSize(maxHeight, 'y')) : initialHeight) - loadedHeight - interfaceHeight, 0);

\t\t\t\t\$loaded.css({width:'', height:settings.h});
\t\t\t\tpublicMethod.position();

\t\t\t\ttrigger(event_open);
\t\t\t\tsettings.get('onOpen');

\t\t\t\t\$groupControls.add(\$title).hide();

\t\t\t\t\$box.focus();

\t\t\t\tif (settings.get('trapFocus')) {
\t\t\t\t\t// Confine focus to the modal
\t\t\t\t\t// Uses event capturing that is not supported in IE8-
\t\t\t\t\tif (document.addEventListener) {

\t\t\t\t\t\tdocument.addEventListener('focus', trapFocus, true);

\t\t\t\t\t\t\$events.one(event_closed, function () {
\t\t\t\t\t\t\tdocument.removeEventListener('focus', trapFocus, true);
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Return focus on closing
\t\t\t\tif (settings.get('returnFocus')) {
\t\t\t\t\t\$events.one(event_closed, function () {
\t\t\t\t\t\t\$(settings.el).focus();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}

\t\t\tvar opacity = parseFloat(settings.get('opacity'));
\t\t\t\$overlay.css({
\t\t\t\topacity: opacity === opacity ? opacity : '',
\t\t\t\tcursor: settings.get('overlayClose') ? 'pointer' : '',
\t\t\t\tvisibility: 'visible'
\t\t\t}).show();

\t\t\tif (settings.get('closeButton')) {
\t\t\t\t\$close.html(settings.get('close')).appendTo(\$content);
\t\t\t} else {
\t\t\t\t\$close.appendTo('<div/>'); // replace with .detach() when dropping jQuery < 1.4
\t\t\t}

\t\t\tload();
\t\t}
\t}

\t// Colorbox's markup needs to be added to the DOM prior to being called
\t// so that the browser will go ahead and load the CSS background images.
\tfunction appendHTML() {
\t\tif (!\$box) {
\t\t\tinit = false;
\t\t\t\$window = \$(window);
\t\t\t\$box = \$tag(div).attr({
\t\t\t\tid: colorbox,
\t\t\t\t'class': \$.support.opacity === false ? prefix + 'IE' : '', // class for optional IE8 & lower targeted CSS.
\t\t\t\trole: 'dialog',
\t\t\t\ttabindex: '-1'
\t\t\t}).hide();
\t\t\t\$overlay = \$tag(div, \"Overlay\").hide();
\t\t\t\$loadingOverlay = \$([\$tag(div, \"LoadingOverlay\")[0],\$tag(div, \"LoadingGraphic\")[0]]);
\t\t\t\$wrap = \$tag(div, \"Wrapper\");
\t\t\t\$content = \$tag(div, \"Content\").append(
\t\t\t\t\$title = \$tag(div, \"Title\"),
\t\t\t\t\$current = \$tag(div, \"Current\"),
\t\t\t\t\$prev = \$('<button type=\"button\"/>').attr({id:prefix+'Previous', title:'Previous'}),
\t\t\t\t\$next = \$('<button type=\"button\"/>').attr({id:prefix+'Next', title:'Next'}),
\t\t\t\t\$slideshow = \$tag('button', \"Slideshow\").attr({title:'Slideshow'}),
\t\t\t\t\$loadingOverlay
\t\t\t);

\t\t\t\$close = \$('<button type=\"button\"/>').attr({id:prefix+'Close'});

\t\t\t\$wrap.append( // The 3x3 Grid that makes up Colorbox
\t\t\t\t\$tag(div).append(
\t\t\t\t\t\$tag(div, \"TopLeft\"),
\t\t\t\t\t\$topBorder = \$tag(div, \"TopCenter\"),
\t\t\t\t\t\$tag(div, \"TopRight\")
\t\t\t\t),
\t\t\t\t\$tag(div, false, 'clear:left').append(
\t\t\t\t\t\$leftBorder = \$tag(div, \"MiddleLeft\"),
\t\t\t\t\t\$content,
\t\t\t\t\t\$rightBorder = \$tag(div, \"MiddleRight\")
\t\t\t\t),
\t\t\t\t\$tag(div, false, 'clear:left').append(
\t\t\t\t\t\$tag(div, \"BottomLeft\"),
\t\t\t\t\t\$bottomBorder = \$tag(div, \"BottomCenter\"),
\t\t\t\t\t\$tag(div, \"BottomRight\")
\t\t\t\t)
\t\t\t).find('div div').css({'float': 'left'});

\t\t\t\$loadingBay = \$tag(div, false, 'position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;');

\t\t\t\$groupControls = \$next.add(\$prev).add(\$current).add(\$slideshow);
\t\t}
\t\tif (document.body && !\$box.parent().length) {
\t\t\t\$(document.body).append(\$overlay, \$box.append(\$wrap, \$loadingBay));
\t\t}
\t}

\t// Add Colorbox's event bindings
\tfunction addBindings() {
\t\tfunction clickHandler(e) {
\t\t\t// ignore non-left-mouse-clicks and clicks modified with ctrl / command, shift, or alt.
\t\t\t// See: http://jacklmoore.com/notes/click-events/
\t\t\tif (!(e.which > 1 || e.shiftKey || e.altKey || e.metaKey || e.ctrlKey)) {
\t\t\t\te.preventDefault();
\t\t\t\tlaunch(this);
\t\t\t}
\t\t}

\t\tif (\$box) {
\t\t\tif (!init) {
\t\t\t\tinit = true;

\t\t\t\t// Anonymous functions here keep the public method from being cached, thereby allowing them to be redefined on the fly.
\t\t\t\t\$next.click(function () {
\t\t\t\t\tpublicMethod.next();
\t\t\t\t});
\t\t\t\t\$prev.click(function () {
\t\t\t\t\tpublicMethod.prev();
\t\t\t\t});
\t\t\t\t\$close.click(function () {
\t\t\t\t\tpublicMethod.close();
\t\t\t\t});
\t\t\t\t\$overlay.click(function () {
\t\t\t\t\tif (settings.get('overlayClose')) {
\t\t\t\t\t\tpublicMethod.close();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// Key Bindings
\t\t\t\t\$(document).bind('keydown.' + prefix, function (e) {
\t\t\t\t\tvar key = e.keyCode;
\t\t\t\t\tif (open && settings.get('escKey') && key === 27) {
\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\tpublicMethod.close();
\t\t\t\t\t}
\t\t\t\t\tif (open && settings.get('arrowKey') && \$related[1] && !e.altKey) {
\t\t\t\t\t\tif (key === 37) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\$prev.click();
\t\t\t\t\t\t} else if (key === 39) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\$next.click();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif (\$.isFunction(\$.fn.on)) {
\t\t\t\t\t// For jQuery 1.7+
\t\t\t\t\t\$(document).on('click.'+prefix, '.'+boxElement, clickHandler);
\t\t\t\t} else {
\t\t\t\t\t// For jQuery 1.3.x -> 1.6.x
\t\t\t\t\t// This code is never reached in jQuery 1.9, so do not contact me about 'live' being removed.
\t\t\t\t\t// This is not here for jQuery 1.9, it's here for legacy users.
\t\t\t\t\t\$('.'+boxElement).live('click.'+prefix, clickHandler);
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\t// Don't do anything if Colorbox already exists.
\tif (\$[colorbox]) {
\t\treturn;
\t}

\t// Append the HTML when the DOM loads
\t\$(appendHTML);


\t// ****************
\t// PUBLIC FUNCTIONS
\t// Usage format: \$.colorbox.close();
\t// Usage from within an iframe: parent.jQuery.colorbox.close();
\t// ****************

\tpublicMethod = \$.fn[colorbox] = \$[colorbox] = function (options, callback) {
\t\tvar settings;
\t\tvar \$obj = this;

\t\toptions = options || {};

\t\tif (\$.isFunction(\$obj)) { // assume a call to \$.colorbox
\t\t\t\$obj = \$('<a/>');
\t\t\toptions.open = true;
\t\t}

\t\tif (!\$obj[0]) { // colorbox being applied to empty collection
\t\t\treturn \$obj;
\t\t}

\t\tappendHTML();

\t\tif (addBindings()) {

\t\t\tif (callback) {
\t\t\t\toptions.onComplete = callback;
\t\t\t}

\t\t\t\$obj.each(function () {
\t\t\t\tvar old = \$.data(this, colorbox) || {};
\t\t\t\t\$.data(this, colorbox, \$.extend(old, options));
\t\t\t}).addClass(boxElement);

\t\t\tsettings = new Settings(\$obj[0], options);

\t\t\tif (settings.get('open')) {
\t\t\t\tlaunch(\$obj[0]);
\t\t\t}
\t\t}

\t\treturn \$obj;
\t};

\tpublicMethod.position = function (speed, loadedCallback) {
\t\tvar
\t\tcss,
\t\ttop = 0,
\t\tleft = 0,
\t\toffset = \$box.offset(),
\t\tscrollTop,
\t\tscrollLeft;

\t\t\$window.unbind('resize.' + prefix);

\t\t// remove the modal so that it doesn't influence the document width/height
\t\t\$box.css({top: -9e4, left: -9e4});

\t\tscrollTop = \$window.scrollTop();
\t\tscrollLeft = \$window.scrollLeft();

\t\tif (settings.get('fixed')) {
\t\t\toffset.top -= scrollTop;
\t\t\toffset.left -= scrollLeft;
\t\t\t\$box.css({position: 'fixed'});
\t\t} else {
\t\t\ttop = scrollTop;
\t\t\tleft = scrollLeft;
\t\t\t\$box.css({position: 'absolute'});
\t\t}

\t\t// keeps the top and left positions within the browser's viewport.
\t\tif (settings.get('right') !== false) {
\t\t\tleft += Math.max(\$window.width() - settings.w - loadedWidth - interfaceWidth - setSize(settings.get('right'), 'x'), 0);
\t\t} else if (settings.get('left') !== false) {
\t\t\tleft += setSize(settings.get('left'), 'x');
\t\t} else {
\t\t\tleft += Math.round(Math.max(\$window.width() - settings.w - loadedWidth - interfaceWidth, 0) / 2);
\t\t}

\t\tif (settings.get('bottom') !== false) {
\t\t\ttop += Math.max(winheight() - settings.h - loadedHeight - interfaceHeight - setSize(settings.get('bottom'), 'y'), 0);
\t\t} else if (settings.get('top') !== false) {
\t\t\ttop += setSize(settings.get('top'), 'y');
\t\t} else {
\t\t\ttop += Math.round(Math.max(winheight() - settings.h - loadedHeight - interfaceHeight, 0) / 2);
\t\t}

\t\t\$box.css({top: offset.top, left: offset.left, visibility:'visible'});

\t\t// this gives the wrapper plenty of breathing room so it's floated contents can move around smoothly,
\t\t// but it has to be shrank down around the size of div#colorbox when it's done.  If not,
\t\t// it can invoke an obscure IE bug when using iframes.
\t\t\$wrap[0].style.width = \$wrap[0].style.height = \"9999px\";

\t\tfunction modalDimensions() {
\t\t\t\$topBorder[0].style.width = \$bottomBorder[0].style.width = \$content[0].style.width = (parseInt(\$box[0].style.width,10) - interfaceWidth)+'px';
\t\t\t\$content[0].style.height = \$leftBorder[0].style.height = \$rightBorder[0].style.height = (parseInt(\$box[0].style.height,10) - interfaceHeight)+'px';
\t\t}

\t\tcss = {width: settings.w + loadedWidth + interfaceWidth, height: settings.h + loadedHeight + interfaceHeight, top: top, left: left};

\t\t// setting the speed to 0 if the content hasn't changed size or position
\t\tif (speed) {
\t\t\tvar tempSpeed = 0;
\t\t\t\$.each(css, function(i){
\t\t\t\tif (css[i] !== previousCSS[i]) {
\t\t\t\t\ttempSpeed = speed;
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t});
\t\t\tspeed = tempSpeed;
\t\t}

\t\tpreviousCSS = css;

\t\tif (!speed) {
\t\t\t\$box.css(css);
\t\t}

\t\t\$box.dequeue().animate(css, {
\t\t\tduration: speed || 0,
\t\t\tcomplete: function () {
\t\t\t\tmodalDimensions();

\t\t\t\tactive = false;

\t\t\t\t// shrink the wrapper down to exactly the size of colorbox to avoid a bug in IE's iframe implementation.
\t\t\t\t\$wrap[0].style.width = (settings.w + loadedWidth + interfaceWidth) + \"px\";
\t\t\t\t\$wrap[0].style.height = (settings.h + loadedHeight + interfaceHeight) + \"px\";

\t\t\t\tif (settings.get('reposition')) {
\t\t\t\t\tsetTimeout(function () {  // small delay before binding onresize due to an IE8 bug.
\t\t\t\t\t\t\$window.bind('resize.' + prefix, publicMethod.position);
\t\t\t\t\t}, 1);
\t\t\t\t}

\t\t\t\tif (\$.isFunction(loadedCallback)) {
\t\t\t\t\tloadedCallback();
\t\t\t\t}
\t\t\t},
\t\t\tstep: modalDimensions
\t\t});
\t};

\tpublicMethod.resize = function (options) {
\t\tvar scrolltop;

\t\tif (open) {
\t\t\toptions = options || {};

\t\t\tif (options.width) {
\t\t\t\tsettings.w = setSize(options.width, 'x') - loadedWidth - interfaceWidth;
\t\t\t}

\t\t\tif (options.innerWidth) {
\t\t\t\tsettings.w = setSize(options.innerWidth, 'x');
\t\t\t}

\t\t\t\$loaded.css({width: settings.w});

\t\t\tif (options.height) {
\t\t\t\tsettings.h = setSize(options.height, 'y') - loadedHeight - interfaceHeight;
\t\t\t}

\t\t\tif (options.innerHeight) {
\t\t\t\tsettings.h = setSize(options.innerHeight, 'y');
\t\t\t}

\t\t\tif (!options.innerHeight && !options.height) {
\t\t\t\tscrolltop = \$loaded.scrollTop();
\t\t\t\t\$loaded.css({height: \"auto\"});
\t\t\t\tsettings.h = \$loaded.height();
\t\t\t}

\t\t\t\$loaded.css({height: settings.h});

\t\t\tif(scrolltop) {
\t\t\t\t\$loaded.scrollTop(scrolltop);
\t\t\t}

\t\t\tpublicMethod.position(settings.get('transition') === \"none\" ? 0 : settings.get('speed'));
\t\t}
\t};

\tpublicMethod.prep = function (object) {
\t\tif (!open) {
\t\t\treturn;
\t\t}

\t\tvar callback, speed = settings.get('transition') === \"none\" ? 0 : settings.get('speed');

\t\t\$loaded.remove();

\t\t\$loaded = \$tag(div, 'LoadedContent').append(object);

\t\tfunction getWidth() {
\t\t\tsettings.w = settings.w || \$loaded.width();
\t\t\tsettings.w = settings.mw && settings.mw < settings.w ? settings.mw : settings.w;
\t\t\treturn settings.w;
\t\t}
\t\tfunction getHeight() {
\t\t\tsettings.h = settings.h || \$loaded.height();
\t\t\tsettings.h = settings.mh && settings.mh < settings.h ? settings.mh : settings.h;
\t\t\treturn settings.h;
\t\t}

\t\t\$loaded.hide()
\t\t.appendTo(\$loadingBay.show())// content has to be appended to the DOM for accurate size calculations.
\t\t.css({width: getWidth(), overflow: settings.get('scrolling') ? 'auto' : 'hidden'})
\t\t.css({height: getHeight()})// sets the height independently from the width in case the new width influences the value of height.
\t\t.prependTo(\$content);

\t\t\$loadingBay.hide();

\t\t// floating the IMG removes the bottom line-height and fixed a problem where IE miscalculates the width of the parent element as 100% of the document width.

\t\t\$(photo).css({'float': 'none'});

\t\tsetClass(settings.get('className'));

\t\tcallback = function () {
\t\t\tvar total = \$related.length,
\t\t\t\tiframe,
\t\t\t\tcomplete;

\t\t\tif (!open) {
\t\t\t\treturn;
\t\t\t}

\t\t\tfunction removeFilter() { // Needed for IE8 in versions of jQuery prior to 1.7.2
\t\t\t\tif (\$.support.opacity === false) {
\t\t\t\t\t\$box[0].style.removeAttribute('filter');
\t\t\t\t}
\t\t\t}

\t\t\tcomplete = function () {
\t\t\t\tclearTimeout(loadingTimer);
\t\t\t\t\$loadingOverlay.hide();
\t\t\t\ttrigger(event_complete);
\t\t\t\tsettings.get('onComplete');
\t\t\t};


\t\t\t\$title.html(settings.get('title')).show();
\t\t\t\$loaded.show();

\t\t\tif (total > 1) { // handle grouping
\t\t\t\tif (typeof settings.get('current') === \"string\") {
\t\t\t\t\t\$current.html(settings.get('current').replace('{current}', index + 1).replace('{total}', total)).show();
\t\t\t\t}

\t\t\t\t\$next[(settings.get('loop') || index < total - 1) ? \"show\" : \"hide\"]().html(settings.get('next'));
\t\t\t\t\$prev[(settings.get('loop') || index) ? \"show\" : \"hide\"]().html(settings.get('previous'));

\t\t\t\tslideshow();

\t\t\t\t// Preloads images within a rel group
\t\t\t\tif (settings.get('preloading')) {
\t\t\t\t\t\$.each([getIndex(-1), getIndex(1)], function(){
\t\t\t\t\t\tvar img,
\t\t\t\t\t\t\ti = \$related[this],
\t\t\t\t\t\t\tsettings = new Settings(i, \$.data(i, colorbox)),
\t\t\t\t\t\t\tsrc = settings.get('href');

\t\t\t\t\t\tif (src && isImage(settings, src)) {
\t\t\t\t\t\t\tsrc = retinaUrl(settings, src);
\t\t\t\t\t\t\timg = document.createElement('img');
\t\t\t\t\t\t\timg.src = src;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$groupControls.hide();
\t\t\t}

\t\t\tif (settings.get('iframe')) {

\t\t\t\tiframe = settings.get('createIframe');

\t\t\t\tif (!settings.get('scrolling')) {
\t\t\t\t\tiframe.scrolling = \"no\";
\t\t\t\t}

\t\t\t\t\$(iframe)
\t\t\t\t\t.attr({
\t\t\t\t\t\tsrc: settings.get('href'),
\t\t\t\t\t\t'class': prefix + 'Iframe'
\t\t\t\t\t})
\t\t\t\t\t.one('load', complete)
\t\t\t\t\t.appendTo(\$loaded);

\t\t\t\t\$events.one(event_purge, function () {
\t\t\t\t\tiframe.src = \"//about:blank\";
\t\t\t\t});

\t\t\t\tif (settings.get('fastIframe')) {
\t\t\t\t\t\$(iframe).trigger('load');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcomplete();
\t\t\t}

\t\t\tif (settings.get('transition') === 'fade') {
\t\t\t\t\$box.fadeTo(speed, 1, removeFilter);
\t\t\t} else {
\t\t\t\tremoveFilter();
\t\t\t}
\t\t};

\t\tif (settings.get('transition') === 'fade') {
\t\t\t\$box.fadeTo(speed, 0, function () {
\t\t\t\tpublicMethod.position(0, callback);
\t\t\t});
\t\t} else {
\t\t\tpublicMethod.position(speed, callback);
\t\t}
\t};

\tfunction load () {
\t\tvar href, setResize, prep = publicMethod.prep, \$inline, request = ++requests;

\t\tactive = true;

\t\tphoto = false;

\t\ttrigger(event_purge);
\t\ttrigger(event_load);
\t\tsettings.get('onLoad');

\t\tsettings.h = settings.get('height') ?
\t\t\t\tsetSize(settings.get('height'), 'y') - loadedHeight - interfaceHeight :
\t\t\t\tsettings.get('innerHeight') && setSize(settings.get('innerHeight'), 'y');

\t\tsettings.w = settings.get('width') ?
\t\t\t\tsetSize(settings.get('width'), 'x') - loadedWidth - interfaceWidth :
\t\t\t\tsettings.get('innerWidth') && setSize(settings.get('innerWidth'), 'x');

\t\t// Sets the minimum dimensions for use in image scaling
\t\tsettings.mw = settings.w;
\t\tsettings.mh = settings.h;

\t\t// Re-evaluate the minimum width and height based on maxWidth and maxHeight values.
\t\t// If the width or height exceed the maxWidth or maxHeight, use the maximum values instead.
\t\tif (settings.get('maxWidth')) {
\t\t\tsettings.mw = setSize(settings.get('maxWidth'), 'x') - loadedWidth - interfaceWidth;
\t\t\tsettings.mw = settings.w && settings.w < settings.mw ? settings.w : settings.mw;
\t\t}
\t\tif (settings.get('maxHeight')) {
\t\t\tsettings.mh = setSize(settings.get('maxHeight'), 'y') - loadedHeight - interfaceHeight;
\t\t\tsettings.mh = settings.h && settings.h < settings.mh ? settings.h : settings.mh;
\t\t}

\t\thref = settings.get('href');

\t\tloadingTimer = setTimeout(function () {
\t\t\t\$loadingOverlay.show();
\t\t}, 100);

\t\tif (settings.get('inline')) {
\t\t\tvar \$target = \$(href);
\t\t\t// Inserts an empty placeholder where inline content is being pulled from.
\t\t\t// An event is bound to put inline content back when Colorbox closes or loads new content.
\t\t\t\$inline = \$('<div>').hide().insertBefore(\$target);

\t\t\t\$events.one(event_purge, function () {
\t\t\t\t\$inline.replaceWith(\$target);
\t\t\t});

\t\t\tprep(\$target);
\t\t} else if (settings.get('iframe')) {
\t\t\t// IFrame element won't be added to the DOM until it is ready to be displayed,
\t\t\t// to avoid problems with DOM-ready JS that might be trying to run in that iframe.
\t\t\tprep(\" \");
\t\t} else if (settings.get('html')) {
\t\t\tprep(settings.get('html'));
\t\t} else if (isImage(settings, href)) {

\t\t\thref = retinaUrl(settings, href);

\t\t\tphoto = settings.get('createImg');

\t\t\t\$(photo)
\t\t\t.addClass(prefix + 'Photo')
\t\t\t.bind('error.'+prefix,function () {
\t\t\t\tprep(\$tag(div, 'Error').html(settings.get('imgError')));
\t\t\t})
\t\t\t.one('load', function () {
\t\t\t\tif (request !== requests) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// A small pause because some browsers will occassionaly report a
\t\t\t\t// img.width and img.height of zero immediately after the img.onload fires
\t\t\t\tsetTimeout(function(){
\t\t\t\t\tvar percent;

\t\t\t\t\tif (settings.get('retinaImage') && window.devicePixelRatio > 1) {
\t\t\t\t\t\tphoto.height = photo.height / window.devicePixelRatio;
\t\t\t\t\t\tphoto.width = photo.width / window.devicePixelRatio;
\t\t\t\t\t}

\t\t\t\t\tif (settings.get('scalePhotos')) {
\t\t\t\t\t\tsetResize = function () {
\t\t\t\t\t\t\tphoto.height -= photo.height * percent;
\t\t\t\t\t\t\tphoto.width -= photo.width * percent;
\t\t\t\t\t\t};
\t\t\t\t\t\tif (settings.mw && photo.width > settings.mw) {
\t\t\t\t\t\t\tpercent = (photo.width - settings.mw) / photo.width;
\t\t\t\t\t\t\tsetResize();
\t\t\t\t\t\t}
\t\t\t\t\t\tif (settings.mh && photo.height > settings.mh) {
\t\t\t\t\t\t\tpercent = (photo.height - settings.mh) / photo.height;
\t\t\t\t\t\t\tsetResize();
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (settings.h) {
\t\t\t\t\t\tphoto.style.marginTop = Math.max(settings.mh - photo.height, 0) / 2 + 'px';
\t\t\t\t\t}

\t\t\t\t\tif (\$related[1] && (settings.get('loop') || \$related[index + 1])) {
\t\t\t\t\t\tphoto.style.cursor = 'pointer';

\t\t\t\t\t\t\$(photo).bind('click.'+prefix, function () {
\t\t\t\t\t\t\tpublicMethod.next();
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tphoto.style.width = photo.width + 'px';
\t\t\t\t\tphoto.style.height = photo.height + 'px';
\t\t\t\t\tprep(photo);
\t\t\t\t}, 1);
\t\t\t});

\t\t\tphoto.src = href;

\t\t} else if (href) {
\t\t\t\$loadingBay.load(href, settings.get('data'), function (data, status) {
\t\t\t\tif (request === requests) {
\t\t\t\t\tprep(status === 'error' ? \$tag(div, 'Error').html(settings.get('xhrError')) : \$(this).contents());
\t\t\t\t}
\t\t\t});
\t\t}
\t}

\t// Navigates to the next page/image in a set.
\tpublicMethod.next = function () {
\t\tif (!active && \$related[1] && (settings.get('loop') || \$related[index + 1])) {
\t\t\tindex = getIndex(1);
\t\t\tlaunch(\$related[index]);
\t\t}
\t};

\tpublicMethod.prev = function () {
\t\tif (!active && \$related[1] && (settings.get('loop') || index)) {
\t\t\tindex = getIndex(-1);
\t\t\tlaunch(\$related[index]);
\t\t}
\t};

\t// Note: to use this within an iframe use the following format: parent.jQuery.colorbox.close();
\tpublicMethod.close = function () {
\t\tif (open && !closing) {

\t\t\tclosing = true;
\t\t\topen = false;
\t\t\ttrigger(event_cleanup);
\t\t\tsettings.get('onCleanup');
\t\t\t\$window.unbind('.' + prefix);
\t\t\t\$overlay.fadeTo(settings.get('fadeOut') || 0, 0);

\t\t\t\$box.stop().fadeTo(settings.get('fadeOut') || 0, 0, function () {
\t\t\t\t\$box.hide();
\t\t\t\t\$overlay.hide();
\t\t\t\ttrigger(event_purge);
\t\t\t\t\$loaded.remove();

\t\t\t\tsetTimeout(function () {
\t\t\t\t\tclosing = false;
\t\t\t\t\ttrigger(event_closed);
\t\t\t\t\tsettings.get('onClosed');
\t\t\t\t}, 1);
\t\t\t});
\t\t}
\t};

\t// Removes changes Colorbox made to the document, but does not remove the plugin.
\tpublicMethod.remove = function () {
\t\tif (!\$box) { return; }

\t\t\$box.stop();
\t\t\$[colorbox].close();
\t\t\$box.stop(false, true).remove();
\t\t\$overlay.remove();
\t\tclosing = false;
\t\t\$box = null;
\t\t\$('.' + boxElement)
\t\t\t.removeData(colorbox)
\t\t\t.removeClass(boxElement);

\t\t\$(document).unbind('click.'+prefix).unbind('keydown.'+prefix);
\t};

\t// A method for fetching the current element Colorbox is referencing.
\t// returns a jQuery object.
\tpublicMethod.element = function () {
\t\treturn \$(settings.el);
\t};

\tpublicMethod.settings = defaults;

}));
", "wdn/templates_4.1/scripts/compressed/plugins/colorbox/jquery.colorbox.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/colorbox/jquery.colorbox.js.src.js");
    }
}
