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

/* wdn/templates_5.3/includes/local/affiliate-custom.css */
class __TwigTemplate_f2b20fa7e1b11eb9cdf69758f184e241 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-custom.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-custom.css"));

        // line 1
        echo "/* Color Reset */
:root {
  --bg-body: #fff !important;
  --bg-brand-alpha: #D90792 !important;
  --brand-alpha: #D90792 !important;
  --link: #D90792 !important;
  --hover: #972062 !important;
  --active: #972062 !important;
  --visited: #972062 !important;
  --b-btn-primary: #D90792 !important;
  --bg-btn-primary: #D90792 !important;
  --btn-primary: #fff !important;
  --b-btn-primary-hover: #972062 !important;
  --bg-btn-primary-hover: #972062 !important;
  --btn-secondary: #D90792 !important;
  --b-btn-secondary: #D90792 !important;
  --bg-btn-secondary-tertiary-hover: rgba(185,39,119,0.15) !important;
  --btn-secondary-tertiary-hover: #D90792 !important;
  --b-btn-secondary-tertiary-hover: #972062 !important;
  --btn-tertiary: #D90792 !important;
  --bg-btn-inverse-primary: #fff !important;
  --btn-inverse-primary: #D90792 !important;
  --b-btn-inverse-primary-hover: rgba(255,255,255,0.8) !important;
  --bg-btn-inverse-primary-hover: rgba(255,255,255,0.8) !important;
  --b-input-focus: #D90792 !important;
  --focus-outline: #D90792 !important;
}

@media (prefers-color-scheme: dark) {
  :root {
    --bg-body: #242423 !important;
    --brand-alpha: #fff !important;
    --link: #F9A9DE !important;
    --hover: #FAC6EA !important;
    --active: #FAC6EA !important;
    --visited: #FAC6EA !important;
    --b-btn-primary: #fff !important;
    --bg-btn-primary: #fff !important;
    --btn-primary: #D90792 !important;
    --b-btn-primary-hover: rgba(255,255,255,0.8) !important;
    --bg-btn-primary-hover: rgba(255,255,255,0.8) !important;
    --b-btn-secondary: #fff !important;
    --btn-secondary: #fff !important;
    --b-btn-secondary-tertiary-hover: rgba(255,255,255,0.15) !important;
    --bg-btn-secondary-tertiary-hover: rgba(255,255,255,0.15) !important;
    --btn-secondary-tertiary-hover: #fff !important;
    --btn-tertiary: #fff !important;
  }
}


/* Font Resets */
body.unl.affiliate {
\tfont-family: 'Libre Franklin', sans-serif;
}

.unl.affiliate h1,
.unl.affiliate h2,
.unl.affiliate h3,
.unl.affiliate h4,
.unl.affiliate h5,
.unl.affiliate h6 {
\tletter-spacing: 0 !important;
\tmargin-left: 0 !important;
}

.dcf-institution-title .unl-font-serif-ltd-caps,
.dcf-institution-title .unl-font-serif-ltd-italic,
#visitorChat {
\tfont-family: 'Libre Franklin', sans-serif !important;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/affiliate-custom.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Color Reset */
:root {
  --bg-body: #fff !important;
  --bg-brand-alpha: #D90792 !important;
  --brand-alpha: #D90792 !important;
  --link: #D90792 !important;
  --hover: #972062 !important;
  --active: #972062 !important;
  --visited: #972062 !important;
  --b-btn-primary: #D90792 !important;
  --bg-btn-primary: #D90792 !important;
  --btn-primary: #fff !important;
  --b-btn-primary-hover: #972062 !important;
  --bg-btn-primary-hover: #972062 !important;
  --btn-secondary: #D90792 !important;
  --b-btn-secondary: #D90792 !important;
  --bg-btn-secondary-tertiary-hover: rgba(185,39,119,0.15) !important;
  --btn-secondary-tertiary-hover: #D90792 !important;
  --b-btn-secondary-tertiary-hover: #972062 !important;
  --btn-tertiary: #D90792 !important;
  --bg-btn-inverse-primary: #fff !important;
  --btn-inverse-primary: #D90792 !important;
  --b-btn-inverse-primary-hover: rgba(255,255,255,0.8) !important;
  --bg-btn-inverse-primary-hover: rgba(255,255,255,0.8) !important;
  --b-input-focus: #D90792 !important;
  --focus-outline: #D90792 !important;
}

@media (prefers-color-scheme: dark) {
  :root {
    --bg-body: #242423 !important;
    --brand-alpha: #fff !important;
    --link: #F9A9DE !important;
    --hover: #FAC6EA !important;
    --active: #FAC6EA !important;
    --visited: #FAC6EA !important;
    --b-btn-primary: #fff !important;
    --bg-btn-primary: #fff !important;
    --btn-primary: #D90792 !important;
    --b-btn-primary-hover: rgba(255,255,255,0.8) !important;
    --bg-btn-primary-hover: rgba(255,255,255,0.8) !important;
    --b-btn-secondary: #fff !important;
    --btn-secondary: #fff !important;
    --b-btn-secondary-tertiary-hover: rgba(255,255,255,0.15) !important;
    --bg-btn-secondary-tertiary-hover: rgba(255,255,255,0.15) !important;
    --btn-secondary-tertiary-hover: #fff !important;
    --btn-tertiary: #fff !important;
  }
}


/* Font Resets */
body.unl.affiliate {
\tfont-family: 'Libre Franklin', sans-serif;
}

.unl.affiliate h1,
.unl.affiliate h2,
.unl.affiliate h3,
.unl.affiliate h4,
.unl.affiliate h5,
.unl.affiliate h6 {
\tletter-spacing: 0 !important;
\tmargin-left: 0 !important;
}

.dcf-institution-title .unl-font-serif-ltd-caps,
.dcf-institution-title .unl-font-serif-ltd-italic,
#visitorChat {
\tfont-family: 'Libre Franklin', sans-serif !important;
}
", "wdn/templates_5.3/includes/local/affiliate-custom.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/affiliate-custom.css");
    }
}
