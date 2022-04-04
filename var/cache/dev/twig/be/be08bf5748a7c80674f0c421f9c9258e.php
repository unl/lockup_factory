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

/* @WDNFramework/5.3/php.local.dwt.twig */
class __TwigTemplate_9500fe3a33fcaa22b356b842d5ea672a extends Template
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
            'navlinks' => [$this, 'block_navlinks'],
            'navvisit' => [$this, 'block_navvisit'],
            'navapply' => [$this, 'block_navapply'],
            'navgive' => [$this, 'block_navgive'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'pagetitle' => [$this, 'block_pagetitle'],
            'herogroup1' => [$this, 'block_herogroup1'],
            'herogroup2' => [$this, 'block_herogroup2'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WDNFramework/5.3/php.local.dwt.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WDNFramework/5.3/php.local.dwt.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"dcf-no-js dcf-no-webp\" lang=\"en\">
<head>
    ";
        // line 4
        $this->loadTemplate("wdn/templates_5.3/includes/global/head-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 4)->display($context);
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
        $this->loadTemplate("wdn/templates_5.3/includes/global/head-2-local.html", "@WDNFramework/5.3/php.local.dwt.twig", 15)->display($context);
        // line 16
        echo "    <!-- TemplateBeginEditable name=\"head\" -->
    ";
        // line 17
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "    <!-- TemplateEndEditable -->
    <!-- TemplateParam name=\"class\" type=\"text\" value=\"\" -->
</head>
<body class=\"unl\" data-version=\"5.3\">
";
        // line 22
        $this->loadTemplate("wdn/templates_5.3/includes/global/skip-nav.html", "@WDNFramework/5.3/php.local.dwt.twig", 22)->display($context);
        // line 23
        echo "<header class=\"dcf-header\" id=\"dcf-header\" role=\"banner\">
    ";
        // line 24
        $this->loadTemplate("wdn/templates_5.3/includes/global/header-global-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 24)->display($context);
        // line 25
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-header-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 25)->display($context);
        // line 26
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-header-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 26)->display($context);
        // line 27
        echo "    <!-- InstanceBeginEditable name=\"headervisit\" -->
    ";
        // line 28
        $this->displayBlock('headervisit', $context, $blocks);
        // line 29
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 30
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-header-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 30)->display($context);
        // line 31
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-header-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 31)->display($context);
        // line 32
        echo "    <!-- InstanceBeginEditable name=\"headerapply\" -->
    ";
        // line 33
        $this->displayBlock('headerapply', $context, $blocks);
        // line 34
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 35
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-header-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 35)->display($context);
        // line 36
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-header-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 36)->display($context);
        // line 37
        echo "    <!-- InstanceBeginEditable name=\"headergive\" -->
    ";
        // line 38
        $this->displayBlock('headergive', $context, $blocks);
        // line 39
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 40
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-header-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 40)->display($context);
        // line 41
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-header-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 41)->display($context);
        // line 42
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/idm.html", "@WDNFramework/5.3/php.local.dwt.twig", 42)->display($context);
        // line 43
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/search.html", "@WDNFramework/5.3/php.local.dwt.twig", 43)->display($context);
        // line 44
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/header-global-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 44)->display($context);
        // line 45
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/logo-lockup-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 45)->display($context);
        // line 46
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-affiliation-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 46)->display($context);
        // line 47
        echo "    <!-- InstanceBeginEditable name=\"affiliation\" -->
    ";
        // line 48
        $this->displayBlock('affiliation', $context, $blocks);
        // line 49
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 50
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-affiliation-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 50)->display($context);
        // line 51
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-title-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 51)->display($context);
        // line 52
        echo "    <!-- InstanceBeginEditable name=\"titlegraphic\" -->
    ";
        // line 53
        $this->displayBlock('titlegraphic', $context, $blocks);
        // line 54
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 55
        $this->loadTemplate("wdn/templates_5.3/includes/global/site-title-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 55)->display($context);
        // line 56
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/logo-lockup-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 56)->display($context);
        // line 57
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-toggle-group.html", "@WDNFramework/5.3/php.local.dwt.twig", 57)->display($context);
        // line 58
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 58)->display($context);
        // line 59
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-toggle-btn.html", "@WDNFramework/5.3/php.local.dwt.twig", 59)->display($context);
        // line 60
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-child-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 60)->display($context);
        // line 61
        echo "    <!-- InstanceBeginEditable name=\"navlinks\" -->
    ";
        // line 62
        $this->displayBlock('navlinks', $context, $blocks);
        // line 63
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 64
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-nav-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 64)->display($context);
        // line 65
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-nav-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 65)->display($context);
        // line 66
        echo "    <!-- InstanceBeginEditable name=\"navvisit\" -->
    ";
        // line 67
        $this->displayBlock('navvisit', $context, $blocks);
        // line 68
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 69
        $this->loadTemplate("wdn/templates_5.3/includes/global/visit-nav-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 69)->display($context);
        // line 70
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-nav-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 70)->display($context);
        // line 71
        echo "    <!-- InstanceBeginEditable name=\"navapply\" -->
    ";
        // line 72
        $this->displayBlock('navapply', $context, $blocks);
        // line 73
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 74
        $this->loadTemplate("wdn/templates_5.3/includes/global/apply-nav-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 74)->display($context);
        // line 75
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-nav-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 75)->display($context);
        // line 76
        echo "    <!-- InstanceBeginEditable name=\"navgive\" -->
    ";
        // line 77
        $this->displayBlock('navgive', $context, $blocks);
        // line 78
        echo "    <!-- InstanceEndEditable -->
    ";
        // line 79
        $this->loadTemplate("wdn/templates_5.3/includes/global/give-nav-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 79)->display($context);
        // line 80
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/cta-nav-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 80)->display($context);
        // line 81
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-child-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 81)->display($context);
        // line 82
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/nav-menu-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 82)->display($context);
        // line 83
        echo "</header>
<main class=\"dcf-main\" id=\"dcf-main\" role=\"main\" tabindex=\"-1\">
    <!-- InstanceBeginEditable name=\"highlighted\" -->
    ";
        // line 86
        $this->displayBlock('highlighted', $context, $blocks);
        // line 87
        echo "    <!-- InstanceEndEditable -->
    <!-- TemplateBeginEditable name=\"hero\" -->
    <div class=\"dcf-hero dcf-hero-default\">
        <!-- TemplateEndEditable -->
        <div class=\"dcf-hero-group-1\">
            <div class=\"dcf-breadcrumbs-wrapper\">
                <nav class=\"dcf-breadcrumbs\" id=\"dcf-breadcrumbs\" role=\"navigation\" aria-label=\"breadcrumbs\">
                    <!-- TemplateBeginEditable name=\"breadcrumbs\" -->
                    ";
        // line 95
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 96
        echo "                    <!-- TemplateEndEditable -->
                </nav>
            </div>
            <header class=\"dcf-page-title\" id=\"dcf-page-title\">
                <!-- TemplateBeginEditable name=\"pagetitle\" -->
                ";
        // line 101
        $this->displayBlock('pagetitle', $context, $blocks);
        // line 102
        echo "                <!-- TemplateEndEditable -->
            </header>
            <!-- TemplateBeginEditable name=\"herogroup1\" -->
            ";
        // line 105
        $this->displayBlock('herogroup1', $context, $blocks);
        // line 106
        echo "            <!-- TemplateEndEditable -->
        </div>
        <!-- TemplateBeginEditable name=\"herogroup2\" -->
        ";
        // line 109
        $this->displayBlock('herogroup2', $context, $blocks);
        // line 110
        echo "        <!-- TemplateEndEditable -->
    </div>
    <div class=\"dcf-main-content dcf-wrapper\">
        <!-- TemplateBeginEditable name=\"maincontentarea\" -->
        ";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 115
        echo "        <!-- TemplateEndEditable -->
    </div>
</main>
<footer class=\"dcf-footer\" id=\"dcf-footer\" role=\"contentinfo\">
    <!-- TemplateBeginEditable name=\"optionalfooter\" -->
    ";
        // line 120
        $this->displayBlock('optionalfooter', $context, $blocks);
        // line 121
        echo "    <!-- TemplateEndEditable -->
    ";
        // line 122
        $this->loadTemplate("wdn/templates_5.3/includes/global/footer-global-1.html", "@WDNFramework/5.3/php.local.dwt.twig", 122)->display($context);
        // line 123
        echo "    <!-- TemplateBeginEditable name=\"contactinfo\" -->
    ";
        // line 124
        $this->displayBlock('contactinfo', $context, $blocks);
        // line 125
        echo "    <!-- TemplateEndEditable -->
    ";
        // line 126
        $this->loadTemplate("wdn/templates_5.3/includes/global/footer-global-2.html", "@WDNFramework/5.3/php.local.dwt.twig", 126)->display($context);
        // line 127
        echo "    ";
        $this->loadTemplate("wdn/templates_5.3/includes/global/noscript.html", "@WDNFramework/5.3/php.local.dwt.twig", 127)->display($context);
        // line 128
        echo "</footer>
";
        // line 129
        $this->loadTemplate("wdn/templates_5.3/includes/global/js-body-local.html", "@WDNFramework/5.3/php.local.dwt.twig", 129)->display($context);
        // line 130
        echo "<!-- TemplateBeginEditable name=\"jsbody\" -->
";
        // line 131
        $this->displayBlock('jsbody', $context, $blocks);
        // line 132
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_navlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navlinks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navlinks"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
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

    // line 72
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

    // line 77
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

    // line 86
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

    // line 95
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_pagetitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagetitle"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_herogroup1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "herogroup1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "herogroup1"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_herogroup2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "herogroup2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "herogroup2"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 114
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

    // line 120
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

    // line 124
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

    // line 131
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
        return "@WDNFramework/5.3/php.local.dwt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 131,  684 => 124,  666 => 120,  648 => 114,  630 => 109,  612 => 105,  594 => 101,  576 => 95,  558 => 86,  540 => 77,  522 => 72,  504 => 67,  486 => 62,  468 => 53,  450 => 48,  432 => 38,  414 => 33,  396 => 28,  378 => 17,  360 => 13,  348 => 132,  346 => 131,  343 => 130,  341 => 129,  338 => 128,  335 => 127,  333 => 126,  330 => 125,  328 => 124,  325 => 123,  323 => 122,  320 => 121,  318 => 120,  311 => 115,  309 => 114,  303 => 110,  301 => 109,  296 => 106,  294 => 105,  289 => 102,  287 => 101,  280 => 96,  278 => 95,  268 => 87,  266 => 86,  261 => 83,  258 => 82,  255 => 81,  252 => 80,  250 => 79,  247 => 78,  245 => 77,  242 => 76,  239 => 75,  237 => 74,  234 => 73,  232 => 72,  229 => 71,  226 => 70,  224 => 69,  221 => 68,  219 => 67,  216 => 66,  213 => 65,  211 => 64,  208 => 63,  206 => 62,  203 => 61,  200 => 60,  197 => 59,  194 => 58,  191 => 57,  188 => 56,  186 => 55,  183 => 54,  181 => 53,  178 => 52,  175 => 51,  173 => 50,  170 => 49,  168 => 48,  165 => 47,  162 => 46,  159 => 45,  156 => 44,  153 => 43,  150 => 42,  147 => 41,  145 => 40,  142 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  129 => 34,  127 => 33,  124 => 32,  121 => 31,  119 => 30,  116 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  103 => 24,  100 => 23,  98 => 22,  92 => 18,  90 => 17,  87 => 16,  85 => 15,  82 => 14,  80 => 13,  70 => 5,  68 => 4,  63 => 1,);
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
<body class=\"unl\" data-version=\"5.3\">
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
    {% block titlegraphic %}{% endblock %}
    <!-- InstanceEndEditable -->
    {% include 'wdn/templates_5.3/includes/global/site-title-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/logo-lockup-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-toggle-group.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-menu-1.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-toggle-btn.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-menu-child-1.html' %}
    <!-- InstanceBeginEditable name=\"navlinks\" -->
    {% block navlinks %}{% endblock %}
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
    {% include 'wdn/templates_5.3/includes/global/nav-menu-child-2.html' %}
    {% include 'wdn/templates_5.3/includes/global/nav-menu-2.html' %}
</header>
<main class=\"dcf-main\" id=\"dcf-main\" role=\"main\" tabindex=\"-1\">
    <!-- InstanceBeginEditable name=\"highlighted\" -->
    {% block highlighted %}{% endblock %}
    <!-- InstanceEndEditable -->
    <!-- TemplateBeginEditable name=\"hero\" -->
    <div class=\"dcf-hero dcf-hero-default\">
        <!-- TemplateEndEditable -->
        <div class=\"dcf-hero-group-1\">
            <div class=\"dcf-breadcrumbs-wrapper\">
                <nav class=\"dcf-breadcrumbs\" id=\"dcf-breadcrumbs\" role=\"navigation\" aria-label=\"breadcrumbs\">
                    <!-- TemplateBeginEditable name=\"breadcrumbs\" -->
                    {% block breadcrumbs %}{% endblock %}
                    <!-- TemplateEndEditable -->
                </nav>
            </div>
            <header class=\"dcf-page-title\" id=\"dcf-page-title\">
                <!-- TemplateBeginEditable name=\"pagetitle\" -->
                {% block pagetitle %}{% endblock %}
                <!-- TemplateEndEditable -->
            </header>
            <!-- TemplateBeginEditable name=\"herogroup1\" -->
            {% block herogroup1 %}{% endblock %}
            <!-- TemplateEndEditable -->
        </div>
        <!-- TemplateBeginEditable name=\"herogroup2\" -->
        {% block herogroup2 %}{% endblock %}
        <!-- TemplateEndEditable -->
    </div>
    <div class=\"dcf-main-content dcf-wrapper\">
        <!-- TemplateBeginEditable name=\"maincontentarea\" -->
        {% block content %}{% endblock %}
        <!-- TemplateEndEditable -->
    </div>
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
</html>", "@WDNFramework/5.3/php.local.dwt.twig", "/Users/abhirijal/unl_lockup_factory/vendor/unl/wdn-symfony-framework/Resources/views/5.3/php.local.dwt.twig");
    }
}
