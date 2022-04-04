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

/* wdn/templates_5.3/scss/components/_components.global.scss */
class __TwigTemplate_04b0436f2273dd99affce947128be6f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.global.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.global.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / COMPONENTS / GLOBAL
//////////////////////////////


.unl-institution-title-ls {
  letter-spacing: #{ms(-8)}em; // custom letter-spacing for space after italicized 'of' in institution title
}


.unl .dcf-main-content > :last-child:not(.dcf-bleed) {
  // Provide adequate default vertical spacing between main content and footer.
  // Use the .dcf-mb-0 utility class as needed to remove this margin and place
  // content adjacent to the footer.
  @include mb-8;
}


.unl-frame-quad {
  clip-path: polygon(0 0,0 100%,2px 100%,2px 2px,calc(100% - 2px) 2px,calc(100% - 2px) calc(100% - 2px),2px calc(100% - 2px),2px calc(100% - 5px),calc(100% - 5px) calc(100% - 5px),calc(100% - 5px) 5px,5px 5px,5px calc(100% - 5px),2px calc(100% - 5px),2px 100%,100% 100%,100% 0);
}


// TODO: replace with clip-path method?
.unl-frame-circle {
  position: relative;
}

.unl-frame-circle::after {
  border: 3px solid \$bg-color-body; // Match body background-color
  border-radius: \$circle;
  content: '';
  height: calc(100% - 4px);
  left: 2px;
  position: absolute;
  top: 2px;
  width: calc(100% - 4px);
}

.unl-frame-circle > img {
  display: block;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.global.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / COMPONENTS / GLOBAL
//////////////////////////////


.unl-institution-title-ls {
  letter-spacing: #{ms(-8)}em; // custom letter-spacing for space after italicized 'of' in institution title
}


.unl .dcf-main-content > :last-child:not(.dcf-bleed) {
  // Provide adequate default vertical spacing between main content and footer.
  // Use the .dcf-mb-0 utility class as needed to remove this margin and place
  // content adjacent to the footer.
  @include mb-8;
}


.unl-frame-quad {
  clip-path: polygon(0 0,0 100%,2px 100%,2px 2px,calc(100% - 2px) 2px,calc(100% - 2px) calc(100% - 2px),2px calc(100% - 2px),2px calc(100% - 5px),calc(100% - 5px) calc(100% - 5px),calc(100% - 5px) 5px,5px 5px,5px calc(100% - 5px),2px calc(100% - 5px),2px 100%,100% 100%,100% 0);
}


// TODO: replace with clip-path method?
.unl-frame-circle {
  position: relative;
}

.unl-frame-circle::after {
  border: 3px solid \$bg-color-body; // Match body background-color
  border-radius: \$circle;
  content: '';
  height: calc(100% - 4px);
  left: 2px;
  position: absolute;
  top: 2px;
  width: calc(100% - 4px);
}

.unl-frame-circle > img {
  display: block;
}
", "wdn/templates_5.3/scss/components/_components.global.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.global.scss");
    }
}
