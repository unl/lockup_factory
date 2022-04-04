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

/* wdn/templates_5.2/js/analytics.js */
class __TwigTemplate_1771b12d0b38833385eaec505bda6683 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/analytics.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/analytics.js"));

        // line 1
        echo "'use strict';

/* global define: false */

define(['wdn', 'idm', 'jquery'], function (WDN, idm, \$) {
\t\"use strict\";

\tvar wdnProp = 'UA-3203435-1',
\t    unlDomain = '.unl.edu',
\t    Plugin,
\t    thisURL = String(window.location),
\t    initd = false,
\t    gaWdnName = 'wdn',
\t    gaWdn = gaWdnName + '.',
\t    mediaHubOrigin = 'https://mediahub.unl.edu';

\tvar bindLinks = function bindLinks() {
\t\tWDN.log('Begin binding links for analytics');
\t\t//get the links in the navigation and maincontent
\t\tvar navLinks = \$('a', '#dcf-navigation'),
\t\t    mainLinks = \$('a', '#dcf-main'),
\t\t    evaluateLinks,
\t\t    filetypes = /\\.(zip|exe|pdf|doc*|xls*|ppt*|mp3|m4v|mov|mp4)\$/i;

\t\tevaluateLinks = function evaluateLinks() {
\t\t\tvar link = \$(this);
\t\t\tvar gahref = link.attr(\"href\");
\t\t\tif (!gahref) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif (gahref.match(/^https?\\:/i) && !gahref.match(document.domain)) {
\t\t\t\tlink.click(function () {
\t\t\t\t\tPlugin.callTrackEvent('Outgoing Link', gahref, thisURL);
\t\t\t\t\tPlugin.callTrackPageview(gahref, false);
\t\t\t\t});
\t\t\t} else if (gahref.match(/^mailto\\:/i)) {
\t\t\t\tvar mailLink = gahref.replace(/^mailto\\:/i, '');
\t\t\t\tlink.click(function () {
\t\t\t\t\tPlugin.callTrackEvent('Email', mailLink, thisURL);
\t\t\t\t});
\t\t\t} else if (gahref.match(filetypes)) {
\t\t\t\tlink.click(function () {
\t\t\t\t\tPlugin.callTrackEvent('File Download', gahref, thisURL);
\t\t\t\t\tPlugin.callTrackPageview(gahref);
\t\t\t\t});
\t\t\t}
\t\t};

\t\t//loop through all the links and pass them to type evaluation
\t\tnavLinks.each(evaluateLinks);
\t\tmainLinks.each(evaluateLinks);
\t};

\tvar bindBreadcrumbs = function bindBreadcrumbs() {
\t\t\$('#dcf-breadcrumbs a').one('click', function () {
\t\t\tPlugin.callTrackEvent('Breadcrumbs', 'Click', thisURL);
\t\t});
\t};

\t// ga.js method for getting default tracker (with set account)
\tvar getDefaultGATracker = function getDefaultGATracker() {
\t\tvar tracker = _gat._getTrackerByName();
\t\tif (tracker._getAccount() !== 'UA-XXXXX-X') {
\t\t\treturn tracker;
\t\t}

\t\treturn undefined;
\t};

\t// analytics.js method for getting default tracker
\tvar getDefaultAnalyticsTracker = function getDefaultAnalyticsTracker() {
\t\treturn ga.getByName('t0');
\t};

\tPlugin = {
\t\tinitialize: function initialize() {
\t\t\tWDN.log(\"WDN site analytics loaded for \" + thisURL);

\t\t\tvar version_dep = WDN.getDepVersion(),
\t\t\t    gaDim = 'dimension',
\t\t\t    domReady = function domReady() {
\t\t\t\tvar version_html = WDN.getHTMLVersion(),
\t\t\t\t    affiliation = idm.getPrimaryAffiliation();

\t\t\t\tif (affiliation) {
\t\t\t\t\tWDN.log(\"Tracking primary affiliation: \" + affiliation);
\t\t\t\t\tga(gaWdn + 'set', gaDim + 1, affiliation);
\t\t\t\t}

\t\t\t\tga(gaWdn + 'set', gaDim + 2, version_html);

\t\t\t\tPlugin.callTrackPageview();

\t\t\t\t\$(bindLinks);
\t\t\t};

\t\t\tga('create', wdnProp, {
\t\t\t\tname: gaWdnName,
\t\t\t\tcookieDomain: unlDomain,
\t\t\t\tallowLinker: true
\t\t\t});
\t\t\tga(gaWdn + 'require', 'linkid', 'linkid.js');
\t\t\tga(gaWdn + 'set', gaDim + 3, version_dep);

\t\t\tif (!initd) {
\t\t\t\tidm.initialize(function () {
\t\t\t\t\t\$(domReady);
\t\t\t\t});
\t\t\t}

\t\t\tinitd = true;
\t\t},

\t\tcallTrackPageview: function callTrackPageview(thePage, trackInWDNAccount) {
\t\t\tvar action = 'pageview',
\t\t\t    method = 'send',
\t\t\t    legacyMethod = '_trackPageview';

\t\t\tif (!thePage) {
\t\t\t\tga(gaWdn + method, action);
\t\t\t\treturn;
\t\t\t}

\t\t\tif (trackInWDNAccount !== false) {
\t\t\t\ttrackInWDNAccount = true;
\t\t\t}

\t\t\t// First, track in the wdn analytics
\t\t\tif (trackInWDNAccount) {
\t\t\t\tga(gaWdn + method, action, thePage);
\t\t\t}

\t\t\t// Second, track in local site analytics
\t\t\ttry {
\t\t\t\t_gaq.push(function () {
\t\t\t\t\tvar tracker = getDefaultGATracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[legacyMethod](thePage);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tga(function () {
\t\t\t\t\tvar tracker = getDefaultAnalyticsTracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[method](action, thePage);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tWDN.log(\"Pageview tracking for local site didn't work.\");
\t\t\t}
\t\t},

\t\tcallTrackEvent: function callTrackEvent(category, evtaction, label, value, noninteraction) {
\t\t\tvar action = 'event',
\t\t\t    method = 'send',
\t\t\t    legacyMethod = '_trackEvent',
\t\t\t    evtOpt;

\t\t\tif (noninteraction !== true) {
\t\t\t\tnoninteraction = false;
\t\t\t}

\t\t\tevtOpt = {
\t\t\t\teventCategory: category,
\t\t\t\teventAction: evtaction,
\t\t\t\teventLabel: label,
\t\t\t\teventValue: value,
\t\t\t\tnonInteraction: noninteraction
\t\t\t};

\t\t\tga(gaWdn + method, action, evtOpt);

\t\t\ttry {
\t\t\t\t_gaq.push(function () {
\t\t\t\t\tvar tracker = getDefaultGATracker(),
\t\t\t\t\t    legacyValue = value;
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\tif (typeof value !== \"undefined\") {
\t\t\t\t\t\t\tlegacyValue = Math.floor(value);
\t\t\t\t\t\t}

\t\t\t\t\t\ttracker[legacyMethod](category, evtaction, label, legacyValue, noninteraction);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tga(function () {
\t\t\t\t\tvar tracker = getDefaultAnalyticsTracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[method](action, evtOpt);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tWDN.log(\"Event tracking for local site didn't work.\");
\t\t\t}
\t\t},

\t\tcallTrackTiming: function callTrackTiming(category, variable, value, label, sampleRate) {
\t\t\tvar action = 'timing',
\t\t\t    method = 'send',
\t\t\t    legacyMethod = '_trackTiming';

\t\t\tga(gaWdn + method, action, category, variable, value, label);

\t\t\ttry {
\t\t\t\t_gaq.push(function () {
\t\t\t\t\tvar tracker = getDefaultGATracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[legacyMethod](category, variable, value, label, sampleRate);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tga(function () {
\t\t\t\t\tvar tracker = getDefaultAnalyticsTracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[method](action, category, variable, value, label);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tWDN.log(\"Timing tracking for local site didn't work.\");
\t\t\t}
\t\t},

\t\trecordMediaHubEvents: function recordMediaHubEvents() {
\t\t\t\$(window).on('message', function (e) {
\t\t\t\tvar originalEvent = e.originalEvent;

\t\t\t\tif (mediaHubOrigin != originalEvent.origin) {
\t\t\t\t\t//Verify the origin
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif ('ga_event' != originalEvent.data.message_type) {
\t\t\t\t\t//not a ga event (maybe different event types in future?)
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tPlugin.callTrackEvent('media', originalEvent.data.event, originalEvent.data.media_title);
\t\t\t});
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
        return "wdn/templates_5.2/js/analytics.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

/* global define: false */

define(['wdn', 'idm', 'jquery'], function (WDN, idm, \$) {
\t\"use strict\";

\tvar wdnProp = 'UA-3203435-1',
\t    unlDomain = '.unl.edu',
\t    Plugin,
\t    thisURL = String(window.location),
\t    initd = false,
\t    gaWdnName = 'wdn',
\t    gaWdn = gaWdnName + '.',
\t    mediaHubOrigin = 'https://mediahub.unl.edu';

\tvar bindLinks = function bindLinks() {
\t\tWDN.log('Begin binding links for analytics');
\t\t//get the links in the navigation and maincontent
\t\tvar navLinks = \$('a', '#dcf-navigation'),
\t\t    mainLinks = \$('a', '#dcf-main'),
\t\t    evaluateLinks,
\t\t    filetypes = /\\.(zip|exe|pdf|doc*|xls*|ppt*|mp3|m4v|mov|mp4)\$/i;

\t\tevaluateLinks = function evaluateLinks() {
\t\t\tvar link = \$(this);
\t\t\tvar gahref = link.attr(\"href\");
\t\t\tif (!gahref) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif (gahref.match(/^https?\\:/i) && !gahref.match(document.domain)) {
\t\t\t\tlink.click(function () {
\t\t\t\t\tPlugin.callTrackEvent('Outgoing Link', gahref, thisURL);
\t\t\t\t\tPlugin.callTrackPageview(gahref, false);
\t\t\t\t});
\t\t\t} else if (gahref.match(/^mailto\\:/i)) {
\t\t\t\tvar mailLink = gahref.replace(/^mailto\\:/i, '');
\t\t\t\tlink.click(function () {
\t\t\t\t\tPlugin.callTrackEvent('Email', mailLink, thisURL);
\t\t\t\t});
\t\t\t} else if (gahref.match(filetypes)) {
\t\t\t\tlink.click(function () {
\t\t\t\t\tPlugin.callTrackEvent('File Download', gahref, thisURL);
\t\t\t\t\tPlugin.callTrackPageview(gahref);
\t\t\t\t});
\t\t\t}
\t\t};

\t\t//loop through all the links and pass them to type evaluation
\t\tnavLinks.each(evaluateLinks);
\t\tmainLinks.each(evaluateLinks);
\t};

\tvar bindBreadcrumbs = function bindBreadcrumbs() {
\t\t\$('#dcf-breadcrumbs a').one('click', function () {
\t\t\tPlugin.callTrackEvent('Breadcrumbs', 'Click', thisURL);
\t\t});
\t};

\t// ga.js method for getting default tracker (with set account)
\tvar getDefaultGATracker = function getDefaultGATracker() {
\t\tvar tracker = _gat._getTrackerByName();
\t\tif (tracker._getAccount() !== 'UA-XXXXX-X') {
\t\t\treturn tracker;
\t\t}

\t\treturn undefined;
\t};

\t// analytics.js method for getting default tracker
\tvar getDefaultAnalyticsTracker = function getDefaultAnalyticsTracker() {
\t\treturn ga.getByName('t0');
\t};

\tPlugin = {
\t\tinitialize: function initialize() {
\t\t\tWDN.log(\"WDN site analytics loaded for \" + thisURL);

\t\t\tvar version_dep = WDN.getDepVersion(),
\t\t\t    gaDim = 'dimension',
\t\t\t    domReady = function domReady() {
\t\t\t\tvar version_html = WDN.getHTMLVersion(),
\t\t\t\t    affiliation = idm.getPrimaryAffiliation();

\t\t\t\tif (affiliation) {
\t\t\t\t\tWDN.log(\"Tracking primary affiliation: \" + affiliation);
\t\t\t\t\tga(gaWdn + 'set', gaDim + 1, affiliation);
\t\t\t\t}

\t\t\t\tga(gaWdn + 'set', gaDim + 2, version_html);

\t\t\t\tPlugin.callTrackPageview();

\t\t\t\t\$(bindLinks);
\t\t\t};

\t\t\tga('create', wdnProp, {
\t\t\t\tname: gaWdnName,
\t\t\t\tcookieDomain: unlDomain,
\t\t\t\tallowLinker: true
\t\t\t});
\t\t\tga(gaWdn + 'require', 'linkid', 'linkid.js');
\t\t\tga(gaWdn + 'set', gaDim + 3, version_dep);

\t\t\tif (!initd) {
\t\t\t\tidm.initialize(function () {
\t\t\t\t\t\$(domReady);
\t\t\t\t});
\t\t\t}

\t\t\tinitd = true;
\t\t},

\t\tcallTrackPageview: function callTrackPageview(thePage, trackInWDNAccount) {
\t\t\tvar action = 'pageview',
\t\t\t    method = 'send',
\t\t\t    legacyMethod = '_trackPageview';

\t\t\tif (!thePage) {
\t\t\t\tga(gaWdn + method, action);
\t\t\t\treturn;
\t\t\t}

\t\t\tif (trackInWDNAccount !== false) {
\t\t\t\ttrackInWDNAccount = true;
\t\t\t}

\t\t\t// First, track in the wdn analytics
\t\t\tif (trackInWDNAccount) {
\t\t\t\tga(gaWdn + method, action, thePage);
\t\t\t}

\t\t\t// Second, track in local site analytics
\t\t\ttry {
\t\t\t\t_gaq.push(function () {
\t\t\t\t\tvar tracker = getDefaultGATracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[legacyMethod](thePage);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tga(function () {
\t\t\t\t\tvar tracker = getDefaultAnalyticsTracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[method](action, thePage);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tWDN.log(\"Pageview tracking for local site didn't work.\");
\t\t\t}
\t\t},

\t\tcallTrackEvent: function callTrackEvent(category, evtaction, label, value, noninteraction) {
\t\t\tvar action = 'event',
\t\t\t    method = 'send',
\t\t\t    legacyMethod = '_trackEvent',
\t\t\t    evtOpt;

\t\t\tif (noninteraction !== true) {
\t\t\t\tnoninteraction = false;
\t\t\t}

\t\t\tevtOpt = {
\t\t\t\teventCategory: category,
\t\t\t\teventAction: evtaction,
\t\t\t\teventLabel: label,
\t\t\t\teventValue: value,
\t\t\t\tnonInteraction: noninteraction
\t\t\t};

\t\t\tga(gaWdn + method, action, evtOpt);

\t\t\ttry {
\t\t\t\t_gaq.push(function () {
\t\t\t\t\tvar tracker = getDefaultGATracker(),
\t\t\t\t\t    legacyValue = value;
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\tif (typeof value !== \"undefined\") {
\t\t\t\t\t\t\tlegacyValue = Math.floor(value);
\t\t\t\t\t\t}

\t\t\t\t\t\ttracker[legacyMethod](category, evtaction, label, legacyValue, noninteraction);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tga(function () {
\t\t\t\t\tvar tracker = getDefaultAnalyticsTracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[method](action, evtOpt);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tWDN.log(\"Event tracking for local site didn't work.\");
\t\t\t}
\t\t},

\t\tcallTrackTiming: function callTrackTiming(category, variable, value, label, sampleRate) {
\t\t\tvar action = 'timing',
\t\t\t    method = 'send',
\t\t\t    legacyMethod = '_trackTiming';

\t\t\tga(gaWdn + method, action, category, variable, value, label);

\t\t\ttry {
\t\t\t\t_gaq.push(function () {
\t\t\t\t\tvar tracker = getDefaultGATracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[legacyMethod](category, variable, value, label, sampleRate);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tga(function () {
\t\t\t\t\tvar tracker = getDefaultAnalyticsTracker();
\t\t\t\t\tif (tracker) {
\t\t\t\t\t\ttracker[method](action, category, variable, value, label);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tWDN.log(\"Timing tracking for local site didn't work.\");
\t\t\t}
\t\t},

\t\trecordMediaHubEvents: function recordMediaHubEvents() {
\t\t\t\$(window).on('message', function (e) {
\t\t\t\tvar originalEvent = e.originalEvent;

\t\t\t\tif (mediaHubOrigin != originalEvent.origin) {
\t\t\t\t\t//Verify the origin
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif ('ga_event' != originalEvent.data.message_type) {
\t\t\t\t\t//not a ga event (maybe different event types in future?)
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tPlugin.callTrackEvent('media', originalEvent.data.event, originalEvent.data.media_title);
\t\t\t});
\t\t}
\t};

\treturn Plugin;
});
", "wdn/templates_5.2/js/analytics.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/analytics.js");
    }
}
