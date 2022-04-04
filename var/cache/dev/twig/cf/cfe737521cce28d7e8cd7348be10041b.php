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

/* wdn/templates_5.0/js/js-css/notices.scss */
class __TwigTemplate_f066ff50553b81957e7d7bd3c4248868 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/notices.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/js-css/notices.scss"));

        // line 1
        echo "@import '../../scss/pre.tmp.scss';


.wdn_notice {
  background-color: \$color-info;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/information.svg');
  background-position: 1em 50%;
  background-repeat: no-repeat;
  background-size: \$length-em-6;
  border-radius: \$roundrect;
  box-shadow: 0 1px 1px 0 fade-out(\$darkest-gray, .5);
  @include cream;
  @include mb-4;
  @include p-4;
}

.wdn_notice.affirm {
  background-color: \$color-success;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/check-circle-2.svg');
}

.wdn_notice.negate {
  background-color: \$color-danger;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/cross-bubble.svg');
}

.wdn_notice.alert {
  background-color: \$color-warning;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/alert-2.svg');
}

.wdn_notice a,
.wdn_notice a:hover {
  @include cream;
}

.wdn_notice .message {
  @include pl-8;
  @include pr-5;
}

.wdn_notice .message * {
  color: inherit;
  margin: 0;
}

.wdn_notice .message h4,
.wdn_notice .message .title {
  @include font-sans;
  @include ls-1;
  @include lh-3;
  text-transform: uppercase;
}

.wdn_notice .close {
  float: right;
}

.wdn_notice .close a,
.wdn_notice .close a:hover {
  background: transparent url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/delete-1.svg') 50% 50% / contain no-repeat;
  display: block;
  @include h-4;
  position: relative;
  text-decoration: none;
  text-indent: -9999em;
  @include w-4;
  z-index: 1;
}

.wdn_notice.overlay {
  left: \$length-vw-2;
  margin-left: auto;
  margin-right: auto;
  max-width: #{ms(28)}em;
  position: absolute;
  right: \$length-vw-2;
  text-align: left;
  top: #{ms(8)}em;
  z-index: 999; // Ensure that the notice is above all other elements
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/js-css/notices.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '../../scss/pre.tmp.scss';


.wdn_notice {
  background-color: \$color-info;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/information.svg');
  background-position: 1em 50%;
  background-repeat: no-repeat;
  background-size: \$length-em-6;
  border-radius: \$roundrect;
  box-shadow: 0 1px 1px 0 fade-out(\$darkest-gray, .5);
  @include cream;
  @include mb-4;
  @include p-4;
}

.wdn_notice.affirm {
  background-color: \$color-success;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/check-circle-2.svg');
}

.wdn_notice.negate {
  background-color: \$color-danger;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/cross-bubble.svg');
}

.wdn_notice.alert {
  background-color: \$color-warning;
  background-image: url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/alert-2.svg');
}

.wdn_notice a,
.wdn_notice a:hover {
  @include cream;
}

.wdn_notice .message {
  @include pl-8;
  @include pr-5;
}

.wdn_notice .message * {
  color: inherit;
  margin: 0;
}

.wdn_notice .message h4,
.wdn_notice .message .title {
  @include font-sans;
  @include ls-1;
  @include lh-3;
  text-transform: uppercase;
}

.wdn_notice .close {
  float: right;
}

.wdn_notice .close a,
.wdn_notice .close a:hover {
  background: transparent url('https://unlcms.unl.edu/wdn/templates_5.0/js/js-css/img/delete-1.svg') 50% 50% / contain no-repeat;
  display: block;
  @include h-4;
  position: relative;
  text-decoration: none;
  text-indent: -9999em;
  @include w-4;
  z-index: 1;
}

.wdn_notice.overlay {
  left: \$length-vw-2;
  margin-left: auto;
  margin-right: auto;
  max-width: #{ms(28)}em;
  position: absolute;
  right: \$length-vw-2;
  text-align: left;
  top: #{ms(8)}em;
  z-index: 999; // Ensure that the notice is above all other elements
}
", "wdn/templates_5.0/js/js-css/notices.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/js-css/notices.scss");
    }
}
