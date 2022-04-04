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

/* wdn/templates_5.1/js/compressed/idm.js */
class __TwigTemplate_52ca34c48c8fa4e42716d9da4f89760d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/idm.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/compressed/idm.js"));

        // line 1
        echo "define([\"wdn\",\"ready\",\"dropdown-widget\",\"require\"],function(e,t,n,r){\"use strict\";var i=function(e){return document.querySelector(\"link[rel=\"+e+\"]\")},d=function(){var t=i(\"login\"),n=i(\"logout\");return t&&e.setPluginParam(\"idm\",\"login\",t.getAttribute(\"href\")),n&&e.setPluginParam(\"idm\",\"logout\",n.getAttribute(\"href\")),e.getPluginParam(\"idm\")||{}},o=encodeURIComponent(window.location),s=\"https://shib.unl.edu/idp/profile/cas/logout?url=\"+o,u=\"https://shib.unl.edu/idp/profile/cas/login?service=\"+o,a=!1,c=!1,l=function(e){return!(!a||!a[e])&&a[e][0]},f=function(e){return new Promise(function(t,n){var r=new XMLHttpRequest;r.open(\"GET\",\"https://directory.unl.edu/people/\"+e+\".json\"),r.send(null),r.onreadystatechange=function(){r.readyState===XMLHttpRequest.DONE&&(200===r.status?t(JSON.parse(r.responseText)):404===r.status?t({}):n(Error(r.status)))}})},m=function(e){return new Promise(function(t,n){var r=!!(e&&\"unlHROrgUnitNumber\"in e&&e.unlHROrgUnitNumber&&e.unlHROrgUnitNumber.length>0)&&e.unlHROrgUnitNumber[0];if(r){var i=new XMLHttpRequest;i.open(\"GET\",\"https://directory.unl.edu/departments/\"+r+\"?format=json\"),i.send(null),i.onreadystatechange=function(){i.readyState===XMLHttpRequest.DONE&&(200===i.status?(e.department=JSON.parse(i.responseText),t(e)):t(e))}}else t(e)})},g=function(e,t,n){return new Promise(function(t,n){t(f(e))}).then(function(e){return new Promise(function(n,r){t&&!0===t.department&&(e=m(e)),n(e)}).then(function(e){n(h.formatUser(e))})})},p=function(e,t,n){return new Promise(function(n,r){t&&!0===t.department&&(e=m(e)),n(e)}).then(function(e){n(h.formatUser(e))})},h={initialize:function(n){var i=function(){t(function(){var e=d();e.login&&h.setLoginURL(e.login),h.renderAsLoggedOut()}),n&&n()},o=e.getCookie(\"unl_sso\");o?r([\"https://whoami.unl.edu/?id=\"+o],function(){e.idm.user&&(h.setSessionUser(e.idm.user),delete e.idm.user),h.isLoggedIn()?(n&&n(),t(function(){h.renderAsLoggedIn()})):(h.logout(),i())}):i()},setSessionUser:function(e){c=e,a=e},setUser:function(e){a=e},formatUser:function(e){var t={};return h.setUser(e),a&&(t.unlID=h.getUserId(),t.firstName=h.getFirstName(),t.lastName=h.getLastName(),t.fullName=l(\"displayName\"),t.displayName=h.getDisplayName(),t.emailAddress=h.getEmailAddress(),t.postalAddress=h.getPostalAddress(),t.phoneNumber=h.getTelephoneNumber(),t.title=h.getTitle(),t.orgUnitNumber=h.getPrimaryHROrgUnitNumber(),t.orgUnitName=l(\"unlHRPrimaryDepartment\"),t.primaryAffiliation=h.getPrimaryAffiliation(),t.avatar=a.imageURL,t.profileUrl=h.getProfileURL(),\"department\"in e&&(t.department=e.department)),h.setUser(!1),t},getSessionUser:function(){return c},getSessionUserExtras:function(e,t){p(c,e,t)},getUser:function(e,t,n){g(e,t,n)},logout:function(){e.setCookie(\"unl_sso\",\"0\",-1),a=!1},isLoggedIn:function(){return!!c&&c&&c.uid},getUserId:function(){return a&&a.uid},getDisplayName:function(){var e=\"\";return a.eduPersonNickname?e=a.eduPersonNickname[0]:a.givenName?e=a.givenName[0]:a.displayName&&(e=a.displayName[0]),e},getFirstName:function(){return l(\"givenName\")},getLastName:function(){return l(\"sn\")},getPrimaryAffiliation:function(){return l(\"eduPersonPrimaryAffiliation\")},getEmailAddress:function(){return l(\"mail\")},getPostalAddress:function(){return l(\"postalAddress\")},getTelephoneNumber:function(){return l(\"telephoneNumber\")},getTitle:function(){return l(\"title\")},getPrimaryHROrgUnitNumber:function(){return l(\"unlHROrgUnitNumber\")},getProfileURL:function(){if(!this.isLoggedIn())return!1;var e=this.getUserId(),t=\"unl_\";return\"s-\"===e.substring(2,0)?t+=e.replace(\"-\",\"_\"):t+=e,\"https://planetred.unl.edu/pg/profile/\"+t},renderAsLoggedIn:function(){for(var e=this,t=document.querySelectorAll(\".dcf-idm\"),r=d(),i=0;i<t.length;i++)!function(i){var d=document.createElement(\"BUTTON\");d.classList.add(\"dcf-idm-login\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-relative\",\"dcf-h-100%\",\"dcf-w-100%\",\"dcf-p-0\",\"dcf-b-0\",\"dcf-bg-transparent\",\"unl-font-sans\",\"unl-scarlet\"),d.setAttribute(\"id\",\"dcf-idm-toggle\"),d.setAttribute(\"aria-haspopup\",\"true\"),d.setAttribute(\"aria-expanded\",\"false\"),d.setAttribute(\"aria-controls\",\"dcf-idm-options-\"+i),d.setAttribute(\"aria-label\",\"Account actions for \"+e.getDisplayName());var o=document.createElement(\"IMG\");o.classList.add(\"dcf-idm-img\",\"dcf-txt-sm\",\"dcf-h-6\",\"dcf-w-6\",\"dcf-circle\",\"unl-bg-cream\"),o.setAttribute(\"src\",\"https://directory.unl.edu/avatar/\"+e.getUserId()),o.setAttribute(\"alt\",\"\"),d.appendChild(o);var u=document.createElement(\"SPAN\");u.classList.add(\"dcf-idm-label\",\"dcf-txt-2xs\",\"dcf-truncate\"),u.innerText=e.getDisplayName(),d.appendChild(u);var a=document.createElement(\"DIV\");a.classList.add(\"dcf-idm-options\",\"dcf-absolute\",\"dcf-pt-6\",\"dcf-pr-5\",\"dcf-pb-5\",\"dcf-pl-5\",\"dcf-z-1\",\"dcf-bg-overlay-dark\"),a.setAttribute(\"id\",\"dcf-idm-options-\"+i),a.hidden=!0;var c=document.createElement(\"UL\");c.classList.add(\"dcf-list-bare\",\"dcf-mb-0\",\"dcf-txt-2xs\",\"unl-font-sans\");var l=document.createElement(\"LI\"),f=document.createElement(\"A\");f.classList.add(\"unl-cream\"),f.setAttribute(\"href\",e.getProfileURL()),f.innerText=\"View Profile\",l.appendChild(f),c.appendChild(l);var m=document.createElement(\"LI\"),g=document.createElement(\"A\");g.classList.add(\"unl-cream\"),g.setAttribute(\"href\",s),g.innerText=\"Logout\",m.appendChild(g),c.appendChild(m),a.appendChild(c);var p=t[i].querySelector(\".dcf-idm-status-logged-out\"),v=t[i].querySelector(\".dcf-idm-status-logged-in\");v.innerHTML=\"\",v.appendChild(d),v.appendChild(a);var L=(new n(v,\"idm-logged-in\"),new CustomEvent(\"closeNavigation\")),N=new CustomEvent(\"closeSearch\");document.addEventListener(\"openDropDownWidget\",function(e){\"idm-logged-in\"==e.detail.type&&(document.dispatchEvent(L),document.dispatchEvent(N))}),p.hidden=!0,v.hidden=!1,g.removeEventListener(\"click\",h.logout),g.addEventListener(\"click\",h.logout),h.setLogoutURL(r.logout),g.setAttribute(\"href\",s)}(i);window.dispatchEvent(new Event(\"idmStateSet\"))},renderAsLoggedOut:function(){if(!h.isLoggedIn()){for(var e=document.querySelectorAll(\".dcf-idm\"),t=0;t<e.length;t++){var n=e[t].querySelector(\".dcf-idm-status-logged-out\"),r=e[t].querySelector(\".dcf-idm-status-logged-in\");n.querySelector(\"a\").setAttribute(\"href\",u),r.hidden=!0,n.hidden=!1}window.dispatchEvent(new Event(\"idmStateSet\"))}},setLogoutURL:function(e){e&&(s=e)},setLoginURL:function(e){e&&(u=e)}};return e.idm={},h});
//# sourceMappingURL=idm.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/compressed/idm.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([\"wdn\",\"ready\",\"dropdown-widget\",\"require\"],function(e,t,n,r){\"use strict\";var i=function(e){return document.querySelector(\"link[rel=\"+e+\"]\")},d=function(){var t=i(\"login\"),n=i(\"logout\");return t&&e.setPluginParam(\"idm\",\"login\",t.getAttribute(\"href\")),n&&e.setPluginParam(\"idm\",\"logout\",n.getAttribute(\"href\")),e.getPluginParam(\"idm\")||{}},o=encodeURIComponent(window.location),s=\"https://shib.unl.edu/idp/profile/cas/logout?url=\"+o,u=\"https://shib.unl.edu/idp/profile/cas/login?service=\"+o,a=!1,c=!1,l=function(e){return!(!a||!a[e])&&a[e][0]},f=function(e){return new Promise(function(t,n){var r=new XMLHttpRequest;r.open(\"GET\",\"https://directory.unl.edu/people/\"+e+\".json\"),r.send(null),r.onreadystatechange=function(){r.readyState===XMLHttpRequest.DONE&&(200===r.status?t(JSON.parse(r.responseText)):404===r.status?t({}):n(Error(r.status)))}})},m=function(e){return new Promise(function(t,n){var r=!!(e&&\"unlHROrgUnitNumber\"in e&&e.unlHROrgUnitNumber&&e.unlHROrgUnitNumber.length>0)&&e.unlHROrgUnitNumber[0];if(r){var i=new XMLHttpRequest;i.open(\"GET\",\"https://directory.unl.edu/departments/\"+r+\"?format=json\"),i.send(null),i.onreadystatechange=function(){i.readyState===XMLHttpRequest.DONE&&(200===i.status?(e.department=JSON.parse(i.responseText),t(e)):t(e))}}else t(e)})},g=function(e,t,n){return new Promise(function(t,n){t(f(e))}).then(function(e){return new Promise(function(n,r){t&&!0===t.department&&(e=m(e)),n(e)}).then(function(e){n(h.formatUser(e))})})},p=function(e,t,n){return new Promise(function(n,r){t&&!0===t.department&&(e=m(e)),n(e)}).then(function(e){n(h.formatUser(e))})},h={initialize:function(n){var i=function(){t(function(){var e=d();e.login&&h.setLoginURL(e.login),h.renderAsLoggedOut()}),n&&n()},o=e.getCookie(\"unl_sso\");o?r([\"https://whoami.unl.edu/?id=\"+o],function(){e.idm.user&&(h.setSessionUser(e.idm.user),delete e.idm.user),h.isLoggedIn()?(n&&n(),t(function(){h.renderAsLoggedIn()})):(h.logout(),i())}):i()},setSessionUser:function(e){c=e,a=e},setUser:function(e){a=e},formatUser:function(e){var t={};return h.setUser(e),a&&(t.unlID=h.getUserId(),t.firstName=h.getFirstName(),t.lastName=h.getLastName(),t.fullName=l(\"displayName\"),t.displayName=h.getDisplayName(),t.emailAddress=h.getEmailAddress(),t.postalAddress=h.getPostalAddress(),t.phoneNumber=h.getTelephoneNumber(),t.title=h.getTitle(),t.orgUnitNumber=h.getPrimaryHROrgUnitNumber(),t.orgUnitName=l(\"unlHRPrimaryDepartment\"),t.primaryAffiliation=h.getPrimaryAffiliation(),t.avatar=a.imageURL,t.profileUrl=h.getProfileURL(),\"department\"in e&&(t.department=e.department)),h.setUser(!1),t},getSessionUser:function(){return c},getSessionUserExtras:function(e,t){p(c,e,t)},getUser:function(e,t,n){g(e,t,n)},logout:function(){e.setCookie(\"unl_sso\",\"0\",-1),a=!1},isLoggedIn:function(){return!!c&&c&&c.uid},getUserId:function(){return a&&a.uid},getDisplayName:function(){var e=\"\";return a.eduPersonNickname?e=a.eduPersonNickname[0]:a.givenName?e=a.givenName[0]:a.displayName&&(e=a.displayName[0]),e},getFirstName:function(){return l(\"givenName\")},getLastName:function(){return l(\"sn\")},getPrimaryAffiliation:function(){return l(\"eduPersonPrimaryAffiliation\")},getEmailAddress:function(){return l(\"mail\")},getPostalAddress:function(){return l(\"postalAddress\")},getTelephoneNumber:function(){return l(\"telephoneNumber\")},getTitle:function(){return l(\"title\")},getPrimaryHROrgUnitNumber:function(){return l(\"unlHROrgUnitNumber\")},getProfileURL:function(){if(!this.isLoggedIn())return!1;var e=this.getUserId(),t=\"unl_\";return\"s-\"===e.substring(2,0)?t+=e.replace(\"-\",\"_\"):t+=e,\"https://planetred.unl.edu/pg/profile/\"+t},renderAsLoggedIn:function(){for(var e=this,t=document.querySelectorAll(\".dcf-idm\"),r=d(),i=0;i<t.length;i++)!function(i){var d=document.createElement(\"BUTTON\");d.classList.add(\"dcf-idm-login\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-relative\",\"dcf-h-100%\",\"dcf-w-100%\",\"dcf-p-0\",\"dcf-b-0\",\"dcf-bg-transparent\",\"unl-font-sans\",\"unl-scarlet\"),d.setAttribute(\"id\",\"dcf-idm-toggle\"),d.setAttribute(\"aria-haspopup\",\"true\"),d.setAttribute(\"aria-expanded\",\"false\"),d.setAttribute(\"aria-controls\",\"dcf-idm-options-\"+i),d.setAttribute(\"aria-label\",\"Account actions for \"+e.getDisplayName());var o=document.createElement(\"IMG\");o.classList.add(\"dcf-idm-img\",\"dcf-txt-sm\",\"dcf-h-6\",\"dcf-w-6\",\"dcf-circle\",\"unl-bg-cream\"),o.setAttribute(\"src\",\"https://directory.unl.edu/avatar/\"+e.getUserId()),o.setAttribute(\"alt\",\"\"),d.appendChild(o);var u=document.createElement(\"SPAN\");u.classList.add(\"dcf-idm-label\",\"dcf-txt-2xs\",\"dcf-truncate\"),u.innerText=e.getDisplayName(),d.appendChild(u);var a=document.createElement(\"DIV\");a.classList.add(\"dcf-idm-options\",\"dcf-absolute\",\"dcf-pt-6\",\"dcf-pr-5\",\"dcf-pb-5\",\"dcf-pl-5\",\"dcf-z-1\",\"dcf-bg-overlay-dark\"),a.setAttribute(\"id\",\"dcf-idm-options-\"+i),a.hidden=!0;var c=document.createElement(\"UL\");c.classList.add(\"dcf-list-bare\",\"dcf-mb-0\",\"dcf-txt-2xs\",\"unl-font-sans\");var l=document.createElement(\"LI\"),f=document.createElement(\"A\");f.classList.add(\"unl-cream\"),f.setAttribute(\"href\",e.getProfileURL()),f.innerText=\"View Profile\",l.appendChild(f),c.appendChild(l);var m=document.createElement(\"LI\"),g=document.createElement(\"A\");g.classList.add(\"unl-cream\"),g.setAttribute(\"href\",s),g.innerText=\"Logout\",m.appendChild(g),c.appendChild(m),a.appendChild(c);var p=t[i].querySelector(\".dcf-idm-status-logged-out\"),v=t[i].querySelector(\".dcf-idm-status-logged-in\");v.innerHTML=\"\",v.appendChild(d),v.appendChild(a);var L=(new n(v,\"idm-logged-in\"),new CustomEvent(\"closeNavigation\")),N=new CustomEvent(\"closeSearch\");document.addEventListener(\"openDropDownWidget\",function(e){\"idm-logged-in\"==e.detail.type&&(document.dispatchEvent(L),document.dispatchEvent(N))}),p.hidden=!0,v.hidden=!1,g.removeEventListener(\"click\",h.logout),g.addEventListener(\"click\",h.logout),h.setLogoutURL(r.logout),g.setAttribute(\"href\",s)}(i);window.dispatchEvent(new Event(\"idmStateSet\"))},renderAsLoggedOut:function(){if(!h.isLoggedIn()){for(var e=document.querySelectorAll(\".dcf-idm\"),t=0;t<e.length;t++){var n=e[t].querySelector(\".dcf-idm-status-logged-out\"),r=e[t].querySelector(\".dcf-idm-status-logged-in\");n.querySelector(\"a\").setAttribute(\"href\",u),r.hidden=!0,n.hidden=!1}window.dispatchEvent(new Event(\"idmStateSet\"))}},setLogoutURL:function(e){e&&(s=e)},setLoginURL:function(e){e&&(u=e)}};return e.idm={},h});
//# sourceMappingURL=idm.js.map", "wdn/templates_5.1/js/compressed/idm.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/compressed/idm.js");
    }
}
