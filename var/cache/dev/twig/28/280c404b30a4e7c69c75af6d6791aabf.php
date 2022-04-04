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

/* wdn/templates_5.3/scss/components/_components.footer.scss */
class __TwigTemplate_2aea8a04c9b39c7df7742ba3f564870a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.footer.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.footer.scss"));

        // line 1
        echo "//////////////////////////////
// THEME / COMPONENTS / FOOTER
//////////////////////////////


.unl .dcf-footer {
  color: \$light-gray;
  background-color: \$darker-gray;
}


.unl-footer-stripe::before {
  background-image: linear-gradient(to top, fade-out(\$darker-gray,1) 3px, \$darker-gray 3px, \$darker-gray 5px, fade-out(\$darker-gray,1) 5px);
  content: '';
  height: 5px;
  position: absolute;
  top: -5px;
  width: 100%;
}


.unl .dcf-footer h2 {
  @include cream;
  @include txt-md;
  @include ls-2;
  @include lh-3;
  text-transform: uppercase;
}


// Footer lists
.unl .dcf-footer dl,
.unl .dcf-footer ol,
.unl .dcf-footer ul {
  // Fix list-style: none in VoiceOver and Safari: https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  margin-bottom: 0;
  padding-left: 0;
}


.unl .dcf-footer li {
  @include mb-0;
}


.unl .dcf-footer li a {
  display: inline-block;
  @include pb-1;
  @include pt-1;
}


// Footer links
// TODO: determine focus state styles
.unl .dcf-footer a,
.unl .dcf-footer a:link {
  color: \$lighter-gray;
}


.unl .dcf-footer a:visited,
.unl .dcf-footer a:hover,
.unl .dcf-footer a:active {
  color: \$cream;
}


.unl-footer-groups dd a:not(:hover),
.unl-footer-groups li a:not(:hover) {
  text-decoration: none;
}


@include mq(sm, max, width) {

  .unl-footer-unl {
    margin-bottom: #{ms(-8)}em;
  }

}


@include mq(sm, min, width) {

  .unl-footer-logos {
    justify-content: flex-end;
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.footer.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//////////////////////////////
// THEME / COMPONENTS / FOOTER
//////////////////////////////


.unl .dcf-footer {
  color: \$light-gray;
  background-color: \$darker-gray;
}


.unl-footer-stripe::before {
  background-image: linear-gradient(to top, fade-out(\$darker-gray,1) 3px, \$darker-gray 3px, \$darker-gray 5px, fade-out(\$darker-gray,1) 5px);
  content: '';
  height: 5px;
  position: absolute;
  top: -5px;
  width: 100%;
}


.unl .dcf-footer h2 {
  @include cream;
  @include txt-md;
  @include ls-2;
  @include lh-3;
  text-transform: uppercase;
}


// Footer lists
.unl .dcf-footer dl,
.unl .dcf-footer ol,
.unl .dcf-footer ul {
  // Fix list-style: none in VoiceOver and Safari: https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  margin-bottom: 0;
  padding-left: 0;
}


.unl .dcf-footer li {
  @include mb-0;
}


.unl .dcf-footer li a {
  display: inline-block;
  @include pb-1;
  @include pt-1;
}


// Footer links
// TODO: determine focus state styles
.unl .dcf-footer a,
.unl .dcf-footer a:link {
  color: \$lighter-gray;
}


.unl .dcf-footer a:visited,
.unl .dcf-footer a:hover,
.unl .dcf-footer a:active {
  color: \$cream;
}


.unl-footer-groups dd a:not(:hover),
.unl-footer-groups li a:not(:hover) {
  text-decoration: none;
}


@include mq(sm, max, width) {

  .unl-footer-unl {
    margin-bottom: #{ms(-8)}em;
  }

}


@include mq(sm, min, width) {

  .unl-footer-logos {
    justify-content: flex-end;
  }

}
", "wdn/templates_5.3/scss/components/_components.footer.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.footer.scss");
    }
}
