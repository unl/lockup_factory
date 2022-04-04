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

/* wdn/templates_5.3/scss/mixins/_mixins.background-images.scss */
class __TwigTemplate_96318e311a2c191c6766f9853479df94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.background-images.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.background-images.scss"));

        // line 1
        echo "/////////////////////////////////////
// THEME / MIXINS / BACKGROUND IMAGES
/////////////////////////////////////


// Dots
@mixin bg-dots(\$imp:null) {
  background-size: #{ms(-4)}rem \$imp; // .56rem
}


@mixin bg-dots-gray(\$imp:null) {
  background-image: url('../images/bg-dots-gray.svg') \$imp;
}


@mixin bg-dots-scarlet(\$imp:null) {
  background-image: url('../images/bg-dots-scarlet.svg') \$imp;
}


// Grit
@mixin bg-grit(\$imp:null) {
  // Don't use background shorthand. Allow grit to be applied over any background-color.
  background-image: url('../images/bg-grit.png') \$imp;
  background-position: 50% 50% \$imp;
  background-repeat: repeat \$imp;
  background-size: 80px \$imp;

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min-resolution: 192dpi),
  only screen and (min-resolution: 2dppx) {
  \tbackground-image: url('../images/bg-grit_2x.png') \$imp;
  }

}


// Diagonal Stripes: Scarlet
@mixin bg-stripes-scarlet(\$imp:null) {
  background-image: repeating-linear-gradient(\$diagonal1, \$scarlet, \$scarlet 2px, transparent 2px, transparent 4px) \$imp;
}


// Diagonal Stripes: Dark
@mixin bg-stripes-dark(\$imp:null) {
//   background-image: url('../images/diagonal-stripe-bg.svg');
//   background-repeat: repeat;
//   background-image: repeating-linear-gradient(\$diagonal1, rgba(\$color-body,.1), rgba(\$color-body,.1) 2px, transparent 2px, transparent 4px);
  background-image: repeating-linear-gradient(\$diagonal1, fade-out(\$color-body-light-mode,.9), fade-out(\$color-body-light-mode,.9) 2px, fade-out(\$color-body-light-mode,1) 2px, fade-out(\$color-body-light-mode,1) 5px) \$imp;
}


// Diagonal Stripes: Light
@mixin bg-stripes-light(\$imp:null) {
  background-image: repeating-linear-gradient(\$diagonal1, fade-out(\$white,.95), fade-out(\$white,.95) 2px, fade-out(\$white,1) 2px, fade-out(\$white,1) 5px) \$imp;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/mixins/_mixins.background-images.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/////////////////////////////////////
// THEME / MIXINS / BACKGROUND IMAGES
/////////////////////////////////////


// Dots
@mixin bg-dots(\$imp:null) {
  background-size: #{ms(-4)}rem \$imp; // .56rem
}


@mixin bg-dots-gray(\$imp:null) {
  background-image: url('../images/bg-dots-gray.svg') \$imp;
}


@mixin bg-dots-scarlet(\$imp:null) {
  background-image: url('../images/bg-dots-scarlet.svg') \$imp;
}


// Grit
@mixin bg-grit(\$imp:null) {
  // Don't use background shorthand. Allow grit to be applied over any background-color.
  background-image: url('../images/bg-grit.png') \$imp;
  background-position: 50% 50% \$imp;
  background-repeat: repeat \$imp;
  background-size: 80px \$imp;

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min-resolution: 192dpi),
  only screen and (min-resolution: 2dppx) {
  \tbackground-image: url('../images/bg-grit_2x.png') \$imp;
  }

}


// Diagonal Stripes: Scarlet
@mixin bg-stripes-scarlet(\$imp:null) {
  background-image: repeating-linear-gradient(\$diagonal1, \$scarlet, \$scarlet 2px, transparent 2px, transparent 4px) \$imp;
}


// Diagonal Stripes: Dark
@mixin bg-stripes-dark(\$imp:null) {
//   background-image: url('../images/diagonal-stripe-bg.svg');
//   background-repeat: repeat;
//   background-image: repeating-linear-gradient(\$diagonal1, rgba(\$color-body,.1), rgba(\$color-body,.1) 2px, transparent 2px, transparent 4px);
  background-image: repeating-linear-gradient(\$diagonal1, fade-out(\$color-body-light-mode,.9), fade-out(\$color-body-light-mode,.9) 2px, fade-out(\$color-body-light-mode,1) 2px, fade-out(\$color-body-light-mode,1) 5px) \$imp;
}


// Diagonal Stripes: Light
@mixin bg-stripes-light(\$imp:null) {
  background-image: repeating-linear-gradient(\$diagonal1, fade-out(\$white,.95), fade-out(\$white,.95) 2px, fade-out(\$white,1) 2px, fade-out(\$white,1) 5px) \$imp;
}
", "wdn/templates_5.3/scss/mixins/_mixins.background-images.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/mixins/_mixins.background-images.scss");
    }
}
