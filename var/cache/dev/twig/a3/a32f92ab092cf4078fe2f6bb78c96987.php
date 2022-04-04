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

/* wdn/templates_5.3/scss/generic/_generic.color-scheme.scss */
class __TwigTemplate_0b9f2a7bfdfbd3f11e1460cd7963c036 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/generic/_generic.color-scheme.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/generic/_generic.color-scheme.scss"));

        // line 1
        echo "/////////////////////////////////
// THEME / GENERIC / COLOR-SCHEME
/////////////////////////////////


:root {
//   color-scheme: light dark;

  // Background Colors
  --bg-badge: #{\$bg-color-badge-light-mode};
  --bg-body: #{\$bg-color-body-light-mode};
  --bg-brand-alpha: #{\$bg-color-brand-alpha-light-mode};
  --bg-brand-light-zeta: #{\$bg-color-brand-light-zeta-light-mode};
  --bg-brand-light-eta: #{\$bg-color-brand-light-eta-light-mode};
  --bg-brand-light-theta: #{\$bg-color-brand-light-theta-light-mode};
  --bg-btn-inverse-primary: #{\$bg-color-button-inverse-primary};
  --bg-btn-inverse-secondary: #{\$bg-color-button-inverse-secondary};
  --bg-btn-inverse-tertiary: #{\$bg-color-button-inverse-tertiary};
  --bg-btn-primary: #{\$bg-color-button-primary-light-mode};
  --bg-btn-primary-hover: #{\$bg-color-button-primary-hover-light-mode};
  --bg-btn-secondary: #{\$bg-color-button-secondary-light-mode};
  --bg-btn-secondary-tertiary-hover: #{\$bg-color-button-secondary-tertiary-hover-light-mode};
  --bg-btn-tertiary: #{\$bg-color-button-tertiary};
  --bg-card: #{\$bg-color-card-light-mode};
  --bg-code: #{\$bg-color-code-light-mode};
  --bg-dialog: #{\$bg-color-dialog-light-mode};
  --bg-input: #{\$bg-color-input-light-mode};
  --bg-input-disabled: #{\$bg-color-input-disabled-light-mode};
  --bg-input-group-addon: #{\$bg-color-input-group-addon-light-mode};
  --bg-inverse: #{\$bg-color-inverse-light-mode};
  --bg-kbd: #{\$bg-color-kbd};
  --bg-light-gray: #{\$bg-color-gray-light-light-mode};
  --bg-lighter-gray: #{\$bg-color-gray-lighter-light-mode};
  --bg-lightest-gray: #{\$bg-color-gray-lightest-light-mode};
  --bg-mark: #{\$bg-color-mark-light-mode};
  --bg-modal-header: #{\$bg-color-modal-header-light-mode};
  --bg-modal-wrapper: #{\$bg-color-modal-wrapper-light-mode};
  --bg-overlay-dark: #{\$bg-color-overlay-dark-light-mode};
  --bg-overlay-light: #{\$bg-color-overlay-light-light-mode};
  --bg-pre: #{\$bg-color-pre};
  --bg-radio: #{\$bg-color-radio-dot};
  --bg-required: #{\$bg-color-required-light-mode};
  --bg-select-1: #{\$bg-color-select-1-light-mode};
  --bg-select-2: #{\$bg-color-select-2-light-mode};
  --bg-table-stripe: #{\$bg-color-table-stripe-light-mode};
  --bg-tab-selected: #{\$bg-color-tab-selected-light-mode};
  --bg-tabs-panel: #{\$bg-color-tabs-panel-light-mode};
  --bg-white: #{\$bg-color-white-light-mode};

  // Border Colors
  --b: #{\$border-color};
  --b-breadcrumb-arrow: #{\$border-color-breadcrumb-arrow};
  --b-btn-primary: #{\$border-color-button-primary-light-mode};
  --b-btn-primary-hover: #{\$border-color-button-primary-hover-light-mode};
  --b-btn-secondary: #{\$border-color-button-secondary};
  --b-btn-tertiary: #{\$border-color-button-tertiary};
  --b-btn-inverse-primary: #{\$border-color-button-inverse-primary};
  --b-btn-inverse-secondary: #{\$border-color-button-secondary};
  --b-btn-inverse-tertiary: #{\$border-color-button-tertiary};
  --b-checkmark: #{\$border-color-checkmark};
  --b-fieldset: #{\$border-color-fieldset-light-mode};
  --b-input: #{\$border-color-input-light-mode};
  --b-input-checked: #{\$border-color-input-checked};
  --b-input-focus: #{\$border-color-input-focus-light-mode};
  --b-input-group-addon: #{\$border-color-input-group-addon};
  --b-input-hover: #{\$border-color-input-hover-light-mode};
  --b-light-gray: #{\$border-color-gray-light-light-mode};
  --b-lighter-gray: #{\$border-color-gray-lighter-light-mode};
  --b-lightest-gray: #{\$border-color-gray-lightest-light-mode};
  --b-required: #{\$border-color-required-light-mode};
  --b-table: #{\$border-color-table};
  --b-tab: #{\$border-color-tab};
  --b-tabs-panel: #{\$border-color-tabs-panel};

  // Colors
  --active: #{\$color-active-light-mode};
  --badge: #{\$color-badge-light-mode};
  --body: #{\$color-body-light-mode};
  --brand-alpha: #{\$color-brand-alpha-light-mode};
  --brand-zeta: #{\$color-brand-zeta-light-mode};
  --brand-eta: #{\$color-brand-eta-light-mode};
  --brand-theta: #{\$color-brand-theta-light-mode};
  --btn-inverse-primary: #{\$color-button-inverse-primary};
  --btn-inverse-secondary: #{\$color-button-inverse-secondary};
  --btn-inverse-tertiary: #{\$color-button-inverse-tertiary};
  --btn-primary: #{\$color-button-primary-light-mode};
  --btn-secondary: #{\$color-button-secondary-light-mode};
  --btn-secondary-tertiary-hover: #{\$color-button-secondary-tertiary-hover-light-mode};
  --btn-tertiary: #{\$color-button-tertiary-light-mode};
  --caption: #{\$color-caption};
  --code: #{\$color-code-light-mode};
  --dark-gray: #{\$color-gray-dark-light-mode};
  --darker-gray: #{\$color-gray-darker-light-mode};
  --darkest-gray: #{\$color-gray-darkest-light-mode};
  --figcaption: #{\$color-figcaption-light-mode};
  --focus-outline: #{\$color-focus-outline-light-mode};
  --form-help: #{\$color-form-help-light-mode};
  --heading: #{\$color-heading-light-mode};
  --hover: #{\$color-hover-light-mode};
  --input-group-addon: #{\$color-input-group-addon-light-mode};
  --inverse: #{\$color-inverse-light-mode};
  --inverse-active: #{\$color-inverse-active-light-mode};
  --inverse-link: #{\$color-inverse-link-light-mode};
  --inverse-hover: #{\$color-inverse-hover-light-mode};
  --inverse-visited: #{\$color-inverse-visited-light-mode};
  --kbd: #{\$color-kbd};
  --link: #{\$color-link-light-mode};
  --required: #{\$color-required-label-light-mode};
  --select: #{\$color-select};
  --tab-selected: #{\$color-tab-selected};
  --visited: #{\$color-visited-light-mode};

}


@media (prefers-color-scheme: dark) {

  :root {

    // Background Colors
    --bg-badge: #{\$bg-color-badge-dark-mode};
    --bg-body: #{\$bg-color-body-dark-mode};
    --bg-brand-alpha: #{\$bg-color-brand-alpha-dark-mode};
    --bg-brand-light-zeta: #{\$bg-color-brand-light-zeta-dark-mode};
    --bg-brand-light-eta: #{\$bg-color-brand-light-eta-dark-mode};
    --bg-brand-light-theta: #{\$bg-color-brand-light-theta-dark-mode};
    --bg-btn-inverse-primary: #{\$bg-color-button-inverse-primary};
    --bg-btn-inverse-secondary: #{\$bg-color-button-inverse-secondary};
    --bg-btn-inverse-tertiary: #{\$bg-color-button-inverse-tertiary};
    --bg-btn-primary: #{\$bg-color-button-primary-dark-mode};
    --bg-btn-primary-hover: #{\$bg-color-button-primary-hover-dark-mode};
    --bg-btn-secondary: #{\$bg-color-button-secondary-dark-mode};
    --bg-btn-secondary-tertiary-hover: #{\$bg-color-button-secondary-tertiary-hover-dark-mode};
    --bg-btn-tertiary: #{\$bg-color-button-tertiary};
    --bg-card: #{\$bg-color-card-dark-mode};
    --bg-code: #{\$bg-color-code-dark-mode};
    --bg-dialog: #{\$bg-color-dialog-dark-mode};
    --bg-input: #{\$bg-color-input-dark-mode};
    --bg-input-disabled: #{\$bg-color-input-disabled-dark-mode};
    --bg-input-group-addon: #{\$bg-color-input-group-addon-dark-mode};
    --bg-inverse: #{\$bg-color-inverse-dark-mode};
    --bg-kbd: #{\$bg-color-kbd};
    --bg-light-gray: #{\$bg-color-gray-light-dark-mode};
    --bg-lighter-gray: #{\$bg-color-gray-lighter-dark-mode};
    --bg-lightest-gray: #{\$bg-color-gray-lightest-dark-mode};
    --bg-mark: #{\$bg-color-mark-dark-mode};
    --bg-modal-header: #{\$bg-color-modal-header-dark-mode};
    --bg-modal-wrapper: #{\$bg-color-modal-wrapper-dark-mode};
    --bg-overlay-dark: #{\$bg-color-overlay-dark-dark-mode};
    --bg-overlay-light: #{\$bg-color-overlay-light-dark-mode};
    --bg-pre: #{\$bg-color-pre};
    --bg-radio: #{\$bg-color-radio-dot};
    --bg-required: #{\$bg-color-required-dark-mode};
    --bg-select-1: #{\$bg-color-select-1-dark-mode};
    --bg-select-2: #{\$bg-color-select-2-dark-mode};
  \t--bg-table-stripe: #{\$bg-color-table-stripe-dark-mode};
    --bg-tab-selected: #{\$bg-color-tab-selected-dark-mode};
    --bg-tabs-panel: #{\$bg-color-tabs-panel-dark-mode};
    --bg-white: #{\$bg-color-white-dark-mode};

  \t// Border Colors
    --b: #{\$border-color};
    --b-breadcrumb-arrow: #{\$border-color-breadcrumb-arrow};
    --b-btn-primary: #{\$border-color-button-primary-dark-mode};
    --b-btn-primary-hover: #{\$border-color-button-primary-hover-dark-mode};
    --b-btn-secondary: #{\$border-color-button-secondary};
    --b-btn-tertiary: #{\$border-color-button-tertiary};
    --b-btn-inverse-primary: #{\$border-color-button-inverse-primary};
    --b-btn-inverse-secondary: #{\$border-color-button-secondary};
    --b-btn-inverse-tertiary: #{\$border-color-button-tertiary};
    --b-checkmark: #{\$border-color-checkmark};
    --b-fieldset: #{\$border-color-fieldset-dark-mode};
    --b-input: #{\$border-color-input-dark-mode};
    --b-input-checked: #{\$border-color-input-checked};
    --b-input-focus: #{\$border-color-input-focus-dark-mode};
    --b-input-group-addon: #{\$border-color-input-group-addon};
    --b-input-hover: #{\$border-color-input-hover-dark-mode};
    --b-light-gray: #{\$border-color-gray-light-dark-mode};
    --b-lighter-gray: #{\$border-color-gray-lighter-dark-mode};
    --b-lightest-gray: #{\$border-color-gray-lightest-dark-mode};
    --b-required: #{\$border-color-required-dark-mode};
    --b-table: #{\$border-color-table};
    --b-tab: #{\$border-color-tab};
    --b-tabs-panel: #{\$border-color-tabs-panel};

    // Colors
    --active: #{\$color-active-dark-mode};
    --badge: #{\$color-badge-dark-mode};
    --body: #{\$color-body-dark-mode};
    --brand-alpha: #{\$color-brand-alpha-dark-mode};
    --brand-zeta: #{\$color-brand-zeta-dark-mode};
    --brand-eta: #{\$color-brand-eta-dark-mode};
    --brand-theta: #{\$color-brand-theta-dark-mode};
    --btn-inverse-primary: #{\$color-button-inverse-primary};
    --btn-inverse-secondary: #{\$color-button-inverse-secondary};
    --btn-inverse-tertiary: #{\$color-button-inverse-tertiary};
    --btn-primary: #{\$color-button-primary-dark-mode};
    --btn-secondary: #{\$color-button-secondary-dark-mode};
    --btn-secondary-tertiary-hover: #{\$color-button-secondary-tertiary-hover-dark-mode};
    --btn-tertiary: #{\$color-button-tertiary-dark-mode};
    --caption: #{\$color-caption};
    --code: #{\$color-code-dark-mode};
    --dark-gray: #{\$color-gray-dark-dark-mode};
    --darker-gray: #{\$color-gray-darker-dark-mode};
    --darkest-gray: #{\$color-gray-darkest-dark-mode};
    --figcaption: #{\$color-figcaption-dark-mode};
    --focus-outline: #{\$color-focus-outline-dark-mode};
    --form-help: #{\$color-form-help-dark-mode};
  \t--heading: #{\$color-heading-dark-mode};
    --hover: #{\$color-hover-dark-mode};
    --input-group-addon: #{\$color-input-group-addon-dark-mode};
    --inverse: #{\$color-inverse-dark-mode};
    --inverse-active: #{\$color-inverse-active-dark-mode};
    --inverse-hover: #{\$color-inverse-hover-dark-mode};
    --inverse-link: #{\$color-inverse-link-dark-mode};
    --inverse-visited: #{\$color-inverse-visited-dark-mode};
    --kbd: #{\$color-kbd};
    --link: #{\$color-link-dark-mode};
    --required: #{\$color-required-label-dark-mode};
    --select: #{\$color-select};
    --tab-selected: #{\$color-tab-selected};
    --visited: #{\$color-visited-dark-mode};

  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/generic/_generic.color-scheme.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////
// THEME / GENERIC / COLOR-SCHEME
/////////////////////////////////


:root {
//   color-scheme: light dark;

  // Background Colors
  --bg-badge: #{\$bg-color-badge-light-mode};
  --bg-body: #{\$bg-color-body-light-mode};
  --bg-brand-alpha: #{\$bg-color-brand-alpha-light-mode};
  --bg-brand-light-zeta: #{\$bg-color-brand-light-zeta-light-mode};
  --bg-brand-light-eta: #{\$bg-color-brand-light-eta-light-mode};
  --bg-brand-light-theta: #{\$bg-color-brand-light-theta-light-mode};
  --bg-btn-inverse-primary: #{\$bg-color-button-inverse-primary};
  --bg-btn-inverse-secondary: #{\$bg-color-button-inverse-secondary};
  --bg-btn-inverse-tertiary: #{\$bg-color-button-inverse-tertiary};
  --bg-btn-primary: #{\$bg-color-button-primary-light-mode};
  --bg-btn-primary-hover: #{\$bg-color-button-primary-hover-light-mode};
  --bg-btn-secondary: #{\$bg-color-button-secondary-light-mode};
  --bg-btn-secondary-tertiary-hover: #{\$bg-color-button-secondary-tertiary-hover-light-mode};
  --bg-btn-tertiary: #{\$bg-color-button-tertiary};
  --bg-card: #{\$bg-color-card-light-mode};
  --bg-code: #{\$bg-color-code-light-mode};
  --bg-dialog: #{\$bg-color-dialog-light-mode};
  --bg-input: #{\$bg-color-input-light-mode};
  --bg-input-disabled: #{\$bg-color-input-disabled-light-mode};
  --bg-input-group-addon: #{\$bg-color-input-group-addon-light-mode};
  --bg-inverse: #{\$bg-color-inverse-light-mode};
  --bg-kbd: #{\$bg-color-kbd};
  --bg-light-gray: #{\$bg-color-gray-light-light-mode};
  --bg-lighter-gray: #{\$bg-color-gray-lighter-light-mode};
  --bg-lightest-gray: #{\$bg-color-gray-lightest-light-mode};
  --bg-mark: #{\$bg-color-mark-light-mode};
  --bg-modal-header: #{\$bg-color-modal-header-light-mode};
  --bg-modal-wrapper: #{\$bg-color-modal-wrapper-light-mode};
  --bg-overlay-dark: #{\$bg-color-overlay-dark-light-mode};
  --bg-overlay-light: #{\$bg-color-overlay-light-light-mode};
  --bg-pre: #{\$bg-color-pre};
  --bg-radio: #{\$bg-color-radio-dot};
  --bg-required: #{\$bg-color-required-light-mode};
  --bg-select-1: #{\$bg-color-select-1-light-mode};
  --bg-select-2: #{\$bg-color-select-2-light-mode};
  --bg-table-stripe: #{\$bg-color-table-stripe-light-mode};
  --bg-tab-selected: #{\$bg-color-tab-selected-light-mode};
  --bg-tabs-panel: #{\$bg-color-tabs-panel-light-mode};
  --bg-white: #{\$bg-color-white-light-mode};

  // Border Colors
  --b: #{\$border-color};
  --b-breadcrumb-arrow: #{\$border-color-breadcrumb-arrow};
  --b-btn-primary: #{\$border-color-button-primary-light-mode};
  --b-btn-primary-hover: #{\$border-color-button-primary-hover-light-mode};
  --b-btn-secondary: #{\$border-color-button-secondary};
  --b-btn-tertiary: #{\$border-color-button-tertiary};
  --b-btn-inverse-primary: #{\$border-color-button-inverse-primary};
  --b-btn-inverse-secondary: #{\$border-color-button-secondary};
  --b-btn-inverse-tertiary: #{\$border-color-button-tertiary};
  --b-checkmark: #{\$border-color-checkmark};
  --b-fieldset: #{\$border-color-fieldset-light-mode};
  --b-input: #{\$border-color-input-light-mode};
  --b-input-checked: #{\$border-color-input-checked};
  --b-input-focus: #{\$border-color-input-focus-light-mode};
  --b-input-group-addon: #{\$border-color-input-group-addon};
  --b-input-hover: #{\$border-color-input-hover-light-mode};
  --b-light-gray: #{\$border-color-gray-light-light-mode};
  --b-lighter-gray: #{\$border-color-gray-lighter-light-mode};
  --b-lightest-gray: #{\$border-color-gray-lightest-light-mode};
  --b-required: #{\$border-color-required-light-mode};
  --b-table: #{\$border-color-table};
  --b-tab: #{\$border-color-tab};
  --b-tabs-panel: #{\$border-color-tabs-panel};

  // Colors
  --active: #{\$color-active-light-mode};
  --badge: #{\$color-badge-light-mode};
  --body: #{\$color-body-light-mode};
  --brand-alpha: #{\$color-brand-alpha-light-mode};
  --brand-zeta: #{\$color-brand-zeta-light-mode};
  --brand-eta: #{\$color-brand-eta-light-mode};
  --brand-theta: #{\$color-brand-theta-light-mode};
  --btn-inverse-primary: #{\$color-button-inverse-primary};
  --btn-inverse-secondary: #{\$color-button-inverse-secondary};
  --btn-inverse-tertiary: #{\$color-button-inverse-tertiary};
  --btn-primary: #{\$color-button-primary-light-mode};
  --btn-secondary: #{\$color-button-secondary-light-mode};
  --btn-secondary-tertiary-hover: #{\$color-button-secondary-tertiary-hover-light-mode};
  --btn-tertiary: #{\$color-button-tertiary-light-mode};
  --caption: #{\$color-caption};
  --code: #{\$color-code-light-mode};
  --dark-gray: #{\$color-gray-dark-light-mode};
  --darker-gray: #{\$color-gray-darker-light-mode};
  --darkest-gray: #{\$color-gray-darkest-light-mode};
  --figcaption: #{\$color-figcaption-light-mode};
  --focus-outline: #{\$color-focus-outline-light-mode};
  --form-help: #{\$color-form-help-light-mode};
  --heading: #{\$color-heading-light-mode};
  --hover: #{\$color-hover-light-mode};
  --input-group-addon: #{\$color-input-group-addon-light-mode};
  --inverse: #{\$color-inverse-light-mode};
  --inverse-active: #{\$color-inverse-active-light-mode};
  --inverse-link: #{\$color-inverse-link-light-mode};
  --inverse-hover: #{\$color-inverse-hover-light-mode};
  --inverse-visited: #{\$color-inverse-visited-light-mode};
  --kbd: #{\$color-kbd};
  --link: #{\$color-link-light-mode};
  --required: #{\$color-required-label-light-mode};
  --select: #{\$color-select};
  --tab-selected: #{\$color-tab-selected};
  --visited: #{\$color-visited-light-mode};

}


@media (prefers-color-scheme: dark) {

  :root {

    // Background Colors
    --bg-badge: #{\$bg-color-badge-dark-mode};
    --bg-body: #{\$bg-color-body-dark-mode};
    --bg-brand-alpha: #{\$bg-color-brand-alpha-dark-mode};
    --bg-brand-light-zeta: #{\$bg-color-brand-light-zeta-dark-mode};
    --bg-brand-light-eta: #{\$bg-color-brand-light-eta-dark-mode};
    --bg-brand-light-theta: #{\$bg-color-brand-light-theta-dark-mode};
    --bg-btn-inverse-primary: #{\$bg-color-button-inverse-primary};
    --bg-btn-inverse-secondary: #{\$bg-color-button-inverse-secondary};
    --bg-btn-inverse-tertiary: #{\$bg-color-button-inverse-tertiary};
    --bg-btn-primary: #{\$bg-color-button-primary-dark-mode};
    --bg-btn-primary-hover: #{\$bg-color-button-primary-hover-dark-mode};
    --bg-btn-secondary: #{\$bg-color-button-secondary-dark-mode};
    --bg-btn-secondary-tertiary-hover: #{\$bg-color-button-secondary-tertiary-hover-dark-mode};
    --bg-btn-tertiary: #{\$bg-color-button-tertiary};
    --bg-card: #{\$bg-color-card-dark-mode};
    --bg-code: #{\$bg-color-code-dark-mode};
    --bg-dialog: #{\$bg-color-dialog-dark-mode};
    --bg-input: #{\$bg-color-input-dark-mode};
    --bg-input-disabled: #{\$bg-color-input-disabled-dark-mode};
    --bg-input-group-addon: #{\$bg-color-input-group-addon-dark-mode};
    --bg-inverse: #{\$bg-color-inverse-dark-mode};
    --bg-kbd: #{\$bg-color-kbd};
    --bg-light-gray: #{\$bg-color-gray-light-dark-mode};
    --bg-lighter-gray: #{\$bg-color-gray-lighter-dark-mode};
    --bg-lightest-gray: #{\$bg-color-gray-lightest-dark-mode};
    --bg-mark: #{\$bg-color-mark-dark-mode};
    --bg-modal-header: #{\$bg-color-modal-header-dark-mode};
    --bg-modal-wrapper: #{\$bg-color-modal-wrapper-dark-mode};
    --bg-overlay-dark: #{\$bg-color-overlay-dark-dark-mode};
    --bg-overlay-light: #{\$bg-color-overlay-light-dark-mode};
    --bg-pre: #{\$bg-color-pre};
    --bg-radio: #{\$bg-color-radio-dot};
    --bg-required: #{\$bg-color-required-dark-mode};
    --bg-select-1: #{\$bg-color-select-1-dark-mode};
    --bg-select-2: #{\$bg-color-select-2-dark-mode};
  \t--bg-table-stripe: #{\$bg-color-table-stripe-dark-mode};
    --bg-tab-selected: #{\$bg-color-tab-selected-dark-mode};
    --bg-tabs-panel: #{\$bg-color-tabs-panel-dark-mode};
    --bg-white: #{\$bg-color-white-dark-mode};

  \t// Border Colors
    --b: #{\$border-color};
    --b-breadcrumb-arrow: #{\$border-color-breadcrumb-arrow};
    --b-btn-primary: #{\$border-color-button-primary-dark-mode};
    --b-btn-primary-hover: #{\$border-color-button-primary-hover-dark-mode};
    --b-btn-secondary: #{\$border-color-button-secondary};
    --b-btn-tertiary: #{\$border-color-button-tertiary};
    --b-btn-inverse-primary: #{\$border-color-button-inverse-primary};
    --b-btn-inverse-secondary: #{\$border-color-button-secondary};
    --b-btn-inverse-tertiary: #{\$border-color-button-tertiary};
    --b-checkmark: #{\$border-color-checkmark};
    --b-fieldset: #{\$border-color-fieldset-dark-mode};
    --b-input: #{\$border-color-input-dark-mode};
    --b-input-checked: #{\$border-color-input-checked};
    --b-input-focus: #{\$border-color-input-focus-dark-mode};
    --b-input-group-addon: #{\$border-color-input-group-addon};
    --b-input-hover: #{\$border-color-input-hover-dark-mode};
    --b-light-gray: #{\$border-color-gray-light-dark-mode};
    --b-lighter-gray: #{\$border-color-gray-lighter-dark-mode};
    --b-lightest-gray: #{\$border-color-gray-lightest-dark-mode};
    --b-required: #{\$border-color-required-dark-mode};
    --b-table: #{\$border-color-table};
    --b-tab: #{\$border-color-tab};
    --b-tabs-panel: #{\$border-color-tabs-panel};

    // Colors
    --active: #{\$color-active-dark-mode};
    --badge: #{\$color-badge-dark-mode};
    --body: #{\$color-body-dark-mode};
    --brand-alpha: #{\$color-brand-alpha-dark-mode};
    --brand-zeta: #{\$color-brand-zeta-dark-mode};
    --brand-eta: #{\$color-brand-eta-dark-mode};
    --brand-theta: #{\$color-brand-theta-dark-mode};
    --btn-inverse-primary: #{\$color-button-inverse-primary};
    --btn-inverse-secondary: #{\$color-button-inverse-secondary};
    --btn-inverse-tertiary: #{\$color-button-inverse-tertiary};
    --btn-primary: #{\$color-button-primary-dark-mode};
    --btn-secondary: #{\$color-button-secondary-dark-mode};
    --btn-secondary-tertiary-hover: #{\$color-button-secondary-tertiary-hover-dark-mode};
    --btn-tertiary: #{\$color-button-tertiary-dark-mode};
    --caption: #{\$color-caption};
    --code: #{\$color-code-dark-mode};
    --dark-gray: #{\$color-gray-dark-dark-mode};
    --darker-gray: #{\$color-gray-darker-dark-mode};
    --darkest-gray: #{\$color-gray-darkest-dark-mode};
    --figcaption: #{\$color-figcaption-dark-mode};
    --focus-outline: #{\$color-focus-outline-dark-mode};
    --form-help: #{\$color-form-help-dark-mode};
  \t--heading: #{\$color-heading-dark-mode};
    --hover: #{\$color-hover-dark-mode};
    --input-group-addon: #{\$color-input-group-addon-dark-mode};
    --inverse: #{\$color-inverse-dark-mode};
    --inverse-active: #{\$color-inverse-active-dark-mode};
    --inverse-hover: #{\$color-inverse-hover-dark-mode};
    --inverse-link: #{\$color-inverse-link-dark-mode};
    --inverse-visited: #{\$color-inverse-visited-dark-mode};
    --kbd: #{\$color-kbd};
    --link: #{\$color-link-dark-mode};
    --required: #{\$color-required-label-dark-mode};
    --select: #{\$color-select};
    --tab-selected: #{\$color-tab-selected};
    --visited: #{\$color-visited-dark-mode};

  }

}
", "wdn/templates_5.3/scss/generic/_generic.color-scheme.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/generic/_generic.color-scheme.scss");
    }
}
