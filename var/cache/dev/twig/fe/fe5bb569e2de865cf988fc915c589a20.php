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

/* wdn/templates_5.3/js-src/wdn.babel.js */
class __TwigTemplate_db6594e6c1505982fe9d842ed0b86672 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/wdn.babel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/wdn.babel.js"));

        // line 1
        echo "(function( global, factory ) {
\tif (typeof module === \"object\" && typeof module.exports === \"object\") {
\t\tmodule.exports = global.document ? factory(global, true) : function( w ) {
\t\t\tif ( !w.document ) {
\t\t\t\tthrow new Error(\"WDN requires a window with a document\");
\t\t\t}
\t\t\treturn factory( w );
\t\t};
\t} else {
\t\tfactory( global );
\t}
}(typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {
\tvar
\t\tpluginParams = {},
\t\tloadingCSS = {},
\t\tloadedCSS = {},
\t\tdocument = window.document,
\t\tisDebug = false,
\t\t_head,
\t\t_docEl,
\t\t/**
\t\t * This variable stores the path to the template files.
\t\t * It can be set to /, https://www.unl.edu/, or nothing.
\t\t */
\t\ttemplate_path = '',

\t\tdependent_path = 'wdn/templates_5.3/',

\t\tbuild_path = '/compressed',

\t\t_sanitizeTemplateUrl = function(url) {
\t\t\tvar reTemplateUrl = new RegExp('^/?' + dependent_path.replace('.', '\\\\.'));
\t\t\tif (url.match(reTemplateUrl)) {
\t\t\t\tif (url.charAt(0) === '/') {
\t\t\t\t\t// trim off the leading slash
\t\t\t\t\turl = url.substring(1);
\t\t\t\t}

\t\t\t\turl = template_path + url;
\t\t\t}

\t\t\treturn url;
\t\t};

\t//#TEMPLATE_PATH
\t//#DEPENDENT_PATH

\tvar WDN = {

\t\tgetTemplateFilePath: function(file, withTemplatePath, withVersion) {
\t\t\tfile = '' + file;

\t\t\t// add built script directory for production
\t\t\tif (!isDebug) {
\t\t\t\tfile = file.replace(/^js(\\/|\$)/, 'js' + build_path + '\$1');
\t\t\t}

\t\t\tvar filePath = dependent_path + file;

\t\t\tif (withTemplatePath) {
\t\t\t\tfilePath = template_path + filePath;
\t\t\t}

\t\t\tif (withVersion) {
\t\t\t\tvar qsPosition = filePath.indexOf('?');
\t\t\t\tif (qsPosition < 0) {
\t\t\t\t\tfilePath += '?';
\t\t\t\t} else if (qsPosition !== filePath.length - 1) {
\t\t\t\t\tfilePath += '&';
\t\t\t\t}

\t\t\t\tfilePath += 'dep=' + WDN.getDepVersion();
\t\t\t}

\t\t\treturn filePath;
\t\t},

\t\t/**
\t\t * Loads an external JavaScript file.
\t\t */
\t\tloadJS: function (url,callback) {
\t\t\turl = _sanitizeTemplateUrl(url);
\t\t\trequire([url], callback);
\t\t},

\t\t/**
\t\t * Load an external css file.
\t\t */
\t\tloadCSS: function (url, callback, checkLoaded, callbackIfLoaded) {
\t\t\turl = _sanitizeTemplateUrl(url);

\t\t\tvar link = (function() {
\t\t\t\t\tvar link = document.createElement(\"link\");
\t\t\t\t\tlink.href = url;
\t\t\t\t\tlink.rel = \"stylesheet\";
\t\t\t\t\tlink.type = \"text/css\";
\t\t\t\t\treturn link;
\t\t\t\t})(),
\t\t\t\texecuteCallback = function() {
\t\t\t\t\tloadedCSS[url] = true;
\t\t\t\t\tif (loadingCSS[url]) {
\t\t\t\t\t\tfor (var i = loadingCSS[url].length - 1; i >= 0; i--) {
\t\t\t\t\t\t\tloadingCSS[url][i]();
\t\t\t\t\t\t}
\t\t\t\t\t\tdelete loadingCSS[url];
\t\t\t\t\t}
\t\t\t\t};

\t\t\tif (checkLoaded === false || !(url in loadedCSS)) {
\t\t\t\tif (callback) {
\t\t\t\t\tif (url in loadingCSS) {
\t\t\t\t\t\tloadingCSS[url].push(callback);
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tloadingCSS[url] = [callback];
\t\t\t\t} else if (!(url in loadingCSS)) {
\t\t\t\t\tloadingCSS[url] = [];
\t\t\t\t}

\t\t\t\tif (callback && !window.Modernizr.linkloadevents) {
\t\t\t\t\t// Workaround for webkit and old gecko not firing onload events for <link>
\t\t\t\t\t// http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
\t\t\t\t\tvar dummyObj = document.createElement('img');
\t\t\t\t\tdummyObj.onerror = executeCallback;
\t\t\t\t\tdummyObj.src = url;
\t\t\t\t} else {
\t\t\t\t\tlink.onload = executeCallback;
\t\t\t\t}

\t\t\t\t_head.appendChild(link);
\t\t\t} else if (callback && callbackIfLoaded !== false) {
\t\t\t\tcallback();
\t\t\t}
\t\t},

\t\tisDebug: function() {
\t\t\treturn isDebug;
\t\t},

\t\t/**
\t\t * Load jQuery included with the templates
\t\t *
\t\t * @param callback Called when the document is ready
\t\t */
\t\tloadJQuery: function (callback) {
\t\t\trequire(['wdn_jquery'], function(\$) {
\t\t\t\t\$(callback);
\t\t\t});
\t\t},

\t\t/**
\t\t * This function logs data for debugging purposes.
\t\t *
\t\t * To see, open firebug's console.
\t\t */
\t\tlog: function (data) {
\t\t\tif (\"console\" in window && \"log\" in console) {
\t\t\t\tconsole.log(data);
\t\t\t}
\t\t},

\t\tgetHTMLVersion:function () {
\t\t\tvar version_html = document.body.getAttribute(\"data-version\");

\t\t\t// Set the defaults
\t\t\tif (version_html == '\$HTML_VERSION\$') {
\t\t\t\tversion_html = '5.DEV';
\t\t\t}
\t\t\tif (!version_html) {
\t\t\t\tversion_html = '3.0';
\t\t\t}

\t\t\treturn version_html;
\t\t},

\t\tgetDepVersion:function () {
\t\t\tvar version_dep = document.getElementById(\"wdn_dependents\").getAttribute(\"src\");

\t\t\tif (/\\?dep=\\\$DEP_VERSION\\\$/.test(version_dep)) {
\t\t\t\tversion_dep = '5.3.DEV';
\t\t\t} else {
\t\t\t\tvar version_match = version_dep.match(/\\?dep=(\\d+(?:\\.\\d+)*)/);
\t\t\t\tif (version_match) {
\t\t\t\t\tversion_dep = version_match[1];
\t\t\t\t} else {
\t\t\t\t\tversion_dep = '3.0';
\t\t\t\t}
\t\t\t}

\t\t\treturn version_dep;
\t\t},

\t\t/**
\t\t *
\t\t * @param {string} plugin - The plugin name (must get registerd in WDN namespace)
\t\t * @param {array=} args (optional) - The arguments to pass to plugin initialize funciton
\t\t * @param {function()=} callback (optional) - A provided callback on plugin load
\t\t * @param {string=} insert (optional) - Where the provided callback should be called relative to plugin initialize (before|after|replace)
\t\t */
\t\tinitializePlugin: function (plugin, args, callback, insert) {
\t\t\t// if args is a function, it is the callback
\t\t\tif (Object.prototype.toString.call(args) === '[object Function]') {
\t\t\t\tinsert = callback;
\t\t\t\tcallback = args;
\t\t\t\targs = [];
\t\t\t}

\t\t\t// ensure that args is an array (if available)
\t\t\tif (args && Object.prototype.toString.call(args) !== '[object Array]') {
\t\t\t\targs = [args];
\t\t\t} else if (!args) {
\t\t\t\targs = [];
\t\t\t}

\t\t\trequire([plugin], function(pluginObj) {
\t\t\t\tvar defaultOnLoad, onLoad;
\t\t\t\tdefaultOnLoad = onLoad = function () {
\t\t\t\t\tif (pluginObj && \"initialize\" in pluginObj) {
\t\t\t\t\t\tWDN.log(\"initializing plugin '\" + plugin + \"'\");
\t\t\t\t\t\tpluginObj.initialize.apply(this, args);
\t\t\t\t\t} else {
\t\t\t\t\t\tWDN.log(\"no initialize method for plugin \" + plugin);
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tif (callback) {
\t\t\t\t\t// validate the insert param
\t\t\t\t\tvar _insertVals = 'before after replace'.split(' '),
\t\t\t\t\t\t_goodInsert = false, i;
\t\t\t\t\tfor (i = 0; i < _insertVals.length; i++) {
\t\t\t\t\t\tif (insert === _insertVals[i]) {
\t\t\t\t\t\t\t_goodInsert = true;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (!_goodInsert) {
\t\t\t\t\t\tinsert = 'replace';
\t\t\t\t\t}

\t\t\t\t\t// construct the load callback based on insert
\t\t\t\t\tonLoad = function() {
\t\t\t\t\t\tif (insert === 'replace') {
\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif (insert === 'before') {
\t\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tdefaultOnLoad();

\t\t\t\t\t\t\tif (insert === 'after') {
\t\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\tonLoad();
\t\t\t});
\t\t},

\t\tsetPluginParam: function (plugin, name, value) {
\t\t\tif ( !pluginParams[ plugin ]) {
\t\t\t\tpluginParams[ plugin ] = {};
\t\t\t}
\t\t\tpluginParams[ plugin ][ name ] = value;
\t\t},

\t\tgetPluginParam: function (plugin, name) {
\t\t\tif ( !pluginParams[ plugin ] ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\tif (!name) {
\t\t\t\treturn pluginParams[ plugin ];
\t\t\t}

\t\t\treturn pluginParams[ plugin ][ name ];
\t\t},

\t\tsetCookie: function (name, value, seconds, path, domain, samesite, secure) {
\t\t\tvar expires = \"\";
\t\t\tif (seconds) {
\t\t\t\tvar date = new Date();
\t\t\t\tdate.setTime(date.getTime() + seconds * 1000);
\t\t\t\texpires = \";expires=\" + date.toUTCString();
\t\t\t}
\t\t\tif (!path) {
\t\t\t\tpath = '/';
\t\t\t} else if (path.charAt(0) !== '/') {
\t\t\t\tpath = WDN.toAbs(path, window.location.pathname);
\t\t\t}
\t\t\tif (!domain) {
\t\t\t\tdomain = '.unl.edu';
\t\t\t}
\t\t\tif (!samesite) {
\t\t\t\tsamesite = 'lax';
\t\t\t}

\t\t\tvar cookieString = name + \"=\" + value + expires + \";path=\" + path + \";domain=\" + domain + \";samesite=\" + samesite;

\t\t\t// Add secure if set or not set with samesite=none
\t\t\tif (secure || !secure && samesite.toLowerCase() === 'none') {
\t\t\t\tcookieString = cookieString + ';secure';
\t\t\t}

\t\t\tdocument.cookie = cookieString;
\t\t},

\t\tgetCookie: function (name) {
\t\t\tvar nameEQ = name + \"=\";
\t\t\tvar ca = document.cookie.split(';');
\t\t\tfor(var i=0;i < ca.length;i++) {
\t\t\t\tvar c = ca[i];
\t\t\t\twhile (c.charAt(0) === ' ') {
\t\t\t\t\tc = c.substring(1,c.length);
\t\t\t\t}
\t\t\t\tif (c.indexOf(nameEQ) === 0) {
\t\t\t\t\treturn c.substring(nameEQ.length,c.length);
\t\t\t\t}
\t\t\t}
\t\t\treturn null;
\t\t},

\t\thasDocumentClass: function(className) {
\t\t\tvar documentClass = ' ' + (_docEl.getAttribute && _docEl.getAttribute('class') || '') + ' ';
\t\t\tdocumentClass = documentClass.replace(/[\\t\\r\\n\\f]/g, ' ');
\t\t\treturn documentClass.indexOf(' ' + className + ' ') > -1;
\t\t},

\t\t/**
\t\t * Converts a relative link to an absolute link.
\t\t *
\t\t * @param {string} link The relative link
\t\t * @param {string} base_url The base to use
\t\t */
\t\ttoAbs: function (link, base_url) {
\t\t\tif (typeof link == 'undefined') {
\t\t\t\treturn;
\t\t\t}

\t\t\tbase_url = '' + base_url;
\t\t\tvar lparts = link.split('/'), rScheme = /^[a-z][a-z0-9+.-]*:/i;

\t\t\tif (rScheme.test(lparts[0])) {
\t\t\t\t// already abs, return
\t\t\t\treturn link;
\t\t\t}

\t\t\tvar schemeAndAuthority = '',
\t\t\t\tschemeMatch = base_url.match(rScheme),
\t\t\t\thparts = base_url.split('/'),
\t\t\t\tpart;

\t\t\tif (schemeMatch) {
\t\t\t\tschemeAndAuthority = [hparts.shift(), hparts.shift(), hparts.shift()].join('/') + '/';
\t\t\t} else if (base_url && hparts[0] === '') {
\t\t\t\t// root relative
\t\t\t\tschemeAndAuthority += '/';
\t\t\t\thparts.shift();
\t\t\t}
\t\t\thparts.pop(); // strip trailing thingie, either scriptname or blank

\t\t\tif (lparts[0] === '') { // like \"/here/dude.png\"
\t\t\t\thparts = []; // re-split host parts from scheme and domain only
\t\t\t\tlparts.shift();
\t\t\t}

\t\t\twhile (lparts.length) {
\t\t\t\tpart = lparts.shift();
\t\t\t\tif (part === '..') {
\t\t\t\t\thparts.pop(); // strip one dir off the host for each /../
\t\t\t\t} else if (part !== '.') {
\t\t\t\t\thparts.push(part);
\t\t\t\t}
\t\t\t}

\t\t\treturn schemeAndAuthority + hparts.join('/');
\t\t},

\t\tstringToXML: function (string) {
\t\t\tvar \$ = require('jquery');
\t\t\treturn \$.parseXML(string);
\t\t},

\t\trequest: function (url, data, callback, type, method) {
\t\t\tvar \$ = require('wdn_jquery');

\t\t\tif (\$.isFunction(data)) {
\t\t\t\tmethod = method || type;
\t\t\t\ttype = callback;
\t\t\t\tcallback = data;
\t\t\t\tdata = undefined;
\t\t\t}

\t\t\treturn \$.ajax({
\t\t\t\ttype: method,
\t\t\t\turl: url,
\t\t\t\tdata: data,
\t\t\t\tsuccess: callback,
\t\t\t\tdataType: type
\t\t\t});
\t\t},

\t\tget: function (url, data, callback, type) {
\t\t\tvar \$ = require('wdn_jquery');
\t\t\treturn \$.get(url, data, callback, type);
\t\t},

\t\tpost: function (url, data, callback, type) {
\t\t\tvar \$ = require('wdn_jquery');
\t\t\treturn \$.post(url, data, callback, type);
\t\t}
\t};

\tvar jQueryWarning = false;
\tObject.defineProperty(WDN, 'jQuery', {
\t\tconfigurable: true,
\t\tget: function() {
\t\t\tif (!jQueryWarning) {
\t\t\t\tjQueryWarning = true;

\t\t\t\tif (console && console.warn) {
\t\t\t\t\tconsole.warn('Using jQuery via the WDN.jQuery property is deprecated. You should use require to access jQuery.');
\t\t\t\t}
\t\t\t}

\t\t\treturn window.jQuery;
\t\t}
\t});

\t// invoke function for handling debug loader and document initialization
\t(function() {
\t\tif (!document) {
\t\t\treturn;
\t\t}

\t\t_head = document.head || document.getElementsByTagName('head')[0];
\t\t_docEl = document.documentElement;

\t\tvar i = 0, scripts = document.getElementsByTagName('script'), root;
\t\tfor (; i < scripts.length; i++) {
\t\t\troot = scripts[i].getAttribute('data-wdn_root');
\t\t\tif (root) {
\t\t\t\tisDebug = true;
\t\t\t\ttemplate_path = WDN.toAbs('../../../', root);
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t})();

\t// provide a named module to the AMD loader
\tif (typeof define === \"function\" && define.amd) {
\t\tdefine('wdn', [], function () {
\t\t\treturn WDN;
\t\t});
\t}

\t// export to the window
\tif (typeof noGlobal === \"undefined\") {
\t\twindow.WDN = WDN;
\t}

\t// export for other module environments
\treturn WDN;
}));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js-src/wdn.babel.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(function( global, factory ) {
\tif (typeof module === \"object\" && typeof module.exports === \"object\") {
\t\tmodule.exports = global.document ? factory(global, true) : function( w ) {
\t\t\tif ( !w.document ) {
\t\t\t\tthrow new Error(\"WDN requires a window with a document\");
\t\t\t}
\t\t\treturn factory( w );
\t\t};
\t} else {
\t\tfactory( global );
\t}
}(typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {
\tvar
\t\tpluginParams = {},
\t\tloadingCSS = {},
\t\tloadedCSS = {},
\t\tdocument = window.document,
\t\tisDebug = false,
\t\t_head,
\t\t_docEl,
\t\t/**
\t\t * This variable stores the path to the template files.
\t\t * It can be set to /, https://www.unl.edu/, or nothing.
\t\t */
\t\ttemplate_path = '',

\t\tdependent_path = 'wdn/templates_5.3/',

\t\tbuild_path = '/compressed',

\t\t_sanitizeTemplateUrl = function(url) {
\t\t\tvar reTemplateUrl = new RegExp('^/?' + dependent_path.replace('.', '\\\\.'));
\t\t\tif (url.match(reTemplateUrl)) {
\t\t\t\tif (url.charAt(0) === '/') {
\t\t\t\t\t// trim off the leading slash
\t\t\t\t\turl = url.substring(1);
\t\t\t\t}

\t\t\t\turl = template_path + url;
\t\t\t}

\t\t\treturn url;
\t\t};

\t//#TEMPLATE_PATH
\t//#DEPENDENT_PATH

\tvar WDN = {

\t\tgetTemplateFilePath: function(file, withTemplatePath, withVersion) {
\t\t\tfile = '' + file;

\t\t\t// add built script directory for production
\t\t\tif (!isDebug) {
\t\t\t\tfile = file.replace(/^js(\\/|\$)/, 'js' + build_path + '\$1');
\t\t\t}

\t\t\tvar filePath = dependent_path + file;

\t\t\tif (withTemplatePath) {
\t\t\t\tfilePath = template_path + filePath;
\t\t\t}

\t\t\tif (withVersion) {
\t\t\t\tvar qsPosition = filePath.indexOf('?');
\t\t\t\tif (qsPosition < 0) {
\t\t\t\t\tfilePath += '?';
\t\t\t\t} else if (qsPosition !== filePath.length - 1) {
\t\t\t\t\tfilePath += '&';
\t\t\t\t}

\t\t\t\tfilePath += 'dep=' + WDN.getDepVersion();
\t\t\t}

\t\t\treturn filePath;
\t\t},

\t\t/**
\t\t * Loads an external JavaScript file.
\t\t */
\t\tloadJS: function (url,callback) {
\t\t\turl = _sanitizeTemplateUrl(url);
\t\t\trequire([url], callback);
\t\t},

\t\t/**
\t\t * Load an external css file.
\t\t */
\t\tloadCSS: function (url, callback, checkLoaded, callbackIfLoaded) {
\t\t\turl = _sanitizeTemplateUrl(url);

\t\t\tvar link = (function() {
\t\t\t\t\tvar link = document.createElement(\"link\");
\t\t\t\t\tlink.href = url;
\t\t\t\t\tlink.rel = \"stylesheet\";
\t\t\t\t\tlink.type = \"text/css\";
\t\t\t\t\treturn link;
\t\t\t\t})(),
\t\t\t\texecuteCallback = function() {
\t\t\t\t\tloadedCSS[url] = true;
\t\t\t\t\tif (loadingCSS[url]) {
\t\t\t\t\t\tfor (var i = loadingCSS[url].length - 1; i >= 0; i--) {
\t\t\t\t\t\t\tloadingCSS[url][i]();
\t\t\t\t\t\t}
\t\t\t\t\t\tdelete loadingCSS[url];
\t\t\t\t\t}
\t\t\t\t};

\t\t\tif (checkLoaded === false || !(url in loadedCSS)) {
\t\t\t\tif (callback) {
\t\t\t\t\tif (url in loadingCSS) {
\t\t\t\t\t\tloadingCSS[url].push(callback);
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tloadingCSS[url] = [callback];
\t\t\t\t} else if (!(url in loadingCSS)) {
\t\t\t\t\tloadingCSS[url] = [];
\t\t\t\t}

\t\t\t\tif (callback && !window.Modernizr.linkloadevents) {
\t\t\t\t\t// Workaround for webkit and old gecko not firing onload events for <link>
\t\t\t\t\t// http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
\t\t\t\t\tvar dummyObj = document.createElement('img');
\t\t\t\t\tdummyObj.onerror = executeCallback;
\t\t\t\t\tdummyObj.src = url;
\t\t\t\t} else {
\t\t\t\t\tlink.onload = executeCallback;
\t\t\t\t}

\t\t\t\t_head.appendChild(link);
\t\t\t} else if (callback && callbackIfLoaded !== false) {
\t\t\t\tcallback();
\t\t\t}
\t\t},

\t\tisDebug: function() {
\t\t\treturn isDebug;
\t\t},

\t\t/**
\t\t * Load jQuery included with the templates
\t\t *
\t\t * @param callback Called when the document is ready
\t\t */
\t\tloadJQuery: function (callback) {
\t\t\trequire(['wdn_jquery'], function(\$) {
\t\t\t\t\$(callback);
\t\t\t});
\t\t},

\t\t/**
\t\t * This function logs data for debugging purposes.
\t\t *
\t\t * To see, open firebug's console.
\t\t */
\t\tlog: function (data) {
\t\t\tif (\"console\" in window && \"log\" in console) {
\t\t\t\tconsole.log(data);
\t\t\t}
\t\t},

\t\tgetHTMLVersion:function () {
\t\t\tvar version_html = document.body.getAttribute(\"data-version\");

\t\t\t// Set the defaults
\t\t\tif (version_html == '\$HTML_VERSION\$') {
\t\t\t\tversion_html = '5.DEV';
\t\t\t}
\t\t\tif (!version_html) {
\t\t\t\tversion_html = '3.0';
\t\t\t}

\t\t\treturn version_html;
\t\t},

\t\tgetDepVersion:function () {
\t\t\tvar version_dep = document.getElementById(\"wdn_dependents\").getAttribute(\"src\");

\t\t\tif (/\\?dep=\\\$DEP_VERSION\\\$/.test(version_dep)) {
\t\t\t\tversion_dep = '5.3.DEV';
\t\t\t} else {
\t\t\t\tvar version_match = version_dep.match(/\\?dep=(\\d+(?:\\.\\d+)*)/);
\t\t\t\tif (version_match) {
\t\t\t\t\tversion_dep = version_match[1];
\t\t\t\t} else {
\t\t\t\t\tversion_dep = '3.0';
\t\t\t\t}
\t\t\t}

\t\t\treturn version_dep;
\t\t},

\t\t/**
\t\t *
\t\t * @param {string} plugin - The plugin name (must get registerd in WDN namespace)
\t\t * @param {array=} args (optional) - The arguments to pass to plugin initialize funciton
\t\t * @param {function()=} callback (optional) - A provided callback on plugin load
\t\t * @param {string=} insert (optional) - Where the provided callback should be called relative to plugin initialize (before|after|replace)
\t\t */
\t\tinitializePlugin: function (plugin, args, callback, insert) {
\t\t\t// if args is a function, it is the callback
\t\t\tif (Object.prototype.toString.call(args) === '[object Function]') {
\t\t\t\tinsert = callback;
\t\t\t\tcallback = args;
\t\t\t\targs = [];
\t\t\t}

\t\t\t// ensure that args is an array (if available)
\t\t\tif (args && Object.prototype.toString.call(args) !== '[object Array]') {
\t\t\t\targs = [args];
\t\t\t} else if (!args) {
\t\t\t\targs = [];
\t\t\t}

\t\t\trequire([plugin], function(pluginObj) {
\t\t\t\tvar defaultOnLoad, onLoad;
\t\t\t\tdefaultOnLoad = onLoad = function () {
\t\t\t\t\tif (pluginObj && \"initialize\" in pluginObj) {
\t\t\t\t\t\tWDN.log(\"initializing plugin '\" + plugin + \"'\");
\t\t\t\t\t\tpluginObj.initialize.apply(this, args);
\t\t\t\t\t} else {
\t\t\t\t\t\tWDN.log(\"no initialize method for plugin \" + plugin);
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tif (callback) {
\t\t\t\t\t// validate the insert param
\t\t\t\t\tvar _insertVals = 'before after replace'.split(' '),
\t\t\t\t\t\t_goodInsert = false, i;
\t\t\t\t\tfor (i = 0; i < _insertVals.length; i++) {
\t\t\t\t\t\tif (insert === _insertVals[i]) {
\t\t\t\t\t\t\t_goodInsert = true;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (!_goodInsert) {
\t\t\t\t\t\tinsert = 'replace';
\t\t\t\t\t}

\t\t\t\t\t// construct the load callback based on insert
\t\t\t\t\tonLoad = function() {
\t\t\t\t\t\tif (insert === 'replace') {
\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif (insert === 'before') {
\t\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tdefaultOnLoad();

\t\t\t\t\t\t\tif (insert === 'after') {
\t\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\tonLoad();
\t\t\t});
\t\t},

\t\tsetPluginParam: function (plugin, name, value) {
\t\t\tif ( !pluginParams[ plugin ]) {
\t\t\t\tpluginParams[ plugin ] = {};
\t\t\t}
\t\t\tpluginParams[ plugin ][ name ] = value;
\t\t},

\t\tgetPluginParam: function (plugin, name) {
\t\t\tif ( !pluginParams[ plugin ] ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\tif (!name) {
\t\t\t\treturn pluginParams[ plugin ];
\t\t\t}

\t\t\treturn pluginParams[ plugin ][ name ];
\t\t},

\t\tsetCookie: function (name, value, seconds, path, domain, samesite, secure) {
\t\t\tvar expires = \"\";
\t\t\tif (seconds) {
\t\t\t\tvar date = new Date();
\t\t\t\tdate.setTime(date.getTime() + seconds * 1000);
\t\t\t\texpires = \";expires=\" + date.toUTCString();
\t\t\t}
\t\t\tif (!path) {
\t\t\t\tpath = '/';
\t\t\t} else if (path.charAt(0) !== '/') {
\t\t\t\tpath = WDN.toAbs(path, window.location.pathname);
\t\t\t}
\t\t\tif (!domain) {
\t\t\t\tdomain = '.unl.edu';
\t\t\t}
\t\t\tif (!samesite) {
\t\t\t\tsamesite = 'lax';
\t\t\t}

\t\t\tvar cookieString = name + \"=\" + value + expires + \";path=\" + path + \";domain=\" + domain + \";samesite=\" + samesite;

\t\t\t// Add secure if set or not set with samesite=none
\t\t\tif (secure || !secure && samesite.toLowerCase() === 'none') {
\t\t\t\tcookieString = cookieString + ';secure';
\t\t\t}

\t\t\tdocument.cookie = cookieString;
\t\t},

\t\tgetCookie: function (name) {
\t\t\tvar nameEQ = name + \"=\";
\t\t\tvar ca = document.cookie.split(';');
\t\t\tfor(var i=0;i < ca.length;i++) {
\t\t\t\tvar c = ca[i];
\t\t\t\twhile (c.charAt(0) === ' ') {
\t\t\t\t\tc = c.substring(1,c.length);
\t\t\t\t}
\t\t\t\tif (c.indexOf(nameEQ) === 0) {
\t\t\t\t\treturn c.substring(nameEQ.length,c.length);
\t\t\t\t}
\t\t\t}
\t\t\treturn null;
\t\t},

\t\thasDocumentClass: function(className) {
\t\t\tvar documentClass = ' ' + (_docEl.getAttribute && _docEl.getAttribute('class') || '') + ' ';
\t\t\tdocumentClass = documentClass.replace(/[\\t\\r\\n\\f]/g, ' ');
\t\t\treturn documentClass.indexOf(' ' + className + ' ') > -1;
\t\t},

\t\t/**
\t\t * Converts a relative link to an absolute link.
\t\t *
\t\t * @param {string} link The relative link
\t\t * @param {string} base_url The base to use
\t\t */
\t\ttoAbs: function (link, base_url) {
\t\t\tif (typeof link == 'undefined') {
\t\t\t\treturn;
\t\t\t}

\t\t\tbase_url = '' + base_url;
\t\t\tvar lparts = link.split('/'), rScheme = /^[a-z][a-z0-9+.-]*:/i;

\t\t\tif (rScheme.test(lparts[0])) {
\t\t\t\t// already abs, return
\t\t\t\treturn link;
\t\t\t}

\t\t\tvar schemeAndAuthority = '',
\t\t\t\tschemeMatch = base_url.match(rScheme),
\t\t\t\thparts = base_url.split('/'),
\t\t\t\tpart;

\t\t\tif (schemeMatch) {
\t\t\t\tschemeAndAuthority = [hparts.shift(), hparts.shift(), hparts.shift()].join('/') + '/';
\t\t\t} else if (base_url && hparts[0] === '') {
\t\t\t\t// root relative
\t\t\t\tschemeAndAuthority += '/';
\t\t\t\thparts.shift();
\t\t\t}
\t\t\thparts.pop(); // strip trailing thingie, either scriptname or blank

\t\t\tif (lparts[0] === '') { // like \"/here/dude.png\"
\t\t\t\thparts = []; // re-split host parts from scheme and domain only
\t\t\t\tlparts.shift();
\t\t\t}

\t\t\twhile (lparts.length) {
\t\t\t\tpart = lparts.shift();
\t\t\t\tif (part === '..') {
\t\t\t\t\thparts.pop(); // strip one dir off the host for each /../
\t\t\t\t} else if (part !== '.') {
\t\t\t\t\thparts.push(part);
\t\t\t\t}
\t\t\t}

\t\t\treturn schemeAndAuthority + hparts.join('/');
\t\t},

\t\tstringToXML: function (string) {
\t\t\tvar \$ = require('jquery');
\t\t\treturn \$.parseXML(string);
\t\t},

\t\trequest: function (url, data, callback, type, method) {
\t\t\tvar \$ = require('wdn_jquery');

\t\t\tif (\$.isFunction(data)) {
\t\t\t\tmethod = method || type;
\t\t\t\ttype = callback;
\t\t\t\tcallback = data;
\t\t\t\tdata = undefined;
\t\t\t}

\t\t\treturn \$.ajax({
\t\t\t\ttype: method,
\t\t\t\turl: url,
\t\t\t\tdata: data,
\t\t\t\tsuccess: callback,
\t\t\t\tdataType: type
\t\t\t});
\t\t},

\t\tget: function (url, data, callback, type) {
\t\t\tvar \$ = require('wdn_jquery');
\t\t\treturn \$.get(url, data, callback, type);
\t\t},

\t\tpost: function (url, data, callback, type) {
\t\t\tvar \$ = require('wdn_jquery');
\t\t\treturn \$.post(url, data, callback, type);
\t\t}
\t};

\tvar jQueryWarning = false;
\tObject.defineProperty(WDN, 'jQuery', {
\t\tconfigurable: true,
\t\tget: function() {
\t\t\tif (!jQueryWarning) {
\t\t\t\tjQueryWarning = true;

\t\t\t\tif (console && console.warn) {
\t\t\t\t\tconsole.warn('Using jQuery via the WDN.jQuery property is deprecated. You should use require to access jQuery.');
\t\t\t\t}
\t\t\t}

\t\t\treturn window.jQuery;
\t\t}
\t});

\t// invoke function for handling debug loader and document initialization
\t(function() {
\t\tif (!document) {
\t\t\treturn;
\t\t}

\t\t_head = document.head || document.getElementsByTagName('head')[0];
\t\t_docEl = document.documentElement;

\t\tvar i = 0, scripts = document.getElementsByTagName('script'), root;
\t\tfor (; i < scripts.length; i++) {
\t\t\troot = scripts[i].getAttribute('data-wdn_root');
\t\t\tif (root) {
\t\t\t\tisDebug = true;
\t\t\t\ttemplate_path = WDN.toAbs('../../../', root);
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t})();

\t// provide a named module to the AMD loader
\tif (typeof define === \"function\" && define.amd) {
\t\tdefine('wdn', [], function () {
\t\t\treturn WDN;
\t\t});
\t}

\t// export to the window
\tif (typeof noGlobal === \"undefined\") {
\t\twindow.WDN = WDN;
\t}

\t// export for other module environments
\treturn WDN;
}));
", "wdn/templates_5.3/js-src/wdn.babel.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/wdn.babel.js");
    }
}
