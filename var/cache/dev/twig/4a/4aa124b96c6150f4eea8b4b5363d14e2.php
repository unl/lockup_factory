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

/* @WDNFramework/5.3/php.app_local.dwt.twig */
class __TwigTemplate_84341375792b5f6f7198d656baffa1e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'doctitle' => [$this, 'block_doctitle'],
            'head' => [$this, 'block_head'],
            'headervisit' => [$this, 'block_headervisit'],
            'headerapply' => [$this, 'block_headerapply'],
            'headergive' => [$this, 'block_headergive'],
            'affiliation' => [$this, 'block_affiliation'],
            'titlegraphic' => [$this, 'block_titlegraphic'],
            'appcontrols' => [$this, 'block_appcontrols'],
            'navvisit' => [$this, 'block_navvisit'],
            'navapply' => [$this, 'block_navapply'],
            'navgive' => [$this, 'block_navgive'],
            'appsearch' => [$this, 'block_appsearch'],
            'highlighted' => [$this, 'block_highlighted'],
            'content' => [$this, 'block_content'],
            'optionalfooter' => [$this, 'block_optionalfooter'],
            'contactinfo' => [$this, 'block_contactinfo'],
            'jsbody' => [$this, 'block_jsbody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WDNFramework/5.3/php.app_local.dwt.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WDNFramework/5.3/php.app_local.dwt.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"dcf-no-js dcf-no-webp\" lang=\"en\">
<head>
    ";
        // line 4
        $this->loadTemplate("wdn/templates_5.3/includes/global/head-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 4)->display($context);
        // line 5
        echo "    <!--
      Membership and regular participation in the University of Nebraska–Lincoln (UNL) Web Developer Network (WDN) is required to use the UNLedu Web Framework. Visit the WDN site at https://wdn.unl.edu/. Register for our mailing list and add your site or server to UNL Web Audit.
      All framework code is the property of the UNL Web Developer Network. The code seen in a source code view is not, and may not be used as, a template. You may not use this code, a reverse-engineered version of this code, or its associated visual presentation in whole or in part to create a derivative work.
      This message may not be removed from any pages based on the UNLedu Web Framework.

      \$Id\$
    -->
    <!-- TemplateBeginEditable name=\"doctitle\" -->
    ";
        // line 13
        $this->displayBlock('doctitle', $context, $blocks);
        // line 14
        echo "    <!-- TemplateEndEditable -->
    ";
        // line 15
        $this->loadTemplate("wdn/templates_5.3/includes/global/head-2-local.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 15)->display($context);
        // line 16
        echo "    <!-- TemplateBeginEditable name=\"head\" -->
    ";
        // line 17
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "    <!-- TemplateEndEditable -->
    <!-- TemplateParam name=\"class\" type=\"text\" value=\"\" -->
</head>
<body class=\"unl app\" data-version=\"5.3\">
";
        // line 22
        $this->loadTemplate("wdn/templates_5.3/includes/global/skip-nav.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 22)->display($context);
        // line 23
        echo "<header class=\"dcf-header\" id=\"dcf-header\" role=\"banner\">
    ";
        // line 24
        $this->loadTemplate("wdn/templates_5.3/includes/global/header-global-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 24)->display($context);
        // line 25
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-header-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 25)->display($context);
        // line 26
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-header-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 26)->display($context);
        // line 27
        echo "    <!-- InstanceBeginEditable name=\"headervisit\" -->
    ";
        // line 28
        $this->displayBlock('headervisit', $context, $blocks);
        // line 29
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 30
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-header-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 30)->display($context);
        // line 31
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-header-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 31)->display($context);
        // line 32
        echo "    <!-- InstanceBeginEditable name=\"headerapply\" -->
    ";
        // line 33
        $this->displayBlock('headerapply', $context, $blocks);
        // line 34
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 35
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-header-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 35)->display($context);
        // line 36
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-header-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 36)->display($context);
        // line 37
        echo "    <!-- InstanceBeginEditable name=\"headergive\" -->
    ";
        // line 38
        $this->displayBlock('headergive', $context, $blocks);
        // line 39
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 40
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-header-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 40)->display($context);
        // line 41
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-header-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 41)->display($context);
        // line 42
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/idm.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 42)->display($context);
        // line 43
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/search.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 43)->display($context);
        // line 44
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/header-global-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 44)->display($context);
        // line 45
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/logo-lockup-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 45)->display($context);
        // line 46
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-affiliation-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 46)->display($context);
        // line 47
        echo "    <!-- InstanceBeginEditable name=\"affiliation\" -->
    ";
        // line 48
        $this->displayBlock('affiliation', $context, $blocks);
        // line 49
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 50
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-affiliation-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 50)->display($context);
        // line 51
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-title-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 51)->display($context);
        // line 52
        echo "    <!-- InstanceBeginEditable name=\"titlegraphic\" -->
    ";
        // line 53
        $this->displayBlock('titlegraphic', $context, $blocks);
        // line 54
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 55
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-title-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 55)->display($context);
        // line 56
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/logo-lockup-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 56)->display($context);
        // line 57
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-toggle-group.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 57)->display($context);
        // line 58
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 58)->display($context);
        // line 59
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-child-app-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 59)->display($context);
        // line 60
        echo "    <!-- InstanceBeginEditable name=\"appcontrols\" -->
    ";
        // line 61
        $this->displayBlock('appcontrols', $context, $blocks);
        // line 62
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 63
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-nav-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 63)->display($context);
        // line 64
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-nav-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 64)->display($context);
        // line 65
        echo "    <!-- InstanceBeginEditable name=\"navvisit\" -->
    ";
        // line 66
        $this->displayBlock('navvisit', $context, $blocks);
        // line 67
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 68
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-nav-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 68)->display($context);
        // line 69
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-nav-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 69)->display($context);
        // line 70
        echo "    <!-- InstanceBeginEditable name=\"navapply\" -->
    ";
        // line 71
        $this->displayBlock('navapply', $context, $blocks);
        // line 72
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 73
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-nav-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 73)->display($context);
        // line 74
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-nav-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 74)->display($context);
        // line 75
        echo "    <!-- InstanceBeginEditable name=\"navgive\" -->
    ";
        // line 76
        $this->displayBlock('navgive', $context, $blocks);
        // line 77
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 78
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-nav-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 78)->display($context);
        // line 79
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-nav-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 79)->display($context);
        // line 80
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-child-app-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 80)->display($context);
        // line 81
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 81)->display($context);
        // line 82
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/app-search-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 82)->display($context);
        // line 83
        echo "    <!-- InstanceBeginEditable name=\"appsearch\" -->
    ";
        // line 84
        $this->displayBlock('appsearch', $context, $blocks);
        // line 85
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 86
        $this->loadTemplate("wdn/templates_5.3/includes/global/app-search-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 86)->display($context);
        // line 87
        echo "</header>
<main class=\"dcf-wrapper\" id=\"dcf-main\" role=\"main\" tabindex=\"-1\">
    <!-- InstanceBeginEditable name=\"highlighted\" -->
    ";
        // line 90
        $this->displayBlock('highlighted', $context, $blocks);
        // line 91
        echo "    <!-- InstanceEndEditable -->
    <!-- TemplateBeginEditable name=\"maincontentarea\" -->
    ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "    <!-- TemplateEndEditable -->
</main>
<footer class=\"dcf-footer\" id=\"dcf-footer\" role=\"contentinfo\">
    <!-- TemplateBeginEditable name=\"optionalfooter\" -->
    ";
        // line 98
        $this->displayBlock('optionalfooter', $context, $blocks);
        // line 99
        echo "    <!-- TemplateEndEditable -->
    ";
        // line 100
        $this->loadTemplate("wdn/templates_5.3/includes/global/footer-global-1.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 100)->display($context);
        // line 101
        echo "    <!-- TemplateBeginEditable name=\"contactinfo\" -->
    ";
        // line 102
        $this->displayBlock('contactinfo', $context, $blocks);
        // line 103
        echo "    <!-- TemplateEndEditable -->
    ";
        // line 104
        $this->loadTemplate("wdn/templates_5.3/includes/global/footer-global-2.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 104)->display($context);
        // line 105
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/noscript.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 105)->display($context);
        // line 106
        echo "</footer>
";
        // line 107
        $this->loadTemplate("wdn/templates_5.3/includes/global/js-body-local.html", "@WDNFramework/5.3/php.app_local.dwt.twig", 107)->display($context);
        // line 108
        echo "<!-- TemplateBeginEditable name=\"jsbody\" -->
";
        // line 109
        $this->displayBlock('jsbody', $context, $blocks);
        // line 110
        echo "<!-- TemplateEndEditable -->
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_doctitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "doctitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "doctitle"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_headervisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headervisit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headervisit"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_headerapply($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerapply"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerapply"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_headergive($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headergive"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headergive"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_affiliation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affiliation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affiliation"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_titlegraphic($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlegraphic"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlegraphic"));

        echo "<a class=\"dcf-txt-h5\" href=\"#\">Web Application</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_appcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appcontrols"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appcontrols"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_navvisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navvisit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navvisit"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_navapply($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navapply"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navapply"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_navgive($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navgive"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navgive"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_appsearch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appsearch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appsearch"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "highlighted"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "highlighted"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 93
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_optionalfooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "optionalfooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "optionalfooter"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_contactinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactinfo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactinfo"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_jsbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsbody"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WDNFramework/5.3/php.app_local.dwt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 109,  600 => 102,  582 => 98,  564 => 93,  546 => 90,  528 => 84,  510 => 76,  492 => 71,  474 => 66,  456 => 61,  437 => 53,  419 => 48,  401 => 38,  383 => 33,  365 => 28,  347 => 17,  329 => 13,  317 => 110,  315 => 109,  312 => 108,  310 => 107,  307 => 106,  304 => 105,  302 => 104,  299 => 103,  297 => 102,  294 => 101,  292 => 100,  289 => 99,  287 => 98,  281 => 94,  279 => 93,  275 => 91,  273 => 90,  268 => 87,  266 => 86,  263 => 85,  261 => 84,  258 => 83,  255 => 82,  252 => 81,  249 => 80,  246 => 79,  244 => 78,  241 => 77,  239 => 76,  236 => 75,  233 => 74,  231 => 73,  228 => 72,  226 => 71,  223 => 70,  220 => 69,  218 => 68,  215 => 67,  213 => 66,  210 => 65,  207 => 64,  205 => 63,  202 => 62,  200 => 61,  197 => 60,  194 => 59,  191 => 58,  188 => 57,  185 => 56,  183 => 55,  180 => 54,  178 => 53,  175 => 52,  172 => 51,  170 => 50,  167 => 49,  165 => 48,  162 => 47,  159 => 46,  156 => 45,  153 => 44,  150 => 43,  147 => 42,  144 => 41,  142 => 40,  139 => 39,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 34,  124 => 33,  121 => 32,  118 => 31,  116 => 30,  113 => 29,  111 => 28,  108 => 27,  105 => 26,  102 => 25,  100 => 24,  97 => 23,  95 => 22,  89 => 18,  87 => 17,  84 => 16,  82 => 15,  79 => 14,  77 => 13,  67 => 5,  65 => 4,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"dcf-no-js dcf-no-webp\" lang=\"en\">
<head>
    {% include 'wdn/templates_5.3/includes/global/head-1.html' %}
    <!--
      Membership and regular participation in the University of Nebraska–Lincoln (UNL) Web Developer Network (WDN) is required to use the UNLedu Web Framework. Visit the WDN site at https://wdn.unl.edu/. Register for our mailing list and add your site or server to UNL Web Audit.
      All framework code is the property of the UNL Web Developer Network. The code seen in a source code view is not, and may not be used as, a template. You may not use this code, a reverse-engineered version of this code, or its associated visual presentation in whole or in part to create a derivative work.
      This message may not be removed from any pages based on the UNLedu Web Framework.

      \$Id\$
    -->
    <!-- TemplateBeginEditable name=\"doctitle\" -->
    {% block doctitle %}{% endblock %}
    <!-- TemplateEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/head-2-local.html' %}
    <!-- TemplateBeginEditable name=\"head\" -->
    {% block head %}{% endblock %}
    <!-- TemplateEndEditable -->
    <!-- TemplateParam name=\"class\" type=\"text\" value=\"\" -->
</head>
<body class=\"unl app\" data-version=\"5.3\">
{% include 'wdn/templates_5.3/includes/global/skip-nav.html' %}
<header class=\"dcf-header\" id=\"dcf-header\" role=\"banner\">
    {% include 'wdn/templates_5.3/includes/global/header-global-1.html' %}
    {% include 'wdn/templates_5.3/includes/global/cta-header-1.html' %}
    {% include 'wdn/templates_5.3/includes/global/visit-header-1.html' %}
    <!-- InstanceBeginEditable name=\"headervisit\" -->
    {% block headervisit %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/visit-header-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/apply-header-1.html' %}
    <!-- InstanceBeginEditable name=\"headerapply\" -->
    {% block headerapply %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/apply-header-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/give-header-1.html' %}
    <!-- InstanceBeginEditable name=\"headergive\" -->
    {% block headergive %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/give-header-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/cta-header-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/idm.html' %}
    {% include 'wdn/templates_5.3/includes/global/search.html' %}
    {% include 'wdn/templates_5.3/includes/global/header-global-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/logo-lockup-1.html' %}
    {% include 'wdn/templates_5.3/includes/global/site-affiliation-1.html' %}
    <!-- InstanceBeginEditable name=\"affiliation\" -->
    {% block affiliation %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/site-affiliation-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/site-title-1.html' %}
    <!-- InstanceBeginEditable name=\"titlegraphic\" -->
    {% block titlegraphic %}<a class=\"dcf-txt-h5\" href=\"#\">Web Application</a>{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/site-title-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/logo-lockup-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-toggle-group.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-menu-1.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-menu-child-app-1.html' %}
    <!-- InstanceBeginEditable name=\"appcontrols\" -->
    {% block appcontrols %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/cta-nav-1.html' %}
    {% include 'wdn/templates_5.3/includes/global/visit-nav-1.html' %}
    <!-- InstanceBeginEditable name=\"navvisit\" -->
    {% block navvisit %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/visit-nav-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/apply-nav-1.html' %}
    <!-- InstanceBeginEditable name=\"navapply\" -->
    {% block navapply %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/apply-nav-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/give-nav-1.html' %}
    <!-- InstanceBeginEditable name=\"navgive\" -->
    {% block navgive %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/give-nav-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/cta-nav-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-menu-child-app-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-menu-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/app-search-1.html' %}
    <!-- InstanceBeginEditable name=\"appsearch\" -->
    {% block appsearch %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/app-search-2.html' %}
</header>
<main class=\"dcf-wrapper\" id=\"dcf-main\" role=\"main\" tabindex=\"-1\">
    <!-- InstanceBeginEditable name=\"highlighted\" -->
    {% block highlighted %}{% endblock %}
    <!-- InstanceEndEditable -->
    <!-- TemplateBeginEditable name=\"maincontentarea\" -->
    {% block content %}{% endblock %}
    <!-- TemplateEndEditable -->
</main>
<footer class=\"dcf-footer\" id=\"dcf-footer\" role=\"contentinfo\">
    <!-- TemplateBeginEditable name=\"optionalfooter\" -->
    {% block optionalfooter %}{% endblock %}
    <!-- TemplateEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/footer-global-1.html' %}
    <!-- TemplateBeginEditable name=\"contactinfo\" -->
    {% block contactinfo %}{% endblock %}
    <!-- TemplateEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/footer-global-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/noscript.html' %}
</footer>
{% include 'wdn/templates_5.3/includes/global/js-body-local.html' %}
<!-- TemplateBeginEditable name=\"jsbody\" -->
{% block jsbody %}{% endblock %}
<!-- TemplateEndEditable -->
</body>
</html>", "@WDNFramework/5.3/php.app_local.dwt.twig", "/Users/abhirijal/unl_lockup_factory/vendor/unl/wdn-symfony-framework/Resources/views/5.3/php.app_local.dwt.twig");
    }
}
