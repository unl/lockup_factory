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

/* wdn/templates_5.3/scss/utilities/_utilities.typography.scss */
class __TwigTemplate_9fd62315b688d46c1ef271849316c8d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.typography.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/utilities/_utilities.typography.scss"));

        // line 1
        echo "/////////////////////////////////
// THEME / UTILITIES / TYPOGRAPHY
/////////////////////////////////


// Font-Size
.unl .dcf-txt-base { @include txt-base(!important); }
.unl .dcf-txt-3xs { @include txt-3xs(!important); }
.unl .dcf-txt-2xs { @include txt-2xs(!important); }
.unl .dcf-txt-xs { @include txt-xs(!important); }
.unl .dcf-txt-sm { @include txt-sm(!important); }
.unl .dcf-txt-md { @include txt-md(!important); }
.unl .dcf-txt-lg { @include txt-lg(!important); }
.unl .dcf-txt-h6 { @include txt-h6(!important); }
.unl .dcf-txt-h5 { @include txt-h5(!important); }
.unl .dcf-txt-h4 { @include txt-h4(!important); }
.unl .dcf-txt-h3 { @include txt-h3(!important); }
.unl .dcf-txt-h2 { @include txt-h2(!important); }
.unl .dcf-txt-h1 { @include txt-h1(!important); }
.unl .dcf-txt-xl { @include txt-xl(!important); }
.unl .dcf-txt-2xl { @include txt-2xl(!important); }
.unl .dcf-txt-3xl { @include txt-3xl(!important); }
.unl .dcf-txt-4xl { @include txt-4xl(!important); }
.unl .dcf-txt-5xl { @include txt-5xl(!important); }
.unl .dcf-txt-6xl { @include txt-6xl(!important); }


// Letter Spacing
.unl-ls-0 { @include ls-0(!important); }
.unl-ls-1 { @include ls-1(!important); }
.unl-ls-2 { @include ls-2(!important); }
.unl-ls-3 { @include ls-3(!important); }
.unl-ls-h { @include ls-h(!important); }


// Line-Height Crop
// Crop to vertically align headings adjacent to photos (e.g. media object layout)
.unl-lh-crop::before { @include lh-crop(!important); }


// Outline Text: Light
.unl-txt-outline-light { @include txt-outline-light(!important); }


// Outline Text: Dark
.unl-txt-outline-dark { @include txt-outline-dark(!important); }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/utilities/_utilities.typography.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////
// THEME / UTILITIES / TYPOGRAPHY
/////////////////////////////////


// Font-Size
.unl .dcf-txt-base { @include txt-base(!important); }
.unl .dcf-txt-3xs { @include txt-3xs(!important); }
.unl .dcf-txt-2xs { @include txt-2xs(!important); }
.unl .dcf-txt-xs { @include txt-xs(!important); }
.unl .dcf-txt-sm { @include txt-sm(!important); }
.unl .dcf-txt-md { @include txt-md(!important); }
.unl .dcf-txt-lg { @include txt-lg(!important); }
.unl .dcf-txt-h6 { @include txt-h6(!important); }
.unl .dcf-txt-h5 { @include txt-h5(!important); }
.unl .dcf-txt-h4 { @include txt-h4(!important); }
.unl .dcf-txt-h3 { @include txt-h3(!important); }
.unl .dcf-txt-h2 { @include txt-h2(!important); }
.unl .dcf-txt-h1 { @include txt-h1(!important); }
.unl .dcf-txt-xl { @include txt-xl(!important); }
.unl .dcf-txt-2xl { @include txt-2xl(!important); }
.unl .dcf-txt-3xl { @include txt-3xl(!important); }
.unl .dcf-txt-4xl { @include txt-4xl(!important); }
.unl .dcf-txt-5xl { @include txt-5xl(!important); }
.unl .dcf-txt-6xl { @include txt-6xl(!important); }


// Letter Spacing
.unl-ls-0 { @include ls-0(!important); }
.unl-ls-1 { @include ls-1(!important); }
.unl-ls-2 { @include ls-2(!important); }
.unl-ls-3 { @include ls-3(!important); }
.unl-ls-h { @include ls-h(!important); }


// Line-Height Crop
// Crop to vertically align headings adjacent to photos (e.g. media object layout)
.unl-lh-crop::before { @include lh-crop(!important); }


// Outline Text: Light
.unl-txt-outline-light { @include txt-outline-light(!important); }


// Outline Text: Dark
.unl-txt-outline-dark { @include txt-outline-dark(!important); }
", "wdn/templates_5.3/scss/utilities/_utilities.typography.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/utilities/_utilities.typography.scss");
    }
}
