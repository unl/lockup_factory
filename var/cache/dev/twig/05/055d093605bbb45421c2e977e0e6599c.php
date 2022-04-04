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

/* wdn/templates_5.3/fonts/liberator/generator_config.txt */
class __TwigTemplate_b3d4becb72cb9c3f65987feda7e9f6f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/fonts/liberator/generator_config.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/fonts/liberator/generator_config.txt"));

        // line 1
        echo "# Font Squirrel Font-face Generator Configuration File
# Upload this file to the generator to recreate the settings
# you used to create these fonts.

{\"mode\":\"optimal\",\"formats\":[\"woff\",\"woff2\"],\"tt_instructor\":\"default\",\"fix_gasp\":\"xy\",\"fix_vertical_metrics\":\"Y\",\"metrics_ascent\":\"\",\"metrics_descent\":\"\",\"metrics_linegap\":\"\",\"add_spaces\":\"Y\",\"add_hyphens\":\"Y\",\"fallback\":\"none\",\"fallback_custom\":\"100\",\"options_subset\":\"advanced\",\"subset_custom\":\"\",\"subset_custom_range\":\"\",\"subset_ot_features_list\":\"\",\"css_stylesheet\":\"stylesheet.css\",\"filename_suffix\":\"-webfont\",\"emsquare\":\"2048\",\"spacing_adjustment\":\"0\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/fonts/liberator/generator_config.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Font Squirrel Font-face Generator Configuration File
# Upload this file to the generator to recreate the settings
# you used to create these fonts.

{\"mode\":\"optimal\",\"formats\":[\"woff\",\"woff2\"],\"tt_instructor\":\"default\",\"fix_gasp\":\"xy\",\"fix_vertical_metrics\":\"Y\",\"metrics_ascent\":\"\",\"metrics_descent\":\"\",\"metrics_linegap\":\"\",\"add_spaces\":\"Y\",\"add_hyphens\":\"Y\",\"fallback\":\"none\",\"fallback_custom\":\"100\",\"options_subset\":\"advanced\",\"subset_custom\":\"\",\"subset_custom_range\":\"\",\"subset_ot_features_list\":\"\",\"css_stylesheet\":\"stylesheet.css\",\"filename_suffix\":\"-webfont\",\"emsquare\":\"2048\",\"spacing_adjustment\":\"0\"}", "wdn/templates_5.3/fonts/liberator/generator_config.txt", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/fonts/liberator/generator_config.txt");
    }
}
