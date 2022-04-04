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

/* wdn/templates_5.0/js/plugins/ui/css/jquery-ui-wdn.scss */
class __TwigTemplate_50da4c288e5745df311f047b7c39f831 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/ui/css/jquery-ui-wdn.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/ui/css/jquery-ui-wdn.scss"));

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

.ui-button.ui-state-active:hover,
.ui-button:active,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active {
  border: 1px solid #9e0900;
  background-color: #d00000;
}

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

.ui-widget-header {
  @include font-sans;
  @include txt-sm;
\ttext-transform: uppercase;
}

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
  @include font-sans;
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

.ui-button {
  @include font-sans;
  @include txt-xs;
  @include ls-2;
  padding: \$length-em-3 \$length-em-5;
  text-transform: uppercase;
}

.ui-button,
.ui-button:focus,
.ui-button:hover,
.ui-button:active,
a.ui-button,
a:link.ui-button,
a:visited.ui-button {
  border-style: solid;
  border-width: 2px;
  color: \$white;
  font-weight: bold;
}

.ui-button,
.ui-button:focus,
.ui-button:hover {
  background-color: \$color-button;
  border-color: \$color-button;
}

.ui-button:focus {
  outline: none;
}

.ui-button:focus,
.ui-button:hover {
  box-shadow: 0 1px \$length-em-2 fade-out(\$color-button-hover,.4);
  z-index: 1;
}

.ui-button:active {
  background-color: \$color-button-active;
  border-color: \$color-button-active;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/ui/css/jquery-ui-wdn.scss";
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

.ui-button.ui-state-active:hover,
.ui-button:active,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active {
  border: 1px solid #9e0900;
  background-color: #d00000;
}

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

.ui-widget-header {
  @include font-sans;
  @include txt-sm;
\ttext-transform: uppercase;
}

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
  @include font-sans;
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

.ui-button {
  @include font-sans;
  @include txt-xs;
  @include ls-2;
  padding: \$length-em-3 \$length-em-5;
  text-transform: uppercase;
}

.ui-button,
.ui-button:focus,
.ui-button:hover,
.ui-button:active,
a.ui-button,
a:link.ui-button,
a:visited.ui-button {
  border-style: solid;
  border-width: 2px;
  color: \$white;
  font-weight: bold;
}

.ui-button,
.ui-button:focus,
.ui-button:hover {
  background-color: \$color-button;
  border-color: \$color-button;
}

.ui-button:focus {
  outline: none;
}

.ui-button:focus,
.ui-button:hover {
  box-shadow: 0 1px \$length-em-2 fade-out(\$color-button-hover,.4);
  z-index: 1;
}

.ui-button:active {
  background-color: \$color-button-active;
  border-color: \$color-button-active;
}
", "wdn/templates_5.0/js/plugins/ui/css/jquery-ui-wdn.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/ui/css/jquery-ui-wdn.scss");
    }
}
