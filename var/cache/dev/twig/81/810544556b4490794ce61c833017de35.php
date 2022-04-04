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

/* wdn/templates_5.2/js/js-css/formvalidator.scss */
class __TwigTemplate_88790ed2575c592549fbd11e5f0edc39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/formvalidator.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/formvalidator.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


ul.validation-advice {
  color: \$scarlet;
  @include txt-sm;
  font-weight: bold;
  list-style: none;
  margin: 0 0 1em;
}


ul.validation-advice li::before {
  content: '\\e80f';
  display: inline-block;
  font-family: 'wdn-icon';
  font-style: normal;
  font-weight: normal;
  margin-right: .2em;
  text-align: center;
  text-decoration: inherit;
  width: 1em;
  // For safety - reset parent styles, that can break glyph codes
  font-variant: normal;
  text-transform: none;
}


@keyframes wdn-error {

  from {
    border: 1px solid \$scarlet;
    box-shadow: 0 0 6px fadeout(\$scarlet, 20%);
  }

  to {
    border: 1px solid fadeout(\$scarlet, 80%);
    box-shadow: 0 0 6px fadeout(\$scarlet, 90%);
  }

}


form input[type=text].validation-failed,
form input[type=file].validation-failed,
form input[type=password].validation-failed,
form input[type=email].validation-failed,
form input[type=url].validation-failed,
form input[type=number].validation-failed,
form textarea.validation-failed,
form select.validation-failed {
  animation: wdn-error 1.2s infinite alternate;
  border: 1px solid \$scarlet;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/js-css/formvalidator.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


ul.validation-advice {
  color: \$scarlet;
  @include txt-sm;
  font-weight: bold;
  list-style: none;
  margin: 0 0 1em;
}


ul.validation-advice li::before {
  content: '\\e80f';
  display: inline-block;
  font-family: 'wdn-icon';
  font-style: normal;
  font-weight: normal;
  margin-right: .2em;
  text-align: center;
  text-decoration: inherit;
  width: 1em;
  // For safety - reset parent styles, that can break glyph codes
  font-variant: normal;
  text-transform: none;
}


@keyframes wdn-error {

  from {
    border: 1px solid \$scarlet;
    box-shadow: 0 0 6px fadeout(\$scarlet, 20%);
  }

  to {
    border: 1px solid fadeout(\$scarlet, 80%);
    box-shadow: 0 0 6px fadeout(\$scarlet, 90%);
  }

}


form input[type=text].validation-failed,
form input[type=file].validation-failed,
form input[type=password].validation-failed,
form input[type=email].validation-failed,
form input[type=url].validation-failed,
form input[type=number].validation-failed,
form textarea.validation-failed,
form select.validation-failed {
  animation: wdn-error 1.2s infinite alternate;
  border: 1px solid \$scarlet;
}
", "wdn/templates_5.2/js/js-css/formvalidator.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/js-css/formvalidator.scss");
    }
}
