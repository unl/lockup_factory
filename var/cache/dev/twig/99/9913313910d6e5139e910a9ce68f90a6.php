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

/* wdn/templates_5.3/images/deprecated/infographics/world.svg */
class __TwigTemplate_2efb7338798f3885c773dbebfcc51802 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/world.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/images/deprecated/infographics/world.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M90.5 39.7c-25.5 0-46.2 20.7-46.2 46.2 0 25.5 20.7 46.199 46.2 46.199s46.2-20.699 46.2-46.199c0-25.5-20.7-46.2-46.2-46.2zm-39.6 46.1c0-13.3 6.6-25.1 16.7-32.2 1.7.7 1.7 3.7.9 5.8-1.3 3.7-6.3 7-5.1 11.5.4 1.5.3 1.9.6 3.4.1.601.1 1 .6 1.4.7-.8.4-1.8.8-2.9 1.7.8 3.7 7 3.8 8.9.2 4.6 7.6 4.399 10.4 6.7 1.2 1 1.8 2.699 3.2 3.6 2.4 1.6 7 1.4 3.2 5.5-2.6 2.9-.6 5.4.9 8 .9 1.7 1 2.4 2.7 3.5 3.6 2.4 2.8 6.6 1.4 10.3-.4 1-1 1.8-1.1 2.9-.1.899-.4 2.2-.5 3.2-21.3-.6-38.5-18.1-38.5-39.6zm43.9 39.3c.8-1.199 1.4-2.398 2.2-3 3.2-2.3 6.7-4.898 9.3-7.898.9-1 2.3-1.2 3.4-1.9 1-.5 1.3-1.5 1.899-2.398.5-.801 1.199-1.5 1.601-2.301l1.7-3.699c.5-.801 1.3-1.9 1.398-2.9 0-1.7-1.199-2.4-2.699-2.5s-4.301.5-5.601-.2c-1.899-1-.8-4.3-3.5-4.7-.601-.1-1.3.102-2-.1-2-.4-2.899-2.8-4.601-3.2-3.399-1-8.299-1.2-10.199 2.101-1.498-1.705-2.698-.105-4.098-1.105s.3-2.8-.5-4c-1.5-2.3-5.5-.7-2.2-4.899-2.1-1.301-2.2.801-3.4 1.801-1 .898-2.8-.9-3.2-1.602-.8-1.4-.3-4.3.6-5.6.8-1.1 6.7-1.7 7.9-1.1 1.5.699 1.4 2.6 2.1 3.8 1.5-1.3-.4-2.601 0-4.101.4-1.599 2.2-2.399 3.1-3.699 1-1.4 1.4-3.2 2.6-4.5 1.5-1.6 3.7-.6 4.801-1.9.101-.1-1-1.5-.899-2 .2-1.3 2.3-1.2 2.8-2.5-.898-.6-1.699-1.5-2.6-2.2-1.602-1.1-2.5-.5-3.9-1.1l.102-1.2c-.8-.4-1.9-.7-2.7-.5-1 .6-.2 4.7-1.5 5.8-.3-.1-.5-.2-.7-.5-.6-.7-.1-1.5-.9-2.2-.6-.5-2.2-.7-3-.7-1-.1.9-2.7 1.1-2.9l3.5-2.3-1.7-.3-.9-.2c-2.504.3-8.404-.7-8.304-3.7 4.6-1.8 9.5-2.9 14.7-2.9 2.3 0 4.5.2 6.7.6l-.5.3 2.3.4-1.2-.4c5.2 1 10 2.9 14.3 5.7 1.4 1.5 2.602 3.2 3.7 5 1.101 2 1.601 5.2 3.2 6.7 1.3 1.2 1.9 1.2 2.2.7.5-1.1-.9-3.8-1-5h.5c1.1 1.2 2 2.6 2.899 3.9-.199.7-1.301 2.7-1.399 3.2-.2 1.4.5 3.4.5 4.899 0 1.101-.101 2.301 0 3.399.1 1.2.2 2.101.6 3.2l1.3 5.3c1 2.601 2.5 5 5.102 3.2l.3-.9c-.302 20.202-15.602 36.702-35.202 38.802zm-8.2-75.2c-.2-.4-.2-.7-.1-1 0-.1 0-.1.1-.1.2-.4.7-.5 1.4-.2-.2 0-1.2 1.7-1.4 1.3zm5 4.2c.301.8.4 1.7-.1 1.4-1-.6-1.7-1.4-2.6-2.3-.6-.6-1.7-.9-2.5-1.2.8-.9 3.9 0 4.6.8.2.1.4.7.6 1.3zm8.9-2.7c.2.1-1 4.4-2.3 4.4-1.2-.1-2.6-2.5-3.1-3.4-.6-.9-1.6-1.4-2.6-1.9-1.1-.5-3.1-.3-2.2-1.6.1-.2.3-.4.5-.7 1-1 3.5-.8 4.7-.5 2.1.5 3.3 2.7 5 3.7z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/images/deprecated/infographics/world.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"180\" height=\"142\"><path fill=\"#6d6d69\" d=\"M90.5 39.7c-25.5 0-46.2 20.7-46.2 46.2 0 25.5 20.7 46.199 46.2 46.199s46.2-20.699 46.2-46.199c0-25.5-20.7-46.2-46.2-46.2zm-39.6 46.1c0-13.3 6.6-25.1 16.7-32.2 1.7.7 1.7 3.7.9 5.8-1.3 3.7-6.3 7-5.1 11.5.4 1.5.3 1.9.6 3.4.1.601.1 1 .6 1.4.7-.8.4-1.8.8-2.9 1.7.8 3.7 7 3.8 8.9.2 4.6 7.6 4.399 10.4 6.7 1.2 1 1.8 2.699 3.2 3.6 2.4 1.6 7 1.4 3.2 5.5-2.6 2.9-.6 5.4.9 8 .9 1.7 1 2.4 2.7 3.5 3.6 2.4 2.8 6.6 1.4 10.3-.4 1-1 1.8-1.1 2.9-.1.899-.4 2.2-.5 3.2-21.3-.6-38.5-18.1-38.5-39.6zm43.9 39.3c.8-1.199 1.4-2.398 2.2-3 3.2-2.3 6.7-4.898 9.3-7.898.9-1 2.3-1.2 3.4-1.9 1-.5 1.3-1.5 1.899-2.398.5-.801 1.199-1.5 1.601-2.301l1.7-3.699c.5-.801 1.3-1.9 1.398-2.9 0-1.7-1.199-2.4-2.699-2.5s-4.301.5-5.601-.2c-1.899-1-.8-4.3-3.5-4.7-.601-.1-1.3.102-2-.1-2-.4-2.899-2.8-4.601-3.2-3.399-1-8.299-1.2-10.199 2.101-1.498-1.705-2.698-.105-4.098-1.105s.3-2.8-.5-4c-1.5-2.3-5.5-.7-2.2-4.899-2.1-1.301-2.2.801-3.4 1.801-1 .898-2.8-.9-3.2-1.602-.8-1.4-.3-4.3.6-5.6.8-1.1 6.7-1.7 7.9-1.1 1.5.699 1.4 2.6 2.1 3.8 1.5-1.3-.4-2.601 0-4.101.4-1.599 2.2-2.399 3.1-3.699 1-1.4 1.4-3.2 2.6-4.5 1.5-1.6 3.7-.6 4.801-1.9.101-.1-1-1.5-.899-2 .2-1.3 2.3-1.2 2.8-2.5-.898-.6-1.699-1.5-2.6-2.2-1.602-1.1-2.5-.5-3.9-1.1l.102-1.2c-.8-.4-1.9-.7-2.7-.5-1 .6-.2 4.7-1.5 5.8-.3-.1-.5-.2-.7-.5-.6-.7-.1-1.5-.9-2.2-.6-.5-2.2-.7-3-.7-1-.1.9-2.7 1.1-2.9l3.5-2.3-1.7-.3-.9-.2c-2.504.3-8.404-.7-8.304-3.7 4.6-1.8 9.5-2.9 14.7-2.9 2.3 0 4.5.2 6.7.6l-.5.3 2.3.4-1.2-.4c5.2 1 10 2.9 14.3 5.7 1.4 1.5 2.602 3.2 3.7 5 1.101 2 1.601 5.2 3.2 6.7 1.3 1.2 1.9 1.2 2.2.7.5-1.1-.9-3.8-1-5h.5c1.1 1.2 2 2.6 2.899 3.9-.199.7-1.301 2.7-1.399 3.2-.2 1.4.5 3.4.5 4.899 0 1.101-.101 2.301 0 3.399.1 1.2.2 2.101.6 3.2l1.3 5.3c1 2.601 2.5 5 5.102 3.2l.3-.9c-.302 20.202-15.602 36.702-35.202 38.802zm-8.2-75.2c-.2-.4-.2-.7-.1-1 0-.1 0-.1.1-.1.2-.4.7-.5 1.4-.2-.2 0-1.2 1.7-1.4 1.3zm5 4.2c.301.8.4 1.7-.1 1.4-1-.6-1.7-1.4-2.6-2.3-.6-.6-1.7-.9-2.5-1.2.8-.9 3.9 0 4.6.8.2.1.4.7.6 1.3zm8.9-2.7c.2.1-1 4.4-2.3 4.4-1.2-.1-2.6-2.5-3.1-3.4-.6-.9-1.6-1.4-2.6-1.9-1.1-.5-3.1-.3-2.2-1.6.1-.2.3-.4.5-.7 1-1 3.5-.8 4.7-.5 2.1.5 3.3 2.7 5 3.7z\"/></svg>", "wdn/templates_5.3/images/deprecated/infographics/world.svg", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/images/deprecated/infographics/world.svg");
    }
}