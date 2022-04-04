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

/* wdn/templates_5.0/js/idm.js */
class __TwigTemplate_b47fb0466858c71b84e8e20cec5169bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/idm.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/idm.js"));

        // line 1
        echo "'use strict';

/* globals define: false */

define(['wdn', 'ready', 'dropdown-widget', 'require'], function (WDN, ready, DropDownWidget, require) {
\t\"use strict\";

\tvar getLinkByRel = function getLinkByRel(name) {
\t\treturn document.querySelector('link[rel=' + name + ']');
\t},
\t    getLocalIdmSettings = function getLocalIdmSettings() {
\t\tvar loginLink = getLinkByRel('login'),
\t\t    logoutLink = getLinkByRel('logout');

\t\tif (loginLink) {
\t\t\tWDN.setPluginParam('idm', 'login', loginLink.getAttribute('href'));
\t\t}
\t\tif (logoutLink) {
\t\t\tWDN.setPluginParam('idm', 'logout', logoutLink.getAttribute('href'));
\t\t}

\t\treturn WDN.getPluginParam('idm') || {};
\t},
\t    loginSrv = 'https://shib.unl.edu/',
\t    ssoCook = 'unl_sso',
\t    encLoc = encodeURIComponent(window.location),
\t    logoutURL = loginSrv + 'idp/profile/cas/logout?url=' + encLoc,
\t    loginURL = loginSrv + 'idp/profile/cas/login?service=' + encLoc,
\t    serviceURL = 'https://whoami.unl.edu/?id=',
\t    avatarService = 'https://directory.unl.edu/avatar/',
\t    departmentLookup = 'https://directory.unl.edu/departments/',
\t    userLookup = 'https://directory.unl.edu/people/',
\t    planetRed = 'https://planetred.unl.edu/pg/',
\t    user = false,
\t    sessionUser = false;

\tvar getUserField = function getUserField(field) {
\t\tif (!user || !user[field]) {
\t\t\treturn false;
\t\t}

\t\treturn user[field][0];
\t};

\tvar Plugin = {
\t\tinitialize: function initialize(callback) {
\t\t\tvar loginCheckFailure = function loginCheckFailure() {
\t\t\t\tready(function () {
\t\t\t\t\tvar localSettings = getLocalIdmSettings();
\t\t\t\t\tif (localSettings.login) {
\t\t\t\t\t\tPlugin.setLoginURL(localSettings.login);
\t\t\t\t\t}

\t\t\t\t\tPlugin.renderAsLoggedOut();
\t\t\t\t});

\t\t\t\tif (callback) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t},
\t\t\t    cookie = WDN.getCookie(ssoCook);

\t\t\tif (cookie) {
\t\t\t\trequire([serviceURL + cookie], function () {
\t\t\t\t\t// the whoami service injects into WDN.idm namespace
\t\t\t\t\tif (WDN.idm.user) {
\t\t\t\t\t\tPlugin.setSessionUser(WDN.idm.user);
\t\t\t\t\t\tdelete WDN.idm.user;
\t\t\t\t\t}

\t\t\t\t\tif (Plugin.isLoggedIn()) {
\t\t\t\t\t\tif (callback) {
\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t}
\t\t\t\t\t\tready(function () {
\t\t\t\t\t\t\tPlugin.renderAsLoggedIn();
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

\t\t/**
   * Set the current user. The object should have fields as described by CAS
   *
   * @param newUser object|false
   */
\t\tsetSessionUser: function setSessionUser(newUser) {
\t\t\tsessionUser = newUser;
\t\t\tuser = newUser;
\t\t},

\t\t/**
   * Set the current user. The object should have fields as described by CAS
   *
   * @param newUser object|false
   */
\t\tsetUser: function setUser(newUser) {
\t\t\tuser = newUser;
\t\t},

\t\tformatUser: function formatUser(userinfo, extras) {
\t\t\tvar data = {};

\t\t\t// Set user to passed user
\t\t\tPlugin.setUser(userinfo);

\t\t\tif (user) {
\t\t\t\tdata.unlID = Plugin.getUserId();
\t\t\t\tdata.firstName = Plugin.getFirstName();
\t\t\t\tdata.lastName = Plugin.getLastName();
\t\t\t\tdata.fullName = getUserField('displayName');
\t\t\t\tdata.displayName = Plugin.getDisplayName();
\t\t\t\tdata.emailAddress = Plugin.getEmailAddress();
\t\t\t\tdata.postalAddress = Plugin.getPostalAddress();
\t\t\t\tdata.phoneNumber = Plugin.getTelephoneNumber();
\t\t\t\tdata.title = Plugin.getTitle();
\t\t\t\tdata.orgUnitNumber = Plugin.getPrimaryHROrgUnitNumber();
\t\t\t\tdata.orgUnitName = getUserField('unlHRPrimaryDepartment');
\t\t\t\tdata.primaryAffiliation = Plugin.getPrimaryAffiliation();
\t\t\t\tdata.avatar = user.imageURL;
\t\t\t\tdata.profileUrl = Plugin.getProfileURL();

\t\t\t\tif (extras && extras.department === true) {
\t\t\t\t\tdata.department = Plugin.getDepartment(data.orgUnitNumber);
\t\t\t\t}
\t\t\t}

\t\t\t// Unset user
\t\t\tPlugin.setUser(false);

\t\t\treturn data;
\t\t},

\t\tgetSessionUser: function getSessionUser(extras) {
\t\t\treturn Plugin.formatUser(sessionUser, extras);
\t\t},

\t\tgetUser: function getUser(uid, extras) {
\t\t\tvar xhrUser = false;
\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t// force synchronous response
\t\t\txhr.open('GET', userLookup + uid + '.json', false);
\t\t\txhr.send(null);
\t\t\tif (xhr.status === 200) {
\t\t\t\txhrUser = JSON.parse(xhr.responseText);
\t\t\t}
\t\t\treturn Plugin.formatUser(xhrUser, extras);
\t\t},

\t\tgetDepartment: function getDepartment(org_unit) {
\t\t\tif (!org_unit) {
\t\t\t\treturn {};
\t\t\t}

\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t// force synchronous response
\t\t\txhr.open('GET', departmentLookup + org_unit + '?format=json', false);
\t\t\txhr.send(null);
\t\t\tif (xhr.status === 200) {
\t\t\t\treturn JSON.parse(xhr.responseText);
\t\t\t}
\t\t},

\t\tlogout: function logout() {
\t\t\tWDN.setCookie(ssoCook, '0', -1);
\t\t\tuser = false;
\t\t},

\t\t/**
   * Checks if the user is logged in
   *
   * @return bool
   */
\t\tisLoggedIn: function isLoggedIn() {
\t\t\treturn !!sessionUser && sessionUser && sessionUser.uid;
\t\t},

\t\t/**
   * Returns the uid of the logged in user.
   *
   * @return string
   */
\t\tgetUserId: function getUserId() {
\t\t\treturn user && user.uid;
\t\t},

\t\t/**
   * Get the logged in user's display name (full name)
   *
   * @returns {string}
   */
\t\tgetDisplayName: function getDisplayName() {
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

\t\t/**
   * Get the logged in user's last name only
   *
   * @returns {false|string}
   */
\t\tgetFirstName: function getFirstName() {
\t\t\treturn getUserField('givenName');
\t\t},

\t\t/**
   * Get the logged in user's first name only
   *
   * @returns {false|string}
   */
\t\tgetLastName: function getLastName() {
\t\t\treturn getUserField('sn');
\t\t},

\t\t/**
   * Get the logged in user's primary affiliation.  IE: staff or faculty
   *
   * @returns {false|string}
   */
\t\tgetPrimaryAffiliation: function getPrimaryAffiliation() {
\t\t\treturn getUserField('eduPersonPrimaryAffiliation');
\t\t},

\t\t/**
   * Get the logged in user's email address
   *
   * @returns {false|string}
   */
\t\tgetEmailAddress: function getEmailAddress() {
\t\t\treturn getUserField('mail');
\t\t},

\t\t/**
   * Get the logged in user's postal address
   *
   * @returns {false|string}
   */
\t\tgetPostalAddress: function getPostalAddress() {
\t\t\treturn getUserField('postalAddress');
\t\t},

\t\t/**
   * Get the logged in user's telephone number
   *
   * @returns {false|string}
   */
\t\tgetTelephoneNumber: function getTelephoneNumber() {
\t\t\treturn getUserField('telephoneNumber');
\t\t},

\t\t/**
   * Get the logged in user's title
   *
   * @returns {false|string}
   */
\t\tgetTitle: function getTitle() {
\t\t\treturn getUserField('title');
\t\t},

\t\t/**
   * Get the logged in user's primary hr org unit number
   *
   * @returns {false|string}
   */
\t\tgetPrimaryHROrgUnitNumber: function getPrimaryHROrgUnitNumber() {
\t\t\treturn getUserField('unlHROrgUnitNumber');
\t\t},

\t\t/**
   * Get the profile (planet red) URL
   *
   * @returns {string}
   */
\t\tgetProfileURL: function getProfileURL() {
\t\t\tif (!this.isLoggedIn()) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tvar uid = this.getUserId();

\t\t\t// in planet red's use of CAS, staff usernames are converted like jdoe2 -> unl_jdoe2
\t\t\t//  and student usernames are converted like s-jdoe3 -> unl_s_jdoe3
\t\t\tvar planetred_uid = 'unl_';
\t\t\tif (uid.substring(2, 0) === 's-') {
\t\t\t\tplanetred_uid += uid.replace('-', '_');
\t\t\t} else {
\t\t\t\tplanetred_uid += uid;
\t\t\t}

\t\t\treturn planetRed + 'profile/' + planetred_uid;
\t\t},

\t\t/**
   * Update the SSO tab and display user info
   */
\t\trenderAsLoggedIn: function renderAsLoggedIn() {
\t\t\tvar _this = this;

\t\t\t// We need to set up multiples of these so that focus order is correct.
\t\t\tvar widgetContainers = document.querySelectorAll('.dcf-idm');
\t\t\tvar localSettings = getLocalIdmSettings();

\t\t\t// Loop over each widget and create the needed elements
\t\t\t// TODO: resolve differences between 'mobile' and 'desktop' layouts

\t\t\tvar _loop = function _loop(i) {
\t\t\t\tvar button = document.createElement('BUTTON');
\t\t\t\tbutton.classList.add('dcf-idm-login', 'dcf-d-flex', 'dcf-ai-center', 'dcf-jc-center', 'dcf-relative', 'dcf-h-100%', 'dcf-w-100%', 'dcf-p-0', 'dcf-b-0', 'dcf-bg-transparent', 'unl-font-sans', 'unl-scarlet');
\t\t\t\tbutton.setAttribute('id', 'dcf-idm-toggle');
\t\t\t\tbutton.setAttribute('aria-haspopup', 'true');
\t\t\t\tbutton.setAttribute('aria-expanded', 'false');
\t\t\t\tbutton.setAttribute('aria-controls', 'dcf-idm-options-' + i);
\t\t\t\tbutton.setAttribute('aria-label', 'Account actions for ' + _this.getDisplayName());

\t\t\t\tvar img = document.createElement('IMG');
\t\t\t\timg.classList.add('dcf-idm-img', 'dcf-txt-sm', 'dcf-h-6', 'dcf-w-6', 'dcf-circle', 'unl-bg-cream');
\t\t\t\timg.setAttribute('src', avatarService + _this.getUserId());
\t\t\t\timg.setAttribute('alt', '');
\t\t\t\tbutton.appendChild(img);

\t\t\t\tvar displayName = document.createElement('SPAN');
\t\t\t\tdisplayName.classList.add('dcf-idm-label', 'dcf-txt-2xs', 'dcf-truncate');
\t\t\t\tdisplayName.innerText = _this.getDisplayName();
\t\t\t\tbutton.appendChild(displayName);

\t\t\t\t//Set up the IDM options
\t\t\t\tvar optionsContainer = document.createElement('DIV');
\t\t\t\toptionsContainer.classList.add('dcf-idm-options', 'dcf-absolute', 'dcf-pt-6', 'dcf-pr-5', 'dcf-pb-5', 'dcf-pl-5', 'dcf-z-1', 'dcf-bg-overlay-dark');
\t\t\t\toptionsContainer.setAttribute('id', 'dcf-idm-options-' + i);
\t\t\t\toptionsContainer.hidden = true;

\t\t\t\tvar navUL = document.createElement('UL');
\t\t\t\tnavUL.classList.add('dcf-list-bare', 'dcf-mb-0', 'dcf-txt-2xs', 'unl-font-sans');

\t\t\t\tvar profileLI = document.createElement('LI');
\t\t\t\tvar profileLink = document.createElement('A');
\t\t\t\tprofileLink.classList.add('unl-cream');
\t\t\t\tprofileLink.setAttribute('href', _this.getProfileURL());
\t\t\t\tprofileLink.innerText = 'View Profile';
\t\t\t\tprofileLI.appendChild(profileLink);
\t\t\t\tnavUL.appendChild(profileLI);

\t\t\t\tvar logoutLI = document.createElement('LI');
\t\t\t\tvar logoutLink = document.createElement('A');
\t\t\t\tlogoutLink.classList.add('unl-cream');
\t\t\t\tlogoutLink.setAttribute('href', logoutURL);
\t\t\t\tlogoutLink.innerText = 'Logout';
\t\t\t\tlogoutLI.appendChild(logoutLink);
\t\t\t\tnavUL.appendChild(logoutLI);

\t\t\t\toptionsContainer.appendChild(navUL);

\t\t\t\t//clear any existing HTML
\t\t\t\tvar loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tvar loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tloggedInContainer.innerHTML = '';

\t\t\t\tloggedInContainer.appendChild(button);
\t\t\t\tloggedInContainer.appendChild(optionsContainer);

\t\t\t\t//Initialize the dropdown nav
\t\t\t\tvar dropdownNav = new DropDownWidget(loggedInContainer, 'idm-logged-in');
\t\t\t\tvar closeNavEvent = new CustomEvent('closeNavigation');
\t\t\t\tvar closeSearchEvent = new CustomEvent('closeSearch');
\t\t\t\tdocument.addEventListener('openDropDownWidget', function (e) {
\t\t\t\t\tif (e.detail.type == 'idm-logged-in') {
\t\t\t\t\t\tdocument.dispatchEvent(closeNavEvent);
\t\t\t\t\t\tdocument.dispatchEvent(closeSearchEvent);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//Show the contents
\t\t\t\tloggedOutContainer.hidden = true;
\t\t\t\tloggedInContainer.hidden = false;

\t\t\t\t// Any time logout link is clicked, unset the user data
\t\t\t\tlogoutLink.removeEventListener('click', Plugin.logout);
\t\t\t\tlogoutLink.addEventListener('click', Plugin.logout);

\t\t\t\tPlugin.setLogoutURL(localSettings.logout);
\t\t\t\tlogoutLink.setAttribute('href', logoutURL);
\t\t\t};

\t\t\tfor (var i = 0; i < widgetContainers.length; i++) {
\t\t\t\t_loop(i);
\t\t\t}

\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\trenderAsLoggedOut: function renderAsLoggedOut() {
\t\t\tif (Plugin.isLoggedIn()) {
\t\t\t\t//if the user is already logged in, we should not reset the login
\t\t\t\treturn;
\t\t\t}

\t\t\tvar widgetContainers = document.querySelectorAll('.dcf-idm');

\t\t\tfor (var i = 0; i < widgetContainers.length; i++) {
\t\t\t\tvar loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tvar loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tvar loginLink = loggedOutContainer.querySelector('a');

\t\t\t\tloginLink.setAttribute('href', loginURL);
\t\t\t\tloggedInContainer.hidden = true;
\t\t\t\tloggedOutContainer.hidden = false;
\t\t\t}
\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\t/**
   * Set the URL to send the user to when the logout link is clicked
   */
\t\tsetLogoutURL: function setLogoutURL(url) {
\t\t\tif (url) {
\t\t\t\tlogoutURL = url;
\t\t\t}
\t\t},

\t\t/**
   * Set the URL to send the user to when the login link is clicked
   */
\t\tsetLoginURL: function setLoginURL(url) {
\t\t\tif (url) {
\t\t\t\tloginURL = url;
\t\t\t}
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
        return "wdn/templates_5.0/js/idm.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

/* globals define: false */

define(['wdn', 'ready', 'dropdown-widget', 'require'], function (WDN, ready, DropDownWidget, require) {
\t\"use strict\";

\tvar getLinkByRel = function getLinkByRel(name) {
\t\treturn document.querySelector('link[rel=' + name + ']');
\t},
\t    getLocalIdmSettings = function getLocalIdmSettings() {
\t\tvar loginLink = getLinkByRel('login'),
\t\t    logoutLink = getLinkByRel('logout');

\t\tif (loginLink) {
\t\t\tWDN.setPluginParam('idm', 'login', loginLink.getAttribute('href'));
\t\t}
\t\tif (logoutLink) {
\t\t\tWDN.setPluginParam('idm', 'logout', logoutLink.getAttribute('href'));
\t\t}

\t\treturn WDN.getPluginParam('idm') || {};
\t},
\t    loginSrv = 'https://shib.unl.edu/',
\t    ssoCook = 'unl_sso',
\t    encLoc = encodeURIComponent(window.location),
\t    logoutURL = loginSrv + 'idp/profile/cas/logout?url=' + encLoc,
\t    loginURL = loginSrv + 'idp/profile/cas/login?service=' + encLoc,
\t    serviceURL = 'https://whoami.unl.edu/?id=',
\t    avatarService = 'https://directory.unl.edu/avatar/',
\t    departmentLookup = 'https://directory.unl.edu/departments/',
\t    userLookup = 'https://directory.unl.edu/people/',
\t    planetRed = 'https://planetred.unl.edu/pg/',
\t    user = false,
\t    sessionUser = false;

\tvar getUserField = function getUserField(field) {
\t\tif (!user || !user[field]) {
\t\t\treturn false;
\t\t}

\t\treturn user[field][0];
\t};

\tvar Plugin = {
\t\tinitialize: function initialize(callback) {
\t\t\tvar loginCheckFailure = function loginCheckFailure() {
\t\t\t\tready(function () {
\t\t\t\t\tvar localSettings = getLocalIdmSettings();
\t\t\t\t\tif (localSettings.login) {
\t\t\t\t\t\tPlugin.setLoginURL(localSettings.login);
\t\t\t\t\t}

\t\t\t\t\tPlugin.renderAsLoggedOut();
\t\t\t\t});

\t\t\t\tif (callback) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t},
\t\t\t    cookie = WDN.getCookie(ssoCook);

\t\t\tif (cookie) {
\t\t\t\trequire([serviceURL + cookie], function () {
\t\t\t\t\t// the whoami service injects into WDN.idm namespace
\t\t\t\t\tif (WDN.idm.user) {
\t\t\t\t\t\tPlugin.setSessionUser(WDN.idm.user);
\t\t\t\t\t\tdelete WDN.idm.user;
\t\t\t\t\t}

\t\t\t\t\tif (Plugin.isLoggedIn()) {
\t\t\t\t\t\tif (callback) {
\t\t\t\t\t\t\tcallback();
\t\t\t\t\t\t}
\t\t\t\t\t\tready(function () {
\t\t\t\t\t\t\tPlugin.renderAsLoggedIn();
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

\t\t/**
   * Set the current user. The object should have fields as described by CAS
   *
   * @param newUser object|false
   */
\t\tsetSessionUser: function setSessionUser(newUser) {
\t\t\tsessionUser = newUser;
\t\t\tuser = newUser;
\t\t},

\t\t/**
   * Set the current user. The object should have fields as described by CAS
   *
   * @param newUser object|false
   */
\t\tsetUser: function setUser(newUser) {
\t\t\tuser = newUser;
\t\t},

\t\tformatUser: function formatUser(userinfo, extras) {
\t\t\tvar data = {};

\t\t\t// Set user to passed user
\t\t\tPlugin.setUser(userinfo);

\t\t\tif (user) {
\t\t\t\tdata.unlID = Plugin.getUserId();
\t\t\t\tdata.firstName = Plugin.getFirstName();
\t\t\t\tdata.lastName = Plugin.getLastName();
\t\t\t\tdata.fullName = getUserField('displayName');
\t\t\t\tdata.displayName = Plugin.getDisplayName();
\t\t\t\tdata.emailAddress = Plugin.getEmailAddress();
\t\t\t\tdata.postalAddress = Plugin.getPostalAddress();
\t\t\t\tdata.phoneNumber = Plugin.getTelephoneNumber();
\t\t\t\tdata.title = Plugin.getTitle();
\t\t\t\tdata.orgUnitNumber = Plugin.getPrimaryHROrgUnitNumber();
\t\t\t\tdata.orgUnitName = getUserField('unlHRPrimaryDepartment');
\t\t\t\tdata.primaryAffiliation = Plugin.getPrimaryAffiliation();
\t\t\t\tdata.avatar = user.imageURL;
\t\t\t\tdata.profileUrl = Plugin.getProfileURL();

\t\t\t\tif (extras && extras.department === true) {
\t\t\t\t\tdata.department = Plugin.getDepartment(data.orgUnitNumber);
\t\t\t\t}
\t\t\t}

\t\t\t// Unset user
\t\t\tPlugin.setUser(false);

\t\t\treturn data;
\t\t},

\t\tgetSessionUser: function getSessionUser(extras) {
\t\t\treturn Plugin.formatUser(sessionUser, extras);
\t\t},

\t\tgetUser: function getUser(uid, extras) {
\t\t\tvar xhrUser = false;
\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t// force synchronous response
\t\t\txhr.open('GET', userLookup + uid + '.json', false);
\t\t\txhr.send(null);
\t\t\tif (xhr.status === 200) {
\t\t\t\txhrUser = JSON.parse(xhr.responseText);
\t\t\t}
\t\t\treturn Plugin.formatUser(xhrUser, extras);
\t\t},

\t\tgetDepartment: function getDepartment(org_unit) {
\t\t\tif (!org_unit) {
\t\t\t\treturn {};
\t\t\t}

\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t// force synchronous response
\t\t\txhr.open('GET', departmentLookup + org_unit + '?format=json', false);
\t\t\txhr.send(null);
\t\t\tif (xhr.status === 200) {
\t\t\t\treturn JSON.parse(xhr.responseText);
\t\t\t}
\t\t},

\t\tlogout: function logout() {
\t\t\tWDN.setCookie(ssoCook, '0', -1);
\t\t\tuser = false;
\t\t},

\t\t/**
   * Checks if the user is logged in
   *
   * @return bool
   */
\t\tisLoggedIn: function isLoggedIn() {
\t\t\treturn !!sessionUser && sessionUser && sessionUser.uid;
\t\t},

\t\t/**
   * Returns the uid of the logged in user.
   *
   * @return string
   */
\t\tgetUserId: function getUserId() {
\t\t\treturn user && user.uid;
\t\t},

\t\t/**
   * Get the logged in user's display name (full name)
   *
   * @returns {string}
   */
\t\tgetDisplayName: function getDisplayName() {
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

\t\t/**
   * Get the logged in user's last name only
   *
   * @returns {false|string}
   */
\t\tgetFirstName: function getFirstName() {
\t\t\treturn getUserField('givenName');
\t\t},

\t\t/**
   * Get the logged in user's first name only
   *
   * @returns {false|string}
   */
\t\tgetLastName: function getLastName() {
\t\t\treturn getUserField('sn');
\t\t},

\t\t/**
   * Get the logged in user's primary affiliation.  IE: staff or faculty
   *
   * @returns {false|string}
   */
\t\tgetPrimaryAffiliation: function getPrimaryAffiliation() {
\t\t\treturn getUserField('eduPersonPrimaryAffiliation');
\t\t},

\t\t/**
   * Get the logged in user's email address
   *
   * @returns {false|string}
   */
\t\tgetEmailAddress: function getEmailAddress() {
\t\t\treturn getUserField('mail');
\t\t},

\t\t/**
   * Get the logged in user's postal address
   *
   * @returns {false|string}
   */
\t\tgetPostalAddress: function getPostalAddress() {
\t\t\treturn getUserField('postalAddress');
\t\t},

\t\t/**
   * Get the logged in user's telephone number
   *
   * @returns {false|string}
   */
\t\tgetTelephoneNumber: function getTelephoneNumber() {
\t\t\treturn getUserField('telephoneNumber');
\t\t},

\t\t/**
   * Get the logged in user's title
   *
   * @returns {false|string}
   */
\t\tgetTitle: function getTitle() {
\t\t\treturn getUserField('title');
\t\t},

\t\t/**
   * Get the logged in user's primary hr org unit number
   *
   * @returns {false|string}
   */
\t\tgetPrimaryHROrgUnitNumber: function getPrimaryHROrgUnitNumber() {
\t\t\treturn getUserField('unlHROrgUnitNumber');
\t\t},

\t\t/**
   * Get the profile (planet red) URL
   *
   * @returns {string}
   */
\t\tgetProfileURL: function getProfileURL() {
\t\t\tif (!this.isLoggedIn()) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tvar uid = this.getUserId();

\t\t\t// in planet red's use of CAS, staff usernames are converted like jdoe2 -> unl_jdoe2
\t\t\t//  and student usernames are converted like s-jdoe3 -> unl_s_jdoe3
\t\t\tvar planetred_uid = 'unl_';
\t\t\tif (uid.substring(2, 0) === 's-') {
\t\t\t\tplanetred_uid += uid.replace('-', '_');
\t\t\t} else {
\t\t\t\tplanetred_uid += uid;
\t\t\t}

\t\t\treturn planetRed + 'profile/' + planetred_uid;
\t\t},

\t\t/**
   * Update the SSO tab and display user info
   */
\t\trenderAsLoggedIn: function renderAsLoggedIn() {
\t\t\tvar _this = this;

\t\t\t// We need to set up multiples of these so that focus order is correct.
\t\t\tvar widgetContainers = document.querySelectorAll('.dcf-idm');
\t\t\tvar localSettings = getLocalIdmSettings();

\t\t\t// Loop over each widget and create the needed elements
\t\t\t// TODO: resolve differences between 'mobile' and 'desktop' layouts

\t\t\tvar _loop = function _loop(i) {
\t\t\t\tvar button = document.createElement('BUTTON');
\t\t\t\tbutton.classList.add('dcf-idm-login', 'dcf-d-flex', 'dcf-ai-center', 'dcf-jc-center', 'dcf-relative', 'dcf-h-100%', 'dcf-w-100%', 'dcf-p-0', 'dcf-b-0', 'dcf-bg-transparent', 'unl-font-sans', 'unl-scarlet');
\t\t\t\tbutton.setAttribute('id', 'dcf-idm-toggle');
\t\t\t\tbutton.setAttribute('aria-haspopup', 'true');
\t\t\t\tbutton.setAttribute('aria-expanded', 'false');
\t\t\t\tbutton.setAttribute('aria-controls', 'dcf-idm-options-' + i);
\t\t\t\tbutton.setAttribute('aria-label', 'Account actions for ' + _this.getDisplayName());

\t\t\t\tvar img = document.createElement('IMG');
\t\t\t\timg.classList.add('dcf-idm-img', 'dcf-txt-sm', 'dcf-h-6', 'dcf-w-6', 'dcf-circle', 'unl-bg-cream');
\t\t\t\timg.setAttribute('src', avatarService + _this.getUserId());
\t\t\t\timg.setAttribute('alt', '');
\t\t\t\tbutton.appendChild(img);

\t\t\t\tvar displayName = document.createElement('SPAN');
\t\t\t\tdisplayName.classList.add('dcf-idm-label', 'dcf-txt-2xs', 'dcf-truncate');
\t\t\t\tdisplayName.innerText = _this.getDisplayName();
\t\t\t\tbutton.appendChild(displayName);

\t\t\t\t//Set up the IDM options
\t\t\t\tvar optionsContainer = document.createElement('DIV');
\t\t\t\toptionsContainer.classList.add('dcf-idm-options', 'dcf-absolute', 'dcf-pt-6', 'dcf-pr-5', 'dcf-pb-5', 'dcf-pl-5', 'dcf-z-1', 'dcf-bg-overlay-dark');
\t\t\t\toptionsContainer.setAttribute('id', 'dcf-idm-options-' + i);
\t\t\t\toptionsContainer.hidden = true;

\t\t\t\tvar navUL = document.createElement('UL');
\t\t\t\tnavUL.classList.add('dcf-list-bare', 'dcf-mb-0', 'dcf-txt-2xs', 'unl-font-sans');

\t\t\t\tvar profileLI = document.createElement('LI');
\t\t\t\tvar profileLink = document.createElement('A');
\t\t\t\tprofileLink.classList.add('unl-cream');
\t\t\t\tprofileLink.setAttribute('href', _this.getProfileURL());
\t\t\t\tprofileLink.innerText = 'View Profile';
\t\t\t\tprofileLI.appendChild(profileLink);
\t\t\t\tnavUL.appendChild(profileLI);

\t\t\t\tvar logoutLI = document.createElement('LI');
\t\t\t\tvar logoutLink = document.createElement('A');
\t\t\t\tlogoutLink.classList.add('unl-cream');
\t\t\t\tlogoutLink.setAttribute('href', logoutURL);
\t\t\t\tlogoutLink.innerText = 'Logout';
\t\t\t\tlogoutLI.appendChild(logoutLink);
\t\t\t\tnavUL.appendChild(logoutLI);

\t\t\t\toptionsContainer.appendChild(navUL);

\t\t\t\t//clear any existing HTML
\t\t\t\tvar loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tvar loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tloggedInContainer.innerHTML = '';

\t\t\t\tloggedInContainer.appendChild(button);
\t\t\t\tloggedInContainer.appendChild(optionsContainer);

\t\t\t\t//Initialize the dropdown nav
\t\t\t\tvar dropdownNav = new DropDownWidget(loggedInContainer, 'idm-logged-in');
\t\t\t\tvar closeNavEvent = new CustomEvent('closeNavigation');
\t\t\t\tvar closeSearchEvent = new CustomEvent('closeSearch');
\t\t\t\tdocument.addEventListener('openDropDownWidget', function (e) {
\t\t\t\t\tif (e.detail.type == 'idm-logged-in') {
\t\t\t\t\t\tdocument.dispatchEvent(closeNavEvent);
\t\t\t\t\t\tdocument.dispatchEvent(closeSearchEvent);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//Show the contents
\t\t\t\tloggedOutContainer.hidden = true;
\t\t\t\tloggedInContainer.hidden = false;

\t\t\t\t// Any time logout link is clicked, unset the user data
\t\t\t\tlogoutLink.removeEventListener('click', Plugin.logout);
\t\t\t\tlogoutLink.addEventListener('click', Plugin.logout);

\t\t\t\tPlugin.setLogoutURL(localSettings.logout);
\t\t\t\tlogoutLink.setAttribute('href', logoutURL);
\t\t\t};

\t\t\tfor (var i = 0; i < widgetContainers.length; i++) {
\t\t\t\t_loop(i);
\t\t\t}

\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\trenderAsLoggedOut: function renderAsLoggedOut() {
\t\t\tif (Plugin.isLoggedIn()) {
\t\t\t\t//if the user is already logged in, we should not reset the login
\t\t\t\treturn;
\t\t\t}

\t\t\tvar widgetContainers = document.querySelectorAll('.dcf-idm');

\t\t\tfor (var i = 0; i < widgetContainers.length; i++) {
\t\t\t\tvar loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tvar loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tvar loginLink = loggedOutContainer.querySelector('a');

\t\t\t\tloginLink.setAttribute('href', loginURL);
\t\t\t\tloggedInContainer.hidden = true;
\t\t\t\tloggedOutContainer.hidden = false;
\t\t\t}
\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\t/**
   * Set the URL to send the user to when the logout link is clicked
   */
\t\tsetLogoutURL: function setLogoutURL(url) {
\t\t\tif (url) {
\t\t\t\tlogoutURL = url;
\t\t\t}
\t\t},

\t\t/**
   * Set the URL to send the user to when the login link is clicked
   */
\t\tsetLoginURL: function setLoginURL(url) {
\t\t\tif (url) {
\t\t\t\tloginURL = url;
\t\t\t}
\t\t}
\t};

\tWDN.idm = {}; // must expose the WDN.idm namespace for the whoami service
\treturn Plugin;
});
", "wdn/templates_5.0/js/idm.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/idm.js");
    }
}
