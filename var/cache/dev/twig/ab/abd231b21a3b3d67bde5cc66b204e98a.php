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

/* wdn/templates_5.1/js/tabs.js */
class __TwigTemplate_9a087c9fe94981e6311bfe56f81e9999 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/tabs.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/tabs.js"));

        // line 1
        echo "'use strict';

require(['dcf-utility', 'dcf-tabs', 'css!js-css/tabs'], function (Utility, Tabs) {
\tvar tabs = document.querySelectorAll('.dcf-tabs');
\tvar unlTabs = new DCFTabs(tabs);
\tunlTabs.initialize();
});

define(['jquery', 'wdn', 'require'], function (\$, WDN, require) {
\tvar useHashChange = true,
\t    hashPlugin = 'plugins/hashchange/jquery.hashchange',
\t    tabSelector = 'ul.wdn_tabs',
\t    contentSelector = '.wdn_tabs_content',
\t    selected = 'selected',
\t    validRE = /^[a-z][\\w:\\-\\.]*\$/i,
\t    jq = function jq(id) {
\t\treturn '#' + id.replace(/(:|\\.)/g, '\\\\\$1');
\t},
\t    getHashFromLink = function getHashFromLink(link) {
\t\tvar uri = link.href.split('#');

\t\tif (!uri[1]) {
\t\t\treturn false;
\t\t}

\t\tvar currentPage = window.location.href.split('#')[0],
\t\t    base = document.getElementsByTagName('base')[0];

\t\tif (currentPage !== uri[0] && base && base.href !== uri[0]) {
\t\t\treturn false;
\t\t}

\t\treturn uri[1];
\t},
\t    getCleanHash = function getCleanHash() {
\t\treturn window.location.hash.replace('#', '');
\t},
\t    updateInterface = function updateInterface(trig) {
\t\tvar tabs = trig.closest(tabSelector),
\t\t    curr = trig.closest('li').siblings('.' + selected),
\t\t    sibs = trig.siblings(),
\t\t    parentTabs = trig.parents('li'),
\t\t    nsel;

\t\t// Remove any selected tab class
\t\t\$('li.' + selected, tabs).removeClass(selected);

\t\t// Hide any subtabs
\t\t\$('ul', tabs).hide();

\t\t// Add the selected class to the tab (and sub-tab)
\t\tparentTabs.addClass(selected);

\t\t// Show any relevant sub-tabs
\t\tif (sibs.length || parentTabs.length > 1) {
\t\t\tif (!sibs.length) {
\t\t\t\tsibs = trig.closest('ul');
\t\t\t}
\t\t\tsibs.show();
\t\t}

\t\tnsel = trig.closest('li').siblings('.' + selected);
\t\ttrig.trigger('tabchanged', [curr, nsel, tabs]);
\t},
\t    firstTrig;

\tvar Plugin = {
\t\tinitialize: function initialize() {
\t\t\t\$(function () {
\t\t\t\tif (WDN.getPluginParam('tabs', 'useHashChange') === false) {
\t\t\t\t\tuseHashChange = false;
\t\t\t\t}

\t\t\t\t// Set up the event for when a tab is clicked
\t\t\t\tvar hashFromTabClick = false,
\t\t\t\t    \$tabsWithSwitch = \$(tabSelector).not('.disableSwitching');

\t\t\t\t\$tabsWithSwitch.on('click', 'a', function () {
\t\t\t\t\t//do something when a tab is clicked
\t\t\t\t\tvar trig = \$(this),
\t\t\t\t\t    hash = getHashFromLink(this);

\t\t\t\t\tif (!hash) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}

\t\t\t\t\tupdateInterface(trig);

\t\t\t\t\tif (!useHashChange) {
\t\t\t\t\t\tPlugin.displayFromHash(hash);
\t\t\t\t\t} else {
\t\t\t\t\t\thashFromTabClick = true;
\t\t\t\t\t\tif (getCleanHash() != hash) {
\t\t\t\t\t\t\twindow.location.hash = hash;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t// If we have some tabs setup the hash stuff
\t\t\t\tif (\$tabsWithSwitch.length) {
\t\t\t\t\tvar isValidTabHash = function isValidTabHash(hash) {
\t\t\t\t\t\treturn validRE.test(hash);
\t\t\t\t\t},
\t\t\t\t\t    isTabExists = function isTabExists(hash) {
\t\t\t\t\t\treturn isValidTabHash(hash) && \$(contentSelector + ' ' + jq(hash)).length;
\t\t\t\t\t},
\t\t\t\t\t    setupFirstHash = function setupFirstHash(hash) {
\t\t\t\t\t\tvar ignoreTabs = \$();
\t\t\t\t\t\tif (hash) {
\t\t\t\t\t\t\tignoreTabs = \$(jq(hash)).closest(contentSelector).prev(tabSelector);
\t\t\t\t\t\t}

\t\t\t\t\t\tvar tabs = \$tabsWithSwitch.not(ignoreTabs);

\t\t\t\t\t\tif (!firstTrig) {
\t\t\t\t\t\t\tfirstTrig = [];
\t\t\t\t\t\t\ttabs.each(function () {
\t\t\t\t\t\t\t\tvar selPrefix = 'li.selected';

\t\t\t\t\t\t\t\tif (!\$(selPrefix, this).length) {
\t\t\t\t\t\t\t\t\tselPrefix = '> li';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tfirstTrig.push(\$(selPrefix + ':first a:first', this)[0]);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tfirstTrig = \$(firstTrig);
\t\t\t\t\t\t}

\t\t\t\t\t\tfirstTrig.each(function () {
\t\t\t\t\t\t\tvar innerTrig = \$(this);
\t\t\t\t\t\t\tvar hash = getHashFromLink(this);
\t\t\t\t\t\t\tif (!hash || !isValidTabHash(hash)) {
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tupdateInterface(innerTrig);
\t\t\t\t\t\t\tPlugin.displayFromHash(hash);
\t\t\t\t\t\t});
\t\t\t\t\t};

\t\t\t\t\tif (useHashChange) {
\t\t\t\t\t\tvar setupHashChange = function setupHashChange() {
\t\t\t\t\t\t\tvar firstRun = true;
\t\t\t\t\t\t\t\$(window).off('.wdn_tabs').on('hashchange.wdn_tabs', function () {
\t\t\t\t\t\t\t\tvar hash = getCleanHash();
\t\t\t\t\t\t\t\tif (hash && !isValidTabHash(hash)) {
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tif (isTabExists(hash)) {
\t\t\t\t\t\t\t\t\tPlugin.displayFromHash(hash, firstRun || !hashFromTabClick);

\t\t\t\t\t\t\t\t\tif (firstRun) {
\t\t\t\t\t\t\t\t\t\tsetupFirstHash(hash);
\t\t\t\t\t\t\t\t\t\tfirstRun = false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (hashFromTabClick) {
\t\t\t\t\t\t\t\t\t\thashFromTabClick = false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\treturn false; //consume this hash event
\t\t\t\t\t\t\t\t} else if (firstRun || hash === '') {
\t\t\t\t\t\t\t\t\tsetupFirstHash();
\t\t\t\t\t\t\t\t\tfirstRun = false;
\t\t\t\t\t\t\t\t\treturn true; //we simulated a hash event (allow others to consume);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(window).hashchange();
\t\t\t\t\t\t};

\t\t\t\t\t\tif (!\$.fn.hashchange) {
\t\t\t\t\t\t\trequire([hashPlugin], setupHashChange);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tsetupHashChange();
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t// No hashchange listener, so simulate first run
\t\t\t\t\t\tvar hash = getCleanHash();
\t\t\t\t\t\tif (isTabExists(hash)) {
\t\t\t\t\t\t\tPlugin.displayFromHash(hash, true);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\thash = '';
\t\t\t\t\t\t}
\t\t\t\t\t\tsetupFirstHash(hash);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t},

\t\tdisplayFromHash: function displayFromHash(hash, forceUpdate) {
\t\t\tvar sel = \$(jq(hash)),
\t\t\t    tabContents = sel.closest(contentSelector);
\t\t\ttabContents.children().hide();
\t\t\tsel.show().parentsUntil(contentSelector).show();
\t\t\tsel.find('ul.slides').css({ 'height': 'auto' });

\t\t\tif (forceUpdate) {
\t\t\t\tvar trig = \$(tabSelector + ' li a[href\$=\"' + jq(hash) + '\"]');
\t\t\t\tif (trig.length) {
\t\t\t\t\tupdateInterface(trig.first());
\t\t\t\t\ttrig.get(0).scrollIntoView();
\t\t\t\t}
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
        return "wdn/templates_5.1/js/tabs.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

require(['dcf-utility', 'dcf-tabs', 'css!js-css/tabs'], function (Utility, Tabs) {
\tvar tabs = document.querySelectorAll('.dcf-tabs');
\tvar unlTabs = new DCFTabs(tabs);
\tunlTabs.initialize();
});

define(['jquery', 'wdn', 'require'], function (\$, WDN, require) {
\tvar useHashChange = true,
\t    hashPlugin = 'plugins/hashchange/jquery.hashchange',
\t    tabSelector = 'ul.wdn_tabs',
\t    contentSelector = '.wdn_tabs_content',
\t    selected = 'selected',
\t    validRE = /^[a-z][\\w:\\-\\.]*\$/i,
\t    jq = function jq(id) {
\t\treturn '#' + id.replace(/(:|\\.)/g, '\\\\\$1');
\t},
\t    getHashFromLink = function getHashFromLink(link) {
\t\tvar uri = link.href.split('#');

\t\tif (!uri[1]) {
\t\t\treturn false;
\t\t}

\t\tvar currentPage = window.location.href.split('#')[0],
\t\t    base = document.getElementsByTagName('base')[0];

\t\tif (currentPage !== uri[0] && base && base.href !== uri[0]) {
\t\t\treturn false;
\t\t}

\t\treturn uri[1];
\t},
\t    getCleanHash = function getCleanHash() {
\t\treturn window.location.hash.replace('#', '');
\t},
\t    updateInterface = function updateInterface(trig) {
\t\tvar tabs = trig.closest(tabSelector),
\t\t    curr = trig.closest('li').siblings('.' + selected),
\t\t    sibs = trig.siblings(),
\t\t    parentTabs = trig.parents('li'),
\t\t    nsel;

\t\t// Remove any selected tab class
\t\t\$('li.' + selected, tabs).removeClass(selected);

\t\t// Hide any subtabs
\t\t\$('ul', tabs).hide();

\t\t// Add the selected class to the tab (and sub-tab)
\t\tparentTabs.addClass(selected);

\t\t// Show any relevant sub-tabs
\t\tif (sibs.length || parentTabs.length > 1) {
\t\t\tif (!sibs.length) {
\t\t\t\tsibs = trig.closest('ul');
\t\t\t}
\t\t\tsibs.show();
\t\t}

\t\tnsel = trig.closest('li').siblings('.' + selected);
\t\ttrig.trigger('tabchanged', [curr, nsel, tabs]);
\t},
\t    firstTrig;

\tvar Plugin = {
\t\tinitialize: function initialize() {
\t\t\t\$(function () {
\t\t\t\tif (WDN.getPluginParam('tabs', 'useHashChange') === false) {
\t\t\t\t\tuseHashChange = false;
\t\t\t\t}

\t\t\t\t// Set up the event for when a tab is clicked
\t\t\t\tvar hashFromTabClick = false,
\t\t\t\t    \$tabsWithSwitch = \$(tabSelector).not('.disableSwitching');

\t\t\t\t\$tabsWithSwitch.on('click', 'a', function () {
\t\t\t\t\t//do something when a tab is clicked
\t\t\t\t\tvar trig = \$(this),
\t\t\t\t\t    hash = getHashFromLink(this);

\t\t\t\t\tif (!hash) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}

\t\t\t\t\tupdateInterface(trig);

\t\t\t\t\tif (!useHashChange) {
\t\t\t\t\t\tPlugin.displayFromHash(hash);
\t\t\t\t\t} else {
\t\t\t\t\t\thashFromTabClick = true;
\t\t\t\t\t\tif (getCleanHash() != hash) {
\t\t\t\t\t\t\twindow.location.hash = hash;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t// If we have some tabs setup the hash stuff
\t\t\t\tif (\$tabsWithSwitch.length) {
\t\t\t\t\tvar isValidTabHash = function isValidTabHash(hash) {
\t\t\t\t\t\treturn validRE.test(hash);
\t\t\t\t\t},
\t\t\t\t\t    isTabExists = function isTabExists(hash) {
\t\t\t\t\t\treturn isValidTabHash(hash) && \$(contentSelector + ' ' + jq(hash)).length;
\t\t\t\t\t},
\t\t\t\t\t    setupFirstHash = function setupFirstHash(hash) {
\t\t\t\t\t\tvar ignoreTabs = \$();
\t\t\t\t\t\tif (hash) {
\t\t\t\t\t\t\tignoreTabs = \$(jq(hash)).closest(contentSelector).prev(tabSelector);
\t\t\t\t\t\t}

\t\t\t\t\t\tvar tabs = \$tabsWithSwitch.not(ignoreTabs);

\t\t\t\t\t\tif (!firstTrig) {
\t\t\t\t\t\t\tfirstTrig = [];
\t\t\t\t\t\t\ttabs.each(function () {
\t\t\t\t\t\t\t\tvar selPrefix = 'li.selected';

\t\t\t\t\t\t\t\tif (!\$(selPrefix, this).length) {
\t\t\t\t\t\t\t\t\tselPrefix = '> li';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tfirstTrig.push(\$(selPrefix + ':first a:first', this)[0]);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tfirstTrig = \$(firstTrig);
\t\t\t\t\t\t}

\t\t\t\t\t\tfirstTrig.each(function () {
\t\t\t\t\t\t\tvar innerTrig = \$(this);
\t\t\t\t\t\t\tvar hash = getHashFromLink(this);
\t\t\t\t\t\t\tif (!hash || !isValidTabHash(hash)) {
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tupdateInterface(innerTrig);
\t\t\t\t\t\t\tPlugin.displayFromHash(hash);
\t\t\t\t\t\t});
\t\t\t\t\t};

\t\t\t\t\tif (useHashChange) {
\t\t\t\t\t\tvar setupHashChange = function setupHashChange() {
\t\t\t\t\t\t\tvar firstRun = true;
\t\t\t\t\t\t\t\$(window).off('.wdn_tabs').on('hashchange.wdn_tabs', function () {
\t\t\t\t\t\t\t\tvar hash = getCleanHash();
\t\t\t\t\t\t\t\tif (hash && !isValidTabHash(hash)) {
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tif (isTabExists(hash)) {
\t\t\t\t\t\t\t\t\tPlugin.displayFromHash(hash, firstRun || !hashFromTabClick);

\t\t\t\t\t\t\t\t\tif (firstRun) {
\t\t\t\t\t\t\t\t\t\tsetupFirstHash(hash);
\t\t\t\t\t\t\t\t\t\tfirstRun = false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (hashFromTabClick) {
\t\t\t\t\t\t\t\t\t\thashFromTabClick = false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\treturn false; //consume this hash event
\t\t\t\t\t\t\t\t} else if (firstRun || hash === '') {
\t\t\t\t\t\t\t\t\tsetupFirstHash();
\t\t\t\t\t\t\t\t\tfirstRun = false;
\t\t\t\t\t\t\t\t\treturn true; //we simulated a hash event (allow others to consume);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(window).hashchange();
\t\t\t\t\t\t};

\t\t\t\t\t\tif (!\$.fn.hashchange) {
\t\t\t\t\t\t\trequire([hashPlugin], setupHashChange);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tsetupHashChange();
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t// No hashchange listener, so simulate first run
\t\t\t\t\t\tvar hash = getCleanHash();
\t\t\t\t\t\tif (isTabExists(hash)) {
\t\t\t\t\t\t\tPlugin.displayFromHash(hash, true);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\thash = '';
\t\t\t\t\t\t}
\t\t\t\t\t\tsetupFirstHash(hash);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t},

\t\tdisplayFromHash: function displayFromHash(hash, forceUpdate) {
\t\t\tvar sel = \$(jq(hash)),
\t\t\t    tabContents = sel.closest(contentSelector);
\t\t\ttabContents.children().hide();
\t\t\tsel.show().parentsUntil(contentSelector).show();
\t\t\tsel.find('ul.slides').css({ 'height': 'auto' });

\t\t\tif (forceUpdate) {
\t\t\t\tvar trig = \$(tabSelector + ' li a[href\$=\"' + jq(hash) + '\"]');
\t\t\t\tif (trig.length) {
\t\t\t\t\tupdateInterface(trig.first());
\t\t\t\t\ttrig.get(0).scrollIntoView();
\t\t\t\t}
\t\t\t}
\t\t}
\t};

\treturn Plugin;
});
", "wdn/templates_5.1/js/tabs.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/tabs.js");
    }
}
