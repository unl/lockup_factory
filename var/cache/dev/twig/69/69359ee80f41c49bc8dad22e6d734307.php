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

/* wdn/templates_5.3/includes/local/app-controls.html */
class __TwigTemplate_fb07d96ddd405ff9b2576ad039ded078 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/app-controls.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/app-controls.html"));

        // line 1
        echo "<ul>
  <li><button>Group 1 Btn 1</button></li>
  <li><button>Group 1 Btn 2</button></li>
  <li><button>Group 1 Btn 3</button></li>
  <li><a href=\"#\">Group 1 Link</a></li>
</ul>
<ul>
  <li><button>Group 2 Btn 1</button></li>
  <li><button>Group 2 Btn 2</button></li>
</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/app-controls.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
  <li><button>Group 1 Btn 1</button></li>
  <li><button>Group 1 Btn 2</button></li>
  <li><button>Group 1 Btn 3</button></li>
  <li><a href=\"#\">Group 1 Link</a></li>
</ul>
<ul>
  <li><button>Group 2 Btn 1</button></li>
  <li><button>Group 2 Btn 2</button></li>
</ul>
", "wdn/templates_5.3/includes/local/app-controls.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/app-controls.html");
    }
}
