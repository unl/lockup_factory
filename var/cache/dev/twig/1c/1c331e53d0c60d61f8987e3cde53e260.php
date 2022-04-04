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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.css */
class __TwigTemplate_396282de64e0736574a0ea55cf275cfe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.css"));

        // line 1
        echo ".flatpickr-confirm {
\theight: 40px;
\tmax-height: 0px;
\tvisibility: hidden;
\tdisplay: flex;
\tjustify-content: center;
\talign-items: center;
\tcursor: pointer;
\tbackground: rgba(0,0,0,0.06)
}
.flatpickr-confirm svg path {
\tfill: inherit;
}
.flatpickr-confirm.darkTheme {
\tcolor: white;
\tfill: white;
}
.flatpickr-confirm.visible {
\tmax-height: 40px;
\tvisibility: visible
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".flatpickr-confirm {
\theight: 40px;
\tmax-height: 0px;
\tvisibility: hidden;
\tdisplay: flex;
\tjustify-content: center;
\talign-items: center;
\tcursor: pointer;
\tbackground: rgba(0,0,0,0.06)
}
.flatpickr-confirm svg path {
\tfill: inherit;
}
.flatpickr-confirm.darkTheme {
\tcolor: white;
\tfill: white;
}
.flatpickr-confirm.visible {
\tmax-height: 40px;
\tvisibility: visible
}
", "wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/plugins/confirmDate/confirmDate.css");
    }
}
