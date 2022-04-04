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

/* wdn/templates_5.2/js/plugins/mediaelement/css/wdn-overrides.css */
class __TwigTemplate_c810b0690e04a63491a1948d7e0f74e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/plugins/mediaelement/css/wdn-overrides.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/plugins/mediaelement/css/wdn-overrides.css"));

        // line 1
        echo "/* Framework override */
#dcf-main .me-cannotplay span {
    /* Fix contrast error found by axe (text was hidden by container because there was too much paddding) */
    padding: .5em;
    display: inline;
}
#dcf-main .me-cannotplay img {
    /* Some browsers (phantomjs and maybe others) will incorrectly display the poster image, which pushes link text out of view. */
    display: none;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/plugins/mediaelement/css/wdn-overrides.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Framework override */
#dcf-main .me-cannotplay span {
    /* Fix contrast error found by axe (text was hidden by container because there was too much paddding) */
    padding: .5em;
    display: inline;
}
#dcf-main .me-cannotplay img {
    /* Some browsers (phantomjs and maybe others) will incorrectly display the poster image, which pushes link text out of view. */
    display: none;
}
", "wdn/templates_5.2/js/plugins/mediaelement/css/wdn-overrides.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/plugins/mediaelement/css/wdn-overrides.css");
    }
}