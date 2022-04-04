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

/* wdn/templates_5.3/scss/components/_components.breadcrumbs.scss */
class __TwigTemplate_a9537f5f99dfd28eb1613a6564ca8857 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.breadcrumbs.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/components/_components.breadcrumbs.scss"));

        // line 1
        echo "///////////////////////////////////
// THEME / COMPONENTS / BREADCRUMBS
///////////////////////////////////


.unl .dcf-breadcrumbs {
  @include txt-2xs;
}


.unl .dcf-breadcrumbs ol {
  display: flex;
  flex-wrap: nowrap; // Keep breadcrumbs on one line
  // Fix list-style: none in VoiceOver and Safari: https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  padding-left: \$length-vw-2; // Add padding to equal the wrapper object's left padding
}


.unl .dcf-breadcrumbs li {
  margin-bottom: 0;
}


.unl .dcf-breadcrumbs li:last-child {
  padding-right: \$length-vw-2; // Add padding to equal the wrapper object's right padding
}


.unl .dcf-breadcrumbs li:not(:last-child) {
  @include mr-2; // Add spacing after each breadcrumb list item — except the last
}


.unl .dcf-breadcrumbs li:not(:last-child)::after {
  // Use borders to create arrows between breadcrumb list items
  border-bottom: #{ms(-8)}em solid transparent;
  border-left: #{ms(-8)}em solid \$border-color-breadcrumb-arrow;
  border-top: #{ms(-8)}em solid transparent;
  content: '';
  @include ml-2; // Add spacing before each breadcrumb arrow
}


@include mq(md, max, width) {

  .unl .dcf-breadcrumbs {
    @include h-9; // Set height of breadcrumbs in order to hide horizontal scroll bar
    overflow: hidden; // Hide scroll bars
  }


  .unl .dcf-breadcrumbs ol {
    @include pb-9; // Set padding-bottom to push the horizontal scroll bar out of the breadcrumbs' height
    @include overflow-x-auto; // Let breadcrumbs scroll horizontally if wider than the viewport
    @include overflow-y-hidden; // Hide vertical scroll bar in breadcrumbs region
  }


  .unl .dcf-breadcrumbs li {
    flex-shrink: 0; // Prevent breadcrumbs from wrapping to multiple lines
  }

}


@include mq(md, min, width) {

  .unl .dcf-breadcrumbs li:first-child,
  .unl .dcf-breadcrumbs li:last-child {
    flex-shrink: 0; // Prevent first breadcrumb ('Nebraska') and last breadcrumb (current page) from being truncated
  }


  .unl .dcf-breadcrumbs li:not(:first-child),
  .unl .dcf-breadcrumbs li:not(:last-child) {
    min-width: 0; // Let any breadcrumbs that aren't first or last shrink as needed
  }


  .unl .dcf-breadcrumbs li:hover {
    min-width: auto; // Show the full name of a truncated breadcrumb on hover
  }


  .unl .dcf-breadcrumbs li a {
    @include truncate; // Truncate links if there isn't enough horizontal space to accomodate all breadcrumbs
  }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/components/_components.breadcrumbs.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("///////////////////////////////////
// THEME / COMPONENTS / BREADCRUMBS
///////////////////////////////////


.unl .dcf-breadcrumbs {
  @include txt-2xs;
}


.unl .dcf-breadcrumbs ol {
  display: flex;
  flex-wrap: nowrap; // Keep breadcrumbs on one line
  // Fix list-style: none in VoiceOver and Safari: https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html
  list-style: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");
  padding-left: \$length-vw-2; // Add padding to equal the wrapper object's left padding
}


.unl .dcf-breadcrumbs li {
  margin-bottom: 0;
}


.unl .dcf-breadcrumbs li:last-child {
  padding-right: \$length-vw-2; // Add padding to equal the wrapper object's right padding
}


.unl .dcf-breadcrumbs li:not(:last-child) {
  @include mr-2; // Add spacing after each breadcrumb list item — except the last
}


.unl .dcf-breadcrumbs li:not(:last-child)::after {
  // Use borders to create arrows between breadcrumb list items
  border-bottom: #{ms(-8)}em solid transparent;
  border-left: #{ms(-8)}em solid \$border-color-breadcrumb-arrow;
  border-top: #{ms(-8)}em solid transparent;
  content: '';
  @include ml-2; // Add spacing before each breadcrumb arrow
}


@include mq(md, max, width) {

  .unl .dcf-breadcrumbs {
    @include h-9; // Set height of breadcrumbs in order to hide horizontal scroll bar
    overflow: hidden; // Hide scroll bars
  }


  .unl .dcf-breadcrumbs ol {
    @include pb-9; // Set padding-bottom to push the horizontal scroll bar out of the breadcrumbs' height
    @include overflow-x-auto; // Let breadcrumbs scroll horizontally if wider than the viewport
    @include overflow-y-hidden; // Hide vertical scroll bar in breadcrumbs region
  }


  .unl .dcf-breadcrumbs li {
    flex-shrink: 0; // Prevent breadcrumbs from wrapping to multiple lines
  }

}


@include mq(md, min, width) {

  .unl .dcf-breadcrumbs li:first-child,
  .unl .dcf-breadcrumbs li:last-child {
    flex-shrink: 0; // Prevent first breadcrumb ('Nebraska') and last breadcrumb (current page) from being truncated
  }


  .unl .dcf-breadcrumbs li:not(:first-child),
  .unl .dcf-breadcrumbs li:not(:last-child) {
    min-width: 0; // Let any breadcrumbs that aren't first or last shrink as needed
  }


  .unl .dcf-breadcrumbs li:hover {
    min-width: auto; // Show the full name of a truncated breadcrumb on hover
  }


  .unl .dcf-breadcrumbs li a {
    @include truncate; // Truncate links if there isn't enough horizontal space to accomodate all breadcrumbs
  }

}
", "wdn/templates_5.3/scss/components/_components.breadcrumbs.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/components/_components.breadcrumbs.scss");
    }
}
