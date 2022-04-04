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

/* wdn/templates_5.1/js/js-css/rsswidget.scss */
class __TwigTemplate_86123c118c473b98f1bca8b0f850851e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/rsswidget.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/rsswidget.scss"));

        // line 1
        echo "// @import '../../less/_mixins/all.less';
//
// .wdn-rss-widget {
//
//     .rssContainer {
//         padding: .1em;
//   }
//
//     .rssBody {
//         margin: 0;
//         padding: 0;
//     }
//
//     .rssRow.odd {
//         background-color: @page-background;
//         margin: 1em;
//         padding: 2em;
//         list-style: none;
//     }
//
//     .rssRow.even {
//         background-color: darken(@page-background, 10%);
//         margin: 1em;
//         padding: 2em;
//         list-style: none;
//     }
//
//     .rssLink {
//         margin: 0 1em 0 .5em;
//         padding-left: .5em;
//         padding-top: 1em;
//     }
//
//     .rssContent {
//         margin: 0 1em 0 .5em;
//         padding-left: .5em;
//         padding-bottom: 1em;
//     }
//
//     .rssDate {
//         margin: 0 1em 0 1em;
//         padding-left: .5em;
//         font-size: 7pt;
//     }
// }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/js-css/rsswidget.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// @import '../../less/_mixins/all.less';
//
// .wdn-rss-widget {
//
//     .rssContainer {
//         padding: .1em;
//   }
//
//     .rssBody {
//         margin: 0;
//         padding: 0;
//     }
//
//     .rssRow.odd {
//         background-color: @page-background;
//         margin: 1em;
//         padding: 2em;
//         list-style: none;
//     }
//
//     .rssRow.even {
//         background-color: darken(@page-background, 10%);
//         margin: 1em;
//         padding: 2em;
//         list-style: none;
//     }
//
//     .rssLink {
//         margin: 0 1em 0 .5em;
//         padding-left: .5em;
//         padding-top: 1em;
//     }
//
//     .rssContent {
//         margin: 0 1em 0 .5em;
//         padding-left: .5em;
//         padding-bottom: 1em;
//     }
//
//     .rssDate {
//         margin: 0 1em 0 1em;
//         padding-left: .5em;
//         font-size: 7pt;
//     }
// }
", "wdn/templates_5.1/js/js-css/rsswidget.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/js-css/rsswidget.scss");
    }
}
