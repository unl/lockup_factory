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

/* wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.zrssfeed.js.src.js */
class __TwigTemplate_3f20253360f750fd99e0d22822914b7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.zrssfeed.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.zrssfeed.js.src.js"));

        // line 1
        echo "/**
 * (c) Copyright 2010-2013, Zazar Ltd
 * Copyright (C) 2007 Jean-François Hovinne - http://www.hovinne.com/
 *
 * jQuery plugin for display of RSS/Atom feeds
 * Based on original plugin jGFeed by jQuery HowTo.
 * Filesize function by Cary Dunn.
 * jFeed by Jean-François Hovinne
 *
 * Licensed under the MIT
 **/
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
}(function(\$){

\t\$.fn.rssfeed = function(url, options, fn) {
\t\t// Set plugin defaults
\t\tvar defaults = {
\t\t\tlimit: 10,
\t\t\theader: true,
\t\t\ttitletag: 'h4',
\t\t\tdate: true,
\t\t\tdateformat: 'datetime',
\t\t\tcontent: true,
\t\t\tsnippet: true,
\t\t\tmedia: true,
\t\t\tshowerror: true,
\t\t\terrormsg: '',
\t\t\tlinktarget: '_self',
\t\t\tlinkredirect: '',
\t\t\tlinkcontent: false,
\t\t\tsort: '',
\t\t\tsortasc: true,
\t\t};
\t\toptions = \$.extend(defaults, options);

\t\t// Functions
\t\treturn this.each(function(i, e) {
\t\t\tvar \$e = \$(e);

\t\t\t// Add feed class to user div
\t\t\tif (!\$e.hasClass('rssFeed')) \$e.addClass('rssFeed');

\t\t\t// Check for valid url
\t\t\tif(!url) return false;

\t\t\t// Send request
\t\t\t\$.ajax(url, {
\t\t\t\terror: function() {
\t\t\t\t\t// Handle error if required
\t\t\t\t\tif (options.showerror) {
\t\t\t\t\t\tvar msg;
\t\t\t\t\t\tif (options.errormsg !== '') {
\t\t\t\t\t\t\tmsg = options.errormsg;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tmsg = 'Could not load feed.';
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(e).html('<div class=\"rssError\"><p>'+ msg +'</p></div>');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tsuccess: function(data){
\t\t\t\t\t_process(e, data, options);

\t\t\t\t\t// Optional user callback function
\t\t\t\t\tif (\$.isFunction(fn)) fn(\$e);
\t\t\t\t}
\t\t\t});
\t\t});
\t};

\tfunction extend(target, source) {
\t\tObject.getOwnPropertyNames(source).forEach(function(propName) {
\t\t\tObject.defineProperty(target, propName, Object.getOwnPropertyDescriptor(source, propName));
\t\t});
\t\treturn target;
\t}

\tfunction JFeed(xml) {
\t\tthis.parse(xml);
\t}

\tJFeed.prototype = {
\t\telement: null,
\t\ttype: '',
\t\tversion: '',
\t\ttitle: '',
\t\tlink: '',
\t\tdescription: '',
\t\tauthor:  '',
\t\tlanguage: '',
\t\tupdated: '',
\t\tentries: [],
\t\tparse: function(xml) {
\t\t\tthis.element = xml;
\t\t\tthis.entries = [];
\t\t}
\t};

\tJFeed.factory = function(xml) {

\t\tif (\$('channel', xml).length) {
\t\t\treturn new JRss(xml);
\t\t} else if (\$('feed', xml).length) {
\t\t\treturn new JAtom(xml);
\t\t}

\t\treturn null;
\t};

\tfunction JFeedItem(feed, element) {
\t\tthis.feed = feed;
\t\tthis.parse(element);
\t}

\tJFeedItem.prototype = {
\t\telement: null,
\t\tfeed: null,
\t\ttitle: '',
\t\tlink: '',
\t\tcontent: '',
\t\tget description() {
\t\t\treturn this.content;
\t\t},
\t\tget contentSnippet() {
\t\t\treturn _generateContentSnippet(this.content);
\t\t},
\t\tpublishedDate: '',
\t\tget updated() {
\t\t\treturn this.publishedDate;
\t\t},
\t\tid: '',
\t\tmedia: [],
\t\tparse: function(element) {
\t\t\tthis.element = element;
\t\t\tthis.media = [];
\t\t}
\t};

\tfunction JAtomFeedItem(feed, element) {
\t\tJFeedItem.call(this, feed, element);
\t}
\tJAtomFeedItem.prototype = {
\t\tget title() {
\t\t\treturn \$('title', this.element).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.element).eq(0).attr('href');
\t\t},
\t\tget content() {
\t\t\treturn \$('summary', this.element).eq(0).text() || \$('content', this.element).eq(0).text();
\t\t},
\t\tget publishedDate() {
\t\t\treturn \$('published', this.element).eq(0).text();
\t\t},
\t\tget updated() {
\t\t\treturn \$('updated', this.element).eq(0).text() || this.published;
\t\t},
\t\tget id() {
\t\t\treturn \$('id', this.element).eq(0).text();
\t\t},
\t\tparse: function(element) {
\t\t\tvar self = this;
\t\t\tJFeedItem.prototype.parse.call(this, element);
\t\t\t\$('link[rel=enclosure]', element).each(function() {
\t\t\t\tself.media.push(new JAtomMediaItem(this));
\t\t\t});
\t\t}
\t};
\tJAtomFeedItem.prototype = extend(Object.create(JFeedItem.prototype), JAtomFeedItem.prototype);

\tfunction JRssFeedItem(feed, element) {
\t\tJFeedItem.call(this, feed, element);
\t}
\tJRssFeedItem.prototype = {
\t\tget title() {
\t\t\treturn \$('title', this.element).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.element).eq(0).text();
\t\t},
\t\tget content() {
\t\t\treturn \$('description', this.element).eq(0).text();
\t\t},
\t\tget publishedDate() {
\t\t\treturn \$('pubDate', this.element).eq(0).text();
\t\t},
\t\tget id() {
\t\t\treturn \$('guid', this.element).eq(0).text();
\t\t},
\t\tparse: function(element) {
\t\t\tvar self = this;
\t\t\tJFeedItem.prototype.parse.call(this, element);
\t\t\t\$('enclosure', element).each(function() {
\t\t\t\tself.media.push(new JRssMediaItem(this));
\t\t\t});
\t\t}
\t};
\tJRssFeedItem.prototype = extend(Object.create(JFeedItem.prototype), JRssFeedItem.prototype);

\tfunction JMediaItem(xml) {
\t\tthis.element = xml;
\t}
\tJMediaItem.prototype = {
\t\telement: null,
\t\tget href() {
\t\t\treturn \$(this.element).attr('url');
\t\t},
\t\tget type() {
\t\t\treturn \$(this.element).attr('type');
\t\t},
\t\tget length() {
\t\t\treturn \$(this.element).attr('length');
\t\t}
\t};

\tfunction JAtomMediaItem(xml) {
\t\tJMediaItem.call(this, xml);
\t}
\tJAtomMediaItem.prototype = {
\t\tget href() {
\t\t\treturn \$(this.element).attr('href');
\t\t}
\t};
\tJAtomMediaItem.prototype = extend(Object.create(JMediaItem.prototype), JAtomMediaItem.prototype);

\tfunction JRssMediaItem(xml) {
\t\tJMediaItem.call(this, xml);
\t}
\tJRssMediaItem.prototype = {};
\tJRssMediaItem.prototype = extend(Object.create(JMediaItem.prototype), JRssMediaItem.prototype);


\tfunction JAtom(xml) {
\t\tthis.type = 'atom';
\t\tJFeed.call(this, xml);
\t}

\tJAtom.prototype = {
\t\tget channel() {
\t\t\treturn \$('feed', this.element).eq(0);
\t\t},
\t\tget title() {
\t\t\treturn \$('title', this.channel).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.channel).eq(0).attr('href');
\t\t},
\t\tget description() {
\t\t\treturn \$('subtitle', this.channel).eq(0).text();
\t\t},
\t\tget language() {
\t\t\treturn this.channel.attr('xml:lang');
\t\t},
\t\tget updated() {
\t\t\treturn \$('updated', this.channel).eq(0).text();
\t\t},
\t\tget author() {
\t\t\treturn \$('name', this.channel).eq(0).text();
\t\t},
\t\tparse: function(xml) {
\t\t\tvar self = this;
\t\t\tJFeed.prototype.parse.call(this, xml);
\t\t\tthis.version = '1.0';
\t\t\t\$('entry', xml).each(function() {
\t\t\t\tself.entries.push(new JAtomFeedItem(self, this));
\t\t\t});
\t\t}
\t};
\tJAtom.prototype = extend(Object.create(JFeed.prototype), JAtom.prototype);

\tfunction JRss(xml) {
\t\tthis.type = 'rss';
\t\tJFeed.call(this, xml);
\t}

\tJRss.prototype = {
\t\tget channel() {
\t\t\treturn \$('channel', this.element).eq(0);
\t\t},
\t\tget version() {
\t\t\tvar \$rss = \$('rss', this.element);

\t\t\tif (!\$rss.length) {
\t\t\t\treturn '1.0';
\t\t\t}

\t\t\treturn \$rss.eq(0).attr('version');
\t\t},
\t\tget title() {
\t\t\treturn \$('title', this.channel).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.channel).eq(0).text();
\t\t},
\t\tget description() {
\t\t\treturn \$('description', this.channel).eq(0).text();
\t\t},
\t\tget language() {
\t\t\treturn \$('language', this.channel).eq(0).text();
\t\t},
\t\tget updated() {
\t\t\treturn \$('lastBuildDate', this.channel).eq(0).text();
\t\t},
\t\tparse: function(xml) {
\t\t\tvar self = this;
\t\t\tJFeed.prototype.parse.call(this, xml);
\t\t\t\$('item', xml).each(function() {
\t\t\t\tself.entries.push(new JRssFeedItem(self, this));
\t\t\t});
\t\t}
\t};
\tJRss.prototype = extend(Object.create(JFeed.prototype), JRss.prototype);

\tvar _generateContentSnippet = function(content) {
\t\tvar \$elem = \$('<div>').html(content);
\t\tvar text = \$elem[0].textContent;
\t\tvar nextSpacePos;

\t\tif (text.length > 120) {
\t\t\tnextSpacePos = text.indexOf(' ', 120);

\t\t\tif (nextSpacePos !== -1) {
\t\t\t\ttext = text.substring(0, nextSpacePos) + ' ...';
\t\t\t}
\t\t}

\t\treturn text;
\t};

\t// Function to create HTML result
\tvar _process = function(e, data, options) {
\t\tvar feeds = JFeed.factory(data);
\t\tif (!feeds.type) {
\t\t\treturn false;
\t\t}
\t\tvar rowArray = [];
\t\tvar rowIndex = 0;
\t\tvar html = '';
\t\tvar row = 'odd';
\t\tvar i, j;
\t\tvar content;

\t\t// Add header if required
\t\tif (options.header)
\t\t\thtml +=\t'<div class=\"rssHeader\">' +
\t\t\t\t'<a href=\"'+feeds.link+'\" title=\"'+ feeds.description +'\">'+ feeds.title +'</a>' +
\t\t\t\t'</div>';

\t\t// Add body
\t\thtml += '<div class=\"rssBody\">' +
\t\t\t'<ul>';


\t\t// Add feeds
\t\tfor (i = 0, j = feeds.entries.length; i < options.limit && i < j; i++) {
\t\t\trowIndex = i;
\t\t\trowArray[rowIndex] = [];

\t\t\t// Get individual feed
\t\t\tvar entry = feeds.entries[i];
\t\t\tvar pubDate;
\t\t\tvar sort = '';
\t\t\tvar feedLink = entry.link;

\t\t\t// Apply sort column
\t\t\tswitch (options.sort) {
\t\t\t\tcase 'title':
\t\t\t\t\tsort = entry.title;
\t\t\t\t\tbreak;
\t\t\t\tcase 'date':
\t\t\t\t\tsort = entry.publishedDate;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\trowArray[rowIndex].sort = sort;

\t\t\t// Format published date
\t\t\tif (entry.publishedDate) {
\t\t\t\tvar entryDate = new Date(entry.publishedDate);
\t\t\t\tpubDate = entryDate.toLocaleDateString() + ' ' + entryDate.toLocaleTimeString();

\t\t\t\tswitch (options.dateformat) {
\t\t\t\t\tcase 'datetime':
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'date':
\t\t\t\t\t\tpubDate = entryDate.toLocaleDateString();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'time':
\t\t\t\t\t\tpubDate = entryDate.toLocaleTimeString();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'timeline':
\t\t\t\t\t\tpubDate = _getLapsedTime(entryDate);
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tpubDate = _formatDate(entryDate,options.dateformat);
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}

\t\t\t// Add feed row
\t\t\tif (options.linkredirect) feedLink = encodeURIComponent(feedLink);
\t\t\trowArray[rowIndex].html = '<'+ options.titletag +'><a href=\"'+ options.linkredirect + feedLink +'\" title=\"View this feed at '+ feeds.title +'\">'+ entry.title +'</a></'+ options.titletag +'>';

\t\t\tif (options.date && pubDate) rowArray[rowIndex].html += '<div>'+ pubDate +'</div>';
\t\t\tif (options.content) {
\t\t\t\t// Use feed snippet if available and optioned
\t\t\t\tif (options.snippet && entry.contentSnippet) {
\t\t\t\t\tcontent = entry.contentSnippet;
\t\t\t\t} else {
\t\t\t\t\tcontent = entry.content;
\t\t\t\t}

\t\t\t\tif (options.linkcontent) {
\t\t\t\t\tcontent = '<a href=\"'+ options.linkredirect + feedLink +'\" title=\"View this feed at '+ feeds.title +'\">'+ content +'</a>';
\t\t\t\t}

\t\t\t\trowArray[rowIndex].html += '<p>'+ content +'</p>';
\t\t\t}

\t\t\t// Add any media
\t\t\tif (options.media && entry.media.length) {
\t\t\t\trowArray[rowIndex].html += '<div class=\"rssMedia\"><div>Media files</div><ul>';

\t\t\t\tfor (var m = 0, k = entry.media.length; m < k; m++) {
\t\t\t\t\tvar xmlUrl = entry.media[m].href;
\t\t\t\t\tvar xmlType = entry.media[m].type;
\t\t\t\t\tvar xmlSize = entry.media[m].length;
\t\t\t\t\trowArray[rowIndex].html += '<li><a href=\"'+ xmlUrl +'\" title=\"Download this media\">'+ xmlUrl.split('/').pop() +'</a> ('+ xmlType +', '+ _formatFilesize(xmlSize) +')</li>';
\t\t\t\t}
\t\t\t\trowArray[rowIndex].html += '</ul></div>';
\t\t\t}
\t\t}

\t\t// Sort if required
\t\tif (options.sort) {
\t\t\trowArray.sort(function(a,b) {
\t\t\t\tvar c;
\t\t\t\tvar d;

\t\t\t\t// Apply sort direction
\t\t\t\tif (options.sortasc) {
\t\t\t\t\tc = a.sort;
\t\t\t\t\td = b.sort;
\t\t\t\t} else {
\t\t\t\t\tc = b.sort;
\t\t\t\t\td = a.sort;
\t\t\t\t}

\t\t\t\tif (options.sort == 'date') {
\t\t\t\t\treturn new Date(c) - new Date(d);
\t\t\t\t} else {
\t\t\t\t\tc = c.toLowerCase();
\t\t\t\t\td = d.toLowerCase();
\t\t\t\t\treturn (c < d) ? -1 : (c > d) ? 1 : 0;
\t\t\t\t}
\t\t\t});
\t\t}

\t\t// Add rows to output
\t\t\$.each(rowArray, function(e) {

\t\t\thtml += '<li class=\"rssRow '+row+'\">' + rowArray[e].html + '</li>';

\t\t\t// Alternate row classes
\t\t\tif (row == 'odd') {
\t\t\t\trow = 'even';
\t\t\t} else {
\t\t\t\trow = 'odd';
\t\t\t}
\t\t});

\t\thtml += '</ul>' +
\t\t\t'</div>';

\t\t\$(e).html(html);

\t\t// Apply target to links
\t\t\$('a',e).attr('target',options.linktarget);
\t};

\tvar _formatFilesize = function(bytes) {
\t\tbytes = parseFloat(bytes);
\t\tif (!bytes) {
\t\t\treturn '';
\t\t}
\t\tvar s = ['bytes', 'kb', 'MB', 'GB', 'TB', 'PB'];
\t\tvar e = Math.floor(Math.log(bytes)/Math.log(1024));
\t\treturn (bytes/Math.pow(1024, Math.floor(e))).toFixed(2)+\" \"+s[e];
\t};

\tvar _formatDate = function(date,mask) {

\t\t// Convert to date and set return to the mask
\t\tvar fmtDate = new Date(date);
\t\tdate = mask;

\t\t// Replace mask tokens
\t\tdate = date.replace('dd', _formatDigit(fmtDate.getDate()));
\t\tdate = date.replace('MMMM', _getMonthName(fmtDate.getMonth()));
\t\tdate = date.replace('MM', _formatDigit(fmtDate.getMonth()+1));
\t\tdate = date.replace('yyyy',fmtDate.getFullYear());
\t\tdate = date.replace('hh', _formatDigit(fmtDate.getHours()));
\t\tdate = date.replace('mm', _formatDigit(fmtDate.getMinutes()));
\t\tdate = date.replace('ss', _formatDigit(fmtDate.getSeconds()));

\t\treturn date;
\t};

\tvar _formatDigit = function(digit) {
\t\tdigit += '';
\t\tif (digit.length < 2) digit = '0' + digit;
\t\treturn digit;
\t};

\tvar _getMonthName = function(month) {
\t\tvar name = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
\t\treturn name[month];
\t};

\tvar _getLapsedTime = function(date) {

\t\t// Get current date and format date parameter
\t\tvar todayDate = new Date();
\t\tvar pastDate = new Date(date);

\t\t// Get lasped time in seconds
\t\tvar lapsedTime = Math.round((todayDate.getTime() - pastDate.getTime())/1000);
\t\tvar t, u;

\t\t// Return lasped time in seconds, minutes, hours, days and weeks
\t\tif (lapsedTime < 60) {
\t\t\treturn '< 1 min';
\t\t} else if (lapsedTime < (60*60)) {
\t\t\tt = Math.round(lapsedTime / 60) - 1;
\t\t\tu = 'min';
\t\t} else if (lapsedTime < (24*60*60)) {
\t\t\tt = Math.round(lapsedTime / 3600) - 1;
\t\t\tu = 'hour';
\t\t} else if (lapsedTime < (7*24*60*60)) {
\t\t\tt = Math.round(lapsedTime / 86400) - 1;
\t\t\tu = 'day';
\t\t} else {
\t\t\tt = Math.round(lapsedTime / 604800) - 1;
\t\t\tu = 'week';
\t\t}

\t\t// Check for plural units
\t\tif (t > 1) u += 's';
\t\treturn t + ' ' + u;
\t};

}));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.zrssfeed.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * (c) Copyright 2010-2013, Zazar Ltd
 * Copyright (C) 2007 Jean-François Hovinne - http://www.hovinne.com/
 *
 * jQuery plugin for display of RSS/Atom feeds
 * Based on original plugin jGFeed by jQuery HowTo.
 * Filesize function by Cary Dunn.
 * jFeed by Jean-François Hovinne
 *
 * Licensed under the MIT
 **/
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
}(function(\$){

\t\$.fn.rssfeed = function(url, options, fn) {
\t\t// Set plugin defaults
\t\tvar defaults = {
\t\t\tlimit: 10,
\t\t\theader: true,
\t\t\ttitletag: 'h4',
\t\t\tdate: true,
\t\t\tdateformat: 'datetime',
\t\t\tcontent: true,
\t\t\tsnippet: true,
\t\t\tmedia: true,
\t\t\tshowerror: true,
\t\t\terrormsg: '',
\t\t\tlinktarget: '_self',
\t\t\tlinkredirect: '',
\t\t\tlinkcontent: false,
\t\t\tsort: '',
\t\t\tsortasc: true,
\t\t};
\t\toptions = \$.extend(defaults, options);

\t\t// Functions
\t\treturn this.each(function(i, e) {
\t\t\tvar \$e = \$(e);

\t\t\t// Add feed class to user div
\t\t\tif (!\$e.hasClass('rssFeed')) \$e.addClass('rssFeed');

\t\t\t// Check for valid url
\t\t\tif(!url) return false;

\t\t\t// Send request
\t\t\t\$.ajax(url, {
\t\t\t\terror: function() {
\t\t\t\t\t// Handle error if required
\t\t\t\t\tif (options.showerror) {
\t\t\t\t\t\tvar msg;
\t\t\t\t\t\tif (options.errormsg !== '') {
\t\t\t\t\t\t\tmsg = options.errormsg;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tmsg = 'Could not load feed.';
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(e).html('<div class=\"rssError\"><p>'+ msg +'</p></div>');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tsuccess: function(data){
\t\t\t\t\t_process(e, data, options);

\t\t\t\t\t// Optional user callback function
\t\t\t\t\tif (\$.isFunction(fn)) fn(\$e);
\t\t\t\t}
\t\t\t});
\t\t});
\t};

\tfunction extend(target, source) {
\t\tObject.getOwnPropertyNames(source).forEach(function(propName) {
\t\t\tObject.defineProperty(target, propName, Object.getOwnPropertyDescriptor(source, propName));
\t\t});
\t\treturn target;
\t}

\tfunction JFeed(xml) {
\t\tthis.parse(xml);
\t}

\tJFeed.prototype = {
\t\telement: null,
\t\ttype: '',
\t\tversion: '',
\t\ttitle: '',
\t\tlink: '',
\t\tdescription: '',
\t\tauthor:  '',
\t\tlanguage: '',
\t\tupdated: '',
\t\tentries: [],
\t\tparse: function(xml) {
\t\t\tthis.element = xml;
\t\t\tthis.entries = [];
\t\t}
\t};

\tJFeed.factory = function(xml) {

\t\tif (\$('channel', xml).length) {
\t\t\treturn new JRss(xml);
\t\t} else if (\$('feed', xml).length) {
\t\t\treturn new JAtom(xml);
\t\t}

\t\treturn null;
\t};

\tfunction JFeedItem(feed, element) {
\t\tthis.feed = feed;
\t\tthis.parse(element);
\t}

\tJFeedItem.prototype = {
\t\telement: null,
\t\tfeed: null,
\t\ttitle: '',
\t\tlink: '',
\t\tcontent: '',
\t\tget description() {
\t\t\treturn this.content;
\t\t},
\t\tget contentSnippet() {
\t\t\treturn _generateContentSnippet(this.content);
\t\t},
\t\tpublishedDate: '',
\t\tget updated() {
\t\t\treturn this.publishedDate;
\t\t},
\t\tid: '',
\t\tmedia: [],
\t\tparse: function(element) {
\t\t\tthis.element = element;
\t\t\tthis.media = [];
\t\t}
\t};

\tfunction JAtomFeedItem(feed, element) {
\t\tJFeedItem.call(this, feed, element);
\t}
\tJAtomFeedItem.prototype = {
\t\tget title() {
\t\t\treturn \$('title', this.element).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.element).eq(0).attr('href');
\t\t},
\t\tget content() {
\t\t\treturn \$('summary', this.element).eq(0).text() || \$('content', this.element).eq(0).text();
\t\t},
\t\tget publishedDate() {
\t\t\treturn \$('published', this.element).eq(0).text();
\t\t},
\t\tget updated() {
\t\t\treturn \$('updated', this.element).eq(0).text() || this.published;
\t\t},
\t\tget id() {
\t\t\treturn \$('id', this.element).eq(0).text();
\t\t},
\t\tparse: function(element) {
\t\t\tvar self = this;
\t\t\tJFeedItem.prototype.parse.call(this, element);
\t\t\t\$('link[rel=enclosure]', element).each(function() {
\t\t\t\tself.media.push(new JAtomMediaItem(this));
\t\t\t});
\t\t}
\t};
\tJAtomFeedItem.prototype = extend(Object.create(JFeedItem.prototype), JAtomFeedItem.prototype);

\tfunction JRssFeedItem(feed, element) {
\t\tJFeedItem.call(this, feed, element);
\t}
\tJRssFeedItem.prototype = {
\t\tget title() {
\t\t\treturn \$('title', this.element).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.element).eq(0).text();
\t\t},
\t\tget content() {
\t\t\treturn \$('description', this.element).eq(0).text();
\t\t},
\t\tget publishedDate() {
\t\t\treturn \$('pubDate', this.element).eq(0).text();
\t\t},
\t\tget id() {
\t\t\treturn \$('guid', this.element).eq(0).text();
\t\t},
\t\tparse: function(element) {
\t\t\tvar self = this;
\t\t\tJFeedItem.prototype.parse.call(this, element);
\t\t\t\$('enclosure', element).each(function() {
\t\t\t\tself.media.push(new JRssMediaItem(this));
\t\t\t});
\t\t}
\t};
\tJRssFeedItem.prototype = extend(Object.create(JFeedItem.prototype), JRssFeedItem.prototype);

\tfunction JMediaItem(xml) {
\t\tthis.element = xml;
\t}
\tJMediaItem.prototype = {
\t\telement: null,
\t\tget href() {
\t\t\treturn \$(this.element).attr('url');
\t\t},
\t\tget type() {
\t\t\treturn \$(this.element).attr('type');
\t\t},
\t\tget length() {
\t\t\treturn \$(this.element).attr('length');
\t\t}
\t};

\tfunction JAtomMediaItem(xml) {
\t\tJMediaItem.call(this, xml);
\t}
\tJAtomMediaItem.prototype = {
\t\tget href() {
\t\t\treturn \$(this.element).attr('href');
\t\t}
\t};
\tJAtomMediaItem.prototype = extend(Object.create(JMediaItem.prototype), JAtomMediaItem.prototype);

\tfunction JRssMediaItem(xml) {
\t\tJMediaItem.call(this, xml);
\t}
\tJRssMediaItem.prototype = {};
\tJRssMediaItem.prototype = extend(Object.create(JMediaItem.prototype), JRssMediaItem.prototype);


\tfunction JAtom(xml) {
\t\tthis.type = 'atom';
\t\tJFeed.call(this, xml);
\t}

\tJAtom.prototype = {
\t\tget channel() {
\t\t\treturn \$('feed', this.element).eq(0);
\t\t},
\t\tget title() {
\t\t\treturn \$('title', this.channel).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.channel).eq(0).attr('href');
\t\t},
\t\tget description() {
\t\t\treturn \$('subtitle', this.channel).eq(0).text();
\t\t},
\t\tget language() {
\t\t\treturn this.channel.attr('xml:lang');
\t\t},
\t\tget updated() {
\t\t\treturn \$('updated', this.channel).eq(0).text();
\t\t},
\t\tget author() {
\t\t\treturn \$('name', this.channel).eq(0).text();
\t\t},
\t\tparse: function(xml) {
\t\t\tvar self = this;
\t\t\tJFeed.prototype.parse.call(this, xml);
\t\t\tthis.version = '1.0';
\t\t\t\$('entry', xml).each(function() {
\t\t\t\tself.entries.push(new JAtomFeedItem(self, this));
\t\t\t});
\t\t}
\t};
\tJAtom.prototype = extend(Object.create(JFeed.prototype), JAtom.prototype);

\tfunction JRss(xml) {
\t\tthis.type = 'rss';
\t\tJFeed.call(this, xml);
\t}

\tJRss.prototype = {
\t\tget channel() {
\t\t\treturn \$('channel', this.element).eq(0);
\t\t},
\t\tget version() {
\t\t\tvar \$rss = \$('rss', this.element);

\t\t\tif (!\$rss.length) {
\t\t\t\treturn '1.0';
\t\t\t}

\t\t\treturn \$rss.eq(0).attr('version');
\t\t},
\t\tget title() {
\t\t\treturn \$('title', this.channel).eq(0).text();
\t\t},
\t\tget link() {
\t\t\treturn \$('link', this.channel).eq(0).text();
\t\t},
\t\tget description() {
\t\t\treturn \$('description', this.channel).eq(0).text();
\t\t},
\t\tget language() {
\t\t\treturn \$('language', this.channel).eq(0).text();
\t\t},
\t\tget updated() {
\t\t\treturn \$('lastBuildDate', this.channel).eq(0).text();
\t\t},
\t\tparse: function(xml) {
\t\t\tvar self = this;
\t\t\tJFeed.prototype.parse.call(this, xml);
\t\t\t\$('item', xml).each(function() {
\t\t\t\tself.entries.push(new JRssFeedItem(self, this));
\t\t\t});
\t\t}
\t};
\tJRss.prototype = extend(Object.create(JFeed.prototype), JRss.prototype);

\tvar _generateContentSnippet = function(content) {
\t\tvar \$elem = \$('<div>').html(content);
\t\tvar text = \$elem[0].textContent;
\t\tvar nextSpacePos;

\t\tif (text.length > 120) {
\t\t\tnextSpacePos = text.indexOf(' ', 120);

\t\t\tif (nextSpacePos !== -1) {
\t\t\t\ttext = text.substring(0, nextSpacePos) + ' ...';
\t\t\t}
\t\t}

\t\treturn text;
\t};

\t// Function to create HTML result
\tvar _process = function(e, data, options) {
\t\tvar feeds = JFeed.factory(data);
\t\tif (!feeds.type) {
\t\t\treturn false;
\t\t}
\t\tvar rowArray = [];
\t\tvar rowIndex = 0;
\t\tvar html = '';
\t\tvar row = 'odd';
\t\tvar i, j;
\t\tvar content;

\t\t// Add header if required
\t\tif (options.header)
\t\t\thtml +=\t'<div class=\"rssHeader\">' +
\t\t\t\t'<a href=\"'+feeds.link+'\" title=\"'+ feeds.description +'\">'+ feeds.title +'</a>' +
\t\t\t\t'</div>';

\t\t// Add body
\t\thtml += '<div class=\"rssBody\">' +
\t\t\t'<ul>';


\t\t// Add feeds
\t\tfor (i = 0, j = feeds.entries.length; i < options.limit && i < j; i++) {
\t\t\trowIndex = i;
\t\t\trowArray[rowIndex] = [];

\t\t\t// Get individual feed
\t\t\tvar entry = feeds.entries[i];
\t\t\tvar pubDate;
\t\t\tvar sort = '';
\t\t\tvar feedLink = entry.link;

\t\t\t// Apply sort column
\t\t\tswitch (options.sort) {
\t\t\t\tcase 'title':
\t\t\t\t\tsort = entry.title;
\t\t\t\t\tbreak;
\t\t\t\tcase 'date':
\t\t\t\t\tsort = entry.publishedDate;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\trowArray[rowIndex].sort = sort;

\t\t\t// Format published date
\t\t\tif (entry.publishedDate) {
\t\t\t\tvar entryDate = new Date(entry.publishedDate);
\t\t\t\tpubDate = entryDate.toLocaleDateString() + ' ' + entryDate.toLocaleTimeString();

\t\t\t\tswitch (options.dateformat) {
\t\t\t\t\tcase 'datetime':
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'date':
\t\t\t\t\t\tpubDate = entryDate.toLocaleDateString();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'time':
\t\t\t\t\t\tpubDate = entryDate.toLocaleTimeString();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'timeline':
\t\t\t\t\t\tpubDate = _getLapsedTime(entryDate);
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tpubDate = _formatDate(entryDate,options.dateformat);
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}

\t\t\t// Add feed row
\t\t\tif (options.linkredirect) feedLink = encodeURIComponent(feedLink);
\t\t\trowArray[rowIndex].html = '<'+ options.titletag +'><a href=\"'+ options.linkredirect + feedLink +'\" title=\"View this feed at '+ feeds.title +'\">'+ entry.title +'</a></'+ options.titletag +'>';

\t\t\tif (options.date && pubDate) rowArray[rowIndex].html += '<div>'+ pubDate +'</div>';
\t\t\tif (options.content) {
\t\t\t\t// Use feed snippet if available and optioned
\t\t\t\tif (options.snippet && entry.contentSnippet) {
\t\t\t\t\tcontent = entry.contentSnippet;
\t\t\t\t} else {
\t\t\t\t\tcontent = entry.content;
\t\t\t\t}

\t\t\t\tif (options.linkcontent) {
\t\t\t\t\tcontent = '<a href=\"'+ options.linkredirect + feedLink +'\" title=\"View this feed at '+ feeds.title +'\">'+ content +'</a>';
\t\t\t\t}

\t\t\t\trowArray[rowIndex].html += '<p>'+ content +'</p>';
\t\t\t}

\t\t\t// Add any media
\t\t\tif (options.media && entry.media.length) {
\t\t\t\trowArray[rowIndex].html += '<div class=\"rssMedia\"><div>Media files</div><ul>';

\t\t\t\tfor (var m = 0, k = entry.media.length; m < k; m++) {
\t\t\t\t\tvar xmlUrl = entry.media[m].href;
\t\t\t\t\tvar xmlType = entry.media[m].type;
\t\t\t\t\tvar xmlSize = entry.media[m].length;
\t\t\t\t\trowArray[rowIndex].html += '<li><a href=\"'+ xmlUrl +'\" title=\"Download this media\">'+ xmlUrl.split('/').pop() +'</a> ('+ xmlType +', '+ _formatFilesize(xmlSize) +')</li>';
\t\t\t\t}
\t\t\t\trowArray[rowIndex].html += '</ul></div>';
\t\t\t}
\t\t}

\t\t// Sort if required
\t\tif (options.sort) {
\t\t\trowArray.sort(function(a,b) {
\t\t\t\tvar c;
\t\t\t\tvar d;

\t\t\t\t// Apply sort direction
\t\t\t\tif (options.sortasc) {
\t\t\t\t\tc = a.sort;
\t\t\t\t\td = b.sort;
\t\t\t\t} else {
\t\t\t\t\tc = b.sort;
\t\t\t\t\td = a.sort;
\t\t\t\t}

\t\t\t\tif (options.sort == 'date') {
\t\t\t\t\treturn new Date(c) - new Date(d);
\t\t\t\t} else {
\t\t\t\t\tc = c.toLowerCase();
\t\t\t\t\td = d.toLowerCase();
\t\t\t\t\treturn (c < d) ? -1 : (c > d) ? 1 : 0;
\t\t\t\t}
\t\t\t});
\t\t}

\t\t// Add rows to output
\t\t\$.each(rowArray, function(e) {

\t\t\thtml += '<li class=\"rssRow '+row+'\">' + rowArray[e].html + '</li>';

\t\t\t// Alternate row classes
\t\t\tif (row == 'odd') {
\t\t\t\trow = 'even';
\t\t\t} else {
\t\t\t\trow = 'odd';
\t\t\t}
\t\t});

\t\thtml += '</ul>' +
\t\t\t'</div>';

\t\t\$(e).html(html);

\t\t// Apply target to links
\t\t\$('a',e).attr('target',options.linktarget);
\t};

\tvar _formatFilesize = function(bytes) {
\t\tbytes = parseFloat(bytes);
\t\tif (!bytes) {
\t\t\treturn '';
\t\t}
\t\tvar s = ['bytes', 'kb', 'MB', 'GB', 'TB', 'PB'];
\t\tvar e = Math.floor(Math.log(bytes)/Math.log(1024));
\t\treturn (bytes/Math.pow(1024, Math.floor(e))).toFixed(2)+\" \"+s[e];
\t};

\tvar _formatDate = function(date,mask) {

\t\t// Convert to date and set return to the mask
\t\tvar fmtDate = new Date(date);
\t\tdate = mask;

\t\t// Replace mask tokens
\t\tdate = date.replace('dd', _formatDigit(fmtDate.getDate()));
\t\tdate = date.replace('MMMM', _getMonthName(fmtDate.getMonth()));
\t\tdate = date.replace('MM', _formatDigit(fmtDate.getMonth()+1));
\t\tdate = date.replace('yyyy',fmtDate.getFullYear());
\t\tdate = date.replace('hh', _formatDigit(fmtDate.getHours()));
\t\tdate = date.replace('mm', _formatDigit(fmtDate.getMinutes()));
\t\tdate = date.replace('ss', _formatDigit(fmtDate.getSeconds()));

\t\treturn date;
\t};

\tvar _formatDigit = function(digit) {
\t\tdigit += '';
\t\tif (digit.length < 2) digit = '0' + digit;
\t\treturn digit;
\t};

\tvar _getMonthName = function(month) {
\t\tvar name = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
\t\treturn name[month];
\t};

\tvar _getLapsedTime = function(date) {

\t\t// Get current date and format date parameter
\t\tvar todayDate = new Date();
\t\tvar pastDate = new Date(date);

\t\t// Get lasped time in seconds
\t\tvar lapsedTime = Math.round((todayDate.getTime() - pastDate.getTime())/1000);
\t\tvar t, u;

\t\t// Return lasped time in seconds, minutes, hours, days and weeks
\t\tif (lapsedTime < 60) {
\t\t\treturn '< 1 min';
\t\t} else if (lapsedTime < (60*60)) {
\t\t\tt = Math.round(lapsedTime / 60) - 1;
\t\t\tu = 'min';
\t\t} else if (lapsedTime < (24*60*60)) {
\t\t\tt = Math.round(lapsedTime / 3600) - 1;
\t\t\tu = 'hour';
\t\t} else if (lapsedTime < (7*24*60*60)) {
\t\t\tt = Math.round(lapsedTime / 86400) - 1;
\t\t\tu = 'day';
\t\t} else {
\t\t\tt = Math.round(lapsedTime / 604800) - 1;
\t\t\tu = 'week';
\t\t}

\t\t// Check for plural units
\t\tif (t > 1) u += 's';
\t\treturn t + ' ' + u;
\t};

}));
", "wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.zrssfeed.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/rsswidget/jquery.zrssfeed.js.src.js");
    }
}
