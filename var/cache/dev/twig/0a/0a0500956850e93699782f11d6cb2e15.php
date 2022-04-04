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

/* wdn/templates_5.2/js/plugins/ui/css/jquery-ui-wdn.css */
class __TwigTemplate_56329df98a84ecc6e5a0bf3dde5b055c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/plugins/ui/css/jquery-ui-wdn.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/plugins/ui/css/jquery-ui-wdn.css"));

        // line 1
        echo "@import url(jquery-ui.css);
/* UNL WDN jQuery UI overrides */
.ui-widget,
.ui-widget button,
.ui-widget input,
.ui-widget select,
.ui-widget textarea {
  font-family: inherit; }

.ui-button.ui-state-active:hover,
.ui-button:active,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active {
  border: 1px solid #9e0900;
  background-color: #d00000; }

.ui-datepicker,
.ui-datepicker .ui-datepicker-header .ui-state-hover,
.ui-datepicker .ui-state-default,
.ui-datepicker .ui-state-active,
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
  border: 0; }

.ui-datepicker .ui-corner-all,
.ui-tabs .ui-tabs-nav {
  border-radius: 0; }

.ui-widget-header,
.ui-datepicker .ui-datepicker-title,
.ui-datepicker table,
.ui-progressbar .ui-progressbar-value {
  margin: 0; }

.ui-datepicker,
.ui-datepicker td,
.ui-dialog,
.ui-tabs,
.ui-sortable,
.ui-selectable {
  padding: 0; }

.ui-widget-header {
  font-size: 0.84em;
  text-transform: uppercase; }

.ui-datepicker .ui-datepicker-header {
  padding: 1.069em 1em 1em; }

.ui-datepicker .ui-datepicker-header .ui-state-hover {
  background: none; }

.ui-datepicker .ui-datepicker-header .ui-state-hover .ui-icon {
  background-image: url(\"images/ui-icons_ffffff_256x240.png\"); }

.ui-datepicker .ui-state-active {
  background-color: #424240; }

.ui-datepicker .ui-state-disabled {
  background-color: var(--bg-lightest-gray);
  opacity: 1; }

.ui-datepicker .ui-state-highlight {
  background-color: var(--bg-scarlet);
  color: #fefdfa; }

.ui-datepicker .ui-datepicker-title {
  line-height: 1; }

.ui-datepicker .ui-datepicker-next {
  float: right; }

.ui-datepicker .ui-datepicker-prev {
  float: left; }

.ui-datepicker .ui-datepicker-next,
.ui-datepicker .ui-datepicker-prev {
  cursor: pointer;
  height: auto;
  margin: -0.16em 0;
  position: static; }

.ui-datepicker .ui-datepicker-next span,
.ui-datepicker .ui-datepicker-prev span {
  margin: auto;
  position: static; }

.ui-datepicker table th {
  background-color: var(--bg-lightest-gray);
  border: 1px solid #c7c8ca;
  font-size: 0.84em;
  font-weight: 400;
  padding: 12px 1px;
  text-transform: uppercase;
  width: 14%; }

.ui-datepicker tbody tr {
  background-color: transparent; }

.ui-datepicker td {
  background-color: var(--bg-white);
  border: 1px solid #e3e3e2;
  font-size: 0.75em; }

.ui-datepicker td .ui-state-hover {
  outline: 2px solid #d00000; }

.ui-datepicker td a,
.ui-datepicker td span {
  text-align: center;
  padding: 0.66em 1px; }

.ui-icon {
  display: inline-block; }

.ui-selecting {
  background-color: var(--bg-lightest-gray); }

.ui-selected {
  background-color: var(--bg-scarlet);
  color: #fefdfa; }

[class*=\"ui-corner-\"] {
  border-radius: 0 !important; }

.ui-button {
  font-size: 0.75em;
  letter-spacing: 0.06em;
  padding: 0.75em 1.33em;
  text-transform: uppercase; }

.ui-button,
.ui-button:focus,
.ui-button:hover,
.ui-button:active,
a.ui-button,
a:link.ui-button,
a:visited.ui-button {
  border-style: solid;
  border-width: 2px;
  color: #fff;
  font-weight: bold; }

.ui-button,
.ui-button:focus,
.ui-button:hover {
  background-color: #9d0000;
  border-color: #9d0000; }

.ui-button:focus {
  outline: none; }

.ui-button:focus,
.ui-button:hover {
  box-shadow: 0 1px 0.56em rgba(157, 0, 0, 0.6);
  z-index: 1; }

.ui-button:active {
  background-color: #9d0000;
  border-color: #9d0000; }

/*# sourceMappingURL=jquery-ui-wdn.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/plugins/ui/css/jquery-ui-wdn.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import url(jquery-ui.css);
/* UNL WDN jQuery UI overrides */
.ui-widget,
.ui-widget button,
.ui-widget input,
.ui-widget select,
.ui-widget textarea {
  font-family: inherit; }

.ui-button.ui-state-active:hover,
.ui-button:active,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active {
  border: 1px solid #9e0900;
  background-color: #d00000; }

.ui-datepicker,
.ui-datepicker .ui-datepicker-header .ui-state-hover,
.ui-datepicker .ui-state-default,
.ui-datepicker .ui-state-active,
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
  border: 0; }

.ui-datepicker .ui-corner-all,
.ui-tabs .ui-tabs-nav {
  border-radius: 0; }

.ui-widget-header,
.ui-datepicker .ui-datepicker-title,
.ui-datepicker table,
.ui-progressbar .ui-progressbar-value {
  margin: 0; }

.ui-datepicker,
.ui-datepicker td,
.ui-dialog,
.ui-tabs,
.ui-sortable,
.ui-selectable {
  padding: 0; }

.ui-widget-header {
  font-size: 0.84em;
  text-transform: uppercase; }

.ui-datepicker .ui-datepicker-header {
  padding: 1.069em 1em 1em; }

.ui-datepicker .ui-datepicker-header .ui-state-hover {
  background: none; }

.ui-datepicker .ui-datepicker-header .ui-state-hover .ui-icon {
  background-image: url(\"images/ui-icons_ffffff_256x240.png\"); }

.ui-datepicker .ui-state-active {
  background-color: #424240; }

.ui-datepicker .ui-state-disabled {
  background-color: var(--bg-lightest-gray);
  opacity: 1; }

.ui-datepicker .ui-state-highlight {
  background-color: var(--bg-scarlet);
  color: #fefdfa; }

.ui-datepicker .ui-datepicker-title {
  line-height: 1; }

.ui-datepicker .ui-datepicker-next {
  float: right; }

.ui-datepicker .ui-datepicker-prev {
  float: left; }

.ui-datepicker .ui-datepicker-next,
.ui-datepicker .ui-datepicker-prev {
  cursor: pointer;
  height: auto;
  margin: -0.16em 0;
  position: static; }

.ui-datepicker .ui-datepicker-next span,
.ui-datepicker .ui-datepicker-prev span {
  margin: auto;
  position: static; }

.ui-datepicker table th {
  background-color: var(--bg-lightest-gray);
  border: 1px solid #c7c8ca;
  font-size: 0.84em;
  font-weight: 400;
  padding: 12px 1px;
  text-transform: uppercase;
  width: 14%; }

.ui-datepicker tbody tr {
  background-color: transparent; }

.ui-datepicker td {
  background-color: var(--bg-white);
  border: 1px solid #e3e3e2;
  font-size: 0.75em; }

.ui-datepicker td .ui-state-hover {
  outline: 2px solid #d00000; }

.ui-datepicker td a,
.ui-datepicker td span {
  text-align: center;
  padding: 0.66em 1px; }

.ui-icon {
  display: inline-block; }

.ui-selecting {
  background-color: var(--bg-lightest-gray); }

.ui-selected {
  background-color: var(--bg-scarlet);
  color: #fefdfa; }

[class*=\"ui-corner-\"] {
  border-radius: 0 !important; }

.ui-button {
  font-size: 0.75em;
  letter-spacing: 0.06em;
  padding: 0.75em 1.33em;
  text-transform: uppercase; }

.ui-button,
.ui-button:focus,
.ui-button:hover,
.ui-button:active,
a.ui-button,
a:link.ui-button,
a:visited.ui-button {
  border-style: solid;
  border-width: 2px;
  color: #fff;
  font-weight: bold; }

.ui-button,
.ui-button:focus,
.ui-button:hover {
  background-color: #9d0000;
  border-color: #9d0000; }

.ui-button:focus {
  outline: none; }

.ui-button:focus,
.ui-button:hover {
  box-shadow: 0 1px 0.56em rgba(157, 0, 0, 0.6);
  z-index: 1; }

.ui-button:active {
  background-color: #9d0000;
  border-color: #9d0000; }

/*# sourceMappingURL=jquery-ui-wdn.css.map */", "wdn/templates_5.2/js/plugins/ui/css/jquery-ui-wdn.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/plugins/ui/css/jquery-ui-wdn.css");
    }
}
