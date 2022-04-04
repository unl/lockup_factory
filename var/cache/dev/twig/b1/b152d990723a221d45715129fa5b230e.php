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

/* createLockups.html.twig */
class __TwigTemplate_409aca910c45264b717b5345a88c80ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "createLockups.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "createLockups.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"dcf-wrapper dcf-bleed dcf-pb-7\">
    <div class=\"dcf-grid dcf-1st@md\">
        <div class=\"dcf-col-25%-start dcf-rounded dcf-pr-6 dcf-pl-6 dcf-pb-6\">
            <h5 class=\"dcf-mb-5\">Select your template</h5>
            <div class=\"dcf-mb-6\">
            <div class=\"dcf-grid dcf-grid-halves dcf-mb-5\">
                <button id=\"horizontal-button\" class=\"tabs-button tabs-button-active\"
                    aria-current=\"page\">Horizontal</button>
                <button id=\"vertical-button\" class=\"tabs-button\">Vertical</button>
                </div>
                <select id=\"category_list\" name=\"category_list\"
                    class=\"dcf-input-select dcf-b-1 dcf-b-solid dcf-rounded dcf-mt-2\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSlug", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </select>
            </div>
            <div style=\"height: 60vh; overflow-y: auto;\">
                <div id=\"horizontal-tab\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lockups"]) || array_key_exists("lockups", $context) ? $context["lockups"] : (function () { throw new RuntimeError('Variable "lockups" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "getStyle", [], "any", false, false, false, 24) == "h")) {
                // line 25
                echo "                    <div class=\"dcf-p-3 dcf-mt-3 dcf-mb-3 dcf-relative lockup-templates ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "any", false, false, false, 25), "getSlug", [], "any", false, false, false, 25), "html", null, true);
                echo "\" style=\"display: none;\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "any", false, false, false, 25), "getSlug", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
                        <img style=\"width: 400px; height: auto;\" src=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getImage", [], "any", false, false, false, 26), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "any", false, false, false, 26), "html", null, true);
                echo "\">
                        <div id=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"dcf-absolute img-thumb ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 27) == 1)) ? ("
                            img-thumb-active") : (""));
                // line 28
                echo "\">
                        </div>
                    </div>
                    ";
            }
            // line 32
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
                <div id=\"vertical-tab\" style=\"display: none;\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lockups"]) || array_key_exists("lockups", $context) ? $context["lockups"] : (function () { throw new RuntimeError('Variable "lockups" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "getStyle", [], "any", false, false, false, 36) == "v")) {
                // line 37
                echo "                    <div class=\"dcf-p-3 dcf-mt-3 dcf-mb-3 dcf-relative lockup-templates ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "any", false, false, false, 37), "getSlug", [], "any", false, false, false, 37), "html", null, true);
                echo "\" style=\"display: none;\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "any", false, false, false, 37), "getSlug", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
                        <img style=\"width: 400px; height: auto;\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getImage", [], "any", false, false, false, 38), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
                        <div id=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 39), "html", null, true);
                echo "\" class=\"dcf-absolute img-thumb\">
                        </div>
                    </div>
                    ";
            }
            // line 43
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </div>
            </div>
        </div>
        <div class=\"dcf-col-75%-end dcf-p-6 dcf-2nd@md\">
            <h5 class=\"dcf-mb-6\">Preview</h5>
            <div>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lockups"]) || array_key_exists("lockups", $context) ? $context["lockups"] : (function () { throw new RuntimeError('Variable "lockups" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 51), "html", null, true);
            echo "svg\" style=\"display:";
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 51) == 1)) ? (" block") : ("none"));
            echo "\"
                class=\"svgTabs\">
                <div class=\"dcf-grid dcf-grid-halves\">                            
                    <div class=\"d-flex flex-column dcf-mr-6\" style=\"background-color: #fff; border-radius: 8px;\">
                        <div>
                            <h6>";
            // line 56
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "getStyle", [], "any", false, false, false, 56) == "h")) ? ("Horizontal") : ("Vertical"));
            echo " </h6>
                        </div>
                        <div class=\"dcf-txt-center align-self-center w-100\">
                            ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["item"], "getSvg", [], "any", false, false, false, 59);
            echo "
                        </div>
                    </div>
                    ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "getLinksTo", [], "any", false, false, false, 62) != null)) {
                // line 63
                echo "                    <div class=\"d-flex\" style=\"background-color: #fff;\">
                        <div class=\"dcf-flex-col align-self-center dcf-txt-center w-100\">
                            ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lockups"]) || array_key_exists("lockups", $context) ? $context["lockups"] : (function () { throw new RuntimeError('Variable "lockups" does not exist.', 65, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 66
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "getId", [], "any", false, false, false, 66) == twig_get_attribute($this->env, $this->source, $context["item"], "getLinksTo", [], "any", false, false, false, 66))) {
                        // line 67
                        echo "                            <h6>";
                        echo (((twig_get_attribute($this->env, $this->source, $context["subitem"], "getStyle", [], "any", false, false, false, 67) == "h")) ? ("Horizontal") : ("Vertical"));
                        echo "</h6>
                            ";
                        // line 68
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "getSvg", [], "any", false, false, false, 68);
                        echo "
                            ";
                    }
                    // line 70
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                        </div>
                    </div>
                    ";
            }
            // line 74
            echo "                </div>
                <p class=\"dcf-mt-5 dcf-txt-3xs\"> <i class=\"dxf-txt-left\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "any", false, false, false, 75), "html", null, true);
            echo "</i></p>
            </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </div>
            <form method=\"POST\" action=\"/\">
                <!--  name stores the post form data -->
                <input type=\"hidden\" id=\"lockupTemplateId\" name=\"lockuptemplate\" value=\"1\">
                <div class=\"dcf-mt-6\">
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lockups_fields"]) || array_key_exists("lockups_fields", $context) ? $context["lockups_fields"] : (function () { throw new RuntimeError('Variable "lockups_fields" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 84
            echo "                    <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSlug", [], "any", false, false, false, 84), "html", null, true);
            echo "\" class=\"dcf-mb-3 input_field_class\"
                        style=\"display: ";
            // line 85
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "any", false, false, false, 85) == 1)) ? (" block") : ("none"));
            echo ";\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "any", false, false, false, 86), "html", null, true);
            echo "</label>
                        <input type=\"text\" class=\"dcf-input-text dcf-w-100%\" name=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSlug", [], "any", false, false, false, 87), "html", null, true);
            echo "\"
                            maxlength=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getLength", [], "any", false, false, false, 88), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPlaceholder", [], "any", false, false, false, 88), "html", null, true);
            echo "\"
                            ";
            // line 89
            echo ">
                        <p style=\"font-size: .8em;font-style: italic;\">Maximum ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getLength", [], "any", false, false, false, 90), "html", null, true);
            echo " characters.</p>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                    <hr>
                    <div class=\"dcf-grid dcf-grid-full dcf-grid-halves@md dcf-col-gap-5\">
                                        <div id=\"institution\" class=\"dcf-mb-3\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">College/Organization/Institution</label>
                        <input type=\"text\" class=\"dcf-input-text dcf-w-100%\" name=\"institution\"></div>

                        <div id=\"department\" class=\"dcf-mb-3\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">Department</label>
                        <input type=\"text\" class=\"dcf-input-text dcf-w-100%\" name=\"department\">
                    </div>
                    </div>
                    <div class=\"dcf-mb-3\">
                        <select def id=\"approver\" name=\"approver\"
                            class=\"dcf-input-select dcf-b-1 dcf-b-solid dcf-rounded\">
                            <option value=\"0\">Select your Communicator Contact</option>
                            <option value=\"4\">Michael Bergland-Riese (EXT)</option>
                            <option value=\"5\">Kerry McCullough-Vondrak (ARCH)</option>
                            <option value=\"6\">Terri Pieper (CAS)</option>
                            <option value=\"7\">Sheri Irwin Gish (CBA)</option>
                            <option value=\"9\">JS Engebretson (ENG)</option>
                            <option value=\"11\">Amber Wolff (LAW)</option>
                            <option value=\"12\">Kathe Andersen (FPA)</option>
                            <option value=\"14\">Shari Rosso (UH)</option>
                            <option value=\"24\">Lonna Henrichs (ATH)</option>
                            <option value=\"326\">Lauren Gayer (Student Affairs)</option>
                            <option value=\"340\">Mike Jackson (RSO)</option>
                            <option value=\"351\">Haley Apel (CEHS)</option>
                            <option value=\"425\">Joan Barnes (Libraries)</option>
                            <option value=\"476\">Ashley Washburn (ORED)</option>
                            <option value=\"557\">Chris Dulak (CREC)</option>
                            <option value=\"935\">Haley Hamel (JMC)</option>
                            <option value=\"1285\">Christina Gardner (B&amp;F)</option>
                            <option value=\"1294\">Julie Kundhi (Academic Affairs)</option>
                            <option value=\"1507\">Jerri Harner (ODI)</option>
                            <option value=\"1517\">Jeff Sheldon (ALUM)</option>
                            <option value=\"1688\">Cara Pesek (CASNR &amp; IANR)</option>
                            <option value=\"\">I'm not sure / not listed / N/A</option>
                        </select>
                    </div>
                    <button class=\"dcf-btn dcf-btn-primary\">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- tabs script -->
<script>
    const horizontalBtn = document.getElementById(\"horizontal-button\");
    const verticalBtn = document.getElementById(\"vertical-button\");
    const horizontalTab = document.getElementById(\"horizontal-tab\");
    const verticalTab = document.getElementById(\"vertical-tab\");

    horizontalBtn.addEventListener(\"click\", function() {
        switchTabs(horizontalBtn, verticalBtn, horizontalTab, verticalTab)
    });

    verticalBtn.addEventListener(\"click\", function() {
        switchTabs(verticalBtn, horizontalBtn, verticalTab, horizontalTab)
    });

    function switchTabs(btnClicked, btnCurrent, tabClicked, tabCurrent) {
        btnCurrent.classList.remove(\"tabs-button-active\");
        btnClicked.classList.add(\"tabs-button-active\");

        tabCurrent.style.display = \"none\";
        tabClicked.style.display = \"block\";
    }
</script>

<!-- script to connect input field and svg rendered texts -->
<script>
    const inputArray = ";
        // line 165
        echo (isset($context["json_lockups_fields"]) || array_key_exists("json_lockups_fields", $context) ? $context["json_lockups_fields"] : (function () { throw new RuntimeError('Variable "json_lockups_fields" does not exist.', 165, $this->source); })());
        echo ";
    let Svg = []; // select the fields accross all SVGs
    let InputDiv = []; // used to store the input field div container. used for showing and hiding input fields.
    let InputField = []; // used to store the input field itself. used for updating values accross field and SVGs.

    for (let k = 0; k < inputArray.length; k++) {
        Svg[k] = document.getElementsByClassName(inputArray[k]['slug']);
        InputDiv[k] = document.getElementById(inputArray[k]['slug']);
        InputField[k] = InputDiv[k].getElementsByTagName(\"input\")[0];
        InputField[k].addEventListener(\"input\", function () {
            updateSvgs(k)
        });
    }

    function updateSvgs(k) {
        for (let i = 0; i < Svg[k].length; i++) {
            if (inputArray[k]['Uppercase'] == 1) {
                Svg[k][i].innerHTML = InputField[k].value.toUpperCase();
            } else {
                Svg[k][i].innerHTML = InputField[k].value;
            }
        }
    }
</script>


<!-- lockups selector script -->
<script>
    const lockupTemplates = document.getElementsByClassName(\"lockup-templates\");
    const lockupSvgTabs = document.getElementsByClassName(\"svgTabs\");
    const input_fields = document.getElementsByClassName(\"input_field_class\");
    const templateFormInput = document.getElementById(\"lockupTemplateId\");
    for (let i = 0; i < lockupTemplates.length; i++) {
        lockupTemplates[i].addEventListener(\"click\", selectLockupTemplate);
    }

    function selectLockupTemplate(event) {
        let selectedSvgTab = document.getElementById(event.target.id + \"svg\");
        templateFormInput.value = event.target.id;
        // remove the active tag from all the lockups
        for (let i = 0; i < lockupTemplates.length; i++) {
            let childElement = lockupTemplates[i].getElementsByClassName(\"img-thumb\");
            childElement[0].classList.remove(\"img-thumb-active\");
        }
        // add the active tag to the selected element
        event.target.classList.add(\"img-thumb-active\");

        // change the SVG tabs too
        // first set display: none to all SVG tabs
        for (let i = 0; i < lockupSvgTabs.length; i++) {
            lockupSvgTabs[i].style.display = \"none\";
        }
        // and set display: block to the one selected
        selectedSvgTab.style.display = \"block\";

        // check the fields in the SVG and display the form field
        // first set all fields to display: none
        for (let j = 0; j < input_fields.length; j++) {
            input_fields[j].style.display = \"none\";
        }
        // now check for field class names in the SVG tab and display the field div accordingly.
        // as of now, the only way to assign fields to the SVG is through the SVG code itself.
        for (let j = 0; j < input_fields.length; j++) {
            if (selectedSvgTab.getElementsByClassName(inputArray[j]['slug']).length != 0) {
                InputDiv[j].style.display = \"block\";
            }
        }
    }
</script>

<script>
    const category_list = document.getElementById(\"category_list\");
    updateCategoryListing()
    category_list.addEventListener(\"change\", updateCategoryListing);

    function updateCategoryListing() {
        for (let i = 0; i < lockupTemplates.length; i++) {
            tempCategory = category_list.value;
        if (lockupTemplates[i].classList.contains(tempCategory)) {
            lockupTemplates[i].style.display = \"block\";
        } else {
            lockupTemplates[i].style.display = \"none\";
        }
    }
    }

</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "createLockups.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  394 => 165,  320 => 93,  311 => 90,  308 => 89,  302 => 88,  298 => 87,  294 => 86,  290 => 85,  285 => 84,  281 => 83,  274 => 78,  265 => 75,  262 => 74,  257 => 71,  251 => 70,  246 => 68,  241 => 67,  238 => 66,  234 => 65,  230 => 63,  228 => 62,  222 => 59,  216 => 56,  205 => 51,  201 => 50,  193 => 44,  187 => 43,  180 => 39,  174 => 38,  167 => 37,  164 => 36,  160 => 35,  156 => 33,  150 => 32,  144 => 28,  139 => 27,  133 => 26,  126 => 25,  123 => 24,  119 => 23,  113 => 19,  102 => 17,  98 => 16,  83 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
{% block body %}

<div class=\"dcf-wrapper dcf-bleed dcf-pb-7\">
    <div class=\"dcf-grid dcf-1st@md\">
        <div class=\"dcf-col-25%-start dcf-rounded dcf-pr-6 dcf-pl-6 dcf-pb-6\">
            <h5 class=\"dcf-mb-5\">Select your template</h5>
            <div class=\"dcf-mb-6\">
            <div class=\"dcf-grid dcf-grid-halves dcf-mb-5\">
                <button id=\"horizontal-button\" class=\"tabs-button tabs-button-active\"
                    aria-current=\"page\">Horizontal</button>
                <button id=\"vertical-button\" class=\"tabs-button\">Vertical</button>
                </div>
                <select id=\"category_list\" name=\"category_list\"
                    class=\"dcf-input-select dcf-b-1 dcf-b-solid dcf-rounded dcf-mt-2\">
                    {% for item in categories %}
                    <option value=\"{{item.getSlug}}\">{{item.getName}}</option>
                    {% endfor %}
                </select>
            </div>
            <div style=\"height: 60vh; overflow-y: auto;\">
                <div id=\"horizontal-tab\">
                    {% for item in lockups %}
                    {% if item.getStyle == \"h\" %}
                    <div class=\"dcf-p-3 dcf-mt-3 dcf-mb-3 dcf-relative lockup-templates {{item.getCategory.getSlug}}\" style=\"display: none;\" value=\"{{item.getCategory.getSlug}}\">
                        <img style=\"width: 400px; height: auto;\" src=\"{{item.getImage}}\" alt=\"{{item.getName}}\">
                        <div id=\"{{item.getId}}\" class=\"dcf-absolute img-thumb {{ (item.getId == 1) ? \"
                            img-thumb-active\"}}\">
                        </div>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
                <div id=\"vertical-tab\" style=\"display: none;\">
                    {% for item in lockups %}
                    {% if item.getStyle == \"v\" %}
                    <div class=\"dcf-p-3 dcf-mt-3 dcf-mb-3 dcf-relative lockup-templates {{item.getCategory.getSlug}}\" style=\"display: none;\" value=\"{{item.getCategory.getSlug}}\">
                        <img style=\"width: 400px; height: auto;\" src=\"{{item.getImage}}\" alt=\"{{item.getName}}\">
                        <div id=\"{{item.getId}}\" class=\"dcf-absolute img-thumb\">
                        </div>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"dcf-col-75%-end dcf-p-6 dcf-2nd@md\">
            <h5 class=\"dcf-mb-6\">Preview</h5>
            <div>
                {% for item in lockups %}
                <div id=\"{{item.getId}}svg\" style=\"display:{{ (item.getId == 1) ? \" block\" : \"none\" }}\"
                class=\"svgTabs\">
                <div class=\"dcf-grid dcf-grid-halves\">                            
                    <div class=\"d-flex flex-column dcf-mr-6\" style=\"background-color: #fff; border-radius: 8px;\">
                        <div>
                            <h6>{{(item.getStyle == \"h\") ? \"Horizontal\" : \"Vertical\"}} </h6>
                        </div>
                        <div class=\"dcf-txt-center align-self-center w-100\">
                            {{item.getSvg | raw}}
                        </div>
                    </div>
                    {% if item.getLinksTo != null%}
                    <div class=\"d-flex\" style=\"background-color: #fff;\">
                        <div class=\"dcf-flex-col align-self-center dcf-txt-center w-100\">
                            {% for subitem in lockups %}
                            {% if(subitem.getId == item.getLinksTo) %}
                            <h6>{{(subitem.getStyle == \"h\") ? \"Horizontal\" : \"Vertical\"}}</h6>
                            {{ subitem.getSvg | raw }}
                            {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    {% endif %}
                </div>
                <p class=\"dcf-mt-5 dcf-txt-3xs\"> <i class=\"dxf-txt-left\">{{item.getDescription}}</i></p>
            </div>
                {% endfor %}
            </div>
            <form method=\"POST\" action=\"/\">
                <!--  name stores the post form data -->
                <input type=\"hidden\" id=\"lockupTemplateId\" name=\"lockuptemplate\" value=\"1\">
                <div class=\"dcf-mt-6\">
                    {% for item in lockups_fields %}
                    <div id=\"{{ item.getSlug }}\" class=\"dcf-mb-3 input_field_class\"
                        style=\"display: {{(item.getId == 1) ? \" block\" : \"none\" }};\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">{{ item.getName }}</label>
                        <input type=\"text\" class=\"dcf-input-text dcf-w-100%\" name=\"{{ item.getSlug }}\"
                            maxlength=\"{{ item.getLength }}\" placeholder=\"{{item.getPlaceholder}}\"
                            {# {{(item.getUppercase==1) ? \"style=\\\" text-transform:uppercase\\\"\"}} #}>
                        <p style=\"font-size: .8em;font-style: italic;\">Maximum {{ item.getLength }} characters.</p>
                    </div>
                    {% endfor %}
                    <hr>
                    <div class=\"dcf-grid dcf-grid-full dcf-grid-halves@md dcf-col-gap-5\">
                                        <div id=\"institution\" class=\"dcf-mb-3\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">College/Organization/Institution</label>
                        <input type=\"text\" class=\"dcf-input-text dcf-w-100%\" name=\"institution\"></div>

                        <div id=\"department\" class=\"dcf-mb-3\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">Department</label>
                        <input type=\"text\" class=\"dcf-input-text dcf-w-100%\" name=\"department\">
                    </div>
                    </div>
                    <div class=\"dcf-mb-3\">
                        <select def id=\"approver\" name=\"approver\"
                            class=\"dcf-input-select dcf-b-1 dcf-b-solid dcf-rounded\">
                            <option value=\"0\">Select your Communicator Contact</option>
                            <option value=\"4\">Michael Bergland-Riese (EXT)</option>
                            <option value=\"5\">Kerry McCullough-Vondrak (ARCH)</option>
                            <option value=\"6\">Terri Pieper (CAS)</option>
                            <option value=\"7\">Sheri Irwin Gish (CBA)</option>
                            <option value=\"9\">JS Engebretson (ENG)</option>
                            <option value=\"11\">Amber Wolff (LAW)</option>
                            <option value=\"12\">Kathe Andersen (FPA)</option>
                            <option value=\"14\">Shari Rosso (UH)</option>
                            <option value=\"24\">Lonna Henrichs (ATH)</option>
                            <option value=\"326\">Lauren Gayer (Student Affairs)</option>
                            <option value=\"340\">Mike Jackson (RSO)</option>
                            <option value=\"351\">Haley Apel (CEHS)</option>
                            <option value=\"425\">Joan Barnes (Libraries)</option>
                            <option value=\"476\">Ashley Washburn (ORED)</option>
                            <option value=\"557\">Chris Dulak (CREC)</option>
                            <option value=\"935\">Haley Hamel (JMC)</option>
                            <option value=\"1285\">Christina Gardner (B&amp;F)</option>
                            <option value=\"1294\">Julie Kundhi (Academic Affairs)</option>
                            <option value=\"1507\">Jerri Harner (ODI)</option>
                            <option value=\"1517\">Jeff Sheldon (ALUM)</option>
                            <option value=\"1688\">Cara Pesek (CASNR &amp; IANR)</option>
                            <option value=\"\">I'm not sure / not listed / N/A</option>
                        </select>
                    </div>
                    <button class=\"dcf-btn dcf-btn-primary\">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- tabs script -->
<script>
    const horizontalBtn = document.getElementById(\"horizontal-button\");
    const verticalBtn = document.getElementById(\"vertical-button\");
    const horizontalTab = document.getElementById(\"horizontal-tab\");
    const verticalTab = document.getElementById(\"vertical-tab\");

    horizontalBtn.addEventListener(\"click\", function() {
        switchTabs(horizontalBtn, verticalBtn, horizontalTab, verticalTab)
    });

    verticalBtn.addEventListener(\"click\", function() {
        switchTabs(verticalBtn, horizontalBtn, verticalTab, horizontalTab)
    });

    function switchTabs(btnClicked, btnCurrent, tabClicked, tabCurrent) {
        btnCurrent.classList.remove(\"tabs-button-active\");
        btnClicked.classList.add(\"tabs-button-active\");

        tabCurrent.style.display = \"none\";
        tabClicked.style.display = \"block\";
    }
</script>

<!-- script to connect input field and svg rendered texts -->
<script>
    const inputArray = {{ json_lockups_fields | raw}};
    let Svg = []; // select the fields accross all SVGs
    let InputDiv = []; // used to store the input field div container. used for showing and hiding input fields.
    let InputField = []; // used to store the input field itself. used for updating values accross field and SVGs.

    for (let k = 0; k < inputArray.length; k++) {
        Svg[k] = document.getElementsByClassName(inputArray[k]['slug']);
        InputDiv[k] = document.getElementById(inputArray[k]['slug']);
        InputField[k] = InputDiv[k].getElementsByTagName(\"input\")[0];
        InputField[k].addEventListener(\"input\", function () {
            updateSvgs(k)
        });
    }

    function updateSvgs(k) {
        for (let i = 0; i < Svg[k].length; i++) {
            if (inputArray[k]['Uppercase'] == 1) {
                Svg[k][i].innerHTML = InputField[k].value.toUpperCase();
            } else {
                Svg[k][i].innerHTML = InputField[k].value;
            }
        }
    }
</script>


<!-- lockups selector script -->
<script>
    const lockupTemplates = document.getElementsByClassName(\"lockup-templates\");
    const lockupSvgTabs = document.getElementsByClassName(\"svgTabs\");
    const input_fields = document.getElementsByClassName(\"input_field_class\");
    const templateFormInput = document.getElementById(\"lockupTemplateId\");
    for (let i = 0; i < lockupTemplates.length; i++) {
        lockupTemplates[i].addEventListener(\"click\", selectLockupTemplate);
    }

    function selectLockupTemplate(event) {
        let selectedSvgTab = document.getElementById(event.target.id + \"svg\");
        templateFormInput.value = event.target.id;
        // remove the active tag from all the lockups
        for (let i = 0; i < lockupTemplates.length; i++) {
            let childElement = lockupTemplates[i].getElementsByClassName(\"img-thumb\");
            childElement[0].classList.remove(\"img-thumb-active\");
        }
        // add the active tag to the selected element
        event.target.classList.add(\"img-thumb-active\");

        // change the SVG tabs too
        // first set display: none to all SVG tabs
        for (let i = 0; i < lockupSvgTabs.length; i++) {
            lockupSvgTabs[i].style.display = \"none\";
        }
        // and set display: block to the one selected
        selectedSvgTab.style.display = \"block\";

        // check the fields in the SVG and display the form field
        // first set all fields to display: none
        for (let j = 0; j < input_fields.length; j++) {
            input_fields[j].style.display = \"none\";
        }
        // now check for field class names in the SVG tab and display the field div accordingly.
        // as of now, the only way to assign fields to the SVG is through the SVG code itself.
        for (let j = 0; j < input_fields.length; j++) {
            if (selectedSvgTab.getElementsByClassName(inputArray[j]['slug']).length != 0) {
                InputDiv[j].style.display = \"block\";
            }
        }
    }
</script>

<script>
    const category_list = document.getElementById(\"category_list\");
    updateCategoryListing()
    category_list.addEventListener(\"change\", updateCategoryListing);

    function updateCategoryListing() {
        for (let i = 0; i < lockupTemplates.length; i++) {
            tempCategory = category_list.value;
        if (lockupTemplates[i].classList.contains(tempCategory)) {
            lockupTemplates[i].style.display = \"block\";
        } else {
            lockupTemplates[i].style.display = \"none\";
        }
    }
    }

</script>

{% endblock %}
{% endblock %}
", "createLockups.html.twig", "/Users/abhirijal/unl_lockup_factory/templates/createLockups.html.twig");
    }
}
