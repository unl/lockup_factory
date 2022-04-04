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

/* wdn/templates_5.3/scss/deprecated/deprecated.quote.scss */
class __TwigTemplate_8e310b01ee5fcff3055b5e7d347d88ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.quote.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.quote.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / DEPRECATED / QUOTE
/////////////////////////////


.wdn-quote {
  font-size: #{ms(2)}em; // 1.33em
  @include mb-7;
  margin-left: 0;
  margin-right: 0;
  padding-top: #{ms(10)}em; // 4.21em
  position: relative;
}

.wdn-quote::before {
  content: open-quote;
  font-size: #{ms(14)}em; // 7.49em
  @include lh-1;
  position: absolute;
  top: 0;
}

.wdn-quote::after {
  content: close-quote;
  @include sr-only;
}

.wdn-quoter {
  display: block;
  font-size: #{ms(-2)}em; // .75em
  font-style: normal;
  @include mt-4;
}

.wdn-quoter::before {
  content: '— '; // em dash (&mdash;) followed by a thin space (&thinsp;)
}

.quoter-context {
  display: block;
  font-style: italic;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.quote.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / DEPRECATED / QUOTE
/////////////////////////////


.wdn-quote {
  font-size: #{ms(2)}em; // 1.33em
  @include mb-7;
  margin-left: 0;
  margin-right: 0;
  padding-top: #{ms(10)}em; // 4.21em
  position: relative;
}

.wdn-quote::before {
  content: open-quote;
  font-size: #{ms(14)}em; // 7.49em
  @include lh-1;
  position: absolute;
  top: 0;
}

.wdn-quote::after {
  content: close-quote;
  @include sr-only;
}

.wdn-quoter {
  display: block;
  font-size: #{ms(-2)}em; // .75em
  font-style: normal;
  @include mt-4;
}

.wdn-quoter::before {
  content: '— '; // em dash (&mdash;) followed by a thin space (&thinsp;)
}

.quoter-context {
  display: block;
  font-style: italic;
}
", "wdn/templates_5.3/scss/deprecated/deprecated.quote.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.quote.scss");
    }
}
