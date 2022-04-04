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

/* wdn/templates_5.3/scss/main.scss */
class __TwigTemplate_490cf2ee630b0f21e7c9ee0f02ec8cda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/main.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/main.scss"));

        // line 1
        echo "///////
// MAIN
///////


// Variables
@import '../../../node_modules/dcf/scss/variables/**/*';
@import 'variables/**/*';


// Mixins
@import '../../../node_modules/dcf/scss/mixins/**/*';
@import 'mixins/**/*';


// Functions
@import '../../../node_modules/dcf/scss/functions/**/*';


// Generic
@import-normalize;
@import '../../../node_modules/dcf/scss/generic/**/*';
@import 'generic/**/*';


// Elements
@import '../../../node_modules/dcf/scss/elements/**/*';
@import 'elements/**/*';


// Objects
@import '../../../node_modules/dcf/scss/objects/**/*';
@import 'objects/**/*';


// Components
@import '../../../node_modules/dcf/scss/components/**/*';
@import 'components/**/*';


// JavaScript
@import '../../../node_modules/dcf/scss/javascript/**/*';


// Utilities
@import '../../../node_modules/dcf/scss/utilities/**/*';
@import 'utilities/**/*';
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/main.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////
// MAIN
///////


// Variables
@import '../../../node_modules/dcf/scss/variables/**/*';
@import 'variables/**/*';


// Mixins
@import '../../../node_modules/dcf/scss/mixins/**/*';
@import 'mixins/**/*';


// Functions
@import '../../../node_modules/dcf/scss/functions/**/*';


// Generic
@import-normalize;
@import '../../../node_modules/dcf/scss/generic/**/*';
@import 'generic/**/*';


// Elements
@import '../../../node_modules/dcf/scss/elements/**/*';
@import 'elements/**/*';


// Objects
@import '../../../node_modules/dcf/scss/objects/**/*';
@import 'objects/**/*';


// Components
@import '../../../node_modules/dcf/scss/components/**/*';
@import 'components/**/*';


// JavaScript
@import '../../../node_modules/dcf/scss/javascript/**/*';


// Utilities
@import '../../../node_modules/dcf/scss/utilities/**/*';
@import 'utilities/**/*';
", "wdn/templates_5.3/scss/main.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/main.scss");
    }
}
