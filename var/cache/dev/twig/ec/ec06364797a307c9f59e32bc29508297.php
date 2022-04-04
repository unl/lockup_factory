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

/* wdn/templates_4.1/scripts/compressed/plugins/qtip/jquery.qtip.js.src.js */
class __TwigTemplate_afc341ca631a88dbb78a95a455301cbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/qtip/jquery.qtip.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/qtip/jquery.qtip.js.src.js"));

        // line 1
        echo "/*
 * qTip2 - Pretty powerful tooltips - v2.2.1
 * http://qtip2.com
 *
 * Copyright (c) 2015 
 * Released under the MIT licenses
 * http://jquery.org/license
 *
 * Date: Fri Aug 14 2015 12:37 EDT-0400
 * Plugins: tips viewport svg
 * Styles: core basic css3
 */
/*global window: false, jQuery: false, console: false, define: false */

/* Cache window, document, undefined */
(function( window, document, undefined ) {

// Uses AMD or browser globals to create a jQuery plugin.
(function( factory ) {
\t\"use strict\";
\tif(typeof define === 'function' && define.amd) {
\t\tdefine(['jquery'], factory);
\t}
\telse if(jQuery && !jQuery.fn.qtip) {
\t\tfactory(jQuery);
\t}
}
(function(\$) {
\t\"use strict\"; // Enable ECMAScript \"strict\" operation for this function. See more: http://ejohn.org/blog/ecmascript-5-strict-mode-json-and-more/
;// Munge the primitives - Paul Irish tip
var TRUE = true,
FALSE = false,
NULL = null,

// Common variables
X = 'x', Y = 'y',
WIDTH = 'width',
HEIGHT = 'height',

// Positioning sides
TOP = 'top',
LEFT = 'left',
BOTTOM = 'bottom',
RIGHT = 'right',
CENTER = 'center',

// Position adjustment types
FLIP = 'flip',
FLIPINVERT = 'flipinvert',
SHIFT = 'shift',

// Shortcut vars
QTIP, PROTOTYPE, CORNER, CHECKS,
PLUGINS = {},
NAMESPACE = 'qtip',
ATTR_HAS = 'data-hasqtip',
ATTR_ID = 'data-qtip-id',
WIDGET = ['ui-widget', 'ui-tooltip'],
SELECTOR = '.'+NAMESPACE,
INACTIVE_EVENTS = 'click dblclick mousedown mouseup mousemove mouseleave mouseenter'.split(' '),

CLASS_FIXED = NAMESPACE+'-fixed',
CLASS_DEFAULT = NAMESPACE + '-default',
CLASS_FOCUS = NAMESPACE + '-focus',
CLASS_HOVER = NAMESPACE + '-hover',
CLASS_DISABLED = NAMESPACE+'-disabled',

replaceSuffix = '_replacedByqTip',
oldtitle = 'oldtitle',
trackingBound,

// Browser detection
BROWSER = {
\t/*
\t * IE version detection
\t *
\t * Adapted from: http://ajaxian.com/archives/attack-of-the-ie-conditional-comment
\t * Credit to James Padolsey for the original implemntation!
\t */
\tie: (function(){
\t\tfor (
\t\t\tvar v = 4, i = document.createElement(\"div\");
\t\t\t(i.innerHTML = \"<!--[if gt IE \" + v + \"]><i></i><![endif]-->\") && i.getElementsByTagName(\"i\")[0];
\t\t\tv+=1
\t\t) {}
\t\treturn v > 4 ? v : NaN;
\t}()),

\t/*
\t * iOS version detection
\t */
\tiOS: parseFloat(
\t\t('' + (/CPU.*OS ([0-9_]{1,5})|(CPU like).*AppleWebKit.*Mobile/i.exec(navigator.userAgent) || [0,''])[1])
\t\t.replace('undefined', '3_2').replace('_', '.').replace('_', '')
\t) || FALSE
};
;function QTip(target, options, id, attr) {
\t// Elements and ID
\tthis.id = id;
\tthis.target = target;
\tthis.tooltip = NULL;
\tthis.elements = { target: target };

\t// Internal constructs
\tthis._id = NAMESPACE + '-' + id;
\tthis.timers = { img: {} };
\tthis.options = options;
\tthis.plugins = {};

\t// Cache object
\tthis.cache = {
\t\tevent: {},
\t\ttarget: \$(),
\t\tdisabled: FALSE,
\t\tattr: attr,
\t\tonTooltip: FALSE,
\t\tlastClass: ''
\t};

\t// Set the initial flags
\tthis.rendered = this.destroyed = this.disabled = this.waiting =
\t\tthis.hiddenDuringWait = this.positioning = this.triggering = FALSE;
}
PROTOTYPE = QTip.prototype;

PROTOTYPE._when = function(deferreds) {
\treturn \$.when.apply(\$, deferreds);
};

PROTOTYPE.render = function(show) {
\tif(this.rendered || this.destroyed) { return this; } // If tooltip has already been rendered, exit

\tvar self = this,
\t\toptions = this.options,
\t\tcache = this.cache,
\t\telements = this.elements,
\t\ttext = options.content.text,
\t\ttitle = options.content.title,
\t\tbutton = options.content.button,
\t\tposOptions = options.position,
\t\tnamespace = '.'+this._id+' ',
\t\tdeferreds = [],
\t\ttooltip;

\t// Add ARIA attributes to target
\t\$.attr(this.target[0], 'aria-describedby', this._id);

\t// Create public position object that tracks current position corners
\tcache.posClass = this._createPosClass(
\t\t(this.position = { my: posOptions.my, at: posOptions.at }).my
\t);

\t// Create tooltip element
\tthis.tooltip = elements.tooltip = tooltip = \$('<div/>', {
\t\t'id': this._id,
\t\t'class': [ NAMESPACE, CLASS_DEFAULT, options.style.classes, cache.posClass ].join(' '),
\t\t'width': options.style.width || '',
\t\t'height': options.style.height || '',
\t\t'tracking': posOptions.target === 'mouse' && posOptions.adjust.mouse,

\t\t/* ARIA specific attributes */
\t\t'role': 'alert',
\t\t'aria-live': 'polite',
\t\t'aria-atomic': FALSE,
\t\t'aria-describedby': this._id + '-content',
\t\t'aria-hidden': TRUE
\t})
\t.toggleClass(CLASS_DISABLED, this.disabled)
\t.attr(ATTR_ID, this.id)
\t.data(NAMESPACE, this)
\t.appendTo(posOptions.container)
\t.append(
\t\t// Create content element
\t\telements.content = \$('<div />', {
\t\t\t'class': NAMESPACE + '-content',
\t\t\t'id': this._id + '-content',
\t\t\t'aria-atomic': TRUE
\t\t})
\t);

\t// Set rendered flag and prevent redundant reposition calls for now
\tthis.rendered = -1;
\tthis.positioning = TRUE;

\t// Create title...
\tif(title) {
\t\tthis._createTitle();

\t\t// Update title only if its not a callback (called in toggle if so)
\t\tif(!\$.isFunction(title)) {
\t\t\tdeferreds.push( this._updateTitle(title, FALSE) );
\t\t}
\t}

\t// Create button
\tif(button) { this._createButton(); }

\t// Set proper rendered flag and update content if not a callback function (called in toggle)
\tif(!\$.isFunction(text)) {
\t\tdeferreds.push( this._updateContent(text, FALSE) );
\t}
\tthis.rendered = TRUE;

\t// Setup widget classes
\tthis._setWidget();

\t// Initialize 'render' plugins
\t\$.each(PLUGINS, function(name) {
\t\tvar instance;
\t\tif(this.initialize === 'render' && (instance = this(self))) {
\t\t\tself.plugins[name] = instance;
\t\t}
\t});

\t// Unassign initial events and assign proper events
\tthis._unassignEvents();
\tthis._assignEvents();

\t// When deferreds have completed
\tthis._when(deferreds).then(function() {
\t\t// tooltiprender event
\t\tself._trigger('render');

\t\t// Reset flags
\t\tself.positioning = FALSE;

\t\t// Show tooltip if not hidden during wait period
\t\tif(!self.hiddenDuringWait && (options.show.ready || show)) {
\t\t\tself.toggle(TRUE, cache.event, FALSE);
\t\t}
\t\tself.hiddenDuringWait = FALSE;
\t});

\t// Expose API
\tQTIP.api[this.id] = this;

\treturn this;
};

PROTOTYPE.destroy = function(immediate) {
\t// Set flag the signify destroy is taking place to plugins
\t// and ensure it only gets destroyed once!
\tif(this.destroyed) { return this.target; }

\tfunction process() {
\t\tif(this.destroyed) { return; }
\t\tthis.destroyed = TRUE;

\t\tvar target = this.target,
\t\t\ttitle = target.attr(oldtitle),
\t\t\ttimer;

\t\t// Destroy tooltip if rendered
\t\tif(this.rendered) {
\t\t\tthis.tooltip.stop(1,0).find('*').remove().end().remove();
\t\t}

\t\t// Destroy all plugins
\t\t\$.each(this.plugins, function(name) {
\t\t\tthis.destroy && this.destroy();
\t\t});

\t\t// Clear timers
\t\tfor(timer in this.timers) {
\t\t\tclearTimeout(this.timers[timer]);
\t\t}

\t\t// Remove api object and ARIA attributes
\t\ttarget.removeData(NAMESPACE)
\t\t\t.removeAttr(ATTR_ID)
\t\t\t.removeAttr(ATTR_HAS)
\t\t\t.removeAttr('aria-describedby');

\t\t// Reset old title attribute if removed
\t\tif(this.options.suppress && title) {
\t\t\ttarget.attr('title', title).removeAttr(oldtitle);
\t\t}

\t\t// Remove qTip events associated with this API
\t\tthis._unassignEvents();

\t\t// Remove ID from used id objects, and delete object references
\t\t// for better garbage collection and leak protection
\t\tthis.options = this.elements = this.cache = this.timers =
\t\t\tthis.plugins = this.mouse = NULL;

\t\t// Delete epoxsed API object
\t\tdelete QTIP.api[this.id];
\t}

\t// If an immediate destory is needed
\tif((immediate !== TRUE || this.triggering === 'hide') && this.rendered) {
\t\tthis.tooltip.one('tooltiphidden', \$.proxy(process, this));
\t\t!this.triggering && this.hide();
\t}

\t// If we're not in the process of hiding... process
\telse { process.call(this); }

\treturn this.target;
};
;function invalidOpt(a) {
\treturn a === NULL || \$.type(a) !== 'object';
}

function invalidContent(c) {
\treturn !( \$.isFunction(c) || (c && c.attr) || c.length || (\$.type(c) === 'object' && (c.jquery || c.then) ));
}

// Option object sanitizer
function sanitizeOptions(opts) {
\tvar content, text, ajax, once;

\tif(invalidOpt(opts)) { return FALSE; }

\tif(invalidOpt(opts.metadata)) {
\t\topts.metadata = { type: opts.metadata };
\t}

\tif('content' in opts) {
\t\tcontent = opts.content;

\t\tif(invalidOpt(content) || content.jquery || content.done) {
\t\t\tcontent = opts.content = {
\t\t\t\ttext: (text = invalidContent(content) ? FALSE : content)
\t\t\t};
\t\t}
\t\telse { text = content.text; }

\t\t// DEPRECATED - Old content.ajax plugin functionality
\t\t// Converts it into the proper Deferred syntax
\t\tif('ajax' in content) {
\t\t\tajax = content.ajax;
\t\t\tonce = ajax && ajax.once !== FALSE;
\t\t\tdelete content.ajax;

\t\t\tcontent.text = function(event, api) {
\t\t\t\tvar loading = text || \$(this).attr(api.options.content.attr) || 'Loading...',

\t\t\t\tdeferred = \$.ajax(
\t\t\t\t\t\$.extend({}, ajax, { context: api })
\t\t\t\t)
\t\t\t\t.then(ajax.success, NULL, ajax.error)
\t\t\t\t.then(function(content) {
\t\t\t\t\tif(content && once) { api.set('content.text', content); }
\t\t\t\t\treturn content;
\t\t\t\t},
\t\t\t\tfunction(xhr, status, error) {
\t\t\t\t\tif(api.destroyed || xhr.status === 0) { return; }
\t\t\t\t\tapi.set('content.text', status + ': ' + error);
\t\t\t\t});

\t\t\t\treturn !once ? (api.set('content.text', loading), deferred) : loading;
\t\t\t};
\t\t}

\t\tif('title' in content) {
\t\t\tif(\$.isPlainObject(content.title)) {
\t\t\t\tcontent.button = content.title.button;
\t\t\t\tcontent.title = content.title.text;
\t\t\t}

\t\t\tif(invalidContent(content.title || FALSE)) {
\t\t\t\tcontent.title = FALSE;
\t\t\t}
\t\t}
\t}

\tif('position' in opts && invalidOpt(opts.position)) {
\t\topts.position = { my: opts.position, at: opts.position };
\t}

\tif('show' in opts && invalidOpt(opts.show)) {
\t\topts.show = opts.show.jquery ? { target: opts.show } :
\t\t\topts.show === TRUE ? { ready: TRUE } : { event: opts.show };
\t}

\tif('hide' in opts && invalidOpt(opts.hide)) {
\t\topts.hide = opts.hide.jquery ? { target: opts.hide } : { event: opts.hide };
\t}

\tif('style' in opts && invalidOpt(opts.style)) {
\t\topts.style = { classes: opts.style };
\t}

\t// Sanitize plugin options
\t\$.each(PLUGINS, function() {
\t\tthis.sanitize && this.sanitize(opts);
\t});

\treturn opts;
}

// Setup builtin .set() option checks
CHECKS = PROTOTYPE.checks = {
\tbuiltin: {
\t\t// Core checks
\t\t'^id\$': function(obj, o, v, prev) {
\t\t\tvar id = v === TRUE ? QTIP.nextid : v,
\t\t\t\tnew_id = NAMESPACE + '-' + id;

\t\t\tif(id !== FALSE && id.length > 0 && !\$('#'+new_id).length) {
\t\t\t\tthis._id = new_id;

\t\t\t\tif(this.rendered) {
\t\t\t\t\tthis.tooltip[0].id = this._id;
\t\t\t\t\tthis.elements.content[0].id = this._id + '-content';
\t\t\t\t\tthis.elements.title[0].id = this._id + '-title';
\t\t\t\t}
\t\t\t}
\t\t\telse { obj[o] = prev; }
\t\t},
\t\t'^prerender': function(obj, o, v) {
\t\t\tv && !this.rendered && this.render(this.options.show.ready);
\t\t},

\t\t// Content checks
\t\t'^content.text\$': function(obj, o, v) {
\t\t\tthis._updateContent(v);
\t\t},
\t\t'^content.attr\$': function(obj, o, v, prev) {
\t\t\tif(this.options.content.text === this.target.attr(prev)) {
\t\t\t\tthis._updateContent( this.target.attr(v) );
\t\t\t}
\t\t},
\t\t'^content.title\$': function(obj, o, v) {
\t\t\t// Remove title if content is null
\t\t\tif(!v) { return this._removeTitle(); }

\t\t\t// If title isn't already created, create it now and update
\t\t\tv && !this.elements.title && this._createTitle();
\t\t\tthis._updateTitle(v);
\t\t},
\t\t'^content.button\$': function(obj, o, v) {
\t\t\tthis._updateButton(v);
\t\t},
\t\t'^content.title.(text|button)\$': function(obj, o, v) {
\t\t\tthis.set('content.'+o, v); // Backwards title.text/button compat
\t\t},

\t\t// Position checks
\t\t'^position.(my|at)\$': function(obj, o, v){
\t\t\t'string' === typeof v && (this.position[o] = obj[o] = new CORNER(v, o === 'at'));
\t\t},
\t\t'^position.container\$': function(obj, o, v){
\t\t\tthis.rendered && this.tooltip.appendTo(v);
\t\t},

\t\t// Show checks
\t\t'^show.ready\$': function(obj, o, v) {
\t\t\tv && (!this.rendered && this.render(TRUE) || this.toggle(TRUE));
\t\t},

\t\t// Style checks
\t\t'^style.classes\$': function(obj, o, v, p) {
\t\t\tthis.rendered && this.tooltip.removeClass(p).addClass(v);
\t\t},
\t\t'^style.(width|height)': function(obj, o, v) {
\t\t\tthis.rendered && this.tooltip.css(o, v);
\t\t},
\t\t'^style.widget|content.title': function() {
\t\t\tthis.rendered && this._setWidget();
\t\t},
\t\t'^style.def': function(obj, o, v) {
\t\t\tthis.rendered && this.tooltip.toggleClass(CLASS_DEFAULT, !!v);
\t\t},

\t\t// Events check
\t\t'^events.(render|show|move|hide|focus|blur)\$': function(obj, o, v) {
\t\t\tthis.rendered && this.tooltip[(\$.isFunction(v) ? '' : 'un') + 'bind']('tooltip'+o, v);
\t\t},

\t\t// Properties which require event reassignment
\t\t'^(show|hide|position).(event|target|fixed|inactive|leave|distance|viewport|adjust)': function() {
\t\t\tif(!this.rendered) { return; }

\t\t\t// Set tracking flag
\t\t\tvar posOptions = this.options.position;
\t\t\tthis.tooltip.attr('tracking', posOptions.target === 'mouse' && posOptions.adjust.mouse);

\t\t\t// Reassign events
\t\t\tthis._unassignEvents();
\t\t\tthis._assignEvents();
\t\t}
\t}
};

// Dot notation converter
function convertNotation(options, notation) {
\tvar i = 0, obj, option = options,

\t// Split notation into array
\tlevels = notation.split('.');

\t// Loop through
\twhile( option = option[ levels[i++] ] ) {
\t\tif(i < levels.length) { obj = option; }
\t}

\treturn [obj || options, levels.pop()];
}

PROTOTYPE.get = function(notation) {
\tif(this.destroyed) { return this; }

\tvar o = convertNotation(this.options, notation.toLowerCase()),
\t\tresult = o[0][ o[1] ];

\treturn result.precedance ? result.string() : result;
};

function setCallback(notation, args) {
\tvar category, rule, match;

\tfor(category in this.checks) {
\t\tfor(rule in this.checks[category]) {
\t\t\tif(match = (new RegExp(rule, 'i')).exec(notation)) {
\t\t\t\targs.push(match);

\t\t\t\tif(category === 'builtin' || this.plugins[category]) {
\t\t\t\t\tthis.checks[category][rule].apply(
\t\t\t\t\t\tthis.plugins[category] || this, args
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

var rmove = /^position\\.(my|at|adjust|target|container|viewport)|style|content|show\\.ready/i,
\trrender = /^prerender|show\\.ready/i;

PROTOTYPE.set = function(option, value) {
\tif(this.destroyed) { return this; }

\tvar rendered = this.rendered,
\t\treposition = FALSE,
\t\toptions = this.options,
\t\tchecks = this.checks,
\t\tname;

\t// Convert singular option/value pair into object form
\tif('string' === typeof option) {
\t\tname = option; option = {}; option[name] = value;
\t}
\telse { option = \$.extend({}, option); }

\t// Set all of the defined options to their new values
\t\$.each(option, function(notation, value) {
\t\tif(rendered && rrender.test(notation)) {
\t\t\tdelete option[notation]; return;
\t\t}

\t\t// Set new obj value
\t\tvar obj = convertNotation(options, notation.toLowerCase()), previous;
\t\tprevious = obj[0][ obj[1] ];
\t\tobj[0][ obj[1] ] = value && value.nodeType ? \$(value) : value;

\t\t// Also check if we need to reposition
\t\treposition = rmove.test(notation) || reposition;

\t\t// Set the new params for the callback
\t\toption[notation] = [obj[0], obj[1], value, previous];
\t});

\t// Re-sanitize options
\tsanitizeOptions(options);

\t/*
\t * Execute any valid callbacks for the set options
\t * Also set positioning flag so we don't get loads of redundant repositioning calls.
\t */
\tthis.positioning = TRUE;
\t\$.each(option, \$.proxy(setCallback, this));
\tthis.positioning = FALSE;

\t// Update position if needed
\tif(this.rendered && this.tooltip[0].offsetWidth > 0 && reposition) {
\t\tthis.reposition( options.position.target === 'mouse' ? NULL : this.cache.event );
\t}

\treturn this;
};
;PROTOTYPE._update = function(content, element, reposition) {
\tvar self = this,
\t\tcache = this.cache;

\t// Make sure tooltip is rendered and content is defined. If not return
\tif(!this.rendered || !content) { return FALSE; }

\t// Use function to parse content
\tif(\$.isFunction(content)) {
\t\tcontent = content.call(this.elements.target, cache.event, this) || '';
\t}

\t// Handle deferred content
\tif(\$.isFunction(content.then)) {
\t\tcache.waiting = TRUE;
\t\treturn content.then(function(c) {
\t\t\tcache.waiting = FALSE;
\t\t\treturn self._update(c, element);
\t\t}, NULL, function(e) {
\t\t\treturn self._update(e, element);
\t\t});
\t}

\t// If content is null... return false
\tif(content === FALSE || (!content && content !== '')) { return FALSE; }

\t// Append new content if its a DOM array and show it if hidden
\tif(content.jquery && content.length > 0) {
\t\telement.empty().append(
\t\t\tcontent.css({ display: 'block', visibility: 'visible' })
\t\t);
\t}

\t// Content is a regular string, insert the new content
\telse { element.html(content); }

\t// Wait for content to be loaded, and reposition
\treturn this._waitForContent(element).then(function(images) {
\t\tif(self.rendered && self.tooltip[0].offsetWidth > 0) {
\t\t\tself.reposition(cache.event, !images.length);
\t\t}
\t});
};

PROTOTYPE._waitForContent = function(element) {
\tvar cache = this.cache;

\t// Set flag
\tcache.waiting = TRUE;

\t// If imagesLoaded is included, ensure images have loaded and return promise
\treturn ( \$.fn.imagesLoaded ? element.imagesLoaded() : \$.Deferred().resolve([]) )
\t\t.done(function() { cache.waiting = FALSE; })
\t\t.promise();
};

PROTOTYPE._updateContent = function(content, reposition) {
\tthis._update(content, this.elements.content, reposition);
};

PROTOTYPE._updateTitle = function(content, reposition) {
\tif(this._update(content, this.elements.title, reposition) === FALSE) {
\t\tthis._removeTitle(FALSE);
\t}
};

PROTOTYPE._createTitle = function()
{
\tvar elements = this.elements,
\t\tid = this._id+'-title';

\t// Destroy previous title element, if present
\tif(elements.titlebar) { this._removeTitle(); }

\t// Create title bar and title elements
\telements.titlebar = \$('<div />', {
\t\t'class': NAMESPACE + '-titlebar ' + (this.options.style.widget ? createWidgetClass('header') : '')
\t})
\t.append(
\t\telements.title = \$('<div />', {
\t\t\t'id': id,
\t\t\t'class': NAMESPACE + '-title',
\t\t\t'aria-atomic': TRUE
\t\t})
\t)
\t.insertBefore(elements.content)

\t// Button-specific events
\t.delegate('.qtip-close', 'mousedown keydown mouseup keyup mouseout', function(event) {
\t\t\$(this).toggleClass('ui-state-active ui-state-focus', event.type.substr(-4) === 'down');
\t})
\t.delegate('.qtip-close', 'mouseover mouseout', function(event){
\t\t\$(this).toggleClass('ui-state-hover', event.type === 'mouseover');
\t});

\t// Create button if enabled
\tif(this.options.content.button) { this._createButton(); }
};

PROTOTYPE._removeTitle = function(reposition)
{
\tvar elements = this.elements;

\tif(elements.title) {
\t\telements.titlebar.remove();
\t\telements.titlebar = elements.title = elements.button = NULL;

\t\t// Reposition if enabled
\t\tif(reposition !== FALSE) { this.reposition(); }
\t}
};
;PROTOTYPE._createPosClass = function(my) {
\treturn NAMESPACE + '-pos-' + (my || this.options.position.my).abbrev();
};

PROTOTYPE.reposition = function(event, effect) {
\tif(!this.rendered || this.positioning || this.destroyed) { return this; }

\t// Set positioning flag
\tthis.positioning = TRUE;

\tvar cache = this.cache,
\t\ttooltip = this.tooltip,
\t\tposOptions = this.options.position,
\t\ttarget = posOptions.target,
\t\tmy = posOptions.my,
\t\tat = posOptions.at,
\t\tviewport = posOptions.viewport,
\t\tcontainer = posOptions.container,
\t\tadjust = posOptions.adjust,
\t\tmethod = adjust.method.split(' '),
\t\ttooltipWidth = tooltip.outerWidth(FALSE),
\t\ttooltipHeight = tooltip.outerHeight(FALSE),
\t\ttargetWidth = 0,
\t\ttargetHeight = 0,
\t\ttype = tooltip.css('position'),
\t\tposition = { left: 0, top: 0 },
\t\tvisible = tooltip[0].offsetWidth > 0,
\t\tisScroll = event && event.type === 'scroll',
\t\twin = \$(window),
\t\tdoc = container[0].ownerDocument,
\t\tmouse = this.mouse,
\t\tpluginCalculations, offset, adjusted, newClass;

\t// Check if absolute position was passed
\tif(\$.isArray(target) && target.length === 2) {
\t\t// Force left top and set position
\t\tat = { x: LEFT, y: TOP };
\t\tposition = { left: target[0], top: target[1] };
\t}

\t// Check if mouse was the target
\telse if(target === 'mouse') {
\t\t// Force left top to allow flipping
\t\tat = { x: LEFT, y: TOP };

\t\t// Use the mouse origin that caused the show event, if distance hiding is enabled
\t\tif((!adjust.mouse || this.options.hide.distance) && cache.origin && cache.origin.pageX) {
\t\t\tevent =  cache.origin;
\t\t}

\t\t// Use cached event for resize/scroll events
\t\telse if(!event || (event && (event.type === 'resize' || event.type === 'scroll'))) {
\t\t\tevent = cache.event;
\t\t}

\t\t// Otherwise, use the cached mouse coordinates if available
\t\telse if(mouse && mouse.pageX) {
\t\t\tevent = mouse;
\t\t}

\t\t// Calculate body and container offset and take them into account below
\t\tif(type !== 'static') { position = container.offset(); }
\t\tif(doc.body.offsetWidth !== (window.innerWidth || doc.documentElement.clientWidth)) {
\t\t\toffset = \$(document.body).offset();
\t\t}

\t\t// Use event coordinates for position
\t\tposition = {
\t\t\tleft: event.pageX - position.left + (offset && offset.left || 0),
\t\t\ttop: event.pageY - position.top + (offset && offset.top || 0)
\t\t};

\t\t// Scroll events are a pain, some browsers
\t\tif(adjust.mouse && isScroll && mouse) {
\t\t\tposition.left -= (mouse.scrollX || 0) - win.scrollLeft();
\t\t\tposition.top -= (mouse.scrollY || 0) - win.scrollTop();
\t\t}
\t}

\t// Target wasn't mouse or absolute...
\telse {
\t\t// Check if event targetting is being used
\t\tif(target === 'event') {
\t\t\tif(event && event.target && event.type !== 'scroll' && event.type !== 'resize') {
\t\t\t\tcache.target = \$(event.target);
\t\t\t}
\t\t\telse if(!event.target) {
\t\t\t\tcache.target = this.elements.target;
\t\t\t}
\t\t}
\t\telse if(target !== 'event'){
\t\t\tcache.target = \$(target.jquery ? target : this.elements.target);
\t\t}
\t\ttarget = cache.target;

\t\t// Parse the target into a jQuery object and make sure there's an element present
\t\ttarget = \$(target).eq(0);
\t\tif(target.length === 0) { return this; }

\t\t// Check if window or document is the target
\t\telse if(target[0] === document || target[0] === window) {
\t\t\ttargetWidth = BROWSER.iOS ? window.innerWidth : target.width();
\t\t\ttargetHeight = BROWSER.iOS ? window.innerHeight : target.height();

\t\t\tif(target[0] === window) {
\t\t\t\tposition = {
\t\t\t\t\ttop: (viewport || target).scrollTop(),
\t\t\t\t\tleft: (viewport || target).scrollLeft()
\t\t\t\t};
\t\t\t}
\t\t}

\t\t// Check if the target is an <AREA> element
\t\telse if(PLUGINS.imagemap && target.is('area')) {
\t\t\tpluginCalculations = PLUGINS.imagemap(this, target, at, PLUGINS.viewport ? method : FALSE);
\t\t}

\t\t// Check if the target is an SVG element
\t\telse if(PLUGINS.svg && target && target[0].ownerSVGElement) {
\t\t\tpluginCalculations = PLUGINS.svg(this, target, at, PLUGINS.viewport ? method : FALSE);
\t\t}

\t\t// Otherwise use regular jQuery methods
\t\telse {
\t\t\ttargetWidth = target.outerWidth(FALSE);
\t\t\ttargetHeight = target.outerHeight(FALSE);
\t\t\tposition = target.offset();
\t\t}

\t\t// Parse returned plugin values into proper variables
\t\tif(pluginCalculations) {
\t\t\ttargetWidth = pluginCalculations.width;
\t\t\ttargetHeight = pluginCalculations.height;
\t\t\toffset = pluginCalculations.offset;
\t\t\tposition = pluginCalculations.position;
\t\t}

\t\t// Adjust position to take into account offset parents
\t\tposition = this.reposition.offset(target, position, container);

\t\t// Adjust for position.fixed tooltips (and also iOS scroll bug in v3.2-4.0 & v4.3-4.3.2)
\t\tif((BROWSER.iOS > 3.1 && BROWSER.iOS < 4.1) ||
\t\t\t(BROWSER.iOS >= 4.3 && BROWSER.iOS < 4.33) ||
\t\t\t(!BROWSER.iOS && type === 'fixed')
\t\t){
\t\t\tposition.left -= win.scrollLeft();
\t\t\tposition.top -= win.scrollTop();
\t\t}

\t\t// Adjust position relative to target
\t\tif(!pluginCalculations || (pluginCalculations && pluginCalculations.adjustable !== FALSE)) {
\t\t\tposition.left += at.x === RIGHT ? targetWidth : at.x === CENTER ? targetWidth / 2 : 0;
\t\t\tposition.top += at.y === BOTTOM ? targetHeight : at.y === CENTER ? targetHeight / 2 : 0;
\t\t}
\t}

\t// Adjust position relative to tooltip
\tposition.left += adjust.x + (my.x === RIGHT ? -tooltipWidth : my.x === CENTER ? -tooltipWidth / 2 : 0);
\tposition.top += adjust.y + (my.y === BOTTOM ? -tooltipHeight : my.y === CENTER ? -tooltipHeight / 2 : 0);

\t// Use viewport adjustment plugin if enabled
\tif(PLUGINS.viewport) {
\t\tadjusted = position.adjusted = PLUGINS.viewport(
\t\t\tthis, position, posOptions, targetWidth, targetHeight, tooltipWidth, tooltipHeight
\t\t);

\t\t// Apply offsets supplied by positioning plugin (if used)
\t\tif(offset && adjusted.left) { position.left += offset.left; }
\t\tif(offset && adjusted.top) {  position.top += offset.top; }

\t\t// Apply any new 'my' position
\t\tif(adjusted.my) { this.position.my = adjusted.my; }
\t}

\t// Viewport adjustment is disabled, set values to zero
\telse { position.adjusted = { left: 0, top: 0 }; }

\t// Set tooltip position class if it's changed
\tif(cache.posClass !== (newClass = this._createPosClass(this.position.my))) {
\t\ttooltip.removeClass(cache.posClass).addClass( (cache.posClass = newClass) );
\t}

\t// tooltipmove event
\tif(!this._trigger('move', [position, viewport.elem || viewport], event)) { return this; }
\tdelete position.adjusted;

\t// If effect is disabled, target it mouse, no animation is defined or positioning gives NaN out, set CSS directly
\tif(effect === FALSE || !visible || isNaN(position.left) || isNaN(position.top) || target === 'mouse' || !\$.isFunction(posOptions.effect)) {
\t\ttooltip.css(position);
\t}

\t// Use custom function if provided
\telse if(\$.isFunction(posOptions.effect)) {
\t\tposOptions.effect.call(tooltip, this, \$.extend({}, position));
\t\ttooltip.queue(function(next) {
\t\t\t// Reset attributes to avoid cross-browser rendering bugs
\t\t\t\$(this).css({ opacity: '', height: '' });
\t\t\tif(BROWSER.ie) { this.style.removeAttribute('filter'); }

\t\t\tnext();
\t\t});
\t}

\t// Set positioning flag
\tthis.positioning = FALSE;

\treturn this;
};

// Custom (more correct for qTip!) offset calculator
PROTOTYPE.reposition.offset = function(elem, pos, container) {
\tif(!container[0]) { return pos; }

\tvar ownerDocument = \$(elem[0].ownerDocument),
\t\tquirks = !!BROWSER.ie && document.compatMode !== 'CSS1Compat',
\t\tparent = container[0],
\t\tscrolled, position, parentOffset, overflow;

\tfunction scroll(e, i) {
\t\tpos.left += i * e.scrollLeft();
\t\tpos.top += i * e.scrollTop();
\t}

\t// Compensate for non-static containers offset
\tdo {
\t\tif((position = \$.css(parent, 'position')) !== 'static') {
\t\t\tif(position === 'fixed') {
\t\t\t\tparentOffset = parent.getBoundingClientRect();
\t\t\t\tscroll(ownerDocument, -1);
\t\t\t}
\t\t\telse {
\t\t\t\tparentOffset = \$(parent).position();
\t\t\t\tparentOffset.left += (parseFloat(\$.css(parent, 'borderLeftWidth')) || 0);
\t\t\t\tparentOffset.top += (parseFloat(\$.css(parent, 'borderTopWidth')) || 0);
\t\t\t}

\t\t\tpos.left -= parentOffset.left + (parseFloat(\$.css(parent, 'marginLeft')) || 0);
\t\t\tpos.top -= parentOffset.top + (parseFloat(\$.css(parent, 'marginTop')) || 0);

\t\t\t// If this is the first parent element with an overflow of \"scroll\" or \"auto\", store it
\t\t\tif(!scrolled && (overflow = \$.css(parent, 'overflow')) !== 'hidden' && overflow !== 'visible') { scrolled = \$(parent); }
\t\t}
\t}
\twhile((parent = parent.offsetParent));

\t// Compensate for containers scroll if it also has an offsetParent (or in IE quirks mode)
\tif(scrolled && (scrolled[0] !== ownerDocument[0] || quirks)) {
\t\tscroll(scrolled, 1);
\t}

\treturn pos;
};

// Corner class
var C = (CORNER = PROTOTYPE.reposition.Corner = function(corner, forceY) {
\tcorner = ('' + corner).replace(/([A-Z])/, ' \$1').replace(/middle/gi, CENTER).toLowerCase();
\tthis.x = (corner.match(/left|right/i) || corner.match(/center/) || ['inherit'])[0].toLowerCase();
\tthis.y = (corner.match(/top|bottom|center/i) || ['inherit'])[0].toLowerCase();
\tthis.forceY = !!forceY;

\tvar f = corner.charAt(0);
\tthis.precedance = (f === 't' || f === 'b' ? Y : X);
}).prototype;

C.invert = function(z, center) {
\tthis[z] = this[z] === LEFT ? RIGHT : this[z] === RIGHT ? LEFT : center || this[z];
};

C.string = function(join) {
\tvar x = this.x, y = this.y;

\tvar result = x !== y ?
\t\t(x === 'center' || y !== 'center' && (this.precedance === Y || this.forceY) ? 
\t\t\t[y,x] : [x,y]
\t\t) :
\t[x];

\treturn join !== false ? result.join(' ') : result;
};

C.abbrev = function() {
\tvar result = this.string(false);
\treturn result[0].charAt(0) + (result[1] && result[1].charAt(0) || '');
};

C.clone = function() {
\treturn new CORNER( this.string(), this.forceY );
};

;
PROTOTYPE.toggle = function(state, event) {
\tvar cache = this.cache,
\t\toptions = this.options,
\t\ttooltip = this.tooltip;

\t// Try to prevent flickering when tooltip overlaps show element
\tif(event) {
\t\tif((/over|enter/).test(event.type) && cache.event && (/out|leave/).test(cache.event.type) &&
\t\t\toptions.show.target.add(event.target).length === options.show.target.length &&
\t\t\ttooltip.has(event.relatedTarget).length) {
\t\t\treturn this;
\t\t}

\t\t// Cache event
\t\tcache.event = \$.event.fix(event);
\t}

\t// If we're currently waiting and we've just hidden... stop it
\tthis.waiting && !state && (this.hiddenDuringWait = TRUE);

\t// Render the tooltip if showing and it isn't already
\tif(!this.rendered) { return state ? this.render(1) : this; }
\telse if(this.destroyed || this.disabled) { return this; }

\tvar type = state ? 'show' : 'hide',
\t\topts = this.options[type],
\t\totherOpts = this.options[ !state ? 'show' : 'hide' ],
\t\tposOptions = this.options.position,
\t\tcontentOptions = this.options.content,
\t\twidth = this.tooltip.css('width'),
\t\tvisible = this.tooltip.is(':visible'),
\t\tanimate = state || opts.target.length === 1,
\t\tsameTarget = !event || opts.target.length < 2 || cache.target[0] === event.target,
\t\tidenticalState, allow, showEvent, delay, after;

\t// Detect state if valid one isn't provided
\tif((typeof state).search('boolean|number')) { state = !visible; }

\t// Check if the tooltip is in an identical state to the new would-be state
\tidenticalState = !tooltip.is(':animated') && visible === state && sameTarget;

\t// Fire tooltip(show/hide) event and check if destroyed
\tallow = !identicalState ? !!this._trigger(type, [90]) : NULL;

\t// Check to make sure the tooltip wasn't destroyed in the callback
\tif(this.destroyed) { return this; }

\t// If the user didn't stop the method prematurely and we're showing the tooltip, focus it
\tif(allow !== FALSE && state) { this.focus(event); }

\t// If the state hasn't changed or the user stopped it, return early
\tif(!allow || identicalState) { return this; }

\t// Set ARIA hidden attribute
\t\$.attr(tooltip[0], 'aria-hidden', !!!state);

\t// Execute state specific properties
\tif(state) {
\t\t// Store show origin coordinates
\t\tthis.mouse && (cache.origin = \$.event.fix(this.mouse));

\t\t// Update tooltip content & title if it's a dynamic function
\t\tif(\$.isFunction(contentOptions.text)) { this._updateContent(contentOptions.text, FALSE); }
\t\tif(\$.isFunction(contentOptions.title)) { this._updateTitle(contentOptions.title, FALSE); }

\t\t// Cache mousemove events for positioning purposes (if not already tracking)
\t\tif(!trackingBound && posOptions.target === 'mouse' && posOptions.adjust.mouse) {
\t\t\t\$(document).bind('mousemove.'+NAMESPACE, this._storeMouse);
\t\t\ttrackingBound = TRUE;
\t\t}

\t\t// Update the tooltip position (set width first to prevent viewport/max-width issues)
\t\tif(!width) { tooltip.css('width', tooltip.outerWidth(FALSE)); }
\t\tthis.reposition(event, arguments[2]);
\t\tif(!width) { tooltip.css('width', ''); }

\t\t// Hide other tooltips if tooltip is solo
\t\tif(!!opts.solo) {
\t\t\t(typeof opts.solo === 'string' ? \$(opts.solo) : \$(SELECTOR, opts.solo))
\t\t\t\t.not(tooltip).not(opts.target).qtip('hide', \$.Event('tooltipsolo'));
\t\t}
\t}
\telse {
\t\t// Clear show timer if we're hiding
\t\tclearTimeout(this.timers.show);

\t\t// Remove cached origin on hide
\t\tdelete cache.origin;

\t\t// Remove mouse tracking event if not needed (all tracking qTips are hidden)
\t\tif(trackingBound && !\$(SELECTOR+'[tracking=\"true\"]:visible', opts.solo).not(tooltip).length) {
\t\t\t\$(document).unbind('mousemove.'+NAMESPACE);
\t\t\ttrackingBound = FALSE;
\t\t}

\t\t// Blur the tooltip
\t\tthis.blur(event);
\t}

\t// Define post-animation, state specific properties
\tafter = \$.proxy(function() {
\t\tif(state) {
\t\t\t// Prevent antialias from disappearing in IE by removing filter
\t\t\tif(BROWSER.ie) { tooltip[0].style.removeAttribute('filter'); }

\t\t\t// Remove overflow setting to prevent tip bugs
\t\t\ttooltip.css('overflow', '');

\t\t\t// Autofocus elements if enabled
\t\t\tif('string' === typeof opts.autofocus) {
\t\t\t\t\$(this.options.show.autofocus, tooltip).focus();
\t\t\t}

\t\t\t// If set, hide tooltip when inactive for delay period
\t\t\tthis.options.show.target.trigger('qtip-'+this.id+'-inactive');
\t\t}
\t\telse {
\t\t\t// Reset CSS states
\t\t\ttooltip.css({
\t\t\t\tdisplay: '',
\t\t\t\tvisibility: '',
\t\t\t\topacity: '',
\t\t\t\tleft: '',
\t\t\t\ttop: ''
\t\t\t});
\t\t}

\t\t// tooltipvisible/tooltiphidden events
\t\tthis._trigger(state ? 'visible' : 'hidden');
\t}, this);

\t// If no effect type is supplied, use a simple toggle
\tif(opts.effect === FALSE || animate === FALSE) {
\t\ttooltip[ type ]();
\t\tafter();
\t}

\t// Use custom function if provided
\telse if(\$.isFunction(opts.effect)) {
\t\ttooltip.stop(1, 1);
\t\topts.effect.call(tooltip, this);
\t\ttooltip.queue('fx', function(n) {
\t\t\tafter(); n();
\t\t});
\t}

\t// Use basic fade function by default
\telse { tooltip.fadeTo(90, state ? 1 : 0, after); }

\t// If inactive hide method is set, active it
\tif(state) { opts.target.trigger('qtip-'+this.id+'-inactive'); }

\treturn this;
};

PROTOTYPE.show = function(event) { return this.toggle(TRUE, event); };

PROTOTYPE.hide = function(event) { return this.toggle(FALSE, event); };
;PROTOTYPE.focus = function(event) {
\tif(!this.rendered || this.destroyed) { return this; }

\tvar qtips = \$(SELECTOR),
\t\ttooltip = this.tooltip,
\t\tcurIndex = parseInt(tooltip[0].style.zIndex, 10),
\t\tnewIndex = QTIP.zindex + qtips.length,
\t\tfocusedElem;

\t// Only update the z-index if it has changed and tooltip is not already focused
\tif(!tooltip.hasClass(CLASS_FOCUS)) {
\t\t// tooltipfocus event
\t\tif(this._trigger('focus', [newIndex], event)) {
\t\t\t// Only update z-index's if they've changed
\t\t\tif(curIndex !== newIndex) {
\t\t\t\t// Reduce our z-index's and keep them properly ordered
\t\t\t\tqtips.each(function() {
\t\t\t\t\tif(this.style.zIndex > curIndex) {
\t\t\t\t\t\tthis.style.zIndex = this.style.zIndex - 1;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// Fire blur event for focused tooltip
\t\t\t\tqtips.filter('.' + CLASS_FOCUS).qtip('blur', event);
\t\t\t}

\t\t\t// Set the new z-index
\t\t\ttooltip.addClass(CLASS_FOCUS)[0].style.zIndex = newIndex;
\t\t}
\t}

\treturn this;
};

PROTOTYPE.blur = function(event) {
\tif(!this.rendered || this.destroyed) { return this; }

\t// Set focused status to FALSE
\tthis.tooltip.removeClass(CLASS_FOCUS);

\t// tooltipblur event
\tthis._trigger('blur', [ this.tooltip.css('zIndex') ], event);

\treturn this;
};
;PROTOTYPE.disable = function(state) {
\tif(this.destroyed) { return this; }

\t// If 'toggle' is passed, toggle the current state
\tif(state === 'toggle') {
\t\tstate = !(this.rendered ? this.tooltip.hasClass(CLASS_DISABLED) : this.disabled);
\t}

\t// Disable if no state passed
\telse if('boolean' !== typeof state) {
\t\tstate = TRUE;
\t}

\tif(this.rendered) {
\t\tthis.tooltip.toggleClass(CLASS_DISABLED, state)
\t\t\t.attr('aria-disabled', state);
\t}

\tthis.disabled = !!state;

\treturn this;
};

PROTOTYPE.enable = function() { return this.disable(FALSE); };
;PROTOTYPE._createButton = function()
{
\tvar self = this,
\t\telements = this.elements,
\t\ttooltip = elements.tooltip,
\t\tbutton = this.options.content.button,
\t\tisString = typeof button === 'string',
\t\tclose = isString ? button : 'Close tooltip';

\tif(elements.button) { elements.button.remove(); }

\t// Use custom button if one was supplied by user, else use default
\tif(button.jquery) {
\t\telements.button = button;
\t}
\telse {
\t\telements.button = \$('<a />', {
\t\t\t'class': 'qtip-close ' + (this.options.style.widget ? '' : NAMESPACE+'-icon'),
\t\t\t'title': close,
\t\t\t'aria-label': close
\t\t})
\t\t.prepend(
\t\t\t\$('<span />', {
\t\t\t\t'class': 'ui-icon ui-icon-close',
\t\t\t\t'html': '&times;'
\t\t\t})
\t\t);
\t}

\t// Create button and setup attributes
\telements.button.appendTo(elements.titlebar || tooltip)
\t\t.attr('role', 'button')
\t\t.click(function(event) {
\t\t\tif(!tooltip.hasClass(CLASS_DISABLED)) { self.hide(event); }
\t\t\treturn FALSE;
\t\t});
};

PROTOTYPE._updateButton = function(button)
{
\t// Make sure tooltip is rendered and if not, return
\tif(!this.rendered) { return FALSE; }

\tvar elem = this.elements.button;
\tif(button) { this._createButton(); }
\telse { elem.remove(); }
};
;// Widget class creator
function createWidgetClass(cls) {
\treturn WIDGET.concat('').join(cls ? '-'+cls+' ' : ' ');
}

// Widget class setter method
PROTOTYPE._setWidget = function()
{
\tvar on = this.options.style.widget,
\t\telements = this.elements,
\t\ttooltip = elements.tooltip,
\t\tdisabled = tooltip.hasClass(CLASS_DISABLED);

\ttooltip.removeClass(CLASS_DISABLED);
\tCLASS_DISABLED = on ? 'ui-state-disabled' : 'qtip-disabled';
\ttooltip.toggleClass(CLASS_DISABLED, disabled);

\ttooltip.toggleClass('ui-helper-reset '+createWidgetClass(), on).toggleClass(CLASS_DEFAULT, this.options.style.def && !on);

\tif(elements.content) {
\t\telements.content.toggleClass( createWidgetClass('content'), on);
\t}
\tif(elements.titlebar) {
\t\telements.titlebar.toggleClass( createWidgetClass('header'), on);
\t}
\tif(elements.button) {
\t\telements.button.toggleClass(NAMESPACE+'-icon', !on);
\t}
};
;function delay(callback, duration) {
\t// If tooltip has displayed, start hide timer
\tif(duration > 0) {
\t\treturn setTimeout(
\t\t\t\$.proxy(callback, this), duration
\t\t);
\t}
\telse{ callback.call(this); }
}

function showMethod(event) {
\tif(this.tooltip.hasClass(CLASS_DISABLED)) { return; }

\t// Clear hide timers
\tclearTimeout(this.timers.show);
\tclearTimeout(this.timers.hide);

\t// Start show timer
\tthis.timers.show = delay.call(this,
\t\tfunction() { this.toggle(TRUE, event); },
\t\tthis.options.show.delay
\t);
}

function hideMethod(event) {
\tif(this.tooltip.hasClass(CLASS_DISABLED) || this.destroyed) { return; }

\t// Check if new target was actually the tooltip element
\tvar relatedTarget = \$(event.relatedTarget),
\t\tontoTooltip = relatedTarget.closest(SELECTOR)[0] === this.tooltip[0],
\t\tontoTarget = relatedTarget[0] === this.options.show.target[0];

\t// Clear timers and stop animation queue
\tclearTimeout(this.timers.show);
\tclearTimeout(this.timers.hide);

\t// Prevent hiding if tooltip is fixed and event target is the tooltip.
\t// Or if mouse positioning is enabled and cursor momentarily overlaps
\tif(this !== relatedTarget[0] &&
\t\t(this.options.position.target === 'mouse' && ontoTooltip) ||
\t\t(this.options.hide.fixed && (
\t\t\t(/mouse(out|leave|move)/).test(event.type) && (ontoTooltip || ontoTarget))
\t\t))
\t{
\t\ttry {
\t\t\tevent.preventDefault();
\t\t\tevent.stopImmediatePropagation();
\t\t} catch(e) {}

\t\treturn;
\t}

\t// If tooltip has displayed, start hide timer
\tthis.timers.hide = delay.call(this,
\t\tfunction() { this.toggle(FALSE, event); },
\t\tthis.options.hide.delay,
\t\tthis
\t);
}

function inactiveMethod(event) {
\tif(this.tooltip.hasClass(CLASS_DISABLED) || !this.options.hide.inactive) { return; }

\t// Clear timer
\tclearTimeout(this.timers.inactive);

\tthis.timers.inactive = delay.call(this,
\t\tfunction(){ this.hide(event); },
\t\tthis.options.hide.inactive
\t);
}

function repositionMethod(event) {
\tif(this.rendered && this.tooltip[0].offsetWidth > 0) { this.reposition(event); }
}

// Store mouse coordinates
PROTOTYPE._storeMouse = function(event) {
\t(this.mouse = \$.event.fix(event)).type = 'mousemove';
\treturn this;
};

// Bind events
PROTOTYPE._bind = function(targets, events, method, suffix, context) {
\tif(!targets || !method || !events.length) { return; }
\tvar ns = '.' + this._id + (suffix ? '-'+suffix : '');
\t\$(targets).bind(
\t\t(events.split ? events : events.join(ns + ' ')) + ns,
\t\t\$.proxy(method, context || this)
\t);
\treturn this;
};
PROTOTYPE._unbind = function(targets, suffix) {
\ttargets && \$(targets).unbind('.' + this._id + (suffix ? '-'+suffix : ''));
\treturn this;
};

// Global delegation helper
function delegate(selector, events, method) {
\t\$(document.body).delegate(selector,
\t\t(events.split ? events : events.join('.'+NAMESPACE + ' ')) + '.'+NAMESPACE,
\t\tfunction() {
\t\t\tvar api = QTIP.api[ \$.attr(this, ATTR_ID) ];
\t\t\tapi && !api.disabled && method.apply(api, arguments);
\t\t}
\t);
}
// Event trigger
PROTOTYPE._trigger = function(type, args, event) {
\tvar callback = \$.Event('tooltip'+type);
\tcallback.originalEvent = (event && \$.extend({}, event)) || this.cache.event || NULL;

\tthis.triggering = type;
\tthis.tooltip.trigger(callback, [this].concat(args || []));
\tthis.triggering = FALSE;

\treturn !callback.isDefaultPrevented();
};

PROTOTYPE._bindEvents = function(showEvents, hideEvents, showTargets, hideTargets, showMethod, hideMethod) {
\t// Get tasrgets that lye within both
\tvar similarTargets = showTargets.filter( hideTargets ).add( hideTargets.filter(showTargets) ),
\t\ttoggleEvents = [];

\t// If hide and show targets are the same...
\tif(similarTargets.length) {

\t\t// Filter identical show/hide events
\t\t\$.each(hideEvents, function(i, type) {
\t\t\tvar showIndex = \$.inArray(type, showEvents);

\t\t\t// Both events are identical, remove from both hide and show events
\t\t\t// and append to toggleEvents
\t\t\tshowIndex > -1 && toggleEvents.push( showEvents.splice( showIndex, 1 )[0] );
\t\t});

\t\t// Toggle events are special case of identical show/hide events, which happen in sequence
\t\tif(toggleEvents.length) {
\t\t\t// Bind toggle events to the similar targets
\t\t\tthis._bind(similarTargets, toggleEvents, function(event) {
\t\t\t\tvar state = this.rendered ? this.tooltip[0].offsetWidth > 0 : false;
\t\t\t\t(state ? hideMethod : showMethod).call(this, event);
\t\t\t});

\t\t\t// Remove the similar targets from the regular show/hide bindings
\t\t\tshowTargets = showTargets.not(similarTargets);
\t\t\thideTargets = hideTargets.not(similarTargets);
\t\t}
\t}

\t// Apply show/hide/toggle events
\tthis._bind(showTargets, showEvents, showMethod);
\tthis._bind(hideTargets, hideEvents, hideMethod);
};

PROTOTYPE._assignInitialEvents = function(event) {
\tvar options = this.options,
\t\tshowTarget = options.show.target,
\t\thideTarget = options.hide.target,
\t\tshowEvents = options.show.event ? \$.trim('' + options.show.event).split(' ') : [],
\t\thideEvents = options.hide.event ? \$.trim('' + options.hide.event).split(' ') : [];

\t// Catch remove/removeqtip events on target element to destroy redundant tooltips
\tthis._bind(this.elements.target, ['remove', 'removeqtip'], function(event) {
\t\tthis.destroy(true);
\t}, 'destroy');

\t/*
\t * Make sure hoverIntent functions properly by using mouseleave as a hide event if
\t * mouseenter/mouseout is used for show.event, even if it isn't in the users options.
\t */
\tif(/mouse(over|enter)/i.test(options.show.event) && !/mouse(out|leave)/i.test(options.hide.event)) {
\t\thideEvents.push('mouseleave');
\t}

\t/*
\t * Also make sure initial mouse targetting works correctly by caching mousemove coords
\t * on show targets before the tooltip has rendered. Also set onTarget when triggered to
\t * keep mouse tracking working.
\t */
\tthis._bind(showTarget, 'mousemove', function(event) {
\t\tthis._storeMouse(event);
\t\tthis.cache.onTarget = TRUE;
\t});

\t// Define hoverIntent function
\tfunction hoverIntent(event) {
\t\t// Only continue if tooltip isn't disabled
\t\tif(this.disabled || this.destroyed) { return FALSE; }

\t\t// Cache the event data
\t\tthis.cache.event = event && \$.event.fix(event);
\t\tthis.cache.target = event && \$(event.target);

\t\t// Start the event sequence
\t\tclearTimeout(this.timers.show);
\t\tthis.timers.show = delay.call(this,
\t\t\tfunction() { this.render(typeof event === 'object' || options.show.ready); },
\t\t\toptions.prerender ? 0 : options.show.delay
\t\t);
\t}

\t// Filter and bind events
\tthis._bindEvents(showEvents, hideEvents, showTarget, hideTarget, hoverIntent, function() {
\t\tif(!this.timers) { return FALSE; }
\t\tclearTimeout(this.timers.show);
\t});

\t// Prerendering is enabled, create tooltip now
\tif(options.show.ready || options.prerender) { hoverIntent.call(this, event); }
};

// Event assignment method
PROTOTYPE._assignEvents = function() {
\tvar self = this,
\t\toptions = this.options,
\t\tposOptions = options.position,

\t\ttooltip = this.tooltip,
\t\tshowTarget = options.show.target,
\t\thideTarget = options.hide.target,
\t\tcontainerTarget = posOptions.container,
\t\tviewportTarget = posOptions.viewport,
\t\tdocumentTarget = \$(document),
\t\tbodyTarget = \$(document.body),
\t\twindowTarget = \$(window),

\t\tshowEvents = options.show.event ? \$.trim('' + options.show.event).split(' ') : [],
\t\thideEvents = options.hide.event ? \$.trim('' + options.hide.event).split(' ') : [];


\t// Assign passed event callbacks
\t\$.each(options.events, function(name, callback) {
\t\tself._bind(tooltip, name === 'toggle' ? ['tooltipshow','tooltiphide'] : ['tooltip'+name], callback, null, tooltip);
\t});

\t// Hide tooltips when leaving current window/frame (but not select/option elements)
\tif(/mouse(out|leave)/i.test(options.hide.event) && options.hide.leave === 'window') {
\t\tthis._bind(documentTarget, ['mouseout', 'blur'], function(event) {
\t\t\tif(!/select|option/.test(event.target.nodeName) && !event.relatedTarget) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t});
\t}

\t// Enable hide.fixed by adding appropriate class
\tif(options.hide.fixed) {
\t\thideTarget = hideTarget.add( tooltip.addClass(CLASS_FIXED) );
\t}

\t/*
\t * Make sure hoverIntent functions properly by using mouseleave to clear show timer if
\t * mouseenter/mouseout is used for show.event, even if it isn't in the users options.
\t */
\telse if(/mouse(over|enter)/i.test(options.show.event)) {
\t\tthis._bind(hideTarget, 'mouseleave', function() {
\t\t\tclearTimeout(this.timers.show);
\t\t});
\t}

\t// Hide tooltip on document mousedown if unfocus events are enabled
\tif(('' + options.hide.event).indexOf('unfocus') > -1) {
\t\tthis._bind(containerTarget.closest('html'), ['mousedown', 'touchstart'], function(event) {
\t\t\tvar elem = \$(event.target),
\t\t\t\tenabled = this.rendered && !this.tooltip.hasClass(CLASS_DISABLED) && this.tooltip[0].offsetWidth > 0,
\t\t\t\tisAncestor = elem.parents(SELECTOR).filter(this.tooltip[0]).length > 0;

\t\t\tif(elem[0] !== this.target[0] && elem[0] !== this.tooltip[0] && !isAncestor &&
\t\t\t\t!this.target.has(elem[0]).length && enabled
\t\t\t) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t});
\t}

\t// Check if the tooltip hides when inactive
\tif('number' === typeof options.hide.inactive) {
\t\t// Bind inactive method to show target(s) as a custom event
\t\tthis._bind(showTarget, 'qtip-'+this.id+'-inactive', inactiveMethod, 'inactive');

\t\t// Define events which reset the 'inactive' event handler
\t\tthis._bind(hideTarget.add(tooltip), QTIP.inactiveEvents, inactiveMethod);
\t}

\t// Filter and bind events
\tthis._bindEvents(showEvents, hideEvents, showTarget, hideTarget, showMethod, hideMethod);

\t// Mouse movement bindings
\tthis._bind(showTarget.add(tooltip), 'mousemove', function(event) {
\t\t// Check if the tooltip hides when mouse is moved a certain distance
\t\tif('number' === typeof options.hide.distance) {
\t\t\tvar origin = this.cache.origin || {},
\t\t\t\tlimit = this.options.hide.distance,
\t\t\t\tabs = Math.abs;

\t\t\t// Check if the movement has gone beyond the limit, and hide it if so
\t\t\tif(abs(event.pageX - origin.pageX) >= limit || abs(event.pageY - origin.pageY) >= limit) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t}

\t\t// Cache mousemove coords on show targets
\t\tthis._storeMouse(event);
\t});

\t// Mouse positioning events
\tif(posOptions.target === 'mouse') {
\t\t// If mouse adjustment is on...
\t\tif(posOptions.adjust.mouse) {
\t\t\t// Apply a mouseleave event so we don't get problems with overlapping
\t\t\tif(options.hide.event) {
\t\t\t\t// Track if we're on the target or not
\t\t\t\tthis._bind(showTarget, ['mouseenter', 'mouseleave'], function(event) {
\t\t\t\t\tif(!this.cache) {return FALSE; }
\t\t\t\t\tthis.cache.onTarget = event.type === 'mouseenter';
\t\t\t\t});
\t\t\t}

\t\t\t// Update tooltip position on mousemove
\t\t\tthis._bind(documentTarget, 'mousemove', function(event) {
\t\t\t\t// Update the tooltip position only if the tooltip is visible and adjustment is enabled
\t\t\t\tif(this.rendered && this.cache.onTarget && !this.tooltip.hasClass(CLASS_DISABLED) && this.tooltip[0].offsetWidth > 0) {
\t\t\t\t\tthis.reposition(event);
\t\t\t\t}
\t\t\t});
\t\t}
\t}

\t// Adjust positions of the tooltip on window resize if enabled
\tif(posOptions.adjust.resize || viewportTarget.length) {
\t\tthis._bind( \$.event.special.resize ? viewportTarget : windowTarget, 'resize', repositionMethod );
\t}

\t// Adjust tooltip position on scroll of the window or viewport element if present
\tif(posOptions.adjust.scroll) {
\t\tthis._bind( windowTarget.add(posOptions.container), 'scroll', repositionMethod );
\t}
};

// Un-assignment method
PROTOTYPE._unassignEvents = function() {
\tvar options = this.options,
\t\tshowTargets = options.show.target,
\t\thideTargets = options.hide.target,
\t\ttargets = \$.grep([
\t\t\tthis.elements.target[0],
\t\t\tthis.rendered && this.tooltip[0],
\t\t\toptions.position.container[0],
\t\t\toptions.position.viewport[0],
\t\t\toptions.position.container.closest('html')[0], // unfocus
\t\t\twindow,
\t\t\tdocument
\t\t], function(i) {
\t\t\treturn typeof i === 'object';
\t\t});

\t// Add show and hide targets if they're valid
\tif(showTargets && showTargets.toArray) {
\t\ttargets = targets.concat(showTargets.toArray());
\t}
\tif(hideTargets && hideTargets.toArray) {
\t\ttargets = targets.concat(hideTargets.toArray());
\t}

\t// Unbind the events
\tthis._unbind(targets)
\t\t._unbind(targets, 'destroy')
\t\t._unbind(targets, 'inactive');
};

// Apply common event handlers using delegate (avoids excessive .bind calls!)
\$(function() {
\tdelegate(SELECTOR, ['mouseenter', 'mouseleave'], function(event) {
\t\tvar state = event.type === 'mouseenter',
\t\t\ttooltip = \$(event.currentTarget),
\t\t\ttarget = \$(event.relatedTarget || event.target),
\t\t\toptions = this.options;

\t\t// On mouseenter...
\t\tif(state) {
\t\t\t// Focus the tooltip on mouseenter (z-index stacking)
\t\t\tthis.focus(event);

\t\t\t// Clear hide timer on tooltip hover to prevent it from closing
\t\t\ttooltip.hasClass(CLASS_FIXED) && !tooltip.hasClass(CLASS_DISABLED) && clearTimeout(this.timers.hide);
\t\t}

\t\t// On mouseleave...
\t\telse {
\t\t\t// When mouse tracking is enabled, hide when we leave the tooltip and not onto the show target (if a hide event is set)
\t\t\tif(options.position.target === 'mouse' && options.position.adjust.mouse &&
\t\t\t\toptions.hide.event && options.show.target && !target.closest(options.show.target[0]).length) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t}

\t\t// Add hover class
\t\ttooltip.toggleClass(CLASS_HOVER, state);
\t});

\t// Define events which reset the 'inactive' event handler
\tdelegate('['+ATTR_ID+']', INACTIVE_EVENTS, inactiveMethod);
});
;// Initialization method
function init(elem, id, opts) {
\tvar obj, posOptions, attr, config, title,

\t// Setup element references
\tdocBody = \$(document.body),

\t// Use document body instead of document element if needed
\tnewTarget = elem[0] === document ? docBody : elem,

\t// Grab metadata from element if plugin is present
\tmetadata = (elem.metadata) ? elem.metadata(opts.metadata) : NULL,

\t// If metadata type if HTML5, grab 'name' from the object instead, or use the regular data object otherwise
\tmetadata5 = opts.metadata.type === 'html5' && metadata ? metadata[opts.metadata.name] : NULL,

\t// Grab data from metadata.name (or data-qtipopts as fallback) using .data() method,
\thtml5 = elem.data(opts.metadata.name || 'qtipopts');

\t// If we don't get an object returned attempt to parse it manualyl without parseJSON
\ttry { html5 = typeof html5 === 'string' ? \$.parseJSON(html5) : html5; } catch(e) {}

\t// Merge in and sanitize metadata
\tconfig = \$.extend(TRUE, {}, QTIP.defaults, opts,
\t\ttypeof html5 === 'object' ? sanitizeOptions(html5) : NULL,
\t\tsanitizeOptions(metadata5 || metadata));

\t// Re-grab our positioning options now we've merged our metadata and set id to passed value
\tposOptions = config.position;
\tconfig.id = id;

\t// Setup missing content if none is detected
\tif('boolean' === typeof config.content.text) {
\t\tattr = elem.attr(config.content.attr);

\t\t// Grab from supplied attribute if available
\t\tif(config.content.attr !== FALSE && attr) { config.content.text = attr; }

\t\t// No valid content was found, abort render
\t\telse { return FALSE; }
\t}

\t// Setup target options
\tif(!posOptions.container.length) { posOptions.container = docBody; }
\tif(posOptions.target === FALSE) { posOptions.target = newTarget; }
\tif(config.show.target === FALSE) { config.show.target = newTarget; }
\tif(config.show.solo === TRUE) { config.show.solo = posOptions.container.closest('body'); }
\tif(config.hide.target === FALSE) { config.hide.target = newTarget; }
\tif(config.position.viewport === TRUE) { config.position.viewport = posOptions.container; }

\t// Ensure we only use a single container
\tposOptions.container = posOptions.container.eq(0);

\t// Convert position corner values into x and y strings
\tposOptions.at = new CORNER(posOptions.at, TRUE);
\tposOptions.my = new CORNER(posOptions.my);

\t// Destroy previous tooltip if overwrite is enabled, or skip element if not
\tif(elem.data(NAMESPACE)) {
\t\tif(config.overwrite) {
\t\t\telem.qtip('destroy', true);
\t\t}
\t\telse if(config.overwrite === FALSE) {
\t\t\treturn FALSE;
\t\t}
\t}

\t// Add has-qtip attribute
\telem.attr(ATTR_HAS, id);

\t// Remove title attribute and store it if present
\tif(config.suppress && (title = elem.attr('title'))) {
\t\t// Final attr call fixes event delegatiom and IE default tooltip showing problem
\t\telem.removeAttr('title').attr(oldtitle, title).attr('title', '');
\t}

\t// Initialize the tooltip and add API reference
\tobj = new QTip(elem, config, id, !!attr);
\telem.data(NAMESPACE, obj);

\treturn obj;
}

// jQuery \$.fn extension method
QTIP = \$.fn.qtip = function(options, notation, newValue)
{
\tvar command = ('' + options).toLowerCase(), // Parse command
\t\treturned = NULL,
\t\targs = \$.makeArray(arguments).slice(1),
\t\tevent = args[args.length - 1],
\t\topts = this[0] ? \$.data(this[0], NAMESPACE) : NULL;

\t// Check for API request
\tif((!arguments.length && opts) || command === 'api') {
\t\treturn opts;
\t}

\t// Execute API command if present
\telse if('string' === typeof options) {
\t\tthis.each(function() {
\t\t\tvar api = \$.data(this, NAMESPACE);
\t\t\tif(!api) { return TRUE; }

\t\t\t// Cache the event if possible
\t\t\tif(event && event.timeStamp) { api.cache.event = event; }

\t\t\t// Check for specific API commands
\t\t\tif(notation && (command === 'option' || command === 'options')) {
\t\t\t\tif(newValue !== undefined || \$.isPlainObject(notation)) {
\t\t\t\t\tapi.set(notation, newValue);
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\treturned = api.get(notation);
\t\t\t\t\treturn FALSE;
\t\t\t\t}
\t\t\t}

\t\t\t// Execute API command
\t\t\telse if(api[command]) {
\t\t\t\tapi[command].apply(api, args);
\t\t\t}
\t\t});

\t\treturn returned !== NULL ? returned : this;
\t}

\t// No API commands. validate provided options and setup qTips
\telse if('object' === typeof options || !arguments.length) {
\t\t// Sanitize options first
\t\topts = sanitizeOptions(\$.extend(TRUE, {}, options));

\t\treturn this.each(function(i) {
\t\t\tvar api, id;

\t\t\t// Find next available ID, or use custom ID if provided
\t\t\tid = \$.isArray(opts.id) ? opts.id[i] : opts.id;
\t\t\tid = !id || id === FALSE || id.length < 1 || QTIP.api[id] ? QTIP.nextid++ : id;

\t\t\t// Initialize the qTip and re-grab newly sanitized options
\t\t\tapi = init(\$(this), id, opts);
\t\t\tif(api === FALSE) { return TRUE; }
\t\t\telse { QTIP.api[id] = api; }

\t\t\t// Initialize plugins
\t\t\t\$.each(PLUGINS, function() {
\t\t\t\tif(this.initialize === 'initialize') { this(api); }
\t\t\t});

\t\t\t// Assign initial pre-render events
\t\t\tapi._assignInitialEvents(event);
\t\t});
\t}
};

// Expose class
\$.qtip = QTip;

// Populated in render method
QTIP.api = {};
;\$.each({
\t/* Allow other plugins to successfully retrieve the title of an element with a qTip applied */
\tattr: function(attr, val) {
\t\tif(this.length) {
\t\t\tvar self = this[0],
\t\t\t\ttitle = 'title',
\t\t\t\tapi = \$.data(self, 'qtip');

\t\t\tif(attr === title && api && 'object' === typeof api && api.options.suppress) {
\t\t\t\tif(arguments.length < 2) {
\t\t\t\t\treturn \$.attr(self, oldtitle);
\t\t\t\t}

\t\t\t\t// If qTip is rendered and title was originally used as content, update it
\t\t\t\tif(api && api.options.content.attr === title && api.cache.attr) {
\t\t\t\t\tapi.set('content.text', val);
\t\t\t\t}

\t\t\t\t// Use the regular attr method to set, then cache the result
\t\t\t\treturn this.attr(oldtitle, val);
\t\t\t}
\t\t}

\t\treturn \$.fn['attr'+replaceSuffix].apply(this, arguments);
\t},

\t/* Allow clone to correctly retrieve cached title attributes */
\tclone: function(keepData) {
\t\tvar titles = \$([]), title = 'title',

\t\t// Clone our element using the real clone method
\t\telems = \$.fn['clone'+replaceSuffix].apply(this, arguments);

\t\t// Grab all elements with an oldtitle set, and change it to regular title attribute, if keepData is false
\t\tif(!keepData) {
\t\t\telems.filter('['+oldtitle+']').attr('title', function() {
\t\t\t\treturn \$.attr(this, oldtitle);
\t\t\t})
\t\t\t.removeAttr(oldtitle);
\t\t}

\t\treturn elems;
\t}
}, function(name, func) {
\tif(!func || \$.fn[name+replaceSuffix]) { return TRUE; }

\tvar old = \$.fn[name+replaceSuffix] = \$.fn[name];
\t\$.fn[name] = function() {
\t\treturn func.apply(this, arguments) || old.apply(this, arguments);
\t};
});

/* Fire off 'removeqtip' handler in \$.cleanData if jQuery UI not present (it already does similar).
 * This snippet is taken directly from jQuery UI source code found here:
 *     http://code.jquery.com/ui/jquery-ui-git.js
 */
if(!\$.ui) {
\t\$['cleanData'+replaceSuffix] = \$.cleanData;
\t\$.cleanData = function( elems ) {
\t\tfor(var i = 0, elem; (elem = \$( elems[i] )).length; i++) {
\t\t\tif(elem.attr(ATTR_HAS)) {
\t\t\t\ttry { elem.triggerHandler('removeqtip'); }
\t\t\t\tcatch( e ) {}
\t\t\t}
\t\t}
\t\t\$['cleanData'+replaceSuffix].apply(this, arguments);
\t};
}
;// qTip version
QTIP.version = '2.2.1';

// Base ID for all qTips
QTIP.nextid = 0;

// Inactive events array
QTIP.inactiveEvents = INACTIVE_EVENTS;

// Base z-index for all qTips
QTIP.zindex = 15000;

// Define configuration defaults
QTIP.defaults = {
\tprerender: FALSE,
\tid: FALSE,
\toverwrite: TRUE,
\tsuppress: TRUE,
\tcontent: {
\t\ttext: TRUE,
\t\tattr: 'title',
\t\ttitle: FALSE,
\t\tbutton: FALSE
\t},
\tposition: {
\t\tmy: 'top left',
\t\tat: 'bottom right',
\t\ttarget: FALSE,
\t\tcontainer: FALSE,
\t\tviewport: FALSE,
\t\tadjust: {
\t\t\tx: 0, y: 0,
\t\t\tmouse: TRUE,
\t\t\tscroll: TRUE,
\t\t\tresize: TRUE,
\t\t\tmethod: 'flipinvert flipinvert'
\t\t},
\t\teffect: function(api, pos, viewport) {
\t\t\t\$(this).animate(pos, {
\t\t\t\tduration: 200,
\t\t\t\tqueue: FALSE
\t\t\t});
\t\t}
\t},
\tshow: {
\t\ttarget: FALSE,
\t\tevent: 'mouseenter',
\t\teffect: TRUE,
\t\tdelay: 90,
\t\tsolo: FALSE,
\t\tready: FALSE,
\t\tautofocus: FALSE
\t},
\thide: {
\t\ttarget: FALSE,
\t\tevent: 'mouseleave',
\t\teffect: TRUE,
\t\tdelay: 0,
\t\tfixed: FALSE,
\t\tinactive: FALSE,
\t\tleave: 'window',
\t\tdistance: FALSE
\t},
\tstyle: {
\t\tclasses: '',
\t\twidget: FALSE,
\t\twidth: FALSE,
\t\theight: FALSE,
\t\tdef: TRUE
\t},
\tevents: {
\t\trender: NULL,
\t\tmove: NULL,
\t\tshow: NULL,
\t\thide: NULL,
\t\ttoggle: NULL,
\t\tvisible: NULL,
\t\thidden: NULL,
\t\tfocus: NULL,
\t\tblur: NULL
\t}
};
;var TIP,

// .bind()/.on() namespace
TIPNS = '.qtip-tip',

// Common CSS strings
MARGIN = 'margin',
BORDER = 'border',
COLOR = 'color',
BG_COLOR = 'background-color',
TRANSPARENT = 'transparent',
IMPORTANT = ' !important',

// Check if the browser supports <canvas/> elements
HASCANVAS = !!document.createElement('canvas').getContext,

// Invalid colour values used in parseColours()
INVALID = /rgba?\\(0, 0, 0(, 0)?\\)|transparent|#123456/i;

// Camel-case method, taken from jQuery source
// http://code.jquery.com/jquery-1.8.0.js
function camel(s) { return s.charAt(0).toUpperCase() + s.slice(1); }

/*
 * Modified from Modernizr's testPropsAll()
 * http://modernizr.com/downloads/modernizr-latest.js
 */
var cssProps = {}, cssPrefixes = [\"Webkit\", \"O\", \"Moz\", \"ms\"];
function vendorCss(elem, prop) {
\tvar ucProp = prop.charAt(0).toUpperCase() + prop.slice(1),
\t\tprops = (prop + ' ' + cssPrefixes.join(ucProp + ' ') + ucProp).split(' '),
\t\tcur, val, i = 0;

\t// If the property has already been mapped...
\tif(cssProps[prop]) { return elem.css(cssProps[prop]); }

\twhile((cur = props[i++])) {
\t\tif((val = elem.css(cur)) !== undefined) {
\t\t\treturn cssProps[prop] = cur, val;
\t\t}
\t}
}

// Parse a given elements CSS property into an int
function intCss(elem, prop) {
\treturn Math.ceil(parseFloat(vendorCss(elem, prop)));
}


// VML creation (for IE only)
if(!HASCANVAS) {
\tvar createVML = function(tag, props, style) {
\t\treturn '<qtipvml:'+tag+' xmlns=\"urn:schemas-microsoft.com:vml\" class=\"qtip-vml\" '+(props||'')+
\t\t\t' style=\"behavior: url(#default#VML); '+(style||'')+ '\" />';
\t};
}

// Canvas only definitions
else {
\tvar PIXEL_RATIO = window.devicePixelRatio || 1,
\t\tBACKING_STORE_RATIO = (function() {
\t\t\tvar context = document.createElement('canvas').getContext('2d');
\t\t\treturn context.backingStorePixelRatio || context.webkitBackingStorePixelRatio || context.mozBackingStorePixelRatio ||
\t\t\t\t\tcontext.msBackingStorePixelRatio || context.oBackingStorePixelRatio || 1;
\t\t}()),
\t\tSCALE = PIXEL_RATIO / BACKING_STORE_RATIO;
}


function Tip(qtip, options) {
\tthis._ns = 'tip';
\tthis.options = options;
\tthis.offset = options.offset;
\tthis.size = [ options.width, options.height ];

\t// Initialize
\tthis.init( (this.qtip = qtip) );
}

\$.extend(Tip.prototype, {
\tinit: function(qtip) {
\t\tvar context, tip;

\t\t// Create tip element and prepend to the tooltip
\t\ttip = this.element = qtip.elements.tip = \$('<div />', { 'class': NAMESPACE+'-tip' }).prependTo(qtip.tooltip);

\t\t// Create tip drawing element(s)
\t\tif(HASCANVAS) {
\t\t\t// save() as soon as we create the canvas element so FF2 doesn't bork on our first restore()!
\t\t\tcontext = \$('<canvas />').appendTo(this.element)[0].getContext('2d');

\t\t\t// Setup constant parameters
\t\t\tcontext.lineJoin = 'miter';
\t\t\tcontext.miterLimit = 100000;
\t\t\tcontext.save();
\t\t}
\t\telse {
\t\t\tcontext = createVML('shape', 'coordorigin=\"0,0\"', 'position:absolute;');
\t\t\tthis.element.html(context + context);

\t\t\t// Prevent mousing down on the tip since it causes problems with .live() handling in IE due to VML
\t\t\tqtip._bind( \$('*', tip).add(tip), ['click', 'mousedown'], function(event) { event.stopPropagation(); }, this._ns);
\t\t}

\t\t// Bind update events
\t\tqtip._bind(qtip.tooltip, 'tooltipmove', this.reposition, this._ns, this);

\t\t// Create it
\t\tthis.create();
\t},

\t_swapDimensions: function() {
\t\tthis.size[0] = this.options.height;
\t\tthis.size[1] = this.options.width;
\t},
\t_resetDimensions: function() {
\t\tthis.size[0] = this.options.width;
\t\tthis.size[1] = this.options.height;
\t},

\t_useTitle: function(corner) {
\t\tvar titlebar = this.qtip.elements.titlebar;
\t\treturn titlebar && (
\t\t\tcorner.y === TOP || (corner.y === CENTER && this.element.position().top + (this.size[1] / 2) + this.options.offset < titlebar.outerHeight(TRUE))
\t\t);
\t},

\t_parseCorner: function(corner) {
\t\tvar my = this.qtip.options.position.my;

\t\t// Detect corner and mimic properties
\t\tif(corner === FALSE || my === FALSE) {
\t\t\tcorner = FALSE;
\t\t}
\t\telse if(corner === TRUE) {
\t\t\tcorner = new CORNER( my.string() );
\t\t}
\t\telse if(!corner.string) {
\t\t\tcorner = new CORNER(corner);
\t\t\tcorner.fixed = TRUE;
\t\t}

\t\treturn corner;
\t},

\t_parseWidth: function(corner, side, use) {
\t\tvar elements = this.qtip.elements,
\t\t\tprop = BORDER + camel(side) + 'Width';

\t\treturn (use ? intCss(use, prop) : (
\t\t\tintCss(elements.content, prop) ||
\t\t\tintCss(this._useTitle(corner) && elements.titlebar || elements.content, prop) ||
\t\t\tintCss(elements.tooltip, prop)
\t\t)) || 0;
\t},

\t_parseRadius: function(corner) {
\t\tvar elements = this.qtip.elements,
\t\t\tprop = BORDER + camel(corner.y) + camel(corner.x) + 'Radius';

\t\treturn BROWSER.ie < 9 ? 0 :
\t\t\tintCss(this._useTitle(corner) && elements.titlebar || elements.content, prop) ||
\t\t\tintCss(elements.tooltip, prop) || 0;
\t},

\t_invalidColour: function(elem, prop, compare) {
\t\tvar val = elem.css(prop);
\t\treturn !val || (compare && val === elem.css(compare)) || INVALID.test(val) ? FALSE : val;
\t},

\t_parseColours: function(corner) {
\t\tvar elements = this.qtip.elements,
\t\t\ttip = this.element.css('cssText', ''),
\t\t\tborderSide = BORDER + camel(corner[ corner.precedance ]) + camel(COLOR),
\t\t\tcolorElem = this._useTitle(corner) && elements.titlebar || elements.content,
\t\t\tcss = this._invalidColour, color = [];

\t\t// Attempt to detect the background colour from various elements, left-to-right precedance
\t\tcolor[0] = css(tip, BG_COLOR) || css(colorElem, BG_COLOR) || css(elements.content, BG_COLOR) ||
\t\t\tcss(elements.tooltip, BG_COLOR) || tip.css(BG_COLOR);

\t\t// Attempt to detect the correct border side colour from various elements, left-to-right precedance
\t\tcolor[1] = css(tip, borderSide, COLOR) || css(colorElem, borderSide, COLOR) ||
\t\t\tcss(elements.content, borderSide, COLOR) || css(elements.tooltip, borderSide, COLOR) || elements.tooltip.css(borderSide);

\t\t// Reset background and border colours
\t\t\$('*', tip).add(tip).css('cssText', BG_COLOR+':'+TRANSPARENT+IMPORTANT+';'+BORDER+':0'+IMPORTANT+';');

\t\treturn color;
\t},

\t_calculateSize: function(corner) {
\t\tvar y = corner.precedance === Y,
\t\t\twidth = this.options['width'],
\t\t\theight = this.options['height'],
\t\t\tisCenter = corner.abbrev() === 'c',
\t\t\tbase = (y ? width: height) * (isCenter ? 0.5 : 1),
\t\t\tpow = Math.pow,
\t\t\tround = Math.round,
\t\t\tbigHyp, ratio, result,

\t\tsmallHyp = Math.sqrt( pow(base, 2) + pow(height, 2) ),
\t\thyp = [ (this.border / base) * smallHyp, (this.border / height) * smallHyp ];

\t\thyp[2] = Math.sqrt( pow(hyp[0], 2) - pow(this.border, 2) );
\t\thyp[3] = Math.sqrt( pow(hyp[1], 2) - pow(this.border, 2) );

\t\tbigHyp = smallHyp + hyp[2] + hyp[3] + (isCenter ? 0 : hyp[0]);
\t\tratio = bigHyp / smallHyp;

\t\tresult = [ round(ratio * width), round(ratio * height) ];
\t\treturn y ? result : result.reverse();
\t},

\t// Tip coordinates calculator
\t_calculateTip: function(corner, size, scale) {
\t\tscale = scale || 1;
\t\tsize = size || this.size;

\t\tvar width = size[0] * scale,
\t\t\theight = size[1] * scale,
\t\t\twidth2 = Math.ceil(width / 2), height2 = Math.ceil(height / 2),

\t\t// Define tip coordinates in terms of height and width values
\t\ttips = {
\t\t\tbr:\t[0,0,\t\twidth,height,\twidth,0],
\t\t\tbl:\t[0,0,\t\twidth,0,\t\t0,height],
\t\t\ttr:\t[0,height,\twidth,0,\t\twidth,height],
\t\t\ttl:\t[0,0,\t\t0,height,\t\twidth,height],
\t\t\ttc:\t[0,height,\twidth2,0,\t\twidth,height],
\t\t\tbc:\t[0,0,\t\twidth,0,\t\twidth2,height],
\t\t\trc:\t[0,0,\t\twidth,height2,\t0,height],
\t\t\tlc:\t[width,0,\twidth,height,\t0,height2]
\t\t};

\t\t// Set common side shapes
\t\ttips.lt = tips.br; tips.rt = tips.bl;
\t\ttips.lb = tips.tr; tips.rb = tips.tl;

\t\treturn tips[ corner.abbrev() ];
\t},

\t// Tip coordinates drawer (canvas)
\t_drawCoords: function(context, coords) {
\t\tcontext.beginPath();
\t\tcontext.moveTo(coords[0], coords[1]);
\t\tcontext.lineTo(coords[2], coords[3]);
\t\tcontext.lineTo(coords[4], coords[5]);
\t\tcontext.closePath();
\t},

\tcreate: function() {
\t\t// Determine tip corner
\t\tvar c = this.corner = (HASCANVAS || BROWSER.ie) && this._parseCorner(this.options.corner);

\t\t// If we have a tip corner...
\t\tif( (this.enabled = !!this.corner && this.corner.abbrev() !== 'c') ) {
\t\t\t// Cache it
\t\t\tthis.qtip.cache.corner = c.clone();

\t\t\t// Create it
\t\t\tthis.update();
\t\t}

\t\t// Toggle tip element
\t\tthis.element.toggle(this.enabled);

\t\treturn this.corner;
\t},

\tupdate: function(corner, position) {
\t\tif(!this.enabled) { return this; }

\t\tvar elements = this.qtip.elements,
\t\t\ttip = this.element,
\t\t\tinner = tip.children(),
\t\t\toptions = this.options,
\t\t\tcurSize = this.size,
\t\t\tmimic = options.mimic,
\t\t\tround = Math.round,
\t\t\tcolor, precedance, context,
\t\t\tcoords, bigCoords, translate, newSize, border, BACKING_STORE_RATIO;

\t\t// Re-determine tip if not already set
\t\tif(!corner) { corner = this.qtip.cache.corner || this.corner; }

\t\t// Use corner property if we detect an invalid mimic value
\t\tif(mimic === FALSE) { mimic = corner; }

\t\t// Otherwise inherit mimic properties from the corner object as necessary
\t\telse {
\t\t\tmimic = new CORNER(mimic);
\t\t\tmimic.precedance = corner.precedance;

\t\t\tif(mimic.x === 'inherit') { mimic.x = corner.x; }
\t\t\telse if(mimic.y === 'inherit') { mimic.y = corner.y; }
\t\t\telse if(mimic.x === mimic.y) {
\t\t\t\tmimic[ corner.precedance ] = corner[ corner.precedance ];
\t\t\t}
\t\t}
\t\tprecedance = mimic.precedance;

\t\t// Ensure the tip width.height are relative to the tip position
\t\tif(corner.precedance === X) { this._swapDimensions(); }
\t\telse { this._resetDimensions(); }

\t\t// Update our colours
\t\tcolor = this.color = this._parseColours(corner);

\t\t// Detect border width, taking into account colours
\t\tif(color[1] !== TRANSPARENT) {
\t\t\t// Grab border width
\t\t\tborder = this.border = this._parseWidth(corner, corner[corner.precedance]);

\t\t\t// If border width isn't zero, use border color as fill if it's not invalid (1.0 style tips)
\t\t\tif(options.border && border < 1 && !INVALID.test(color[1])) { color[0] = color[1]; }

\t\t\t// Set border width (use detected border width if options.border is true)
\t\t\tthis.border = border = options.border !== TRUE ? options.border : border;
\t\t}

\t\t// Border colour was invalid, set border to zero
\t\telse { this.border = border = 0; }

\t\t// Determine tip size
\t\tnewSize = this.size = this._calculateSize(corner);
\t\ttip.css({
\t\t\twidth: newSize[0],
\t\t\theight: newSize[1],
\t\t\tlineHeight: newSize[1]+'px'
\t\t});

\t\t// Calculate tip translation
\t\tif(corner.precedance === Y) {
\t\t\ttranslate = [
\t\t\t\tround(mimic.x === LEFT ? border : mimic.x === RIGHT ? newSize[0] - curSize[0] - border : (newSize[0] - curSize[0]) / 2),
\t\t\t\tround(mimic.y === TOP ? newSize[1] - curSize[1] : 0)
\t\t\t];
\t\t}
\t\telse {
\t\t\ttranslate = [
\t\t\t\tround(mimic.x === LEFT ? newSize[0] - curSize[0] : 0),
\t\t\t\tround(mimic.y === TOP ? border : mimic.y === BOTTOM ? newSize[1] - curSize[1] - border : (newSize[1] - curSize[1]) / 2)
\t\t\t];
\t\t}

\t\t// Canvas drawing implementation
\t\tif(HASCANVAS) {
\t\t\t// Grab canvas context and clear/save it
\t\t\tcontext = inner[0].getContext('2d');
\t\t\tcontext.restore(); context.save();
\t\t\tcontext.clearRect(0,0,6000,6000);

\t\t\t// Calculate coordinates
\t\t\tcoords = this._calculateTip(mimic, curSize, SCALE);
\t\t\tbigCoords = this._calculateTip(mimic, this.size, SCALE);

\t\t\t// Set the canvas size using calculated size
\t\t\tinner.attr(WIDTH, newSize[0] * SCALE).attr(HEIGHT, newSize[1] * SCALE);
\t\t\tinner.css(WIDTH, newSize[0]).css(HEIGHT, newSize[1]);

\t\t\t// Draw the outer-stroke tip
\t\t\tthis._drawCoords(context, bigCoords);
\t\t\tcontext.fillStyle = color[1];
\t\t\tcontext.fill();

\t\t\t// Draw the actual tip
\t\t\tcontext.translate(translate[0] * SCALE, translate[1] * SCALE);
\t\t\tthis._drawCoords(context, coords);
\t\t\tcontext.fillStyle = color[0];
\t\t\tcontext.fill();
\t\t}

\t\t// VML (IE Proprietary implementation)
\t\telse {
\t\t\t// Calculate coordinates
\t\t\tcoords = this._calculateTip(mimic);

\t\t\t// Setup coordinates string
\t\t\tcoords = 'm' + coords[0] + ',' + coords[1] + ' l' + coords[2] +
\t\t\t\t',' + coords[3] + ' ' + coords[4] + ',' + coords[5] + ' xe';

\t\t\t// Setup VML-specific offset for pixel-perfection
\t\t\ttranslate[2] = border && /^(r|b)/i.test(corner.string()) ?
\t\t\t\tBROWSER.ie === 8 ? 2 : 1 : 0;

\t\t\t// Set initial CSS
\t\t\tinner.css({
\t\t\t\tcoordsize: (newSize[0]+border) + ' ' + (newSize[1]+border),
\t\t\t\tantialias: ''+(mimic.string().indexOf(CENTER) > -1),
\t\t\t\tleft: translate[0] - (translate[2] * Number(precedance === X)),
\t\t\t\ttop: translate[1] - (translate[2] * Number(precedance === Y)),
\t\t\t\twidth: newSize[0] + border,
\t\t\t\theight: newSize[1] + border
\t\t\t})
\t\t\t.each(function(i) {
\t\t\t\tvar \$this = \$(this);

\t\t\t\t// Set shape specific attributes
\t\t\t\t\$this[ \$this.prop ? 'prop' : 'attr' ]({
\t\t\t\t\tcoordsize: (newSize[0]+border) + ' ' + (newSize[1]+border),
\t\t\t\t\tpath: coords,
\t\t\t\t\tfillcolor: color[0],
\t\t\t\t\tfilled: !!i,
\t\t\t\t\tstroked: !i
\t\t\t\t})
\t\t\t\t.toggle(!!(border || i));

\t\t\t\t// Check if border is enabled and add stroke element
\t\t\t\t!i && \$this.html( createVML(
\t\t\t\t\t'stroke', 'weight=\"'+(border*2)+'px\" color=\"'+color[1]+'\" miterlimit=\"1000\" joinstyle=\"miter\"'
\t\t\t\t) );
\t\t\t});
\t\t}

\t\t// Opera bug #357 - Incorrect tip position
\t\t// https://github.com/Craga89/qTip2/issues/367
\t\twindow.opera && setTimeout(function() {
\t\t\telements.tip.css({
\t\t\t\tdisplay: 'inline-block',
\t\t\t\tvisibility: 'visible'
\t\t\t});
\t\t}, 1);

\t\t// Position if needed
\t\tif(position !== FALSE) { this.calculate(corner, newSize); }
\t},

\tcalculate: function(corner, size) {
\t\tif(!this.enabled) { return FALSE; }

\t\tvar self = this,
\t\t\telements = this.qtip.elements,
\t\t\ttip = this.element,
\t\t\tuserOffset = this.options.offset,
\t\t\tisWidget = elements.tooltip.hasClass('ui-widget'),
\t\t\tposition = {  },
\t\t\tprecedance, corners;

\t\t// Inherit corner if not provided
\t\tcorner = corner || this.corner;
\t\tprecedance = corner.precedance;

\t\t// Determine which tip dimension to use for adjustment
\t\tsize = size || this._calculateSize(corner);

\t\t// Setup corners and offset array
\t\tcorners = [ corner.x, corner.y ];
\t\tif(precedance === X) { corners.reverse(); }

\t\t// Calculate tip position
\t\t\$.each(corners, function(i, side) {
\t\t\tvar b, bc, br;

\t\t\tif(side === CENTER) {
\t\t\t\tb = precedance === Y ? LEFT : TOP;
\t\t\t\tposition[ b ] = '50%';
\t\t\t\tposition[MARGIN+'-' + b] = -Math.round(size[ precedance === Y ? 0 : 1 ] / 2) + userOffset;
\t\t\t}
\t\t\telse {
\t\t\t\tb = self._parseWidth(corner, side, elements.tooltip);
\t\t\t\tbc = self._parseWidth(corner, side, elements.content);
\t\t\t\tbr = self._parseRadius(corner);

\t\t\t\tposition[ side ] = Math.max(-self.border, i ? bc : (userOffset + (br > b ? br : -b)));
\t\t\t}
\t\t});

\t\t// Adjust for tip size
\t\tposition[ corner[precedance] ] -= size[ precedance === X ? 0 : 1 ];

\t\t// Set and return new position
\t\ttip.css({ margin: '', top: '', bottom: '', left: '', right: '' }).css(position);
\t\treturn position;
\t},

\treposition: function(event, api, pos, viewport) {
\t\tif(!this.enabled) { return; }

\t\tvar cache = api.cache,
\t\t\tnewCorner = this.corner.clone(),
\t\t\tadjust = pos.adjusted,
\t\t\tmethod = api.options.position.adjust.method.split(' '),
\t\t\thorizontal = method[0],
\t\t\tvertical = method[1] || method[0],
\t\t\tshift = { left: FALSE, top: FALSE, x: 0, y: 0 },
\t\t\toffset, css = {}, props;

\t\tfunction shiftflip(direction, precedance, popposite, side, opposite) {
\t\t\t// Horizontal - Shift or flip method
\t\t\tif(direction === SHIFT && newCorner.precedance === precedance && adjust[side] && newCorner[popposite] !== CENTER) {
\t\t\t\tnewCorner.precedance = newCorner.precedance === X ? Y : X;
\t\t\t}
\t\t\telse if(direction !== SHIFT && adjust[side]){
\t\t\t\tnewCorner[precedance] = newCorner[precedance] === CENTER ?
\t\t\t\t\t(adjust[side] > 0 ? side : opposite) : (newCorner[precedance] === side ? opposite : side);
\t\t\t}
\t\t}

\t\tfunction shiftonly(xy, side, opposite) {
\t\t\tif(newCorner[xy] === CENTER) {
\t\t\t\tcss[MARGIN+'-'+side] = shift[xy] = offset[MARGIN+'-'+side] - adjust[side];
\t\t\t}
\t\t\telse {
\t\t\t\tprops = offset[opposite] !== undefined ?
\t\t\t\t\t[ adjust[side], -offset[side] ] : [ -adjust[side], offset[side] ];

\t\t\t\tif( (shift[xy] = Math.max(props[0], props[1])) > props[0] ) {
\t\t\t\t\tpos[side] -= adjust[side];
\t\t\t\t\tshift[side] = FALSE;
\t\t\t\t}

\t\t\t\tcss[ offset[opposite] !== undefined ? opposite : side ] = shift[xy];
\t\t\t}
\t\t}

\t\t// If our tip position isn't fixed e.g. doesn't adjust with viewport...
\t\tif(this.corner.fixed !== TRUE) {
\t\t\t// Perform shift/flip adjustments
\t\t\tshiftflip(horizontal, X, Y, LEFT, RIGHT);
\t\t\tshiftflip(vertical, Y, X, TOP, BOTTOM);

\t\t\t// Update and redraw the tip if needed (check cached details of last drawn tip)
\t\t\tif(newCorner.string() !== cache.corner.string() || cache.cornerTop !== adjust.top || cache.cornerLeft !== adjust.left) {
\t\t\t\tthis.update(newCorner, FALSE);
\t\t\t}
\t\t}

\t\t// Setup tip offset properties
\t\toffset = this.calculate(newCorner);

\t\t// Readjust offset object to make it left/top
\t\tif(offset.right !== undefined) { offset.left = -offset.right; }
\t\tif(offset.bottom !== undefined) { offset.top = -offset.bottom; }
\t\toffset.user = this.offset;

\t\t// Perform shift adjustments
\t\tif(shift.left = (horizontal === SHIFT && !!adjust.left)) { shiftonly(X, LEFT, RIGHT); }
\t\tif(shift.top = (vertical === SHIFT && !!adjust.top)) { shiftonly(Y, TOP, BOTTOM); }

\t\t/*
\t\t* If the tip is adjusted in both dimensions, or in a
\t\t* direction that would cause it to be anywhere but the
\t\t* outer border, hide it!
\t\t*/
\t\tthis.element.css(css).toggle(
\t\t\t!((shift.x && shift.y) || (newCorner.x === CENTER && shift.y) || (newCorner.y === CENTER && shift.x))
\t\t);

\t\t// Adjust position to accomodate tip dimensions
\t\tpos.left -= offset.left.charAt ? offset.user :
\t\t\thorizontal !== SHIFT || shift.top || !shift.left && !shift.top ? offset.left + this.border : 0;
\t\tpos.top -= offset.top.charAt ? offset.user :
\t\t\tvertical !== SHIFT || shift.left || !shift.left && !shift.top ? offset.top + this.border : 0;

\t\t// Cache details
\t\tcache.cornerLeft = adjust.left; cache.cornerTop = adjust.top;
\t\tcache.corner = newCorner.clone();
\t},

\tdestroy: function() {
\t\t// Unbind events
\t\tthis.qtip._unbind(this.qtip.tooltip, this._ns);

\t\t// Remove the tip element(s)
\t\tif(this.qtip.elements.tip) {
\t\t\tthis.qtip.elements.tip.find('*')
\t\t\t\t.remove().end().remove();
\t\t}
\t}
});

TIP = PLUGINS.tip = function(api) {
\treturn new Tip(api, api.options.style.tip);
};

// Initialize tip on render
TIP.initialize = 'render';

// Setup plugin sanitization options
TIP.sanitize = function(options) {
\tif(options.style && 'tip' in options.style) {
\t\tvar opts = options.style.tip;
\t\tif(typeof opts !== 'object') { opts = options.style.tip = { corner: opts }; }
\t\tif(!(/string|boolean/i).test(typeof opts.corner)) { opts.corner = TRUE; }
\t}
};

// Add new option checks for the plugin
CHECKS.tip = {
\t'^position.my|style.tip.(corner|mimic|border)\$': function() {
\t\t// Make sure a tip can be drawn
\t\tthis.create();

\t\t// Reposition the tooltip
\t\tthis.qtip.reposition();
\t},
\t'^style.tip.(height|width)\$': function(obj) {
\t\t// Re-set dimensions and redraw the tip
\t\tthis.size = [ obj.width, obj.height ];
\t\tthis.update();

\t\t// Reposition the tooltip
\t\tthis.qtip.reposition();
\t},
\t'^content.title|style.(classes|widget)\$': function() {
\t\tthis.update();
\t}
};

// Extend original qTip defaults
\$.extend(TRUE, QTIP.defaults, {
\tstyle: {
\t\ttip: {
\t\t\tcorner: TRUE,
\t\t\tmimic: FALSE,
\t\t\twidth: 6,
\t\t\theight: 6,
\t\t\tborder: TRUE,
\t\t\toffset: 0
\t\t}
\t}
});
;PLUGINS.viewport = function(api, position, posOptions, targetWidth, targetHeight, elemWidth, elemHeight)
{
\tvar target = posOptions.target,
\t\ttooltip = api.elements.tooltip,
\t\tmy = posOptions.my,
\t\tat = posOptions.at,
\t\tadjust = posOptions.adjust,
\t\tmethod = adjust.method.split(' '),
\t\tmethodX = method[0],
\t\tmethodY = method[1] || method[0],
\t\tviewport = posOptions.viewport,
\t\tcontainer = posOptions.container,
\t\tcache = api.cache,
\t\tadjusted = { left: 0, top: 0 },
\t\tfixed, newMy, containerOffset, containerStatic,
\t\tviewportWidth, viewportHeight, viewportScroll, viewportOffset;

\t// If viewport is not a jQuery element, or it's the window/document, or no adjustment method is used... return
\tif(!viewport.jquery || target[0] === window || target[0] === document.body || adjust.method === 'none') {
\t\treturn adjusted;
\t}

\t// Cach container details
\tcontainerOffset = container.offset() || adjusted;
\tcontainerStatic = container.css('position') === 'static';

\t// Cache our viewport details
\tfixed = tooltip.css('position') === 'fixed';
\tviewportWidth = viewport[0] === window ? viewport.width() : viewport.outerWidth(FALSE);
\tviewportHeight = viewport[0] === window ? viewport.height() : viewport.outerHeight(FALSE);
\tviewportScroll = { left: fixed ? 0 : viewport.scrollLeft(), top: fixed ? 0 : viewport.scrollTop() };
\tviewportOffset = viewport.offset() || adjusted;

\t// Generic calculation method
\tfunction calculate(side, otherSide, type, adjust, side1, side2, lengthName, targetLength, elemLength) {
\t\tvar initialPos = position[side1],
\t\t\tmySide = my[side],
\t\t\tatSide = at[side],
\t\t\tisShift = type === SHIFT,
\t\t\tmyLength = mySide === side1 ? elemLength : mySide === side2 ? -elemLength : -elemLength / 2,
\t\t\tatLength = atSide === side1 ? targetLength : atSide === side2 ? -targetLength : -targetLength / 2,
\t\t\tsideOffset = viewportScroll[side1] + viewportOffset[side1] - (containerStatic ? 0 : containerOffset[side1]),
\t\t\toverflow1 = sideOffset - initialPos,
\t\t\toverflow2 = initialPos + elemLength - (lengthName === WIDTH ? viewportWidth : viewportHeight) - sideOffset,
\t\t\toffset = myLength - (my.precedance === side || mySide === my[otherSide] ? atLength : 0) - (atSide === CENTER ? targetLength / 2 : 0);

\t\t// shift
\t\tif(isShift) {
\t\t\toffset = (mySide === side1 ? 1 : -1) * myLength;

\t\t\t// Adjust position but keep it within viewport dimensions
\t\t\tposition[side1] += overflow1 > 0 ? overflow1 : overflow2 > 0 ? -overflow2 : 0;
\t\t\tposition[side1] = Math.max(
\t\t\t\t-containerOffset[side1] + viewportOffset[side1],
\t\t\t\tinitialPos - offset,
\t\t\t\tMath.min(
\t\t\t\t\tMath.max(
\t\t\t\t\t\t-containerOffset[side1] + viewportOffset[side1] + (lengthName === WIDTH ? viewportWidth : viewportHeight),
\t\t\t\t\t\tinitialPos + offset
\t\t\t\t\t),
\t\t\t\t\tposition[side1],

\t\t\t\t\t// Make sure we don't adjust complete off the element when using 'center'
\t\t\t\t\tmySide === 'center' ? initialPos - myLength : 1E9
\t\t\t\t)
\t\t\t);

\t\t}

\t\t// flip/flipinvert
\t\telse {
\t\t\t// Update adjustment amount depending on if using flipinvert or flip
\t\t\tadjust *= (type === FLIPINVERT ? 2 : 0);

\t\t\t// Check for overflow on the left/top
\t\t\tif(overflow1 > 0 && (mySide !== side1 || overflow2 > 0)) {
\t\t\t\tposition[side1] -= offset + adjust;
\t\t\t\tnewMy.invert(side, side1);
\t\t\t}

\t\t\t// Check for overflow on the bottom/right
\t\t\telse if(overflow2 > 0 && (mySide !== side2 || overflow1 > 0)  ) {
\t\t\t\tposition[side1] -= (mySide === CENTER ? -offset : offset) + adjust;
\t\t\t\tnewMy.invert(side, side2);
\t\t\t}

\t\t\t// Make sure we haven't made things worse with the adjustment and reset if so
\t\t\tif(position[side1] < viewportScroll && -position[side1] > overflow2) {
\t\t\t\tposition[side1] = initialPos; newMy = my.clone();
\t\t\t}
\t\t}

\t\treturn position[side1] - initialPos;
\t}

\t// Set newMy if using flip or flipinvert methods
\tif(methodX !== 'shift' || methodY !== 'shift') { newMy = my.clone(); }

\t// Adjust position based onviewport and adjustment options
\tadjusted = {
\t\tleft: methodX !== 'none' ? calculate( X, Y, methodX, adjust.x, LEFT, RIGHT, WIDTH, targetWidth, elemWidth ) : 0,
\t\ttop: methodY !== 'none' ? calculate( Y, X, methodY, adjust.y, TOP, BOTTOM, HEIGHT, targetHeight, elemHeight ) : 0,
\t\tmy: newMy
\t};

\treturn adjusted;
};
;PLUGINS.polys = {
\t// POLY area coordinate calculator
\t//\tSpecial thanks to Ed Cradock for helping out with this.
\t//\tUses a binary search algorithm to find suitable coordinates.
\tpolygon: function(baseCoords, corner) {
\t\tvar result = {
\t\t\twidth: 0, height: 0,
\t\t\tposition: {
\t\t\t\ttop: 1e10, right: 0,
\t\t\t\tbottom: 0, left: 1e10
\t\t\t},
\t\t\tadjustable: FALSE
\t\t},
\t\ti = 0, next,
\t\tcoords = [],
\t\tcompareX = 1, compareY = 1,
\t\trealX = 0, realY = 0,
\t\tnewWidth, newHeight;

\t\t// First pass, sanitize coords and determine outer edges
\t\ti = baseCoords.length; while(i--) {
\t\t\tnext = [ parseInt(baseCoords[--i], 10), parseInt(baseCoords[i+1], 10) ];

\t\t\tif(next[0] > result.position.right){ result.position.right = next[0]; }
\t\t\tif(next[0] < result.position.left){ result.position.left = next[0]; }
\t\t\tif(next[1] > result.position.bottom){ result.position.bottom = next[1]; }
\t\t\tif(next[1] < result.position.top){ result.position.top = next[1]; }

\t\t\tcoords.push(next);
\t\t}

\t\t// Calculate height and width from outer edges
\t\tnewWidth = result.width = Math.abs(result.position.right - result.position.left);
\t\tnewHeight = result.height = Math.abs(result.position.bottom - result.position.top);

\t\t// If it's the center corner...
\t\tif(corner.abbrev() === 'c') {
\t\t\tresult.position = {
\t\t\t\tleft: result.position.left + (result.width / 2),
\t\t\t\ttop: result.position.top + (result.height / 2)
\t\t\t};
\t\t}
\t\telse {
\t\t\t// Second pass, use a binary search algorithm to locate most suitable coordinate
\t\t\twhile(newWidth > 0 && newHeight > 0 && compareX > 0 && compareY > 0)
\t\t\t{
\t\t\t\tnewWidth = Math.floor(newWidth / 2);
\t\t\t\tnewHeight = Math.floor(newHeight / 2);

\t\t\t\tif(corner.x === LEFT){ compareX = newWidth; }
\t\t\t\telse if(corner.x === RIGHT){ compareX = result.width - newWidth; }
\t\t\t\telse{ compareX += Math.floor(newWidth / 2); }

\t\t\t\tif(corner.y === TOP){ compareY = newHeight; }
\t\t\t\telse if(corner.y === BOTTOM){ compareY = result.height - newHeight; }
\t\t\t\telse{ compareY += Math.floor(newHeight / 2); }

\t\t\t\ti = coords.length; while(i--)
\t\t\t\t{
\t\t\t\t\tif(coords.length < 2){ break; }

\t\t\t\t\trealX = coords[i][0] - result.position.left;
\t\t\t\t\trealY = coords[i][1] - result.position.top;

\t\t\t\t\tif((corner.x === LEFT && realX >= compareX) ||
\t\t\t\t\t(corner.x === RIGHT && realX <= compareX) ||
\t\t\t\t\t(corner.x === CENTER && (realX < compareX || realX > (result.width - compareX))) ||
\t\t\t\t\t(corner.y === TOP && realY >= compareY) ||
\t\t\t\t\t(corner.y === BOTTOM && realY <= compareY) ||
\t\t\t\t\t(corner.y === CENTER && (realY < compareY || realY > (result.height - compareY)))) {
\t\t\t\t\t\tcoords.splice(i, 1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tresult.position = { left: coords[0][0], top: coords[0][1] };
\t\t}

\t\treturn result;
\t},

\trect: function(ax, ay, bx, by) {
\t\treturn {
\t\t\twidth: Math.abs(bx - ax),
\t\t\theight: Math.abs(by - ay),
\t\t\tposition: {
\t\t\t\tleft: Math.min(ax, bx),
\t\t\t\ttop: Math.min(ay, by)
\t\t\t}
\t\t};
\t},

\t_angles: {
\t\ttc: 3 / 2, tr: 7 / 4, tl: 5 / 4,
\t\tbc: 1 / 2, br: 1 / 4, bl: 3 / 4,
\t\trc: 2, lc: 1, c: 0
\t},
\tellipse: function(cx, cy, rx, ry, corner) {
\t\tvar c = PLUGINS.polys._angles[ corner.abbrev() ],
\t\t\trxc = c === 0 ? 0 : rx * Math.cos( c * Math.PI ),
\t\t\trys = ry * Math.sin( c * Math.PI );

\t\treturn {
\t\t\twidth: (rx * 2) - Math.abs(rxc),
\t\t\theight: (ry * 2) - Math.abs(rys),
\t\t\tposition: {
\t\t\t\tleft: cx + rxc,
\t\t\t\ttop: cy + rys
\t\t\t},
\t\t\tadjustable: FALSE
\t\t};
\t},
\tcircle: function(cx, cy, r, corner) {
\t\treturn PLUGINS.polys.ellipse(cx, cy, r, r, corner);
\t}
};
;PLUGINS.svg = function(api, svg, corner)
{
\tvar doc = \$(document),
\t\telem = svg[0],
\t\troot = \$(elem.ownerSVGElement),
\t\townerDocument = elem.ownerDocument,
\t\tstrokeWidth2 = (parseInt(svg.css('stroke-width'), 10) || 0) / 2,
\t\tframeOffset, mtx, transformed, viewBox,
\t\tlen, next, i, points,
\t\tresult, position, dimensions;

\t// Ascend the parentNode chain until we find an element with getBBox()
\twhile(!elem.getBBox) { elem = elem.parentNode; }
\tif(!elem.getBBox || !elem.parentNode) { return FALSE; }

\t// Determine which shape calculation to use
\tswitch(elem.nodeName) {
\t\tcase 'ellipse':
\t\tcase 'circle':
\t\t\tresult = PLUGINS.polys.ellipse(
\t\t\t\telem.cx.baseVal.value,
\t\t\t\telem.cy.baseVal.value,
\t\t\t\t(elem.rx || elem.r).baseVal.value + strokeWidth2,
\t\t\t\t(elem.ry || elem.r).baseVal.value + strokeWidth2,
\t\t\t\tcorner
\t\t\t);
\t\tbreak;

\t\tcase 'line':
\t\tcase 'polygon':
\t\tcase 'polyline':
\t\t\t// Determine points object (line has none, so mimic using array)
\t\t\tpoints = elem.points || [
\t\t\t\t{ x: elem.x1.baseVal.value, y: elem.y1.baseVal.value },
\t\t\t\t{ x: elem.x2.baseVal.value, y: elem.y2.baseVal.value }
\t\t\t];

\t\t\tfor(result = [], i = -1, len = points.numberOfItems || points.length; ++i < len;) {
\t\t\t\tnext = points.getItem ? points.getItem(i) : points[i];
\t\t\t\tresult.push.apply(result, [next.x, next.y]);
\t\t\t}

\t\t\tresult = PLUGINS.polys.polygon(result, corner);
\t\tbreak;

\t\t// Unknown shape or rectangle? Use bounding box
\t\tdefault:
\t\t\tresult = elem.getBBox();
\t\t\tresult = {
\t\t\t\twidth: result.width,
\t\t\t\theight: result.height,
\t\t\t\tposition: {
\t\t\t\t\tleft: result.x,
\t\t\t\t\ttop: result.y
\t\t\t\t}
\t\t\t};
\t\tbreak;
\t}

\t// Shortcut assignments
\tposition = result.position;
\troot = root[0];

\t// Convert position into a pixel value
\tif(root.createSVGPoint) {
\t\tmtx = elem.getScreenCTM();
\t\tpoints = root.createSVGPoint();

\t\tpoints.x = position.left;
\t\tpoints.y = position.top;
\t\ttransformed = points.matrixTransform( mtx );
\t\tposition.left = transformed.x;
\t\tposition.top = transformed.y;
\t}

\t// Check the element is not in a child document, and if so, adjust for frame elements offset
\tif(ownerDocument !== document && api.position.target !== 'mouse') {
\t\tframeOffset = \$((ownerDocument.defaultView || ownerDocument.parentWindow).frameElement).offset();
\t\tif(frameOffset) {
\t\t\tposition.left += frameOffset.left;
\t\t\tposition.top += frameOffset.top;
\t\t}
\t}

\t// Adjust by scroll offset of owner document
\townerDocument = \$(ownerDocument);
\tposition.left += ownerDocument.scrollLeft();
\tposition.top += ownerDocument.scrollTop();

\treturn result;
};
;}));
}( window, document ));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/qtip/jquery.qtip.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*
 * qTip2 - Pretty powerful tooltips - v2.2.1
 * http://qtip2.com
 *
 * Copyright (c) 2015 
 * Released under the MIT licenses
 * http://jquery.org/license
 *
 * Date: Fri Aug 14 2015 12:37 EDT-0400
 * Plugins: tips viewport svg
 * Styles: core basic css3
 */
/*global window: false, jQuery: false, console: false, define: false */

/* Cache window, document, undefined */
(function( window, document, undefined ) {

// Uses AMD or browser globals to create a jQuery plugin.
(function( factory ) {
\t\"use strict\";
\tif(typeof define === 'function' && define.amd) {
\t\tdefine(['jquery'], factory);
\t}
\telse if(jQuery && !jQuery.fn.qtip) {
\t\tfactory(jQuery);
\t}
}
(function(\$) {
\t\"use strict\"; // Enable ECMAScript \"strict\" operation for this function. See more: http://ejohn.org/blog/ecmascript-5-strict-mode-json-and-more/
;// Munge the primitives - Paul Irish tip
var TRUE = true,
FALSE = false,
NULL = null,

// Common variables
X = 'x', Y = 'y',
WIDTH = 'width',
HEIGHT = 'height',

// Positioning sides
TOP = 'top',
LEFT = 'left',
BOTTOM = 'bottom',
RIGHT = 'right',
CENTER = 'center',

// Position adjustment types
FLIP = 'flip',
FLIPINVERT = 'flipinvert',
SHIFT = 'shift',

// Shortcut vars
QTIP, PROTOTYPE, CORNER, CHECKS,
PLUGINS = {},
NAMESPACE = 'qtip',
ATTR_HAS = 'data-hasqtip',
ATTR_ID = 'data-qtip-id',
WIDGET = ['ui-widget', 'ui-tooltip'],
SELECTOR = '.'+NAMESPACE,
INACTIVE_EVENTS = 'click dblclick mousedown mouseup mousemove mouseleave mouseenter'.split(' '),

CLASS_FIXED = NAMESPACE+'-fixed',
CLASS_DEFAULT = NAMESPACE + '-default',
CLASS_FOCUS = NAMESPACE + '-focus',
CLASS_HOVER = NAMESPACE + '-hover',
CLASS_DISABLED = NAMESPACE+'-disabled',

replaceSuffix = '_replacedByqTip',
oldtitle = 'oldtitle',
trackingBound,

// Browser detection
BROWSER = {
\t/*
\t * IE version detection
\t *
\t * Adapted from: http://ajaxian.com/archives/attack-of-the-ie-conditional-comment
\t * Credit to James Padolsey for the original implemntation!
\t */
\tie: (function(){
\t\tfor (
\t\t\tvar v = 4, i = document.createElement(\"div\");
\t\t\t(i.innerHTML = \"<!--[if gt IE \" + v + \"]><i></i><![endif]-->\") && i.getElementsByTagName(\"i\")[0];
\t\t\tv+=1
\t\t) {}
\t\treturn v > 4 ? v : NaN;
\t}()),

\t/*
\t * iOS version detection
\t */
\tiOS: parseFloat(
\t\t('' + (/CPU.*OS ([0-9_]{1,5})|(CPU like).*AppleWebKit.*Mobile/i.exec(navigator.userAgent) || [0,''])[1])
\t\t.replace('undefined', '3_2').replace('_', '.').replace('_', '')
\t) || FALSE
};
;function QTip(target, options, id, attr) {
\t// Elements and ID
\tthis.id = id;
\tthis.target = target;
\tthis.tooltip = NULL;
\tthis.elements = { target: target };

\t// Internal constructs
\tthis._id = NAMESPACE + '-' + id;
\tthis.timers = { img: {} };
\tthis.options = options;
\tthis.plugins = {};

\t// Cache object
\tthis.cache = {
\t\tevent: {},
\t\ttarget: \$(),
\t\tdisabled: FALSE,
\t\tattr: attr,
\t\tonTooltip: FALSE,
\t\tlastClass: ''
\t};

\t// Set the initial flags
\tthis.rendered = this.destroyed = this.disabled = this.waiting =
\t\tthis.hiddenDuringWait = this.positioning = this.triggering = FALSE;
}
PROTOTYPE = QTip.prototype;

PROTOTYPE._when = function(deferreds) {
\treturn \$.when.apply(\$, deferreds);
};

PROTOTYPE.render = function(show) {
\tif(this.rendered || this.destroyed) { return this; } // If tooltip has already been rendered, exit

\tvar self = this,
\t\toptions = this.options,
\t\tcache = this.cache,
\t\telements = this.elements,
\t\ttext = options.content.text,
\t\ttitle = options.content.title,
\t\tbutton = options.content.button,
\t\tposOptions = options.position,
\t\tnamespace = '.'+this._id+' ',
\t\tdeferreds = [],
\t\ttooltip;

\t// Add ARIA attributes to target
\t\$.attr(this.target[0], 'aria-describedby', this._id);

\t// Create public position object that tracks current position corners
\tcache.posClass = this._createPosClass(
\t\t(this.position = { my: posOptions.my, at: posOptions.at }).my
\t);

\t// Create tooltip element
\tthis.tooltip = elements.tooltip = tooltip = \$('<div/>', {
\t\t'id': this._id,
\t\t'class': [ NAMESPACE, CLASS_DEFAULT, options.style.classes, cache.posClass ].join(' '),
\t\t'width': options.style.width || '',
\t\t'height': options.style.height || '',
\t\t'tracking': posOptions.target === 'mouse' && posOptions.adjust.mouse,

\t\t/* ARIA specific attributes */
\t\t'role': 'alert',
\t\t'aria-live': 'polite',
\t\t'aria-atomic': FALSE,
\t\t'aria-describedby': this._id + '-content',
\t\t'aria-hidden': TRUE
\t})
\t.toggleClass(CLASS_DISABLED, this.disabled)
\t.attr(ATTR_ID, this.id)
\t.data(NAMESPACE, this)
\t.appendTo(posOptions.container)
\t.append(
\t\t// Create content element
\t\telements.content = \$('<div />', {
\t\t\t'class': NAMESPACE + '-content',
\t\t\t'id': this._id + '-content',
\t\t\t'aria-atomic': TRUE
\t\t})
\t);

\t// Set rendered flag and prevent redundant reposition calls for now
\tthis.rendered = -1;
\tthis.positioning = TRUE;

\t// Create title...
\tif(title) {
\t\tthis._createTitle();

\t\t// Update title only if its not a callback (called in toggle if so)
\t\tif(!\$.isFunction(title)) {
\t\t\tdeferreds.push( this._updateTitle(title, FALSE) );
\t\t}
\t}

\t// Create button
\tif(button) { this._createButton(); }

\t// Set proper rendered flag and update content if not a callback function (called in toggle)
\tif(!\$.isFunction(text)) {
\t\tdeferreds.push( this._updateContent(text, FALSE) );
\t}
\tthis.rendered = TRUE;

\t// Setup widget classes
\tthis._setWidget();

\t// Initialize 'render' plugins
\t\$.each(PLUGINS, function(name) {
\t\tvar instance;
\t\tif(this.initialize === 'render' && (instance = this(self))) {
\t\t\tself.plugins[name] = instance;
\t\t}
\t});

\t// Unassign initial events and assign proper events
\tthis._unassignEvents();
\tthis._assignEvents();

\t// When deferreds have completed
\tthis._when(deferreds).then(function() {
\t\t// tooltiprender event
\t\tself._trigger('render');

\t\t// Reset flags
\t\tself.positioning = FALSE;

\t\t// Show tooltip if not hidden during wait period
\t\tif(!self.hiddenDuringWait && (options.show.ready || show)) {
\t\t\tself.toggle(TRUE, cache.event, FALSE);
\t\t}
\t\tself.hiddenDuringWait = FALSE;
\t});

\t// Expose API
\tQTIP.api[this.id] = this;

\treturn this;
};

PROTOTYPE.destroy = function(immediate) {
\t// Set flag the signify destroy is taking place to plugins
\t// and ensure it only gets destroyed once!
\tif(this.destroyed) { return this.target; }

\tfunction process() {
\t\tif(this.destroyed) { return; }
\t\tthis.destroyed = TRUE;

\t\tvar target = this.target,
\t\t\ttitle = target.attr(oldtitle),
\t\t\ttimer;

\t\t// Destroy tooltip if rendered
\t\tif(this.rendered) {
\t\t\tthis.tooltip.stop(1,0).find('*').remove().end().remove();
\t\t}

\t\t// Destroy all plugins
\t\t\$.each(this.plugins, function(name) {
\t\t\tthis.destroy && this.destroy();
\t\t});

\t\t// Clear timers
\t\tfor(timer in this.timers) {
\t\t\tclearTimeout(this.timers[timer]);
\t\t}

\t\t// Remove api object and ARIA attributes
\t\ttarget.removeData(NAMESPACE)
\t\t\t.removeAttr(ATTR_ID)
\t\t\t.removeAttr(ATTR_HAS)
\t\t\t.removeAttr('aria-describedby');

\t\t// Reset old title attribute if removed
\t\tif(this.options.suppress && title) {
\t\t\ttarget.attr('title', title).removeAttr(oldtitle);
\t\t}

\t\t// Remove qTip events associated with this API
\t\tthis._unassignEvents();

\t\t// Remove ID from used id objects, and delete object references
\t\t// for better garbage collection and leak protection
\t\tthis.options = this.elements = this.cache = this.timers =
\t\t\tthis.plugins = this.mouse = NULL;

\t\t// Delete epoxsed API object
\t\tdelete QTIP.api[this.id];
\t}

\t// If an immediate destory is needed
\tif((immediate !== TRUE || this.triggering === 'hide') && this.rendered) {
\t\tthis.tooltip.one('tooltiphidden', \$.proxy(process, this));
\t\t!this.triggering && this.hide();
\t}

\t// If we're not in the process of hiding... process
\telse { process.call(this); }

\treturn this.target;
};
;function invalidOpt(a) {
\treturn a === NULL || \$.type(a) !== 'object';
}

function invalidContent(c) {
\treturn !( \$.isFunction(c) || (c && c.attr) || c.length || (\$.type(c) === 'object' && (c.jquery || c.then) ));
}

// Option object sanitizer
function sanitizeOptions(opts) {
\tvar content, text, ajax, once;

\tif(invalidOpt(opts)) { return FALSE; }

\tif(invalidOpt(opts.metadata)) {
\t\topts.metadata = { type: opts.metadata };
\t}

\tif('content' in opts) {
\t\tcontent = opts.content;

\t\tif(invalidOpt(content) || content.jquery || content.done) {
\t\t\tcontent = opts.content = {
\t\t\t\ttext: (text = invalidContent(content) ? FALSE : content)
\t\t\t};
\t\t}
\t\telse { text = content.text; }

\t\t// DEPRECATED - Old content.ajax plugin functionality
\t\t// Converts it into the proper Deferred syntax
\t\tif('ajax' in content) {
\t\t\tajax = content.ajax;
\t\t\tonce = ajax && ajax.once !== FALSE;
\t\t\tdelete content.ajax;

\t\t\tcontent.text = function(event, api) {
\t\t\t\tvar loading = text || \$(this).attr(api.options.content.attr) || 'Loading...',

\t\t\t\tdeferred = \$.ajax(
\t\t\t\t\t\$.extend({}, ajax, { context: api })
\t\t\t\t)
\t\t\t\t.then(ajax.success, NULL, ajax.error)
\t\t\t\t.then(function(content) {
\t\t\t\t\tif(content && once) { api.set('content.text', content); }
\t\t\t\t\treturn content;
\t\t\t\t},
\t\t\t\tfunction(xhr, status, error) {
\t\t\t\t\tif(api.destroyed || xhr.status === 0) { return; }
\t\t\t\t\tapi.set('content.text', status + ': ' + error);
\t\t\t\t});

\t\t\t\treturn !once ? (api.set('content.text', loading), deferred) : loading;
\t\t\t};
\t\t}

\t\tif('title' in content) {
\t\t\tif(\$.isPlainObject(content.title)) {
\t\t\t\tcontent.button = content.title.button;
\t\t\t\tcontent.title = content.title.text;
\t\t\t}

\t\t\tif(invalidContent(content.title || FALSE)) {
\t\t\t\tcontent.title = FALSE;
\t\t\t}
\t\t}
\t}

\tif('position' in opts && invalidOpt(opts.position)) {
\t\topts.position = { my: opts.position, at: opts.position };
\t}

\tif('show' in opts && invalidOpt(opts.show)) {
\t\topts.show = opts.show.jquery ? { target: opts.show } :
\t\t\topts.show === TRUE ? { ready: TRUE } : { event: opts.show };
\t}

\tif('hide' in opts && invalidOpt(opts.hide)) {
\t\topts.hide = opts.hide.jquery ? { target: opts.hide } : { event: opts.hide };
\t}

\tif('style' in opts && invalidOpt(opts.style)) {
\t\topts.style = { classes: opts.style };
\t}

\t// Sanitize plugin options
\t\$.each(PLUGINS, function() {
\t\tthis.sanitize && this.sanitize(opts);
\t});

\treturn opts;
}

// Setup builtin .set() option checks
CHECKS = PROTOTYPE.checks = {
\tbuiltin: {
\t\t// Core checks
\t\t'^id\$': function(obj, o, v, prev) {
\t\t\tvar id = v === TRUE ? QTIP.nextid : v,
\t\t\t\tnew_id = NAMESPACE + '-' + id;

\t\t\tif(id !== FALSE && id.length > 0 && !\$('#'+new_id).length) {
\t\t\t\tthis._id = new_id;

\t\t\t\tif(this.rendered) {
\t\t\t\t\tthis.tooltip[0].id = this._id;
\t\t\t\t\tthis.elements.content[0].id = this._id + '-content';
\t\t\t\t\tthis.elements.title[0].id = this._id + '-title';
\t\t\t\t}
\t\t\t}
\t\t\telse { obj[o] = prev; }
\t\t},
\t\t'^prerender': function(obj, o, v) {
\t\t\tv && !this.rendered && this.render(this.options.show.ready);
\t\t},

\t\t// Content checks
\t\t'^content.text\$': function(obj, o, v) {
\t\t\tthis._updateContent(v);
\t\t},
\t\t'^content.attr\$': function(obj, o, v, prev) {
\t\t\tif(this.options.content.text === this.target.attr(prev)) {
\t\t\t\tthis._updateContent( this.target.attr(v) );
\t\t\t}
\t\t},
\t\t'^content.title\$': function(obj, o, v) {
\t\t\t// Remove title if content is null
\t\t\tif(!v) { return this._removeTitle(); }

\t\t\t// If title isn't already created, create it now and update
\t\t\tv && !this.elements.title && this._createTitle();
\t\t\tthis._updateTitle(v);
\t\t},
\t\t'^content.button\$': function(obj, o, v) {
\t\t\tthis._updateButton(v);
\t\t},
\t\t'^content.title.(text|button)\$': function(obj, o, v) {
\t\t\tthis.set('content.'+o, v); // Backwards title.text/button compat
\t\t},

\t\t// Position checks
\t\t'^position.(my|at)\$': function(obj, o, v){
\t\t\t'string' === typeof v && (this.position[o] = obj[o] = new CORNER(v, o === 'at'));
\t\t},
\t\t'^position.container\$': function(obj, o, v){
\t\t\tthis.rendered && this.tooltip.appendTo(v);
\t\t},

\t\t// Show checks
\t\t'^show.ready\$': function(obj, o, v) {
\t\t\tv && (!this.rendered && this.render(TRUE) || this.toggle(TRUE));
\t\t},

\t\t// Style checks
\t\t'^style.classes\$': function(obj, o, v, p) {
\t\t\tthis.rendered && this.tooltip.removeClass(p).addClass(v);
\t\t},
\t\t'^style.(width|height)': function(obj, o, v) {
\t\t\tthis.rendered && this.tooltip.css(o, v);
\t\t},
\t\t'^style.widget|content.title': function() {
\t\t\tthis.rendered && this._setWidget();
\t\t},
\t\t'^style.def': function(obj, o, v) {
\t\t\tthis.rendered && this.tooltip.toggleClass(CLASS_DEFAULT, !!v);
\t\t},

\t\t// Events check
\t\t'^events.(render|show|move|hide|focus|blur)\$': function(obj, o, v) {
\t\t\tthis.rendered && this.tooltip[(\$.isFunction(v) ? '' : 'un') + 'bind']('tooltip'+o, v);
\t\t},

\t\t// Properties which require event reassignment
\t\t'^(show|hide|position).(event|target|fixed|inactive|leave|distance|viewport|adjust)': function() {
\t\t\tif(!this.rendered) { return; }

\t\t\t// Set tracking flag
\t\t\tvar posOptions = this.options.position;
\t\t\tthis.tooltip.attr('tracking', posOptions.target === 'mouse' && posOptions.adjust.mouse);

\t\t\t// Reassign events
\t\t\tthis._unassignEvents();
\t\t\tthis._assignEvents();
\t\t}
\t}
};

// Dot notation converter
function convertNotation(options, notation) {
\tvar i = 0, obj, option = options,

\t// Split notation into array
\tlevels = notation.split('.');

\t// Loop through
\twhile( option = option[ levels[i++] ] ) {
\t\tif(i < levels.length) { obj = option; }
\t}

\treturn [obj || options, levels.pop()];
}

PROTOTYPE.get = function(notation) {
\tif(this.destroyed) { return this; }

\tvar o = convertNotation(this.options, notation.toLowerCase()),
\t\tresult = o[0][ o[1] ];

\treturn result.precedance ? result.string() : result;
};

function setCallback(notation, args) {
\tvar category, rule, match;

\tfor(category in this.checks) {
\t\tfor(rule in this.checks[category]) {
\t\t\tif(match = (new RegExp(rule, 'i')).exec(notation)) {
\t\t\t\targs.push(match);

\t\t\t\tif(category === 'builtin' || this.plugins[category]) {
\t\t\t\t\tthis.checks[category][rule].apply(
\t\t\t\t\t\tthis.plugins[category] || this, args
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

var rmove = /^position\\.(my|at|adjust|target|container|viewport)|style|content|show\\.ready/i,
\trrender = /^prerender|show\\.ready/i;

PROTOTYPE.set = function(option, value) {
\tif(this.destroyed) { return this; }

\tvar rendered = this.rendered,
\t\treposition = FALSE,
\t\toptions = this.options,
\t\tchecks = this.checks,
\t\tname;

\t// Convert singular option/value pair into object form
\tif('string' === typeof option) {
\t\tname = option; option = {}; option[name] = value;
\t}
\telse { option = \$.extend({}, option); }

\t// Set all of the defined options to their new values
\t\$.each(option, function(notation, value) {
\t\tif(rendered && rrender.test(notation)) {
\t\t\tdelete option[notation]; return;
\t\t}

\t\t// Set new obj value
\t\tvar obj = convertNotation(options, notation.toLowerCase()), previous;
\t\tprevious = obj[0][ obj[1] ];
\t\tobj[0][ obj[1] ] = value && value.nodeType ? \$(value) : value;

\t\t// Also check if we need to reposition
\t\treposition = rmove.test(notation) || reposition;

\t\t// Set the new params for the callback
\t\toption[notation] = [obj[0], obj[1], value, previous];
\t});

\t// Re-sanitize options
\tsanitizeOptions(options);

\t/*
\t * Execute any valid callbacks for the set options
\t * Also set positioning flag so we don't get loads of redundant repositioning calls.
\t */
\tthis.positioning = TRUE;
\t\$.each(option, \$.proxy(setCallback, this));
\tthis.positioning = FALSE;

\t// Update position if needed
\tif(this.rendered && this.tooltip[0].offsetWidth > 0 && reposition) {
\t\tthis.reposition( options.position.target === 'mouse' ? NULL : this.cache.event );
\t}

\treturn this;
};
;PROTOTYPE._update = function(content, element, reposition) {
\tvar self = this,
\t\tcache = this.cache;

\t// Make sure tooltip is rendered and content is defined. If not return
\tif(!this.rendered || !content) { return FALSE; }

\t// Use function to parse content
\tif(\$.isFunction(content)) {
\t\tcontent = content.call(this.elements.target, cache.event, this) || '';
\t}

\t// Handle deferred content
\tif(\$.isFunction(content.then)) {
\t\tcache.waiting = TRUE;
\t\treturn content.then(function(c) {
\t\t\tcache.waiting = FALSE;
\t\t\treturn self._update(c, element);
\t\t}, NULL, function(e) {
\t\t\treturn self._update(e, element);
\t\t});
\t}

\t// If content is null... return false
\tif(content === FALSE || (!content && content !== '')) { return FALSE; }

\t// Append new content if its a DOM array and show it if hidden
\tif(content.jquery && content.length > 0) {
\t\telement.empty().append(
\t\t\tcontent.css({ display: 'block', visibility: 'visible' })
\t\t);
\t}

\t// Content is a regular string, insert the new content
\telse { element.html(content); }

\t// Wait for content to be loaded, and reposition
\treturn this._waitForContent(element).then(function(images) {
\t\tif(self.rendered && self.tooltip[0].offsetWidth > 0) {
\t\t\tself.reposition(cache.event, !images.length);
\t\t}
\t});
};

PROTOTYPE._waitForContent = function(element) {
\tvar cache = this.cache;

\t// Set flag
\tcache.waiting = TRUE;

\t// If imagesLoaded is included, ensure images have loaded and return promise
\treturn ( \$.fn.imagesLoaded ? element.imagesLoaded() : \$.Deferred().resolve([]) )
\t\t.done(function() { cache.waiting = FALSE; })
\t\t.promise();
};

PROTOTYPE._updateContent = function(content, reposition) {
\tthis._update(content, this.elements.content, reposition);
};

PROTOTYPE._updateTitle = function(content, reposition) {
\tif(this._update(content, this.elements.title, reposition) === FALSE) {
\t\tthis._removeTitle(FALSE);
\t}
};

PROTOTYPE._createTitle = function()
{
\tvar elements = this.elements,
\t\tid = this._id+'-title';

\t// Destroy previous title element, if present
\tif(elements.titlebar) { this._removeTitle(); }

\t// Create title bar and title elements
\telements.titlebar = \$('<div />', {
\t\t'class': NAMESPACE + '-titlebar ' + (this.options.style.widget ? createWidgetClass('header') : '')
\t})
\t.append(
\t\telements.title = \$('<div />', {
\t\t\t'id': id,
\t\t\t'class': NAMESPACE + '-title',
\t\t\t'aria-atomic': TRUE
\t\t})
\t)
\t.insertBefore(elements.content)

\t// Button-specific events
\t.delegate('.qtip-close', 'mousedown keydown mouseup keyup mouseout', function(event) {
\t\t\$(this).toggleClass('ui-state-active ui-state-focus', event.type.substr(-4) === 'down');
\t})
\t.delegate('.qtip-close', 'mouseover mouseout', function(event){
\t\t\$(this).toggleClass('ui-state-hover', event.type === 'mouseover');
\t});

\t// Create button if enabled
\tif(this.options.content.button) { this._createButton(); }
};

PROTOTYPE._removeTitle = function(reposition)
{
\tvar elements = this.elements;

\tif(elements.title) {
\t\telements.titlebar.remove();
\t\telements.titlebar = elements.title = elements.button = NULL;

\t\t// Reposition if enabled
\t\tif(reposition !== FALSE) { this.reposition(); }
\t}
};
;PROTOTYPE._createPosClass = function(my) {
\treturn NAMESPACE + '-pos-' + (my || this.options.position.my).abbrev();
};

PROTOTYPE.reposition = function(event, effect) {
\tif(!this.rendered || this.positioning || this.destroyed) { return this; }

\t// Set positioning flag
\tthis.positioning = TRUE;

\tvar cache = this.cache,
\t\ttooltip = this.tooltip,
\t\tposOptions = this.options.position,
\t\ttarget = posOptions.target,
\t\tmy = posOptions.my,
\t\tat = posOptions.at,
\t\tviewport = posOptions.viewport,
\t\tcontainer = posOptions.container,
\t\tadjust = posOptions.adjust,
\t\tmethod = adjust.method.split(' '),
\t\ttooltipWidth = tooltip.outerWidth(FALSE),
\t\ttooltipHeight = tooltip.outerHeight(FALSE),
\t\ttargetWidth = 0,
\t\ttargetHeight = 0,
\t\ttype = tooltip.css('position'),
\t\tposition = { left: 0, top: 0 },
\t\tvisible = tooltip[0].offsetWidth > 0,
\t\tisScroll = event && event.type === 'scroll',
\t\twin = \$(window),
\t\tdoc = container[0].ownerDocument,
\t\tmouse = this.mouse,
\t\tpluginCalculations, offset, adjusted, newClass;

\t// Check if absolute position was passed
\tif(\$.isArray(target) && target.length === 2) {
\t\t// Force left top and set position
\t\tat = { x: LEFT, y: TOP };
\t\tposition = { left: target[0], top: target[1] };
\t}

\t// Check if mouse was the target
\telse if(target === 'mouse') {
\t\t// Force left top to allow flipping
\t\tat = { x: LEFT, y: TOP };

\t\t// Use the mouse origin that caused the show event, if distance hiding is enabled
\t\tif((!adjust.mouse || this.options.hide.distance) && cache.origin && cache.origin.pageX) {
\t\t\tevent =  cache.origin;
\t\t}

\t\t// Use cached event for resize/scroll events
\t\telse if(!event || (event && (event.type === 'resize' || event.type === 'scroll'))) {
\t\t\tevent = cache.event;
\t\t}

\t\t// Otherwise, use the cached mouse coordinates if available
\t\telse if(mouse && mouse.pageX) {
\t\t\tevent = mouse;
\t\t}

\t\t// Calculate body and container offset and take them into account below
\t\tif(type !== 'static') { position = container.offset(); }
\t\tif(doc.body.offsetWidth !== (window.innerWidth || doc.documentElement.clientWidth)) {
\t\t\toffset = \$(document.body).offset();
\t\t}

\t\t// Use event coordinates for position
\t\tposition = {
\t\t\tleft: event.pageX - position.left + (offset && offset.left || 0),
\t\t\ttop: event.pageY - position.top + (offset && offset.top || 0)
\t\t};

\t\t// Scroll events are a pain, some browsers
\t\tif(adjust.mouse && isScroll && mouse) {
\t\t\tposition.left -= (mouse.scrollX || 0) - win.scrollLeft();
\t\t\tposition.top -= (mouse.scrollY || 0) - win.scrollTop();
\t\t}
\t}

\t// Target wasn't mouse or absolute...
\telse {
\t\t// Check if event targetting is being used
\t\tif(target === 'event') {
\t\t\tif(event && event.target && event.type !== 'scroll' && event.type !== 'resize') {
\t\t\t\tcache.target = \$(event.target);
\t\t\t}
\t\t\telse if(!event.target) {
\t\t\t\tcache.target = this.elements.target;
\t\t\t}
\t\t}
\t\telse if(target !== 'event'){
\t\t\tcache.target = \$(target.jquery ? target : this.elements.target);
\t\t}
\t\ttarget = cache.target;

\t\t// Parse the target into a jQuery object and make sure there's an element present
\t\ttarget = \$(target).eq(0);
\t\tif(target.length === 0) { return this; }

\t\t// Check if window or document is the target
\t\telse if(target[0] === document || target[0] === window) {
\t\t\ttargetWidth = BROWSER.iOS ? window.innerWidth : target.width();
\t\t\ttargetHeight = BROWSER.iOS ? window.innerHeight : target.height();

\t\t\tif(target[0] === window) {
\t\t\t\tposition = {
\t\t\t\t\ttop: (viewport || target).scrollTop(),
\t\t\t\t\tleft: (viewport || target).scrollLeft()
\t\t\t\t};
\t\t\t}
\t\t}

\t\t// Check if the target is an <AREA> element
\t\telse if(PLUGINS.imagemap && target.is('area')) {
\t\t\tpluginCalculations = PLUGINS.imagemap(this, target, at, PLUGINS.viewport ? method : FALSE);
\t\t}

\t\t// Check if the target is an SVG element
\t\telse if(PLUGINS.svg && target && target[0].ownerSVGElement) {
\t\t\tpluginCalculations = PLUGINS.svg(this, target, at, PLUGINS.viewport ? method : FALSE);
\t\t}

\t\t// Otherwise use regular jQuery methods
\t\telse {
\t\t\ttargetWidth = target.outerWidth(FALSE);
\t\t\ttargetHeight = target.outerHeight(FALSE);
\t\t\tposition = target.offset();
\t\t}

\t\t// Parse returned plugin values into proper variables
\t\tif(pluginCalculations) {
\t\t\ttargetWidth = pluginCalculations.width;
\t\t\ttargetHeight = pluginCalculations.height;
\t\t\toffset = pluginCalculations.offset;
\t\t\tposition = pluginCalculations.position;
\t\t}

\t\t// Adjust position to take into account offset parents
\t\tposition = this.reposition.offset(target, position, container);

\t\t// Adjust for position.fixed tooltips (and also iOS scroll bug in v3.2-4.0 & v4.3-4.3.2)
\t\tif((BROWSER.iOS > 3.1 && BROWSER.iOS < 4.1) ||
\t\t\t(BROWSER.iOS >= 4.3 && BROWSER.iOS < 4.33) ||
\t\t\t(!BROWSER.iOS && type === 'fixed')
\t\t){
\t\t\tposition.left -= win.scrollLeft();
\t\t\tposition.top -= win.scrollTop();
\t\t}

\t\t// Adjust position relative to target
\t\tif(!pluginCalculations || (pluginCalculations && pluginCalculations.adjustable !== FALSE)) {
\t\t\tposition.left += at.x === RIGHT ? targetWidth : at.x === CENTER ? targetWidth / 2 : 0;
\t\t\tposition.top += at.y === BOTTOM ? targetHeight : at.y === CENTER ? targetHeight / 2 : 0;
\t\t}
\t}

\t// Adjust position relative to tooltip
\tposition.left += adjust.x + (my.x === RIGHT ? -tooltipWidth : my.x === CENTER ? -tooltipWidth / 2 : 0);
\tposition.top += adjust.y + (my.y === BOTTOM ? -tooltipHeight : my.y === CENTER ? -tooltipHeight / 2 : 0);

\t// Use viewport adjustment plugin if enabled
\tif(PLUGINS.viewport) {
\t\tadjusted = position.adjusted = PLUGINS.viewport(
\t\t\tthis, position, posOptions, targetWidth, targetHeight, tooltipWidth, tooltipHeight
\t\t);

\t\t// Apply offsets supplied by positioning plugin (if used)
\t\tif(offset && adjusted.left) { position.left += offset.left; }
\t\tif(offset && adjusted.top) {  position.top += offset.top; }

\t\t// Apply any new 'my' position
\t\tif(adjusted.my) { this.position.my = adjusted.my; }
\t}

\t// Viewport adjustment is disabled, set values to zero
\telse { position.adjusted = { left: 0, top: 0 }; }

\t// Set tooltip position class if it's changed
\tif(cache.posClass !== (newClass = this._createPosClass(this.position.my))) {
\t\ttooltip.removeClass(cache.posClass).addClass( (cache.posClass = newClass) );
\t}

\t// tooltipmove event
\tif(!this._trigger('move', [position, viewport.elem || viewport], event)) { return this; }
\tdelete position.adjusted;

\t// If effect is disabled, target it mouse, no animation is defined or positioning gives NaN out, set CSS directly
\tif(effect === FALSE || !visible || isNaN(position.left) || isNaN(position.top) || target === 'mouse' || !\$.isFunction(posOptions.effect)) {
\t\ttooltip.css(position);
\t}

\t// Use custom function if provided
\telse if(\$.isFunction(posOptions.effect)) {
\t\tposOptions.effect.call(tooltip, this, \$.extend({}, position));
\t\ttooltip.queue(function(next) {
\t\t\t// Reset attributes to avoid cross-browser rendering bugs
\t\t\t\$(this).css({ opacity: '', height: '' });
\t\t\tif(BROWSER.ie) { this.style.removeAttribute('filter'); }

\t\t\tnext();
\t\t});
\t}

\t// Set positioning flag
\tthis.positioning = FALSE;

\treturn this;
};

// Custom (more correct for qTip!) offset calculator
PROTOTYPE.reposition.offset = function(elem, pos, container) {
\tif(!container[0]) { return pos; }

\tvar ownerDocument = \$(elem[0].ownerDocument),
\t\tquirks = !!BROWSER.ie && document.compatMode !== 'CSS1Compat',
\t\tparent = container[0],
\t\tscrolled, position, parentOffset, overflow;

\tfunction scroll(e, i) {
\t\tpos.left += i * e.scrollLeft();
\t\tpos.top += i * e.scrollTop();
\t}

\t// Compensate for non-static containers offset
\tdo {
\t\tif((position = \$.css(parent, 'position')) !== 'static') {
\t\t\tif(position === 'fixed') {
\t\t\t\tparentOffset = parent.getBoundingClientRect();
\t\t\t\tscroll(ownerDocument, -1);
\t\t\t}
\t\t\telse {
\t\t\t\tparentOffset = \$(parent).position();
\t\t\t\tparentOffset.left += (parseFloat(\$.css(parent, 'borderLeftWidth')) || 0);
\t\t\t\tparentOffset.top += (parseFloat(\$.css(parent, 'borderTopWidth')) || 0);
\t\t\t}

\t\t\tpos.left -= parentOffset.left + (parseFloat(\$.css(parent, 'marginLeft')) || 0);
\t\t\tpos.top -= parentOffset.top + (parseFloat(\$.css(parent, 'marginTop')) || 0);

\t\t\t// If this is the first parent element with an overflow of \"scroll\" or \"auto\", store it
\t\t\tif(!scrolled && (overflow = \$.css(parent, 'overflow')) !== 'hidden' && overflow !== 'visible') { scrolled = \$(parent); }
\t\t}
\t}
\twhile((parent = parent.offsetParent));

\t// Compensate for containers scroll if it also has an offsetParent (or in IE quirks mode)
\tif(scrolled && (scrolled[0] !== ownerDocument[0] || quirks)) {
\t\tscroll(scrolled, 1);
\t}

\treturn pos;
};

// Corner class
var C = (CORNER = PROTOTYPE.reposition.Corner = function(corner, forceY) {
\tcorner = ('' + corner).replace(/([A-Z])/, ' \$1').replace(/middle/gi, CENTER).toLowerCase();
\tthis.x = (corner.match(/left|right/i) || corner.match(/center/) || ['inherit'])[0].toLowerCase();
\tthis.y = (corner.match(/top|bottom|center/i) || ['inherit'])[0].toLowerCase();
\tthis.forceY = !!forceY;

\tvar f = corner.charAt(0);
\tthis.precedance = (f === 't' || f === 'b' ? Y : X);
}).prototype;

C.invert = function(z, center) {
\tthis[z] = this[z] === LEFT ? RIGHT : this[z] === RIGHT ? LEFT : center || this[z];
};

C.string = function(join) {
\tvar x = this.x, y = this.y;

\tvar result = x !== y ?
\t\t(x === 'center' || y !== 'center' && (this.precedance === Y || this.forceY) ? 
\t\t\t[y,x] : [x,y]
\t\t) :
\t[x];

\treturn join !== false ? result.join(' ') : result;
};

C.abbrev = function() {
\tvar result = this.string(false);
\treturn result[0].charAt(0) + (result[1] && result[1].charAt(0) || '');
};

C.clone = function() {
\treturn new CORNER( this.string(), this.forceY );
};

;
PROTOTYPE.toggle = function(state, event) {
\tvar cache = this.cache,
\t\toptions = this.options,
\t\ttooltip = this.tooltip;

\t// Try to prevent flickering when tooltip overlaps show element
\tif(event) {
\t\tif((/over|enter/).test(event.type) && cache.event && (/out|leave/).test(cache.event.type) &&
\t\t\toptions.show.target.add(event.target).length === options.show.target.length &&
\t\t\ttooltip.has(event.relatedTarget).length) {
\t\t\treturn this;
\t\t}

\t\t// Cache event
\t\tcache.event = \$.event.fix(event);
\t}

\t// If we're currently waiting and we've just hidden... stop it
\tthis.waiting && !state && (this.hiddenDuringWait = TRUE);

\t// Render the tooltip if showing and it isn't already
\tif(!this.rendered) { return state ? this.render(1) : this; }
\telse if(this.destroyed || this.disabled) { return this; }

\tvar type = state ? 'show' : 'hide',
\t\topts = this.options[type],
\t\totherOpts = this.options[ !state ? 'show' : 'hide' ],
\t\tposOptions = this.options.position,
\t\tcontentOptions = this.options.content,
\t\twidth = this.tooltip.css('width'),
\t\tvisible = this.tooltip.is(':visible'),
\t\tanimate = state || opts.target.length === 1,
\t\tsameTarget = !event || opts.target.length < 2 || cache.target[0] === event.target,
\t\tidenticalState, allow, showEvent, delay, after;

\t// Detect state if valid one isn't provided
\tif((typeof state).search('boolean|number')) { state = !visible; }

\t// Check if the tooltip is in an identical state to the new would-be state
\tidenticalState = !tooltip.is(':animated') && visible === state && sameTarget;

\t// Fire tooltip(show/hide) event and check if destroyed
\tallow = !identicalState ? !!this._trigger(type, [90]) : NULL;

\t// Check to make sure the tooltip wasn't destroyed in the callback
\tif(this.destroyed) { return this; }

\t// If the user didn't stop the method prematurely and we're showing the tooltip, focus it
\tif(allow !== FALSE && state) { this.focus(event); }

\t// If the state hasn't changed or the user stopped it, return early
\tif(!allow || identicalState) { return this; }

\t// Set ARIA hidden attribute
\t\$.attr(tooltip[0], 'aria-hidden', !!!state);

\t// Execute state specific properties
\tif(state) {
\t\t// Store show origin coordinates
\t\tthis.mouse && (cache.origin = \$.event.fix(this.mouse));

\t\t// Update tooltip content & title if it's a dynamic function
\t\tif(\$.isFunction(contentOptions.text)) { this._updateContent(contentOptions.text, FALSE); }
\t\tif(\$.isFunction(contentOptions.title)) { this._updateTitle(contentOptions.title, FALSE); }

\t\t// Cache mousemove events for positioning purposes (if not already tracking)
\t\tif(!trackingBound && posOptions.target === 'mouse' && posOptions.adjust.mouse) {
\t\t\t\$(document).bind('mousemove.'+NAMESPACE, this._storeMouse);
\t\t\ttrackingBound = TRUE;
\t\t}

\t\t// Update the tooltip position (set width first to prevent viewport/max-width issues)
\t\tif(!width) { tooltip.css('width', tooltip.outerWidth(FALSE)); }
\t\tthis.reposition(event, arguments[2]);
\t\tif(!width) { tooltip.css('width', ''); }

\t\t// Hide other tooltips if tooltip is solo
\t\tif(!!opts.solo) {
\t\t\t(typeof opts.solo === 'string' ? \$(opts.solo) : \$(SELECTOR, opts.solo))
\t\t\t\t.not(tooltip).not(opts.target).qtip('hide', \$.Event('tooltipsolo'));
\t\t}
\t}
\telse {
\t\t// Clear show timer if we're hiding
\t\tclearTimeout(this.timers.show);

\t\t// Remove cached origin on hide
\t\tdelete cache.origin;

\t\t// Remove mouse tracking event if not needed (all tracking qTips are hidden)
\t\tif(trackingBound && !\$(SELECTOR+'[tracking=\"true\"]:visible', opts.solo).not(tooltip).length) {
\t\t\t\$(document).unbind('mousemove.'+NAMESPACE);
\t\t\ttrackingBound = FALSE;
\t\t}

\t\t// Blur the tooltip
\t\tthis.blur(event);
\t}

\t// Define post-animation, state specific properties
\tafter = \$.proxy(function() {
\t\tif(state) {
\t\t\t// Prevent antialias from disappearing in IE by removing filter
\t\t\tif(BROWSER.ie) { tooltip[0].style.removeAttribute('filter'); }

\t\t\t// Remove overflow setting to prevent tip bugs
\t\t\ttooltip.css('overflow', '');

\t\t\t// Autofocus elements if enabled
\t\t\tif('string' === typeof opts.autofocus) {
\t\t\t\t\$(this.options.show.autofocus, tooltip).focus();
\t\t\t}

\t\t\t// If set, hide tooltip when inactive for delay period
\t\t\tthis.options.show.target.trigger('qtip-'+this.id+'-inactive');
\t\t}
\t\telse {
\t\t\t// Reset CSS states
\t\t\ttooltip.css({
\t\t\t\tdisplay: '',
\t\t\t\tvisibility: '',
\t\t\t\topacity: '',
\t\t\t\tleft: '',
\t\t\t\ttop: ''
\t\t\t});
\t\t}

\t\t// tooltipvisible/tooltiphidden events
\t\tthis._trigger(state ? 'visible' : 'hidden');
\t}, this);

\t// If no effect type is supplied, use a simple toggle
\tif(opts.effect === FALSE || animate === FALSE) {
\t\ttooltip[ type ]();
\t\tafter();
\t}

\t// Use custom function if provided
\telse if(\$.isFunction(opts.effect)) {
\t\ttooltip.stop(1, 1);
\t\topts.effect.call(tooltip, this);
\t\ttooltip.queue('fx', function(n) {
\t\t\tafter(); n();
\t\t});
\t}

\t// Use basic fade function by default
\telse { tooltip.fadeTo(90, state ? 1 : 0, after); }

\t// If inactive hide method is set, active it
\tif(state) { opts.target.trigger('qtip-'+this.id+'-inactive'); }

\treturn this;
};

PROTOTYPE.show = function(event) { return this.toggle(TRUE, event); };

PROTOTYPE.hide = function(event) { return this.toggle(FALSE, event); };
;PROTOTYPE.focus = function(event) {
\tif(!this.rendered || this.destroyed) { return this; }

\tvar qtips = \$(SELECTOR),
\t\ttooltip = this.tooltip,
\t\tcurIndex = parseInt(tooltip[0].style.zIndex, 10),
\t\tnewIndex = QTIP.zindex + qtips.length,
\t\tfocusedElem;

\t// Only update the z-index if it has changed and tooltip is not already focused
\tif(!tooltip.hasClass(CLASS_FOCUS)) {
\t\t// tooltipfocus event
\t\tif(this._trigger('focus', [newIndex], event)) {
\t\t\t// Only update z-index's if they've changed
\t\t\tif(curIndex !== newIndex) {
\t\t\t\t// Reduce our z-index's and keep them properly ordered
\t\t\t\tqtips.each(function() {
\t\t\t\t\tif(this.style.zIndex > curIndex) {
\t\t\t\t\t\tthis.style.zIndex = this.style.zIndex - 1;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// Fire blur event for focused tooltip
\t\t\t\tqtips.filter('.' + CLASS_FOCUS).qtip('blur', event);
\t\t\t}

\t\t\t// Set the new z-index
\t\t\ttooltip.addClass(CLASS_FOCUS)[0].style.zIndex = newIndex;
\t\t}
\t}

\treturn this;
};

PROTOTYPE.blur = function(event) {
\tif(!this.rendered || this.destroyed) { return this; }

\t// Set focused status to FALSE
\tthis.tooltip.removeClass(CLASS_FOCUS);

\t// tooltipblur event
\tthis._trigger('blur', [ this.tooltip.css('zIndex') ], event);

\treturn this;
};
;PROTOTYPE.disable = function(state) {
\tif(this.destroyed) { return this; }

\t// If 'toggle' is passed, toggle the current state
\tif(state === 'toggle') {
\t\tstate = !(this.rendered ? this.tooltip.hasClass(CLASS_DISABLED) : this.disabled);
\t}

\t// Disable if no state passed
\telse if('boolean' !== typeof state) {
\t\tstate = TRUE;
\t}

\tif(this.rendered) {
\t\tthis.tooltip.toggleClass(CLASS_DISABLED, state)
\t\t\t.attr('aria-disabled', state);
\t}

\tthis.disabled = !!state;

\treturn this;
};

PROTOTYPE.enable = function() { return this.disable(FALSE); };
;PROTOTYPE._createButton = function()
{
\tvar self = this,
\t\telements = this.elements,
\t\ttooltip = elements.tooltip,
\t\tbutton = this.options.content.button,
\t\tisString = typeof button === 'string',
\t\tclose = isString ? button : 'Close tooltip';

\tif(elements.button) { elements.button.remove(); }

\t// Use custom button if one was supplied by user, else use default
\tif(button.jquery) {
\t\telements.button = button;
\t}
\telse {
\t\telements.button = \$('<a />', {
\t\t\t'class': 'qtip-close ' + (this.options.style.widget ? '' : NAMESPACE+'-icon'),
\t\t\t'title': close,
\t\t\t'aria-label': close
\t\t})
\t\t.prepend(
\t\t\t\$('<span />', {
\t\t\t\t'class': 'ui-icon ui-icon-close',
\t\t\t\t'html': '&times;'
\t\t\t})
\t\t);
\t}

\t// Create button and setup attributes
\telements.button.appendTo(elements.titlebar || tooltip)
\t\t.attr('role', 'button')
\t\t.click(function(event) {
\t\t\tif(!tooltip.hasClass(CLASS_DISABLED)) { self.hide(event); }
\t\t\treturn FALSE;
\t\t});
};

PROTOTYPE._updateButton = function(button)
{
\t// Make sure tooltip is rendered and if not, return
\tif(!this.rendered) { return FALSE; }

\tvar elem = this.elements.button;
\tif(button) { this._createButton(); }
\telse { elem.remove(); }
};
;// Widget class creator
function createWidgetClass(cls) {
\treturn WIDGET.concat('').join(cls ? '-'+cls+' ' : ' ');
}

// Widget class setter method
PROTOTYPE._setWidget = function()
{
\tvar on = this.options.style.widget,
\t\telements = this.elements,
\t\ttooltip = elements.tooltip,
\t\tdisabled = tooltip.hasClass(CLASS_DISABLED);

\ttooltip.removeClass(CLASS_DISABLED);
\tCLASS_DISABLED = on ? 'ui-state-disabled' : 'qtip-disabled';
\ttooltip.toggleClass(CLASS_DISABLED, disabled);

\ttooltip.toggleClass('ui-helper-reset '+createWidgetClass(), on).toggleClass(CLASS_DEFAULT, this.options.style.def && !on);

\tif(elements.content) {
\t\telements.content.toggleClass( createWidgetClass('content'), on);
\t}
\tif(elements.titlebar) {
\t\telements.titlebar.toggleClass( createWidgetClass('header'), on);
\t}
\tif(elements.button) {
\t\telements.button.toggleClass(NAMESPACE+'-icon', !on);
\t}
};
;function delay(callback, duration) {
\t// If tooltip has displayed, start hide timer
\tif(duration > 0) {
\t\treturn setTimeout(
\t\t\t\$.proxy(callback, this), duration
\t\t);
\t}
\telse{ callback.call(this); }
}

function showMethod(event) {
\tif(this.tooltip.hasClass(CLASS_DISABLED)) { return; }

\t// Clear hide timers
\tclearTimeout(this.timers.show);
\tclearTimeout(this.timers.hide);

\t// Start show timer
\tthis.timers.show = delay.call(this,
\t\tfunction() { this.toggle(TRUE, event); },
\t\tthis.options.show.delay
\t);
}

function hideMethod(event) {
\tif(this.tooltip.hasClass(CLASS_DISABLED) || this.destroyed) { return; }

\t// Check if new target was actually the tooltip element
\tvar relatedTarget = \$(event.relatedTarget),
\t\tontoTooltip = relatedTarget.closest(SELECTOR)[0] === this.tooltip[0],
\t\tontoTarget = relatedTarget[0] === this.options.show.target[0];

\t// Clear timers and stop animation queue
\tclearTimeout(this.timers.show);
\tclearTimeout(this.timers.hide);

\t// Prevent hiding if tooltip is fixed and event target is the tooltip.
\t// Or if mouse positioning is enabled and cursor momentarily overlaps
\tif(this !== relatedTarget[0] &&
\t\t(this.options.position.target === 'mouse' && ontoTooltip) ||
\t\t(this.options.hide.fixed && (
\t\t\t(/mouse(out|leave|move)/).test(event.type) && (ontoTooltip || ontoTarget))
\t\t))
\t{
\t\ttry {
\t\t\tevent.preventDefault();
\t\t\tevent.stopImmediatePropagation();
\t\t} catch(e) {}

\t\treturn;
\t}

\t// If tooltip has displayed, start hide timer
\tthis.timers.hide = delay.call(this,
\t\tfunction() { this.toggle(FALSE, event); },
\t\tthis.options.hide.delay,
\t\tthis
\t);
}

function inactiveMethod(event) {
\tif(this.tooltip.hasClass(CLASS_DISABLED) || !this.options.hide.inactive) { return; }

\t// Clear timer
\tclearTimeout(this.timers.inactive);

\tthis.timers.inactive = delay.call(this,
\t\tfunction(){ this.hide(event); },
\t\tthis.options.hide.inactive
\t);
}

function repositionMethod(event) {
\tif(this.rendered && this.tooltip[0].offsetWidth > 0) { this.reposition(event); }
}

// Store mouse coordinates
PROTOTYPE._storeMouse = function(event) {
\t(this.mouse = \$.event.fix(event)).type = 'mousemove';
\treturn this;
};

// Bind events
PROTOTYPE._bind = function(targets, events, method, suffix, context) {
\tif(!targets || !method || !events.length) { return; }
\tvar ns = '.' + this._id + (suffix ? '-'+suffix : '');
\t\$(targets).bind(
\t\t(events.split ? events : events.join(ns + ' ')) + ns,
\t\t\$.proxy(method, context || this)
\t);
\treturn this;
};
PROTOTYPE._unbind = function(targets, suffix) {
\ttargets && \$(targets).unbind('.' + this._id + (suffix ? '-'+suffix : ''));
\treturn this;
};

// Global delegation helper
function delegate(selector, events, method) {
\t\$(document.body).delegate(selector,
\t\t(events.split ? events : events.join('.'+NAMESPACE + ' ')) + '.'+NAMESPACE,
\t\tfunction() {
\t\t\tvar api = QTIP.api[ \$.attr(this, ATTR_ID) ];
\t\t\tapi && !api.disabled && method.apply(api, arguments);
\t\t}
\t);
}
// Event trigger
PROTOTYPE._trigger = function(type, args, event) {
\tvar callback = \$.Event('tooltip'+type);
\tcallback.originalEvent = (event && \$.extend({}, event)) || this.cache.event || NULL;

\tthis.triggering = type;
\tthis.tooltip.trigger(callback, [this].concat(args || []));
\tthis.triggering = FALSE;

\treturn !callback.isDefaultPrevented();
};

PROTOTYPE._bindEvents = function(showEvents, hideEvents, showTargets, hideTargets, showMethod, hideMethod) {
\t// Get tasrgets that lye within both
\tvar similarTargets = showTargets.filter( hideTargets ).add( hideTargets.filter(showTargets) ),
\t\ttoggleEvents = [];

\t// If hide and show targets are the same...
\tif(similarTargets.length) {

\t\t// Filter identical show/hide events
\t\t\$.each(hideEvents, function(i, type) {
\t\t\tvar showIndex = \$.inArray(type, showEvents);

\t\t\t// Both events are identical, remove from both hide and show events
\t\t\t// and append to toggleEvents
\t\t\tshowIndex > -1 && toggleEvents.push( showEvents.splice( showIndex, 1 )[0] );
\t\t});

\t\t// Toggle events are special case of identical show/hide events, which happen in sequence
\t\tif(toggleEvents.length) {
\t\t\t// Bind toggle events to the similar targets
\t\t\tthis._bind(similarTargets, toggleEvents, function(event) {
\t\t\t\tvar state = this.rendered ? this.tooltip[0].offsetWidth > 0 : false;
\t\t\t\t(state ? hideMethod : showMethod).call(this, event);
\t\t\t});

\t\t\t// Remove the similar targets from the regular show/hide bindings
\t\t\tshowTargets = showTargets.not(similarTargets);
\t\t\thideTargets = hideTargets.not(similarTargets);
\t\t}
\t}

\t// Apply show/hide/toggle events
\tthis._bind(showTargets, showEvents, showMethod);
\tthis._bind(hideTargets, hideEvents, hideMethod);
};

PROTOTYPE._assignInitialEvents = function(event) {
\tvar options = this.options,
\t\tshowTarget = options.show.target,
\t\thideTarget = options.hide.target,
\t\tshowEvents = options.show.event ? \$.trim('' + options.show.event).split(' ') : [],
\t\thideEvents = options.hide.event ? \$.trim('' + options.hide.event).split(' ') : [];

\t// Catch remove/removeqtip events on target element to destroy redundant tooltips
\tthis._bind(this.elements.target, ['remove', 'removeqtip'], function(event) {
\t\tthis.destroy(true);
\t}, 'destroy');

\t/*
\t * Make sure hoverIntent functions properly by using mouseleave as a hide event if
\t * mouseenter/mouseout is used for show.event, even if it isn't in the users options.
\t */
\tif(/mouse(over|enter)/i.test(options.show.event) && !/mouse(out|leave)/i.test(options.hide.event)) {
\t\thideEvents.push('mouseleave');
\t}

\t/*
\t * Also make sure initial mouse targetting works correctly by caching mousemove coords
\t * on show targets before the tooltip has rendered. Also set onTarget when triggered to
\t * keep mouse tracking working.
\t */
\tthis._bind(showTarget, 'mousemove', function(event) {
\t\tthis._storeMouse(event);
\t\tthis.cache.onTarget = TRUE;
\t});

\t// Define hoverIntent function
\tfunction hoverIntent(event) {
\t\t// Only continue if tooltip isn't disabled
\t\tif(this.disabled || this.destroyed) { return FALSE; }

\t\t// Cache the event data
\t\tthis.cache.event = event && \$.event.fix(event);
\t\tthis.cache.target = event && \$(event.target);

\t\t// Start the event sequence
\t\tclearTimeout(this.timers.show);
\t\tthis.timers.show = delay.call(this,
\t\t\tfunction() { this.render(typeof event === 'object' || options.show.ready); },
\t\t\toptions.prerender ? 0 : options.show.delay
\t\t);
\t}

\t// Filter and bind events
\tthis._bindEvents(showEvents, hideEvents, showTarget, hideTarget, hoverIntent, function() {
\t\tif(!this.timers) { return FALSE; }
\t\tclearTimeout(this.timers.show);
\t});

\t// Prerendering is enabled, create tooltip now
\tif(options.show.ready || options.prerender) { hoverIntent.call(this, event); }
};

// Event assignment method
PROTOTYPE._assignEvents = function() {
\tvar self = this,
\t\toptions = this.options,
\t\tposOptions = options.position,

\t\ttooltip = this.tooltip,
\t\tshowTarget = options.show.target,
\t\thideTarget = options.hide.target,
\t\tcontainerTarget = posOptions.container,
\t\tviewportTarget = posOptions.viewport,
\t\tdocumentTarget = \$(document),
\t\tbodyTarget = \$(document.body),
\t\twindowTarget = \$(window),

\t\tshowEvents = options.show.event ? \$.trim('' + options.show.event).split(' ') : [],
\t\thideEvents = options.hide.event ? \$.trim('' + options.hide.event).split(' ') : [];


\t// Assign passed event callbacks
\t\$.each(options.events, function(name, callback) {
\t\tself._bind(tooltip, name === 'toggle' ? ['tooltipshow','tooltiphide'] : ['tooltip'+name], callback, null, tooltip);
\t});

\t// Hide tooltips when leaving current window/frame (but not select/option elements)
\tif(/mouse(out|leave)/i.test(options.hide.event) && options.hide.leave === 'window') {
\t\tthis._bind(documentTarget, ['mouseout', 'blur'], function(event) {
\t\t\tif(!/select|option/.test(event.target.nodeName) && !event.relatedTarget) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t});
\t}

\t// Enable hide.fixed by adding appropriate class
\tif(options.hide.fixed) {
\t\thideTarget = hideTarget.add( tooltip.addClass(CLASS_FIXED) );
\t}

\t/*
\t * Make sure hoverIntent functions properly by using mouseleave to clear show timer if
\t * mouseenter/mouseout is used for show.event, even if it isn't in the users options.
\t */
\telse if(/mouse(over|enter)/i.test(options.show.event)) {
\t\tthis._bind(hideTarget, 'mouseleave', function() {
\t\t\tclearTimeout(this.timers.show);
\t\t});
\t}

\t// Hide tooltip on document mousedown if unfocus events are enabled
\tif(('' + options.hide.event).indexOf('unfocus') > -1) {
\t\tthis._bind(containerTarget.closest('html'), ['mousedown', 'touchstart'], function(event) {
\t\t\tvar elem = \$(event.target),
\t\t\t\tenabled = this.rendered && !this.tooltip.hasClass(CLASS_DISABLED) && this.tooltip[0].offsetWidth > 0,
\t\t\t\tisAncestor = elem.parents(SELECTOR).filter(this.tooltip[0]).length > 0;

\t\t\tif(elem[0] !== this.target[0] && elem[0] !== this.tooltip[0] && !isAncestor &&
\t\t\t\t!this.target.has(elem[0]).length && enabled
\t\t\t) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t});
\t}

\t// Check if the tooltip hides when inactive
\tif('number' === typeof options.hide.inactive) {
\t\t// Bind inactive method to show target(s) as a custom event
\t\tthis._bind(showTarget, 'qtip-'+this.id+'-inactive', inactiveMethod, 'inactive');

\t\t// Define events which reset the 'inactive' event handler
\t\tthis._bind(hideTarget.add(tooltip), QTIP.inactiveEvents, inactiveMethod);
\t}

\t// Filter and bind events
\tthis._bindEvents(showEvents, hideEvents, showTarget, hideTarget, showMethod, hideMethod);

\t// Mouse movement bindings
\tthis._bind(showTarget.add(tooltip), 'mousemove', function(event) {
\t\t// Check if the tooltip hides when mouse is moved a certain distance
\t\tif('number' === typeof options.hide.distance) {
\t\t\tvar origin = this.cache.origin || {},
\t\t\t\tlimit = this.options.hide.distance,
\t\t\t\tabs = Math.abs;

\t\t\t// Check if the movement has gone beyond the limit, and hide it if so
\t\t\tif(abs(event.pageX - origin.pageX) >= limit || abs(event.pageY - origin.pageY) >= limit) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t}

\t\t// Cache mousemove coords on show targets
\t\tthis._storeMouse(event);
\t});

\t// Mouse positioning events
\tif(posOptions.target === 'mouse') {
\t\t// If mouse adjustment is on...
\t\tif(posOptions.adjust.mouse) {
\t\t\t// Apply a mouseleave event so we don't get problems with overlapping
\t\t\tif(options.hide.event) {
\t\t\t\t// Track if we're on the target or not
\t\t\t\tthis._bind(showTarget, ['mouseenter', 'mouseleave'], function(event) {
\t\t\t\t\tif(!this.cache) {return FALSE; }
\t\t\t\t\tthis.cache.onTarget = event.type === 'mouseenter';
\t\t\t\t});
\t\t\t}

\t\t\t// Update tooltip position on mousemove
\t\t\tthis._bind(documentTarget, 'mousemove', function(event) {
\t\t\t\t// Update the tooltip position only if the tooltip is visible and adjustment is enabled
\t\t\t\tif(this.rendered && this.cache.onTarget && !this.tooltip.hasClass(CLASS_DISABLED) && this.tooltip[0].offsetWidth > 0) {
\t\t\t\t\tthis.reposition(event);
\t\t\t\t}
\t\t\t});
\t\t}
\t}

\t// Adjust positions of the tooltip on window resize if enabled
\tif(posOptions.adjust.resize || viewportTarget.length) {
\t\tthis._bind( \$.event.special.resize ? viewportTarget : windowTarget, 'resize', repositionMethod );
\t}

\t// Adjust tooltip position on scroll of the window or viewport element if present
\tif(posOptions.adjust.scroll) {
\t\tthis._bind( windowTarget.add(posOptions.container), 'scroll', repositionMethod );
\t}
};

// Un-assignment method
PROTOTYPE._unassignEvents = function() {
\tvar options = this.options,
\t\tshowTargets = options.show.target,
\t\thideTargets = options.hide.target,
\t\ttargets = \$.grep([
\t\t\tthis.elements.target[0],
\t\t\tthis.rendered && this.tooltip[0],
\t\t\toptions.position.container[0],
\t\t\toptions.position.viewport[0],
\t\t\toptions.position.container.closest('html')[0], // unfocus
\t\t\twindow,
\t\t\tdocument
\t\t], function(i) {
\t\t\treturn typeof i === 'object';
\t\t});

\t// Add show and hide targets if they're valid
\tif(showTargets && showTargets.toArray) {
\t\ttargets = targets.concat(showTargets.toArray());
\t}
\tif(hideTargets && hideTargets.toArray) {
\t\ttargets = targets.concat(hideTargets.toArray());
\t}

\t// Unbind the events
\tthis._unbind(targets)
\t\t._unbind(targets, 'destroy')
\t\t._unbind(targets, 'inactive');
};

// Apply common event handlers using delegate (avoids excessive .bind calls!)
\$(function() {
\tdelegate(SELECTOR, ['mouseenter', 'mouseleave'], function(event) {
\t\tvar state = event.type === 'mouseenter',
\t\t\ttooltip = \$(event.currentTarget),
\t\t\ttarget = \$(event.relatedTarget || event.target),
\t\t\toptions = this.options;

\t\t// On mouseenter...
\t\tif(state) {
\t\t\t// Focus the tooltip on mouseenter (z-index stacking)
\t\t\tthis.focus(event);

\t\t\t// Clear hide timer on tooltip hover to prevent it from closing
\t\t\ttooltip.hasClass(CLASS_FIXED) && !tooltip.hasClass(CLASS_DISABLED) && clearTimeout(this.timers.hide);
\t\t}

\t\t// On mouseleave...
\t\telse {
\t\t\t// When mouse tracking is enabled, hide when we leave the tooltip and not onto the show target (if a hide event is set)
\t\t\tif(options.position.target === 'mouse' && options.position.adjust.mouse &&
\t\t\t\toptions.hide.event && options.show.target && !target.closest(options.show.target[0]).length) {
\t\t\t\tthis.hide(event);
\t\t\t}
\t\t}

\t\t// Add hover class
\t\ttooltip.toggleClass(CLASS_HOVER, state);
\t});

\t// Define events which reset the 'inactive' event handler
\tdelegate('['+ATTR_ID+']', INACTIVE_EVENTS, inactiveMethod);
});
;// Initialization method
function init(elem, id, opts) {
\tvar obj, posOptions, attr, config, title,

\t// Setup element references
\tdocBody = \$(document.body),

\t// Use document body instead of document element if needed
\tnewTarget = elem[0] === document ? docBody : elem,

\t// Grab metadata from element if plugin is present
\tmetadata = (elem.metadata) ? elem.metadata(opts.metadata) : NULL,

\t// If metadata type if HTML5, grab 'name' from the object instead, or use the regular data object otherwise
\tmetadata5 = opts.metadata.type === 'html5' && metadata ? metadata[opts.metadata.name] : NULL,

\t// Grab data from metadata.name (or data-qtipopts as fallback) using .data() method,
\thtml5 = elem.data(opts.metadata.name || 'qtipopts');

\t// If we don't get an object returned attempt to parse it manualyl without parseJSON
\ttry { html5 = typeof html5 === 'string' ? \$.parseJSON(html5) : html5; } catch(e) {}

\t// Merge in and sanitize metadata
\tconfig = \$.extend(TRUE, {}, QTIP.defaults, opts,
\t\ttypeof html5 === 'object' ? sanitizeOptions(html5) : NULL,
\t\tsanitizeOptions(metadata5 || metadata));

\t// Re-grab our positioning options now we've merged our metadata and set id to passed value
\tposOptions = config.position;
\tconfig.id = id;

\t// Setup missing content if none is detected
\tif('boolean' === typeof config.content.text) {
\t\tattr = elem.attr(config.content.attr);

\t\t// Grab from supplied attribute if available
\t\tif(config.content.attr !== FALSE && attr) { config.content.text = attr; }

\t\t// No valid content was found, abort render
\t\telse { return FALSE; }
\t}

\t// Setup target options
\tif(!posOptions.container.length) { posOptions.container = docBody; }
\tif(posOptions.target === FALSE) { posOptions.target = newTarget; }
\tif(config.show.target === FALSE) { config.show.target = newTarget; }
\tif(config.show.solo === TRUE) { config.show.solo = posOptions.container.closest('body'); }
\tif(config.hide.target === FALSE) { config.hide.target = newTarget; }
\tif(config.position.viewport === TRUE) { config.position.viewport = posOptions.container; }

\t// Ensure we only use a single container
\tposOptions.container = posOptions.container.eq(0);

\t// Convert position corner values into x and y strings
\tposOptions.at = new CORNER(posOptions.at, TRUE);
\tposOptions.my = new CORNER(posOptions.my);

\t// Destroy previous tooltip if overwrite is enabled, or skip element if not
\tif(elem.data(NAMESPACE)) {
\t\tif(config.overwrite) {
\t\t\telem.qtip('destroy', true);
\t\t}
\t\telse if(config.overwrite === FALSE) {
\t\t\treturn FALSE;
\t\t}
\t}

\t// Add has-qtip attribute
\telem.attr(ATTR_HAS, id);

\t// Remove title attribute and store it if present
\tif(config.suppress && (title = elem.attr('title'))) {
\t\t// Final attr call fixes event delegatiom and IE default tooltip showing problem
\t\telem.removeAttr('title').attr(oldtitle, title).attr('title', '');
\t}

\t// Initialize the tooltip and add API reference
\tobj = new QTip(elem, config, id, !!attr);
\telem.data(NAMESPACE, obj);

\treturn obj;
}

// jQuery \$.fn extension method
QTIP = \$.fn.qtip = function(options, notation, newValue)
{
\tvar command = ('' + options).toLowerCase(), // Parse command
\t\treturned = NULL,
\t\targs = \$.makeArray(arguments).slice(1),
\t\tevent = args[args.length - 1],
\t\topts = this[0] ? \$.data(this[0], NAMESPACE) : NULL;

\t// Check for API request
\tif((!arguments.length && opts) || command === 'api') {
\t\treturn opts;
\t}

\t// Execute API command if present
\telse if('string' === typeof options) {
\t\tthis.each(function() {
\t\t\tvar api = \$.data(this, NAMESPACE);
\t\t\tif(!api) { return TRUE; }

\t\t\t// Cache the event if possible
\t\t\tif(event && event.timeStamp) { api.cache.event = event; }

\t\t\t// Check for specific API commands
\t\t\tif(notation && (command === 'option' || command === 'options')) {
\t\t\t\tif(newValue !== undefined || \$.isPlainObject(notation)) {
\t\t\t\t\tapi.set(notation, newValue);
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\treturned = api.get(notation);
\t\t\t\t\treturn FALSE;
\t\t\t\t}
\t\t\t}

\t\t\t// Execute API command
\t\t\telse if(api[command]) {
\t\t\t\tapi[command].apply(api, args);
\t\t\t}
\t\t});

\t\treturn returned !== NULL ? returned : this;
\t}

\t// No API commands. validate provided options and setup qTips
\telse if('object' === typeof options || !arguments.length) {
\t\t// Sanitize options first
\t\topts = sanitizeOptions(\$.extend(TRUE, {}, options));

\t\treturn this.each(function(i) {
\t\t\tvar api, id;

\t\t\t// Find next available ID, or use custom ID if provided
\t\t\tid = \$.isArray(opts.id) ? opts.id[i] : opts.id;
\t\t\tid = !id || id === FALSE || id.length < 1 || QTIP.api[id] ? QTIP.nextid++ : id;

\t\t\t// Initialize the qTip and re-grab newly sanitized options
\t\t\tapi = init(\$(this), id, opts);
\t\t\tif(api === FALSE) { return TRUE; }
\t\t\telse { QTIP.api[id] = api; }

\t\t\t// Initialize plugins
\t\t\t\$.each(PLUGINS, function() {
\t\t\t\tif(this.initialize === 'initialize') { this(api); }
\t\t\t});

\t\t\t// Assign initial pre-render events
\t\t\tapi._assignInitialEvents(event);
\t\t});
\t}
};

// Expose class
\$.qtip = QTip;

// Populated in render method
QTIP.api = {};
;\$.each({
\t/* Allow other plugins to successfully retrieve the title of an element with a qTip applied */
\tattr: function(attr, val) {
\t\tif(this.length) {
\t\t\tvar self = this[0],
\t\t\t\ttitle = 'title',
\t\t\t\tapi = \$.data(self, 'qtip');

\t\t\tif(attr === title && api && 'object' === typeof api && api.options.suppress) {
\t\t\t\tif(arguments.length < 2) {
\t\t\t\t\treturn \$.attr(self, oldtitle);
\t\t\t\t}

\t\t\t\t// If qTip is rendered and title was originally used as content, update it
\t\t\t\tif(api && api.options.content.attr === title && api.cache.attr) {
\t\t\t\t\tapi.set('content.text', val);
\t\t\t\t}

\t\t\t\t// Use the regular attr method to set, then cache the result
\t\t\t\treturn this.attr(oldtitle, val);
\t\t\t}
\t\t}

\t\treturn \$.fn['attr'+replaceSuffix].apply(this, arguments);
\t},

\t/* Allow clone to correctly retrieve cached title attributes */
\tclone: function(keepData) {
\t\tvar titles = \$([]), title = 'title',

\t\t// Clone our element using the real clone method
\t\telems = \$.fn['clone'+replaceSuffix].apply(this, arguments);

\t\t// Grab all elements with an oldtitle set, and change it to regular title attribute, if keepData is false
\t\tif(!keepData) {
\t\t\telems.filter('['+oldtitle+']').attr('title', function() {
\t\t\t\treturn \$.attr(this, oldtitle);
\t\t\t})
\t\t\t.removeAttr(oldtitle);
\t\t}

\t\treturn elems;
\t}
}, function(name, func) {
\tif(!func || \$.fn[name+replaceSuffix]) { return TRUE; }

\tvar old = \$.fn[name+replaceSuffix] = \$.fn[name];
\t\$.fn[name] = function() {
\t\treturn func.apply(this, arguments) || old.apply(this, arguments);
\t};
});

/* Fire off 'removeqtip' handler in \$.cleanData if jQuery UI not present (it already does similar).
 * This snippet is taken directly from jQuery UI source code found here:
 *     http://code.jquery.com/ui/jquery-ui-git.js
 */
if(!\$.ui) {
\t\$['cleanData'+replaceSuffix] = \$.cleanData;
\t\$.cleanData = function( elems ) {
\t\tfor(var i = 0, elem; (elem = \$( elems[i] )).length; i++) {
\t\t\tif(elem.attr(ATTR_HAS)) {
\t\t\t\ttry { elem.triggerHandler('removeqtip'); }
\t\t\t\tcatch( e ) {}
\t\t\t}
\t\t}
\t\t\$['cleanData'+replaceSuffix].apply(this, arguments);
\t};
}
;// qTip version
QTIP.version = '2.2.1';

// Base ID for all qTips
QTIP.nextid = 0;

// Inactive events array
QTIP.inactiveEvents = INACTIVE_EVENTS;

// Base z-index for all qTips
QTIP.zindex = 15000;

// Define configuration defaults
QTIP.defaults = {
\tprerender: FALSE,
\tid: FALSE,
\toverwrite: TRUE,
\tsuppress: TRUE,
\tcontent: {
\t\ttext: TRUE,
\t\tattr: 'title',
\t\ttitle: FALSE,
\t\tbutton: FALSE
\t},
\tposition: {
\t\tmy: 'top left',
\t\tat: 'bottom right',
\t\ttarget: FALSE,
\t\tcontainer: FALSE,
\t\tviewport: FALSE,
\t\tadjust: {
\t\t\tx: 0, y: 0,
\t\t\tmouse: TRUE,
\t\t\tscroll: TRUE,
\t\t\tresize: TRUE,
\t\t\tmethod: 'flipinvert flipinvert'
\t\t},
\t\teffect: function(api, pos, viewport) {
\t\t\t\$(this).animate(pos, {
\t\t\t\tduration: 200,
\t\t\t\tqueue: FALSE
\t\t\t});
\t\t}
\t},
\tshow: {
\t\ttarget: FALSE,
\t\tevent: 'mouseenter',
\t\teffect: TRUE,
\t\tdelay: 90,
\t\tsolo: FALSE,
\t\tready: FALSE,
\t\tautofocus: FALSE
\t},
\thide: {
\t\ttarget: FALSE,
\t\tevent: 'mouseleave',
\t\teffect: TRUE,
\t\tdelay: 0,
\t\tfixed: FALSE,
\t\tinactive: FALSE,
\t\tleave: 'window',
\t\tdistance: FALSE
\t},
\tstyle: {
\t\tclasses: '',
\t\twidget: FALSE,
\t\twidth: FALSE,
\t\theight: FALSE,
\t\tdef: TRUE
\t},
\tevents: {
\t\trender: NULL,
\t\tmove: NULL,
\t\tshow: NULL,
\t\thide: NULL,
\t\ttoggle: NULL,
\t\tvisible: NULL,
\t\thidden: NULL,
\t\tfocus: NULL,
\t\tblur: NULL
\t}
};
;var TIP,

// .bind()/.on() namespace
TIPNS = '.qtip-tip',

// Common CSS strings
MARGIN = 'margin',
BORDER = 'border',
COLOR = 'color',
BG_COLOR = 'background-color',
TRANSPARENT = 'transparent',
IMPORTANT = ' !important',

// Check if the browser supports <canvas/> elements
HASCANVAS = !!document.createElement('canvas').getContext,

// Invalid colour values used in parseColours()
INVALID = /rgba?\\(0, 0, 0(, 0)?\\)|transparent|#123456/i;

// Camel-case method, taken from jQuery source
// http://code.jquery.com/jquery-1.8.0.js
function camel(s) { return s.charAt(0).toUpperCase() + s.slice(1); }

/*
 * Modified from Modernizr's testPropsAll()
 * http://modernizr.com/downloads/modernizr-latest.js
 */
var cssProps = {}, cssPrefixes = [\"Webkit\", \"O\", \"Moz\", \"ms\"];
function vendorCss(elem, prop) {
\tvar ucProp = prop.charAt(0).toUpperCase() + prop.slice(1),
\t\tprops = (prop + ' ' + cssPrefixes.join(ucProp + ' ') + ucProp).split(' '),
\t\tcur, val, i = 0;

\t// If the property has already been mapped...
\tif(cssProps[prop]) { return elem.css(cssProps[prop]); }

\twhile((cur = props[i++])) {
\t\tif((val = elem.css(cur)) !== undefined) {
\t\t\treturn cssProps[prop] = cur, val;
\t\t}
\t}
}

// Parse a given elements CSS property into an int
function intCss(elem, prop) {
\treturn Math.ceil(parseFloat(vendorCss(elem, prop)));
}


// VML creation (for IE only)
if(!HASCANVAS) {
\tvar createVML = function(tag, props, style) {
\t\treturn '<qtipvml:'+tag+' xmlns=\"urn:schemas-microsoft.com:vml\" class=\"qtip-vml\" '+(props||'')+
\t\t\t' style=\"behavior: url(#default#VML); '+(style||'')+ '\" />';
\t};
}

// Canvas only definitions
else {
\tvar PIXEL_RATIO = window.devicePixelRatio || 1,
\t\tBACKING_STORE_RATIO = (function() {
\t\t\tvar context = document.createElement('canvas').getContext('2d');
\t\t\treturn context.backingStorePixelRatio || context.webkitBackingStorePixelRatio || context.mozBackingStorePixelRatio ||
\t\t\t\t\tcontext.msBackingStorePixelRatio || context.oBackingStorePixelRatio || 1;
\t\t}()),
\t\tSCALE = PIXEL_RATIO / BACKING_STORE_RATIO;
}


function Tip(qtip, options) {
\tthis._ns = 'tip';
\tthis.options = options;
\tthis.offset = options.offset;
\tthis.size = [ options.width, options.height ];

\t// Initialize
\tthis.init( (this.qtip = qtip) );
}

\$.extend(Tip.prototype, {
\tinit: function(qtip) {
\t\tvar context, tip;

\t\t// Create tip element and prepend to the tooltip
\t\ttip = this.element = qtip.elements.tip = \$('<div />', { 'class': NAMESPACE+'-tip' }).prependTo(qtip.tooltip);

\t\t// Create tip drawing element(s)
\t\tif(HASCANVAS) {
\t\t\t// save() as soon as we create the canvas element so FF2 doesn't bork on our first restore()!
\t\t\tcontext = \$('<canvas />').appendTo(this.element)[0].getContext('2d');

\t\t\t// Setup constant parameters
\t\t\tcontext.lineJoin = 'miter';
\t\t\tcontext.miterLimit = 100000;
\t\t\tcontext.save();
\t\t}
\t\telse {
\t\t\tcontext = createVML('shape', 'coordorigin=\"0,0\"', 'position:absolute;');
\t\t\tthis.element.html(context + context);

\t\t\t// Prevent mousing down on the tip since it causes problems with .live() handling in IE due to VML
\t\t\tqtip._bind( \$('*', tip).add(tip), ['click', 'mousedown'], function(event) { event.stopPropagation(); }, this._ns);
\t\t}

\t\t// Bind update events
\t\tqtip._bind(qtip.tooltip, 'tooltipmove', this.reposition, this._ns, this);

\t\t// Create it
\t\tthis.create();
\t},

\t_swapDimensions: function() {
\t\tthis.size[0] = this.options.height;
\t\tthis.size[1] = this.options.width;
\t},
\t_resetDimensions: function() {
\t\tthis.size[0] = this.options.width;
\t\tthis.size[1] = this.options.height;
\t},

\t_useTitle: function(corner) {
\t\tvar titlebar = this.qtip.elements.titlebar;
\t\treturn titlebar && (
\t\t\tcorner.y === TOP || (corner.y === CENTER && this.element.position().top + (this.size[1] / 2) + this.options.offset < titlebar.outerHeight(TRUE))
\t\t);
\t},

\t_parseCorner: function(corner) {
\t\tvar my = this.qtip.options.position.my;

\t\t// Detect corner and mimic properties
\t\tif(corner === FALSE || my === FALSE) {
\t\t\tcorner = FALSE;
\t\t}
\t\telse if(corner === TRUE) {
\t\t\tcorner = new CORNER( my.string() );
\t\t}
\t\telse if(!corner.string) {
\t\t\tcorner = new CORNER(corner);
\t\t\tcorner.fixed = TRUE;
\t\t}

\t\treturn corner;
\t},

\t_parseWidth: function(corner, side, use) {
\t\tvar elements = this.qtip.elements,
\t\t\tprop = BORDER + camel(side) + 'Width';

\t\treturn (use ? intCss(use, prop) : (
\t\t\tintCss(elements.content, prop) ||
\t\t\tintCss(this._useTitle(corner) && elements.titlebar || elements.content, prop) ||
\t\t\tintCss(elements.tooltip, prop)
\t\t)) || 0;
\t},

\t_parseRadius: function(corner) {
\t\tvar elements = this.qtip.elements,
\t\t\tprop = BORDER + camel(corner.y) + camel(corner.x) + 'Radius';

\t\treturn BROWSER.ie < 9 ? 0 :
\t\t\tintCss(this._useTitle(corner) && elements.titlebar || elements.content, prop) ||
\t\t\tintCss(elements.tooltip, prop) || 0;
\t},

\t_invalidColour: function(elem, prop, compare) {
\t\tvar val = elem.css(prop);
\t\treturn !val || (compare && val === elem.css(compare)) || INVALID.test(val) ? FALSE : val;
\t},

\t_parseColours: function(corner) {
\t\tvar elements = this.qtip.elements,
\t\t\ttip = this.element.css('cssText', ''),
\t\t\tborderSide = BORDER + camel(corner[ corner.precedance ]) + camel(COLOR),
\t\t\tcolorElem = this._useTitle(corner) && elements.titlebar || elements.content,
\t\t\tcss = this._invalidColour, color = [];

\t\t// Attempt to detect the background colour from various elements, left-to-right precedance
\t\tcolor[0] = css(tip, BG_COLOR) || css(colorElem, BG_COLOR) || css(elements.content, BG_COLOR) ||
\t\t\tcss(elements.tooltip, BG_COLOR) || tip.css(BG_COLOR);

\t\t// Attempt to detect the correct border side colour from various elements, left-to-right precedance
\t\tcolor[1] = css(tip, borderSide, COLOR) || css(colorElem, borderSide, COLOR) ||
\t\t\tcss(elements.content, borderSide, COLOR) || css(elements.tooltip, borderSide, COLOR) || elements.tooltip.css(borderSide);

\t\t// Reset background and border colours
\t\t\$('*', tip).add(tip).css('cssText', BG_COLOR+':'+TRANSPARENT+IMPORTANT+';'+BORDER+':0'+IMPORTANT+';');

\t\treturn color;
\t},

\t_calculateSize: function(corner) {
\t\tvar y = corner.precedance === Y,
\t\t\twidth = this.options['width'],
\t\t\theight = this.options['height'],
\t\t\tisCenter = corner.abbrev() === 'c',
\t\t\tbase = (y ? width: height) * (isCenter ? 0.5 : 1),
\t\t\tpow = Math.pow,
\t\t\tround = Math.round,
\t\t\tbigHyp, ratio, result,

\t\tsmallHyp = Math.sqrt( pow(base, 2) + pow(height, 2) ),
\t\thyp = [ (this.border / base) * smallHyp, (this.border / height) * smallHyp ];

\t\thyp[2] = Math.sqrt( pow(hyp[0], 2) - pow(this.border, 2) );
\t\thyp[3] = Math.sqrt( pow(hyp[1], 2) - pow(this.border, 2) );

\t\tbigHyp = smallHyp + hyp[2] + hyp[3] + (isCenter ? 0 : hyp[0]);
\t\tratio = bigHyp / smallHyp;

\t\tresult = [ round(ratio * width), round(ratio * height) ];
\t\treturn y ? result : result.reverse();
\t},

\t// Tip coordinates calculator
\t_calculateTip: function(corner, size, scale) {
\t\tscale = scale || 1;
\t\tsize = size || this.size;

\t\tvar width = size[0] * scale,
\t\t\theight = size[1] * scale,
\t\t\twidth2 = Math.ceil(width / 2), height2 = Math.ceil(height / 2),

\t\t// Define tip coordinates in terms of height and width values
\t\ttips = {
\t\t\tbr:\t[0,0,\t\twidth,height,\twidth,0],
\t\t\tbl:\t[0,0,\t\twidth,0,\t\t0,height],
\t\t\ttr:\t[0,height,\twidth,0,\t\twidth,height],
\t\t\ttl:\t[0,0,\t\t0,height,\t\twidth,height],
\t\t\ttc:\t[0,height,\twidth2,0,\t\twidth,height],
\t\t\tbc:\t[0,0,\t\twidth,0,\t\twidth2,height],
\t\t\trc:\t[0,0,\t\twidth,height2,\t0,height],
\t\t\tlc:\t[width,0,\twidth,height,\t0,height2]
\t\t};

\t\t// Set common side shapes
\t\ttips.lt = tips.br; tips.rt = tips.bl;
\t\ttips.lb = tips.tr; tips.rb = tips.tl;

\t\treturn tips[ corner.abbrev() ];
\t},

\t// Tip coordinates drawer (canvas)
\t_drawCoords: function(context, coords) {
\t\tcontext.beginPath();
\t\tcontext.moveTo(coords[0], coords[1]);
\t\tcontext.lineTo(coords[2], coords[3]);
\t\tcontext.lineTo(coords[4], coords[5]);
\t\tcontext.closePath();
\t},

\tcreate: function() {
\t\t// Determine tip corner
\t\tvar c = this.corner = (HASCANVAS || BROWSER.ie) && this._parseCorner(this.options.corner);

\t\t// If we have a tip corner...
\t\tif( (this.enabled = !!this.corner && this.corner.abbrev() !== 'c') ) {
\t\t\t// Cache it
\t\t\tthis.qtip.cache.corner = c.clone();

\t\t\t// Create it
\t\t\tthis.update();
\t\t}

\t\t// Toggle tip element
\t\tthis.element.toggle(this.enabled);

\t\treturn this.corner;
\t},

\tupdate: function(corner, position) {
\t\tif(!this.enabled) { return this; }

\t\tvar elements = this.qtip.elements,
\t\t\ttip = this.element,
\t\t\tinner = tip.children(),
\t\t\toptions = this.options,
\t\t\tcurSize = this.size,
\t\t\tmimic = options.mimic,
\t\t\tround = Math.round,
\t\t\tcolor, precedance, context,
\t\t\tcoords, bigCoords, translate, newSize, border, BACKING_STORE_RATIO;

\t\t// Re-determine tip if not already set
\t\tif(!corner) { corner = this.qtip.cache.corner || this.corner; }

\t\t// Use corner property if we detect an invalid mimic value
\t\tif(mimic === FALSE) { mimic = corner; }

\t\t// Otherwise inherit mimic properties from the corner object as necessary
\t\telse {
\t\t\tmimic = new CORNER(mimic);
\t\t\tmimic.precedance = corner.precedance;

\t\t\tif(mimic.x === 'inherit') { mimic.x = corner.x; }
\t\t\telse if(mimic.y === 'inherit') { mimic.y = corner.y; }
\t\t\telse if(mimic.x === mimic.y) {
\t\t\t\tmimic[ corner.precedance ] = corner[ corner.precedance ];
\t\t\t}
\t\t}
\t\tprecedance = mimic.precedance;

\t\t// Ensure the tip width.height are relative to the tip position
\t\tif(corner.precedance === X) { this._swapDimensions(); }
\t\telse { this._resetDimensions(); }

\t\t// Update our colours
\t\tcolor = this.color = this._parseColours(corner);

\t\t// Detect border width, taking into account colours
\t\tif(color[1] !== TRANSPARENT) {
\t\t\t// Grab border width
\t\t\tborder = this.border = this._parseWidth(corner, corner[corner.precedance]);

\t\t\t// If border width isn't zero, use border color as fill if it's not invalid (1.0 style tips)
\t\t\tif(options.border && border < 1 && !INVALID.test(color[1])) { color[0] = color[1]; }

\t\t\t// Set border width (use detected border width if options.border is true)
\t\t\tthis.border = border = options.border !== TRUE ? options.border : border;
\t\t}

\t\t// Border colour was invalid, set border to zero
\t\telse { this.border = border = 0; }

\t\t// Determine tip size
\t\tnewSize = this.size = this._calculateSize(corner);
\t\ttip.css({
\t\t\twidth: newSize[0],
\t\t\theight: newSize[1],
\t\t\tlineHeight: newSize[1]+'px'
\t\t});

\t\t// Calculate tip translation
\t\tif(corner.precedance === Y) {
\t\t\ttranslate = [
\t\t\t\tround(mimic.x === LEFT ? border : mimic.x === RIGHT ? newSize[0] - curSize[0] - border : (newSize[0] - curSize[0]) / 2),
\t\t\t\tround(mimic.y === TOP ? newSize[1] - curSize[1] : 0)
\t\t\t];
\t\t}
\t\telse {
\t\t\ttranslate = [
\t\t\t\tround(mimic.x === LEFT ? newSize[0] - curSize[0] : 0),
\t\t\t\tround(mimic.y === TOP ? border : mimic.y === BOTTOM ? newSize[1] - curSize[1] - border : (newSize[1] - curSize[1]) / 2)
\t\t\t];
\t\t}

\t\t// Canvas drawing implementation
\t\tif(HASCANVAS) {
\t\t\t// Grab canvas context and clear/save it
\t\t\tcontext = inner[0].getContext('2d');
\t\t\tcontext.restore(); context.save();
\t\t\tcontext.clearRect(0,0,6000,6000);

\t\t\t// Calculate coordinates
\t\t\tcoords = this._calculateTip(mimic, curSize, SCALE);
\t\t\tbigCoords = this._calculateTip(mimic, this.size, SCALE);

\t\t\t// Set the canvas size using calculated size
\t\t\tinner.attr(WIDTH, newSize[0] * SCALE).attr(HEIGHT, newSize[1] * SCALE);
\t\t\tinner.css(WIDTH, newSize[0]).css(HEIGHT, newSize[1]);

\t\t\t// Draw the outer-stroke tip
\t\t\tthis._drawCoords(context, bigCoords);
\t\t\tcontext.fillStyle = color[1];
\t\t\tcontext.fill();

\t\t\t// Draw the actual tip
\t\t\tcontext.translate(translate[0] * SCALE, translate[1] * SCALE);
\t\t\tthis._drawCoords(context, coords);
\t\t\tcontext.fillStyle = color[0];
\t\t\tcontext.fill();
\t\t}

\t\t// VML (IE Proprietary implementation)
\t\telse {
\t\t\t// Calculate coordinates
\t\t\tcoords = this._calculateTip(mimic);

\t\t\t// Setup coordinates string
\t\t\tcoords = 'm' + coords[0] + ',' + coords[1] + ' l' + coords[2] +
\t\t\t\t',' + coords[3] + ' ' + coords[4] + ',' + coords[5] + ' xe';

\t\t\t// Setup VML-specific offset for pixel-perfection
\t\t\ttranslate[2] = border && /^(r|b)/i.test(corner.string()) ?
\t\t\t\tBROWSER.ie === 8 ? 2 : 1 : 0;

\t\t\t// Set initial CSS
\t\t\tinner.css({
\t\t\t\tcoordsize: (newSize[0]+border) + ' ' + (newSize[1]+border),
\t\t\t\tantialias: ''+(mimic.string().indexOf(CENTER) > -1),
\t\t\t\tleft: translate[0] - (translate[2] * Number(precedance === X)),
\t\t\t\ttop: translate[1] - (translate[2] * Number(precedance === Y)),
\t\t\t\twidth: newSize[0] + border,
\t\t\t\theight: newSize[1] + border
\t\t\t})
\t\t\t.each(function(i) {
\t\t\t\tvar \$this = \$(this);

\t\t\t\t// Set shape specific attributes
\t\t\t\t\$this[ \$this.prop ? 'prop' : 'attr' ]({
\t\t\t\t\tcoordsize: (newSize[0]+border) + ' ' + (newSize[1]+border),
\t\t\t\t\tpath: coords,
\t\t\t\t\tfillcolor: color[0],
\t\t\t\t\tfilled: !!i,
\t\t\t\t\tstroked: !i
\t\t\t\t})
\t\t\t\t.toggle(!!(border || i));

\t\t\t\t// Check if border is enabled and add stroke element
\t\t\t\t!i && \$this.html( createVML(
\t\t\t\t\t'stroke', 'weight=\"'+(border*2)+'px\" color=\"'+color[1]+'\" miterlimit=\"1000\" joinstyle=\"miter\"'
\t\t\t\t) );
\t\t\t});
\t\t}

\t\t// Opera bug #357 - Incorrect tip position
\t\t// https://github.com/Craga89/qTip2/issues/367
\t\twindow.opera && setTimeout(function() {
\t\t\telements.tip.css({
\t\t\t\tdisplay: 'inline-block',
\t\t\t\tvisibility: 'visible'
\t\t\t});
\t\t}, 1);

\t\t// Position if needed
\t\tif(position !== FALSE) { this.calculate(corner, newSize); }
\t},

\tcalculate: function(corner, size) {
\t\tif(!this.enabled) { return FALSE; }

\t\tvar self = this,
\t\t\telements = this.qtip.elements,
\t\t\ttip = this.element,
\t\t\tuserOffset = this.options.offset,
\t\t\tisWidget = elements.tooltip.hasClass('ui-widget'),
\t\t\tposition = {  },
\t\t\tprecedance, corners;

\t\t// Inherit corner if not provided
\t\tcorner = corner || this.corner;
\t\tprecedance = corner.precedance;

\t\t// Determine which tip dimension to use for adjustment
\t\tsize = size || this._calculateSize(corner);

\t\t// Setup corners and offset array
\t\tcorners = [ corner.x, corner.y ];
\t\tif(precedance === X) { corners.reverse(); }

\t\t// Calculate tip position
\t\t\$.each(corners, function(i, side) {
\t\t\tvar b, bc, br;

\t\t\tif(side === CENTER) {
\t\t\t\tb = precedance === Y ? LEFT : TOP;
\t\t\t\tposition[ b ] = '50%';
\t\t\t\tposition[MARGIN+'-' + b] = -Math.round(size[ precedance === Y ? 0 : 1 ] / 2) + userOffset;
\t\t\t}
\t\t\telse {
\t\t\t\tb = self._parseWidth(corner, side, elements.tooltip);
\t\t\t\tbc = self._parseWidth(corner, side, elements.content);
\t\t\t\tbr = self._parseRadius(corner);

\t\t\t\tposition[ side ] = Math.max(-self.border, i ? bc : (userOffset + (br > b ? br : -b)));
\t\t\t}
\t\t});

\t\t// Adjust for tip size
\t\tposition[ corner[precedance] ] -= size[ precedance === X ? 0 : 1 ];

\t\t// Set and return new position
\t\ttip.css({ margin: '', top: '', bottom: '', left: '', right: '' }).css(position);
\t\treturn position;
\t},

\treposition: function(event, api, pos, viewport) {
\t\tif(!this.enabled) { return; }

\t\tvar cache = api.cache,
\t\t\tnewCorner = this.corner.clone(),
\t\t\tadjust = pos.adjusted,
\t\t\tmethod = api.options.position.adjust.method.split(' '),
\t\t\thorizontal = method[0],
\t\t\tvertical = method[1] || method[0],
\t\t\tshift = { left: FALSE, top: FALSE, x: 0, y: 0 },
\t\t\toffset, css = {}, props;

\t\tfunction shiftflip(direction, precedance, popposite, side, opposite) {
\t\t\t// Horizontal - Shift or flip method
\t\t\tif(direction === SHIFT && newCorner.precedance === precedance && adjust[side] && newCorner[popposite] !== CENTER) {
\t\t\t\tnewCorner.precedance = newCorner.precedance === X ? Y : X;
\t\t\t}
\t\t\telse if(direction !== SHIFT && adjust[side]){
\t\t\t\tnewCorner[precedance] = newCorner[precedance] === CENTER ?
\t\t\t\t\t(adjust[side] > 0 ? side : opposite) : (newCorner[precedance] === side ? opposite : side);
\t\t\t}
\t\t}

\t\tfunction shiftonly(xy, side, opposite) {
\t\t\tif(newCorner[xy] === CENTER) {
\t\t\t\tcss[MARGIN+'-'+side] = shift[xy] = offset[MARGIN+'-'+side] - adjust[side];
\t\t\t}
\t\t\telse {
\t\t\t\tprops = offset[opposite] !== undefined ?
\t\t\t\t\t[ adjust[side], -offset[side] ] : [ -adjust[side], offset[side] ];

\t\t\t\tif( (shift[xy] = Math.max(props[0], props[1])) > props[0] ) {
\t\t\t\t\tpos[side] -= adjust[side];
\t\t\t\t\tshift[side] = FALSE;
\t\t\t\t}

\t\t\t\tcss[ offset[opposite] !== undefined ? opposite : side ] = shift[xy];
\t\t\t}
\t\t}

\t\t// If our tip position isn't fixed e.g. doesn't adjust with viewport...
\t\tif(this.corner.fixed !== TRUE) {
\t\t\t// Perform shift/flip adjustments
\t\t\tshiftflip(horizontal, X, Y, LEFT, RIGHT);
\t\t\tshiftflip(vertical, Y, X, TOP, BOTTOM);

\t\t\t// Update and redraw the tip if needed (check cached details of last drawn tip)
\t\t\tif(newCorner.string() !== cache.corner.string() || cache.cornerTop !== adjust.top || cache.cornerLeft !== adjust.left) {
\t\t\t\tthis.update(newCorner, FALSE);
\t\t\t}
\t\t}

\t\t// Setup tip offset properties
\t\toffset = this.calculate(newCorner);

\t\t// Readjust offset object to make it left/top
\t\tif(offset.right !== undefined) { offset.left = -offset.right; }
\t\tif(offset.bottom !== undefined) { offset.top = -offset.bottom; }
\t\toffset.user = this.offset;

\t\t// Perform shift adjustments
\t\tif(shift.left = (horizontal === SHIFT && !!adjust.left)) { shiftonly(X, LEFT, RIGHT); }
\t\tif(shift.top = (vertical === SHIFT && !!adjust.top)) { shiftonly(Y, TOP, BOTTOM); }

\t\t/*
\t\t* If the tip is adjusted in both dimensions, or in a
\t\t* direction that would cause it to be anywhere but the
\t\t* outer border, hide it!
\t\t*/
\t\tthis.element.css(css).toggle(
\t\t\t!((shift.x && shift.y) || (newCorner.x === CENTER && shift.y) || (newCorner.y === CENTER && shift.x))
\t\t);

\t\t// Adjust position to accomodate tip dimensions
\t\tpos.left -= offset.left.charAt ? offset.user :
\t\t\thorizontal !== SHIFT || shift.top || !shift.left && !shift.top ? offset.left + this.border : 0;
\t\tpos.top -= offset.top.charAt ? offset.user :
\t\t\tvertical !== SHIFT || shift.left || !shift.left && !shift.top ? offset.top + this.border : 0;

\t\t// Cache details
\t\tcache.cornerLeft = adjust.left; cache.cornerTop = adjust.top;
\t\tcache.corner = newCorner.clone();
\t},

\tdestroy: function() {
\t\t// Unbind events
\t\tthis.qtip._unbind(this.qtip.tooltip, this._ns);

\t\t// Remove the tip element(s)
\t\tif(this.qtip.elements.tip) {
\t\t\tthis.qtip.elements.tip.find('*')
\t\t\t\t.remove().end().remove();
\t\t}
\t}
});

TIP = PLUGINS.tip = function(api) {
\treturn new Tip(api, api.options.style.tip);
};

// Initialize tip on render
TIP.initialize = 'render';

// Setup plugin sanitization options
TIP.sanitize = function(options) {
\tif(options.style && 'tip' in options.style) {
\t\tvar opts = options.style.tip;
\t\tif(typeof opts !== 'object') { opts = options.style.tip = { corner: opts }; }
\t\tif(!(/string|boolean/i).test(typeof opts.corner)) { opts.corner = TRUE; }
\t}
};

// Add new option checks for the plugin
CHECKS.tip = {
\t'^position.my|style.tip.(corner|mimic|border)\$': function() {
\t\t// Make sure a tip can be drawn
\t\tthis.create();

\t\t// Reposition the tooltip
\t\tthis.qtip.reposition();
\t},
\t'^style.tip.(height|width)\$': function(obj) {
\t\t// Re-set dimensions and redraw the tip
\t\tthis.size = [ obj.width, obj.height ];
\t\tthis.update();

\t\t// Reposition the tooltip
\t\tthis.qtip.reposition();
\t},
\t'^content.title|style.(classes|widget)\$': function() {
\t\tthis.update();
\t}
};

// Extend original qTip defaults
\$.extend(TRUE, QTIP.defaults, {
\tstyle: {
\t\ttip: {
\t\t\tcorner: TRUE,
\t\t\tmimic: FALSE,
\t\t\twidth: 6,
\t\t\theight: 6,
\t\t\tborder: TRUE,
\t\t\toffset: 0
\t\t}
\t}
});
;PLUGINS.viewport = function(api, position, posOptions, targetWidth, targetHeight, elemWidth, elemHeight)
{
\tvar target = posOptions.target,
\t\ttooltip = api.elements.tooltip,
\t\tmy = posOptions.my,
\t\tat = posOptions.at,
\t\tadjust = posOptions.adjust,
\t\tmethod = adjust.method.split(' '),
\t\tmethodX = method[0],
\t\tmethodY = method[1] || method[0],
\t\tviewport = posOptions.viewport,
\t\tcontainer = posOptions.container,
\t\tcache = api.cache,
\t\tadjusted = { left: 0, top: 0 },
\t\tfixed, newMy, containerOffset, containerStatic,
\t\tviewportWidth, viewportHeight, viewportScroll, viewportOffset;

\t// If viewport is not a jQuery element, or it's the window/document, or no adjustment method is used... return
\tif(!viewport.jquery || target[0] === window || target[0] === document.body || adjust.method === 'none') {
\t\treturn adjusted;
\t}

\t// Cach container details
\tcontainerOffset = container.offset() || adjusted;
\tcontainerStatic = container.css('position') === 'static';

\t// Cache our viewport details
\tfixed = tooltip.css('position') === 'fixed';
\tviewportWidth = viewport[0] === window ? viewport.width() : viewport.outerWidth(FALSE);
\tviewportHeight = viewport[0] === window ? viewport.height() : viewport.outerHeight(FALSE);
\tviewportScroll = { left: fixed ? 0 : viewport.scrollLeft(), top: fixed ? 0 : viewport.scrollTop() };
\tviewportOffset = viewport.offset() || adjusted;

\t// Generic calculation method
\tfunction calculate(side, otherSide, type, adjust, side1, side2, lengthName, targetLength, elemLength) {
\t\tvar initialPos = position[side1],
\t\t\tmySide = my[side],
\t\t\tatSide = at[side],
\t\t\tisShift = type === SHIFT,
\t\t\tmyLength = mySide === side1 ? elemLength : mySide === side2 ? -elemLength : -elemLength / 2,
\t\t\tatLength = atSide === side1 ? targetLength : atSide === side2 ? -targetLength : -targetLength / 2,
\t\t\tsideOffset = viewportScroll[side1] + viewportOffset[side1] - (containerStatic ? 0 : containerOffset[side1]),
\t\t\toverflow1 = sideOffset - initialPos,
\t\t\toverflow2 = initialPos + elemLength - (lengthName === WIDTH ? viewportWidth : viewportHeight) - sideOffset,
\t\t\toffset = myLength - (my.precedance === side || mySide === my[otherSide] ? atLength : 0) - (atSide === CENTER ? targetLength / 2 : 0);

\t\t// shift
\t\tif(isShift) {
\t\t\toffset = (mySide === side1 ? 1 : -1) * myLength;

\t\t\t// Adjust position but keep it within viewport dimensions
\t\t\tposition[side1] += overflow1 > 0 ? overflow1 : overflow2 > 0 ? -overflow2 : 0;
\t\t\tposition[side1] = Math.max(
\t\t\t\t-containerOffset[side1] + viewportOffset[side1],
\t\t\t\tinitialPos - offset,
\t\t\t\tMath.min(
\t\t\t\t\tMath.max(
\t\t\t\t\t\t-containerOffset[side1] + viewportOffset[side1] + (lengthName === WIDTH ? viewportWidth : viewportHeight),
\t\t\t\t\t\tinitialPos + offset
\t\t\t\t\t),
\t\t\t\t\tposition[side1],

\t\t\t\t\t// Make sure we don't adjust complete off the element when using 'center'
\t\t\t\t\tmySide === 'center' ? initialPos - myLength : 1E9
\t\t\t\t)
\t\t\t);

\t\t}

\t\t// flip/flipinvert
\t\telse {
\t\t\t// Update adjustment amount depending on if using flipinvert or flip
\t\t\tadjust *= (type === FLIPINVERT ? 2 : 0);

\t\t\t// Check for overflow on the left/top
\t\t\tif(overflow1 > 0 && (mySide !== side1 || overflow2 > 0)) {
\t\t\t\tposition[side1] -= offset + adjust;
\t\t\t\tnewMy.invert(side, side1);
\t\t\t}

\t\t\t// Check for overflow on the bottom/right
\t\t\telse if(overflow2 > 0 && (mySide !== side2 || overflow1 > 0)  ) {
\t\t\t\tposition[side1] -= (mySide === CENTER ? -offset : offset) + adjust;
\t\t\t\tnewMy.invert(side, side2);
\t\t\t}

\t\t\t// Make sure we haven't made things worse with the adjustment and reset if so
\t\t\tif(position[side1] < viewportScroll && -position[side1] > overflow2) {
\t\t\t\tposition[side1] = initialPos; newMy = my.clone();
\t\t\t}
\t\t}

\t\treturn position[side1] - initialPos;
\t}

\t// Set newMy if using flip or flipinvert methods
\tif(methodX !== 'shift' || methodY !== 'shift') { newMy = my.clone(); }

\t// Adjust position based onviewport and adjustment options
\tadjusted = {
\t\tleft: methodX !== 'none' ? calculate( X, Y, methodX, adjust.x, LEFT, RIGHT, WIDTH, targetWidth, elemWidth ) : 0,
\t\ttop: methodY !== 'none' ? calculate( Y, X, methodY, adjust.y, TOP, BOTTOM, HEIGHT, targetHeight, elemHeight ) : 0,
\t\tmy: newMy
\t};

\treturn adjusted;
};
;PLUGINS.polys = {
\t// POLY area coordinate calculator
\t//\tSpecial thanks to Ed Cradock for helping out with this.
\t//\tUses a binary search algorithm to find suitable coordinates.
\tpolygon: function(baseCoords, corner) {
\t\tvar result = {
\t\t\twidth: 0, height: 0,
\t\t\tposition: {
\t\t\t\ttop: 1e10, right: 0,
\t\t\t\tbottom: 0, left: 1e10
\t\t\t},
\t\t\tadjustable: FALSE
\t\t},
\t\ti = 0, next,
\t\tcoords = [],
\t\tcompareX = 1, compareY = 1,
\t\trealX = 0, realY = 0,
\t\tnewWidth, newHeight;

\t\t// First pass, sanitize coords and determine outer edges
\t\ti = baseCoords.length; while(i--) {
\t\t\tnext = [ parseInt(baseCoords[--i], 10), parseInt(baseCoords[i+1], 10) ];

\t\t\tif(next[0] > result.position.right){ result.position.right = next[0]; }
\t\t\tif(next[0] < result.position.left){ result.position.left = next[0]; }
\t\t\tif(next[1] > result.position.bottom){ result.position.bottom = next[1]; }
\t\t\tif(next[1] < result.position.top){ result.position.top = next[1]; }

\t\t\tcoords.push(next);
\t\t}

\t\t// Calculate height and width from outer edges
\t\tnewWidth = result.width = Math.abs(result.position.right - result.position.left);
\t\tnewHeight = result.height = Math.abs(result.position.bottom - result.position.top);

\t\t// If it's the center corner...
\t\tif(corner.abbrev() === 'c') {
\t\t\tresult.position = {
\t\t\t\tleft: result.position.left + (result.width / 2),
\t\t\t\ttop: result.position.top + (result.height / 2)
\t\t\t};
\t\t}
\t\telse {
\t\t\t// Second pass, use a binary search algorithm to locate most suitable coordinate
\t\t\twhile(newWidth > 0 && newHeight > 0 && compareX > 0 && compareY > 0)
\t\t\t{
\t\t\t\tnewWidth = Math.floor(newWidth / 2);
\t\t\t\tnewHeight = Math.floor(newHeight / 2);

\t\t\t\tif(corner.x === LEFT){ compareX = newWidth; }
\t\t\t\telse if(corner.x === RIGHT){ compareX = result.width - newWidth; }
\t\t\t\telse{ compareX += Math.floor(newWidth / 2); }

\t\t\t\tif(corner.y === TOP){ compareY = newHeight; }
\t\t\t\telse if(corner.y === BOTTOM){ compareY = result.height - newHeight; }
\t\t\t\telse{ compareY += Math.floor(newHeight / 2); }

\t\t\t\ti = coords.length; while(i--)
\t\t\t\t{
\t\t\t\t\tif(coords.length < 2){ break; }

\t\t\t\t\trealX = coords[i][0] - result.position.left;
\t\t\t\t\trealY = coords[i][1] - result.position.top;

\t\t\t\t\tif((corner.x === LEFT && realX >= compareX) ||
\t\t\t\t\t(corner.x === RIGHT && realX <= compareX) ||
\t\t\t\t\t(corner.x === CENTER && (realX < compareX || realX > (result.width - compareX))) ||
\t\t\t\t\t(corner.y === TOP && realY >= compareY) ||
\t\t\t\t\t(corner.y === BOTTOM && realY <= compareY) ||
\t\t\t\t\t(corner.y === CENTER && (realY < compareY || realY > (result.height - compareY)))) {
\t\t\t\t\t\tcoords.splice(i, 1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tresult.position = { left: coords[0][0], top: coords[0][1] };
\t\t}

\t\treturn result;
\t},

\trect: function(ax, ay, bx, by) {
\t\treturn {
\t\t\twidth: Math.abs(bx - ax),
\t\t\theight: Math.abs(by - ay),
\t\t\tposition: {
\t\t\t\tleft: Math.min(ax, bx),
\t\t\t\ttop: Math.min(ay, by)
\t\t\t}
\t\t};
\t},

\t_angles: {
\t\ttc: 3 / 2, tr: 7 / 4, tl: 5 / 4,
\t\tbc: 1 / 2, br: 1 / 4, bl: 3 / 4,
\t\trc: 2, lc: 1, c: 0
\t},
\tellipse: function(cx, cy, rx, ry, corner) {
\t\tvar c = PLUGINS.polys._angles[ corner.abbrev() ],
\t\t\trxc = c === 0 ? 0 : rx * Math.cos( c * Math.PI ),
\t\t\trys = ry * Math.sin( c * Math.PI );

\t\treturn {
\t\t\twidth: (rx * 2) - Math.abs(rxc),
\t\t\theight: (ry * 2) - Math.abs(rys),
\t\t\tposition: {
\t\t\t\tleft: cx + rxc,
\t\t\t\ttop: cy + rys
\t\t\t},
\t\t\tadjustable: FALSE
\t\t};
\t},
\tcircle: function(cx, cy, r, corner) {
\t\treturn PLUGINS.polys.ellipse(cx, cy, r, r, corner);
\t}
};
;PLUGINS.svg = function(api, svg, corner)
{
\tvar doc = \$(document),
\t\telem = svg[0],
\t\troot = \$(elem.ownerSVGElement),
\t\townerDocument = elem.ownerDocument,
\t\tstrokeWidth2 = (parseInt(svg.css('stroke-width'), 10) || 0) / 2,
\t\tframeOffset, mtx, transformed, viewBox,
\t\tlen, next, i, points,
\t\tresult, position, dimensions;

\t// Ascend the parentNode chain until we find an element with getBBox()
\twhile(!elem.getBBox) { elem = elem.parentNode; }
\tif(!elem.getBBox || !elem.parentNode) { return FALSE; }

\t// Determine which shape calculation to use
\tswitch(elem.nodeName) {
\t\tcase 'ellipse':
\t\tcase 'circle':
\t\t\tresult = PLUGINS.polys.ellipse(
\t\t\t\telem.cx.baseVal.value,
\t\t\t\telem.cy.baseVal.value,
\t\t\t\t(elem.rx || elem.r).baseVal.value + strokeWidth2,
\t\t\t\t(elem.ry || elem.r).baseVal.value + strokeWidth2,
\t\t\t\tcorner
\t\t\t);
\t\tbreak;

\t\tcase 'line':
\t\tcase 'polygon':
\t\tcase 'polyline':
\t\t\t// Determine points object (line has none, so mimic using array)
\t\t\tpoints = elem.points || [
\t\t\t\t{ x: elem.x1.baseVal.value, y: elem.y1.baseVal.value },
\t\t\t\t{ x: elem.x2.baseVal.value, y: elem.y2.baseVal.value }
\t\t\t];

\t\t\tfor(result = [], i = -1, len = points.numberOfItems || points.length; ++i < len;) {
\t\t\t\tnext = points.getItem ? points.getItem(i) : points[i];
\t\t\t\tresult.push.apply(result, [next.x, next.y]);
\t\t\t}

\t\t\tresult = PLUGINS.polys.polygon(result, corner);
\t\tbreak;

\t\t// Unknown shape or rectangle? Use bounding box
\t\tdefault:
\t\t\tresult = elem.getBBox();
\t\t\tresult = {
\t\t\t\twidth: result.width,
\t\t\t\theight: result.height,
\t\t\t\tposition: {
\t\t\t\t\tleft: result.x,
\t\t\t\t\ttop: result.y
\t\t\t\t}
\t\t\t};
\t\tbreak;
\t}

\t// Shortcut assignments
\tposition = result.position;
\troot = root[0];

\t// Convert position into a pixel value
\tif(root.createSVGPoint) {
\t\tmtx = elem.getScreenCTM();
\t\tpoints = root.createSVGPoint();

\t\tpoints.x = position.left;
\t\tpoints.y = position.top;
\t\ttransformed = points.matrixTransform( mtx );
\t\tposition.left = transformed.x;
\t\tposition.top = transformed.y;
\t}

\t// Check the element is not in a child document, and if so, adjust for frame elements offset
\tif(ownerDocument !== document && api.position.target !== 'mouse') {
\t\tframeOffset = \$((ownerDocument.defaultView || ownerDocument.parentWindow).frameElement).offset();
\t\tif(frameOffset) {
\t\t\tposition.left += frameOffset.left;
\t\t\tposition.top += frameOffset.top;
\t\t}
\t}

\t// Adjust by scroll offset of owner document
\townerDocument = \$(ownerDocument);
\tposition.left += ownerDocument.scrollLeft();
\tposition.top += ownerDocument.scrollTop();

\treturn result;
};
;}));
}( window, document ));
", "wdn/templates_4.1/scripts/compressed/plugins/qtip/jquery.qtip.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/qtip/jquery.qtip.js.src.js");
    }
}
