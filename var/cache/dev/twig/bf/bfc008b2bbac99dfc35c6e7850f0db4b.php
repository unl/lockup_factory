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

/* wdn/templates_5.3/scss/components/_components.notices.scss */
class __TwigTemplate_8978f9506b78b471339ffcf329894b7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.notices.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.notices.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / COMPONENTS / NOTICE
//////////////////////////////


// Add a little vertical space between notice heading and message
.unl .dcf-notice-message {
  margin-top: #{ms(-12)}em;
}


// Ensure heading and close link (all states) display as cream
// .unl .dcf-notice h1, // An <h1> shouldn't be used at this level.
.unl .dcf-notice h2,
.unl .dcf-notice h3,
.unl .dcf-notice h4,
.unl .dcf-notice h5,
.unl .dcf-notice h6,
.unl .dcf-notice-message a:link,
.unl .dcf-notice-message a:visited,
.unl .dcf-notice-message a:hover,
.unl .dcf-notice-message a:active,
.unl .dcf-notice-message a {
  color: \$cream;
}


// Info
.unl .dcf-notice-info {
  // https://meyerweb.com/eric/tools/color-blend/#007197:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(18,75,93,.25))
          drop-shadow(2px 4px 4px rgba(18,75,93,.25))
          drop-shadow(3px 6px 6px rgba(18,75,93,.25));
}


// Success
.unl .dcf-notice-success {
  // https://meyerweb.com/eric/tools/color-blend/#00784E:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(18,78,57,.25))
          drop-shadow(2px 4px 4px rgba(18,78,57,.25))
          drop-shadow(3px 6px 6px rgba(18,78,57,.25));
}


// Warning
.unl .dcf-notice-warning {
  // https://meyerweb.com/eric/tools/color-blend/#E72C0C:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(125,50,36,.25))
          drop-shadow(2px 4px 4px rgba(125,50,36,.25))
          drop-shadow(3px 6px 6px rgba(125,50,36,.25));
}


// Danger
.unl .dcf-notice-danger {
  // https://meyerweb.com/eric/tools/color-blend/#9D0000:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(97,18,18,.25))
          drop-shadow(2px 4px 4px rgba(97,18,18,.25))
          drop-shadow(3px 6px 6px rgba(97,18,18,.25));
}


// Change notice drop shadow color for dark mode
@media (prefers-color-scheme: dark) {

  .unl .dcf-notice {
    filter:
            drop-shadow(1px 2px 2px rgba(0,0,0,.25))
            drop-shadow(2px 4px 4px rgba(0,0,0,.25))
            drop-shadow(3px 6px 6px rgba(0,0,0,.25));
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.notices.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / COMPONENTS / NOTICE
//////////////////////////////


// Add a little vertical space between notice heading and message
.unl .dcf-notice-message {
  margin-top: #{ms(-12)}em;
}


// Ensure heading and close link (all states) display as cream
// .unl .dcf-notice h1, // An <h1> shouldn't be used at this level.
.unl .dcf-notice h2,
.unl .dcf-notice h3,
.unl .dcf-notice h4,
.unl .dcf-notice h5,
.unl .dcf-notice h6,
.unl .dcf-notice-message a:link,
.unl .dcf-notice-message a:visited,
.unl .dcf-notice-message a:hover,
.unl .dcf-notice-message a:active,
.unl .dcf-notice-message a {
  color: \$cream;
}


// Info
.unl .dcf-notice-info {
  // https://meyerweb.com/eric/tools/color-blend/#007197:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(18,75,93,.25))
          drop-shadow(2px 4px 4px rgba(18,75,93,.25))
          drop-shadow(3px 6px 6px rgba(18,75,93,.25));
}


// Success
.unl .dcf-notice-success {
  // https://meyerweb.com/eric/tools/color-blend/#00784E:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(18,78,57,.25))
          drop-shadow(2px 4px 4px rgba(18,78,57,.25))
          drop-shadow(3px 6px 6px rgba(18,78,57,.25));
}


// Warning
.unl .dcf-notice-warning {
  // https://meyerweb.com/eric/tools/color-blend/#E72C0C:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(125,50,36,.25))
          drop-shadow(2px 4px 4px rgba(125,50,36,.25))
          drop-shadow(3px 6px 6px rgba(125,50,36,.25));
}


// Danger
.unl .dcf-notice-danger {
  // https://meyerweb.com/eric/tools/color-blend/#9D0000:242423:1:hex
  filter:
          drop-shadow(1px 2px 2px rgba(97,18,18,.25))
          drop-shadow(2px 4px 4px rgba(97,18,18,.25))
          drop-shadow(3px 6px 6px rgba(97,18,18,.25));
}


// Change notice drop shadow color for dark mode
@media (prefers-color-scheme: dark) {

  .unl .dcf-notice {
    filter:
            drop-shadow(1px 2px 2px rgba(0,0,0,.25))
            drop-shadow(2px 4px 4px rgba(0,0,0,.25))
            drop-shadow(3px 6px 6px rgba(0,0,0,.25));
  }

}
", "wdn/templates_5.3/scss/components/_components.notices.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.notices.scss");
    }
}
