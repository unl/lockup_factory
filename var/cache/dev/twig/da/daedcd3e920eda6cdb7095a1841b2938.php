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

/* wdn/templates_4.1/scripts/compressed/idm.js.src.js */
class __TwigTemplate_851982efee1bf8c8c37a64006d061386 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/idm.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/idm.js.src.js"));

        // line 1
        echo "/* globals define: false */
define(['wdn', 'jquery', 'require'], function(WDN, \$, require) {
\t\"use strict\";
\tvar getLinkByRel = function(name) {
\t\t\treturn \$('link[rel=' + name + ']');
\t\t},
\t\tgetLocalIdmSettings = function() {
\t\t\tvar loginLink = getLinkByRel('login'),
\t\t\t\tlogoutLink = getLinkByRel('logout');

\t\t\tif (loginLink.length) {
\t\t\t\tWDN.setPluginParam('idm', 'login', loginLink.attr('href'));
\t\t\t}
\t\t\tif (logoutLink.length) {
\t\t\t\tWDN.setPluginParam('idm', 'logout', logoutLink.attr('href'));
\t\t\t}

\t\t\treturn WDN.getPluginParam('idm') || {};
\t\t},
\t\twdnSel = '#wdn_',
\t\tmainSel = wdnSel + 'identity_management',
\t\tidmSel = wdnSel + 'idm_',
\t\tidmContainerSel = idmSel + 'notice_container',
\t\tuserSel = idmSel + 'username',
\t\tprofileSel = idmSel + 'profile',
\t\tlogoutSel = idmSel + 'logout',
\t\ttoggleSel = idmSel + 'toggle_label',
\t\tloginSrv = 'https://shib.unl.edu/',
\t\tssoCook = 'unl_sso',
\t\tencLoc = encodeURIComponent(window.location),
\t\tlogoutURL = loginSrv + 'idp/profile/cas/logout?url=' + encLoc,
\t\tloginURL = loginSrv + 'idp/profile/cas/login?service=' + encLoc,
\t\tserviceURL = 'https://whoami.unl.edu/?id=',
\t\tavatarService = 'https://directory.unl.edu/avatar/',
\t\tplanetRed = 'https://planetred.unl.edu/pg/',
\t\tdefaultLinkText,
\t\tuser = false;

\tvar displayName = function(uid) {
\t\t\tvar disp_name = uid;

\t\t\tif (uid){
\t\t\t\tif (user.uid && user.uid === uid) {
\t\t\t\t\treturn userDisplayName();
\t\t\t\t}
\t\t\t} else {
\t\t\t\treturn userDisplayName();
\t\t\t}

\t\t\treturn disp_name;
\t\t},

\t\tuserDisplayName = function() {
\t\t\tvar disp_name = '';
\t\t\tif (user.eduPersonNickname) {
\t\t\t\tdisp_name = user.eduPersonNickname[0];
\t\t\t} else if (user.givenName) {
\t\t\t\tdisp_name = user.givenName[0];
\t\t\t} else if (user.displayName) {
\t\t\t\tdisp_name = user.displayName[0];
\t\t\t}

\t\t\treturn disp_name;
\t\t},

\t\tgetUserField = function(field) {
\t\t\tif (!user || !user[field]) {
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn user[field][0];
\t\t};

\tvar Plugin = {
\t\tinitialize : function(callback) {
\t\t\tvar loginCheckFailure = function() {
\t\t\t\t\t\$(function() {
\t\t\t\t\t\tvar localSettings = getLocalIdmSettings();
\t\t\t\t\t\tdefaultLinkText = \$(userSel).html();
\t\t\t\t\t\tif (localSettings.login) {
\t\t\t\t\t\t\tPlugin.setLoginURL(localSettings.login);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tPlugin.displayLogin();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tif (callback) {
\t\t\t\t\t\tcallback();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tcookie = WDN.getCookie(ssoCook);

\t\t\tif (cookie) {
\t\t\t\trequire([serviceURL + cookie], function() {
\t\t\t\t\t// the whoami service injects into WDN.idm namespace
\t\t\t\t\tif (WDN.idm.user) {
\t\t\t\t\t\tuser = WDN.idm.user;
\t\t\t\t\t\tdelete WDN.idm.user;
\t\t\t\t\t}

\t\t\t\t\tif (Plugin.getUserId()) {
\t\t\t\t\t\tif (callback) {
\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\tPlugin.displayNotice(Plugin.getUserId());
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t// User's CAS session is no longer active, kill cookie
\t\t\t\t\t\tPlugin.logout();
\t\t\t\t\t\tloginCheckFailure();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} else {
\t\t\t\tloginCheckFailure();
\t\t\t}
\t\t},

\t\tlogout : function() {
\t\t\tWDN.setCookie(ssoCook, '0', -1);
\t\t\tuser = false;
\t\t},

\t\t/**
\t\t * Checks if the user is logged in
\t\t *
\t\t * @return bool
\t\t */
\t\tisLoggedIn : function() {
\t\t\treturn !!Plugin.getUserId();
\t\t},

\t\t/**
\t\t * Returns the uid of the logged in user.
\t\t *
\t\t * @return string
\t\t */
\t\tgetUserId : function() {
\t\t\treturn user && user.uid;
\t\t},

\t\t/**
\t\t * Get the logged in user's display name (full name)
\t\t *
\t\t * @returns {string}
\t\t */
\t\tgetDisplayName : function() {
\t\t\treturn userDisplayName();
\t\t},

\t\t/**
\t\t * Get the logged in user's last name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetFirstName : function() {
\t\t\treturn getUserField('givenName');
\t\t},

\t\t/**
\t\t * Get the logged in user's first name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetLastName : function() {
\t\t\treturn getUserField('sn');
\t\t},

\t\t/**
\t\t * Get the logged in user's primary affiliation.  IE: staff or faculty
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPrimaryAffiliation : function() {
\t\t\treturn getUserField('eduPersonPrimaryAffiliation');
\t\t},

\t\t/**
\t\t * Get the logged in user's email address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetEmailAddress : function() {
\t\t\treturn getUserField('mail');
\t\t},

\t\t/**
\t\t * Get the logged in user's postal address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPostalAddress : function() {
\t\t\treturn getUserField('postalAddress');
\t\t},

\t\t/**
\t\t * Get the logged in user's telephone number
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTelephoneNumber : function() {
\t\t\treturn getUserField('telephoneNumber');
\t\t},

\t\t/**
\t\t * Get the logged in user's title
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTitle : function() {
\t\t\treturn getUserField('title');
\t\t},

\t\t/**
\t\t * Update the SSO tab and display user info
\t\t *
\t\t * @param {string} uid
\t\t */
\t\tdisplayNotice : function(uid) {

\t\t\tvar localSettings = getLocalIdmSettings(),
\t\t\t\tidm = \$(mainSel),
\t\t\t\tusername = \$(userSel);

\t\t\t// in planet red's use of CAS, staff usernames are converted like jdoe2 -> unl_jdoe2
\t\t\t//  and student usernames are converted like s-jdoe3 -> unl_s_jdoe3
\t\t\tvar planetred_uid = 'unl_';
\t\t\tif (uid.substring(2,0) === 's-') {
\t\t\t\tplanetred_uid += uid.replace('-','_');
\t\t\t} else {
\t\t\t\tplanetred_uid += uid;
\t\t\t}

\t\t\tidm.addClass('loggedin');

\t\t\t\$(toggleSel).css('backgroundImage', 'url(' + avatarService + uid + ')')
                .html('<span class=\"wdn-text-hidden\">Account actions for </span>'+displayName(uid));
            \$(profileSel).attr('href', planetRed + 'profile/' + planetred_uid);

\t\t\t\$(idmContainerSel).removeClass('hidden');

            // Hide login anchor
            \$(userSel).hide();

\t\t\t// Any time logout link is clicked, unset the user data
\t\t\tvar logoutLink = \$(logoutSel);
\t\t\tlogoutLink.off('click').click(Plugin.logout);
\t\t\tPlugin.setLogoutURL(localSettings.logout);
\t\t},

\t\tdisplayLogin : function() {
\t\t\tif (Plugin.getUserId()) {
\t\t\t\t//if the user is already logged in, we should not reset the login
\t\t\t\treturn;
\t\t\t}

\t\t\tvar idm = \$(mainSel),
\t\t\t\tloginLink = \$(userSel);

\t\t\tidm.removeClass('loggedin');
\t\t\tloginLink.css('backgroundImage', null)
\t\t\t\t.attr('href', loginURL)
\t\t\t\t.html(defaultLinkText);

            // Show login anchor
            \$(userSel).show();
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the logout link is clicked
\t\t */
\t\tsetLogoutURL : function(url) {
\t\t\tvar logoutLink = \$(logoutSel);
\t\t\tif (url) {
\t\t\t\tlogoutURL = url;
\t\t\t}
\t\t\tlogoutLink.attr('href', logoutURL);
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the login link is clicked
\t\t */
\t\tsetLoginURL : function(url) {
\t\t\tif (url) {
\t\t\t\tloginURL = url;
\t\t\t}
\t\t\tPlugin.displayLogin();
\t\t}
\t};

\tWDN.idm = {}; // must expose the WDN.idm namespace for the whoami service
\treturn Plugin;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/idm.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* globals define: false */
define(['wdn', 'jquery', 'require'], function(WDN, \$, require) {
\t\"use strict\";
\tvar getLinkByRel = function(name) {
\t\t\treturn \$('link[rel=' + name + ']');
\t\t},
\t\tgetLocalIdmSettings = function() {
\t\t\tvar loginLink = getLinkByRel('login'),
\t\t\t\tlogoutLink = getLinkByRel('logout');

\t\t\tif (loginLink.length) {
\t\t\t\tWDN.setPluginParam('idm', 'login', loginLink.attr('href'));
\t\t\t}
\t\t\tif (logoutLink.length) {
\t\t\t\tWDN.setPluginParam('idm', 'logout', logoutLink.attr('href'));
\t\t\t}

\t\t\treturn WDN.getPluginParam('idm') || {};
\t\t},
\t\twdnSel = '#wdn_',
\t\tmainSel = wdnSel + 'identity_management',
\t\tidmSel = wdnSel + 'idm_',
\t\tidmContainerSel = idmSel + 'notice_container',
\t\tuserSel = idmSel + 'username',
\t\tprofileSel = idmSel + 'profile',
\t\tlogoutSel = idmSel + 'logout',
\t\ttoggleSel = idmSel + 'toggle_label',
\t\tloginSrv = 'https://shib.unl.edu/',
\t\tssoCook = 'unl_sso',
\t\tencLoc = encodeURIComponent(window.location),
\t\tlogoutURL = loginSrv + 'idp/profile/cas/logout?url=' + encLoc,
\t\tloginURL = loginSrv + 'idp/profile/cas/login?service=' + encLoc,
\t\tserviceURL = 'https://whoami.unl.edu/?id=',
\t\tavatarService = 'https://directory.unl.edu/avatar/',
\t\tplanetRed = 'https://planetred.unl.edu/pg/',
\t\tdefaultLinkText,
\t\tuser = false;

\tvar displayName = function(uid) {
\t\t\tvar disp_name = uid;

\t\t\tif (uid){
\t\t\t\tif (user.uid && user.uid === uid) {
\t\t\t\t\treturn userDisplayName();
\t\t\t\t}
\t\t\t} else {
\t\t\t\treturn userDisplayName();
\t\t\t}

\t\t\treturn disp_name;
\t\t},

\t\tuserDisplayName = function() {
\t\t\tvar disp_name = '';
\t\t\tif (user.eduPersonNickname) {
\t\t\t\tdisp_name = user.eduPersonNickname[0];
\t\t\t} else if (user.givenName) {
\t\t\t\tdisp_name = user.givenName[0];
\t\t\t} else if (user.displayName) {
\t\t\t\tdisp_name = user.displayName[0];
\t\t\t}

\t\t\treturn disp_name;
\t\t},

\t\tgetUserField = function(field) {
\t\t\tif (!user || !user[field]) {
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn user[field][0];
\t\t};

\tvar Plugin = {
\t\tinitialize : function(callback) {
\t\t\tvar loginCheckFailure = function() {
\t\t\t\t\t\$(function() {
\t\t\t\t\t\tvar localSettings = getLocalIdmSettings();
\t\t\t\t\t\tdefaultLinkText = \$(userSel).html();
\t\t\t\t\t\tif (localSettings.login) {
\t\t\t\t\t\t\tPlugin.setLoginURL(localSettings.login);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tPlugin.displayLogin();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tif (callback) {
\t\t\t\t\t\tcallback();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tcookie = WDN.getCookie(ssoCook);

\t\t\tif (cookie) {
\t\t\t\trequire([serviceURL + cookie], function() {
\t\t\t\t\t// the whoami service injects into WDN.idm namespace
\t\t\t\t\tif (WDN.idm.user) {
\t\t\t\t\t\tuser = WDN.idm.user;
\t\t\t\t\t\tdelete WDN.idm.user;
\t\t\t\t\t}

\t\t\t\t\tif (Plugin.getUserId()) {
\t\t\t\t\t\tif (callback) {
\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\tPlugin.displayNotice(Plugin.getUserId());
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t// User's CAS session is no longer active, kill cookie
\t\t\t\t\t\tPlugin.logout();
\t\t\t\t\t\tloginCheckFailure();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} else {
\t\t\t\tloginCheckFailure();
\t\t\t}
\t\t},

\t\tlogout : function() {
\t\t\tWDN.setCookie(ssoCook, '0', -1);
\t\t\tuser = false;
\t\t},

\t\t/**
\t\t * Checks if the user is logged in
\t\t *
\t\t * @return bool
\t\t */
\t\tisLoggedIn : function() {
\t\t\treturn !!Plugin.getUserId();
\t\t},

\t\t/**
\t\t * Returns the uid of the logged in user.
\t\t *
\t\t * @return string
\t\t */
\t\tgetUserId : function() {
\t\t\treturn user && user.uid;
\t\t},

\t\t/**
\t\t * Get the logged in user's display name (full name)
\t\t *
\t\t * @returns {string}
\t\t */
\t\tgetDisplayName : function() {
\t\t\treturn userDisplayName();
\t\t},

\t\t/**
\t\t * Get the logged in user's last name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetFirstName : function() {
\t\t\treturn getUserField('givenName');
\t\t},

\t\t/**
\t\t * Get the logged in user's first name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetLastName : function() {
\t\t\treturn getUserField('sn');
\t\t},

\t\t/**
\t\t * Get the logged in user's primary affiliation.  IE: staff or faculty
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPrimaryAffiliation : function() {
\t\t\treturn getUserField('eduPersonPrimaryAffiliation');
\t\t},

\t\t/**
\t\t * Get the logged in user's email address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetEmailAddress : function() {
\t\t\treturn getUserField('mail');
\t\t},

\t\t/**
\t\t * Get the logged in user's postal address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPostalAddress : function() {
\t\t\treturn getUserField('postalAddress');
\t\t},

\t\t/**
\t\t * Get the logged in user's telephone number
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTelephoneNumber : function() {
\t\t\treturn getUserField('telephoneNumber');
\t\t},

\t\t/**
\t\t * Get the logged in user's title
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTitle : function() {
\t\t\treturn getUserField('title');
\t\t},

\t\t/**
\t\t * Update the SSO tab and display user info
\t\t *
\t\t * @param {string} uid
\t\t */
\t\tdisplayNotice : function(uid) {

\t\t\tvar localSettings = getLocalIdmSettings(),
\t\t\t\tidm = \$(mainSel),
\t\t\t\tusername = \$(userSel);

\t\t\t// in planet red's use of CAS, staff usernames are converted like jdoe2 -> unl_jdoe2
\t\t\t//  and student usernames are converted like s-jdoe3 -> unl_s_jdoe3
\t\t\tvar planetred_uid = 'unl_';
\t\t\tif (uid.substring(2,0) === 's-') {
\t\t\t\tplanetred_uid += uid.replace('-','_');
\t\t\t} else {
\t\t\t\tplanetred_uid += uid;
\t\t\t}

\t\t\tidm.addClass('loggedin');

\t\t\t\$(toggleSel).css('backgroundImage', 'url(' + avatarService + uid + ')')
                .html('<span class=\"wdn-text-hidden\">Account actions for </span>'+displayName(uid));
            \$(profileSel).attr('href', planetRed + 'profile/' + planetred_uid);

\t\t\t\$(idmContainerSel).removeClass('hidden');

            // Hide login anchor
            \$(userSel).hide();

\t\t\t// Any time logout link is clicked, unset the user data
\t\t\tvar logoutLink = \$(logoutSel);
\t\t\tlogoutLink.off('click').click(Plugin.logout);
\t\t\tPlugin.setLogoutURL(localSettings.logout);
\t\t},

\t\tdisplayLogin : function() {
\t\t\tif (Plugin.getUserId()) {
\t\t\t\t//if the user is already logged in, we should not reset the login
\t\t\t\treturn;
\t\t\t}

\t\t\tvar idm = \$(mainSel),
\t\t\t\tloginLink = \$(userSel);

\t\t\tidm.removeClass('loggedin');
\t\t\tloginLink.css('backgroundImage', null)
\t\t\t\t.attr('href', loginURL)
\t\t\t\t.html(defaultLinkText);

            // Show login anchor
            \$(userSel).show();
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the logout link is clicked
\t\t */
\t\tsetLogoutURL : function(url) {
\t\t\tvar logoutLink = \$(logoutSel);
\t\t\tif (url) {
\t\t\t\tlogoutURL = url;
\t\t\t}
\t\t\tlogoutLink.attr('href', logoutURL);
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the login link is clicked
\t\t */
\t\tsetLoginURL : function(url) {
\t\t\tif (url) {
\t\t\t\tloginURL = url;
\t\t\t}
\t\t\tPlugin.displayLogin();
\t\t}
\t};

\tWDN.idm = {}; // must expose the WDN.idm namespace for the whoami service
\treturn Plugin;
});
", "wdn/templates_4.1/scripts/compressed/idm.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/idm.js.src.js");
    }
}
