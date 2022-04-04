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

/* wdn/templates_5.3/scss/print/_print.links.scss */
class __TwigTemplate_5c89ae2d3959404cf9887901a037e03e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/print/_print.links.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/print/_print.links.scss"));

        // line 1
        echo "////////////////////////
// THEME / PRINT / LINKS
////////////////////////


.unl .dcf-main a,
.unl .dcf-main a:visited {
  text-decoration: underline;
}


// Show the URL after each link
.unl .dcf-main a[href]::after {
  content: \" (\" attr(href) \")\";
  font-size: 80%;
  word-wrap: break-word; // Break long URLs that don't fit the page width
}


// External links don't get this treatment
.unl .dcf-main a[href^=\"http://\"]::after,
.unl .dcf-main a[href^=\"https://\"]::after {
  content: \" [\" attr(href) \"]\";
}


// Don't show links that are fragment identifiers,
// or use the `javascript:` pseudo protocol
.unl .dcf-main a[href^=\"#\"]:after,
.unl .dcf-main a[href^=\"javascript:\"]:after {
  content: \"\";
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/print/_print.links.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////
// THEME / PRINT / LINKS
////////////////////////


.unl .dcf-main a,
.unl .dcf-main a:visited {
  text-decoration: underline;
}


// Show the URL after each link
.unl .dcf-main a[href]::after {
  content: \" (\" attr(href) \")\";
  font-size: 80%;
  word-wrap: break-word; // Break long URLs that don't fit the page width
}


// External links don't get this treatment
.unl .dcf-main a[href^=\"http://\"]::after,
.unl .dcf-main a[href^=\"https://\"]::after {
  content: \" [\" attr(href) \"]\";
}


// Don't show links that are fragment identifiers,
// or use the `javascript:` pseudo protocol
.unl .dcf-main a[href^=\"#\"]:after,
.unl .dcf-main a[href^=\"javascript:\"]:after {
  content: \"\";
}
", "wdn/templates_5.3/scss/print/_print.links.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/print/_print.links.scss");
    }
}
