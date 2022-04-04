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

/* wdn/templates_5.3/examples/table.html */
class __TwigTemplate_1166b4962ff5f1cc3c860ee5547f9c32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/table.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/table.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Table Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <table class=\"wdn_responsive_table flush-left\" id=\"crec_hours\">
        <caption>Fall 2012 Campus Recreation Hours</caption>
        <thead>
          <tr>
            <td></td>
            <th id=\"day_monday\"><abbr title=\"Monday\">Mon</abbr></th>
            <th id=\"day_tuesday\"><abbr title=\"Tuesday\">Tue</abbr></th>
            <th id=\"day_wednesday\"><abbr title=\"Wednesday\">Wed</abbr></th>
            <th id=\"day_thursday\"><abbr title=\"Thursday\">Thu</abbr></th>
            <th id=\"day_friday\"><abbr title=\"Friday\">Fri</abbr></th>
            <th id=\"day_saturday\"><abbr title=\"Saturday\">Sat</abbr></th>
            <th id=\"day_sunday\"><abbr title=\"Sunday\">Sun</abbr></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th id=\"service_crec\" rowspan=\"2\"><a href=\"http://crec.unl.edu/city\">Campus Recreation Center</a></th>
            <td class=\"hours\" headers=\"service_crec day_monday\" data-header=\"Monday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_tuesday\" data-header=\"Tuesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_wednesday\" data-header=\"Wednesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_thursday\" data-header=\"Thursday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_friday\" data-header=\"Friday\">5:45a - 11:00p</td>
            <td class=\"hours\" headers=\"service_crec day_saturday\" data-header=\"Saturday\">9:00a - 11:00p</td>
            <td class=\"hours\" headers=\"service_crec day_sunday\" data-header=\"Sunday\">11:00a - 12:00a</td>
          </tr>
          <tr>
            <td colspan=\"7\" headers=\"day_friday day_monday day_saturday day_sunday day_thursday day_tuesday day_wednesday service_crec\">Member Services Desk, Strength Training &amp; Conditioning Room, and Multipurpose Sport Courts are open the same hours as the facility.</td>
          </tr>
          <tr>
            <th id=\"service_climbingwall\"><a href=\"http://crec.unl.edu/outdoor/climbing.shtml\">Climbing Wall</a></th>
            <td class=\"hours\" headers=\"service_climbingwall day_monday\" data-header=\"Monday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_tuesday\" data-header=\"Tuesday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_wednesday\" data-header=\"Wednesday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_thursday\" data-header=\"Thursday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_friday\" data-header=\"Friday\">2:00p - 8:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_saturday\" data-header=\"Saturday\">2:00p - 8:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_sunday\" data-header=\"Sunday\">2:00p - 8:00p</td>
          </tr>
          <tr>
            <th id=\"service_fitness\">Fitness / Wellness Service <span class=\"note\"><abbr title=\"appointment\">appt</abbr> recommended</span></th>
            <td class=\"hours\" headers=\"service_fitness day_monday\" data-header=\"Monday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_tuesday\" data-header=\"Tuesday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_wednesday\" data-header=\"Wednesday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_thursday\" data-header=\"Thursday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_friday\" data-header=\"Friday\">8:00a - 5:00p</td>
            <td class=\"hours closed\" headers=\"service_fitness day_saturday\" data-header=\"Saturday\">closed</td>
            <td class=\"hours closed\" headers=\"service_fitness day_sunday\" data-header=\"Sunday\">closed</td>
          </tr>
          <tr>
            <th id=\"service_prevention\"><a href=\"http://crec.unl.edu/ipcare/\">Injury Prevention &amp; Care</a></th>
            <td class=\"hours\" headers=\"service_prevention day_monday\" data-header=\"Monday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_tuesday\" data-header=\"Tuesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_wednesday\" data-header=\"Wednesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_thursday\" data-header=\"Thursday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_friday\" data-header=\"Friday\">5:45a - 11:00p</td>
            <td class=\"hours\" headers=\"service_prevention day_saturday\" data-header=\"Saturday\">9:00a - 11:00p</td>
            <td class=\"hours\" headers=\"service_prevention day_sunday\" data-header=\"Sunday\">11:00a - 12:00a</td>
          </tr>
          <tr>
            <th id=\"service_intramural\"><a href=\"http://crec.unl.edu/im/\">Intramural Sports Office</a></th>
            <td class=\"hours\" headers=\"service_intramural day_monday\" data-header=\"Monday\">8:00a - 5:30p</td>
            <td class=\"hours\" headers=\"service_intramural day_tuesday\" data-header=\"Tuesday\">8:00a - 7:00p</td>
            <td class=\"hours\" headers=\"service_intramural day_wednesday\" data-header=\"Wednesday\">8:00a - 5:30p</td>
            <td class=\"hours\" headers=\"service_intramural day_thursday\" data-header=\"Thursday\">8:00a - 5:30p</td>
            <td class=\"hours\" headers=\"service_intramural day_friday\" data-header=\"Friday\">8:00a - 5:00p</td>
            <td class=\"hours closed\" headers=\"service_intramural day_saturday\" data-header=\"Saturday\">closed</td>
            <td class=\"hours closed\" headers=\"service_intramural day_sunday\" data-header=\"Sunday\">closed</td>
          </tr>
          <tr>
            <th id=\"service_massage\"><a href=\"http://crec.unl.edu/massage/\">Massage Therapy</a></th>
            <td class=\"hours\" headers=\"service_massage day_monday\" data-header=\"Monday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_tuesday\" data-header=\"Tuesday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_wednesday\" data-header=\"Wednesday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_thursday\" data-header=\"Thursday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_friday\" data-header=\"Friday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_saturday\" data-header=\"Saturday\">Limited <span class=\"note\">by <abbr title=\"appointment\">appt</abbr></span></td>
            <td class=\"hours\" headers=\"service_massage day_sunday\" data-header=\"Sunday\">Limited <span class=\"note\">by <abbr title=\"appointment\">appt</abbr></span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/table.html";
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
    <title>Table Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <table class=\"wdn_responsive_table flush-left\" id=\"crec_hours\">
        <caption>Fall 2012 Campus Recreation Hours</caption>
        <thead>
          <tr>
            <td></td>
            <th id=\"day_monday\"><abbr title=\"Monday\">Mon</abbr></th>
            <th id=\"day_tuesday\"><abbr title=\"Tuesday\">Tue</abbr></th>
            <th id=\"day_wednesday\"><abbr title=\"Wednesday\">Wed</abbr></th>
            <th id=\"day_thursday\"><abbr title=\"Thursday\">Thu</abbr></th>
            <th id=\"day_friday\"><abbr title=\"Friday\">Fri</abbr></th>
            <th id=\"day_saturday\"><abbr title=\"Saturday\">Sat</abbr></th>
            <th id=\"day_sunday\"><abbr title=\"Sunday\">Sun</abbr></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th id=\"service_crec\" rowspan=\"2\"><a href=\"http://crec.unl.edu/city\">Campus Recreation Center</a></th>
            <td class=\"hours\" headers=\"service_crec day_monday\" data-header=\"Monday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_tuesday\" data-header=\"Tuesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_wednesday\" data-header=\"Wednesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_thursday\" data-header=\"Thursday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_crec day_friday\" data-header=\"Friday\">5:45a - 11:00p</td>
            <td class=\"hours\" headers=\"service_crec day_saturday\" data-header=\"Saturday\">9:00a - 11:00p</td>
            <td class=\"hours\" headers=\"service_crec day_sunday\" data-header=\"Sunday\">11:00a - 12:00a</td>
          </tr>
          <tr>
            <td colspan=\"7\" headers=\"day_friday day_monday day_saturday day_sunday day_thursday day_tuesday day_wednesday service_crec\">Member Services Desk, Strength Training &amp; Conditioning Room, and Multipurpose Sport Courts are open the same hours as the facility.</td>
          </tr>
          <tr>
            <th id=\"service_climbingwall\"><a href=\"http://crec.unl.edu/outdoor/climbing.shtml\">Climbing Wall</a></th>
            <td class=\"hours\" headers=\"service_climbingwall day_monday\" data-header=\"Monday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_tuesday\" data-header=\"Tuesday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_wednesday\" data-header=\"Wednesday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_thursday\" data-header=\"Thursday\">2:00p - 10:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_friday\" data-header=\"Friday\">2:00p - 8:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_saturday\" data-header=\"Saturday\">2:00p - 8:00p</td>
            <td class=\"hours\" headers=\"service_climbingwall day_sunday\" data-header=\"Sunday\">2:00p - 8:00p</td>
          </tr>
          <tr>
            <th id=\"service_fitness\">Fitness / Wellness Service <span class=\"note\"><abbr title=\"appointment\">appt</abbr> recommended</span></th>
            <td class=\"hours\" headers=\"service_fitness day_monday\" data-header=\"Monday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_tuesday\" data-header=\"Tuesday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_wednesday\" data-header=\"Wednesday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_thursday\" data-header=\"Thursday\">8:00a - 5:00p</td>
            <td class=\"hours\" headers=\"service_fitness day_friday\" data-header=\"Friday\">8:00a - 5:00p</td>
            <td class=\"hours closed\" headers=\"service_fitness day_saturday\" data-header=\"Saturday\">closed</td>
            <td class=\"hours closed\" headers=\"service_fitness day_sunday\" data-header=\"Sunday\">closed</td>
          </tr>
          <tr>
            <th id=\"service_prevention\"><a href=\"http://crec.unl.edu/ipcare/\">Injury Prevention &amp; Care</a></th>
            <td class=\"hours\" headers=\"service_prevention day_monday\" data-header=\"Monday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_tuesday\" data-header=\"Tuesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_wednesday\" data-header=\"Wednesday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_thursday\" data-header=\"Thursday\">5:45a - 12:00a</td>
            <td class=\"hours\" headers=\"service_prevention day_friday\" data-header=\"Friday\">5:45a - 11:00p</td>
            <td class=\"hours\" headers=\"service_prevention day_saturday\" data-header=\"Saturday\">9:00a - 11:00p</td>
            <td class=\"hours\" headers=\"service_prevention day_sunday\" data-header=\"Sunday\">11:00a - 12:00a</td>
          </tr>
          <tr>
            <th id=\"service_intramural\"><a href=\"http://crec.unl.edu/im/\">Intramural Sports Office</a></th>
            <td class=\"hours\" headers=\"service_intramural day_monday\" data-header=\"Monday\">8:00a - 5:30p</td>
            <td class=\"hours\" headers=\"service_intramural day_tuesday\" data-header=\"Tuesday\">8:00a - 7:00p</td>
            <td class=\"hours\" headers=\"service_intramural day_wednesday\" data-header=\"Wednesday\">8:00a - 5:30p</td>
            <td class=\"hours\" headers=\"service_intramural day_thursday\" data-header=\"Thursday\">8:00a - 5:30p</td>
            <td class=\"hours\" headers=\"service_intramural day_friday\" data-header=\"Friday\">8:00a - 5:00p</td>
            <td class=\"hours closed\" headers=\"service_intramural day_saturday\" data-header=\"Saturday\">closed</td>
            <td class=\"hours closed\" headers=\"service_intramural day_sunday\" data-header=\"Sunday\">closed</td>
          </tr>
          <tr>
            <th id=\"service_massage\"><a href=\"http://crec.unl.edu/massage/\">Massage Therapy</a></th>
            <td class=\"hours\" headers=\"service_massage day_monday\" data-header=\"Monday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_tuesday\" data-header=\"Tuesday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_wednesday\" data-header=\"Wednesday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_thursday\" data-header=\"Thursday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_friday\" data-header=\"Friday\">9:00a - 8:00p</td>
            <td class=\"hours\" headers=\"service_massage day_saturday\" data-header=\"Saturday\">Limited <span class=\"note\">by <abbr title=\"appointment\">appt</abbr></span></td>
            <td class=\"hours\" headers=\"service_massage day_sunday\" data-header=\"Sunday\">Limited <span class=\"note\">by <abbr title=\"appointment\">appt</abbr></span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/table.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/table.html");
    }
}
