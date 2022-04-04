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

/* wdn/templates_5.3/js/compressed/bg-videos.js */
class __TwigTemplate_2797b0a0ec43a6a7a56a4c8e35ed2c24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/bg-videos.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/bg-videos.js"));

        // line 1
        echo "require([\"dcf-bgVideoToggle\"],function(e){var c=new e.DCFBgVideoToggleTheme;c.setThemeVariable(\"toggleBtnClassList\",[\"dcf-btn-bg-video-toggle\",\"dcf-btn\",\"dcf-btn-primary\",\"dcf-z-1\",\"dcf-absolute\",\"dcf-pin-bottom\",\"dcf-pin-right\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-mb-3\",\"dcf-mr-3\",\"dcf-h-7\",\"dcf-w-7\",\"dcf-p-0\",\"dcf-circle\"]),c.setThemeVariable(\"togglePlayBtnInnerHTML\",'<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498 0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z\"></path></svg>'),c.setThemeVariable(\"togglePauseBtnInnerHTML\",'<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5 0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z\"></path></svg>'),new e.DCFBgVideoToggle(c).initialize()});
//# sourceMappingURL=bg-videos.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/bg-videos.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("require([\"dcf-bgVideoToggle\"],function(e){var c=new e.DCFBgVideoToggleTheme;c.setThemeVariable(\"toggleBtnClassList\",[\"dcf-btn-bg-video-toggle\",\"dcf-btn\",\"dcf-btn-primary\",\"dcf-z-1\",\"dcf-absolute\",\"dcf-pin-bottom\",\"dcf-pin-right\",\"dcf-d-flex\",\"dcf-ai-center\",\"dcf-jc-center\",\"dcf-mb-3\",\"dcf-mr-3\",\"dcf-h-7\",\"dcf-w-7\",\"dcf-p-0\",\"dcf-circle\"]),c.setThemeVariable(\"togglePlayBtnInnerHTML\",'<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498 0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z\"></path></svg>'),c.setThemeVariable(\"togglePauseBtnInnerHTML\",'<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\"><path d=\"M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5 0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z\"></path></svg>'),new e.DCFBgVideoToggle(c).initialize()});
//# sourceMappingURL=bg-videos.js.map", "wdn/templates_5.3/js/compressed/bg-videos.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/bg-videos.js");
    }
}
