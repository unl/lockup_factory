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

/* wdn/templates_5.3/scss/components/_components.idm.scss */
class __TwigTemplate_8d7a31b42bf3ed650d9d4cfe8a857ed0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.idm.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.idm.scss"));

        // line 1
        echo "/////////////////////////////////////////////////
// THEME / COMPONENTS / IDM (IDENTITY MANAGEMENT)
/////////////////////////////////////////////////


.unl a.dcf-idm-login:link,
.unl a.dcf-idm-login:visited {
  color: \$color-brand-alpha;
}


.unl a.dcf-idm-login:hover {
  color: \$color-hover;
}


.unl .dcf-idm-options {
  width: #{ms(14)}em;
}


@include mq(md, max, width) {

  .unl .dcf-idm-login {
    flex-direction: column;
  }

  .unl .dcf-idm-options {
    left: 50%;
    top: -2px;
    transform: translate(-50%, -100%);
  }

  .unl .dcf-idm-toggle {
    display: none;
  }

  .unl .dcf-idm-label {
    @include mt-1;
  }

}


@include mq(md, min, width) {

  .unl .dcf-idm-toggle {
    display: flex;
  }

  .unl .dcf-idm-login {
    flex-direction: row-reverse;
  }

  .unl .dcf-idm-img {
    fill: \$light-gray;
  }

  .unl .dcf-idm-label {
    @include mr-3;
  }

  .unl .dcf-idm-options {
    @include mt-2;
    right: 0;
    top: 100%;
  }

  // Add arrow above options popover and horizontally center under button text
  .unl .dcf-idm-login[aria-expanded=\"true\"] ~ .dcf-idm-options::before {
    border-left: #{ms(-4)}em solid transparent;
    border-right: #{ms(-4)}em solid transparent;
    border-bottom: #{ms(-4)}em solid rgba(36,36,35,.95);
    top: -#{ms(-4)}em;
    content: '';
    display: block;
    @include h-2;
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
    @include w-2;
  }

  .unl .dcf-idm-options li:last-child {
    margin-bottom: 0;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.idm.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////////////////////
// THEME / COMPONENTS / IDM (IDENTITY MANAGEMENT)
/////////////////////////////////////////////////


.unl a.dcf-idm-login:link,
.unl a.dcf-idm-login:visited {
  color: \$color-brand-alpha;
}


.unl a.dcf-idm-login:hover {
  color: \$color-hover;
}


.unl .dcf-idm-options {
  width: #{ms(14)}em;
}


@include mq(md, max, width) {

  .unl .dcf-idm-login {
    flex-direction: column;
  }

  .unl .dcf-idm-options {
    left: 50%;
    top: -2px;
    transform: translate(-50%, -100%);
  }

  .unl .dcf-idm-toggle {
    display: none;
  }

  .unl .dcf-idm-label {
    @include mt-1;
  }

}


@include mq(md, min, width) {

  .unl .dcf-idm-toggle {
    display: flex;
  }

  .unl .dcf-idm-login {
    flex-direction: row-reverse;
  }

  .unl .dcf-idm-img {
    fill: \$light-gray;
  }

  .unl .dcf-idm-label {
    @include mr-3;
  }

  .unl .dcf-idm-options {
    @include mt-2;
    right: 0;
    top: 100%;
  }

  // Add arrow above options popover and horizontally center under button text
  .unl .dcf-idm-login[aria-expanded=\"true\"] ~ .dcf-idm-options::before {
    border-left: #{ms(-4)}em solid transparent;
    border-right: #{ms(-4)}em solid transparent;
    border-bottom: #{ms(-4)}em solid rgba(36,36,35,.95);
    top: -#{ms(-4)}em;
    content: '';
    display: block;
    @include h-2;
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
    @include w-2;
  }

  .unl .dcf-idm-options li:last-child {
    margin-bottom: 0;
  }

}
", "wdn/templates_5.3/scss/components/_components.idm.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.idm.scss");
    }
}
