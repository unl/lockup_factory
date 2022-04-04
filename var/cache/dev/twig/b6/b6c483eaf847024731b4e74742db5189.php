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

/* wdn/templates_5.3/scss/variables/_variables.animation.scss */
class __TwigTemplate_773d53e0996fd0facf0d17602a19a35f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.animation.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.animation.scss"));

        // line 1
        echo "////////////////////////////////
// THEME / VARIABLES / ANIMATION
////////////////////////////////


// Delay
\$animation-delay-fade-in: 0;
\$animation-delay-move-left: 500ms;
\$animation-delay-move-right: 500ms;
\$animation-delay-move-up: 500ms;


// Duration
\$animation-duration-fade-in: 500ms;
\$animation-duration-move-left: 250ms;
\$animation-duration-move-right: 250ms;
\$animation-duration-move-up: 250ms;


// Timing Function (Easing)
\$animation-timing-fn-fade-in: cubic-bezier(.25, .46, .45, .94);
\$animation-timing-fn-move-left: cubic-bezier(.25, .46, .45, .94);
\$animation-timing-fn-move-right: cubic-bezier(.25, .46, .45, .94);
\$animation-timing-fn-move-up: cubic-bezier(.25, .46, .45, .94);


// Transforms
\$animation-transform-move-left: #{ms(8)}em;
\$animation-transform-move-right: -#{ms(8)}em;
\$animation-transform-move-up: #{ms(8)}em;
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.animation.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////
// THEME / VARIABLES / ANIMATION
////////////////////////////////


// Delay
\$animation-delay-fade-in: 0;
\$animation-delay-move-left: 500ms;
\$animation-delay-move-right: 500ms;
\$animation-delay-move-up: 500ms;


// Duration
\$animation-duration-fade-in: 500ms;
\$animation-duration-move-left: 250ms;
\$animation-duration-move-right: 250ms;
\$animation-duration-move-up: 250ms;


// Timing Function (Easing)
\$animation-timing-fn-fade-in: cubic-bezier(.25, .46, .45, .94);
\$animation-timing-fn-move-left: cubic-bezier(.25, .46, .45, .94);
\$animation-timing-fn-move-right: cubic-bezier(.25, .46, .45, .94);
\$animation-timing-fn-move-up: cubic-bezier(.25, .46, .45, .94);


// Transforms
\$animation-transform-move-left: #{ms(8)}em;
\$animation-transform-move-right: -#{ms(8)}em;
\$animation-transform-move-up: #{ms(8)}em;
", "wdn/templates_5.3/scss/variables/_variables.animation.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.animation.scss");
    }
}
