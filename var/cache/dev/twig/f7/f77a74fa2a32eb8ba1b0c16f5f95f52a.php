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

/* wdn/templates_5.3/scss/deprecated/deprecated.infographics.scss */
class __TwigTemplate_04fed0852c0fec8f35a4413e4d07731c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.infographics.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/deprecated/deprecated.infographics.scss"));

        // line 1
        echo ".wdn-infographic {
  display: flex;
  flex-flow: column wrap;
  text-align: center;
}

.wdn-infographic .stat,
.wdn-infographic .stat-helper {
  display: block;
  line-height: 1;
}

.wdn-infographic .stat {
  @include txt-h3;
  font-weight: 700;
  letter-spacing: -.03em;
  margin-bottom: #{ms(-12)}em;
  margin-left: -.03em;
}

.wdn-infographic .stat-helper {
  @include txt-xs;
  @include lh-3;
}

.wdn-infographic .wdn-info-icon {
  background-position: center bottom;
  background-repeat: no-repeat;
  @include mb-1;
  min-height: 142px;
  min-width: 180px;
}


[class*=\"wdn-infographic-rate\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/rate.svg');
}

[class*=\"wdn-infographic-globe\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/globe.svg');
}

[class*=\"wdn-infographic-world\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/world.svg');
}

[class*=\"wdn-infographic-people\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/people.svg');
}

[class*=\"wdn-infographic-star\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/star.svg');
}

[class*=\"wdn-infographic-internships\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/internships.svg');
}

[class*=\"wdn-infographic-ratio\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/ratio.svg');
}

[class*=\"wdn-infographic-countries\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/countries.svg');
}

[class*=\"wdn-infographic-international\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/international.svg');
}

[class*=\"wdn-infographic-dollar\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/dollar.svg');
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/deprecated/deprecated.infographics.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wdn-infographic {
  display: flex;
  flex-flow: column wrap;
  text-align: center;
}

.wdn-infographic .stat,
.wdn-infographic .stat-helper {
  display: block;
  line-height: 1;
}

.wdn-infographic .stat {
  @include txt-h3;
  font-weight: 700;
  letter-spacing: -.03em;
  margin-bottom: #{ms(-12)}em;
  margin-left: -.03em;
}

.wdn-infographic .stat-helper {
  @include txt-xs;
  @include lh-3;
}

.wdn-infographic .wdn-info-icon {
  background-position: center bottom;
  background-repeat: no-repeat;
  @include mb-1;
  min-height: 142px;
  min-width: 180px;
}


[class*=\"wdn-infographic-rate\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/rate.svg');
}

[class*=\"wdn-infographic-globe\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/globe.svg');
}

[class*=\"wdn-infographic-world\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/world.svg');
}

[class*=\"wdn-infographic-people\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/people.svg');
}

[class*=\"wdn-infographic-star\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/star.svg');
}

[class*=\"wdn-infographic-internships\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/internships.svg');
}

[class*=\"wdn-infographic-ratio\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/ratio.svg');
}

[class*=\"wdn-infographic-countries\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/countries.svg');
}

[class*=\"wdn-infographic-international\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/international.svg');
}

[class*=\"wdn-infographic-dollar\"] .wdn-info-icon {
  background-image: url('../images/deprecated/infographics/dollar.svg');
}
", "wdn/templates_5.3/scss/deprecated/deprecated.infographics.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/deprecated/deprecated.infographics.scss");
    }
}
