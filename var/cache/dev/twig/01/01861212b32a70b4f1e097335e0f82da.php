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

/* wdn/templates_5.3/js-src/idm.babel.js */
class __TwigTemplate_cc017c7dfb096b761df26961e894fe49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/idm.babel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/idm.babel.js"));

        // line 1
        echo "'use strict';

/* globals define: false */
define(['wdn', 'ready', 'dropdown-widget', 'require'], function (WDN, ready, DropDownWidget, require) {
\t\"use strict\";

\tvar getLinkByRel = function getLinkByRel(name) {
\t\t\treturn document.querySelector('link[rel=' + name + ']');
\t\t},
\t\tgetLocalIdmSettings = function getLocalIdmSettings() {
\t\t\tvar loginLink = getLinkByRel('login'),
\t\t\t\tlogoutLink = getLinkByRel('logout');

\t\t\tif (loginLink) {
\t\t\t\tWDN.setPluginParam('idm', 'login', loginLink.getAttribute('href'));
\t\t\t}
\t\t\tif (logoutLink) {
\t\t\t\tWDN.setPluginParam('idm', 'logout', logoutLink.getAttribute('href'));
\t\t\t}

\t\t\treturn WDN.getPluginParam('idm') || {};
\t\t},

\t\tloginSrv = 'https://shib.unl.edu/',
\t\tssoCook = 'unl_sso',
\t\tencLoc = encodeURIComponent(window.location),
\t\tlogoutURL = loginSrv + 'idp/profile/cas/logout?url=' + encLoc,
\t\tloginURL = loginSrv + 'idp/profile/cas/login?service=' + encLoc,
\t\tserviceURL = 'https://whoami.unl.edu/?id=',
\t\tavatarService = 'https://directory.unl.edu/avatar/',
\t\tdepartmentLookup = 'https://directory.unl.edu/departments/',
\t\tuserLookup = 'https://directory.unl.edu/people/',
\t\tplanetRed = 'https://planetred.unl.edu/pg/',
\t\tuser = false,
\t\tsessionUser = false;

\tvar getUserField = function getUserField(field) {
\t\tif (!user || !user[field]) {
\t\t\treturn false;
\t\t}

\t\treturn user[field][0];
\t};

\tvar getUser = function getUser(uid) {
\t\treturn new Promise(function (resolve, reject) {
\t\t\tvar xhrUser = false;
\t\t\tvar xhr = new XMLHttpRequest();
\t\t\txhr.open('GET', userLookup + uid + '.json');
\t\t\txhr.send(null);
\t\t\txhr.onreadystatechange = function() {
\t\t\t  if (xhr.readyState === XMLHttpRequest.DONE) {
\t\t\t    if (xhr.status === 200) {
\t\t\t        resolve(JSON.parse(xhr.responseText));
\t\t\t    }else if (xhr.status === 404) {
\t\t\t        resolve({});
\t\t\t    } else {
\t\t\t        reject(Error(xhr.status));
\t\t\t    }
\t\t\t  }
\t\t\t};
\t\t});
\t};

\tvar appendUserDepartment = function appendUserDepartment(user) {
\t\treturn new Promise(function (resolve, reject) {
\t\t\tvar org_unit = user && 'unlHROrgUnitNumber' in user && user['unlHROrgUnitNumber'] && user['unlHROrgUnitNumber'].length > 0 ? user['unlHROrgUnitNumber'][0] : false;

\t\t\tif (org_unit) {
\t\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t\txhr.open('GET', departmentLookup + org_unit + '?format=json');
\t\t\t\txhr.send(null);

\t\t\t\txhr.onreadystatechange = function() {
\t\t\t\t  if (xhr.readyState === XMLHttpRequest.DONE) {
\t\t\t\t    if (xhr.status === 200) {
\t\t\t\t    \tuser['department'] = JSON.parse(xhr.responseText);
\t\t\t\t        resolve(user);
\t\t\t\t    } else {
\t\t\t\t    \tresolve(user);
\t\t\t\t    }
\t\t\t\t  }
\t\t\t\t};
\t\t\t} else {
\t\t\t\tresolve(user);
\t\t\t}
\t\t});
\t};

\tvar getUserData = function getUserData(uid, extras, callback) {
\t\treturn new Promise(function(resolve, reject) {
\t\t  var user = getUser(uid);
\t\t  resolve(user);
\t\t}).then(function(user) {
\t\t\treturn new Promise(function(resolve, reject) {
\t\t\t\tif (extras && extras.department === true) {
\t\t\t\t\tuser = appendUserDepartment(user);
\t\t\t\t}
\t\t\t\tresolve(user);
\t\t\t}).then(function(user) {
\t\t\t\tcallback(Plugin.formatUser(user));
\t\t\t});
\t\t});
\t};

\tvar getSessionUserData = function getSessionUserData(user, extras, callback) {
\t\treturn new Promise(function(resolve, reject) {
\t\t\tif (extras && extras.department === true) {
\t\t\t\t\tuser = appendUserDepartment(user);
\t\t\t}
\t\t\tresolve(user);
\t\t}).then(function(user) {
\t\t\tcallback(Plugin.formatUser(user));
\t\t});
\t};

\tvar Plugin = {
\t\tinitialize: function initialize(callback) {
\t\t\tvar loginCheckFailure = function loginCheckFailure() {
\t\t\t\t\tready(function () {
\t\t\t\t\t\tvar localSettings = getLocalIdmSettings();
\t\t\t\t\t\tif (localSettings.login) {
\t\t\t\t\t\t\tPlugin.setLoginURL(localSettings.login);
\t\t\t\t\t\t}

\t\t\t\t\t\tPlugin.renderAsLoggedOut();
\t\t\t\t\t});

\t\t\t\t\tif (callback) {
\t\t\t\t\t\tcallback();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tcookie = WDN.getCookie(ssoCook);

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
\t\t * Set the current user. The object should have fields as described by CAS
\t\t *
\t\t * @param newUser object|false
\t\t */
\t\tsetSessionUser: function setSessionUser(newUser) {
\t\t\tsessionUser = newUser;
\t\t\tuser = newUser;
\t\t},

\t\t/**
\t\t * Set the current user. The object should have fields as described by CAS
\t\t *
\t\t * @param newUser object|false
\t\t */
\t\tsetUser: function setUser(newUser) {
\t\t\tuser = newUser;
\t\t},

\t\tformatUser: function formatUser(userinfo) {
\t\t\tlet data = {};

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

\t\t\t\tif ('department' in userinfo) {
\t\t\t\t\tdata.department = userinfo['department'];
\t\t\t\t}
\t\t\t}

\t\t\t// Unset user
\t\t\tPlugin.setUser(false);

\t\t\treturn data;
\t\t},

\t\tgetSessionUser: function getSessionUser() {
\t\t\treturn sessionUser;
\t\t},

\t\tgetSessionUserExtras: function getSessionUserExtras(extras, callback) {
\t\t\tgetSessionUserData(sessionUser, extras, callback);
\t\t},

\t\tgetUser: function getUser(uid, extras, callback) {
\t\t\tgetUserData(uid, extras, callback);
\t\t},

\t\tlogout: function logout() {
\t\t\tWDN.setCookie(ssoCook, '0', -1);
\t\t\tuser = false;
\t\t},

\t\t/**
\t\t * Checks if the user is logged in
\t\t *
\t\t * @return bool
\t\t */
\t\tisLoggedIn: function isLoggedIn() {
\t\t\treturn !!sessionUser && sessionUser && sessionUser.uid;
\t\t},

\t\t/**
\t\t * Returns the uid of the logged in user.
\t\t *
\t\t * @return string
\t\t */
\t\tgetUserId: function getUserId() {
\t\t\treturn user && user.uid;
\t\t},

\t\t/**
\t\t * Get the logged in user's display name (full name)
\t\t *
\t\t * @returns {string}
\t\t */
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
\t\t * Get the logged in user's last name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetFirstName: function getFirstName() {
\t\t\treturn getUserField('givenName');
\t\t},

\t\t/**
\t\t * Get the logged in user's first name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetLastName: function getLastName() {
\t\t\treturn getUserField('sn');
\t\t},

\t\t/**
\t\t * Get the logged in user's primary affiliation.  IE: staff or faculty
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPrimaryAffiliation: function getPrimaryAffiliation() {
\t\t\treturn getUserField('eduPersonPrimaryAffiliation');
\t\t},

\t\t/**
\t\t * Get the logged in user's email address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetEmailAddress: function getEmailAddress() {
\t\t\treturn getUserField('mail');
\t\t},

\t\t/**
\t\t * Get the logged in user's postal address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPostalAddress: function getPostalAddress() {
\t\t\treturn getUserField('postalAddress');
\t\t},

\t\t/**
\t\t * Get the logged in user's telephone number
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTelephoneNumber: function getTelephoneNumber() {
\t\t\treturn getUserField('telephoneNumber');
\t\t},

\t\t/**
\t\t * Get the logged in user's title
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTitle: function getTitle() {
\t\t\treturn getUserField('title');
\t\t},

\t\t/**
\t\t * Get the logged in user's primary hr org unit number
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPrimaryHROrgUnitNumber: function getPrimaryHROrgUnitNumber() {
\t\t\treturn getUserField('unlHROrgUnitNumber');
\t\t},

\t\t/**
\t\t * Get the profile (planet red) URL
\t\t *
\t\t * @returns {string}
\t\t */
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
\t\t * Update the SSO tab and display user info
\t\t */
\t\trenderAsLoggedIn: function renderAsLoggedIn() {
\t\t\t// We need to set up multiples of these so that focus order is correct.
\t\t\tlet widgetContainers = document.querySelectorAll('.dcf-idm');
\t\t\tlet localSettings = getLocalIdmSettings();

\t\t\t// Loop over each widget and create the needed elements
\t\t\t// TODO: resolve differences between 'mobile' and 'desktop' layouts
\t\t\tfor (let i=0; i<widgetContainers.length; i++) {
\t\t\t\tlet button = document.createElement('BUTTON');
\t\t\t\tbutton.classList.add('dcf-idm-login', 'dcf-d-flex', 'dcf-ai-center', 'dcf-jc-center', 'dcf-relative', 'dcf-h-100%', 'dcf-w-100%', 'dcf-p-0', 'dcf-b-0', 'dcf-bg-transparent', 'unl-scarlet');
\t\t\t\tbutton.setAttribute('aria-haspopup', 'true');
\t\t\t\tbutton.setAttribute('aria-expanded', 'false');
\t\t\t\tbutton.setAttribute('aria-controls', 'dcf-idm-options-'+i);
\t\t\t\tbutton.setAttribute('aria-label', 'Account actions for ' + this.getDisplayName());

\t\t\t\tlet img = document.createElement('IMG');
\t\t\t\timg.classList.add('dcf-idm-img', 'dcf-txt-sm', 'dcf-h-6', 'dcf-w-6', 'dcf-circle', 'unl-bg-cream');
\t\t\t\timg.setAttribute('src', avatarService + this.getUserId());
\t\t\t\timg.setAttribute('alt', '');
\t\t\t\tbutton.appendChild(img);

\t\t\t\tlet displayName = document.createElement('SPAN');
\t\t\t\tdisplayName.classList.add('dcf-idm-label', 'dcf-txt-2xs', 'dcf-truncate');
\t\t\t\tdisplayName.innerText = this.getDisplayName();
\t\t\t\tbutton.appendChild(displayName);

\t\t\t\t//Set up the IDM options
\t\t\t\tlet optionsContainer = document.createElement('DIV');
\t\t\t\toptionsContainer.classList.add('dcf-idm-options', 'dcf-absolute', 'dcf-p-6', 'dcf-txt-2xs', 'dcf-z-1', 'dcf-bg-overlay-dark');
\t\t\t\toptionsContainer.setAttribute('id', 'dcf-idm-options-'+i);
\t\t\t\toptionsContainer.hidden = true;

\t\t\t\tlet navUL = document.createElement('UL');
\t\t\t\tnavUL.classList.add('dcf-list-bare', 'dcf-mb-0');

\t\t\t\tlet profileLI = document.createElement('LI');
\t\t\t\tlet profileLink = document.createElement('A');
\t\t\t\tprofileLink.classList.add('unl-cream');
\t\t\t\tprofileLink.setAttribute('href', this.getProfileURL());
\t\t\t\tprofileLink.innerText = 'View Profile';
\t\t\t\tprofileLI.appendChild(profileLink);
\t\t\t\tnavUL.appendChild(profileLI);

\t\t\t\tlet logoutLI = document.createElement('LI');
\t\t\t\tlet logoutLink = document.createElement('A');
\t\t\t\tlogoutLink.classList.add('unl-cream');
\t\t\t\tlogoutLink.setAttribute('href', logoutURL);
\t\t\t\tlogoutLink.innerText = 'Logout';
\t\t\t\tlogoutLI.appendChild(logoutLink);
\t\t\t\tnavUL.appendChild(logoutLI);

\t\t\t\toptionsContainer.appendChild(navUL);

\t\t\t\t//clear any existing HTML
\t\t\t\tlet loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tlet loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tloggedInContainer.innerHTML = '';

\t\t\t\tloggedInContainer.appendChild(button);
\t\t\t\tloggedInContainer.appendChild(optionsContainer);

\t\t\t\t//Initialize the dropdown nav
\t\t\t\tlet dropdownNav = new DropDownWidget(loggedInContainer, 'idm-logged-in');
\t\t\t\tlet closeNavEvent = new CustomEvent('closeNavigation');
\t\t\t\tlet closeSearchEvent = new CustomEvent('closeSearch');
\t\t\t\tdocument.addEventListener('openDropDownWidget', function(e) {
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
\t\t\t}

\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\trenderAsLoggedOut: function renderAsLoggedOut() {
\t\t\tif (Plugin.isLoggedIn()) {
\t\t\t\t//if the user is already logged in, we should not reset the login
\t\t\t\treturn;
\t\t\t}

\t\t\tlet widgetContainers = document.querySelectorAll('.dcf-idm');

\t\t\tfor (let i=0; i<widgetContainers.length; i++) {
\t\t\t\tlet loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tlet loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tlet loginLink = loggedOutContainer.querySelector('a');

\t\t\t\tloginLink.setAttribute('href', loginURL);
\t\t\t\tloggedInContainer.hidden = true;
\t\t\t\tloggedOutContainer.hidden = false;
\t\t\t}
\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the logout link is clicked
\t\t */
\t\tsetLogoutURL: function setLogoutURL(url) {
\t\t\tif (url) {
\t\t\t\tlogoutURL = url;
\t\t\t}
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the login link is clicked
\t\t */
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
        return "wdn/templates_5.3/js-src/idm.babel.js";
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
\t\t\treturn document.querySelector('link[rel=' + name + ']');
\t\t},
\t\tgetLocalIdmSettings = function getLocalIdmSettings() {
\t\t\tvar loginLink = getLinkByRel('login'),
\t\t\t\tlogoutLink = getLinkByRel('logout');

\t\t\tif (loginLink) {
\t\t\t\tWDN.setPluginParam('idm', 'login', loginLink.getAttribute('href'));
\t\t\t}
\t\t\tif (logoutLink) {
\t\t\t\tWDN.setPluginParam('idm', 'logout', logoutLink.getAttribute('href'));
\t\t\t}

\t\t\treturn WDN.getPluginParam('idm') || {};
\t\t},

\t\tloginSrv = 'https://shib.unl.edu/',
\t\tssoCook = 'unl_sso',
\t\tencLoc = encodeURIComponent(window.location),
\t\tlogoutURL = loginSrv + 'idp/profile/cas/logout?url=' + encLoc,
\t\tloginURL = loginSrv + 'idp/profile/cas/login?service=' + encLoc,
\t\tserviceURL = 'https://whoami.unl.edu/?id=',
\t\tavatarService = 'https://directory.unl.edu/avatar/',
\t\tdepartmentLookup = 'https://directory.unl.edu/departments/',
\t\tuserLookup = 'https://directory.unl.edu/people/',
\t\tplanetRed = 'https://planetred.unl.edu/pg/',
\t\tuser = false,
\t\tsessionUser = false;

\tvar getUserField = function getUserField(field) {
\t\tif (!user || !user[field]) {
\t\t\treturn false;
\t\t}

\t\treturn user[field][0];
\t};

\tvar getUser = function getUser(uid) {
\t\treturn new Promise(function (resolve, reject) {
\t\t\tvar xhrUser = false;
\t\t\tvar xhr = new XMLHttpRequest();
\t\t\txhr.open('GET', userLookup + uid + '.json');
\t\t\txhr.send(null);
\t\t\txhr.onreadystatechange = function() {
\t\t\t  if (xhr.readyState === XMLHttpRequest.DONE) {
\t\t\t    if (xhr.status === 200) {
\t\t\t        resolve(JSON.parse(xhr.responseText));
\t\t\t    }else if (xhr.status === 404) {
\t\t\t        resolve({});
\t\t\t    } else {
\t\t\t        reject(Error(xhr.status));
\t\t\t    }
\t\t\t  }
\t\t\t};
\t\t});
\t};

\tvar appendUserDepartment = function appendUserDepartment(user) {
\t\treturn new Promise(function (resolve, reject) {
\t\t\tvar org_unit = user && 'unlHROrgUnitNumber' in user && user['unlHROrgUnitNumber'] && user['unlHROrgUnitNumber'].length > 0 ? user['unlHROrgUnitNumber'][0] : false;

\t\t\tif (org_unit) {
\t\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t\txhr.open('GET', departmentLookup + org_unit + '?format=json');
\t\t\t\txhr.send(null);

\t\t\t\txhr.onreadystatechange = function() {
\t\t\t\t  if (xhr.readyState === XMLHttpRequest.DONE) {
\t\t\t\t    if (xhr.status === 200) {
\t\t\t\t    \tuser['department'] = JSON.parse(xhr.responseText);
\t\t\t\t        resolve(user);
\t\t\t\t    } else {
\t\t\t\t    \tresolve(user);
\t\t\t\t    }
\t\t\t\t  }
\t\t\t\t};
\t\t\t} else {
\t\t\t\tresolve(user);
\t\t\t}
\t\t});
\t};

\tvar getUserData = function getUserData(uid, extras, callback) {
\t\treturn new Promise(function(resolve, reject) {
\t\t  var user = getUser(uid);
\t\t  resolve(user);
\t\t}).then(function(user) {
\t\t\treturn new Promise(function(resolve, reject) {
\t\t\t\tif (extras && extras.department === true) {
\t\t\t\t\tuser = appendUserDepartment(user);
\t\t\t\t}
\t\t\t\tresolve(user);
\t\t\t}).then(function(user) {
\t\t\t\tcallback(Plugin.formatUser(user));
\t\t\t});
\t\t});
\t};

\tvar getSessionUserData = function getSessionUserData(user, extras, callback) {
\t\treturn new Promise(function(resolve, reject) {
\t\t\tif (extras && extras.department === true) {
\t\t\t\t\tuser = appendUserDepartment(user);
\t\t\t}
\t\t\tresolve(user);
\t\t}).then(function(user) {
\t\t\tcallback(Plugin.formatUser(user));
\t\t});
\t};

\tvar Plugin = {
\t\tinitialize: function initialize(callback) {
\t\t\tvar loginCheckFailure = function loginCheckFailure() {
\t\t\t\t\tready(function () {
\t\t\t\t\t\tvar localSettings = getLocalIdmSettings();
\t\t\t\t\t\tif (localSettings.login) {
\t\t\t\t\t\t\tPlugin.setLoginURL(localSettings.login);
\t\t\t\t\t\t}

\t\t\t\t\t\tPlugin.renderAsLoggedOut();
\t\t\t\t\t});

\t\t\t\t\tif (callback) {
\t\t\t\t\t\tcallback();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tcookie = WDN.getCookie(ssoCook);

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
\t\t * Set the current user. The object should have fields as described by CAS
\t\t *
\t\t * @param newUser object|false
\t\t */
\t\tsetSessionUser: function setSessionUser(newUser) {
\t\t\tsessionUser = newUser;
\t\t\tuser = newUser;
\t\t},

\t\t/**
\t\t * Set the current user. The object should have fields as described by CAS
\t\t *
\t\t * @param newUser object|false
\t\t */
\t\tsetUser: function setUser(newUser) {
\t\t\tuser = newUser;
\t\t},

\t\tformatUser: function formatUser(userinfo) {
\t\t\tlet data = {};

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

\t\t\t\tif ('department' in userinfo) {
\t\t\t\t\tdata.department = userinfo['department'];
\t\t\t\t}
\t\t\t}

\t\t\t// Unset user
\t\t\tPlugin.setUser(false);

\t\t\treturn data;
\t\t},

\t\tgetSessionUser: function getSessionUser() {
\t\t\treturn sessionUser;
\t\t},

\t\tgetSessionUserExtras: function getSessionUserExtras(extras, callback) {
\t\t\tgetSessionUserData(sessionUser, extras, callback);
\t\t},

\t\tgetUser: function getUser(uid, extras, callback) {
\t\t\tgetUserData(uid, extras, callback);
\t\t},

\t\tlogout: function logout() {
\t\t\tWDN.setCookie(ssoCook, '0', -1);
\t\t\tuser = false;
\t\t},

\t\t/**
\t\t * Checks if the user is logged in
\t\t *
\t\t * @return bool
\t\t */
\t\tisLoggedIn: function isLoggedIn() {
\t\t\treturn !!sessionUser && sessionUser && sessionUser.uid;
\t\t},

\t\t/**
\t\t * Returns the uid of the logged in user.
\t\t *
\t\t * @return string
\t\t */
\t\tgetUserId: function getUserId() {
\t\t\treturn user && user.uid;
\t\t},

\t\t/**
\t\t * Get the logged in user's display name (full name)
\t\t *
\t\t * @returns {string}
\t\t */
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
\t\t * Get the logged in user's last name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetFirstName: function getFirstName() {
\t\t\treturn getUserField('givenName');
\t\t},

\t\t/**
\t\t * Get the logged in user's first name only
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetLastName: function getLastName() {
\t\t\treturn getUserField('sn');
\t\t},

\t\t/**
\t\t * Get the logged in user's primary affiliation.  IE: staff or faculty
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPrimaryAffiliation: function getPrimaryAffiliation() {
\t\t\treturn getUserField('eduPersonPrimaryAffiliation');
\t\t},

\t\t/**
\t\t * Get the logged in user's email address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetEmailAddress: function getEmailAddress() {
\t\t\treturn getUserField('mail');
\t\t},

\t\t/**
\t\t * Get the logged in user's postal address
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPostalAddress: function getPostalAddress() {
\t\t\treturn getUserField('postalAddress');
\t\t},

\t\t/**
\t\t * Get the logged in user's telephone number
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTelephoneNumber: function getTelephoneNumber() {
\t\t\treturn getUserField('telephoneNumber');
\t\t},

\t\t/**
\t\t * Get the logged in user's title
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetTitle: function getTitle() {
\t\t\treturn getUserField('title');
\t\t},

\t\t/**
\t\t * Get the logged in user's primary hr org unit number
\t\t *
\t\t * @returns {false|string}
\t\t */
\t\tgetPrimaryHROrgUnitNumber: function getPrimaryHROrgUnitNumber() {
\t\t\treturn getUserField('unlHROrgUnitNumber');
\t\t},

\t\t/**
\t\t * Get the profile (planet red) URL
\t\t *
\t\t * @returns {string}
\t\t */
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
\t\t * Update the SSO tab and display user info
\t\t */
\t\trenderAsLoggedIn: function renderAsLoggedIn() {
\t\t\t// We need to set up multiples of these so that focus order is correct.
\t\t\tlet widgetContainers = document.querySelectorAll('.dcf-idm');
\t\t\tlet localSettings = getLocalIdmSettings();

\t\t\t// Loop over each widget and create the needed elements
\t\t\t// TODO: resolve differences between 'mobile' and 'desktop' layouts
\t\t\tfor (let i=0; i<widgetContainers.length; i++) {
\t\t\t\tlet button = document.createElement('BUTTON');
\t\t\t\tbutton.classList.add('dcf-idm-login', 'dcf-d-flex', 'dcf-ai-center', 'dcf-jc-center', 'dcf-relative', 'dcf-h-100%', 'dcf-w-100%', 'dcf-p-0', 'dcf-b-0', 'dcf-bg-transparent', 'unl-scarlet');
\t\t\t\tbutton.setAttribute('aria-haspopup', 'true');
\t\t\t\tbutton.setAttribute('aria-expanded', 'false');
\t\t\t\tbutton.setAttribute('aria-controls', 'dcf-idm-options-'+i);
\t\t\t\tbutton.setAttribute('aria-label', 'Account actions for ' + this.getDisplayName());

\t\t\t\tlet img = document.createElement('IMG');
\t\t\t\timg.classList.add('dcf-idm-img', 'dcf-txt-sm', 'dcf-h-6', 'dcf-w-6', 'dcf-circle', 'unl-bg-cream');
\t\t\t\timg.setAttribute('src', avatarService + this.getUserId());
\t\t\t\timg.setAttribute('alt', '');
\t\t\t\tbutton.appendChild(img);

\t\t\t\tlet displayName = document.createElement('SPAN');
\t\t\t\tdisplayName.classList.add('dcf-idm-label', 'dcf-txt-2xs', 'dcf-truncate');
\t\t\t\tdisplayName.innerText = this.getDisplayName();
\t\t\t\tbutton.appendChild(displayName);

\t\t\t\t//Set up the IDM options
\t\t\t\tlet optionsContainer = document.createElement('DIV');
\t\t\t\toptionsContainer.classList.add('dcf-idm-options', 'dcf-absolute', 'dcf-p-6', 'dcf-txt-2xs', 'dcf-z-1', 'dcf-bg-overlay-dark');
\t\t\t\toptionsContainer.setAttribute('id', 'dcf-idm-options-'+i);
\t\t\t\toptionsContainer.hidden = true;

\t\t\t\tlet navUL = document.createElement('UL');
\t\t\t\tnavUL.classList.add('dcf-list-bare', 'dcf-mb-0');

\t\t\t\tlet profileLI = document.createElement('LI');
\t\t\t\tlet profileLink = document.createElement('A');
\t\t\t\tprofileLink.classList.add('unl-cream');
\t\t\t\tprofileLink.setAttribute('href', this.getProfileURL());
\t\t\t\tprofileLink.innerText = 'View Profile';
\t\t\t\tprofileLI.appendChild(profileLink);
\t\t\t\tnavUL.appendChild(profileLI);

\t\t\t\tlet logoutLI = document.createElement('LI');
\t\t\t\tlet logoutLink = document.createElement('A');
\t\t\t\tlogoutLink.classList.add('unl-cream');
\t\t\t\tlogoutLink.setAttribute('href', logoutURL);
\t\t\t\tlogoutLink.innerText = 'Logout';
\t\t\t\tlogoutLI.appendChild(logoutLink);
\t\t\t\tnavUL.appendChild(logoutLI);

\t\t\t\toptionsContainer.appendChild(navUL);

\t\t\t\t//clear any existing HTML
\t\t\t\tlet loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tlet loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tloggedInContainer.innerHTML = '';

\t\t\t\tloggedInContainer.appendChild(button);
\t\t\t\tloggedInContainer.appendChild(optionsContainer);

\t\t\t\t//Initialize the dropdown nav
\t\t\t\tlet dropdownNav = new DropDownWidget(loggedInContainer, 'idm-logged-in');
\t\t\t\tlet closeNavEvent = new CustomEvent('closeNavigation');
\t\t\t\tlet closeSearchEvent = new CustomEvent('closeSearch');
\t\t\t\tdocument.addEventListener('openDropDownWidget', function(e) {
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
\t\t\t}

\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\trenderAsLoggedOut: function renderAsLoggedOut() {
\t\t\tif (Plugin.isLoggedIn()) {
\t\t\t\t//if the user is already logged in, we should not reset the login
\t\t\t\treturn;
\t\t\t}

\t\t\tlet widgetContainers = document.querySelectorAll('.dcf-idm');

\t\t\tfor (let i=0; i<widgetContainers.length; i++) {
\t\t\t\tlet loggedOutContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-out');
\t\t\t\tlet loggedInContainer = widgetContainers[i].querySelector('.dcf-idm-status-logged-in');
\t\t\t\tlet loginLink = loggedOutContainer.querySelector('a');

\t\t\t\tloginLink.setAttribute('href', loginURL);
\t\t\t\tloggedInContainer.hidden = true;
\t\t\t\tloggedOutContainer.hidden = false;
\t\t\t}
\t\t\t// Trigger idm is ready
\t\t\twindow.dispatchEvent(new Event('idmStateSet'));
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the logout link is clicked
\t\t */
\t\tsetLogoutURL: function setLogoutURL(url) {
\t\t\tif (url) {
\t\t\t\tlogoutURL = url;
\t\t\t}
\t\t},

\t\t/**
\t\t * Set the URL to send the user to when the login link is clicked
\t\t */
\t\tsetLoginURL: function setLoginURL(url) {
\t\t\tif (url) {
\t\t\t\tloginURL = url;
\t\t\t}
\t\t}
\t};

\tWDN.idm = {}; // must expose the WDN.idm namespace for the whoami service
\treturn Plugin;
});
", "wdn/templates_5.3/js-src/idm.babel.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/idm.babel.js");
    }
}
