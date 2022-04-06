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
    <div class=\"dcf-notice ";
        // line 4
        echo ((((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 4, $this->source); })()), "getCreativeStatus", [], "any", false, false, false, 4) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 4, $this->source); })()), "getCommunicatorStatus", [], "any", false, false, false, 4) == 1))) ? ("dcf-notice-success") : ("dcf-notice-info"));
        echo " dcf-d-grid dcf-ml-auto dcf-mr-auto dcf-mb-6 dcf-rounded dcf-notice-initialized dcf-w-max-lg\"
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
                id=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd-heading\">";
        // line 15
        echo ((((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 15, $this->source); })()), "getCreativeStatus", [], "any", false, false, false, 15) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 15, $this->source); })()), "getCommunicatorStatus", [], "any", false, false, false, 15) == 1))) ? ("Approved") : ("Info"));
        echo "</h4>
            <div class=\"dcf-notice-message dcf-txt-xs\">Your lockup ";
        // line 16
        echo ((((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 16, $this->source); })()), "getCreativeStatus", [], "any", false, false, false, 16) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 16, $this->source); })()), "getCommunicatorStatus", [], "any", false, false, false, 16) == 1))) ? ("has been approved") : ("is being reviewed"));
        echo " by your Communicator Contact and
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 34, $this->source); })()), "getPreviewH", [], "any", false, false, false, 34) != null)) {
            // line 35
            echo "            <div class=\"horiz\">
            <div style=\"display: inline-block\">
            <div class=\"lockups-preview dcf-p-7\">
                ";
            // line 38
            echo twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 38, $this->source); })()), "getPreviewH", [], "any", false, false, false, 38);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 48, $this->source); })()), "getPreviewV", [], "any", false, false, false, 48) != null)) {
            // line 49
            echo "            <div class=\"vert\">
            <div style=\"display: inline-block\">
                            <div class=\"lockups-preview dcf-p-7\">
                ";
            // line 52
            echo twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 52, $this->source); })()), "getPreviewV", [], "any", false, false, false, 52);
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
            <button class=\"dcf-btn dcf-btn-primary\"> Download Lockup</button>
            </div>
            <h4>
                Details
            </h4>
            ";
        // line 74
        if (((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 74, $this->source); })()), "getCommunicatorStatus", [], "any", false, false, false, 74) == 0) && (twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 74, $this->source); })()), "getCommunicatorFeedback", [], "any", false, false, false, 74) != null))) {
            // line 75
            echo "            <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Feedback received<br>

            </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 79
(isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 79, $this->source); })()), "getCommunicatorStatus", [], "any", false, false, false, 79) == 1)) {
            // line 80
            echo "            <div style=\"border-radius: 8px;\" class=\"unl-bg-green dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Approved</div>
            ";
        } else {
            // line 83
            echo "                        <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Awaiting Approval<br>
            </div>
            ";
        }
        // line 87
        echo "                                    <div>
                        ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 88, $this->source); })()), "getCommunicatorFeedback", [], "any", false, false, false, 88) != null)) {
            // line 89
            echo "                                    <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca;\" disabled=\"\" rows=\"5\" id=\"creative-feedback\" name=\"creative_feedback\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 89, $this->source); })()), "getCommunicatorFeedback", [], "any", false, false, false, 89), "html", null, true);
            echo "</textarea>

                        ";
        } else {
            // line 92
            echo "                                        <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca; font-style: italic;\" disabled=\"\" rows=\"5\" id=\"communicator-feedback\" name=\"communicator_feedback\">Feedback from communicator will be posted here.</textarea>
                        ";
        }
        // line 94
        echo "            </div>
            <br>
            ";
        // line 96
        if (((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 96, $this->source); })()), "getCreativeStatus", [], "any", false, false, false, 96) == 0) && (twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 96, $this->source); })()), "getCreativeFeedback", [], "any", false, false, false, 96) != null))) {
            // line 97
            echo "            <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Feedback received<br>

            </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 101
(isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 101, $this->source); })()), "getCreativeStatus", [], "any", false, false, false, 101) == 1)) {
            // line 102
            echo "            <div style=\"border-radius: 8px;\" class=\"unl-bg-green dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Approved</div>
            ";
        } else {
            // line 105
            echo "                        <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Awaiting Approval<br>
            </div>
            ";
        }
        // line 109
        echo "                                                            <div>
                        ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 110, $this->source); })()), "getCreativeFeedback", [], "any", false, false, false, 110) != null)) {
            // line 111
            echo "                                    <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca;\" disabled=\"\" rows=\"5\" id=\"creative-feedback\" name=\"creative_feedback\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Lockup"]) || array_key_exists("Lockup", $context) ? $context["Lockup"] : (function () { throw new RuntimeError('Variable "Lockup" does not exist.', 111, $this->source); })()), "getCreativeFeedback", [], "any", false, false, false, 111), "html", null, true);
            echo "</textarea>

                        ";
        } else {
            // line 114
            echo "                                        <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca; font-style: italic;\" disabled=\"\" rows=\"5\" id=\"communicator-feedback\" name=\"communicator_feedback\">Feedback from creative will be posted here.</textarea>
                        ";
        }
        // line 116
        echo "            </div>
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
        return array (  239 => 116,  235 => 114,  228 => 111,  226 => 110,  223 => 109,  217 => 105,  212 => 102,  210 => 101,  204 => 97,  202 => 96,  198 => 94,  194 => 92,  187 => 89,  185 => 88,  182 => 87,  176 => 83,  171 => 80,  169 => 79,  163 => 75,  161 => 74,  147 => 62,  134 => 52,  129 => 49,  126 => 48,  113 => 38,  108 => 35,  106 => 34,  85 => 16,  81 => 15,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<div class=\"dcf-wrapper dcf-bleed dcf-pb-7 unl-bg-cream\">
    <h3>Edit lockup</h3>
    <div class=\"dcf-notice {{(Lockup.getCreativeStatus == 1 and Lockup.getCommunicatorStatus ==1) ? \"dcf-notice-success\" : \"dcf-notice-info\"}} dcf-d-grid dcf-ml-auto dcf-mr-auto dcf-mb-6 dcf-rounded dcf-notice-initialized dcf-w-max-lg\"
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
                id=\"dcf-notice-e59c27f8-8e98-4241-8bf0-88a7f92c9dcd-heading\">{{(Lockup.getCreativeStatus == 1 and Lockup.getCommunicatorStatus ==1) ? \"Approved\" : \"Info\"}}</h4>
            <div class=\"dcf-notice-message dcf-txt-xs\">Your lockup {{(Lockup.getCreativeStatus == 1 and Lockup.getCommunicatorStatus ==1) ? \"has been approved\" : \"is being reviewed\"}} by your Communicator Contact and
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
            {% if Lockup.getPreviewH != null%}
            <div class=\"horiz\">
            <div style=\"display: inline-block\">
            <div class=\"lockups-preview dcf-p-7\">
                {{ Lockup.getPreviewH | raw }}
            </div>
            <p class=\"dcf-txt-center\">
                <i>
                    Horizontal
                </i>
            </p></div>
                        
            </div>
            {% endif %}
            {% if Lockup.getPreviewV != null%}
            <div class=\"vert\">
            <div style=\"display: inline-block\">
                            <div class=\"lockups-preview dcf-p-7\">
                {{ Lockup.getPreviewV | raw }}
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
            <button class=\"dcf-btn dcf-btn-primary\"> Download Lockup</button>
            </div>
            <h4>
                Details
            </h4>
            {% if ((Lockup.getCommunicatorStatus == 0) and (Lockup.getCommunicatorFeedback != null)) %}
            <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Feedback received<br>

            </div>
            {% elseif (Lockup.getCommunicatorStatus == 1)%}
            <div style=\"border-radius: 8px;\" class=\"unl-bg-green dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Approved</div>
            {% else %}
                        <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Communicator</strong>: Awaiting Approval<br>
            </div>
            {% endif %}
                                    <div>
                        {% if Lockup.getCommunicatorFeedback != null %}
                                    <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca;\" disabled=\"\" rows=\"5\" id=\"creative-feedback\" name=\"creative_feedback\">{{Lockup.getCommunicatorFeedback}}</textarea>

                        {% else %}
                                        <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca; font-style: italic;\" disabled=\"\" rows=\"5\" id=\"communicator-feedback\" name=\"communicator_feedback\">Feedback from communicator will be posted here.</textarea>
                        {% endif %}
            </div>
            <br>
            {% if ((Lockup.getCreativeStatus == 0) and (Lockup.getCreativeFeedback != null)) %}
            <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Feedback received<br>

            </div>
            {% elseif (Lockup.getCreativeStatus == 1)%}
            <div style=\"border-radius: 8px;\" class=\"unl-bg-green dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Approved</div>
            {% else %}
                        <div style=\"border-radius: 8px;\" class=\"unl-bg-blue dcf-p-2 unl-lightest-gray dcf-mb-4\">
                <strong>Creative</strong>: Awaiting Approval<br>
            </div>
            {% endif %}
                                                            <div>
                        {% if Lockup.getCreativeFeedback != null %}
                                    <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca;\" disabled=\"\" rows=\"5\" id=\"creative-feedback\" name=\"creative_feedback\">{{Lockup.getCreativeFeedback}}</textarea>

                        {% else %}
                                        <textarea class=\"dcf-b-solid dcf-b-1 dcf-rounded dcf-p-2\" style=\"background-color: #F0F0EF; color: #424240;border-color: #c7c8ca; font-style: italic;\" disabled=\"\" rows=\"5\" id=\"communicator-feedback\" name=\"communicator_feedback\">Feedback from creative will be posted here.</textarea>
                        {% endif %}
            </div>
        </div>
        
    </div>
</div>
{% endblock %}", "previewLockups.html.twig", "/Users/abhirijal/unl_lockup_factory/templates/previewLockups.html.twig");
    }
}
