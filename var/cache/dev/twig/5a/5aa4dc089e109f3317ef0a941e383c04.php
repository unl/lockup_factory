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

/* wdn/templates_5.1/js/js-css/formvalidator.css */
class __TwigTemplate_5577b617b06ec6bf4705ee5487afac67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/formvalidator.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/formvalidator.css"));

        // line 1
        echo "ul.validation-advice{color:#d00000;font-size:.84em;font-weight:700;list-style:none;margin:0 0 1em}ul.validation-advice li:before{content:\"\\e80f\";display:inline-block;font-family:wdn-icon;font-style:normal;font-weight:400;margin-right:.2em;text-align:center;text-decoration:inherit;width:1em;font-variant:normal;text-transform:none}@-webkit-keyframes wdn-error{0%{border:1px solid #d00000;-webkit-box-shadow:0 0 6px fadeout(#d00000,20%);box-shadow:0 0 6px fadeout(#d00000,20%)}to{border:1px solid fadeout(#d00000,80%);-webkit-box-shadow:0 0 6px fadeout(#d00000,90%);box-shadow:0 0 6px fadeout(#d00000,90%)}}@keyframes wdn-error{0%{border:1px solid #d00000;-webkit-box-shadow:0 0 6px fadeout(#d00000,20%);box-shadow:0 0 6px fadeout(#d00000,20%)}to{border:1px solid fadeout(#d00000,80%);-webkit-box-shadow:0 0 6px fadeout(#d00000,90%);box-shadow:0 0 6px fadeout(#d00000,90%)}}form input[type=email].validation-failed,form input[type=file].validation-failed,form input[type=number].validation-failed,form input[type=password].validation-failed,form input[type=text].validation-failed,form input[type=url].validation-failed,form select.validation-failed,form textarea.validation-failed{-webkit-animation:wdn-error 1.2s infinite alternate;animation:wdn-error 1.2s infinite alternate;border:1px solid #d00000}
/*# sourceMappingURL=formvalidator.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/js-css/formvalidator.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("ul.validation-advice{color:#d00000;font-size:.84em;font-weight:700;list-style:none;margin:0 0 1em}ul.validation-advice li:before{content:\"\\e80f\";display:inline-block;font-family:wdn-icon;font-style:normal;font-weight:400;margin-right:.2em;text-align:center;text-decoration:inherit;width:1em;font-variant:normal;text-transform:none}@-webkit-keyframes wdn-error{0%{border:1px solid #d00000;-webkit-box-shadow:0 0 6px fadeout(#d00000,20%);box-shadow:0 0 6px fadeout(#d00000,20%)}to{border:1px solid fadeout(#d00000,80%);-webkit-box-shadow:0 0 6px fadeout(#d00000,90%);box-shadow:0 0 6px fadeout(#d00000,90%)}}@keyframes wdn-error{0%{border:1px solid #d00000;-webkit-box-shadow:0 0 6px fadeout(#d00000,20%);box-shadow:0 0 6px fadeout(#d00000,20%)}to{border:1px solid fadeout(#d00000,80%);-webkit-box-shadow:0 0 6px fadeout(#d00000,90%);box-shadow:0 0 6px fadeout(#d00000,90%)}}form input[type=email].validation-failed,form input[type=file].validation-failed,form input[type=number].validation-failed,form input[type=password].validation-failed,form input[type=text].validation-failed,form input[type=url].validation-failed,form select.validation-failed,form textarea.validation-failed{-webkit-animation:wdn-error 1.2s infinite alternate;animation:wdn-error 1.2s infinite alternate;border:1px solid #d00000}
/*# sourceMappingURL=formvalidator.css.map */", "wdn/templates_5.1/js/js-css/formvalidator.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/js-css/formvalidator.css");
    }
}
