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

/* previewLockups.html.twig */
class __TwigTemplate_5b66939aaee44585e573f398cc956438 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "previewLockups.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "previewLockups.html.twig"));

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
    <h3>Edit lockup</h3>
    <div class=\"dcf-notice dcf-notice-info dcf-d-grid dcf-ml-auto dcf-mr-auto dcf-mb-6 dcf-rounded dcf-notice-initialized dcf-w-max-lg\"
        id=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd\" role=\"alertdialog\"
        aria-labelledby=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd-heading\">
        <div class=\"dcf-notice-icon\"><svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\"
                width=\"24\" viewBox=\"0 0 24 24\">
                <path fill=\"#fefdfa\"
                    d=\"M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm-.5 4.8c.7 0 1.2.6 1.2 1.2s-.6 1.2-1.2 1.2-1.3-.5-1.3-1.2.6-1.2 1.3-1.2zM15 19.2H9c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h2.2v-7.5H10c-.4 0-.8-.3-.8-.8s.4-.5.8-.5h2c.2 0 .4.1.5.2.1.1.2.3.2.5v8.2H15c.4 0 .8.3.8.8s-.4.7-.8.7z\">
                </path>
            </svg></div>
        <div class=\"dcf-notice-body\">
            <h4 class=\"dcf-notice-heading dcf-txt-h6 dcf-mb-0 text-white\"
                id=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd-heading\">Info</h4>
            <div class=\"dcf-notice-message dcf-txt-xs\">Your lockup is being reviewed by your Communicator Contact and
                University Communications.
            </div>
        </div>
        <div class=\"dcf-notice-close\"><button class=\"dcf-btn dcf-btn-inverse-tertiary dcf-lh-1\"><span
                    class=\"dcf-sr-only\">Close this notice</span><svg class=\"dcf-fill-current\" aria-hidden=\"true\"
                    focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\">
                    <path
                        d=\"M23.707 22.293L13.414 12 23.706 1.707A.999.999 0 1022.292.293L12 10.586 1.706.292A1 1 0 00.292 1.706L10.586 12 .292 22.294a1 1 0 101.414 1.414L12 13.414l10.293 10.292a.999.999 0 101.414-1.413z\">
                    </path>
                    <path fill=\"none\" d=\"M0 0h24v24H0z\"></path>
                </svg></button></div>
    </div>
    <div class=\"dcf-grid dcf-grid-full dcf-grid-halves@md\">
        <div>
            <h4>
                Preview Lockup
            </h4>
            ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["SVG"]) || array_key_exists("SVG", $context) ? $context["SVG"] : (function () { throw new RuntimeError('Variable "SVG" does not exist.', 34, $this->source); })()), "getPreviewH", [], "any", false, false, false, 34) != null)) {
            // line 35
            echo "            <div class=\"horiz\">
            <div style=\"display: inline-block\">
            <div class=\"lockups-preview dcf-p-7\">
                ";
            // line 38
            echo twig_get_attribute($this->env, $this->source, (isset($context["SVG"]) || array_key_exists("SVG", $context) ? $context["SVG"] : (function () { throw new RuntimeError('Variable "SVG" does not exist.', 38, $this->source); })()), "getPreviewH", [], "any", false, false, false, 38);
            echo "
            </div>
            <p class=\"dcf-txt-center\">
                <i>
                    Horizontal
                </i>
            </p></div>
                        
            </div>
            ";
        }
        // line 48
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["SVG"]) || array_key_exists("SVG", $context) ? $context["SVG"] : (function () { throw new RuntimeError('Variable "SVG" does not exist.', 48, $this->source); })()), "getPreviewV", [], "any", false, false, false, 48) != null)) {
            // line 49
            echo "            <div class=\"vert\">
            <div style=\"display: inline-block\">
                            <div class=\"lockups-preview dcf-p-7\">
                ";
            // line 52
            echo twig_get_attribute($this->env, $this->source, (isset($context["SVG"]) || array_key_exists("SVG", $context) ? $context["SVG"] : (function () { throw new RuntimeError('Variable "SVG" does not exist.', 52, $this->source); })()), "getPreviewV", [], "any", false, false, false, 52);
            echo "
                </div>
                <p class=\"dcf-txt-center\">
                <i>
                    Vertical
                </i>
            </p>
            </div></div>

            ";
        }
        // line 62
        echo "        </div>
        <div>
                    <h4>
                Actions
            </h4>
            <div class=\"dcf-mb-5\">
            <button class=\"dcf-btn dcf-btn-secondary\">Edit Lockup</button>
            </div>
            <h4>
                Details
            </h4>
            <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Awaiting Approval<br>
            </div>
            
            <div>
                <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca; font-style: italic;\" disabled=\"\" rows=\"5\" id=\"communicator-feedback\" name=\"communicator_feedback\">Feedback from communicator will be posted here.</textarea>
            </div>
            <br>
            <div style=\"border-radius: 8px;\" class=\"unl-bg-green dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Approved</div>
            <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #000;border-color: #c7c8ca;\" disabled=\"\" rows=\"5\" id=\"creative-feedback\" name=\"creative_feedback\">Just kidding. Your lockups not approved.</textarea>
        </div>
        
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "previewLockups.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 62,  125 => 52,  120 => 49,  117 => 48,  104 => 38,  99 => 35,  97 => 34,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<div class=\"dcf-wrapper dcf-bleed dcf-pb-7 unl-bg-cream\">
    <h3>Edit lockup</h3>
    <div class=\"dcf-notice dcf-notice-info dcf-d-grid dcf-ml-auto dcf-mr-auto dcf-mb-6 dcf-rounded dcf-notice-initialized dcf-w-max-lg\"
        id=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd\" role=\"alertdialog\"
        aria-labelledby=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd-heading\">
        <div class=\"dcf-notice-icon\"><svg class=\"dcf-h-100% dcf-w-100%\" aria-hidden=\"true\" focusable=\"false\" height=\"24\"
                width=\"24\" viewBox=\"0 0 24 24\">
                <path fill=\"#fefdfa\"
                    d=\"M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm-.5 4.8c.7 0 1.2.6 1.2 1.2s-.6 1.2-1.2 1.2-1.3-.5-1.3-1.2.6-1.2 1.3-1.2zM15 19.2H9c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h2.2v-7.5H10c-.4 0-.8-.3-.8-.8s.4-.5.8-.5h2c.2 0 .4.1.5.2.1.1.2.3.2.5v8.2H15c.4 0 .8.3.8.8s-.4.7-.8.7z\">
                </path>
            </svg></div>
        <div class=\"dcf-notice-body\">
            <h4 class=\"dcf-notice-heading dcf-txt-h6 dcf-mb-0 text-white\"
                id=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd-heading\">Info</h4>
            <div class=\"dcf-notice-message dcf-txt-xs\">Your lockup is being reviewed by your Communicator Contact and
                University Communications.
            </div>
        </div>
        <div class=\"dcf-notice-close\"><button class=\"dcf-btn dcf-btn-inverse-tertiary dcf-lh-1\"><span
                    class=\"dcf-sr-only\">Close this notice</span><svg class=\"dcf-fill-current\" aria-hidden=\"true\"
                    focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 24 24\">
                    <path
                        d=\"M23.707 22.293L13.414 12 23.706 1.707A.999.999 0 1022.292.293L12 10.586 1.706.292A1 1 0 00.292 1.706L10.586 12 .292 22.294a1 1 0 101.414 1.414L12 13.414l10.293 10.292a.999.999 0 101.414-1.413z\">
                    </path>
                    <path fill=\"none\" d=\"M0 0h24v24H0z\"></path>
                </svg></button></div>
    </div>
    <div class=\"dcf-grid dcf-grid-full dcf-grid-halves@md\">
        <div>
            <h4>
                Preview Lockup
            </h4>
            {% if SVG.getPreviewH != null%}
            <div class=\"horiz\">
            <div style=\"display: inline-block\">
            <div class=\"lockups-preview dcf-p-7\">
                {{ SVG.getPreviewH | raw }}
            </div>
            <p class=\"dcf-txt-center\">
                <i>
                    Horizontal
                </i>
            </p></div>
                        
            </div>
            {% endif %}
            {% if SVG.getPreviewV != null%}
            <div class=\"vert\">
            <div style=\"display: inline-block\">
                            <div class=\"lockups-preview dcf-p-7\">
                {{ SVG.getPreviewV | raw }}
                </div>
                <p class=\"dcf-txt-center\">
                <i>
                    Vertical
                </i>
            </p>
            </div></div>

            {% endif %}
        </div>
        <div>
                    <h4>
                Actions
            </h4>
            <div class=\"dcf-mb-5\">
            <button class=\"dcf-btn dcf-btn-secondary\">Edit Lockup</button>
            </div>
            <h4>
                Details
            </h4>
            <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Awaiting Approval<br>
            </div>
            
            <div>
                <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca; font-style: italic;\" disabled=\"\" rows=\"5\" id=\"communicator-feedback\" name=\"communicator_feedback\">Feedback from communicator will be posted here.</textarea>
            </div>
            <br>
            <div style=\"border-radius: 8px;\" class=\"unl-bg-green dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Approved</div>
            <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #000;border-color: #c7c8ca;\" disabled=\"\" rows=\"5\" id=\"creative-feedback\" name=\"creative_feedback\">Just kidding. Your lockups not approved.</textarea>
        </div>
        
    </div>
</div>
{% endblock %}", "previewLockups.html.twig", "/Users/abhirijal/unl_lockup_factory/templates/previewLockups.html.twig");
    }
}
