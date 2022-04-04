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

/* wdn/templates_5.3/scss/variables/_variables.sup-sub.scss */
class __TwigTemplate_340b64187edb0a4681282ff5ef31faac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.sup-sub.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.sup-sub.scss"));

        // line 1
        echo "////////////////////////////////
// THEME / VARIABLES / SUP & SUB
////////////////////////////////


@import '_variables.modular-scale';


// Bottom
\$bottom-sub: -#{ms(-4)}ex;          // Subscript bottom position based on x-height: -.56ex
\$bottom-sup: #{ms(2)}ex;            // Superscript bottom position based on x-height: 1.33ex


// Font size
\$font-size-sub-sup: #{ms(-3)}em;    // Subscript & superscript font-size: .63em;


// Vertical alignment
\$vertical-align-sub-sup: baseline;  // Subscript & superscript vertical-align
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.sup-sub.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////
// THEME / VARIABLES / SUP & SUB
////////////////////////////////


@import '_variables.modular-scale';


// Bottom
\$bottom-sub: -#{ms(-4)}ex;          // Subscript bottom position based on x-height: -.56ex
\$bottom-sup: #{ms(2)}ex;            // Superscript bottom position based on x-height: 1.33ex


// Font size
\$font-size-sub-sup: #{ms(-3)}em;    // Subscript & superscript font-size: .63em;


// Vertical alignment
\$vertical-align-sub-sup: baseline;  // Subscript & superscript vertical-align
", "wdn/templates_5.3/scss/variables/_variables.sup-sub.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.sup-sub.scss");
    }
}
