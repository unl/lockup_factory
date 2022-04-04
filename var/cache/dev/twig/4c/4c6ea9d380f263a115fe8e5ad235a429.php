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

/* wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mediaelement-and-player.js.src.js */
class __TwigTemplate_ae0ac3174f5c4e79e93e154675278d44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mediaelement-and-player.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mediaelement-and-player.js.src.js"));

        // line 1
        echo "/*!
 *
 * MediaElement.js
 * HTML5 <video> and <audio> shim and player
 * http://mediaelementjs.com/
 *
 * Creates a JavaScript object that mimics HTML5 MediaElement API
 * for browsers that don't understand HTML5 or can't play the provided codec
 * Can play MP4 (H.264), Ogg, WebM, FLV, WMV, WMA, ACC, and MP3
 *
 * Copyright 2010-2014, John Dyer (http://j.hn)
 * License: MIT
 *
 */

(function(factory) {
\tif (typeof define === 'function' && define.amd) {
\t\t// AMD
\t\tdefine(['jquery'], factory);
\t} else if (typeof module === 'object' && module.exports) {
\t\tfactory(require('jquery'));
\t} else {
\t\t// Browser globals
\t\tfactory(jQuery);
\t}
}(function(jQuery) {
// Namespace
var mejs = mejs || {};

// version number
mejs.version = '2.23.4';


// player number (for missing, same id attr)
mejs.meIndex = 0;

// media types accepted by plugins
mejs.plugins = {
\tsilverlight: [
\t\t{version: [3,0], types: ['video/mp4','video/m4v','video/mov','video/wmv','audio/wma','audio/m4a','audio/mp3','audio/wav','audio/mpeg']}
\t],
\tflash: [
\t\t{version: [9,0,124], types: ['video/mp4','video/m4v','video/mov','video/flv','video/rtmp','video/x-flv','audio/flv','audio/x-flv','audio/mp3','audio/m4a', 'audio/mp4', 'audio/mpeg', 'video/dailymotion', 'video/x-dailymotion', 'application/x-mpegURL', 'audio/ogg']}
\t\t// 'video/youtube', 'video/x-youtube', 
\t\t// ,{version: [12,0], types: ['video/webm']} // for future reference (hopefully!)
\t],
\tyoutube: [
\t\t{version: null, types: ['video/youtube', 'video/x-youtube', 'audio/youtube', 'audio/x-youtube']}
\t],
\tvimeo: [
\t\t{version: null, types: ['video/vimeo', 'video/x-vimeo']}
\t]
};

/*
Utility methods
*/
mejs.Utility = {
\tencodeUrl: function(url) {
\t\treturn encodeURIComponent(url); //.replace(/\\?/gi,'%3F').replace(/=/gi,'%3D').replace(/&/gi,'%26');
\t},
\tescapeHTML: function(s) {
\t\treturn s.toString().split('&').join('&amp;').split('<').join('&lt;').split('\"').join('&quot;');
\t},
\tabsolutizeUrl: function(url) {
\t\tvar el = document.createElement('div');
\t\tel.innerHTML = '<a href=\"' + this.escapeHTML(url) + '\">x</a>';
\t\treturn el.firstChild.href;
\t},
\tgetScriptPath: function(scriptNames) {
\t\tvar
\t\t\ti = 0,
\t\t\tj,
\t\t\tcodePath = '',
\t\t\ttestname = '',
\t\t\tslashPos,
\t\t\tfilenamePos,
\t\t\tscriptUrl,
\t\t\tscriptPath,\t\t\t
\t\t\tscriptFilename,
\t\t\tscripts = document.getElementsByTagName('script'),
\t\t\til = scripts.length,
\t\t\tjl = scriptNames.length;
\t\t\t
\t\t// go through all <script> tags
\t\tfor (; i < il; i++) {
\t\t\tscriptUrl = scripts[i].src;
\t\t\tslashPos = scriptUrl.lastIndexOf('/');
\t\t\tif (slashPos > -1) {
\t\t\t\tscriptFilename = scriptUrl.substring(slashPos + 1);
\t\t\t\tscriptPath = scriptUrl.substring(0, slashPos + 1);
\t\t\t} else {
\t\t\t\tscriptFilename = scriptUrl;
\t\t\t\tscriptPath = '';\t\t\t
\t\t\t}
\t\t\t
\t\t\t// see if any <script> tags have a file name that matches the 
\t\t\tfor (j = 0; j < jl; j++) {
\t\t\t\ttestname = scriptNames[j];
\t\t\t\tfilenamePos = scriptFilename.indexOf(testname);
\t\t\t\tif (filenamePos > -1) {
\t\t\t\t\tcodePath = scriptPath;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t// if we found a path, then break and return it
\t\t\tif (codePath !== '') {
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t\t
\t\t// send the best path back
\t\treturn codePath;
\t},
\t/*
\t * Calculate the time format to use. We have a default format set in the
\t * options but it can be imcomplete. We ajust it according to the media
\t * duration.
\t *
\t * We support format like 'hh:mm:ss:ff'.
\t */
\tcalculateTimeFormat: function(time, options, fps) {
\t\tif (time < 0) {
\t\t\ttime = 0;
\t\t}

\t\tif(typeof fps == 'undefined') {
\t\t    fps = 25;
\t\t}

\t\tvar format = options.timeFormat,
\t\t\tfirstChar = format[0],
\t\t\tfirstTwoPlaces = (format[1] == format[0]),
\t\t\tseparatorIndex = firstTwoPlaces? 2: 1,
\t\t\tseparator = ':',
\t\t\thours = Math.floor(time / 3600) % 24,
\t\t\tminutes = Math.floor(time / 60) % 60,
\t\t\tseconds = Math.floor(time % 60),
\t\t\tframes = Math.floor(((time % 1)*fps).toFixed(3)),
\t\t\tlis = [
\t\t\t\t[frames, 'f'],
\t\t\t\t[seconds, 's'],
\t\t\t\t[minutes, 'm'],
\t\t\t\t[hours, 'h']
\t\t\t];

\t\t// Try to get the separator from the format
\t\tif (format.length < separatorIndex) {
\t\t\tseparator = format[separatorIndex];
\t\t}

\t\tvar required = false;

\t\tfor (var i=0, len=lis.length; i < len; i++) {
\t\t\tif (format.indexOf(lis[i][1]) !== -1) {
\t\t\t\trequired=true;
\t\t\t}
\t\t\telse if (required) {
\t\t\t\tvar hasNextValue = false;
\t\t\t\tfor (var j=i; j < len; j++) {
\t\t\t\t\tif (lis[j][0] > 0) {
\t\t\t\t\t\thasNextValue = true;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (! hasNextValue) {
\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tif (!firstTwoPlaces) {
\t\t\t\t\tformat = firstChar + format;
\t\t\t\t}
\t\t\t\tformat = lis[i][1] + separator + format;
\t\t\t\tif (firstTwoPlaces) {
\t\t\t\t\tformat = lis[i][1] + format;
\t\t\t\t}
\t\t\t\tfirstChar = lis[i][1];
\t\t\t}
\t\t}
\t\toptions.currentTimeFormat = format;
\t},
\t/*
\t * Prefix the given number by zero if it is lower than 10.
\t */
\ttwoDigitsString: function(n) {
\t\tif (n < 10) {
\t\t\treturn '0' + n;
\t\t}
\t\treturn String(n);
\t},
\tsecondsToTimeCode: function(time, options) {
\t\tif (time < 0) {
\t\t\ttime = 0;
\t\t}

\t\t// Maintain backward compatibility with method signature before v2.18.
\t\tif (typeof options !== 'object') {
\t\t\tvar format = 'm:ss';
\t\t\tformat = arguments[1] ? 'hh:mm:ss' : format; // forceHours
\t\t\tformat = arguments[2] ? format + ':ff' : format; // showFrameCount

\t\t\toptions = {
\t\t\t\tcurrentTimeFormat: format,
\t\t\t\tframesPerSecond: arguments[3] || 25
\t\t\t};
\t\t}

\t\tvar fps = options.framesPerSecond;
\t\tif(typeof fps === 'undefined') {
\t\t\tfps = 25;
\t\t}

\t\tvar format = options.currentTimeFormat,
\t\t\thours = Math.floor(time / 3600) % 24,
\t\t\tminutes = Math.floor(time / 60) % 60,
\t\t\tseconds = Math.floor(time % 60),
\t\t\tframes = Math.floor(((time % 1)*fps).toFixed(3));
\t\t\tlis = [
\t\t\t\t[frames, 'f'],
\t\t\t\t[seconds, 's'],
\t\t\t\t[minutes, 'm'],
\t\t\t\t[hours, 'h']
\t\t\t];

\t\tvar res = format;
\t\tfor (i=0,len=lis.length; i < len; i++) {
\t\t\tres = res.replace(lis[i][1]+lis[i][1], this.twoDigitsString(lis[i][0]));
\t\t\tres = res.replace(lis[i][1], lis[i][0]);
\t\t}
\t\treturn res;
\t},
\t
\ttimeCodeToSeconds: function(hh_mm_ss_ff, forceHours, showFrameCount, fps){
\t\tif (typeof showFrameCount == 'undefined') {
\t\t    showFrameCount=false;
\t\t} else if(typeof fps == 'undefined') {
\t\t    fps = 25;
\t\t}
\t
\t\tvar tc_array = hh_mm_ss_ff.split(\":\"),
\t\t\ttc_hh = parseInt(tc_array[0], 10),
\t\t\ttc_mm = parseInt(tc_array[1], 10),
\t\t\ttc_ss = parseInt(tc_array[2], 10),
\t\t\ttc_ff = 0,
\t\t\ttc_in_seconds = 0;
\t\t
\t\tif (showFrameCount) {
\t\t    tc_ff = parseInt(tc_array[3])/fps;
\t\t}
\t\t
\t\ttc_in_seconds = ( tc_hh * 3600 ) + ( tc_mm * 60 ) + tc_ss + tc_ff;
\t\t
\t\treturn tc_in_seconds;
\t},
\t

\tconvertSMPTEtoSeconds: function (SMPTE) {
\t\tif (typeof SMPTE != 'string') 
\t\t\treturn false;

\t\tSMPTE = SMPTE.replace(',', '.');
\t\t
\t\tvar secs = 0,
\t\t\tdecimalLen = (SMPTE.indexOf('.') != -1) ? SMPTE.split('.')[1].length : 0,
\t\t\tmultiplier = 1;
\t\t
\t\tSMPTE = SMPTE.split(':').reverse();
\t\t
\t\tfor (var i = 0; i < SMPTE.length; i++) {
\t\t\tmultiplier = 1;
\t\t\tif (i > 0) {
\t\t\t\tmultiplier = Math.pow(60, i); 
\t\t\t}
\t\t\tsecs += Number(SMPTE[i]) * multiplier;
\t\t}
\t\treturn Number(secs.toFixed(decimalLen));
\t},\t
\t
\t/* borrowed from SWFObject: http://code.google.com/p/swfobject/source/browse/trunk/swfobject/src/swfobject.js#474 */
\tremoveSwf: function(id) {
\t\tvar obj = document.getElementById(id);
\t\tif (obj && /object|embed/i.test(obj.nodeName)) {
\t\t\tif (mejs.MediaFeatures.isIE) {
\t\t\t\tobj.style.display = \"none\";
\t\t\t\t(function(){
\t\t\t\t\tif (obj.readyState == 4) {
\t\t\t\t\t\tmejs.Utility.removeObjectInIE(id);
\t\t\t\t\t} else {
\t\t\t\t\t\tsetTimeout(arguments.callee, 10);
\t\t\t\t\t}
\t\t\t\t})();
\t\t\t} else {
\t\t\t\tobj.parentNode.removeChild(obj);
\t\t\t}
\t\t}
\t},
\tremoveObjectInIE: function(id) {
\t\tvar obj = document.getElementById(id);
\t\tif (obj) {
\t\t\tfor (var i in obj) {
\t\t\t\tif (typeof obj[i] == \"function\") {
\t\t\t\t\tobj[i] = null;
\t\t\t\t}
\t\t\t}
\t\t\tobj.parentNode.removeChild(obj);
\t\t}\t\t
\t},
    determineScheme: function(url) {
        if (url && url.indexOf(\"://\") != -1) {
            return url.substr(0, url.indexOf(\"://\")+3);
        }
        return \"//\"; // let user agent figure this out
    },

\t// taken from underscore
\tdebounce: function(func, wait, immediate) {
\t\tvar timeout;
\t\treturn function() {
\t\t\tvar context = this, args = arguments;
\t\t\tvar later = function() {
\t\t\t\ttimeout = null;
\t\t\t\tif (!immediate) func.apply(context, args);
\t\t\t};
\t\t\tvar callNow = immediate && !timeout;
\t\t\tclearTimeout(timeout);
\t\t\ttimeout = setTimeout(later, wait);
\t\t\tif (callNow) func.apply(context, args);
\t\t};
\t},

\t/**
\t* Returns true if targetNode appears after sourceNode in the dom.
\t* @param {HTMLElement} sourceNode - the source node for comparison
\t* @param {HTMLElement} targetNode - the node to compare against sourceNode
\t*/
\tisNodeAfter: function(sourceNode, targetNode) {
\t\treturn !!(
\t\t\tsourceNode &&
\t\t\ttargetNode &&
\t\t\ttypeof sourceNode.compareDocumentPosition === 'function' &&
\t\t\tsourceNode.compareDocumentPosition(targetNode) & Node.DOCUMENT_POSITION_PRECEDING
\t\t);
\t}
};


// Core detector, plugins are added below
mejs.PluginDetector = {

\t// main public function to test a plug version number PluginDetector.hasPluginVersion('flash',[9,0,125]);
\thasPluginVersion: function(plugin, v) {
\t\tvar pv = this.plugins[plugin];
\t\tv[1] = v[1] || 0;
\t\tv[2] = v[2] || 0;
\t\treturn (pv[0] > v[0] || (pv[0] == v[0] && pv[1] > v[1]) || (pv[0] == v[0] && pv[1] == v[1] && pv[2] >= v[2])) ? true : false;
\t},

\t// cached values
\tnav: window.navigator,
\tua: window.navigator.userAgent.toLowerCase(),

\t// stored version numbers
\tplugins: [],

\t// runs detectPlugin() and stores the version number
\taddPlugin: function(p, pluginName, mimeType, activeX, axDetect) {
\t\tthis.plugins[p] = this.detectPlugin(pluginName, mimeType, activeX, axDetect);
\t},

\t// get the version number from the mimetype (all but IE) or ActiveX (IE)
\tdetectPlugin: function(pluginName, mimeType, activeX, axDetect) {

\t\tvar version = [0,0,0],
\t\t\tdescription,
\t\t\ti,
\t\t\tax;

\t\t// Firefox, Webkit, Opera
\t\tif (typeof(this.nav.plugins) != 'undefined' && typeof this.nav.plugins[pluginName] == 'object') {
\t\t\tdescription = this.nav.plugins[pluginName].description;
\t\t\tif (description && !(typeof this.nav.mimeTypes != 'undefined' && this.nav.mimeTypes[mimeType] && !this.nav.mimeTypes[mimeType].enabledPlugin)) {
\t\t\t\tversion = description.replace(pluginName, '').replace(/^\\s+/,'').replace(/\\sr/gi,'.').split('.');
\t\t\t\tfor (i=0; i<version.length; i++) {
\t\t\t\t\tversion[i] = parseInt(version[i].match(/\\d+/), 10);
\t\t\t\t}
\t\t\t}
\t\t// Internet Explorer / ActiveX
\t\t} else if (typeof(window.ActiveXObject) != 'undefined') {
\t\t\ttry {
\t\t\t\tax = new ActiveXObject(activeX);
\t\t\t\tif (ax) {
\t\t\t\t\tversion = axDetect(ax);
\t\t\t\t}
\t\t\t}
\t\t\tcatch (e) { }
\t\t}
\t\treturn version;
\t}
};

// Add Flash detection
mejs.PluginDetector.addPlugin('flash','Shockwave Flash','application/x-shockwave-flash','ShockwaveFlash.ShockwaveFlash', function(ax) {
\t// adapted from SWFObject
\tvar version = [],
\t\td = ax.GetVariable(\"\$version\");
\tif (d) {
\t\td = d.split(\" \")[1].split(\",\");
\t\tversion = [parseInt(d[0], 10), parseInt(d[1], 10), parseInt(d[2], 10)];
\t}
\treturn version;
});

// Add Silverlight detection
mejs.PluginDetector.addPlugin('silverlight','Silverlight Plug-In','application/x-silverlight-2','AgControl.AgControl', function (ax) {
\t// Silverlight cannot report its version number to IE
\t// but it does have a isVersionSupported function, so we have to loop through it to get a version number.
\t// adapted from http://www.silverlightversion.com/
\tvar v = [0,0,0,0],
\t\tloopMatch = function(ax, v, i, n) {
\t\t\twhile(ax.isVersionSupported(v[0]+ \".\"+ v[1] + \".\" + v[2] + \".\" + v[3])){
\t\t\t\tv[i]+=n;
\t\t\t}
\t\t\tv[i] -= n;
\t\t};
\tloopMatch(ax, v, 0, 1);
\tloopMatch(ax, v, 1, 1);
\tloopMatch(ax, v, 2, 10000); // the third place in the version number is usually 5 digits (4.0.xxxxx)
\tloopMatch(ax, v, 2, 1000);
\tloopMatch(ax, v, 2, 100);
\tloopMatch(ax, v, 2, 10);
\tloopMatch(ax, v, 2, 1);
\tloopMatch(ax, v, 3, 1);

\treturn v;
});
// add adobe acrobat
/*
PluginDetector.addPlugin('acrobat','Adobe Acrobat','application/pdf','AcroPDF.PDF', function (ax) {
\tvar version = [],
\t\td = ax.GetVersions().split(',')[0].split('=')[1].split('.');

\tif (d) {
\t\tversion = [parseInt(d[0], 10), parseInt(d[1], 10), parseInt(d[2], 10)];
\t}
\treturn version;
});
*/
// necessary detection (fixes for <IE9)
mejs.MediaFeatures = {
\tinit: function() {
\t\tvar
\t\t\tt = this,
\t\t\td = document,
\t\t\tnav = mejs.PluginDetector.nav,
\t\t\tua = mejs.PluginDetector.ua.toLowerCase(),
\t\t\ti,
\t\t\tv,
\t\t\thtml5Elements = ['source','track','audio','video'];

\t\t// detect browsers (only the ones that have some kind of quirk we need to work around)
\t\tt.isiPad = (ua.match(/ipad/i) !== null);
\t\tt.isiPhone = (ua.match(/iphone/i) !== null);
\t\tt.isiOS = t.isiPhone || t.isiPad;
\t\tt.isAndroid = (ua.match(/android/i) !== null);
\t\tt.isBustedAndroid = (ua.match(/android 2\\.[12]/) !== null);
\t\tt.isBustedNativeHTTPS = (location.protocol === 'https:' && (ua.match(/android [12]\\./) !== null || ua.match(/macintosh.* version.* safari/) !== null));
\t\tt.isIE = (nav.appName.toLowerCase().indexOf(\"microsoft\") != -1 || nav.appName.toLowerCase().match(/trident/gi) !== null);
\t\tt.isChrome = (ua.match(/chrome/gi) !== null);
\t\tt.isChromium = (ua.match(/chromium/gi) !== null);
\t\tt.isFirefox = (ua.match(/firefox/gi) !== null);
\t\tt.isWebkit = (ua.match(/webkit/gi) !== null);
\t\tt.isGecko = (ua.match(/gecko/gi) !== null) && !t.isWebkit && !t.isIE;
\t\tt.isOpera = (ua.match(/opera/gi) !== null);
\t\tt.hasTouch = ('ontouchstart' in window); //  && window.ontouchstart != null); // this breaks iOS 7

\t\t// Borrowed from `Modernizr.svgasimg`, sources:
\t\t// - https://github.com/Modernizr/Modernizr/issues/687
\t\t// - https://github.com/Modernizr/Modernizr/pull/1209/files
\t\tt.svgAsImg = !!document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Image', '1.1');

\t\t// create HTML5 media elements for IE before 9, get a <video> element for fullscreen detection
\t\tfor (i=0; i<html5Elements.length; i++) {
\t\t\tv = document.createElement(html5Elements[i]);
\t\t}

\t\tt.supportsMediaTag = (typeof v.canPlayType !== 'undefined' || t.isBustedAndroid);

\t\t// Fix for IE9 on Windows 7N / Windows 7KN (Media Player not installer)
\t\ttry{
\t\t\tv.canPlayType(\"video/mp4\");
\t\t}catch(e){
\t\t\tt.supportsMediaTag = false;
\t\t}

\t\tt.supportsPointerEvents = (function() {
\t\t\t// TAKEN FROM MODERNIZR
\t\t\tvar element = document.createElement('x'),
\t\t\t\tdocumentElement = document.documentElement,
\t\t\t\tgetComputedStyle = window.getComputedStyle,
\t\t\t\tsupports;
\t\t\tif(!('pointerEvents' in element.style)){
\t\t\t\treturn false;
\t\t\t}
\t\t\telement.style.pointerEvents = 'auto';
\t\t\telement.style.pointerEvents = 'x';
\t\t\tdocumentElement.appendChild(element);
\t\t\tsupports = getComputedStyle &&
\t\t\t\tgetComputedStyle(element, '').pointerEvents === 'auto';
\t\t\tdocumentElement.removeChild(element);
\t\t\treturn !!supports;
\t\t})();


\t\t // Older versions of Firefox can't move plugins around without it resetting,
\t\tt.hasFirefoxPluginMovingProblem = false;

\t\t// detect native JavaScript fullscreen (Safari/Firefox only, Chrome still fails)

\t\t// iOS
\t\tt.hasiOSFullScreen = (typeof v.webkitEnterFullscreen !== 'undefined');

\t\t// W3C
\t\tt.hasNativeFullscreen = (typeof v.requestFullscreen !== 'undefined');

\t\t// webkit/firefox/IE11+
\t\tt.hasWebkitNativeFullScreen = (typeof v.webkitRequestFullScreen !== 'undefined');
\t\tt.hasMozNativeFullScreen = (typeof v.mozRequestFullScreen !== 'undefined');
\t\tt.hasMsNativeFullScreen = (typeof v.msRequestFullscreen !== 'undefined');

\t\tt.hasTrueNativeFullScreen = (t.hasWebkitNativeFullScreen || t.hasMozNativeFullScreen || t.hasMsNativeFullScreen);
\t\tt.nativeFullScreenEnabled = t.hasTrueNativeFullScreen;

\t\t// Enabled?
\t\tif (t.hasMozNativeFullScreen) {
\t\t\tt.nativeFullScreenEnabled = document.mozFullScreenEnabled;
\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\tt.nativeFullScreenEnabled = document.msFullscreenEnabled;
\t\t}

\t\tif (t.isChrome) {
\t\t\tt.hasiOSFullScreen = false;
\t\t}

\t\tif (t.hasTrueNativeFullScreen) {

\t\t\tt.fullScreenEventName = '';
\t\t\tif (t.hasWebkitNativeFullScreen) {
\t\t\t\tt.fullScreenEventName = 'webkitfullscreenchange';

\t\t\t} else if (t.hasMozNativeFullScreen) {
\t\t\t\tt.fullScreenEventName = 'mozfullscreenchange';

\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\tt.fullScreenEventName = 'MSFullscreenChange';
\t\t\t}

\t\t\tt.isFullScreen = function() {
\t\t\t\tif (t.hasMozNativeFullScreen) {
\t\t\t\t\treturn d.mozFullScreen;

\t\t\t\t} else if (t.hasWebkitNativeFullScreen) {
\t\t\t\t\treturn d.webkitIsFullScreen;

\t\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\t\treturn d.msFullscreenElement !== null;
\t\t\t\t}
\t\t\t}

\t\t\tt.requestFullScreen = function(el) {

\t\t\t\tif (t.hasWebkitNativeFullScreen) {
\t\t\t\t\tel.webkitRequestFullScreen();

\t\t\t\t} else if (t.hasMozNativeFullScreen) {
\t\t\t\t\tel.mozRequestFullScreen();

\t\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\t\tel.msRequestFullscreen();

\t\t\t\t}
\t\t\t}

\t\t\tt.cancelFullScreen = function() {
\t\t\t\tif (t.hasWebkitNativeFullScreen) {
\t\t\t\t\tdocument.webkitCancelFullScreen();

\t\t\t\t} else if (t.hasMozNativeFullScreen) {
\t\t\t\t\tdocument.mozCancelFullScreen();

\t\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\t\tdocument.msExitFullscreen();

\t\t\t\t}
\t\t\t}

\t\t}


\t\t// OS X 10.5 can't do this even if it says it can :(
\t\tif (t.hasiOSFullScreen && ua.match(/mac os x 10_5/i)) {
\t\t\tt.hasNativeFullScreen = false;
\t\t\tt.hasiOSFullScreen = false;
\t\t}

\t}
};
mejs.MediaFeatures.init();

/*
extension methods to <video> or <audio> object to bring it into parity with PluginMediaElement (see below)
*/
mejs.HtmlMediaElement = {
\tpluginType: 'native',
\tisFullScreen: false,

\tsetCurrentTime: function (time) {
\t\tthis.currentTime = time;
\t},

\tsetMuted: function (muted) {
\t\tthis.muted = muted;
\t},

\tsetVolume: function (volume) {
\t\tthis.volume = volume;
\t},

\t// for parity with the plugin versions
\tstop: function () {
\t\tthis.pause();
\t},

\t// This can be a url string
\t// or an array [{src:'file.mp4',type:'video/mp4'},{src:'file.webm',type:'video/webm'}]
\tsetSrc: function (url) {
\t\t
\t\t// Fix for IE9 which can't set .src when there are <source> elements. Awesome, right?
\t\tvar 
\t\t\texistingSources = this.getElementsByTagName('source');
\t\twhile (existingSources.length > 0){
\t\t\tthis.removeChild(existingSources[0]);
\t\t}
\t
\t\tif (typeof url == 'string') {
\t\t\tthis.src = url;
\t\t} else {
\t\t\tvar i, media;

\t\t\tfor (i=0; i<url.length; i++) {
\t\t\t\tmedia = url[i];
\t\t\t\tif (this.canPlayType(media.type)) {
\t\t\t\t\tthis.src = media.src;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tsetVideoSize: function (width, height) {
\t\tthis.width = width;
\t\tthis.height = height;
\t}
};

/*
Mimics the <video/audio> element by calling Flash's External Interface or Silverlights [ScriptableMember]
*/
mejs.PluginMediaElement = function (pluginid, pluginType, mediaUrl) {
\tthis.id = pluginid;
\tthis.pluginType = pluginType;
\tthis.src = mediaUrl;
\tthis.events = {};
\tthis.attributes = {};
};

// JavaScript values and ExternalInterface methods that match HTML5 video properties methods
// http://www.adobe.com/livedocs/flash/9.0/ActionScriptLangRefV3/fl/video/FLVPlayback.html
// http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html
mejs.PluginMediaElement.prototype = {

\t// special
\tpluginElement: null,
\tpluginType: '',
\tisFullScreen: false,

\t// not implemented :(
\tplaybackRate: -1,
\tdefaultPlaybackRate: -1,
\tseekable: [],
\tplayed: [],

\t// HTML5 read-only properties
\tpaused: true,
\tended: false,
\tseeking: false,
\tduration: 0,
\terror: null,
\ttagName: '',

\t// HTML5 get/set properties, but only set (updated by event handlers)
\tmuted: false,
\tvolume: 1,
\tcurrentTime: 0,

\t// HTML5 methods
\tplay: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t\tthis.pluginApi.playVideo();
\t\t\t} else {
\t\t\t\tthis.pluginApi.playMedia();
\t\t\t}
\t\t\tthis.paused = false;
\t\t}
\t},
\tload: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t} else {
\t\t\t\tthis.pluginApi.loadMedia();
\t\t\t}
\t\t\t
\t\t\tthis.paused = false;
\t\t}
\t},
\tpause: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t        if( this.pluginApi.getPlayerState() == 1 ) {
\t\t\t\t    this.pluginApi.pauseVideo();
                }
\t\t\t} else {
\t\t\t\tthis.pluginApi.pauseMedia();
\t\t\t}\t\t\t
\t\t\t
\t\t\t
\t\t\tthis.paused = true;
\t\t}
\t},
\tstop: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t\tthis.pluginApi.stopVideo();
\t\t\t} else {
\t\t\t\tthis.pluginApi.stopMedia();
\t\t\t}\t
\t\t\tthis.paused = true;
\t\t}
\t},
\tcanPlayType: function(type) {
\t\tvar i,
\t\t\tj,
\t\t\tpluginInfo,
\t\t\tpluginVersions = mejs.plugins[this.pluginType];

\t\tfor (i=0; i<pluginVersions.length; i++) {
\t\t\tpluginInfo = pluginVersions[i];

\t\t\t// test if user has the correct plugin version
\t\t\tif (mejs.PluginDetector.hasPluginVersion(this.pluginType, pluginInfo.version)) {

\t\t\t\t// test for plugin playback types
\t\t\t\tfor (j=0; j<pluginInfo.types.length; j++) {
\t\t\t\t\t// find plugin that can play the type
\t\t\t\t\tif (type == pluginInfo.types[j]) {
\t\t\t\t\t\treturn 'probably';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn '';
\t},
\t
\tpositionFullscreenButton: function(x,y,visibleAndAbove) {
\t\tif (this.pluginApi != null && this.pluginApi.positionFullscreenButton) {
\t\t\tthis.pluginApi.positionFullscreenButton(Math.floor(x),Math.floor(y),visibleAndAbove);
\t\t}
\t},
\t
\thideFullscreenButton: function() {
\t\tif (this.pluginApi != null && this.pluginApi.hideFullscreenButton) {
\t\t\tthis.pluginApi.hideFullscreenButton();
\t\t}\t\t
\t},\t
\t

\t// custom methods since not all JavaScript implementations support get/set

\t// This can be a url string
\t// or an array [{src:'file.mp4',type:'video/mp4'},{src:'file.webm',type:'video/webm'}]
\tsetSrc: function (url) {
\t\tif (typeof url == 'string') {
\t\t\tthis.pluginApi.setSrc(mejs.Utility.absolutizeUrl(url));
\t\t\tthis.src = mejs.Utility.absolutizeUrl(url);
\t\t} else {
\t\t\tvar i, media;

\t\t\tfor (i=0; i<url.length; i++) {
\t\t\t\tmedia = url[i];
\t\t\t\tif (this.canPlayType(media.type)) {
\t\t\t\t\tthis.pluginApi.setSrc(mejs.Utility.absolutizeUrl(media.src));
\t\t\t\t\tthis.src = mejs.Utility.absolutizeUrl(media.src);
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t},
\tsetCurrentTime: function (time) {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t\tthis.pluginApi.seekTo(time);
\t\t\t} else {
\t\t\t\tthis.pluginApi.setCurrentTime(time);
\t\t\t}\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\tthis.currentTime = time;
\t\t}
\t},
\tsetVolume: function (volume) {
\t\tif (this.pluginApi != null) {
\t\t\t// same on YouTube and MEjs
\t\t\tif (this.pluginType == 'youtube') {
\t\t\t\tthis.pluginApi.setVolume(volume * 100);
\t\t\t} else {
\t\t\t\tthis.pluginApi.setVolume(volume);
\t\t\t}
\t\t\tthis.volume = volume;
\t\t}
\t},
\tsetMuted: function (muted) {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube') {
\t\t\t\tif (muted) {
\t\t\t\t\tthis.pluginApi.mute();
\t\t\t\t} else {
\t\t\t\t\tthis.pluginApi.unMute();
\t\t\t\t}
\t\t\t\tthis.muted = muted;
\t\t\t\tthis.dispatchEvent({type:'volumechange'});
\t\t\t} else {
\t\t\t\tthis.pluginApi.setMuted(muted);
\t\t\t}
\t\t\tthis.muted = muted;
\t\t}
\t},

\t// additional non-HTML5 methods
\tsetVideoSize: function (width, height) {
\t\t
\t\t//if (this.pluginType == 'flash' || this.pluginType == 'silverlight') {
\t\t\tif (this.pluginElement && this.pluginElement.style) {
\t\t\t\tthis.pluginElement.style.width = width + 'px';
\t\t\t\tthis.pluginElement.style.height = height + 'px';
\t\t\t}
\t\t\tif (this.pluginApi != null && this.pluginApi.setVideoSize) {
\t\t\t\tthis.pluginApi.setVideoSize(width, height);
\t\t\t}
\t\t//}
\t},

\tsetFullscreen: function (fullscreen) {
\t\tif (this.pluginApi != null && this.pluginApi.setFullscreen) {
\t\t\tthis.pluginApi.setFullscreen(fullscreen);
\t\t}
\t},
\t
\tenterFullScreen: function() {
\t\tif (this.pluginApi != null && this.pluginApi.setFullscreen) {
\t\t\tthis.setFullscreen(true);
\t\t}\t\t
\t\t
\t},
\t
\texitFullScreen: function() {
\t\tif (this.pluginApi != null && this.pluginApi.setFullscreen) {
\t\t\tthis.setFullscreen(false);
\t\t}
\t},\t

\t// start: fake events
\taddEventListener: function (eventName, callback, bubble) {
\t\tthis.events[eventName] = this.events[eventName] || [];
\t\tthis.events[eventName].push(callback);
\t},
\tremoveEventListener: function (eventName, callback) {
\t\tif (!eventName) { this.events = {}; return true; }
\t\tvar callbacks = this.events[eventName];
\t\tif (!callbacks) return true;
\t\tif (!callback) { this.events[eventName] = []; return true; }
\t\tfor (var i = 0; i < callbacks.length; i++) {
\t\t\tif (callbacks[i] === callback) {
\t\t\t\tthis.events[eventName].splice(i, 1);
\t\t\t\treturn true;
\t\t\t}
\t\t}
\t\treturn false;
\t},\t
\tdispatchEvent: function (event) {
\t\tvar i,
\t\t\targs,
\t\t\tcallbacks = this.events[event.type];

\t\tif (callbacks) {
\t\t\tfor (i = 0; i < callbacks.length; i++) {
\t\t\t\tcallbacks[i].apply(this, [event]);
\t\t\t}
\t\t}
\t},
\t// end: fake events
\t
\t// fake DOM attribute methods
\thasAttribute: function(name){
\t\treturn (name in this.attributes);  
\t},
\tremoveAttribute: function(name){
\t\tdelete this.attributes[name];
\t},
\tgetAttribute: function(name){
\t\tif (this.hasAttribute(name)) {
\t\t\treturn this.attributes[name];
\t\t}
\t\treturn null;
\t},
\tsetAttribute: function(name, value){
\t\tthis.attributes[name] = value;
\t},

\tremove: function() {
\t\tmejs.Utility.removeSwf(this.pluginElement.id);
\t}
};

/*
Default options
*/
mejs.MediaElementDefaults = {
\t// allows testing on HTML5, flash, silverlight
\t// auto: attempts to detect what the browser can do
\t// auto_plugin: prefer plugins and then attempt native HTML5
\t// native: forces HTML5 playback
\t// shim: disallows HTML5, will attempt either Flash or Silverlight
\t// none: forces fallback view
\tmode: 'auto',
\t// remove or reorder to change plugin priority and availability
\tplugins: ['flash','silverlight','youtube','vimeo'],
\t// shows debug errors on screen
\tenablePluginDebug: false,
\t// use plugin for browsers that have trouble with Basic Authentication on HTTPS sites
\thttpsBasicAuthSite: false,
\t// overrides the type specified, useful for dynamic instantiation
\ttype: '',
\t// path to Flash and Silverlight plugins
\tpluginPath: mejs.Utility.getScriptPath(['mediaelement.js','mediaelement.min.js','mediaelement-and-player.js','mediaelement-and-player.min.js']),
\t// name of flash file
\tflashName: 'flashmediaelement.swf',
\t// streamer for RTMP streaming
\tflashStreamer: '',
\t// set to 'always' for CDN version
\tflashScriptAccess: 'sameDomain',\t
\t// turns on the smoothing filter in Flash
\tenablePluginSmoothing: false,
\t// enabled pseudo-streaming (seek) on .mp4 files
\tenablePseudoStreaming: false,
\t// start query parameter sent to server for pseudo-streaming
\tpseudoStreamingStartQueryParam: 'start',
\t// name of silverlight file
\tsilverlightName: 'silverlightmediaelement.xap',
\t// default if the <video width> is not specified
\tdefaultVideoWidth: 480,
\t// default if the <video height> is not specified
\tdefaultVideoHeight: 270,
\t// overrides <video width>
\tpluginWidth: -1,
\t// overrides <video height>
\tpluginHeight: -1,
\t// additional plugin variables in 'key=value' form
\tpluginVars: [],\t
\t// rate in milliseconds for Flash and Silverlight to fire the timeupdate event
\t// larger number is less accurate, but less strain on plugin->JavaScript bridge
\ttimerRate: 250,
\t// initial volume for player
\tstartVolume: 0.8,
\t// custom error message in case media cannot be played; otherwise, Download File
\t// link will be displayed
\tcustomError: \"\",
\tsuccess: function () { },
\terror: function () { }
};

/*
Determines if a browser supports the <video> or <audio> element
and returns either the native element or a Flash/Silverlight version that
mimics HTML5 MediaElement
*/
mejs.MediaElement = function (el, o) {
\treturn mejs.HtmlMediaElementShim.create(el,o);
};

mejs.HtmlMediaElementShim = {

\tcreate: function(el, o) {
\t\tvar
\t\t\toptions = {},
\t\t\thtmlMediaElement = (typeof(el) == 'string') ? document.getElementById(el) : el,
\t\t\ttagName = htmlMediaElement.tagName.toLowerCase(),
\t\t\tisMediaTag = (tagName === 'audio' || tagName === 'video'),
\t\t\tsrc = (isMediaTag) ? htmlMediaElement.getAttribute('src') : htmlMediaElement.getAttribute('href'),
\t\t\tposter = htmlMediaElement.getAttribute('poster'),
\t\t\tautoplay =  htmlMediaElement.getAttribute('autoplay'),
\t\t\tpreload =  htmlMediaElement.getAttribute('preload'),
\t\t\tcontrols =  htmlMediaElement.getAttribute('controls'),
\t\t\tplayback,
\t\t\tprop;

\t\t// extend options
\t\tfor (prop in mejs.MediaElementDefaults) {
\t\t\toptions[prop] = mejs.MediaElementDefaults[prop];
\t\t}
\t\tfor (prop in o) {
\t\t\toptions[prop] = o[prop];
\t\t}\t\t
\t\t

\t\t// clean up attributes
\t\tsrc = \t\t(typeof src == 'undefined' \t|| src === null || src == '') ? null : src;\t\t
\t\tposter =\t(typeof poster == 'undefined' \t|| poster === null) ? '' : poster;
\t\tpreload = \t(typeof preload == 'undefined' \t|| preload === null || preload === 'false') ? 'none' : preload;
\t\tautoplay = \t!(typeof autoplay == 'undefined' || autoplay === null || autoplay === 'false');
\t\tcontrols = \t!(typeof controls == 'undefined' || controls === null || controls === 'false');

\t\t// test for HTML5 and plugin capabilities
\t\tplayback = this.determinePlayback(htmlMediaElement, options, mejs.MediaFeatures.supportsMediaTag, isMediaTag, src);
\t\tplayback.url = (playback.url !== null) ? mejs.Utility.absolutizeUrl(playback.url) : '';
        \tplayback.scheme = mejs.Utility.determineScheme(playback.url);

\t\tif (playback.method == 'native') {
\t\t\t// second fix for android
\t\t\tif (mejs.MediaFeatures.isBustedAndroid) {
\t\t\t\thtmlMediaElement.src = playback.url;
\t\t\t\thtmlMediaElement.addEventListener('click', function() {
\t\t\t\t\thtmlMediaElement.play();
\t\t\t\t}, false);
\t\t\t}
\t\t
\t\t\t// add methods to native HTMLMediaElement
\t\t\treturn this.updateNative(playback, options, autoplay, preload);
\t\t} else if (playback.method !== '') {
\t\t\t// create plugin to mimic HTMLMediaElement
\t\t\t
\t\t\treturn this.createPlugin( playback,  options, poster, autoplay, preload, controls);
\t\t} else {
\t\t\t// boo, no HTML5, no Flash, no Silverlight.
\t\t\tthis.createErrorMessage( playback, options, poster );
\t\t\t
\t\t\treturn this;
\t\t}
\t},
\t
\tdeterminePlayback: function(htmlMediaElement, options, supportsMediaTag, isMediaTag, src) {
\t\tvar
\t\t\tmediaFiles = [],
\t\t\ti,
\t\t\tj,
\t\t\tk,
\t\t\tl,
\t\t\tn,
\t\t\ttype,
\t\t\tresult = { method: '', url: '', htmlMediaElement: htmlMediaElement, isVideo: (htmlMediaElement.tagName.toLowerCase() !== 'audio'), scheme: ''},
\t\t\tpluginName,
\t\t\tpluginVersions,
\t\t\tpluginInfo,
\t\t\tdummy,
\t\t\tmedia;
\t\t\t
\t\t// STEP 1: Get URL and type from <video src> or <source src>

\t\t// supplied type overrides <video type> and <source type>
\t\tif (typeof options.type != 'undefined' && options.type !== '') {
\t\t\t
\t\t\t// accept either string or array of types
\t\t\tif (typeof options.type == 'string') {
\t\t\t\tmediaFiles.push({type:options.type, url:src});
\t\t\t} else {
\t\t\t\t
\t\t\t\tfor (i=0; i<options.type.length; i++) {
\t\t\t\t\tmediaFiles.push({type:options.type[i], url:src});
\t\t\t\t}
\t\t\t}

\t\t// test for src attribute first
\t\t} else if (src !== null) {
\t\t\ttype = this.formatType(src, htmlMediaElement.getAttribute('type'));
\t\t\tmediaFiles.push({type:type, url:src});

\t\t// then test for <source> elements
\t\t} else {
\t\t\t// test <source> types to see if they are usable
\t\t\tfor (i = 0; i < htmlMediaElement.childNodes.length; i++) {
\t\t\t\tn = htmlMediaElement.childNodes[i];
\t\t\t\tif (n.nodeType == 1 && n.tagName.toLowerCase() == 'source') {
\t\t\t\t\tsrc = n.getAttribute('src');
\t\t\t\t\ttype = this.formatType(src, n.getAttribute('type'));
\t\t\t\t\tmedia = n.getAttribute('media');

\t\t\t\t\tif (!media || !window.matchMedia || (window.matchMedia && window.matchMedia(media).matches)) {
\t\t\t\t\t\tmediaFiles.push({type:type, url:src});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t\t// in the case of dynamicly created players
\t\t// check for audio types
\t\tif (!isMediaTag && mediaFiles.length > 0 && mediaFiles[0].url !== null && this.getTypeFromFile(mediaFiles[0].url).indexOf('audio') > -1) {
\t\t\tresult.isVideo = false;
\t\t}
\t\t

\t\t// STEP 2: Test for playback method
\t\t
\t\t// special case for Android which sadly doesn't implement the canPlayType function (always returns '')
\t\tif (result.isVideo && mejs.MediaFeatures.isBustedAndroid) {
\t\t\thtmlMediaElement.canPlayType = function(type) {
\t\t\t\treturn (type.match(/video\\/(mp4|m4v)/gi) !== null) ? 'maybe' : '';
\t\t\t};
\t\t}\t\t
\t\t
\t\t// special case for Chromium to specify natively supported video codecs (i.e. WebM and Theora) 
\t\tif (result.isVideo && mejs.MediaFeatures.isChromium) {
\t\t\thtmlMediaElement.canPlayType = function(type) { 
\t\t\t\treturn (type.match(/video\\/(webm|ogv|ogg)/gi) !== null) ? 'maybe' : '';
\t\t\t}; 
\t\t}

\t\t// test for native playback first
\t\tif (supportsMediaTag && (options.mode === 'auto' || options.mode === 'auto_plugin' || options.mode === 'native')  && !(mejs.MediaFeatures.isBustedNativeHTTPS && options.httpsBasicAuthSite === true)) {
\t\t\t\t\t\t
\t\t\tif (!isMediaTag) {

\t\t\t\t// create a real HTML5 Media Element 
\t\t\t\tdummy = document.createElement( result.isVideo ? 'video' : 'audio');\t\t\t
\t\t\t\thtmlMediaElement.parentNode.insertBefore(dummy, htmlMediaElement);
\t\t\t\thtmlMediaElement.style.display = 'none';
\t\t\t\t
\t\t\t\t// use this one from now on
\t\t\t\tresult.htmlMediaElement = htmlMediaElement = dummy;
\t\t\t}
\t\t\t\t
\t\t\tfor (i=0; i<mediaFiles.length; i++) {
\t\t\t\t// normal check
\t\t\t\tif (mediaFiles[i].type == \"video/m3u8\" || htmlMediaElement.canPlayType(mediaFiles[i].type).replace(/no/, '') !== ''
\t\t\t\t\t// special case for Mac/Safari 5.0.3 which answers '' to canPlayType('audio/mp3') but 'maybe' to canPlayType('audio/mpeg')
\t\t\t\t\t|| htmlMediaElement.canPlayType(mediaFiles[i].type.replace(/mp3/,'mpeg')).replace(/no/, '') !== ''
\t\t\t\t\t// special case for m4a supported by detecting mp4 support
\t\t\t\t\t|| htmlMediaElement.canPlayType(mediaFiles[i].type.replace(/m4a/,'mp4')).replace(/no/, '') !== '') {
\t\t\t\t\tresult.method = 'native';
\t\t\t\t\tresult.url = mediaFiles[i].url;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}\t\t\t
\t\t\t
\t\t\tif (result.method === 'native') {
\t\t\t\tif (result.url !== null) {
\t\t\t\t\thtmlMediaElement.src = result.url;
\t\t\t\t}
\t\t\t
\t\t\t\t// if `auto_plugin` mode, then cache the native result but try plugins.
\t\t\t\tif (options.mode !== 'auto_plugin') {
\t\t\t\t\treturn result;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// if native playback didn't work, then test plugins
\t\tif (options.mode === 'auto' || options.mode === 'auto_plugin' || options.mode === 'shim') {
\t\t\tfor (i=0; i<mediaFiles.length; i++) {
\t\t\t\ttype = mediaFiles[i].type;

\t\t\t\t// test all plugins in order of preference [silverlight, flash]
\t\t\t\tfor (j=0; j<options.plugins.length; j++) {

\t\t\t\t\tpluginName = options.plugins[j];
\t\t\t
\t\t\t\t\t// test version of plugin (for future features)
\t\t\t\t\tpluginVersions = mejs.plugins[pluginName];\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tfor (k=0; k<pluginVersions.length; k++) {
\t\t\t\t\t\tpluginInfo = pluginVersions[k];
\t\t\t\t\t
\t\t\t\t\t\t// test if user has the correct plugin version
\t\t\t\t\t\t
\t\t\t\t\t\t// for youtube/vimeo
\t\t\t\t\t\tif (pluginInfo.version == null || 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tmejs.PluginDetector.hasPluginVersion(pluginName, pluginInfo.version)) {

\t\t\t\t\t\t\t// test for plugin playback types
\t\t\t\t\t\t\tfor (l=0; l<pluginInfo.types.length; l++) {
\t\t\t\t\t\t\t\t// find plugin that can play the type
\t\t\t\t\t\t\t\tif (type.toLowerCase() == pluginInfo.types[l].toLowerCase()) {
\t\t\t\t\t\t\t\t\tresult.method = pluginName;
\t\t\t\t\t\t\t\t\tresult.url = mediaFiles[i].url;
\t\t\t\t\t\t\t\t\treturn result;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t\t// at this point, being in 'auto_plugin' mode implies that we tried plugins but failed.
\t\t// if we have native support then return that.
\t\tif (options.mode === 'auto_plugin' && result.method === 'native') {
\t\t\treturn result;
\t\t}

\t\t// what if there's nothing to play? just grab the first available
\t\tif (result.method === '' && mediaFiles.length > 0) {
\t\t\tresult.url = mediaFiles[0].url;
\t\t}

\t\treturn result;
\t},

\tformatType: function(url, type) {
\t\t// if no type is supplied, fake it with the extension
\t\tif (url && !type) {\t\t
\t\t\treturn this.getTypeFromFile(url);
\t\t} else {
\t\t\t// only return the mime part of the type in case the attribute contains the codec
\t\t\t// see http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html#the-source-element
\t\t\t// `video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"` becomes `video/mp4`
\t\t\t
\t\t\tif (type && ~type.indexOf(';')) {
\t\t\t\treturn type.substr(0, type.indexOf(';')); 
\t\t\t} else {
\t\t\t\treturn type;
\t\t\t}
\t\t}
\t},
\t
\tgetTypeFromFile: function(url) {
\t\turl = url.split('?')[0];
\t\tvar
\t\t\text = url.substring(url.lastIndexOf('.') + 1).toLowerCase(),
\t\t\tav = /(mp4|m4v|ogg|ogv|m3u8|webm|webmv|flv|wmv|mpeg|mov)/gi.test(ext) ? 'video/' : 'audio/';
\t\treturn this.getTypeFromExtension(ext, av);
\t},
\t
\tgetTypeFromExtension: function(ext, av) {
\t\tav = av || '';
\t\t
\t\tswitch (ext) {
\t\t\tcase 'mp4':
\t\t\tcase 'm4v':
\t\t\tcase 'm4a':
\t\t\tcase 'f4v':
\t\t\tcase 'f4a':
\t\t\t\treturn av + 'mp4';
\t\t\tcase 'flv':
\t\t\t\treturn av + 'x-flv';
\t\t\tcase 'webm':
\t\t\tcase 'webma':
\t\t\tcase 'webmv':\t
\t\t\t\treturn av + 'webm';
\t\t\tcase 'ogg':
\t\t\tcase 'oga':
\t\t\tcase 'ogv':\t
\t\t\t\treturn av + 'ogg';
\t\t\tcase 'm3u8':
\t\t\t\treturn 'application/x-mpegurl';
\t\t\tcase 'ts':
\t\t\t\treturn av + 'mp2t';
\t\t\tdefault:
\t\t\t\treturn av + ext;
\t\t}
\t},

\tcreateErrorMessage: function(playback, options, poster) {
\t\tvar 
\t\t\thtmlMediaElement = playback.htmlMediaElement,
\t\t\terrorContainer = document.createElement('div'),
\t\t\terrorContent = options.customError;
\t\t\t
\t\terrorContainer.className = 'me-cannotplay';

\t\ttry {
\t\t\terrorContainer.style.width = htmlMediaElement.width + 'px';
\t\t\terrorContainer.style.height = htmlMediaElement.height + 'px';
\t\t} catch (e) {}

\t\tif (!errorContent) {
\t\t\terrorContent = '<a href=\"' + playback.url + '\">';

\t\t\tif (poster !== '') {
\t\t\t\terrorContent += '<img src=\"' + poster + '\" width=\"100%\" height=\"100%\" alt=\"\" />';
\t\t\t}

\t\t\terrorContent += '<span>' + mejs.i18n.t('mejs.download-file') + '</span></a>';
\t\t}

\t\terrorContainer.innerHTML = errorContent;

\t\thtmlMediaElement.parentNode.insertBefore(errorContainer, htmlMediaElement);
\t\thtmlMediaElement.style.display = 'none';

\t\toptions.error(htmlMediaElement);
\t},

\tcreatePlugin:function(playback, options, poster, autoplay, preload, controls) {
\t\tvar 
\t\t\thtmlMediaElement = playback.htmlMediaElement,
\t\t\twidth = 1,
\t\t\theight = 1,
\t\t\tpluginid = 'me_' + playback.method + '_' + (mejs.meIndex++),
\t\t\tpluginMediaElement = new mejs.PluginMediaElement(pluginid, playback.method, playback.url),
\t\t\tcontainer = document.createElement('div'),
\t\t\tspecialIEContainer,
\t\t\tnode,
\t\t\tinitVars;

\t\t// copy tagName from html media element
\t\tpluginMediaElement.tagName = htmlMediaElement.tagName;

\t\t// copy attributes from html media element to plugin media element
\t\tfor (var i = 0; i < htmlMediaElement.attributes.length; i++) {
\t\t\tvar attribute = htmlMediaElement.attributes[i];
\t\t\tif (attribute.specified) {
\t\t\t\tpluginMediaElement.setAttribute(attribute.name, attribute.value);
\t\t\t}
\t\t}

\t\t// check for placement inside a <p> tag (sometimes WYSIWYG editors do this)
\t\tnode = htmlMediaElement.parentNode;

\t\twhile (node !== null && node.tagName != null && node.tagName.toLowerCase() !== 'body' && 
\t\t\t\tnode.parentNode != null && node.parentNode.tagName != null && node.parentNode.constructor != null && node.parentNode.constructor.name === \"ShadowRoot\") {
\t\t\tif (node.parentNode.tagName.toLowerCase() === 'p') {
\t\t\t\tnode.parentNode.parentNode.insertBefore(node, node.parentNode);
\t\t\t\tbreak;
\t\t\t}
\t\t\tnode = node.parentNode;
\t\t}

\t\tif (playback.isVideo) {
\t\t\twidth = (options.pluginWidth > 0) ? options.pluginWidth : (options.videoWidth > 0) ? options.videoWidth : (htmlMediaElement.getAttribute('width') !== null) ? htmlMediaElement.getAttribute('width') : options.defaultVideoWidth;
\t\t\theight = (options.pluginHeight > 0) ? options.pluginHeight : (options.videoHeight > 0) ? options.videoHeight : (htmlMediaElement.getAttribute('height') !== null) ? htmlMediaElement.getAttribute('height') : options.defaultVideoHeight;
\t\t
\t\t\t// in case of '%' make sure it's encoded
\t\t\twidth = mejs.Utility.encodeUrl(width);
\t\t\theight = mejs.Utility.encodeUrl(height);
\t\t
\t\t} else {
\t\t\tif (options.enablePluginDebug) {
\t\t\t\twidth = 320;
\t\t\t\theight = 240;
\t\t\t}
\t\t}

\t\t// register plugin
\t\tpluginMediaElement.success = options.success;
\t\t
\t\t// add container (must be added to DOM before inserting HTML for IE)
\t\tcontainer.className = 'me-plugin';
\t\tcontainer.id = pluginid + '_container';
\t\t
\t\tif (playback.isVideo) {
\t\t\t\thtmlMediaElement.parentNode.insertBefore(container, htmlMediaElement);
\t\t} else {
\t\t\t\tdocument.body.insertBefore(container, document.body.childNodes[0]);
\t\t}
\t\t
\t\tif (playback.method === 'flash' || playback.method === 'silverlight') {

\t\t\tvar canPlayVideo = htmlMediaElement.getAttribute('type') === 'audio/mp4',
\t\t\t\tchildrenSources = htmlMediaElement.getElementsByTagName('source');

\t\t\tif (childrenSources && !canPlayVideo) {
\t\t\t\tfor (var i = 0, total = childrenSources.length; i < total; i++) {
\t\t\t\t\tif (childrenSources[i].getAttribute('type') === 'audio/mp4') {
\t\t\t\t\t\tcanPlayVideo = true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// flash/silverlight vars
\t\t\tinitVars = [
\t\t\t\t'id=' + pluginid,
\t\t\t\t'isvideo=' + ((playback.isVideo || canPlayVideo) ? \"true\" : \"false\"),
\t\t\t\t'autoplay=' + ((autoplay) ? \"true\" : \"false\"),
\t\t\t\t'preload=' + preload,
\t\t\t\t'width=' + width,
\t\t\t\t'startvolume=' + options.startVolume,
\t\t\t\t'timerrate=' + options.timerRate,
\t\t\t\t'flashstreamer=' + options.flashStreamer,
\t\t\t\t'height=' + height,
\t\t\t\t'pseudostreamstart=' + options.pseudoStreamingStartQueryParam];
\t
\t\t\tif (playback.url !== null) {
\t\t\t\tif (playback.method == 'flash') {
\t\t\t\t\tinitVars.push('file=' + mejs.Utility.encodeUrl(playback.url));
\t\t\t\t} else {
\t\t\t\t\tinitVars.push('file=' + playback.url);
\t\t\t\t}
\t\t\t}
\t\t\tif (options.enablePluginDebug) {
\t\t\t\tinitVars.push('debug=true');
\t\t\t}
\t\t\tif (options.enablePluginSmoothing) {
\t\t\t\tinitVars.push('smoothing=true');
\t\t\t}
\t\t\tif (options.enablePseudoStreaming) {
\t\t\t\tinitVars.push('pseudostreaming=true');
\t\t\t}
\t\t\tif (controls) {
\t\t\t\tinitVars.push('controls=true'); // shows controls in the plugin if desired
\t\t\t}
\t\t\tif (options.pluginVars) {
\t\t\t\tinitVars = initVars.concat(options.pluginVars);
\t\t\t}\t\t
\t\t\t
\t\t\t// call from plugin
\t\t\twindow[pluginid + '_init'] = function() {
\t\t\t\tswitch (pluginMediaElement.pluginType) {
\t\t\t\t\tcase 'flash':
\t\t\t\t\t\tpluginMediaElement.pluginElement = pluginMediaElement.pluginApi = document.getElementById(pluginid);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'silverlight':
\t\t\t\t\t\tpluginMediaElement.pluginElement = document.getElementById(pluginMediaElement.id);
\t\t\t\t\t\tpluginMediaElement.pluginApi = pluginMediaElement.pluginElement.Content.MediaElementJS;
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t
\t\t\t\tif (pluginMediaElement.pluginApi != null && pluginMediaElement.success) {
\t\t\t\t\tpluginMediaElement.success(pluginMediaElement, htmlMediaElement);
\t\t\t\t}
\t\t\t};
\t\t\t
\t\t\t// event call from plugin
\t\t\twindow[pluginid + '_event'] = function(eventName, values) {
\t\t
\t\t\t\tvar
\t\t\t\t\te,
\t\t\t\t\ti,
\t\t\t\t\tbufferedTime;
\t\t        
\t\t\t\t// fake event object to mimic real HTML media event.
\t\t\t\te = {
\t\t\t\t\ttype: eventName,
\t\t\t\t\ttarget: pluginMediaElement
\t\t\t\t};
\t\t
\t\t\t\t// attach all values to element and event object
\t\t\t\tfor (i in values) {
\t\t\t\t\tpluginMediaElement[i] = values[i];
\t\t\t\t\te[i] = values[i];
\t\t\t\t}
\t\t
\t\t\t\t// fake the newer W3C buffered TimeRange (loaded and total have been removed)
\t\t\t\tbufferedTime = values.bufferedTime || 0;
\t\t
\t\t\t\te.target.buffered = e.buffered = {
\t\t\t\t\tstart: function(index) {
\t\t\t\t\t\treturn 0;
\t\t\t\t\t},
\t\t\t\t\tend: function (index) {
\t\t\t\t\t\treturn bufferedTime;
\t\t\t\t\t},
\t\t\t\t\tlength: 1
\t\t\t\t};
\t\t
\t\t\t\tpluginMediaElement.dispatchEvent(e);
\t\t\t}\t\t\t
\t\t\t
\t\t\t
\t\t}

\t\tswitch (playback.method) {
\t\t\tcase 'silverlight':
\t\t\t\tcontainer.innerHTML =
'<object data=\"data:application/x-silverlight-2,\" type=\"application/x-silverlight-2\" id=\"' + pluginid + '\" name=\"' + pluginid + '\" width=\"' + width + '\" height=\"' + height + '\" class=\"mejs-shim\">' +
'<param name=\"initParams\" value=\"' + initVars.join(',') + '\" />' +
'<param name=\"windowless\" value=\"true\" />' +
'<param name=\"background\" value=\"black\" />' +
'<param name=\"minRuntimeVersion\" value=\"3.0.0.0\" />' +
'<param name=\"autoUpgrade\" value=\"true\" />' +
'<param name=\"source\" value=\"' + options.pluginPath + options.silverlightName + '\" />' +
'</object>';
\t\t\t\t\tbreak;

\t\t\tcase 'flash':

\t\t\t\tif (mejs.MediaFeatures.isIE) {
\t\t\t\t\tspecialIEContainer = document.createElement('div');
\t\t\t\t\tcontainer.appendChild(specialIEContainer);
\t\t\t\t\tspecialIEContainer.outerHTML =
'<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab\" ' +
'id=\"' + pluginid + '\" width=\"' + width + '\" height=\"' + height + '\" class=\"mejs-shim\">' +
'<param name=\"movie\" value=\"' + options.pluginPath + options.flashName + '?' + (new Date().getTime()) + '\" />' +
'<param name=\"flashvars\" value=\"' + initVars.join('&amp;') + '\" />' +
'<param name=\"quality\" value=\"high\" />' +
'<param name=\"bgcolor\" value=\"#000000\" />' +
'<param name=\"wmode\" value=\"transparent\" />' +
'<param name=\"allowScriptAccess\" value=\"' + options.flashScriptAccess + '\" />' +
'<param name=\"allowFullScreen\" value=\"true\" />' +
'<param name=\"scale\" value=\"default\" />' + 
'</object>';

\t\t\t\t} else {

\t\t\t\t\tcontainer.innerHTML =
'<embed id=\"' + pluginid + '\" name=\"' + pluginid + '\" ' +
'play=\"true\" ' +
'loop=\"false\" ' +
'quality=\"high\" ' +
'bgcolor=\"#000000\" ' +
'wmode=\"transparent\" ' +
'allowScriptAccess=\"' + options.flashScriptAccess + '\" ' +
'allowFullScreen=\"true\" ' +
'type=\"application/x-shockwave-flash\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" ' +
'src=\"' + options.pluginPath + options.flashName + '\" ' +
'flashvars=\"' + initVars.join('&') + '\" ' +
'width=\"' + width + '\" ' +
'height=\"' + height + '\" ' +
'scale=\"default\"' + 
'class=\"mejs-shim\"></embed>';
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t
\t\t\tcase 'youtube':
\t\t\t
\t\t\t\t
\t\t\t\tvar videoId;
\t\t\t\t// youtu.be url from share button
\t\t\t\tif (playback.url.lastIndexOf(\"youtu.be\") != -1) {
\t\t\t\t\tvideoId = playback.url.substr(playback.url.lastIndexOf('/')+1);
\t\t\t\t\tif (videoId.indexOf('?') != -1) {
\t\t\t\t\t\tvideoId = videoId.substr(0, videoId.indexOf('?'));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t// https://www.youtube.com/watch?v=
\t\t\t\t\tvar videoIdMatch = playback.url.match( /[?&]v=([^&#]+)|&|#|\$/ );
\t\t\t\t\tif ( videoIdMatch ) {
\t\t\t\t\t\tvideoId = videoIdMatch[1];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tyoutubeSettings = {
\t\t\t\t\t\tcontainer: container,
\t\t\t\t\t\tcontainerId: container.id,
\t\t\t\t\t\tpluginMediaElement: pluginMediaElement,
\t\t\t\t\t\tpluginId: pluginid,
\t\t\t\t\t\tvideoId: videoId,
\t\t\t\t\t\theight: height,
\t\t\t\t\t\twidth: width,
                        scheme: playback.scheme,
\t\t\t\t\t\tvariables: options.youtubeIframeVars
\t\t\t\t\t};\t\t\t\t
\t\t\t\t
\t\t\t\t// favor iframe version of YouTube
\t\t\t\tif (window.postMessage) {
\t\t\t\t\tmejs.YouTubeApi.enqueueIframe(youtubeSettings);\t\t
\t\t\t\t} else if (mejs.PluginDetector.hasPluginVersion('flash', [10,0,0]) ) {
\t\t\t\t\tmejs.YouTubeApi.createFlash(youtubeSettings, options);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t
\t\t\t// DEMO Code. Does NOT work.
\t\t\tcase 'vimeo':
\t\t\t\tvar player_id = pluginid + \"_player\";
\t\t\t\tpluginMediaElement.vimeoid = playback.url.substr(playback.url.lastIndexOf('/')+1);
\t\t\t\t
\t\t\t\tcontainer.innerHTML ='<iframe src=\"' + playback.scheme + 'player.vimeo.com/video/' + pluginMediaElement.vimeoid + '?api=1&portrait=0&byline=0&title=0&player_id=' + player_id + '\" width=\"' + width +'\" height=\"' + height +'\" frameborder=\"0\" class=\"mejs-shim\" id=\"' + player_id + '\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
\t\t\t\tif (typeof(\$f) == 'function') { // froogaloop available
\t\t\t\t\tvar player = \$f(container.childNodes[0]),
\t\t\t\t\t\tplayerState = -1;
\t\t\t\t\t
\t\t\t\t\tplayer.addEvent('ready', function() {
\t\t
\t\t\t\t\t\tplayer.playVideo = function() {
\t\t\t\t\t\t\tplayer.api( 'play' );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.stopVideo = function() {
\t\t\t\t\t\t\tplayer.api( 'unload' );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.pauseVideo = function() {
\t\t\t\t\t\t\tplayer.api( 'pause' );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.seekTo = function( seconds ) {
\t\t\t\t\t\t\tplayer.api( 'seekTo', seconds );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.setVolume = function( volume ) {
\t\t\t\t\t\t\tplayer.api( 'setVolume', volume );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.setMuted = function( muted ) {
\t\t\t\t\t\t\tif( muted ) {
\t\t\t\t\t\t\t\tplayer.lastVolume = player.api( 'getVolume' );
\t\t\t\t\t\t\t\tplayer.api( 'setVolume', 0 );
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tplayer.api( 'setVolume', player.lastVolume );
\t\t\t\t\t\t\t\tdelete player.lastVolume;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t\t// parity with YT player
\t\t\t\t\t\tplayer.getPlayerState = function() {
\t\t\t\t\t\t\treturn playerState;
\t\t\t\t\t\t};

\t\t\t\t\t\tfunction createEvent(player, pluginMediaElement, eventName, e) {
\t\t\t\t\t\t\tvar event = {
\t\t\t\t\t\t\t\ttype: eventName,
\t\t\t\t\t\t\t\ttarget: pluginMediaElement
\t\t\t\t\t\t\t};
\t\t\t\t\t\t\tif (eventName == 'timeupdate') {
\t\t\t\t\t\t\t\tpluginMediaElement.currentTime = event.currentTime = e.seconds;
\t\t\t\t\t\t\t\tpluginMediaElement.duration = event.duration = e.duration;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tpluginMediaElement.dispatchEvent(event);
\t\t\t\t\t\t}

\t\t\t\t\t\tplayer.addEvent('play', function() {
\t\t\t\t\t\t\tplayerState = 1;
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'play');
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'playing');
\t\t\t\t\t\t});

\t\t\t\t\t\tplayer.addEvent('pause', function() {
\t\t\t\t\t\t\tplayerState = 2;\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'pause');
\t\t\t\t\t\t});

\t\t\t\t\t\tplayer.addEvent('finish', function() {
\t\t\t\t\t\t\tplayerState = 0;\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'ended');
\t\t\t\t\t\t});

\t\t\t\t\t\tplayer.addEvent('playProgress', function(e) {
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'timeupdate', e);
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\tplayer.addEvent('seek', function(e) {
\t\t\t\t\t\t\tplayerState = 3;
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'seeked', e);
\t\t\t\t\t\t});\t
\t\t\t\t\t\t
\t\t\t\t\t\tplayer.addEvent('loadProgress', function(e) {
\t\t\t\t\t\t\tplayerState = 3;
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'progress', e);
\t\t\t\t\t\t});\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\tpluginMediaElement.pluginElement = container;
\t\t\t\t\t\tpluginMediaElement.pluginApi = player;

\t\t\t\t\t\tpluginMediaElement.success(pluginMediaElement, pluginMediaElement.pluginElement);\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tconsole.warn(\"You need to include froogaloop for vimeo to work\");
\t\t\t\t}
\t\t\t\tbreak;\t\t\t
\t\t}
\t\t// hide original element
\t\thtmlMediaElement.style.display = 'none';
\t\t// prevent browser from autoplaying when using a plugin
\t\thtmlMediaElement.removeAttribute('autoplay');
\t\t
\t\treturn pluginMediaElement;
\t},

\tupdateNative: function(playback, options, autoplay, preload) {
\t\t
\t\tvar htmlMediaElement = playback.htmlMediaElement,
\t\t\tm;
\t\t
\t\t
\t\t// add methods to video object to bring it into parity with Flash Object
\t\tfor (m in mejs.HtmlMediaElement) {
\t\t\thtmlMediaElement[m] = mejs.HtmlMediaElement[m];
\t\t}

\t\t/*
\t\tChrome now supports preload=\"none\"
\t\tif (mejs.MediaFeatures.isChrome) {
\t\t
\t\t\t// special case to enforce preload attribute (Chrome doesn't respect this)
\t\t\tif (preload === 'none' && !autoplay) {
\t\t\t
\t\t\t\t// forces the browser to stop loading (note: fails in IE9)
\t\t\t\thtmlMediaElement.src = '';
\t\t\t\thtmlMediaElement.load();
\t\t\t\thtmlMediaElement.canceledPreload = true;

\t\t\t\thtmlMediaElement.addEventListener('play',function() {
\t\t\t\t\tif (htmlMediaElement.canceledPreload) {
\t\t\t\t\t\thtmlMediaElement.src = playback.url;
\t\t\t\t\t\thtmlMediaElement.load();
\t\t\t\t\t\thtmlMediaElement.play();
\t\t\t\t\t\thtmlMediaElement.canceledPreload = false;
\t\t\t\t\t}
\t\t\t\t}, false);
\t\t\t// for some reason Chrome forgets how to autoplay sometimes.
\t\t\t} else if (autoplay) {
\t\t\t\thtmlMediaElement.load();
\t\t\t\thtmlMediaElement.play();
\t\t\t}
\t\t}
\t\t*/

\t\t// fire success code
\t\toptions.success(htmlMediaElement, htmlMediaElement);
\t\t
\t\treturn htmlMediaElement;
\t}
};

/*
 - test on IE (object vs. embed)
 - determine when to use iframe (Firefox, Safari, Mobile) vs. Flash (Chrome, IE)
 - fullscreen?
*/

// YouTube Flash and Iframe API
mejs.YouTubeApi = {
\tisIframeStarted: false,
\tisIframeLoaded: false,
\tloadIframeApi: function(yt) {
\t\tif (!this.isIframeStarted) {
\t\t\tvar tag = document.createElement('script');
\t\t\ttag.src = yt.scheme + \"www.youtube.com/player_api\";
\t\t\tvar firstScriptTag = document.getElementsByTagName('script')[0];
\t\t\tfirstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
\t\t\tthis.isIframeStarted = true;
\t\t}
\t},
\tiframeQueue: [],
\tenqueueIframe: function(yt) {
\t\t
\t\tif (this.isLoaded) {
\t\t\tthis.createIframe(yt);
\t\t} else {
\t\t\tthis.loadIframeApi(yt);
\t\t\tthis.iframeQueue.push(yt);
\t\t}
\t},
\tcreateIframe: function(settings) {

\t\tvar
\t\tpluginMediaElement = settings.pluginMediaElement,
\t\tdefaultVars = {controls:0, wmode:'transparent'},
\t\tplayer = new YT.Player(settings.containerId, {
\t\t\theight: settings.height,
\t\t\twidth: settings.width,
\t\t\tvideoId: settings.videoId,
\t\t\tplayerVars: mejs.\$.extend({}, defaultVars, settings.variables),
\t\t\tevents: {
\t\t\t\t'onReady': function(e) {
\t\t\t\t\t
\t\t\t\t\t// wrapper to match
\t\t\t\t\tplayer.setVideoSize = function(width, height) {
\t\t\t\t\t\tplayer.setSize(width, height);
\t\t\t\t\t};
\t\t\t\t\t
\t\t\t\t\t// hook up iframe object to MEjs
\t\t\t\t\tsettings.pluginMediaElement.pluginApi = player;
\t\t\t\t\tsettings.pluginMediaElement.pluginElement = document.getElementById(settings.containerId);
\t\t\t\t\t
\t\t\t\t\t// init mejs
\t\t\t\t\tpluginMediaElement.success(pluginMediaElement, pluginMediaElement.pluginElement);

\t\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'canplay');
\t\t\t\t\t
\t\t\t\t\t// create timer
\t\t\t\t\tsetInterval(function() {
\t\t\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'timeupdate');
\t\t\t\t\t}, 250);

\t\t\t\t\tif (typeof pluginMediaElement.attributes.autoplay !== 'undefined') {
\t\t\t\t\t\tplayer.playVideo();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t'onStateChange': function(e) {
\t\t\t\t\t
\t\t\t\t\tmejs.YouTubeApi.handleStateChange(e.data, player, pluginMediaElement);
\t\t\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});
\t},
\t
\tcreateEvent: function (player, pluginMediaElement, eventName) {
\t\tvar event = {
\t\t\ttype: eventName,
\t\t\ttarget: pluginMediaElement
\t\t};

\t\tif (player && player.getDuration) {
\t\t\t
\t\t\t// time 
\t\t\tpluginMediaElement.currentTime = event.currentTime = player.getCurrentTime();
\t\t\tpluginMediaElement.duration = event.duration = player.getDuration();
\t\t\t
\t\t\t// state
\t\t\tevent.paused = pluginMediaElement.paused;
\t\t\tevent.ended = pluginMediaElement.ended;\t\t\t
\t\t\t
\t\t\t// sound
\t\t\tevent.muted = player.isMuted();
\t\t\tevent.volume = player.getVolume() / 100;
\t\t\t
\t\t\t// progress
\t\t\tevent.bytesTotal = player.getVideoBytesTotal();
\t\t\tevent.bufferedBytes = player.getVideoBytesLoaded();
\t\t\t
\t\t\t// fake the W3C buffered TimeRange
\t\t\tvar bufferedTime = event.bufferedBytes / event.bytesTotal * event.duration;
\t\t\t
\t\t\tevent.target.buffered = event.buffered = {
\t\t\t\tstart: function(index) {
\t\t\t\t\treturn 0;
\t\t\t\t},
\t\t\t\tend: function (index) {
\t\t\t\t\treturn bufferedTime;
\t\t\t\t},
\t\t\t\tlength: 1
\t\t\t};

\t\t}
\t\t
\t\t// send event up the chain
\t\tpluginMediaElement.dispatchEvent(event);
\t},\t
\t
\tiFrameReady: function() {
\t\t
\t\tthis.isLoaded = true;
\t\tthis.isIframeLoaded = true;
\t\t
\t\twhile (this.iframeQueue.length > 0) {
\t\t\tvar settings = this.iframeQueue.pop();
\t\t\tthis.createIframe(settings);
\t\t}\t
\t},
\t
\t// FLASH!
\tflashPlayers: {},
\tcreateFlash: function(settings) {
\t\t
\t\tthis.flashPlayers[settings.pluginId] = settings;
\t\t
\t\t/*
\t\tsettings.container.innerHTML =
\t\t\t'<object type=\"application/x-shockwave-flash\" id=\"' + settings.pluginId + '\" data=\"' + settings.scheme + 'www.youtube.com/apiplayer?enablejsapi=1&amp;playerapiid=' + settings.pluginId  + '&amp;version=3&amp;autoplay=0&amp;controls=0&amp;modestbranding=1&loop=0\" ' +
\t\t\t\t'width=\"' + settings.width + '\" height=\"' + settings.height + '\" style=\"visibility: visible; \" class=\"mejs-shim\">' +
\t\t\t\t'<param name=\"allowScriptAccess\" value=\"sameDomain\">' +
\t\t\t\t'<param name=\"wmode\" value=\"transparent\">' +
\t\t\t'</object>';
\t\t*/

\t\tvar specialIEContainer,
\t\t\tyoutubeUrl = settings.scheme + 'www.youtube.com/apiplayer?enablejsapi=1&amp;playerapiid=' + settings.pluginId  + '&amp;version=3&amp;autoplay=0&amp;controls=0&amp;modestbranding=1&loop=0';
\t\t\t
\t\tif (mejs.MediaFeatures.isIE) {
\t\t\t
\t\t\tspecialIEContainer = document.createElement('div');
\t\t\tsettings.container.appendChild(specialIEContainer);
\t\t\tspecialIEContainer.outerHTML = '<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"' + settings.scheme + 'download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab\" ' +
'id=\"' + settings.pluginId + '\" width=\"' + settings.width + '\" height=\"' + settings.height + '\" class=\"mejs-shim\">' +
\t'<param name=\"movie\" value=\"' + youtubeUrl + '\" />' +
\t'<param name=\"wmode\" value=\"transparent\" />' +
\t'<param name=\"allowScriptAccess\" value=\"' + options.flashScriptAccess + '\" />' +
\t'<param name=\"allowFullScreen\" value=\"true\" />' +
'</object>';
\t\t} else {
\t\tsettings.container.innerHTML =
\t\t\t'<object type=\"application/x-shockwave-flash\" id=\"' + settings.pluginId + '\" data=\"' + youtubeUrl + '\" ' +
\t\t\t\t'width=\"' + settings.width + '\" height=\"' + settings.height + '\" style=\"visibility: visible; \" class=\"mejs-shim\">' +
\t\t\t\t'<param name=\"allowScriptAccess\" value=\"' + options.flashScriptAccess + '\">' +
\t\t\t\t'<param name=\"wmode\" value=\"transparent\">' +
\t\t\t'</object>';
\t\t}\t\t
\t\t
\t},
\t
\tflashReady: function(id) {
\t\tvar
\t\t\tsettings = this.flashPlayers[id],
\t\t\tplayer = document.getElementById(id),
\t\t\tpluginMediaElement = settings.pluginMediaElement;
\t\t
\t\t// hook up and return to MediaELementPlayer.success\t
\t\tpluginMediaElement.pluginApi = 
\t\tpluginMediaElement.pluginElement = player;
\t\t
\t\tsettings.success(pluginMediaElement, pluginMediaElement.pluginElement);
\t\t
\t\t// load the youtube video
\t\tplayer.cueVideoById(settings.videoId);
\t\t
\t\tvar callbackName = settings.containerId + '_callback';
\t\t
\t\twindow[callbackName] = function(e) {
\t\t\tmejs.YouTubeApi.handleStateChange(e, player, pluginMediaElement);
\t\t};
\t\t
\t\tplayer.addEventListener('onStateChange', callbackName);
\t\t
\t\tsetInterval(function() {
\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'timeupdate');
\t\t}, 250);
\t\t
\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'canplay');
\t},
\t
\thandleStateChange: function(youTubeState, player, pluginMediaElement) {
\t\tswitch (youTubeState) {
\t\t\tcase -1: // not started
\t\t\t\tpluginMediaElement.paused = true;
\t\t\t\tpluginMediaElement.ended = true;
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'loadedmetadata');
\t\t\t\t//createYouTubeEvent(player, pluginMediaElement, 'loadeddata');
\t\t\t\tbreak;
\t\t\tcase 0:
\t\t\t\tpluginMediaElement.paused = false;
\t\t\t\tpluginMediaElement.ended = true;
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'ended');
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\tpluginMediaElement.paused = false;
\t\t\t\tpluginMediaElement.ended = false;\t\t\t\t
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'play');
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'playing');
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\tpluginMediaElement.paused = true;
\t\t\t\tpluginMediaElement.ended = false;\t\t\t\t
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'pause');
\t\t\t\tbreak;
\t\t\tcase 3: // buffering
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'progress');
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t// cued?
\t\t\t\tbreak;\t\t\t\t\t\t
\t\t\t
\t\t}\t\t\t
\t\t
\t}
}
// IFRAME
window.onYouTubePlayerAPIReady = function() {
\tmejs.YouTubeApi.iFrameReady();
};
// FLASH
window.onYouTubePlayerReady = function(id) {
\tmejs.YouTubeApi.flashReady(id);
};

window.mejs = mejs;
window.MediaElement = mejs.MediaElement;

/**
 * Localize strings
 *
 * Include translations from JS files and method to pluralize properly strings.
 *
 */
(function (doc, win, mejs, undefined) {

\tvar i18n = {
\t\t/**
\t\t * @type {String}
\t\t */
\t\t'default': 'en',

\t\t/**
\t\t * @type {String[]}
\t\t */
\t\tlocale: {
\t\t\tlanguage: (mejs.i18n && mejs.i18n.locale.language) || '',
\t\t\tstrings: (mejs.i18n && mejs.i18n.locale.strings) || {}
\t\t},

\t\t/**
\t\t * Filters for available languages.
\t\t *
\t\t * This plural forms are grouped in family groups based on
\t\t * https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
\t\t * with some additions and corrections according to the Localization Guide list
\t\t * (http://localization-guide.readthedocs.io/en/latest/l10n/pluralforms.html)
\t\t *
\t\t * Arguments are dynamic following the structure:
\t\t * - argument1 : Number to determine form
\t\t * - argument2...argumentN: Possible matches
\t\t *
\t\t * @type {Function[]}
\t\t */
\t\tpluralForms: [
\t\t\t// 0: Chinese, Japanese, Korean, Persian, Turkish, Thai, Lao, Aymará,
\t\t\t// Tibetan, Chiga, Dzongkha, Indonesian, Lojban, Georgian, Kazakh, Khmer, Kyrgyz, Malay,
\t\t\t// Burmese, Yakut, Sundanese, Tatar, Uyghur, Vietnamese, Wolof
\t\t\tfunction () {
\t\t\t\treturn arguments[1];
\t\t\t},
\t\t\t// 1: Danish, Dutch, English, Faroese, Frisian, German, Norwegian, Swedish, Estonian, Finnish,
\t\t\t// Hungarian, Basque, Greek, Hebrew, Italian, Portuguese, Spanish, Catalan, Afrikaans,
\t\t\t// Angika, Assamese, Asturian, Azerbaijani, Bulgarian, Bengali, Bodo, Aragonese, Dogri,
\t\t\t// Esperanto, Argentinean Spanish, Fulah, Friulian, Galician, Gujarati, Hausa,
\t\t\t// Hindi, Chhattisgarhi, Armenian, Interlingua, Greenlandic, Kannada, Kurdish, Letzeburgesch,
\t\t\t// Maithili, Malayalam, Mongolian, Manipuri, Marathi, Nahuatl, Neapolitan, Norwegian Bokmal,
\t\t\t// Nepali, Norwegian Nynorsk, Norwegian (old code), Northern Sotho, Oriya, Punjabi, Papiamento,
\t\t\t// Piemontese, Pashto, Romansh, Kinyarwanda, Santali, Scots, Sindhi, Northern Sami, Sinhala,
\t\t\t// Somali, Songhay, Albanian, Swahili, Tamil, Telugu, Turkmen, Urdu, Yoruba
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// 2: French, Brazilian Portuguese, Acholi, Akan, Amharic, Mapudungun, Breton, Filipino,
\t\t\t// Gun, Lingala, Mauritian Creole, Malagasy, Maori, Occitan, Tajik, Tigrinya, Uzbek, Walloon
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif ([0, 1].indexOf(args[0]) > -1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// 3: Latvian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1 && args[0] % 100 !== 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] !== 0) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 4: Scottish Gaelic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1 || args[0] === 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2 || args[0] === 12) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] > 2 && args[0] < 20) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}
\t\t\t},
\t\t\t// 5:  Romanian
\t\t\tfunction () {
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 0 || (args[0] % 100 > 0 && args[0] % 100 < 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 6: Lithuanian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1 && args[0] % 100 !== 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn [3];
\t\t\t\t}
\t\t\t},
\t\t\t// 7: Belarusian, Bosnian, Croatian, Serbian, Russian, Ukrainian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1 && args[0] % 100 !== 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && args[0] % 10 <= 4 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 8:  Slovak, Czech
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] >= 2 && args[0] <= 4) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 9: Polish
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && args[0] % 10 <= 4 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 10: Slovenian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 100 === 1) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] % 100 === 2) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else if (args[0] % 100 === 3 || args[0] % 100 === 4) {
\t\t\t\t\treturn args[4];
\t\t\t\t} else {
\t\t\t\t\treturn args[1];
\t\t\t\t}
\t\t\t},
\t\t\t// 11: Irish Gaelic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] > 2 && args[0] < 7) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else if (args[0] > 6 && args[0] < 11) {
\t\t\t\t\treturn args[4];
\t\t\t\t} else {
\t\t\t\t\treturn args[5];
\t\t\t\t}
\t\t\t},
\t\t\t// 12: Arabic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 0) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 1) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else if (args[0] % 100 >= 3 && args[0] % 100 <= 10) {
\t\t\t\t\treturn args[4];
\t\t\t\t} else if (args[0] % 100 >= 11) {
\t\t\t\t\treturn args[5];
\t\t\t\t} else {
\t\t\t\t\treturn args[6];
\t\t\t\t}
\t\t\t},
\t\t\t// 13: Maltese
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 0 || (args[0] % 100 > 1 && args[0] % 100 < 11)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] % 100 > 10 && args[0] % 100 < 20) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}

\t\t\t},
\t\t\t// 14: Macedonian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 15:  Icelandic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] !== 11 && args[0] % 10 === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// New additions

\t\t\t// 16:  Kashubian
\t\t\t// Note: in https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
\t\t\t// Breton is listed as #16 but in the Localization Guide it belongs to the group 2
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && args[0] % 10 <= 4 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 17:  Welsh
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] !== 8 && args[0] !== 11) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}
\t\t\t},
\t\t\t// 18:  Javanese
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 0) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// 19:  Cornish
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] === 3) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}
\t\t\t},
\t\t\t// 20:  Mandinka
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 0) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 1) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t}
\t\t],
\t\t/**
\t\t * Get specified language
\t\t *
\t\t */
\t\tgetLanguage: function () {
\t\t\tvar language = i18n.locale.language || i18n['default'];
\t\t\treturn /^(x\\-)?[a-z]{2,}(\\-\\w{2,})?(\\-\\w{2,})?\$/.exec(language) ? language : i18n['default'];
\t\t},

\t\t/**
\t\t * Translate a string to a specified language, including optionally a number to pluralize translation
\t\t *
\t\t * @param {String} message
\t\t * @param {Number} pluralParam
\t\t * @return {String}
\t\t */
\t\tt: function (message, pluralParam) {

\t\t\tif (typeof message === 'string' && message.length) {

\t\t\t\tvar
\t\t\t\t\tlanguage = i18n.getLanguage(),
\t\t\t\t\tstr,
\t\t\t\t\tpluralForm,
\t\t\t\t\t/**
\t\t\t\t\t * Modify string using algorithm to detect plural forms.
\t\t\t\t\t *
\t\t\t\t\t * @private
\t\t\t\t\t * @see http://stackoverflow.com/questions/1353408/messageformat-in-javascript-parameters-in-localized-ui-strings
\t\t\t\t\t * @param {String|String[]} input   - String or array of strings to pick the plural form
\t\t\t\t\t * @param {Number} number           - Number to determine the proper plural form
\t\t\t\t\t * @param {Number} form             - Number of language family to apply plural form
\t\t\t\t\t * @return {String}
\t\t\t\t\t */
\t\t\t\t\tplural = function (input, number, form) {

\t\t\t\t\t\tif (typeof input !== 'object' || typeof number !== 'number' || typeof form !== 'number') {
\t\t\t\t\t\t\treturn input;
\t\t\t\t\t\t}

\t\t\t\t\t\tif (typeof input === 'string') {
\t\t\t\t\t\t\treturn input;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Perform plural form or return original text
\t\t\t\t\t\treturn i18n.pluralForms[form].apply(null, [number].concat(input));
\t\t\t\t\t},
\t\t\t\t\t/**
\t\t\t\t\t *
\t\t\t\t\t * @param {String} input
\t\t\t\t\t * @return {String}
\t\t\t\t\t */
\t\t\t\t\tescapeHTML = function (input) {
\t\t\t\t\t\tvar map = {
\t\t\t\t\t\t\t'&': '&amp;',
\t\t\t\t\t\t\t'<': '&lt;',
\t\t\t\t\t\t\t'>': '&gt;',
\t\t\t\t\t\t\t'\"': '&quot;'
\t\t\t\t\t\t};

\t\t\t\t\t\treturn input.replace(/[&<>\"]/g, function(c) {
\t\t\t\t\t\t\treturn map[c];
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t;

\t\t\t\t// Fetch the localized version of the string
\t\t\t\tif (i18n.locale.strings && i18n.locale.strings[language]) {
\t\t\t\t\tstr = i18n.locale.strings[language][message];
\t\t\t\t\tif (typeof pluralParam === 'number') {
\t\t\t\t\t\tpluralForm = i18n.locale.strings[language]['mejs.plural-form'];
\t\t\t\t\t\tstr = plural.apply(null, [str, pluralParam, pluralForm]);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Fallback to default language if requested uid is not translated
\t\t\t\tif (!str && i18n.locale.strings && i18n.locale.strings[i18n['default']]) {
\t\t\t\t\tstr = i18n.locale.strings[i18n['default']][message];
\t\t\t\t\tif (typeof pluralParam === 'number') {
\t\t\t\t\t\tpluralForm = i18n.locale.strings[i18n['default']]['mejs.plural-form'];
\t\t\t\t\t\tstr = plural.apply(null, [str, pluralParam, pluralForm]);

\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// As a last resort, use the requested uid, to mimic original behavior of i18n utils (in which uid was the english text)
\t\t\t\tstr = str || message;

\t\t\t\t// Replace token
\t\t\t\tif (typeof pluralParam === 'number') {
\t\t\t\t\tstr = str.replace('%1', pluralParam);
\t\t\t\t}

\t\t\t\treturn escapeHTML(str);

\t\t\t}

\t\t\treturn message;
\t\t}

\t};

\t// i18n fixes for compatibility with WordPress
\tif (typeof mejsL10n !== 'undefined') {
\t\ti18n.locale.language = mejsL10n.language;
\t}

\t// Register variable
\tmejs.i18n = i18n;


}(document, window, mejs));

// i18n fixes for compatibility with WordPress
;(function (mejs, undefined) {

\t\"use strict\";

\tif (typeof mejsL10n !== 'undefined') {
\t\tmejs[mejsL10n.lang] = mejsL10n.strings;
\t}

}(mejs.i18n.locale.strings));
/*!
 * This is a i18n.locale language object.
 *
 * English; This can serve as a template for other languages to translate
 *
 * @author
 *   TBD
 *   Sascha Greuel (Twitter: @SoftCreatR)
 *
 * @see
 *   me-i18n.js
 *
 * @params
 *  - exports - CommonJS, window ..
 */
(function (exports) {
    \"use strict\";

    if (exports.en === undefined) {
        exports.en = {
            \"mejs.plural-form\": 1,

            // me-shim
            \"mejs.download-file\": \"Download File\",

            // mep-feature-contextmenu
            \"mejs.fullscreen-off\": \"Turn off Fullscreen\",
            \"mejs.fullscreen-on\": \"Go Fullscreen\",
            \"mejs.download-video\": \"Download Video\",

            // mep-feature-fullscreen
            \"mejs.fullscreen\": \"Fullscreen\",

            // mep-feature-jumpforward
            \"mejs.time-jump-forward\": [\"Jump forward 1 second\", \"Jump forward %1 seconds\"],

            // mep-feature-playpause
            \"mejs.play\": \"Play\",
            \"mejs.pause\": \"Pause\",

            // mep-feature-postroll
            \"mejs.close\": \"Close\",

            // mep-feature-progress
            \"mejs.time-slider\": \"Time Slider\",
            \"mejs.time-help-text\": \"Use Left/Right Arrow keys to advance one second, Up/Down arrows to advance ten seconds.\",

            // mep-feature-skipback
            \"mejs.time-skip-back\": [\"Skip back 1 second\", \"Skip back %1 seconds\"],

            // mep-feature-tracks
            \"mejs.captions-subtitles\": \"Captions/Subtitles\",
            \"mejs.none\": \"None\",

            // mep-feature-volume
            \"mejs.mute-toggle\": \"Mute Toggle\",
            \"mejs.volume-help-text\": \"Use Up/Down Arrow keys to increase or decrease volume.\",
            \"mejs.unmute\": \"Unmute\",
            \"mejs.mute\": \"Mute\",
            \"mejs.volume-slider\": \"Volume Slider\",

            // mep-player
            \"mejs.video-player\": \"Video Player\",
            \"mejs.audio-player\": \"Audio Player\",

            // mep-feature-ads
            \"mejs.ad-skip\": \"Skip ad\",
            \"mejs.ad-skip-info\": [\"Skip in 1 second\", \"Skip in %1 seconds\"],

            // mep-feature-sourcechooser
            \"mejs.source-chooser\": \"Source Chooser\"
        };
    }
}(mejs.i18n.locale.strings));

/*!
 *
 * MediaElementPlayer
 * http://mediaelementjs.com/
 *
 * Creates a controller bar for HTML5 <video> add <audio> tags
 * using jQuery and MediaElement.js (HTML5 Flash/Silverlight wrapper)
 *
 * Copyright 2010-2013, John Dyer (http://j.hn/)
 * License: MIT
 *
 */
if (typeof jQuery != 'undefined') {
\tmejs.\$ = jQuery;
} else if (typeof Zepto != 'undefined') {
\tmejs.\$ = Zepto;

\t// define `outerWidth` method which has not been realized in Zepto
\tZepto.fn.outerWidth = function(includeMargin) {
\t\tvar width = \$(this).width();
\t\tif (includeMargin) {
\t\t\twidth += parseInt(\$(this).css('margin-right'), 10);
\t\t\twidth += parseInt(\$(this).css('margin-left'), 10);
\t\t}
\t\treturn width
\t}

} else if (typeof ender != 'undefined') {
\tmejs.\$ = ender;
}
(function (\$) {

\t// default player values
\tmejs.MepDefaults = {
\t\t// url to poster (to fix iOS 3.x)
\t\tposter: '',
\t\t// When the video is ended, we can show the poster.
\t\tshowPosterWhenEnded: false,
\t\t// default if the <video width> is not specified
\t\tdefaultVideoWidth: 480,
\t\t// default if the <video height> is not specified
\t\tdefaultVideoHeight: 270,
\t\t// if set, overrides <video width>
\t\tvideoWidth: -1,
\t\t// if set, overrides <video height>
\t\tvideoHeight: -1,
\t\t// default if the user doesn't specify
\t\tdefaultAudioWidth: 400,
\t\t// default if the user doesn't specify
\t\tdefaultAudioHeight: 30,
\t\t// default amount to move back when back key is pressed
\t\tdefaultSeekBackwardInterval: function(media) {
\t\t\treturn (media.duration * 0.05);
\t\t},
\t\t// default amount to move forward when forward key is pressed
\t\tdefaultSeekForwardInterval: function(media) {
\t\t\treturn (media.duration * 0.05);
\t\t},
\t\t// set dimensions via JS instead of CSS
\t\tsetDimensions: true,
\t\t// width of audio player
\t\taudioWidth: -1,
\t\t// height of audio player
\t\taudioHeight: -1,
\t\t// initial volume when the player starts (overrided by user cookie)
\t\tstartVolume: 0.8,
\t\t// useful for <audio> player loops
\t\tloop: false,
\t\t// rewind to beginning when media ends
\t\tautoRewind: true,
\t\t// resize to media dimensions
\t\tenableAutosize: true,
\t\t/*
\t\t * Time format to use. Default: 'mm:ss'
\t\t * Supported units:
\t\t *   h: hour
\t\t *   m: minute
\t\t *   s: second
\t\t *   f: frame count
\t\t * When using 'hh', 'mm', 'ss' or 'ff' we always display 2 digits.
\t\t * If you use 'h', 'm', 's' or 'f' we display 1 digit if possible.
\t\t *
\t\t * Example to display 75 seconds:
\t\t * Format 'mm:ss': 01:15
\t\t * Format 'm:ss': 1:15
\t\t * Format 'm:s': 1:15
\t\t */
\t\ttimeFormat: '',
\t\t// forces the hour marker (##:00:00)
\t\talwaysShowHours: false,
\t\t// show framecount in timecode (##:00:00:00)
\t\tshowTimecodeFrameCount: false,
\t\t// used when showTimecodeFrameCount is set to true
\t\tframesPerSecond: 25,
\t\t// automatically calculate the width of the progress bar based on the sizes of other elements
\t\tautosizeProgress : true,
\t\t// Hide controls when playing and mouse is not over the video
\t\talwaysShowControls: false,
\t\t// Display the video control
\t\thideVideoControlsOnLoad: false,
\t\t// Enable click video element to toggle play/pause
\t\tclickToPlayPause: true,
\t\t// Time in ms to hide controls
\t\tcontrolsTimeoutDefault: 1500,
\t\t// Time in ms to trigger the timer when mouse moves
\t\tcontrolsTimeoutMouseEnter: 2500,
\t\t// Time in ms to trigger the timer when mouse leaves
\t\tcontrolsTimeoutMouseLeave: 1000,
\t\t// force iPad's native controls
\t\tiPadUseNativeControls: false,
\t\t// force iPhone's native controls
\t\tiPhoneUseNativeControls: false,
\t\t// force Android's native controls
\t\tAndroidUseNativeControls: false,
\t\t// features to show
\t\tfeatures: ['playpause','current','progress','duration','tracks','volume','fullscreen'],
\t\t// only for dynamic
\t\tisVideo: true,
\t\t// stretching modes (auto, fill, responsive, none)
\t\tstretching: 'auto',
\t\t// turns keyboard support on and off for this instance
\t\tenableKeyboard: true,
\t\t// when this player starts, it will pause other players
\t\tpauseOtherPlayers: true,
\t\t// array of keyboard actions such as play pause
\t\tkeyActions: [
\t\t\t\t{
\t\t\t\t\t\tkeys: [
\t\t\t\t\t\t\t\t32, // SPACE
\t\t\t\t\t\t\t\t179 // GOOGLE play/pause button
\t\t\t\t\t\t\t\t ],
\t\t\t\t\t\taction: function(player, media, key, event) {

\t\t\t\t\t\t\tif (!mejs.MediaFeatures.isFirefox) {
\t\t\t\t\t\t\t\tif (media.paused || media.ended) {
\t\t\t\t\t\t\t\t\tmedia.play();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [38], // UP
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tplayer.container.find('.mejs-volume-slider').css('display','block');
\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar newVolume = Math.min(media.volume + 0.1, 1);
\t\t\t\t\t\t\t\tmedia.setVolume(newVolume);
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [40], // DOWN
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tplayer.container.find('.mejs-volume-slider').css('display','block');
\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar newVolume = Math.max(media.volume - 0.1, 0);
\t\t\t\t\t\t\t\tmedia.setVolume(newVolume);
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [
\t\t\t\t\t\t\t\t37, // LEFT
\t\t\t\t\t\t\t\t227 // Google TV rewind
\t\t\t\t\t\t],
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tif (!isNaN(media.duration) && media.duration > 0) {
\t\t\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// 5%
\t\t\t\t\t\t\t\t\t\tvar newTime = Math.max(media.currentTime - player.options.defaultSeekBackwardInterval(media), 0);
\t\t\t\t\t\t\t\t\t\tmedia.setCurrentTime(newTime);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [
\t\t\t\t\t\t\t\t39, // RIGHT
\t\t\t\t\t\t\t\t228 // Google TV forward
\t\t\t\t\t\t],
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tif (!isNaN(media.duration) && media.duration > 0) {
\t\t\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// 5%
\t\t\t\t\t\t\t\t\t\tvar newTime = Math.min(media.currentTime + player.options.defaultSeekForwardInterval(media), media.duration);
\t\t\t\t\t\t\t\t\t\tmedia.setCurrentTime(newTime);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [70], // F
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tif (typeof player.enterFullScreen != 'undefined') {
\t\t\t\t\t\t\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.enterFullScreen();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [77], // M
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tplayer.container.find('.mejs-volume-slider').css('display','block');
\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (player.media.muted) {
\t\t\t\t\t\t\t\t\t\tplayer.setMuted(false);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tplayer.setMuted(true);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t}
\t\t]
\t};

\tmejs.mepIndex = 0;

\tmejs.players = {};

\t// wraps a MediaElement object in player controls
\tmejs.MediaElementPlayer = function(node, o) {
\t\t// enforce object, even without \"new\" (via John Resig)
\t\tif ( !(this instanceof mejs.MediaElementPlayer) ) {
\t\t\treturn new mejs.MediaElementPlayer(node, o);
\t\t}

\t\tvar t = this;

\t\t// these will be reset after the MediaElement.success fires
\t\tt.\$media = t.\$node = \$(node);
\t\tt.node = t.media = t.\$media[0];

\t\tif(!t.node) {
\t\t\treturn;
\t\t}

\t\t// check for existing player
\t\tif (typeof t.node.player != 'undefined') {
\t\t\treturn t.node.player;
\t\t}


\t\t// try to get options from data-mejsoptions
\t\tif (typeof o == 'undefined') {
\t\t\to = t.\$node.data('mejsoptions');
\t\t}

\t\t// extend default options
\t\tt.options = \$.extend({},mejs.MepDefaults,o);

\t\tif (!t.options.timeFormat) {
\t\t\t// Generate the time format according to options
\t\t\tt.options.timeFormat = 'mm:ss';
\t\t\tif (t.options.alwaysShowHours) {
\t\t\t\tt.options.timeFormat = 'hh:mm:ss';
\t\t\t}
\t\t\tif (t.options.showTimecodeFrameCount) {
\t\t\t\tt.options.timeFormat += ':ff';
\t\t\t}
\t\t}

\t\tmejs.Utility.calculateTimeFormat(0, t.options, t.options.framesPerSecond || 25);

\t\t// unique ID
\t\tt.id = 'mep_' + mejs.mepIndex++;

\t\t// add to player array (for focus events)
\t\tmejs.players[t.id] = t;

\t\t// start up
\t\tt.init();

\t\treturn t;
\t};

\t// actual player
\tmejs.MediaElementPlayer.prototype = {

\t\thasFocus: false,

\t\tcontrolsAreVisible: true,

\t\tinit: function() {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tmf = mejs.MediaFeatures,
\t\t\t\t// options for MediaElement (shim)
\t\t\t\tmeOptions = \$.extend(true, {}, t.options, {
\t\t\t\t\tsuccess: function(media, domNode) { t.meReady(media, domNode); },
\t\t\t\t\terror: function(e) { t.handleError(e);}
\t\t\t\t}),
\t\t\t\ttagName = t.media.tagName.toLowerCase();

\t\t\tt.isDynamic = (tagName !== 'audio' && tagName !== 'video');

\t\t\tif (t.isDynamic) {
\t\t\t\t// get video from src or href?
\t\t\t\tt.isVideo = t.options.isVideo;
\t\t\t} else {
\t\t\t\tt.isVideo = (tagName !== 'audio' && t.options.isVideo);
\t\t\t}

\t\t\t// use native controls in iPad, iPhone, and Android
\t\t\tif ((mf.isiPad && t.options.iPadUseNativeControls) || (mf.isiPhone && t.options.iPhoneUseNativeControls)) {

\t\t\t\t// add controls and stop
\t\t\t\tt.\$media.attr('controls', 'controls');

\t\t\t\t// attempt to fix iOS 3 bug
\t\t\t\t//t.\$media.removeAttr('poster');
\t\t\t\t\t\t\t\t// no Issue found on iOS3 -ttroxell

\t\t\t\t// override Apple's autoplay override for iPads
\t\t\t\tif (mf.isiPad && t.media.getAttribute('autoplay') !== null) {
\t\t\t\t\tt.play();
\t\t\t\t}

\t\t\t} else if (mf.isAndroid && t.options.AndroidUseNativeControls) {

\t\t\t\t// leave default player

\t\t\t} else if (t.isVideo || (!t.isVideo && t.options.features.length)) {

\t\t\t\t// DESKTOP: use MediaElementPlayer controls

\t\t\t\t// remove native controls
\t\t\t\tt.\$media.removeAttr('controls');
\t\t\t\tvar videoPlayerTitle = t.isVideo ?
\t\t\t\t\tmejs.i18n.t('mejs.video-player') : mejs.i18n.t('mejs.audio-player');
\t\t\t\t// insert description for screen readers
\t\t\t\t\$('<span class=\"mejs-offscreen\">' + videoPlayerTitle + '</span>').insertBefore(t.\$media);
\t\t\t\t// build container
\t\t\t\tt.container =
\t\t\t\t\t\$('<div id=\"' + t.id + '\" class=\"mejs-container ' + (mejs.MediaFeatures.svgAsImg ? 'svg' : 'no-svg') +
\t\t\t\t\t  '\" tabindex=\"0\" role=\"application\" aria-label=\"' + videoPlayerTitle + '\">'+
\t\t\t\t\t\t'<div class=\"mejs-inner\">'+
\t\t\t\t\t\t\t'<div class=\"mejs-mediaelement\"></div>'+
\t\t\t\t\t\t\t'<div class=\"mejs-layers\"></div>'+
\t\t\t\t\t\t\t'<div class=\"mejs-controls\"></div>'+
\t\t\t\t\t\t\t'<div class=\"mejs-clear\"></div>'+
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t'</div>')
\t\t\t\t\t.addClass(t.\$media[0].className)
\t\t\t\t\t.insertBefore(t.\$media)
\t\t\t\t\t.focus(function ( e ) {
\t\t\t\t\t\tif( !t.controlsAreVisible && !t.hasFocus && t.controlsEnabled) {
\t\t\t\t\t\t\tt.showControls(true);
\t\t\t\t\t\t\t// In versions older than IE11, the focus causes the playbar to be displayed
\t\t\t\t\t\t\t// if user clicks on the Play/Pause button in the control bar once it attempts
\t\t\t\t\t\t\t// to hide it
\t\t\t\t\t\t\tif (!t.hasMsNativeFullScreen) {
\t\t\t\t\t\t\t\t// If e.relatedTarget appears before container, send focus to play button,
\t\t\t\t\t\t\t\t// else send focus to last control button.
\t\t\t\t\t\t\t\tvar btnSelector = '.mejs-playpause-button > button';

\t\t\t\t\t\t\t\tif (mejs.Utility.isNodeAfter(e.relatedTarget, t.container[0])) {
\t\t\t\t\t\t\t\t\tbtnSelector = '.mejs-controls .mejs-button:last-child > button';
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar button = t.container.find(btnSelector);
\t\t\t\t\t\t\t\tbutton.focus();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t// When no elements in controls, hide bar completely
\t\t\t\tif (!t.options.features.length) {
\t\t\t\t\tt.container.css('background', 'transparent').find('.mejs-controls').hide();
\t\t\t\t}
 
\t\t\t\tif (t.isVideo && t.options.stretching === 'fill' && !t.container.parent('mejs-fill-container').length) {
\t\t\t\t\t// outer container
\t\t\t\t\tt.outerContainer = t.\$media.parent();
\t\t\t\t\tt.container.wrap('<div class=\"mejs-fill-container\"/>');
\t\t\t\t}

\t\t\t\t// add classes for user and content
\t\t\t\tt.container.addClass(
\t\t\t\t\t(mf.isAndroid ? 'mejs-android ' : '') +
\t\t\t\t\t(mf.isiOS ? 'mejs-ios ' : '') +
\t\t\t\t\t(mf.isiPad ? 'mejs-ipad ' : '') +
\t\t\t\t\t(mf.isiPhone ? 'mejs-iphone ' : '') +
\t\t\t\t\t(t.isVideo ? 'mejs-video ' : 'mejs-audio ')
\t\t\t\t);


\t\t\t\t// move the <video/video> tag into the right spot
\t\t\t\tt.container.find('.mejs-mediaelement').append(t.\$media);

\t\t\t\t// needs to be assigned here, after iOS remap
\t\t\t\tt.node.player = t;

\t\t\t\t// find parts
\t\t\t\tt.controls = t.container.find('.mejs-controls');
\t\t\t\tt.layers = t.container.find('.mejs-layers');

\t\t\t\t// determine the size

\t\t\t\t/* size priority:
\t\t\t\t\t(1) videoWidth (forced),
\t\t\t\t\t(2) style=\"width;height;\"
\t\t\t\t\t(3) width attribute,
\t\t\t\t\t(4) defaultVideoWidth (for unspecified cases)
\t\t\t\t*/

\t\t\t\tvar tagType = (t.isVideo ? 'video' : 'audio'),
\t\t\t\t\tcapsTagName = tagType.substring(0,1).toUpperCase() + tagType.substring(1);



\t\t\t\tif (t.options[tagType + 'Width'] > 0 || t.options[tagType + 'Width'].toString().indexOf('%') > -1) {
\t\t\t\t\tt.width = t.options[tagType + 'Width'];
\t\t\t\t} else if (t.media.style.width !== '' && t.media.style.width !== null) {
\t\t\t\t\tt.width = t.media.style.width;
\t\t\t\t} else if (t.media.getAttribute('width') !== null) {
\t\t\t\t\tt.width = t.\$media.attr('width');
\t\t\t\t} else {
\t\t\t\t\tt.width = t.options['default' + capsTagName + 'Width'];
\t\t\t\t}

\t\t\t\tif (t.options[tagType + 'Height'] > 0 || t.options[tagType + 'Height'].toString().indexOf('%') > -1) {
\t\t\t\t\tt.height = t.options[tagType + 'Height'];
\t\t\t\t} else if (t.media.style.height !== '' && t.media.style.height !== null) {
\t\t\t\t\tt.height = t.media.style.height;
\t\t\t\t} else if (t.\$media[0].getAttribute('height') !== null) {
\t\t\t\t\tt.height = t.\$media.attr('height');
\t\t\t\t} else {
\t\t\t\t\tt.height = t.options['default' + capsTagName + 'Height'];
\t\t\t\t}

\t\t\t\t// set the size, while we wait for the plugins to load below
\t\t\t\tt.setPlayerSize(t.width, t.height);

\t\t\t\t// create MediaElementShim
\t\t\t\tmeOptions.pluginWidth = t.width;
\t\t\t\tmeOptions.pluginHeight = t.height;
\t\t\t}
\t\t\t// Hide media completely for audio that doesn't have any features
\t\t\telse if (!t.isVideo && !t.options.features.length) {
\t\t\t\tt.\$media.hide();
\t\t\t}

\t\t\t// create MediaElement shim
\t\t\tmejs.MediaElement(t.\$media[0], meOptions);

\t\t\tif (typeof(t.container) !== 'undefined' && t.options.features.length && t.controlsAreVisible) {
\t\t\t\t// controls are shown when loaded
\t\t\t\tt.container.trigger('controlsshown');
\t\t\t}
\t\t},

\t\tshowControls: function(doAnimation) {
\t\t\tvar t = this;

\t\t\tdoAnimation = typeof doAnimation == 'undefined' || doAnimation;

\t\t\tif (t.controlsAreVisible)
\t\t\t\treturn;

\t\t\tif (doAnimation) {
\t\t\t\tt.controls
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.stop(true, true).fadeIn(200, function() {
\t\t\t\t\t\tt.controlsAreVisible = true;
\t\t\t\t\t\tt.container.trigger('controlsshown');
\t\t\t\t\t});

\t\t\t\t// any additional controls people might add and want to hide
\t\t\t\tt.container.find('.mejs-control')
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.stop(true, true).fadeIn(200, function() {t.controlsAreVisible = true;});

\t\t\t} else {
\t\t\t\tt.controls
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\t// any additional controls people might add and want to hide
\t\t\t\tt.container.find('.mejs-control')
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\tt.controlsAreVisible = true;
\t\t\t\tt.container.trigger('controlsshown');
\t\t\t}

\t\t\tt.setControlsSize();

\t\t},

\t\thideControls: function(doAnimation) {
\t\t\tvar t = this;

\t\t\tdoAnimation = typeof doAnimation == 'undefined' || doAnimation;

\t\t\tif (!t.controlsAreVisible || t.options.alwaysShowControls || t.keyboardAction || t.media.paused || t.media.ended)
\t\t\t\treturn;

\t\t\tif (doAnimation) {
\t\t\t\t// fade out main controls
\t\t\t\tt.controls.stop(true, true).fadeOut(200, function() {
\t\t\t\t\t\$(this)
\t\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t\t.css('display','block');

\t\t\t\t\tt.controlsAreVisible = false;
\t\t\t\t\tt.container.trigger('controlshidden');
\t\t\t\t});

\t\t\t\t// any additional controls people might add and want to hide
\t\t\t\tt.container.find('.mejs-control').stop(true, true).fadeOut(200, function() {
\t\t\t\t\t\$(this)
\t\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t\t.css('display','block');
\t\t\t\t});
\t\t\t} else {

\t\t\t\t// hide main controls
\t\t\t\tt.controls
\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\t// hide others
\t\t\t\tt.container.find('.mejs-control')
\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\tt.controlsAreVisible = false;
\t\t\t\tt.container.trigger('controlshidden');
\t\t\t}
\t\t},

\t\tcontrolsTimer: null,

\t\tstartControlsTimer: function(timeout) {

\t\t\tvar t = this;

\t\t\ttimeout = typeof timeout != 'undefined' ? timeout : t.options.controlsTimeoutDefault;

\t\t\tt.killControlsTimer('start');

\t\t\tt.controlsTimer = setTimeout(function() {
\t\t\t\t//
\t\t\t\tt.hideControls();
\t\t\t\tt.killControlsTimer('hide');
\t\t\t}, timeout);
\t\t},

\t\tkillControlsTimer: function(src) {

\t\t\tvar t = this;

\t\t\tif (t.controlsTimer !== null) {
\t\t\t\tclearTimeout(t.controlsTimer);
\t\t\t\tdelete t.controlsTimer;
\t\t\t\tt.controlsTimer = null;
\t\t\t}
\t\t},

\t\tcontrolsEnabled: true,

\t\tdisableControls: function() {
\t\t\tvar t= this;

\t\t\tt.killControlsTimer();
\t\t\tt.hideControls(false);
\t\t\tthis.controlsEnabled = false;
\t\t},

\t\tenableControls: function() {
\t\t\tvar t= this;

\t\t\tt.showControls(false);

\t\t\tt.controlsEnabled = true;
\t\t},

\t\t// Sets up all controls and events
\t\tmeReady: function(media, domNode) {
\t\t\t
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tmf = mejs.MediaFeatures,
\t\t\t\tautoplayAttr = domNode.getAttribute('autoplay'),
\t\t\t\tautoplay = !(typeof autoplayAttr == 'undefined' || autoplayAttr === null || autoplayAttr === 'false'),
\t\t\t\tfeatureIndex,
\t\t\t\tfeature;

\t\t\t// make sure it can't create itself again if a plugin reloads
\t\t\tif (t.created) {
\t\t\t\treturn;
\t\t\t} else {
\t\t\t\tt.created = true;
\t\t\t}

\t\t\tt.media = media;
\t\t\tt.domNode = domNode;

\t\t\tif (!(mf.isAndroid && t.options.AndroidUseNativeControls) && !(mf.isiPad && t.options.iPadUseNativeControls) && !(mf.isiPhone && t.options.iPhoneUseNativeControls)) {

\t\t\t\t// In the event that no features are specified for audio,
\t\t\t\t// create only MediaElement instance rather than
\t\t\t\t// doing all the work to create a full player
\t\t\t\tif (!t.isVideo && !t.options.features.length) {

\t\t\t\t\t// force autoplay for HTML5
\t\t\t\t\tif (autoplay && media.pluginType == 'native') {
\t\t\t\t\t\tt.play();
\t\t\t\t\t}


\t\t\t\t\tif (t.options.success) {

\t\t\t\t\t\tif (typeof t.options.success == 'string') {
\t\t\t\t\t\t\twindow[t.options.success](t.media, t.domNode, t);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tt.options.success(t.media, t.domNode, t);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// two built in features
\t\t\t\tt.buildposter(t, t.controls, t.layers, t.media);
\t\t\t\tt.buildkeyboard(t, t.controls, t.layers, t.media);
\t\t\t\tt.buildoverlays(t, t.controls, t.layers, t.media);

\t\t\t\t// grab for use by features
\t\t\t\tt.findTracks();

\t\t\t\t// add user-defined features/controls
\t\t\t\tfor (featureIndex in t.options.features) {
\t\t\t\t\tfeature = t.options.features[featureIndex];
\t\t\t\t\tif (t['build' + feature]) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tt['build' + feature](t, t.controls, t.layers, t.media);
\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t// TODO: report control error
\t\t\t\t\t\t\t//throw e;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tt.container.trigger('controlsready');

\t\t\t\t// reset all layers and controls
\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\tt.setControlsSize();


\t\t\t\t// controls fade
\t\t\t\tif (t.isVideo) {

\t\t\t\t\tif (mejs.MediaFeatures.hasTouch && !t.options.alwaysShowControls) {

\t\t\t\t\t\t// for touch devices (iOS, Android)
\t\t\t\t\t\t// show/hide without animation on touch

\t\t\t\t\t\tt.\$media.bind('touchstart', function() {

\t\t\t\t\t\t\t// toggle controls
\t\t\t\t\t\t\tif (t.controlsAreVisible) {
\t\t\t\t\t\t\t\tt.hideControls(false);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tt.showControls(false);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t} else {

\t\t\t\t\t\t// create callback here since it needs access to current
\t\t\t\t\t\t// MediaElement object
\t\t\t\t\t\tt.clickToPlayPauseCallback = function() {
\t\t\t\t\t\t\t//

\t\t\t\t\t\t\tif (t.options.clickToPlayPause) {
\t\t\t\t\t\t\t\tif (t.media.paused) {
\t\t\t\t\t\t\t\t\tt.play();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tt.pause();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar button = t.\$media.closest('.mejs-container').find('.mejs-overlay-button'),
\t\t\t\t\t\t\t\t\tpressed = button.attr('aria-pressed');
\t\t\t\t\t\t\t\tbutton.attr('aria-pressed', !pressed);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};

\t\t\t\t\t\t// click to play/pause
\t\t\t\t\t\tt.media.addEventListener('click', t.clickToPlayPauseCallback, false);

\t\t\t\t\t\t// show/hide controls
\t\t\t\t\t\tt.container
\t\t\t\t\t\t\t.bind('mouseenter', function () {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tif (!t.options.alwaysShowControls ) {
\t\t\t\t\t\t\t\t\t\tt.killControlsTimer('enter');
\t\t\t\t\t\t\t\t\t\tt.showControls();
\t\t\t\t\t\t\t\t\t\tt.startControlsTimer(t.options.controlsTimeoutMouseEnter);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.bind('mousemove', function() {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tif (!t.controlsAreVisible) {
\t\t\t\t\t\t\t\t\t\tt.showControls();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (!t.options.alwaysShowControls) {
\t\t\t\t\t\t\t\t\t\tt.startControlsTimer(t.options.controlsTimeoutMouseEnter);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.bind('mouseleave', function () {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tif (!t.media.paused && !t.options.alwaysShowControls) {
\t\t\t\t\t\t\t\t\t\tt.startControlsTimer(t.options.controlsTimeoutMouseLeave);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tif(t.options.hideVideoControlsOnLoad) {
\t\t\t\t\t\tt.hideControls(false);
\t\t\t\t\t}

\t\t\t\t\t// check for autoplay
\t\t\t\t\tif (autoplay && !t.options.alwaysShowControls) {
\t\t\t\t\t\tt.hideControls();
\t\t\t\t\t}

\t\t\t\t\t// resizer
\t\t\t\t\tif (t.options.enableAutosize) {
\t\t\t\t\t\tt.media.addEventListener('loadedmetadata', function(e) {
\t\t\t\t\t\t\t// if the <video height> was not set and the options.videoHeight was not set
\t\t\t\t\t\t\t// then resize to the real dimensions
\t\t\t\t\t\t\tif (t.options.videoHeight <= 0 && t.domNode.getAttribute('height') === null && !isNaN(e.target.videoHeight)) {
\t\t\t\t\t\t\t\tt.setPlayerSize(e.target.videoWidth, e.target.videoHeight);
\t\t\t\t\t\t\t\tt.setControlsSize();
\t\t\t\t\t\t\t\tt.media.setVideoSize(e.target.videoWidth, e.target.videoHeight);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, false);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// EVENTS

\t\t\t\t// FOCUS: when a video starts playing, it takes focus from other players (possibly pausing them)
\t\t\t\tt.media.addEventListener('play', function() {
\t\t\t\t\tvar playerIndex;

\t\t\t\t\t// go through all other players
\t\t\t\t\tfor (playerIndex in mejs.players) {
\t\t\t\t\t\tvar p = mejs.players[playerIndex];
\t\t\t\t\t\tif (p.id != t.id && t.options.pauseOtherPlayers && !p.paused && !p.ended) {
\t\t\t\t\t\t\tp.pause();
\t\t\t\t\t\t}
\t\t\t\t\t\tp.hasFocus = false;
\t\t\t\t\t}

\t\t\t\t\tt.hasFocus = true;
\t\t\t\t},false);


\t\t\t\t// ended for all
\t\t\t\tt.media.addEventListener('ended', function (e) {
\t\t\t\t\tif(t.options.autoRewind) {
\t\t\t\t\t\ttry{
\t\t\t\t\t\t\tt.media.setCurrentTime(0);
\t\t\t\t\t\t\t// Fixing an Android stock browser bug, where \"seeked\" isn't fired correctly after ending the video and jumping to the beginning
\t\t\t\t\t\t\twindow.setTimeout(function(){
\t\t\t\t\t\t\t\t\$(t.container).find('.mejs-overlay-loading').parent().hide();
\t\t\t\t\t\t\t}, 20);
\t\t\t\t\t\t} catch (exp) {

\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (t.media.pluginType === 'youtube') {
\t\t\t\t\t\tt.media.stop();
\t\t\t\t\t} else {
\t\t\t\t\t\tt.media.pause();
\t\t\t\t\t}

\t\t\t\t\tif (t.setProgressRail) {
\t\t\t\t\t\tt.setProgressRail();
\t\t\t\t\t}
\t\t\t\t\tif (t.setCurrentRail) {
\t\t\t\t\t\tt.setCurrentRail();
\t\t\t\t\t}

\t\t\t\t\tif (t.options.loop) {
\t\t\t\t\t\tt.play();
\t\t\t\t\t} else if (!t.options.alwaysShowControls && t.controlsEnabled) {
\t\t\t\t\t\tt.showControls();
\t\t\t\t\t}
\t\t\t\t}, false);

\t\t\t\t// resize on the first play
\t\t\t\tt.media.addEventListener('loadedmetadata', function() {

\t\t\t\t\tmejs.Utility.calculateTimeFormat(t.duration, t.options, t.options.framesPerSecond || 25);

\t\t\t\t\tif (t.updateDuration) {
\t\t\t\t\t\tt.updateDuration();
\t\t\t\t\t}
\t\t\t\t\tif (t.updateCurrent) {
\t\t\t\t\t\tt.updateCurrent();
\t\t\t\t\t}

\t\t\t\t\tif (!t.isFullScreen) {
\t\t\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\t\t\tt.setControlsSize();
\t\t\t\t\t}
\t\t\t\t}, false);

\t\t\t\t// Only change the time format when necessary
\t\t\t\tvar duration = null;
\t\t\t\tt.media.addEventListener('timeupdate',function() {
\t\t\t\t\tif (duration !== this.duration) {
\t\t\t\t\t\tduration = this.duration;
\t\t\t\t\t\tmejs.Utility.calculateTimeFormat(duration, t.options, t.options.framesPerSecond || 25);
\t\t\t\t\t\t
\t\t\t\t\t\t// make sure to fill in and resize the controls (e.g., 00:00 => 01:13:15
\t\t\t\t\t\tif (t.updateDuration) {
\t\t\t\t\t\t\tt.updateDuration();
\t\t\t\t\t\t}
\t\t\t\t\t\tif (t.updateCurrent) {
\t\t\t\t\t\t\tt.updateCurrent();
\t\t\t\t\t\t}
\t\t\t\t\t\tt.setControlsSize();
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t}, false);

\t\t\t\tt.container.focusout(function (e) {
\t\t\t\t\tif( e.relatedTarget ) { //FF is working on supporting focusout https://bugzilla.mozilla.org/show_bug.cgi?id=687787
\t\t\t\t\t\tvar \$target = \$(e.relatedTarget);
\t\t\t\t\t\tif (t.keyboardAction && \$target.parents('.mejs-container').length === 0) {
\t\t\t\t\t\t\tt.keyboardAction = false;
\t\t\t\t\t\t\tif (t.isVideo && !t.options.alwaysShowControls) {
\t\t\t\t\t\t\t\tt.hideControls(true);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// webkit has trouble doing this without a delay
\t\t\t\tsetTimeout(function () {
\t\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\t\tt.setControlsSize();
\t\t\t\t}, 50);

\t\t\t\t// adjust controls whenever window sizes (used to be in fullscreen only)
\t\t\t\tt.globalBind('resize', function() {

\t\t\t\t\t// don't resize for fullscreen mode
\t\t\t\t\tif ( !(t.isFullScreen || (mejs.MediaFeatures.hasTrueNativeFullScreen && document.webkitIsFullScreen)) ) {
\t\t\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\t\t}

\t\t\t\t\t// always adjust controls
\t\t\t\t\tt.setControlsSize();
\t\t\t\t});

\t\t\t\t// This is a work-around for a bug in the YouTube iFrame player, which means
\t\t\t\t//\twe can't use the play() API for the initial playback on iOS or Android;
\t\t\t\t//\tuser has to start playback directly by tapping on the iFrame.
\t\t\t\tif (t.media.pluginType == 'youtube' && ( mf.isiOS || mf.isAndroid ) ) {
\t\t\t\t\tt.container.find('.mejs-overlay-play').hide();
\t\t\t\t\tt.container.find('.mejs-poster').hide();
\t\t\t\t}
\t\t\t}

\t\t\t// force autoplay for HTML5
\t\t\tif (autoplay && media.pluginType == 'native') {
\t\t\t\tt.play();
\t\t\t}


\t\t\tif (t.options.success) {

\t\t\t\tif (typeof t.options.success == 'string') {
\t\t\t\t\twindow[t.options.success](t.media, t.domNode, t);
\t\t\t\t} else {
\t\t\t\t\tt.options.success(t.media, t.domNode, t);
\t\t\t\t}
\t\t\t}
\t\t},

\t\thandleError: function(e) {
\t\t\tvar t = this;

\t\t\tif (t.controls) {
\t\t\t\tt.controls.hide();
\t\t\t}

\t\t\t// Tell user that the file cannot be played
\t\t\tif (t.options.error) {
\t\t\t\tt.options.error(e);
\t\t\t}
\t\t},

\t\tsetPlayerSize: function(width,height) {
\t\t\tvar t = this;

\t\t\tif( !t.options.setDimensions ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (typeof width != 'undefined') {
\t\t\t\tt.width = width;
\t\t\t}

\t\t\tif (typeof height != 'undefined') {
\t\t\t\tt.height = height;
\t\t\t}
 
\t\t\t// check stretching modes
\t\t\tswitch (t.options.stretching) {
\t\t\t\tcase 'fill':
\t\t\t\t\t// The 'fill' effect only makes sense on video; for audio we will set the dimensions
\t\t\t\t\tif (t.isVideo) {
\t\t\t\t\t\tthis.setFillMode();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.setDimensions(t.width, t.height);
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase 'responsive':
\t\t\t\t\tthis.setResponsiveMode();
\t\t\t\t\tbreak;
\t\t\t\tcase 'none':
\t\t\t\t\tthis.setDimensions(t.width, t.height);
\t\t\t\t\tbreak;
\t\t\t\t// This is the 'auto' mode
\t\t\t\tdefault:
\t\t\t\t\tif (this.hasFluidMode() === true) {
\t\t\t\t\t\tthis.setResponsiveMode();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.setDimensions(t.width, t.height);
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t}
\t\t},
 
\t\thasFluidMode: function() {
\t\t\tvar t = this;
\t 
\t\t\t// detect 100% mode - use currentStyle for IE since css() doesn't return percentages
\t\t\treturn (t.height.toString().indexOf('%') > 0 || (t.\$node.css('max-width') !== 'none' && t.\$node.css('max-width') !== 't.width') || (t.\$node[0].currentStyle && t.\$node[0].currentStyle.maxWidth === '100%'));
\t\t},
 
\t\tsetResponsiveMode: function() {
\t\t\tvar t = this;
\t\t
\t\t\t// do we have the native dimensions yet?
\t\t\tvar nativeWidth = (function() {
\t\t\t\tif (t.isVideo) {
\t\t\t\t\tif (t.media.videoWidth && t.media.videoWidth > 0) {
\t\t\t\t\t\treturn t.media.videoWidth;
\t\t\t\t\t} else if (t.media.getAttribute('width') !== null) {
\t\t\t\t\t\treturn t.media.getAttribute('width');
\t\t\t\t\t} else {
\t\t\t\t\t\treturn t.options.defaultVideoWidth;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\treturn t.options.defaultAudioWidth;
\t\t\t\t}
\t\t\t})();
\t\t
\t\t\tvar nativeHeight = (function() {
\t\t\t\tif (t.isVideo) {
\t\t\t\t\tif (t.media.videoHeight && t.media.videoHeight > 0) {
\t\t\t\t\t\treturn t.media.videoHeight;
\t\t\t\t\t} else if (t.media.getAttribute('height') !== null) {
\t\t\t\t\t\treturn t.media.getAttribute('height');
\t\t\t\t\t} else {
\t\t\t\t\t\treturn t.options.defaultVideoHeight;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\treturn t.options.defaultAudioHeight;
\t\t\t\t}
\t\t\t})();
\t\t
\t\t\tvar parentWidth = t.container.parent().closest(':visible').width(),
\t\t\tparentHeight = t.container.parent().closest(':visible').height(),
\t\t\tnewHeight = t.isVideo || !t.options.autosizeProgress ? parseInt(parentWidth * nativeHeight/nativeWidth, 10) : nativeHeight;
\t\t\t
\t\t\t// When we use percent, the newHeight can't be calculated so we get the container height
\t\t\tif (isNaN(newHeight) || ( parentHeight !== 0 && newHeight > parentHeight && parentHeight > nativeHeight)) {
\t\t\t\tnewHeight = parentHeight;
\t\t\t}
\t\t
\t\t\tif (t.container.parent().length > 0 && t.container.parent()[0].tagName.toLowerCase() === 'body') { // && t.container.siblings().count == 0) {
\t\t\t\tparentWidth = \$(window).width();
\t\t\t\tnewHeight = \$(window).height();
\t\t\t}
\t\t
\t\t\tif ( newHeight && parentWidth ) {
\t\t\t
\t\t\t\t// set outer container size
\t\t\t\tt.container
\t\t\t\t\t.width(parentWidth)
\t\t\t\t\t.height(newHeight);
\t\t\t\t
\t\t\t\t// set native <video> or <audio> and shims
\t\t\t\tt.\$media.add(t.container.find('.mejs-shim'))
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');
\t\t\t\t
\t\t\t\t// if shim is ready, send the size to the embeded plugin
\t\t\t\tif (t.isVideo) {
\t\t\t\t\tif (t.media.setVideoSize) {
\t\t\t\t\t\tt.media.setVideoSize(parentWidth, newHeight);
\t\t\t\t\t}
\t\t\t\t}
\t\t
\t\t\t\t// set the layers
\t\t\t\tt.layers.children('.mejs-layer')
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');
\t\t\t}
\t\t},
 
\t\tsetFillMode: function() {
\t\t\tvar t = this,
\t\t\t\tparent = t.outerContainer;
 
\t\t\tif (!parent.width()) {
\t\t\t\tparent.height(t.\$media.width());
\t\t\t}
 
\t\t\tif (!parent.height()) {
\t\t\t\tparent.height(t.\$media.height());
\t\t\t}
 
\t\t\tvar parentWidth = parent.width(),
\t\t\t\tparentHeight = parent.height();
\t\t\t
\t\t\tt.setDimensions('100%', '100%');
\t\t\t
\t\t\t// This prevents an issue when displaying poster
\t\t\tt.container.find('.mejs-poster img').css('display', 'block');
\t\t\t
\t\t\ttargetElement = t.container.find('object, embed, iframe, video');
\t\t\t
\t\t\t// calculate new width and height
\t\t\tvar initHeight = t.height,
\t\t\t\tinitWidth = t.width,
\t\t\t\t// scale to the target width
\t\t\t\tscaleX1 = parentWidth,
\t\t\t\tscaleY1 = (initHeight * parentWidth) / initWidth,
\t\t\t\t// scale to the target height
\t\t\t\tscaleX2 = (initWidth * parentHeight) / initHeight,
\t\t\t\tscaleY2 = parentHeight,
\t\t\t\t// now figure out which one we should use
\t\t\t\tbScaleOnWidth = !(scaleX2 > parentWidth),
\t\t\t\tfinalWidth = bScaleOnWidth ? Math.floor(scaleX1) : Math.floor(scaleX2),
\t\t\t\tfinalHeight = bScaleOnWidth ? Math.floor(scaleY1) : Math.floor(scaleY2);
\t\t\t
\t\t\tif (bScaleOnWidth) {
\t\t\t\ttargetElement.height(finalHeight).width(parentWidth);
\t\t\t\tif (t.media.setVideoSize) {
\t\t\t\t\tt.media.setVideoSize(parentWidth, finalHeight);
\t\t\t\t}
\t\t\t} else {
\t\t\t\ttargetElement.height(parentHeight).width(finalWidth);
\t\t\t\tif (t.media.setVideoSize) {
\t\t\t\t\tt.media.setVideoSize(finalWidth, parentHeight);
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\ttargetElement.css({
\t\t\t\t'margin-left': Math.floor((parentWidth - finalWidth) / 2),
\t\t\t\t'margin-top': 0
\t\t\t});
\t\t},
\t 
\t\tsetDimensions: function(width, height) {
\t\t\tvar t = this;
\t\t\t
\t\t\tt.container
\t\t\t\t.width(width)
\t\t\t\t.height(height);
\t\t\t
\t\t\tt.layers.children('.mejs-layer')
\t\t\t\t.width(width)
\t\t\t\t.height(height);
\t\t},

\t\tsetControlsSize: function() {
\t\t\tvar t = this,
\t\t\t\tusedWidth = 0,
\t\t\t\trailWidth = 0,
\t\t\t\trail = t.controls.find('.mejs-time-rail'),
\t\t\t\ttotal = t.controls.find('.mejs-time-total'),
\t\t\t\tothers = rail.siblings(),
\t\t\t\tlastControl = others.last(),
\t\t\t\tlastControlPosition = null,
\t\t\t\tavoidAutosizeProgress = t.options && !t.options.autosizeProgress;

\t\t\t// skip calculation if hidden
\t\t\tif (!t.container.is(':visible') || !rail.length || !rail.is(':visible')) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// allow the size to come from custom CSS
\t\t\tif (avoidAutosizeProgress) {
\t\t\t\t// Also, frontends devs can be more flexible
\t\t\t\t// due the opportunity of absolute positioning.
\t\t\t\trailWidth = parseInt(rail.css('width'), 10);
\t\t\t}

\t\t\t// attempt to autosize
\t\t\tif (railWidth === 0 || !railWidth) {

\t\t\t\t// find the size of all the other controls besides the rail
\t\t\t\tothers.each(function() {
\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\tif (\$this.css('position') != 'absolute' && \$this.is(':visible')) {
\t\t\t\t\t\tusedWidth += \$(this).outerWidth(true);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// fit the rail into the remaining space
\t\t\t\trailWidth = t.controls.width() - usedWidth - (rail.outerWidth(true) - rail.width());
\t\t\t}

\t\t\t// resize the rail,
\t\t\t// but then check if the last control (say, the fullscreen button) got pushed down
\t\t\t// this often happens when zoomed
\t\t\tdo {
\t\t\t\t// outer area
\t\t\t\t// we only want to set an inline style with the width of the rail
\t\t\t\t// if we're trying to autosize.
\t\t\t\tif (!avoidAutosizeProgress) {
\t\t\t\t\trail.width(railWidth);
\t\t\t\t}

\t\t\t\t// dark space
\t\t\t\ttotal.width(railWidth - (total.outerWidth(true) - total.width()));

\t\t\t\tif (lastControl.css('position') != 'absolute') {
\t\t\t\t\tlastControlPosition = lastControl.length ? lastControl.position() : null;
\t\t\t\t\trailWidth--;
\t\t\t\t}
\t\t\t} while (lastControlPosition !== null && lastControlPosition.top.toFixed(2) > 0 && railWidth > 0);

\t\t\tt.container.trigger('controlsresize');
\t\t},


\t\tbuildposter: function(player, controls, layers, media) {
\t\t\tvar t = this,
\t\t\t\tposter =
\t\t\t\t\$('<div class=\"mejs-poster mejs-layer\">' +
\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(layers),
\t\t\t\tposterUrl = player.\$media.attr('poster');

\t\t\t// prioriy goes to option (this is useful if you need to support iOS 3.x (iOS completely fails with poster)
\t\t\tif (player.options.poster !== '') {
\t\t\t\tposterUrl = player.options.poster;
\t\t\t}

\t\t\t// second, try the real poster
\t\t\tif ( posterUrl ) {
\t\t\t\tt.setPoster(posterUrl);
\t\t\t} else {
\t\t\t\tposter.hide();
\t\t\t}

\t\t\tmedia.addEventListener('play',function() {
\t\t\t\tposter.hide();
\t\t\t}, false);

\t\t\tif(player.options.showPosterWhenEnded && player.options.autoRewind){
\t\t\t\tmedia.addEventListener('ended',function() {
\t\t\t\t\tposter.show();
\t\t\t\t}, false);
\t\t\t}
\t\t},

\t\tsetPoster: function(url) {
\t\t\tvar t = this,
\t\t\t\tposterDiv = t.container.find('.mejs-poster'),
\t\t\t\tposterImg = posterDiv.find('img');

\t\t\tif (posterImg.length === 0) {
\t\t\t\tposterImg = \$('<img width=\"100%\" height=\"100%\" alt=\"\" />').appendTo(posterDiv);
\t\t\t}

\t\t\tposterImg.attr('src', url);
\t\t\tposterDiv.css({'background-image' : 'url(' + url + ')'});
\t\t},

\t\tbuildoverlays: function(player, controls, layers, media) {
\t\t\tvar t = this;
\t\t\tif (!player.isVideo)
\t\t\t\treturn;

\t\t\tvar
\t\t\tloading =
\t\t\t\t\$('<div class=\"mejs-overlay mejs-layer\">'+
\t\t\t\t\t'<div class=\"mejs-overlay-loading\"><span></span></div>'+
\t\t\t\t'</div>')
\t\t\t\t.hide() // start out hidden
\t\t\t\t.appendTo(layers),
\t\t\terror =
\t\t\t\t\$('<div class=\"mejs-overlay mejs-layer\">'+
\t\t\t\t\t'<div class=\"mejs-overlay-error\"></div>'+
\t\t\t\t'</div>')
\t\t\t\t.hide() // start out hidden
\t\t\t\t.appendTo(layers),
\t\t\t// this needs to come last so it's on top
\t\t\tbigPlay =
\t\t\t\t\$('<div class=\"mejs-overlay mejs-layer mejs-overlay-play\">'+
\t\t\t\t\t'<div class=\"mejs-overlay-button\" role=\"button\" aria-label=\"' + mejs.i18n.t('mejs.play') + '\" aria-pressed=\"false\"></div>'+
\t\t\t\t'</div>')
\t\t\t\t.appendTo(layers)
\t\t\t\t.bind('click', function() {\t // Removed 'touchstart' due issues on Samsung Android devices where a tap on bigPlay started and immediately stopped the video
\t\t\t\t\tif (t.options.clickToPlayPause) {
\t\t\t\t\t\tif (media.paused) {
\t\t\t\t\t\t\tmedia.play();
\t\t\t\t\t\t}

\t\t\t\t\t\tvar button = \$(this).find('.mejs-overlay-button'),
\t\t\t\t\t\t\tpressed = button.attr('aria-pressed');
\t\t\t\t\t\tbutton.attr('aria-pressed', !!pressed);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t/*
\t\t\tif (mejs.MediaFeatures.isiOS || mejs.MediaFeatures.isAndroid) {
\t\t\t\tbigPlay.remove();
\t\t\t\tloading.remove();
\t\t\t}
\t\t\t*/


\t\t\t// show/hide big play button
\t\t\tmedia.addEventListener('play',function() {
\t\t\t\tbigPlay.hide();
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t\terror.hide();
\t\t\t}, false);

\t\t\tmedia.addEventListener('playing', function() {
\t\t\t\tbigPlay.hide();
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t\terror.hide();
\t\t\t}, false);

\t\t\tmedia.addEventListener('seeking', function() {
\t\t\t\tloading.show();
\t\t\t\tcontrols.find('.mejs-time-buffering').show();
\t\t\t}, false);

\t\t\tmedia.addEventListener('seeked', function() {
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t}, false);

\t\t\tmedia.addEventListener('pause',function() {
\t\t\t\tif (!mejs.MediaFeatures.isiPhone) {
\t\t\t\t\tbigPlay.show();
\t\t\t\t}
\t\t\t}, false);

\t\t\tmedia.addEventListener('waiting', function() {
\t\t\t\tloading.show();
\t\t\t\tcontrols.find('.mejs-time-buffering').show();
\t\t\t}, false);


\t\t\t// show/hide loading
\t\t\tmedia.addEventListener('loadeddata',function() {
\t\t\t\t// for some reason Chrome is firing this event
\t\t\t\t//if (mejs.MediaFeatures.isChrome && media.getAttribute && media.getAttribute('preload') === 'none')
\t\t\t\t//\treturn;

\t\t\t\tloading.show();
\t\t\t\tcontrols.find('.mejs-time-buffering').show();
\t\t\t\t// Firing the 'canplay' event after a timeout which isn't getting fired on some Android 4.1 devices (https://github.com/johndyer/mediaelement/issues/1305)
\t\t\t\tif (mejs.MediaFeatures.isAndroid) {
\t\t\t\t\tmedia.canplayTimeout = window.setTimeout(
\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\tif (document.createEvent) {
\t\t\t\t\t\t\t\tvar evt = document.createEvent('HTMLEvents');
\t\t\t\t\t\t\t\tevt.initEvent('canplay', true, true);
\t\t\t\t\t\t\t\treturn media.dispatchEvent(evt);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 300
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmedia.addEventListener('canplay',function() {
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t\tclearTimeout(media.canplayTimeout); // Clear timeout inside 'loadeddata' to prevent 'canplay' to fire twice
\t\t\t}, false);

\t\t\t// error handling
\t\t\tmedia.addEventListener('error',function(e) {
\t\t\t\tt.handleError(e);
\t\t\t\tloading.hide();
\t\t\t\tbigPlay.hide();
\t\t\t\terror.show();
\t\t\t\terror.find('.mejs-overlay-error').html(\"Error loading this resource\");
\t\t\t}, false);

\t\t\tmedia.addEventListener('keydown', function(e) {
\t\t\t\tt.onkeydown(player, media, e);
\t\t\t}, false);
\t\t},

\t\tbuildkeyboard: function(player, controls, layers, media) {

\t\t\t\tvar t = this;

\t\t\t\tt.container.keydown(function () {
\t\t\t\t\tt.keyboardAction = true;
\t\t\t\t});

\t\t\t\t// listen for key presses
\t\t\t\tt.globalBind('keydown', function(event) {
\t\t\t\t\tplayer.hasFocus = \$(event.target).closest('.mejs-container').length !== 0
\t\t\t\t\t\t&& \$(event.target).closest('.mejs-container').attr('id') === player.\$media.closest('.mejs-container').attr('id');
\t\t\t\t\treturn t.onkeydown(player, media, event);
\t\t\t\t});


\t\t\t\t// check if someone clicked outside a player region, then kill its focus
\t\t\t\tt.globalBind('click', function(event) {
\t\t\t\t\tplayer.hasFocus = \$(event.target).closest('.mejs-container').length !== 0;
\t\t\t\t});

\t\t},
\t\tonkeydown: function(player, media, e) {
\t\t\tif (player.hasFocus && player.options.enableKeyboard) {
\t\t\t\t// find a matching key
\t\t\t\tfor (var i = 0, il = player.options.keyActions.length; i < il; i++) {
\t\t\t\t\tvar keyAction = player.options.keyActions[i];

\t\t\t\t\tfor (var j = 0, jl = keyAction.keys.length; j < jl; j++) {
\t\t\t\t\t\tif (e.keyCode == keyAction.keys[j]) {
\t\t\t\t\t\t\tif (typeof(e.preventDefault) == \"function\") e.preventDefault();
\t\t\t\t\t\t\tkeyAction.action(player, media, e.keyCode, e);
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn true;
\t\t},

\t\tfindTracks: function() {
\t\t\tvar t = this,
\t\t\t\ttracktags = t.\$media.find('track');

\t\t\t// store for use by plugins
\t\t\tt.tracks = [];
\t\t\ttracktags.each(function(index, track) {

\t\t\t\ttrack = \$(track);

\t\t\t\tt.tracks.push({
\t\t\t\t\tsrclang: (track.attr('srclang')) ? track.attr('srclang').toLowerCase() : '',
\t\t\t\t\tsrc: track.attr('src'),
\t\t\t\t\tkind: track.attr('kind'),
\t\t\t\t\tlabel: track.attr('label') || '',
\t\t\t\t\tentries: [],
\t\t\t\t\tisLoaded: false
\t\t\t\t});
\t\t\t});
\t\t},
\t\tchangeSkin: function(className) {
\t\t\tthis.container[0].className = 'mejs-container ' + className;
\t\t\tthis.setPlayerSize(this.width, this.height);
\t\t\tthis.setControlsSize();
\t\t},
\t\tplay: function() {
\t\t\tthis.load();
\t\t\tthis.media.play();
\t\t},
\t\tpause: function() {
\t\t\ttry {
\t\t\t\tthis.media.pause();
\t\t\t} catch (e) {}
\t\t},
\t\tload: function() {
\t\t\tif (!this.isLoaded) {
\t\t\t\tthis.media.load();
\t\t\t}

\t\t\tthis.isLoaded = true;
\t\t},
\t\tsetMuted: function(muted) {
\t\t\tthis.media.setMuted(muted);
\t\t},
\t\tsetCurrentTime: function(time) {
\t\t\tthis.media.setCurrentTime(time);
\t\t},
\t\tgetCurrentTime: function() {
\t\t\treturn this.media.currentTime;
\t\t},
\t\tsetVolume: function(volume) {
\t\t\tthis.media.setVolume(volume);
\t\t},
\t\tgetVolume: function() {
\t\t\treturn this.media.volume;
\t\t},
\t\tsetSrc: function(src) {
\t\t\tvar
\t\t\t\tt = this;

\t\t\t// If using YouTube, its API is different to load a specific source
\t\t\tif (t.media.pluginType === 'youtube') {
\t\t\t\tvar videoId;

\t\t\t\tif (typeof src !== 'string') {
\t\t\t\t\tvar i, media;

\t\t\t\t\tfor (i=0; i<src.length; i++) {
\t\t\t\t\t\tmedia = src[i];
\t\t\t\t\t\tif (this.canPlayType(media.type)) {
\t\t\t\t\t\t\tsrc = media.src;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// youtu.be url from share button
\t\t\t\tif (src.lastIndexOf('youtu.be') !== -1) {
\t\t\t\t\tvideoId = src.substr(src.lastIndexOf('/') + 1);

\t\t\t\t\tif (videoId.indexOf('?') !== -1) {
\t\t\t\t\t\tvideoId = videoId.substr(0, videoId.indexOf('?'));
\t\t\t\t\t}

\t\t\t\t} else {
\t\t\t\t\t// https://www.youtube.com/watch?v=
\t\t\t\t\tvar videoIdMatch = src.match(/[?&]v=([^&#]+)|&|#|\$/);

\t\t\t\t\tif (videoIdMatch) {
\t\t\t\t\t\tvideoId = videoIdMatch[1];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (t.media.getAttribute('autoplay') !== null) {
\t\t\t\t\tt.media.pluginApi.loadVideoById(videoId);
\t\t\t\t} else {
\t\t\t\t\tt.media.pluginApi.cueVideoById(videoId);
\t\t\t\t}

\t\t\t}
\t\t\telse {
\t\t\t\tt.media.setSrc(src);
\t\t\t}
\t\t},
\t\tremove: function() {
\t\t\tvar t = this, featureIndex, feature;

\t\t\tt.container.prev('.mejs-offscreen').remove();

\t\t\t// invoke features cleanup
\t\t\tfor (featureIndex in t.options.features) {
\t\t\t\tfeature = t.options.features[featureIndex];
\t\t\t\tif (t['clean' + feature]) {
\t\t\t\t\ttry {
\t\t\t\t\t\tt['clean' + feature](t);
\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t// TODO: report control error
\t\t\t\t\t\t//throw e;
\t\t\t\t\t\t//
\t\t\t\t\t\t//
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// grab video and put it back in place
\t\t\tif (!t.isDynamic) {
\t\t\t\tt.\$media.prop('controls', true);
\t\t\t\t// detach events from the video
\t\t\t\t// TODO: detach event listeners better than this;
\t\t\t\t//\t\t also detach ONLY the events attached by this plugin!
\t\t\t\tt.\$node.clone().insertBefore(t.container).show();
\t\t\t\tt.\$node.remove();
\t\t\t} else {
\t\t\t\tt.\$node.insertBefore(t.container);
\t\t\t}

\t\t\tif (t.media.pluginType !== 'native') {
\t\t\t\tt.media.remove();
\t\t\t}

\t\t\t// Remove the player from the mejs.players object so that pauseOtherPlayers doesn't blow up when trying to pause a non existance flash api.
\t\t\tdelete mejs.players[t.id];

\t\t\tif (typeof t.container == 'object') {
\t\t\t\tt.container.remove();
\t\t\t}
\t\t\tt.globalUnbind();
\t\t\tdelete t.node.player;
\t\t},
\t\trebuildtracks: function(){
\t\t\tvar t = this;
\t\t\tt.findTracks();
\t\t\tt.buildtracks(t, t.controls, t.layers, t.media);
\t\t},
\t\tresetSize: function(){
\t\t\tvar t = this;
\t\t\t// webkit has trouble doing this without a delay
\t\t\tsetTimeout(function () {
\t\t\t\t//
\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\tt.setControlsSize();
\t\t\t}, 50);
\t\t}
\t};

\t(function(){
\t\tvar rwindow = /^((after|before)print|(before)?unload|hashchange|message|o(ff|n)line|page(hide|show)|popstate|resize|storage)\\b/;

\t\tfunction splitEvents(events, id) {
\t\t\t// add player ID as an event namespace so it's easier to unbind them all later
\t\t\tvar ret = {d: [], w: []};
\t\t\t\$.each((events || '').split(' '), function(k, v){
\t\t\t\tvar eventname = v + '.' + id;
\t\t\t\tif (eventname.indexOf('.') === 0) {
\t\t\t\t\tret.d.push(eventname);
\t\t\t\t\tret.w.push(eventname);
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tret[rwindow.test(v) ? 'w' : 'd'].push(eventname);
\t\t\t\t}
\t\t\t});
\t\t\tret.d = ret.d.join(' ');
\t\t\tret.w = ret.w.join(' ');
\t\t\treturn ret;
\t\t}

\t\tmejs.MediaElementPlayer.prototype.globalBind = function(events, data, callback) {
\t\t\tvar t = this;
\t\t\tvar doc = t.node ? t.node.ownerDocument : document;

\t\t\tevents = splitEvents(events, t.id);
\t\t\tif (events.d) \$(doc).bind(events.d, data, callback);
\t\t\tif (events.w) \$(window).bind(events.w, data, callback);
\t\t};

\t\tmejs.MediaElementPlayer.prototype.globalUnbind = function(events, callback) {
\t\t\tvar t = this;
\t\t\tvar doc = t.node ? t.node.ownerDocument : document;

\t\t\tevents = splitEvents(events, t.id);
\t\t\tif (events.d) \$(doc).unbind(events.d, callback);
\t\t\tif (events.w) \$(window).unbind(events.w, callback);
\t\t};
\t})();

\t// turn into jQuery plugin
\tif (typeof \$ != 'undefined') {
\t\t\$.fn.mediaelementplayer = function (options) {
\t\t\tif (options === false) {
\t\t\t\tthis.each(function () {
\t\t\t\t\tvar player = \$(this).data('mediaelementplayer');
\t\t\t\t\tif (player) {
\t\t\t\t\t\tplayer.remove();
\t\t\t\t\t}
\t\t\t\t\t\$(this).removeData('mediaelementplayer');
\t\t\t\t});
\t\t\t}
\t\t\telse {
\t\t\t\tthis.each(function () {
\t\t\t\t\t\$(this).data('mediaelementplayer', new mejs.MediaElementPlayer(this, options));
\t\t\t\t});
\t\t\t}
\t\t\treturn this;
\t\t};


\t\t\$(document).ready(function() {
\t\t\t// auto enable using JSON attribute
\t\t\t\$('.mejs-player').mediaelementplayer();
\t\t});
\t}

\t// push out to window
\twindow.MediaElementPlayer = mejs.MediaElementPlayer;

})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tplayText: '',
\t\tpauseText: ''
\t});


\t// PLAY/pause BUTTON
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildplaypause: function(player, controls, layers, media) {
\t\t\tvar 
\t\t\t\tt = this,
\t\t\t\top = t.options,
\t\t\t\tplayTitle = op.playText ? op.playText : mejs.i18n.t('mejs.play'),
\t\t\t\tpauseTitle = op.pauseText ? op.pauseText : mejs.i18n.t('mejs.pause'),
\t\t\t\tplay =
\t\t\t\t\$('<div class=\"mejs-button mejs-playpause-button mejs-play\" >' +
\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + playTitle + '\" aria-label=\"' + pauseTitle + '\"></button>' +
\t\t\t\t'</div>')
\t\t\t\t.appendTo(controls)
\t\t\t\t.click(function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t
\t\t\t\t\tif (media.paused) {
\t\t\t\t\t\tmedia.play();
\t\t\t\t\t} else {
\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\treturn false;
\t\t\t\t}),
\t\t\t\tplay_btn = play.find('button');


\t\t\tfunction togglePlayPause(which) {
\t\t\t\tif ('play' === which) {
\t\t\t\t\tplay.removeClass('mejs-play').addClass('mejs-pause');
\t\t\t\t\tplay_btn.attr({
\t\t\t\t\t\t'title': pauseTitle,
\t\t\t\t\t\t'aria-label': pauseTitle
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\tplay.removeClass('mejs-pause').addClass('mejs-play');
\t\t\t\t\tplay_btn.attr({
\t\t\t\t\t\t'title': playTitle,
\t\t\t\t\t\t'aria-label': playTitle
\t\t\t\t\t});
\t\t\t\t}
\t\t\t};
\t\t\ttogglePlayPause('pse');


\t\t\tmedia.addEventListener('play',function() {
\t\t\t\ttogglePlayPause('play');
\t\t\t}, false);
\t\t\tmedia.addEventListener('playing',function() {
\t\t\t\ttogglePlayPause('play');
\t\t\t}, false);


\t\t\tmedia.addEventListener('pause',function() {
\t\t\t\ttogglePlayPause('pse');
\t\t\t}, false);
\t\t\tmedia.addEventListener('paused',function() {
\t\t\t\ttogglePlayPause('pse');
\t\t\t}, false);
\t\t}
\t});
\t
})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tstopText: 'Stop'
\t});

\t// STOP BUTTON
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildstop: function(player, controls, layers, media) {
\t\t\tvar t = this;

\t\t\t\$('<div class=\"mejs-button mejs-stop-button mejs-stop\">' +
\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + t.options.stopText + '\" aria-label=\"' + t.options.stopText + '\"></button>' +
\t\t\t\t'</div>')
\t\t\t\t.appendTo(controls)
\t\t\t\t.click(function() {
\t\t\t\t\tif (!media.paused) {
\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t}
\t\t\t\t\tif (media.currentTime > 0) {
\t\t\t\t\t\tmedia.setCurrentTime(0);
                        media.pause();
\t\t\t\t\t\tcontrols.find('.mejs-time-current').width('0px');
\t\t\t\t\t\tcontrols.find('.mejs-time-handle').css('left', '0px');
\t\t\t\t\t\tcontrols.find('.mejs-time-float-current').html( mejs.Utility.secondsToTimeCode(0, player.options));
\t\t\t\t\t\tcontrols.find('.mejs-currenttime').html( mejs.Utility.secondsToTimeCode(0, player.options));
\t\t\t\t\t\tlayers.find('.mejs-poster').show();
\t\t\t\t\t}
\t\t\t\t});
\t\t}
\t});
\t
})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\t// Enable tooltip that shows time in progress bar
\t\tenableProgressTooltip: true,
\t\tprogressHelpText: ''
\t});

\t// progress/loaded bar
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildprogress: function(player, controls, layers, media) {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tmouseIsDown = false,
\t\t\t\tmouseIsOver = false,
\t\t\t\tlastKeyPressTime = 0,
\t\t\t\tstartedPaused = false,
\t\t\t\tautoRewindInitial = player.options.autoRewind,
\t\t\t\tprogressTitle = t.options.progressHelpText ? t.options.progressHelpText : mejs.i18n.t('mejs.time-help-text'),
\t\t\t\ttooltip = player.options.enableProgressTooltip ? '<span class=\"mejs-time-float\">' +
\t\t\t\t\t'<span class=\"mejs-time-float-current\">00:00</span>' +
\t\t\t\t\t'<span class=\"mejs-time-float-corner\"></span>' +
\t\t\t\t'</span>' : \"\";

\t\t\t\$('<div class=\"mejs-time-rail\">' +
\t\t\t\t'<span  class=\"mejs-time-total mejs-time-slider\">' +
\t\t\t\t//'<span class=\"mejs-offscreen\">' + progressTitle + '</span>' +
\t\t\t\t\t'<span class=\"mejs-time-buffering\"></span>' +
\t\t\t\t\t'<span class=\"mejs-time-loaded\"></span>' +
\t\t\t\t\t'<span class=\"mejs-time-current\"></span>' +
\t\t\t\t\t'<span class=\"mejs-time-handle\"></span>' +
\t\t\t\t\t tooltip +
\t\t\t\t'</span>' +
\t\t\t'</div>')
\t\t\t\t.appendTo(controls);
\t\t\tcontrols.find('.mejs-time-buffering').hide();

\t\t\tt.total = controls.find('.mejs-time-total');
\t\t\tt.loaded  = controls.find('.mejs-time-loaded');
\t\t\tt.current  = controls.find('.mejs-time-current');
\t\t\tt.handle  = controls.find('.mejs-time-handle');
\t\t\tt.timefloat  = controls.find('.mejs-time-float');
\t\t\tt.timefloatcurrent  = controls.find('.mejs-time-float-current');
\t\t\tt.slider = controls.find('.mejs-time-slider');

\t\t\tvar handleMouseMove = function (e) {

\t\t\t\t\tvar offset = t.total.offset(),
\t\t\t\t\t\twidth = t.total.width(),
\t\t\t\t\t\tpercentage = 0,
\t\t\t\t\t\tnewTime = 0,
\t\t\t\t\t\tpos = 0,
\t\t\t\t\t\tx;

\t\t\t\t\t// mouse or touch position relative to the object
\t\t\t\t\tif (e.originalEvent && e.originalEvent.changedTouches) {
\t\t\t\t\t\tx = e.originalEvent.changedTouches[0].pageX;
\t\t\t\t\t} else if (e.changedTouches) { // for Zepto
\t\t\t\t\t\tx = e.changedTouches[0].pageX;
\t\t\t\t\t} else {
\t\t\t\t\t\tx = e.pageX;
\t\t\t\t\t}

\t\t\t\t\tif (media.duration) {
\t\t\t\t\t\tif (x < offset.left) {
\t\t\t\t\t\t\tx = offset.left;
\t\t\t\t\t\t} else if (x > width + offset.left) {
\t\t\t\t\t\t\tx = width + offset.left;
\t\t\t\t\t\t}

\t\t\t\t\t\tpos = x - offset.left;
\t\t\t\t\t\tpercentage = (pos / width);
\t\t\t\t\t\tnewTime = (percentage <= 0.02) ? 0 : percentage * media.duration;

\t\t\t\t\t\t// seek to where the mouse is
\t\t\t\t\t\tif (mouseIsDown && newTime !== media.currentTime) {
\t\t\t\t\t\t\tmedia.setCurrentTime(newTime);
\t\t\t\t\t\t}

\t\t\t\t\t\t// position floating time box
\t\t\t\t\t\tif (!mejs.MediaFeatures.hasTouch) {
\t\t\t\t\t\t\tt.timefloat.css('left', pos);
\t\t\t\t\t\t\tt.timefloatcurrent.html( mejs.Utility.secondsToTimeCode(newTime, player.options) );
\t\t\t\t\t\t\tt.timefloat.show();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t// Accessibility for slider
\t\t\t\tupdateSlider = function (e) {

\t\t\t\t\tvar seconds = media.currentTime,
\t\t\t\t\t\ttimeSliderText = mejs.i18n.t('mejs.time-slider'),
\t\t\t\t\t\ttime = mejs.Utility.secondsToTimeCode(seconds, player.options),
\t\t\t\t\t\tduration = media.duration;

\t\t\t\t\tt.slider.attr({
\t\t\t\t\t\t'aria-label': timeSliderText,
\t\t\t\t\t\t'aria-valuemin': 0,
\t\t\t\t\t\t'aria-valuemax': duration,
\t\t\t\t\t\t'aria-valuenow': seconds,
\t\t\t\t\t\t'aria-valuetext': time,
\t\t\t\t\t\t'role': 'slider',
\t\t\t\t\t\t'tabindex': 0
\t\t\t\t\t});

\t\t\t\t},
\t\t\t\trestartPlayer = function () {
\t\t\t\t\tvar now = new Date();
\t\t\t\t\tif (now - lastKeyPressTime >= 1000) {
\t\t\t\t\t\tmedia.play();
\t\t\t\t\t}
\t\t\t\t};

\t\t\tt.slider.bind('focus', function (e) {
\t\t\t\tplayer.options.autoRewind = false;
\t\t\t});

\t\t\tt.slider.bind('blur', function (e) {
\t\t\t\tplayer.options.autoRewind = autoRewindInitial;
\t\t\t});

\t\t\tt.slider.bind('keydown', function (e) {

\t\t\t\tif ((new Date() - lastKeyPressTime) >= 1000) {
\t\t\t\t\tstartedPaused = media.paused;
\t\t\t\t}

\t\t\t\tvar keyCode = e.keyCode,
\t\t\t\t\tduration = media.duration,
\t\t\t\t\tseekTime = media.currentTime,
\t\t\t\t\tseekForward  = player.options.defaultSeekForwardInterval(media),
\t\t\t\t\tseekBackward = player.options.defaultSeekBackwardInterval(media);

\t\t\t\tswitch (keyCode) {
\t\t\t\t\tcase 37: // left
\t\t\t\t\tcase 40: // Down
\t\t\t\t\t\tseekTime -= seekBackward;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 39: // Right
\t\t\t\t\tcase 38: // Up
\t\t\t\t\t\tseekTime += seekForward;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 36: // Home
\t\t\t\t\t\tseekTime = 0;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 35: // end
\t\t\t\t\t\tseekTime = duration;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 32: // space
\t\t\t\t\tcase 13: // enter
\t\t\t\t\t\tmedia.paused ? media.play() : media.pause();
\t\t\t\t\t\treturn;
\t\t\t\t\tdefault:
\t\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tseekTime = seekTime < 0 ? 0 : (seekTime >= duration ? duration : Math.floor(seekTime));
\t\t\t\tlastKeyPressTime = new Date();
\t\t\t\tif (!startedPaused) {
\t\t\t\t\tmedia.pause();
\t\t\t\t}

\t\t\t\tif (seekTime < media.duration && !startedPaused) {
\t\t\t\t\tsetTimeout(restartPlayer, 1100);
\t\t\t\t}

\t\t\t\tmedia.setCurrentTime(seekTime);

\t\t\t\te.preventDefault();
\t\t\t\te.stopPropagation();
\t\t\t\treturn false;
\t\t\t});


\t\t\t// handle clicks
\t\t\t//controls.find('.mejs-time-rail').delegate('span', 'click', handleMouseMove);
\t\t\tt.total
\t\t\t\t.bind('mousedown touchstart', function (e) {
\t\t\t\t\t// only handle left clicks or touch
\t\t\t\t\tif (e.which === 1 || e.which === 0) {
\t\t\t\t\t\tmouseIsDown = true;
\t\t\t\t\t\thandleMouseMove(e);
\t\t\t\t\t\tt.globalBind('mousemove.dur touchmove.dur', function(e) {
\t\t\t\t\t\t\thandleMouseMove(e);
\t\t\t\t\t\t});
\t\t\t\t\t\tt.globalBind('mouseup.dur touchend.dur', function (e) {
\t\t\t\t\t\t\tmouseIsDown = false;
\t\t\t\t\t\t\tif (typeof t.timefloat !== 'undefined') {
\t\t\t\t\t\t\t\tt.timefloat.hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tt.globalUnbind('.dur');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.bind('mouseenter', function(e) {
\t\t\t\t\tmouseIsOver = true;
\t\t\t\t\tt.globalBind('mousemove.dur', function(e) {
\t\t\t\t\t\thandleMouseMove(e);
\t\t\t\t\t});
\t\t\t\t\tif (typeof t.timefloat !== 'undefined' && !mejs.MediaFeatures.hasTouch) {
\t\t\t\t\t\tt.timefloat.show();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.bind('mouseleave',function(e) {
\t\t\t\t\tmouseIsOver = false;
\t\t\t\t\tif (!mouseIsDown) {
\t\t\t\t\t\tt.globalUnbind('.dur');
\t\t\t\t\t\tif (typeof t.timefloat !== 'undefined') {
\t\t\t\t\t\t\tt.timefloat.hide();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t// loading
\t\t\tmedia.addEventListener('progress', function (e) {
\t\t\t\tplayer.setProgressRail(e);
\t\t\t\tplayer.setCurrentRail(e);
\t\t\t}, false);

\t\t\t// current time
\t\t\tmedia.addEventListener('timeupdate', function(e) {
\t\t\t\tplayer.setProgressRail(e);
\t\t\t\tplayer.setCurrentRail(e);
\t\t\t\tupdateSlider(e);
\t\t\t}, false);

\t\t\tt.container.on('controlsresize', function(e) {
\t\t\t\tplayer.setProgressRail(e);
\t\t\t\tplayer.setCurrentRail(e);
\t\t\t});
\t\t},
\t\tsetProgressRail: function(e) {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ttarget = (e !== undefined) ? e.target : t.media,
\t\t\t\tpercent = null;

\t\t\t// newest HTML5 spec has buffered array (FF4, Webkit)
\t\t\tif (target && target.buffered && target.buffered.length > 0 && target.buffered.end && target.duration) {
\t\t\t\t// account for a real array with multiple values - always read the end of the last buffer
\t\t\t\tpercent = target.buffered.end(target.buffered.length - 1) / target.duration;
\t\t\t} 
\t\t\t// Some browsers (e.g., FF3.6 and Safari 5) cannot calculate target.bufferered.end()
\t\t\t// to be anything other than 0. If the byte count is available we use this instead.
\t\t\t// Browsers that support the else if do not seem to have the bufferedBytes value and
\t\t\t// should skip to there. Tested in Safari 5, Webkit head, FF3.6, Chrome 6, IE 7/8.
\t\t\telse if (target && target.bytesTotal !== undefined && target.bytesTotal > 0 && target.bufferedBytes !== undefined) {
\t\t\t\tpercent = target.bufferedBytes / target.bytesTotal;
\t\t\t}
\t\t\t// Firefox 3 with an Ogg file seems to go this way
\t\t\telse if (e && e.lengthComputable && e.total !== 0) {
\t\t\t\tpercent = e.loaded / e.total;
\t\t\t}

\t\t\t// finally update the progress bar
\t\t\tif (percent !== null) {
\t\t\t\tpercent = Math.min(1, Math.max(0, percent));
\t\t\t\t// update loaded bar
\t\t\t\tif (t.loaded && t.total) {
\t\t\t\t\tt.loaded.width(t.total.width() * percent);
\t\t\t\t}
\t\t\t}
\t\t},
\t\tsetCurrentRail: function() {

\t\t\tvar t = this;
\t\t
\t\t\tif (t.media.currentTime !== undefined && t.media.duration) {

\t\t\t\t// update bar and handle
\t\t\t\tif (t.total && t.handle) {
\t\t\t\t\tvar 
\t\t\t\t\t\tnewWidth = Math.round(t.total.width() * t.media.currentTime / t.media.duration),
\t\t\t\t\t\thandlePos = newWidth - Math.round(t.handle.outerWidth(true) / 2);

\t\t\t\t\tt.current.width(newWidth);
\t\t\t\t\tt.handle.css('left', handlePos);
\t\t\t\t}
\t\t\t}

\t\t}
\t});
})(mejs.\$);

(function(\$) {
\t
\t// options
\t\$.extend(mejs.MepDefaults, {
\t\tduration: -1,
\t\ttimeAndDurationSeparator: '<span> | </span>'
\t});


\t// current and duration 00:00 / 00:00
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildcurrent: function(player, controls, layers, media) {
\t\t\tvar t = this;
\t\t\t
\t\t\t\$('<div class=\"mejs-time\" role=\"timer\" aria-live=\"off\">' +
\t\t\t\t\t'<span class=\"mejs-currenttime\">' + 
\t\t\t\t\t\tmejs.Utility.secondsToTimeCode(0, player.options) +
                    '</span>'+
\t\t\t\t'</div>')
\t\t\t.appendTo(controls);
\t\t\t
\t\t\tt.currenttime = t.controls.find('.mejs-currenttime');

\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\tif (t.controlsAreVisible) {
\t\t\t\t\tplayer.updateCurrent();
\t\t\t\t}

\t\t\t}, false);
\t\t},


\t\tbuildduration: function(player, controls, layers, media) {
\t\t\tvar t = this;
\t\t\t
\t\t\tif (controls.children().last().find('.mejs-currenttime').length > 0) {
\t\t\t\t\$(t.options.timeAndDurationSeparator +
\t\t\t\t\t'<span class=\"mejs-duration\">' + 
\t\t\t\t\t\tmejs.Utility.secondsToTimeCode(t.options.duration, t.options) +
\t\t\t\t\t'</span>')
\t\t\t\t\t.appendTo(controls.find('.mejs-time'));
\t\t\t} else {

\t\t\t\t// add class to current time
\t\t\t\tcontrols.find('.mejs-currenttime').parent().addClass('mejs-currenttime-container');
\t\t\t\t
\t\t\t\t\$('<div class=\"mejs-time mejs-duration-container\">'+
\t\t\t\t\t'<span class=\"mejs-duration\">' + 
\t\t\t\t\t\tmejs.Utility.secondsToTimeCode(t.options.duration, t.options) +
\t\t\t\t\t'</span>' +
\t\t\t\t'</div>')
\t\t\t\t.appendTo(controls);
\t\t\t}
\t\t\t
\t\t\tt.durationD = t.controls.find('.mejs-duration');

\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\tif (t.controlsAreVisible) {
\t\t\t\t\tplayer.updateDuration();
\t\t\t\t}
\t\t\t}, false);
\t\t},
\t\t
\t\tupdateCurrent:  function() {
\t\t\tvar t = this;
\t\t\t
\t\t\tvar currentTime = t.media.currentTime;
\t\t\t
\t\t\tif (isNaN(currentTime)) {
\t\t\t\tcurrentTime = 0;
\t\t\t}

\t\t\tif (t.currenttime) {
\t\t\t\tt.currenttime.html(mejs.Utility.secondsToTimeCode(currentTime, t.options));
\t\t\t}
\t\t},
\t\t
\t\tupdateDuration: function() {
\t\t\tvar t = this;
\t\t\t
\t\t\tvar duration = t.media.duration;
\t\t\tif (t.options.duration > 0) {
\t\t\t\tduration = t.options.duration;
\t\t\t}
\t\t\t
\t\t\tif (isNaN(duration)) {
\t\t\t\tduration = 0;
\t\t\t}

\t\t\t//Toggle the long video class if the video is longer than an hour.
\t\t\tt.container.toggleClass(\"mejs-long-video\", duration > 3600);
\t\t\t
\t\t\tif (t.durationD && duration > 0) {
\t\t\t\tt.durationD.html(mejs.Utility.secondsToTimeCode(duration, t.options));
\t\t\t}\t\t
\t\t}
\t});

})(mejs.\$);

(function (\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tmuteText: mejs.i18n.t('mejs.mute-toggle'),
\t\tallyVolumeControlText: mejs.i18n.t('mejs.volume-help-text'),
\t\thideVolumeOnTouchDevices: true,

\t\taudioVolume: 'horizontal',
\t\tvideoVolume: 'vertical'
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildvolume: function (player, controls, layers, media) {

\t\t\t// Android and iOS don't support volume controls
\t\t\tif ((mejs.MediaFeatures.isAndroid || mejs.MediaFeatures.isiOS) && this.options.hideVolumeOnTouchDevices)
\t\t\t\treturn;

\t\t\tvar t = this,
\t\t\t\tmode = (t.isVideo) ? t.options.videoVolume : t.options.audioVolume,
\t\t\t\tmute = (mode == 'horizontal') ?

\t\t\t\t\t// horizontal version
\t\t\t\t\t\$('<div class=\"mejs-button mejs-volume-button mejs-mute\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id +
\t\t\t\t\t\t'\" title=\"' + t.options.muteText +
\t\t\t\t\t\t'\" aria-label=\"' + t.options.muteText +
\t\t\t\t\t\t'\"></button>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'<a href=\"javascript:void(0);\" class=\"mejs-horizontal-volume-slider\">' + // outer background
\t\t\t\t\t\t'<span class=\"mejs-offscreen\">' + t.options.allyVolumeControlText + '</span>' +
\t\t\t\t\t\t'<div class=\"mejs-horizontal-volume-total\"></div>' + // line background
\t\t\t\t\t\t'<div class=\"mejs-horizontal-volume-current\"></div>' + // current volume
\t\t\t\t\t\t'<div class=\"mejs-horizontal-volume-handle\"></div>' + // handle
\t\t\t\t\t\t'</a>'
\t\t\t\t\t)
\t\t\t\t\t.appendTo(controls) :

\t\t\t\t\t// vertical version
\t\t\t\t\t\$('<div class=\"mejs-button mejs-volume-button mejs-mute\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id +
\t\t\t\t\t\t'\" title=\"' + t.options.muteText +
\t\t\t\t\t\t'\" aria-label=\"' + t.options.muteText +
\t\t\t\t\t\t'\"></button>' +
\t\t\t\t\t\t'<a href=\"javascript:void(0);\" class=\"mejs-volume-slider\">' + // outer background
\t\t\t\t\t\t'<span class=\"mejs-offscreen\">' + t.options.allyVolumeControlText + '</span>' +
\t\t\t\t\t\t'<div class=\"mejs-volume-total\"></div>' + // line background
\t\t\t\t\t\t'<div class=\"mejs-volume-current\"></div>' + // current volume
\t\t\t\t\t\t'<div class=\"mejs-volume-handle\"></div>' + // handle
\t\t\t\t\t\t'</a>' +
\t\t\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(controls),
\t\t\t\tvolumeSlider = t.container.find('.mejs-volume-slider, .mejs-horizontal-volume-slider'),
\t\t\t\tvolumeTotal = t.container.find('.mejs-volume-total, .mejs-horizontal-volume-total'),
\t\t\t\tvolumeCurrent = t.container.find('.mejs-volume-current, .mejs-horizontal-volume-current'),
\t\t\t\tvolumeHandle = t.container.find('.mejs-volume-handle, .mejs-horizontal-volume-handle'),

\t\t\t\tpositionVolumeHandle = function (volume, secondTry) {

\t\t\t\t\tif (!volumeSlider.is(':visible') && typeof secondTry == 'undefined') {
\t\t\t\t\t\tvolumeSlider.show();
\t\t\t\t\t\tpositionVolumeHandle(volume, true);
\t\t\t\t\t\tvolumeSlider.hide();
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t// correct to 0-1
\t\t\t\t\tvolume = Math.max(0, volume);
\t\t\t\t\tvolume = Math.min(volume, 1);

\t\t\t\t\t// adjust mute button style
\t\t\t\t\tif (volume === 0) {
\t\t\t\t\t\tmute.removeClass('mejs-mute').addClass('mejs-unmute');
\t\t\t\t\t\tmute.children('button').attr('title', mejs.i18n.t('mejs.unmute')).attr('aria-label', mejs.i18n.t('mejs.unmute'));
\t\t\t\t\t} else {
\t\t\t\t\t\tmute.removeClass('mejs-unmute').addClass('mejs-mute');
\t\t\t\t\t\tmute.children('button').attr('title', mejs.i18n.t('mejs.mute')).attr('aria-label', mejs.i18n.t('mejs.mute'));
\t\t\t\t\t}

\t\t\t\t\t// top/left of full size volume slider background
\t\t\t\t\tvar totalPosition = volumeTotal.position();
\t\t\t\t\t// position slider
\t\t\t\t\tif (mode == 'vertical') {
\t\t\t\t\t\tvar
\t\t\t\t\t\t\t// height of the full size volume slider background
\t\t\t\t\t\t\ttotalHeight = volumeTotal.height(),

\t\t\t\t\t\t\t// the new top position based on the current volume
\t\t\t\t\t\t\t// 70% volume on 100px height == top:30px
\t\t\t\t\t\t\tnewTop = totalHeight - (totalHeight * volume);

\t\t\t\t\t\t// handle
\t\t\t\t\t\tvolumeHandle.css('top', Math.round(totalPosition.top + newTop - (volumeHandle.height() / 2)));

\t\t\t\t\t\t// show the current visibility
\t\t\t\t\t\tvolumeCurrent.height(totalHeight - newTop);
\t\t\t\t\t\tvolumeCurrent.css('top', totalPosition.top + newTop);
\t\t\t\t\t} else {
\t\t\t\t\t\tvar
\t\t\t\t\t\t\t// height of the full size volume slider background
\t\t\t\t\t\t\ttotalWidth = volumeTotal.width(),

\t\t\t\t\t\t\t// the new left position based on the current volume
\t\t\t\t\t\t\tnewLeft = totalWidth * volume;

\t\t\t\t\t\t// handle
\t\t\t\t\t\tvolumeHandle.css('left', Math.round(totalPosition.left + newLeft - (volumeHandle.width() / 2)));

\t\t\t\t\t\t// rezize the current part of the volume bar
\t\t\t\t\t\tvolumeCurrent.width(Math.round(newLeft));
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\thandleVolumeMove = function (e) {

\t\t\t\t\tvar volume = null,
\t\t\t\t\t\ttotalOffset = volumeTotal.offset();

\t\t\t\t\t// calculate the new volume based on the moust position
\t\t\t\t\tif (mode === 'vertical') {

\t\t\t\t\t\tvar
\t\t\t\t\t\t\trailHeight = volumeTotal.height(),
\t\t\t\t\t\t\tnewY = e.pageY - totalOffset.top;

\t\t\t\t\t\tvolume = (railHeight - newY) / railHeight;

\t\t\t\t\t\t// the controls just hide themselves (usually when mouse moves too far up)
\t\t\t\t\t\tif (totalOffset.top === 0 || totalOffset.left === 0) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t} else {
\t\t\t\t\t\tvar
\t\t\t\t\t\t\trailWidth = volumeTotal.width(),
\t\t\t\t\t\t\tnewX = e.pageX - totalOffset.left;

\t\t\t\t\t\tvolume = newX / railWidth;
\t\t\t\t\t}

\t\t\t\t\t// ensure the volume isn't outside 0-1
\t\t\t\t\tvolume = Math.max(0, volume);
\t\t\t\t\tvolume = Math.min(volume, 1);

\t\t\t\t\t// position the slider and handle
\t\t\t\t\tpositionVolumeHandle(volume);

\t\t\t\t\t// set the media object (this will trigger the volumechanged event)
\t\t\t\t\tif (volume === 0) {
\t\t\t\t\t\tmedia.setMuted(true);
\t\t\t\t\t} else {
\t\t\t\t\t\tmedia.setMuted(false);
\t\t\t\t\t}
\t\t\t\t\tmedia.setVolume(volume);
\t\t\t\t},
\t\t\t\tmouseIsDown = false,
\t\t\t\tmouseIsOver = false;

\t\t\t// SLIDER

\t\t\tmute
\t\t\t.hover(function () {
\t\t\t\tvolumeSlider.show();
\t\t\t\tmouseIsOver = true;
\t\t\t}, function () {
\t\t\t\tmouseIsOver = false;

\t\t\t\tif (!mouseIsDown && mode == 'vertical') {
\t\t\t\t\tvolumeSlider.hide();
\t\t\t\t}
\t\t\t});

\t\t\tvar updateVolumeSlider = function (e) {

\t\t\t\tvar volume = Math.floor(media.volume * 100);

\t\t\t\tvolumeSlider.attr({
\t\t\t\t\t'aria-label': mejs.i18n.t('mejs.volume-slider'),
\t\t\t\t\t'aria-valuemin': 0,
\t\t\t\t\t'aria-valuemax': 100,
\t\t\t\t\t'aria-valuenow': volume,
\t\t\t\t\t'aria-valuetext': volume + '%',
\t\t\t\t\t'role': 'slider',
\t\t\t\t\t'tabindex': 0
\t\t\t\t});

\t\t\t};

\t\t\tvolumeSlider
\t\t\t.bind('mouseover', function () {
\t\t\t\tmouseIsOver = true;
\t\t\t})
\t\t\t.bind('mousedown', function (e) {
\t\t\t\thandleVolumeMove(e);
\t\t\t\tt.globalBind('mousemove.vol', function (e) {
\t\t\t\t\thandleVolumeMove(e);
\t\t\t\t});
\t\t\t\tt.globalBind('mouseup.vol', function () {
\t\t\t\t\tmouseIsDown = false;
\t\t\t\t\tt.globalUnbind('.vol');

\t\t\t\t\tif (!mouseIsOver && mode == 'vertical') {
\t\t\t\t\t\tvolumeSlider.hide();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tmouseIsDown = true;

\t\t\t\treturn false;
\t\t\t})
\t\t\t.bind('keydown', function (e) {
\t\t\t\tvar keyCode = e.keyCode;
\t\t\t\tvar volume = media.volume;
\t\t\t\tswitch (keyCode) {
\t\t\t\t\tcase 38: // Up
\t\t\t\t\t\tvolume = Math.min(volume + 0.1, 1);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 40: // Down
\t\t\t\t\t\tvolume = Math.max(0, volume - 0.1);
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tmouseIsDown = false;
\t\t\t\tpositionVolumeHandle(volume);
\t\t\t\tmedia.setVolume(volume);
\t\t\t\treturn false;
\t\t\t});

\t\t\t// MUTE button
\t\t\tmute.find('button').click(function () {
\t\t\t\tmedia.setMuted(!media.muted);
\t\t\t});

\t\t\t//Keyboard input
\t\t\tmute.find('button').bind('focus', function () {
\t\t\t\tvolumeSlider.show();
\t\t\t});

\t\t\t// listen for volume change events from other sources
\t\t\tmedia.addEventListener('volumechange', function (e) {
\t\t\t\tif (!mouseIsDown) {
\t\t\t\t\tif (media.muted) {
\t\t\t\t\t\tpositionVolumeHandle(0);
\t\t\t\t\t\tmute.removeClass('mejs-mute').addClass('mejs-unmute');
\t\t\t\t\t} else {
\t\t\t\t\t\tpositionVolumeHandle(media.volume);
\t\t\t\t\t\tmute.removeClass('mejs-unmute').addClass('mejs-mute');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tupdateVolumeSlider(e);
\t\t\t}, false);

\t\t\t// mutes the media and sets the volume icon muted if the initial volume is set to 0
\t\t\tif (player.options.startVolume === 0) {
\t\t\t\tmedia.setMuted(true);
\t\t\t}

\t\t\t// shim gets the startvolume as a parameter, but we have to set it on the native <video> and <audio> elements
\t\t\tif (media.pluginType === 'native') {
\t\t\t\tmedia.setVolume(player.options.startVolume);
\t\t\t}

\t\t\tt.container.on('controlsresize', function () {
\t\t\t\tif (media.muted) {
\t\t\t\t\tpositionVolumeHandle(0);
\t\t\t\t\tmute.removeClass('mejs-mute').addClass('mejs-unmute');
\t\t\t\t} else {
\t\t\t\t\tpositionVolumeHandle(media.volume);
\t\t\t\t\tmute.removeClass('mejs-unmute').addClass('mejs-mute');
\t\t\t\t}
\t\t\t});
\t\t}
\t});

})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tusePluginFullScreen: true,
\t\tnewWindowCallback: function() { return '';},
\t\tfullscreenText: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {

\t\tisFullScreen: false,

\t\tisNativeFullScreen: false,

\t\tisInIframe: false,
\t\t\t\t\t\t\t
\t\t// Possible modes
\t\t// (1) 'native-native' \tHTML5 video  + browser fullscreen (IE10+, etc.)
\t\t// (2) 'plugin-native' \tplugin video + browser fullscreen (fails in some versions of Firefox)
\t\t// (3) 'fullwindow' \tFull window (retains all UI)
\t\t// usePluginFullScreen = true
\t\t// (4) 'plugin-click' \tFlash 1 - click through with pointer events
\t\t// (5) 'plugin-hover' \tFlash 2 - hover popup in flash (IE6-8)\t\t
\t\tfullscreenMode: '',

\t\tbuildfullscreen: function(player, controls, layers, media) {

\t\t\tif (!player.isVideo)
\t\t\t\treturn;
\t\t\t\t
\t\t\tplayer.isInIframe = (window.location != window.parent.location);\t
\t\t
\t\t\t// detect on start
\t\t\tmedia.addEventListener('loadstart', function() { player.detectFullscreenMode(); });
\t\t\t\t
\t\t\t// build button
\t\t\tvar t = this,
\t\t\t\thideTimeout = null,
\t\t\t\tfullscreenTitle = t.options.fullscreenText ? t.options.fullscreenText : mejs.i18n.t('mejs.fullscreen'),
\t\t\t\tfullscreenBtn =
\t\t\t\t\t\$('<div class=\"mejs-button mejs-fullscreen-button\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + fullscreenTitle + '\" aria-label=\"' + fullscreenTitle + '\"></button>' +
\t\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(controls)
\t\t\t\t\t.on('click', function() {
\t\t\t\t\t\t
\t\t\t\t\t\t// toggle fullscreen
\t\t\t\t\t\tvar isFullScreen = (mejs.MediaFeatures.hasTrueNativeFullScreen && mejs.MediaFeatures.isFullScreen()) || player.isFullScreen;
\t
\t\t\t\t\t\tif (isFullScreen) {
\t\t\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tplayer.enterFullScreen();
\t\t\t\t\t\t}
\t\t\t\t\t})\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t.on('mouseover', function() {
\t\t\t\t\t\t
\t\t\t\t\t\t// very old browsers with a plugin
\t\t\t\t\t\tif (t.fullscreenMode == 'plugin-hover') {\t\t\t\t\t\t
\t\t\t\t\t\t\tif (hideTimeout !== null) {
\t\t\t\t\t\t\t\tclearTimeout(hideTimeout);
\t\t\t\t\t\t\t\tdelete hideTimeout;
\t\t\t\t\t\t\t}
\t
\t\t\t\t\t\t\tvar buttonPos = fullscreenBtn.offset(),
\t\t\t\t\t\t\t\tcontainerPos = player.container.offset();
\t
\t\t\t\t\t\t\tmedia.positionFullscreenButton(buttonPos.left - containerPos.left, buttonPos.top - containerPos.top, true);
\t\t\t\t\t\t}

\t\t\t\t\t})
\t\t\t\t\t.on('mouseout', function() {

\t\t\t\t\t\tif (t.fullscreenMode == 'plugin-hover') {\t\t\t\t\t\t
\t\t\t\t\t\t\tif (hideTimeout !== null) {
\t\t\t\t\t\t\t\tclearTimeout(hideTimeout);
\t\t\t\t\t\t\t\tdelete hideTimeout;
\t\t\t\t\t\t\t}
\t
\t\t\t\t\t\t\thideTimeout = setTimeout(function() {
\t\t\t\t\t\t\t\tmedia.hideFullscreenButton();
\t\t\t\t\t\t\t}, 1500);
\t\t\t\t\t\t}

\t\t\t\t\t});

\t\t\t\t\t

\t\t\tplayer.fullscreenBtn = fullscreenBtn;

\t\t\tt.globalBind('keydown',function (e) {
\t\t\t\tif (e.keyCode == 27 && ((mejs.MediaFeatures.hasTrueNativeFullScreen && mejs.MediaFeatures.isFullScreen()) || t.isFullScreen)) {
\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\tt.normalHeight = 0;
\t\t\tt.normalWidth = 0;\t\t\t\t\t
\t\t\t\t\t
\t\t\t// setup native fullscreen event
\t\t\tif (mejs.MediaFeatures.hasTrueNativeFullScreen) {

\t\t\t\t// chrome doesn't alays fire this in an iframe
\t\t\t\tvar fullscreenChanged = function(e) {
\t\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\t\tif (mejs.MediaFeatures.isFullScreen()) {
\t\t\t\t\t\t\tplayer.isNativeFullScreen = true;
\t\t\t\t\t\t\t// reset the controls once we are fully in full screen
\t\t\t\t\t\t\tplayer.setControlsSize();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tplayer.isNativeFullScreen = false;
\t\t\t\t\t\t\t// when a user presses ESC
\t\t\t\t\t\t\t// make sure to put the player back into place
\t\t\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tplayer.globalBind(mejs.MediaFeatures.fullScreenEventName, fullscreenChanged);
\t\t\t}

\t\t},
\t\t
\t\tdetectFullscreenMode: function() {
\t\t\t
\t\t\tvar t = this,
\t\t\t\tmode = '',
\t\t\t\tfeatures = mejs.MediaFeatures;
\t\t\t
\t\t\tif (features.hasTrueNativeFullScreen && t.media.pluginType === 'native') {
\t\t\t\tmode = 'native-native';
\t\t\t} else if (features.hasTrueNativeFullScreen && t.media.pluginType !== 'native' && !features.hasFirefoxPluginMovingProblem) {
\t\t\t\tmode = 'plugin-native';\t\t\t\t\t
\t\t\t} else if (t.usePluginFullScreen) { 
\t\t\t\tif (mejs.MediaFeatures.supportsPointerEvents) {
\t\t\t\t\tmode = 'plugin-click';
\t\t\t\t\t// this needs some special setup
\t\t\t\t\tt.createPluginClickThrough();\t\t\t\t
\t\t\t\t} else { 
\t\t\t\t\tmode = 'plugin-hover';
\t\t\t\t}
\t\t\t\t
\t\t\t} else {
\t\t\t\tmode = 'fullwindow';
\t\t\t}
\t\t\t
\t\t\t
\t\t\tt.fullscreenMode = mode;\t\t
\t\t\treturn mode;
\t\t},
\t\t
\t\tisPluginClickThroughCreated: false,
\t\t
\t\tcreatePluginClickThrough: function() {
\t\t\t\t
\t\t\tvar t = this;
\t\t\t
\t\t\t// don't build twice
\t\t\tif (t.isPluginClickThroughCreated) {
\t\t\t\treturn;
\t\t\t}\t

\t\t\t// allows clicking through the fullscreen button and controls down directly to Flash

\t\t\t/*
\t\t\t When a user puts his mouse over the fullscreen button, we disable the controls so that mouse events can go down to flash (pointer-events)
\t\t\t We then put a divs over the video and on either side of the fullscreen button
\t\t\t to capture mouse movement and restore the controls once the mouse moves outside of the fullscreen button
\t\t\t*/

\t\t\tvar fullscreenIsDisabled = false,
\t\t\t\trestoreControls = function() {
\t\t\t\t\tif (fullscreenIsDisabled) {
\t\t\t\t\t\t// hide the hovers
\t\t\t\t\t\tfor (var i in hoverDivs) {
\t\t\t\t\t\t\thoverDivs[i].hide();
\t\t\t\t\t\t}

\t\t\t\t\t\t// restore the control bar
\t\t\t\t\t\tt.fullscreenBtn.css('pointer-events', '');
\t\t\t\t\t\tt.controls.css('pointer-events', '');

\t\t\t\t\t\t// prevent clicks from pausing video
\t\t\t\t\t\tt.media.removeEventListener('click', t.clickToPlayPauseCallback);

\t\t\t\t\t\t// store for later
\t\t\t\t\t\tfullscreenIsDisabled = false;
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\thoverDivs = {},
\t\t\t\thoverDivNames = ['top', 'left', 'right', 'bottom'],
\t\t\t\ti, len,
\t\t\t\tpositionHoverDivs = function() {
\t\t\t\t\tvar fullScreenBtnOffsetLeft = fullscreenBtn.offset().left - t.container.offset().left,
\t\t\t\t\t\tfullScreenBtnOffsetTop = fullscreenBtn.offset().top - t.container.offset().top,
\t\t\t\t\t\tfullScreenBtnWidth = fullscreenBtn.outerWidth(true),
\t\t\t\t\t\tfullScreenBtnHeight = fullscreenBtn.outerHeight(true),
\t\t\t\t\t\tcontainerWidth = t.container.width(),
\t\t\t\t\t\tcontainerHeight = t.container.height();

\t\t\t\t\tfor (i in hoverDivs) {
\t\t\t\t\t\thoverDivs[i].css({position: 'absolute', top: 0, left: 0}); //, backgroundColor: '#f00'});
\t\t\t\t\t}

\t\t\t\t\t// over video, but not controls
\t\t\t\t\thoverDivs['top']
\t\t\t\t\t\t.width( containerWidth )
\t\t\t\t\t\t.height( fullScreenBtnOffsetTop );

\t\t\t\t\t// over controls, but not the fullscreen button
\t\t\t\t\thoverDivs['left']
\t\t\t\t\t\t.width( fullScreenBtnOffsetLeft )
\t\t\t\t\t\t.height( fullScreenBtnHeight )
\t\t\t\t\t\t.css({top: fullScreenBtnOffsetTop});

\t\t\t\t\t// after the fullscreen button
\t\t\t\t\thoverDivs['right']
\t\t\t\t\t\t.width( containerWidth - fullScreenBtnOffsetLeft - fullScreenBtnWidth )
\t\t\t\t\t\t.height( fullScreenBtnHeight )
\t\t\t\t\t\t.css({top: fullScreenBtnOffsetTop,
\t\t\t\t\t\t\t left: fullScreenBtnOffsetLeft + fullScreenBtnWidth});

\t\t\t\t\t// under the fullscreen button
\t\t\t\t\thoverDivs['bottom']
\t\t\t\t\t\t.width( containerWidth )
\t\t\t\t\t\t.height( containerHeight - fullScreenBtnHeight - fullScreenBtnOffsetTop )
\t\t\t\t\t\t.css({top: fullScreenBtnOffsetTop + fullScreenBtnHeight});
\t\t\t\t};

\t\t\tt.globalBind('resize', function() {
\t\t\t\tpositionHoverDivs();
\t\t\t});

\t\t\tfor (i = 0, len = hoverDivNames.length; i < len; i++) {
\t\t\t\thoverDivs[hoverDivNames[i]] = \$('<div class=\"mejs-fullscreen-hover\" />').appendTo(t.container).mouseover(restoreControls).hide();
\t\t\t}

\t\t\t// on hover, kill the fullscreen button's HTML handling, allowing clicks down to Flash
\t\t\tfullscreenBtn.on('mouseover',function() {

\t\t\t\tif (!t.isFullScreen) {

\t\t\t\t\tvar buttonPos = fullscreenBtn.offset(),
\t\t\t\t\t\tcontainerPos = player.container.offset();

\t\t\t\t\t// move the button in Flash into place
\t\t\t\t\tmedia.positionFullscreenButton(buttonPos.left - containerPos.left, buttonPos.top - containerPos.top, false);

\t\t\t\t\t// allows click through
\t\t\t\t\tt.fullscreenBtn.css('pointer-events', 'none');
\t\t\t\t\tt.controls.css('pointer-events', 'none');

\t\t\t\t\t// restore click-to-play
\t\t\t\t\tt.media.addEventListener('click', t.clickToPlayPauseCallback);

\t\t\t\t\t// show the divs that will restore things
\t\t\t\t\tfor (i in hoverDivs) {
\t\t\t\t\t\thoverDivs[i].show();
\t\t\t\t\t}

\t\t\t\t\tpositionHoverDivs();

\t\t\t\t\tfullscreenIsDisabled = true;
\t\t\t\t}

\t\t\t});

\t\t\t// restore controls anytime the user enters or leaves fullscreen
\t\t\tmedia.addEventListener('fullscreenchange', function(e) {
\t\t\t\tt.isFullScreen = !t.isFullScreen;
\t\t\t\t// don't allow plugin click to pause video - messes with
\t\t\t\t// plugin's controls
\t\t\t\tif (t.isFullScreen) {
\t\t\t\t\tt.media.removeEventListener('click', t.clickToPlayPauseCallback);
\t\t\t\t} else {
\t\t\t\t\tt.media.addEventListener('click', t.clickToPlayPauseCallback);
\t\t\t\t}
\t\t\t\trestoreControls();
\t\t\t});


\t\t\t// the mouseout event doesn't work on the fullscren button, because we already killed the pointer-events
\t\t\t// so we use the document.mousemove event to restore controls when the mouse moves outside the fullscreen button

\t\t\tt.globalBind('mousemove', function(e) {

\t\t\t\t// if the mouse is anywhere but the fullsceen button, then restore it all
\t\t\t\tif (fullscreenIsDisabled) {

\t\t\t\t\tvar fullscreenBtnPos = fullscreenBtn.offset();


\t\t\t\t\tif (e.pageY < fullscreenBtnPos.top || e.pageY > fullscreenBtnPos.top + fullscreenBtn.outerHeight(true) ||
\t\t\t\t\t\te.pageX < fullscreenBtnPos.left || e.pageX > fullscreenBtnPos.left + fullscreenBtn.outerWidth(true)
\t\t\t\t\t\t) {

\t\t\t\t\t\tfullscreenBtn.css('pointer-events', '');
\t\t\t\t\t\tt.controls.css('pointer-events', '');

\t\t\t\t\t\tfullscreenIsDisabled = false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});


\t\t\tt.isPluginClickThroughCreated = true;
\t\t},\t\t

\t\tcleanfullscreen: function(player) {
\t\t\tplayer.exitFullScreen();
\t\t},

        containerSizeTimeout: null,

\t\tenterFullScreen: function() {

\t\t\tvar t = this;

\t\t\tif (mejs.MediaFeatures.isiOS && mejs.MediaFeatures.hasiOSFullScreen && typeof t.media.webkitEnterFullscreen === 'function') {
\t\t\t    t.media.webkitEnterFullscreen();
\t\t\t\treturn;
\t\t\t}

\t\t\t// set it to not show scroll bars so 100% will work
            \$(document.documentElement).addClass('mejs-fullscreen');

\t\t\t// store sizing
\t\t\tt.normalHeight = t.container.height();
\t\t\tt.normalWidth = t.container.width();



\t\t\t// attempt to do true fullscreen
\t\t\tif (t.fullscreenMode === 'native-native' || t.fullscreenMode === 'plugin-native') {

\t\t\t\tmejs.MediaFeatures.requestFullScreen(t.container[0]);
\t\t\t\t//return;

\t\t\t\tif (t.isInIframe) {
\t\t\t\t\t// sometimes exiting from fullscreen doesn't work
\t\t\t\t\t// notably in Chrome <iframe>. Fixed in version 17
\t\t\t\t\tsetTimeout(function checkFullscreen() {

\t\t\t\t\t\tif (t.isNativeFullScreen) {
\t\t\t\t\t\t\tvar percentErrorMargin = 0.002, // 0.2%
\t\t\t\t\t\t\t\twindowWidth = \$(window).width(),
\t\t\t\t\t\t\t\tscreenWidth = screen.width,
\t\t\t\t\t\t\t\tabsDiff = Math.abs(screenWidth - windowWidth),
\t\t\t\t\t\t\t\tmarginError = screenWidth * percentErrorMargin;

\t\t\t\t\t\t\t// check if the video is suddenly not really fullscreen
\t\t\t\t\t\t\tif (absDiff > marginError) {
\t\t\t\t\t\t\t\t// manually exit
\t\t\t\t\t\t\t\tt.exitFullScreen();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t// test again
\t\t\t\t\t\t\t\tsetTimeout(checkFullscreen, 500);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}, 1000);
\t\t\t\t}
\t\t\t\t
\t\t\t} else if (t.fullscreeMode == 'fullwindow') {\t\t\t\t
\t\t\t\t// move into position
\t\t\t\t
\t\t\t}\t\t\t
\t\t\t
\t\t\t// make full size
\t\t\tt.container
\t\t\t\t.addClass('mejs-container-fullscreen')
\t\t\t\t.width('100%')
\t\t\t\t.height('100%');
\t\t\t\t//.css({position: 'fixed', left: 0, top: 0, right: 0, bottom: 0, overflow: 'hidden', width: '100%', height: '100%', 'z-index': 1000});

\t\t\t// Only needed for safari 5.1 native full screen, can cause display issues elsewhere
\t\t\t// Actually, it seems to be needed for IE8, too
\t\t\t//if (mejs.MediaFeatures.hasTrueNativeFullScreen) {
\t\t\t\tt.containerSizeTimeout = setTimeout(function() {
\t\t\t\t\tt.container.css({width: '100%', height: '100%'});
\t\t\t\t\tt.setControlsSize();
\t\t\t\t}, 500);
\t\t\t//}

\t\t\tif (t.media.pluginType === 'native') {
\t\t\t\tt.\$media
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');
\t\t\t} else {
\t\t\t\tt.container.find('.mejs-shim')
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');\t
\t\t\t\t
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tvar win = \$(window),
\t\t\t\t\t\twinW = win.width(),
\t\t\t\t\t\twinH = win.height();
\t\t\t\t\t\t\t
\t\t\t\t\tt.media.setVideoSize(winW,winH);\t\t\t
\t\t\t\t}, 500);
\t\t\t}

\t\t\tt.layers.children('div')
\t\t\t\t.width('100%')
\t\t\t\t.height('100%');

\t\t\tif (t.fullscreenBtn) {
\t\t\t\tt.fullscreenBtn
\t\t\t\t\t.removeClass('mejs-fullscreen')
\t\t\t\t\t.addClass('mejs-unfullscreen');
\t\t\t}

\t\t\tt.setControlsSize();
\t\t\tt.isFullScreen = true;

\t\t\tvar zoomFactor = Math.min(screen.width / t.width, screen.height / t.height);
\t\t\tt.container.find('.mejs-captions-text').css('font-size', zoomFactor * 100 + '%');
\t\t\tt.container.find('.mejs-captions-text').css('line-height', 'normal');
\t\t\tt.container.find('.mejs-captions-position').css('bottom', '45px');

\t\t\tt.container.trigger('enteredfullscreen');
\t\t},

\t\texitFullScreen: function() {

\t\t\tvar t = this;

            // Prevent container from attempting to stretch a second time
            clearTimeout(t.containerSizeTimeout);

\t\t\t// firefox can't adjust plugins
\t\t\t/*
\t\t\tif (t.media.pluginType !== 'native' && mejs.MediaFeatures.isFirefox) {
\t\t\t\tt.media.setFullscreen(false);
\t\t\t\t//player.isFullScreen = false;
\t\t\t\treturn;
\t\t\t}
\t\t\t*/

\t\t\t// come out of native fullscreen
\t\t\tif (mejs.MediaFeatures.hasTrueNativeFullScreen && (mejs.MediaFeatures.isFullScreen() || t.isFullScreen)) {
\t\t\t\tmejs.MediaFeatures.cancelFullScreen();
\t\t\t}

\t\t\t// restore scroll bars to document
            \$(document.documentElement).removeClass('mejs-fullscreen');

\t\t\tt.container
\t\t\t\t.removeClass('mejs-container-fullscreen')
\t\t\t\t.width(t.normalWidth)
\t\t\t\t.height(t.normalHeight);

\t\t\tif (t.media.pluginType === 'native') {
\t\t\t\tt.\$media
\t\t\t\t\t.width(t.normalWidth)
\t\t\t\t\t.height(t.normalHeight);
\t\t\t} else {
\t\t\t\tt.container.find('.mejs-shim')
\t\t\t\t\t.width(t.normalWidth)
\t\t\t\t\t.height(t.normalHeight);

\t\t\t\tt.media.setVideoSize(t.normalWidth, t.normalHeight);
\t\t\t}

\t\t\tt.layers.children('div')
\t\t\t\t.width(t.normalWidth)
\t\t\t\t.height(t.normalHeight);

\t\t\tt.fullscreenBtn
\t\t\t\t.removeClass('mejs-unfullscreen')
\t\t\t\t.addClass('mejs-fullscreen');

\t\t\tt.setControlsSize();
\t\t\tt.isFullScreen = false;

\t\t\tt.container.find('.mejs-captions-text').css('font-size','');
\t\t\tt.container.find('.mejs-captions-text').css('line-height', '');
\t\t\tt.container.find('.mejs-captions-position').css('bottom', '');

\t\t\tt.container.trigger('exitedfullscreen');
\t\t}
\t});

})(mejs.\$);

(function(\$) {

\t// Speed
\t\$.extend(mejs.MepDefaults, {

\t\t// We also support to pass object like this:
\t\t// [{name: 'Slow', value: '0.75'}, {name: 'Normal', value: '1.00'}, ...]
\t\tspeeds: ['2.00', '1.50', '1.25', '1.00', '0.75'],

\t\tdefaultSpeed: '1.00',
\t\t
\t\tspeedChar: 'x'

\t});

\t\$.extend(MediaElementPlayer.prototype, {

\t\tbuildspeed: function(player, controls, layers, media) {
\t\t\tvar t = this;

\t\t\tif (t.media.pluginType == 'native') {
\t\t\t\tvar 
\t\t\t\t\tspeedButton = null,
\t\t\t\t\tspeedSelector = null,
\t\t\t\t\tplaybackSpeed = null,
\t\t\t\t\tinputId = null;

\t\t\t\tvar speeds = [];
\t\t\t\tvar defaultInArray = false;
\t\t\t\tfor (var i=0, len=t.options.speeds.length; i < len; i++) {
\t\t\t\t\tvar s = t.options.speeds[i];
\t\t\t\t\tif (typeof(s) === 'string'){
\t\t\t\t\t\tspeeds.push({
\t\t\t\t\t\t\tname: s + t.options.speedChar,
\t\t\t\t\t\t\tvalue: s
\t\t\t\t\t\t});
\t\t\t\t\t\tif(s === t.options.defaultSpeed) {
\t\t\t\t\t\t\tdefaultInArray = true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tspeeds.push(s);
\t\t\t\t\t\tif(s.value === t.options.defaultSpeed) {
\t\t\t\t\t\t\tdefaultInArray = true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!defaultInArray) {
\t\t\t\t\tspeeds.push({
\t\t\t\t\t\tname: t.options.defaultSpeed + t.options.speedChar,
\t\t\t\t\t\tvalue: t.options.defaultSpeed
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tspeeds.sort(function(a, b) {
\t\t\t\t\treturn parseFloat(b.value) - parseFloat(a.value);
\t\t\t\t});

\t\t\t\tvar getSpeedNameFromValue = function(value) {
\t\t\t\t\tfor(i=0,len=speeds.length; i <len; i++) {
\t\t\t\t\t\tif (speeds[i].value === value) {
\t\t\t\t\t\t\treturn speeds[i].name;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tvar html = '<div class=\"mejs-button mejs-speed-button\">' +
\t\t\t\t\t\t\t'<button type=\"button\">' + getSpeedNameFromValue(t.options.defaultSpeed) + '</button>' +
\t\t\t\t\t\t\t'<div class=\"mejs-speed-selector\">' +
\t\t\t\t\t\t\t'<ul>';

\t\t\t\tfor (i = 0, il = speeds.length; i<il; i++) {
\t\t\t\t\tinputId = t.id + '-speed-' + speeds[i].value;
\t\t\t\t\thtml += '<li>' + 
\t\t\t\t\t\t\t\t'<input type=\"radio\" name=\"speed\" ' + 
\t\t\t\t\t\t\t\t\t\t\t'value=\"' + speeds[i].value + '\" ' +
\t\t\t\t\t\t\t\t\t\t\t'id=\"' + inputId + '\" ' +
\t\t\t\t\t\t\t\t\t\t\t(speeds[i].value === t.options.defaultSpeed ? ' checked' : '') +
\t\t\t\t\t\t\t\t\t\t\t' />' +
\t\t\t\t\t\t\t\t'<label for=\"' + inputId + '\" ' +
\t\t\t\t\t\t\t\t\t\t\t(speeds[i].value === t.options.defaultSpeed ? ' class=\"mejs-speed-selected\"' : '') +
\t\t\t\t\t\t\t\t\t\t\t'>' + speeds[i].name + '</label>' +
\t\t\t\t\t\t\t'</li>';
\t\t\t\t}
\t\t\t\thtml += '</ul></div></div>';

\t\t\t\tspeedButton = \$(html).appendTo(controls);
\t\t\t\tspeedSelector = speedButton.find('.mejs-speed-selector');

\t\t\t\tplaybackSpeed = t.options.defaultSpeed;

\t\t\t\tmedia.addEventListener('loadedmetadata', function(e) {
\t\t\t\t\tif (playbackSpeed) {
\t\t\t\t\t\tmedia.playbackRate = parseFloat(playbackSpeed);
\t\t\t\t\t}
\t\t\t\t}, true);

\t\t\t\tspeedSelector
\t\t\t\t\t.on('click', 'input[type=\"radio\"]', function() {
\t\t\t\t\t\tvar newSpeed = \$(this).attr('value');
\t\t\t\t\t\tplaybackSpeed = newSpeed;
\t\t\t\t\t\tmedia.playbackRate = parseFloat(newSpeed);
\t\t\t\t\t\tspeedButton.find('button').html(getSpeedNameFromValue(newSpeed));
\t\t\t\t\t\tspeedButton.find('.mejs-speed-selected').removeClass('mejs-speed-selected');
\t\t\t\t\t\tspeedButton.find('input[type=\"radio\"]:checked').next().addClass('mejs-speed-selected');
\t\t\t\t\t});
\t\t\t\tspeedButton
\t\t\t\t\t.one( 'mouseenter focusin', function() {
\t\t\t\t\t\tspeedSelector
\t\t\t\t\t\t\t.height(
\t\t\t\t\t\t\t\tspeedButton.find('.mejs-speed-selector ul').outerHeight(true) +
\t\t\t\t\t\t\t\tspeedButton.find('.mejs-speed-translations').outerHeight(true))
\t\t\t\t\t\t\t.css('top', (-1 * speedSelector.height()) + 'px');
\t\t\t\t\t});
\t\t\t}
\t\t}
\t});

})(mejs.\$);

(function(\$) {

\t// add extra default options
\t\$.extend(mejs.MepDefaults, {
\t\t// this will automatically turn on a <track>
\t\tstartLanguage: '',

\t\ttracksText: '',

\t\t// By default, no WAI-ARIA live region - don't make a
\t\t// screen reader speak captions over an audio track.
\t\ttracksAriaLive: false,

\t\t// option to remove the [cc] button when no <track kind=\"subtitles\"> are present
\t\thideCaptionsButtonWhenEmpty: true,

\t\t// If true and we only have one track, change captions to popup
\t\ttoggleCaptionsButtonWhenOnlyOne: false,

\t\t// #id or .class
\t\tslidesSelector: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {

\t\thasChapters: false,

\t\tcleartracks: function(player, controls, layers, media){
\t\t\tif(player) {
\t\t\t\tif(player.captions) player.captions.remove();
\t\t\t\tif(player.chapters) player.chapters.remove();
\t\t\t\tif(player.captionsText) player.captionsText.remove();
\t\t\t\tif(player.captionsButton) player.captionsButton.remove();
\t\t\t}
\t\t},
\t\tbuildtracks: function(player, controls, layers, media) {
\t\t\tif (player.tracks.length === 0)
\t\t\t\treturn;

\t\t\tvar t = this,
\t\t\t\tattr = t.options.tracksAriaLive ?
\t\t\t\t\t'role=\"log\" aria-live=\"assertive\" aria-atomic=\"false\"' : '',
\t\t\t\ttracksTitle = t.options.tracksText ? t.options.tracksText : mejs.i18n.t('mejs.captions-subtitles'),
\t\t\t\ti,
\t\t\t\tkind;

\t\t\tif (t.domNode.textTracks) { // if browser will do native captions, prefer mejs captions, loop through tracks and hide
\t\t\t\tfor (i = t.domNode.textTracks.length - 1; i >= 0; i--) {
\t\t\t\t\tt.domNode.textTracks[i].mode = \"hidden\";
\t\t\t\t}
\t\t\t}
\t\t\tt.cleartracks(player, controls, layers, media);
\t\t\tplayer.chapters =
\t\t\t\t\t\$('<div class=\"mejs-chapters mejs-layer\"></div>')
\t\t\t\t\t\t.prependTo(layers).hide();
\t\t\tplayer.captions =
\t\t\t\t\t\$('<div class=\"mejs-captions-layer mejs-layer\"><div class=\"mejs-captions-position mejs-captions-position-hover\" ' +
\t\t\t\t\tattr + '><span class=\"mejs-captions-text\"></span></div></div>')
\t\t\t\t\t\t.prependTo(layers).hide();
\t\t\tplayer.captionsText = player.captions.find('.mejs-captions-text');
\t\t\tplayer.captionsButton =
\t\t\t\t\t\$('<div class=\"mejs-button mejs-captions-button\">'+
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + tracksTitle + '\" aria-label=\"' + tracksTitle + '\"></button>'+
\t\t\t\t\t\t'<div class=\"mejs-captions-selector\">'+
\t\t\t\t\t\t\t'<ul>'+
\t\t\t\t\t\t\t\t'<li>'+
\t\t\t\t\t\t\t\t\t'<input type=\"radio\" name=\"' + player.id + '_captions\" id=\"' + player.id + '_captions_none\" value=\"none\" checked=\"checked\" />' +
\t\t\t\t\t\t\t\t\t'<label for=\"' + player.id + '_captions_none\">' + mejs.i18n.t('mejs.none') +'</label>'+
\t\t\t\t\t\t\t\t'</li>'\t+
\t\t\t\t\t\t\t'</ul>'+
\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</div>')
\t\t\t\t\t\t.appendTo(controls);


\t\t\tvar subtitleCount = 0;
\t\t\tfor (i=0; i<player.tracks.length; i++) {
\t\t\t\tkind = player.tracks[i].kind;
\t\t\t\tif (kind === 'subtitles' || kind === 'captions') {
\t\t\t\t\tsubtitleCount++;
\t\t\t\t}
\t\t\t}

\t\t\t// if only one language then just make the button a toggle
\t\t\tif (t.options.toggleCaptionsButtonWhenOnlyOne && subtitleCount == 1){
\t\t\t\t// click
\t\t\t\tplayer.captionsButton.on('click',function() {
\t\t\t\t\tif (player.selectedTrack === null) {
\t\t\t\t\t\tlang = player.tracks[0].srclang;
\t\t\t\t\t} else {
\t\t\t\t\t\tlang = 'none';
\t\t\t\t\t}
\t\t\t\t\tplayer.setTrack(lang);
\t\t\t\t});
\t\t\t} else {
\t\t\t\t// hover or keyboard focus
\t\t\t\tplayer.captionsButton.on( 'mouseenter focusin', function() {
\t\t\t\t\t\$(this).find('.mejs-captions-selector').removeClass('mejs-offscreen');
\t\t\t\t})

\t\t\t\t// handle clicks to the language radio buttons
\t\t\t\t.on('click','input[type=radio]',function() {
\t\t\t\t\tlang = this.value;
\t\t\t\t\tplayer.setTrack(lang);
\t\t\t\t});

\t\t\t\tplayer.captionsButton.on( 'mouseleave focusout', function() {
\t\t\t\t\t\$(this).find(\".mejs-captions-selector\").addClass(\"mejs-offscreen\");
\t\t\t\t});

\t\t\t}

\t\t\tif (!player.options.alwaysShowControls) {
\t\t\t\t// move with controls
\t\t\t\tplayer.container
\t\t\t\t\t.bind('controlsshown', function () {
\t\t\t\t\t\t// push captions above controls
\t\t\t\t\t\tplayer.container.find('.mejs-captions-position').addClass('mejs-captions-position-hover');

\t\t\t\t\t})
\t\t\t\t\t.bind('controlshidden', function () {
\t\t\t\t\t\tif (!media.paused) {
\t\t\t\t\t\t\t// move back to normal place
\t\t\t\t\t\t\tplayer.container.find('.mejs-captions-position').removeClass('mejs-captions-position-hover');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t} else {
\t\t\t\tplayer.container.find('.mejs-captions-position').addClass('mejs-captions-position-hover');
\t\t\t}

\t\t\tplayer.trackToLoad = -1;
\t\t\tplayer.selectedTrack = null;
\t\t\tplayer.isLoadingTrack = false;

\t\t\t// add to list
\t\t\tfor (i=0; i<player.tracks.length; i++) {
\t\t\t\tkind = player.tracks[i].kind;
\t\t\t\tif (kind === 'subtitles' || kind === 'captions') {
\t\t\t\t\tplayer.addTrackButton(player.tracks[i].srclang, player.tracks[i].label);
\t\t\t\t}
\t\t\t}

\t\t\t// start loading tracks
\t\t\tplayer.loadNextTrack();

\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\tplayer.displayCaptions();
\t\t\t}, false);

\t\t\tif (player.options.slidesSelector !== '') {
\t\t\t\tplayer.slidesContainer = \$(player.options.slidesSelector);

\t\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\t\tplayer.displaySlides();
\t\t\t\t}, false);

\t\t\t}

\t\t\tmedia.addEventListener('loadedmetadata', function() {
\t\t\t\tplayer.displayChapters();
\t\t\t}, false);

\t\t\tplayer.container.hover(
\t\t\t\tfunction () {
\t\t\t\t\t// chapters
\t\t\t\t\tif (player.hasChapters) {
\t\t\t\t\t\tplayer.chapters.removeClass('mejs-offscreen');
\t\t\t\t\t\tplayer.chapters.fadeIn(200).height(player.chapters.find('.mejs-chapter').outerHeight());
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfunction () {
\t\t\t\t\tif (player.hasChapters && !media.paused) {
\t\t\t\t\t\tplayer.chapters.fadeOut(200, function() {
\t\t\t\t\t\t\t\$(this).addClass('mejs-offscreen');
\t\t\t\t\t\t\t\$(this).css('display','block');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});

\t\t\tt.container.on('controlsresize', function() {
\t\t\t\tt.adjustLanguageBox();
\t\t\t});

\t\t\t// check for autoplay
\t\t\tif (player.node.getAttribute('autoplay') !== null) {
\t\t\t\tplayer.chapters.addClass('mejs-offscreen');
\t\t\t}
\t\t},

\t\tsetTrack: function(lang){

\t\t\tvar t = this,
\t\t\t\ti;

\t\t\tif (lang == 'none') {
\t\t\t\tt.selectedTrack = null;
\t\t\t\tt.captionsButton.removeClass('mejs-captions-enabled');
\t\t\t} else {
\t\t\t\tfor (i=0; i<t.tracks.length; i++) {
\t\t\t\t\tif (t.tracks[i].srclang == lang) {
\t\t\t\t\t\tif (t.selectedTrack === null)
\t\t\t\t\t\t\tt.captionsButton.addClass('mejs-captions-enabled');
\t\t\t\t\t\tt.selectedTrack = t.tracks[i];
\t\t\t\t\t\tt.captions.attr('lang', t.selectedTrack.srclang);
\t\t\t\t\t\tt.displayCaptions();
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t},

\t\tloadNextTrack: function() {
\t\t\tvar t = this;

\t\t\tt.trackToLoad++;
\t\t\tif (t.trackToLoad < t.tracks.length) {
\t\t\t\tt.isLoadingTrack = true;
\t\t\t\tt.loadTrack(t.trackToLoad);
\t\t\t} else {
\t\t\t\t// add done?
\t\t\t\tt.isLoadingTrack = false;

\t\t\t\tt.checkForTracks();
\t\t\t}
\t\t},

\t\tloadTrack: function(index){
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ttrack = t.tracks[index],
\t\t\t\tafter = function() {

\t\t\t\t\ttrack.isLoaded = true;

\t\t\t\t\tt.enableTrackButton(track.srclang, track.label);

\t\t\t\t\tt.loadNextTrack();

\t\t\t\t};


\t\t\tif (track.src !== undefined || track.src !== \"\") {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: track.src,
\t\t\t\t\tdataType: \"text\",
\t\t\t\t\tsuccess: function(d) {

\t\t\t\t\t\t// parse the loaded file
\t\t\t\t\t\tif (typeof d == \"string\" && (/<tt\\s+xml/ig).exec(d)) {
\t\t\t\t\t\t\ttrack.entries = mejs.TrackFormatParser.dfxp.parse(d);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\ttrack.entries = mejs.TrackFormatParser.webvtt.parse(d);
\t\t\t\t\t\t}

\t\t\t\t\t\tafter();

\t\t\t\t\t\tif (track.kind == 'chapters') {
\t\t\t\t\t\t\tt.media.addEventListener('play', function() {
\t\t\t\t\t\t\t\tif (t.media.duration > 0) {
\t\t\t\t\t\t\t\t\tt.displayChapters(track);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}, false);
\t\t\t\t\t\t}

\t\t\t\t\t\tif (track.kind == 'slides') {
\t\t\t\t\t\t\tt.setupSlides(track);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function() {
\t\t\t\t\t\tt.removeTrackButton(track.srclang);
\t\t\t\t\t\tt.loadNextTrack();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},

\t\tenableTrackButton: function(lang, label) {
\t\t\tvar t = this;

\t\t\tif (label === '') {
\t\t\t\tlabel = mejs.language.codes[lang] || lang;
\t\t\t}

\t\t\tt.captionsButton
\t\t\t\t.find('input[value=' + lang + ']')
\t\t\t\t\t.prop('disabled',false)
\t\t\t\t.siblings('label')
\t\t\t\t\t.html( label );

\t\t\t// auto select
\t\t\tif (t.options.startLanguage == lang) {
\t\t\t\t\$('#' + t.id + '_captions_' + lang).prop('checked', true).trigger('click');
\t\t\t}

\t\t\tt.adjustLanguageBox();
\t\t},

\t\tremoveTrackButton: function(lang) {
\t\t\tvar t = this;

\t\t\tt.captionsButton.find('input[value=' + lang + ']').closest('li').remove();

\t\t\tt.adjustLanguageBox();
\t\t},

\t\taddTrackButton: function(lang, label) {
\t\t\tvar t = this;
\t\t\tif (label === '') {
\t\t\t\tlabel = mejs.language.codes[lang] || lang;
\t\t\t}

\t\t\tt.captionsButton.find('ul').append(
\t\t\t\t\$('<li>'+
\t\t\t\t\t'<input type=\"radio\" name=\"' + t.id + '_captions\" id=\"' + t.id + '_captions_' + lang + '\" value=\"' + lang + '\" disabled=\"disabled\" />' +
\t\t\t\t\t'<label for=\"' + t.id + '_captions_' + lang + '\">' + label + ' (loading)' + '</label>'+
\t\t\t\t'</li>')
\t\t\t);

\t\t\tt.adjustLanguageBox();

\t\t\t// remove this from the dropdownlist (if it exists)
\t\t\tt.container.find('.mejs-captions-translations option[value=' + lang + ']').remove();
\t\t},

\t\tadjustLanguageBox:function() {
\t\t\tvar t = this;
\t\t\t// adjust the size of the outer box
\t\t\tt.captionsButton.find('.mejs-captions-selector').height(
\t\t\t\tt.captionsButton.find('.mejs-captions-selector ul').outerHeight(true) +
\t\t\t\tt.captionsButton.find('.mejs-captions-translations').outerHeight(true)
\t\t\t);
\t\t},

\t\tcheckForTracks: function() {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\thasSubtitles = false;

\t\t\t// check if any subtitles
\t\t\tif (t.options.hideCaptionsButtonWhenEmpty) {
\t\t\t\tfor (var i=0; i<t.tracks.length; i++) {
\t\t\t\t\tvar kind = t.tracks[i].kind;
\t\t\t\t\tif ((kind === 'subtitles' || kind === 'captions') && t.tracks[i].isLoaded) {
\t\t\t\t\t\thasSubtitles = true;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!hasSubtitles) {
\t\t\t\t\tt.captionsButton.hide();
\t\t\t\t\tt.setControlsSize();
\t\t\t\t}
\t\t\t}
\t\t},

\t\tdisplayCaptions: function() {

\t\t\tif (typeof this.tracks == 'undefined')
\t\t\t\treturn;

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ti,
\t\t\t\ttrack = t.selectedTrack;

\t\t\tif (track !== null && track.isLoaded) {
\t\t\t\tfor (i=0; i<track.entries.times.length; i++) {
\t\t\t\t\tif (t.media.currentTime >= track.entries.times[i].start && t.media.currentTime <= track.entries.times[i].stop) {
\t\t\t\t\t\t// Set the line before the timecode as a class so the cue can be targeted if needed
\t\t\t\t\t\tt.captionsText.html(track.entries.text[i]).attr('class', 'mejs-captions-text ' + (track.entries.times[i].identifier || ''));
\t\t\t\t\t\tt.captions.show().height(0);
\t\t\t\t\t\treturn; // exit out if one is visible;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tt.captions.hide();
\t\t\t} else {
\t\t\t\tt.captions.hide();
\t\t\t}
\t\t},

\t\tsetupSlides: function(track) {
\t\t\tvar t = this;

\t\t\tt.slides = track;
\t\t\tt.slides.entries.imgs = [t.slides.entries.text.length];
\t\t\tt.showSlide(0);

\t\t},

\t\tshowSlide: function(index) {
\t\t\tif (typeof this.tracks == 'undefined' || typeof this.slidesContainer == 'undefined') {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar t = this,
\t\t\t\turl = t.slides.entries.text[index],
\t\t\t\timg = t.slides.entries.imgs[index];

\t\t\tif (typeof img == 'undefined' || typeof img.fadeIn == 'undefined') {

\t\t\t\tt.slides.entries.imgs[index] = img = \$('<img src=\"' + url + '\">')
\t\t\t\t\t\t.on('load', function() {
\t\t\t\t\t\t\timg.appendTo(t.slidesContainer)
\t\t\t\t\t\t\t\t.hide()
\t\t\t\t\t\t\t\t.fadeIn()
\t\t\t\t\t\t\t\t.siblings(':visible')
\t\t\t\t\t\t\t\t\t.fadeOut();

\t\t\t\t\t\t});

\t\t\t} else {

\t\t\t\tif (!img.is(':visible') && !img.is(':animated')) {

\t\t\t\t\t//

\t\t\t\t\timg.fadeIn()
\t\t\t\t\t\t.siblings(':visible')
\t\t\t\t\t\t\t.fadeOut();
\t\t\t\t}
\t\t\t}

\t\t},

\t\tdisplaySlides: function() {

\t\t\tif (typeof this.slides == 'undefined')
\t\t\t\treturn;

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tslides = t.slides,
\t\t\t\ti;

\t\t\tfor (i=0; i<slides.entries.times.length; i++) {
\t\t\t\tif (t.media.currentTime >= slides.entries.times[i].start && t.media.currentTime <= slides.entries.times[i].stop){

\t\t\t\t\tt.showSlide(i);

\t\t\t\t\treturn; // exit out if one is visible;
\t\t\t\t}
\t\t\t}
\t\t},

\t\tdisplayChapters: function() {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ti;

\t\t\tfor (i=0; i<t.tracks.length; i++) {
\t\t\t\tif (t.tracks[i].kind == 'chapters' && t.tracks[i].isLoaded) {
\t\t\t\t\tt.drawChapters(t.tracks[i]);
\t\t\t\t\tt.hasChapters = true;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t},

\t\tdrawChapters: function(chapters) {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ti,
\t\t\t\tdur,
\t\t\t\t//width,
\t\t\t\t//left,
\t\t\t\tpercent = 0,
\t\t\t\tusedPercent = 0;

\t\t\tt.chapters.empty();

\t\t\tfor (i=0; i<chapters.entries.times.length; i++) {
\t\t\t\tdur = chapters.entries.times[i].stop - chapters.entries.times[i].start;
\t\t\t\tpercent = Math.floor(dur / t.media.duration * 100);
\t\t\t\tif (percent + usedPercent > 100 || // too large
\t\t\t\t\ti == chapters.entries.times.length-1 && percent + usedPercent < 100) // not going to fill it in
\t\t\t\t\t{
\t\t\t\t\tpercent = 100 - usedPercent;
\t\t\t\t}
\t\t\t\t//width = Math.floor(t.width * dur / t.media.duration);
\t\t\t\t//left = Math.floor(t.width * chapters.entries.times[i].start / t.media.duration);
\t\t\t\t//if (left + width > t.width) {
\t\t\t\t//\twidth = t.width - left;
\t\t\t\t//}

\t\t\t\tt.chapters.append( \$(
\t\t\t\t\t'<div class=\"mejs-chapter\" rel=\"' + chapters.entries.times[i].start + '\" style=\"left: ' + usedPercent.toString() + '%;width: ' + percent.toString() + '%;\">' +
\t\t\t\t\t\t'<div class=\"mejs-chapter-block' + ((i==chapters.entries.times.length-1) ? ' mejs-chapter-block-last' : '') + '\">' +
\t\t\t\t\t\t\t'<span class=\"ch-title\">' + chapters.entries.text[i] + '</span>' +
\t\t\t\t\t\t\t'<span class=\"ch-time\">' + mejs.Utility.secondsToTimeCode(chapters.entries.times[i].start, t.options) + '&ndash;' + mejs.Utility.secondsToTimeCode(chapters.entries.times[i].stop, t.options) + '</span>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t'</div>'));
\t\t\t\tusedPercent += percent;
\t\t\t}

\t\t\tt.chapters.find('div.mejs-chapter').click(function() {
\t\t\t\tt.media.setCurrentTime( parseFloat( \$(this).attr('rel') ) );
\t\t\t\tif (t.media.paused) {
\t\t\t\t\tt.media.play();
\t\t\t\t}
\t\t\t});

\t\t\tt.chapters.show();
\t\t}
\t});



\tmejs.language = {
\t\tcodes:  {
\t\t\taf:'Afrikaans',
\t\t\tsq:'Albanian',
\t\t\tar:'Arabic',
\t\t\tbe:'Belarusian',
\t\t\tbg:'Bulgarian',
\t\t\tca:'Catalan',
\t\t\tzh:'Chinese',
\t\t\t'zh-cn':'Chinese Simplified',
\t\t\t'zh-tw':'Chinese Traditional',
\t\t\thr:'Croatian',
\t\t\tcs:'Czech',
\t\t\tda:'Danish',
\t\t\tnl:'Dutch',
\t\t\ten:'English',
\t\t\tet:'Estonian',
\t\t\tfl:'Filipino',
\t\t\tfi:'Finnish',
\t\t\tfr:'French',
\t\t\tgl:'Galician',
\t\t\tde:'German',
\t\t\tel:'Greek',
\t\t\tht:'Haitian Creole',
\t\t\tiw:'Hebrew',
\t\t\thi:'Hindi',
\t\t\thu:'Hungarian',
\t\t\tis:'Icelandic',
\t\t\tid:'Indonesian',
\t\t\tga:'Irish',
\t\t\tit:'Italian',
\t\t\tja:'Japanese',
\t\t\tko:'Korean',
\t\t\tlv:'Latvian',
\t\t\tlt:'Lithuanian',
\t\t\tmk:'Macedonian',
\t\t\tms:'Malay',
\t\t\tmt:'Maltese',
\t\t\tno:'Norwegian',
\t\t\tfa:'Persian',
\t\t\tpl:'Polish',
\t\t\tpt:'Portuguese',
\t\t\t// 'pt-pt':'Portuguese (Portugal)',
\t\t\tro:'Romanian',
\t\t\tru:'Russian',
\t\t\tsr:'Serbian',
\t\t\tsk:'Slovak',
\t\t\tsl:'Slovenian',
\t\t\tes:'Spanish',
\t\t\tsw:'Swahili',
\t\t\tsv:'Swedish',
\t\t\ttl:'Tagalog',
\t\t\tth:'Thai',
\t\t\ttr:'Turkish',
\t\t\tuk:'Ukrainian',
\t\t\tvi:'Vietnamese',
\t\t\tcy:'Welsh',
\t\t\tyi:'Yiddish'
\t\t}
\t};

\t/*
\tParses WebVTT format which should be formatted as
\t================================
\tWEBVTT

\t1
\t00:00:01,1 --> 00:00:05,000
\tA line of text

\t2
\t00:01:15,1 --> 00:02:05,000
\tA second line of text

\t===============================

\tAdapted from: http://www.delphiki.com/html5/playr
\t*/
\tmejs.TrackFormatParser = {
\t\twebvtt: {
\t\t\tpattern_timecode: /^((?:[0-9]{1,2}:)?[0-9]{2}:[0-9]{2}([,.][0-9]{1,3})?) --\\> ((?:[0-9]{1,2}:)?[0-9]{2}:[0-9]{2}([,.][0-9]{3})?)(.*)\$/,

\t\t\tparse: function(trackText) {
\t\t\t\tvar
\t\t\t\t\ti = 0,
\t\t\t\t\tlines = mejs.TrackFormatParser.split2(trackText, /\\r?\\n/),
\t\t\t\t\tentries = {text:[], times:[]},
\t\t\t\t\ttimecode,
\t\t\t\t\ttext,
\t\t\t\t\tidentifier;
\t\t\t\tfor(; i<lines.length; i++) {
\t\t\t\t\ttimecode = this.pattern_timecode.exec(lines[i]);

\t\t\t\t\tif (timecode && i<lines.length) {
\t\t\t\t\t\tif ((i - 1) >= 0 && lines[i - 1] !== '') {
\t\t\t\t\t\t\tidentifier = lines[i - 1];
\t\t\t\t\t\t}
\t\t\t\t\t\ti++;
\t\t\t\t\t\t// grab all the (possibly multi-line) text that follows
\t\t\t\t\t\ttext = lines[i];
\t\t\t\t\t\ti++;
\t\t\t\t\t\twhile(lines[i] !== '' && i<lines.length){
\t\t\t\t\t\t\ttext = text + '\\n' + lines[i];
\t\t\t\t\t\t\ti++;
\t\t\t\t\t\t}
\t\t\t\t\t\ttext = \$.trim(text).replace(/(\\b(https?|ftp|file):\\/\\/[-A-Z0-9+&@#\\/%?=~_|!:,.;]*[-A-Z0-9+&@#\\/%=~_|])/ig, \"<a href='\$1' target='_blank'>\$1</a>\");
\t\t\t\t\t\t// Text is in a different array so I can use .join
\t\t\t\t\t\tentries.text.push(text);
\t\t\t\t\t\tentries.times.push(
\t\t\t\t\t\t{
\t\t\t\t\t\t\tidentifier: identifier,
\t\t\t\t\t\t\tstart: (mejs.Utility.convertSMPTEtoSeconds(timecode[1]) === 0) ? 0.200 : mejs.Utility.convertSMPTEtoSeconds(timecode[1]),
\t\t\t\t\t\t\tstop: mejs.Utility.convertSMPTEtoSeconds(timecode[3]),
\t\t\t\t\t\t\tsettings: timecode[5]
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tidentifier = '';
\t\t\t\t}
\t\t\t\treturn entries;
\t\t\t}
\t\t},
\t\t// Thanks to Justin Capella: https://github.com/johndyer/mediaelement/pull/420
\t\tdfxp: {
\t\t\tparse: function(trackText) {
\t\t\t\ttrackText = \$(trackText).filter(\"tt\");
\t\t\t\tvar
\t\t\t\t\ti = 0,
\t\t\t\t\tcontainer = trackText.children(\"div\").eq(0),
\t\t\t\t\tlines = container.find(\"p\"),
\t\t\t\t\tstyleNode = trackText.find(\"#\" + container.attr(\"style\")),
\t\t\t\t\tstyles,
\t\t\t\t\ttext,
\t\t\t\t\tentries = {text:[], times:[]};


\t\t\t\tif (styleNode.length) {
\t\t\t\t\tvar attributes = styleNode.removeAttr(\"id\").get(0).attributes;
\t\t\t\t\tif (attributes.length) {
\t\t\t\t\t\tstyles = {};
\t\t\t\t\t\tfor (i = 0; i < attributes.length; i++) {
\t\t\t\t\t\t\tstyles[attributes[i].name.split(\":\")[1]] = attributes[i].value;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfor(i = 0; i<lines.length; i++) {
\t\t\t\t\tvar style;
\t\t\t\t\tvar _temp_times = {
\t\t\t\t\t\tstart: null,
\t\t\t\t\t\tstop: null,
\t\t\t\t\t\tstyle: null
\t\t\t\t\t};
\t\t\t\t\tif (lines.eq(i).attr(\"begin\")) _temp_times.start = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i).attr(\"begin\"));
\t\t\t\t\tif (!_temp_times.start && lines.eq(i-1).attr(\"end\")) _temp_times.start = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i-1).attr(\"end\"));
\t\t\t\t\tif (lines.eq(i).attr(\"end\")) _temp_times.stop = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i).attr(\"end\"));
\t\t\t\t\tif (!_temp_times.stop && lines.eq(i+1).attr(\"begin\")) _temp_times.stop = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i+1).attr(\"begin\"));
\t\t\t\t\tif (styles) {
\t\t\t\t\t\tstyle = \"\";
\t\t\t\t\t\tfor (var _style in styles) {
\t\t\t\t\t\t\tstyle += _style + \":\" + styles[_style] + \";\";
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (style) _temp_times.style = style;
\t\t\t\t\tif (_temp_times.start === 0) _temp_times.start = 0.200;
\t\t\t\t\tentries.times.push(_temp_times);
\t\t\t\t\ttext = \$.trim(lines.eq(i).html()).replace(/(\\b(https?|ftp|file):\\/\\/[-A-Z0-9+&@#\\/%?=~_|!:,.;]*[-A-Z0-9+&@#\\/%=~_|])/ig, \"<a href='\$1' target='_blank'>\$1</a>\");
\t\t\t\t\tentries.text.push(text);
\t\t\t\t}
\t\t\t\treturn entries;
\t\t\t}
\t\t},
\t\tsplit2: function (text, regex) {
\t\t\t// normal version for compliant browsers
\t\t\t// see below for IE fix
\t\t\treturn text.split(regex);
\t\t}
\t};

\t// test for browsers with bad String.split method.
\tif ('x\\n\\ny'.split(/\\n/gi).length != 3) {
\t\t// add super slow IE8 and below version
\t\tmejs.TrackFormatParser.split2 = function(text, regex) {
\t\t\tvar
\t\t\t\tparts = [],
\t\t\t\tchunk = '',
\t\t\t\ti;

\t\t\tfor (i=0; i<text.length; i++) {
\t\t\t\tchunk += text.substring(i,i+1);
\t\t\t\tif (regex.test(chunk)) {
\t\t\t\t\tparts.push(chunk.replace(regex, ''));
\t\t\t\t\tchunk = '';
\t\t\t\t}
\t\t\t}
\t\t\tparts.push(chunk);
\t\t\treturn parts;
\t\t};
\t}

})(mejs.\$);

// Source Chooser Plugin
(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tsourcechooserText: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildsourcechooser: function(player, controls, layers, media) {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tsourceTitle = t.options.sourcechooserText ? t.options.sourcechooserText : mejs.i18n.t('mejs.source-chooser'),
\t\t\t\thoverTimeout
\t\t\t;

\t\t\tplayer.sourcechooserButton =
\t\t\t\t\$('<div class=\"mejs-button mejs-sourcechooser-button\">'+
\t\t\t\t\t\t'<button type=\"button\" role=\"button\" aria-haspopup=\"true\" aria-owns=\"' + t.id + '\" title=\"' + sourceTitle + '\" aria-label=\"' + sourceTitle + '\"></button>'+
\t\t\t\t\t\t'<div class=\"mejs-sourcechooser-selector mejs-offscreen\" role=\"menu\" aria-expanded=\"false\" aria-hidden=\"true\">'+
\t\t\t\t\t\t\t'<ul>'+
\t\t\t\t\t\t\t'</ul>'+
\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(controls)

\t\t\t\t\t// hover
\t\t\t\t\t.hover(function() {
\t\t\t\t\t\tclearTimeout(hoverTimeout);
\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t}, function() {
\t\t\t\t\t\tvar self = \$(this);
\t\t\t\t\t\thoverTimeout = setTimeout(function () {
\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t}, 500);
\t\t\t\t\t})

\t\t\t\t\t// keyboard menu activation
\t\t\t\t\t.on('keydown', function (e) {
\t\t\t\t\t\tvar keyCode = e.keyCode;

\t\t\t\t\t\tswitch (keyCode) {
\t\t\t\t\t\t\tcase 32: // space
\t\t\t\t\t\t\t\tif (!mejs.MediaFeatures.isFirefox) { // space sends the click event in Firefox
\t\t\t\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$(this).find('.mejs-sourcechooser-selector')
\t\t\t\t\t\t\t\t\t.find('input[type=radio]:checked').first().focus();
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase 13: // enter
\t\t\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t\t\t\t\$(this).find('.mejs-sourcechooser-selector')
\t\t\t\t\t\t\t\t\t.find('input[type=radio]:checked').first().focus();
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase 27: // esc
\t\t\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t\t\t\$(this).find('button').focus();
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})

\t\t\t\t\t// close menu when tabbing away
\t\t\t\t\t.on('focusout', mejs.Utility.debounce(function (e) { // Safari triggers focusout multiple times
\t\t\t\t\t\t// Firefox does NOT support e.relatedTarget to see which element
\t\t\t\t\t\t// just lost focus, so wait to find the next focused element
\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\tvar parent = \$(document.activeElement).closest('.mejs-sourcechooser-selector');
\t\t\t\t\t\t\tif (!parent.length) {
\t\t\t\t\t\t\t\t// focus is outside the control; close menu
\t\t\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 0);
\t\t\t\t\t}, 100))

\t\t\t\t\t// handle clicks to the source radio buttons
\t\t\t\t\t.delegate('input[type=radio]', 'click', function() {
\t\t\t\t\t\t// set aria states
\t\t\t\t\t\t\$(this).attr('aria-selected', true).attr('checked', 'checked');
\t\t\t\t\t\t\$(this).closest('.mejs-sourcechooser-selector').find('input[type=radio]').not(this).attr('aria-selected', 'false').removeAttr('checked');

\t\t\t\t\t\tvar src = this.value;

\t\t\t\t\t\tif (media.currentSrc != src) {
\t\t\t\t\t\t\tvar currentTime = media.currentTime;
\t\t\t\t\t\t\tvar paused = media.paused;
\t\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t\t\tmedia.setSrc(src);

\t\t\t\t\t\t\tmedia.addEventListener('loadedmetadata', function(e) {
\t\t\t\t\t\t\t\tmedia.currentTime = currentTime;
\t\t\t\t\t\t\t}, true);

\t\t\t\t\t\t\tvar canPlayAfterSourceSwitchHandler = function(e) {
\t\t\t\t\t\t\t\tif (!paused) {
\t\t\t\t\t\t\t\t\tmedia.play();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tmedia.removeEventListener(\"canplay\", canPlayAfterSourceSwitchHandler, true);
\t\t\t\t\t\t\t};
\t\t\t\t\t\t\tmedia.addEventListener('canplay', canPlayAfterSourceSwitchHandler, true);
\t\t\t\t\t\t\tmedia.load();
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\t// Handle click so that screen readers can toggle the menu
\t\t\t\t\t.delegate('button', 'click', function (e) {
\t\t\t\t\t\tif (\$(this).siblings('.mejs-sourcechooser-selector').hasClass('mejs-offscreen')) {
\t\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t\t\t\$(this).siblings('.mejs-sourcechooser-selector').find('input[type=radio]:checked').first().focus();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t// add to list
\t\t\tfor (var i in this.node.children) {
\t\t\t\tvar src = this.node.children[i];
\t\t\t\tif (src.nodeName === 'SOURCE' && (media.canPlayType(src.type) == 'probably' || media.canPlayType(src.type) == 'maybe')) {
\t\t\t\t\tplayer.addSourceButton(src.src, src.title, src.type, media.src == src.src);
\t\t\t\t}
\t\t\t}
\t\t},

\t\taddSourceButton: function(src, label, type, isCurrent) {
\t\t\tvar t = this;
\t\t\tif (label === '' || label == undefined) {
\t\t\t\tlabel = src;
\t\t\t}
\t\t\ttype = type.split('/')[1];

\t\t\tt.sourcechooserButton.find('ul').append(
\t\t\t\t\$('<li>'+
\t\t\t\t\t\t'<input type=\"radio\" name=\"' + t.id + '_sourcechooser\" id=\"' + t.id + '_sourcechooser_' + label + type + '\" role=\"menuitemradio\" value=\"' + src + '\" ' + (isCurrent ? 'checked=\"checked\"' : '') + 'aria-selected=\"' + isCurrent + '\"' + ' />'+
\t\t\t\t\t\t'<label for=\"' + t.id + '_sourcechooser_' + label + type + '\" aria-hidden=\"true\">' + label + ' (' + type + ')</label>'+
\t\t\t\t\t'</li>')
\t\t\t);

\t\t\tt.adjustSourcechooserBox();

\t\t},

\t\tadjustSourcechooserBox: function() {
\t\t\tvar t = this;
\t\t\t// adjust the size of the outer box
\t\t\tt.sourcechooserButton.find('.mejs-sourcechooser-selector').height(
\t\t\t\tt.sourcechooserButton.find('.mejs-sourcechooser-selector ul').outerHeight(true)
\t\t\t);
\t\t},

\t\thideSourcechooserSelector: function () {
\t\t\tthis.sourcechooserButton.find('.mejs-sourcechooser-selector')
\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t.attr('aria-expanded', 'false')
\t\t\t\t.attr('aria-hidden', 'true')
\t\t\t\t.find('input[type=radio]') // make radios not fucusable
\t\t\t\t.attr('tabindex', '-1');
\t\t},

\t\tshowSourcechooserSelector: function () {
\t\t\tthis.sourcechooserButton.find('.mejs-sourcechooser-selector')
\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t.attr('aria-expanded', 'true')
\t\t\t\t.attr('aria-hidden', 'false')
\t\t\t\t.find('input[type=radio]')
\t\t\t\t.attr('tabindex', '0');
\t\t}
\t});

})(mejs.\$);

/*
* ContextMenu Plugin
* 
*
*/

(function(\$) {

\$.extend(mejs.MepDefaults,
\t{ 'contextMenuItems': [
\t\t// demo of a fullscreen option
\t\t{ 
\t\t\trender: function(player) {
\t\t\t\t
\t\t\t\t// check for fullscreen plugin
\t\t\t\tif (typeof player.enterFullScreen == 'undefined')
\t\t\t\t\treturn null;
\t\t\t
\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\treturn mejs.i18n.t('mejs.fullscreen-off');
\t\t\t\t} else {
\t\t\t\t\treturn mejs.i18n.t('mejs.fullscreen-on');
\t\t\t\t}
\t\t\t},
\t\t\tclick: function(player) {
\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t} else {
\t\t\t\t\tplayer.enterFullScreen();
\t\t\t\t}
\t\t\t}
\t\t}
\t\t,
\t\t// demo of a mute/unmute button
\t\t{ 
\t\t\trender: function(player) {
\t\t\t\tif (player.media.muted) {
\t\t\t\t\treturn mejs.i18n.t('mejs.unmute');
\t\t\t\t} else {
\t\t\t\t\treturn mejs.i18n.t('mejs.mute');
\t\t\t\t}
\t\t\t},
\t\t\tclick: function(player) {
\t\t\t\tif (player.media.muted) {
\t\t\t\t\tplayer.setMuted(false);
\t\t\t\t} else {
\t\t\t\t\tplayer.setMuted(true);
\t\t\t\t}
\t\t\t}
\t\t},
\t\t// separator
\t\t{
\t\t\tisSeparator: true
\t\t}
\t\t,
\t\t// demo of simple download video
\t\t{ 
\t\t\trender: function(player) {
\t\t\t\treturn mejs.i18n.t('mejs.download-video');
\t\t\t},
\t\t\tclick: function(player) {
\t\t\t\twindow.location.href = player.media.currentSrc;
\t\t\t}
\t\t}\t
\t]}
);


\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildcontextmenu: function(player, controls, layers, media) {
\t\t\t
\t\t\t// create context menu
\t\t\tplayer.contextMenu = \$('<div class=\"mejs-contextmenu\"></div>')
\t\t\t\t\t\t\t\t.appendTo(\$('body'))
\t\t\t\t\t\t\t\t.hide();
\t\t\t
\t\t\t// create events for showing context menu
\t\t\tplayer.container.bind('contextmenu', function(e) {
\t\t\t\tif (player.isContextMenuEnabled) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tplayer.renderContextMenu(e.clientX-1, e.clientY-1);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t\tplayer.container.bind('click', function() {
\t\t\t\tplayer.contextMenu.hide();
\t\t\t});\t
\t\t\tplayer.contextMenu.bind('mouseleave', function() {

\t\t\t\t//
\t\t\t\tplayer.startContextMenuTimer();
\t\t\t\t
\t\t\t});\t\t
\t\t},

\t\tcleancontextmenu: function(player) {
\t\t\tplayer.contextMenu.remove();
\t\t},
\t\t
\t\tisContextMenuEnabled: true,
\t\tenableContextMenu: function() {
\t\t\tthis.isContextMenuEnabled = true;
\t\t},
\t\tdisableContextMenu: function() {
\t\t\tthis.isContextMenuEnabled = false;
\t\t},
\t\t
\t\tcontextMenuTimeout: null,
\t\tstartContextMenuTimer: function() {
\t\t\t//
\t\t\t
\t\t\tvar t = this;
\t\t\t
\t\t\tt.killContextMenuTimer();
\t\t\t
\t\t\tt.contextMenuTimer = setTimeout(function() {
\t\t\t\tt.hideContextMenu();
\t\t\t\tt.killContextMenuTimer();
\t\t\t}, 750);
\t\t},
\t\tkillContextMenuTimer: function() {
\t\t\tvar timer = this.contextMenuTimer;
\t\t\t
\t\t\t//
\t\t\t
\t\t\tif (timer != null) {\t\t\t\t
\t\t\t\tclearTimeout(timer);
\t\t\t\tdelete timer;
\t\t\t\ttimer = null;
\t\t\t}
\t\t},\t\t
\t\t
\t\thideContextMenu: function() {
\t\t\tthis.contextMenu.hide();
\t\t},
\t\t
\t\trenderContextMenu: function(x,y) {
\t\t\t
\t\t\t// alway re-render the items so that things like \"turn fullscreen on\" and \"turn fullscreen off\" are always written correctly
\t\t\tvar t = this,
\t\t\t\thtml = '',
\t\t\t\titems = t.options.contextMenuItems;
\t\t\t
\t\t\tfor (var i=0, il=items.length; i<il; i++) {
\t\t\t\t
\t\t\t\tif (items[i].isSeparator) {
\t\t\t\t\thtml += '<div class=\"mejs-contextmenu-separator\"></div>';
\t\t\t\t} else {
\t\t\t\t
\t\t\t\t\tvar rendered = items[i].render(t);
\t\t\t\t
\t\t\t\t\t// render can return null if the item doesn't need to be used at the moment
\t\t\t\t\tif (rendered != null) {
\t\t\t\t\t\thtml += '<div class=\"mejs-contextmenu-item\" data-itemindex=\"' + i + '\" id=\"element-' + (Math.random()*1000000) + '\">' + rendered + '</div>';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t// position and show the context menu
\t\t\tt.contextMenu
\t\t\t\t.empty()
\t\t\t\t.append(\$(html))
\t\t\t\t.css({top:y, left:x})
\t\t\t\t.show();
\t\t\t\t
\t\t\t// bind events
\t\t\tt.contextMenu.find('.mejs-contextmenu-item').each(function() {
\t\t\t\t\t\t\t
\t\t\t\t// which one is this?
\t\t\t\tvar \$dom = \$(this),
\t\t\t\t\titemIndex = parseInt( \$dom.data('itemindex'), 10 ),
\t\t\t\t\titem = t.options.contextMenuItems[itemIndex];
\t\t\t\t
\t\t\t\t// bind extra functionality?
\t\t\t\tif (typeof item.show != 'undefined')
\t\t\t\t\titem.show( \$dom , t);
\t\t\t\t
\t\t\t\t// bind click action
\t\t\t\t\$dom.click(function() {\t\t\t
\t\t\t\t\t// perform click action
\t\t\t\t\tif (typeof item.click != 'undefined')
\t\t\t\t\t\titem.click(t);
\t\t\t\t\t
\t\t\t\t\t// close
\t\t\t\t\tt.contextMenu.hide();\t\t\t\t
\t\t\t\t});\t\t\t\t
\t\t\t});\t
\t\t\t
\t\t\t// stop the controls from hiding
\t\t\tsetTimeout(function() {
\t\t\t\tt.killControlsTimer('rev3');\t
\t\t\t}, 100);
\t\t\t\t\t\t
\t\t}
\t});
\t
})(mejs.\$);
(function(\$) {
\t// skip back button

\t\$.extend(mejs.MepDefaults, {
\t\tskipBackInterval: 30,
\t\t// %1 will be replaced with skipBackInterval in this string
\t\tskipBackText: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildskipback: function(player, controls, layers, media) {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tdefaultTitle = mejs.i18n.t('mejs.time-skip-back', t.options.skipBackInterval),
\t\t\t\tskipTitle = t.options.skipBackText ? t.options.skipBackText : defaultTitle,
\t\t\t\t// create the loop button
\t\t\t\tloop =
\t\t\t\t\$('<div class=\"mejs-button mejs-skip-back-button\">' +
\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + skipTitle + '\" aria-label=\"' + skipTitle + '\">' + t.options.skipBackInterval + '</button>' +
\t\t\t\t'</div>')
\t\t\t\t// append it to the toolbar
\t\t\t\t.appendTo(controls)
\t\t\t\t// add a click toggle event
\t\t\t\t.click(function() {
\t\t\t\t\tmedia.setCurrentTime(Math.max(media.currentTime - t.options.skipBackInterval, 0));
\t\t\t\t\t\$(this).find('button').blur();
\t\t\t\t});
\t\t}
\t});

})(mejs.\$);

/**
 * Postroll plugin
 */
(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tpostrollCloseText: ''
\t});

\t// Postroll
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildpostroll: function(player, controls, layers, media) {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tpostrollTitle = t.options.postrollCloseText ? t.options.postrollCloseText : mejs.i18n.t('mejs.close'),
\t\t\t\tpostrollLink = t.container.find('link[rel=\"postroll\"]').attr('href');

\t\t\tif (typeof postrollLink !== 'undefined') {
\t\t\t\tplayer.postroll =
\t\t\t\t\t\$('<div class=\"mejs-postroll-layer mejs-layer\"><a class=\"mejs-postroll-close\" onclick=\"\$(this).parent().hide();return false;\">' + postrollTitle + '</a><div class=\"mejs-postroll-layer-content\"></div></div>').prependTo(layers).hide();

\t\t\t\tt.media.addEventListener('ended', function (e) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\turl: postrollLink,
\t\t\t\t\t\tsuccess: function (data, textStatus) {
\t\t\t\t\t\t\tlayers.find('.mejs-postroll-layer-content').html(data);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tplayer.postroll.show();
\t\t\t\t}, false);
\t\t\t}
\t\t}
\t});

})(mejs.\$);
/*
MediaElement-Markers is a MediaElement.js plugin that lets you add Visual Cues in the progress time rail. 
This plugin also lets you register a custom callback function that will be called everytime the play position reaches a marker. 
Marker position and a reference to the MediaElement Player object is passed to the registered callback function for any post processing. Marker color is configurable.

*/

(function (\$) {
    // markers

    \$.extend(mejs.MepDefaults, {
        markerColor: '#E9BC3D', //default marker color
        markers: [],
        markerCallback: function () {

        }
    });

    \$.extend(MediaElementPlayer.prototype, {
        buildmarkers: function (player, controls, layers, media) {
            var t = this,
                i = 0,
                currentPos = -1,
                currentMarker = -1,
                lastPlayPos = -1, //Track backward seek
                lastMarkerCallBack = -1; //Prevents successive firing of callbacks

            for (i = 0; i < player.options.markers.length; ++i) {
                controls.find('.mejs-time-total').append('<span class=\"mejs-time-marker\"></span>');
            }

            media.addEventListener('durationchange', function (e) {
                player.setmarkers(controls);
            });
            media.addEventListener('timeupdate', function (e) {
                currentPos = Math.floor(media.currentTime);
                if (lastPlayPos > currentPos) {
                    if (lastMarkerCallBack > currentPos) {
                        lastMarkerCallBack = -1;
                    }
                } else {
                    lastPlayPos = currentPos;
                }

                for (i = 0; i < player.options.markers.length; ++i) {
                    currentMarker = Math.floor(player.options.markers[i]); 
                    if (currentPos === currentMarker && currentMarker !== lastMarkerCallBack) {
                        player.options.markerCallback(media, media.currentTime); //Fires the callback function
                        lastMarkerCallBack = currentMarker;
                    }
                }

            }, false);

        },
        setmarkers: function (controls) {
            var t = this,
                i = 0,
                left;

            for (i = 0; i < t.options.markers.length; ++i) {
                if (Math.floor(t.options.markers[i]) <= t.media.duration && Math.floor(t.options.markers[i]) >= 0) {
                    left = 100 * Math.floor(t.options.markers[i]) / t.media.duration;
                    \$(controls.find('.mejs-time-marker')[i]).css({
                        \"width\": \"1px\",
                        \"left\": left+\"%\",
                        \"background\": t.options.markerColor
                    });
                }
            }

        }
    });
})(mejs.\$);
\t
return mejs;
}));";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mediaelement-and-player.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 *
 * MediaElement.js
 * HTML5 <video> and <audio> shim and player
 * http://mediaelementjs.com/
 *
 * Creates a JavaScript object that mimics HTML5 MediaElement API
 * for browsers that don't understand HTML5 or can't play the provided codec
 * Can play MP4 (H.264), Ogg, WebM, FLV, WMV, WMA, ACC, and MP3
 *
 * Copyright 2010-2014, John Dyer (http://j.hn)
 * License: MIT
 *
 */

(function(factory) {
\tif (typeof define === 'function' && define.amd) {
\t\t// AMD
\t\tdefine(['jquery'], factory);
\t} else if (typeof module === 'object' && module.exports) {
\t\tfactory(require('jquery'));
\t} else {
\t\t// Browser globals
\t\tfactory(jQuery);
\t}
}(function(jQuery) {
// Namespace
var mejs = mejs || {};

// version number
mejs.version = '2.23.4';


// player number (for missing, same id attr)
mejs.meIndex = 0;

// media types accepted by plugins
mejs.plugins = {
\tsilverlight: [
\t\t{version: [3,0], types: ['video/mp4','video/m4v','video/mov','video/wmv','audio/wma','audio/m4a','audio/mp3','audio/wav','audio/mpeg']}
\t],
\tflash: [
\t\t{version: [9,0,124], types: ['video/mp4','video/m4v','video/mov','video/flv','video/rtmp','video/x-flv','audio/flv','audio/x-flv','audio/mp3','audio/m4a', 'audio/mp4', 'audio/mpeg', 'video/dailymotion', 'video/x-dailymotion', 'application/x-mpegURL', 'audio/ogg']}
\t\t// 'video/youtube', 'video/x-youtube', 
\t\t// ,{version: [12,0], types: ['video/webm']} // for future reference (hopefully!)
\t],
\tyoutube: [
\t\t{version: null, types: ['video/youtube', 'video/x-youtube', 'audio/youtube', 'audio/x-youtube']}
\t],
\tvimeo: [
\t\t{version: null, types: ['video/vimeo', 'video/x-vimeo']}
\t]
};

/*
Utility methods
*/
mejs.Utility = {
\tencodeUrl: function(url) {
\t\treturn encodeURIComponent(url); //.replace(/\\?/gi,'%3F').replace(/=/gi,'%3D').replace(/&/gi,'%26');
\t},
\tescapeHTML: function(s) {
\t\treturn s.toString().split('&').join('&amp;').split('<').join('&lt;').split('\"').join('&quot;');
\t},
\tabsolutizeUrl: function(url) {
\t\tvar el = document.createElement('div');
\t\tel.innerHTML = '<a href=\"' + this.escapeHTML(url) + '\">x</a>';
\t\treturn el.firstChild.href;
\t},
\tgetScriptPath: function(scriptNames) {
\t\tvar
\t\t\ti = 0,
\t\t\tj,
\t\t\tcodePath = '',
\t\t\ttestname = '',
\t\t\tslashPos,
\t\t\tfilenamePos,
\t\t\tscriptUrl,
\t\t\tscriptPath,\t\t\t
\t\t\tscriptFilename,
\t\t\tscripts = document.getElementsByTagName('script'),
\t\t\til = scripts.length,
\t\t\tjl = scriptNames.length;
\t\t\t
\t\t// go through all <script> tags
\t\tfor (; i < il; i++) {
\t\t\tscriptUrl = scripts[i].src;
\t\t\tslashPos = scriptUrl.lastIndexOf('/');
\t\t\tif (slashPos > -1) {
\t\t\t\tscriptFilename = scriptUrl.substring(slashPos + 1);
\t\t\t\tscriptPath = scriptUrl.substring(0, slashPos + 1);
\t\t\t} else {
\t\t\t\tscriptFilename = scriptUrl;
\t\t\t\tscriptPath = '';\t\t\t
\t\t\t}
\t\t\t
\t\t\t// see if any <script> tags have a file name that matches the 
\t\t\tfor (j = 0; j < jl; j++) {
\t\t\t\ttestname = scriptNames[j];
\t\t\t\tfilenamePos = scriptFilename.indexOf(testname);
\t\t\t\tif (filenamePos > -1) {
\t\t\t\t\tcodePath = scriptPath;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t// if we found a path, then break and return it
\t\t\tif (codePath !== '') {
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t\t
\t\t// send the best path back
\t\treturn codePath;
\t},
\t/*
\t * Calculate the time format to use. We have a default format set in the
\t * options but it can be imcomplete. We ajust it according to the media
\t * duration.
\t *
\t * We support format like 'hh:mm:ss:ff'.
\t */
\tcalculateTimeFormat: function(time, options, fps) {
\t\tif (time < 0) {
\t\t\ttime = 0;
\t\t}

\t\tif(typeof fps == 'undefined') {
\t\t    fps = 25;
\t\t}

\t\tvar format = options.timeFormat,
\t\t\tfirstChar = format[0],
\t\t\tfirstTwoPlaces = (format[1] == format[0]),
\t\t\tseparatorIndex = firstTwoPlaces? 2: 1,
\t\t\tseparator = ':',
\t\t\thours = Math.floor(time / 3600) % 24,
\t\t\tminutes = Math.floor(time / 60) % 60,
\t\t\tseconds = Math.floor(time % 60),
\t\t\tframes = Math.floor(((time % 1)*fps).toFixed(3)),
\t\t\tlis = [
\t\t\t\t[frames, 'f'],
\t\t\t\t[seconds, 's'],
\t\t\t\t[minutes, 'm'],
\t\t\t\t[hours, 'h']
\t\t\t];

\t\t// Try to get the separator from the format
\t\tif (format.length < separatorIndex) {
\t\t\tseparator = format[separatorIndex];
\t\t}

\t\tvar required = false;

\t\tfor (var i=0, len=lis.length; i < len; i++) {
\t\t\tif (format.indexOf(lis[i][1]) !== -1) {
\t\t\t\trequired=true;
\t\t\t}
\t\t\telse if (required) {
\t\t\t\tvar hasNextValue = false;
\t\t\t\tfor (var j=i; j < len; j++) {
\t\t\t\t\tif (lis[j][0] > 0) {
\t\t\t\t\t\thasNextValue = true;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (! hasNextValue) {
\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tif (!firstTwoPlaces) {
\t\t\t\t\tformat = firstChar + format;
\t\t\t\t}
\t\t\t\tformat = lis[i][1] + separator + format;
\t\t\t\tif (firstTwoPlaces) {
\t\t\t\t\tformat = lis[i][1] + format;
\t\t\t\t}
\t\t\t\tfirstChar = lis[i][1];
\t\t\t}
\t\t}
\t\toptions.currentTimeFormat = format;
\t},
\t/*
\t * Prefix the given number by zero if it is lower than 10.
\t */
\ttwoDigitsString: function(n) {
\t\tif (n < 10) {
\t\t\treturn '0' + n;
\t\t}
\t\treturn String(n);
\t},
\tsecondsToTimeCode: function(time, options) {
\t\tif (time < 0) {
\t\t\ttime = 0;
\t\t}

\t\t// Maintain backward compatibility with method signature before v2.18.
\t\tif (typeof options !== 'object') {
\t\t\tvar format = 'm:ss';
\t\t\tformat = arguments[1] ? 'hh:mm:ss' : format; // forceHours
\t\t\tformat = arguments[2] ? format + ':ff' : format; // showFrameCount

\t\t\toptions = {
\t\t\t\tcurrentTimeFormat: format,
\t\t\t\tframesPerSecond: arguments[3] || 25
\t\t\t};
\t\t}

\t\tvar fps = options.framesPerSecond;
\t\tif(typeof fps === 'undefined') {
\t\t\tfps = 25;
\t\t}

\t\tvar format = options.currentTimeFormat,
\t\t\thours = Math.floor(time / 3600) % 24,
\t\t\tminutes = Math.floor(time / 60) % 60,
\t\t\tseconds = Math.floor(time % 60),
\t\t\tframes = Math.floor(((time % 1)*fps).toFixed(3));
\t\t\tlis = [
\t\t\t\t[frames, 'f'],
\t\t\t\t[seconds, 's'],
\t\t\t\t[minutes, 'm'],
\t\t\t\t[hours, 'h']
\t\t\t];

\t\tvar res = format;
\t\tfor (i=0,len=lis.length; i < len; i++) {
\t\t\tres = res.replace(lis[i][1]+lis[i][1], this.twoDigitsString(lis[i][0]));
\t\t\tres = res.replace(lis[i][1], lis[i][0]);
\t\t}
\t\treturn res;
\t},
\t
\ttimeCodeToSeconds: function(hh_mm_ss_ff, forceHours, showFrameCount, fps){
\t\tif (typeof showFrameCount == 'undefined') {
\t\t    showFrameCount=false;
\t\t} else if(typeof fps == 'undefined') {
\t\t    fps = 25;
\t\t}
\t
\t\tvar tc_array = hh_mm_ss_ff.split(\":\"),
\t\t\ttc_hh = parseInt(tc_array[0], 10),
\t\t\ttc_mm = parseInt(tc_array[1], 10),
\t\t\ttc_ss = parseInt(tc_array[2], 10),
\t\t\ttc_ff = 0,
\t\t\ttc_in_seconds = 0;
\t\t
\t\tif (showFrameCount) {
\t\t    tc_ff = parseInt(tc_array[3])/fps;
\t\t}
\t\t
\t\ttc_in_seconds = ( tc_hh * 3600 ) + ( tc_mm * 60 ) + tc_ss + tc_ff;
\t\t
\t\treturn tc_in_seconds;
\t},
\t

\tconvertSMPTEtoSeconds: function (SMPTE) {
\t\tif (typeof SMPTE != 'string') 
\t\t\treturn false;

\t\tSMPTE = SMPTE.replace(',', '.');
\t\t
\t\tvar secs = 0,
\t\t\tdecimalLen = (SMPTE.indexOf('.') != -1) ? SMPTE.split('.')[1].length : 0,
\t\t\tmultiplier = 1;
\t\t
\t\tSMPTE = SMPTE.split(':').reverse();
\t\t
\t\tfor (var i = 0; i < SMPTE.length; i++) {
\t\t\tmultiplier = 1;
\t\t\tif (i > 0) {
\t\t\t\tmultiplier = Math.pow(60, i); 
\t\t\t}
\t\t\tsecs += Number(SMPTE[i]) * multiplier;
\t\t}
\t\treturn Number(secs.toFixed(decimalLen));
\t},\t
\t
\t/* borrowed from SWFObject: http://code.google.com/p/swfobject/source/browse/trunk/swfobject/src/swfobject.js#474 */
\tremoveSwf: function(id) {
\t\tvar obj = document.getElementById(id);
\t\tif (obj && /object|embed/i.test(obj.nodeName)) {
\t\t\tif (mejs.MediaFeatures.isIE) {
\t\t\t\tobj.style.display = \"none\";
\t\t\t\t(function(){
\t\t\t\t\tif (obj.readyState == 4) {
\t\t\t\t\t\tmejs.Utility.removeObjectInIE(id);
\t\t\t\t\t} else {
\t\t\t\t\t\tsetTimeout(arguments.callee, 10);
\t\t\t\t\t}
\t\t\t\t})();
\t\t\t} else {
\t\t\t\tobj.parentNode.removeChild(obj);
\t\t\t}
\t\t}
\t},
\tremoveObjectInIE: function(id) {
\t\tvar obj = document.getElementById(id);
\t\tif (obj) {
\t\t\tfor (var i in obj) {
\t\t\t\tif (typeof obj[i] == \"function\") {
\t\t\t\t\tobj[i] = null;
\t\t\t\t}
\t\t\t}
\t\t\tobj.parentNode.removeChild(obj);
\t\t}\t\t
\t},
    determineScheme: function(url) {
        if (url && url.indexOf(\"://\") != -1) {
            return url.substr(0, url.indexOf(\"://\")+3);
        }
        return \"//\"; // let user agent figure this out
    },

\t// taken from underscore
\tdebounce: function(func, wait, immediate) {
\t\tvar timeout;
\t\treturn function() {
\t\t\tvar context = this, args = arguments;
\t\t\tvar later = function() {
\t\t\t\ttimeout = null;
\t\t\t\tif (!immediate) func.apply(context, args);
\t\t\t};
\t\t\tvar callNow = immediate && !timeout;
\t\t\tclearTimeout(timeout);
\t\t\ttimeout = setTimeout(later, wait);
\t\t\tif (callNow) func.apply(context, args);
\t\t};
\t},

\t/**
\t* Returns true if targetNode appears after sourceNode in the dom.
\t* @param {HTMLElement} sourceNode - the source node for comparison
\t* @param {HTMLElement} targetNode - the node to compare against sourceNode
\t*/
\tisNodeAfter: function(sourceNode, targetNode) {
\t\treturn !!(
\t\t\tsourceNode &&
\t\t\ttargetNode &&
\t\t\ttypeof sourceNode.compareDocumentPosition === 'function' &&
\t\t\tsourceNode.compareDocumentPosition(targetNode) & Node.DOCUMENT_POSITION_PRECEDING
\t\t);
\t}
};


// Core detector, plugins are added below
mejs.PluginDetector = {

\t// main public function to test a plug version number PluginDetector.hasPluginVersion('flash',[9,0,125]);
\thasPluginVersion: function(plugin, v) {
\t\tvar pv = this.plugins[plugin];
\t\tv[1] = v[1] || 0;
\t\tv[2] = v[2] || 0;
\t\treturn (pv[0] > v[0] || (pv[0] == v[0] && pv[1] > v[1]) || (pv[0] == v[0] && pv[1] == v[1] && pv[2] >= v[2])) ? true : false;
\t},

\t// cached values
\tnav: window.navigator,
\tua: window.navigator.userAgent.toLowerCase(),

\t// stored version numbers
\tplugins: [],

\t// runs detectPlugin() and stores the version number
\taddPlugin: function(p, pluginName, mimeType, activeX, axDetect) {
\t\tthis.plugins[p] = this.detectPlugin(pluginName, mimeType, activeX, axDetect);
\t},

\t// get the version number from the mimetype (all but IE) or ActiveX (IE)
\tdetectPlugin: function(pluginName, mimeType, activeX, axDetect) {

\t\tvar version = [0,0,0],
\t\t\tdescription,
\t\t\ti,
\t\t\tax;

\t\t// Firefox, Webkit, Opera
\t\tif (typeof(this.nav.plugins) != 'undefined' && typeof this.nav.plugins[pluginName] == 'object') {
\t\t\tdescription = this.nav.plugins[pluginName].description;
\t\t\tif (description && !(typeof this.nav.mimeTypes != 'undefined' && this.nav.mimeTypes[mimeType] && !this.nav.mimeTypes[mimeType].enabledPlugin)) {
\t\t\t\tversion = description.replace(pluginName, '').replace(/^\\s+/,'').replace(/\\sr/gi,'.').split('.');
\t\t\t\tfor (i=0; i<version.length; i++) {
\t\t\t\t\tversion[i] = parseInt(version[i].match(/\\d+/), 10);
\t\t\t\t}
\t\t\t}
\t\t// Internet Explorer / ActiveX
\t\t} else if (typeof(window.ActiveXObject) != 'undefined') {
\t\t\ttry {
\t\t\t\tax = new ActiveXObject(activeX);
\t\t\t\tif (ax) {
\t\t\t\t\tversion = axDetect(ax);
\t\t\t\t}
\t\t\t}
\t\t\tcatch (e) { }
\t\t}
\t\treturn version;
\t}
};

// Add Flash detection
mejs.PluginDetector.addPlugin('flash','Shockwave Flash','application/x-shockwave-flash','ShockwaveFlash.ShockwaveFlash', function(ax) {
\t// adapted from SWFObject
\tvar version = [],
\t\td = ax.GetVariable(\"\$version\");
\tif (d) {
\t\td = d.split(\" \")[1].split(\",\");
\t\tversion = [parseInt(d[0], 10), parseInt(d[1], 10), parseInt(d[2], 10)];
\t}
\treturn version;
});

// Add Silverlight detection
mejs.PluginDetector.addPlugin('silverlight','Silverlight Plug-In','application/x-silverlight-2','AgControl.AgControl', function (ax) {
\t// Silverlight cannot report its version number to IE
\t// but it does have a isVersionSupported function, so we have to loop through it to get a version number.
\t// adapted from http://www.silverlightversion.com/
\tvar v = [0,0,0,0],
\t\tloopMatch = function(ax, v, i, n) {
\t\t\twhile(ax.isVersionSupported(v[0]+ \".\"+ v[1] + \".\" + v[2] + \".\" + v[3])){
\t\t\t\tv[i]+=n;
\t\t\t}
\t\t\tv[i] -= n;
\t\t};
\tloopMatch(ax, v, 0, 1);
\tloopMatch(ax, v, 1, 1);
\tloopMatch(ax, v, 2, 10000); // the third place in the version number is usually 5 digits (4.0.xxxxx)
\tloopMatch(ax, v, 2, 1000);
\tloopMatch(ax, v, 2, 100);
\tloopMatch(ax, v, 2, 10);
\tloopMatch(ax, v, 2, 1);
\tloopMatch(ax, v, 3, 1);

\treturn v;
});
// add adobe acrobat
/*
PluginDetector.addPlugin('acrobat','Adobe Acrobat','application/pdf','AcroPDF.PDF', function (ax) {
\tvar version = [],
\t\td = ax.GetVersions().split(',')[0].split('=')[1].split('.');

\tif (d) {
\t\tversion = [parseInt(d[0], 10), parseInt(d[1], 10), parseInt(d[2], 10)];
\t}
\treturn version;
});
*/
// necessary detection (fixes for <IE9)
mejs.MediaFeatures = {
\tinit: function() {
\t\tvar
\t\t\tt = this,
\t\t\td = document,
\t\t\tnav = mejs.PluginDetector.nav,
\t\t\tua = mejs.PluginDetector.ua.toLowerCase(),
\t\t\ti,
\t\t\tv,
\t\t\thtml5Elements = ['source','track','audio','video'];

\t\t// detect browsers (only the ones that have some kind of quirk we need to work around)
\t\tt.isiPad = (ua.match(/ipad/i) !== null);
\t\tt.isiPhone = (ua.match(/iphone/i) !== null);
\t\tt.isiOS = t.isiPhone || t.isiPad;
\t\tt.isAndroid = (ua.match(/android/i) !== null);
\t\tt.isBustedAndroid = (ua.match(/android 2\\.[12]/) !== null);
\t\tt.isBustedNativeHTTPS = (location.protocol === 'https:' && (ua.match(/android [12]\\./) !== null || ua.match(/macintosh.* version.* safari/) !== null));
\t\tt.isIE = (nav.appName.toLowerCase().indexOf(\"microsoft\") != -1 || nav.appName.toLowerCase().match(/trident/gi) !== null);
\t\tt.isChrome = (ua.match(/chrome/gi) !== null);
\t\tt.isChromium = (ua.match(/chromium/gi) !== null);
\t\tt.isFirefox = (ua.match(/firefox/gi) !== null);
\t\tt.isWebkit = (ua.match(/webkit/gi) !== null);
\t\tt.isGecko = (ua.match(/gecko/gi) !== null) && !t.isWebkit && !t.isIE;
\t\tt.isOpera = (ua.match(/opera/gi) !== null);
\t\tt.hasTouch = ('ontouchstart' in window); //  && window.ontouchstart != null); // this breaks iOS 7

\t\t// Borrowed from `Modernizr.svgasimg`, sources:
\t\t// - https://github.com/Modernizr/Modernizr/issues/687
\t\t// - https://github.com/Modernizr/Modernizr/pull/1209/files
\t\tt.svgAsImg = !!document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Image', '1.1');

\t\t// create HTML5 media elements for IE before 9, get a <video> element for fullscreen detection
\t\tfor (i=0; i<html5Elements.length; i++) {
\t\t\tv = document.createElement(html5Elements[i]);
\t\t}

\t\tt.supportsMediaTag = (typeof v.canPlayType !== 'undefined' || t.isBustedAndroid);

\t\t// Fix for IE9 on Windows 7N / Windows 7KN (Media Player not installer)
\t\ttry{
\t\t\tv.canPlayType(\"video/mp4\");
\t\t}catch(e){
\t\t\tt.supportsMediaTag = false;
\t\t}

\t\tt.supportsPointerEvents = (function() {
\t\t\t// TAKEN FROM MODERNIZR
\t\t\tvar element = document.createElement('x'),
\t\t\t\tdocumentElement = document.documentElement,
\t\t\t\tgetComputedStyle = window.getComputedStyle,
\t\t\t\tsupports;
\t\t\tif(!('pointerEvents' in element.style)){
\t\t\t\treturn false;
\t\t\t}
\t\t\telement.style.pointerEvents = 'auto';
\t\t\telement.style.pointerEvents = 'x';
\t\t\tdocumentElement.appendChild(element);
\t\t\tsupports = getComputedStyle &&
\t\t\t\tgetComputedStyle(element, '').pointerEvents === 'auto';
\t\t\tdocumentElement.removeChild(element);
\t\t\treturn !!supports;
\t\t})();


\t\t // Older versions of Firefox can't move plugins around without it resetting,
\t\tt.hasFirefoxPluginMovingProblem = false;

\t\t// detect native JavaScript fullscreen (Safari/Firefox only, Chrome still fails)

\t\t// iOS
\t\tt.hasiOSFullScreen = (typeof v.webkitEnterFullscreen !== 'undefined');

\t\t// W3C
\t\tt.hasNativeFullscreen = (typeof v.requestFullscreen !== 'undefined');

\t\t// webkit/firefox/IE11+
\t\tt.hasWebkitNativeFullScreen = (typeof v.webkitRequestFullScreen !== 'undefined');
\t\tt.hasMozNativeFullScreen = (typeof v.mozRequestFullScreen !== 'undefined');
\t\tt.hasMsNativeFullScreen = (typeof v.msRequestFullscreen !== 'undefined');

\t\tt.hasTrueNativeFullScreen = (t.hasWebkitNativeFullScreen || t.hasMozNativeFullScreen || t.hasMsNativeFullScreen);
\t\tt.nativeFullScreenEnabled = t.hasTrueNativeFullScreen;

\t\t// Enabled?
\t\tif (t.hasMozNativeFullScreen) {
\t\t\tt.nativeFullScreenEnabled = document.mozFullScreenEnabled;
\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\tt.nativeFullScreenEnabled = document.msFullscreenEnabled;
\t\t}

\t\tif (t.isChrome) {
\t\t\tt.hasiOSFullScreen = false;
\t\t}

\t\tif (t.hasTrueNativeFullScreen) {

\t\t\tt.fullScreenEventName = '';
\t\t\tif (t.hasWebkitNativeFullScreen) {
\t\t\t\tt.fullScreenEventName = 'webkitfullscreenchange';

\t\t\t} else if (t.hasMozNativeFullScreen) {
\t\t\t\tt.fullScreenEventName = 'mozfullscreenchange';

\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\tt.fullScreenEventName = 'MSFullscreenChange';
\t\t\t}

\t\t\tt.isFullScreen = function() {
\t\t\t\tif (t.hasMozNativeFullScreen) {
\t\t\t\t\treturn d.mozFullScreen;

\t\t\t\t} else if (t.hasWebkitNativeFullScreen) {
\t\t\t\t\treturn d.webkitIsFullScreen;

\t\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\t\treturn d.msFullscreenElement !== null;
\t\t\t\t}
\t\t\t}

\t\t\tt.requestFullScreen = function(el) {

\t\t\t\tif (t.hasWebkitNativeFullScreen) {
\t\t\t\t\tel.webkitRequestFullScreen();

\t\t\t\t} else if (t.hasMozNativeFullScreen) {
\t\t\t\t\tel.mozRequestFullScreen();

\t\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\t\tel.msRequestFullscreen();

\t\t\t\t}
\t\t\t}

\t\t\tt.cancelFullScreen = function() {
\t\t\t\tif (t.hasWebkitNativeFullScreen) {
\t\t\t\t\tdocument.webkitCancelFullScreen();

\t\t\t\t} else if (t.hasMozNativeFullScreen) {
\t\t\t\t\tdocument.mozCancelFullScreen();

\t\t\t\t} else if (t.hasMsNativeFullScreen) {
\t\t\t\t\tdocument.msExitFullscreen();

\t\t\t\t}
\t\t\t}

\t\t}


\t\t// OS X 10.5 can't do this even if it says it can :(
\t\tif (t.hasiOSFullScreen && ua.match(/mac os x 10_5/i)) {
\t\t\tt.hasNativeFullScreen = false;
\t\t\tt.hasiOSFullScreen = false;
\t\t}

\t}
};
mejs.MediaFeatures.init();

/*
extension methods to <video> or <audio> object to bring it into parity with PluginMediaElement (see below)
*/
mejs.HtmlMediaElement = {
\tpluginType: 'native',
\tisFullScreen: false,

\tsetCurrentTime: function (time) {
\t\tthis.currentTime = time;
\t},

\tsetMuted: function (muted) {
\t\tthis.muted = muted;
\t},

\tsetVolume: function (volume) {
\t\tthis.volume = volume;
\t},

\t// for parity with the plugin versions
\tstop: function () {
\t\tthis.pause();
\t},

\t// This can be a url string
\t// or an array [{src:'file.mp4',type:'video/mp4'},{src:'file.webm',type:'video/webm'}]
\tsetSrc: function (url) {
\t\t
\t\t// Fix for IE9 which can't set .src when there are <source> elements. Awesome, right?
\t\tvar 
\t\t\texistingSources = this.getElementsByTagName('source');
\t\twhile (existingSources.length > 0){
\t\t\tthis.removeChild(existingSources[0]);
\t\t}
\t
\t\tif (typeof url == 'string') {
\t\t\tthis.src = url;
\t\t} else {
\t\t\tvar i, media;

\t\t\tfor (i=0; i<url.length; i++) {
\t\t\t\tmedia = url[i];
\t\t\t\tif (this.canPlayType(media.type)) {
\t\t\t\t\tthis.src = media.src;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tsetVideoSize: function (width, height) {
\t\tthis.width = width;
\t\tthis.height = height;
\t}
};

/*
Mimics the <video/audio> element by calling Flash's External Interface or Silverlights [ScriptableMember]
*/
mejs.PluginMediaElement = function (pluginid, pluginType, mediaUrl) {
\tthis.id = pluginid;
\tthis.pluginType = pluginType;
\tthis.src = mediaUrl;
\tthis.events = {};
\tthis.attributes = {};
};

// JavaScript values and ExternalInterface methods that match HTML5 video properties methods
// http://www.adobe.com/livedocs/flash/9.0/ActionScriptLangRefV3/fl/video/FLVPlayback.html
// http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html
mejs.PluginMediaElement.prototype = {

\t// special
\tpluginElement: null,
\tpluginType: '',
\tisFullScreen: false,

\t// not implemented :(
\tplaybackRate: -1,
\tdefaultPlaybackRate: -1,
\tseekable: [],
\tplayed: [],

\t// HTML5 read-only properties
\tpaused: true,
\tended: false,
\tseeking: false,
\tduration: 0,
\terror: null,
\ttagName: '',

\t// HTML5 get/set properties, but only set (updated by event handlers)
\tmuted: false,
\tvolume: 1,
\tcurrentTime: 0,

\t// HTML5 methods
\tplay: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t\tthis.pluginApi.playVideo();
\t\t\t} else {
\t\t\t\tthis.pluginApi.playMedia();
\t\t\t}
\t\t\tthis.paused = false;
\t\t}
\t},
\tload: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t} else {
\t\t\t\tthis.pluginApi.loadMedia();
\t\t\t}
\t\t\t
\t\t\tthis.paused = false;
\t\t}
\t},
\tpause: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t        if( this.pluginApi.getPlayerState() == 1 ) {
\t\t\t\t    this.pluginApi.pauseVideo();
                }
\t\t\t} else {
\t\t\t\tthis.pluginApi.pauseMedia();
\t\t\t}\t\t\t
\t\t\t
\t\t\t
\t\t\tthis.paused = true;
\t\t}
\t},
\tstop: function () {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t\tthis.pluginApi.stopVideo();
\t\t\t} else {
\t\t\t\tthis.pluginApi.stopMedia();
\t\t\t}\t
\t\t\tthis.paused = true;
\t\t}
\t},
\tcanPlayType: function(type) {
\t\tvar i,
\t\t\tj,
\t\t\tpluginInfo,
\t\t\tpluginVersions = mejs.plugins[this.pluginType];

\t\tfor (i=0; i<pluginVersions.length; i++) {
\t\t\tpluginInfo = pluginVersions[i];

\t\t\t// test if user has the correct plugin version
\t\t\tif (mejs.PluginDetector.hasPluginVersion(this.pluginType, pluginInfo.version)) {

\t\t\t\t// test for plugin playback types
\t\t\t\tfor (j=0; j<pluginInfo.types.length; j++) {
\t\t\t\t\t// find plugin that can play the type
\t\t\t\t\tif (type == pluginInfo.types[j]) {
\t\t\t\t\t\treturn 'probably';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn '';
\t},
\t
\tpositionFullscreenButton: function(x,y,visibleAndAbove) {
\t\tif (this.pluginApi != null && this.pluginApi.positionFullscreenButton) {
\t\t\tthis.pluginApi.positionFullscreenButton(Math.floor(x),Math.floor(y),visibleAndAbove);
\t\t}
\t},
\t
\thideFullscreenButton: function() {
\t\tif (this.pluginApi != null && this.pluginApi.hideFullscreenButton) {
\t\t\tthis.pluginApi.hideFullscreenButton();
\t\t}\t\t
\t},\t
\t

\t// custom methods since not all JavaScript implementations support get/set

\t// This can be a url string
\t// or an array [{src:'file.mp4',type:'video/mp4'},{src:'file.webm',type:'video/webm'}]
\tsetSrc: function (url) {
\t\tif (typeof url == 'string') {
\t\t\tthis.pluginApi.setSrc(mejs.Utility.absolutizeUrl(url));
\t\t\tthis.src = mejs.Utility.absolutizeUrl(url);
\t\t} else {
\t\t\tvar i, media;

\t\t\tfor (i=0; i<url.length; i++) {
\t\t\t\tmedia = url[i];
\t\t\t\tif (this.canPlayType(media.type)) {
\t\t\t\t\tthis.pluginApi.setSrc(mejs.Utility.absolutizeUrl(media.src));
\t\t\t\t\tthis.src = mejs.Utility.absolutizeUrl(media.src);
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t},
\tsetCurrentTime: function (time) {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube' || this.pluginType == 'vimeo') {
\t\t\t\tthis.pluginApi.seekTo(time);
\t\t\t} else {
\t\t\t\tthis.pluginApi.setCurrentTime(time);
\t\t\t}\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\tthis.currentTime = time;
\t\t}
\t},
\tsetVolume: function (volume) {
\t\tif (this.pluginApi != null) {
\t\t\t// same on YouTube and MEjs
\t\t\tif (this.pluginType == 'youtube') {
\t\t\t\tthis.pluginApi.setVolume(volume * 100);
\t\t\t} else {
\t\t\t\tthis.pluginApi.setVolume(volume);
\t\t\t}
\t\t\tthis.volume = volume;
\t\t}
\t},
\tsetMuted: function (muted) {
\t\tif (this.pluginApi != null) {
\t\t\tif (this.pluginType == 'youtube') {
\t\t\t\tif (muted) {
\t\t\t\t\tthis.pluginApi.mute();
\t\t\t\t} else {
\t\t\t\t\tthis.pluginApi.unMute();
\t\t\t\t}
\t\t\t\tthis.muted = muted;
\t\t\t\tthis.dispatchEvent({type:'volumechange'});
\t\t\t} else {
\t\t\t\tthis.pluginApi.setMuted(muted);
\t\t\t}
\t\t\tthis.muted = muted;
\t\t}
\t},

\t// additional non-HTML5 methods
\tsetVideoSize: function (width, height) {
\t\t
\t\t//if (this.pluginType == 'flash' || this.pluginType == 'silverlight') {
\t\t\tif (this.pluginElement && this.pluginElement.style) {
\t\t\t\tthis.pluginElement.style.width = width + 'px';
\t\t\t\tthis.pluginElement.style.height = height + 'px';
\t\t\t}
\t\t\tif (this.pluginApi != null && this.pluginApi.setVideoSize) {
\t\t\t\tthis.pluginApi.setVideoSize(width, height);
\t\t\t}
\t\t//}
\t},

\tsetFullscreen: function (fullscreen) {
\t\tif (this.pluginApi != null && this.pluginApi.setFullscreen) {
\t\t\tthis.pluginApi.setFullscreen(fullscreen);
\t\t}
\t},
\t
\tenterFullScreen: function() {
\t\tif (this.pluginApi != null && this.pluginApi.setFullscreen) {
\t\t\tthis.setFullscreen(true);
\t\t}\t\t
\t\t
\t},
\t
\texitFullScreen: function() {
\t\tif (this.pluginApi != null && this.pluginApi.setFullscreen) {
\t\t\tthis.setFullscreen(false);
\t\t}
\t},\t

\t// start: fake events
\taddEventListener: function (eventName, callback, bubble) {
\t\tthis.events[eventName] = this.events[eventName] || [];
\t\tthis.events[eventName].push(callback);
\t},
\tremoveEventListener: function (eventName, callback) {
\t\tif (!eventName) { this.events = {}; return true; }
\t\tvar callbacks = this.events[eventName];
\t\tif (!callbacks) return true;
\t\tif (!callback) { this.events[eventName] = []; return true; }
\t\tfor (var i = 0; i < callbacks.length; i++) {
\t\t\tif (callbacks[i] === callback) {
\t\t\t\tthis.events[eventName].splice(i, 1);
\t\t\t\treturn true;
\t\t\t}
\t\t}
\t\treturn false;
\t},\t
\tdispatchEvent: function (event) {
\t\tvar i,
\t\t\targs,
\t\t\tcallbacks = this.events[event.type];

\t\tif (callbacks) {
\t\t\tfor (i = 0; i < callbacks.length; i++) {
\t\t\t\tcallbacks[i].apply(this, [event]);
\t\t\t}
\t\t}
\t},
\t// end: fake events
\t
\t// fake DOM attribute methods
\thasAttribute: function(name){
\t\treturn (name in this.attributes);  
\t},
\tremoveAttribute: function(name){
\t\tdelete this.attributes[name];
\t},
\tgetAttribute: function(name){
\t\tif (this.hasAttribute(name)) {
\t\t\treturn this.attributes[name];
\t\t}
\t\treturn null;
\t},
\tsetAttribute: function(name, value){
\t\tthis.attributes[name] = value;
\t},

\tremove: function() {
\t\tmejs.Utility.removeSwf(this.pluginElement.id);
\t}
};

/*
Default options
*/
mejs.MediaElementDefaults = {
\t// allows testing on HTML5, flash, silverlight
\t// auto: attempts to detect what the browser can do
\t// auto_plugin: prefer plugins and then attempt native HTML5
\t// native: forces HTML5 playback
\t// shim: disallows HTML5, will attempt either Flash or Silverlight
\t// none: forces fallback view
\tmode: 'auto',
\t// remove or reorder to change plugin priority and availability
\tplugins: ['flash','silverlight','youtube','vimeo'],
\t// shows debug errors on screen
\tenablePluginDebug: false,
\t// use plugin for browsers that have trouble with Basic Authentication on HTTPS sites
\thttpsBasicAuthSite: false,
\t// overrides the type specified, useful for dynamic instantiation
\ttype: '',
\t// path to Flash and Silverlight plugins
\tpluginPath: mejs.Utility.getScriptPath(['mediaelement.js','mediaelement.min.js','mediaelement-and-player.js','mediaelement-and-player.min.js']),
\t// name of flash file
\tflashName: 'flashmediaelement.swf',
\t// streamer for RTMP streaming
\tflashStreamer: '',
\t// set to 'always' for CDN version
\tflashScriptAccess: 'sameDomain',\t
\t// turns on the smoothing filter in Flash
\tenablePluginSmoothing: false,
\t// enabled pseudo-streaming (seek) on .mp4 files
\tenablePseudoStreaming: false,
\t// start query parameter sent to server for pseudo-streaming
\tpseudoStreamingStartQueryParam: 'start',
\t// name of silverlight file
\tsilverlightName: 'silverlightmediaelement.xap',
\t// default if the <video width> is not specified
\tdefaultVideoWidth: 480,
\t// default if the <video height> is not specified
\tdefaultVideoHeight: 270,
\t// overrides <video width>
\tpluginWidth: -1,
\t// overrides <video height>
\tpluginHeight: -1,
\t// additional plugin variables in 'key=value' form
\tpluginVars: [],\t
\t// rate in milliseconds for Flash and Silverlight to fire the timeupdate event
\t// larger number is less accurate, but less strain on plugin->JavaScript bridge
\ttimerRate: 250,
\t// initial volume for player
\tstartVolume: 0.8,
\t// custom error message in case media cannot be played; otherwise, Download File
\t// link will be displayed
\tcustomError: \"\",
\tsuccess: function () { },
\terror: function () { }
};

/*
Determines if a browser supports the <video> or <audio> element
and returns either the native element or a Flash/Silverlight version that
mimics HTML5 MediaElement
*/
mejs.MediaElement = function (el, o) {
\treturn mejs.HtmlMediaElementShim.create(el,o);
};

mejs.HtmlMediaElementShim = {

\tcreate: function(el, o) {
\t\tvar
\t\t\toptions = {},
\t\t\thtmlMediaElement = (typeof(el) == 'string') ? document.getElementById(el) : el,
\t\t\ttagName = htmlMediaElement.tagName.toLowerCase(),
\t\t\tisMediaTag = (tagName === 'audio' || tagName === 'video'),
\t\t\tsrc = (isMediaTag) ? htmlMediaElement.getAttribute('src') : htmlMediaElement.getAttribute('href'),
\t\t\tposter = htmlMediaElement.getAttribute('poster'),
\t\t\tautoplay =  htmlMediaElement.getAttribute('autoplay'),
\t\t\tpreload =  htmlMediaElement.getAttribute('preload'),
\t\t\tcontrols =  htmlMediaElement.getAttribute('controls'),
\t\t\tplayback,
\t\t\tprop;

\t\t// extend options
\t\tfor (prop in mejs.MediaElementDefaults) {
\t\t\toptions[prop] = mejs.MediaElementDefaults[prop];
\t\t}
\t\tfor (prop in o) {
\t\t\toptions[prop] = o[prop];
\t\t}\t\t
\t\t

\t\t// clean up attributes
\t\tsrc = \t\t(typeof src == 'undefined' \t|| src === null || src == '') ? null : src;\t\t
\t\tposter =\t(typeof poster == 'undefined' \t|| poster === null) ? '' : poster;
\t\tpreload = \t(typeof preload == 'undefined' \t|| preload === null || preload === 'false') ? 'none' : preload;
\t\tautoplay = \t!(typeof autoplay == 'undefined' || autoplay === null || autoplay === 'false');
\t\tcontrols = \t!(typeof controls == 'undefined' || controls === null || controls === 'false');

\t\t// test for HTML5 and plugin capabilities
\t\tplayback = this.determinePlayback(htmlMediaElement, options, mejs.MediaFeatures.supportsMediaTag, isMediaTag, src);
\t\tplayback.url = (playback.url !== null) ? mejs.Utility.absolutizeUrl(playback.url) : '';
        \tplayback.scheme = mejs.Utility.determineScheme(playback.url);

\t\tif (playback.method == 'native') {
\t\t\t// second fix for android
\t\t\tif (mejs.MediaFeatures.isBustedAndroid) {
\t\t\t\thtmlMediaElement.src = playback.url;
\t\t\t\thtmlMediaElement.addEventListener('click', function() {
\t\t\t\t\thtmlMediaElement.play();
\t\t\t\t}, false);
\t\t\t}
\t\t
\t\t\t// add methods to native HTMLMediaElement
\t\t\treturn this.updateNative(playback, options, autoplay, preload);
\t\t} else if (playback.method !== '') {
\t\t\t// create plugin to mimic HTMLMediaElement
\t\t\t
\t\t\treturn this.createPlugin( playback,  options, poster, autoplay, preload, controls);
\t\t} else {
\t\t\t// boo, no HTML5, no Flash, no Silverlight.
\t\t\tthis.createErrorMessage( playback, options, poster );
\t\t\t
\t\t\treturn this;
\t\t}
\t},
\t
\tdeterminePlayback: function(htmlMediaElement, options, supportsMediaTag, isMediaTag, src) {
\t\tvar
\t\t\tmediaFiles = [],
\t\t\ti,
\t\t\tj,
\t\t\tk,
\t\t\tl,
\t\t\tn,
\t\t\ttype,
\t\t\tresult = { method: '', url: '', htmlMediaElement: htmlMediaElement, isVideo: (htmlMediaElement.tagName.toLowerCase() !== 'audio'), scheme: ''},
\t\t\tpluginName,
\t\t\tpluginVersions,
\t\t\tpluginInfo,
\t\t\tdummy,
\t\t\tmedia;
\t\t\t
\t\t// STEP 1: Get URL and type from <video src> or <source src>

\t\t// supplied type overrides <video type> and <source type>
\t\tif (typeof options.type != 'undefined' && options.type !== '') {
\t\t\t
\t\t\t// accept either string or array of types
\t\t\tif (typeof options.type == 'string') {
\t\t\t\tmediaFiles.push({type:options.type, url:src});
\t\t\t} else {
\t\t\t\t
\t\t\t\tfor (i=0; i<options.type.length; i++) {
\t\t\t\t\tmediaFiles.push({type:options.type[i], url:src});
\t\t\t\t}
\t\t\t}

\t\t// test for src attribute first
\t\t} else if (src !== null) {
\t\t\ttype = this.formatType(src, htmlMediaElement.getAttribute('type'));
\t\t\tmediaFiles.push({type:type, url:src});

\t\t// then test for <source> elements
\t\t} else {
\t\t\t// test <source> types to see if they are usable
\t\t\tfor (i = 0; i < htmlMediaElement.childNodes.length; i++) {
\t\t\t\tn = htmlMediaElement.childNodes[i];
\t\t\t\tif (n.nodeType == 1 && n.tagName.toLowerCase() == 'source') {
\t\t\t\t\tsrc = n.getAttribute('src');
\t\t\t\t\ttype = this.formatType(src, n.getAttribute('type'));
\t\t\t\t\tmedia = n.getAttribute('media');

\t\t\t\t\tif (!media || !window.matchMedia || (window.matchMedia && window.matchMedia(media).matches)) {
\t\t\t\t\t\tmediaFiles.push({type:type, url:src});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t\t// in the case of dynamicly created players
\t\t// check for audio types
\t\tif (!isMediaTag && mediaFiles.length > 0 && mediaFiles[0].url !== null && this.getTypeFromFile(mediaFiles[0].url).indexOf('audio') > -1) {
\t\t\tresult.isVideo = false;
\t\t}
\t\t

\t\t// STEP 2: Test for playback method
\t\t
\t\t// special case for Android which sadly doesn't implement the canPlayType function (always returns '')
\t\tif (result.isVideo && mejs.MediaFeatures.isBustedAndroid) {
\t\t\thtmlMediaElement.canPlayType = function(type) {
\t\t\t\treturn (type.match(/video\\/(mp4|m4v)/gi) !== null) ? 'maybe' : '';
\t\t\t};
\t\t}\t\t
\t\t
\t\t// special case for Chromium to specify natively supported video codecs (i.e. WebM and Theora) 
\t\tif (result.isVideo && mejs.MediaFeatures.isChromium) {
\t\t\thtmlMediaElement.canPlayType = function(type) { 
\t\t\t\treturn (type.match(/video\\/(webm|ogv|ogg)/gi) !== null) ? 'maybe' : '';
\t\t\t}; 
\t\t}

\t\t// test for native playback first
\t\tif (supportsMediaTag && (options.mode === 'auto' || options.mode === 'auto_plugin' || options.mode === 'native')  && !(mejs.MediaFeatures.isBustedNativeHTTPS && options.httpsBasicAuthSite === true)) {
\t\t\t\t\t\t
\t\t\tif (!isMediaTag) {

\t\t\t\t// create a real HTML5 Media Element 
\t\t\t\tdummy = document.createElement( result.isVideo ? 'video' : 'audio');\t\t\t
\t\t\t\thtmlMediaElement.parentNode.insertBefore(dummy, htmlMediaElement);
\t\t\t\thtmlMediaElement.style.display = 'none';
\t\t\t\t
\t\t\t\t// use this one from now on
\t\t\t\tresult.htmlMediaElement = htmlMediaElement = dummy;
\t\t\t}
\t\t\t\t
\t\t\tfor (i=0; i<mediaFiles.length; i++) {
\t\t\t\t// normal check
\t\t\t\tif (mediaFiles[i].type == \"video/m3u8\" || htmlMediaElement.canPlayType(mediaFiles[i].type).replace(/no/, '') !== ''
\t\t\t\t\t// special case for Mac/Safari 5.0.3 which answers '' to canPlayType('audio/mp3') but 'maybe' to canPlayType('audio/mpeg')
\t\t\t\t\t|| htmlMediaElement.canPlayType(mediaFiles[i].type.replace(/mp3/,'mpeg')).replace(/no/, '') !== ''
\t\t\t\t\t// special case for m4a supported by detecting mp4 support
\t\t\t\t\t|| htmlMediaElement.canPlayType(mediaFiles[i].type.replace(/m4a/,'mp4')).replace(/no/, '') !== '') {
\t\t\t\t\tresult.method = 'native';
\t\t\t\t\tresult.url = mediaFiles[i].url;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}\t\t\t
\t\t\t
\t\t\tif (result.method === 'native') {
\t\t\t\tif (result.url !== null) {
\t\t\t\t\thtmlMediaElement.src = result.url;
\t\t\t\t}
\t\t\t
\t\t\t\t// if `auto_plugin` mode, then cache the native result but try plugins.
\t\t\t\tif (options.mode !== 'auto_plugin') {
\t\t\t\t\treturn result;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// if native playback didn't work, then test plugins
\t\tif (options.mode === 'auto' || options.mode === 'auto_plugin' || options.mode === 'shim') {
\t\t\tfor (i=0; i<mediaFiles.length; i++) {
\t\t\t\ttype = mediaFiles[i].type;

\t\t\t\t// test all plugins in order of preference [silverlight, flash]
\t\t\t\tfor (j=0; j<options.plugins.length; j++) {

\t\t\t\t\tpluginName = options.plugins[j];
\t\t\t
\t\t\t\t\t// test version of plugin (for future features)
\t\t\t\t\tpluginVersions = mejs.plugins[pluginName];\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tfor (k=0; k<pluginVersions.length; k++) {
\t\t\t\t\t\tpluginInfo = pluginVersions[k];
\t\t\t\t\t
\t\t\t\t\t\t// test if user has the correct plugin version
\t\t\t\t\t\t
\t\t\t\t\t\t// for youtube/vimeo
\t\t\t\t\t\tif (pluginInfo.version == null || 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tmejs.PluginDetector.hasPluginVersion(pluginName, pluginInfo.version)) {

\t\t\t\t\t\t\t// test for plugin playback types
\t\t\t\t\t\t\tfor (l=0; l<pluginInfo.types.length; l++) {
\t\t\t\t\t\t\t\t// find plugin that can play the type
\t\t\t\t\t\t\t\tif (type.toLowerCase() == pluginInfo.types[l].toLowerCase()) {
\t\t\t\t\t\t\t\t\tresult.method = pluginName;
\t\t\t\t\t\t\t\t\tresult.url = mediaFiles[i].url;
\t\t\t\t\t\t\t\t\treturn result;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t\t// at this point, being in 'auto_plugin' mode implies that we tried plugins but failed.
\t\t// if we have native support then return that.
\t\tif (options.mode === 'auto_plugin' && result.method === 'native') {
\t\t\treturn result;
\t\t}

\t\t// what if there's nothing to play? just grab the first available
\t\tif (result.method === '' && mediaFiles.length > 0) {
\t\t\tresult.url = mediaFiles[0].url;
\t\t}

\t\treturn result;
\t},

\tformatType: function(url, type) {
\t\t// if no type is supplied, fake it with the extension
\t\tif (url && !type) {\t\t
\t\t\treturn this.getTypeFromFile(url);
\t\t} else {
\t\t\t// only return the mime part of the type in case the attribute contains the codec
\t\t\t// see http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html#the-source-element
\t\t\t// `video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"` becomes `video/mp4`
\t\t\t
\t\t\tif (type && ~type.indexOf(';')) {
\t\t\t\treturn type.substr(0, type.indexOf(';')); 
\t\t\t} else {
\t\t\t\treturn type;
\t\t\t}
\t\t}
\t},
\t
\tgetTypeFromFile: function(url) {
\t\turl = url.split('?')[0];
\t\tvar
\t\t\text = url.substring(url.lastIndexOf('.') + 1).toLowerCase(),
\t\t\tav = /(mp4|m4v|ogg|ogv|m3u8|webm|webmv|flv|wmv|mpeg|mov)/gi.test(ext) ? 'video/' : 'audio/';
\t\treturn this.getTypeFromExtension(ext, av);
\t},
\t
\tgetTypeFromExtension: function(ext, av) {
\t\tav = av || '';
\t\t
\t\tswitch (ext) {
\t\t\tcase 'mp4':
\t\t\tcase 'm4v':
\t\t\tcase 'm4a':
\t\t\tcase 'f4v':
\t\t\tcase 'f4a':
\t\t\t\treturn av + 'mp4';
\t\t\tcase 'flv':
\t\t\t\treturn av + 'x-flv';
\t\t\tcase 'webm':
\t\t\tcase 'webma':
\t\t\tcase 'webmv':\t
\t\t\t\treturn av + 'webm';
\t\t\tcase 'ogg':
\t\t\tcase 'oga':
\t\t\tcase 'ogv':\t
\t\t\t\treturn av + 'ogg';
\t\t\tcase 'm3u8':
\t\t\t\treturn 'application/x-mpegurl';
\t\t\tcase 'ts':
\t\t\t\treturn av + 'mp2t';
\t\t\tdefault:
\t\t\t\treturn av + ext;
\t\t}
\t},

\tcreateErrorMessage: function(playback, options, poster) {
\t\tvar 
\t\t\thtmlMediaElement = playback.htmlMediaElement,
\t\t\terrorContainer = document.createElement('div'),
\t\t\terrorContent = options.customError;
\t\t\t
\t\terrorContainer.className = 'me-cannotplay';

\t\ttry {
\t\t\terrorContainer.style.width = htmlMediaElement.width + 'px';
\t\t\terrorContainer.style.height = htmlMediaElement.height + 'px';
\t\t} catch (e) {}

\t\tif (!errorContent) {
\t\t\terrorContent = '<a href=\"' + playback.url + '\">';

\t\t\tif (poster !== '') {
\t\t\t\terrorContent += '<img src=\"' + poster + '\" width=\"100%\" height=\"100%\" alt=\"\" />';
\t\t\t}

\t\t\terrorContent += '<span>' + mejs.i18n.t('mejs.download-file') + '</span></a>';
\t\t}

\t\terrorContainer.innerHTML = errorContent;

\t\thtmlMediaElement.parentNode.insertBefore(errorContainer, htmlMediaElement);
\t\thtmlMediaElement.style.display = 'none';

\t\toptions.error(htmlMediaElement);
\t},

\tcreatePlugin:function(playback, options, poster, autoplay, preload, controls) {
\t\tvar 
\t\t\thtmlMediaElement = playback.htmlMediaElement,
\t\t\twidth = 1,
\t\t\theight = 1,
\t\t\tpluginid = 'me_' + playback.method + '_' + (mejs.meIndex++),
\t\t\tpluginMediaElement = new mejs.PluginMediaElement(pluginid, playback.method, playback.url),
\t\t\tcontainer = document.createElement('div'),
\t\t\tspecialIEContainer,
\t\t\tnode,
\t\t\tinitVars;

\t\t// copy tagName from html media element
\t\tpluginMediaElement.tagName = htmlMediaElement.tagName;

\t\t// copy attributes from html media element to plugin media element
\t\tfor (var i = 0; i < htmlMediaElement.attributes.length; i++) {
\t\t\tvar attribute = htmlMediaElement.attributes[i];
\t\t\tif (attribute.specified) {
\t\t\t\tpluginMediaElement.setAttribute(attribute.name, attribute.value);
\t\t\t}
\t\t}

\t\t// check for placement inside a <p> tag (sometimes WYSIWYG editors do this)
\t\tnode = htmlMediaElement.parentNode;

\t\twhile (node !== null && node.tagName != null && node.tagName.toLowerCase() !== 'body' && 
\t\t\t\tnode.parentNode != null && node.parentNode.tagName != null && node.parentNode.constructor != null && node.parentNode.constructor.name === \"ShadowRoot\") {
\t\t\tif (node.parentNode.tagName.toLowerCase() === 'p') {
\t\t\t\tnode.parentNode.parentNode.insertBefore(node, node.parentNode);
\t\t\t\tbreak;
\t\t\t}
\t\t\tnode = node.parentNode;
\t\t}

\t\tif (playback.isVideo) {
\t\t\twidth = (options.pluginWidth > 0) ? options.pluginWidth : (options.videoWidth > 0) ? options.videoWidth : (htmlMediaElement.getAttribute('width') !== null) ? htmlMediaElement.getAttribute('width') : options.defaultVideoWidth;
\t\t\theight = (options.pluginHeight > 0) ? options.pluginHeight : (options.videoHeight > 0) ? options.videoHeight : (htmlMediaElement.getAttribute('height') !== null) ? htmlMediaElement.getAttribute('height') : options.defaultVideoHeight;
\t\t
\t\t\t// in case of '%' make sure it's encoded
\t\t\twidth = mejs.Utility.encodeUrl(width);
\t\t\theight = mejs.Utility.encodeUrl(height);
\t\t
\t\t} else {
\t\t\tif (options.enablePluginDebug) {
\t\t\t\twidth = 320;
\t\t\t\theight = 240;
\t\t\t}
\t\t}

\t\t// register plugin
\t\tpluginMediaElement.success = options.success;
\t\t
\t\t// add container (must be added to DOM before inserting HTML for IE)
\t\tcontainer.className = 'me-plugin';
\t\tcontainer.id = pluginid + '_container';
\t\t
\t\tif (playback.isVideo) {
\t\t\t\thtmlMediaElement.parentNode.insertBefore(container, htmlMediaElement);
\t\t} else {
\t\t\t\tdocument.body.insertBefore(container, document.body.childNodes[0]);
\t\t}
\t\t
\t\tif (playback.method === 'flash' || playback.method === 'silverlight') {

\t\t\tvar canPlayVideo = htmlMediaElement.getAttribute('type') === 'audio/mp4',
\t\t\t\tchildrenSources = htmlMediaElement.getElementsByTagName('source');

\t\t\tif (childrenSources && !canPlayVideo) {
\t\t\t\tfor (var i = 0, total = childrenSources.length; i < total; i++) {
\t\t\t\t\tif (childrenSources[i].getAttribute('type') === 'audio/mp4') {
\t\t\t\t\t\tcanPlayVideo = true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// flash/silverlight vars
\t\t\tinitVars = [
\t\t\t\t'id=' + pluginid,
\t\t\t\t'isvideo=' + ((playback.isVideo || canPlayVideo) ? \"true\" : \"false\"),
\t\t\t\t'autoplay=' + ((autoplay) ? \"true\" : \"false\"),
\t\t\t\t'preload=' + preload,
\t\t\t\t'width=' + width,
\t\t\t\t'startvolume=' + options.startVolume,
\t\t\t\t'timerrate=' + options.timerRate,
\t\t\t\t'flashstreamer=' + options.flashStreamer,
\t\t\t\t'height=' + height,
\t\t\t\t'pseudostreamstart=' + options.pseudoStreamingStartQueryParam];
\t
\t\t\tif (playback.url !== null) {
\t\t\t\tif (playback.method == 'flash') {
\t\t\t\t\tinitVars.push('file=' + mejs.Utility.encodeUrl(playback.url));
\t\t\t\t} else {
\t\t\t\t\tinitVars.push('file=' + playback.url);
\t\t\t\t}
\t\t\t}
\t\t\tif (options.enablePluginDebug) {
\t\t\t\tinitVars.push('debug=true');
\t\t\t}
\t\t\tif (options.enablePluginSmoothing) {
\t\t\t\tinitVars.push('smoothing=true');
\t\t\t}
\t\t\tif (options.enablePseudoStreaming) {
\t\t\t\tinitVars.push('pseudostreaming=true');
\t\t\t}
\t\t\tif (controls) {
\t\t\t\tinitVars.push('controls=true'); // shows controls in the plugin if desired
\t\t\t}
\t\t\tif (options.pluginVars) {
\t\t\t\tinitVars = initVars.concat(options.pluginVars);
\t\t\t}\t\t
\t\t\t
\t\t\t// call from plugin
\t\t\twindow[pluginid + '_init'] = function() {
\t\t\t\tswitch (pluginMediaElement.pluginType) {
\t\t\t\t\tcase 'flash':
\t\t\t\t\t\tpluginMediaElement.pluginElement = pluginMediaElement.pluginApi = document.getElementById(pluginid);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'silverlight':
\t\t\t\t\t\tpluginMediaElement.pluginElement = document.getElementById(pluginMediaElement.id);
\t\t\t\t\t\tpluginMediaElement.pluginApi = pluginMediaElement.pluginElement.Content.MediaElementJS;
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t
\t\t\t\tif (pluginMediaElement.pluginApi != null && pluginMediaElement.success) {
\t\t\t\t\tpluginMediaElement.success(pluginMediaElement, htmlMediaElement);
\t\t\t\t}
\t\t\t};
\t\t\t
\t\t\t// event call from plugin
\t\t\twindow[pluginid + '_event'] = function(eventName, values) {
\t\t
\t\t\t\tvar
\t\t\t\t\te,
\t\t\t\t\ti,
\t\t\t\t\tbufferedTime;
\t\t        
\t\t\t\t// fake event object to mimic real HTML media event.
\t\t\t\te = {
\t\t\t\t\ttype: eventName,
\t\t\t\t\ttarget: pluginMediaElement
\t\t\t\t};
\t\t
\t\t\t\t// attach all values to element and event object
\t\t\t\tfor (i in values) {
\t\t\t\t\tpluginMediaElement[i] = values[i];
\t\t\t\t\te[i] = values[i];
\t\t\t\t}
\t\t
\t\t\t\t// fake the newer W3C buffered TimeRange (loaded and total have been removed)
\t\t\t\tbufferedTime = values.bufferedTime || 0;
\t\t
\t\t\t\te.target.buffered = e.buffered = {
\t\t\t\t\tstart: function(index) {
\t\t\t\t\t\treturn 0;
\t\t\t\t\t},
\t\t\t\t\tend: function (index) {
\t\t\t\t\t\treturn bufferedTime;
\t\t\t\t\t},
\t\t\t\t\tlength: 1
\t\t\t\t};
\t\t
\t\t\t\tpluginMediaElement.dispatchEvent(e);
\t\t\t}\t\t\t
\t\t\t
\t\t\t
\t\t}

\t\tswitch (playback.method) {
\t\t\tcase 'silverlight':
\t\t\t\tcontainer.innerHTML =
'<object data=\"data:application/x-silverlight-2,\" type=\"application/x-silverlight-2\" id=\"' + pluginid + '\" name=\"' + pluginid + '\" width=\"' + width + '\" height=\"' + height + '\" class=\"mejs-shim\">' +
'<param name=\"initParams\" value=\"' + initVars.join(',') + '\" />' +
'<param name=\"windowless\" value=\"true\" />' +
'<param name=\"background\" value=\"black\" />' +
'<param name=\"minRuntimeVersion\" value=\"3.0.0.0\" />' +
'<param name=\"autoUpgrade\" value=\"true\" />' +
'<param name=\"source\" value=\"' + options.pluginPath + options.silverlightName + '\" />' +
'</object>';
\t\t\t\t\tbreak;

\t\t\tcase 'flash':

\t\t\t\tif (mejs.MediaFeatures.isIE) {
\t\t\t\t\tspecialIEContainer = document.createElement('div');
\t\t\t\t\tcontainer.appendChild(specialIEContainer);
\t\t\t\t\tspecialIEContainer.outerHTML =
'<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab\" ' +
'id=\"' + pluginid + '\" width=\"' + width + '\" height=\"' + height + '\" class=\"mejs-shim\">' +
'<param name=\"movie\" value=\"' + options.pluginPath + options.flashName + '?' + (new Date().getTime()) + '\" />' +
'<param name=\"flashvars\" value=\"' + initVars.join('&amp;') + '\" />' +
'<param name=\"quality\" value=\"high\" />' +
'<param name=\"bgcolor\" value=\"#000000\" />' +
'<param name=\"wmode\" value=\"transparent\" />' +
'<param name=\"allowScriptAccess\" value=\"' + options.flashScriptAccess + '\" />' +
'<param name=\"allowFullScreen\" value=\"true\" />' +
'<param name=\"scale\" value=\"default\" />' + 
'</object>';

\t\t\t\t} else {

\t\t\t\t\tcontainer.innerHTML =
'<embed id=\"' + pluginid + '\" name=\"' + pluginid + '\" ' +
'play=\"true\" ' +
'loop=\"false\" ' +
'quality=\"high\" ' +
'bgcolor=\"#000000\" ' +
'wmode=\"transparent\" ' +
'allowScriptAccess=\"' + options.flashScriptAccess + '\" ' +
'allowFullScreen=\"true\" ' +
'type=\"application/x-shockwave-flash\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" ' +
'src=\"' + options.pluginPath + options.flashName + '\" ' +
'flashvars=\"' + initVars.join('&') + '\" ' +
'width=\"' + width + '\" ' +
'height=\"' + height + '\" ' +
'scale=\"default\"' + 
'class=\"mejs-shim\"></embed>';
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t
\t\t\tcase 'youtube':
\t\t\t
\t\t\t\t
\t\t\t\tvar videoId;
\t\t\t\t// youtu.be url from share button
\t\t\t\tif (playback.url.lastIndexOf(\"youtu.be\") != -1) {
\t\t\t\t\tvideoId = playback.url.substr(playback.url.lastIndexOf('/')+1);
\t\t\t\t\tif (videoId.indexOf('?') != -1) {
\t\t\t\t\t\tvideoId = videoId.substr(0, videoId.indexOf('?'));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t// https://www.youtube.com/watch?v=
\t\t\t\t\tvar videoIdMatch = playback.url.match( /[?&]v=([^&#]+)|&|#|\$/ );
\t\t\t\t\tif ( videoIdMatch ) {
\t\t\t\t\t\tvideoId = videoIdMatch[1];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tyoutubeSettings = {
\t\t\t\t\t\tcontainer: container,
\t\t\t\t\t\tcontainerId: container.id,
\t\t\t\t\t\tpluginMediaElement: pluginMediaElement,
\t\t\t\t\t\tpluginId: pluginid,
\t\t\t\t\t\tvideoId: videoId,
\t\t\t\t\t\theight: height,
\t\t\t\t\t\twidth: width,
                        scheme: playback.scheme,
\t\t\t\t\t\tvariables: options.youtubeIframeVars
\t\t\t\t\t};\t\t\t\t
\t\t\t\t
\t\t\t\t// favor iframe version of YouTube
\t\t\t\tif (window.postMessage) {
\t\t\t\t\tmejs.YouTubeApi.enqueueIframe(youtubeSettings);\t\t
\t\t\t\t} else if (mejs.PluginDetector.hasPluginVersion('flash', [10,0,0]) ) {
\t\t\t\t\tmejs.YouTubeApi.createFlash(youtubeSettings, options);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t
\t\t\t// DEMO Code. Does NOT work.
\t\t\tcase 'vimeo':
\t\t\t\tvar player_id = pluginid + \"_player\";
\t\t\t\tpluginMediaElement.vimeoid = playback.url.substr(playback.url.lastIndexOf('/')+1);
\t\t\t\t
\t\t\t\tcontainer.innerHTML ='<iframe src=\"' + playback.scheme + 'player.vimeo.com/video/' + pluginMediaElement.vimeoid + '?api=1&portrait=0&byline=0&title=0&player_id=' + player_id + '\" width=\"' + width +'\" height=\"' + height +'\" frameborder=\"0\" class=\"mejs-shim\" id=\"' + player_id + '\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
\t\t\t\tif (typeof(\$f) == 'function') { // froogaloop available
\t\t\t\t\tvar player = \$f(container.childNodes[0]),
\t\t\t\t\t\tplayerState = -1;
\t\t\t\t\t
\t\t\t\t\tplayer.addEvent('ready', function() {
\t\t
\t\t\t\t\t\tplayer.playVideo = function() {
\t\t\t\t\t\t\tplayer.api( 'play' );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.stopVideo = function() {
\t\t\t\t\t\t\tplayer.api( 'unload' );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.pauseVideo = function() {
\t\t\t\t\t\t\tplayer.api( 'pause' );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.seekTo = function( seconds ) {
\t\t\t\t\t\t\tplayer.api( 'seekTo', seconds );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.setVolume = function( volume ) {
\t\t\t\t\t\t\tplayer.api( 'setVolume', volume );
\t\t\t\t\t\t};
\t\t\t\t\t\tplayer.setMuted = function( muted ) {
\t\t\t\t\t\t\tif( muted ) {
\t\t\t\t\t\t\t\tplayer.lastVolume = player.api( 'getVolume' );
\t\t\t\t\t\t\t\tplayer.api( 'setVolume', 0 );
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tplayer.api( 'setVolume', player.lastVolume );
\t\t\t\t\t\t\t\tdelete player.lastVolume;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t\t// parity with YT player
\t\t\t\t\t\tplayer.getPlayerState = function() {
\t\t\t\t\t\t\treturn playerState;
\t\t\t\t\t\t};

\t\t\t\t\t\tfunction createEvent(player, pluginMediaElement, eventName, e) {
\t\t\t\t\t\t\tvar event = {
\t\t\t\t\t\t\t\ttype: eventName,
\t\t\t\t\t\t\t\ttarget: pluginMediaElement
\t\t\t\t\t\t\t};
\t\t\t\t\t\t\tif (eventName == 'timeupdate') {
\t\t\t\t\t\t\t\tpluginMediaElement.currentTime = event.currentTime = e.seconds;
\t\t\t\t\t\t\t\tpluginMediaElement.duration = event.duration = e.duration;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tpluginMediaElement.dispatchEvent(event);
\t\t\t\t\t\t}

\t\t\t\t\t\tplayer.addEvent('play', function() {
\t\t\t\t\t\t\tplayerState = 1;
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'play');
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'playing');
\t\t\t\t\t\t});

\t\t\t\t\t\tplayer.addEvent('pause', function() {
\t\t\t\t\t\t\tplayerState = 2;\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'pause');
\t\t\t\t\t\t});

\t\t\t\t\t\tplayer.addEvent('finish', function() {
\t\t\t\t\t\t\tplayerState = 0;\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'ended');
\t\t\t\t\t\t});

\t\t\t\t\t\tplayer.addEvent('playProgress', function(e) {
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'timeupdate', e);
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\tplayer.addEvent('seek', function(e) {
\t\t\t\t\t\t\tplayerState = 3;
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'seeked', e);
\t\t\t\t\t\t});\t
\t\t\t\t\t\t
\t\t\t\t\t\tplayer.addEvent('loadProgress', function(e) {
\t\t\t\t\t\t\tplayerState = 3;
\t\t\t\t\t\t\tcreateEvent(player, pluginMediaElement, 'progress', e);
\t\t\t\t\t\t});\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\tpluginMediaElement.pluginElement = container;
\t\t\t\t\t\tpluginMediaElement.pluginApi = player;

\t\t\t\t\t\tpluginMediaElement.success(pluginMediaElement, pluginMediaElement.pluginElement);\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tconsole.warn(\"You need to include froogaloop for vimeo to work\");
\t\t\t\t}
\t\t\t\tbreak;\t\t\t
\t\t}
\t\t// hide original element
\t\thtmlMediaElement.style.display = 'none';
\t\t// prevent browser from autoplaying when using a plugin
\t\thtmlMediaElement.removeAttribute('autoplay');
\t\t
\t\treturn pluginMediaElement;
\t},

\tupdateNative: function(playback, options, autoplay, preload) {
\t\t
\t\tvar htmlMediaElement = playback.htmlMediaElement,
\t\t\tm;
\t\t
\t\t
\t\t// add methods to video object to bring it into parity with Flash Object
\t\tfor (m in mejs.HtmlMediaElement) {
\t\t\thtmlMediaElement[m] = mejs.HtmlMediaElement[m];
\t\t}

\t\t/*
\t\tChrome now supports preload=\"none\"
\t\tif (mejs.MediaFeatures.isChrome) {
\t\t
\t\t\t// special case to enforce preload attribute (Chrome doesn't respect this)
\t\t\tif (preload === 'none' && !autoplay) {
\t\t\t
\t\t\t\t// forces the browser to stop loading (note: fails in IE9)
\t\t\t\thtmlMediaElement.src = '';
\t\t\t\thtmlMediaElement.load();
\t\t\t\thtmlMediaElement.canceledPreload = true;

\t\t\t\thtmlMediaElement.addEventListener('play',function() {
\t\t\t\t\tif (htmlMediaElement.canceledPreload) {
\t\t\t\t\t\thtmlMediaElement.src = playback.url;
\t\t\t\t\t\thtmlMediaElement.load();
\t\t\t\t\t\thtmlMediaElement.play();
\t\t\t\t\t\thtmlMediaElement.canceledPreload = false;
\t\t\t\t\t}
\t\t\t\t}, false);
\t\t\t// for some reason Chrome forgets how to autoplay sometimes.
\t\t\t} else if (autoplay) {
\t\t\t\thtmlMediaElement.load();
\t\t\t\thtmlMediaElement.play();
\t\t\t}
\t\t}
\t\t*/

\t\t// fire success code
\t\toptions.success(htmlMediaElement, htmlMediaElement);
\t\t
\t\treturn htmlMediaElement;
\t}
};

/*
 - test on IE (object vs. embed)
 - determine when to use iframe (Firefox, Safari, Mobile) vs. Flash (Chrome, IE)
 - fullscreen?
*/

// YouTube Flash and Iframe API
mejs.YouTubeApi = {
\tisIframeStarted: false,
\tisIframeLoaded: false,
\tloadIframeApi: function(yt) {
\t\tif (!this.isIframeStarted) {
\t\t\tvar tag = document.createElement('script');
\t\t\ttag.src = yt.scheme + \"www.youtube.com/player_api\";
\t\t\tvar firstScriptTag = document.getElementsByTagName('script')[0];
\t\t\tfirstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
\t\t\tthis.isIframeStarted = true;
\t\t}
\t},
\tiframeQueue: [],
\tenqueueIframe: function(yt) {
\t\t
\t\tif (this.isLoaded) {
\t\t\tthis.createIframe(yt);
\t\t} else {
\t\t\tthis.loadIframeApi(yt);
\t\t\tthis.iframeQueue.push(yt);
\t\t}
\t},
\tcreateIframe: function(settings) {

\t\tvar
\t\tpluginMediaElement = settings.pluginMediaElement,
\t\tdefaultVars = {controls:0, wmode:'transparent'},
\t\tplayer = new YT.Player(settings.containerId, {
\t\t\theight: settings.height,
\t\t\twidth: settings.width,
\t\t\tvideoId: settings.videoId,
\t\t\tplayerVars: mejs.\$.extend({}, defaultVars, settings.variables),
\t\t\tevents: {
\t\t\t\t'onReady': function(e) {
\t\t\t\t\t
\t\t\t\t\t// wrapper to match
\t\t\t\t\tplayer.setVideoSize = function(width, height) {
\t\t\t\t\t\tplayer.setSize(width, height);
\t\t\t\t\t};
\t\t\t\t\t
\t\t\t\t\t// hook up iframe object to MEjs
\t\t\t\t\tsettings.pluginMediaElement.pluginApi = player;
\t\t\t\t\tsettings.pluginMediaElement.pluginElement = document.getElementById(settings.containerId);
\t\t\t\t\t
\t\t\t\t\t// init mejs
\t\t\t\t\tpluginMediaElement.success(pluginMediaElement, pluginMediaElement.pluginElement);

\t\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'canplay');
\t\t\t\t\t
\t\t\t\t\t// create timer
\t\t\t\t\tsetInterval(function() {
\t\t\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'timeupdate');
\t\t\t\t\t}, 250);

\t\t\t\t\tif (typeof pluginMediaElement.attributes.autoplay !== 'undefined') {
\t\t\t\t\t\tplayer.playVideo();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t'onStateChange': function(e) {
\t\t\t\t\t
\t\t\t\t\tmejs.YouTubeApi.handleStateChange(e.data, player, pluginMediaElement);
\t\t\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});
\t},
\t
\tcreateEvent: function (player, pluginMediaElement, eventName) {
\t\tvar event = {
\t\t\ttype: eventName,
\t\t\ttarget: pluginMediaElement
\t\t};

\t\tif (player && player.getDuration) {
\t\t\t
\t\t\t// time 
\t\t\tpluginMediaElement.currentTime = event.currentTime = player.getCurrentTime();
\t\t\tpluginMediaElement.duration = event.duration = player.getDuration();
\t\t\t
\t\t\t// state
\t\t\tevent.paused = pluginMediaElement.paused;
\t\t\tevent.ended = pluginMediaElement.ended;\t\t\t
\t\t\t
\t\t\t// sound
\t\t\tevent.muted = player.isMuted();
\t\t\tevent.volume = player.getVolume() / 100;
\t\t\t
\t\t\t// progress
\t\t\tevent.bytesTotal = player.getVideoBytesTotal();
\t\t\tevent.bufferedBytes = player.getVideoBytesLoaded();
\t\t\t
\t\t\t// fake the W3C buffered TimeRange
\t\t\tvar bufferedTime = event.bufferedBytes / event.bytesTotal * event.duration;
\t\t\t
\t\t\tevent.target.buffered = event.buffered = {
\t\t\t\tstart: function(index) {
\t\t\t\t\treturn 0;
\t\t\t\t},
\t\t\t\tend: function (index) {
\t\t\t\t\treturn bufferedTime;
\t\t\t\t},
\t\t\t\tlength: 1
\t\t\t};

\t\t}
\t\t
\t\t// send event up the chain
\t\tpluginMediaElement.dispatchEvent(event);
\t},\t
\t
\tiFrameReady: function() {
\t\t
\t\tthis.isLoaded = true;
\t\tthis.isIframeLoaded = true;
\t\t
\t\twhile (this.iframeQueue.length > 0) {
\t\t\tvar settings = this.iframeQueue.pop();
\t\t\tthis.createIframe(settings);
\t\t}\t
\t},
\t
\t// FLASH!
\tflashPlayers: {},
\tcreateFlash: function(settings) {
\t\t
\t\tthis.flashPlayers[settings.pluginId] = settings;
\t\t
\t\t/*
\t\tsettings.container.innerHTML =
\t\t\t'<object type=\"application/x-shockwave-flash\" id=\"' + settings.pluginId + '\" data=\"' + settings.scheme + 'www.youtube.com/apiplayer?enablejsapi=1&amp;playerapiid=' + settings.pluginId  + '&amp;version=3&amp;autoplay=0&amp;controls=0&amp;modestbranding=1&loop=0\" ' +
\t\t\t\t'width=\"' + settings.width + '\" height=\"' + settings.height + '\" style=\"visibility: visible; \" class=\"mejs-shim\">' +
\t\t\t\t'<param name=\"allowScriptAccess\" value=\"sameDomain\">' +
\t\t\t\t'<param name=\"wmode\" value=\"transparent\">' +
\t\t\t'</object>';
\t\t*/

\t\tvar specialIEContainer,
\t\t\tyoutubeUrl = settings.scheme + 'www.youtube.com/apiplayer?enablejsapi=1&amp;playerapiid=' + settings.pluginId  + '&amp;version=3&amp;autoplay=0&amp;controls=0&amp;modestbranding=1&loop=0';
\t\t\t
\t\tif (mejs.MediaFeatures.isIE) {
\t\t\t
\t\t\tspecialIEContainer = document.createElement('div');
\t\t\tsettings.container.appendChild(specialIEContainer);
\t\t\tspecialIEContainer.outerHTML = '<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"' + settings.scheme + 'download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab\" ' +
'id=\"' + settings.pluginId + '\" width=\"' + settings.width + '\" height=\"' + settings.height + '\" class=\"mejs-shim\">' +
\t'<param name=\"movie\" value=\"' + youtubeUrl + '\" />' +
\t'<param name=\"wmode\" value=\"transparent\" />' +
\t'<param name=\"allowScriptAccess\" value=\"' + options.flashScriptAccess + '\" />' +
\t'<param name=\"allowFullScreen\" value=\"true\" />' +
'</object>';
\t\t} else {
\t\tsettings.container.innerHTML =
\t\t\t'<object type=\"application/x-shockwave-flash\" id=\"' + settings.pluginId + '\" data=\"' + youtubeUrl + '\" ' +
\t\t\t\t'width=\"' + settings.width + '\" height=\"' + settings.height + '\" style=\"visibility: visible; \" class=\"mejs-shim\">' +
\t\t\t\t'<param name=\"allowScriptAccess\" value=\"' + options.flashScriptAccess + '\">' +
\t\t\t\t'<param name=\"wmode\" value=\"transparent\">' +
\t\t\t'</object>';
\t\t}\t\t
\t\t
\t},
\t
\tflashReady: function(id) {
\t\tvar
\t\t\tsettings = this.flashPlayers[id],
\t\t\tplayer = document.getElementById(id),
\t\t\tpluginMediaElement = settings.pluginMediaElement;
\t\t
\t\t// hook up and return to MediaELementPlayer.success\t
\t\tpluginMediaElement.pluginApi = 
\t\tpluginMediaElement.pluginElement = player;
\t\t
\t\tsettings.success(pluginMediaElement, pluginMediaElement.pluginElement);
\t\t
\t\t// load the youtube video
\t\tplayer.cueVideoById(settings.videoId);
\t\t
\t\tvar callbackName = settings.containerId + '_callback';
\t\t
\t\twindow[callbackName] = function(e) {
\t\t\tmejs.YouTubeApi.handleStateChange(e, player, pluginMediaElement);
\t\t};
\t\t
\t\tplayer.addEventListener('onStateChange', callbackName);
\t\t
\t\tsetInterval(function() {
\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'timeupdate');
\t\t}, 250);
\t\t
\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'canplay');
\t},
\t
\thandleStateChange: function(youTubeState, player, pluginMediaElement) {
\t\tswitch (youTubeState) {
\t\t\tcase -1: // not started
\t\t\t\tpluginMediaElement.paused = true;
\t\t\t\tpluginMediaElement.ended = true;
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'loadedmetadata');
\t\t\t\t//createYouTubeEvent(player, pluginMediaElement, 'loadeddata');
\t\t\t\tbreak;
\t\t\tcase 0:
\t\t\t\tpluginMediaElement.paused = false;
\t\t\t\tpluginMediaElement.ended = true;
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'ended');
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\tpluginMediaElement.paused = false;
\t\t\t\tpluginMediaElement.ended = false;\t\t\t\t
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'play');
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'playing');
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\tpluginMediaElement.paused = true;
\t\t\t\tpluginMediaElement.ended = false;\t\t\t\t
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'pause');
\t\t\t\tbreak;
\t\t\tcase 3: // buffering
\t\t\t\tmejs.YouTubeApi.createEvent(player, pluginMediaElement, 'progress');
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t// cued?
\t\t\t\tbreak;\t\t\t\t\t\t
\t\t\t
\t\t}\t\t\t
\t\t
\t}
}
// IFRAME
window.onYouTubePlayerAPIReady = function() {
\tmejs.YouTubeApi.iFrameReady();
};
// FLASH
window.onYouTubePlayerReady = function(id) {
\tmejs.YouTubeApi.flashReady(id);
};

window.mejs = mejs;
window.MediaElement = mejs.MediaElement;

/**
 * Localize strings
 *
 * Include translations from JS files and method to pluralize properly strings.
 *
 */
(function (doc, win, mejs, undefined) {

\tvar i18n = {
\t\t/**
\t\t * @type {String}
\t\t */
\t\t'default': 'en',

\t\t/**
\t\t * @type {String[]}
\t\t */
\t\tlocale: {
\t\t\tlanguage: (mejs.i18n && mejs.i18n.locale.language) || '',
\t\t\tstrings: (mejs.i18n && mejs.i18n.locale.strings) || {}
\t\t},

\t\t/**
\t\t * Filters for available languages.
\t\t *
\t\t * This plural forms are grouped in family groups based on
\t\t * https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
\t\t * with some additions and corrections according to the Localization Guide list
\t\t * (http://localization-guide.readthedocs.io/en/latest/l10n/pluralforms.html)
\t\t *
\t\t * Arguments are dynamic following the structure:
\t\t * - argument1 : Number to determine form
\t\t * - argument2...argumentN: Possible matches
\t\t *
\t\t * @type {Function[]}
\t\t */
\t\tpluralForms: [
\t\t\t// 0: Chinese, Japanese, Korean, Persian, Turkish, Thai, Lao, Aymará,
\t\t\t// Tibetan, Chiga, Dzongkha, Indonesian, Lojban, Georgian, Kazakh, Khmer, Kyrgyz, Malay,
\t\t\t// Burmese, Yakut, Sundanese, Tatar, Uyghur, Vietnamese, Wolof
\t\t\tfunction () {
\t\t\t\treturn arguments[1];
\t\t\t},
\t\t\t// 1: Danish, Dutch, English, Faroese, Frisian, German, Norwegian, Swedish, Estonian, Finnish,
\t\t\t// Hungarian, Basque, Greek, Hebrew, Italian, Portuguese, Spanish, Catalan, Afrikaans,
\t\t\t// Angika, Assamese, Asturian, Azerbaijani, Bulgarian, Bengali, Bodo, Aragonese, Dogri,
\t\t\t// Esperanto, Argentinean Spanish, Fulah, Friulian, Galician, Gujarati, Hausa,
\t\t\t// Hindi, Chhattisgarhi, Armenian, Interlingua, Greenlandic, Kannada, Kurdish, Letzeburgesch,
\t\t\t// Maithili, Malayalam, Mongolian, Manipuri, Marathi, Nahuatl, Neapolitan, Norwegian Bokmal,
\t\t\t// Nepali, Norwegian Nynorsk, Norwegian (old code), Northern Sotho, Oriya, Punjabi, Papiamento,
\t\t\t// Piemontese, Pashto, Romansh, Kinyarwanda, Santali, Scots, Sindhi, Northern Sami, Sinhala,
\t\t\t// Somali, Songhay, Albanian, Swahili, Tamil, Telugu, Turkmen, Urdu, Yoruba
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// 2: French, Brazilian Portuguese, Acholi, Akan, Amharic, Mapudungun, Breton, Filipino,
\t\t\t// Gun, Lingala, Mauritian Creole, Malagasy, Maori, Occitan, Tajik, Tigrinya, Uzbek, Walloon
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif ([0, 1].indexOf(args[0]) > -1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// 3: Latvian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1 && args[0] % 100 !== 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] !== 0) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 4: Scottish Gaelic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1 || args[0] === 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2 || args[0] === 12) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] > 2 && args[0] < 20) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}
\t\t\t},
\t\t\t// 5:  Romanian
\t\t\tfunction () {
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 0 || (args[0] % 100 > 0 && args[0] % 100 < 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 6: Lithuanian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1 && args[0] % 100 !== 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn [3];
\t\t\t\t}
\t\t\t},
\t\t\t// 7: Belarusian, Bosnian, Croatian, Serbian, Russian, Ukrainian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1 && args[0] % 100 !== 11) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && args[0] % 10 <= 4 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 8:  Slovak, Czech
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] >= 2 && args[0] <= 4) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 9: Polish
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && args[0] % 10 <= 4 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 10: Slovenian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 100 === 1) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] % 100 === 2) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else if (args[0] % 100 === 3 || args[0] % 100 === 4) {
\t\t\t\t\treturn args[4];
\t\t\t\t} else {
\t\t\t\t\treturn args[1];
\t\t\t\t}
\t\t\t},
\t\t\t// 11: Irish Gaelic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] > 2 && args[0] < 7) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else if (args[0] > 6 && args[0] < 11) {
\t\t\t\t\treturn args[4];
\t\t\t\t} else {
\t\t\t\t\treturn args[5];
\t\t\t\t}
\t\t\t},
\t\t\t// 12: Arabic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 0) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 1) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else if (args[0] % 100 >= 3 && args[0] % 100 <= 10) {
\t\t\t\t\treturn args[4];
\t\t\t\t} else if (args[0] % 100 >= 11) {
\t\t\t\t\treturn args[5];
\t\t\t\t} else {
\t\t\t\t\treturn args[6];
\t\t\t\t}
\t\t\t},
\t\t\t// 13: Maltese
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 0 || (args[0] % 100 > 1 && args[0] % 100 < 11)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] % 100 > 10 && args[0] % 100 < 20) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}

\t\t\t},
\t\t\t// 14: Macedonian
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] % 10 === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 15:  Icelandic
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] !== 11 && args[0] % 10 === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// New additions

\t\t\t// 16:  Kashubian
\t\t\t// Note: in https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
\t\t\t// Breton is listed as #16 but in the Localization Guide it belongs to the group 2
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] % 10 >= 2 && args[0] % 10 <= 4 && (args[0] % 100 < 10 || args[0] % 100 >= 20)) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t},
\t\t\t// 17:  Welsh
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] !== 8 && args[0] !== 11) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}
\t\t\t},
\t\t\t// 18:  Javanese
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 0) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else {
\t\t\t\t\treturn args[2];
\t\t\t\t}
\t\t\t},
\t\t\t// 19:  Cornish
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 1) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 2) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else if (args[0] === 3) {
\t\t\t\t\treturn args[3];
\t\t\t\t} else {
\t\t\t\t\treturn args[4];
\t\t\t\t}
\t\t\t},
\t\t\t// 20:  Mandinka
\t\t\tfunction () {
\t\t\t\tvar args = arguments;
\t\t\t\tif (args[0] === 0) {
\t\t\t\t\treturn args[1];
\t\t\t\t} else if (args[0] === 1) {
\t\t\t\t\treturn args[2];
\t\t\t\t} else {
\t\t\t\t\treturn args[3];
\t\t\t\t}
\t\t\t}
\t\t],
\t\t/**
\t\t * Get specified language
\t\t *
\t\t */
\t\tgetLanguage: function () {
\t\t\tvar language = i18n.locale.language || i18n['default'];
\t\t\treturn /^(x\\-)?[a-z]{2,}(\\-\\w{2,})?(\\-\\w{2,})?\$/.exec(language) ? language : i18n['default'];
\t\t},

\t\t/**
\t\t * Translate a string to a specified language, including optionally a number to pluralize translation
\t\t *
\t\t * @param {String} message
\t\t * @param {Number} pluralParam
\t\t * @return {String}
\t\t */
\t\tt: function (message, pluralParam) {

\t\t\tif (typeof message === 'string' && message.length) {

\t\t\t\tvar
\t\t\t\t\tlanguage = i18n.getLanguage(),
\t\t\t\t\tstr,
\t\t\t\t\tpluralForm,
\t\t\t\t\t/**
\t\t\t\t\t * Modify string using algorithm to detect plural forms.
\t\t\t\t\t *
\t\t\t\t\t * @private
\t\t\t\t\t * @see http://stackoverflow.com/questions/1353408/messageformat-in-javascript-parameters-in-localized-ui-strings
\t\t\t\t\t * @param {String|String[]} input   - String or array of strings to pick the plural form
\t\t\t\t\t * @param {Number} number           - Number to determine the proper plural form
\t\t\t\t\t * @param {Number} form             - Number of language family to apply plural form
\t\t\t\t\t * @return {String}
\t\t\t\t\t */
\t\t\t\t\tplural = function (input, number, form) {

\t\t\t\t\t\tif (typeof input !== 'object' || typeof number !== 'number' || typeof form !== 'number') {
\t\t\t\t\t\t\treturn input;
\t\t\t\t\t\t}

\t\t\t\t\t\tif (typeof input === 'string') {
\t\t\t\t\t\t\treturn input;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Perform plural form or return original text
\t\t\t\t\t\treturn i18n.pluralForms[form].apply(null, [number].concat(input));
\t\t\t\t\t},
\t\t\t\t\t/**
\t\t\t\t\t *
\t\t\t\t\t * @param {String} input
\t\t\t\t\t * @return {String}
\t\t\t\t\t */
\t\t\t\t\tescapeHTML = function (input) {
\t\t\t\t\t\tvar map = {
\t\t\t\t\t\t\t'&': '&amp;',
\t\t\t\t\t\t\t'<': '&lt;',
\t\t\t\t\t\t\t'>': '&gt;',
\t\t\t\t\t\t\t'\"': '&quot;'
\t\t\t\t\t\t};

\t\t\t\t\t\treturn input.replace(/[&<>\"]/g, function(c) {
\t\t\t\t\t\t\treturn map[c];
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t;

\t\t\t\t// Fetch the localized version of the string
\t\t\t\tif (i18n.locale.strings && i18n.locale.strings[language]) {
\t\t\t\t\tstr = i18n.locale.strings[language][message];
\t\t\t\t\tif (typeof pluralParam === 'number') {
\t\t\t\t\t\tpluralForm = i18n.locale.strings[language]['mejs.plural-form'];
\t\t\t\t\t\tstr = plural.apply(null, [str, pluralParam, pluralForm]);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Fallback to default language if requested uid is not translated
\t\t\t\tif (!str && i18n.locale.strings && i18n.locale.strings[i18n['default']]) {
\t\t\t\t\tstr = i18n.locale.strings[i18n['default']][message];
\t\t\t\t\tif (typeof pluralParam === 'number') {
\t\t\t\t\t\tpluralForm = i18n.locale.strings[i18n['default']]['mejs.plural-form'];
\t\t\t\t\t\tstr = plural.apply(null, [str, pluralParam, pluralForm]);

\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// As a last resort, use the requested uid, to mimic original behavior of i18n utils (in which uid was the english text)
\t\t\t\tstr = str || message;

\t\t\t\t// Replace token
\t\t\t\tif (typeof pluralParam === 'number') {
\t\t\t\t\tstr = str.replace('%1', pluralParam);
\t\t\t\t}

\t\t\t\treturn escapeHTML(str);

\t\t\t}

\t\t\treturn message;
\t\t}

\t};

\t// i18n fixes for compatibility with WordPress
\tif (typeof mejsL10n !== 'undefined') {
\t\ti18n.locale.language = mejsL10n.language;
\t}

\t// Register variable
\tmejs.i18n = i18n;


}(document, window, mejs));

// i18n fixes for compatibility with WordPress
;(function (mejs, undefined) {

\t\"use strict\";

\tif (typeof mejsL10n !== 'undefined') {
\t\tmejs[mejsL10n.lang] = mejsL10n.strings;
\t}

}(mejs.i18n.locale.strings));
/*!
 * This is a i18n.locale language object.
 *
 * English; This can serve as a template for other languages to translate
 *
 * @author
 *   TBD
 *   Sascha Greuel (Twitter: @SoftCreatR)
 *
 * @see
 *   me-i18n.js
 *
 * @params
 *  - exports - CommonJS, window ..
 */
(function (exports) {
    \"use strict\";

    if (exports.en === undefined) {
        exports.en = {
            \"mejs.plural-form\": 1,

            // me-shim
            \"mejs.download-file\": \"Download File\",

            // mep-feature-contextmenu
            \"mejs.fullscreen-off\": \"Turn off Fullscreen\",
            \"mejs.fullscreen-on\": \"Go Fullscreen\",
            \"mejs.download-video\": \"Download Video\",

            // mep-feature-fullscreen
            \"mejs.fullscreen\": \"Fullscreen\",

            // mep-feature-jumpforward
            \"mejs.time-jump-forward\": [\"Jump forward 1 second\", \"Jump forward %1 seconds\"],

            // mep-feature-playpause
            \"mejs.play\": \"Play\",
            \"mejs.pause\": \"Pause\",

            // mep-feature-postroll
            \"mejs.close\": \"Close\",

            // mep-feature-progress
            \"mejs.time-slider\": \"Time Slider\",
            \"mejs.time-help-text\": \"Use Left/Right Arrow keys to advance one second, Up/Down arrows to advance ten seconds.\",

            // mep-feature-skipback
            \"mejs.time-skip-back\": [\"Skip back 1 second\", \"Skip back %1 seconds\"],

            // mep-feature-tracks
            \"mejs.captions-subtitles\": \"Captions/Subtitles\",
            \"mejs.none\": \"None\",

            // mep-feature-volume
            \"mejs.mute-toggle\": \"Mute Toggle\",
            \"mejs.volume-help-text\": \"Use Up/Down Arrow keys to increase or decrease volume.\",
            \"mejs.unmute\": \"Unmute\",
            \"mejs.mute\": \"Mute\",
            \"mejs.volume-slider\": \"Volume Slider\",

            // mep-player
            \"mejs.video-player\": \"Video Player\",
            \"mejs.audio-player\": \"Audio Player\",

            // mep-feature-ads
            \"mejs.ad-skip\": \"Skip ad\",
            \"mejs.ad-skip-info\": [\"Skip in 1 second\", \"Skip in %1 seconds\"],

            // mep-feature-sourcechooser
            \"mejs.source-chooser\": \"Source Chooser\"
        };
    }
}(mejs.i18n.locale.strings));

/*!
 *
 * MediaElementPlayer
 * http://mediaelementjs.com/
 *
 * Creates a controller bar for HTML5 <video> add <audio> tags
 * using jQuery and MediaElement.js (HTML5 Flash/Silverlight wrapper)
 *
 * Copyright 2010-2013, John Dyer (http://j.hn/)
 * License: MIT
 *
 */
if (typeof jQuery != 'undefined') {
\tmejs.\$ = jQuery;
} else if (typeof Zepto != 'undefined') {
\tmejs.\$ = Zepto;

\t// define `outerWidth` method which has not been realized in Zepto
\tZepto.fn.outerWidth = function(includeMargin) {
\t\tvar width = \$(this).width();
\t\tif (includeMargin) {
\t\t\twidth += parseInt(\$(this).css('margin-right'), 10);
\t\t\twidth += parseInt(\$(this).css('margin-left'), 10);
\t\t}
\t\treturn width
\t}

} else if (typeof ender != 'undefined') {
\tmejs.\$ = ender;
}
(function (\$) {

\t// default player values
\tmejs.MepDefaults = {
\t\t// url to poster (to fix iOS 3.x)
\t\tposter: '',
\t\t// When the video is ended, we can show the poster.
\t\tshowPosterWhenEnded: false,
\t\t// default if the <video width> is not specified
\t\tdefaultVideoWidth: 480,
\t\t// default if the <video height> is not specified
\t\tdefaultVideoHeight: 270,
\t\t// if set, overrides <video width>
\t\tvideoWidth: -1,
\t\t// if set, overrides <video height>
\t\tvideoHeight: -1,
\t\t// default if the user doesn't specify
\t\tdefaultAudioWidth: 400,
\t\t// default if the user doesn't specify
\t\tdefaultAudioHeight: 30,
\t\t// default amount to move back when back key is pressed
\t\tdefaultSeekBackwardInterval: function(media) {
\t\t\treturn (media.duration * 0.05);
\t\t},
\t\t// default amount to move forward when forward key is pressed
\t\tdefaultSeekForwardInterval: function(media) {
\t\t\treturn (media.duration * 0.05);
\t\t},
\t\t// set dimensions via JS instead of CSS
\t\tsetDimensions: true,
\t\t// width of audio player
\t\taudioWidth: -1,
\t\t// height of audio player
\t\taudioHeight: -1,
\t\t// initial volume when the player starts (overrided by user cookie)
\t\tstartVolume: 0.8,
\t\t// useful for <audio> player loops
\t\tloop: false,
\t\t// rewind to beginning when media ends
\t\tautoRewind: true,
\t\t// resize to media dimensions
\t\tenableAutosize: true,
\t\t/*
\t\t * Time format to use. Default: 'mm:ss'
\t\t * Supported units:
\t\t *   h: hour
\t\t *   m: minute
\t\t *   s: second
\t\t *   f: frame count
\t\t * When using 'hh', 'mm', 'ss' or 'ff' we always display 2 digits.
\t\t * If you use 'h', 'm', 's' or 'f' we display 1 digit if possible.
\t\t *
\t\t * Example to display 75 seconds:
\t\t * Format 'mm:ss': 01:15
\t\t * Format 'm:ss': 1:15
\t\t * Format 'm:s': 1:15
\t\t */
\t\ttimeFormat: '',
\t\t// forces the hour marker (##:00:00)
\t\talwaysShowHours: false,
\t\t// show framecount in timecode (##:00:00:00)
\t\tshowTimecodeFrameCount: false,
\t\t// used when showTimecodeFrameCount is set to true
\t\tframesPerSecond: 25,
\t\t// automatically calculate the width of the progress bar based on the sizes of other elements
\t\tautosizeProgress : true,
\t\t// Hide controls when playing and mouse is not over the video
\t\talwaysShowControls: false,
\t\t// Display the video control
\t\thideVideoControlsOnLoad: false,
\t\t// Enable click video element to toggle play/pause
\t\tclickToPlayPause: true,
\t\t// Time in ms to hide controls
\t\tcontrolsTimeoutDefault: 1500,
\t\t// Time in ms to trigger the timer when mouse moves
\t\tcontrolsTimeoutMouseEnter: 2500,
\t\t// Time in ms to trigger the timer when mouse leaves
\t\tcontrolsTimeoutMouseLeave: 1000,
\t\t// force iPad's native controls
\t\tiPadUseNativeControls: false,
\t\t// force iPhone's native controls
\t\tiPhoneUseNativeControls: false,
\t\t// force Android's native controls
\t\tAndroidUseNativeControls: false,
\t\t// features to show
\t\tfeatures: ['playpause','current','progress','duration','tracks','volume','fullscreen'],
\t\t// only for dynamic
\t\tisVideo: true,
\t\t// stretching modes (auto, fill, responsive, none)
\t\tstretching: 'auto',
\t\t// turns keyboard support on and off for this instance
\t\tenableKeyboard: true,
\t\t// when this player starts, it will pause other players
\t\tpauseOtherPlayers: true,
\t\t// array of keyboard actions such as play pause
\t\tkeyActions: [
\t\t\t\t{
\t\t\t\t\t\tkeys: [
\t\t\t\t\t\t\t\t32, // SPACE
\t\t\t\t\t\t\t\t179 // GOOGLE play/pause button
\t\t\t\t\t\t\t\t ],
\t\t\t\t\t\taction: function(player, media, key, event) {

\t\t\t\t\t\t\tif (!mejs.MediaFeatures.isFirefox) {
\t\t\t\t\t\t\t\tif (media.paused || media.ended) {
\t\t\t\t\t\t\t\t\tmedia.play();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [38], // UP
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tplayer.container.find('.mejs-volume-slider').css('display','block');
\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar newVolume = Math.min(media.volume + 0.1, 1);
\t\t\t\t\t\t\t\tmedia.setVolume(newVolume);
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [40], // DOWN
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tplayer.container.find('.mejs-volume-slider').css('display','block');
\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar newVolume = Math.max(media.volume - 0.1, 0);
\t\t\t\t\t\t\t\tmedia.setVolume(newVolume);
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [
\t\t\t\t\t\t\t\t37, // LEFT
\t\t\t\t\t\t\t\t227 // Google TV rewind
\t\t\t\t\t\t],
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tif (!isNaN(media.duration) && media.duration > 0) {
\t\t\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// 5%
\t\t\t\t\t\t\t\t\t\tvar newTime = Math.max(media.currentTime - player.options.defaultSeekBackwardInterval(media), 0);
\t\t\t\t\t\t\t\t\t\tmedia.setCurrentTime(newTime);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [
\t\t\t\t\t\t\t\t39, // RIGHT
\t\t\t\t\t\t\t\t228 // Google TV forward
\t\t\t\t\t\t],
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tif (!isNaN(media.duration) && media.duration > 0) {
\t\t\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// 5%
\t\t\t\t\t\t\t\t\t\tvar newTime = Math.min(media.currentTime + player.options.defaultSeekForwardInterval(media), media.duration);
\t\t\t\t\t\t\t\t\t\tmedia.setCurrentTime(newTime);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [70], // F
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tif (typeof player.enterFullScreen != 'undefined') {
\t\t\t\t\t\t\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\tplayer.enterFullScreen();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\t\tkeys: [77], // M
\t\t\t\t\t\taction: function(player, media, key, event) {
\t\t\t\t\t\t\t\tplayer.container.find('.mejs-volume-slider').css('display','block');
\t\t\t\t\t\t\t\tif (player.isVideo) {
\t\t\t\t\t\t\t\t\t\tplayer.showControls();
\t\t\t\t\t\t\t\t\t\tplayer.startControlsTimer();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (player.media.muted) {
\t\t\t\t\t\t\t\t\t\tplayer.setMuted(false);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tplayer.setMuted(true);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t}
\t\t]
\t};

\tmejs.mepIndex = 0;

\tmejs.players = {};

\t// wraps a MediaElement object in player controls
\tmejs.MediaElementPlayer = function(node, o) {
\t\t// enforce object, even without \"new\" (via John Resig)
\t\tif ( !(this instanceof mejs.MediaElementPlayer) ) {
\t\t\treturn new mejs.MediaElementPlayer(node, o);
\t\t}

\t\tvar t = this;

\t\t// these will be reset after the MediaElement.success fires
\t\tt.\$media = t.\$node = \$(node);
\t\tt.node = t.media = t.\$media[0];

\t\tif(!t.node) {
\t\t\treturn;
\t\t}

\t\t// check for existing player
\t\tif (typeof t.node.player != 'undefined') {
\t\t\treturn t.node.player;
\t\t}


\t\t// try to get options from data-mejsoptions
\t\tif (typeof o == 'undefined') {
\t\t\to = t.\$node.data('mejsoptions');
\t\t}

\t\t// extend default options
\t\tt.options = \$.extend({},mejs.MepDefaults,o);

\t\tif (!t.options.timeFormat) {
\t\t\t// Generate the time format according to options
\t\t\tt.options.timeFormat = 'mm:ss';
\t\t\tif (t.options.alwaysShowHours) {
\t\t\t\tt.options.timeFormat = 'hh:mm:ss';
\t\t\t}
\t\t\tif (t.options.showTimecodeFrameCount) {
\t\t\t\tt.options.timeFormat += ':ff';
\t\t\t}
\t\t}

\t\tmejs.Utility.calculateTimeFormat(0, t.options, t.options.framesPerSecond || 25);

\t\t// unique ID
\t\tt.id = 'mep_' + mejs.mepIndex++;

\t\t// add to player array (for focus events)
\t\tmejs.players[t.id] = t;

\t\t// start up
\t\tt.init();

\t\treturn t;
\t};

\t// actual player
\tmejs.MediaElementPlayer.prototype = {

\t\thasFocus: false,

\t\tcontrolsAreVisible: true,

\t\tinit: function() {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tmf = mejs.MediaFeatures,
\t\t\t\t// options for MediaElement (shim)
\t\t\t\tmeOptions = \$.extend(true, {}, t.options, {
\t\t\t\t\tsuccess: function(media, domNode) { t.meReady(media, domNode); },
\t\t\t\t\terror: function(e) { t.handleError(e);}
\t\t\t\t}),
\t\t\t\ttagName = t.media.tagName.toLowerCase();

\t\t\tt.isDynamic = (tagName !== 'audio' && tagName !== 'video');

\t\t\tif (t.isDynamic) {
\t\t\t\t// get video from src or href?
\t\t\t\tt.isVideo = t.options.isVideo;
\t\t\t} else {
\t\t\t\tt.isVideo = (tagName !== 'audio' && t.options.isVideo);
\t\t\t}

\t\t\t// use native controls in iPad, iPhone, and Android
\t\t\tif ((mf.isiPad && t.options.iPadUseNativeControls) || (mf.isiPhone && t.options.iPhoneUseNativeControls)) {

\t\t\t\t// add controls and stop
\t\t\t\tt.\$media.attr('controls', 'controls');

\t\t\t\t// attempt to fix iOS 3 bug
\t\t\t\t//t.\$media.removeAttr('poster');
\t\t\t\t\t\t\t\t// no Issue found on iOS3 -ttroxell

\t\t\t\t// override Apple's autoplay override for iPads
\t\t\t\tif (mf.isiPad && t.media.getAttribute('autoplay') !== null) {
\t\t\t\t\tt.play();
\t\t\t\t}

\t\t\t} else if (mf.isAndroid && t.options.AndroidUseNativeControls) {

\t\t\t\t// leave default player

\t\t\t} else if (t.isVideo || (!t.isVideo && t.options.features.length)) {

\t\t\t\t// DESKTOP: use MediaElementPlayer controls

\t\t\t\t// remove native controls
\t\t\t\tt.\$media.removeAttr('controls');
\t\t\t\tvar videoPlayerTitle = t.isVideo ?
\t\t\t\t\tmejs.i18n.t('mejs.video-player') : mejs.i18n.t('mejs.audio-player');
\t\t\t\t// insert description for screen readers
\t\t\t\t\$('<span class=\"mejs-offscreen\">' + videoPlayerTitle + '</span>').insertBefore(t.\$media);
\t\t\t\t// build container
\t\t\t\tt.container =
\t\t\t\t\t\$('<div id=\"' + t.id + '\" class=\"mejs-container ' + (mejs.MediaFeatures.svgAsImg ? 'svg' : 'no-svg') +
\t\t\t\t\t  '\" tabindex=\"0\" role=\"application\" aria-label=\"' + videoPlayerTitle + '\">'+
\t\t\t\t\t\t'<div class=\"mejs-inner\">'+
\t\t\t\t\t\t\t'<div class=\"mejs-mediaelement\"></div>'+
\t\t\t\t\t\t\t'<div class=\"mejs-layers\"></div>'+
\t\t\t\t\t\t\t'<div class=\"mejs-controls\"></div>'+
\t\t\t\t\t\t\t'<div class=\"mejs-clear\"></div>'+
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t'</div>')
\t\t\t\t\t.addClass(t.\$media[0].className)
\t\t\t\t\t.insertBefore(t.\$media)
\t\t\t\t\t.focus(function ( e ) {
\t\t\t\t\t\tif( !t.controlsAreVisible && !t.hasFocus && t.controlsEnabled) {
\t\t\t\t\t\t\tt.showControls(true);
\t\t\t\t\t\t\t// In versions older than IE11, the focus causes the playbar to be displayed
\t\t\t\t\t\t\t// if user clicks on the Play/Pause button in the control bar once it attempts
\t\t\t\t\t\t\t// to hide it
\t\t\t\t\t\t\tif (!t.hasMsNativeFullScreen) {
\t\t\t\t\t\t\t\t// If e.relatedTarget appears before container, send focus to play button,
\t\t\t\t\t\t\t\t// else send focus to last control button.
\t\t\t\t\t\t\t\tvar btnSelector = '.mejs-playpause-button > button';

\t\t\t\t\t\t\t\tif (mejs.Utility.isNodeAfter(e.relatedTarget, t.container[0])) {
\t\t\t\t\t\t\t\t\tbtnSelector = '.mejs-controls .mejs-button:last-child > button';
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar button = t.container.find(btnSelector);
\t\t\t\t\t\t\t\tbutton.focus();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t// When no elements in controls, hide bar completely
\t\t\t\tif (!t.options.features.length) {
\t\t\t\t\tt.container.css('background', 'transparent').find('.mejs-controls').hide();
\t\t\t\t}
 
\t\t\t\tif (t.isVideo && t.options.stretching === 'fill' && !t.container.parent('mejs-fill-container').length) {
\t\t\t\t\t// outer container
\t\t\t\t\tt.outerContainer = t.\$media.parent();
\t\t\t\t\tt.container.wrap('<div class=\"mejs-fill-container\"/>');
\t\t\t\t}

\t\t\t\t// add classes for user and content
\t\t\t\tt.container.addClass(
\t\t\t\t\t(mf.isAndroid ? 'mejs-android ' : '') +
\t\t\t\t\t(mf.isiOS ? 'mejs-ios ' : '') +
\t\t\t\t\t(mf.isiPad ? 'mejs-ipad ' : '') +
\t\t\t\t\t(mf.isiPhone ? 'mejs-iphone ' : '') +
\t\t\t\t\t(t.isVideo ? 'mejs-video ' : 'mejs-audio ')
\t\t\t\t);


\t\t\t\t// move the <video/video> tag into the right spot
\t\t\t\tt.container.find('.mejs-mediaelement').append(t.\$media);

\t\t\t\t// needs to be assigned here, after iOS remap
\t\t\t\tt.node.player = t;

\t\t\t\t// find parts
\t\t\t\tt.controls = t.container.find('.mejs-controls');
\t\t\t\tt.layers = t.container.find('.mejs-layers');

\t\t\t\t// determine the size

\t\t\t\t/* size priority:
\t\t\t\t\t(1) videoWidth (forced),
\t\t\t\t\t(2) style=\"width;height;\"
\t\t\t\t\t(3) width attribute,
\t\t\t\t\t(4) defaultVideoWidth (for unspecified cases)
\t\t\t\t*/

\t\t\t\tvar tagType = (t.isVideo ? 'video' : 'audio'),
\t\t\t\t\tcapsTagName = tagType.substring(0,1).toUpperCase() + tagType.substring(1);



\t\t\t\tif (t.options[tagType + 'Width'] > 0 || t.options[tagType + 'Width'].toString().indexOf('%') > -1) {
\t\t\t\t\tt.width = t.options[tagType + 'Width'];
\t\t\t\t} else if (t.media.style.width !== '' && t.media.style.width !== null) {
\t\t\t\t\tt.width = t.media.style.width;
\t\t\t\t} else if (t.media.getAttribute('width') !== null) {
\t\t\t\t\tt.width = t.\$media.attr('width');
\t\t\t\t} else {
\t\t\t\t\tt.width = t.options['default' + capsTagName + 'Width'];
\t\t\t\t}

\t\t\t\tif (t.options[tagType + 'Height'] > 0 || t.options[tagType + 'Height'].toString().indexOf('%') > -1) {
\t\t\t\t\tt.height = t.options[tagType + 'Height'];
\t\t\t\t} else if (t.media.style.height !== '' && t.media.style.height !== null) {
\t\t\t\t\tt.height = t.media.style.height;
\t\t\t\t} else if (t.\$media[0].getAttribute('height') !== null) {
\t\t\t\t\tt.height = t.\$media.attr('height');
\t\t\t\t} else {
\t\t\t\t\tt.height = t.options['default' + capsTagName + 'Height'];
\t\t\t\t}

\t\t\t\t// set the size, while we wait for the plugins to load below
\t\t\t\tt.setPlayerSize(t.width, t.height);

\t\t\t\t// create MediaElementShim
\t\t\t\tmeOptions.pluginWidth = t.width;
\t\t\t\tmeOptions.pluginHeight = t.height;
\t\t\t}
\t\t\t// Hide media completely for audio that doesn't have any features
\t\t\telse if (!t.isVideo && !t.options.features.length) {
\t\t\t\tt.\$media.hide();
\t\t\t}

\t\t\t// create MediaElement shim
\t\t\tmejs.MediaElement(t.\$media[0], meOptions);

\t\t\tif (typeof(t.container) !== 'undefined' && t.options.features.length && t.controlsAreVisible) {
\t\t\t\t// controls are shown when loaded
\t\t\t\tt.container.trigger('controlsshown');
\t\t\t}
\t\t},

\t\tshowControls: function(doAnimation) {
\t\t\tvar t = this;

\t\t\tdoAnimation = typeof doAnimation == 'undefined' || doAnimation;

\t\t\tif (t.controlsAreVisible)
\t\t\t\treturn;

\t\t\tif (doAnimation) {
\t\t\t\tt.controls
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.stop(true, true).fadeIn(200, function() {
\t\t\t\t\t\tt.controlsAreVisible = true;
\t\t\t\t\t\tt.container.trigger('controlsshown');
\t\t\t\t\t});

\t\t\t\t// any additional controls people might add and want to hide
\t\t\t\tt.container.find('.mejs-control')
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.stop(true, true).fadeIn(200, function() {t.controlsAreVisible = true;});

\t\t\t} else {
\t\t\t\tt.controls
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\t// any additional controls people might add and want to hide
\t\t\t\tt.container.find('.mejs-control')
\t\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\tt.controlsAreVisible = true;
\t\t\t\tt.container.trigger('controlsshown');
\t\t\t}

\t\t\tt.setControlsSize();

\t\t},

\t\thideControls: function(doAnimation) {
\t\t\tvar t = this;

\t\t\tdoAnimation = typeof doAnimation == 'undefined' || doAnimation;

\t\t\tif (!t.controlsAreVisible || t.options.alwaysShowControls || t.keyboardAction || t.media.paused || t.media.ended)
\t\t\t\treturn;

\t\t\tif (doAnimation) {
\t\t\t\t// fade out main controls
\t\t\t\tt.controls.stop(true, true).fadeOut(200, function() {
\t\t\t\t\t\$(this)
\t\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t\t.css('display','block');

\t\t\t\t\tt.controlsAreVisible = false;
\t\t\t\t\tt.container.trigger('controlshidden');
\t\t\t\t});

\t\t\t\t// any additional controls people might add and want to hide
\t\t\t\tt.container.find('.mejs-control').stop(true, true).fadeOut(200, function() {
\t\t\t\t\t\$(this)
\t\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t\t.css('display','block');
\t\t\t\t});
\t\t\t} else {

\t\t\t\t// hide main controls
\t\t\t\tt.controls
\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\t// hide others
\t\t\t\tt.container.find('.mejs-control')
\t\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t\t.css('display','block');

\t\t\t\tt.controlsAreVisible = false;
\t\t\t\tt.container.trigger('controlshidden');
\t\t\t}
\t\t},

\t\tcontrolsTimer: null,

\t\tstartControlsTimer: function(timeout) {

\t\t\tvar t = this;

\t\t\ttimeout = typeof timeout != 'undefined' ? timeout : t.options.controlsTimeoutDefault;

\t\t\tt.killControlsTimer('start');

\t\t\tt.controlsTimer = setTimeout(function() {
\t\t\t\t//
\t\t\t\tt.hideControls();
\t\t\t\tt.killControlsTimer('hide');
\t\t\t}, timeout);
\t\t},

\t\tkillControlsTimer: function(src) {

\t\t\tvar t = this;

\t\t\tif (t.controlsTimer !== null) {
\t\t\t\tclearTimeout(t.controlsTimer);
\t\t\t\tdelete t.controlsTimer;
\t\t\t\tt.controlsTimer = null;
\t\t\t}
\t\t},

\t\tcontrolsEnabled: true,

\t\tdisableControls: function() {
\t\t\tvar t= this;

\t\t\tt.killControlsTimer();
\t\t\tt.hideControls(false);
\t\t\tthis.controlsEnabled = false;
\t\t},

\t\tenableControls: function() {
\t\t\tvar t= this;

\t\t\tt.showControls(false);

\t\t\tt.controlsEnabled = true;
\t\t},

\t\t// Sets up all controls and events
\t\tmeReady: function(media, domNode) {
\t\t\t
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tmf = mejs.MediaFeatures,
\t\t\t\tautoplayAttr = domNode.getAttribute('autoplay'),
\t\t\t\tautoplay = !(typeof autoplayAttr == 'undefined' || autoplayAttr === null || autoplayAttr === 'false'),
\t\t\t\tfeatureIndex,
\t\t\t\tfeature;

\t\t\t// make sure it can't create itself again if a plugin reloads
\t\t\tif (t.created) {
\t\t\t\treturn;
\t\t\t} else {
\t\t\t\tt.created = true;
\t\t\t}

\t\t\tt.media = media;
\t\t\tt.domNode = domNode;

\t\t\tif (!(mf.isAndroid && t.options.AndroidUseNativeControls) && !(mf.isiPad && t.options.iPadUseNativeControls) && !(mf.isiPhone && t.options.iPhoneUseNativeControls)) {

\t\t\t\t// In the event that no features are specified for audio,
\t\t\t\t// create only MediaElement instance rather than
\t\t\t\t// doing all the work to create a full player
\t\t\t\tif (!t.isVideo && !t.options.features.length) {

\t\t\t\t\t// force autoplay for HTML5
\t\t\t\t\tif (autoplay && media.pluginType == 'native') {
\t\t\t\t\t\tt.play();
\t\t\t\t\t}


\t\t\t\t\tif (t.options.success) {

\t\t\t\t\t\tif (typeof t.options.success == 'string') {
\t\t\t\t\t\t\twindow[t.options.success](t.media, t.domNode, t);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tt.options.success(t.media, t.domNode, t);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// two built in features
\t\t\t\tt.buildposter(t, t.controls, t.layers, t.media);
\t\t\t\tt.buildkeyboard(t, t.controls, t.layers, t.media);
\t\t\t\tt.buildoverlays(t, t.controls, t.layers, t.media);

\t\t\t\t// grab for use by features
\t\t\t\tt.findTracks();

\t\t\t\t// add user-defined features/controls
\t\t\t\tfor (featureIndex in t.options.features) {
\t\t\t\t\tfeature = t.options.features[featureIndex];
\t\t\t\t\tif (t['build' + feature]) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tt['build' + feature](t, t.controls, t.layers, t.media);
\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t// TODO: report control error
\t\t\t\t\t\t\t//throw e;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tt.container.trigger('controlsready');

\t\t\t\t// reset all layers and controls
\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\tt.setControlsSize();


\t\t\t\t// controls fade
\t\t\t\tif (t.isVideo) {

\t\t\t\t\tif (mejs.MediaFeatures.hasTouch && !t.options.alwaysShowControls) {

\t\t\t\t\t\t// for touch devices (iOS, Android)
\t\t\t\t\t\t// show/hide without animation on touch

\t\t\t\t\t\tt.\$media.bind('touchstart', function() {

\t\t\t\t\t\t\t// toggle controls
\t\t\t\t\t\t\tif (t.controlsAreVisible) {
\t\t\t\t\t\t\t\tt.hideControls(false);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tt.showControls(false);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t} else {

\t\t\t\t\t\t// create callback here since it needs access to current
\t\t\t\t\t\t// MediaElement object
\t\t\t\t\t\tt.clickToPlayPauseCallback = function() {
\t\t\t\t\t\t\t//

\t\t\t\t\t\t\tif (t.options.clickToPlayPause) {
\t\t\t\t\t\t\t\tif (t.media.paused) {
\t\t\t\t\t\t\t\t\tt.play();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tt.pause();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar button = t.\$media.closest('.mejs-container').find('.mejs-overlay-button'),
\t\t\t\t\t\t\t\t\tpressed = button.attr('aria-pressed');
\t\t\t\t\t\t\t\tbutton.attr('aria-pressed', !pressed);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};

\t\t\t\t\t\t// click to play/pause
\t\t\t\t\t\tt.media.addEventListener('click', t.clickToPlayPauseCallback, false);

\t\t\t\t\t\t// show/hide controls
\t\t\t\t\t\tt.container
\t\t\t\t\t\t\t.bind('mouseenter', function () {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tif (!t.options.alwaysShowControls ) {
\t\t\t\t\t\t\t\t\t\tt.killControlsTimer('enter');
\t\t\t\t\t\t\t\t\t\tt.showControls();
\t\t\t\t\t\t\t\t\t\tt.startControlsTimer(t.options.controlsTimeoutMouseEnter);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.bind('mousemove', function() {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tif (!t.controlsAreVisible) {
\t\t\t\t\t\t\t\t\t\tt.showControls();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (!t.options.alwaysShowControls) {
\t\t\t\t\t\t\t\t\t\tt.startControlsTimer(t.options.controlsTimeoutMouseEnter);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.bind('mouseleave', function () {
\t\t\t\t\t\t\t\tif (t.controlsEnabled) {
\t\t\t\t\t\t\t\t\tif (!t.media.paused && !t.options.alwaysShowControls) {
\t\t\t\t\t\t\t\t\t\tt.startControlsTimer(t.options.controlsTimeoutMouseLeave);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tif(t.options.hideVideoControlsOnLoad) {
\t\t\t\t\t\tt.hideControls(false);
\t\t\t\t\t}

\t\t\t\t\t// check for autoplay
\t\t\t\t\tif (autoplay && !t.options.alwaysShowControls) {
\t\t\t\t\t\tt.hideControls();
\t\t\t\t\t}

\t\t\t\t\t// resizer
\t\t\t\t\tif (t.options.enableAutosize) {
\t\t\t\t\t\tt.media.addEventListener('loadedmetadata', function(e) {
\t\t\t\t\t\t\t// if the <video height> was not set and the options.videoHeight was not set
\t\t\t\t\t\t\t// then resize to the real dimensions
\t\t\t\t\t\t\tif (t.options.videoHeight <= 0 && t.domNode.getAttribute('height') === null && !isNaN(e.target.videoHeight)) {
\t\t\t\t\t\t\t\tt.setPlayerSize(e.target.videoWidth, e.target.videoHeight);
\t\t\t\t\t\t\t\tt.setControlsSize();
\t\t\t\t\t\t\t\tt.media.setVideoSize(e.target.videoWidth, e.target.videoHeight);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, false);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// EVENTS

\t\t\t\t// FOCUS: when a video starts playing, it takes focus from other players (possibly pausing them)
\t\t\t\tt.media.addEventListener('play', function() {
\t\t\t\t\tvar playerIndex;

\t\t\t\t\t// go through all other players
\t\t\t\t\tfor (playerIndex in mejs.players) {
\t\t\t\t\t\tvar p = mejs.players[playerIndex];
\t\t\t\t\t\tif (p.id != t.id && t.options.pauseOtherPlayers && !p.paused && !p.ended) {
\t\t\t\t\t\t\tp.pause();
\t\t\t\t\t\t}
\t\t\t\t\t\tp.hasFocus = false;
\t\t\t\t\t}

\t\t\t\t\tt.hasFocus = true;
\t\t\t\t},false);


\t\t\t\t// ended for all
\t\t\t\tt.media.addEventListener('ended', function (e) {
\t\t\t\t\tif(t.options.autoRewind) {
\t\t\t\t\t\ttry{
\t\t\t\t\t\t\tt.media.setCurrentTime(0);
\t\t\t\t\t\t\t// Fixing an Android stock browser bug, where \"seeked\" isn't fired correctly after ending the video and jumping to the beginning
\t\t\t\t\t\t\twindow.setTimeout(function(){
\t\t\t\t\t\t\t\t\$(t.container).find('.mejs-overlay-loading').parent().hide();
\t\t\t\t\t\t\t}, 20);
\t\t\t\t\t\t} catch (exp) {

\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (t.media.pluginType === 'youtube') {
\t\t\t\t\t\tt.media.stop();
\t\t\t\t\t} else {
\t\t\t\t\t\tt.media.pause();
\t\t\t\t\t}

\t\t\t\t\tif (t.setProgressRail) {
\t\t\t\t\t\tt.setProgressRail();
\t\t\t\t\t}
\t\t\t\t\tif (t.setCurrentRail) {
\t\t\t\t\t\tt.setCurrentRail();
\t\t\t\t\t}

\t\t\t\t\tif (t.options.loop) {
\t\t\t\t\t\tt.play();
\t\t\t\t\t} else if (!t.options.alwaysShowControls && t.controlsEnabled) {
\t\t\t\t\t\tt.showControls();
\t\t\t\t\t}
\t\t\t\t}, false);

\t\t\t\t// resize on the first play
\t\t\t\tt.media.addEventListener('loadedmetadata', function() {

\t\t\t\t\tmejs.Utility.calculateTimeFormat(t.duration, t.options, t.options.framesPerSecond || 25);

\t\t\t\t\tif (t.updateDuration) {
\t\t\t\t\t\tt.updateDuration();
\t\t\t\t\t}
\t\t\t\t\tif (t.updateCurrent) {
\t\t\t\t\t\tt.updateCurrent();
\t\t\t\t\t}

\t\t\t\t\tif (!t.isFullScreen) {
\t\t\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\t\t\tt.setControlsSize();
\t\t\t\t\t}
\t\t\t\t}, false);

\t\t\t\t// Only change the time format when necessary
\t\t\t\tvar duration = null;
\t\t\t\tt.media.addEventListener('timeupdate',function() {
\t\t\t\t\tif (duration !== this.duration) {
\t\t\t\t\t\tduration = this.duration;
\t\t\t\t\t\tmejs.Utility.calculateTimeFormat(duration, t.options, t.options.framesPerSecond || 25);
\t\t\t\t\t\t
\t\t\t\t\t\t// make sure to fill in and resize the controls (e.g., 00:00 => 01:13:15
\t\t\t\t\t\tif (t.updateDuration) {
\t\t\t\t\t\t\tt.updateDuration();
\t\t\t\t\t\t}
\t\t\t\t\t\tif (t.updateCurrent) {
\t\t\t\t\t\t\tt.updateCurrent();
\t\t\t\t\t\t}
\t\t\t\t\t\tt.setControlsSize();
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t}, false);

\t\t\t\tt.container.focusout(function (e) {
\t\t\t\t\tif( e.relatedTarget ) { //FF is working on supporting focusout https://bugzilla.mozilla.org/show_bug.cgi?id=687787
\t\t\t\t\t\tvar \$target = \$(e.relatedTarget);
\t\t\t\t\t\tif (t.keyboardAction && \$target.parents('.mejs-container').length === 0) {
\t\t\t\t\t\t\tt.keyboardAction = false;
\t\t\t\t\t\t\tif (t.isVideo && !t.options.alwaysShowControls) {
\t\t\t\t\t\t\t\tt.hideControls(true);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// webkit has trouble doing this without a delay
\t\t\t\tsetTimeout(function () {
\t\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\t\tt.setControlsSize();
\t\t\t\t}, 50);

\t\t\t\t// adjust controls whenever window sizes (used to be in fullscreen only)
\t\t\t\tt.globalBind('resize', function() {

\t\t\t\t\t// don't resize for fullscreen mode
\t\t\t\t\tif ( !(t.isFullScreen || (mejs.MediaFeatures.hasTrueNativeFullScreen && document.webkitIsFullScreen)) ) {
\t\t\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\t\t}

\t\t\t\t\t// always adjust controls
\t\t\t\t\tt.setControlsSize();
\t\t\t\t});

\t\t\t\t// This is a work-around for a bug in the YouTube iFrame player, which means
\t\t\t\t//\twe can't use the play() API for the initial playback on iOS or Android;
\t\t\t\t//\tuser has to start playback directly by tapping on the iFrame.
\t\t\t\tif (t.media.pluginType == 'youtube' && ( mf.isiOS || mf.isAndroid ) ) {
\t\t\t\t\tt.container.find('.mejs-overlay-play').hide();
\t\t\t\t\tt.container.find('.mejs-poster').hide();
\t\t\t\t}
\t\t\t}

\t\t\t// force autoplay for HTML5
\t\t\tif (autoplay && media.pluginType == 'native') {
\t\t\t\tt.play();
\t\t\t}


\t\t\tif (t.options.success) {

\t\t\t\tif (typeof t.options.success == 'string') {
\t\t\t\t\twindow[t.options.success](t.media, t.domNode, t);
\t\t\t\t} else {
\t\t\t\t\tt.options.success(t.media, t.domNode, t);
\t\t\t\t}
\t\t\t}
\t\t},

\t\thandleError: function(e) {
\t\t\tvar t = this;

\t\t\tif (t.controls) {
\t\t\t\tt.controls.hide();
\t\t\t}

\t\t\t// Tell user that the file cannot be played
\t\t\tif (t.options.error) {
\t\t\t\tt.options.error(e);
\t\t\t}
\t\t},

\t\tsetPlayerSize: function(width,height) {
\t\t\tvar t = this;

\t\t\tif( !t.options.setDimensions ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (typeof width != 'undefined') {
\t\t\t\tt.width = width;
\t\t\t}

\t\t\tif (typeof height != 'undefined') {
\t\t\t\tt.height = height;
\t\t\t}
 
\t\t\t// check stretching modes
\t\t\tswitch (t.options.stretching) {
\t\t\t\tcase 'fill':
\t\t\t\t\t// The 'fill' effect only makes sense on video; for audio we will set the dimensions
\t\t\t\t\tif (t.isVideo) {
\t\t\t\t\t\tthis.setFillMode();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.setDimensions(t.width, t.height);
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase 'responsive':
\t\t\t\t\tthis.setResponsiveMode();
\t\t\t\t\tbreak;
\t\t\t\tcase 'none':
\t\t\t\t\tthis.setDimensions(t.width, t.height);
\t\t\t\t\tbreak;
\t\t\t\t// This is the 'auto' mode
\t\t\t\tdefault:
\t\t\t\t\tif (this.hasFluidMode() === true) {
\t\t\t\t\t\tthis.setResponsiveMode();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.setDimensions(t.width, t.height);
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t}
\t\t},
 
\t\thasFluidMode: function() {
\t\t\tvar t = this;
\t 
\t\t\t// detect 100% mode - use currentStyle for IE since css() doesn't return percentages
\t\t\treturn (t.height.toString().indexOf('%') > 0 || (t.\$node.css('max-width') !== 'none' && t.\$node.css('max-width') !== 't.width') || (t.\$node[0].currentStyle && t.\$node[0].currentStyle.maxWidth === '100%'));
\t\t},
 
\t\tsetResponsiveMode: function() {
\t\t\tvar t = this;
\t\t
\t\t\t// do we have the native dimensions yet?
\t\t\tvar nativeWidth = (function() {
\t\t\t\tif (t.isVideo) {
\t\t\t\t\tif (t.media.videoWidth && t.media.videoWidth > 0) {
\t\t\t\t\t\treturn t.media.videoWidth;
\t\t\t\t\t} else if (t.media.getAttribute('width') !== null) {
\t\t\t\t\t\treturn t.media.getAttribute('width');
\t\t\t\t\t} else {
\t\t\t\t\t\treturn t.options.defaultVideoWidth;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\treturn t.options.defaultAudioWidth;
\t\t\t\t}
\t\t\t})();
\t\t
\t\t\tvar nativeHeight = (function() {
\t\t\t\tif (t.isVideo) {
\t\t\t\t\tif (t.media.videoHeight && t.media.videoHeight > 0) {
\t\t\t\t\t\treturn t.media.videoHeight;
\t\t\t\t\t} else if (t.media.getAttribute('height') !== null) {
\t\t\t\t\t\treturn t.media.getAttribute('height');
\t\t\t\t\t} else {
\t\t\t\t\t\treturn t.options.defaultVideoHeight;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\treturn t.options.defaultAudioHeight;
\t\t\t\t}
\t\t\t})();
\t\t
\t\t\tvar parentWidth = t.container.parent().closest(':visible').width(),
\t\t\tparentHeight = t.container.parent().closest(':visible').height(),
\t\t\tnewHeight = t.isVideo || !t.options.autosizeProgress ? parseInt(parentWidth * nativeHeight/nativeWidth, 10) : nativeHeight;
\t\t\t
\t\t\t// When we use percent, the newHeight can't be calculated so we get the container height
\t\t\tif (isNaN(newHeight) || ( parentHeight !== 0 && newHeight > parentHeight && parentHeight > nativeHeight)) {
\t\t\t\tnewHeight = parentHeight;
\t\t\t}
\t\t
\t\t\tif (t.container.parent().length > 0 && t.container.parent()[0].tagName.toLowerCase() === 'body') { // && t.container.siblings().count == 0) {
\t\t\t\tparentWidth = \$(window).width();
\t\t\t\tnewHeight = \$(window).height();
\t\t\t}
\t\t
\t\t\tif ( newHeight && parentWidth ) {
\t\t\t
\t\t\t\t// set outer container size
\t\t\t\tt.container
\t\t\t\t\t.width(parentWidth)
\t\t\t\t\t.height(newHeight);
\t\t\t\t
\t\t\t\t// set native <video> or <audio> and shims
\t\t\t\tt.\$media.add(t.container.find('.mejs-shim'))
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');
\t\t\t\t
\t\t\t\t// if shim is ready, send the size to the embeded plugin
\t\t\t\tif (t.isVideo) {
\t\t\t\t\tif (t.media.setVideoSize) {
\t\t\t\t\t\tt.media.setVideoSize(parentWidth, newHeight);
\t\t\t\t\t}
\t\t\t\t}
\t\t
\t\t\t\t// set the layers
\t\t\t\tt.layers.children('.mejs-layer')
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');
\t\t\t}
\t\t},
 
\t\tsetFillMode: function() {
\t\t\tvar t = this,
\t\t\t\tparent = t.outerContainer;
 
\t\t\tif (!parent.width()) {
\t\t\t\tparent.height(t.\$media.width());
\t\t\t}
 
\t\t\tif (!parent.height()) {
\t\t\t\tparent.height(t.\$media.height());
\t\t\t}
 
\t\t\tvar parentWidth = parent.width(),
\t\t\t\tparentHeight = parent.height();
\t\t\t
\t\t\tt.setDimensions('100%', '100%');
\t\t\t
\t\t\t// This prevents an issue when displaying poster
\t\t\tt.container.find('.mejs-poster img').css('display', 'block');
\t\t\t
\t\t\ttargetElement = t.container.find('object, embed, iframe, video');
\t\t\t
\t\t\t// calculate new width and height
\t\t\tvar initHeight = t.height,
\t\t\t\tinitWidth = t.width,
\t\t\t\t// scale to the target width
\t\t\t\tscaleX1 = parentWidth,
\t\t\t\tscaleY1 = (initHeight * parentWidth) / initWidth,
\t\t\t\t// scale to the target height
\t\t\t\tscaleX2 = (initWidth * parentHeight) / initHeight,
\t\t\t\tscaleY2 = parentHeight,
\t\t\t\t// now figure out which one we should use
\t\t\t\tbScaleOnWidth = !(scaleX2 > parentWidth),
\t\t\t\tfinalWidth = bScaleOnWidth ? Math.floor(scaleX1) : Math.floor(scaleX2),
\t\t\t\tfinalHeight = bScaleOnWidth ? Math.floor(scaleY1) : Math.floor(scaleY2);
\t\t\t
\t\t\tif (bScaleOnWidth) {
\t\t\t\ttargetElement.height(finalHeight).width(parentWidth);
\t\t\t\tif (t.media.setVideoSize) {
\t\t\t\t\tt.media.setVideoSize(parentWidth, finalHeight);
\t\t\t\t}
\t\t\t} else {
\t\t\t\ttargetElement.height(parentHeight).width(finalWidth);
\t\t\t\tif (t.media.setVideoSize) {
\t\t\t\t\tt.media.setVideoSize(finalWidth, parentHeight);
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\ttargetElement.css({
\t\t\t\t'margin-left': Math.floor((parentWidth - finalWidth) / 2),
\t\t\t\t'margin-top': 0
\t\t\t});
\t\t},
\t 
\t\tsetDimensions: function(width, height) {
\t\t\tvar t = this;
\t\t\t
\t\t\tt.container
\t\t\t\t.width(width)
\t\t\t\t.height(height);
\t\t\t
\t\t\tt.layers.children('.mejs-layer')
\t\t\t\t.width(width)
\t\t\t\t.height(height);
\t\t},

\t\tsetControlsSize: function() {
\t\t\tvar t = this,
\t\t\t\tusedWidth = 0,
\t\t\t\trailWidth = 0,
\t\t\t\trail = t.controls.find('.mejs-time-rail'),
\t\t\t\ttotal = t.controls.find('.mejs-time-total'),
\t\t\t\tothers = rail.siblings(),
\t\t\t\tlastControl = others.last(),
\t\t\t\tlastControlPosition = null,
\t\t\t\tavoidAutosizeProgress = t.options && !t.options.autosizeProgress;

\t\t\t// skip calculation if hidden
\t\t\tif (!t.container.is(':visible') || !rail.length || !rail.is(':visible')) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// allow the size to come from custom CSS
\t\t\tif (avoidAutosizeProgress) {
\t\t\t\t// Also, frontends devs can be more flexible
\t\t\t\t// due the opportunity of absolute positioning.
\t\t\t\trailWidth = parseInt(rail.css('width'), 10);
\t\t\t}

\t\t\t// attempt to autosize
\t\t\tif (railWidth === 0 || !railWidth) {

\t\t\t\t// find the size of all the other controls besides the rail
\t\t\t\tothers.each(function() {
\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\tif (\$this.css('position') != 'absolute' && \$this.is(':visible')) {
\t\t\t\t\t\tusedWidth += \$(this).outerWidth(true);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// fit the rail into the remaining space
\t\t\t\trailWidth = t.controls.width() - usedWidth - (rail.outerWidth(true) - rail.width());
\t\t\t}

\t\t\t// resize the rail,
\t\t\t// but then check if the last control (say, the fullscreen button) got pushed down
\t\t\t// this often happens when zoomed
\t\t\tdo {
\t\t\t\t// outer area
\t\t\t\t// we only want to set an inline style with the width of the rail
\t\t\t\t// if we're trying to autosize.
\t\t\t\tif (!avoidAutosizeProgress) {
\t\t\t\t\trail.width(railWidth);
\t\t\t\t}

\t\t\t\t// dark space
\t\t\t\ttotal.width(railWidth - (total.outerWidth(true) - total.width()));

\t\t\t\tif (lastControl.css('position') != 'absolute') {
\t\t\t\t\tlastControlPosition = lastControl.length ? lastControl.position() : null;
\t\t\t\t\trailWidth--;
\t\t\t\t}
\t\t\t} while (lastControlPosition !== null && lastControlPosition.top.toFixed(2) > 0 && railWidth > 0);

\t\t\tt.container.trigger('controlsresize');
\t\t},


\t\tbuildposter: function(player, controls, layers, media) {
\t\t\tvar t = this,
\t\t\t\tposter =
\t\t\t\t\$('<div class=\"mejs-poster mejs-layer\">' +
\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(layers),
\t\t\t\tposterUrl = player.\$media.attr('poster');

\t\t\t// prioriy goes to option (this is useful if you need to support iOS 3.x (iOS completely fails with poster)
\t\t\tif (player.options.poster !== '') {
\t\t\t\tposterUrl = player.options.poster;
\t\t\t}

\t\t\t// second, try the real poster
\t\t\tif ( posterUrl ) {
\t\t\t\tt.setPoster(posterUrl);
\t\t\t} else {
\t\t\t\tposter.hide();
\t\t\t}

\t\t\tmedia.addEventListener('play',function() {
\t\t\t\tposter.hide();
\t\t\t}, false);

\t\t\tif(player.options.showPosterWhenEnded && player.options.autoRewind){
\t\t\t\tmedia.addEventListener('ended',function() {
\t\t\t\t\tposter.show();
\t\t\t\t}, false);
\t\t\t}
\t\t},

\t\tsetPoster: function(url) {
\t\t\tvar t = this,
\t\t\t\tposterDiv = t.container.find('.mejs-poster'),
\t\t\t\tposterImg = posterDiv.find('img');

\t\t\tif (posterImg.length === 0) {
\t\t\t\tposterImg = \$('<img width=\"100%\" height=\"100%\" alt=\"\" />').appendTo(posterDiv);
\t\t\t}

\t\t\tposterImg.attr('src', url);
\t\t\tposterDiv.css({'background-image' : 'url(' + url + ')'});
\t\t},

\t\tbuildoverlays: function(player, controls, layers, media) {
\t\t\tvar t = this;
\t\t\tif (!player.isVideo)
\t\t\t\treturn;

\t\t\tvar
\t\t\tloading =
\t\t\t\t\$('<div class=\"mejs-overlay mejs-layer\">'+
\t\t\t\t\t'<div class=\"mejs-overlay-loading\"><span></span></div>'+
\t\t\t\t'</div>')
\t\t\t\t.hide() // start out hidden
\t\t\t\t.appendTo(layers),
\t\t\terror =
\t\t\t\t\$('<div class=\"mejs-overlay mejs-layer\">'+
\t\t\t\t\t'<div class=\"mejs-overlay-error\"></div>'+
\t\t\t\t'</div>')
\t\t\t\t.hide() // start out hidden
\t\t\t\t.appendTo(layers),
\t\t\t// this needs to come last so it's on top
\t\t\tbigPlay =
\t\t\t\t\$('<div class=\"mejs-overlay mejs-layer mejs-overlay-play\">'+
\t\t\t\t\t'<div class=\"mejs-overlay-button\" role=\"button\" aria-label=\"' + mejs.i18n.t('mejs.play') + '\" aria-pressed=\"false\"></div>'+
\t\t\t\t'</div>')
\t\t\t\t.appendTo(layers)
\t\t\t\t.bind('click', function() {\t // Removed 'touchstart' due issues on Samsung Android devices where a tap on bigPlay started and immediately stopped the video
\t\t\t\t\tif (t.options.clickToPlayPause) {
\t\t\t\t\t\tif (media.paused) {
\t\t\t\t\t\t\tmedia.play();
\t\t\t\t\t\t}

\t\t\t\t\t\tvar button = \$(this).find('.mejs-overlay-button'),
\t\t\t\t\t\t\tpressed = button.attr('aria-pressed');
\t\t\t\t\t\tbutton.attr('aria-pressed', !!pressed);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t/*
\t\t\tif (mejs.MediaFeatures.isiOS || mejs.MediaFeatures.isAndroid) {
\t\t\t\tbigPlay.remove();
\t\t\t\tloading.remove();
\t\t\t}
\t\t\t*/


\t\t\t// show/hide big play button
\t\t\tmedia.addEventListener('play',function() {
\t\t\t\tbigPlay.hide();
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t\terror.hide();
\t\t\t}, false);

\t\t\tmedia.addEventListener('playing', function() {
\t\t\t\tbigPlay.hide();
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t\terror.hide();
\t\t\t}, false);

\t\t\tmedia.addEventListener('seeking', function() {
\t\t\t\tloading.show();
\t\t\t\tcontrols.find('.mejs-time-buffering').show();
\t\t\t}, false);

\t\t\tmedia.addEventListener('seeked', function() {
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t}, false);

\t\t\tmedia.addEventListener('pause',function() {
\t\t\t\tif (!mejs.MediaFeatures.isiPhone) {
\t\t\t\t\tbigPlay.show();
\t\t\t\t}
\t\t\t}, false);

\t\t\tmedia.addEventListener('waiting', function() {
\t\t\t\tloading.show();
\t\t\t\tcontrols.find('.mejs-time-buffering').show();
\t\t\t}, false);


\t\t\t// show/hide loading
\t\t\tmedia.addEventListener('loadeddata',function() {
\t\t\t\t// for some reason Chrome is firing this event
\t\t\t\t//if (mejs.MediaFeatures.isChrome && media.getAttribute && media.getAttribute('preload') === 'none')
\t\t\t\t//\treturn;

\t\t\t\tloading.show();
\t\t\t\tcontrols.find('.mejs-time-buffering').show();
\t\t\t\t// Firing the 'canplay' event after a timeout which isn't getting fired on some Android 4.1 devices (https://github.com/johndyer/mediaelement/issues/1305)
\t\t\t\tif (mejs.MediaFeatures.isAndroid) {
\t\t\t\t\tmedia.canplayTimeout = window.setTimeout(
\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\tif (document.createEvent) {
\t\t\t\t\t\t\t\tvar evt = document.createEvent('HTMLEvents');
\t\t\t\t\t\t\t\tevt.initEvent('canplay', true, true);
\t\t\t\t\t\t\t\treturn media.dispatchEvent(evt);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 300
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmedia.addEventListener('canplay',function() {
\t\t\t\tloading.hide();
\t\t\t\tcontrols.find('.mejs-time-buffering').hide();
\t\t\t\tclearTimeout(media.canplayTimeout); // Clear timeout inside 'loadeddata' to prevent 'canplay' to fire twice
\t\t\t}, false);

\t\t\t// error handling
\t\t\tmedia.addEventListener('error',function(e) {
\t\t\t\tt.handleError(e);
\t\t\t\tloading.hide();
\t\t\t\tbigPlay.hide();
\t\t\t\terror.show();
\t\t\t\terror.find('.mejs-overlay-error').html(\"Error loading this resource\");
\t\t\t}, false);

\t\t\tmedia.addEventListener('keydown', function(e) {
\t\t\t\tt.onkeydown(player, media, e);
\t\t\t}, false);
\t\t},

\t\tbuildkeyboard: function(player, controls, layers, media) {

\t\t\t\tvar t = this;

\t\t\t\tt.container.keydown(function () {
\t\t\t\t\tt.keyboardAction = true;
\t\t\t\t});

\t\t\t\t// listen for key presses
\t\t\t\tt.globalBind('keydown', function(event) {
\t\t\t\t\tplayer.hasFocus = \$(event.target).closest('.mejs-container').length !== 0
\t\t\t\t\t\t&& \$(event.target).closest('.mejs-container').attr('id') === player.\$media.closest('.mejs-container').attr('id');
\t\t\t\t\treturn t.onkeydown(player, media, event);
\t\t\t\t});


\t\t\t\t// check if someone clicked outside a player region, then kill its focus
\t\t\t\tt.globalBind('click', function(event) {
\t\t\t\t\tplayer.hasFocus = \$(event.target).closest('.mejs-container').length !== 0;
\t\t\t\t});

\t\t},
\t\tonkeydown: function(player, media, e) {
\t\t\tif (player.hasFocus && player.options.enableKeyboard) {
\t\t\t\t// find a matching key
\t\t\t\tfor (var i = 0, il = player.options.keyActions.length; i < il; i++) {
\t\t\t\t\tvar keyAction = player.options.keyActions[i];

\t\t\t\t\tfor (var j = 0, jl = keyAction.keys.length; j < jl; j++) {
\t\t\t\t\t\tif (e.keyCode == keyAction.keys[j]) {
\t\t\t\t\t\t\tif (typeof(e.preventDefault) == \"function\") e.preventDefault();
\t\t\t\t\t\t\tkeyAction.action(player, media, e.keyCode, e);
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn true;
\t\t},

\t\tfindTracks: function() {
\t\t\tvar t = this,
\t\t\t\ttracktags = t.\$media.find('track');

\t\t\t// store for use by plugins
\t\t\tt.tracks = [];
\t\t\ttracktags.each(function(index, track) {

\t\t\t\ttrack = \$(track);

\t\t\t\tt.tracks.push({
\t\t\t\t\tsrclang: (track.attr('srclang')) ? track.attr('srclang').toLowerCase() : '',
\t\t\t\t\tsrc: track.attr('src'),
\t\t\t\t\tkind: track.attr('kind'),
\t\t\t\t\tlabel: track.attr('label') || '',
\t\t\t\t\tentries: [],
\t\t\t\t\tisLoaded: false
\t\t\t\t});
\t\t\t});
\t\t},
\t\tchangeSkin: function(className) {
\t\t\tthis.container[0].className = 'mejs-container ' + className;
\t\t\tthis.setPlayerSize(this.width, this.height);
\t\t\tthis.setControlsSize();
\t\t},
\t\tplay: function() {
\t\t\tthis.load();
\t\t\tthis.media.play();
\t\t},
\t\tpause: function() {
\t\t\ttry {
\t\t\t\tthis.media.pause();
\t\t\t} catch (e) {}
\t\t},
\t\tload: function() {
\t\t\tif (!this.isLoaded) {
\t\t\t\tthis.media.load();
\t\t\t}

\t\t\tthis.isLoaded = true;
\t\t},
\t\tsetMuted: function(muted) {
\t\t\tthis.media.setMuted(muted);
\t\t},
\t\tsetCurrentTime: function(time) {
\t\t\tthis.media.setCurrentTime(time);
\t\t},
\t\tgetCurrentTime: function() {
\t\t\treturn this.media.currentTime;
\t\t},
\t\tsetVolume: function(volume) {
\t\t\tthis.media.setVolume(volume);
\t\t},
\t\tgetVolume: function() {
\t\t\treturn this.media.volume;
\t\t},
\t\tsetSrc: function(src) {
\t\t\tvar
\t\t\t\tt = this;

\t\t\t// If using YouTube, its API is different to load a specific source
\t\t\tif (t.media.pluginType === 'youtube') {
\t\t\t\tvar videoId;

\t\t\t\tif (typeof src !== 'string') {
\t\t\t\t\tvar i, media;

\t\t\t\t\tfor (i=0; i<src.length; i++) {
\t\t\t\t\t\tmedia = src[i];
\t\t\t\t\t\tif (this.canPlayType(media.type)) {
\t\t\t\t\t\t\tsrc = media.src;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// youtu.be url from share button
\t\t\t\tif (src.lastIndexOf('youtu.be') !== -1) {
\t\t\t\t\tvideoId = src.substr(src.lastIndexOf('/') + 1);

\t\t\t\t\tif (videoId.indexOf('?') !== -1) {
\t\t\t\t\t\tvideoId = videoId.substr(0, videoId.indexOf('?'));
\t\t\t\t\t}

\t\t\t\t} else {
\t\t\t\t\t// https://www.youtube.com/watch?v=
\t\t\t\t\tvar videoIdMatch = src.match(/[?&]v=([^&#]+)|&|#|\$/);

\t\t\t\t\tif (videoIdMatch) {
\t\t\t\t\t\tvideoId = videoIdMatch[1];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (t.media.getAttribute('autoplay') !== null) {
\t\t\t\t\tt.media.pluginApi.loadVideoById(videoId);
\t\t\t\t} else {
\t\t\t\t\tt.media.pluginApi.cueVideoById(videoId);
\t\t\t\t}

\t\t\t}
\t\t\telse {
\t\t\t\tt.media.setSrc(src);
\t\t\t}
\t\t},
\t\tremove: function() {
\t\t\tvar t = this, featureIndex, feature;

\t\t\tt.container.prev('.mejs-offscreen').remove();

\t\t\t// invoke features cleanup
\t\t\tfor (featureIndex in t.options.features) {
\t\t\t\tfeature = t.options.features[featureIndex];
\t\t\t\tif (t['clean' + feature]) {
\t\t\t\t\ttry {
\t\t\t\t\t\tt['clean' + feature](t);
\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t// TODO: report control error
\t\t\t\t\t\t//throw e;
\t\t\t\t\t\t//
\t\t\t\t\t\t//
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// grab video and put it back in place
\t\t\tif (!t.isDynamic) {
\t\t\t\tt.\$media.prop('controls', true);
\t\t\t\t// detach events from the video
\t\t\t\t// TODO: detach event listeners better than this;
\t\t\t\t//\t\t also detach ONLY the events attached by this plugin!
\t\t\t\tt.\$node.clone().insertBefore(t.container).show();
\t\t\t\tt.\$node.remove();
\t\t\t} else {
\t\t\t\tt.\$node.insertBefore(t.container);
\t\t\t}

\t\t\tif (t.media.pluginType !== 'native') {
\t\t\t\tt.media.remove();
\t\t\t}

\t\t\t// Remove the player from the mejs.players object so that pauseOtherPlayers doesn't blow up when trying to pause a non existance flash api.
\t\t\tdelete mejs.players[t.id];

\t\t\tif (typeof t.container == 'object') {
\t\t\t\tt.container.remove();
\t\t\t}
\t\t\tt.globalUnbind();
\t\t\tdelete t.node.player;
\t\t},
\t\trebuildtracks: function(){
\t\t\tvar t = this;
\t\t\tt.findTracks();
\t\t\tt.buildtracks(t, t.controls, t.layers, t.media);
\t\t},
\t\tresetSize: function(){
\t\t\tvar t = this;
\t\t\t// webkit has trouble doing this without a delay
\t\t\tsetTimeout(function () {
\t\t\t\t//
\t\t\t\tt.setPlayerSize(t.width, t.height);
\t\t\t\tt.setControlsSize();
\t\t\t}, 50);
\t\t}
\t};

\t(function(){
\t\tvar rwindow = /^((after|before)print|(before)?unload|hashchange|message|o(ff|n)line|page(hide|show)|popstate|resize|storage)\\b/;

\t\tfunction splitEvents(events, id) {
\t\t\t// add player ID as an event namespace so it's easier to unbind them all later
\t\t\tvar ret = {d: [], w: []};
\t\t\t\$.each((events || '').split(' '), function(k, v){
\t\t\t\tvar eventname = v + '.' + id;
\t\t\t\tif (eventname.indexOf('.') === 0) {
\t\t\t\t\tret.d.push(eventname);
\t\t\t\t\tret.w.push(eventname);
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tret[rwindow.test(v) ? 'w' : 'd'].push(eventname);
\t\t\t\t}
\t\t\t});
\t\t\tret.d = ret.d.join(' ');
\t\t\tret.w = ret.w.join(' ');
\t\t\treturn ret;
\t\t}

\t\tmejs.MediaElementPlayer.prototype.globalBind = function(events, data, callback) {
\t\t\tvar t = this;
\t\t\tvar doc = t.node ? t.node.ownerDocument : document;

\t\t\tevents = splitEvents(events, t.id);
\t\t\tif (events.d) \$(doc).bind(events.d, data, callback);
\t\t\tif (events.w) \$(window).bind(events.w, data, callback);
\t\t};

\t\tmejs.MediaElementPlayer.prototype.globalUnbind = function(events, callback) {
\t\t\tvar t = this;
\t\t\tvar doc = t.node ? t.node.ownerDocument : document;

\t\t\tevents = splitEvents(events, t.id);
\t\t\tif (events.d) \$(doc).unbind(events.d, callback);
\t\t\tif (events.w) \$(window).unbind(events.w, callback);
\t\t};
\t})();

\t// turn into jQuery plugin
\tif (typeof \$ != 'undefined') {
\t\t\$.fn.mediaelementplayer = function (options) {
\t\t\tif (options === false) {
\t\t\t\tthis.each(function () {
\t\t\t\t\tvar player = \$(this).data('mediaelementplayer');
\t\t\t\t\tif (player) {
\t\t\t\t\t\tplayer.remove();
\t\t\t\t\t}
\t\t\t\t\t\$(this).removeData('mediaelementplayer');
\t\t\t\t});
\t\t\t}
\t\t\telse {
\t\t\t\tthis.each(function () {
\t\t\t\t\t\$(this).data('mediaelementplayer', new mejs.MediaElementPlayer(this, options));
\t\t\t\t});
\t\t\t}
\t\t\treturn this;
\t\t};


\t\t\$(document).ready(function() {
\t\t\t// auto enable using JSON attribute
\t\t\t\$('.mejs-player').mediaelementplayer();
\t\t});
\t}

\t// push out to window
\twindow.MediaElementPlayer = mejs.MediaElementPlayer;

})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tplayText: '',
\t\tpauseText: ''
\t});


\t// PLAY/pause BUTTON
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildplaypause: function(player, controls, layers, media) {
\t\t\tvar 
\t\t\t\tt = this,
\t\t\t\top = t.options,
\t\t\t\tplayTitle = op.playText ? op.playText : mejs.i18n.t('mejs.play'),
\t\t\t\tpauseTitle = op.pauseText ? op.pauseText : mejs.i18n.t('mejs.pause'),
\t\t\t\tplay =
\t\t\t\t\$('<div class=\"mejs-button mejs-playpause-button mejs-play\" >' +
\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + playTitle + '\" aria-label=\"' + pauseTitle + '\"></button>' +
\t\t\t\t'</div>')
\t\t\t\t.appendTo(controls)
\t\t\t\t.click(function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t
\t\t\t\t\tif (media.paused) {
\t\t\t\t\t\tmedia.play();
\t\t\t\t\t} else {
\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\treturn false;
\t\t\t\t}),
\t\t\t\tplay_btn = play.find('button');


\t\t\tfunction togglePlayPause(which) {
\t\t\t\tif ('play' === which) {
\t\t\t\t\tplay.removeClass('mejs-play').addClass('mejs-pause');
\t\t\t\t\tplay_btn.attr({
\t\t\t\t\t\t'title': pauseTitle,
\t\t\t\t\t\t'aria-label': pauseTitle
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\tplay.removeClass('mejs-pause').addClass('mejs-play');
\t\t\t\t\tplay_btn.attr({
\t\t\t\t\t\t'title': playTitle,
\t\t\t\t\t\t'aria-label': playTitle
\t\t\t\t\t});
\t\t\t\t}
\t\t\t};
\t\t\ttogglePlayPause('pse');


\t\t\tmedia.addEventListener('play',function() {
\t\t\t\ttogglePlayPause('play');
\t\t\t}, false);
\t\t\tmedia.addEventListener('playing',function() {
\t\t\t\ttogglePlayPause('play');
\t\t\t}, false);


\t\t\tmedia.addEventListener('pause',function() {
\t\t\t\ttogglePlayPause('pse');
\t\t\t}, false);
\t\t\tmedia.addEventListener('paused',function() {
\t\t\t\ttogglePlayPause('pse');
\t\t\t}, false);
\t\t}
\t});
\t
})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tstopText: 'Stop'
\t});

\t// STOP BUTTON
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildstop: function(player, controls, layers, media) {
\t\t\tvar t = this;

\t\t\t\$('<div class=\"mejs-button mejs-stop-button mejs-stop\">' +
\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + t.options.stopText + '\" aria-label=\"' + t.options.stopText + '\"></button>' +
\t\t\t\t'</div>')
\t\t\t\t.appendTo(controls)
\t\t\t\t.click(function() {
\t\t\t\t\tif (!media.paused) {
\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t}
\t\t\t\t\tif (media.currentTime > 0) {
\t\t\t\t\t\tmedia.setCurrentTime(0);
                        media.pause();
\t\t\t\t\t\tcontrols.find('.mejs-time-current').width('0px');
\t\t\t\t\t\tcontrols.find('.mejs-time-handle').css('left', '0px');
\t\t\t\t\t\tcontrols.find('.mejs-time-float-current').html( mejs.Utility.secondsToTimeCode(0, player.options));
\t\t\t\t\t\tcontrols.find('.mejs-currenttime').html( mejs.Utility.secondsToTimeCode(0, player.options));
\t\t\t\t\t\tlayers.find('.mejs-poster').show();
\t\t\t\t\t}
\t\t\t\t});
\t\t}
\t});
\t
})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\t// Enable tooltip that shows time in progress bar
\t\tenableProgressTooltip: true,
\t\tprogressHelpText: ''
\t});

\t// progress/loaded bar
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildprogress: function(player, controls, layers, media) {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tmouseIsDown = false,
\t\t\t\tmouseIsOver = false,
\t\t\t\tlastKeyPressTime = 0,
\t\t\t\tstartedPaused = false,
\t\t\t\tautoRewindInitial = player.options.autoRewind,
\t\t\t\tprogressTitle = t.options.progressHelpText ? t.options.progressHelpText : mejs.i18n.t('mejs.time-help-text'),
\t\t\t\ttooltip = player.options.enableProgressTooltip ? '<span class=\"mejs-time-float\">' +
\t\t\t\t\t'<span class=\"mejs-time-float-current\">00:00</span>' +
\t\t\t\t\t'<span class=\"mejs-time-float-corner\"></span>' +
\t\t\t\t'</span>' : \"\";

\t\t\t\$('<div class=\"mejs-time-rail\">' +
\t\t\t\t'<span  class=\"mejs-time-total mejs-time-slider\">' +
\t\t\t\t//'<span class=\"mejs-offscreen\">' + progressTitle + '</span>' +
\t\t\t\t\t'<span class=\"mejs-time-buffering\"></span>' +
\t\t\t\t\t'<span class=\"mejs-time-loaded\"></span>' +
\t\t\t\t\t'<span class=\"mejs-time-current\"></span>' +
\t\t\t\t\t'<span class=\"mejs-time-handle\"></span>' +
\t\t\t\t\t tooltip +
\t\t\t\t'</span>' +
\t\t\t'</div>')
\t\t\t\t.appendTo(controls);
\t\t\tcontrols.find('.mejs-time-buffering').hide();

\t\t\tt.total = controls.find('.mejs-time-total');
\t\t\tt.loaded  = controls.find('.mejs-time-loaded');
\t\t\tt.current  = controls.find('.mejs-time-current');
\t\t\tt.handle  = controls.find('.mejs-time-handle');
\t\t\tt.timefloat  = controls.find('.mejs-time-float');
\t\t\tt.timefloatcurrent  = controls.find('.mejs-time-float-current');
\t\t\tt.slider = controls.find('.mejs-time-slider');

\t\t\tvar handleMouseMove = function (e) {

\t\t\t\t\tvar offset = t.total.offset(),
\t\t\t\t\t\twidth = t.total.width(),
\t\t\t\t\t\tpercentage = 0,
\t\t\t\t\t\tnewTime = 0,
\t\t\t\t\t\tpos = 0,
\t\t\t\t\t\tx;

\t\t\t\t\t// mouse or touch position relative to the object
\t\t\t\t\tif (e.originalEvent && e.originalEvent.changedTouches) {
\t\t\t\t\t\tx = e.originalEvent.changedTouches[0].pageX;
\t\t\t\t\t} else if (e.changedTouches) { // for Zepto
\t\t\t\t\t\tx = e.changedTouches[0].pageX;
\t\t\t\t\t} else {
\t\t\t\t\t\tx = e.pageX;
\t\t\t\t\t}

\t\t\t\t\tif (media.duration) {
\t\t\t\t\t\tif (x < offset.left) {
\t\t\t\t\t\t\tx = offset.left;
\t\t\t\t\t\t} else if (x > width + offset.left) {
\t\t\t\t\t\t\tx = width + offset.left;
\t\t\t\t\t\t}

\t\t\t\t\t\tpos = x - offset.left;
\t\t\t\t\t\tpercentage = (pos / width);
\t\t\t\t\t\tnewTime = (percentage <= 0.02) ? 0 : percentage * media.duration;

\t\t\t\t\t\t// seek to where the mouse is
\t\t\t\t\t\tif (mouseIsDown && newTime !== media.currentTime) {
\t\t\t\t\t\t\tmedia.setCurrentTime(newTime);
\t\t\t\t\t\t}

\t\t\t\t\t\t// position floating time box
\t\t\t\t\t\tif (!mejs.MediaFeatures.hasTouch) {
\t\t\t\t\t\t\tt.timefloat.css('left', pos);
\t\t\t\t\t\t\tt.timefloatcurrent.html( mejs.Utility.secondsToTimeCode(newTime, player.options) );
\t\t\t\t\t\t\tt.timefloat.show();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t// Accessibility for slider
\t\t\t\tupdateSlider = function (e) {

\t\t\t\t\tvar seconds = media.currentTime,
\t\t\t\t\t\ttimeSliderText = mejs.i18n.t('mejs.time-slider'),
\t\t\t\t\t\ttime = mejs.Utility.secondsToTimeCode(seconds, player.options),
\t\t\t\t\t\tduration = media.duration;

\t\t\t\t\tt.slider.attr({
\t\t\t\t\t\t'aria-label': timeSliderText,
\t\t\t\t\t\t'aria-valuemin': 0,
\t\t\t\t\t\t'aria-valuemax': duration,
\t\t\t\t\t\t'aria-valuenow': seconds,
\t\t\t\t\t\t'aria-valuetext': time,
\t\t\t\t\t\t'role': 'slider',
\t\t\t\t\t\t'tabindex': 0
\t\t\t\t\t});

\t\t\t\t},
\t\t\t\trestartPlayer = function () {
\t\t\t\t\tvar now = new Date();
\t\t\t\t\tif (now - lastKeyPressTime >= 1000) {
\t\t\t\t\t\tmedia.play();
\t\t\t\t\t}
\t\t\t\t};

\t\t\tt.slider.bind('focus', function (e) {
\t\t\t\tplayer.options.autoRewind = false;
\t\t\t});

\t\t\tt.slider.bind('blur', function (e) {
\t\t\t\tplayer.options.autoRewind = autoRewindInitial;
\t\t\t});

\t\t\tt.slider.bind('keydown', function (e) {

\t\t\t\tif ((new Date() - lastKeyPressTime) >= 1000) {
\t\t\t\t\tstartedPaused = media.paused;
\t\t\t\t}

\t\t\t\tvar keyCode = e.keyCode,
\t\t\t\t\tduration = media.duration,
\t\t\t\t\tseekTime = media.currentTime,
\t\t\t\t\tseekForward  = player.options.defaultSeekForwardInterval(media),
\t\t\t\t\tseekBackward = player.options.defaultSeekBackwardInterval(media);

\t\t\t\tswitch (keyCode) {
\t\t\t\t\tcase 37: // left
\t\t\t\t\tcase 40: // Down
\t\t\t\t\t\tseekTime -= seekBackward;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 39: // Right
\t\t\t\t\tcase 38: // Up
\t\t\t\t\t\tseekTime += seekForward;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 36: // Home
\t\t\t\t\t\tseekTime = 0;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 35: // end
\t\t\t\t\t\tseekTime = duration;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 32: // space
\t\t\t\t\tcase 13: // enter
\t\t\t\t\t\tmedia.paused ? media.play() : media.pause();
\t\t\t\t\t\treturn;
\t\t\t\t\tdefault:
\t\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tseekTime = seekTime < 0 ? 0 : (seekTime >= duration ? duration : Math.floor(seekTime));
\t\t\t\tlastKeyPressTime = new Date();
\t\t\t\tif (!startedPaused) {
\t\t\t\t\tmedia.pause();
\t\t\t\t}

\t\t\t\tif (seekTime < media.duration && !startedPaused) {
\t\t\t\t\tsetTimeout(restartPlayer, 1100);
\t\t\t\t}

\t\t\t\tmedia.setCurrentTime(seekTime);

\t\t\t\te.preventDefault();
\t\t\t\te.stopPropagation();
\t\t\t\treturn false;
\t\t\t});


\t\t\t// handle clicks
\t\t\t//controls.find('.mejs-time-rail').delegate('span', 'click', handleMouseMove);
\t\t\tt.total
\t\t\t\t.bind('mousedown touchstart', function (e) {
\t\t\t\t\t// only handle left clicks or touch
\t\t\t\t\tif (e.which === 1 || e.which === 0) {
\t\t\t\t\t\tmouseIsDown = true;
\t\t\t\t\t\thandleMouseMove(e);
\t\t\t\t\t\tt.globalBind('mousemove.dur touchmove.dur', function(e) {
\t\t\t\t\t\t\thandleMouseMove(e);
\t\t\t\t\t\t});
\t\t\t\t\t\tt.globalBind('mouseup.dur touchend.dur', function (e) {
\t\t\t\t\t\t\tmouseIsDown = false;
\t\t\t\t\t\t\tif (typeof t.timefloat !== 'undefined') {
\t\t\t\t\t\t\t\tt.timefloat.hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tt.globalUnbind('.dur');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.bind('mouseenter', function(e) {
\t\t\t\t\tmouseIsOver = true;
\t\t\t\t\tt.globalBind('mousemove.dur', function(e) {
\t\t\t\t\t\thandleMouseMove(e);
\t\t\t\t\t});
\t\t\t\t\tif (typeof t.timefloat !== 'undefined' && !mejs.MediaFeatures.hasTouch) {
\t\t\t\t\t\tt.timefloat.show();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.bind('mouseleave',function(e) {
\t\t\t\t\tmouseIsOver = false;
\t\t\t\t\tif (!mouseIsDown) {
\t\t\t\t\t\tt.globalUnbind('.dur');
\t\t\t\t\t\tif (typeof t.timefloat !== 'undefined') {
\t\t\t\t\t\t\tt.timefloat.hide();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t// loading
\t\t\tmedia.addEventListener('progress', function (e) {
\t\t\t\tplayer.setProgressRail(e);
\t\t\t\tplayer.setCurrentRail(e);
\t\t\t}, false);

\t\t\t// current time
\t\t\tmedia.addEventListener('timeupdate', function(e) {
\t\t\t\tplayer.setProgressRail(e);
\t\t\t\tplayer.setCurrentRail(e);
\t\t\t\tupdateSlider(e);
\t\t\t}, false);

\t\t\tt.container.on('controlsresize', function(e) {
\t\t\t\tplayer.setProgressRail(e);
\t\t\t\tplayer.setCurrentRail(e);
\t\t\t});
\t\t},
\t\tsetProgressRail: function(e) {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ttarget = (e !== undefined) ? e.target : t.media,
\t\t\t\tpercent = null;

\t\t\t// newest HTML5 spec has buffered array (FF4, Webkit)
\t\t\tif (target && target.buffered && target.buffered.length > 0 && target.buffered.end && target.duration) {
\t\t\t\t// account for a real array with multiple values - always read the end of the last buffer
\t\t\t\tpercent = target.buffered.end(target.buffered.length - 1) / target.duration;
\t\t\t} 
\t\t\t// Some browsers (e.g., FF3.6 and Safari 5) cannot calculate target.bufferered.end()
\t\t\t// to be anything other than 0. If the byte count is available we use this instead.
\t\t\t// Browsers that support the else if do not seem to have the bufferedBytes value and
\t\t\t// should skip to there. Tested in Safari 5, Webkit head, FF3.6, Chrome 6, IE 7/8.
\t\t\telse if (target && target.bytesTotal !== undefined && target.bytesTotal > 0 && target.bufferedBytes !== undefined) {
\t\t\t\tpercent = target.bufferedBytes / target.bytesTotal;
\t\t\t}
\t\t\t// Firefox 3 with an Ogg file seems to go this way
\t\t\telse if (e && e.lengthComputable && e.total !== 0) {
\t\t\t\tpercent = e.loaded / e.total;
\t\t\t}

\t\t\t// finally update the progress bar
\t\t\tif (percent !== null) {
\t\t\t\tpercent = Math.min(1, Math.max(0, percent));
\t\t\t\t// update loaded bar
\t\t\t\tif (t.loaded && t.total) {
\t\t\t\t\tt.loaded.width(t.total.width() * percent);
\t\t\t\t}
\t\t\t}
\t\t},
\t\tsetCurrentRail: function() {

\t\t\tvar t = this;
\t\t
\t\t\tif (t.media.currentTime !== undefined && t.media.duration) {

\t\t\t\t// update bar and handle
\t\t\t\tif (t.total && t.handle) {
\t\t\t\t\tvar 
\t\t\t\t\t\tnewWidth = Math.round(t.total.width() * t.media.currentTime / t.media.duration),
\t\t\t\t\t\thandlePos = newWidth - Math.round(t.handle.outerWidth(true) / 2);

\t\t\t\t\tt.current.width(newWidth);
\t\t\t\t\tt.handle.css('left', handlePos);
\t\t\t\t}
\t\t\t}

\t\t}
\t});
})(mejs.\$);

(function(\$) {
\t
\t// options
\t\$.extend(mejs.MepDefaults, {
\t\tduration: -1,
\t\ttimeAndDurationSeparator: '<span> | </span>'
\t});


\t// current and duration 00:00 / 00:00
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildcurrent: function(player, controls, layers, media) {
\t\t\tvar t = this;
\t\t\t
\t\t\t\$('<div class=\"mejs-time\" role=\"timer\" aria-live=\"off\">' +
\t\t\t\t\t'<span class=\"mejs-currenttime\">' + 
\t\t\t\t\t\tmejs.Utility.secondsToTimeCode(0, player.options) +
                    '</span>'+
\t\t\t\t'</div>')
\t\t\t.appendTo(controls);
\t\t\t
\t\t\tt.currenttime = t.controls.find('.mejs-currenttime');

\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\tif (t.controlsAreVisible) {
\t\t\t\t\tplayer.updateCurrent();
\t\t\t\t}

\t\t\t}, false);
\t\t},


\t\tbuildduration: function(player, controls, layers, media) {
\t\t\tvar t = this;
\t\t\t
\t\t\tif (controls.children().last().find('.mejs-currenttime').length > 0) {
\t\t\t\t\$(t.options.timeAndDurationSeparator +
\t\t\t\t\t'<span class=\"mejs-duration\">' + 
\t\t\t\t\t\tmejs.Utility.secondsToTimeCode(t.options.duration, t.options) +
\t\t\t\t\t'</span>')
\t\t\t\t\t.appendTo(controls.find('.mejs-time'));
\t\t\t} else {

\t\t\t\t// add class to current time
\t\t\t\tcontrols.find('.mejs-currenttime').parent().addClass('mejs-currenttime-container');
\t\t\t\t
\t\t\t\t\$('<div class=\"mejs-time mejs-duration-container\">'+
\t\t\t\t\t'<span class=\"mejs-duration\">' + 
\t\t\t\t\t\tmejs.Utility.secondsToTimeCode(t.options.duration, t.options) +
\t\t\t\t\t'</span>' +
\t\t\t\t'</div>')
\t\t\t\t.appendTo(controls);
\t\t\t}
\t\t\t
\t\t\tt.durationD = t.controls.find('.mejs-duration');

\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\tif (t.controlsAreVisible) {
\t\t\t\t\tplayer.updateDuration();
\t\t\t\t}
\t\t\t}, false);
\t\t},
\t\t
\t\tupdateCurrent:  function() {
\t\t\tvar t = this;
\t\t\t
\t\t\tvar currentTime = t.media.currentTime;
\t\t\t
\t\t\tif (isNaN(currentTime)) {
\t\t\t\tcurrentTime = 0;
\t\t\t}

\t\t\tif (t.currenttime) {
\t\t\t\tt.currenttime.html(mejs.Utility.secondsToTimeCode(currentTime, t.options));
\t\t\t}
\t\t},
\t\t
\t\tupdateDuration: function() {
\t\t\tvar t = this;
\t\t\t
\t\t\tvar duration = t.media.duration;
\t\t\tif (t.options.duration > 0) {
\t\t\t\tduration = t.options.duration;
\t\t\t}
\t\t\t
\t\t\tif (isNaN(duration)) {
\t\t\t\tduration = 0;
\t\t\t}

\t\t\t//Toggle the long video class if the video is longer than an hour.
\t\t\tt.container.toggleClass(\"mejs-long-video\", duration > 3600);
\t\t\t
\t\t\tif (t.durationD && duration > 0) {
\t\t\t\tt.durationD.html(mejs.Utility.secondsToTimeCode(duration, t.options));
\t\t\t}\t\t
\t\t}
\t});

})(mejs.\$);

(function (\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tmuteText: mejs.i18n.t('mejs.mute-toggle'),
\t\tallyVolumeControlText: mejs.i18n.t('mejs.volume-help-text'),
\t\thideVolumeOnTouchDevices: true,

\t\taudioVolume: 'horizontal',
\t\tvideoVolume: 'vertical'
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildvolume: function (player, controls, layers, media) {

\t\t\t// Android and iOS don't support volume controls
\t\t\tif ((mejs.MediaFeatures.isAndroid || mejs.MediaFeatures.isiOS) && this.options.hideVolumeOnTouchDevices)
\t\t\t\treturn;

\t\t\tvar t = this,
\t\t\t\tmode = (t.isVideo) ? t.options.videoVolume : t.options.audioVolume,
\t\t\t\tmute = (mode == 'horizontal') ?

\t\t\t\t\t// horizontal version
\t\t\t\t\t\$('<div class=\"mejs-button mejs-volume-button mejs-mute\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id +
\t\t\t\t\t\t'\" title=\"' + t.options.muteText +
\t\t\t\t\t\t'\" aria-label=\"' + t.options.muteText +
\t\t\t\t\t\t'\"></button>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'<a href=\"javascript:void(0);\" class=\"mejs-horizontal-volume-slider\">' + // outer background
\t\t\t\t\t\t'<span class=\"mejs-offscreen\">' + t.options.allyVolumeControlText + '</span>' +
\t\t\t\t\t\t'<div class=\"mejs-horizontal-volume-total\"></div>' + // line background
\t\t\t\t\t\t'<div class=\"mejs-horizontal-volume-current\"></div>' + // current volume
\t\t\t\t\t\t'<div class=\"mejs-horizontal-volume-handle\"></div>' + // handle
\t\t\t\t\t\t'</a>'
\t\t\t\t\t)
\t\t\t\t\t.appendTo(controls) :

\t\t\t\t\t// vertical version
\t\t\t\t\t\$('<div class=\"mejs-button mejs-volume-button mejs-mute\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id +
\t\t\t\t\t\t'\" title=\"' + t.options.muteText +
\t\t\t\t\t\t'\" aria-label=\"' + t.options.muteText +
\t\t\t\t\t\t'\"></button>' +
\t\t\t\t\t\t'<a href=\"javascript:void(0);\" class=\"mejs-volume-slider\">' + // outer background
\t\t\t\t\t\t'<span class=\"mejs-offscreen\">' + t.options.allyVolumeControlText + '</span>' +
\t\t\t\t\t\t'<div class=\"mejs-volume-total\"></div>' + // line background
\t\t\t\t\t\t'<div class=\"mejs-volume-current\"></div>' + // current volume
\t\t\t\t\t\t'<div class=\"mejs-volume-handle\"></div>' + // handle
\t\t\t\t\t\t'</a>' +
\t\t\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(controls),
\t\t\t\tvolumeSlider = t.container.find('.mejs-volume-slider, .mejs-horizontal-volume-slider'),
\t\t\t\tvolumeTotal = t.container.find('.mejs-volume-total, .mejs-horizontal-volume-total'),
\t\t\t\tvolumeCurrent = t.container.find('.mejs-volume-current, .mejs-horizontal-volume-current'),
\t\t\t\tvolumeHandle = t.container.find('.mejs-volume-handle, .mejs-horizontal-volume-handle'),

\t\t\t\tpositionVolumeHandle = function (volume, secondTry) {

\t\t\t\t\tif (!volumeSlider.is(':visible') && typeof secondTry == 'undefined') {
\t\t\t\t\t\tvolumeSlider.show();
\t\t\t\t\t\tpositionVolumeHandle(volume, true);
\t\t\t\t\t\tvolumeSlider.hide();
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t// correct to 0-1
\t\t\t\t\tvolume = Math.max(0, volume);
\t\t\t\t\tvolume = Math.min(volume, 1);

\t\t\t\t\t// adjust mute button style
\t\t\t\t\tif (volume === 0) {
\t\t\t\t\t\tmute.removeClass('mejs-mute').addClass('mejs-unmute');
\t\t\t\t\t\tmute.children('button').attr('title', mejs.i18n.t('mejs.unmute')).attr('aria-label', mejs.i18n.t('mejs.unmute'));
\t\t\t\t\t} else {
\t\t\t\t\t\tmute.removeClass('mejs-unmute').addClass('mejs-mute');
\t\t\t\t\t\tmute.children('button').attr('title', mejs.i18n.t('mejs.mute')).attr('aria-label', mejs.i18n.t('mejs.mute'));
\t\t\t\t\t}

\t\t\t\t\t// top/left of full size volume slider background
\t\t\t\t\tvar totalPosition = volumeTotal.position();
\t\t\t\t\t// position slider
\t\t\t\t\tif (mode == 'vertical') {
\t\t\t\t\t\tvar
\t\t\t\t\t\t\t// height of the full size volume slider background
\t\t\t\t\t\t\ttotalHeight = volumeTotal.height(),

\t\t\t\t\t\t\t// the new top position based on the current volume
\t\t\t\t\t\t\t// 70% volume on 100px height == top:30px
\t\t\t\t\t\t\tnewTop = totalHeight - (totalHeight * volume);

\t\t\t\t\t\t// handle
\t\t\t\t\t\tvolumeHandle.css('top', Math.round(totalPosition.top + newTop - (volumeHandle.height() / 2)));

\t\t\t\t\t\t// show the current visibility
\t\t\t\t\t\tvolumeCurrent.height(totalHeight - newTop);
\t\t\t\t\t\tvolumeCurrent.css('top', totalPosition.top + newTop);
\t\t\t\t\t} else {
\t\t\t\t\t\tvar
\t\t\t\t\t\t\t// height of the full size volume slider background
\t\t\t\t\t\t\ttotalWidth = volumeTotal.width(),

\t\t\t\t\t\t\t// the new left position based on the current volume
\t\t\t\t\t\t\tnewLeft = totalWidth * volume;

\t\t\t\t\t\t// handle
\t\t\t\t\t\tvolumeHandle.css('left', Math.round(totalPosition.left + newLeft - (volumeHandle.width() / 2)));

\t\t\t\t\t\t// rezize the current part of the volume bar
\t\t\t\t\t\tvolumeCurrent.width(Math.round(newLeft));
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\thandleVolumeMove = function (e) {

\t\t\t\t\tvar volume = null,
\t\t\t\t\t\ttotalOffset = volumeTotal.offset();

\t\t\t\t\t// calculate the new volume based on the moust position
\t\t\t\t\tif (mode === 'vertical') {

\t\t\t\t\t\tvar
\t\t\t\t\t\t\trailHeight = volumeTotal.height(),
\t\t\t\t\t\t\tnewY = e.pageY - totalOffset.top;

\t\t\t\t\t\tvolume = (railHeight - newY) / railHeight;

\t\t\t\t\t\t// the controls just hide themselves (usually when mouse moves too far up)
\t\t\t\t\t\tif (totalOffset.top === 0 || totalOffset.left === 0) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t} else {
\t\t\t\t\t\tvar
\t\t\t\t\t\t\trailWidth = volumeTotal.width(),
\t\t\t\t\t\t\tnewX = e.pageX - totalOffset.left;

\t\t\t\t\t\tvolume = newX / railWidth;
\t\t\t\t\t}

\t\t\t\t\t// ensure the volume isn't outside 0-1
\t\t\t\t\tvolume = Math.max(0, volume);
\t\t\t\t\tvolume = Math.min(volume, 1);

\t\t\t\t\t// position the slider and handle
\t\t\t\t\tpositionVolumeHandle(volume);

\t\t\t\t\t// set the media object (this will trigger the volumechanged event)
\t\t\t\t\tif (volume === 0) {
\t\t\t\t\t\tmedia.setMuted(true);
\t\t\t\t\t} else {
\t\t\t\t\t\tmedia.setMuted(false);
\t\t\t\t\t}
\t\t\t\t\tmedia.setVolume(volume);
\t\t\t\t},
\t\t\t\tmouseIsDown = false,
\t\t\t\tmouseIsOver = false;

\t\t\t// SLIDER

\t\t\tmute
\t\t\t.hover(function () {
\t\t\t\tvolumeSlider.show();
\t\t\t\tmouseIsOver = true;
\t\t\t}, function () {
\t\t\t\tmouseIsOver = false;

\t\t\t\tif (!mouseIsDown && mode == 'vertical') {
\t\t\t\t\tvolumeSlider.hide();
\t\t\t\t}
\t\t\t});

\t\t\tvar updateVolumeSlider = function (e) {

\t\t\t\tvar volume = Math.floor(media.volume * 100);

\t\t\t\tvolumeSlider.attr({
\t\t\t\t\t'aria-label': mejs.i18n.t('mejs.volume-slider'),
\t\t\t\t\t'aria-valuemin': 0,
\t\t\t\t\t'aria-valuemax': 100,
\t\t\t\t\t'aria-valuenow': volume,
\t\t\t\t\t'aria-valuetext': volume + '%',
\t\t\t\t\t'role': 'slider',
\t\t\t\t\t'tabindex': 0
\t\t\t\t});

\t\t\t};

\t\t\tvolumeSlider
\t\t\t.bind('mouseover', function () {
\t\t\t\tmouseIsOver = true;
\t\t\t})
\t\t\t.bind('mousedown', function (e) {
\t\t\t\thandleVolumeMove(e);
\t\t\t\tt.globalBind('mousemove.vol', function (e) {
\t\t\t\t\thandleVolumeMove(e);
\t\t\t\t});
\t\t\t\tt.globalBind('mouseup.vol', function () {
\t\t\t\t\tmouseIsDown = false;
\t\t\t\t\tt.globalUnbind('.vol');

\t\t\t\t\tif (!mouseIsOver && mode == 'vertical') {
\t\t\t\t\t\tvolumeSlider.hide();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tmouseIsDown = true;

\t\t\t\treturn false;
\t\t\t})
\t\t\t.bind('keydown', function (e) {
\t\t\t\tvar keyCode = e.keyCode;
\t\t\t\tvar volume = media.volume;
\t\t\t\tswitch (keyCode) {
\t\t\t\t\tcase 38: // Up
\t\t\t\t\t\tvolume = Math.min(volume + 0.1, 1);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 40: // Down
\t\t\t\t\t\tvolume = Math.max(0, volume - 0.1);
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tmouseIsDown = false;
\t\t\t\tpositionVolumeHandle(volume);
\t\t\t\tmedia.setVolume(volume);
\t\t\t\treturn false;
\t\t\t});

\t\t\t// MUTE button
\t\t\tmute.find('button').click(function () {
\t\t\t\tmedia.setMuted(!media.muted);
\t\t\t});

\t\t\t//Keyboard input
\t\t\tmute.find('button').bind('focus', function () {
\t\t\t\tvolumeSlider.show();
\t\t\t});

\t\t\t// listen for volume change events from other sources
\t\t\tmedia.addEventListener('volumechange', function (e) {
\t\t\t\tif (!mouseIsDown) {
\t\t\t\t\tif (media.muted) {
\t\t\t\t\t\tpositionVolumeHandle(0);
\t\t\t\t\t\tmute.removeClass('mejs-mute').addClass('mejs-unmute');
\t\t\t\t\t} else {
\t\t\t\t\t\tpositionVolumeHandle(media.volume);
\t\t\t\t\t\tmute.removeClass('mejs-unmute').addClass('mejs-mute');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tupdateVolumeSlider(e);
\t\t\t}, false);

\t\t\t// mutes the media and sets the volume icon muted if the initial volume is set to 0
\t\t\tif (player.options.startVolume === 0) {
\t\t\t\tmedia.setMuted(true);
\t\t\t}

\t\t\t// shim gets the startvolume as a parameter, but we have to set it on the native <video> and <audio> elements
\t\t\tif (media.pluginType === 'native') {
\t\t\t\tmedia.setVolume(player.options.startVolume);
\t\t\t}

\t\t\tt.container.on('controlsresize', function () {
\t\t\t\tif (media.muted) {
\t\t\t\t\tpositionVolumeHandle(0);
\t\t\t\t\tmute.removeClass('mejs-mute').addClass('mejs-unmute');
\t\t\t\t} else {
\t\t\t\t\tpositionVolumeHandle(media.volume);
\t\t\t\t\tmute.removeClass('mejs-unmute').addClass('mejs-mute');
\t\t\t\t}
\t\t\t});
\t\t}
\t});

})(mejs.\$);

(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tusePluginFullScreen: true,
\t\tnewWindowCallback: function() { return '';},
\t\tfullscreenText: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {

\t\tisFullScreen: false,

\t\tisNativeFullScreen: false,

\t\tisInIframe: false,
\t\t\t\t\t\t\t
\t\t// Possible modes
\t\t// (1) 'native-native' \tHTML5 video  + browser fullscreen (IE10+, etc.)
\t\t// (2) 'plugin-native' \tplugin video + browser fullscreen (fails in some versions of Firefox)
\t\t// (3) 'fullwindow' \tFull window (retains all UI)
\t\t// usePluginFullScreen = true
\t\t// (4) 'plugin-click' \tFlash 1 - click through with pointer events
\t\t// (5) 'plugin-hover' \tFlash 2 - hover popup in flash (IE6-8)\t\t
\t\tfullscreenMode: '',

\t\tbuildfullscreen: function(player, controls, layers, media) {

\t\t\tif (!player.isVideo)
\t\t\t\treturn;
\t\t\t\t
\t\t\tplayer.isInIframe = (window.location != window.parent.location);\t
\t\t
\t\t\t// detect on start
\t\t\tmedia.addEventListener('loadstart', function() { player.detectFullscreenMode(); });
\t\t\t\t
\t\t\t// build button
\t\t\tvar t = this,
\t\t\t\thideTimeout = null,
\t\t\t\tfullscreenTitle = t.options.fullscreenText ? t.options.fullscreenText : mejs.i18n.t('mejs.fullscreen'),
\t\t\t\tfullscreenBtn =
\t\t\t\t\t\$('<div class=\"mejs-button mejs-fullscreen-button\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + fullscreenTitle + '\" aria-label=\"' + fullscreenTitle + '\"></button>' +
\t\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(controls)
\t\t\t\t\t.on('click', function() {
\t\t\t\t\t\t
\t\t\t\t\t\t// toggle fullscreen
\t\t\t\t\t\tvar isFullScreen = (mejs.MediaFeatures.hasTrueNativeFullScreen && mejs.MediaFeatures.isFullScreen()) || player.isFullScreen;
\t
\t\t\t\t\t\tif (isFullScreen) {
\t\t\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tplayer.enterFullScreen();
\t\t\t\t\t\t}
\t\t\t\t\t})\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t.on('mouseover', function() {
\t\t\t\t\t\t
\t\t\t\t\t\t// very old browsers with a plugin
\t\t\t\t\t\tif (t.fullscreenMode == 'plugin-hover') {\t\t\t\t\t\t
\t\t\t\t\t\t\tif (hideTimeout !== null) {
\t\t\t\t\t\t\t\tclearTimeout(hideTimeout);
\t\t\t\t\t\t\t\tdelete hideTimeout;
\t\t\t\t\t\t\t}
\t
\t\t\t\t\t\t\tvar buttonPos = fullscreenBtn.offset(),
\t\t\t\t\t\t\t\tcontainerPos = player.container.offset();
\t
\t\t\t\t\t\t\tmedia.positionFullscreenButton(buttonPos.left - containerPos.left, buttonPos.top - containerPos.top, true);
\t\t\t\t\t\t}

\t\t\t\t\t})
\t\t\t\t\t.on('mouseout', function() {

\t\t\t\t\t\tif (t.fullscreenMode == 'plugin-hover') {\t\t\t\t\t\t
\t\t\t\t\t\t\tif (hideTimeout !== null) {
\t\t\t\t\t\t\t\tclearTimeout(hideTimeout);
\t\t\t\t\t\t\t\tdelete hideTimeout;
\t\t\t\t\t\t\t}
\t
\t\t\t\t\t\t\thideTimeout = setTimeout(function() {
\t\t\t\t\t\t\t\tmedia.hideFullscreenButton();
\t\t\t\t\t\t\t}, 1500);
\t\t\t\t\t\t}

\t\t\t\t\t});

\t\t\t\t\t

\t\t\tplayer.fullscreenBtn = fullscreenBtn;

\t\t\tt.globalBind('keydown',function (e) {
\t\t\t\tif (e.keyCode == 27 && ((mejs.MediaFeatures.hasTrueNativeFullScreen && mejs.MediaFeatures.isFullScreen()) || t.isFullScreen)) {
\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\tt.normalHeight = 0;
\t\t\tt.normalWidth = 0;\t\t\t\t\t
\t\t\t\t\t
\t\t\t// setup native fullscreen event
\t\t\tif (mejs.MediaFeatures.hasTrueNativeFullScreen) {

\t\t\t\t// chrome doesn't alays fire this in an iframe
\t\t\t\tvar fullscreenChanged = function(e) {
\t\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\t\tif (mejs.MediaFeatures.isFullScreen()) {
\t\t\t\t\t\t\tplayer.isNativeFullScreen = true;
\t\t\t\t\t\t\t// reset the controls once we are fully in full screen
\t\t\t\t\t\t\tplayer.setControlsSize();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tplayer.isNativeFullScreen = false;
\t\t\t\t\t\t\t// when a user presses ESC
\t\t\t\t\t\t\t// make sure to put the player back into place
\t\t\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tplayer.globalBind(mejs.MediaFeatures.fullScreenEventName, fullscreenChanged);
\t\t\t}

\t\t},
\t\t
\t\tdetectFullscreenMode: function() {
\t\t\t
\t\t\tvar t = this,
\t\t\t\tmode = '',
\t\t\t\tfeatures = mejs.MediaFeatures;
\t\t\t
\t\t\tif (features.hasTrueNativeFullScreen && t.media.pluginType === 'native') {
\t\t\t\tmode = 'native-native';
\t\t\t} else if (features.hasTrueNativeFullScreen && t.media.pluginType !== 'native' && !features.hasFirefoxPluginMovingProblem) {
\t\t\t\tmode = 'plugin-native';\t\t\t\t\t
\t\t\t} else if (t.usePluginFullScreen) { 
\t\t\t\tif (mejs.MediaFeatures.supportsPointerEvents) {
\t\t\t\t\tmode = 'plugin-click';
\t\t\t\t\t// this needs some special setup
\t\t\t\t\tt.createPluginClickThrough();\t\t\t\t
\t\t\t\t} else { 
\t\t\t\t\tmode = 'plugin-hover';
\t\t\t\t}
\t\t\t\t
\t\t\t} else {
\t\t\t\tmode = 'fullwindow';
\t\t\t}
\t\t\t
\t\t\t
\t\t\tt.fullscreenMode = mode;\t\t
\t\t\treturn mode;
\t\t},
\t\t
\t\tisPluginClickThroughCreated: false,
\t\t
\t\tcreatePluginClickThrough: function() {
\t\t\t\t
\t\t\tvar t = this;
\t\t\t
\t\t\t// don't build twice
\t\t\tif (t.isPluginClickThroughCreated) {
\t\t\t\treturn;
\t\t\t}\t

\t\t\t// allows clicking through the fullscreen button and controls down directly to Flash

\t\t\t/*
\t\t\t When a user puts his mouse over the fullscreen button, we disable the controls so that mouse events can go down to flash (pointer-events)
\t\t\t We then put a divs over the video and on either side of the fullscreen button
\t\t\t to capture mouse movement and restore the controls once the mouse moves outside of the fullscreen button
\t\t\t*/

\t\t\tvar fullscreenIsDisabled = false,
\t\t\t\trestoreControls = function() {
\t\t\t\t\tif (fullscreenIsDisabled) {
\t\t\t\t\t\t// hide the hovers
\t\t\t\t\t\tfor (var i in hoverDivs) {
\t\t\t\t\t\t\thoverDivs[i].hide();
\t\t\t\t\t\t}

\t\t\t\t\t\t// restore the control bar
\t\t\t\t\t\tt.fullscreenBtn.css('pointer-events', '');
\t\t\t\t\t\tt.controls.css('pointer-events', '');

\t\t\t\t\t\t// prevent clicks from pausing video
\t\t\t\t\t\tt.media.removeEventListener('click', t.clickToPlayPauseCallback);

\t\t\t\t\t\t// store for later
\t\t\t\t\t\tfullscreenIsDisabled = false;
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\thoverDivs = {},
\t\t\t\thoverDivNames = ['top', 'left', 'right', 'bottom'],
\t\t\t\ti, len,
\t\t\t\tpositionHoverDivs = function() {
\t\t\t\t\tvar fullScreenBtnOffsetLeft = fullscreenBtn.offset().left - t.container.offset().left,
\t\t\t\t\t\tfullScreenBtnOffsetTop = fullscreenBtn.offset().top - t.container.offset().top,
\t\t\t\t\t\tfullScreenBtnWidth = fullscreenBtn.outerWidth(true),
\t\t\t\t\t\tfullScreenBtnHeight = fullscreenBtn.outerHeight(true),
\t\t\t\t\t\tcontainerWidth = t.container.width(),
\t\t\t\t\t\tcontainerHeight = t.container.height();

\t\t\t\t\tfor (i in hoverDivs) {
\t\t\t\t\t\thoverDivs[i].css({position: 'absolute', top: 0, left: 0}); //, backgroundColor: '#f00'});
\t\t\t\t\t}

\t\t\t\t\t// over video, but not controls
\t\t\t\t\thoverDivs['top']
\t\t\t\t\t\t.width( containerWidth )
\t\t\t\t\t\t.height( fullScreenBtnOffsetTop );

\t\t\t\t\t// over controls, but not the fullscreen button
\t\t\t\t\thoverDivs['left']
\t\t\t\t\t\t.width( fullScreenBtnOffsetLeft )
\t\t\t\t\t\t.height( fullScreenBtnHeight )
\t\t\t\t\t\t.css({top: fullScreenBtnOffsetTop});

\t\t\t\t\t// after the fullscreen button
\t\t\t\t\thoverDivs['right']
\t\t\t\t\t\t.width( containerWidth - fullScreenBtnOffsetLeft - fullScreenBtnWidth )
\t\t\t\t\t\t.height( fullScreenBtnHeight )
\t\t\t\t\t\t.css({top: fullScreenBtnOffsetTop,
\t\t\t\t\t\t\t left: fullScreenBtnOffsetLeft + fullScreenBtnWidth});

\t\t\t\t\t// under the fullscreen button
\t\t\t\t\thoverDivs['bottom']
\t\t\t\t\t\t.width( containerWidth )
\t\t\t\t\t\t.height( containerHeight - fullScreenBtnHeight - fullScreenBtnOffsetTop )
\t\t\t\t\t\t.css({top: fullScreenBtnOffsetTop + fullScreenBtnHeight});
\t\t\t\t};

\t\t\tt.globalBind('resize', function() {
\t\t\t\tpositionHoverDivs();
\t\t\t});

\t\t\tfor (i = 0, len = hoverDivNames.length; i < len; i++) {
\t\t\t\thoverDivs[hoverDivNames[i]] = \$('<div class=\"mejs-fullscreen-hover\" />').appendTo(t.container).mouseover(restoreControls).hide();
\t\t\t}

\t\t\t// on hover, kill the fullscreen button's HTML handling, allowing clicks down to Flash
\t\t\tfullscreenBtn.on('mouseover',function() {

\t\t\t\tif (!t.isFullScreen) {

\t\t\t\t\tvar buttonPos = fullscreenBtn.offset(),
\t\t\t\t\t\tcontainerPos = player.container.offset();

\t\t\t\t\t// move the button in Flash into place
\t\t\t\t\tmedia.positionFullscreenButton(buttonPos.left - containerPos.left, buttonPos.top - containerPos.top, false);

\t\t\t\t\t// allows click through
\t\t\t\t\tt.fullscreenBtn.css('pointer-events', 'none');
\t\t\t\t\tt.controls.css('pointer-events', 'none');

\t\t\t\t\t// restore click-to-play
\t\t\t\t\tt.media.addEventListener('click', t.clickToPlayPauseCallback);

\t\t\t\t\t// show the divs that will restore things
\t\t\t\t\tfor (i in hoverDivs) {
\t\t\t\t\t\thoverDivs[i].show();
\t\t\t\t\t}

\t\t\t\t\tpositionHoverDivs();

\t\t\t\t\tfullscreenIsDisabled = true;
\t\t\t\t}

\t\t\t});

\t\t\t// restore controls anytime the user enters or leaves fullscreen
\t\t\tmedia.addEventListener('fullscreenchange', function(e) {
\t\t\t\tt.isFullScreen = !t.isFullScreen;
\t\t\t\t// don't allow plugin click to pause video - messes with
\t\t\t\t// plugin's controls
\t\t\t\tif (t.isFullScreen) {
\t\t\t\t\tt.media.removeEventListener('click', t.clickToPlayPauseCallback);
\t\t\t\t} else {
\t\t\t\t\tt.media.addEventListener('click', t.clickToPlayPauseCallback);
\t\t\t\t}
\t\t\t\trestoreControls();
\t\t\t});


\t\t\t// the mouseout event doesn't work on the fullscren button, because we already killed the pointer-events
\t\t\t// so we use the document.mousemove event to restore controls when the mouse moves outside the fullscreen button

\t\t\tt.globalBind('mousemove', function(e) {

\t\t\t\t// if the mouse is anywhere but the fullsceen button, then restore it all
\t\t\t\tif (fullscreenIsDisabled) {

\t\t\t\t\tvar fullscreenBtnPos = fullscreenBtn.offset();


\t\t\t\t\tif (e.pageY < fullscreenBtnPos.top || e.pageY > fullscreenBtnPos.top + fullscreenBtn.outerHeight(true) ||
\t\t\t\t\t\te.pageX < fullscreenBtnPos.left || e.pageX > fullscreenBtnPos.left + fullscreenBtn.outerWidth(true)
\t\t\t\t\t\t) {

\t\t\t\t\t\tfullscreenBtn.css('pointer-events', '');
\t\t\t\t\t\tt.controls.css('pointer-events', '');

\t\t\t\t\t\tfullscreenIsDisabled = false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});


\t\t\tt.isPluginClickThroughCreated = true;
\t\t},\t\t

\t\tcleanfullscreen: function(player) {
\t\t\tplayer.exitFullScreen();
\t\t},

        containerSizeTimeout: null,

\t\tenterFullScreen: function() {

\t\t\tvar t = this;

\t\t\tif (mejs.MediaFeatures.isiOS && mejs.MediaFeatures.hasiOSFullScreen && typeof t.media.webkitEnterFullscreen === 'function') {
\t\t\t    t.media.webkitEnterFullscreen();
\t\t\t\treturn;
\t\t\t}

\t\t\t// set it to not show scroll bars so 100% will work
            \$(document.documentElement).addClass('mejs-fullscreen');

\t\t\t// store sizing
\t\t\tt.normalHeight = t.container.height();
\t\t\tt.normalWidth = t.container.width();



\t\t\t// attempt to do true fullscreen
\t\t\tif (t.fullscreenMode === 'native-native' || t.fullscreenMode === 'plugin-native') {

\t\t\t\tmejs.MediaFeatures.requestFullScreen(t.container[0]);
\t\t\t\t//return;

\t\t\t\tif (t.isInIframe) {
\t\t\t\t\t// sometimes exiting from fullscreen doesn't work
\t\t\t\t\t// notably in Chrome <iframe>. Fixed in version 17
\t\t\t\t\tsetTimeout(function checkFullscreen() {

\t\t\t\t\t\tif (t.isNativeFullScreen) {
\t\t\t\t\t\t\tvar percentErrorMargin = 0.002, // 0.2%
\t\t\t\t\t\t\t\twindowWidth = \$(window).width(),
\t\t\t\t\t\t\t\tscreenWidth = screen.width,
\t\t\t\t\t\t\t\tabsDiff = Math.abs(screenWidth - windowWidth),
\t\t\t\t\t\t\t\tmarginError = screenWidth * percentErrorMargin;

\t\t\t\t\t\t\t// check if the video is suddenly not really fullscreen
\t\t\t\t\t\t\tif (absDiff > marginError) {
\t\t\t\t\t\t\t\t// manually exit
\t\t\t\t\t\t\t\tt.exitFullScreen();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t// test again
\t\t\t\t\t\t\t\tsetTimeout(checkFullscreen, 500);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}, 1000);
\t\t\t\t}
\t\t\t\t
\t\t\t} else if (t.fullscreeMode == 'fullwindow') {\t\t\t\t
\t\t\t\t// move into position
\t\t\t\t
\t\t\t}\t\t\t
\t\t\t
\t\t\t// make full size
\t\t\tt.container
\t\t\t\t.addClass('mejs-container-fullscreen')
\t\t\t\t.width('100%')
\t\t\t\t.height('100%');
\t\t\t\t//.css({position: 'fixed', left: 0, top: 0, right: 0, bottom: 0, overflow: 'hidden', width: '100%', height: '100%', 'z-index': 1000});

\t\t\t// Only needed for safari 5.1 native full screen, can cause display issues elsewhere
\t\t\t// Actually, it seems to be needed for IE8, too
\t\t\t//if (mejs.MediaFeatures.hasTrueNativeFullScreen) {
\t\t\t\tt.containerSizeTimeout = setTimeout(function() {
\t\t\t\t\tt.container.css({width: '100%', height: '100%'});
\t\t\t\t\tt.setControlsSize();
\t\t\t\t}, 500);
\t\t\t//}

\t\t\tif (t.media.pluginType === 'native') {
\t\t\t\tt.\$media
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');
\t\t\t} else {
\t\t\t\tt.container.find('.mejs-shim')
\t\t\t\t\t.width('100%')
\t\t\t\t\t.height('100%');\t
\t\t\t\t
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tvar win = \$(window),
\t\t\t\t\t\twinW = win.width(),
\t\t\t\t\t\twinH = win.height();
\t\t\t\t\t\t\t
\t\t\t\t\tt.media.setVideoSize(winW,winH);\t\t\t
\t\t\t\t}, 500);
\t\t\t}

\t\t\tt.layers.children('div')
\t\t\t\t.width('100%')
\t\t\t\t.height('100%');

\t\t\tif (t.fullscreenBtn) {
\t\t\t\tt.fullscreenBtn
\t\t\t\t\t.removeClass('mejs-fullscreen')
\t\t\t\t\t.addClass('mejs-unfullscreen');
\t\t\t}

\t\t\tt.setControlsSize();
\t\t\tt.isFullScreen = true;

\t\t\tvar zoomFactor = Math.min(screen.width / t.width, screen.height / t.height);
\t\t\tt.container.find('.mejs-captions-text').css('font-size', zoomFactor * 100 + '%');
\t\t\tt.container.find('.mejs-captions-text').css('line-height', 'normal');
\t\t\tt.container.find('.mejs-captions-position').css('bottom', '45px');

\t\t\tt.container.trigger('enteredfullscreen');
\t\t},

\t\texitFullScreen: function() {

\t\t\tvar t = this;

            // Prevent container from attempting to stretch a second time
            clearTimeout(t.containerSizeTimeout);

\t\t\t// firefox can't adjust plugins
\t\t\t/*
\t\t\tif (t.media.pluginType !== 'native' && mejs.MediaFeatures.isFirefox) {
\t\t\t\tt.media.setFullscreen(false);
\t\t\t\t//player.isFullScreen = false;
\t\t\t\treturn;
\t\t\t}
\t\t\t*/

\t\t\t// come out of native fullscreen
\t\t\tif (mejs.MediaFeatures.hasTrueNativeFullScreen && (mejs.MediaFeatures.isFullScreen() || t.isFullScreen)) {
\t\t\t\tmejs.MediaFeatures.cancelFullScreen();
\t\t\t}

\t\t\t// restore scroll bars to document
            \$(document.documentElement).removeClass('mejs-fullscreen');

\t\t\tt.container
\t\t\t\t.removeClass('mejs-container-fullscreen')
\t\t\t\t.width(t.normalWidth)
\t\t\t\t.height(t.normalHeight);

\t\t\tif (t.media.pluginType === 'native') {
\t\t\t\tt.\$media
\t\t\t\t\t.width(t.normalWidth)
\t\t\t\t\t.height(t.normalHeight);
\t\t\t} else {
\t\t\t\tt.container.find('.mejs-shim')
\t\t\t\t\t.width(t.normalWidth)
\t\t\t\t\t.height(t.normalHeight);

\t\t\t\tt.media.setVideoSize(t.normalWidth, t.normalHeight);
\t\t\t}

\t\t\tt.layers.children('div')
\t\t\t\t.width(t.normalWidth)
\t\t\t\t.height(t.normalHeight);

\t\t\tt.fullscreenBtn
\t\t\t\t.removeClass('mejs-unfullscreen')
\t\t\t\t.addClass('mejs-fullscreen');

\t\t\tt.setControlsSize();
\t\t\tt.isFullScreen = false;

\t\t\tt.container.find('.mejs-captions-text').css('font-size','');
\t\t\tt.container.find('.mejs-captions-text').css('line-height', '');
\t\t\tt.container.find('.mejs-captions-position').css('bottom', '');

\t\t\tt.container.trigger('exitedfullscreen');
\t\t}
\t});

})(mejs.\$);

(function(\$) {

\t// Speed
\t\$.extend(mejs.MepDefaults, {

\t\t// We also support to pass object like this:
\t\t// [{name: 'Slow', value: '0.75'}, {name: 'Normal', value: '1.00'}, ...]
\t\tspeeds: ['2.00', '1.50', '1.25', '1.00', '0.75'],

\t\tdefaultSpeed: '1.00',
\t\t
\t\tspeedChar: 'x'

\t});

\t\$.extend(MediaElementPlayer.prototype, {

\t\tbuildspeed: function(player, controls, layers, media) {
\t\t\tvar t = this;

\t\t\tif (t.media.pluginType == 'native') {
\t\t\t\tvar 
\t\t\t\t\tspeedButton = null,
\t\t\t\t\tspeedSelector = null,
\t\t\t\t\tplaybackSpeed = null,
\t\t\t\t\tinputId = null;

\t\t\t\tvar speeds = [];
\t\t\t\tvar defaultInArray = false;
\t\t\t\tfor (var i=0, len=t.options.speeds.length; i < len; i++) {
\t\t\t\t\tvar s = t.options.speeds[i];
\t\t\t\t\tif (typeof(s) === 'string'){
\t\t\t\t\t\tspeeds.push({
\t\t\t\t\t\t\tname: s + t.options.speedChar,
\t\t\t\t\t\t\tvalue: s
\t\t\t\t\t\t});
\t\t\t\t\t\tif(s === t.options.defaultSpeed) {
\t\t\t\t\t\t\tdefaultInArray = true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tspeeds.push(s);
\t\t\t\t\t\tif(s.value === t.options.defaultSpeed) {
\t\t\t\t\t\t\tdefaultInArray = true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!defaultInArray) {
\t\t\t\t\tspeeds.push({
\t\t\t\t\t\tname: t.options.defaultSpeed + t.options.speedChar,
\t\t\t\t\t\tvalue: t.options.defaultSpeed
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tspeeds.sort(function(a, b) {
\t\t\t\t\treturn parseFloat(b.value) - parseFloat(a.value);
\t\t\t\t});

\t\t\t\tvar getSpeedNameFromValue = function(value) {
\t\t\t\t\tfor(i=0,len=speeds.length; i <len; i++) {
\t\t\t\t\t\tif (speeds[i].value === value) {
\t\t\t\t\t\t\treturn speeds[i].name;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tvar html = '<div class=\"mejs-button mejs-speed-button\">' +
\t\t\t\t\t\t\t'<button type=\"button\">' + getSpeedNameFromValue(t.options.defaultSpeed) + '</button>' +
\t\t\t\t\t\t\t'<div class=\"mejs-speed-selector\">' +
\t\t\t\t\t\t\t'<ul>';

\t\t\t\tfor (i = 0, il = speeds.length; i<il; i++) {
\t\t\t\t\tinputId = t.id + '-speed-' + speeds[i].value;
\t\t\t\t\thtml += '<li>' + 
\t\t\t\t\t\t\t\t'<input type=\"radio\" name=\"speed\" ' + 
\t\t\t\t\t\t\t\t\t\t\t'value=\"' + speeds[i].value + '\" ' +
\t\t\t\t\t\t\t\t\t\t\t'id=\"' + inputId + '\" ' +
\t\t\t\t\t\t\t\t\t\t\t(speeds[i].value === t.options.defaultSpeed ? ' checked' : '') +
\t\t\t\t\t\t\t\t\t\t\t' />' +
\t\t\t\t\t\t\t\t'<label for=\"' + inputId + '\" ' +
\t\t\t\t\t\t\t\t\t\t\t(speeds[i].value === t.options.defaultSpeed ? ' class=\"mejs-speed-selected\"' : '') +
\t\t\t\t\t\t\t\t\t\t\t'>' + speeds[i].name + '</label>' +
\t\t\t\t\t\t\t'</li>';
\t\t\t\t}
\t\t\t\thtml += '</ul></div></div>';

\t\t\t\tspeedButton = \$(html).appendTo(controls);
\t\t\t\tspeedSelector = speedButton.find('.mejs-speed-selector');

\t\t\t\tplaybackSpeed = t.options.defaultSpeed;

\t\t\t\tmedia.addEventListener('loadedmetadata', function(e) {
\t\t\t\t\tif (playbackSpeed) {
\t\t\t\t\t\tmedia.playbackRate = parseFloat(playbackSpeed);
\t\t\t\t\t}
\t\t\t\t}, true);

\t\t\t\tspeedSelector
\t\t\t\t\t.on('click', 'input[type=\"radio\"]', function() {
\t\t\t\t\t\tvar newSpeed = \$(this).attr('value');
\t\t\t\t\t\tplaybackSpeed = newSpeed;
\t\t\t\t\t\tmedia.playbackRate = parseFloat(newSpeed);
\t\t\t\t\t\tspeedButton.find('button').html(getSpeedNameFromValue(newSpeed));
\t\t\t\t\t\tspeedButton.find('.mejs-speed-selected').removeClass('mejs-speed-selected');
\t\t\t\t\t\tspeedButton.find('input[type=\"radio\"]:checked').next().addClass('mejs-speed-selected');
\t\t\t\t\t});
\t\t\t\tspeedButton
\t\t\t\t\t.one( 'mouseenter focusin', function() {
\t\t\t\t\t\tspeedSelector
\t\t\t\t\t\t\t.height(
\t\t\t\t\t\t\t\tspeedButton.find('.mejs-speed-selector ul').outerHeight(true) +
\t\t\t\t\t\t\t\tspeedButton.find('.mejs-speed-translations').outerHeight(true))
\t\t\t\t\t\t\t.css('top', (-1 * speedSelector.height()) + 'px');
\t\t\t\t\t});
\t\t\t}
\t\t}
\t});

})(mejs.\$);

(function(\$) {

\t// add extra default options
\t\$.extend(mejs.MepDefaults, {
\t\t// this will automatically turn on a <track>
\t\tstartLanguage: '',

\t\ttracksText: '',

\t\t// By default, no WAI-ARIA live region - don't make a
\t\t// screen reader speak captions over an audio track.
\t\ttracksAriaLive: false,

\t\t// option to remove the [cc] button when no <track kind=\"subtitles\"> are present
\t\thideCaptionsButtonWhenEmpty: true,

\t\t// If true and we only have one track, change captions to popup
\t\ttoggleCaptionsButtonWhenOnlyOne: false,

\t\t// #id or .class
\t\tslidesSelector: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {

\t\thasChapters: false,

\t\tcleartracks: function(player, controls, layers, media){
\t\t\tif(player) {
\t\t\t\tif(player.captions) player.captions.remove();
\t\t\t\tif(player.chapters) player.chapters.remove();
\t\t\t\tif(player.captionsText) player.captionsText.remove();
\t\t\t\tif(player.captionsButton) player.captionsButton.remove();
\t\t\t}
\t\t},
\t\tbuildtracks: function(player, controls, layers, media) {
\t\t\tif (player.tracks.length === 0)
\t\t\t\treturn;

\t\t\tvar t = this,
\t\t\t\tattr = t.options.tracksAriaLive ?
\t\t\t\t\t'role=\"log\" aria-live=\"assertive\" aria-atomic=\"false\"' : '',
\t\t\t\ttracksTitle = t.options.tracksText ? t.options.tracksText : mejs.i18n.t('mejs.captions-subtitles'),
\t\t\t\ti,
\t\t\t\tkind;

\t\t\tif (t.domNode.textTracks) { // if browser will do native captions, prefer mejs captions, loop through tracks and hide
\t\t\t\tfor (i = t.domNode.textTracks.length - 1; i >= 0; i--) {
\t\t\t\t\tt.domNode.textTracks[i].mode = \"hidden\";
\t\t\t\t}
\t\t\t}
\t\t\tt.cleartracks(player, controls, layers, media);
\t\t\tplayer.chapters =
\t\t\t\t\t\$('<div class=\"mejs-chapters mejs-layer\"></div>')
\t\t\t\t\t\t.prependTo(layers).hide();
\t\t\tplayer.captions =
\t\t\t\t\t\$('<div class=\"mejs-captions-layer mejs-layer\"><div class=\"mejs-captions-position mejs-captions-position-hover\" ' +
\t\t\t\t\tattr + '><span class=\"mejs-captions-text\"></span></div></div>')
\t\t\t\t\t\t.prependTo(layers).hide();
\t\t\tplayer.captionsText = player.captions.find('.mejs-captions-text');
\t\t\tplayer.captionsButton =
\t\t\t\t\t\$('<div class=\"mejs-button mejs-captions-button\">'+
\t\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + tracksTitle + '\" aria-label=\"' + tracksTitle + '\"></button>'+
\t\t\t\t\t\t'<div class=\"mejs-captions-selector\">'+
\t\t\t\t\t\t\t'<ul>'+
\t\t\t\t\t\t\t\t'<li>'+
\t\t\t\t\t\t\t\t\t'<input type=\"radio\" name=\"' + player.id + '_captions\" id=\"' + player.id + '_captions_none\" value=\"none\" checked=\"checked\" />' +
\t\t\t\t\t\t\t\t\t'<label for=\"' + player.id + '_captions_none\">' + mejs.i18n.t('mejs.none') +'</label>'+
\t\t\t\t\t\t\t\t'</li>'\t+
\t\t\t\t\t\t\t'</ul>'+
\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</div>')
\t\t\t\t\t\t.appendTo(controls);


\t\t\tvar subtitleCount = 0;
\t\t\tfor (i=0; i<player.tracks.length; i++) {
\t\t\t\tkind = player.tracks[i].kind;
\t\t\t\tif (kind === 'subtitles' || kind === 'captions') {
\t\t\t\t\tsubtitleCount++;
\t\t\t\t}
\t\t\t}

\t\t\t// if only one language then just make the button a toggle
\t\t\tif (t.options.toggleCaptionsButtonWhenOnlyOne && subtitleCount == 1){
\t\t\t\t// click
\t\t\t\tplayer.captionsButton.on('click',function() {
\t\t\t\t\tif (player.selectedTrack === null) {
\t\t\t\t\t\tlang = player.tracks[0].srclang;
\t\t\t\t\t} else {
\t\t\t\t\t\tlang = 'none';
\t\t\t\t\t}
\t\t\t\t\tplayer.setTrack(lang);
\t\t\t\t});
\t\t\t} else {
\t\t\t\t// hover or keyboard focus
\t\t\t\tplayer.captionsButton.on( 'mouseenter focusin', function() {
\t\t\t\t\t\$(this).find('.mejs-captions-selector').removeClass('mejs-offscreen');
\t\t\t\t})

\t\t\t\t// handle clicks to the language radio buttons
\t\t\t\t.on('click','input[type=radio]',function() {
\t\t\t\t\tlang = this.value;
\t\t\t\t\tplayer.setTrack(lang);
\t\t\t\t});

\t\t\t\tplayer.captionsButton.on( 'mouseleave focusout', function() {
\t\t\t\t\t\$(this).find(\".mejs-captions-selector\").addClass(\"mejs-offscreen\");
\t\t\t\t});

\t\t\t}

\t\t\tif (!player.options.alwaysShowControls) {
\t\t\t\t// move with controls
\t\t\t\tplayer.container
\t\t\t\t\t.bind('controlsshown', function () {
\t\t\t\t\t\t// push captions above controls
\t\t\t\t\t\tplayer.container.find('.mejs-captions-position').addClass('mejs-captions-position-hover');

\t\t\t\t\t})
\t\t\t\t\t.bind('controlshidden', function () {
\t\t\t\t\t\tif (!media.paused) {
\t\t\t\t\t\t\t// move back to normal place
\t\t\t\t\t\t\tplayer.container.find('.mejs-captions-position').removeClass('mejs-captions-position-hover');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t} else {
\t\t\t\tplayer.container.find('.mejs-captions-position').addClass('mejs-captions-position-hover');
\t\t\t}

\t\t\tplayer.trackToLoad = -1;
\t\t\tplayer.selectedTrack = null;
\t\t\tplayer.isLoadingTrack = false;

\t\t\t// add to list
\t\t\tfor (i=0; i<player.tracks.length; i++) {
\t\t\t\tkind = player.tracks[i].kind;
\t\t\t\tif (kind === 'subtitles' || kind === 'captions') {
\t\t\t\t\tplayer.addTrackButton(player.tracks[i].srclang, player.tracks[i].label);
\t\t\t\t}
\t\t\t}

\t\t\t// start loading tracks
\t\t\tplayer.loadNextTrack();

\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\tplayer.displayCaptions();
\t\t\t}, false);

\t\t\tif (player.options.slidesSelector !== '') {
\t\t\t\tplayer.slidesContainer = \$(player.options.slidesSelector);

\t\t\t\tmedia.addEventListener('timeupdate',function() {
\t\t\t\t\tplayer.displaySlides();
\t\t\t\t}, false);

\t\t\t}

\t\t\tmedia.addEventListener('loadedmetadata', function() {
\t\t\t\tplayer.displayChapters();
\t\t\t}, false);

\t\t\tplayer.container.hover(
\t\t\t\tfunction () {
\t\t\t\t\t// chapters
\t\t\t\t\tif (player.hasChapters) {
\t\t\t\t\t\tplayer.chapters.removeClass('mejs-offscreen');
\t\t\t\t\t\tplayer.chapters.fadeIn(200).height(player.chapters.find('.mejs-chapter').outerHeight());
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfunction () {
\t\t\t\t\tif (player.hasChapters && !media.paused) {
\t\t\t\t\t\tplayer.chapters.fadeOut(200, function() {
\t\t\t\t\t\t\t\$(this).addClass('mejs-offscreen');
\t\t\t\t\t\t\t\$(this).css('display','block');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});

\t\t\tt.container.on('controlsresize', function() {
\t\t\t\tt.adjustLanguageBox();
\t\t\t});

\t\t\t// check for autoplay
\t\t\tif (player.node.getAttribute('autoplay') !== null) {
\t\t\t\tplayer.chapters.addClass('mejs-offscreen');
\t\t\t}
\t\t},

\t\tsetTrack: function(lang){

\t\t\tvar t = this,
\t\t\t\ti;

\t\t\tif (lang == 'none') {
\t\t\t\tt.selectedTrack = null;
\t\t\t\tt.captionsButton.removeClass('mejs-captions-enabled');
\t\t\t} else {
\t\t\t\tfor (i=0; i<t.tracks.length; i++) {
\t\t\t\t\tif (t.tracks[i].srclang == lang) {
\t\t\t\t\t\tif (t.selectedTrack === null)
\t\t\t\t\t\t\tt.captionsButton.addClass('mejs-captions-enabled');
\t\t\t\t\t\tt.selectedTrack = t.tracks[i];
\t\t\t\t\t\tt.captions.attr('lang', t.selectedTrack.srclang);
\t\t\t\t\t\tt.displayCaptions();
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t},

\t\tloadNextTrack: function() {
\t\t\tvar t = this;

\t\t\tt.trackToLoad++;
\t\t\tif (t.trackToLoad < t.tracks.length) {
\t\t\t\tt.isLoadingTrack = true;
\t\t\t\tt.loadTrack(t.trackToLoad);
\t\t\t} else {
\t\t\t\t// add done?
\t\t\t\tt.isLoadingTrack = false;

\t\t\t\tt.checkForTracks();
\t\t\t}
\t\t},

\t\tloadTrack: function(index){
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ttrack = t.tracks[index],
\t\t\t\tafter = function() {

\t\t\t\t\ttrack.isLoaded = true;

\t\t\t\t\tt.enableTrackButton(track.srclang, track.label);

\t\t\t\t\tt.loadNextTrack();

\t\t\t\t};


\t\t\tif (track.src !== undefined || track.src !== \"\") {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: track.src,
\t\t\t\t\tdataType: \"text\",
\t\t\t\t\tsuccess: function(d) {

\t\t\t\t\t\t// parse the loaded file
\t\t\t\t\t\tif (typeof d == \"string\" && (/<tt\\s+xml/ig).exec(d)) {
\t\t\t\t\t\t\ttrack.entries = mejs.TrackFormatParser.dfxp.parse(d);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\ttrack.entries = mejs.TrackFormatParser.webvtt.parse(d);
\t\t\t\t\t\t}

\t\t\t\t\t\tafter();

\t\t\t\t\t\tif (track.kind == 'chapters') {
\t\t\t\t\t\t\tt.media.addEventListener('play', function() {
\t\t\t\t\t\t\t\tif (t.media.duration > 0) {
\t\t\t\t\t\t\t\t\tt.displayChapters(track);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}, false);
\t\t\t\t\t\t}

\t\t\t\t\t\tif (track.kind == 'slides') {
\t\t\t\t\t\t\tt.setupSlides(track);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function() {
\t\t\t\t\t\tt.removeTrackButton(track.srclang);
\t\t\t\t\t\tt.loadNextTrack();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},

\t\tenableTrackButton: function(lang, label) {
\t\t\tvar t = this;

\t\t\tif (label === '') {
\t\t\t\tlabel = mejs.language.codes[lang] || lang;
\t\t\t}

\t\t\tt.captionsButton
\t\t\t\t.find('input[value=' + lang + ']')
\t\t\t\t\t.prop('disabled',false)
\t\t\t\t.siblings('label')
\t\t\t\t\t.html( label );

\t\t\t// auto select
\t\t\tif (t.options.startLanguage == lang) {
\t\t\t\t\$('#' + t.id + '_captions_' + lang).prop('checked', true).trigger('click');
\t\t\t}

\t\t\tt.adjustLanguageBox();
\t\t},

\t\tremoveTrackButton: function(lang) {
\t\t\tvar t = this;

\t\t\tt.captionsButton.find('input[value=' + lang + ']').closest('li').remove();

\t\t\tt.adjustLanguageBox();
\t\t},

\t\taddTrackButton: function(lang, label) {
\t\t\tvar t = this;
\t\t\tif (label === '') {
\t\t\t\tlabel = mejs.language.codes[lang] || lang;
\t\t\t}

\t\t\tt.captionsButton.find('ul').append(
\t\t\t\t\$('<li>'+
\t\t\t\t\t'<input type=\"radio\" name=\"' + t.id + '_captions\" id=\"' + t.id + '_captions_' + lang + '\" value=\"' + lang + '\" disabled=\"disabled\" />' +
\t\t\t\t\t'<label for=\"' + t.id + '_captions_' + lang + '\">' + label + ' (loading)' + '</label>'+
\t\t\t\t'</li>')
\t\t\t);

\t\t\tt.adjustLanguageBox();

\t\t\t// remove this from the dropdownlist (if it exists)
\t\t\tt.container.find('.mejs-captions-translations option[value=' + lang + ']').remove();
\t\t},

\t\tadjustLanguageBox:function() {
\t\t\tvar t = this;
\t\t\t// adjust the size of the outer box
\t\t\tt.captionsButton.find('.mejs-captions-selector').height(
\t\t\t\tt.captionsButton.find('.mejs-captions-selector ul').outerHeight(true) +
\t\t\t\tt.captionsButton.find('.mejs-captions-translations').outerHeight(true)
\t\t\t);
\t\t},

\t\tcheckForTracks: function() {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\thasSubtitles = false;

\t\t\t// check if any subtitles
\t\t\tif (t.options.hideCaptionsButtonWhenEmpty) {
\t\t\t\tfor (var i=0; i<t.tracks.length; i++) {
\t\t\t\t\tvar kind = t.tracks[i].kind;
\t\t\t\t\tif ((kind === 'subtitles' || kind === 'captions') && t.tracks[i].isLoaded) {
\t\t\t\t\t\thasSubtitles = true;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!hasSubtitles) {
\t\t\t\t\tt.captionsButton.hide();
\t\t\t\t\tt.setControlsSize();
\t\t\t\t}
\t\t\t}
\t\t},

\t\tdisplayCaptions: function() {

\t\t\tif (typeof this.tracks == 'undefined')
\t\t\t\treturn;

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ti,
\t\t\t\ttrack = t.selectedTrack;

\t\t\tif (track !== null && track.isLoaded) {
\t\t\t\tfor (i=0; i<track.entries.times.length; i++) {
\t\t\t\t\tif (t.media.currentTime >= track.entries.times[i].start && t.media.currentTime <= track.entries.times[i].stop) {
\t\t\t\t\t\t// Set the line before the timecode as a class so the cue can be targeted if needed
\t\t\t\t\t\tt.captionsText.html(track.entries.text[i]).attr('class', 'mejs-captions-text ' + (track.entries.times[i].identifier || ''));
\t\t\t\t\t\tt.captions.show().height(0);
\t\t\t\t\t\treturn; // exit out if one is visible;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tt.captions.hide();
\t\t\t} else {
\t\t\t\tt.captions.hide();
\t\t\t}
\t\t},

\t\tsetupSlides: function(track) {
\t\t\tvar t = this;

\t\t\tt.slides = track;
\t\t\tt.slides.entries.imgs = [t.slides.entries.text.length];
\t\t\tt.showSlide(0);

\t\t},

\t\tshowSlide: function(index) {
\t\t\tif (typeof this.tracks == 'undefined' || typeof this.slidesContainer == 'undefined') {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar t = this,
\t\t\t\turl = t.slides.entries.text[index],
\t\t\t\timg = t.slides.entries.imgs[index];

\t\t\tif (typeof img == 'undefined' || typeof img.fadeIn == 'undefined') {

\t\t\t\tt.slides.entries.imgs[index] = img = \$('<img src=\"' + url + '\">')
\t\t\t\t\t\t.on('load', function() {
\t\t\t\t\t\t\timg.appendTo(t.slidesContainer)
\t\t\t\t\t\t\t\t.hide()
\t\t\t\t\t\t\t\t.fadeIn()
\t\t\t\t\t\t\t\t.siblings(':visible')
\t\t\t\t\t\t\t\t\t.fadeOut();

\t\t\t\t\t\t});

\t\t\t} else {

\t\t\t\tif (!img.is(':visible') && !img.is(':animated')) {

\t\t\t\t\t//

\t\t\t\t\timg.fadeIn()
\t\t\t\t\t\t.siblings(':visible')
\t\t\t\t\t\t\t.fadeOut();
\t\t\t\t}
\t\t\t}

\t\t},

\t\tdisplaySlides: function() {

\t\t\tif (typeof this.slides == 'undefined')
\t\t\t\treturn;

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tslides = t.slides,
\t\t\t\ti;

\t\t\tfor (i=0; i<slides.entries.times.length; i++) {
\t\t\t\tif (t.media.currentTime >= slides.entries.times[i].start && t.media.currentTime <= slides.entries.times[i].stop){

\t\t\t\t\tt.showSlide(i);

\t\t\t\t\treturn; // exit out if one is visible;
\t\t\t\t}
\t\t\t}
\t\t},

\t\tdisplayChapters: function() {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ti;

\t\t\tfor (i=0; i<t.tracks.length; i++) {
\t\t\t\tif (t.tracks[i].kind == 'chapters' && t.tracks[i].isLoaded) {
\t\t\t\t\tt.drawChapters(t.tracks[i]);
\t\t\t\t\tt.hasChapters = true;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t},

\t\tdrawChapters: function(chapters) {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\ti,
\t\t\t\tdur,
\t\t\t\t//width,
\t\t\t\t//left,
\t\t\t\tpercent = 0,
\t\t\t\tusedPercent = 0;

\t\t\tt.chapters.empty();

\t\t\tfor (i=0; i<chapters.entries.times.length; i++) {
\t\t\t\tdur = chapters.entries.times[i].stop - chapters.entries.times[i].start;
\t\t\t\tpercent = Math.floor(dur / t.media.duration * 100);
\t\t\t\tif (percent + usedPercent > 100 || // too large
\t\t\t\t\ti == chapters.entries.times.length-1 && percent + usedPercent < 100) // not going to fill it in
\t\t\t\t\t{
\t\t\t\t\tpercent = 100 - usedPercent;
\t\t\t\t}
\t\t\t\t//width = Math.floor(t.width * dur / t.media.duration);
\t\t\t\t//left = Math.floor(t.width * chapters.entries.times[i].start / t.media.duration);
\t\t\t\t//if (left + width > t.width) {
\t\t\t\t//\twidth = t.width - left;
\t\t\t\t//}

\t\t\t\tt.chapters.append( \$(
\t\t\t\t\t'<div class=\"mejs-chapter\" rel=\"' + chapters.entries.times[i].start + '\" style=\"left: ' + usedPercent.toString() + '%;width: ' + percent.toString() + '%;\">' +
\t\t\t\t\t\t'<div class=\"mejs-chapter-block' + ((i==chapters.entries.times.length-1) ? ' mejs-chapter-block-last' : '') + '\">' +
\t\t\t\t\t\t\t'<span class=\"ch-title\">' + chapters.entries.text[i] + '</span>' +
\t\t\t\t\t\t\t'<span class=\"ch-time\">' + mejs.Utility.secondsToTimeCode(chapters.entries.times[i].start, t.options) + '&ndash;' + mejs.Utility.secondsToTimeCode(chapters.entries.times[i].stop, t.options) + '</span>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t'</div>'));
\t\t\t\tusedPercent += percent;
\t\t\t}

\t\t\tt.chapters.find('div.mejs-chapter').click(function() {
\t\t\t\tt.media.setCurrentTime( parseFloat( \$(this).attr('rel') ) );
\t\t\t\tif (t.media.paused) {
\t\t\t\t\tt.media.play();
\t\t\t\t}
\t\t\t});

\t\t\tt.chapters.show();
\t\t}
\t});



\tmejs.language = {
\t\tcodes:  {
\t\t\taf:'Afrikaans',
\t\t\tsq:'Albanian',
\t\t\tar:'Arabic',
\t\t\tbe:'Belarusian',
\t\t\tbg:'Bulgarian',
\t\t\tca:'Catalan',
\t\t\tzh:'Chinese',
\t\t\t'zh-cn':'Chinese Simplified',
\t\t\t'zh-tw':'Chinese Traditional',
\t\t\thr:'Croatian',
\t\t\tcs:'Czech',
\t\t\tda:'Danish',
\t\t\tnl:'Dutch',
\t\t\ten:'English',
\t\t\tet:'Estonian',
\t\t\tfl:'Filipino',
\t\t\tfi:'Finnish',
\t\t\tfr:'French',
\t\t\tgl:'Galician',
\t\t\tde:'German',
\t\t\tel:'Greek',
\t\t\tht:'Haitian Creole',
\t\t\tiw:'Hebrew',
\t\t\thi:'Hindi',
\t\t\thu:'Hungarian',
\t\t\tis:'Icelandic',
\t\t\tid:'Indonesian',
\t\t\tga:'Irish',
\t\t\tit:'Italian',
\t\t\tja:'Japanese',
\t\t\tko:'Korean',
\t\t\tlv:'Latvian',
\t\t\tlt:'Lithuanian',
\t\t\tmk:'Macedonian',
\t\t\tms:'Malay',
\t\t\tmt:'Maltese',
\t\t\tno:'Norwegian',
\t\t\tfa:'Persian',
\t\t\tpl:'Polish',
\t\t\tpt:'Portuguese',
\t\t\t// 'pt-pt':'Portuguese (Portugal)',
\t\t\tro:'Romanian',
\t\t\tru:'Russian',
\t\t\tsr:'Serbian',
\t\t\tsk:'Slovak',
\t\t\tsl:'Slovenian',
\t\t\tes:'Spanish',
\t\t\tsw:'Swahili',
\t\t\tsv:'Swedish',
\t\t\ttl:'Tagalog',
\t\t\tth:'Thai',
\t\t\ttr:'Turkish',
\t\t\tuk:'Ukrainian',
\t\t\tvi:'Vietnamese',
\t\t\tcy:'Welsh',
\t\t\tyi:'Yiddish'
\t\t}
\t};

\t/*
\tParses WebVTT format which should be formatted as
\t================================
\tWEBVTT

\t1
\t00:00:01,1 --> 00:00:05,000
\tA line of text

\t2
\t00:01:15,1 --> 00:02:05,000
\tA second line of text

\t===============================

\tAdapted from: http://www.delphiki.com/html5/playr
\t*/
\tmejs.TrackFormatParser = {
\t\twebvtt: {
\t\t\tpattern_timecode: /^((?:[0-9]{1,2}:)?[0-9]{2}:[0-9]{2}([,.][0-9]{1,3})?) --\\> ((?:[0-9]{1,2}:)?[0-9]{2}:[0-9]{2}([,.][0-9]{3})?)(.*)\$/,

\t\t\tparse: function(trackText) {
\t\t\t\tvar
\t\t\t\t\ti = 0,
\t\t\t\t\tlines = mejs.TrackFormatParser.split2(trackText, /\\r?\\n/),
\t\t\t\t\tentries = {text:[], times:[]},
\t\t\t\t\ttimecode,
\t\t\t\t\ttext,
\t\t\t\t\tidentifier;
\t\t\t\tfor(; i<lines.length; i++) {
\t\t\t\t\ttimecode = this.pattern_timecode.exec(lines[i]);

\t\t\t\t\tif (timecode && i<lines.length) {
\t\t\t\t\t\tif ((i - 1) >= 0 && lines[i - 1] !== '') {
\t\t\t\t\t\t\tidentifier = lines[i - 1];
\t\t\t\t\t\t}
\t\t\t\t\t\ti++;
\t\t\t\t\t\t// grab all the (possibly multi-line) text that follows
\t\t\t\t\t\ttext = lines[i];
\t\t\t\t\t\ti++;
\t\t\t\t\t\twhile(lines[i] !== '' && i<lines.length){
\t\t\t\t\t\t\ttext = text + '\\n' + lines[i];
\t\t\t\t\t\t\ti++;
\t\t\t\t\t\t}
\t\t\t\t\t\ttext = \$.trim(text).replace(/(\\b(https?|ftp|file):\\/\\/[-A-Z0-9+&@#\\/%?=~_|!:,.;]*[-A-Z0-9+&@#\\/%=~_|])/ig, \"<a href='\$1' target='_blank'>\$1</a>\");
\t\t\t\t\t\t// Text is in a different array so I can use .join
\t\t\t\t\t\tentries.text.push(text);
\t\t\t\t\t\tentries.times.push(
\t\t\t\t\t\t{
\t\t\t\t\t\t\tidentifier: identifier,
\t\t\t\t\t\t\tstart: (mejs.Utility.convertSMPTEtoSeconds(timecode[1]) === 0) ? 0.200 : mejs.Utility.convertSMPTEtoSeconds(timecode[1]),
\t\t\t\t\t\t\tstop: mejs.Utility.convertSMPTEtoSeconds(timecode[3]),
\t\t\t\t\t\t\tsettings: timecode[5]
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tidentifier = '';
\t\t\t\t}
\t\t\t\treturn entries;
\t\t\t}
\t\t},
\t\t// Thanks to Justin Capella: https://github.com/johndyer/mediaelement/pull/420
\t\tdfxp: {
\t\t\tparse: function(trackText) {
\t\t\t\ttrackText = \$(trackText).filter(\"tt\");
\t\t\t\tvar
\t\t\t\t\ti = 0,
\t\t\t\t\tcontainer = trackText.children(\"div\").eq(0),
\t\t\t\t\tlines = container.find(\"p\"),
\t\t\t\t\tstyleNode = trackText.find(\"#\" + container.attr(\"style\")),
\t\t\t\t\tstyles,
\t\t\t\t\ttext,
\t\t\t\t\tentries = {text:[], times:[]};


\t\t\t\tif (styleNode.length) {
\t\t\t\t\tvar attributes = styleNode.removeAttr(\"id\").get(0).attributes;
\t\t\t\t\tif (attributes.length) {
\t\t\t\t\t\tstyles = {};
\t\t\t\t\t\tfor (i = 0; i < attributes.length; i++) {
\t\t\t\t\t\t\tstyles[attributes[i].name.split(\":\")[1]] = attributes[i].value;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfor(i = 0; i<lines.length; i++) {
\t\t\t\t\tvar style;
\t\t\t\t\tvar _temp_times = {
\t\t\t\t\t\tstart: null,
\t\t\t\t\t\tstop: null,
\t\t\t\t\t\tstyle: null
\t\t\t\t\t};
\t\t\t\t\tif (lines.eq(i).attr(\"begin\")) _temp_times.start = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i).attr(\"begin\"));
\t\t\t\t\tif (!_temp_times.start && lines.eq(i-1).attr(\"end\")) _temp_times.start = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i-1).attr(\"end\"));
\t\t\t\t\tif (lines.eq(i).attr(\"end\")) _temp_times.stop = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i).attr(\"end\"));
\t\t\t\t\tif (!_temp_times.stop && lines.eq(i+1).attr(\"begin\")) _temp_times.stop = mejs.Utility.convertSMPTEtoSeconds(lines.eq(i+1).attr(\"begin\"));
\t\t\t\t\tif (styles) {
\t\t\t\t\t\tstyle = \"\";
\t\t\t\t\t\tfor (var _style in styles) {
\t\t\t\t\t\t\tstyle += _style + \":\" + styles[_style] + \";\";
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (style) _temp_times.style = style;
\t\t\t\t\tif (_temp_times.start === 0) _temp_times.start = 0.200;
\t\t\t\t\tentries.times.push(_temp_times);
\t\t\t\t\ttext = \$.trim(lines.eq(i).html()).replace(/(\\b(https?|ftp|file):\\/\\/[-A-Z0-9+&@#\\/%?=~_|!:,.;]*[-A-Z0-9+&@#\\/%=~_|])/ig, \"<a href='\$1' target='_blank'>\$1</a>\");
\t\t\t\t\tentries.text.push(text);
\t\t\t\t}
\t\t\t\treturn entries;
\t\t\t}
\t\t},
\t\tsplit2: function (text, regex) {
\t\t\t// normal version for compliant browsers
\t\t\t// see below for IE fix
\t\t\treturn text.split(regex);
\t\t}
\t};

\t// test for browsers with bad String.split method.
\tif ('x\\n\\ny'.split(/\\n/gi).length != 3) {
\t\t// add super slow IE8 and below version
\t\tmejs.TrackFormatParser.split2 = function(text, regex) {
\t\t\tvar
\t\t\t\tparts = [],
\t\t\t\tchunk = '',
\t\t\t\ti;

\t\t\tfor (i=0; i<text.length; i++) {
\t\t\t\tchunk += text.substring(i,i+1);
\t\t\t\tif (regex.test(chunk)) {
\t\t\t\t\tparts.push(chunk.replace(regex, ''));
\t\t\t\t\tchunk = '';
\t\t\t\t}
\t\t\t}
\t\t\tparts.push(chunk);
\t\t\treturn parts;
\t\t};
\t}

})(mejs.\$);

// Source Chooser Plugin
(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tsourcechooserText: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildsourcechooser: function(player, controls, layers, media) {

\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tsourceTitle = t.options.sourcechooserText ? t.options.sourcechooserText : mejs.i18n.t('mejs.source-chooser'),
\t\t\t\thoverTimeout
\t\t\t;

\t\t\tplayer.sourcechooserButton =
\t\t\t\t\$('<div class=\"mejs-button mejs-sourcechooser-button\">'+
\t\t\t\t\t\t'<button type=\"button\" role=\"button\" aria-haspopup=\"true\" aria-owns=\"' + t.id + '\" title=\"' + sourceTitle + '\" aria-label=\"' + sourceTitle + '\"></button>'+
\t\t\t\t\t\t'<div class=\"mejs-sourcechooser-selector mejs-offscreen\" role=\"menu\" aria-expanded=\"false\" aria-hidden=\"true\">'+
\t\t\t\t\t\t\t'<ul>'+
\t\t\t\t\t\t\t'</ul>'+
\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</div>')
\t\t\t\t\t.appendTo(controls)

\t\t\t\t\t// hover
\t\t\t\t\t.hover(function() {
\t\t\t\t\t\tclearTimeout(hoverTimeout);
\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t}, function() {
\t\t\t\t\t\tvar self = \$(this);
\t\t\t\t\t\thoverTimeout = setTimeout(function () {
\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t}, 500);
\t\t\t\t\t})

\t\t\t\t\t// keyboard menu activation
\t\t\t\t\t.on('keydown', function (e) {
\t\t\t\t\t\tvar keyCode = e.keyCode;

\t\t\t\t\t\tswitch (keyCode) {
\t\t\t\t\t\t\tcase 32: // space
\t\t\t\t\t\t\t\tif (!mejs.MediaFeatures.isFirefox) { // space sends the click event in Firefox
\t\t\t\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$(this).find('.mejs-sourcechooser-selector')
\t\t\t\t\t\t\t\t\t.find('input[type=radio]:checked').first().focus();
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase 13: // enter
\t\t\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t\t\t\t\$(this).find('.mejs-sourcechooser-selector')
\t\t\t\t\t\t\t\t\t.find('input[type=radio]:checked').first().focus();
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase 27: // esc
\t\t\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t\t\t\$(this).find('button').focus();
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})

\t\t\t\t\t// close menu when tabbing away
\t\t\t\t\t.on('focusout', mejs.Utility.debounce(function (e) { // Safari triggers focusout multiple times
\t\t\t\t\t\t// Firefox does NOT support e.relatedTarget to see which element
\t\t\t\t\t\t// just lost focus, so wait to find the next focused element
\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\tvar parent = \$(document.activeElement).closest('.mejs-sourcechooser-selector');
\t\t\t\t\t\t\tif (!parent.length) {
\t\t\t\t\t\t\t\t// focus is outside the control; close menu
\t\t\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 0);
\t\t\t\t\t}, 100))

\t\t\t\t\t// handle clicks to the source radio buttons
\t\t\t\t\t.delegate('input[type=radio]', 'click', function() {
\t\t\t\t\t\t// set aria states
\t\t\t\t\t\t\$(this).attr('aria-selected', true).attr('checked', 'checked');
\t\t\t\t\t\t\$(this).closest('.mejs-sourcechooser-selector').find('input[type=radio]').not(this).attr('aria-selected', 'false').removeAttr('checked');

\t\t\t\t\t\tvar src = this.value;

\t\t\t\t\t\tif (media.currentSrc != src) {
\t\t\t\t\t\t\tvar currentTime = media.currentTime;
\t\t\t\t\t\t\tvar paused = media.paused;
\t\t\t\t\t\t\tmedia.pause();
\t\t\t\t\t\t\tmedia.setSrc(src);

\t\t\t\t\t\t\tmedia.addEventListener('loadedmetadata', function(e) {
\t\t\t\t\t\t\t\tmedia.currentTime = currentTime;
\t\t\t\t\t\t\t}, true);

\t\t\t\t\t\t\tvar canPlayAfterSourceSwitchHandler = function(e) {
\t\t\t\t\t\t\t\tif (!paused) {
\t\t\t\t\t\t\t\t\tmedia.play();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tmedia.removeEventListener(\"canplay\", canPlayAfterSourceSwitchHandler, true);
\t\t\t\t\t\t\t};
\t\t\t\t\t\t\tmedia.addEventListener('canplay', canPlayAfterSourceSwitchHandler, true);
\t\t\t\t\t\t\tmedia.load();
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\t// Handle click so that screen readers can toggle the menu
\t\t\t\t\t.delegate('button', 'click', function (e) {
\t\t\t\t\t\tif (\$(this).siblings('.mejs-sourcechooser-selector').hasClass('mejs-offscreen')) {
\t\t\t\t\t\t\tplayer.showSourcechooserSelector();
\t\t\t\t\t\t\t\$(this).siblings('.mejs-sourcechooser-selector').find('input[type=radio]:checked').first().focus();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tplayer.hideSourcechooserSelector();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t// add to list
\t\t\tfor (var i in this.node.children) {
\t\t\t\tvar src = this.node.children[i];
\t\t\t\tif (src.nodeName === 'SOURCE' && (media.canPlayType(src.type) == 'probably' || media.canPlayType(src.type) == 'maybe')) {
\t\t\t\t\tplayer.addSourceButton(src.src, src.title, src.type, media.src == src.src);
\t\t\t\t}
\t\t\t}
\t\t},

\t\taddSourceButton: function(src, label, type, isCurrent) {
\t\t\tvar t = this;
\t\t\tif (label === '' || label == undefined) {
\t\t\t\tlabel = src;
\t\t\t}
\t\t\ttype = type.split('/')[1];

\t\t\tt.sourcechooserButton.find('ul').append(
\t\t\t\t\$('<li>'+
\t\t\t\t\t\t'<input type=\"radio\" name=\"' + t.id + '_sourcechooser\" id=\"' + t.id + '_sourcechooser_' + label + type + '\" role=\"menuitemradio\" value=\"' + src + '\" ' + (isCurrent ? 'checked=\"checked\"' : '') + 'aria-selected=\"' + isCurrent + '\"' + ' />'+
\t\t\t\t\t\t'<label for=\"' + t.id + '_sourcechooser_' + label + type + '\" aria-hidden=\"true\">' + label + ' (' + type + ')</label>'+
\t\t\t\t\t'</li>')
\t\t\t);

\t\t\tt.adjustSourcechooserBox();

\t\t},

\t\tadjustSourcechooserBox: function() {
\t\t\tvar t = this;
\t\t\t// adjust the size of the outer box
\t\t\tt.sourcechooserButton.find('.mejs-sourcechooser-selector').height(
\t\t\t\tt.sourcechooserButton.find('.mejs-sourcechooser-selector ul').outerHeight(true)
\t\t\t);
\t\t},

\t\thideSourcechooserSelector: function () {
\t\t\tthis.sourcechooserButton.find('.mejs-sourcechooser-selector')
\t\t\t\t.addClass('mejs-offscreen')
\t\t\t\t.attr('aria-expanded', 'false')
\t\t\t\t.attr('aria-hidden', 'true')
\t\t\t\t.find('input[type=radio]') // make radios not fucusable
\t\t\t\t.attr('tabindex', '-1');
\t\t},

\t\tshowSourcechooserSelector: function () {
\t\t\tthis.sourcechooserButton.find('.mejs-sourcechooser-selector')
\t\t\t\t.removeClass('mejs-offscreen')
\t\t\t\t.attr('aria-expanded', 'true')
\t\t\t\t.attr('aria-hidden', 'false')
\t\t\t\t.find('input[type=radio]')
\t\t\t\t.attr('tabindex', '0');
\t\t}
\t});

})(mejs.\$);

/*
* ContextMenu Plugin
* 
*
*/

(function(\$) {

\$.extend(mejs.MepDefaults,
\t{ 'contextMenuItems': [
\t\t// demo of a fullscreen option
\t\t{ 
\t\t\trender: function(player) {
\t\t\t\t
\t\t\t\t// check for fullscreen plugin
\t\t\t\tif (typeof player.enterFullScreen == 'undefined')
\t\t\t\t\treturn null;
\t\t\t
\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\treturn mejs.i18n.t('mejs.fullscreen-off');
\t\t\t\t} else {
\t\t\t\t\treturn mejs.i18n.t('mejs.fullscreen-on');
\t\t\t\t}
\t\t\t},
\t\t\tclick: function(player) {
\t\t\t\tif (player.isFullScreen) {
\t\t\t\t\tplayer.exitFullScreen();
\t\t\t\t} else {
\t\t\t\t\tplayer.enterFullScreen();
\t\t\t\t}
\t\t\t}
\t\t}
\t\t,
\t\t// demo of a mute/unmute button
\t\t{ 
\t\t\trender: function(player) {
\t\t\t\tif (player.media.muted) {
\t\t\t\t\treturn mejs.i18n.t('mejs.unmute');
\t\t\t\t} else {
\t\t\t\t\treturn mejs.i18n.t('mejs.mute');
\t\t\t\t}
\t\t\t},
\t\t\tclick: function(player) {
\t\t\t\tif (player.media.muted) {
\t\t\t\t\tplayer.setMuted(false);
\t\t\t\t} else {
\t\t\t\t\tplayer.setMuted(true);
\t\t\t\t}
\t\t\t}
\t\t},
\t\t// separator
\t\t{
\t\t\tisSeparator: true
\t\t}
\t\t,
\t\t// demo of simple download video
\t\t{ 
\t\t\trender: function(player) {
\t\t\t\treturn mejs.i18n.t('mejs.download-video');
\t\t\t},
\t\t\tclick: function(player) {
\t\t\t\twindow.location.href = player.media.currentSrc;
\t\t\t}
\t\t}\t
\t]}
);


\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildcontextmenu: function(player, controls, layers, media) {
\t\t\t
\t\t\t// create context menu
\t\t\tplayer.contextMenu = \$('<div class=\"mejs-contextmenu\"></div>')
\t\t\t\t\t\t\t\t.appendTo(\$('body'))
\t\t\t\t\t\t\t\t.hide();
\t\t\t
\t\t\t// create events for showing context menu
\t\t\tplayer.container.bind('contextmenu', function(e) {
\t\t\t\tif (player.isContextMenuEnabled) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tplayer.renderContextMenu(e.clientX-1, e.clientY-1);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t\tplayer.container.bind('click', function() {
\t\t\t\tplayer.contextMenu.hide();
\t\t\t});\t
\t\t\tplayer.contextMenu.bind('mouseleave', function() {

\t\t\t\t//
\t\t\t\tplayer.startContextMenuTimer();
\t\t\t\t
\t\t\t});\t\t
\t\t},

\t\tcleancontextmenu: function(player) {
\t\t\tplayer.contextMenu.remove();
\t\t},
\t\t
\t\tisContextMenuEnabled: true,
\t\tenableContextMenu: function() {
\t\t\tthis.isContextMenuEnabled = true;
\t\t},
\t\tdisableContextMenu: function() {
\t\t\tthis.isContextMenuEnabled = false;
\t\t},
\t\t
\t\tcontextMenuTimeout: null,
\t\tstartContextMenuTimer: function() {
\t\t\t//
\t\t\t
\t\t\tvar t = this;
\t\t\t
\t\t\tt.killContextMenuTimer();
\t\t\t
\t\t\tt.contextMenuTimer = setTimeout(function() {
\t\t\t\tt.hideContextMenu();
\t\t\t\tt.killContextMenuTimer();
\t\t\t}, 750);
\t\t},
\t\tkillContextMenuTimer: function() {
\t\t\tvar timer = this.contextMenuTimer;
\t\t\t
\t\t\t//
\t\t\t
\t\t\tif (timer != null) {\t\t\t\t
\t\t\t\tclearTimeout(timer);
\t\t\t\tdelete timer;
\t\t\t\ttimer = null;
\t\t\t}
\t\t},\t\t
\t\t
\t\thideContextMenu: function() {
\t\t\tthis.contextMenu.hide();
\t\t},
\t\t
\t\trenderContextMenu: function(x,y) {
\t\t\t
\t\t\t// alway re-render the items so that things like \"turn fullscreen on\" and \"turn fullscreen off\" are always written correctly
\t\t\tvar t = this,
\t\t\t\thtml = '',
\t\t\t\titems = t.options.contextMenuItems;
\t\t\t
\t\t\tfor (var i=0, il=items.length; i<il; i++) {
\t\t\t\t
\t\t\t\tif (items[i].isSeparator) {
\t\t\t\t\thtml += '<div class=\"mejs-contextmenu-separator\"></div>';
\t\t\t\t} else {
\t\t\t\t
\t\t\t\t\tvar rendered = items[i].render(t);
\t\t\t\t
\t\t\t\t\t// render can return null if the item doesn't need to be used at the moment
\t\t\t\t\tif (rendered != null) {
\t\t\t\t\t\thtml += '<div class=\"mejs-contextmenu-item\" data-itemindex=\"' + i + '\" id=\"element-' + (Math.random()*1000000) + '\">' + rendered + '</div>';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t// position and show the context menu
\t\t\tt.contextMenu
\t\t\t\t.empty()
\t\t\t\t.append(\$(html))
\t\t\t\t.css({top:y, left:x})
\t\t\t\t.show();
\t\t\t\t
\t\t\t// bind events
\t\t\tt.contextMenu.find('.mejs-contextmenu-item').each(function() {
\t\t\t\t\t\t\t
\t\t\t\t// which one is this?
\t\t\t\tvar \$dom = \$(this),
\t\t\t\t\titemIndex = parseInt( \$dom.data('itemindex'), 10 ),
\t\t\t\t\titem = t.options.contextMenuItems[itemIndex];
\t\t\t\t
\t\t\t\t// bind extra functionality?
\t\t\t\tif (typeof item.show != 'undefined')
\t\t\t\t\titem.show( \$dom , t);
\t\t\t\t
\t\t\t\t// bind click action
\t\t\t\t\$dom.click(function() {\t\t\t
\t\t\t\t\t// perform click action
\t\t\t\t\tif (typeof item.click != 'undefined')
\t\t\t\t\t\titem.click(t);
\t\t\t\t\t
\t\t\t\t\t// close
\t\t\t\t\tt.contextMenu.hide();\t\t\t\t
\t\t\t\t});\t\t\t\t
\t\t\t});\t
\t\t\t
\t\t\t// stop the controls from hiding
\t\t\tsetTimeout(function() {
\t\t\t\tt.killControlsTimer('rev3');\t
\t\t\t}, 100);
\t\t\t\t\t\t
\t\t}
\t});
\t
})(mejs.\$);
(function(\$) {
\t// skip back button

\t\$.extend(mejs.MepDefaults, {
\t\tskipBackInterval: 30,
\t\t// %1 will be replaced with skipBackInterval in this string
\t\tskipBackText: ''
\t});

\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildskipback: function(player, controls, layers, media) {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tdefaultTitle = mejs.i18n.t('mejs.time-skip-back', t.options.skipBackInterval),
\t\t\t\tskipTitle = t.options.skipBackText ? t.options.skipBackText : defaultTitle,
\t\t\t\t// create the loop button
\t\t\t\tloop =
\t\t\t\t\$('<div class=\"mejs-button mejs-skip-back-button\">' +
\t\t\t\t\t'<button type=\"button\" aria-controls=\"' + t.id + '\" title=\"' + skipTitle + '\" aria-label=\"' + skipTitle + '\">' + t.options.skipBackInterval + '</button>' +
\t\t\t\t'</div>')
\t\t\t\t// append it to the toolbar
\t\t\t\t.appendTo(controls)
\t\t\t\t// add a click toggle event
\t\t\t\t.click(function() {
\t\t\t\t\tmedia.setCurrentTime(Math.max(media.currentTime - t.options.skipBackInterval, 0));
\t\t\t\t\t\$(this).find('button').blur();
\t\t\t\t});
\t\t}
\t});

})(mejs.\$);

/**
 * Postroll plugin
 */
(function(\$) {

\t\$.extend(mejs.MepDefaults, {
\t\tpostrollCloseText: ''
\t});

\t// Postroll
\t\$.extend(MediaElementPlayer.prototype, {
\t\tbuildpostroll: function(player, controls, layers, media) {
\t\t\tvar
\t\t\t\tt = this,
\t\t\t\tpostrollTitle = t.options.postrollCloseText ? t.options.postrollCloseText : mejs.i18n.t('mejs.close'),
\t\t\t\tpostrollLink = t.container.find('link[rel=\"postroll\"]').attr('href');

\t\t\tif (typeof postrollLink !== 'undefined') {
\t\t\t\tplayer.postroll =
\t\t\t\t\t\$('<div class=\"mejs-postroll-layer mejs-layer\"><a class=\"mejs-postroll-close\" onclick=\"\$(this).parent().hide();return false;\">' + postrollTitle + '</a><div class=\"mejs-postroll-layer-content\"></div></div>').prependTo(layers).hide();

\t\t\t\tt.media.addEventListener('ended', function (e) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\turl: postrollLink,
\t\t\t\t\t\tsuccess: function (data, textStatus) {
\t\t\t\t\t\t\tlayers.find('.mejs-postroll-layer-content').html(data);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tplayer.postroll.show();
\t\t\t\t}, false);
\t\t\t}
\t\t}
\t});

})(mejs.\$);
/*
MediaElement-Markers is a MediaElement.js plugin that lets you add Visual Cues in the progress time rail. 
This plugin also lets you register a custom callback function that will be called everytime the play position reaches a marker. 
Marker position and a reference to the MediaElement Player object is passed to the registered callback function for any post processing. Marker color is configurable.

*/

(function (\$) {
    // markers

    \$.extend(mejs.MepDefaults, {
        markerColor: '#E9BC3D', //default marker color
        markers: [],
        markerCallback: function () {

        }
    });

    \$.extend(MediaElementPlayer.prototype, {
        buildmarkers: function (player, controls, layers, media) {
            var t = this,
                i = 0,
                currentPos = -1,
                currentMarker = -1,
                lastPlayPos = -1, //Track backward seek
                lastMarkerCallBack = -1; //Prevents successive firing of callbacks

            for (i = 0; i < player.options.markers.length; ++i) {
                controls.find('.mejs-time-total').append('<span class=\"mejs-time-marker\"></span>');
            }

            media.addEventListener('durationchange', function (e) {
                player.setmarkers(controls);
            });
            media.addEventListener('timeupdate', function (e) {
                currentPos = Math.floor(media.currentTime);
                if (lastPlayPos > currentPos) {
                    if (lastMarkerCallBack > currentPos) {
                        lastMarkerCallBack = -1;
                    }
                } else {
                    lastPlayPos = currentPos;
                }

                for (i = 0; i < player.options.markers.length; ++i) {
                    currentMarker = Math.floor(player.options.markers[i]); 
                    if (currentPos === currentMarker && currentMarker !== lastMarkerCallBack) {
                        player.options.markerCallback(media, media.currentTime); //Fires the callback function
                        lastMarkerCallBack = currentMarker;
                    }
                }

            }, false);

        },
        setmarkers: function (controls) {
            var t = this,
                i = 0,
                left;

            for (i = 0; i < t.options.markers.length; ++i) {
                if (Math.floor(t.options.markers[i]) <= t.media.duration && Math.floor(t.options.markers[i]) >= 0) {
                    left = 100 * Math.floor(t.options.markers[i]) / t.media.duration;
                    \$(controls.find('.mejs-time-marker')[i]).css({
                        \"width\": \"1px\",
                        \"left\": left+\"%\",
                        \"background\": t.options.markerColor
                    });
                }
            }

        }
    });
})(mejs.\$);
\t
return mejs;
}));", "wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mediaelement-and-player.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/mediaelement/mediaelement-and-player.js.src.js");
    }
}
