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

/* wdn/templates_5.3/scss/critical.scss */
class __TwigTemplate_39ccc84818c3716040379ae8bb1b1e11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/critical.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/critical.scss"));

        // line 1
        echo "////////////
// CRITICAL
////////////


// Variables
@import '../../../node_modules/dcf/scss/variables/**/*';
@import 'variables/**/*';


// Mixins
@import '../../../node_modules/dcf/scss/mixins/**/*';
@import 'mixins/**/*';


// Functions
@import '../../../node_modules/dcf/scss/functions/**/*';


// Critical
html {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
//   line-height: 1.15;
  font-family: Gotham SSm A,Gotham SSm B,Verdana,sans-serif;
  font-style: normal;
  font-weight: 400;
}
// h1 {
//   margin: .67em 0;
// }
// hr {
//   -webkit-box-sizing: content-box;
//   box-sizing: content-box;
//   height: 0;
//   overflow: visible;
// }
// b,
// strong {
//     font-weight: bolder;
// }
svg:not(:root) {
  overflow: hidden;
}
button,
input,
optgroup,
select,
textarea,
figure {
  margin: 0;
}
button {
  overflow: visible;
  text-transform: none;
}
[type=button],
[type=reset],
[type=submit],
button {
  -webkit-appearance: button;
}
// details,
// dialog {
//     display: block;
// }
// dialog:not([open]),
// template {
//   display: none;
// }
*:not([role=\"dialog\"])[hidden] {
  display: none !important;
}
// Do not set dialogs to `display: none` by default
// https://developer.paciellogroup.com/blog/2018/06/the-current-state-of-modal-dialog-accessibility/
[role=\"dialog\"][hidden] {
  display: block !important;
  visibility: hidden !important;
}
*,
::after,
::before {
  box-sizing: border-box;
}
:root {
  --bg-body: #fefdfa;
  --bg-btn-inverse-primary: #e3e3e2;
  --bg-btn-inverse-secondary: transparent;
  --bg-btn-inverse-tertiary: transparent;
  --bg-btn-primary: #d00000;
  --bg-btn-secondary: #fefdfa;
  --bg-btn-tertiary: transparent;
  --b: #e3e3e2;
  --b-btn-primary: #d00000;
  --b-btn-secondary: currentColor;
  --b-btn-tertiary: transparent;
  --b-btn-inverse-primary: #e3e3e2;
  --b-btn-inverse-secondary: currentColor;
  --b-btn-inverse-tertiary: transparent;
  --body: #424240;
  --btn-primary: #fefdfa;
  --btn-secondary: #d00000;
  --btn-tertiary: #d00000;
  --btn-inverse-primary: #d00000;
  --btn-inverse-secondary: #e3e3e2;
  --btn-inverse-tertiary: #e3e3e2;
  --heading: #242423;
  --inverse: #fefdfa;
  --link: #d00000;
  font-size: 1em;
  line-height: 1.5;
}
@media (prefers-color-scheme: dark) {
  :root {
    --bg-body: #171716;
    --bg-btn-inverse-primary: #e3e3e2;
    --bg-btn-inverse-secondary: transparent;
    --bg-btn-inverse-tertiary: transparent;
    --bg-btn-primary: #e3e3e2;
    --bg-btn-secondary: transparent;
    --bg-btn-tertiary: transparent;
    --b: #424240;
    --b-btn-primary: #e3e3e2;
    --b-btn-secondary: currentColor;
    --b-btn-tertiary: transparent;
    --b-btn-inverse-primary: #e3e3e2;
    --b-btn-inverse-secondary: currentColor;
    --b-btn-inverse-tertiary: transparent;
    --body: #f6f6f5;
    --btn-inverse-primary: #d00000;
    --btn-inverse-secondary: #e3e3e2;
    --btn-inverse-tertiary: #e3e3e2;
    --btn-primary: #d00000;
    --btn-secondary: #e3e3e2;
    --btn-tertiary: #e3e3e2;
    --heading: #fefdfa;
    --link: #f6f6f5;
  }
}
@media screen and (min-width:31.57em) {
  :root {
    font-size: calc(.93em + .23vw);
  }
}
@media screen and (min-width:177.38em) {
  :root {
    font-size: 1.33em;
  }
}
// a {
//   -webkit-text-decoration-skip: ink;
//   text-decoration-skip: ink;
// }
a,
a:link {
  color: var(--link);
}
body {
  background-color: var(--bg-body);
  color: var(--body);
  margin: 0;
  overflow-x: hidden;
}
button,
input[type=button],
input[type=submit] {
  display: inline-block;
  font-family: inherit;
  font-size: 1em;
  line-height: 1.5;
  padding: .56em 1em;
  text-align: center;
}
// figure {
// \tmargin: 0;
// }
h1 {
  font-size: 2em;
}
h2 {
  font-size: 1.78em;
}
h3 {
  font-size: 1.5em;
}
h1,
h2,
h3 {
  color: var(--heading);
  line-height: 1.13;
  margin-bottom: 1rem;
  margin-top: 0;
}
h1+h2,
h2+h2,
h2+h3,
h3+h3,
h3+h4,
ol+h2,
ol+h3,
p:not(.dcf-subhead)+h2,
p:not(.dcf-subhead)+h3,
p:not(.dcf-subhead)+h4,
p:not(.dcf-subhead)+h5,
p:not(.dcf-subhead)+h6,
ul+h2,
ul+h3 {
  margin-top: 1.33em;
}
img {
  height: auto;
  max-width: 100%;
}
ol,
ul {
  padding-left: 1.78em;
}
dl,
ol,
ul {
  margin-bottom: 1em;
  margin-top: 0;
}
main {
  display: block;
}
p {
  margin-bottom: 1rem;
  margin-top: 0;
}
body:lang(en) {
  quotes: \"“\" \"”\" \"‘\" \"’\" \"“\" \"”\" \"‘\" \"’\";
}
q::before {
  content: open-quote;
}
q::after {
  content: close-quote;
}
small {
  font-size: 1rem;
}
// sub,
// sup {
//   font-size: .63em;
//   position: relative;
//   vertical-align: baseline;
// }
// sup {
//   top: -.56em;
// }
// sub {
//   top: .24em;
// }


// !Objects
.dcf-bleed {
  left: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  position: relative;
  right: 50%;
  width: 100vw;
}
.dcf-wrapper {
  padding-left: 5.62vw;
  padding-right: 5.62vw;
}


// !Components
.dcf-breadcrumbs li {
  align-items: center;
  display: flex;
}
.dcf-btn {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: inline-block;
  text-align: center;
}
a.dcf-btn-primary,
a.dcf-btn-secondary {
  text-decoration: none;
}
.dcf-header a,
.dcf-header a:link {
  text-decoration: none;
}
.dcf-nav-local ul {
  // Fix list-style: none in VoiceOver and Safari: https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  margin-bottom: 0;
  padding-left: 0;
}
// .dcf-h1,
// .dcf-h2,
// .dcf-h3,
// .dcf-h4,
// .dcf-h5,
// .dcf-h6 {
//   line-height: 1.13;
//   margin-bottom: 1rem;
//   margin-top: 0;
// }
// .dcf-h1+.dcf-h1,
// .dcf-h1+.dcf-h2,
// .dcf-h1+.dcf-h3,
// .dcf-h1+.dcf-h4,
// .dcf-h1+.dcf-h5,
// .dcf-h1+.dcf-h6,
// .dcf-h2+.dcf-h1,
// .dcf-h2+.dcf-h2,
// .dcf-h2+.dcf-h3,
// .dcf-h2+.dcf-h4,
// .dcf-h2+.dcf-h5,
// .dcf-h2+.dcf-h6,
// .dcf-h3+.dcf-h1,
// .dcf-h3+.dcf-h2,
// .dcf-h3+.dcf-h3,
// .dcf-h3+.dcf-h4,
// .dcf-h3+.dcf-h5,
// .dcf-h3+.dcf-h6,
// .dcf-h4+.dcf-h1,
// .dcf-h4+.dcf-h2,
// .dcf-h4+.dcf-h3,
// .dcf-h4+.dcf-h4,
// .dcf-h4+.dcf-h5,
// .dcf-h4+.dcf-h6,
// .dcf-h5+.dcf-h1,
// .dcf-h5+.dcf-h2,
// .dcf-h5+.dcf-h3,
// .dcf-h5+.dcf-h4,
// .dcf-h5+.dcf-h5,
// .dcf-h5+.dcf-h6,
// .dcf-h6+.dcf-h1,
// .dcf-h6+.dcf-h2,
// .dcf-h6+.dcf-h3,
// .dcf-h6+.dcf-h4,
// .dcf-h6+.dcf-h5,
// .dcf-h6+.dcf-h6,
// ol+.dcf-h1,
// ol+.dcf-h2,
// ol+.dcf-h3,
// ol+.dcf-h4,
// ol+.dcf-h5,
// ol+.dcf-h6,
// p:not(.dcf-subhead)+.dcf-h1,
// p:not(.dcf-subhead)+.dcf-h2,
// p:not(.dcf-subhead)+.dcf-h3,
// p:not(.dcf-subhead)+.dcf-h4,
// p:not(.dcf-subhead)+.dcf-h5,
// p:not(.dcf-subhead)+.dcf-h6,
// ul+.dcf-h1,
// ul+.dcf-h2,
// ul+.dcf-h3,
// ul+.dcf-h4,
// ul+.dcf-h5,
// ul+.dcf-h6 {
//   margin-top: 1.33em;
// }
.unl .dcf-breadcrumbs {
  font-size: .63em;
}
.unl .dcf-breadcrumbs ol {
  display: flex;
  flex-wrap: nowrap;
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  padding-left: 5.62vw;
}
.unl .dcf-breadcrumbs li {
  margin-bottom: 0;
}
.unl .dcf-breadcrumbs li:last-child {
  padding-right: 5.62vw;
}
.unl .dcf-breadcrumbs li:not(:last-child) {
  margin-right: .56em;
}
.unl .dcf-breadcrumbs li:not(:last-child)::after {
  border-bottom: .32em solid transparent;
  border-left: .32em solid #c7c8ca;
  border-top: .32em solid transparent;
  content: \"\";
  margin-left: .56em;
}
.unl .dcf-btn {
  border-style: solid;
  border-width: 2px;
  font-size: .84em;
  font-weight: 700;
  padding: .75em 1em;
}
.unl .dcf-btn-inverse-primary {
  background-color: var(--bg-btn-inverse-primary);
  border-color: var(--b-btn-inverse-primary);
  color: var(--btn-inverse-primary);
}
.unl .dcf-btn-inverse-secondary {
  background-color: var(--bg-btn-inverse-secondary);
  border-color: var(--b-btn-inverse-secondary);
  color: var(--btn-inverse-secondary);
}
.unl .dcf-btn-inverse-tertiary {
  background-color: var(--bg-btn-inverse-tertiary);
  border-color: var(--b-btn-inverse-tertiary);
  color: var(--btn-inverse-tertiary);
}
.unl .dcf-btn-primary {
  background-color: var(--bg-btn-primary);
  border-color: var(--b-btn-primary);
  color: var(--btn-primary);
}
.unl .dcf-btn-secondary {
  background-color: var(--bg-btn-secondary);
  border-color: var(--b-btn-secondary);
  color: var(--btn-secondary);
}
.unl .dcf-btn-tertiary {
  background-color: var(--bg-btn-tertiary);
  border-color: var(--b-btn-tertiary);
  color: var(--btn-tertiary);
}
.unl-institution-title-ls {
  letter-spacing: .32em;
}
.unl .dcf-site-group {
  min-height: 3.16em;
}
.unl .dcf-site-affiliation a {
  display: inline-block;
  padding-bottom: .42em;
}
.unl .dcf-site-affiliation a,
.unl .dcf-site-title a {
  color: var(--heading);
}
.unl h1,
.unl h2,
.unl h3 {
  font-weight: 700;
  letter-spacing: -.03em;
  margin-left: -.03em;
}
.unl h1 a,
.unl h2 a,
.unl h3 a {
  text-decoration: none;
}
.unl .dcf-subhead {
  font-weight: 400;
  font-size: .75rem;
  letter-spacing: .1em;
  line-height: 1.33;
  margin-bottom: .75em;
  text-transform: uppercase;
}
// .unl .dcf-hero-default {
//   background-color: #ebebea;
//   margin-bottom: 3.16em;
//   padding-top: 1.33em;
//   padding-bottom: 1em;
// }
.unl .dcf-hero-default .dcf-page-title {
  padding-left: 5.62vw;
  padding-right: 5.62vw;
  padding-top: 1.78em;
}
// .unl-hero-notch-stripe .dcf-hero-group-1,
// .unl-hero-notch-stripe .dcf-hero-group-2 {
//   position: relative;
// }
// .unl-hero-notch-stripe .dcf-hero-group-1 {
//   min-width: 0;
//   margin-top: -2.67em;
//   order: 2;
//   width: 100%;
// }
// .unl .dcf-hero-sm {
//   height: 23.67696878vh;
//   max-height: 13.32em;
//   min-height: 10em;
// }
// .unl .dcf-hero-md {
//   height: 42.09vh;
//   max-height: 23.68em;
//   min-height: 17.76em;
// }
// .unl .dcf-hero-lg {
//   height: 56.12vh;
//   max-height: 31.57em;
//   min-height: 23.68em;
// }
.unl .dcf-page-title h1 {
  margin-top: 0;
}
.unl .dcf-page-title h1,
.unl .dcf-page-title h1+.dcf-subhead {
  margin-bottom: 0;
}
.unl .dcf-page-title h1+.dcf-subhead {
  margin-top: 1rem;
}
// .unl .dcf-hero-photo-credit {
//   margin: 0;
//   right: .42em;
//   text-shadow: 1px 1px 1em rgba(36,36,35,.5);
//   top: 1.78em;
// }
.unl .dcf-nav-local a:link {
  color: #fefdfa;
}
.unl .dcf-nav-local > ul:first-child {
  display: grid;
}
.unl .dcf-nav-menu li {
  margin-bottom: 0;
}
.unl .dcf-nav-menu-child a,
.unl .dcf-nav-menu-child button {
  color: #fefdfa;
  display: block;
  line-height: 1.33;
  padding: 1em 1rem;
}
.unl .dcf-nav-menu-child > ul > li > a,
.unl .dcf-nav-menu-child button {
  font-weight: 700;
}
.unl .dcf-nav-toggle-btn {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.unl.app .dcf-app-controls button {
  background-color: transparent;
  border: 0;
}


// !Utilities
.dcf-bg-transparent {
  background-color: transparent!important;
}
// .dcf-bg-center {
//     background-position: 50%!important;
// }
// .dcf-bg-top {
//     background-position: top!important;
// }
// .dcf-bg-right {
//     background-position: 100%!important;
// }
// .dcf-bg-right-top {
//     background-position: 100% 0!important;
// }
// .dcf-bg-right-bottom {
//     background-position: 100% 100%!important;
// }
// .dcf-bg-bottom {
//     background-position: bottom!important;
// }
// .dcf-bg-left {
//     background-position: 0!important;
// }
// .dcf-bg-left-top {
//     background-position: 0 0!important;
// }
// .dcf-bg-left-bottom {
//     background-position: 0 100%!important;
// }
// .dcf-bg-no-repeat {
//     background-repeat: no-repeat!important;
// }
// .dcf-bg-repeat {
//     background-repeat: repeat!important;
// }
// .dcf-bg-repeat-x {
//     background-repeat: repeat-x!important;
// }
// .dcf-bg-repeat-y {
//     background-repeat: repeat-y!important;
// }
// .dcf-bg-contain {
//     background-size: contain!important;
// }
// .dcf-bg-cover {
//     background-size: cover!important;
// }
// .dcf-bg-none {
//     background: none!important;
// }
// .dcf-b-current {
//     border-color: currentColor!important;
// }
// .dcf-bt-current {
//     border-top-color: currentColor!important;
// }
// .dcf-br-current {
//     border-right-color: currentColor!important;
// }
// .dcf-bb-current {
//     border-bottom-color: currentColor!important;
// }
// .dcf-bl-current {
//     border-left-color: currentColor!important;
// }
// .dcf-b-transparent {
//     border-color: transparent!important;
// }
// .dcf-bt-transparent {
//     border-top-color: transparent!important;
// }
// .dcf-br-transparent {
//     border-right-color: transparent!important;
// }
// .dcf-bb-transparent {
//     border-bottom-color: transparent!important;
// }
// .dcf-bl-transparent {
//     border-left-color: transparent!important;
// }
.dcf-circle {
  border-radius: 50%!important;
}
.dcf-b-solid {
  border-style: solid!important;
}
.dcf-bt-solid {
  border-top-style: solid!important;
}
// .dcf-br-solid {
//     border-right-style: solid!important;
// }
// .dcf-bb-solid {
//     border-bottom-style: solid!important;
// }
// .dcf-bl-solid {
//     border-left-style: solid!important;
// }
.dcf-b-0 {
  border-width: 0!important;
}
.dcf-b-1 {
  border-width: 1px!important;
}
// .dcf-b-2 {
//     border-width: 2px!important;
// }
// .dcf-b-3 {
//     border-width: 3px!important;
// }
// .dcf-bt-0 {
//     border-top-width: 0!important;
// }
// .dcf-bt-1 {
//     border-top-width: 1px!important;
// }
.dcf-bt-2 {
  border-top-width: 2px!important;
}
.dcf-bt-3 {
  border-top-width: 3px!important;
}
// .dcf-br-0 {
//     border-right-width: 0!important;
// }
// .dcf-br-1 {
//     border-right-width: 1px!important;
// }
// .dcf-br-2 {
//     border-right-width: 2px!important;
// }
// .dcf-br-3 {
//     border-right-width: 3px!important;
// }
// .dcf-bb-0 {
//     border-bottom-width: 0!important;
// }
// .dcf-bb-1 {
//     border-bottom-width: 1px!important;
// }
// .dcf-bb-2 {
//     border-bottom-width: 2px!important;
// }
// .dcf-bb-3 {
//     border-bottom-width: 3px!important;
// }
// .dcf-bl-0 {
//     border-left-width: 0!important;
// }
// .dcf-bl-1 {
//     border-left-width: 1px!important;
// }
// .dcf-bl-2 {
//     border-left-width: 2px!important;
// }
// .dcf-bl-3 {
//     border-left-width: 3px!important;
// }
// .dcf-ai-flex-start {
//     -webkit-box-align: start!important;
//     align-items: flex-start!important;
// }
.dcf-ai-flex-end {
  align-items: flex-end!important;
}
.dcf-ai-center {
  align-items: center!important;
}
// .dcf-ai-baseline {
//     -webkit-box-align: baseline!important;
//     align-items: baseline!important;
// }
// .dcf-ai-stretch {
//     -webkit-box-align: stretch!important;
//     align-items: stretch!important;
// }
// .dcf-ai-start {
//     -webkit-box-align: start!important;
//     align-items: start!important;
// }
// .dcf-ai-end {
//     -webkit-box-align: end!important;
//     align-items: end!important;
// }
// .dcf-ac-flex-start {
//     align-content: flex-start!important;
// }
// .dcf-ac-flex-end {
//     align-content: flex-end!important;
// }
// .dcf-ac-center {
//     align-content: center!important;
// }
// .dcf-ac-stretch {
//     align-content: stretch!important;
// }
// .dcf-ac-around {
//     align-content: space-around!important;
// }
// .dcf-ac-between {
//     align-content: space-between!important;
// }
// .dcf-ac-evenly {
//     align-content: space-evenly!important;
// }
// .dcf-ac-start {
//     align-content: start!important;
// }
// .dcf-ac-end {
//     align-content: end!important;
// }
// .dcf-as-auto {
//     -ms-grid-row-align: auto!important;
//     align-self: auto!important;
// }
// .dcf-as-flex-start {
//     align-self: flex-start!important;
// }
// .dcf-as-flex-end {
//     align-self: flex-end!important;
// }
// .dcf-as-center {
//     -ms-grid-row-align: center!important;
//     align-self: center!important;
// }
// .dcf-as-baseline {
//     align-self: baseline!important;
// }
// .dcf-as-stretch {
//     -ms-grid-row-align: stretch!important;
//     align-self: stretch!important;
// }
// .dcf-as-start {
//     -ms-grid-row-align: start!important;
//     align-self: start!important;
// }
// .dcf-as-end {
//     -ms-grid-row-align: end!important;
//     align-self: end!important;
// }
// .dcf-ji-start {
//     justify-items: start!important;
// }
// .dcf-ji-end {
//     justify-items: end!important;
// }
// .dcf-ji-center {
//     justify-items: center!important;
// }
// .dcf-ji-stretch {
//     justify-items: stretch!important;
// }
// .dcf-jc-flex-start {
//     -webkit-box-pack: start!important;
//     justify-content: flex-start!important;
// }
.dcf-jc-flex-end {
  justify-content: flex-end!important;
}
.dcf-jc-center {
  justify-content: center!important;
}
// .dcf-jc-around {
//     justify-content: space-around!important;
// }
.dcf-jc-between {
  justify-content: space-between!important;
}
// .dcf-jc-evenly {
//     -webkit-box-pack: space-evenly!important;
//     justify-content: space-evenly!important;
// }
// .dcf-jc-start {
//     -webkit-box-pack: start!important;
//     justify-content: start!important;
// }
// .dcf-jc-end {
//     -webkit-box-pack: end!important;
//     justify-content: end!important;
// }
// .dcf-jc-stretch {
//     -webkit-box-pack: stretch!important;
//     justify-content: stretch!important;
// }
// .dcf-js-start {
//     -ms-grid-column-align: start!important;
//     justify-self: start!important;
// }
// .dcf-js-center {
//     -ms-grid-column-align: center!important;
//     justify-self: center!important;
// }
// .dcf-js-end {
//     -ms-grid-column-align: end!important;
//     justify-self: end!important;
// }
// .dcf-js-stretch {
//     -ms-grid-column-align: stretch!important;
//     justify-self: stretch!important;
// }
// .dcf-inverse,
// a.dcf-inverse:link {
//     color: #fefdfa!important;
// }
.dcf-d-none {
  display: none!important;
}
.dcf-d-block {
  display: block!important;
}
// .dcf-d-inline {
//     display: inline!important;
// }
// .dcf-d-inline-block {
//     display: inline-block!important;
// }
// .dcf-d-table {
//     display: table!important;
// }
// .dcf-d-table-cell {
//     display: table-cell!important;
// }
.dcf-d-flex {
  display: flex!important;
}
// .dcf-d-inline-flex {
//     display: -webkit-inline-box!important;
//     display: inline-flex!important;
// }
// @supports ((display:-ms-grid) or (display:grid)) {
//     .dcf-d-grid {
//         display: -ms-grid!important;
//         display: grid!important;
//     }
// }
.dcf-flex-col {
  flex-direction: column!important;
}
// .dcf-flex-col,
// .dcf-flex-col-rev {
//     -webkit-box-orient: vertical!important;
// }
// .dcf-flex-col-rev {
//     -webkit-box-direction: reverse!important;
//     flex-direction: column-reverse!important;
// }
.dcf-flex-row {
  flex-direction: row!important;
}
// .dcf-flex-row,
// .dcf-flex-row-rev {
//     -webkit-box-orient: horizontal!important;
// }
// .dcf-flex-row-rev {
//     -webkit-box-direction: reverse!important;
//     flex-direction: row-reverse!important;
// }
.dcf-flex-wrap {
  flex-wrap: wrap!important;
}
// .dcf-flex-wrap-rev {
//     flex-wrap: wrap-reverse!important;
// }
.dcf-flex-nowrap {
  flex-wrap: nowrap!important;
}
// .dcf-flex-none {
//     -webkit-box-flex: 0!important;
//     flex: none!important;
// }
// .dcf-flex-initial {
//     -webkit-box-flex: initial!important;
//     flex: initial!important;
// }
// .dcf-flex-auto {
//     flex: auto!important;
// }
// .dcf-flex-1,
// .dcf-flex-auto {
//     -webkit-box-flex: 1!important;
// }
// .dcf-flex-1 {
//     flex: 1!important;
// }
.dcf-flex-grow-1 {
  flex-grow: 1!important;
}
.dcf-flex-shrink-0 {
  flex-shrink: 0!important;
}
// .dcf-h-auto {
//     height: auto!important;
// }
// .dcf-h-0 {
//     height: 0!important;
// }
// .dcf-h-1 {
//     height: .42em!important;
// }
// .dcf-h-2 {
//     height: .56em!important;
// }
// .dcf-h-3 {
//     height: .75em!important;
// }
.dcf-h-4 {
  height: 1em!important;
}
.dcf-h-5 {
  height: 1.33em!important;
}
.dcf-h-6 {
  height: 1.78em!important;
}
// .dcf-h-7 {
//     height: 2.37em!important;
// }
.dcf-h-8 {
  height: 3.16em!important;
}
.dcf-h-9 {
  height: 4.21em!important;
}
// .dcf-h-10 {
//     height: 5.62em!important;
// }
.dcf-h-100\\% {
  height: 100%!important;
}
// .dcf-h-100vh {
//     height: 100vh!important;
// }
// .dcf-h-min-0 {
//     min-height: 0!important;
// }
// .dcf-h-min-100vh {
//     min-height: 100vh!important;
// }
// .dcf-h-max-100\\% {
//     max-height: 100%!important;
// }
// .dcf-h-max-100vh {
//     max-height: 100vh!important;
// }
// .dcf-w-auto {
//     width: auto!important;
// }
// .dcf-w-0 {
//     width: 0!important;
// }
// .dcf-w-1 {
//     width: .42em!important;
// }
// .dcf-w-2 {
//     width: .56em!important;
// }
// .dcf-w-3 {
//     width: .75em!important;
// }
.dcf-w-4 {
  width: 1em!important;
}
.dcf-w-5 {
  width: 1.33em!important;
}
.dcf-w-6 {
  width: 1.78em!important;
}
// .dcf-w-7 {
//     width: 2.37em!important;
// }
.dcf-w-8 {
  width: 3.16em!important;
}
.dcf-w-9 {
  width: 4.21em!important;
}
// .dcf-w-10 {
//     width: 5.62em!important;
// }
.dcf-w-100\\% {
  width: 100%!important;
}
// .dcf-w-100vw {
//     width: 100vw!important;
// }
.dcf-w-min-0 {
  min-width: 0!important;
}
// .dcf-w-max-100\\% {
//     max-width: 100%!important;
// }
// .dcf-w-max-100vw {
//     max-width: 100vw!important;
// }
.dcf-list-bare {
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  padding-left: 0;
}
// .dcf-m-auto {
//     margin: auto!important !important;
// }
// .dcf-m-0 {
//     margin: 0!important !important;
// }
// .dcf-m-1 {
//     margin: .42em!important !important;
// }
// .dcf-m-2 {
//     margin: .56em!important !important;
// }
// .dcf-m-3 {
//     margin: .75em!important !important;
// }
// .dcf-m-4 {
//     margin: 1em!important !important;
// }
// .dcf-m-5 {
//     margin: 1.33em!important !important;
// }
// .dcf-m-6 {
//     margin: 1.78em!important !important;
// }
// .dcf-m-7 {
//     margin: 2.37em!important !important;
// }
// .dcf-m-8 {
//     margin: 3.16em!important !important;
// }
// .dcf-m-9 {
//     margin: 4.21em!important !important;
// }
// .dcf-m-10 {
//     margin: 5.62em!important !important;
// }
// .dcf-mt-auto {
//     margin-top: auto!important;
// }
// .dcf-mt-0 {
//     margin-top: 0!important;
// }
.dcf-mt-1 {
  margin-top: .42em!important;
}
// .dcf-mt-2 {
//     margin-top: .56em!important;
// }
// .dcf-mt-3 {
//     margin-top: .75em!important;
// }
// .dcf-mt-4 {
//     margin-top: 1em!important;
// }
// .dcf-mt-5 {
//     margin-top: 1.33em!important;
// }
// .dcf-mt-6 {
//     margin-top: 1.78em!important;
// }
// .dcf-mt-7 {
//     margin-top: 2.37em!important;
// }
// .dcf-mt-8 {
//     margin-top: 3.16em!important;
// }
// .dcf-mt-9 {
//     margin-top: 4.21em!important;
// }
// .dcf-mt-10 {
//     margin-top: 5.62em!important;
// }
// .dcf-mr-auto {
//     margin-right: auto!important;
// }
// .dcf-mr-0 {
//     margin-right: 0!important;
// }
// .dcf-mr-1 {
//     margin-right: .42em!important;
// }
// .dcf-mr-2 {
//     margin-right: .56em!important;
// }
.dcf-mr-3 {
  margin-right: .75em!important;
}
.dcf-mr-4 {
  margin-right: 1em!important;
}
// .dcf-mr-5 {
//     margin-right: 1.33em!important;
// }
// .dcf-mr-6 {
//     margin-right: 1.78em!important;
// }
// .dcf-mr-7 {
//     margin-right: 2.37em!important;
// }
// .dcf-mr-8 {
//     margin-right: 3.16em!important;
// }
// .dcf-mr-9 {
//     margin-right: 4.21em!important;
// }
// .dcf-mr-10 {
//     margin-right: 5.62em!important;
// }
// .dcf-mb-auto {
//     margin-bottom: auto!important;
// }
// .dcf-mb-0 {
//     margin-bottom: 0!important;
// }
.dcf-mb-1 {
  margin-bottom: .42em!important;
}
// .dcf-mb-2 {
//     margin-bottom: .56em!important;
// }
// .dcf-mb-3 {
//     margin-bottom: .75em!important;
// }
// .dcf-mb-4 {
//     margin-bottom: 1em!important;
// }
// .dcf-mb-5 {
//     margin-bottom: 1.33em!important;
// }
.dcf-mb-6 {
  margin-bottom: 1.78em!important;
}
// .dcf-mb-7 {
//     margin-bottom: 2.37em!important;
// }
// .dcf-mb-8 {
//     margin-bottom: 3.16em!important;
// }
// .dcf-mb-9 {
//     margin-bottom: 4.21em!important;
// }
// .dcf-mb-10 {
//     margin-bottom: 5.62em!important;
// }
// .dcf-ml-auto {
//     margin-left: auto!important;
// }
// .dcf-ml-0 {
//     margin-left: 0!important;
// }
// .dcf-ml-1 {
//     margin-left: .42em!important;
// }
// .dcf-ml-2 {
//     margin-left: .56em!important;
// }
// .dcf-ml-3 {
//     margin-left: .75em!important;
// }
// .dcf-ml-4 {
//     margin-left: 1em!important;
// }
// .dcf-ml-5 {
//     margin-left: 1.33em!important;
// }
// .dcf-ml-6 {
//     margin-left: 1.78em!important;
// }
// .dcf-ml-7 {
//     margin-left: 2.37em!important;
// }
// .dcf-ml-8 {
//     margin-left: 3.16em!important;
// }
// .dcf-ml-9 {
//     margin-left: 4.21em!important;
// }
// .dcf-ml-10 {
//     margin-left: 5.62em!important;
// }
.dcf-obj-fit-contain {
  object-fit: contain!important;
}
.dcf-obj-fit-contain,
.dcf-obj-fit-cover {
  height: 100%!important;
  width: 100%!important;
}
.dcf-obj-fit-cover {
  object-fit: cover!important;
}
// .dcf-overflow-visible {
//     overflow: visible!important;
// }
// .dcf-overflow-x-visible {
//     overflow-x: visible!important;
// }
// .dcf-overflow-y-visible {
//     overflow-y: visible!important;
// }
.dcf-overflow-hidden {
  overflow: hidden!important;
}
// .dcf-overflow-x-hidden {
//     overflow-x: hidden!important;
// }
// .dcf-overflow-y-hidden {
//     overflow-y: hidden!important;
// }
// .dcf-overflow-auto {
//     overflow: auto!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-x-auto {
//     overflow-x: auto!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-y-auto {
//     overflow-y: auto!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-scroll {
//     overflow: scroll!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-x-scroll {
//     overflow-x: scroll!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-y-scroll {
//     overflow-y: scroll!important;
//     -webkit-overflow-scrolling: touch;
// }
.dcf-p-0 {
  padding: 0!important;
}
// .dcf-p-1 {
//     padding: .42em!important !important;
// }
// .dcf-p-2 {
//     padding: .56em!important !important;
// }
// .dcf-p-3 {
//     padding: .75em!important !important;
// }
// .dcf-p-4 {
//     padding: 1em!important !important;
// }
// .dcf-p-5 {
//     padding: 1.33em!important !important;
// }
// .dcf-p-6 {
//     padding: 1.78em!important !important;
// }
// .dcf-p-7 {
//     padding: 2.37em!important !important;
// }
// .dcf-p-8 {
//     padding: 3.16em!important !important;
// }
// .dcf-p-9 {
//     padding: 4.21em!important !important;
// }
// .dcf-p-10 {
//     padding: 5.62em!important !important;
// }
// .dcf-pt-0 {
//     padding-top: 0!important;
// }
// .dcf-pt-1 {
//     padding-top: .42em!important;
// }
// .dcf-pt-2 {
//     padding-top: .56em!important;
// }
.dcf-pt-3 {
  padding-top: .75em!important;
}
// .dcf-pt-4 {
//     padding-top: 1em!important;
// }
// .dcf-pt-5 {
//     padding-top: 1.33em!important;
// }
// .dcf-pt-6 {
//     padding-top: 1.78em!important;
// }
// .dcf-pt-7 {
//     padding-top: 2.37em!important;
// }
// .dcf-pt-8 {
//     padding-top: 3.16em!important;
// }
// .dcf-pt-9 {
//     padding-top: 4.21em!important;
// }
// .dcf-pt-10 {
//     padding-top: 5.62em!important;
// }
// .dcf-pr-0 {
//     padding-right: 0!important;
// }
// .dcf-pr-1 {
//     padding-right: .42em!important;
// }
// .dcf-pr-2 {
//     padding-right: .56em!important;
// }
// .dcf-pr-3 {
//     padding-right: .75em!important;
// }
// .dcf-pr-4 {
//     padding-right: 1em!important;
// }
// .dcf-pr-5 {
//     padding-right: 1.33em!important;
// }
// .dcf-pr-6 {
//     padding-right: 1.78em!important;
// }
// .dcf-pr-7 {
//     padding-right: 2.37em!important;
// }
// .dcf-pr-8 {
//     padding-right: 3.16em!important;
// }
// .dcf-pr-9 {
//     padding-right: 4.21em!important;
// }
// .dcf-pr-10 {
//     padding-right: 5.62em!important;
// }
// .dcf-pb-0 {
//     padding-bottom: 0!important;
// }
// .dcf-pb-1 {
//     padding-bottom: .42em!important;
// }
// .dcf-pb-2 {
//     padding-bottom: .56em!important;
// }
.dcf-pb-3 {
  padding-bottom: .75em!important;
}
// .dcf-pb-4 {
//     padding-bottom: 1em!important;
// }
// .dcf-pb-5 {
//     padding-bottom: 1.33em!important;
// }
// .dcf-pb-6 {
//     padding-bottom: 1.78em!important;
// }
// .dcf-pb-7 {
//     padding-bottom: 2.37em!important;
// }
// .dcf-pb-8 {
//     padding-bottom: 3.16em!important;
// }
// .dcf-pb-9 {
//     padding-bottom: 4.21em!important;
// }
// .dcf-pb-10 {
//     padding-bottom: 5.62em!important;
// }
// .dcf-pl-0 {
//     padding-left: 0!important;
// }
// .dcf-pl-1 {
//     padding-left: .42em!important;
// }
// .dcf-pl-2 {
//     padding-left: .56em!important;
// }
// .dcf-pl-3 {
//     padding-left: .75em!important;
// }
// .dcf-pl-4 {
//     padding-left: 1em!important;
// }
// .dcf-pl-5 {
//     padding-left: 1.33em!important;
// }
// .dcf-pl-6 {
//     padding-left: 1.78em!important;
// }
// .dcf-pl-7 {
//     padding-left: 2.37em!important;
// }
// .dcf-pl-8 {
//     padding-left: 3.16em!important;
// }
// .dcf-pl-9 {
//     padding-left: 4.21em!important;
// }
// .dcf-pl-10 {
//     padding-left: 5.62em!important;
// }
// .dcf-static {
//     position: static!important;
// }
.dcf-relative {
  position: relative!important;
}
.dcf-absolute {
  position: absolute!important;
}
.dcf-fixed {
  position: fixed!important;
}
// .dcf-pin-top {
//     top: 0!important;
// }
// .dcf-pin-right {
//     right: 0!important;
// }
.dcf-pin-bottom {
  bottom: 0!important;
}
// .dcf-pin-left {
//     left: 0!important;
// }
.dcf-fill-current {
  fill: currentColor!important;
}
// .dcf-stroke-current {
//     stroke: currentColor!important;
// }
// .dcf-txt-center {
//     text-align: center!important;
// }
.dcf-txt-left {
  text-align: left!important;
}
// .dcf-txt-right {
//     text-align: right!important;
// }
// .dcf-txt-baseline {
//     vertical-align: baseline!important;
// }
// .dcf-txt-top {
//     vertical-align: top!important;
// }
// .dcf-txt-middle {
//     vertical-align: middle!important;
// }
// .dcf-txt-bottom {
//     vertical-align: bottom!important;
// }
// .dcf-txt-text-top {
//     vertical-align: text-top!important;
// }
// .dcf-txt-text-bottom {
//     vertical-align: text-bottom!important;
// }
// .dcf-txt-decor-hover,
// .dcf-txt-decor-none {
//     text-decoration: none!important;
// }
// .dcf-truncate,
// .dcf-txt-nowrap {
//     white-space: nowrap!important;
// }
// .dcf-truncate {
//     overflow: hidden!important;
//     text-overflow: ellipsis!important;
// }
// .dcf-roman {
//     font-style: normal!important;
// }
.dcf-italic {
  font-style: italic!important;
}
// .dcf-regular {
//     font-weight: 400!important;
// }
.dcf-bold {
  font-weight: 700!important;
}
// .dcf-lh-1 {
//     line-height: 1!important;
// }
.dcf-lh-2 {
  line-height: 1.13!important;
}
.dcf-lh-3 {
  line-height: 1.33!important;
}
// .dcf-lh-4 {
//     line-height: 1.5!important;
// }
// .dcf-capitalize {
//     text-transform: capitalize!important;
// }
// .dcf-lowercase {
//     text-transform: lowercase!important;
// }
.dcf-uppercase {
  text-transform: uppercase!important;
}
// .dcf-case-reset {
//     text-transform: none!important;
// }
// .dcf-measure {
//     max-width: 31.5692916987rem!important;
// }
.dcf-txt-vertical-lr {
  transform: translateY(-100%) rotate(90deg);
  transform-origin: 0 100%;
}
@supports ((-webkit-writing-mode:vertical-lr) or (writing-mode:vertical-lr)) {
  .dcf-txt-vertical-lr {
    transform: none;
    -webkit-writing-mode: vertical-lr;
    -ms-writing-mode: tb-lr;
    writing-mode: vertical-lr;
  }
}
.dcf-invisible {
    visibility: hidden!important;
}
// .dcf-visible {
//     visibility: visible!important;
// }
.dcf-sr-only,
.dcf-show-on-focus:not(:focus):not(:active) {
  clip: rect(0 0 0 0)!important;
  -webkit-clip-path: inset(50%)!important;
  clip-path: inset(50%)!important;
  height: 1px!important;
  overflow: hidden!important;
  position: absolute!important;
  width: 1px!important;
  white-space: nowrap!important;
}
// .dcf-z-0 {
//     z-index: 0!important;
// }
// .dcf-z-1 {
//     z-index: 1!important;
// }
// .dcf-z-2 {
//     z-index: 2!important;
// }
.unl-bg-scarlet {
  background-color: #d00000!important;
}
.unl-bg-cream {
  background-color: var(--bg-body) !important;
}
// .unl-bg-light-gray {
//     background-color: #e3e3e2!important;
// }
// .unl-bg-lighter-gray {
//     background-color: #ebebea!important;
// }
// .unl-bg-lightest-gray {
//     background-color: #f6f6f5!important;
// }
// .unl-bg-dark-gray {
//     background-color: #6b6b68!important;
// }
// .unl-bg-darker-gray {
//     background-color: #424240!important;
// }
// .unl-bg-darkest-gray {
//     background-color: #242423!important;
// }
// .unl-bg-grit {
//     background-image: url(../images/bg-grit.png)!important;
//     background-position: 50% 50%!important;
//     background-repeat: repeat!important;
//     background-size: 80px!important;
// }
// @media only screen and (-webkit-min-device-pixel-ratio:2),only screen and (min--moz-device-pixel-ratio:2),only screen and (min-device-pixel-ratio:2),only screen and (min-resolution:2dppx),only screen and (min-resolution:192dpi) {
//     .unl-bg-grit {
//         background-image: url(../images/bg-grit_2x.png)!important;
//     }
// }
.unl-b-scarlet {
  border-color: #d00000!important;
}
.unl-bt-scarlet {
  border-top-color: #d00000!important;
}
// .unl-br-scarlet {
//     border-right-color: #d00000!important;
// }
// .unl-bb-scarlet {
//     border-bottom-color: #d00000!important;
// }
// .unl-bl-scarlet {
//     border-left-color: #d00000!important;
// }
// .unl-b-cream {
//     border-color: #fefdfa!important;
// }
// .unl-bt-cream {
//     border-top-color: #fefdfa!important;
// }
// .unl-br-cream {
//     border-right-color: #fefdfa!important;
// }
// .unl-bb-cream {
//     border-bottom-color: #fefdfa!important;
// }
// .unl-bl-cream {
//     border-left-color: #fefdfa!important;
// }
// .unl-b-gray {
//     border-color: #c7c8ca!important;
// }
// .unl-bt-gray {
//     border-top-color: #c7c8ca!important;
// }
// .unl-br-gray {
//     border-right-color: #c7c8ca!important;
// }
// .unl-bb-gray {
//     border-bottom-color: #c7c8ca!important;
// }
// .unl-bl-gray {
//     border-left-color: #c7c8ca!important;
// }
// .unl-b-lightest-gray {
//     border-color: #f6f6f5!important;
// }
// .unl-bt-lightest-gray {
//     border-top-color: #f6f6f5!important;
// }
// .unl-br-lightest-gray {
//     border-right-color: #f6f6f5!important;
// }
// .unl-bb-lightest-gray {
//     border-bottom-color: #f6f6f5!important;
// }
// .unl-bl-lightest-gray {
//     border-left-color: #f6f6f5!important;
// }
// .unl-b-lighter-gray {
//     border-color: #ebebea!important;
// }
// .unl-bt-lighter-gray {
//     border-top-color: #ebebea!important;
// }
// .unl-br-lighter-gray {
//     border-right-color: #ebebea!important;
// }
// .unl-bb-lighter-gray {
//     border-bottom-color: #ebebea!important;
// }
// .unl-bl-lighter-gray {
//     border-left-color: #ebebea!important;
// }
// .unl-b-light-gray {
//     border-color: #e3e3e2!important;
// }
// .unl-bt-light-gray {
//     border-top-color: #e3e3e2!important;
// }
// .unl-br-light-gray {
//     border-right-color: #e3e3e2!important;
// }
// .unl-bb-light-gray {
//     border-bottom-color: #e3e3e2!important;
// }
// .unl-bl-light-gray {
//     border-left-color: #e3e3e2!important;
// }
// .unl-b-dark-gray {
//     border-color: #6b6b68!important;
// }
// .unl-bt-dark-gray {
//     border-top-color: #6b6b68!important;
// }
// .unl-br-dark-gray {
//     border-right-color: #6b6b68!important;
// }
// .unl-bb-dark-gray {
//     border-bottom-color: #6b6b68!important;
// }
// .unl-bl-dark-gray {
//     border-left-color: #6b6b68!important;
// }
// .unl-b-darker-gray {
//     border-color: #424240!important;
// }
// .unl-bt-darker-gray {
//     border-top-color: #424240!important;
// }
// .unl-br-darker-gray {
//     border-right-color: #424240!important;
// }
// .unl-bb-darker-gray {
//     border-bottom-color: #424240!important;
// }
// .unl-bl-darker-gray {
//     border-left-color: #424240!important;
// }
// .unl-b-darkest-gray {
//     border-color: #242423!important;
// }
// .unl-bt-darkest-gray {
//     border-top-color: #242423!important;
// }
// .unl-br-darkest-gray {
//     border-right-color: #242423!important;
// }
// .unl-bb-darkest-gray {
//     border-bottom-color: #242423!important;
// }
// .unl-bl-darkest-gray {
//     border-left-color: #242423!important;
// }
.unl-scarlet,
a.unl-scarlet,
a.unl-scarlet:link {
  color: var(--link)!important;
}
.unl-cream,
a.unl-cream,
a.unl-cream:link {
  color: var(--inverse)!important;
}
// .unl-light-gray {
//   color: #e3e3e2!important;
// }
// .unl-lighter-gray {
//     color: #ebebea!important;
// }
// .unl-lightest-gray {
//     color: #f6f6f5!important;
// }
// .unl-dark-gray {
//     color: #6b6b68!important;
// }
// .unl-darker-gray {
//     color: #424240!important;
// }
// .unl-darkest-gray {
//     color: #242423!important;
// }
.unl-font-serif-ltd-caps {
  font-family: Mercury SSm Ltd Caps A,Mercury SSm Ltd Caps B,Georgia,serif!important;
}
.unl-font-serif-ltd-italic {
  font-family: Mercury SSm Ltd Italic A,Mercury SSm Ltd Italic B,Georgia,serif!important;
}
// .unl-font-sans {
//   font-family: Gotham SSm A,Gotham SSm B,Verdana,sans-serif!important;
// }
// .unl .dcf-txt-base {
//     font-size: 1rem!important;
// }
.unl .dcf-txt-3xs {
  font-size: .56em!important;
}
.unl .dcf-txt-2xs {
  font-size: .63em!important;
}
.unl .dcf-txt-xs {
  font-size: .75em!important;
}
.unl .dcf-txt-sm {
  font-size: .84em!important;
}
// .unl .dcf-txt-md {
//     font-size: 1em!important;
// }
// .unl .dcf-txt-lg {
//     font-size: 1.13em!important;
// }
.unl .dcf-txt-h6 {
    font-size: 1em!important;
}
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h6 {
//         font-size: 1.13em!important;
//     }
// }
.unl .dcf-txt-h5 {
    font-size: 1.13em!important;
}
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h5 {
//         font-size: 1.33em!important;
//     }
// }
// .unl .dcf-txt-h4 {
//     font-size: 1.33em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h4 {
//         font-size: 1.5em!important;
//     }
// }
// .unl .dcf-txt-h3 {
//     font-size: 1.5em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h3 {
//         font-size: 1.78em!important;
//     }
// }
// .unl .dcf-txt-h2 {
//     font-size: 1.78em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h2 {
//         font-size: 2em!important;
//     }
// }
.unl .dcf-txt-h1 {
  font-size: 2em!important;
}
// @media only screen and (min-width:56.12em) {
//   .unl .dcf-txt-h1 {
//     font-size: 2.37em!important;
//   }
// }
// .unl .dcf-txt-xl {
//     font-size: 2.37em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-xl {
//         font-size: 2.67em!important;
//     }
// }
// .unl .dcf-txt-2xl {
//     font-size: 2.67em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-2xl {
//         font-size: 3.16em!important;
//     }
// }
// .unl .dcf-txt-3xl {
//     font-size: 3.16em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-3xl {
//         font-size: 3.56em!important;
//     }
// }
// .unl .dcf-txt-4xl {
//     font-size: 3.56em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-4xl {
//         font-size: 4.21em!important;
//     }
// }
// .unl .dcf-txt-5xl {
//     font-size: 4.21em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-5xl {
//         font-size: 4.74em!important;
//     }
// }
// .unl .dcf-txt-6xl {
//     font-size: 4.74em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-6xl {
//         font-size: 5.62em!important;
//     }
// }
// .unl-ls-0 {
//     letter-spacing: 0!important;
// }
.unl-ls-1 {
  letter-spacing: .01em!important;
}
.unl-ls-2 {
  letter-spacing: .06em!important;
}
.unl-ls-3 {
  letter-spacing: .1em!important;
}
@media only screen and (max-width:56.12em) {
  .unl .dcf-breadcrumbs {
    height: 4.21em;
    overflow: hidden;
  }
  .unl .dcf-breadcrumbs ol {
    padding-bottom: 4.21em;
    overflow-x: auto;
    overflow-y: hidden;
  }
  .unl .dcf-breadcrumbs li {
    flex-shrink: 0;
  }
  .unl .dcf-logo-lockup {
    padding-bottom: 1em;
    padding-top: 1.33em;
  }
  .unl-site-title a {
    font-size: 1em;
  }
  .unl .dcf-idm-login {
    flex-direction: column;
  }
  .unl .dcf-nav-toggle-group {
    display: flex;
    z-index: 999;
  }
  .unl .dcf-nav-toggle-btn {
    flex-basis: 25%;
  }
  .unl .dcf-nav-menu {
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
  }
  .unl .dcf-header .dcf-institution-title,
  .unl .dcf-cta-header,
  .unl .dcf-idm-toggle,
  .unl .dcf-search-toggle-wrapper {
    display: none;
  }
}
@media only screen and (min-width:56.12em) {
  h1 {
    font-size: 2.37em;
  }
  h2 {
    font-size: 2em;
  }
  h3 {
    font-size: 1.78em;
  }
  .unl .dcf-breadcrumbs li:first-child,
  .unl .dcf-breadcrumbs li:last-child {
    flex-shrink: 0;
  }
  .unl .dcf-breadcrumbs li:not(:first-child),
  .unl .dcf-breadcrumbs li:not(:last-child) {
    min-width: 0;
  }
  .unl .dcf-breadcrumbs li a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .unl .dcf-header-global {
    border-bottom: 1px solid var(--b);
    padding-top: .18em;
  }
  .unl .dcf-header-global-item {
    margin-left: 3.16vw;
  }
  .unl .dcf-cta-header {
    display: flex;
    flex-grow: 3;
    font-size: .63em;
    justify-content: flex-end;
    margin-bottom: 0;
  }
  .unl .dcf-logo-lockup {
    padding-bottom: 1.13em;
    padding-top: 1.33em;
  }
  .unl .dcf-idm-login {
    flex-direction: row-reverse;
  }
  .unl .dcf-idm-img {
    fill: #e3e3e2;
  }
  .unl .dcf-nav-local > ul:first-child {
    grid-template-columns: repeat(6, 1fr);
    overflow: hidden;
    width: 100%;
  }
//   .unl .dcf-nav-local > ul > li {
//     position: relative;
//   }
  .unl .dcf-nav-local li:not(:last-child) {
    margin-right: 0;
  }
  .unl .dcf-nav-local > ul > li > a {
    border-left: 1px solid #a00000;
    height: 100%;
  }
  .unl .dcf-nav-toggle-btn-menu~.dcf-nav-local ul ul {
//     pointer-events: none;
    position: absolute;
//     top: 100%;
    visibility: hidden;
  }
  .unl .dcf-nav-menu {
    background-color: #d00000;
    display: flex;
    flex-wrap: nowrap;
    padding-left: 5.62vw;
    padding-right: 5.62vw;
  }
  .unl .dcf-nav-menu a,
  .unl .dcf-nav-menu button {
    font-size: .75em;
  }
  .unl .dcf-search {
    max-width: 13.32em;
  }
  .unl .dcf-idm-toggle,
  .unl .dcf-nav-menu .dcf-nav-toggle-btn-menu,
  .unl .dcf-search-toggle-wrapper {
    display: flex;
  }
  .unl .dcf-search-toggle-label {
    padding: .42em 3.16em .42em .75em;
  }
  .unl .dcf-txt-h6 {
    font-size: 1.13em!important;
  }
  .unl .dcf-txt-h5 {
    font-size: 1.33em!important;
  }
  .unl .dcf-txt-h1 {
    font-size: 2.37em!important;
  }
  .unl .dcf-nav-toggle-group,
  .unl .dcf-cta-nav {
    display: none;
  }
}
.dcf-modal-overlay[aria-hidden=true] {
\topacity: 0;
\tpointer-events: none;
\tvisibility: hidden;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/critical.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////
// CRITICAL
////////////


// Variables
@import '../../../node_modules/dcf/scss/variables/**/*';
@import 'variables/**/*';


// Mixins
@import '../../../node_modules/dcf/scss/mixins/**/*';
@import 'mixins/**/*';


// Functions
@import '../../../node_modules/dcf/scss/functions/**/*';


// Critical
html {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
//   line-height: 1.15;
  font-family: Gotham SSm A,Gotham SSm B,Verdana,sans-serif;
  font-style: normal;
  font-weight: 400;
}
// h1 {
//   margin: .67em 0;
// }
// hr {
//   -webkit-box-sizing: content-box;
//   box-sizing: content-box;
//   height: 0;
//   overflow: visible;
// }
// b,
// strong {
//     font-weight: bolder;
// }
svg:not(:root) {
  overflow: hidden;
}
button,
input,
optgroup,
select,
textarea,
figure {
  margin: 0;
}
button {
  overflow: visible;
  text-transform: none;
}
[type=button],
[type=reset],
[type=submit],
button {
  -webkit-appearance: button;
}
// details,
// dialog {
//     display: block;
// }
// dialog:not([open]),
// template {
//   display: none;
// }
*:not([role=\"dialog\"])[hidden] {
  display: none !important;
}
// Do not set dialogs to `display: none` by default
// https://developer.paciellogroup.com/blog/2018/06/the-current-state-of-modal-dialog-accessibility/
[role=\"dialog\"][hidden] {
  display: block !important;
  visibility: hidden !important;
}
*,
::after,
::before {
  box-sizing: border-box;
}
:root {
  --bg-body: #fefdfa;
  --bg-btn-inverse-primary: #e3e3e2;
  --bg-btn-inverse-secondary: transparent;
  --bg-btn-inverse-tertiary: transparent;
  --bg-btn-primary: #d00000;
  --bg-btn-secondary: #fefdfa;
  --bg-btn-tertiary: transparent;
  --b: #e3e3e2;
  --b-btn-primary: #d00000;
  --b-btn-secondary: currentColor;
  --b-btn-tertiary: transparent;
  --b-btn-inverse-primary: #e3e3e2;
  --b-btn-inverse-secondary: currentColor;
  --b-btn-inverse-tertiary: transparent;
  --body: #424240;
  --btn-primary: #fefdfa;
  --btn-secondary: #d00000;
  --btn-tertiary: #d00000;
  --btn-inverse-primary: #d00000;
  --btn-inverse-secondary: #e3e3e2;
  --btn-inverse-tertiary: #e3e3e2;
  --heading: #242423;
  --inverse: #fefdfa;
  --link: #d00000;
  font-size: 1em;
  line-height: 1.5;
}
@media (prefers-color-scheme: dark) {
  :root {
    --bg-body: #171716;
    --bg-btn-inverse-primary: #e3e3e2;
    --bg-btn-inverse-secondary: transparent;
    --bg-btn-inverse-tertiary: transparent;
    --bg-btn-primary: #e3e3e2;
    --bg-btn-secondary: transparent;
    --bg-btn-tertiary: transparent;
    --b: #424240;
    --b-btn-primary: #e3e3e2;
    --b-btn-secondary: currentColor;
    --b-btn-tertiary: transparent;
    --b-btn-inverse-primary: #e3e3e2;
    --b-btn-inverse-secondary: currentColor;
    --b-btn-inverse-tertiary: transparent;
    --body: #f6f6f5;
    --btn-inverse-primary: #d00000;
    --btn-inverse-secondary: #e3e3e2;
    --btn-inverse-tertiary: #e3e3e2;
    --btn-primary: #d00000;
    --btn-secondary: #e3e3e2;
    --btn-tertiary: #e3e3e2;
    --heading: #fefdfa;
    --link: #f6f6f5;
  }
}
@media screen and (min-width:31.57em) {
  :root {
    font-size: calc(.93em + .23vw);
  }
}
@media screen and (min-width:177.38em) {
  :root {
    font-size: 1.33em;
  }
}
// a {
//   -webkit-text-decoration-skip: ink;
//   text-decoration-skip: ink;
// }
a,
a:link {
  color: var(--link);
}
body {
  background-color: var(--bg-body);
  color: var(--body);
  margin: 0;
  overflow-x: hidden;
}
button,
input[type=button],
input[type=submit] {
  display: inline-block;
  font-family: inherit;
  font-size: 1em;
  line-height: 1.5;
  padding: .56em 1em;
  text-align: center;
}
// figure {
// \tmargin: 0;
// }
h1 {
  font-size: 2em;
}
h2 {
  font-size: 1.78em;
}
h3 {
  font-size: 1.5em;
}
h1,
h2,
h3 {
  color: var(--heading);
  line-height: 1.13;
  margin-bottom: 1rem;
  margin-top: 0;
}
h1+h2,
h2+h2,
h2+h3,
h3+h3,
h3+h4,
ol+h2,
ol+h3,
p:not(.dcf-subhead)+h2,
p:not(.dcf-subhead)+h3,
p:not(.dcf-subhead)+h4,
p:not(.dcf-subhead)+h5,
p:not(.dcf-subhead)+h6,
ul+h2,
ul+h3 {
  margin-top: 1.33em;
}
img {
  height: auto;
  max-width: 100%;
}
ol,
ul {
  padding-left: 1.78em;
}
dl,
ol,
ul {
  margin-bottom: 1em;
  margin-top: 0;
}
main {
  display: block;
}
p {
  margin-bottom: 1rem;
  margin-top: 0;
}
body:lang(en) {
  quotes: \"“\" \"”\" \"‘\" \"’\" \"“\" \"”\" \"‘\" \"’\";
}
q::before {
  content: open-quote;
}
q::after {
  content: close-quote;
}
small {
  font-size: 1rem;
}
// sub,
// sup {
//   font-size: .63em;
//   position: relative;
//   vertical-align: baseline;
// }
// sup {
//   top: -.56em;
// }
// sub {
//   top: .24em;
// }


// !Objects
.dcf-bleed {
  left: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  position: relative;
  right: 50%;
  width: 100vw;
}
.dcf-wrapper {
  padding-left: 5.62vw;
  padding-right: 5.62vw;
}


// !Components
.dcf-breadcrumbs li {
  align-items: center;
  display: flex;
}
.dcf-btn {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: inline-block;
  text-align: center;
}
a.dcf-btn-primary,
a.dcf-btn-secondary {
  text-decoration: none;
}
.dcf-header a,
.dcf-header a:link {
  text-decoration: none;
}
.dcf-nav-local ul {
  // Fix list-style: none in VoiceOver and Safari: https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  margin-bottom: 0;
  padding-left: 0;
}
// .dcf-h1,
// .dcf-h2,
// .dcf-h3,
// .dcf-h4,
// .dcf-h5,
// .dcf-h6 {
//   line-height: 1.13;
//   margin-bottom: 1rem;
//   margin-top: 0;
// }
// .dcf-h1+.dcf-h1,
// .dcf-h1+.dcf-h2,
// .dcf-h1+.dcf-h3,
// .dcf-h1+.dcf-h4,
// .dcf-h1+.dcf-h5,
// .dcf-h1+.dcf-h6,
// .dcf-h2+.dcf-h1,
// .dcf-h2+.dcf-h2,
// .dcf-h2+.dcf-h3,
// .dcf-h2+.dcf-h4,
// .dcf-h2+.dcf-h5,
// .dcf-h2+.dcf-h6,
// .dcf-h3+.dcf-h1,
// .dcf-h3+.dcf-h2,
// .dcf-h3+.dcf-h3,
// .dcf-h3+.dcf-h4,
// .dcf-h3+.dcf-h5,
// .dcf-h3+.dcf-h6,
// .dcf-h4+.dcf-h1,
// .dcf-h4+.dcf-h2,
// .dcf-h4+.dcf-h3,
// .dcf-h4+.dcf-h4,
// .dcf-h4+.dcf-h5,
// .dcf-h4+.dcf-h6,
// .dcf-h5+.dcf-h1,
// .dcf-h5+.dcf-h2,
// .dcf-h5+.dcf-h3,
// .dcf-h5+.dcf-h4,
// .dcf-h5+.dcf-h5,
// .dcf-h5+.dcf-h6,
// .dcf-h6+.dcf-h1,
// .dcf-h6+.dcf-h2,
// .dcf-h6+.dcf-h3,
// .dcf-h6+.dcf-h4,
// .dcf-h6+.dcf-h5,
// .dcf-h6+.dcf-h6,
// ol+.dcf-h1,
// ol+.dcf-h2,
// ol+.dcf-h3,
// ol+.dcf-h4,
// ol+.dcf-h5,
// ol+.dcf-h6,
// p:not(.dcf-subhead)+.dcf-h1,
// p:not(.dcf-subhead)+.dcf-h2,
// p:not(.dcf-subhead)+.dcf-h3,
// p:not(.dcf-subhead)+.dcf-h4,
// p:not(.dcf-subhead)+.dcf-h5,
// p:not(.dcf-subhead)+.dcf-h6,
// ul+.dcf-h1,
// ul+.dcf-h2,
// ul+.dcf-h3,
// ul+.dcf-h4,
// ul+.dcf-h5,
// ul+.dcf-h6 {
//   margin-top: 1.33em;
// }
.unl .dcf-breadcrumbs {
  font-size: .63em;
}
.unl .dcf-breadcrumbs ol {
  display: flex;
  flex-wrap: nowrap;
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  padding-left: 5.62vw;
}
.unl .dcf-breadcrumbs li {
  margin-bottom: 0;
}
.unl .dcf-breadcrumbs li:last-child {
  padding-right: 5.62vw;
}
.unl .dcf-breadcrumbs li:not(:last-child) {
  margin-right: .56em;
}
.unl .dcf-breadcrumbs li:not(:last-child)::after {
  border-bottom: .32em solid transparent;
  border-left: .32em solid #c7c8ca;
  border-top: .32em solid transparent;
  content: \"\";
  margin-left: .56em;
}
.unl .dcf-btn {
  border-style: solid;
  border-width: 2px;
  font-size: .84em;
  font-weight: 700;
  padding: .75em 1em;
}
.unl .dcf-btn-inverse-primary {
  background-color: var(--bg-btn-inverse-primary);
  border-color: var(--b-btn-inverse-primary);
  color: var(--btn-inverse-primary);
}
.unl .dcf-btn-inverse-secondary {
  background-color: var(--bg-btn-inverse-secondary);
  border-color: var(--b-btn-inverse-secondary);
  color: var(--btn-inverse-secondary);
}
.unl .dcf-btn-inverse-tertiary {
  background-color: var(--bg-btn-inverse-tertiary);
  border-color: var(--b-btn-inverse-tertiary);
  color: var(--btn-inverse-tertiary);
}
.unl .dcf-btn-primary {
  background-color: var(--bg-btn-primary);
  border-color: var(--b-btn-primary);
  color: var(--btn-primary);
}
.unl .dcf-btn-secondary {
  background-color: var(--bg-btn-secondary);
  border-color: var(--b-btn-secondary);
  color: var(--btn-secondary);
}
.unl .dcf-btn-tertiary {
  background-color: var(--bg-btn-tertiary);
  border-color: var(--b-btn-tertiary);
  color: var(--btn-tertiary);
}
.unl-institution-title-ls {
  letter-spacing: .32em;
}
.unl .dcf-site-group {
  min-height: 3.16em;
}
.unl .dcf-site-affiliation a {
  display: inline-block;
  padding-bottom: .42em;
}
.unl .dcf-site-affiliation a,
.unl .dcf-site-title a {
  color: var(--heading);
}
.unl h1,
.unl h2,
.unl h3 {
  font-weight: 700;
  letter-spacing: -.03em;
  margin-left: -.03em;
}
.unl h1 a,
.unl h2 a,
.unl h3 a {
  text-decoration: none;
}
.unl .dcf-subhead {
  font-weight: 400;
  font-size: .75rem;
  letter-spacing: .1em;
  line-height: 1.33;
  margin-bottom: .75em;
  text-transform: uppercase;
}
// .unl .dcf-hero-default {
//   background-color: #ebebea;
//   margin-bottom: 3.16em;
//   padding-top: 1.33em;
//   padding-bottom: 1em;
// }
.unl .dcf-hero-default .dcf-page-title {
  padding-left: 5.62vw;
  padding-right: 5.62vw;
  padding-top: 1.78em;
}
// .unl-hero-notch-stripe .dcf-hero-group-1,
// .unl-hero-notch-stripe .dcf-hero-group-2 {
//   position: relative;
// }
// .unl-hero-notch-stripe .dcf-hero-group-1 {
//   min-width: 0;
//   margin-top: -2.67em;
//   order: 2;
//   width: 100%;
// }
// .unl .dcf-hero-sm {
//   height: 23.67696878vh;
//   max-height: 13.32em;
//   min-height: 10em;
// }
// .unl .dcf-hero-md {
//   height: 42.09vh;
//   max-height: 23.68em;
//   min-height: 17.76em;
// }
// .unl .dcf-hero-lg {
//   height: 56.12vh;
//   max-height: 31.57em;
//   min-height: 23.68em;
// }
.unl .dcf-page-title h1 {
  margin-top: 0;
}
.unl .dcf-page-title h1,
.unl .dcf-page-title h1+.dcf-subhead {
  margin-bottom: 0;
}
.unl .dcf-page-title h1+.dcf-subhead {
  margin-top: 1rem;
}
// .unl .dcf-hero-photo-credit {
//   margin: 0;
//   right: .42em;
//   text-shadow: 1px 1px 1em rgba(36,36,35,.5);
//   top: 1.78em;
// }
.unl .dcf-nav-local a:link {
  color: #fefdfa;
}
.unl .dcf-nav-local > ul:first-child {
  display: grid;
}
.unl .dcf-nav-menu li {
  margin-bottom: 0;
}
.unl .dcf-nav-menu-child a,
.unl .dcf-nav-menu-child button {
  color: #fefdfa;
  display: block;
  line-height: 1.33;
  padding: 1em 1rem;
}
.unl .dcf-nav-menu-child > ul > li > a,
.unl .dcf-nav-menu-child button {
  font-weight: 700;
}
.unl .dcf-nav-toggle-btn {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.unl.app .dcf-app-controls button {
  background-color: transparent;
  border: 0;
}


// !Utilities
.dcf-bg-transparent {
  background-color: transparent!important;
}
// .dcf-bg-center {
//     background-position: 50%!important;
// }
// .dcf-bg-top {
//     background-position: top!important;
// }
// .dcf-bg-right {
//     background-position: 100%!important;
// }
// .dcf-bg-right-top {
//     background-position: 100% 0!important;
// }
// .dcf-bg-right-bottom {
//     background-position: 100% 100%!important;
// }
// .dcf-bg-bottom {
//     background-position: bottom!important;
// }
// .dcf-bg-left {
//     background-position: 0!important;
// }
// .dcf-bg-left-top {
//     background-position: 0 0!important;
// }
// .dcf-bg-left-bottom {
//     background-position: 0 100%!important;
// }
// .dcf-bg-no-repeat {
//     background-repeat: no-repeat!important;
// }
// .dcf-bg-repeat {
//     background-repeat: repeat!important;
// }
// .dcf-bg-repeat-x {
//     background-repeat: repeat-x!important;
// }
// .dcf-bg-repeat-y {
//     background-repeat: repeat-y!important;
// }
// .dcf-bg-contain {
//     background-size: contain!important;
// }
// .dcf-bg-cover {
//     background-size: cover!important;
// }
// .dcf-bg-none {
//     background: none!important;
// }
// .dcf-b-current {
//     border-color: currentColor!important;
// }
// .dcf-bt-current {
//     border-top-color: currentColor!important;
// }
// .dcf-br-current {
//     border-right-color: currentColor!important;
// }
// .dcf-bb-current {
//     border-bottom-color: currentColor!important;
// }
// .dcf-bl-current {
//     border-left-color: currentColor!important;
// }
// .dcf-b-transparent {
//     border-color: transparent!important;
// }
// .dcf-bt-transparent {
//     border-top-color: transparent!important;
// }
// .dcf-br-transparent {
//     border-right-color: transparent!important;
// }
// .dcf-bb-transparent {
//     border-bottom-color: transparent!important;
// }
// .dcf-bl-transparent {
//     border-left-color: transparent!important;
// }
.dcf-circle {
  border-radius: 50%!important;
}
.dcf-b-solid {
  border-style: solid!important;
}
.dcf-bt-solid {
  border-top-style: solid!important;
}
// .dcf-br-solid {
//     border-right-style: solid!important;
// }
// .dcf-bb-solid {
//     border-bottom-style: solid!important;
// }
// .dcf-bl-solid {
//     border-left-style: solid!important;
// }
.dcf-b-0 {
  border-width: 0!important;
}
.dcf-b-1 {
  border-width: 1px!important;
}
// .dcf-b-2 {
//     border-width: 2px!important;
// }
// .dcf-b-3 {
//     border-width: 3px!important;
// }
// .dcf-bt-0 {
//     border-top-width: 0!important;
// }
// .dcf-bt-1 {
//     border-top-width: 1px!important;
// }
.dcf-bt-2 {
  border-top-width: 2px!important;
}
.dcf-bt-3 {
  border-top-width: 3px!important;
}
// .dcf-br-0 {
//     border-right-width: 0!important;
// }
// .dcf-br-1 {
//     border-right-width: 1px!important;
// }
// .dcf-br-2 {
//     border-right-width: 2px!important;
// }
// .dcf-br-3 {
//     border-right-width: 3px!important;
// }
// .dcf-bb-0 {
//     border-bottom-width: 0!important;
// }
// .dcf-bb-1 {
//     border-bottom-width: 1px!important;
// }
// .dcf-bb-2 {
//     border-bottom-width: 2px!important;
// }
// .dcf-bb-3 {
//     border-bottom-width: 3px!important;
// }
// .dcf-bl-0 {
//     border-left-width: 0!important;
// }
// .dcf-bl-1 {
//     border-left-width: 1px!important;
// }
// .dcf-bl-2 {
//     border-left-width: 2px!important;
// }
// .dcf-bl-3 {
//     border-left-width: 3px!important;
// }
// .dcf-ai-flex-start {
//     -webkit-box-align: start!important;
//     align-items: flex-start!important;
// }
.dcf-ai-flex-end {
  align-items: flex-end!important;
}
.dcf-ai-center {
  align-items: center!important;
}
// .dcf-ai-baseline {
//     -webkit-box-align: baseline!important;
//     align-items: baseline!important;
// }
// .dcf-ai-stretch {
//     -webkit-box-align: stretch!important;
//     align-items: stretch!important;
// }
// .dcf-ai-start {
//     -webkit-box-align: start!important;
//     align-items: start!important;
// }
// .dcf-ai-end {
//     -webkit-box-align: end!important;
//     align-items: end!important;
// }
// .dcf-ac-flex-start {
//     align-content: flex-start!important;
// }
// .dcf-ac-flex-end {
//     align-content: flex-end!important;
// }
// .dcf-ac-center {
//     align-content: center!important;
// }
// .dcf-ac-stretch {
//     align-content: stretch!important;
// }
// .dcf-ac-around {
//     align-content: space-around!important;
// }
// .dcf-ac-between {
//     align-content: space-between!important;
// }
// .dcf-ac-evenly {
//     align-content: space-evenly!important;
// }
// .dcf-ac-start {
//     align-content: start!important;
// }
// .dcf-ac-end {
//     align-content: end!important;
// }
// .dcf-as-auto {
//     -ms-grid-row-align: auto!important;
//     align-self: auto!important;
// }
// .dcf-as-flex-start {
//     align-self: flex-start!important;
// }
// .dcf-as-flex-end {
//     align-self: flex-end!important;
// }
// .dcf-as-center {
//     -ms-grid-row-align: center!important;
//     align-self: center!important;
// }
// .dcf-as-baseline {
//     align-self: baseline!important;
// }
// .dcf-as-stretch {
//     -ms-grid-row-align: stretch!important;
//     align-self: stretch!important;
// }
// .dcf-as-start {
//     -ms-grid-row-align: start!important;
//     align-self: start!important;
// }
// .dcf-as-end {
//     -ms-grid-row-align: end!important;
//     align-self: end!important;
// }
// .dcf-ji-start {
//     justify-items: start!important;
// }
// .dcf-ji-end {
//     justify-items: end!important;
// }
// .dcf-ji-center {
//     justify-items: center!important;
// }
// .dcf-ji-stretch {
//     justify-items: stretch!important;
// }
// .dcf-jc-flex-start {
//     -webkit-box-pack: start!important;
//     justify-content: flex-start!important;
// }
.dcf-jc-flex-end {
  justify-content: flex-end!important;
}
.dcf-jc-center {
  justify-content: center!important;
}
// .dcf-jc-around {
//     justify-content: space-around!important;
// }
.dcf-jc-between {
  justify-content: space-between!important;
}
// .dcf-jc-evenly {
//     -webkit-box-pack: space-evenly!important;
//     justify-content: space-evenly!important;
// }
// .dcf-jc-start {
//     -webkit-box-pack: start!important;
//     justify-content: start!important;
// }
// .dcf-jc-end {
//     -webkit-box-pack: end!important;
//     justify-content: end!important;
// }
// .dcf-jc-stretch {
//     -webkit-box-pack: stretch!important;
//     justify-content: stretch!important;
// }
// .dcf-js-start {
//     -ms-grid-column-align: start!important;
//     justify-self: start!important;
// }
// .dcf-js-center {
//     -ms-grid-column-align: center!important;
//     justify-self: center!important;
// }
// .dcf-js-end {
//     -ms-grid-column-align: end!important;
//     justify-self: end!important;
// }
// .dcf-js-stretch {
//     -ms-grid-column-align: stretch!important;
//     justify-self: stretch!important;
// }
// .dcf-inverse,
// a.dcf-inverse:link {
//     color: #fefdfa!important;
// }
.dcf-d-none {
  display: none!important;
}
.dcf-d-block {
  display: block!important;
}
// .dcf-d-inline {
//     display: inline!important;
// }
// .dcf-d-inline-block {
//     display: inline-block!important;
// }
// .dcf-d-table {
//     display: table!important;
// }
// .dcf-d-table-cell {
//     display: table-cell!important;
// }
.dcf-d-flex {
  display: flex!important;
}
// .dcf-d-inline-flex {
//     display: -webkit-inline-box!important;
//     display: inline-flex!important;
// }
// @supports ((display:-ms-grid) or (display:grid)) {
//     .dcf-d-grid {
//         display: -ms-grid!important;
//         display: grid!important;
//     }
// }
.dcf-flex-col {
  flex-direction: column!important;
}
// .dcf-flex-col,
// .dcf-flex-col-rev {
//     -webkit-box-orient: vertical!important;
// }
// .dcf-flex-col-rev {
//     -webkit-box-direction: reverse!important;
//     flex-direction: column-reverse!important;
// }
.dcf-flex-row {
  flex-direction: row!important;
}
// .dcf-flex-row,
// .dcf-flex-row-rev {
//     -webkit-box-orient: horizontal!important;
// }
// .dcf-flex-row-rev {
//     -webkit-box-direction: reverse!important;
//     flex-direction: row-reverse!important;
// }
.dcf-flex-wrap {
  flex-wrap: wrap!important;
}
// .dcf-flex-wrap-rev {
//     flex-wrap: wrap-reverse!important;
// }
.dcf-flex-nowrap {
  flex-wrap: nowrap!important;
}
// .dcf-flex-none {
//     -webkit-box-flex: 0!important;
//     flex: none!important;
// }
// .dcf-flex-initial {
//     -webkit-box-flex: initial!important;
//     flex: initial!important;
// }
// .dcf-flex-auto {
//     flex: auto!important;
// }
// .dcf-flex-1,
// .dcf-flex-auto {
//     -webkit-box-flex: 1!important;
// }
// .dcf-flex-1 {
//     flex: 1!important;
// }
.dcf-flex-grow-1 {
  flex-grow: 1!important;
}
.dcf-flex-shrink-0 {
  flex-shrink: 0!important;
}
// .dcf-h-auto {
//     height: auto!important;
// }
// .dcf-h-0 {
//     height: 0!important;
// }
// .dcf-h-1 {
//     height: .42em!important;
// }
// .dcf-h-2 {
//     height: .56em!important;
// }
// .dcf-h-3 {
//     height: .75em!important;
// }
.dcf-h-4 {
  height: 1em!important;
}
.dcf-h-5 {
  height: 1.33em!important;
}
.dcf-h-6 {
  height: 1.78em!important;
}
// .dcf-h-7 {
//     height: 2.37em!important;
// }
.dcf-h-8 {
  height: 3.16em!important;
}
.dcf-h-9 {
  height: 4.21em!important;
}
// .dcf-h-10 {
//     height: 5.62em!important;
// }
.dcf-h-100\\% {
  height: 100%!important;
}
// .dcf-h-100vh {
//     height: 100vh!important;
// }
// .dcf-h-min-0 {
//     min-height: 0!important;
// }
// .dcf-h-min-100vh {
//     min-height: 100vh!important;
// }
// .dcf-h-max-100\\% {
//     max-height: 100%!important;
// }
// .dcf-h-max-100vh {
//     max-height: 100vh!important;
// }
// .dcf-w-auto {
//     width: auto!important;
// }
// .dcf-w-0 {
//     width: 0!important;
// }
// .dcf-w-1 {
//     width: .42em!important;
// }
// .dcf-w-2 {
//     width: .56em!important;
// }
// .dcf-w-3 {
//     width: .75em!important;
// }
.dcf-w-4 {
  width: 1em!important;
}
.dcf-w-5 {
  width: 1.33em!important;
}
.dcf-w-6 {
  width: 1.78em!important;
}
// .dcf-w-7 {
//     width: 2.37em!important;
// }
.dcf-w-8 {
  width: 3.16em!important;
}
.dcf-w-9 {
  width: 4.21em!important;
}
// .dcf-w-10 {
//     width: 5.62em!important;
// }
.dcf-w-100\\% {
  width: 100%!important;
}
// .dcf-w-100vw {
//     width: 100vw!important;
// }
.dcf-w-min-0 {
  min-width: 0!important;
}
// .dcf-w-max-100\\% {
//     max-width: 100%!important;
// }
// .dcf-w-max-100vw {
//     max-width: 100vw!important;
// }
.dcf-list-bare {
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  padding-left: 0;
}
// .dcf-m-auto {
//     margin: auto!important !important;
// }
// .dcf-m-0 {
//     margin: 0!important !important;
// }
// .dcf-m-1 {
//     margin: .42em!important !important;
// }
// .dcf-m-2 {
//     margin: .56em!important !important;
// }
// .dcf-m-3 {
//     margin: .75em!important !important;
// }
// .dcf-m-4 {
//     margin: 1em!important !important;
// }
// .dcf-m-5 {
//     margin: 1.33em!important !important;
// }
// .dcf-m-6 {
//     margin: 1.78em!important !important;
// }
// .dcf-m-7 {
//     margin: 2.37em!important !important;
// }
// .dcf-m-8 {
//     margin: 3.16em!important !important;
// }
// .dcf-m-9 {
//     margin: 4.21em!important !important;
// }
// .dcf-m-10 {
//     margin: 5.62em!important !important;
// }
// .dcf-mt-auto {
//     margin-top: auto!important;
// }
// .dcf-mt-0 {
//     margin-top: 0!important;
// }
.dcf-mt-1 {
  margin-top: .42em!important;
}
// .dcf-mt-2 {
//     margin-top: .56em!important;
// }
// .dcf-mt-3 {
//     margin-top: .75em!important;
// }
// .dcf-mt-4 {
//     margin-top: 1em!important;
// }
// .dcf-mt-5 {
//     margin-top: 1.33em!important;
// }
// .dcf-mt-6 {
//     margin-top: 1.78em!important;
// }
// .dcf-mt-7 {
//     margin-top: 2.37em!important;
// }
// .dcf-mt-8 {
//     margin-top: 3.16em!important;
// }
// .dcf-mt-9 {
//     margin-top: 4.21em!important;
// }
// .dcf-mt-10 {
//     margin-top: 5.62em!important;
// }
// .dcf-mr-auto {
//     margin-right: auto!important;
// }
// .dcf-mr-0 {
//     margin-right: 0!important;
// }
// .dcf-mr-1 {
//     margin-right: .42em!important;
// }
// .dcf-mr-2 {
//     margin-right: .56em!important;
// }
.dcf-mr-3 {
  margin-right: .75em!important;
}
.dcf-mr-4 {
  margin-right: 1em!important;
}
// .dcf-mr-5 {
//     margin-right: 1.33em!important;
// }
// .dcf-mr-6 {
//     margin-right: 1.78em!important;
// }
// .dcf-mr-7 {
//     margin-right: 2.37em!important;
// }
// .dcf-mr-8 {
//     margin-right: 3.16em!important;
// }
// .dcf-mr-9 {
//     margin-right: 4.21em!important;
// }
// .dcf-mr-10 {
//     margin-right: 5.62em!important;
// }
// .dcf-mb-auto {
//     margin-bottom: auto!important;
// }
// .dcf-mb-0 {
//     margin-bottom: 0!important;
// }
.dcf-mb-1 {
  margin-bottom: .42em!important;
}
// .dcf-mb-2 {
//     margin-bottom: .56em!important;
// }
// .dcf-mb-3 {
//     margin-bottom: .75em!important;
// }
// .dcf-mb-4 {
//     margin-bottom: 1em!important;
// }
// .dcf-mb-5 {
//     margin-bottom: 1.33em!important;
// }
.dcf-mb-6 {
  margin-bottom: 1.78em!important;
}
// .dcf-mb-7 {
//     margin-bottom: 2.37em!important;
// }
// .dcf-mb-8 {
//     margin-bottom: 3.16em!important;
// }
// .dcf-mb-9 {
//     margin-bottom: 4.21em!important;
// }
// .dcf-mb-10 {
//     margin-bottom: 5.62em!important;
// }
// .dcf-ml-auto {
//     margin-left: auto!important;
// }
// .dcf-ml-0 {
//     margin-left: 0!important;
// }
// .dcf-ml-1 {
//     margin-left: .42em!important;
// }
// .dcf-ml-2 {
//     margin-left: .56em!important;
// }
// .dcf-ml-3 {
//     margin-left: .75em!important;
// }
// .dcf-ml-4 {
//     margin-left: 1em!important;
// }
// .dcf-ml-5 {
//     margin-left: 1.33em!important;
// }
// .dcf-ml-6 {
//     margin-left: 1.78em!important;
// }
// .dcf-ml-7 {
//     margin-left: 2.37em!important;
// }
// .dcf-ml-8 {
//     margin-left: 3.16em!important;
// }
// .dcf-ml-9 {
//     margin-left: 4.21em!important;
// }
// .dcf-ml-10 {
//     margin-left: 5.62em!important;
// }
.dcf-obj-fit-contain {
  object-fit: contain!important;
}
.dcf-obj-fit-contain,
.dcf-obj-fit-cover {
  height: 100%!important;
  width: 100%!important;
}
.dcf-obj-fit-cover {
  object-fit: cover!important;
}
// .dcf-overflow-visible {
//     overflow: visible!important;
// }
// .dcf-overflow-x-visible {
//     overflow-x: visible!important;
// }
// .dcf-overflow-y-visible {
//     overflow-y: visible!important;
// }
.dcf-overflow-hidden {
  overflow: hidden!important;
}
// .dcf-overflow-x-hidden {
//     overflow-x: hidden!important;
// }
// .dcf-overflow-y-hidden {
//     overflow-y: hidden!important;
// }
// .dcf-overflow-auto {
//     overflow: auto!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-x-auto {
//     overflow-x: auto!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-y-auto {
//     overflow-y: auto!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-scroll {
//     overflow: scroll!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-x-scroll {
//     overflow-x: scroll!important;
//     -webkit-overflow-scrolling: touch;
// }
// .dcf-overflow-y-scroll {
//     overflow-y: scroll!important;
//     -webkit-overflow-scrolling: touch;
// }
.dcf-p-0 {
  padding: 0!important;
}
// .dcf-p-1 {
//     padding: .42em!important !important;
// }
// .dcf-p-2 {
//     padding: .56em!important !important;
// }
// .dcf-p-3 {
//     padding: .75em!important !important;
// }
// .dcf-p-4 {
//     padding: 1em!important !important;
// }
// .dcf-p-5 {
//     padding: 1.33em!important !important;
// }
// .dcf-p-6 {
//     padding: 1.78em!important !important;
// }
// .dcf-p-7 {
//     padding: 2.37em!important !important;
// }
// .dcf-p-8 {
//     padding: 3.16em!important !important;
// }
// .dcf-p-9 {
//     padding: 4.21em!important !important;
// }
// .dcf-p-10 {
//     padding: 5.62em!important !important;
// }
// .dcf-pt-0 {
//     padding-top: 0!important;
// }
// .dcf-pt-1 {
//     padding-top: .42em!important;
// }
// .dcf-pt-2 {
//     padding-top: .56em!important;
// }
.dcf-pt-3 {
  padding-top: .75em!important;
}
// .dcf-pt-4 {
//     padding-top: 1em!important;
// }
// .dcf-pt-5 {
//     padding-top: 1.33em!important;
// }
// .dcf-pt-6 {
//     padding-top: 1.78em!important;
// }
// .dcf-pt-7 {
//     padding-top: 2.37em!important;
// }
// .dcf-pt-8 {
//     padding-top: 3.16em!important;
// }
// .dcf-pt-9 {
//     padding-top: 4.21em!important;
// }
// .dcf-pt-10 {
//     padding-top: 5.62em!important;
// }
// .dcf-pr-0 {
//     padding-right: 0!important;
// }
// .dcf-pr-1 {
//     padding-right: .42em!important;
// }
// .dcf-pr-2 {
//     padding-right: .56em!important;
// }
// .dcf-pr-3 {
//     padding-right: .75em!important;
// }
// .dcf-pr-4 {
//     padding-right: 1em!important;
// }
// .dcf-pr-5 {
//     padding-right: 1.33em!important;
// }
// .dcf-pr-6 {
//     padding-right: 1.78em!important;
// }
// .dcf-pr-7 {
//     padding-right: 2.37em!important;
// }
// .dcf-pr-8 {
//     padding-right: 3.16em!important;
// }
// .dcf-pr-9 {
//     padding-right: 4.21em!important;
// }
// .dcf-pr-10 {
//     padding-right: 5.62em!important;
// }
// .dcf-pb-0 {
//     padding-bottom: 0!important;
// }
// .dcf-pb-1 {
//     padding-bottom: .42em!important;
// }
// .dcf-pb-2 {
//     padding-bottom: .56em!important;
// }
.dcf-pb-3 {
  padding-bottom: .75em!important;
}
// .dcf-pb-4 {
//     padding-bottom: 1em!important;
// }
// .dcf-pb-5 {
//     padding-bottom: 1.33em!important;
// }
// .dcf-pb-6 {
//     padding-bottom: 1.78em!important;
// }
// .dcf-pb-7 {
//     padding-bottom: 2.37em!important;
// }
// .dcf-pb-8 {
//     padding-bottom: 3.16em!important;
// }
// .dcf-pb-9 {
//     padding-bottom: 4.21em!important;
// }
// .dcf-pb-10 {
//     padding-bottom: 5.62em!important;
// }
// .dcf-pl-0 {
//     padding-left: 0!important;
// }
// .dcf-pl-1 {
//     padding-left: .42em!important;
// }
// .dcf-pl-2 {
//     padding-left: .56em!important;
// }
// .dcf-pl-3 {
//     padding-left: .75em!important;
// }
// .dcf-pl-4 {
//     padding-left: 1em!important;
// }
// .dcf-pl-5 {
//     padding-left: 1.33em!important;
// }
// .dcf-pl-6 {
//     padding-left: 1.78em!important;
// }
// .dcf-pl-7 {
//     padding-left: 2.37em!important;
// }
// .dcf-pl-8 {
//     padding-left: 3.16em!important;
// }
// .dcf-pl-9 {
//     padding-left: 4.21em!important;
// }
// .dcf-pl-10 {
//     padding-left: 5.62em!important;
// }
// .dcf-static {
//     position: static!important;
// }
.dcf-relative {
  position: relative!important;
}
.dcf-absolute {
  position: absolute!important;
}
.dcf-fixed {
  position: fixed!important;
}
// .dcf-pin-top {
//     top: 0!important;
// }
// .dcf-pin-right {
//     right: 0!important;
// }
.dcf-pin-bottom {
  bottom: 0!important;
}
// .dcf-pin-left {
//     left: 0!important;
// }
.dcf-fill-current {
  fill: currentColor!important;
}
// .dcf-stroke-current {
//     stroke: currentColor!important;
// }
// .dcf-txt-center {
//     text-align: center!important;
// }
.dcf-txt-left {
  text-align: left!important;
}
// .dcf-txt-right {
//     text-align: right!important;
// }
// .dcf-txt-baseline {
//     vertical-align: baseline!important;
// }
// .dcf-txt-top {
//     vertical-align: top!important;
// }
// .dcf-txt-middle {
//     vertical-align: middle!important;
// }
// .dcf-txt-bottom {
//     vertical-align: bottom!important;
// }
// .dcf-txt-text-top {
//     vertical-align: text-top!important;
// }
// .dcf-txt-text-bottom {
//     vertical-align: text-bottom!important;
// }
// .dcf-txt-decor-hover,
// .dcf-txt-decor-none {
//     text-decoration: none!important;
// }
// .dcf-truncate,
// .dcf-txt-nowrap {
//     white-space: nowrap!important;
// }
// .dcf-truncate {
//     overflow: hidden!important;
//     text-overflow: ellipsis!important;
// }
// .dcf-roman {
//     font-style: normal!important;
// }
.dcf-italic {
  font-style: italic!important;
}
// .dcf-regular {
//     font-weight: 400!important;
// }
.dcf-bold {
  font-weight: 700!important;
}
// .dcf-lh-1 {
//     line-height: 1!important;
// }
.dcf-lh-2 {
  line-height: 1.13!important;
}
.dcf-lh-3 {
  line-height: 1.33!important;
}
// .dcf-lh-4 {
//     line-height: 1.5!important;
// }
// .dcf-capitalize {
//     text-transform: capitalize!important;
// }
// .dcf-lowercase {
//     text-transform: lowercase!important;
// }
.dcf-uppercase {
  text-transform: uppercase!important;
}
// .dcf-case-reset {
//     text-transform: none!important;
// }
// .dcf-measure {
//     max-width: 31.5692916987rem!important;
// }
.dcf-txt-vertical-lr {
  transform: translateY(-100%) rotate(90deg);
  transform-origin: 0 100%;
}
@supports ((-webkit-writing-mode:vertical-lr) or (writing-mode:vertical-lr)) {
  .dcf-txt-vertical-lr {
    transform: none;
    -webkit-writing-mode: vertical-lr;
    -ms-writing-mode: tb-lr;
    writing-mode: vertical-lr;
  }
}
.dcf-invisible {
    visibility: hidden!important;
}
// .dcf-visible {
//     visibility: visible!important;
// }
.dcf-sr-only,
.dcf-show-on-focus:not(:focus):not(:active) {
  clip: rect(0 0 0 0)!important;
  -webkit-clip-path: inset(50%)!important;
  clip-path: inset(50%)!important;
  height: 1px!important;
  overflow: hidden!important;
  position: absolute!important;
  width: 1px!important;
  white-space: nowrap!important;
}
// .dcf-z-0 {
//     z-index: 0!important;
// }
// .dcf-z-1 {
//     z-index: 1!important;
// }
// .dcf-z-2 {
//     z-index: 2!important;
// }
.unl-bg-scarlet {
  background-color: #d00000!important;
}
.unl-bg-cream {
  background-color: var(--bg-body) !important;
}
// .unl-bg-light-gray {
//     background-color: #e3e3e2!important;
// }
// .unl-bg-lighter-gray {
//     background-color: #ebebea!important;
// }
// .unl-bg-lightest-gray {
//     background-color: #f6f6f5!important;
// }
// .unl-bg-dark-gray {
//     background-color: #6b6b68!important;
// }
// .unl-bg-darker-gray {
//     background-color: #424240!important;
// }
// .unl-bg-darkest-gray {
//     background-color: #242423!important;
// }
// .unl-bg-grit {
//     background-image: url(../images/bg-grit.png)!important;
//     background-position: 50% 50%!important;
//     background-repeat: repeat!important;
//     background-size: 80px!important;
// }
// @media only screen and (-webkit-min-device-pixel-ratio:2),only screen and (min--moz-device-pixel-ratio:2),only screen and (min-device-pixel-ratio:2),only screen and (min-resolution:2dppx),only screen and (min-resolution:192dpi) {
//     .unl-bg-grit {
//         background-image: url(../images/bg-grit_2x.png)!important;
//     }
// }
.unl-b-scarlet {
  border-color: #d00000!important;
}
.unl-bt-scarlet {
  border-top-color: #d00000!important;
}
// .unl-br-scarlet {
//     border-right-color: #d00000!important;
// }
// .unl-bb-scarlet {
//     border-bottom-color: #d00000!important;
// }
// .unl-bl-scarlet {
//     border-left-color: #d00000!important;
// }
// .unl-b-cream {
//     border-color: #fefdfa!important;
// }
// .unl-bt-cream {
//     border-top-color: #fefdfa!important;
// }
// .unl-br-cream {
//     border-right-color: #fefdfa!important;
// }
// .unl-bb-cream {
//     border-bottom-color: #fefdfa!important;
// }
// .unl-bl-cream {
//     border-left-color: #fefdfa!important;
// }
// .unl-b-gray {
//     border-color: #c7c8ca!important;
// }
// .unl-bt-gray {
//     border-top-color: #c7c8ca!important;
// }
// .unl-br-gray {
//     border-right-color: #c7c8ca!important;
// }
// .unl-bb-gray {
//     border-bottom-color: #c7c8ca!important;
// }
// .unl-bl-gray {
//     border-left-color: #c7c8ca!important;
// }
// .unl-b-lightest-gray {
//     border-color: #f6f6f5!important;
// }
// .unl-bt-lightest-gray {
//     border-top-color: #f6f6f5!important;
// }
// .unl-br-lightest-gray {
//     border-right-color: #f6f6f5!important;
// }
// .unl-bb-lightest-gray {
//     border-bottom-color: #f6f6f5!important;
// }
// .unl-bl-lightest-gray {
//     border-left-color: #f6f6f5!important;
// }
// .unl-b-lighter-gray {
//     border-color: #ebebea!important;
// }
// .unl-bt-lighter-gray {
//     border-top-color: #ebebea!important;
// }
// .unl-br-lighter-gray {
//     border-right-color: #ebebea!important;
// }
// .unl-bb-lighter-gray {
//     border-bottom-color: #ebebea!important;
// }
// .unl-bl-lighter-gray {
//     border-left-color: #ebebea!important;
// }
// .unl-b-light-gray {
//     border-color: #e3e3e2!important;
// }
// .unl-bt-light-gray {
//     border-top-color: #e3e3e2!important;
// }
// .unl-br-light-gray {
//     border-right-color: #e3e3e2!important;
// }
// .unl-bb-light-gray {
//     border-bottom-color: #e3e3e2!important;
// }
// .unl-bl-light-gray {
//     border-left-color: #e3e3e2!important;
// }
// .unl-b-dark-gray {
//     border-color: #6b6b68!important;
// }
// .unl-bt-dark-gray {
//     border-top-color: #6b6b68!important;
// }
// .unl-br-dark-gray {
//     border-right-color: #6b6b68!important;
// }
// .unl-bb-dark-gray {
//     border-bottom-color: #6b6b68!important;
// }
// .unl-bl-dark-gray {
//     border-left-color: #6b6b68!important;
// }
// .unl-b-darker-gray {
//     border-color: #424240!important;
// }
// .unl-bt-darker-gray {
//     border-top-color: #424240!important;
// }
// .unl-br-darker-gray {
//     border-right-color: #424240!important;
// }
// .unl-bb-darker-gray {
//     border-bottom-color: #424240!important;
// }
// .unl-bl-darker-gray {
//     border-left-color: #424240!important;
// }
// .unl-b-darkest-gray {
//     border-color: #242423!important;
// }
// .unl-bt-darkest-gray {
//     border-top-color: #242423!important;
// }
// .unl-br-darkest-gray {
//     border-right-color: #242423!important;
// }
// .unl-bb-darkest-gray {
//     border-bottom-color: #242423!important;
// }
// .unl-bl-darkest-gray {
//     border-left-color: #242423!important;
// }
.unl-scarlet,
a.unl-scarlet,
a.unl-scarlet:link {
  color: var(--link)!important;
}
.unl-cream,
a.unl-cream,
a.unl-cream:link {
  color: var(--inverse)!important;
}
// .unl-light-gray {
//   color: #e3e3e2!important;
// }
// .unl-lighter-gray {
//     color: #ebebea!important;
// }
// .unl-lightest-gray {
//     color: #f6f6f5!important;
// }
// .unl-dark-gray {
//     color: #6b6b68!important;
// }
// .unl-darker-gray {
//     color: #424240!important;
// }
// .unl-darkest-gray {
//     color: #242423!important;
// }
.unl-font-serif-ltd-caps {
  font-family: Mercury SSm Ltd Caps A,Mercury SSm Ltd Caps B,Georgia,serif!important;
}
.unl-font-serif-ltd-italic {
  font-family: Mercury SSm Ltd Italic A,Mercury SSm Ltd Italic B,Georgia,serif!important;
}
// .unl-font-sans {
//   font-family: Gotham SSm A,Gotham SSm B,Verdana,sans-serif!important;
// }
// .unl .dcf-txt-base {
//     font-size: 1rem!important;
// }
.unl .dcf-txt-3xs {
  font-size: .56em!important;
}
.unl .dcf-txt-2xs {
  font-size: .63em!important;
}
.unl .dcf-txt-xs {
  font-size: .75em!important;
}
.unl .dcf-txt-sm {
  font-size: .84em!important;
}
// .unl .dcf-txt-md {
//     font-size: 1em!important;
// }
// .unl .dcf-txt-lg {
//     font-size: 1.13em!important;
// }
.unl .dcf-txt-h6 {
    font-size: 1em!important;
}
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h6 {
//         font-size: 1.13em!important;
//     }
// }
.unl .dcf-txt-h5 {
    font-size: 1.13em!important;
}
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h5 {
//         font-size: 1.33em!important;
//     }
// }
// .unl .dcf-txt-h4 {
//     font-size: 1.33em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h4 {
//         font-size: 1.5em!important;
//     }
// }
// .unl .dcf-txt-h3 {
//     font-size: 1.5em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h3 {
//         font-size: 1.78em!important;
//     }
// }
// .unl .dcf-txt-h2 {
//     font-size: 1.78em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-h2 {
//         font-size: 2em!important;
//     }
// }
.unl .dcf-txt-h1 {
  font-size: 2em!important;
}
// @media only screen and (min-width:56.12em) {
//   .unl .dcf-txt-h1 {
//     font-size: 2.37em!important;
//   }
// }
// .unl .dcf-txt-xl {
//     font-size: 2.37em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-xl {
//         font-size: 2.67em!important;
//     }
// }
// .unl .dcf-txt-2xl {
//     font-size: 2.67em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-2xl {
//         font-size: 3.16em!important;
//     }
// }
// .unl .dcf-txt-3xl {
//     font-size: 3.16em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-3xl {
//         font-size: 3.56em!important;
//     }
// }
// .unl .dcf-txt-4xl {
//     font-size: 3.56em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-4xl {
//         font-size: 4.21em!important;
//     }
// }
// .unl .dcf-txt-5xl {
//     font-size: 4.21em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-5xl {
//         font-size: 4.74em!important;
//     }
// }
// .unl .dcf-txt-6xl {
//     font-size: 4.74em!important;
// }
// @media only screen and (min-width:56.12em) {
//     .unl .dcf-txt-6xl {
//         font-size: 5.62em!important;
//     }
// }
// .unl-ls-0 {
//     letter-spacing: 0!important;
// }
.unl-ls-1 {
  letter-spacing: .01em!important;
}
.unl-ls-2 {
  letter-spacing: .06em!important;
}
.unl-ls-3 {
  letter-spacing: .1em!important;
}
@media only screen and (max-width:56.12em) {
  .unl .dcf-breadcrumbs {
    height: 4.21em;
    overflow: hidden;
  }
  .unl .dcf-breadcrumbs ol {
    padding-bottom: 4.21em;
    overflow-x: auto;
    overflow-y: hidden;
  }
  .unl .dcf-breadcrumbs li {
    flex-shrink: 0;
  }
  .unl .dcf-logo-lockup {
    padding-bottom: 1em;
    padding-top: 1.33em;
  }
  .unl-site-title a {
    font-size: 1em;
  }
  .unl .dcf-idm-login {
    flex-direction: column;
  }
  .unl .dcf-nav-toggle-group {
    display: flex;
    z-index: 999;
  }
  .unl .dcf-nav-toggle-btn {
    flex-basis: 25%;
  }
  .unl .dcf-nav-menu {
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
  }
  .unl .dcf-header .dcf-institution-title,
  .unl .dcf-cta-header,
  .unl .dcf-idm-toggle,
  .unl .dcf-search-toggle-wrapper {
    display: none;
  }
}
@media only screen and (min-width:56.12em) {
  h1 {
    font-size: 2.37em;
  }
  h2 {
    font-size: 2em;
  }
  h3 {
    font-size: 1.78em;
  }
  .unl .dcf-breadcrumbs li:first-child,
  .unl .dcf-breadcrumbs li:last-child {
    flex-shrink: 0;
  }
  .unl .dcf-breadcrumbs li:not(:first-child),
  .unl .dcf-breadcrumbs li:not(:last-child) {
    min-width: 0;
  }
  .unl .dcf-breadcrumbs li a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .unl .dcf-header-global {
    border-bottom: 1px solid var(--b);
    padding-top: .18em;
  }
  .unl .dcf-header-global-item {
    margin-left: 3.16vw;
  }
  .unl .dcf-cta-header {
    display: flex;
    flex-grow: 3;
    font-size: .63em;
    justify-content: flex-end;
    margin-bottom: 0;
  }
  .unl .dcf-logo-lockup {
    padding-bottom: 1.13em;
    padding-top: 1.33em;
  }
  .unl .dcf-idm-login {
    flex-direction: row-reverse;
  }
  .unl .dcf-idm-img {
    fill: #e3e3e2;
  }
  .unl .dcf-nav-local > ul:first-child {
    grid-template-columns: repeat(6, 1fr);
    overflow: hidden;
    width: 100%;
  }
//   .unl .dcf-nav-local > ul > li {
//     position: relative;
//   }
  .unl .dcf-nav-local li:not(:last-child) {
    margin-right: 0;
  }
  .unl .dcf-nav-local > ul > li > a {
    border-left: 1px solid #a00000;
    height: 100%;
  }
  .unl .dcf-nav-toggle-btn-menu~.dcf-nav-local ul ul {
//     pointer-events: none;
    position: absolute;
//     top: 100%;
    visibility: hidden;
  }
  .unl .dcf-nav-menu {
    background-color: #d00000;
    display: flex;
    flex-wrap: nowrap;
    padding-left: 5.62vw;
    padding-right: 5.62vw;
  }
  .unl .dcf-nav-menu a,
  .unl .dcf-nav-menu button {
    font-size: .75em;
  }
  .unl .dcf-search {
    max-width: 13.32em;
  }
  .unl .dcf-idm-toggle,
  .unl .dcf-nav-menu .dcf-nav-toggle-btn-menu,
  .unl .dcf-search-toggle-wrapper {
    display: flex;
  }
  .unl .dcf-search-toggle-label {
    padding: .42em 3.16em .42em .75em;
  }
  .unl .dcf-txt-h6 {
    font-size: 1.13em!important;
  }
  .unl .dcf-txt-h5 {
    font-size: 1.33em!important;
  }
  .unl .dcf-txt-h1 {
    font-size: 2.37em!important;
  }
  .unl .dcf-nav-toggle-group,
  .unl .dcf-cta-nav {
    display: none;
  }
}
.dcf-modal-overlay[aria-hidden=true] {
\topacity: 0;
\tpointer-events: none;
\tvisibility: hidden;
}
", "wdn/templates_5.3/scss/critical.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/critical.scss");
    }
}
