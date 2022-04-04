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

/* wdn/templates_5.3/scss/variables/_variables.modals.scss */
class __TwigTemplate_edf5d5d51dbfcf434e560968e5475bb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.modals.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.modals.scss"));

        // line 1
        echo "/////////////////////////////
// THEME / VARIABLES / MODALS
/////////////////////////////


@import '_variables.body';


// Background color
\$bg-color-modal-wrapper-light-mode: \$bg-color-body-light-mode;  // Modal wrapper background-color in light mode
\$bg-color-modal-wrapper-dark-mode: \$bg-color-body-dark-mode;    // Modal wrapper background-color in dark mode
\$bg-color-modal-wrapper: var(--bg-body);

\$bg-color-modal-header-light-mode: \$bg-color-body-light-mode;   // Modal header background-color in light mode
\$bg-color-modal-header-dark-mode: \$bg-color-body-dark-mode;     // Modal header background-color in dark mode
\$bg-color-modal-header: var(--bg-body);


// Height & width
\$height-max-modal-wrapper: 75vh;                                // Max-height modal wrapper
\$width-modal-wrapper: calc(100% - (2 * #{ms(12)}vw));           // Match width of .dcf-wrapper
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.modals.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////
// THEME / VARIABLES / MODALS
/////////////////////////////


@import '_variables.body';


// Background color
\$bg-color-modal-wrapper-light-mode: \$bg-color-body-light-mode;  // Modal wrapper background-color in light mode
\$bg-color-modal-wrapper-dark-mode: \$bg-color-body-dark-mode;    // Modal wrapper background-color in dark mode
\$bg-color-modal-wrapper: var(--bg-body);

\$bg-color-modal-header-light-mode: \$bg-color-body-light-mode;   // Modal header background-color in light mode
\$bg-color-modal-header-dark-mode: \$bg-color-body-dark-mode;     // Modal header background-color in dark mode
\$bg-color-modal-header: var(--bg-body);


// Height & width
\$height-max-modal-wrapper: 75vh;                                // Max-height modal wrapper
\$width-modal-wrapper: calc(100% - (2 * #{ms(12)}vw));           // Match width of .dcf-wrapper
", "wdn/templates_5.3/scss/variables/_variables.modals.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.modals.scss");
    }
}
