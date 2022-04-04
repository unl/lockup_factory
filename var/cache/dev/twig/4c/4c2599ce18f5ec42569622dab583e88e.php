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

/* wdn/templates_5.3/js/plugins/ui/css/jquery-ui-wdn.scss */
class __TwigTemplate_31064e1e91c03e40783359696bc9d034 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/ui/css/jquery-ui-wdn.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/ui/css/jquery-ui-wdn.scss"));

        // line 1
        echo "@import \"jquery-ui.css\";
@import '../../../../scss/pre.tmp.scss';


/* UNL WDN jQuery UI overrides */
.ui-widget,
.ui-widget button,
.ui-widget input,
.ui-widget select,
.ui-widget textarea {
  font-family: inherit;
}



// Existing
.ui-datepicker,
.ui-datepicker .ui-datepicker-header .ui-state-hover,
.ui-datepicker .ui-state-default,
.ui-datepicker .ui-state-active,
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
\tborder: 0;
}

.ui-datepicker .ui-corner-all,
.ui-tabs .ui-tabs-nav {
\tborder-radius: 0;
}

.ui-widget-header,
.ui-datepicker .ui-datepicker-title,
.ui-datepicker table,
.ui-progressbar .ui-progressbar-value {
\tmargin: 0;
}

.ui-datepicker,
.ui-datepicker td,
.ui-dialog,
.ui-tabs,
.ui-sortable,
.ui-selectable {
\tpadding: 0;
}



// Widgets
.ui-widget.ui-widget-content,
.ui-widget-content,
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
  background-color: var(--bg-tabs-panel);
  border-color: var(--b-tabs-panel);
  color: var(--body);
}

.ui-button.ui-state-active:hover,
.ui-button:active,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active {
  border: 1px solid #9e0900;
  background-color: #d00000;
}



// Dialog
.ui-dialog {
  box-shadow: \$box-shadow-datepicker-dialog;
}

.ui-dialog .ui-dialog-titlebar {
  background-color: var(--bg-tabs-panel);
  border: 0;
}

.ui-dialog-title {
  color: var(--heading);
}



// Links
.ui-state-default a,
.ui-state-default a:link {
  color: var(--link);
}

.ui-state-default a:visited {
  color: var(--visited);
}



// Forms, labels and inputs
.ui-widget label {
  @include txt-sm;
}

.ui-widget input,
.ui-widget textarea {
  background-color: var(--bg-input);
  border: 1px solid var(--b-input);
  border-radius: 3px;
  padding: \$padding-top-input \$padding-right-input \$padding-bottom-input \$padding-left-input;
}

.ui-widget input:not([type=\"submit\"]):disabled,
.ui-widget textarea:disabled {
  background-color: var(--bg-input-disabled);
}

.ui-widget input:not([type=\"submit\"]):hover,
.ui-widget textarea:hover {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}

.ui-widget input:not([type=\"submit\"]):focus,
.ui-widget textarea:focus {
  border-color: var(--b-input-focus);
  box-shadow: 0 0 0 3px var(--bg-body), 0 0 0 5px var(--b-input-focus);
  outline: none;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}



// Datepicker
.ui-datepicker .ui-datepicker-header {
  padding: 1.069em 1em 1em;
}

.ui-datepicker .ui-datepicker-header .ui-state-hover {
  background: none;
}

.ui-datepicker .ui-datepicker-header .ui-state-hover .ui-icon {
  background-image: url(\"images/ui-icons_ffffff_256x240.png\");
}

.ui-datepicker .ui-state-active {
  @include bg-darker;
}

.ui-datepicker .ui-state-disabled {
  @include bg-lightest;
\topacity: 1;
}

.ui-datepicker .ui-state-highlight {
\t@include bg-scarlet;
\tcolor: \$cream;
}

.ui-datepicker .ui-datepicker-title {
\tline-height: 1;
}

.ui-datepicker .ui-datepicker-next {
\tfloat: right;
}

.ui-datepicker .ui-datepicker-prev {
\tfloat: left;
}

.ui-datepicker .ui-datepicker-next,
.ui-datepicker .ui-datepicker-prev {
\tcursor: pointer;
\theight: auto;
\tmargin: -0.16em 0;
\tposition: static;
}

.ui-datepicker .ui-datepicker-next span,
.ui-datepicker .ui-datepicker-prev span {
\tmargin: auto;
\tposition: static;
}

.ui-datepicker table th {
  @include bg-lightest;
\tborder: 1px solid \$gray;
  @include txt-sm;
\tfont-weight: 400;
\tpadding: 12px 1px;
\ttext-transform: uppercase;
\twidth: 14%;
}

.ui-datepicker tbody tr {
\tbackground-color: transparent;
}

.ui-datepicker td {
  @include bg-white;
\tborder: 1px solid \$light-gray;
\t@include txt-xs;
}

.ui-datepicker td .ui-state-hover {
\toutline: 2px solid \$scarlet;
}

.ui-datepicker td a,
.ui-datepicker td span {
\ttext-align: center;
\tpadding: 0.66em 1px;
}

.ui-icon {
\tdisplay: inline-block;
}

.ui-selecting {
  @include bg-lightest;
}

.ui-selected {
\t@include bg-scarlet;
\tcolor: \$cream;
}

[class*=\"ui-corner-\"] {
  border-radius: 0 !important;
}



// Buttons
.ui-button,
button.ui-state-default {
  background-color: var(--bg-btn-primary);
  @include txt-sm;
  padding: \$length-em-3 \$length-em-4;
}

.ui-button,
button.ui-button,
input[type=button].ui-button,
input[type=submit].ui-button {
  @include txt-sm;
  @include lh-4;
}

.ui-button,
.ui-button:focus,
.ui-button:hover,
.ui-button:active,
button.ui-state-default,
a.ui-button,
a:link.ui-button,
a:visited.ui-button {
  border: 2px solid var(--b-btn-primary);
  border-radius: \$roundrect;
  color: var(--btn-primary);
  @include bold;
}

.ui-button.ui-button-icon-only {
  background-color: transparent;
  border-color: transparent;
}

// Hover & Active
.ui-button:not(:disabled):hover,
.ui-button:not(:disabled):active,
button.ui-state-default:not(:disabled):hover,
button.ui-state-default:not(:disabled):active {
  background-color: var(--bg-btn-primary-hover);
  border-color: var(--b-btn-primary-hover);
}

.ui-button.ui-button-icon-only:hover {
  background-color: var(--bg-btn-secondary-tertiary-hover);
  border-color: transparent;
}

// Focus
.ui-button:focus,
button.ui-state-default:focus {
  box-shadow: 0 0 0 3px var(--bg-body), 0 0 0 5px var(--b-input-focus);
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}

// Active
.ui-button:active,
button.ui-state-default:active {
  box-shadow: 0 0 0 3px var(--bg-body), 0 0 0 5px var(--b-btn-primary-hover);
}



// Progress Bar
.ui-progressbar .ui-progressbar-value {
  background-color: \$cerulean;
}

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/plugins/ui/css/jquery-ui-wdn.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import \"jquery-ui.css\";
@import '../../../../scss/pre.tmp.scss';


/* UNL WDN jQuery UI overrides */
.ui-widget,
.ui-widget button,
.ui-widget input,
.ui-widget select,
.ui-widget textarea {
  font-family: inherit;
}



// Existing
.ui-datepicker,
.ui-datepicker .ui-datepicker-header .ui-state-hover,
.ui-datepicker .ui-state-default,
.ui-datepicker .ui-state-active,
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
\tborder: 0;
}

.ui-datepicker .ui-corner-all,
.ui-tabs .ui-tabs-nav {
\tborder-radius: 0;
}

.ui-widget-header,
.ui-datepicker .ui-datepicker-title,
.ui-datepicker table,
.ui-progressbar .ui-progressbar-value {
\tmargin: 0;
}

.ui-datepicker,
.ui-datepicker td,
.ui-dialog,
.ui-tabs,
.ui-sortable,
.ui-selectable {
\tpadding: 0;
}



// Widgets
.ui-widget.ui-widget-content,
.ui-widget-content,
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
  background-color: var(--bg-tabs-panel);
  border-color: var(--b-tabs-panel);
  color: var(--body);
}

.ui-button.ui-state-active:hover,
.ui-button:active,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active {
  border: 1px solid #9e0900;
  background-color: #d00000;
}



// Dialog
.ui-dialog {
  box-shadow: \$box-shadow-datepicker-dialog;
}

.ui-dialog .ui-dialog-titlebar {
  background-color: var(--bg-tabs-panel);
  border: 0;
}

.ui-dialog-title {
  color: var(--heading);
}



// Links
.ui-state-default a,
.ui-state-default a:link {
  color: var(--link);
}

.ui-state-default a:visited {
  color: var(--visited);
}



// Forms, labels and inputs
.ui-widget label {
  @include txt-sm;
}

.ui-widget input,
.ui-widget textarea {
  background-color: var(--bg-input);
  border: 1px solid var(--b-input);
  border-radius: 3px;
  padding: \$padding-top-input \$padding-right-input \$padding-bottom-input \$padding-left-input;
}

.ui-widget input:not([type=\"submit\"]):disabled,
.ui-widget textarea:disabled {
  background-color: var(--bg-input-disabled);
}

.ui-widget input:not([type=\"submit\"]):hover,
.ui-widget textarea:hover {
  transition: border-color \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}

.ui-widget input:not([type=\"submit\"]):focus,
.ui-widget textarea:focus {
  border-color: var(--b-input-focus);
  box-shadow: 0 0 0 3px var(--bg-body), 0 0 0 5px var(--b-input-focus);
  outline: none;
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}



// Datepicker
.ui-datepicker .ui-datepicker-header {
  padding: 1.069em 1em 1em;
}

.ui-datepicker .ui-datepicker-header .ui-state-hover {
  background: none;
}

.ui-datepicker .ui-datepicker-header .ui-state-hover .ui-icon {
  background-image: url(\"images/ui-icons_ffffff_256x240.png\");
}

.ui-datepicker .ui-state-active {
  @include bg-darker;
}

.ui-datepicker .ui-state-disabled {
  @include bg-lightest;
\topacity: 1;
}

.ui-datepicker .ui-state-highlight {
\t@include bg-scarlet;
\tcolor: \$cream;
}

.ui-datepicker .ui-datepicker-title {
\tline-height: 1;
}

.ui-datepicker .ui-datepicker-next {
\tfloat: right;
}

.ui-datepicker .ui-datepicker-prev {
\tfloat: left;
}

.ui-datepicker .ui-datepicker-next,
.ui-datepicker .ui-datepicker-prev {
\tcursor: pointer;
\theight: auto;
\tmargin: -0.16em 0;
\tposition: static;
}

.ui-datepicker .ui-datepicker-next span,
.ui-datepicker .ui-datepicker-prev span {
\tmargin: auto;
\tposition: static;
}

.ui-datepicker table th {
  @include bg-lightest;
\tborder: 1px solid \$gray;
  @include txt-sm;
\tfont-weight: 400;
\tpadding: 12px 1px;
\ttext-transform: uppercase;
\twidth: 14%;
}

.ui-datepicker tbody tr {
\tbackground-color: transparent;
}

.ui-datepicker td {
  @include bg-white;
\tborder: 1px solid \$light-gray;
\t@include txt-xs;
}

.ui-datepicker td .ui-state-hover {
\toutline: 2px solid \$scarlet;
}

.ui-datepicker td a,
.ui-datepicker td span {
\ttext-align: center;
\tpadding: 0.66em 1px;
}

.ui-icon {
\tdisplay: inline-block;
}

.ui-selecting {
  @include bg-lightest;
}

.ui-selected {
\t@include bg-scarlet;
\tcolor: \$cream;
}

[class*=\"ui-corner-\"] {
  border-radius: 0 !important;
}



// Buttons
.ui-button,
button.ui-state-default {
  background-color: var(--bg-btn-primary);
  @include txt-sm;
  padding: \$length-em-3 \$length-em-4;
}

.ui-button,
button.ui-button,
input[type=button].ui-button,
input[type=submit].ui-button {
  @include txt-sm;
  @include lh-4;
}

.ui-button,
.ui-button:focus,
.ui-button:hover,
.ui-button:active,
button.ui-state-default,
a.ui-button,
a:link.ui-button,
a:visited.ui-button {
  border: 2px solid var(--b-btn-primary);
  border-radius: \$roundrect;
  color: var(--btn-primary);
  @include bold;
}

.ui-button.ui-button-icon-only {
  background-color: transparent;
  border-color: transparent;
}

// Hover & Active
.ui-button:not(:disabled):hover,
.ui-button:not(:disabled):active,
button.ui-state-default:not(:disabled):hover,
button.ui-state-default:not(:disabled):active {
  background-color: var(--bg-btn-primary-hover);
  border-color: var(--b-btn-primary-hover);
}

.ui-button.ui-button-icon-only:hover {
  background-color: var(--bg-btn-secondary-tertiary-hover);
  border-color: transparent;
}

// Focus
.ui-button:focus,
button.ui-state-default:focus {
  box-shadow: 0 0 0 3px var(--bg-body), 0 0 0 5px var(--b-input-focus);
  transition: box-shadow \$transition-duration-hover-on \$transition-timing-fn-hover-on;
}

// Active
.ui-button:active,
button.ui-state-default:active {
  box-shadow: 0 0 0 3px var(--bg-body), 0 0 0 5px var(--b-btn-primary-hover);
}



// Progress Bar
.ui-progressbar .ui-progressbar-value {
  background-color: \$cerulean;
}

", "wdn/templates_5.3/js/plugins/ui/css/jquery-ui-wdn.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/plugins/ui/css/jquery-ui-wdn.scss");
    }
}
