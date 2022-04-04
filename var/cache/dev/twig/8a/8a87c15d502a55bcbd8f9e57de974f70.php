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

/* wdn/templates_5.3/scss/deprecated/deprecated.tables.scss */
class __TwigTemplate_567a737540f4858853c5e529e89dfc43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.tables.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.tables.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / DEPRECATED / TABLES
//////////////////////////////


table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) {
  @include bg-transparent;
  border-bottom: 1px solid var(--b-table);
  max-width: 100%;
  width: 100%;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) thead,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody {
  @include txt-sm;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) td,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) th {
  border: 1px solid var(--b-table);
  @include pl-4;
  @include pr-4;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) thead th,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) thead td {
  @include pb-3;
  @include pt-5;
  vertical-align: bottom;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody th,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody td {
  @include pb-3;
  @include pt-3;
  vertical-align: top;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody tr:nth-of-type(even) {
  background-color: var(--bg-table-stripe);
}

.wdn_responsive_table thead th abbr {
  border-bottom: none;
}


@media only screen and (max-width:47.99em) {

  .wdn_responsive_table th,
  .wdn_responsive_table td {
    display: block;
  }

  .wdn_responsive_table thead tr {
    display: none;
  }

  .wdn_responsive_table tbody tr:first-child th {
    border-top-width: 0;
  }

  .wdn_responsive_table tbody tr:nth-of-type(even) {
    background-color: transparent;
  }

  .wdn_responsive_table tbody td {
  \ttext-align: left;
  }

  .wdn_responsive_table tbody td::before {
    content: attr(data-header);
    display: block;
    font-weight: bold;
  }

  .wdn_responsive_table tbody:empty {
  \tdisplay: none;
  }

  .wdn_responsive_table tbody:nth-of-type(even) {
  \tbackground-color: var(--bg-table-stripe);
  }

}


@media only screen and (min-width:48em) {

  .wdn_responsive_table thead th:not(:first-child) {
  \ttext-align: center;
  }

  .wdn_responsive_table tbody td {
  \ttext-align: center;
  }

  .wdn_responsive_table.flush-left thead th,
  .wdn_responsive_table.flush-left td {
  \ttext-align: left;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.tables.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / DEPRECATED / TABLES
//////////////////////////////


table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) {
  @include bg-transparent;
  border-bottom: 1px solid var(--b-table);
  max-width: 100%;
  width: 100%;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) thead,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody {
  @include txt-sm;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) td,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) th {
  border: 1px solid var(--b-table);
  @include pl-4;
  @include pr-4;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) thead th,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) thead td {
  @include pb-3;
  @include pt-5;
  vertical-align: bottom;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody th,
table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody td {
  @include pb-3;
  @include pt-3;
  vertical-align: top;
}

table:not(.dcf-table):not(.ui-datepicker-calendar):not(.dcf-datepicker-dialog-calendar) tbody tr:nth-of-type(even) {
  background-color: var(--bg-table-stripe);
}

.wdn_responsive_table thead th abbr {
  border-bottom: none;
}


@media only screen and (max-width:47.99em) {

  .wdn_responsive_table th,
  .wdn_responsive_table td {
    display: block;
  }

  .wdn_responsive_table thead tr {
    display: none;
  }

  .wdn_responsive_table tbody tr:first-child th {
    border-top-width: 0;
  }

  .wdn_responsive_table tbody tr:nth-of-type(even) {
    background-color: transparent;
  }

  .wdn_responsive_table tbody td {
  \ttext-align: left;
  }

  .wdn_responsive_table tbody td::before {
    content: attr(data-header);
    display: block;
    font-weight: bold;
  }

  .wdn_responsive_table tbody:empty {
  \tdisplay: none;
  }

  .wdn_responsive_table tbody:nth-of-type(even) {
  \tbackground-color: var(--bg-table-stripe);
  }

}


@media only screen and (min-width:48em) {

  .wdn_responsive_table thead th:not(:first-child) {
  \ttext-align: center;
  }

  .wdn_responsive_table tbody td {
  \ttext-align: center;
  }

  .wdn_responsive_table.flush-left thead th,
  .wdn_responsive_table.flush-left td {
  \ttext-align: left;
  }

}
", "wdn/templates_5.3/scss/deprecated/deprecated.tables.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.tables.scss");
    }
}
