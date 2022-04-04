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

/* wdn/templates_5.0/js/require.js */
class __TwigTemplate_81e63c92b7c72756a2978dd836c38f83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/require.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/require.js"));

        // line 1
        echo "/** vim: et:ts=4:sw=4:sts=4
 * @license RequireJS 2.3.5 Copyright jQuery Foundation and other contributors.
 * Released under MIT license, https://github.com/requirejs/requirejs/blob/master/LICENSE
 */
//Not using strict: uneven strict support in browsers, #392, and causes
//problems with requirejs.exec()/transpiler plugins that may not be strict.
/*jslint regexp: true, nomen: true, sloppy: true */
/*global window, navigator, document, importScripts, setTimeout, opera */

var requirejs, require, define;
(function (global, setTimeout) {
\tvar req, s, head, baseElement, dataMain, src,
\t\tinteractiveScript, currentlyAddingScript, mainScript, subPath,
\t\tversion = '2.3.5',
\t\tcommentRegExp = /\\/\\*[\\s\\S]*?\\*\\/|([^:\"'=]|^)\\/\\/.*\$/mg,
\t\tcjsRequireRegExp = /[^.]\\s*require\\s*\\(\\s*[\"']([^'\"\\s]+)[\"']\\s*\\)/g,
\t\tjsSuffixRegExp = /\\.js\$/,
\t\tcurrDirRegExp = /^\\.\\//,
\t\top = Object.prototype,
\t\tostring = op.toString,
\t\thasOwn = op.hasOwnProperty,
\t\tisBrowser = !!(typeof window !== 'undefined' && typeof navigator !== 'undefined' && window.document),
\t\tisWebWorker = !isBrowser && typeof importScripts !== 'undefined',
\t\t//PS3 indicates loaded and complete, but need to wait for complete
\t\t//specifically. Sequence is 'loading', 'loaded', execution,
\t\t// then 'complete'. The UA check is unfortunate, but not sure how
\t\t//to feature test w/o causing perf issues.
\t\treadyRegExp = isBrowser && navigator.platform === 'PLAYSTATION 3' ?
\t\t\t/^complete\$/ : /^(complete|loaded)\$/,
\t\tdefContextName = '_',
\t\t//Oh the tragedy, detecting opera. See the usage of isOpera for reason.
\t\tisOpera = typeof opera !== 'undefined' && opera.toString() === '[object Opera]',
\t\tcontexts = {},
\t\tcfg = {},
\t\tglobalDefQueue = [],
\t\tuseInteractive = false;

\t//Could match something like ')//comment', do not lose the prefix to comment.
\tfunction commentReplace(match, singlePrefix) {
\t\treturn singlePrefix || '';
\t}

\tfunction isFunction(it) {
\t\treturn ostring.call(it) === '[object Function]';
\t}

\tfunction isArray(it) {
\t\treturn ostring.call(it) === '[object Array]';
\t}

\t/**
\t * Helper function for iterating over an array. If the func returns
\t * a true value, it will break out of the loop.
\t */
\tfunction each(ary, func) {
\t\tif (ary) {
\t\t\tvar i;
\t\t\tfor (i = 0; i < ary.length; i += 1) {
\t\t\t\tif (ary[i] && func(ary[i], i, ary)) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t/**
\t * Helper function for iterating over an array backwards. If the func
\t * returns a true value, it will break out of the loop.
\t */
\tfunction eachReverse(ary, func) {
\t\tif (ary) {
\t\t\tvar i;
\t\t\tfor (i = ary.length - 1; i > -1; i -= 1) {
\t\t\t\tif (ary[i] && func(ary[i], i, ary)) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\tfunction hasProp(obj, prop) {
\t\treturn hasOwn.call(obj, prop);
\t}

\tfunction getOwn(obj, prop) {
\t\treturn hasProp(obj, prop) && obj[prop];
\t}

\t/**
\t * Cycles over properties in an object and calls a function for each
\t * property value. If the function returns a truthy value, then the
\t * iteration is stopped.
\t */
\tfunction eachProp(obj, func) {
\t\tvar prop;
\t\tfor (prop in obj) {
\t\t\tif (hasProp(obj, prop)) {
\t\t\t\tif (func(obj[prop], prop)) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t/**
\t * Simple function to mix in properties from source into target,
\t * but only if target does not already have a property of the same name.
\t */
\tfunction mixin(target, source, force, deepStringMixin) {
\t\tif (source) {
\t\t\teachProp(source, function (value, prop) {
\t\t\t\tif (force || !hasProp(target, prop)) {
\t\t\t\t\tif (deepStringMixin && typeof value === 'object' && value &&
\t\t\t\t\t\t!isArray(value) && !isFunction(value) &&
\t\t\t\t\t\t!(value instanceof RegExp)) {

\t\t\t\t\t\tif (!target[prop]) {
\t\t\t\t\t\t\ttarget[prop] = {};
\t\t\t\t\t\t}
\t\t\t\t\t\tmixin(target[prop], value, force, deepStringMixin);
\t\t\t\t\t} else {
\t\t\t\t\t\ttarget[prop] = value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t\treturn target;
\t}

\t//Similar to Function.prototype.bind, but the 'this' object is specified
\t//first, since it is easier to read/figure out what 'this' will be.
\tfunction bind(obj, fn) {
\t\treturn function () {
\t\t\treturn fn.apply(obj, arguments);
\t\t};
\t}

\tfunction scripts() {
\t\treturn document.getElementsByTagName('script');
\t}

\tfunction defaultOnError(err) {
\t\tthrow err;
\t}

\t//Allow getting a global that is expressed in
\t//dot notation, like 'a.b.c'.
\tfunction getGlobal(value) {
\t\tif (!value) {
\t\t\treturn value;
\t\t}
\t\tvar g = global;
\t\teach(value.split('.'), function (part) {
\t\t\tg = g[part];
\t\t});
\t\treturn g;
\t}

\t/**
\t * Constructs an error with a pointer to an URL with more information.
\t * @param {String} id the error ID that maps to an ID on a web page.
\t * @param {String} message human readable error.
\t * @param {Error} [err] the original error, if there is one.
\t *
\t * @returns {Error}
\t */
\tfunction makeError(id, msg, err, requireModules) {
\t\tvar e = new Error(msg + '\\nhttp://requirejs.org/docs/errors.html#' + id);
\t\te.requireType = id;
\t\te.requireModules = requireModules;
\t\tif (err) {
\t\t\te.originalError = err;
\t\t}
\t\treturn e;
\t}

\tif (typeof define !== 'undefined') {
\t\t//If a define is already in play via another AMD loader,
\t\t//do not overwrite.
\t\treturn;
\t}

\tif (typeof requirejs !== 'undefined') {
\t\tif (isFunction(requirejs)) {
\t\t\t//Do not overwrite an existing requirejs instance.
\t\t\treturn;
\t\t}
\t\tcfg = requirejs;
\t\trequirejs = undefined;
\t}

\t//Allow for a require config object
\tif (typeof require !== 'undefined' && !isFunction(require)) {
\t\t//assume it is a config object.
\t\tcfg = require;
\t\trequire = undefined;
\t}

\tfunction newContext(contextName) {
\t\tvar inCheckLoaded, Module, context, handlers,
\t\t\tcheckLoadedTimeoutId,
\t\t\tconfig = {
\t\t\t\t//Defaults. Do not set a default for map
\t\t\t\t//config to speed up normalize(), which
\t\t\t\t//will run faster if there is no default.
\t\t\t\twaitSeconds: 7,
\t\t\t\tbaseUrl: './',
\t\t\t\tpaths: {},
\t\t\t\tbundles: {},
\t\t\t\tpkgs: {},
\t\t\t\tshim: {},
\t\t\t\tconfig: {}
\t\t\t},
\t\t\tregistry = {},
\t\t\t//registry of just enabled modules, to speed
\t\t\t//cycle breaking code when lots of modules
\t\t\t//are registered, but not activated.
\t\t\tenabledRegistry = {},
\t\t\tundefEvents = {},
\t\t\tdefQueue = [],
\t\t\tdefined = {},
\t\t\turlFetched = {},
\t\t\tbundlesMap = {},
\t\t\trequireCounter = 1,
\t\t\tunnormalizedCounter = 1;

\t\t/**
\t\t * Trims the . and .. from an array of path segments.
\t\t * It will keep a leading path segment if a .. will become
\t\t * the first path segment, to help with module name lookups,
\t\t * which act like paths, but can be remapped. But the end result,
\t\t * all paths that use this function should look normalized.
\t\t * NOTE: this method MODIFIES the input array.
\t\t * @param {Array} ary the array of path segments.
\t\t */
\t\tfunction trimDots(ary) {
\t\t\tvar i, part;
\t\t\tfor (i = 0; i < ary.length; i++) {
\t\t\t\tpart = ary[i];
\t\t\t\tif (part === '.') {
\t\t\t\t\tary.splice(i, 1);
\t\t\t\t\ti -= 1;
\t\t\t\t} else if (part === '..') {
\t\t\t\t\t// If at the start, or previous value is still ..,
\t\t\t\t\t// keep them so that when converted to a path it may
\t\t\t\t\t// still work when converted to a path, even though
\t\t\t\t\t// as an ID it is less than ideal. In larger point
\t\t\t\t\t// releases, may be better to just kick out an error.
\t\t\t\t\tif (i === 0 || (i === 1 && ary[2] === '..') || ary[i - 1] === '..') {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t} else if (i > 0) {
\t\t\t\t\t\tary.splice(i - 1, 2);
\t\t\t\t\t\ti -= 2;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t/**
\t\t * Given a relative module name, like ./something, normalize it to
\t\t * a real name that can be mapped to a path.
\t\t * @param {String} name the relative name
\t\t * @param {String} baseName a real name that the name arg is relative
\t\t * to.
\t\t * @param {Boolean} applyMap apply the map config to the value. Should
\t\t * only be done if this normalization is for a dependency ID.
\t\t * @returns {String} normalized name
\t\t */
\t\tfunction normalize(name, baseName, applyMap) {
\t\t\tvar pkgMain, mapValue, nameParts, i, j, nameSegment, lastIndex,
\t\t\t\tfoundMap, foundI, foundStarMap, starI, normalizedBaseParts,
\t\t\t\tbaseParts = (baseName && baseName.split('/')),
\t\t\t\tmap = config.map,
\t\t\t\tstarMap = map && map['*'];

\t\t\t//Adjust any relative paths.
\t\t\tif (name) {
\t\t\t\tname = name.split('/');
\t\t\t\tlastIndex = name.length - 1;

\t\t\t\t// If wanting node ID compatibility, strip .js from end
\t\t\t\t// of IDs. Have to do this here, and not in nameToUrl
\t\t\t\t// because node allows either .js or non .js to map
\t\t\t\t// to same file.
\t\t\t\tif (config.nodeIdCompat && jsSuffixRegExp.test(name[lastIndex])) {
\t\t\t\t\tname[lastIndex] = name[lastIndex].replace(jsSuffixRegExp, '');
\t\t\t\t}

\t\t\t\t// Starts with a '.' so need the baseName
\t\t\t\tif (name[0].charAt(0) === '.' && baseParts) {
\t\t\t\t\t//Convert baseName to array, and lop off the last part,
\t\t\t\t\t//so that . matches that 'directory' and not name of the baseName's
\t\t\t\t\t//module. For instance, baseName of 'one/two/three', maps to
\t\t\t\t\t//'one/two/three.js', but we want the directory, 'one/two' for
\t\t\t\t\t//this normalization.
\t\t\t\t\tnormalizedBaseParts = baseParts.slice(0, baseParts.length - 1);
\t\t\t\t\tname = normalizedBaseParts.concat(name);
\t\t\t\t}

\t\t\t\ttrimDots(name);
\t\t\t\tname = name.join('/');
\t\t\t}

\t\t\t//Apply map config if available.
\t\t\tif (applyMap && map && (baseParts || starMap)) {
\t\t\t\tnameParts = name.split('/');

\t\t\t\touterLoop: for (i = nameParts.length; i > 0; i -= 1) {
\t\t\t\t\tnameSegment = nameParts.slice(0, i).join('/');

\t\t\t\t\tif (baseParts) {
\t\t\t\t\t\t//Find the longest baseName segment match in the config.
\t\t\t\t\t\t//So, do joins on the biggest to smallest lengths of baseParts.
\t\t\t\t\t\tfor (j = baseParts.length; j > 0; j -= 1) {
\t\t\t\t\t\t\tmapValue = getOwn(map, baseParts.slice(0, j).join('/'));

\t\t\t\t\t\t\t//baseName segment has config, find if it has one for
\t\t\t\t\t\t\t//this name.
\t\t\t\t\t\t\tif (mapValue) {
\t\t\t\t\t\t\t\tmapValue = getOwn(mapValue, nameSegment);
\t\t\t\t\t\t\t\tif (mapValue) {
\t\t\t\t\t\t\t\t\t//Match, update name to the new value.
\t\t\t\t\t\t\t\t\tfoundMap = mapValue;
\t\t\t\t\t\t\t\t\tfoundI = i;
\t\t\t\t\t\t\t\t\tbreak outerLoop;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t//Check for a star map match, but just hold on to it,
\t\t\t\t\t//if there is a shorter segment match later in a matching
\t\t\t\t\t//config, then favor over this star map.
\t\t\t\t\tif (!foundStarMap && starMap && getOwn(starMap, nameSegment)) {
\t\t\t\t\t\tfoundStarMap = getOwn(starMap, nameSegment);
\t\t\t\t\t\tstarI = i;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!foundMap && foundStarMap) {
\t\t\t\t\tfoundMap = foundStarMap;
\t\t\t\t\tfoundI = starI;
\t\t\t\t}

\t\t\t\tif (foundMap) {
\t\t\t\t\tnameParts.splice(0, foundI, foundMap);
\t\t\t\t\tname = nameParts.join('/');
\t\t\t\t}
\t\t\t}

\t\t\t// If the name points to a package's name, use
\t\t\t// the package main instead.
\t\t\tpkgMain = getOwn(config.pkgs, name);

\t\t\treturn pkgMain ? pkgMain : name;
\t\t}

\t\tfunction removeScript(name) {
\t\t\tif (isBrowser) {
\t\t\t\teach(scripts(), function (scriptNode) {
\t\t\t\t\tif (scriptNode.getAttribute('data-requiremodule') === name &&
\t\t\t\t\t\tscriptNode.getAttribute('data-requirecontext') === context.contextName) {
\t\t\t\t\t\tscriptNode.parentNode.removeChild(scriptNode);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}

\t\tfunction hasPathFallback(id) {
\t\t\tvar pathConfig = getOwn(config.paths, id);
\t\t\tif (pathConfig && isArray(pathConfig) && pathConfig.length > 1) {
\t\t\t\t//Pop off the first array value, since it failed, and
\t\t\t\t//retry
\t\t\t\tpathConfig.shift();
\t\t\t\tcontext.require.undef(id);

\t\t\t\t//Custom require that does not do map translation, since
\t\t\t\t//ID is \"absolute\", already mapped/resolved.
\t\t\t\tcontext.makeRequire(null, {
\t\t\t\t\tskipMap: true
\t\t\t\t})([id]);

\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\t//Turns a plugin!resource to [plugin, resource]
\t\t//with the plugin being undefined if the name
\t\t//did not have a plugin prefix.
\t\tfunction splitPrefix(name) {
\t\t\tvar prefix,
\t\t\t\tindex = name ? name.indexOf('!') : -1;
\t\t\tif (index > -1) {
\t\t\t\tprefix = name.substring(0, index);
\t\t\t\tname = name.substring(index + 1, name.length);
\t\t\t}
\t\t\treturn [prefix, name];
\t\t}

\t\t/**
\t\t * Creates a module mapping that includes plugin prefix, module
\t\t * name, and path. If parentModuleMap is provided it will
\t\t * also normalize the name via require.normalize()
\t\t *
\t\t * @param {String} name the module name
\t\t * @param {String} [parentModuleMap] parent module map
\t\t * for the module name, used to resolve relative names.
\t\t * @param {Boolean} isNormalized: is the ID already normalized.
\t\t * This is true if this call is done for a define() module ID.
\t\t * @param {Boolean} applyMap: apply the map config to the ID.
\t\t * Should only be true if this map is for a dependency.
\t\t *
\t\t * @returns {Object}
\t\t */
\t\tfunction makeModuleMap(name, parentModuleMap, isNormalized, applyMap) {
\t\t\tvar url, pluginModule, suffix, nameParts,
\t\t\t\tprefix = null,
\t\t\t\tparentName = parentModuleMap ? parentModuleMap.name : null,
\t\t\t\toriginalName = name,
\t\t\t\tisDefine = true,
\t\t\t\tnormalizedName = '';

\t\t\t//If no name, then it means it is a require call, generate an
\t\t\t//internal name.
\t\t\tif (!name) {
\t\t\t\tisDefine = false;
\t\t\t\tname = '_@r' + (requireCounter += 1);
\t\t\t}

\t\t\tnameParts = splitPrefix(name);
\t\t\tprefix = nameParts[0];
\t\t\tname = nameParts[1];

\t\t\tif (prefix) {
\t\t\t\tprefix = normalize(prefix, parentName, applyMap);
\t\t\t\tpluginModule = getOwn(defined, prefix);
\t\t\t}

\t\t\t//Account for relative paths if there is a base name.
\t\t\tif (name) {
\t\t\t\tif (prefix) {
\t\t\t\t\tif (isNormalized) {
\t\t\t\t\t\tnormalizedName = name;
\t\t\t\t\t} else if (pluginModule && pluginModule.normalize) {
\t\t\t\t\t\t//Plugin is loaded, use its normalize method.
\t\t\t\t\t\tnormalizedName = pluginModule.normalize(name, function (name) {
\t\t\t\t\t\t\treturn normalize(name, parentName, applyMap);
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t// If nested plugin references, then do not try to
\t\t\t\t\t\t// normalize, as it will not normalize correctly. This
\t\t\t\t\t\t// places a restriction on resourceIds, and the longer
\t\t\t\t\t\t// term solution is not to normalize until plugins are
\t\t\t\t\t\t// loaded and all normalizations to allow for async
\t\t\t\t\t\t// loading of a loader plugin. But for now, fixes the
\t\t\t\t\t\t// common uses. Details in #1131
\t\t\t\t\t\tnormalizedName = name.indexOf('!') === -1 ?
\t\t\t\t\t\t\tnormalize(name, parentName, applyMap) :
\t\t\t\t\t\t\tname;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t//A regular module.
\t\t\t\t\tnormalizedName = normalize(name, parentName, applyMap);

\t\t\t\t\t//Normalized name may be a plugin ID due to map config
\t\t\t\t\t//application in normalize. The map config values must
\t\t\t\t\t//already be normalized, so do not need to redo that part.
\t\t\t\t\tnameParts = splitPrefix(normalizedName);
\t\t\t\t\tprefix = nameParts[0];
\t\t\t\t\tnormalizedName = nameParts[1];
\t\t\t\t\tisNormalized = true;

\t\t\t\t\turl = context.nameToUrl(normalizedName);
\t\t\t\t}
\t\t\t}

\t\t\t//If the id is a plugin id that cannot be determined if it needs
\t\t\t//normalization, stamp it with a unique ID so two matching relative
\t\t\t//ids that may conflict can be separate.
\t\t\tsuffix = prefix && !pluginModule && !isNormalized ?
\t\t\t\t'_unnormalized' + (unnormalizedCounter += 1) :
\t\t\t\t'';

\t\t\treturn {
\t\t\t\tprefix: prefix,
\t\t\t\tname: normalizedName,
\t\t\t\tparentMap: parentModuleMap,
\t\t\t\tunnormalized: !!suffix,
\t\t\t\turl: url,
\t\t\t\toriginalName: originalName,
\t\t\t\tisDefine: isDefine,
\t\t\t\tid: (prefix ?
\t\t\t\t\tprefix + '!' + normalizedName :
\t\t\t\t\tnormalizedName) + suffix
\t\t\t};
\t\t}

\t\tfunction getModule(depMap) {
\t\t\tvar id = depMap.id,
\t\t\t\tmod = getOwn(registry, id);

\t\t\tif (!mod) {
\t\t\t\tmod = registry[id] = new context.Module(depMap);
\t\t\t}

\t\t\treturn mod;
\t\t}

\t\tfunction on(depMap, name, fn) {
\t\t\tvar id = depMap.id,
\t\t\t\tmod = getOwn(registry, id);

\t\t\tif (hasProp(defined, id) &&
\t\t\t\t(!mod || mod.defineEmitComplete)) {
\t\t\t\tif (name === 'defined') {
\t\t\t\t\tfn(defined[id]);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tmod = getModule(depMap);
\t\t\t\tif (mod.error && name === 'error') {
\t\t\t\t\tfn(mod.error);
\t\t\t\t} else {
\t\t\t\t\tmod.on(name, fn);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction onError(err, errback) {
\t\t\tvar ids = err.requireModules,
\t\t\t\tnotified = false;

\t\t\tif (errback) {
\t\t\t\terrback(err);
\t\t\t} else {
\t\t\t\teach(ids, function (id) {
\t\t\t\t\tvar mod = getOwn(registry, id);
\t\t\t\t\tif (mod) {
\t\t\t\t\t\t//Set error on module, so it skips timeout checks.
\t\t\t\t\t\tmod.error = err;
\t\t\t\t\t\tif (mod.events.error) {
\t\t\t\t\t\t\tnotified = true;
\t\t\t\t\t\t\tmod.emit('error', err);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif (!notified) {
\t\t\t\t\treq.onError(err);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t/**
\t\t * Internal method to transfer globalQueue items to this context's
\t\t * defQueue.
\t\t */
\t\tfunction takeGlobalQueue() {
\t\t\t//Push all the globalDefQueue items into the context's defQueue
\t\t\tif (globalDefQueue.length) {
\t\t\t\teach(globalDefQueue, function(queueItem) {
\t\t\t\t\tvar id = queueItem[0];
\t\t\t\t\tif (typeof id === 'string') {
\t\t\t\t\t\tcontext.defQueueMap[id] = true;
\t\t\t\t\t}
\t\t\t\t\tdefQueue.push(queueItem);
\t\t\t\t});
\t\t\t\tglobalDefQueue = [];
\t\t\t}
\t\t}

\t\thandlers = {
\t\t\t'require': function (mod) {
\t\t\t\tif (mod.require) {
\t\t\t\t\treturn mod.require;
\t\t\t\t} else {
\t\t\t\t\treturn (mod.require = context.makeRequire(mod.map));
\t\t\t\t}
\t\t\t},
\t\t\t'exports': function (mod) {
\t\t\t\tmod.usingExports = true;
\t\t\t\tif (mod.map.isDefine) {
\t\t\t\t\tif (mod.exports) {
\t\t\t\t\t\treturn (defined[mod.map.id] = mod.exports);
\t\t\t\t\t} else {
\t\t\t\t\t\treturn (mod.exports = defined[mod.map.id] = {});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\t'module': function (mod) {
\t\t\t\tif (mod.module) {
\t\t\t\t\treturn mod.module;
\t\t\t\t} else {
\t\t\t\t\treturn (mod.module = {
\t\t\t\t\t\tid: mod.map.id,
\t\t\t\t\t\turi: mod.map.url,
\t\t\t\t\t\tconfig: function () {
\t\t\t\t\t\t\treturn getOwn(config.config, mod.map.id) || {};
\t\t\t\t\t\t},
\t\t\t\t\t\texports: mod.exports || (mod.exports = {})
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t};

\t\tfunction cleanRegistry(id) {
\t\t\t//Clean up machinery used for waiting modules.
\t\t\tdelete registry[id];
\t\t\tdelete enabledRegistry[id];
\t\t}

\t\tfunction breakCycle(mod, traced, processed) {
\t\t\tvar id = mod.map.id;

\t\t\tif (mod.error) {
\t\t\t\tmod.emit('error', mod.error);
\t\t\t} else {
\t\t\t\ttraced[id] = true;
\t\t\t\teach(mod.depMaps, function (depMap, i) {
\t\t\t\t\tvar depId = depMap.id,
\t\t\t\t\t\tdep = getOwn(registry, depId);

\t\t\t\t\t//Only force things that have not completed
\t\t\t\t\t//being defined, so still in the registry,
\t\t\t\t\t//and only if it has not been matched up
\t\t\t\t\t//in the module already.
\t\t\t\t\tif (dep && !mod.depMatched[i] && !processed[depId]) {
\t\t\t\t\t\tif (getOwn(traced, depId)) {
\t\t\t\t\t\t\tmod.defineDep(i, defined[depId]);
\t\t\t\t\t\t\tmod.check(); //pass false?
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tbreakCycle(dep, traced, processed);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tprocessed[id] = true;
\t\t\t}
\t\t}

\t\tfunction checkLoaded() {
\t\t\tvar err, usingPathFallback,
\t\t\t\twaitInterval = config.waitSeconds * 1000,
\t\t\t\t//It is possible to disable the wait interval by using waitSeconds of 0.
\t\t\t\texpired = waitInterval && (context.startTime + waitInterval) < new Date().getTime(),
\t\t\t\tnoLoads = [],
\t\t\t\treqCalls = [],
\t\t\t\tstillLoading = false,
\t\t\t\tneedCycleCheck = true;

\t\t\t//Do not bother if this call was a result of a cycle break.
\t\t\tif (inCheckLoaded) {
\t\t\t\treturn;
\t\t\t}

\t\t\tinCheckLoaded = true;

\t\t\t//Figure out the state of all the modules.
\t\t\teachProp(enabledRegistry, function (mod) {
\t\t\t\tvar map = mod.map,
\t\t\t\t\tmodId = map.id;

\t\t\t\t//Skip things that are not enabled or in error state.
\t\t\t\tif (!mod.enabled) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif (!map.isDefine) {
\t\t\t\t\treqCalls.push(mod);
\t\t\t\t}

\t\t\t\tif (!mod.error) {
\t\t\t\t\t//If the module should be executed, and it has not
\t\t\t\t\t//been inited and time is up, remember it.
\t\t\t\t\tif (!mod.inited && expired) {
\t\t\t\t\t\tif (hasPathFallback(modId)) {
\t\t\t\t\t\t\tusingPathFallback = true;
\t\t\t\t\t\t\tstillLoading = true;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tnoLoads.push(modId);
\t\t\t\t\t\t\tremoveScript(modId);
\t\t\t\t\t\t}
\t\t\t\t\t} else if (!mod.inited && mod.fetched && map.isDefine) {
\t\t\t\t\t\tstillLoading = true;
\t\t\t\t\t\tif (!map.prefix) {
\t\t\t\t\t\t\t//No reason to keep looking for unfinished
\t\t\t\t\t\t\t//loading. If the only stillLoading is a
\t\t\t\t\t\t\t//plugin resource though, keep going,
\t\t\t\t\t\t\t//because it may be that a plugin resource
\t\t\t\t\t\t\t//is waiting on a non-plugin cycle.
\t\t\t\t\t\t\treturn (needCycleCheck = false);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tif (expired && noLoads.length) {
\t\t\t\t//If wait time expired, throw error of unloaded modules.
\t\t\t\terr = makeError('timeout', 'Load timeout for modules: ' + noLoads, null, noLoads);
\t\t\t\terr.contextName = context.contextName;
\t\t\t\treturn onError(err);
\t\t\t}

\t\t\t//Not expired, check for a cycle.
\t\t\tif (needCycleCheck) {
\t\t\t\teach(reqCalls, function (mod) {
\t\t\t\t\tbreakCycle(mod, {}, {});
\t\t\t\t});
\t\t\t}

\t\t\t//If still waiting on loads, and the waiting load is something
\t\t\t//other than a plugin resource, or there are still outstanding
\t\t\t//scripts, then just try back later.
\t\t\tif ((!expired || usingPathFallback) && stillLoading) {
\t\t\t\t//Something is still waiting to load. Wait for it, but only
\t\t\t\t//if a timeout is not already in effect.
\t\t\t\tif ((isBrowser || isWebWorker) && !checkLoadedTimeoutId) {
\t\t\t\t\tcheckLoadedTimeoutId = setTimeout(function () {
\t\t\t\t\t\tcheckLoadedTimeoutId = 0;
\t\t\t\t\t\tcheckLoaded();
\t\t\t\t\t}, 50);
\t\t\t\t}
\t\t\t}

\t\t\tinCheckLoaded = false;
\t\t}

\t\tModule = function (map) {
\t\t\tthis.events = getOwn(undefEvents, map.id) || {};
\t\t\tthis.map = map;
\t\t\tthis.shim = getOwn(config.shim, map.id);
\t\t\tthis.depExports = [];
\t\t\tthis.depMaps = [];
\t\t\tthis.depMatched = [];
\t\t\tthis.pluginMaps = {};
\t\t\tthis.depCount = 0;

\t\t\t/* this.exports this.factory
\t\t\t   this.depMaps = [],
\t\t\t   this.enabled, this.fetched
\t\t\t*/
\t\t};

\t\tModule.prototype = {
\t\t\tinit: function (depMaps, factory, errback, options) {
\t\t\t\toptions = options || {};

\t\t\t\t//Do not do more inits if already done. Can happen if there
\t\t\t\t//are multiple define calls for the same module. That is not
\t\t\t\t//a normal, common case, but it is also not unexpected.
\t\t\t\tif (this.inited) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tthis.factory = factory;

\t\t\t\tif (errback) {
\t\t\t\t\t//Register for errors on this module.
\t\t\t\t\tthis.on('error', errback);
\t\t\t\t} else if (this.events.error) {
\t\t\t\t\t//If no errback already, but there are error listeners
\t\t\t\t\t//on this module, set up an errback to pass to the deps.
\t\t\t\t\terrback = bind(this, function (err) {
\t\t\t\t\t\tthis.emit('error', err);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//Do a copy of the dependency array, so that
\t\t\t\t//source inputs are not modified. For example
\t\t\t\t//\"shim\" deps are passed in here directly, and
\t\t\t\t//doing a direct modification of the depMaps array
\t\t\t\t//would affect that config.
\t\t\t\tthis.depMaps = depMaps && depMaps.slice(0);

\t\t\t\tthis.errback = errback;

\t\t\t\t//Indicate this module has be initialized
\t\t\t\tthis.inited = true;

\t\t\t\tthis.ignore = options.ignore;

\t\t\t\t//Could have option to init this module in enabled mode,
\t\t\t\t//or could have been previously marked as enabled. However,
\t\t\t\t//the dependencies are not known until init is called. So
\t\t\t\t//if enabled previously, now trigger dependencies as enabled.
\t\t\t\tif (options.enabled || this.enabled) {
\t\t\t\t\t//Enable this module and dependencies.
\t\t\t\t\t//Will call this.check()
\t\t\t\t\tthis.enable();
\t\t\t\t} else {
\t\t\t\t\tthis.check();
\t\t\t\t}
\t\t\t},

\t\t\tdefineDep: function (i, depExports) {
\t\t\t\t//Because of cycles, defined callback for a given
\t\t\t\t//export can be called more than once.
\t\t\t\tif (!this.depMatched[i]) {
\t\t\t\t\tthis.depMatched[i] = true;
\t\t\t\t\tthis.depCount -= 1;
\t\t\t\t\tthis.depExports[i] = depExports;
\t\t\t\t}
\t\t\t},

\t\t\tfetch: function () {
\t\t\t\tif (this.fetched) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tthis.fetched = true;

\t\t\t\tcontext.startTime = (new Date()).getTime();

\t\t\t\tvar map = this.map;

\t\t\t\t//If the manager is for a plugin managed resource,
\t\t\t\t//ask the plugin to load it now.
\t\t\t\tif (this.shim) {
\t\t\t\t\tcontext.makeRequire(this.map, {
\t\t\t\t\t\tenableBuildCallback: true
\t\t\t\t\t})(this.shim.deps || [], bind(this, function () {
\t\t\t\t\t\treturn map.prefix ? this.callPlugin() : this.load();
\t\t\t\t\t}));
\t\t\t\t} else {
\t\t\t\t\t//Regular dependency.
\t\t\t\t\treturn map.prefix ? this.callPlugin() : this.load();
\t\t\t\t}
\t\t\t},

\t\t\tload: function () {
\t\t\t\tvar url = this.map.url;

\t\t\t\t//Regular dependency.
\t\t\t\tif (!urlFetched[url]) {
\t\t\t\t\turlFetched[url] = true;
\t\t\t\t\tcontext.load(this.map.id, url);
\t\t\t\t}
\t\t\t},

\t\t\t/**
\t\t\t * Checks if the module is ready to define itself, and if so,
\t\t\t * define it.
\t\t\t */
\t\t\tcheck: function () {
\t\t\t\tif (!this.enabled || this.enabling) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar err, cjsModule,
\t\t\t\t\tid = this.map.id,
\t\t\t\t\tdepExports = this.depExports,
\t\t\t\t\texports = this.exports,
\t\t\t\t\tfactory = this.factory;

\t\t\t\tif (!this.inited) {
\t\t\t\t\t// Only fetch if not already in the defQueue.
\t\t\t\t\tif (!hasProp(context.defQueueMap, id)) {
\t\t\t\t\t\tthis.fetch();
\t\t\t\t\t}
\t\t\t\t} else if (this.error) {
\t\t\t\t\tthis.emit('error', this.error);
\t\t\t\t} else if (!this.defining) {
\t\t\t\t\t//The factory could trigger another require call
\t\t\t\t\t//that would result in checking this module to
\t\t\t\t\t//define itself again. If already in the process
\t\t\t\t\t//of doing that, skip this work.
\t\t\t\t\tthis.defining = true;

\t\t\t\t\tif (this.depCount < 1 && !this.defined) {
\t\t\t\t\t\tif (isFunction(factory)) {
\t\t\t\t\t\t\t//If there is an error listener, favor passing
\t\t\t\t\t\t\t//to that instead of throwing an error. However,
\t\t\t\t\t\t\t//only do it for define()'d  modules. require
\t\t\t\t\t\t\t//errbacks should not be called for failures in
\t\t\t\t\t\t\t//their callbacks (#699). However if a global
\t\t\t\t\t\t\t//onError is set, use that.
\t\t\t\t\t\t\tif ((this.events.error && this.map.isDefine) ||
\t\t\t\t\t\t\t\treq.onError !== defaultOnError) {
\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\texports = context.execCb(id, factory, depExports, exports);
\t\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t\t\terr = e;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\texports = context.execCb(id, factory, depExports, exports);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Favor return value over exports. If node/cjs in play,
\t\t\t\t\t\t\t// then will not have a return value anyway. Favor
\t\t\t\t\t\t\t// module.exports assignment over exports object.
\t\t\t\t\t\t\tif (this.map.isDefine && exports === undefined) {
\t\t\t\t\t\t\t\tcjsModule = this.module;
\t\t\t\t\t\t\t\tif (cjsModule) {
\t\t\t\t\t\t\t\t\texports = cjsModule.exports;
\t\t\t\t\t\t\t\t} else if (this.usingExports) {
\t\t\t\t\t\t\t\t\t//exports already set the defined value.
\t\t\t\t\t\t\t\t\texports = this.exports;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (err) {
\t\t\t\t\t\t\t\terr.requireMap = this.map;
\t\t\t\t\t\t\t\terr.requireModules = this.map.isDefine ? [this.map.id] : null;
\t\t\t\t\t\t\t\terr.requireType = this.map.isDefine ? 'define' : 'require';
\t\t\t\t\t\t\t\treturn onError((this.error = err));
\t\t\t\t\t\t\t}

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t//Just a literal value
\t\t\t\t\t\t\texports = factory;
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.exports = exports;

\t\t\t\t\t\tif (this.map.isDefine && !this.ignore) {
\t\t\t\t\t\t\tdefined[id] = exports;

\t\t\t\t\t\t\tif (req.onResourceLoad) {
\t\t\t\t\t\t\t\tvar resLoadMaps = [];
\t\t\t\t\t\t\t\teach(this.depMaps, function (depMap) {
\t\t\t\t\t\t\t\t\tresLoadMaps.push(depMap.normalizedMap || depMap);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\treq.onResourceLoad(context, this.map, resLoadMaps);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t//Clean up
\t\t\t\t\t\tcleanRegistry(id);

\t\t\t\t\t\tthis.defined = true;
\t\t\t\t\t}

\t\t\t\t\t//Finished the define stage. Allow calling check again
\t\t\t\t\t//to allow define notifications below in the case of a
\t\t\t\t\t//cycle.
\t\t\t\t\tthis.defining = false;

\t\t\t\t\tif (this.defined && !this.defineEmitted) {
\t\t\t\t\t\tthis.defineEmitted = true;
\t\t\t\t\t\tthis.emit('defined', this.exports);
\t\t\t\t\t\tthis.defineEmitComplete = true;
\t\t\t\t\t}

\t\t\t\t}
\t\t\t},

\t\t\tcallPlugin: function () {
\t\t\t\tvar map = this.map,
\t\t\t\t\tid = map.id,
\t\t\t\t\t//Map already normalized the prefix.
\t\t\t\t\tpluginMap = makeModuleMap(map.prefix);

\t\t\t\t//Mark this as a dependency for this plugin, so it
\t\t\t\t//can be traced for cycles.
\t\t\t\tthis.depMaps.push(pluginMap);

\t\t\t\ton(pluginMap, 'defined', bind(this, function (plugin) {
\t\t\t\t\tvar load, normalizedMap, normalizedMod,
\t\t\t\t\t\tbundleId = getOwn(bundlesMap, this.map.id),
\t\t\t\t\t\tname = this.map.name,
\t\t\t\t\t\tparentName = this.map.parentMap ? this.map.parentMap.name : null,
\t\t\t\t\t\tlocalRequire = context.makeRequire(map.parentMap, {
\t\t\t\t\t\t\tenableBuildCallback: true
\t\t\t\t\t\t});

\t\t\t\t\t//If current map is not normalized, wait for that
\t\t\t\t\t//normalized name to load instead of continuing.
\t\t\t\t\tif (this.map.unnormalized) {
\t\t\t\t\t\t//Normalize the ID if the plugin allows it.
\t\t\t\t\t\tif (plugin.normalize) {
\t\t\t\t\t\t\tname = plugin.normalize(name, function (name) {
\t\t\t\t\t\t\t\treturn normalize(name, parentName, true);
\t\t\t\t\t\t\t}) || '';
\t\t\t\t\t\t}

\t\t\t\t\t\t//prefix and name should already be normalized, no need
\t\t\t\t\t\t//for applying map config again either.
\t\t\t\t\t\tnormalizedMap = makeModuleMap(map.prefix + '!' + name,
\t\t\t\t\t\t\tthis.map.parentMap,
\t\t\t\t\t\t\ttrue);
\t\t\t\t\t\ton(normalizedMap,
\t\t\t\t\t\t\t'defined', bind(this, function (value) {
\t\t\t\t\t\t\t\tthis.map.normalizedMap = normalizedMap;
\t\t\t\t\t\t\t\tthis.init([], function () { return value; }, null, {
\t\t\t\t\t\t\t\t\tenabled: true,
\t\t\t\t\t\t\t\t\tignore: true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}));

\t\t\t\t\t\tnormalizedMod = getOwn(registry, normalizedMap.id);
\t\t\t\t\t\tif (normalizedMod) {
\t\t\t\t\t\t\t//Mark this as a dependency for this plugin, so it
\t\t\t\t\t\t\t//can be traced for cycles.
\t\t\t\t\t\t\tthis.depMaps.push(normalizedMap);

\t\t\t\t\t\t\tif (this.events.error) {
\t\t\t\t\t\t\t\tnormalizedMod.on('error', bind(this, function (err) {
\t\t\t\t\t\t\t\t\tthis.emit('error', err);
\t\t\t\t\t\t\t\t}));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tnormalizedMod.enable();
\t\t\t\t\t\t}

\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t//If a paths config, then just load that file instead to
\t\t\t\t\t//resolve the plugin, as it is built into that paths layer.
\t\t\t\t\tif (bundleId) {
\t\t\t\t\t\tthis.map.url = context.nameToUrl(bundleId);
\t\t\t\t\t\tthis.load();
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tload = bind(this, function (value) {
\t\t\t\t\t\tthis.init([], function () { return value; }, null, {
\t\t\t\t\t\t\tenabled: true
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t\tload.error = bind(this, function (err) {
\t\t\t\t\t\tthis.inited = true;
\t\t\t\t\t\tthis.error = err;
\t\t\t\t\t\terr.requireModules = [id];

\t\t\t\t\t\t//Remove temp unnormalized modules for this module,
\t\t\t\t\t\t//since they will never be resolved otherwise now.
\t\t\t\t\t\teachProp(registry, function (mod) {
\t\t\t\t\t\t\tif (mod.map.id.indexOf(id + '_unnormalized') === 0) {
\t\t\t\t\t\t\t\tcleanRegistry(mod.map.id);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\tonError(err);
\t\t\t\t\t});

\t\t\t\t\t//Allow plugins to load other code without having to know the
\t\t\t\t\t//context or how to 'complete' the load.
\t\t\t\t\tload.fromText = bind(this, function (text, textAlt) {
\t\t\t\t\t\t/*jslint evil: true */
\t\t\t\t\t\tvar moduleName = map.name,
\t\t\t\t\t\t\tmoduleMap = makeModuleMap(moduleName),
\t\t\t\t\t\t\thasInteractive = useInteractive;

\t\t\t\t\t\t//As of 2.1.0, support just passing the text, to reinforce
\t\t\t\t\t\t//fromText only being called once per resource. Still
\t\t\t\t\t\t//support old style of passing moduleName but discard
\t\t\t\t\t\t//that moduleName in favor of the internal ref.
\t\t\t\t\t\tif (textAlt) {
\t\t\t\t\t\t\ttext = textAlt;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Turn off interactive script matching for IE for any define
\t\t\t\t\t\t//calls in the text, then turn it back on at the end.
\t\t\t\t\t\tif (hasInteractive) {
\t\t\t\t\t\t\tuseInteractive = false;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Prime the system by creating a module instance for
\t\t\t\t\t\t//it.
\t\t\t\t\t\tgetModule(moduleMap);

\t\t\t\t\t\t//Transfer any config to this other module.
\t\t\t\t\t\tif (hasProp(config.config, id)) {
\t\t\t\t\t\t\tconfig.config[moduleName] = config.config[id];
\t\t\t\t\t\t}

\t\t\t\t\t\ttry {
\t\t\t\t\t\t\treq.exec(text);
\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\treturn onError(makeError('fromtexteval',
\t\t\t\t\t\t\t\t'fromText eval for ' + id +
\t\t\t\t\t\t\t\t' failed: ' + e,
\t\t\t\t\t\t\t\te,
\t\t\t\t\t\t\t\t[id]));
\t\t\t\t\t\t}

\t\t\t\t\t\tif (hasInteractive) {
\t\t\t\t\t\t\tuseInteractive = true;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Mark this as a dependency for the plugin
\t\t\t\t\t\t//resource
\t\t\t\t\t\tthis.depMaps.push(moduleMap);

\t\t\t\t\t\t//Support anonymous modules.
\t\t\t\t\t\tcontext.completeLoad(moduleName);

\t\t\t\t\t\t//Bind the value of that module to the value for this
\t\t\t\t\t\t//resource ID.
\t\t\t\t\t\tlocalRequire([moduleName], load);
\t\t\t\t\t});

\t\t\t\t\t//Use parentName here since the plugin's name is not reliable,
\t\t\t\t\t//could be some weird string with no path that actually wants to
\t\t\t\t\t//reference the parentName's path.
\t\t\t\t\tplugin.load(map.name, localRequire, load, config);
\t\t\t\t}));

\t\t\t\tcontext.enable(pluginMap, this);
\t\t\t\tthis.pluginMaps[pluginMap.id] = pluginMap;
\t\t\t},

\t\t\tenable: function () {
\t\t\t\tenabledRegistry[this.map.id] = this;
\t\t\t\tthis.enabled = true;

\t\t\t\t//Set flag mentioning that the module is enabling,
\t\t\t\t//so that immediate calls to the defined callbacks
\t\t\t\t//for dependencies do not trigger inadvertent load
\t\t\t\t//with the depCount still being zero.
\t\t\t\tthis.enabling = true;

\t\t\t\t//Enable each dependency
\t\t\t\teach(this.depMaps, bind(this, function (depMap, i) {
\t\t\t\t\tvar id, mod, handler;

\t\t\t\t\tif (typeof depMap === 'string') {
\t\t\t\t\t\t//Dependency needs to be converted to a depMap
\t\t\t\t\t\t//and wired up to this module.
\t\t\t\t\t\tdepMap = makeModuleMap(depMap,
\t\t\t\t\t\t\t(this.map.isDefine ? this.map : this.map.parentMap),
\t\t\t\t\t\t\tfalse,
\t\t\t\t\t\t\t!this.skipMap);
\t\t\t\t\t\tthis.depMaps[i] = depMap;

\t\t\t\t\t\thandler = getOwn(handlers, depMap.id);

\t\t\t\t\t\tif (handler) {
\t\t\t\t\t\t\tthis.depExports[i] = handler(this);
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.depCount += 1;

\t\t\t\t\t\ton(depMap, 'defined', bind(this, function (depExports) {
\t\t\t\t\t\t\tif (this.undefed) {
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tthis.defineDep(i, depExports);
\t\t\t\t\t\t\tthis.check();
\t\t\t\t\t\t}));

\t\t\t\t\t\tif (this.errback) {
\t\t\t\t\t\t\ton(depMap, 'error', bind(this, this.errback));
\t\t\t\t\t\t} else if (this.events.error) {
\t\t\t\t\t\t\t// No direct errback on this module, but something
\t\t\t\t\t\t\t// else is listening for errors, so be sure to
\t\t\t\t\t\t\t// propagate the error correctly.
\t\t\t\t\t\t\ton(depMap, 'error', bind(this, function(err) {
\t\t\t\t\t\t\t\tthis.emit('error', err);
\t\t\t\t\t\t\t}));
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tid = depMap.id;
\t\t\t\t\tmod = registry[id];

\t\t\t\t\t//Skip special modules like 'require', 'exports', 'module'
\t\t\t\t\t//Also, don't call enable if it is already enabled,
\t\t\t\t\t//important in circular dependency cases.
\t\t\t\t\tif (!hasProp(handlers, id) && mod && !mod.enabled) {
\t\t\t\t\t\tcontext.enable(depMap, this);
\t\t\t\t\t}
\t\t\t\t}));

\t\t\t\t//Enable each plugin that is used in
\t\t\t\t//a dependency
\t\t\t\teachProp(this.pluginMaps, bind(this, function (pluginMap) {
\t\t\t\t\tvar mod = getOwn(registry, pluginMap.id);
\t\t\t\t\tif (mod && !mod.enabled) {
\t\t\t\t\t\tcontext.enable(pluginMap, this);
\t\t\t\t\t}
\t\t\t\t}));

\t\t\t\tthis.enabling = false;

\t\t\t\tthis.check();
\t\t\t},

\t\t\ton: function (name, cb) {
\t\t\t\tvar cbs = this.events[name];
\t\t\t\tif (!cbs) {
\t\t\t\t\tcbs = this.events[name] = [];
\t\t\t\t}
\t\t\t\tcbs.push(cb);
\t\t\t},

\t\t\temit: function (name, evt) {
\t\t\t\teach(this.events[name], function (cb) {
\t\t\t\t\tcb(evt);
\t\t\t\t});
\t\t\t\tif (name === 'error') {
\t\t\t\t\t//Now that the error handler was triggered, remove
\t\t\t\t\t//the listeners, since this broken Module instance
\t\t\t\t\t//can stay around for a while in the registry.
\t\t\t\t\tdelete this.events[name];
\t\t\t\t}
\t\t\t}
\t\t};

\t\tfunction callGetModule(args) {
\t\t\t//Skip modules already defined.
\t\t\tif (!hasProp(defined, args[0])) {
\t\t\t\tgetModule(makeModuleMap(args[0], null, true)).init(args[1], args[2]);
\t\t\t}
\t\t}

\t\tfunction removeListener(node, func, name, ieName) {
\t\t\t//Favor detachEvent because of IE9
\t\t\t//issue, see attachEvent/addEventListener comment elsewhere
\t\t\t//in this file.
\t\t\tif (node.detachEvent && !isOpera) {
\t\t\t\t//Probably IE. If not it will throw an error, which will be
\t\t\t\t//useful to know.
\t\t\t\tif (ieName) {
\t\t\t\t\tnode.detachEvent(ieName, func);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tnode.removeEventListener(name, func, false);
\t\t\t}
\t\t}

\t\t/**
\t\t * Given an event from a script node, get the requirejs info from it,
\t\t * and then removes the event listeners on the node.
\t\t * @param {Event} evt
\t\t * @returns {Object}
\t\t */
\t\tfunction getScriptData(evt) {
\t\t\t//Using currentTarget instead of target for Firefox 2.0's sake. Not
\t\t\t//all old browsers will be supported, but this one was easy enough
\t\t\t//to support and still makes sense.
\t\t\tvar node = evt.currentTarget || evt.srcElement;

\t\t\t//Remove the listeners once here.
\t\t\tremoveListener(node, context.onScriptLoad, 'load', 'onreadystatechange');
\t\t\tremoveListener(node, context.onScriptError, 'error');

\t\t\treturn {
\t\t\t\tnode: node,
\t\t\t\tid: node && node.getAttribute('data-requiremodule')
\t\t\t};
\t\t}

\t\tfunction intakeDefines() {
\t\t\tvar args;

\t\t\t//Any defined modules in the global queue, intake them now.
\t\t\ttakeGlobalQueue();

\t\t\t//Make sure any remaining defQueue items get properly processed.
\t\t\twhile (defQueue.length) {
\t\t\t\targs = defQueue.shift();
\t\t\t\tif (args[0] === null) {
\t\t\t\t\treturn onError(makeError('mismatch', 'Mismatched anonymous define() module: ' +
\t\t\t\t\t\targs[args.length - 1]));
\t\t\t\t} else {
\t\t\t\t\t//args are id, deps, factory. Should be normalized by the
\t\t\t\t\t//define() function.
\t\t\t\t\tcallGetModule(args);
\t\t\t\t}
\t\t\t}
\t\t\tcontext.defQueueMap = {};
\t\t}

\t\tcontext = {
\t\t\tconfig: config,
\t\t\tcontextName: contextName,
\t\t\tregistry: registry,
\t\t\tdefined: defined,
\t\t\turlFetched: urlFetched,
\t\t\tdefQueue: defQueue,
\t\t\tdefQueueMap: {},
\t\t\tModule: Module,
\t\t\tmakeModuleMap: makeModuleMap,
\t\t\tnextTick: req.nextTick,
\t\t\tonError: onError,

\t\t\t/**
\t\t\t * Set a configuration for the context.
\t\t\t * @param {Object} cfg config object to integrate.
\t\t\t */
\t\t\tconfigure: function (cfg) {
\t\t\t\t//Make sure the baseUrl ends in a slash.
\t\t\t\tif (cfg.baseUrl) {
\t\t\t\t\tif (cfg.baseUrl.charAt(cfg.baseUrl.length - 1) !== '/') {
\t\t\t\t\t\tcfg.baseUrl += '/';
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Convert old style urlArgs string to a function.
\t\t\t\tif (typeof cfg.urlArgs === 'string') {
\t\t\t\t\tvar urlArgs = cfg.urlArgs;
\t\t\t\t\tcfg.urlArgs = function(id, url) {
\t\t\t\t\t\treturn (url.indexOf('?') === -1 ? '?' : '&') + urlArgs;
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\t//Save off the paths since they require special processing,
\t\t\t\t//they are additive.
\t\t\t\tvar shim = config.shim,
\t\t\t\t\tobjs = {
\t\t\t\t\t\tpaths: true,
\t\t\t\t\t\tbundles: true,
\t\t\t\t\t\tconfig: true,
\t\t\t\t\t\tmap: true
\t\t\t\t\t};

\t\t\t\teachProp(cfg, function (value, prop) {
\t\t\t\t\tif (objs[prop]) {
\t\t\t\t\t\tif (!config[prop]) {
\t\t\t\t\t\t\tconfig[prop] = {};
\t\t\t\t\t\t}
\t\t\t\t\t\tmixin(config[prop], value, true, true);
\t\t\t\t\t} else {
\t\t\t\t\t\tconfig[prop] = value;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//Reverse map the bundles
\t\t\t\tif (cfg.bundles) {
\t\t\t\t\teachProp(cfg.bundles, function (value, prop) {
\t\t\t\t\t\teach(value, function (v) {
\t\t\t\t\t\t\tif (v !== prop) {
\t\t\t\t\t\t\t\tbundlesMap[v] = prop;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//Merge shim
\t\t\t\tif (cfg.shim) {
\t\t\t\t\teachProp(cfg.shim, function (value, id) {
\t\t\t\t\t\t//Normalize the structure
\t\t\t\t\t\tif (isArray(value)) {
\t\t\t\t\t\t\tvalue = {
\t\t\t\t\t\t\t\tdeps: value
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t\tif ((value.exports || value.init) && !value.exportsFn) {
\t\t\t\t\t\t\tvalue.exportsFn = context.makeShimExports(value);
\t\t\t\t\t\t}
\t\t\t\t\t\tshim[id] = value;
\t\t\t\t\t});
\t\t\t\t\tconfig.shim = shim;
\t\t\t\t}

\t\t\t\t//Adjust packages if necessary.
\t\t\t\tif (cfg.packages) {
\t\t\t\t\teach(cfg.packages, function (pkgObj) {
\t\t\t\t\t\tvar location, name;

\t\t\t\t\t\tpkgObj = typeof pkgObj === 'string' ? {name: pkgObj} : pkgObj;

\t\t\t\t\t\tname = pkgObj.name;
\t\t\t\t\t\tlocation = pkgObj.location;
\t\t\t\t\t\tif (location) {
\t\t\t\t\t\t\tconfig.paths[name] = pkgObj.location;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Save pointer to main module ID for pkg name.
\t\t\t\t\t\t//Remove leading dot in main, so main paths are normalized,
\t\t\t\t\t\t//and remove any trailing .js, since different package
\t\t\t\t\t\t//envs have different conventions: some use a module name,
\t\t\t\t\t\t//some use a file name.
\t\t\t\t\t\tconfig.pkgs[name] = pkgObj.name + '/' + (pkgObj.main || 'main')
\t\t\t\t\t\t\t.replace(currDirRegExp, '')
\t\t\t\t\t\t\t.replace(jsSuffixRegExp, '');
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//If there are any \"waiting to execute\" modules in the registry,
\t\t\t\t//update the maps for them, since their info, like URLs to load,
\t\t\t\t//may have changed.
\t\t\t\teachProp(registry, function (mod, id) {
\t\t\t\t\t//If module already has init called, since it is too
\t\t\t\t\t//late to modify them, and ignore unnormalized ones
\t\t\t\t\t//since they are transient.
\t\t\t\t\tif (!mod.inited && !mod.map.unnormalized) {
\t\t\t\t\t\tmod.map = makeModuleMap(id, null, true);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//If a deps array or a config callback is specified, then call
\t\t\t\t//require with those args. This is useful when require is defined as a
\t\t\t\t//config object before require.js is loaded.
\t\t\t\tif (cfg.deps || cfg.callback) {
\t\t\t\t\tcontext.require(cfg.deps || [], cfg.callback);
\t\t\t\t}
\t\t\t},

\t\t\tmakeShimExports: function (value) {
\t\t\t\tfunction fn() {
\t\t\t\t\tvar ret;
\t\t\t\t\tif (value.init) {
\t\t\t\t\t\tret = value.init.apply(global, arguments);
\t\t\t\t\t}
\t\t\t\t\treturn ret || (value.exports && getGlobal(value.exports));
\t\t\t\t}
\t\t\t\treturn fn;
\t\t\t},

\t\t\tmakeRequire: function (relMap, options) {
\t\t\t\toptions = options || {};

\t\t\t\tfunction localRequire(deps, callback, errback) {
\t\t\t\t\tvar id, map, requireMod;

\t\t\t\t\tif (options.enableBuildCallback && callback && isFunction(callback)) {
\t\t\t\t\t\tcallback.__requireJsBuild = true;
\t\t\t\t\t}

\t\t\t\t\tif (typeof deps === 'string') {
\t\t\t\t\t\tif (isFunction(callback)) {
\t\t\t\t\t\t\t//Invalid call
\t\t\t\t\t\t\treturn onError(makeError('requireargs', 'Invalid require call'), errback);
\t\t\t\t\t\t}

\t\t\t\t\t\t//If require|exports|module are requested, get the
\t\t\t\t\t\t//value for them from the special handlers. Caveat:
\t\t\t\t\t\t//this only works while module is being defined.
\t\t\t\t\t\tif (relMap && hasProp(handlers, deps)) {
\t\t\t\t\t\t\treturn handlers[deps](registry[relMap.id]);
\t\t\t\t\t\t}

\t\t\t\t\t\t//Synchronous access to one module. If require.get is
\t\t\t\t\t\t//available (as in the Node adapter), prefer that.
\t\t\t\t\t\tif (req.get) {
\t\t\t\t\t\t\treturn req.get(context, deps, relMap, localRequire);
\t\t\t\t\t\t}

\t\t\t\t\t\t//Normalize module name, if it contains . or ..
\t\t\t\t\t\tmap = makeModuleMap(deps, relMap, false, true);
\t\t\t\t\t\tid = map.id;

\t\t\t\t\t\tif (!hasProp(defined, id)) {
\t\t\t\t\t\t\treturn onError(makeError('notloaded', 'Module name \"' +
\t\t\t\t\t\t\t\tid +
\t\t\t\t\t\t\t\t'\" has not been loaded yet for context: ' +
\t\t\t\t\t\t\t\tcontextName +
\t\t\t\t\t\t\t\t(relMap ? '' : '. Use require([])')));
\t\t\t\t\t\t}
\t\t\t\t\t\treturn defined[id];
\t\t\t\t\t}

\t\t\t\t\t//Grab defines waiting in the global queue.
\t\t\t\t\tintakeDefines();

\t\t\t\t\t//Mark all the dependencies as needing to be loaded.
\t\t\t\t\tcontext.nextTick(function () {
\t\t\t\t\t\t//Some defines could have been added since the
\t\t\t\t\t\t//require call, collect them.
\t\t\t\t\t\tintakeDefines();

\t\t\t\t\t\trequireMod = getModule(makeModuleMap(null, relMap));

\t\t\t\t\t\t//Store if map config should be applied to this require
\t\t\t\t\t\t//call for dependencies.
\t\t\t\t\t\trequireMod.skipMap = options.skipMap;

\t\t\t\t\t\trequireMod.init(deps, callback, errback, {
\t\t\t\t\t\t\tenabled: true
\t\t\t\t\t\t});

\t\t\t\t\t\tcheckLoaded();
\t\t\t\t\t});

\t\t\t\t\treturn localRequire;
\t\t\t\t}

\t\t\t\tmixin(localRequire, {
\t\t\t\t\tisBrowser: isBrowser,

\t\t\t\t\t/**
\t\t\t\t\t * Converts a module name + .extension into an URL path.
\t\t\t\t\t * *Requires* the use of a module name. It does not support using
\t\t\t\t\t * plain URLs like nameToUrl.
\t\t\t\t\t */
\t\t\t\t\ttoUrl: function (moduleNamePlusExt) {
\t\t\t\t\t\tvar ext,
\t\t\t\t\t\t\tindex = moduleNamePlusExt.lastIndexOf('.'),
\t\t\t\t\t\t\tsegment = moduleNamePlusExt.split('/')[0],
\t\t\t\t\t\t\tisRelative = segment === '.' || segment === '..';

\t\t\t\t\t\t//Have a file extension alias, and it is not the
\t\t\t\t\t\t//dots from a relative path.
\t\t\t\t\t\tif (index !== -1 && (!isRelative || index > 1)) {
\t\t\t\t\t\t\text = moduleNamePlusExt.substring(index, moduleNamePlusExt.length);
\t\t\t\t\t\t\tmoduleNamePlusExt = moduleNamePlusExt.substring(0, index);
\t\t\t\t\t\t}

\t\t\t\t\t\treturn context.nameToUrl(normalize(moduleNamePlusExt,
\t\t\t\t\t\t\trelMap && relMap.id, true), ext,  true);
\t\t\t\t\t},

\t\t\t\t\tdefined: function (id) {
\t\t\t\t\t\treturn hasProp(defined, makeModuleMap(id, relMap, false, true).id);
\t\t\t\t\t},

\t\t\t\t\tspecified: function (id) {
\t\t\t\t\t\tid = makeModuleMap(id, relMap, false, true).id;
\t\t\t\t\t\treturn hasProp(defined, id) || hasProp(registry, id);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//Only allow undef on top level require calls
\t\t\t\tif (!relMap) {
\t\t\t\t\tlocalRequire.undef = function (id) {
\t\t\t\t\t\t//Bind any waiting define() calls to this context,
\t\t\t\t\t\t//fix for #408
\t\t\t\t\t\ttakeGlobalQueue();

\t\t\t\t\t\tvar map = makeModuleMap(id, relMap, true),
\t\t\t\t\t\t\tmod = getOwn(registry, id);

\t\t\t\t\t\tmod.undefed = true;
\t\t\t\t\t\tremoveScript(id);

\t\t\t\t\t\tdelete defined[id];
\t\t\t\t\t\tdelete urlFetched[map.url];
\t\t\t\t\t\tdelete undefEvents[id];

\t\t\t\t\t\t//Clean queued defines too. Go backwards
\t\t\t\t\t\t//in array so that the splices do not
\t\t\t\t\t\t//mess up the iteration.
\t\t\t\t\t\teachReverse(defQueue, function(args, i) {
\t\t\t\t\t\t\tif (args[0] === id) {
\t\t\t\t\t\t\t\tdefQueue.splice(i, 1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tdelete context.defQueueMap[id];

\t\t\t\t\t\tif (mod) {
\t\t\t\t\t\t\t//Hold on to listeners in case the
\t\t\t\t\t\t\t//module will be attempted to be reloaded
\t\t\t\t\t\t\t//using a different config.
\t\t\t\t\t\t\tif (mod.events.defined) {
\t\t\t\t\t\t\t\tundefEvents[id] = mod.events;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tcleanRegistry(id);
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\treturn localRequire;
\t\t\t},

\t\t\t/**
\t\t\t * Called to enable a module if it is still in the registry
\t\t\t * awaiting enablement. A second arg, parent, the parent module,
\t\t\t * is passed in for context, when this method is overridden by
\t\t\t * the optimizer. Not shown here to keep code compact.
\t\t\t */
\t\t\tenable: function (depMap) {
\t\t\t\tvar mod = getOwn(registry, depMap.id);
\t\t\t\tif (mod) {
\t\t\t\t\tgetModule(depMap).enable();
\t\t\t\t}
\t\t\t},

\t\t\t/**
\t\t\t * Internal method used by environment adapters to complete a load event.
\t\t\t * A load event could be a script load or just a load pass from a synchronous
\t\t\t * load call.
\t\t\t * @param {String} moduleName the name of the module to potentially complete.
\t\t\t */
\t\t\tcompleteLoad: function (moduleName) {
\t\t\t\tvar found, args, mod,
\t\t\t\t\tshim = getOwn(config.shim, moduleName) || {},
\t\t\t\t\tshExports = shim.exports;

\t\t\t\ttakeGlobalQueue();

\t\t\t\twhile (defQueue.length) {
\t\t\t\t\targs = defQueue.shift();
\t\t\t\t\tif (args[0] === null) {
\t\t\t\t\t\targs[0] = moduleName;
\t\t\t\t\t\t//If already found an anonymous module and bound it
\t\t\t\t\t\t//to this name, then this is some other anon module
\t\t\t\t\t\t//waiting for its completeLoad to fire.
\t\t\t\t\t\tif (found) {
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\tfound = true;
\t\t\t\t\t} else if (args[0] === moduleName) {
\t\t\t\t\t\t//Found matching define call for this script!
\t\t\t\t\t\tfound = true;
\t\t\t\t\t}

\t\t\t\t\tcallGetModule(args);
\t\t\t\t}
\t\t\t\tcontext.defQueueMap = {};

\t\t\t\t//Do this after the cycle of callGetModule in case the result
\t\t\t\t//of those calls/init calls changes the registry.
\t\t\t\tmod = getOwn(registry, moduleName);

\t\t\t\tif (!found && !hasProp(defined, moduleName) && mod && !mod.inited) {
\t\t\t\t\tif (config.enforceDefine && (!shExports || !getGlobal(shExports))) {
\t\t\t\t\t\tif (hasPathFallback(moduleName)) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn onError(makeError('nodefine',
\t\t\t\t\t\t\t\t'No define call for ' + moduleName,
\t\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\t\t[moduleName]));
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t//A script that does not call define(), so just simulate
\t\t\t\t\t\t//the call for it.
\t\t\t\t\t\tcallGetModule([moduleName, (shim.deps || []), shim.exportsFn]);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcheckLoaded();
\t\t\t},

\t\t\t/**
\t\t\t * Converts a module name to a file path. Supports cases where
\t\t\t * moduleName may actually be just an URL.
\t\t\t * Note that it **does not** call normalize on the moduleName,
\t\t\t * it is assumed to have already been normalized. This is an
\t\t\t * internal API, not a public one. Use toUrl for the public API.
\t\t\t */
\t\t\tnameToUrl: function (moduleName, ext, skipExt) {
\t\t\t\tvar paths, syms, i, parentModule, url,
\t\t\t\t\tparentPath, bundleId,
\t\t\t\t\tpkgMain = getOwn(config.pkgs, moduleName);

\t\t\t\tif (pkgMain) {
\t\t\t\t\tmoduleName = pkgMain;
\t\t\t\t}

\t\t\t\tbundleId = getOwn(bundlesMap, moduleName);

\t\t\t\tif (bundleId) {
\t\t\t\t\treturn context.nameToUrl(bundleId, ext, skipExt);
\t\t\t\t}

\t\t\t\t//If a colon is in the URL, it indicates a protocol is used and it is just
\t\t\t\t//an URL to a file, or if it starts with a slash, contains a query arg (i.e. ?)
\t\t\t\t//or ends with .js, then assume the user meant to use an url and not a module id.
\t\t\t\t//The slash is important for protocol-less URLs as well as full paths.
\t\t\t\tif (req.jsExtRegExp.test(moduleName)) {
\t\t\t\t\t//Just a plain path, not module name lookup, so just return it.
\t\t\t\t\t//Add extension if it is included. This is a bit wonky, only non-.js things pass
\t\t\t\t\t//an extension, this method probably needs to be reworked.
\t\t\t\t\turl = moduleName + (ext || '');
\t\t\t\t} else {
\t\t\t\t\t//A module that needs to be converted to a path.
\t\t\t\t\tpaths = config.paths;

\t\t\t\t\tsyms = moduleName.split('/');
\t\t\t\t\t//For each module name segment, see if there is a path
\t\t\t\t\t//registered for it. Start with most specific name
\t\t\t\t\t//and work up from it.
\t\t\t\t\tfor (i = syms.length; i > 0; i -= 1) {
\t\t\t\t\t\tparentModule = syms.slice(0, i).join('/');

\t\t\t\t\t\tparentPath = getOwn(paths, parentModule);
\t\t\t\t\t\tif (parentPath) {
\t\t\t\t\t\t\t//If an array, it means there are a few choices,
\t\t\t\t\t\t\t//Choose the one that is desired
\t\t\t\t\t\t\tif (isArray(parentPath)) {
\t\t\t\t\t\t\t\tparentPath = parentPath[0];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tsyms.splice(0, i, parentPath);
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t//Join the path parts together, then figure out if baseUrl is needed.
\t\t\t\t\turl = syms.join('/');
\t\t\t\t\turl += (ext || (/^data\\:|^blob\\:|\\?/.test(url) || skipExt ? '' : '.js'));
\t\t\t\t\turl = (url.charAt(0) === '/' || url.match(/^[\\w\\+\\.\\-]+:/) ? '' : config.baseUrl) + url;
\t\t\t\t}

\t\t\t\treturn config.urlArgs && !/^blob\\:/.test(url) ?
\t\t\t\t\turl + config.urlArgs(moduleName, url) : url;
\t\t\t},

\t\t\t//Delegates to req.load. Broken out as a separate function to
\t\t\t//allow overriding in the optimizer.
\t\t\tload: function (id, url) {
\t\t\t\treq.load(context, id, url);
\t\t\t},

\t\t\t/**
\t\t\t * Executes a module callback function. Broken out as a separate function
\t\t\t * solely to allow the build system to sequence the files in the built
\t\t\t * layer in the right sequence.
\t\t\t *
\t\t\t * @private
\t\t\t */
\t\t\texecCb: function (name, callback, args, exports) {
\t\t\t\treturn callback.apply(exports, args);
\t\t\t},

\t\t\t/**
\t\t\t * callback for script loads, used to check status of loading.
\t\t\t *
\t\t\t * @param {Event} evt the event from the browser for the script
\t\t\t * that was loaded.
\t\t\t */
\t\t\tonScriptLoad: function (evt) {
\t\t\t\t//Using currentTarget instead of target for Firefox 2.0's sake. Not
\t\t\t\t//all old browsers will be supported, but this one was easy enough
\t\t\t\t//to support and still makes sense.
\t\t\t\tif (evt.type === 'load' ||
\t\t\t\t\t(readyRegExp.test((evt.currentTarget || evt.srcElement).readyState))) {
\t\t\t\t\t//Reset interactive script so a script node is not held onto for
\t\t\t\t\t//to long.
\t\t\t\t\tinteractiveScript = null;

\t\t\t\t\t//Pull out the name of the module and the context.
\t\t\t\t\tvar data = getScriptData(evt);
\t\t\t\t\tcontext.completeLoad(data.id);
\t\t\t\t}
\t\t\t},

\t\t\t/**
\t\t\t * Callback for script errors.
\t\t\t */
\t\t\tonScriptError: function (evt) {
\t\t\t\tvar data = getScriptData(evt);
\t\t\t\tif (!hasPathFallback(data.id)) {
\t\t\t\t\tvar parents = [];
\t\t\t\t\teachProp(registry, function(value, key) {
\t\t\t\t\t\tif (key.indexOf('_@r') !== 0) {
\t\t\t\t\t\t\teach(value.depMaps, function(depMap) {
\t\t\t\t\t\t\t\tif (depMap.id === data.id) {
\t\t\t\t\t\t\t\t\tparents.push(key);
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\treturn onError(makeError('scripterror', 'Script error for \"' + data.id +
\t\t\t\t\t\t(parents.length ?
\t\t\t\t\t\t\t'\", needed by: ' + parents.join(', ') :
\t\t\t\t\t\t\t'\"'), evt, [data.id]));
\t\t\t\t}
\t\t\t}
\t\t};

\t\tcontext.require = context.makeRequire();
\t\treturn context;
\t}

\t/**
\t * Main entry point.
\t *
\t * If the only argument to require is a string, then the module that
\t * is represented by that string is fetched for the appropriate context.
\t *
\t * If the first argument is an array, then it will be treated as an array
\t * of dependency string names to fetch. An optional function callback can
\t * be specified to execute when all of those dependencies are available.
\t *
\t * Make a local req variable to help Caja compliance (it assumes things
\t * on a require that are not standardized), and to give a short
\t * name for minification/local scope use.
\t */
\treq = requirejs = function (deps, callback, errback, optional) {

\t\t//Find the right context, use default
\t\tvar context, config,
\t\t\tcontextName = defContextName;

\t\t// Determine if have config object in the call.
\t\tif (!isArray(deps) && typeof deps !== 'string') {
\t\t\t// deps is a config object
\t\t\tconfig = deps;
\t\t\tif (isArray(callback)) {
\t\t\t\t// Adjust args if there are dependencies
\t\t\t\tdeps = callback;
\t\t\t\tcallback = errback;
\t\t\t\terrback = optional;
\t\t\t} else {
\t\t\t\tdeps = [];
\t\t\t}
\t\t}

\t\tif (config && config.context) {
\t\t\tcontextName = config.context;
\t\t}

\t\tcontext = getOwn(contexts, contextName);
\t\tif (!context) {
\t\t\tcontext = contexts[contextName] = req.s.newContext(contextName);
\t\t}

\t\tif (config) {
\t\t\tcontext.configure(config);
\t\t}

\t\treturn context.require(deps, callback, errback);
\t};

\t/**
\t * Support require.config() to make it easier to cooperate with other
\t * AMD loaders on globally agreed names.
\t */
\treq.config = function (config) {
\t\treturn req(config);
\t};

\t/**
\t * Execute something after the current tick
\t * of the event loop. Override for other envs
\t * that have a better solution than setTimeout.
\t * @param  {Function} fn function to execute later.
\t */
\treq.nextTick = typeof setTimeout !== 'undefined' ? function (fn) {
\t\tsetTimeout(fn, 4);
\t} : function (fn) { fn(); };

\t/**
\t * Export require as a global, but only if it does not already exist.
\t */
\tif (!require) {
\t\trequire = req;
\t}

\treq.version = version;

\t//Used to filter out dependencies that are already paths.
\treq.jsExtRegExp = /^\\/|:|\\?|\\.js\$/;
\treq.isBrowser = isBrowser;
\ts = req.s = {
\t\tcontexts: contexts,
\t\tnewContext: newContext
\t};

\t//Create default context.
\treq({});

\t//Exports some context-sensitive methods on global require.
\teach([
\t\t'toUrl',
\t\t'undef',
\t\t'defined',
\t\t'specified'
\t], function (prop) {
\t\t//Reference from contexts instead of early binding to default context,
\t\t//so that during builds, the latest instance of the default context
\t\t//with its config gets used.
\t\treq[prop] = function () {
\t\t\tvar ctx = contexts[defContextName];
\t\t\treturn ctx.require[prop].apply(ctx, arguments);
\t\t};
\t});

\tif (isBrowser) {
\t\thead = s.head = document.getElementsByTagName('head')[0];
\t\t//If BASE tag is in play, using appendChild is a problem for IE6.
\t\t//When that browser dies, this can be removed. Details in this jQuery bug:
\t\t//http://dev.jquery.com/ticket/2709
\t\tbaseElement = document.getElementsByTagName('base')[0];
\t\tif (baseElement) {
\t\t\thead = s.head = baseElement.parentNode;
\t\t}
\t}

\t/**
\t * Any errors that require explicitly generates will be passed to this
\t * function. Intercept/override it if you want custom error handling.
\t * @param {Error} err the error object.
\t */
\treq.onError = defaultOnError;

\t/**
\t * Creates the node for the load command. Only used in browser envs.
\t */
\treq.createNode = function (config, moduleName, url) {
\t\tvar node = config.xhtml ?
\t\t\tdocument.createElementNS('http://www.w3.org/1999/xhtml', 'html:script') :
\t\t\tdocument.createElement('script');
\t\tnode.type = config.scriptType || 'text/javascript';
\t\tnode.charset = 'utf-8';
\t\tnode.async = true;
\t\treturn node;
\t};

\t/**
\t * Does the request to load a module for the browser case.
\t * Make this a separate function to allow other environments
\t * to override it.
\t *
\t * @param {Object} context the require context to find state.
\t * @param {String} moduleName the name of the module.
\t * @param {Object} url the URL to the module.
\t */
\treq.load = function (context, moduleName, url) {
\t\tvar config = (context && context.config) || {},
\t\t\tnode;
\t\tif (isBrowser) {
\t\t\t//In the browser so use a script tag
\t\t\tnode = req.createNode(config, moduleName, url);

\t\t\tnode.setAttribute('data-requirecontext', context.contextName);
\t\t\tnode.setAttribute('data-requiremodule', moduleName);

\t\t\t//Set up load listener. Test attachEvent first because IE9 has
\t\t\t//a subtle issue in its addEventListener and script onload firings
\t\t\t//that do not match the behavior of all other browsers with
\t\t\t//addEventListener support, which fire the onload event for a
\t\t\t//script right after the script execution. See:
\t\t\t//https://connect.microsoft.com/IE/feedback/details/648057/script-onload-event-is-not-fired-immediately-after-script-execution
\t\t\t//UNFORTUNATELY Opera implements attachEvent but does not follow the script
\t\t\t//script execution mode.
\t\t\tif (node.attachEvent &&
\t\t\t\t//Check if node.attachEvent is artificially added by custom script or
\t\t\t\t//natively supported by browser
\t\t\t\t//read https://github.com/requirejs/requirejs/issues/187
\t\t\t\t//if we can NOT find [native code] then it must NOT natively supported.
\t\t\t\t//in IE8, node.attachEvent does not have toString()
\t\t\t\t//Note the test for \"[native code\" with no closing brace, see:
\t\t\t\t//https://github.com/requirejs/requirejs/issues/273
\t\t\t\t!(node.attachEvent.toString && node.attachEvent.toString().indexOf('[native code') < 0) &&
\t\t\t\t!isOpera) {
\t\t\t\t//Probably IE. IE (at least 6-8) do not fire
\t\t\t\t//script onload right after executing the script, so
\t\t\t\t//we cannot tie the anonymous define call to a name.
\t\t\t\t//However, IE reports the script as being in 'interactive'
\t\t\t\t//readyState at the time of the define call.
\t\t\t\tuseInteractive = true;

\t\t\t\tnode.attachEvent('onreadystatechange', context.onScriptLoad);
\t\t\t\t//It would be great to add an error handler here to catch
\t\t\t\t//404s in IE9+. However, onreadystatechange will fire before
\t\t\t\t//the error handler, so that does not help. If addEventListener
\t\t\t\t//is used, then IE will fire error before load, but we cannot
\t\t\t\t//use that pathway given the connect.microsoft.com issue
\t\t\t\t//mentioned above about not doing the 'script execute,
\t\t\t\t//then fire the script load event listener before execute
\t\t\t\t//next script' that other browsers do.
\t\t\t\t//Best hope: IE10 fixes the issues,
\t\t\t\t//and then destroys all installs of IE 6-9.
\t\t\t\t//node.attachEvent('onerror', context.onScriptError);
\t\t\t} else {
\t\t\t\tnode.addEventListener('load', context.onScriptLoad, false);
\t\t\t\tnode.addEventListener('error', context.onScriptError, false);
\t\t\t}
\t\t\tnode.src = url;

\t\t\t//Calling onNodeCreated after all properties on the node have been
\t\t\t//set, but before it is placed in the DOM.
\t\t\tif (config.onNodeCreated) {
\t\t\t\tconfig.onNodeCreated(node, config, moduleName, url);
\t\t\t}

\t\t\t//For some cache cases in IE 6-8, the script executes before the end
\t\t\t//of the appendChild execution, so to tie an anonymous define
\t\t\t//call to the module name (which is stored on the node), hold on
\t\t\t//to a reference to this node, but clear after the DOM insertion.
\t\t\tcurrentlyAddingScript = node;
\t\t\tif (baseElement) {
\t\t\t\thead.insertBefore(node, baseElement);
\t\t\t} else {
\t\t\t\thead.appendChild(node);
\t\t\t}
\t\t\tcurrentlyAddingScript = null;

\t\t\treturn node;
\t\t} else if (isWebWorker) {
\t\t\ttry {
\t\t\t\t//In a web worker, use importScripts. This is not a very
\t\t\t\t//efficient use of importScripts, importScripts will block until
\t\t\t\t//its script is downloaded and evaluated. However, if web workers
\t\t\t\t//are in play, the expectation is that a build has been done so
\t\t\t\t//that only one script needs to be loaded anyway. This may need
\t\t\t\t//to be reevaluated if other use cases become common.

\t\t\t\t// Post a task to the event loop to work around a bug in WebKit
\t\t\t\t// where the worker gets garbage-collected after calling
\t\t\t\t// importScripts(): https://webkit.org/b/153317
\t\t\t\tsetTimeout(function() {}, 0);
\t\t\t\timportScripts(url);

\t\t\t\t//Account for anonymous modules
\t\t\t\tcontext.completeLoad(moduleName);
\t\t\t} catch (e) {
\t\t\t\tcontext.onError(makeError('importscripts',
\t\t\t\t\t'importScripts failed for ' +
\t\t\t\t\tmoduleName + ' at ' + url,
\t\t\t\t\te,
\t\t\t\t\t[moduleName]));
\t\t\t}
\t\t}
\t};

\tfunction getInteractiveScript() {
\t\tif (interactiveScript && interactiveScript.readyState === 'interactive') {
\t\t\treturn interactiveScript;
\t\t}

\t\teachReverse(scripts(), function (script) {
\t\t\tif (script.readyState === 'interactive') {
\t\t\t\treturn (interactiveScript = script);
\t\t\t}
\t\t});
\t\treturn interactiveScript;
\t}

\t//Look for a data-main script attribute, which could also adjust the baseUrl.
\tif (isBrowser && !cfg.skipDataMain) {
\t\t//Figure out baseUrl. Get it from the script tag with require.js in it.
\t\teachReverse(scripts(), function (script) {
\t\t\t//Set the 'head' where we can append children by
\t\t\t//using the script's parent.
\t\t\tif (!head) {
\t\t\t\thead = script.parentNode;
\t\t\t}

\t\t\t//Look for a data-main attribute to set main script for the page
\t\t\t//to load. If it is there, the path to data main becomes the
\t\t\t//baseUrl, if it is not already set.
\t\t\tdataMain = script.getAttribute('data-main');
\t\t\tif (dataMain) {
\t\t\t\t//Preserve dataMain in case it is a path (i.e. contains '?')
\t\t\t\tmainScript = dataMain;

\t\t\t\t//Set final baseUrl if there is not already an explicit one,
\t\t\t\t//but only do so if the data-main value is not a loader plugin
\t\t\t\t//module ID.
\t\t\t\tif (!cfg.baseUrl && mainScript.indexOf('!') === -1) {
\t\t\t\t\t//Pull off the directory of data-main for use as the
\t\t\t\t\t//baseUrl.
\t\t\t\t\tsrc = mainScript.split('/');
\t\t\t\t\tmainScript = src.pop();
\t\t\t\t\tsubPath = src.length ? src.join('/')  + '/' : './';

\t\t\t\t\tcfg.baseUrl = subPath;
\t\t\t\t}

\t\t\t\t//Strip off any trailing .js since mainScript is now
\t\t\t\t//like a module name.
\t\t\t\tmainScript = mainScript.replace(jsSuffixRegExp, '');

\t\t\t\t//If mainScript is still a path, fall back to dataMain
\t\t\t\tif (req.jsExtRegExp.test(mainScript)) {
\t\t\t\t\tmainScript = dataMain;
\t\t\t\t}

\t\t\t\t//Put the data-main script in the files to load.
\t\t\t\tcfg.deps = cfg.deps ? cfg.deps.concat(mainScript) : [mainScript];

\t\t\t\treturn true;
\t\t\t}
\t\t});
\t}

\t/**
\t * The function that handles definitions of modules. Differs from
\t * require() in that a string for the module should be the first argument,
\t * and the function to execute after dependencies are loaded should
\t * return a value to define the module corresponding to the first argument's
\t * name.
\t */
\tdefine = function (name, deps, callback) {
\t\tvar node, context;

\t\t//Allow for anonymous modules
\t\tif (typeof name !== 'string') {
\t\t\t//Adjust args appropriately
\t\t\tcallback = deps;
\t\t\tdeps = name;
\t\t\tname = null;
\t\t}

\t\t//This module may not have dependencies
\t\tif (!isArray(deps)) {
\t\t\tcallback = deps;
\t\t\tdeps = null;
\t\t}

\t\t//If no name, and callback is a function, then figure out if it a
\t\t//CommonJS thing with dependencies.
\t\tif (!deps && isFunction(callback)) {
\t\t\tdeps = [];
\t\t\t//Remove comments from the callback string,
\t\t\t//look for require calls, and pull them into the dependencies,
\t\t\t//but only if there are function args.
\t\t\tif (callback.length) {
\t\t\t\tcallback
\t\t\t\t\t.toString()
\t\t\t\t\t.replace(commentRegExp, commentReplace)
\t\t\t\t\t.replace(cjsRequireRegExp, function (match, dep) {
\t\t\t\t\t\tdeps.push(dep);
\t\t\t\t\t});

\t\t\t\t//May be a CommonJS thing even without require calls, but still
\t\t\t\t//could use exports, and module. Avoid doing exports and module
\t\t\t\t//work though if it just needs require.
\t\t\t\t//REQUIRES the function to expect the CommonJS variables in the
\t\t\t\t//order listed below.
\t\t\t\tdeps = (callback.length === 1 ? ['require'] : ['require', 'exports', 'module']).concat(deps);
\t\t\t}
\t\t}

\t\t//If in IE 6-8 and hit an anonymous define() call, do the interactive
\t\t//work.
\t\tif (useInteractive) {
\t\t\tnode = currentlyAddingScript || getInteractiveScript();
\t\t\tif (node) {
\t\t\t\tif (!name) {
\t\t\t\t\tname = node.getAttribute('data-requiremodule');
\t\t\t\t}
\t\t\t\tcontext = contexts[node.getAttribute('data-requirecontext')];
\t\t\t}
\t\t}

\t\t//Always save off evaluating the def call until the script onload handler.
\t\t//This allows multiple modules to be in a file without prematurely
\t\t//tracing dependencies, and allows for anonymous module support,
\t\t//where the module name is not known until the script onload event
\t\t//occurs. If no context, use the global queue, and get it processed
\t\t//in the onscript load callback.
\t\tif (context) {
\t\t\tcontext.defQueue.push([name, deps, callback]);
\t\t\tcontext.defQueueMap[name] = true;
\t\t} else {
\t\t\tglobalDefQueue.push([name, deps, callback]);
\t\t}
\t};

\tdefine.amd = {
\t\tjQuery: true
\t};

\t/**
\t * Executes the text. Normally just uses eval, but can be modified
\t * to use a better, environment-specific call. Only used for transpiling
\t * loader plugins, not for plain JS modules.
\t * @param {String} text the text to execute/evaluate.
\t */
\treq.exec = function (text) {
\t\t/*jslint evil: true */
\t\treturn eval(text);
\t};

\t//Set up with config info.
\treq(cfg);
}(this, (typeof setTimeout === 'undefined' ? undefined : setTimeout)));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/require.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/** vim: et:ts=4:sw=4:sts=4
 * @license RequireJS 2.3.5 Copyright jQuery Foundation and other contributors.
 * Released under MIT license, https://github.com/requirejs/requirejs/blob/master/LICENSE
 */
//Not using strict: uneven strict support in browsers, #392, and causes
//problems with requirejs.exec()/transpiler plugins that may not be strict.
/*jslint regexp: true, nomen: true, sloppy: true */
/*global window, navigator, document, importScripts, setTimeout, opera */

var requirejs, require, define;
(function (global, setTimeout) {
\tvar req, s, head, baseElement, dataMain, src,
\t\tinteractiveScript, currentlyAddingScript, mainScript, subPath,
\t\tversion = '2.3.5',
\t\tcommentRegExp = /\\/\\*[\\s\\S]*?\\*\\/|([^:\"'=]|^)\\/\\/.*\$/mg,
\t\tcjsRequireRegExp = /[^.]\\s*require\\s*\\(\\s*[\"']([^'\"\\s]+)[\"']\\s*\\)/g,
\t\tjsSuffixRegExp = /\\.js\$/,
\t\tcurrDirRegExp = /^\\.\\//,
\t\top = Object.prototype,
\t\tostring = op.toString,
\t\thasOwn = op.hasOwnProperty,
\t\tisBrowser = !!(typeof window !== 'undefined' && typeof navigator !== 'undefined' && window.document),
\t\tisWebWorker = !isBrowser && typeof importScripts !== 'undefined',
\t\t//PS3 indicates loaded and complete, but need to wait for complete
\t\t//specifically. Sequence is 'loading', 'loaded', execution,
\t\t// then 'complete'. The UA check is unfortunate, but not sure how
\t\t//to feature test w/o causing perf issues.
\t\treadyRegExp = isBrowser && navigator.platform === 'PLAYSTATION 3' ?
\t\t\t/^complete\$/ : /^(complete|loaded)\$/,
\t\tdefContextName = '_',
\t\t//Oh the tragedy, detecting opera. See the usage of isOpera for reason.
\t\tisOpera = typeof opera !== 'undefined' && opera.toString() === '[object Opera]',
\t\tcontexts = {},
\t\tcfg = {},
\t\tglobalDefQueue = [],
\t\tuseInteractive = false;

\t//Could match something like ')//comment', do not lose the prefix to comment.
\tfunction commentReplace(match, singlePrefix) {
\t\treturn singlePrefix || '';
\t}

\tfunction isFunction(it) {
\t\treturn ostring.call(it) === '[object Function]';
\t}

\tfunction isArray(it) {
\t\treturn ostring.call(it) === '[object Array]';
\t}

\t/**
\t * Helper function for iterating over an array. If the func returns
\t * a true value, it will break out of the loop.
\t */
\tfunction each(ary, func) {
\t\tif (ary) {
\t\t\tvar i;
\t\t\tfor (i = 0; i < ary.length; i += 1) {
\t\t\t\tif (ary[i] && func(ary[i], i, ary)) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t/**
\t * Helper function for iterating over an array backwards. If the func
\t * returns a true value, it will break out of the loop.
\t */
\tfunction eachReverse(ary, func) {
\t\tif (ary) {
\t\t\tvar i;
\t\t\tfor (i = ary.length - 1; i > -1; i -= 1) {
\t\t\t\tif (ary[i] && func(ary[i], i, ary)) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\tfunction hasProp(obj, prop) {
\t\treturn hasOwn.call(obj, prop);
\t}

\tfunction getOwn(obj, prop) {
\t\treturn hasProp(obj, prop) && obj[prop];
\t}

\t/**
\t * Cycles over properties in an object and calls a function for each
\t * property value. If the function returns a truthy value, then the
\t * iteration is stopped.
\t */
\tfunction eachProp(obj, func) {
\t\tvar prop;
\t\tfor (prop in obj) {
\t\t\tif (hasProp(obj, prop)) {
\t\t\t\tif (func(obj[prop], prop)) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t/**
\t * Simple function to mix in properties from source into target,
\t * but only if target does not already have a property of the same name.
\t */
\tfunction mixin(target, source, force, deepStringMixin) {
\t\tif (source) {
\t\t\teachProp(source, function (value, prop) {
\t\t\t\tif (force || !hasProp(target, prop)) {
\t\t\t\t\tif (deepStringMixin && typeof value === 'object' && value &&
\t\t\t\t\t\t!isArray(value) && !isFunction(value) &&
\t\t\t\t\t\t!(value instanceof RegExp)) {

\t\t\t\t\t\tif (!target[prop]) {
\t\t\t\t\t\t\ttarget[prop] = {};
\t\t\t\t\t\t}
\t\t\t\t\t\tmixin(target[prop], value, force, deepStringMixin);
\t\t\t\t\t} else {
\t\t\t\t\t\ttarget[prop] = value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t\treturn target;
\t}

\t//Similar to Function.prototype.bind, but the 'this' object is specified
\t//first, since it is easier to read/figure out what 'this' will be.
\tfunction bind(obj, fn) {
\t\treturn function () {
\t\t\treturn fn.apply(obj, arguments);
\t\t};
\t}

\tfunction scripts() {
\t\treturn document.getElementsByTagName('script');
\t}

\tfunction defaultOnError(err) {
\t\tthrow err;
\t}

\t//Allow getting a global that is expressed in
\t//dot notation, like 'a.b.c'.
\tfunction getGlobal(value) {
\t\tif (!value) {
\t\t\treturn value;
\t\t}
\t\tvar g = global;
\t\teach(value.split('.'), function (part) {
\t\t\tg = g[part];
\t\t});
\t\treturn g;
\t}

\t/**
\t * Constructs an error with a pointer to an URL with more information.
\t * @param {String} id the error ID that maps to an ID on a web page.
\t * @param {String} message human readable error.
\t * @param {Error} [err] the original error, if there is one.
\t *
\t * @returns {Error}
\t */
\tfunction makeError(id, msg, err, requireModules) {
\t\tvar e = new Error(msg + '\\nhttp://requirejs.org/docs/errors.html#' + id);
\t\te.requireType = id;
\t\te.requireModules = requireModules;
\t\tif (err) {
\t\t\te.originalError = err;
\t\t}
\t\treturn e;
\t}

\tif (typeof define !== 'undefined') {
\t\t//If a define is already in play via another AMD loader,
\t\t//do not overwrite.
\t\treturn;
\t}

\tif (typeof requirejs !== 'undefined') {
\t\tif (isFunction(requirejs)) {
\t\t\t//Do not overwrite an existing requirejs instance.
\t\t\treturn;
\t\t}
\t\tcfg = requirejs;
\t\trequirejs = undefined;
\t}

\t//Allow for a require config object
\tif (typeof require !== 'undefined' && !isFunction(require)) {
\t\t//assume it is a config object.
\t\tcfg = require;
\t\trequire = undefined;
\t}

\tfunction newContext(contextName) {
\t\tvar inCheckLoaded, Module, context, handlers,
\t\t\tcheckLoadedTimeoutId,
\t\t\tconfig = {
\t\t\t\t//Defaults. Do not set a default for map
\t\t\t\t//config to speed up normalize(), which
\t\t\t\t//will run faster if there is no default.
\t\t\t\twaitSeconds: 7,
\t\t\t\tbaseUrl: './',
\t\t\t\tpaths: {},
\t\t\t\tbundles: {},
\t\t\t\tpkgs: {},
\t\t\t\tshim: {},
\t\t\t\tconfig: {}
\t\t\t},
\t\t\tregistry = {},
\t\t\t//registry of just enabled modules, to speed
\t\t\t//cycle breaking code when lots of modules
\t\t\t//are registered, but not activated.
\t\t\tenabledRegistry = {},
\t\t\tundefEvents = {},
\t\t\tdefQueue = [],
\t\t\tdefined = {},
\t\t\turlFetched = {},
\t\t\tbundlesMap = {},
\t\t\trequireCounter = 1,
\t\t\tunnormalizedCounter = 1;

\t\t/**
\t\t * Trims the . and .. from an array of path segments.
\t\t * It will keep a leading path segment if a .. will become
\t\t * the first path segment, to help with module name lookups,
\t\t * which act like paths, but can be remapped. But the end result,
\t\t * all paths that use this function should look normalized.
\t\t * NOTE: this method MODIFIES the input array.
\t\t * @param {Array} ary the array of path segments.
\t\t */
\t\tfunction trimDots(ary) {
\t\t\tvar i, part;
\t\t\tfor (i = 0; i < ary.length; i++) {
\t\t\t\tpart = ary[i];
\t\t\t\tif (part === '.') {
\t\t\t\t\tary.splice(i, 1);
\t\t\t\t\ti -= 1;
\t\t\t\t} else if (part === '..') {
\t\t\t\t\t// If at the start, or previous value is still ..,
\t\t\t\t\t// keep them so that when converted to a path it may
\t\t\t\t\t// still work when converted to a path, even though
\t\t\t\t\t// as an ID it is less than ideal. In larger point
\t\t\t\t\t// releases, may be better to just kick out an error.
\t\t\t\t\tif (i === 0 || (i === 1 && ary[2] === '..') || ary[i - 1] === '..') {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t} else if (i > 0) {
\t\t\t\t\t\tary.splice(i - 1, 2);
\t\t\t\t\t\ti -= 2;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t/**
\t\t * Given a relative module name, like ./something, normalize it to
\t\t * a real name that can be mapped to a path.
\t\t * @param {String} name the relative name
\t\t * @param {String} baseName a real name that the name arg is relative
\t\t * to.
\t\t * @param {Boolean} applyMap apply the map config to the value. Should
\t\t * only be done if this normalization is for a dependency ID.
\t\t * @returns {String} normalized name
\t\t */
\t\tfunction normalize(name, baseName, applyMap) {
\t\t\tvar pkgMain, mapValue, nameParts, i, j, nameSegment, lastIndex,
\t\t\t\tfoundMap, foundI, foundStarMap, starI, normalizedBaseParts,
\t\t\t\tbaseParts = (baseName && baseName.split('/')),
\t\t\t\tmap = config.map,
\t\t\t\tstarMap = map && map['*'];

\t\t\t//Adjust any relative paths.
\t\t\tif (name) {
\t\t\t\tname = name.split('/');
\t\t\t\tlastIndex = name.length - 1;

\t\t\t\t// If wanting node ID compatibility, strip .js from end
\t\t\t\t// of IDs. Have to do this here, and not in nameToUrl
\t\t\t\t// because node allows either .js or non .js to map
\t\t\t\t// to same file.
\t\t\t\tif (config.nodeIdCompat && jsSuffixRegExp.test(name[lastIndex])) {
\t\t\t\t\tname[lastIndex] = name[lastIndex].replace(jsSuffixRegExp, '');
\t\t\t\t}

\t\t\t\t// Starts with a '.' so need the baseName
\t\t\t\tif (name[0].charAt(0) === '.' && baseParts) {
\t\t\t\t\t//Convert baseName to array, and lop off the last part,
\t\t\t\t\t//so that . matches that 'directory' and not name of the baseName's
\t\t\t\t\t//module. For instance, baseName of 'one/two/three', maps to
\t\t\t\t\t//'one/two/three.js', but we want the directory, 'one/two' for
\t\t\t\t\t//this normalization.
\t\t\t\t\tnormalizedBaseParts = baseParts.slice(0, baseParts.length - 1);
\t\t\t\t\tname = normalizedBaseParts.concat(name);
\t\t\t\t}

\t\t\t\ttrimDots(name);
\t\t\t\tname = name.join('/');
\t\t\t}

\t\t\t//Apply map config if available.
\t\t\tif (applyMap && map && (baseParts || starMap)) {
\t\t\t\tnameParts = name.split('/');

\t\t\t\touterLoop: for (i = nameParts.length; i > 0; i -= 1) {
\t\t\t\t\tnameSegment = nameParts.slice(0, i).join('/');

\t\t\t\t\tif (baseParts) {
\t\t\t\t\t\t//Find the longest baseName segment match in the config.
\t\t\t\t\t\t//So, do joins on the biggest to smallest lengths of baseParts.
\t\t\t\t\t\tfor (j = baseParts.length; j > 0; j -= 1) {
\t\t\t\t\t\t\tmapValue = getOwn(map, baseParts.slice(0, j).join('/'));

\t\t\t\t\t\t\t//baseName segment has config, find if it has one for
\t\t\t\t\t\t\t//this name.
\t\t\t\t\t\t\tif (mapValue) {
\t\t\t\t\t\t\t\tmapValue = getOwn(mapValue, nameSegment);
\t\t\t\t\t\t\t\tif (mapValue) {
\t\t\t\t\t\t\t\t\t//Match, update name to the new value.
\t\t\t\t\t\t\t\t\tfoundMap = mapValue;
\t\t\t\t\t\t\t\t\tfoundI = i;
\t\t\t\t\t\t\t\t\tbreak outerLoop;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t//Check for a star map match, but just hold on to it,
\t\t\t\t\t//if there is a shorter segment match later in a matching
\t\t\t\t\t//config, then favor over this star map.
\t\t\t\t\tif (!foundStarMap && starMap && getOwn(starMap, nameSegment)) {
\t\t\t\t\t\tfoundStarMap = getOwn(starMap, nameSegment);
\t\t\t\t\t\tstarI = i;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (!foundMap && foundStarMap) {
\t\t\t\t\tfoundMap = foundStarMap;
\t\t\t\t\tfoundI = starI;
\t\t\t\t}

\t\t\t\tif (foundMap) {
\t\t\t\t\tnameParts.splice(0, foundI, foundMap);
\t\t\t\t\tname = nameParts.join('/');
\t\t\t\t}
\t\t\t}

\t\t\t// If the name points to a package's name, use
\t\t\t// the package main instead.
\t\t\tpkgMain = getOwn(config.pkgs, name);

\t\t\treturn pkgMain ? pkgMain : name;
\t\t}

\t\tfunction removeScript(name) {
\t\t\tif (isBrowser) {
\t\t\t\teach(scripts(), function (scriptNode) {
\t\t\t\t\tif (scriptNode.getAttribute('data-requiremodule') === name &&
\t\t\t\t\t\tscriptNode.getAttribute('data-requirecontext') === context.contextName) {
\t\t\t\t\t\tscriptNode.parentNode.removeChild(scriptNode);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}

\t\tfunction hasPathFallback(id) {
\t\t\tvar pathConfig = getOwn(config.paths, id);
\t\t\tif (pathConfig && isArray(pathConfig) && pathConfig.length > 1) {
\t\t\t\t//Pop off the first array value, since it failed, and
\t\t\t\t//retry
\t\t\t\tpathConfig.shift();
\t\t\t\tcontext.require.undef(id);

\t\t\t\t//Custom require that does not do map translation, since
\t\t\t\t//ID is \"absolute\", already mapped/resolved.
\t\t\t\tcontext.makeRequire(null, {
\t\t\t\t\tskipMap: true
\t\t\t\t})([id]);

\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\t//Turns a plugin!resource to [plugin, resource]
\t\t//with the plugin being undefined if the name
\t\t//did not have a plugin prefix.
\t\tfunction splitPrefix(name) {
\t\t\tvar prefix,
\t\t\t\tindex = name ? name.indexOf('!') : -1;
\t\t\tif (index > -1) {
\t\t\t\tprefix = name.substring(0, index);
\t\t\t\tname = name.substring(index + 1, name.length);
\t\t\t}
\t\t\treturn [prefix, name];
\t\t}

\t\t/**
\t\t * Creates a module mapping that includes plugin prefix, module
\t\t * name, and path. If parentModuleMap is provided it will
\t\t * also normalize the name via require.normalize()
\t\t *
\t\t * @param {String} name the module name
\t\t * @param {String} [parentModuleMap] parent module map
\t\t * for the module name, used to resolve relative names.
\t\t * @param {Boolean} isNormalized: is the ID already normalized.
\t\t * This is true if this call is done for a define() module ID.
\t\t * @param {Boolean} applyMap: apply the map config to the ID.
\t\t * Should only be true if this map is for a dependency.
\t\t *
\t\t * @returns {Object}
\t\t */
\t\tfunction makeModuleMap(name, parentModuleMap, isNormalized, applyMap) {
\t\t\tvar url, pluginModule, suffix, nameParts,
\t\t\t\tprefix = null,
\t\t\t\tparentName = parentModuleMap ? parentModuleMap.name : null,
\t\t\t\toriginalName = name,
\t\t\t\tisDefine = true,
\t\t\t\tnormalizedName = '';

\t\t\t//If no name, then it means it is a require call, generate an
\t\t\t//internal name.
\t\t\tif (!name) {
\t\t\t\tisDefine = false;
\t\t\t\tname = '_@r' + (requireCounter += 1);
\t\t\t}

\t\t\tnameParts = splitPrefix(name);
\t\t\tprefix = nameParts[0];
\t\t\tname = nameParts[1];

\t\t\tif (prefix) {
\t\t\t\tprefix = normalize(prefix, parentName, applyMap);
\t\t\t\tpluginModule = getOwn(defined, prefix);
\t\t\t}

\t\t\t//Account for relative paths if there is a base name.
\t\t\tif (name) {
\t\t\t\tif (prefix) {
\t\t\t\t\tif (isNormalized) {
\t\t\t\t\t\tnormalizedName = name;
\t\t\t\t\t} else if (pluginModule && pluginModule.normalize) {
\t\t\t\t\t\t//Plugin is loaded, use its normalize method.
\t\t\t\t\t\tnormalizedName = pluginModule.normalize(name, function (name) {
\t\t\t\t\t\t\treturn normalize(name, parentName, applyMap);
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t// If nested plugin references, then do not try to
\t\t\t\t\t\t// normalize, as it will not normalize correctly. This
\t\t\t\t\t\t// places a restriction on resourceIds, and the longer
\t\t\t\t\t\t// term solution is not to normalize until plugins are
\t\t\t\t\t\t// loaded and all normalizations to allow for async
\t\t\t\t\t\t// loading of a loader plugin. But for now, fixes the
\t\t\t\t\t\t// common uses. Details in #1131
\t\t\t\t\t\tnormalizedName = name.indexOf('!') === -1 ?
\t\t\t\t\t\t\tnormalize(name, parentName, applyMap) :
\t\t\t\t\t\t\tname;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t//A regular module.
\t\t\t\t\tnormalizedName = normalize(name, parentName, applyMap);

\t\t\t\t\t//Normalized name may be a plugin ID due to map config
\t\t\t\t\t//application in normalize. The map config values must
\t\t\t\t\t//already be normalized, so do not need to redo that part.
\t\t\t\t\tnameParts = splitPrefix(normalizedName);
\t\t\t\t\tprefix = nameParts[0];
\t\t\t\t\tnormalizedName = nameParts[1];
\t\t\t\t\tisNormalized = true;

\t\t\t\t\turl = context.nameToUrl(normalizedName);
\t\t\t\t}
\t\t\t}

\t\t\t//If the id is a plugin id that cannot be determined if it needs
\t\t\t//normalization, stamp it with a unique ID so two matching relative
\t\t\t//ids that may conflict can be separate.
\t\t\tsuffix = prefix && !pluginModule && !isNormalized ?
\t\t\t\t'_unnormalized' + (unnormalizedCounter += 1) :
\t\t\t\t'';

\t\t\treturn {
\t\t\t\tprefix: prefix,
\t\t\t\tname: normalizedName,
\t\t\t\tparentMap: parentModuleMap,
\t\t\t\tunnormalized: !!suffix,
\t\t\t\turl: url,
\t\t\t\toriginalName: originalName,
\t\t\t\tisDefine: isDefine,
\t\t\t\tid: (prefix ?
\t\t\t\t\tprefix + '!' + normalizedName :
\t\t\t\t\tnormalizedName) + suffix
\t\t\t};
\t\t}

\t\tfunction getModule(depMap) {
\t\t\tvar id = depMap.id,
\t\t\t\tmod = getOwn(registry, id);

\t\t\tif (!mod) {
\t\t\t\tmod = registry[id] = new context.Module(depMap);
\t\t\t}

\t\t\treturn mod;
\t\t}

\t\tfunction on(depMap, name, fn) {
\t\t\tvar id = depMap.id,
\t\t\t\tmod = getOwn(registry, id);

\t\t\tif (hasProp(defined, id) &&
\t\t\t\t(!mod || mod.defineEmitComplete)) {
\t\t\t\tif (name === 'defined') {
\t\t\t\t\tfn(defined[id]);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tmod = getModule(depMap);
\t\t\t\tif (mod.error && name === 'error') {
\t\t\t\t\tfn(mod.error);
\t\t\t\t} else {
\t\t\t\t\tmod.on(name, fn);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction onError(err, errback) {
\t\t\tvar ids = err.requireModules,
\t\t\t\tnotified = false;

\t\t\tif (errback) {
\t\t\t\terrback(err);
\t\t\t} else {
\t\t\t\teach(ids, function (id) {
\t\t\t\t\tvar mod = getOwn(registry, id);
\t\t\t\t\tif (mod) {
\t\t\t\t\t\t//Set error on module, so it skips timeout checks.
\t\t\t\t\t\tmod.error = err;
\t\t\t\t\t\tif (mod.events.error) {
\t\t\t\t\t\t\tnotified = true;
\t\t\t\t\t\t\tmod.emit('error', err);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif (!notified) {
\t\t\t\t\treq.onError(err);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t/**
\t\t * Internal method to transfer globalQueue items to this context's
\t\t * defQueue.
\t\t */
\t\tfunction takeGlobalQueue() {
\t\t\t//Push all the globalDefQueue items into the context's defQueue
\t\t\tif (globalDefQueue.length) {
\t\t\t\teach(globalDefQueue, function(queueItem) {
\t\t\t\t\tvar id = queueItem[0];
\t\t\t\t\tif (typeof id === 'string') {
\t\t\t\t\t\tcontext.defQueueMap[id] = true;
\t\t\t\t\t}
\t\t\t\t\tdefQueue.push(queueItem);
\t\t\t\t});
\t\t\t\tglobalDefQueue = [];
\t\t\t}
\t\t}

\t\thandlers = {
\t\t\t'require': function (mod) {
\t\t\t\tif (mod.require) {
\t\t\t\t\treturn mod.require;
\t\t\t\t} else {
\t\t\t\t\treturn (mod.require = context.makeRequire(mod.map));
\t\t\t\t}
\t\t\t},
\t\t\t'exports': function (mod) {
\t\t\t\tmod.usingExports = true;
\t\t\t\tif (mod.map.isDefine) {
\t\t\t\t\tif (mod.exports) {
\t\t\t\t\t\treturn (defined[mod.map.id] = mod.exports);
\t\t\t\t\t} else {
\t\t\t\t\t\treturn (mod.exports = defined[mod.map.id] = {});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\t'module': function (mod) {
\t\t\t\tif (mod.module) {
\t\t\t\t\treturn mod.module;
\t\t\t\t} else {
\t\t\t\t\treturn (mod.module = {
\t\t\t\t\t\tid: mod.map.id,
\t\t\t\t\t\turi: mod.map.url,
\t\t\t\t\t\tconfig: function () {
\t\t\t\t\t\t\treturn getOwn(config.config, mod.map.id) || {};
\t\t\t\t\t\t},
\t\t\t\t\t\texports: mod.exports || (mod.exports = {})
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t};

\t\tfunction cleanRegistry(id) {
\t\t\t//Clean up machinery used for waiting modules.
\t\t\tdelete registry[id];
\t\t\tdelete enabledRegistry[id];
\t\t}

\t\tfunction breakCycle(mod, traced, processed) {
\t\t\tvar id = mod.map.id;

\t\t\tif (mod.error) {
\t\t\t\tmod.emit('error', mod.error);
\t\t\t} else {
\t\t\t\ttraced[id] = true;
\t\t\t\teach(mod.depMaps, function (depMap, i) {
\t\t\t\t\tvar depId = depMap.id,
\t\t\t\t\t\tdep = getOwn(registry, depId);

\t\t\t\t\t//Only force things that have not completed
\t\t\t\t\t//being defined, so still in the registry,
\t\t\t\t\t//and only if it has not been matched up
\t\t\t\t\t//in the module already.
\t\t\t\t\tif (dep && !mod.depMatched[i] && !processed[depId]) {
\t\t\t\t\t\tif (getOwn(traced, depId)) {
\t\t\t\t\t\t\tmod.defineDep(i, defined[depId]);
\t\t\t\t\t\t\tmod.check(); //pass false?
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tbreakCycle(dep, traced, processed);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tprocessed[id] = true;
\t\t\t}
\t\t}

\t\tfunction checkLoaded() {
\t\t\tvar err, usingPathFallback,
\t\t\t\twaitInterval = config.waitSeconds * 1000,
\t\t\t\t//It is possible to disable the wait interval by using waitSeconds of 0.
\t\t\t\texpired = waitInterval && (context.startTime + waitInterval) < new Date().getTime(),
\t\t\t\tnoLoads = [],
\t\t\t\treqCalls = [],
\t\t\t\tstillLoading = false,
\t\t\t\tneedCycleCheck = true;

\t\t\t//Do not bother if this call was a result of a cycle break.
\t\t\tif (inCheckLoaded) {
\t\t\t\treturn;
\t\t\t}

\t\t\tinCheckLoaded = true;

\t\t\t//Figure out the state of all the modules.
\t\t\teachProp(enabledRegistry, function (mod) {
\t\t\t\tvar map = mod.map,
\t\t\t\t\tmodId = map.id;

\t\t\t\t//Skip things that are not enabled or in error state.
\t\t\t\tif (!mod.enabled) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif (!map.isDefine) {
\t\t\t\t\treqCalls.push(mod);
\t\t\t\t}

\t\t\t\tif (!mod.error) {
\t\t\t\t\t//If the module should be executed, and it has not
\t\t\t\t\t//been inited and time is up, remember it.
\t\t\t\t\tif (!mod.inited && expired) {
\t\t\t\t\t\tif (hasPathFallback(modId)) {
\t\t\t\t\t\t\tusingPathFallback = true;
\t\t\t\t\t\t\tstillLoading = true;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tnoLoads.push(modId);
\t\t\t\t\t\t\tremoveScript(modId);
\t\t\t\t\t\t}
\t\t\t\t\t} else if (!mod.inited && mod.fetched && map.isDefine) {
\t\t\t\t\t\tstillLoading = true;
\t\t\t\t\t\tif (!map.prefix) {
\t\t\t\t\t\t\t//No reason to keep looking for unfinished
\t\t\t\t\t\t\t//loading. If the only stillLoading is a
\t\t\t\t\t\t\t//plugin resource though, keep going,
\t\t\t\t\t\t\t//because it may be that a plugin resource
\t\t\t\t\t\t\t//is waiting on a non-plugin cycle.
\t\t\t\t\t\t\treturn (needCycleCheck = false);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tif (expired && noLoads.length) {
\t\t\t\t//If wait time expired, throw error of unloaded modules.
\t\t\t\terr = makeError('timeout', 'Load timeout for modules: ' + noLoads, null, noLoads);
\t\t\t\terr.contextName = context.contextName;
\t\t\t\treturn onError(err);
\t\t\t}

\t\t\t//Not expired, check for a cycle.
\t\t\tif (needCycleCheck) {
\t\t\t\teach(reqCalls, function (mod) {
\t\t\t\t\tbreakCycle(mod, {}, {});
\t\t\t\t});
\t\t\t}

\t\t\t//If still waiting on loads, and the waiting load is something
\t\t\t//other than a plugin resource, or there are still outstanding
\t\t\t//scripts, then just try back later.
\t\t\tif ((!expired || usingPathFallback) && stillLoading) {
\t\t\t\t//Something is still waiting to load. Wait for it, but only
\t\t\t\t//if a timeout is not already in effect.
\t\t\t\tif ((isBrowser || isWebWorker) && !checkLoadedTimeoutId) {
\t\t\t\t\tcheckLoadedTimeoutId = setTimeout(function () {
\t\t\t\t\t\tcheckLoadedTimeoutId = 0;
\t\t\t\t\t\tcheckLoaded();
\t\t\t\t\t}, 50);
\t\t\t\t}
\t\t\t}

\t\t\tinCheckLoaded = false;
\t\t}

\t\tModule = function (map) {
\t\t\tthis.events = getOwn(undefEvents, map.id) || {};
\t\t\tthis.map = map;
\t\t\tthis.shim = getOwn(config.shim, map.id);
\t\t\tthis.depExports = [];
\t\t\tthis.depMaps = [];
\t\t\tthis.depMatched = [];
\t\t\tthis.pluginMaps = {};
\t\t\tthis.depCount = 0;

\t\t\t/* this.exports this.factory
\t\t\t   this.depMaps = [],
\t\t\t   this.enabled, this.fetched
\t\t\t*/
\t\t};

\t\tModule.prototype = {
\t\t\tinit: function (depMaps, factory, errback, options) {
\t\t\t\toptions = options || {};

\t\t\t\t//Do not do more inits if already done. Can happen if there
\t\t\t\t//are multiple define calls for the same module. That is not
\t\t\t\t//a normal, common case, but it is also not unexpected.
\t\t\t\tif (this.inited) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tthis.factory = factory;

\t\t\t\tif (errback) {
\t\t\t\t\t//Register for errors on this module.
\t\t\t\t\tthis.on('error', errback);
\t\t\t\t} else if (this.events.error) {
\t\t\t\t\t//If no errback already, but there are error listeners
\t\t\t\t\t//on this module, set up an errback to pass to the deps.
\t\t\t\t\terrback = bind(this, function (err) {
\t\t\t\t\t\tthis.emit('error', err);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//Do a copy of the dependency array, so that
\t\t\t\t//source inputs are not modified. For example
\t\t\t\t//\"shim\" deps are passed in here directly, and
\t\t\t\t//doing a direct modification of the depMaps array
\t\t\t\t//would affect that config.
\t\t\t\tthis.depMaps = depMaps && depMaps.slice(0);

\t\t\t\tthis.errback = errback;

\t\t\t\t//Indicate this module has be initialized
\t\t\t\tthis.inited = true;

\t\t\t\tthis.ignore = options.ignore;

\t\t\t\t//Could have option to init this module in enabled mode,
\t\t\t\t//or could have been previously marked as enabled. However,
\t\t\t\t//the dependencies are not known until init is called. So
\t\t\t\t//if enabled previously, now trigger dependencies as enabled.
\t\t\t\tif (options.enabled || this.enabled) {
\t\t\t\t\t//Enable this module and dependencies.
\t\t\t\t\t//Will call this.check()
\t\t\t\t\tthis.enable();
\t\t\t\t} else {
\t\t\t\t\tthis.check();
\t\t\t\t}
\t\t\t},

\t\t\tdefineDep: function (i, depExports) {
\t\t\t\t//Because of cycles, defined callback for a given
\t\t\t\t//export can be called more than once.
\t\t\t\tif (!this.depMatched[i]) {
\t\t\t\t\tthis.depMatched[i] = true;
\t\t\t\t\tthis.depCount -= 1;
\t\t\t\t\tthis.depExports[i] = depExports;
\t\t\t\t}
\t\t\t},

\t\t\tfetch: function () {
\t\t\t\tif (this.fetched) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tthis.fetched = true;

\t\t\t\tcontext.startTime = (new Date()).getTime();

\t\t\t\tvar map = this.map;

\t\t\t\t//If the manager is for a plugin managed resource,
\t\t\t\t//ask the plugin to load it now.
\t\t\t\tif (this.shim) {
\t\t\t\t\tcontext.makeRequire(this.map, {
\t\t\t\t\t\tenableBuildCallback: true
\t\t\t\t\t})(this.shim.deps || [], bind(this, function () {
\t\t\t\t\t\treturn map.prefix ? this.callPlugin() : this.load();
\t\t\t\t\t}));
\t\t\t\t} else {
\t\t\t\t\t//Regular dependency.
\t\t\t\t\treturn map.prefix ? this.callPlugin() : this.load();
\t\t\t\t}
\t\t\t},

\t\t\tload: function () {
\t\t\t\tvar url = this.map.url;

\t\t\t\t//Regular dependency.
\t\t\t\tif (!urlFetched[url]) {
\t\t\t\t\turlFetched[url] = true;
\t\t\t\t\tcontext.load(this.map.id, url);
\t\t\t\t}
\t\t\t},

\t\t\t/**
\t\t\t * Checks if the module is ready to define itself, and if so,
\t\t\t * define it.
\t\t\t */
\t\t\tcheck: function () {
\t\t\t\tif (!this.enabled || this.enabling) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar err, cjsModule,
\t\t\t\t\tid = this.map.id,
\t\t\t\t\tdepExports = this.depExports,
\t\t\t\t\texports = this.exports,
\t\t\t\t\tfactory = this.factory;

\t\t\t\tif (!this.inited) {
\t\t\t\t\t// Only fetch if not already in the defQueue.
\t\t\t\t\tif (!hasProp(context.defQueueMap, id)) {
\t\t\t\t\t\tthis.fetch();
\t\t\t\t\t}
\t\t\t\t} else if (this.error) {
\t\t\t\t\tthis.emit('error', this.error);
\t\t\t\t} else if (!this.defining) {
\t\t\t\t\t//The factory could trigger another require call
\t\t\t\t\t//that would result in checking this module to
\t\t\t\t\t//define itself again. If already in the process
\t\t\t\t\t//of doing that, skip this work.
\t\t\t\t\tthis.defining = true;

\t\t\t\t\tif (this.depCount < 1 && !this.defined) {
\t\t\t\t\t\tif (isFunction(factory)) {
\t\t\t\t\t\t\t//If there is an error listener, favor passing
\t\t\t\t\t\t\t//to that instead of throwing an error. However,
\t\t\t\t\t\t\t//only do it for define()'d  modules. require
\t\t\t\t\t\t\t//errbacks should not be called for failures in
\t\t\t\t\t\t\t//their callbacks (#699). However if a global
\t\t\t\t\t\t\t//onError is set, use that.
\t\t\t\t\t\t\tif ((this.events.error && this.map.isDefine) ||
\t\t\t\t\t\t\t\treq.onError !== defaultOnError) {
\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\texports = context.execCb(id, factory, depExports, exports);
\t\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t\t\terr = e;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\texports = context.execCb(id, factory, depExports, exports);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Favor return value over exports. If node/cjs in play,
\t\t\t\t\t\t\t// then will not have a return value anyway. Favor
\t\t\t\t\t\t\t// module.exports assignment over exports object.
\t\t\t\t\t\t\tif (this.map.isDefine && exports === undefined) {
\t\t\t\t\t\t\t\tcjsModule = this.module;
\t\t\t\t\t\t\t\tif (cjsModule) {
\t\t\t\t\t\t\t\t\texports = cjsModule.exports;
\t\t\t\t\t\t\t\t} else if (this.usingExports) {
\t\t\t\t\t\t\t\t\t//exports already set the defined value.
\t\t\t\t\t\t\t\t\texports = this.exports;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (err) {
\t\t\t\t\t\t\t\terr.requireMap = this.map;
\t\t\t\t\t\t\t\terr.requireModules = this.map.isDefine ? [this.map.id] : null;
\t\t\t\t\t\t\t\terr.requireType = this.map.isDefine ? 'define' : 'require';
\t\t\t\t\t\t\t\treturn onError((this.error = err));
\t\t\t\t\t\t\t}

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t//Just a literal value
\t\t\t\t\t\t\texports = factory;
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.exports = exports;

\t\t\t\t\t\tif (this.map.isDefine && !this.ignore) {
\t\t\t\t\t\t\tdefined[id] = exports;

\t\t\t\t\t\t\tif (req.onResourceLoad) {
\t\t\t\t\t\t\t\tvar resLoadMaps = [];
\t\t\t\t\t\t\t\teach(this.depMaps, function (depMap) {
\t\t\t\t\t\t\t\t\tresLoadMaps.push(depMap.normalizedMap || depMap);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\treq.onResourceLoad(context, this.map, resLoadMaps);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t//Clean up
\t\t\t\t\t\tcleanRegistry(id);

\t\t\t\t\t\tthis.defined = true;
\t\t\t\t\t}

\t\t\t\t\t//Finished the define stage. Allow calling check again
\t\t\t\t\t//to allow define notifications below in the case of a
\t\t\t\t\t//cycle.
\t\t\t\t\tthis.defining = false;

\t\t\t\t\tif (this.defined && !this.defineEmitted) {
\t\t\t\t\t\tthis.defineEmitted = true;
\t\t\t\t\t\tthis.emit('defined', this.exports);
\t\t\t\t\t\tthis.defineEmitComplete = true;
\t\t\t\t\t}

\t\t\t\t}
\t\t\t},

\t\t\tcallPlugin: function () {
\t\t\t\tvar map = this.map,
\t\t\t\t\tid = map.id,
\t\t\t\t\t//Map already normalized the prefix.
\t\t\t\t\tpluginMap = makeModuleMap(map.prefix);

\t\t\t\t//Mark this as a dependency for this plugin, so it
\t\t\t\t//can be traced for cycles.
\t\t\t\tthis.depMaps.push(pluginMap);

\t\t\t\ton(pluginMap, 'defined', bind(this, function (plugin) {
\t\t\t\t\tvar load, normalizedMap, normalizedMod,
\t\t\t\t\t\tbundleId = getOwn(bundlesMap, this.map.id),
\t\t\t\t\t\tname = this.map.name,
\t\t\t\t\t\tparentName = this.map.parentMap ? this.map.parentMap.name : null,
\t\t\t\t\t\tlocalRequire = context.makeRequire(map.parentMap, {
\t\t\t\t\t\t\tenableBuildCallback: true
\t\t\t\t\t\t});

\t\t\t\t\t//If current map is not normalized, wait for that
\t\t\t\t\t//normalized name to load instead of continuing.
\t\t\t\t\tif (this.map.unnormalized) {
\t\t\t\t\t\t//Normalize the ID if the plugin allows it.
\t\t\t\t\t\tif (plugin.normalize) {
\t\t\t\t\t\t\tname = plugin.normalize(name, function (name) {
\t\t\t\t\t\t\t\treturn normalize(name, parentName, true);
\t\t\t\t\t\t\t}) || '';
\t\t\t\t\t\t}

\t\t\t\t\t\t//prefix and name should already be normalized, no need
\t\t\t\t\t\t//for applying map config again either.
\t\t\t\t\t\tnormalizedMap = makeModuleMap(map.prefix + '!' + name,
\t\t\t\t\t\t\tthis.map.parentMap,
\t\t\t\t\t\t\ttrue);
\t\t\t\t\t\ton(normalizedMap,
\t\t\t\t\t\t\t'defined', bind(this, function (value) {
\t\t\t\t\t\t\t\tthis.map.normalizedMap = normalizedMap;
\t\t\t\t\t\t\t\tthis.init([], function () { return value; }, null, {
\t\t\t\t\t\t\t\t\tenabled: true,
\t\t\t\t\t\t\t\t\tignore: true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}));

\t\t\t\t\t\tnormalizedMod = getOwn(registry, normalizedMap.id);
\t\t\t\t\t\tif (normalizedMod) {
\t\t\t\t\t\t\t//Mark this as a dependency for this plugin, so it
\t\t\t\t\t\t\t//can be traced for cycles.
\t\t\t\t\t\t\tthis.depMaps.push(normalizedMap);

\t\t\t\t\t\t\tif (this.events.error) {
\t\t\t\t\t\t\t\tnormalizedMod.on('error', bind(this, function (err) {
\t\t\t\t\t\t\t\t\tthis.emit('error', err);
\t\t\t\t\t\t\t\t}));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tnormalizedMod.enable();
\t\t\t\t\t\t}

\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t//If a paths config, then just load that file instead to
\t\t\t\t\t//resolve the plugin, as it is built into that paths layer.
\t\t\t\t\tif (bundleId) {
\t\t\t\t\t\tthis.map.url = context.nameToUrl(bundleId);
\t\t\t\t\t\tthis.load();
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tload = bind(this, function (value) {
\t\t\t\t\t\tthis.init([], function () { return value; }, null, {
\t\t\t\t\t\t\tenabled: true
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t\tload.error = bind(this, function (err) {
\t\t\t\t\t\tthis.inited = true;
\t\t\t\t\t\tthis.error = err;
\t\t\t\t\t\terr.requireModules = [id];

\t\t\t\t\t\t//Remove temp unnormalized modules for this module,
\t\t\t\t\t\t//since they will never be resolved otherwise now.
\t\t\t\t\t\teachProp(registry, function (mod) {
\t\t\t\t\t\t\tif (mod.map.id.indexOf(id + '_unnormalized') === 0) {
\t\t\t\t\t\t\t\tcleanRegistry(mod.map.id);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\tonError(err);
\t\t\t\t\t});

\t\t\t\t\t//Allow plugins to load other code without having to know the
\t\t\t\t\t//context or how to 'complete' the load.
\t\t\t\t\tload.fromText = bind(this, function (text, textAlt) {
\t\t\t\t\t\t/*jslint evil: true */
\t\t\t\t\t\tvar moduleName = map.name,
\t\t\t\t\t\t\tmoduleMap = makeModuleMap(moduleName),
\t\t\t\t\t\t\thasInteractive = useInteractive;

\t\t\t\t\t\t//As of 2.1.0, support just passing the text, to reinforce
\t\t\t\t\t\t//fromText only being called once per resource. Still
\t\t\t\t\t\t//support old style of passing moduleName but discard
\t\t\t\t\t\t//that moduleName in favor of the internal ref.
\t\t\t\t\t\tif (textAlt) {
\t\t\t\t\t\t\ttext = textAlt;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Turn off interactive script matching for IE for any define
\t\t\t\t\t\t//calls in the text, then turn it back on at the end.
\t\t\t\t\t\tif (hasInteractive) {
\t\t\t\t\t\t\tuseInteractive = false;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Prime the system by creating a module instance for
\t\t\t\t\t\t//it.
\t\t\t\t\t\tgetModule(moduleMap);

\t\t\t\t\t\t//Transfer any config to this other module.
\t\t\t\t\t\tif (hasProp(config.config, id)) {
\t\t\t\t\t\t\tconfig.config[moduleName] = config.config[id];
\t\t\t\t\t\t}

\t\t\t\t\t\ttry {
\t\t\t\t\t\t\treq.exec(text);
\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\treturn onError(makeError('fromtexteval',
\t\t\t\t\t\t\t\t'fromText eval for ' + id +
\t\t\t\t\t\t\t\t' failed: ' + e,
\t\t\t\t\t\t\t\te,
\t\t\t\t\t\t\t\t[id]));
\t\t\t\t\t\t}

\t\t\t\t\t\tif (hasInteractive) {
\t\t\t\t\t\t\tuseInteractive = true;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Mark this as a dependency for the plugin
\t\t\t\t\t\t//resource
\t\t\t\t\t\tthis.depMaps.push(moduleMap);

\t\t\t\t\t\t//Support anonymous modules.
\t\t\t\t\t\tcontext.completeLoad(moduleName);

\t\t\t\t\t\t//Bind the value of that module to the value for this
\t\t\t\t\t\t//resource ID.
\t\t\t\t\t\tlocalRequire([moduleName], load);
\t\t\t\t\t});

\t\t\t\t\t//Use parentName here since the plugin's name is not reliable,
\t\t\t\t\t//could be some weird string with no path that actually wants to
\t\t\t\t\t//reference the parentName's path.
\t\t\t\t\tplugin.load(map.name, localRequire, load, config);
\t\t\t\t}));

\t\t\t\tcontext.enable(pluginMap, this);
\t\t\t\tthis.pluginMaps[pluginMap.id] = pluginMap;
\t\t\t},

\t\t\tenable: function () {
\t\t\t\tenabledRegistry[this.map.id] = this;
\t\t\t\tthis.enabled = true;

\t\t\t\t//Set flag mentioning that the module is enabling,
\t\t\t\t//so that immediate calls to the defined callbacks
\t\t\t\t//for dependencies do not trigger inadvertent load
\t\t\t\t//with the depCount still being zero.
\t\t\t\tthis.enabling = true;

\t\t\t\t//Enable each dependency
\t\t\t\teach(this.depMaps, bind(this, function (depMap, i) {
\t\t\t\t\tvar id, mod, handler;

\t\t\t\t\tif (typeof depMap === 'string') {
\t\t\t\t\t\t//Dependency needs to be converted to a depMap
\t\t\t\t\t\t//and wired up to this module.
\t\t\t\t\t\tdepMap = makeModuleMap(depMap,
\t\t\t\t\t\t\t(this.map.isDefine ? this.map : this.map.parentMap),
\t\t\t\t\t\t\tfalse,
\t\t\t\t\t\t\t!this.skipMap);
\t\t\t\t\t\tthis.depMaps[i] = depMap;

\t\t\t\t\t\thandler = getOwn(handlers, depMap.id);

\t\t\t\t\t\tif (handler) {
\t\t\t\t\t\t\tthis.depExports[i] = handler(this);
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.depCount += 1;

\t\t\t\t\t\ton(depMap, 'defined', bind(this, function (depExports) {
\t\t\t\t\t\t\tif (this.undefed) {
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tthis.defineDep(i, depExports);
\t\t\t\t\t\t\tthis.check();
\t\t\t\t\t\t}));

\t\t\t\t\t\tif (this.errback) {
\t\t\t\t\t\t\ton(depMap, 'error', bind(this, this.errback));
\t\t\t\t\t\t} else if (this.events.error) {
\t\t\t\t\t\t\t// No direct errback on this module, but something
\t\t\t\t\t\t\t// else is listening for errors, so be sure to
\t\t\t\t\t\t\t// propagate the error correctly.
\t\t\t\t\t\t\ton(depMap, 'error', bind(this, function(err) {
\t\t\t\t\t\t\t\tthis.emit('error', err);
\t\t\t\t\t\t\t}));
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tid = depMap.id;
\t\t\t\t\tmod = registry[id];

\t\t\t\t\t//Skip special modules like 'require', 'exports', 'module'
\t\t\t\t\t//Also, don't call enable if it is already enabled,
\t\t\t\t\t//important in circular dependency cases.
\t\t\t\t\tif (!hasProp(handlers, id) && mod && !mod.enabled) {
\t\t\t\t\t\tcontext.enable(depMap, this);
\t\t\t\t\t}
\t\t\t\t}));

\t\t\t\t//Enable each plugin that is used in
\t\t\t\t//a dependency
\t\t\t\teachProp(this.pluginMaps, bind(this, function (pluginMap) {
\t\t\t\t\tvar mod = getOwn(registry, pluginMap.id);
\t\t\t\t\tif (mod && !mod.enabled) {
\t\t\t\t\t\tcontext.enable(pluginMap, this);
\t\t\t\t\t}
\t\t\t\t}));

\t\t\t\tthis.enabling = false;

\t\t\t\tthis.check();
\t\t\t},

\t\t\ton: function (name, cb) {
\t\t\t\tvar cbs = this.events[name];
\t\t\t\tif (!cbs) {
\t\t\t\t\tcbs = this.events[name] = [];
\t\t\t\t}
\t\t\t\tcbs.push(cb);
\t\t\t},

\t\t\temit: function (name, evt) {
\t\t\t\teach(this.events[name], function (cb) {
\t\t\t\t\tcb(evt);
\t\t\t\t});
\t\t\t\tif (name === 'error') {
\t\t\t\t\t//Now that the error handler was triggered, remove
\t\t\t\t\t//the listeners, since this broken Module instance
\t\t\t\t\t//can stay around for a while in the registry.
\t\t\t\t\tdelete this.events[name];
\t\t\t\t}
\t\t\t}
\t\t};

\t\tfunction callGetModule(args) {
\t\t\t//Skip modules already defined.
\t\t\tif (!hasProp(defined, args[0])) {
\t\t\t\tgetModule(makeModuleMap(args[0], null, true)).init(args[1], args[2]);
\t\t\t}
\t\t}

\t\tfunction removeListener(node, func, name, ieName) {
\t\t\t//Favor detachEvent because of IE9
\t\t\t//issue, see attachEvent/addEventListener comment elsewhere
\t\t\t//in this file.
\t\t\tif (node.detachEvent && !isOpera) {
\t\t\t\t//Probably IE. If not it will throw an error, which will be
\t\t\t\t//useful to know.
\t\t\t\tif (ieName) {
\t\t\t\t\tnode.detachEvent(ieName, func);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tnode.removeEventListener(name, func, false);
\t\t\t}
\t\t}

\t\t/**
\t\t * Given an event from a script node, get the requirejs info from it,
\t\t * and then removes the event listeners on the node.
\t\t * @param {Event} evt
\t\t * @returns {Object}
\t\t */
\t\tfunction getScriptData(evt) {
\t\t\t//Using currentTarget instead of target for Firefox 2.0's sake. Not
\t\t\t//all old browsers will be supported, but this one was easy enough
\t\t\t//to support and still makes sense.
\t\t\tvar node = evt.currentTarget || evt.srcElement;

\t\t\t//Remove the listeners once here.
\t\t\tremoveListener(node, context.onScriptLoad, 'load', 'onreadystatechange');
\t\t\tremoveListener(node, context.onScriptError, 'error');

\t\t\treturn {
\t\t\t\tnode: node,
\t\t\t\tid: node && node.getAttribute('data-requiremodule')
\t\t\t};
\t\t}

\t\tfunction intakeDefines() {
\t\t\tvar args;

\t\t\t//Any defined modules in the global queue, intake them now.
\t\t\ttakeGlobalQueue();

\t\t\t//Make sure any remaining defQueue items get properly processed.
\t\t\twhile (defQueue.length) {
\t\t\t\targs = defQueue.shift();
\t\t\t\tif (args[0] === null) {
\t\t\t\t\treturn onError(makeError('mismatch', 'Mismatched anonymous define() module: ' +
\t\t\t\t\t\targs[args.length - 1]));
\t\t\t\t} else {
\t\t\t\t\t//args are id, deps, factory. Should be normalized by the
\t\t\t\t\t//define() function.
\t\t\t\t\tcallGetModule(args);
\t\t\t\t}
\t\t\t}
\t\t\tcontext.defQueueMap = {};
\t\t}

\t\tcontext = {
\t\t\tconfig: config,
\t\t\tcontextName: contextName,
\t\t\tregistry: registry,
\t\t\tdefined: defined,
\t\t\turlFetched: urlFetched,
\t\t\tdefQueue: defQueue,
\t\t\tdefQueueMap: {},
\t\t\tModule: Module,
\t\t\tmakeModuleMap: makeModuleMap,
\t\t\tnextTick: req.nextTick,
\t\t\tonError: onError,

\t\t\t/**
\t\t\t * Set a configuration for the context.
\t\t\t * @param {Object} cfg config object to integrate.
\t\t\t */
\t\t\tconfigure: function (cfg) {
\t\t\t\t//Make sure the baseUrl ends in a slash.
\t\t\t\tif (cfg.baseUrl) {
\t\t\t\t\tif (cfg.baseUrl.charAt(cfg.baseUrl.length - 1) !== '/') {
\t\t\t\t\t\tcfg.baseUrl += '/';
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Convert old style urlArgs string to a function.
\t\t\t\tif (typeof cfg.urlArgs === 'string') {
\t\t\t\t\tvar urlArgs = cfg.urlArgs;
\t\t\t\t\tcfg.urlArgs = function(id, url) {
\t\t\t\t\t\treturn (url.indexOf('?') === -1 ? '?' : '&') + urlArgs;
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\t//Save off the paths since they require special processing,
\t\t\t\t//they are additive.
\t\t\t\tvar shim = config.shim,
\t\t\t\t\tobjs = {
\t\t\t\t\t\tpaths: true,
\t\t\t\t\t\tbundles: true,
\t\t\t\t\t\tconfig: true,
\t\t\t\t\t\tmap: true
\t\t\t\t\t};

\t\t\t\teachProp(cfg, function (value, prop) {
\t\t\t\t\tif (objs[prop]) {
\t\t\t\t\t\tif (!config[prop]) {
\t\t\t\t\t\t\tconfig[prop] = {};
\t\t\t\t\t\t}
\t\t\t\t\t\tmixin(config[prop], value, true, true);
\t\t\t\t\t} else {
\t\t\t\t\t\tconfig[prop] = value;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//Reverse map the bundles
\t\t\t\tif (cfg.bundles) {
\t\t\t\t\teachProp(cfg.bundles, function (value, prop) {
\t\t\t\t\t\teach(value, function (v) {
\t\t\t\t\t\t\tif (v !== prop) {
\t\t\t\t\t\t\t\tbundlesMap[v] = prop;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//Merge shim
\t\t\t\tif (cfg.shim) {
\t\t\t\t\teachProp(cfg.shim, function (value, id) {
\t\t\t\t\t\t//Normalize the structure
\t\t\t\t\t\tif (isArray(value)) {
\t\t\t\t\t\t\tvalue = {
\t\t\t\t\t\t\t\tdeps: value
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t\tif ((value.exports || value.init) && !value.exportsFn) {
\t\t\t\t\t\t\tvalue.exportsFn = context.makeShimExports(value);
\t\t\t\t\t\t}
\t\t\t\t\t\tshim[id] = value;
\t\t\t\t\t});
\t\t\t\t\tconfig.shim = shim;
\t\t\t\t}

\t\t\t\t//Adjust packages if necessary.
\t\t\t\tif (cfg.packages) {
\t\t\t\t\teach(cfg.packages, function (pkgObj) {
\t\t\t\t\t\tvar location, name;

\t\t\t\t\t\tpkgObj = typeof pkgObj === 'string' ? {name: pkgObj} : pkgObj;

\t\t\t\t\t\tname = pkgObj.name;
\t\t\t\t\t\tlocation = pkgObj.location;
\t\t\t\t\t\tif (location) {
\t\t\t\t\t\t\tconfig.paths[name] = pkgObj.location;
\t\t\t\t\t\t}

\t\t\t\t\t\t//Save pointer to main module ID for pkg name.
\t\t\t\t\t\t//Remove leading dot in main, so main paths are normalized,
\t\t\t\t\t\t//and remove any trailing .js, since different package
\t\t\t\t\t\t//envs have different conventions: some use a module name,
\t\t\t\t\t\t//some use a file name.
\t\t\t\t\t\tconfig.pkgs[name] = pkgObj.name + '/' + (pkgObj.main || 'main')
\t\t\t\t\t\t\t.replace(currDirRegExp, '')
\t\t\t\t\t\t\t.replace(jsSuffixRegExp, '');
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//If there are any \"waiting to execute\" modules in the registry,
\t\t\t\t//update the maps for them, since their info, like URLs to load,
\t\t\t\t//may have changed.
\t\t\t\teachProp(registry, function (mod, id) {
\t\t\t\t\t//If module already has init called, since it is too
\t\t\t\t\t//late to modify them, and ignore unnormalized ones
\t\t\t\t\t//since they are transient.
\t\t\t\t\tif (!mod.inited && !mod.map.unnormalized) {
\t\t\t\t\t\tmod.map = makeModuleMap(id, null, true);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//If a deps array or a config callback is specified, then call
\t\t\t\t//require with those args. This is useful when require is defined as a
\t\t\t\t//config object before require.js is loaded.
\t\t\t\tif (cfg.deps || cfg.callback) {
\t\t\t\t\tcontext.require(cfg.deps || [], cfg.callback);
\t\t\t\t}
\t\t\t},

\t\t\tmakeShimExports: function (value) {
\t\t\t\tfunction fn() {
\t\t\t\t\tvar ret;
\t\t\t\t\tif (value.init) {
\t\t\t\t\t\tret = value.init.apply(global, arguments);
\t\t\t\t\t}
\t\t\t\t\treturn ret || (value.exports && getGlobal(value.exports));
\t\t\t\t}
\t\t\t\treturn fn;
\t\t\t},

\t\t\tmakeRequire: function (relMap, options) {
\t\t\t\toptions = options || {};

\t\t\t\tfunction localRequire(deps, callback, errback) {
\t\t\t\t\tvar id, map, requireMod;

\t\t\t\t\tif (options.enableBuildCallback && callback && isFunction(callback)) {
\t\t\t\t\t\tcallback.__requireJsBuild = true;
\t\t\t\t\t}

\t\t\t\t\tif (typeof deps === 'string') {
\t\t\t\t\t\tif (isFunction(callback)) {
\t\t\t\t\t\t\t//Invalid call
\t\t\t\t\t\t\treturn onError(makeError('requireargs', 'Invalid require call'), errback);
\t\t\t\t\t\t}

\t\t\t\t\t\t//If require|exports|module are requested, get the
\t\t\t\t\t\t//value for them from the special handlers. Caveat:
\t\t\t\t\t\t//this only works while module is being defined.
\t\t\t\t\t\tif (relMap && hasProp(handlers, deps)) {
\t\t\t\t\t\t\treturn handlers[deps](registry[relMap.id]);
\t\t\t\t\t\t}

\t\t\t\t\t\t//Synchronous access to one module. If require.get is
\t\t\t\t\t\t//available (as in the Node adapter), prefer that.
\t\t\t\t\t\tif (req.get) {
\t\t\t\t\t\t\treturn req.get(context, deps, relMap, localRequire);
\t\t\t\t\t\t}

\t\t\t\t\t\t//Normalize module name, if it contains . or ..
\t\t\t\t\t\tmap = makeModuleMap(deps, relMap, false, true);
\t\t\t\t\t\tid = map.id;

\t\t\t\t\t\tif (!hasProp(defined, id)) {
\t\t\t\t\t\t\treturn onError(makeError('notloaded', 'Module name \"' +
\t\t\t\t\t\t\t\tid +
\t\t\t\t\t\t\t\t'\" has not been loaded yet for context: ' +
\t\t\t\t\t\t\t\tcontextName +
\t\t\t\t\t\t\t\t(relMap ? '' : '. Use require([])')));
\t\t\t\t\t\t}
\t\t\t\t\t\treturn defined[id];
\t\t\t\t\t}

\t\t\t\t\t//Grab defines waiting in the global queue.
\t\t\t\t\tintakeDefines();

\t\t\t\t\t//Mark all the dependencies as needing to be loaded.
\t\t\t\t\tcontext.nextTick(function () {
\t\t\t\t\t\t//Some defines could have been added since the
\t\t\t\t\t\t//require call, collect them.
\t\t\t\t\t\tintakeDefines();

\t\t\t\t\t\trequireMod = getModule(makeModuleMap(null, relMap));

\t\t\t\t\t\t//Store if map config should be applied to this require
\t\t\t\t\t\t//call for dependencies.
\t\t\t\t\t\trequireMod.skipMap = options.skipMap;

\t\t\t\t\t\trequireMod.init(deps, callback, errback, {
\t\t\t\t\t\t\tenabled: true
\t\t\t\t\t\t});

\t\t\t\t\t\tcheckLoaded();
\t\t\t\t\t});

\t\t\t\t\treturn localRequire;
\t\t\t\t}

\t\t\t\tmixin(localRequire, {
\t\t\t\t\tisBrowser: isBrowser,

\t\t\t\t\t/**
\t\t\t\t\t * Converts a module name + .extension into an URL path.
\t\t\t\t\t * *Requires* the use of a module name. It does not support using
\t\t\t\t\t * plain URLs like nameToUrl.
\t\t\t\t\t */
\t\t\t\t\ttoUrl: function (moduleNamePlusExt) {
\t\t\t\t\t\tvar ext,
\t\t\t\t\t\t\tindex = moduleNamePlusExt.lastIndexOf('.'),
\t\t\t\t\t\t\tsegment = moduleNamePlusExt.split('/')[0],
\t\t\t\t\t\t\tisRelative = segment === '.' || segment === '..';

\t\t\t\t\t\t//Have a file extension alias, and it is not the
\t\t\t\t\t\t//dots from a relative path.
\t\t\t\t\t\tif (index !== -1 && (!isRelative || index > 1)) {
\t\t\t\t\t\t\text = moduleNamePlusExt.substring(index, moduleNamePlusExt.length);
\t\t\t\t\t\t\tmoduleNamePlusExt = moduleNamePlusExt.substring(0, index);
\t\t\t\t\t\t}

\t\t\t\t\t\treturn context.nameToUrl(normalize(moduleNamePlusExt,
\t\t\t\t\t\t\trelMap && relMap.id, true), ext,  true);
\t\t\t\t\t},

\t\t\t\t\tdefined: function (id) {
\t\t\t\t\t\treturn hasProp(defined, makeModuleMap(id, relMap, false, true).id);
\t\t\t\t\t},

\t\t\t\t\tspecified: function (id) {
\t\t\t\t\t\tid = makeModuleMap(id, relMap, false, true).id;
\t\t\t\t\t\treturn hasProp(defined, id) || hasProp(registry, id);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//Only allow undef on top level require calls
\t\t\t\tif (!relMap) {
\t\t\t\t\tlocalRequire.undef = function (id) {
\t\t\t\t\t\t//Bind any waiting define() calls to this context,
\t\t\t\t\t\t//fix for #408
\t\t\t\t\t\ttakeGlobalQueue();

\t\t\t\t\t\tvar map = makeModuleMap(id, relMap, true),
\t\t\t\t\t\t\tmod = getOwn(registry, id);

\t\t\t\t\t\tmod.undefed = true;
\t\t\t\t\t\tremoveScript(id);

\t\t\t\t\t\tdelete defined[id];
\t\t\t\t\t\tdelete urlFetched[map.url];
\t\t\t\t\t\tdelete undefEvents[id];

\t\t\t\t\t\t//Clean queued defines too. Go backwards
\t\t\t\t\t\t//in array so that the splices do not
\t\t\t\t\t\t//mess up the iteration.
\t\t\t\t\t\teachReverse(defQueue, function(args, i) {
\t\t\t\t\t\t\tif (args[0] === id) {
\t\t\t\t\t\t\t\tdefQueue.splice(i, 1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tdelete context.defQueueMap[id];

\t\t\t\t\t\tif (mod) {
\t\t\t\t\t\t\t//Hold on to listeners in case the
\t\t\t\t\t\t\t//module will be attempted to be reloaded
\t\t\t\t\t\t\t//using a different config.
\t\t\t\t\t\t\tif (mod.events.defined) {
\t\t\t\t\t\t\t\tundefEvents[id] = mod.events;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tcleanRegistry(id);
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\treturn localRequire;
\t\t\t},

\t\t\t/**
\t\t\t * Called to enable a module if it is still in the registry
\t\t\t * awaiting enablement. A second arg, parent, the parent module,
\t\t\t * is passed in for context, when this method is overridden by
\t\t\t * the optimizer. Not shown here to keep code compact.
\t\t\t */
\t\t\tenable: function (depMap) {
\t\t\t\tvar mod = getOwn(registry, depMap.id);
\t\t\t\tif (mod) {
\t\t\t\t\tgetModule(depMap).enable();
\t\t\t\t}
\t\t\t},

\t\t\t/**
\t\t\t * Internal method used by environment adapters to complete a load event.
\t\t\t * A load event could be a script load or just a load pass from a synchronous
\t\t\t * load call.
\t\t\t * @param {String} moduleName the name of the module to potentially complete.
\t\t\t */
\t\t\tcompleteLoad: function (moduleName) {
\t\t\t\tvar found, args, mod,
\t\t\t\t\tshim = getOwn(config.shim, moduleName) || {},
\t\t\t\t\tshExports = shim.exports;

\t\t\t\ttakeGlobalQueue();

\t\t\t\twhile (defQueue.length) {
\t\t\t\t\targs = defQueue.shift();
\t\t\t\t\tif (args[0] === null) {
\t\t\t\t\t\targs[0] = moduleName;
\t\t\t\t\t\t//If already found an anonymous module and bound it
\t\t\t\t\t\t//to this name, then this is some other anon module
\t\t\t\t\t\t//waiting for its completeLoad to fire.
\t\t\t\t\t\tif (found) {
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\tfound = true;
\t\t\t\t\t} else if (args[0] === moduleName) {
\t\t\t\t\t\t//Found matching define call for this script!
\t\t\t\t\t\tfound = true;
\t\t\t\t\t}

\t\t\t\t\tcallGetModule(args);
\t\t\t\t}
\t\t\t\tcontext.defQueueMap = {};

\t\t\t\t//Do this after the cycle of callGetModule in case the result
\t\t\t\t//of those calls/init calls changes the registry.
\t\t\t\tmod = getOwn(registry, moduleName);

\t\t\t\tif (!found && !hasProp(defined, moduleName) && mod && !mod.inited) {
\t\t\t\t\tif (config.enforceDefine && (!shExports || !getGlobal(shExports))) {
\t\t\t\t\t\tif (hasPathFallback(moduleName)) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn onError(makeError('nodefine',
\t\t\t\t\t\t\t\t'No define call for ' + moduleName,
\t\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\t\t[moduleName]));
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t//A script that does not call define(), so just simulate
\t\t\t\t\t\t//the call for it.
\t\t\t\t\t\tcallGetModule([moduleName, (shim.deps || []), shim.exportsFn]);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcheckLoaded();
\t\t\t},

\t\t\t/**
\t\t\t * Converts a module name to a file path. Supports cases where
\t\t\t * moduleName may actually be just an URL.
\t\t\t * Note that it **does not** call normalize on the moduleName,
\t\t\t * it is assumed to have already been normalized. This is an
\t\t\t * internal API, not a public one. Use toUrl for the public API.
\t\t\t */
\t\t\tnameToUrl: function (moduleName, ext, skipExt) {
\t\t\t\tvar paths, syms, i, parentModule, url,
\t\t\t\t\tparentPath, bundleId,
\t\t\t\t\tpkgMain = getOwn(config.pkgs, moduleName);

\t\t\t\tif (pkgMain) {
\t\t\t\t\tmoduleName = pkgMain;
\t\t\t\t}

\t\t\t\tbundleId = getOwn(bundlesMap, moduleName);

\t\t\t\tif (bundleId) {
\t\t\t\t\treturn context.nameToUrl(bundleId, ext, skipExt);
\t\t\t\t}

\t\t\t\t//If a colon is in the URL, it indicates a protocol is used and it is just
\t\t\t\t//an URL to a file, or if it starts with a slash, contains a query arg (i.e. ?)
\t\t\t\t//or ends with .js, then assume the user meant to use an url and not a module id.
\t\t\t\t//The slash is important for protocol-less URLs as well as full paths.
\t\t\t\tif (req.jsExtRegExp.test(moduleName)) {
\t\t\t\t\t//Just a plain path, not module name lookup, so just return it.
\t\t\t\t\t//Add extension if it is included. This is a bit wonky, only non-.js things pass
\t\t\t\t\t//an extension, this method probably needs to be reworked.
\t\t\t\t\turl = moduleName + (ext || '');
\t\t\t\t} else {
\t\t\t\t\t//A module that needs to be converted to a path.
\t\t\t\t\tpaths = config.paths;

\t\t\t\t\tsyms = moduleName.split('/');
\t\t\t\t\t//For each module name segment, see if there is a path
\t\t\t\t\t//registered for it. Start with most specific name
\t\t\t\t\t//and work up from it.
\t\t\t\t\tfor (i = syms.length; i > 0; i -= 1) {
\t\t\t\t\t\tparentModule = syms.slice(0, i).join('/');

\t\t\t\t\t\tparentPath = getOwn(paths, parentModule);
\t\t\t\t\t\tif (parentPath) {
\t\t\t\t\t\t\t//If an array, it means there are a few choices,
\t\t\t\t\t\t\t//Choose the one that is desired
\t\t\t\t\t\t\tif (isArray(parentPath)) {
\t\t\t\t\t\t\t\tparentPath = parentPath[0];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tsyms.splice(0, i, parentPath);
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t//Join the path parts together, then figure out if baseUrl is needed.
\t\t\t\t\turl = syms.join('/');
\t\t\t\t\turl += (ext || (/^data\\:|^blob\\:|\\?/.test(url) || skipExt ? '' : '.js'));
\t\t\t\t\turl = (url.charAt(0) === '/' || url.match(/^[\\w\\+\\.\\-]+:/) ? '' : config.baseUrl) + url;
\t\t\t\t}

\t\t\t\treturn config.urlArgs && !/^blob\\:/.test(url) ?
\t\t\t\t\turl + config.urlArgs(moduleName, url) : url;
\t\t\t},

\t\t\t//Delegates to req.load. Broken out as a separate function to
\t\t\t//allow overriding in the optimizer.
\t\t\tload: function (id, url) {
\t\t\t\treq.load(context, id, url);
\t\t\t},

\t\t\t/**
\t\t\t * Executes a module callback function. Broken out as a separate function
\t\t\t * solely to allow the build system to sequence the files in the built
\t\t\t * layer in the right sequence.
\t\t\t *
\t\t\t * @private
\t\t\t */
\t\t\texecCb: function (name, callback, args, exports) {
\t\t\t\treturn callback.apply(exports, args);
\t\t\t},

\t\t\t/**
\t\t\t * callback for script loads, used to check status of loading.
\t\t\t *
\t\t\t * @param {Event} evt the event from the browser for the script
\t\t\t * that was loaded.
\t\t\t */
\t\t\tonScriptLoad: function (evt) {
\t\t\t\t//Using currentTarget instead of target for Firefox 2.0's sake. Not
\t\t\t\t//all old browsers will be supported, but this one was easy enough
\t\t\t\t//to support and still makes sense.
\t\t\t\tif (evt.type === 'load' ||
\t\t\t\t\t(readyRegExp.test((evt.currentTarget || evt.srcElement).readyState))) {
\t\t\t\t\t//Reset interactive script so a script node is not held onto for
\t\t\t\t\t//to long.
\t\t\t\t\tinteractiveScript = null;

\t\t\t\t\t//Pull out the name of the module and the context.
\t\t\t\t\tvar data = getScriptData(evt);
\t\t\t\t\tcontext.completeLoad(data.id);
\t\t\t\t}
\t\t\t},

\t\t\t/**
\t\t\t * Callback for script errors.
\t\t\t */
\t\t\tonScriptError: function (evt) {
\t\t\t\tvar data = getScriptData(evt);
\t\t\t\tif (!hasPathFallback(data.id)) {
\t\t\t\t\tvar parents = [];
\t\t\t\t\teachProp(registry, function(value, key) {
\t\t\t\t\t\tif (key.indexOf('_@r') !== 0) {
\t\t\t\t\t\t\teach(value.depMaps, function(depMap) {
\t\t\t\t\t\t\t\tif (depMap.id === data.id) {
\t\t\t\t\t\t\t\t\tparents.push(key);
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\treturn onError(makeError('scripterror', 'Script error for \"' + data.id +
\t\t\t\t\t\t(parents.length ?
\t\t\t\t\t\t\t'\", needed by: ' + parents.join(', ') :
\t\t\t\t\t\t\t'\"'), evt, [data.id]));
\t\t\t\t}
\t\t\t}
\t\t};

\t\tcontext.require = context.makeRequire();
\t\treturn context;
\t}

\t/**
\t * Main entry point.
\t *
\t * If the only argument to require is a string, then the module that
\t * is represented by that string is fetched for the appropriate context.
\t *
\t * If the first argument is an array, then it will be treated as an array
\t * of dependency string names to fetch. An optional function callback can
\t * be specified to execute when all of those dependencies are available.
\t *
\t * Make a local req variable to help Caja compliance (it assumes things
\t * on a require that are not standardized), and to give a short
\t * name for minification/local scope use.
\t */
\treq = requirejs = function (deps, callback, errback, optional) {

\t\t//Find the right context, use default
\t\tvar context, config,
\t\t\tcontextName = defContextName;

\t\t// Determine if have config object in the call.
\t\tif (!isArray(deps) && typeof deps !== 'string') {
\t\t\t// deps is a config object
\t\t\tconfig = deps;
\t\t\tif (isArray(callback)) {
\t\t\t\t// Adjust args if there are dependencies
\t\t\t\tdeps = callback;
\t\t\t\tcallback = errback;
\t\t\t\terrback = optional;
\t\t\t} else {
\t\t\t\tdeps = [];
\t\t\t}
\t\t}

\t\tif (config && config.context) {
\t\t\tcontextName = config.context;
\t\t}

\t\tcontext = getOwn(contexts, contextName);
\t\tif (!context) {
\t\t\tcontext = contexts[contextName] = req.s.newContext(contextName);
\t\t}

\t\tif (config) {
\t\t\tcontext.configure(config);
\t\t}

\t\treturn context.require(deps, callback, errback);
\t};

\t/**
\t * Support require.config() to make it easier to cooperate with other
\t * AMD loaders on globally agreed names.
\t */
\treq.config = function (config) {
\t\treturn req(config);
\t};

\t/**
\t * Execute something after the current tick
\t * of the event loop. Override for other envs
\t * that have a better solution than setTimeout.
\t * @param  {Function} fn function to execute later.
\t */
\treq.nextTick = typeof setTimeout !== 'undefined' ? function (fn) {
\t\tsetTimeout(fn, 4);
\t} : function (fn) { fn(); };

\t/**
\t * Export require as a global, but only if it does not already exist.
\t */
\tif (!require) {
\t\trequire = req;
\t}

\treq.version = version;

\t//Used to filter out dependencies that are already paths.
\treq.jsExtRegExp = /^\\/|:|\\?|\\.js\$/;
\treq.isBrowser = isBrowser;
\ts = req.s = {
\t\tcontexts: contexts,
\t\tnewContext: newContext
\t};

\t//Create default context.
\treq({});

\t//Exports some context-sensitive methods on global require.
\teach([
\t\t'toUrl',
\t\t'undef',
\t\t'defined',
\t\t'specified'
\t], function (prop) {
\t\t//Reference from contexts instead of early binding to default context,
\t\t//so that during builds, the latest instance of the default context
\t\t//with its config gets used.
\t\treq[prop] = function () {
\t\t\tvar ctx = contexts[defContextName];
\t\t\treturn ctx.require[prop].apply(ctx, arguments);
\t\t};
\t});

\tif (isBrowser) {
\t\thead = s.head = document.getElementsByTagName('head')[0];
\t\t//If BASE tag is in play, using appendChild is a problem for IE6.
\t\t//When that browser dies, this can be removed. Details in this jQuery bug:
\t\t//http://dev.jquery.com/ticket/2709
\t\tbaseElement = document.getElementsByTagName('base')[0];
\t\tif (baseElement) {
\t\t\thead = s.head = baseElement.parentNode;
\t\t}
\t}

\t/**
\t * Any errors that require explicitly generates will be passed to this
\t * function. Intercept/override it if you want custom error handling.
\t * @param {Error} err the error object.
\t */
\treq.onError = defaultOnError;

\t/**
\t * Creates the node for the load command. Only used in browser envs.
\t */
\treq.createNode = function (config, moduleName, url) {
\t\tvar node = config.xhtml ?
\t\t\tdocument.createElementNS('http://www.w3.org/1999/xhtml', 'html:script') :
\t\t\tdocument.createElement('script');
\t\tnode.type = config.scriptType || 'text/javascript';
\t\tnode.charset = 'utf-8';
\t\tnode.async = true;
\t\treturn node;
\t};

\t/**
\t * Does the request to load a module for the browser case.
\t * Make this a separate function to allow other environments
\t * to override it.
\t *
\t * @param {Object} context the require context to find state.
\t * @param {String} moduleName the name of the module.
\t * @param {Object} url the URL to the module.
\t */
\treq.load = function (context, moduleName, url) {
\t\tvar config = (context && context.config) || {},
\t\t\tnode;
\t\tif (isBrowser) {
\t\t\t//In the browser so use a script tag
\t\t\tnode = req.createNode(config, moduleName, url);

\t\t\tnode.setAttribute('data-requirecontext', context.contextName);
\t\t\tnode.setAttribute('data-requiremodule', moduleName);

\t\t\t//Set up load listener. Test attachEvent first because IE9 has
\t\t\t//a subtle issue in its addEventListener and script onload firings
\t\t\t//that do not match the behavior of all other browsers with
\t\t\t//addEventListener support, which fire the onload event for a
\t\t\t//script right after the script execution. See:
\t\t\t//https://connect.microsoft.com/IE/feedback/details/648057/script-onload-event-is-not-fired-immediately-after-script-execution
\t\t\t//UNFORTUNATELY Opera implements attachEvent but does not follow the script
\t\t\t//script execution mode.
\t\t\tif (node.attachEvent &&
\t\t\t\t//Check if node.attachEvent is artificially added by custom script or
\t\t\t\t//natively supported by browser
\t\t\t\t//read https://github.com/requirejs/requirejs/issues/187
\t\t\t\t//if we can NOT find [native code] then it must NOT natively supported.
\t\t\t\t//in IE8, node.attachEvent does not have toString()
\t\t\t\t//Note the test for \"[native code\" with no closing brace, see:
\t\t\t\t//https://github.com/requirejs/requirejs/issues/273
\t\t\t\t!(node.attachEvent.toString && node.attachEvent.toString().indexOf('[native code') < 0) &&
\t\t\t\t!isOpera) {
\t\t\t\t//Probably IE. IE (at least 6-8) do not fire
\t\t\t\t//script onload right after executing the script, so
\t\t\t\t//we cannot tie the anonymous define call to a name.
\t\t\t\t//However, IE reports the script as being in 'interactive'
\t\t\t\t//readyState at the time of the define call.
\t\t\t\tuseInteractive = true;

\t\t\t\tnode.attachEvent('onreadystatechange', context.onScriptLoad);
\t\t\t\t//It would be great to add an error handler here to catch
\t\t\t\t//404s in IE9+. However, onreadystatechange will fire before
\t\t\t\t//the error handler, so that does not help. If addEventListener
\t\t\t\t//is used, then IE will fire error before load, but we cannot
\t\t\t\t//use that pathway given the connect.microsoft.com issue
\t\t\t\t//mentioned above about not doing the 'script execute,
\t\t\t\t//then fire the script load event listener before execute
\t\t\t\t//next script' that other browsers do.
\t\t\t\t//Best hope: IE10 fixes the issues,
\t\t\t\t//and then destroys all installs of IE 6-9.
\t\t\t\t//node.attachEvent('onerror', context.onScriptError);
\t\t\t} else {
\t\t\t\tnode.addEventListener('load', context.onScriptLoad, false);
\t\t\t\tnode.addEventListener('error', context.onScriptError, false);
\t\t\t}
\t\t\tnode.src = url;

\t\t\t//Calling onNodeCreated after all properties on the node have been
\t\t\t//set, but before it is placed in the DOM.
\t\t\tif (config.onNodeCreated) {
\t\t\t\tconfig.onNodeCreated(node, config, moduleName, url);
\t\t\t}

\t\t\t//For some cache cases in IE 6-8, the script executes before the end
\t\t\t//of the appendChild execution, so to tie an anonymous define
\t\t\t//call to the module name (which is stored on the node), hold on
\t\t\t//to a reference to this node, but clear after the DOM insertion.
\t\t\tcurrentlyAddingScript = node;
\t\t\tif (baseElement) {
\t\t\t\thead.insertBefore(node, baseElement);
\t\t\t} else {
\t\t\t\thead.appendChild(node);
\t\t\t}
\t\t\tcurrentlyAddingScript = null;

\t\t\treturn node;
\t\t} else if (isWebWorker) {
\t\t\ttry {
\t\t\t\t//In a web worker, use importScripts. This is not a very
\t\t\t\t//efficient use of importScripts, importScripts will block until
\t\t\t\t//its script is downloaded and evaluated. However, if web workers
\t\t\t\t//are in play, the expectation is that a build has been done so
\t\t\t\t//that only one script needs to be loaded anyway. This may need
\t\t\t\t//to be reevaluated if other use cases become common.

\t\t\t\t// Post a task to the event loop to work around a bug in WebKit
\t\t\t\t// where the worker gets garbage-collected after calling
\t\t\t\t// importScripts(): https://webkit.org/b/153317
\t\t\t\tsetTimeout(function() {}, 0);
\t\t\t\timportScripts(url);

\t\t\t\t//Account for anonymous modules
\t\t\t\tcontext.completeLoad(moduleName);
\t\t\t} catch (e) {
\t\t\t\tcontext.onError(makeError('importscripts',
\t\t\t\t\t'importScripts failed for ' +
\t\t\t\t\tmoduleName + ' at ' + url,
\t\t\t\t\te,
\t\t\t\t\t[moduleName]));
\t\t\t}
\t\t}
\t};

\tfunction getInteractiveScript() {
\t\tif (interactiveScript && interactiveScript.readyState === 'interactive') {
\t\t\treturn interactiveScript;
\t\t}

\t\teachReverse(scripts(), function (script) {
\t\t\tif (script.readyState === 'interactive') {
\t\t\t\treturn (interactiveScript = script);
\t\t\t}
\t\t});
\t\treturn interactiveScript;
\t}

\t//Look for a data-main script attribute, which could also adjust the baseUrl.
\tif (isBrowser && !cfg.skipDataMain) {
\t\t//Figure out baseUrl. Get it from the script tag with require.js in it.
\t\teachReverse(scripts(), function (script) {
\t\t\t//Set the 'head' where we can append children by
\t\t\t//using the script's parent.
\t\t\tif (!head) {
\t\t\t\thead = script.parentNode;
\t\t\t}

\t\t\t//Look for a data-main attribute to set main script for the page
\t\t\t//to load. If it is there, the path to data main becomes the
\t\t\t//baseUrl, if it is not already set.
\t\t\tdataMain = script.getAttribute('data-main');
\t\t\tif (dataMain) {
\t\t\t\t//Preserve dataMain in case it is a path (i.e. contains '?')
\t\t\t\tmainScript = dataMain;

\t\t\t\t//Set final baseUrl if there is not already an explicit one,
\t\t\t\t//but only do so if the data-main value is not a loader plugin
\t\t\t\t//module ID.
\t\t\t\tif (!cfg.baseUrl && mainScript.indexOf('!') === -1) {
\t\t\t\t\t//Pull off the directory of data-main for use as the
\t\t\t\t\t//baseUrl.
\t\t\t\t\tsrc = mainScript.split('/');
\t\t\t\t\tmainScript = src.pop();
\t\t\t\t\tsubPath = src.length ? src.join('/')  + '/' : './';

\t\t\t\t\tcfg.baseUrl = subPath;
\t\t\t\t}

\t\t\t\t//Strip off any trailing .js since mainScript is now
\t\t\t\t//like a module name.
\t\t\t\tmainScript = mainScript.replace(jsSuffixRegExp, '');

\t\t\t\t//If mainScript is still a path, fall back to dataMain
\t\t\t\tif (req.jsExtRegExp.test(mainScript)) {
\t\t\t\t\tmainScript = dataMain;
\t\t\t\t}

\t\t\t\t//Put the data-main script in the files to load.
\t\t\t\tcfg.deps = cfg.deps ? cfg.deps.concat(mainScript) : [mainScript];

\t\t\t\treturn true;
\t\t\t}
\t\t});
\t}

\t/**
\t * The function that handles definitions of modules. Differs from
\t * require() in that a string for the module should be the first argument,
\t * and the function to execute after dependencies are loaded should
\t * return a value to define the module corresponding to the first argument's
\t * name.
\t */
\tdefine = function (name, deps, callback) {
\t\tvar node, context;

\t\t//Allow for anonymous modules
\t\tif (typeof name !== 'string') {
\t\t\t//Adjust args appropriately
\t\t\tcallback = deps;
\t\t\tdeps = name;
\t\t\tname = null;
\t\t}

\t\t//This module may not have dependencies
\t\tif (!isArray(deps)) {
\t\t\tcallback = deps;
\t\t\tdeps = null;
\t\t}

\t\t//If no name, and callback is a function, then figure out if it a
\t\t//CommonJS thing with dependencies.
\t\tif (!deps && isFunction(callback)) {
\t\t\tdeps = [];
\t\t\t//Remove comments from the callback string,
\t\t\t//look for require calls, and pull them into the dependencies,
\t\t\t//but only if there are function args.
\t\t\tif (callback.length) {
\t\t\t\tcallback
\t\t\t\t\t.toString()
\t\t\t\t\t.replace(commentRegExp, commentReplace)
\t\t\t\t\t.replace(cjsRequireRegExp, function (match, dep) {
\t\t\t\t\t\tdeps.push(dep);
\t\t\t\t\t});

\t\t\t\t//May be a CommonJS thing even without require calls, but still
\t\t\t\t//could use exports, and module. Avoid doing exports and module
\t\t\t\t//work though if it just needs require.
\t\t\t\t//REQUIRES the function to expect the CommonJS variables in the
\t\t\t\t//order listed below.
\t\t\t\tdeps = (callback.length === 1 ? ['require'] : ['require', 'exports', 'module']).concat(deps);
\t\t\t}
\t\t}

\t\t//If in IE 6-8 and hit an anonymous define() call, do the interactive
\t\t//work.
\t\tif (useInteractive) {
\t\t\tnode = currentlyAddingScript || getInteractiveScript();
\t\t\tif (node) {
\t\t\t\tif (!name) {
\t\t\t\t\tname = node.getAttribute('data-requiremodule');
\t\t\t\t}
\t\t\t\tcontext = contexts[node.getAttribute('data-requirecontext')];
\t\t\t}
\t\t}

\t\t//Always save off evaluating the def call until the script onload handler.
\t\t//This allows multiple modules to be in a file without prematurely
\t\t//tracing dependencies, and allows for anonymous module support,
\t\t//where the module name is not known until the script onload event
\t\t//occurs. If no context, use the global queue, and get it processed
\t\t//in the onscript load callback.
\t\tif (context) {
\t\t\tcontext.defQueue.push([name, deps, callback]);
\t\t\tcontext.defQueueMap[name] = true;
\t\t} else {
\t\t\tglobalDefQueue.push([name, deps, callback]);
\t\t}
\t};

\tdefine.amd = {
\t\tjQuery: true
\t};

\t/**
\t * Executes the text. Normally just uses eval, but can be modified
\t * to use a better, environment-specific call. Only used for transpiling
\t * loader plugins, not for plain JS modules.
\t * @param {String} text the text to execute/evaluate.
\t */
\treq.exec = function (text) {
\t\t/*jslint evil: true */
\t\treturn eval(text);
\t};

\t//Set up with config info.
\treq(cfg);
}(this, (typeof setTimeout === 'undefined' ? undefined : setTimeout)));
", "wdn/templates_5.0/js/require.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/require.js");
    }
}
