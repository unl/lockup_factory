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

/* manageLockups.html.twig */
class __TwigTemplate_fdcd5841426994a755ce0324a7b60022 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manageLockups.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manageLockups.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"dcf-wrapper dcf-bleed dcf-pb-7 unl-bg-cream\">
    <h3>Manage your lockups</h3>
    <p>Welcome ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " </p>
    <table class=\"dcf-table dcf-table-bordered dcf-table-responsive dcf-table-striped dcf-w-100%\">
        <tr>
            <th>
                Title
            </th>
            <th>
                Preview
            </th>
            <th>
                Approver
            </th>
            <th>
                Status
            </th>
            <th>
                Actions
            </th>
        </tr>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lockups_array"]) || array_key_exists("lockups_array", $context) ? $context["lockups_array"] : (function () { throw new RuntimeError('Variable "lockups_array" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "        <tr>
            <td>
                ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 26), "html", null, true);
            echo "
            </td>
            <td>
            <div class=\"table-preview\">";
            // line 29
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getTemplate", [], "any", false, false, false, 29), "getStyle", [], "any", false, false, false, 29) == "h")) ? (twig_get_attribute($this->env, $this->source, $context["item"], "getPreviewH", [], "any", false, false, false, 29)) : (twig_get_attribute($this->env, $this->source, $context["item"], "getPreviewV", [], "any", false, false, false, 29)));
            echo "</div>
            </td>
            <td>
                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getApprover", [], "any", false, false, false, 32), "html", null, true);
            echo "
            </td>
            <td>
            ";
            // line 35
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "getStatus", [], "any", false, false, false, 35) == 0)) ? ("<p><strong>Communicator</strong>: Awaiting Approval<br></p>
                <p><strong>Creative</strong>: Awaiting Approval</p>") : (""));
            // line 36
            echo "
            </td>
            <td>
                <a href=\"/lockups/preview/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 39), "html", null, true);
            echo "\"><button class=\"dcf-btn dcf-btn-secondary\">View</button></a>
                <form action=\"/lockups/delete/\" method=\"POST\" style=\"display: inline;\">
                    <button type=\"submit\" class=\"dcf-btn dcf-btn-primary\">Delete</button>
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                </form>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "manageLockups.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  129 => 42,  123 => 39,  118 => 36,  115 => 35,  109 => 32,  103 => 29,  97 => 26,  93 => 24,  89 => 23,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<div class=\"dcf-wrapper dcf-bleed dcf-pb-7 unl-bg-cream\">
    <h3>Manage your lockups</h3>
    <p>Welcome {{ user }} </p>
    <table class=\"dcf-table dcf-table-bordered dcf-table-responsive dcf-table-striped dcf-w-100%\">
        <tr>
            <th>
                Title
            </th>
            <th>
                Preview
            </th>
            <th>
                Approver
            </th>
            <th>
                Status
            </th>
            <th>
                Actions
            </th>
        </tr>
        {% for item in lockups_array%}
        <tr>
            <td>
                {{item.getId}}
            </td>
            <td>
            <div class=\"table-preview\">{{ (item.getTemplate.getStyle == 'h') ? item.getPreviewH | raw : item.getPreviewV | raw }}</div>
            </td>
            <td>
                {{item.getApprover}}
            </td>
            <td>
            {{(item.getStatus == 0) ? \"<p><strong>Communicator</strong>: Awaiting Approval<br></p>
                <p><strong>Creative</strong>: Awaiting Approval</p>\" | raw : \"\" | raw}}
            </td>
            <td>
                <a href=\"/lockups/preview/{{item.getId}}\"><button class=\"dcf-btn dcf-btn-secondary\">View</button></a>
                <form action=\"/lockups/delete/\" method=\"POST\" style=\"display: inline;\">
                    <button type=\"submit\" class=\"dcf-btn dcf-btn-primary\">Delete</button>
                    <input type=\"hidden\" name=\"id\" value=\"{{item.getId}}\">
                </form>
            </td>
        </tr>
        {% endfor %}
    </table>
</div>
{% endblock %}", "manageLockups.html.twig", "/Users/abhirijal/unl_lockup_factory/templates/manageLockups.html.twig");
    }
}
