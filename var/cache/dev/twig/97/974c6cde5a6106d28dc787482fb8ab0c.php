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

/* wdn/templates_5.3/tools/bookmarklets/dark-mode-toggle/dark-mode-toggle.css */
class __TwigTemplate_bf29301b2dd49154dafd4a617ccbb3fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/tools/bookmarklets/dark-mode-toggle/dark-mode-toggle.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/tools/bookmarklets/dark-mode-toggle/dark-mode-toggle.css"));

        // line 1
        echo "body.unl\\@light {
  --bg-badge: #6b6b68;
  --bg-body: #fefdfa;
  --bg-brand-alpha: #d00000;
  --bg-brand-light-zeta: #e7f1ea;
  --bg-brand-light-eta: #e7f0f0;
  --bg-brand-light-theta: #f7eaf1;
  --bg-btn-inverse-primary: #ebebea;
  --bg-btn-inverse-secondary: transparent;
  --bg-btn-inverse-tertiary: transparent;
  --bg-btn-primary: #d00000;
  --bg-btn-primary-hover: #9d0000;
  --bg-btn-secondary: #fff;
  --bg-btn-secondary-tertiary-hover: rgba(157,0,0,.07);
  --bg-btn-tertiary: transparent;
  --bg-card: #fefdfa;
  --bg-code: rgba(0,0,0,.05);
  --bg-dialog: #fff;
  --bg-input: #fff;
  --bg-input-disabled: #ebebea;
  --bg-input-group-addon: #f6f6f5;
  --bg-inverse: #424240;
  --bg-kbd: #000;
  --bg-light-gray: #e3e3e2;
  --bg-lighter-gray: #ebebea;
  --bg-lightest-gray: #f6f6f5;
  --bg-mark: #ff0;
  --bg-modal-header: #fefdfa;
  --bg-modal-wrapper: #fefdfa;
  --bg-overlay-dark: rgba(36,36,35,.94);
  --bg-overlay-light: hsla(45,67%,99%,.94);
  --bg-pre: var(--bg-code);
  --bg-radio: var(--body);
  --bg-required: transparent;
  --bg-select-1: #fff;
  --bg-select-2: #fff;
  --bg-table-stripe: rgba(36,36,35,.03);
  --bg-tab-selected: #fff;
  --bg-tabs-panel: #fff;
  --bg-white: #fff;
  --b: var(--b-light-gray);
  --b-breadcrumb-arrow: #c7c8ca;
  --b-btn-primary: #d00000;
  --b-btn-primary-hover: #9d0000;
  --b-btn-secondary: currentColor;
  --b-btn-tertiary: transparent;
  --b-btn-inverse-primary: #ebebea;
  --b-btn-inverse-secondary: currentColor;
  --b-btn-inverse-tertiary: transparent;
  --b-checkmark: var(--body);
  --b-fieldset: #e3e3e2;
  --b-input: #c7c8ca;
  --b-input-checked: var(--body);
  --b-input-focus: #007197;
  --b-input-group-addon: var(--b-input);
  --b-input-hover: #6b6b68;
  --b-light-gray: #e3e3e2;
  --b-lighter-gray: #ebebea;
  --b-lightest-gray: #f6f6f5;
  --b-required: transparent;
  --b-table: var(--b-light-gray);
  --b-tab: var(--b-light-gray);
  --b-tabs-panel: var(--b-light-gray);
  --active: #9d0000;
  --badge: #fefdfa;
  --body: #424240;
  --brand-alpha: #d00000;
  --brand-zeta: #00784e;
  --brand-eta: #007197;
  --brand-theta: #b32d9c;
  --btn-inverse-primary: #d00000;
  --btn-inverse-secondary: #ebebea;
  --btn-inverse-tertiary: #ebebea;
  --btn-primary: #fff;
  --btn-secondary: #d00000;
  --btn-secondary-tertiary-hover: #9d0000;
  --btn-tertiary: #d00000;
  --caption: var(--heading);
  --code: #5c5c59;
  --dark-gray: #6b6b68;
  --darker-gray: #424240;
  --darkest-gray: #242423;
  --figcaption: #6b6b68;
  --focus-outline: #007197;
  --form-help: #6b6b68;
  --heading: #242423;
  --hover: #9d0000;
  --input-group-addon: #6b6b68;
  --inverse: #fefdfa;
  --inverse-active: #fefdfa;
  --inverse-link: #fefdfa;
  --inverse-hover: #fefdfa;
  --inverse-visited: #fefdfa;
  --kbd: #0f0;
  --link: #d00000;
  --required: #d00000;
  --select: var(--body);
  --tab-selected: var(--body);
  --visited: #9d0000;
}

body.unl\\@dark {
  --bg-badge: #e3e3e2;
  --bg-body: #242423;
  --bg-brand-alpha: #d00000;
  --bg-brand-light-zeta: #00784e;
  --bg-brand-light-eta: #007197;
  --bg-brand-light-theta: #b32d9c;
  --bg-btn-inverse-primary: #ebebea;
  --bg-btn-inverse-secondary: transparent;
  --bg-btn-inverse-tertiary: transparent;
  --bg-btn-primary: #ebebea;
  --bg-btn-primary-hover: #fff;
  --bg-btn-secondary: transparent;
  --bg-btn-secondary-tertiary-hover: hsla(0,0%,100%,.07);
  --bg-btn-tertiary: transparent;
  --bg-card: #393937;
  --bg-code: hsla(0,0%,100%,.1);
  --bg-dialog: #393937;
  --bg-input: #1f1f1e;
  --bg-input-disabled: #424240;
  --bg-input-group-addon: #393937;
  --bg-inverse: #c7c8ca;
  --bg-kbd: #000;
  --bg-light-gray: #333332;
  --bg-lighter-gray: #2e2e2d;
  --bg-lightest-gray: #292928;
  --bg-mark: #ff0;
  --bg-modal-header: #242423;
  --bg-modal-wrapper: #242423;
  --bg-overlay-dark: rgba(0,0,0,.94);
  --bg-overlay-light: rgba(0,0,0,.94);
  --bg-pre: var(--bg-code);
  --bg-radio: var(--body);
  --bg-required: rgba(157,0,0,.25);
  --bg-select-1: #1f1f1e;
  --bg-select-2: #1f1f1e;
  --bg-table-stripe: hsla(45,67%,99%,.03);
  --bg-tab-selected: #393937;
  --bg-tabs-panel: #393937;
  --bg-white: #393937;
  --b: var(--b-light-gray);
  --b-breadcrumb-arrow: #c7c8ca;
  --b-btn-primary: #ebebea;
  --b-btn-primary-hover: #fff;
  --b-btn-secondary: currentColor;
  --b-btn-tertiary: transparent;
  --b-btn-inverse-primary: #ebebea;
  --b-btn-inverse-secondary: currentColor;
  --b-btn-inverse-tertiary: transparent;
  --b-checkmark: var(--body);
  --b-fieldset: #424240;
  --b-input: #6b6b68;
  --b-input-checked: var(--body);
  --b-input-focus: #42a7c6;
  --b-input-group-addon: var(--b-input);
  --b-input-hover: #c7c8ca;
  --b-light-gray: #424240;
  --b-lighter-gray: #424240;
  --b-lightest-gray: #424240;
  --b-required: #9e0000;
  --b-table: var(--b-light-gray);
  --b-tab: var(--b-light-gray);
  --b-tabs-panel: var(--b-light-gray);
  --active: #a0d2e0;
  --badge: #242423;
  --body: #c7c8ca;
  --brand-alpha: #f6f6f5;
  --brand-zeta: #e7f1ea;
  --brand-eta: #e7f0f0;
  --brand-theta: #f7eaf1;
  --btn-inverse-primary: #d00000;
  --btn-inverse-secondary: #ebebea;
  --btn-inverse-tertiary: #ebebea;
  --caption: var(--heading);
  --btn-primary: #d00000;
  --btn-secondary: #ebebea;
  --btn-secondary-tertiary-hover: #fff;
  --btn-tertiary: #ebebea;
  --code: #e1e2e3;
  --dark-gray: #e3e3e2;
  --darker-gray: #ebebea;
  --darkest-gray: #f6f6f5;
  --figcaption: #a4a4a1;
  --focus-outline: #42a7c6;
  --form-help: #a4a4a1;
  --heading: #fefdfa;
  --hover: #a0d2e0;
  --input-group-addon: #a4a4a1;
  --inverse: #242423;
  --inverse-active: #242423;
  --inverse-hover: #242423;
  --inverse-link: #242423;
  --inverse-visited: #242423;
  --kbd: #0f0;
  --link: #71bdd3;
  --required: #fefdfa;
  --select: var(--body);
  --tab-selected: var(--body);
  --visited: #a0d2e0;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/tools/bookmarklets/dark-mode-toggle/dark-mode-toggle.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("body.unl\\@light {
  --bg-badge: #6b6b68;
  --bg-body: #fefdfa;
  --bg-brand-alpha: #d00000;
  --bg-brand-light-zeta: #e7f1ea;
  --bg-brand-light-eta: #e7f0f0;
  --bg-brand-light-theta: #f7eaf1;
  --bg-btn-inverse-primary: #ebebea;
  --bg-btn-inverse-secondary: transparent;
  --bg-btn-inverse-tertiary: transparent;
  --bg-btn-primary: #d00000;
  --bg-btn-primary-hover: #9d0000;
  --bg-btn-secondary: #fff;
  --bg-btn-secondary-tertiary-hover: rgba(157,0,0,.07);
  --bg-btn-tertiary: transparent;
  --bg-card: #fefdfa;
  --bg-code: rgba(0,0,0,.05);
  --bg-dialog: #fff;
  --bg-input: #fff;
  --bg-input-disabled: #ebebea;
  --bg-input-group-addon: #f6f6f5;
  --bg-inverse: #424240;
  --bg-kbd: #000;
  --bg-light-gray: #e3e3e2;
  --bg-lighter-gray: #ebebea;
  --bg-lightest-gray: #f6f6f5;
  --bg-mark: #ff0;
  --bg-modal-header: #fefdfa;
  --bg-modal-wrapper: #fefdfa;
  --bg-overlay-dark: rgba(36,36,35,.94);
  --bg-overlay-light: hsla(45,67%,99%,.94);
  --bg-pre: var(--bg-code);
  --bg-radio: var(--body);
  --bg-required: transparent;
  --bg-select-1: #fff;
  --bg-select-2: #fff;
  --bg-table-stripe: rgba(36,36,35,.03);
  --bg-tab-selected: #fff;
  --bg-tabs-panel: #fff;
  --bg-white: #fff;
  --b: var(--b-light-gray);
  --b-breadcrumb-arrow: #c7c8ca;
  --b-btn-primary: #d00000;
  --b-btn-primary-hover: #9d0000;
  --b-btn-secondary: currentColor;
  --b-btn-tertiary: transparent;
  --b-btn-inverse-primary: #ebebea;
  --b-btn-inverse-secondary: currentColor;
  --b-btn-inverse-tertiary: transparent;
  --b-checkmark: var(--body);
  --b-fieldset: #e3e3e2;
  --b-input: #c7c8ca;
  --b-input-checked: var(--body);
  --b-input-focus: #007197;
  --b-input-group-addon: var(--b-input);
  --b-input-hover: #6b6b68;
  --b-light-gray: #e3e3e2;
  --b-lighter-gray: #ebebea;
  --b-lightest-gray: #f6f6f5;
  --b-required: transparent;
  --b-table: var(--b-light-gray);
  --b-tab: var(--b-light-gray);
  --b-tabs-panel: var(--b-light-gray);
  --active: #9d0000;
  --badge: #fefdfa;
  --body: #424240;
  --brand-alpha: #d00000;
  --brand-zeta: #00784e;
  --brand-eta: #007197;
  --brand-theta: #b32d9c;
  --btn-inverse-primary: #d00000;
  --btn-inverse-secondary: #ebebea;
  --btn-inverse-tertiary: #ebebea;
  --btn-primary: #fff;
  --btn-secondary: #d00000;
  --btn-secondary-tertiary-hover: #9d0000;
  --btn-tertiary: #d00000;
  --caption: var(--heading);
  --code: #5c5c59;
  --dark-gray: #6b6b68;
  --darker-gray: #424240;
  --darkest-gray: #242423;
  --figcaption: #6b6b68;
  --focus-outline: #007197;
  --form-help: #6b6b68;
  --heading: #242423;
  --hover: #9d0000;
  --input-group-addon: #6b6b68;
  --inverse: #fefdfa;
  --inverse-active: #fefdfa;
  --inverse-link: #fefdfa;
  --inverse-hover: #fefdfa;
  --inverse-visited: #fefdfa;
  --kbd: #0f0;
  --link: #d00000;
  --required: #d00000;
  --select: var(--body);
  --tab-selected: var(--body);
  --visited: #9d0000;
}

body.unl\\@dark {
  --bg-badge: #e3e3e2;
  --bg-body: #242423;
  --bg-brand-alpha: #d00000;
  --bg-brand-light-zeta: #00784e;
  --bg-brand-light-eta: #007197;
  --bg-brand-light-theta: #b32d9c;
  --bg-btn-inverse-primary: #ebebea;
  --bg-btn-inverse-secondary: transparent;
  --bg-btn-inverse-tertiary: transparent;
  --bg-btn-primary: #ebebea;
  --bg-btn-primary-hover: #fff;
  --bg-btn-secondary: transparent;
  --bg-btn-secondary-tertiary-hover: hsla(0,0%,100%,.07);
  --bg-btn-tertiary: transparent;
  --bg-card: #393937;
  --bg-code: hsla(0,0%,100%,.1);
  --bg-dialog: #393937;
  --bg-input: #1f1f1e;
  --bg-input-disabled: #424240;
  --bg-input-group-addon: #393937;
  --bg-inverse: #c7c8ca;
  --bg-kbd: #000;
  --bg-light-gray: #333332;
  --bg-lighter-gray: #2e2e2d;
  --bg-lightest-gray: #292928;
  --bg-mark: #ff0;
  --bg-modal-header: #242423;
  --bg-modal-wrapper: #242423;
  --bg-overlay-dark: rgba(0,0,0,.94);
  --bg-overlay-light: rgba(0,0,0,.94);
  --bg-pre: var(--bg-code);
  --bg-radio: var(--body);
  --bg-required: rgba(157,0,0,.25);
  --bg-select-1: #1f1f1e;
  --bg-select-2: #1f1f1e;
  --bg-table-stripe: hsla(45,67%,99%,.03);
  --bg-tab-selected: #393937;
  --bg-tabs-panel: #393937;
  --bg-white: #393937;
  --b: var(--b-light-gray);
  --b-breadcrumb-arrow: #c7c8ca;
  --b-btn-primary: #ebebea;
  --b-btn-primary-hover: #fff;
  --b-btn-secondary: currentColor;
  --b-btn-tertiary: transparent;
  --b-btn-inverse-primary: #ebebea;
  --b-btn-inverse-secondary: currentColor;
  --b-btn-inverse-tertiary: transparent;
  --b-checkmark: var(--body);
  --b-fieldset: #424240;
  --b-input: #6b6b68;
  --b-input-checked: var(--body);
  --b-input-focus: #42a7c6;
  --b-input-group-addon: var(--b-input);
  --b-input-hover: #c7c8ca;
  --b-light-gray: #424240;
  --b-lighter-gray: #424240;
  --b-lightest-gray: #424240;
  --b-required: #9e0000;
  --b-table: var(--b-light-gray);
  --b-tab: var(--b-light-gray);
  --b-tabs-panel: var(--b-light-gray);
  --active: #a0d2e0;
  --badge: #242423;
  --body: #c7c8ca;
  --brand-alpha: #f6f6f5;
  --brand-zeta: #e7f1ea;
  --brand-eta: #e7f0f0;
  --brand-theta: #f7eaf1;
  --btn-inverse-primary: #d00000;
  --btn-inverse-secondary: #ebebea;
  --btn-inverse-tertiary: #ebebea;
  --caption: var(--heading);
  --btn-primary: #d00000;
  --btn-secondary: #ebebea;
  --btn-secondary-tertiary-hover: #fff;
  --btn-tertiary: #ebebea;
  --code: #e1e2e3;
  --dark-gray: #e3e3e2;
  --darker-gray: #ebebea;
  --darkest-gray: #f6f6f5;
  --figcaption: #a4a4a1;
  --focus-outline: #42a7c6;
  --form-help: #a4a4a1;
  --heading: #fefdfa;
  --hover: #a0d2e0;
  --input-group-addon: #a4a4a1;
  --inverse: #242423;
  --inverse-active: #242423;
  --inverse-hover: #242423;
  --inverse-link: #242423;
  --inverse-visited: #242423;
  --kbd: #0f0;
  --link: #71bdd3;
  --required: #fefdfa;
  --select: var(--body);
  --tab-selected: var(--body);
  --visited: #a0d2e0;
}
", "wdn/templates_5.3/tools/bookmarklets/dark-mode-toggle/dark-mode-toggle.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/tools/bookmarklets/dark-mode-toggle/dark-mode-toggle.css");
    }
}