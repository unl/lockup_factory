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

/* wdn/templates_5.3/fonts/fontello/readme.md */
class __TwigTemplate_7c166af2bba4d89cdf927e248eda017c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/fonts/fontello/readme.md"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/fonts/fontello/readme.md"));

        // line 1
        echo "Font icons from [Fontello](http://fontello.com/).

## Modifying font stack
To add/remove/change icons to the font:
1. Upload the `config.json` to [Fontello](http://fontello.com/).
2. Use web app to modify selected fonts.
3. Download new webfont package. 
4. Replace `config.json` in this directory with updated version from download.
5. Update /wdn/templates_4.1/less/base/text.less with new CSS class rules and embedded font data.
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/fonts/fontello/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Font icons from [Fontello](http://fontello.com/).

## Modifying font stack
To add/remove/change icons to the font:
1. Upload the `config.json` to [Fontello](http://fontello.com/).
2. Use web app to modify selected fonts.
3. Download new webfont package. 
4. Replace `config.json` in this directory with updated version from download.
5. Update /wdn/templates_4.1/less/base/text.less with new CSS class rules and embedded font data.
", "wdn/templates_5.3/fonts/fontello/readme.md", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/fonts/fontello/readme.md");
    }
}
