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

/* wdn/templates_5.3/scss/deprecated/deprecated.helpers.scss */
class __TwigTemplate_c178d98ad90f3e74e4905e4ab3d06dce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.helpers.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.helpers.scss"));

        // line 1
        echo "///////////////////////////////
// THEME / DEPRECATED / HELPERS
///////////////////////////////


.centered {
\tfloat: none !important;
\tmargin: 0 auto !important;
}

.clear {
\tclear: both;
}

.clear-top {
  margin-top: 0 !important;
}

.hidden {
  display: none;
}

.wdn-fouc-fix {
\tvisibility: hidden;
}

.wdn-pull-left {
  float: left;
}

.wdn-pull-right {
  float: right;
}

.wdn-text-hidden {
  @include sr-only;
}

.wdn-responsive-embed {
  @include ratio;
}

.wdn-aspect16x9 {
  @include ratio-16x9;
}

.wdn-aspect3x4 {
  @include ratio-4x3;
}

.wdn-responsive-embed embed,
.wdn-responsive-embed iframe,
.wdn-responsive-embed object,
.wdn-responsive-embed video,
.wdn-responsive-embed .wdn-responsive-item {
  @include ratio-child;
  border: 0;
  height: 100%;
  width: 100%;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.helpers.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////
// THEME / DEPRECATED / HELPERS
///////////////////////////////


.centered {
\tfloat: none !important;
\tmargin: 0 auto !important;
}

.clear {
\tclear: both;
}

.clear-top {
  margin-top: 0 !important;
}

.hidden {
  display: none;
}

.wdn-fouc-fix {
\tvisibility: hidden;
}

.wdn-pull-left {
  float: left;
}

.wdn-pull-right {
  float: right;
}

.wdn-text-hidden {
  @include sr-only;
}

.wdn-responsive-embed {
  @include ratio;
}

.wdn-aspect16x9 {
  @include ratio-16x9;
}

.wdn-aspect3x4 {
  @include ratio-4x3;
}

.wdn-responsive-embed embed,
.wdn-responsive-embed iframe,
.wdn-responsive-embed object,
.wdn-responsive-embed video,
.wdn-responsive-embed .wdn-responsive-item {
  @include ratio-child;
  border: 0;
  height: 100%;
  width: 100%;
}
", "wdn/templates_5.3/scss/deprecated/deprecated.helpers.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.helpers.scss");
    }
}
