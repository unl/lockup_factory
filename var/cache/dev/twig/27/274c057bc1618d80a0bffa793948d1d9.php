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

/* wdn/templates_5.1/js/moment.js */
class __TwigTemplate_a305eea82813713243081e281490c0fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/moment.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/moment.js"));

        // line 1
        echo "//! moment.js
//! version : 2.8.1
//! authors : Tim Wood, Iskren Chernev, Moment.js contributors
//! license : MIT
//! momentjs.com

(function (undefined) {
\t/************************************
\t Constants
\t ************************************/

\tvar moment,
\t\tVERSION = '2.8.1',
\t// the global-scope this is NOT the global object in Node.js
\t\tglobalScope = typeof global !== 'undefined' ? global : this,
\t\toldGlobalMoment,
\t\tround = Math.round,
\t\ti,

\t\tYEAR = 0,
\t\tMONTH = 1,
\t\tDATE = 2,
\t\tHOUR = 3,
\t\tMINUTE = 4,
\t\tSECOND = 5,
\t\tMILLISECOND = 6,

\t// internal storage for locale config files
\t\tlocales = {},

\t// extra moment internal properties (plugins register props here)
\t\tmomentProperties = [],

\t// check for nodeJS
\t\thasModule = (typeof module !== 'undefined' && module.exports),

\t// ASP.NET json date format regex
\t\taspNetJsonRegex = /^\\/?Date\\((\\-?\\d+)/i,
\t\taspNetTimeSpanJsonRegex = /(\\-)?(?:(\\d*)\\.)?(\\d+)\\:(\\d+)(?:\\:(\\d+)\\.?(\\d{3})?)?/,

\t// from http://docs.closure-library.googlecode.com/git/closure_goog_date_date.js.source.html
\t// somewhat more in line with 4.4.3.2 2004 spec, but allows decimal anywhere
\t\tisoDurationRegex = /^(-)?P(?:(?:([0-9,.]*)Y)?(?:([0-9,.]*)M)?(?:([0-9,.]*)D)?(?:T(?:([0-9,.]*)H)?(?:([0-9,.]*)M)?(?:([0-9,.]*)S)?)?|([0-9,.]*)W)\$/,

\t// format tokens
\t\tformattingTokens = /(\\[[^\\[]*\\])|(\\\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Q|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|S{1,4}|X|zz?|ZZ?|.)/g,
\t\tlocalFormattingTokens = /(\\[[^\\[]*\\])|(\\\\)?(LT|LL?L?L?|l{1,4})/g,

\t// parsing token regexes
\t\tparseTokenOneOrTwoDigits = /\\d\\d?/, // 0 - 99
\t\tparseTokenOneToThreeDigits = /\\d{1,3}/, // 0 - 999
\t\tparseTokenOneToFourDigits = /\\d{1,4}/, // 0 - 9999
\t\tparseTokenOneToSixDigits = /[+\\-]?\\d{1,6}/, // -999,999 - 999,999
\t\tparseTokenDigits = /\\d+/, // nonzero number of digits
\t\tparseTokenWord = /[0-9]*['a-z\\u00A0-\\u05FF\\u0700-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]+|[\\u0600-\\u06FF\\/]+(\\s*?[\\u0600-\\u06FF]+){1,2}/i, // any word (or two) characters or numbers including two/three word month in arabic.
\t\tparseTokenTimezone = /Z|[\\+\\-]\\d\\d:?\\d\\d/gi, // +00:00 -00:00 +0000 -0000 or Z
\t\tparseTokenT = /T/i, // T (ISO separator)
\t\tparseTokenTimestampMs = /[\\+\\-]?\\d+(\\.\\d{1,3})?/, // 123456789 123456789.123
\t\tparseTokenOrdinal = /\\d{1,2}/,

\t//strict parsing regexes
\t\tparseTokenOneDigit = /\\d/, // 0 - 9
\t\tparseTokenTwoDigits = /\\d\\d/, // 00 - 99
\t\tparseTokenThreeDigits = /\\d{3}/, // 000 - 999
\t\tparseTokenFourDigits = /\\d{4}/, // 0000 - 9999
\t\tparseTokenSixDigits = /[+-]?\\d{6}/, // -999,999 - 999,999
\t\tparseTokenSignedNumber = /[+-]?\\d+/, // -inf - inf

\t// iso 8601 regex
\t// 0000-00-00 0000-W00 or 0000-W00-0 + T + 00 or 00:00 or 00:00:00 or 00:00:00.000 + +00:00 or +0000 or +00)
\t\tisoRegex = /^\\s*(?:[+-]\\d{6}|\\d{4})-(?:(\\d\\d-\\d\\d)|(W\\d\\d\$)|(W\\d\\d-\\d)|(\\d\\d\\d))((T| )(\\d\\d(:\\d\\d(:\\d\\d(\\.\\d+)?)?)?)?([\\+\\-]\\d\\d(?::?\\d\\d)?|\\s*Z)?)?\$/,

\t\tisoFormat = 'YYYY-MM-DDTHH:mm:ssZ',

\t\tisoDates = [
\t\t\t['YYYYYY-MM-DD', /[+-]\\d{6}-\\d{2}-\\d{2}/],
\t\t\t['YYYY-MM-DD', /\\d{4}-\\d{2}-\\d{2}/],
\t\t\t['GGGG-[W]WW-E', /\\d{4}-W\\d{2}-\\d/],
\t\t\t['GGGG-[W]WW', /\\d{4}-W\\d{2}/],
\t\t\t['YYYY-DDD', /\\d{4}-\\d{3}/]
\t\t],

\t// iso time formats and regexes
\t\tisoTimes = [
\t\t\t['HH:mm:ss.SSSS', /(T| )\\d\\d:\\d\\d:\\d\\d\\.\\d+/],
\t\t\t['HH:mm:ss', /(T| )\\d\\d:\\d\\d:\\d\\d/],
\t\t\t['HH:mm', /(T| )\\d\\d:\\d\\d/],
\t\t\t['HH', /(T| )\\d\\d/]
\t\t],

\t// timezone chunker \"+10:00\" > [\"10\", \"00\"] or \"-1530\" > [\"-15\", \"30\"]
\t\tparseTimezoneChunker = /([\\+\\-]|\\d\\d)/gi,

\t// getter and setter names
\t\tproxyGettersAndSetters = 'Date|Hours|Minutes|Seconds|Milliseconds'.split('|'),
\t\tunitMillisecondFactors = {
\t\t\t'Milliseconds' : 1,
\t\t\t'Seconds' : 1e3,
\t\t\t'Minutes' : 6e4,
\t\t\t'Hours' : 36e5,
\t\t\t'Days' : 864e5,
\t\t\t'Months' : 2592e6,
\t\t\t'Years' : 31536e6
\t\t},

\t\tunitAliases = {
\t\t\tms : 'millisecond',
\t\t\ts : 'second',
\t\t\tm : 'minute',
\t\t\th : 'hour',
\t\t\td : 'day',
\t\t\tD : 'date',
\t\t\tw : 'week',
\t\t\tW : 'isoWeek',
\t\t\tM : 'month',
\t\t\tQ : 'quarter',
\t\t\ty : 'year',
\t\t\tDDD : 'dayOfYear',
\t\t\te : 'weekday',
\t\t\tE : 'isoWeekday',
\t\t\tgg: 'weekYear',
\t\t\tGG: 'isoWeekYear'
\t\t},

\t\tcamelFunctions = {
\t\t\tdayofyear : 'dayOfYear',
\t\t\tisoweekday : 'isoWeekday',
\t\t\tisoweek : 'isoWeek',
\t\t\tweekyear : 'weekYear',
\t\t\tisoweekyear : 'isoWeekYear'
\t\t},

\t// format function strings
\t\tformatFunctions = {},

\t// default relative time thresholds
\t\trelativeTimeThresholds = {
\t\t\ts: 45,  // seconds to minute
\t\t\tm: 45,  // minutes to hour
\t\t\th: 22,  // hours to day
\t\t\td: 26,  // days to month
\t\t\tM: 11   // months to year
\t\t},

\t// tokens to ordinalize and pad
\t\tordinalizeTokens = 'DDD w W M D d'.split(' '),
\t\tpaddedTokens = 'M D H h m s w W'.split(' '),

\t\tformatTokenFunctions = {
\t\t\tM    : function () {
\t\t\t\treturn this.month() + 1;
\t\t\t},
\t\t\tMMM  : function (format) {
\t\t\t\treturn this.localeData().monthsShort(this, format);
\t\t\t},
\t\t\tMMMM : function (format) {
\t\t\t\treturn this.localeData().months(this, format);
\t\t\t},
\t\t\tD    : function () {
\t\t\t\treturn this.date();
\t\t\t},
\t\t\tDDD  : function () {
\t\t\t\treturn this.dayOfYear();
\t\t\t},
\t\t\td    : function () {
\t\t\t\treturn this.day();
\t\t\t},
\t\t\tdd   : function (format) {
\t\t\t\treturn this.localeData().weekdaysMin(this, format);
\t\t\t},
\t\t\tddd  : function (format) {
\t\t\t\treturn this.localeData().weekdaysShort(this, format);
\t\t\t},
\t\t\tdddd : function (format) {
\t\t\t\treturn this.localeData().weekdays(this, format);
\t\t\t},
\t\t\tw    : function () {
\t\t\t\treturn this.week();
\t\t\t},
\t\t\tW    : function () {
\t\t\t\treturn this.isoWeek();
\t\t\t},
\t\t\tYY   : function () {
\t\t\t\treturn leftZeroFill(this.year() % 100, 2);
\t\t\t},
\t\t\tYYYY : function () {
\t\t\t\treturn leftZeroFill(this.year(), 4);
\t\t\t},
\t\t\tYYYYY : function () {
\t\t\t\treturn leftZeroFill(this.year(), 5);
\t\t\t},
\t\t\tYYYYYY : function () {
\t\t\t\tvar y = this.year(), sign = y >= 0 ? '+' : '-';
\t\t\t\treturn sign + leftZeroFill(Math.abs(y), 6);
\t\t\t},
\t\t\tgg   : function () {
\t\t\t\treturn leftZeroFill(this.weekYear() % 100, 2);
\t\t\t},
\t\t\tgggg : function () {
\t\t\t\treturn leftZeroFill(this.weekYear(), 4);
\t\t\t},
\t\t\tggggg : function () {
\t\t\t\treturn leftZeroFill(this.weekYear(), 5);
\t\t\t},
\t\t\tGG   : function () {
\t\t\t\treturn leftZeroFill(this.isoWeekYear() % 100, 2);
\t\t\t},
\t\t\tGGGG : function () {
\t\t\t\treturn leftZeroFill(this.isoWeekYear(), 4);
\t\t\t},
\t\t\tGGGGG : function () {
\t\t\t\treturn leftZeroFill(this.isoWeekYear(), 5);
\t\t\t},
\t\t\te : function () {
\t\t\t\treturn this.weekday();
\t\t\t},
\t\t\tE : function () {
\t\t\t\treturn this.isoWeekday();
\t\t\t},
\t\t\ta    : function () {
\t\t\t\treturn this.localeData().meridiem(this.hours(), this.minutes(), true);
\t\t\t},
\t\t\tA    : function () {
\t\t\t\treturn this.localeData().meridiem(this.hours(), this.minutes(), false);
\t\t\t},
\t\t\tH    : function () {
\t\t\t\treturn this.hours();
\t\t\t},
\t\t\th    : function () {
\t\t\t\treturn this.hours() % 12 || 12;
\t\t\t},
\t\t\tm    : function () {
\t\t\t\treturn this.minutes();
\t\t\t},
\t\t\ts    : function () {
\t\t\t\treturn this.seconds();
\t\t\t},
\t\t\tS    : function () {
\t\t\t\treturn toInt(this.milliseconds() / 100);
\t\t\t},
\t\t\tSS   : function () {
\t\t\t\treturn leftZeroFill(toInt(this.milliseconds() / 10), 2);
\t\t\t},
\t\t\tSSS  : function () {
\t\t\t\treturn leftZeroFill(this.milliseconds(), 3);
\t\t\t},
\t\t\tSSSS : function () {
\t\t\t\treturn leftZeroFill(this.milliseconds(), 3);
\t\t\t},
\t\t\tZ    : function () {
\t\t\t\tvar a = -this.zone(),
\t\t\t\t\tb = '+';
\t\t\t\tif (a < 0) {
\t\t\t\t\ta = -a;
\t\t\t\t\tb = '-';
\t\t\t\t}
\t\t\t\treturn b + leftZeroFill(toInt(a / 60), 2) + ':' + leftZeroFill(toInt(a) % 60, 2);
\t\t\t},
\t\t\tZZ   : function () {
\t\t\t\tvar a = -this.zone(),
\t\t\t\t\tb = '+';
\t\t\t\tif (a < 0) {
\t\t\t\t\ta = -a;
\t\t\t\t\tb = '-';
\t\t\t\t}
\t\t\t\treturn b + leftZeroFill(toInt(a / 60), 2) + leftZeroFill(toInt(a) % 60, 2);
\t\t\t},
\t\t\tz : function () {
\t\t\t\treturn this.zoneAbbr();
\t\t\t},
\t\t\tzz : function () {
\t\t\t\treturn this.zoneName();
\t\t\t},
\t\t\tX    : function () {
\t\t\t\treturn this.unix();
\t\t\t},
\t\t\tQ : function () {
\t\t\t\treturn this.quarter();
\t\t\t}
\t\t},

\t\tdeprecations = {},

\t\tlists = ['months', 'monthsShort', 'weekdays', 'weekdaysShort', 'weekdaysMin'];

\t// Pick the first defined of two or three arguments. dfl comes from
\t// default.
\tfunction dfl(a, b, c) {
\t\tswitch (arguments.length) {
\t\t\tcase 2: return a != null ? a : b;
\t\t\tcase 3: return a != null ? a : b != null ? b : c;
\t\t\tdefault: throw new Error('Implement me');
\t\t}
\t}

\tfunction defaultParsingFlags() {
\t\t// We need to deep clone this object, and es5 standard is not very
\t\t// helpful.
\t\treturn {
\t\t\tempty : false,
\t\t\tunusedTokens : [],
\t\t\tunusedInput : [],
\t\t\toverflow : -2,
\t\t\tcharsLeftOver : 0,
\t\t\tnullInput : false,
\t\t\tinvalidMonth : null,
\t\t\tinvalidFormat : false,
\t\t\tuserInvalidated : false,
\t\t\tiso: false
\t\t};
\t}

\tfunction printMsg(msg) {
\t\tif (moment.suppressDeprecationWarnings === false &&
\t\t\ttypeof console !== 'undefined' && console.warn) {
\t\t\tconsole.warn(\"Deprecation warning: \" + msg);
\t\t}
\t}

\tfunction deprecate(msg, fn) {
\t\tvar firstTime = true;
\t\treturn extend(function () {
\t\t\tif (firstTime) {
\t\t\t\tprintMsg(msg);
\t\t\t\tfirstTime = false;
\t\t\t}
\t\t\treturn fn.apply(this, arguments);
\t\t}, fn);
\t}

\tfunction deprecateSimple(name, msg) {
\t\tif (!deprecations[name]) {
\t\t\tprintMsg(msg);
\t\t\tdeprecations[name] = true;
\t\t}
\t}

\tfunction padToken(func, count) {
\t\treturn function (a) {
\t\t\treturn leftZeroFill(func.call(this, a), count);
\t\t};
\t}
\tfunction ordinalizeToken(func, period) {
\t\treturn function (a) {
\t\t\treturn this.localeData().ordinal(func.call(this, a), period);
\t\t};
\t}

\twhile (ordinalizeTokens.length) {
\t\ti = ordinalizeTokens.pop();
\t\tformatTokenFunctions[i + 'o'] = ordinalizeToken(formatTokenFunctions[i], i);
\t}
\twhile (paddedTokens.length) {
\t\ti = paddedTokens.pop();
\t\tformatTokenFunctions[i + i] = padToken(formatTokenFunctions[i], 2);
\t}
\tformatTokenFunctions.DDDD = padToken(formatTokenFunctions.DDD, 3);


\t/************************************
\t Constructors
\t ************************************/

\tfunction Locale() {
\t}

\t// Moment prototype object
\tfunction Moment(config, skipOverflow) {
\t\tif (skipOverflow !== false) {
\t\t\tcheckOverflow(config);
\t\t}
\t\tcopyConfig(this, config);
\t\tthis._d = new Date(+config._d);
\t}

\t// Duration Constructor
\tfunction Duration(duration) {
\t\tvar normalizedInput = normalizeObjectUnits(duration),
\t\t\tyears = normalizedInput.year || 0,
\t\t\tquarters = normalizedInput.quarter || 0,
\t\t\tmonths = normalizedInput.month || 0,
\t\t\tweeks = normalizedInput.week || 0,
\t\t\tdays = normalizedInput.day || 0,
\t\t\thours = normalizedInput.hour || 0,
\t\t\tminutes = normalizedInput.minute || 0,
\t\t\tseconds = normalizedInput.second || 0,
\t\t\tmilliseconds = normalizedInput.millisecond || 0;

\t\t// representation for dateAddRemove
\t\tthis._milliseconds = +milliseconds +
\t\t\tseconds * 1e3 + // 1000
\t\t\tminutes * 6e4 + // 1000 * 60
\t\t\thours * 36e5; // 1000 * 60 * 60
\t\t// Because of dateAddRemove treats 24 hours as different from a
\t\t// day when working around DST, we need to store them separately
\t\tthis._days = +days +
\t\t\tweeks * 7;
\t\t// It is impossible translate months into days without knowing
\t\t// which months you are are talking about, so we have to store
\t\t// it separately.
\t\tthis._months = +months +
\t\t\tquarters * 3 +
\t\t\tyears * 12;

\t\tthis._data = {};

\t\tthis._locale = moment.localeData();

\t\tthis._bubble();
\t}

\t/************************************
\t Helpers
\t ************************************/


\tfunction extend(a, b) {
\t\tfor (var i in b) {
\t\t\tif (b.hasOwnProperty(i)) {
\t\t\t\ta[i] = b[i];
\t\t\t}
\t\t}

\t\tif (b.hasOwnProperty('toString')) {
\t\t\ta.toString = b.toString;
\t\t}

\t\tif (b.hasOwnProperty('valueOf')) {
\t\t\ta.valueOf = b.valueOf;
\t\t}

\t\treturn a;
\t}

\tfunction copyConfig(to, from) {
\t\tvar i, prop, val;

\t\tif (typeof from._isAMomentObject !== 'undefined') {
\t\t\tto._isAMomentObject = from._isAMomentObject;
\t\t}
\t\tif (typeof from._i !== 'undefined') {
\t\t\tto._i = from._i;
\t\t}
\t\tif (typeof from._f !== 'undefined') {
\t\t\tto._f = from._f;
\t\t}
\t\tif (typeof from._l !== 'undefined') {
\t\t\tto._l = from._l;
\t\t}
\t\tif (typeof from._strict !== 'undefined') {
\t\t\tto._strict = from._strict;
\t\t}
\t\tif (typeof from._tzm !== 'undefined') {
\t\t\tto._tzm = from._tzm;
\t\t}
\t\tif (typeof from._isUTC !== 'undefined') {
\t\t\tto._isUTC = from._isUTC;
\t\t}
\t\tif (typeof from._offset !== 'undefined') {
\t\t\tto._offset = from._offset;
\t\t}
\t\tif (typeof from._pf !== 'undefined') {
\t\t\tto._pf = from._pf;
\t\t}
\t\tif (typeof from._locale !== 'undefined') {
\t\t\tto._locale = from._locale;
\t\t}

\t\tif (momentProperties.length > 0) {
\t\t\tfor (i in momentProperties) {
\t\t\t\tprop = momentProperties[i];
\t\t\t\tval = from[prop];
\t\t\t\tif (typeof val !== 'undefined') {
\t\t\t\t\tto[prop] = val;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn to;
\t}

\tfunction absRound(number) {
\t\tif (number < 0) {
\t\t\treturn Math.ceil(number);
\t\t} else {
\t\t\treturn Math.floor(number);
\t\t}
\t}

\t// left zero fill a number
\t// see http://jsperf.com/left-zero-filling for performance comparison
\tfunction leftZeroFill(number, targetLength, forceSign) {
\t\tvar output = '' + Math.abs(number),
\t\t\tsign = number >= 0;

\t\twhile (output.length < targetLength) {
\t\t\toutput = '0' + output;
\t\t}
\t\treturn (sign ? (forceSign ? '+' : '') : '-') + output;
\t}

\tfunction positiveMomentsDifference(base, other) {
\t\tvar res = {milliseconds: 0, months: 0};

\t\tres.months = other.month() - base.month() +
\t\t\t(other.year() - base.year()) * 12;
\t\tif (base.clone().add(res.months, 'M').isAfter(other)) {
\t\t\t--res.months;
\t\t}

\t\tres.milliseconds = +other - +(base.clone().add(res.months, 'M'));

\t\treturn res;
\t}

\tfunction momentsDifference(base, other) {
\t\tvar res;
\t\tother = makeAs(other, base);
\t\tif (base.isBefore(other)) {
\t\t\tres = positiveMomentsDifference(base, other);
\t\t} else {
\t\t\tres = positiveMomentsDifference(other, base);
\t\t\tres.milliseconds = -res.milliseconds;
\t\t\tres.months = -res.months;
\t\t}

\t\treturn res;
\t}

\t// TODO: remove 'name' arg after deprecation is removed
\tfunction createAdder(direction, name) {
\t\treturn function (val, period) {
\t\t\tvar dur, tmp;
\t\t\t//invert the arguments, but complain about it
\t\t\tif (period !== null && !isNaN(+period)) {
\t\t\t\tdeprecateSimple(name, \"moment().\" + name  + \"(period, number) is deprecated. Please use moment().\" + name + \"(number, period).\");
\t\t\t\ttmp = val; val = period; period = tmp;
\t\t\t}

\t\t\tval = typeof val === 'string' ? +val : val;
\t\t\tdur = moment.duration(val, period);
\t\t\taddOrSubtractDurationFromMoment(this, dur, direction);
\t\t\treturn this;
\t\t};
\t}

\tfunction addOrSubtractDurationFromMoment(mom, duration, isAdding, updateOffset) {
\t\tvar milliseconds = duration._milliseconds,
\t\t\tdays = duration._days,
\t\t\tmonths = duration._months;
\t\tupdateOffset = updateOffset == null ? true : updateOffset;

\t\tif (milliseconds) {
\t\t\tmom._d.setTime(+mom._d + milliseconds * isAdding);
\t\t}
\t\tif (days) {
\t\t\trawSetter(mom, 'Date', rawGetter(mom, 'Date') + days * isAdding);
\t\t}
\t\tif (months) {
\t\t\trawMonthSetter(mom, rawGetter(mom, 'Month') + months * isAdding);
\t\t}
\t\tif (updateOffset) {
\t\t\tmoment.updateOffset(mom, days || months);
\t\t}
\t}

\t// check if is an array
\tfunction isArray(input) {
\t\treturn Object.prototype.toString.call(input) === '[object Array]';
\t}

\tfunction isDate(input) {
\t\treturn Object.prototype.toString.call(input) === '[object Date]' ||
\t\t\tinput instanceof Date;
\t}

\t// compare two arrays, return the number of differences
\tfunction compareArrays(array1, array2, dontConvert) {
\t\tvar len = Math.min(array1.length, array2.length),
\t\t\tlengthDiff = Math.abs(array1.length - array2.length),
\t\t\tdiffs = 0,
\t\t\ti;
\t\tfor (i = 0; i < len; i++) {
\t\t\tif ((dontConvert && array1[i] !== array2[i]) ||
\t\t\t\t(!dontConvert && toInt(array1[i]) !== toInt(array2[i]))) {
\t\t\t\tdiffs++;
\t\t\t}
\t\t}
\t\treturn diffs + lengthDiff;
\t}

\tfunction normalizeUnits(units) {
\t\tif (units) {
\t\t\tvar lowered = units.toLowerCase().replace(/(.)s\$/, '\$1');
\t\t\tunits = unitAliases[units] || camelFunctions[lowered] || lowered;
\t\t}
\t\treturn units;
\t}

\tfunction normalizeObjectUnits(inputObject) {
\t\tvar normalizedInput = {},
\t\t\tnormalizedProp,
\t\t\tprop;

\t\tfor (prop in inputObject) {
\t\t\tif (inputObject.hasOwnProperty(prop)) {
\t\t\t\tnormalizedProp = normalizeUnits(prop);
\t\t\t\tif (normalizedProp) {
\t\t\t\t\tnormalizedInput[normalizedProp] = inputObject[prop];
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn normalizedInput;
\t}

\tfunction makeList(field) {
\t\tvar count, setter;

\t\tif (field.indexOf('week') === 0) {
\t\t\tcount = 7;
\t\t\tsetter = 'day';
\t\t}
\t\telse if (field.indexOf('month') === 0) {
\t\t\tcount = 12;
\t\t\tsetter = 'month';
\t\t}
\t\telse {
\t\t\treturn;
\t\t}

\t\tmoment[field] = function (format, index) {
\t\t\tvar i, getter,
\t\t\t\tmethod = moment._locale[field],
\t\t\t\tresults = [];

\t\t\tif (typeof format === 'number') {
\t\t\t\tindex = format;
\t\t\t\tformat = undefined;
\t\t\t}

\t\t\tgetter = function (i) {
\t\t\t\tvar m = moment().utc().set(setter, i);
\t\t\t\treturn method.call(moment._locale, m, format || '');
\t\t\t};

\t\t\tif (index != null) {
\t\t\t\treturn getter(index);
\t\t\t}
\t\t\telse {
\t\t\t\tfor (i = 0; i < count; i++) {
\t\t\t\t\tresults.push(getter(i));
\t\t\t\t}
\t\t\t\treturn results;
\t\t\t}
\t\t};
\t}

\tfunction toInt(argumentForCoercion) {
\t\tvar coercedNumber = +argumentForCoercion,
\t\t\tvalue = 0;

\t\tif (coercedNumber !== 0 && isFinite(coercedNumber)) {
\t\t\tif (coercedNumber >= 0) {
\t\t\t\tvalue = Math.floor(coercedNumber);
\t\t\t} else {
\t\t\t\tvalue = Math.ceil(coercedNumber);
\t\t\t}
\t\t}

\t\treturn value;
\t}

\tfunction daysInMonth(year, month) {
\t\treturn new Date(Date.UTC(year, month + 1, 0)).getUTCDate();
\t}

\tfunction weeksInYear(year, dow, doy) {
\t\treturn weekOfYear(moment([year, 11, 31 + dow - doy]), dow, doy).week;
\t}

\tfunction daysInYear(year) {
\t\treturn isLeapYear(year) ? 366 : 365;
\t}

\tfunction isLeapYear(year) {
\t\treturn (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
\t}

\tfunction checkOverflow(m) {
\t\tvar overflow;
\t\tif (m._a && m._pf.overflow === -2) {
\t\t\toverflow =
\t\t\t\tm._a[MONTH] < 0 || m._a[MONTH] > 11 ? MONTH :
\t\t\t\t\tm._a[DATE] < 1 || m._a[DATE] > daysInMonth(m._a[YEAR], m._a[MONTH]) ? DATE :
\t\t\t\t\t\tm._a[HOUR] < 0 || m._a[HOUR] > 23 ? HOUR :
\t\t\t\t\t\t\tm._a[MINUTE] < 0 || m._a[MINUTE] > 59 ? MINUTE :
\t\t\t\t\t\t\t\tm._a[SECOND] < 0 || m._a[SECOND] > 59 ? SECOND :
\t\t\t\t\t\t\t\t\tm._a[MILLISECOND] < 0 || m._a[MILLISECOND] > 999 ? MILLISECOND :
\t\t\t\t\t\t\t\t\t\t-1;

\t\t\tif (m._pf._overflowDayOfYear && (overflow < YEAR || overflow > DATE)) {
\t\t\t\toverflow = DATE;
\t\t\t}

\t\t\tm._pf.overflow = overflow;
\t\t}
\t}

\tfunction isValid(m) {
\t\tif (m._isValid == null) {
\t\t\tm._isValid = !isNaN(m._d.getTime()) &&
\t\t\t\tm._pf.overflow < 0 &&
\t\t\t\t!m._pf.empty &&
\t\t\t\t!m._pf.invalidMonth &&
\t\t\t\t!m._pf.nullInput &&
\t\t\t\t!m._pf.invalidFormat &&
\t\t\t\t!m._pf.userInvalidated;

\t\t\tif (m._strict) {
\t\t\t\tm._isValid = m._isValid &&
\t\t\t\t\tm._pf.charsLeftOver === 0 &&
\t\t\t\t\tm._pf.unusedTokens.length === 0;
\t\t\t}
\t\t}
\t\treturn m._isValid;
\t}

\tfunction normalizeLocale(key) {
\t\treturn key ? key.toLowerCase().replace('_', '-') : key;
\t}

\t// pick the locale from the array
\t// try ['en-au', 'en-gb'] as 'en-au', 'en-gb', 'en', as in move through the list trying each
\t// substring from most specific to least, but move to the next array item if it's a more specific variant than the current root
\tfunction chooseLocale(names) {
\t\tvar i = 0, j, next, locale, split;

\t\twhile (i < names.length) {
\t\t\tsplit = normalizeLocale(names[i]).split('-');
\t\t\tj = split.length;
\t\t\tnext = normalizeLocale(names[i + 1]);
\t\t\tnext = next ? next.split('-') : null;
\t\t\twhile (j > 0) {
\t\t\t\tlocale = loadLocale(split.slice(0, j).join('-'));
\t\t\t\tif (locale) {
\t\t\t\t\treturn locale;
\t\t\t\t}
\t\t\t\tif (next && next.length >= j && compareArrays(split, next, true) >= j - 1) {
\t\t\t\t\t//the next array item is better than a shallower substring of this one
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tj--;
\t\t\t}
\t\t\ti++;
\t\t}
\t\treturn null;
\t}

\tfunction loadLocale(name) {
\t\tvar oldLocale = null;
\t\tif (!locales[name] && hasModule) {
\t\t\ttry {
\t\t\t\toldLocale = moment.locale();
\t\t\t\trequire('./locale/' + name);
\t\t\t\t// because defineLocale currently also sets the global locale, we want to undo that for lazy loaded locales
\t\t\t\tmoment.locale(oldLocale);
\t\t\t} catch (e) { }
\t\t}
\t\treturn locales[name];
\t}

\t// Return a moment from input, that is local/utc/zone equivalent to model.
\tfunction makeAs(input, model) {
\t\treturn model._isUTC ? moment(input).zone(model._offset || 0) :
\t\t\tmoment(input).local();
\t}

\t/************************************
\t Locale
\t ************************************/


\textend(Locale.prototype, {

\t\tset : function (config) {
\t\t\tvar prop, i;
\t\t\tfor (i in config) {
\t\t\t\tprop = config[i];
\t\t\t\tif (typeof prop === 'function') {
\t\t\t\t\tthis[i] = prop;
\t\t\t\t} else {
\t\t\t\t\tthis['_' + i] = prop;
\t\t\t\t}
\t\t\t}
\t\t},

\t\t_months : 'January_February_March_April_May_June_July_August_September_October_November_December'.split('_'),
\t\tmonths : function (m) {
\t\t\treturn this._months[m.month()];
\t\t},

\t\t_monthsShort : 'Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec'.split('_'),
\t\tmonthsShort : function (m) {
\t\t\treturn this._monthsShort[m.month()];
\t\t},

\t\tmonthsParse : function (monthName) {
\t\t\tvar i, mom, regex;

\t\t\tif (!this._monthsParse) {
\t\t\t\tthis._monthsParse = [];
\t\t\t}

\t\t\tfor (i = 0; i < 12; i++) {
\t\t\t\t// make the regex if we don't have it already
\t\t\t\tif (!this._monthsParse[i]) {
\t\t\t\t\tmom = moment.utc([2000, i]);
\t\t\t\t\tregex = '^' + this.months(mom, '') + '|^' + this.monthsShort(mom, '');
\t\t\t\t\tthis._monthsParse[i] = new RegExp(regex.replace('.', ''), 'i');
\t\t\t\t}
\t\t\t\t// test the regex
\t\t\t\tif (this._monthsParse[i].test(monthName)) {
\t\t\t\t\treturn i;
\t\t\t\t}
\t\t\t}
\t\t},

\t\t_weekdays : 'Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday'.split('_'),
\t\tweekdays : function (m) {
\t\t\treturn this._weekdays[m.day()];
\t\t},

\t\t_weekdaysShort : 'Sun_Mon_Tue_Wed_Thu_Fri_Sat'.split('_'),
\t\tweekdaysShort : function (m) {
\t\t\treturn this._weekdaysShort[m.day()];
\t\t},

\t\t_weekdaysMin : 'Su_Mo_Tu_We_Th_Fr_Sa'.split('_'),
\t\tweekdaysMin : function (m) {
\t\t\treturn this._weekdaysMin[m.day()];
\t\t},

\t\tweekdaysParse : function (weekdayName) {
\t\t\tvar i, mom, regex;

\t\t\tif (!this._weekdaysParse) {
\t\t\t\tthis._weekdaysParse = [];
\t\t\t}

\t\t\tfor (i = 0; i < 7; i++) {
\t\t\t\t// make the regex if we don't have it already
\t\t\t\tif (!this._weekdaysParse[i]) {
\t\t\t\t\tmom = moment([2000, 1]).day(i);
\t\t\t\t\tregex = '^' + this.weekdays(mom, '') + '|^' + this.weekdaysShort(mom, '') + '|^' + this.weekdaysMin(mom, '');
\t\t\t\t\tthis._weekdaysParse[i] = new RegExp(regex.replace('.', ''), 'i');
\t\t\t\t}
\t\t\t\t// test the regex
\t\t\t\tif (this._weekdaysParse[i].test(weekdayName)) {
\t\t\t\t\treturn i;
\t\t\t\t}
\t\t\t}
\t\t},

\t\t_longDateFormat : {
\t\t\tLT : 'h:mm A',
\t\t\tL : 'MM/DD/YYYY',
\t\t\tLL : 'MMMM D, YYYY',
\t\t\tLLL : 'MMMM D, YYYY LT',
\t\t\tLLLL : 'dddd, MMMM D, YYYY LT'
\t\t},
\t\tlongDateFormat : function (key) {
\t\t\tvar output = this._longDateFormat[key];
\t\t\tif (!output && this._longDateFormat[key.toUpperCase()]) {
\t\t\t\toutput = this._longDateFormat[key.toUpperCase()].replace(/MMMM|MM|DD|dddd/g, function (val) {
\t\t\t\t\treturn val.slice(1);
\t\t\t\t});
\t\t\t\tthis._longDateFormat[key] = output;
\t\t\t}
\t\t\treturn output;
\t\t},

\t\tisPM : function (input) {
\t\t\t// IE8 Quirks Mode & IE7 Standards Mode do not allow accessing strings like arrays
\t\t\t// Using charAt should be more compatible.
\t\t\treturn ((input + '').toLowerCase().charAt(0) === 'p');
\t\t},

\t\t_meridiemParse : /[ap]\\.?m?\\.?/i,
\t\tmeridiem : function (hours, minutes, isLower) {
\t\t\tif (hours > 11) {
\t\t\t\treturn isLower ? 'pm' : 'PM';
\t\t\t} else {
\t\t\t\treturn isLower ? 'am' : 'AM';
\t\t\t}
\t\t},

\t\t_calendar : {
\t\t\tsameDay : '[Today at] LT',
\t\t\tnextDay : '[Tomorrow at] LT',
\t\t\tnextWeek : 'dddd [at] LT',
\t\t\tlastDay : '[Yesterday at] LT',
\t\t\tlastWeek : '[Last] dddd [at] LT',
\t\t\tsameElse : 'L'
\t\t},
\t\tcalendar : function (key, mom) {
\t\t\tvar output = this._calendar[key];
\t\t\treturn typeof output === 'function' ? output.apply(mom) : output;
\t\t},

\t\t_relativeTime : {
\t\t\tfuture : 'in %s',
\t\t\tpast : '%s ago',
\t\t\ts : 'a few seconds',
\t\t\tm : 'a minute',
\t\t\tmm : '%d minutes',
\t\t\th : 'an hour',
\t\t\thh : '%d hours',
\t\t\td : 'a day',
\t\t\tdd : '%d days',
\t\t\tM : 'a month',
\t\t\tMM : '%d months',
\t\t\ty : 'a year',
\t\t\tyy : '%d years'
\t\t},

\t\trelativeTime : function (number, withoutSuffix, string, isFuture) {
\t\t\tvar output = this._relativeTime[string];
\t\t\treturn (typeof output === 'function') ?
\t\t\t\toutput(number, withoutSuffix, string, isFuture) :
\t\t\t\toutput.replace(/%d/i, number);
\t\t},

\t\tpastFuture : function (diff, output) {
\t\t\tvar format = this._relativeTime[diff > 0 ? 'future' : 'past'];
\t\t\treturn typeof format === 'function' ? format(output) : format.replace(/%s/i, output);
\t\t},

\t\tordinal : function (number) {
\t\t\treturn this._ordinal.replace('%d', number);
\t\t},
\t\t_ordinal : '%d',

\t\tpreparse : function (string) {
\t\t\treturn string;
\t\t},

\t\tpostformat : function (string) {
\t\t\treturn string;
\t\t},

\t\tweek : function (mom) {
\t\t\treturn weekOfYear(mom, this._week.dow, this._week.doy).week;
\t\t},

\t\t_week : {
\t\t\tdow : 0, // Sunday is the first day of the week.
\t\t\tdoy : 6  // The week that contains Jan 1st is the first week of the year.
\t\t},

\t\t_invalidDate: 'Invalid date',
\t\tinvalidDate: function () {
\t\t\treturn this._invalidDate;
\t\t}
\t});

\t/************************************
\t Formatting
\t ************************************/


\tfunction removeFormattingTokens(input) {
\t\tif (input.match(/\\[[\\s\\S]/)) {
\t\t\treturn input.replace(/^\\[|\\]\$/g, '');
\t\t}
\t\treturn input.replace(/\\\\/g, '');
\t}

\tfunction makeFormatFunction(format) {
\t\tvar array = format.match(formattingTokens), i, length;

\t\tfor (i = 0, length = array.length; i < length; i++) {
\t\t\tif (formatTokenFunctions[array[i]]) {
\t\t\t\tarray[i] = formatTokenFunctions[array[i]];
\t\t\t} else {
\t\t\t\tarray[i] = removeFormattingTokens(array[i]);
\t\t\t}
\t\t}

\t\treturn function (mom) {
\t\t\tvar output = '';
\t\t\tfor (i = 0; i < length; i++) {
\t\t\t\toutput += array[i] instanceof Function ? array[i].call(mom, format) : array[i];
\t\t\t}
\t\t\treturn output;
\t\t};
\t}

\t// format date using native date object
\tfunction formatMoment(m, format) {
\t\tif (!m.isValid()) {
\t\t\treturn m.localeData().invalidDate();
\t\t}

\t\tformat = expandFormat(format, m.localeData());

\t\tif (!formatFunctions[format]) {
\t\t\tformatFunctions[format] = makeFormatFunction(format);
\t\t}

\t\treturn formatFunctions[format](m);
\t}

\tfunction expandFormat(format, locale) {
\t\tvar i = 5;

\t\tfunction replaceLongDateFormatTokens(input) {
\t\t\treturn locale.longDateFormat(input) || input;
\t\t}

\t\tlocalFormattingTokens.lastIndex = 0;
\t\twhile (i >= 0 && localFormattingTokens.test(format)) {
\t\t\tformat = format.replace(localFormattingTokens, replaceLongDateFormatTokens);
\t\t\tlocalFormattingTokens.lastIndex = 0;
\t\t\ti -= 1;
\t\t}

\t\treturn format;
\t}


\t/************************************
\t Parsing
\t ************************************/


\t\t// get the regex to find the next token
\tfunction getParseRegexForToken(token, config) {
\t\tvar a, strict = config._strict;
\t\tswitch (token) {
\t\t\tcase 'Q':
\t\t\t\treturn parseTokenOneDigit;
\t\t\tcase 'DDDD':
\t\t\t\treturn parseTokenThreeDigits;
\t\t\tcase 'YYYY':
\t\t\tcase 'GGGG':
\t\t\tcase 'gggg':
\t\t\t\treturn strict ? parseTokenFourDigits : parseTokenOneToFourDigits;
\t\t\tcase 'Y':
\t\t\tcase 'G':
\t\t\tcase 'g':
\t\t\t\treturn parseTokenSignedNumber;
\t\t\tcase 'YYYYYY':
\t\t\tcase 'YYYYY':
\t\t\tcase 'GGGGG':
\t\t\tcase 'ggggg':
\t\t\t\treturn strict ? parseTokenSixDigits : parseTokenOneToSixDigits;
\t\t\tcase 'S':
\t\t\t\tif (strict) {
\t\t\t\t\treturn parseTokenOneDigit;
\t\t\t\t}
\t\t\t/* falls through */
\t\t\tcase 'SS':
\t\t\t\tif (strict) {
\t\t\t\t\treturn parseTokenTwoDigits;
\t\t\t\t}
\t\t\t/* falls through */
\t\t\tcase 'SSS':
\t\t\t\tif (strict) {
\t\t\t\t\treturn parseTokenThreeDigits;
\t\t\t\t}
\t\t\t/* falls through */
\t\t\tcase 'DDD':
\t\t\t\treturn parseTokenOneToThreeDigits;
\t\t\tcase 'MMM':
\t\t\tcase 'MMMM':
\t\t\tcase 'dd':
\t\t\tcase 'ddd':
\t\t\tcase 'dddd':
\t\t\t\treturn parseTokenWord;
\t\t\tcase 'a':
\t\t\tcase 'A':
\t\t\t\treturn config._locale._meridiemParse;
\t\t\tcase 'X':
\t\t\t\treturn parseTokenTimestampMs;
\t\t\tcase 'Z':
\t\t\tcase 'ZZ':
\t\t\t\treturn parseTokenTimezone;
\t\t\tcase 'T':
\t\t\t\treturn parseTokenT;
\t\t\tcase 'SSSS':
\t\t\t\treturn parseTokenDigits;
\t\t\tcase 'MM':
\t\t\tcase 'DD':
\t\t\tcase 'YY':
\t\t\tcase 'GG':
\t\t\tcase 'gg':
\t\t\tcase 'HH':
\t\t\tcase 'hh':
\t\t\tcase 'mm':
\t\t\tcase 'ss':
\t\t\tcase 'ww':
\t\t\tcase 'WW':
\t\t\t\treturn strict ? parseTokenTwoDigits : parseTokenOneOrTwoDigits;
\t\t\tcase 'M':
\t\t\tcase 'D':
\t\t\tcase 'd':
\t\t\tcase 'H':
\t\t\tcase 'h':
\t\t\tcase 'm':
\t\t\tcase 's':
\t\t\tcase 'w':
\t\t\tcase 'W':
\t\t\tcase 'e':
\t\t\tcase 'E':
\t\t\t\treturn parseTokenOneOrTwoDigits;
\t\t\tcase 'Do':
\t\t\t\treturn parseTokenOrdinal;
\t\t\tdefault :
\t\t\t\ta = new RegExp(regexpEscape(unescapeFormat(token.replace('\\\\', '')), 'i'));
\t\t\t\treturn a;
\t\t}
\t}

\tfunction timezoneMinutesFromString(string) {
\t\tstring = string || '';
\t\tvar possibleTzMatches = (string.match(parseTokenTimezone) || []),
\t\t\ttzChunk = possibleTzMatches[possibleTzMatches.length - 1] || [],
\t\t\tparts = (tzChunk + '').match(parseTimezoneChunker) || ['-', 0, 0],
\t\t\tminutes = +(parts[1] * 60) + toInt(parts[2]);

\t\treturn parts[0] === '+' ? -minutes : minutes;
\t}

\t// function to convert string input to date
\tfunction addTimeToArrayFromToken(token, input, config) {
\t\tvar a, datePartArray = config._a;

\t\tswitch (token) {
\t\t\t// QUARTER
\t\t\tcase 'Q':
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[MONTH] = (toInt(input) - 1) * 3;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// MONTH
\t\t\tcase 'M' : // fall through to MM
\t\t\tcase 'MM' :
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[MONTH] = toInt(input) - 1;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'MMM' : // fall through to MMMM
\t\t\tcase 'MMMM' :
\t\t\t\ta = config._locale.monthsParse(input);
\t\t\t\t// if we didn't find a month name, mark the date as invalid.
\t\t\t\tif (a != null) {
\t\t\t\t\tdatePartArray[MONTH] = a;
\t\t\t\t} else {
\t\t\t\t\tconfig._pf.invalidMonth = input;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// DAY OF MONTH
\t\t\tcase 'D' : // fall through to DD
\t\t\tcase 'DD' :
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[DATE] = toInt(input);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'Do' :
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[DATE] = toInt(parseInt(input, 10));
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// DAY OF YEAR
\t\t\tcase 'DDD' : // fall through to DDDD
\t\t\tcase 'DDDD' :
\t\t\t\tif (input != null) {
\t\t\t\t\tconfig._dayOfYear = toInt(input);
\t\t\t\t}

\t\t\t\tbreak;
\t\t\t// YEAR
\t\t\tcase 'YY' :
\t\t\t\tdatePartArray[YEAR] = moment.parseTwoDigitYear(input);
\t\t\t\tbreak;
\t\t\tcase 'YYYY' :
\t\t\tcase 'YYYYY' :
\t\t\tcase 'YYYYYY' :
\t\t\t\tdatePartArray[YEAR] = toInt(input);
\t\t\t\tbreak;
\t\t\t// AM / PM
\t\t\tcase 'a' : // fall through to A
\t\t\tcase 'A' :
\t\t\t\tconfig._isPm = config._locale.isPM(input);
\t\t\t\tbreak;
\t\t\t// 24 HOUR
\t\t\tcase 'H' : // fall through to hh
\t\t\tcase 'HH' : // fall through to hh
\t\t\tcase 'h' : // fall through to hh
\t\t\tcase 'hh' :
\t\t\t\tdatePartArray[HOUR] = toInt(input);
\t\t\t\tbreak;
\t\t\t// MINUTE
\t\t\tcase 'm' : // fall through to mm
\t\t\tcase 'mm' :
\t\t\t\tdatePartArray[MINUTE] = toInt(input);
\t\t\t\tbreak;
\t\t\t// SECOND
\t\t\tcase 's' : // fall through to ss
\t\t\tcase 'ss' :
\t\t\t\tdatePartArray[SECOND] = toInt(input);
\t\t\t\tbreak;
\t\t\t// MILLISECOND
\t\t\tcase 'S' :
\t\t\tcase 'SS' :
\t\t\tcase 'SSS' :
\t\t\tcase 'SSSS' :
\t\t\t\tdatePartArray[MILLISECOND] = toInt(('0.' + input) * 1000);
\t\t\t\tbreak;
\t\t\t// UNIX TIMESTAMP WITH MS
\t\t\tcase 'X':
\t\t\t\tconfig._d = new Date(parseFloat(input) * 1000);
\t\t\t\tbreak;
\t\t\t// TIMEZONE
\t\t\tcase 'Z' : // fall through to ZZ
\t\t\tcase 'ZZ' :
\t\t\t\tconfig._useUTC = true;
\t\t\t\tconfig._tzm = timezoneMinutesFromString(input);
\t\t\t\tbreak;
\t\t\t// WEEKDAY - human
\t\t\tcase 'dd':
\t\t\tcase 'ddd':
\t\t\tcase 'dddd':
\t\t\t\ta = config._locale.weekdaysParse(input);
\t\t\t\t// if we didn't get a weekday name, mark the date as invalid
\t\t\t\tif (a != null) {
\t\t\t\t\tconfig._w = config._w || {};
\t\t\t\t\tconfig._w['d'] = a;
\t\t\t\t} else {
\t\t\t\t\tconfig._pf.invalidWeekday = input;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// WEEK, WEEK DAY - numeric
\t\t\tcase 'w':
\t\t\tcase 'ww':
\t\t\tcase 'W':
\t\t\tcase 'WW':
\t\t\tcase 'd':
\t\t\tcase 'e':
\t\t\tcase 'E':
\t\t\t\ttoken = token.substr(0, 1);
\t\t\t/* falls through */
\t\t\tcase 'gggg':
\t\t\tcase 'GGGG':
\t\t\tcase 'GGGGG':
\t\t\t\ttoken = token.substr(0, 2);
\t\t\t\tif (input) {
\t\t\t\t\tconfig._w = config._w || {};
\t\t\t\t\tconfig._w[token] = toInt(input);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'gg':
\t\t\tcase 'GG':
\t\t\t\tconfig._w = config._w || {};
\t\t\t\tconfig._w[token] = moment.parseTwoDigitYear(input);
\t\t}
\t}

\tfunction dayOfYearFromWeekInfo(config) {
\t\tvar w, weekYear, week, weekday, dow, doy, temp;

\t\tw = config._w;
\t\tif (w.GG != null || w.W != null || w.E != null) {
\t\t\tdow = 1;
\t\t\tdoy = 4;

\t\t\t// TODO: We need to take the current isoWeekYear, but that depends on
\t\t\t// how we interpret now (local, utc, fixed offset). So create
\t\t\t// a now version of current config (take local/utc/offset flags, and
\t\t\t// create now).
\t\t\tweekYear = dfl(w.GG, config._a[YEAR], weekOfYear(moment(), 1, 4).year);
\t\t\tweek = dfl(w.W, 1);
\t\t\tweekday = dfl(w.E, 1);
\t\t} else {
\t\t\tdow = config._locale._week.dow;
\t\t\tdoy = config._locale._week.doy;

\t\t\tweekYear = dfl(w.gg, config._a[YEAR], weekOfYear(moment(), dow, doy).year);
\t\t\tweek = dfl(w.w, 1);

\t\t\tif (w.d != null) {
\t\t\t\t// weekday -- low day numbers are considered next week
\t\t\t\tweekday = w.d;
\t\t\t\tif (weekday < dow) {
\t\t\t\t\t++week;
\t\t\t\t}
\t\t\t} else if (w.e != null) {
\t\t\t\t// local weekday -- counting starts from begining of week
\t\t\t\tweekday = w.e + dow;
\t\t\t} else {
\t\t\t\t// default to begining of week
\t\t\t\tweekday = dow;
\t\t\t}
\t\t}
\t\ttemp = dayOfYearFromWeeks(weekYear, week, weekday, doy, dow);

\t\tconfig._a[YEAR] = temp.year;
\t\tconfig._dayOfYear = temp.dayOfYear;
\t}

\t// convert an array to a date.
\t// the array should mirror the parameters below
\t// note: all values past the year are optional and will default to the lowest possible value.
\t// [year, month, day , hour, minute, second, millisecond]
\tfunction dateFromConfig(config) {
\t\tvar i, date, input = [], currentDate, yearToUse;

\t\tif (config._d) {
\t\t\treturn;
\t\t}

\t\tcurrentDate = currentDateArray(config);

\t\t//compute day of the year from weeks and weekdays
\t\tif (config._w && config._a[DATE] == null && config._a[MONTH] == null) {
\t\t\tdayOfYearFromWeekInfo(config);
\t\t}

\t\t//if the day of the year is set, figure out what it is
\t\tif (config._dayOfYear) {
\t\t\tyearToUse = dfl(config._a[YEAR], currentDate[YEAR]);

\t\t\tif (config._dayOfYear > daysInYear(yearToUse)) {
\t\t\t\tconfig._pf._overflowDayOfYear = true;
\t\t\t}

\t\t\tdate = makeUTCDate(yearToUse, 0, config._dayOfYear);
\t\t\tconfig._a[MONTH] = date.getUTCMonth();
\t\t\tconfig._a[DATE] = date.getUTCDate();
\t\t}

\t\t// Default to current date.
\t\t// * if no year, month, day of month are given, default to today
\t\t// * if day of month is given, default month and year
\t\t// * if month is given, default only year
\t\t// * if year is given, don't default anything
\t\tfor (i = 0; i < 3 && config._a[i] == null; ++i) {
\t\t\tconfig._a[i] = input[i] = currentDate[i];
\t\t}

\t\t// Zero out whatever was not defaulted, including time
\t\tfor (; i < 7; i++) {
\t\t\tconfig._a[i] = input[i] = (config._a[i] == null) ? (i === 2 ? 1 : 0) : config._a[i];
\t\t}

\t\tconfig._d = (config._useUTC ? makeUTCDate : makeDate).apply(null, input);
\t\t// Apply timezone offset from input. The actual zone can be changed
\t\t// with parseZone.
\t\tif (config._tzm != null) {
\t\t\tconfig._d.setUTCMinutes(config._d.getUTCMinutes() + config._tzm);
\t\t}
\t}

\tfunction dateFromObject(config) {
\t\tvar normalizedInput;

\t\tif (config._d) {
\t\t\treturn;
\t\t}

\t\tnormalizedInput = normalizeObjectUnits(config._i);
\t\tconfig._a = [
\t\t\tnormalizedInput.year,
\t\t\tnormalizedInput.month,
\t\t\tnormalizedInput.day,
\t\t\tnormalizedInput.hour,
\t\t\tnormalizedInput.minute,
\t\t\tnormalizedInput.second,
\t\t\tnormalizedInput.millisecond
\t\t];

\t\tdateFromConfig(config);
\t}

\tfunction currentDateArray(config) {
\t\tvar now = new Date();
\t\tif (config._useUTC) {
\t\t\treturn [
\t\t\t\tnow.getUTCFullYear(),
\t\t\t\tnow.getUTCMonth(),
\t\t\t\tnow.getUTCDate()
\t\t\t];
\t\t} else {
\t\t\treturn [now.getFullYear(), now.getMonth(), now.getDate()];
\t\t}
\t}

\t// date from string and format string
\tfunction makeDateFromStringAndFormat(config) {
\t\tif (config._f === moment.ISO_8601) {
\t\t\tparseISO(config);
\t\t\treturn;
\t\t}

\t\tconfig._a = [];
\t\tconfig._pf.empty = true;

\t\t// This array is used to make a Date, either with `new Date` or `Date.UTC`
\t\tvar string = '' + config._i,
\t\t\ti, parsedInput, tokens, token, skipped,
\t\t\tstringLength = string.length,
\t\t\ttotalParsedInputLength = 0;

\t\ttokens = expandFormat(config._f, config._locale).match(formattingTokens) || [];

\t\tfor (i = 0; i < tokens.length; i++) {
\t\t\ttoken = tokens[i];
\t\t\tparsedInput = (string.match(getParseRegexForToken(token, config)) || [])[0];
\t\t\tif (parsedInput) {
\t\t\t\tskipped = string.substr(0, string.indexOf(parsedInput));
\t\t\t\tif (skipped.length > 0) {
\t\t\t\t\tconfig._pf.unusedInput.push(skipped);
\t\t\t\t}
\t\t\t\tstring = string.slice(string.indexOf(parsedInput) + parsedInput.length);
\t\t\t\ttotalParsedInputLength += parsedInput.length;
\t\t\t}
\t\t\t// don't parse if it's not a known token
\t\t\tif (formatTokenFunctions[token]) {
\t\t\t\tif (parsedInput) {
\t\t\t\t\tconfig._pf.empty = false;
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tconfig._pf.unusedTokens.push(token);
\t\t\t\t}
\t\t\t\taddTimeToArrayFromToken(token, parsedInput, config);
\t\t\t}
\t\t\telse if (config._strict && !parsedInput) {
\t\t\t\tconfig._pf.unusedTokens.push(token);
\t\t\t}
\t\t}

\t\t// add remaining unparsed input length to the string
\t\tconfig._pf.charsLeftOver = stringLength - totalParsedInputLength;
\t\tif (string.length > 0) {
\t\t\tconfig._pf.unusedInput.push(string);
\t\t}

\t\t// handle am pm
\t\tif (config._isPm && config._a[HOUR] < 12) {
\t\t\tconfig._a[HOUR] += 12;
\t\t}
\t\t// if is 12 am, change hours to 0
\t\tif (config._isPm === false && config._a[HOUR] === 12) {
\t\t\tconfig._a[HOUR] = 0;
\t\t}

\t\tdateFromConfig(config);
\t\tcheckOverflow(config);
\t}

\tfunction unescapeFormat(s) {
\t\treturn s.replace(/\\\\(\\[)|\\\\(\\])|\\[([^\\]\\[]*)\\]|\\\\(.)/g, function (matched, p1, p2, p3, p4) {
\t\t\treturn p1 || p2 || p3 || p4;
\t\t});
\t}

\t// Code from http://stackoverflow.com/questions/3561493/is-there-a-regexp-escape-function-in-javascript
\tfunction regexpEscape(s) {
\t\treturn s.replace(/[-\\/\\\\^\$*+?.()|[\\]{}]/g, '\\\\\$&');
\t}

\t// date from string and array of format strings
\tfunction makeDateFromStringAndArray(config) {
\t\tvar tempConfig,
\t\t\tbestMoment,

\t\t\tscoreToBeat,
\t\t\ti,
\t\t\tcurrentScore;

\t\tif (config._f.length === 0) {
\t\t\tconfig._pf.invalidFormat = true;
\t\t\tconfig._d = new Date(NaN);
\t\t\treturn;
\t\t}

\t\tfor (i = 0; i < config._f.length; i++) {
\t\t\tcurrentScore = 0;
\t\t\ttempConfig = copyConfig({}, config);
\t\t\ttempConfig._pf = defaultParsingFlags();
\t\t\ttempConfig._f = config._f[i];
\t\t\tmakeDateFromStringAndFormat(tempConfig);

\t\t\tif (!isValid(tempConfig)) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// if there is any input that was not parsed add a penalty for that format
\t\t\tcurrentScore += tempConfig._pf.charsLeftOver;

\t\t\t//or tokens
\t\t\tcurrentScore += tempConfig._pf.unusedTokens.length * 10;

\t\t\ttempConfig._pf.score = currentScore;

\t\t\tif (scoreToBeat == null || currentScore < scoreToBeat) {
\t\t\t\tscoreToBeat = currentScore;
\t\t\t\tbestMoment = tempConfig;
\t\t\t}
\t\t}

\t\textend(config, bestMoment || tempConfig);
\t}

\t// date from iso format
\tfunction parseISO(config) {
\t\tvar i, l,
\t\t\tstring = config._i,
\t\t\tmatch = isoRegex.exec(string);

\t\tif (match) {
\t\t\tconfig._pf.iso = true;
\t\t\tfor (i = 0, l = isoDates.length; i < l; i++) {
\t\t\t\tif (isoDates[i][1].exec(string)) {
\t\t\t\t\t// match[5] should be \"T\" or undefined
\t\t\t\t\tconfig._f = isoDates[i][0] + (match[6] || ' ');
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tfor (i = 0, l = isoTimes.length; i < l; i++) {
\t\t\t\tif (isoTimes[i][1].exec(string)) {
\t\t\t\t\tconfig._f += isoTimes[i][0];
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tif (string.match(parseTokenTimezone)) {
\t\t\t\tconfig._f += 'Z';
\t\t\t}
\t\t\tmakeDateFromStringAndFormat(config);
\t\t} else {
\t\t\tconfig._isValid = false;
\t\t}
\t}

\t// date from iso format or fallback
\tfunction makeDateFromString(config) {
\t\tparseISO(config);
\t\tif (config._isValid === false) {
\t\t\tdelete config._isValid;
\t\t\tmoment.createFromInputFallback(config);
\t\t}
\t}

\tfunction makeDateFromInput(config) {
\t\tvar input = config._i, matched;
\t\tif (input === undefined) {
\t\t\tconfig._d = new Date();
\t\t} else if (isDate(input)) {
\t\t\tconfig._d = new Date(+input);
\t\t} else if ((matched = aspNetJsonRegex.exec(input)) !== null) {
\t\t\tconfig._d = new Date(+matched[1]);
\t\t} else if (typeof input === 'string') {
\t\t\tmakeDateFromString(config);
\t\t} else if (isArray(input)) {
\t\t\tconfig._a = input.slice(0);
\t\t\tdateFromConfig(config);
\t\t} else if (typeof(input) === 'object') {
\t\t\tdateFromObject(config);
\t\t} else if (typeof(input) === 'number') {
\t\t\t// from milliseconds
\t\t\tconfig._d = new Date(input);
\t\t} else {
\t\t\tmoment.createFromInputFallback(config);
\t\t}
\t}

\tfunction makeDate(y, m, d, h, M, s, ms) {
\t\t//can't just apply() to create a date:
\t\t//http://stackoverflow.com/questions/181348/instantiating-a-javascript-object-by-calling-prototype-constructor-apply
\t\tvar date = new Date(y, m, d, h, M, s, ms);

\t\t//the date constructor doesn't accept years < 1970
\t\tif (y < 1970) {
\t\t\tdate.setFullYear(y);
\t\t}
\t\treturn date;
\t}

\tfunction makeUTCDate(y) {
\t\tvar date = new Date(Date.UTC.apply(null, arguments));
\t\tif (y < 1970) {
\t\t\tdate.setUTCFullYear(y);
\t\t}
\t\treturn date;
\t}

\tfunction parseWeekday(input, locale) {
\t\tif (typeof input === 'string') {
\t\t\tif (!isNaN(input)) {
\t\t\t\tinput = parseInt(input, 10);
\t\t\t}
\t\t\telse {
\t\t\t\tinput = locale.weekdaysParse(input);
\t\t\t\tif (typeof input !== 'number') {
\t\t\t\t\treturn null;
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn input;
\t}

\t/************************************
\t Relative Time
\t ************************************/


\t\t// helper function for moment.fn.from, moment.fn.fromNow, and moment.duration.fn.humanize
\tfunction substituteTimeAgo(string, number, withoutSuffix, isFuture, locale) {
\t\treturn locale.relativeTime(number || 1, !!withoutSuffix, string, isFuture);
\t}

\tfunction relativeTime(posNegDuration, withoutSuffix, locale) {
\t\tvar duration = moment.duration(posNegDuration).abs(),
\t\t\tseconds = round(duration.as('s')),
\t\t\tminutes = round(duration.as('m')),
\t\t\thours = round(duration.as('h')),
\t\t\tdays = round(duration.as('d')),
\t\t\tmonths = round(duration.as('M')),
\t\t\tyears = round(duration.as('y')),

\t\t\targs = seconds < relativeTimeThresholds.s && ['s', seconds] ||
\t\t\t\tminutes === 1 && ['m'] ||
\t\t\t\tminutes < relativeTimeThresholds.m && ['mm', minutes] ||
\t\t\t\thours === 1 && ['h'] ||
\t\t\t\thours < relativeTimeThresholds.h && ['hh', hours] ||
\t\t\t\tdays === 1 && ['d'] ||
\t\t\t\tdays < relativeTimeThresholds.d && ['dd', days] ||
\t\t\t\tmonths === 1 && ['M'] ||
\t\t\t\tmonths < relativeTimeThresholds.M && ['MM', months] ||
\t\t\t\tyears === 1 && ['y'] || ['yy', years];

\t\targs[2] = withoutSuffix;
\t\targs[3] = +posNegDuration > 0;
\t\targs[4] = locale;
\t\treturn substituteTimeAgo.apply({}, args);
\t}


\t/************************************
\t Week of Year
\t ************************************/


\t\t// firstDayOfWeek       0 = sun, 6 = sat
\t\t//                      the day of the week that starts the week
\t\t//                      (usually sunday or monday)
\t\t// firstDayOfWeekOfYear 0 = sun, 6 = sat
\t\t//                      the first week is the week that contains the first
\t\t//                      of this day of the week
\t\t//                      (eg. ISO weeks use thursday (4))
\tfunction weekOfYear(mom, firstDayOfWeek, firstDayOfWeekOfYear) {
\t\tvar end = firstDayOfWeekOfYear - firstDayOfWeek,
\t\t\tdaysToDayOfWeek = firstDayOfWeekOfYear - mom.day(),
\t\t\tadjustedMoment;


\t\tif (daysToDayOfWeek > end) {
\t\t\tdaysToDayOfWeek -= 7;
\t\t}

\t\tif (daysToDayOfWeek < end - 7) {
\t\t\tdaysToDayOfWeek += 7;
\t\t}

\t\tadjustedMoment = moment(mom).add(daysToDayOfWeek, 'd');
\t\treturn {
\t\t\tweek: Math.ceil(adjustedMoment.dayOfYear() / 7),
\t\t\tyear: adjustedMoment.year()
\t\t};
\t}

\t//http://en.wikipedia.org/wiki/ISO_week_date#Calculating_a_date_given_the_year.2C_week_number_and_weekday
\tfunction dayOfYearFromWeeks(year, week, weekday, firstDayOfWeekOfYear, firstDayOfWeek) {
\t\tvar d = makeUTCDate(year, 0, 1).getUTCDay(), daysToAdd, dayOfYear;

\t\td = d === 0 ? 7 : d;
\t\tweekday = weekday != null ? weekday : firstDayOfWeek;
\t\tdaysToAdd = firstDayOfWeek - d + (d > firstDayOfWeekOfYear ? 7 : 0) - (d < firstDayOfWeek ? 7 : 0);
\t\tdayOfYear = 7 * (week - 1) + (weekday - firstDayOfWeek) + daysToAdd + 1;

\t\treturn {
\t\t\tyear: dayOfYear > 0 ? year : year - 1,
\t\t\tdayOfYear: dayOfYear > 0 ?  dayOfYear : daysInYear(year - 1) + dayOfYear
\t\t};
\t}

\t/************************************
\t Top Level Functions
\t ************************************/

\tfunction makeMoment(config) {
\t\tvar input = config._i,
\t\t\tformat = config._f;

\t\tconfig._locale = config._locale || moment.localeData(config._l);

\t\tif (input === null || (format === undefined && input === '')) {
\t\t\treturn moment.invalid({nullInput: true});
\t\t}

\t\tif (typeof input === 'string') {
\t\t\tconfig._i = input = config._locale.preparse(input);
\t\t}

\t\tif (moment.isMoment(input)) {
\t\t\treturn new Moment(input, true);
\t\t} else if (format) {
\t\t\tif (isArray(format)) {
\t\t\t\tmakeDateFromStringAndArray(config);
\t\t\t} else {
\t\t\t\tmakeDateFromStringAndFormat(config);
\t\t\t}
\t\t} else {
\t\t\tmakeDateFromInput(config);
\t\t}

\t\treturn new Moment(config);
\t}

\tmoment = function (input, format, locale, strict) {
\t\tvar c;

\t\tif (typeof(locale) === \"boolean\") {
\t\t\tstrict = locale;
\t\t\tlocale = undefined;
\t\t}
\t\t// object construction must be done this way.
\t\t// https://github.com/moment/moment/issues/1423
\t\tc = {};
\t\tc._isAMomentObject = true;
\t\tc._i = input;
\t\tc._f = format;
\t\tc._l = locale;
\t\tc._strict = strict;
\t\tc._isUTC = false;
\t\tc._pf = defaultParsingFlags();

\t\treturn makeMoment(c);
\t};

\tmoment.suppressDeprecationWarnings = false;

\tmoment.createFromInputFallback = deprecate(
\t\t'moment construction falls back to js Date. This is ' +
\t\t\t'discouraged and will be removed in upcoming major ' +
\t\t\t'release. Please refer to ' +
\t\t\t'https://github.com/moment/moment/issues/1407 for more info.',
\t\tfunction (config) {
\t\t\tconfig._d = new Date(config._i);
\t\t}
\t);

\t// Pick a moment m from moments so that m[fn](other) is true for all
\t// other. This relies on the function fn to be transitive.
\t//
\t// moments should either be an array of moment objects or an array, whose
\t// first element is an array of moment objects.
\tfunction pickBy(fn, moments) {
\t\tvar res, i;
\t\tif (moments.length === 1 && isArray(moments[0])) {
\t\t\tmoments = moments[0];
\t\t}
\t\tif (!moments.length) {
\t\t\treturn moment();
\t\t}
\t\tres = moments[0];
\t\tfor (i = 1; i < moments.length; ++i) {
\t\t\tif (moments[i][fn](res)) {
\t\t\t\tres = moments[i];
\t\t\t}
\t\t}
\t\treturn res;
\t}

\tmoment.min = function () {
\t\tvar args = [].slice.call(arguments, 0);

\t\treturn pickBy('isBefore', args);
\t};

\tmoment.max = function () {
\t\tvar args = [].slice.call(arguments, 0);

\t\treturn pickBy('isAfter', args);
\t};

\t// creating with utc
\tmoment.utc = function (input, format, locale, strict) {
\t\tvar c;

\t\tif (typeof(locale) === \"boolean\") {
\t\t\tstrict = locale;
\t\t\tlocale = undefined;
\t\t}
\t\t// object construction must be done this way.
\t\t// https://github.com/moment/moment/issues/1423
\t\tc = {};
\t\tc._isAMomentObject = true;
\t\tc._useUTC = true;
\t\tc._isUTC = true;
\t\tc._l = locale;
\t\tc._i = input;
\t\tc._f = format;
\t\tc._strict = strict;
\t\tc._pf = defaultParsingFlags();

\t\treturn makeMoment(c).utc();
\t};

\t// creating with unix timestamp (in seconds)
\tmoment.unix = function (input) {
\t\treturn moment(input * 1000);
\t};

\t// duration
\tmoment.duration = function (input, key) {
\t\tvar duration = input,
\t\t// matching against regexp is expensive, do it on demand
\t\t\tmatch = null,
\t\t\tsign,
\t\t\tret,
\t\t\tparseIso,
\t\t\tdiffRes;

\t\tif (moment.isDuration(input)) {
\t\t\tduration = {
\t\t\t\tms: input._milliseconds,
\t\t\t\td: input._days,
\t\t\t\tM: input._months
\t\t\t};
\t\t} else if (typeof input === 'number') {
\t\t\tduration = {};
\t\t\tif (key) {
\t\t\t\tduration[key] = input;
\t\t\t} else {
\t\t\t\tduration.milliseconds = input;
\t\t\t}
\t\t} else if (!!(match = aspNetTimeSpanJsonRegex.exec(input))) {
\t\t\tsign = (match[1] === '-') ? -1 : 1;
\t\t\tduration = {
\t\t\t\ty: 0,
\t\t\t\td: toInt(match[DATE]) * sign,
\t\t\t\th: toInt(match[HOUR]) * sign,
\t\t\t\tm: toInt(match[MINUTE]) * sign,
\t\t\t\ts: toInt(match[SECOND]) * sign,
\t\t\t\tms: toInt(match[MILLISECOND]) * sign
\t\t\t};
\t\t} else if (!!(match = isoDurationRegex.exec(input))) {
\t\t\tsign = (match[1] === '-') ? -1 : 1;
\t\t\tparseIso = function (inp) {
\t\t\t\t// We'd normally use ~~inp for this, but unfortunately it also
\t\t\t\t// converts floats to ints.
\t\t\t\t// inp may be undefined, so careful calling replace on it.
\t\t\t\tvar res = inp && parseFloat(inp.replace(',', '.'));
\t\t\t\t// apply sign while we're at it
\t\t\t\treturn (isNaN(res) ? 0 : res) * sign;
\t\t\t};
\t\t\tduration = {
\t\t\t\ty: parseIso(match[2]),
\t\t\t\tM: parseIso(match[3]),
\t\t\t\td: parseIso(match[4]),
\t\t\t\th: parseIso(match[5]),
\t\t\t\tm: parseIso(match[6]),
\t\t\t\ts: parseIso(match[7]),
\t\t\t\tw: parseIso(match[8])
\t\t\t};
\t\t} else if (typeof duration === 'object' &&
\t\t\t('from' in duration || 'to' in duration)) {
\t\t\tdiffRes = momentsDifference(moment(duration.from), moment(duration.to));

\t\t\tduration = {};
\t\t\tduration.ms = diffRes.milliseconds;
\t\t\tduration.M = diffRes.months;
\t\t}

\t\tret = new Duration(duration);

\t\tif (moment.isDuration(input) && input.hasOwnProperty('_locale')) {
\t\t\tret._locale = input._locale;
\t\t}

\t\treturn ret;
\t};

\t// version number
\tmoment.version = VERSION;

\t// default format
\tmoment.defaultFormat = isoFormat;

\t// constant that refers to the ISO standard
\tmoment.ISO_8601 = function () {};

\t// Plugins that add properties should also add the key here (null value),
\t// so we can properly clone ourselves.
\tmoment.momentProperties = momentProperties;

\t// This function will be called whenever a moment is mutated.
\t// It is intended to keep the offset in sync with the timezone.
\tmoment.updateOffset = function () {};

\t// This function allows you to set a threshold for relative time strings
\tmoment.relativeTimeThreshold = function (threshold, limit) {
\t\tif (relativeTimeThresholds[threshold] === undefined) {
\t\t\treturn false;
\t\t}
\t\tif (limit === undefined) {
\t\t\treturn relativeTimeThresholds[threshold];
\t\t}
\t\trelativeTimeThresholds[threshold] = limit;
\t\treturn true;
\t};

\tmoment.lang = deprecate(
\t\t\"moment.lang is deprecated. Use moment.locale instead.\",
\t\tfunction (key, value) {
\t\t\treturn moment.locale(key, value);
\t\t}
\t);

\t// This function will load locale and then set the global locale.  If
\t// no arguments are passed in, it will simply return the current global
\t// locale key.
\tmoment.locale = function (key, values) {
\t\tvar data;
\t\tif (key) {
\t\t\tif (typeof(values) !== \"undefined\") {
\t\t\t\tdata = moment.defineLocale(key, values);
\t\t\t}
\t\t\telse {
\t\t\t\tdata = moment.localeData(key);
\t\t\t}

\t\t\tif (data) {
\t\t\t\tmoment.duration._locale = moment._locale = data;
\t\t\t}
\t\t}

\t\treturn moment._locale._abbr;
\t};

\tmoment.defineLocale = function (name, values) {
\t\tif (values !== null) {
\t\t\tvalues.abbr = name;
\t\t\tif (!locales[name]) {
\t\t\t\tlocales[name] = new Locale();
\t\t\t}
\t\t\tlocales[name].set(values);

\t\t\t// backwards compat for now: also set the locale
\t\t\tmoment.locale(name);

\t\t\treturn locales[name];
\t\t} else {
\t\t\t// useful for testing
\t\t\tdelete locales[name];
\t\t\treturn null;
\t\t}
\t};

\tmoment.langData = deprecate(
\t\t\"moment.langData is deprecated. Use moment.localeData instead.\",
\t\tfunction (key) {
\t\t\treturn moment.localeData(key);
\t\t}
\t);

\t// returns locale data
\tmoment.localeData = function (key) {
\t\tvar locale;

\t\tif (key && key._locale && key._locale._abbr) {
\t\t\tkey = key._locale._abbr;
\t\t}

\t\tif (!key) {
\t\t\treturn moment._locale;
\t\t}

\t\tif (!isArray(key)) {
\t\t\t//short-circuit everything else
\t\t\tlocale = loadLocale(key);
\t\t\tif (locale) {
\t\t\t\treturn locale;
\t\t\t}
\t\t\tkey = [key];
\t\t}

\t\treturn chooseLocale(key);
\t};

\t// compare moment object
\tmoment.isMoment = function (obj) {
\t\treturn obj instanceof Moment ||
\t\t\t(obj != null &&  obj.hasOwnProperty('_isAMomentObject'));
\t};

\t// for typechecking Duration objects
\tmoment.isDuration = function (obj) {
\t\treturn obj instanceof Duration;
\t};

\tfor (i = lists.length - 1; i >= 0; --i) {
\t\tmakeList(lists[i]);
\t}

\tmoment.normalizeUnits = function (units) {
\t\treturn normalizeUnits(units);
\t};

\tmoment.invalid = function (flags) {
\t\tvar m = moment.utc(NaN);
\t\tif (flags != null) {
\t\t\textend(m._pf, flags);
\t\t}
\t\telse {
\t\t\tm._pf.userInvalidated = true;
\t\t}

\t\treturn m;
\t};

\tmoment.parseZone = function () {
\t\treturn moment.apply(null, arguments).parseZone();
\t};

\tmoment.parseTwoDigitYear = function (input) {
\t\treturn toInt(input) + (toInt(input) > 68 ? 1900 : 2000);
\t};

\t/************************************
\t Moment Prototype
\t ************************************/


\textend(moment.fn = Moment.prototype, {

\t\tclone : function () {
\t\t\treturn moment(this);
\t\t},

\t\tvalueOf : function () {
\t\t\treturn +this._d + ((this._offset || 0) * 60000);
\t\t},

\t\tunix : function () {
\t\t\treturn Math.floor(+this / 1000);
\t\t},

\t\ttoString : function () {
\t\t\treturn this.clone().locale('en').format(\"ddd MMM DD YYYY HH:mm:ss [GMT]ZZ\");
\t\t},

\t\ttoDate : function () {
\t\t\treturn this._offset ? new Date(+this) : this._d;
\t\t},

\t\ttoISOString : function () {
\t\t\tvar m = moment(this).utc();
\t\t\tif (0 < m.year() && m.year() <= 9999) {
\t\t\t\treturn formatMoment(m, 'YYYY-MM-DD[T]HH:mm:ss.SSS[Z]');
\t\t\t} else {
\t\t\t\treturn formatMoment(m, 'YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]');
\t\t\t}
\t\t},

\t\ttoArray : function () {
\t\t\tvar m = this;
\t\t\treturn [
\t\t\t\tm.year(),
\t\t\t\tm.month(),
\t\t\t\tm.date(),
\t\t\t\tm.hours(),
\t\t\t\tm.minutes(),
\t\t\t\tm.seconds(),
\t\t\t\tm.milliseconds()
\t\t\t];
\t\t},

\t\tisValid : function () {
\t\t\treturn isValid(this);
\t\t},

\t\tisDSTShifted : function () {
\t\t\tif (this._a) {
\t\t\t\treturn this.isValid() && compareArrays(this._a, (this._isUTC ? moment.utc(this._a) : moment(this._a)).toArray()) > 0;
\t\t\t}

\t\t\treturn false;
\t\t},

\t\tparsingFlags : function () {
\t\t\treturn extend({}, this._pf);
\t\t},

\t\tinvalidAt: function () {
\t\t\treturn this._pf.overflow;
\t\t},

\t\tutc : function (keepLocalTime) {
\t\t\treturn this.zone(0, keepLocalTime);
\t\t},

\t\tlocal : function (keepLocalTime) {
\t\t\tif (this._isUTC) {
\t\t\t\tthis.zone(0, keepLocalTime);
\t\t\t\tthis._isUTC = false;

\t\t\t\tif (keepLocalTime) {
\t\t\t\t\tthis.add(this._d.getTimezoneOffset(), 'm');
\t\t\t\t}
\t\t\t}
\t\t\treturn this;
\t\t},

\t\tformat : function (inputString) {
\t\t\tvar output = formatMoment(this, inputString || moment.defaultFormat);
\t\t\treturn this.localeData().postformat(output);
\t\t},

\t\tadd : createAdder(1, 'add'),

\t\tsubtract : createAdder(-1, 'subtract'),

\t\tdiff : function (input, units, asFloat) {
\t\t\tvar that = makeAs(input, this),
\t\t\t\tzoneDiff = (this.zone() - that.zone()) * 6e4,
\t\t\t\tdiff, output;

\t\t\tunits = normalizeUnits(units);

\t\t\tif (units === 'year' || units === 'month') {
\t\t\t\t// average number of days in the months in the given dates
\t\t\t\tdiff = (this.daysInMonth() + that.daysInMonth()) * 432e5; // 24 * 60 * 60 * 1000 / 2
\t\t\t\t// difference in months
\t\t\t\toutput = ((this.year() - that.year()) * 12) + (this.month() - that.month());
\t\t\t\t// adjust by taking difference in days, average number of days
\t\t\t\t// and dst in the given months.
\t\t\t\toutput += ((this - moment(this).startOf('month')) -
\t\t\t\t\t(that - moment(that).startOf('month'))) / diff;
\t\t\t\t// same as above but with zones, to negate all dst
\t\t\t\toutput -= ((this.zone() - moment(this).startOf('month').zone()) -
\t\t\t\t\t(that.zone() - moment(that).startOf('month').zone())) * 6e4 / diff;
\t\t\t\tif (units === 'year') {
\t\t\t\t\toutput = output / 12;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tdiff = (this - that);
\t\t\t\toutput = units === 'second' ? diff / 1e3 : // 1000
\t\t\t\t\tunits === 'minute' ? diff / 6e4 : // 1000 * 60
\t\t\t\t\t\tunits === 'hour' ? diff / 36e5 : // 1000 * 60 * 60
\t\t\t\t\t\t\tunits === 'day' ? (diff - zoneDiff) / 864e5 : // 1000 * 60 * 60 * 24, negate dst
\t\t\t\t\t\t\t\tunits === 'week' ? (diff - zoneDiff) / 6048e5 : // 1000 * 60 * 60 * 24 * 7, negate dst
\t\t\t\t\t\t\t\t\tdiff;
\t\t\t}
\t\t\treturn asFloat ? output : absRound(output);
\t\t},

\t\tfrom : function (time, withoutSuffix) {
\t\t\treturn moment.duration({to: this, from: time}).locale(this.locale()).humanize(!withoutSuffix);
\t\t},

\t\tfromNow : function (withoutSuffix) {
\t\t\treturn this.from(moment(), withoutSuffix);
\t\t},

\t\tcalendar : function (time) {
\t\t\t// We want to compare the start of today, vs this.
\t\t\t// Getting start-of-today depends on whether we're zone'd or not.
\t\t\tvar now = time || moment(),
\t\t\t\tsod = makeAs(now, this).startOf('day'),
\t\t\t\tdiff = this.diff(sod, 'days', true),
\t\t\t\tformat = diff < -6 ? 'sameElse' :
\t\t\t\t\tdiff < -1 ? 'lastWeek' :
\t\t\t\t\t\tdiff < 0 ? 'lastDay' :
\t\t\t\t\t\t\tdiff < 1 ? 'sameDay' :
\t\t\t\t\t\t\t\tdiff < 2 ? 'nextDay' :
\t\t\t\t\t\t\t\t\tdiff < 7 ? 'nextWeek' : 'sameElse';
\t\t\treturn this.format(this.localeData().calendar(format, this));
\t\t},

\t\tisLeapYear : function () {
\t\t\treturn isLeapYear(this.year());
\t\t},

\t\tisDST : function () {
\t\t\treturn (this.zone() < this.clone().month(0).zone() ||
\t\t\t\tthis.zone() < this.clone().month(5).zone());
\t\t},

\t\tday : function (input) {
\t\t\tvar day = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
\t\t\tif (input != null) {
\t\t\t\tinput = parseWeekday(input, this.localeData());
\t\t\t\treturn this.add(input - day, 'd');
\t\t\t} else {
\t\t\t\treturn day;
\t\t\t}
\t\t},

\t\tmonth : makeAccessor('Month', true),

\t\tstartOf : function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\t// the following switch intentionally omits break keywords
\t\t\t// to utilize falling through the cases.
\t\t\tswitch (units) {
\t\t\t\tcase 'year':
\t\t\t\t\tthis.month(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'quarter':
\t\t\t\tcase 'month':
\t\t\t\t\tthis.date(1);
\t\t\t\t/* falls through */
\t\t\t\tcase 'week':
\t\t\t\tcase 'isoWeek':
\t\t\t\tcase 'day':
\t\t\t\t\tthis.hours(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'hour':
\t\t\t\t\tthis.minutes(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'minute':
\t\t\t\t\tthis.seconds(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'second':
\t\t\t\t\tthis.milliseconds(0);
\t\t\t\t/* falls through */
\t\t\t}

\t\t\t// weeks are a special case
\t\t\tif (units === 'week') {
\t\t\t\tthis.weekday(0);
\t\t\t} else if (units === 'isoWeek') {
\t\t\t\tthis.isoWeekday(1);
\t\t\t}

\t\t\t// quarters are also special
\t\t\tif (units === 'quarter') {
\t\t\t\tthis.month(Math.floor(this.month() / 3) * 3);
\t\t\t}

\t\t\treturn this;
\t\t},

\t\tendOf: function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\treturn this.startOf(units).add(1, (units === 'isoWeek' ? 'week' : units)).subtract(1, 'ms');
\t\t},

\t\tisAfter: function (input, units) {
\t\t\tunits = typeof units !== 'undefined' ? units : 'millisecond';
\t\t\treturn +this.clone().startOf(units) > +moment(input).startOf(units);
\t\t},

\t\tisBefore: function (input, units) {
\t\t\tunits = typeof units !== 'undefined' ? units : 'millisecond';
\t\t\treturn +this.clone().startOf(units) < +moment(input).startOf(units);
\t\t},

\t\tisSame: function (input, units) {
\t\t\tunits = units || 'ms';
\t\t\treturn +this.clone().startOf(units) === +makeAs(input, this).startOf(units);
\t\t},

\t\tmin: deprecate(
\t\t\t'moment().min is deprecated, use moment.min instead. https://github.com/moment/moment/issues/1548',
\t\t\tfunction (other) {
\t\t\t\tother = moment.apply(null, arguments);
\t\t\t\treturn other < this ? this : other;
\t\t\t}
\t\t),

\t\tmax: deprecate(
\t\t\t'moment().max is deprecated, use moment.max instead. https://github.com/moment/moment/issues/1548',
\t\t\tfunction (other) {
\t\t\t\tother = moment.apply(null, arguments);
\t\t\t\treturn other > this ? this : other;
\t\t\t}
\t\t),

\t\t// keepLocalTime = true means only change the timezone, without
\t\t// affecting the local hour. So 5:31:26 +0300 --[zone(2, true)]-->
\t\t// 5:31:26 +0200 It is possible that 5:31:26 doesn't exist int zone
\t\t// +0200, so we adjust the time as needed, to be valid.
\t\t//
\t\t// Keeping the time actually adds/subtracts (one hour)
\t\t// from the actual represented time. That is why we call updateOffset
\t\t// a second time. In case it wants us to change the offset again
\t\t// _changeInProgress == true case, then we have to adjust, because
\t\t// there is no such time in the given timezone.
\t\tzone : function (input, keepLocalTime) {
\t\t\tvar offset = this._offset || 0,
\t\t\t\tlocalAdjust;
\t\t\tif (input != null) {
\t\t\t\tif (typeof input === 'string') {
\t\t\t\t\tinput = timezoneMinutesFromString(input);
\t\t\t\t}
\t\t\t\tif (Math.abs(input) < 16) {
\t\t\t\t\tinput = input * 60;
\t\t\t\t}
\t\t\t\tif (!this._isUTC && keepLocalTime) {
\t\t\t\t\tlocalAdjust = this._d.getTimezoneOffset();
\t\t\t\t}
\t\t\t\tthis._offset = input;
\t\t\t\tthis._isUTC = true;
\t\t\t\tif (localAdjust != null) {
\t\t\t\t\tthis.subtract(localAdjust, 'm');
\t\t\t\t}
\t\t\t\tif (offset !== input) {
\t\t\t\t\tif (!keepLocalTime || this._changeInProgress) {
\t\t\t\t\t\taddOrSubtractDurationFromMoment(this,
\t\t\t\t\t\t\tmoment.duration(offset - input, 'm'), 1, false);
\t\t\t\t\t} else if (!this._changeInProgress) {
\t\t\t\t\t\tthis._changeInProgress = true;
\t\t\t\t\t\tmoment.updateOffset(this, true);
\t\t\t\t\t\tthis._changeInProgress = null;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\treturn this._isUTC ? offset : this._d.getTimezoneOffset();
\t\t\t}
\t\t\treturn this;
\t\t},

\t\tzoneAbbr : function () {
\t\t\treturn this._isUTC ? 'UTC' : '';
\t\t},

\t\tzoneName : function () {
\t\t\treturn this._isUTC ? 'Coordinated Universal Time' : '';
\t\t},

\t\tparseZone : function () {
\t\t\tif (this._tzm) {
\t\t\t\tthis.zone(this._tzm);
\t\t\t} else if (typeof this._i === 'string') {
\t\t\t\tthis.zone(this._i);
\t\t\t}
\t\t\treturn this;
\t\t},

\t\thasAlignedHourOffset : function (input) {
\t\t\tif (!input) {
\t\t\t\tinput = 0;
\t\t\t}
\t\t\telse {
\t\t\t\tinput = moment(input).zone();
\t\t\t}

\t\t\treturn (this.zone() - input) % 60 === 0;
\t\t},

\t\tdaysInMonth : function () {
\t\t\treturn daysInMonth(this.year(), this.month());
\t\t},

\t\tdayOfYear : function (input) {
\t\t\tvar dayOfYear = round((moment(this).startOf('day') - moment(this).startOf('year')) / 864e5) + 1;
\t\t\treturn input == null ? dayOfYear : this.add((input - dayOfYear), 'd');
\t\t},

\t\tquarter : function (input) {
\t\t\treturn input == null ? Math.ceil((this.month() + 1) / 3) : this.month((input - 1) * 3 + this.month() % 3);
\t\t},

\t\tweekYear : function (input) {
\t\t\tvar year = weekOfYear(this, this.localeData()._week.dow, this.localeData()._week.doy).year;
\t\t\treturn input == null ? year : this.add((input - year), 'y');
\t\t},

\t\tisoWeekYear : function (input) {
\t\t\tvar year = weekOfYear(this, 1, 4).year;
\t\t\treturn input == null ? year : this.add((input - year), 'y');
\t\t},

\t\tweek : function (input) {
\t\t\tvar week = this.localeData().week(this);
\t\t\treturn input == null ? week : this.add((input - week) * 7, 'd');
\t\t},

\t\tisoWeek : function (input) {
\t\t\tvar week = weekOfYear(this, 1, 4).week;
\t\t\treturn input == null ? week : this.add((input - week) * 7, 'd');
\t\t},

\t\tweekday : function (input) {
\t\t\tvar weekday = (this.day() + 7 - this.localeData()._week.dow) % 7;
\t\t\treturn input == null ? weekday : this.add(input - weekday, 'd');
\t\t},

\t\tisoWeekday : function (input) {
\t\t\t// behaves the same as moment#day except
\t\t\t// as a getter, returns 7 instead of 0 (1-7 range instead of 0-6)
\t\t\t// as a setter, sunday should belong to the previous week.
\t\t\treturn input == null ? this.day() || 7 : this.day(this.day() % 7 ? input : input - 7);
\t\t},

\t\tisoWeeksInYear : function () {
\t\t\treturn weeksInYear(this.year(), 1, 4);
\t\t},

\t\tweeksInYear : function () {
\t\t\tvar weekInfo = this.localeData()._week;
\t\t\treturn weeksInYear(this.year(), weekInfo.dow, weekInfo.doy);
\t\t},

\t\tget : function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\treturn this[units]();
\t\t},

\t\tset : function (units, value) {
\t\t\tunits = normalizeUnits(units);
\t\t\tif (typeof this[units] === 'function') {
\t\t\t\tthis[units](value);
\t\t\t}
\t\t\treturn this;
\t\t},

\t\t// If passed a locale key, it will set the locale for this
\t\t// instance.  Otherwise, it will return the locale configuration
\t\t// variables for this instance.
\t\tlocale : function (key) {
\t\t\tif (key === undefined) {
\t\t\t\treturn this._locale._abbr;
\t\t\t} else {
\t\t\t\tthis._locale = moment.localeData(key);
\t\t\t\treturn this;
\t\t\t}
\t\t},

\t\tlang : deprecate(
\t\t\t\"moment().lang() is deprecated. Use moment().localeData() instead.\",
\t\t\tfunction (key) {
\t\t\t\tif (key === undefined) {
\t\t\t\t\treturn this.localeData();
\t\t\t\t} else {
\t\t\t\t\tthis._locale = moment.localeData(key);
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t}
\t\t),

\t\tlocaleData : function () {
\t\t\treturn this._locale;
\t\t}
\t});

\tfunction rawMonthSetter(mom, value) {
\t\tvar dayOfMonth;

\t\t// TODO: Move this out of here!
\t\tif (typeof value === 'string') {
\t\t\tvalue = mom.localeData().monthsParse(value);
\t\t\t// TODO: Another silent failure?
\t\t\tif (typeof value !== 'number') {
\t\t\t\treturn mom;
\t\t\t}
\t\t}

\t\tdayOfMonth = Math.min(mom.date(),
\t\t\tdaysInMonth(mom.year(), value));
\t\tmom._d['set' + (mom._isUTC ? 'UTC' : '') + 'Month'](value, dayOfMonth);
\t\treturn mom;
\t}

\tfunction rawGetter(mom, unit) {
\t\treturn mom._d['get' + (mom._isUTC ? 'UTC' : '') + unit]();
\t}

\tfunction rawSetter(mom, unit, value) {
\t\tif (unit === 'Month') {
\t\t\treturn rawMonthSetter(mom, value);
\t\t} else {
\t\t\treturn mom._d['set' + (mom._isUTC ? 'UTC' : '') + unit](value);
\t\t}
\t}

\tfunction makeAccessor(unit, keepTime) {
\t\treturn function (value) {
\t\t\tif (value != null) {
\t\t\t\trawSetter(this, unit, value);
\t\t\t\tmoment.updateOffset(this, keepTime);
\t\t\t\treturn this;
\t\t\t} else {
\t\t\t\treturn rawGetter(this, unit);
\t\t\t}
\t\t};
\t}

\tmoment.fn.millisecond = moment.fn.milliseconds = makeAccessor('Milliseconds', false);
\tmoment.fn.second = moment.fn.seconds = makeAccessor('Seconds', false);
\tmoment.fn.minute = moment.fn.minutes = makeAccessor('Minutes', false);
\t// Setting the hour should keep the time, because the user explicitly
\t// specified which hour he wants. So trying to maintain the same hour (in
\t// a new timezone) makes sense. Adding/subtracting hours does not follow
\t// this rule.
\tmoment.fn.hour = moment.fn.hours = makeAccessor('Hours', true);
\t// moment.fn.month is defined separately
\tmoment.fn.date = makeAccessor('Date', true);
\tmoment.fn.dates = deprecate('dates accessor is deprecated. Use date instead.', makeAccessor('Date', true));
\tmoment.fn.year = makeAccessor('FullYear', true);
\tmoment.fn.years = deprecate('years accessor is deprecated. Use year instead.', makeAccessor('FullYear', true));

\t// add plural methods
\tmoment.fn.days = moment.fn.day;
\tmoment.fn.months = moment.fn.month;
\tmoment.fn.weeks = moment.fn.week;
\tmoment.fn.isoWeeks = moment.fn.isoWeek;
\tmoment.fn.quarters = moment.fn.quarter;

\t// add aliased format methods
\tmoment.fn.toJSON = moment.fn.toISOString;

\t/************************************
\t Duration Prototype
\t ************************************/


\tfunction daysToYears (days) {
\t\t// 400 years have 146097 days (taking into account leap year rules)
\t\treturn days * 400 / 146097;
\t}

\tfunction yearsToDays (years) {
\t\t// years * 365 + absRound(years / 4) -
\t\t//     absRound(years / 100) + absRound(years / 400);
\t\treturn years * 146097 / 400;
\t}

\textend(moment.duration.fn = Duration.prototype, {

\t\t_bubble : function () {
\t\t\tvar milliseconds = this._milliseconds,
\t\t\t\tdays = this._days,
\t\t\t\tmonths = this._months,
\t\t\t\tdata = this._data,
\t\t\t\tseconds, minutes, hours, years = 0;

\t\t\t// The following code bubbles up values, see the tests for
\t\t\t// examples of what that means.
\t\t\tdata.milliseconds = milliseconds % 1000;

\t\t\tseconds = absRound(milliseconds / 1000);
\t\t\tdata.seconds = seconds % 60;

\t\t\tminutes = absRound(seconds / 60);
\t\t\tdata.minutes = minutes % 60;

\t\t\thours = absRound(minutes / 60);
\t\t\tdata.hours = hours % 24;

\t\t\tdays += absRound(hours / 24);

\t\t\t// Accurately convert days to years, assume start from year 0.
\t\t\tyears = absRound(daysToYears(days));
\t\t\tdays -= absRound(yearsToDays(years));

\t\t\t// 30 days to a month
\t\t\t// TODO (iskren): Use anchor date (like 1st Jan) to compute this.
\t\t\tmonths += absRound(days / 30);
\t\t\tdays %= 30;

\t\t\t// 12 months -> 1 year
\t\t\tyears += absRound(months / 12);
\t\t\tmonths %= 12;

\t\t\tdata.days = days;
\t\t\tdata.months = months;
\t\t\tdata.years = years;
\t\t},

\t\tabs : function () {
\t\t\tthis._milliseconds = Math.abs(this._milliseconds);
\t\t\tthis._days = Math.abs(this._days);
\t\t\tthis._months = Math.abs(this._months);

\t\t\tthis._data.milliseconds = Math.abs(this._data.milliseconds);
\t\t\tthis._data.seconds = Math.abs(this._data.seconds);
\t\t\tthis._data.minutes = Math.abs(this._data.minutes);
\t\t\tthis._data.hours = Math.abs(this._data.hours);
\t\t\tthis._data.months = Math.abs(this._data.months);
\t\t\tthis._data.years = Math.abs(this._data.years);

\t\t\treturn this;
\t\t},

\t\tweeks : function () {
\t\t\treturn absRound(this.days() / 7);
\t\t},

\t\tvalueOf : function () {
\t\t\treturn this._milliseconds +
\t\t\t\tthis._days * 864e5 +
\t\t\t\t(this._months % 12) * 2592e6 +
\t\t\t\ttoInt(this._months / 12) * 31536e6;
\t\t},

\t\thumanize : function (withSuffix) {
\t\t\tvar output = relativeTime(this, !withSuffix, this.localeData());

\t\t\tif (withSuffix) {
\t\t\t\toutput = this.localeData().pastFuture(+this, output);
\t\t\t}

\t\t\treturn this.localeData().postformat(output);
\t\t},

\t\tadd : function (input, val) {
\t\t\t// supports only 2.0-style add(1, 's') or add(moment)
\t\t\tvar dur = moment.duration(input, val);

\t\t\tthis._milliseconds += dur._milliseconds;
\t\t\tthis._days += dur._days;
\t\t\tthis._months += dur._months;

\t\t\tthis._bubble();

\t\t\treturn this;
\t\t},

\t\tsubtract : function (input, val) {
\t\t\tvar dur = moment.duration(input, val);

\t\t\tthis._milliseconds -= dur._milliseconds;
\t\t\tthis._days -= dur._days;
\t\t\tthis._months -= dur._months;

\t\t\tthis._bubble();

\t\t\treturn this;
\t\t},

\t\tget : function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\treturn this[units.toLowerCase() + 's']();
\t\t},

\t\tas : function (units) {
\t\t\tvar days, months;
\t\t\tunits = normalizeUnits(units);

\t\t\tdays = this._days + this._milliseconds / 864e5;
\t\t\tif (units === 'month' || units === 'year') {
\t\t\t\tmonths = this._months + daysToYears(days) * 12;
\t\t\t\treturn units === 'month' ? months : months / 12;
\t\t\t} else {
\t\t\t\tdays += yearsToDays(this._months / 12);
\t\t\t\tswitch (units) {
\t\t\t\t\tcase 'week': return days / 7;
\t\t\t\t\tcase 'day': return days;
\t\t\t\t\tcase 'hour': return days * 24;
\t\t\t\t\tcase 'minute': return days * 24 * 60;
\t\t\t\t\tcase 'second': return days * 24 * 60 * 60;
\t\t\t\t\tcase 'millisecond': return days * 24 * 60 * 60 * 1000;
\t\t\t\t\tdefault: throw new Error('Unknown unit ' + units);
\t\t\t\t}
\t\t\t}
\t\t},

\t\tlang : moment.fn.lang,
\t\tlocale : moment.fn.locale,

\t\ttoIsoString : deprecate(
\t\t\t\"toIsoString() is deprecated. Please use toISOString() instead \" +
\t\t\t\t\"(notice the capitals)\",
\t\t\tfunction () {
\t\t\t\treturn this.toISOString();
\t\t\t}
\t\t),

\t\ttoISOString : function () {
\t\t\t// inspired by https://github.com/dordille/moment-isoduration/blob/master/moment.isoduration.js
\t\t\tvar years = Math.abs(this.years()),
\t\t\t\tmonths = Math.abs(this.months()),
\t\t\t\tdays = Math.abs(this.days()),
\t\t\t\thours = Math.abs(this.hours()),
\t\t\t\tminutes = Math.abs(this.minutes()),
\t\t\t\tseconds = Math.abs(this.seconds() + this.milliseconds() / 1000);

\t\t\tif (!this.asSeconds()) {
\t\t\t\t// this is the same as C#'s (Noda) and python (isodate)...
\t\t\t\t// but not other JS (goog.date)
\t\t\t\treturn 'P0D';
\t\t\t}

\t\t\treturn (this.asSeconds() < 0 ? '-' : '') +
\t\t\t\t'P' +
\t\t\t\t(years ? years + 'Y' : '') +
\t\t\t\t(months ? months + 'M' : '') +
\t\t\t\t(days ? days + 'D' : '') +
\t\t\t\t((hours || minutes || seconds) ? 'T' : '') +
\t\t\t\t(hours ? hours + 'H' : '') +
\t\t\t\t(minutes ? minutes + 'M' : '') +
\t\t\t\t(seconds ? seconds + 'S' : '');
\t\t},

\t\tlocaleData : function () {
\t\t\treturn this._locale;
\t\t}
\t});

\tfunction makeDurationGetter(name) {
\t\tmoment.duration.fn[name] = function () {
\t\t\treturn this._data[name];
\t\t};
\t}

\tfor (i in unitMillisecondFactors) {
\t\tif (unitMillisecondFactors.hasOwnProperty(i)) {
\t\t\tmakeDurationGetter(i.toLowerCase());
\t\t}
\t}

\tmoment.duration.fn.asMilliseconds = function () {
\t\treturn this.as('ms');
\t};
\tmoment.duration.fn.asSeconds = function () {
\t\treturn this.as('s');
\t};
\tmoment.duration.fn.asMinutes = function () {
\t\treturn this.as('m');
\t};
\tmoment.duration.fn.asHours = function () {
\t\treturn this.as('h');
\t};
\tmoment.duration.fn.asDays = function () {
\t\treturn this.as('d');
\t};
\tmoment.duration.fn.asWeeks = function () {
\t\treturn this.as('weeks');
\t};
\tmoment.duration.fn.asMonths = function () {
\t\treturn this.as('M');
\t};
\tmoment.duration.fn.asYears = function () {
\t\treturn this.as('y');
\t};

\t/************************************
\t Default Locale
\t ************************************/


\t\t// Set default locale, other locale will inherit from English.
\tmoment.locale('en', {
\t\tordinal : function (number) {
\t\t\tvar b = number % 10,
\t\t\t\toutput = (toInt(number % 100 / 10) === 1) ? 'th' :
\t\t\t\t\t(b === 1) ? 'st' :
\t\t\t\t\t\t(b === 2) ? 'nd' :
\t\t\t\t\t\t\t(b === 3) ? 'rd' : 'th';
\t\t\treturn number + output;
\t\t}
\t});

\t/* EMBED_LOCALES */

\t/************************************
\t Exposing Moment
\t ************************************/

\tfunction makeGlobal(shouldDeprecate) {
\t\t/*global ender:false */
\t\tif (typeof ender !== 'undefined') {
\t\t\treturn;
\t\t}
\t\toldGlobalMoment = globalScope.moment;
\t\tif (shouldDeprecate) {
\t\t\tglobalScope.moment = deprecate(
\t\t\t\t'Accessing Moment through the global scope is ' +
\t\t\t\t\t'deprecated, and will be removed in an upcoming ' +
\t\t\t\t\t'release.',
\t\t\t\tmoment);
\t\t} else {
\t\t\tglobalScope.moment = moment;
\t\t}
\t}

\t// CommonJS module is defined
\tif (hasModule) {
\t\tmodule.exports = moment;
\t} else if (typeof define === 'function' && define.amd) {
\t\tdefine('moment', function (require, exports, module) {
\t\t\tif (module.config && module.config() && module.config().noGlobal === true) {
\t\t\t\t// release the global variable
\t\t\t\tglobalScope.moment = oldGlobalMoment;
\t\t\t}

\t\t\treturn moment;
\t\t});
\t\tmakeGlobal(true);
\t} else {
\t\tmakeGlobal();
\t}
}).call(this);
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/moment.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//! moment.js
//! version : 2.8.1
//! authors : Tim Wood, Iskren Chernev, Moment.js contributors
//! license : MIT
//! momentjs.com

(function (undefined) {
\t/************************************
\t Constants
\t ************************************/

\tvar moment,
\t\tVERSION = '2.8.1',
\t// the global-scope this is NOT the global object in Node.js
\t\tglobalScope = typeof global !== 'undefined' ? global : this,
\t\toldGlobalMoment,
\t\tround = Math.round,
\t\ti,

\t\tYEAR = 0,
\t\tMONTH = 1,
\t\tDATE = 2,
\t\tHOUR = 3,
\t\tMINUTE = 4,
\t\tSECOND = 5,
\t\tMILLISECOND = 6,

\t// internal storage for locale config files
\t\tlocales = {},

\t// extra moment internal properties (plugins register props here)
\t\tmomentProperties = [],

\t// check for nodeJS
\t\thasModule = (typeof module !== 'undefined' && module.exports),

\t// ASP.NET json date format regex
\t\taspNetJsonRegex = /^\\/?Date\\((\\-?\\d+)/i,
\t\taspNetTimeSpanJsonRegex = /(\\-)?(?:(\\d*)\\.)?(\\d+)\\:(\\d+)(?:\\:(\\d+)\\.?(\\d{3})?)?/,

\t// from http://docs.closure-library.googlecode.com/git/closure_goog_date_date.js.source.html
\t// somewhat more in line with 4.4.3.2 2004 spec, but allows decimal anywhere
\t\tisoDurationRegex = /^(-)?P(?:(?:([0-9,.]*)Y)?(?:([0-9,.]*)M)?(?:([0-9,.]*)D)?(?:T(?:([0-9,.]*)H)?(?:([0-9,.]*)M)?(?:([0-9,.]*)S)?)?|([0-9,.]*)W)\$/,

\t// format tokens
\t\tformattingTokens = /(\\[[^\\[]*\\])|(\\\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Q|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|S{1,4}|X|zz?|ZZ?|.)/g,
\t\tlocalFormattingTokens = /(\\[[^\\[]*\\])|(\\\\)?(LT|LL?L?L?|l{1,4})/g,

\t// parsing token regexes
\t\tparseTokenOneOrTwoDigits = /\\d\\d?/, // 0 - 99
\t\tparseTokenOneToThreeDigits = /\\d{1,3}/, // 0 - 999
\t\tparseTokenOneToFourDigits = /\\d{1,4}/, // 0 - 9999
\t\tparseTokenOneToSixDigits = /[+\\-]?\\d{1,6}/, // -999,999 - 999,999
\t\tparseTokenDigits = /\\d+/, // nonzero number of digits
\t\tparseTokenWord = /[0-9]*['a-z\\u00A0-\\u05FF\\u0700-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]+|[\\u0600-\\u06FF\\/]+(\\s*?[\\u0600-\\u06FF]+){1,2}/i, // any word (or two) characters or numbers including two/three word month in arabic.
\t\tparseTokenTimezone = /Z|[\\+\\-]\\d\\d:?\\d\\d/gi, // +00:00 -00:00 +0000 -0000 or Z
\t\tparseTokenT = /T/i, // T (ISO separator)
\t\tparseTokenTimestampMs = /[\\+\\-]?\\d+(\\.\\d{1,3})?/, // 123456789 123456789.123
\t\tparseTokenOrdinal = /\\d{1,2}/,

\t//strict parsing regexes
\t\tparseTokenOneDigit = /\\d/, // 0 - 9
\t\tparseTokenTwoDigits = /\\d\\d/, // 00 - 99
\t\tparseTokenThreeDigits = /\\d{3}/, // 000 - 999
\t\tparseTokenFourDigits = /\\d{4}/, // 0000 - 9999
\t\tparseTokenSixDigits = /[+-]?\\d{6}/, // -999,999 - 999,999
\t\tparseTokenSignedNumber = /[+-]?\\d+/, // -inf - inf

\t// iso 8601 regex
\t// 0000-00-00 0000-W00 or 0000-W00-0 + T + 00 or 00:00 or 00:00:00 or 00:00:00.000 + +00:00 or +0000 or +00)
\t\tisoRegex = /^\\s*(?:[+-]\\d{6}|\\d{4})-(?:(\\d\\d-\\d\\d)|(W\\d\\d\$)|(W\\d\\d-\\d)|(\\d\\d\\d))((T| )(\\d\\d(:\\d\\d(:\\d\\d(\\.\\d+)?)?)?)?([\\+\\-]\\d\\d(?::?\\d\\d)?|\\s*Z)?)?\$/,

\t\tisoFormat = 'YYYY-MM-DDTHH:mm:ssZ',

\t\tisoDates = [
\t\t\t['YYYYYY-MM-DD', /[+-]\\d{6}-\\d{2}-\\d{2}/],
\t\t\t['YYYY-MM-DD', /\\d{4}-\\d{2}-\\d{2}/],
\t\t\t['GGGG-[W]WW-E', /\\d{4}-W\\d{2}-\\d/],
\t\t\t['GGGG-[W]WW', /\\d{4}-W\\d{2}/],
\t\t\t['YYYY-DDD', /\\d{4}-\\d{3}/]
\t\t],

\t// iso time formats and regexes
\t\tisoTimes = [
\t\t\t['HH:mm:ss.SSSS', /(T| )\\d\\d:\\d\\d:\\d\\d\\.\\d+/],
\t\t\t['HH:mm:ss', /(T| )\\d\\d:\\d\\d:\\d\\d/],
\t\t\t['HH:mm', /(T| )\\d\\d:\\d\\d/],
\t\t\t['HH', /(T| )\\d\\d/]
\t\t],

\t// timezone chunker \"+10:00\" > [\"10\", \"00\"] or \"-1530\" > [\"-15\", \"30\"]
\t\tparseTimezoneChunker = /([\\+\\-]|\\d\\d)/gi,

\t// getter and setter names
\t\tproxyGettersAndSetters = 'Date|Hours|Minutes|Seconds|Milliseconds'.split('|'),
\t\tunitMillisecondFactors = {
\t\t\t'Milliseconds' : 1,
\t\t\t'Seconds' : 1e3,
\t\t\t'Minutes' : 6e4,
\t\t\t'Hours' : 36e5,
\t\t\t'Days' : 864e5,
\t\t\t'Months' : 2592e6,
\t\t\t'Years' : 31536e6
\t\t},

\t\tunitAliases = {
\t\t\tms : 'millisecond',
\t\t\ts : 'second',
\t\t\tm : 'minute',
\t\t\th : 'hour',
\t\t\td : 'day',
\t\t\tD : 'date',
\t\t\tw : 'week',
\t\t\tW : 'isoWeek',
\t\t\tM : 'month',
\t\t\tQ : 'quarter',
\t\t\ty : 'year',
\t\t\tDDD : 'dayOfYear',
\t\t\te : 'weekday',
\t\t\tE : 'isoWeekday',
\t\t\tgg: 'weekYear',
\t\t\tGG: 'isoWeekYear'
\t\t},

\t\tcamelFunctions = {
\t\t\tdayofyear : 'dayOfYear',
\t\t\tisoweekday : 'isoWeekday',
\t\t\tisoweek : 'isoWeek',
\t\t\tweekyear : 'weekYear',
\t\t\tisoweekyear : 'isoWeekYear'
\t\t},

\t// format function strings
\t\tformatFunctions = {},

\t// default relative time thresholds
\t\trelativeTimeThresholds = {
\t\t\ts: 45,  // seconds to minute
\t\t\tm: 45,  // minutes to hour
\t\t\th: 22,  // hours to day
\t\t\td: 26,  // days to month
\t\t\tM: 11   // months to year
\t\t},

\t// tokens to ordinalize and pad
\t\tordinalizeTokens = 'DDD w W M D d'.split(' '),
\t\tpaddedTokens = 'M D H h m s w W'.split(' '),

\t\tformatTokenFunctions = {
\t\t\tM    : function () {
\t\t\t\treturn this.month() + 1;
\t\t\t},
\t\t\tMMM  : function (format) {
\t\t\t\treturn this.localeData().monthsShort(this, format);
\t\t\t},
\t\t\tMMMM : function (format) {
\t\t\t\treturn this.localeData().months(this, format);
\t\t\t},
\t\t\tD    : function () {
\t\t\t\treturn this.date();
\t\t\t},
\t\t\tDDD  : function () {
\t\t\t\treturn this.dayOfYear();
\t\t\t},
\t\t\td    : function () {
\t\t\t\treturn this.day();
\t\t\t},
\t\t\tdd   : function (format) {
\t\t\t\treturn this.localeData().weekdaysMin(this, format);
\t\t\t},
\t\t\tddd  : function (format) {
\t\t\t\treturn this.localeData().weekdaysShort(this, format);
\t\t\t},
\t\t\tdddd : function (format) {
\t\t\t\treturn this.localeData().weekdays(this, format);
\t\t\t},
\t\t\tw    : function () {
\t\t\t\treturn this.week();
\t\t\t},
\t\t\tW    : function () {
\t\t\t\treturn this.isoWeek();
\t\t\t},
\t\t\tYY   : function () {
\t\t\t\treturn leftZeroFill(this.year() % 100, 2);
\t\t\t},
\t\t\tYYYY : function () {
\t\t\t\treturn leftZeroFill(this.year(), 4);
\t\t\t},
\t\t\tYYYYY : function () {
\t\t\t\treturn leftZeroFill(this.year(), 5);
\t\t\t},
\t\t\tYYYYYY : function () {
\t\t\t\tvar y = this.year(), sign = y >= 0 ? '+' : '-';
\t\t\t\treturn sign + leftZeroFill(Math.abs(y), 6);
\t\t\t},
\t\t\tgg   : function () {
\t\t\t\treturn leftZeroFill(this.weekYear() % 100, 2);
\t\t\t},
\t\t\tgggg : function () {
\t\t\t\treturn leftZeroFill(this.weekYear(), 4);
\t\t\t},
\t\t\tggggg : function () {
\t\t\t\treturn leftZeroFill(this.weekYear(), 5);
\t\t\t},
\t\t\tGG   : function () {
\t\t\t\treturn leftZeroFill(this.isoWeekYear() % 100, 2);
\t\t\t},
\t\t\tGGGG : function () {
\t\t\t\treturn leftZeroFill(this.isoWeekYear(), 4);
\t\t\t},
\t\t\tGGGGG : function () {
\t\t\t\treturn leftZeroFill(this.isoWeekYear(), 5);
\t\t\t},
\t\t\te : function () {
\t\t\t\treturn this.weekday();
\t\t\t},
\t\t\tE : function () {
\t\t\t\treturn this.isoWeekday();
\t\t\t},
\t\t\ta    : function () {
\t\t\t\treturn this.localeData().meridiem(this.hours(), this.minutes(), true);
\t\t\t},
\t\t\tA    : function () {
\t\t\t\treturn this.localeData().meridiem(this.hours(), this.minutes(), false);
\t\t\t},
\t\t\tH    : function () {
\t\t\t\treturn this.hours();
\t\t\t},
\t\t\th    : function () {
\t\t\t\treturn this.hours() % 12 || 12;
\t\t\t},
\t\t\tm    : function () {
\t\t\t\treturn this.minutes();
\t\t\t},
\t\t\ts    : function () {
\t\t\t\treturn this.seconds();
\t\t\t},
\t\t\tS    : function () {
\t\t\t\treturn toInt(this.milliseconds() / 100);
\t\t\t},
\t\t\tSS   : function () {
\t\t\t\treturn leftZeroFill(toInt(this.milliseconds() / 10), 2);
\t\t\t},
\t\t\tSSS  : function () {
\t\t\t\treturn leftZeroFill(this.milliseconds(), 3);
\t\t\t},
\t\t\tSSSS : function () {
\t\t\t\treturn leftZeroFill(this.milliseconds(), 3);
\t\t\t},
\t\t\tZ    : function () {
\t\t\t\tvar a = -this.zone(),
\t\t\t\t\tb = '+';
\t\t\t\tif (a < 0) {
\t\t\t\t\ta = -a;
\t\t\t\t\tb = '-';
\t\t\t\t}
\t\t\t\treturn b + leftZeroFill(toInt(a / 60), 2) + ':' + leftZeroFill(toInt(a) % 60, 2);
\t\t\t},
\t\t\tZZ   : function () {
\t\t\t\tvar a = -this.zone(),
\t\t\t\t\tb = '+';
\t\t\t\tif (a < 0) {
\t\t\t\t\ta = -a;
\t\t\t\t\tb = '-';
\t\t\t\t}
\t\t\t\treturn b + leftZeroFill(toInt(a / 60), 2) + leftZeroFill(toInt(a) % 60, 2);
\t\t\t},
\t\t\tz : function () {
\t\t\t\treturn this.zoneAbbr();
\t\t\t},
\t\t\tzz : function () {
\t\t\t\treturn this.zoneName();
\t\t\t},
\t\t\tX    : function () {
\t\t\t\treturn this.unix();
\t\t\t},
\t\t\tQ : function () {
\t\t\t\treturn this.quarter();
\t\t\t}
\t\t},

\t\tdeprecations = {},

\t\tlists = ['months', 'monthsShort', 'weekdays', 'weekdaysShort', 'weekdaysMin'];

\t// Pick the first defined of two or three arguments. dfl comes from
\t// default.
\tfunction dfl(a, b, c) {
\t\tswitch (arguments.length) {
\t\t\tcase 2: return a != null ? a : b;
\t\t\tcase 3: return a != null ? a : b != null ? b : c;
\t\t\tdefault: throw new Error('Implement me');
\t\t}
\t}

\tfunction defaultParsingFlags() {
\t\t// We need to deep clone this object, and es5 standard is not very
\t\t// helpful.
\t\treturn {
\t\t\tempty : false,
\t\t\tunusedTokens : [],
\t\t\tunusedInput : [],
\t\t\toverflow : -2,
\t\t\tcharsLeftOver : 0,
\t\t\tnullInput : false,
\t\t\tinvalidMonth : null,
\t\t\tinvalidFormat : false,
\t\t\tuserInvalidated : false,
\t\t\tiso: false
\t\t};
\t}

\tfunction printMsg(msg) {
\t\tif (moment.suppressDeprecationWarnings === false &&
\t\t\ttypeof console !== 'undefined' && console.warn) {
\t\t\tconsole.warn(\"Deprecation warning: \" + msg);
\t\t}
\t}

\tfunction deprecate(msg, fn) {
\t\tvar firstTime = true;
\t\treturn extend(function () {
\t\t\tif (firstTime) {
\t\t\t\tprintMsg(msg);
\t\t\t\tfirstTime = false;
\t\t\t}
\t\t\treturn fn.apply(this, arguments);
\t\t}, fn);
\t}

\tfunction deprecateSimple(name, msg) {
\t\tif (!deprecations[name]) {
\t\t\tprintMsg(msg);
\t\t\tdeprecations[name] = true;
\t\t}
\t}

\tfunction padToken(func, count) {
\t\treturn function (a) {
\t\t\treturn leftZeroFill(func.call(this, a), count);
\t\t};
\t}
\tfunction ordinalizeToken(func, period) {
\t\treturn function (a) {
\t\t\treturn this.localeData().ordinal(func.call(this, a), period);
\t\t};
\t}

\twhile (ordinalizeTokens.length) {
\t\ti = ordinalizeTokens.pop();
\t\tformatTokenFunctions[i + 'o'] = ordinalizeToken(formatTokenFunctions[i], i);
\t}
\twhile (paddedTokens.length) {
\t\ti = paddedTokens.pop();
\t\tformatTokenFunctions[i + i] = padToken(formatTokenFunctions[i], 2);
\t}
\tformatTokenFunctions.DDDD = padToken(formatTokenFunctions.DDD, 3);


\t/************************************
\t Constructors
\t ************************************/

\tfunction Locale() {
\t}

\t// Moment prototype object
\tfunction Moment(config, skipOverflow) {
\t\tif (skipOverflow !== false) {
\t\t\tcheckOverflow(config);
\t\t}
\t\tcopyConfig(this, config);
\t\tthis._d = new Date(+config._d);
\t}

\t// Duration Constructor
\tfunction Duration(duration) {
\t\tvar normalizedInput = normalizeObjectUnits(duration),
\t\t\tyears = normalizedInput.year || 0,
\t\t\tquarters = normalizedInput.quarter || 0,
\t\t\tmonths = normalizedInput.month || 0,
\t\t\tweeks = normalizedInput.week || 0,
\t\t\tdays = normalizedInput.day || 0,
\t\t\thours = normalizedInput.hour || 0,
\t\t\tminutes = normalizedInput.minute || 0,
\t\t\tseconds = normalizedInput.second || 0,
\t\t\tmilliseconds = normalizedInput.millisecond || 0;

\t\t// representation for dateAddRemove
\t\tthis._milliseconds = +milliseconds +
\t\t\tseconds * 1e3 + // 1000
\t\t\tminutes * 6e4 + // 1000 * 60
\t\t\thours * 36e5; // 1000 * 60 * 60
\t\t// Because of dateAddRemove treats 24 hours as different from a
\t\t// day when working around DST, we need to store them separately
\t\tthis._days = +days +
\t\t\tweeks * 7;
\t\t// It is impossible translate months into days without knowing
\t\t// which months you are are talking about, so we have to store
\t\t// it separately.
\t\tthis._months = +months +
\t\t\tquarters * 3 +
\t\t\tyears * 12;

\t\tthis._data = {};

\t\tthis._locale = moment.localeData();

\t\tthis._bubble();
\t}

\t/************************************
\t Helpers
\t ************************************/


\tfunction extend(a, b) {
\t\tfor (var i in b) {
\t\t\tif (b.hasOwnProperty(i)) {
\t\t\t\ta[i] = b[i];
\t\t\t}
\t\t}

\t\tif (b.hasOwnProperty('toString')) {
\t\t\ta.toString = b.toString;
\t\t}

\t\tif (b.hasOwnProperty('valueOf')) {
\t\t\ta.valueOf = b.valueOf;
\t\t}

\t\treturn a;
\t}

\tfunction copyConfig(to, from) {
\t\tvar i, prop, val;

\t\tif (typeof from._isAMomentObject !== 'undefined') {
\t\t\tto._isAMomentObject = from._isAMomentObject;
\t\t}
\t\tif (typeof from._i !== 'undefined') {
\t\t\tto._i = from._i;
\t\t}
\t\tif (typeof from._f !== 'undefined') {
\t\t\tto._f = from._f;
\t\t}
\t\tif (typeof from._l !== 'undefined') {
\t\t\tto._l = from._l;
\t\t}
\t\tif (typeof from._strict !== 'undefined') {
\t\t\tto._strict = from._strict;
\t\t}
\t\tif (typeof from._tzm !== 'undefined') {
\t\t\tto._tzm = from._tzm;
\t\t}
\t\tif (typeof from._isUTC !== 'undefined') {
\t\t\tto._isUTC = from._isUTC;
\t\t}
\t\tif (typeof from._offset !== 'undefined') {
\t\t\tto._offset = from._offset;
\t\t}
\t\tif (typeof from._pf !== 'undefined') {
\t\t\tto._pf = from._pf;
\t\t}
\t\tif (typeof from._locale !== 'undefined') {
\t\t\tto._locale = from._locale;
\t\t}

\t\tif (momentProperties.length > 0) {
\t\t\tfor (i in momentProperties) {
\t\t\t\tprop = momentProperties[i];
\t\t\t\tval = from[prop];
\t\t\t\tif (typeof val !== 'undefined') {
\t\t\t\t\tto[prop] = val;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn to;
\t}

\tfunction absRound(number) {
\t\tif (number < 0) {
\t\t\treturn Math.ceil(number);
\t\t} else {
\t\t\treturn Math.floor(number);
\t\t}
\t}

\t// left zero fill a number
\t// see http://jsperf.com/left-zero-filling for performance comparison
\tfunction leftZeroFill(number, targetLength, forceSign) {
\t\tvar output = '' + Math.abs(number),
\t\t\tsign = number >= 0;

\t\twhile (output.length < targetLength) {
\t\t\toutput = '0' + output;
\t\t}
\t\treturn (sign ? (forceSign ? '+' : '') : '-') + output;
\t}

\tfunction positiveMomentsDifference(base, other) {
\t\tvar res = {milliseconds: 0, months: 0};

\t\tres.months = other.month() - base.month() +
\t\t\t(other.year() - base.year()) * 12;
\t\tif (base.clone().add(res.months, 'M').isAfter(other)) {
\t\t\t--res.months;
\t\t}

\t\tres.milliseconds = +other - +(base.clone().add(res.months, 'M'));

\t\treturn res;
\t}

\tfunction momentsDifference(base, other) {
\t\tvar res;
\t\tother = makeAs(other, base);
\t\tif (base.isBefore(other)) {
\t\t\tres = positiveMomentsDifference(base, other);
\t\t} else {
\t\t\tres = positiveMomentsDifference(other, base);
\t\t\tres.milliseconds = -res.milliseconds;
\t\t\tres.months = -res.months;
\t\t}

\t\treturn res;
\t}

\t// TODO: remove 'name' arg after deprecation is removed
\tfunction createAdder(direction, name) {
\t\treturn function (val, period) {
\t\t\tvar dur, tmp;
\t\t\t//invert the arguments, but complain about it
\t\t\tif (period !== null && !isNaN(+period)) {
\t\t\t\tdeprecateSimple(name, \"moment().\" + name  + \"(period, number) is deprecated. Please use moment().\" + name + \"(number, period).\");
\t\t\t\ttmp = val; val = period; period = tmp;
\t\t\t}

\t\t\tval = typeof val === 'string' ? +val : val;
\t\t\tdur = moment.duration(val, period);
\t\t\taddOrSubtractDurationFromMoment(this, dur, direction);
\t\t\treturn this;
\t\t};
\t}

\tfunction addOrSubtractDurationFromMoment(mom, duration, isAdding, updateOffset) {
\t\tvar milliseconds = duration._milliseconds,
\t\t\tdays = duration._days,
\t\t\tmonths = duration._months;
\t\tupdateOffset = updateOffset == null ? true : updateOffset;

\t\tif (milliseconds) {
\t\t\tmom._d.setTime(+mom._d + milliseconds * isAdding);
\t\t}
\t\tif (days) {
\t\t\trawSetter(mom, 'Date', rawGetter(mom, 'Date') + days * isAdding);
\t\t}
\t\tif (months) {
\t\t\trawMonthSetter(mom, rawGetter(mom, 'Month') + months * isAdding);
\t\t}
\t\tif (updateOffset) {
\t\t\tmoment.updateOffset(mom, days || months);
\t\t}
\t}

\t// check if is an array
\tfunction isArray(input) {
\t\treturn Object.prototype.toString.call(input) === '[object Array]';
\t}

\tfunction isDate(input) {
\t\treturn Object.prototype.toString.call(input) === '[object Date]' ||
\t\t\tinput instanceof Date;
\t}

\t// compare two arrays, return the number of differences
\tfunction compareArrays(array1, array2, dontConvert) {
\t\tvar len = Math.min(array1.length, array2.length),
\t\t\tlengthDiff = Math.abs(array1.length - array2.length),
\t\t\tdiffs = 0,
\t\t\ti;
\t\tfor (i = 0; i < len; i++) {
\t\t\tif ((dontConvert && array1[i] !== array2[i]) ||
\t\t\t\t(!dontConvert && toInt(array1[i]) !== toInt(array2[i]))) {
\t\t\t\tdiffs++;
\t\t\t}
\t\t}
\t\treturn diffs + lengthDiff;
\t}

\tfunction normalizeUnits(units) {
\t\tif (units) {
\t\t\tvar lowered = units.toLowerCase().replace(/(.)s\$/, '\$1');
\t\t\tunits = unitAliases[units] || camelFunctions[lowered] || lowered;
\t\t}
\t\treturn units;
\t}

\tfunction normalizeObjectUnits(inputObject) {
\t\tvar normalizedInput = {},
\t\t\tnormalizedProp,
\t\t\tprop;

\t\tfor (prop in inputObject) {
\t\t\tif (inputObject.hasOwnProperty(prop)) {
\t\t\t\tnormalizedProp = normalizeUnits(prop);
\t\t\t\tif (normalizedProp) {
\t\t\t\t\tnormalizedInput[normalizedProp] = inputObject[prop];
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn normalizedInput;
\t}

\tfunction makeList(field) {
\t\tvar count, setter;

\t\tif (field.indexOf('week') === 0) {
\t\t\tcount = 7;
\t\t\tsetter = 'day';
\t\t}
\t\telse if (field.indexOf('month') === 0) {
\t\t\tcount = 12;
\t\t\tsetter = 'month';
\t\t}
\t\telse {
\t\t\treturn;
\t\t}

\t\tmoment[field] = function (format, index) {
\t\t\tvar i, getter,
\t\t\t\tmethod = moment._locale[field],
\t\t\t\tresults = [];

\t\t\tif (typeof format === 'number') {
\t\t\t\tindex = format;
\t\t\t\tformat = undefined;
\t\t\t}

\t\t\tgetter = function (i) {
\t\t\t\tvar m = moment().utc().set(setter, i);
\t\t\t\treturn method.call(moment._locale, m, format || '');
\t\t\t};

\t\t\tif (index != null) {
\t\t\t\treturn getter(index);
\t\t\t}
\t\t\telse {
\t\t\t\tfor (i = 0; i < count; i++) {
\t\t\t\t\tresults.push(getter(i));
\t\t\t\t}
\t\t\t\treturn results;
\t\t\t}
\t\t};
\t}

\tfunction toInt(argumentForCoercion) {
\t\tvar coercedNumber = +argumentForCoercion,
\t\t\tvalue = 0;

\t\tif (coercedNumber !== 0 && isFinite(coercedNumber)) {
\t\t\tif (coercedNumber >= 0) {
\t\t\t\tvalue = Math.floor(coercedNumber);
\t\t\t} else {
\t\t\t\tvalue = Math.ceil(coercedNumber);
\t\t\t}
\t\t}

\t\treturn value;
\t}

\tfunction daysInMonth(year, month) {
\t\treturn new Date(Date.UTC(year, month + 1, 0)).getUTCDate();
\t}

\tfunction weeksInYear(year, dow, doy) {
\t\treturn weekOfYear(moment([year, 11, 31 + dow - doy]), dow, doy).week;
\t}

\tfunction daysInYear(year) {
\t\treturn isLeapYear(year) ? 366 : 365;
\t}

\tfunction isLeapYear(year) {
\t\treturn (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
\t}

\tfunction checkOverflow(m) {
\t\tvar overflow;
\t\tif (m._a && m._pf.overflow === -2) {
\t\t\toverflow =
\t\t\t\tm._a[MONTH] < 0 || m._a[MONTH] > 11 ? MONTH :
\t\t\t\t\tm._a[DATE] < 1 || m._a[DATE] > daysInMonth(m._a[YEAR], m._a[MONTH]) ? DATE :
\t\t\t\t\t\tm._a[HOUR] < 0 || m._a[HOUR] > 23 ? HOUR :
\t\t\t\t\t\t\tm._a[MINUTE] < 0 || m._a[MINUTE] > 59 ? MINUTE :
\t\t\t\t\t\t\t\tm._a[SECOND] < 0 || m._a[SECOND] > 59 ? SECOND :
\t\t\t\t\t\t\t\t\tm._a[MILLISECOND] < 0 || m._a[MILLISECOND] > 999 ? MILLISECOND :
\t\t\t\t\t\t\t\t\t\t-1;

\t\t\tif (m._pf._overflowDayOfYear && (overflow < YEAR || overflow > DATE)) {
\t\t\t\toverflow = DATE;
\t\t\t}

\t\t\tm._pf.overflow = overflow;
\t\t}
\t}

\tfunction isValid(m) {
\t\tif (m._isValid == null) {
\t\t\tm._isValid = !isNaN(m._d.getTime()) &&
\t\t\t\tm._pf.overflow < 0 &&
\t\t\t\t!m._pf.empty &&
\t\t\t\t!m._pf.invalidMonth &&
\t\t\t\t!m._pf.nullInput &&
\t\t\t\t!m._pf.invalidFormat &&
\t\t\t\t!m._pf.userInvalidated;

\t\t\tif (m._strict) {
\t\t\t\tm._isValid = m._isValid &&
\t\t\t\t\tm._pf.charsLeftOver === 0 &&
\t\t\t\t\tm._pf.unusedTokens.length === 0;
\t\t\t}
\t\t}
\t\treturn m._isValid;
\t}

\tfunction normalizeLocale(key) {
\t\treturn key ? key.toLowerCase().replace('_', '-') : key;
\t}

\t// pick the locale from the array
\t// try ['en-au', 'en-gb'] as 'en-au', 'en-gb', 'en', as in move through the list trying each
\t// substring from most specific to least, but move to the next array item if it's a more specific variant than the current root
\tfunction chooseLocale(names) {
\t\tvar i = 0, j, next, locale, split;

\t\twhile (i < names.length) {
\t\t\tsplit = normalizeLocale(names[i]).split('-');
\t\t\tj = split.length;
\t\t\tnext = normalizeLocale(names[i + 1]);
\t\t\tnext = next ? next.split('-') : null;
\t\t\twhile (j > 0) {
\t\t\t\tlocale = loadLocale(split.slice(0, j).join('-'));
\t\t\t\tif (locale) {
\t\t\t\t\treturn locale;
\t\t\t\t}
\t\t\t\tif (next && next.length >= j && compareArrays(split, next, true) >= j - 1) {
\t\t\t\t\t//the next array item is better than a shallower substring of this one
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tj--;
\t\t\t}
\t\t\ti++;
\t\t}
\t\treturn null;
\t}

\tfunction loadLocale(name) {
\t\tvar oldLocale = null;
\t\tif (!locales[name] && hasModule) {
\t\t\ttry {
\t\t\t\toldLocale = moment.locale();
\t\t\t\trequire('./locale/' + name);
\t\t\t\t// because defineLocale currently also sets the global locale, we want to undo that for lazy loaded locales
\t\t\t\tmoment.locale(oldLocale);
\t\t\t} catch (e) { }
\t\t}
\t\treturn locales[name];
\t}

\t// Return a moment from input, that is local/utc/zone equivalent to model.
\tfunction makeAs(input, model) {
\t\treturn model._isUTC ? moment(input).zone(model._offset || 0) :
\t\t\tmoment(input).local();
\t}

\t/************************************
\t Locale
\t ************************************/


\textend(Locale.prototype, {

\t\tset : function (config) {
\t\t\tvar prop, i;
\t\t\tfor (i in config) {
\t\t\t\tprop = config[i];
\t\t\t\tif (typeof prop === 'function') {
\t\t\t\t\tthis[i] = prop;
\t\t\t\t} else {
\t\t\t\t\tthis['_' + i] = prop;
\t\t\t\t}
\t\t\t}
\t\t},

\t\t_months : 'January_February_March_April_May_June_July_August_September_October_November_December'.split('_'),
\t\tmonths : function (m) {
\t\t\treturn this._months[m.month()];
\t\t},

\t\t_monthsShort : 'Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec'.split('_'),
\t\tmonthsShort : function (m) {
\t\t\treturn this._monthsShort[m.month()];
\t\t},

\t\tmonthsParse : function (monthName) {
\t\t\tvar i, mom, regex;

\t\t\tif (!this._monthsParse) {
\t\t\t\tthis._monthsParse = [];
\t\t\t}

\t\t\tfor (i = 0; i < 12; i++) {
\t\t\t\t// make the regex if we don't have it already
\t\t\t\tif (!this._monthsParse[i]) {
\t\t\t\t\tmom = moment.utc([2000, i]);
\t\t\t\t\tregex = '^' + this.months(mom, '') + '|^' + this.monthsShort(mom, '');
\t\t\t\t\tthis._monthsParse[i] = new RegExp(regex.replace('.', ''), 'i');
\t\t\t\t}
\t\t\t\t// test the regex
\t\t\t\tif (this._monthsParse[i].test(monthName)) {
\t\t\t\t\treturn i;
\t\t\t\t}
\t\t\t}
\t\t},

\t\t_weekdays : 'Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday'.split('_'),
\t\tweekdays : function (m) {
\t\t\treturn this._weekdays[m.day()];
\t\t},

\t\t_weekdaysShort : 'Sun_Mon_Tue_Wed_Thu_Fri_Sat'.split('_'),
\t\tweekdaysShort : function (m) {
\t\t\treturn this._weekdaysShort[m.day()];
\t\t},

\t\t_weekdaysMin : 'Su_Mo_Tu_We_Th_Fr_Sa'.split('_'),
\t\tweekdaysMin : function (m) {
\t\t\treturn this._weekdaysMin[m.day()];
\t\t},

\t\tweekdaysParse : function (weekdayName) {
\t\t\tvar i, mom, regex;

\t\t\tif (!this._weekdaysParse) {
\t\t\t\tthis._weekdaysParse = [];
\t\t\t}

\t\t\tfor (i = 0; i < 7; i++) {
\t\t\t\t// make the regex if we don't have it already
\t\t\t\tif (!this._weekdaysParse[i]) {
\t\t\t\t\tmom = moment([2000, 1]).day(i);
\t\t\t\t\tregex = '^' + this.weekdays(mom, '') + '|^' + this.weekdaysShort(mom, '') + '|^' + this.weekdaysMin(mom, '');
\t\t\t\t\tthis._weekdaysParse[i] = new RegExp(regex.replace('.', ''), 'i');
\t\t\t\t}
\t\t\t\t// test the regex
\t\t\t\tif (this._weekdaysParse[i].test(weekdayName)) {
\t\t\t\t\treturn i;
\t\t\t\t}
\t\t\t}
\t\t},

\t\t_longDateFormat : {
\t\t\tLT : 'h:mm A',
\t\t\tL : 'MM/DD/YYYY',
\t\t\tLL : 'MMMM D, YYYY',
\t\t\tLLL : 'MMMM D, YYYY LT',
\t\t\tLLLL : 'dddd, MMMM D, YYYY LT'
\t\t},
\t\tlongDateFormat : function (key) {
\t\t\tvar output = this._longDateFormat[key];
\t\t\tif (!output && this._longDateFormat[key.toUpperCase()]) {
\t\t\t\toutput = this._longDateFormat[key.toUpperCase()].replace(/MMMM|MM|DD|dddd/g, function (val) {
\t\t\t\t\treturn val.slice(1);
\t\t\t\t});
\t\t\t\tthis._longDateFormat[key] = output;
\t\t\t}
\t\t\treturn output;
\t\t},

\t\tisPM : function (input) {
\t\t\t// IE8 Quirks Mode & IE7 Standards Mode do not allow accessing strings like arrays
\t\t\t// Using charAt should be more compatible.
\t\t\treturn ((input + '').toLowerCase().charAt(0) === 'p');
\t\t},

\t\t_meridiemParse : /[ap]\\.?m?\\.?/i,
\t\tmeridiem : function (hours, minutes, isLower) {
\t\t\tif (hours > 11) {
\t\t\t\treturn isLower ? 'pm' : 'PM';
\t\t\t} else {
\t\t\t\treturn isLower ? 'am' : 'AM';
\t\t\t}
\t\t},

\t\t_calendar : {
\t\t\tsameDay : '[Today at] LT',
\t\t\tnextDay : '[Tomorrow at] LT',
\t\t\tnextWeek : 'dddd [at] LT',
\t\t\tlastDay : '[Yesterday at] LT',
\t\t\tlastWeek : '[Last] dddd [at] LT',
\t\t\tsameElse : 'L'
\t\t},
\t\tcalendar : function (key, mom) {
\t\t\tvar output = this._calendar[key];
\t\t\treturn typeof output === 'function' ? output.apply(mom) : output;
\t\t},

\t\t_relativeTime : {
\t\t\tfuture : 'in %s',
\t\t\tpast : '%s ago',
\t\t\ts : 'a few seconds',
\t\t\tm : 'a minute',
\t\t\tmm : '%d minutes',
\t\t\th : 'an hour',
\t\t\thh : '%d hours',
\t\t\td : 'a day',
\t\t\tdd : '%d days',
\t\t\tM : 'a month',
\t\t\tMM : '%d months',
\t\t\ty : 'a year',
\t\t\tyy : '%d years'
\t\t},

\t\trelativeTime : function (number, withoutSuffix, string, isFuture) {
\t\t\tvar output = this._relativeTime[string];
\t\t\treturn (typeof output === 'function') ?
\t\t\t\toutput(number, withoutSuffix, string, isFuture) :
\t\t\t\toutput.replace(/%d/i, number);
\t\t},

\t\tpastFuture : function (diff, output) {
\t\t\tvar format = this._relativeTime[diff > 0 ? 'future' : 'past'];
\t\t\treturn typeof format === 'function' ? format(output) : format.replace(/%s/i, output);
\t\t},

\t\tordinal : function (number) {
\t\t\treturn this._ordinal.replace('%d', number);
\t\t},
\t\t_ordinal : '%d',

\t\tpreparse : function (string) {
\t\t\treturn string;
\t\t},

\t\tpostformat : function (string) {
\t\t\treturn string;
\t\t},

\t\tweek : function (mom) {
\t\t\treturn weekOfYear(mom, this._week.dow, this._week.doy).week;
\t\t},

\t\t_week : {
\t\t\tdow : 0, // Sunday is the first day of the week.
\t\t\tdoy : 6  // The week that contains Jan 1st is the first week of the year.
\t\t},

\t\t_invalidDate: 'Invalid date',
\t\tinvalidDate: function () {
\t\t\treturn this._invalidDate;
\t\t}
\t});

\t/************************************
\t Formatting
\t ************************************/


\tfunction removeFormattingTokens(input) {
\t\tif (input.match(/\\[[\\s\\S]/)) {
\t\t\treturn input.replace(/^\\[|\\]\$/g, '');
\t\t}
\t\treturn input.replace(/\\\\/g, '');
\t}

\tfunction makeFormatFunction(format) {
\t\tvar array = format.match(formattingTokens), i, length;

\t\tfor (i = 0, length = array.length; i < length; i++) {
\t\t\tif (formatTokenFunctions[array[i]]) {
\t\t\t\tarray[i] = formatTokenFunctions[array[i]];
\t\t\t} else {
\t\t\t\tarray[i] = removeFormattingTokens(array[i]);
\t\t\t}
\t\t}

\t\treturn function (mom) {
\t\t\tvar output = '';
\t\t\tfor (i = 0; i < length; i++) {
\t\t\t\toutput += array[i] instanceof Function ? array[i].call(mom, format) : array[i];
\t\t\t}
\t\t\treturn output;
\t\t};
\t}

\t// format date using native date object
\tfunction formatMoment(m, format) {
\t\tif (!m.isValid()) {
\t\t\treturn m.localeData().invalidDate();
\t\t}

\t\tformat = expandFormat(format, m.localeData());

\t\tif (!formatFunctions[format]) {
\t\t\tformatFunctions[format] = makeFormatFunction(format);
\t\t}

\t\treturn formatFunctions[format](m);
\t}

\tfunction expandFormat(format, locale) {
\t\tvar i = 5;

\t\tfunction replaceLongDateFormatTokens(input) {
\t\t\treturn locale.longDateFormat(input) || input;
\t\t}

\t\tlocalFormattingTokens.lastIndex = 0;
\t\twhile (i >= 0 && localFormattingTokens.test(format)) {
\t\t\tformat = format.replace(localFormattingTokens, replaceLongDateFormatTokens);
\t\t\tlocalFormattingTokens.lastIndex = 0;
\t\t\ti -= 1;
\t\t}

\t\treturn format;
\t}


\t/************************************
\t Parsing
\t ************************************/


\t\t// get the regex to find the next token
\tfunction getParseRegexForToken(token, config) {
\t\tvar a, strict = config._strict;
\t\tswitch (token) {
\t\t\tcase 'Q':
\t\t\t\treturn parseTokenOneDigit;
\t\t\tcase 'DDDD':
\t\t\t\treturn parseTokenThreeDigits;
\t\t\tcase 'YYYY':
\t\t\tcase 'GGGG':
\t\t\tcase 'gggg':
\t\t\t\treturn strict ? parseTokenFourDigits : parseTokenOneToFourDigits;
\t\t\tcase 'Y':
\t\t\tcase 'G':
\t\t\tcase 'g':
\t\t\t\treturn parseTokenSignedNumber;
\t\t\tcase 'YYYYYY':
\t\t\tcase 'YYYYY':
\t\t\tcase 'GGGGG':
\t\t\tcase 'ggggg':
\t\t\t\treturn strict ? parseTokenSixDigits : parseTokenOneToSixDigits;
\t\t\tcase 'S':
\t\t\t\tif (strict) {
\t\t\t\t\treturn parseTokenOneDigit;
\t\t\t\t}
\t\t\t/* falls through */
\t\t\tcase 'SS':
\t\t\t\tif (strict) {
\t\t\t\t\treturn parseTokenTwoDigits;
\t\t\t\t}
\t\t\t/* falls through */
\t\t\tcase 'SSS':
\t\t\t\tif (strict) {
\t\t\t\t\treturn parseTokenThreeDigits;
\t\t\t\t}
\t\t\t/* falls through */
\t\t\tcase 'DDD':
\t\t\t\treturn parseTokenOneToThreeDigits;
\t\t\tcase 'MMM':
\t\t\tcase 'MMMM':
\t\t\tcase 'dd':
\t\t\tcase 'ddd':
\t\t\tcase 'dddd':
\t\t\t\treturn parseTokenWord;
\t\t\tcase 'a':
\t\t\tcase 'A':
\t\t\t\treturn config._locale._meridiemParse;
\t\t\tcase 'X':
\t\t\t\treturn parseTokenTimestampMs;
\t\t\tcase 'Z':
\t\t\tcase 'ZZ':
\t\t\t\treturn parseTokenTimezone;
\t\t\tcase 'T':
\t\t\t\treturn parseTokenT;
\t\t\tcase 'SSSS':
\t\t\t\treturn parseTokenDigits;
\t\t\tcase 'MM':
\t\t\tcase 'DD':
\t\t\tcase 'YY':
\t\t\tcase 'GG':
\t\t\tcase 'gg':
\t\t\tcase 'HH':
\t\t\tcase 'hh':
\t\t\tcase 'mm':
\t\t\tcase 'ss':
\t\t\tcase 'ww':
\t\t\tcase 'WW':
\t\t\t\treturn strict ? parseTokenTwoDigits : parseTokenOneOrTwoDigits;
\t\t\tcase 'M':
\t\t\tcase 'D':
\t\t\tcase 'd':
\t\t\tcase 'H':
\t\t\tcase 'h':
\t\t\tcase 'm':
\t\t\tcase 's':
\t\t\tcase 'w':
\t\t\tcase 'W':
\t\t\tcase 'e':
\t\t\tcase 'E':
\t\t\t\treturn parseTokenOneOrTwoDigits;
\t\t\tcase 'Do':
\t\t\t\treturn parseTokenOrdinal;
\t\t\tdefault :
\t\t\t\ta = new RegExp(regexpEscape(unescapeFormat(token.replace('\\\\', '')), 'i'));
\t\t\t\treturn a;
\t\t}
\t}

\tfunction timezoneMinutesFromString(string) {
\t\tstring = string || '';
\t\tvar possibleTzMatches = (string.match(parseTokenTimezone) || []),
\t\t\ttzChunk = possibleTzMatches[possibleTzMatches.length - 1] || [],
\t\t\tparts = (tzChunk + '').match(parseTimezoneChunker) || ['-', 0, 0],
\t\t\tminutes = +(parts[1] * 60) + toInt(parts[2]);

\t\treturn parts[0] === '+' ? -minutes : minutes;
\t}

\t// function to convert string input to date
\tfunction addTimeToArrayFromToken(token, input, config) {
\t\tvar a, datePartArray = config._a;

\t\tswitch (token) {
\t\t\t// QUARTER
\t\t\tcase 'Q':
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[MONTH] = (toInt(input) - 1) * 3;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// MONTH
\t\t\tcase 'M' : // fall through to MM
\t\t\tcase 'MM' :
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[MONTH] = toInt(input) - 1;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'MMM' : // fall through to MMMM
\t\t\tcase 'MMMM' :
\t\t\t\ta = config._locale.monthsParse(input);
\t\t\t\t// if we didn't find a month name, mark the date as invalid.
\t\t\t\tif (a != null) {
\t\t\t\t\tdatePartArray[MONTH] = a;
\t\t\t\t} else {
\t\t\t\t\tconfig._pf.invalidMonth = input;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// DAY OF MONTH
\t\t\tcase 'D' : // fall through to DD
\t\t\tcase 'DD' :
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[DATE] = toInt(input);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'Do' :
\t\t\t\tif (input != null) {
\t\t\t\t\tdatePartArray[DATE] = toInt(parseInt(input, 10));
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// DAY OF YEAR
\t\t\tcase 'DDD' : // fall through to DDDD
\t\t\tcase 'DDDD' :
\t\t\t\tif (input != null) {
\t\t\t\t\tconfig._dayOfYear = toInt(input);
\t\t\t\t}

\t\t\t\tbreak;
\t\t\t// YEAR
\t\t\tcase 'YY' :
\t\t\t\tdatePartArray[YEAR] = moment.parseTwoDigitYear(input);
\t\t\t\tbreak;
\t\t\tcase 'YYYY' :
\t\t\tcase 'YYYYY' :
\t\t\tcase 'YYYYYY' :
\t\t\t\tdatePartArray[YEAR] = toInt(input);
\t\t\t\tbreak;
\t\t\t// AM / PM
\t\t\tcase 'a' : // fall through to A
\t\t\tcase 'A' :
\t\t\t\tconfig._isPm = config._locale.isPM(input);
\t\t\t\tbreak;
\t\t\t// 24 HOUR
\t\t\tcase 'H' : // fall through to hh
\t\t\tcase 'HH' : // fall through to hh
\t\t\tcase 'h' : // fall through to hh
\t\t\tcase 'hh' :
\t\t\t\tdatePartArray[HOUR] = toInt(input);
\t\t\t\tbreak;
\t\t\t// MINUTE
\t\t\tcase 'm' : // fall through to mm
\t\t\tcase 'mm' :
\t\t\t\tdatePartArray[MINUTE] = toInt(input);
\t\t\t\tbreak;
\t\t\t// SECOND
\t\t\tcase 's' : // fall through to ss
\t\t\tcase 'ss' :
\t\t\t\tdatePartArray[SECOND] = toInt(input);
\t\t\t\tbreak;
\t\t\t// MILLISECOND
\t\t\tcase 'S' :
\t\t\tcase 'SS' :
\t\t\tcase 'SSS' :
\t\t\tcase 'SSSS' :
\t\t\t\tdatePartArray[MILLISECOND] = toInt(('0.' + input) * 1000);
\t\t\t\tbreak;
\t\t\t// UNIX TIMESTAMP WITH MS
\t\t\tcase 'X':
\t\t\t\tconfig._d = new Date(parseFloat(input) * 1000);
\t\t\t\tbreak;
\t\t\t// TIMEZONE
\t\t\tcase 'Z' : // fall through to ZZ
\t\t\tcase 'ZZ' :
\t\t\t\tconfig._useUTC = true;
\t\t\t\tconfig._tzm = timezoneMinutesFromString(input);
\t\t\t\tbreak;
\t\t\t// WEEKDAY - human
\t\t\tcase 'dd':
\t\t\tcase 'ddd':
\t\t\tcase 'dddd':
\t\t\t\ta = config._locale.weekdaysParse(input);
\t\t\t\t// if we didn't get a weekday name, mark the date as invalid
\t\t\t\tif (a != null) {
\t\t\t\t\tconfig._w = config._w || {};
\t\t\t\t\tconfig._w['d'] = a;
\t\t\t\t} else {
\t\t\t\t\tconfig._pf.invalidWeekday = input;
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t// WEEK, WEEK DAY - numeric
\t\t\tcase 'w':
\t\t\tcase 'ww':
\t\t\tcase 'W':
\t\t\tcase 'WW':
\t\t\tcase 'd':
\t\t\tcase 'e':
\t\t\tcase 'E':
\t\t\t\ttoken = token.substr(0, 1);
\t\t\t/* falls through */
\t\t\tcase 'gggg':
\t\t\tcase 'GGGG':
\t\t\tcase 'GGGGG':
\t\t\t\ttoken = token.substr(0, 2);
\t\t\t\tif (input) {
\t\t\t\t\tconfig._w = config._w || {};
\t\t\t\t\tconfig._w[token] = toInt(input);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'gg':
\t\t\tcase 'GG':
\t\t\t\tconfig._w = config._w || {};
\t\t\t\tconfig._w[token] = moment.parseTwoDigitYear(input);
\t\t}
\t}

\tfunction dayOfYearFromWeekInfo(config) {
\t\tvar w, weekYear, week, weekday, dow, doy, temp;

\t\tw = config._w;
\t\tif (w.GG != null || w.W != null || w.E != null) {
\t\t\tdow = 1;
\t\t\tdoy = 4;

\t\t\t// TODO: We need to take the current isoWeekYear, but that depends on
\t\t\t// how we interpret now (local, utc, fixed offset). So create
\t\t\t// a now version of current config (take local/utc/offset flags, and
\t\t\t// create now).
\t\t\tweekYear = dfl(w.GG, config._a[YEAR], weekOfYear(moment(), 1, 4).year);
\t\t\tweek = dfl(w.W, 1);
\t\t\tweekday = dfl(w.E, 1);
\t\t} else {
\t\t\tdow = config._locale._week.dow;
\t\t\tdoy = config._locale._week.doy;

\t\t\tweekYear = dfl(w.gg, config._a[YEAR], weekOfYear(moment(), dow, doy).year);
\t\t\tweek = dfl(w.w, 1);

\t\t\tif (w.d != null) {
\t\t\t\t// weekday -- low day numbers are considered next week
\t\t\t\tweekday = w.d;
\t\t\t\tif (weekday < dow) {
\t\t\t\t\t++week;
\t\t\t\t}
\t\t\t} else if (w.e != null) {
\t\t\t\t// local weekday -- counting starts from begining of week
\t\t\t\tweekday = w.e + dow;
\t\t\t} else {
\t\t\t\t// default to begining of week
\t\t\t\tweekday = dow;
\t\t\t}
\t\t}
\t\ttemp = dayOfYearFromWeeks(weekYear, week, weekday, doy, dow);

\t\tconfig._a[YEAR] = temp.year;
\t\tconfig._dayOfYear = temp.dayOfYear;
\t}

\t// convert an array to a date.
\t// the array should mirror the parameters below
\t// note: all values past the year are optional and will default to the lowest possible value.
\t// [year, month, day , hour, minute, second, millisecond]
\tfunction dateFromConfig(config) {
\t\tvar i, date, input = [], currentDate, yearToUse;

\t\tif (config._d) {
\t\t\treturn;
\t\t}

\t\tcurrentDate = currentDateArray(config);

\t\t//compute day of the year from weeks and weekdays
\t\tif (config._w && config._a[DATE] == null && config._a[MONTH] == null) {
\t\t\tdayOfYearFromWeekInfo(config);
\t\t}

\t\t//if the day of the year is set, figure out what it is
\t\tif (config._dayOfYear) {
\t\t\tyearToUse = dfl(config._a[YEAR], currentDate[YEAR]);

\t\t\tif (config._dayOfYear > daysInYear(yearToUse)) {
\t\t\t\tconfig._pf._overflowDayOfYear = true;
\t\t\t}

\t\t\tdate = makeUTCDate(yearToUse, 0, config._dayOfYear);
\t\t\tconfig._a[MONTH] = date.getUTCMonth();
\t\t\tconfig._a[DATE] = date.getUTCDate();
\t\t}

\t\t// Default to current date.
\t\t// * if no year, month, day of month are given, default to today
\t\t// * if day of month is given, default month and year
\t\t// * if month is given, default only year
\t\t// * if year is given, don't default anything
\t\tfor (i = 0; i < 3 && config._a[i] == null; ++i) {
\t\t\tconfig._a[i] = input[i] = currentDate[i];
\t\t}

\t\t// Zero out whatever was not defaulted, including time
\t\tfor (; i < 7; i++) {
\t\t\tconfig._a[i] = input[i] = (config._a[i] == null) ? (i === 2 ? 1 : 0) : config._a[i];
\t\t}

\t\tconfig._d = (config._useUTC ? makeUTCDate : makeDate).apply(null, input);
\t\t// Apply timezone offset from input. The actual zone can be changed
\t\t// with parseZone.
\t\tif (config._tzm != null) {
\t\t\tconfig._d.setUTCMinutes(config._d.getUTCMinutes() + config._tzm);
\t\t}
\t}

\tfunction dateFromObject(config) {
\t\tvar normalizedInput;

\t\tif (config._d) {
\t\t\treturn;
\t\t}

\t\tnormalizedInput = normalizeObjectUnits(config._i);
\t\tconfig._a = [
\t\t\tnormalizedInput.year,
\t\t\tnormalizedInput.month,
\t\t\tnormalizedInput.day,
\t\t\tnormalizedInput.hour,
\t\t\tnormalizedInput.minute,
\t\t\tnormalizedInput.second,
\t\t\tnormalizedInput.millisecond
\t\t];

\t\tdateFromConfig(config);
\t}

\tfunction currentDateArray(config) {
\t\tvar now = new Date();
\t\tif (config._useUTC) {
\t\t\treturn [
\t\t\t\tnow.getUTCFullYear(),
\t\t\t\tnow.getUTCMonth(),
\t\t\t\tnow.getUTCDate()
\t\t\t];
\t\t} else {
\t\t\treturn [now.getFullYear(), now.getMonth(), now.getDate()];
\t\t}
\t}

\t// date from string and format string
\tfunction makeDateFromStringAndFormat(config) {
\t\tif (config._f === moment.ISO_8601) {
\t\t\tparseISO(config);
\t\t\treturn;
\t\t}

\t\tconfig._a = [];
\t\tconfig._pf.empty = true;

\t\t// This array is used to make a Date, either with `new Date` or `Date.UTC`
\t\tvar string = '' + config._i,
\t\t\ti, parsedInput, tokens, token, skipped,
\t\t\tstringLength = string.length,
\t\t\ttotalParsedInputLength = 0;

\t\ttokens = expandFormat(config._f, config._locale).match(formattingTokens) || [];

\t\tfor (i = 0; i < tokens.length; i++) {
\t\t\ttoken = tokens[i];
\t\t\tparsedInput = (string.match(getParseRegexForToken(token, config)) || [])[0];
\t\t\tif (parsedInput) {
\t\t\t\tskipped = string.substr(0, string.indexOf(parsedInput));
\t\t\t\tif (skipped.length > 0) {
\t\t\t\t\tconfig._pf.unusedInput.push(skipped);
\t\t\t\t}
\t\t\t\tstring = string.slice(string.indexOf(parsedInput) + parsedInput.length);
\t\t\t\ttotalParsedInputLength += parsedInput.length;
\t\t\t}
\t\t\t// don't parse if it's not a known token
\t\t\tif (formatTokenFunctions[token]) {
\t\t\t\tif (parsedInput) {
\t\t\t\t\tconfig._pf.empty = false;
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tconfig._pf.unusedTokens.push(token);
\t\t\t\t}
\t\t\t\taddTimeToArrayFromToken(token, parsedInput, config);
\t\t\t}
\t\t\telse if (config._strict && !parsedInput) {
\t\t\t\tconfig._pf.unusedTokens.push(token);
\t\t\t}
\t\t}

\t\t// add remaining unparsed input length to the string
\t\tconfig._pf.charsLeftOver = stringLength - totalParsedInputLength;
\t\tif (string.length > 0) {
\t\t\tconfig._pf.unusedInput.push(string);
\t\t}

\t\t// handle am pm
\t\tif (config._isPm && config._a[HOUR] < 12) {
\t\t\tconfig._a[HOUR] += 12;
\t\t}
\t\t// if is 12 am, change hours to 0
\t\tif (config._isPm === false && config._a[HOUR] === 12) {
\t\t\tconfig._a[HOUR] = 0;
\t\t}

\t\tdateFromConfig(config);
\t\tcheckOverflow(config);
\t}

\tfunction unescapeFormat(s) {
\t\treturn s.replace(/\\\\(\\[)|\\\\(\\])|\\[([^\\]\\[]*)\\]|\\\\(.)/g, function (matched, p1, p2, p3, p4) {
\t\t\treturn p1 || p2 || p3 || p4;
\t\t});
\t}

\t// Code from http://stackoverflow.com/questions/3561493/is-there-a-regexp-escape-function-in-javascript
\tfunction regexpEscape(s) {
\t\treturn s.replace(/[-\\/\\\\^\$*+?.()|[\\]{}]/g, '\\\\\$&');
\t}

\t// date from string and array of format strings
\tfunction makeDateFromStringAndArray(config) {
\t\tvar tempConfig,
\t\t\tbestMoment,

\t\t\tscoreToBeat,
\t\t\ti,
\t\t\tcurrentScore;

\t\tif (config._f.length === 0) {
\t\t\tconfig._pf.invalidFormat = true;
\t\t\tconfig._d = new Date(NaN);
\t\t\treturn;
\t\t}

\t\tfor (i = 0; i < config._f.length; i++) {
\t\t\tcurrentScore = 0;
\t\t\ttempConfig = copyConfig({}, config);
\t\t\ttempConfig._pf = defaultParsingFlags();
\t\t\ttempConfig._f = config._f[i];
\t\t\tmakeDateFromStringAndFormat(tempConfig);

\t\t\tif (!isValid(tempConfig)) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// if there is any input that was not parsed add a penalty for that format
\t\t\tcurrentScore += tempConfig._pf.charsLeftOver;

\t\t\t//or tokens
\t\t\tcurrentScore += tempConfig._pf.unusedTokens.length * 10;

\t\t\ttempConfig._pf.score = currentScore;

\t\t\tif (scoreToBeat == null || currentScore < scoreToBeat) {
\t\t\t\tscoreToBeat = currentScore;
\t\t\t\tbestMoment = tempConfig;
\t\t\t}
\t\t}

\t\textend(config, bestMoment || tempConfig);
\t}

\t// date from iso format
\tfunction parseISO(config) {
\t\tvar i, l,
\t\t\tstring = config._i,
\t\t\tmatch = isoRegex.exec(string);

\t\tif (match) {
\t\t\tconfig._pf.iso = true;
\t\t\tfor (i = 0, l = isoDates.length; i < l; i++) {
\t\t\t\tif (isoDates[i][1].exec(string)) {
\t\t\t\t\t// match[5] should be \"T\" or undefined
\t\t\t\t\tconfig._f = isoDates[i][0] + (match[6] || ' ');
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tfor (i = 0, l = isoTimes.length; i < l; i++) {
\t\t\t\tif (isoTimes[i][1].exec(string)) {
\t\t\t\t\tconfig._f += isoTimes[i][0];
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tif (string.match(parseTokenTimezone)) {
\t\t\t\tconfig._f += 'Z';
\t\t\t}
\t\t\tmakeDateFromStringAndFormat(config);
\t\t} else {
\t\t\tconfig._isValid = false;
\t\t}
\t}

\t// date from iso format or fallback
\tfunction makeDateFromString(config) {
\t\tparseISO(config);
\t\tif (config._isValid === false) {
\t\t\tdelete config._isValid;
\t\t\tmoment.createFromInputFallback(config);
\t\t}
\t}

\tfunction makeDateFromInput(config) {
\t\tvar input = config._i, matched;
\t\tif (input === undefined) {
\t\t\tconfig._d = new Date();
\t\t} else if (isDate(input)) {
\t\t\tconfig._d = new Date(+input);
\t\t} else if ((matched = aspNetJsonRegex.exec(input)) !== null) {
\t\t\tconfig._d = new Date(+matched[1]);
\t\t} else if (typeof input === 'string') {
\t\t\tmakeDateFromString(config);
\t\t} else if (isArray(input)) {
\t\t\tconfig._a = input.slice(0);
\t\t\tdateFromConfig(config);
\t\t} else if (typeof(input) === 'object') {
\t\t\tdateFromObject(config);
\t\t} else if (typeof(input) === 'number') {
\t\t\t// from milliseconds
\t\t\tconfig._d = new Date(input);
\t\t} else {
\t\t\tmoment.createFromInputFallback(config);
\t\t}
\t}

\tfunction makeDate(y, m, d, h, M, s, ms) {
\t\t//can't just apply() to create a date:
\t\t//http://stackoverflow.com/questions/181348/instantiating-a-javascript-object-by-calling-prototype-constructor-apply
\t\tvar date = new Date(y, m, d, h, M, s, ms);

\t\t//the date constructor doesn't accept years < 1970
\t\tif (y < 1970) {
\t\t\tdate.setFullYear(y);
\t\t}
\t\treturn date;
\t}

\tfunction makeUTCDate(y) {
\t\tvar date = new Date(Date.UTC.apply(null, arguments));
\t\tif (y < 1970) {
\t\t\tdate.setUTCFullYear(y);
\t\t}
\t\treturn date;
\t}

\tfunction parseWeekday(input, locale) {
\t\tif (typeof input === 'string') {
\t\t\tif (!isNaN(input)) {
\t\t\t\tinput = parseInt(input, 10);
\t\t\t}
\t\t\telse {
\t\t\t\tinput = locale.weekdaysParse(input);
\t\t\t\tif (typeof input !== 'number') {
\t\t\t\t\treturn null;
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn input;
\t}

\t/************************************
\t Relative Time
\t ************************************/


\t\t// helper function for moment.fn.from, moment.fn.fromNow, and moment.duration.fn.humanize
\tfunction substituteTimeAgo(string, number, withoutSuffix, isFuture, locale) {
\t\treturn locale.relativeTime(number || 1, !!withoutSuffix, string, isFuture);
\t}

\tfunction relativeTime(posNegDuration, withoutSuffix, locale) {
\t\tvar duration = moment.duration(posNegDuration).abs(),
\t\t\tseconds = round(duration.as('s')),
\t\t\tminutes = round(duration.as('m')),
\t\t\thours = round(duration.as('h')),
\t\t\tdays = round(duration.as('d')),
\t\t\tmonths = round(duration.as('M')),
\t\t\tyears = round(duration.as('y')),

\t\t\targs = seconds < relativeTimeThresholds.s && ['s', seconds] ||
\t\t\t\tminutes === 1 && ['m'] ||
\t\t\t\tminutes < relativeTimeThresholds.m && ['mm', minutes] ||
\t\t\t\thours === 1 && ['h'] ||
\t\t\t\thours < relativeTimeThresholds.h && ['hh', hours] ||
\t\t\t\tdays === 1 && ['d'] ||
\t\t\t\tdays < relativeTimeThresholds.d && ['dd', days] ||
\t\t\t\tmonths === 1 && ['M'] ||
\t\t\t\tmonths < relativeTimeThresholds.M && ['MM', months] ||
\t\t\t\tyears === 1 && ['y'] || ['yy', years];

\t\targs[2] = withoutSuffix;
\t\targs[3] = +posNegDuration > 0;
\t\targs[4] = locale;
\t\treturn substituteTimeAgo.apply({}, args);
\t}


\t/************************************
\t Week of Year
\t ************************************/


\t\t// firstDayOfWeek       0 = sun, 6 = sat
\t\t//                      the day of the week that starts the week
\t\t//                      (usually sunday or monday)
\t\t// firstDayOfWeekOfYear 0 = sun, 6 = sat
\t\t//                      the first week is the week that contains the first
\t\t//                      of this day of the week
\t\t//                      (eg. ISO weeks use thursday (4))
\tfunction weekOfYear(mom, firstDayOfWeek, firstDayOfWeekOfYear) {
\t\tvar end = firstDayOfWeekOfYear - firstDayOfWeek,
\t\t\tdaysToDayOfWeek = firstDayOfWeekOfYear - mom.day(),
\t\t\tadjustedMoment;


\t\tif (daysToDayOfWeek > end) {
\t\t\tdaysToDayOfWeek -= 7;
\t\t}

\t\tif (daysToDayOfWeek < end - 7) {
\t\t\tdaysToDayOfWeek += 7;
\t\t}

\t\tadjustedMoment = moment(mom).add(daysToDayOfWeek, 'd');
\t\treturn {
\t\t\tweek: Math.ceil(adjustedMoment.dayOfYear() / 7),
\t\t\tyear: adjustedMoment.year()
\t\t};
\t}

\t//http://en.wikipedia.org/wiki/ISO_week_date#Calculating_a_date_given_the_year.2C_week_number_and_weekday
\tfunction dayOfYearFromWeeks(year, week, weekday, firstDayOfWeekOfYear, firstDayOfWeek) {
\t\tvar d = makeUTCDate(year, 0, 1).getUTCDay(), daysToAdd, dayOfYear;

\t\td = d === 0 ? 7 : d;
\t\tweekday = weekday != null ? weekday : firstDayOfWeek;
\t\tdaysToAdd = firstDayOfWeek - d + (d > firstDayOfWeekOfYear ? 7 : 0) - (d < firstDayOfWeek ? 7 : 0);
\t\tdayOfYear = 7 * (week - 1) + (weekday - firstDayOfWeek) + daysToAdd + 1;

\t\treturn {
\t\t\tyear: dayOfYear > 0 ? year : year - 1,
\t\t\tdayOfYear: dayOfYear > 0 ?  dayOfYear : daysInYear(year - 1) + dayOfYear
\t\t};
\t}

\t/************************************
\t Top Level Functions
\t ************************************/

\tfunction makeMoment(config) {
\t\tvar input = config._i,
\t\t\tformat = config._f;

\t\tconfig._locale = config._locale || moment.localeData(config._l);

\t\tif (input === null || (format === undefined && input === '')) {
\t\t\treturn moment.invalid({nullInput: true});
\t\t}

\t\tif (typeof input === 'string') {
\t\t\tconfig._i = input = config._locale.preparse(input);
\t\t}

\t\tif (moment.isMoment(input)) {
\t\t\treturn new Moment(input, true);
\t\t} else if (format) {
\t\t\tif (isArray(format)) {
\t\t\t\tmakeDateFromStringAndArray(config);
\t\t\t} else {
\t\t\t\tmakeDateFromStringAndFormat(config);
\t\t\t}
\t\t} else {
\t\t\tmakeDateFromInput(config);
\t\t}

\t\treturn new Moment(config);
\t}

\tmoment = function (input, format, locale, strict) {
\t\tvar c;

\t\tif (typeof(locale) === \"boolean\") {
\t\t\tstrict = locale;
\t\t\tlocale = undefined;
\t\t}
\t\t// object construction must be done this way.
\t\t// https://github.com/moment/moment/issues/1423
\t\tc = {};
\t\tc._isAMomentObject = true;
\t\tc._i = input;
\t\tc._f = format;
\t\tc._l = locale;
\t\tc._strict = strict;
\t\tc._isUTC = false;
\t\tc._pf = defaultParsingFlags();

\t\treturn makeMoment(c);
\t};

\tmoment.suppressDeprecationWarnings = false;

\tmoment.createFromInputFallback = deprecate(
\t\t'moment construction falls back to js Date. This is ' +
\t\t\t'discouraged and will be removed in upcoming major ' +
\t\t\t'release. Please refer to ' +
\t\t\t'https://github.com/moment/moment/issues/1407 for more info.',
\t\tfunction (config) {
\t\t\tconfig._d = new Date(config._i);
\t\t}
\t);

\t// Pick a moment m from moments so that m[fn](other) is true for all
\t// other. This relies on the function fn to be transitive.
\t//
\t// moments should either be an array of moment objects or an array, whose
\t// first element is an array of moment objects.
\tfunction pickBy(fn, moments) {
\t\tvar res, i;
\t\tif (moments.length === 1 && isArray(moments[0])) {
\t\t\tmoments = moments[0];
\t\t}
\t\tif (!moments.length) {
\t\t\treturn moment();
\t\t}
\t\tres = moments[0];
\t\tfor (i = 1; i < moments.length; ++i) {
\t\t\tif (moments[i][fn](res)) {
\t\t\t\tres = moments[i];
\t\t\t}
\t\t}
\t\treturn res;
\t}

\tmoment.min = function () {
\t\tvar args = [].slice.call(arguments, 0);

\t\treturn pickBy('isBefore', args);
\t};

\tmoment.max = function () {
\t\tvar args = [].slice.call(arguments, 0);

\t\treturn pickBy('isAfter', args);
\t};

\t// creating with utc
\tmoment.utc = function (input, format, locale, strict) {
\t\tvar c;

\t\tif (typeof(locale) === \"boolean\") {
\t\t\tstrict = locale;
\t\t\tlocale = undefined;
\t\t}
\t\t// object construction must be done this way.
\t\t// https://github.com/moment/moment/issues/1423
\t\tc = {};
\t\tc._isAMomentObject = true;
\t\tc._useUTC = true;
\t\tc._isUTC = true;
\t\tc._l = locale;
\t\tc._i = input;
\t\tc._f = format;
\t\tc._strict = strict;
\t\tc._pf = defaultParsingFlags();

\t\treturn makeMoment(c).utc();
\t};

\t// creating with unix timestamp (in seconds)
\tmoment.unix = function (input) {
\t\treturn moment(input * 1000);
\t};

\t// duration
\tmoment.duration = function (input, key) {
\t\tvar duration = input,
\t\t// matching against regexp is expensive, do it on demand
\t\t\tmatch = null,
\t\t\tsign,
\t\t\tret,
\t\t\tparseIso,
\t\t\tdiffRes;

\t\tif (moment.isDuration(input)) {
\t\t\tduration = {
\t\t\t\tms: input._milliseconds,
\t\t\t\td: input._days,
\t\t\t\tM: input._months
\t\t\t};
\t\t} else if (typeof input === 'number') {
\t\t\tduration = {};
\t\t\tif (key) {
\t\t\t\tduration[key] = input;
\t\t\t} else {
\t\t\t\tduration.milliseconds = input;
\t\t\t}
\t\t} else if (!!(match = aspNetTimeSpanJsonRegex.exec(input))) {
\t\t\tsign = (match[1] === '-') ? -1 : 1;
\t\t\tduration = {
\t\t\t\ty: 0,
\t\t\t\td: toInt(match[DATE]) * sign,
\t\t\t\th: toInt(match[HOUR]) * sign,
\t\t\t\tm: toInt(match[MINUTE]) * sign,
\t\t\t\ts: toInt(match[SECOND]) * sign,
\t\t\t\tms: toInt(match[MILLISECOND]) * sign
\t\t\t};
\t\t} else if (!!(match = isoDurationRegex.exec(input))) {
\t\t\tsign = (match[1] === '-') ? -1 : 1;
\t\t\tparseIso = function (inp) {
\t\t\t\t// We'd normally use ~~inp for this, but unfortunately it also
\t\t\t\t// converts floats to ints.
\t\t\t\t// inp may be undefined, so careful calling replace on it.
\t\t\t\tvar res = inp && parseFloat(inp.replace(',', '.'));
\t\t\t\t// apply sign while we're at it
\t\t\t\treturn (isNaN(res) ? 0 : res) * sign;
\t\t\t};
\t\t\tduration = {
\t\t\t\ty: parseIso(match[2]),
\t\t\t\tM: parseIso(match[3]),
\t\t\t\td: parseIso(match[4]),
\t\t\t\th: parseIso(match[5]),
\t\t\t\tm: parseIso(match[6]),
\t\t\t\ts: parseIso(match[7]),
\t\t\t\tw: parseIso(match[8])
\t\t\t};
\t\t} else if (typeof duration === 'object' &&
\t\t\t('from' in duration || 'to' in duration)) {
\t\t\tdiffRes = momentsDifference(moment(duration.from), moment(duration.to));

\t\t\tduration = {};
\t\t\tduration.ms = diffRes.milliseconds;
\t\t\tduration.M = diffRes.months;
\t\t}

\t\tret = new Duration(duration);

\t\tif (moment.isDuration(input) && input.hasOwnProperty('_locale')) {
\t\t\tret._locale = input._locale;
\t\t}

\t\treturn ret;
\t};

\t// version number
\tmoment.version = VERSION;

\t// default format
\tmoment.defaultFormat = isoFormat;

\t// constant that refers to the ISO standard
\tmoment.ISO_8601 = function () {};

\t// Plugins that add properties should also add the key here (null value),
\t// so we can properly clone ourselves.
\tmoment.momentProperties = momentProperties;

\t// This function will be called whenever a moment is mutated.
\t// It is intended to keep the offset in sync with the timezone.
\tmoment.updateOffset = function () {};

\t// This function allows you to set a threshold for relative time strings
\tmoment.relativeTimeThreshold = function (threshold, limit) {
\t\tif (relativeTimeThresholds[threshold] === undefined) {
\t\t\treturn false;
\t\t}
\t\tif (limit === undefined) {
\t\t\treturn relativeTimeThresholds[threshold];
\t\t}
\t\trelativeTimeThresholds[threshold] = limit;
\t\treturn true;
\t};

\tmoment.lang = deprecate(
\t\t\"moment.lang is deprecated. Use moment.locale instead.\",
\t\tfunction (key, value) {
\t\t\treturn moment.locale(key, value);
\t\t}
\t);

\t// This function will load locale and then set the global locale.  If
\t// no arguments are passed in, it will simply return the current global
\t// locale key.
\tmoment.locale = function (key, values) {
\t\tvar data;
\t\tif (key) {
\t\t\tif (typeof(values) !== \"undefined\") {
\t\t\t\tdata = moment.defineLocale(key, values);
\t\t\t}
\t\t\telse {
\t\t\t\tdata = moment.localeData(key);
\t\t\t}

\t\t\tif (data) {
\t\t\t\tmoment.duration._locale = moment._locale = data;
\t\t\t}
\t\t}

\t\treturn moment._locale._abbr;
\t};

\tmoment.defineLocale = function (name, values) {
\t\tif (values !== null) {
\t\t\tvalues.abbr = name;
\t\t\tif (!locales[name]) {
\t\t\t\tlocales[name] = new Locale();
\t\t\t}
\t\t\tlocales[name].set(values);

\t\t\t// backwards compat for now: also set the locale
\t\t\tmoment.locale(name);

\t\t\treturn locales[name];
\t\t} else {
\t\t\t// useful for testing
\t\t\tdelete locales[name];
\t\t\treturn null;
\t\t}
\t};

\tmoment.langData = deprecate(
\t\t\"moment.langData is deprecated. Use moment.localeData instead.\",
\t\tfunction (key) {
\t\t\treturn moment.localeData(key);
\t\t}
\t);

\t// returns locale data
\tmoment.localeData = function (key) {
\t\tvar locale;

\t\tif (key && key._locale && key._locale._abbr) {
\t\t\tkey = key._locale._abbr;
\t\t}

\t\tif (!key) {
\t\t\treturn moment._locale;
\t\t}

\t\tif (!isArray(key)) {
\t\t\t//short-circuit everything else
\t\t\tlocale = loadLocale(key);
\t\t\tif (locale) {
\t\t\t\treturn locale;
\t\t\t}
\t\t\tkey = [key];
\t\t}

\t\treturn chooseLocale(key);
\t};

\t// compare moment object
\tmoment.isMoment = function (obj) {
\t\treturn obj instanceof Moment ||
\t\t\t(obj != null &&  obj.hasOwnProperty('_isAMomentObject'));
\t};

\t// for typechecking Duration objects
\tmoment.isDuration = function (obj) {
\t\treturn obj instanceof Duration;
\t};

\tfor (i = lists.length - 1; i >= 0; --i) {
\t\tmakeList(lists[i]);
\t}

\tmoment.normalizeUnits = function (units) {
\t\treturn normalizeUnits(units);
\t};

\tmoment.invalid = function (flags) {
\t\tvar m = moment.utc(NaN);
\t\tif (flags != null) {
\t\t\textend(m._pf, flags);
\t\t}
\t\telse {
\t\t\tm._pf.userInvalidated = true;
\t\t}

\t\treturn m;
\t};

\tmoment.parseZone = function () {
\t\treturn moment.apply(null, arguments).parseZone();
\t};

\tmoment.parseTwoDigitYear = function (input) {
\t\treturn toInt(input) + (toInt(input) > 68 ? 1900 : 2000);
\t};

\t/************************************
\t Moment Prototype
\t ************************************/


\textend(moment.fn = Moment.prototype, {

\t\tclone : function () {
\t\t\treturn moment(this);
\t\t},

\t\tvalueOf : function () {
\t\t\treturn +this._d + ((this._offset || 0) * 60000);
\t\t},

\t\tunix : function () {
\t\t\treturn Math.floor(+this / 1000);
\t\t},

\t\ttoString : function () {
\t\t\treturn this.clone().locale('en').format(\"ddd MMM DD YYYY HH:mm:ss [GMT]ZZ\");
\t\t},

\t\ttoDate : function () {
\t\t\treturn this._offset ? new Date(+this) : this._d;
\t\t},

\t\ttoISOString : function () {
\t\t\tvar m = moment(this).utc();
\t\t\tif (0 < m.year() && m.year() <= 9999) {
\t\t\t\treturn formatMoment(m, 'YYYY-MM-DD[T]HH:mm:ss.SSS[Z]');
\t\t\t} else {
\t\t\t\treturn formatMoment(m, 'YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]');
\t\t\t}
\t\t},

\t\ttoArray : function () {
\t\t\tvar m = this;
\t\t\treturn [
\t\t\t\tm.year(),
\t\t\t\tm.month(),
\t\t\t\tm.date(),
\t\t\t\tm.hours(),
\t\t\t\tm.minutes(),
\t\t\t\tm.seconds(),
\t\t\t\tm.milliseconds()
\t\t\t];
\t\t},

\t\tisValid : function () {
\t\t\treturn isValid(this);
\t\t},

\t\tisDSTShifted : function () {
\t\t\tif (this._a) {
\t\t\t\treturn this.isValid() && compareArrays(this._a, (this._isUTC ? moment.utc(this._a) : moment(this._a)).toArray()) > 0;
\t\t\t}

\t\t\treturn false;
\t\t},

\t\tparsingFlags : function () {
\t\t\treturn extend({}, this._pf);
\t\t},

\t\tinvalidAt: function () {
\t\t\treturn this._pf.overflow;
\t\t},

\t\tutc : function (keepLocalTime) {
\t\t\treturn this.zone(0, keepLocalTime);
\t\t},

\t\tlocal : function (keepLocalTime) {
\t\t\tif (this._isUTC) {
\t\t\t\tthis.zone(0, keepLocalTime);
\t\t\t\tthis._isUTC = false;

\t\t\t\tif (keepLocalTime) {
\t\t\t\t\tthis.add(this._d.getTimezoneOffset(), 'm');
\t\t\t\t}
\t\t\t}
\t\t\treturn this;
\t\t},

\t\tformat : function (inputString) {
\t\t\tvar output = formatMoment(this, inputString || moment.defaultFormat);
\t\t\treturn this.localeData().postformat(output);
\t\t},

\t\tadd : createAdder(1, 'add'),

\t\tsubtract : createAdder(-1, 'subtract'),

\t\tdiff : function (input, units, asFloat) {
\t\t\tvar that = makeAs(input, this),
\t\t\t\tzoneDiff = (this.zone() - that.zone()) * 6e4,
\t\t\t\tdiff, output;

\t\t\tunits = normalizeUnits(units);

\t\t\tif (units === 'year' || units === 'month') {
\t\t\t\t// average number of days in the months in the given dates
\t\t\t\tdiff = (this.daysInMonth() + that.daysInMonth()) * 432e5; // 24 * 60 * 60 * 1000 / 2
\t\t\t\t// difference in months
\t\t\t\toutput = ((this.year() - that.year()) * 12) + (this.month() - that.month());
\t\t\t\t// adjust by taking difference in days, average number of days
\t\t\t\t// and dst in the given months.
\t\t\t\toutput += ((this - moment(this).startOf('month')) -
\t\t\t\t\t(that - moment(that).startOf('month'))) / diff;
\t\t\t\t// same as above but with zones, to negate all dst
\t\t\t\toutput -= ((this.zone() - moment(this).startOf('month').zone()) -
\t\t\t\t\t(that.zone() - moment(that).startOf('month').zone())) * 6e4 / diff;
\t\t\t\tif (units === 'year') {
\t\t\t\t\toutput = output / 12;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tdiff = (this - that);
\t\t\t\toutput = units === 'second' ? diff / 1e3 : // 1000
\t\t\t\t\tunits === 'minute' ? diff / 6e4 : // 1000 * 60
\t\t\t\t\t\tunits === 'hour' ? diff / 36e5 : // 1000 * 60 * 60
\t\t\t\t\t\t\tunits === 'day' ? (diff - zoneDiff) / 864e5 : // 1000 * 60 * 60 * 24, negate dst
\t\t\t\t\t\t\t\tunits === 'week' ? (diff - zoneDiff) / 6048e5 : // 1000 * 60 * 60 * 24 * 7, negate dst
\t\t\t\t\t\t\t\t\tdiff;
\t\t\t}
\t\t\treturn asFloat ? output : absRound(output);
\t\t},

\t\tfrom : function (time, withoutSuffix) {
\t\t\treturn moment.duration({to: this, from: time}).locale(this.locale()).humanize(!withoutSuffix);
\t\t},

\t\tfromNow : function (withoutSuffix) {
\t\t\treturn this.from(moment(), withoutSuffix);
\t\t},

\t\tcalendar : function (time) {
\t\t\t// We want to compare the start of today, vs this.
\t\t\t// Getting start-of-today depends on whether we're zone'd or not.
\t\t\tvar now = time || moment(),
\t\t\t\tsod = makeAs(now, this).startOf('day'),
\t\t\t\tdiff = this.diff(sod, 'days', true),
\t\t\t\tformat = diff < -6 ? 'sameElse' :
\t\t\t\t\tdiff < -1 ? 'lastWeek' :
\t\t\t\t\t\tdiff < 0 ? 'lastDay' :
\t\t\t\t\t\t\tdiff < 1 ? 'sameDay' :
\t\t\t\t\t\t\t\tdiff < 2 ? 'nextDay' :
\t\t\t\t\t\t\t\t\tdiff < 7 ? 'nextWeek' : 'sameElse';
\t\t\treturn this.format(this.localeData().calendar(format, this));
\t\t},

\t\tisLeapYear : function () {
\t\t\treturn isLeapYear(this.year());
\t\t},

\t\tisDST : function () {
\t\t\treturn (this.zone() < this.clone().month(0).zone() ||
\t\t\t\tthis.zone() < this.clone().month(5).zone());
\t\t},

\t\tday : function (input) {
\t\t\tvar day = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
\t\t\tif (input != null) {
\t\t\t\tinput = parseWeekday(input, this.localeData());
\t\t\t\treturn this.add(input - day, 'd');
\t\t\t} else {
\t\t\t\treturn day;
\t\t\t}
\t\t},

\t\tmonth : makeAccessor('Month', true),

\t\tstartOf : function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\t// the following switch intentionally omits break keywords
\t\t\t// to utilize falling through the cases.
\t\t\tswitch (units) {
\t\t\t\tcase 'year':
\t\t\t\t\tthis.month(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'quarter':
\t\t\t\tcase 'month':
\t\t\t\t\tthis.date(1);
\t\t\t\t/* falls through */
\t\t\t\tcase 'week':
\t\t\t\tcase 'isoWeek':
\t\t\t\tcase 'day':
\t\t\t\t\tthis.hours(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'hour':
\t\t\t\t\tthis.minutes(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'minute':
\t\t\t\t\tthis.seconds(0);
\t\t\t\t/* falls through */
\t\t\t\tcase 'second':
\t\t\t\t\tthis.milliseconds(0);
\t\t\t\t/* falls through */
\t\t\t}

\t\t\t// weeks are a special case
\t\t\tif (units === 'week') {
\t\t\t\tthis.weekday(0);
\t\t\t} else if (units === 'isoWeek') {
\t\t\t\tthis.isoWeekday(1);
\t\t\t}

\t\t\t// quarters are also special
\t\t\tif (units === 'quarter') {
\t\t\t\tthis.month(Math.floor(this.month() / 3) * 3);
\t\t\t}

\t\t\treturn this;
\t\t},

\t\tendOf: function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\treturn this.startOf(units).add(1, (units === 'isoWeek' ? 'week' : units)).subtract(1, 'ms');
\t\t},

\t\tisAfter: function (input, units) {
\t\t\tunits = typeof units !== 'undefined' ? units : 'millisecond';
\t\t\treturn +this.clone().startOf(units) > +moment(input).startOf(units);
\t\t},

\t\tisBefore: function (input, units) {
\t\t\tunits = typeof units !== 'undefined' ? units : 'millisecond';
\t\t\treturn +this.clone().startOf(units) < +moment(input).startOf(units);
\t\t},

\t\tisSame: function (input, units) {
\t\t\tunits = units || 'ms';
\t\t\treturn +this.clone().startOf(units) === +makeAs(input, this).startOf(units);
\t\t},

\t\tmin: deprecate(
\t\t\t'moment().min is deprecated, use moment.min instead. https://github.com/moment/moment/issues/1548',
\t\t\tfunction (other) {
\t\t\t\tother = moment.apply(null, arguments);
\t\t\t\treturn other < this ? this : other;
\t\t\t}
\t\t),

\t\tmax: deprecate(
\t\t\t'moment().max is deprecated, use moment.max instead. https://github.com/moment/moment/issues/1548',
\t\t\tfunction (other) {
\t\t\t\tother = moment.apply(null, arguments);
\t\t\t\treturn other > this ? this : other;
\t\t\t}
\t\t),

\t\t// keepLocalTime = true means only change the timezone, without
\t\t// affecting the local hour. So 5:31:26 +0300 --[zone(2, true)]-->
\t\t// 5:31:26 +0200 It is possible that 5:31:26 doesn't exist int zone
\t\t// +0200, so we adjust the time as needed, to be valid.
\t\t//
\t\t// Keeping the time actually adds/subtracts (one hour)
\t\t// from the actual represented time. That is why we call updateOffset
\t\t// a second time. In case it wants us to change the offset again
\t\t// _changeInProgress == true case, then we have to adjust, because
\t\t// there is no such time in the given timezone.
\t\tzone : function (input, keepLocalTime) {
\t\t\tvar offset = this._offset || 0,
\t\t\t\tlocalAdjust;
\t\t\tif (input != null) {
\t\t\t\tif (typeof input === 'string') {
\t\t\t\t\tinput = timezoneMinutesFromString(input);
\t\t\t\t}
\t\t\t\tif (Math.abs(input) < 16) {
\t\t\t\t\tinput = input * 60;
\t\t\t\t}
\t\t\t\tif (!this._isUTC && keepLocalTime) {
\t\t\t\t\tlocalAdjust = this._d.getTimezoneOffset();
\t\t\t\t}
\t\t\t\tthis._offset = input;
\t\t\t\tthis._isUTC = true;
\t\t\t\tif (localAdjust != null) {
\t\t\t\t\tthis.subtract(localAdjust, 'm');
\t\t\t\t}
\t\t\t\tif (offset !== input) {
\t\t\t\t\tif (!keepLocalTime || this._changeInProgress) {
\t\t\t\t\t\taddOrSubtractDurationFromMoment(this,
\t\t\t\t\t\t\tmoment.duration(offset - input, 'm'), 1, false);
\t\t\t\t\t} else if (!this._changeInProgress) {
\t\t\t\t\t\tthis._changeInProgress = true;
\t\t\t\t\t\tmoment.updateOffset(this, true);
\t\t\t\t\t\tthis._changeInProgress = null;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\treturn this._isUTC ? offset : this._d.getTimezoneOffset();
\t\t\t}
\t\t\treturn this;
\t\t},

\t\tzoneAbbr : function () {
\t\t\treturn this._isUTC ? 'UTC' : '';
\t\t},

\t\tzoneName : function () {
\t\t\treturn this._isUTC ? 'Coordinated Universal Time' : '';
\t\t},

\t\tparseZone : function () {
\t\t\tif (this._tzm) {
\t\t\t\tthis.zone(this._tzm);
\t\t\t} else if (typeof this._i === 'string') {
\t\t\t\tthis.zone(this._i);
\t\t\t}
\t\t\treturn this;
\t\t},

\t\thasAlignedHourOffset : function (input) {
\t\t\tif (!input) {
\t\t\t\tinput = 0;
\t\t\t}
\t\t\telse {
\t\t\t\tinput = moment(input).zone();
\t\t\t}

\t\t\treturn (this.zone() - input) % 60 === 0;
\t\t},

\t\tdaysInMonth : function () {
\t\t\treturn daysInMonth(this.year(), this.month());
\t\t},

\t\tdayOfYear : function (input) {
\t\t\tvar dayOfYear = round((moment(this).startOf('day') - moment(this).startOf('year')) / 864e5) + 1;
\t\t\treturn input == null ? dayOfYear : this.add((input - dayOfYear), 'd');
\t\t},

\t\tquarter : function (input) {
\t\t\treturn input == null ? Math.ceil((this.month() + 1) / 3) : this.month((input - 1) * 3 + this.month() % 3);
\t\t},

\t\tweekYear : function (input) {
\t\t\tvar year = weekOfYear(this, this.localeData()._week.dow, this.localeData()._week.doy).year;
\t\t\treturn input == null ? year : this.add((input - year), 'y');
\t\t},

\t\tisoWeekYear : function (input) {
\t\t\tvar year = weekOfYear(this, 1, 4).year;
\t\t\treturn input == null ? year : this.add((input - year), 'y');
\t\t},

\t\tweek : function (input) {
\t\t\tvar week = this.localeData().week(this);
\t\t\treturn input == null ? week : this.add((input - week) * 7, 'd');
\t\t},

\t\tisoWeek : function (input) {
\t\t\tvar week = weekOfYear(this, 1, 4).week;
\t\t\treturn input == null ? week : this.add((input - week) * 7, 'd');
\t\t},

\t\tweekday : function (input) {
\t\t\tvar weekday = (this.day() + 7 - this.localeData()._week.dow) % 7;
\t\t\treturn input == null ? weekday : this.add(input - weekday, 'd');
\t\t},

\t\tisoWeekday : function (input) {
\t\t\t// behaves the same as moment#day except
\t\t\t// as a getter, returns 7 instead of 0 (1-7 range instead of 0-6)
\t\t\t// as a setter, sunday should belong to the previous week.
\t\t\treturn input == null ? this.day() || 7 : this.day(this.day() % 7 ? input : input - 7);
\t\t},

\t\tisoWeeksInYear : function () {
\t\t\treturn weeksInYear(this.year(), 1, 4);
\t\t},

\t\tweeksInYear : function () {
\t\t\tvar weekInfo = this.localeData()._week;
\t\t\treturn weeksInYear(this.year(), weekInfo.dow, weekInfo.doy);
\t\t},

\t\tget : function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\treturn this[units]();
\t\t},

\t\tset : function (units, value) {
\t\t\tunits = normalizeUnits(units);
\t\t\tif (typeof this[units] === 'function') {
\t\t\t\tthis[units](value);
\t\t\t}
\t\t\treturn this;
\t\t},

\t\t// If passed a locale key, it will set the locale for this
\t\t// instance.  Otherwise, it will return the locale configuration
\t\t// variables for this instance.
\t\tlocale : function (key) {
\t\t\tif (key === undefined) {
\t\t\t\treturn this._locale._abbr;
\t\t\t} else {
\t\t\t\tthis._locale = moment.localeData(key);
\t\t\t\treturn this;
\t\t\t}
\t\t},

\t\tlang : deprecate(
\t\t\t\"moment().lang() is deprecated. Use moment().localeData() instead.\",
\t\t\tfunction (key) {
\t\t\t\tif (key === undefined) {
\t\t\t\t\treturn this.localeData();
\t\t\t\t} else {
\t\t\t\t\tthis._locale = moment.localeData(key);
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t}
\t\t),

\t\tlocaleData : function () {
\t\t\treturn this._locale;
\t\t}
\t});

\tfunction rawMonthSetter(mom, value) {
\t\tvar dayOfMonth;

\t\t// TODO: Move this out of here!
\t\tif (typeof value === 'string') {
\t\t\tvalue = mom.localeData().monthsParse(value);
\t\t\t// TODO: Another silent failure?
\t\t\tif (typeof value !== 'number') {
\t\t\t\treturn mom;
\t\t\t}
\t\t}

\t\tdayOfMonth = Math.min(mom.date(),
\t\t\tdaysInMonth(mom.year(), value));
\t\tmom._d['set' + (mom._isUTC ? 'UTC' : '') + 'Month'](value, dayOfMonth);
\t\treturn mom;
\t}

\tfunction rawGetter(mom, unit) {
\t\treturn mom._d['get' + (mom._isUTC ? 'UTC' : '') + unit]();
\t}

\tfunction rawSetter(mom, unit, value) {
\t\tif (unit === 'Month') {
\t\t\treturn rawMonthSetter(mom, value);
\t\t} else {
\t\t\treturn mom._d['set' + (mom._isUTC ? 'UTC' : '') + unit](value);
\t\t}
\t}

\tfunction makeAccessor(unit, keepTime) {
\t\treturn function (value) {
\t\t\tif (value != null) {
\t\t\t\trawSetter(this, unit, value);
\t\t\t\tmoment.updateOffset(this, keepTime);
\t\t\t\treturn this;
\t\t\t} else {
\t\t\t\treturn rawGetter(this, unit);
\t\t\t}
\t\t};
\t}

\tmoment.fn.millisecond = moment.fn.milliseconds = makeAccessor('Milliseconds', false);
\tmoment.fn.second = moment.fn.seconds = makeAccessor('Seconds', false);
\tmoment.fn.minute = moment.fn.minutes = makeAccessor('Minutes', false);
\t// Setting the hour should keep the time, because the user explicitly
\t// specified which hour he wants. So trying to maintain the same hour (in
\t// a new timezone) makes sense. Adding/subtracting hours does not follow
\t// this rule.
\tmoment.fn.hour = moment.fn.hours = makeAccessor('Hours', true);
\t// moment.fn.month is defined separately
\tmoment.fn.date = makeAccessor('Date', true);
\tmoment.fn.dates = deprecate('dates accessor is deprecated. Use date instead.', makeAccessor('Date', true));
\tmoment.fn.year = makeAccessor('FullYear', true);
\tmoment.fn.years = deprecate('years accessor is deprecated. Use year instead.', makeAccessor('FullYear', true));

\t// add plural methods
\tmoment.fn.days = moment.fn.day;
\tmoment.fn.months = moment.fn.month;
\tmoment.fn.weeks = moment.fn.week;
\tmoment.fn.isoWeeks = moment.fn.isoWeek;
\tmoment.fn.quarters = moment.fn.quarter;

\t// add aliased format methods
\tmoment.fn.toJSON = moment.fn.toISOString;

\t/************************************
\t Duration Prototype
\t ************************************/


\tfunction daysToYears (days) {
\t\t// 400 years have 146097 days (taking into account leap year rules)
\t\treturn days * 400 / 146097;
\t}

\tfunction yearsToDays (years) {
\t\t// years * 365 + absRound(years / 4) -
\t\t//     absRound(years / 100) + absRound(years / 400);
\t\treturn years * 146097 / 400;
\t}

\textend(moment.duration.fn = Duration.prototype, {

\t\t_bubble : function () {
\t\t\tvar milliseconds = this._milliseconds,
\t\t\t\tdays = this._days,
\t\t\t\tmonths = this._months,
\t\t\t\tdata = this._data,
\t\t\t\tseconds, minutes, hours, years = 0;

\t\t\t// The following code bubbles up values, see the tests for
\t\t\t// examples of what that means.
\t\t\tdata.milliseconds = milliseconds % 1000;

\t\t\tseconds = absRound(milliseconds / 1000);
\t\t\tdata.seconds = seconds % 60;

\t\t\tminutes = absRound(seconds / 60);
\t\t\tdata.minutes = minutes % 60;

\t\t\thours = absRound(minutes / 60);
\t\t\tdata.hours = hours % 24;

\t\t\tdays += absRound(hours / 24);

\t\t\t// Accurately convert days to years, assume start from year 0.
\t\t\tyears = absRound(daysToYears(days));
\t\t\tdays -= absRound(yearsToDays(years));

\t\t\t// 30 days to a month
\t\t\t// TODO (iskren): Use anchor date (like 1st Jan) to compute this.
\t\t\tmonths += absRound(days / 30);
\t\t\tdays %= 30;

\t\t\t// 12 months -> 1 year
\t\t\tyears += absRound(months / 12);
\t\t\tmonths %= 12;

\t\t\tdata.days = days;
\t\t\tdata.months = months;
\t\t\tdata.years = years;
\t\t},

\t\tabs : function () {
\t\t\tthis._milliseconds = Math.abs(this._milliseconds);
\t\t\tthis._days = Math.abs(this._days);
\t\t\tthis._months = Math.abs(this._months);

\t\t\tthis._data.milliseconds = Math.abs(this._data.milliseconds);
\t\t\tthis._data.seconds = Math.abs(this._data.seconds);
\t\t\tthis._data.minutes = Math.abs(this._data.minutes);
\t\t\tthis._data.hours = Math.abs(this._data.hours);
\t\t\tthis._data.months = Math.abs(this._data.months);
\t\t\tthis._data.years = Math.abs(this._data.years);

\t\t\treturn this;
\t\t},

\t\tweeks : function () {
\t\t\treturn absRound(this.days() / 7);
\t\t},

\t\tvalueOf : function () {
\t\t\treturn this._milliseconds +
\t\t\t\tthis._days * 864e5 +
\t\t\t\t(this._months % 12) * 2592e6 +
\t\t\t\ttoInt(this._months / 12) * 31536e6;
\t\t},

\t\thumanize : function (withSuffix) {
\t\t\tvar output = relativeTime(this, !withSuffix, this.localeData());

\t\t\tif (withSuffix) {
\t\t\t\toutput = this.localeData().pastFuture(+this, output);
\t\t\t}

\t\t\treturn this.localeData().postformat(output);
\t\t},

\t\tadd : function (input, val) {
\t\t\t// supports only 2.0-style add(1, 's') or add(moment)
\t\t\tvar dur = moment.duration(input, val);

\t\t\tthis._milliseconds += dur._milliseconds;
\t\t\tthis._days += dur._days;
\t\t\tthis._months += dur._months;

\t\t\tthis._bubble();

\t\t\treturn this;
\t\t},

\t\tsubtract : function (input, val) {
\t\t\tvar dur = moment.duration(input, val);

\t\t\tthis._milliseconds -= dur._milliseconds;
\t\t\tthis._days -= dur._days;
\t\t\tthis._months -= dur._months;

\t\t\tthis._bubble();

\t\t\treturn this;
\t\t},

\t\tget : function (units) {
\t\t\tunits = normalizeUnits(units);
\t\t\treturn this[units.toLowerCase() + 's']();
\t\t},

\t\tas : function (units) {
\t\t\tvar days, months;
\t\t\tunits = normalizeUnits(units);

\t\t\tdays = this._days + this._milliseconds / 864e5;
\t\t\tif (units === 'month' || units === 'year') {
\t\t\t\tmonths = this._months + daysToYears(days) * 12;
\t\t\t\treturn units === 'month' ? months : months / 12;
\t\t\t} else {
\t\t\t\tdays += yearsToDays(this._months / 12);
\t\t\t\tswitch (units) {
\t\t\t\t\tcase 'week': return days / 7;
\t\t\t\t\tcase 'day': return days;
\t\t\t\t\tcase 'hour': return days * 24;
\t\t\t\t\tcase 'minute': return days * 24 * 60;
\t\t\t\t\tcase 'second': return days * 24 * 60 * 60;
\t\t\t\t\tcase 'millisecond': return days * 24 * 60 * 60 * 1000;
\t\t\t\t\tdefault: throw new Error('Unknown unit ' + units);
\t\t\t\t}
\t\t\t}
\t\t},

\t\tlang : moment.fn.lang,
\t\tlocale : moment.fn.locale,

\t\ttoIsoString : deprecate(
\t\t\t\"toIsoString() is deprecated. Please use toISOString() instead \" +
\t\t\t\t\"(notice the capitals)\",
\t\t\tfunction () {
\t\t\t\treturn this.toISOString();
\t\t\t}
\t\t),

\t\ttoISOString : function () {
\t\t\t// inspired by https://github.com/dordille/moment-isoduration/blob/master/moment.isoduration.js
\t\t\tvar years = Math.abs(this.years()),
\t\t\t\tmonths = Math.abs(this.months()),
\t\t\t\tdays = Math.abs(this.days()),
\t\t\t\thours = Math.abs(this.hours()),
\t\t\t\tminutes = Math.abs(this.minutes()),
\t\t\t\tseconds = Math.abs(this.seconds() + this.milliseconds() / 1000);

\t\t\tif (!this.asSeconds()) {
\t\t\t\t// this is the same as C#'s (Noda) and python (isodate)...
\t\t\t\t// but not other JS (goog.date)
\t\t\t\treturn 'P0D';
\t\t\t}

\t\t\treturn (this.asSeconds() < 0 ? '-' : '') +
\t\t\t\t'P' +
\t\t\t\t(years ? years + 'Y' : '') +
\t\t\t\t(months ? months + 'M' : '') +
\t\t\t\t(days ? days + 'D' : '') +
\t\t\t\t((hours || minutes || seconds) ? 'T' : '') +
\t\t\t\t(hours ? hours + 'H' : '') +
\t\t\t\t(minutes ? minutes + 'M' : '') +
\t\t\t\t(seconds ? seconds + 'S' : '');
\t\t},

\t\tlocaleData : function () {
\t\t\treturn this._locale;
\t\t}
\t});

\tfunction makeDurationGetter(name) {
\t\tmoment.duration.fn[name] = function () {
\t\t\treturn this._data[name];
\t\t};
\t}

\tfor (i in unitMillisecondFactors) {
\t\tif (unitMillisecondFactors.hasOwnProperty(i)) {
\t\t\tmakeDurationGetter(i.toLowerCase());
\t\t}
\t}

\tmoment.duration.fn.asMilliseconds = function () {
\t\treturn this.as('ms');
\t};
\tmoment.duration.fn.asSeconds = function () {
\t\treturn this.as('s');
\t};
\tmoment.duration.fn.asMinutes = function () {
\t\treturn this.as('m');
\t};
\tmoment.duration.fn.asHours = function () {
\t\treturn this.as('h');
\t};
\tmoment.duration.fn.asDays = function () {
\t\treturn this.as('d');
\t};
\tmoment.duration.fn.asWeeks = function () {
\t\treturn this.as('weeks');
\t};
\tmoment.duration.fn.asMonths = function () {
\t\treturn this.as('M');
\t};
\tmoment.duration.fn.asYears = function () {
\t\treturn this.as('y');
\t};

\t/************************************
\t Default Locale
\t ************************************/


\t\t// Set default locale, other locale will inherit from English.
\tmoment.locale('en', {
\t\tordinal : function (number) {
\t\t\tvar b = number % 10,
\t\t\t\toutput = (toInt(number % 100 / 10) === 1) ? 'th' :
\t\t\t\t\t(b === 1) ? 'st' :
\t\t\t\t\t\t(b === 2) ? 'nd' :
\t\t\t\t\t\t\t(b === 3) ? 'rd' : 'th';
\t\t\treturn number + output;
\t\t}
\t});

\t/* EMBED_LOCALES */

\t/************************************
\t Exposing Moment
\t ************************************/

\tfunction makeGlobal(shouldDeprecate) {
\t\t/*global ender:false */
\t\tif (typeof ender !== 'undefined') {
\t\t\treturn;
\t\t}
\t\toldGlobalMoment = globalScope.moment;
\t\tif (shouldDeprecate) {
\t\t\tglobalScope.moment = deprecate(
\t\t\t\t'Accessing Moment through the global scope is ' +
\t\t\t\t\t'deprecated, and will be removed in an upcoming ' +
\t\t\t\t\t'release.',
\t\t\t\tmoment);
\t\t} else {
\t\t\tglobalScope.moment = moment;
\t\t}
\t}

\t// CommonJS module is defined
\tif (hasModule) {
\t\tmodule.exports = moment;
\t} else if (typeof define === 'function' && define.amd) {
\t\tdefine('moment', function (require, exports, module) {
\t\t\tif (module.config && module.config() && module.config().noGlobal === true) {
\t\t\t\t// release the global variable
\t\t\t\tglobalScope.moment = oldGlobalMoment;
\t\t\t}

\t\t\treturn moment;
\t\t});
\t\tmakeGlobal(true);
\t} else {
\t\tmakeGlobal();
\t}
}).call(this);
", "wdn/templates_5.1/js/moment.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/moment.js");
    }
}
