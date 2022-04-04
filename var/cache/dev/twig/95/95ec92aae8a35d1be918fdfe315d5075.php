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

/* wdn/templates_5.3/examples/forms.html */
class __TwigTemplate_cac27cc3761bb527f5355f7046e27117 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/forms.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/forms.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Forms Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <h3>Important Survey</h3>
      <form action=\"?\" method=\"post\">
        <fieldset>
          <legend>Sample Form Content</legend>
          <ol>
            <li>
              <label for=\"name\">
                <span class=\"required\">*</span>
                Name
                <span class=\"helper\">Enter Your Full Name</span>
              </label>
              <input type=\"text\" id=\"name\" name=\"name\" />
            </li>
            <li>
              <label for=\"email\">Email</label>
              <input type=\"text\" id=\"email\" name=\"email\" />
            </li>
            <li>
              <label for=\"campus\">Campus</label>
              <select name=\"campus\" id=\"campus\">
                <option value=\"\" selected=\"selected\"> </option>
                <option value=\"unl\">UNL</option>
                <option value=\"unk\">UNK</option>
                <option value=\"uno\">UNO</option>
                <option value=\"unmc\">UNMC</option>
              </select>
            </li>
            <li>
              <fieldset>
                <legend>
                    <span class=\"required\">*</span>
                    The Most Important Question: I Can Has Cheezburger?
                </legend>
                <ol>
                  <li>
                    <input type=\"radio\" value=\"1\" name=\"helpful\" id=\"helpful_yes\" />
                    <label for=\"helpful_yes\">Yes</label>
                  </li>
                  <li>
                    <input type=\"radio\" value=\"0\" name=\"helpful\" id=\"helpful_no\" />
                    <label for=\"helpful_no\">No</label>
                  </li>
                  <li>
                    <input type=\"radio\" value=\"2\" name=\"helpful\" id=\"helpful_maybe\" />
                    <label for=\"helpful_maybe\">Maybe</label>
                  </li>
                </ol>
                <ol class=\"wdn-std\">
                  <li>Yes, you get a cheezburger</li>
                  <li>No, you don't</li>
                  <li>Maybe, somebody might get one</li>
                </ol>
              </fieldset>
            </li>
            <li>
              <label for=\"helpful_comments\">In what way?</label>
              <textarea id=\"helpful_comments\" name=\"comments\" rows=\"4\" cols=\"20\"></textarea>
            </li>
            <li class=\"reqnote\">
              <span class=\"required\">*</span> denotes required field
            </li>
          </ol>
        </fieldset>
        <input type=\"submit\" name=\"submit\" value=\"Submit\" />
      </form>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/forms.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Forms Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <h3>Important Survey</h3>
      <form action=\"?\" method=\"post\">
        <fieldset>
          <legend>Sample Form Content</legend>
          <ol>
            <li>
              <label for=\"name\">
                <span class=\"required\">*</span>
                Name
                <span class=\"helper\">Enter Your Full Name</span>
              </label>
              <input type=\"text\" id=\"name\" name=\"name\" />
            </li>
            <li>
              <label for=\"email\">Email</label>
              <input type=\"text\" id=\"email\" name=\"email\" />
            </li>
            <li>
              <label for=\"campus\">Campus</label>
              <select name=\"campus\" id=\"campus\">
                <option value=\"\" selected=\"selected\"> </option>
                <option value=\"unl\">UNL</option>
                <option value=\"unk\">UNK</option>
                <option value=\"uno\">UNO</option>
                <option value=\"unmc\">UNMC</option>
              </select>
            </li>
            <li>
              <fieldset>
                <legend>
                    <span class=\"required\">*</span>
                    The Most Important Question: I Can Has Cheezburger?
                </legend>
                <ol>
                  <li>
                    <input type=\"radio\" value=\"1\" name=\"helpful\" id=\"helpful_yes\" />
                    <label for=\"helpful_yes\">Yes</label>
                  </li>
                  <li>
                    <input type=\"radio\" value=\"0\" name=\"helpful\" id=\"helpful_no\" />
                    <label for=\"helpful_no\">No</label>
                  </li>
                  <li>
                    <input type=\"radio\" value=\"2\" name=\"helpful\" id=\"helpful_maybe\" />
                    <label for=\"helpful_maybe\">Maybe</label>
                  </li>
                </ol>
                <ol class=\"wdn-std\">
                  <li>Yes, you get a cheezburger</li>
                  <li>No, you don't</li>
                  <li>Maybe, somebody might get one</li>
                </ol>
              </fieldset>
            </li>
            <li>
              <label for=\"helpful_comments\">In what way?</label>
              <textarea id=\"helpful_comments\" name=\"comments\" rows=\"4\" cols=\"20\"></textarea>
            </li>
            <li class=\"reqnote\">
              <span class=\"required\">*</span> denotes required field
            </li>
          </ol>
        </fieldset>
        <input type=\"submit\" name=\"submit\" value=\"Submit\" />
      </form>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/forms.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/forms.html");
    }
}
