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

/* wdn/templates_5.0/js/mustard/ofi.js */
class __TwigTemplate_bb558a5fe14bb80b8e4cd7d5d80226d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/mustard/ofi.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/mustard/ofi.js"));

        // line 1
        echo "/*! npm.im/object-fit-images 3.2.4 */
var objectFitImages = (function () {
'use strict';

var OFI = 'bfred-it:object-fit-images';
var propRegex = /(object-fit|object-position)\\s*:\\s*([-.\\w\\s%]+)/g;
var testImg = typeof Image === 'undefined' ? {style: {'object-position': 1}} : new Image();
var supportsObjectFit = 'object-fit' in testImg.style;
var supportsObjectPosition = 'object-position' in testImg.style;
var supportsOFI = 'background-size' in testImg.style;
var supportsCurrentSrc = typeof testImg.currentSrc === 'string';
var nativeGetAttribute = testImg.getAttribute;
var nativeSetAttribute = testImg.setAttribute;
var autoModeEnabled = false;

function createPlaceholder(w, h) {
\treturn (\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='\" + w + \"' height='\" + h + \"'%3E%3C/svg%3E\");
}

function polyfillCurrentSrc(el) {
\tif (el.srcset && !supportsCurrentSrc && window.picturefill) {
\t\tvar pf = window.picturefill._;
\t\t// parse srcset with picturefill where currentSrc isn't available
\t\tif (!el[pf.ns] || !el[pf.ns].evaled) {
\t\t\t// force synchronous srcset parsing
\t\t\tpf.fillImg(el, {reselect: true});
\t\t}

\t\tif (!el[pf.ns].curSrc) {
\t\t\t// force picturefill to parse srcset
\t\t\tel[pf.ns].supported = false;
\t\t\tpf.fillImg(el, {reselect: true});
\t\t}

\t\t// retrieve parsed currentSrc, if any
\t\tel.currentSrc = el[pf.ns].curSrc || el.src;
\t}
}

function getStyle(el) {
\tvar style = getComputedStyle(el).fontFamily;
\tvar parsed;
\tvar props = {};
\twhile ((parsed = propRegex.exec(style)) !== null) {
\t\tprops[parsed[1]] = parsed[2];
\t}
\treturn props;
}

function setPlaceholder(img, width, height) {
\t// Default: fill width, no height
\tvar placeholder = createPlaceholder(width || 1, height || 0);

\t// Only set placeholder if it's different
\tif (nativeGetAttribute.call(img, 'src') !== placeholder) {
\t\tnativeSetAttribute.call(img, 'src', placeholder);
\t}
}

function onImageReady(img, callback) {
\t// naturalWidth is only available when the image headers are loaded,
\t// this loop will poll it every 100ms.
\tif (img.naturalWidth) {
\t\tcallback(img);
\t} else {
\t\tsetTimeout(onImageReady, 100, img, callback);
\t}
}

function fixOne(el) {
\tvar style = getStyle(el);
\tvar ofi = el[OFI];
\tstyle['object-fit'] = style['object-fit'] || 'fill'; // default value

\t// Avoid running where unnecessary, unless OFI had already done its deed
\tif (!ofi.img) {
\t\t// fill is the default behavior so no action is necessary
\t\tif (style['object-fit'] === 'fill') {
\t\t\treturn;
\t\t}

\t\t// Where object-fit is supported and object-position isn't (Safari < 10)
\t\tif (
\t\t\t!ofi.skipTest && // unless user wants to apply regardless of browser support
\t\t\tsupportsObjectFit && // if browser already supports object-fit
\t\t\t!style['object-position'] // unless object-position is used
\t\t) {
\t\t\treturn;
\t\t}
\t}

\t// keep a clone in memory while resetting the original to a blank
\tif (!ofi.img) {
\t\tofi.img = new Image(el.width, el.height);
\t\tofi.img.srcset = nativeGetAttribute.call(el, \"data-ofi-srcset\") || el.srcset;
\t\tofi.img.src = nativeGetAttribute.call(el, \"data-ofi-src\") || el.src;

\t\t// preserve for any future cloneNode calls
\t\t// https://github.com/bfred-it/object-fit-images/issues/53
\t\tnativeSetAttribute.call(el, \"data-ofi-src\", el.src);
\t\tif (el.srcset) {
\t\t\tnativeSetAttribute.call(el, \"data-ofi-srcset\", el.srcset);
\t\t}

\t\tsetPlaceholder(el, el.naturalWidth || el.width, el.naturalHeight || el.height);

\t\t// remove srcset because it overrides src
\t\tif (el.srcset) {
\t\t\tel.srcset = '';
\t\t}
\t\ttry {
\t\t\tkeepSrcUsable(el);
\t\t} catch (err) {
\t\t\tif (window.console) {
\t\t\t\tconsole.warn('https://bit.ly/ofi-old-browser');
\t\t\t}
\t\t}
\t}

\tpolyfillCurrentSrc(ofi.img);

\tel.style.backgroundImage = \"url(\\\"\" + ((ofi.img.currentSrc || ofi.img.src).replace(/\"/g, '\\\\\"')) + \"\\\")\";
\tel.style.backgroundPosition = style['object-position'] || 'center';
\tel.style.backgroundRepeat = 'no-repeat';
\tel.style.backgroundOrigin = 'content-box';

\tif (/scale-down/.test(style['object-fit'])) {
\t\tonImageReady(ofi.img, function () {
\t\t\tif (ofi.img.naturalWidth > el.width || ofi.img.naturalHeight > el.height) {
\t\t\t\tel.style.backgroundSize = 'contain';
\t\t\t} else {
\t\t\t\tel.style.backgroundSize = 'auto';
\t\t\t}
\t\t});
\t} else {
\t\tel.style.backgroundSize = style['object-fit'].replace('none', 'auto').replace('fill', '100% 100%');
\t}

\tonImageReady(ofi.img, function (img) {
\t\tsetPlaceholder(el, img.naturalWidth, img.naturalHeight);
\t});
}

function keepSrcUsable(el) {
\tvar descriptors = {
\t\tget: function get(prop) {
\t\t\treturn el[OFI].img[prop ? prop : 'src'];
\t\t},
\t\tset: function set(value, prop) {
\t\t\tel[OFI].img[prop ? prop : 'src'] = value;
\t\t\tnativeSetAttribute.call(el, (\"data-ofi-\" + prop), value); // preserve for any future cloneNode
\t\t\tfixOne(el);
\t\t\treturn value;
\t\t}
\t};
\tObject.defineProperty(el, 'src', descriptors);
\tObject.defineProperty(el, 'currentSrc', {
\t\tget: function () { return descriptors.get('currentSrc'); }
\t});
\tObject.defineProperty(el, 'srcset', {
\t\tget: function () { return descriptors.get('srcset'); },
\t\tset: function (ss) { return descriptors.set(ss, 'srcset'); }
\t});
}

function hijackAttributes() {
\tfunction getOfiImageMaybe(el, name) {
\t\treturn el[OFI] && el[OFI].img && (name === 'src' || name === 'srcset') ? el[OFI].img : el;
\t}
\tif (!supportsObjectPosition) {
\t\tHTMLImageElement.prototype.getAttribute = function (name) {
\t\t\treturn nativeGetAttribute.call(getOfiImageMaybe(this, name), name);
\t\t};

\t\tHTMLImageElement.prototype.setAttribute = function (name, value) {
\t\t\treturn nativeSetAttribute.call(getOfiImageMaybe(this, name), name, String(value));
\t\t};
\t}
}

function fix(imgs, opts) {
\tvar startAutoMode = !autoModeEnabled && !imgs;
\topts = opts || {};
\timgs = imgs || 'img';

\tif ((supportsObjectPosition && !opts.skipTest) || !supportsOFI) {
\t\treturn false;
\t}

\t// use imgs as a selector or just select all images
\tif (imgs === 'img') {
\t\timgs = document.getElementsByTagName('img');
\t} else if (typeof imgs === 'string') {
\t\timgs = document.querySelectorAll(imgs);
\t} else if (!('length' in imgs)) {
\t\timgs = [imgs];
\t}

\t// apply fix to all
\tfor (var i = 0; i < imgs.length; i++) {
\t\timgs[i][OFI] = imgs[i][OFI] || {
\t\t\tskipTest: opts.skipTest
\t\t};
\t\tfixOne(imgs[i]);
\t}

\tif (startAutoMode) {
\t\tdocument.body.addEventListener('load', function (e) {
\t\t\tif (e.target.tagName === 'IMG') {
\t\t\t\tfix(e.target, {
\t\t\t\t\tskipTest: opts.skipTest
\t\t\t\t});
\t\t\t}
\t\t}, true);
\t\tautoModeEnabled = true;
\t\timgs = 'img'; // reset to a generic selector for watchMQ
\t}

\t// if requested, watch media queries for object-fit change
\tif (opts.watchMQ) {
\t\twindow.addEventListener('resize', fix.bind(null, imgs, {
\t\t\tskipTest: opts.skipTest
\t\t}));
\t}
}

fix.supportsObjectFit = supportsObjectFit;
fix.supportsObjectPosition = supportsObjectPosition;

hijackAttributes();

return fix;

}());
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/mustard/ofi.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*! npm.im/object-fit-images 3.2.4 */
var objectFitImages = (function () {
'use strict';

var OFI = 'bfred-it:object-fit-images';
var propRegex = /(object-fit|object-position)\\s*:\\s*([-.\\w\\s%]+)/g;
var testImg = typeof Image === 'undefined' ? {style: {'object-position': 1}} : new Image();
var supportsObjectFit = 'object-fit' in testImg.style;
var supportsObjectPosition = 'object-position' in testImg.style;
var supportsOFI = 'background-size' in testImg.style;
var supportsCurrentSrc = typeof testImg.currentSrc === 'string';
var nativeGetAttribute = testImg.getAttribute;
var nativeSetAttribute = testImg.setAttribute;
var autoModeEnabled = false;

function createPlaceholder(w, h) {
\treturn (\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='\" + w + \"' height='\" + h + \"'%3E%3C/svg%3E\");
}

function polyfillCurrentSrc(el) {
\tif (el.srcset && !supportsCurrentSrc && window.picturefill) {
\t\tvar pf = window.picturefill._;
\t\t// parse srcset with picturefill where currentSrc isn't available
\t\tif (!el[pf.ns] || !el[pf.ns].evaled) {
\t\t\t// force synchronous srcset parsing
\t\t\tpf.fillImg(el, {reselect: true});
\t\t}

\t\tif (!el[pf.ns].curSrc) {
\t\t\t// force picturefill to parse srcset
\t\t\tel[pf.ns].supported = false;
\t\t\tpf.fillImg(el, {reselect: true});
\t\t}

\t\t// retrieve parsed currentSrc, if any
\t\tel.currentSrc = el[pf.ns].curSrc || el.src;
\t}
}

function getStyle(el) {
\tvar style = getComputedStyle(el).fontFamily;
\tvar parsed;
\tvar props = {};
\twhile ((parsed = propRegex.exec(style)) !== null) {
\t\tprops[parsed[1]] = parsed[2];
\t}
\treturn props;
}

function setPlaceholder(img, width, height) {
\t// Default: fill width, no height
\tvar placeholder = createPlaceholder(width || 1, height || 0);

\t// Only set placeholder if it's different
\tif (nativeGetAttribute.call(img, 'src') !== placeholder) {
\t\tnativeSetAttribute.call(img, 'src', placeholder);
\t}
}

function onImageReady(img, callback) {
\t// naturalWidth is only available when the image headers are loaded,
\t// this loop will poll it every 100ms.
\tif (img.naturalWidth) {
\t\tcallback(img);
\t} else {
\t\tsetTimeout(onImageReady, 100, img, callback);
\t}
}

function fixOne(el) {
\tvar style = getStyle(el);
\tvar ofi = el[OFI];
\tstyle['object-fit'] = style['object-fit'] || 'fill'; // default value

\t// Avoid running where unnecessary, unless OFI had already done its deed
\tif (!ofi.img) {
\t\t// fill is the default behavior so no action is necessary
\t\tif (style['object-fit'] === 'fill') {
\t\t\treturn;
\t\t}

\t\t// Where object-fit is supported and object-position isn't (Safari < 10)
\t\tif (
\t\t\t!ofi.skipTest && // unless user wants to apply regardless of browser support
\t\t\tsupportsObjectFit && // if browser already supports object-fit
\t\t\t!style['object-position'] // unless object-position is used
\t\t) {
\t\t\treturn;
\t\t}
\t}

\t// keep a clone in memory while resetting the original to a blank
\tif (!ofi.img) {
\t\tofi.img = new Image(el.width, el.height);
\t\tofi.img.srcset = nativeGetAttribute.call(el, \"data-ofi-srcset\") || el.srcset;
\t\tofi.img.src = nativeGetAttribute.call(el, \"data-ofi-src\") || el.src;

\t\t// preserve for any future cloneNode calls
\t\t// https://github.com/bfred-it/object-fit-images/issues/53
\t\tnativeSetAttribute.call(el, \"data-ofi-src\", el.src);
\t\tif (el.srcset) {
\t\t\tnativeSetAttribute.call(el, \"data-ofi-srcset\", el.srcset);
\t\t}

\t\tsetPlaceholder(el, el.naturalWidth || el.width, el.naturalHeight || el.height);

\t\t// remove srcset because it overrides src
\t\tif (el.srcset) {
\t\t\tel.srcset = '';
\t\t}
\t\ttry {
\t\t\tkeepSrcUsable(el);
\t\t} catch (err) {
\t\t\tif (window.console) {
\t\t\t\tconsole.warn('https://bit.ly/ofi-old-browser');
\t\t\t}
\t\t}
\t}

\tpolyfillCurrentSrc(ofi.img);

\tel.style.backgroundImage = \"url(\\\"\" + ((ofi.img.currentSrc || ofi.img.src).replace(/\"/g, '\\\\\"')) + \"\\\")\";
\tel.style.backgroundPosition = style['object-position'] || 'center';
\tel.style.backgroundRepeat = 'no-repeat';
\tel.style.backgroundOrigin = 'content-box';

\tif (/scale-down/.test(style['object-fit'])) {
\t\tonImageReady(ofi.img, function () {
\t\t\tif (ofi.img.naturalWidth > el.width || ofi.img.naturalHeight > el.height) {
\t\t\t\tel.style.backgroundSize = 'contain';
\t\t\t} else {
\t\t\t\tel.style.backgroundSize = 'auto';
\t\t\t}
\t\t});
\t} else {
\t\tel.style.backgroundSize = style['object-fit'].replace('none', 'auto').replace('fill', '100% 100%');
\t}

\tonImageReady(ofi.img, function (img) {
\t\tsetPlaceholder(el, img.naturalWidth, img.naturalHeight);
\t});
}

function keepSrcUsable(el) {
\tvar descriptors = {
\t\tget: function get(prop) {
\t\t\treturn el[OFI].img[prop ? prop : 'src'];
\t\t},
\t\tset: function set(value, prop) {
\t\t\tel[OFI].img[prop ? prop : 'src'] = value;
\t\t\tnativeSetAttribute.call(el, (\"data-ofi-\" + prop), value); // preserve for any future cloneNode
\t\t\tfixOne(el);
\t\t\treturn value;
\t\t}
\t};
\tObject.defineProperty(el, 'src', descriptors);
\tObject.defineProperty(el, 'currentSrc', {
\t\tget: function () { return descriptors.get('currentSrc'); }
\t});
\tObject.defineProperty(el, 'srcset', {
\t\tget: function () { return descriptors.get('srcset'); },
\t\tset: function (ss) { return descriptors.set(ss, 'srcset'); }
\t});
}

function hijackAttributes() {
\tfunction getOfiImageMaybe(el, name) {
\t\treturn el[OFI] && el[OFI].img && (name === 'src' || name === 'srcset') ? el[OFI].img : el;
\t}
\tif (!supportsObjectPosition) {
\t\tHTMLImageElement.prototype.getAttribute = function (name) {
\t\t\treturn nativeGetAttribute.call(getOfiImageMaybe(this, name), name);
\t\t};

\t\tHTMLImageElement.prototype.setAttribute = function (name, value) {
\t\t\treturn nativeSetAttribute.call(getOfiImageMaybe(this, name), name, String(value));
\t\t};
\t}
}

function fix(imgs, opts) {
\tvar startAutoMode = !autoModeEnabled && !imgs;
\topts = opts || {};
\timgs = imgs || 'img';

\tif ((supportsObjectPosition && !opts.skipTest) || !supportsOFI) {
\t\treturn false;
\t}

\t// use imgs as a selector or just select all images
\tif (imgs === 'img') {
\t\timgs = document.getElementsByTagName('img');
\t} else if (typeof imgs === 'string') {
\t\timgs = document.querySelectorAll(imgs);
\t} else if (!('length' in imgs)) {
\t\timgs = [imgs];
\t}

\t// apply fix to all
\tfor (var i = 0; i < imgs.length; i++) {
\t\timgs[i][OFI] = imgs[i][OFI] || {
\t\t\tskipTest: opts.skipTest
\t\t};
\t\tfixOne(imgs[i]);
\t}

\tif (startAutoMode) {
\t\tdocument.body.addEventListener('load', function (e) {
\t\t\tif (e.target.tagName === 'IMG') {
\t\t\t\tfix(e.target, {
\t\t\t\t\tskipTest: opts.skipTest
\t\t\t\t});
\t\t\t}
\t\t}, true);
\t\tautoModeEnabled = true;
\t\timgs = 'img'; // reset to a generic selector for watchMQ
\t}

\t// if requested, watch media queries for object-fit change
\tif (opts.watchMQ) {
\t\twindow.addEventListener('resize', fix.bind(null, imgs, {
\t\t\tskipTest: opts.skipTest
\t\t}));
\t}
}

fix.supportsObjectFit = supportsObjectFit;
fix.supportsObjectPosition = supportsObjectPosition;

hijackAttributes();

return fix;

}());
", "wdn/templates_5.0/js/mustard/ofi.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/mustard/ofi.js");
    }
}
