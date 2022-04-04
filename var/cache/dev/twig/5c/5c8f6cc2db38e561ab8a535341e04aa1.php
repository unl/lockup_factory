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

/* wdn/templates_5.3/scss/mixins/_mixins.typography.scss */
class __TwigTemplate_c5ced301592975b8f381bfa243bdd9b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.typography.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/mixins/_mixins.typography.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / MIXINS / TYPOGRAPHY
//////////////////////////////


// Font-Size
@mixin txt-base(\$imp:null) { font-size: #{ms(0)}rem \$imp; }
@mixin txt-3xs(\$imp:null) { font-size: #{ms(-4)}em \$imp; }
@mixin txt-2xs(\$imp:null) { font-size: #{ms(-3)}em \$imp; }
@mixin txt-xs(\$imp:null) { font-size: #{ms(-2)}em \$imp; }
@mixin txt-sm(\$imp:null) { font-size: #{ms(-1)}em \$imp; }
@mixin txt-md(\$imp:null) { font-size: #{ms(0)}em \$imp; }
@mixin txt-lg(\$imp:null) { font-size: #{ms(1)}em \$imp; }

@mixin txt-h6(\$imp:null) {
  font-size: #{ms(0)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(1)}em \$imp;
  }

}

@mixin txt-h5(\$imp:null) {
  font-size: #{ms(1)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(2)}em \$imp;
  }

}

@mixin txt-h4(\$imp:null) {
  font-size: #{ms(2)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(3)}em \$imp;
  }

}

@mixin txt-h3(\$imp:null) {
  font-size: #{ms(3)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(4)}em \$imp;
  }

}

@mixin txt-h2(\$imp:null) {
  font-size: #{ms(4)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(5)}em \$imp;
  }

}

@mixin txt-h1(\$imp:null) {
  font-size: #{ms(5)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(6)}em \$imp;
  }

}

@mixin txt-xl(\$imp:null) {
  font-size: #{ms(6)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(7)}em \$imp;
  }

}

@mixin txt-2xl(\$imp:null) {
  font-size: #{ms(7)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(8)}em \$imp;
  }

}


@mixin txt-3xl(\$imp:null) {
  font-size: #{ms(8)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(9)}em \$imp;
  }

}

@mixin txt-4xl(\$imp:null) {
  font-size: #{ms(9)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(10)}em \$imp;
  }

}

@mixin txt-5xl(\$imp:null) {
  font-size: #{ms(10)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(11)}em \$imp;
  }

}

@mixin txt-6xl(\$imp:null) {
  font-size: #{ms(11)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(12)}em \$imp;
  }

}


// Letter Spacing
@mixin ls-0(\$imp:null) { letter-spacing: 0 \$imp; }
@mixin ls-1(\$imp:null) { letter-spacing: #{ms(-30)}em \$imp; }
@mixin ls-2(\$imp:null) { letter-spacing: #{ms(-20)}em \$imp; }
@mixin ls-3(\$imp:null) { letter-spacing: #{ms(-16)}em \$imp; }
@mixin ls-h(\$imp:null) {
  letter-spacing: -#{ms(-24)}em \$imp;
  margin-left: -#{ms(-24)}em \$imp;
}


// Line-Height Crop
// Crop headings to vertically align with the top of adjacent objects
// (e.g. photo in a media object layout)
@mixin lh-crop(\$imp:null) {
  content: '';
  display: block;
  height: 0;
  margin-top: -#{ms(-12)}em; // TODO: use calc() and line-height to calculate value
  // https://medium.com/codyhouse/line-height-crop-a-simple-css-formula-to-remove-top-space-from-your-text-9c3de06d7c6f
  width: 0;
}


// Outline Text: Light
@mixin txt-outline-light(\$imp:null) {

  @supports (text-stroke: 1px \$cream) or (-webkit-text-stroke: 1px \$cream) {
    color: transparent \$imp;
    -webkit-text-stroke: #{ms(-26)}em \$cream \$imp;
    text-stroke: #{ms(-26)}em \$cream \$imp;
  }

}


// Outline Text: Dark
@mixin txt-outline-dark(\$imp:null) {

  @supports (text-stroke: 1px var(--heading)) or (-webkit-text-stroke: 1px var(--heading)) {
    color: transparent \$imp;
    -webkit-text-stroke: #{ms(-26)}em var(--heading) \$imp;
    text-stroke: #{ms(-26)}em var(--heading) \$imp;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/mixins/_mixins.typography.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / MIXINS / TYPOGRAPHY
//////////////////////////////


// Font-Size
@mixin txt-base(\$imp:null) { font-size: #{ms(0)}rem \$imp; }
@mixin txt-3xs(\$imp:null) { font-size: #{ms(-4)}em \$imp; }
@mixin txt-2xs(\$imp:null) { font-size: #{ms(-3)}em \$imp; }
@mixin txt-xs(\$imp:null) { font-size: #{ms(-2)}em \$imp; }
@mixin txt-sm(\$imp:null) { font-size: #{ms(-1)}em \$imp; }
@mixin txt-md(\$imp:null) { font-size: #{ms(0)}em \$imp; }
@mixin txt-lg(\$imp:null) { font-size: #{ms(1)}em \$imp; }

@mixin txt-h6(\$imp:null) {
  font-size: #{ms(0)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(1)}em \$imp;
  }

}

@mixin txt-h5(\$imp:null) {
  font-size: #{ms(1)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(2)}em \$imp;
  }

}

@mixin txt-h4(\$imp:null) {
  font-size: #{ms(2)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(3)}em \$imp;
  }

}

@mixin txt-h3(\$imp:null) {
  font-size: #{ms(3)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(4)}em \$imp;
  }

}

@mixin txt-h2(\$imp:null) {
  font-size: #{ms(4)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(5)}em \$imp;
  }

}

@mixin txt-h1(\$imp:null) {
  font-size: #{ms(5)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(6)}em \$imp;
  }

}

@mixin txt-xl(\$imp:null) {
  font-size: #{ms(6)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(7)}em \$imp;
  }

}

@mixin txt-2xl(\$imp:null) {
  font-size: #{ms(7)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(8)}em \$imp;
  }

}


@mixin txt-3xl(\$imp:null) {
  font-size: #{ms(8)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(9)}em \$imp;
  }

}

@mixin txt-4xl(\$imp:null) {
  font-size: #{ms(9)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(10)}em \$imp;
  }

}

@mixin txt-5xl(\$imp:null) {
  font-size: #{ms(10)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(11)}em \$imp;
  }

}

@mixin txt-6xl(\$imp:null) {
  font-size: #{ms(11)}em \$imp;

  @include mq(md, min, width) {
    font-size: #{ms(12)}em \$imp;
  }

}


// Letter Spacing
@mixin ls-0(\$imp:null) { letter-spacing: 0 \$imp; }
@mixin ls-1(\$imp:null) { letter-spacing: #{ms(-30)}em \$imp; }
@mixin ls-2(\$imp:null) { letter-spacing: #{ms(-20)}em \$imp; }
@mixin ls-3(\$imp:null) { letter-spacing: #{ms(-16)}em \$imp; }
@mixin ls-h(\$imp:null) {
  letter-spacing: -#{ms(-24)}em \$imp;
  margin-left: -#{ms(-24)}em \$imp;
}


// Line-Height Crop
// Crop headings to vertically align with the top of adjacent objects
// (e.g. photo in a media object layout)
@mixin lh-crop(\$imp:null) {
  content: '';
  display: block;
  height: 0;
  margin-top: -#{ms(-12)}em; // TODO: use calc() and line-height to calculate value
  // https://medium.com/codyhouse/line-height-crop-a-simple-css-formula-to-remove-top-space-from-your-text-9c3de06d7c6f
  width: 0;
}


// Outline Text: Light
@mixin txt-outline-light(\$imp:null) {

  @supports (text-stroke: 1px \$cream) or (-webkit-text-stroke: 1px \$cream) {
    color: transparent \$imp;
    -webkit-text-stroke: #{ms(-26)}em \$cream \$imp;
    text-stroke: #{ms(-26)}em \$cream \$imp;
  }

}


// Outline Text: Dark
@mixin txt-outline-dark(\$imp:null) {

  @supports (text-stroke: 1px var(--heading)) or (-webkit-text-stroke: 1px var(--heading)) {
    color: transparent \$imp;
    -webkit-text-stroke: #{ms(-26)}em var(--heading) \$imp;
    text-stroke: #{ms(-26)}em var(--heading) \$imp;
  }

}
", "wdn/templates_5.3/scss/mixins/_mixins.typography.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/mixins/_mixins.typography.scss");
    }
}
