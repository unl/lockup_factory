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

/* wdn/templates_5.3/includes/local/nav-local.html */
class __TwigTemplate_af384bd4b1154377521727362f55cd19 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/nav-local.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/nav-local.html"));

        // line 1
        echo "<ul>
  <li><a href=\"#\">About</a>
    <ul>
      <li><a href=\"#\">News</a></li>
      <li><a href=\"#\">Events</a></li>
      <li><a href=\"#\">Maps</a></li>
      <li><a href=\"#\">Leadership</a></li>
      <li><a href=\"#\">Diversity &amp; Inclusion</a></li>
      <li><a href=\"#\">History</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Academics</a>
    <ul>
      <li><a href=\"#\">Fields of Study</a></li>
      <li><a href=\"#\">Colleges &amp; Departments</a></li>
      <li><a href=\"#\">Our Faculty</a></li>
      <li><a href=\"#\">Academic Calendar</a></li>
      <li><a href=\"#\">Academic Catalog</a></li>
      <li><a href=\"#\">Search for Classes</a></li>
      <li><a href=\"#\">Libraries</a></li>
      <li><a href=\"#\">Accounts &amp; Services</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Admissions</a>
    <ul>
      <li><a href=\"#\">Undergraduate</a></li>
      <li><a href=\"#\">Graduate</a></li>
      <li><a href=\"#\">Online &amp; Distance Education</a></li>
      <li><a href=\"#\">Law</a></li>
      <li><a href=\"#\">Global</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Life at Nebraska</a>
    <ul>
      <li><a href=\"#\">Student Involvement</a></li>
      <li><a href=\"#\">Arts &amp; Culture</a></li>
      <li><a href=\"#\">Athletics</a></li>
      <li><a href=\"#\">Life in Lincoln</a></li>
      <li><a href=\"#\">Campus Photos</a></li>
      <li><a href=\"#\">Faculty &amp; Staff Resources</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Research</a>
    <ul>
      <li><a href=\"#\">Office of Research &amp; Economic Development</a></li>
      <li><a href=\"#\">Nebraska Innovation Campus</a></li>
      <li><a href=\"#\">NUtech Ventures</a></li>
      <li><a href=\"#\">Industry Relations</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Outreach &amp; Impact</a>
    <ul>
      <li><a href=\"#\">Global Nebraska</a></li>
      <li><a href=\"#\">Nebraska Extension</a></li>
      <li><a href=\"#\">Parents Association</a></li>
      <li><a href=\"#\">Alumni Association</a></li>
    </ul>
  </li>
</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/nav-local.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
  <li><a href=\"#\">About</a>
    <ul>
      <li><a href=\"#\">News</a></li>
      <li><a href=\"#\">Events</a></li>
      <li><a href=\"#\">Maps</a></li>
      <li><a href=\"#\">Leadership</a></li>
      <li><a href=\"#\">Diversity &amp; Inclusion</a></li>
      <li><a href=\"#\">History</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Academics</a>
    <ul>
      <li><a href=\"#\">Fields of Study</a></li>
      <li><a href=\"#\">Colleges &amp; Departments</a></li>
      <li><a href=\"#\">Our Faculty</a></li>
      <li><a href=\"#\">Academic Calendar</a></li>
      <li><a href=\"#\">Academic Catalog</a></li>
      <li><a href=\"#\">Search for Classes</a></li>
      <li><a href=\"#\">Libraries</a></li>
      <li><a href=\"#\">Accounts &amp; Services</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Admissions</a>
    <ul>
      <li><a href=\"#\">Undergraduate</a></li>
      <li><a href=\"#\">Graduate</a></li>
      <li><a href=\"#\">Online &amp; Distance Education</a></li>
      <li><a href=\"#\">Law</a></li>
      <li><a href=\"#\">Global</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Life at Nebraska</a>
    <ul>
      <li><a href=\"#\">Student Involvement</a></li>
      <li><a href=\"#\">Arts &amp; Culture</a></li>
      <li><a href=\"#\">Athletics</a></li>
      <li><a href=\"#\">Life in Lincoln</a></li>
      <li><a href=\"#\">Campus Photos</a></li>
      <li><a href=\"#\">Faculty &amp; Staff Resources</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Research</a>
    <ul>
      <li><a href=\"#\">Office of Research &amp; Economic Development</a></li>
      <li><a href=\"#\">Nebraska Innovation Campus</a></li>
      <li><a href=\"#\">NUtech Ventures</a></li>
      <li><a href=\"#\">Industry Relations</a></li>
    </ul>
  </li>
  <li><a href=\"#\">Outreach &amp; Impact</a>
    <ul>
      <li><a href=\"#\">Global Nebraska</a></li>
      <li><a href=\"#\">Nebraska Extension</a></li>
      <li><a href=\"#\">Parents Association</a></li>
      <li><a href=\"#\">Alumni Association</a></li>
    </ul>
  </li>
</ul>
", "wdn/templates_5.3/includes/local/nav-local.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/nav-local.html");
    }
}
