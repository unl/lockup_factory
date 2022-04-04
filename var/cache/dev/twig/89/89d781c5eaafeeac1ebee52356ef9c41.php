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

/* wdn/templates_4.1/scripts/js-css/formvalidator.css */
class __TwigTemplate_67f1641ccc0dfc182577ba79de9e3718 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/formvalidator.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/js-css/formvalidator.css"));

        // line 1
        echo "ul.validation-advice{margin:0 0 1em;list-style:none;color:#d00000;font-weight:700;font-size:.8em}ul.validation-advice li:before{font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;content:'\\e80f'}form input[type=email].validation-failed,form input[type=file].validation-failed,form input[type=number].validation-failed,form input[type=password].validation-failed,form input[type=text].validation-failed,form input[type=url].validation-failed,form select.validation-failed,form textarea.validation-failed{border:1px solid #d00000;-webkit-animation:wdn-error 1.2s infinite alternate;-moz-animation:wdn-error 1.2s infinite alternate;animation:wdn-error 1.2s infinite alternate}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/js-css/formvalidator.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("ul.validation-advice{margin:0 0 1em;list-style:none;color:#d00000;font-weight:700;font-size:.8em}ul.validation-advice li:before{font-family:wdn-icon;font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;content:'\\e80f'}form input[type=email].validation-failed,form input[type=file].validation-failed,form input[type=number].validation-failed,form input[type=password].validation-failed,form input[type=text].validation-failed,form input[type=url].validation-failed,form select.validation-failed,form textarea.validation-failed{border:1px solid #d00000;-webkit-animation:wdn-error 1.2s infinite alternate;-moz-animation:wdn-error 1.2s infinite alternate;animation:wdn-error 1.2s infinite alternate}", "wdn/templates_4.1/scripts/js-css/formvalidator.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/js-css/formvalidator.css");
    }
}
