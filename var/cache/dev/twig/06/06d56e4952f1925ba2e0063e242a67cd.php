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

/* wdn/templates_5.3/js/js-css/tabs.css */
class __TwigTemplate_74cbbc3ea2fd1a0b1c3165658e343601 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/tabs.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/tabs.css"));

        // line 1
        echo ".unl .dcf-tab{margin-bottom:-1px}.unl .dcf-tab[aria-selected]{border:1px solid var(--b-light-gray);border-bottom-color:var(--bg-tab-selected)}.unl .dcf-tabs-panel>:last-child{margin-bottom:0}@media only screen and (max-width:56.12em){.unl .dcf-tabs-responsive .dcf-tab{border-bottom-width:0;border-left:1px solid var(--b-light-gray);border-right:1px solid var(--b-light-gray);border-top:1px solid var(--b-light-gray);margin-bottom:0}.unl .dcf-tabs-responsive .dcf-tab[aria-selected]{position:relative}.unl .dcf-tabs-responsive .dcf-tab[aria-selected]:before{border-bottom:.47em solid transparent;border-left:.47em solid var(--b-light-gray);border-top:.47em solid transparent;content:\"\";left:0;position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}}
/*# sourceMappingURL=tabs.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/tabs.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".unl .dcf-tab{margin-bottom:-1px}.unl .dcf-tab[aria-selected]{border:1px solid var(--b-light-gray);border-bottom-color:var(--bg-tab-selected)}.unl .dcf-tabs-panel>:last-child{margin-bottom:0}@media only screen and (max-width:56.12em){.unl .dcf-tabs-responsive .dcf-tab{border-bottom-width:0;border-left:1px solid var(--b-light-gray);border-right:1px solid var(--b-light-gray);border-top:1px solid var(--b-light-gray);margin-bottom:0}.unl .dcf-tabs-responsive .dcf-tab[aria-selected]{position:relative}.unl .dcf-tabs-responsive .dcf-tab[aria-selected]:before{border-bottom:.47em solid transparent;border-left:.47em solid var(--b-light-gray);border-top:.47em solid transparent;content:\"\";left:0;position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}}
/*# sourceMappingURL=tabs.css.map */", "wdn/templates_5.3/js/js-css/tabs.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/tabs.css");
    }
}
