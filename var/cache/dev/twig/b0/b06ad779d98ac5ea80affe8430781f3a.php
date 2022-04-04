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

/* wdn/templates_5.3/scss/deprecated/deprecated.pagination.scss */
class __TwigTemplate_5ad0b7d9bcd8ed5c8167794c06a83d8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.pagination.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.pagination.scss"));

        // line 1
        echo "//////////////////////////////////
// THEME / DEPRECATED / PAGINATION
//////////////////////////////////


.wdn_pagination {
  font-weight: bold;
  list-style: none;
  padding-left: 0;
}

.wdn_pagination li {
  display: inline-block;
}

.wdn_pagination li:not(:last-child) {
  @include mr-2;
}

.wdn_pagination li.ellipsis {
  color: var(--dark-gray);
}

// .wdn_pagination li.selected {}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.pagination.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////////
// THEME / DEPRECATED / PAGINATION
//////////////////////////////////


.wdn_pagination {
  font-weight: bold;
  list-style: none;
  padding-left: 0;
}

.wdn_pagination li {
  display: inline-block;
}

.wdn_pagination li:not(:last-child) {
  @include mr-2;
}

.wdn_pagination li.ellipsis {
  color: var(--dark-gray);
}

// .wdn_pagination li.selected {}
", "wdn/templates_5.3/scss/deprecated/deprecated.pagination.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.pagination.scss");
    }
}
