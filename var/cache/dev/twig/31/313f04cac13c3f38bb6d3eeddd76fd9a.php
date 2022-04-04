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

/* wdn/templates_5.2/js/js-css/monthwidget.css */
class __TwigTemplate_28175b1185563743af395ecd80346a24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/monthwidget.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/monthwidget.css"));

        // line 1
        echo ".wp-calendar a{text-decoration:none}.wp-calendar td,.wp-calendar th{line-height:1;text-align:center;vertical-align:middle;width:14.28571%}.wp-calendar th{background-color:var(--bg-lightest-gray);font-size:.84em;padding:1em 0}.wp-calendar td{background-color:var(--bg-white);padding:0}.wp-calendar td>div{position:relative}.wp-calendar td>div>a:focus,.wp-calendar td>div>a:hover{-webkit-box-shadow:0 0 .75em rgba(227,227,226,.75);box-shadow:0 0 .75em rgba(227,227,226,.75)}.wp-calendar td a,.wp-calendar td span{display:block;padding:1em 0}.wp-calendar td.next a,.wp-calendar td.prev a{font-size:.75em;padding:1.5em 0}.wp-calendar td.today>div>a{outline:2px solid #d00000}.wp-calendar .monthvalue a:focus,.wp-calendar .monthvalue a:hover,.wp-calendar .yearvalue a:focus,.wp-calendar .yearvalue a:hover,.wp-calendar td .eventContainer a:focus,.wp-calendar td .eventContainer a:hover{text-decoration:underline}.wp-calendar caption{background-color:#424240;font-size:.75em;letter-spacing:.06em;margin:0;padding:0;text-align:center;text-transform:uppercase}.wp-calendar .monthvalue,.wp-calendar .yearvalue{display:inline-block;padding-bottom:1em;padding-top:1em}.wp-calendar caption .prev{float:left}.wp-calendar caption .next{float:right}.wp-calendar caption a{color:#fefdfa}.wp-calendar caption .next a,.wp-calendar caption .prev a{display:inline-block;padding:1em 1.33em}.wp-calendar caption .next a:before,.wp-calendar caption .prev a:after{display:inline-block;font-family:wdn-icon;font-size:.75em;font-style:normal;font-variant:normal;font-weight:400;line-height:1}.wp-calendar caption .prev a:after{content:\"\\e80a\"}.wp-calendar caption .next a:before{content:\"\\e808\"}
/*# sourceMappingURL=monthwidget.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/js-css/monthwidget.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wp-calendar a{text-decoration:none}.wp-calendar td,.wp-calendar th{line-height:1;text-align:center;vertical-align:middle;width:14.28571%}.wp-calendar th{background-color:var(--bg-lightest-gray);font-size:.84em;padding:1em 0}.wp-calendar td{background-color:var(--bg-white);padding:0}.wp-calendar td>div{position:relative}.wp-calendar td>div>a:focus,.wp-calendar td>div>a:hover{-webkit-box-shadow:0 0 .75em rgba(227,227,226,.75);box-shadow:0 0 .75em rgba(227,227,226,.75)}.wp-calendar td a,.wp-calendar td span{display:block;padding:1em 0}.wp-calendar td.next a,.wp-calendar td.prev a{font-size:.75em;padding:1.5em 0}.wp-calendar td.today>div>a{outline:2px solid #d00000}.wp-calendar .monthvalue a:focus,.wp-calendar .monthvalue a:hover,.wp-calendar .yearvalue a:focus,.wp-calendar .yearvalue a:hover,.wp-calendar td .eventContainer a:focus,.wp-calendar td .eventContainer a:hover{text-decoration:underline}.wp-calendar caption{background-color:#424240;font-size:.75em;letter-spacing:.06em;margin:0;padding:0;text-align:center;text-transform:uppercase}.wp-calendar .monthvalue,.wp-calendar .yearvalue{display:inline-block;padding-bottom:1em;padding-top:1em}.wp-calendar caption .prev{float:left}.wp-calendar caption .next{float:right}.wp-calendar caption a{color:#fefdfa}.wp-calendar caption .next a,.wp-calendar caption .prev a{display:inline-block;padding:1em 1.33em}.wp-calendar caption .next a:before,.wp-calendar caption .prev a:after{display:inline-block;font-family:wdn-icon;font-size:.75em;font-style:normal;font-variant:normal;font-weight:400;line-height:1}.wp-calendar caption .prev a:after{content:\"\\e80a\"}.wp-calendar caption .next a:before{content:\"\\e808\"}
/*# sourceMappingURL=monthwidget.css.map */", "wdn/templates_5.2/js/js-css/monthwidget.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/js-css/monthwidget.css");
    }
}
