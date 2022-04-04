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

/* wdnbase.html.twig */
class __TwigTemplate_69e4c776025db7f2af4a62ef151babf9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'highlighted' => [$this, 'block_highlighted'],
            'jsbody' => [$this, 'block_jsbody'],
            'doctitle' => [$this, 'block_doctitle'],
            'titlegraphic' => [$this, 'block_titlegraphic'],
            'affiliation' => [$this, 'block_affiliation'],
            'appcontrols' => [$this, 'block_appcontrols'],
            'contactinfo' => [$this, 'block_contactinfo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@WDNFramework/5.3/php.app_local.dwt.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdnbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdnbase.html.twig"));

        $this->parent = $this->loadTemplate("@WDNFramework/5.3/php.app_local.dwt.twig", "wdnbase.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"/css/custom.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "highlighted"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "highlighted"));

        // line 9
        echo twig_include($this->env, $context, "@DCFFramework/partials/flash-notices.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_jsbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsbody"));

        // line 13
        echo "<script>
    WDN.setPluginParam(\"idm\", \"logout\", \"/logout/\");
    WDN.initializePlugin(\"notice\");
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_doctitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "doctitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "doctitle"));

        echo "<title>UNL Lockup Factory</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_titlegraphic($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlegraphic"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlegraphic"));

        echo "<a class=\"dcf-txt-h5\" href=\"/\">UNL Lockup Factory</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_affiliation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affiliation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affiliation"));

        echo "<a href=\"http://ucomm.unl.edu\">University Communication</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_appcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appcontrols"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appcontrols"));

        // line 37
        echo "<ul>
    <li><a href=\"/\">New Lockup</a></li>
    <li><a href=\"/lockups/manage\">Manage Lockups</a></li>
    <li><a href=\"/lockups/library\">Lockups Library</a></li>
</ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_contactinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactinfo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactinfo"));

        // line 44
        echo "<div id=\"dcf-footer-group-1\">
    <h3 class=\"dcf-txt-md dcf-bold dcf-uppercase dcf-lh-3 unl-ls-2 unl-cream\" id=\"dcf-footer-group-1-heading\">About UNL LOCKUP FACTORY</h3>
    <p>This application is a product of the <a href=\"https://dxg.unl.edu/\">Digital Experience Group at Nebraska</a>. DXG is a partnership of <a href=\"https://ucomm.unl.edu/\">University Communication</a> and <a href=\"https://its.unl.edu/\">Information Technology Services</a>.</p>
    </div>
<div id=\"dcf-footer-group-2\">
    <h3 class=\"dcf-txt-md dcf-bold dcf-uppercase dcf-lh-3 unl-ls-2 unl-cream\" id=\"dcf-footer-group-2-heading\">Related Links</h3>
    <ul class=\"dcf-list-bare dcf-mb-0\"> 
        <li><a href=\"https://ucomm.unl.edu/\">University Communication</a></li>
        <li><a href=\"https://dxg.unl.edu/\">Digital Experience Group</a></li>
        <li><a href=\"https://wdn.unl.edu/\">Web Developer Network</a></li>
        <li><a href=\"https://its.unl.edu/\">Information Technology Services</a></li>
  </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "wdnbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 44,  214 => 43,  199 => 37,  189 => 36,  170 => 22,  151 => 21,  132 => 20,  118 => 13,  108 => 12,  96 => 9,  86 => 8,  75 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/wdnbase.html.twig #}
{% extends '@WDNFramework/5.3/php.app_local.dwt.twig' %}

{% block head %}
<link rel=\"stylesheet\" href=\"/css/custom.css\">
{% endblock %}

{% block highlighted %}
{{ include('@DCFFramework/partials/flash-notices.html.twig') }}
{% endblock %}

{% block jsbody %}
<script>
    WDN.setPluginParam(\"idm\", \"logout\", \"/logout/\");
    WDN.initializePlugin(\"notice\");
</script>
{% endblock %}

{# Default Block Values #}
{% block doctitle %}<title>UNL Lockup Factory</title>{% endblock %}
{% block titlegraphic %}<a class=\"dcf-txt-h5\" href=\"/\">UNL Lockup Factory</a>{% endblock %}
{% block affiliation %}<a href=\"http://ucomm.unl.edu\">University Communication</a>{% endblock %}
{# {% block breadcrumbs %}
    <ol>
        <li><a href=\"https://www.unl.edu/\">Nebraska</a></li>
        <li><a href=\"/\">Chat Administration</a></li>
    </ol>
{% endblock %} #}
{# {% block navlinks %}
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/lockups/manage\">Manage Lockups</a></li>
        <li><a href=\"/lockups/library\">Library</a></li>
    </ul>
{% endblock %} #}
{% block appcontrols %}
<ul>
    <li><a href=\"/\">New Lockup</a></li>
    <li><a href=\"/lockups/manage\">Manage Lockups</a></li>
    <li><a href=\"/lockups/library\">Lockups Library</a></li>
</ul>
{% endblock %}
{% block contactinfo %}
<div id=\"dcf-footer-group-1\">
    <h3 class=\"dcf-txt-md dcf-bold dcf-uppercase dcf-lh-3 unl-ls-2 unl-cream\" id=\"dcf-footer-group-1-heading\">About UNL LOCKUP FACTORY</h3>
    <p>This application is a product of the <a href=\"https://dxg.unl.edu/\">Digital Experience Group at Nebraska</a>. DXG is a partnership of <a href=\"https://ucomm.unl.edu/\">University Communication</a> and <a href=\"https://its.unl.edu/\">Information Technology Services</a>.</p>
    </div>
<div id=\"dcf-footer-group-2\">
    <h3 class=\"dcf-txt-md dcf-bold dcf-uppercase dcf-lh-3 unl-ls-2 unl-cream\" id=\"dcf-footer-group-2-heading\">Related Links</h3>
    <ul class=\"dcf-list-bare dcf-mb-0\"> 
        <li><a href=\"https://ucomm.unl.edu/\">University Communication</a></li>
        <li><a href=\"https://dxg.unl.edu/\">Digital Experience Group</a></li>
        <li><a href=\"https://wdn.unl.edu/\">Web Developer Network</a></li>
        <li><a href=\"https://its.unl.edu/\">Information Technology Services</a></li>
  </ul>
</div>
{% endblock %}
", "wdnbase.html.twig", "/Users/abhirijal/unl_lockup_factory/templates/wdnbase.html.twig");
    }
}
